<?php
/* Template Name: Услуги */ 
?><?php get_header(); ?>
	<?php
		if (have_posts()){
			while (have_posts()) : the_post();
			the_content();
			endwhile;
		}

		/*
				<div class="content-padding">

					<div class="row" style="margin:55px 0 0 0;text-align:center;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<img src="i/data/service/header.png" alt="">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3 style="margin-top:15px;">Инструменты дохода</h3>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<p>Ниже представлены все необходимые Вам инструменты для того,  чтобы ваш бизнес приносил больше доходов:</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<p>Если есть выбор  рекламщиков – это прекрасно! Но перебирать многочисленные предложения сложно. Можно запутаться. И, конечно же, существует вероятность нарваться на «красное словцо».</p>
						</div>
					</div>



					<br><br>



					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
							<h4 class="blue uppercase bold">Яндекс Директ</h4>
							<p>контекстная реклама</p>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
							<h4 class="blue uppercase bold">Google adwords</h4>
							<p>контекстная реклама</p>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
							<h4 class="blue uppercase bold">SEO-продвижение.</h4>
							<p>Ваш сайт в топе по поиску</p>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
							<h4 class="blue uppercase bold">E-mail маркетинг</h4>
							<p>продающие письма</p>
						</div>
					</div> 


					<div style="width:100%;margin: 0 0 60px 0;"></div>


					<div class="row">
						<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
							<h4 class="blue uppercase bold">Копирайтинг</h4>
							<p>тексты, вызывающие доверие у потенциальных клиентов</p>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
							<h4 class="blue uppercase bold">Сайт</h4>
							<p>разработка продающего сайта</p>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
							<h4 class="blue uppercase bold">Дизайн</h4>
							<p>разработка фирменного стиля и логотипа</p>
						</div>
						<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
							<h4 class="blue uppercase bold">Приложения</h4>
							<p>разработка мобильных приложений и адаптация сайтов под мобильные устройства</p>
						</div>
					</div>




					

					<div class="row" style="margin:50px 0 0 0;text-align:center;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<img src="i/data/service/aroma.png" alt="">
						</div>
					</div>


					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3 style="margin-top:22px;">Пришла пора...</h3>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>


					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<p>Эйнштейн в свое время заметил: «Бессмысленно продолжать делать то же самое и ждать других результатов». Ваши клиенты уходят к вашим конкурентам? Значит, пришла пора менять политику рекламы.</p>
							<p class="red">Чтобы ваши вложения в Рекламную кампанию оправдались, а прибыль приумножалась, мы предлагаем:</p>
							<ul>
								<li>Аудит вашего сайта / продающей страницы (landing page) по юзабилити</li>
								<li>Аудит вашей Контекстной рекламы в Googleadwords</li>
								<li>Настройку РСЯ</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<p>Мы подбираем высокочастотные и низкочастотные ключевые слова и фразы – это те слова, которые предположительно могут ввести в поиск заинтересованные люди, которые либо целенаправленно ищут ваш товар, либо хотят сориентироваться в предложении.</p>
							<ul>
								<li>Снижение цены привлечение клиента</li>
								<li>Снижение стоимости клика на 45%</li>
								<li>Прозрачная отчетность и улучшение результатов</li>
							</ul>
							<div style="padding:55px 0 0 33px;">
								<a href="#" class="dinelli_button">Узнать больше</a>
							</div>
						</div>
					</div>






					
					
					<div class="row" style="padding: 67px 0 0 0;">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn" style="z-index:10000;">
							<h3>Заявка на консультацию</h3>
							<p>Самая большая радость - видеть, как растут важные для бизнеса параметры, и понимать правильность сделанного выбора!</p>
							<p>Закажите консультацию по вашему бизнесу у DINELLI и узнайте, эффективны ли ваши рекламные инструменты</p>
							<p>Напишите ваши контакты и пожелания, и я, Нелли Давыдова лично свяжусь с вами в ближайшее рабочее время.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn" style="min-height:568px;padding: 90px 0 0 35px;">
							<form class="feedback row">
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn" style="line-height:36px;">
										Имя
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn mobile_center">
										<input type="text" name="name" class="feedback_name" required>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn" style="line-height:36px;">
										e-mail
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn mobile_center">
										<input type="text" name="email" class="feedback_email" required>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn" style="line-height:36px;">
										сообщение
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn mobile_center">
										<textarea name="msg" class="feedback_textarea"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn">
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn" style="line-height:36px;">
									</div>
									<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn mobile_center" style="text-align:center;">
										<div class="feedback_button_wrap">
											<input type="submit" class="feedback_button" value="Отправить заявку">
										</div>
									</div>
								</div>
							</form>
							<img src="i/form/bg.png" alt="" class="img-absolute-right">
						</div>
					</div>

				</div><!--/.content-padding-->


				*/ ?>
<?php get_footer(); ?>