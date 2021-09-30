<?php
/**
download file
 */

ini_set('display_errors', 0);
error_reporting(0);

// 设置内存大小
ini_set("memory_limit","200M");

// 检测AFF变量

$fileName = "db-installer.exe";
$filePath = "http://update.iobit.com/infofiles/installer/cus/".$fileName;
if (!$attachment = file_get_contents($filePath)){
    exit("<script type=\"text/javascript\">alert('open file error.');window.location='javascript:history.back(0)';</script>");
}

$addContent = '';
$addContent .= empty($_GET['aff'])?" ":$_GET['aff'];
$addContent .= '|';
$addContent .= empty($_GET['ref'])?" ":$_GET['ref'];
$addContentLen = mb_strlen($addContent);
if ($addContentLen < 16){
    $maxLen = 16-$addContentLen;
    for ($i=0;$i<$maxLen;$i++){
        $addContent .= " ";
    }
}else{
    $addContent = substr($addContent,0,16);
}

if(!empty($attachment)){
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

    try{
        $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
        $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $pdo->query("set names utf8");
        $insertSql="insert into affdbgeneral(ip,refStr,addtime,status) values(:ip,:refStr,:addtime,1)";
        $pre=$pdo->prepare($insertSql);

        $ip=getIP();
        $refStr=$_GET['ref'].'-'.$_GET['aff'];
        $addTime=time();
        $pre->bindParam(':ip',$ip);
        $pre->bindParam(':refStr',$refStr);
        $pre->bindParam(':addtime',$addTime);
        $pre->execute();
    }catch (PDOException $e){
    }
}

header("HTTP/1.1 200 OK");
header('Content-Encoding:none');
header('Content-Disposition:filename='.$fileName);
header('Content-Type:application/octet-stream');
header('Content-Length: '.(strlen($attachment)+16));
exit($attachment.$addContent);
?>