<?php
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
	<link rel="shortcut icon" href="#" type="image/x-icon" />
	<link rel="stylesheet" type="text/css" href="<?= $url ?>/dist/assets/custom.css">
</head>

<body>
	<header>
		<div class="header-wrapper">
			<div class="container">
				<div class="logo">
					<a href="<?= home_url() ?>">
						<img src="<?= $url ?>/dist/images/logo.png" alt="">
					</a>
				</div>
				<div class="mega-menu">
					<ul>
						<li class="child">
							<a href="<?= home_url() ?>/gioi-thieu">Về HALCERT</a>
						</li>
						<li class="child">
							<a href="<?= home_url() ?>/dich-vu">Dịch vụ</a>
						</li>
						<li class="child">
							<a href="<?= home_url() ?>/halal-nqi">Halal NQI</a>
						</li>
						<li class="child">
							<a href="<?= home_url() ?>/khach-hang">Khách hàng</a>
						</li>
						<li class="child">
							<a href="<?= home_url() ?>/tin-tuc-va-su-kien">Tin tức & Sự kiện</a>
						</li>
						<li class="child">
							<a href="<?= home_url() ?>/tap-san-halal">Tập san Halal</a>
							<div class="up" id="drop-menu-header">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 20" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M4.22603 12.7337C4.4701 12.9778 4.86583 12.9778 5.10991 12.7337L9.9373 7.90618C10.0187 7.82491 10.1505 7.82491 10.232 7.90618L15.0594 12.7337C15.3035 12.9778 15.6991 12.9778 15.9432 12.7337C16.1873 12.4896 16.1873 12.0939 15.9432 11.8498L11.1158 7.02236C10.5463 6.45286 9.62297 6.45286 9.05347 7.02236L4.22603 11.8498C3.98195 12.0939 3.98195 12.4896 4.22603 12.7337Z" fill="black"/>
								</svg>
							</div>
							<div class="down" id="down-menu-header">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 20" fill="none">
									<path fill-rule="evenodd" clip-rule="evenodd" d="M4.22603 7.26631C4.4701 7.02224 4.86583 7.02224 5.10991 7.26631L9.9373 12.0938C10.0187 12.1751 10.1505 12.1751 10.232 12.0938L15.0594 7.26631C15.3035 7.02223 15.6991 7.02223 15.9432 7.26631C16.1873 7.51039 16.1873 7.90611 15.9432 8.1502L11.1158 12.9776C10.5463 13.5471 9.62297 13.5471 9.05347 12.9776L4.22603 8.1502C3.98195 7.90612 3.98195 7.51039 4.22603 7.26631Z" fill="black"/>
								</svg>
							</div>
							<nav class="sub-menu" id="sub-menu">
								<ul>
									<?php foreach ($categories as $category) { ?>
										<li><a href="<?= home_url() ?>/danh_muc_tap_san/<?= $category->slug ?>"><?= $category->name ?></a></li>
									<?php } ?>
								</ul>
							</nav>
						</li>
						<li class="child">
							<a href="<?= home_url() ?>/lien-he">Liên hệ</a>
						</li>
					</ul>
				</div>
				<div class="button">
					<a href="<?= home_url() ?>/dang-ky-chung-nhan">Đăng ký chứng nhận</a>
				</div>
			</div>
		</div>
		<div class="header-mobile">
            <div class="logo">
                <a href=""><img src="<?= $url ?>/dist/images/logo.png" alt="HALAL Logo" class="logo"></a>
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
            <nav class="nav-menu">
                <ul>
                    <li><a href="<?= home_url() ?>/gioi-thieu">Về HALCERT</a></li>
                    <li><a href="<?= home_url() ?>/dich-vu">Dịch vụ</a></li>
                    <li><a href="<?= home_url() ?>/halal-nqi">Halal NQI</a></li>
                    <li><a href="<?= home_url() ?>/khach-hang">Khách hàng</a></li>
                    <li><a href="<?= home_url() ?>/tin-tuc-va-su-kien">Tin tức & Sự kiện</a></li>
                    <li>
						<a href="<?= home_url() ?>/tap-san-halal">Tập san Halal</a>
						<div class="up" id="drop-menu-mobile">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 20" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.22603 12.7337C4.4701 12.9778 4.86583 12.9778 5.10991 12.7337L9.9373 7.90618C10.0187 7.82491 10.1505 7.82491 10.232 7.90618L15.0594 12.7337C15.3035 12.9778 15.6991 12.9778 15.9432 12.7337C16.1873 12.4896 16.1873 12.0939 15.9432 11.8498L11.1158 7.02236C10.5463 6.45286 9.62297 6.45286 9.05347 7.02236L4.22603 11.8498C3.98195 12.0939 3.98195 12.4896 4.22603 12.7337Z" fill="black"/>
							</svg>
						</div>
						<div class="down" id="down-menu-mobile">
							<svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 21 20" fill="none">
								<path fill-rule="evenodd" clip-rule="evenodd" d="M4.22603 7.26631C4.4701 7.02224 4.86583 7.02224 5.10991 7.26631L9.9373 12.0938C10.0187 12.1751 10.1505 12.1751 10.232 12.0938L15.0594 7.26631C15.3035 7.02223 15.6991 7.02223 15.9432 7.26631C16.1873 7.51039 16.1873 7.90611 15.9432 8.1502L11.1158 12.9776C10.5463 13.5471 9.62297 13.5471 9.05347 12.9776L4.22603 8.1502C3.98195 7.90612 3.98195 7.51039 4.22603 7.26631Z" fill="black"/>
							</svg>
						</div>
						<nav class="sub-menu" id="sub-menu-mobile">
							<ul>
								<?php foreach ($categories as $category) { ?>
									<li><a href="<?= home_url() ?>/danh_muc_tap_san/<?= $category->slug ?>"><?= $category->name ?></a></li>
								<?php } ?>
							</ul>
						</nav>
					</li>
                    <li><a href="<?= home_url() ?>/lien-he">Liên hệ</a></li>
                    <li><a href="<?= home_url() ?>/dang-ky-chung-nhan">Đăng ký chứng nhận</a></li>
                </ul>
            </nav>
        </div>
	</header>
	<script>
		// Drop sub menu account
		document.addEventListener('DOMContentLoaded', function () {
			const downMenu = document.querySelector('#down-menu-header');
			const dropMenu = document.querySelector('#drop-menu-header');
			const subMenu = document.getElementById('sub-menu');

			function showMenu() {
				subMenu.classList.add('show');
				downMenu.classList.add('show');
				dropMenu.classList.add('show');
			}

			function hideMenu() {
				subMenu.classList.remove('show');
				dropMenu.classList.remove('show');
				downMenu.classList.remove('show');
			}

			downMenu.addEventListener('click', showMenu);

			dropMenu.addEventListener('click', hideMenu);

			document.addEventListener('click', function (event) {
				if (!subMenu.contains(event.target) && !downMenu.contains(event.target)) {
					hideMenu();
				}
			});
		});
		document.addEventListener('DOMContentLoaded', function () {
			const downMenu = document.querySelector('#down-menu-mobile');
			const dropMenu = document.querySelector('#drop-menu-mobile');
			const subMenu = document.getElementById('sub-menu-mobile');

			function showMenu() {
				subMenu.classList.add('show');
				downMenu.classList.add('show');
				dropMenu.classList.add('show');
			}

			function hideMenu() {
				subMenu.classList.remove('show');
				dropMenu.classList.remove('show');
				downMenu.classList.remove('show');
			}

			downMenu.addEventListener('click', showMenu);

			dropMenu.addEventListener('click', hideMenu);

			document.addEventListener('click', function (event) {
				if (!subMenu.contains(event.target) && !downMenu.contains(event.target)) {
					hideMenu();
				}
			});
		});
	</script>
	