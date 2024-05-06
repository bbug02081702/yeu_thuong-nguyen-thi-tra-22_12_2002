<?php
/**
 * khai bao
 * theme name
 * theme path
 * core: folder path
 */
session_start();
define('THEME_NAME','bbugsoft');
define('THEME_URL', get_stylesheet_directory());
define('CORE_URL', THEME_URL ."/core");

/**
 * Embed file "init.php" file.
 *
 */
require_once(CORE_URL . "/init.php");


// tính năng seo cho các bài viết https
function add_canonical_link() {
	if (is_home() || is_front_page()) { // Kiểm tra nếu trang hiện tại là trang chủ
        echo '<link rel="canonical" href="' . esc_url(home_url('/')) . '" />' . "\n";
    }
    if (is_singular()) { // Chỉ áp dụng cho các trang đơn lẻ (single)
        echo '<link rel="canonical" href="' . esc_url(get_permalink()) . '" />' . "\n";
    }
}
add_action('wp_head', 'add_canonical_link');


// tính năng seo chuyển hướng từ http sang https
function redirect_to_https() {
    if (!is_ssl()) { 
        wp_redirect('https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'], 301); 
        exit();
    }
}
add_action('template_redirect', 'redirect_to_https');

function add_custom_fonts() {
    ?>
    <link rel="dns-prefetch" href="https://fonts.googleapis.com/css2?family=Mulish:wght@200;300;400;500;600;700;800;900&display=swap" rel="stylesheet" media="all">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <?php
}

add_action('wp_head', 'add_custom_fonts');

// tinh nang hien thi thumbnails cho posts khi theme duoc khoi tao
   if(!function_exists('setup_bbugsoft_theme')){
	   function setup_bbugsoft_theme(){
		   /* Declare text domain. */
        $languages_folder = THEME_URL . "/languages";
        load_theme_textdomain(THEME_NAME, $languages_folder);

        /* Automatically add RSS feed links to <head> tag. */
        add_theme_support('automatic-feed-links');
		   
		add_theme_support('post-thumbnails');
		 /* Add post formats. */
        add_theme_support('post-formats', [
            'image',
            'video',
            'gallery',
            'quote',
            'link'
        ]);

        /* Automatically add website_name | website_description to <title> tag. */
        add_theme_support('title-tag');
		   
		/* Register menu. */
        register_nav_menu('primary-menu', __('Primary Menu', THEME_NAME));

        /* Register sidebar. */
        $sidebar = [
            'name' => __('Main Sidebar', THEME_NAME),
            'id' => 'main-sidebar',
            'description' => __('Default Sidebar'),
            'class' => 'main-sidebar',
            'before_title' => '',
            'after_title' => '',
        ];
        register_sidebar($sidebar);
	   }
   }
add_action('init','setup_bbugsoft_theme');

/**
 * Create menu.
 */
if (!function_exists('create_bbugsoft_menu')) {
    function create_vuzic_menu($menu, $tag, $class, $id)
    {
        $menu = [
            'theme_location' => $menu,
            'container' => $tag,
            'container_class' => $class,
            'container_id' => $id,
        ];
        wp_nav_menu($menu);
    }
}

/**
 * Dump data.
 */
if (!function_exists('dd')) {
    function dd()
    {
        $args = func_get_args();
        foreach ($args as $arg) {
            echo '<pre>';
            var_dump($arg);
            echo '</pre>';
            echo '<br>';
        }
        die();
    }
}

// Enable comments for custom post type 'post'
function enable_comments_for_post_type() {
    add_post_type_support( 'post', 'comments' );
}
add_action( 'init', 'enable_comments_for_post_type' );

// Display comments
function display_comments() {
    if ( comments_open() || get_comments_number() ) {
        comments_template();
    }
}




// [posts_grid_our_work category="AWS" posts_per_page="12"]

