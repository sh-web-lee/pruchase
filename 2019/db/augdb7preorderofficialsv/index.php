<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'svdbexp_p' . $date;
  $c_name_t='svdbexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
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
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <title>Betala 0 kr för att få den Driver Booster 7 PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <p class="name">Driver Booster 7 PRO</p>
      <h1>Förbeställning Börjar</h1>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right fl">
          <h2>FÖR FÖRSTA   <big>1000</big>  KUNDER PER DAG</h2>
          <div class="numbox">
            <h3>
              Endast 
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              Kvar 
            </h3>
            <p><span class="buyNum"><?php echo $viewNum; ?></span> besökare nu</p>
          </div>
          <ul class="price clearfix">
            <li class="first"><strong>0<small>kr</small></strong></li>
            <li class="last">
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=sv-db7preorder30day&ref=sv_db7preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderofficial-sv');">
                Förbeställ Nu
              </a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- function-wrap start -->
  <div class="function-wrap">
    <div class="wrapper">
      <h2 class="why">
        Det är den Bästa Drivrutinuppdateraren <br> Du Kan Vända Dig till: <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
      </h2>
      <div class="db-message">
        <h2>Intelligent Update Process to Keep <span>3,500,000+</span> Drivers Updated</h2>
        <div class="screenshot">
          <img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
          <div class="maglist one">
            <h3><big>Säker</big> Drivrutins Uppdatering</h3>
            <span class="tag">Endast PRO</span>
            <p>Skapa systemåterställningspunkt och säkerhetskopiera tidigare drivrutiner innan du uppdatera för att garantera säker uppdatering och förhindra något oväntat.</p>
            
          </div>
          <div class="maglist two">
            <h3><big>Snabb</big> Drivrutins <br> Uppdatering </h3>
            <span class="tag">Endast PRO</span>
            <p>
              Lås upp drivrutins nedladdningshastighet helt för att spara din tid.
            </p>
          </div>
          <div class="maglist three">
            <h3><big>Automatisk  </big> Drivrutins Uppdatering </h3>
            <span class="tag">Endast PRO</span>
            <p>
             Kontrollera drivrutins status automatiskt i ett schema och uppdatera automatiskt drivrutiner när ditt system är inaktivt.
            </p>
          </div>
        </div>
      </div>
      <div class="db-feature">
        <h2>Det Gör Mer än en Drivrutinsuppdaterare</h2>
        <div class="featlist one">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
            <h3>Förbättra <br> Spelprestanda</h3>
            <span class="tag">Endast PRO</span>
            <p>Uppdatera game-ready drivrutin och rekommendera lämpliga spelkomponenter för att förändra långsam spelbelastning och dålig spelprestanda.</p>
          </div>
        </div>
        <div class="featlist two">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
            <h3>Lösa Problem med Hårdvara</h3>
            <span class="tag">Endast PRO</span>
            <p>Med bara 1 klick kan du upptäcka och reparera enhetsfel t.ex. Windows kan inte identifiera en enhet, enheten är inaktiverad eller enheten kan inte fungera etc.</p>
          </div>
        </div>
        <div class="featlist three">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
            <h3>Undvik Störande </h3>
            <span class="tag red">Ny</span>
            <p>Tystnar automatiskt alla Driver Boosters aviseringar när en fullskärmsuppgift eller ett specifikt program körs.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- function-wrap end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Vad säger andra:</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>I media</h2>
            <h4></h4>
            <p>
              “IObit tillverkar många olika verktyg, och Driver Booster PRO, som automatiskt uppdaterar dina drivrutiner är ett av dem bästa. Driver Booster PRO är enkelt och funktionellt. Programmet blir ännu mer attraktivt tack vare att det innehåller flertalet licenser till väldigt budgetvänliga priser och tack vare att användargränssnittet både går att anpassa och ger en bra överblick över information om hårdvaror. Konkurrerande Ashampoo Driver Updater och SlimWare Utilities DriverUpdate erbjuder också intressanta funktioner, men det är IObit Driver Booster PRO som tar täten.”
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <h4></h4>
            <p>
              "Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa ljudfel, nätverksfel, enhetsfel osv... Jag trodde inte det innan jag använde programmet, men efter att ha testat älskar jag verkligen det.. Min dator är snabbare, säkrare och känns nyare nu än under de senaste 8 månaderna... Så tack IObit."
            </p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <h4></h4>
            <p>
              "Driver booster är en fantastisk applikation. För alla som har en hel del applikationer och enheter, och som inte har tid att manuellt uppdatera dem, rekommenderar jag starkt Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt."
            </p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <h4></h4>
            <p>
              "Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter. Det fungerade perfekt. Lätt att använda, informativt och intuitivt. Det här kommer att stanna i min verktygslåda för alltid... Bra jobbat!"
            </p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Världsomspännande Utmärkelser</h2>
      <p>
        Med förtroende och priser från dessa världsledande medier de senaste fyra åren är det ett rätt val du har gjort.
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Pengarna-tillbaka-garanti</h4>
          <p>
           Om du inte är nöjd med produkten inom 60 dagar, ger vi dig pengarna tillbaka.
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Betalningsmetoder</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Notera: </dt>
        <dd>
          * Vid slutet av den kostnadsfria 30-dagars testperioden kommer ditt kreditkort eller PayPal-konto att debiteras 329 kr automatiskt. Denna 63% rabatt från det ursprungliga priset på 899 kr är endast en bonus på förbeställningar!        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Skynda, endast
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        paket kvar
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> besökare nu</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong>0<small>kr</small></strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-db7preorder30day&ref=sv_db7preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderofficial-sv');">
          Förbeställ Nu
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>