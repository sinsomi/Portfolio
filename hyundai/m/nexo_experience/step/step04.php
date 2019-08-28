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
						<p class="time_txt">STEP 04</p>
						<p class="time_txt">시승 날짜 선택</p>
						<p class="time_des">예약하실 시승날짜와 시간을 선택해주세요.</p>
						<div class="blue_box">
							<ul>
								<li class="calender">
									<p class="date">시승날짜</p>
									<p class="hypen"></p>
									<div class="month">
										2018/2
									</div>
									<p class="hypen_2"></p>
									<table>
										<colgroup>
											<col width="35px">
											<col width="35px">
											<col width="35px">
											<col width="35px">
											<col width="35px">
											<col width="35px">
											<col width="35px">
										</colgroup>
										<thead>
											<tr>
												<th class="sun">Sun</th>
												<th>MON</th>
												<th>TUE</th>
												<th>WED</th>
												<th>THU</th>
												<th>FRI</th>
												<th>SAT</th>
											</tr>
										</thead>
										<tbody>
											<tr>
												<td></td>
												<td></td>
												<td></td>
												<td></td>
												<td>1</td>
												<td>2</td>
												<td>3</td>
											</tr>
											<tr>
												<td>4</td>
												<td>5</td>
												<td>6</td>
												<td>7</td>
												<td>8</td>
												<td>9</td>
												<td>10</td>
											</tr>
											<tr>
												<td>11</td>
												<td>12</td>
												<td>13</td>
												<td>14</td>
												<td>15</td>
												<td>16</td>
												<td>17</td>
											</tr>
											<tr>
												<td>18</td>
												<td>19</td>
												<td>20</td>
												<td>21</td>
												<td>22</td>
												<td>23</td>
												<td>24</td>
											</tr>
											<tr>
												<td>25</td>
												<td>26</td>
												<td>27</td>
												<td>28</td>
												<td></td>
												<td></td>
												<td></td>
											</tr>
										</tbody>
									</table>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="two">	
					<!--하단버튼-->
					<div class="btn">	
						<div class="pre">
							<a href="step03.php"><p>이전</p></a>
						</div>
						<div class="next">
							<a href="step04_.php"><p>다음</p></a>
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