function display_posts_grid_our_work($atts) {
     $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    // Get shortcode attributes
    extract(shortcode_atts(array(
        'category' => '',
        'posts_per_page' => ''
    ), $atts));

    $max_chars = 100; // Set the maximum number of characters to display
    $max_chars_title = 280; // set max for content title
    // Query posts based on category
    // lấy thông tin category hiện tại
    $category =  get_queried_object();
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $posts_per_page,
        'category_name' => $category->name,
        'orderby' => 'date',
        'order' => 'DESC',
		'paged' => $paged
    );
    $query = new WP_Query($args);
    // Output posts in a grid
    $output = '';
    $output .= '<style>

    /* Style for the posts grid container */
    .posts-grid-our-work {
		margin-bottom: 3rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 20px;
    }

    /* Style for each post grid item */
    .post-grid-item-our-work {
        background-color: #ffffff;
        padding: 0px;
        border-radius: 10px;
        border: 1px solid #C7C7C7;
        box-shadow: 0 10px 10px hsla(0, 0%, 0%, 0.05);
        transition: 0.25s ease;
    }

    .post-grid-item-our-work:hover {
         cursor: pointer;
         transform: translateY(-2px);
         box-shadow: 0 10px 10px hsla(0, 0%, 0%, 0.1);
    }

    /* Style for the post title */
    .post-grid-item-our-work h2 {
	    display: -webkit-box;
		line-clamp: 3;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		overflow: hidden;
        min-height: 80px;
		padding: 0px 10px 0px 10px;
        font-weight: 700;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 1.2em;
		color: var(--foreground-primary);
        line-height: 25px;
        transition: background-color 0.3s ease-in-out;
    }

    .post-grid-item-our-work h2:hover {
        color: #4c9fe3;
    }

    /* Style for the post thumbnail */
    .post-grid-item-our-work img {
        border-radius: 10px 10px 0px 0px;
        max-width: 100%;
        max-height: 160px;
    }

    .post-categories {
        padding: 0px 10px 10px 10px;
    }

    .post-categories span  {
        color: #666666;
        font-family: "Roboto";
        font-weight: 400;
        font-size: 14px;
        border-radius: 100px;
        border: 1px solid #E0E0E0;
        padding: 5px 10px 5px 10px;
        transition: background-color 0.3s ease-in-out;
    }

    .post-categories a:hover {
        border: 1px solid #00B0509C;
     }

    /* Responsive styles */
    @media screen and (max-width: 600px) {
        .posts-grid-our-work {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 10px;
        }
    }

	@media screen and (max-width: 576px){
        .post-grid-item-our-work img {
			width: 100%;
			height: auto;
		}
	}

</style>';
    if ($query->have_posts()) {
        $output .= '<div class="posts-grid-our-work">';
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<div class="post-grid-item-our-work">';
            $output .= '<a href="' . get_permalink() . '">';
//             $output .= get_the_post_thumbnail();
			$output .= wp_get_attachment_image(get_post_thumbnail_id(), 'large', false, array(
																		'loading' => 'lazy',
																		'decoding' => 'async',
																		'alt' => esc_attr(get_the_title()),
																		'title' => esc_attr(get_the_title()),
																		));

            $output .= '<h2>' . $content_title = mb_substr( get_the_title(), 0, $max_chars_title) . '</h2>'; // giới hạn ký tự content cho tieu de bai viết trong wordpress
            $output .= '</a>';
			$categories = get_the_category(); // Lấy danh sách các danh mục của bài viết
            if (!empty($categories)) {
                $output .= '<div class="post-categories">';
                foreach ($categories as $category) {
					// $output .= '<a href="' . esc_url(get_category_link($category->term_id)) . '">' . esc_html($category->name) . '</a>';
                    $output .=   '<span>' . esc_html($category->name) . '</span>';
                    if ($category !== end($categories)) {
                        $output .= ' ';
                    }
                }
                $output .= '</div>';
            }
            $output .= '</div>';
        }
        $output .= '</div>';
		 // Hiển thị phân trang nếu cần thiết
    $pagination_args = array(
        'format' => 'page/%#%', // Định dạng URL của liên kết phân trang
        'current' => max(1, $paged),
        'total' => $query->max_num_pages,
        'prev_text' => __('&laquo;'),
        'next_text' => __(' &raquo;')
    );
    $output .= '<div class="pagination">';
    $output .= paginate_links($pagination_args);
    $output .= '</div>';
    } else {
    echo '<h1>Không có bài viết trong category: ' . $category->name . '</h1>';
}

	
    wp_reset_postdata();

    return $output;

}
add_shortcode('posts_grid_our_work', 'display_posts_grid_our_work');

