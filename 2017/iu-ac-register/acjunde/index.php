<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if($_GET['to']=='db_ac_iu'){
	$refStr='-'.$_GET['to'];
}else{
	$refStr='';
}
if(in_array($_GET['st'],array('asc_aciu','ascu_aciu'))){
	$refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>67% Rabatt auf IObit Uninstaller</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Exklusives Angebot nur für von IObit geschätzte Nutzer und eingeladene Mitglieder. Deinstalliere ungewollte Programme & Plug-ins umgehend & vollständig.">
<meta property="og:description" content="Exklusives Angebot nur für von IObit geschätzte Nutzer und eingeladene Mitglieder. Deinstalliere ungewollte Programme & Plug-ins umgehend & vollständig.">
<meta property="og:url" content="http://purchase.iobit.com/de/iu-ac-register/index.php">
<meta property="og:image" content="http://purchase.iobit.com/de/iu-ac-register/images/snapshot.png">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="head">
	<div class="wrapper">
		<a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt=""/></dt>
			<dd>Das einfach zu bedienende und informierende Deinstallationsprogramm reinigt, konfiguriert und optimiert ihren PC.</dd>
		</dl>
	</div>
</div>
<div id="main" class="wrapper">
	<div class="intro">
		<h1>IObit Uninstaller 6 PRO</h1>
		<h2>——leistungsstarke Deinstallation von hartnäckigen Programmen und Plug-ins</h2>
		<img src="<?php echo $pResUrl; ?>images/iu-box.jpg" alt="" class="boxshot">
		<div class="discount">
			<h3><span>Exklusivangebot </span>nur für IObit Valued User!</h3>
			<dl>
				<dt>67% Rabatt</dt>
				<dd class="price">Nur <em>7,99€</em> <del>23,90€</del> <span>für ein Jahresabo für 1 PC</span></dd>
				<dd>
					<a class="checkbtn" 
				     title="CHECKOUT"
				     href="http://www.iobit.com/buy.php?product=de-iu61pc799-ac&ref=de_iu-ac-register799<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_ac_iu"  
				     onclick="ga('send', 'event', 'iubuy', 'buy', 'iuacjun-de');">
				    	JETZT KAUFEN>>
				  </a>
				</dd>
				<dd>100% GELD-ZURÜCK GARANTIE</dd>			
			</dl>
		</div>
	</div>
	<div class="promise">				
		<div class="leftbox">
			<h2>HIGHLIGHTS</h2> 
			<ul>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-remove.png" alt=""></span>Effektiver, um hartnäckige Programme zu entfernen</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-adremoving.png" alt=""></span>Schnelleres & sicheres Surfen durch das Entfernen werbebasierter & bösartiger Plug-ins</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-uninstall.png" alt=""></span>Vollständige Deinstallation durch automatisches Entfernen von Überresten & Registry</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-win10.png" alt=""></span>Vollständiges Unterstützungsprogramm & eingebaute App-Entfernung für Windows 10</li>
			</ul>
		</div>
		<div class="review">
			<span></span>
			Falls du nach einem Programm suchst, das dich sauber und vollständig Anwendungen deinstallieren lässt, besorg dir IObit Uninstaller. Das nun auch mit Windows 10 kompatible Hilfsprogramm ermöglicht kinderleichtes Entfernen von ärgerlichen Webbrowser-Werkzeugleisten, Plug-ins und Apps, einschließlich verirrter Unterstützungsdateien, die oftmals bei der regulären Deinstallation zurückgelassen werden. Kurzgefasst, wenn du einen Windows PC nutzt, solltest du dir IObit Uninstaller downloaden.“
			<img src="<?php echo $pResUrl; ?>images/pcmag-editor's-choice.jpg" alt=""/>
		</div>            
	</div>
	<div class="clear"></div>
	<div class="checkout">
		<div class="moneyback">
				Sie sind vollständig durch unsere 100%ige Geld-Zurück-Garantie geschützt und werden innerhalb von 60 Tagen eine deutliche Verbesserung Ihrer PC-Performance erleben, andernfalls bekommen Sie Ihr Geld vollständig zurück. Ohne Kompromiss. 
				<a title="CHECKOUT" 
				   href="http://www.iobit.com/buy.php?product=de-iu61pc799-ac&ref=de_iu-ac-register799<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_ac_iu"  
				   onclick="ga('send', 'event', 'iubuy', 'buy', 'iuacjun-de');">
				  Jetzt kaufen
				</a>
			</div>
			<div class="btn">
				<a class="checkbtn" 
				   title="CHECKOUT" 
				   href="http://www.iobit.com/buy.php?product=de-iu61pc799-ac&ref=de_iu-ac-register799<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_ac_iu"  
				   onclick="ga('send', 'event', 'iubuy', 'buy', 'iuacjun-de');">
				  JETZT KAUFEN >>
				</a>
				<span>100% GELD-ZURÜCK GARANTIE</span>
			</div>
	</div>
	<div class="clear"></div>
	<div class="awards"></div>
</div>
<div id="footer">
	<a href="http://www.iobit.com" target="_blank"><img src="<?php echo $pResUrl; ?>images/smail-logo.png" alt=""></a> COPYRIGHT © 2005 - <?php echo date('Y')?> IOBIT. ALLE RECHTE VORBEHALTEN
</div>
</body>
</html>
