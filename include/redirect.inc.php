<?php
/**
 *  页面的部分地区跳转
 */
$lang = $_SERVER['HTTP_ACCEPT_LANGUAGE'];
$langArr = explode(",",$lang);
$userLang = $langArr[0];
$requestUri=$_SERVER['REQUEST_URI'];
//es-mx redirect
if($userLang=='es-MX'){
    if(preg_match('/^\/([a-zA-Z]{2})\/([a-zA-Z]*)\//',$requestUri,$matches)){
        if((in_array($matches[2],array('asc','db','ascu','sd','iu')))&&($matches[1]=='en')){
            $redirectPath=preg_replace('/^\/([a-zA-Z]{2})\//','/es-mx/',$requestUri);
            header('location:http://purchase.iobit.com'.$redirectPath);
            exit();
        }
    }
}
//iu redirect
if(!empty($_GET['to'])&&($_GET['to']=='iuasc')) {
    $iuRedirectLan = array('de', 'fr', 'nl', 'it', 'es', 'pt', 'es-ar', 'es-mx', 'sv');
    if (preg_match('/^\/([a-zA-Z\-]{2,5})\/iu\/index\.php/', $requestUri, $matches)) {
        if (in_array($matches[1], $iuRedirectLan)) {
            $redirectPath = preg_replace('/(^\/[a-zA-Z\-]{2,5}\/iu\/)(index\.php)(.*)/', '$1xiuasc.php', $requestUri);
            header('location:http://purchase.iobit.com' . $redirectPath);
            exit();
        }
    }
}