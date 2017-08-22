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

		<div id="footer" class="main-footer">
			<div class="container">
				<div class="row clearfix">
					<div class="cols col-6">
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
					<div class="cols col-6 main-footer__footer-copy">
						<?php dynamic_sidebar( 'footer_copy' ); ?>
					</div>
				</div>
			</div>
		</div><!--/#footer-->
	</div><!-- #page -->


	<?php wp_footer(); ?>
</body>
</html>
