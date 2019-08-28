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
	<div class="content_wrap">
		<div class="content">
			<div class="back">
				<div class="txt">
					<p class="p1">Light Up NEXO Experience</p>
					<p class="p2">2018 평창 동계올림픽에서 현대자동차 NEXO와 <br>자율주행차를 직접 체험해 보세요</p>
					<p class="p3">시승예약</p>
				</div>
			</div>
		</div>
		<!--form : contents-->
		<div class="form">
			<div class="form_inner">
				<div class="inner">
					<div class="txt_box">
						<div class="all_content">
							<div class="head">
								<p class="title">STEP01</p>
								<p class="title">시승예약 약관동의</p>
								<p class="des">시승신청을 위해서 아래 약관에 동의해주세요.</p>
							</div>
							<div class="check">
								<p>
									<input type="checkbox">
									<span class="r">(모두동의)</span><span>개인 정보 수집 및 이용, 마케팅 활용에 모두 동의 합니다.</span>
								</p>
								<p>
									<input type="checkbox">
									<span>개인정보 수집, 이용 동의 (필수)</span>
								</p>
								<p>
									<input type="checkbox">
									<span>개인정보 마케팅 활용 동의 (필수)</span>
								</p>
							</div>
							<div class="main">
								<p class="title">[ 개인정보 수집 및 이용 안내 ]</p>
								<div class="box_1">
									<p>-수집 및 이용 목적:행사 운영 및 모객을 위한 신청건 확인</p>
									<p>-수집 항목:이름, 휴대전화, 출생년도</p>
									<p>-보유 및 이용 기간: 개인정보 수집 및 이용 동의 후 2년(본인 삭제 요청시 본인 확인 후 삭제)</p>
								</div>
								<p class="title">[ 개인정보 마케팅 활용 안내 ]</p>
								<div class="box_1">
									<p>-수집 및 이용 목적: 서비스(제품포함)등 최신 정보 안내, 이벤트 초청, 잠재고객 관리, 통계분석 자료활용, 광고성 정보 전송</p>
									<p>- 수집 항목: 수집 항목과 같음</p>
									<p>- 보유 및 이용 기간: 개인정보 수집 및 이용 동의 후 2년 (본인 삭제 요청시 본인 확인 후 삭제)</p>
								</div>
							</div>
							<div class="foot">
								<p class="title">[ 개인정보 마케팅 활용 안내 ]</p>
								<div class="box_2">
									<p>- 수탁자: 버드핸드, 루트 2008 (위탁업무: 전산 시스템 운영 및 유지 보수)</p>
									<p>- 수탁자: 이노션, 루트 2003, ㈜ 지엠컴 (위탁업무: 고객 초청행사, 우편물 및 경품배송 업무, 사후 마케팅 관련 업무, 이벤트안내</p>
									<p>- 수탁자: 현대자동차 판매 대리점 (위탁업무: 판매 대행)</p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="two">
					<!--하단버튼-->
					<div class="btn">													
						<div class="next">
							<a href="step02.php"><p>다음</p></a>
						</div>	
					</div>
					<!--하단버튼-->
				</div>
			</div>
		</div>
		<!--//form : content-->
	</div>	
	<?include("../inc/footer.php");?>
</div>
</body>