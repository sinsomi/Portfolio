
<script>
		$(document).ready(function(){
			$(".center_img").click(function(){
				$(".dimmed").show();
			});
			$(".dimmed").click(function(){
				$(this).hide();
			});
		});
	</script>
	<div class="dimmed" style="display:none;">
		<div class="login_box">
			로그인
		</div>
	</div> 
	