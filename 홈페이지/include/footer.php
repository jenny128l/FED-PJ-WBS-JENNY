	</div>
	</div>	
</div>
</div>
	<div id="footer">
		<div class="inner">
			<address><span class="division">#407, 4F SK V1 Center, 25-32, LS-ro 116beon-gil, Dongan-gu, Anyang-si, Gyeonggi-do, Korea. (Zip code: 14118)</span><br><span class="foot_area foot_bar" style="background:none;padding-left:0; margin-left:0;">Tel. +82-70-7603-8135</span><span class="foot_area">FAX. +82-70-4641-5849</span></address>
			<p class="copyright">Copyrightⓒ 2018 PS INODIC CO., LTD  All Rights reserved.</p>
			<a href="javascript:;" class="foot_top"><img src="<?php echo G5_URL; ?>/images/main/top.png" alt=""></a>
		</div>
	</div>
<script>
	
		$('.foot_top').click(function(){
			var top = $('#header').offset().top;
			$('html,body').animate({
				'scrollTop' : top,
			},400);
		});
	
	   var cnt = 0;
		$('.tab_lists > li').show();
		$('.tab_lists > li').eq(0).addClass('on');
		$('.tab_cont').hide().eq(0).show();
		$('.tab_lists > li').click(function(){
			cnt = $(this).index();
			$('.tab_lists > li').removeClass('on');
			$(this).addClass('on');
			$('.tab_cont').hide().eq(cnt).show();
		});
	$(window).on('load',function(){
		if($(window).width() <= 1024 && $(window).width() >= 768){
			var check = false;
			$('.mobile_nav_list > li').click(function(e){
				var index = $(this).index();
				$('.mobile_nav_list > li').each(function(){
					if($(this).index() != index) {
						$(this).removeClass("active");
						$(this).children("ul").fadeOut();	
					}
				});
				
				if(!$(this).hasClass('active')){
					$(this).addClass('active');
					$(this).children('ul').fadeIn();
				}else{
					$(this).removeClass('active');
					$(this).children('ul').fadeOut();
				}
			});
		}else if($(window).width() < 768){
			$('.nav1_menu').click(function(e) {
				console.log(e);
				if ($(this).children('.nav2').is(':visible')) {
					if (e.target.className == 'nav1_menu') {
						$(this).children('.nav2').slideUp(400, function(e) {
							$('.nav3, .nav4').hide();
						});
					}

				}else{
					$('.nav2').slideUp(400);
					$(this).children('.nav2').slideDown(400, function() {
						$('.nav3, .nav4').hide();
					});
				}
			});
			$('.nav2_menu').click(function(e) {
				if ($(this).children('.nav3').is(':visible')) {
					if (e.target.className == 'nav2_menu') {
						$(this).children('.nav3').slideUp(400, function() {
							$('.nav4').hide();
						});
					}
				}else{
					$('.nav3').slideUp(400);
					$(this).children('.nav3').slideDown(400, function() {
						$('.nav4').hide();
					});
				}
			});
		}
	});
</script>