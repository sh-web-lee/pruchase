<?php
//  初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  $buyNum = ceil(microtime_float()*1000/20000)-68457026;

  $packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title> Sparen Sie 68% auf Advanced SystemCare& haben Sie den zusätzlichen Schutz kostenlos!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function decreasingPacks(){
      $.ajax({
        type: "GET",
        url: "septsalede.php",
        data: "action=getPacks&r="+Math.random(),
        success: function(packs){
          $('.packs').html(packs);
          setTimeout('decreasingPacks()', 10000);
        }
      });
    }
    setTimeout('decreasingPacks()', 10000);
  </script>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!-- header -->
<div class="header">
  <div class="wrapper">
    <a href="http://www.iobit.com" target="_blank" class="logo"></a>
    <div class="godaddy">Sichere Website</div>
  </div>
</div>
<!-- header end -->
<!--banner-->
<div class="banner">
  <div class="wrapper">
    <h1>ASC 10 PRO kaufen & GRATIS AMC Security dazu erhalten</h1>
    <ul id="counttime-banner">
      <li>11<span>std :</span></li>
      <li>11<span>Min :</span></li>
      <li>11<span>Sek :</span></li>
      <li>11<span>Ms</span><sup>*</sup></li>
    </ul>
    <img src="<?php echo $pResUrl; ?>images/asc-box.png" alt="" class="asc-box">
    <div class="right">
      <dl class="one-pc" data-url="http://www.iobit.com/buy.php?product=de-asc101pc-aff">
        <dt>Advanced SystemCare PRO <span>1 PC, 1 Jahr</span></dt>
        <dd><span class="currt" ></span></dd>
      </dl>
      <dl class="three-pc active" data-url="http://www.iobit.com/buy.php?product=de-asc103pcamc-aff">
        <dt>Advanced SystemCare PRO <span>3 PCs, 1 Jahr</span></dt>
        <dd><i></i>+ Extra! <span>AMC Security </span>  <strong>0€</strong><del>19,99€</del></dd>
        <dd><span class="currt" ></span></dd>
      </dl>
      <div class="content">
        <p><span class="orgin"> <em>68% </em><span class="gray">sparen</span> </span> <strong>24,99€</strong> <del>79,98€</del></p>
        <a href="http://www.iobit.com/buy.php?product=de-asc103pcamc-aff" onclick="ga('send', 'event', 'ascbuy', 'buy', 'deaffasc2016septsalede');" class="buybtn">Jetzt kaufen</a>
      </div>
    </div>
  </div>
</div>
<!--banner end-->
<!-- main -->
<div class="main wrapper">
  <!-- intro -->
  <div class="intro clearfix">
    <h2>
      Sicheres und schnelleres Surfen mit einem neuen ASC 10!
      <span> Nur noch <strong class="packs"><?php echo $packsNum ?></strong> erhältlich!</span> 
    </h2>
    <img src="<?php echo $pResUrl; ?>images/win10.png">
    <img src="<?php echo $pResUrl; ?>images/asc-screen.jpg">
    <h3> Warum Advanced SystemCare 10</h3>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons01.jpg" alt=""></dt>
      <dd>
        <strong>PC schnell machen</strong>
         Erhöht die Internet-Geschwindigkeit um bis zu 300%! 
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons02.jpg" alt=""></dt>
      <dd>
        <strong>Freigeben</strong>
         Gibt RAM automatisch frei, um einen Hochleistungs-PC zu bekommen.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons03.jpg" alt=""></dt>
      <dd>
        <strong>Abstürze vermeiden</strong>
         Erweiterte Datenbank um Ihren PC zu bereinigen und zu optimieren.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons04.jpg" alt=""></dt>
      <dd>
        <strong>Sicheres Surfen</strong>
         Schützen Sie Ihre Privatsphäre und hinterlassen Sie keine Spuren 
      </dd>
    </dl>
    <div class="clear"></div>
  </div>
  <!-- intro end -->
  <!-- gift-description -->
  <div class="gift-description">
    <h2>Das Geschenk ist nur für Nutzer vom Advanced SystemCare PRO</h2>
    <dl class="clearfix">
      <dt><img src="<?php echo $pResUrl; ?>images/amc-box.png" alt=""></dt>
      <dd><strong>AMC Security</strong> (1 Gerät, 1 Jahr ) </dd>
      <dd>AMC Security im wert vom 19,99€ kostenlos dazu</dd>
    </dl>
    <h3>Die Funktionen von <strong>AMC Security</strong> <span>( Systemanforderung: Android 2.3 oder höher)</span></h3>
    <p><span class="first">Keine Sorgen um Bedrohungen für Mobilgeräte</span> <span>Großer Schutz für Zahlungen im Internet</span></p>
    <p><span class="first">Ihre wichtigen und persönlichen Dateien schützen </span><span>Beschleunigt Ihr Mobil um bis zu 200%</span></p>
  </div>
  <!-- gift-description end -->
  <div class="geld">
    <dl>
      <dt>Akzeptierte Zahlungsmittel</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/pament.jpg" alt=""></dd>
    </dl>
    <dl>
      <dt>Geld-zurück-Garantie</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/tage.png" alt=""></dd>
    </dl>
    <dl class="last">
      <dt>Zuverlässiger Service</dt>
      <dd>
        <p>Kostenloser 24/7 technischer Support</p>
        <p class="email">Live-Chat-Service</p>
      </dd>
    </dl>
  </div>
  <div class="diesen">
    <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
    <img src="<?php echo $pResUrl; ?>images/chlp.jpg" alt="">
  </div>
  <div class="media clearfix">
    <h2>Media Review</h2>
    <div class="message">
      <p><strong>Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte.</strong></p>
      <p>Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.</p>
    </div>
    <img src="<?php echo $pResUrl; ?>images/chlp-border.jpg" alt="">
  </div>
  <div class="user-review clearfix">
    <div>
      <h4>Bruce Ramsay</h4>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/bruce-ramsay.jpg" alt="">
        </dt>
        <dd>„Das Produkt an sich ist genau so großartig wie der dazugehörige Support. Ich machte es wie viele andere auch. Ich startete mit der Testversion und kaufte dann anschließend die Vollversion.“</dd>
      </dl>
    </div>
    <div class="right">
      <h4>Bob Bassett </h4>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="">
        </dt>
        <dd>„Um die Sicherheit und Leistung aufrechtzuerhalten, benötigten wir mehrere Stunden pro Woche. Aber mit Advanced System Care Pro hat man alles in einem.“</dd>
      </dl>
    </div>
    <div>
      <h4>Charles R. Widick </h4>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/charles-r-widick.jpg" alt="">
        </dt>
        <dd>„Als Computer-Reparatur-Techniker finde ich, dass man durch das Herunterladen und Scannen mit ASC die häufigsten Probleme lösen kann. Nach der Reparatur empfehle ich allen Kunden ein Pro-Paket zu kaufen. “</dd>
      </dl>
    </div>
    <div class="right">
      <h4>Gordon Griswold </h4>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/gordon-griswold.jpg" alt="">
        </dt>
        <dd>„Meiner Meinung nach ist ASC Pro von IObit die beste Wartungssoftware für Windows-Benutzer, da es hervorragende Werte und Funktionen in seinen Shareware- und Freewareversionen bietet. “</dd>
      </dl>
    </div>
  </div>
