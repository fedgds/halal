<?php 
$query = new WP_Query(
    array(
        'post_type' => 'tin-tuc',
        'post_status' => 'publish'
    )
);

$news_id = get_the_ID();
$news = get_field('news', $news_id);

$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
$address = $news['address'];

// Tin tức mới nhất
$latest_news_query = new WP_Query(array(
    'post_type' => 'tin-tuc',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'post__not_in' => array($news_id)
));

// Sự kiện mới nhất
$latest_events_query = new WP_Query(array(
    'post_type' => 'su-kien',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'date'
));

// Tin tức liên quan
// Lấy ra danh mục
$categories = wp_get_post_terms($news_id, 'danh_muc_tin_tuc', array('fields' => 'ids'));

// Query cùng danh mục
$related_news_query = new WP_Query(array(
    'post_type' => 'tin-tuc',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'tax_query' => array(
        array(
            'taxonomy' => 'danh_muc_tin_tuc',
            'field' => 'id',
            'terms' => $categories,
        )
    ),
    'post__not_in' => array($news_id)
));

$url = get_template_directory_uri();
get_header(); ?>
<main>
    <div class="section-detail-news-and-event fade-in">
        <div class="container">
            <div class="bot">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.49434 7.58854C1.96755 8.06265 1.66675 8.73804 1.66675 9.44679V15.8334C1.66675 17.2141 2.78604 18.3334 4.16675 18.3334H15.8334C17.2142 18.3334 18.3334 17.2141 18.3334 15.8334V9.44679C18.3334 8.73804 18.0326 8.06265 17.5058 7.58854L11.6725 2.33854C10.7217 1.48286 9.27841 1.48286 8.32766 2.33855L2.49434 7.58854ZM9.16675 10.8334C8.24627 10.8334 7.50008 11.5795 7.50008 12.5V15.8334C7.50008 16.2936 7.87318 16.6667 8.33341 16.6667H11.6667C12.127 16.6667 12.5001 16.2936 12.5001 15.8334V12.5C12.5001 11.5795 11.7539 10.8334 10.8334 10.8334H9.16675Z" fill="#414141"/>
                    </svg>
                </a>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.47994 12.6869C5.28468 12.4917 5.28468 12.1751 5.47994 11.9799L9.34189 8.11795C9.40696 8.05281 9.40696 7.94735 9.34189 7.88221L5.47994 4.0203C5.28468 3.82504 5.28468 3.50845 5.47994 3.31319C5.6752 3.11793 5.99179 3.11793 6.18705 3.31319L10.049 7.17515C10.5046 7.63075 10.5046 8.36941 10.049 8.82501L6.18705 12.6869C5.99179 12.8822 5.6752 12.8822 5.47994 12.6869Z" fill="#414141"/>
                    </svg>
                </span>
                <?php if(pll_current_language() == 'en-us'): ?>
                    <a href="<?= home_url() ?>/news">
                        News
                    </a>
                <?php else: ?>
                    <a href="<?= home_url() ?>/tin-tuc">
                        Tin tức
                    </a>
                <?php endif ?>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.47994 12.6869C5.28468 12.4917 5.28468 12.1751 5.47994 11.9799L9.34189 8.11795C9.40696 8.05281 9.40696 7.94735 9.34189 7.88221L5.47994 4.0203C5.28468 3.82504 5.28468 3.50845 5.47994 3.31319C5.6752 3.11793 5.99179 3.11793 6.18705 3.31319L10.049 7.17515C10.5046 7.63075 10.5046 8.36941 10.049 8.82501L6.18705 12.6869C5.99179 12.8822 5.6752 12.8822 5.47994 12.6869Z" fill="#414141"/>
                    </svg>
                </span>
                <a href="">
                    <?php the_title(); ?>
                </a>
            </div>
            <div class="left">
                <div class="thumbnail">
                    <img src="<?= esc_url($thumbnail) ?>" alt="">
                </div>
                <div class="date-and-address">
                    <span class="date"><?= get_the_date() ?></span>
                    <?php if($address): ?>
                        <span>|</span>
                    <?php endif ?>
                    <span class="address"><?= $address ?></span>
                </div>
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="content">
                    <?php the_content(); ?>
                </div>
                <div class="share">
                    <span><?= (pll_current_language() == 'en-us') ? "Share:" : "Chia sẻ:" ?></span>
                    <a href="" class="instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <circle cx="16.7708" cy="16.0013" r="13.3333" fill="#C13584"/>
                            <path d="M16.7735 9.44143C18.9095 9.44143 19.1626 9.44959 20.0061 9.48808C20.7861 9.52365 21.2097 9.65398 21.4916 9.76353C21.865 9.90866 22.1315 10.082 22.4115 10.3619C22.6914 10.6419 22.8648 10.9084 23.0099 11.2818C23.1195 11.5637 23.2498 11.9873 23.2853 12.7673C23.3238 13.6109 23.332 13.8639 23.332 16C23.332 18.1361 23.3238 18.3891 23.2853 19.2326C23.2498 20.0126 23.1195 20.4362 23.0099 20.7181C22.8648 21.0915 22.6914 21.358 22.4115 21.638C22.1315 21.9179 21.865 22.0913 21.4916 22.2364C21.2097 22.346 20.7861 22.4763 20.0061 22.5119C19.1627 22.5503 18.9097 22.5585 16.7735 22.5585C14.6372 22.5585 14.3842 22.5503 13.5408 22.5119C12.7608 22.4763 12.3372 22.346 12.0553 22.2364C11.6818 22.0913 11.4153 21.9179 11.1354 21.638C10.8555 21.358 10.6821 21.0915 10.537 20.7181C10.4274 20.4362 10.2971 20.0126 10.2615 19.2326C10.223 18.3891 10.2149 18.1361 10.2149 16C10.2149 13.8639 10.223 13.6109 10.2615 12.7673C10.2971 11.9873 10.4274 11.5637 10.537 11.2818C10.6821 10.9084 10.8555 10.6419 11.1354 10.362C11.4153 10.082 11.6818 9.90866 12.0553 9.76353C12.3372 9.65398 12.7608 9.52365 13.5408 9.48808C14.3843 9.44959 14.6374 9.44143 16.7735 9.44143ZM16.7735 8C14.6008 8 14.3283 8.00921 13.475 8.04814C12.6235 8.08698 12.042 8.22223 11.5331 8.41997C11.0071 8.62442 10.5609 8.89796 10.1161 9.3427C9.6714 9.78748 9.39786 10.2336 9.19344 10.7597C8.99567 11.2685 8.86042 11.8501 8.82158 12.7016C8.78265 13.5549 8.77344 13.8273 8.77344 16C8.77344 18.1726 8.78265 18.4451 8.82158 19.2984C8.86042 20.1499 8.99567 20.7314 9.19344 21.2403C9.39786 21.7663 9.6714 22.2125 10.1161 22.6572C10.5609 23.102 11.0071 23.3755 11.5331 23.5799C12.042 23.7777 12.6235 23.913 13.475 23.9518C14.3283 23.9907 14.6008 23.9999 16.7735 23.9999C18.9461 23.9999 19.2185 23.9907 20.0718 23.9518C20.9233 23.913 21.5049 23.7777 22.0137 23.5799C22.5398 23.3755 22.986 23.102 23.4307 22.6572C23.8755 22.2125 24.149 21.7663 24.3535 21.2403C24.5512 20.7314 24.6865 20.1499 24.7253 19.2984C24.7642 18.4451 24.7734 18.1726 24.7734 16C24.7734 13.8273 24.7642 13.5549 24.7253 12.7016C24.6865 11.8501 24.5512 11.2685 24.3535 10.7597C24.149 10.2336 23.8755 9.78748 23.4307 9.3427C22.986 8.89796 22.5398 8.62442 22.0137 8.41997C21.5049 8.22223 20.9233 8.08698 20.0718 8.04814C19.2185 8.00921 18.9461 8 16.7735 8Z" fill="white"/>
                            <path d="M16.78 11.8945C14.5111 11.8945 12.6719 13.7338 12.6719 16.0026C12.6719 18.2715 14.5111 20.1107 16.78 20.1107C19.0488 20.1107 20.8881 18.2715 20.8881 16.0026C20.8881 13.7338 19.0488 11.8945 16.78 11.8945ZM16.78 18.6693C15.3072 18.6693 14.1133 17.4754 14.1133 16.0026C14.1133 14.5299 15.3072 13.336 16.78 13.336C18.2527 13.336 19.4466 14.5299 19.4466 16.0026C19.4466 17.4754 18.2527 18.6693 16.78 18.6693Z" fill="white"/>
                            <path d="M22.0059 11.7295C22.0059 12.2597 21.5761 12.6895 21.0459 12.6895C20.5158 12.6895 20.0859 12.2597 20.0859 11.7295C20.0859 11.1993 20.5158 10.7695 21.0459 10.7695C21.5761 10.7695 22.0059 11.1993 22.0059 11.7295Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="" class="facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <circle cx="16.7708" cy="16.0013" r="13.3333" fill="#3B5998"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3142 11.3065C19.8986 11.2234 19.3374 11.1613 18.9844 11.1613C18.0286 11.1613 17.9666 11.5769 17.9666 12.2417V13.4253H20.3557L20.1475 15.8771H17.9666V23.3346H14.975V15.8771H13.4375V13.4253H14.975V11.9088C14.975 9.83152 15.9514 8.66797 18.4026 8.66797C19.2543 8.66797 19.8776 8.79264 20.6877 8.95886L20.3142 11.3065Z" fill="white"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="right">
                <div class="top">
                    <h2 class="title"><?= (pll_current_language() == 'en-us') ? "Latest news" : "Tin tức mới nhất" ?></h2>
                    <div class="list">
                        <?php if ($latest_news_query->have_posts()) : ?>
                            <?php while ($latest_news_query->have_posts()) : $latest_news_query->the_post(); ?>
                                <?php
                                    $latest_news_id = get_the_ID();
                                    $latest_news = get_field('news', $latest_news_id);
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 1.76855C4.63388 1.76855 4.84375 1.97842 4.84375 2.2373V2.8623H10.1562V2.2373C10.1562 1.97842 10.3661 1.76855 10.625 1.76855C10.8839 1.76855 11.0937 1.97842 11.0937 2.2373V2.8623H11.875C12.9106 2.8623 13.75 3.70177 13.75 4.7373V12.2373C13.75 13.2729 12.9106 14.1123 11.875 14.1123H3.125C2.08947 14.1123 1.25 13.2729 1.25 12.2373V4.7373C1.25 3.70177 2.08947 2.8623 3.125 2.8623H3.90625V2.2373C3.90625 1.97842 4.11612 1.76855 4.375 1.76855ZM10.1562 3.7998V4.7373C10.1562 4.99619 10.3661 5.20605 10.625 5.20605C10.8839 5.20605 11.0937 4.99619 11.0937 4.7373V3.7998H11.875C12.3927 3.7998 12.8125 4.21954 12.8125 4.7373V6.76855H2.1875V4.7373C2.1875 4.21954 2.60723 3.7998 3.125 3.7998H3.90625V4.7373C3.90625 4.99619 4.11612 5.20605 4.375 5.20605C4.63388 5.20605 4.84375 4.99619 4.84375 4.7373V3.7998H10.1562ZM2.1875 7.70605V12.2373C2.1875 12.7551 2.60723 13.1748 3.125 13.1748H11.875C12.3927 13.1748 12.8125 12.7551 12.8125 12.2373V7.70605H2.1875Z" fill="#414141"/>
                                                    </svg>
                                                </div>
                                                <span><?= custom_date_format(get_the_date()) ?></span>
                                            </div>
                                            <div class="dot">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                                                    <circle cx="2.5" cy="2.8623" r="2.5" fill="#414141"/>
                                                </svg>
                                            </div>
                                            <div class="time">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.1748C10.934 13.1748 13.3125 10.7963 13.3125 7.8623C13.3125 4.92829 10.934 2.5498 8 2.5498C5.06599 2.5498 2.6875 4.92829 2.6875 7.8623C2.6875 10.7963 5.06599 13.1748 8 13.1748ZM8 14.1123C11.4517 14.1123 14.25 11.3141 14.25 7.8623C14.25 4.41052 11.4517 1.6123 8 1.6123C4.54822 1.6123 1.75 4.41052 1.75 7.8623C1.75 11.3141 4.54822 14.1123 8 14.1123Z" fill="#414141"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.26855C8.25888 4.26855 8.46875 4.47842 8.46875 4.7373V7.60343C8.46875 7.64487 8.48519 7.68462 8.5145 7.71393L9.89394 9.09337C10.077 9.27643 10.077 9.57318 9.89394 9.75624C9.71088 9.9393 9.41413 9.9393 9.23106 9.75624L7.85162 8.3768C7.6465 8.17168 7.53125 7.89349 7.53125 7.60343V4.7373C7.53125 4.47842 7.74113 4.26855 8 4.26855Z" fill="#414141"/>
                                                    </svg>
                                                </div>
                                                <span><?= custom_time_format(get_the_time()) ?></span>
                                            </div>
                                        </div>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?= (pll_current_language() == 'en-us') ? "There are no news." : "Không có tin tức nào." ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="bottom">
                    <h2 class="title"><?= (pll_current_language() == 'en-us') ? "Latest event" : "Sự kiện mới nhất" ?></h2>
                    <div class="list">
                        <?php if ($latest_events_query->have_posts()) : ?>
                            <?php while ($latest_events_query->have_posts()) : $latest_events_query->the_post(); ?>
                                <?php
                                    $latest_event_id = get_the_ID();
                                    $latest_event = get_field('event', $latest_event_id);
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
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 1.76855C4.63388 1.76855 4.84375 1.97842 4.84375 2.2373V2.8623H10.1562V2.2373C10.1562 1.97842 10.3661 1.76855 10.625 1.76855C10.8839 1.76855 11.0937 1.97842 11.0937 2.2373V2.8623H11.875C12.9106 2.8623 13.75 3.70177 13.75 4.7373V12.2373C13.75 13.2729 12.9106 14.1123 11.875 14.1123H3.125C2.08947 14.1123 1.25 13.2729 1.25 12.2373V4.7373C1.25 3.70177 2.08947 2.8623 3.125 2.8623H3.90625V2.2373C3.90625 1.97842 4.11612 1.76855 4.375 1.76855ZM10.1562 3.7998V4.7373C10.1562 4.99619 10.3661 5.20605 10.625 5.20605C10.8839 5.20605 11.0937 4.99619 11.0937 4.7373V3.7998H11.875C12.3927 3.7998 12.8125 4.21954 12.8125 4.7373V6.76855H2.1875V4.7373C2.1875 4.21954 2.60723 3.7998 3.125 3.7998H3.90625V4.7373C3.90625 4.99619 4.11612 5.20605 4.375 5.20605C4.63388 5.20605 4.84375 4.99619 4.84375 4.7373V3.7998H10.1562ZM2.1875 7.70605V12.2373C2.1875 12.7551 2.60723 13.1748 3.125 13.1748H11.875C12.3927 13.1748 12.8125 12.7551 12.8125 12.2373V7.70605H2.1875Z" fill="#414141"/>
                                                    </svg>
                                                </div>
                                                <span><?= custom_date_format(get_the_date()) ?></span>
                                            </div>
                                            <div class="dot">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                                                    <circle cx="2.5" cy="2.8623" r="2.5" fill="#414141"/>
                                                </svg>
                                            </div>
                                            <div class="time">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.1748C10.934 13.1748 13.3125 10.7963 13.3125 7.8623C13.3125 4.92829 10.934 2.5498 8 2.5498C5.06599 2.5498 2.6875 4.92829 2.6875 7.8623C2.6875 10.7963 5.06599 13.1748 8 13.1748ZM8 14.1123C11.4517 14.1123 14.25 11.3141 14.25 7.8623C14.25 4.41052 11.4517 1.6123 8 1.6123C4.54822 1.6123 1.75 4.41052 1.75 7.8623C1.75 11.3141 4.54822 14.1123 8 14.1123Z" fill="#414141"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.26855C8.25888 4.26855 8.46875 4.47842 8.46875 4.7373V7.60343C8.46875 7.64487 8.48519 7.68462 8.5145 7.71393L9.89394 9.09337C10.077 9.27643 10.077 9.57318 9.89394 9.75624C9.71088 9.9393 9.41413 9.9393 9.23106 9.75624L7.85162 8.3768C7.6465 8.17168 7.53125 7.89349 7.53125 7.60343V4.7373C7.53125 4.47842 7.74113 4.26855 8 4.26855Z" fill="#414141"/>
                                                    </svg>
                                                </div>
                                                <span><?= custom_time_format(get_the_time()) ?></span>
                                            </div>
                                        </div>
                                        <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    </div>
                                </div>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?= (pll_current_language() == 'en-us') ? "There are no event." : "Không có sự kiện nào." ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="relate fade-in">
            <h2 class="title"><?= (pll_current_language() == 'en-us') ? "Relevant news" : "Tin tức liên quan" ?></h2>
            <div class="list">
            <?php if ($related_news_query->have_posts()) : ?>
                <?php while ($related_news_query->have_posts()) : $related_news_query->the_post(); ?>
                    <?php
                        $relate_news_id = get_the_ID();
                        $relate_news = get_field('news', $relate_news_id);
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
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 1.76855C4.63388 1.76855 4.84375 1.97842 4.84375 2.2373V2.8623H10.1562V2.2373C10.1562 1.97842 10.3661 1.76855 10.625 1.76855C10.8839 1.76855 11.0937 1.97842 11.0937 2.2373V2.8623H11.875C12.9106 2.8623 13.75 3.70177 13.75 4.7373V12.2373C13.75 13.2729 12.9106 14.1123 11.875 14.1123H3.125C2.08947 14.1123 1.25 13.2729 1.25 12.2373V4.7373C1.25 3.70177 2.08947 2.8623 3.125 2.8623H3.90625V2.2373C3.90625 1.97842 4.11612 1.76855 4.375 1.76855ZM10.1562 3.7998V4.7373C10.1562 4.99619 10.3661 5.20605 10.625 5.20605C10.8839 5.20605 11.0937 4.99619 11.0937 4.7373V3.7998H11.875C12.3927 3.7998 12.8125 4.21954 12.8125 4.7373V6.76855H2.1875V4.7373C2.1875 4.21954 2.60723 3.7998 3.125 3.7998H3.90625V4.7373C3.90625 4.99619 4.11612 5.20605 4.375 5.20605C4.63388 5.20605 4.84375 4.99619 4.84375 4.7373V3.7998H10.1562ZM2.1875 7.70605V12.2373C2.1875 12.7551 2.60723 13.1748 3.125 13.1748H11.875C12.3927 13.1748 12.8125 12.7551 12.8125 12.2373V7.70605H2.1875Z" fill="#414141"/>
                                        </svg>
                                    </div>
                                    <span><?= custom_date_format(get_the_date()) ?></span>
                                </div>
                                <div class="dot">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="5" height="6" viewBox="0 0 5 6" fill="none">
                                        <circle cx="2.5" cy="2.8623" r="2.5" fill="#414141"/>
                                    </svg>
                                </div>
                                <div class="time">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 13.1748C10.934 13.1748 13.3125 10.7963 13.3125 7.8623C13.3125 4.92829 10.934 2.5498 8 2.5498C5.06599 2.5498 2.6875 4.92829 2.6875 7.8623C2.6875 10.7963 5.06599 13.1748 8 13.1748ZM8 14.1123C11.4517 14.1123 14.25 11.3141 14.25 7.8623C14.25 4.41052 11.4517 1.6123 8 1.6123C4.54822 1.6123 1.75 4.41052 1.75 7.8623C1.75 11.3141 4.54822 14.1123 8 14.1123Z" fill="#414141"/>
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M8 4.26855C8.25888 4.26855 8.46875 4.47842 8.46875 4.7373V7.60343C8.46875 7.64487 8.48519 7.68462 8.5145 7.71393L9.89394 9.09337C10.077 9.27643 10.077 9.57318 9.89394 9.75624C9.71088 9.9393 9.41413 9.9393 9.23106 9.75624L7.85162 8.3768C7.6465 8.17168 7.53125 7.89349 7.53125 7.60343V4.7373C7.53125 4.47842 7.74113 4.26855 8 4.26855Z" fill="#414141"/>
                                        </svg>
                                    </div>
                                    <span><?= custom_time_format(get_the_time()) ?></span>
                                </div>
                            </div>
                            <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                        </div>
                    </div>   
                <?php endwhile; ?>
                <?php wp_reset_postdata(); ?>
            <?php else : ?>
                <p><?= (pll_current_language() == 'en-us') ? "There is no related news." : "Không có tin tức liên quan nào." ?></p>
            <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>