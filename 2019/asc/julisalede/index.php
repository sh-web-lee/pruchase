<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='deascoff_p'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=15;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
  fclose($fp);
}

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -76400174;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/names_jul.txt',rand(1,22))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,4)==4)?'Professional &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp':'Professional Plus';
$viewNum=rand(60,88);
//if($_GET['type']==2){
//	$saleType=1;
//}
if($_GET['action']=='getBuyUser'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'viewNum'=>$viewNum));
  exit();
}

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro','asc_c10','asc_c11',
        'asc_su5','asc_su6','asc_su7','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
        'asc_promote9','asc_promote10','asc_promote11','asc_promote12')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Sparen Sie heute bis zu 80% auf Advanced SystemCare PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Sommer Sale <br><span>Macht Ihre Computer sauberer, schneller und sicherer</span></h1>
    <!-- countdown -->
    <p class="countdown">
      <span>SALE</span>
      <strong>00</strong> Min:
      <strong>00</strong> Sek:
      <strong>00</strong> Ms
    </p>
    <!-- attention -->
    <p class="attention">Schon <span class="buyNum">*</span> Deals verkauft</p>
    <!-- container -->
    <ul>
      <!-- 1PC -->
      <li class="basic">
        <h3>BASIC</h3>
        <dl class="save">
          <dt>15€</dt>
          <dd>günstiger</dd>
        </dl>
        <img src="<?php echo $pResUrl;?>images/asc-1pc.png" alt="Advanced SystemCare PRO 12">
        <!-- price -->
        <p class="price clearfix">
          <del>39,99€</del>
          <span>1 PC / 1 Jahr</span>
          <strong>24,99€</strong>
        </p>
        <!-- 1PC buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc121pc2499&ref=de_asc121pcbuy1907<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcbuy1907-de')">
          <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
          JETZT KAUFEN
        </a>
      </li>
      <!-- 3PC -->
      <li class="professional">
        <h3>Professional</h3>
        <dl class="save">
          <dt>34€</dt>
          <dd>günstiger</dd>
        </dl>
        <dl class="were">
          <dt class="packsNumPro">**</dt>
          <dd>übrig</dd>
        </dl>
        <img src="<?php echo $pResUrl;?>images/asc-3pc.png" alt="Advanced SystemCare PRO 12">
        <!-- price -->
        <p class="price clearfix">
          <del>59,99€</del>
          <span>3 PCs / 1 Jahr</span>
          <strong>25,99€</strong>
        </p>
        <!-- 3PC buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc123pc2599&ref=de_asc123pcbuy1907<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbuy1907-de')">
          <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
          JETZT KAUFEN
        </a>
      </li>
      <!-- 5PC -->
      <li class="professional-plus">
        <h3>Professional Plus</h3>
        <dl class="save">
          <dt>103,94€</dt>
          <dd>günstiger</dd>
        </dl>
        <dl class="were">
          <dt class="packsNum">**</dt>
          <dd>übrig</dd>
        </dl>
        <div class="box">
          <img src="<?php echo $pResUrl;?>images/asc-3pc.png" alt="Advanced SystemCare PRO 12">
          <img onclick="goTarget($('.gifts'))" class="asc-gifts" src="<?php echo $pResUrl;?>images/asc-gifts.png" alt="">
        </div>
        <!-- price -->
        <p class="price clearfix">
          <span class="tip">Gratisgeschenke <i></i></span>
          <del>129,93€</del>
          <span>3 PCs / 1 Jahr</span>
          <strong>25,99€</strong>
        </p>
        <!-- tipbox -->
        <dl class="tipbox">
          <dt>Infos</dt>
          <dd>
            3 Produkte in 1! <strong>Advanced SystemCare PRO, Smart Defrag PRO und Protected Folder</strong>. Komplettes Paket, um Ihren PC sauberer, schneller und sicherer zu machen.
          </dd>
        </dl>
        <!-- 3PC buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc12bundle2599&ref=de_asc123pcbundle1907<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundle1907-de')">
          <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
          JETZT KAUFEN
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- end banner -->

<!-- payments -->
<div class="payments wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></div>
<!-- end payments -->

