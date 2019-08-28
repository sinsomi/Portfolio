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
						<div class="all">
							<p class="top">STEP 02</p>
							<p class="top">시승예약 유의사항 안내</p>
							<div class="ck_box">
								<input type="checkbox">
								<span>위 내용을 확인하였습니다.</span>
							</div>
							<div class="box">
								<div class="1">
									<p class="title">예약 및 시승서비스 신청 관련</p>
									<p class="des">- 시승을 위해 반드시 운전면허증을 제시한 후, 시승서비스 이용동의서를 작성해 주셔야 합니다.</p>
									<p class="des">- 운전면허증이 없거나 시승서비스 이용동의서를 작성하지 않으실 경우 시승이 제한됩니다.</p>
									<p class="des">- 시승 운전자는 만 26세 이상, 92년 이전 출생자에 한합니다.</p>
								</div>
								<div class="2">
									<p class="title">예약변경 및 취소관련</p>
									<p class="des">- 시승 예약시간 후 10분 내로 연락이 닿지 않거나 시승부스에 도착하지 못하는 경우 시승예약이 자동취소 됩니다.</p>
									<p class="des">- 예약 변동사항이 있을 경우 시승 담당자에게 예약시간 30분 전까지 연락 바랍니다.</p>
								</div>
								<div class="3">
									<p class="title">서비스 이용관련</p>
									<p class="des">- 정해진 시승 예약시간을 반드시 준수해 주시기 바랍니다.</p>
									<p class="des">- 예약시간 정해진 시승코스에 따라 시승서비스가 제공됩니다.</p>
									<p class="des">- 시승시간 종료시 까지 시승부스로 복귀해야 합니다.</p>
									<p class="des">- 본 시승서비스는 시승 외 타 용도로 사용할 수 없습니다.</p>
									<p class="des">- 교통법규 미 준수에 따른 벌금, 과태료 등은 고객님 본인이 부담합니다.</p>
									<p class="des">- 음주, 심신미약 등 운전이 불가 판단 시, 고객님의 운전능력이 도로교통 상황에 비하여 현저하게 미숙하다 판단 시 과속/위험운전/법규위반등의 경우에는 시승을 제한 받을 수 있으며 향후 시승서비스 이용에도 불이익을 받을 수 있습니다.</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="two">	
					<!--하단버튼-->
					<div class="btn">	
						<div class="pre">
							<a href="step01.php"><p>이전</p></a>
						</div>
						<div class="next">
							<a href="step03.php"><p>다음</p></a>
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
