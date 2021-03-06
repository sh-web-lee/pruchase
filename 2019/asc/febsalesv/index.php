<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=69041325;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='sviuoct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=3;
    }
  }else{
    $packsNum=89;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
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
}

$name=explode(' ',trim(get_line('./data/names_feb.txt',rand(1,421))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,6)%6==0)?1:3;
//$saleType=3;
$viewNum=rand(70,100);
if($_GET['action']=='getUser'){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'buyNum'=>$buyNum,'viewNum'=>$viewNum,'saleType'=>$saleType));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spara upp till 73% p?? Advanced SystemCare Pro - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Denna veckas specialerbjudanden</h1>
    <h2>Spara upp till <b>73%</b> p?? Advanced SystemCare Pro och du f??r extra skydd helt</h2>

    <!-- 1pc message -->
    <div class="message small-message fl">
      <img class="box" src="<?php echo $pResUrl;?>images/asc-1pc.png" alt="Advanced SystemCare Pro 13">
      <p class="price"> <small>Ord. pris</small> <del>399 kr</del> <br> <strong>249</strong> kr </p>
      <!-- 1pc buybtn  -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=sv-asc131pc249&ref=sv_asc131pcpurchase1906<?php echo $refStr;?>&refs=sv_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1906-sv')">
        <i></i>
        <span>K??P NU</span>
      </a>
      <p class="save">SPARA 150</p>
    </div>

    <!-- 3pc+gift message -->
    <div class="message large-message fl">
      <p class="countdown">Bara <b class="packsNum"><?php echo $packsNum?>00</b> paket kvar </p>
      <img class="box" src="<?php echo $pResUrl;?>images/ascgift-3pc.png" alt="Advanced SystemCare Pro 13">
      <img class="asc-shadow" src="<?php echo $pResUrl;?>images/asc-shadow.png" alt="">
      <p class="price"><small>Ord. pris</small> <del>1 097 kr</del> <br> <strong>299</strong> kr </p>
      <!-- 3pc+gift buybtn  -->
      <a class="buybtn large"
         href="https://www.iobit.com/buy.php?product=sv-asc133pcsdpf299&ref=sv_asc133pcsdpfpurchase1906<?php echo $refStr;?>&refs=sv_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsdpf1906-sv')">
        <i></i>
        <span>K??P NU</span>
      </a>
      <p class="save">SPARA 798</p>
      <p class="attention">Mer ??n <span class="buyNum"><?php echo $buyNum?></span> personer har redan k??pt den</p>
    </div>

    <!-- 5pc message -->
    <div class="message small-message fr">
      <img class="box" src="<?php echo $pResUrl;?>images/asc-5pc.png" alt="Advanced SystemCare Pro 13">
      <p class="price"><small>Ord. pris</small> <del>999 kr</del> <br> <strong>349</strong> kr </p>
      <!-- 5pc buybtn  -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=sv-asc135pc349&ref=sv_asc135pcpurchase1906<?php echo $refStr;?>&refs=sv_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase5pc1906-sv')">
        <i></i>
        <span>K??P NU</span>
      </a>
      <p class="save">SPARA 650</p>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- benfits start -->
