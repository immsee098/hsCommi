<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/member.css">', 0);

?>

<div id="character_profile">

	<div id="box_left">
		<div id="stat_box">
			<div>
				<ul>
					<li><span>마법</span><span><?= $status[0]['has']?></span></li>
					<li><span>마법약</span><span><?= $status[1]['has']?></span></li>
					<li><span>역사</span><span><?= $status[2]['has']?></span></li>
					<li><span>변신술</span><span><?= $status[3]['has']?></span></li>
					<li><span>약초학</span><span><?= $status[4]['has']?></span></li>
					<li><span>어마방</span><span><?= $status[5]['has']?></span></li>
					<li><span>신비동</span><span><?= $status[6]['has']?></span></li>
				</ul>
			</div>
			<div>
			<ul>
				<li><span>근력</span><span><?= $status[7]['has']?></span></li>
				<li><span>지능</span><span><?= $status[8]['has']?></span></li>
				<li><span>민첩</span><span><?= $status[9]['has']?></span></li>
				<li><span>관찰</span><span><?= $status[10]['has']?></span></li>
				<li><span>손재주</span><span><?= $status[11]['has']?></span></li>
				<li><span>인내</span><span><?= $status[12]['has']?></span></li>
				<li><span>대인관계</span><span><?= $status[13]['has']?></span></li>
				</ul>
			</div> 
		</div>
		<div id="app">
			<? 
				$ar = $ch_ar[7];
				$key = $ar['ar_code'];
			?>
			<p>
				<?
					echo nl2br($ch[$key]);
				?>	
			</p>

		</div>
		<div id="etc">
			<? 
				$ar = $ch_ar[11];
				$key = $ar['ar_code'];
			?>
			<p>
				<?
					echo nl2br($ch[$key]);
				?>	
			</p>
		</div>
		<div id="per">
			<? 
				$ar = $ch_ar[10];
				$key = $ar['ar_code'];
			?>
			<p>
				<?
					echo nl2br($ch[$key]);
				?>	
			</p>
		</div>
		<div id="keyword">
			<span id="key1"> 
				<? 
					$ar = $ch_ar[8];
					$key = $ar['ar_code'];
					echo $ch[$key];
				?>
			</span>
			<span> | </span>
			<span id="key2">
				<? 
					$ar = $ch_ar[9];
					$key = $ar['ar_code'];
					echo $ch[$key];
				?>
			</span>
		</div>
		<div id="say">
			<? 
				$ar = $ch_ar[6];
				$key = $ar['ar_code'];
				echo $ch[$key];
			?>
		</div>
		<div id="nameHouse">

		</div>
		<div id="otherEtc"></div>
	</div>
	
	<div id="box_middle">
		<div id="box_right">
		</div>
	</div>

	<hr class="padding" />
	<hr class="padding" />

</div>

<script>
	$(document).ready(function() {
		$("#per").show();
		$("#etc").hide();

		$("#key1").click(function (e) {
			$("#per").show();
			$("#etc").hide();
		});

		$("#key2").click(function (e) {
			$("#per").hide();
			$("#etc").show();
		});
	});
</script>


