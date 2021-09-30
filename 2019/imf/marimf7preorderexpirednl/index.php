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
  $c_name='nlimfpre'.$date;
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

$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['expday'])?'':('-'.$_GET['expday']));
$transData=$_GET['fileto'].$_GET['rsto'].$_GET['traceto'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <meta name="format-detection" content="telephone=no,email=no,address=no"> 
  <title>Probeer IObit Malware Fighter 7 PRO voor €0 in de voorverkoop!</title>
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
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <h1>Probeer de Gloednieuwe Versie tijdens de Voorverkoop voor €0</h1>
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
            Nu: <strong>€<b>0</b></strong> <del>€79,99</del>
          </p>
          <!-- buybtn -->
           <a class="buybtn" href="https://www.iobit.com/buy.php?product= nl-imf7preorder30d&ref=nl_imf7preorder30dexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf"
              onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired-nl');">
                 <span>Bestel Nu</span>
           </a>
        </div>
      </div>
       <div class="step">
        <span>Annuleer binnen 30 dagen en betaal niets</span>
        <strong> <span>Ontevreden?</span>Nu €0 in de Voorverkoop <span class="right">Tevreden?</span></strong>
        <span>Betaal na 30 dagen en krijg 70% korting</span>
      </div>
    </div>
    
  </div>
  <!-- end banner -->
  <!-- feature -->
   <div class="main-bg">
      <!-- feature -->
      <div class="feature wrapper clearfix">
        <h2>Weet u nog hoe IObit Malware Fighter PRO u Beschermde?</h2>
        <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt="" class="img-box">
        <div class="message">
          <dl <?php echo empty($transData)?'class="emp"':'';?>>
            <dt>Verwijderde</dt>
            <?php if(!empty($_GET['fileto'])):?>
            <dd><strong><?php echo number_format($_GET['fileto'])?></strong></dd>
            <?php endif;?>
            <dd>bedreigingen om uw pc en persoonlijke gegevens veilig te houden</dd>
          </dl>
          <dl <?php echo empty($transData)?'class="emp"':'';?>>
            <dt>Blokkeerde</dt>
            <?php if(!empty($_GET['rsto'])):?>
            <dd><strong><?php echo number_format($_GET['rsto'])?></strong></dd>
            <?php endif;?>
            <dd>ransomware-aanvallen die uw bestanden hadden kunnen versleutelen</dd>
          </dl>
          <dl <?php echo empty($transData)?'class="emp"':'';?>>
            <dt>Wiste</dt>
            <?php if(!empty($_GET['traceto'])):?>
            <dd><span><?php echo number_format($_GET['traceto'])?></span></dd>
            <?php endif;?>
            <dd>online sporen om privacyschending te voorkomen</dd>
          </dl>
          <dl <?php echo empty($transData)?'class="emp"':'';?>>
            <dt>Bood grondige</dt>
            <dd><span>realtime </span></dd>
            <dd>bescherming om verdachte activiteit te blokkeren </dd>
          </dl>
         </div>
      </div>
      <!-- benfits -->
      <div class="compar-tab wrapper clearfix">
        <h2>U BENT UW VOLLEDIGE BESCHERMING KWIJT! <br> U RISKEERT DE VEILIGHEID VAN UW SYSTEEM EN BESTANDEN </h2>
        <div class="message">
          <h3>U mist…</h3>
          <p><i></i> Bitdefender anti-virus engine</p>
          <p><i></i> Anti-ransomware engine</p>
          <p><i></i> Kluis</p>
          <p><i></i> Camerabescherming</p>
          <p><i></i> USB Schijfbescherming</p>
          <p><i></i> Anti-tracking</p>
          <p><i></i> Automatisch database bijwerken</p>
        </div>
        <div class="message right">
          <h3>U riskeert… </h3>
          <p><i></i> dat virussen binnendringen en gegevens stelen</p>
          <p><i></i> dat belangrijke bestanden worden versleuteld</p>
          <p><i></i> dat anderen uw bestanden inzien</p>
          <p><i></i> dat programma’s stiekem uw camera aanzetten</p>
          <p><i></i> dat virussen via USB-poorten binnenkomen</p>
          <p><i></i> dat hackers uw online privacy schenden</p>
          <p><i></i> dat de nieuwste bedreigingen niet herkend worden</p>
        </div>
      </div>
      <!-- end benfits -->
      <div class="more-than wrapper">
        <h2>HET NIEUWE IOBIT MALWARE FIGHTER 7 PRO BIEDT MEER</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
          <dd><strong>60% Grotere </strong></dd>
          <dd>Malware Database</dd>
        </dl>
        <dl class="center">
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd><strong>Wachtwoord bescherming </strong></dd>
          <dd>Voor Persoonlijke Bestanden</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
          <dd><strong>300% Sneller  </strong></dd>
          <dd>Bedreigingen Scannen</dd>
        </dl>
      </div>
    </div>

  <div class="review wrapper">
    <h2>EXPERTS EN GEBRUIKERS WAARDEREN HET!</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Media recensie</h2>
              <p>"Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren." </p>
              <cite>Software.Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!” </p>
              <cite>Bob Bassett</cite>
            </dd>
          </dl> 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/peterp-stoffers.png')?>" alt="Peter Stoffers"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden." </p>
              <cite>Peter Stoffers</cite>
            </dd>
          </dl> 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/dave-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."</p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>                 
        </div>               
    </div>
  </div>
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
          <h4>Probeer ZONDER RISICO – met onze 60 dagen <br>niet-goed-geld-terug garantie</h4>
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
    <p class="note wrapper">
      *Aan het einde van de 30 dagen proeftijd, wordt automatisch €21,95 van uw credit card of PayPal account afgeschreven. Deze prijs bevat 70% voorverkoopkorting op de <br> originele prijs van €79,99.
    </p>
    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
    </div>
  </div>



  <div class="float-right">
    <img src="<?php echo getStaticUrl('images/people.png')?>"> <strong class="viewNum"><?php echo $viewNum;?></strong> bekijken nu deze deal!
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
      <a class="buybtn" href="https://www.iobit.com/buy.php?product= nl-imf7preorder30d&ref=nl_imf7preorder30dexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired-nl');">
            <span>Bestel Nu - €0</span>
      </a>
    </div>
  </div>
  <div class="pop-over ">
    <h2>HELAAS! De aanbieding is uitverkocht!</h2>
    <h3>Mis deze actieprijs niet!</h3>
    <img src="<?php echo getStaticUrl('images/pop-img-box.png')?>" alt=" IObit Malware Fighter 7 PRO" class="img-box">
    <div class="message">
       <p><strong>€<b>19</b>,99</strong> <del>€79,99</del></p>
       <a class="buybtn"
         href="https://www.iobit.com/buy.php?product= nl-imf7preorder1y3pc1999&ref=nl_imf7preorderexpired1999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired1999-nl');">
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