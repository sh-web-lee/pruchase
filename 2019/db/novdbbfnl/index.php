<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'nldbexd_p' . $date;
  $c_name_t='nldbexd_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);

function paramDeal($num,$decimals,$separate=',',$decimal='.'){
  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
}

$params=json_decode(base64_decode($_GET['data']));
$fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,',','.');
$fileSizeUnit='GB';
if($fileSizeShow<=1){
  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,',','.');
  $fileSizeUnit='MB';
}
$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
$paramPri=paramDeal($params->privacy,0,',','.');
$paramPro=paramDeal($params->program,0,',','.');

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Black Friday Sale: De Allerlaagste Prijs van het Jaar voor Driver Booster PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <div class="title clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
      </div>
      <div class="right fr">
        <b class="only">exclusief voor u</b>
        <h1>Black Friday Sale</h1>
        <h5>Krijg PRO voor de Allerlaagste Prijs van het Jaar</h5>
        <div class="discount">-77% OFF</div>
      </div>
    </div>
    <div class="chart">
      <div class="chartbox one"><span>Normaal <b>€74,85</b></span></div>
      <div class="chartbox big two"><span>Halloween <b>€24,99</b></span></div>
      <div class="chartbox center three"><span>Black Friday <b class="change-price">€<big>16</big>,99 </b></span></div>
      <div class="chartbox big four"><span>Kerst <b>€24,99</b></span></div>
      <div class="chartbox five"><span>Normaal <b>€74,85</b></span></div>
    </div>
    <div class="price clearfix">
      <div class="numbox">
        Wees er snel bij, slechts 
        <div id="flip" class="flipNum">
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>5</b></span></div>
          <div class="listbox last"><span class="list"><b>0</b></span></div>
        </div> over!
      </div>
      <div class="btnbox">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db73pc1699&ref=nl_db73pcblackfriday1699purchase1911<?php echo $refStr;?>&aff=&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbblackfriday1699-nl');">
          Activeer Nu <small>- €16,99</small>
        </a>
        <p>1-jarig abonnement / 3 pc’s</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Wat Kan Driver Booster PRO Voor U Doen?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span>Automatisch <b>XX</b> verouderde drivers bijwerken voor betere pc-prestaties</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Gamecomponenten en <b>XX</b> Game Ready Drivers updaten voor de beste gameprestaties.</span>
        </li>
        <li class="db5">
          <i class="all-icons">●</i>
          <span>Automatisch <b>xx</b> back-ups aanmaken van huidige drivers</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Apparaatfouten <b>xx</b> oplossen voor een stabiel systeem en goed werkende hardware</span>
        </li>
        <li class="last">
          <i class="all-icons">●</i>
          <span><b>100%</b> sneller drivers downloaden</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>Zonder de PRO versie,</h3>
      <h2><b>Riskeert</b>  U:</h2>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span>Dat u niet alle benodigde drivers kunt updaten</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Apparaatfouten die uw computer doen crashen</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Problemen bij het opstarten en spelen van games</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Lange wachttijd door lage downloadsnelheden</span>
        </li>
        <li class="db5">
          <i class="all-icons">√</i>
          <span>Schade aan uw systeem bij incidenten tijdens het updaten, door gebrek aan back-ups</span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Kies Driver Booster PRO voor de Allerlaagste Prijs en krijg een:</h2>
    <div class="container clearfix">
      <div class='special left'>
        <dl>
          <dt><span class='icon05'></span></dt>
          <dd>
            <h3>Soepelere PC</h3>
            <p>Houd automatisch<br> 3.500.000 drivers up-to-date</p>
          </dd>
        </dl>
      </div>
      <div class='special right'>
        <dl>
          <dt><span class='icon06'></span></dt>
          <dd>
            <h3>Betere Game-ervaring</h3>
            <p>Start games snel en soepel, voorkom<br> bugs en verkrijg nieuwe functies</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>Wat Vinden Anderen?</h2>
    <div class="content">
      <dl class="active">
        <dt>
          <h3>Media recensie</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>
          “IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>
          “Allereerst, moet ik zeggen dat het hele lichte en gemakkelijke software is. Driver Booster draait op de achtergrond en beperkt mijn CPU en RAM niet. Ik kon de nieuwste games spelen, zonder achtergrondprocessen te moeten sluiten. Normaal gesproken draai ik Windows updates elke dag voor de laatste drivers, maar Driver Booster doet dat nu voor mij en doet het beter en nauwkeuriger dan Windows update. Ik sta versteld van de prestaties en raad dit programma ten sterkste aan.”
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>
          “Wat een fijne verrassing brengt Driver Booster. Na de installatie en scan, bleek ik van de helft van de drivers niet eens te weten dat ik ze had, laat staan dat ze een update nodig hadden. Toen de update voltooid was, leek mijn pc een complete makeover te hebben gehad. Sensationeel!”
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>
          “Werkelijk de beste driver updater die beschikbaar is.  Het is gebruiksvriendelijk, heeft een simpele interface en doet zijn werk beter dan elk ander programma dat ik geprobeerd heb. Dit programma is een dikke 5 sterren waard. Aanradertje!”
        </dd>
      </dl>
      <dl>
        <dt>
          <h3>Klantbeoordeling</h3></dt>
        <dd>
          <h4></h4>
        </dd>
        <dd>
          “Dit programma heeft me geholpen om de traagheid van mijn gamelaptop op te lossen zonder het te laten crashen. Soms probeerde ik mijn drivers te updaten, maar crashte mijn computer en moest ik ‘m formatteren om ‘m weer te kunnen gebruiken, maar dat gebeurt niet met DB7. Met groot gebruiksgemak en snelle downloads is het duidelijk de beste driver tool die er is!”
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine">
        </div>
        <p>PC Magazine</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/dunston-diaz.png" alt="Dunston Diaz"></div>
        <p>Dunston Diaz</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/harold-barr.png" alt="Harold Barr"></div>
        <p>Harold Barr</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa">
        </div>
        <p>Hishaam Salasa</p>
      </li>
      <li>
        <div class="pic">
          <img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo">
        </div>
        <p>Carlos Alexandre Veríssimo</p>
      </li>
    </ul>
    <span class="arrow"></span>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Vertrouwd en bekroond door de volgende media</h2>
    <p>
      Dankzij het vertrouwen en de prijzen die we in de afgelopen zes jaar hebben gekregen van deze media, weet u dat u de juiste driver updater heeft.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <div class="service">
      <dl class="left fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h3>Probeer ZONDER RISICO – met onze 60 dagen niet-goed-geld-terug garantie</h3>
          <p>
            Door PRO te activeren zullen uw drivergerelateerde problemen verdwijnen voor een schappelijke prijs.
          </p>
        </dd>
      </dl>
      <dl class="right fr">
        <dt><h3>Wij accepteren:</h3></dt>
        <dd>
          <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
        </dd>
      </dl>
    </div>
    <dl>
      <dt>Opmerking:</dt>
      <dd>
        *Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken.
      </dd>
      <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
  </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
      <div class="discount">85% OFF</div>
    </div>
    <div class="numbox fl">
      Wees er snel bij, slechts
      <div id="fliptwo" class="flipNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox last"><span class="list"><b>0</b></span></div>
      </div> over!
    </div>
    <div class="price fl">
      <strong class="change-price">€16,99</strong> <del>€74,85</del>
      <p>1-jarig abonnement / 3 pc’s</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=nl-db73pc1699&ref=nl_db73pcblackfriday1699purchase1911<?php echo $refStr;?>&aff=&refs=nl_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbblackfriday1699-nl');">
      Activeer Nu
    </a>
  </div>
</div>
<!-- floatlayer end -->


<script>
  $(".intro .wrapper .right b").eq(0).html("<?php echo $paramJunk?>").end().eq(1).html("<?php echo $paramPri?>").end().
  eq(2).html("<?php echo $paramPri;?>").end().eq(3).html("<?php echo $paramPro?>");
</script>
<script>packsNum=<?php echo $packsNum;?>;refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>