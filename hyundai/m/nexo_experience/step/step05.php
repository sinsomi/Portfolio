<!DOCTYPE html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
	<meta charset="utf-8">
	<title>LIGHT UP YOUR ENERGY</title>
	<script src="../js/jquery.js"></script>
	<script src="../js/hyundai.js"></script>
	<link rel="stylesheet" type="text/css" href="../css/step.css">
	<script>
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
		/*img_border*/
		$('#img').mouseenter(function(){
			$('#img').css('border','1px solid #57b7e7');
		});
		$('#img').mouseleave(function(){
			$('#img').css('border','0px');
		});
	});
	</script>
</head>
<body>
	<div class="main_wrap">
		<!--header-->
		<?include("../inc/header.php");?>
		<!--//header-->		
	</div>
	<div class="content_wrap">
		<div class="content">
			<div class="back">
				<div class="txt">
					<p class="p1">Light Up NEXO Experience</p>
					<p class="p2">2018 평창 동계올림픽에서 현대자동차 NEXO와 자율주행차를 직접 체험해 보세요</p>
					<p class="p3">시승예약</p>
				</div>
			</div>
		</div>
		<!--form : contents-->
		<div class="form">
			<div class="form_inner">
				<div class="inner">
					<div class="txt_box">
						<div class="suc">
							<img src="../img/car.png"/>
							<div class="text">
								<p class="title">예약이 성공적으로 완료 되었습니다.</p>
								<p class="des">신청 완료 버튼 선택 시 시승 신청이 정상적으로 완료됩니다.</p>
							</div>
							<div class="table">
								<ul>
									<li class="left"><p>대표 시승자</p></li>
									<li class="right">홍 길 동 님</li>
								</ul>
								<ul>
									<li class="left"><p>연락처</p></li>
									<li class="right">010-1234-1234</li>
								</ul>
								<ul>
									<li class="left"><p>시승인원</p></li>
									<li class="right">3명</li>
								</ul>
								<ul>
									<li class="left"><p>시승날짜</p></li>
									<li class="right">02월 13일 (화)</li>
								</ul>
								<ul class="add">
									<li class="left"><p>시승시간</p></li>
									<li class="right">오전 11시 30분</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
				<div class="two">	
					<!--하단버튼-->
					<div class="btn">	
						<div class="pre">
							<a href="step04.php"><p>이전</p></a>
						</div>
						<div class="next">
							<a href="step05.php"><p>다음</p></a>
						</div>	
					</div>
					<!--하단버튼-->
				</div>
			</div>
		</div>
		<!--//form : content-->
	</div>	
	<?include("../inc/footer.php");?>
	<div class="dimmed" style="display:none;">
	</div> 
</body>
</html>
