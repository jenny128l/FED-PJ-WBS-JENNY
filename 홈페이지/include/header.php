<?
	include_once("../common.php");
	include_once(G5_THEME_PATH."/head.sub.php");
	require_once "../base_url.php";
	include_once "site_config.php";
?>
	<div id="header">
		<div class="inner clear_g">
			<h1 class="logo"><a href="<?php echo G5_URL; ?>/index.php"><img src="<?php echo G5_URL; ?>/images/main/logo.jpg" alt="피에스아이노딕"></a></h1>
			<ul class="gnb clear_g">
				<li>
					<span class="gnb_arr"></span>
					<a href="<?php echo G5_URL; ?>/about/company_overview.html">Company</a>
					<ul class="sub_nav">
						<li><a href="<?php echo G5_URL; ?>/about/company_overview.html">Overview</a></li>
						<li><a href="<?php echo G5_URL; ?>/about/message.html">Welcome Message</a></li>
						<li><a href="<?php echo G5_URL; ?>/about/history.html">History</a></li>
						<li><a href="<?php echo G5_URL; ?>/about/business.html">Business</a></li>
						<li><a href="<?php echo G5_URL; ?>/about/organization.html">Organization</a></li>
						<li><a href="<?php echo G5_URL; ?>/about/location.html">Locations</a></li>
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
					<a href="<?php echo G5_URL; ?>/solutions/recording_solutions.html">Technologies</a>
					<ul class="sub_nav">
						<!--<li><a href="<?php echo G5_URL; ?>/solutions/poc_solutions.html">Solutions</a></li>-->
						<li><a href="<?php echo G5_URL; ?>/solutions/recording_solutions.html">All In One</a></li>
						<li><a href="<?php echo G5_URL; ?>/solutions/cctv_solutions.html">PoC</a></li>
					</ul>
				</li>
				<li>
					<span class="gnb_arr"></span>
					<a href="<?php echo G5_URL; ?>/support/Customer_Support.html">Customer Support</a>
					<ul class="sub_nav">
						<li><a href="<?php echo G5_URL; ?>/support/Customer_Support.html">Customer Support</a></li>
						<li><a href="/bbs/board.php?bo_table=download">Download Center</a></li>
						<li><a href="/bbs/write.php?bo_table=inquiry">Online Inquiry</a></li>
						<li><a href="/bbs/board.php?bo_table=release">Press Release</a></li>
					</ul>
				</li>
				<li><a href="<?php echo G5_URL; ?>/contact/contact_us.html">Contact</a></li>
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
							<li><a href="<?php echo G5_URL; ?>/about/company_overview.html">- Overview</a></li>
							<li><a href="<?php echo G5_URL; ?>/about/message.html">- Welcome Message</a></li>
							<li><a href="<?php echo G5_URL; ?>/about/history.html">- History</a></li>
							<li><a href="<?php echo G5_URL; ?>/about/business.html">- Business</a></li>
							<li><a href="<?php echo G5_URL; ?>/about/organization.html">- Organization</a></li>
							<li><a href="<?php echo G5_URL; ?>/about/location.html">- Locations</a></li>
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
									<li><a href="/bbs/board.php?bo_table=products&sca=0.5+CCTV+CAMERAC">- 1/2” CCTV CAMERA</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=MINI+DVR">- MINI DVR</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=ETC">- ETC</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li>
						<a href='javascript:;'>Technologies</a>
						<ul class="menu_sub">
							<!--<li><a href="<?php echo G5_URL; ?>/solutions/poc_solutions.html">- Solutions</a></li>-->
							<li><a href="<?php echo G5_URL; ?>/solutions/recording_solutions.html">- All In One</a></li>
							<li><a href="<?php echo G5_URL; ?>/solutions/cctv_solutions.html">- PoC</a></li>
						</ul>
					</li>
					<li>
					<a href='javascript:;'>Customer Support</a>
						<ul class="menu_sub">
							<li><a href="<?php echo G5_URL; ?>/support/Customer_Support.html">- Customer Support</a></li>
							<li><a href="/bbs/board.php?bo_table=download">- Download Center</a></li>
							<li><a href="/bbs/write.php?bo_table=inquiry">- Online Inquiry</a></li>
							<li><a href="/bbs/board.php?bo_table=release">- Press Release</a></li>
						</ul>
					</li>
					<li><a href='<?php echo G5_URL; ?>/contact/contact_us.html'>Contact</a></li>
				</ul><!--// all_menu2_con -->	
			</div>
		</div><!--// all_menu2 -->
	</div>
	<div class="sub_visual pc_visual" style="background:url('<?php echo G5_URL; ?>/images/sub/<?=$SubVisualImg?>') 15% 50% no-repeat;">
		<div class="vi_wrap">
			<div class="vi_inner sub_vi_inner">
				<h3><?=$GlobalNavigation1?></h3>
			</div>
		</div>
	</div>
	<div class="sub_visual m_visual" style="background:url('<?php echo G5_URL; ?>/images/sub/<?=$SubVisualImg_m?>') 100% 50% no-repeat; background-size:cover;">
		<div class="vi_wrap">
			<div class="vi_inner sub_vi_inner">
				<h3><?=$GlobalNavigation1?></h3>
			</div>
		</div>
	</div>
	<div class="mobile_nav">
		<ul class="mobile_nav_list inner clear_g">
			<li><a href="<?php echo G5_URL; ?>/index.php"><img src="<?php echo G5_URL; ?>/images/sub/m_home.png" alt="홈으로 가기"></a></li>
			<li class="nav1_menu">
				<a href="javascript:;"><div class="lnb_tbl_box"><span><?=$GlobalNavigation1?></span></div></a>
				<ul class="dep_nav dep_nav01 nav2">
					<li class="nav2_menu"><a href='<?php echo G5_URL; ?>/about/company_overview.html'>Company</a></li>
					<li class="nav2_menu"><a href='<?php echo G5_URL; ?>/product/2m_camera.html'>Products</a></li>
					<li class="nav2_menu"><a href='<?php echo G5_URL; ?>/solutions/recording_solutions.html'>Solutions</a></li>
					<li class="nav2_menu"><a href='<?php echo G5_URL; ?>/support/Customer_Support.html'>Customer Support</a></li>
					<li class="nav2_menu"><a href='<?php echo G5_URL; ?>/contact/contact_us.html'>Contact</a></li>
				 </ul>
			</li>
			<li class="nav1_menu">
				<a href="javascript:;"><div class="lnb_tbl_box"><span><?=$GlobalNavigation2?></span></div></a>
				<ul class="dep_nav dep_nav02 nav2">
				<?
					switch($curDirectory) {
						case "about" : 
					?>
						<li class="nav2_menu"><a href="<?php echo G5_URL; ?>/about/company_overview.html">Overview</a></li>
						<li class="nav2_menu"><a href="<?php echo G5_URL; ?>/about/message.html">Welcome Message</a></li>
						<li class="nav2_menu"><a href="<?php echo G5_URL; ?>/about/history.html">History</a></li>
						<li class="nav2_menu"><a href="<?php echo G5_URL; ?>/about/business.html">Business</a></li>
						<li class="nav2_menu"><a href="<?php echo G5_URL; ?>/about/organization.html">Organization</a></li>
						<li class="nav2_menu"><a href="<?php echo G5_URL; ?>/about/location.html">Locations</a></li>
					<?
						break;
						case "product" : 
					?>
						<li class="nav2_menu">
							<a href="javascript:;">ANALOGUE CAMERA</a>
							<ul class="double_nav01 nav3">
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/2m_camera.html">2MP</a></li>
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/4m_camera.html">4MP/5MP</a></li>
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/8m_camera.html">8MP(4K)</a></li>
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/accessory.html">CCTV CAMERA ACCESSORY</a></li>
							</ul>
						</li>
						<li class="nav2_menu"><a href="<?php echo G5_URL; ?>/product/poc_camera.html">PoC CCTV PRODUCTS & CAMERA</a></li>
						<li class="nav2_menu">
							<a href="javascript:;">DVR/NVR/IP</a>
							<ul class="double_nav01 nav3">
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/dvr.html">DVR</a></li>
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/nvr.html">NVR</a></li>
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/ip.html">IP</a></li>
							</ul>
						</li>
						<li class="nav2_menu">
							<a href="javascript:;">PROFESSIONAL CCTV PRODUCTS</a>
							<ul class="double_nav01 nav3">
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/pipe_camera.html">PIPE CAMERA</a></li>
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/cctv_12.html">1/2” CCTV CAMERA</a></li>
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/mini_dvr.html">MINI DVR</a></li>
								<li class="nav3_menu"><a href="<?php echo G5_URL; ?>/product/etc.html">ETC</a></li>
							</ul>
						</li>
					<?
						break;
						case "solutions" : 
					?>
						<!--<li><a href="<?php echo G5_URL; ?>/solutions/poc_solutions.html">Solutions</a></li>-->
						<li><a href="<?php echo G5_URL; ?>/solutions/recording_solutions.html">ALL IN ONE CAMERA</a></li>
						<li><a href="<?php echo G5_URL; ?>/solutions/cctv_solutions.html">PoC CCTV PRODUCTS & SOLUTIONS</a></li>
					<?
						break;
						case "support" : 
					?>
						<li><a href="<?php echo G5_URL; ?>/support/Customer_Support.html">Customer Support</a></li>
						<li><a href="/bbs/board.php?bo_table=download">Download Center</a></li>
						<li><a href="/bbs/write.php?bo_table=inquiry">Online Inquiry</a></li>
						<li><a href="/bbs/board.php?bo_table=release">Press Release</a></li>
					<?
						break;
						case "contact" : 
					?>
						<li><a href='<?php echo G5_URL; ?>/contact/contact_us.html'>Contact</a></li>
					<?

					}
					if($bo_table){
						If($bo_table=='notice' || $bo_table=='news' || $bo_table=='general_notice' || $bo_table=='adopt' || $bo_table=='bidding'){
					?>
						<li><a href="/bbs/board.php?bo_table=notice">학사공지</a></li>
						<li><a href="/bbs/board.php?bo_table=news">SMIT소식</a></li>
						<li><a href="/bbs/board.php?bo_table=general_notice">일반공지</a></li>
						<li><a href="/bbs/board.php?bo_table=adopt">채용공지</a></li>
						<li><a href="/bbs/board.php?bo_table=bidding">입찰공지</a></li>
					<?
						}elseIf($bo_table=='budget' || $bo_table=='rule' || $bo_table=='committee' || $bo_table=='conference' || $bo_table=='info_list'){
					?>
						<li><a href="/about/greeting.php">총장실</a></li>
						<li><a href="/about/history.php">연혁</a></li>
						<li><a href="/about/vision.php">비전 및 교육목표</a></li>
						<li><a href="/about/status.php">대학현황</a></li>
						<li><a href="/about/council.php">학교법인</a></li>
						<li><a href="/about/campus.php">캠퍼스</a></li>
						<li><a href="/about/disclosure.php">정보공개</a></li>
					<?
						}elseIf($bo_table=='admission_faq' || $bo_table=='admission_inquire' || $bo_table=='admission_notice'){
					?>
						<li><a href="/admission/admission-guide.php">입학안내</a></li>
						<li><a href="/bbs/board.php?bo_table=admission_notice">입학공지</a></li>
						<li><a href="/bbs/board.php?bo_table=admission_faq">입학 FAQ</a></li>
						<li><a href="/bbs/board.php?bo_table=admission_inquire">입학상담</a></li>
					<?
						}elseIf($bo_table=='operation' || $bo_table=='engineering' || $bo_table=='art'){
					?>
						<li><a href="/bbs/board.php?bo_table=operation">연구실</a></li>
						<li><a href="/research/x-program-info.php">X-Program</a></li>
					<?
						}elseIf($bo_table=='media_professor' || $bo_table=='business_professor' || $bo_table=='engineer_professor'){
					?>
						<li><a href="/major/media-business-introduce.php">미디어비즈니스 전공</a></li>
						<li><a href="/major/convergence-media-introduce.php">융합미디어전공</a></li>
						<li><a href="/major/media-engineering-introduce.php">미디어공학전공</a></li>
					<?
						}
					}

					?>
				</ul>
			</li>
		</ul>
	</div>
	<div id="container">
		<div class="sub_box inner clear_g">
			<div class="lnb">
				<h3 class="lnb_title"><span><?=$GlobalNavigation1?></span></h3>
				<ul class="lnb_lists">
					<? include('leftMenu.php'); ?>
				</ul>
			</div>
			<div class="sub_cont">
				<div class="sub_top">
					<ul class="breadcrumbs fontNanum clear_g">
						<li><a href="<?php echo G5_URL; ?>/index.php"><img src="<?php echo G5_URL; ?>/images/sub/home.jpg" alt="">MAIN</a></li>
						<li><a href="javascript:;"><?=$GlobalNavigation1?></a></li>
						<li><strong><?=$GlobalNavigation2?></strong></li>
					</ul>
					<h2 class="body_title fontNanum"><?=$GlobalNavigation2?></h2>
				</div>
				<div class="sub_body">