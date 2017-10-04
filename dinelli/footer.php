<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Dinelli
 */

?>

		</div><!--/#content-->
		<div id="footer" class="main footer">
			<div class="container">
				<div class="row clearfix">
					<div class="cols col-5">
						<div class="footer_content">
							<?php dynamic_sidebar( 'footer_al' ); ?>
							<?php dynamic_sidebar( 'footer_pl' ); ?>
						</div>
					</div>
					<div class="cols col-5 footer__footer-copy">
						<div id="logo" class="site-branding">
						<?php	the_custom_logo(); ?>
						</div>
						<div class="footer-contacts">
							<?php dynamic_sidebar( 'phone' ); ?>
							<?php dynamic_sidebar( 'phone_b' ); ?>
							<div class="contacts_icon">
								<span class="contacts_icon-w"></span>
								<span class="contacts_icon-v"></span>
								<span class="contacts_icon-t"></span>
							</div>
						</div>
						<div class="footer_content">
							<?php dynamic_sidebar( 'footer_about' ); ?>
							<?php dynamic_sidebar( 'footer_content' ); ?>
						</div>
						<?php dynamic_sidebar( 'footer_copy' ); ?>
					</div>
				</div>
			</div>
		</div><!--/#footer-->
	</div><!-- #page -->

	<!-- popup form -->

	<div class="wrap"></div>
	<div class="popup-question-thanks">

	  <div class="box-content">
	  	<p>
				Вы очень умны, что решили обойти всех конкурентов с нами, мы как закончим танцевать от счастья,
				сразу же свяжемся с вами.
			</p>
			<p>
				Если ваш вопрос не терпит отлагательств, то вы можете продублировать его в личные сообщения.
				(Пока вы читали, открылось окно новой вкладкой.
				Пишите, не откладывайте, я почти всегда онлайн Bконтакте.)
			</p>
			<p>
				С уважением, Нелли Давыдова.
	  	</p>
	  </div>
		<ul class="sidebar-social clearfix">
			<li><?php dynamic_sidebar( 'social_vk' ); ?></a></li>
			<li><?php dynamic_sidebar( 'social_f' ); ?></a></li>
			<li><?php dynamic_sidebar( 'social_youtube' ); ?></a></li>
			<li><?php dynamic_sidebar( 'social_instagram' ); ?></a></li>
		</ul>
	</div>

	<div id="window" class="popup-question">
	  <div class="popup-question-close">
	    close
	  </div>
		<div class="details-form">
			<form id="js_form" method="post" class="cloud-form">
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
				rows="4" cols="80" placeholder=""></textarea>
				<button id="submit" class="cloud-form__submit" type="submit" name="submit">
					Отправить заявку
				</button>
				<input id="сonsent-p" class="cloud-form__сonsent" type="checkbox" name="сonsent" value="" required>
				<label class="cloud-form__сonsent" for="сonsent-p">
					Согласие на обработку персональных данных
				</label>
			</form>
		</div>
	</div>


	<?php wp_footer(); ?>
</body>
</html>
