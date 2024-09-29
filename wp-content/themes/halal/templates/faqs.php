<?php 
/* Template Name: FAQS */
$id = get_the_ID();
$faq = get_field('faq', $id);

get_header() ?>
<main>
    <?php include('section/section-banner.php') ?>
    <div class="section-faqs fade-in">
        <div class="container">
            <div class="left fade-in">
                <?php foreach($faq as $item): ?>
                    <div class="child-faq">
                        <div class="question">
                            <span class="title"><?= $item['question'] ?></span>
                            <div class="icon">
                                <div id="show-answer" class="plus-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="14" viewBox="0 0 14 14" fill="none">
                                        <path d="M13 7.75H1C0.59 7.75 0.25 7.41 0.25 7C0.25 6.59 0.59 6.25 1 6.25H13C13.41 6.25 13.75 6.59 13.75 7C13.75 7.41 13.41 7.75 13 7.75Z" fill="#136451"/>
                                        <path d="M7 13.75C6.59 13.75 6.25 13.41 6.25 13V1C6.25 0.59 6.59 0.25 7 0.25C7.41 0.25 7.75 0.59 7.75 1V13C7.75 13.41 7.41 13.75 7 13.75Z" fill="#136451"/>
                                    </svg>
                                </div>
                                <div id="hide-answer" class="minus-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
                                        <path d="M18 12.75H6C5.59 12.75 5.25 12.41 5.25 12C5.25 11.59 5.59 11.25 6 11.25H18C18.41 11.25 18.75 11.59 18.75 12C18.75 12.41 18.41 12.75 18 12.75Z" fill="#136451"/>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <p id="answer-question" class="answer">
                            <?= $item['answer'] ?>
                        </p>
                    </div>
                <?php endforeach ?>
            </div>
            <div class="right fade-in">
                <h2 class="title">Đặt câu hỏi cho chúng tôi</h2>
                <?php echo do_shortcode('[contact-form-7 id="823" title="Form đặt câu hỏi"]'); ?>
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

    var faqStatus = getCookie('faq_status');
    if (faqStatus === 'success') {
        alert('Để lại lời nhắn thành công!');
    } else if (faqStatus === 'failed') {
        alert('Gửi form không thành công. Vui lòng thử lại!');
    }

    // Delete the cookie after showing the alert
    document.cookie = 'faq_status=; Max-Age=0; path=/;';
});
</script>