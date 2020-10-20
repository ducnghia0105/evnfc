<?php

define('ROOTPATH', get_stylesheet_directory_uri());
define('CSSPATH', get_stylesheet_directory_uri().'/assets/css/');
define('JSPATH', get_stylesheet_directory_uri().'/assets/js/');
define('IMGPATH', get_stylesheet_directory_uri().'/assets/images/');

add_theme_support( 'post-thumbnails' );

// nav bootstrap
require_once('navbootstrap.php');



//admin menuuuuuuuuuuuu
/**
 * Register a custom menu page.
 */
function wpdocs_register_my_custom_menu_page(){
    add_menu_page( 
        __( 'CONTACT DATA', 'phongmy' ),
        'Contact Data',
        'manage_options',
        'contactdata',
        'contactdata',
        plugins_url( 'myplugin/images/icon.png' ),
        6
    ); 
}
add_action( 'admin_menu', 'wpdocs_register_my_custom_menu_page' );
 
/**
 * Display a custom menu page
 */


function contactdata(){
	
	
	?>
<style>
	.form-table, .form-table td, .form-table td p, .form-table th{
		text-align: center;
		border: 1px solid;
	}
</style>


<div class="container1" style="width: 98%; margin: auto;">
	<div class="row">
		<div class="col-lg-12">

				<h2>THÔNG TIN ĐĂNG KÝ THEO NGÀY</h2>
				<table id="example" class="table table-striped table-bordered" style="width:100%">
				<thead>
					<tr>
						<th>ID</th>
						<th>NGÀY</th>
						<th>HỌ TÊN</th>
						<th>NĂM SINH</th>
						<th>SDT</th>
						<th>EMAIL</th>
						<th>CMND</th>
						<th>PHÒNG BAN</th>
						<th>CHỨC VỤ</th>
						<th>LOẠI HĐ</th>

						<th>THU NHẬP</th>
						<th>ĐC LẮP</th>
						<th>THƯỜNG TRÚ</th>
						<th>ĐV CÔNG TÁC</th>
					</tr>
				</thead>
				<tbody>

					<?php
						global $wpdb;
						$prefix = $wpdb->prefix . 'formdata';
						$rows = $wpdb->get_results( "SELECT * FROM " . $prefix);
					

						foreach ($rows as $data): ?>
							<tr>
								<td><?php echo $data->ID;?></td>
								<td><?php echo $newDate = date("d/m/Y", strtotime($data->NGAYDK));?></td>
								<td><?php echo $data->HOTEN;?></td>
								<td><?php echo $data->NAMSINH;?></td>
								<td><?php echo $data->SDT;?></td>
								<td><?php echo $data->EMAIL;?></td>
								<td><?php echo $data->CMND;?></td>
								<td><?php echo $data->PHONGBAN;?></td>
								<td><?php echo $data->CHUCDANH;?></td>
								<td><?php echo $data->HOPDONG;?></td>

								<td><?php echo $data->THUNHAP;?></td>
								<td><?php echo $data->diachilap;?></td>
								<td><?php echo $data->DIACHITHUONGTRU;?></td>
								<td><?php echo $data->DONVICONGTAC;?></td>
							</tr>
						<?php endforeach; ?>
				
				</tbody>
				<!-- <tfoot>
					<tr>
						<th>Name</th>
						<th>Position</th>
						<th>Office</th>
						<th>Age</th>
						<th>Start date</th>
						<th>Salary</th>
					</tr>
				</tfoot> -->
			</table>
		</div>
	</div>
</div>


<?php
}


// load css into the website's front-end
function themename_enqueue_style() {
    wp_enqueue_style( 'themename-style', get_stylesheet_uri() ); 
}
add_action( 'wp_enqueue_scripts', 'themename_enqueue_style' );

//menu
register_nav_menus(
    array(
    'primary-menu' => __( 'Primary Menu' ),
    'secondary-menu' => __( 'Secondary Menu' )
    )
);



