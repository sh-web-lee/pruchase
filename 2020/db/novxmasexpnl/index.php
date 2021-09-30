<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdbxmas2020_p' . $date;
  $c_name_t='frdbxmas2020_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(98,165);


// $time = time();
// if(isset($_COOKIE['toreturn'])&&$time-$_COOKIE['toreturn']>86400){
//     header("Location:return.php");
//     exit;
// }else{
//   if(!isset($_COOKIE['toreturn'])) setcookie('toreturn',$time,$time+2592000);
// }
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>85% Kerstkorting op Driver Booster PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
      <div class="title">
        <h2>Update al uw drivers en gamecomponenten voor de beste prestaties</h2>
        <h1>MIS DEZE KERSTAANBIEDING NIET!</h1>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <div class="price">
            <p><strong>€24,99	</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-db83pc2499&ref=nl_db83pc2499exppurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase2011-nl') ">
               KOOP NU
            </a>
          </div>
        </div>
        <div class="offer bigbox">
          <div class="superbox">
            <h3>Tijdelijk Kerstpakket</h3>
            <p>
            Nog maar <span class="reduce reduce1">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> over</p>
          </div>
          <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="">
          <b class="discount">-85<small>%</small></b>
          <div class="price">
            <p><strong>€19,99</strong> <del>€138,70</del></p>
            <a class="buybtn green"
               href="https://www.iobit.com/buy.php?product=nl-db83pciupf1999&ref=nl_db83pciupf1999exppurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase2011-nl') ">
               PROFITEER NU	
            </a>
          </div>
        </div>
        <div class="offer right">
          <img src="<?php echo getStaticUrl('images/db-box-right.png')?>" alt="">
          <div class="price">
            <p><strong>€28,99</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-db83pciupf2899&ref=nl_db83pciupf2899exppurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase2011-nl') ">
               KOOP NU
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
<div class="payment-bg">
  <div class="pay-miliony">
    <!-- payment start -->
    <div class="payment wrapper clearfix">
      <dl>
        
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
        <dt>Alle populaire betaalmethoden	</dt>
      </dl>
      <dl>
        
        <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
        <dt>Geldteruggarantie</dt>
      </dl>
      <dl class="last">
        
        <dd><img src="<?php echo getStaticUrl('images/gooddy.png')?>" alt=""/></dd>
        <dt>Veilige betaling</dt>
      </dl>
    </div>
    <!-- payment end -->
  </div>
