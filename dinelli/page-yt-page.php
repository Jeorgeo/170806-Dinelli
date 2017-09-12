<?php
/**
 * Template Name: Услуги и предложения YOUTUBE
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
	<section class="yt box-1">
		<div class="container">
			<span class="box-title box">
				Услуги<br>и предложения
			</span>
			<div class="box-content clearfix">
				<h4 class="big-title box">
					YOUTUBE
				</h4>
				<div class="row clearfix">
					<div class="cols col-5 col-md-6">
						<p>
							Ваши видео будут  заметны и узнаваемы на самом популярном видеохостинг
						</p>
					</div>
					<div class="cols col-5 col-md-6">
						<p>
							Основная услуга, с которой начинается продвижение  видео в интернете - аудит вашего YouTube канала
						</p>
					</div>
				</div>
				<div class="row clearfix">
					<div class="cols col-3 col-md-6 left_side">
						<a class="service__card" href="#" onclick="showPopup()">
							<img src="<?php bloginfo('template_url'); ?>/img/yt/dn_service-youtube-img-2.jpg" alt="">
						</a>
					</div>
					<div class="cols col-3 col-md-6">
						<a class="service__card" href="#" onclick="showPopup()">
							<img src="<?php bloginfo('template_url'); ?>/img/yt/dn_service-youtube-img-3.jpg" alt="">
						</a>
					</div>
					<div class="cols col-3 col-md-6 right_side">
						<a class="service__card" href="#" onclick="showPopup()">
							<img src="<?php bloginfo('template_url'); ?>/img/yt/dn_service-youtube-img-4.jpg" alt="">
						</a>
					</div>
				</div>
				<div class="row clearfix">
					<div class="cols col-5 col-md-6">
						<h4 class="small-title">Заявка на консультацию</h4>
						<p>Напишите ваши контакты и пожелания, и я, Нелли Давыдова лично свяжусь с вами в ближайшее рабочее время.</p>

					</div>
					<div class="cols col-5 bottom-form col-md-6">
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
							<input id="сonsent" class="cloud-form__сonsent" type="checkbox" name="сonsent" value="" required>
							<label class="cloud-form__сonsent" for="сonsent">
								Согласие на обработку персональных данных
							</label>
							<button id="submit" class="cloud-form__submit" type="submit" name="submit">
								Отправить заявку
							</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</section>
</main>

<?php
get_footer();
