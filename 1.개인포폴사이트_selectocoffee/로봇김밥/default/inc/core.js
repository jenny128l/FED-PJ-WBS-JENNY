var isios=(/(ipod|iphone|ipad)/i).test(navigator.userAgent);//ios
var isipad=(/(ipad)/i).test(navigator.userAgent);//ipad
var isandroid=(/android/i).test(navigator.userAgent);//android
$(function(){
function spotVisible(currentIndex){
$(document).find(".cont > *").css({
"opacity":0,
})
var obj = $(currentIndex);
for (var i = 0; i < obj.find(".cont > *").length; i++) {
obj.find(".cont > *").css({
"opacity":0,
"margin-top":15
})
};
};
function spotReset(currentIndex){
var obj = $(currentIndex);
for (var i = 0; i < obj.find(".cont > *").length; i++) {
obj.find(".cont > *").filter(":eq("+i+")").delay(300*i).animate({
"margin-top":0,
"opacity":1
},600,"jswing"); 
};
};
var slider = $('ul.v_list').mzSlider({
mode: 'horizontal', auto: true, pause: 5000, useCSS: false, controls: true, 

onSliderLoad: function(currentIndex){
if(isios || isipad || isandroid){}else{
$('.cont p:nth-child(1)').css({"opacity":0,'margin-top':'15px'}).animate({'margin-top':'0px',"opacity":1,},600,"jswing"); 
$('.cont p:nth-child(2)').css({"opacity":0,'margin-top':'15px'}).delay(300).animate({'margin-top':'0px',"opacity":1},600,"jswing");
$('.cont p:nth-child(3)').css({"opacity":0,'margin-top':'15px'}).delay(600).animate({'margin-top':'0px',"opacity":1},600,"jswing");
}
},

onSlideBefore: function(currentIndex){
if(isios || isipad || isandroid){}else{spotVisible(currentIndex);}
},
onSlideAfter: function(currentIndex){
if(isios || isipad || isandroid){}else{spotReset(currentIndex); }
slider.stopAuto();
slider.startAuto();
}
});
$(document).on('click','.bx-next, .bx-prev , .bx-pager-link , .slider',function() {
});
});