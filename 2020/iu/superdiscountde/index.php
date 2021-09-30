<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$refStr='';
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Superrabatt auf IObit Uninstaller PRO und kostenlose Geschenke für Sie - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed:500|Montserrat:500,600,700,800&display=swap" rel="stylesheet">
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
      <h1>IObit Uninstaller Pro im <span>sale</span></h1>
      <p> Angebot B kehrt wieder zum Originalpreis zurück, sobald <b>1.000</b> Stück ausverkauft sind.</p>
    </div>
    <!-- content -->
    <div class="content clearfix">

      <!-- 3pc -->
      <div class="offer small fl">
        <!-- h3 -->
        <h3>Angebot A</h3>
        <!-- box -->
        <div class="box">
          <img src="<?php echo getStaticUrl('images/iu-3pc.png')?>" alt="IObit Uninstaller PRO">
        </div>
        <!-- price -->
        <dl class="price">
          <dt><big>16</big>,99€</dt>
          <dd>Originalpreis: <del>23,90€</del></dd>
          <dd>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-iu111pc1699&ref=de_iu111pcpurchase2108<?php echo $refStr;?>"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu1699sale2108-de')">
              JETZT KAUFEN
              <i class="all-icons">-50%</i>
            </a>
          </dd>
        </dl>
      </div>

      <!-- 3pc+bundle -->
      <div class="offer large fr">
        <!-- h3 -->
        <h3>Angebot B</h3>
        <!-- countdown -->
        <div class="countdown">
          Nur
          <div class="countdown-content clearfix">
            <div class="countdown-box">
              <div class="countdown-list"><span>1/span></div>
            </div>
            <div class="countdown-box">
              <div class="countdown-list"><span>0</span></div>
            </div>
            <div class="countdown-box">
              <div class="countdown-list"><span>0</span></div>
            </div>
            <div class="countdown-box last">
              <div class="countdown-list"><span>0</span></div>
            </div>
          </div>
          Stück übrig
        </div>
        <!-- box -->
        <div class="box">
          <img src="<?php echo getStaticUrl('images/iu-bundle.png')?>" alt="IObit Uninstaller PRO+Protected Folder+Smart Defrag PRO">
        </div>
        <!-- price -->
        <dl class="price">
          <dt><big>18</big>,99€</dt>
          <dd>Originalpreis: <del>109,89€</del></dd>
          <dd>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-iu11pfsd1899&ref=de_iu113pcpfsdpurchase2108<?php echo $refStr;?>"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu1899sale2108-de')">
              JETZT KAUFEN
              <i class="all-icons">-80%</i>
            </a>
          </dd>
        </dl>
      </div>

    </div>
  </div>
</div>
<!-- end banner -->

<!-- h4 -->
<h4 class="wrapper"> Der Lizenzcode ist auch für die nächste Version gültig </h4>

