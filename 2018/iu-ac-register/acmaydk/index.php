<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './'; 
  $pRootUrl = '../../../'; 
}
include $pRootUrl.'include/common.inc.php';
include $pRootUrl.'callback.php';
if(in_array($_GET['to'],array('db_ac_iu','cr_a','cr_b'))){
	$refStr='-'.$_GET['to'];
}else{
	$refStr='';
}
if(in_array($_GET['st'],array('asc_aciu','ascu_aciu'))){
	$refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>79% rabat på IObit Uninstaller PRO.</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Eksklusivt tilbud kun til værdsatte IObit-brugere og inviterede medlemmer. 
Det bedste afinstalleringsprogram som også fjerner vedhæftede og uønskede programmer og plu-ins.">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="head">
	<div class="wrapper">
		<a href="https://www.iobit.com/dk/index.php" target="_blank" class="logo">
			<img src="<?php echo getStaticUrl('images/logo.png')?>" alt=""/>
		</a>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt=""/></dt>
			<dd>Generelt leverer dette afinstallationsprogram, hvad det lover: Grundig afinstallation. -MAKEUSEOF</dd>
		</dl>
	</div>
</div>
<div id="main" class="wrapper">
	<div class="intro">
		<h1>IObit Uninstaller 8 PRO</h1>
		<h2>Det bedste afinstalleringsprogram som også fjerner vedhæftede og uønskede programmer og plu-ins med et enkelt klik</h2>
		<img class="boxshot" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
		<div class="discount">
			<h3><span>Eksklusivt tilbud </span>Kun for værdsatte IObit-brugere!</h3>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/discount.png')?>" alt="79% rabat"/></dt>
				<dd class="price"><img src="<?php echo getStaticUrl('images/price.png')?>" alt="Kun 129 kr 379 kr 1 år, 1 pc"/></dd>
				<dd><a href="https://www.iobit.com/buy.php?product=dk-iu8-ac&ref=dk_iu-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_ac_iu" title="CHECKOUT" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuac-dk');" class="checkbtn">KØB NU >></a></dd>
				<dd>100% tilbagebetalingsgaranti</dd>			
			</dl>
		</div>
	</div>
	<div class="promise">				
		<div class="leftbox">
			<h2>Højdepunkter</h2> 
			<ul>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-adremoving.png" alt=""></span>Opdager adware, uønskede værktøjslinjer og tredjepartsprogrammer, der kan være kommet sammen med andre programmer måske for at stjæle dine personlige oplysninger.</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-remove.png" alt=""></span>Afinstaller annoncebaserede og ondsindede plugins for at garantere en sikker og ren browseroplevelse.</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-uninstall.png" alt=""></span>Automatisk registrering og rydning af rester efter afinstallerede programmer også dem, der ikke bliver fjernet af andre afinstallere.</li>
				<li><span><img src="<?php echo getStaticUrl('images/icon-win10.png')?>" alt="" /></span>1 enkelt klik kan opgradere dine vigtige programmer, uden at du selv behøver lede efter opdateringerne.</li>
			</ul>
		</div>
		<div class="review">
			<span></span>
			"IObit Uninstaller er simpelthen det bedste Windows afinstalleringsværktøj, jeg har prøvet." "Hvis du har brug for et program, der lader dig afinstallere programmer fuldstændigt, grundigt og nemt, skal du starte IObit Uninstaller. Dette værktøj, der nu er kompatibelt med Windows 10, gør det til en leg at fjerne apps, inklusiv de filer, der ofte efterlades, når et program fjernes fra en pc, også de irriterende webbrowser-værktøjslinjer og plug-ins. Kort sagt, hvis du bruger en Windows-pc, skal du downloade IObit Uninstaller." -PC Magazine<br>	<img src="<?php echo $pResUrl; ?>images/pcmag-editor's-choice.jpg" alt=""/>
		</div>            
	</div>
	<div class="clear"></div>
	<div class="checkout">
		<div class="moneyback">
				Du er fuldt beskyttet af vores 100% tilbagebetalingsgaranti - hvis du ikke oplever en betydelig forbedring af din pc's ydeevne indenfor 60 dage, får du alle pengene tilbage. Ingen yderligere spørgsmål. <a href="https://www.iobit.com/buy.php?product=dk-iu8-ac&ref=dk_iu-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_ac_iu" title="CHECKOUT" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuac-dk');">Køb nu</a>
			</div>
			<div class="btn">
				<a href="https://www.iobit.com/buy.php?product=dk-iu8-ac&ref=dk_iu-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_ac_iu" title="CHECKOUT" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuac-dk');" title="CHECKOUT" class="checkbtn">KØB NU >></a>
				<span>100% tilbagebetalingsgaranti</span>
			</div>
	</div>
	<div class="clear"></div>
	<div class="awards"></div>
</div>
<div id="footer">
	Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved
</div>
</body>
</html>
