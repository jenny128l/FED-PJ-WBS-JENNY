<?php
include_once("./_common.php");
include_once(G5_PATH."/head.sub.php");
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');
?>
	<!--------------------------------------------헤더--------------------------------------------------------------------------->
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,700" rel="stylesheet">
<style>


</style>

	<div id="header">
		<div class="inner clear_g">
			<h1 class="logo"><a href="javascript:;"><img src="./images/main/logo.jpg" alt="피에스아이노딕"></a></h1>
			<ul class="gnb clear_g">
				<li>
					<span class="gnb_arr"></span>
					<a href="./about/company_overview.html">Company</a>
					<ul class="sub_nav">
						<li><a href="./about/company_overview.html">Overview</a></li>
						<li><a href="./about/message.html">Welcome Message</a></li>
						<li><a href="./about/history.html">History</a></li>
						<li><a href="./about/business.html">Business</a></li>
						<li><a href="./about/organization.html">Organization</a></li>
						<li><a href="./about/location.html">Locations</a></li>
					</ul>
				</li>
				<li>
					<span class="gnb_arr"></span>
					<a href="/bbs/board.php?bo_table=products&sca=2MP">Products</a>
					<ul class="sub_nav">
						<li><a href="/bbs/board.php?bo_table=products&sca=2MP">Analog Camera</a></li>
						<li><a href="/bbs/board.php?bo_table=products&sca=PoC+CCTV+PRODUCTS+%26+CAMERA">PoC Camera & Receiver</a></li>
						<li><a href="/bbs/board.php?bo_table=products&sca=DVR">Professional Products</a></li>
						<li><a href="/bbs/board.php?bo_table=products&sca=PIPE+CAMERA">DVR/NVR/IP</a></li>
					</ul>
				</li>
				<li>
					<span class="gnb_arr"></span>
					<a href="./solutions/recording_solutions.html">Technologies</a>
					<ul class="sub_nav">
						<!--<li><a href="./solutions/poc_solutions.html">Solutions</a></li>-->
						<li><a href="./solutions/recording_solutions.html">All In One</a></li>
						<li><a href="./solutions/cctv_solutions.html">PoC</a></li>
					</ul>
				</li>
				<li>
					<span class="gnb_arr"></span>
					<a href="./support/Customer_Support.html">Customer Support</a>
					<ul class="sub_nav">
						<li><a href="./support/Customer_Support.html">Customer Support</a></li>
						<li><a href="/bbs/board.php?bo_table=download">Download Center</a></li>
						<li><a href="/bbs/write.php?bo_table=inquiry">Online Inquiry</a></li>
						<li><a href="/bbs/board.php?bo_table=release">Press Release</a></li>
					</ul>
				</li>
				<li><a href="./contact/contact_us.html">Contact</a></li>
			</ul>
		</div>
		<div id="navbutton" class="nav_btn">
			<a href="javascript:;" class="btn_nav2 open">
				<span class="bg_wh"></span>
				<span class="bg_wh"></span>
				<span class="bg_wh"></span>
				Navigation
			</a>
		</div>
		<div id="navbutton" class="nav_close">
			<a href="javascript:;" class="btn_nav2 close">
				<span class="bg_wh"></span>
				<span class="bg_wh"></span>
				<span class="bg_wh"></span>
				Navigation
			</a>
		</div>

		<div class="all_menu2" id="scroller">
			<div>
				<ul class="all_menu2_con cl">
					<li>
					<a href='javascript:;'>Company</a>
						<ul class="menu_sub">
							<li><a href="./about/company_overview.html">- Overview</a></li>
							<li><a href="./about/message.html">- Welcome Message</a></li>
							<li><a href="./about/history.html">- History</a></li>
							<li><a href="./about/business.html">- Business</a></li>
							<li><a href="./about/organization.html">- Organization</a></li>
							<li><a href="./about/location.html">- Locations</a></li>
						</ul>
					</li>
					<li>
						<a href='javascript:;'>Products</a>
						<ul class="menu_sub">
							<li>
								<a href="/bbs/board.php?bo_table=products&sca=2MP">- Analog Camera</a>
								<ul class="mobile_dep2">
									<li><a href="/bbs/board.php?bo_table=products&sca=2MP">- 2MP</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=4MP5MP">- 4MP/5MP</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=8MP4K">- 8MP(4K)</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=CCTV+CAMERA+ACCESSORY">- CCTV CAMERA ACCESSORY</a></li>
								</ul>
							</li>
							<li><a href="/bbs/board.php?bo_table=products&sca=PoC+CCTV+PRODUCTS+%26+CAMERA">- PoC Camera & Receiver</a></li>
							<li>
								<a href="/bbs/board.php?bo_table=products&sca=DVR">- DVR/NVR/IP</a>
								<ul class="mobile_dep2">
									<li><a href="/bbs/board.php?bo_table=products&sca=DVR">- DVR</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=NVR">- NVR</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=IP">- IP</a></li>
								</ul>
							</li>
							<li>
								<a href="/bbs/board.php?bo_table=products&sca=PIPE+CAMERA">- Professional Products</a>
								<ul class="mobile_dep2">
									<li><a href="/bbs/board.php?bo_table=products&sca=PIPE+CAMERA">- PIPE CAMERA</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=0.5+CCTV+CAMERA">- 1/2” CCTV CAMERA</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=MINI+DVR">- MINI DVR</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=ETC">- ETC</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
					<a href='javascript:;'>Technologies</a>
						<ul class="menu_sub">
							<!--<li><a href="../solutions/poc_solutions.html">- Solutions</a></li>-->
							<li><a href="./solutions/recording_solutions.html">- All In One</a></li>
							<li><a href="./solutions/cctv_solutions.html">- PoC</a></li>
						</ul>
					</li>
					<li>
					<a href='javascript:;'>Customer Support</a>
						<ul class="menu_sub">
							<li><a href="./support/Customer_Support.html">- Customer Support</a></li>
							<li><a href="/bbs/board.php?bo_table=download">- Download Center</a></li>
							<li><a href="/bbs/write.php?bo_table=inquiry">- Online Inquiry</a></li>
							<li><a href="/bbs/board.php?bo_table=release">- Press Release</a></li>
						</ul>
					</li>
					<li><a href='./contact/contact_us.html'>Contact</a></li>
				</ul><!--// all_menu2_con -->	
			</div>
		</div><!--// all_menu2 -->
	</div>
	<!----------------------------------------------------------------헤더끝------------------------------------------------------->
	<!----------------------------------------------------------------비주얼------------------------------------------------------->
	<style>

	</style>
	

	<div id="visual">
		<ul class="visual_act">
			<?php
				$banner_set = sql_query("select * from g5_write_banner where wr_is_comment != '1';");
				for($j=0; $banner=sql_fetch_array($banner_set); $j++) {
				$file = sql_fetch("select * from g5_board_file where bo_table = 'banner' and wr_id = '{$banner[wr_id]}';");
			?>
			<li style="background:url('<?php echo G5_URL; ?>/data/file/banner/<?php echo $file['bf_file']; ?>') center top no-repeat; background-size:cover;"><div class="vi_wrap">
					<div class="vi_inner">
						<div class="vi_txt visual_box0 visual_box01 animated">
							<h3><?php echo $banner['wr_subject']; ?></h3>
							<ul class="visual_info_list ml30">
								<?php if($banner['wr_1'] != "") {?><li><?php echo $banner['wr_1']; ?></li><?php } ?>
								<?php if($banner['wr_2'] != "") {?><li><?php echo $banner['wr_2']; ?></li><?php } ?>
								<?php if($banner['wr_3'] != "") {?><li><?php echo $banner['wr_3']; ?></li><?php } ?>
								<?php if($banner['wr_4'] != "") {?><li><?php echo $banner['wr_4']; ?></li><?php } ?>
								<?php if($banner['wr_5'] != "") {?><li><?php echo $banner['wr_5']; ?></li><?php } ?>
								<?php if($banner['wr_6'] != "") {?><li><?php echo $banner['wr_6']; ?></li><?php } ?>

							</ul>
						</div>
					</div>
				</div>
				<img src="./images/main/clear.gif" alt="" class="visual_img">
			</li>
			<?php } ?>
		</ul>
	</div>
	<!----------------------------------------------------------------비주얼 끝------------------------------------------------------->
	<!----------------------------------------------------------------메인 컨테이너------------------------------------------------------->
	<div id="container">
		<div class="inner">
			<!----------------------------------------------------------------제품------------------------------------------------------->
			<div class="section01">
				<ul class="main_prod_lists web_prod_lists clear_g">
					<li><a href="/bbs/board.php?bo_table=products&sca=2MP"><div class="prod_img"><img src="./images/main/prod_img01.jpg" alt="" class="action"></div><div class="prod_tit">Analog camera</div></a></li>
					<li><a href="/bbs/board.php?bo_table=products&sca=PIPE+CAMERA"><div class="prod_img"><img src="./images/main/prod_img02.jpg" alt="" class="action"></div><div class="prod_tit">Professional<br>CCTV Products</div></a></li>
					<li><a href="/bbs/board.php?bo_table=products&sca=PoC+CCTV+PRODUCTS+%26+CAMERA"><div class="prod_img"><img src="./images/main/prod_img03.jpg" alt="" class="action"></div><div class="prod_tit">PoC Products & Camera</div></a></li>
					<li><a href="/bbs/board.php?bo_table=products&sca=DVR"><div class="prod_img"><img src="./images/main/prod_img04.jpg" alt="" class="action"></div><div class="prod_tit">Analog DVR</div></a></li>
					<li><a href="/bbs/board.php?bo_table=products&sca=NVR"><div class="prod_img"><img src="./images/main/prod_img05.jpg" alt="" class="action"></div><div class="prod_tit">IP & NVR</div></a></li>
				</ul>

				<ul class="main_prod_lists mobile_prod_lists clear_g">
					<li><a href="/bbs/board.php?bo_table=products&sca=2MP"><div class="prod_img"><img src="./images/main/prod_img01.jpg" alt="" class="action"></div><div class="prod_tit">Analog camera</div></a></li>
					<li><a href="/bbs/board.php?bo_table=products&sca=PIPE+CAMERA"><div class="prod_img"><img src="./images/main/prod_img02.jpg" alt="" class="action"></div><div class="prod_tit">Professional<br>CCTV Products</div></a></li>
					<li><a href="/bbs/board.php?bo_table=products&sca=PoC+CCTV+PRODUCTS+%26+CAMERA"><div class="prod_img"><img src="./images/main/prod_img03.jpg" alt="" class="action"></div><div class="prod_tit">PoC Products & Camera</div></a></li>
					<li><a href="/bbs/board.php?bo_table=products&sca=DVR"><div class="prod_img"><img src="./images/main/prod_img04.jpg" alt="" class="action"></div><div class="prod_tit">Analog DVR</div></a></li>
					<li><a href="/bbs/board.php?bo_table=products&sca=NVR"><div class="prod_img"><img src="./images/main/prod_img05.jpg" alt="" class="action"></div><div class="prod_tit">IP & NVR</div></a></li>
				</ul>
				<div class="section1_prod_nav">
					<span id="slider-prev1"></span><span id="slider-next1"></span>
				</div>
			</div>
			<!----------------------------------------------------------------제품 끝------------------------------------------------------->
			<div class="bg_content">
				<div class="section02 clear_g">
					<!----------------------------------------------------------------Company Overview------------------------------------------------------->
					<div class="set02_layl">
						<a href="./about/company_overview.html">
							<h3 class="main_common_title01">Company Overview</h3>
							<p>At inodic, our mission is to provide our  custo mers with personalized service, to manufac ture innovative and quality products...</p>
							<span class="more"><img src="./images/main/more01.png" alt="더보기"></span>
						</a>
					</div>
					<!----------------------------------------------------------------Company Overview 끝------------------------------------------------------->
					<!----------------------------------------------------------------Download Center------------------------------------------------------->
					<?php echo latest("download","download",4,30); ?>
					<!----------------------------------------------------------------Download Center 끝------------------------------------------------------->
					<!----------------------------------------------------------------Inquiry------------------------------------------------------->
					<div class="set02_layr">
						<ul class="main_contact">
							<li>
								<a href="/bbs/write.php?bo_table=inquiry" class="main_contact_layl contact_bg01"><h3>Online Inquiry</h3><span>sales@inodic.com</span></a>
								<div class="main_contact_layr contact_email contact_bg02"><a href="/bbs/write.php?bo_table=inquiry"></a></div>	
							</li>
							<li>
								<div class="main_contact_layl contact_bg03"><h3>Tel.</h3><span>+82-70-7603-8133</span></div>
								<div class="main_contact_layr contact_tel contact_bg04"></div>	
							</li>
							<li>
								<div class="main_contact_layl contact_bg01"><h3>Fax.</h3><span>+82-70-4641-5849</span></div>
								<div class="main_contact_layr contact_fax contact_bg02"></div>
							</li>
						</ul>
					</div>
					<!----------------------------------------------------------------Inquiry 끝------------------------------------------------------->
				</div>
				<div class="section03 clear_g">
					<!----------------------------------------------------------------Press Release------------------------------------------------------->
					<?php echo latest("basic2","release",4,30); ?>
					<!----------------------------------------------------------------Press Release 끝------------------------------------------------------->
					<!----------------------------------------------------------------생산설비------------------------------------------------------->
					<div class="set03_layr set03_layr_web">
						<div class="banner_bg_box">
							<h3 class="main_common_title01">Technologies</h3>
							<div class="banner_btn">
								<span id="slider-prev"></span><span id="slider-next"></span>
								<span id="slider-prevm"></span><span id="slider-nextm"></span>
							</div>
							<span class="banner_triangle"><img src="./images/main/triangle.png" alt=""></span>
						</div>
						<div class="banner">
							<ul class="banner_Roll banner_Roll_web">
								<li class="web_slide">
									<div style="background:url('./images/main/main_bg02.jpg') 0px 0px no-repeat; background-size:cover;" class="equi_div equi_div1">
										<a href="./solutions/recording_solutions.html"><img src="./images/main/clear.gif" alt="">
											<div class="roll_box">ALL IN ONE<span class="roll_arr"></span></div>
										</a>
									</div>
									<div style="background:url('./images/main/main_bg03.jpg') 0px 0px no-repeat; background-size:cover;" class="equi_div equi_div2">
										<a href="./solutions/cctv_solutions.html"><img src="./images/main/clear.gif" alt="">
											<div class="roll_box">PoC<span class="roll_arr"></span></div>
										</a>
									</div>
								</li>
							</ul>
							<ul class="banner_Roll banner_Roll_mob">
								<li class="web_slide">
									<div style="background:url('./images/main/main_bg02.jpg') 0px 0px no-repeat; background-size:cover;" class="equi_div equi_div1">
										<a href="./solutions/recording_solutions.html"><img src="./images/main/clear.gif" alt="">
											<div class="roll_box">ALL IN ONE<span class="roll_arr"></span></div>
										</a>
									</div>
								</li>
								<li class="web_slide">
									<div style="background:url('./images/main/main_bg03.jpg') 0px 0px no-repeat; background-size:cover;" class="equi_div equi_div1">
										<a href="./solutions/cctv_solutions.html"><img src="./images/main/clear.gif" alt="">
											<div class="roll_box">PoC<span class="roll_arr"></span></div>
										</a>
									</div>
								</li>
							</ul>
						</div>
					</div>
				<!----------------------------------------------------------------생산설비 끝------------------------------------------------------->
				</div>
			</div>
		</div>
	</div>
	<!----------------------------------------------------------------메인 컨테이너 끝------------------------------------------------------->
	<!----------------------------------------------------------------푸터------------------------------------------------------->
	<div id="footer">
		<div class="inner">
			<address><span class="division">#407, 4F SK V1 Center, 25-32, LS-ro 116beon-gil, Dongan-gu, Anyang-si, Gyeonggi-do, Korea. (Zip code: 14118)</span><br><span class="foot_area foot_bar" style="background:none;padding-left:0; margin-left:0;">Tel. +82-70-7603-8135</span><span class="foot_area">FAX. +82-70-4641-5849</span></address>
			<p class="copyright">Copyrightⓒ 2018 PS INODIC CO., LTD  All Rights reserved.</p>
			<a href="javascript:;" class="foot_top"><img src="./images/main/top.png" alt=""></a>
		</div>
	</div>
	<!----------------------------------------------------------------푸터 끝------------------------------------------------------->

