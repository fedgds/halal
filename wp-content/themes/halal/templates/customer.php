<?php 
/* Template Name: Khách hàng */
$list_customers_query = new WP_Query(array(
    'post_type' => 'khach-hang',
    'post_status' => 'publish',
    'orderby' => 'date',
    'order'      => 'ASC',
));
get_header(); ?>
<main>
    <?php include('section/section-customer.php') ?>
    <div class="section-customer">
        <div class="container">
            <h2 class="title">Khách hàng tiêu biểu</h2>
            <div class="description">
                Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo, Lorem ipsum dolor sit amet, consecte adipiscing elit, sed do eiusmod tempo.
            </div>
            <div class="list-customer" id="list-tab-customer">
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
                    <p>Không có khách hàng.</p>
                <?php endif; ?>
            </div>   
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
                    <tr>
                        <th>Tên đơn vị</th>
                        <th>Địa chỉ</th>
                        <th>Số chứng nhận</th>
                        <th>Phạm vi chứng nhận</th>
                        <th>Hiệu lực chứng nhận</th>
                    </tr>
                    <?php if ($list_customers_query->have_posts()) : ?>
                        <?php while ($list_customers_query->have_posts()) : $list_customers_query->the_post(); ?>
                            <?php
                                $customer_id = get_the_ID();
                                $customer = get_field('customer', $customer_id);
                                $address = $customer['address'];
                                $number = $customer['number'];
                                $scope = $customer['scope'];
                                $from = $customer['effect']['from'];
                                $to = $customer['effect']['to'];
                            ?>
                            <tr>
                                <td><?php the_title(); ?></td>
                                <td><?= $address ?></td>
                                <td><?= $number ?></td>
                                <td><?= $scope ?></td>
                                <td>Từ <?= $from ?> - Đến <?= $to ?></td>
                            </tr>
                        <?php endwhile; ?>
                        <?php wp_reset_postdata(); ?>
                    <?php else : ?>
                        <p>Không có khách hàng.</p>
                    <?php endif; ?>
                </table>
            </div>
            <nav class="pagination">
                <ul>
                    <li class="prev">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                            <path d="M14 7.33301L9 12.333L14 17.333" stroke="#3CA333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                    </li>
                    <li><a href="">1</a></li>
                    <li class="active"><a href="">2</a></li>
                    <li><a href="">3</a></li>
                    <li><a href="">4</a></li>
                    <li>
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" viewBox="0 0 36 36" fill="none">
                                <rect x="0.5" y="0.5" width="35" height="35" rx="3.5"/>
                                <circle cx="11" cy="18" r="2" fill="#303030"/>
                                <circle cx="18" cy="18" r="2" fill="#303030"/>
                                <circle cx="25" cy="18" r="2" fill="#303030"/>
                            </svg>
                        </a>
                    </li>
                    <li class="next">
                        <a href="">
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path d="M10 7.33301L15 12.333L10 17.333" stroke="#3CA333" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                            </svg>
                        </a>
                    </li>
                </ul>
            </nav>
        </div>     
        <div class="backdrop"></div>
        <div class="list-modal-customer">
            <div class="modal">
                <?php if ($list_customers_query->have_posts()) : ?>
                        <?php while ($list_customers_query->have_posts()) : $list_customers_query->the_post(); ?>
                            <?php
                                $customer_id = get_the_ID();
                                $customer = get_field('customer', $customer_id);
                                $thumbnail_url = get_the_post_thumbnail_url(get_the_ID(), 'full');
                                $address = $customer['address'];
                                $number = $customer['number'];
                                $scope = $customer['scope'];
                                $from = $customer['effect']['from'];
                                $to = $customer['effect']['to'];
                            ?>
                            <div class="child" id="modal-customer">
                                <span class="image"><img src="<?= esc_url($thumbnail_url) ?>" alt=""></span>
                                <div class="infor">
                                    <h3 class="name"><?php the_title(); ?></h3>
                                    <div class="bottom">
                                        <div class="child">
                                            <div class="left">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="20" viewBox="0 0 21 20" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M7.71576 5.58594L6.45939 3.87272C6.24347 3.57826 5.83541 3.50322 5.52885 3.70159C3.76681 4.84173 3.15549 6.68779 3.95414 8.13827C4.69347 9.48102 5.82912 11.1192 7.56413 12.8542C9.29915 14.5892 10.9373 15.7249 12.2801 16.4642C13.7306 17.2629 15.5766 16.6515 16.7167 14.8895C16.9152 14.5829 16.8401 14.1749 16.5457 13.9589L14.8324 12.7026C14.4545 12.4254 13.9533 12.3829 13.5342 12.5925L12.8513 12.934C12.3662 13.1765 11.712 13.2569 11.0976 12.9409C10.6302 12.7004 9.88907 12.2329 9.03723 11.3811C8.18551 10.5293 7.71797 9.78819 7.47749 9.32077C7.1614 8.70635 7.24184 8.05207 7.48434 7.56704L7.82579 6.88416C8.03536 6.465 7.99289 5.96384 7.71576 5.58594ZM4.84979 2.65212C2.73269 4.022 1.64289 6.53224 2.85914 8.74119C3.65292 10.1829 4.85861 11.9164 6.68024 13.7381C8.50188 15.5597 10.2355 16.7654 11.6772 17.5592C13.8861 18.7754 16.3963 17.6856 17.7662 15.5685C18.3242 14.7062 18.1132 13.5584 17.2848 12.9509L15.5716 11.6946C14.8158 11.1404 13.8135 11.0554 12.9752 11.4745L12.2923 11.8159C12.0946 11.9148 11.8659 11.9304 11.6694 11.8294C11.3113 11.6451 10.6768 11.2529 9.92115 10.4972C9.16549 9.74152 8.77323 9.10702 8.58902 8.74894C8.48791 8.55244 8.50354 8.32374 8.60238 8.12605L8.94382 7.44318C9.36299 6.60487 9.27799 5.60254 8.72377 4.84673L7.4674 3.13351C6.85999 2.30522 5.71214 2.09413 4.84979 2.65212Z" fill="black"/>
                                                    </svg>
                                                </div>
                                                <b>Số chứng nhận:</b>
                                            </div>
                                            <span class="right phone-number"><?= $number ?></span>
                                        </div>
                                        <div class="child">
                                            <div class="left">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M2.10938 6.33301C2.10938 4.9523 3.22867 3.83301 4.60938 3.83301H16.276C17.6568 3.83301 18.776 4.9523 18.776 6.33301V14.6663C18.776 16.0471 17.6568 17.1663 16.276 17.1663H4.60938C3.22867 17.1663 2.10938 16.0471 2.10938 14.6663V6.33301ZM4.60938 5.08301H16.276C16.8175 5.08301 17.2785 5.42727 17.4522 5.90885L11.0205 10.1967C10.6706 10.4299 10.2148 10.4299 9.86487 10.1967L3.43318 5.90884C3.60688 5.42727 4.06792 5.08301 4.60938 5.08301ZM3.35938 7.36195V14.6663C3.35938 15.3567 3.91902 15.9163 4.60938 15.9163H16.276C16.9664 15.9163 17.526 15.3567 17.526 14.6663V7.36196L11.7139 11.2368C10.9441 11.7499 9.94129 11.7499 9.17154 11.2368L3.35938 7.36195Z" fill="black"/>
                                                    </svg>
                                                </div>
                                                <b>Phạm vi chứng nhận:</b>
                                            </div>
                                            <span class="right scope"><?= $scope ?></span>
                                        </div>
                                        <div class="child">
                                            <div class="left">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4421 2.58301C6.0698 2.58301 2.52539 6.12742 2.52539 10.4997C2.52539 14.8719 6.0698 18.4163 10.4421 18.4163C14.8143 18.4163 18.3587 14.8719 18.3587 10.4997C18.3587 6.12742 14.8143 2.58301 10.4421 2.58301ZM3.67006 8.41634C3.46766 9.07501 3.35872 9.77459 3.35872 10.4997C3.35872 11.2248 3.46766 11.9243 3.67006 12.583H6.81902C6.73607 11.9182 6.69206 11.2193 6.69206 10.4997C6.69206 9.78001 6.73607 9.08117 6.81902 8.41634H3.67006ZM3.98517 7.58301H6.94644C7.12082 6.6255 7.37926 5.75845 7.70428 5.02715C7.93133 4.51628 8.1951 4.06216 8.4929 3.6879C6.48112 4.26248 4.83519 5.70421 3.98517 7.58301ZM7.65918 8.41634C7.5724 9.07401 7.52539 9.77326 7.52539 10.4997C7.52539 11.2261 7.5724 11.9253 7.65918 12.583H13.225C13.3117 11.9253 13.3587 11.2261 13.3587 10.4997C13.3587 9.77326 13.3117 9.07401 13.225 8.41634H7.65918ZM13.0897 7.58301H7.79436C7.95695 6.74437 8.18677 5.99338 8.46579 5.3656C8.75325 4.71881 9.08472 4.22118 9.43181 3.89089C9.77672 3.56265 10.1174 3.41634 10.4421 3.41634C10.7667 3.41634 11.1074 3.56265 11.4523 3.89089C11.7994 4.22118 12.1309 4.71881 12.4183 5.3656C12.6973 5.99338 12.9271 6.74437 13.0897 7.58301ZM14.0651 8.41634C14.1481 9.08117 14.1921 9.78001 14.1921 10.4997C14.1921 11.2193 14.1481 11.9182 14.0651 12.583H17.2141C17.4165 11.9243 17.5254 11.2248 17.5254 10.4997C17.5254 9.77459 17.4165 9.07501 17.2141 8.41634H14.0651ZM16.899 7.58301H13.9376C13.7633 6.6255 13.5049 5.75845 13.1798 5.02715C12.9528 4.51628 12.689 4.06216 12.3912 3.6879C14.403 4.26248 16.0489 5.70422 16.899 7.58301ZM8.4929 17.3114C6.48112 16.7368 4.83519 15.2952 3.98517 13.4163H6.94644C7.12082 14.3738 7.37926 15.2409 7.70428 15.9722C7.93133 16.4831 8.19511 16.9372 8.4929 17.3114ZM8.46579 15.6338C8.18677 15.006 7.95695 14.255 7.79436 13.4163H13.0897C12.9271 14.255 12.6973 15.006 12.4183 15.6338C12.1309 16.2805 11.7994 16.7782 11.4523 17.1084C11.1074 17.4367 10.7667 17.583 10.4421 17.583C10.1174 17.583 9.77672 17.4367 9.43181 17.1084C9.08472 16.7782 8.75325 16.2805 8.46579 15.6338ZM13.1798 15.9722C13.5049 15.2409 13.7633 14.3738 13.9376 13.4163H16.899C16.0489 15.2952 14.403 16.7368 12.3912 17.3114C12.689 16.9372 12.9528 16.4831 13.1798 15.9722Z" fill="black" stroke="black" stroke-width="0.3"/>
                                                    </svg>
                                                </div>
                                                <b>Hiệu lực chứng nhận:</b>
                                            </div>
                                            <a href="http://cowater.com/" class="right web">Từ <?= $from ?> - Đến <?= $to ?></a>
                                        </div>
                                        <div class="child">
                                            <div class="left">
                                                <div class="icon">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M10.4424 10.083C11.1327 10.083 11.6924 9.52334 11.6924 8.83301C11.6924 8.14265 11.1327 7.58301 10.4424 7.58301C9.75205 7.58301 9.19238 8.14265 9.19238 8.83301C9.19238 9.52334 9.75205 10.083 10.4424 10.083ZM12.9424 8.83301C12.9424 10.2138 11.8231 11.333 10.4424 11.333C9.06163 11.333 7.94238 10.2138 7.94238 8.83301C7.94238 7.4523 9.06163 6.33301 10.4424 6.33301C11.8231 6.33301 12.9424 7.4523 12.9424 8.83301Z" fill="black"/>
                                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M14.619 12.3705C14.6421 12.3345 14.6673 12.2995 14.6945 12.2656C15.4421 11.3331 15.8884 10.1517 15.8884 8.86266C15.8884 5.85509 13.4503 3.41699 10.4427 3.41699C7.43517 3.41699 4.99707 5.85509 4.99707 8.86266C4.99707 10.1516 5.44331 11.3329 6.19075 12.2653C6.20154 12.2788 6.2122 12.2923 6.22252 12.3062L5.22104 13.0542L5.21562 13.0474C4.29671 11.9012 3.74707 10.4461 3.74707 8.86266C3.74707 5.16474 6.74481 2.16699 10.4427 2.16699C14.1406 2.16699 17.1384 5.16474 17.1384 8.86266C17.1384 9.99699 16.8563 11.0654 16.3585 12.0017C16.1623 12.3705 15.9327 12.7188 15.6737 13.0426L15.6713 13.0456L15.6698 13.0474H15.6737L15.6722 13.0494C15.6722 13.0494 15.6708 13.0512 15.6698 13.0526C15.6338 13.1007 15.349 13.4813 14.9196 14.0472C14.0855 15.1465 12.7058 16.9452 11.544 18.3664C10.9688 19.0698 9.91681 19.0696 9.34206 18.3658C7.54508 16.1657 5.22104 13.0542 5.22104 13.0542L6.22252 12.3062L6.32428 12.442C6.39075 12.5306 6.48792 12.6599 6.6102 12.822C6.8548 13.1463 7.19969 13.6017 7.60041 14.1254C8.4036 15.1751 9.42431 16.4906 10.3101 17.5752C10.3531 17.6277 10.4001 17.6438 10.4431 17.6438C10.4862 17.6438 10.5333 17.6277 10.5762 17.5752C11.4648 16.4883 12.4877 15.1711 13.2923 14.1202C13.6938 13.5958 14.0392 13.14 14.2842 12.8154C14.4066 12.6532 14.504 12.5238 14.5705 12.4351L14.619 12.3705Z" fill="black"/>
                                                    </svg>
                                                </div>
                                                <b>Địa chỉ:</b>
                                            </div>
                                            <span class="right address"><?= $address ?></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
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
<script>
document.addEventListener('DOMContentLoaded', function () {
    const tabs = document.querySelectorAll('#list-tab-customer span');
    const modal = document.querySelectorAll('#modal-customer');
    const backdrop = document.querySelector('.backdrop');

    tabs.forEach((tab, index) => {
        tab.addEventListener('click', () => {
            setActiveTab(index);
        });
    });

    function setActiveTab(activeIndex) {
        tabs.forEach(t => t.classList.remove('active'));
        modal.forEach(p => p.classList.remove('active'));

        tabs[activeIndex].classList.add('active');
        modal[activeIndex].classList.add('active');
        
        // Add 'show' class to backdrop when modal is active
        if (modal[activeIndex].classList.contains('active')) {
            backdrop.classList.add('show');
        } else {
            backdrop.classList.remove('show');
        }
    }
    function hideModal() {
        modal.classList.remove('active');
        backdrop.classList.remove('show'); 
    }
    modal.addEventListener('click', function (event) {
        hideModal();
    });
});

</script>