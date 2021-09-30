<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dkdbpre_p' . $date;
  $c_name_t='dkdbpre_t' . $date;
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
if($_GET['to']=='db6preicon') {
  if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
  }
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
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=dk-db7preorder30day&ref=dk_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-dk');">
                Forudbestil nu
              </a>
            </li>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

<!-- function-wrap start -->
<div class="function-wrap">
  <div class="wrapper">
    <h2 class="why">
      Hvorfor opgradere til<br> Driver Booster 7 PRO? <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    </h2>
    <div class="db-message">
      <h2>Løs alle problemer forårsaget af drev</h2>
      <div class="screenshot">
        <div class="maglist one">
          <h3><big>Ret</big> problemer med spilindlæsninger</h3>
          <p>
            Opdaterer spilklare drev og anbefaler passende spilkomponenter, som retter langsom spilindlæsning samt ringe 
          </p>
          <span class="tag">Kun PRO</span>
        </div>
        <div class="maglist two">
          <h3><big>Ret</big> Systemnedbrydninger</h3>
          <p>
            Skanner for 3,500,000+ drev og holder dem opdateret for at løse den blå skærmfejl, systemnedbrydninger og andre systemproblemer for dig 
          </p>
          <span class="tag">PRO retter flere</span>
        </div>
        <div class="maglist three">
          <h3><big>Ret</big> Ret Enhedsfejl</h3>
          <p>
            1 klik for at registrere og reparere fejlkoder såsom mislykkede drevindlæsning, deaktivering af enheder, enhedsforbindelser m.fl. 
          </p>
          <span class="tag last">kun PRO</span>
        </div>
      </div>
    </div>
    <div class="db-feature clearfix">
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
      <h2>Automatisk og sikker drevopdatering</h2>
      <div class="featlist one">
        <div class="inner">
          <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
          <h3>SCAN</h3>
          <p>Kontroller automatisk enhedsdriverens status for opdateringer.</p>
          <p class="red"><span>Sikker https-forbindelse</span></p>
        </div>
      </div>
      <div class="featlist two">
        <div class="inner">
          <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
          <h3>DOWNLOAD</h3>
          <p>Download automatisk drivere, når systemet er inaktivt.</p>
          <p class="red"><span>Drivere godkendte kun WHQL & IObit-reglen</span></p>
        </div>
      </div>
      <div class="featlist three">
        <div class="inner">
          <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
          <h3>INSTALLERE</h3>
          <p>Installer automatisk drivere, når systemet er inaktivt.</p>
          <p class="red"><span>Tidligere backup af drivere</span></p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- function-wrap end -->

<!-- comparison start -->
<div class="comparison">
  <div class="wrapper">
    <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    <h2>Driver Booster 7 PRO giver dig meget mere</h2>
    <table>
      <thead>
      <tr>
        <th class="text"></th>
        <th class="itema">
          <h3>Din nuværende Version</h3>
        </th>
        <th class="space"></th>
        <th class="itemb">
          <h3>Driver Booster 7 PRO</h3>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""> Drev database</td>
        <td class="itema">2,500,000+</td>
        <td class="space"></td>
        <td class="itemb">3,500,000+</td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""> Booster downloadhastigheden af drev	</td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""> Skanner og opdaterer automatisk efter tidsplan</td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""> Sikkerhedskopierer tidligere drev</td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""> Opdaterer spilkomponenter</td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""> Prioritere opdatering af spilklare drev</td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""> Reduserer hardware problemer</td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      </tbody>
      <tfoot>
      <tr>
        <th class="text"></th>
        <th class="itema"></th>
        <th class="space"></th>
        <th class="itemb"></th>
      </tr>
      </tfoot>
    </table>
    <h4>Opgrader for <strong>kr. <big>0</big></strong> og få adgang til alle funktioner nu</h4>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=dk-db7preorder30day&ref=dk_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-dk');">
      Forudbestil nu
    </a>
  </div>
</div>
<!-- comparison end -->

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
      <li class="first"><strong>0<small>kr.</small></strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-db7preorder30day&ref=dk_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-dk');">
          Forudbestil nu
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