<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$transData=json_decode(base64_decode($_GET['tdata']));
if(($transData->LftTrlDay<=4)&&($_GET['to']=='trialbuy_8')){
  header("location:./trialbuy.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
}

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$viewNum=rand(96,125);
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='svdbjul'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>2){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=2;
    }
  }else{
    $packsNum=98;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if (empty($_GET['ref'])) $_GET['ref'] = 'svaff_db8_2021trialsale';

if(!in_array($_GET['to'],array('trialbuy_7','trialbuy_2','trialbuy_9','trialbuy_4','trialbuy_8'))){
  $_GET['to']='';
}
if(empty(json_decode(base64_decode($_GET['tdata'])))){
  $_GET['tdata']='W10=';
}
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spara upp till 83% rabatt på Driver Booster PRO och få extra skydd på köpet. – IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title changed">
      <p>Ditt prov slutar snart</p>
      <h1>Missa inte Erbjudandet Endast för Provanvändare</h1>
    </div>
    <!-- content -->
    <div class="content">
      <!-- left-message -->
      <div class="left-message fl">
        <img src="<?php echo getStaticUrl('images/banner-db.png')?>" alt="">
        <img class="db-reduce" src="<?php echo $pResUrl;?>images/banner-db-reduce.png" alt="">
      </div>
      <!-- right-message -->
      <div class="right-message fr">
        <!-- title -->
        <h3>500 begränsade kvantiteter är tillgängliga idag</h3>
        <!-- surplus -->
        <p class="surplus">
          <b class="one">0</b>
          <b class="two">0</b>
          <b class="three">0</b>
          paket är tillgängliga nu
        </p>
        <!-- progressbar -->
        <div class="progressbar">
          <span></span>
        </div>
        <!-- view -->
        <p class="view"><span class="viewNum"><?php echo $viewNum;?></span> kunder tittar</p>
        <!-- price -->
        <p class="price">
          <strong>299 kr</strong>
          <del>1 787 kr</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=svaff-db83pcsdisu299&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'svaffdb82021trialsale')">
          KÖP NU
        </a>
        <!-- attention -->
        <p class="attention">1 Års Prenumeration / 3 PC</p>
        <!-- moneyback -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature wrapper">
  <div class="original">
    <h2>Varför väljer du Driver Booster PRO?</h2>
    <h3>
      Uppdatera <strong class="driverCount"></strong> föråldrade drivrutiner och spelkomponenter för att förbättra din dators prestanda och spelupplevelse.
    </h3>
    <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan01.png" alt="">
    <div class="content">
      <!--one -->
      <dl class="one clearfix">
        <dt></dt>
        <dd>
          <h4>Stabil Prestanda</h4>
          <p>
            Uppdatera nödvändiga datordrivrutiner för att undvika frysning och kraschar.
          </p>
        </dd>
      </dl>
      <!-- two -->
      <dl class="two clearfix">
        <dt></dt>
        <dd>
          <h4>Snabb Spelladdning </h4>
          <p>
            Uppdatera lämpliga komponenter för att garantera smidig lansering.
          </p>
        </dd>
      </dl>
      <!-- three -->
      <dl class="three clearfix">
        <dt></dt>
        <dd>
          <h4>Effektiv Enhetshantering</h4>
          <p>
            Upptäck och fixa enhetsfel för att minska hårdvaruproblem.
          </p>
        </dd>
      </dl>
      <!-- four -->
      <dl class="four clearfix">
        <dt></dt>
        <dd>
          <h4>Bättre Spelupplevelse</h4>
          <p>
            Uppdatera spelrelaterade drivrutiner för att uppleva avancerade och nya funktioner.
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <div class="update">
    <h2>Varför väljer du Driver Booster PRO?</h2>
    <h3>
      Uppdatera <strong>30</strong> föråldrade drivrutiner och spelkomponenter för att förbättra din dators prestanda och spelupplevelse.
    </h3>
    <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan02.png" alt="">
    <div class="content">
      <!-- five -->
      <dl class="five top clearfix">
        <dt class="driveNum">15</dt>
        <dd>drivrutiner är tillgängliga <br> för uppdatering <sup>PRO</sup></dd>
      </dl>
      <!-- six -->
      <dl class="six top clearfix">
        <dt class="gameNum">15</dt>
        <dd>uppdatering av spelkomponenter <br> tillgängliga <sup>PRO</sup></dd>
      </dl>
      <!--one -->
      <dl class="one clearfix">
        <dt></dt>
        <dd>
          <h4>Stabil Prestanda</h4>
          <p>
            Uppdatera nödvändiga datordrivrutiner för att undvika frysning och kraschar.
          </p>
        </dd>
      </dl>
      <!-- two -->
      <dl class="two clearfix">
        <dt></dt>
        <dd>
          <h4>Snabb Spelladdning </h4>
          <p>
            Uppdatera lämpliga komponenter för att garantera smidig lansering.
          </p>
        </dd>
      </dl>
      <!-- three -->
      <dl class="three clearfix">
        <dt></dt>
        <dd>
          <h4>Effektiv Enhetshantering</h4>
          <p>
            Upptäck och fixa enhetsfel för att minska hårdvaruproblem.
          </p>
        </dd>
      </dl>
      <!-- four -->
      <dl class="four clearfix">
        <dt></dt>
        <dd>
          <h4>Bättre Spelupplevelse</h4>
          <p>
            Uppdatera spelrelaterade drivrutiner för att uppleva avancerade och nya funktioner.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>Vad är skillnaden mellan din nuvarande utgåva och PRO?</h2>
  <table>
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="itema">
        <div class="free">Din nuvarande version</div>
      </th>
      <th class="space"></th>
      <th class="itemc">
        <div class="pro"><span>3-i-1</span> Packe</div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
      <td class="virtue">Uppdatera drivrutiner automatiskt medan systemet är inaktivt</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
      <td class="virtue">1 klick för att uppdatera drivrutiner</td>
      <td class="itema"><p class="exTxt first">7 dagar</p></td>
      <td class="space"></td>
      <td class="itemc changed"><b class="limite"><i class='all-icons red'>√</i></b></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
      <td class="virtue">Upp till 100% högre uppdateringshastighet</td>
      <td class="itema"><p class="exTxt">7 dagar</p></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
      <td class="virtue">Fixa enhetsfel för en säkrare dator</td>
      <td class="itema"><p class="exTxt">7 dagar</p></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
      <td class="virtue">Ladda ner och säkerhetskopiera automatiskt</td>
      <td class="itema"><p class="exTxt">7 dagar</p></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
      <td class="virtue">Maximera hårddiskoptimering för snabbare dator</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon07.png')?>" alt=""></td>
      <td class="virtue">Se till att filer, data och integritet är säker</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th class="itema"></th>
      <th class="space"></th>
      <th class="itemc">
        <p><b>299 kr</b> <del>1 787 kr</del></p>
        <a class="buybtn other shadow"
           href="https://www.iobit.com/buy.php?product=svaff-db83pcsdisu299&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'svaffdb82021trialsale')">
          <i class="all-icons"></i> KÖP NU
        </a>
        <p id="tabcount" class="countdown"> Skynda, <strong class="packsNum">**</strong> paket kvar!</p>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- review start -->
