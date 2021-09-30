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
  $c_name = 'plascjan_p' . $date;
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
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc','xr_sdpasc','xr_dbpasc'))){
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
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Zaoszczędź do 85% na najnowszym Advanced SystemCare 13 PRO </title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pl/index.php">IObit</a>
    <!-- title -->
    <h1><span class="one"></span> <span class="two"></span> <span class="three"></span> ZWIĘKSZ KOMFORT PRACY ZDALNEJ</h1>
    <!-- countdown -->
    <p class="countdown">
      Oferta ograniczona czasowa, zostało
      <strong>00</strong> <span>godz.</span>
      <strong>19</strong> <span>min</span>
      <strong>59</strong> <span>sek</span>
    </p>
    <!-- content -->
    <div class="content">
      <!-- 1pc -->
      <dl class="small left">
        <dt>
          <span class="box">Advanced SystemCare PRO</span>
          <span class="off">-40%</span>
        </dt>
        <dd>
          <!-- price -->
          <p class="price"><big>69,90 zł</big> <del>119,90 zł</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-asc131pc69&ref=pl_asc131pc69purchase2001<?php echo $refStr;?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascjansale2020-pl')">
            KUP TERAZ
          </a>
        </dd>
      </dl>

      <!-- 3pc+bundle -->
      <dl class="large middle bundle">
        <dt>
          <span class="box">Advanced SystemCare PRO+Protected Folder+Smart Defrag PRO+AMC Security PRO</span>
          <span class="off">-85%</span>
        </dt>
        <dd>
          <!-- price -->
          <p class="price"><big>74,90 zł</big> <del>559,60 zł</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pl-asc133pcsdpfamc74&ref=pl_asc133pcsdpfamc74purchase2001<?php echo $refStr;?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event','ascbuy', 'buy', 'ascjansale2020-pl')">
            KUP TERAZ
          </a>
        </dd>
      </dl>

      <!-- 3pc -->
      <dl class="small right pc3">
        <dt>
          <span class="box">Advanced SystemCare PRO</span>
          <span class="off">-60%</span>
        </dt>
        <dd>
          <!-- price -->
          <p class="price"><big>74,90 zł</big> <del>199,90 zł</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase2001<?php echo $refStr;?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event','ascbuy', 'buy', 'ascjansale2020-pl')">
            KUP TERAZ
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- service -->
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
<!-- end service -->

<!-- feature -->
<div class="feature wrapper">
  <h2>Dlaczego Advanced SystemCare 13 PRO?</h2>
  <!-- content -->
  <div class="content">
    <!-- one -->
    <dl class="one clearfix">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>Bezpieczeństwo</h3>
        <p>Wyczyść ślady online i zablokuj dostęp do <br> danych osobowych</p>
      </dd>
    </dl>
    <!-- two -->
    <dl class="two clearfix">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
      <dd>
        <h3>Do 200% szybsze uruchamianie <br> komputera</h3>
      </dd>
    </dl>
    <!-- three -->
    <dl class="three clearfix">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>Głębsze czyszczenie rejestru</h3>
        <p>Wyczyść dokładnie bezużyteczne lub <br> nieprawidłowe rejestry</p>
      </dd>
    </dl>
    <!-- four -->
    <dl class="four clearfix">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
      <dd>
        <h3>Do 300% szybszy Internet</h3>
      </dd>
    </dl>
  </div>
</div>
<!-- end feature -->

<!-- intro -->
<div class="intro">
  <div class="wrapper">
    <h2>Tylko w Advanced SystemCare 13 PRO</h2>
    <!-- one -->
    <dl class="one">
      <dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>Ochrona odcisków palców</h3>
        <p>Ukryj cyfrowy odcisk palca, aby zachować prywatność w Internecie</p>
      </dd>
    </dl>
    <!-- two -->
    <dl class="two">
      <dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
      <dd>
        <h3>1-kliknięcie</h3>
        <p>Aktualizuj ważne programy tylko jednym kliknięciem</p>
      </dd>
    </dl>
    <!-- three -->
    <dl class="three">
      <dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>Automatyczne skanowanie</h3>
        <p>Automatycznie zadbaj o swój komputer w zaplanowanym czasie</p>
      </dd>
    </dl>
  </div>
</div>
<!-- end intro -->

