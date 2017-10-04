<?php
/**
 * Template Name: Видео Блог
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package Dinelli
 */

get_header();

$news = get_posts(
		array(
				'numberposts' => -1,
				'offset' => 0,
				'orderby'     => 'date',
				'order'       => 'DESC',
				'category' => '',
				'include' => '',
				'exclude' => '',
				'meta_key' => '',
				'meta_value' => '',
				'post_type' => 'vlog',
				'post_parent' => '',
				'post_status' => 'publish'
		)
);
?>

<main class="content-area">
	<section class="blog vlog box-1">
		<div class="container">
			<div class="blog__box-content clearfix">
				<div class="cols col-6 blog_title">
					<h1>
						Видео
					</h1>
					<p>
						Видео-журнал Нелли Давыдовой
о  контекстной рекламе
торговом маркетинге и рекламе.
					</p>
				</div>
			</div>
		</div>
	</section>
	<section class="blog vlog box-2">
		<div class="container">
			<nav class="reviews__nav">
				<ul>
					<li>
						<a href="<?php the_field('blog'); ?>" >Блог</a>
					</li>
					<li>
						<a class="active_link">Видео Блог</a>
					</li>
				</ul>
			</nav>
			<?php
				foreach ($news as $obj) {
					if($obj->post_name == 'archive'){
							continue;
					}
			 ?>
			<figure class="blog__box-content clearfix">
				<div class="cols col-4 col-6-md">
					<a href="/blog/<?php echo $obj->post_name; ?>" target="_blank">
						<img src="<?php echo get_field('image',$obj->ID); ?>" alt="">
					</a>
					<h4 class="small-title"><?php echo $obj->post_title; ?></h4>
					<?php echo get_field('description', $obj->ID); ?>
					<a href="/blog/<?php echo $obj->post_name; ?>" target="_blank">Читать далее...</a>
				</div>
			</figure>
			<?php
}
			 ?>
		</div>
	</section>

</main>

<?php
get_footer();
