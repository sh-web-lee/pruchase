<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$reTime=15;
$reduceNum=103542894;
$sepStr=' ';
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum,0,'.',$sepStr);

$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Kup Advanced SystemCare Ultimate 12 Pro na 3 komputery ze zniżką 50%. Oferta ograniczona IObit!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- header start -->
<div class="header">
  <div class="wrapper clearfix">
    <a class="logo fl" href="https://www.iobit.com/pl/index.php" target="_blank">
      <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
    </a>
    <div class="site fr">
      <span>BEZPIECZNA STRONA:</span>
      <img src="<?php echo $pResUrl; ?>images/header_site.png">
    </div>
  </div>
</div>
<!-- header end -->

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <h1 class="line">
      <img src="<?php echo $pResUrl; ?>images/banner_title.png" alt="Tańsze niż kupno nowego komputera">
    </h1>
    <div class="panel clearfix">
      <dl class="fl picture">
        <dt><img src="<?php echo getStaticUrl('images/banner_asc.png')?>" alt="Advanced SystemCare PRO" /></dt>
        <dd> Oferta kończy się za </dd>
        <dd class="off">
          <strong>50%</strong>
          ZNIŻKI
        </dd>
        <dd class="versao"></dd>
      </dl>
      <div class="fr text gradient">
        <h3>Advanced SystemCare Ultimate 12 <span>1 rok / 3 PC</span></h3>
        <del class="original">229,90 zł</del>
        <p class="price"> <strong class="offer-price">109,90 zł</strong></p>
        <dl>
          <dt>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pl-au123pc109&ref=pl_au123pc109purchase1906<?php echo $refStr;?>&refs=pl_purchase_ascu"
               onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3PC1906-pl');">
              <i class="all-icons">car</i>
              <span>TERAZ AKTYWNY!</span>
            </a>
          </dt>
          <dd>
            <p class="people">
              <i class="all-icons">people</i><span class="unit-bef">Kupiło</span> go ponad <b id="packs" class="buyNum"><?php echo $buyNum; ?></b> <span class="unit-af">osób</span>
            </p>
          </dd>
          <dd class="pay-icons">
            <p>Metody Płatności</p>
            <img src="<?php echo $pResUrl; ?>images/banner_pay.png">
          </dd>
        </dl>
      </div>
    </div>
    <!-- time -->
    <ul id="countdown" class="countdown">
      <li>00</li>
      <li>00</li>
      <li>00</li>
      <li>000</li>
    </ul>
  </div>
</div>
<!-- banner end -->

<!-- hightlight start -->
<div class="hightlight wrapper clearfix">
  <h2>
    Advanced Systemcare Ultimate zapewnia produktywność i <br> bezpieczeństwo w codziennym życiu
  </h2>
  <img src="<?php echo getStaticUrl('images/hightlight.jpg')?>" alt="" class="img-box" />
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" /></dt>
    <dd>
      <strong>Ochroni Cię przed zagrożeniami online i atakami wirusów</strong>
      <p>
        Silnik antywirusowy Bitdefender zapewnia maksymalne <br>
        bezpieczeństwo wykrywając wirusy, programy ransom- <br>
        wares i różnego rodzaju zagrożenia komputera.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" /></dt>
    <dd>
      <strong>Uwolnij prawdziwy potencjał swojego komputera</strong>
      <p>
        Oglądaj filmy, graj i pracuj z wieloma programami jed- <br>
        nocześnie. Pożegnaj się z powolnym komputerem.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" /></dt>
    <dd>
      <strong>Twoje dane będą zabezpieczone przed hakerami</strong>
      <p>
        Automatycznie czyści ślady prywatności i chroni Twoje <br>
        dane przed spyware, adware oraz złośliwym opro- <br>
        gramowaniem.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" /></dt>
    <dd>
      <strong>Surfuj po Internecie 300% szybciej</strong>
      <p>
        Uzyskaj dostęp do ulubionych treści szybciej i spędzaj <br>
        mniej czasu na ładowanie stron i filmów.
      </p>
    </dd>
  </dl>
</div>
<!-- hightlight end -->

