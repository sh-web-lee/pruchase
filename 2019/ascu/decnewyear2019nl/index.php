<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;
$buyNum = number_format($buyNum);

$packsNum = ceil(microtime_float()*2000/20000);
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit;
}
$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Gelukkig Nieuwjaar: 75% korting op Advanced SystemCare Ultimate - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700" rel="stylesheet">
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
    <!-- stars -->
    <div class="stars">
      <span class="one"></span>
      <span class="two"></span>
      <span class="three"></span>
      <span class="four"></span>
      <span class="five"></span>
    </div>
    <!-- title -->
    <h1>Gelukkig Nieuwjaar!</h1>
    <h4>
      Deze aanbieding verloopt in <span class="countdown"><b>08</b> uur <b>11</b> min <b>30</b> sec <b class="last">686</b> ms *</span>
    </h4>
    <!-- content -->
    <div class="clearfix">
      <!-- left-message -->
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="">
      </div>
      <!-- right-message -->
      <div class="offer fl">
        <h3>Advanced SystemCare Ultimate 12 <strong>29,99 <b><del>49,99</del></b></strong></h3>
        <span class="sign">1 jaar / 3 PC’s</span>
        <ul>
          <li>
            <i class="all-icons"></i> IObit Uninstaller 8 PRO <strong>GRATIS <b><del>29,99</del></b></strong>
          </li>
          <li>
            <i class="all-icons"></i> Protected Folder <strong>GRATIS <b><del>39,95</del></b></strong>
          </li>
        </ul>
        <div class="price">
          <p>slechts <strong>29<small>99</small></strong> van <del>119,93</del></p>
          <p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-au12pfiu2999&ref=nl_au12pfiupurchase1812<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812-nl')">
              <i class="all-icons"></i> Koop Nu
            </a>
          </p>
          <p class="people"><i class="all-icons"></i> Al <b>8,781,335</b> keer geactiveerd!</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <div class="wrapper clearfix">
    <dl class="fl">
      <dt>Betaalmethoden</dt>
      <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dd>
    </dl>
    <dl>
      <dt>60 dagen niet goed-geld-terug-garantie</dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
    </dl>
    <dl class="fr">
      <dt>Veilig betalen</dt>
      <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dd>
    </dl>
  </div>
</div>
<!-- payment end -->

<div class="hightlight wrapper">
  <h2>Razendsnelle PC & ultieme beveiliging met de antivirus scanner van Bitdefender</h2>
  <div class="cont clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
    <div class="fl">
      <ul>
        <li>
          <i class="all-icons"></i>
          <span>Bescherm uw PC tegen virussen, malware en phishing websites.</span>
        </li>
        <li>
          <i class="all-icons"></i>
          <span>Bescherm uw computer tegen alle vormen van Ransomware waaronder WannaCry 2.0.</span>
        </li>
        <li>
          <i class="all-icons"></i>
          <span>Bescherm uw persoonlijke mappen en bestanden.</span>
        </li>
        <li>
          <i class="all-icons"></i>
          <span>Blaas nieuw leven in uw computer en versnel uw systeem met maar 1-klik.</span>
        </li>
        <li>
          <i class="all-icons"></i>
          <span>Volledig compatibel met andere antivirus software.</span>
        </li>
      </ul>
      <img class="awards" src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
</div>

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper">
    <!-- gift-box title -->
    <h2 style="">Nog maar een beperkt aantal pakketten beschikbaar!</h2>
    <p><i class="all-icons"></i> Nog maar <b class="packsNum"><?php echo $packsNum ?></b> cadeaupakketten op voorraad</p>
    <div class="clearfix">
      <!-- PF -->
      <dl class="pf-box clearfix">
        <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""></dt>
        <dd>
          <h3>IObit Uninstaller 8 PRO</h3>
          <p><b>€0,- <del>€29,99</del>     1 Jaar / 1 PC</b></p>
          <p>· Verwijder hardnekkige programma’s, plug-ins <br><span>en restbestanden met 1-klik.</span></p>
        </dd>
      </dl>
       <!-- IU -->
      <dl class="iu-box clearfix">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""></dt>
        <dd>
          <h3>Protected Folder</h3>
          <p><b>€0,- <del>€39,95</del>     1 Jaar / 1 PC</b></p>
          <p>· Beveilig uw mappen, bestanden en overige data met 1 <br><span>wachtwoord.</span></p>
        </dd>
      </dl>
    </div>
    <div class="price">
      <p><strong>29<small>99</small></strong>  <del>119,93</del></p>
      <a class="buybtn orange" href="https://www.iobit.com/buy.php?product=nl-au12pfiu2999&ref=nl_au12pfiupurchase1812<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812-nl')">
        <i class="all-icons"></i> Koop Nu
      </a>
      <p>Wees er snel bij!</p>
    </div>
  </div>
</div>
<!-- gift-box end -->

<!--award-->
<div class="wrapper award clearfix">
  <h2>Vertrouwd en bekroond door de volgende media</h2>
  <img src="<?php echo $pResUrl; ?>images/award.png" alt=""/>