//nav walker
class TdNav_Walker extends Walker_Nav_Menu {
 
   
    public function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
    {
        $output     .= '<li>';
		$attributes  = '';

		! empty ( $item->attr_title )
			// Avoid redundant titles
			and $item->attr_title !== $item->title
			and $attributes .= ' title="' . esc_attr( $item->attr_title ) .'"';

		! empty ( $item->url )
			and $attributes .= ' href="' . esc_attr( $item->url ) .'"';

		$attributes  = trim( $attributes );
		$title       = apply_filters( 'the_title', $item->title, $item->ID );
		$item_output = "$args->before<a $attributes>$args->link_before$title</a>"
						. "$args->link_after$args->after";

		// Since $output is called by reference we don't need to return anything.
		$output .= apply_filters(
			'walker_nav_menu_start_el'
			,   $item_output
			,   $item
			,   $depth
			,   $args
        );
        
    }
    
   
    public function end_el( &$output, $item, $depth = 0, $args = array(), $id = 0 )
    {
        $output .= '</li>';
    }
   } // end ThachPham_Nav_Walker





   class BS3_Walker_Nav_Menu extends Walker_Nav_Menu {
	/**
	 * Traverse elements to create list from elements.
	 *
	 * Display one element if the element doesn't have any children otherwise,
	 * display the element and its children. Will only traverse up to the max
	 * depth and no ignore elements under that depth. It is possible to set the
	 * max depth to include all depths, see walk() method.
	 *
	 * This method shouldn't be called directly, use the walk() method instead.
	 *
	 * @since 2.5.0
	 *
	 * @param object $element Data object
	 * @param array $children_elements List of elements to continue traversing.
	 * @param int $max_depth Max depth to traverse.
	 * @param int $depth Depth of current element.
	 * @param array $args
	 * @param string $output Passed by reference. Used to append additional content.
	 * @return null Null on failure with no changes to parameters.
	 */
	function display_element( $element, &$children_elements, $max_depth, $depth, $args, &$output ) {
		$id_field = $this->db_fields['id'];
 
		if ( isset( $args[0] ) && is_object( $args[0] ) )
		{
			$args[0]->has_children = ! empty( $children_elements[$element->$id_field] );
 
		}
 
		return parent::display_element( $element, $children_elements, $max_depth, $depth, $args, $output );
	}
 
	/**
	 * @see Walker::start_el()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param object $item Menu item data object.
	 * @param int $depth Depth of menu item. Used for padding.
	 * @param int $current_page Menu item ID.
	 * @param object $args
	 */
	function start_el( &$output, $item, $depth = 0, $args = array(), $id = 0 ) {
		if ( is_object($args) && !empty($args->has_children) )
		{
			$link_after = $args->link_after;
			$args->link_after = ' <b class="caret"></b>';
		}
 
		parent::start_el($output, $item, $depth, $args, $id);
 
		if ( is_object($args) && !empty($args->has_children) )
			$args->link_after = $link_after;
	}
 
	/**
	 * @see Walker::start_lvl()
	 * @since 3.0.0
	 *
	 * @param string $output Passed by reference. Used to append additional content.
	 * @param int $depth Depth of page. Used for padding.
	 */
	function start_lvl( &$output, $depth = 0, $args = array() ) {
		$indent = str_repeat("\t", $depth);
		$output .= "\n$indent<ul class=\"dropdown-menu list-unstyled\">\n";
	}
}



add_filter('nav_menu_link_attributes', function($atts, $item, $args) {
	if ( $args->has_children )
	{
		$atts['data-toggle'] = 'dropdown';
		$atts['class'] = 'dropdown-toggle';
	}
 
	return $atts;
}, 10, 3);




//acf options
if( function_exists('acf_add_options_page') ) {
	
	acf_add_options_page(array(
		'page_title' 	=> 'OPTIONS PAGE',
		'menu_title'	=> 'OPTIONS PAGE',
		'menu_slug' 	=> 'theme-general-settings',
		'capability'	=> 'edit_posts',
		'redirect'		=> false
	));
    
    acf_add_options_sub_page(array(
		'page_title' 	=> 'General',
		'menu_title'	=> 'General',
		'parent_slug'	=> 'theme-general-settings',
	));
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Home',
		'menu_title'	=> 'Home',
		'parent_slug'	=> 'theme-general-settings',
	));
	
	acf_add_options_sub_page(array(
		'page_title' 	=> 'Theme Footer Settings',
		'menu_title'	=> 'Footer',
		'parent_slug'	=> 'theme-general-settings',
	));
	
}



//hideee plug
function custom_menu_page_removing() {
	remove_menu_page( 'edit.php?post_type=acf-field-group' );
	remove_menu_page( 'users.php' );
	remove_menu_page( 'plugins.php' );
	remove_menu_page( 'tools.php' );
	remove_menu_page( 'edit-comments.php	' );
	}
// add_action( 'admin_menu', 'custom_menu_page_removing' );




