<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
$buyLink="https://www.iobit.com/buy.php?product=nlaff-db83pc1874&ref=".(empty($_GET['ref'])?'nlaff_db8_2017general':$_GET['ref'])."&aff=".$affStr;
$refStr=$_GET['ref'];
$buytext = "65%";
if (preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

    $buyLink = "https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993";

    if ($arr[1][0] != null) {

        $buyLink = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/535215/4385";
    }
}else{
    if(preg_match('/fspi([0-9]*)/',$refStr,$matches)||preg_match('/ir([0-9]*)/',$refStr,$matches)){
        $buyLink='https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993';
        $pregNum=$matches[1];
        if(!empty($pregNum)){
            $buyLink='http://macbooster.7eer.net/c/'.$pregNum.'/558401/4385';
        }
    }
}


function statistic($status){
  try{
    $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
    $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");
    $insertSql="insert into affdbgeneral(ip,refStr,addtime,status) values(:ip,:refStr,:addtime,:status)";
    $pre=$pdo->prepare($insertSql);

    $ip=getIP();
    $refStr=$_GET['ref'].'-'.$_GET['aff'];
    $addTime=time();
    $pre->bindParam(':ip',$ip);
    $pre->bindParam(':refStr',$refStr);
    $pre->bindParam(':addtime',$addTime);
    $pre->bindParam(':status',$status);
    $pre->execute();
  }catch (PDOException $e){
  }
}

if($_GET['action']=='downloadCount'){
  statistic(2);
  exit();
}

