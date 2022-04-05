<script>
var bgm_effect = null;
var set_equalizer = function () {
	$('.bar-equalizer i').each(function(i) {
		var height = Math.random() * 20 + 5;
		$(this).css('height', height);
	});
}
// function fn_control_bgm(state) {
// 	if(state == 'play') { 
// 		$('.bar-equalizer').removeClass('stop');
// 		bgm_effect = setInterval(set_equalizer, 300);
// 	} else { 
// 		$('.bar-equalizer').addClass('stop');
// 		clearInterval(bgm_effect);
// 		$('.bar-equalizer i').css('height', '2px');
// 	}

// 	if($('html').hasClass('single')) { 
// 		return false;
// 	} else {
// 		return true;
// 	}
// }

$(document).ready(function(e) {
	bgm_effect = setInterval(set_equalizer, 300);
	console.log("start");

	$("#bgm-bt").on("click", function() {
		if($("#bgm-bt").html()=='STOP'){
			$("#bgm-bt").html("START");
			clearInterval(bgm_effect);
			console.log("stop");
		} else {
			$("#bgm-bt").html("STOP");
			bgm_effect = setInterval(set_equalizer, 300);
			console.log("start");
		}		
	})

})

	
bgm_effect = setInterval(set_equalizer, 300);
</script>

<? if($config['cf_bgm']) { ?>
<nav class="bgm-player">
<span class="bgm-bt"><a href="<?=G5_URL?>/bgm.php?action=play" target="bgm_frame" class="play bgm-co" onclick="return fn_control_bgm('play')" style="color: #878787">▶</a></span>
<span class="bgm-bt"><a href="<?=G5_URL?>/bgm.php" target="bgm_frame" class="stop bgm-co" onclick="return fn_control_bgm('stop')" style="color: #878787; margin-left:10px">■</a></span>
	<div class="bar-equalizer">
		<?
			// 이퀄라이저 바 개수
			$equal_count =0;
			while($equal_count > 0) { echo "<i></i>"; $equal_count--; } 
		?>
	</div>
	<!-- <ul>
		<li>
			<a href="<?=G5_URL?>/bgm.php?action=play" target="bgm_frame" class="play" onclick="return fn_control_bgm('play')">
				<button>재생</button>
				재생
			</a>
		</li>
		<li>
			<a href="<?=G5_URL?>/bgm.php" target="bgm_frame" class="stop" onclick="return fn_control_bgm('stop')">
				<button>정지</button>
				정지
			</a>
		</li>
	</ul> -->
</nav>

<? } ?>