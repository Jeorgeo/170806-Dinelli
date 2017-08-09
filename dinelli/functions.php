<?php

// Add theme support for selective refresh for widgets.
add_theme_support( 'customize-selective-refresh-widgets' );

function load_php_files_in_dir($dir = ''){
	if(!empty($dir)){
		if( file_exists($dir) ){
			$files = scandir($dir);
			foreach ($files as $file) {
				if(!empty($file) AND $file!='.' AND $file!='..'){
					$ex = explode('.',$file);
					if(end($ex)=='php'){
						require_once($dir.'/'.$file);
					}
				}
			}
		}
	}
}

load_php_files_in_dir(__DIR__.'/inc/');


add_filter('widget_text', 'do_shortcode');//разрешаем юзать шорткод в виджетах

//show_admin_bar(false);
//add_filter('category_link', create_function('$a', 'return str_replace("category/", "", $a);'), 9999);

//require_once('inc/options.php');
/*
function my_admin_bar_menu( $wp_admin_bar ){
	$wp_admin_bar->remove_node( 'wp-logo' );
}
add_action( 'admin_bar_menu', 'my_admin_bar_menu', 100 );*/


/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function dinelli_widgets_init() {
	register_sidebar( array(
		'name'          => esc_html__( 'mail', 'dinelli' ),
		'id'            => 'mail',
		'description'   => esc_html__( 'Add widgets here.', 'dinelli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'phone-top', 'dinelli' ),
		'id'            => 'phone',
		'description'   => esc_html__( 'Add widgets here.', 'dinelli' ),
		'before_widget' => '<div id="%1$s" class="widget phone">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'phone-bottom', 'dinelli' ),
		'id'            => 'phone_b',
		'description'   => esc_html__( 'Add widgets here.', 'dinelli' ),
		'before_widget' => '<div id="%1$s" class="widget phone">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'social_vk', 'dinelli' ),
		'id'            => 'social_vk',
		'description'   => esc_html__( 'Add widgets here.', 'dinelli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'social_f', 'dinelli' ),
		'id'            => 'social_f',
		'description'   => esc_html__( 'Add widgets here.', 'dinelli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'social_youtube', 'dinelli' ),
		'id'            => 'social_youtube',
		'description'   => esc_html__( 'Add widgets here.', 'dinelli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'social_instagram', 'dinelli' ),
		'id'            => 'social_instagram',
		'description'   => esc_html__( 'Add widgets here.', 'dinelli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Контент в подвале', 'dinelli' ),
		'id'            => 'footer_c',
		'description'   => esc_html__( 'Add widgets here.', 'dinelli' ),
		'before_widget' => '<div id="%1$s" class="widget %2$s">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );
	register_sidebar( array(
		'name'          => esc_html__( 'Копирайт в подвале', 'dinelli' ),
		'id'            => 'footer_copy',
		'description'   => esc_html__( 'Add widgets here.', 'dinelli' ),
		'before_widget' => '<div id="%1$s" class="footer_copy">',
		'after_widget'  => '</div>',
		'before_title'  => '<h2 class="widget-title">',
		'after_title'   => '</h2>',
	) );

}
add_action( 'widgets_init', 'dinelli_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function dinelli_scripts() {

	$dineli_url = get_template_directory_uri();

	wp_enqueue_style( 'normalize-style', $dineli_url . "/css/normalize.css", array(), 		'2', 'all' );

	wp_enqueue_style( 'bootstrap_min-style' ,  $dineli_url . "/css/bootstrap.min.css", array(), 		'2', 'all' );

	wp_enqueue_style( 'bootstrap-theme_min-style' ,  $dineli_url . "/css/bootstrap-theme.min.css", array(), 		'2', 'all' );

	wp_enqueue_style( 'jquery_fancybox-style' ,  $dineli_url . "/css/jquery.fancybox.css", array(), 		'2', 'all' );

	wp_enqueue_style( 'jquery_bxslider-style' ,  $dineli_url . "/css/jquery.bxslider.css", array(), 		'2', 'all' );

	wp_enqueue_style( 'animate-style' ,  $dineli_url . "/css/animate.css", array(), 		'2', 'all' );

	wp_enqueue_style( 'font-awesome_min-style' ,  $dineli_url . "/css/font-awesome.min.css", array(), 		'2', 'all' );

	wp_enqueue_style( 'dinelli-style', get_stylesheet_uri());

	wp_enqueue_script('newscript', $dineli_url . '/js/jquery.min.js');

	wp_enqueue_script('newscript', $dineli_url . '/js/jquery.mousewheel-3.0.6.pack.js');

	wp_enqueue_script('newscript', $dineli_url . '/js/jquery.bxslider.min.js');

	wp_enqueue_script('newscript', $dineli_url . '/js/jquery.fancybox.pack.js');

	wp_enqueue_script('newscript', $dineli_url . '/js/bootstrap.min.js');

	wp_enqueue_script('newscript', $dineli_url . '/js/wow.min.js');

	wp_enqueue_script('newscript', $dineli_url . '/js/main.js');

}
add_action( 'wp_enqueue_scripts', 'dinelli_scripts' );

if ( function_exists( 'register_nav_menu' ) ) {
	register_nav_menus( array(
		'menu-sidebar' => 'Sidebar menu',
		'menu-mobile' => 'Mobile menu',
	) );
}

function get_short_text($post_content='',$limit=100,$dots=''){
	$post_content_res='';
	$post_content_count=0;
	if(!empty($post_content)){
		$post_content_arr=explode(' ',$post_content);
		for($i=0;$i<count($post_content_arr);$i++){
			if($post_content_count+strlen($post_content_arr[$i])<$limit){
				$post_content_count=$post_content_count + strlen($post_content_arr[$i]);
				$post_content_res .=$post_content_arr[$i].' ';
			}
		}
		if( !empty($dots) AND strlen(trim($post_content_res)) < strlen(trim($post_content)) ){
			return $post_content_res.$dots;
		} else {
			return $post_content_res;
		}
	}
	return '';
}

function get_short_post_content($post_id='',$limit=200,$readmore='',$type=0){
	if(empty($post_id)){
		global $post;
		$post_id=$post->ID;
	}
	$post_content_res='';
	$post_content_count=0;
	$post_content=strip_tags(get_the_content($post_id));
	if(!empty($post_content)){
		if(!empty($type) AND $type>0 ){
			$post_content_array=explode('.',$post_content.'.');
			for($a=0;$a<count($post_content_array);$a++){
				if($post_content_count+strlen($post_content_array[$a])<$limit){
					$post_content_count=$post_content_count + strlen($post_content_array[$a]);
					$post_content_arr=explode(' ',$post_content_array[$a]);
					for($i=0;$i<count($post_content_arr);$i++){
						$post_content_res .=$post_content_arr[$i].' ';
					}
					$post_content_res =trim($post_content_res).'. ';
				}
			}
		} else {
			$post_content_array=explode(' ',$post_content);
			for($a=0;$a<count($post_content_array);$a++){
				if($post_content_count+strlen($post_content_array[$a])<$limit){
					$post_content_res .=$post_content_array[$a].' ';
					$post_content_count=$post_content_count + strlen($post_content_array[$a]);
				}
			}
			$post_content_res =trim($post_content_res);
		}
		if(!empty($readmore)){
			return $post_content_res.'... <a href="'.get_permalink($post_id).'" target="_blank">'.$readmore.'</a>';
		} else {
			return $post_content_res.'...';
		}
	}
	return '';
}

if(!is_admin()){

	add_action('init', 'theme_register_scripts');
	function theme_register_scripts() {
		wp_deregister_script( 'jquery' );
	}
}

add_action('wp_head','theme_wp_head');
function theme_wp_head(){
	?>
	<script type="text/javascript">
		var theme_url = '<?php bloginfo('template_url'); ?>';
		var theme_ajaxurl = '<?php echo admin_url( 'admin-ajax.php', 'relative' ); ?>';
	</script>
	<?php
}

add_action( 'wp_ajax_feedback', 'feedback_callback' );
add_action( 'wp_ajax_nopriv_feedback', 'feedback_callback' );
function feedback_callback() {
	//if(isset($_POST['act']) AND $_POST['act']=='travel-booking-form'){
		if(get_option('admin_email')){
			$values='';
			foreach ($_POST as $key => $value) {
				if($key!='action' AND $key!='act' AND !empty($value)){
					$key=str_replace('_', ' ', $key);
					//$key=ucfirst($key);
					if($key=='name'){$key='Имя';}
					if($key=='phone'){$key='Телефон';}
					if($key=='date'){$key='Дата';}
					if($key=='time'){$key='Время брони';}
					if($key=='count'){$key='Количество гостей';}
					if($key=='email'){$key='E-mail';}
					if($key=='theme'){$key='Тема сообщения';}
					if($key=='msg'){$key='Сообщение';}

					$values.=$key.': '.$value.PHP_EOL;
				}
			}
			if(!empty($values)){
				wp_mail(get_option('admin_email'),get_bloginfo('name'),$values);
			}
			/*echo get_option('admin_email');
			echo $values;*/
			echo '<div style="width:100%;text-align:center; font-weight:bold;font-size:16px;padding:50px 0;">Спасибо! Ваше сообщение отправлено.<br> Мы свяжемся с вами в ближайшее время.</div>';
		}
		die();
	//}
}


add_action('wp_footer', 'form_wp_footer');
function form_wp_footer(){
	?>
	<script type='text/javascript'>

	$(document).ready(function() {

		$('.form_auto').submit(function(){
          var form_id = $(this).attr('id');
          $.post('<?php echo get_bloginfo('url').admin_url( 'admin-ajax.php', 'relative' ); ?>?v='+Math.random(), $(this).serialize(),  function(response) {
            console.log(response);
            console.log('form_id'+form_id);
            if(form_id=='modal_form'){
            	//$('#modal_form_wrap_wrap').css('height','300px');
            	//$('#modal_form_wrap').css('height','250px');
            }
            //$('#'+form_id).html(response);
            window.location = 'http://dinelli.ru/zayavka.php';
          });
          return false;
        });

		$('#subscribe').submit(function(){
          var form_id = $(this).attr('id');
          $.post('<?php echo get_bloginfo('url').admin_url( 'admin-ajax.php', 'relative' ); ?>?v='+Math.random(), $(this).serialize(),  function(response) {
            /*console.log(response);
            console.log('form_id'+form_id);
            $('#'+form_id).html(response);*/
          });
          return false;
        });

	});


	</script>
<?php
}


function get_reviews_per_page($post_type=''){
	if(!empty($post_type)){
		if($post_type=='reviews_text'){
			return 6;
		}
		if($post_type=='reviews_video'){
			return 3;
		}
	} else {
		return 6;
	}
}

function get_reviews_count($post_type=''){
	if(!empty($post_type)){
		global $wpdb;
		return $wpdb->get_var( "SELECT COUNT(*) FROM $wpdb->posts WHERE post_type='".esc_html($post_type)."' AND post_status='publish'" );
	}
}

function get_reviews_text($offset=0){

	$args=array(
		'post_type'=> 'reviews_text',
		'posts_per_page'=> get_reviews_per_page('reviews_text'),
		'offset' => intval($offset)
	);
	$my_query = new WP_Query( $args );
	if( $my_query->have_posts() ) {
		while( $my_query->have_posts() ) {
			$my_query->the_post();
			$cost = '';
			$profit_old = '';
			$profit_new = '';
			$conversion_old = '';
			$conversion_new = '';

			if(function_exists('get_field')){
				$cost = get_field('cost');
				$profit_old = get_field('profit_old');
				$profit_new = get_field('profit_new');
				$conversion_old = get_field('conversion_old');
				$conversion_new = get_field('conversion_new');

			}

			// the_permalink()

			?>
				<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
					<div class="reviews-item">
						<div class="reviews-item-title"><?php the_title(); ?></div>
						<div class="reviews-item-row reviews-item-row-1">
							<div class="reviews-item-row-title">Затраты</div>
							<div class="reviews-item-row-price"><?php echo $cost; ?></div>
						</div>
						<div style="clear:both;"></div>
						<div class="reviews-item-row reviews-item-row-2">
							<div class="reviews-item-row-title">Прибыль</div>
							<div class="reviews-item-row-price"><?php echo $profit_old; ?></div>
							<div class="reviews-item-row-arrow"></div>
							<div class="reviews-item-row-profit"><?php echo $profit_new; ?></div>
						</div>
						<div style="clear:both;"></div>
						<div class="reviews-item-row reviews-item-row-3">
							<div class="reviews-item-row-title">Конверсия</div>
							<div class="reviews-item-row-price"><?php echo $conversion_old; ?></div>
							<div class="reviews-item-row-arrow"></div>
							<div class="reviews-item-row-profit"><?php echo $conversion_new; ?></div>
						</div>
						<div style="clear:both;"></div>
						<div class="reviews-item-desc">
							<?php //the_excerpt();
								echo get_short_post_content('',200,'читать далее',0);
							 ?>
						</div>
					</div>
				</div>

		<?php
		}
	}
	wp_reset_query();

}

function get_reviews_video($offset=0){

	$args=array(
		'post_type'=> 'reviews_video',
		'posts_per_page'=> get_reviews_per_page('reviews_video'),
		'offset' => intval($offset)
	);
	$my_query = new WP_Query( $args );
	if( $my_query->have_posts() ) {
		while( $my_query->have_posts() ) {
			$my_query->the_post();
			$cost = '';
			$profit_old = '';
			$profit_new = '';
			$conversion_old = '';
			$conversion_new = '';
			$youtube = '';

			if(function_exists('get_field')){
				$cost = get_field('cost');
				$profit_old = get_field('profit_old');
				$profit_new = get_field('profit_new');
				$conversion_old = get_field('conversion_old');
				$conversion_new = get_field('conversion_new');
				$youtube = get_field('youtube');

			}
			/*
			// the_permalink()
			//https://www.youtube.com/watch?v=KIUqODqW0t0
			//<img src="/i/data/reviews/video.png" alt="">*/
			?>

						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="reviews-item">
								<?php if(!empty($youtube)){?>
								<iframe width="374" height="240" src="https://www.youtube.com/embed/<?php echo $youtube; ?>" frameborder="0" allowfullscreen></iframe>
								<?php } ?>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="reviews-item">
								<div class="reviews-item-title"><?php the_title(); ?></div>
								<div class="reviews-item-row reviews-item-row-1">
									<div class="reviews-item-row-title">Затраты</div>
									<div class="reviews-item-row-price"><?php echo $cost; ?></div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-row reviews-item-row-2">
									<div class="reviews-item-row-title">Прибыль</div>
									<div class="reviews-item-row-price"><?php echo $profit_old; ?></div>
									<div class="reviews-item-row-arrow"></div>
									<div class="reviews-item-row-profit"><?php echo $profit_new; ?></div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-row reviews-item-row-3">
									<div class="reviews-item-row-title">Конверсия</div>
									<div class="reviews-item-row-price"><?php echo $conversion_old; ?></div>
									<div class="reviews-item-row-arrow"></div>
									<div class="reviews-item-row-profit"><?php echo $conversion_new; ?></div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-desc">
									<?php
										//the_excerpt();
										echo get_short_post_content('',200,'читать далее',0);
									?>
								</div>
							</div>
						</div>

		<?php
		}
	}
	wp_reset_query();


}

//get_reviews_text();


add_action( 'wp_ajax_reviews_text', 'reviews_text_callback' );
add_action( 'wp_ajax_nopriv_reviews_text', 'reviews_text_callback' );
function reviews_text_callback() {
	$offset = '';
	if(!empty($_REQUEST['offset']) AND intval($_REQUEST['offset']) > 0){
		$offset = intval($_REQUEST['offset']);
	}
	get_reviews_text($offset);
	die();
}


add_action('wp_head', 'wp_head_reviews_text_js');
function wp_head_reviews_text_js(){
	?>
	<script type='text/javascript'>

	function get_reviews(action){
		if(action){

			var offset = parseInt(jQuery('#reviews-items-paged').val())+parseInt(<?php

				/*global $post;
				$post_type='';
				if(!empty($post->post_type)){
					$post_type=$post->post_type;
				}*/

				$ex = explode('?',$_SERVER['REQUEST_URI']);
				$ex = explode('/',$ex[0]);

				if(!empty($ex[1]) AND $ex[1]=='reviews_video'){
					$post_type = 'reviews_video';
				}
				if(!empty($ex[1]) AND $ex[1]=='reviews_text'){
					$post_type = 'reviews_text';
				}

				echo get_reviews_per_page($post_type);
			?>);
			console.log('offset:'+offset);

			var data = {
				'action': action,
				'offset': offset
			};


			jQuery('.reviews-items-more-load').html('<div style="width:16px;height:16px;margin:0 auto;"><img src="<?php bloginfo('template_url'); ?>/i/load.gif" alt="" /></div>');
			jQuery.post('<?php echo get_bloginfo('url').admin_url( 'admin-ajax.php', 'relative' ); ?>?v='+Math.random(), data, function(response) {
				//alert(response);
				//console.log(response);
				if(response){
					if(response==0){
						jQuery('.reviews-items-more').hide();
						jQuery('.reviews-items').html(jQuery('.reviews-items').html() + '<div class="reviews-items-more"></div>');
					} else {
						jQuery('.reviews-items').html(jQuery('.reviews-items').html() + response);
					}
				} else {
					jQuery('.reviews-items-more').hide();

						jQuery('.reviews-items').html(jQuery('.reviews-items').html() + '<div class="reviews-items-more"></div>');

				}

				jQuery('#reviews-items-paged').val(offset);
				jQuery('.reviews-items-more-load').html('');
			});

		}
	}
	</script>
<?php
}


function get_reviews_vk(){
	//group_id
}


?>
