<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'svdbofficial_p' . $date;
  $c_name_t='svdbofficial_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <title>Betala 0 kr för att få den senaste versionen av Driver Booster 8 PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>Förköp börjar</p>
          <h2>#1 Pålitlig Ledare i Drivrutinuppdaterare</h2>
          <h4>Ge Dig Smidigare PC och Snabbare Spel </h4>
          <div class="price">
            <span>Förköp <br>Pris:</span>
            <strong>0kr <sup>*</sup></strong>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=sv-db8preorder&ref=sv_db8preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-sv');">
              Förbeställ Nu
            </a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              Kvar Nu
            </h3>
            <div class="bar">
               <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="feature">
    <div class="message01 wrapper">
      <div class="title">
        <h2>Över 4500 000 Drivrutiner</h2>
        <h4>Den största databas för Driver Booster någonsin</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png')?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png')?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png')?>" alt="" class="icon02">
        </li>
         <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png')?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt><i></i>Automatiska Drivrutinuppdaterare <span>WHQL</span></dt>
          <dd>Hitta och uppdatera automatiskt till dem mest matchade drivrutinerna som är WHQL-certifierade.</dd>
        </dl>
        <dl class="two">
          <dt><i></i><h3>Stabil Drivrutin eller Senaste<br> Drivrutin <span class="market">unik på marknaden</span></h3></dt>
          <dd>
            Ge stabila drivrutiner som är skräddarsydda för vem som prioriterar tillförlitlighet för enheter och senaste drivrutiner som är skräddarsydda för vem som prioriterar stöd för den senaste funktionen.
          </dd>
        </dl>
        <dl>
          <dt><i></i>Fixa Maskinvaruproblem</dt>
          <dd>
            Ge en lösningen med en klick för att lösa problem med dålig videokvalitet, oklart ljud, tappad internetanslutning och extern enhet som inte fungerar. 
          </dd>
        </dl>
        <dl>
          <dt><i></i>Fristående Drivrutinuppdaterare</dt>
          <dd>
            Installera nätverksdrivrutiner utan internetanslutning. Ladda ner rätt nätverksdrivrutin på en dator och överför den sedan till en annan dator. 
          </dd>
        </dl>
      </div>
    </div>
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Spelklara Drivrutiner och Komponenter</h2>
        <h4>Optimering för 90% datorspel</h4>
      </div>
      <div class="line"></div>
      <dl class="message-box">
        <dt class="one" data-name='default'>Smidigare Spel</dt>
        <dd class="one" data-name='default'>Tillhandahålla dem senaste spelklara drivrutinerna och komponenterna för att minska datorfördröjningar eller skärmavlägsningar och stödja dem nya spelfunktionerna. </dd>
        <dt class="two" data-name='default'>Spel Boost</dt>
        <dd class="two" data-name='default'>Sluta onödiga tjänster för att förbättra din datorhastighet för en bättre spelupplevelse. </dd>
      </dl>
      <div class="img-box">
        <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="computer three" data-name='default'>
        <span class="light four" data-name='default'></span>
        <span class="smail-light"></span>
        <img src="<?php echo getStaticUrl('images/feature-icon.png')?>" alt="" class="icon five" data-name='default'>
      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Andra Funktioner Du Kan Njuta av</h2>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <h3>Säker Uppdatering</h3>
            <p>Säkerhetskopiera drivrutiner automatiskt<br> och skapa systemåterställningspunkt. </p>
          </dd>
        </dl>
        <dl class="center two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt="" ></dt>
          <dd>
            <h3>Tyst Mode</h3>
            <p>Tysta automatiskt alla aviseringar<br> för att sluta störande. </p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt="" ></dt>
          <dd>
            <h3>Automatisk Radering</h3>
            <p>Radera det installerat<br> drivrutinspaketet automatiskt. </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>Det är den Bästa Drivrutinuppdateraren Över Hela Världen</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Nedladdningar 
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Användares Betyg
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          Medierrek-<br>ommendationer 
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>I media</dt>
              <dd>
                “IObit tillverkar många olika verktyg, och Driver Booster PRO, som automatiskt uppdaterar dina drivrutiner är ett av dem bästa.”- PC Magazine
              </dd>
            </dl>
            <dl>
              <dt>Användares omdömen</dt>
              <dd>
                "Driver booster är en fantastisk applikation. För alla som har en hel del applikationer och enheter, och som inte har tid att manuellt uppdatera dem, rekommenderar jag starkt Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt."
              </dd>
            </dl>
            <dl>
              <dt>Användares omdömen</dt>
              <dd>
                "Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter. Det fungerade perfekt. Lätt att använda, informativt och intuitivt. Det här kommer att stanna i min verktygslåda för alltid... Bra jobbat!"
              </dd>
            </dl>
            <dl>
              <dt>Användares omdömen</dt>
              <dd>
                "Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa ljudfel, nätverksfel, enhetsfel osv... Jag trodde inte det innan jag använde programmet, men efter att ha testat älskar jag verkligen det.. Min dator är snabbare, säkrare och känns nyare nu än under de senaste 8 månaderna... Så tack IObit."
              </dd>
            </dl>
          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></div>
            <p>Myo Thuya</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></div>
            <p>Adam Backlund</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"></div>
            <p>Wayne Bowler</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Världsomspännande utmärkelser</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Notera:</dt>
      <dd>
        *. I slutet av 30 dagars gratis provperiod debiteras ditt kreditkort eller PayPalkonto automatiskt 299Kr. Denna 66% rabatt från det ursprungliga priset på 899kr är bonus endast för förbeställningar!
      </dd>
      <dd>*.Om du inte är nöjd kan du avbryta beställningen inom 30 dagar utan att betala en avgift.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alla rättigheter förbehållna</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        av 1000 platser kvar nu 
      </h3>
    </div>
    <div class="price fr">
      <strong>0kr <sup>*</sup></strong>
      <span></span>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=sv-db8preorder&ref=sv_db8preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-sv');">
        Förbeställ Nu
      </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>