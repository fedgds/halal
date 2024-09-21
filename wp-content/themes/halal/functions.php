<?php
/**
 * halal functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package halal
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function halal_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on halal, use a find and replace
		* to change 'halal' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'halal', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'halal' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'halal_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'halal_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function halal_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'halal_content_width', 640 );
}
add_action( 'after_setup_theme', 'halal_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function halal_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'halal' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'halal' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'halal_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function halal_scripts() {
	wp_enqueue_style( 'halal-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'halal-style', 'rtl', 'replace' );

	wp_enqueue_script( 'halal-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'halal_scripts' );

/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}
function custom_date_format() {
    $date = get_the_date('Y-m-d'); 
    return date('d/m/Y', strtotime($date)); 
}
function custom_time_format() {
    return get_the_time('H:i');
}
// Tìm kiếm khách hàng
function customer_search_ajax() {
    $search = $_POST['search'];
    $args = array(
        'post_type' => 'khach-hang',
        'post_status' => 'publish',
        's' => $search,
        'posts_per_page' => -1
    );
    $query = new WP_Query($args);
    $results = array();
    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $customer = get_field('customer', get_the_ID());
            $results[] = array(
                'title' => get_the_title(),
                'address' => $customer['address'],
                'number' => $customer['number'],
                'scope' => $customer['scope'],
                'from' => $customer['effect']['from'],
                'to' => $customer['effect']['to']
            );
        }
    }
    wp_reset_postdata();
    wp_send_json($results);
    wp_die();
}
add_action('wp_ajax_customer_search', 'customer_search_ajax');
add_action('wp_ajax_nopriv_customer_search', 'customer_search_ajax');
// Phân trang khách hàng
function custom_rewrite_rules() {
    add_rewrite_rule(
        'khach-hang/page/([0-9]+)/?$',
        'index.php?pagename=khach-hang&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'custom_rewrite_rules');

function custom_query_vars($vars) {
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'custom_query_vars');

// Tìm kiếm khóa đào tạo
function training_search_ajax() {
    $search = $_POST['search'];
    $from_date = $_POST['from_date'];
    $to_date = $_POST['to_date'];

    $args = array(
        'post_type' => 'dao-tao',
        'post_status' => 'publish',
        'posts_per_page' => -1
    );

    if (!empty($search)) {
        $args['s'] = $search;
    }

    $query = new WP_Query($args);
    $results = array();

    if ($query->have_posts()) {
        while ($query->have_posts()) {
            $query->the_post();
            $training = get_field('training', get_the_ID());
            $start_date = strtotime($training['start_time']['date']);
            $end_date = strtotime($training['end_time']['date']);

            // Convert input dates to timestamp for comparison
            $from_timestamp = !empty($from_date) ? strtotime(str_replace('/', '-', $from_date)) : null;
            $to_timestamp = !empty($to_date) ? strtotime(str_replace('/', '-', $to_date)) : null;

            // Check if the training overlaps with the selected date range
            $is_in_range = true;
            if ($from_timestamp && $to_timestamp) {
                $is_in_range = ($start_date <= $to_timestamp && $end_date >= $from_timestamp);
            } elseif ($from_timestamp) {
                $is_in_range = ($end_date >= $from_timestamp);
            } elseif ($to_timestamp) {
                $is_in_range = ($start_date <= $to_timestamp);
            }

            if ($is_in_range) {
                $results[] = array(
                    'title' => get_the_title(),
                    'permalink' => get_permalink(),
                    'address' => $training['address'],
                    'start_date' => date('d/m/Y', $start_date),
                    'start_time' => date('H:i:s', strtotime($training['start_time']['time'])),
                    'end_date' => date('d/m/Y', $end_date),
                    'end_time' => date('H:i:s', strtotime($training['end_time']['time']))
                );
            }
        }
    }
    wp_reset_postdata();
    wp_send_json($results);
    wp_die();
}
add_action('wp_ajax_training_search', 'training_search_ajax');
add_action('wp_ajax_nopriv_training_search', 'training_search_ajax');
// Phân trang đào tạo
function training_rewrite_rules() {
    add_rewrite_rule(
        'dao-tao/page/([0-9]+)/?$',
        'index.php?pagename=dao-tao&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'training_rewrite_rules');

function training_query_vars($vars) {
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'training_query_vars');
// Phân trang tin tức
function news_rewrite_rules() {
    add_rewrite_rule(
        'tin-tuc/page/([0-9]+)/?$',
        'index.php?pagename=tin-tuc&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'news_rewrite_rules');

function news_query_vars($vars) {
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'news_query_vars');

// Phân trang sự kiện
function event_rewrite_rules() {
    add_rewrite_rule(
        'su-kien/page/([0-9]+)/?$',
        'index.php?pagename=su-kien&paged=$matches[1]',
        'top'
    );
}
add_action('init', 'event_rewrite_rules');

function event_query_vars($vars) {
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'event_query_vars');

// Phân trang danh mục tập san
function modify_tapsan_query($query) {
    if (!is_admin() && $query->is_main_query() && is_tax('danh_muc_tap_san')) {
        $query->set('post_type', 'tap-san');
        $query->set('posts_per_page', 6);
    }
}
add_action('pre_get_posts', 'modify_tapsan_query');
function tap_san_query_vars($vars) {
    $vars[] = 'paged';
    return $vars;
}
add_filter('query_vars', 'event_query_vars');
// Gửi form liên hệ
function handle_contact_form_submission() {
    if (isset($_POST['action']) && $_POST['action'] == 'submit_contact_form') {
        if (!wp_verify_nonce($_POST['contact_form_nonce'], 'submit_contact_form')) {
            wp_die('Nonce verification failed');
        }

        $name = sanitize_text_field($_POST['your-name']);
        $email = sanitize_email($_POST['your-email']);
        $interest = sanitize_text_field($_POST['your-interest']);
        $phone = sanitize_text_field($_POST['your-phone']);
        $message = sanitize_textarea_field($_POST['your-message']);

        $contact_form = WPCF7_ContactForm::get_instance(6);
        $submission = WPCF7_Submission::get_instance();

        if ($contact_form && !$submission) {
            $submission = WPCF7_Submission::get_instance(
                array(
                    'contact_form' => $contact_form,
                    'posted_data' => array(
                        'your-name' => $name,
                        'your-email' => $email,
                        'your-interest' => $interest,
                        'your-phone' => $phone,
                        'your-message' => $message,
                    ),
                )
            );

            $contact_form->submit();
        }
        // Redirect back to the current page
        $redirect_url = wp_get_referer();
        wp_redirect($redirect_url ? $redirect_url : home_url());
        exit;
    }
}
add_action('admin_post_submit_contact_form', 'handle_contact_form_submission');
add_action('admin_post_nopriv_submit_contact_form', 'handle_contact_form_submission');
// Gửi form faq
function handle_faq_form_submission() {
    if (isset($_POST['action']) && $_POST['action'] == 'submit_faq_form') {
        if (!wp_verify_nonce($_POST['faq_form_nonce'], 'submit_faq_form')) {
            wp_die('Nonce verification failed');
        }

        $email = sanitize_email($_POST['your-email']);
        $phone = sanitize_text_field($_POST['your-phone']);
        $demand = sanitize_text_field($_POST['your-demand']);
        $content = sanitize_textarea_field($_POST['content']);

        $faq_form = WPCF7_ContactForm::get_instance(823);
        $submission = WPCF7_Submission::get_instance();

        if ($faq_form && !$submission) {
            $submission = WPCF7_Submission::get_instance(
                array(
                    'faq_form' => $faq_form,
                    'posted_data' => array(
                        'your-email' => $email,
                        'your-phone' => $phone,
                        'your-demand' => $demand,
                        'content' => $content,
                    ),
                )
            );

            $faq_form->submit();
        }
        // Redirect back to the current page
        $redirect_url = wp_get_referer();
        wp_redirect($redirect_url ? $redirect_url : home_url());
        exit;
    }
}
add_action('admin_post_submit_faq_form', 'handle_faq_form_submission');
add_action('admin_post_nopriv_submit_faq_form', 'handle_faq_form_submission');

// Gửi form đăng ký nhận thông tin(footer)
function handle_register_form_submission() {
    if (isset($_POST['action']) && $_POST['action'] == 'submit_register_form') {
        if (!wp_verify_nonce($_POST['register_form_nonce'], 'submit_register_form')) {
            wp_die('Nonce verification failed');
        }

        $email = sanitize_email($_POST['your-email']);

        $register_form = WPCF7_ContactForm::get_instance(406);
        $submission = WPCF7_Submission::get_instance();

        if ($register_form && !$submission) {
            $submission = WPCF7_Submission::get_instance(
                array(
                    'register_form' => $register_form,
                    'posted_data' => array(
                        'your-email' => $email,
                    ),
                )
            );

            $register_form->submit();
        }
        // Redirect back to the current page
        $redirect_url = wp_get_referer();
        wp_redirect($redirect_url ? $redirect_url : home_url());
        exit;
    }
}
add_action('admin_post_submit_register_form', 'handle_register_form_submission');
add_action('admin_post_nopriv_submit_register_form', 'handle_register_form_submission');

// Gửi form đăng ký chứng nhận
function handle_certify_form_submission() {
    if (isset($_POST['action']) && $_POST['action'] == 'submit_cretify_form') {
        if (!wp_verify_nonce($_POST['cretify_form_nonce'], 'submit_cretify_form')) {
            wp_die('Nonce verification failed');
        }

        // Sanitize and collect form data
        $org_name = sanitize_text_field($_POST['org-name']);
        $org_address = sanitize_text_field($_POST['org-address']);
        $org_rep_name = sanitize_text_field($_POST['org-rep-name']);
        $org_rep_address = sanitize_text_field($_POST['org-rep-address']);
        $org_rep_position = sanitize_text_field($_POST['org-rep-position']);
        $org_rep_phone = sanitize_text_field($_POST['org-rep-phone']);
        $org_rep_email = sanitize_email($_POST['org-rep-email']);
        $org_rep_fax = sanitize_text_field($_POST['org-rep-fax']);
        $contact_name = sanitize_text_field($_POST['contact-name']);
        $contact_address = sanitize_text_field($_POST['contact-address']);
        $contact_position = sanitize_text_field($_POST['contact-position']);
        $contact_phone = sanitize_text_field($_POST['contact-phone']);
        $contact_email = sanitize_email($_POST['contact-email']);
        $contact_fax = sanitize_text_field($_POST['contact-fax']);

        // Handle file upload
        $uploaded_file = $_FILES['file-upload'];
        $upload_overrides = array('test_form' => false);
        $movefile = wp_handle_upload($uploaded_file, $upload_overrides);

        if ($movefile && !isset($movefile['error'])) {
            $file_url = $movefile['url'];
        } else {
            $file_url = '';
            // Handle error if needed
        }

        // Prepare data for Contact Form 7
        $submission_data = array(
            'org-name' => $org_name,
            'org-address' => $org_address,
            'org-rep-name' => $org_rep_name,
            'org-rep-address' => $org_rep_address,
            'org-rep-position' => $org_rep_position,
            'org-rep-phone' => $org_rep_phone,
            'org-rep-email' => $org_rep_email,
            'org-rep-fax' => $org_rep_fax,
            'contact-name' => $contact_name,
            'contact-address' => $contact_address,
            'contact-position' => $contact_position,
            'contact-phone' => $contact_phone,
            'contact-email' => $contact_email,
            'contact-fax' => $contact_fax,
            'file-upload' => $file_url
        );

        $certify_form = WPCF7_ContactForm::get_instance(403);
        $submission = WPCF7_Submission::get_instance();

        if ($certify_form && !$submission) {
            $submission = WPCF7_Submission::get_instance(
                array(
                    'certify_form' => $certify_form,
                    'posted_data' => $submission_data
                )
            );

            $certify_form->submit();
        }
        // Redirect back to the current page
        $redirect_url = wp_get_referer();
        wp_redirect($redirect_url ? $redirect_url : home_url());
        exit;
    }
}
add_action('admin_post_submit_cretify_form', 'handle_certify_form_submission');
add_action('admin_post_nopriv_submit_cretify_form', 'handle_certify_form_submission');

// Tăng lượt xem khi ấn vào trang trang chi tiết tin tức
function update_news_views() {
    if (is_single()) {
        $news_id = get_the_ID();
        // Kiểm tra nếu đã lưu cookie cho bài viết này
        if (!isset($_COOKIE['viewed_news_' . $news_id])) {
            $news = get_field('news', $news_id);
            
            if (isset($news['views'])) {
                $views = intval($news['views']) + 1;
            } else {
                $views = 1;
            }

            $news['views'] = $views;
            update_field('news', $news, $news_id);

            // Đặt cookie với thời hạn 1 giờ
            setcookie('viewed_news_' . $news_id, '1', time() + 3600, '/');
        }
    }
}
add_action('template_redirect', 'update_news_views');

// Tăng lượt xem khi ấn vào trang trang chi tiết sự kiện
function update_event_views() {
    if (is_single()) {
        $event_id = get_the_ID();
        // Kiểm tra nếu đã lưu cookie cho bài viết này
        if (!isset($_COOKIE['viewed_event_' . $event_id])) {
            $event = get_field('event', $event_id);
            
            if (isset($event['views'])) {
                $views = intval($event['views']) + 1;
            } else {
                $views = 1;
            }

            $event['views'] = $views;
            update_field('event', $event, $event_id);
            // Đặt cookie với thời hạn 1 giờ
            setcookie('viewed_event_' . $event_id, '1', time() + 3600, '/');
        }
    }
}
add_action('template_redirect', 'update_event_views');

function update_total_site_views() {
    // Kiểm tra nếu đã lưu cookie cho lượt xem tổng
    if (!isset($_COOKIE['viewed_total_site'])) {
        // Lấy giá trị hiện tại của trường ACF 'total_site_views'
        $total_views = get_field('total_site_views', 'option');
        
        if (isset($total_views)) {
            $total_views = intval($total_views) + 1;
        } else {
            $total_views = 1;
        }

        // Cập nhật giá trị mới vào trường ACF
        update_field('total_site_views', $total_views, 'option');
        
        // Đặt cookie với thời hạn 1 giờ
        setcookie('viewed_total_site', '1', time() + 3600, '/');
    }
}
add_action('wp', 'update_total_site_views');

// Hàm để hiển thị tổng số lượt xem
function display_total_site_views() {
    $total_views = get_field('total_site_views', 'option');
    if (!$total_views) {
        $total_views = 0;
    }
    return number_format($total_views);
}

// Shortcode để hiển thị tổng số lượt xem
function total_site_views_shortcode() {
    return display_total_site_views();
}
add_shortcode('total_site_views', 'total_site_views_shortcode');

function formatDate($date) {
    // Tạo đối tượng DateTime từ định dạng ngày đầu vào
    $dateTime = DateTime::createFromFormat('d/m/Y', $date);
    
    // Kiểm tra xem đối tượng DateTime có hợp lệ không
    if ($dateTime === false) {
        return 'Ngày không hợp lệ';
    }
    
    // Định dạng ngày sử dụng các ký tự định dạng chuẩn
    $formattedDate = $dateTime->format('d-m-Y');
    
    // Tách các phần của ngày
    list($day, $month, $year) = explode('-', $formattedDate);
    
    // Tạo chuỗi kết quả với các từ tiếng Việt
    return "$day, tháng $month, $year";
}
function formatDateEn($dateString) {
    // Tạo đối tượng DateTime từ chuỗi đầu vào
    $date = DateTime::createFromFormat('d/m/Y', $dateString);
    
    // Kiểm tra nếu việc tạo DateTime thành công
    if ($date) {
        // Định dạng lại ngày theo yêu cầu "M d, Y"
        return $date->format('M d, Y');
    } else {
        return "Invalid date format";
    }
}
