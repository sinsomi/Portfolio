<!DOCTYPE html>
<head>
	<?include("../inc/head.php");?>
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
			<div class="step_wrap">
				<div class="step">
					<ul>
						<li class="txt_1">
							<p class="title">STEP1</p>
							<p class="sub">시승예약 약관동의</p>
						</li>
						<img src="../img/step_arrow.png">
						<li class="txt_2">
							<p class="title">STEP2</p>
							<p class="sub">시승예약 유의사항</p>
						</li>
						<img src="../img/step_arrow.png">
						<li class="txt_3">
							<p class="title">STEP3</p>
							<p class="sub">시승 정보 입력</p>
						</li>
						<img src="../img/step_arrow.png">
						<li class="txt_4">
							<p class="title">STEP4</p>
							<p class="sub">시승 시간 선택</p>
						</li>
						<img src="../img/step_arrow.png">
						<li class="txt_5 on">
							<p class="title">STEP5</p>
							<p class="sub">예약 신청 완료</p>
						</li>
					</ul>
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
						<div class="two">	
							<!--하단버튼-->
							<div class="btn">	
								<div class="pre">
									<img src="../img/prev_arrow.png">
									<a href="step04.php"><p>이전</p></a>
								</div>
								<div class="next">
									<a href="step05.php"><p>다음</p></a>
									<img src="../img/next_arrow.png" >
								</div>	
							</div>
							<!--하단버튼-->
						</div>
					</div>
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
