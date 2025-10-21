<?php

add_action('template_redirect', function () {
  ob_start('mbn_end_output_buffering');
});

// buffer modification output
function mbn_end_output_buffering($html) {
  if( is_user_logged_in() ) {
    return $html;
  }

  // Defer all script tags unless they already have defer or async,
  // but exclude if script src contains any exclusions (like wp-includes).
  $defer_exclusions = [
    'wp-includes',
    // add other exclusions as needed
  ];
  $html = preg_replace_callback(
    '/<script\b([^>]*)>/i',
    function ($matches) use ($defer_exclusions) {
      $tag   = $matches[0];
      $attrs = $matches[1];

      // Don't add defer to scripts that already have defer or async
      if (
        stripos($attrs, ' defer') !== false ||
        stripos($attrs, ' async') !== false
      ) {
        return $tag;
      }

      // Only add defer to scripts with a src attribute (external scripts)
      if (preg_match('/\ssrc\s*=\s*["\']?([^"\' >\s]+)/i', $attrs, $srcMatch)) {
        $src = $srcMatch[1];
        foreach ($defer_exclusions as $ex) {
          if (stripos($src, $ex) !== false) {
            return $tag; // Skip adding defer if src contains exclusion
          }
        }
        // Insert defer before closing '>'
        return str_replace('<script', '<script defer', $tag);
      } else {
        // For inline scripts, DON'T defer
        return $tag;
      }
    },
    $html
  );


  // Add media="print" and onload="this.media='all'" to all <link rel="stylesheet">,
  // and wrap each in <noscript> fallback with original.
  $html = preg_replace_callback(
    '#<link\b([^>]*)rel=["\']stylesheet["\']([^>]*)>#i',
    function($matches) {
      $pre = $matches[1];
      $post = $matches[2];
      $tag = "<link{$pre}rel=\"stylesheet\"{$post}>";

      // Remove any existing media and onload attributes
      $tag_no_media = preg_replace('/\smedia=([\'"])[^"\'>]*\1/i', '', $tag);
      $tag_no_onload = preg_replace('/\sonload=([\'"])[^"\'>]*\1/i', '', $tag_no_media);

      // Add the correct media and onload attributes (ensure proper spacing, no extra "/")
      $tag_final = rtrim($tag_no_onload, " />") . ' type="text/css" media="print" onload="this.media=\'all\'">';
      
      // Create noscript fallback with original (no onload/media modifications)
      $noscript = '<noscript>' . $tag . '</noscript>';

      // Return enhanced tag plus noscript fallback
      return $tag_final . $noscript;
    },
    $html
  );


  // Define the substrings/needles to search for in scripts
  $needles = array('gtag', 'gtms.js', 'googletagmanager');

  // Callback to process <script> tags
  $html = preg_replace_callback(
      '#<script([^>]*)>(.*?)</script>#is',
      function($matches) use ($needles) {
          $script_attrs = $matches[1];
          $script_body = $matches[2];

          // Check if script is external (has src) or inline
          $src_found = false;
          $has_needle = false;

          // Check external scripts
          if (preg_match('/\s+src=["\']([^"\']+)["\']/i', $script_attrs, $src_match)) {
              $src = $src_match[1];
              foreach($needles as $needle) {
                  if (stripos($src, $needle) !== false) {
                      $has_needle = true;
                      break;
                  }
              }
          } else {
              // Inline script: check in script content
              foreach($needles as $needle) {
                  if (stripos($script_body, $needle) !== false) {
                      $has_needle = true;
                      break;
                  }
              }
          }

          if ($has_needle) {
              // Change the type to text/mbn-javasscript-delay and add nitro-delay-ms attribute
              // Remove existing type if present, otherwise just add it
              $attrs_without_type = preg_replace('/\s*type\s*=\s*["\'][^"\']*["\']/i', '', $script_attrs);
              // Remove existing nitro-delay-ms if present
              $attrs_without_ndms = preg_replace('/\s*nitro-delay-ms(\s*=\s*["\'][^"\']*["\'])?/i', '', $attrs_without_type);

              $new_attrs = $attrs_without_ndms . ' type="text/mbn-javasscript-delay" nitro-delay-ms="1500" ';
              // Rebuild the script tag
              return '<script' . $new_attrs . '>' . $script_body . '</script>';
          } else {
              // Leave unchanged
              return $matches[0];
          }
      },
      $html
  );

  return $html;
}


// execute delayed interative scripts
add_action('wp_footer', function() {
  ?>
  <script type="text/javascript">
  (function () {

      var MIN_DELAY_MS = 4000;             // minimum delay even if rIC fires ASAP
      var ABSOLUTE_TIMEOUT_MS = 4000;      // hard fallback

      function cloneScript(original) {
          var s = document.createElement('script');
          var typ = original.getAttribute('data-type') || original.type || 'text/javascript';
          // If typ matches mbn-*-delay pattern, set type to "text/javascript"
          if (/mbn-.*-delay/i.test(typ)) {
              s.type = "text/javascript";
          } else {
              s.type = typ;
          }


          // prefer data-src; fallback to src for already-blocked tags without data-src
          var src = original.getAttribute('data-src') || original.getAttribute('src') || '';
          if (src) s.src = src;


          if (original.async) s.async = true;
          if (original.defer) s.defer = true;


          ['nonce','crossorigin','referrerpolicy','integrity','id'].forEach(function(attr){
          var v = original.getAttribute(attr); if (v) s.setAttribute(attr, v);
          });


          // copy other data-* (except control flags)
          Array.prototype.forEach.call(original.attributes, function (a) {
          if (/^data-/.test(a.name) &&
              !/^(data-type|data-src|data-consent|data-lazy|nitro-delay-ms)$/i.test(a.name)) {
              s.setAttribute(a.name, a.value);
          }
          });


          if (!src && original.textContent) s.text = original.textContent;
          return s;
      }

      function activate(el) {
          var s = cloneScript(el);
          var parent = el.parentNode || document.head || document.documentElement;
          parent.insertBefore(s, el);
          el.remove();
      }


      function runNow() {
          var nodes = document.querySelectorAll(
          'script[type="text/plain"][data-type], script[data-lazy="true"], script[nitro-delay-ms]'
          );
          nodes.forEach(activate);
      }

      var events = ['scroll','mousemove','touchstart','keydown','wheel', 'click'];
      function addListeners(){
          events.forEach(function(ev){ window.addEventListener(ev, runNow, {passive:true, once:true}); });
          window.addEventListener('load', function(){ setTimeout(runNow, MIN_DELAY_MS); }, {once:true});
      }

      // Start
      addListeners();

      // Absolute fallback
      setTimeout(runNow, ABSOLUTE_TIMEOUT_MS);

      // Optional public API
      window.NitroLazyLoadDelay = { runNow: runNow };
  })();
  </script>
  <?php
});