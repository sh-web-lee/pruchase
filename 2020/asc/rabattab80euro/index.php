<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
    'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
    'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
    'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
    'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
    'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
    'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
    'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
    'invalidcode','asc_install','asc_p6','asc_p7','officialfree','officialpro',
    'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
    'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','crcur',
    'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
    'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3',
    'asc_promote13','asc_promote14','asc_promote15','asc_promote16','asc_promote17','asc_promote18')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Großer Rabatt auf Advanced SystemCare PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>DEAL DES TAGES</h1>
    <!-- countdown -->
    <h2>Heute Advanced SystemCare PRO stark reduziert!</h2>
    <!-- content -->
    <div class="content clearfix">
      <!-- 3pc -->
      <div class="panel small">
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/banner-asc.png'); ?>" alt="Advanced SystemCare PRO">
          </dt>
          <dd class="one">
            <h3>Advanced SystemCare 13 PRO</h3>
            <p>3 PCs, 1 Jahr</p>
          </dd>
          <dd class="two">
            <!-- price -->
            <p class="price"><b>24,99€</b> &nbsp; <del>UVP:59,99€</del> </p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-asc133pc2499&ref=de_asc133pcsingle2003<?php echo $refStr;?>&refs=de_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcsingle2003-de')">
              JETZT KAUFEN
            </a>
          </dd>
        </dl>
      </div>

      <!-- 3pc+iu -->
      <div class="panel large">
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/banner-asciu.png'); ?>" alt="Advanced SystemCare PRO + IObit Uninstaller PRO">
          </dt>
          <dd class="one">
            <h3>Advanced SystemCare 13 PRO + <b>Geschenk</b></h3>
            <p>3 PCs, 1 Jahr</p>
          </dd>
          <dd class="two">
            <!-- price -->
            <p class="price large"><b>26,99€</b> &nbsp; <del>UVP:84,99€</del> </p>
            <!-- buybtn -->
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=de-asc133pciu2699&ref=de_asc133pciubun2003<?php echo $refStr;?>&refs=de_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbun2003-de')">
              JETZT KAUFEN
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature -->
<div class="feature wrapper clearfix">
  <h2>Warum Advanced SystemCare PRO</h2>
  <ul>
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png');?>" alt=""></dt>
        <dd>
          <h3>Gründliche Systemreinigung</h3>
          <p>
            Bereinigt nutzlose und ungültige Registrierung, um mehr Speicherplatz zu <br>
            schaffen und die PC-Leistung zu verbessern.
          </p>
        </dd>
      </dl>
    </li>
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png');?>" alt=""></dt>
        <dd>
          <h3>Schnellere PC-Geschwindigkeit</h3>
          <p>
            Optimiert die Browser-Einstellungen und die Systemstarteinträge, um den <br>
            PC-Start und die Internetverbindung zu beschleunigen.
          </p>
        </dd>
      </dl>
    </li>
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png');?>" alt=""></dt>
        <dd>
          <h3>Besserer Privatsphärenschutz</h3>
          <p>
            Löscht Browserverläufe, verwischt den digitalen Fingerabrdruck und verhindert <br>unsicheren Zugriff auf persönliche Daten.
          </p>
        </dd>
      </dl>
    </li>
  </ul>
  <div class="clear"></div>
  <!-- intro -->
  <a class="intro" href="javascriipt: goTarget($('.comparison'))">
    Unterschiede zwischen den Versionen FREE und PRO >>
  </a>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <h2>Was kann der IObit Uninstaller PRO, den Sie kostenlos bekommen?</h2>
    <dl class="clearfix">
      <dt><img src="<?php echo getStaticUrl('images/gifts-iu.png');?>" alt=""></dt>
      <dd>
        <h3>IObit Uninstaller 9 PRO <span>3 PCs, 1 Jahr</span> <em>Gratis</em></h3>
        <h4>Jetzt <b>0€</b></h4>
        <ul>
          <li>Entfernt Programme gründlich.</li>
          <li>Bereinigt alle Überreste automatisch.</li>
          <li>Aktualisiert Programme einfach mit 1 Klick.</li>
        </ul>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review">
  <div class="wrapper clearfix">
    <h2>Redaktions-Tipp</h2>
    <h3>Millionen von Nutzern weltweit haben ihre Erfahrungen geteilt</h3>
    <!-- media-logo -->
    <img class="media-logo" src="<?php echo $pResUrl;?>images/media-logo.png" alt="">
    <!-- review-content -->
    <div class="review-content">
      <!-- head-portrait -->
      <ul class="clearfix">
        <li class="active"><img src="<?php echo $pResUrl;?>images/bruce-ramsay.png" alt="Bruce Ramsay"></li>
        <li><img src="<?php echo $pResUrl;?>images/hank-ewert.png" alt="Hank Ewert"></li>
        <li><img src="<?php echo $pResUrl;?>images/loretta-harnarine.png" alt="Loretta Harnarine"></li>
        <li><img src="<?php echo $pResUrl;?>images/markus-thomas.png" alt="Markus Thomas Geldermann"></li>
      </ul>
      <!-- line -->
      <span class="line">Bruce Ramsay</span>
      <!-- message -->
      <div class="review-message">
        <!-- Bruce Ramsay -->
        <p class="active">
          “Die Pro-Version hält meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie enttäuscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. ASC gewinnt bei Produkt und Support.”
        </p>
        <!-- Hank Ewert -->
        <p>
          “Wie die meisten Menschen bin ich kein Computerexperte. Seit ich dieses großartige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als übertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus.”
        </p>
        <!-- Loretta Harnarine -->
        <p>
          “Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.“
        </p>
        <!-- Markus Thomas Geldermann -->
        <p>
          “Was die Funktionalität & Leistung vom neuen Advanced SystemCare angeht, kann ich hier an diesem Punkt nur eine ganz klare Empfehlung aussprechen. Wer seinen PC optimal nutzen möchte, sollte sich das neue Advanced SystemCare am besten in der Pro-Version anschaffen.“
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison wrapper">
  <table>
    <thead>
    <tr>
      <th class="text">Mit der PRO-Version sparen Sie mehr Zeit und Mühe  </th>
      <th class="space7"></th>
      <th class="item-free">Free-Version</th>
      <th class="space3"></th>
      <th class="item-pro">Pro-version</th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="text">Grundlegende Systemreinigung und -Optimierung</td>
      <td class="space7"></td>
      <td class="item-free"><i class="yes"></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="text">Säubert Registries um Systemabstürze zu verhindern</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="text">Beendet unbenutzte Programme und Prozesse</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="text">Automatische Pflege für Ihren PC wie geplant</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="text">Bis zu 200% schnellerer Systemstart</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="text">Bis zu 300% höhere Internetgeschwindigkeit</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="text">Löscht Ihre Datenspuren automatisch</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="text">Verkleidet Ihren digitalen Fingerabdruck</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="text">Erkennt und blockiert Sicherheitslücken in Echtzeit</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="text">Schützt Ihre Daten vor anderen Programmen</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="text">Automatisches Update auf die neueste Version</td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    <!-- 12 -->
    <tr>
      <td class="text">Kostenloser technischer Support 24/7 </td>
      <td class="space7"></td>
      <td class="item-free"><i></i></td>
      <td class="space3"></td>
      <td class="item-pro"><i></i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
    <dd>
      <h4>Zufriedenheitsgarantie</h4>
      <p>60-Tage-Geld-zurück-Garantie</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/verified.png" alt=""></dt>
    <dd>
      <h4>Zahlungssicherheit</h4>
      <p>Ihre Zahlung ist 100% sicher</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/veloce.png" alt=""></dt>
    <dd>
      <h4>Schnelle Aktivierung</h4>
      <p>Kurz nach dem Kauf erhalten Sie <br> einen Aktivierungscode.</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/servizio.png" alt=""></dt>
    <dd>
      <h4>Kundendienst</h4>
      <p>Kostenloser technischer Support 24/7</p>
    </dd>
  </dl>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dd>Hinweis:</dd>
      <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
      <dd>*Daten können sich system- oder computerabhängig ändern.</dd>
    </dl>
    <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