<!-- comparison -->
<div class="comparison wrapper">
  <h2>Skorzystaj z funkcji PRO</h2>
  <!-- table -->
  <table>
    <thead>
      <tr>
        <th colspan="2"></th>
        <th class="free">
          <div>
            Advanced <br>
            SystemCare FREE
          </div>
        </th>
        <th class="space"></th>
        <th class="pro">
          <div>
            <p>
              Advanced <br>
              SystemCare Pro <br>
              <b>74,90 zł </b>
              <del>559,60 zł</del>
            </p>
            <a class="buybtn tab"
               href="https://www.iobit.com/buy.php?product=pl-asc133pcsdpfamc74&ref=pl_asc133pcsdpfamc74purchase2001<?php echo $refStr;?>&refs=pl_purchase_asc"
               onclick="ga('send', 'event','ascbuy', 'buy', 'ascjansale2020-pl')">
              KUP TERAZ
            </a>
          </div>
        </th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon01.png')?>" alt=""></td>
        <td class="text">Podstawowe czyszczenie i optymalizacja komputera</td>
        <td class="free"><i class="all-icons yes"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon02.png')?>" alt=""></td>
        <td class="text">Czyszczenie i optymalizacja komputera w wersji PREMIUM</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon03.png')?>" alt=""></td>
        <td class="text">Ochrona komputera do wykrywania i usuwania najgłębszych infekcji</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon04.png')?>" alt=""></td>
        <td class="text">Do 200% szybsze uruchamianie komputera</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon05.png')?>" alt=""></td>
        <td class="text">Do 300% przyspieszenia Internetu dzięki Internet Booster</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon06.png')?>" alt=""></td>
        <td class="text">Kompleksowa ochrona podczas surfowania z automatycznie usuwanymi danymi śledzenia</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon07.png')?>" alt=""></td>
        <td class="text">Ochrona danych osobowych</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon08.png')?>" alt=""></td>
        <td class="text">Aktywne wykrywanie i blokowanie luk bezpieczeństwa w czasie rzeczywistym</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/tab-icon09.png')?>" alt=""></td>
        <td class="text">Bezpłatne wsparcie techniczne 24/7 na żądanie</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <h2>Co zyskasz dzięki darmowym prezentom?</h2>
    <!-- sd -->
    <dl class="sd">
      <dt>
        <span>Smart Defrag PRO</span>
        <p>1 rok / 1 PC <del>119.90 zł</del></p>
      </dt>
      <dd>
        <h3>Smart Defrag 6 PRO</h3>
        <p>
          Szybka i głęboka defragmentacja dla zop- <br>
          tymalizowania wydajności dysku <br>
          twardego oraz komputera
        </p>
      </dd>
    </dl>
    <!-- pf -->
    <dl class="pf">
      <dt>
        <span>Protected Folder</span>
        <p>1 rok / 1 PC <del>149.90 zł</del></p>
      </dt>
      <dd>
        <h3>Protected Folder</h3>
        <p>
          Wydajne narzędzie do ochrony plików, które <br>
          gwarantuje bezpieczeństwo ważnych <br>
          folderów, danych i prywatności
        </p>
      </dd>
    </dl>
    <!-- amc -->
    <dl class="amc">
      <dt>
        <span>AMC Security</span>
        <p>1 rok / wiele urządzeń <del>89.90 zł</del></p>
      </dt>
      <dd>
        <h3>AMC Security</h3>
        <p>
          Wielofunkcyjny program, który pozbędzie <br>
          się niepotrzebnych śmieci oraz przyspieszy <br>
          pracę Twojego urządzenia mobilnego
        </p>
      </dd>
    </dl>
    <div class="clear"></div>
    <!-- price -->
    <p class="price gift"><big>74,90 zł</big> <del>559,60 zł</del></p>
    <!-- note -->
    <span>NAJLEPSZA CENA</span>
    <!-- buybtn -->
    <a class="buybtn gift"
       href="https://www.iobit.com/buy.php?product=pl-asc133pcsdpfamc74&ref=pl_asc133pcsdpfamc74purchase2001<?php echo $refStr;?>&refs=pl_purchase_asc"
       onclick="ga('send', 'event','ascbuy', 'buy', 'ascjansale2020-pl')">
      KUP TERAZ
    </a>
    <!-- countdown -->
    <p class="countdown">
      <strong>00</strong> <span>godz.</span>
      <strong>19</strong> <span>min</span>
      <strong>59</strong> <span>sek</span>
    </p>
  </div>
</div>
<!-- end gifts -->

<!-- user -->
<div class="user">
  <div class="wrapper">
    <!-- wave -->
    <span class="wave"></span>
    <span class="wave wave02"></span>
    <span class="wave wave03"></span>
    <h2>
      Zaufało nam już <b>500</b> milionów użytkowników i <br>
      największe media na świecie
    </h2>
    <img class="icon01" src="<?php echo getStaticUrl('images/user-icon01.png')?>" alt="">
    <img class="icon02" src="<?php echo getStaticUrl('images/user-icon02.png')?>" alt="">
    <img class="icon03" src="<?php echo getStaticUrl('images/user-icon03.png')?>" alt="">
    <img class="icon04" src="<?php echo getStaticUrl('images/user-icon04.png')?>" alt="">
    <img class="icon05" src="<?php echo getStaticUrl('images/user-icon05.png')?>" alt="">
  </div>
