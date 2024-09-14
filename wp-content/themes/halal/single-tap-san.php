<?php 
$query = new WP_Query(
    array(
        'post_type' => 'tap-san',
        'post_status' => 'publish'
    )
);

$project_id = get_the_ID();
$project = get_field('tap_san', $project_id);

$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');
$address = $project['address'];

// Tập san mới nhất
$latest_projects_query = new WP_Query(array(
    'post_type' => 'tap-san',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'post__not_in' => array($project_id)
));

// Tập san liên quan
// Lấy ra danh mục
$categories = wp_get_post_terms($project_id, 'danh_muc_tap_san', array('fields' => 'ids'));

// Query cùng danh mục
$related_projects_query = new WP_Query(array(
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
    'post__not_in' => array($project_id)
));

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
                <a href="">
                    Tập san Halal
                </a>
                <span>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.47994 12.6869C5.28468 12.4917 5.28468 12.1751 5.47994 11.9799L9.34189 8.11795C9.40696 8.05281 9.40696 7.94735 9.34189 7.88221L5.47994 4.0203C5.28468 3.82504 5.28468 3.50845 5.47994 3.31319C5.6752 3.11793 5.99179 3.11793 6.18705 3.31319L10.049 7.17515C10.5046 7.63075 10.5046 8.36941 10.049 8.82501L6.18705 12.6869C5.99179 12.8822 5.6752 12.8822 5.47994 12.6869Z" fill="#414141"/>
                    </svg>
                </span>
                <a href="">
                    Chính sách
                </a>
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
                <div class="social-media">
                    <a href=""><img src="<?= $url ?>/dist/images/facebook.png" alt=""></a>
                    <a href=""><img src="<?= $url ?>/dist/images/twitter.png" alt=""></a>
                    <a href=""><img src="<?= $url ?>/dist/images/telegram.png" alt=""></a>
                </div>
            </div>
            <div class="right">
                <h2 class="title">Tập san mới nhất</h2>
                <div class="list">
                    <?php if ($latest_projects_query->have_posts()) : ?>
                        <?php while ($latest_projects_query->have_posts()) : $latest_projects_query->the_post(); ?>
                            <?php
                                $latest_project_id = get_the_ID();
                                $latest_project = get_field('tap_san', $latest_project_id);
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
                        <p>Không có tập san nào.</p>
                    <?php endif; ?>
                </div>
            </div>
        </div>
        <div class="relate fade-in">
            <h2 class="title">Tập san liên quan</h2>
            <div class="list">
            <?php if ($related_projects_query->have_posts()) : ?>
                <?php while ($related_projects_query->have_posts()) : $related_projects_query->the_post(); ?>
                    <?php
                        $related_project_id = get_the_ID();
                        $related_project = get_field('tap_san', $related_project_id);
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
                    <p>Không có tập san liên quan.</p>
                <?php endif; ?>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>