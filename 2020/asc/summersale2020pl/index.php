<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'summersale2020pl0622_p' . $date;
  if ($_COOKIE[$c_name]===null) {
    $packsNum = 62;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 7) {
      setcookie($c_name, 7, time() + 3600 * 24);
      $packsNum = 7;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit;
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Tylko teraz nawet 80% zniżki na najnowszym Advanced SystemCare 13 PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner start -->
<div class="banner">
  <h1>Szybszy, wydajniejszy i bezpieczniejszy komputer!</h1>
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/pl/index.php">IObit</a>
    <div id="banCount" class="countdown">
      Nie przegap specjalnej promocji, zostało : <span>00 godz. <b>19</b> min <b>59</b> sek <b>59</b> ms</span>
    </div>
    <div class="offerbox clearfix">
      <div class="offer left">
        <img src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt=""/>
        <span class="discount small">-40<small>%</small></span>
        <div class="price">
          <p><strong>69,90 zł</strong> <del>110,90 zł</del></p>
          <p class="month"><em>5,82 zł / 1 miesiąc</em></p>
          <a class="buybtn gray"
             href="http://www.iobit.com/buy.php?product=pl-asc131pc69&ref=pl_asc131pc69purchase2006<?php echo $refStr;?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-summersale2020-pl');">
            KUP TERAZ   
          </a>
          <p>— 1 komputer / 1 rok —</p>
        </div>
      </div>
      <div class="offer center bundle">
        <img src="<?php echo getStaticUrl('images/asc-bundle-box.png')?>" alt=""/>
        <span class="discount">-80<small>%</small></span>
        <div class="price">
          <p><strong>74,90 zł</strong> <del>469,70 zł</del></p>
          <p class="month"><em>6,24 zł / 1 miesiąc</em></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2006<?php echo $refStr;?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-summersale2020-pl');">
            KUP TERAZ   
          </a>
          <p>— 3 komputery / 1 rok —</p>
        </div>
        <!-- <div class="mask"><span class="mask-word"></span></div> -->
      </div>
      <div class="offer last right">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
        <span class="discount small">-60<small>%</small></span>
        <div class="price">
          <p><strong>74,90 zł</strong> <del>199,90 zł</del></p>
          <p class="month"><em>6,24 zł / 1 miesiąc</em></p>
          <a class="buybtn gray"
             href="http://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase2006<?php echo $refStr;?>&refs=pl_purchase_asc  "
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-summersale2020-pl');">
            KUP TERAZ   
          </a>
          <p>— 3 komputery / 1 rok —</p>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl>
    <dd>Akceptowalne płatności</dd>
    <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
  </dl>
  <dl class="middle">
    <dd>Gwarancja zwrotu pieniędzy</dd>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
  </dl>
  <dl>
    <dd>Bezpieczna płatność</dd>
    <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
  </dl>
</div>
<!-- service end -->

<!-- miliony start -->
<div class="miliony">
  <div class="wrapper">
    <h2>Gwarantujemy Ci większy komfort pracy i grania!</h2>
    <p>W przeciwnym razie natychmiast zwrócimy Ci pieniądze!*</p>
    <div class="miliony-box">
      <dl>
        <dt><h4>200+</h4></dt>
        <dd>Popularny w ponad <b>200</b> krajach<br> na całym świecie</dd>
      </dl>
      <dl class="two">
        <dt><h4>1 000+</h4></dt>
        <dd>Ponad <b>1000</b> mediów doceniło<br> Advanced SystemCare</dd>
      </dl>
      <dl class="three">
        <dt><h4>210 000 000+</h4></dt>
        <dd>Wybrany i rekomendowany<br> przez ponad <b>210</b> milionów<br> użytkowników na całym świecie</dd>
      </dl>
      <dl class="four">
        <dt><h4>80%+</h4></dt>
        <dd>Ponad <b>80%</b> użytkowników<br> Advanced SystemCare aktywowało<br> wersję PRO</dd>
      </dl>
    </div>
  </div>
</div>
<!-- miliony end -->

<!-- benefits start -->
<div class="benefits">
  <div class="wrapper">
    <h2>Zyskaj więcej z Advanced SystemCare PRO!</h2>
    <div class="clearfix">
      <div class="showcase fl">
        <div class="inner">
          <ul class="screenshot">
            <li class="on">
              <img src="<?php echo getStaticUrl('images/screenshot-01.png')?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-02.png')?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-03.png')?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-04.png')?>" alt="">
            </li>
          </ul>
        </div>
        <ul class="zoom">
          <li class="on">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt="">
            </div>
          </li>
          <li>
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt="">
            </div>
          </li>
          <li>
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt="">
            </div>
          </li>
          <li>
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-05-zoom.png')?>" alt="">
            </div>
          </li>
        </ul>
      </div>
      <div class="detail-list fr">
        <dl class="on">
          <dt><i class="benefits01"></i></dt>
          <dd>
            <h3>200% szybszy komputer</h3>
            <p>
              Czyści niepotrzebne pliki i optymalizuje procesor i pamięć RAM w celu uzyskania szybszego systemu. Sprawia, że Twój system jest do 200%* szybszy niż przy użyciu darmowej wersji.
            </p>
          </dd>
        </dl>
        <dl class="two">
          <dt><i class="benefits02"></i></dt>
          <dd>
            <h3>100% ochrony</h3>
            <p>Chroni Twoją prywatność i dane przed niepożądanym dostępem, dwukrotnie lepiej* niż wersja darmowa.</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benefits03"></i></dt>
          <dd>
            <h3>300% szybszy Internet</h3>
            <p>Pobieranie, granie online, przeglądanie stron internetowych, e-mail, a także filmy z YouTube i Netflix będą działać jeszcze sprawniej i szybciej!*</p>
          </dd>
        </dl>
        <dl class="last two">
          <dt><i class="benefits04"></i></dt>
          <dd>
            <h3>Więcej miejsca na dysku</h3>
            <p>Całkowicie usuwa niepotrzebne pliki, nieprawidłowe skróty, wpisy rejestru i niepoprawnie pobrane pliki.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- benefits end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <span class="arrow-up"></span>
    <div class="review-title">
      <h2>Zaufały mu miliony użytkowników na całym świecie!</h2>
    </div>
    <div class="magazin clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/magazin.png')?>" alt=""/>
      <div class="magazin-txt fl">
        <h3>Advanced SystemCare PRO</h3>
        <p>
          “Rozbudowany program do optymalizowania, czyszczenia i naprawiania systemu. Pozwala zadbać o Windows i pozbyć się problemów. Najnowsza wersja Advanced SystemCare 13 zawiera ulepszone funkcje zapewniające oczyszczanie komputera i silną ochronę prywatności.“
        </p>
      </div>
      <span class="circle"></span>
      <span class="circle small"></span>
    </div>
    <div class="reviewbox clearfix">
      <div class="reviewuser">
        <span class="one"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt=""/></span>
        <span class="two on"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt=""/></span>
        <span class="three"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""/></span>
      </div>
      <div class="reviewlist">
        <ul>
          <li>
            <h3>Recenzja użytkownika</h3>
            <p>
              „Uwielbiam używać Advanced SystemCare 13 Beta. Jest bardzo szybki. Usuwa ślady prywatności, niepotrzebne pliki i fragmenty rejestru. Szczególnie podoba mi się wyskakujące okienko z pozwoleniem na dostęp do obszarów wrażliwych. Gdy aplikacja po raz pierwszy próbuje uzyskać dostęp do poufnych plików, otwiera się okno umożliwiające dostęp lub odmowę. Po przyznaniu uprawnień dla aplikacji wyskakujące okienko nie będzie już dla niej wyświetlane. Wiem, że moje wrażliwe pliki będą bezpieczne”.
            </p>
            <h5>Richard Preston</h5>
          </li>
          <li>
            <h3>Recenzja użytkownika</h3>
            <p>
              „Używam Advanced SystemCare Pro od dłuższego czasu, a najnowsza wersja 13 jest nawet lepsza niż wersja 12. ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych funkcji, których możesz użyć, aby utrzymać komputer w dobrym stanie. Gorąco polecam wszystkim najnowszy Advanced SystemCare 13”.
            </p>
            <h5>Tony Fisher</h5>
          </li>
          <li>
            <h3>Recenzja mediów</h3>
            <p>
              „Nie ma nic gorszego niż komputer, który jest tak zapchany, że jego użytkowanie oraz granie stają się niemożliwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprzątanie niepotrzebnych plików, złośliwego oprogramowania i nieprawidłowych wpisów w rejestrze, ale również dając Twojemu komputerowi impuls do zoptymalizowania jego działania”.
            </p>
            <h5>Cnet</h5>
          </li>
        </ul>
      </div>
      <span class="prev" onclick="prevFun();"></span>
      <span class="next" onclick="nextFun();"></span>
    </div>
  </div>
</div>
<!-- review end -->

<!-- giftbox start -->
<div class="giftbox">
  <div class="wrapper">
    <span class="arrow-up"></span>
    <h2>Wzmocnij komputer i zabezpiecz pliki hasłem <span>DARMOWE PREZENTY</span></h2>
    <div class="clearfix">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 10 PRO"/></dt>
        <dd>
          <strong>0 zł</strong> <del>119,90zł</del>
          <h4>IObit Uninstaller 10 PRO</h4>
          <ul>
            <li>Całkowicie odinstaluj programy</li>
            <li>Usuń złośliwe wtyczki</li>
            <li>Automatycznie aktualizuj programy</li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <strong>0 zł</strong> <del>149,90zł</del>
          <h4>Protected Folder</h4>
          <ul>
            <li>Sejf dla plików i folderów</li>
            <li class="last">Dostęp do plików zabezpieczony hasłem</li>
          </ul>
        </dd>
      </dl>
    </div>
    <h3>Advanced SystemCare PRO + prezenty</h3>
    <div class="price">
      <p class="month"><em>6,24 zł / 1 miesiąc</em></p>
      <p><strong>74,90 zł</strong> <del>469,70 zł</del></p>
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2006<?php echo $refStr;?>&refs=pl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-summersale2020-pl');">
        KUP TERAZ   
      </a>
      <p>— 3 komputery / 1 rok —</p>
      <!-- <span class="discount small">-60<small>%</small></span> -->
    </div>
    <!-- <div class="mask"><span class="mask-word"></span></div> -->
  </div>
</div>
<!-- giftbox end -->

<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <h2>Ciesz się funkcjami dostępnymi tylko w PRO</h2>
    <table>
      <thead>
        <tr>
          <th colspan="2"></th>
          <th class="pro">
            <div>Wersja PRO</div>
          </th>
          <th class="space"></th>
          <th class="free">
            <div>Twoja aktualna wersja</div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon01.png')?>" alt=""></td>
          <td class="text">Podstawowe czyszczenie i optymalizacja komputera</td>
          <td class="pro"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="free"><i class="all-icons yes"></i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon02.png')?>" alt=""></td>
          <td class="text">Czyszczenie i optymalizacja komputera w wersji PREMIUM</td>
          <td class="pro"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon03.png')?>" alt=""></td>
          <td class="text">Ochrona komputera do wykrywania i usuwania najgłębszych infekcji</td>
          <td class="pro"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon04.png')?>" alt=""></td>
          <td class="text">Do 200% szybsze uruchamianie komputera</td>
          <td class="pro"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon05.png')?>" alt=""></td>
          <td class="text">Do 300% przyspieszenia Internetu dzięki Internet Booster</td>
          <td class="pro"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon06.png')?>" alt=""></td>
          <td class="text">Kompleksowa ochrona podczas surfowania z automatycznie usuwanymi danymi śledzenia</td>
          <td class="pro"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon07.png')?>" alt=""></td>
          <td class="text">Ochrona danych osobowych</td>
          <td class="pro"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon08.png')?>" alt=""></td>
          <td class="text">Aktywne wykrywanie i blokowanie luk bezpieczeństwa w czasie rzeczywistym</td>
          <td class="pro"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon09.png')?>" alt=""></td>
          <td class="text">Bezpłatne wsparcie techniczne 24/7 na żądanie</td>
          <td class="pro"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="bottom-inner">
    <h2>Nie zwlekaj i w pełni zoptymalizuj komputer z Advanced SystemCare PRO</h2>
    <div class="imgbox fl">
      <span class="on">
        <img src="<?php echo getStaticUrl('images/asc-bundle-box.png')?>" alt="">
        <b class="discount">-80<small>%</small></b>
      </span>
      <span class="pc">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="">
        <b class="discount">-60<small>%</small></b>
      </span>
      <span class="pc">
        <img src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt="">
        <b class="discount">-40<small>%</small></b>
      </span>
    </div>
     <ul class="changelist fl">
      <li class="first on"><i></i> <span>1 rok / 3 komputery + prezenty</span></li>
      <li><i></i> <span>1 rok / 3  komputery</span></li>
      <li><i></i> <span>1 rok / 1  komputer</span></li>
    </ul>
    <div class="price fr">
      <p><strong>74,90 zł</strong> <del>469,70 zł</del></p>
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2006<?php echo $refStr;?>&refs=pl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-summersale2020-pl');">
        KUP TERAZ   
      </a>
    </div>
  </div>
</div>
<!-- end bottombuy -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dt>Uwaga: </dt>
    <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
    <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów.</dd>
    <dd>* Jeśli będziesz niezadowolony, to możesz anulować zakup w ciągu 60 dni bez żadnych opłat. Pieniądze zostaną automatycznie zwrócone na Twoje konto.</dd>
  </dl>
  <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <h2>NIE PRZEGAP PROMOCJI</h2>
  <div class="floatcount">
    Pospiesz się, zostało:  <span>00 godz. <b>19</b> min <b>59</b> sek <b>59</b> ms</span>
  </div>
  <p class="people">Już <b>4,275,356</b> osób kupiło wersję PRO!</p>
  <i class="close">X</i>
</div>
<!-- floatlayer end -->

<script>
  var _imgSrc = "<?php echo getStaticUrl('images/asc-bundle-box-sold.png')?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
</body>
</html>