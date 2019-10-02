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

		/*지도*/
        function initialize() {
            var latlng = new google.maps.LatLng(37.521231,126.9161173);
            var latlng1 = new google.maps.LatLng(37.521231,126.9161173);
            var myOptions = {
                zoom: 16,
                center: latlng1,
                mapTypeId: google.maps.MapTypeId.ROADMAP
            };
            var map = new google.maps.Map(document.getElementById("map_canvas"), myOptions);
            var contentString = '<div id="content">'+
                                    '<div id="siteNotice">'+
                                    '</div>'+
                                    '<div id="bodyContent">'+
                                    ' HC INVESTMENT '+
                                    '</div>'+
                                    '</div>';
            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            var marker = new google.maps.Marker({
                position: latlng,
                title:"Elrois",
                map: map
            });
            infowindow.open(map,marker);
        }
        