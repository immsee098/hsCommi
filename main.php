<?php
include_once('./_common.php');
define('_MAIN_', true);

if(defined('G5_THEME_PATH')) {
	require_once(G5_THEME_PATH.'/main.php');
	return;
}
include_once(G5_PATH.'/head.php');
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/main.css">', 0);
include_once(G5_PATH."/intro.php");
?>

<div id="main_body">

<?
$main_content = get_site_content('site_main');
if($main_content) { 
	echo $main_content;
} else { 
?>
	<div id="no_design_main">
		<div id="mainLogos">
			<div id="logobox1">
				<img src="<?=G5_IMG_URL?>/customImg/circle_small.png" />
			</div>
			<div id="logobox2">
				<img src="<?=G5_IMG_URL?>/customImg/circle_big.png" />
			</div>
			<div id="logobox3">
				<img src="<?=G5_IMG_URL?>/customImg/main_typo.png" />
			</div>
		</div>
	</div>
<?php } ?>
</div>

<script>
$(function() { 
	window.onload = function() {
		$('#body').css('opacity', 1);
	};
});
</script>

<?
include_once(G5_PATH.'/tail.php');
?>