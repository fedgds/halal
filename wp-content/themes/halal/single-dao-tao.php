<?php 
$query = new WP_Query(
    array(
        'post_type' => 'dao-tao',
        'post_status' => 'publish'
    )
);

$thumbnail = get_the_post_thumbnail_url(get_the_ID(), 'full');

$train_id = get_the_ID();
$train = get_field('training', $train_id);
$start_time = $train['start_time'];
$end_time = $train['end_time'];
$address = $train['address'];
$explain = $train['explain'];
$organize = $train['organize'];

// Đào tạo mới nhất
$latest_train_query = new WP_Query(array(
    'post_type' => 'dao-tao',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'orderby' => 'date',
    'post__not_in' => array($train_id)
));

// Tin tức mới nhất
$latest_news_query = new WP_Query(array(
    'post_type' => 'tin-tuc',
    'post_status' => 'publish',
    'posts_per_page' => 3,
    'orderby' => 'date'
));

// Đào tạo liên quan
// Lấy ra danh mục
$categories = wp_get_post_terms($train_id, 'danh_muc_dao_tao', array('fields' => 'ids'));

// Query cùng danh mục
$related_trains_query = new WP_Query(array(
    'post_type' => 'dao-tao',
    'post_status' => 'publish',
    'posts_per_page' => 5,
    'tax_query' => array(
        array(
            'taxonomy' => 'danh_muc_dao_tao',
            'field' => 'id',
            'terms' => $categories,
        )
    ),
    'post__not_in' => array($train_id)
));