<!-- feature  -->
<div class="feature wrapper">
  <span class="arrow" onclick="goTarget($('.feature'));"></span>
  <h2>
    Die Pro-Edition entfernt alle unerwünschten Programme restlos.
    Andernfalls erstatten wir Ihnen den Kaufpreis umgehend! <img src="<?php echo getStaticUrl('images/tip02.png')?>" alt="" onclick="goTarget($('.footer'));">
  </h2>
  <!-- content -->
  <div class="content clearfix">
    <!-- one -->
    <dl class="fl">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>Gründlich</h3>
        <p>
          Unerwünschte Software werden <br>
          restlos bis zum letzten Byte entfernt!
        </p>
      </dd>
    </dl>
    <!-- two -->
    <dl class="fr">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
      <dd>
        <h3>Bequem</h3>
        <p>
          Mit einem Klick aktualisieren Sie <br>
          wichtige Software auf dem Rechner.
        </p>
      </dd>
    </dl>
    <!-- three -->
    <dl class="fl last">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>Leistungsstark</h3>
        <p>
          Deinstalliert böswillige Plugins und entfernt <br> Browser-Benachrichtigungen für ein sicheres Surferlebnis
        </p>
      </dd>
    </dl>
    <!-- four -->
    <dl class="fr last">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
      <dd>
        <h3>Zuverlässig</h3>
        <p>
          Unser technischer Support 24/7 steht <br>
          Ihnen immer zur Verfügung.
        </p>
      </dd>
    </dl>
  </div>
  <a class="intro" href="javascript: goTarget($('.comparison'));">Was bringt die PRO-Version noch>></a>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts wrapper">
  <span class="arrow" onclick="goTarget($('.gifts'));"></span>
  <div class="content clearfix">
    <h2>Was können die folgenden Gratisgeschenke?</h2>
    <!-- sd -->
    <dl class="sd clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"></dt>
      <dd class="fl">
        <h3><b>0€</b>&nbsp;&nbsp;Originalpreis: <del>39,99€</del></h3>
        <ul>
          <li><i class="all-icons"></i> Festplatte automatisch defragmentieren.</li>
          <li><i class="all-icons"></i> Datenzugriff erheblich beschleunigen.</li>
        </ul>
      </dd>
    </dl>
    <!-- pf -->
    <dl class="pf clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"></dt>
      <dd class="fl">
        <h3><b>0€</b>&nbsp;&nbsp;Originalpreis: <del>39,95€</del></h3>
        <ul>
          <li><i class="all-icons"></i> Passwortschutz für Ordner und Dateien bieten.</li>
          <li><i class="all-icons"></i> Daten vor Datenverlust und Viren schützen.</li>
        </ul>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review wrapper">
  <h2>Redaktions-Tipp</h2>
  <p>Millionen vn Nutzern weltweit haben ihre Erfahrungen geteilt</p>
  <!-- content -->
  <div class="content clearfix">
    <!-- media-logo -->
    <img class="media-logo" src="<?php echo getStaticUrl('images/awrad.png')?>" alt="">
    <!-- review-content -->
    <div class="review-content">
      <!-- head-portrait -->
      <ul class="clearfix">
        <li class="active"><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip.de"></li>
        <li><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></li>
        <li><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></li>
        <li><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></li>
        <li><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></li>
      </ul>
      <!-- line -->
      <span class="line">Chip.de</span>
      <!-- message -->
      <div class="review-message">
        <!-- Chip.de -->
        <p class="active">
          Die Pro-Version beinhaltet alle Funktionen der Freeware und kommt mit einigen praktischen Zusatz-Features. So kann die Vollversion beispielsweise auch gebündelte Programme oder Plugins entfernen und alle Ihre wichtigen Programme mit nur einem Klick auf die neueste Version updaten.
        </p>
        <!-- Jeff A Watts -->
        <p>
          Ich benutze IObit-Programme seit Jahren mit großer Wirkung! Aus diesem Grund bleibe ich bei IObit-Produkten. Ich habe in der Vergangenheit Laptops und Handys (Android) mit diesen gewartet und repariert und belasse sie immer mit installierten IObit-Produkten. Ich fordere sie regelmäßig zum Scannen auf, und sie teilen mir mit, wann der Laptop/ Computer / das Handy automatisch repariert und beschleunigt werden. :) Ich empfehle das Deinstallationsprogramm.
        </p>
        <!-- Lynette van Niekerk -->
        <p>
          Ich finde IObit Uninstaller ist hervorragend zu bedienen, da es alles hat, was Sie sich wünschen können. Ich liebe die Tatsache, dass es alle übrig gebliebenen Fragmente deinstalliert. Zusätzlich hat er einen Software-Updater, der Sie daran erinnert, wenn eines der Programme aktualisiert werden muss. Die Tatsache, dass es Batch-Programme deinstalliert, macht es wirklich zu einem Gewinner. Eigentlich ist es genau das, was man braucht, um den Computer gut am Laufen zu halten.
        </p>
        <!-- Paulo Martins -->
        <p>
          IObit Uninstaller ist die beste Software zum Entfernen von Programmen auf dem Computer, sehr schnell und effektiv. Es funktioniert besser als das grundlegende Deinstallationsprogramm von Windows. Es bereinigt gründlich Datenreste des Programms und es gibt keine Verzögerungen auf dem Computer. Ich benutze es seit ein paar Monaten und weiß nicht, wie ich ohne es leben soll. Ich empfehle es meinen Freunden und meiner Familie. Danke! IObit Uninstaller ist fantastisch.
        </p>
        <!-- Lovro Žužić -->
        <p>
          Ich nutze IObit Uninstaller nun schon seit mehr als 3 Jahren. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features. Somit habe ich einen schnellen Zugriff auf kürzlich installierte Programme, die ich nicht mag oder die nicht angemessen funktionieren.
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
        <th class="text" colspan="2">Pro-Version: Mehr als nur ein einfacher Uninstaller</th>
        <th class="spaces"></th>
        <th class="free" valign="bottom"><div>Free-Version</div></th>
        <th class="space"></th>
        <th class="pro"><div>Pro-Version</div></th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""></td>
        <td class="text">Deinstalliert Programme schnell</td>
        <td class="spaces"></td>
        <td class="free"><i class="all-icons yes">√</i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons">√</i></td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""></td>
        <td class="text">Entfernt hartnäckigste Software</td>
        <td class="spaces"></td>
        <td class="free"><i class="all-icons">×</i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons">√</i></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""></td>
        <td class="text">Erkennt und entfernt Bündel-Software</td>
        <td class="spaces"></td>
        <td class="free"><i class="all-icons">×</i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons">√</i></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""></td>
        <td class="text">Bereinigt Datenreste automatisch</td>
        <td class="spaces"></td>
        <td class="free"><i class="all-icons">×</i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons">√</i></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""></td>
        <td class="text">Findet und entfernt Werbe-Plug-Ins</td>
        <td class="spaces"></td>
        <td class="free"><i class="all-icons">×</i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons">√</i></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""></td>
        <td class="text">Aktualisiert wichtige Software mit 1 Klick</td>
        <td class="spaces"></td>
        <td class="free"><i class="all-icons">×</i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons">√</i></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""></td>
        <td class="text">Aktualisiert sich automatisch</td>
        <td class="spaces"></td>
        <td class="free"><i class="all-icons">×</i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons">√</i></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""></td>
        <td class="text">Bietet technischen Support 24/7</td>
        <td class="spaces"></td>
        <td class="free"><i class="all-icons">×</i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons">√</i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""></td>
        <td class="text">Macht die vorgenommenen Systemänderungen rückgängig</td>
        <td class="spaces"></td>
        <td class="free last"><i class="all-icons">×</i></td>
        <td class="space"></td>
        <td class="pro last"><i class="all-icons">√</i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- service -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dt>
      <dd><strong>Zufriedenheitsgarantie</strong> 60-Tage-Geld-zurück-Garantie</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""></dt>
      <dd><strong>Zahlungssicherheit</strong> Ihre Zahlung ist 100% sicher</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/veloce.png')?>" alt=""></dt>
      <dd><strong>Schnelle Aktivierung</strong> Kurz nach dem Kauf erhalten Sie <br>einen Aktivierungscode.</dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></dt>
      <dd><strong>Kundendienst</strong> Kostenloser technischer Support 24/7</dd>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Notiz:</dt>
    <dd>
      *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
    </dd>
    <dd>
      *. Daten können sich system- oder computerabhängig ändern.
    </dd>
    <dd>
      *. Wenn Sie nicht zufrieden sind, können Sie die Bestellung innerhalb von 60 Tagen ohne Zahlung einer Gebühr stornieren. Das Geld wird automatisch auf Ihre Kreditkarte oder <br> &nbsp;&nbsp; Ihr PayPal-Konto zurückerstattet.
    </dd>
  </dl>
  <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
