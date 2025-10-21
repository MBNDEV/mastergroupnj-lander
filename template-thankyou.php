<?php
 /* 
	Template Name: Services Lander - TY
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
echo file_get_contents(get_template_directory() . '/critical/template-thankyou.css');
?>
</style>

<link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/css/img/favicon.ico" />
<link rel="icon" type="image/x-icon" href="<?php echo get_template_directory_uri() ?>/css/img/favicon.ico" />
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/foundation.css" media="print" onload="this.media='all'">
<link rel="stylesheet" href="<?php echo get_template_directory_uri() ?>/css/custom.css?ver=<?php echo rand(); ?>" media="print" onload="this.media='all'">
<link rel="preconnect" href="https://fonts.googleapis.com" crossorigin>
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="preconnect" href="https://www.googletagmanager.com" crossorigin>

<!-- <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet"> -->
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

<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-NJ7PMWH4');</script>
<!-- End Google Tag Manager -->

<style>
.bnr { min-height: 84vh; text-align: center;}
.bnr h2 {
    font-size: 38px;
}
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
								<img src="<?php echo get_template_directory_uri() ?>/images/mastergroup-logo.png" alt="Company Logo">
							</a>
						</div>
						<div class="contact">
							<a href="tel:732-334-3050">
								<img src="<?php echo get_template_directory_uri() ?>/images/green-phone.png" />
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
						<div class="large-12 cell">
							<div class="txt">
								<h2>
									Thank You!
								</h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div><!-- end banner //-->
	
		<div class="logo-footer">
			<img src="<?php echo get_template_directory_uri() ?>/images/footer-logo.png" alt="Master Group Logo">
			<p><a href="tel:973-382-8248">973-382-8248</a></p>
		</div>
	</div>



    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/jquery.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/what-input.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/vendor/foundation.js"></script>
    <script src="<?php echo get_template_directory_uri() ?>/js/app.js"></script>
	
	<?php wp_footer(); ?>
	
  </body>
</html>
