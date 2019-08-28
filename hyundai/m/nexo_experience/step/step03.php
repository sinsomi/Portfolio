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
		<div class="form">
			<div class="form_inner">
				<div class="inner">
					<div class="txt_box">
						<div class="one">
							<p class="p1">STEP03</p>
							<p class="p1">시승 정보 입력</p>
							<p class="p2">시승하실 장소와 인원 그리고 대표 시승자 정보를 입력해주세요.</p>
							<p class="p3">※강릉 경포 주차장</p>
							<p class="des">(강원 강릉시 경포로 475번길 5 / 경포호 주변 도로 위치)</p>
							<p class="p3">※진부 시외버스터미널</p>
							<p class="des">(강원 평창군 진부면 청송로 110 / 평창 송어축제 행사장 입구)</p>
						</div>
						<div class="two">
							<ul>
								<li class="place">
									<div class="in">
										<p class="in_p">시승장소</p>
										<img src="../img/blue_line.png"/>
										<button class="selected"><p class="txt">강릉 경포 주차장</p></button>
										<button class="J"><p class="txt">진부 시외버스터미널</p></button>
									</div>
								</li>
								<li class="per">
									<div class="in">
										<p class="in_p">시승인원</p>
										<img src="../img/blue_line.png"/>
										<ul>
											<li><button class="selected">1인</button></li>
											<li><button class="2">2인</button></li>
											<li><button class="3">3인</button></li>
											<li><button class="4">4인</button></li>
										</ul>
									</div>
								</li>
							</ul>
							<div class="info_wrap">
								<div class="info">
									<p class="in_p">대표 시승자 정보</p>
									<img src="../img/blue_line.png"/>
									<ul class="box">
										<li class="year">	
											<ul>
												<li class="txt">출생년도</li>
												<li>
													<select class="year">
														<option>1980</option>
														<option>1981</option>
														<option>1982</option>
														<option>1983</option>
														<option>1984</option>
														<option>1985</option>
														<option>1986</option>
														<option>1987</option>
														<option>1988</option>
														<option>1989</option>
														<option>1990</option>
														<option>1991</option>
														<option>1992</option>
														<option>1993</option>
														<option>1994</option>
														<option>1995</option>
														<option>1996</option>
														<option>1997</option>
													</select>
												</li>
											</ul>
										</li>
										<li class="name">
											<ul>
												<li class="txt">이름</li>
												<li><input type="text"></li>
											</ul>
										</li>
										<li class="phone">
											<ul>
												<li class="txt">핸드폰번호</li>
												<li class="blank_1">
													<input type="text">
												</li>
												<li class="blank">
													<input type="text">
												</li>
												<li class="blank">
													<input type="text">
												</li>
											</ul>
										</li>
									</ul>
									<div class="warn">
										<p>※ 개인정보 수집 및 이용에 동의한 대표 시승자 분의 정보로 입력해주세요.</p>
										<p>※ 대표 시승자는 시승차량 운전자로 현장에서 운전면허증을 확인하니 꼭 지참해주세요.</p>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="btn">
					<div class="pre">
						<a href="step02.php"><p>이전</p></a>
					</div>															
					<div class="next">
						<a href="step04.php"><p>다음</p></a>
					</div>	
				</div>
			</div>
		</div>
	</div>	
	<?include("../inc/footer.php");?>
	<div class="dimmed" style="display:none;">
	</div> 
</body>
</html>
