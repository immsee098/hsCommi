<?php
if (!defined('_GNUBOARD_')) exit; // 개별 페이지 접근 불가 
add_stylesheet('<link rel="stylesheet" href="'.G5_CSS_URL.'/member.css">', 0);

?>

<div id="character_profile">
	<div id="char_bgm_box">
		<iframe src="./personalBgm.php?action=play" name="char_bgm_frame" id="char_bgm_frame" border="0" frameborder="0" marginheight="0" marginwidth="0" topmargin="0" scrolling="no" allowTransparency="true"></iframe>
	</div>
	<input id="houseCode" style="display:none" value="
		<? 
			$ar = $ch_ar[4];
			$key = $ar['ar_code'];
			echo $ch[$key];
		?>">

	<input id="mainCode" style="display:none" value="
		<? 
			$ar = $ch_ar[14];
			$key = $ar['ar_code'];
			echo $ch[$key];
		?>">
		
	<input id="musicLink" style="display:none" value="
		<? 
			$ar = $ch_ar[13];
			$key = $ar['ar_code'];
			echo $ch[$key];
		?>">

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
		<div id="houseAndName">
			<div id="nameHouse">
				<img src="" id="nameHouseImg">
			</div>
			<div id="charName">
				<div id="krName"><?php echo $ch['ch_name'] ?></div>
				<div id="EnName">
					<? 
						$ar = $ch_ar[0];
						$key = $ar['ar_code'];
						echo $ch[$key];
					?>
				</div>
			</div>
		</div>
		
		<div id="otherEtc">
			<div id="mybgm">
				<div id="myOn"><a href="<?=G5_URL?>/personalBgm.php?action=play" target="char_bgm_frame" class="start bgm-co">▶</a></div>
				<div id="myStop"><a href="<?=G5_URL?>/personalBgm.php" target="char_bgm_frame" class="stop bgm-co">■</a></div>
			</div>

			<div id="sinsang">
				<div id="age">
					<? 
						$ar = $ch_ar[2];
						$key = $ar['ar_code'];
						echo $ch[$key];
					?>세
				</div>
				<div> | </div>
				<div id="gender">
					<? 
						$ar = $ch_ar[5];
						$key = $ar['ar_code'];
						echo $ch[$key];
					?>
				</div>
				<div> | </div>
				<div id="hei">
					<? 
						$ar = $ch_ar[3];
						$key = $ar['ar_code'];
						echo $ch[$key];
					?>cm
				</div>
				<div> | </div>
				<div id="blood">
					<? 
						$ar = $ch_ar[1];
						$key = $ar['ar_code'];
						echo $ch[$key];
					?>
				</div>
			</div>

		</div>
	</div>
	
	<div id="box_middle">
	<!-- 각종 모달 -->
	<div class="modal"> 
		<div class="modal_relation">
			<?
				for($i=0; $i < count($relation); $i++) { 
					$re_ch = get_character($relation[$i]['re_ch_id']);
					if($relation[$i]['rm_memo'] == '') { continue; }
			?>
				<li>
					<div class="ui-thumb" id="relId<?=$i?>">
						<a href="#">
							<img src="<?=$re_ch['ch_thumb']?>" />
						</a>
					</div>
					<div class="info" style="margin-top:10">
						<div class="rm-name">
							<?=$re_ch['ch_name']?>
						</div>
						<div class="rm-like-style">
							<p>
								<? for($j=0; $j < 5; $j++) { 
									$class="";
									$style = "";
									if($j < $relation[$i]['rm_like']) {
										$class="txt-point";
									} else {
										$style="opacity: 0.2;";
									}

									echo "<i class='{$class}' style='{$style}'></i>";
								} ?>
							</p>
						</div>
					</div>
					<input class="memo" id="memo<?=$i?>" value="<?=nl2br($relation[$i]['rm_memo'])?>"/>			
					<ol>
						<?
							$relation[$i]['rm_link'] = nl2br($relation[$i]['rm_link']);
							$link_list = explode('<br />', $relation[$i]['rm_link']);
							for($j=0; $j < count($link_list); $j++) {
								$r_row = $link_list[$j];
								if(!$r_row) continue;
						?>
							<li>
								<a href="<?=$r_row?>" class="btn-log" target="_blank"></a>
							</li>
						<? } ?>
					</ol>
				</li>
			<? }?>
		</div> 
		<div id="modal_relDetail" class="off">
		</div>

		<div id="modal_inven" class="off">
			<div style="text-align:right; margin:10px; font-size:20">INVENTORY</div>
			<div id="invenBox"><? include(G5_PATH."/inventory/list.inc.php"); ?></div>
		</div>
	</div>

	<!-- 본 컨텐츠 -->

		<? if($article['ad_use_body'] && $ch['ch_body']) { ?>
			<div id="character_body">
				<img src="<?=$ch['ch_body']?>" alt="캐릭터 전신" />
			</div>
		<? } ?>
		<div id="box_right">
			<div id="banAndWand">
				<div id="wanAndBtn">
					<div id="wandReal">
						<img src="<?=G5_IMG_URL?>/customImg/house/04wand.png" />
						<? 
							$ar = $ch_ar[12];
							$key = $ar['ar_code'];
						?>
						<img src="<?=$ch[$key]?>" id="realwand" />
						<img src="<?=G5_IMG_URL?>/customImg/house/04wand.png" />
					</div>
					<div id="iconsEtc">
						<div><img src="<?=G5_IMG_URL?>/customImg/house/04_1clothes.png" id="clothes" class="off" /></div>
						<div><img src="<?=G5_IMG_URL?>/customImg/house/04_2inven.png" id="inven" class="off" /></div>
						<div><img src="<?=G5_IMG_URL?>/customImg/house/04_3mix.png" id="mix" /></div>
						<div><img src="<?=G5_IMG_URL?>/customImg/house/04_4rel.png" id="rel" class="off" /></div>		
					</div>

				</div>
				<div id="ban"> 
				<? if($article['ad_use_head'] && $ch['ch_head']) { ?>
					<div id="banImg">
						<img src="<?=$ch['ch_head']?>" alt="캐릭터 흉상" />
					</div>
				<? } ?>
				</div>
			</div>

			<div id="menHel">
				<div>
					<span class="ic"><img src="<?=G5_IMG_URL?>/customImg/house/03healt.png"></span>
					<span class="nn">HP</span>
					<span class="pp"><progress value="<?= $status[14]['now']?>" max="<?= $status[14]['has']?>" id="prgs1"></progress></span>
				</div>
				<div>
					<span class="ic"><img src="<?=G5_IMG_URL?>/customImg/house/03mental.png"></span>
					<span class="nn">MENTAL</span>
					<span class="pp"><progress value="<?= $status[15]['now']?>" max="<?= $status[15]['has']?>" id="prgs2"></progress></span>
				</div>
			</div>
			
		</div>
	</div>

	<hr class="padding" />
	<hr class="padding" />

