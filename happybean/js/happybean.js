$(document).ready(function(){
	/*banner*/
	// 기존 css에서 플로팅 배너 위치(top)값을 가져와 저장한다.
	var floatPosition = parseInt($(".banner").css('top'));
	// 250px 이런식으로 가져오므로 여기서 숫자만 가져온다. parseInt( 값 );

	$(window).scroll(function() {
		// 현재 스크롤 위치를 가져온다.
		var scrollTop = $(window).scrollTop();
		var newPosition = scrollTop + floatPosition + "px";

		/* 애니메이션 없이 바로 따라감
		 $("#floatMenu").css('top', newPosition);
		 */

		$(".banner").stop().animate({
			"top" : newPosition
		}, 500);

	}).scroll();

	/*swiper*/
	new Swiper('.swiper-container', {
		pagination : { // 페이징 설정
			el : '.swiper-pagination',
			clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
		},
		navigation : {
			nextEl : '.swiper-button-next', // 다음 버튼 클래스명
			prevEl : '.swiper-button-prev', // 이번 버튼 클래스명
		},
	});
	/*footer*/
	$(".service").click(function(){
		if($(".more").hasClass("more")){
			$(".more").addClass("close").removeClass("more");
		}else if($(".close").hasClass("close")){
			$(".close").addClass("more").removeClass("close");
		}
	});
	/*words_slide*/
	function name(){
		if($(".words ul").position().top <= -1292){
			$(".words ul").css("top" , "0px");
		};
		$(".words ul").css("top" , "-=68");
		/*$(".words ul").animate({top : "-=68"});*/
	}
	setInterval(name , 2000);

	/*nav*/
	$(".nav_items > li > a").click(function(){
		$(this).parent().addClass("active").siblings().removeClass("active");
	});
	/*btn_next 누르면 페이지이전*/
	$(".btn_next").click(function(){
		$(".conts_left").css("top","-=960px").css("transition","all 0.5s ease-in-out");
		$(".conts_right").css("top","+=960px").css("transition","all 0.5s ease-in-out");

		/*동그라미부분 커지는 곳*/
		$(".numbers > span").addClass("on").siblings().removeClass("on");
	});
	/*btn_prev 누르면 페이지이전*/
	$(".btn_prev").click(function(){
		$(".conts_left").css("top","+=960px").css("transition","all 0.5s ease-in-out");
		$(".conts_right").css("top","-=960px").css("transition","all 0.5s ease-in-out");
	});
	/*btn_prev 맨 첫페이지에서 사라지기*/
	/*
	if($(".index").hasClass("last")) {
		$(".btn_prev").css("visibility", "hidden");
	}else{
		$(".btn_prev").css("visibility","visible");
	}
	*/
	/*btn_next 맨마지막 페이지에서 사라지기*/

});


	

	/*if($(".conts_left").css("top") == "0px"){   
		$('.btn_prev').css("visibility", "hidden");   
	} else {
		$(".btn_prev").css("visibility","visible");
	}*/


