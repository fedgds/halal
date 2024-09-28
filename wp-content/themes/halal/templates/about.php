<?php 
/* Template Name: Về Halcret */
$id = get_the_ID();
$section_1 = get_field('section-1', $id);
$section_2 = get_field('section-2', $id);
$section_4 = get_field('section-4', $id);
$section_3 = get_field('section-3', $id);
$url = get_template_directory_uri();

$list_customers_query = new WP_Query(array(
    'post_type' => 'khach-hang',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order'      => 'ASC',
));

get_header(); ?>
<main>
    <?php include('section/section-banner.php') ?>
    <div class="section-1-about fade-in">
        <div class="background">
            <img src="<?= $url ?>/dist/images/background-section-1.png" alt="">
        </div>
        <div class="container">
            <h2 class="title"><?= $section_1['title'] ?></h2>
            <div class="content">
                <div class="left">
                    <div class="wrap">
                        <div class="image-1">
                            <img src="<?= $section_1['image-1'] ?>" alt="">
                        </div>
                        <div class="image-2">
                            <img src="<?= $section_1['image-2'] ?>" alt="">
                        </div>
                    </div>
                </div>
                <div class="right">
                    <span><?= $section_1['content-1'] ?></span>
                    <ul>
                        <?php foreach($section_1['content-2'] as $item) : ?>
                            <li>
                                <img src="<?= $item['logo'] ?>" alt="">
                                <b><?= $item['text'] ?></b>
                            </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2-about fade-in">
        <div class="container">
            <div class="top">
                <h2 class="title"><?= $section_2['title'] ?></h2>
                <div class="description">
                    <?= $section_2['description'] ?>
                </div>
            </div>
            <div class="bottom">
                <img src="<?= $section_2['image'] ?>" alt="">
            </div>
        </div>
    </div>
    <div class="section-3-about fade-in">
        <div class="container">
            <div class="top">
                <h2 class="title"><?= $section_3['title'] ?></h2>
                <div class="description">
                    <?= $section_3['description'] ?>
                </div>
            </div>
            <div class="bottom">
                <?php foreach($section_3['policy'] as $item): ?>
                    <div class="child">
                        <div class="logo">
                            <img src="<?= $item['logo'] ?>" alt="">
                        </div>
                        <span><?= $item['text'] ?></span>
                        <a href="<?= $item['link'] ?>" class="download" target="_blank">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M12.443 16.44C12.3293 16.5643 12.1687 16.6352 12.0002 16.6352C11.8317 16.6352 11.671 16.5643 11.5574 16.44L8.35738 12.94C8.13378 12.6955 8.15077 12.3159 8.39534 12.0923C8.6399 11.8687 9.01941 11.8857 9.24301 12.1303L11.4002 14.4897V5.63516C11.4002 5.30379 11.6688 5.03516 12.0002 5.03516C12.3316 5.03516 12.6002 5.30379 12.6002 5.63516V14.4897L14.7574 12.1303C14.981 11.8857 15.3605 11.8687 15.6051 12.0923C15.8496 12.3159 15.8666 12.6955 15.643 12.94L12.443 16.44Z" fill="#414141"/>
                                <path d="M5.4002 15.2352C5.4002 14.9038 5.13157 14.6352 4.8002 14.6352C4.46883 14.6352 4.2002 14.9038 4.2002 15.2352V15.2791C4.20018 16.3731 4.20017 17.255 4.29341 17.9486C4.39023 18.6686 4.59734 19.2749 5.07888 19.7565C5.56041 20.238 6.16671 20.4451 6.8868 20.5419C7.58037 20.6352 8.46223 20.6352 9.5563 20.6352H14.4441C15.5382 20.6352 16.42 20.6352 17.1136 20.5419C17.8337 20.4451 18.44 20.238 18.9215 19.7565C19.4031 19.2749 19.6102 18.6686 19.707 17.9486C19.8002 17.255 19.8002 16.3731 19.8002 15.2791V15.2352C19.8002 14.9038 19.5316 14.6352 19.2002 14.6352C18.8688 14.6352 18.6002 14.9038 18.6002 15.2352C18.6002 16.3835 18.5989 17.1844 18.5177 17.7887C18.4388 18.3757 18.2944 18.6865 18.073 18.9079C17.8516 19.1294 17.5407 19.2737 16.9537 19.3526C16.3494 19.4339 15.5485 19.4352 14.4002 19.4352H9.6002C8.45186 19.4352 7.65097 19.4339 7.04669 19.3526C6.45967 19.2737 6.14881 19.1294 5.9274 18.9079C5.70599 18.6865 5.56164 18.3757 5.48271 17.7887C5.40147 17.1844 5.4002 16.3835 5.4002 15.2352Z" fill="#414141"/>
                            </svg>
                        </a>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="section-4-about fade-in">
        <div class="container">
            <div class="top">
                <h2 class="title"><?= $section_4['title'] ?></h2>
                <div class="description">
                    <?= $section_4['description'] ?>
                </div>
            </div>
            <div class="bottom">
                <div class="wrap">
                    <?php if ($list_customers_query->have_posts()) : ?>
                        <?php while ($list_customers_query->have_posts()) : $list_customers_query->the_post(); ?>
                            <?php
                                $customer_id = get_the_ID();
                                $customer = get_field('customer', $customer_id);
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            ?>
                            <?php if($customer['typical'] == true): ?>
                                <span><img src="<?= esc_url($thumbnail_url) ?>" alt=""></span>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p><?= (pll_current_language() == 'en') ? "There are no customer." : "Không có khách hàng nào." ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>