<?php
session_start();
error_reporting(0);
$include = true;
if(in_array($_GET['pop'],array('br_ascdbimfiu'))){
    $pResUrl = '../../2020/sale/novascdbimfiubr/';
}else if(in_array($_GET['pop'],array('br_ascdbimfisu'))){
    $pResUrl = '../../2020/sale/novascdbimfisubr/';
}else if(in_array($_GET['pop'],array('br_ascdbiuisu'))){
    $pResUrl = '../../2020/sale/novascdbiuisubr/';
}else if(in_array($_GET['pop'],array('br_ascimfiuisu'))){
    $pResUrl = '../../2020/sale/novascimfiuisubr/';
}else if(in_array($_GET['pop'],array('br_dbimfiuisu'))){
    $pResUrl = '../../2020/sale/novdbimfiuisubr/';
} else{
    $pResUrl = '../../2020/sale/novascdbimfiubr/';
}
$pRootUrl = '../../';
include $pResUrl.'index.php';