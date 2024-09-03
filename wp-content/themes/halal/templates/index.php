<?php 
/* Template Name: Trang chủ */
$url = get_template_directory_uri();
get_header(); ?>

<main>
    <div class="section-banner-home">
        <div class="list-slide" id="list-slide">
            <div class="child">
                <div class="slider">
                    <img src="<?= $url ?>/dist/images/banner-home.png" alt="">
                </div>
                <div class="container">
                    <div class="title">
                        <h1 class="line-1">HALCERT</h1>
                        <h1 class="line-2">ĐÍCH THỰC CHỨNG NHẬN</h1>
                        <h1 class="line-3">TỪ NĂM 2024.</h1>
                    </div>
                    <div class="text">
                        Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </div>
                </div>
            </div>
            <div class="child">
                <div class="slider">
                    <img src="<?= $url ?>/dist/images/banner-about.png" alt="">
                </div>
                <div class="container">
                    <div class="title">
                        <h1 class="line-1">HALCERT</h1>
                        <h1 class="line-2">ĐÍCH THỰC CHỨNG NHẬN</h1>
                        <h1 class="line-3">TỪ NĂM 2024.</h1>
                    </div>
                    <div class="text">
                        Rorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.
                    </div>
                </div>
            </div>
        </div>
        <ul class="list-dot" id="list-dot">
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
            <li><span></span></li>
        </ul>
    </div>
    <div class="section-1-home">
        <div class="background">
            <img src="<?= $url ?>/dist/images/background-section-1.png" alt="">
        </div>
        <div class="container">
            <div class="left">
                <div class="image-1">
                    <img src="<?= $url ?>/dist/images/section-1-image-1.png" alt="">
                </div>
                <div class="image-2">
                    <img src="<?= $url ?>/dist/images/section-1-image-2.png" alt="">
                </div>
            </div>
            <div class="right">
                <h2 class="title">
                    Về HALCERT
                </h2>
                <div class="sub-1">
                    <div class="content">
                        <p><span>Trung tâm Chứng nhận Halal Quốc gia </span>là đơn vị được Tổng cục Tiêu chuẩn Đo lường thành lập theo Quyết định số 389/QĐ-TĐC ngày 29/3/2024</p>
                    </div>
                </div>
                <div class="sub-2">
                    <div class="content">
                        Trung tâm HALCERT có nhiệm vụ tham mưu lãnh đạo về quản lý và tiêu chuẩn Halal, chứng nhận sản phẩm và dịch vụ theo tiêu chuẩn Halal, tổ chức đào tạo và hội thảo, hợp tác quốc tế, thực hiện các nghiên cứu khoa học liên quan đến Halal, và quản lý tài liệu, hồ sơ liên quan.
                    </div>
                </div>
                <div class="button">
                    <a href="<?= home_url() ?>">
                        <span>Tìm hiểu thêm</span>
                        <div class="icon">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                <path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 5.625C7.15482 5.625 6.875 5.34518 6.875 5C6.875 4.65482 7.15482 4.375 7.5 4.375H15C15.3452 4.375 15.625 4.65482 15.625 5V12.5C15.625 12.8452 15.3452 13.125 15 13.125C14.6548 13.125 14.375 12.8452 14.375 12.5V6.50888L5.44194 15.4419C5.19786 15.686 4.80214 15.686 4.55806 15.4419C4.31398 15.1979 4.31398 14.8021 4.55806 14.5581L13.4911 5.625H7.5Z" fill="#FE3131" stroke="#FE3131"/>
                            </svg>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="section-2-home">
        <div class="background">
            <img src="<?= $url ?>/dist/images/background-section-2.png" alt="">
        </div>
        <div class="container">
            <div class="top">
                <h2 class="title">Chứng nhận <span>Halal</span></h2>
                <div class="description">
                    Quyết định số 1786/QĐ-QUACERT ngày 22/4/2024 quy định chức năng và hoạt động của Trung tâm Chứng nhận Halal quốc gia (HALCERT) thuộc QUACERT. HALCERT chứng nhận, nghiên cứu, phổ biến tiêu chuẩn Halal, tổ chức đào tạo và hợp tác quốc tế.
                </div>
            </div>
            <div class="bottom">
                <img src="<?= $url ?>/dist/images/section-2-image.png" alt="">
            </div>
        </div>
    </div>
    <div class="section-3-home">
        <div class="container">
            <div class="prev" id="prev-train">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M30.9762 39.1389C30.3472 39.678 29.4002 39.6051 28.8611 38.9762L16.8611 24.9762C16.3796 24.4144 16.3796 23.5855 16.8611 23.0238L28.8611 9.02379C29.4002 8.3948 30.3472 8.32196 30.9762 8.86109C31.6052 9.40022 31.678 10.3472 31.1389 10.9762L19.9756 24L31.1389 37.0238C31.678 37.6528 31.6051 38.5997 30.9762 39.1389Z" fill="#696F8C"/>
                </svg>
            </div>
            <div class="next" id="next-train">
                <svg xmlns="http://www.w3.org/2000/svg" width="48" height="48" viewBox="0 0 48 48" fill="none">
                    <path fill-rule="evenodd" clip-rule="evenodd" d="M17.0238 8.86114C17.6528 8.32201 18.5998 8.39485 19.1389 9.02384L31.1389 23.0238C31.6204 23.5856 31.6204 24.4145 31.1389 24.9762L19.1389 38.9762C18.5998 39.6052 17.6528 39.678 17.0238 39.1389C16.3949 38.5998 16.322 37.6528 16.8611 37.0238L28.0244 24L16.8611 10.9762C16.322 10.3472 16.3949 9.40028 17.0238 8.86114Z" fill="#696F8C"/>
                </svg>
            </div>
            <div class="top">
                <h2 class="title">Đào tạo về <span>Halal</span></h2>
                <div class="description">
                    Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu "Nội dung, nội dung, nội dung" là nó khiến văn bản giống thật hơn, bình thường hơn.
                </div>
            </div>
            <div class="bottom">
                <div class="list-training">
                    <div class="child">
                        <div class="image">
                            <a class="" href="<?= home_url() ?>">
                                <img src="<?= $url ?>/dist/images/training-1.png" alt="">
                            </a>
                        </div>
                        <div class="infor">
                            <h3 class="title"><a href="">Khóa đào tạo về chứng chỉ Halal của HALCERT cung cấp</a></h3>
                            <div class="date">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.3731 14.627 9.99998 14.1667 9.99998C13.7065 9.99998 13.3334 10.3731 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#3CA333"/>
                                        <path d="M14.1667 15C14.627 15 15.0001 14.6269 15.0001 14.1666C15.0001 13.7064 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7064 13.3334 14.1666C13.3334 14.6269 13.7065 15 14.1667 15Z" fill="#3CA333"/>
                                        <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.3731 9.53984 9.99998 10.0001 9.99998C10.4603 9.99998 10.8334 10.3731 10.8334 10.8333Z" fill="#3CA333"/>
                                        <path d="M10.8334 14.1666C10.8334 14.6269 10.4603 15 10.0001 15C9.53984 15 9.16675 14.6269 9.16675 14.1666C9.16675 13.7064 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7064 10.8334 14.1666Z" fill="#3CA333"/>
                                        <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.3731 6.29365 9.99998 5.83342 9.99998C5.37318 9.99998 5.00008 10.3731 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#3CA333"/>
                                        <path d="M5.83342 15C6.29365 15 6.66675 14.6269 6.66675 14.1666C6.66675 13.7064 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7064 5.00008 14.1666C5.00008 14.6269 5.37318 15 5.83342 15Z" fill="#3CA333"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45831C6.17859 1.45831 6.45842 1.73813 6.45842 2.08331V2.71891C7.01008 2.7083 7.61785 2.70831 8.2863 2.70831H11.7138C12.3822 2.70831 12.9901 2.7083 13.5417 2.71891V2.08331C13.5417 1.73813 13.8216 1.45831 14.1667 1.45831C14.5119 1.45831 14.7917 1.73813 14.7917 2.08331V2.77255C15.0084 2.78907 15.2135 2.80983 15.4076 2.83592C16.3846 2.96728 17.1754 3.24405 17.799 3.86768C18.4227 4.49132 18.6994 5.28211 18.8308 6.25913C18.9584 7.20847 18.9584 8.42148 18.9584 9.95293V11.7137C18.9584 13.2451 18.9584 14.4582 18.8308 15.4075C18.6994 16.3845 18.4227 17.1753 17.799 17.7989C17.1754 18.4226 16.3846 18.6993 15.4076 18.8307C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8307C3.61554 18.6993 2.82475 18.4226 2.20112 17.7989C1.57748 17.1753 1.30072 16.3845 1.16936 15.4075C1.04172 14.4582 1.04174 13.2451 1.04175 11.7137V9.95296C1.04174 8.4215 1.04172 7.20847 1.16936 6.25913C1.30072 5.28211 1.57748 4.49132 2.20112 3.86768C2.82475 3.24405 3.61554 2.96728 4.59256 2.83592C4.78667 2.80983 4.9918 2.78907 5.20842 2.77255V2.08331C5.20842 1.73813 5.48824 1.45831 5.83342 1.45831ZM4.75912 4.07478C3.92071 4.1875 3.43768 4.39889 3.085 4.75157C2.73233 5.10424 2.52094 5.58728 2.40821 6.42569C2.38912 6.56767 2.37316 6.71715 2.35982 6.87498H17.6403C17.627 6.71715 17.611 6.56768 17.5919 6.42569C17.4792 5.58728 17.2678 5.10424 16.9152 4.75157C16.5625 4.39889 16.0794 4.1875 15.241 4.07478C14.3847 3.95964 13.2558 3.95831 11.6667 3.95831H8.33342C6.7444 3.95831 5.61551 3.95964 4.75912 4.07478ZM2.29175 9.99998C2.29175 9.2883 2.29201 8.66892 2.30265 8.12498H17.6975C17.7081 8.66892 17.7084 9.2883 17.7084 9.99998V11.6666C17.7084 13.2557 17.7071 14.3846 17.5919 15.2409C17.4792 16.0793 17.2678 16.5624 16.9152 16.9151C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.707 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.707 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.9151C2.73233 16.5624 2.52094 16.0793 2.40821 15.2409C2.29308 14.3846 2.29175 13.2557 2.29175 11.6666V9.99998Z" fill="#3CA333"/>
                                    </svg>
                                </div>
                                <p class="from">Feb 26, 2024</p>
                                <p class="minus">-</p>
                                <p class="to">Mar 04, 2024</p>
                            </div>
                            <div class="description">
                                Porem ipsum dolor sit amet, consectetur adipisc elit. Nunc vulputate libero...
                            </div>
                            <a href="<?= home_url() ?>" class="view-more">
                                <span>Tìm hiểu thêm</span>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5C5.72386 4.5 5.5 4.27614 5.5 4C5.5 3.72386 5.72386 3.5 6 3.5H12C12.2761 3.5 12.5 3.72386 12.5 4V10C12.5 10.2761 12.2761 10.5 12 10.5C11.7239 10.5 11.5 10.2761 11.5 10V5.20711L4.35355 12.3536C4.15829 12.5488 3.84171 12.5488 3.64645 12.3536C3.45118 12.1583 3.45118 11.8417 3.64645 11.6464L10.7929 4.5H6Z" fill="#FE3131"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="child">
                        <div class="image">
                            <a class="" href="<?= home_url() ?>">
                                <img src="<?= $url ?>/dist/images/training-2.png" alt="">
                            </a>
                        </div>
                        <div class="infor">
                            <h3 class="title"><a href="">Khóa đào tạo về chứng chỉ Halal của HALCERT cung cấp</a></h3>
                            <div class="date">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.3731 14.627 9.99998 14.1667 9.99998C13.7065 9.99998 13.3334 10.3731 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#3CA333"/>
                                        <path d="M14.1667 15C14.627 15 15.0001 14.6269 15.0001 14.1666C15.0001 13.7064 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7064 13.3334 14.1666C13.3334 14.6269 13.7065 15 14.1667 15Z" fill="#3CA333"/>
                                        <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.3731 9.53984 9.99998 10.0001 9.99998C10.4603 9.99998 10.8334 10.3731 10.8334 10.8333Z" fill="#3CA333"/>
                                        <path d="M10.8334 14.1666C10.8334 14.6269 10.4603 15 10.0001 15C9.53984 15 9.16675 14.6269 9.16675 14.1666C9.16675 13.7064 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7064 10.8334 14.1666Z" fill="#3CA333"/>
                                        <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.3731 6.29365 9.99998 5.83342 9.99998C5.37318 9.99998 5.00008 10.3731 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#3CA333"/>
                                        <path d="M5.83342 15C6.29365 15 6.66675 14.6269 6.66675 14.1666C6.66675 13.7064 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7064 5.00008 14.1666C5.00008 14.6269 5.37318 15 5.83342 15Z" fill="#3CA333"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45831C6.17859 1.45831 6.45842 1.73813 6.45842 2.08331V2.71891C7.01008 2.7083 7.61785 2.70831 8.2863 2.70831H11.7138C12.3822 2.70831 12.9901 2.7083 13.5417 2.71891V2.08331C13.5417 1.73813 13.8216 1.45831 14.1667 1.45831C14.5119 1.45831 14.7917 1.73813 14.7917 2.08331V2.77255C15.0084 2.78907 15.2135 2.80983 15.4076 2.83592C16.3846 2.96728 17.1754 3.24405 17.799 3.86768C18.4227 4.49132 18.6994 5.28211 18.8308 6.25913C18.9584 7.20847 18.9584 8.42148 18.9584 9.95293V11.7137C18.9584 13.2451 18.9584 14.4582 18.8308 15.4075C18.6994 16.3845 18.4227 17.1753 17.799 17.7989C17.1754 18.4226 16.3846 18.6993 15.4076 18.8307C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8307C3.61554 18.6993 2.82475 18.4226 2.20112 17.7989C1.57748 17.1753 1.30072 16.3845 1.16936 15.4075C1.04172 14.4582 1.04174 13.2451 1.04175 11.7137V9.95296C1.04174 8.4215 1.04172 7.20847 1.16936 6.25913C1.30072 5.28211 1.57748 4.49132 2.20112 3.86768C2.82475 3.24405 3.61554 2.96728 4.59256 2.83592C4.78667 2.80983 4.9918 2.78907 5.20842 2.77255V2.08331C5.20842 1.73813 5.48824 1.45831 5.83342 1.45831ZM4.75912 4.07478C3.92071 4.1875 3.43768 4.39889 3.085 4.75157C2.73233 5.10424 2.52094 5.58728 2.40821 6.42569C2.38912 6.56767 2.37316 6.71715 2.35982 6.87498H17.6403C17.627 6.71715 17.611 6.56768 17.5919 6.42569C17.4792 5.58728 17.2678 5.10424 16.9152 4.75157C16.5625 4.39889 16.0794 4.1875 15.241 4.07478C14.3847 3.95964 13.2558 3.95831 11.6667 3.95831H8.33342C6.7444 3.95831 5.61551 3.95964 4.75912 4.07478ZM2.29175 9.99998C2.29175 9.2883 2.29201 8.66892 2.30265 8.12498H17.6975C17.7081 8.66892 17.7084 9.2883 17.7084 9.99998V11.6666C17.7084 13.2557 17.7071 14.3846 17.5919 15.2409C17.4792 16.0793 17.2678 16.5624 16.9152 16.9151C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.707 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.707 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.9151C2.73233 16.5624 2.52094 16.0793 2.40821 15.2409C2.29308 14.3846 2.29175 13.2557 2.29175 11.6666V9.99998Z" fill="#3CA333"/>
                                    </svg>
                                </div>
                                <p class="from">Feb 26, 2024</p>
                                <p class="minus">-</p>
                                <p class="to">Mar 04, 2024</p>
                            </div>
                            <div class="description">
                                Porem ipsum dolor sit amet, consectetur adipisc elit. Nunc vulputate libero...
                            </div>
                            <a href="<?= home_url() ?>" class="view-more">
                                <span>Tìm hiểu thêm</span>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5C5.72386 4.5 5.5 4.27614 5.5 4C5.5 3.72386 5.72386 3.5 6 3.5H12C12.2761 3.5 12.5 3.72386 12.5 4V10C12.5 10.2761 12.2761 10.5 12 10.5C11.7239 10.5 11.5 10.2761 11.5 10V5.20711L4.35355 12.3536C4.15829 12.5488 3.84171 12.5488 3.64645 12.3536C3.45118 12.1583 3.45118 11.8417 3.64645 11.6464L10.7929 4.5H6Z" fill="#FE3131"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="child">
                        <div class="image">
                            <a class="" href="<?= home_url() ?>">
                                <img src="<?= $url ?>/dist/images/training-3.png" alt="">
                            </a>
                        </div>
                        <div class="infor">
                            <h3 class="title"><a href="">Khóa đào tạo về chứng chỉ Halal của HALCERT cung cấp</a></h3>
                            <div class="date">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.3731 14.627 9.99998 14.1667 9.99998C13.7065 9.99998 13.3334 10.3731 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#3CA333"/>
                                        <path d="M14.1667 15C14.627 15 15.0001 14.6269 15.0001 14.1666C15.0001 13.7064 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7064 13.3334 14.1666C13.3334 14.6269 13.7065 15 14.1667 15Z" fill="#3CA333"/>
                                        <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.3731 9.53984 9.99998 10.0001 9.99998C10.4603 9.99998 10.8334 10.3731 10.8334 10.8333Z" fill="#3CA333"/>
                                        <path d="M10.8334 14.1666C10.8334 14.6269 10.4603 15 10.0001 15C9.53984 15 9.16675 14.6269 9.16675 14.1666C9.16675 13.7064 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7064 10.8334 14.1666Z" fill="#3CA333"/>
                                        <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.3731 6.29365 9.99998 5.83342 9.99998C5.37318 9.99998 5.00008 10.3731 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#3CA333"/>
                                        <path d="M5.83342 15C6.29365 15 6.66675 14.6269 6.66675 14.1666C6.66675 13.7064 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7064 5.00008 14.1666C5.00008 14.6269 5.37318 15 5.83342 15Z" fill="#3CA333"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45831C6.17859 1.45831 6.45842 1.73813 6.45842 2.08331V2.71891C7.01008 2.7083 7.61785 2.70831 8.2863 2.70831H11.7138C12.3822 2.70831 12.9901 2.7083 13.5417 2.71891V2.08331C13.5417 1.73813 13.8216 1.45831 14.1667 1.45831C14.5119 1.45831 14.7917 1.73813 14.7917 2.08331V2.77255C15.0084 2.78907 15.2135 2.80983 15.4076 2.83592C16.3846 2.96728 17.1754 3.24405 17.799 3.86768C18.4227 4.49132 18.6994 5.28211 18.8308 6.25913C18.9584 7.20847 18.9584 8.42148 18.9584 9.95293V11.7137C18.9584 13.2451 18.9584 14.4582 18.8308 15.4075C18.6994 16.3845 18.4227 17.1753 17.799 17.7989C17.1754 18.4226 16.3846 18.6993 15.4076 18.8307C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8307C3.61554 18.6993 2.82475 18.4226 2.20112 17.7989C1.57748 17.1753 1.30072 16.3845 1.16936 15.4075C1.04172 14.4582 1.04174 13.2451 1.04175 11.7137V9.95296C1.04174 8.4215 1.04172 7.20847 1.16936 6.25913C1.30072 5.28211 1.57748 4.49132 2.20112 3.86768C2.82475 3.24405 3.61554 2.96728 4.59256 2.83592C4.78667 2.80983 4.9918 2.78907 5.20842 2.77255V2.08331C5.20842 1.73813 5.48824 1.45831 5.83342 1.45831ZM4.75912 4.07478C3.92071 4.1875 3.43768 4.39889 3.085 4.75157C2.73233 5.10424 2.52094 5.58728 2.40821 6.42569C2.38912 6.56767 2.37316 6.71715 2.35982 6.87498H17.6403C17.627 6.71715 17.611 6.56768 17.5919 6.42569C17.4792 5.58728 17.2678 5.10424 16.9152 4.75157C16.5625 4.39889 16.0794 4.1875 15.241 4.07478C14.3847 3.95964 13.2558 3.95831 11.6667 3.95831H8.33342C6.7444 3.95831 5.61551 3.95964 4.75912 4.07478ZM2.29175 9.99998C2.29175 9.2883 2.29201 8.66892 2.30265 8.12498H17.6975C17.7081 8.66892 17.7084 9.2883 17.7084 9.99998V11.6666C17.7084 13.2557 17.7071 14.3846 17.5919 15.2409C17.4792 16.0793 17.2678 16.5624 16.9152 16.9151C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.707 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.707 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.9151C2.73233 16.5624 2.52094 16.0793 2.40821 15.2409C2.29308 14.3846 2.29175 13.2557 2.29175 11.6666V9.99998Z" fill="#3CA333"/>
                                    </svg>
                                </div>
                                <p class="from">Feb 26, 2024</p>
                                <p class="minus">-</p>
                                <p class="to">Mar 04, 2024</p>
                            </div>
                            <div class="description">
                                Porem ipsum dolor sit amet, consectetur adipisc elit. Nunc vulputate libero...
                            </div>
                            <a href="<?= home_url() ?>" class="view-more">
                                <span>Tìm hiểu thêm</span>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5C5.72386 4.5 5.5 4.27614 5.5 4C5.5 3.72386 5.72386 3.5 6 3.5H12C12.2761 3.5 12.5 3.72386 12.5 4V10C12.5 10.2761 12.2761 10.5 12 10.5C11.7239 10.5 11.5 10.2761 11.5 10V5.20711L4.35355 12.3536C4.15829 12.5488 3.84171 12.5488 3.64645 12.3536C3.45118 12.1583 3.45118 11.8417 3.64645 11.6464L10.7929 4.5H6Z" fill="#FE3131"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="child">
                        <div class="image">
                            <a class="" href="<?= home_url() ?>">
                                <img src="<?= $url ?>/dist/images/training-2.png" alt="">
                            </a>
                        </div>
                        <div class="infor">
                            <h3 class="title"><a href="">Khóa đào tạo về chứng chỉ Halal của HALCERT cung cấp</a></h3>
                            <div class="date">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.3731 14.627 9.99998 14.1667 9.99998C13.7065 9.99998 13.3334 10.3731 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#3CA333"/>
                                        <path d="M14.1667 15C14.627 15 15.0001 14.6269 15.0001 14.1666C15.0001 13.7064 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7064 13.3334 14.1666C13.3334 14.6269 13.7065 15 14.1667 15Z" fill="#3CA333"/>
                                        <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.3731 9.53984 9.99998 10.0001 9.99998C10.4603 9.99998 10.8334 10.3731 10.8334 10.8333Z" fill="#3CA333"/>
                                        <path d="M10.8334 14.1666C10.8334 14.6269 10.4603 15 10.0001 15C9.53984 15 9.16675 14.6269 9.16675 14.1666C9.16675 13.7064 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7064 10.8334 14.1666Z" fill="#3CA333"/>
                                        <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.3731 6.29365 9.99998 5.83342 9.99998C5.37318 9.99998 5.00008 10.3731 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#3CA333"/>
                                        <path d="M5.83342 15C6.29365 15 6.66675 14.6269 6.66675 14.1666C6.66675 13.7064 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7064 5.00008 14.1666C5.00008 14.6269 5.37318 15 5.83342 15Z" fill="#3CA333"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45831C6.17859 1.45831 6.45842 1.73813 6.45842 2.08331V2.71891C7.01008 2.7083 7.61785 2.70831 8.2863 2.70831H11.7138C12.3822 2.70831 12.9901 2.7083 13.5417 2.71891V2.08331C13.5417 1.73813 13.8216 1.45831 14.1667 1.45831C14.5119 1.45831 14.7917 1.73813 14.7917 2.08331V2.77255C15.0084 2.78907 15.2135 2.80983 15.4076 2.83592C16.3846 2.96728 17.1754 3.24405 17.799 3.86768C18.4227 4.49132 18.6994 5.28211 18.8308 6.25913C18.9584 7.20847 18.9584 8.42148 18.9584 9.95293V11.7137C18.9584 13.2451 18.9584 14.4582 18.8308 15.4075C18.6994 16.3845 18.4227 17.1753 17.799 17.7989C17.1754 18.4226 16.3846 18.6993 15.4076 18.8307C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8307C3.61554 18.6993 2.82475 18.4226 2.20112 17.7989C1.57748 17.1753 1.30072 16.3845 1.16936 15.4075C1.04172 14.4582 1.04174 13.2451 1.04175 11.7137V9.95296C1.04174 8.4215 1.04172 7.20847 1.16936 6.25913C1.30072 5.28211 1.57748 4.49132 2.20112 3.86768C2.82475 3.24405 3.61554 2.96728 4.59256 2.83592C4.78667 2.80983 4.9918 2.78907 5.20842 2.77255V2.08331C5.20842 1.73813 5.48824 1.45831 5.83342 1.45831ZM4.75912 4.07478C3.92071 4.1875 3.43768 4.39889 3.085 4.75157C2.73233 5.10424 2.52094 5.58728 2.40821 6.42569C2.38912 6.56767 2.37316 6.71715 2.35982 6.87498H17.6403C17.627 6.71715 17.611 6.56768 17.5919 6.42569C17.4792 5.58728 17.2678 5.10424 16.9152 4.75157C16.5625 4.39889 16.0794 4.1875 15.241 4.07478C14.3847 3.95964 13.2558 3.95831 11.6667 3.95831H8.33342C6.7444 3.95831 5.61551 3.95964 4.75912 4.07478ZM2.29175 9.99998C2.29175 9.2883 2.29201 8.66892 2.30265 8.12498H17.6975C17.7081 8.66892 17.7084 9.2883 17.7084 9.99998V11.6666C17.7084 13.2557 17.7071 14.3846 17.5919 15.2409C17.4792 16.0793 17.2678 16.5624 16.9152 16.9151C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.707 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.707 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.9151C2.73233 16.5624 2.52094 16.0793 2.40821 15.2409C2.29308 14.3846 2.29175 13.2557 2.29175 11.6666V9.99998Z" fill="#3CA333"/>
                                    </svg>
                                </div>
                                <p class="from">Feb 26, 2024</p>
                                <p class="minus">-</p>
                                <p class="to">Mar 04, 2024</p>
                            </div>
                            <div class="description">
                                Porem ipsum dolor sit amet, consectetur adipisc elit. Nunc vulputate libero...
                            </div>
                            <a href="<?= home_url() ?>" class="view-more">
                                <span>Tìm hiểu thêm</span>
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5C5.72386 4.5 5.5 4.27614 5.5 4C5.5 3.72386 5.72386 3.5 6 3.5H12C12.2761 3.5 12.5 3.72386 12.5 4V10C12.5 10.2761 12.2761 10.5 12 10.5C11.7239 10.5 11.5 10.2761 11.5 10V5.20711L4.35355 12.3536C4.15829 12.5488 3.84171 12.5488 3.64645 12.3536C3.45118 12.1583 3.45118 11.8417 3.64645 11.6464L10.7929 4.5H6Z" fill="#FE3131"/>
                                    </svg>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-4-home">
        <div class="container">
            <div class="top">
                <h2 class="title"><span>Halal </span>NQI</h2>
                <div class="description">
                    Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu "Nội dung, nội dung, nội dung" là nó khiến văn bản giống thật hơn, bình thường hơn.
                </div>
                <nav class="tab">
                    <ul id="list-tab-section-4">
                        <li>Tiêu chuẩn</li>
                        <li>Tiêu chuẩn Halal</li>
                        <li>Thử nghiệm</li>
                        <li>Chứng nhận</li>
                        <li>Công nhận/ Thừa nhận</li>
                    </ul>
                </nav>
            </div>
            <div class="bottom" id="tab-section-4">
                <div class="child">
                    <div class="left">
                        <h3>Tiêu chuẩn Halal</h3>
                        <div class="sub-setion sub-setion-1">
                            Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu "Nội dung, nội dung, nội dung" là nó khiến văn bản giống thật hơn, bình thường hơn.
                        </div>
                        <div class="sub-setion sub-setion-2">
                            Người ta tìm thấy nguồn gốc của nó từ những tác phẩm văn học la-tinh cổ điển xuất hiện từ năm 45 trước Công Nguyên, nghĩa là nó đã có khoảng hơn 2000 tuổi. Một giáo sư của trường Hampden-Sydney College (bang Virginia - Mỹ) quan tâm tới một trong những từ la-tinh khó hiểu nhất, "consectetur",
                        </div>
                        <div class="images">
                            <img src="<?= $url ?>/dist/images/section-4-left-1.png" alt="">
                            <img src="<?= $url ?>/dist/images/section-4-left-2.png" alt="">
                        </div>
                        <a href="<?= home_url() ?>" class="view-more">
                            <span>Tìm hiểu thêm</span>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5C5.72386 4.5 5.5 4.27614 5.5 4C5.5 3.72386 5.72386 3.5 6 3.5H12C12.2761 3.5 12.5 3.72386 12.5 4V10C12.5 10.2761 12.2761 10.5 12 10.5C11.7239 10.5 11.5 10.2761 11.5 10V5.20711L4.35355 12.3536C4.15829 12.5488 3.84171 12.5488 3.64645 12.3536C3.45118 12.1583 3.45118 11.8417 3.64645 11.6464L10.7929 4.5H6Z" fill="#FE3131"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="right">
                        <div class="image-1">
                            <img src="<?= $url ?>/dist/images/section-4-image-1.jfif" alt="">
                        </div>
                        <div class="image-2">
                            <img src="<?= $url ?>/dist/images/section-4-image-2.jfif" alt="">
                        </div>
                    </div>
                </div>
                <div class="child">
                    <div class="left">
                        <h3>Tiêu chuẩn Halal</h3>
                        <div class="sub-setion sub-setion-1">
                            Lorem Ipsum có ưu điểm hơn so với đoạn văn bản chỉ gồm nội dung kiểu "Nội dung, nội dung, nội dung" là nó khiến văn bản giống thật hơn, bình thường hơn.
                        </div>
                        <div class="sub-setion sub-setion-2">
                            Người ta tìm thấy nguồn gốc của nó từ những tác phẩm văn học la-tinh cổ điển xuất hiện từ năm 45 trước Công Nguyên, nghĩa là nó đã có khoảng hơn 2000 tuổi. Một giáo sư của trường Hampden-Sydney College (bang Virginia - Mỹ) quan tâm tới một trong những từ la-tinh khó hiểu nhất, "consectetur",
                        </div>
                        <div class="images">
                            <img src="<?= $url ?>/dist/images/section-4-left-1.png" alt="">
                            <img src="<?= $url ?>/dist/images/section-4-left-2.png" alt="">
                        </div>
                        <a href="<?= home_url() ?>" class="view-more">
                            <span>Tìm hiểu thêm</span>
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 16 16" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6 4.5C5.72386 4.5 5.5 4.27614 5.5 4C5.5 3.72386 5.72386 3.5 6 3.5H12C12.2761 3.5 12.5 3.72386 12.5 4V10C12.5 10.2761 12.2761 10.5 12 10.5C11.7239 10.5 11.5 10.2761 11.5 10V5.20711L4.35355 12.3536C4.15829 12.5488 3.84171 12.5488 3.64645 12.3536C3.45118 12.1583 3.45118 11.8417 3.64645 11.6464L10.7929 4.5H6Z" fill="#FE3131"/>
                                </svg>
                            </div>
                        </a>
                    </div>
                    <div class="right">
                        <div class="image-1">
                            <img src="<?= $url ?>/dist/images/section-4-image-2.jfif" alt="">
                        </div>
                        <div class="image-2">
                            <img src="<?= $url ?>/dist/images/section-4-image-1.jfif" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include('section/section-5-home.php') ?>
    <div class="section-6-home">
        <div class="background">
            <img src="<?= $url ?>/dist/images/background-section-6.png" alt="">
        </div>
        <div class="container">
            <div class="left">
                <h3>Đăng ký chứng nhận</h3>
                <div class="sub-setion sub-setion-1">
                    Có rất nhiều biến thể của Lorem Ipsum mà bạn có thể tìm thấy, nhưng đa số được biến đổi bằng cách thêm các yếu tố hài hước, các từ ngẫu nhiên có khi không có vẻ gì là có ý nghĩa. Nếu bạn định sử dụng một đoạn Lorem Ipsum, bạn nên kiểm tra kĩ để chắn chắn là không có gì nhạy cảm được giấu ở giữa đoạn văn bản. 
                </div>
                <div class="sub-setion sub-setion-2">
                    Tất cả các công cụ sản xuất văn bản mẫu Lorem Ipsum đều được làm theo cách lặp đi lặp lại các đoạn chữ cho tới đủ thì thôi, khiến cho lipsum.com trở thành công cụ sản xuất Lorem Ipsum đáng giá nhất trên mạng.
                </div>
                <a href="<?= home_url() ?>" class="subscribe">
                    Đăng ký chứng nhận
                </a>
            </div>
            <div class="right">
                <div class="image-1">
                    <img src="<?= $url ?>/dist/images/section-6-right-1.png" alt="">
                </div>
                <div class="image-2">
                    <img src="<?= $url ?>/dist/images/section-6-right-2.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="section-7-home">
        <div class="container">
            <div class="top">
                <h2 class="title">
                    <p>Tin tức <span>& sự kiện</span></p>
                </h2>
                <nav class="tab">
                    <ul id="list-tab-news">
                        <li>Tin tức mới nhất</li>
                        <li>Sự kiện nóng hổi</li>
                    </ul>
                </nav>
            </div>
            <div class="bottom">
                <div class="left" id="tab-news">
                    <div class="list-news">
                        <div class="child">
                            <a href="<?= home_url() ?>">
                                <img src="<?= $url ?>/dist/images/section-7-image-1.png" alt="">
                            </a>
                            <div class="infor">
                                <h3><a href="">Tìm cách khơi thông thị trường Halal cho sản phẩm gia cầm Việt</a></h3>
                                <div class="date-and-views">
                                    <div class="date">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#136451"/>
                                                <path d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z" fill="#136451"/>
                                                <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z" fill="#136451"/>
                                                <path d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z" fill="#136451"/>
                                                <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#136451"/>
                                                <path d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z" fill="#136451"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z" fill="#136451"/>
                                            </svg>
                                        </div>
                                        <span>Feb 26, 2024</span>
                                    </div>
                                    <span class="minus">-</span>
                                    <span class="views">2340 views</span>
                                </div>
                            </div>
                        </div>
                        <div class="child">
                            <a href="<?= home_url() ?>">
                                <img src="<?= $url ?>/dist/images/section-7-image-2.png" alt="">
                            </a>
                            <div class="infor">
                                <h3><a href="">Tìm cách khơi thông thị trường Halal cho sản phẩm gia cầm Việt</a></h3>
                                <div class="date-and-views">
                                    <div class="date">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#136451"/>
                                                <path d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z" fill="#136451"/>
                                                <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z" fill="#136451"/>
                                                <path d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z" fill="#136451"/>
                                                <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#136451"/>
                                                <path d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z" fill="#136451"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z" fill="#136451"/>
                                            </svg>
                                        </div>
                                        <span>Feb 26, 2024</span>
                                    </div>
                                    <span class="minus">-</span>
                                    <span class="views">2340 views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="list-news">
                        <div class="child">
                            <a href="<?= home_url() ?>">
                                <img src="<?= $url ?>/dist/images/section-7-image-2.png" alt="">
                            </a>
                            <div class="infor">
                                <h3><a href="">Tìm cách khơi thông thị trường Halal cho sản phẩm gia cầm Việt</a></h3>
                                <div class="date-and-views">
                                    <div class="date">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#136451"/>
                                                <path d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z" fill="#136451"/>
                                                <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z" fill="#136451"/>
                                                <path d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z" fill="#136451"/>
                                                <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#136451"/>
                                                <path d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z" fill="#136451"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z" fill="#136451"/>
                                            </svg>
                                        </div>
                                        <span>Feb 26, 2024</span>
                                    </div>
                                    <span class="minus">-</span>
                                    <span class="views">2340 views</span>
                                </div>
                            </div>
                        </div>
                        <div class="child">
                            <a href="<?= home_url() ?>">
                                <img src="<?= $url ?>/dist/images/section-7-image-1.png" alt="">
                            </a>
                            <div class="infor">
                                <h3><a href="">Tìm cách khơi thông thị trường Halal cho sản phẩm gia cầm Việt</a></h3>
                                <div class="date-and-views">
                                    <div class="date">
                                        <div class="icon">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                                <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#136451"/>
                                                <path d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z" fill="#136451"/>
                                                <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z" fill="#136451"/>
                                                <path d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z" fill="#136451"/>
                                                <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#136451"/>
                                                <path d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z" fill="#136451"/>
                                                <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z" fill="#136451"/>
                                            </svg>
                                        </div>
                                        <span>Feb 26, 2024</span>
                                    </div>
                                    <span class="minus">-</span>
                                    <span class="views">2340 views</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="right">
                    <div class="child">
                        <h3><a href="">Google Update: Phiên bản Google Workspace Business Starter được chuyển sang cơ chế gộp bộ nhớ và có thêm tính năng bộ nhớ dùng chung</a></h3>
                        <div class="date-and-views">
                            <div class="date">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#136451"/>
                                        <path d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z" fill="#136451"/>
                                        <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z" fill="#136451"/>
                                        <path d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z" fill="#136451"/>
                                        <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#136451"/>
                                        <path d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z" fill="#136451"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z" fill="#136451"/>
                                    </svg>
                                </div>
                                <span>Feb 26, 2024</span>
                            </div>
                            <span class="minus">-</span>
                            <span class="views">2340 views</span>
                        </div>
                    </div>
                    <div class="child">
                        <h3><a href="">CMC Telecom bật mí phương thức đột phá doanh thu với Google Data Warehouse</a></h3>
                        <div class="date-and-views">
                            <div class="date">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#136451"/>
                                        <path d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z" fill="#136451"/>
                                        <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z" fill="#136451"/>
                                        <path d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z" fill="#136451"/>
                                        <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#136451"/>
                                        <path d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z" fill="#136451"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z" fill="#136451"/>
                                    </svg>
                                </div>
                                <span>Feb 26, 2024</span>
                            </div>
                            <span class="minus">-</span>
                            <span class="views">2340 views</span>
                        </div>
                    </div>
                    <div class="child">
                        <h3><a href="">Miễn phí nâng cấp Google Workspace cùng CMC Telecom</a></h3>
                        <div class="date-and-views">
                            <div class="date">
                                <div class="icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20" fill="none">
                                        <path d="M14.1667 11.6666C14.627 11.6666 15.0001 11.2935 15.0001 10.8333C15.0001 10.373 14.627 9.99992 14.1667 9.99992C13.7065 9.99992 13.3334 10.373 13.3334 10.8333C13.3334 11.2935 13.7065 11.6666 14.1667 11.6666Z" fill="#136451"/>
                                        <path d="M14.1667 14.9999C14.627 14.9999 15.0001 14.6268 15.0001 14.1666C15.0001 13.7063 14.627 13.3333 14.1667 13.3333C13.7065 13.3333 13.3334 13.7063 13.3334 14.1666C13.3334 14.6268 13.7065 14.9999 14.1667 14.9999Z" fill="#136451"/>
                                        <path d="M10.8334 10.8333C10.8334 11.2935 10.4603 11.6666 10.0001 11.6666C9.53984 11.6666 9.16675 11.2935 9.16675 10.8333C9.16675 10.373 9.53984 9.99992 10.0001 9.99992C10.4603 9.99992 10.8334 10.373 10.8334 10.8333Z" fill="#136451"/>
                                        <path d="M10.8334 14.1666C10.8334 14.6268 10.4603 14.9999 10.0001 14.9999C9.53984 14.9999 9.16675 14.6268 9.16675 14.1666C9.16675 13.7063 9.53984 13.3333 10.0001 13.3333C10.4603 13.3333 10.8334 13.7063 10.8334 14.1666Z" fill="#136451"/>
                                        <path d="M5.83342 11.6666C6.29365 11.6666 6.66675 11.2935 6.66675 10.8333C6.66675 10.373 6.29365 9.99992 5.83342 9.99992C5.37318 9.99992 5.00008 10.373 5.00008 10.8333C5.00008 11.2935 5.37318 11.6666 5.83342 11.6666Z" fill="#136451"/>
                                        <path d="M5.83342 14.9999C6.29365 14.9999 6.66675 14.6268 6.66675 14.1666C6.66675 13.7063 6.29365 13.3333 5.83342 13.3333C5.37318 13.3333 5.00008 13.7063 5.00008 14.1666C5.00008 14.6268 5.37318 14.9999 5.83342 14.9999Z" fill="#136451"/>
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M5.83342 1.45825C6.17859 1.45825 6.45842 1.73807 6.45842 2.08325V2.71885C7.01008 2.70824 7.61785 2.70825 8.2863 2.70825H11.7138C12.3822 2.70825 12.9901 2.70824 13.5417 2.71885V2.08325C13.5417 1.73807 13.8216 1.45825 14.1667 1.45825C14.5119 1.45825 14.7917 1.73807 14.7917 2.08325V2.77249C15.0084 2.78901 15.2135 2.80977 15.4076 2.83586C16.3846 2.96722 17.1754 3.24398 17.799 3.86762C18.4227 4.49126 18.6994 5.28205 18.8308 6.25907C18.9584 7.2084 18.9584 8.42142 18.9584 9.95287V11.7136C18.9584 13.245 18.9584 14.4581 18.8308 15.4074C18.6994 16.3845 18.4227 17.1752 17.799 17.7989C17.1754 18.4225 16.3846 18.6993 15.4076 18.8306C14.4583 18.9583 13.2452 18.9583 11.7138 18.9583H8.28641C6.75496 18.9583 5.5419 18.9583 4.59256 18.8306C3.61554 18.6993 2.82475 18.4225 2.20112 17.7989C1.57748 17.1752 1.30072 16.3845 1.16936 15.4074C1.04172 14.4581 1.04174 13.2451 1.04175 11.7136V9.9529C1.04174 8.42144 1.04172 7.20841 1.16936 6.25907C1.30072 5.28205 1.57748 4.49126 2.20112 3.86762C2.82475 3.24398 3.61554 2.96722 4.59256 2.83586C4.78667 2.80977 4.9918 2.78901 5.20842 2.77249V2.08325C5.20842 1.73807 5.48824 1.45825 5.83342 1.45825ZM4.75912 4.07472C3.92071 4.18744 3.43768 4.39883 3.085 4.7515C2.73233 5.10418 2.52094 5.58722 2.40821 6.42562C2.38912 6.56761 2.37316 6.71709 2.35982 6.87492H17.6403C17.627 6.71709 17.611 6.56761 17.5919 6.42563C17.4792 5.58722 17.2678 5.10418 16.9152 4.7515C16.5625 4.39883 16.0794 4.18744 15.241 4.07472C14.3847 3.95958 13.2558 3.95825 11.6667 3.95825H8.33342C6.7444 3.95825 5.61551 3.95958 4.75912 4.07472ZM2.29175 9.99992C2.29175 9.28824 2.29201 8.66886 2.30265 8.12492H17.6975C17.7081 8.66886 17.7084 9.28824 17.7084 9.99992V11.6666C17.7084 13.2556 17.7071 14.3845 17.5919 15.2409C17.4792 16.0793 17.2678 16.5623 16.9152 16.915C16.5625 17.2677 16.0794 17.4791 15.241 17.5918C14.3847 17.7069 13.2558 17.7083 11.6667 17.7083H8.33342C6.7444 17.7083 5.61551 17.7069 4.75912 17.5918C3.92072 17.4791 3.43768 17.2677 3.085 16.915C2.73233 16.5623 2.52094 16.0793 2.40821 15.2409C2.29308 14.3845 2.29175 13.2556 2.29175 11.6666V9.99992Z" fill="#136451"/>
                                    </svg>
                                </div>
                                <span>Feb 26, 2024</span>
                            </div>
                            <span class="minus">-</span>
                            <span class="views">2340 views</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="section-8-home">
        <div class="container">
            <div class="top">
                <h2 class="title">
                    <p>Tập san <span>HALAL</span></p>
                </h2>
                <nav class="tab">
                    <ul id="tab-halal">
                        <li>Chính sách</li>
                        <li>Thông tin thị trường</li>
                        <li>Tiêu chuẩn và Chứng nhận</li>
                        <li>Hợp tác và Phát triển</li>
                        <li>Thông tin hữu ích cho doanh nghiệp</li>
                    </ul>
                </nav>
            </div>
            <div class="bottom">
                <div class="list" id="list-halal">
                    <div class="child">
                        <a href="">
                            <img src="<?= $url ?>/dist/images/section-7-image-1.png" alt="">
                        </a>
                        <div class="infor">
                            <div class="date-and-hour">
                                <div class="date">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 1.76855C4.63388 1.76855 4.84375 1.97842 4.84375 2.2373V2.8623H10.1562V2.2373C10.1562 1.97842 10.3661 1.76855 10.625 1.76855C10.8839 1.76855 11.0937 1.97842 11.0937 2.2373V2.8623H11.875C12.9106 2.8623 13.75 3.70177 13.75 4.7373V12.2373C13.75 13.2729 12.9106 14.1123 11.875 14.1123H3.125C2.08947 14.1123 1.25 13.2729 1.25 12.2373V4.7373C1.25 3.70177 2.08947 2.8623 3.125 2.8623H3.90625V2.2373C3.90625 1.97842 4.11612 1.76855 4.375 1.76855ZM10.1562 3.7998V4.7373C10.1562 4.99619 10.3661 5.20605 10.625 5.20605C10.8839 5.20605 11.0937 4.99619 11.0937 4.7373V3.7998H11.875C12.3927 3.7998 12.8125 4.21954 12.8125 4.7373V6.76855H2.1875V4.7373C2.1875 4.21954 2.60723 3.7998 3.125 3.7998H3.90625V4.7373C3.90625 4.99619 4.11612 5.20605 4.375 5.20605C4.63388 5.20605 4.84375 4.99619 4.84375 4.7373V3.7998H10.1562ZM2.1875 7.70605V12.2373C2.1875 12.7551 2.60723 13.1748 3.125 13.1748H11.875C12.3927 13.1748 12.8125 12.7551 12.8125 12.2373V7.70605H2.1875Z" fill="#414141"/>
                                        </svg>
                                    </div>
                                    <span>21/11/2022</span>
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
                                    <span>09:30</span>
                                </div>
                            </div>
                            <h3><a href="">Lễ công bố thành lập Trung tâm Chứng nhận Halal quốc gia - HALCERT</a></h3>
                        </div>
                    </div>
                    <div class="child">
                        <a href="">
                            <img src="<?= $url ?>/dist/images/section-7-image-1.png" alt="">
                        </a>
                        <div class="infor">
                            <div class="date-and-hour">
                                <div class="date">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 1.76855C4.63388 1.76855 4.84375 1.97842 4.84375 2.2373V2.8623H10.1562V2.2373C10.1562 1.97842 10.3661 1.76855 10.625 1.76855C10.8839 1.76855 11.0937 1.97842 11.0937 2.2373V2.8623H11.875C12.9106 2.8623 13.75 3.70177 13.75 4.7373V12.2373C13.75 13.2729 12.9106 14.1123 11.875 14.1123H3.125C2.08947 14.1123 1.25 13.2729 1.25 12.2373V4.7373C1.25 3.70177 2.08947 2.8623 3.125 2.8623H3.90625V2.2373C3.90625 1.97842 4.11612 1.76855 4.375 1.76855ZM10.1562 3.7998V4.7373C10.1562 4.99619 10.3661 5.20605 10.625 5.20605C10.8839 5.20605 11.0937 4.99619 11.0937 4.7373V3.7998H11.875C12.3927 3.7998 12.8125 4.21954 12.8125 4.7373V6.76855H2.1875V4.7373C2.1875 4.21954 2.60723 3.7998 3.125 3.7998H3.90625V4.7373C3.90625 4.99619 4.11612 5.20605 4.375 5.20605C4.63388 5.20605 4.84375 4.99619 4.84375 4.7373V3.7998H10.1562ZM2.1875 7.70605V12.2373C2.1875 12.7551 2.60723 13.1748 3.125 13.1748H11.875C12.3927 13.1748 12.8125 12.7551 12.8125 12.2373V7.70605H2.1875Z" fill="#414141"/>
                                        </svg>
                                    </div>
                                    <span>21/11/2022</span>
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
                                    <span>09:30</span>
                                </div>
                            </div>
                            <h3><a href="">Lễ công bố thành lập Trung tâm Chứng nhận Halal quốc gia - HALCERT</a></h3>
                        </div>
                    </div>
                    <div class="child">
                        <a href="">
                            <img src="<?= $url ?>/dist/images/section-7-image-1.png" alt="">
                        </a>
                        <div class="infor">
                            <div class="date-and-hour">
                                <div class="date">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 1.76855C4.63388 1.76855 4.84375 1.97842 4.84375 2.2373V2.8623H10.1562V2.2373C10.1562 1.97842 10.3661 1.76855 10.625 1.76855C10.8839 1.76855 11.0937 1.97842 11.0937 2.2373V2.8623H11.875C12.9106 2.8623 13.75 3.70177 13.75 4.7373V12.2373C13.75 13.2729 12.9106 14.1123 11.875 14.1123H3.125C2.08947 14.1123 1.25 13.2729 1.25 12.2373V4.7373C1.25 3.70177 2.08947 2.8623 3.125 2.8623H3.90625V2.2373C3.90625 1.97842 4.11612 1.76855 4.375 1.76855ZM10.1562 3.7998V4.7373C10.1562 4.99619 10.3661 5.20605 10.625 5.20605C10.8839 5.20605 11.0937 4.99619 11.0937 4.7373V3.7998H11.875C12.3927 3.7998 12.8125 4.21954 12.8125 4.7373V6.76855H2.1875V4.7373C2.1875 4.21954 2.60723 3.7998 3.125 3.7998H3.90625V4.7373C3.90625 4.99619 4.11612 5.20605 4.375 5.20605C4.63388 5.20605 4.84375 4.99619 4.84375 4.7373V3.7998H10.1562ZM2.1875 7.70605V12.2373C2.1875 12.7551 2.60723 13.1748 3.125 13.1748H11.875C12.3927 13.1748 12.8125 12.7551 12.8125 12.2373V7.70605H2.1875Z" fill="#414141"/>
                                        </svg>
                                    </div>
                                    <span>21/11/2022</span>
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
                                    <span>09:30</span>
                                </div>
                            </div>
                            <h3><a href="">Lễ công bố thành lập Trung tâm Chứng nhận Halal quốc gia - HALCERT</a></h3>
                        </div>
                    </div>
                </div>
                <div class="list" id="list-halal">
                    <div class="child">
                        <a href="">
                            <img src="<?= $url ?>/dist/images/section-7-image-2.png" alt="">
                        </a>
                        <div class="infor">
                            <div class="date-and-hour">
                                <div class="date">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 1.76855C4.63388 1.76855 4.84375 1.97842 4.84375 2.2373V2.8623H10.1562V2.2373C10.1562 1.97842 10.3661 1.76855 10.625 1.76855C10.8839 1.76855 11.0937 1.97842 11.0937 2.2373V2.8623H11.875C12.9106 2.8623 13.75 3.70177 13.75 4.7373V12.2373C13.75 13.2729 12.9106 14.1123 11.875 14.1123H3.125C2.08947 14.1123 1.25 13.2729 1.25 12.2373V4.7373C1.25 3.70177 2.08947 2.8623 3.125 2.8623H3.90625V2.2373C3.90625 1.97842 4.11612 1.76855 4.375 1.76855ZM10.1562 3.7998V4.7373C10.1562 4.99619 10.3661 5.20605 10.625 5.20605C10.8839 5.20605 11.0937 4.99619 11.0937 4.7373V3.7998H11.875C12.3927 3.7998 12.8125 4.21954 12.8125 4.7373V6.76855H2.1875V4.7373C2.1875 4.21954 2.60723 3.7998 3.125 3.7998H3.90625V4.7373C3.90625 4.99619 4.11612 5.20605 4.375 5.20605C4.63388 5.20605 4.84375 4.99619 4.84375 4.7373V3.7998H10.1562ZM2.1875 7.70605V12.2373C2.1875 12.7551 2.60723 13.1748 3.125 13.1748H11.875C12.3927 13.1748 12.8125 12.7551 12.8125 12.2373V7.70605H2.1875Z" fill="#414141"/>
                                        </svg>
                                    </div>
                                    <span>21/11/2022</span>
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
                                    <span>09:30</span>
                                </div>
                            </div>
                            <h3><a href="">Lễ công bố thành lập Trung tâm Chứng nhận Halal quốc gia - HALCERT</a></h3>
                        </div>
                    </div>
                    <div class="child">
                        <a href="">
                            <img src="<?= $url ?>/dist/images/section-7-image-1.png" alt="">
                        </a>
                        <div class="infor">
                            <div class="date-and-hour">
                                <div class="date">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 1.76855C4.63388 1.76855 4.84375 1.97842 4.84375 2.2373V2.8623H10.1562V2.2373C10.1562 1.97842 10.3661 1.76855 10.625 1.76855C10.8839 1.76855 11.0937 1.97842 11.0937 2.2373V2.8623H11.875C12.9106 2.8623 13.75 3.70177 13.75 4.7373V12.2373C13.75 13.2729 12.9106 14.1123 11.875 14.1123H3.125C2.08947 14.1123 1.25 13.2729 1.25 12.2373V4.7373C1.25 3.70177 2.08947 2.8623 3.125 2.8623H3.90625V2.2373C3.90625 1.97842 4.11612 1.76855 4.375 1.76855ZM10.1562 3.7998V4.7373C10.1562 4.99619 10.3661 5.20605 10.625 5.20605C10.8839 5.20605 11.0937 4.99619 11.0937 4.7373V3.7998H11.875C12.3927 3.7998 12.8125 4.21954 12.8125 4.7373V6.76855H2.1875V4.7373C2.1875 4.21954 2.60723 3.7998 3.125 3.7998H3.90625V4.7373C3.90625 4.99619 4.11612 5.20605 4.375 5.20605C4.63388 5.20605 4.84375 4.99619 4.84375 4.7373V3.7998H10.1562ZM2.1875 7.70605V12.2373C2.1875 12.7551 2.60723 13.1748 3.125 13.1748H11.875C12.3927 13.1748 12.8125 12.7551 12.8125 12.2373V7.70605H2.1875Z" fill="#414141"/>
                                        </svg>
                                    </div>
                                    <span>21/11/2022</span>
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
                                    <span>09:30</span>
                                </div>
                            </div>
                            <h3><a href="">Lễ công bố thành lập Trung tâm Chứng nhận Halal quốc gia - HALCERT</a></h3>
                        </div>
                    </div>
                    <div class="child">
                        <a href="">
                            <img src="<?= $url ?>/dist/images/section-7-image-1.png" alt="">
                        </a>
                        <div class="infor">
                            <div class="date-and-hour">
                                <div class="date">
                                    <div class="icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" width="15" height="16" viewBox="0 0 15 16" fill="none">
                                            <path fill-rule="evenodd" clip-rule="evenodd" d="M4.375 1.76855C4.63388 1.76855 4.84375 1.97842 4.84375 2.2373V2.8623H10.1562V2.2373C10.1562 1.97842 10.3661 1.76855 10.625 1.76855C10.8839 1.76855 11.0937 1.97842 11.0937 2.2373V2.8623H11.875C12.9106 2.8623 13.75 3.70177 13.75 4.7373V12.2373C13.75 13.2729 12.9106 14.1123 11.875 14.1123H3.125C2.08947 14.1123 1.25 13.2729 1.25 12.2373V4.7373C1.25 3.70177 2.08947 2.8623 3.125 2.8623H3.90625V2.2373C3.90625 1.97842 4.11612 1.76855 4.375 1.76855ZM10.1562 3.7998V4.7373C10.1562 4.99619 10.3661 5.20605 10.625 5.20605C10.8839 5.20605 11.0937 4.99619 11.0937 4.7373V3.7998H11.875C12.3927 3.7998 12.8125 4.21954 12.8125 4.7373V6.76855H2.1875V4.7373C2.1875 4.21954 2.60723 3.7998 3.125 3.7998H3.90625V4.7373C3.90625 4.99619 4.11612 5.20605 4.375 5.20605C4.63388 5.20605 4.84375 4.99619 4.84375 4.7373V3.7998H10.1562ZM2.1875 7.70605V12.2373C2.1875 12.7551 2.60723 13.1748 3.125 13.1748H11.875C12.3927 13.1748 12.8125 12.7551 12.8125 12.2373V7.70605H2.1875Z" fill="#414141"/>
                                        </svg>
                                    </div>
                                    <span>21/11/2022</span>
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
                                    <span>09:30</span>
                                </div>
                            </div>
                            <h3><a href="">Lễ công bố thành lập Trung tâm Chứng nhận Halal quốc gia - HALCERT</a></h3>
                        </div>
                    </div>
                </div>
                <a href="" class="view-more">XEM THÊM</a>
            </div>
        </div>
    </div>
</main>

<?php get_footer(); ?>