<!-- benfits -->
<div class="benfits">
  <div class="wrapper">
    <h2>Weitere exklusive Funktionen, <br>Ihr PC wird schneller und sicherer!</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
          </li>
        </ul>
      </div>
      <ul class="list-icon">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class="detail-list">
      <dl>
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>100% * SICHERER</h3>
          <p>
            Schützt Ihre Privatsphäre und Ihre Daten vor geheimen Zugriffen und verhindert böswillige Angriffe, damit Ihre Privatsphäre zweimal * sicherer wird als die Free-Version.
          </p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>200% * SCHNELLER</h3>
          <p>
            Bereinigt alle nutzlosen Dateien und optimiert die CPU und den RAM, um den PC-Start zu beschleunigen. Es erhöht auch die Geschwindigkeit des Systems, um den langsamen PC bis zu 200% schneller zu machen
          </p>
        </dd>
      </dl>
      <dl class="three">
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>300% * FLÜSSIGER</h3>
          <p>
            Steigert die Geschwindigkeit von Downloads, Spielen, Surfen im Internet und Videoplattformen wie YouTube um bis zu 300%.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Mehr Speicherplatz</h3>
          <p>
            Bereinigt Junk-Dateien, ungültige Links, Systemprotokolldateien und unvollständige Download-Dateien gründlich mit erweiterter Optimierung.
          </p>
        </dd>
      </dl>
      <a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Für weitere Informationen klicken Sie hier></a>
    </div>
  </div>
</div>
<!-- end benfits -->

<!-- gifts -->
<div class="gifts wrapper">
  <h2>PROFESSIONAL PLUS<br> <strong>3 IN 1!</strong> ALLES, WAS SIE FÜR IHREN PC WOLLEN, IST HIER</h2>
  <dl class="asc">
    <dt>ASC PRO</dt>
    <dd>
      <h3>ASC PRO <span>3 PCs / 1 Jahr</span></h3>
      <p>Professionelle Optimierung für die PCs Ihrer gesamten Familie!</p>
    </dd>
  </dl>
  <dl class="sd">
    <dt>SD PRO</dt>
    <dd>
      <h3>SD PRO</h3>
      <p>Es bietet die beste Defragmentierung und beschleunigt den Festplatten-Treiber auf das Maximum!</p>
    </dd>
  </dl>
  <dl class="pf">
    <dt>PF PRO</dt>
    <dd>
      <h3>PF PRO</h3>
      <p>Schützt Ihre persönlichen Dateien vor Datenverlust, Viren, Spyware, Ransomare und anderen böswilligen Angriffen!</p>
    </dd>
  </dl>
  <div class="clear"></div>
  <!-- price -->
  <p class="price">
    <strong>25,99€ </strong>
    <del>129,93€ </del> <br>
    <span>80% RABATT</span>
  </p>
  <!-- 5PC buybtn -->
  <a class="buybtn"
     href="https://www.iobit.com/buy.php?product=de-asc12bundle2599&ref=de_asc123pcbundle1907<?php echo $refStr;?>&refs=de_purchase_asc"
     onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundle1907-de')">
    <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
    JETZT KAUFEN
  </a>
</div>
<!-- end gifts -->

