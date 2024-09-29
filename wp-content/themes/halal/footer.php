<?php
$logo = get_field('logo-footer', 'option'); 
$description = get_field('footer-description', 'option'); 
$social_media = get_field('social-media', 'option'); 
$path = get_field('path', 'option'); 
$infor_contact = get_field('infor-contact', 'option'); 
$copyright = get_field('copyright', 'option'); 

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
				<?php if(pll_current_language() == 'en'): ?>
					<span>Register to receive the latest information, updated weekly on HALCERT via email</span>
				<?php else: ?>
					<span>Đăng ký nhận các thông tin mới nhất, cập nhật hàng tuần trên HALCERT qua email</span>
				<?php endif ?>
			</div>
			<div class="right">
				<?php echo do_shortcode('[contact-form-7 id="406" title="Form đăng ký nhận thông tin"]'); ?>
				<div class="notice">
					<span></span>
				</div>
			</div>
		</div>
		<div class="bottom">
			<div class="col-1">
				<div class="logo">
					<img src="<?= $logo ?>" alt="">
				</div>
				<span><?= $description ?></span>
				<div class="social-media">
					<?php foreach ($social_media as $item) : ?>
						<a class="child" href="<?= $item['link'] ?>" target="_blank">
							<img src="<?= $item['image'] ?>" alt="">
						</a>
					<?php endforeach ?>
				</div>
				<div class="views-page">
					<div class="icon">
						<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
							<path d="M20.5867 14.1439C18.6467 16.185 15.48 18.7637 12 18.7637V20.2637C16.151 20.2637 19.7023 17.2517 21.6739 15.1773L20.5867 14.1439ZM12 18.7637C8.51999 18.7637 5.35328 16.185 3.41334 14.1439L2.32608 15.1773C4.2977 17.2517 7.84898 20.2637 12 20.2637V18.7637ZM3.41334 10.8835C5.35328 8.84236 8.51999 6.26367 12 6.26367V4.76367C7.84898 4.76367 4.2977 7.77565 2.32608 9.85008L3.41334 10.8835ZM12 6.26367C15.48 6.26367 18.6467 8.84236 20.5867 10.8835L21.6739 9.85008C19.7023 7.77565 16.151 4.76367 12 4.76367V6.26367ZM3.41334 14.1439C2.52889 13.2133 2.52889 11.8141 3.41334 10.8835L2.32608 9.85008C0.891307 11.3597 0.891307 13.6677 2.32608 15.1773L3.41334 14.1439ZM21.6739 15.1773C23.1087 13.6677 23.1087 11.3597 21.6739 9.85008L20.5867 10.8835C21.4711 11.8141 21.4711 13.2133 20.5867 14.1439L21.6739 15.1773ZM14.25 12.5137C14.25 13.7563 13.2426 14.7637 12 14.7637V16.2637C14.0711 16.2637 15.75 14.5848 15.75 12.5137H14.25ZM12 14.7637C10.7574 14.7637 9.75 13.7563 9.75 12.5137H8.25C8.25 14.5848 9.92893 16.2637 12 16.2637V14.7637ZM9.75 12.5137C9.75 11.2711 10.7574 10.2637 12 10.2637V8.76367C9.92893 8.76367 8.25 10.4426 8.25 12.5137H9.75ZM12 10.2637C13.2426 10.2637 14.25 11.2711 14.25 12.5137H15.75C15.75 10.4426 14.0711 8.76367 12 8.76367V10.2637Z" fill="white"/>
						</svg>
					</div>
					<span><?= (pll_current_language() == 'en') ? "Website views:" : "Lượt xem trang web:" ?> <?= display_total_site_views() ?></span>
				</div>
			</div>
			<div class="col-2">
				<div class="link">
					<div class="wrap">
						<h3><?= (pll_current_language() == 'en') ? "Path" : "Đường dẫn" ?></h3>
						<ul>
							<?php foreach($path as $item): ?>
								<li><a href="<?= $item['link'] ?>"><?= $item['name'] ?></a></li>
							<?php endforeach ?>
						</ul>
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
							<div class="train">
								<h3><?= (pll_current_language() == 'en') ? "New course training" : "Khóa đào tạo mới" ?></h3>
								<a href="<?php the_permalink(); ?>"><img src="<?= esc_url($thumbnail_url) ?>" alt=""></a>
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
									<?php if(pll_current_language() == 'en'): ?>
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
						<p><?= (pll_current_language() == 'en') ? "There are no training." : "Không có khóa đào tạo nào." ?></p>
					<?php endif; ?>
				</div>
				<div class="contact">
					<h3><?= (pll_current_language() == 'en') ? "Contact" : "Liên hệ" ?></h3>
					<ul>
						<?php foreach($infor_contact as $item): ?>
							<li>
								<div class="icon">
									<div class="wrap">
										<img src="<?= $item['icon'] ?>" alt="">
									</div>
								</div>
								<div class="right">
									<p><?= $item['title'] ?></p>
									<span><?= $item['description'] ?></span>
								</div>
							</li>
						<?php endforeach; ?>
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
						<h3><?= (pll_current_language() == 'en') ? "New course training" : "Khóa đào tạo mới" ?></h3>
						<a href="<?php the_permalink(); ?>"><img src="<?= esc_url($thumbnail_url) ?>" alt=""></a>
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
							<?php if(pll_current_language() == 'en'): ?>
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
				<p><?= (pll_current_language() == 'en') ? "There are no training." : "Không có khóa đào tạo nào." ?></p>
			<?php endif; ?>
		</div>
		<div class="copyright">
			<span><?= $copyright ?></span>
		</div>
	</div>
</footer>
</body>
</html>
<script src="<?= $url ?>/dist/js/custom.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js" ></script> 

<script src= "https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js" ></script>

<script>
var ajax_object = {
    ajax_url: '<?php echo admin_url('admin-ajax.php'); ?>',
    nonce: '<?php echo wp_create_nonce('submit_register_form'); ?>'
};
jQuery(document).ready(function($) {
    $('#newsletter-form').on('submit', function(e) {
        e.preventDefault();
        var form = $(this);
        var notice = $('.notice span');
        var formData = form.serialize();
        
        // Add action and nonce to the form data
        formData += '&action=submit_register_form';
        formData += '&register_form_nonce=' + ajax_object.nonce;

        $.ajax({
            type: 'POST',
            url: ajax_object.ajax_url,
            data: formData,
            dataType: 'json',
            success: function(response) {
                if (response.success) {
                    notice.text(response.data.message);
                    form[0].reset();
                } else {
                    notice.text(response.data.message);
                }
            },
            error: function() {
                notice.text('Có lỗi xảy ra. Vui lòng thử lại');
            }
        });
    });
});
</script>