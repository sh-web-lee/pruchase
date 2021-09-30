<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Exclusieve aanbieding voor IObit klanten: 65% korting op iFun Screen Recorder</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Clean, Fast and Secure PC Easily!">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="Exclusieve aanbieding voor IObit klanten: 65% korting op iFun Screen Recorder">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://recorder.iobit.com/nl/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>Neem alles op uw scherm op zonder watermerk of beperkingen</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot-asc.png')?>" alt="" />
        <div class="discount fl">
          <h2><b>65%</b> <span>KORTING</span></h2>
          <p>Esclusivo per gli VIP di IObit</p>
        </div>
      </div>
      <div class="price">
        <p>SLECHTS: <strong>€16,99 </strong><del>€49,99</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=nl-isr11y1pc1699&ref=nl_isr11y1pc1699-ac<?= $refStr; ?>&refs=nl_purchase_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-nl')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Nu Activeren</span>
              </div>
        </a>
        <span>1 Jaar / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <h2 class="feature-h2">Waarom heeft u iFun Screen Recorder PRO nodig?</h2>
  <div class="feature wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>KIES WELK DEEL VAN UW SCHERM U OPNEEMT</h3>
          <p>Selecteer een venster of een aangepast gebied op uw scherm en neem het precies zo op als u zelf wilt.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>NEEM WEBCAM EN MICROFOON OP</h3>
          <p>Neem uw scherm, webcam en microfoon tegelijk op zodat u uw kijkers kunt vertellen wat u doet. Ideaal voor tutorials, gameplay video’s en online lessen.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>VERWIJDER HET WATERMERK</h3>
          <p>Met iFun Screen Recorder PRO heeft u geen last van ons watermerk op uw video en <strong style="color: #b80000; font-weight: 500;"> voegt u zelfs uw eigen watermerk toe </strong> indien gewenst!</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>NEEM ZO LANG OP ALS U WILT</h3>
          <p>Gratis screen recorders nemen meestal maar een paar minuten op, maar met iFun Screen Recorder PRO neemt u zo lang op als u wilt. Neem hele films, colleges en uren gameplay op.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""></dt>
        <dd>
          <h3>MAAK VIDEO’S VAN TOPKWALITEIT</h3>
          <p>Onze GPU-versnelling  garandeert topkwaliteit met tot wel 4K resolutie en 60 FPS voor prachtige video’s zonder haperingen.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""></dt>
        <dd>
          <h3>BEWERK UW VIDEO</h3>
          <p>Gelijk na het opnemen kunt u uw video bewerken zonder dat u aparte software nodig heeft. Maak direct uw perfecte video!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Ontdek onze wereldwijde Awards</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Klantbeoordeling</span></h2></dt>
          <dd>
            <p>
              "Tot nu toe vind ik iFun Screen Recorder super. Het is echt screen capture software die heel gemakkelijk in gebruik is. Ik wilde een video opnemen met mijn laptop, maar ik wist niet hoe. Met iFun Screen Recorder neem ik zelfs screenshots tijdens het opnemen in HD en voeg ik na het opnemen tekst toe aan de video. Dan upload ik mijn video op Instagram en krijg ik altijd veel reacties. Dankzij de engagement met mijn video’s gaat het steeds beter met mijn business."
            </p>
           <cite>Elsie Weston</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Klantbeoordeling</span></h2></dt>
          <dd> 
            <p>
              "Ik kwam deze gratis screen recorder een tijdje geleden tegen en was direct fan, met name door de eenvoudige editing opties. Ik neem vaak mijn scherm op om mensen te helpen met computerproblemen en met deze software kan ik zelfs mijn stem erbij opnemen om uit te leggen wat mensen moeten doen. Ik upload de video direct naar YouTube na het opnemen. Dat opnemen en editen samen in één programma zitten is super handig voor youtubers zoals ik die tutorials willen delen!"
            </p>
            <cite>Enrico Valencia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Klantbeoordeling</span></h2></dt>
          <dd>
            <p>
              "Voor mijn werk heb ik vaak schermopname software nodig. Ik had moeite de ideale gratis screen recorder te vinden, maar iFun Screen Recorder is echt perfect voor het opnemen van teleconferenties en online meetings! Ik kan mijn scherm opnemen in HD en de video’s naar verschillende soorten bestanden omzetten. iFun Screen Recorder is sterk aan te raden!"
            </p>
            <cite>Marielle Irvine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Klantbeoordeling</span></h2></dt>
          <dd>
            <p>
              "Hallo! Uw fantastische gratis screen recorder heeft me verrast. Ik kan al mijn waardevolle momenten opnemen met iFun Screen Recorder, ik gebruik het vooral voor livestreams opnemen. Mijn opnames zijn van extreem goede kwaliteit. Ik kan ze opslaan en direct naar mijn vrienden sturen. In het begin was ik niet zo zeker van de software, maar de resultaten zijn geweldig!"
            </p>
            <cite>Robbins Hilton</cite>
          </dd>
        </dl>
      </div>
      <ul class="switchHead">
		<li class="active" ><img src="<?php echo getStaticUrl('images/user1.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user2.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user3.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user4.png')?>"></li>
      </ul>
    </div>
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Maak topkwaliteit video’s zonder watermerk of beperkingen</h2>
      <div class="price">
        <p>SLECHTS: <strong>€16,99 </strong><del>€49,99</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=nl-isr11y1pc1699&ref=nl_isr11y1pc1699-ac<?= $refStr; ?>&refs=nl_purchase_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-nl')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Nu Activeren</span>
              </div>
        </a>
        <span>1 Jaar / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  
  <!-- container end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <!-- <p class="annotation" >*Opmerking:.Data kan variëren afhankelijk van verschillende computer systemen.</p> -->
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer" style="margin-top: 0;">©2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>Exclusieve Aanbieding</h2>
        <p><strong>65% Korting</strong> op schermopnames zonder beperkingen</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>SLECHTS: <strong>€16,99 </strong><del>€49,99</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=nl-isr11y1pc1699&ref=nl_isr11y1pc1699-ac<?= $refStr; ?>&refs=nl_purchase_isr"
               onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-nl')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Nu Activeren</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>