<?php 
/* Template Name: Liên hệ */
$id = get_the_ID();
$contact = get_field('contact', $id);

$url = get_template_directory_uri();

get_header(); ?>
<main>
    <?php include('section/section-banner.php') ?>
    <div class="section-contact fade-in">
        <div class="container">
            <h2 class="title">
                <?= (pll_current_language() == 'en') ? "Stay in touch with us" : "Giữ liên lạc với chúng tôi" ?>
            </h2>
            <div class="form-and-infor">
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <h4 class="guide"><?= (pll_current_language() == 'en') ? "Leave a message" : "Để lại lời nhắn" ?></h4>
                    <p>Sorem ipsum dolor sit amet, consectetur adipiscing elit. Nunc vulputate libero et velit interdum, ac aliquet odio mattis.</p>
                    <div class="line line-1">
                        <input type="text" name="your-name" placeholder="<?= (pll_current_language() == 'en') ? "Name" : "Tên" ?>" required>
                        <input type="email" name="your-email" placeholder="Email" required>
                    </div>
                    <div class="line line-2">
                        <select name="your-interest" id="" required>
                            <option value=""><?= (pll_current_language() == 'en') ? "Have an interest in" : "Có hứng thú với" ?></option>
                            <option value="Option 1">Option 1</option>
                            <option value="Option 2">Option 2</option>
                        </select>
                        <input type="tel" name="your-phone" placeholder="<?= (pll_current_language() == 'en') ? "Phone number" : "Số điện thoại" ?>" required>
                    </div>
                    <div class="line line-3">
                        <textarea name="your-message" id="" placeholder="<?= (pll_current_language() == 'en') ? "Message" : "Lời nhắn" ?>" required></textarea>
                    </div>
                    <button type="submit"><?= (pll_current_language() == 'en') ? "Send now" : "Gửi ngay" ?></button>

                    <input type="hidden" name="action" value="submit_contact_form">
                    <?php wp_nonce_field('submit_contact_form', 'contact_form_nonce'); ?>
                </form>
                <div class="infor">
                    <h3 class="title">
                        <?= (pll_current_language() == 'en') ? "HALAL CERTIFICATION CENTER" : "TRUNG TÂM CHỨNG NHẬN HALAL" ?>
                    </h3>
                    <div class="infor-detail">
                        <div class="phone-number">
                            <h4><?= (pll_current_language() == 'en') ? "Call us" : "Gọi cho chúng tôi" ?></h4>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="28" height="28" viewBox="0 0 28 28" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M6.68748 2.38375C8.1077 0.971591 10.4461 1.22295 11.6353 2.81147L13.1065 4.77661C14.0741 6.06914 13.9887 7.87561 12.8401 9.01768L12.5616 9.29467C12.5494 9.33001 12.5199 9.44109 12.5526 9.6522C12.6264 10.1276 13.0234 11.1361 14.69 12.7932C16.356 14.4498 17.3717 14.8464 17.8538 14.9203C18.0723 14.9539 18.1866 14.9226 18.222 14.9103L18.698 14.437C19.7191 13.4217 21.2881 13.2319 22.5523 13.9192L24.7812 15.1308C26.6898 16.1684 27.172 18.7627 25.6083 20.3175L23.951 21.9654C23.4288 22.4846 22.7266 22.9176 21.8696 22.9975C19.7591 23.1942 14.8378 22.9432 9.66704 17.8017C4.83947 13.0016 3.91307 8.81558 3.79585 6.75311L4.66944 6.70347L3.79585 6.75311C3.73659 5.71022 4.22941 4.82787 4.85628 4.20455L6.68748 2.38375ZM10.2344 3.86024C9.64335 3.0707 8.54169 3.00793 7.92139 3.6247L6.09019 5.44551C5.70528 5.82823 5.52009 6.25002 5.54304 6.65382C5.63617 8.29252 6.38435 12.0698 10.901 16.5608C15.6393 21.2722 20.0157 21.4127 21.7072 21.255C22.0528 21.2228 22.3965 21.0433 22.7171 20.7245L24.3744 19.0766C25.0481 18.4067 24.8995 17.187 23.9454 16.6683L21.7165 15.4567C21.101 15.1221 20.3799 15.2325 19.9319 15.6779L19.4005 16.2063L18.7836 15.5858C19.4005 16.2063 19.3997 16.2071 19.3989 16.2079L19.3971 16.2096L19.3936 16.2131L19.386 16.2204L19.3689 16.2363C19.3567 16.2475 19.3426 16.2597 19.3268 16.2729C19.2951 16.2991 19.2561 16.3288 19.2095 16.36C19.1161 16.4226 18.9928 16.4907 18.8378 16.5484C18.5218 16.6661 18.1051 16.7293 17.5885 16.6501C16.5772 16.495 15.2376 15.8056 13.4561 14.0342C11.6752 12.2634 10.9799 10.93 10.8233 9.92048C10.7433 9.40429 10.8071 8.98744 10.9263 8.6712C10.9847 8.51622 11.0535 8.39299 11.1166 8.29979C11.1481 8.2533 11.1781 8.21444 11.2046 8.18287C11.2178 8.16709 11.2301 8.15311 11.2414 8.1409L11.2574 8.12388L11.2647 8.11634L11.2682 8.11282L11.2699 8.11111C11.2708 8.11028 11.2716 8.10945 11.8886 8.72992L11.2716 8.10945L11.6062 7.77673C12.1063 7.27953 12.1763 6.45418 11.7056 5.82537L10.2344 3.86024Z" fill="#136451"/>
                                </svg>
                                <p><?= $contact['phone_number'] ?></p>
                            </span>
                        </div>
                        <div class="address">
                            <h4><?= (pll_current_language() == 'en') ? "Association address" : "Địa chỉ hiệp hội" ?></h4>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M3.25 10.1433C3.25 5.24427 7.15501 1.25 12 1.25C16.845 1.25 20.75 5.24427 20.75 10.1433C20.75 12.5084 20.076 15.0479 18.8844 17.2419C17.6944 19.4331 15.9556 21.3372 13.7805 22.3539C12.6506 22.882 11.3494 22.882 10.2195 22.3539C8.04437 21.3372 6.30562 19.4331 5.11556 17.2419C3.92403 15.0479 3.25 12.5084 3.25 10.1433ZM12 2.75C8.00843 2.75 4.75 6.04748 4.75 10.1433C4.75 12.2404 5.35263 14.5354 6.4337 16.526C7.51624 18.5192 9.04602 20.1496 10.8546 20.995C11.5821 21.335 12.4179 21.335 13.1454 20.995C14.954 20.1496 16.4838 18.5192 17.5663 16.526C18.6474 14.5354 19.25 12.2404 19.25 10.1433C19.25 6.04748 15.9916 2.75 12 2.75ZM12 7.75C10.7574 7.75 9.75 8.75736 9.75 10C9.75 11.2426 10.7574 12.25 12 12.25C13.2426 12.25 14.25 11.2426 14.25 10C14.25 8.75736 13.2426 7.75 12 7.75ZM8.25 10C8.25 7.92893 9.92893 6.25 12 6.25C14.0711 6.25 15.75 7.92893 15.75 10C15.75 12.0711 14.0711 13.75 12 13.75C9.92893 13.75 8.25 12.0711 8.25 10Z" fill="#136451"/>
                                </svg>
                                <p><?= $contact['address'] ?></p>
                            </span>
                        </div>
                        <div class="email">
                            <h4><?= (pll_current_language() == 'en') ? "E-mail address" : "Địa chỉ e-mail" ?></h4>
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                    <path fill-rule="evenodd" clip-rule="evenodd" d="M9.94358 3.25H14.0564C15.8942 3.24998 17.3498 3.24997 18.489 3.40314C19.6614 3.56076 20.6104 3.89288 21.3588 4.64124C22.1071 5.38961 22.4392 6.33856 22.5969 7.51098C22.75 8.65019 22.75 10.1058 22.75 11.9436V12.0564C22.75 13.8942 22.75 15.3498 22.5969 16.489C22.4392 17.6614 22.1071 18.6104 21.3588 19.3588C20.6104 20.1071 19.6614 20.4392 18.489 20.5969C17.3498 20.75 15.8942 20.75 14.0564 20.75H9.94359C8.10583 20.75 6.65019 20.75 5.51098 20.5969C4.33856 20.4392 3.38961 20.1071 2.64124 19.3588C1.89288 18.6104 1.56076 17.6614 1.40314 16.489C1.24997 15.3498 1.24998 13.8942 1.25 12.0564V11.9436C1.24998 10.1058 1.24997 8.65019 1.40314 7.51098C1.56076 6.33856 1.89288 5.38961 2.64124 4.64124C3.38961 3.89288 4.33856 3.56076 5.51098 3.40314C6.65019 3.24997 8.10582 3.24998 9.94358 3.25ZM5.71085 4.88976C4.70476 5.02502 4.12511 5.27869 3.7019 5.7019C3.27869 6.12511 3.02502 6.70476 2.88976 7.71085C2.75159 8.73851 2.75 10.0932 2.75 12C2.75 13.9068 2.75159 15.2615 2.88976 16.2892C3.02502 17.2952 3.27869 17.8749 3.7019 18.2981C4.12511 18.7213 4.70476 18.975 5.71085 19.1102C6.73851 19.2484 8.09318 19.25 10 19.25H14C15.9068 19.25 17.2615 19.2484 18.2892 19.1102C19.2952 18.975 19.8749 18.7213 20.2981 18.2981C20.7213 17.8749 20.975 17.2952 21.1102 16.2892C21.2484 15.2615 21.25 13.9068 21.25 12C21.25 10.0932 21.2484 8.73851 21.1102 7.71085C20.975 6.70476 20.7213 6.12511 20.2981 5.7019C19.8749 5.27869 19.2952 5.02502 18.2892 4.88976C17.2615 4.75159 15.9068 4.75 14 4.75H10C8.09318 4.75 6.73851 4.75159 5.71085 4.88976ZM5.42383 7.51986C5.68901 7.20165 6.16193 7.15866 6.48014 7.42383L8.63903 9.22291C9.57199 10.0004 10.2197 10.5384 10.7666 10.8901C11.2959 11.2306 11.6549 11.3449 12 11.3449C12.3451 11.3449 12.7041 11.2306 13.2334 10.8901C13.7803 10.5384 14.428 10.0004 15.361 9.22291L17.5199 7.42383C17.8381 7.15866 18.311 7.20165 18.5762 7.51986C18.8413 7.83807 18.7983 8.31099 18.4801 8.57617L16.2836 10.4066C15.3973 11.1452 14.6789 11.7439 14.0448 12.1517C13.3843 12.5765 12.7411 12.8449 12 12.8449C11.2589 12.8449 10.6157 12.5765 9.95518 12.1517C9.32112 11.7439 8.60272 11.1452 7.71636 10.4066L5.51986 8.57617C5.20165 8.31099 5.15866 7.83807 5.42383 7.51986Z" fill="#136451"/>
                                </svg>
                                <p><?= $contact['email'] ?></p>
                            </span>
                        </div>
                        <div class="social-media">
                            <h4><?= (pll_current_language() == 'en') ? "Social Media" : "Mạng xã hội" ?></h4>
                            <div class="list">
                                <?php foreach($contact['list_social_media'] as $item): ?>
                                    <a href="<?= $item['link'] ?>">
                                        <img src="<?= $item['image'] ?>" alt="">
                                    </a>
                                <?php endforeach ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mapouter fade-in">
                <div class="gmap_canvas">
                    <?= $contact['map'] ?>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>
<script>
document.addEventListener('DOMContentLoaded', function() {
    function getCookie(name) {
        var nameEQ = name + "=";
        var ca = document.cookie.split(';');
        for(var i=0;i < ca.length;i++) {
            var c = ca[i];
            while (c.charAt(0)==' ') c = c.substring(1,c.length);
            if (c.indexOf(nameEQ) == 0) return c.substring(nameEQ.length,c.length);
        }
        return null;
    }

    if (getCookie('contact_success') === 'true') {
        alert('Để lại lời nhắn thành công!');
        // Delete the cookie after showing the alert
        document.cookie = 'contact_success=; Max-Age=0; path=/;';
    }

    if (getCookie('registration_error') === 'email_exists') {
        alert('Email của bạn đã để lại lời nhắn');
        // Delete the cookie after showing the alert
        document.cookie = 'registration_error=; Max-Age=0; path=/;';
    }
});
</script>