<?php
$logo = get_field('logo-header', 'option'); 

$args = array(
    'taxonomy' => 'danh_muc_tap_san',
    'orderby' => 'name',
);

$categories = get_terms($args);

$url = get_template_directory_uri();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="" />
	<meta name="keywords" content="" />
	<meta name="author" content="" />
	<meta property="og:title" content="" />
	<meta property="og:description" content="" />
	<meta property="og:url" content="" />
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title( '|', true, 'right' ); bloginfo('name'); ?></title>
    <link rel="icon" href="<?php echo get_site_icon_url(); ?>" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?= $url ?>/dist/assets/custom.css">
	
	<link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css' rel='stylesheet'> 
</head>

<body>
	<header>
		<div class="header-wrapper">
			<div class="container">
				<div class="logo">
					<a href="<?= home_url() ?>">
						<img src="<?= $logo ?>" alt="">
					</a>
				</div>
				<div class="wrap">
					<?php 
						wp_nav_menu(array(
							'menu' => 'Primary Menu',
							'container'       => 'nav',
							'container_class' => 'main-navigation',
							'menu_class'      => 'menu-items',
							'depth'           => 2,
							'fallback_cb'     => 'wp_page_menu',
						));
					?>
				</div>
			</div>
		</div>
		<div class="header-mobile">
            <div class="logo">
                <a href="<?= home_url() ?>">
					<img src="<?= $url ?>/dist/images/logo.png" alt="HALAL Logo" class="logo">
				</a>
            </div>
            <div class="icon" id="open-menu-header">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </div>
        </div>
        <div id="backdrop-menu" class="backdrop-menu"></div>
        <div id="menuHeader" class="menu-mobile">
            <div class="top">
                <img src="<?= $url ?>/dist/images/logo.png" alt="HALAL Logo" class="logo">
                <span class="close-menu" id="close-menu-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="40" viewBox="0 0 41 40" fill="none">
                        <path d="M30.5 30L10.5 10" stroke="#160042" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                        <path d="M10.5 30L30.5 10" stroke="#160042" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                    </svg>
                </span>
            </div>
			<?php 
				wp_nav_menu(array(
					'menu' => 'Primary Menu',
					'container'       => 'nav',
					'container_class' => 'main-navigation',
					'menu_class'      => 'menu-items',
					'depth'           => 2,
					'fallback_cb'     => 'wp_page_menu',
				));
			?>
        </div>
	</header>
	