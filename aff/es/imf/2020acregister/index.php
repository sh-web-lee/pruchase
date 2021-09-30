<?php
	error_reporting(0);
	define('IObit', 'IObit');
	if (@!$include) {
	  $pResUrl = './';
	  $pRootUrl = '../../../../';
	}
	include $pRootUrl . 'include/common.inc.php';
	$refStr = 'es_imf-ac-register';
	if($_GET['to']=='db_ac_imf'){
		$refStr.='-'.$_GET['to'];
	}
	if(in_array($_GET['st'],array('asc_acimf'))){
		$refStr.='-'.$_GET['st'];
	}
	if (empty($_GET['ref'])) $_GET['ref'] = 'esaff_imf_2020acregister';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!"/>
<title>85% de descuento en IObit Malware Fighter</title>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
	<div class="wrapper">
		<a href="https://www.iobit.com" class="homelink">IObit</a>
		<dl>
			<dt></dt>
			<dd><img src="<?php echo $pResUrl; ?>images/star.png" alt=""/></dd>
			<dd>IObit Malware Fighter offers a lot in addition to its scanning capabilities.</dd>
		</dl>
	</div>
</div>
<div id="main">
	<div class="wrapper">
		<div class="shadow"></div>
		<div class="intro">
			<h1>IObit Malware Fighter PRO</h1>
			<h2>——Protección extra para la seguridad de su PC!</h2>
			<div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt=""/></div>
			<div class="discount">
				<h3><span>Oferta exclusiva</span><br />¡SÓLO para ususarios honorables de IObit!</h3>
				<div class="disprice">-85%</div>
				<div class="wprice">Sólo <em>11,99€</em> <del>79,93€</del><span>un año de suscripción / 1pc</span></div>
				<div class="btnarea">
					<a href="https://www.iobit.com/buy.php?product=esaff-imf7-ac&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf72020acregister')" class="checkbtn">Comprar ahora >></a>
					<span>100% GARANTÍA DE REEMBOLSO</span>
				</div>
			</div>
		</div>
		<div class="promise">            
			<div class="leftbox">
			  <h2><span>Las funciones destacadas</span></h2> 
			  <ul>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-av-engine.png" alt="" /></span>Evita que las amenazas infecten tu PC gracias al motor anti-virus de Bitdefender y al motor anti-malware de IObit.</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-threate-remove.png" alt="" /></span>Detecta y elimina más de 203,000,000 amenazas ocultas</li>
				<li class="three"><span><img src="<?php echo $pResUrl; ?>images/icon-browser-protect.png" alt="" /></span>Los archivos importantes como tus datos personales pueden ser mantenidos separados de los demás archivos y así nadie tendrá acceso a ellos sin permiso.  </li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-file-money-protect.png" alt="" /></span>Bloquea ransomware que intentan cifrar tus archivos importantes.</li>
				<li><span><img src="<?php echo getStaticUrl('images/icon-usb.png')?>" alt="" /></span>Evita que las amenazas ocultas en el disco USB dañen tu ordenador.</li>
			  </ul>
			</div>
			<div class="review">
				<span></span>You should already have antivirus protection and similar safeguards, but we strongly recommend regularly scanning your PC for infections with an antimalware tool. With automatic updates, a variety of system guards, and a Cloud Security option, IObit Malware Fighter offers a lot in addition to its scanning capabilities."<br />
				<div class="awpic"><img src="<?php echo $pResUrl; ?>images/download_com_logo.jpg" alt=""/><br />- download.com</div>
			</div>            
		</div>
		<div class="clear"></div>
		<div class="checkout">
			<div class="moneyback">
				Usted está totalmente protegido por nuestra 100% garantía de reembolso y verá una mejora significativa en el rendimiento de su PC DENTRO DE 60 DÍAS, o le enviaremos un reembolso completo. Sin preguntas hechas. <a href="https://www.iobit.com/buy.php?product=esaff-imf7-ac&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf72020acregister')">Comprar ahora</a>
			</div>
			<div class="btn">
				<a href="https://www.iobit.com/buy.php?product=esaff-imf7-ac&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'esaffimf72020acregister')" class="checkbtn">Comprar ahora >></a>
				<span>100% garantía de reembolso</span>
			</div>
		</div>
		<div class="clear"></div>
		<div class="awards"></div>
	</div>
</div>
<div id="footer">
	<div class="wrapper">
		© 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados 
	</div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
