	$(document).ready(function(){
	$(".menu_box").hide(function(){
	});
	$(".menu_img").click(function(){
		$(".menu_box").fadeIn();
	});
	$("#img").click(function(){
		$(".menu_box").fadeOut();
	});
	$(".space").click(function(){
		$(".menu_box").fadeOut();
	});
	$("#items > li > a").click(function(){
		$(this).parent().addClass('active').siblings().removeClass('active');
		return false;
	});
	/*img_border*/
	$('#img').mouseenter(function(){
		$('#img').css('border','0px solid #57b7e7');
	});
	$('#img').mouseleave(function(){
		$('#img').css('border','0px');
	});
	/*dimmed*/
	$(".menu_box").click(function(){
		$(".dimmed").show();
	});
	$(".dimmed").click(function(){
		$(".menu_box").hide();
	});
});