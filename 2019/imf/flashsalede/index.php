<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=76036125;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Bis zu 77% Rabatt auf IObit Malware Fighter 7 nur für kurze Zeit - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner bg">
  <div class="wrapper">
    <div class="clearfix">
      <a class="logo fl" href="https://www.iobit.com/de/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title fr">
        <h1>FLASH SALE</h1>
        <h3>Sparen Sie heute bis zu 77% und bekommen Sie Protected Folder zusätzlich geschenkt.</h3>
        <div class="countdown"><b>12</b> STD : <b>01</b> MIN : <b>55</b> SEK : <b class="last">982</b> MS*</div>
      </div>
    </div>
    <div class="clearfix">
      <div class="offer">
        <h2>47% RABATT</h2>
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
        <div class="price">
          <p>Originalpreis: </p>
          <p><del>39,95€</del></p>
          <p><strong>20<sup>99</sup></strong></p>
        </div>
        <div class="sign">
          <p><b>1 PC,</b> 1 Jahr</p>
          <a class="buybtn gray" 
             href="https://www.iobit.com/buy.php?product=de-imf71pc2099&ref=de_imf71pcflashsale1905<?php echo $refStr;?>&refs=de_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchasepop19051pc-de')">
            JETZT SPAREN
          </a>
        </div>
      </div>
      <div class="offer seven">
        <h2>77% RABATT</h2>
        <img src="<?php echo getStaticUrl('images/imf-gift-box.png')?>" alt=""/>
        <div class="point">
          <i class="all-icons"></i>
          <div class="text">
            <p><b>0€</b> <del>39,95€</del>  (1 Jahr, 1 PC)</p>
            <p>Passwortschutz für Ordner und Dateien unter Windows bieten.</p>
            <p>Daten vor Datenverlust, Viren, Adware und Spyware schützen.</p>
          </div>
        </div>
        <div class="price">
          <p>Originalpreis: </p>
          <p><del>99,90€</del></p>
          <p><strong>22<sup>99</sup></strong></p>
        </div>
        <div class="sign">
          <p><b>3 PCs,</b> 1 Jahr</p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=de-imf73pcpf2299&ref=de_imf73pcpfflashsale1905<?php echo $refStr;?>&refs=de_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase19053pc-de')">
            JETZT SPAREN  
          </a>
        </div>
      </div>
    </div>
    <p>Wenn Sie innerhalb der ersten 60 Tage nicht zufrieden sind, erstatten wir Ihnen Ihr Geld zurück.</p>
  </div>
</div>
<!-- banner end -->

<div class="wrapper">
  <!-- feature start -->
  <div class="feature">
    <h2>Was kann IObit Malware Fighter 7 PRO?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo $pResUrl; ?>images/computer.png" alt="">
      </div>
      <div class="right fr">
        <dl>
          <dt>1、</dt>
          <dd>Safe-Box schützt Ihre ausgesuchten Dateien gegen Ransomware-Angriffe.</dd>
        </dl>
        <dl class="two">
          <dt>2、</dt>
          <dd>Die Anti-Ransomware-Engine blockiert unerlaubte Zugriffe auf Ihr System.</dd>
        </dl>
        <dl class="three">
          <dt>3、</dt>
          <dd>Bitdefender Engine schützt Ihren PC vor den 200 Millionen Sicherheitsbedrohungen.</dd>
        </dl>
        <dl class="four">
          <dt>4、</dt>
          <dd>Schützt Ihre Kamera vor unbefugtem Zugriff.</dd>
        </dl>
        <a class="more" href="javascript:void(0)"> Mehr über die Pro-Version >></a>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- giftbox start -->
  <div class="giftbox clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/opswat.png')?>" alt=""/></div>
    <div class="right fl">
      <h2>
        OPSWAT ist ein weltweit tätiges Unternehmen für Cyber Security, das Sicherheitslösungen 
        für Unternehmen anbietet.
      </h2>
      <ul class="clearfix">
        <li><span>Produkt</span> <p>IObit Malware Fighter</p></li>
        <li><span>Zertifizierungsdatum</span> <p>05/31/16</p></li>
        <li><span>Zertifizierung</span> <p>Gold</p></li>
      </ul>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- review start -->
  <div class="review">
    <h2>Bewertungen</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir"></dt>
        <dd>
          <h3>Gelu Batir</h3>
          <p>Es scannt meinen Laptop, ohne seine Leistung zu beeinträchtigen, und ich habe auch zwei meiner Freunde dieses Produkt empfohlen.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/software.png" alt=""></dt>
        <dd>
          <h3>Software.Informer</h3>
          <p>Es kann eine breite Reihe von Spyware, Ransomware, Adware, Trojaner, Würmer, Keylogger und Bots erkennen.</p>
        </dd>
      </dl>
      <dl class="david">
        <dt><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy"></dt>
        <dd>
          <h3>David Cassidy</h3>
          <p>Es ist super schnell beim Scannen und einfach zu bedienen.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div id="compare" class="comparison">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Keine Kosten oder keiner Aufwand? Ihre Wahl. </th>
          <th class="itema">Free-Version</th>
          <td class="space"></td>
          <th class="itemb">PRO-Version</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Anti-Malware mit der neuesten IObit-Malware-Datenbank</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Erkennt die versteckten Bedrohungen schnell</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Scannt heruntergeladene Dateien</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Schützt Ihre wichtigen Dateien vor Ransomware</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">IObit-Dual-Core-Engine</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Erkennt 203.000.000 + Bedrohungen mit Bitdefender und IObit-Engine</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Niemand kann ohne Passwort Ihre Dateien besuchen</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Diskschutz beim Systemstart</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Schutz für Ihre Kamera</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Umfassender Echtzeitschutz</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Beendet Vireninfektion durch USB-Sticks</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">Erkennt bösartige Prozesse im RAM</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
          <td class="virtue">Löscht Ihre Internetspuren automatisch</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
          <td class="virtue">Läuft intelligent im Hintergrund</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt="" /></td>
          <td class="virtue">Automatische Updates</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_16.png')?>" alt="" /></td>
          <td class="virtue">Kostenloser technischer Support 24/7</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
