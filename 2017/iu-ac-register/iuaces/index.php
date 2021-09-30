<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if(in_array($_GET['to'],array('db_ac_iu','cr_a','cr_b'))){
	$refStr='-'.$_GET['to'];
}else{
	$refStr='';
}
if(in_array($_GET['st'],array('asc_aciu','ascu_aciu'))){
	$refStr.='-'.$_GET['st'];
}
include $pRootUrl . 'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>75% de descuento en IObit Uninstaller </title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Oferta exclusiva sólo para usuarios valorados y miembros invitados por IObit. ¡Desinstale los programas y plugins no deseados rápidamente y completamente!">
<meta property="og:description" content="Oferta exclusiva sólo para usuarios valorados y miembros invitados por IObit. ¡Desinstale los programas y plugins no deseados rápidamente y completamente!">
<meta property="og:url" content="http://purchase.iobit.com/es/iu-ac-register/index.php">
<meta property="og:image" content="http://purchase.iobit.com/es/iu-ac-register/images/snapshot.png">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="head">
	<div class="wrapper">
		<a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt=""/></dt>
			<dd>Esta herramienta de desinstalación fácil de usar e informativo limpieza, configura y optimiza su PC</dd>
		</dl>
	</div>
</div>
<div id="main" class="wrapper">
	<div class="intro">
		<h1>IObit Uninstaller 11 PRO</h1>
		<h2>——Desinstalador para eliminar bundleware, programas y plugins con un clic</h2>
		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="boxshot">
		<div class="discount">
			<h3><span>¡Oferta exclusiva! </span>¡sólo para usuarios valorados de IObit!</h3>
			<dl>
				<dt>-75%</dt>
				<dd class="price">Sólo <em>4,99€</em> <del>19,99€</del> <span>1 año / 1 PC</span></dd>
				<dd><a href="https://www.iobit.com/buy.php?product=es-iu11-ac&ref=es_iu-ac<?php echo $refStr;?>&refs=es_ac_iu" title="CHECKOUT" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuac-es');" class="checkbtn">Comprar ahora >></a></dd>
				<dd>100% 60-DÍA GARANTÍA DE REEMBOLSO</dd>			
			</dl>
		</div>
	</div>
	<div class="promise">				
		<div class="leftbox">
			<h2>Las funciones destacadas</h2> 
			<ul>
				<li>
					<span><img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""/></span>
					Detecta adware, barras de herramientas y programas de terceros no deseados junto con freeware que roban tus datos de privacidad.
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></span>
					Desinstala plugins maliciosos y basados en anuncios y elimina las notificaciones del navegador para garantizar una experiencia de navegación segura y limpia. 
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></span>
					Elimina por completo los programas con problemas de desinstalación y los restos con un solo clic.
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/></span>
					Monitoriza y graba todos los cambios que un programa ha hecho en tu sistema durante la instalación y los revierte por completo cuando el programa ya no es necesario.
				</li>
			</ul>
		</div>
		<div class="review">
			<span></span>
			Si necesita una aplicación para que desinstale fácilmente aplicaciones limpiamente y completamente, IObit Uninstaller es la mejor opción. La utilidad, compatible con Windows 10, elimina fácilmente aplicaciones, incluyendo los archivos quedados frecuentemente cuando un programa es eliminado desde PC y barras de herramientas y plugins molestos de navegador. En resumen, si usa un PC de Windows, debería descargar IObit Uninstaller."
			<img src="<?php echo $pResUrl; ?>images/pcmag-editor's-choice.jpg" alt=""/>
		</div>            
	</div>
	<div class="clear"></div>
	<div class="checkout">
		<div class="moneyback">
				Usted está totalmente protegido por nuestra 100% garantía de reembolso y verá una mejora significativa en el rendimiento de PC DENTRO DE 60 DÍAS , o le enviaremos un reembolso completo. Sin preguntas hechas. <a href="https://www.iobit.com/buy.php?product=es-iu11-ac&ref=es_iu-ac<?php echo $refStr;?>&refs=es_ac_iu" title="CHECKOUT" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuac-es');">Comprar ahora</a>
			</div>
			<div class="btn">
				<a href="https://www.iobit.com/buy.php?product=es-iu11-ac&ref=es_iu-ac<?php echo $refStr;?>&refs=es_ac_iu" title="CHECKOUT" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuac-es');" class="checkbtn">Comprar ahora >></a>
				<span>100% GARANTÍA DE REEMBOLSO</span>
			</div>
	</div>
	<div class="clear"></div>
	<div class="awards"></div>
</div>
<div id="footer">
	<a href="https://www.iobit.com" target="_blank"><img src="<?php echo $pResUrl; ?>images/smail-logo.png" alt=""></a> © 2005 - <?php echo date(Y)?> IObit. Todos los derechos reservados.
</div>
</body>
</html>
