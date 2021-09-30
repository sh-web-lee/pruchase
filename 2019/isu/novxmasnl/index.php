<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'isunovxmas_p' . $date;
  $c_name_t='isunovxmas_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Gelukkig Nieuwjaar! IObit Software Updater met Gratis Cadeau</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <!-- title -->
    <h1>GELUKKIG NIEUWJAAR SPECIALE AANBIEDING</h1>
    <div class="img-box">
      <img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
<!--      <span class="snow01"></span>-->
<!--      <span class="snow02"></span>-->
    </div>
    <div class="right-message">
      <h2><span>GRATIS CADEAU</span> voor de eerste 100 kopers!</h2>
      <!-- progress -->
      <div class="progress">
        <p><strong class="viewNum"><?php echo $viewNum;?></strong> mensen kijken, slechts <span class="buyNum">51</span> over</p>
        <div class="bar">
          <span class="box"><span class="disappear"></span></span>
        </div>
      </div>
      <p class="price">
        <!-- price -->
        <span>Slechts <strong>€<b>14</b>,99</strong></span>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-isu23pcpf1499&ref=nl_isu23pcpf1499purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu"
           onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase1911-nl');">
          Activeer Nu
        </a>
      </p>
      <ul class="list">
        <li>Oorspronkelijk	<span>€69,94  </span></li>
        <li>Korting <span>78% </span></li>
        <li>Bespaar <span>€54,95</span></li>
      </ul>
    </div>
<!--    <span class="cute cute01"></span>-->
<!--    <span class="cute cute02"></span>-->
<!--    <span class="cute cute03"></span>-->
<!--    <span class="cute cute04"></span>-->
<!--    <span class="cute cute05"></span>-->
<!--    <span class="cute cute06"></span>-->
  </div>
</div>
<!-- banner end -->


<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>Waarom IObit Software Updater 2 PRO?</h2>
    <img src="<?php echo getStaticUrl('images/intro-box.png')?>" class="img-box" alt="IObit Software Update PRO"/>
    <div class="left-message">
      <h3><i></i>Direct Updaten </h3>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
        <dd><strong>Bescherming</strong></dd>
        <dd>Verouderde software updaten verhelpt <br> veiligheidsproblemen op tijd om <br> hackers buiten te houden.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
        <dd><strong>Verbeteringen</strong></dd>
        <dd>Verouderde software updaten biedt u <br> direct de nieuwste functies <br> en verbetert prestaties en stabiliteit.</dd>
      </dl>
    </div>
    <div class="right-message">
      <h3><i></i>Eenvoudig Updaten </h3>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
        <dd><strong>Simpel</strong> De nieuwste updates worden gedownload zonder de webbrowser te openen. </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
        <dd><strong>Automatisch</strong> Kies geplande automatische updates, zodat beschikbare updates automatisch gedownload en geïnstalleerd worden zonder u te storen. </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
        <dd><strong>Veilig</strong> Maak automatisch een herstelpunt aan voor de installatie zodat niets misgaat. </dd>
      </dl>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Wat zijn de voordelen van IObit Software Updater 2 PRO?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
        <span class="suspend01"></span>
        <span class="suspend02"></span>
        <span class="suspend03"></span>

      </div>
      <div class="right fr">
        <ul class="feature-list">
          <li><i class="all-icons">◎</i> Update software in 1 klik</li>
          <li><i class="all-icons">◎</i> Stille download en installatie van updates</li>
          <li><i class="all-icons">◎</i> Plan automatische scans en updates</li>
          <li><i class="all-icons">◎</i> Sluit programma’s uit die u niet wilt updaten</li>
          <li><i class="all-icons">◎</i> Optie om automatisch een herstelpunt aan te maken voor de installatie</li>
          <li><i class="all-icons">◎</i> Optie om automatisch setupbestanden te verwijderen na de installatie</li>
          <li><i class="all-icons">◎</i> Kan direct andere populaire software downloaden</li>
          <li><i class="all-icons">◎</i> Blokkeer advertenties uit de gratis versie</li>
        </ul>
        <p class="price">
          <!-- price -->
          <span>Slechts <strong>€<b>14</b>,99</strong> <span>Wees er snel bij, slechts <b class="buyNum">50</b> over!</span></span>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=nl-isu23pcpf1499&ref=nl_isu23pcpf1499purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu"
             onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase1911-nl');">
            Activeer Nu
          </a>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- gift-message start -->
