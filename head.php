<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가

if(defined('G5_THEME_PATH')) {
	require_once(G5_THEME_PATH.'/head.php');
	return;
}


include_once(G5_PATH.'/head.sub.php');
include_once(G5_LIB_PATH.'/latest.lib.php');
include_once(G5_LIB_PATH.'/outlogin.lib.php');
include_once(G5_LIB_PATH.'/poll.lib.php');
include_once(G5_LIB_PATH.'/visit.lib.php');
include_once(G5_LIB_PATH.'/connect.lib.php');
include_once(G5_LIB_PATH.'/popular.lib.php');

/*********** Logo Data ************/
$logo = get_logo('pc');
$m_logo = get_logo('mo');

$logo_data = "";
if($logo)		$logo_data .= "<img src='".$logo."' ";
if($m_logo)		$logo_data .= "class='only-pc' /><img src='".$m_logo."' class='not-pc'";
if($logo_data)	$logo_data.= " />";
/*********************************/

?>

<!-- 헤더 영역 -->
<header id="header">
	<!-- <div class="fix-layout">  -->
		<!-- 로고 영역 : PC 로고 / 모바일 로고 동시 출력 - 디자인 사용을 체크하지 않을 시, 제대로 출력되지 않을 수 있습니다. -->
		<!-- 관리자 기능을 사용하지 않고 로고를 넣고 싶을 시, < ? = $ log_data ? > 항목을 제거 하고 <img> 태그를 넣으세요. -->
		<!-- <h1 id="logo">
			<a href="<?=G5_URL?>/main.php">
				<?=$logo_data?>
			</a>
		</h1> -->

		<!-- 모바일 모드에서 메뉴를 열고 닫기 할 수 있는 버튼 -->
		<a href="#gnb" id="gnb_control_box">
			<img src="<?=G5_IMG_URL?>/ico_menu_control_pannel.png" alt="메뉴열고닫기" />
		</a>
		<script>
		$('#gnb_control_box').on('click', function() {
			$('body').toggleClass('open-gnb');
			return false;
		});
		</script>
		<!-- 모바일 메뉴 열고 닫기 버튼 종료 -->

		<div style="color: white; left: 30px; position: fixed;"><? include(G5_PATH."/templete/txt.bgm.php"); ?></div>

		<div id="gnb" style="display: flex; flex-direction: column; align-items: flex-end; margin-top: 20px;">
			<?
			$menu_content = get_site_content('site_menu');
			if($menu_content) { 
				echo $menu_content;
			} else { 
			?>
				<ul id="upper_infos">
					<li>
						<ul style="display: flex;">
							<li>
								<img src="<?=G5_IMG_URL?>/customImg/name_deco.png">
							</li>
							<li id="charName">
								<? if(!$is_member) { ?>
								<a href="<?=G5_BBS_URL?>/login.php">LOGIN</a>
								<? } ?>
								<? if($is_member) { ?>
								<span>
									<?=$character['ch_name'] ?>
								</span>
								<? } ?>
							</li>
						</ul>
					</li>
					<!-- 로그인 시 -->
					<? if($is_member) { ?>
						<li style ="margin-right: 3em; width: 120px;">
							<ul style="display: flex; justify-content: space-between;">
								<li>
								<span id="moneyAmount">
									<?=$member['mb_point']?>
								</span>
								<span id="moneyName">
									갈레온
								</span>
								</li>
								<li>
									<a href="http://iksrok.dothome.co.kr/mypage/"><img src="<?=G5_IMG_URL?>/customImg/my_page.png"></a>
								</li>
								<li>
									<a href="<?=G5_BBS_URL?>/logout.php"><img src="<?=G5_IMG_URL?>/customImg/log_out.png"></a>
								</li>
							</ul>
						</li>
					<? } ?>
				</ul>
			
				<ul id="no_design_gnb">
					<li>
						<img src="<?=G5_IMG_URL?>/customImg/left_arrow.png">
					</li>
					<li>
						<a href="<?=G5_URL?>/">
							<img src="<?=G5_IMG_URL?>/customImg/main.png">
						</a>
					</li>
					<li>
						<a href="<?=G5_URL?>/bbs/content.php?co_id=notimain">
							<img src="<?=G5_IMG_URL?>/customImg/world.png">
						</a>
					</li>
					<li>
						<a href="<?=G5_URL?>/">
							<img src="<?=G5_IMG_URL?>/customImg/map.png">
						</a>
					</li>
					<li>
						<a href="<?=G5_URL?>/">
							<img src="<?=G5_IMG_URL?>/customImg/profile.png">
						</a>
					</li>
					<li>
						<a href="<?=G5_URL?>/">
							<img src="<?=G5_IMG_URL?>/customImg/board1.png">
						</a>
					</li>
					<li>
						<a href="<?=G5_URL?>/">
							<img src="<?=G5_IMG_URL?>/customImg/board2.png">
						</a>
					</li>
					<li>
						<a href="<?=G5_URL?>/shop">
							<img src="<?=G5_IMG_URL?>/customImg/shop.png">
						</a>
					</li>
					<li>
						<img src="<?=G5_IMG_URL?>/customImg/right_arrow.png">
					</li>
				</ul>

			<?php } ?>
		</div> 
	<!-- </div> -->
</header>
<!-- // 헤더 영역 -->

<section id="body">
	<div class="fix-layout">
