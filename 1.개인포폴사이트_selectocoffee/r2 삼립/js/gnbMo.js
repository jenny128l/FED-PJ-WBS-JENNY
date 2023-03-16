$(document).ready(function(){
	$(".btnMenu").on("click", function(e){
		e.preventDefault();
		$("#gnbMo").fadeIn();
	});
	$("#gnbMo a").on("click", function(e){
		e.preventDefault();
		$("#gnbMo").fadeOut();
	})
});