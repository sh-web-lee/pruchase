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
if (Same($type[1], 'ascdbimfiuisusd')) {
    $pResUrl = '../../2020/sale/decascdbimfiuisusdxr/';
}else
    $pResUrl = '../../2020/sale/decascdbimfiuisusdxr/';
$pRootUrl = '../../';
include $pResUrl.'index.php';