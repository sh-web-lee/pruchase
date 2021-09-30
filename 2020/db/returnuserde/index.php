<?php
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

$cName='dedbau_re';
$reduceNum=empty($_COOKIE[$cName])?(ceil(microtime_float()*1000/20000)):$_COOKIE[$cName];
$buyNum = ceil(microtime_float()*1000/20000) - $reduceNum;
if($_GET['action']=='getBuyNum'){
  setcookie($cName, $reduceNum, time() + 3600 * 24 *30 *7);
  echo $buyNum;
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Sparen Sie bis zu 70% auf Driver Booster PRO, um alle Ihre Treiber immer auf dem neuesten Stand zu halten</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <!-- banner-title -->
    <div class="top-box">
      <img src="<?php echo $pResUrl;?>images/banner-db-box.png" alt="">
      <h1>DRIVER BOOSTER PRO</h1>
      <h2> Upgraden Sie jetzt auf PRO, um aktuelle Treiber und einen leistungsstarken PC zu haben!</h2>
    </div>
    <div class="content">

      <div class="box" data-name="pc3">
        <h3> 3 Monate</h3>
        <p><strong><b>5</b>,33€</strong> / Monat</p>
        <!-- buybtn -->
        <a href="https://www.iobit.com/buy.php?product=de-db83months1599&ref=de_db83months1599return<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasereturn-de')"
           class="buybtn border">
          Jetzt kaufen
        </a>
        <ul>
          <li>3 Monate, 3 PCs <strong>15,99€ </strong></li>
          <li class="border">Jetzt <strong class="red">15,99€ </strong></li>
          <li> <span>0€ sparen </span></li>
        </ul>
      </div>

      <div class="box twelve" data-name="pc12">
        <h3> 12 Monate</h3>
        <p><strong><b>2</b>,16€</strong> / Monat</p>
        <!-- buybtn -->
        <a href="https://www.iobit.com/buy.php?product=de-db83pc2599&ref=de_db812months2599return<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasereturn-de')"
           class="buybtn yellow">
          Jetzt kaufen
        </a>
        <ul>
          <li>12 Monate, 3 PCs <strong>89,99€ </strong></li>
          <li class="border">Rabatt <strong>70% </strong></li>
          <li class="border">Jetzt <strong class="red">25,99€ </strong></li>
          <li> <span>64€ sparen </span></li>
        </ul>
      </div>

      <div class="box sixmouth" data-name="pc6">
        <h3> 6 Monate</h3>
        <p><strong><b>3</b>,33€</strong> / Monat</p>
        <!-- buybtn -->
        <a href="https://www.iobit.com/buy.php?product=de-db86months1999&ref=de_db86months1999return<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasereturn-de')"
           class="buybtn border">
          Jetzt kaufen
        </a>
        <ul>
          <li>6 Monate, 3 PCs <strong>49,99€ </strong></li>
          <li class="border">Rabatt <strong>60% </strong></li>
          <li class="border">Jetzt <strong class="red">19,99€ </strong></li>
          <li> <span>30€ sparen </span></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment wrapper">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<!-- payment end -->

<!-- benefits start -->
<div class="benefits wrapper clearfix">
  <h2>Warum Driver Booster PRO wählen</h2>
  <div class="showcase">
    <div class="inner">
      <ul class="screenshot">
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
        </li>
      </ul>
    </div>
  </div>
  <div class="detail-list">
    <dl class="first">
      <dt><i class="benefits01"></i></dt>
      <dd>
        <h3>Größere Datenbank </h3>
        <p>
          Unterstützt mehr als 4.500.000 Treiber, die von Microsoft zertifiziert sind.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benefits02"></i></dt>
      <dd>
        <h3>100% sicher</h3>
        <p>
          Erstellt einen Systemwiederherstellung automatisch vor einem Treiberupdate
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benefits03"></i></dt>
      <dd>
        <h3>Maximale Spielleistung</h3>
        <p>
          Verbessert die Spielerlebnis mit aktuellen Game Ready-Treibern und Komponenten.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benefits04"></i></dt>
      <dd>
        <h3>Schneller Treiber-Download</h3>
        <p>
          Lädt Treiber mit der schnellsten Geschwindigkeit herunter und installiert sie automatisch
        </p>
      </dd>
    </dl>
  </div>
  <div class="clear"></div>
  <a class="intro fr" href="javascript: void(0)">Erfahren Sie mehr über die PRO-Version >></a>
</div>
<!-- benfits end -->


<!-- review start -->
<div class="review">
  <div class="wrapper clearfix">
    <h2>Von Experten und Benutzern geliebt und täglich benutzt</h2>
    <div class="media"><img src="<?php echo getStaticUrl('images/media.png')?>" alt=""/></div>
    <div class="usereview">
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"/>
          </div>
          <b>Bruce Ramsay</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"/>
          </div>
          <b>Hank Ewert</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"/>
          </div>
          <b>Loretta Harnarine</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/markus-thomas.png')?>" alt="Markus Thomas Geldermann"/>
          </div>
          <b>Markus Thomas Geldermann</b>
        </li>
      </ul>
      <div class="userbox">
        <dl class="one active">
          <dd>
            <p>
              “Die Pro-Version hält meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie enttäuscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. ASC gewinnt bei Produkt und Support.”
            </p>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              “Wie die meisten Menschen bin ich kein Computerexperte. Seit ich dieses großartige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als übertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus.”
            </p>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              “Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.“
            </p>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              “Was die Funktionalität & Leistung vom neuen Advanced SystemCare angeht, kann ich hier an diesem Punkt nur eine ganz klare Empfehlung aussprechen. Wer seinen PC optimal nutzen möchte, sollte sich das neue Advanced SystemCare am besten in der Pro-Version anschaffen.“
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->


<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <h2>Unterschiede zwischen der kostenlosen Version und der Pro-Version</h2>
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="itemb"><div>Driver Booster PRO <span></span></div></th>
      <th class="space"></th>
      <th class="itema"><div>Driver Booster FREE<span></span></div></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Scannt veraltete, fehlende & fehlerhafte Treiber automatisch </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Finden und updaten Sie veraltete Treiber mit nur einem Klick</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">	100% * Schnellere Downloadgeschwindigkeit </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Größere DatenBank, um mehr veraltete & seltene Treiber zu updaten </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Reduziert Einfrieren & Abstürze des Systems für bessere Leistung </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Aktualisiert Treiber automatisch beim Systemleerlauf </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Sichert Treiber automatisch vor Aktualisierungen </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Bietet Spielkomponenten für ein besseres Spielerlebnis </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <!-- ADD NEW -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Bietet die neuesten Game Ready Treiber früher </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <!-- AMEND OLD -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Sicheres Updaten mit AUSSCHLIEßLICH zertifizierten WHQL Treibern </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Automatische Updates auf die neuste Version </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Kostenloser technischer Support 24/7 </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons border"></td>
      <td class="virtue border"></td>
      <td class="itemb last"></td>
      <td class="space"></td>
      <td class="itema last"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison-table end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="showcase">
      <span class="img three-box"></span>
    </div>
    <ul>
      <li class="active twelve" data-name="pc12">
        <span>12 Monate, 3 PCs</span>
        <strong>Aktionspreis: 25,99€</strong>
      </li>
      <li class="sixmouth" data-name="pc6">
        <span>6 Monate, 3 PCs</span>
        <strong>Aktionspreis: 19,99€</strong>
      </li>
      <li data-name="pc3">
        <span>3 Monate, 3 PCs</span>
        <strong>Aktionspreis: 15,99€</strong>
      </li>
    </ul>
    <dl class="price-content">
      <dt>
        Nur <strong><b>2</b>,16€</strong> / Monat
      </dt>
      <dd>
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=de-db83pc2599&ref=de_db812months2599return<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasereturn-de')">
          <span>JETZT KAUFEN</span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Zufriedenheitsgarantie</h3></dd>
      <dd>60-Tage-Geld-zurück-Garantie</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><h3>Zahlungssicherheit</h3></dd>
      <dd>Ihre Zahlung ist 100% sicher</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
      <dd><h3>Schnelle Aktivierung</h3></dd>
      <dd>Kurz nach dem Kauf erhalten Sie <br> einen Aktivierungscode.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd><h3>Kundendienst</h3></dd>
      <dd>Kostenloser technischer Support 24/7</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Hinweis:</dt>
    <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
    <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
  </dl>
  <!-- copyright -->
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
</div>
<!-- footer end -->



<script src="<?php echo $pResUrl; ?>js/script.js"></script>
</body>
</html>