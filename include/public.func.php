<?php
// 浏览器语言
function getLanguage($reType = 'default'){
	$language = strtolower($_SERVER['HTTP_ACCEPT_LANGUAGE']);
	$languageArr = explode(";",$language);
	$languageArr = explode(",",$languageArr[0]);
	$language = $languageArr[0];
	if ($reType == 'language'){
		$languageArr = explode("-",$language);
		$reValue = $languageArr[0];
	} elseif($reType == 'country') {
		$languageArr = explode("-",$language);
		if (count($languageArr) > 1){
			$reValue = $languageArr[1];
		} else {
			$reValue = $languageArr[0];
		}
	} else {
		$reValue = $language;
	}
	return $reValue;
}
function getIP()
{
	if (!empty($_SERVER["HTTP_CLIENT_IP"])) {
		$cip = $_SERVER["HTTP_CLIENT_IP"];
	} elseif (!empty($_SERVER["HTTP_X_FORWARDED_FOR"])) {
		$ip_arr = explode(',',$_SERVER["HTTP_X_FORWARDED_FOR"]);
		$cip=$ip_arr[0];
	} elseif (!empty($_SERVER["REMOTE_ADDR"])) {
		$cip = $_SERVER["REMOTE_ADDR"];
	}else{
		$cip='';
	}
	return $cip;
}
function isEdge(){
	if(false!==strpos($_SERVER['HTTP_USER_AGENT'],'Edge')){
		return true;
	}else{
		return false;
	}
}
