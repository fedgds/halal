<?php 
/* Template Name: Giới thiệu */
$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner.php') ?>
    <div class="section-1-about">
        <div class="background">
            <img src="<?= $url ?>/dist/images/background-section-1.png" alt="">
        </div>
        <div class="container">
            <h2>Chức năng & Nhiệm vụ</h2>
            <div class="content">
                <div class="left">
                    <div class="image-1">
                        <img src="<?= $url ?>/dist/images/section-1-image-1.png" alt="">
                    </div>
                    <div class="image-2">
                        <img src="<?= $url ?>/dist/images/section-1-image-2.png" alt="">
                    </div>
                </div>
                <div class="right">
                    <ul>
                        <li>Tham mưu cho lãnh đạo về quản lý nhà nước về chứng nhận Halal.</li>
                        <li>Nghiên cứu, phổ biến các hệ thống tiêu chuẩn Halal của Việt Nam và quốc tế.</li>
                        <li>Chứng nhận sản phẩm, hàng hóa, dịch vụ theo tiêu chuẩn Halal</li>
                        <li>Tổ chức và triển khai các hoạt động đào tạo, hội thảo liên quan đến Halal.</li>
                    </ul>
                    <span>Trung tâm HALCERT có nhiệm vụ tham mưu lãnh đạo về quản lý và tiêu chuẩn Halal, chứng nhận sản phẩm và dịch vụ theo tiêu chuẩn Halal, tổ chức đào tạo và hội thảo, hợp tác quốc tế, thực hiện các nghiên cứu khoa học liên quan đến Halal, và quản lý tài liệu, hồ sơ liên quan.</span>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2-about">
        <div class="container">
            <div class="top">
                <h2 class="title">Nhân sự <span>HALCERT</span></h2>
                <div class="description">
                    Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu "Nội dung, nội dung, nội dung" là nó khiến văn bản giống thật hơn, bình thường hơn.
                </div>
            </div>
            <div class="bottom">
                <div class="child">
                    <div class="backdrop-child"></div>
                    <p class="text">Lorem ipsum dolor sit amet consectetur. Egestas fames viverra sed facilisi integer maecenas egestas placerat. Ornare amet venenatis leo a at eu pharetra molestie nec. Vel a in augue donec tempor condimentum cras pretium. Fermentum mauris quam vitae fermentum feugiat urna quam velit. Leo amet egestas</p>
                    <div class="content">
                        <img src="<?= $url ?>/dist/images/section-6-right-1.png" alt="">
                        <div class="infor">
                            <h3>Lorem Ipsum</h3>
                            <span>Phó phó chủ tịch HĐQT</span>
                        </div>
                    </div>
                </div>
                <div class="child">
                    <div class="backdrop-child"></div>
                    <p class="text">Lorem ipsum dolor sit amet consectetur. Egestas fames viverra sed facilisi integer maecenas egestas placerat. Ornare amet venenatis leo a at eu pharetra molestie nec. Vel a in augue donec tempor condimentum cras pretium. Fermentum mauris quam vitae fermentum feugiat urna quam velit. Leo amet egestas</p>
                    <div class="content">
                        <img src="<?= $url ?>/dist/images/section-6-right-1.png" alt="">
                        <div class="infor">
                            <h3>Lorem Ipsum</h3>
                            <span>Phó phó chủ tịch HĐQT</span>
                        </div>
                    </div>
                </div>
                <div class="child">
                    <div class="backdrop-child"></div>
                    <p class="text">Lorem ipsum dolor sit amet consectetur. Egestas fames viverra sed facilisi integer maecenas egestas placerat. Ornare amet venenatis leo a at eu pharetra molestie nec. Vel a in augue donec tempor condimentum cras pretium. Fermentum mauris quam vitae fermentum feugiat urna quam velit. Leo amet egestas</p>
                    <div class="content">
                        <img src="<?= $url ?>/dist/images/section-6-right-1.png" alt="">
                        <div class="infor">
                            <h3>Lorem Ipsum</h3>
                            <span>Phó phó chủ tịch HĐQT</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('section/section-5-home.php') ?>
</main>
<?php get_footer(); ?>