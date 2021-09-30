<?php
session_start();
error_reporting(0);
$include = true;
if(in_array($_GET['pop'],array('br_ascimf'))){
    $pResUrl = '../../2020/sale/novascimfbr/';
}
else if(in_array($_GET['pop'],array('br_asciu'))){
    $pResUrl = '../../2020/sale/novasciubr/';
}
else if(in_array($_GET['pop'],array('br_ascisu'))){
    $pResUrl = '../../2020/sale/novascisubr/';
}
else if(in_array($_GET['pop'],array('br_dbimf'))){
    $pResUrl = '../../2020/sale/novdbimfbr/';
}
else if(in_array($_GET['pop'],array('br_dbiu'))){
    $pResUrl = '../../2020/sale/novdbiubr/';
}
else if(in_array($_GET['pop'],array('br_dbisu'))){
    $pResUrl = '../../2020/sale/novdbisubr/';
}
else if(in_array($_GET['pop'],array('br_imfiu'))){
    $pResUrl = '../../2020/sale/novimfiubr/';
}
else if(in_array($_GET['pop'],array('br_imfisu'))){
    $pResUrl = '../../2020/sale/novimfisubr/';
}
else if(in_array($_GET['pop'],array('br_iuisu'))){
    $pResUrl = '../../2020/sale/noviuisubr/';
}
else {
    $pResUrl = '../../2020/sale/novascdbbr/';
}
$pRootUrl = '../../';
include $pResUrl.'index.php';