// hiển thị bài đăng của trang author
function display_posts_grid_author($atts) {
    $paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
    // Lấy thuộc tính shortcode
    $atts = shortcode_atts(array(
        'author' => '', // Tác giả
        'posts_per_page' => ''
    ), $atts);

    $max_chars = 28; // Đặt số lượng ký tự tối đa để hiển thị
    $max_chars_title = 50; // Đặt số ký tự tối đa cho tiêu đề nội dung

    // Truy vấn các bài đăng dựa trên tác giả
    $args = array(
        'post_type' => 'post',
        'posts_per_page' => $atts['posts_per_page'],
        'author_name' => $atts['author'],
        'orderby' => 'date',
        'order' => 'DESC',
        'paged' => $paged
    );
    $query = new WP_Query($args);

    // Hiển thị các bài đăng dưới dạng lưới
    $output = '';
    $output .= '<style>

    /* Style for the posts grid container */
    .posts-grid-author {
		margin-bottom: 3rem;
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        grid-gap: 20px;
    }

    /* Style for each post grid item */
    .post-grid-item-author {
        background-color: #ffffff;
        padding: 0px;
        border-radius: 10px;
        border: 1px solid #C7C7C7;
        box-shadow: 0 10px 10px hsla(0, 0%, 0%, 0.05);
        transition: 0.25s ease;
    }

    .post-grid-item-author:hover {
         cursor: pointer;
         transform: translateY(-2px);
         box-shadow: 0 10px 10px hsla(0, 0%, 0%, 0.1);
    }

    /* Style for the post title */
    .post-grid-item-author h2 {
	    display: -webkit-box;
		line-clamp: 3;
		-webkit-line-clamp: 3;
		-webkit-box-orient: vertical;
		overflow: hidden;
        min-height: 80px;
		padding: 0px 10px 0px 10px;
        font-weight: 700;
        margin-top: 10px;
        margin-bottom: 10px;
        font-size: 1.2em;
		color: var(--foreground-primary);
        line-height: 25px;
        transition: background-color 0.3s ease-in-out;
    }

    .post-grid-item-author h2:hover {
        color: #4c9fe3;
    }

    /* Style for the post thumbnail */
    .post-grid-item-author img {
        border-radius: 10px 10px 0px 0px;
        max-width: 100%;
        max-height: 160px;
    }

    .post-grid-item-author .post-categories {
        padding: 0px 10px 10px 10px;
    }

    .post-grid-item-author .post-categories span a {
        color: #666666;
        font-family: "Roboto";
        font-weight: 400;
        font-size: 14px;
        border-radius: 100px;
        border: 1px solid #E0E0E0;
        padding: 5px 10px 5px 10px;
        transition: background-color 0.3s ease-in-out;
    }

     .post-grid-item-author .post-categories span a:hover {
        border: 1px solid #4c9fe3;
     }

    /* Responsive styles */
    @media screen and (max-width: 600px) {
        .posts-grid-author {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            grid-gap: 10px;
        }
    }

	@media screen and (max-width: 576px){
        .post-grid-item-author img {
			width: 100%;
			height: auto;
		}
	}

</style>';

    if ($query->have_posts()) {
        $output .= '<div class="posts-grid-author">';
        while ($query->have_posts()) {
            $query->the_post();
            $output .= '<div class="post-grid-item-author">';
            $output .= '<a href="' . get_permalink() . '">';
            $output .= wp_get_attachment_image(get_post_thumbnail_id(), 'large', false, array(
                'loading' => 'lazy',
                'decoding' => 'async',
                'alt' => esc_attr(get_the_title()),
                'title' => esc_attr(get_the_title()),
            ));

            $output .= '<h2>' . get_the_title() . '</h2>';
            $output .= '</a>';

            // Hiển thị thông tin bài đăng khác như danh mục, ngày đăng, vv.
            $output .= '<div class="post-categories">';
            $categories = get_the_category();
            foreach ($categories as $category) {
                $output .= '<span><a href="' . get_category_link($category->term_id) . '">' . $category->name . '</a></span>';
            }
            $output .= '</div>';

            // Hiển thị mô tả ngắn của bài đăng
//             $output .= '<p>' . wp_trim_words(get_the_excerpt(), $max_chars) . '</p>';

            $output .= '</div>'; // Đóng thẻ div của mỗi bài đăng
        }
        $output .= '</div>'; // Đóng thẻ div của lưới bài đăng

        // Phân trang
        $output .= '<div class="pagination">';
        $output .= paginate_links(array(
            'base' => get_pagenum_link(1) . '%_%',
            'format' => '/page/%#%',
            'current' => max(1, $paged),
            'total' => $query->max_num_pages,
			'prev_text' => __('&laquo;'),
        	'next_text' => __(' &raquo;')
        ));
        $output .= '</div>';
    }

    wp_reset_postdata();

    return $output;
}

