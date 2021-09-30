<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(64,96);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='enimfpre'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 48;
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
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
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
  <meta name="format-detection" content="telephone=no,email=no,address=no"> 
  <title>75% Korting op IObit Malware Fighter 7 PRO, exclusief in de voorverkoop!</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/nl/index.php" class="logo" target="_blank">IObit</a>
      <h1>75% Korting Tijdens de Voorverkoop!</h1>
      <p class="fast">100 beschikbaar per dag, pak deze kans nu het nog kan!</p>
      <div class="clearfix">
        <div class="left-img"><span></span></div>
        <div class="right-message">
          <h2>IObit Malware Fighter 7 PRO</h2>
          <div class="progress">
            <p>Slechts <strong class="packnum">*</strong> over, al <strong class="buyNum">*</strong> verkocht!</p>
            <div class="bar">
              <span class="box"><span><span class="disappear"></span></span></span>
            </div>
          </div>
          <p class="price">
            Nu: <strong>€<b>16</b>,99</strong> <del>€79,99</del>
          </p>
          <!-- buybtn -->
           <a class="buybtn"
              href="https://www.iobit.com/buy.php?product=nl-imf7preorder1y3pc1699&ref=nl_imf7preorder1y3pc1699<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf"
              onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderofficial-nl');">
             <span>Bestel Nu</span>
           </a>
        </div>
      </div>
      <div class="step">
        <span>
          U kunt direct na de bestelling aan de slag met de RC versie van IObit Malware Fighter 7 PRO. Deze versie bevat vrijwel alle functies van het nieuwe IObit Malware Fighter 7 PRO.  <br>
          Bij de officiële lancering van IObit Malware Fighter 7, laten we u weten dat u kunt updaten naar de definitieve versie.
        </span>
      </div>
    </div>
    
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature">
    <div class="wrapper">
      <h2>WAT HEEFT IOBIT MALWARE FIGHTER 7 PRO TE BIEDEN? </h2>
      <h3><i>1</i> Krachtige PC-Bescherming Houdt Bedreigingen Buiten</h3>
      <div class="details">
        <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt=""/>
        <div class="list one">
          <h4>Beschermd met Bitdefender Engine</h4>
          <p>200.000.000+ bedreigingen zoals Adware, Trojan en Spyware worden tegengehouden.</p>
          <span>*exclusief met PRO</span>
        </div>
        <div class="list two">
          <h4>Blokkeer USB-virussen</h4>
          <p>Virussen verborgen in USB-schijven krijgen geen toegang tot uw computer.</p>
          <span>*exclusief met PRO</span>
        </div>
        <div class="list three">
          <h4>Update Database Automatisch</h4>
          <p>Zelfs de nieuwste bedreigingen kunnen uw computer niet beschadigen.</p>
          <span>*exclusief met PRO</span>
        </div>
      </div>
    </div>
  </div>
  <div class="feature feature2">
    <div class="wrapper">
      <h3 class="num-two"><i>2</i> Nieuwe en Volledige Gegevens Bescherming Houdt Hackers Buiten</h3>
      <div class="details">
        <img src="<?php echo getStaticUrl('images/feature-imgbox-two.png')?>" alt=""/>
        <div class="list four">
          <h4>Voorkom Ransomware-aanvallen</h4>
          <p>Hackers kunnen niet inbreken en uw belangrijke bestanden versleutelen.</p>
          <span>*exclusief met PRO</span>
        </div>
        <div class="list five">
          <h4>
            Bescherm Persoonlijke <br>
            Gegevens
          </h4>
          <p>Niemand krijgt toegang tot uw persoonlijke gegevens zonder wachtwoord.</p>
          <span>*exclusief met PRO</span>
        </div>
      </div>
      <h3 class="num-three"><i>3</i> Uitgebreide Browser Bescherming Garandeert Online Veiligheid </h3>
      <div class="details-two clearfix">
        <dl class="list six">
          <dt><h4>Schoon & Veilig Online Browsen</h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dd>
          <dd><p>Blokkeer schadelijke websites, voorkom cryptomunt mining en verwijder vervelende pop-ups.</p></dd>
        </dl>
        <dl class="list">
          <dt><h4>Veilige Downloads</h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></dd>
          <dd><p>Controleer automatisch gedownloade bestanden en e-mailbijlagen.</p></dd>
        </dl>
        <dl class="list seven">
          <dt><h4>Wis Sporen Automatisch</h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></dd>
          <dd><p>Wis automatisch online sporen om uw privacy te beschermen. </p></dd>
          <dd><span>*exclusief met PRO</span></dd>
        </dl>
      </div>
    </div>
  </div>

  <!-- review start -->
  <div class="review wrapper">
    <h2>Zoals u ziet, wereldwijd gewaardeerd!</h2>
    <div id="dg-container" class="dg-container">
      <!-- nav -->
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <!-- software -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/software.png" alt=""></dt>
          <dd>
            <h2>Media recensie</h2>
            <p>"Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren." </p>
            <cite>Software.Informer</cite>
          </dd>
        </dl>
        <!-- Bob Bassett -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/Bob-Bassett.png" alt=""></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!” </p>
            <cite>Bob Bassett</cite>
          </dd>
        </dl>
        <!-- Peter Stoffers -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/Peter-Stoffers.png" alt=""></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden." </p>
            <cite>Peter Stoffers</cite>
          </dd>
        </dl>
        <!-- Gelu Batir -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/Gelu-Batir_771.png" alt=""></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."</p>
            <cite>Gelu Batir</cite>
          </dd>
        </dl>
        <!-- David Cassidy -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/David-Cassidy_362.png" alt=""></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."</p>
            <cite>David Cassidy</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <div class="bottom">
      <div class="award wrapper ">
        <h2>WERELDWIJDE AWARDS</h2>
        <p>Dankzij het vertrouwen en de prijzen die we in de afgelopen zes jaar hebben gekregen van deze media weet u dat u bij ons goed zit.</p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>
            Probeer ZONDER RISICO – <small>met onze 60 dagen <br>
              niet-goed-geld-terug garantie </small>
          </h4>
          <p>
            Door PRO te activeren wordt uw pc vollledig beschermd voor een schappelijke prijs.
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
    <!-- service end -->
    <!-- annotation
    <dl class="annotation wrapper">
      <dt>Note: </dt>
      <dd>*At the end of the 30-day free trial period, your credit card or PayPal account will be charged $24.95 automatically. </dd>
      <dd> This 55% discount from the original price of $54.95 is bonus only for preorders!</dd>
    </dl>
    -->

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
    </div>
  </div>



  <div class="float-right">
    <img src="<?php echo getStaticUrl('images/people.png')?>"> <span class="viewNum"><?php echo $viewNum;?></span> bekijken nu deze deal!
  </div>
  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-imf-box.png')?>" alt=" IObit Malware Fighter 7 PRO"></div>
      <div class="progress">
        <p>Slechts <strong class="packnum">*</strong> over, al <strong class="buyNum">*</strong> verkocht!</p>
        <div class="bar">
          <span class="box"><span><span class="disappear"></span></span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=nl-imf7preorder1y3pc1699&ref=nl_imf7preorder1y3pc1699<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderofficial-nl');">
        <span>Bestel Nu! -75%</span>
      </a>
    </div>
  </div>
  <div class="pop-over ">
    <h2>HELAAS!De aanbieding is uitverkocht!</h2>
    <h3><strong>Mis deze actieprijs niet!</strong></h3>
    <img src="<?php echo getStaticUrl('images/pop-img-box.png')?>" alt=" IObit Malware Fighter 7 PRO" class="img-box">
    <div class="message">
       <p><strong>€<b>19</b>,99</strong> <del>€79,99</del></p>
       <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=nl-imf7preorder1y3pc1999&ref=nl_imf7preorderofficial1y3pc1999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderofficial1999-nl');">
         <span>Bestel Nu</span>
      </a>
      <p class="last">1-jarig abonnement/ 3 pc’s</p>
    </div>
   
  </div>
  <div class="pop-bg "></div>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>