</div>
<!-- review -->
<div class="review wrapper clearfix">
  <div class="reviews active">
    <h2>Media Recensie</h2>
    <p>“Naast het antiviruscomponent is de tool uitgerust met een Care-tab. Daarin vind je een berg aan optimalisatietools. Deze tools werken snel en erg goed. IObit detecteerd alle soorten problemen en zal eerst een herstelpunt aanmaken voordat deze problemen worden opgelost.”</p>
  </div>
  <div class="reviews">
    <h2>Klantbeoordeling</h2>
    <p>"In het verleden had ik vaker problemen tijdens het sleutelen aan mijn computer. Toen kreeg ik de eerste versie van Advanced SystemCare. Nu is het niet meer nodig om aan mijn pc te sleutelen. Sinds ik deze anti-virus software geïnstalleerd heb, hoef ik nooit meer te zoeken naar nieuwe software. Advanced SystemCare Ultimate beschermt en versnelt mijn PC. De grote winnaar! Mijn computer is altijd up to date en werkt als een paard. Anders dan andere producten was er geen constante stroom van conflicten."</p>
  </div>
  <div class="reviews ">
    <h2>Klantbeoordeling</h2>
    <p>"Sinds ik Advanced SystemCare Ultimate geïnstalleerd heb, heb ik geen enkel probleem meer met mijn systeem of malware infecties enz. Nu Advanced SystemCare Ultimate een update heeft doorgevoerd met meerdere functies, loopt mijn computer 5x sneller dan voorheen. Ik vind de nieuwe interface ook aangenaam. De volgende keer als ik een computer repareer, raad ik Advanced SystemCare Ultimate aan als de beste anti-virus/systeem optimizer."</p>
  </div>
  <div class="reviews">
    <h2>Klantbeoordeling</h2>
    <p>“ De afgelopen jaren heb ik verschillende versies van Advanced SystemCare gebruikt. Toen ik de functies Advanced SystemCare Ultimate zag, wist ik meteen dat dit programma mij niet teleur zou stellen. Het is het meest gemakkelijke en meest effectieve programma die mijn drie computers laten lopen als nieuw.”</p>
  </div>
  <ul class="handle clearfix">
    <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="Rod Garnett"><span></span></div>
      <strong>PC Magazine</strong>
    </li>
    <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett"><span></span></div>
      <strong>Rod Garnett</strong>
    </li>
    <li class="active">
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"><span></span></div>
      <strong>Dareen Lim</strong>
    </li>
    <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="Russell Peck"><span></span></div>
      <strong>Russell Peck</strong>
    </li>
  </ul>
</div>
<!--comparison-->
<div class="intro">
  <div class="wrapper">
    <h2>Advanced SystemCare Ultimate</h2>
    <p>Biedt volledige bescherming tegen virussen, spyware &amp; malware</p>
    <div class="screen"><img src="<?php echo $pResUrl; ?>images/screen.jpg" alt=""></div>
    <div class="box clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
        <dd>Samen met de antivirus scanner van Bitdefender, beschermt Advanced SystemCare Ultimate tegen virussen, spyware, DNS aanvallen, en alle varianten van ransomware waaronder WannaCry 2.0</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
        <dd>Adblocker voorkomt dat u gebombardeerd wordt met vervelende of opdringerige pop-ups.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
        <dd>Met Advanced SystemCare Ultimate 12 kunt u met 1-klik uw PC opschonen en versnellen. </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
        <dd>Advanced SystemCare Ultimate zorgt voor een snellere opstarttijd en versnelt de internetsnelheid met wel 300%*.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></dt>
        <dd>Advanced SystemCare Ultimate beveilgt uw systeem tegen phising websites en zorgt ervoor dat kwaadaardige websites u niet kunnen traceren.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/icons06.png" alt=""></dt>
        <dd>FaceID legt indringers vast op camera die in het geheim toegang proberen te verkrijgen tot uw persoonlijke gegevens door middel van de vernieuwde gezichtsherkenningstechnologie</dd>
      </dl>
    </div>
  </div>
</div>

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper clearfix">
    <div class="left-message reduce-box fl">
      <img src="<?php echo getStaticUrl('images/boxsort-ascu-bottom.png')?>" alt=""/>
    </div>
    <dl class="content fl">
      <dt>
        <h3 class="clearfix">¡Cantidades limitadas! Sólo 089 disponibles ahora!</h3>
        <span class="countdown"><b class="one" data-text="08">08</b><b class="two" data-text="11">11</b><b class="three" data-text="30">30</b><b data-text="686">686</b></span>
      </dt>
      <dd>
        <p class="price"><strong>29<small>99</small></strong> <del>€119,93</del></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-au12pfiu2999&ref=nl_au12pfiupurchase1812<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812-nl')">
          <i class="all-icons"></i> Koop Nu
        </a>
        <p class="people">Al <b>8,781,335</b> keer geactiveerd!</p>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--footer-->
<div class="footer-bg clearfix">
  <div class="wrapper footer clearfix">
    <p class="note">
      Opmerking:<br>
      *Data kan variëren afhankelijk van verschillende computer systemen
    </p>
    <p class="copyright">
      Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden
    </p>
  </div>
</div>

<div class='popout'><p>De licentiecode van ASCU v11 blijft ook gewoon <strong>geldig voor ASCU v12</strong>.</p></div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>