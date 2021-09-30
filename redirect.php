<?php
/**
 *  xascdb redirect
 */
error_reporting(0);
$redirectUrl="./error-document.php";
if(!empty($_GET['lan'])){
    $lan=$_GET['lan'];
    if(in_array($lan,array('fr','it','nl'))){
        $redirectUrl="http://www.iobit.com/buy.php?product=".$lan."-ascdb3pc2999&ref=".$lan."_xr_ascdb";
    }elseif($lan=='de'){
        $redirectUrl="http://www.iobit.com/buy.php?product=de-ascdb3pc&ref=de_xr_ascdb";
    }elseif($lan=='pt'){
        $redirectUrl="http://www.iobit.com/buy.php?product=pt-dbasc3pc&ref=pt_xr_ascdb";
    }elseif($lan=='sv'){
        $redirectUrl="http://www.iobit.com/buy.php?product=sv-asc11db53pc409&ref=sv_xr_ascdb";
    }elseif($lan=='es'){
        $redirectUrl="http://www.iobit.com/buy.php?product=es-asc11db53pc2999&ref=es_xr_ascdb";
    }elseif($lan=='es-ar'){
        $redirectUrl="http://www.iobit.com/buy.php?product=ar-ascdb3pc599&ref=ar_xr_ascdb";
    }elseif($lan=='es-mx'){
        $redirectUrl="http://www.iobit.com/buy.php?product=mx-ascdb3pc599&ref=mx_xr_ascdb";
    }
}
header("Location: $redirectUrl");