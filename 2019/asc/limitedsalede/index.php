<?php
//一下为必须开头代码片段
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if (!empty($_GET['action']) && $_GET['action'] == 'getSalePacks') {
  $date = $_GET['d'];
  $c_name = 'deascli' . $date;
  $type = $_GET['type'];
  if (empty($_COOKIE[$c_name])) {
    $packsNum = "150*600";
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    $packs=$_COOKIE[$c_name];
    $packsArr=explode('*',$packs);
    $packs35=$packsArr[0];
    $packs30=$packsArr[1];

    if($type==1){
      if($packs35>0){
        $packs35--;
      }
    }else{
      if($packs30>3){
        $packs30--;
      }
    }
    $packsNum=$packs35.'*'.$packs30;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  }
  echo $packsNum;
  exit;
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
$refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
$refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
$refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Bis zu 75% Rabatt auf Advanced SystemCare PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>Top Angebote im Sale</h1>
      <p>Bis zu 75% reduziert, solange der Vorrat reicht </p>
    </div>
    <!-- panel -->
    <div class="panel">

      <!-- 1pc 40% off -->
      <div class="message left">
        <!-- box -->
        <img class="box" src="<?php echo $pResUrl;?>images/asc42.png" alt="Advanced SystemCare PRO">
        <!-- price -->
        <p class="price"><strong>22</strong>,99€ <del>39,99€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc131pc2299&ref=de_asc131pcsingle1909<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcsingle1909-de')">
          JETZT KAUFEN
        </a>
      </div>

      <!-- 1pc+pf 70% off -->
      <div class="message large middle">
        <!-- countdown -->
        <div class="countdown countdown1">
          <div class="scroll clearfix">
            <div class="scroll-tick"></div>
            <div class="scroll-tick"></div>
            <div class="scroll-tick"></div>
          </div>
          Stück übrig
        </div>
        <!-- box -->
        <img class="box" src="<?php echo $pResUrl;?>images/asc70.png" alt="Advanced SystemCare PRO + Protected Folder">
        <!-- price -->
        <p class="price"><strong>23</strong>,99€ <del>79,94€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc131pcpf2399&ref=de_asc131pcbundle1909<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcbundle1909-de')">
          JETZT KAUFEN
        </a>
        <!-- hint -->
        <span class="hint-icon"></span>
        <div class="hint-content">
          <p>0€ <del>39,95€</del> <small>(1 Jahr, 1 PC)</small></p>
          <ul>
            <li>
              <p>Passwortschutz für Ordner und Dateien unter Windows bieten.</p>
            </li>
            <li>
              <p>Daten vor Datenverlust, Viren, Adware und Spyware schützen.</p>
            </li>
          </ul>
        </div>
      </div>

      <!-- 3pcs+pf 75% off -->
      <div class="message large right">
        <!-- countdown -->
        <div class="countdown countdown2">
          <div class="scroll clearfix">
            <div class="scroll-tick"></div>
            <div class="scroll-tick"></div>
            <div class="scroll-tick"></div>
          </div>
          Stück übrig
        </div>
        <!-- box -->
        <img class="box" src="<?php echo $pResUrl;?>images/asc75.png" alt="Advanced SystemCare PRO + Protected Folder">
        <!-- price -->
        <p class="price"><strong>24</strong>,99€ <del>99,94€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc133pcpf2499&ref=de_asc133pcbundle1909<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundle1909-de')">
          JETZT KAUFEN
        </a>
        <!-- hint -->
        <span class="hint-icon"></span>
        <div class="hint-content">
          <p>0€ <del>39,95€</del> <small>(1 Jahr, 1 PC)</small></p>
          <ul>
            <li>
              <p>Passwortschutz für Ordner und Dateien unter Windows bieten.</p>
            </li>
            <li>
              <p>Daten vor Datenverlust, Viren, Adware und Spyware schützen.</p>
            </li>
          </ul>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- end banner -->

<!-- payments -->
<div class="payments">
  <div class="wrapper">
    <img src="<?php echo $pResUrl;?>images/payments.png" alt="">
  </div>
</div>
<!-- end payments -->

<!-- feature -->
<div class="feature wrapper clearfix">
  <!-- feature-title -->
  <h2>Das beste Tuning-Tool für Ihren PC</h2>
  <!-- 01 -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
    <dd>
      <h3>Gründliche Systemreinigung</h3>
      <p>
        Tiefenreinigung von nutzloser oder ungültiger <br>
        Registrierung, um Speicherplatz freizugeben <br>
        und PC-Leistung zu verbessern.
      </p>
    </dd>
  </dl>
  <!-- 02 -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
    <dd>
      <h3>Schnellere Internetgeschwindigkeit</h3>
      <p>
        Optimiert die Browser-Einstellungen, um <br>
        die Internetverbindung drastisch zu <br>
        beschleunigen.
      </p>
    </dd>
  </dl>
  <!-- 03 -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
    <dd>
      <h3>Besserer Privatsphärenschutz</h3>
      <p>
        Löscht Browserverläufe, verwischt den digitalen <br>
        Fingerabrdruck und verhindert unerlaubten <br>
        Zugrif auf persönliche Daten.
      </p>
    </dd>
  </dl>
  <!-- intro -->
  <a class="intro" href="javascript: void(0)">Detaillierten Vergleich ansehen >></a>
</div>
<!-- end feature -->

<!-- review -->
<div class="review">
  <div class="wrapper clearfix">
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
        <th class="text">Mit der PRO-Version sparen Sie mehr Zeit und Mühe	</th>
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
        <td class="text">Kostenloser technischer Support 24/7	</td>
        <td class="space7"></td>
        <td class="item-free"><i></i></td>
        <td class="space3"></td>
        <td class="item-pro"><i></i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- bottombuy-title -->
    <h2>Holen Sie sich heute unser Spezial-Angebot! STARK REDUZIERT!</h2>
    <!-- bottombuy-box -->
    <div class="box">
      <img src="<?php echo $pResUrl;?>images/bottombuy-asc.png" alt="Advanced SystemCare PRO">
    </div>
    <!-- bottombuy-selector -->
    <ul>
      <li class=""
          data-url="https://www.iobit.com/buy.php?product=de-asc131pc2299&ref=de_asc131pcsingle1909<?php echo $refStr;?>&refs=de_purchase_asc&tw=-8"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcsingle1909-de')"
          data-price="22"
          data-del="39,99€">
          <div>
            ASC 1 PC
            <strong><b>42%</b> Rabatt</strong>
            <span></span>
          </div>
      </li>
      <li class="active"
          data-url="https://www.iobit.com/buy.php?product=de-asc133pcpf2499&ref=de_asc133pcbundle1909<?php echo $refStr;?>&refs=de_purchase_asc&tw=-8"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundle1909-de')"
          data-price="24"
          data-del="99,94€">
        <div>
          ASC 3 PCs+PF <img src="<?php echo $pResUrl?>images/bottombuy-gratis.png" alt="GRATIS">
          <strong><b>75%</b> Rabatt</strong>
          <span></span>
        </div>
      </li>
      <li class=""
          data-url="https://www.iobit.com/buy.php?product=de-asc131pcpf2399&ref=de_asc131pcbundle1909<?php echo $refStr;?>&refs=de_purchase_asc&tw=-8"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcbundle1909-de')"
          data-price="23"
          data-del="79,94€">
        <div>
          ASC 1 PC+PF <img src="<?php echo $pResUrl?>images/bottombuy-gratis.png" alt="GRATIS">
          <strong><b>70%</b> Rabatt</strong>
          <span></span>
        </div>
      </li>
    </ul>
    <!-- bottombuy-detail -->
    <dl>
      <dd>
        <!-- price -->
        <p class="price"><strong>24</strong>,99€ <del>99,94€</del></p>
        <!-- 3pcs+pf 75%off buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc133pcpf2499&ref=de_asc133pcbundle1909<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundle1909-de')">
          JETZT KAUFEN
        </a>
        <!-- countdown -->
        <div class="bottombuy-countdown">
          <div class="countdown countdown3">
            <div class="scroll clearfix">
              <div class="scroll-tick"></div>
              <div class="scroll-tick"></div>
              <div class="scroll-tick"></div>
            </div>
            Stück übrig
          </div>
          <div class="countdown countdown6">
            <div class="scroll clearfix">
              <div class="scroll-tick"></div>
              <div class="scroll-tick"></div>
              <div class="scroll-tick"></div>
            </div>
            Stück übrig
          </div>
        </div>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

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
  <p>Nur noch <strong class="packsNum">10</strong> Stück verfügbar</p>
</div>
<!-- end float -->

<!-- top -->
<a class="top" href="javascript: void(0)">Top</a>
<!-- end top -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>