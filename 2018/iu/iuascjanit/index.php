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
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Promozione Limitata, sconti fino all’ 78% su IObit Uninstaller PRO e Advanced SystemCare PRO – Offerta limitata 2021 di IObit</title>
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
    <h1>IObit Uninstaller PRO SOTTOCOSTO LIMITATO!</h1>
    <h2> <span></span> <strong>   Affrettati, il Tempo sta Scadendo! </strong> <strong>15</strong>o : <strong>15</strong>m : <strong>15</strong>s : <strong>15</strong> <sup>*</sup> <span></span></h2>
    <div class="container clearfix">
      <dl class="left">
        <dt>IObit Uninstaller PRO</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/banner-iu.png" alt="" class="box"></dd>
        <dd><strong><b>€</b>15,99 </strong><del> €29,99</del></dd> 
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-iu113pc1599&ref=it_iu113pc1599iuascpurchase1711<?php echo $refStr;?>&refs=it_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase3PC1711-it')">
            ACQUISTA ORA
          </a>
        </dd>
        <dd class="last">
          <p class="no">Internet del 300% più Veloce</p>
          <p class="no">PC del 200% più Rapido</p>
          <p class="no">Privacy Online Assicurata </p>
          <p class="no">Pulizia e Riparazione Ottimali del PC</p>
          <p><del>€29,99</del> Risparmi €14</p>
        </dd>
      </dl>
      <dl class="right">
        <dt>Advanced SystemCare PRO<span> IObit Uninstaller PRO</span></dt>
        <dd><img src="<?php echo $pResUrl; ?>images/banner-asc.png" alt="" class="box"></dd>
        <dd><strong><b>€</b>17,99 </strong><del> €79,98</del></dd>
        <dd>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-iu11asc143pc1799&ref=it_iu11asc143pc1799iuascpurchase1711<?php echo $refStr;?>&refs=it_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase3pcxmas2020-it')">
            ACQUISTA ORA
          </a>
        </dd>
        <dd class="last">
          <p>Internet del 300% più Veloce</p>
          <p>PC del 200% più Rapido</p>
          <p>Privacy Online Assicurata </p>
          <p>Pulizia e Riparazione Ottimali del PC</p>
          <p><del>€79,98</del> Risparmi <strong>€61,99 </strong> </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<div class="product">
  <h2>Ottimizza il tuo PC alle massime prestazioni e pulisci a fondo PC e browser</h2>
  <div class="wrapper">
    <dl class="left">
      <dt><img src="<?php echo $pResUrl; ?>images/product-sale.png" alt=""><strong> Cosa puoi ottenere attivando ASC PRO</strong></dt>
      <dd>Accelera la navigazione in Internet del 300%</dd>
      <dd>Raddoppia la velocità del tuo PC lento*</dd>
      <dd>Mantieni i tuoi dati personali lontani dai programmi inaffidabili    </dd>
      <dd>Protegge il PC & la Privacy Online contro le Minacce Maligne e il Tracciamento delle tue attività    </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo $pResUrl; ?>images/product-free.png" alt=""><strong>IObit Uninstaller PRO</strong></dt>
      <dd>Rileva e disinstalla bundleware & plug-in preinstallati</dd>
      <dd>Navigazione online più sicura e veloce attraverso la rimozione <br>   delle barre degli strumenti maligne</dd>
      <dd>Scansiona e rimuove i programmi con problemi di <br> disinstallazione e tutti gli avanzi</dd>
      <dd>Aggiorna i programmi importanti con un solo clic   </dd>
    </dl>
  </div>
</div>
<dl class="awards wrapper">
  <dt>Raccomandato e Premiato dai seguenti media</dt>
  <dd><img src="<?php echo $pResUrl; ?>images/awards.jpg" alt=""></dd>
</dl>
<p class="wrapper windows"><img src="<?php echo $pResUrl; ?>images/windows.png" alt="">Compatibile con Windows 10, 8, 7, Vista, XP, sp3</p>
<div class="foot-banner">
  <div class="wrapper">
    <h2><strong>APPROFITTA SUBITO </strong> di ASC PRO & IObit Uninstaller PRO</h2>
    <img src="<?php echo $pResUrl; ?>images/bottom-asc.png" alt="" class="smail-gift">
    <dl>
      <dt>A SOLI <strong> €17,99</strong> <del>€79,98</del></dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=it-iu11asc143pc1799&ref=it_iu11asc143pc1799iuascpurchase1711<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase3pcxmas2020-it')"
           class="buybtn">
          ACQUISTA ORA
        </a>
      </dd>
      <dd><img src="<?php echo $pResUrl; ?>images/safe.png" alt="">100% rimborso garantito entro 60 giorni dall’acquisto</dd>
    </dl>
  </div>
</div>
<dl class="wrapper annotation">
  <dt>Note:</dt>
  <dd>*. I dati potrebbero variare in base al sistema o computer.</dd>
  <dd>*. Tali promozioni sono periodicamente soggette a modifiche senza preavviso, a nostra esclusiva discrezione. </dd>
</dl> 
<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Tutti i diritti riservati</p>
<script type="text/javascript">
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 02:17:00');
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