<!-- review -->
<div class="reviews ">
  <div class="wrapper">
    <h2>Danksagungen und Bewertungen auf der ganzen Welt</h2>
    <p>Die Zufriedenheit unserer Kunden liegt uns besonders am Herzen.</p>
    <ul class="message clearfix">
      <li>
        <strong>200+</strong>
        <p>Beliebt in mehr als <b>200</b> Ländern</p>
      </li>
      <li>
        <strong>1.000+</strong>
        <p>Von über <b>1.000</b> Medien empfohlen</p>
      </li>
      <li>
        <strong>250.000.000+</strong>
        <p>Mehr als <b>250 Millionen</b> treue<br> Fans weltweit</p>
      </li>
      <li>
        <strong>80%+</strong>
        <p>Über <b>80%</b> der User haben die PRO<br> Edition aktiviert</p>
      </li>
    </ul>
    <div class="map">
      <span class="recover recover01 big"></span>
      <span class="recover recover02 middle"></span>
      <span class="recover recover03 smail"></span>
      <span class="recover recover04 big"></span>
      <span class="recover recover05 middle"></span>
      <span class="recover recover06 smail"></span>
      <span class="recover recover07 big"></span>
      <span class="recover recover08 middle"></span>
      <span class="recover recover09 smail"></span>
      <span class="recover recover10 smail"></span>
      <span class="recover recover11 smail"></span>
      <span class="recover recover12 smail"></span>
      <span class="recover recover13 middle"></span>
      <span class="recover recover14 middle"></span>
      <span class="recover recover15 smail"></span>
      <span class="recover recover16 smail"></span>
      <span class="recover recover17 big"></span>
      <span class="recover recover18 smail"></span>
      <span class="recover recover19 smail"></span>
      <span class="recover recover20 big"></span>
      <span class="recover recover22 smail"></span>
      <span class="recover recover23 smail"></span>
      <span class="recover recover24 smail"></span>
      <span class="recover recover25 smail"></span>
      <span class="recover recover26 smail"></span>
      <dl class="tradotto-da-tedesco">
        <dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
        <dd>
          <strong>Markus Thomas</strong>
          <p>
            Es ist das beste Programm, das meinen PC ganz richtig<br> reinigt und beschleunigt. Mein alter Computer läuft deutlich<br> schneller als früher!
          </p>
          <span></span>
        </dd>
      </dl>
      <dl class="html-it">
        <dt><img src="<?php echo $pResUrl; ?>images/chip-de.png"></dt>
        <dd>
          <strong>Chip.de</strong>
          <p>
            Advanced SystemCare Pro vernichtet<br> überflüssigen Daten-Ballast, beschleunigt den<br> Windows-Start und verbessert die<br> System-Sicherheit.
          </p>
          <span></span>
        </dd>
      </dl>
      <dl class="baixaki">
        <dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
        <dd>
          <strong>Baixaki</strong>
          <p>
            Advanced SystemCare hat eine außergewöhnliche<br> Leistung und ist in der Lage, wirklich komplexe<br> Probleme zu erkennen und zu lösen.
          </p>
          <span></span>
        </dd>
      </dl>
      <dl class="charles-r-widick">
        <dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
        <dd>
          <strong>Charles R. Widick</strong>
          <p>Ich wähle immer noch Advanced SystemCare Pro!</p>
          <span></span>
        </dd>
      </dl>
      <dl class="cnet">

        <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
        <dd>
          <strong>Cnet</strong>
          <p>Advanced SystemCare behebt alle<br> Probleme, die Ihren Computer<br> verlangsamen!</p>
          <span></span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end review -->

