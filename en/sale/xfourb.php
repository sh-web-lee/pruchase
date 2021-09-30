<?php
session_start();
error_reporting(0);
$include = true;
$pop = $_GET['pop'];
$type = explode('_', $pop);

function countStr($str)
{
    $str_array = str_split($str);
    $str_array = array_count_values($str_array);
    arsort($str_array);
    return $str_array;
}

function Same($handle, $needle)
{
    if (strlen($handle) == strlen($needle)) {
        $handle_array = countStr($handle);
        $needle_array = countStr($needle);
        if (empty(array_diff_assoc($handle_array, $needle_array))) {
            if (empty(array_diff_assoc($needle_array, $handle_array))) {
                return true;
            }
        }
    }
    return false;
}

if (Same($type[1], 'ascdbimfiu')) {
    $pResUrl = '../../2020/sale/decascdbimfiuxr/';
} else if (Same($type[1], 'ascdbimfisu')) {
    $pResUrl = '../../2020/sale/decascdbimfisuxr/';
} else if (Same($type[1], 'ascdbiuisu')) {
    $pResUrl = '../../2020/sale/decascdbiuisuxr/';
} else if (Same($type[1], 'ascimfiuisu')) {
    $pResUrl = '../../2020/sale/decascimfiuisuxr/';
} else if (Same($type[1], 'dbimfiuisu')) {
    $pResUrl = '../../2020/sale/decdbimfiuisuxr/';
} else if (Same($type[1], 'ascdbisusd')) {
    $pResUrl = '../../2020/sale/decascdbisusdxr/';
} else if (Same($type[1], 'ascimfiusd')) {
    $pResUrl = '../../2020/sale/decascimfiusdxr/';
} else if (Same($type[1], 'ascimfisusd')) {
    $pResUrl = '../../2020/sale/decascimfisusdxr/';
}else if (Same($type[1], 'asciuisusd')) {
    $pResUrl = '../../2020/sale/decasciuisusdxr/';
}else if (Same($type[1], 'dbimfiusd')) {
    $pResUrl = '../../2020/sale/decdbimfiusdxr/';
}else if (Same($type[1], 'dbimfisusd')) {
    $pResUrl = '../../2020/sale/decdbimfisusdxr/';
}else if (Same($type[1], 'dbiuisusd')) {
    $pResUrl = '../../2020/sale/decdbiuisusdxr/';
}else if (Same($type[1], 'imfiuisusd')) {
    $pResUrl = '../../2020/sale/decimfiuisusdxr/';
}else if (Same($type[1], 'ascdbiusd')) {
    $pResUrl = '../../2020/sale/decascdbiusdxr/';
}else if (Same($type[1], 'ascdbimfsd')) {
    $pResUrl = '../../2020/sale/decascdbimfsdxr/';
}else {
    $pResUrl = '../../2020/sale/decascdbimfiuisuxr/';
}
$pRootUrl = '../../';
include $pResUrl.'index.php';