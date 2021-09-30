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
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>77% rabatt på IObit Uninstaller PRO & Advanced SystemCare PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">iobit</a>
    <h1>IObit Uninstaller PRO <!-- STORT JUL ERBJUDANDE --> Nytt År Specialerbjudande</h1>
    <h2> <span></span> <strong>   Tidsbegränsat specialerbjudande! </strong> <strong>15</strong>h : <strong>15</strong>min : <strong>15</strong>s : <strong>15</strong>ms <sup>*</sup> <span></span></h2>
    <div class="container clearfix">
      <dl class="left">
        <dt>IObit Uninstaller PRO</dt>
        <dd><img src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt="" class="box"></dd>
        <dd><strong>239 <span>kr</span></strong> <del>499 kr</del></dd> 
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-iu113pc239&ref=sv_iu113pc1912<?php echo $refStr;?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcpurchase1912-sv');"> köp Nu</a></dd>
        <dd class="last">
          <p class="no">Upp till 300% Snabbare Internet</p>
          <p class="no">Upp till 200% snabbare PC</p>
          <p class="no">Säkert integritetsskydd</p>
          <p class="no">Djupare PC-rengöring och reparation</p>
          <p><del>499 kr</del> Spara 260 kr</p>
        </dd>
      </dl>
      <dl class="right">
        <dt>Advanced SystemCare PRO<span> IObit Uninstaller PRO</span></dt>
        <dd><img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="" class="box"></dd>
        <dd><strong>269<span>kr</span></strong> <del>1 098 kr</del></dd>
        <dd><a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-iu11asc143pc269&ref=sv_iu11asc14purchase1912<?php echo $refStr;?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1912-sv');">köp Nu</a></dd>
        <dd class="last">
          <p>Upp till 300% Snabbare Internet</p>
          <p>Upp till 200% snabbare PC</p>
          <p>Säkert integritetsskydd</p>
          <p>Djupare PC-rengöring och reparation</p>
          <p><del>1 098 kr  </del>  <strong> Spara 829 kr</strong> </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<div class="product">
  <h2>Optimera din dator till bästa prestanda och få renare dator och webbläsare</h2>
  <div class="wrapper">
    <dl class="left">
      <dt><img src="<?php echo getStaticUrl('images/product-sale.png')?>" alt=""><strong> Vad du kan få genom att aktivera ASC PRO</strong></dt>
      <dd>Fördubblar datorns hastighet!*</dd>
      <dd>Skydda personuppgifter från Sekretessbrott och Förebygga Skadliga Infektioner i Realtid.</dd>
      <dd>Ökar din Internethastighet upp till 300%!*</dd>
      <dd>Djup rengöring på dator för att Fixa problem och ställa in din dator.</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/product-free.png')?>" alt=""><strong>IObit Uninstaller PRO</strong></dt>
      <dd>Mer Kraftfull för att Ta Bort Envisa Program</dd>
      <dd>Snabb och Säker Webbsurf och Avlägsning av Ad-baserade och Skadliga Plug-ins</dd>
      <dd>Skannar och tar bort program med avinstallationsproblem<br>och alla rester</dd>
      <dd>Fullt Programstöd och Inbyggd Programborttagning i Windows 10  </dd>
    </dl>
  </div>
</div>
<dl class="awards wrapper">
  <dt>Rekommenderas och är belönade av dessa medier</dt>
  <dd><img src="<?php echo $pResUrl; ?>images/awards.jpg" alt=""></dd>
</dl>
<p class="wrapper windows"><img src="<?php echo $pResUrl; ?>images/windows.png" alt="">Kompatibel med Windows 10, 8, 7, Vista, xp sp3</p>
<div class="foot-banner">
  <div class="wrapper">
    <h2><strong>Aktivera nu</strong> för att få Advanced SystemCare PRO och IObit Uninstaller PRO</h2>
    <img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="" class="smail-gift">
    <dl>
      <dt>Endast <strong>  269<span>kr</span></strong> <del>1 098 kr</del></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=sv-iu11asc143pc269&ref=sv_iu11asc14purchase1912<?php echo $refStr;?>&refs=sv_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1912-sv');" class="buybtn">köp Nu</a></dd>
      <dd><img src="<?php echo $pResUrl; ?>images/safe.png" alt="">100% 60-DAG PENGARNA TILLBAKA GARANTI</dd>
    </dl>
  </div>
</div>
<dl class="wrapper annotation">
  <dt>Notera:</dt>
  <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
  <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
</dl>
<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Alla Rättigheter Förbehållna</p>

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

