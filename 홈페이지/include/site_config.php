<?php
$folderPieces = split("/", $_SERVER["PHP_SELF"]);
$curDirectory = $folderPieces[count($folderPieces) - 2];
$curFile = $folderPieces[count($folderPieces) - 1];

$GlobalNavigation1 = "";
$GlobalNaviUrl = "";
$GlobalNavigation2 = "";
$GlobalNavigation3 = "";
$GlobalNavigation4 = "";
$Lefton = "";
$Crumb1 = "";
$Crumb2 = "";

If($curDirectory=='about'){
	$SubVisualImg='sub_visual04.jpg';
	$SubVisualImg_m='m_sub_visual04.jpg';
	$GlobalNavigation1 = "Company";
	$GlobalNaviUrl="location.html";
	$GnbOn1='on';
	Switch($curFile){
		Case 'company_overview.html':
		$GlobalNavigation2 = "Overview";
		$LeftOn1='lnb_on';
		Break;
		Case 'message.html':
		$GlobalNavigation2 = "Welcome Message";
		$LeftOn2='lnb_on';
		Break;
		Case 'history.html':
		$GlobalNavigation2 = "History";
		$LeftOn3='lnb_on';
		Break;
		Case 'business.html':
		$GlobalNavigation2 = "Business";
		$LeftOn4='lnb_on';
		Break;
		Case 'organization.html':
		$GlobalNavigation2 = "Organization";
		$LeftOn5='lnb_on';
		Break;
		Case 'location.html':
		$GlobalNavigation2 = "Locations";
		$LeftOn6='lnb_on';
		Break;
	}
}ElseIf($curDirectory=='product' || $_GET['bo_table'] == "products"){
	$SubVisualImg='sub_visual02.jpg';
	$SubVisualImg_m='m_sub_visual02.jpg';
	$GlobalNavigation1 = "Products";
	$GnbOn2='on';
	Switch($_GET['sca']){
		Case '2MP':
			$GlobalNavigation2 = "2MP";
			$LeftOn1='lnb_on';
			$LeftOn1_1='lnb_on';
			$block = "1";
			Break;
		Case '4MP5MP':
			$GlobalNavigation2 = "4MP/5MP";
			$LeftOn1='lnb_on';
			$LeftOn1_2='lnb_on';
			$block = "1";
			Break;
		Case '8MP4K':
			$GlobalNavigation2 = "8MP(4K)";
			$LeftOn1='lnb_on';
			$LeftOn1_3='lnb_on';
			$block = "1";
			Break;
		Case 'CCTV CAMERA ACCESSORY':
			$GlobalNavigation2 = "CCTV CAMERA ACCESSORY";
			$LeftOn1='lnb_on';
			$LeftOn1_4='lnb_on';
			$block = "1";
			Break;
		Case 'PoC CCTV PRODUCTS & CAMERA':
			$GlobalNavigation2 = "PoC CCTV PRODUCTS & CAMERA";
			$LeftOn2='lnb_on';
			Break;
		Case 'DVR':
			$GlobalNavigation2 = "DVR";
			$LeftOn3='lnb_on';
			$LeftOn3_1='lnb_on';
			$block = "2";
			Break;
		Case 'NVR':
			$GlobalNavigation2 = "NVR";
			$LeftOn3='lnb_on';
			$LeftOn3_2='lnb_on';
			$block = "2";
			Break;
		Case 'IP':
			$GlobalNavigation2 = "IP";
			$LeftOn3='lnb_on';
			$LeftOn3_3='lnb_on';
			$block = "2";
			Break;
		Case 'PIPE CAMERA':
			$GlobalNavigation2 = "PIPE CAMERA";
			$LeftOn4='lnb_on';
			$LeftOn4_1='lnb_on';
			$block = "3";
			Break;
		Case '0.5 CCTV CAMERA':
			$GlobalNavigation2 = "1/2” CCTV CAMERA";
			$LeftOn4='lnb_on';
			$LeftOn4_2='lnb_on';
			$block = "3";
			Break;
		Case 'MINI DVR':
			$GlobalNavigation2 = "MINI DVR";
			$LeftOn4='lnb_on';
			$LeftOn4_3='lnb_on';
			$block = "3";
			Break;
		Case 'ETC':
			$GlobalNavigation2 = "ETC";
			$LeftOn4='lnb_on';
			$LeftOn4_4='lnb_on';
			$block = "3";
			Break;

	}
}ElseIf($curDirectory=='support' || $_GET['bo_table']){
	$SubVisualImg='sub_visual03.jpg';
	$SubVisualImg_m='m_sub_visual03.jpg';
	$GlobalNavigation1 = "Customer Support";
	$GlobalNaviUrl="notice.html";
	$GnbOn5='on';
	Switch($curFile){
		Case 'Customer_Support.html':
			$LeftOn1='lnb_on';
			$GlobalNavigation2 = "Customer Support";
			Break;
		Case 'Download_Center.html':
			$GlobalNavigation2 = "Download Center";
			$LeftOn2='lnb_on';
			Break;
		Case 'faq.html':
			$GlobalNavigation2 = "FAQ";
			$LeftOn3='lnb_on';
			Break;
	}
	switch($_GET['bo_table']) {
		case "download" :
			$GlobalNavigation2 = "Download Center";
			$LeftOn2='lnb_on';
			break;
		Case 'release':
			$GlobalNavigation2 = "Press Release";
			$LeftOn4='lnb_on';
			Break;		
		Case 'inquiry':
			$GlobalNavigation2 = "Online Inquiry";
			$LeftOn3='lnb_on';
			Break;			
	}
	
}ElseIf($curDirectory=='solutions'){
	$SubVisualImg='sub_visual05.jpg';
	$SubVisualImg_m='m_sub_visual05.jpg';
	$GlobalNavigation1 = "Solutions";
	$GlobalNaviUrl="contact01.html";
	$GnbOn5='on';
	Switch($curFile){
		Case 'poc_solutions.html':
			$GlobalNavigation2 = "Solutions";
			$LeftOn1='lnb_on';
			Break;
		Case 'recording_solutions.html':
			$GlobalNavigation2 = "ALL IN ONE CAMERA";
			$LeftOn2='lnb_on';
			Break;
		Case 'cctv_solutions.html':
		Case 'starvis_full.html':
		Case '4mp_01.html':
		Case '4mp_02.html':
		Case 'starvis_qhd.html':
		Case 'ipu_series.html':
			$GlobalNavigation2 = "PoC CCTV PRODUCTS & SOLUTIONS";
			$LeftOn3='lnb_on';
			Break;
	}
}ElseIf($curDirectory=='contact'){
	$SubVisualImg='sub_visual01.jpg';
	$SubVisualImg_m='m_sub_visual01.jpg';
	$GlobalNavigation1 = "CONTACT";
	$GlobalNaviUrl="contact01.html";
	$GnbOn5='on';
	Switch($curFile){
		Case 'contact_us.html':
			$GlobalNavigation2 = "CONTACT";
			$LeftOn1='lnb_on';
			Break;
	}
}
If($code) {
	List($BoardList,$Paging,$BoardSearch)=BoardList($code,$_GET["page"]);
	
	List($ViewPage,$ViewShort,$ViewWriteShort)=ViewPage($code,$_GET["number"]);

	//||||||||||||||||||||||||| 게시판 페이지|||||||||||||||||||||||||||||
	if($_POST["Mode"] == "Re_Short"){
	echo Re_ShortRegistOk($_POST,$code,$_POST["SMnumber"]);
	}
	elseif($_POST["Mode"] == "ShortRegistOk" Or $_GET["Mode"] == "ShortModify") {
		echo ShortRegistOk($_POST,$code,$_POST["SMnumber"]);
	}elseif($_GET["Mode"]=='ShortDel') {
		echo ShortDeleteOk($_GET);
	}
}
?>
