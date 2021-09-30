<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getuserNum') {
    $userNum=rand(72,93);
    echo json_encode(array('userNum'=>$userNum));
    exit();
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
  <title>Tylko teraz nawet 80% zniżki na najnowszym IObit Uninstaller 10 PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
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
    <h1>ZADBAJ O SWÓJ KOMPUTER NA DOBRE</h1>
    <h2>Wyczyść niepotrzebne i złośliwe pliki, przyspiesz komputer i Internet</h2>
    <!-- container -->
    <div class="container clearfix">
      <!-- left offer -->
      <div class="offer small left">
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-iu6m.png')?>" alt="IObit Uninstaller PRO">
        <!-- price -->
        <p class="price">
          <strong><big>54</big>,90 zł</strong> <br>
          9,15 zł / 1 miesiąc
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-iu101pc6m54&ref=pl_iu101pc6m54purchase2007<?php echo $refStr;?>&refs=pl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-summersale2020-pl');">
          <i class="all-icons"></i>
          KUP TERAZ
        </a>
        <!-- note -->
        <p class="note"><i class="all-icons"></i> 6 miesięcy / 1 komputer</p>
      </div>

      <!-- middle offer -->
      <div class="offer small middle">
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-iu1pc.png')?>" alt="IObit Uninstaller PRO">
        <!-- price -->
        <p class="price">
          <strong><big>59</big>,90 zł</strong> <del>119,90 zł</del> <br>
          4,91 zł / 1 miesiąc
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-iu101pc59&ref=pl_iu101pc59purchase2007<?php echo $refStr;?>&refs=pl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-summersale2020-pl');">
          <i class="all-icons"></i>
          KUP TERAZ
        </a>
        <!-- note -->
        <p class="note"><i class="all-icons"></i> 1 rok / 1 komputer</p>
      </div>

      <!-- right offer -->
      <div class="offer large right">
        <!-- h3 -->
        <h3>SUPER PROMOCJA</h3>
        <!-- countnum -->
        <div class="countnum">
          Zostało tylko
          <div class="numlist clearfix">
            <div class="numbox">
              <div><span>1</span></div>
            </div>
            <div class="numbox">
              <div><span>5</span></div>
            </div>
            <div class="numbox">
              <div><span>3</span></div>
            </div>
          </div>
          pakietów
        </div>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-iuisupf.png')?>" alt="IObit Uninstaller PRO+IObit Software Updater PRO+Protected Folder">
        <!-- price -->
        <p class="price">
          <strong><big>64</big>,90 zł</strong> <del>389,70 zł</del> <br>
          4,91 zł / 1 miesiąc
        </p>
        <!-- buybtn -->
        <a class="buybtn red"
           href="http://www.iobit.com/buy.php?product=pl-iu103pcsdpf64&ref=pl_iu103pcsdpf64purchase2007<?php echo $refStr;?>&refs=pl_purchase_db"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-summersale2020-pl');">
          <i class="all-icons"></i>
          KUP TERAZ
        </a>
        <!-- note -->
        <p class="note"><i class="all-icons"></i> 1 rok / 3 komputer</p>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- service -->
<div class="service wrapper clearfix">
  <!-- one -->
  <dl>
    <dd>Akceptowane płatności</dd>
    <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></dt>
  </dl>
  <!-- two -->
  <dl class="spe">
    <dd>Gwarancja zwrotu pieniędzy</dd>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
  </dl>
  <!-- three -->
  <dl>
    <dd>Bezpieczna płatność</dd>
    <dt><img src="<?php echo getStaticUrl('images/gooddy.png')?>" alt=""></dt>
  </dl>
</div>
<!-- end service -->

<!-- intro -->
<div class="intro wrapper">
  <!-- title -->
  <h2>Gwarantujemy Ci czystszy, bezpieczniejszy i szybszy komputer</h2>
  <h3>W przeciwnym razie natychmiast zwrócimy Ci pieniądze!*</h3>
  <!-- container -->
  <div class="container clearfix">
    <!-- one -->
    <dl class="one">
      <dt>200+</dt>
      <dd>
        Popularny w ponad <b>200</b> krajach <br>
        na całym świecie
      </dd>
    </dl>
    <!-- two -->
    <dl class="two">
      <dt>1 000+</dt>
      <dd>
        Ponad <b>1 000</b> mediów doceniło <br>
        IObit Uninstaller
      </dd>
    </dl>
    <!-- three -->
    <dl class="three">
      <dt>150 000 000+</dt>
      <dd>
        Wybrany i rekomendowany <br>
        przez ponad <b>150 milionów</b> <br>
        użytkowników na całym świecie
      </dd>
    </dl>
    <!-- four -->
    <dl class="four">
      <dt>80%+</dt>
      <dd>
        Ponad <b>80%</b> użytkowników <br>
        IObit Uninstaller aktywowało <br>
        wersję PRO
      </dd>
    </dl>
  </div>