<div class="gift-message">
  <div class="wrapper">
    <h2>Krijg Protected Folder Helemaal Gratis!</h2>
    <dl class="pf">
      <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/></dt>
      <dd>
        <h3>Protected Folder</h3>
        <strong>€0</strong> <del>€39,95</del>  Jaar / 1 pc
        <p>· Bescherm uw belangrijke bestanden en mappen met een wachtwoord. <br> · Weer zowel nieuwsgierige gebruikers van uw computer als hackers!</p>
      </dd>
    </dl>
  </div>
</div>
<!-- gift-message end -->

<!-- review start -->
<div class="review ">
  <div class="wrapper">
    <h2>Wat vinden anderen?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
          <dd>
            <h2>Mediabeoordeling</h2>
            <p>IObit Software Updater is gemaakt om het updaten van alle programma’s op uw computer simpel te maken. Het kan automatisch controleren of er nieuwe versies zijn en ze automatisch installeren, zelfs zonder dat de gebruiker iets hoeft te doen. Bovendien helpt het om populaire programma’s met verschillende doeleinden te downloaden en te installeren.</p>
            <cite>softpedia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
          <dd>
            <h2>Gebruikerservaringen</h2>
            <p>Ik heb IObit Software Updater op aanraden van een vriend, en ik ben erg tevreden over de snelheid en eenvoud die ook voldoen aan de wensen van een beginnende computergebruiker zoals ik. Ik ben blij dat ik door IObit Software Updater PRO aan te schaffen niet alleen een superprogramma heb, maar ook bijdraag aan IObit.</p>
            <cite>Nicolae Mocioc</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
          <dd>
            <h2>Gebruikerservaringen</h2>
            <p>De automatische updates zijn echt top! Het is snel en efficiënt. Het programma maakt ook een herstelpunt aan voor de installatie, gewoon voor het geval dat. Het is ook fijn dat het updates direct van de websites haalt, zodat ik niet meer verschillende websites hoef te openen. Kortom, een van de beste tools die ik ken!</p>
            <cite>Joshua Irving</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
          <dd>
            <h2>Gebruikerservaringen</h2>
            <p>Het is een geweldig software update programma! Het is gebruiksvriendelijk en simpel. Bovendien duidelijk, soepel en opvallend snel. Het ontwerp is ook overzichtelijk en modern en het is handig dat je zowel de huidige als de nieuwste versie van de programma’s kunt zien. Ook de tips voor nieuwe programma’s zijn leuk.</p>
            <cite>Nico Bremmer</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt>Vertrouwd door onderstaande media </dt>
        <dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
      </dl>
      <dl class="right">
        <dt> Verschillende betaalmethoden beschikbaar</dt>
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
      </dl>
    </div>
    <dl class="annotation">
      <dt>Opmerking:</dt>
      <dd>
        IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      IObit Software Update PRO
<!--      <span class="snow01"></span>-->
<!--      <span class="snow02"></span>-->
    </div>
    <!-- countdown -->
    <div class="number">
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
      </div>
      <p><span class="viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <strong class="buyNum">86</strong> over!</p>
    </div>
    <p class="price">
      <!-- price -->
      <span><strong>€<b>14</b>,99</strong> <del>€69,94</del></span>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=nl-isu23pcpf1499&ref=nl_isu23pcpf1499purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu"
         onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase1911-nl');">
        Activeer Nu
      </a>
    </p>
  </div>
</div>
<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>