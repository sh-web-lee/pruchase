<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float()*1000/20000) - 69041325;
$buyNum = number_format($buyNum);

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}
$viewNum=rand(60,88);

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $time = time();
  $c_name = 'esascuxmax2019' . $date;
  if (!isset($_COOKIE[$c_name])) {
    setcookie($c_name, '321'.'-'.$time, $time + 3600 * 24 *2);
  } else {
    $packsNum = explode('-',$_COOKIE[$c_name]);
    $outtime = $time-$packsNum[1];
    if($outtime>10){
      $addPacks = ceil($outtime/4);
      $packsNum = $_COOKIE[$c_name] + $addPacks;
    }else{
      $packsNum = $_COOKIE[$c_name] + 1;
    }
    setcookie($c_name, $packsNum.'-'.$time, $time + 3600 * 24 * 2);
  }
  echo json_encode(array('packsNum'=>$packsNum,'saleType'=>$saleType,'viewNum'=>$viewNum));
  exit();
}
$refStr='';
//if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
//    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
//  $refStr.='-'.$_GET['st'];
//}
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Tijdelijk met Gratis Cadeaus! Advanced SystemCare Ultimate – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Titillium+Web:400,600&display=swap" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <h1>Veilig, Snel en Krachtig!</h1>
    <p>Alles-in-één voor een Spectaculaire Prijs</p>
    <div class="offer small">
      <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/>
      <div class="price">
        <p><strong><big>€29,</big>99</strong> <del>€49,99</del></p>
        <a class="buybtn hollow"
           href="https://www.iobit.com/buy.php?product=nl-ascu143pc2999&ref=nl_au14purchase2007<?php echo $refStr;?>&aff=&refs=nl_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase2007-nl');">
          NU KOPEN 
        </a>
      </div>
    </div>
    <div class="offer big">
      <div id="topcount" class="countdown">
        <p>Tijdelijk met Gratis Cadeaus</p>
        <p>Nog maar <span><b>00</b>:<b>09</b>:<b>06</b>:<b>343</b></span></p>
      </div>
      <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/>
      <img class="gift" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
      <span class="discount">-75<small>%</small></span>
      <div class="price">
        <p><strong><big>€29,</big>99</strong> <del>€119,93</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-ascu14pfiu2999&ref=nl_au14pfiupurchase2007<?php echo $refStr;?>&aff=&refs=nl_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase2007-nl');">
          PROFITEER NU
        </a>
      </div>
      <!-- <div class="mask"><span class="sold-word"></span></div> -->
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <span class="arrow-down"></span>
  <div class="feature-wrap">
    <h2>Pas Op! Uw computer is in gevaar</h2>
    <p class="subtitle">Krijg Advanced SystemCare Ultimate terug en bescherm uw pc tegen:</p>
    <div class="feature-box">
      <div class="featur-screen">
        <div class="feature-list on">
          <img class="zoom" src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt=""/>
          <img class="icons one" src="<?php echo getStaticUrl('images/shied.png')?>" alt=""/>
        </div>
        <div class="feature-list">
          <img class="zoom" src="<?php echo getStaticUrl('images/feature-list02.png')?>" alt=""/>
          <img class="icons two" src="<?php echo getStaticUrl('images/spyware.png')?>" alt=""/>
        </div>
        <div class="feature-list">
          <img class="zoom" src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt=""/>
          <img class="icons three" src="<?php echo getStaticUrl('images/phishing.png')?>" alt=""/>
        </div>
        <div class="feature-list">
          <img class="zoom" src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt=""/>
          <img class="icons four" src="<?php echo getStaticUrl('images/privacyschending.png')?>" alt=""/>
        </div>
        <div class="feature-list">
          <img class="zoom" src="<?php echo getStaticUrl('images/feature-list05.png')?>" alt=""/>
          <img class="icons five" src="<?php echo getStaticUrl('images/ransomware.png')?>" alt=""/>
        </div>
        <div class="feature-list six">
          <img class="zoom" src="<?php echo getStaticUrl('images/feature-list06.png')?>" alt=""/>
        </div>
      </div>
      <ul class="feature-tab">
        <li class="one on"><i class="circle"></i> <span>Virussen</span></li>
        <li class="two"><i class="circle"></i> <span>Spyware</span></li>
        <li class="three"><i class="circle"></i> <span>Phishing</span></li>
        <li class="four"><i class="circle"></i> <span>Privacyschending</span></li>
        <li class="five"><i class="circle"></i> <span>Ransomware</span></li>
        <li class="six"><i class="circle"></i> <span>En veel meer Malware</span></li>
      </ul>
      <div class="feature-btn"><em class="on"></em><em></em><em></em><em></em><em></em><em></em></div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- feature02 start -->
<div class="feature feature02">
  <div class="wrapper">
    <h2>Uw Computer Wordt Steeds Trager!</h2>
    <p class="subtitle">Krijg Advanced SystemCare Ultimate terug en maak uw:</p>
    <div class="feature02-wrap">
      <div class="feature02-screen fl">
        <img class="on" src="<?php echo getStaticUrl('images/feature-list07.png')?>" alt=""/>
        <img src="<?php echo getStaticUrl('images/feature-list08.png')?>" alt=""/>
        <img src="<?php echo getStaticUrl('images/feature-list09.png')?>" alt=""/>
        <img src="<?php echo getStaticUrl('images/feature-list10.png')?>" alt=""/>
      </div>
      <ul class="feature02-list fr">
        <li class="on"><i class="icons one"></i> <span>PC 200% sneller</span></li>
        <li><i class="icons two"></i> <span>Internet 300% sneller</span></li>
        <li><i class="icons three"></i> <span>Register volledig schoon</span></li>
        <li><i class="icons four"></i> <span>RAM-geheugen vrij</span></li>
      </ul>
    </div>
  </div>