</div>
<!-- end intro -->

<!-- feature -->
<div class="feature wrapper">
  <!-- h2 -->
  <h2>Wyczyść i przyspiesz komputer</h2>
  <!-- message01 -->
  <div class="message message01 clearfix">
    <!-- text -->
    <div class="text fl">
      <h3 class="spe">Automatyczne czyszczenie</h3>
      <p>
        Automatycznie głębokie czyszczenie <br>
        pozwala usunąć wszystkie niechciane <br>
        pliki i resztki, zapewniając czystszy i <br>
        szybszy komputer.
      </p>
    </div>
    <!-- img -->
    <div class="pict fr">
      <img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt="">
    </div>
  </div>
  <!-- message02 -->
  <div class="message message02 clearfix">
    <!-- img -->
    <div class="pict fl">
      <img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt="">
    </div>
    <!-- text -->
    <div class="text fr spe">
      <h3>
        Wykrywa i odinstalowuje Bundleware
      </h3>
      <p>
        Wykrywa i odinstalowuje pakiety programów, np.: adware, wtyczki, przeglądarki i wiele innych. Usuwa powiadomienia przeglądarki.
      </p>
    </div>
  </div>
  <!-- message03 -->
  <div class="message message03 clearfix">
    <!-- text -->
    <div class="text fl">
      <h3>
        Bezpieczniejsza i szybsza <br>
        nawigacja
      </h3>
      <p>
        Automatycznie wykrywa złośliwe <br>
        wtyczki reklamowe i rozszerzenia, <br>
        aby zapewnić bezpieczeństwo w Internecie.
      </p>
    </div>
    <!-- img -->
    <div class="pict fr">
      <img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt="">
    </div>
  </div>
  <!-- message04 -->
  <div class="message message04 clearfix">
    <!-- img -->
    <div class="pict fl">
      <img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt="">
    </div>
    <!-- text -->
    <div class="text fr spe">
      <h3>
        <br>
        <br>
        Aktualizacja <br>
        oprogramowania
      </h3>
      <p>
        Szybka i łatwa aktualizacja programów <br>
        za pomocą jednego kliknięcia.
      </p>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <h2>Zwiększ komfort pracy dzięki DARMOWYM PREZENTOM</h2>
  <div class="wrapper">
    <!-- <h3>DARMOWYM PREZENTOM</h3> -->
    <!-- content -->
    <div class="content clearfix">
      <!-- isu -->
      <dl class="clearfix isu">
        <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag 6 PRO"></dt>
        <dd>
          <h4>Smart Defrag 6 PRO</h4>
          <h5>(1rok / 1 komputer)</h5>
          <ul>
            <li>Maksymalna wydajność dysku</li>
            <li>Szybszy dostęp do plików</li>
            <li>Zwiększona wydajność gier</li>
          </ul>
        </dd>
      </dl>
      <!-- pf -->
      <dl class="clearfix pf">
        <dt><img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"></dt>
        <dd>
          <h4>Protected Folder</h4>
          <h5>(1rok /1 komputer)</h5>
          <ul>
            <li>Zabezpiecz dane hasłem</li>
            <li>Chroń pliki przed atakami</li>
            <li>Chroń prywatność</li>
          </ul>
        </dd>
      </dl>
    </div>
    <!-- buybtn -->
    <a class="buybtn red"
       href="http://www.iobit.com/buy.php?product=pl-iu103pcsdpf64&ref=pl_iu103pcsdpf64purchase2007<?php echo $refStr;?>&refs=pl_purchase_db"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-summersale2020-pl');">
      <i class="all-icons"></i>
      KUP TERAZ
    </a>
    <!-- countnum -->
    <div class="countnum">
      Zostało tylko
      <div class="numlist clearfix">
        <div class="numbox">
          <div><span>1</span></div>
        </div>
        <div class="numbox">
          <div><span>5</span></div>
        </div>
        <div class="numbox">
          <div><span>3</span></div>
        </div>
      </div>
      pakietów
    </div>
  </div>
</div>
<!-- end gifts -->

