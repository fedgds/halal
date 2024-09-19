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
            <?php if (pll_current_language() == 'en-us') : ?>
                <div class="right fade-in">
                    <h2 class="title">Ask us questions</h2>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                        <h4>Contact information</h4>
                        <div class="line line-1">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="your-email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="">Phone number</label>
                                <input type="text" name="your-phone" placeholder="Phone number" required>
                            </div>
                        </div>
                        <h4>Need for advice</h4>
                        <div class="line line-2">
                            <div class="form-group">
                                <label for="">Need</label>
                                <select name="your-demand" id="">
                                    <option value="">Select your consulting needs</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="line line-3">
                            <div class="form-group">
                                <label for="">Content</label>
                                <textarea name="content" id="" placeholder="Enter specific needs content"></textarea>
                            </div>
                        </div>
                        <button type="submit">Submit a question</button>

                        <input type="hidden" name="action" value="submit_faq_form">
                        <?php wp_nonce_field('submit_faq_form', 'faq_form_nonce'); ?>
                    </form>
                </div>
            <?php else: ?>
                <div class="right fade-in">
                    <h2 class="title">Đặt câu hỏi cho chúng tôi</h2>
                    <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                        <h4>Thông tin liên hệ</h4>
                        <div class="line line-1">
                            <div class="form-group">
                                <label for="">Email</label>
                                <input type="email" name="your-email" placeholder="Email" required>
                            </div>
                            <div class="form-group">
                                <label for="">Số điện thoại</label>
                                <input type="text" name="your-phone" placeholder="Số điện thoại" required>
                            </div>
                        </div>
                        <h4>Nhu cầu muốn tư vấn</h4>
                        <div class="line line-2">
                            <div class="form-group">
                                <label for="">Nhu cầu</label>
                                <select name="your-demand" id="">
                                    <option value="">Chọn nhu cầu tư vấn</option>
                                    <option value="">Option 1</option>
                                    <option value="">Option 2</option>
                                </select>
                            </div>
                        </div>
                        <div class="line line-3">
                            <div class="form-group">
                                <label for="">Nội dung</label>
                                <textarea name="content" id="" placeholder="Nhập nội dung nhu cầu cụ thể"></textarea>
                            </div>
                        </div>
                        <button type="submit">Gửi câu hỏi</button>

                        <input type="hidden" name="action" value="submit_faq_form">
                        <?php wp_nonce_field('submit_faq_form', 'faq_form_nonce'); ?>
                    </form>
                </div>
            <?php endif ?>
        </div>
    </div>
</main>
<?php get_footer() ?>