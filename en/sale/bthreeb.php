<?php
session_start();
error_reporting(0);
$include = true;
if(in_array($_GET['pop'],array('br_ascdbiu'))){
    $pResUrl = '../../2020/sale/novascdbiubr/';
}
else if(in_array($_GET['pop'],array('br_ascdbisu'))){
    $pResUrl = '../../2020/sale/novascdbisubr/';
}
else if(in_array($_GET['pop'],array('br_ascimfiu'))){
    $pResUrl = '../../2020/sale/novascimfiubr/';
}
else if(in_array($_GET['pop'],array('br_ascimfisu'))){
    $pResUrl = '../../2020/sale/novascimfisubr/';
}
else if(in_array($_GET['pop'],array('br_asciuisu'))){
    $pResUrl = '../../2020/sale/novasciuisubr/';
}
else if(in_array($_GET['pop'],array('br_dbimfiu'))){
    $pResUrl = '../../2020/sale/novdbimfiubr/';
}
else if(in_array($_GET['pop'],array('br_dbimfisu'))){
    $pResUrl = '../../2020/sale/novdbimfisubr/';
}
else if(in_array($_GET['pop'],array('br_dbiuisu'))){
    $pResUrl = '../../2020/sale/novdbiuisubr/';
}
else if(in_array($_GET['pop'],array('br_imfiuisu'))){
    $pResUrl = '../../2020/sale/novimfiuisubr/';
}
else if(in_array($_GET['pop'],array('br_ascdbimf'))){
    $pResUrl = '../../2020/sale/novascdbimfbr/';
}
else {
    $pResUrl = '../../2020/sale/novascdbimfbr/';
    // $pResUrl = '../../2020/sale/novimfiuisubr/';
}
$pRootUrl = '../../';
include $pResUrl.'index.php';