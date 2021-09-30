<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='frasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_dbasc','x_ascdb','xr_ascdb'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Advanced SystemCare PRO en Driver Booster PRO Combo met 76% Korting! Speciale Kerstaanbieding</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/nl/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>Speciale Kerstaanbieding</h1>
      <p class="best">Uw Laatste Kans op een Grote Besparing – Slechts 1 keer per jaar!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>Driver Booster 6 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Wees er snel bij! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms over</p>
            </div>
            <p><strong>€29<big>,</big></strong> <span> 99 <del>€124,84</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-asc12db63pc2999&ref=nl_asc12db6rightcorner2999purchase1811a<?php echo $refStr;?>&refs=nl_purchase_asc"
               onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018a-nl')">
              Activeer Nu
            </a>
            <p class="year">1-jarig abonnement/ 3 PC’s</p>
          </div>
        </div>
      </div>
    </div>
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>IObits Dubbele Zekerheid: Soepelere PC & Beter Gamen</h2>
      <p class="over">Driver Booster 6 PRO garandeert samen met het toonaangevende optimalisatieprogramma – Advanced SystemCare 12 PRO, dat uw computer stabiel & snel is en dat u zonder problemen kunt gamen.</p>
    </div>
  </div>
  <!-- feature end -->

  <!-- together start -->
  <div class="together">
    <div class="wrapper">
      <div class="panel clearfix">
        <div class="asc-box fl clearfix on">
          <div class="box fl">
            <h3>Advanced SystemCare 12 PRO<i></i></h3>
            <dl>
              <dt><strong>Stabiel systeem</strong> waarop geen</dt>
              <dd>
                overbodige register items <br>
                opstapelen.
              </dd>
            </dl>
            <dl>
              <dt><strong>Betere gameprestaties</strong> doordat</dt>
              <dd>
                onnodige processen automatisch <br>
                gestopt worden en meer RAM <br>
                beschikbaar komt.
              </dd>
            </dl>
            <dl>
              <dt><strong>PC reageert sneller</strong> dankzij </dt>
              <dd>
                300% sneller internet en 200% sneller <br>
                opstarten.
              </dd>
            </dl>
          </div>
          <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
        </div>
        <div class="db-box fl clearfix on">
          <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
          <div class="box fl">
            <h3><i></i>Driver Booster 6 PRO</h3>
            <dl>
              <dt><strong>Games laden sneller</strong> dankzij de</dt>
              <dd>
                noodzakelijke en laatste <br>
                gamecomponenten.
              </dd>
            </dl>
            <dl>
              <dt><strong>Betere pc-prestaties</strong> doordat </dt>
              <dd>
                3.000.000+ drivers bijgewerkt <br>
                kunnen worden.
              </dd>
            </dl>
            <dl>
              <dt><strong>Betere game-ervaring</strong> met </dt>
              <dd>
                Game Ready Drivers en <br>
                gamecomponenten die worden bijgewerkt.
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- together end -->

  <!-- features -->
  <div class="features">
    <div class="wrapper">
      <h2>Geniet ook van deze geweldige functies:</h2>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></span>
          <p>
            Bescherming van Persoonlijke Gegevens
          </p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></span>
          <p>
            Digitale Vingerafdruk Beschermen
          </p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></span>
          <p>
            Automatisch Drivers Updaten
          </p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></span>
          <p>
            Apparaatfouten Oplossen
          </p>
        </li>
      </ul>
    </div>
  </div>
  <!-- end features -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Kies Nu Deze Twee Krachtige Programma’s Voor Betere PC- en Gameprestaties </h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
          </p>
        </div>
        <p><strong>€29<big>,</big></strong> <span> 99 <del>€124,84</del> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-asc12db63pc2999&ref=nl_asc12db6rightcorner2999purchase1811b<?php echo $refStr;?>&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018b-nl')">
          Activeer Nu
        </a>
        <p class="year">1-jarig abonnement/ 3 PC’s</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->


  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Vertrouwd en bekroond door de volgende media</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div class="review-box">
      <div class="reviews clearfix">
        <h2>Klantbeoordeling</h2>
        <p>"Dit is een van de beste driver update software op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkte perfect. Eenvoudig te gebruiken, informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven... Goed gedaan!" </p>
      </div>
      <div class="reviews clearfix">
        <h2>Klantbeoordeling</h2>
        <p>"Met Driver Booster werk ik alle drivers gemakkelijk bij. Daarnaast lost dit programma allerlei foutmeldingen op zoals geen geluid, netwerkfouten, apparaat fouten enz. Voordat ik dit programma downloadde, geloofde ik niet dat dit programma mijn computer nog kon redden, maar nu ben ik helemaal overtuigd en loopt mijn PC weer als nieuw."</p>
      </div>
      <div class="reviews clearfix active">
        <h2>Media recensie</h2>
        <p>"IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Media recensie</h2>
        <p>"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of spelen van online games belemmert. Advanced SystemCare heeft als doel om uw computer te herstellen. Niet alleen door het opruimen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Klantbeoordeling</h2>
        <p>"Dit programma is het beste programma dat ik ooit geprobeerd heb. Mijn computer loopt veel soepeler en sneller sinds ik ASC geïnstalleerd heb. Het ruimt onnodige en dubbele bestanden op, verwijdert lege mappen en ik gebruik het om bestanden te versnipperen. Het reinigt en defragmenteert het register en alle bestanden op mijn pc. Ik beveel dit programma aan iedereen aan. Het is niet duur en u krijgt gegarandeerd waar voor uw geld. Uw computer zal weer lopen als nieuw. U zult dit programma zonder enige twijfel geweldig vinden."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Klantbeoordeling</h2>
        <p>"Als zovelen, ben ik begonnen met de gratis versie van ASC en heb ik uiteindelijk de PRO-versie gekocht. Dit programma zorgt ervoor dat mijn computer schoon en “bug free” blijft en het heeft me nog nooit teleurgesteld. Onlangs nam ik contact op met de klantenservice van Advanced SystemCare en kreeg ik al binnen twee dagen een antwoord op al mijn vragen. Ik vind service erg belangrijk en daarom wint ASC voor mij als het beste product met de beste service."</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Wayne-Bowler.png" alt="Wayne Bowler"><span></span></div>
        <strong>Wayne Bowler</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Myo-Thuya.png" alt="Myo Thuya"><span></span></div>
        <strong>Myo Thuya</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/PCMAG-editchoice.png" alt="PC Magazine"><span></span></div>
        <strong>PC Magazine</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Loretta-Harnarine.png" alt="Loretta Harnarine"><span></span></div>
        <strong>Loretta Harnarine</strong>
      </li>
      <li class="last">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
        <strong>Bruce Ramsay</strong>
      </li>
    </ul>
  </div>
  <!-- end review  -->

  <!-- bottomcart -->
  <div class="btmcart">
    <div class="wrapper">
      <div class="leftpart">
        <img src="<?php echo getStaticUrl('images/btmpacks.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <em class="packimg">
            <b id="packbox" class="reduceGift packbox">
              <b class="list">
                <strong>0</strong>
              </b>
              <b class="list">
                <strong>0</strong>
              </b>
            </b></em> over!
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Wees er snel bij! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms over</p>
      </div>
      <div class="price">
        <p><strong>€29<big>,</big></strong> <span> 99 <del>€124,84</del> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-asc12db63pc2999&ref=nl_asc12db6rightcorner2999purchase1811c<?php echo $refStr;?>&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018c-nl')">
          Activeer Nu
        </a>
      </div>
    </div>
  </div>
  <!-- end btmcart -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Probeer ZONDER RISICO – <br> met onze 60 dagen niet-goed-geld-terug garantie</h4>
            <p>Door PRO te activeren zult u betere pc-prestaties krijgen voor een schappelijke prijs!</p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Wij accepteren:</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Opmerking:</dt>
          <dd>*.Dergelijke promotionele programma's kunnen zonder voorafgaande kennisgeving worden gewijzigd, van tijd tot tijd naar eigen goeddunken.</dd>
          <dd>*.Data kan variëren afhankelijk van verschillende computer systemen.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
      </div>
      <!-- footer end -->
    </div>
  </div>

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=nl-asc12db63pc2899&ref=nl_asc12db6rightcorner2899purchase1811<?php echo $refStr;?>&refs=nl_purchase_asc";
  var _ga = "ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018popup-nl')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>