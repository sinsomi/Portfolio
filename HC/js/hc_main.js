        $(document).ready(function(){
            $('.lang').click(function(){ //a태그
                event.preventDefault();//a태그 # 이동 방지
                var menu = $(this).next(); //ul태그
                if($(this).hasClass("on")){
                    $(this).removeClass("on");
                    menu.hide();
                }else{
                    $(this).addClass("on");
                    menu.show();
                }
            });
			/*메뉴_mobile버전*/
			$(".menu>a").click(function(){
				var submenu = $(this).next("ul");
				// submenu 가 화면상에 보일때는 위로 보드랍게 접고 아니면 아래로 보드랍게 펼치기
				if( submenu.is(":visible") ){
					submenu.slideUp();
				}else{
					submenu.slideDown();
				}
			});
        });


    
            /*TweenMax.to($("#txt01"),5,{
            css:{left:500},
            delay:1,
            ease:"easeOutBounce",
            onComplet:function(){
            	alert("complete1");
            }*/

        