<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<title><?php bloginfo('name'); ?> <?php wp_title(); ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript" language="JavaScript" src="<?php bloginfo('template_url'); ?>/js/jquery.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/jquery.mousewheel-3.0.6.pack.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/bootstrap/css/bootstrap.min.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/bootstrap/css/bootstrap-theme.min.css" type="text/css" media="screen, projection" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bootstrap/js/bootstrap.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox.css" type="text/css" media="screen, projection" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/fancybox/jquery.fancybox.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/js/bxslider/jquery.bxslider.css" type="text/css" media="screen, projection" />
	<script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/bxslider/jquery.bxslider.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/css/animate.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/fonts/font-awesome/css/font-awesome.min.css" type="text/css" media="screen, projection" />
	<link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/style.css?v=<?php echo time(); ?>" type="text/css" media="screen, projection" />
	<link href="https://fonts.googleapis.com/css?family=Roboto:100,100i,300,300i,400,400i,500,500i,700,700i,900,900i" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">
	<?php wp_head(); ?>
</head>
<body>

<!-- Navigation -->
<nav id="slide-menu">
			<div class="sidebar">
				<a href="<?php bloginfo('url'); ?>" id="logo"><img src="<?php bloginfo('template_url'); ?>/i/logo.png" alt=""></a>
				<?php

			$menu_name = 'menu-mobile';
			$locations = get_nav_menu_locations();
			//var_dump($locations);

			if( $locations = get_nav_menu_locations() && isset($locations[ $menu_name ]) ){
				$locations = get_nav_menu_locations();
				$menu = wp_get_nav_menu_object( $locations[ $menu_name ] ); // получаем ID

				$menu_items = wp_get_nav_menu_items( $menu ); // получаем элементы меню
				$this_url = get_bloginfo('url').$_SERVER['REQUEST_URI'];


				// создаем список
				$menu_list = '
					<ul id="menu-' . $menu_name . '" class="sidebar_menu">';


				foreach ( (array) $menu_items as $key => $menu_item ){
					if(empty($menu_item->post_parent)){


									$class_active='';
									if($menu_item->url==$this_url){
										$class_active='active';
									}


							$this_children=0;
							$this_children_html='';
							$this_children_html_arr=array();
							foreach ( (array) $menu_items as $sub_key => $sub_menu_item ){

								if($menu_item->ID==$sub_menu_item->menu_item_parent){
									$this_children++;


									if($sub_menu_item->url==$this_url){
										$class_active='active-li';
									}
									$this_children_html_arr[]='<li class="left_row">
								<a href="' . $sub_menu_item->url . '" title="' . $sub_menu_item->title . '">' . $sub_menu_item->title . '</a>
							</li>';
								}
							}

							if(!empty($this_children_html_arr)){
								for ($i=0; $i < count($this_children_html_arr); $i++) {
									if($i == count($this_children_html_arr)-1){
										$this_children_html.=str_replace('<li class="left_row">','<li class="left_row last">',$this_children_html_arr[$i]);
									} else {
										$this_children_html.=$this_children_html_arr[$i];
									}
								}
							}

							$menu_list .= '<li class="left_row '.$class_active.'">';

							if(!empty($this_children_html)){
								$md5 = md5($this_children_html);
								$this_children_html='<ul id="accordion-'.$md5.'" class="accordion-wrap">'.$this_children_html.'</ul>';
								$menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>  <i class="accordion-btn" data-id="accordion-'.$md5.'"></i>'.$this_children_html;
							} else {


								$menu_list .= '
								<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>'.$this_children_html;
							}


							echo '</li>';
					}
				}

				$menu_list .= '</ul>';
			}

			echo $menu_list;
	?>
				<?php /*<ul class="sidebar_menu">
					<li class="active"><a href="#">Моё агентство</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="#">Отзывы</a></li>
					<li><a href="#">Обучение</a></li>
					<li><a href="#">Блог</a></li>
				</ul>*/ ?>
				<div class="sidebar_delim"></div>
				<ul class="sidebar_list">
					<li><a href="mailto:info@dinelli.ru" target=_blank >info@dinelli.ru </a></li>
					<li>+7 918 476 90 30</li>
					<li><a href="#" class="show_modal"><span style="color:#e93a1d">[</span> Заказать звонок <span style="color:#e93a1d">]</span></a></li>
				</ul>
				<ul class="social">
					<li><a href="https://vk.com/directbm" rel="nofollow" class="social_vk"></a></li>
					<li><a href="https://www.facebook.com/blondinkaNelli/?ref=bookmarks" rel="nofollow" class="social_fb"></a></li>
					<li><a href="https://www.youtube.com/channel/UCoQA6nd0lINqLvD49rYpUVA" rel="nofollow" class="social_yt"></a></li>
				</ul>
				<div style="clear:both;"></div>
			</div><!--/.sidebar-->


