<?php 
$query = new WP_Query(
    array(
        'post_type' => 'tap-san',
        'post_status' => 'publish'
    )
);

$post_id = get_the_ID();
$item = get_field('tap_san', $post_id);

$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
$address = $item['address'];

// Tập san mới nhất
$latest_posts_query = new WP_Query(array(
    'post_type' => 'tap-san',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'post__not_in' => array($post_id)
));

// Tập san liên quan
// Lấy ra danh mục
$categories = wp_get_post_terms($post_id, 'danh_muc_tap_san', array('fields' => 'ids'));

// Query cùng danh mục
$related_posts_query = new WP_Query(array(
    'post_type' => 'tap-san',
    'post_status' => 'publish',
    'posts_per_page' => 4,
    'tax_query' => array(
        array(
            'taxonomy' => 'danh_muc_tap_san',
            'field' => 'id',
            'terms' => $categories,
        )
    ),
    'post__not_in' => array($post_id)
));
// Lấy danh mục đầu tiên của bài viết
$post_categories = get_the_terms($post_id, 'danh_muc_tap_san');
$has_category = !empty($post_categories) && !is_wp_error($post_categories);
$category_name = '';
$category_link = '';

if ($has_category) {
    $first_category = reset($post_categories);
    $category_name = $first_category->name;
    $category_link = get_term_link($first_category);
}

