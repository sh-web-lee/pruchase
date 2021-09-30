<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dedbofficial_p' . $date;
  $c_name_t='dedbofficial_t' . $date;
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
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <title>Hent Driver Booster 8 PRO for 0 kr.</title>
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
        <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>Forsalget er startet</p>
          <h2>Det bedste opdateringsværktøj til drev</h2>
          <h4>Giver dig en problemfri PC og hurtigere gaming</h4>
          <div class="price">
            <span>Forsalgspris:</span>
            <strong>0 kr.<sup>*</sup></strong>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=dk-db8preorder&ref=dk_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-dk');">
              Forudbestil nu
            </a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              stk. tilbage
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
        <h2>Over 4.500.000 drev</h2>
        <h4>Den hidtil største database for Driver Booster</h4>
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
          <dt><i></i>Automatiske drevopdateringer <span>WHQL</span></dt>
          <dd>Finder og opdaterer de mest kompatible drev som er<br> WHQL-verificerede.</dd>
        </dl>
        <dl>
          <dt><i></i>Stabilt drev VS nyestes drev  <span class="market">unik på markedet</span></dt>
          <dd>
            Giver mulighed for stabile drev til dem, der prioriterer pålidelighed til deres enheder og mulighed for de nyeste<br> drev til dem, som foretrækker de nyeste funktioner. 
          </dd>
        </dl>
        <dl>
          <dt><i></i>Løs hardware-problemer</dt>
          <dd>
            Giver mulighed for et-kliksløsninger som løser problemer<br> med ringe videokvalitet, uklar lyd, afbrudt internetforbindelse og eksterne enheder, som ikke virker.
          </dd>
        </dl>
        <dl>
          <dt><i></i>Opdater drev offline</dt>
          <dd>
            Installer networksdrev uden internetforbindelse. Download det korrekte networksdrev på en PC og overfør så til en anden PC.
          </dd>
        </dl>
      </div>
    </div>
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Spilklare drev og komponenter</h2>
        <h4>Optimer 90% af PC-spillene</h4>
      </div>
      <div class="line"></div>
      <dl class="message-box">
        <dt class="one" data-name='default'>Problemfri spil</dt>
        <dd class="one" data-name='default'>
          Forsyner dig med de nyeste spilklare drev og komponenter, som reducerer computer lags og skærmfrysninger og understøtter nye spilfunktioner.
        </dd>
        <dt class="two" data-name='default'>Game Boost</dt>
        <dd class="two" data-name='default'>Stopper unødvendige tjenester og øger PC-hastigheden, så du kan få en bedre spiloplevelse.</dd>
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
        <h2>Flere funktioner du kan få glæde af</h2>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <h3>Sikker opdatering</h3>
            <p>Sikkerhedskopierer drev automatisk<br> og opretter et gendannelsespunkt for systemet.</p>
          </dd>
        </dl>
        <dl class="center two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt="" ></dt>
          <dd>
            <h3>Lydløs tilstand</h3>
            <p>Aktiverer lydløs tilstand for alle notifikationer automatisk, så de ikke forstyrrer.</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt="" ></dt>
          <dd>
            <h3>Automatisk sletning</h3>
            <p>Sletter automatisk installerede drevpakker.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>Det bedste opdateringsværktøj der findes</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Downloads 
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Brugerevaluering  
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          Media-anbefalinger
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Medieanmeldelser</dt>
              <dd>
                Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware. Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien."
              </dd>
            </dl>
            <dl>
              <dt>Brugeranmeldelelse</dt>
              <dd>
                Det hjalp med at løse hastighedsproblemer på min gamer laptop uden at nedbryde det. Nogle
                gange, når jeg har forsøgt at opdatere mine drev, er computeren brudt sammen og jeg var nødt til
                at formatere min computer for at gendanne funktioner, men dette skete ikke med DB7. Det er nemt
                at bruge og downloader hurtigt, det er det bedste værktøj på markedet hidtil!
              </dd>
            </dl>
            <dl>
              <dt>Brugeranmeldelelse</dt>
              <dd>
                Sikke en overraskelse at modtage Driver Booster fra IObit. Så snart det var installeret begyndte
                opdateringerne. Jeg anede ikke jeg havde så mange programmer på computeren og slet ikke at de
                behøvede opgraderinger. Da opdateringerne afsluttede, var det som om, min PC havde fået en
                komplet makeover. Fantastisk!
              </dd>
            </dl>
            <dl>
              <dt>Brugeranmeldelelse</dt>
              <dd>
                Virkelig den bedste driver updater der er på markedet. Det er brugervenligt, har en simpel
                brugerflade der er nem at bruge og det klarer arbejdet bedre end nogen applikation, jeg tidligere
                har brugt. Dette program er fem stjerner værd. Varmt anbefalet.
              </dd>
            </dl>
          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></div>
            <p>Carlos Alexandre Veríssimo</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Verdensomspændende priser</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Bemærk:</dt>
      <dd>
        *.Ved slutningen af din 30 dages gratis prøveperiode, vil dit kort eller Paypal-konto blive debiteret 199 kr. automatisk. 70% fra originalprisen på 679 kr. gælder kun forudbestillinger!
      </dd>
      <dd>*.Er du utilfreds, kan du annullere din ordre inden for 30 dage uden at betale gebyr.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Rettigheder forbeholdes</p>
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
        ud af 1000 stk. tilbage
      </h3>
    </div>
    <div class="price fr">
      <strong>0 kr <sup>*</sup></strong>
      <span></span>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=dk-db8preorder&ref=dk_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-dk');">
        Forudbestil nu
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