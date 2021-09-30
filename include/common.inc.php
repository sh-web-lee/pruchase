<?php
//	[调用检测] 检测其他程序是否能调用该文件
	if(!defined('IObit')) exit('Access Denied');

//	[运行时间]
	function microtimeFloat(){
	    list($usec, $sec) = explode(" ", microtime());
	    return ((float)$usec + (float)$sec);
	}
	$gConfig['startTime'] = microtimeFloat();
	
//	[系统根目录]
	$rootPath = str_replace("\\", "/", substr(dirname(__FILE__), 0, -7));
	
//	[载入公共配置]
	require $rootPath.'include/javascript.inc.php';
	require $rootPath.'include/public.func.php';
	require $rootPath.'include/redirect.inc.php';

//	[过滤变量]
	foreach($_GET AS $key => $value){
		$_GET[$key] = htmlspecialchars($value, ENT_QUOTES);
	}
	foreach($_POST AS $key => $value){
		$_POST[$key] = htmlspecialchars($value, ENT_QUOTES);
	}
//  [调用静态文件]
	function getStaticUrl($path){
		global $pResUrl;
		$path=$pResUrl.$path;
		return $path.'?t='.filemtime($path);
	}

//  [全站body添加google标签]
	ob_start('contentReplace');
	function contentReplace($buffer){
		$googleTag=<<< EOF
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-NRGSZ26"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
EOF;
		$content=preg_replace('/<\/head>[\r|\n|\s]*<body>/', '</head><body>'.$googleTag,$buffer);
		$content=preg_replace('/http:\/\/codes\.iobit\.com\/js\/TweenMax\.min\.js/', 'https://purchase.iobit.com/tpl/js/TweenMax.min.js',$content);

		//  [取消全站edge下google字体的调用]
		if(isEdge()){
			$content=preg_replace('/<link href=("|\')https:\/\/fonts\.googleapis\.com\/css.*>/isU','',$content);
		}
		return $content;
	}
?>