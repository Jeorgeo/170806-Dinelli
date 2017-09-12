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
					<div class="cols col-5 col-md-6">
						<div class="cols col-5 contacts">
							<div class="footer-contacts">
								<?php dynamic_sidebar( 'phone' ); ?>
								<?php dynamic_sidebar( 'phone_b' ); ?>
								<div class="contacts_icon">
									<span class="contacts_icon-w"></span>
									<span class="contacts_icon-v"></span>
									<span class="contacts_icon-t"></span>
									<span class="contacts_icon-s"></span>
								</div>
							</div>
						</div>
						<div class="cols col-7">
							<ul class="footer_content">
								<li><?php dynamic_sidebar( 'footer_c' ); ?></li>
							</ul>
						</div>
					</div>
					<div class="cols col-5 col-md-6 footer__footer-copy">
						<?php dynamic_sidebar( 'footer_copy' ); ?>
					</div>
				</div>
			</div>
		</div><!--/#footer-->
	</div><!-- #page -->

	<!-- popup form -->

	<div class="wrap"></div>

	<div id="window" class="popup-question">
	  <div class="popup-question-close">
	    x
	  </div>
		<div class="details-form">
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


	<?php wp_footer(); ?>
</body>
</html>