<div class="benfits">
  <div class="wrapper">
    <h2>Aktivera Advanced SystemCare PRO f??r att f?? en snabbare,<br>
      renare och s??krare dator!</h2>
    <?php if($_GET['st']!='asc_wr'):?>
      <div class="original clearfix">
        <div class="showcase">
          <div class="inner">
            <ul class="screenshot">
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
              </li>
            </ul>
          </div>
          <ul class="zoom">
            <li></li>
            <li class="fun3">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
              </div>
            </li>
            <li class="fun2">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
              </div>
            </li>
            <li class="fun4">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
              </div>
            </li>
            <li class="fun5">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
              </div>
            </li>
          </ul>
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
              <h3>100% BESKYDD</h3>
              <p>Det skyddar dina personuppgifter och privatliv fr??n hemliga intr??ng, stoppar alla f??rs??k fr??n skadlig programvara samtidigt som din integritet f??rblir dubbelt * s?? s??ker som i gratisversionen</p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benfits02"></i></dt>
            <dd>
              <h3>200% * SNABBARE</h3>
              <p>Rensar alla on??diga filer och optimerar CPU och RAM f??r att p??skynda uppstarten, ??kar systemets hastighet och g??r en l??ngsam dator upp till 200% snabbare</p>
            </dd>
          </dl>
          <dl class="three">
            <dt><i class="benfits03"></i></dt>
            <dd>
              <h3>300% * SNABBARE</h3>
              <p>Accelerera nedladdning, surfning, spelande och YouTube-visning med upp till 300%</p>
            </dd>
          </dl>
          <dl class="three">
            <dt><i class="benfits01"></i></dt>
            <dd>
              <h3>ST??RRE LEDIGT UTRYMME</h3>
              <p>Deep rensar bort skr??pfiler, ogiltiga l??nkar, systemloggfiler samt ofullst??ndiga nedladdningsfiler med avancerad optimering</p>
            </dd>
          </dl>
          <a href="Javascript:void(0);" class="textlink">L??s mer om PRO-versionen>></a>
        </div>
      </div>
    <?php else:?>
      <div class="winrar">
        <div class="showcase">
          <div class="inner">
            <ul class="screenshot">
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
              </li>
              <li>
                <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
              </li>
            </ul>
          </div>
          <ul class="zoom">
            <li></li>
            <li class="fun3">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
              </div>
            </li>
            <li class="fun2">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
              </div>
            </li>
            <li class="fun4">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
              </div>
            </li>
            <li class="fun5">
              <div class="container">
                <img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
              </div>
            </li>
          </ul>
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
              <h3>100% BESKYDD</h3>
              <p>Det skyddar dina personuppgifter och privatliv fr??n hemliga intr??ng, stoppar alla f??rs??k fr??n skadlig programvara samtidigt som din integritet f??rblir dubbelt * s?? s??ker som i gratisversionen</p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benfits02"></i></dt>
            <dd>
              <h3>200% * SNABBARE</h3>
              <p>Rensar alla on??diga filer och optimerar CPU och RAM f??r att p??skynda uppstarten, ??kar systemets hastighet och g??r en l??ngsam dator upp till 200% snabbare</p>
            </dd>
          </dl>
          <dl class="three">
            <dt><i class="benfits03"></i></dt>
            <dd>
              <h3>300% * SNABBARE</h3>
              <p>Accelerera nedladdning, surfning, spelande och YouTube-visning med upp till 300%</p>
            </dd>
          </dl>
          <dl class="four">
            <dt><i class="benfits05"></i></dt>
            <dd>
              <h3>S??ker Programvaruuppdatering <i>VIKTIGT</i></h3>
              <p>Med endast ett klick kan du uppdatera viktiga programvaror utan n??gra anv??ndarinterventioner, inklusive <b>WinRAR*, vars befintlig s??kerhetsfel kan s??tta din dator i fara i flera ??r.</b> </p>
              <span>* Uppdatera omedelbart, n??r den nya officiella versionen ??r klar.</span>
            </dd>
          </dl>
          <a href="Javascript:void(0);" class="textlink">L??s mer om PRO-versionen>></a>
        </div>
      </div>
    <?php endif;?>
  </div>
</div>
<!-- end benfits -->

<!-- gifts start -->
<div class="gifts">
  <div class="wrapper">
    <h2>Exklusiva G??vor - PC Optimeringsverktyg <span>(v??rderad till 498 kr)</span> GRATIS!</h2>
    <div class="content clearfix">
      <!-- pf -->
      <dl class="pf fl clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/gift-pf.png" alt="Protected Folder"></dt>
        <dd class="fl">
          <h3>Protected Folder </h3>
          <p class="price"><strong>0</strong> kr</p>
          <p class="details">
            Skydda dina filer fr??n skadliga attacker 1 <br>
            l??senord f??r alla filer Skydda ditt privatliv <br>
            fr??n intr??ng
          </p>
        </dd>
      </dl>
      <!-- sd -->
      <dl class="sd fr clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/gift-sd.png" alt="Smart Defrag PRO 6"></dt>
        <dd class="fl">
          <h3>Smart Defrag 6 PRO</h3>
          <p class="price"><strong>0</strong> kr</p>
          <p class="details">
            H??gre defragmenteringshastighet <br>
            Auto-defragmentera valda filer <br>
            Snabbare uppstart av datorn
          </p>
        </dd>
      </dl>
    </div>
    <!-- 3pc+gift buybtn -->
    <a class="buybtn large"
       href="https://www.iobit.com/buy.php?product=sv-asc133pcsdpf299&ref=sv_asc133pcsdpfpurchase1906<?php echo $refStr;?>&refs=sv_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsdpf1906-sv')">
      <span>H??MTA PRESENTEN NU!</span>
    </a>
  </div>