</div>
<!-- end footer -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
   <div class="box"></div>
    <!-- table -->
    <table>
      <tr>
        <td colspan="3" class="text">Das Angebot kehrt bald wieder zum Originalpreis zurück.</td>
      </tr>
      <tr>
        <td class="itema"><i></i> Aktionspreis: <span>18,99€</span></td>
        <td class="itemb"><i></i></td>
        <td class="itemc"><i></i> Originalpreis: <del>109,99€</del></td>
      </tr>
    </table>
    <!-- dl -->
    <dl>
      <dd>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=de-iu11pfsd1899&ref=de_iu113pcpfsdpurchase2108<?php echo $refStr;?>"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu1899sale2108-de')">
          JETZT KAUFEN
        </a>
        <!-- countdown -->
        <div class="countdown">
          Nur
          <div class="countdown-content clearfix">
            <div class="countdown-box">
              <div class="countdown-list"><span>1</span></div>
            </div>
            <div class="countdown-box">
              <div class="countdown-list"><span>0</span></div>
            </div>
            <div class="countdown-box">
              <div class="countdown-list"><span>0</span></div>
            </div>
            <div class="countdown-box last">
              <div class="countdown-list"><span>0</span></div>
            </div>
          </div>
          Stück übrig
        </div>
      </dd>
    </dl>
  </div>
</div>
<!-- end float -->
<script>refStr = "<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
    toStr = "<?php echo $_GET['to']?>"
    if(toStr == 'newnc3' || toStr == 'oldicon3')
        newnc();
</script>
</body>
</html>