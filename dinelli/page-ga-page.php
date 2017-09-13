<?php
/**
 * Template Name: Аудит и настройка Google.Adwords
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
	<section class="ga box-1">
		<div class="container">
			<div class="box-title">
				<span class="title_left">
					Аудит кампаний
				</span>
				<span class="title_left">
					и настройка Google Adwords
				</span>
			</div>
			<?php the_field('pole1'); ?>
			<div class="box-content">
				<div class="row clearfix">
					<h4 class="small-title box">
						Кому, кому? Только одному…
					</h4>
					<div class="cols col-5 col-md-6 padding_right">
						<?php the_field('pole2'); ?>
					</div>
					<div class="cols col-5 col-md-6">
						<?php the_field('pole3'); ?>
					</div>
				</div>
				<div class="row clearfix emelya">
					<div class="cols padding_right col-5 col-md-6">
						<?php the_field('pole4'); ?>
					</div>
				</div>
			</div>
		</div>
	</section>
	<section class="ga box-2">
		<div class="container">
			<span class="box-title">
				о главном
			</span>
			<div class="box-content">
				<div class="container">
					<div class="row clearfix">
						<div class="cols padding_right col-5 col-md-6">
							<?php the_field('pole5'); ?>
						</div>
						<div class="cols col-5 col-md-6">
							<?php the_field('pole6'); ?>
						</div>
					</div>
					<div class="row clearfix">
						<div class="cols padding_right col-5 col-md-6">
							<?php the_field('pole7'); ?>
						</div>
						<div class="cols col-5 col-md-6">
							<img class="content-img google-img-4" src="<?php bloginfo('template_url'); ?>/img/ga/dn_service-google-img-4.svg" alt="">
						</div>
					</div>
					<div class="row clearfix">
						<div class="cols col-5">
							<?php the_field('pole8'); ?>
						</div>
						<div class="cols col-5">
							<?php the_field('pole9'); ?>
						</div>
					</div>
					<div class="row clearfix">
						<div class="cols padding_right col-5 col-md-6 faq">
							<?php the_field('pole10'); ?>
						</div>
						<div class="cols col-5 col-md-6">
							<img class="content-img google-img-3" src="<?php bloginfo('template_url'); ?>/img/coach/dn_couch-img-16.svg" alt="">
						</div>
					</div>
					<div class="row clearfix">
						<h4 class="small-title box">
							От ворот поворот
						</h4>
						<div class="cols padding_right col-5 col-md-6">
							<?php the_field('pole11'); ?>
						</div>
						<div class="cols col-5 col-md-6">
							<?php the_field('pole12'); ?>
						</div>
					</div>
					<div class="row clearfix">
						<div class="cols padding_right col-5 col-md-6">
							<?php the_field('pole13'); ?>
						</div>
						<div class="cols col-5 col-md-6">
							<img class="content-img google-img-5" src="<?php bloginfo('template_url'); ?>/img/ga/dn_service-google-img-5.svg" alt="">
							<p><span class="strong-text">
								Оставьте заявку на консультацию по контекстной рекламе GoogleAdWords в этой простой форме.
							</span></p>
							<p><span class="strong-text">
								Не забудьте написать ваше имя и контакты, и я лично свяжусь с вами в ближайшее рабочее время.
							</span></p>
							<div class="bottom-form">
								<form id="js_form" class="cloud-form">
									<!-- Hidden Required Fields -->
									<input type="hidden" name="project_name" value="Dinelli.ru">
									<input type="hidden" name="admin_email" value="<?php the_field('mail'); ?>">
									<input type="hidden" name="form_subject" value="Заявка с сайта">
									<!-- END Hidden Required Fields -->
									<label class="cloud-form__phone" for="phone">Телефон</label>
									<input id="phone" class="cloud-form__phone" type="text" name="phone"
									value="" placeholder="+7(___) ___-__-__" required
									pattern="^((8|\+7)[\- ]?)?(\(?\d{3}\)?[\- ]?)?[\d\- ]{7,10}$">
									<label class="cloud-form__mail" for="mail">e-mail</label>
									<input id="mail"  class="cloud-form__mail" type="text" name="mail"
									value="" placeholder="iNfo@DiNelli.ru" required
									pattern="^([A-Za-z0-9_\.\-]{1,20})@([a-z0-9\.\-]{1,20})\.([a-z]{2,4})">
									<label  class="cloud-form__message" for="message">сообщение</label>
									<textarea id="message" class="cloud-form__message" name="message"
									rows="4" cols="80" placeholder="Очень хочу качественную рекламу для сайта DiNelli.ru Рекламный бюджет от 50 тр."></textarea>

									<button id="submit" class="cloud-form__submit" type="submit" name="submit">
										Отправить заявку
									</button>
									<input id="сonsent" class="cloud-form__сonsent" type="checkbox" name="сonsent" value="" required>
									<label class="cloud-form__сonsent" for="сonsent">
										Согласие на обработку персональных данных
									</label>
								</form>
							</div>
						</div>
					</div>
					<div class="row clearfix">
						<div class="cols col-5 col-md-6">
							<img class="content-img" src="<?php bloginfo('template_url'); ?>/img/ga/nelli_davydova_yandex_direct-47.png" alt="">
						</div>
						<div class="cols col-5 col-md-6 umbrella">
							<h4 class="small-title">
								<span class="color-text">Основатель</span> рекламного агентства Dinelli. Профессионал в контекстной рекламе Яндекс.Директ и просто красавица, Нелли Давыдова.
							</h4>
							<a class="question_link" href="https://vk.com/topic-55517976_28337937">Посмотреть все результаты и отзывы</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

</main>

<?php
get_footer();