</div>
<!-- feature02 end -->

<!-- giftbox start -->
<div class="giftbox">
  <div class="wrapper">
    <span class="arrow-down"></span>
    <h2>Alleen Nu met 2 Gratis Cadeaus!</h2>
  </div>
  <div class="giftwrap">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""></dt>
        <dd>
          <strong>€0</strong> <del>€29,99</del>
          <p>Verwijder zelfs de hardnekkigste software, zonder restanten achter te laten.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""></dt>
        <dd>
          <strong>€0</strong> <del>€39,95</del>
          <p>Bescherm uw belangrijke bestanden en mappen met een wachtwoord.</p>
        </dd>
      </dl>
    </div>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=nl-ascu14pfiu2999&ref=nl_au14pfiupurchase2007<?php echo $refStr;?>&aff=&refs=nl_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase2007-nl');">
      Claim Mijn Cadeaus
    </a>
    <div id="midcount" class="countdown">
      <p>Nog maar <span><b>00</b>:<b>09</b>:<b>06</b>:<b>343</b></span> beschikbaar</p>
    </div>
    <!-- <div class="mask"><span class="sold-word"></span></div> -->
  </div>
</div>
<!-- giftbox end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>Geprezen door experts en gebruikers</h2>
    <span class="arrow-down"></span>
    <div class="review-wrap">
      <div class="review-box">
        <div class="review-list">
          <h3>Klantbeoordeling</h3>
          <p>
            "In het verleden had ik vaker problemen tijdens het sleutelen aan mijn computer. Toen kreeg ik de eerste versie van Advanced SystemCare. Nu is het niet meer nodig om aan mijn pc te sleutelen. Sinds ik deze anti-virus software geïnstalleerd heb, hoef ik nooit meer te zoeken naar nieuwe software. Advanced SystemCare Ultimate beschermt en versnelt mijn PC. De grote winnaar! Mijn computer is altijd up to date en werkt als een paard. Anders dan andere producten was er geen constante stroom van conflicten."
          </p>
        </div>
        <div class="review-list">
          <h3>Klantbeoordeling</h3>
          <p>
            “ De afgelopen jaren heb ik verschillende versies van Advanced SystemCare gebruikt. Toen ik de functies Advanced SystemCare Ultimate zag, wist ik meteen dat dit programma mij niet teleur zou stellen. Het is het meest gemakkelijke en meest effectieve programma die mijn drie computers laten lopen als nieuw.”
          </p>
        </div>
        <div class="review-list on">
          <h3>Media Recensie</h3>
          <p>
            “Naast het antiviruscomponent is de tool uitgerust met een Care-tab. Daarin vind je een berg aan optimalisatietools. Deze tools werken snel en erg goed. IObit detecteerd alle soorten problemen en zal eerst een herstelpunt aanmaken voordat deze problemen worden opgelost.”
          </p>
        </div>
        <div class="review-list">
          <h3>Klantbeoordeling</h3>
          <p>
            "Sinds ik Advanced SystemCare Ultimate geïnstalleerd heb, heb ik geen enkel probleem meer met mijn systeem of malware infecties enz. Nu Advanced SystemCare Ultimate een update heeft doorgevoerd met meerdere functies, loopt mijn computer 5x sneller dan voorheen. Ik vind de nieuwe interface ook aangenaam. De volgende keer als ik een computer repareer, raad ik Advanced SystemCare Ultimate aan als de beste anti-virus/systeem optimizer."
          </p>
        </div>
      </div>
      <ul class="review-tab">
        <li>
          <img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="Rod Garnett"/>
          <h5>PC Magazine</h5>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/russell-peck.png')?>" alt="Russell Peck"/>
          <h5>PC Magazine</h5>
        </li>
        <li class="on">
          <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine"/>
          <h5>PC Magazine</h5>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt="Dareen Lim"/>
          <h5>Dareen Lim</h5>
        </li>
      </ul>
    </div>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- review end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper">
    <span class="arrow-down"></span>
    <h2>Kies Nu een Schone, Snelle en Veilige PC</h2>
    <p class="subtitle">Alles-in-één voor de Beste Prijs!</p>
    <div class="clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/>
        <img class="gift" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
        <span class="discount">-75<small>%</small></span>
      </div>
      <div class="price fr">
        <div id="botcount" class="countdown">
          <p>Tijdelijk met Gratis Cadeaus</p>
          <p>Nog maar <span><b>00</b>:<b>09</b>:<b>06</b>:<b>343</b></span></p>
        </div>
        <p><strong><big>€29,</big>99</strong> <del>€119,93</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-ascu14pfiu2999&ref=nl_au14pfiupurchase2007<?php echo $refStr;?>&aff=&refs=nl_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase2007-nl');">
          PROFITEER NU
        </a>
      </div>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <div class="service">
      <span>Toch nog ontevreden? Krijg tijdens de eerste <b>60</b> dagen zonder problemen het volledige bedrag terug.</span>
      <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/>
    </div>
    <dl class="note">
      <dt>Opmerkingen:</dt>
      <dd>Resulaten kunnen afwijken per computer en systeem.</dd>
      <dd>IObit behoudt zich het recht voor aanbiedingen zonder aankondiging te wijzigen.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
  </div>
</div>
<!-- footer end -->


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>