</div>

<!-- footbuy start -->
<div class="footbuy bg">
  <div class="box clearfix">
    <div class="imgbox fl">
      <img class="_img one" src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      <div class="_img active">
        <img src="<?php echo getStaticUrl('images/imf-gift-box.png')?>" alt=""/>
        <div class="point">
          <i class="all-icons"></i>
          <div class="text">
            <p><b>0€</b> <del>39,95€</del>  (1 Jahr, 1 PC)</p>
            <p>Passwortschutz für Ordner und Dateien unter Windows bieten.</p>
            <p>Daten vor Datenverlust, Viren, Adware und Spyware schützen.</p>
          </div>
        </div>
      </div>
    </div>
    <ul class="fl">
      <li>
        <i class="all-icons"></i> 
        <span>1 PC <b>20,99</b> im Wert von 39,95</span>
        <a class="buybtn graytwo" 
           href="https://www.iobit.com/buy.php?product=de-imf71pc2099&ref=de_imf71pcflashsale1905<?php echo $refStr;?>&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchasepop19051pc-de')">
          JETZT SPAREN
        </a>
      </li>
      <li class="two active">
        <i class="all-icons"></i> 
        <span>3 PCs <b>22,99</b> im Wert von 99,90</span>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=de-imf73pcpf2299&ref=de_imf73pcpfflashsale1905<?php echo $refStr;?>&refs=de_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase19053pc-de')">
          JETZT SPAREN
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- footbuy end -->

<!-- footer start -->
<div class="wrapper">
  <dl class="annotation">
    <dt>Hinweis:</dt>
    <dd>
      *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
    </dd>
    <dd>*Daten können sich system- oder computerabhängig ändern.</dd>
  </dl>
  <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <div class="minbox">
    <p>Maximieren</p>
    <i class="all-icons min"></i>
  </div>
  <h2>Jetzt 1€ Rabatt sichern </h2>
  <ul class="clearfix">
    <li>
      <p>19,99</p>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=de-imf71pc1999&ref=de_imf71pcflashsale1905pop<?php echo $refStr;?>&refs=de_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchasepop19051pcpop-de')">
        <i class="all-icons"></i>
        1 PC
      </a>
    </li>
    <li>
      <p>21,99</p>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=de-imf73pc2199&ref=de_imf73pcpfflashsale1905pop<?php echo $refStr;?>&refs=de_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchasepop19053pcpop-de')">
        <i class="all-icons"></i>
        3 PCs
      </a>
    </li>
  </ul>
</div>
<!-- float end -->

<!-- mask start -->
<div class="mask"></div>
<div class="maxbox">
  <h2>Herzlichen Glückwunsch!</h2>
  <h3>
    <b>1€</b> Sie bekommen einen Gutschein geschenkt 
    <div class="point">
      <i class="all-icons"></i>
      <div class="text">
        <p>*Der Rabatt wird automatisch abgezogen</p>
        <p>*Es ist kein Gutscheincode erforderlich</p>
      </div>
    </div>
  </h3>
  <ul class="clearfix">
    <li>
      <span>1 Jahr, <b>1 PC</b></span>
      <p>Gutschein <b>-</b> <strong>1€</strong></p>
      <p>
        <a class="buybtn gray" 
           href="https://www.iobit.com/buy.php?product=de-imf71pc1999&ref=de_imf71pcflashsale1905pop<?php echo $refStr;?>&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchasepop19051pcpop-de')">
          Jetzt nur <b>19,99€</b>
        </a>
      </p>
    </li>
    <li class="last">
      <span>1 Jahr, <b>3 PCs</b></span>
      <p>Gutschein <b>-</b> <strong>1€</strong></p>
      <p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=de-imf73pc2199&ref=de_imf73pcpfflashsale1905pop<?php echo $refStr;?>&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchasepop19053pcpop-de')">
          Jetzt nur <b>21,99€</b>
        </a>
      </p>
    </li>
  </ul>
  <div class="minmax">
    <span class="first"><em>__</em><b>Minimieren</b></span>
    <span class="last"><em>×</em><b>Schließen</b></span>
  </div>
</div>
<!-- mask end -->


<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>