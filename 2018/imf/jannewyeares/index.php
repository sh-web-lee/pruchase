<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;
$buyNum = number_format($buyNum);
$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
    'bdda','arda'))){
  $refStr.='-'.$_GET['ref'];
}
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Hasta 75% de descuento para IObit Malware Fighter PRO – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <div class="banner">
    <div class="header">
      <div class="wrapper">
        <a class="logo fl" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
        </a>
        <span class="fr"><img src="<?php echo getStaticUrl('images/imf-icon.png')?>" alt=""/> IObit Malware Fighter PRO</span>
      </div>
    </div>
    <div class="wrapper">
      <h1>OFERTA EXCLUSIVA</h1>
      <h2>Sólo <span> <strong>13</strong>h: <strong>13</strong>min: <strong>13</strong>s: <strong>13</strong>ms*</span> para proteger de ransomware con <span>75%</span> dto.</h2>
      <div class="content">
        <img class="img-box fl" src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="" />
        <div class="right-message fr">
          <h3>IObit Malware Fighter 6 PRO <span>3 PCs / 1 año </span></h3>
          <p>Sólo <strong>0.018€</strong> al día</p>
          <dl class="buy-message">
            <dt><strong>19<b>,99€</b></strong> <del>79,95€</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=es-imf63pc1999&ref=es_imf63pcpurchase1801<?php echo $refStr;?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-es')" class="buybtn">Comprar ahora</a></dd>
            <dd><img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Más de <?php echo $buyNum; ?> personas han comprado</dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
	<div class="payment">
    <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
	</div>
	<div class="imf-content wrapper clearfix">
		<h2>Protege PC de ransomware WannaCry, Petya / GoldenEye y Malware </h2>
    <img class="imf-box" src="<?php echo getStaticUrl('images/computer.png')?>" alt=""/>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
			<dd>No ataques de Ransomware Incluyendo WannaCry y Petya/GoldenEye</dd>
		</dl>
		<dl class="right">
			<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
			<dd>Nuevo motor de Bitdefender</dd>
		</dl> 
		<dl class="three">
			<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></dt>
			<dd>La Caja Fuerte mantiene archivos y carpetas importantes protegidos contra accesos No Autorizados &amp; Recientes Amenazas. </dd>
		</dl>
		<dl class="right">
			<dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
			<dd>Elimina automática rastros de navegación</dd>
		</dl>
    <p><a href="javascript: void(0);">Ver más sobre edición PRO >></a></p>
	</div>
  <div class="awrad wrapper">
    <h2>Recomendado y premiado por estos Medios</h2>
   <img src="<?php echo $pResUrl; ?>images/awrad.jpg" alt="">
  </div>
	<div class="review wrapper clearfix">
    <h2>Opiniones de usuarios</h2>
    <div>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/gelu-batir.png"></dt>
        <dd>
          Gelu Batir
          <p>“Escanea mi ordenador portátil sin afectar su rendimiento, he recomendado este producto a dos de mis amigos.”</p>
        </dd>
      </dl>
      <p>Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos.</p>
    </div>
    <div class="right">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/david-cassidy.png"></dt>
        <dd>
          David Cassidy
          <p>“El escaneo es mucho más rápido y fácil de usar.”</p>
        </dd>
      </dl>
      <p>Me gustaría dar las gracias a todo el personal de IObit por trabajar duro para proveernos los mejores programas. Es una gran actualización que ha hecho para sus usuarios. Es mucho más rápido en el escáner y fácil de usar. Las personas que realmente desean un buen programa de Malware y Antivirus que también tenga una buena relación calidad-precio no deben buscar más allá de IObit Malware Fighter. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter.</p>
    </div>
  </div>
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th colspan="2" class="text">Ver la comparación entre FREE y PRO:</th>
          <th class="space"></th>
          <th class="itema">IObit Malware Fighter <br> FREE</th>
          <th class="space"></th>
          <th class="itemb itempcs">IObit Malware Fighter <br> PRO</th> 
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
          <td class="virtue">Capacidad completa de Anti-Malware con motor único de "doble núcleo"  <sup>Mejorado</sup></td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
          <td class="virtue">Protección avanzada contra amenazas con motor de Antivirus de Bitdefender <sup>Mejorado</sup> </td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
          <td class="virtue">Archivos Específicos Protegidos contra Accesos no Autorizados en Caja Fuerte  <sup class="green">Novedad</sup></td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_17.png"></td>
          <td class="virtue">Protección del Disco contra Ataques Maliciosos con Protección MBR  <sup class="green">Novedad</sup></td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
          <td class="virtue">Nuevo Motor Anti-ransomware para bloquear Accesos no Autorizados	<sup class="green">Novedad</sup></td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
          <td class="virtue">Proteger su cámara contra el acceso no autorizado  <sup class="green">Novedad</sup> </td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
          <td class="virtue">Protección integral en tiempo real para mejor seguridad de PC <sup>Mejorado</sup></td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
          <td class="virtue">Prevenir la infección por virus transmitido por USB Disk</td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
          <td class="virtue">Detectar ejecución de proceso malicioso en memoria RAM</td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
          <td class="virtue">Limpieza automática de rastro de privacidad de navegación con Anti-Tracking de Navegador <sup>Mejorado</sup></td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
          <td class="virtue">Detectar amenazas analizando acción maliciosa</td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
          <td class="virtue">Funciona inteligentemente en segundo plano sin interrumpir</td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
          <td class="virtue">Actualización automática a la última versión</td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
          <td class="virtue">24/7 Soporte Técnico gratis</td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
          <td class="virtue">Función básica de Anti-Malware <sup>Mejorado</sup></td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
          <td class="virtue">Escaneo con la velocidad hasta un 130% más rápida para detectar amenazas activas rápidamente  <sup>Mejorado</sup></td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
          <td class="virtue">Escanear archivos de descarga y eliminar anuncios para mejorar protección <sup class="green">Novedad</sup></td>
          <td class="space"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
          <td class="space"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-mark.png" alt=""></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="bottom-buy">
    <div class="wrapper">
      <h2>Con sólo 0,018€ al día, garantiza su seguridad sin ransomware y malware</h2>
      <img class="imf-box fl" src="<?php echo getStaticUrl('images/bottom-imf-box.png')?>" alt="" />
      <dl class="buy-message fr">
        <dt><strong>19<b>,99€</b></strong> <del>79,95€</del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=es-imf63pc1999&ref=es_imf63pcpurchase1801<?php echo $refStr;?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-es')" class="buybtn">Comprar ahora</a></dd>
        <dd><img src="<?php echo $pResUrl; ?>images/bottom-peopel.png" alt=""> Más de <?php echo $buyNum; ?> personas han comprado</dd>
      </dl>
    </div>
  </div>
  

  <!-- footer start -->
  <div class="footer">
    <div class="visa wrapper clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/opswat.png" alt=""></dt>
        <dd><strong>Certificación</strong></dd>
        <dd>Certificado por expertos profesionales de OPSWAT</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd><strong>Garantía de reembolso</strong></dd>
        <dd>Si no está satisfecho en los primeros 60 <br> días, le devolveremos su dinero</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
        <dd><strong>Pago seguro</strong></dd>
        <dd>100% pago seguro para su pedido</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
        <dd><strong>Servicio al cliente</strong></dd>
        <dd>24/7 Soporte Técnico gratis</dd>
      </dl>
    </div>
    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Nota:</dt>
      <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento. </dd>
    </dl>
    <!-- annotation end -->
    <p>Copyright © 2005 - <?php echo date(Y)?> Todos los derechos reservados</p>
  </div>
  <!-- footer end -->
  <script src="<?php echo getStaticUrl('js/script.js') ?>"></script>
<script>  

$(document).ready(function() {
  $(".imf-content a").target($("#compare"),0);
  $(window).scrollWindow($(".banner .buybtn"),$('.imf-content dl'),("on"));
  countdown((".banner h2 span strong"));
});

</script>
</body>
</html>