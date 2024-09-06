<?php 
/* Template Name: Giới thiệu */
$id = get_the_ID();
$section_1 = get_field('section-1', $id);
$section_2 = get_field('section-2', $id);
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
    <div class="section-1-about">
        <div class="background">
            <img src="<?= $url ?>/dist/images/background-section-1.png" alt="">
        </div>
        <div class="container">
            <h2><?= $section_1['title'] ?></h2>
            <div class="content">
                <div class="left">
                    <div class="image-1">
                        <img src="<?= $section_1['image-1'] ?>" alt="">
                    </div>
                    <div class="image-2">
                        <img src="<?= $section_1['image-2'] ?>" alt="">
                    </div>
                </div>
                <div class="right">
                    <span><?= $section_1['content-2'] ?></span>
                    <ul>
                        <?php foreach($section_1['content-1'] as $item): ?>
                        <li><?= $item['text'] ?></li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2-about">
        <div class="container">
            <div class="top">
                <h2 class="title"><?= $section_2['title'] ?></h2>
                <div class="description">
                    <?= $section_2['description'] ?>
                </div>
            </div>
            <div class="bottom">
                <?php foreach($section_2['list-member'] as $item): ?>
                    <div class="child">
                        <div class="backdrop-child"></div>
                        <p class="text"><?= $item['description'] ?></p>
                        <div class="content">
                            <img src="<?= $item['image'] ?>" alt="">
                            <div class="infor">
                                <h3><?= $item['name'] ?></h3>
                                <span><?= $item['position'] ?></span>
                            </div>
                        </div>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
    <div class="section-5-home">
        <div class="container">
            <div class="top">
                <h2 class="title"><?= $section_3['title'] ?></h2>
                <div class="description">
                    <?= $section_3['description'] ?>
                </div>
            </div>
            <div class="bottom">
                <?php if ($list_customers_query->have_posts()) : ?>
                    <?php while ($list_customers_query->have_posts()) : $list_customers_query->the_post(); ?>
                        <?php
                            $customer_id = get_the_ID();
                            $customer = get_field('customer', $customer_id);
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $link = $customer['link'];
                        ?>
                        <a href="<?= $link ?>"><img src="<?= esc_url($thumbnail_url) ?>" alt=""></a>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>Không có khách hàng.</p>
                    <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>