<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
$refStr = 'de_imf-ac-register999';
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
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Extra Protection for Your PC Security!"/>
  <title>75% Rabatt auf IObit Malware Fighter</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <div id="head">
    <div class="wrapper">
      <a href="http://www.iobit.com" class="homelink" target="_blank">IObit</a>
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
        <div class="boxshot"></div>
        <div class="discount">
          <h3><span>Exklusivangebot</span><br />Nur für IObit Valued User</h3>
          <div class="disprice">75%<span>Rabatt</span></div>
          <div class="wprice">Nur <em>9,99€</em> <del>39,99€</del><span>für ein Jahresabo für 1 PC</span></div>
          <div class="btnarea">
            <a class="checkbtn"
               href="http://www.iobit.com/buy.php?product=de-imf51pc999-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_ac_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfacjun-de')">
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
            <li>
              <span><img src="<?php echo getStaticUrl('images/icon-av-engine.png')?>" alt="" /></span>
              Entfernt Malware gründlich mit Anti-Virus-Engine von Bitdefender
            </li>
            <li>
              <span><img src="<?php echo getStaticUrl('images/icon-threate-remove.png')?>" alt="" /></span>
              Erkennt und entfernt über 200 Millionen versteckte Bedrohungen
            </li>
            <li>
              <span><img src="<?php echo getStaticUrl('images/icon-browser-protect.png')?>" alt="" /></span>
              Automatische Bereinigung der Spuren im Internet mit der Anti Browser Verfolgung
            </li>
            <li>
              <span><img src="<?php echo getStaticUrl('images/icon-file-money-protect.png')?>" alt="" /></span>
              Verhindert alle Ransomware-Angriffe, erkennt WannaCry in Echtzeit & entfernt die restlos
            </li>
            <li>
              <span><img src="<?php echo getStaticUrl('images/icon-camera-protect.png')?>" alt="" /></span>
              Schützt Ihre Kamera vor unbefugtem Zugriff
            </li>
          </ul>
        </div>
        <div class="review">
          <span></span>You should already have antivirus protection and similar safeguards, but we strongly recommend regularly scanning your PC for infections with an antimalware tool. With automatic updates, a variety of system guards, and a Cloud Security option, IObit Malware Fighter offers a lot in addition to its scanning capabilities."<br />
          <div class="awpic"><img src="images/download_com_logo.jpg" alt=""/><br />- download.com</div>
        </div>            
      </div>
      <div class="clear"></div>

      <div class="checkout">
        <div class="moneyback">
          Sie sind vollständig durch unsere 100% Geld-zurück Garantie geschützt und werden innerhalb 60 Tagen eine deutliche Verbesserung Ihrer PC Performance erleben, andernfalls bekommen sie ihr Geld vollständig zurück. Ohne irgendwelche Fragen 
          <a href="http://www.iobit.com/buy.php?product=de-imf51pc999-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_ac_imf"
             oonclick="ga('send', 'event', 'imfbuy', 'buy', 'imfacjun-de')">
             Jetzt kaufen
          </a>
        </div>
        <div class="btn">
          <a class="checkbtn"
             href="http://www.iobit.com/buy.php?product=de-imf51pc999-ac&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_ac_imf"
             title="CHECKOUT" 
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfacjun-de')">
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
    <div class="wrapper">
      Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten
    </div>
  </div>

<?php echo $gJavascript['foot']; ?>
</body>
</html>