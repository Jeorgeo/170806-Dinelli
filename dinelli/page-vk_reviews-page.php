<?php
/**
 * Template Name: VK отзывы
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
?>

<main class="content-area">
	<section class="reviews box-1">
		<div class="container">
			<span class="box-title">
				Отзывы и результаты
			</span>
			<nav class="reviews__nav">
				<ul>
					<li>
						<a href="http://yush25um.bget.ru/reviews_text/" >благодарственные письма</a>
					</li>
					<li>
						<a href="http://yush25um.bget.ru/videootzyvy-iz-youtube-kanala/">Видео отзывы</a>
					</li>
					<li><a class="active_link">Отзывы с ВК</a></li>
				</ul>
			</nav>
		</div>
	</section>
	<section class="reviews box-2">
		<div class="container">
			<div class="box-content">

				<div class="row clearfix">
					
					<div class="reviews_vk">
						<?php the_vk_topik(); ?>

					</div>
				</div>
			</div>
			<button class="reviews-next" type="button" name="button">Показать ещё</button>
		</div>
	</section>

</main>

<?php
get_footer();