statistic(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Geniet van een Stabielere PC met Driver Booster PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h2>De Must-have Driver Update Tool</h2>
      <h1>Driver Booster PRO</h1>
      <p>Veilig & Snel Verouderde Drivers Updaten in Eén Klik</p>
      <ul class="btnbox clearfix">
        <li class="first">
          <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'nldb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'nldb6g')" data-text="Gratis Downloaden">
            <span>Gratis Downloaden </span>
            <i class="all-icons"></i>
          </a>
		  <p style="float: left;text-align: center;width: 280px; margin-top: 0;">Ondersteunt Windows XP/Vista/7/8/8.1/10</p>
        </li>
        <li>
          <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'nlaffdb82017general');dlCount()" data-text="Koop Nu & Bespaar <?php echo $buytext; ?> >>">
            <span>Koop Nu & Bespaar <b><?php echo $buytext; ?></b> >></span>
          </a>
        </li>
      </ul>
      <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" /></div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper">
        <h2>Welke pc-problemen kunt u hebben door verouderde drivers en gamecomponenten?</h2>
        <div class="clearfix">
          <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
          <div class="describe fr">
            <div class="list">
              <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
              <span><b>! </b>Regelmatige crashes & schermbevriezingen</span>
            </div>
            <div class="list two">
              <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
              <span><b>! </b>Netwerkverbinding valt soms uit</span>
            </div>
            <div class="list three">
              <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
              <span><b>! </b>Printers en andere apparaten werken niet naar behoren</span>
            </div>
            <div class="list four">
              <img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" />
              <span><b>! </b>Geen geluid bij het luisteren naar muziek of het (video)bellen</span>
            </div>
            <div class="list five">
              <img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" />
              <span><b>! </b>Matige gameprestaties, crashende games, of haperende games door falende graphics driver</span>
            </div>
          </div>
        </div>
        <div class="learn">
          <a href="javascript: void(0)">Leer meer over drivers</a>
          <div class="drivers">
            <p>Drivers (ook wel stuurprogramma’s) zijn programmaatjes die elk apparaat en hardware-onderdeel nodig heeft om te kunnen werken. Als u een apparaat aansluit zonder de juiste driver te installeren, heeft Windows geen idee wat het ermee moet.</p>
            <p>Drivers laten je besturingssysteem weten wat het apparaat is en hoe het gebruikt moet worden.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- threepoints start -->
    <div class="threepoints">
      <div class="wrapper">
        <h2> Wat doet Driver Booster PRO?</h2>
        <div class="clearfix">
          <div class="pointist one">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point01.png')?>" alt="" /></div>
            <b>1</b>
            <h4>Detecteer & Repareer Drivers in 1 klik</h4>
            <p>
				Detecteer en Repareer eenvoudig<br> alle verouderde, missende & incorrecte <br>drivers in één keer.
            </p>
          </div>
          <div class="pointist two">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point02.png')?>" alt="" /></div>
            <b>2<span class="arrow"></span><span class="arrow right"></span></b>
            <h4>Download Drivers Veilig & Snel</h4>
            <p>
				Maak automatisch back-ups en herstelpunten<br> aan voor het updaten, <br>zodat niets mis kan gaan.
            </p>
          </div>
          <div class="pointist three">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point03.png')?>" alt="" /></div>
            <b>3</b>
            <h4>Geniet van een Soepele PC & Game-ervaring</h4>
            <p>
				De laatste Game Ready Drivers van verschillende <br>merken geven prestaties een boost, <br>verhelpen bugs en verbeteren de game-ervaring.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- threepoints end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Krijg Nu De Complete Oplossing Voor Alle Frustrerende Driver Problemen!</h2>
        <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'nlaffdb82017general');dlCount()" data-text="Koop Nu & Bespaar <?php echo $buytext; ?> >>">
          <span>Koop Nu & Bespaar <b><?php echo $buytext; ?></b> >></span>
        </a>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Kan 4.500.000+ Drivers Updaten</h2>
          <span></span>
          <p>
            Krijg automatisch de aanbevolen drivers en updates voor uw hardware met Driver Booster PRO. Met meer dan 4.500.000 drivers beschikbaar, kan Driver Booster PRO problemen met missende/niet-werkende/verouderde drivers oplossen zodat u geen last meer heeft van crashes en schermbevriezingen.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" />
        <div class="text">
          <h2>Veilig Drivers Updaten</h2>
          <span></span>
          <p>
            Driver Booster PRO maakt automatisch back-ups aan van vorige drivers en creëert een systeemherstelpunt voor het updaten, voor het geval er iets misgaat. Om de veiligheid van de computer te garanderen, worden alleen WHQL-gecertificeerde drivers aangeboden door Driver Booster PRO, en een HTTPS-verbinding garandeert sterke versleuteling tijdens het downloadproces.
          </p>
        </div>
      </div>
    </div>

    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Geniet van een Soepele Game-ervaring</h2>
          <span></span>
          <p>
            Driver Booster PRO houdt eenvoudig grafische drivers en Game Ready drivers up-to-date om de beste hardwareprestaties te garanderen en gamen naar een hoger niveau te brengen. Het sluit ook overbodige achtergrondprocessen en Windows Services  om het maximale uit uw pc-games te halen. Gamecomponenten voor de meeste pc-games zijn ook beschikbaar om onder andere uw game probleemloos en snel op te starten.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" />
        <div class="text">
          <h2>Tijdbesparend & Intelligent Drivers Downloaden</h2>
          <span></span>
          <p>
            Door nutteloze bestanden in installatiepakketten te verwijderen en installatiepakketten te comprimeren, bespaart Driver Booster u tijd bij het updaten van drivers en stoort het u niet. Driver Booster PRO kan sneller downloaden dan de gratis versie en kan downloaden en installeren als het systeem inactief is, zodat u gewoon kunt werken zonder gestoord te worden.
          </p>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- footbuy start -->
    <div class="centbuy footbuy">
      <div class="wrapper">
        <h3>Hoe houdt u drivers up-to-date?  <span>Probeer Driver Booster PRO en doe het in 1 klik!</span></h3>
        <ul class="btnbox clearfix">
          <li class="first">
            <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'nldb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'nldb6g')" data-text="Gratis Downloaden">
              <span>Gratis Downloaden </span>
              <i class="all-icons"></i>
            </a>
          </li>
          <li>
            <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'nlaffdb82017general');dlCount()" data-text="Koop Nu & Bespaar <?php echo $buytext; ?> >>">
              <span>Koop Nu & Bespaar <b><?php echo $buytext; ?></b> >></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- brands start -->
    <div class="brands wrapper">
      <h2>Kan drivers van meer dan 500 grote merken </h2>
      <p>updaten in slechts 1 klik</p>
      <ul class="clearfix">
        <li><img src="<?php echo getStaticUrl('images/hp.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/microsoft.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/canon.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/dell.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/nvidia.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/snmsung.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/lg.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/amd.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/brother.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/intel.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/sony.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/logitech.png')?>" alt=""/></li>
      </ul>
    </div>
    <!-- brands end -->

    <!-- review start -->
    <div class="review">
      <div class="wrapper">
        <div class="reviews active">
          <h2>Media Recensie</h2>
          <h3>IObit maakt allerlei handige programma’s, en Driver Booster PRO, dat automatisch drivers update, is een van de beste.</h3>
          <p>De krachtige functies van Driver Booster PRO worden nog aantrekkelijker doordat meerdere licenties worden aangeboden voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.</p>
        </div>
        <div class="reviews">
          <h2>Klantbeoordeling</h2>
          <h3></h3>
          <p>Allereerst, moet ik zeggen dat het hele lichte en gemakkelijke software is. Driver Booster draait op de achtergrond en beperkt mijn CPU en RAM niet. Ik kon de nieuwste games spelen, zonder achtergrondprocessen te moeten sluiten. Normaal gesproken draai ik Windows updates elke dag voor de laatste drivers, maar Driver Booster doet dat nu voor mij en doet het beter en nauwkeuriger dan Windows update. Ik sta versteld van de prestaties en raad dit programma ten sterkste aan.</p>
        </div>
        <div class="reviews">
          <h2>Klantbeoordeling</h2>
          <h3></h3>
          <p>Wat een fijne verrassing brengt Driver Booster. Na de installatie en scan, bleek ik van de helft van de drivers niet eens te weten dat ik ze had, laat staan dat ze een update nodig hadden. Toen de update voltooid was, leek mijn pc een complete makeover te hebben gehad. Sensationeel!</p>
        </div>
        <div class="reviews">
          <h2>Klantbeoordeling</h2>
          <h3></h3>
          <p>Dit programma heeft me geholpen om de traagheid van mijn gamelaptop op te lossen zonder het te laten crashen. Soms probeerde ik mijn drivers te updaten, maar crashte mijn computer en moest ik ‘m formatteren om ‘m weer te kunnen gebruiken, maar dat gebeurt niet met DB7. Met groot gebruiksgemak en snelle downloads is het duidelijk de beste driver tool die er is!</p>
        </div>
        <ul class="handle clearfix">
          <li class="active">
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine" />
              <span></span>
            </div>
            <strong>PC Magazine</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"/>
              <span></span>
            </div>
            <strong>Dunston Diaz</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"/>
              <span></span>
            </div>
            <strong>Harold Barr</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"/>
              <span></span>
            </div>
            <strong>Carlos Alexandre Veríssimo</strong>
          </li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
  <!-- container end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><h5>100% Schoon </h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" /></dd>
    </dl>
    <dl class="two">
      <dt><h5>60 dagen Geld-Teruggarantie</h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
    </dl>
    <dl>
      <dt><h5>24/7 ondersteuning</h5></dt>
      <dd>Gratis 24/7 Technische Ondersteuning</dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer">
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div class="backtotop">top</div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>