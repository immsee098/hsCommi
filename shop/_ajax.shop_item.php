<?
include_once("./_common.php");

$item = sql_fetch("select * from {$g5['shop_table']} shop, {$g5['item_table']} item where shop.it_id = item.it_id and shop.sh_id = '{$sh_id}'");

if($item['sh_id']) {

	$money = "";
	$add_str = "";

	if($item['sh_money']) { 
		$money .= $add_str.$item['sh_money'].' '.$config['cf_money_pice'];
		$add_str = ", ";
	}

	if($item['sh_exp']) { 
		$money .= $add_str.$item['sh_exp'].' '.$config['cf_exp_pice'];
	}

	if($item['it_content2']) { 
		$item['it_content'] .= "<br />(".$item['it_content2'].")";
	}
}

if(defined('G5_THEME_PATH') && is_file(G5_THEME_PATH."/shop/shop.item.skin.php")) {
	include(G5_THEME_PATH."/shop/shop.item.skin.php");
} else {
	include(G5_PATH."/shop/skin/shop.item.skin.php");
}

?>
