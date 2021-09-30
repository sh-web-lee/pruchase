<?php //	初始化
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

$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
    'box','notibc','box13thbc','xgiftbox','xactivate','cg'))){
  $refStr.='-'.$_GET['ref'];
}

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
  <title>Sparen Sie bis zu 78% auf IObit Malware Fighter PRO und erhalten Sie zusätzlich ein Geschenk kostenlos.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript">
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 20000);
</script>

<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <h1>
      Glückliches neues Jahr
      <span>Starten Sie gut ins Jahr 2019 und sichern Sie sich einen super Rabatt!!</span>
    </h1>
    <div class="panel clearfix">
      <div class="box small">
        <img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="">
        <p><strong>19</strong><span><b>99</b> <del class="original">39,95€</del></span></p>
        <!-- 1999 buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-imf61pc1999&ref=de_imf61pcpurchase1903<?php echo $refStr;?>&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201901-de')">
          <i></i> <span>JETZT KAUFEN</span>
        </a>
      </div>
      <div class="box">
        <ul>
          <li><strong>11</strong> STD :</li>
          <li><strong>43</strong> MIN :</li>
          <li><strong>44</strong> SEK :</li>
          <li><strong>644</strong> MS*</li>
        </ul>
        <img src="<?php echo $pResUrl; ?>images/imf-three-box.png" alt="">
        <p><strong>21</strong><span><b>99</b> <del class="original">99,90€</del></span></p>
        <!-- 2199 buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-imf63pcpf2199&ref=de_imf63pcpfpurchase1903<?php echo $refStr;?>&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201901-de')">
          <i></i> <span>JETZT KAUFEN</span>
        </a>
        <p class="bought">
          <img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Schon  <span class="buyNum"><?php echo $buyNum;?></span> Deals verkauft
        </p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="container">
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
    <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
  </div>
  <!-- awards end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper clearfix">
      <h2><span>Highlights von IObit Malware Fighter PRO</span></h2>
      <img class="computer" src="<?php echo $pResUrl; ?>images/computer.png" alt="">
      <div class="right-lists">
        <ul>
          <li class="icon1">Safe-Box schützt Ihre ausgesuchten Dateien gegen <br> Ransomware-Angriffe.</li>
          <li class="icon2">Die Anti-Ransomware-Engine blockiert unerlaubte <br> Zugriffe auf Ihr System.</li>
          <li class="icon3">Löscht Ihren Browserverlauf automatisch, um böswillige <br> Verfolgung zu vermeiden.</li>
          <li class="icon4">Schützt Ihre Kamera vor unbefugtem Zugriff.</li>
        </ul>
        <a class="intro" href="javascript:void(0)"> Mehr über die Pro-Version >></a>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gift message start -->
  <div class="gift-message">
    <div class="wrapper">
      <img src="<?php echo $pResUrl; ?>images/imf-center-box.png" alt="" class="img-box">
      <div class="right-message">
        <img src="<?php echo $pResUrl; ?>images/pf-box.png" alt="" class="img-box">
        <div class="box">
          <h3>Kostenfreies Geschenk – Protected Folder</h3>
          <p>1 Jahresabo 0€ (im Wert von 39,95€)</p>
          <p>Passwortschutz für Ordner und Dateien unter Windows bieten.</p>
          <p>Daten vor Datenverlust, Viren, Adware und Spyware schützen.</p>
        </div>
      </div>
    </div>
  </div>
  <!-- gift message end -->

  <!-- between-buy start -->
  <div class="between-buy">
    <div class="wrapper">
      <p class="price"><strong>21,99€ </strong> statt <del>99,90€</del></p>
      <!-- 2199 buybtn -->
      <a href="https://www.iobit.com/buy.php?product=de-imf63pcpf2199&ref=de_imf63pcpfpurchase1903<?php echo $refStr;?>&refs=de_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201901-de')"
         class="buybtn">
        <i></i> <span>JETZT KAUFEN</span>
      </a>
      <p class="last"> <i></i> Schon <span class="buyNum"><?php echo $buyNum;?></span> Deals verkauft</p>
    </div>
  </div>
  <!-- between-buy end -->

  <!-- review start -->
  <div class="review wrapper">
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

  <!-- comparison_table start -->
  <div class="comparison_table wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2" class="text">Mehr Vorteile von <br> IObit Malware Fighter PRO auf einen Blick</th>
        <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
        <th class="itema">
          <span>IMF PRO für 1 PC</span>
          <strong>19,99€</strong>
          <del>39,95€</del>
          <!-- 1999 buybtn -->
          <a href="https://www.iobit.com/buy.php?product=de-imf61pc1999&ref=de_imf61pcpurchase1903<?php echo $refStr;?>&refs=de_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201901-de')"
             class="buybtn">
            Jetzt kaufen
          </a>
        </th>
        <th class="itemc">
          <span>IMF PRO für 3 PCs</span>
          <strong>21,99€</strong>
          <del>99,90€</del>
          <!-- 2199 buybtn -->
          <a href="https://www.iobit.com/buy.php?product=de-imf63pcpf2199&ref=de_imf63pcpfpurchase1903<?php echo $refStr;?>&refs=de_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201901-de')"
             class="buybtn">
            Jetzt kaufen
          </a>
        </th>
      </tr>
      </thead>
      <tbody>
      <!-- 01 -->
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
        <td class="virtue">Grundlegende Anti-Malware Funktion <sup>Verbessert</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
        <td class="virtue">Scannt 130% schneller um aktive Bedrohungen rasch <br>zu finden <sup>Verbessert</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
        <td class="virtue">Brandneue Anti-Ransomware-Maschine um unbefugten Zugriff auf wichtige Dateien zu blockieren <sup class="red">Neu</sup></td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
        <td class="virtue">Safe-Box schützt ausgewählte Ordner vor <br> unbefugtem Zugriff <sup class="red">Neu</sup></td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
        <td class="virtue">Scannt heruntergeladene Dateien und entfernt Werbung, <br> um die Sicherheit zu erhöhen <sup>Verbessert</sup></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
        <td class="virtue">Vollkommende Anti-Malware-Funktion mit <br> der IObit-Dual-Core-Maschine <sup>Verbessert</sup></td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
        <td class="virtue">Erweiterter Bedrohungsschutz mit<br> Bitdefender-Antivirus-Maschine <sup>Verbessert</sup></td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
        <td class="virtue">Bootzeit-Diskschutz gegen bösartige Angriffe mit<br> MBR-Wächter <sup class="red">Neu</sup> </td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
        <td class="virtue">Schützt Ihre Kamera vor unbefugtem Zugriff <sup>Verbessert</sup></td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
        <td class="virtue">Umfassender Echtzeitschutz für erstklassige PC Sicherheit <sup>Verbessert</sup> </td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
        <td class="virtue">Verhindert Vireninfektion durch USB-Datenträger</td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
        <td class="virtue">Erkennt bösartige Prozesse, die im RAM laufen</td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
        <td class="virtue"> Löscht automatisch die Spuren im Internet mit der<br> Anti-Verfolgung <sup>Verbessert</sup></td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
        <td class="virtue">Läuft intelligent im Hintergrund, ohne Sie zu stören</td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
        <td class="virtue">Automatische Updates auf die neuste Version</td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
        <td class="virtue">Kostenloser technischer Support 24/7</td>
        <td class="itemb"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        <td class="itemc"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      </tbody>
      <tfoot>
      <tr>
        <th colspan="2"></th>
        <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
        <th class="itema">
          <span>IMF PRO für 1 PC</span>
          <strong>19,99€</strong>
          <del>39,95€</del>
          <!-- 1999 buybtn -->
          <a href="https://www.iobit.com/buy.php?product=de-imf61pc1999&ref=de_imf61pcpurchase1903<?php echo $refStr;?>&refs=de_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201901-de')"
             class="buybtn">
            Jetzt kaufen
          </a>
        </th>
        <th class="itemc">
          <span>IMF PRO für 3 PCs</span>
          <strong>21,99€</strong>
          <del>99,90€</del>
          <!-- 2199 buybtn -->
          <a href="https://www.iobit.com/buy.php?product=de-imf63pcpf2199&ref=de_imf63pcpfpurchase1903<?php echo $refStr;?>&refs=de_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201901-de')"
             class="buybtn">
            Jetzt kaufen
          </a>
        </th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison_table end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl class="payment">
      <dd>Akzeptierte Zahlungsmethoden</dd>
      <dt><img src="<?php echo $pResUrl;?>images/payment.png" alt=""></dt>
    </dl>
    <dl class="moneyback">
      <dd>Geld-zurück-Garantie</dd>
      <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
    </dl>
    <dl class="amgold">
      <dd>Zertifizierung</dd>
      <dt><img src="<?php echo $pResUrl;?>images/amgold.png" alt=""></dt>
    </dl>
  </div>
  <!-- service end -->
</div>
<!-- contaiber end -->

<!-- footer start -->
<div class="footer clearfix">
  <dl class="annotation">
    <dt>Note:</dt>
    <dd>①.Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
    <dd>②.Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - 2019 IObit. Alle Rechte vorbehalten</p>
</div>
<!-- footer end -->


<script>
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $(".banner .box ul strong").eq(0).text(h).end().eq(1).text(i).end().eq(2).text(s).end().eq(3).text(mi);
    setTimeout('cycleCountdown()', 1);
  }
  $(function () {
    $.fn.target=function (target) {
      $(this).click(function() {
        var Theigth = target.offset().top;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
      });
    };
    $("a.intro").target($("#compare"));
    cycleCountdown();
  })
</script>
</body>
</html>