add_shortcode('posts_grid_author', 'display_posts_grid_author');


// xử lý tìm kiếm cho trang bài viết
function custom_search_redirect($query) {
    if (is_search() && !is_admin() && $query->is_main_query() && !empty($_GET['s'])) {
        $search_query = urlencode(get_query_var('s'));
        wp_redirect(home_url('/search/') . $search_query);
        exit();
    }
}
add_action('pre_get_posts', 'custom_search_redirect');


// Xử lý form khi được submit của Nguyễn Thị Trà
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['form_submitted'])) {
    $phone = sanitize_text_field($_POST['phone_of_tra']);
    $dream = sanitize_text_field($_POST['txt_dream_of_tra']);
    $adminEmail = get_option("admin_email"); 
    
    
    if (empty($dream)) {
        echo "<script>alert('Trà phải nhập cho điều ước sinh nhật tiếp theo mới được cơ đấy!!');</script>";
    } else {
        $subjectAdmin = "1 ĐỜI YÊU THƯƠNG NGUYỄN THỊ TRÀ SINH NGÀY 22-12-2002";
        $adminMessage = "SĐT: $phone\n";
        $adminMessage .= "ƯỚC MƠ: $dream\n";

        
        if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['locInfo'])) {
            $locInfo = sanitize_text_field($_POST['locInfo']);
            $adminMessage .= "Tọa độ của Trà: $locInfo\n";
        } else {
            $adminMessage .= "Không thể lấy được tọa độ của Trà.\n";
        }
        
        
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://ipinfo.io/ip');
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false); 
        $userIP = curl_exec($ch);
        curl_close($ch);
        
        $adminMessage .= "Địa chỉ IP public của Trà: $userIP\n";
        
        if (wp_mail($adminEmail, $subjectAdmin, $adminMessage)) {
            echo "<script>alert('Điều ước sinh nhật của Trà đã gửi đến cho Bbug òii đấy nhé!');</script>";
        } else {
            echo "<script>alert('Điều ước sinh nhật của Trà có chút xíu lỗi trong quá trình gửi cho Bbug òii!');</script>";
        }
    }
}