<!-- review start -->
<div class="user clearfix">
  <div class="wrapper">
    <h2>
      Advanced SystemCare Ultimate obsługuje już ponad <strong class="buyNum"><?php echo $buyNum; ?></strong> <nobr class="unit-bottom">komputerów</nobr>. <span> Nadszedł czas, aby zająć się Twoim. </span>
    </h2>
    <ul class="user-list">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="Rod Garnett">
        <h4>Rod Garnett</h4>
        <p>
          „Od wielu lat korzystam z różnych wersji Advanced SystemCare. Kiedy odkryłem jakie funkcje proponuje Advanced SystemCare Ultimate, wiedziałem, że muszę go mieć. Nie zawiodłem się! Jest to jeden z najłatwiejszych, a zarazem najwydajniejszych programów, który utrzymuje trzy moje komputery w dobrym stanie”.
        </p>
      </li>
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/russel-pack.png')?>" alt="Russel Pack">
        <h4>Russel Pack</h4>
        <p>
          „Zawsze miałem jakieś problemy z komputerem. W pewnym momencie zainstalowałem po raz pierwszy Advanced SystemCare i moje problemy zniknęły. Teraz, z dodatkowym antywirusem, niepotrzebne są już żadne inne programy. Advanced SystemCare Ultimate jest niezastąpiony. To wielki zwycięzca! Mój komputer jest zawsze uaktualniony i działa bez zarzutu, w przeciwieństwie do innych produktów. Zero problemów”.
        </p>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Zalecany przez</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
</div>
<!-- awards end -->

<!-- bottom-buy start -->
<div class="bottom-buy wrapper clearfix">
  <h2>Za jedyne 0,1 $ dziennie, Twój komputer będzie zoptymalizowany i wolny od zagrożeń</h2>
  <h3>Zarejestruj się na rok i skorzystaj Advanced SystemCare Ultimate 12 na 2 dodatkowe komputery</h3>
  <div class="box-contain">
    <img src="<?php echo $pResUrl; ?>images/boxsort-ascu-small.png" alt=""/>
    <div class="bottom-btn">
      <p class="bottom-price"> <b>109,90 </b>zł (<del>229,90 zł</del>)</p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=pl-au123pc109&ref=pl_au123pc109purchase1906<?php echo $refStr;?>&refs=pl_purchase_ascu"
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase3PC1906-pl');">
        KUP TERAZ
      </a>
      <span class="btn-prce">Zaoszczędź  <b>120,00 zł</b></span>
    </div>
  </div>
</div>
<!-- bottom-buy end -->

<!-- service start -->
<ul class="service wrapper clearfix">
  <li>
    <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="">
    <h5>Gwarancja zwrotu pieniędzy</h5>
  </li>
  <li>
    <img src="<?php echo getStaticUrl('images/service.png')?>" alt="">
    <h5>24-godzinna obsługa techniczna</h5>
  </li>
  <li>
    <img src="<?php echo getStaticUrl('images/secured.png')?>" alt="">
    <h5>Stuprocentowe bezpieczeństwo płatności</h5>
  </li>
</ul>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <p class="note">
      Uwaga:<br>
      1*. Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.
    </p>
    <p class="copyright">
      Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone
    </p>
  </div>
</div>
<!-- footer end -->

<script>

  //count down
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 16:00:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2);
    document.getElementById('countdown').innerHTML = '<li>'+h+'<span>godz</span></li><li>'+ i+'<span>min</span></li><li>'+ s+'<span>sek</span></li><li class="last">'+ mi+'<span>ms</span></li>'+'<sup>*</sup>';
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();

  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&sepStr=<?php echo $sepStr;?>&r="+Math.random(),
      success: function(packs){
        setUnit(parseInt(packs.replace(/ /g,'')));
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 15000);
      }
    });
  }
  setTimeout('getBuyNum()', 15000);

  function setUnit(packsNum) {
    var unitStrBefore = 'Kupiło';
    var unitStrAfter = 'osób';
    var unitStrBottom= 'komputerów';
    var packsLast = packsNum % 10;
    var packsLastTwo = packsNum % 100;
    if (($.inArray(packsLast, [2, 3, 4]) != -1)&&($.inArray(packsLastTwo,[12,13,14])==-1)) {
      unitStrBefore = 'Kupiły';
      unitStrAfter = 'osoby';
      unitStrBottom = 'komputery';
    }
    $('.unit-bef').html(unitStrBefore);
    $('.unit-af').html(unitStrAfter);
    $('.unit-bottom').html(unitStrBottom);
  }
  setUnit(<?php echo intval(str_replace(' ','',$buyNum));?>);
</script>
</body>
</html>