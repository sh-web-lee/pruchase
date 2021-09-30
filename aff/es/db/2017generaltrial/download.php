<?php
/**
download file
 */

ini_set('display_errors', 1);
error_reporting(0);

// 设置内存大小
ini_set("memory_limit","200M");

// 检测AFF变量

$fileName = "db8trial-installer.exe";
$filePath = "https://cdn.iobit.com/dl/cus/db/v8/" . $fileName;
if (!$attachment = file_get_contents($filePath)){
    exit("<script type=\"text/javascript\">alert('open file error.');window.location='javascript:history.back(0)';</script>");
}

//$addContent = '';
//$addContent .= empty($_GET['aff'])?" ":$_GET['aff'];
//$addContent .= '|';
//$addContent .= empty($_GET['ref'])?" ":$_GET['ref'];
$affContent = empty($_GET['aff']) ? "esdb8gt" : $_GET['aff'];
$refContent = empty($_GET['ref']) ? " " : $_GET['ref'];
$addContent = json_encode(['aff'=>$affContent, 'ref'=>$refContent]);
$addContentLen = mb_strlen($addContent);
if ($addContentLen < 128){
    $maxLen = 128-$addContentLen;
    for ($i=0;$i<$maxLen;$i++){
        $addContent .= " ";
    }
}else{
    $addContent = substr($addContent,0,128);
}

header("HTTP/1.1 200 OK");
header('Content-Encoding:none');
header('Content-Disposition:filename='.$fileName);
header('Content-Type:application/octet-stream');
header('Content-Length: '.(strlen($attachment)+128));
exit($attachment.$addContent);
?>