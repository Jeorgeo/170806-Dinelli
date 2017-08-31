<?php
/**
 * Template Name: Текстовые отзывы
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

get_header(); ?>

<main class="content-area">
	<section class="reviews box-1">
		<div class="container">
			<span class="box-title">
				Отзывы и результаты
			</span>
			<nav class="reviews__nav">
				<ul>
					<li>
						<a class="active_link" >благодарственные письма</a>
					</li>
					<li>
						<a href="">Видео отзывы</a>
					</li>
					<li><a href="">Отзывы с ВК</a></li>
				</ul>
			</nav>
		</div>
	</section>
	<section class="reviews box-2">
		<div class="container">
			<div class="box-content">
				<div class="row clearfix">
					<div class="cols col-5 col-md-6">
						<h4 class="small-title">
							Альтона-мебель
						</h4>
						<figure class="reviews-photo">
							<a href="#">
								<img src="<?php bloginfo('template_url'); ?>/img/reviews/dn_review-1.jpg" alt="">
							</a>
						</figure>
						<div class="reviews-text">
							<p>
								Решил заняться новой для себя нишей,
								и на начальном этапе задача привлечение клиентов.
								Способ – создание сайта и настройка контекстной рекламы.
								Выбирал очень щепетильно, так как наслышан о...
							</p>
							<a href="#">читать далее</a>
						</div>
					</div>
					<div class="cols col-5 col-md-6">
						<h4 class="small-title">
							Альтона-мебель
						</h4>
						<figure class="reviews-photo">
							<a href="#">
								<img src="<?php bloginfo('template_url'); ?>/img/reviews/dn_review-1.jpg" alt="">
							</a>
						</figure>
						<div class="reviews-text">
							<p>
								Решил заняться новой для себя нишей,
								и на начальном этапе задача привлечение клиентов.
								Способ – создание сайта и настройка контекстной рекламы.
								Выбирал очень щепетильно, так как наслышан о...
							</p>
							<a href="#">читать далее</a>
						</div>
					</div>
				</div>
			</div>
			<button class="reviews-next" type="button" name="button">Показать ещё</button>
		</div>
	</section>

</main>

<?php
get_footer();
