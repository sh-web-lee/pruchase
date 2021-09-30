<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
$aff=$_GET['aff'];
if (empty($_GET['ref'])) $_GET['ref'] = 'dkaff_db6_2018acregister';
if(in_array($_GET['st'],array('asc_acdb','ascu_acdb'))){
  $refStr.='-'.$_GET['st'];
}
if(in_array($_GET['to'],array('db_ac_asc_p1','db_ac_asc_p2','db_ac_asc_p3','db_ac_imf','db_ac_iot','db_ac_iu','db_ac_sd','db_ac_sm8'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>75% rabat på Driver Booster PRO for værdsatte brugere – Iobit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Eksklusivt tilbud til værdsatte IObit-brugere og inviterede medlemmer. Få pc-drivere og spilkomponenter ført up-to-date!">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <div class="title">
        <h1>Driver Booster 6 PRO</h1>
        <p>Det bedste program til nem, sikker og hurtig opdatering af pc-drivere</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="">
        <div class="discount fl">
          <h2>75% rabat</h2>
          <p>Kun til værdsatte IObit-brugere</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>KUN: <strong>kr.142</strong> <del>kr.568</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=dkaff-db61pc142&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $aff;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dkaffdb62018acregister');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktiver nu</span>
              </div>
            </a>
          </dd>
          <dd>1 år / 1 pc</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <div class="feature wrapper">
    <h2>Hvad kan Driver Booster 6 PRO gøre for dig?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>Større database</h3>
          <p>Driverdatabase med 3.000.000+ muligheder. Finder og opdaterer dine forældede drivere med et enkelt klik.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>Optimal spiloplevelse</h3>
          <p>Boost ydeevnen med den nyeste Game Ready Driver og spil jævnt med de nødvendige komponenter.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>Hurtig og automatisk hentning</h3>
          <p>Nyd at download og installering af nye drivere går hurtigt og automatisk.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>Sikker driveropdatering</h3>
          <p>Der laves automatisk sikkerhedskopi af de gamle drivere inden de nye installeres.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Prisvinder på verdensplan</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl class="active">
        <dt>
        <h3>Anmeldelser fra medier</h3></dt>
        <dd>"IObit har flere programmer bl.a. Driver Booster, som automatisk opdaterer dine drivere, er et af de bedste. Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware. Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien." </dd>
      </dl>
      <dl>
        <dt>
        <h3>Anmeldelser fra brugere</h3></dt>
        <dd>"Med den Driver Booster kan jeg nemt se hvilke enhedsdrivere, der er forældede og kan nemt opdatere dem. Desuden hjælper programmet mig med at rette lydfejl, netværksfejl, enhedsfejl osv. ... Jeg troede ikke på det før, men efter at have brugt programmet elsker jeg det ... min pc er bare hurtigere, sikrere og virker nyere end for 8 måneder siden ... så tak til IObit."  </dd>
      </dl>
      <dl>
        <dt>
        <h3>Anmeldelser fra brugere</h3></dt>
        <dd>
          <h4>"Jeg kan varmt anbefale Driver Booster, den hjælper med at opdatere drivere hurtigt og nemt."</h4>
          "Driver Booster er et fantastisk program. Som for nogen, der har mange programmer og drev og som ikke har tid til manuelt at opdatere dem, kan jeg varmt anbefale Driver Booster, det hjælper med at opdatere drivere hurtigt og nemt." </dd>
      </dl>
      <dl>
        <dt>
        <h3>Anmeldelser fra brugere</h3></dt>
        <dd>"Dette er et af de bedste driveropdateringsprogrammer overhovedet. Microsoft har endda vildledt mig ved at foreslå opdateringer, der ikke ville fungere sammen med min maskine. Dette program vidste hvilke opdateringer, jeg havde brug for uden konflikter. Det fungerede perfekt. Nemt at bruge, informativt og intuitivt. Det vil blive i min værktøjskasse for evigt ... Fantastisk job! </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/pcmag.png')?>" alt="PC Magazine">
        </div>
        <p>PC Magazine</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></div>
        <p>Myo Thuya</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></div>
        <p>Adam Backlund</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler">
        </div>
        <p>Wayne Bowler</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Garanti for en bedre ydelse og gnidningsløse spiloplevelser</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>KUN: <strong>kr.142</strong> <del>kr.568</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=dkaff-db61pc142&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $aff;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dkaffdb62018acregister');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktiver nu</span>
              </div>
            </a>
          </dd>
          <dd>1 år / 1 pc</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>Eksklusivt tilbud</h2>
        <p> Få <strong>75% RABAT </strong>og slip for pc-nedbrud og ustabile spil</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>KUN: <strong>kr.142</strong> <del>kr.568</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=dkaff-db61pc142&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $aff;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dkaffdb62018acregister');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktiver nu</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo $pResUrl; ?>script/script.js"></script>
</body>
</html>