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
    $packsNum = 97;
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
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>70% korting op IObit Malware Fighter PRO</title>
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
      <!-- logo -->
      <a href="https://www.iobit.com/nl/index.php" target="_blank" class="logo">IObit</a>
      <!-- title -->
      <h1>Beveilig Uw Computer Tegen Geïnfecteerde USB-schijven</h1>
      <!-- box -->

      <div class="box three-pcs">
        <div class="img-box"></div>
        <!-- price -->
        <p>Nu: <strong>€21,99</strong> <del>€79,99</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-imf73pc2199&ref=nl_imf3pcusbguard2019<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
           onclick="ga('send', 'event', 'imfusbbuy', 'buy', 'imfpurchase1904usb-nl');">
          <span>Activeer Nu</span>
        </a>
        <!-- countdown -->
        <div class="number">
          Wees er snel bij! Slechts
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          over
        </div>
      </div>

      <div class="box one-pc">
        <div class="img-box"></div>
        <!-- price -->
        <p>Nu: <strong>€19,99</strong> <del>€39,95</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn border"
           href="https://www.iobit.com/buy.php?product=nl-imf71pc1999&ref=nl_imf1pcusbguard2019<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
           onclick="ga('send', 'event', 'imfusb1pcbuy', 'buy', 'imfpurchase1904usb1pc-nl');">
          <span>Activeer Nu</span>
        </a>
      </div>

    </div>
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature feature01 wrapper clearfix">
    <h2><br>WAAROM HEEFT U USB-BESCHERMING NODIG?</h2>
    <div class="img-box"></div>
    <dl class="list01">
      <dt>Virus Infecteert USB-schijf</dt>
      <dd>
        Uw USB-schijf is ongetwijfeld op verschillende computers <br>
        aangesloten geweest. Een van die computers kan uw <br>
        USB-schijf hebben geïnfecteerd met een virus.
      </dd>
    </dl>
    <dl class="list02">
      <dt>Uw PC Wordt Geïnfecteerd</dt>
      <dd>
        Als een geïnfecteerde USB-schijf op uw computer wordt <br>
        aangesloten kunt u bestanden verliezen en kan uw <br>
        computer kwetsbaar worden voor andere aanvallen.
      </dd>
    </dl>
  </div>
  <!-- end feature -->

  <!-- feature -->
  <div class="feature feature02 ">
    <div class="wrapper">
      <h2>
        HOE USB-BESCHERMING BIJDRAAGT AAN EEN VEILIGE  <br>
        COMPUTER EN USB-SCHIJF
      </h2>
      <div class="img-box"></div>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""> Met 1 klik oplossen</dt>
        <dd>
          Als uw USB-schijf bedreigingen bevat, <br>
          kunt u ze in 1 klik verwijderen voordat <br>
          ze uw computer kunnen beschadigen.
        </dd>
      </dl>
      <dl class="list02">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""> Automatische Virusscan</dt>
        <dd>
          Scan automatisch USB-schijven <br>
          zodra ze aangesloten worden om <br>
          infecties te voorkomen.
        </dd>
      </dl>
    </div>
  </div>
  <!-- end feature -->

  <!-- benfits -->
  <div class="feature03">
    <h2>
      ANDERE VOORDELEN <br>
      DIE U KRIJGT BIJ IOBIT MALWARE FIGHTER 7 PRO
    </h2>
    <div class="message">
      <div class="wrapper">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
          <dd><strong>Laatste Bitdefender Engine</strong></dd>
          <dd>
            203.000.000+ bedreigingen <br>
            worden snel gedetecteerd en bij <br>
            u weggehouden.
          </dd>
          <dd><span>*alleen PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
          <dd><strong>Stop Ransomware-aanvallen</strong></dd>
          <dd>
            Elke poging om uw bestanden <br>
            te vergrendelen wordt direct <br>
            gestopt.
          </dd>
          <dd><span>*alleen PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
          <dd>
            <strong class="thin">
              Bescherm Bestanden met <br>
              een Wachtwoord
            </strong>
          </dd>
          <dd>
            Hackers kunnen niet bij uw <br>
            bestanden die beschermd <br>
            zijn met een wachtwoord.
          </dd>
          <dd><span>*alleen PRO</span></dd>
        </dl>
         <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
          <dd><strong>Geen Schadelijke Tracking</strong></dd>
          <dd>
            Persoonlijke surfsporen <br>
            worden automatisch <br>
            verwijderd.
          </dd>
          <dd><span>*alleen PRO</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Wereldwijde awards</h2>
      <h3>Dankzij het vertrouwen en de prijzen die we in de afgelopen zes jaar hebben gekregen van deze media weet u dat u bij ons goed zit.</h3>
      <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
      <!-- content -->
      <div class="content">
        <ul class="clearfix">
          <li>
            <img src="<?php echo $pResUrl;?>images/Peter-Stoffers.png" alt="Peter Stoffers">
            <p>Peter Stoffers</p>
          </li>
          <li>
            <img src="<?php echo $pResUrl;?>images/David-Cassidy_362.png" alt="David Cassidy">
            <p>David Cassidy</p>
          </li>
          <li class="active">
            <img src="<?php echo $pResUrl;?>images/software.png" alt="Software.Informer">
            <p>Software.Informer</p>
          </li>
          <li>
            <img src="<?php echo $pResUrl;?>images/Bob-Bassett.png" alt="Bob Bassett">
            <p>Bob Bassett</p>
          </li>
          <li>
            <img src="<?php echo $pResUrl;?>images/Gelu-Batir_771.png" alt="Gelu Batir">
            <p>Gelu Batir</p>
          </li>
        </ul>
        <div class="details">
          <dl>
            <dt>Klantbeoordeling</dt>
            <dd>"Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden."</dd>
          </dl>
          <dl>
            <dt>Klantbeoordeling</dt>
            <dd>"Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."</dd>
          </dl>
          <dl class="active">
            <dt>Media recensie</dt>
            <dd>"Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren."</dd>
          </dl>
          <dl>
            <dt>Klantbeoordeling</dt>
            <dd>"We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!” </dd>
          </dl>
          <dl>
            <dt>Klantbeoordeling</dt>
            <dd>"Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."</dd>
          </dl>
        </div>
        <span></span>
      </div>
    </div>
  </div>
  <!-- review end -->

  <div class="bottom">

    <!-- service -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>
            Probeer ZONDER RISICO – met onze 60 dagen <br>
            niet-goed-geld-terug garantie
          </h4>
          <p>
            Door PRO te activeren wordt uw pc vollledig beschermd voor een <br>
            schappelijke prijs.
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Wij accepteren</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- end service -->

    <!-- footer -->
    <!--
    <dl class="annotation wrapper">
      <dt>Note: </dt>
      <dd>*.Such promotional programs are subject to change without notice, from time to time in our sole discretion.</dd>
    </dl>
    -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
    </div>
    <!-- end footer -->

  </div>


  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"></div>
      <div class="message">
        <h2>
          <strong>70% KORTING</strong>  op volledige bescherming voor <br>
          het hele gezin!
        </h2>
        <!-- countdown -->
        <div class="number">
          Wees er snel bij! Slechts
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          over
        </div>
      </div>
      <!-- 3pc buybtn -->
     <dl>
       <dt>Nu: <strong>€21,99</strong> <del>€79,99</del></dt>
       <dd>
         <a class="buybtn"
              href="https://www.iobit.com/buy.php?product=nl-imf73pc2199&ref=nl_imf3pcusbguard2019<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
            onclick="ga('send', 'event', 'imfusbbuy', 'buy', 'imfpurchase1904usb-nl');">
           <span>Activeer Nu</span>
         </a>
       </dd>
     </dl>
    </div>
  </div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>