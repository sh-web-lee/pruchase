 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr='';
if(in_array($_GET['pop'],array('xr_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Zaoszczędź do 85% na IObit Uninstaller PRO z okazji Bożego Narodzenia - IObit!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="lamp">
    <div class="light hide"></div>
    <div class="light01 hide"></div>
    <div class="light02 hide"></div>
  </div>
  <div class="snow"></div>

  <div class="wrapper">
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>wyprzedaż świąteczna do  -85%</h1>
    <div class="box">
      <dl>
        <dt>cena początkowa: <del>119,90 zł</del></dt>
        <dd>
          <strong>49,90 zł</strong>
          <span>1 rok / 1 komputer</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
      <a href="http://www.iobit.com/buy.php?product=pl-iu91pc49&ref=pl_iu91pc49purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxmas1911xr-pl');"
         class="buybtn small">
         KUP TERAZ
       </a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt>cena początkowa: <del>389,70 zł</del></dt>
        <dd>
          <strong>54,90 zł</strong>
          <span>1 rok /<b> 3 komputery</b></span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
      <a href="http://www.iobit.com/buy.php?product=pl-iu93pcsdpf54&ref=pl_iu93pcsdpf54purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxmas1911xr-pl');"
         class="buybtn">KUP TERAZ</a>
      <p>Dostępnych tylko kilka sztuk</p>
    </div>
    <p class="last">Jeśli nie będziesz zadowolony w ciągu pierwszych 60 dni, to zwrócimy Ci pieniądze.</p>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- intro -->
  <div class="intro wrapper clearfix">
    <h2>Z IObit Uninstaller PRO  <br> zaoszczędzisz więcej czasu i wysiłku</h2>
    <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Potężny</strong>
        <p>Niepożądane programy, których nie można usunąć, są szybko odinstalowywane.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Dokładny</strong>
        <p>Dzięki ulepszonemu głębokiemu skanowaniu wszystkie pozostałości są automatycznie odnajdywane i usuwane.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Inteligentny</strong>
        <p>Wykrywa i usuwa oprogramowanie pakietu i wtyczki reklamowe.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>Szybki</strong>
        <p>Za pomocą jednego kliknięcia aktualizuje ważne oprogramowanie na komputerze.</p>
      </dd>
    </dl>
    <p class="learn-more">Różnice między wersją DARMOWĄ a PRO </p>
  </div>
  <!-- end intro -->

  <div class="gift-content wrapper clearfix">
    <h2> Co możesz zrobić za pomocą bezpłatnych prezentów?</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""></dt>
      <dd>
        <strong> 0 zł</strong>  Cena początkowa: <del> 119,90 zł </del>
        <p>Defragmentuj dysk twardy automatycznie i szybko.</p>
        <p>Znacząco przyśpiesz dostęp do danych.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""></dt>
      <dd>
        <strong> 0 zł</strong>  Cena początkowa: <del> 149,90 zł </del>
        <p>  Zapewnij ochronę hasłem do folderów i plików w systemie Windows.</p>
        <p>Chroń dane przed ich utratą i różnymi wirusami.</p>
      </dd>
    </dl>
  </div>
  <div class="wrapper">
    <div class="betwwen-buy">
      <div class="content">
        <img src="<?php echo getStaticUrl('images/between-buy-box.png')?>" alt="" class="img-box">
        <dl>
          <dt><strong>54,90 zł </strong> <del>389,70 zł</del></dt>
          <dd>
            <a href="http://www.iobit.com/buy.php?product=pl-iu93pcsdpf54&ref=pl_iu93pcsdpf54purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxmas1911xr-pl');"
               class="buybtn red">
              KUP TERAZ <span>– 85% </span>
            </a>
          </dd>
          <dd class="last">Dostępnych tylko kilka sztuk </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end container -->

<!-- review -->
<div class="review wrapper clearfix">
  <div class="title">
    <h2>Wyróżnieni na całym świecie</h2>
    <p>Miliony użytkowników na całym świecie podzieliło się swoimi doświadczeniami</p>
  </div>
  <div class="review-icons fl">
    <img src="<?php echo $pResUrl;?>images/review-icons.png" alt="">
  </div>
  <div class="review-content fr">
    <ul class="clearfix">
      <li class="active">
        <img src="<?php echo $pResUrl;?>images/makeuseof.png" alt="MakeUseOf">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/sergey-erlich.png" alt="Sergey Erlich">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/joseph-yu.png" alt="Joseph Yu">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/lovro-zuzic.png" alt="Lovro Žužić">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/ada-gortler.png" alt="Áda Görtler">
      </li>
    </ul>
    <span class="line"></span>
    <div class="review-message">
      <!-- Sergey Erlich -->
      <p class="active">
        „To łatwe w użyciu i pouczające narzędzie do deinstalacji czyści, konfiguruje i optymalizuje komputer. Użytkownicy mogą go pobrać praktycznie w mgnieniu oka. To narzędzie do deinstalacji można sklasyfikować jako najlepszy deinstalator, który pozwala użytkownikom odinstalować kilka programów za jednym zamachem. Program proponuje użytkownikom wykonanie „Potężnego skanowania”, aby wejść głębiej w system i znaleźć resztki usuniętych programów. Sama wydajność sprawia, że to małe narzędzie do deinstalacji jest warte swojego miejsca w naszych komputerach”. <span>- Sergey Erlich</span>
      </p>
      <!-- Sergey Erlich -->
      <p>
        „IObit Uninstaller jest prawdopodobnie jednym z najlepszych programów do usuwania niepotrzebnych programów z komputera. W przeciwieństwie do podstawowego deinstalatora Windows, program usunie wszystkie pozostałości programu, które mogłyby później spowolnić działanie komputera. Używam tego programu do kilku lat i zawsze pomaga utrzymać mój komputer w czystości, szybko. Już wcześniej poleciłem ten program moim znajomym. Dzisiaj polecam go ponownie”. <span>- Sergey Erlich</span>
      </p>
      <!-- Joseph Yu -->
      <p>
        „Uninstaller PRO to tylko jeden z pięciu programów do optymizacji od firmy IObit, w które postanowiłem zainwestować, tak jak szefowie kuchni inwestują w noże. Co prawda, użycie zwykłego programu do odinstalowania zadziałało, natomiast Uninstaller PRO pojawił się później i pokazał, że 35 plików wymaga wyczyszczenia. Wystarczyło kliknąć „OK”. Polecam ten program każdemu. Kupiłem licencję na 3 komputery. Obsługa techniczna jest uprzejma i znakomita”. <span>- Joseph Yu</span>
      </p>
      <!-- Paulo Martins -->
      <p>
        „IObit Uninstaller staje się lepszy z każdą aktualizacją. Używam go od ponad 3 lat. Szybko się ładuje i ma prosty interfejs użytkownika. Niektóre z wielu funkcji, z których regularnie korzystam, to odinstalowywanie wsadowe, zaawansowane skanowanie, czy niszczarka plików. Ostatnio zainstalowana funkcja, która zapewnia szybki dostęp do programu, który właśnie zainstalowałem jest funkcją, której nie lubię lub nie działa ona poprawnie”. <span>- Lovro Žužić</span>
      </p>
      <!-- Lovro Žužić -->
      <p>
        „IObit Uninstaller to jeden z najlepszych programów do deinstalacji. Łatwy w obsłudze, proponuje bardzo szybkie oraz głębokie czyszczenie. Od wersji 5 ma większą liczbę innych funkcji współpracujących nie tylko z Windows 10. Również szybkie czyszczenie z wtyczek jest bardzo wygodne. Świetne wyszukiwanie duplikatów czy nieużywanych programów. Dziękuję za pomoc mojemu komputerowi i również tym należącym do członków mojej rodziny”.  <span>- Áda Görtler</span>
      </p>
    </div>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2">Dlaczego powinieneś używać wersji PRO? </th>
        <td class="space"></td>
        <th class="itema"><span>Darmowa wersja</span></th>
        <td class="space"></td>
        <th class="itemb"><span>Wersja PRO</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue">Szybko odinstalowuje programy </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">Usuwa uparte oprogramowanie</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">Wykrywa i usuwa oprogramowanie pakietu</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">Automatycznie czyści resztki</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">Znajduje i usuwa wtyczki reklamowe</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">Aktualizuje ważne oprogramowanie za pomocą 1 kliknięcia</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue">Aktualizuje się automatycznie</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">Zapewnia wsparcie techniczne 24/7</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
       <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
        <td class="virtue">Cofa wprowadzone zmiany systemowe</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->

<!--bottom-->
<div class="bottom">
  <div class="wrapper">
    <div class="content">
      <div class="img-box"></div>
      <ul>
        <li><i></i> <strong>1 rok / <b>1 komputer</b></strong> teraz: <span>49</span>,90 zł</li>
        <li class="active"><i></i> <strong>1 rok / <b>3 komputery </b></strong> teraz: <span>54</span>,90 zł</li>
      </ul>
      <dl>
        <dt><span>85%</span>  zniżki</dt>
        <dd>
          <a href="http://www.iobit.com/buy.php?product=pl-iu93pcsdpf54&ref=pl_iu93pcsdpf54purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxmas1911xr-pl');"
             class="buybtn">
            KUP TERAZ 
          </a>
        </dd>
        <dd class="last">Dostępnych tylko kilka sztuk</dd>
      </dl>
    </div>
  </div>
</div>
<!--bottom-->

<!-- service -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dt>
      <dd><strong>Gwarancja satysfakcji</strong> 60-dniowa gwarancja zwrotu pieniędzy</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""></dt>
      <dd><strong>Zabezpieczenie płatności</strong> Twoja płatność jest w 100% bezpieczna</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/veloce.png')?>" alt=""></dt>
      <dd><strong>Szybka aktywacja</strong> Kod licencyjny otrzymasz w ciągu <br> kilku minut po zakupie</dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></dt>
      <dd><strong>Obsługa klienta</strong> Bezpłatne wsparcie techniczne 24/7</dd>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Uwaga:</dt>
    <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
    <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów</dd>
  </dl>
  <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</div>
</div>
<!-- end footer -->


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>