</div>
<!-- main end -->
<div class="between-buy">
  <div class="wrapper">
    <h2>Jetzt sparen Sie bis zu 68% auf ASC 10 PRO und erhalten Sie AMC Security gratis dazu!</h2>
    <p><img src="<?php echo $pResUrl; ?>images/people.png" alt="">von <?php echo "$buyNum";?> Menschen aktiviert</p>
    <div class="asc-amc active"></div>
    <ul>
      <li class="three-pc active" data-url="http://www.iobit.com/buy.php?product=de-asc103pcamc-aff"><i></i> <span class="name">ASC+AMC</span> <span class="pc">1 Jahr/ 3 PCs </span> <strong>24,99€</strong></li>
      <li class="one-pc" data-url="http://www.iobit.com/buy.php?product=de-asc101pc-aff"><i></i><span class="name">ASC</span> <span class="pc"> 1 Jahr/ 1 PC </span> <strong> 22,99€</strong></li>
    </ul>
    <a href="http://www.iobit.com/buy.php?product=de-asc103pcamc-aff" onclick="ga('send', 'event', 'ascbuy', 'buy', 'deaffasc2016septsalede');" class="buybtn">Jetzt kaufen</a>
  </div>
</div>
  
  <div class="wrapper geld-zurt">
    <img src="<?php echo $pResUrl; ?>images/tage.png" alt="">
    <p><strong>Geld-zurück-Garantie</strong></p>
    <p>Kaufen ohne Risiko!  Wir bieten Ihnen eine 60 Tage <br> Geld-zurück-Garantie, wenn Sie nicht zufrieden sein sollten.</p>
    <p><a href="http://www.iobit.com/de/refundpolicy.php">Weitere Information</a></p>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Notiz:</dt>
    <dd>*.Solche Werbeaktionen können von IObit nach eigenem Ermessen zu jeder Zeitund ohne vorheriger Ankündigung geändert werden.</dd>
    <dd>*.Daten können auf Grundlage verschiedener Systeme oder Computer variieren</dd>
  </dl>
  <!-- annotation end-->
<!-- footer -->
<div class="footer wrapper">
  Copyright © 2005 - 2016 IObit. Alle Rechte vorbehalten
</div>
<!-- footer end -->
<script type="text/javascript">
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    document.getElementById('counttime-banner').innerHTML = '<li>'+h+'<span>Std :</span></li><li>'+i+'<span>Min :</span></li><li>'+s+'<span>Sek :</span></li><li class="last">'+mi+'<span>Ms</span><sup>*</sup></li>';
    setTimeout('cycleCountdown()', 1);
  }
  $('.right dl,.between-buy ul li').click(function(){
    $(".one-pc").removeClass("active");
    $('.three-pc').removeClass("active");
    $(this).addClass('active').siblings().removeClass('active');
    if($(".one-pc").hasClass('active')){
      $('.one-pc').addClass('active');
      $('.content em').html("23%");
      $('.content strong').html("22,99€");
      $('.content del').html("29,99€");
      $(".asc-amc").removeClass("active");
    }
    else {
      $('.three-pc').addClass('active');
      $('.content em').html("68%");
      $('.content strong').html("24,99€");
      $('.content del').html("79,98€");
       $(".asc-amc").addClass("active");
    }
    $(".buybtn").attr("href", $(this).attr('data-url'));
  });

  cycleCountdown();
    function Totarget(target,m){
      var toTop=target.offset().top-m;
      $("html,body").animate({
        scrollTop:toTop
      },"slow")
    }
</script>
</body>
</html>

