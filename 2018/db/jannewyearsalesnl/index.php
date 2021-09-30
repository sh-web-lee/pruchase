<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$reTime=20;
$packsNum = ceil(microtimeFloat()*1000/(1000*$reTime));
$packsCount=85;
$packsNum = $packsCount-($packsNum%$packsCount);

$reduceNum=75544095;
$buyNum = ceil(microtimeFloat()*1000/20000) - $reduceNum;

$refStr='';
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% Nieuwjaarskorting op Driver Booster PRO, Ontvang het beste giftpack van 2018 GRATIS! </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    buyNum=<?php echo $buyNum;?>;
    packsNum=<?php echo $packsNum;?>;
    reTime=<?php echo $reTime;?>;
    packsCount=<?php echo $packsCount;?>;
    reduceNum=<?php echo $reduceNum;?>;
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
      <h1>Nieuwjaar </h1>
      <h2><span>Nog maar</span>  
        <div class="countdown">
          <div class="scroll-tick">
            <span>0</span>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
          </div>
          <div class="scroll-tick">
            <span>0</span>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
          </div>
        </div> <span>kerstpakketten beschikbaar</span></h2>
      <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" / class="db-box">
      <dl class="price">
        <dt>
          <span>van <del>124,83</del> <span>VOOR</span></span>
          <strong><b>24</b> 99</strong>
        </dt>
        <dd><a href="http://www.iobit.com/buy.php?product=nl-db53pciuamc2499&ref=nl_db53pc2499xmaspurchase1801<?php echo $refStr;?>&refs=nl_purchase_db" onclick="​ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1801-nl')" class="buybtn">Koop nu</a></dd>
        <dd>Deze aanbieding is al <strong class="buyNum">123</strong> keer geactiveerd </dd>
      </dl>
    </div>
  </div>
  <!-- banner end -->
  <!-- payments start -->
  <div class="payments wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- payments end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <h2>De voordelen van Driver Booster PRO</h2>
    <div class="box clearfix">
      <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="" / class="img-box">
      <ul class="fr">
        <li> Update &amp; installeert meer dan 1.000.000 missende en foutieve drivers</li>
        <li> Alleen WHQL getestte drivers</li>
        <li> Beveiligde verbinding via HTTPS <span>Nieuw</span></li>
        <li>Microsoft Visual C++ 2017 Redistributable, Silverlight 5, XML 6.0 en nog veel meer <span>Nieuw</span></li>
        <li> Automatische back-up &amp; herstelpunt </li>
      </ul>
    </div>
  </div>
  <!-- feature end -->

  <!-- giveway start -->
  <div class="giveway wrapper">
    <h2>Wat zit er in het nieuwjaarspakket?</h2>
    <dl class="iu">
      <dt>
         <img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt="">
         1 Jaar / 1 PC
      </dt>
      <dd>Verwijdert hardnekkige programma's en plug-ins </dd>
      <dd>Verwijdert ingebouwde Apps in Windows10 & 8 </dd>
      <dd>Snelle en grondige deïnstallatie van ongewenste programma's</dd>
    </dl>
    <dl>
      <dt>
         <img src="<?php echo getStaticUrl('images/amc-gift.png')?>" alt="">
         1 Jaar / 1 Apparaat <sup>*</sup>
      </dt>
      <dd>100% privacy bescherming op uw Android toestel </dd>
      <dd>Veilig online bankieren op uw mobiel </dd>
      <dd>Versnelt uw Android toestel met wel 200%*</dd>
    </dl>
    <p><a href="javascript: ;">Bekijk aanbieding>></a></p>
  </div>
  <!-- giveway end -->
  
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Vertrouwd en bekroond door de volgende media</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->
  
  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Media recensie</h2>
      <div class="list clearfix">
        <div class="icons fl">
          <img src="<?php echo getStaticUrl('images/pcmag-com.png')?>" alt="" />
          <h3>PCMAG.com </h3>
        </div>
        <div class="txt fr">“IObit maakt meerdere programma's maar Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat het erg overzichtelijk maakt.  In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”</div>
      </div>
      <h2>Klantbeoordeling</h2>
      <div class="list user clearfix">
        <div class="icons fl">
          <img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler" />
          <h3>Wayne Bowler</h3>
        </div>
        <div class="txt fr">"Dit is een van de beste driver updater programma's op de markt. Microsoft heeft zelfs gesuggereerd dat updates voor mijn drivers niet zouden werken met mijn systeem. Maar dit programma vind alle updates die ik nodig heb. Het werkt perfect. Het is eenvoudig te gebruiken, informatief en intuïtief. Deze software zal altijd in mijn toolbox blijven. Goed gedaan!" <img class="star fr" src="<?php echo getStaticUrl('images/star.png')?>" alt="" />
        </div>
      </div>
      <div class="list user clearfix">
        <div class="icons fl">
          <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=" Adam Backlund" />
          <h3> Adam Backlund</h3>
        </div>
        <div class="txt fr">
          "Driver Booster is een geweldige applicatie. Voor iemand die veel applicaties en drivers op de computer heeft staan maar geen tijd heeft om deze bij te werken, raad ik Driver Booster aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."
          <img class="star fr" src="<?php echo getStaticUrl('images/star.png')?>" alt="" />
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div id="compare" class="comparison wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Driver Booster PRO functies</th>
          <th class="itemb">Driver Booster <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">Driver Booster <b>PRO</b></th>
        </tr>
      </thead>
      <tbody>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Snel &amp; Veilig Updaten</strong></td>
          <td class="itemb gray"></td>
          <td class="space"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Scant &amp; identificeert automatisch verouderde, missende en foutieve drivers</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Update verouderde drivers met 1-klik</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Veiliger updaten met alléén gekwalificeerde WHQL drivers</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Grotere database werkt nog meer verouderde en zeldzame drivers bij</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Ontgrendel de maximale updatesnelheid</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Maakt automatisch een backup van alle drivers voor een veilig herstel</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Update alle game componenten</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="bottall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Repareert apparaatfouten automatisch voor betere prestaties</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Sneller Downloaden</strong></td>
          <td class="itemb gray"></td>
          <td class="space"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Kleinere driver pakketten voor snelle installatie</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="bottall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Download &amp; installeert drivers tijdens het opstarten</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Premium IObit service</strong></td>
          <td class="itemb gray"></td>
          <td class="space"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Automatisch bijwerken naar de nieuwste versie </td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="bottall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">Gratis 24/7 technische ondersteuning</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <img src="<?php echo getStaticUrl('images/bottom-db-box.png')?>" alt="" class="img-box">
      <div class="title">
        <span> GRATIS NIEUWJAARSPAKKET Nog maar</span>
        <div class="countdown">
          <div class="scroll-tick">
            <span>0</span>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
          </div>
          <div class="scroll-tick">
            <span>0</span>
            <span>1</span>
            <span>2</span>
            <span>3</span>
            <span>4</span>
            <span>5</span>
            <span>6</span>
            <span>7</span>
            <span>8</span>
            <span>9</span>
          </div>
        </div> 
        <span>nieuwjaarspakketten  beschikbaar</span></div>
      <dl class="price">
        <dt>
          <span>van <del>124,83</del> <span>VOOR</span></span>
          <strong><b>24</b> 99</strong>
        </dt>
        <dd><a href="http://www.iobit.com/buy.php?product=nl-db53pciuamc2499&ref=nl_db53pc2499xmaspurchase1801<?php echo $refStr;?>&refs=nl_purchase_db" onclick="​ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1801-nl')" class="buybtn">Koop nu</a></dd>
      </dl>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- footer start -->
  <div class="footer">
    <p class="annotation wrapper">* Data kan variëren afhankelijk van verschillende computer systemen <br>* Licentiecode voor AMC Security volledige versie met in-app-advertenties.</p>

    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
  </div>
  <!-- footer end -->
  <script type="text/javascript" src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>