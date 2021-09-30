<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $statusNow=$_GET['status'];
  $cName='deiujun_p'.$date;
  $statusCName='deiujun_s'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNumArr=explode('.',$_COOKIE[$cName]);
    $packsNum1=$packsNumArr[0];
    $packsNum2=$packsNumArr[1];
    $packsNum3=$packsNumArr[2];
    $randNum=rand(0,100);
    if($randNum<40){
      $packsNum1++;
    }elseif($randNum<80){
      $packsNum3++;
    }
    if($statusNow!=1){
      if($_COOKIE[$statusCName]!=1){
        $packsNum2=589;
        setcookie($statusCName,1,time()+3600*24*2);
      }
    }
    $packsNum2++;
    $packsNumArr=[$packsNum1,$packsNum2,$packsNum3];
  }else{
    $packsNumArr=[134,12199,1001];
  }
  setcookie($cName,implode('.',$packsNumArr),time()+3600*24*2);
  echo json_encode($packsNumArr);
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Holen Sie sich das Bestdeal von IObit Uninstaller PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
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
      <h1>SALE nur für kurze Zeit</h1>
      <p>Der Preis des Bestdeals steigt auf <span>20,99€</span> sobald die Zeit abgelaufen ist.</p>
    </div>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- IU 1PC -->
      <div class="small-message left">
        <!-- box -->
        <img class="box" src="<?php echo $pResUrl;?>images/iu-1pc.png" alt="IObit Uninstaller PRO">
        <!-- price -->
        <p class="price">18,99€<small>/Jahr</small> <del>23,9€</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-iu91pc1899&ref=de_iu91pcbuysingle1907<?php echo $refStr;?>&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu1pcbuysingle1907-de');">
          <span>JETZT KAUFEN</span>
        </a>
        <!-- viewNum -->
        <p class="view"><strong class="viewNum">134</strong> Deals verkauft</p>
      </div>

      <!-- IU 3PCs + PF -->
      <div class="large-message middle">
        <!-- countdown -->
        <p class="countdown clearfix">
          <i></i>
          <strong>00</strong><span>Std</span>
          <strong>00</strong><span>Min</span>
          <strong class="last">00</strong><span>Sek</span>
        </p>
        <!-- off -->
        <span class="off">-76<small>%</small></span>
        <!-- box -->
        <img class="box" src="<?php echo $pResUrl;?>images/iu3pcs-pf.png" alt="IObit Uninstaller PRO + Protected Folder">
        <!-- price -->
        <p class="price">18,99€<small>/Jahr</small> <del>79,9€</del></p>
        <!-- 3pcs+pf buybtn -->
        <a class="buybtn red"
           href="https://www.iobit.com/buy.php?product=de-iu9pfbundle1899&ref=de_iu9bundlebefore1907<?php echo $refStr;?>&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iubundlebefore1907-de');">
          <span>JETZT KAUFEN</span>
        </a>
        <!-- viewNum -->
        <p class="view"><strong class="viewNum">235.798</strong> Deals verkauft</p>
      </div>

      <!-- IU 3PCs -->
      <div class="small-message right">
        <!-- box -->
        <img class="box" src="<?php echo $pResUrl;?>images/iu-3pcs.png" alt="IObit Uninstaller PRO">
        <!-- price -->
        <p class="price">19,99€<small>/Jahr</small> <del>39,95€</del></p>
        <!-- 3pcs buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-iu93pc1999&ref=de_iu93pcbuysingle1907<?php echo $refStr;?>&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcbuysingle1907-de');">
          <span>JETZT KAUFEN</span>
        </a>
        <!-- viewNum -->
        <p class="view"><strong class="viewNum">1.001</strong> Deals verkauft</p>
      </div>

    </div>
    <!-- intro -->
    <a class="anchor" href="javascript: goTarget($('.container'))">Warum das Bestdeal wählen? <i></i></a>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- intro -->
  <div class="intro wrapper clearfix">
    <div class="intro-detail fl">
      <img class="box" src="<?php echo $pResUrl;?>images/intro-iu.png" alt="IObit Uninstaller PRO">
      <span class="tag">SALE</span>
      <h3>IObit Uninstaller PRO</h3>
      <p>
        1 Jahr, 3 Computer <br>
        Originalpreis: 39,95€ <br>
        Entfernt ungewollte Programme schnell <br>
        Bereinigt alle Überreste automatisch <br>
        Analysiert und verbessert den Softwarestatus
      </p>
      <a class="anchor" href="javascript: goTarget($('.comparison'))">Ausführlicher Vergleich zwischen FREE und PRO <i></i></a>
    </div>
    <div class="intro-detail grey fr">
      <img class="box" src="<?php echo $pResUrl;?>images/intro-pf.png" alt="Protected Folder">
      <span class="tag">GRATIS</span>
      <h3>Protected Folder</h3>
      <p>
        1 Jahr, 1 Computer <br>
        Originalpreis: 39,95€ <br>
        Bietet Passwortschutz für Ordner und Dateien <br>
        unter Windows und schützt Daten vor <br>
        Datenverlust, Viren, Ransomware und Spyware.
      </p>
    </div>
  </div>
  <!-- end intro -->

  <!-- review -->
  <div class="review wrapper clearfix">
    <div class="title">
      <h2>Redaktions-Tipp</h2>
      <p>Millionen von Nutzern weltweit haben ihre Erfahrungen geteilt</p>
    </div>
    <div class="review-icons fl">
      <img src="<?php echo $pResUrl;?>images/review-icons.png" alt="">
    </div>
    <div class="review-content fr">
      <ul class="clearfix">
        <li class="active">
          <img src="<?php echo $pResUrl;?>images/chip.png" alt="CHIP">
        </li>
        <li>
          <img src="<?php echo $pResUrl;?>images/jeff-a-watts.png" alt="Jeff A Watts">
        </li>
        <li>
          <img src="<?php echo $pResUrl;?>images/lynett-van-niekerk.png" alt="Lynette van Niekerk">
        </li>
        <li>
          <img src="<?php echo $pResUrl;?>images/paulo-martins.png" alt="Paulo Martins">
        </li>
        <li>
          <img src="<?php echo $pResUrl;?>images/lovro-zuzic.png" alt="Lovro Žužić">
        </li>
      </ul>
      <span class="line"></span>
      <div class="review-message">
        <!-- CHIP -->
        <p class="active">
          Die Pro-Version beinhaltet alle Funktionen der Freeware und kommt mit einigen praktischen Zusatz-Features. So kann die Vollversion beispielsweise auch gebündelte Programme oder Plugins entfernen und alle Ihre wichtigen Programme mit nur einem Klick auf die neueste Version updaten.  <span>–Chip.de</span>
        </p>
        <!-- Jeff A Watts -->
        <p>
          Ich benutze IObit-Programme seit Jahren mit großer Wirkung! Aus diesem Grund bleibe ich bei IObit-Produkten. Ich habe in der Vergangenheit Laptops und Handys (Android) gewartet und repariert und lasse sie immer mit installierten IObit-Produkten. Ich fordere sie auf, regelmäßig zu scannen und ihnen mitzuteilen, dass es Laptop/ Computer / Handy automatisch repariert und beschleunigt. :) Ich empfehle das Deinstallationsprogramm .  <span>-Jeff A Watts</span>
        </p>
        <!-- Lynette van Niekerk -->
        <p>
          Ich finde IObit Uninstaller hervorragend zu bedienen, da es alles hat, was Sie sich wünschen können. Ich liebe die Tatsache, dass es alle übrig gebliebenen Fragmente deinstalliert. Es hat auch einen Software-Updater, der Sie daran erinnert, wenn eines der Programme aktualisiert werden muss, und die Tatsache, dass es Batch-Programme deinstalliert, macht es wirklich zu einem Gewinner. Eigentlich ist es genau das, was man braucht, um den Computer gut zu halten. <span>- Lynette van Niekerk</span>
        </p>
        <!-- Paulo Martins -->
        <p>
          IObit Uninstaller ist die beste Software zum Entfernen von Programmen auf dem Computer, ganz schnell und effektiv. Es funktioniert besser als das grundlegende Deinstallationsprogramm von Windows. Es reinigt ernsthaft Datenreste des Programms und es gibt keine Verzögerungen auf dem Computer. Ich benutze es seit ein paar Monaten und weiß nicht, wie ich ohne es leben soll. Ich empfehle es meinen Freunden und meiner Familie. Danke! IObit Uninstaller ist fantastisch. <span>-Paulo Martins</span>
        </p>
        <!-- Lovro Žužić -->
        <p>
          Ich nutze IObit Uninstaller nun schon seit mehr als 3 Jahren. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features, welches mir einen schnellen Zugriff auf kürzlich installierte Programme gibt, die ich nicht mag oder nicht angemessen funktionieren.  <span>- Lovro Žužić</span>
        </p>
      </div>
    </div>
  </div>
  <!-- end review -->