</nav>
<!-- Content panel -->
<div id="content-wrap">
	<div class="menu-trigger"></div>


	<div id="wrapper">
		<div id="content">

			<div class="sidebar">
				<a href="<?php bloginfo('template_url'); ?>" id="logo"><img src="<?php bloginfo('template_url'); ?>/i/logo.png" alt=""></a>
				<?php

			$menu_name = 'menu-top';
			$locations = get_nav_menu_locations();
			//var_dump($locations);

			if( $locations = get_nav_menu_locations() && isset($locations[ $menu_name ]) ){
				$locations = get_nav_menu_locations();
				$menu = wp_get_nav_menu_object( $locations[ $menu_name ] ); // получаем ID

				$menu_items = wp_get_nav_menu_items( $menu ); // получаем элементы меню
				$this_url = get_bloginfo('url').$_SERVER['REQUEST_URI'];


				// создаем список
				$menu_list = '
					<ul id="menu-' . $menu_name . '" class="sidebar_menu">';


				foreach ( (array) $menu_items as $key => $menu_item ){
					if(empty($menu_item->post_parent)){


									$class_active='';
									if($menu_item->url==$this_url){
										$class_active='active';
									}


							$this_children=0;
							$this_children_html='';
							$this_children_html_arr=array();
							foreach ( (array) $menu_items as $sub_key => $sub_menu_item ){

								if($menu_item->ID==$sub_menu_item->menu_item_parent){
									$this_children++;


									if($sub_menu_item->url==$this_url){
										$class_active='active-li';
									}
									$this_children_html_arr[]='<li class="left_row">
								<a href="' . $sub_menu_item->url . '" title="' . $sub_menu_item->title . '">' . $sub_menu_item->title . '</a>
							</li>';
								}
							}

							if(!empty($this_children_html_arr)){
								for ($i=0; $i < count($this_children_html_arr); $i++) {
									if($i == count($this_children_html_arr)-1){
										$this_children_html.=str_replace('<li class="left_row">','<li class="left_row last">',$this_children_html_arr[$i]);
									} else {
										$this_children_html.=$this_children_html_arr[$i];
									}
								}
							}

							$menu_list .= '<li class="left_row '.$class_active.'">';

							if(!empty($this_children_html)){
								$md5 = md5($this_children_html);
								$this_children_html='<ul id="accordion-'.$md5.'" class="accordion-wrap">'.$this_children_html.'</ul>';
								$menu_list .= '<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>  <i class="accordion-btn" data-id="accordion-'.$md5.'"></i>'.$this_children_html;
							} else {


								$menu_list .= '
								<a href="' . $menu_item->url . '">' . $menu_item->title . '</a>'.$this_children_html;
							}


							echo '</li>';
					}
				}

				$menu_list .= '</ul>';
			}

			echo $menu_list;
	?>
				<?php /*<ul class="sidebar_menu">
					<li class="active"><a href="#">Моё агентство</a></li>
					<li><a href="#">Услуги</a></li>
					<li><a href="#">Отзывы</a></li>
					<li><a href="#">Обучение</a></li>
					<li><a href="#">Блог</a></li>
				</ul>*/ ?>
				<div class="sidebar_delim"></div>
				<ul class="sidebar_list">
					<li><a href="mailto:info@dinelli.ru">info@dinelli.ru</a></li>
					<li>+7 918 476 90 30</li>
					<li><a href="#" class="show_modal"><span style="color:#e93a1d">[</span> Заказать звонок <span style="color:#e93a1d">]</span></a></li>
				</ul>
				<ul class="social">
					<li><a href="https://vk.com/directbm" rel="nofollow" class="social_vk"></a></li>
					<li><a href="https://www.facebook.com/blondinkaNelli/?ref=bookmarks" rel="nofollow" class="social_fb"></a></li>
					<li><a href="https://www.youtube.com/channel/UCoQA6nd0lINqLvD49rYpUVA" rel="nofollow" class="social_yt"></a></li>
				</ul>
				<div style="clear:both;"></div>
				<div class="sidebar_delim"></div>
				<ul class="sidebar_list">
					<li><p>Сертифицировано</p></li>
					<li><img src="<?php bloginfo('template_url'); ?>/i/yandex.png" alt=""></li>
				</ul>
				<div class="sidebar_delim"></div>
				<ul class="sidebar_list">
					<li><p>События</p></li>
<?php
		$args=array(
			'post_type' => 'events',
			'post_status' => 'publish',
			'posts_per_page'=> 3
		);
		$my_query = new wp_query( $args );
		if( $my_query->have_posts() ) {
			while( $my_query->have_posts() ) {
				$my_query->the_post();
				?>
					<li><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></li>
				<?php
			}
		}
		wp_reset_query();

		/*
					<li><a href="#">Вебинар «Настройка РК»</a></li>
					<li><a href="#">Вебинар «Воронки продаж»</a></li>
					<li><a href="#">Курс по настройке ЯД</a></li>*/
?>

				</ul>
			</div><!--/.sidebar-->


			<div id="content-page">
