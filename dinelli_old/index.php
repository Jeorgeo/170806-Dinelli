<?php get_header(); ?>
	<?php
		if (have_posts()){
			while (have_posts()) : the_post();

			?>
				<div class="content-padding">
					<div class="row">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn page">
							<div class="content-padding__box">
								<?php the_content(); ?>
							</div>
						</div>
					</div>
				</div>
				<?php

			endwhile;
		}

	?>
<?php get_footer(); ?>
