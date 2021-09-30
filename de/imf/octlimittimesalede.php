<?php
session_start();
error_reporting(0);
$include = true;

/*if($_COOKIE["dedbtestab"]=='tob'){
    header("location:./octoberfestsalede.php");
    exit;
}else{
    if(empty($_COOKIE["dedbtestab"])){
        $randnum = rand(1,100);
        if($randnum%2==0){
            setcookie("dedbtestab","tob",time()+30*24*3600);
            header("location:./octoberfestsalede.php");
            exit;
        }else{
            setcookie("dedbtestab","toa",time()+30*24*3600);
        }
    }
}*/

$pResUrl = '../../2015/imf/octlimittimesalede/';
$pRootUrl = '../../';

include $pResUrl.'index.php';