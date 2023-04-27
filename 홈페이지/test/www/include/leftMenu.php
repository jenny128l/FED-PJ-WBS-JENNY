<?php
If($curDirectory=='about'){
?>
	<li><a href="../about/company_overview.html" class="<?=$LeftOn1?>">Overview</a></li>
	<li><a href="../about/message.html" class="<?=$LeftOn2?>">Welcome</a></li>
	<li><a href="../about/history.html" class="<?=$LeftOn3?>">History</a></li>
	<li><a href="../about/business.html" class="<?=$LeftOn4?>">Business</a></li>
	<li><a href="../about/organization.html" class="<?=$LeftOn5?>">Organization</a></li>
	<li><a href="../about/location.html" class="<?=$LeftOn6?>">Locations</a></li>
<?php
}ElseIf($curDirectory=='contact'){
?>
	<li><a href="../contact/contact_us.html" class="<?=$LeftOn1?>">Contact</a></li>
<?php
}ElseIf($curDirectory=='product'){
?>
	<li>
		<a href="/product/2m_camera.html" class="<?=$LeftOn1?>">ANALOGUE CAMERA</a>
		<?if($block=="1"){?>
		<ul class="lnb_dep dep_scd">
			<li><a href="/product/2m_camera.html" class="<?=$LeftOn1_1?>">&nbsp;&nbsp;- 2MP</a></li>
			<li><a href="/product/4m_camera.html" class="<?=$LeftOn1_2?>">&nbsp;&nbsp;- 4MP/5MP</a></li>
			<li><a href="/product/8m_camera.html" class="<?=$LeftOn1_3?>">&nbsp;&nbsp;- 8MP(4K)</a></li>
			<li><a href="/product/accessory.html" class="<?=$LeftOn1_4?>">&nbsp;&nbsp;- CCTV CAMERA ACCESSORY</a></li>
		</ul>
		<?}?>
	</li>
	<li><a href="../product/poc_camera.html" class="<?=$LeftOn2?>">PoC CCTV PRODUCTS & CAMERA</a></li>
	<li>
		<a href="../product/dvr.html" class="<?=$LeftOn3?>">DVR/NVR/IP</a>
		<?if($block=="2"){?>
		<ul class="lnb_dep dep_scd">
			<li><a href="/product/dvr.html" class="<?=$LeftOn3_1?>">&nbsp;&nbsp;- DVR</a></li>
			<li><a href="/product/nvr.html" class="<?=$LeftOn3_2?>">&nbsp;&nbsp;- NVR</a></li>
			<li><a href="/product/ip.html" class="<?=$LeftOn3_3?>">&nbsp;&nbsp;- IP</a></li>
		</ul>
		<?}?>
	</li>
	<li>
		<a href="../product/pipe_camera.html" class="<?=$LeftOn4?>">PROFESSIONAL CCTV PRODUCTS</a>
		<?if($block=="3"){?>
		<ul class="lnb_dep dep_scd">
			<li><a href="/product/pipe_camera.html" class="<?=$LeftOn4_1?>">&nbsp;&nbsp;- PIPE CAMERA</a></li>
			<li><a href="/product/cctv_12.html" class="<?=$LeftOn4_2?>">&nbsp;&nbsp;- 1/2” CCTV CAMERA</a></li>
			<li><a href="/product/mini_dvr.html" class="<?=$LeftOn4_3?>">&nbsp;&nbsp;- MINI DVR</a></li>
			<li><a href="/product/etc.html" class="<?=$LeftOn4_4?>">&nbsp;&nbsp;- ETC</a></li>
		</ul>
		<?}?> 
	</li>
<?php
}ElseIf($curDirectory=='support'){
?>
	 <li><a href="../support/Customer_Support.html" class="<?=$LeftOn1?>">Customer Support</a></li>
    <li><a href="../support/Download_Center.html" class="<?=$LeftOn2?>">Download Center</a></li>
	<!--<li><a href="../support/faq.html" class="<?=$LeftOn2?>">FAQ</a></li>-->
	<li><a href="../support/Online_Inquiry.html" class="<?=$LeftOn3?>">Online Inquiry</a></li>
	<li><a href="../support/Press_Release.html" class="<?=$LeftOn4?>">Press Release</a></li>
<?php
}ElseIf($curDirectory=='solutions'){
?>
	<!--<li><a href="../solutions/poc_solutions.html" class="<?=$LeftOn1?>">Solutions</a></li>-->
	<li><a href="../solutions/recording_solutions.html" class="<?=$LeftOn2?>">ALL IN ONE CAMERA</a></li>
	<li><a href="../solutions/cctv_solutions.html" class="<?=$LeftOn3?>">PoC CCTV PRODUCTS & SOLUTIONS</a></li>
<?php
}/*ElseIf($curDirectory=='product'){
?>
	<li><a href="../product/product.php?idx=1" class="<?=$LeftOn1?>">BEAUTY CARE<img src="../images/sub/lnb_icon.png" alt=""></a></li>
	<li><a href="../product/product.php?idx=2" class="<?=$LeftOn2?>"> LIVING CARE<img src="../images/sub/lnb_icon.png" alt=""></a></li>
<?php
}*/
?>