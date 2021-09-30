<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
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
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Eksklusive 78% rabat på Advanced SystemCare PRO & IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <h1>IObit Uninstaller PRO FLASH SALE <!-- JULE Sale --></h1>
    <h2 class="countdown">Skynd dig, tiden løber ud! <b>01</b>H: <b>56</b>M: <b>16</b>S: <b>783</b> MS</h2>
    <div class="clearfix">
      <div class="offer">
        <h3>IObit Uninstaller PRO</h3>
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
        <div class="price">
          <p><strong>179 kr</strong> <del>399 kr</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-iu113pc179&ref=dk_iu113pc2008iuasc<?php echo $refStr;?>&aff=&refs=dk_purchase_iu" onclick="gga('send', 'event', 'asciubuy', 'buy', ' iupurchase-iu201908-dk');">
            Køb nu
          </a>
        </div>
        <ul>
          <li><i class="all-icons">×</i> Op til 300% hurtigere internet</li>
          <li><i class="all-icons">×</i> Op til 200% hurtigere PC</li>
          <li><i class="all-icons">×</i> Bedre privatbeskyttelse</li>
          <li><i class="all-icons">×</i> Grundigere PC-rensning og -reparation</li>
          <li class="last"><i class="all-icons">√</i> <span><del>399 kr</del>  spar 220 kr</span></li>
        </ul>
      </div>
      <div class="offer big">
        <h3><p>Advanced SystemCare PRO</p> IObit Uninstaller PRO</h3>
        <img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
        <div class="price">
          <p><strong>189 kr</strong> <del>848 kr</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-asc14iu113pc189&ref=dk_asc14iu113pc189purchase2008<?php echo $refStr;?>&aff=&refs=dk_purchase_iu" onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201904-dk');">
            Køb nu
          </a>
        </div>
        <ul>
          <li><i class="all-icons">×</i> Op til 300% hurtigere internet</li>
          <li><i class="all-icons">×</i> Op til 200% hurtigere PC</li>
          <li><i class="all-icons">×</i> Bedre privatbeskyttelse</li>
          <li><i class="all-icons">×</i> Grundigere PC-rensning og -reparation</li>
          <li><i class="all-icons">√</i> <span><del>848 kr</del>  spar <b>659 kr</b></span></li>
        </ul>
      </div>
    </div>
  </div>
</div>

<div class="intro">
  <h2>Bring din computer tilbage i topform og få en problemfri surfing- og pc-oplevelse.</h2>
  <div class="wrapper clearfix">
    <div class="list asc">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/product-sale.png')?>" alt=""/></dt>
        <dd>Hvad sker der, når du aktiverer ASC PRO?</dd>
      </dl>
      <ul>
        <li><i class="all-icons">×</i> Forøg internethastigheden med op til 300%.</li>
        <li><i class="all-icons">×</i> Gør din langsomme PC dobbelt så hurtig.</li>
        <li><i class="all-icons">×</i> Rens RAM og online private surfing-data automatisk.</li>
        <li><i class="all-icons">×</i> Ret alle PC-problemer med et klik.</li>
      </ul>
    </div>
    <div class="list iu">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/product-free.png')?>" alt=""/></dt>
        <dd>IObit Uninstaller PRO</dd>
      </dl>
      <ul>
        <li><i class="all-icons">×</i> Opdager og afinstallere bundled software og plug-ins.</li>
        <li><i class="all-icons">×</i> Fjerner ondsindede værktøjslinjer og giver hurtigere sikker surfing.</li>
        <li><i class="all-icons">×</i> Sletter automatisk rester, som ikke blev slettet af andre værktøjer.</li>
        <li><i class="all-icons">×</i> Opdaterer vigtige programmer med et klik.</li>
      </ul>
    </div>
  </div>
</div>

<div class="awards wrapper">
  <h2>Anbefalet af disse media</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  <p>
    <img src="<?php echo getStaticUrl('images/windows.png')?>" alt=""/>
    Kompatibel med Windows 10, 8, 7, Vista, xp
  </p>
</div>

<div class="footbuy">
  <div class="wrapper">
    <h2><span>Spar 78%</span> nu på ASC PRO & IObit Uninstaller PRO</h2>
    <div class="clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
      <div class="price fr">
        <p><strong>189 kr</strong> <del>848 kr</del></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-asc14iu113pc189&ref=dk_asc14iu113pc189purchase2008<?php echo $refStr;?>&aff=&refs=dk_purchase_iu" onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201904-dk');">
          Køb nu
        </a>
        <p><i class="all-icons"></i> 100% 60 dages pengene-retur-garanti</p>
      </div>
    </div>
  </div>
</div>

<dl class="wrapper annotation">
  <dt>Note：</dt>
  <dd>*. Data kan ændres alt efter system eller computer.</dd>
</dl>
<p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle rettigheder forbeholdes</p>
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
    countdown((".countdown b"));
  });
</script>
</body>
</html>

