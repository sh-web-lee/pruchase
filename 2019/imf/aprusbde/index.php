<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='usbimf'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 98;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 51) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Bis zu 63% Rabatt auf IObit Malware Fighter PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/de/index.php" target="_blank" class="logo">IObit</a>
      <h1>Schützen Sie gleichzeitig ihren USB Stick und ihren Computer</h1>
      <div class="box three-pcs">
        <div class="img-box"></div>
        <p>Jetzt: <strong>21,99€</strong> <del>59,99€</del></p>
        <a href="https://www.iobit.com/buy.php?product=de-imf83pc2199&ref=de_imf3pcusbguard2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfusbbuy', 'buy', 'imfpurchase1904usb3pc-de');" class="buybtn"><span>Jetzt aktivieren</span></a>
        <div class="number">
          Nur noch 
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          Stück übrig   
        </div>
      </div>
      <div class="box one-pc">
        <div class="img-box"></div>
        <p>Jetzt: <strong>19,99€</strong> <del>39,99€</del></p>
        <a href="https://www.iobit.com/buy.php?product=de-imf81pc1999&ref=de_imf1pcusbguard2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfusbbuy', 'buy', 'imfpurchase1904usb1pc-de');" class="buybtn border"><span>Jetzt aktivieren</span></a>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- feature -->
  <div class="feature feature01 wrapper clearfix">
    <h2>WARUM BRAUCHEN <br>SIE EINEN USB SCHUTZ BEI DER VERBINDUNG MIT DEM COMPUTER?</h2>
    <div class="img-box"></div>
    <dl class="list01">
      <dt>Virusverbreitung über den USB Stick</dt>
      <dd>Um ihre Daten zu nutzen, haben Sie ihren USB Stick eventuell schon an vielen PCs genutzt. Daher besteht die Gefahr, dass Sie einen Virus von einem infizierten PC auf ihrem USB Stick haben. </dd>
    </dl>
    <dl class="list02">
      <dt>Ihr PC wurde infiziert</dt>
      <dd>Nachdem der infizierte USB Stick angeschlossen wurde, können nicht nur Daten verloren gehen, sondern ihr PC kann auch anfälliger für andere Gefahren werden. </dd>
    </dl>
  </div>
  <!-- feature -->
  <div class="feature feature02">
    <div class="wrapper">
      <h2>WIE DER USB GUARD IHNEN HILFT <br>USB UND PC SICHERHEIT ZU GARANTIERTEN</h2>
      <div class="img-box"></div>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>"> Automatischer Viren-Scan</dt>
        <dd>Scannt automatisch den eingesteckten USB Stick auf Viren. </dd>
      </dl>
      <dl class="list02">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>"> 1-Klick-Lösung</dt>
        <dd>Wenn eine Gefahr erkannt wurde, können Sie diese vor dem Verbinden mit einem Klick entfernen. </dd>
      </dl>
    </div>
  </div>
  <!-- benfits -->
  <div class="feature03">
    <h2>MEHR VORTEILE <br>DIE SIE VOM IOBIT MALWARE FIGHTER 7 PRO ERHALTEN</h2>
    <div class="message">
      <div class="wrapper">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>"></dt>
          <dd><strong>Die neueste Bitdefender Engine</strong></dd>
          <dd class="txt">209,000,000+ Sicherheitslücken können schnell entdeckt und entfernt werden.</dd>
          <dd><span>NUR PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>"></dt>
          <dd><strong>Stoppt Ransomware Angriffe</strong></dd>
          <dd class="txt">Verdächtige Vorgänge bei denen ihre Dateien entschlüsselt werden , werden gestoppt.</dd>
          <dd><span>NUR PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list05.png')?>"></dt>
          <dd><strong>Schützt Dateien mit einem Passwort</strong></dd>
          <dd class="txt">Hacker haben keinen Zugriff auf ihre passwortgeschützten Daten.</dd>
          <dd><span>NUR PRO</span></dd>
        </dl>
         <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/list06.png')?>"></dt>
          <dd><strong>Keine gefährlichen Verfolgungen</strong></dd>
          <dd class="txt">Onlineverläufe werden automatisch gelöscht.</dd>
          <dd><span>NUR PRO</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->

  <!-- giftbox start -->
  <div class="giftbox wrapper clearfix">
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
  <div class="review wrapper">
    <h2>Bewertungen</h2>
    <div class="clearfix">
      <dl class="first">
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

  <div class="bottom">
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Hinweis:</dt>
      <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
      <dd>*Daten können sich system- oder computerabhängig ändern.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>
  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"></div>
      <div class="message">
        <h2>Vollkommender Schutz für die ganze Familie</h2>
        <div class="number">
          Nur noch 
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          Stück übrig 
        </div>
      </div>
      <!-- buybtn -->
     <dl>
       <dt>Jetzt: <strong>21,99€</strong> <del>59,99€</del></dt>
       <dd><a href="https://www.iobit.com/buy.php?product=de-imf83pc2199&ref=de_imf3pcusbguard2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfusbbuy', 'buy', 'imfpurchase1904usb3pc-de');" class="buybtn"><span>Jetzt aktivieren</span></a></dd>
     </dl>
    </div>
  </div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>