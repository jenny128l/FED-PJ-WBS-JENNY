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
						<li><a href="/bbs/board.php?bo_table=products&sca=2MP">ANALOGUE CAMERA</a></li>
						<li><a href="/bbs/board.php?bo_table=products&sca=PoC+CCTV+PRODUCTS+%26+CAMERA">PoC CCTV PRODUCTS & CAMERA</a></li>
						<li><a href="/bbs/board.php?bo_table=products&sca=DVR">DVR//NVR/IP</a></li>
						<li><a href="/bbs/board.php?bo_table=products&sca=PIPE+CAMERA">PROFESSIONAL CCTV PRODUCTS</a></li>
					</ul>
				</li>
				<li>
					<span class="gnb_arr"></span>
					<a href="./solutions/recording_solutions.html">Solutions</a>
					<ul class="sub_nav">
						<!--<li><a href="./solutions/poc_solutions.html">Solutions</a></li>-->
						<li><a href="./solutions/recording_solutions.html">ALL IN ONE CAMERA</a></li>
						<li><a href="./solutions/cctv_solutions.html">PoC CCTV PRODUCTS & SOLUTIONS</a></li>
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
								<a href="/bbs/board.php?bo_table=products&sca=2MP">- ANALOGUE CAMERA</a>
								<ul class="mobile_dep2">
									<li><a href="/bbs/board.php?bo_table=products&sca=2MP">- 2MP</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=4MP5MP">- 4MP/5MP</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=8MP4K">- 8MP(4K)</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=CCTV+CAMERA+ACCESSORY">- CCTV CAMERA ACCESSORY</a></li>
								</ul>
							</li>
							<li><a href="/bbs/board.php?bo_table=products&sca=PoC+CCTV+PRODUCTS+%26+CAMERA">- PoC CCTV PRODUCTS & CAMERA</a></li>
							<li>
								<a href="/bbs/board.php?bo_table=products&sca=DVR">- DVR/NVR/IP</a>
								<ul class="mobile_dep2">
									<li><a href="/bbs/board.php?bo_table=products&sca=DVR">- DVR</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=NVR">- NVR</a></li>
									<li><a href="/bbs/board.php?bo_table=products&sca=IP">- IP</a></li>
								</ul>
							</li>
							<li>
								<a href="/bbs/board.php?bo_table=products&sca=PIPE+CAMERA">- PROFESSIONAL CCTV PRODUCTS</a>
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
					<a href='javascript:;'>Solutions</a>
						<ul class="menu_sub">
							<!--<li><a href="../solutions/poc_solutions.html">- Solutions</a></li>-->
							<li><a href="./solutions/recording_solutions.html">- ALL IN ONE CAMERA</a></li>
							<li><a href="./solutions/cctv_solutions.html">- PoC CCTV PRODUCTS & SOLUTIONS</a></li>
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
	<div id="visual">
		<ul class="visual_act">
			<?php
				$banner_set = sql_query("select * from g5_write_banner where wr_is_comment != '1';");
				for($j=0; $banner=sql_fetch_array($banner_set); $j++) {
				$file = sql_fetch("select * from g5_board_file where bo_table = 'banner' and wr_id = '{$banner[wr_id]}';");
			?>
			<li style="background:url('<?php echo G5_URL; ?>/data/file/banner/<?php echo $file['bf_file']; ?>') 60% 50% no-repeat; background-size:cover;"><div class="vi_wrap">
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
								<?php if($banner['wr_7'] != "") {?><li><?php echo $banner['wr_7']; ?></li><?php } ?>
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
					<?php echo latest("basic","download",4,30); ?>
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
							<h3 class="main_common_title01">생산설비</h3>
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
										<a href="./equipment/equipment.php"><img src="./images/main/clear.gif" alt="">
											<div class="roll_box">생산설비 1<span class="roll_arr"></span></div>
										</a>
									</div>
									<div style="background:url('./images/main/main_bg03.jpg') 0px 0px no-repeat; background-size:cover;" class="equi_div equi_div2">
										<a href="./equipment/equipment.php"><img src="./images/main/clear.gif" alt="">
											<div class="roll_box">생산설비 2<span class="roll_arr"></span></div>
										</a>
									</div>
								</li>
							</ul>
							<ul class="banner_Roll banner_Roll_mob">
								<li class="web_slide">
									<div style="background:url('./images/main/main_bg02.jpg') 0px 0px no-repeat; background-size:cover;" class="equi_div equi_div1">
										<a href="./equipment/equipment.php"><img src="./images/main/clear.gif" alt="">
											<div class="roll_box">생산설비 1<span class="roll_arr"></span></div>
										</a>
									</div>
								</li>
								<li class="web_slide">
									<div style="background:url('./images/main/main_bg03.jpg') 0px 0px no-repeat; background-size:cover;" class="equi_div equi_div1">
										<a href="./equipment/equipment.php"><img src="./images/main/clear.gif" alt="">
											<div class="roll_box">생산설비 2<span class="roll_arr"></span></div>
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
			<address><span class="division">#1115, E-dong, SK Technopark, Haan-ro 60, Gwangmyeong, Gyeonggido, KOREA, (ZIP Code: 14322)</span><span class="foot_area foot_bar">Tel. +82-70-7603-8135</span><span class="foot_area">FAX. +82-70-4641-5849</span></address>
			<p class="copyright">COPYRIGHT. 2018 iNODIC CO,.LTD. ALL RIGHT's RESERVED</p>
			<a href="javascript:;" class="foot_top"><img src="./images/main/top.png" alt=""></a>
		</div>
	</div>
	<!----------------------------------------------------------------푸터 끝------------------------------------------------------->

<style>
#header{width:100%; height:132px; background:#fff;}
.inner{position:relative; max-width:1120px; margin:0 auto; height:100%;}
.logo{position:absolute; left:0; top:23px;}
.gnb{display:table; float:right; width:68%; margin-top:60px;}
.gnb > li{position:relative; display:table-cell; padding:0 10px; text-align:center; vertical-align:top; height:72px;}
.gnb > li:nth-child(3){padding:0;}
.gnb > li > a{color:#111 !important; font-size:18px; display:block;}
.gnb > li:hover .sub_nav{display:block;}
.gnb > li:hover .gnb_arr{opacity:1;}
.gnb_arr{opacity:0; position:absolute; left:50%; top:36px; margin-left:-6px; content:''; content:''; display:inline-block; width:11px; height:9px; background:url('../images/sub/gnb_arr.jpg') 0px 0px no-repeat;}
.sub_nav{display:none;position:absolute; animation-duration: 1s; left:50%; top:59px; margin-left:-89px; z-index:999999; border-top:3px solid #158c8a; padding:12px 0; width:178px; background:#19bcb9;}
.sub_nav li{line-height:20px; padding:4px 0;}
.sub_nav li a{color:#b3e2e1 !important; font-size:15px; display:block; width:100%;}
.sub_nav li a:hover{color:#fff !important;}
#visual{position:relative; height:515px; }
.visual_img{height:515px;}
.visual_info_list{margin-top:38px;}
.visual_info_list li{width:48%; font-size:20px; color:#fff; font-weight:400; padding-left:5px;text-shadow:1px 1px 1px #000;}
#container{background:#ebebeb  url('../images/main/main_bg04.jpg') center 0 no-repeat;}
.section01{position:relative; width:100%; height:236px; background:#fff;}
.main_prod_lists{padding:30px 0;}
.main_prod_lists li{float:left; width:20%; height:175px; padding-top:15px; text-align:center; border-left:1px solid #ccc;}
.main_prod_lists li:first-child{border:none;}
.main_prod_lists li a{display:block; width:100%; height:100%;}
.main_prod_lists li .prod_tit{color:#454545; font-size:17px; line-height:19px;}
.prod_img{display:table-cell; width:223px; text-align:center; vertical-align: middle; height:138px;}
.prod_img img{max-width:122px; max-height:120px;}
.section02,.section03{width:100%; height:231px; overflow:hidden;}
.section02 > div{position:relative; float:left; width:33.333%; height:231px;}
.set02_layl{background:url('../images/main/main_bg01.jpg') 0px 0px no-repeat; background-size:cover;}
.set02_layl a{display:block; width:100%; height:100%; padding:26px 6% 0 6%;}
.set02_layl a p{color:#d2d2d3; font-size:16px; margin-top:85px; white-space: normal;height: 4.6em; overflow:hidden; letter-spacing:-0.5px; text-align: left;word-wrap: break-word;display: -webkit-box;-webkit-line-clamp: 3;
-webkit-box-orient: vertical; line-height:25px;}
.domo_p p{color:#d2d2d3; font-size:16px; margin-top:40px; white-space: normal;height: 3.6em; overflow:hidden; letter-spacing:-0.5px; text-align: left;word-wrap: break-word;display: -webkit-box;-webkit-line-clamp: 3;
-webkit-box-orient: vertical; line-height:25px;}
.inq_link {display:inline-block; color:#d2d2d3 !important; border:solid 1px #d2d2d3; text-align:center; padding:10px 15px; float:right;}

.visual_mob {display:none !important;}

.equi_div {display:inline-block; width:50%; float:left; position:relative;}
.main_moreview {display:inline-block;box-shadow:1px 1px rgba(0,0,0,0.5);text-shadow:1px 1px 1px #000; padding:8px 35px; font-size:17px; color:#fff !important; border:solid 1px #fff; margin-left:5px; margin-top:30px; transition:all 0.5s;}
.main_moreview:hover {border:solid 1px #fff; background-color:#fff; color:#000 !important;}
.lang_select {position:absolute; right:0; top:10px;}
.lang_select li {display:inline-block; padding-left:20px; position:relative;}
.lang_select li:after {content:''; display:inline-block; width:1px; height:15px; background-color:#888; position:absolute; right:-11px; top:3px;}
.lang_select li:last-child:after {display:none;}
.lang_select li a {color:#888 !important;}
.lang_select li a:hover {color:red !important;}

#nav_list{width:100%; background:rgba(255,255,255,0.9);  z-index:999999; position:absolute; top:131px; display:none; border-top:1px solid #ced0d1;}
.wrap_header{position:absolute; left:0; top:137px; width:100%; height:263px; z-index:10000; display:none; background:rgba(0,0,0,0.5); display:none;}
.gnb_inner{position:relative; width:100%; max-width:1101px; height:216px;  margin:0 auto; display:table;}
.dep_lists{position:static; float:left; display:table-cell; width:20%; min-height:201px; margin:10px 0 20px 0; border-left:1px solid #bababb; padding-left:2%; box-sizing:border-box;}
.dep_lists:nth-child(5){border-right:1px solid #bababb;}
.dep_lists dt{display:table-cell; vertical-align: middle; height:55px; width:100%;}
.dep_lists dt a{font-size:18px; color:#a5b2b1 !important; font-weight:500;}
.dep_lists dd{margin-bottom:8px; }
.dep_lists dd a{font-size:15px; color:#000 !important;}
.dep_lists li a:hover{color:#5fdbff; text-decoration: underline; background:none !important;}
.dep_first{margin-top:5px;}
dl {margin-bottom:0;}


.set02_layc{background:#626996; padding:26px 2%;}
.main_contact li{display:table; width:100%; height:77px;}
.main_contact li:first-child div{padding:0;}
.main_common_title01{font-size:22px; font-weight:500; color:#fff; margin:0;}
.main_common_title02{font-size:22px; font-weight:500; color:#111; margin:0;}
.more{position:absolute; right:20px; top:25px;}
.main_common_lists{margin-top:32px;}
.main_common_lists li a{font-size:15px; text-overflow: ellipsis;overflow: hidden;width:100%;display: block;white-space: nowrap;}
.main_common_lists li a:hover.prod_tit{text-decoration: underline !important;}
.main_common_lists01 li a{color:#e5e6ec !important; font-weight:300;}
.main_common_lists01 li{position:relative; margin-bottom:10px; padding-left:15px; background:url('../images/main/dot01.png') 0px 12px no-repeat;}
.main_contact_layl h3{margin:0;}
.main_contact_layl{display:table-cell; width:75%; vertical-align: middle; padding-left:6%;}
.main_contact_layl a{display:block; padding-left:6%;}
.main_contact_layr{display:table-cell; width:25%; vertical-align: middle;}
.main_contact_layr a{display:block; width:100%; height:100%;}
.contact_bg01{background:#204264;}
.contact_bg03{background:#2c547b;}
.main_contact h3{font-size:20px; color:#fff; font-weight:600;}
.main_contact span{color:#ffdd33; font-size:18px;}
.contact_email{background:#16304f url('../images/main/email.jpg') 50% 50% no-repeat;}
.contact_tel{background:#1f4b62 url('../images/main/tel.png') 50% 50% no-repeat;}
.contact_fax{background:#16304f url('../images/main/fax.png') 50% 50% no-repeat;}
.set03_layl{position:relative; float:left; width:33.333%; background:#fdfdfd; padding:28px 2%;}
.set03_layr{position:relative; float:left; width:66.666%; height:231px;}
.main_common_lists02 li{position:relative; padding-left:15px; color:#7e7e7e; margin-bottom:10px; background:url('../images/main/dot02.png') 0px 9px no-repeat;}
.main_common_lists02 li a{color:#7e7e7e;}
.banner_bg_box{position:relative; display:table-cell; vertical-align:top; width:22.333%; min-width:169px; background:#4ec6c3; height:100%; padding:35px 22px;}
.banner_bg_box h3{line-height:30px; word-break: break-word;}
.banner{display:table-cell; width:77.666%; height:231px;}
.banner_triangle{position:absolute; right:-23px; top:24px; z-index:9999;}
.banner_Roll li img{height:231px;}
.banner .bx-wrapper{margin:0 !important;}
.banner_btn{width:100%; margin:12px 0 0 0px;}
.vi_wrap{position:absolute; left:0; top:0; width:100%; height:100%; overflow:hidden; z-index:10000;}
.vi_inner{position:relative; top:50%; max-width:1120px; margin:-120px auto 0; padding-left:50px;}
.vi_txt h3{color:#fff; font-size:50px; line-height:54px; font-weight:600; letter-spacing:-1.5px; margin:0; text-shadow:1px 1px 1px #000;}
.vi_txt h4{font-size:40px; line-height:48px; font-weight:normal; color:#fff; margin:10px 0 6px 0;}
.vi_txt strong{font-size:26px; font-weight:600; color:#ffd675;}
.banner_Roll li{position:relative; width:50%; float:left; margin-left:0;}
.banner_Roll li:first-child{border-left:none;}
.visual_box03{}

#slider-next {margin-left:4px;}
#slider-prev .bx-prev{display:inline-block; width:36px; height:36px; background:url('../images/main/banner_prev.jpg') 0px 0px no-repeat;}
#slider-next .bx-next{display:inline-block; width:36px; height:36px; background:url('../images/main/banner_next.jpg') 0px 0px no-repeat;}
#slider-nextm {margin-left:4px;}
#slider-prevm .bx-prev{display:none; width:36px; height:36px; background:url('../images/main/banner_prev.jpg') 0px 0px no-repeat;}
#slider-nextm .bx-next{display:none; width:36px; height:36px; background:url('../images/main/banner_next.jpg') 0px 0px no-repeat;}

.roll_box{position:absolute; left:0; bottom:0; width:100%; height:39px; color:#fff; font-size:16px; padding:8px 15px; background:rgba(0,0,0,0.5);}
.roll_arr{position:absolute; right:14px; top:50%; width:8px; height:10px; margin-top:-5px; background:url('../images/main/more_arr.png') 0px 0px no-repeat;}
.banner_Roll li{border-left:2px solid #757575;}
#footer{background:#303030; height:90px; padding:23px 0 28px 0;color:#777; font-size:15px;}
#footer address{margin-bottom:10px;}
.foot_area{margin-left:19px; padding-left:19px; background:url('../images/main/foot_more.jpg') 0px 11px no-repeat;}
.foot_top{position:absolute; right:0; top:0;}



.set01_link01{position:absolute; left:2px; top:35px; display:block; width:236px; height:236px;}
.set01_link02{position:absolute; left:295px; top:35px; display:block; width:236px; height:236px;}
.set01_link03{position:absolute; left:587px; top:35px; display:block; width:236px; height:236px;}
.set01_link04{position:absolute; right:0; top:35px; display:block; width:267px; height:262px;}


.set02_link01{position:absolute; left:0; top:172px; display:block; width:267px; height:262px;}
.set02_link02{position:absolute; left:422px; top:172px; display:block; width:267px; height:262px;}
.set02_link03{position:absolute; right:0; top:172px; display:block; width:267px; height:262px;}
.set02_link04{position:absolute; left:0; top:502px; display:block; width:270px; height:262px;}
.set02_link05{position:absolute; left:440px; top:502px; display:block; width:267px; height:262px;}

/*메인 슬라이드*/
#visual .bx-wrapper {position: absolute; left:0; width:100%; height:100%; overflow:hidden; text-align:left; }
#visual .bx-wrapper img {display: block;}
#visual .bx-wrapper .bx-pager {width: 100%; position: absolute; bottom:38px; left:0%; text-align: center; display:block; z-index:10002;}
#visual .bx-wrapper .bx-pager .bx-pager-item,
#visual .bx-wrapper .bx-controls-auto .bx-controls-auto-item {display: inline-block;*zoom: 1;*display: inline;}
#visual .bx-wrapper .bx-pager.bx-default-pager a {text-indent: -9999px; display: block;margin: 0 8px;background:url(../images/main/vi_off.png) 50% 50% no-repeat; width:15px; height:15px; background-size:15px; 15px;}
/* .bx-wrapper .bx-pager.bx-default-pager a:hover, */
#visual .bx-wrapper .bx-pager.bx-default-pager a.active {background:url(../images/main/vi_on.png) 50% 50% no-repeat; width:15px; height:15px; background-size:15px; 15px;}
#visual .bx-wrapper .bx-controls-auto .bx-start {display: none;	 text-indent: -9999px; width: 10px; height: 16px; outline: 0; background: url(./images/play.png) 0 0 no-repeat; margin: 0 3px;
}
/* .bx-wrapper .bx-controls-auto .bx-start:hover,
.bx-wrapper .bx-controls-auto .bx-start.active {background-position: -86px 0;} */
#visual .bx-wrapper .bx-controls-auto .bx-stop {display: none; text-indent: -9999px; width: 16px; height: 16px; outline: 0; 	background: url(./images/stop.png) 0px 0px no-repeat;
margin: 0 3px;}
#visual .bx-wrapper .bx-prev {left:50%; margin-left:-716px; background:url(../images/main/vi_prev.png) 0 0 no-repeat;  width:46px;height:46px; z-index:10000000; }
#visual .bx-wrapper .bx-next { right:50%; margin-right:-716px;background: url(../images/main/vi_next.png)  0 0 no-repeat; width:46px;height:46px;  z-index:10000;}
#visual .bx-wrapper .bx-prev:hover {background-position: 0 0;}
#visual .bx-wrapper .bx-next:hover {background-position:}
#visual .bx-wrapper .bx-controls-direction a {width:46px; height:83px; margin-top:-7px; position:absolute; top:50%; text-indent: -9999px;z-index: 10005;}
#visual .bx-wrapper .bx-controls-direction a.disabled {display: none;}
#visual .bx-wrapper .bx-controls-auto {text-align: center; z-index:100; position:absolute; top:485px; z-index:100;left:51.8%; }

.banner_Roll_mob {display:none;}



@media screen and (max-width:1024px) {

}

@media screen and (max-width:768px) {

.visual_mob {display:block !important;}
.visual_web {display:none !important;}

.banner_Roll_web {display:none;}
.banner_Roll_mob {display:block;}

.banner .bx-has-pager {display:none;}

#slider-prevm .bx-prev{display:inline-block;}
#slider-nextm .bx-next{display:inline-block;}
#slider-prev .bx-prev{display:none;}
#slider-next .bx-next{display:none;}

.foot_area {background:url('../images/main/foot_more.jpg') 0px 9px no-repeat;}
.foot_mob_block {display:block;}
.foot_top {right:15px;}
.foot_area{margin-left:2%; padding-left:3%;}
.foot_bar{padding:0; margin:0; background:none;}
.foot_email {display:block; margin-left:0; padding-left:0; background:none;}

.lang_select li:after {top:4px; height:11px; right:-12px;}
.main_moreview {padding:5px 15px; font-size:15px; margin-top:10px;box-shadow:1px 1px 1px #000;}
.main_prod_lists {padding-top:40px;}

.gnb {display:none;}
.lang_select {top:5px; right:15px; font-size:13px;}
#header{height:112px;}
.logo{left:2%; top:14px;}
.logo img{height:45px;}
.vi_txt h3{font-size:25px; line-height:25px;}
.visual_info_list li{width:100%; font-size:15px; }
.visual_info_list{margin-top:20px;}
#visual{height:300px;}
.visual_img{height:300px;}
.vi_inner{padding:0 2%; top:63%;}
.vi_txt{margin:0 !important;}
#visual .bx-wrapper .bx-pager{bottom:12px;}
#visual .bx-wrapper .bx-pager.bx-default-pager a{width:12px; height:12px; background: url(../images/main/vi_off.png) 50% 50% no-repeat; background-size:12px 12px;}
#visual .bx-wrapper .bx-pager.bx-default-pager a.active{width:12px; height:12px; background: url(../images/main/vi_on.png) 50% 50% no-repeat; background-size:12px 12px;}
.web_prod_lists{display:none;}
.mobile_prod_lists{
position:relative;
height:229px;
}
.section01:before{
position:absolute; 
left:0; 
top:0; 
content:''; 
display:inline-block; 
width:1px; 
height:180px; 
background:#fff; 
z-index:9999;
}
.main_prod_lists li{
height:158px;
padding-bottom:20px;
}
.section1_prod_nav{
width:100%;
height:100%;
}
.section1_prod_nav #slider-prev1{
position:absolute;
left:0;
top:50%;
z-index:10000;
}
.section1_prod_nav #slider-next1{
position:absolute;
right:0;
top:50%;
}
.section1_prod_nav #slider-prev1 .bx-prev{
display: inline-block;
width: 23px;
height: 60px;
transform: rotateZ(180deg);
margin-top:-30px;
background: url(../images/main/prod_next.png) 0px 0px no-repeat;
background-size:auto 60px;
}
.section1_prod_nav #slider-next1 .bx-next{
display: inline-block;
width: 23px;
height: 60px;
transform: rotateZ(0deg);
margin-top:-30px;
background: url(../images/main/prod_next.png) 0px 0px no-repeat;
background-size:auto 60px;
}
.prod_img{
width:208px;
height:80px;
}

.main_prod_lists li .prod_tit{
padding-top:10px;
font-size:15px;
}
.section01 .bx-viewport{height:220px !important;}
.bg_content{height:auto; padding:4%; background:#ebebeb;}
.section02, .section03{height:auto; background:#ebebeb;}
.section02 > div{width:100%;}
.set02_layl,.set02_layc,.set02_layr,.set03_layl{margin-bottom:4%;}
.set03_layl{width:100%;}
.banner_Roll li{width:100% !important;}
.set03_layr{width:100%;}
.banner_bg_box{min-width:150px;}
/*.banner_bg_box{width:22%; float:left; display:inherit; min-width:auto;}
.banner{width:78%; float:left; display:inherit;}*/
.section02 > div{height:175px;}
.set02_layl a{padding:26px 6%;}
.main_common_lists li a{font-size:15px;}
.set02_layl a p{margin-top:45px; line-height:25px; font-size:15px;}
.set02_layc{padding:26px 4%;}
.main_common_lists{margin-top:20px;}
.main_common_lists01 li{margin-bottom:5px; background-position:0 6px;}
.main_contact li{height:59px;}
.main_contact h3{font-size:15px;}
.main_contact span{font-size:14px;}
.contact_email{background:#16304f url('../images/main/email.jpg') 50% 50% no-repeat; background-size:20px auto;}
.contact_tel{background:#1f4b62 url('../images/main/tel.png') 50% 50% no-repeat; background-size:20px auto;}
.contact_fax{background:#16304f url('../images/main/fax.png') 50% 50% no-repeat; background-size:20px auto;}
.set03_layl{padding:18px 4%;}
.main_common_lists{margin-top:10px;}
.main_common_lists02 li{margin-bottom:5px;}
#footer{height:auto;}
#footer .inner{padding:0 4% 0 4%;}
.copyright,address{font-size:12px;}


.mobile_banner {display:block;}
.web_banner {display:none;}
.domo_p p {font-size:15px; margin-top:10px;}
.inq_link {padding:5px 10px;}
.equi_div {width:100%;}


}




</style>


<script type="text/javascript">
	/*----------------------------------------------------------------메인 bx 슬라이드-------------------------------------------------------------*/
	var slider1 = $('.visual_act').bxSlider({
		mode : 'fade',
		pager: true,
		controls: true,
		auto: true,
		autoControls:false,
		speed: 2000,
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
		$('.visual_box0').show();
		$('.visual_box1,.visual_box2,.visual_box3,.visual_box4,.visual_box5').hide();
		$('.visual_box01').addClass('fadeInLeft');
		$('.visual_box02').addClass('fadeInRight');
		$('.visual_box03').addClass('fadeIn');
	}
	function slideAfter(el,newIndex,oldIndex) {
		$('.visual_box'+oldIndex).hide();
		$('.visual_box'+newIndex).show();
		$('.visual_box01').addClass('fadeInLeft');
		$('.visual_box02').addClass('fadeInRight');
		$('.visual_box03').addClass('fadeIn');
		$('.visual_box04').addClass('fadeInLeft');
		$('.visual_box05').addClass('fadeInRight');
		$('.visual_box05').addClass('fadeIn');
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
		speed: 2000,
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
		speed: 2000,
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
		auto: true,
		speed: 1000,
		pause: 7000,
		nextSelector: '#slider-next1',
		prevSelector: '#slider-prev1',
	});
</script>
<?php
include_once(G5_PATH."/tail.sub.php");
?>