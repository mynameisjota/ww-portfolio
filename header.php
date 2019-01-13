<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="<?php bloginfo('description'); ?>" />
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet">
    <title><?php bloginfo('name'); ?></title>

    <style>
		.main-content {
		  width: 100%;
		  max-height: 680px;
		  background: url(<?php echo get_theme_mod('banner_image'); ?>) no-repeat 50% 50%;
		  background-attachment: fixed;
		  background-size: cover; 
		  position: relative;
		}
    </style>
</head>
<?php wp_head(); ?>
<body>

<script type="text/javascript">
	document.documentElement.className += ' js';
</script>

<header class="main-header">
	<div class="main-logo">
		<a href="<?php echo esc_url( home_url( '/' ) ); ?>">
			<svg id="main-logo" data-name="Group 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 80.762 50.688">
			  <defs>
			    <style>
			      .cls-1 {
			        fill: #ffffff;
			      }
			    </style>
			  </defs>
			  <path id="Path_1" data-name="Path 1" class="cls-1" d="M51.589,50.688,40.325,30.638l-11.6,20.05L0,0H15.206L34.693,34.13l3.83-6.646L30.976,14.192H49.786L42.127,27.484l3.717,6.533L65.556,0H80.762ZM5.294,3.154,28.723,44.492l4.168-7.209L13.4,3.154Zm42.24,34.017,4.055,7.322L75.355,3.154h-8.11ZM36.27,17.234l4.055,7.1,4.055-7.1Z"/>
			</svg>
		</a>
	</div>
	
	<div class="main-navgation">
		<span class="nav-toggle"></span>
		<nav class="menu mobile-menu">	
			<?php 
				wp_nav_menu(array(
					'theme_location' => 'new-menu'
				));
			?>
		</nav>
	</div>
</header>


