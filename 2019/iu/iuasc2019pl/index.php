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
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
if(preg_match('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1];
    $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>77% ZNIŻKI na Advanced SystemCare PRO i IObit Uninstaller PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="http://www.iobit.com/pl/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <h1>Szybszy, czystszy, bezpieczniejszy komputer!</h1>
    <h2><span class="hurry"><i>Nie przegap specjalnej promocji, zostało</i> </span> <span class="time countdown"><strong class="first">06 </strong><b>godz :</b> <strong>30 </strong>Min : <strong>29 </strong>Sek : <strong class="last">123</strong>Ms</span></h2>
    <div class="container clearfix">
      <dl class="left">
        <dt>IObit Uninstaller PRO</dt>
        <dd class="first"><img src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt=""/></dd>
        <dd><span><strong>79,90 </strong>zł</span> <del>119,90 zł</del></dd>
        <dd>
          <a class="buybtn small"
             href="http://www.iobit.com/buy.php?product=pl-iu113pc79&ref=pl_iu113pc79purchase1908iuasc<?php echo $refStr;?>&refs=pl_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PC1908iuasc-pl')">
            Aktywuj teraz
          </a>
        </dd>
        <dd class="last">
          <p class="no"> <img src="<?php echo $pResUrl; ?>images/redmark.png" alt=""> Do 300% szybszy Internet </p>
          <p class="no"> <img src="<?php echo $pResUrl; ?>images/redmark.png" alt=""> Do 200% szybszy komputer </p>
          <p class="no"> <img src="<?php echo $pResUrl; ?>images/redmark.png" alt=""> Zabezpieczona ochrona prywatności </p>
          <p class="no"> <img src="<?php echo $pResUrl; ?>images/redmark.png" alt=""> Głębsze czyszczenie i naprawa komputera </p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt=""><del>119,90 zł</del> Zaoszczędź 40 zł</p>
        </dd>
      </dl>
      <dl class="right">
        <dt>Advanced SystemCare PRO<span> IObit Uninstaller PRO</span></dt>
        <dd class="first"><img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt=""/></dd>
        <dd><span><strong>79,90 </strong>zł</span> <del>319,80 zł</del></dd>
        <dd>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=pl-asc14iu113pc79iuasc&ref=pl_asc14iu113pc79purchase1908iuasc<?php echo $refStr;?>&refs=pl_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase3PC1908iuasc-pl');">
            Aktywuj teraz
          </a>
        </dd>
        <dd class="last">
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Do 300% szybszy Internet</p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Do 200% szybszy komputer</p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Zabezpieczona ochrona prywatności</p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Głębsze czyszczenie i naprawa komputera</p>
          <p><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt=""><del>319,80 zł</del> Zaoszczędź <strong>239,90 zł</strong></p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->
<!-- product -->
<div class="product">
  <h2>Zoptymalizuj swój komputer, aby uzyskać jego najwyższą wydajność i usprawnić przeglądanie</h2>
  <div class="wrapper">
    <dl class="left">
      <dt><img src="<?php echo $pResUrl; ?>images/product-sale.png" alt=""><strong>Co możesz uzyskać aktywując ASC PRO </strong></dt>
      <dd><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Polepszenie pracy Internetu do 300%</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Podwojenie prędkości wolnego komputera*</dd>
      <dd class="lineheight22"><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Chroń dane osobowe przed naruszeniem prywatności i zapobiegaj infekcjom <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; komputera w czasie rzeczywistym</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/greenmark.png" alt="">Dogłębne czyszczenie w celu dostrojenia i rozwiązania problemów komputera</dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/product-free.png')?>" alt=""><strong>IObit Uninstaller PRO</strong></dt>
      <dd>
        <img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Dokładne i skuteczne usuwanie upartych programów
      </dd>
      <dd><img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Wykrywanie i odinstalowywanie pakietów i dołączonych wtyczek</dd>
      <dd class="lineheight22"><img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Szybsze i bezpieczniejsze surfowanie dzięki usuwaniu złośliwych <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; pasków narzędzi</dd>
      <dd class="lineheight22"><img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Całkowicie odinstaluj niepotrzebne programy i wtyczki przeglądarki</dd>
      <dd><img src="<?php echo $pResUrl; ?>images/blackmark.png" alt="">Aktualizacja ważnego oprogramowanie jednym kliknięciem</dd>

    </dl>
  </div>
</div>
<!-- end product -->
<!-- windows -->
<p class="wrapper windows"><img src="<?php echo $pResUrl; ?>images/windows.png" alt="">Kompatybilny z Windows 10, 8, 7, Vista, xp sp3</p>
<!-- end windows -->
<!-- foot-banner -->
<div class="foot-banner">
  <div class="wrapper">
    <h2>Zgarnij Advanced SystemCare PRO i IObit Uninstaller PRO TERAZ</h2>
    <img class="smail-gift" src="<?php echo getStaticUrl('images/bottom-asc.png')?>" alt=""/>
    <dl>
      <dt>TYLKO <strong>79,90 <b>zł</b></strong> <del>319,80 zł</del></dt>
      <dd>
        <a href="http://www.iobit.com/buy.php?product=pl-asc14iu113pc79iuasc&ref=pl_asc14iu113pc79purchase1908iuasc<?php echo $refStr;?>&refs=pl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase3PC1908iuasc-pl');"
           class="buybtn bottom">
          Aktywuj teraz
        </a>
      </dd>
      <dd><img src="<?php echo $pResUrl; ?>images/safe.png" alt="">60-dniowa gwarancja zwrotu pieniędzy na 100%</dd>
    </dl>
  </div>
</div>
<!-- end foot-banner -->
<!-- payments -->
<div class="paymanets wrapper clearfix">
  <dl class="left clearfix">
    <dt class="left"><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
    <dd class="left">
      <h3>Wypróbuj BEZ RYZYKA dzięki naszej 60-dniowej gwarancji <br> zwrotu pieniędzy</h3>
      <p>
        Jesteśmy przekonani, że aktywacja wersji PRO zapewni Ci wszechstronną <br>
        ochronę komputera za przystępną cenę!
      </p>
    </dd>
  </dl>
  <dl class="right">
    <dt>Akceptujemy</dt>
    <dd><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dd>
  </dl>
</div>
<!-- end payments -->

<!-- awards -->
<div class="awards wrapper">
  <h2>Nagradzany na całym świecie</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
</div>
<!-- end awards -->
<!-- annotation --->
<dl class="wrapper annotation">
  <dt>Uwaga:</dt>
  <dd>*.Takie programy promocyjne mogą ulec zmianie bez powiadomienia, według uznania producenta.</dd>
  <dd>*.Dane mogą się różnić w zależności od systemu lub komputera.</dd>
</dl>
<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Wszelkie prawa zastrzeżone</p>
<!-- end annotation -->

<script type="text/javascript">
  var countdown = function (countdown){
    getCycleCountdown();
    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout("countdown('"+ countdown +"')", 1);
  };
  function getCycleCountdown () {
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  }
  $(function(){
    countdown((".countdown strong"));
  });
</script>
</body>
</html>

