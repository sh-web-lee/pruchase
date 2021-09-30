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
$buyLink="https://www.iobit.com/buy.php?product=dkaff-db83pc179&ref=".(empty($_GET['ref'])?'dkaff_db8_2017general':$_GET['ref'])."&aff=".$affStr;
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
<title>Få glæde af en mere stabil PC med Driver Booster PRO</title>
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
      <h2>Få glæde af en problemfri og hurtig PC med Driver Booster PRO</h2>
      <h1>Driver Booster PRO</h1>
      <p>Opdater hurtigt og sikkert forældede drev med et klik</p>
      <ul class="btnbox clearfix">
        <li class="first">
          <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'dkdb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'dkdb6g')" data-text="Download gratis">
            <span>Download gratis </span>
            <i class="all-icons"></i>
          </a>
        </li>
        <li>
          <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dkaffdb82017general');dlCount()" data-text="Køb nu og spar <?php echo $buytext; ?> >>">
            <span>Køb nu og spar <b><?php echo $buytext; ?></b> >></span>
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
        <h2>Hvilke PC-problemer oplever du med forældede drev og spilkomponenter?</h2>
        <div class="clearfix">
          <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
          <div class="describe fr">
            <div class="list">
              <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
              <span><b>! </b>Hyppige systemsammenbrydninger og frysning</span>
            </div>
            <div class="list two">
              <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
              <span><b>! </b>Netværksforbindelsen afbrydes fra tid til anden</span>
            </div>
            <div class="list three">
              <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
              <span><b>! </b>Printer eller andre eksterne enheder fungerer ikke optimalt</span>
            </div>
            <div class="list four">
              <img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" />
              <span><b>! </b>Lydproblemer når du lytter til musik eller taler med andre</span>
            </div>
            <div class="list five">
              <img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" />
              <span><b>! </b>Ringe spilpræstationer, spil bryder sammen eller spil fryser på grund af problemer med grafikdrev</span>
            </div>
          </div>
        </div>
        <div class="learn">
          <a href="javascript: void(0)">Klik her og læs om drev</a>
          <div class="drivers">
            <p>Drev er software-stykker, der er nødvendige for at enheder og hardware komponenter kan fungere optimalt. Forbinder du en enhed til din PC uden at installere det korrekte drev, vil Windows ikke ane, hvad det skal gøre med din enhed. </p>
            <p>Drev giver dit operative system besked om, hvad det er for en enhed, og hvordan man bruger det.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- threepoints start -->
    <div class="threepoints">
      <div class="wrapper">
        <h2>Hvad gør Driver Booster PRO?</h2>
        <div class="clearfix">
          <div class="pointist one">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point01.png')?>" alt="" /></div>
            <b>1</b>
            <h4>Opdager & løser drevproblemer med et klik</h4>
            <p>
				Opdager og retter nemt alle forældede, <br>manglende eller <br>ukorrekte drev med det samme.
            </p>
          </div>
          <div class="pointist two">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point02.png')?>" alt="" /></div>
            <b>2<span class="arrow"></span><span class="arrow right"></span></b>
            <h4>Download drev sikkert og hurtigt</h4>
            <p>
				Sikkerhedskopierer og opretter et <br>gendannelsespunkt for systemet automatisk før <br>opdatering i tilfælde af uforudsete problemer.
            </p>
          </div>
          <div class="pointist three">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point03.png')?>" alt="" /></div>
            <b>3</b>
            <h4>Få glæde af en problemfri PC og spiloplevelse</h4>
            <p>
              Nyeste spilklare drev fra diverse mærker og  <br>producenter hjælper med at booste ydeevnen, <br>rette fejlog bugs og forbedrer spiloplevelsen.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- threepoints end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Get Your One-stop Solution for Frustrating Device Driver Problems!</h2>
        <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dkaffdb82017general');dlCount()" data-text="Køb nu og spar <?php echo $buytext; ?> >>">
          <span>Køb nu og spar <b><?php echo $buytext; ?></b> >></span>
        </a>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Understøtter opdatering af 4.500.000+ enhedsdrev</h2>
          <span></span>
          <p>
            Få anbefalede drev og opdateringer til dit hardware automatisk med Driver Booster PRO. Understøtter 4.500.000+ enhedsdrev, Driver Booster PRO kan løse manglende/defekte/forældede drevproblemer og reducerer systemfrysninger og sammenbrydninger.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" />
        <div class="text">
          <h2>Sikker drevopdatering</h2>
          <span></span>
          <p>
            Driver Booster PRO sikkerhedskopierer og opretter automatisk et gendannelsespunkt for systemet inden opdatering i tilfælde af uforudsete problemer. For at sikre brugernes computere, er kun WHQL-kvalificerede drev forsynet af Driver Booster PRO og den nye HTTPS-forbindelse krypterer din serverforbindelse under downloading af drev.
          </p>
        </div>
      </div>
    </div>

    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Få glæde af en problemfri spiloplevelse</h2>
          <span></span>
          <p>
            Driver Booster PRO holder nemt grafikdrev og spilklare drev opdaterede for at give dig den bedste ydeevne af hardware og tager spiloplevelsen til det næste niveau. Det lukker hurtigt ned for baggrundsprocesser og for unødvendige Windows-tjenester, så du kan udnytte din PC’s fulde potentiale. Spilkomponenter for de fleste PC-spil er tilgængelige, så du kan indlæse dine spil uden problemer.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" />
        <div class="text">
          <h2>Intelligent og tidsbesparende hentning af drev</h2>
          <span></span>
          <p>
            Ved at slette ubrugelige filer i installationspakken samt komprimering, sparer Driver Booster dig for tid på drevopdateringer og forstyrrer ikke dine rutiner. Driver Booster PRO gør det også muligt at downloade hurtigere og tillader download og installation, når systemet er ledigt, så brugere kan fokusere på deres igangværende arbejde uden at blive forstyrret.
          </p>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- footbuy start -->
    <div class="centbuy footbuy">
      <div class="wrapper">
        <h3>Hvordan holder man PC-drev opdaterede?  <span>Prøv Driver Booster PRO og få det løst med et klik!</span></h3>
        <ul class="btnbox clearfix">
          <li class="first">
            <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'dkdb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'dkdb6g')" data-text="Download gratis">
              <span>Download gratis </span>
              <i class="all-icons"></i>
            </a>
          </li>
          <li>
            <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dkaffdb82017general');dlCount()" data-text="Køb nu og spar <?php echo $buytext; ?> >>">
              <span>Køb nu og spar <b><?php echo $buytext; ?></b> >></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- brands start -->
    <div class="brands wrapper">
      <h2>Understøtter drevopdateringer fra flere end 500 store mærker</h2>
      <p>med blot et klik</p>
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
          <h2>Medieanmeldelse</h2>
          <h3>IObit producerer mange værktøj, og Driver Booster PRO, som automatisk opdaterer dine drev, er et af deres bedste.</h3>
          <p>Driver Booster PRO's simple kernefunktion er endnu mere attraktiv takket været indholdet af flere licenser til brugervenlige priser så vel som en tilpasset brugerflade, som gør et godt stykke arbejde med at vise specifikke hardware-relateret informationer. Selvom konkurrenter såsom Ashampoo Driver Updater samt SlimWare Utilities DriverUpdate tilbyder overbevisende funktioner, er IObit Driver Booster PRO klart den bedste.</p>
        </div>
        <div class="reviews">
          <h2>Brugeranmeldelser</h2>
          <h3></h3>
          <p>For det første må jeg sige, at det er et meget let og nyttigt software, der er nemt at bruge. Driver booster kører i baggrunden og belaster ikke CPU eller RAM, det var i stand til at indlæse nye spil uden at lukke ned for baggrundsprocesser. Jeg plejer at køre windows-opdateringer dagligt for at få de seneste drev, driver booster opdaterede og rettede mine PC-drev ekstremt præcist endda bedre end Windows update. Jeg er virkelig imponeret over softwaren og anbefaler det varmt som et produkt.</p>
        </div>
        <div class="reviews">
          <h2>Brugeranmeldelser</h2>
          <h3></h3>
          <p>Sikke en overraskelse at modtage Driver Booster fra IObit. Så snart det var installeret begyndte opdateringerne. Jeg anede ikke jeg havde så mange programmer på computeren og slet ikke at de behøvede opgraderinger. Da opdateringerne afsluttede, var det som om, min PC havde fået en komplet makeover. Fantastisk!</p>
        </div>
        <div class="reviews">
          <h2>Brugeranmeldelser</h2>
          <h3></h3>
          <p>Det hjalp med at løse hastighedsproblemer på min gamer laptop uden at nedbryde det. Nogle gange, når jeg har forsøgt at opdatere mine drev, er computeren brudt sammen og jeg var nødt til at formatere min computer for at gendanne funktioner, men dette skete ikke med DB 8. Det er nemt at bruge og downloader hurtigt, det er det bedste værktøj på markedet hidtil!</p>
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