//exclude page in search results
//Exclude pages from WordPress Search
// if (!is_admin()) {
// 	function wpb_search_filter($query) {
// 	if ($query->is_search) {
// 	$query->set('post_type', 'post');
// 	}
// 	return $query;
// 	}
// 	add_filter('pre_get_posts','wpb_search_filter');
// 	}


	//ajax
	add_action( 'wp_ajax_senddata', 'thongbao_init' );
	add_action( 'wp_ajax_nopriv_senddata', 'thongbao_init' );
	
	
	function thongbao_init() {
	
		$name = (isset($_POST['name']))?esc_attr($_POST['name']) : '';
		$namsinh = (isset($_POST['namsinh']))?esc_attr($_POST['namsinh']) : '';
		$sdt = (isset($_POST['sdt']))?esc_attr($_POST['sdt']) : '';
		$email = (isset($_POST['email']))?esc_attr($_POST['email']) : '';
		$cmnd = (isset($_POST['cmnd']))?esc_attr($_POST['cmnd']) : '';

		$donvicongtac = (isset($_POST['donvicongtac']))?esc_attr($_POST['donvicongtac']) : '';
		$phongban = (isset($_POST['phongban']))?esc_attr($_POST['phongban']) : '';
		$chucdanh = (isset($_POST['chucdanh']))?esc_attr($_POST['chucdanh']) : '';

		$hopdong = (isset($_POST['hopdong']))?esc_attr($_POST['hopdong']) : '';
		$thunhap = (isset($_POST['thunhap']))?esc_attr($_POST['thunhap']) : '';
		$diachithuongtru = (isset($_POST['diachithuongtru']))?esc_attr($_POST['diachithuongtru']) : '';
		$diachilapdat = (isset($_POST['diachilapdat']))?esc_attr($_POST['diachilapdat']) : '';

		$currDate = get_the_date();

		$dateInsert = date("Y-m-d H:i:s");
		global $wpdb;
		$db = $wpdb->prefix . 'formdata';


		$result_check = $wpdb->insert( 
			$db, 
			array( 
				'NGAYDK' 	=> $dateInsert, 
				'HOTEN'  	=> $name,
				'NAMSINH'	=> $namsinh,
				'SDT'	 	=> $sdt,
				'EMAIL'	 	=> $email,
				'CMND'   	=> $cmnd,
				'PHONGBAN'   	=> $phongban,
				'CHUCDANH'	=> $chucdanh,
				'HOPDONG'	=> $hopdong,
				'THUNHAP'	=> $thunhap,
				'diachilap'	=> $diachilapdat,
				'DIACHITHUONGTRU'	=> $diachithuongtru,
				'DONVICONGTAC'	=> $donvicongtac
			), 
			array( '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s', '%s' ) 
		);

		if($result_check){
			$check = 'Insert OK';
		}else{
			$check = 'Fail insert';
		}

		wp_send_json_success($check );
		die();//bắt buộc phải có khi kết thúc
	}

//HIGHTLIGHT SEARCH....................
function highlight_results($text){
    if(is_search()){
		$keys = implode('|', explode(' ', get_search_query()));
		$text = preg_replace('/(' . $keys .')/iu', '<span class="search-highlight">\0</span>', $text);
    }
    return $text;
}
add_filter('the_content', 'highlight_results');
add_filter('the_excerpt', 'highlight_results');
add_filter('the_title', 'highlight_results');
 
function highlight_results_css() {
	?>
	<style>
	.search-highlight { background-color:#FF0; font-weight:bold; }
	</style>
	<?php
}
add_action('wp_head','highlight_results_css');








//add js + css to Admin...................
add_action( 'admin_enqueue_scripts', 'load_admin_styles' );

function load_admin_styles() {


	wp_enqueue_style( 'adm-bootstrap', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/css/bootstrap.min.css', true, '1.0.0' );
	wp_enqueue_style( 'adm-bootstrap1', 'https://cdn.datatables.net/1.10.22/css/dataTables.bootstrap.min.css', true, '1.0.0' );

	wp_enqueue_style( 'adm-css',  get_stylesheet_directory_uri() . '/assets/css/admincss.css', true, '1.0.0' );

	wp_enqueue_script('jqueryjs', 'https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js');
	wp_enqueue_script('datatablejs', 'https://cdn.datatables.net/1.10.22/js/jquery.dataTables.min.js');

	wp_enqueue_script('bootstrapjs', 'https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.3.7/js/bootstrap.min.js');
	wp_enqueue_script('admjs', get_stylesheet_directory_uri() . '/assets/js/adminjs.js');
}  





add_action( 'admin_init', 'my_remove_menu_pages' );
function my_remove_menu_pages() {

	//remove_menu_page( 'edit.php?post_type=acf-field-group' );
   
}