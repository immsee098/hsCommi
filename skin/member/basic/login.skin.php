<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가
if(strstr($url, 'adm')) {
	include_once($member_skin_path.'/login.admin.skin.php');
} else {

add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/login.css">', 0);


/*********** Logo Data ************/
$logo = get_logo('pc');
$m_logo = get_logo('mo');

$logo_data = "";
if($logo)		$logo_data .= "<img src='".$logo."' />";
/*********************************/
?>



<div class="loginWrap">
	<div class="login-inner">
		<div id="smallbox"><img src="<?=G5_IMG_URL?>/customImg/login/small_1.png"></div>

		<?
		// 등록된 로고 파일이 있을 경우에만 출력 한다.
		if($logo_data) { ?>
			<img src="<?=G5_IMG_URL?>/customImg/login/login_logo.png" id="logoImg">
			<hr class="padding" />
		<? } ?>
		<div class="login-form-box">
			<div class="inner">
				<form name="flogin" action="<?php echo $login_action_url ?>" onsubmit="return flogin_submit(this);" method="post">
					<input type="hidden" name="url" value='<?php echo $login_url ?>'>
					<div>
						<fieldset>
						<img src="<?=G5_IMG_URL?>/customImg/login/id.png"><input type="text" name="mb_id" id="login_id" required class="frm_input required" size="20" maxLength="20" style="border: none;
						background: transparent;
						border-bottom: 2px dotted #a47c0b;
						width: 200px;
						margin-left: 10px;">
						</fieldset>
						<fieldset>
						<img src="<?=G5_IMG_URL?>/customImg/login/pw.png"><input type="password" name="mb_password" id="login_pw" required class="frm_input required" size="20" maxLength="20" style="border: none;
						background: transparent;
						border-bottom: 2px dotted #a47c0b;
						width: 200px;
						margin-left: 10px;">
						</fieldset>
					</div>
					<div id="bottomBox">
						<a href="<?php echo G5_BBS_URL ?>/register.php"><img src="<?=G5_IMG_URL?>/customImg/login/sign_up.png"></a>
						<button type="submit" class="btnlogin"><img src="<?=G5_IMG_URL?>/customImg/login/login.png"></button>
					</div>
				</form>
			</div>
		</div>

	</div>

	<img src="<?=G5_IMG_URL?>/customImg/login/big_q.png" id="bottom_box">

</div>


<script>
$(document).ready(function() {
})

function flogin_submit(f) {
	return true;

</script>
<!-- } 로그인 끝 -->
<? } ?>