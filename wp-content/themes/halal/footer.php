<?php

$training_query = new WP_Query(array(
    'post_type' => 'dao-tao',
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => 1,
));
$url = get_template_directory_uri();
?>
<footer>
	<div class="background">
		<img src="<?= $url ?>/dist/images/background-footer-1.png" alt="">
	</div>
	<div class="container">
		<div class="top">
			<div class="background">
				<img src="<?= $url ?>/dist/images/background-footer-2.png" alt="">
			</div>
			<div class="left">
				<h3>Newsletter</h3>
				<?php if(pll_current_language() == 'en-us'): ?>
					<span>Register to receive the latest information, updated weekly on HALCERT via email</span>
				<?php else: ?>
					<span>Đăng ký nhận các thông tin mới nhất, cập nhật hàng tuần trên HALCERT qua email</span>
				<?php endif ?>
			</div>
			<div class="right">
				<form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <label for="enter-email">
						<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
							<path d="M14.1667 17.9457H5.83341C3.33341 17.9457 1.66675 16.6957 1.66675 13.7791V7.94572C1.66675 5.02905 3.33341 3.77905 5.83341 3.77905H14.1667C16.6667 3.77905 18.3334 5.02905 18.3334 7.94572V13.7791C18.3334 16.6957 16.6667 17.9457 14.1667 17.9457Z" stroke="#8C8C8C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
							<path d="M14.1666 8.3623L11.5582 10.4456C10.6999 11.129 9.29158 11.129 8.43325 10.4456L5.83325 8.3623" stroke="#8C8C8C" stroke-width="1.5" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
						</svg>
                    </label>
                    <input type="email" name="your-email" id="enter-email" placeholder="<?= (pll_current_language() == 'en-us') ? "Enter your email" : "Nhập email của bạn" ?>">
                    <button type="submit"><?= (pll_current_language() == 'en-us') ? "Register" : "Đăng ký" ?></button>

					<input type="hidden" name="action" value="submit_register_form">
                    <?php wp_nonce_field('submit_register_form', 'register_form_nonce'); ?>
                </form>
			</div>
		</div>
		<div class="bottom">
			<div class="col-1">
				<div class="logo">
					<img src="<?= $url ?>/dist/images/logo-footer.png" alt="">
				</div>
				<span>We ara a lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididun.</span>
				<div class="social-media">
					<a class="child" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
							<circle cx="22" cy="22.8623" r="22" fill="#3DA333"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M31.8005 16.3419C32.1421 16.6833 32.3883 17.1083 32.5145 17.5744C33.2411 20.4978 33.0732 25.115 32.5286 28.1513C32.4024 28.6174 32.1562 29.0424 31.8146 29.3838C31.473 29.7253 31.0479 29.9713 30.5815 30.0975C28.8743 30.5628 22.003 30.5628 22.003 30.5628C22.003 30.5628 15.1317 30.5628 13.4245 30.0975C12.9581 29.9713 12.533 29.7253 12.1913 29.3838C11.8497 29.0424 11.6036 28.6174 11.4774 28.1513C10.7465 25.2405 10.9468 20.6205 11.4632 17.5885C11.5894 17.1224 11.8356 16.6974 12.1772 16.356C12.5188 16.0145 12.944 15.7685 13.4103 15.6423C15.1176 15.1769 21.9889 15.1628 21.9889 15.1628C21.9889 15.1628 28.8602 15.1628 30.5674 15.6282C31.0337 15.7544 31.4589 16.0004 31.8005 16.3419ZM25.5021 22.8628L19.8019 26.1628V19.5628L25.5021 22.8628Z" fill="white"/>
						</svg>
					</a>
					<a class="child" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
							<circle cx="22" cy="22.8623" r="22" fill="#3DA333"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M27.8465 15.1163C27.1609 14.9791 26.2348 14.8767 25.6524 14.8767C24.0754 14.8767 23.9729 15.5624 23.9729 16.6594V18.6124H27.9151L27.5715 22.6578H23.9729V34.9627H19.037V22.6578H16.5V18.6124H19.037V16.1101C19.037 12.6826 20.6479 10.7627 24.6925 10.7627C26.0977 10.7627 27.1262 10.9684 28.4628 11.2427L27.8465 15.1163Z" fill="white"/>
						</svg>
					</a>
					<a class="child" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
							<circle cx="22" cy="22.8623" r="22" fill="#3DA333"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M17.02 15.8889C17.02 16.8849 16.2616 17.691 15.0755 17.691C13.9357 17.691 13.1773 16.8849 13.2007 15.8889C13.1773 14.8444 13.9357 14.0618 15.0982 14.0618C16.2615 14.0618 16.9973 14.8444 17.02 15.8889ZM13.2961 30.717V19.1147H16.9019V30.7163H13.2961V30.717Z" fill="white"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M19.7924 22.819C19.7924 21.3718 19.7447 20.1381 19.697 19.1178H22.829L22.9955 20.7073H23.0667C23.5412 19.9716 24.7273 18.8574 26.649 18.8574C29.0211 18.8574 30.8005 20.4234 30.8005 23.8385V30.7201H27.1947V24.2903C27.1947 22.7948 26.6732 21.7752 25.3683 21.7752C24.3715 21.7752 23.7789 22.4632 23.542 23.127C23.4466 23.3647 23.3997 23.6962 23.3997 24.0292V30.7201H19.7938V22.819H19.7924Z" fill="white"/>
						</svg>
					</a>
					<a class="child" href="">
						<svg xmlns="http://www.w3.org/2000/svg" width="44" height="45" viewBox="0 0 44 45" fill="none">
							<circle cx="22" cy="22.8623" r="22" fill="#3DA333"/>
							<path d="M22 13.8443C24.9371 13.8443 25.285 13.8555 26.4449 13.9084C27.5174 13.9573 28.0999 14.1365 28.4875 14.2872C29.0009 14.4867 29.3674 14.7251 29.7523 15.11C30.1372 15.4949 30.3756 15.8614 30.5751 16.3748C30.7258 16.7624 30.905 17.3449 30.9539 18.4173C31.0068 19.5772 31.018 19.9252 31.018 22.8622C31.018 25.7994 31.0068 26.1473 30.9539 27.3072C30.905 28.3797 30.7258 28.9621 30.5751 29.3497C30.3756 29.8632 30.1372 30.2296 29.7523 30.6145C29.3674 30.9995 29.0009 31.2378 28.4875 31.4374C28.0999 31.588 27.5174 31.7672 26.4449 31.8161C25.2852 31.869 24.9373 31.8803 22 31.8803C19.0627 31.8803 18.7148 31.869 17.5551 31.8161C16.4826 31.7672 15.9001 31.588 15.5125 31.4374C14.9991 31.2378 14.6326 30.9995 14.2477 30.6145C13.8628 30.2296 13.6244 29.8632 13.4249 29.3497C13.2742 28.9621 13.095 28.3797 13.0461 27.3072C12.9932 26.1473 12.982 25.7994 12.982 22.8622C12.982 19.9252 12.9932 19.5772 13.0461 18.4173C13.095 17.3449 13.2742 16.7624 13.4249 16.3748C13.6244 15.8614 13.8628 15.4949 14.2477 15.11C14.6326 14.7251 14.9991 14.4867 15.5125 14.2872C15.9001 14.1365 16.4826 13.9573 17.5551 13.9084C18.715 13.8555 19.0629 13.8443 22 13.8443ZM22 11.8623C19.0126 11.8623 18.638 11.875 17.4647 11.9285C16.2939 11.9819 15.4943 12.1679 14.7946 12.4398C14.0712 12.7209 13.4578 13.097 12.8462 13.7085C12.2347 14.3201 11.8586 14.9335 11.5775 15.6569C11.3056 16.3566 11.1196 17.1562 11.0662 18.327C11.0127 19.5003 11 19.8749 11 22.8622C11 25.8497 11.0127 26.2243 11.0662 27.3975C11.1196 28.5684 11.3056 29.368 11.5775 30.0677C11.8586 30.791 12.2347 31.4044 12.8462 32.016C13.4578 32.6275 14.0712 33.0037 14.7946 33.2847C15.4943 33.5567 16.2939 33.7426 17.4647 33.796C18.638 33.8496 19.0126 33.8622 22 33.8622C24.9874 33.8622 25.362 33.8496 26.5353 33.796C27.7061 33.7426 28.5057 33.5567 29.2054 33.2847C29.9288 33.0037 30.5422 32.6275 31.1538 32.016C31.7653 31.4044 32.1414 30.791 32.4225 30.0677C32.6944 29.368 32.8804 28.5684 32.9338 27.3975C32.9873 26.2243 33 25.8497 33 22.8622C33 19.8749 32.9873 19.5003 32.9338 18.327C32.8804 17.1562 32.6944 16.3566 32.4225 15.6569C32.1414 14.9335 31.7653 14.3201 31.1538 13.7085C30.5422 13.097 29.9288 12.7209 29.2054 12.4398C28.5057 12.1679 27.7061 11.9819 26.5353 11.9285C25.362 11.875 24.9874 11.8623 22 11.8623Z" fill="white"/>
							<path d="M22.0054 17.218C18.8857 17.218 16.3567 19.747 16.3567 22.8666C16.3567 25.9863 18.8857 28.5153 22.0054 28.5153C25.125 28.5153 27.654 25.9863 27.654 22.8666C27.654 19.747 25.125 17.218 22.0054 17.218ZM22.0054 26.5333C19.9803 26.5333 18.3387 24.8917 18.3387 22.8666C18.3387 20.8416 19.9803 19.2 22.0054 19.2C24.0304 19.2 25.672 20.8416 25.672 22.8666C25.672 24.8917 24.0304 26.5333 22.0054 26.5333Z" fill="white"/>
							<path d="M29.1964 16.9917C29.1964 17.7206 28.6054 18.3116 27.8764 18.3116C27.1474 18.3116 26.5564 17.7206 26.5564 16.9917C26.5564 16.2626 27.1474 15.6716 27.8764 15.6716C28.6054 15.6716 29.1964 16.2626 29.1964 16.9917Z" fill="white"/>
						</svg>
					</a>
				</div>
				<div class="views-page">
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
							<path d="M20.5867 14.1439C18.6467 16.185 15.48 18.7637 12 18.7637V20.2637C16.151 20.2637 19.7023 17.2517 21.6739 15.1773L20.5867 14.1439ZM12 18.7637C8.51999 18.7637 5.35328 16.185 3.41334 14.1439L2.32608 15.1773C4.2977 17.2517 7.84898 20.2637 12 20.2637V18.7637ZM3.41334 10.8835C5.35328 8.84236 8.51999 6.26367 12 6.26367V4.76367C7.84898 4.76367 4.2977 7.77565 2.32608 9.85008L3.41334 10.8835ZM12 6.26367C15.48 6.26367 18.6467 8.84236 20.5867 10.8835L21.6739 9.85008C19.7023 7.77565 16.151 4.76367 12 4.76367V6.26367ZM3.41334 14.1439C2.52889 13.2133 2.52889 11.8141 3.41334 10.8835L2.32608 9.85008C0.891307 11.3597 0.891307 13.6677 2.32608 15.1773L3.41334 14.1439ZM21.6739 15.1773C23.1087 13.6677 23.1087 11.3597 21.6739 9.85008L20.5867 10.8835C21.4711 11.8141 21.4711 13.2133 20.5867 14.1439L21.6739 15.1773ZM14.25 12.5137C14.25 13.7563 13.2426 14.7637 12 14.7637V16.2637C14.0711 16.2637 15.75 14.5848 15.75 12.5137H14.25ZM12 14.7637C10.7574 14.7637 9.75 13.7563 9.75 12.5137H8.25C8.25 14.5848 9.92893 16.2637 12 16.2637V14.7637ZM9.75 12.5137C9.75 11.2711 10.7574 10.2637 12 10.2637V8.76367C9.92893 8.76367 8.25 10.4426 8.25 12.5137H9.75ZM12 10.2637C13.2426 10.2637 14.25 11.2711 14.25 12.5137H15.75C15.75 10.4426 14.0711 8.76367 12 8.76367V10.2637Z" fill="white"/>
						</svg>
					</div>
					<span><?= (pll_current_language() == 'en-us') ? "Website views:" : "Lượt xem trang web:" ?> <?= display_total_site_views() ?></span>
				</div>
			</div>
			<div class="col-2">
				<div class="link">
					<h3><?= (pll_current_language() == 'en-us') ? "Path" : "Đường dẫn" ?></h3>
					<?php if(pll_current_language() == 'en-us'): ?>
						<ul>
							<li><a href="">About Halcert</a></li>
							<li><a href="">Document</a></li>
							<li><a href="">Evaluation process</a></li>
							<li><a href="">News & Event</a></li>
							<li><a href="">Cretify</a></li>
							<li><a href="">Contact</a></li>
						</ul>
					<?php else: ?>
						<ul>
							<li><a href="">Về Halcert</a></li>
							<li><a href="">Tài liệu</a></li>
							<li><a href="">Quy trình đánh giá</a></li>
							<li><a href="">Tin tức & Sự kiện</a></li>
							<li><a href="">Chứng nhận</a></li>
							<li><a href="">Liên hệ</a></li>
						</ul>
					<?php endif ?>
				</div>
				<div class="contact">
					<h3><?= (pll_current_language() == 'en-us') ? "Contact" : "Liên hệ" ?></h3>
					<ul>
						<li>
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="21" height="22" viewBox="0 0 21 22" fill="none">
									<path d="M18.3084 17.1374C18.3084 17.4374 18.2417 17.7457 18.1001 18.0457C17.9584 18.3457 17.7751 18.6291 17.5334 18.8957C17.1251 19.3457 16.6751 19.6707 16.1667 19.8791C15.6667 20.0874 15.1251 20.1957 14.5417 20.1957C13.6917 20.1957 12.7834 19.9957 11.8251 19.5874C10.8667 19.1791 9.90842 18.6291 8.95842 17.9374C8.00008 17.2374 7.09175 16.4624 6.22508 15.6041C5.36675 14.7374 4.59175 13.8291 3.90008 12.8791C3.21675 11.9291 2.66675 10.9791 2.26675 10.0374C1.86675 9.08739 1.66675 8.17905 1.66675 7.31239C1.66675 6.74572 1.76675 6.20405 1.96675 5.70405C2.16675 5.19572 2.48341 4.72905 2.92508 4.31239C3.45841 3.78739 4.04175 3.52905 4.65841 3.52905C4.89175 3.52905 5.12508 3.57905 5.33341 3.67905C5.55008 3.77905 5.74175 3.92905 5.89175 4.14572L7.82508 6.87072C7.97508 7.07905 8.08341 7.27072 8.15841 7.45405C8.23341 7.62905 8.27508 7.80405 8.27508 7.96239C8.27508 8.16239 8.21675 8.36239 8.10008 8.55405C7.99175 8.74572 7.83341 8.94572 7.63341 9.14572L7.00008 9.80405C6.90841 9.89572 6.86675 10.0041 6.86675 10.1374C6.86675 10.2041 6.87508 10.2624 6.89175 10.3291C6.91675 10.3957 6.94175 10.4457 6.95842 10.4957C7.10842 10.7707 7.36675 11.1291 7.73341 11.5624C8.10841 11.9957 8.50841 12.4374 8.94175 12.8791C9.39175 13.3207 9.82508 13.7291 10.2667 14.1041C10.7001 14.4707 11.0584 14.7207 11.3417 14.8707C11.3834 14.8874 11.4334 14.9124 11.4917 14.9374C11.5584 14.9624 11.6251 14.9707 11.7001 14.9707C11.8417 14.9707 11.9501 14.9207 12.0417 14.8291L12.6751 14.2041C12.8834 13.9957 13.0834 13.8374 13.2751 13.7374C13.4667 13.6207 13.6584 13.5624 13.8667 13.5624C14.0251 13.5624 14.1917 13.5957 14.3751 13.6707C14.5584 13.7457 14.7501 13.8541 14.9584 13.9957L17.7167 15.9541C17.9334 16.1041 18.0834 16.2791 18.1751 16.4874C18.2584 16.6957 18.3084 16.9041 18.3084 17.1374Z" stroke="#136451" stroke-width="2" stroke-miterlimit="10"/>
									<path d="M15.4167 9.36247C15.4167 8.86247 15.025 8.0958 14.4417 7.4708C13.9083 6.8958 13.2 6.4458 12.5 6.4458" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M18.3333 9.36239C18.3333 6.13739 15.725 3.52905 12.5 3.52905" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="right">
								<p>Hotline</p>
								<span>09856785677</span>
							</div>
						</li>
						<li>
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
									<path d="M14.1667 17.9457H5.83341C3.33341 17.9457 1.66675 16.6957 1.66675 13.7791V7.94572C1.66675 5.02905 3.33341 3.77905 5.83341 3.77905H14.1667C16.6667 3.77905 18.3334 5.02905 18.3334 7.94572V13.7791C18.3334 16.6957 16.6667 17.9457 14.1667 17.9457Z" stroke="#136451" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M14.1666 8.3623L11.5582 10.4456C10.6999 11.129 9.29158 11.129 8.43325 10.4456L5.83325 8.3623" stroke="#136451" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
								</svg>
							</div>
							<div class="right">
								<p>Email</p>
								<span>sanglvph@fe.edu.com</span>
							</div>
						</li>
						<li>
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
									<g clip-path="url(#clip0_20_1042)">
									<path d="M10.068 11.5815C11.5318 11.5815 12.7185 10.3948 12.7185 8.93102C12.7185 7.46719 11.5318 6.28052 10.068 6.28052C8.60415 6.28052 7.41748 7.46719 7.41748 8.93102C7.41748 10.3948 8.60415 11.5815 10.068 11.5815Z" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									<path d="M10.068 1.86255C8.19345 1.86255 6.39568 2.60721 5.07017 3.93272C3.74466 5.25823 3 7.056 3 8.93055C3 10.6021 3.35517 11.6959 4.32525 12.9063L10.068 19.5325L15.8107 12.9063C16.7808 11.6959 17.136 10.6021 17.136 8.93055C17.136 7.056 16.3913 5.25823 15.0658 3.93272C13.7403 2.60721 11.9425 1.86255 10.068 1.86255V1.86255Z" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
									</g>
									<defs>
									<clipPath id="clip0_20_1042">
									<rect width="20" height="20" fill="white" transform="translate(0 0.862305)"/>
									</clipPath>
									</defs>
								</svg>
							</div>
							<div class="right">
								<p><?= (pll_current_language() == 'en-us') ? "Address" : "Địa chỉ" ?></p>
								<span>706 Campfire Ave. Meriden, CT 06450</span>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<?php if ($training_query->have_posts()) : $count = 0;?>
				<?php while ($training_query->have_posts()) : $training_query->the_post(); ?>
					<?php
						$train_id = get_the_ID();
						$train = get_field('training', $train_id);
						$start_time = $train['start_time'];
						$end_time = $train['end_time'];
						$thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
					?>
					<div class="col-3">
						<h3><?= (pll_current_language() == 'en-us') ? "New course training" : "Khóa đào tạo mới" ?></h3>
						<a href=""><img src="<?= esc_url($thumbnail_url) ?>" alt=""></a>
						<div class="date">
							<div class="icon">
								<svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
									<path d="M14.1667 12.5289C14.627 12.5289 15.0001 12.1558 15.0001 11.6956C15.0001 11.2353 14.627 10.8622 14.1667 10.8622C13.7065 10.8622 13.3334 11.2353 13.3334 11.6956C13.3334 12.1558 13.7065 12.5289 14.1667 12.5289Z" fill="white"/>
									<path d="M14.1667 15.8622C14.627 15.8622 15.0001 15.4891 15.0001 15.0289C15.0001 14.5687 14.627 14.1956 14.1667 14.1956C13.7065 14.1956 13.3334 14.5687 13.3334 15.0289C13.3334 15.4891 13.7065 15.8622 14.1667 15.8622Z" fill="white"/>
									<path d="M10.8334 11.6956C10.8334 12.1558 10.4603 12.5289 10.0001 12.5289C9.53984 12.5289 9.16675 12.1558 9.16675 11.6956C9.16675 11.2353 9.53984 10.8622 10.0001 10.8622C10.4603 10.8622 10.8334 11.2353 10.8334 11.6956Z" fill="white"/>
									<path d="M10.8334 15.0289C10.8334 15.4891 10.4603 15.8622 10.0001 15.8622C9.53984 15.8622 9.16675 15.4891 9.16675 15.0289C9.16675 14.5687 9.53984 14.1956 10.0001 14.1956C10.4603 14.1956 10.8334 14.5687 10.8334 15.0289Z" fill="white"/>
									<path d="M5.83342 12.5289C6.29365 12.5289 6.66675 12.1558 6.66675 11.6956C6.66675 11.2353 6.29365 10.8622 5.83342 10.8622C5.37318 10.8622 5.00008 11.2353 5.00008 11.6956C5.00008 12.1558 5.37318 12.5289 5.83342 12.5289Z" fill="white"/>
									<path d="M5.83342 15.8622C6.29365 15.8622 6.66675 15.4891 6.66675 15.0289C6.66675 14.5687 6.29365 14.1956 5.83342 14.1956C5.37318 14.1956 5.00008 14.5687 5.00008 15.0289C5.00008 15.4891 5.37318 15.8622 5.83342 15.8622Z" fill="white"/>
									<path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 2.32056C6.17859 2.32056 6.45842 2.60038 6.45842 2.94556V3.58116C7.01008 3.57055 7.61785 3.57055 8.2863 3.57056H11.7138C12.3822 3.57055 12.9901 3.57055 13.5417 3.58116V2.94556C13.5417 2.60038 13.8216 2.32056 14.1667 2.32056C14.5119 2.32056 14.7917 2.60038 14.7917 2.94556V3.6348C15.0084 3.65131 15.2135 3.67207 15.4076 3.69817C16.3846 3.82953 17.1754 4.10629 17.799 4.72993C18.4227 5.35356 18.6994 6.14435 18.8308 7.12137C18.9584 8.07071 18.9584 9.28373 18.9584 10.8152V12.5759C18.9584 14.1073 18.9584 15.3204 18.8308 16.2697C18.6994 17.2468 18.4227 18.0376 17.799 18.6612C17.1754 19.2848 16.3846 19.5616 15.4076 19.6929C14.4583 19.8206 13.2452 19.8206 11.7138 19.8206H8.28641C6.75496 19.8206 5.5419 19.8206 4.59256 19.6929C3.61554 19.5616 2.82475 19.2848 2.20112 18.6612C1.57748 18.0376 1.30072 17.2468 1.16936 16.2697C1.04172 15.3204 1.04174 14.1074 1.04175 12.5759V10.8152C1.04174 9.28374 1.04172 8.07071 1.16936 7.12137C1.30072 6.14435 1.57748 5.35356 2.20112 4.72993C2.82475 4.10629 3.61554 3.82953 4.59256 3.69817C4.78667 3.67207 4.9918 3.65131 5.20842 3.6348V2.94556C5.20842 2.60038 5.48824 2.32056 5.83342 2.32056ZM4.75912 4.93702C3.92071 5.04974 3.43768 5.26113 3.085 5.61381C2.73233 5.96648 2.52094 6.44952 2.40821 7.28793C2.38912 7.42992 2.37316 7.5794 2.35982 7.73722H17.6403C17.627 7.5794 17.611 7.42992 17.5919 7.28793C17.4792 6.44952 17.2678 5.96648 16.9152 5.61381C16.5625 5.26113 16.0794 5.04974 15.241 4.93702C14.3847 4.82188 13.2558 4.82056 11.6667 4.82056H8.33342C6.7444 4.82056 5.61551 4.82188 4.75912 4.93702ZM2.29175 10.8622C2.29175 10.1505 2.29201 9.53116 2.30265 8.98722H17.6975C17.7081 9.53116 17.7084 10.1505 17.7084 10.8622V12.5289C17.7084 14.1179 17.7071 15.2468 17.5919 16.1032C17.4792 16.9416 17.2678 17.4246 16.9152 17.7773C16.5625 18.13 16.0794 18.3414 15.241 18.4541C14.3847 18.5692 13.2558 18.5706 11.6667 18.5706H8.33342C6.7444 18.5706 5.61551 18.5692 4.75912 18.4541C3.92072 18.3414 3.43768 18.13 3.085 17.7773C2.73233 17.4246 2.52094 16.9416 2.40821 16.1032C2.29308 15.2468 2.29175 14.1179 2.29175 12.5289V10.8622Z" fill="white"/>
								</svg>
							</div>
							<?php if(pll_current_language() == 'en-us'): ?>
								<p class="from"><?= formatDateEn($start_time['date']) ?></p>
								<p class="minus">-</p>
								<p class="to"><?= formatDateEn($end_time['date']) ?></p>
							<?php else: ?>
								<p class="from"><?= formatDate($start_time['date']) ?></p>
								<p class="minus">-</p>
								<p class="to"><?= formatDate($end_time['date']) ?></p>
							<?php endif ?>
						</div>
						<span><?php the_title() ?></span>
					</div>
				<?php endwhile; ?>
				<?php wp_reset_postdata(); ?>
			<?php else : ?>
				<p><?= (pll_current_language() == 'en-us') ? "There are no training." : "Không có khóa đào tạo nào." ?></p>
			<?php endif; ?>
		</div>
		<div class="copyright">
			<span>© 2000-2024 Halcert, All Rights Reserved</span>
		</div>
	</div>
</footer>
</body>
</html>
<script src="<?= $url ?>/dist/js/custom.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script> 

<script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>
