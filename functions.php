<?php
/**
 * Landerservice Theme – Optimized Functions
 */

require_once get_template_directory() . '/vendor/autoload.php';

use YahnisElsts\PluginUpdateChecker\v5\PucFactory;
 PucFactory::buildUpdateChecker(
  'https://github.com/MBNDEV/mastergroupnj-lander',
  __FILE__,
  'landerservice'
);

require_once get_template_directory() . '/enhancer.php';

remove_action('wp_head', 'wp_generator');
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'print_emoji_detection_script', 7);
remove_action('wp_print_styles', 'print_emoji_styles');
remove_action('wp_head', 'rest_output_link_wp_head', 10);
remove_action('template_redirect', 'rest_output_link_header', 11, 0);
remove_action('wp_head', 'wp_oembed_add_discovery_links', 10);
remove_action('wp_head', 'feed_links_extra', 3);
remove_action('wp_head', 'feed_links', 2);


function disable_gutenberg_block_css() {
    wp_dequeue_style( 'global-styles' );
    wp_dequeue_style('wp-block-library'); 
    wp_dequeue_style('wp-block-library-theme'); 
    wp_dequeue_style('wc-blocks-style');
}
add_action('wp_enqueue_scripts', 'disable_gutenberg_block_css', 100);

function landerservice_optimized_fonts() {
    ?>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

    <link rel="preload"
          as="style"
          href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap"
          onload="this.onload=null;this.rel='stylesheet'">

    <noscript>
        <link rel="stylesheet"
              href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap">
    </noscript>
    <?php
}
//add_action('wp_head', 'landerservice_optimized_fonts', 5);



add_action('wp_enqueue_scripts', function() {
    wp_add_inline_style('gforms_formsmain_css', '
        @font-face {
            font-family: "gform-icons-orbital";
            src: url("' . plugins_url('gravityforms/fonts/gform-icons-orbital.woff2') . '") format("woff2"),
                 url("' . plugins_url('gravityforms/fonts/gform-icons-orbital.woff') . '") format("woff");
            font-display: swap;
            font-weight: normal;
            font-style: normal;
        }
    ');
});

function landerservice_preload_lcp_background() {
    if (is_page(2)) { 
        ?>
        <link rel="preload"
              as="image"
              href="<?php echo esc_url( get_template_directory_uri() . '/images/banner-bg.webp' ); ?>"
              type="image/webp"
              fetchpriority="high">
        <?php
    }
}
add_action('wp_head', 'landerservice_preload_lcp_background', 1);


// HTML OUTPUT COMPRESSION
// function landerservice_start_html_compression() {
//     if ( is_admin() || defined('DOING_AJAX') || defined('REST_REQUEST') ) {
//         return;
//     }

//     ob_start('landerservice_compress_html_output');
// }
// add_action('template_redirect', 'landerservice_start_html_compression');

// function landerservice_compress_html_output($buffer) {
//     if ( trim($buffer) === '' ) {
//         return $buffer;
//     }

//     preg_match_all('/<(script|pre|textarea)[^>]*>.*?<\/\1>/is', $buffer, $matches);
//     $placeholders = [];

//     foreach ($matches[0] as $i => $match) {
//         $placeholder = "###LANDERSERVICE_HTML_BLOCK_$i###";
//         $placeholders[$placeholder] = $match;
//         $buffer = str_replace($match, $placeholder, $buffer);
//     }

//     $search = [
//         '/\>[^\S ]+/s',     // remove spaces after tags
//         '/[^\S ]+\</s',     // remove spaces before tags
//         '/(\s)+/s',         // collapse whitespace
//         '/<!--(?!\[if).*?-->/s', // remove comments (except IE)
//     ];
//     $replace = ['>', '<', '\\1', ''];
//     $buffer = preg_replace($search, $replace, $buffer);

//     // Restore script and pre blocks
//     foreach ($placeholders as $placeholder => $original) {
//         $buffer = str_replace($placeholder, $original, $buffer);
//     }

//     return $buffer;
// }



// LAZY LOAD IMAGES
function mytheme_enqueue_lazyload_script() {
    wp_enqueue_script(
        'lazyload',
        get_template_directory_uri() . '/js/lazyload.min.js',
        array(),
        null,
        true 
    );
}
add_action('wp_enqueue_scripts', 'mytheme_enqueue_lazyload_script');


add_filter('gform_init_scripts_footer', '__return_true');


/**
 * Perform purge via NGINX PURGE request.
 */
function sg_purge_all_cache() {
    $host = parse_url(home_url('/'), PHP_URL_HOST);
    $ch = curl_init('http://127.0.0.1/*'); // purge wildcard
    curl_setopt_array($ch, [
        CURLOPT_CUSTOMREQUEST => 'PURGE',
        CURLOPT_HTTPHEADER    => ['Host: ' . $host],
        CURLOPT_RETURNTRANSFER=> true,
        CURLOPT_TIMEOUT       => 10,
    ]);
    $body = curl_exec($ch);
    $code = curl_getinfo($ch, CURLINFO_RESPONSE_CODE);
    curl_close($ch);

    return ($code === 200);
}

/**
 * Handle the admin-post action when button is clicked.
 */
add_action('admin_post_sg_purge_all', function () {
    if (!current_user_can('manage_options')) wp_die('No permission');
    check_admin_referer('sg_purge_all_nonce');

    $ok = sg_purge_all_cache();

    $redirect = wp_get_referer() ?: admin_url();
    $redirect = add_query_arg([
        'sgpurge' => $ok ? '1' : '0',
    ], $redirect);

    wp_safe_redirect($redirect);
    exit;
});

/**
 * Add the “Purge SG Cache” button to the Admin Bar.
 */
add_action('admin_bar_menu', function ($wp_admin_bar) {
    if (!current_user_can('manage_options')) return;

    $nonce = wp_create_nonce('sg_purge_all_nonce');
    $url   = add_query_arg([
        'action'    => 'sg_purge_all',
        '_wpnonce'  => $nonce,
    ], admin_url('admin-post.php'));

    $wp_admin_bar->add_node([
        'id'    => 'sg-purge-cache',
        'title' => '🧹 Purge SG Cache',
        'href'  => $url,
        'meta'  => ['title' => 'Purge SiteGround Dynamic Cache'],
    ]);
}, 100);

/**
 * Show success/error admin notice after purge.
 */
add_action('admin_notices', function () {
    if (!isset($_GET['sgpurge'])) return;

    if ($_GET['sgpurge'] === '1') {
        echo '<div class="notice notice-success is-dismissible"><p>✅ SiteGround Dynamic Cache purged successfully.</p></div>';
    } else {
        echo '<div class="notice notice-error is-dismissible"><p>❌ Failed to purge SiteGround cache.</p></div>';
    }
});

?>