$url = get_template_directory_uri();
get_header(); ?>
<main>
    <div class="section-detail-halal fade-in">
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
                    <a href="<?= home_url() ?>/halal-journal">
                        Halal Journal
                    </a>
                <?php else: ?>
                    <a href="<?= home_url() ?>/tap-san-halal">
                        Tập san Halal
                    </a>
                <?php endif ?>
                <?php if ($has_category): ?>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.47994 12.6869C5.28468 12.4917 5.28468 12.1751 5.47994 11.9799L9.34189 8.11795C9.40696 8.05281 9.40696 7.94735 9.34189 7.88221L5.47994 4.0203C5.28468 3.82504 5.28468 3.50845 5.47994 3.31319C5.6752 3.11793 5.99179 3.11793 6.18705 3.31319L10.049 7.17515C10.5046 7.63075 10.5046 8.36941 10.049 8.82501L6.18705 12.6869C5.99179 12.8822 5.6752 12.8822 5.47994 12.6869Z" fill="#414141"/>
                        </svg>
                    </span>
                    <a href="<?= esc_url($category_link); ?>">
                        <?= esc_html($category_name); ?>
                    </a>
                <?php endif; ?>
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
                    <?php
                    $current_url = esc_url(get_permalink());
                    $title = get_the_title();
                    $facebook_share_url = 'https://www.facebook.com/sharer.php?u=' . urlencode($current_url);
                    $twitter_share_url = 'https://twitter.com/intent/tweet?url=' . urlencode($current_url) . '&text=' . urlencode($title);
                    $telegram_share_url = 'https://t.me/share/url?url=' . urlencode($current_url) . '&text=' . urlencode($title);
                    ?>
                    <a href="<?php echo $facebook_share_url; ?>" target="_blank" rel="noopener noreferrer" class="facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <circle cx="16.7708" cy="16.0013" r="13.3333" fill="#3B5998"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3142 11.3065C19.8986 11.2234 19.3374 11.1613 18.9844 11.1613C18.0286 11.1613 17.9666 11.5769 17.9666 12.2417V13.4253H20.3557L20.1475 15.8771H17.9666V23.3346H14.975V15.8771H13.4375V13.4253H14.975V11.9088C14.975 9.83152 15.9514 8.66797 18.4026 8.66797C19.2543 8.66797 19.8776 8.79264 20.6877 8.95886L20.3142 11.3065Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="<?php echo $twitter_share_url; ?>" target="_blank" rel="noopener noreferrer" class="twitter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <circle cx="16.7708" cy="16" r="13.3333" fill="#1DA1F2"/>
                            <path d="M24.2708 11.0005C23.7308 11.2505 23.1508 11.4205 22.5408 11.5005C23.1608 11.1305 23.6408 10.5405 23.8708 9.85047C23.2908 10.1905 22.6508 10.4305 21.9708 10.5605C21.4308 9.97047 20.6608 9.60047 19.8108 9.60047C18.1908 9.60047 16.8808 10.9105 16.8808 12.5305C16.8808 12.7705 16.9108 13.0005 16.9608 13.2205C14.5408 13.0905 12.3808 11.9305 10.9108 10.1605C10.6508 10.6005 10.5008 11.1305 10.5008 11.6905C10.5008 12.7505 11.0308 13.6905 11.8408 14.2505C11.3508 14.2305 10.8908 14.1105 10.4808 13.9105V13.9505C10.4808 15.3705 11.4808 16.5705 12.8108 16.8505C12.5508 16.9205 12.2808 16.9605 12.0008 16.9605C11.8008 16.9605 11.6108 16.9405 11.4208 16.9005C11.8108 18.0805 12.9108 18.9305 14.2108 18.9605C13.1908 19.7405 11.9108 20.2105 10.5308 20.2105C10.2808 20.2105 10.0408 20.1905 9.80078 20.1605C11.1208 20.9905 12.6908 21.4805 14.3708 21.4805C19.8008 21.4805 22.7708 16.9905 22.7708 13.0805C22.7708 12.9405 22.7708 12.8005 22.7608 12.6605C23.3508 12.2405 23.8708 11.7105 24.2708 11.0005Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="<?php echo $telegram_share_url; ?>" target="_blank" rel="noopener noreferrer" class="telegram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <circle cx="16.7708" cy="16" r="13.3333" fill="#0088cc"/>
                            <path d="M22.7708 10.4134L20.2906 22.3509C20.2906 22.3509 19.9973 23.0946 19.1666 22.7321L14.4791 19.1946L12.2291 18.1134L8.20831 16.8634C8.20831 16.8634 7.72915 16.6946 7.68748 16.3321C7.64581 15.9696 8.22915 15.7717 8.22915 15.7717L21.8333 10.2446C21.8333 10.2446 22.7708 9.84464 22.7708 10.4134Z" fill="white"/>
                            <path d="M14.2292 22.4134C14.2292 22.4134 14.1042 22.4009 13.9583 21.7509C13.8125 21.1009 12.2292 18.1134 12.2292 18.1134L20.0625 13.1134C20.0625 13.1134 20.4583 12.8821 20.4375 13.1134C20.4375 13.1134 20.5208 13.1634 20.3125 13.3634C20.1042 13.5634 14.5 18.6509 14.5 18.6509" fill="#d2e5f1"/>
                            <path d="M16.5208 20.3509L14.3958 22.3717C14.3958 22.3717 14.2562 22.4769 14.1042 22.4134L14.4166 18.7717" fill="#b5cfe4"/>
                        </svg>
                    </a>
                </div>
            </div>
            <div class="right">
                <h2 class="title"><?= (pll_current_language() == 'en-us') ? "Latest journal" : "Tập san mới nhất" ?></h2>
                <div class="list">
                    <?php if ($latest_posts_query->have_posts()) : ?>
                        <?php while ($latest_posts_query->have_posts()) : $latest_posts_query->the_post(); ?>
                            <?php
                                $latest_post_id = get_the_ID();
                                $latest_post = get_field('tap_san', $latest_post_id);
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
                        <p><?= (pll_current_language() == 'en-us') ? "There are no journals." : "Không có tập san nào." ?></p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="relate fade-in">
            <h2 class="title"><?= (pll_current_language() == 'en-us') ? "Relevant journal" : "Tập san liên quan" ?></h2>
            <div class="list">
            <?php if ($related_posts_query->have_posts()) : ?>
                <?php while ($related_posts_query->have_posts()) : $related_posts_query->the_post(); ?>
                    <?php
                        $related_post_id = get_the_ID();
                        $related_post = get_field('tap_san', $related_post_id);
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
                    <p><?= (pll_current_language() == 'en-us') ? "There are no relevant journals." : "Không có tập san liên quan nào." ?></p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>