<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dkdbexp_p' . $date;
  $c_name_t='dkdbexp_t' . $date;
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <title>Køb Driver Booster 7 PRO for kr. 0</title>
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
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png') ?>" alt="IObit" />
      </a>
      <p class="name">Driver Booster 7 PRO</p>
      <h1>Forsalget er startet</h1>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="Driver Booster PRO" />
        </div>
        <div class="right fl">
          <h2>TIL DE FØRSTE <big>1.000</big> KUNDER HVER DAG</h2>
          <div class="numbox">
            <h3>
              Kun
              <span id="topNum" class="giftNum">
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">7</b></b>
                  <b class="nwrap"><b class="numlist">9</b></b>
                </span>
              tilbage
            </h3>
            <p><span class="buyNum"><?php echo $viewNum; ?></span> brugere ser på dette</p>
          </div>
          <ul class="price clearfix">
            <li class="first"><strong>0<small>kr.</small>
              </strong></li>
            <li class="last">
              <a class="buybtn big"
                 href="https://www.iobit.com/buy.php?product=dk-db7preorder30day&ref=dk_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-dk');">
                Forudbestil nu
              </a>
            </li>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- foryou start -->
  <div class="foryou">
    <div class="wrapper">
      <h2>Hvad gjorde Driver Booster 6 PRO for dig?</h2>
      <div class="screen">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <span class="rocket"></span>
        <div class="forlist left">
          <h3>Forbedr   <b>PC-ydeevnen</b></h3>
          <p><i class="circle">.</i> Opdater <b>x</b> PC-drev og undgå systemproblemer;</p>
          <p><i class="circle">.</i> Ret <b>x</b> enhedsfejl og løs hardwareproblemer; </p>
        </div>
        <div class="forlist right">
          <h3>Forbedr  <b>Game</b> Performance</h3>
          <p><i class="circle">.</i> Opdater  <b>x</b> spilkomponenter for at garantere succesfuld spillanncering;</p>
          <p><i class="circle">.</i> Opdater  <b>x</b> prioriterede spilklare drev og få glæde af nye funktioner og korriger fejl og bugs;</p>
        </div>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- foryou end -->

  <!-- hashow start -->
  <div class="hashow">
    <div class="wrapper">
      <h2>Din Driver Booster PRO er nu udløbet</h2>
      <div class="screen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="point">!</span>
        </div>
        <ul class="right fr">
          <li><i class="all-icons arrow"></i> <span>Drevdatabase reducers til <b>2,500,000</b></span></li>
          <li><i class="all-icons"></i> <span><b>Ingen</b> hastighedsacceleration ved download</span></li>
          <li><i class="all-icons"></i> <span><b>Ingen</b> automatisk drevopdatering</span></li>
          <li><i class="all-icons"></i> <span><b>Ingen</b> sikkerhedskopiering af drev</span></li>
          <li><i class="all-icons"></i> <span><b>Ingen</b>  rettelse ved fejlmeddelelser af enheder</span></li>
          <li><i class="all-icons"></i> <span><b>Ingen</b> opdatering af spilkomponenter</span></li>
          <li><i class="all-icons"></i> <span><b>Ingen</b> prioritering af spilklare drev, som skal opdateres først</span></li>
        </ul>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- hashow end -->

  <!-- db-feature start -->
  <div class="db-feature">
    <div class="wrapper">
      <h2>Det er muligt at forudbestille Driver Booster 7 PRO, <br> det kan gøre endnu mere for dig</h2>
      <div class="clearfix">
        <div class="featlist one">
          <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
          <p>Understøtter </p>
          <h3>3,500,000+</h3>
          <p>PC-drev</p>
        </div>
        <div class="featlist two">
          <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
          <p>Understøtter </p>
          <h3>20% </h3>
          <p>Flere komponenter</p>
        </div>
        <div class="featlist three">
          <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
          <h3>20% hurtigere</h3>
          <p>drevskanninger</p>
        </div>
        <div class="featlist four">
          <img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt=""/>
          <h3>Stop Notificationer</h3>
          <p>ofra Driver Booster når du arbejder i fuld skæm</p>
        </div>
      </div>
      <h3 class="subtitle">Vælg PRO nu og få glæde af alle funktioner</h3>
      <ul class="price">
        <li class="last">
          <a class="buybtn big"
             href="https://www.iobit.com/buy.php?product=dk-db7preorder30day&ref=dk_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-dk');">
            Forudbestil nu <span>- <big>kr. 0</big></span>
          </a>
        </li>
      </ul>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    </div>
  </div>
  <!-- db-feature end -->
