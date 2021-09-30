<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

if (preg_match('/^([0-9]*)\.([0-9]*)\./', $_GET['ver'], $matches)) {
  $ver = $matches[1] . '-' . $matches[2];
  $refStr .= '-' . $ver;
}
$refStr .= empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['user']) ? '' : ('-' . $_GET['user']);
$refStr .= empty($_GET['insday']) ? '' : ('-' . $_GET['insday']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/Normalize.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/common.css" type="text/css">
  <link rel="icon" href="https://codes.iobit.com/iobit/images/favicon.ico" mce_href="https://codes.iobit.com/iobit/images/favicon.ico" type="image/x-icon">
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/swiper.min.css"> -->
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/animate.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
  <title>Zaoszczędź do 85% na IObit Uninstaller PRO z okazji Bożego Narodzenia - IObit!</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <nav>
    <div class="logo"><a href="https://www.iobit.com/nl/index.php" target="_blank" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2011-nl')"><img src="<?= $pResUrl; ?>static/img/LOGO.png" alt=""></a>
    </div>
    <img src="<?= $pResUrl; ?>static/img/wordbd.png" alt="">
    <div class="book clearfix">
      <div class="one left ">
        <h3>Pakiet standardowy</h3>
        <p style="text-align: right;">
          64<span style="font-size: 18px;">,90 zł</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">199,90 zł</i>
        </p>
        <div style="text-align: left;">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <a href="http://www.iobit.com/buy.php?product=pl-iu103pc64&ref=pl_iu103pc64purchase2011<?= $refStr; ?>&refs=pl_purchase_iu " target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxmas2011-pl')">KUP TERAZ</button>
        </a>
      </div>
      <div class="two left">
        <div class="two-up">
          <h3>Tymczasowy pakiet świąteczny!</h3>
          <p style=" padding-left: 27%;text-align: left;">
            <img src="<?= $pResUrl; ?>static/img/time.png" alt="">
            Tylko
            <i id="timeout">00:11:24:326</i>
          </p>
        </div>
        <p style="text-align: right;font-size: 60px; font-weight: 600;margin-right: 20px;">
          64<span style="font-size: 22px;">,90zł</span> <i style="font-size: 22px; color: #838395;text-decoration: line-through;">509,60 zł</i>
        </p>
        <div style="text-align: left;margin-left: 25px;margin-top: -19px;">
          <img src="<?= $pResUrl; ?>static/img/box.png" alt="">
        </div>
        <a href="http://www.iobit.com/buy.php?product=pl-iu103pcsdpfisu64&ref=pl_iu103pcsdpfisu64purchase2011<?= $refStr; ?>&refs=pl_purchase_iU" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxmas2011-pl')">
            KUP TERAZ
          </button>
        </a>
        <img src="<?= $pResUrl; ?>static/img/UITVERKOCHT.png" alt="" style="display: none;" id="post">
      </div>
      <img src="<?= $pResUrl; ?>static/img/pplay.png" alt="" style=" bottom: -125px;
      position: absolute;
      z-index: 999;
      left: -64px;">
    </div>
  </nav>
  <aside>
    <h2 style="text-align: center;"><img src="<?= $pResUrl; ?>static/img/word.png" alt=""></h2>
    <div class="feature wrapper clearfix">
      <!-- computer -->
      <div class="computer">
        <div class="screen">
          <div class="list clearfix">
            <img src="<?= $pResUrl; ?>static/img/num1.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num2.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num3.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num4.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num5.png" alt="">
          </div>
        </div>
      </div>
      <!-- ul -->
      <div class="message">
        <ul>
          <li>
            <b>Skuteczne </b>usuwanie wszelkiego niechcianego i uporczywego oprogramowania.
          </li>
          <li>
            <b>Inteligentne </b> wykrywanie i usuwanie dołączonego oprogramowania.
          </li>
          <li>
            <b>Łatwe </b> aktualizowanie ważnego oprogramowania do najnowszej wersji jednym kliknięciem.
          </li>
          <li class="last">
            <b>Automatyczne </b>usuwanie pozostałości i aktualizowanie IObit Uninstaller.
          </li>
        </ul>
        <!-- active -->
        <span></span>
      </div>
    </div>
  </aside>
  <article id="arti">
    <div class="art">
      <div class="num1">
        <img src="<?= $pResUrl; ?>static/img/twobox.png" alt="">
      </div>
      <div class="num2">
        <p>
          <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          Smart Defrag PRO
        </p>
        <i>utrzymuje dysk twardy i dysk SSD w idealnym stanie!</i>
        <p> <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          IObit Software Updater PRO</p>
        <i> automatycznie aktualizuje oprogramowanie na Twoim </i>
        <i>komputerze!</i>
        <p> <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          Protected Folder </p>
        <i>nie martw się o kradzież danych lub wycieki prywatności!</i>
      </div>
      <div class="num3">
        <a href="http://www.iobit.com/buy.php?product=pl-iu103pcsdpfisu64&ref=pl_iu103pcsdpfisu64purchase2011<?= $refStr; ?>&refs=pl_purchase_iU" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxmas2011-pl')">ODBIERZ PREZENTY</button>
          <p>
        </a>
        <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
        Tylko
        <i id="timeout" style="font-size: 14px;color: #EA2D2D;font-weight: bold;">00:11:24:326</i>
        </p>
      </div>
    </div>
    <div class="nothing">
      <h2 style=" text-align: left;font-size: 26px;  color: #292b2f;margin-top: 23px;padding-left: 853px;">Nadal skorzystaj z 65% zniżki!
      </h2>
      <div class="arttwo">
        <div class="num1">
          <img src="<?= $pResUrl; ?>static/img/ubox.png" alt="">
        </div>
        <div class="num2">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <div class="num3">
          <p style="text-align: center;font-size: 48px; font-weight: 600;margin-right: 20px;">
            64<span style="font-size: 18px;">,90 zł</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">199.90 zł</i>
          </p>
          <a href="http://www.iobit.com/buy.php?product=pl-iu103pc64&ref=pl_iu103pc64purchase2011<?= $refStr; ?>&refs=pl_purchase_iu" target="_blank">
            <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxmas2011-pl')">KUP TERAZ</button>
          </a>
        </div>
      </div>
    </div>
  </article>
  <div class="mainbox clearfix">
    <div class="tab">
      <div class="context">
        <div class="con">
          <h5>Recenzja użytkownika</h5>
          <h6>„IObit Uninstaller staje się lepszy z każdą aktualizacją. Używam go od ponad 3 lat. Szybko się ładuje i ma prosty interfejs użytkownika. Niektóre z wielu funkcji, z których regularnie korzystam, to odinstalowywanie wsadowe, zaawansowane skanowanie, czy niszczarka plików. Ostatnio zainstalowana funkcja, która zapewnia szybki dostęp do programu, który właśnie zainstalowałem jest funkcją, której nie lubię lub nie działa ona poprawnie”.</h6>
        </div>
        <div class="con">
          <h5>Recenzja użytkownika</h5>
          <h6>„IObit Uninstaller to jeden z najlepszych programów do deinstalacji. Łatwy w obsłudze, proponuje bardzo szybkie oraz głębokie czyszczenie. Od wersji 5 ma większą liczbę innych funkcji współpracujących nie tylko z Windows 10. Również szybkie czyszczenie z wtyczek jest bardzo wygodne. Świetne wyszukiwanie duplikatów czy nieużywanych programów. Dziękuję za pomoc mojemu komputerowi i również tym należącym do członków mojej rodziny”.</h6>
        </div>
        <div class="con">
          <h5>Recenzje mediów</h5>
          <h6>„To łatwe w użyciu i pouczające narzędzie do deinstalacji czyści, konfiguruje i optymalizuje komputer. Użytkownicy mogą go pobrać praktycznie w mgnieniu oka. To narzędzie do deinstalacji można sklasyfikować jako najlepszy deinstalator, który pozwala użytkownikom odinstalować kilka programów za jednym zamachem. Program proponuje użytkownikom wykonanie „Potężnego skanowania”, aby wejść głębiej w system i znaleźć resztki usuniętych programów. Sama wydajność sprawia, że to małe narzędzie do deinstalacji jest warte swojego miejsca w naszych komputerach”.</h6>
        </div>
        <div class="con">
          <h5>Recenzja użytkownika</h5>
          <h6>„IObit Uninstaller jest prawdopodobnie jednym z najlepszych programów do usuwania niepotrzebnych programów z komputera. W przeciwieństwie do podstawowego deinstalatora Windows, program usunie wszystkie pozostałości programu, które mogłyby później spowolnić działanie komputera. Używam tego programu do kilku lat i zawsze pomaga utrzymać mój komputer w czystości, szybko. Już wcześniej poleciłem ten program moim znajomym. Dzisiaj polecam go ponownie”.</h6>
        </div>
        <div class="con">
          <h5>Recenzja użytkownika</h5>
          <h6>„Uninstaller PRO to tylko jeden z pięciu programów do optymizacji od firmy IObit, w które postanowiłem zainwestować, tak jak szefowie kuchni inwestują w noże. Co prawda, użycie zwykłego programu do odinstalowania zadziałało, natomiast Uninstaller PRO pojawił się później i pokazał, że 35 plików wymaga wyczyszczenia. Wystarczyło kliknąć „OK”. Polecam ten program każdemu. Kupiłem licencję na 3 komputery. Obsługa techniczna jest uprzejma i znakomita”.</h6>
        </div>
      </div>
      <ul class="btn">
        <li class="active">
          <img src="<?= $pResUrl; ?>static/img/ivan.png" alt="" class="imgon">
          <h3>Lovro Žužić</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/ali.png" alt="" class="imgon">
          <h3>Áda Görtler</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/MakeUseOf.png" alt="" class="imgon">
          <h3>Make UseOf</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/samrat.png" alt="" class="imgon">
          <h3>Sergey Erlich</h3>
        </li>
        <li class="active">
          <img src="<?= $pResUrl; ?>static/img/john.png" alt="" class="imgon">
          <h3>Joseph Yu</h3>
        </li>
      </ul>
    </div>
    <div class="tablebox">
      <div class="title">
        <h3>IObit Uninstaller Free </h3>
        <div>
          <img src="<?= $pResUrl; ?>static/img/title.png" alt="">
        </div>
        <h1> IObit Uninstaller PRO</h1>
      </div>
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Odinstalowuje programy za pomocą skrótu, otwartego okna lub ikony na pasku zadań</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Usuwa wtyczki i rozszerzenia w Edge, Chrome, IE, Firefox itp.</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Usuwa uporczywe programy </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Wykrywa i usuwa programy dostarczane z oprogramowaniem freeware </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>
            Automatycznie usuwa pozostałe pliki, których inne programy dezinstalacyjne nie mogą usunąć
          </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Utrzymuje całe oprogramowanie na twoim komputerze w dobrym stanie</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Identyfikuje i usuwa wtyczki reklamowe</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Automatycznie aktualizuje wszystkie ważne programy jednym kliknięciem</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Automatycznie aktualizuje do najnowszej wersji</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td style="border-bottom: 0;">Bezpłatna pomoc techniczna 24/7</td>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
      </table>
    </div>
  </div>
  <div class="asc">
    <h1>IObit Uninstaller 10 PRO potrafi jeszcze <br> więcej niż Twoja poprzednia wersja!</h1>
    <img src="<?= $pResUrl; ?>static/img/line.png" alt="">
    <div class="asc-box">
      <ul>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>static/img/icon 1.png" alt=""></div>
          <h2>Blokuje powiadomienia</h2>
          <p>Najnowsza wersja blokuje również powiadomienia przeglądarki, aby zapewnić niezakłócone surfowanie.</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>static/img/icon 2.png" alt=""></div>
          <h2>Czystszy</h2>
          <p>Dzięki większej o 30% bazie danych usuwa się więcej pozostałości, co zapewnia czysty i szybki system.</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>static/img/icon 3.png" alt=""></div>
          <h2>Potężniejszy</h2>
          <p>Usuwa bardziej uparte oprogramowanie, w tym Microsoft Edge (Chromium).</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>static/img/icon 4.png" alt=""></div>
          <h2>Pełna obsługa przeglądarki</h2>
          <p>Obsługuje więcej przeglądarek, w tym nowy Microsoft Edge oparty na Chromium.</p>
        </li>
      </ul>
    </div>
    <!-- <h1 style="margin-bottom: 10px;">Editors’Choice</h1> -->
    <img src="<?= $pResUrl; ?>static/img/awards.png" alt="" style="margin-top: 30px;">
  </div>
  <section class="clearfix" id="sect">
    <div class="sec">
      <div class="sec-sale">
        <img src="<?= $pResUrl; ?>static/img/75.png" alt="" id="sale"> </div>
      <div class="sec-buy">
        <p>64<span>,90 zł </span> <i>509,60 zł</i></p>
        <a href="http://www.iobit.com/buy.php?product=pl-iu103pcsdpfisu64&ref=pl_iu103pcsdpfisu64purchase2011<?= $refStr; ?>&refs=pl_purchase_iU" target="_blank" id="hrf">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iuxmas2011-pl')">KUP TERAZ</button>
        </a>
        <h2 id="hidn" style="text-align: left; padding-left: 17%;">
          <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
          Tylko
          <i id="timeout" style="font-size: 14px;color:#292B2F;font-weight: bold;">00:11:24:326</i>
        </h2>
      </div>
    </div>
  </section>
  <footer>
    <ul>
      <li>
        <img src="<?= $pResUrl; ?>static/img/size72.png" alt="">
        <h3>Gwarancja zwrotu pieniędzy</h3>
        <p>Gwarantujemy zwrot pieniędzy <br>
          w ciągu 60 dni.</p>
      </li>
      <li style="margin-top: 20px;">
        <img src="<?= $pResUrl; ?>static/img/secure.png" alt="">
        <h3 style="margin-top: 45px;">100% Bezpieczna płatność</h3>
        <p>IObit oferuje bezpieczne dla <br>
          transakcji metody płatności.</p>
      </li>
      <li style="margin-top: 20px;">
        <img src="<?= $pResUrl; ?>static/img/cart.png" alt="">
        <h3 style="margin-top: 45px;">Szybka aktywacja</h3>
        <p>Po dokonaniu zakupu otrzymasz kod <br> licencji na podany adres mailowy w kilka <br> minut.</p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>static/img/erji.png" alt="">
        <h3 style="margin-top: 33px;">Pomoc techniczna</h3>
        <p>Nasze bezpłatne wsparcie <br>
          techniczne jest dostępne 24/7.</p>
      </li>
    </ul>
  </footer>
  <div class="laster">
    <h5>
      Uwaga: <br>
      Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.<br>
      Dane mogą się różnić w zależności od systemu lub komputera.
    </h5>
    <h6>Copyright ©2005 - 2020 IObit. Wszelkie prawa zastrzeżone</h6>
  </div>
</body>
<script>
  // soldOut()
  $(".feature .message ul li").hover(function() {
    var index = $(this).index();
    $(".feature .message>span").stop().animate({
      "marginTop": index * 104
    }, 300);
    $(".feature .list ").stop().animate({
      "marginLeft": -(index + 1) * 560
    }, 300);
  });
  //tab栏的切换显示与隐藏
  $(".con").eq(0).show();
  $('.btn li .hidn').eq(0).show()

  $(".btn li ").hover(function() {
    var num = $(".btn li ").index(this);
    $('.btn li').removeClass('active')
    $('.btn li').eq(num).addClass('active')
    $(".con").hide().animate({
      opacity: '0'
    }, 100);
    $(".con").eq(num).show().animate({
      opacity: '1'
    }, 100);
  })

  var countdown = function(countdown) {
    getCycleCountdown();
    $(countdown).html(h + ':' + i + ':' + s + ':' + mi);
    if (d != 0 || h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 100);
    else soldOut();
  };

  function getCycleCountdown() {
    var date = new Date();
    if (MApp(2.2).cookie.get('xmasnl2020')) {
      dt = MApp(2.2).cookie.get('xmasnl2020');

    } else {
      dt = date.setMinutes(date.getMinutes() + 12);
      MApp(2.2).cookie.set('xmasnl2020', dt);
    }

    var datetime = getCountdown(dt);
    if (datetime == 0) {
      d = h = i = s = mi = "00";
      soldOut();
    } else {
      d = MApp(2.2).packages.zeroize(datetime[0], 2);
      h = MApp(2.2).packages.zeroize(datetime[1], 2);
      i = MApp(2.2).packages.zeroize(datetime[2], 2);
      s = MApp(2.2).packages.zeroize(datetime[3], 2);
      mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
    }
  }

  function getCountdown(t) {
    var e = new Date,
      i = Math.floor(e.getTime() / 1000),
      r = t / 1000,
      n = r - i;
    if (n > 0) {
      var s = Math.floor(n / 86400),
        a = Math.floor(n / 3600 % 24),
        o = Math.floor(n / 60 % 60),
        u = Math.floor(n % 60),
        h = 999 - e.getMilliseconds();
      return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
        Array(s, a, o, u, h)
    }
    return 0
  }

  function soldOut() {
    $('#post').addClass('post')
    $('.one').addClass('topleft')
    $('.art').css('display', 'none')
    $('.nothing').css('display', 'block')
    $('#arti').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/ker.png')"
    })
    $('#sect').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/overbanner.png')"
    })
    $('#sale').attr('src', '<?= $pResUrl; ?>static/img/IU.png')
    $('#hrf').attr('href', 'http://www.iobit.com/buy.php?product=pl-iu103pc64&ref=pl_iu103pc64purchase2011<?= $refStr; ?>&refs=pl_purchase_iu ')
  }
  (function() {
    countdown(("#timeout"));
    countdown(("#hidn i"));
    countdown((".art .num3 i"));
  }());
</script>

</html>