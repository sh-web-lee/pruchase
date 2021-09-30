<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$viewNum=rand(96,125);
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date = $_GET['d'];
  $cName = 'desdoct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>2){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=2;
    }
  }else{
    $packsNum=97;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

$refStr='';
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Sparen Sie 75% auf Smart Defrag Pro und erhalten Sie zusätzlich Geschenke kostenlos!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <!-- title -->
    <div class="title"> 
      <h1>HAMMERPREIS 2019</h1>
      <p>Sparen Sie 75% auf Smart Defrag Pro und erhalten Sie zusätzlich Gratisgeschenke!</p>
    </div>
    <!-- content -->
    <div class="content clearfix">
      <!-- left-message -->
      <div class="left-message fl">
        <img src="<?php echo getStaticUrl('images/banner-sd.png')?>" alt="">
        <img class="db-reduce" src="<?php echo getStaticUrl('images/banner-sd-reduce.png')?>" alt="">
      </div>
      <!-- right-message -->
      <div class="right-message fr">
        <!-- title -->
        <h3>Täglich stehen 500 Angebote zur Verfügung</h3>
        <!-- surplus -->
        <p class="surplus">Nur noch <b class="one">0</b><b class="two">0</b><b class="three">0</b> Plätze übrig</p>
        <!-- progressbar -->
        <div class="progressbar">
          <span></span>
        </div>
        <!-- view -->
        <p class="view"><span class="viewNum"><?php echo $viewNum;?></span> Beobachter im Moment</p>
        <!-- price -->
        <p class="price"><strong>19</strong> <span><b>99€</b>,<del>79,97€</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-sd63pcamc1999&ref=de_sd6amcpurchase1901<?php echo $refStr;?>&refs=de_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201901-de')">
            JETZT SPAREN 
        </a>
        <!-- attention -->
        <p class="attention">SD (1 Jahr, 3 PCs) + AMC (1 Jahr, 1 Gerät)</p>
        <!-- moneyback -->
        <img class="moneyback" src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="">
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
</div>
<!-- payment end -->

<div class="intro wrapper">
  <h2>Automatische Festplattendefragmentierung für einen flotten PC</h2>
  <div class="cont clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
    <div class="fl right">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""/></dt> 
        <dd> 
          <h3>Schnellerer Systemstart </h3>
          <p>Mit dem "Bootzeit-Defrag", können die Dateien auf der HDD während des Systemstarts schnell defragmentiert werden.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""/></dt> 
        <dd> 
          <h3>Schneller Dateizugriff</h3>
          <p>Durch die Multithreading-Defragmentierung sowie verbesserte Defragmentierungsgeschwindigkeit, bietet Smart Defrag die beste Möglichkeit ihren PC zu verschnellern.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""/></dt> 
        <dd> 
          <h3>Ausgewählte Dateien komprimieren</h3>
          <p>Sie können ausgewählte Dateien & Festplatten ultraschnell komprimieren und formatieren</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""/></dt> 
        <dd> 
          <h3>Automatische defragmentierung</h3>
          <p>Wenn Sie am PC arbeiten oder spielen, werden Dateien und Festplatten intelligent und automatisch defragmentiert.</p>
          <a class="more" href="javascript: void(0);">Mehr über die Pro-Version >></a>
        </dd>
      </dl>
    </div>
  </div>
</div>

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Kostenlose und hilfreiche Weihnachtsgeschenke 2018</h2>
    <!-- PF -->
    <dl class="pf-box">
      <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
      <dd>
        <h3>Smart Defrag 6 PRO</h3>
        <del>29,99€</del><b>0<small>€</small></b>
        <p>Erhalten Sie zusätzlich Smart Defrag PRO für 2 PCs, um mehr Computer zu optimieren</p>
      </dd>
    </dl>
     <!-- IU -->
    <dl class="iu-box">
      <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="AMC Security PRO"/></dt>
      <dd>
        <h3>AMC Security PRO</h3>
        <del>19,99€</del><b>0<small>€</small></b>
        <p>Säubert, schützt und beschleunigt Ihr Android-Handy mit nur einem Klick</p>
      </dd>
    </dl>

    <!-- clear float -->
    <div class="clear"></div>
    <!-- words -->
    <h4>Exklusive Geschenke nur für kurze Zeit!</h4>
    <p class="surplus">Nur noch <b class="packsNum"><?php echo $packsNum ?></b> Plätze übrig</p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=de-sd63pcamc1999&ref=de_sd6amcpurchase1901<?php echo $refStr;?>&refs=de_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201901-de')">
        JETZT SPAREN 
    </a>
  </div>
</div>
<!-- gift-box end -->
  <!-- review start -->
  <div class="reviews wrapper clearfix">
    <div class="review media">
      <h2>Medienbewertungen</h2>
      <div class="container">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/chlp.png"></dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
            <p>Mit "Smart Defrag" holen Sie das Beste aus Ihrer Festplatte heraus und beschleunigen Ihren Computer.</p>
          </dd>
        </dl>
          <dl class="gray">
            <dt><img src="<?php echo getStaticUrl('images/computer-de.png')?>" alt=""/></dt>
            <dd>
              <img src="<?php echo $pResUrl; ?>images/five-stars.jpg" alt="">
              <p>Defragmentieren Sie die Festplatten Ihres Computers und verbessern so unter Umständen die Performance Ihres PCs.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/netzwelt.png"></dt>
            <dd>
              <img src="<?php echo $pResUrl; ?>images/fourandhalf-stars.jpg" alt="">
              <p>Es sorgt mit nur wenigen Klicks für eine Optimierung der Lese- und Schreibgeschwindigkeiten des Speicherplatzes.</p>
            </dd>
          </dl>
      </div>
    </div>
    <div class="review users">
        <h2>Userbewertungen</h2>
        <dl>
            <dt>Amnon</dt>
            <dd>
                <p>Treiber werden permanent defragmentiert, dann hat es den schnellen Zugriff und weniger Verschleiß.</p>
                <img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">
            </dd>
        </dl>
        <dl class="white">
            <dt>Edward Lee Ah Yen</dt>
            <dd>
                <p>Ich verwende Smart Defrag Pro, um meine Treiber zu analysieren, zu defragmentieren und mit der Spitzenleistung zu halten. </p>
                <img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">
            </dd>
        </dl>
        <dl>
            <dt>Hans</dt>
            <dd>
                <p>Seitdem ich diese fantastische Software nutze, laufen mein PC und mein Laptop wieder schneller.</p>
                <img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">
            </dd>
        </dl>
    </div>
  </div>
  <!-- end reviews -->
  <!-- compar-tab -->
  <div class="compar-tab wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2" class="text">Welche Vorteile bietet Ihnen die PRO Edition :</th>
        <th class="space"></td>
        <th class="item-free">Smart Defrag FREE</th>
        <th class="space"></td>
        <th class="item-pro">
          Smart Defrag PRO
          <p>1 Jahr, 1 PC + Geschenke</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-sd63pcamc1999&ref=de_sd6amcpurchase1901<?php echo $refStr;?>&refs=de_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201901-de')">
              JETZT SPAREN 
          </a>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-01.png"></td>
        <td class="text">Grundlegende Defragmentierung der Festplatte und Optimierung</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-02.png"></td>
        <td class="text">Bis zu 200% schnellere Datenzugriffsgeschwindigkeit</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-03.png"></td>
        <td class="text">Boot-Time-Defragmentierung für schnelleren PC-Start</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-04.png"></td>
        <td class="text">Defragmentiert fragmentierte Dateien automatisch und intelligent</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-05.png"></td>
        <td class="text">Angepasste Defragmentierungsmethode​n & Festplatten/Dateien können defragmentiert werden.</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-06.png"></td>
        <td class="text">Verwendung von DMA für eine verbesserte, schnellere & stabilere Übertragung von Dateien</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-07.png"></td>
        <td class="text">Keine Unterbrechungen beim Arbeiten oder Spielen im stillen Modus</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-08.png"></td>
        <td class="text">Top Spielerfahrung mit Spieloptimerung</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-09.png"></td>
        <td class="text">Planung der Defragmentierung unterstützt leere Defragmentierung</td>
        <td class="space"></td>
        <td class="item-free checked"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-10.png"></td>
        <td class="text">Automatisches Update auf die neueste Version</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-11.png"></td>
        <td class="text"> Kostenloser 24/7 technischer Support</td>
        <td class="space"></td>
        <td class="item-free"></td>
        <td class="space"></td>
        <td class="item-pro"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
      </tr>
      <tfoot>
        <tr>
        <th colspan="2"></th>
        <th class="space"></td>
        <th class="item-free">Smart Defrag FREE</th>
        <th class="space"></td>
        <th class="item-pro"> 
          <strong>19,99€</strong> <del>79,97€</del>
          <p>1 Jahr, 1 PC + Geschenke</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-sd63pcamc1999&ref=de_sd6amcpurchase1901<?php echo $refStr;?>&refs=de_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201901-de')">
              JETZT SPAREN 
          </a>
          <p class="gift">Nur <b class="packsNum"><?php echo $packsNum ?></b> Deals erhältlich!</p>
        </th>
      </tr>
      </tfoot>
      </tbody>
    </table>
  </div>
  <!-- end compar-tab -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="left-message">
      <img src="<?php echo getStaticUrl('images/bottom-sd.png')?>" alt=""/>
      <img class="db-reduce" src="<?php echo getStaticUrl('images/banner-sd-reduce.png')?>" alt=""/>
    </div>
    <dl class="price-content">
      <dt>
        <h3>Nur solange der Vorrat reicht! Nicht verpassen!</h3>
      </dt>
      <dd>
        <!-- price -->
        <p class="price"><strong>19</strong> <span><b>99€</b>,<del>79,97€</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-sd63pcamc1999&ref=de_sd6amcpurchase1901<?php echo $refStr;?>&refs=de_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201901-de')">
            JETZT SPAREN 
        </a>
        <p class="attention"><i></i> Nur noch <span class="packsNum">134</span> Deals erhältlich!</p>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!--  service start -->
  <div class="service wrapper"> 
   <dl>
     <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
     <dd><strong>Zufriedenheitsgarantie</strong></dd>
     <dd>60-Tage-Geld-zurück-Garantie</dd>
   </dl>
   <dl>
     <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
     <dd><strong>Zahlungssicherheit</strong></dd>
     <dd>Ihre Zahlung ist 100% sicher</dd>
   </dl>
   <dl>
     <dt><img src="<?php echo $pResUrl; ?>images/shop-box.png" alt=""></dt>
     <dd><strong>Schnelle Aktivierung</strong></dd>
     <dd>Den Aktivierungscode erhalten <br>Sie sofort nach dem Kauf.</dd>
   </dl>
   <dl class="servicion">
     <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
     <dd><strong>Kundendienst</strong></dd>
     <dd>Kostenloser technischer Support 24/7</dd>
   </dl>
  </div>
  <div clear="clear"></div>
  <!--  service end -->

  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Hinweis:</dt>
    <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
    <dd>*Daten können sich system- oder computerabhängig ändern.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>