</div>
<!-- gifts end -->

<!-- review start -->
<div class="reviews ">
  <div class="wrapper">
    <h2>Internationella utm??rkelser och recensioner</h2>
    <p>G??r v??ra kunder n??jda var de ??n befinner sig</p>
    <ul class="message clearfix">
      <li>
        <strong>200+</strong>
        <p>Popul??r i mer ??n <b>200</b> l??nder <br>globalt</p>
      </li>
      <li>
        <strong>1,000+</strong>
        <p>Mer ??n <b>1,000</b> medier har gillat <br>och kommenterat</p>
      </li>
      <li>
        <strong>250,000,000+</strong>
        <p>Utvald och rekommenderad av ??ver <br><b>250</b> miljoner anv??ndare ??ver hela <br>v??rlden</p>
      </li>
      <li>
        <strong>80%+</strong>
        <p>Mer ??n <b>80%</b> av Advanced SystemCare <br>anv??ndare har aktiverat PRO-versionen</p>
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
          <p>Det ??r det b??sta programmet f??r att reng??ra och accelerera <br>min dator p?? ett korrekt och s??kert s??tt. Det g??r gamla datorer <br>snabba och kraftfulla!</p>
          <span></span>
        </dd>
      </dl>
      <dl class="html-it">
        <dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
        <dd>
          <strong>HTML.it</strong>
          <p>Advanced SystemCare Pro ??r ett kraftfullt program???med vilket operativsystem <br>optimeras och har b??sta prestanda. Dessutom ??r det enkelt att anv??nda, av vilket <br>n??stan alla funktioner k??rs automatiskt.</p>
          <span></span>
        </dd>
      </dl>
      <dl class="baixaki">
        <dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
        <dd>
          <strong>Baixaki</strong>
          <p>Advanced SystemCare har utm??rkt prestanda och kan uppt??cka och l??sa problem <br>som ??r v??ldigt komplexa och ??ven sv??rt att f??rest??lla sig ...</p>
          <span></span>
        </dd>
      </dl>
      <dl class="charles-r-widick">
        <dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
        <dd>
          <strong>Charles R. Widick</strong>
          <p>Vem beh??ver en tekniker n??r du har kraften i Advanced SystemCare <br>PRO-systemet som jobbar dygnet runt? Det h??r ??r den b??sta <br>produkten en hemanv??ndare kan k??pa.</p>
          <span></span>
        </dd>
      </dl>
      <dl class="cnet">

        <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
        <dd>
          <strong>Cnet</strong>
          <p>Advanced Systemcares syfte ??r att r??da bot p?? <br>allt som pl??gar din dator, inte bara st??da upp <br>skr??pfiler, malware och ogiltiga registerposter <br>utan ocks?? ge din dator ett rej??lt uppsving <br>f??r en optimal datorupplevelse</p>
          <span></span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- compare start -->