</div>
  

  <!-- feature start -->
  <div class="feature ">
    <div class="wrapper">
      <h2>Alleen met Driver Booster PRO</h2>
      <div class="img-box">

      </div>
      <div class="message">
        <dl class="active">
          <dt><i></i></dt>
          <dd>
            <strong>Automatisch </strong>
            <p>Laat uw drivers automatisch updaten zodat u zich nooit meer zorgen hoeft te maken.</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><i></i></dt>
          <dd>
            <strong>Soepel Gamen</strong>
            <p>Volledige toegang tot de gamecomponenten en Game Ready Drivers maakt uw pc helemaal klaar om te gamen.</p>
          </dd>
        </dl>
        <dl class="three">
          <dt><i></i></dt>
          <dd>
            <strong>Gegarandeerde Veiligheid</strong>
            <p>Maak automatisch back-ups aan van uw huidige drivers zodat er niets meer mis kan gaan.</p>
          </dd>
        </dl>
        <dl class="four">
          <dt><i></i></dt>
          <dd>
            <strong>Nooit meer Computerproblemen</strong>
            <p>Los hardwareproblemen in één klik op en voorkom crashes met de geschiktste stuurprogramma’s.</p>
          </dd>
        </dl>
      </div>
    </div>
    
    
  </div>
  <!-- feature end -->
  <div class="stepbox">
    <div class="wrapper">
      <h2>Waarom heeft u Driver Booster PRO nodig?</h2>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/step-01.png')?>" alt="">
        <strong>
        Database met meer dan 4.500.000 drivers
        </strong>
        <p>
        Detecteer en update alle verouderde en missende drivers. Met 1 miljoen extra drivers updatet de PRO versie zelfs de zeldzaamste drivers die niet zo maar te vinden zijn.
        </p>
      </div>
      <div class="box big">
        <img src="<?php echo getStaticUrl('images/step-02.png')?>" alt="">
        <strong>
        Automatische, snelle en veilige updates
        </strong>
        <p>
        Update drivers automatisch als het systeem inactief is. Updaten gaat tot wel 100% sneller dan in de gratis versie.
        </p>
      </div>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/step-03.png')?>" alt="">
        <strong>
        Betere Gameprestaties
        </strong>
        <p>
        Krijg voorrang op de nieuwste Game Ready Drivers en toegang tot alle gamecomponenten zodat uw pc alle games weer soepel draait.
        </p>
      </div>
    </div>
  </div>

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Een schonere en veiligere computer met Gratis Kerstcadeaus</h2>
      <div class="clearfix">
        <div class="gift-list">
          <img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt=""/>
          <p><strong>€0</strong> <del>€23,90</del></p>
          <ul>
            <li>Verwijder hardnekkige programma’s</li>
            <li>Wis restanten van verwijderde software</li>
            <li>Houd uw software up-to-date</li>
          </ul>
        </div>
        <div class="gift-list">
          <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/>
          <p><strong>€0</strong> <del>€39,95</del></p>
          <ul >
            <li>Vergrendel belangrijke bestanden met een wachtwoord</li>
            <li>Voorkom dat hackers en andere gebruikers uw gegevens inzien</li>
          </ul>
        </div>
      </div>
      <a href="https://www.iobit.com/buy.php?product=nl-db83pciupf1999&ref=nl_db83pciupf1999exppurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
          onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase2011-nl') " class="buybtn green">PROFITEER NU</a>
    </div>
  </div>
  <!-- giftbox end -->

  <div class="comparison wrapper" id="compare">
      <!-- title -->
      <h2 class="on">
      Krijg alle PRO-functies terug voor de <br> beste hardwareprestaties
      </h2>
      <!-- table -->
      <table>
        <thead>
        <tr>
          <th><p>Pas op! <span> Momenteel riskeert u …</span></p></th>
          <th><p>U kunt ook genieten van…</p></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td>
            <b>Verouderde drivers</b> door een beperkte database
          </td>
          <td>
          Update al uw drivers met de 
            <b class="black">4.500.000+ driver database</b>
          </td>
        </tr>
        <!-- 02 -->
        <tr>
          <td>
            <b>Systeemcrashes</b> als er iets misgaat tijdens het updateproces
          </td>
          <td>
            <b class="black">Automatische driver back-ups </b> en systeem herstelpunten om alle problemen te voorkomen
          </td>
        </tr>
        <!-- 03 -->
        <tr>
          <td>
          Apparaten die <b>opeens niet meer werken </b> of niet zo goed werken als ze kunnen
          </td>
          <td>
          Werkende en <b class="black">stabiele apparaten</b> , zoals muis, <br> toetsenbord en webcam.
          </td>
        </tr>
        <!-- 04 -->
        <tr>
          <td>
            <b>Geen geluid, slechte beeldschermresolutie of geen netwerkverbinding.</b>
          </td>
          <td>
            <b class="black">Los hardwareproblemen op</b> in één klik
          </td>
        </tr>
        <!-- 05 -->
        <tr>
          <td>
            <b>Lange wachttijden </b> bij het updaten van drivers
          </td>
          <td>
          Update uw drivers tot <b class="black">100% sneller</b> met de PRO versie
          </td>
        </tr>
        <!-- 06 -->
        <tr>
          <td>
            <b>Games kunnen niet gespeeld worden</b> of missen belangrijke functies
          </td>
          <td>
          Met toegang tot alle gamecomponenten en Game Ready Drivers <br> geniet u de 
            <b class="black">beste game-ervaring</b>
          </td>
        </tr>
        <tr>
          <td>
            <b>Lage kwaliteit video’s en games </b> doordat u niet de geschikte grafische driver heeft
          </td>
          <td>
            <b class="black">Perfecte kwaliteit </b> video’s, streaming en games met de <br> beste grafische driver
          </td>
        </tr>
        <tr>
          <td>
            <b>Onoplosbare netwerkproblemen</b> omdat u netwerkdrivers niet bij kunt werken zonder internetverbinding
          </td>
          <td>
            Update uw netwerkdrivers zonder internetverbinding <br> met de 
            <b class="black">Offline Driver Updater</b>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
     <!-- intro start -->
     <div class="intro">
      <div class="wrapper clearfix">
        <h2>Driver Booster 8 PRO kan zelfs <br> nog meer dan uw vorige versie! </h2>
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
          <dd>
            <h3>Offline Driver Updater</h3>
            <p>
            Update uw netwerkdrivers zelfs zonder internetverbinding. 
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
          <dd>
            <h3>Selecteer Updateprioriteit</h3>
            <p>
            Kies of Driver Booster prioriteit geeft aan de Nieuwste of de Stabielste Drivers.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
          <dd>
            <h3>Sneller</h3>
            <p>
            Met 30% sneller updaten dan de vorige versie, bespaart u nog meer tijd.
            </p>
          </dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
          <dd>
            <h3>Veiliger</h3>
            <p>
            Met de versterkte driver back-up, hoeft u zich geen zorgen te maken over problemen tijdens de update.
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->
     <!-- review start -->
     <div class="review wrapper">
      <div class="review-list">
        <dl class="active">
          <dt><h2>Media recensie</h2></dt>
          <dd>
            <p>
              “IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Klantbeoordeling</h2></dt>
          <dd>
            <p>
              "Met Driver Booster werk ik alle drivers gemakkelijk bij. Daarnaast lost dit programma allerlei foutmeldingen op zoals geen geluid, netwerkfouten, apparaat fouten enz. Voordat ik dit programma downloadde, geloofde ik niet dat dit programma mijn computer nog kon redden, maar nu ben ik helemaal overtuigd en loopt mijn PC weer als nieuw."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Klantbeoordeling</h2></dt>
          <dd>
            <p>
              "Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."
            </p>
          </dd>
        </dl>
        <dl>
          <dt><h2>Klantbeoordeling</h2></dt>
          <dd>
            <p>
              "Dit is een van de beste driver update software op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkte perfect. Eenvoudig te gebruiken, informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven... Goed gedaan!"
            </p>
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine"/>
          </div>
          <p><span>PC Magazine</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"/>
          </div>
          <p><span>Myo Thuya</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"/>
          </div>
          <p><span>Adam Backlund</span></p>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"/>
          </div>
          <p><span>Wayne Bowler</span></p>
        </li>
      </ul>
    </div>
    <!-- review end -->
    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Wereldwijd Bekroond door de Media</h2>
        <p>Dankzij de waardering van vooraanstaande media over de hele wereld, weet u dat het goed zit!</p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <!-- service  -->
    <div class="service  clearfix">
      <div class="wrapper">
        <dl>
          <dt>Garantie</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dd>
        </dl>
        <dl>
          <dt>Veilig betalen</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>24/7 Gratis Klantenservice</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dd>
        </dl>
      </div>
    </div>
    <!-- end service -->
  <div class="footer">
    <div class="wrapper">
      <dl class="note">
          <dt>Opmerking:</dt>
          <dd>IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</dd>

        </dl>
        <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit.  Alle Rechten Voorbehouden</p>
    </div>
  </div>
  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><span></span></div>
      <div class="center fl">
        <h2>Exclusieve Kerstaanbieding!</h2>
        <div class="numbox">
          <p>Wees er snel bij, slechts</p>
          <span class="reduce reduce2">
            <b class="giftNum"><em></em></b>            <b class="giftNum"><em></em></b>
            <b class="giftNum"><em></em></b>
          </span>
          <p>over</p>
        </div>

      </div>
      <div class="price fr">
        <p><strong>€19,99</strong> <del>€138,70</del></p>
        <a class="buybtn green"
           href="https://www.iobit.com/buy.php?product=nl-db83pciupf1999&ref=nl_db83pciupf1999exppurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
          onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase2011-nl') ">
          Krijg Nu PRO terug!
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->
  <!-- footerbuy end -->

  <script>var refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>