get_header(); ?>
<main>
    <div class="section-detail-training fade-in">
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
                <?php if(pll_current_language() == 'en'): ?>
                    <a href="<?= home_url() ?>/training">
                        Training
                    </a>
                <?php else: ?>
                    <a href="<?= home_url() ?>/dao-tao">
                        Đào tạo
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
                <h2 class="title"><?php the_title(); ?></h2>
                <div class="share">
                    <span><?= (pll_current_language() == 'en') ? "Share:" : "Chia sẻ:" ?></span>
                    <?php 
                    $current_url = urlencode(get_permalink());
                    $title = urlencode(get_the_title());
                    ?>
                    <a href="https://www.instagram.com/share?url=<?php echo $current_url; ?>" target="_blank" class="instagram">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <circle cx="16.7708" cy="16" r="13.3333" fill="#E1306C"/>
                            <path d="M16.7708 9.60047C18.9708 9.60047 19.2308 9.60047 20.0308 9.64047C20.7708 9.68047 21.1708 9.80047 21.4508 9.90047C21.8108 10.0405 22.0708 10.2005 22.3308 10.4605C22.5908 10.7205 22.7508 10.9805 22.8908 11.3405C22.9908 11.6205 23.1108 12.0205 23.1508 12.7605C23.1908 13.5605 23.1908 13.8205 23.1908 16.0205C23.1908 18.2205 23.1908 18.4805 23.1508 19.2805C23.1108 20.0205 22.9908 20.4205 22.8908 20.7005C22.7508 21.0605 22.5908 21.3205 22.3308 21.5805C22.0708 21.8405 21.8108 22.0005 21.4508 22.1405C21.1708 22.2405 20.7708 22.3605 20.0308 22.4005C19.2308 22.4405 18.9708 22.4405 16.7708 22.4405C14.5708 22.4405 14.3108 22.4405 13.5108 22.4005C12.7708 22.3605 12.3708 22.2405 12.0908 22.1405C11.7308 22.0005 11.4708 21.8405 11.2108 21.5805C10.9508 21.3205 10.7908 21.0605 10.6508 20.7005C10.5508 20.4205 10.4308 20.0205 10.3908 19.2805C10.3508 18.4805 10.3508 18.2205 10.3508 16.0205C10.3508 13.8205 10.3508 13.5605 10.3908 12.7605C10.4308 12.0205 10.5508 11.6205 10.6508 11.3405C10.7908 10.9805 10.9508 10.7205 11.2108 10.4605C11.4708 10.2005 11.7308 10.0405 12.0908 9.90047C12.3708 9.80047 12.7708 9.68047 13.5108 9.64047C14.3108 9.60047 14.5708 9.60047 16.7708 9.60047ZM16.7708 8C14.5308 8 14.2508 8 13.4308 8.04C12.6108 8.08 12.0708 8.21 11.5908 8.4C11.0908 8.6 10.6608 8.86 10.2308 9.29C9.80078 9.72 9.54078 10.15 9.34078 10.65C9.15078 11.13 9.02078 11.67 8.98078 12.49C8.94078 13.31 8.94078 13.59 8.94078 15.83C8.94078 18.07 8.94078 18.35 8.98078 19.17C9.02078 19.99 9.15078 20.53 9.34078 21.01C9.54078 21.51 9.80078 21.94 10.2308 22.37C10.6608 22.8 11.0908 23.06 11.5908 23.26C12.0708 23.45 12.6108 23.58 13.4308 23.62C14.2508 23.66 14.5308 23.66 16.7708 23.66C19.0108 23.66 19.2908 23.66 20.1108 23.62C20.9308 23.58 21.4708 23.45 21.9508 23.26C22.4508 23.06 22.8808 22.8 23.3108 22.37C23.7408 21.94 24.0008 21.51 24.2008 21.01C24.3908 20.53 24.5208 19.99 24.5608 19.17C24.6008 18.35 24.6008 18.07 24.6008 15.83C24.6008 13.59 24.6008 13.31 24.5608 12.49C24.5208 11.67 24.3908 11.13 24.2008 10.65C24.0008 10.15 23.7408 9.72 23.3108 9.29C22.8808 8.86 22.4508 8.6 21.9508 8.4C21.4708 8.21 20.9308 8.08 20.1108 8.04C19.2908 8 19.0108 8 16.7708 8Z" fill="white"/>
                            <path d="M16.7708 11.8401C14.4108 11.8401 12.4908 13.7601 12.4908 16.1201C12.4908 18.4801 14.4108 20.4001 16.7708 20.4001C19.1308 20.4001 21.0508 18.4801 21.0508 16.1201C21.0508 13.7601 19.1308 11.8401 16.7708 11.8401ZM16.7708 18.7601C15.3108 18.7601 14.1308 17.5801 14.1308 16.1201C14.1308 14.6601 15.3108 13.4801 16.7708 13.4801C18.2308 13.4801 19.4108 14.6601 19.4108 16.1201C19.4108 17.5801 18.2308 18.7601 16.7708 18.7601Z" fill="white"/>
                            <path d="M21.2508 11.6599C21.2508 12.1999 20.8108 12.6399 20.2708 12.6399C19.7308 12.6399 19.2908 12.1999 19.2908 11.6599C19.2908 11.1199 19.7308 10.6799 20.2708 10.6799C20.8108 10.6799 21.2508 11.1199 21.2508 11.6599Z" fill="white"/>
                        </svg>
                    </a>
                    <a href="https://www.facebook.com/sharer/sharer.php?u=<?php echo $current_url; ?>" target="_blank" class="facebook">
                        <svg xmlns="http://www.w3.org/2000/svg" width="33" height="32" viewBox="0 0 33 32" fill="none">
                            <circle cx="16.7708" cy="16.0013" r="13.3333" fill="#3B5998"/>
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M20.3142 11.3065C19.8986 11.2234 19.3374 11.1613 18.9844 11.1613C18.0286 11.1613 17.9666 11.5769 17.9666 12.2417V13.4253H20.3557L20.1475 15.8771H17.9666V23.3346H14.975V15.8771H13.4375V13.4253H14.975V11.9088C14.975 9.83152 15.9514 8.66797 18.4026 8.66797C19.2543 8.66797 19.8776 8.79264 20.6877 8.95886L20.3142 11.3065Z" fill="white"/>
                        </svg>
                    </a>
                </div>
                <?php if($start_time['date'] || $end_time['date']): ?>
                <div class="time">
                    <h4><?= (pll_current_language() == 'en') ? "Event time:" : "Thời gian sự kiện:" ?></h4>
                    <div class="infor">
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83268 2.375C6.17786 2.375 6.45768 2.65483 6.45768 3V3.83333H13.541V3C13.541 2.65483 13.8208 2.375 14.166 2.375C14.5112 2.375 14.791 2.65483 14.791 3V3.83333H15.8327C17.2134 3.83333 18.3327 4.95263 18.3327 6.33333V16.3333C18.3327 17.7141 17.2134 18.8333 15.8327 18.8333H4.16602C2.78531 18.8333 1.66602 17.7141 1.66602 16.3333V6.33333C1.66602 4.95263 2.78531 3.83333 4.16602 3.83333H5.20768V3C5.20768 2.65483 5.48751 2.375 5.83268 2.375ZM13.541 5.08333V6.33333C13.541 6.67851 13.8208 6.95833 14.166 6.95833C14.5112 6.95833 14.791 6.67851 14.791 6.33333V5.08333H15.8327C16.523 5.08333 17.0827 5.64298 17.0827 6.33333V9.04167H2.91602V6.33333C2.91602 5.64298 3.47566 5.08333 4.16602 5.08333H5.20768V6.33333C5.20768 6.67851 5.48751 6.95833 5.83268 6.95833C6.17786 6.95833 6.45768 6.67851 6.45768 6.33333V5.08333H13.541ZM2.91602 10.2917V16.3333C2.91602 17.0237 3.47566 17.5833 4.16602 17.5833H15.8327C16.523 17.5833 17.0827 17.0237 17.0827 16.3333V10.2917H2.91602Z" fill="black"/>
                            </svg>
                        </div>
                        <span>
                            <?php if(pll_current_language() == 'en'): ?>
                                <?php if($start_time['date']): ?>
                                    <?= formatDateEn($start_time['date']) ?>
                                <?php endif ?>
                                <?php if($start_time['date'] && $end_time['date']): ?>
                                    <span> - </span>
                                <?php endif ?>
                                <?php if($end_time['date']): ?>
                                    <?= formatDateEn($end_time['date']) ?>
                                <?php endif ?>
                            <?php else: ?>
                                <?php if($start_time['date']): ?>
                                    <?= formatDate($start_time['date']) ?>
                                <?php endif ?>
                                <?php if($start_time['date'] && $end_time['date']): ?>
                                    <span> - </span>
                                <?php endif ?>
                                <?php if($end_time['date']): ?>
                                    <?= formatDate($end_time['date']) ?>
                                <?php endif ?>
                            <?php endif ?>
                    </div>
                </div>
                <?php endif ?>
                <?php if($address): ?>
                    <div class="address">
                        <h4><?= (pll_current_language() == 'en') ? "Address:" : "Địa chỉ:" ?></h4>
                        <div class="infor">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M10 9.58301C10.6903 9.58301 11.25 9.02334 11.25 8.33301C11.25 7.64265 10.6903 7.08301 10 7.08301C9.30967 7.08301 8.75 7.64265 8.75 8.33301C8.75 9.02334 9.30967 9.58301 10 9.58301ZM12.5 8.33301C12.5 9.71376 11.3807 10.833 10 10.833C8.61925 10.833 7.5 9.71376 7.5 8.33301C7.5 6.9523 8.61925 5.83301 10 5.83301C11.3807 5.83301 12.5 6.9523 12.5 8.33301Z" fill="black"/>
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M14.1766 11.8705C14.1998 11.8345 14.2249 11.7995 14.2521 11.7656C14.9997 10.8331 15.446 9.65166 15.446 8.36266C15.446 5.35509 13.0079 2.91699 10.0003 2.91699C6.99279 2.91699 4.55469 5.35509 4.55469 8.36266C4.55469 9.65158 5.00093 10.8329 5.74836 11.7653C5.75915 11.7788 5.76982 11.7923 5.78014 11.8062L4.77865 12.5542L4.77324 12.5474C3.85433 11.4012 3.30469 9.94608 3.30469 8.36266C3.30469 4.66474 6.30243 1.66699 10.0003 1.66699C13.6983 1.66699 16.696 4.66474 16.696 8.36266C16.696 9.49699 16.4139 10.5654 15.9161 11.5017C15.7199 11.8705 15.4903 12.2188 15.2313 12.5426L15.2289 12.5456L15.2274 12.5474H15.2313L15.2298 12.5494C15.2298 12.5494 15.2284 12.5512 15.2274 12.5526C15.1914 12.6007 14.9066 12.9813 14.4772 13.5472C13.6431 14.6465 12.2634 16.4452 11.1016 17.8664C10.5264 18.5698 9.47443 18.5696 8.89968 17.8658C7.1027 15.6657 4.77865 12.5542 4.77865 12.5542L5.78014 11.8062L5.8819 11.942C5.94837 12.0306 6.04554 12.1599 6.16781 12.322C6.41242 12.6463 6.7573 13.1017 7.15803 13.6254C7.96122 14.6751 8.98193 15.9906 9.86776 17.0752C9.91068 17.1277 9.95768 17.1438 10.0008 17.1438C10.0438 17.1438 10.0909 17.1277 10.1338 17.0752C11.0224 15.9883 12.0453 14.6711 12.8499 13.6202C13.2514 13.0958 13.5968 12.64 13.8418 12.3154C13.9643 12.1532 14.0616 12.0238 14.1281 11.9351L14.1766 11.8705Z" fill="black"/>
                                </svg>
                            </div>
                            <span><?= $address ?></span>
                        </div>
                    </div>
                <?php endif ?>
                <?php if($explain): ?>
                    <div class="explain">
                        <h4><?= (pll_current_language() == 'en') ? "Explain:" : "Diễn giả:" ?></h4>
                        <span><?= $explain ?></span>
                    </div>
                <?php endif ?>
                <?php if($organize): ?>
                    <div class="organize">
                        <h4><?= (pll_current_language() == 'en') ? "Organize:" : "Đơn vị tổ chức:" ?></h4>
                        <span><?= $organize ?></span>
                    </div>
                <?php endif ?>
                <div class="content">
                    <?php the_content() ?>
                </div>
            </div>
            <div class="right">
                <div class="training">
                    <h2 class="title"><?= (pll_current_language() == 'en') ? "Latest training" : "Đào tạo mới nhất" ?></h2>
                    <div class="list-training">
                        <?php if ($latest_train_query->have_posts()) : ?>
                            <?php while ($latest_train_query->have_posts()) : $latest_train_query->the_post(); ?>
                                <?php
                                    $training_id = get_the_ID();
                                    $training = get_field('training', $training_id);
                                    $start_time = $training['start_time'];
                                    $address = $training['address'];
                                ?>
                                <div class="child">
                                    <h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
                                    <?php if($start_time['date']): ?>
                                        <div class="time">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                                    <path d="M14.1729 12.1663C14.6331 12.1663 15.0062 11.7932 15.0062 11.333C15.0062 10.8728 14.6331 10.4997 14.1729 10.4997C13.7126 10.4997 13.3395 10.8728 13.3395 11.333C13.3395 11.7932 13.7126 12.1663 14.1729 12.1663Z" fill="#414141"/>
                                                    <path d="M14.1729 15.4997C14.6331 15.4997 15.0062 15.1266 15.0062 14.6663C15.0062 14.2061 14.6331 13.833 14.1729 13.833C13.7126 13.833 13.3395 14.2061 13.3395 14.6663C13.3395 15.1266 13.7126 15.4997 14.1729 15.4997Z" fill="#414141"/>
                                                    <path d="M10.8395 11.333C10.8395 11.7932 10.4664 12.1663 10.0062 12.1663C9.54595 12.1663 9.17285 11.7932 9.17285 11.333C9.17285 10.8728 9.54595 10.4997 10.0062 10.4997C10.4664 10.4997 10.8395 10.8728 10.8395 11.333Z" fill="#414141"/>
                                                    <path d="M10.8395 14.6663C10.8395 15.1266 10.4664 15.4997 10.0062 15.4997C9.54595 15.4997 9.17285 15.1266 9.17285 14.6663C9.17285 14.2061 9.54595 13.833 10.0062 13.833C10.4664 13.833 10.8395 14.2061 10.8395 14.6663Z" fill="#414141"/>
                                                    <path d="M5.83952 12.1663C6.29976 12.1663 6.67285 11.7932 6.67285 11.333C6.67285 10.8728 6.29976 10.4997 5.83952 10.4997C5.37928 10.4997 5.00619 10.8728 5.00619 11.333C5.00619 11.7932 5.37928 12.1663 5.83952 12.1663Z" fill="#414141"/>
                                                    <path d="M5.83952 15.4997C6.29976 15.4997 6.67285 15.1266 6.67285 14.6663C6.67285 14.2061 6.29976 13.833 5.83952 13.833C5.37928 13.833 5.00619 14.2061 5.00619 14.6663C5.00619 15.1266 5.37928 15.4997 5.83952 15.4997Z" fill="#414141"/>
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83952 1.95801C6.1847 1.95801 6.46452 2.23783 6.46452 2.58301V3.21861C7.01618 3.208 7.62396 3.208 8.2924 3.20801H11.7199C12.3883 3.208 12.9962 3.208 13.5479 3.21861V2.58301C13.5479 2.23783 13.8277 1.95801 14.1729 1.95801C14.518 1.95801 14.7979 2.23783 14.7979 2.58301V3.27225C15.0145 3.28876 15.2196 3.30952 15.4137 3.33562C16.3907 3.46698 17.1815 3.74374 17.8051 4.36738C18.4288 4.99101 18.7055 5.7818 18.8369 6.75882C18.9645 7.70816 18.9645 8.92118 18.9645 10.4526V12.2134C18.9645 13.7448 18.9645 14.9579 18.8369 15.9072C18.7055 16.8842 18.4288 17.675 17.8051 18.2986C17.1815 18.9223 16.3907 19.199 15.4137 19.3304C14.4644 19.458 13.2513 19.458 11.7199 19.458H8.29251C6.76106 19.458 5.548 19.458 4.59867 19.3304C3.62165 19.199 2.83086 18.9223 2.20722 18.2986C1.58359 17.675 1.30682 16.8842 1.17546 15.9072C1.04783 14.9578 1.04784 13.7448 1.04785 12.2134V10.4527C1.04784 8.92119 1.04783 7.70817 1.17546 6.75882C1.30682 5.7818 1.58359 4.99101 2.20722 4.36738C2.83086 3.74374 3.62165 3.46698 4.59867 3.33562C4.79277 3.30952 4.9979 3.28876 5.21452 3.27225V2.58301C5.21452 2.23783 5.49434 1.95801 5.83952 1.95801ZM4.76523 4.57447C3.92682 4.68719 3.44378 4.89859 3.0911 5.25126C2.73843 5.60393 2.52704 6.08697 2.41432 6.92538C2.39523 7.06737 2.37927 7.21685 2.36592 7.37467H17.6464C17.6331 7.21685 17.6171 7.06737 17.5981 6.92538C17.4853 6.08697 17.2739 5.60393 16.9213 5.25126C16.5686 4.89859 16.0856 4.68719 15.2471 4.57447C14.3908 4.45933 13.2619 4.45801 11.6729 4.45801H8.33952C6.7505 4.45801 5.62161 4.45933 4.76523 4.57447ZM2.29785 10.4997C2.29785 9.788 2.29812 9.16861 2.30876 8.62467H17.7036C17.7143 9.16861 17.7145 9.788 17.7145 10.4997V12.1663C17.7145 13.7554 17.7132 14.8842 17.5981 15.7406C17.4853 16.579 17.2739 17.0621 16.9213 17.4148C16.5686 17.7674 16.0856 17.9788 15.2471 18.0915C14.3908 18.2067 13.2619 18.208 11.6729 18.208H8.33952C6.7505 18.208 5.62161 18.2067 4.76523 18.0915C3.92682 17.9788 3.44378 17.7674 3.0911 17.4148C2.73843 17.0621 2.52704 16.579 2.41432 15.7406C2.29918 14.8842 2.29785 13.7554 2.29785 12.1663V10.4997Z" fill="#414141"/>
                                                </svg>
                                            </div>
                                            <div>
                                                <p><?= $start_time['date'] ?></p>
                                                <span><?= date('h:i:s A', strtotime($start_time['time'])) ?></span>
                                            </div>
                                        </div>
                                    <?php endif ?>
                                    <?php if($address): ?>
                                        <div class="address">
                                            <div class="icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M2.71387 8.45307C2.71387 4.37055 5.96804 1.04199 10.0055 1.04199C14.043 1.04199 17.2972 4.37055 17.2972 8.45307C17.2972 10.424 16.7355 12.5402 15.7426 14.3685C14.7509 16.1946 13.3019 17.7813 11.4893 18.6286C10.5477 19.0687 9.46339 19.0687 8.52178 18.6286C6.70918 17.7813 5.26022 16.1946 4.2685 14.3685C3.27556 12.5402 2.71387 10.424 2.71387 8.45307ZM10.0055 2.29199C6.67923 2.29199 3.96387 5.03989 3.96387 8.45307C3.96387 10.2006 4.46606 12.1132 5.36695 13.772C6.26907 15.433 7.54388 16.7917 9.05107 17.4962C9.65724 17.7795 10.3538 17.7795 10.96 17.4962C12.4672 16.7917 13.742 15.433 14.6441 13.772C15.545 12.1132 16.0472 10.2006 16.0472 8.45307C16.0472 5.03989 13.3318 2.29199 10.0055 2.29199ZM10.0055 6.45866C8.97 6.45866 8.13053 7.29813 8.13053 8.33366C8.13053 9.36919 8.97 10.2087 10.0055 10.2087C11.0411 10.2087 11.8805 9.36919 11.8805 8.33366C11.8805 7.29813 11.0411 6.45866 10.0055 6.45866ZM6.88053 8.33366C6.88053 6.60777 8.27964 5.20866 10.0055 5.20866C11.7314 5.20866 13.1305 6.60777 13.1305 8.33366C13.1305 10.0595 11.7314 11.4587 10.0055 11.4587C8.27964 11.4587 6.88053 10.0595 6.88053 8.33366Z" fill="#414141"/>
                                                </svg>
                                            </div>
                                            <span><?= $address ?></span>
                                        </div>
                                    <?php endif ?>
                                </div>
                            <?php endwhile; ?>
                            <?php wp_reset_postdata(); ?>
                        <?php else : ?>
                            <p><?= (pll_current_language() == 'en') ? "There are no training." : "Không có khóa đào tạo nào." ?></p>
                        <?php endif; ?>
                    </div>
                </div>
                <div class="news">
                    <h2 class="title"><?= (pll_current_language() == 'en') ? "Latest event" : "Tin tức mới nhất" ?></h2>
                    <div class="list-news">
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
                            <p><?= (pll_current_language() == 'en') ? "There are no news." : "Không có tin tức nào." ?></p>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="latest">
            <h3 class="title"><?= (pll_current_language() == 'en') ? "Latest training" : "Đào tạo mới nhất" ?></h3>
            <table>
                <?php if (pll_current_language() == 'en') : ?>
                    <tr>
                        <th>Course name</th>
                        <th>Start time</th>
                        <th>End Time</th>
                        <th>Address</th>
                    </tr>
                <?php else: ?>
                    <tr>
                        <th>Tên khóa đào tạo</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Địa điểm</th>
                    </tr>
                <?php endif ?>
                <?php if ($latest_train_query->have_posts()) : ?>
                    <?php while ($latest_train_query->have_posts()) : $latest_train_query->the_post(); ?>
                        <?php
                            $training_id = get_the_ID();
                            $training = get_field('training', $training_id);
                            $start_time = $training['start_time'];
                            $end_time = $training['end_time'];
                            $address = $training['address'];
                        ?>
                        <tr>
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
                            <td><?= $address ?></td>
                        </tr>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?= (pll_current_language() == 'en') ? "There are no training." : "Không có khóa đào tạo nào." ?></p>
                <?php endif; ?>
            </table>
        </div>
        <div class="relate fade-in">
            <h3 class="title"><?= (pll_current_language() == 'en') ? "Relevant training" : "Đào tạo liên quan" ?></h3>
            <table>
                <?php if (pll_current_language() == 'en') : ?>
                    <tr>
                        <th>Course name</th>
                        <th>Start time</th>
                        <th>End Time</th>
                        <th>Address</th>
                    </tr>
                <?php else: ?>
                    <tr>
                        <th>Tên khóa đào tạo</th>
                        <th>Thời gian bắt đầu</th>
                        <th>Thời gian kết thúc</th>
                        <th>Địa điểm</th>
                    </tr>
                <?php endif ?>
                <?php if ($related_trains_query->have_posts()) : ?>
                    <?php while ($related_trains_query->have_posts()) : $related_trains_query->the_post(); ?>
                        <?php
                            $training_id = get_the_ID();
                            $training = get_field('training', $training_id);
                            $start_time = $training['start_time'];
                            $end_time = $training['end_time'];
                            $address = $training['address'];
                        ?>
                        <tr>
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
                            <td><?= $address ?></td>
                        </tr>
                    <?php endwhile; ?>
                    <?php wp_reset_postdata(); ?>
                <?php else : ?>
                    <p><?= (pll_current_language() == 'en') ? "There are no training." : "Không có khóa đào tạo nào." ?></p>
                <?php endif; ?>
            </table>
        </div>
    </div>
</main>
<?php get_footer(); ?>