</div>

<script>

	$(document).ready(function() {
		$("#per").show();
		$("#etc").hide();

		$("html").addClass("double");
			$("html").removeClass("single");

		$("#key1").click(function (e) {
			$("#per").show();
			$("#etc").hide();
		});

		$("#key2").click(function (e) {
			$("#per").hide();
			$("#etc").show();
		});

		$(".ui-thumb").on("click", function(e) {
			let aa = ($(this).attr("id"));
			aa = aa.replace("relId", "");
			let newId = "memo"+aa;
			let texted = $("#"+newId+"").val();
			let getId = $("#"+newId+"").attr("class");
			console.log(texted)

			if(getId == "on"){
				$("#"+newId+"").removeClass("on");
				$("#"+newId+"").addClass("off");
				$("#modal_relDetail").css("display", "none");
			} else {
				$("#modal_relDetail").html(texted);
				$("#"+newId+"").removeClass("off");
				$("#"+newId+"").addClass("on");
				$("#modal_relDetail").css("display", "inline-block");
			}
		});

		changeHouse();
		changeBoarder();
		musicOn();
		changeRelation();
		showInventory();

		//"bgm_frame".location="<?=G5_URL?>/bgm.php";
		// $("#endBtn").trigger("click")
		
	});

	function changeHouse() {
		let code = ($("#houseCode").val()).trim();

		if(code == 'G') {
			$("#nameHouseImg").attr("src", "<?=G5_IMG_URL?>/customImg/house/01gr.png");
			$(".double").css("background-image", "url(<?=G5_IMG_URL?>/customImg/house/02gr.png)");
			$(".double").css("background-repeat", "no-repeat");
			$(".double").css("background-size", "cover");
			$(".double").css("height", "100vh");

		} else if(code == 'H') {
			$("#nameHouseImg").attr("src", "<?=G5_IMG_URL?>/customImg/house/01hf.png");
			$(".single").addClass("double");
			$(".single").removeClass("single");
			$(".double").css("background-image", "url(<?=G5_IMG_URL?>/customImg/house/02hf.png)");
			$(".double").css("background-repeat", "no-repeat");
			$(".double").css("background-size", "cover");
			$(".double").css("height", "100vh");

		} else if(code == 'R') {
			$("#nameHouseImg").attr("src", "<?=G5_IMG_URL?>/customImg/house/01rv.png");
			$(".single").addClass("double");
			$(".single").removeClass("single");
			$(".double").css("background-image", "url(<?=G5_IMG_URL?>/customImg/house/02rv.png)");
			$(".double").css("background-repeat", "no-repeat");
			$(".double").css("background-size", "cover");
			$(".double").css("height", "100vh");

		} else if(code == 'S') {
			$("#nameHouseImg").attr("src", "<?=G5_IMG_URL?>/customImg/house/01sl.png");
			$(".single").addClass("double");
			$(".single").removeClass("single");
			$(".double").css("background-image", "url(<?=G5_IMG_URL?>/customImg/house/02sl.png)");
			$(".double").css("background-repeat", "no-repeat");
			$(".double").css("background-size", "cover");
			$(".double").css("height", "100vh");

		} 
	}

	function changeBoarder() {
		let code = ($("#mainCode").val()).trim();
		let newCss = "1px solid " + code;
		$("#say").css("border", newCss);
	}

	function musicOn() {
		let code = ($("#musicLink").val()).trim();

		if(code != '' && code != null) {
		
			let linkV = "<?=G5_URL?>/personalBgm.php?action=play&listdata="+code;
			$(".start").attr("href", linkV);
		
		}
		
	}

	function changeRelation() {
		$("#rel").click(function() {
			let status = $("#rel").attr("class");
			if(status == "off") {
				$(".modal_relation").css("display", "inline-block");
				$("#rel").removeClass("off");
				$("#rel").addClass("on");
			} else {
				$(".modal_relation").css("display", "none");
				$("#rel").removeClass("on");
				$("#rel").addClass("off");
				$("#modal_relDetail").css("display", "none");
				$("#modal_relDetail").html("");
			}
		});
	}

	function showInventory() {
		$("#inven").click(function() {
			let status = $("#inven").attr("class");
			if(status == "off") {
				$("#modal_inven").css("display", "inline-block");
				$("#inven").removeClass("off");
				$("#inven").addClass("on");
			} else {
				$("#modal_inven").css("display", "none");
				$("#inven").removeClass("on");
				$("#inven").addClass("off");
			}
		});
	}

	// function changeRelation() {
	// 	$("#rel").click(function() {
	// 		let status = $("#inven").attr("class");
	// 		if(status == "off") {
	// 			$(".modal_relation").css("display", "inline-block");
	// 			$("#inven").removeClass("off");
	// 			$("#inven").addClass("on");
	// 		} else {
	// 			$(".modal_relation").css("display", "none");
	// 			$("#inven").removeClass("on");
	// 			$("#inven").addClass("off");
	// 		}
	// 	});
	// }
</script>


