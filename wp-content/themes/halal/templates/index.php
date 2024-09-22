<?php
/* Template Name: Trang chủ */
$id = get_the_ID();
$slider = get_field('slider', $id);
$section_1 = get_field('section-1', $id);
$section_2 = get_field('section-2', $id);
$section_3 = get_field('section-3', $id);
$section_4 = get_field('section-4', $id);
$section_5 = get_field('section-5', $id);
$section_6 = get_field('section-6', $id);
$section_7 = get_field('section-7', $id);

$args = array(
    'taxonomy' => 'danh_muc_tap_san',
    'orderby' => 'name',
);

$list_halal_nqi_query = new WP_Query(array(
    'post_type' => 'halal-nqi',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
));

$list_customers_query = new WP_Query(array(
    'post_type' => 'khach-hang',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order' => 'ASC',
));

$list_training_query = new WP_Query(array(
    'post_type' => 'dao-tao',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'date',
));

$list_latest_news_query = new WP_Query(array(
    'post_type' => 'tin-tuc-va-su-kien',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'news-and-event_type',
            'value' => 'Tin tức',
            'compare' => '='
        ),
        array(
            'key' => 'news-and-event_is_featured',
            'value' => '0',
            'compare' => '='
        )
    )
));

$list_featured_news_query = new WP_Query(array(
    'post_type' => 'tin-tuc-va-su-kien',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'news-and-event_type',
            'value' => 'Tin tức',
            'compare' => '='
        ),
        array(
            'key' => 'news-and-event_is_featured',
            'value' => '1',
            'compare' => '='
        )
    )
));

$list_events_query = new WP_Query(array(
    'post_type' => 'tin-tuc-va-su-kien',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'meta_query' => array(
        'relation' => 'AND',
        array(
            'key' => 'news-and-event_type',
            'value' => 'Sự kiện',
            'compare' => '='
        ),
        array(
            'key' => 'news-and-event_is_featured',
            'value' => '1',
            'compare' => '='
        )
    )
));

$danh_muc_tap_san = get_terms($args);

$url = get_template_directory_uri();
get_header(); ?>