</div>
<!-- end footer -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <img class="box" src="<?php echo getStaticUrl('images/float-asciu.png');?>" alt="">
    <h2>
      Heute Advanced SystemCare PRO stark reduziert!<br>
      <span>UVP: 84,99€</span>
      <span>Rabattpreis: <b>26,99€</b></span>
    </h2>
    <!-- buybtn -->
    <a class="buybtn yellow"
       href="https://www.iobit.com/buy.php?product=de-asc133pciu2699&ref=de_asc133pciubun2003<?php echo $refStr;?>&refs=de_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbun2003-de')">
      JETZT KAUFEN
    </a>
  </div>
</div>
<!-- end float -->

<!-- coupon -->
<div class="coupon">
  <div class="content">
    <h2>Extrarabatt auf bereits reduziertes Angebot</h2>
    <!-- box -->
    <img class="box" src="<?php echo getStaticUrl('images/coupon-asciu.png')?>" alt="">
    <!-- buybtn -->
    <a class="buybtn yellow"
       href="https://www.iobit.com/buy.php?product=de-asc133pciu2499&ref=de_asc133pciupop2003<?php echo $refStr;?>&refs=de_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpop2003-de')">
      Jetzt nur 24,99€
    </a>
    <!-- close -->
    <a class="close" href="javascript: closePop();">x</a>
  </div>
</div>
<!-- end coupon -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>