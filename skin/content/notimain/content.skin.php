<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

// add_stylesheet('css 구문', 출력순서); 숫자가 작을 수록 먼저 출력됨
add_stylesheet('<link rel="stylesheet" href="'.$content_skin_url.'/style.css">', 0);
?>


<article id="ctt" class="ctt_<?php echo $co_id; ?>">
    <header>
        <h1><?php echo $g5['title']; ?></h1>
    </header>

    <div id="ctt_con">

        <div style="marigin-bottom:40px">
            <div style="padding-left:100px"> 
                <a href="<?=G5_URL?>/bbs/content.php?co_id=notice" class="no1">
                    <div class="notice1">
                        <img src="<?=G5_IMG_URL?>/customImg/notimain/grtool.png" class="notice2" />
                        <img src="<?=G5_IMG_URL?>/customImg/notimain/01_n.png" class="notice3" id="ho1" />
                        <img src="<?=G5_IMG_URL?>/customImg/notimain/01_i.png" class="notice4" />
                    </div>
                </a>
            </div>

            <div style="padding-left:380px">
                <a href="<?=G5_URL?>/bbs/content.php?co_id=world" class="no2">
                    <div class="notice1">
                        <img src="<?=G5_IMG_URL?>/customImg/notimain/grtool.png" class="notice2" />
                        <img src="<?=G5_IMG_URL?>/customImg/notimain/02_n.png" class="notice3" id= "ho2" />
                        <img src="<?=G5_IMG_URL?>/customImg/notimain/02_i.png" class="notice4" />
                    </div>
                </a>
            </div>

            <div style="padding-left:660px">
                <a href="#" class="no3">
                     <div class="notice1">
                        <img src="<?=G5_IMG_URL?>/customImg/notimain/grtool.png" class="notice2" />
                        <img src="<?=G5_IMG_URL?>/customImg/notimain/03_n.png" class="notice3" id="ho3" />
                        <img src="<?=G5_IMG_URL?>/customImg/notimain/03_i.png" class="notice4" />
                    </div>
                </a>
            </div>

        </div>

        
    </div>

</article>


<script>
    
$(document).ready(function(e) {
	$(".no1").hover(function() {
        $("#ho1").attr("src", "<?=G5_IMG_URL?>/customImg/notimain/01_h.png");
    }, function(e) {
        $("#ho1").attr("src", "<?=G5_IMG_URL?>/customImg/notimain/01_n.png");
    });


    $(".no2").hover(function() {
        $("#ho2").attr("src", "<?=G5_IMG_URL?>/customImg/notimain/02_h.png");
    }, function(e) {
        $("#ho2").attr("src", "<?=G5_IMG_URL?>/customImg/notimain/02_n.png");
    });

    $(".no3").hover(function() {
        $("#ho3").attr("src", "<?=G5_IMG_URL?>/customImg/notimain/03_h.png");
    }, function(e) {
        $("#ho3").attr("src", "<?=G5_IMG_URL?>/customImg/notimain/03_n.png");
    });

})



</script>
