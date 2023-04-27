<?
	require_once "../base_url.php";
	include_once "site_config.php";
?>
<!DOCTYPE HTML>
<html lang="ko">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<meta name="keywords" content="">
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>INODIC</title>
<link rel="stylesheet" href="../css/common.css" type="text/css">
<link rel="stylesheet" href="../css/main.css" type="text/css">
<link rel="stylesheet" href="../css/sub.css" type="text/css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="../css/mobile.css" type="text/css">
<link rel="stylesheet" href="../css/feature-carousel.css" type="text/css">
<link href='http://fonts.googleapis.com/css?family=Noto+Sans' rel='stylesheet' type='text/css'>
<link href="http://fonts.googleapis.com/earlyaccess/nanumgothic.css" rel="stylesheet" type="text/css">
<script type="text/javascript" src="../js/jquery-1.8.0.min.js"></script>
<script type="text/javascript" src="../js/jquery.bxslider.min.js"></script>
<script type="text/javascript" src="../js/mobile.js"></script>
<script type="text/javascript" src="../js/jquery.featureCarousel.min.js"></script>
</head>
<body>
	<div id="header">
		<div class="inner clear_g">
			<h1 class="logo"><a href="../index.php"><img src="../images/main/logo.jpg" alt="피에스아이노딕"></a></h1>
			<ul class="gnb clear_g">
				<li>
					<span class="gnb_arr"></span>
					<a href="../about/company_overview.html">Company</a>
					<ul class="sub_nav">
						<li><a href="../about/company_overview.html">Overview</a></li>
						<li><a href="../about/message.html">Welcome</a></li>
						<li><a href="../about/history.html">History</a></li>
						<li><a href="../about/business.html">Business</a></li>
						<li><a href="../about/organization.html">Organization</a></li>
						<li><a href="../about/location.html">Locations</a></li>
					</ul>
				</li>
				<li>
					<span class="gnb_arr"></span>
					<a href="../product/2m_camera.html">Products</a>
					<ul class="sub_nav">
						<li><a href="../product/2m_camera.html">ANALOGUE CAMERA</a></li>
						<li><a href="../product/poc_camera.html">PoC CCTV PRODUCTS & CAMERA</a></li>
						<li><a href="../product/special_camera.html">DVR//NVR/IP</a></li>
						<li><a href="../product/dvr.html">PROFESSIONAL CCTV PRODUCTS</a></li>
					</ul>
				</li>
				<li>
					<span class="gnb_arr"></span>
					<a href="../solutions/poc_solutions.html">Solutions</a>
					<ul class="sub_nav">
						<!--<li><a href="../solutions/poc_solutions.html">Solutions</a></li>-->
						<li><a href="../solutions/recording_solutions.html">ALL IN ONE CAMERA</a></li>
						<li><a href="../solutions/cctv_solutions.html">PoC CCTV PRODUCTS & SOLUTIONS</a></li>
					</ul>
				</li>
				<li>
					<span class="gnb_arr"></span>
					<a href="../support/Customer_Support.html">Customer Support</a>
					<ul class="sub_nav">
						<li><a href="../support/Customer_Support.html">Customer Support</a></li>
						<li><a href="../support/Download_Center.html">Download Center</a></li>
						<li><a href="../support/Online_Inquiry.html">Online Inquiry</a></li>
						<li><a href="../support/Press_Release.html">Press Release</a></li>
					</ul>
				</li>
				<li><a href="../contact/contact_us.html">Contact</a></li>
			</ul>
		</div>
	</div>
	<div class="sub_visual" style="background:url('../images/sub/<?=$SubVisualImg?>') 64% 50% no-repeat; background-size:cover;">
		<div class="vi_wrap">
			<div class="vi_inner sub_vi_inner">
				<h3>WELCOME TO INODIC!</h3>
			</div>
		</div>
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
						<li><a href="../index.php"><img src="../images/sub/home.jpg" alt="">MAIN</a></li>
						<li><a href="javascript:;"><?=$GlobalNavigation1?></a></li>
						<li><strong><?=$GlobalNavigation2?></strong></li>
					</ul>
					<h2 class="body_title fontNanum"><?=$GlobalNavigation2?></h2>
				</div>
				<div class="sub_body">