<!-- review start -->
<div class="review wrapper">
  <h2>Hvad andre siger</h2>
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/pc.png') ?>" alt=""></dt>
        <dd>
          <h2>Medieanmeldelser</h2>
          <p>Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware. Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien.</p>
          <cite>PC Magazine</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt="Harold Barr"></dt>
        <dd>
          <h2>Brugeranmeldelelse</h2>
          <p>
            Sikke en overraskelse at modtage Driver Booster fra IObit. Så snart det var installeret begyndte
            opdateringerne. Jeg anede ikke jeg havde så mange programmer på computeren og slet ikke at de
            behøvede opgraderinger. Da opdateringerne afsluttede, var det som om, min PC havde fået en
            komplet makeover. Fantastisk!
          </p>
          <cite>Harold Barr</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></dt>
        <dd>
          <h2>Brugeranmeldelelse</h2>
          <p>
            Virkelig den bedste driver updater der er på markedet. Det er brugervenligt, har en simpel
            brugerflade der er nem at bruge og det klarer arbejdet bedre end nogen applikation, jeg tidligere
            har brugt. Dette program er fem stjerner værd. Varmt anbefalet.
          </p>
          <cite>Hishaam Salasa</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png') ?>" alt="Carlos Alexandre Veríssimo"></dt>
        <dd>
          <h2>Brugeranmeldelelse</h2>
          <p>
            Det hjalp med at løse hastighedsproblemer på min gamer laptop uden at nedbryde det. Nogle
            gange, når jeg har forsøgt at opdatere mine drev, er computeren brudt sammen og jeg var nødt til
            at formatere min computer for at gendanne funktioner, men dette skete ikke med DB7. Det er nemt
            at bruge og downloader hurtigt, det er det bedste værktøj på markedet hidtil!
          </p>
          <cite>Carlos Alexandre Veríssimo</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png') ?>" alt="Carlos Alexandre Veríssimo"></dt>
        <dd>
          <h2>Brugeranmeldelelse</h2>
          <p>
            First, I must say its a very light and easy to use handy software. driver booster runs in the background and won't strain the CPU and RAM,  i was able to play new game titles without having to shutdown any background process.  I usually run windows updates daily to get the latest drivers and driver booster updated and fixed my PC drivers extremely accurately even better than windows update did. I'm really impressed with the software and would highly recommend it as a product.
          </p>
          <cite>Dunston Diaz</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Priser fra hele verden</h2>
    <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
  </div>
</div>
<!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
        <dd>
          <h4>Notifikation til forsalg:</h4>
          <p>
            Prøv det RISIKOFRIT med vores 60 dages tilfredshedsgaranti eller pengene retur. Vi er sikre på, at aktiveringen af PRO-udgaven vil rette alle dine drevproblemer til en rimelig pris!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Vi accepterer</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png') ?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Note:</dt>
        <dd>*Efter 30 dages gratis prøveperiode, trækkes 199 kr. fra dit kreditkort eller PayPal-konto automatisk. 70% rabat fra originalprisen på 679 kr. gælder kun for forudbestillinger!</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y') ?> IObit. Rettigheder forbeholdes</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/db-small-box.png') ?>" alt="Driver Booster PRO" />
    </div>
    <div class="numbox fl">
      <h3>
        Skynd dig, kun
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">7</b></b>
          <b class="nwrap"><b class="numlist">9</b></b>
        </span>
        tilbage
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> brugere ser på dette</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong>0<small>kr.</small>
        </strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-db7preorder30day&ref=dk_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-dk');">
          Forudbestil nu
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script>
    refStr='<?php echo $refStr;?>';
    $('.foryou .screen p b').eq(0).html('<?php echo paramDeal($paramData->UpdDrv);?>').end()
        .eq(1).html('<?php echo paramDeal($paramData->FixedErr);?>').end()
        .eq(2).html('<?php echo paramDeal($paramData->UpdCmp);?>').end()
        .eq(3).html('<?php echo paramDeal($paramData->UpdRdy);?>');
  </script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>