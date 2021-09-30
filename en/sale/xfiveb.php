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

if (Same($type[1], 'ascdbimfiuisu')) {
    $pResUrl = '../../2020/sale/decascdbimfiuisuxr/';
} else if (Same($type[1], 'ascdbimfiusd')) {
    $pResUrl = '../../2020/sale/decascdbimfiusdxr/';
} else if (Same($type[1], 'ascdbimfisusd')) {
    $pResUrl = '../../2020/sale/decascdbimfisusdxr/';
} else if (Same($type[1], 'ascdbiuisusd')) {
    $pResUrl = '../../2020/sale/decascdbiuisusdxr/';
} else if (Same($type[1], 'ascimfiuisusd')) {
    $pResUrl = '../../2020/sale/decascimfiuisusdxr/';
} else if (Same($type[1], 'dbimfiuisusd')) {
    $pResUrl = '../../2020/sale/decdbimfiuisusdxr/';
} else {
    $pResUrl = '../../2020/sale/decascdbimfiuisuxr/';
}
$pRootUrl = '../../';
include $pResUrl . 'index.php';