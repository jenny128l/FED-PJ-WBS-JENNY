//모바일 전체메뉴
$(document).ready(function(){
	//마스크
	var handler = function(e){
		e.preventDefault();
	}
	function wrapWindowByMask(){
		var maskHeight = $(document).height();
		var maskWidth = $(window).width();
		
		$('#mask').css({'width':maskWidth,'height':maskHeight});  
		$('#mask').fadeTo("slow",0.6);

	}
	$('.search_area').hide();
	$(function() {
		$(".btn_search.search_open").click(function(e){
			$('.search_area').show();
			$("body").css("overflow","hidden");
			if ($(this).hasClass("active")) {
				$(this).removeClass("active");
				e.preventDefault();
				$('#mask').hide();
				$('.search_area').hide();
				$(window).bind('touchmove', handler);

			} else {
				$(this).addClass("active");
				e.preventDefault();
				wrapWindowByMask();
				$(window).unbind('touchmove', handler);
			}

		$('.btn_search.search_close').click(function(){
			$(this).parent().parent().find('a.search_open').focus();
			$("body").css("overflow","auto");
			$(".search_open").removeClass("active");
			$('.search_area').hide();
			$('#mask').hide();
		});
		return false;
		});

		var allmenuWidth = $(window).width();
		$('.all_menu2').css({'bottom' : -allmenuWidth});
		$(".btn_nav2.open").click(function(e){
			/*var navheight = $('.all_menu2 > div').height()+100;
			var bodyheight = $('body').height();
			if(navheight > bodyheight){
				$('#wrap').css('height',navheight)
			}else{
			}*/
			//$("body").css("overflow-y","auto");
			$(".all_menu2").css("display","block");
			
			if ($(this).hasClass("active")) {
				$(this).removeClass("active");
				//$('#wrap').css('height','100%');
				//e.preventDefault();
				$('#mask').hide();
				$(".all_menu2").animate({right:-allmenuWidth},200);
				//$(window).bind('touchmove', handler);
				$(".all_menu2").css("display","none");

			} else {
				$(this).addClass("active");
				e.preventDefault();
				wrapWindowByMask();
				$('.dep_nav,.select_lists').hide();
				$(".all_menu2").animate({left:0},200);
				$('#mask').show();
				$(window).unbind('touchmove', handler);
			}

			return false;
		});
		$('.btn_nav2.close').click(function(e){
			e.preventDefault();
			$(window).unbind('touchmove', handler);
			$(".all_menu2").css("display","none");
			//$("body").css("overflow","auto");
			$(".all_menu2").animate({right:-allmenuWidth},200);
			$(".btn_nav2.open").removeClass("active");
			$('#mask').css({'background' : '#000' , "margin-right" : "0px"});
			$('#mask').hide();
			
			return false;
		});
		
		/*마스크*/
		$('#mask').click(function () {  
			$(this).css({'background' : '#000' , "margin-right" : "0px"});
			$(this).hide();
			//$("body").css("overflow","auto");
			$(".all_menu2").animate({right:-allmenuWidth},200);
			$(".all_menu2").css("display","none");
			$(".btn_nav2.open").removeClass("active");
			$(".search_open").removeClass("active");
			$(this).parent().parent().find(".search_area").hide();
			$(window).unbind('touchmove', handler);
		});
		$('#mask').on('touchmove',function(){
			$(this).css({'background' : '#000' , "margin-right" : "0px"});
			$(this).hide();
			//$("body").css("overflow","auto");
			$(".all_menu2").animate({right:-allmenuWidth},200);
			$(".all_menu2").css("display","none");
			$(".btn_nav2.open").removeClass("active");
			$(".search_open").removeClass("active");
			$(this).parent().parent().find(".search_area").hide();
		});

	});

	$('.m-global_site li:last-child a').css({'background' : 'none'});
	

});
	$(document).ready(function() {
		$('.all_menu2').click(function(e) {
			var allmenuWidth = $(window).width();
			if (e.target.id == 'scroller') {
				$('#mask').css({'background' : '#000' , "margin-right" : "0px"});
				$('#mask').hide();
				$("body").css("overflow","auto");
				$(".all_menu2").animate({right:-allmenuWidth},200);
				$(".all_menu2").css("display","none");
				$(".btn_nav2.open").removeClass("active");
				$(".search_open").removeClass("active");
				$('#mask').parent().parent().find(".search_area").hide();
				/*$(window).unbind('touchmove', handler);*/
			}
		})
});
		

