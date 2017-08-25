<?php
/**
 * Template Name: Услуги
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
	<section class="service-box-1">
		<div class="container service">
			<span class="box-title">
				Услуги<br>и предложения
			</span>
			<div class="box-content clearfix">
				<h4 class="small-title">
					Инструменты дохода
				</h4>
				<div class="row clearfix">
					<div class="cols col-6">
						<p>
							Ниже представлены все необходимые Вам инструменты для того,
							чтобы ваш бизнес приносил больше доходов:
						</p>
					</div>
					<div class="cols col-5">
						<p>
							Если есть выбор  рекламщиков – это прекрасно!
							Но перебирать многочисленные предложения сложно.
							Можно запутаться. И, конечно же, существует вероятность
							нарваться на «красное словцо».
						</p>
					</div>
				</div>
				<div class="row clearfix">
					<div class="cols col-3 left_side">
						<a class="service__card" href="#">
							<img src="<?php bloginfo('template_url'); ?>/pics/service_yd.jpg" alt="">
						</a>
					</div>
					<div class="cols col-3">
						<a class="service__card" href="#">
							<img src="<?php bloginfo('template_url'); ?>/pics/service_ga.jpg" alt="">
						</a>
					</div>
					<div class="cols col-3 right_side">
						<a class="service__card" href="#">
							<img src="<?php bloginfo('template_url'); ?>/pics/service_seo.jpg" alt="">
						</a>
					</div>
					<div class="cols col-3 left_side">
						<a class="service__card" href="#">
							<img src="<?php bloginfo('template_url'); ?>/pics/service_site.jpg" alt="">
						</a>
					</div>
					<div class="cols col-3">
						<a class="service__card" href="#">
							<img src="<?php bloginfo('template_url'); ?>/pics/service_youtube.jpg" alt="">
						</a>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="service-box-2">
		<div class="container service">
			<span class="box-title">
				аромат прибыли
			</span>
			<div class="box-content clearfix">
				<h4 class="small-title">
					Пришла пора...
				</h4>
				<div class="row clearfix">
					<div class="cols col-6">
						<p>
							Эйнштейн в свое время заметил: «Бессмысленно продолжать
							делать то же самое и ждать других результатов».
							Ваши клиенты уходят к вашим конкурентам? Значит,
							пришла пора менять политику рекламы.
						</p>
						<p>
							<span class="color-text">Чтобы ваши вложения
							в Рекламную кампанию оправдались, а прибыль приумножалась,
							обратитесь к эксперту:</span>
						</p>
					</div>
				</div>
				<div class="row clearfix">
					<div class="cols col-3 right_side">
						<a class="service__card" href="#">
							<img src="<?php bloginfo('template_url'); ?>/pics/service_consult.jpg" alt="">
						</a>
					</div>
					<div class="cols col-3">
						<a class="service__card" href="#">
							<img src="<?php bloginfo('template_url'); ?>/pics/service_audit.jpg" alt="">
						</a>
					</div>
					<div class="cols col-3 left_side">
						<a class="service__card" href="#">
							<img src="<?php bloginfo('template_url'); ?>/pics/service_learn.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="row clearfix">
					<div class="cols col-5">
						<h4 class="small-title">Заявка на консультацию</h4>
						<p>Самая большая радость - видеть, как растут важные для бизнеса параметры,
							 и понимать правильность сделанного выбора! </p>
						<p>Закажите консультацию по вашему бизнесу у DINELLI и узнайте,
							 эффективны ли ваши рекламные инструменты</p>
						<p>Напишите ваши контакты и пожелания, и я,
							Нелли Давыдова лично свяжусь с вами в ближайшее рабочее время.</p>
					</div>
					<div class="cols col-7 cloud-form">
						<form class="bottom-form clearfix" action="index.html" method="post">
							<label for="phone">Телефон</label>
							<input id="phone" type="text" name="phone" value="" placeholder="+7(___) ___-__-__">
							<label for="mail">e-mail</label>
							<input id="mail" type="text" name="mail" value="" placeholder="iNfo@DiNelli.ru">
							<input id="сonsent" class="сonsent" type="checkbox" name="сonsent" value="">
							<label class="сonsent" for="сonsent">Согласие на обработку персональных данных</label>
							<button id="btn" type="submit" name="button">Отправить заявку</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
