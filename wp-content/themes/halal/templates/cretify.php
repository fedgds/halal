<?php 
/* Template Name: Chứng nhận */
get_header(); ?>
<main>
    <?php include('section/section-cretify.php') ?>
    <div class="section-cretify">
        <div class="container">  
            <div class="left">
                <nav class="list-tab" id="list-tab-cretify">
                    <ul>
                        <li>TCVN</li>
                        <li>GSO</li>
                        <li>OIS/SMIIC</li>
                        <li>MS (Malaysia)</li>
                        <li>Indonesia</li>
                    </ul>
                </nav>
            </div>
            <div class="right" id="list-cretify">
                <div class="child">
                    <ul>
                        <li>
                            <h4>Đơn đăng ký chứng nhận</h4>
                            <span>
                                <p>Lorem Ipsum</p>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.8 11.2002L20 4.0002M20 4.0002H15.725M20 4.0002V8.2752" stroke="#414141" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20 12C20 15.7712 20 17.6569 18.8284 18.8284C17.6569 20 15.7712 20 12 20C8.22876 20 6.34315 20 5.17157 18.8284C4 17.6569 4 15.7712 4 12C4 8.22876 4 6.34315 5.17157 5.17157C6.34315 4 8.22876 4 12 4" stroke="#414141" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li>
                            <h4>Đơn đăng ký chứng nhận</h4>
                            <span>
                                <p>Lorem Ipsum</p>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.8 11.2002L20 4.0002M20 4.0002H15.725M20 4.0002V8.2752" stroke="#414141" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20 12C20 15.7712 20 17.6569 18.8284 18.8284C17.6569 20 15.7712 20 12 20C8.22876 20 6.34315 20 5.17157 18.8284C4 17.6569 4 15.7712 4 12C4 8.22876 4 6.34315 5.17157 5.17157C6.34315 4 8.22876 4 12 4" stroke="#414141" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </a>
                            </span>
                        </li>
                        <li>
                            <h4>Đơn đăng ký chứng nhận</h4>
                            <span>
                                <p>Lorem Ipsum</p>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M12.8 11.2002L20 4.0002M20 4.0002H15.725M20 4.0002V8.2752" stroke="#414141" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                                        <path d="M20 12C20 15.7712 20 17.6569 18.8284 18.8284C17.6569 20 15.7712 20 12 20C8.22876 20 6.34315 20 5.17157 18.8284C4 17.6569 4 15.7712 4 12C4 8.22876 4 6.34315 5.17157 5.17157C6.34315 4 8.22876 4 12 4" stroke="#414141" stroke-width="1.5" stroke-linecap="round"/>
                                    </svg>
                                </a>
                            </span>
                        </li>
                    </ul>
                </div>
            </div>
        </div>     
    </div>
</main>
<?php get_footer(); ?>
<script>
    document.addEventListener('DOMContentLoaded', function () {
        const tabs = document.querySelectorAll('#list-tab-cretify li');
        const cretify = document.querySelectorAll('#list-cretify .child');

        tabs[0].classList.add('active');
        cretify[0].classList.add('active');

        tabs.forEach((tab, index) => {
            tab.addEventListener('click', () => {
                setActiveTab(index);
            });
        });

        function setActiveTab(activeIndex) {
            tabs.forEach(t => t.classList.remove('active'));
            cretify.forEach(p => p.classList.remove('active'));

            tabs[activeIndex].classList.add('active');
            cretify[activeIndex].classList.add('active');
        }
    });
</script>