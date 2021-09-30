<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (empty($_GET['ref'])) $_GET['ref'] = 'deaff_sd6_2020acregister';

if($_GET['to']=='db_ac_sd'){
    $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acsd','ascu_acsd'))){
    $refStr.='-'.$_GET['st'];
}

?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Ultimate Performance for Your Hard Drive!"/>
  <title>85% Rabatt auf Smart Defrag PRO</title>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<div id="head">
  <div class="wrapper">
    <a href="https://www.iobit.com" class="homelink" target="_blank">Iobit</a>
    <dl>
      <dt></dt>
      <dd><img src="<?php echo getStaticUrl('images/star.png')?>" alt="" /></dd>
    </dl>
  </div>
</div>

<div id="main">
	<div class="wrapper">
    <div class="shadow"></div>
    <div class="intro">
      <h1>Smart Defrag 6 PRO</h1>
      <h2>Ultimative Performance für ihre Festplatte!</h2>
      <div class="boxshot"></div>
      <div class="discount">
        <h3><span>Exklusivangebot</span><br />Nur für IObit Valued User</h3>
        <div class="disprice">85%<span>Rabatt</span></div>
        <div class="wprice">Nur <em>9,99€</em> <del>66,60€</del><span>für ein Jahresabo für 1 PC</span></div>
        <div class="btnarea">
          <a class="checkbtn"
             href="https://www.iobit.com/buy.php?product=deaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'deaffsd62020acregister');">
            Jetzt kaufen >>
          </a>
          <span>100% GELD-ZURÜCK GARANTIE</span>
        </div>
      </div>
    </div>

    <div class="promise">
      <div class="leftbox">
        <h2><span>Einige Highlights</span></h2> 
        <ul>
          <li class="icon01">Neue Engine zur Festplattendefragmentierung für 100% sichere Festplattendefragmentierung</li>
          <li class="icon02">Vollständige Unterstützung für Defragmentierung auf Windows 10/8/8.1 Metro Apps</li>
          <li class="icon03">Maximale Festplatten Performance und höchste Datenzugriffsgeschwindigkeit</li>
          <li class="icon04">Garantierte Datensicherheit und Festplatten-Stabilität</li>
        </ul>
      </div>
      <div class="review">
        <span></span>One of the simplest ways to make sure your PC runs as efficiently as possible is to defragment your hard disk. <br />With several level of defragmentation, simple-to-use scheduler and extra offers, Smart Defrag is a great way to do it."<br />
        <div class="awpic">
          <img src="<?php echo getStaticUrl('images/pcworld_logo.jpg')?>" alt="" /><br />- PCWORLD.com
        </div>
      </div>            
    </div>

    <div class="clear"></div>

    <div class="checkout">
      <div class="moneyback">
        Sie sind vollständig durch unsere 100% Geld-zurück Garantie geschützt und werden innerhalb 60 Tagen eine deutliche Verbesserung Ihrer PC Performance erleben, andernfalls bekommen sie ihr Geld vollständig zurück. Ohne irgendwelche Fragen. 
        <a href="https://www.iobit.com/buy.php?product=deaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'deaffsd62020acregister');">
          Jetzt kaufen
        </a>
      </div>
      <div class="btn">
        <a title="CHECKOUT" 
           class="checkbtn" 
           href="https://www.iobit.com/buy.php?product=deaff-sd6-acak&ref=<?php echo $_GET['ref']; ?><?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'deaffsd62020acregister');">
          Jetzt kaufen >>
        </a>
        <span>100% GELD-ZURÜCK GARANTIE</span>
      </div>
    </div>
    <div class="clear"></div>
    <div class="awards"></div>
  </div>
</div>

<div id="footer">
	<div class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
