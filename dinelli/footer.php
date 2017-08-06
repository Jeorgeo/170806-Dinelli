



				
			</div><!--/#content-page-->

		</div><!--/#content-->
		<div style="clear:both;"></div>

		<div id="footer">
			<div class="row">
				<div class="col-xs-3 col-lg-3 col-md-3 col-sm-12 left">
					<div  style="line-height:27px;text-align:right;">
					+7 918 476 90 30<br>
					Менеджер ВК
					</div>
				</div>
				<div class="col-xs-4 col-lg-4 col-md-4 col-sm-12">
					<ul>
						<li   style="line-height:28px;"><a href="#">Партнерская программа</a></li>
						<li   style="line-height:28px;"><a href="#">Политика конфиденциальности</a></li>
						<li   style="line-height:28px;"><a href="#">Договор оферты</a></li>
					</ul>
				</div>
				<div class="col-xs-5 col-lg-5 col-md-5 col-sm-12">
					<p>&copy; 2016. Разработано агенством DiNelli. Все права защищены. Использование материалов сайта возможно только с личного разрешения Нелли Давыдовой.</p>
					<p>ИП Давыдова Нелли ОРГН 1290003800407519</p>
				</div>
			</div>
		</div><!--/#footer-->
	</div><!--/#wrapper-->




</div><!--/#content-wrap-->




<script type="text/javascript">


(function () {
		var $body = document.body, $menu_trigger = $body.getElementsByClassName('menu-trigger')[0];
		if (typeof $menu_trigger !== 'undefined') {
				$menu_trigger.addEventListener('click', function () {
						$body.className = $body.className == 'menu-active' ? '' : 'menu-active';
				});
		}
}.call(this)); 


//@ sourceURL=pen.js
$(document).ready(function(){
		$(".accordion-wrap").hide();

		$(".accordion-btn").click(function(){
				id = $(this).data('id');
				$('#'+id).slideToggle("slow")
				.siblings("li:visible").slideUp("slow");

				$(this).toggleClass("active");

				//$('#'+id+' i').css('visibility','visible');

				//$(this).siblings("h3").removeClass("active");
		});







	//reviews-items-paged

});
</script>


<style type="text/css">
	#modal_form_wrap {
		height:400px;width:350px;padding:20px;margin: 0 0 0 0;
	}
</style>

<div style="display:none;">
	<div id="modal" id="modal_form_wrap_wrap">
		<div id="modal_form_wrap" style="">
			<form id="modal_form" method="post" class="form_auto" style="width:100%;height:100%;">
				<input type="hidden" name="action" value="feedback">
								<div class="row" style="text-align:center;"><h3>Заказать звонок</h3></div>
								<br>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn" style="line-height:36px;">
										Имя
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12 wow bounceIn mobile_center">
										<input type="text" name="name" class="feedback_name" required>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn" style="line-height:36px;">
										e-mail
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12 wow bounceIn mobile_center">
										<input type="email" name="email" class="feedback_email" required>
									</div>
								</div>
								<br>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn" style="line-height:36px;">
										сообщение
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12 wow bounceIn mobile_center">
										<textarea name="msg" class="feedback_textarea"></textarea>
									</div>
								</div>
								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12 wow bounceIn" style="line-height:36px;">
									</div>
									<div class="col-md-9 col-sm-9 col-xs-12 wow bounceIn mobile_center" style="text-align:center;">
										<div class="feedback_button_wrap">
											<input type="submit" class="feedback_button" value="Отправить заявку">
										</div>
									</div>
								</div>
							</form>
		</div>
	</div>
</div>


	<?php wp_footer(); ?>
</body>
</html>