<style>




</style>


<script type="text/javascript">
	/*----------------------------------------------------------------메인 bx 슬라이드-------------------------------------------------------------*/
	var slider1 = $('.visual_act').bxSlider({
		mode : 'fade',
		pager: true,
		controls: true,
		auto: false,
		autoControls:false,
		speed: 500,
		pause: 6000,
		onSliderLoad: function(el, oldIndex, newIndex){
			onSliderLoad();	
		},
		onSlideAfter: function(el, oldIndex, newIndex) {
			slider1.stopAuto();
			slider1.startAuto();
			slideAfter(el,newIndex,oldIndex);
		},
	});
	function onSliderLoad(){
	}
	function slideAfter(el,newIndex,oldIndex) {
	}
	/*----------------------------------------------------------------메인 bx 슬라이드 끝-------------------------------------------------------------*/
	/*----------------------------------------------------------------Solutions 롤링-------------------------------------------------------------*/
	
	/*----------------------------------------------------------------Solutions 롤링 끝-------------------------------------------------------------*/
	/*----------------------------------------------------------------이미지 액션-------------------------------------------------------------*/
	$('.action').hover(function(){
		$(this).css({'transform' : 'scale(1.1)','transition' :'transform 0.3s ease'});
	 },function(){
		$(this).css('transform' , 'scale(1)');
		/*-------------------------------------이미지 효과 스크립트 end-----------------------------------------------*/
	 });
	$('.more').hover(function(){
		$(this).find('img').css({'transform' : 'rotate(90deg)','transition' :'transform 1s ease'});
	},function(){
		$(this).find('img').css('transform' , 'rotate(0deg)');
	});
	/*----------------------------------------------------------------이미지 액션 끝-------------------------------------------------------------*/
	/*----------------------------------------------------------------푸터 버튼-------------------------------------------------------------*/
	$('.foot_top').click(function(){
		var top = $('#header').offset().top;
		$('html,body').animate({
			'scrollTop' : top,
		},400);
	});
	/*----------------------------------------------------------------푸터 버튼 끝-------------------------------------------------------------*/

	
	var slider2 = $('.banner_Roll_mob').bxSlider({
		mode : 'fade',
		minSlides: 1,
		maxSlides: 1,
		pager: true,
		controls: true,
		auto: true,
		autoControls:false,
		speed: 500,
		pause: 6000,
		nextSelector: '#slider-nextm',
		prevSelector: '#slider-prevm',
	});
	
	var slider2 = $('.banner_Roll_web').bxSlider({
		mode : 'fade',
		minSlides: 2,
		maxSlides: 2,
		pager: true,
		controls: true,
		auto: true,
		autoControls:false,
		speed: 500,
		pause: 6000,
		nextSelector: '#slider-next',
		prevSelector: '#slider-prev',
	});
	var slider3 = $('.mobile_prod_lists').bxSlider({
		slideWidth: 330,
		minSlides: 2,
		maxSlides: 2,
		moveSlides: 1,
		slideMargin: 0,
		pager: false,
		auto: false,
		speed: 1000,
		pause: 7000,
		nextSelector: '#slider-next1',
		prevSelector: '#slider-prev1',
	});
</script>
<?php
include_once(G5_PATH."/tail.sub.php");
?>