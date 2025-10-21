<?php
 /* 
	Template Name: Services Lander
 */
?>

<!doctype html><html class=no-js lang=en dir=ltr>
<head>

<meta charset=utf-8>
<meta http-equiv=x-ua-compatible content='ie=edge'>
<meta name=viewport content='width=device-width, initial-scale=1.0'>
<title><?php wp_title();?></title><?php wp_head();?>

<style id="critical-css-mbn">
:root {
  --custom-font-family: "Ubuntu", sans-serif;
  --custom-font-family-rubik: "Rubik", sans-serif;
}
<?php
echo file_get_contents(get_template_directory() . '/critical/index.css');
?>
</style>

<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/foundation.min.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/custom.css?ver=<?php echo rand(); ?>" media="print" onload="this.media='all'">

<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>


<link 
  href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" 
  rel="stylesheet" 
  media="print" 
  onload="this.media='all'">
<noscript>
	<link 
		href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" 
		rel="stylesheet">
</noscript>

<?php /*
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/rubik-v31-latin-regular.woff2" as="font" type="font/woff2" crossorigin>
<link rel="preload" href="<?php echo get_stylesheet_directory_uri(); ?>/fonts/ubuntu-v21-latin-regular.woff2" as="font" type="font/woff2" crossorigin>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">
*/ ?>
<link rel="preload" fetchpriority="high" href="<?php echo get_template_directory_uri(); ?>/images/banner-bg.webp" as="image" type="image/webp">

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJ7PMWH4');</script>
<!-- End Google Tag Manager -->

<style>
body { margin:0;}
body, p, input, button, textarea{
	font-family: var(--custom-font-family);
	font-style: normal;
}
h1, h2, h3, h4, h5{
	font-family: var(--custom-font-family-rubik);
	font-optical-sizing: auto;
	font-style: normal;
	line-height: normal;
}

