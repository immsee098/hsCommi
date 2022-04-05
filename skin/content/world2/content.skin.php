<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>

    <div id="sidebox">
        <a href="<?=G5_URL?>/bbs/content.php?co_id=notice"><img src="<?=G5_IMG_URL?>/customImg/notice/1_notice.png" /></a>
        <a href="<?=G5_URL?>/bbs/content.php?co_id=world"><img src="<?=G5_IMG_URL?>/customImg/notice/2_world.png" /></a>
        <a href="#"><img src="<?=G5_IMG_URL?>/customImg/notice/3_system.png" /></a>
    </div>

<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

    <div id="ctt_con">
        <?php echo $str; ?>
        <img src="<?=G5_IMG_URL?>/customImg/world/world3.png" />

    </div>

</article>