<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Oferta Especial para IObit Uninstaller PRO y Advanced SystemCare PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com" target="_blank">iobit</a>
    <h1>Oferta Exclusiva de Navidad</h1>
    <h2> <span></span> <strong>     ¡Oferta en tiempo limitado, rápido!  </strong> <strong>15</strong>h : <strong>15</strong>min : <strong>15</strong>s : <strong>15</strong>ms <sup>*</sup> <span></span></h2>
    <div class="container clearfix">
      <dl class="left">
        <dt>IObit Uninstaller PRO</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/banner-iu.png" alt="" class="box"></dd>
        <dd><strong>15,99€ </strong><del> 29,99€</del></dd> 
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=es-iu113pc1599&ref=es_iu113pcxiuascpurchase2108<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1801-es')"> Comprar ahora</a></dd>
        <dd class="last">
          <p class="no">Red hasta un 300% más rápido </p>
          <p class="no">PC hasta un 200% más rápido</p>
          <p class="no">Protección de privacidad segura</p>
          <p class="no">Limpieza y reparación de PC más profundas </p>
          <p><del>29,99€</del> ahorra 14€</p>
        </dd>
      </dl>
      <dl class="right">
        <dt>Advanced SystemCare PRO<span> IObit Uninstaller PRO</span></dt>
        <dd><img src="<?php echo $pResUrl; ?>images/banner-asc.png" alt="" class="box"></dd>
        <dd><strong>17,99€ </strong><del> 79,98€</del></dd>
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc14iu3pc1799&ref=es_asc14iu11purchase2108<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1801-es')">Comprar ahora</a></dd>
        <dd class="last">
          <p>Red hasta un 300% más rápido</p>
          <p>PC hasta un 200% más rápido</p>
          <p>Protección de privacidad segura</p>
          <p>Limpieza y reparación de PC más profundas </p>
          <p><del>79,98€   </del> Ahorra  <strong>61,99€ </strong> </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<div class="product">
  <h2>Optimice su PC para máximo rendimiento y consiga PC y navegador más limpios</h2>
  <div class="wrapper">
    <dl class="left">
      <dt><img src="<?php echo $pResUrl; ?>images/product-sale.png" alt=""><strong> Vea qué puede obtener activando ASC PRO</strong></dt>
      <dd>Acelera red hasta un 300% más rápido</dd>
      <dd>Duplica la velocidad de su PC lento*</dd>
      <dd>Protege los datos personales de brechas en la privacidad y previene <br> amenazas maliciosas en tiempo real.</dd>
      <dd>Limpieza profunda del PC para corregir problemas y afinar tu PC.</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo $pResUrl; ?>images/product-free.png" alt=""><strong>IObit Uninstaller PRO</strong></dt>
      <dd>Desinstala programas obstinados, Bundleware y Plugins incluidos</dd>
      <dd>Navegación más rápida y más segura mediante eliminación de barras de herramientas maliciosas </dd>
      <dd>Escanea y elimina programas con problemas de desinstalación y todos los restos</dd>
      <dd>Actualiza software importante con un clic  </dd>
    </dl>
  </div>
</div>
<dl class="awards wrapper">
  <dt>Recomendado y premiado por estos Medios</dt>
  <dd><img src="<?php echo $pResUrl; ?>images/awards.jpg" alt=""></dd>
</dl>
<p class="wrapper windows"><img src="<?php echo $pResUrl; ?>images/windows.png" alt="">Compatible con Windows 10, 8, 7, Vista, xp sp3</p>
<div class="foot-banner">
  <div class="wrapper">
    <h2><strong>Active ahora</strong> para conseguir ASC PRO y IObit Uninstaller PRO</h2>
    <img src="<?php echo $pResUrl; ?>images/bottom-asc.png" alt="" class="smail-gift">
    <dl>
      <dt>Sólo <strong> 17,99€</strong> <del>79,98€</del></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=es-asc14iu3pc1799&ref=es_asc14iu11purchase2108<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1801-es')" class="buybtn">Comprar ahora</a></dd>
      <dd><img src="<?php echo $pResUrl; ?>images/safe.png" alt="">100% garantía de devolución del dinero de 60 días</dd>
    </dl>
  </div>
</div>
<dl class="wrapper annotation">
  <dt>Nota:</dt>
  <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
  <dd>*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
</dl>
<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Todos los derechos reservados</p>
<script type="text/javascript">
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $('.banner h2 strong').eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s).end().eq(4).html(mi);
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();
</script>
</body>
</html>