</div>
<!-- end container -->

<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2">Hier ist der Grund, warum Sie die Pro-Version haben sollten.</th>
        <td class="space"></td>
        <th class="itema"><span>Free-Version</span></th>
        <td class="space"></td>
        <th class="itemb"><span>PRO-Version</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue">Deinstalliert Programme schnell</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
        <td class="virtue">Beseitigt Erweiterungen von Browsern</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">Entfernt hartnäckigste Software</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">Erkennt und entfernt Bündel-Software</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">Bereinigt Datenreste automatisch</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
        <td class="virtue">Macht die vorgenommenen Systemänderungen rückgängig</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">Findet und entfernt Werbe-Plug-Ins</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">Updatet wichtige Software mit 1 Klick</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue">Aktualisiert sich automatisch</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">Bietet technischen Support 24/7</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
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
  </dl>
  <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
</div>
<!-- end footer -->

<!-- backtotop -->
<div class="backtotop all-icons" onclick="goTarget($('.banner'));">TOP</div>
<!-- end backtotop -->

<!-- float -->
<div class="float">
  <p class="countdown">
    <strong>00</strong> <span>Std</span>
    <strong>00</strong> <span>Min</span>
    <strong class="last">00</strong> <span>Sek</span>
  </p>
</div>
<!-- end float -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>