<div class="compare wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Se vad PRO-utg??van kan g??ra f??r dig:</th>
      <th class="itemb">
        <div class="box">
          Din version <br> NUVARANDE
          <span></span>
        </div>
      </th>
      <th class="space"></th>
      <th class="itema">
        <div class="box">
          PRO-version <br>UPPGRADERAD
          <span></span>
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-01.png" alt=""></td>
      <td class="virtue">System-rensning, -reparation och -optimering</td>
      <td class="itemb"><i class="all-icons">???</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-12.png" alt=""></td>
      <td class="virtue">Uppt??ck skadliga l??nkar i din e-post</td>
      <td class="itemb"><i class="all-icons">???</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-02.png" alt=""></td>
      <td class="virtue">Upp till 300%* internethastighet med Internet Booster</td>
      <td class="itemb"><i class="all-icons close">???</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-03.png" alt=""></td>
      <td class="virtue">Upp till 200%* snabbare PC-uppstart med startoptimering</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-04.png" alt=""></td>
      <td class="virtue">Djupg??ende registreringsrensning och defragmentering f??r att minimera krascher</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-05.png" alt=""></td>
      <td class="virtue">Ny diskoptimeringsmotor f??r h??gre systemhastighet</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-06.png" alt=""></td>
      <td class="virtue">Realtidsskydd mot s??kerhetshot</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-07.png" alt=""></td>
      <td class="virtue">Fullst??ndig lokalisering och identifiering av de djupaste virusen</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-08.png" alt=""></td>
      <td class="virtue">Automatisk blockering av reklam och sp??rning f??r s??krare surfning</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-09.png" alt=""></td>
      <td class="virtue">Automatisk rensning av RAM-minne f??r smidigare systemk??rning</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-10.png" alt=""></td>
      <td class="virtue">Automatisk uppdatering till den senaste versionen</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icons-11.png" alt=""></td>
      <td class="virtue">Gratis teknisk support 24/7 p?? beg??ran</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">???</i></td>
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
<!-- compare end -->

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <h2>F??r 2019, ge din gamla dator den B??STA G??VAN!</h2>
    <div class="box fl">
      <img src="<?php echo $pResUrl;?>images/bottombuy-asc.png" alt="">
    </div>
    <ul class="fl">
      <!-- 5pc -->
      <li class=""
          data-url="https://www.iobit.com/buy.php?product=sv-asc135pc349&ref=sv_asc135pcpurchase1906<?php echo $refStr;?>&refs=sv_purchase_asc"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase5pc1906-sv')"
          data-price="349"
          data-del="999 kr">
        5PC / 1 ??r
        <strong>-65% <span>RABATT </span></strong>
      </li>
      <!-- 3pc+gifts -->
      <li class="active"
          data-url="https://www.iobit.com/buy.php?product=sv-asc133pcsdpf299&ref=sv_asc133pcsdpfpurchase1906<?php echo $refStr;?>&refs=sv_purchase_asc"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsdpf1906-sv')"
          data-price="299"
          data-del="1 097 kr">
        3PC / 1 ??r <small>+ Exklusiva G??vor GRATIS</small>
        <strong>-73% <span>RABATT</span></strong>
      </li>
      <!-- 1pc -->
      <li class=""
          data-url="https://www.iobit.com/buy.php?product=sv-asc131pc249&ref=sv_asc131pcpurchase1906<?php echo $refStr;?>&refs=sv_purchase_asc"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1pc1906-sv')"
          data-price="249"
          data-del="399 kr">
        1PC / 1 ??r
        <strong>-37%<span>RABATT</span></strong>
      </li>
    </ul>
    <div class="another fr">
      <p class="price"><small>Ord. pris</small> <del>1 097 kr</del> <br> <strong>299</strong> kr </p>
      <!-- 3pc+gifts buybtn -->
      <a class="buybtn large"
         href="https://www.iobit.com/buy.php?product=sv-asc133pcsdpf299&ref=sv_asc133pcsdpfpurchase1906<?php echo $refStr;?>&refs=sv_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcsdpf1906-sv')">
        <span>K??P NU</span>
      </a>
    </div>
  </div>
</div>
<!-- bottombuy end -->

<!-- service start  -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd><strong>Accepterade Betalningss??tt </strong>Gratis 24/7 Teknisk Support vid <br>Behov Live Chattj??nst</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
      <dd><strong>Pengarna- tillbaka-garanti </strong>Om du inte ??r n??jd med produkten inom  <br>60 dagar,ger vi dig pengarna tillbaka.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><strong>S??ker betalning </strong>IObit st??der flera s??kra betalningsal-<br>ternativ.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
      <dd><strong>F?? Licens </strong>Du kommer f?? licensen inom n??gra <br>minuter efter betalning..</dd>
    </dl>
  </div>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende p?? olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellan??t ??ndras utan f??rvarning, efter v??rt eget godtycke.</dd>
  </dl>
  <div class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Alla R??ttigheter F??rbeh??llna</div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
  <dl>
    <dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
    <dd>har redan aktiverat <span id="saleType"><?php echo $saleType;?></span> PC / 1 ??r</dd>
    <dd class="last"><span class="viewNum"><?php echo $viewNum;?></span> anv??ndare tittar</dd>
  </dl>
</div>
<!-- float end -->

<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>