<?php
function sendRequest($dataArr){
    $ch = curl_init(); 
    curl_setopt($ch, CURLOPT_URL, $dataArr['url']); 
    curl_setopt($ch, CURLOPT_POSTFIELDS, $dataArr['data']); 
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_VERBOSE, 1); 
    $response = curl_exec($ch); 
    curl_close($ch);
    return $response;
}

if ($_POST['action'] == 'query'){
	$dataArr = array('url' => 'http://api.iobit.com/upgrade.php', 'data' => array('action' => 'check', 'code' => $_POST['code'], 'app' => 'asc5'));
	$response = sendRequest($dataArr);
    if ($response == '-1' || $response == '-2' || $response == '3' || $response == ''){
		$codeType = 'other';
    } else {
		if ($response == '1'){
			$codeType = '6';
		} elseif($response == '2') {
			$codeType = '6m';
		} else {
			$codeType = 'other';
		}
    }
	exit($codeType);
}
?>