<main>
    <div class="section-banner-home">
        <div class="layout"></div>
        <div class="list-slide" id="list-slide">
            <?php foreach ($slider as $item): ?>
                <div class="child">
                    <div class="slider">
                        <?php
                        // Get the file extension of the image/video
                        $fileExtension = pathinfo($item['image'], PATHINFO_EXTENSION);

                        // Check if the file is an mp4
                        if (strtolower($fileExtension) === 'mp4'): ?>
                            <video autoplay muted loop src="<?= $item['image'] ?>"></video>
                        <?php else: ?>
                            <img src="<?= $item['image'] ?>" alt="">
                        <?php endif; ?>
                    </div>
                    <div class="container">
                        <div class="title">
                            <h1 class="line-1"><?= $item['title'] ?></h1>
                        </div>
                        <div class="text">
                            <?= $item['text'] ?>
                        </div>
                    </div>
                </div>
            <?php endforeach ?>
            <ul class="list-dot" id="list-dot">
                <?php foreach ($slider as $item): ?>
                    <li><span></span></li>
                <?php endforeach ?>
            </ul>
        </div>
    </div>
    <div class="section-1-home fade-in">
        <div class="background">
            <img src="<?= $url ?>/dist/images/background-section-1.png" alt="">
        </div>
        <div class="container">
            <div class="left">
                <div class="image-1">
                    <img src="<?= $section_1['image-1'] ?>" alt="">
                </div>
                <div class="image-2">
                    <img src="<?= $section_1['image-2'] ?>" alt="">
                </div>
            </div>
            <div class="right">
                <h2 class="title">
                    <?= $section_1['title'] ?>
                </h2>
                <div class="sub-1">
                    <div class="content">
                        <p><?= $section_1['content-1'] ?></p>
                    </div>
                </div>
                <div class="sub-2">
                    <div class="content">
                        <?= $section_1['content-2'] ?>
                    </div>
                </div>
                <div class="button">
                    <?php if (pll_current_language() == 'en-us'): ?>
                        <a href="<?= home_url() ?>/en-us/about-halcert">
                            <span>View more</span>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.5 5.625C7.15482 5.625 6.875 5.34518 6.875 5C6.875 4.65482 7.15482 4.375 7.5 4.375H15C15.3452 4.375 15.625 4.65482 15.625 5V12.5C15.625 12.8452 15.3452 13.125 15 13.125C14.6548 13.125 14.375 12.8452 14.375 12.5V6.50888L5.44194 15.4419C5.19786 15.686 4.80214 15.686 4.55806 15.4419C4.31398 15.1979 4.31398 14.8021 4.55806 14.5581L13.4911 5.625H7.5Z"
                                        fill="#FE3131" stroke="#FE3131" />
                                </svg>
                            </div>
                        </a>
                    <?php else: ?>
                        <a href="<?= home_url() ?>/ve-halcert">
                            <span>Tìm hiểu thêm</span>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                    fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd"
                                        d="M7.5 5.625C7.15482 5.625 6.875 5.34518 6.875 5C6.875 4.65482 7.15482 4.375 7.5 4.375H15C15.3452 4.375 15.625 4.65482 15.625 5V12.5C15.625 12.8452 15.3452 13.125 15 13.125C14.6548 13.125 14.375 12.8452 14.375 12.5V6.50888L5.44194 15.4419C5.19786 15.686 4.80214 15.686 4.55806 15.4419C4.31398 15.1979 4.31398 14.8021 4.55806 14.5581L13.4911 5.625H7.5Z"
                                        fill="#FE3131" stroke="#FE3131" />
                                </svg>
                            </div>
                        </a>
                    <?php endif ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2-home fade-in">
        <div class="background">
            <img src="<?= $section_2['cover-image'] ?>" alt="">
        </div>
        <div class="container">
            <h2 class="title"><?= $section_2['title'] ?></h2>
            <div class="description">
                <?= $section_2['description'] ?>
            </div>
            <a
                href="<?= home_url() ?><?= (pll_current_language() == 'en-us') ? "/en-us/register-cretify/" : "/dang-ky-chung-nhan" ?>">
                <?= (pll_current_language() == 'en-us') ? "Register cretify" : "Đăng ký chứng nhận" ?>
            </a>
        </div>
    </div>
    <div class="section-3-home fade-in">
        <div class="container">
            <div class="top">
                <h2 class="title"><?= $section_3['title'] ?></h2>
                <div class="description">
                    <?= $section_3['description'] ?>
                </div>
                <nav class="tab">
                    <ul id="list-tab-section-3">
                        <?php if ($list_halal_nqi_query->have_posts()): ?>
                            <?php while ($list_halal_nqi_query->have_posts()):
                                $list_halal_nqi_query->the_post(); ?>
                                <?php
                                $nqi_id = get_the_ID();
                                $nqi = get_field('halal_nqi', $nqi_id);
                                ?>
                                <li><?php the_title(); ?></li>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php endif; ?>
                    </ul>
                </nav>
            </div>
            <div class="bottom" id="tab-section-3">
                <?php if ($list_halal_nqi_query->have_posts()): ?>
                    <?php while ($list_halal_nqi_query->have_posts()):
                        $list_halal_nqi_query->the_post(); ?>
                        <?php
                        $nqi_id = get_the_ID();
                        $nqi = get_field('halal_nqi', $nqi_id);
                        $policy_list = $nqi['policy-list'];
                        ?>
                        <div class="child">
                            <div class="left">
                                <h3><?php the_title(); ?></h3>
                                <div class="content">
                                    <?php the_content(); ?>
                                </div>
                                <nav class="download">
                                    <ul>
                                        <?php foreach ($policy_list as $item): ?>
                                            <li>
                                                <a href="<?= $item['link_download'] ?>" target="_blank">
                                                    <span><?= $item['policy'] ?></span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                                        viewBox="0 0 24 24" fill="none">
                                                        <path
                                                            d="M12.442 15.6051C12.3284 15.7294 12.1677 15.8002 11.9992 15.8002C11.8308 15.8002 11.6701 15.7294 11.5564 15.6051L8.3564 12.1051C8.1328 11.8605 8.1498 11.481 8.39436 11.2574C8.63892 11.0338 9.01844 11.0508 9.24204 11.2953L11.3992 13.6548V4.8002C11.3992 4.46882 11.6679 4.2002 11.9992 4.2002C12.3306 4.2002 12.5992 4.46882 12.5992 4.8002V13.6548L14.7564 11.2953C14.98 11.0508 15.3595 11.0338 15.6041 11.2574C15.8486 11.481 15.8656 11.8605 15.642 12.1051L12.442 15.6051Z"
                                                            fill="#414141" />
                                                        <path
                                                            d="M5.39922 14.4002C5.39922 14.0688 5.13059 13.8002 4.79922 13.8002C4.46785 13.8002 4.19922 14.0688 4.19922 14.4002V14.4441C4.1992 15.5382 4.19919 16.42 4.29244 17.1136C4.38925 17.8337 4.59637 18.44 5.0779 18.9215C5.55943 19.403 6.16573 19.6102 6.88582 19.707C7.57939 19.8002 8.46125 19.8002 9.55532 19.8002H14.4431C15.5372 19.8002 16.419 19.8002 17.1126 19.707C17.8327 19.6102 18.439 19.403 18.9205 18.9215C19.4021 18.44 19.6092 17.8337 19.706 17.1136C19.7993 16.42 19.7992 15.5382 19.7992 14.4441V14.4002C19.7992 14.0688 19.5306 13.8002 19.1992 13.8002C18.8679 13.8002 18.5992 14.0688 18.5992 14.4002C18.5992 15.5485 18.5979 16.3494 18.5167 16.9537C18.4378 17.5407 18.2934 17.8516 18.072 18.073C17.8506 18.2944 17.5397 18.4388 16.9527 18.5177C16.3484 18.5989 15.5476 18.6002 14.3992 18.6002H9.59922C8.45089 18.6002 7.65 18.5989 7.04572 18.5177C6.4587 18.4388 6.14784 18.2944 5.92643 18.073C5.70502 17.8516 5.56066 17.5407 5.48174 16.9537C5.40049 16.3494 5.39922 15.5485 5.39922 14.4002Z"
                                                            fill="#414141" />
                                                    </svg>
                                                </a>
                                            </li>
                                        <?php endforeach ?>
                                    </ul>
                                </nav>
                                <?php if (pll_current_language() == 'en-us'): ?>
                                    <a href="<?= home_url() ?>/en-us/halal-nqi-en#<?= get_post_field('post_name', get_post()); ?>"
                                        class="view-more">
                                        <span>View more</span>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6 4.5C5.72386 4.5 5.5 4.27614 5.5 4C5.5 3.72386 5.72386 3.5 6 3.5H12C12.2761 3.5 12.5 3.72386 12.5 4V10C12.5 10.2761 12.2761 10.5 12 10.5C11.7239 10.5 11.5 10.2761 11.5 10V5.20711L4.35355 12.3536C4.15829 12.5488 3.84171 12.5488 3.64645 12.3536C3.45118 12.1583 3.45118 11.8417 3.64645 11.6464L10.7929 4.5H6Z"
                                                    fill="#FE3131" />
                                            </svg>
                                        </div>
                                    </a>
                                <?php else: ?>
                                    <a href="<?= home_url() ?>/halal-nqi#<?= get_post_field('post_name', get_post()); ?>"
                                        class="view-more">
                                        <span>Tìm hiểu thêm</span>
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16"
                                                fill="none">
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M6 4.5C5.72386 4.5 5.5 4.27614 5.5 4C5.5 3.72386 5.72386 3.5 6 3.5H12C12.2761 3.5 12.5 3.72386 12.5 4V10C12.5 10.2761 12.2761 10.5 12 10.5C11.7239 10.5 11.5 10.2761 11.5 10V5.20711L4.35355 12.3536C4.15829 12.5488 3.84171 12.5488 3.64645 12.3536C3.45118 12.1583 3.45118 11.8417 3.64645 11.6464L10.7929 4.5H6Z"
                                                    fill="#FE3131" />
                                            </svg>
                                        </div>
                                    </a>
                                <?php endif ?>
                            </div>
                            <div class="right">
                                <div class="image-1">
                                    <img src="<?= $section_3['image-1'] ?>" alt="">
                                </div>
                                <div class="image-2">
                                    <img src="<?= $section_3['image-2'] ?>" alt="">
                                </div>
                            </div>
                        </div>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
    <div class="section-4-home fade-in">
        <div class="background">
            <img src="<?= $url ?>/dist/images/background-section-4.png" alt="">
        </div>
        <div class="container">
            <h2 class="title"><?= $section_4['title'] ?></h2>
            <div class="description">
                <?= $section_4['description'] ?>
            </div>
            <div class="wrap-list">
                <div class="list-training">
                    <?php if ($list_training_query->have_posts()):
                        $count = 0; ?>
                        <?php while ($list_training_query->have_posts()):
                            $list_training_query->the_post(); ?>
                            <?php
                            $count++;
                            $train_id = get_the_ID();
                            $train = get_field('training', $train_id);
                            $start_time = $train['start_time'];
                            $end_time = $train['end_time'];
                            $address = $train['address'];
                            ?>
                            <div class="child">
                                <h4><?php the_title() ?></h4>
                                <div class="description">
                                    <?php the_content() ?>
                                </div>
                                <div class="time">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21"
                                            fill="none">
                                            <path
                                                d="M14.1729 12.1663C14.6331 12.1663 15.0062 11.7932 15.0062 11.333C15.0062 10.8728 14.6331 10.4997 14.1729 10.4997C13.7126 10.4997 13.3395 10.8728 13.3395 11.333C13.3395 11.7932 13.7126 12.1663 14.1729 12.1663Z"
                                                fill="#414141" />
                                            <path
                                                d="M14.1729 15.4997C14.6331 15.4997 15.0062 15.1266 15.0062 14.6663C15.0062 14.2061 14.6331 13.833 14.1729 13.833C13.7126 13.833 13.3395 14.2061 13.3395 14.6663C13.3395 15.1266 13.7126 15.4997 14.1729 15.4997Z"
                                                fill="#414141" />
                                            <path
                                                d="M10.8395 11.333C10.8395 11.7932 10.4664 12.1663 10.0062 12.1663C9.54595 12.1663 9.17285 11.7932 9.17285 11.333C9.17285 10.8728 9.54595 10.4997 10.0062 10.4997C10.4664 10.4997 10.8395 10.8728 10.8395 11.333Z"
                                                fill="#414141" />
                                            <path
                                                d="M10.8395 14.6663C10.8395 15.1266 10.4664 15.4997 10.0062 15.4997C9.54595 15.4997 9.17285 15.1266 9.17285 14.6663C9.17285 14.2061 9.54595 13.833 10.0062 13.833C10.4664 13.833 10.8395 14.2061 10.8395 14.6663Z"
                                                fill="#414141" />
                                            <path
                                                d="M5.83952 12.1663C6.29976 12.1663 6.67285 11.7932 6.67285 11.333C6.67285 10.8728 6.29976 10.4997 5.83952 10.4997C5.37928 10.4997 5.00619 10.8728 5.00619 11.333C5.00619 11.7932 5.37928 12.1663 5.83952 12.1663Z"
                                                fill="#414141" />
                                            <path
                                                d="M5.83952 15.4997C6.29976 15.4997 6.67285 15.1266 6.67285 14.6663C6.67285 14.2061 6.29976 13.833 5.83952 13.833C5.37928 13.833 5.00619 14.2061 5.00619 14.6663C5.00619 15.1266 5.37928 15.4997 5.83952 15.4997Z"
                                                fill="#414141" />
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M5.83952 1.95801C6.1847 1.95801 6.46452 2.23783 6.46452 2.58301V3.21861C7.01618 3.208 7.62396 3.208 8.2924 3.20801H11.7199C12.3883 3.208 12.9962 3.208 13.5479 3.21861V2.58301C13.5479 2.23783 13.8277 1.95801 14.1729 1.95801C14.518 1.95801 14.7979 2.23783 14.7979 2.58301V3.27225C15.0145 3.28876 15.2196 3.30952 15.4137 3.33562C16.3907 3.46698 17.1815 3.74374 17.8051 4.36738C18.4288 4.99101 18.7055 5.7818 18.8369 6.75882C18.9645 7.70816 18.9645 8.92118 18.9645 10.4526V12.2134C18.9645 13.7448 18.9645 14.9579 18.8369 15.9072C18.7055 16.8842 18.4288 17.675 17.8051 18.2986C17.1815 18.9223 16.3907 19.199 15.4137 19.3304C14.4644 19.458 13.2513 19.458 11.7199 19.458H8.29251C6.76106 19.458 5.548 19.458 4.59867 19.3304C3.62165 19.199 2.83086 18.9223 2.20722 18.2986C1.58359 17.675 1.30682 16.8842 1.17546 15.9072C1.04783 14.9578 1.04784 13.7448 1.04785 12.2134V10.4527C1.04784 8.92119 1.04783 7.70817 1.17546 6.75882C1.30682 5.7818 1.58359 4.99101 2.20722 4.36738C2.83086 3.74374 3.62165 3.46698 4.59867 3.33562C4.79277 3.30952 4.9979 3.28876 5.21452 3.27225V2.58301C5.21452 2.23783 5.49434 1.95801 5.83952 1.95801ZM4.76523 4.57447C3.92682 4.68719 3.44378 4.89859 3.0911 5.25126C2.73843 5.60393 2.52704 6.08697 2.41432 6.92538C2.39523 7.06737 2.37927 7.21685 2.36592 7.37467H17.6464C17.6331 7.21685 17.6171 7.06737 17.5981 6.92538C17.4853 6.08697 17.2739 5.60393 16.9213 5.25126C16.5686 4.89859 16.0856 4.68719 15.2471 4.57447C14.3908 4.45933 13.2619 4.45801 11.6729 4.45801H8.33952C6.7505 4.45801 5.62161 4.45933 4.76523 4.57447ZM2.29785 10.4997C2.29785 9.788 2.29812 9.16861 2.30876 8.62467H17.7036C17.7143 9.16861 17.7145 9.788 17.7145 10.4997V12.1663C17.7145 13.7554 17.7132 14.8842 17.5981 15.7406C17.4853 16.579 17.2739 17.0621 16.9213 17.4148C16.5686 17.7674 16.0856 17.9788 15.2471 18.0915C14.3908 18.2067 13.2619 18.208 11.6729 18.208H8.33952C6.7505 18.208 5.62161 18.2067 4.76523 18.0915C3.92682 17.9788 3.44378 17.7674 3.0911 17.4148C2.73843 17.0621 2.52704 16.579 2.41432 15.7406C2.29918 14.8842 2.29785 13.7554 2.29785 12.1663V10.4997Z"
                                                fill="#414141" />
                                        </svg>
                                    </div>
                                    <div>
                                        <p><?= $start_time['date'] ?></p>
                                        <?php if ($start_time['date']): ?>
                                            <span><?= date('h:i:s A', strtotime($start_time['time'])) ?></span>
                                        <?php endif ?>
                                    </div>
                                </div>
                                <div class="address">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                            fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M2.71387 8.45307C2.71387 4.37055 5.96804 1.04199 10.0055 1.04199C14.043 1.04199 17.2972 4.37055 17.2972 8.45307C17.2972 10.424 16.7355 12.5402 15.7426 14.3685C14.7509 16.1946 13.3019 17.7813 11.4893 18.6286C10.5477 19.0687 9.46339 19.0687 8.52178 18.6286C6.70918 17.7813 5.26022 16.1946 4.2685 14.3685C3.27556 12.5402 2.71387 10.424 2.71387 8.45307ZM10.0055 2.29199C6.67923 2.29199 3.96387 5.03989 3.96387 8.45307C3.96387 10.2006 4.46606 12.1132 5.36695 13.772C6.26907 15.433 7.54388 16.7917 9.05107 17.4962C9.65724 17.7795 10.3538 17.7795 10.96 17.4962C12.4672 16.7917 13.742 15.433 14.6441 13.772C15.545 12.1132 16.0472 10.2006 16.0472 8.45307C16.0472 5.03989 13.3318 2.29199 10.0055 2.29199ZM10.0055 6.45866C8.97 6.45866 8.13053 7.29813 8.13053 8.33366C8.13053 9.36919 8.97 10.2087 10.0055 10.2087C11.0411 10.2087 11.8805 9.36919 11.8805 8.33366C11.8805 7.29813 11.0411 6.45866 10.0055 6.45866ZM6.88053 8.33366C6.88053 6.60777 8.27964 5.20866 10.0055 5.20866C11.7314 5.20866 13.1305 6.60777 13.1305 8.33366C13.1305 10.0595 11.7314 11.4587 10.0055 11.4587C8.27964 11.4587 6.88053 10.0595 6.88053 8.33366Z"
                                                fill="#414141" />
                                        </svg>
                                    </div>
                                    <?php if ($address): ?>
                                        <span><?= $address ?></span>
                                    <?php endif ?>
                                </div>
                                <a class="view-more" href="<?php the_permalink(); ?>">
                                    <span><?= (pll_current_language() == 'en-us') ? "View more" : "Tìm hiểu thêm" ?></span>
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="17" height="17" viewBox="0 0 17 17"
                                            fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M6.09375 5.18262C5.81761 5.18262 5.59375 4.95876 5.59375 4.68262C5.59375 4.40647 5.81761 4.18262 6.09375 4.18262H12.0938C12.3699 4.18262 12.5938 4.40647 12.5938 4.68262V10.6826C12.5938 10.9588 12.3699 11.1826 12.0938 11.1826C11.8176 11.1826 11.5938 10.9588 11.5938 10.6826V5.88972L4.4473 13.0362C4.25204 13.2314 3.93546 13.2314 3.7402 13.0362C3.54493 12.8409 3.54493 12.5243 3.7402 12.3291L10.8866 5.18262H6.09375Z"
                                                fill="#FE3131" />
                                        </svg>
                                    </div>
                                </a>
                            </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p><?= (pll_current_language() == 'en-us') ? "There are no training." : "Không có khóa đào tạo nào." ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-5-home fade-in">
        <div class="container">
            <div class="top">
                <h2 class="title"><?= $section_5['title'] ?></h2>
                <div class="description">
                    <?= $section_5['description'] ?>
                </div>
            </div>
            <div class="bottom">
                <div class="wrap">
                    <?php if ($list_customers_query->have_posts()): ?>
                        <?php while ($list_customers_query->have_posts()):
                            $list_customers_query->the_post(); ?>
                            <?php
                            $customer_id = get_the_ID();
                            $customer = get_field('customer', $customer_id);
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            ?>
                            <?php if ($customer['typical'] == true): ?>
                                <span><img src="<?= esc_url($thumbnail_url) ?>" alt=""></span>
                            <?php endif; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p><?= (pll_current_language() == 'en-us') ? "There are no customer." : "Không có khách hàng nào." ?>
                        </p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-6-home fade-in">
        <div class="container">
            <div class="top">
                <h2 class="title">
                    <p><?= $section_6['title'] ?></p>
                </h2>
                <nav class="tab">
                    <ul id="list-tab-news">
                        <li><?= $section_6['tab_1'] ?></li>
                        <li><?= $section_6['tab_2'] ?></li>
                    </ul>
                </nav>
            </div>
            <div class="bottom">
                <div class="left" id="tab-news">
                    <div class="list-news">
                        <?php if ($list_latest_news_query->have_posts()): ?>
                            <?php $featured_count = 0; ?>
                            <?php while ($list_latest_news_query->have_posts()):
                                $list_latest_news_query->the_post(); ?>
                                <?php
                                $news_id = get_the_ID();
                                $news = get_field('news-and-event', $news_id);
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $views = $news['views'];
                                ?>
                                <div class="child">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?= esc_url($thumbnail_url) ?>" alt="">
                                    </a>
                                    <div class="infor">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="date-and-views">
                                            <div class="date">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z"
                                                            fill="#136451" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z"
                                                            fill="#136451" />
                                                    </svg>
                                                </div>
                                                <span><?= get_the_date() ?></span>
                                            </div>
                                            <span class="minus">-</span>
                                            <span class="views"><?= $views ?>
                                                <?= (pll_current_language() == 'en-us') ? "views" : "lượt xem" ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php $featured_count++; ?>
                                <?php if ($featured_count >= 2)
                                    break; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                            <p><?= (pll_current_language() == 'en-us') ? "There are no news." : "Không có tin tức nào." ?>
                            </p>
                        <?php endif; ?>
                    </div>
                    <div class="list-news">
                        <?php if ($list_events_query->have_posts()): ?>
                            <?php $featured_count = 0; ?>
                            <?php while ($list_events_query->have_posts()):
                                $list_events_query->the_post(); ?>
                                <?php
                                $event_id = get_the_ID();
                                $event = get_field('news-and-event', $event_id);
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $views = $event['views'];
                                ?>
                                <div class="child">
                                    <a href="<?php the_permalink(); ?>">
                                        <img src="<?= esc_url($thumbnail_url) ?>" alt="">
                                    </a>
                                    <div class="infor">
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                        <div class="date-and-views">
                                            <div class="date">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20"
                                                        viewBox="0 0 20 20" fill="none">
                                                        <path
                                                            d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z"
                                                            fill="#136451" />
                                                        <path
                                                            d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z"
                                                            fill="#136451" />
                                                        <path fill-rule="evenodd" clip-rule="evenodd"
                                                            d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z"
                                                            fill="#136451" />
                                                    </svg>
                                                </div>
                                                <span><?= get_the_date() ?></span>
                                            </div>
                                            <span class="minus">-</span>
                                            <span class="views"><?= $views ?>
                                                <?= (pll_current_language() == 'en-us') ? "views" : "lượt xem" ?></span>
                                        </div>
                                    </div>
                                </div>
                                <?php $featured_count++; ?>
                                <?php if ($featured_count >= 2)
                                    break; ?>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else: ?>
                            <p><?= (pll_current_language() == 'en-us') ? "There are no event." : "Không có sự kiện nào." ?>
                            </p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="right">
                    <?php if ($list_featured_news_query->have_posts()): ?>
                        <?php $count = 0; ?>
                        <?php while ($list_featured_news_query->have_posts()):
                            $list_featured_news_query->the_post(); ?>
                            <?php
                            $news_id = get_the_ID();
                            $news = get_field('news-and-event', $news_id);
                            $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                            $views = $news['views'];
                            ?>
                            <div class="child">
                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                <div class="date-and-views">
                                    <div class="date">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20"
                                                fill="none">
                                                <path
                                                    d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z"
                                                    fill="#136451" />
                                                <path
                                                    d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z"
                                                    fill="#136451" />
                                                <path
                                                    d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z"
                                                    fill="#136451" />
                                                <path
                                                    d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z"
                                                    fill="#136451" />
                                                <path
                                                    d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z"
                                                    fill="#136451" />
                                                <path
                                                    d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z"
                                                    fill="#136451" />
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z"
                                                    fill="#136451" />
                                            </svg>
                                        </div>
                                        <span><?= get_the_date() ?></span>
                                    </div>
                                    <span class="minus">-</span>
                                    <span class="views"><?= $views ?>
                                        <?= (pll_current_language() == 'en-us') ? "views" : "lượt xem" ?></span>
                                </div>
                            </div>
                            <?php $count++; ?>
                            <?php if ($count >= 3)
                                break; ?>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else: ?>
                        <p><?= (pll_current_language() == 'en-us') ? "There are no event." : "Không có sự kiện nào." ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
    <div class="section-7-home fade-in">
        <div class="image">
            <img src="<?= $url ?>/dist/images/background-section-7.png" alt="">
        </div>
        <div class="container">
            <div class="top">
                <h2 class="title">
                    <p><?= $section_7['title'] ?></p>
                </h2>
                <nav class="tab">
                    <ul id="tab-halal">
                        <?php foreach ($danh_muc_tap_san as $category): ?>
                            <li><?= $category->name ?></li>
                        <?php endforeach ?>
                    </ul>
                </nav>
            </div>
            <div class="bottom">
                <?php foreach ($danh_muc_tap_san as $category): ?>
                    <div class="list" id="list-halal">
                        <div class="wrap">
                            <div class="wrap-list">
                                <?php
                                $project_args = array(
                                    'post_type' => 'tap-san',
                                    'posts_per_page' => 3,
                                    'tax_query' => array(
                                        array(
                                            'taxonomy' => 'danh_muc_tap_san',
                                            'field' => 'slug',
                                            'terms' => $category->slug,
                                        ),
                                    ),
                                );
                                $projects = new WP_Query($project_args);

                                if ($projects->have_posts()):
                                    while ($projects->have_posts()):
                                        $projects->the_post();
                                        $project_id = get_the_ID();
                                        $project = get_field('tap_san', $project_id);
                                        $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                        ?>
                                        <div class="child">
                                            <a href="<?php the_permalink(); ?>">
                                                <img src="<?= esc_url($thumbnail_url) ?>" alt="">
                                            </a>
                                            <div class="infor">
                                                <div class="date-and-hour">
                                                    <div class="date">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
                                                                viewBox="0 0 15 16" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M4.375 1.92969C4.63388 1.92969 4.84375 2.13956 4.84375 2.39844V3.02344H10.1562V2.39844C10.1562 2.13956 10.3661 1.92969 10.625 1.92969C10.8839 1.92969 11.0937 2.13956 11.0937 2.39844V3.02344H11.875C12.9106 3.02344 13.75 3.86291 13.75 4.89844V12.3984C13.75 13.434 12.9106 14.2734 11.875 14.2734H3.125C2.08947 14.2734 1.25 13.434 1.25 12.3984V4.89844C1.25 3.86291 2.08947 3.02344 3.125 3.02344H3.90625V2.39844C3.90625 2.13956 4.11612 1.92969 4.375 1.92969ZM10.1562 3.96094V4.89844C10.1562 5.15732 10.3661 5.36719 10.625 5.36719C10.8839 5.36719 11.0937 5.15732 11.0937 4.89844V3.96094H11.875C12.3927 3.96094 12.8125 4.38067 12.8125 4.89844V6.92969H2.1875V4.89844C2.1875 4.38067 2.60723 3.96094 3.125 3.96094H3.90625V4.89844C3.90625 5.15732 4.11612 5.36719 4.375 5.36719C4.63388 5.36719 4.84375 5.15732 4.84375 4.89844V3.96094H10.1562ZM2.1875 7.86719V12.3984C2.1875 12.9162 2.60723 13.3359 3.125 13.3359H11.875C12.3927 13.3359 12.8125 12.9162 12.8125 12.3984V7.86719H2.1875Z"
                                                                    fill="#414141" />
                                                            </svg>
                                                        </div>
                                                        <span><?= custom_date_format(get_the_date()) ?></span>
                                                    </div>
                                                    <div class="dot">
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="5" height="6"
                                                            viewBox="0 0 5 6" fill="none">
                                                            <circle cx="2.5" cy="3.02344" r="2.5" fill="#414141" />
                                                        </svg>
                                                    </div>
                                                    <div class="time">
                                                        <div class="icon">
                                                            <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16"
                                                                viewBox="0 0 15 16" fill="none">
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7.5 13.3359C10.434 13.3359 12.8125 10.9574 12.8125 8.02344C12.8125 5.08942 10.434 2.71094 7.5 2.71094C4.56599 2.71094 2.1875 5.08942 2.1875 8.02344C2.1875 10.9574 4.56599 13.3359 7.5 13.3359ZM7.5 14.2734C10.9517 14.2734 13.75 11.4752 13.75 8.02344C13.75 4.57166 10.9517 1.77344 7.5 1.77344C4.04822 1.77344 1.25 4.57166 1.25 8.02344C1.25 11.4752 4.04822 14.2734 7.5 14.2734Z"
                                                                    fill="#414141" />
                                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                                    d="M7.5 4.42969C7.75888 4.42969 7.96875 4.63956 7.96875 4.89844V7.76456C7.96875 7.806 7.98519 7.84575 8.0145 7.87506L9.39394 9.2545C9.577 9.43756 9.577 9.73431 9.39394 9.91738C9.21088 10.1004 8.91413 10.1004 8.73106 9.91738L7.35162 8.53794C7.1465 8.33281 7.03125 8.05463 7.03125 7.76456V4.89844C7.03125 4.63956 7.24113 4.42969 7.5 4.42969Z"
                                                                    fill="#414141" />
                                                            </svg>
                                                        </div>
                                                        <span><?= custom_time_format(get_the_time()) ?></span>
                                                    </div>
                                                </div>
                                                <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                            </div>
                                        </div>
                                    <?php endwhile;
                                    wp_reset_postdata();
                                else: ?>
                                    <p><?= (pll_current_language() == 'en-us') ? "There are no journals." : "Không có tập san nào." ?>
                                    </p>
                                <?php endif; ?>
                            </div>
                        </div>

                        <?php
                        // Lấy tất cả bài viết để kiểm tra số lượng
                        $all_project_args = array(
                            'post_type' => 'tap-san',
                            'tax_query' => array(
                                array(
                                    'taxonomy' => 'danh_muc_tap_san',
                                    'field' => 'slug',
                                    'terms' => $category->slug,
                                ),
                            ),
                        );
                        $all_projects = new WP_Query($all_project_args);
                        if ($all_projects->found_posts > 3): ?>
                            <a href="<?= home_url() ?>/danh_muc_tap_san/<?= $category->slug ?>"
                                class="view-more"><?= (pll_current_language() == 'en-us') ? "VIEW MORE" : "XEM THÊM" ?></a>
                        <?php endif; ?>
                    </div>
                <?php endforeach ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>