<!-- compare -->
<div class="compare wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Funktionsvergleich:</th>
      <th class="itemb">
        <div class="box">
          Ihre aktuelle<br> Version
          <span></span>
        </div>
      </th>
      <td class="space"></td>
      <th class="itema">
        <div class="box">
          PRO-Version
          <span></span>
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons01.png" alt=""></td>
      <td class="virtue">Grundlegende Systemreinigung und -Optimierung</td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons02.png" alt=""></td>
      <td class="virtue">Bis zu 300% höhere Internetgeschwindigkeit</td>
      <td class="itemb"><i class="all-icons close">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons03.png" alt=""></td>
      <td class="virtue">Bis zu 200% schnellerer Systemstart</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons04.png" alt=""></td>
      <td class="virtue">Stabileres System mit tiefer Registrierungsbereinigung</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons05.png" alt=""></td>
      <td class="virtue">Mehr Systemtempo mit einem hervorragenden Festplattenoptimierungsmotor</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons06.png" alt=""></td>
      <td class="virtue">Besserer Datenschutz mit Privatsphärenschield und Fingerabdrucklöschung</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons07.png" alt=""></td>
      <td class="virtue">Keine Sicherheitsbedrohungen mit Echtzeitschutz</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons08.png" alt=""></td>
      <td class="virtue">Automatisches Löschen von Surfspuren</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons09.png" alt=""></td>
      <td class="virtue">Automatisches Update und automatische RAM-Reinigung</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons10.png" alt=""></td>
      <td class="virtue">Kostenloser technischer Support 24/7</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon radius"></td>
      <td class="virtue radius"></td>
      <td class="itemb radius"></td>
      <td class="space radius"></td>
      <td class="itema radius"> <span class="shadow"></span></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <h2>Holen Sie sich jetzt für nur 0,05€ pro Tag die beste Optimierung</h2>
    <!-- box -->
    <div class="box fl">
      <img src="<?php echo getStaticUrl('images/bottombuy-box.png')?>" alt="Advance SystemCare PRO 12">
    </div>
    <!-- selector -->
    <ul class="selector fl">
      <li class="asc5pc active clearfix" data-num="2">
        <i></i>
        Professional Plus 
        <strong class="fr">80% <small>Rabatt</small></strong>
      </li>
      <li class="asc3pc" data-num="1">
        <i></i>
        Professional
        <strong class="fr">56% <small>Rabatt</small></strong>
      </li>
      <li class="asc1pc" data-num="0">
        <i></i>
        Basic
        <strong class="fr">37% <small>Rabatt</small></strong>
      </li>
    </ul>
    <!-- another -->
    <div class="another fr">
      <p class="price">
        <strong>25,99€ </strong>
        <del>129,93€ </del> <br>
      </p>
      <!-- 5PC buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=de-asc12bundle2599&ref=de_asc123pcbundle1907<?php echo $refStr;?>&refs=de_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcbundle1907-de')">
        <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
        JETZT KAUFEN
      </a>
    </div>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
      <dd><strong>Zufriedenheitsgarantie</strong>60-Tage-Geld-zurück-Garantie</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><strong>Zahlungssicherheit</strong>IIhre Zahlung ist 100% sicher</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
      <dd><strong>Schnelle Aktivierung</strong>Kurz nach dem Kauf erhalten Sie<br> einen Aktivierungscode.</dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd><strong>Kundendienst</strong>Kostenloser technischer<br> Support 24/7</dd>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Hinweis:</dt>
    <dd>
      *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
    </dd>
    <dd>
      *. Daten können sich system- oder computerabhängig ändern.
    </dd>
  </dl>
  <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
</div>
<!-- end footer -->

<!-- float -->
<div class="float">
  <a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
  <dl>
    <dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
    <dd>hat den <strong id="saleType">Professional Plus</strong> bereits aktiviert</dd>
    <dd class="last"><span class="viewNum"><?php echo $viewNum;?></span> Personen sind gerade auf dieser Seite!</dd>
  </dl>
</div>
<!-- end float -->

<!-- pop -->
<div class="pop">
  <div class="pop-large">
    <h2>HERZLICHEN GLÜCKWUNSCH!</h2>
    <h3>SIE GEWINNEN EINEN EXTRARABATT!</h3>
    <img class="box" src="<?php echo getStaticUrl('images/pop-off.png')?>" alt="">
    <p class="sold">Nur <strong>20</strong> Benutzer haben das Glück, diesen Gutschein zu gewinnen!</p>
    <p class="price">Jetzt <strong>22,99€</strong></p>
    <!-- pop buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=de-asc121pc2299&ref=de_asc121pcbuypop1907<?php echo $refStr;?>&refs=de_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcbuypop1907-de');">
      <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
      JETZT KAUFEN
    </a>
    <!-- close -->
    <a class="button close" href="javascript: closePop();">Schließen</a>
    <!-- mini -->
    <a class="button mini" href="javascript: miniPop();">Minimieren</a>
  </div>
</div>
<div class="pop-small">
  <img class="box" src="<?php echo getStaticUrl('images/pop-off-small.png')?>" alt="">
  <!-- pop buybtn -->
  <a class="buybtn"
     href="https://www.iobit.com/buy.php?product=de-asc121pc2299&ref=de_asc121pcbuypop1907<?php echo $refStr;?>&refs=de_purchase_asc"
     onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcbuypop1907-de');">
    <i><img src="<?php echo $pResUrl;?>images/buycart.png" alt=""></i>
    JETZT KAUFEN
  </a>
  <!-- maxi -->
  <a class="button maxi" href="javascript: showPop();">Maximieren</a>
</div>
<!-- end pop -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>

