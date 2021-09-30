<?php
/**
 * redirect page
 */
header('HTTP/1.1 301 Moved Permanently');
header("location:index.php".(empty($_SERVER["QUERY_STRING"])?'':('?'.$_SERVER["QUERY_STRING"])));