</div>
<!-- end user --->

<!-- review -->
<div class="review wrapper">
  <h2>Dlaczego wybrali nas?</h2>
  <!-- container -->
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
        <dd>
          <p>„Nie ma nic gorszego niż komputer, który jest tak zapchany, że jego użytkowanie oraz granie stają się niemożliwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprzątanie niepotrzebnych plików, złośliwego oprogramowania i nieprawidłowych wpisów w rejestrze, ale również dając Twojemu komputerowi impuls do zoptymalizowania jego działania”.</p>
          <cite>Cnet</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></dt>
        <dd>
          <p>„Używam Advanced SystemCare Pro od dłuższego czasu, a najnowsza wersja 13 jest nawet lepsza niż wersja 12. ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych funkcji, których możesz użyć, aby utrzymać komputer w dobrym stanie. Gorąco polecam wszystkim najnowszy Advanced SystemCare 13”.</p>
          <cite>Tony Fisher</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></dt>
        <dd>
          <p>„Nigdy nie znalazłem lepszego programu do konserwacji i bezpieczeństwa komputera niż Advanced SystemCare. Odkąd kupiłem ASC, nigdy nie miałem problemów z wirusami, phishingiem, czarnymi ekranami lub innymi rodzajami błędów. To były najlepiej zainwestowane pieniądze, jakie kiedykolwiek wydałem na komputer. Dziękuję ASC za to, że korzystania z komputera jest dużo przyjemniejsze”.</p>
          <cite>Danny R. Sheets</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></dt>
        <dd>
          <p>„Nowy ASC 13 to obowiązkowa pozycja dla wszystkich użytkowników komputerów. Czysty i intuicyjny interfejs jest łatwy w obsłudze zarówno dla początkującego, jak i zaawansowanego użytkownika. Wiele potężnych narzędzi w zestawie, aby utrzymać najwyższą wydajność komputera. Wyrazy uznania dla IObit za tak wspaniały zestaw narzędzi w jednym miejscu”.</p>
          <cite>Daniel Sanders</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end review -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <div class="box">
      <img class="active" src="<?php echo getStaticUrl('images/bottombuy-ascbundle.png')?>" alt="Advanced SystemCare PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-ascpc3.png')?>" alt="Advanced SystemCare PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-ascpc1.png')?>" alt="Advanced SystemCare PRO">
    </div>
    <ul>
      <li class="active"><i></i> Advanced SystemCare 1 rok / 3 PC + prezenty</li>
      <li><i></i> Advanced SystemCare 1 rok / 3 PC</li>
      <li><i></i> Advanced SystemCare 1 rok / 1 PC</li>
    </ul>
    <dl>
      <dd>
        <!-- price -->
        <p class="price white"><big>74,90 zł</big> <del>559,60 zł</del></p>
        <a class="buybtn bottom"
           href="https://www.iobit.com/buy.php?product=pl-asc133pcsdpfamc74&ref=pl_asc133pcsdpfamc74purchase2001<?php echo $refStr;?>&refs=pl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpfamc2001-pl')">
          KUP TERAZ
        </a>
        <!-- countdown -->
        <p class="countdown">
          <strong>00</strong> <span>godz.</span>
          <strong>19</strong> <span>min</span>
          <strong>59</strong> <span>sek</span>
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dt>Uwaga: </dt>
    <dd>1. Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami. </dd>
    <dd>2. Dane mogą się różnić w zależności od systemu lub komputera.</dd>
  </dl>
  <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
</div>
<!-- end footer -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <span class="box">Advanced SystemCare Pro</span>
    <span class="off">-85%</span>
    <p class="des">
      Zabezpiecz, zoptymalizuj i <br>
      przyśpiesz swój komputer
    </p>
    <dl>
      <dd>
        <p class="price white small"><big>74,90 zł</big> <del>559,60 zł</del></p>
        <a class="buybtn bottom small"
           href="https://www.iobit.com/buy.php?product=pl-asc133pcsdpfamc74&ref=pl_asc133pcsdpfamc74purchase2001<?php echo $refStr;?>&refs=pl_purchase_asc"
           onclick="ga('send', 'event','ascbuy', 'buy', 'ascjansale2020-pl')">
          KUP TERAZ
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end float -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
</body>
</html>