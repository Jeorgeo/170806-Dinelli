






		</div><!--/#content-->


		<div id="footer" class="main-footer">
			<div class="row">
				<div class="col-xs-2 col-lg-2 col-md-2 col-sm-12 left contacts">
					<div class="footer-contacts">
					<div class="contacts_icon">
						<span class="contacts_icon-w"></span>
						<span class="contacts_icon-v"></span>
						<span class="contacts_icon-t"></span>
						<span class="contacts_icon-s"></span>
					</div>
					<?php dynamic_sidebar( 'phone' ); ?>
					<?php dynamic_sidebar( 'phone_b' ); ?>
					</div>
				</div>
				<div class="col-xs-2 col-lg-2 col-md-2 col-sm-12">
					<ul class="footer_content">
						<li><?php dynamic_sidebar( 'footer_c' ); ?></li>
					</ul>
				</div>
				<div class="col-xs-3 col-lg-3 col-md-4 col-sm-12">
					<?php dynamic_sidebar( 'footer_copy' ); ?>
				</div>
			</div>
		</div><!--/#footer-->
	</div><!-- #page -->


	<?php wp_footer(); ?>
</body>
</html>
