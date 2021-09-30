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
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title> 78% Rabatt auf Advanced SystemCare Pro & IObit Uninstaller Pro</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">iobit</a>
    <h1>IObit Uninstaller PRO Weihnachts-Sale</h1>
    <h2> <span></span> <strong>   Beeilen Sie sich, die Zeit läuft ab! </strong> <strong>15</strong>Std : <strong>15</strong>Min : <strong>15</strong>Sek : <strong>15</strong>MS <sup>*</sup> <span></span></h2>
    <div class="container clearfix">
      <dl class="left">
        <dt>IObit Uninstaller PRO</dt>
        <dd><img src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt="" class="box"></dd>
        <dd><strong>19,99€ </strong><del> 39,95€</del></dd> 
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=de-iu113pc1999&ref=de_iu113pcpurchase2108<?php echo $refStr;?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase202108-de')"> Jetzt kaufen</a></dd>
        <dd class="last">
          <p class="no">Bis zu 300% schnelleres Internet</p>
          <p class="no">Bis zu 200% schnellerer PC</p>
          <p class="no">Besserer Datenschutz</p>
          <p class="no">Tiefere PC-Reinigung & -Reparatur</p>
          <p><del>39,95€</del> 19,96€ sparen</p>
        </dd>
      </dl>
      <dl class="right">
        <dt>Advanced SystemCare PRO<span> IObit Uninstaller PRO</span></dt>
        <dd><img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="" class="box"></dd>
        <dd><strong>21,99€ </strong><del> 99,94€</del></dd>
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=de-iuasc3pc&ref=de_iu11asc14purchase2108<?php echo $refStr;?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpurchase202108-de')">Jetzt kaufen</a></dd>
        <dd class="last">
          <p>Bis zu 300% schnelleres Internet</p>
          <p>Bis zu 200% schnellerer PC</p>
          <p>Besserer Datenschutz</p>
          <p>Tiefere PC-Reinigung & -Reparatur</p>
          <p><del>99,94€  </del>  <strong>77,95€</strong> sparen </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<div class="product">
  <h2>Bringen Sie Ihren Rechner wieder in Topform & Ihre PC und Surfen werden sauberer</h2>
  <div class="wrapper">
    <dl class="left">
      <dt><img src="<?php echo getStaticUrl('images/product-sale.png')?>" alt=""><strong> Was passiert wenn Sie ASC PRO aktivieren</strong></dt>
      <dd>Das Internet um bis zu 300% beschleunigen</dd>
      <dd>Ihren langsamen PC zweimal schneller machen</dd>
      <dd>RAM und private Surfspuren automatisch reinigen</dd>
      <dd>Mit einem Klick alle PC-Probleme beheben</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/product-free.png')?>" alt=""><strong>IObit Uninstaller PRO</strong></dt>
      <dd>Erkennt und deinstalliert gebündelte Software & Plug-ins</dd>
      <dd>Entfernt bösartige Symbolleisten für schnelles & sicheres Surfen</dd>
      <dd>Löscht automatisch die Reste, die andere Tools nicht löschten</dd>
      <dd>Aktualisiert wichtige Programme mit einem Klick   </dd>
    </dl>
  </div>
</div>
<dl class="awards wrapper">
  <dt>Von diesen Medien empfohlen und ausgezeichnet</dt>
  <dd><img src="<?php echo $pResUrl; ?>images/awards.jpg" alt=""></dd>
</dl>
<p class="wrapper windows"><img src="<?php echo $pResUrl; ?>images/windows.png" alt="">Kompatibel mit Windows 10, 8, 7, Vista, xp sp3</p>
<div class="foot-banner">
  <div class="wrapper">
    <h2><strong>Jetzt sparen</strong> Sie auf ASC PRO & IObit Uninstaller PRO</h2>
    <img src="<?php echo getStaticUrl('images/bottom-asc.png')?>" alt="" class="smail-gift">
    <dl>
      <dt>Nur <strong> 21,99€</strong> <del>99,94€</del></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=de-iuasc3pc&ref=de_iu11asc14purchase2108<?php echo $refStr;?>" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpurchase202108-de')" class="buybtn">Jetzt kaufen</a></dd>
      <dd><img src="<?php echo $pResUrl; ?>images/safe.png" alt="">100% 60-TAGE GELD-ZURÜCK-GARANTIE</dd>
    </dl>
  </div>
</div>
<dl class="wrapper annotation">
  <dt>Notiz:</dt>
  <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
  <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
</dl>
<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Alle Rechte vorbehalten</p>
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

