<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
    $refStr = 'de_imf-ac-register';
if($_GET['to']=='db_ac_imf'){
    $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acimf'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!"/>
<title>85% Rabatt auf IObit Malware Fighter</title>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
    <div class="wrapper">
        <a href="https://www.iobit.com/de/index.php " class="homelink">IObit</a>
        <dl>
            <dt></dt>
            <dd><img src="<?php echo getStaticUrl('images/star.png')?>" alt="" /></dd>
            <dd>IObit Malware Fighter offers a lot in addition to its scanning capabilities.</dd>
        </dl>
    </div>
</div>
<div id="main">
    <div class="wrapper">
        <div class="shadow"></div>
        <div class="intro">
            <h1>IObit Malware Fighter PRO</h1>
            <h2>Extra Schutz für Ihre PC-Sicherheit</h2>
            <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt=""/></div>
            <div class="discount">
                <h3><span>Exklusivangebot</span><br />Nur für IObit Valued User</h3>
                <div class="disprice">85%<span>Rabatt</span></div>
                <div class="wprice">Nur <em>5,99€</em> <del>39,99€</del><span>für ein Jahresabo für 1 PC</span></div>
                <div class="btnarea">
                    <a href="https://www.iobit.com/buy.php?product=de-imf7-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_ac_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfac-de');" class="checkbtn">Jetzt kaufen >></a>
                    <span>100% GELD-ZURÜCK GARANTIE</span>
                </div>
            </div>
        </div>
        <div class="promise">
            
            <div class="leftbox">
              <h2><span>Einige Highlights</span></h2> 
              <ul>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-av-engine.png')?>" alt="" /></span>
                    Erkennt über 203.000.000 Bedrohungen mit Bitdefender und IObit-Engine
                  </li>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-threate-remove.png')?>" alt="" /></span>
                    Verhindert Ransomware, Ihre wichtigen Dateien zu verschlüsseln
                  </li>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-browser-protect.png')?>" alt="" /></span>
                    Niemand kann ohne Passwort auf Ihre persönlichen Daten zugreifen
                  </li>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-usb.png')?>" alt="" /></span>
                    Verhindert die Bedrohungen, die sich auf einem USB-Stick verbergen und Ihren Computer beschädigen.
                  </li>
                  <li>
                    <span><img src="<?php echo getStaticUrl('images/icon-protect.png')?>" alt="" /></span>
                    Dreifachschutz-Engine und mehrere Sicherheitsfunktionen <br>schützen Ihren Computer in Echtzeit. 
                  </li>
              </ul>
             </div>
            <div class="review"><span></span>Sie sollten bereits Anti-Virus Schutz und ähnliche Schutzvorkehrungen haben, wir empfehlen ihnen jedoch ihren PC regelmäßig mit einer Anti-Malware Funktion zu scannen. Mit automatischen Updates, einer Vielzahl an Sicherheitsfunktionen und einer Cloud-Sicherheits-Option bietet IObit Malware Fighter zusätzlich zu seiner Scanfunktion viele extra Funktionen.<br /><div class="awpic"><img src="<?php echo getStaticUrl('images/download_com_logo.jpg')?>" alt=""/><br />
- download.com</div></div>            
        </div>
        <div class="clear"></div>
        <div class="checkout">
            <div class="moneyback">
                Sie sind vollständig durch unsere 100% Geld-zurück Garantie geschützt und werden innerhalb 60 Tagen eine deutliche Verbesserung Ihrer PC Performance erleben, andernfalls bekommen sie ihr Geld vollständig zurück. Ohne irgendwelche Fragen <a href="https://www.iobit.com/buy.php?product=de-imf7-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_ac_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfac-de');">Jetzt kaufen</a>
            </div>
            <div class="btn">
                <a href="https://www.iobit.com/buy.php?product=de-imf7-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_ac_imf" title="CHECKOUT" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfac');" class="checkbtn">Jetzt kaufen >></a>
                <span>100% GELD-ZURÜCK GARANTIE</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards"></div>
    </div>
</div>
<div id="footer">
    <div class="wrapper">
Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten
    </div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
