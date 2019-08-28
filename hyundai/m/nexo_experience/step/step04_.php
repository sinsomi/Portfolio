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
						<p class="time_txt">STEP04</p>
						<p class="time_txt">시승 시간 선택</p>
						<p class="time_des">예약 하실 시승날짜와 시간을 선택해주세요.</p>
						<div class="blue_box">
							<ul>
								<li class="time">
									<p class="date">시승시간</p>
									<p class="hypen"></p>
									<div class="wrap_box">
										<ul>
											<li class="inner_box">10:00</li>
											<li class="inner_box">10:10</li>
											<li class="inner_box">10:20</li>
											<li class="inner_box">10:30</li>
											<li class="inner_box">10:40</li>
											<li class="inner_box">11:00</li>
											<li class="inner_box">11:10</li>
											<li class="inner_box">11:20</li>
											<li class="inner_box">11:30</li>
											<li class="inner_box">11:40</li>
											<li class="inner_box">12:00</li>
											<li class="inner_box">12:10</li>
											<li class="inner_box">12:20</li>
											<li class="inner_box">12:30</li>
											<li class="inner_box">12:40</li>
											<li class="inner_box">13:00</li>
											<li class="inner_box">13:10</li>
											<li class="inner_box">13:20</li>
											<li class="inner_box">13:30</li>
											<li class="inner_box">13:40</li>
											<li class="inner_box">14:00</li>
											<li class="inner_box">14:10</li>
											<li class="inner_box">14:20</li>
											<li class="inner_box">14:30</li>
											<li class="inner_box">14:40</li>
											<li class="inner_box">15:00</li>
											<li class="inner_box">15:10</li>
											<li class="inner_box">15:20</li>
											<li class="inner_box">15:30</li>
											<li class="inner_box">15:40</li>
											<li class="inner_box">16:00</li>
											<li class="inner_box">16:10</li>
											<li class="inner_box">16:20</li>
											<li class="inner_box">16:30</li>
											<li class="inner_box">16:40</li>
									</div>
								</li>
							</ul>
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
