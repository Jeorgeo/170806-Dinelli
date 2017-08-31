<?php
/**
 * Template Name: Видео отзывы
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
						<a href="#">благодарственные письма</a>
					</li>
					<li>
						<a class="active_link">Видео отзывы</a>
					</li>
					<li><a href="#">Отзывы с ВК</a></li>
				</ul>
			</nav>
		</div>
	</section>
	<section class="reviews blog box-2">
		<div class="container">
			<figure class="blog__box-content clearfix">
				<div class="cols col-5 col-4-md">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/he9NRJVmhKs?ecver=1" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="cols col-5 col-12-md">
					<h2>Ярмарка Эмоций</h2>
					<p>
						Выбирал очень щепетильно, так как наслышан о «горе» -директологах и программистах.
						Увидел рекламу DiNelli, просмотрел их кейсы, ознакомился с услугами,
						но окончательное решение принял...
					</p>
					<a href="#">Читать далее...</a>
				</div>
			</figure>
			<figure class="blog__box-content clearfix">
				<div class="cols col-5 col-4-md">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/he9NRJVmhKs?ecver=1" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="cols col-5 col-12-md">
					<h2>Ярмарка Эмоций</h2>
					<p>
						Выбирал очень щепетильно, так как наслышан о «горе» -директологах и программистах.
						Увидел рекламу DiNelli, просмотрел их кейсы, ознакомился с услугами,
						но окончательное решение принял...
					</p>
					<a href="#">Читать далее...</a>
				</div>
			</figure>
			<figure class="blog__box-content clearfix">
				<div class="cols col-5 col-4-md">
					<iframe width="560" height="315" src="https://www.youtube.com/embed/he9NRJVmhKs?ecver=1" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="cols col-5 col-12-md">
					<h2>Ярмарка Эмоций</h2>
					<p>
						Выбирал очень щепетильно, так как наслышан о «горе» -директологах и программистах.
						Увидел рекламу DiNelli, просмотрел их кейсы, ознакомился с услугами,
						но окончательное решение принял...
					</p>
					<a href="#">Читать далее...</a>
				</div>
			</figure>
			<button class="reviews-next" type="button" name="button">Показать ещё</button>
		</div>
	</div>
</section>

</main>

<?php
get_footer();
