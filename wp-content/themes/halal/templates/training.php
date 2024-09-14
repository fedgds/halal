<?php 
/* Template Name: Đào tạo */

// Số khách hàng trên mỗi trang
$trains_per_page = 5;

// Lấy số trang hiện tại
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;

if ( get_query_var('paged') ) {
    $paged = get_query_var('paged');
} elseif ( get_query_var('page') ) {
    $paged = get_query_var('page');
} else {
    $paged = 1;
}
$list_training_query = new WP_Query(array(
    'post_type' => 'dao-tao',
    'post_status' => 'publish',
    'orderby' => 'date',
    'posts_per_page' => $trains_per_page,
    'paged' => $paged
));
get_header(); ?>
<main>
    <?php include('section/section-banner.php') ?>
    <div class="section-training fade-in">
        <div class="container">  
            <form action="">
                <div class="search">
                    <input type="text" placeholder="Tìm kiếm">
                    <button>
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M9.58317 2.625C5.55609 2.625 2.2915 5.88959 2.2915 9.91667C2.2915 13.9437 5.55609 17.2083 9.58317 17.2083C13.6102 17.2083 16.8748 13.9437 16.8748 9.91667C16.8748 5.88959 13.6102 2.625 9.58317 2.625ZM1.0415 9.91667C1.0415 5.19923 4.86574 1.375 9.58317 1.375C14.3006 1.375 18.1248 5.19923 18.1248 9.91667C18.1248 12.0504 17.3424 14.0015 16.0489 15.4985L18.7751 18.2247C19.0192 18.4688 19.0192 18.8645 18.7751 19.1086C18.531 19.3527 18.1353 19.3527 17.8912 19.1086L15.165 16.3824C13.668 17.6759 11.7169 18.4583 9.58317 18.4583C4.86574 18.4583 1.0415 14.6341 1.0415 9.91667Z" fill="#1C274C"/>
                        </svg>
                    </button>
                </div>
                <div class="filter">
                    <label for="filter">
                        <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83317 1.79102C6.17835 1.79102 6.45817 2.07084 6.45817 2.41602V3.05162C7.00986 3.041 7.61767 3.04101 8.28616 3.04102H11.7135C12.382 3.04101 12.9898 3.041 13.5415 3.05162V2.41602C13.5415 2.07084 13.8213 1.79102 14.1665 1.79102C14.5117 1.79102 14.7915 2.07084 14.7915 2.41602V3.10526C15.0081 3.12177 15.2133 3.14253 15.4074 3.16863C16.3844 3.29998 17.1752 3.57675 17.7988 4.20038C18.4224 4.82402 18.6992 5.61481 18.8306 6.59183C18.8725 6.90407 18.9007 7.24484 18.9196 7.61608C18.9446 7.68357 18.9582 7.75653 18.9582 7.83268C18.9582 7.89045 18.9503 7.94638 18.9357 7.99949C18.9582 8.6678 18.9582 9.42664 18.9582 10.2857V11.9993C18.9582 12.3445 18.6783 12.6243 18.3332 12.6243C17.988 12.6243 17.7082 12.3445 17.7082 11.9993V10.3327C17.7082 9.621 17.7079 9.00162 17.6973 8.45768H2.30241C2.29177 9.00162 2.2915 9.621 2.2915 10.3327V11.9993C2.2915 13.5884 2.29283 14.7173 2.40797 15.5736C2.52069 16.412 2.73208 16.8951 3.08476 17.2478C3.43743 17.6004 3.92047 17.8118 4.75888 17.9245C5.61526 18.0397 6.74415 18.041 8.33317 18.041H11.6665C12.0117 18.041 12.2915 18.3208 12.2915 18.666C12.2915 19.0112 12.0117 19.291 11.6665 19.291H8.28616C6.75469 19.291 5.54166 19.291 4.59232 19.1634C3.6153 19.032 2.82451 18.7553 2.20087 18.1316C1.57724 17.508 1.30047 16.7172 1.16912 15.7402C1.04148 14.7909 1.04149 13.5778 1.0415 12.0464V10.2857C1.0415 9.42664 1.04149 8.6678 1.06401 7.99949C1.04934 7.94639 1.0415 7.89045 1.0415 7.83268C1.0415 7.75653 1.05512 7.68356 1.08006 7.61607C1.09897 7.24483 1.12714 6.90407 1.16912 6.59183C1.30047 5.61481 1.57724 4.82402 2.20087 4.20038C2.82451 3.57675 3.6153 3.29998 4.59232 3.16863C4.78642 3.14253 4.99155 3.12177 5.20817 3.10526V2.41602C5.20817 2.07084 5.48799 1.79102 5.83317 1.79102ZM2.35957 7.20768H17.6401C17.6268 7.04986 17.6108 6.90038 17.5917 6.75839C17.479 5.91998 17.2676 5.43694 16.9149 5.08427C16.5622 4.73159 16.0792 4.5202 15.2408 4.40748C14.3844 4.29234 13.2555 4.29102 11.6665 4.29102H8.33317C6.74415 4.29102 5.61527 4.29234 4.75888 4.40748C3.92047 4.5202 3.43743 4.73159 3.08476 5.08427C2.73208 5.43694 2.52069 5.91998 2.40797 6.75839C2.38888 6.90038 2.37292 7.04986 2.35957 7.20768ZM14.9998 13.4577C13.9643 13.4577 13.1248 14.2971 13.1248 15.3327C13.1248 16.3682 13.9643 17.2077 14.9998 17.2077C16.0354 17.2077 16.8748 16.3682 16.8748 15.3327C16.8748 14.2971 16.0354 13.4577 14.9998 13.4577ZM11.8748 15.3327C11.8748 13.6068 13.2739 12.2077 14.9998 12.2077C16.7257 12.2077 18.1248 13.6068 18.1248 15.3327C18.1248 15.9696 17.9343 16.562 17.6071 17.056L18.7751 18.2241C19.0192 18.4682 19.0192 18.8639 18.7751 19.108C18.531 19.352 18.1353 19.352 17.8912 19.108L16.7232 17.9399C16.2292 18.2671 15.6368 18.4577 14.9998 18.4577C13.2739 18.4577 11.8748 17.0586 11.8748 15.3327Z" fill="#212121"/>
                        </svg>
                    </label>
                    <select name="" id="filter">
                        <option value="">Lọc theo ngày</option>
                        <option value="">Lọc theo tháng</option>
                    </select>
                </div>
            </form>
            <div class="table-wrapper">
                <table>
                    <thead>
                        <tr>
                            <th>STT</th>
                            <th>Tên khóa đào tạo</th>
                            <th>Thời gian bắt đầu</th>
                            <th>Thời gian kết thúc</th>
                            <th>Địa điểm</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php if ($list_training_query->have_posts()) : $count = 0;?>
                            <?php while ($list_training_query->have_posts()) : $list_training_query->the_post(); ?>
                                <?php
                                    $count++;
                                    $train_id = get_the_ID();
                                    $train = get_field('training', $train_id);
                                    $start_time = $train['start_time'];
                                    $end_time = $train['end_time'];
                                    $address = $train['address'];
                                ?>
                                <tr>
                                    <td><?= $count ?></td>
                                    <td><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></td>
                                    <td>
                                        <p><?= $start_time['date'] ?></p>
                                        <?php if($start_time['date']): ?>
                                            <span><?= date('h:i:s A', strtotime($start_time['time'])) ?></span>
                                        <?php endif ?>
                                    </td>
                                    <td>
                                        <p><?= $end_time['date'] ?></p>
                                        <?php if($end_time['date']): ?>
                                            <span><?= date('h:i:s A', strtotime($end_time['time'])) ?></span>
                                        <?php endif ?>
                                    </td>
                                    <?php if($address): ?>
                                        <td><?= $address ?></td>
                                    <?php endif ?>
                                </tr>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p>Không có khóa đào tạo nào.</p>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
            <nav class="pagination">
                <?php
                    $big = 999999999;
                    echo paginate_links(array(
                        'base' => str_replace($big, '%#%', esc_url(get_pagenum_link($big))),
                        'format' => '?paged=%#%',
                        'current' => max(1, $paged),
                        'total' => $list_training_query->max_num_pages,
                        'prev_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M14 7.33301L9 12.333L14 17.333" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                        'next_text' => '<svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none"><path d="M10 7.33301L15 12.333L10 17.333" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/></svg>',
                    ));
                ?>
            </nav>
        </div>     
    </div>
</main>
<?php get_footer(); ?>