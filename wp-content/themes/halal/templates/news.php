<?php 
/* Template Name: Tin tức */

// Số tin tức trên mỗi trang
$news_per_page = 6;

// Lấy số trang hiện tại
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}

$list_news_query = new WP_Query(array(
    'post_type' => 'tin-tuc',
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => $news_per_page,
    'paged' => $paged
));


$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner.php') ?>
    <div class="section-news-and-event fade-in">
        <div class="container">
            <div class="list-menu">
                <h2 class="title"><?= (pll_current_language() == 'en-us') ? "There are no news." : "Tin tức" ?></h2>
                <div class="list">
                    <?php if ($list_news_query->have_posts()) : ?>
                        <?php while ($list_news_query->have_posts()) : $list_news_query->the_post(); ?>
                            <?php
                                $news_id = get_the_ID();
                                $news = get_field('news', $news_id);
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
                <nav class="pagination search-pagination">
                    <?php
                        $big = 999999999;
                        echo paginate_links(array(
                            'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                            'format' => '?paged=%#%',
                            'current' => max(1, $paged),
                            'total' => $list_news_query->max_num_pages,
                            'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M14 7.33301L9 12.333L14 17.333" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                            'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M10 7.33301L15 12.333L10 17.333" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                        ));
                    ?>
                </nav>
            </div>
        </div>
    </div>
</main>
<?php get_footer(); ?>