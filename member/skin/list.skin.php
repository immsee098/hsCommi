<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/member.css">', 0);
?>

<div class="memberWrap">
	<div id="grHouse">
		<div class="grDiv"><img src="<?=$side[0]['si_img']?>" class="hsIcon"></div>
		<?
			$ch_list = $list[0];
			for($k=0; $k < count($ch_list); $k++) {
				$ch = $ch_list[$k];
		?>
			<div class="charImg grDiv">
				<a href="./viewer.php?ch_id=<?=$ch['ch_id']?>" style="position: relative">
					<? if($ch['ch_thumb']) { ?>
						<div class="imgThumb"><img src="<?=$ch['ch_thumb']?>" /></div>
						<div class="crName"><?=$ch['ch_name']?></div>
					<? } ?>
				</a>
			</div>

		<?}?>
	</div>
	<div id="slHouse">	
		<?
			$ch_list = $list[1];
			for($k=0; $k < count($ch_list); $k++) {
				$ch = $ch_list[$k];
		?>
		<div class="charImg slDiv">
			<a href="./viewer.php?ch_id=<?=$ch['ch_id']?>" style="position: relative">
				<? if($ch['ch_thumb']) { ?>
					<div class="imgThumb"><img src="<?=$ch['ch_thumb']?>" /></div>
					<div class="crName"><?=$ch['ch_name']?></div>
				<? } ?>
			</a>
		</div>
		<?}?>
		<div class="slDiv"><img src="<?=$side[1]['si_img']?>" class="hsIcon"></div>
	</div>

	<div id="rvHouse">
		<div class="rvDiv"><img src="<?=$side[2]['si_img']?>" class="hsIcon"></div>
			<?
				$ch_list = $list[2];
				for($k=0; $k < count($ch_list); $k++) {
					$ch = $ch_list[$k];
			?>
			<div class="charImg rvDiv">
				<a href="./viewer.php?ch_id=<?=$ch['ch_id']?>" style="position: relative">
					<? if($ch['ch_thumb']) { ?>
						<div class="imgThumb"><img src="<?=$ch['ch_thumb']?>" /></div>
						<div class="crName"><?=$ch['ch_name']?></div>
					<? } ?>
				</a>
			</div>

		<?}?>
	</div>

	<div id="hfHouse">
		<?
			$ch_list = $list[3];
			for($k=0; $k < count($ch_list); $k++) {
				$ch = $ch_list[$k];
		?>
		<div class="charImg hfDiv">
			<a href="./viewer.php?ch_id=<?=$ch['ch_id']?>" style="position: relative">
				<? if($ch['ch_thumb']) { ?>
					<div class="imgThumb"><img src="<?=$ch['ch_thumb']?>" /></div>
					<div class="crName"><?=$ch['ch_name']?></div>
				<? } ?>
			</a>
		</div>
		<?}?>
		<div class="hfDiv"><img src="<?=$side[3]['si_img']?>" class="hsIcon"></div>
	</div>
</div>

<script>
$('.send_memo').on('click', function() {
	var target = $(this).attr('href');
	window.open(target, 'memo', "width=500, height=300");
	return false;
});
</script>