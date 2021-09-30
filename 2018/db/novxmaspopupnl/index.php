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

$viewNum=rand(80,100);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_db','xr_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>86% Kerstkorting op Driver Booster PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>Speciale Kerstaanbieding</h1>
      <p class="best">Uw Laatste Kans op een Grote Besparing – Slechts 1 keer per jaar!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Driver Booster 6 PRO"/>
          <a class="hint" id="hint" href="javascript: void(0)" target="_blank"></a>
        </div>
        <div class="right fr">
          <h2>Driver Booster 6 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Wees er snel bij! <b>05</b>M: <b>00</b>S: <b class="last">000</b>Ms over</p>
            </div>
            <p><strong>€19<big>,</big></strong> <span>99 <del>€144,79</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-db63pciupf1999&ref=nl_db6rightcorner1999purchase1811a<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxrpurchase1811a-nl')">
              Activeer Nu
            </a>
            <p class="year">1-jarig abonnement / 3 PC’s</p>
            <!-- money-back -->
            <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- snow -->
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
      <h2>Alle missende, verouderde en niet-werkende drivers updaten in 1 klik!</h2>
      <p class="over">
        Wereldwijd kiezen meer dan 150.000.000 gebruikers Driver Booster Pro als driver updater om drivers updaten makkelijk te <br>
        maken en gameprestaties te verbeteren.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Driver Booster 6 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Update 3.000.000+ Drivers -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Update 3.000.000+ Drivers</h3>
              <p>
                Controleert automatisch 3.000.000+ drivers en <br>
                raadt u de beste drivers aan voor een stabiel <br>
                systeem zonder crashes.
              </p>
              <p><b>20% meer dan de gratis versie.</b></p>
            </dd>
          </dl>
          <!-- Betere Gameprestaties  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Betere Gameprestaties</h3>
              <p>
                Check automatisch gamegerelateerde drivers en <br>
                gamecomponenten voor snellere games. <br>
                Sommige games worden tot 39% sneller.
              </p>
              <p><b>*alleen PRO</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Sneller Drivers Updaten -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Sneller Drivers Updaten</h3>
              <p>
                Download uw drivers van tevoren om tijd te <br>
                besparen en een traag systeem te voorkomen <br>
                tijdens de update.
              </p>
              <p><b>*alleen PRO</b></p>
            </dd>
          </dl>
          <!-- Geluids- en Internetproblemen Oplossen -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Geluids- en <br> Internetproblemen Oplossen</h3>
              <p>
                Los apparaatproblemen op zodat uw printer, <br>
                beeldscherm, internet, muis en andere apparaten <br>
                altijd werken.
              </p>
              <p><b>*alleen PRO</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts -->
  <div class="gifts wrapper" id="gifts">
      <h2>Alleen nu met twee gratis Kerstcadeaus</h2>
      <div class="gift-list clearfix">
        <!-- IU -->
        <dl class="iu">
          <dt>
            <span></span>
            <strong>IObit Uninstaller 8 PRO</strong>
          </dt>
          <dd><del>€29,99</del>  <b>€<span>0</span></b></dd>
          <dd><p>Verwijder hardnekkige programma’s, plug-ins en <br> bundleware zonder restanten achter te laten op <br> uw pc.</p></dd>
        </dl>
        <!-- PF -->
        <dl class="pf">
          <dt>
            <span></span>
            <strong>Protected Folder </strong>
          </dt>
          <dd><del>€39,95</del>  <b>€<span>0</span></b></dd>
          <dd><p>Bescherm uw belangrijke mappen en bestanden <br> met een wachtwoord zodat hackers en gebruikers <br> van uw pc er niet bij kunnen.</p></dd>
        </dl>
      </div>
  </div>
  <!-- end gifts -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Kies PRO om gemakkelijk drivers te updaten en voor betere gameprestaties</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Driver Booster 6 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
          </p>
        </div>
        <p class="padding-left108"><strong>€19<big>,</big></strong> <span>99 <del>€144,79</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db63pciupf1999&ref=nl_db6rightcorner1999purchase1811b<?php echo $refStr;?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxrpurchase1811b-nl')">
          Activeer Nu
        </a>
        <p class="year">1-jarig abonnement / 3 PC’s</p>
        <!-- money-back -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Wat u precies krijgt als u nu activeert:</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">Driver Booster <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>Driver Booster <br> <b>Pro</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema">2.500.000+</td>
          <td class="itemb">Driver database</td>
          <td class="itemc">3.000.000+</td>
        </tr>
        <tr>
          <td class="itema">Beperkt</td>
          <td class="itemb">Driver downloadsnelheid</td>
          <td class="itemc">Onbeperkt</td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Automatisch verouderde drivers updaten</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Automatisch drivers back-uppen tegen incidenten</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Apparaatproblemen oplossen</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Gamecomponenten Controleren</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Voorrang op Game Ready Drivers</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Automatisch updaten naar de laatste versie</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema last"></td>
          <td class="itemb"></td>
          <td class="itemc last"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h3>MIS HET NIET!</h3>
      <h2>Krijg alleen nu 86% KORTING op het updaten van al uw drivers in 1 klik.</h2>
      <div class="price">
        <p><strong>€19<big>,</big></strong> <span>99 <del>€144,79</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db63pciupf1999&ref=nl_db6rightcorner1999purchase1811c<?php echo $refStr;?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxrpurchase1811c-nl')">
          Activeer Nu
        </a>
        <p id="footdown" class="countdown">Wees er snel bij! <b>05</b>M: <b>00</b>S: <b class="last">000</b>Ms</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <!-- 01 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/PCMAG-editchoice.png')?>" alt="PC Magazine"></dt>
          <dd>
            <h2>Media recensie</h2>
            <p>“IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <!-- 02 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Myo-Thuya.png')?>" alt="Myo Thuya"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Met Driver Booster werk ik alle drivers gemakkelijk bij. Daarnaast lost dit programma allerlei foutmeldingen op zoals geen geluid, netwerkfouten, apparaat fouten enz. Voordat ik dit programma downloadde, geloofde ik niet dat dit programma mijn computer nog kon redden, maar nu ben ik helemaal overtuigd en loopt mijn PC weer als nieuw."</p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <!-- 03 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Adam-Backlund.png')?>" alt="Adam Backlund"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."</p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <!-- 04 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Wayne-Bowler.png')?>" alt="Wayne Bowler"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Dit is een van de beste driver update software op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkte perfect. Eenvoudig te gebruiken, informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven... Goed gedaan!"</p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Vertrouwd en bekroond door de volgende media</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Probeer ZONDER RISICO – met onze 60 dagen niet-goed-geld-terug <br> garantie</h4>
            <p>Door PRO te activeren zullen uw drivergerelateerde problemen <br> verdwijnen voor een schappelijke prijs.</p>
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
          <dt>*Opmerkingen:</dt>
          <dd>- IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder <br> dit van tevoren aan te kondigen.</dd>
          <dd>- Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit.Alle Rechten Voorbehouden</p>
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
  var _href = "https://www.iobit.com/buy.php?product=nl-db63pciupf1899&ref=nl_db6rightcornerpopup1899purchase1811<?php echo $refStr;?>&refs=nl_purchase_db";
  var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'dbxrpurchase1811-nl')";
  var viewNum = "<?php echo $viewNum;?>";
</script>

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>