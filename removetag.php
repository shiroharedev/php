<?php
/*
 * 
 * 特定のWebページ内の文字列を消去
 * 正規表現でscript,style内を全部消去後
 * tagを除去し、ページ内のスペースをすべて除去する
 */
  
 
function removetag($str){
	$p="!<script.*?\>.*?</script>!ims";
	$str = preg_replace($p,"",$str);
	$p="!<style.*?\>.*?</style>!ims";
	$str = preg_replace($p,"",$str);
	//echo $ret;
	$str=strip_tags($str);
	$pattern='/(\s| )/';
	$str=preg_replace($pattern, "", $str);
	return $str;
}
?>