<div class="review wrapper">
  <h2>VI GÖR ALLT MÖJLIGT FÖR ATT MÖTA VÅRA <br> KUNDER OAVSETT VAR DU ÄR!</h2>
  <div class="reviewbox">
    <h3>Vad säger andra</h3>
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/pcmag.png')?>" alt="PC Magazine"></li>
      <li class="two">
        <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund">
      </li>
      <li class="three">
        <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya">
      </li>
      <li class="four"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"></li>
    </ul>
    <div class="details">
      <div>
        <h4>PC Magazine <span class="flag de"></span></h4>
        <p>
          “IObit tillverkar många olika verktyg, och Driver Booster PRO, som automatiskt uppdaterar dina drivrutiner är ett av dem bästa.”- PC Magazine
      </div>
      <div class="active">
        <h4>Adam Backlund <span class="flag us"></span></h4>
        <p>
          "Driver booster är en fantastisk applikation. För alla som har en hel del applikationer och enheter, och som inte har tid att manuellt uppdatera dem, rekommenderar jag starkt Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt." - Adam Backlund
        </p>
      </div>
      <div>
        <h4>Myo Thuya <span class="flag it"></span></h4>
        <p>
          "Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa ljudfel, nätverksfel, enhetsfel osv."    - Myo Thuya
        </p>
      </div>
      <div>
        <h4>Wayne Bowler <span class="flag it"></span></h4>
        <p>
          "Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter." - Wayne Bowler
        </p>
      </div>
    </div>
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>VÄRLDSOMSPÄNNANDE UTMÄRKELSER</h2>
    <p>IObit är betrodd och belönad av dessa media i världsklass de senaste sex åren,och du har valt den riktiga drivrutinsuppdateraren.</p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- awards end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl class="fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd>
      <h3>
        Prova det RISKFRITT - med vår 60 dagars Pengarna <br> Tillbaka Garanti
      </h3>
      <p>
        Vi är självsäkra om att aktivering av den PRO versionen <br>
        kommer att fixa alla dina huvudvärkdrivrutinsfrågor till <br>
        överkomligt pris!
      </p>
    </dd>
  </dl>
  <dl class="fr">
    <dd><h3>Accepterade Betalningssätt </h3></dd>
    <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
  </dl>
</div>
<!-- service end -->

<!-- bottom start -->
<dl class="note wrapper">
  <dt>Notera:</dt>
  <dd>*. Uppgifter kan variera beroende på olika system eller datorer.</dd>
  <dd>*. Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  <dd>*. Smart Defrag PRO / IObit Software Updater PRO stöder 1 års prenumeration / 1 dator.</dd>
</dl>
<div class="copyright">
  <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt="Driver Booster PRO6"></div>
    <h2 class="fl">83% Rabatt</h2>
    <div class="price fr">
      <h3> Håll Alla drivrutinerna Uppdaterade Hela Året!</h3>
      <a class="buybtn shadow other"
         href="https://www.iobit.com/buy.php?product=svaff-db83pcsdisu299&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'svaffdb82021trialsale')">
        <i class="all-icons"></i> KÖP NU
      </a>
      <p id="floatcount" class="countdown"> Skynda, <strong class="packsNum">**</strong> paket kvar!</p>
    </div>
  </div>
</div>
<!-- floatlayer end -->
<script>
  var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
  transData = JSON.parse(transDataJson);
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>