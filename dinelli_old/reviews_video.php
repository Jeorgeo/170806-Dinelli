<?php
/* Template Name: Видео отзывы */ 
?><?php get_header(); ?>
	<?php /*
		if (have_posts()){
			while (have_posts()) : the_post();
			the_content();
			endwhile;
		} */?>
				<div class="content-padding">

					<div class="row" style="margin:85px 0 0 0;text-align:left;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<img src="<?php bloginfo('template_url'); ?>/i/data/reviews/header.png" alt="">
						</div>
					</div>

					<div class="row" style="margin:51px 0 0 0;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<ul class="reviews-menu" style="margin:0 0 0 -16px;">
								<li><a href="<?php bloginfo('url'); ?>/reviews_text/">Письменные отзывы</a></li>
								<li>Видео отзывы</li>
								<li><a href="<?php bloginfo('url'); ?>/reviews_vk/">Отзывы Вконтакте</a></li>
							</ul>
						</div>
					</div>

					<div class="reviews-items">
						<?php get_reviews_video(); ?>
						<?php /*
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="reviews-item">
								<img src="<?php bloginfo('template_url'); ?>/i/data/reviews/video.png" alt="">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="reviews-item">
								<div class="reviews-item-title">Ярмарка Эмоций</div>
								<div class="reviews-item-row reviews-item-row-1">
									<div class="reviews-item-row-title">Затраты</div>
									<div class="reviews-item-row-price">42 т.р.</div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-row reviews-item-row-2">
									<div class="reviews-item-row-title">Прибыль</div>
									<div class="reviews-item-row-price">50 т.р.</div>
									<div class="reviews-item-row-arrow"></div>
									<div class="reviews-item-row-profit">190 т.р.</div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-row reviews-item-row-3">
									<div class="reviews-item-row-title">Конверсия</div>
									<div class="reviews-item-row-price">3%</div>
									<div class="reviews-item-row-arrow"></div>
									<div class="reviews-item-row-profit">9,1%</div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-desc">Выбирал очень щепетильно, так как наслышан о «горе» -директологах и программистах. Увидел рекламу DiNelli, просмотрел их кейсы, ознакомился с услугами, но окончательное решение принял. Решил...  <a href="#">читать далее</a></div>
							</div>
						</div>



						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="reviews-item">
								<img src="<?php bloginfo('template_url'); ?>/i/data/reviews/video.png" alt="">
							</div>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="reviews-item">
								<div class="reviews-item-title">Аметист</div>
								<div class="reviews-item-row reviews-item-row-1">
									<div class="reviews-item-row-title">Затраты</div>
									<div class="reviews-item-row-price">37 т.р.</div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-row reviews-item-row-2">
									<div class="reviews-item-row-title">Прибыль</div>
									<div class="reviews-item-row-price">30 т.р.</div>
									<div class="reviews-item-row-arrow"></div>
									<div class="reviews-item-row-profit">210 т.р.</div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-row reviews-item-row-3">
									<div class="reviews-item-row-title">Конверсия</div>
									<div class="reviews-item-row-price">2%</div>
									<div class="reviews-item-row-arrow"></div>
									<div class="reviews-item-row-profit">8,7%</div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-desc">Увидел рекламу DiNelli, просмотрел их кейсы, ознакомился с услугами, но окончательное решение принял. Решил заняться новой для себя нишей, и на начальном этапе задача привлечение...  <a href="#">читать далее</a></div>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="reviews-item">
								<img src="<?php bloginfo('template_url'); ?>/i/data/reviews/video.png" alt="">
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="reviews-item">
								<div class="reviews-item-title">Эверест</div>
								<div class="reviews-item-row reviews-item-row-1">
									<div class="reviews-item-row-title">Затраты</div>
									<div class="reviews-item-row-price">26 т.р.</div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-row reviews-item-row-2">
									<div class="reviews-item-row-title">Прибыль</div>
									<div class="reviews-item-row-price">49 т.р.</div>
									<div class="reviews-item-row-arrow"></div>
									<div class="reviews-item-row-profit">133 т.р.</div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-row reviews-item-row-3">
									<div class="reviews-item-row-title">Конверсия</div>
									<div class="reviews-item-row-price">0,7%</div>
									<div class="reviews-item-row-arrow"></div>
									<div class="reviews-item-row-profit">5,2%</div>
								</div>
								<div style="clear:both;"></div>
								<div class="reviews-item-desc">Решил заняться новой для себя нишей, и на начальном этапе задача привлечение клиентов. Способ – создание сайта и настройка контекстной рекламы. Выбирал очень щепетильно, так как наслышан о...  <a href="#">читать далее</a></div>
							</div>
						</div>*/ ?>

					</div>

					<?php
					// echo get_reviews_count('reviews_video') .'>'. get_reviews_per_page('reviews_video');
						if(get_reviews_count('reviews_video') > get_reviews_per_page('reviews_video') ){ 
					?>
					<div class="reviews-items-more">
						<input type="hidden" id="reviews-items-paged" value="0">
						<a href="#" class="dinelli_button" style="margin: 0 auto;" onclick="get_reviews('reviews_video'); return false;">Показать еще</a>
						<div class="reviews-items-more-load"></div>
					</div>
					<?php } else { ?>
					<div class="reviews-items-more"></div>


					<?php } ?>



				</div><!--/.content-padding-->


<?php get_footer(); ?>