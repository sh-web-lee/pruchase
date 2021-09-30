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
  <title>85% Kerstkorting op Driver Booster PRO - IObit </title>
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
               href="https://www.iobit.com/buy.php?product=nl-db83pc2499&ref=nl_db83pc2499rightcornerpurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase2011-nl')')">
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
               href="https://www.iobit.com/buy.php?product=nl-db83pciupf1999&ref=nl_db83pciupf1999rightcornerpurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase2011-nl')')">
               PROFITEER NU	
            </a>
          </div>
        </div>
        <div class="offer right">
          <img src="<?php echo getStaticUrl('images/db-box-right.png')?>" alt="">
          <div class="price">
            <p><strong>€28,99</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-db83pciupf2899&ref=nl_db83pciupf2899rightcornerpurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase2011-nl')')">
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
      <a href="https://www.iobit.com/buy.php?product=nl-db83pciupf1999&ref=nl_db83pciupf1999rightcornerpurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase2011-nl')')" class="buybtn green">PROFITEER NU</a>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Miljoenen gebruikers kozen al Driver Booster PRO</h2>
      <div class="ponad">
        <dl>
          <dt>200+</dt>
          <dd>Populair in meer dan <b>200 landen</b></dd>
        </dl>
        <dl>
          <dt>1000+</dt>
          <dd>Meer dan <b>1000 media</b> <br> raden Driver Booster aan</dd>
        </dl>
        <dl>
          <dt>2.500.000+</dt>
          <dd>Gewaardeerd door meer dan <br> <b>2,5 miljoen gebruikers</b></dd>
        </dl>
        <dl>
          <dt>80%+</dt>
          <dd>Meer dan 80% van de <br> gebruikers <b>koos al PRO</b></dd>
        </dl>
      </div>
      <div class="reviewbox clearfix">

        <div class="reviewlist">
          <ul>
            <li>
              <h3>PC Magazine</h3>
              <p>
              “IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”
              </p>
            </li>
            <li class="active">
              <h3>Adam Backlund</h3>
              <p>
              "Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."
              </p>
            </li>
            <li>
              <h3>Wayne Bowler</h3>
              <p>
              "Dit is een van de beste driver update software op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkte perfect. Eenvoudig te gebruiken, informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven... Goed gedaan!"
              </p>
            </li>
            <li>
              <h3>Myo Thuya</h3>
              <p>
              "Met Driver Booster werk ik alle drivers gemakkelijk bij. Daarnaast lost dit programma allerlei foutmeldingen op zoals geen geluid, netwerkfouten, apparaat fouten enz. Voordat ik dit programma downloadde, geloofde ik niet dat dit programma mijn computer nog kon redden, maar nu ben ik helemaal overtuigd en loopt mijn PC weer als nieuw."
              </p>
            </li>
          </ul>
        </div>
        <div class="reviewuser">
          <span><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""/></span>
          <span class="active"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""/></span>
          <span><img src="<?php echo getStaticUrl('images/wayne_bowler.png')?>" alt=""/></span>
          <span><img src="<?php echo getStaticUrl('images/myo_thuya.png')?>" alt=""/></span>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->
  <div class="bottom-bg">
    <!-- comparison start -->
    <div class="comparison wrapper">
      <h2>Profiteer van de exclusieve PRO-functies</h2>
      <table>
        <thead>
          <tr>
            <th colspan="2" class="text">Functies</th>
            <th class="space"></th>
            <th class="itema">
              <div class="pro">
                <h3>Driver Booster <br> PRO</h3>
              </div>
            </th>
            <th class="space"></th>
            <th class="itemb">
              <div class="free">
                <h3>Driver Booster <br> FREE</h3>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""/></td>
            <td class="virtue">Update verouderde drivers met 1 klik</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
            <td class="virtue">Ontgrendel de <b>maximale updatesnelheid </b></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
            <td class="virtue vtop">
              Toegang tot <b>1.000.000 extra drivers</b> om al uw drivers bij te werken 
            </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/></td>
            <td class="virtue">
              Maakt automatisch een backup van alle drivers voor een <b>veilig herstel</b>
            </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""/></td>
            <td class="virtue">
            Update ook netwerkdrivers <b> zonder internetverbinding </b>
            </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""/></td>
            <td class="virtue">Update <b>alle gamecomponenten</b></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
            <td class="virtue"><b>Repareert apparaatfouten automatisch</b> voor betere prestaties</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""/></td>
            <td class="virtue">Automatisch bijwerken naar de nieuwste versie	</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""/></td>
            <td class="virtue">Gratis 24/7 technische ondersteuning	</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
    <div class="award">
      <h2>Internationale Prijzen</h2>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
  <!-- footerbuy start -->
  <div class="footerbuy">
    <div class="wrapper">
      <h2>Twijfel niet langer en kies voor de Optimale PC</h2>
      <h3>Beslis snel, nog maar  
        <span class="reduce reduce2">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> beschikbaar
        </h3>
      <div class="clearfix">
        <div class="imgbox fl">
          <img class="on" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="" />
          <img class="db" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
          <img src="<?php echo getStaticUrl('images/db-box-right.png')?>" alt="" />
          <span class="discount on">-83<small>%</small></span>
        </div>
        <ul class="changelist fl">
          <li class="one on" data-num="1"><b>Tijdelijk Kerstpakket</b></li>
          <li class="two" data-num="2"><b>Voordeelpakket</b></li>
          <li class="three" data-num="0"><b>Standaard</b></li>
        </ul>
        <div class="price fr">
          <p><strong>€19,99</strong> <del>€138,70</del></p>
          <a class="buybtn green"
          href="https://www.iobit.com/buy.php?product=nl-db83pciupf1999&ref=nl_db83pciupf1999rightcornerpurchase2011<?php echo $refStr;?>&refs=nl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbrightcornerpurchase2011-nl')')">
               PROFITEER NU
          </a>
        </div>
      </div>
     
    </div>
  </div>
  <div class="footer">
    <div class="wrapper">
      <dl class="note">
          <dt>Opmerking:</dt>
          <dd>IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</dd>

        </dl>
        <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit.  Alle Rechten Voorbehouden</p>
    </div>
  </div>
  <!-- footerbuy end -->

  <script>var refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>