.bnr{position:relative;background:url(<?php echo get_template_directory_uri(); ?>/images/banner-bg.webp) no-repeat center /cover; display:flex;justify-content:center;align-content:center;flex-direction:column; padding: 50px 0;background-color: #0a0a0a;content-visibility: auto;}

.gform-theme--foundation .gfield--width-half {
	grid-column: span 6!important;
}
@media (max-width: 639px) {
	.gform-theme--foundation .gfield {
		grid-column: 1 / -1!important;
		min-inline-size: 0!important;
	}
}

/* Gravity Forms */

body .gform_wrapper input[type="text"],
body .gform_wrapper input[type="email"],
body .gform_wrapper input[type="url"],
body .gform_wrapper input[type="tel"],
body .gform_wrapper input[type="number"],
body .gform_wrapper input[type="password"],
body .gform_wrapper input[type="radio"],
body .gform_wrapper textarea,
body .gform_wrapper select {
  transition: none !important;
  will-change: transform, opacity;
  backface-visibility: hidden;
  transform: translateZ(0);
}

body .gform_wrapper input:focus,
body .gform_wrapper textarea:focus,
body .gform_wrapper select:focus {
  outline: none !important;
  transform: none;
  opacity: 0.98;
}


body .gform_wrapper .gform_footer input[type="submit"],
body .gform_wrapper .gform_page_footer input[type="submit"],
body .gform_wrapper .gform_footer button,
body .gform_wrapper .gform_page_footer button {
  transition: transform 0.2s ease, opacity 0.2s ease !important;
  will-change: transform, opacity;
  backface-visibility: hidden;
  transform: translateZ(0);
}

body .gform_wrapper .gform_footer input[type="submit"]:hover,
body .gform_wrapper .gform_page_footer input[type="submit"]:hover,
body .gform_wrapper .gform_footer button:hover,
body .gform_wrapper .gform_page_footer button:hover {
  transform: none;
  opacity: 0.9;
}

.formwrapper {
  min-height: 798px;
}

.gform_wrapper input,
.gform_wrapper select,
.gform_wrapper textarea {
  min-height: 60px; /* prevents resize when styles apply */
  transition: none !important;
}

.gform_wrapper .gfield::after {
  content: "";
  display: block;
  height: 0;
  width: 0;
}
.ui-datepicker-trigger{width:18px!important;height:18px!important;}

.gform_body .gfield_label{display:none!Important;}
</style>


</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NJ7PMWH4"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->

	<header class="main-header">
		<div class="grid-container">
			<div class="grid-x grid-padding-x">
				<div class="large-12 cell">
					<div class="header-content">
						<div class="logo">
							<a href="/ppc/">
								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/mastergroup-logo.png" alt="Company Logo"> */ ?>
								<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/mastergroup-logo.webp" 
								  alt="Company Logo" 
								  width="80" height="80" 
								  decoding="async"
									loading="eager"	 
								>
							</a>
						</div>
						<div class="contact">
							<a href="tel:732-334-3050">
								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/green-phone.png" alt="Phone" /> */ ?>
								<?php /*
								<img
								  src="<?php echo get_template_directory_uri(); ?>/images/green-phone2.webp"
								  alt="Phone" width="36" height="36" decoding="async" loading="eager">
								  */ ?>
								  
								  <img
  src="<?php echo get_template_directory_uri(); ?>/images/green-phone2.webp"
  srcset="<?php echo get_template_directory_uri(); ?>/images/green-phone2.webp 1x, <?php echo get_template_directory_uri(); ?>/images/green-phone2@2x.webp 2x"
  alt="Phone"
  width="36"
  height="36"
  decoding="async"
  loading="eager"
/>


								  
								  
								<span>732-334-3050</span>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="bottom-line"></div>
	</header>

	<div class=banner_section>
		<div class=bnr>
			<div class=content>
				<div class="grid-container">
					<div class="grid-x grid-padding-x">
						<div class="large-6 cell">
							<div class="txt">
								<h3>5-Star</h3>
								<h1>
									HVAC Service & Installation
								</h1>
								<h2>Serving Northern New Jersey</h2>
								<ul>
									<li>15+ Years in Business</li>
									<li>Financing Available (7 year interest FREE)</li>
									<li>Family Owned</li>
									<li>Same Day Service</li>
								</ul>
							</div>
						</div>
						<div class="large-6 cell">
							<div class="formwrapper">
								<div class="formcard">
									<h2>Contact Master Group Today!</h2>
									<?php echo do_shortcode('[gravityform id="1" title="false" ajax="true"]'); ?>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end banner //--> 
	
	<div class=body>
		<div class=section1>
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>Coupons</h2>
						<div class=box3_wrap>
							<div class="box box1">
								<div class=txtbox>
									<h3>FREE</h3>
									<div class=txtwrap>
										<p>365-Day Warranty - Yours Free with Purchase!</p>
									</div>
								</div>
							</div>
							<div class="box box2">
								<div class=txtbox>
									<h3>FREE</h3>
									<div class=txtwrap>
										<p>Service Fee When You Schedule a Repair</p>
									</div>
								</div>
							</div>
							<div class="box box3">
								<div class=txtbox>
									<h3>7 Years Interest Free</h3>
									<div class=txtwrap>
										<p>Enjoy 7 Years of No Interest Payments</p>
									</div>
								</div>
							</div>
						</div>
						<div class="btn-wrap text-center">
							<a href="tel:732-334-3050" class="btn">Call Today</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		
		<div class=section2>
			<div class="grid-container">
				<div>
					<div class="grid-x grid-padding-x content-wrap">
						<div class="large-5 cell">
							<div class=txtwrap>
								<div class=txt>
									<h2>
										<span>Prefer To Call Instead?</span>
										We’re Here To Help!
									</h2>
									<div class="btn-wrap">
										<a href="tel:732-334-3050" class="btn">Call 732-334-3050</a>
									</div>
								</div>
							</div>
						</div>
						<div class="large-7 cell">
							<div class=mgvan>
<img 
  src="<?php echo get_template_directory_uri(); ?>/images/mgvan.webp" 
  alt="van" 
  width="681" height="338" 
  decoding="async" loading="lazy">

								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/mgvan.png" alt="van" loading="lazy" /> */ ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class=section3>
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell text-center">
						<h2>Master Group Heating, Cooling & Plumbing</h2>
					</div>
				</div>
			</div>
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<div class="collage">
							<div class="collage-item">
								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/master1.png" alt="Repair"> */ ?>
								
								<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/master1.webp"
								  alt="Repair" width="588" height="415" decoding="async" loading="lazy">
								  
								<span>Repair</span>
							</div>
							<div class="collage-item">
								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/master2.png" alt="Replacement"> */ ?>
								
								<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/master2.webp"
								  alt="Replacement" width="588" height="200" decoding="async" loading="lazy">
								
								<span>Replacement</span>
							</div>
							<div class="collage-item">
								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/master3.png" alt="Maintenance"> */ ?>
								
								<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/master3.webp"
								  alt="Maintenance" width="588" height="200" decoding="async" loading="lazy">
								
								<span>Emergency HVAC</span>
							</div>
							<div class="collage-item">
								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/master4.png" alt="Emergency HVAC"> */ ?>
								
								<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/master4.webp"
								  alt="Emergency HVAC" width="588" height="415" decoding="async" loading="lazy">
								
								<span>Maintenance</span>
							</div>
						  </div>
					</div>
				</div>
			</div>
					
		</div>
		
		<div class=section4>
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>Signs your hvac system needs repairs</h2>
						<div class="grid-box">
							<div class="card">
							  <?php /* <img src="<?php echo get_template_directory_uri() ?>/images/sign1.jpg" alt="Not Getting Enough Cold/Warm Air"> */ ?>
							  
							  <img 
								  src="<?php echo get_template_directory_uri(); ?>/images/sign1.webp"
								  alt="Not Getting Enough Cold/Warm Air" width="595" height="200" decoding="async" loading="lazy">
								  
							  <div class="card-content">
								<h3>Not Getting Enough Cold/Warm Air</h3>
								<hr>
								<p>Failure to produce the right temperature could be due to a faulty fan, damaged compressor, low refrigerant levels, or something else.</p>
							  </div>
							</div>

							<div class="card">
							  <?php /* <img src="<?php echo get_template_directory_uri() ?>/images/sign2.jpg" alt="Your System Keeps Turning On & Off"> */ ?>
							  
							  <img 
								  src="<?php echo get_template_directory_uri(); ?>/images/sign2.webp"
								  alt="Your System Keeps Turning On & Off" width="595" height="200" decoding="async" loading="lazy">
								  
							  <div class="card-content">
								<h3>Your System Keeps Turning On & Off</h3>
								<hr>
								<p>When your system is cycling on and off, it could be due to the thermostat, air filter, electrical issues, or something else.</p>
							  </div>
							</div>

							<div class="card">
							  <?php /* <img src="<?php echo get_template_directory_uri() ?>/images/sign3.jpg" alt="There Is Water Leaking"> */ ?>
							  
							  <img 
								  src="<?php echo get_template_directory_uri(); ?>/images/sign3.webp"
								  alt="There Is Water Leaking" width="595" height="200" decoding="async" loading="lazy">
							  
							  <div class="card-content">
								<h3>There Is Water Leaking</h3>
								<hr>
								<p>Water leaks should not occur. Leaks could be due to damaged drain tubes, a damaged condenser unit, or refrigerant leaks.</p>
							  </div>
							</div>

							<div class="card">
							  <?php /* <img src="<?php echo get_template_directory_uri() ?>/images/sign4.jpg" alt="Noises & Smells"> */ ?>
							  
							  <img 
								  src="<?php echo get_template_directory_uri(); ?>/images/sign4.webp"
								  alt="Noises & Smells" width="595" height="200" decoding="async" loading="lazy">
								  
							  <div class="card-content">
								<h3>Noises & Smells</h3>
								<hr>
								<p>If you hear squealing, clunking sounds or smell something musty or moldy, or anything else unusual, give us a call today!</p>
							  </div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="section5">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>See what our customers are saying</h2>
						<div class="testimonials">
							<div class="box">
							  <div class="avatar">
								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/profile1.png" alt="Rosa G"> */ ?>
								
								<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/profile1.webp"
								  alt="Rosa G" width="62" height="62" decoding="async" loading="lazy">
								  
							  </div>
							  <div class="txtwrap">
							  <h3>Rosa G.</h3>
							  <p>This is the second time I use this company. First time was a couple of years ago and Adam did my service, he was great! And this time I asked for him specifically and he came to the rescue...</p>
							  <a href="https://share.google/CgyUOKgYyV8hmivBm" target="_blank">Read more</a>
							  </div>
							</div>
							<div class="box">
							  <div class="avatar">
								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/profile2.png" alt="Romah J"> */ ?>
								<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/profile2.webp"
								  alt="Romah J" width="62" height="62" decoding="async" loading="lazy">
							  </div>
							  <div class="txtwrap">
							  <h3>Ramah J.</h3>
							  <p>This company was amazing! The installation was done so quickly and turned out perfect. The price was very affordable too. I’d absolutely recommend them to anyone...</p>
							  <a href="https://share.google/CgyUOKgYyV8hmivBm" target="_blank">Read more</a>
							  </div>
							</div>
							<div class="box">
							  <div class="avatar">
								<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/profile3.png" alt="MaryLou D"> */ ?>
								<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/profile3.webp"
								  alt="MaryLou D" width="62" height="62" decoding="async" loading="lazy">
							</div>
							  <div class="txtwrap">
								<h3>MaryLou D.</h3>
								<p>We called Master Group when our mini split unit was not working. Adam came on the day scheduled and checked out the unit. He was extremely knowledgeable...</p>
								<a href="https://share.google/CgyUOKgYyV8hmivBm" target="_blank">Read more</a>
								</div>
							</div>
						  </div>
					</div>
				</div>
			</div>
		</div>
		
		<div class="section6">
			<div class="grid-container">
				<div class="grid-x grid-padding-x">
					<div class="large-12 cell">
						<h2>Service Area Map</h2>
					</div>
				</div>
			</div>
			<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/map.jpg" alt="Map" /> */ ?>
			<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/map.jpg"
								  alt="Map" width="1905" height="1016" decoding="async" loading="lazy">
								  
		</div>
		
		<div class="section7">
			<div class="grid-container">
				<div class="grid-x grid-padding-x contentwrap">
					<div class="large-5 cell">
						<div class="txt-content">
							<h2>
								<span>For Upfront Pricing & Unmatched Service</span>
								Call Master Group Heating, Cooling & Plumbing!
							</h2>
							<div class="btn-wrap">
								<a href="tel:732-334-3050" class="btn">Call Now</a>
							</div>
						</div>
					</div>
					<div class="large-7 cell mobileright">
						<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/mastergroup-boys.jpg" alt="Mastergroup team" /> */ ?>
							<img 
								  src="<?php echo get_template_directory_uri(); ?>/images/mastergroup-boys.webp"
								  alt="Mastergroup team" width="1046" height="433" decoding="async" loading="lazy">
					</div>
				</div>
			</div>
		</div>
		
		<div class="logo-footer">
			<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/footer-logo.png" alt="Master Group Logo"> */ ?>
			<img 
				src="<?php echo get_template_directory_uri(); ?>/images/footer-logo.webp"
				alt="Master Group Logo" width="220" height="220" decoding="async" loading="lazy">
								  
			<p><a href="tel:973-382-8248">973-382-8248</a></p>
		</div>
	</div>
  
	<div class="mobile-button">
		<div class="phone">
			<a href="tel:732-334-3050">
				<?php /* <img src="<?php echo get_template_directory_uri() ?>/images/green-phone.png" alt="phone" /> */ ?>
				<img 
				src="<?php echo get_template_directory_uri(); ?>/images/green-phone2.webp"
				alt="phone" width="36" height="36" decoding="async">
			</a>
		</div>
	</div>

    
	<?php /*
	<script src="<?php echo get_template_directory_uri() ?>/js/vendor/jquery.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/vendor/what-input.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/vendor/foundation.min.js"></script>
	<script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>
	*/ ?>
    
	<?php wp_footer(); ?>

  </body>
</html>
