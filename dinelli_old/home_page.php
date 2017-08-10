<?php
/* Template Name: Главная */
?><?php get_header(); ?>
	<?php
		if (have_posts()){
			while (have_posts()) : the_post();
			the_content();
			endwhile;
		}
	/*?>
				<div class="row row-right" style="background:#f7fafc;">
					<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						<img src="i/data/main/photo.png">
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn" style="padding:50px 0 20px 0;">
						<div class="mobile_padding">
							<h1>Реклама Вашего<br> бизнеса<br>в интернете</h1>
							<br>
							<h3>Рекламное агентство<br>Нелли Давыдовой</h3>
							<p>Приток клиентов и повышение уровня<br>продаж в вашем бизнесе</p>
						</div>
					</div>
				</div>
				<div class="content-padding">
					<div class="row" style="padding:50px 0;">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Приветствую вас, господа!</h3>
							<p>Я Нелли Давыдова,  сертифицированный специалист по Яндекс.Директ (ЯД), маркетингу и контекстной рекламе, антикризисный управляющий, основатель рекламного  агентства DiNelli.</p>
							<p>У меня имеется для вас дельное предложение!</p>

						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Дополнительные услуги</h3>
							<p><a href="#">Аудит и обучение менеджеров по работе с клиентами</a></p>
							<p><a href="#">Настройка рекламы в Google</a></p>
							<p><a href="#">SEO-оптимизация</a></p>
							<p><a href="#">Копирайтинг</a></p>
							<p><a href="#">Разработка фирменного стиля, логотипа (айдентика)</a></p>
							<p><a href="#">Разработка мобильных приложений</a></p>
						</div>
					</div>
					<div class="row" style="margin-top:-100px;text-align:center;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<img src="i/data/main/bg_1.png" alt="">

						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Вложения без торможения</h3>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<p>Согласитесь, приятно осознавать, что деньги, вложенные в рекламу собственного бизнеса, принесли прибыль, а не улетели в трубу?!</p>
							<p class="red">95% бизнесменов при выборе исполнителя на Рекламную Кампанию вспоминают фразу: «Цена соответствует качеству», но, тем не менее, многие стремятся сэкономить. На ком? На себе!</p>
							<p>Но позвольте, если предпочесть дешевизну, то миновать ошибки будет уже сложно. Упущенная выгода надолго остановит рост и развитие бизнеса. Следует заметить, что и качество бывает разным! И даже за большие деньги можно «вляпаться» в брак!</p>
							<p>Грамотная настройка контекстной рекламы — это верный путь к уменьшению затрат на привлечение клиентов.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<p>Доверяйте рекламный бюджет только профессионалам! Агентство DINELLI  работает с целью повышения вашей прибыли и охраняет её днем и ночью… </p>
							<p class="red">Вот так:</p>
							<ul>
								<li>Настройка контекстной рекламы Яндекс.Директ и GoogleAdWords</li>
								<li>Формирование вашего уникального торгового предложения</li>
								<li>Создание и SEO продвижения сайтов</li>
								<li>Email маркетинг</li>
							</ul>
						</div>
					</div>
					<div class="row" style="margin-top:-100px;text-align:center;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<img src="i/data/main/bg_2.png" alt="">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>— поднять ваши продажи в интернете</h3>
							<p>Запуск контекстной рекламы Яндекс.Директ и GoogleAdwords:</p>
							<ul>
								<li>Горячие клиенты уже через 3 минуты после запуска рекламной кампании.</li>
								<li>Высокая конверсия без «утепления клиентов» и мучительных SEO.</li>
								<li>Грамотная настройка рекламной кампании - уменьшение затрат на привлечение клиентов.</li>
							</ul>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>
					<div class="row" style="padding:50px 0;">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn" style="z-index:1000;">
							<h3>Масло или спред</h3>
							<p>Плескаться в славе почетного бизнесмена, производящего бесценные услуги или супер продукт можно и нужно! Вы ведь хотите получить именно такой результат работы рекламы, верно?</p>
							<p><span class="red">«Укладывать штабелями» удовлетворенных клиентов</span> и повышать продажи – это такое же увлекательное занятие, как, например, для ребенка-сладкоежки загружать в себя море вкуснятины.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<img src="i/data/main/bg_3.png" alt="" class="img-absolute-right" style="margin-top:-80px;">
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Бизнес Агентство DINELLI поможет вам заполучить желаемое</h3>
							<p>Мы поможем вам расслабиться и получить удовольствие от встречи с «горячими» клиентами! Красное платье – бренд Dinelli. Оно действует на вашего клиента, как приманка на быка! (шутка)</p>
							<p>Наши клиенты оценили бренд DINELLI не за красное словцо, а за результат!</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>
					<br><br>

					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
								<img src="i/data/main/list_1_icon_1.png" alt="">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-6 wow bounceIn">
								<p><b>Пунктуальность</b></p>
								<p>держим сроки в узде</p>
							</div>
						</div>
						<br><br>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
								<img src="i/data/main/list_1_icon_2.png" alt="">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-6 wow bounceIn">
								<p><b>Усердие</b></p>
								<p>доводим рекламную кампанию до совершенства</p>
							</div>
						</div>

						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
								<img src="i/data/main/list_1_icon_3.png" alt="">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-6 wow bounceIn">
								<p><b>Ответственность</b></p>
								<p>вникаем в суть ещё до того как вы решите работать с DINELLI</p>
							</div>
						</div>
						<br><br>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<div class="col-md-3 col-sm-3 col-xs-6 wow bounceIn">
								<img src="i/data/main/list_1_icon_4.png" alt="">
							</div>
							<div class="col-md-9 col-sm-9 col-xs-6 wow bounceIn">
								<p><b>Тактичность</b></p>
								<p>персонализации работы по вашему заказу</p>
							</div>
						</div>
					</div>

					<br><br><br><br>


					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<img src="i/data/main/bg_4.png" alt="">
							<br><br><br><br>
							<h3>Красная армия</h3>
							<p>На протяжении 3 лет команда DINELLI старательно трудится, предоставляя результат своим клиентам – прямое попадание в ЦА.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Атмосфера</h3>
							<p>Теплая атмосфера царит в нашем офисе. Это благоприятно сказывается на результате сотрудничества.</p>
							<br><br>
							<img src="i/data/main/bg_5.png" alt="">
						</div>
					</div>

					<br><br><br><br>

					<div class="row" style="margin-top:-100px;text-align:center;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<img src="i/data/main/bg_6.png" alt="">
						</div>
					</div>

					<br><br><br><br>

					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>С чего начинаем знакомство?</h3>
							<h3>Конечно с раздевания!</h3>
							<p>Каждая «клеточка организма» Вашего бизнеса досконально изучается и анализируется. Именно от этого зависит результат работы рекламы.</p>
							<p>Благодаря постоянному мониторингу, заказов у наших клиентов в 3 раза больше, чем у других рекламодателей.</p>
							<p>Вас ожидает бесплатный аудит сайта и уже имеющейся Рекламной Кампании. Этот бонус вам пригодиться по любому!</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<img src="i/data/main/bg_7.png" alt="" class="img-absolute-right">
						</div>
					</div>

					<br><br>


					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Детали работы:</h3>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>


					<div class="row">
						<div class="col-md-4 col-sm-4 col-xs-12 wow bounceIn mobile_center">
							<br><br>
							<img src="i/data/main/list_2_icon_1.png" alt="">
							<p>Анализ сайта и источников трафика, переходов на него</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 wow bounceIn mobile_center">
							<br><br>
							<img src="i/data/main/list_2_icon_2.png" alt="">
							<p>Анализ существующих рекламных кампаний в Яндекс.Директ при их наличии</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 wow bounceIn mobile_center">
							<br><br>
							<img src="i/data/main/list_2_icon_3.png" alt="">
							<p>Рекомендации по улучшению сайта с точки зрения его восприятия посетителями и удобству пользования</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 wow bounceIn mobile_center">
							<br><br>
							<img src="i/data/main/list_2_icon_4.png" alt="">
							<p>Мониторинг всех объявлений и контроль цены на рекламу</p>
						</div>
						<div class="col-md-4 col-sm-4 col-xs-12 wow bounceIn mobile_center">
							<br><br>
							<img src="i/data/main/list_2_icon_5.png" alt="">
							<p>Ежедневное проведение рекламной кампании после настройки и оплаты</p>
						</div>
					</div>




					<div class="row" style="margin:50px 0;text-align:center;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<img src="i/data/main/bg_8.png" alt="">
						</div>
					</div>



					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Ну вот, познакомились, поехали дальше…</h3>
							<p><span class="red">Мы приносим пользу</span> бизнесменам, предпринимателями захватчикам вселенной.</p>
							<p>За вашей кампанией закрепляется наш специалист и ежедневно корректирует данные в зависимости от изменений в рекламной кампании.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>


					<br><br>



					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12 wow bounceIn">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-6 wow bounceIn">
									<img src="i/data/main/list_3_icon_1.png" alt="">
								</div>
								<div class="col-md-8 col-sm-8 col-xs-6 wow bounceIn">
									<b>Фиксирует</b>
									<p>причину возможного повышения цен</p>
									<br><br><br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-6 wow bounceIn">
									<img src="i/data/main/list_3_icon_3.png" alt="">
								</div>
								<div class="col-md-8 col-sm-8 col-xs-6 wow bounceIn">
									<b>Убирает</b>
									<p>ненужные объявления</p>
									<br><br><br>
								</div>
							</div>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 wow bounceIn mobile_center">
							<img src="i/data/main/list_3_icon_5.png" alt="">
						</div>
						<div class="col-md-5 col-sm-5 col-xs-12 wow bounceIn">
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-6 wow bounceIn">
									<img src="i/data/main/list_3_icon_2.png" alt="">
								</div>
								<div class="col-md-8 col-sm-8 col-xs-6 wow bounceIn">
									<b>Держит</b>
									<p>цены за клик в вашей кампании на должном уровне</p>
									<br><br><br>
								</div>
							</div>
							<div class="row">
								<div class="col-md-4 col-sm-4 col-xs-6 wow bounceIn">
									<img src="i/data/main/list_3_icon_4.png" alt="">
								</div>
								<div class="col-md-8 col-sm-8 col-xs-6 wow bounceIn">
									<b>Регулирует</b>
									<p>показ объявлений</p>
									<br><br><br>
								</div>
							</div>
						</div>
					</div>




					<div class="row" style="margin:50px;text-align:center;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<img src="i/data/main/bg_9.png" alt="">
						</div>
					</div>




					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Заводы</h3>
							<p>ЖБИ, ювелирные, нанотехнологий,  стеклопластиковой арматуры, машиностроения, строительных материалов,  университеты в Праге и Сочи, различные школы, студии.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>


					<br><br>


					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Сотрудничество с компаниями</h3>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>


					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<p>малоэтажного строительства,  крупными застройщиками многоэтажных домов, торговых центров, административных зданий, ремонтными компаниями и банками.</p>
							<p>... туристические агентства, интернет магазины... и все пишут отзывы. И я <span class="red">благодарю</span> всех за это!</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<p>А о сотрудничестве с компаниями пожарной безопасности, видеонаблюдения, бурения, клининга я буду помнить вечно. Клянусь, клянусь, клянусь!</p>
						</div>
					</div>


					<div class="row" style="margin:50px 0;text-align:center;">
						<div class="col-md-12 col-sm-12 col-xs-12 wow bounceIn">
							<img src="i/data/main/bg_10.png" alt="">
						</div>
					</div>

					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<p>С этого момента берём на себя обязательства взять в оборот ваш бизнес и довести его до полного возбуждения интереса вашей целевой аудитории.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>


					<br><br>

					<div class="row">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Спасибо за внимание!</h3>
							<p>Приглашаю Вас на <a href="#">бесплатные вебинары</a> для предпринимателей.</p>
							<p>Тема: «Оптимизация бизнеса»</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
						</div>
					</div>


					<br><br>

					<div class="row" style="min-height:600px;">
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
							<h3>Заявка</h3>
							<p>По вопросам дальнейшего сопровождения и Ведение рекламных кампаний в Яндекс.Директ обращайтесь, заполнив форму справа.
Я свяжусь с вами в течении 15 минут и отвечу на ваше обращение лично.</p>
						</div>
						<div class="col-md-6 col-sm-6 col-xs-12 wow bounceIn">
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

				*/?>


<?php get_footer(); ?>
