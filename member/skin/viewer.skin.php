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

		</div>
		<div id="per">
		</div>
		<div id="keyword">

		</div>
		<div id="say">

		</div>
		<div id="nameHouse">

		</div>
		<div id="otherEtc"></div>
	</div>
	
	<div id="box_middle">
	</div>

	<div id="box_right">
	</div>

	<hr class="padding" />
	<hr class="padding" />

</div>


