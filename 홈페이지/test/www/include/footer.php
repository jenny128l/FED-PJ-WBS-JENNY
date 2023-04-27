	</div>
	</div>	
</div>
</div>
	<div id="footer">
		<div class="inner">
			<address>#1115, E-dong, SK Technopark, Haan-ro 60, Gwangmyeong, Gyeonggido, KOREA, (ZIP Code: 14322)<span class="foot_area">Tel. +82-70-7603-8135</span><span class="foot_area">FAX. +82-70-4641-5849</span></address>
			<p class="copyright">COPYRIGHT. 2018 iNODIC CO,.LTD. ALL RIGHT's RESERVED</p>
			<a href="javascript:;" class="foot_top"><img src="../images/main/top.png" alt=""></a>
		</div>
	</div>
</body>
</html>
<script>
	$(".chosen-select").chosen({disable_search_threshold: 10});
	$('.foot_top').click(function(){
		var top = $('#header').offset().top;
		$('html').animate({
			'scrollTop' : top,
		},400);
	});
	 $('#carousel').flexslider({
		animation: "slide",
		controlNav: false,
		touch : true,
		animationLoop: false,
		slideshow: false,
		itemWidth: 99,
		itemMargin: 10,
		asNavFor: '#slider'
	  });
	 
	  $('#slider').flexslider({
		animation: "slide",
		controlNav: false,
		touch : true,
		animationLoop: false,
		slideshow: false,
		sync: "#carousel"
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
	
</script>