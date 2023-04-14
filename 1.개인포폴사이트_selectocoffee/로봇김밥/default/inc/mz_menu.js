// JavaScript Document
var depth_name;
var footHeight;
var depth1, depth2, depth3;


var aju = {
init: function () {

if ($("#header #nav").length) {
aju.setGnb();
}

},
//Gnb 처리
setGnb: function () {
var root = this;
this.gnbH = [0, 190];
this.moveH = 230;
this.depth3Left = 388;
this.init = function () {
$("#header #nav li a").each(function (idx) {
$(this).mouseenter(function () {
root.GnbAc(1);
root.showDepth(idx);
});
});
$("#header").mouseleave(function () {
root.GnbAc(0);
});
$("#header .GnbMenu .menu").each(function (idx) {
$(this).find(".depth2 > ul > li > p a").each(function (j) {
$(this).mouseenter(function () {
if ($(this).parents("li").find("ol").size() > 0) {
var t = $(this).position().top;
var dep3mnuC = $(this).parents("li").find("ol li").size();
$(this).parents(".GnbMenu").find(".depth3 .container").empty().html(
$(this).parents("li").find("ol").clone()
).parents(".depth3").stop().animate({
"left": root.depth3Left
}, 150);
if (7 - j > dep3mnuC) {
$(this).parents(".GnbMenu").find(".depth3 ol").css({
"top": t + "px",
"bottom": "auto"
});
} else {
$(this).parents(".GnbMenu").find(".depth3 ol").css({
"top": "auto",
"bottom": "10px"
});
}
$(this).parents(".GnbMenu").find(".depth3 ol").stop().animate({
"left": "0"
}, 200);
} else {
$(this).parents(".GnbMenu").find(".depth3 .container").empty();
}
});
});
});

}
this.GnbAc = function (n) {
$("#header .GnbMenu").stop().animate({
"height": root.gnbH[n]
}, 250);
}

this.init();
}
}