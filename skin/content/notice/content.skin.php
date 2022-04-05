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

        <div>
            <div id="topbox">
                <img src="<?=G5_IMG_URL?>/customImg/notice/up.png" />
                <div id="noticeMenu">
                    <a href="#gibon" id="tag1"><img src="<?=G5_IMG_URL?>/customImg/notice/gibon.png" /></a>
                    <a href="#running" id="tag2"><img src="<?=G5_IMG_URL?>/customImg/notice/running.png" /></a>
                    <a href="#charamake" id="tag3"><img src="<?=G5_IMG_URL?>/customImg/notice/charma.png" /></a>
                </div>
            </div>

            <div>
                <div id="conbox">
                    <div id="gibon"><img src="<?=G5_IMG_URL?>/customImg/notice/01_noti.png" /></div>
                    <div id="running"><img src="<?=G5_IMG_URL?>/customImg/notice/02_noti.png" /></div>
                    <div id="charamake"><img src="<?=G5_IMG_URL?>/customImg/notice/03_noti.png" /></div>
                </div>
            </div>
        </div>
    </div>

</article>