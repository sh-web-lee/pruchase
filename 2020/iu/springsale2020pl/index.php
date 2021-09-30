<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$refStr='';
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
/*if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}*/
if(!empty($_GET['pop'])){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(!empty($_GET['st'])){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['user'])){
  $refStr.='-'.$_GET['user'];
}
if(!empty($_GET['insday'])){
  $refStr.='-'.$_GET['insday'];
}
if(!empty($_GET['insur'])){
  $refStr.='-'.$_GET['insur'];
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Najnowszy IObit Uninstaller nawet 85% taniej! - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lexend+Exa&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>NIE PRZEGAP SPECJALNEJ PROMOCJI</h1>
    <h2>Oferta ograniczona czasowo, pospiesz się!</h2>
    <!-- content -->
    <div class="content">

      <!-- 1pc/6mon -->
      <div class="panel left in">
        <!-- dl -->
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt="IObit Uninstaller PRO">
          </dt>
          <!-- price -->
          <dd>
            <p class="price">54,90 zł</p>
          </dd>
          <!-- type -->
          <dd>
            <p class="type"><small>6 miesięcy /</small> 1 komputer</p>
          </dd>
        </dl>
        <!-- buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-iu111pc6m54&ref=pl_iu111pc6m54purchase2004-btm<?php echo $refStr;?>&refs=pl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuspringsale2020-pl');">
          <i class="all-icons"></i>
          KUP TERAZ
        </a>
      </div>

      <!-- 1pc 1year -->
      <div class="panel middle in">
        <!-- off -->
        <span class="off">-50%</span>
        <!-- dl -->
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt="IObit Uninstaller PRO">
          </dt>
          <!-- price -->
          <dd>
            <p class="price">59,90 zł</p>
            <del>119,90 zł</del>
          </dd>
          <!-- type -->
          <dd>
            <p class="type"><small>1 rok /</small> 1 komputer</p>
          </dd>
        </dl>
        <!-- buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-iu111pc59&ref=pl_iu111pc59purchase2004-btm<?php echo $refStr;?>&refs=pl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuspringsale2020-pl');">
          <i class="all-icons"></i>
          KUP TERAZ
        </a>
      </div>

      <!-- 3pc 1year -->
      <div class="panel right in on">
        <!-- countdown -->
        <p class="countdown">
          <strong>00</strong> min
          <strong>00</strong> sek
          <strong>00</strong> ms
        </p>
        <!-- off -->
        <span class="off">-<span><span>8</span></span><span><span>5</span></span>%</span>
        <!-- dl -->
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt="IObit Uninstaller PRO">
            <span class="gift">Protected Folder+Smart Defrag PRO</span>
          </dt>
          <!-- price -->
          <dd>
            <p class="price">64,90 zł</p>
            <del>469,70 zł</del>
          </dd>
          <!-- type -->
          <dd>
            <p class="type"><small>1 rok /</small> 3 komputery</p>
          </dd>
        </dl>
        <!-- buybtn -->
        <a class="buybtn large"
           href="http://www.iobit.com/buy.php?product=pl-iu113pcsdpf64&ref=pl_iu113pcsdpf64purchase2004-btm<?php echo $refStr;?>&refs=pl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuspringsale2020-pl');">
          <i class="all-icons"></i>
          KUP TERAZ
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl>
    <dd>Akceptowane płatności</dd>
    <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></dt>
  </dl>
  <dl class="mid">
    <dd>Gwarancja zwrotu pieniędzy</dd>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
  </dl>
  <dl>
    <dd>Bezpieczna płatność</dd>
    <dt><img src="<?php echo getStaticUrl('images/gooddy.png')?>" alt=""></dt>
  </dl>
</div>
<!-- end service -->

<!-- feature -->
<div class="feature">
  <div class="wrapper clearfix">
    <h2>POZBĄDŹ SIĘ NIECHCIANYCH PLIKÓW</h2>
    <!-- content -->
    <div class="content">
      <!-- 01 -->
      <dl class="one clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
        <dd>
          <h3>Automatyczne czyszczenie</h3>
          <p>
            Skanuje i czyści pozostałości plików, aby <br>
            uzyskać czystszy i szybszy komputer.
          </p>
        </dd>
      </dl>
      <!-- 02 -->
      <dl class="two clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
        <dd>
          <h3>Całkowite odinstalowanie programów</h3>
          <p>
            Całkowicie odinstaluj wszystkie programy, nawet <br>
             te, które mają problemy z odinstalowaniem,  <br>
			oraz zmiany wprowadzone w systemie.
          </p>
        </dd>
      </dl>
      <!-- 03 -->
      <dl class="three clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
        <dd>
          <h3>Bezpieczniejsza i szybsza nawigacja</h3>
          <p>
            Automatycznie wykrywa złośliwe wtyczki <br>
            reklamowe i rozszerzenia
          </p>
        </dd>
      </dl>
      <!-- 04 -->
      <dl class="four clearfix">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
        <dd>
          <h3>Aktualizacja oprogramowania</h3>
          <p>
            Aktualizuje programy na komputerze za pomocą <br>
            jednego kliknięcia.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- intro -->
<div class="intro wrapper">
  <h2>SZYBSZY I BEZPIECZNIEJSZY INTERNET</h2>
  <img src="<?php echo getStaticUrl('images/intro.jpg')?>" alt="">
</div>
<!-- end intro -->

<!-- compare -->
<div class="compare wrapper">
  <table>
    <thead>
      <tr>
        <th colspan="2" class="text">Co zyskasz dzięki wersji PRO?</th>
        <th class="free"><div>IObit Uninstaller 11 <br> FREE </div></th>
        <th class="pro"><div>IObit Uninstaller 11 <br> PRO </div></th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""></td>
        <td class="text">
          Wystarczy jedno kliknięcie do zablokowania wyskakujących powiadomień aplikacji i przeglądarek Windows (chrome, Edge, Firefox itp.) dla bezpiecznego surfowania bez przeszkód. 
         <span class="new">Upleszono</span>
        </td>
        <td class="free"><i class="all-icons yes">√</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""></td>
        <td class="text">
          Odinstalowuje programy bezpośrednio z ikony na pulpicie, w otwartym oknie lub z <br>
          nowej ikony paska zadań
          <!-- <span class="new">NOWOŚĆ</span> -->
        </td>
        <td class="free"><i class="all-icons yes">√</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt=""></td>
        <td class="text">
          Nowy algorytm precyzyjnie wykrywa uparte oprogramowanie i bundleware <!-- <span class="new">NOWOŚĆ</span> -->
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""></td>
        <td class="text">
          Automatyczne przywracanie zmian w systemie dokonanych po dezinstalacji <br>
          niechcianego programu
          <!-- <span class="new">NOWOŚĆ</span> -->
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""></td>
        <td class="text">
          Skutecznie usuwa uparte programy
          <span class="upd"></span>
          <span class="dou"></span>
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""></td>
        <td class="text">
          Wykrywa i odinstalowuje nieporządne pakiety programów
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""></td>
        <td class="text">
          Automatycznie usuwa resztki plików, z którymi inne programy nie mogły sobie <br>
          poradzić
          <!-- <span class="upd">ULEPSZONE</span> -->
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""></td>
        <td class="text">
          Identyfikuje i usuwa złośliwe wtyczki
          <span class="upd">ULEPSZONE</span>
          <span class="dou"></span>
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""></td>
        <td class="text">
          Identyfikuje i usuwa wtyczki reklamowe
          <span class="upd">ULEPSZONE</span>
          <span class="dou"></span>
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""></td>
        <td class="text">
          Aktualizuje wszystkie ważne programy jednym kliknięciem
          <!-- <span class="upd">ULEPSZONE</span> -->
          <!-- <span class="dou"></span> -->
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""></td>
        <td class="text">
          Automatycznie aktualizuje programy do najnowszej wersji
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <!-- 10 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""></td>
        <td class="text">
          Bezpłatna pomoc techniczna 24/7
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <h2>ZWIĘKSZ KOMFORT PRACY DZIĘKI</h2>
    <h3>DARMOWYM PREZENTOM</h3>
    <!-- content -->
    <div class="content clearfix">
      <!-- sd -->
      <dl class="clearfix sd">
        <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"></dt>
        <dd>
          <h4>Smart Defrag 7 PRO</h4>
          <h5>0 zł <del>119,90zł</del></h5>
          <ul>
            <li>· Maksymalna wydajność dysku</li>
            <li>· Szybszy dostęp do plików</li>
            <li>· Zwiększona wydajność gier</li>
          </ul>
        </dd>
      </dl>
      <!-- pf -->
      <dl class="clearfix pf">
        <dt><img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"></dt>
        <dd>
          <h4>Protected Folder</h4>
          <h5>0 zł <del>149,90zł</del></h5>
          <ul>
            <li>· Sejf dla plików i folderów</li>
            <li>· Dostęp do plików zabezpieczony <br> &nbsp; hasłem</li>
          </ul>
        </dd>
      </dl>
    </div>
    <!-- price -->
    <p class="price">64,90zł <del>469,70zł</del> <span>-85%</span></p>
    <!-- buybtn -->
    <a class="buybtn gift large"
       href="http://www.iobit.com/buy.php?product=pl-iu113pcsdpf64&ref=pl_iu113pcsdpf64purchase2004-btm<?php echo $refStr;?>&refs=pl_purchase_iu"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iuspringsale2020-pl');">
      <i class="all-icons"></i>
      KUP TERAZ
    </a>
    <!-- type -->
    <p class="type"><small>1 rok /</small> 3 komputery</p>
    <!-- countdown -->
    <p class="countdown countdown02">
      <strong>00</strong> min
      <strong>00</strong> sek
      <strong>00</strong> ms
    </p>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <!-- h2 -->
    <h2>ZAUFAŁY MU MILIONY</h2>
    <!-- interview -->
    <div class="interview">
      <!-- 01 -->
      <p>
        „IObit Uninstaller staje się lepszy z każdą aktualizacją. Używam go od ponad 3 lat. Szybko się ładuje i ma prosty interfejs użytkownika. Niektóre z wielu funkcji, z których regularnie korzystam, to odinstalowywanie wsadowe, zaawansowane skanowanie, czy niszczarka plików. Ostatnio zainstalowana funkcja, która zapewnia szybki dostęp do programu, który właśnie zainstalowałem jest funkcją, której nie lubię lub nie działa ona poprawnie”.
      </p>
      <!-- 02 -->
      <p>
        „IObit Uninstaller to jeden z najlepszych programów do deinstalacji. Łatwy w obsłudze, proponuje bardzo szybkie oraz głębokie czyszczenie. Od wersji 5 ma większą liczbę innych funkcji współpracujących nie tylko z Windows 10. Również szybkie czyszczenie z wtyczek jest bardzo wygodne. Świetne wyszukiwanie duplikatów czy nieużywanych programów. Dziękuję za pomoc mojemu komputerowi i również tym należącym do członków mojej rodziny”.
      </p>
      <!-- 03 -->
      <p class="on">
        „To łatwe w użyciu i pouczające narzędzie do deinstalacji czyści, konfiguruje i optymalizuje komputer. Użytkownicy mogą go pobrać praktycznie w mgnieniu oka. To narzędzie do deinstalacji można sklasyfikować jako najlepszy deinstalator, który pozwala użytkownikom odinstalować kilka programów za jednym zamachem. Program proponuje użytkownikom wykonanie „Potężnego skanowania”, aby wejść głębiej w system i znaleźć resztki usuniętych programów. Sama wydajność sprawia, że to małe narzędzie do deinstalacji jest warte swojego miejsca w naszych komputerach”.
      </p>
      <!-- 04 -->
      <p>
        „IObit Uninstaller jest prawdopodobnie jednym z najlepszych programów do usuwania niepotrzebnych programów z komputera. W przeciwieństwie do podstawowego deinstalatora Windows, program usunie wszystkie pozostałości programu, które mogłyby później spowolnić działanie komputera. Używam tego programu do kilku lat i zawsze pomaga utrzymać mój komputer w czystości, szybko. Już wcześniej poleciłem ten program moim znajomym. Dzisiaj polecam go ponownie”.
      </p>
      <!-- 05 -->
      <p>
        „Uninstaller PRO to tylko jeden z pięciu programów do optymizacji od firmy IObit, w które postanowiłem zainwestować, tak jak szefowie kuchni inwestują w noże. Co prawda, użycie zwykłego programu do odinstalowania zadziałało, natomiast Uninstaller PRO pojawił się później i pokazał, że 35 plików wymaga wyczyszczenia. Wystarczyło kliknąć „OK”. Polecam ten program każdemu. Kupiłem licencję na 3 komputery. Obsługa techniczna jest uprzejma i znakomita”.
      </p>
    </div>
    <!-- ul -->
    <ul class="clearfix">
      <li>
        <img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="">
        <span class="line"></span>
        <cite>Lovro Žužić</cite>
      </li>
      <li>
        <img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="">
        <span class="line"></span>
        <cite>Áda Görtler</cite>
      </li>
      <li class="active">
        <img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="">
        <span class="line"></span>
        <cite>MakeUseOf</cite>
      </li>
      <li>
        <img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="">
        <span class="line"></span>
        <cite>Sergey Erlich</cite>
      </li>
      <li>
        <img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="">
        <span class="line"></span>
        <cite>Joseph Yu</cite>
      </li>
    </ul>
    <!-- h3 -->
    <h3>Nagrody</h3>
    <!-- awards -->
    <img class="awards" src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- end review -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- h2 -->
    <h2>NIE ZWLEKAJ I ZWIĘKSZ MOC KOMPUTERA TERAZ</h2>
    <!-- box -->
    <div class="box">
      <img class="iu iu1" src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt="IObit Uninstaller PRO">
      <img class="bundle bundle1" src="<?php echo getStaticUrl('images/banner-bundle.png')?>" alt="Protected Folder+Smart Defrag PRO">
      <span class="off">-85%</span>
    </div>
    <!-- ul -->
    <ul>
      <!-- 6 month -->
      <li class="mon6" data-num="0">6 miesięcy / 1 PC</li>
      <!-- 3 year bundle -->
      <li class="mon36bundle active" data-num="2">1 rok / 3 PC + DARMOWE PREZENTY</li>
      <!-- 3 year single -->
      <li class="mon36single" data-num="2">1 rok / 3 PC</li>
      <!-- 1 year -->
      <li class="mon12" data-num="1">1 rok / 1PC</li>
    </ul>
    <!-- dl -->
    <dl>
      <dd>
        <!-- price -->
        <p class="price">64,90zł <del>469,70zł</del></p>
        <!-- buybtn -->
        <a class="buybtn bottom large"
           href="http://www.iobit.com/buy.php?product=pl-iu113pcsdpf64&ref=pl_iu113pcsdpf64purchase2004-btm<?php echo $refStr;?>&refs=pl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuspringsale2020-pl');">
          <i class="all-icons"></i>
          KUP TERAZ
        </a>
        <!-- countdown -->
        <p class="countdown countdown02">
          <strong>00</strong> min
          <strong>00</strong> sek
          <strong>00</strong> ms
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->



<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dd>Uwaga:</dd>
      <dd>Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</dd>
      <dd>Dane mogą się różnić w zależności od systemu lub komputera.</dd>
    </dl>
    <p class="copyright">Copyright ©2005 - <?php echo date(Y)?> IObit. Wszelkie prawa zastrzeżone</p>
  </div>
</div>
<!-- end footer -->

<script>var ref = "<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>