<!-- compare -->
<div class="compare wrapper">
  <!-- h2 -->
  <h2>Ciesz się funkcjami dostępnymi tylko w PRO</h2>
  <table>
    <thead>
      <tr>
        <th colspan="2" class="text"></th>
        <th class="free"><div>IObit Uninstaller 10 <br> FREE </div></th>
        <th class="pro"><div>IObit Uninstaller 10 <br> PRO </div></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""></td>
        <td class="text">Usuwa powiadomienia przeglądarki <span class="new">NOWOŚĆ</span></td>
        <td class="free"><i class="all-icons yes">√</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""></td>
        <td class="text">Odinstalowuje programy bezpośrednio z ikony na pulpicie, w otwartym oknie lub z nowej ikony paska zadań</td>
        <td class="free"><i class="all-icons yes">√</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt=""></td>
        <td class="text">Nowy algorytm precyzyjnie wykrywa uparte oprogramowanie i bundleware <span class="new">NOWOŚĆ</span></td>
        <td class="free"><i class="all-icons">√</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""></td>
        <td class="text">
          Automatyczne przywracanie zmian w systemie dokonanych po dezinstalacji niechcianego 
          programu
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
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
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""></td>
        <td class="text">
          Wykrywa i odinstalowuje nieporządne pakiety programów
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""></td>
        <td class="text">
          Automatycznie usuwa resztki plików, z którymi inne programy nie mogły sobie <br>
          poradzić
          <span class="upd">ULEPSZONE</span>
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
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
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""></td>
        <td class="text">
          Aktualizuje wszystkie ważne programy jednym kliknięciem
          <span class="upd">ULEPSZONE</span>
          <span class="dou"></span>
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""></td>
        <td class="text">
          Automatycznie aktualizuje programy do najnowszej wersji
        </td>
        <td class="free"><i class="all-icons">·</i></td>
        <td class="pro"><i class="all-icons">√</i> </td>
      </tr>
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
    <h2>Nie zwlekaj i zadbaj o komputer już TERAZ!</h2>
    <!-- box -->
    <div class="box">
      <img class="iu iu1" src="<?php echo getStaticUrl('images/bottombuy-iu.png')?>" alt="IObit Uninstaller PRO">
      <img class="bundle bundle1" src="<?php echo getStaticUrl('images/bottombuy-bundle.png')?>" alt="Protected Folder+IObit Software Updater PRO">
      <span class="off"><big>-80</big>%</span>
    </div>
    <!-- ul -->
    <ul>
      <!-- 6 month -->
      <li class="mon6"
          data-url="http://www.iobit.com/buy.php?product=pl-iu101pc6m54&ref=pl_iu101pc6m54purchase2007<?php echo $refStr;?>&refs=pl_purchase_iu&tw=-8"
          data-ga="ga('send', 'event', 'iubuy', 'buy', 'iu-summersale2020-pl');"
          data-price="54"
          data-del=" ">
        6 miesięcy / 1 komputer
      </li>
      <!-- 3 year bundle -->
      <li class="mon36bundle active"
          data-url="http://www.iobit.com/buy.php?product=pl-iu103pcsdpf64&ref=pl_iu103pcsdpf64purchase2007<?php echo $refStr;?>&refs=pl_purchase_db&tw=-8"
          data-ga="ga('send', 'event', 'iubuy', 'buy', 'iu-summersale2020-pl');"
          data-price="64"
          data-del="469,70 zł">
        1 rok / 3 komputery + prezenty
      </li>
      <!-- 1 year -->
      <li class="mon12"
          data-url="http://www.iobit.com/buy.php?product=pl-iu101pc59&ref=pl_iu101pc59purchase2007<?php echo $refStr;?>&refs=pl_purchase_iu&tw=-8"
          data-ga="ga('send', 'event', 'iubuy', 'buy', 'iu-summersale2020-pl');"
          data-price="59"
          data-del="119,90 zł">
        1 rok / 1 komputer
      </li>
    </ul>
    <!-- dl -->
    <dl>
      <dd>
        <!-- price -->
        <p class="price"><strong><big>64</big>,90zł</strong> <del>389,70 zł</del></p>
        <!-- buybtn -->
        <a class="buybtn red"
           href="http://www.iobit.com/buy.php?product=pl-iu103pcsdpf64&ref=pl_iu103pcsdpf64purchase2007<?php echo $refStr;?>&refs=pl_purchase_db"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu-summersale2020-pl');">
          <i class="all-icons"></i>
          KUP TERAZ
        </a>
        <!-- countnum -->
        <div class="countnum">
          Zostało tylko
          <div class="numlist clearfix">
            <div class="numbox">
              <div><span>1</span></div>
            </div>
            <div class="numbox">
              <div><span>5</span></div>
            </div>
            <div class="numbox">
              <div><span>3</span></div>
            </div>
          </div>
          pakietów
        </div>
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
      <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
      <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów.</dd>
      <dd>* Jeśli będziesz niezadowolony, to możesz anulować zakup w ciągu 60 dni bez żadnych opłat. Pieniądze zostaną automatycznie zwrócone na Twoje konto.</dd>
    </dl>
    <p class="copyright">Copyright ©2005 - <?php echo date(Y)?> IObit. Wszelkie prawa zastrzeżone</p>
  </div>
</div>
<!-- end footer -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <!-- countnum -->
  <div class="countnum">
    Pospiesz się, zostało
    <div class="numlist clearfix">
      <div class="numbox">
        <div><span>1</span></div>
      </div>
      <div class="numbox">
        <div><span>5</span></div>
      </div>
      <div class="numbox">
        <div><span>3</span></div>
      </div>
    </div>
    pakietów!
  </div>
  <p class="people"><i></i> <b class="userNum">86</b> osób przegląda stronę</p>
  <i class="close">X</i>
</div>
<!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>