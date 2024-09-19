<?php 
/* Template Name: Đăng ký chứng nhận */
$id = get_the_ID();
$register_cretify = get_field('register-cretify', $id);

$url = get_template_directory_uri();
get_header(); ?>
<main>
    <?php include('section/section-banner.php') ?>
    <div class="section-register-cretify fade-in">
        <img class="background" src="<?= $url ?>/dist/images/background-register.png" alt="">
        <div class="container">
            <h2 class="title"><?= $register_cretify['title'] ?></h2>
            <div class="description">
                <?= $register_cretify['description'] ?>
            </div>
            <div class="form">
                <form action="<?php echo esc_url(admin_url('admin-post.php')); ?>" method="post">
                    <?php if (pll_current_language() == 'en-us') : ?>
                        <div class="line line-1">
                            <div class="form-group">
                                <label>Organization name</label>
                                <input type="text" name="org-name" placeholder="Enter your organization's name" required> 
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="org-address" placeholder="Enter your organization's address" required> 
                            </div>
                        </div>
                        <h3>Organization representative</h3>
                        <div class="line line-2">
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="text" name="org-rep-name" placeholder="Enter the representative's full name" required>
                            </div>
                        </div>
                        <div class="line line-3">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="org-rep-address" placeholder="Enter the representative's address" required> 
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="org-rep-position" placeholder="Enter the representative's position" required> 
                            </div>
                        </div>
                        <div class="line line-4">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="text" name="org-rep-phone" placeholder="Enter the representative's phone number" required>
                            </div>
                        </div>
                        <div class="line line-5">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="org-rep-email" placeholder="Enter the representative's e-mail" required> 
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" name="org-rep-fax" placeholder="Enter the representative's full fax" required> 
                            </div>
                        </div>
                        <h3>Contact person</h3>
                        <div class="line line-6">
                            <div class="form-group">
                                <label>Full name</label>
                                <input type="text" name="contact-name" placeholder="Enter the contact's full name" required>
                            </div>
                        </div>
                        <div class="line line-7">
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="contact-address" placeholder="Enter the contact's address" required> 
                            </div>
                            <div class="form-group">
                                <label>Position</label>
                                <input type="text" name="contact-position" placeholder="Enter the contact's position" required> 
                            </div>
                        </div>
                        <div class="line line-8">
                            <div class="form-group">
                                <label>Phone number</label>
                                <input type="text" name="contact-phone" placeholder="Enter the contact's phone number" required>
                            </div>
                        </div>
                        <div class="line line-9">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="contact-email" placeholder="Enter the contact's e-mail" required> 
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" name="contact-fax" placeholder="Enter the contact's fax" required> 
                            </div>
                        </div>
                    <?php else: ?>
                        <div class="line line-1">
                            <div class="form-group">
                                <label>Tên tổ chức</label>
                                <input type="text" name="org-name" placeholder="Enter your organization's name" required> 
                            </div>
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="org-address" placeholder="Nhập địa chỉ tổ chức của bạn" required> 
                            </div>
                        </div>
                        <h3>Đại diện tổ chức</h3>
                        <div class="line line-2">
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <input type="text" name="org-rep-name" placeholder="Nhập họ và tên của đại diện" required>
                            </div>
                        </div>
                        <div class="line line-3">
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="org-rep-address" placeholder="Nhập địa chỉ của đại diện" required> 
                            </div>
                            <div class="form-group">
                                <label>Chức vụ</label>
                                <input type="text" name="org-rep-position" placeholder="Nhập chức vụ của đại diện" required> 
                            </div>
                        </div>
                        <div class="line line-4">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" name="org-rep-phone" placeholder="Nhập số điện thoại của đại diện" required>
                            </div>
                        </div>
                        <div class="line line-5">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="org-rep-email" placeholder="Nhập e-mail của đại diện" required> 
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" name="org-rep-fax" placeholder="Nhập số fax của đại diện" required> 
                            </div>
                        </div>
                        <h3>Người liên hệ</h3>
                        <div class="line line-6">
                            <div class="form-group">
                                <label>Họ và tên</label>
                                <input type="text" name="contact-name" placeholder="Nhập họ và tên của người liên hệ" required>
                            </div>
                        </div>
                        <div class="line line-7">
                            <div class="form-group">
                                <label>Địa chỉ</label>
                                <input type="text" name="contact-address" placeholder="Nhập địa chỉ của người liên hệ" required> 
                            </div>
                            <div class="form-group">
                                <label>Chức vụ</label>
                                <input type="text" name="contact-position" placeholder="Nhập chức vụ của người liên hệ" required> 
                            </div>
                        </div>
                        <div class="line line-8">
                            <div class="form-group">
                                <label>Số điện thoại</label>
                                <input type="text" name="contact-phone" placeholder="Nhập số điện thoại của người liên hệ" required>
                            </div>
                        </div>
                        <div class="line line-9">
                            <div class="form-group">
                                <label>E-mail</label>
                                <input type="email" name="contact-email" placeholder="Nhập e-mail của người liên hệ" required> 
                            </div>
                            <div class="form-group">
                                <label>Fax</label>
                                <input type="text" name="contact-fax" placeholder="Nhập số fax của người liên hệ" required> 
                            </div>
                        </div>
                    <?php endif ?>
                    <div class="form-register">
                        <a href="">
                            <span><?= (pll_current_language() == 'en-us') ? "Certification registration form" : "Form đăng ký chứng nhận" ?></span>
                            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="24" viewBox="0 0 25 24" fill="none">
                                <path d="M12.942 15.6051C12.8284 15.7294 12.6677 15.8002 12.4992 15.8002C12.3308 15.8002 12.1701 15.7294 12.0564 15.6051L8.8564 12.1051C8.6328 11.8605 8.6498 11.481 8.89436 11.2574C9.13892 11.0338 9.51844 11.0508 9.74204 11.2953L11.8992 13.6548V4.8002C11.8992 4.46882 12.1679 4.2002 12.4992 4.2002C12.8306 4.2002 13.0992 4.46882 13.0992 4.8002V13.6548L15.2564 11.2953C15.48 11.0508 15.8595 11.0338 16.1041 11.2574C16.3486 11.481 16.3656 11.8605 16.142 12.1051L12.942 15.6051Z" fill="#414141"/>
                                <path d="M5.89922 14.4002C5.89922 14.0688 5.63059 13.8002 5.29922 13.8002C4.96785 13.8002 4.69922 14.0688 4.69922 14.4002V14.4441C4.6992 15.5382 4.69919 16.42 4.79244 17.1136C4.88925 17.8337 5.09637 18.44 5.5779 18.9215C6.05943 19.403 6.66573 19.6102 7.38582 19.707C8.07939 19.8002 8.96125 19.8002 10.0553 19.8002H14.9431C16.0372 19.8002 16.919 19.8002 17.6126 19.707C18.3327 19.6102 18.939 19.403 19.4205 18.9215C19.9021 18.44 20.1092 17.8337 20.206 17.1136C20.2993 16.42 20.2992 15.5382 20.2992 14.4441V14.4002C20.2992 14.0688 20.0306 13.8002 19.6992 13.8002C19.3679 13.8002 19.0992 14.0688 19.0992 14.4002C19.0992 15.5485 19.0979 16.3494 19.0167 16.9537C18.9378 17.5407 18.7934 17.8516 18.572 18.073C18.3506 18.2944 18.0397 18.4388 17.4527 18.5177C16.8484 18.5989 16.0476 18.6002 14.8992 18.6002H10.0992C8.95089 18.6002 8.15 18.5989 7.54572 18.5177C6.9587 18.4388 6.64784 18.2944 6.42643 18.073C6.20502 17.8516 6.06066 17.5407 5.98174 16.9537C5.90049 16.3494 5.89922 15.5485 5.89922 14.4002Z" fill="#414141"/>
                            </svg>
                        </a>
                    </div>
                    <div class="line-10">
                        <label for="file">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                    <path d="M18.4206 8.72038C17.8096 7.31639 16.7551 6.15146 15.4187 5.40411C14.0823 4.65676 12.5377 4.36822 11.0216 4.58269C9.5055 4.79717 8.10155 5.50284 7.02488 6.59156C5.94821 7.68028 5.25821 9.092 5.06062 10.6104C4.10721 10.8387 3.27084 11.4092 2.71036 12.2136C2.14988 13.0179 1.90431 14.0001 2.02029 14.9736C2.13627 15.9471 2.60572 16.8441 3.33949 17.4942C4.07326 18.1444 5.02025 18.5024 6.00062 18.5004C6.26584 18.5004 6.52019 18.395 6.70773 18.2075C6.89527 18.02 7.00062 17.7656 7.00062 17.5004C7.00062 17.2352 6.89527 16.9808 6.70773 16.7933C6.52019 16.6057 6.26584 16.5004 6.00062 16.5004C5.47019 16.5004 4.96148 16.2897 4.58641 15.9146C4.21134 15.5395 4.00062 15.0308 4.00062 14.5004C4.00062 13.97 4.21134 13.4612 4.58641 13.0862C4.96148 12.7111 5.47019 12.5004 6.00062 12.5004C6.26584 12.5004 6.52019 12.395 6.70773 12.2075C6.89527 12.02 7.00062 11.7656 7.00062 11.5004C7.00318 10.3177 7.42491 9.17414 8.19089 8.27297C8.95688 7.3718 10.0175 6.77133 11.1844 6.57826C12.3512 6.38518 13.5488 6.61199 14.5642 7.21839C15.5796 7.82479 16.3472 8.77152 16.7306 9.89038C16.7878 10.0622 16.8905 10.2153 17.0279 10.3333C17.1653 10.4513 17.3321 10.5298 17.5106 10.5604C18.1767 10.6863 18.7805 11.034 19.2236 11.5469C19.6668 12.0598 19.9232 12.7077 19.951 13.385C19.9789 14.0623 19.7765 14.7291 19.3769 15.2766C18.9774 15.8242 18.4041 16.2203 17.7506 16.4004C17.4934 16.4667 17.273 16.6325 17.138 16.8613C17.0029 17.0901 16.9643 17.3631 17.0306 17.6204C17.0969 17.8776 17.2627 18.098 17.4915 18.2331C17.7203 18.3681 17.9934 18.4067 18.2506 18.3404C19.303 18.0623 20.2359 17.4484 20.9076 16.5918C21.5794 15.7353 21.9532 14.683 21.9725 13.5947C21.9917 12.5063 21.6552 11.4414 21.0142 10.5617C20.3731 9.68198 19.4625 9.03548 18.4206 8.72038ZM12.7106 10.7904C12.6155 10.6993 12.5034 10.628 12.3806 10.5804C12.1372 10.4804 11.8641 10.4804 11.6206 10.5804C11.4979 10.628 11.3857 10.6993 11.2906 10.7904L8.29062 13.7904C8.10232 13.9787 7.99653 14.2341 7.99653 14.5004C7.99653 14.7667 8.10232 15.0221 8.29062 15.2104C8.47893 15.3987 8.73432 15.5045 9.00062 15.5045C9.26692 15.5045 9.52232 15.3987 9.71062 15.2104L11.0006 13.9104V19.5004C11.0006 19.7656 11.106 20.02 11.2935 20.2075C11.4811 20.395 11.7354 20.5004 12.0006 20.5004C12.2658 20.5004 12.5202 20.395 12.7077 20.2075C12.8953 20.02 13.0006 19.7656 13.0006 19.5004V13.9104L14.2906 15.2104C14.3836 15.3041 14.4942 15.3785 14.616 15.4293C14.7379 15.48 14.8686 15.5062 15.0006 15.5062C15.1326 15.5062 15.2633 15.48 15.3852 15.4293C15.5071 15.3785 15.6177 15.3041 15.7106 15.2104C15.8044 15.1174 15.8787 15.0068 15.9295 14.885C15.9803 14.7631 16.0064 14.6324 16.0064 14.5004C16.0064 14.3684 15.9803 14.2377 15.9295 14.1158C15.8787 13.9939 15.8044 13.8833 15.7106 13.7904L12.7106 10.7904Z" fill="#3CA333"/>
                                </svg>
                            </div>
                            <span><?= (pll_current_language() == 'en-us') ? "Upload the completed form file" : "Tải lên file biểu mẫu đã điền" ?></span>
                        </label>
                        <input type="file" name="file-upload" id="file">
                    </div>
                    <button type="submit"><?= (pll_current_language() == 'en-us') ? "Confirm" : "Xác nhận" ?></button>

                    <input type="hidden" name="action" value="submit_cretify_form">
                    <?php wp_nonce_field('submit_cretify_form', 'cretify_form_nonce'); ?>
                </form> 
                <div class="notice">
                    <?php if (pll_current_language() == 'en-us') : ?>
                        <h3>Note:</h3>
                        <strong>THE FOLLOWING DOCUMENTS/DOCUMENTS ARE RECOMMENDED TO BE ATTACHED TO THIS REGISTRATION FILE:</strong>
                    <?php else: ?>
                        <h3>Lưu ý:</h3>
                        <strong>ĐỀ NGHỊ GỬI KÈM THEO FILE ĐĂNG KÝ NÀY CÁC HỒ SƠ/ TÀI LIỆU SAU:</strong>
                    <?php endif ?>
                    <ul>
                        <?php foreach($register_cretify['note']['list_note'] as $item): ?>
                            <li><?= $item['text'] ?></li>
                        <?php endforeach ?>
                    </ul>
                    <div class="infor">
                        <div class="child">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="21" height="21" viewBox="0 0 21 21" fill="none">
                                    <path d="M18.3096 16.4384C18.3096 16.7384 18.243 17.0467 18.1013 17.3467C17.9596 17.6467 17.7763 17.9301 17.5346 18.1967C17.1263 18.6467 16.6763 18.9717 16.168 19.1801C15.668 19.3884 15.1263 19.4967 14.543 19.4967C13.693 19.4967 12.7846 19.2967 11.8263 18.8884C10.868 18.4801 9.90964 17.9301 8.95964 17.2384C8.0013 16.5384 7.09297 15.7634 6.2263 14.9051C5.36797 14.0384 4.59297 13.1301 3.9013 12.1801C3.21797 11.2301 2.66797 10.2801 2.26797 9.33841C1.86797 8.38841 1.66797 7.48008 1.66797 6.61341C1.66797 6.04674 1.76797 5.50508 1.96797 5.00508C2.16797 4.49674 2.48464 4.03008 2.9263 3.61341C3.45964 3.08841 4.04297 2.83008 4.65964 2.83008C4.89297 2.83008 5.1263 2.88008 5.33464 2.98008C5.5513 3.08008 5.74297 3.23008 5.89297 3.44674L7.8263 6.17175C7.9763 6.38008 8.08464 6.57175 8.15964 6.75508C8.23464 6.93008 8.2763 7.10508 8.2763 7.26341C8.2763 7.46341 8.21797 7.66341 8.1013 7.85508C7.99297 8.04674 7.83464 8.24674 7.63464 8.44674L7.0013 9.10508C6.90964 9.19674 6.86797 9.30508 6.86797 9.43841C6.86797 9.50508 6.8763 9.56341 6.89297 9.63008C6.91797 9.69674 6.94297 9.74674 6.95964 9.79674C7.10964 10.0717 7.36797 10.4301 7.73464 10.8634C8.10964 11.2967 8.50964 11.7384 8.94297 12.1801C9.39297 12.6217 9.8263 13.0301 10.268 13.4051C10.7013 13.7717 11.0596 14.0217 11.343 14.1717C11.3846 14.1884 11.4346 14.2134 11.493 14.2384C11.5596 14.2634 11.6263 14.2717 11.7013 14.2717C11.843 14.2717 11.9513 14.2217 12.043 14.1301L12.6763 13.5051C12.8846 13.2967 13.0846 13.1384 13.2763 13.0384C13.468 12.9217 13.6596 12.8634 13.868 12.8634C14.0263 12.8634 14.193 12.8967 14.3763 12.9717C14.5596 13.0467 14.7513 13.1551 14.9596 13.2967L17.718 15.2551C17.9346 15.4051 18.0846 15.5801 18.1763 15.7884C18.2596 15.9967 18.3096 16.2051 18.3096 16.4384Z" stroke="#136451" stroke-width="2" stroke-miterlimit="10"/>
                                    <path d="M15.4167 8.66276C15.4167 8.16276 15.025 7.39609 14.4417 6.77109C13.9083 6.19609 13.2 5.74609 12.5 5.74609" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M18.3333 8.66341C18.3333 5.43841 15.725 2.83008 12.5 2.83008" stroke="#136451" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="right">
                                <p>Hotline</p>
                                <span><?= $register_cretify['phone_number'] ?></span>
                            </div>
                        </div>
                        <div class="child">
                            <div class="icon">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="21" viewBox="0 0 20 21" fill="none">
                                    <path d="M14.168 17.2467H5.83464C3.33464 17.2467 1.66797 15.9967 1.66797 13.0801V7.24675C1.66797 4.33008 3.33464 3.08008 5.83464 3.08008H14.168C16.668 3.08008 18.3346 4.33008 18.3346 7.24675V13.0801C18.3346 15.9967 16.668 17.2467 14.168 17.2467Z" stroke="#136451" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                    <path d="M14.1654 7.66406L11.557 9.7474C10.6987 10.4307 9.29036 10.4307 8.43203 9.7474L5.83203 7.66406" stroke="#136451" stroke-width="2" stroke-miterlimit="10" stroke-linecap="round" stroke-linejoin="round"/>
                                </svg>
                            </div>
                            <div class="right">
                                <p>Email</p>
                                <span><?= $register_cretify['email'] ?></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>
<?php get_footer() ?>