$(document).bind('mobileinit', function(){
	// jquery mobile ajax 끄기
	$.mobile.ajaxEnabled = false;
});

$(window).resize(function() {
	var allmenuWidth = $(window).width();
	if(allmenuWidth >= 768){
		console.log('xxx');
		$('.all_menu2').hide();
	}
	 if($(document.activeElement).attr('type') === 'text') {
       
    } else {
       //$("body").css("overflow","auto");
		//$(".all_menu2").animate({right:-allmenuWidth},100);
		//$(".all_menu2").css ('right',-allmenuWidth);
		$(".btn_nav2.open").removeClass("active");

		$(".search_open").removeClass("active");
		$('.search_area').hide();

		$('#mask').hide();
    }
});

var navCurrentParam1;
var navCurrentParam2;
var navCurrentParam3;
$(function() {
	var $topnav = $('.all_menu2 .all_menu2_con'),
		  $topnavmn = $topnav.find('>li'),
		  $topnavsbmn = $topnavmn.find('>ul');
	$topnavmn.children('a').click(function() {
		if ($(this).parent().is('li:has("ul")')) {
			if (!$(this).is('.on')) {
				$topnavmn.children('a').removeClass('on');
				$topnavsbmn.slideUp(250).find('>li >ul').hide();
				$(this).addClass('on');
				$(this).parent().find('>ul').slideDown(250).find('>li a').removeClass('on');
			} else {
				$(this).removeClass('on');
				$(this).parent().find('>ul').slideUp(250);
			}
			return false;
		} else {
			$topnavmn.children('a').removeClass('on');
			$topnavsbmn.slideUp(250);
			$(this).addClass('on');
		}
	});
	
	var $topnavmnDepth2 = $topnavsbmn.find('>li'),
		$topnavsbmnDepth2 = $topnavmnDepth2.find('>ul');
		$topnavmnDepth2.children('a').click(function() {
		if ($(this).parent().is('li:has("ul")')) {
			if (!$(this).is('.on')) {
				$topnavmnDepth2.children('a').removeClass('on');
				$topnavsbmnDepth2.slideUp(200);
				$(this).addClass('on');
				$(this).parent().find('>ul').slideDown(200).find('>li a').removeClass('on');
			} else {
				$(this).removeClass('on');
				$(this).parent().find('>ul').slideUp(200);
			}

			if ( $(this).parent().attr('LINK')==undefined ) {
				return false;
			}
		} else {
			$topnavmnDepth2.children('a').removeClass('on');
			$topnavsbmnDepth2.slideUp(200);
			$(this).addClass('on');
		}
	});
	var $topnavmnDepth3 = $topnavmnDepth2.find('>li'),
		$topnavsbmnDepth3 = $topnavmnDepth3.find('>ul');
		$topnavmnDepth3.children('a').click(function() {
		if ($(this).parent().is('li:has("ul")')) {
			if (!$(this).is('.on')) {
				$topnavmnDepth3.children('a').removeClass('on');
				$topnavsbmnDepth3.slideUp(200);
				$(this).addClass('on');
				$(this).parent().find('>ul').slideDown(200).find('>li a').removeClass('on');
			} else {
				$(this).removeClass('on');
				$(this).parent().find('>ul').slideUp(200);
			}

			if ( $(this).parent().attr('LINK')==undefined ) {
				return false;
			}
		} else {
			$topnavmnDepth3.children('a').removeClass('on');
			$topnavsbmnDepth2.slideUp(200);
			$(this).addClass('on');
		}
	});
	var $topnavCurrent1 = $topnav.find('.nvparam'+navCurrentParam1);
	var $topnavCurrent2 = $topnav.find('.nvparam'+navCurrentParam1+'_'+navCurrentParam2);
	var $topnavCurrent3 = $topnav.find('.nvparam'+navCurrentParam1+'_'+navCurrentParam2+'_'+navCurrentParam3);
	
	function currentReset() {
		if (!$topnavCurrent1.children('a').is('.on')) {
			$topnavmn.children('a').removeClass('on').parent().find('>ul').hide().find('>li a').removeClass('on');
			$topnavCurrent1.children('a').addClass('on').parent().find('>ul').show();
			$topnavCurrent2.children('a').addClass('on').parent().find('>ul').show();
			$topnavCurrent3.children('a').addClass('on');
		}
	}
	currentReset();
});





