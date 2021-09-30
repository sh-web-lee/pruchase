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
$buyLink="https://www.iobit.com/buy.php?product=svaff-db83pc262&ref=".(empty($_GET['ref'])?'svaff_db8_2017general':$_GET['ref'])."&aff=".$affStr;
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
<title>Njut av en Mer Stabil Dator med ASC PRO</title>
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
      <h2>Det Verktyget för Uppdatering av Drivrutiner</h2>
      <h1>Driver Booster PRO</h1>
      <p>Uppdatera Föråldrade Drivrutiner Säkert och Snabbt med Ett Klick</p>
      <ul class="btnbox clearfix">
        <li class="first">
          <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'svdb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'svdb6g')" data-text="Ladda Ner Gratis">
            <span>Ladda Ner Gratis </span>
            <i class="all-icons"></i>
          </a>
		  <p style="float: left;text-align: center;width: 280px; margin-top: 0;">Stöder Windows XP/Vista/7/8/8.1/10</p>
        </li>
        <li>
          <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'svaffdb82017general');dlCount()" data-text="Köp nu & Spara <?php echo $buytext; ?> >>">
            <span>Köp nu & Spara <b><?php echo $buytext; ?></b> >></span>
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
        <h2>Vilka problem för dator har du med föråldrade drivrutiner och spelkomponenter?</h2>
        <div class="clearfix">
          <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
          <div class="describe fr">
            <div class="list">
              <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
              <span><b>! </b>Upprepade kraschar och fryser på system</span>
            </div>
            <div class="list two">
              <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
              <span><b>! </b>Nätverksanslutningen misslyckas ibland</span>
            </div>
            <div class="list three">
              <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
              <span><b>! </b>Skrivare eller andra externa enheter fungerar inte korrekt</span>
            </div>
            <div class="list four">
              <img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" />
              <span><b>! </b>Inget ljudfel när du lyssnar på musik eller pratar med andra</span>
            </div>
            <div class="list five">
              <img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" />
              <span><b>! </b>Dålig spelprestanda, spel kraschar eller spelhängningar som orsakats av grafikdrivrutin</span>
            </div>
          </div>
        </div>
        <div class="learn">
          <a href="javascript: void(0)">Klicka här för att lära dig mer om drivrutiner</a>
          <div class="drivers">
            <p>Drivrutiner är programvara som varje enhet eller hårdvarukomponent behöver för att fungera. Om du ansluter en enhet till din dator utan att installera en rätt drivrutin för den har windows ingen aning om vad du ska göra med den.</p>
            <p>Drivrutinerna låter ditt operativsystem veta vad den enheten är och hur du använder den.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- threepoints start -->
    <div class="threepoints">
      <div class="wrapper">
        <h2>Vad gör Driver Booster PRO?</h2>
        <div class="clearfix">
          <div class="pointist one">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point01.png')?>" alt="" /></div>
            <b>1</b>
            <h4>Upptäck & fixa Drivrutiner med ett klick</h4>
            <p>
				Upptäck och fixa enkelt alla föråldrade,  <br>saknade och felaktiga  <br>drivrutiner med enstoppslösning.
            </p>
          </div>
          <div class="pointist two">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point02.png')?>" alt="" /></div>
            <b>2<span class="arrow"></span><span class="arrow right"></span></b>
            <h4>Ladda ner Drivrutiner Säkert och Snabbt</h4>
            <p>
				Säkerhetskopiera automatiskt och <br>skapa systemåterställningspunkt innan<br> du uppdaterar för säkerhets skull.
            </p>
          </div>
          <div class="pointist three">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point03.png')?>" alt="" /></div>
            <b>3</b>
            <h4>Njut av smidig dator och spels upplevelse</h4>
            <p>
				Senaste Game Ready Drivers från olika märken<br> hjälper till att öka prestanda, <br>fixa buggar och förbättra spelupplevelse.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- threepoints end -->

    <!-- centbuy start -->
    <div class="centbuy">
		<h2>Få Din Enstoppslösning för Frustrerande Problem med Enhetsdrivrutiner Booster!</h2>
      <div class="wrapper">
        
        <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'svaffdb82017general');dlCount()" data-text="Köp nu & Spara <?php echo $buytext; ?> >>">
          <span>Köp nu & Spara <b><?php echo $buytext; ?></b> >></span>
        </a>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Stöd för Uppdatering av 4 500 000+ Enhetsdrivrutiner</h2>
          <span></span>
          <p>
            Få rekommenderade drivrutiner och uppdateringar automatiskt för din maskinvara med Driver Booster PRO. Driver Booster PRO stöder 4 500 000 enhetsdrivrutiner och kan åtgärda problem med saknade/felaktiga/föråldrade drivrutin för att hjälpa dig att minska systemfrysningar och kraschar.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" />
        <div class="text">
          <h2>Säker Drivrutinuppdatering</h2>
          <span></span>
          <p>
            Driver Booster PRO säkerhetskopierar automatiskt en tidigare kopia och skapar en systemåterställningspunkt innan den uppdateras, i händelse av att något oväntat skulle hända. För att säkerställa säkerheten för användares dator tillhandahålls endast kvalificerade WHQL drivrutiner av Driver Booster PRO och den nyligen antagna HTTPS-anslutningen kan kryptera din anslutning till server när du laddar ner drivrutiner.
          </p>
        </div>
      </div>
    </div>

    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Njut av Smidig Spelupplevelse</h2>
          <span></span>
          <p>
            Driver Booster PRO håller enkelt grafiska drivrutiner och Game Ready drivrutiner alltid uppdaterade för att få bästa prestanda för hårdvara och ta spel till nästa nivå. Det stänger också snabbt bakgrundsprocesser och onödiga Windows tjänster för att låsa upp den hela potentialen för spel. De spelkomponenter för dem flesta spel finns också tillgängliga för att hjälpa till att starta ditt spel framgångsrikt.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" />
        <div class="text">
          <h2>Tidsbesparande och Intelligent att Ladda Ner Drivrutiner</h2>
          <span></span>
          <p>
            Genom att ta bort värdelösa filer i installationspaket och tydligt komprimerade installationspaket sparar Driver Booster din tid på att uppdatera drivrutiner och gör din rutin förbli ostörd. Driver Booster PRO erbjuder också snabbare nedladdningshastighet och tillåter nedladdning och installation under systemets vilotid, vilket låter användare fokusera på jobbet för hand utan störningar.
          </p>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- footbuy start -->
    <div class="centbuy footbuy">
      <div class="wrapper">
        <h3>Hur håller jag drivrutinerna uppdaterade? <span>Prova Driver Booster PRO och få det gjort med ett klick!</span></h3>
        <ul class="btnbox clearfix">
          <li class="first">
            <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'svdb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'svdb6g')" data-text="Ladda Ner Gratis">
              <span>Ladda Ner Gratis </span>
              <i class="all-icons"></i>
            </a>
          </li>
          <li>
            <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'svaffdb82017general');dlCount()" data-text="Köp nu & Spara <?php echo $buytext; ?> >>">
              <span>Köp nu & Spara <b><?php echo $buytext; ?></b> >></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- brands start -->
    <div class="brands wrapper">
      <h2>Stöd för att uppdatera drivrutiner från över 500 stora märken </h2>
      <p>med bara ett klick</p>
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
          <h2>Medieöversikt</h2>
          <h3>IObit gör många verktyg och Driver Booster PRO som automatiskt uppdaterar dina drivrutiner är en av dess bästa.</h3>
          <p>Driver Booster PROs enkla kärnfunktion görs ännu mer attraktiv tack vare införandet av flera licenser till ett mycket plånboksvänligt pris, liksom ett anpassningsbart gränssnitt som gör ett bra jobb med att visa specifik hårdvarorelaterad information. De medtävlarna t.ex. Ashampoo Driver Updater och SlimWare Utilities DriverUpdate erbjuder övertygande funktioner, men IObit Driver Booster PRO leder förpackningen.</p>
        </div>
        <div class="reviews">
          <h2>Användares omdömen</h2>
          <h3></h3>
          <p>IObit Driver Booster är den bästa mjukvaran som finns tillgänglig. Jag har använt alla IObits Driver Boosters och deras andra programvaror i många år nu. Driver Booster hittar föråldrade drivrutiner för min bärbara dator och tillsammans med IObits andra programvaror hålls mina system i trim.</p>
        </div>
        <div class="reviews">
          <h2>Användares omdömen</h2>
          <h3></h3>
          <p>En skanning om dagen håller föråldrade drivrutiner borta. Istället för att individuellt leta efter uppdateringar av drivrutiner kan Driver Booster hålla alla mina enheter aktuella med bara ett klick. Driver Booster har förbättrat min spelupplevelse, särskilt för krävande spel som behöver de senaste uppdateringarna. IObit och deras produkter har visat mig min PCs sanna kapacitet.</p>
        </div>
        <div class="reviews">
          <h2>Användares omdömen</h2>
          <h3></h3>
          <p>Jag hade alla möjliga problem med min bärbara dator. Till sist insåg jag att de orsakades av drivrutinerna. Trots att jag gick igenom alla kanaler min bärbara dators varumärke tillhandahöll hade jag fortfarande problem. Efter ett klick med Driver Booster hittade jag 17 inaktuella drivrutiner och fixade dem lika snabbt. Mina problem med drivrutiner har försvunnit och min bärbara dator funkar mycket bättre! Jag kommer inte använda något annat program för mina drivrutiner.</p>
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
              <img src="<?php echo getStaticUrl('images/Mike-Goggans.png')?>" alt="Mike Goggans"/>
              <span></span>
            </div>
            <strong>Mike Goggans</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/MTalal-Hafez.png')?>" alt="M.Talal Hafez"/>
              <span></span>
            </div>
            <strong>M.Talal Hafez</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/Cobus-Engelbrecht.png')?>" alt="Cobus Engelbrecht"/>
              <span></span>
            </div>
            <strong>Cobus Engelbrecht</strong>
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
      <dt><h5>100% Ren</h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" /></dd>
    </dl>
    <dl class="two">
      <dt><h5>60 dagars Pengar Tillbaka</h5></dt>
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
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla rättigheter förbehållna</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div class="backtotop">top</div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>