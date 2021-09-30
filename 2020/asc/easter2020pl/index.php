<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
    'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
    'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
    'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
    'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
    'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
    'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
    'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
    'invalidcode','asc_install','asc_p6','asc_p7','officialfree','officialpro',
    'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
    'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','crcur',
    'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
    'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3',
    'asc_promote13','asc_promote14','asc_promote15','asc_promote16','asc_promote17','asc_promote18')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
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
include $pRootUrl.'include/common.inc.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Zgarnij do 80% rabatu od zajączka na Advanced SystemCare PRO - IObit!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://iobit.com/pl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>ZGARNIJ DO 80% RABATU OD ZAJĄCZKA!</h1>
    <!-- countdown -->
    <h2>
      Oferta ograniczona czasowo, zostało
      <span class="countdown">
        <i></i>
        <strong>00</strong> godz.
        <strong>19</strong> min
        <strong>59</strong> sek.
        <strong>66</strong> ms
      </span>
    </h2>
    <!-- content -->
    <div class="content">

      <!-- 1pc -->
      <div class="offer small left pc1 init">
        <dl>
          <dt><p>40% ZNIŻKI</p></dt>
          <dd>
            <!-- box -->
            <span class="box">Advanced SystemCare PRO</span>
            <!-- price -->
            <p class="price"><big>69</big>,90zł <del>119,90zł</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-asc131pc69&ref=pl_asc131pc69purchase2003<?php echo $refStr;?>&refs=pl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asceaster2003-pl');">
              Aktywuj teraz
            </a>
          </dd>
        </dl>
      </div>

      <!-- 3pc bundle -->
      <div class="offer large middle bundle init">
        <dl>
          <dt><p>80% ZNIŻKI</p></dt>
          <dd>
            <!-- box -->
            <span class="box">Advanced SystemCare PRO</span>
            <!-- price -->
            <p class="price"><big>74</big>,90zł <del>469,70zł</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2003<?php echo $refStr;?>&refs=pl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asceaster2003-pl');">
              Aktywuj teraz
            </a>
          </dd>
        </dl>
      </div>

      <!-- 3pc -->
      <div class="offer small right pc3 init">
        <dl>
          <dt><p>60% ZNIŻKI</p></dt>
          <dd>
            <!-- box -->
            <span class="box">Advanced SystemCare PRO</span>
            <!-- price -->
            <p class="price"><big>74</big>,90zł <del>199,90zł</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase2003<?php echo $refStr;?>&refs=pl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asceaster2003-pl');">
              Aktywuj teraz
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payments -->
<div class="payments ">
  <div class="wrapper">
    <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
  </div>
</div>
<!-- end payments -->

<!-- benefits -->
<div class="benefits">
  <div class="wrapper">
    <h2><span>Wykorzystaj w pełni możliwości swojego komputera!</span></h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-00.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt="">
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li></li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt="">
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt="">
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt="">
          </div>
        </li>
        <li class="fun5">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-05-zoom.png')?>" alt="">
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
        <dt><i class="benefits04"></i></dt>
        <dd>
          <h3>100% OCHRONY</h3>
          <p>Chroni Twoją prywatność i dane przed niepożądanym dostępem, dwukrotnie lepiej* niż wersja darmowa.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits02"></i></dt>
        <dd>
          <h3>200%* SZYBSZY SYSTEM</h3>
          <p>Czyści niepotrzebne pliki i optymalizuje procesor i pamięć RAM w celu uzyskania szybszego systemu. Sprawia, że Twój system jest do 200% szybszy niż przy użyciu darmowej wersji.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits03"></i></dt>
        <dd>
          <h3>300%* SZYBSZY INTERNET</h3>
          <p>Pobieranie, granie online, strony internetowe i filmy z YouTube są do 300% szybsze niż w wersji darmowej. </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits01"></i></dt>
        <dd>
          <h3>WIĘCEJ MIEJSCA NA DYSKU</h3>
          <p>Całkowicie usuwa niepotrzebne pliki, nieprawidłowe skróty, elementy rejestru i niedokończone pliki do pobrania.</p>
        </dd>
      </dl>
      <a href="javascript: void(0);" onclick="goTarget($('.compare'))" class="textlink">Więcej informacji></a>
    </div>
  </div>
</div>
<!-- end benefits -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- content -->
    <div class="content">
      <div class="container clearfix">
        <!-- before -->
        <div class="before clearfix">
          <!-- h2 -->
          <h2><span>Odbierz wielkanocne prezenty!</span></h2>
          <!-- pf -->
          <dl class="pf clearfix">
            <dt></dt>
            <dd>
              <strong>Protected Folder</strong> Chroń swoje pliki osobiste i <br>
              trzymaj je z dala od złośliwych ataków!
            </dd>
          </dl>
          <!-- iu -->
          <dl class="iu clearfix">
            <dt></dt>
            <dd>
              <strong>IObit Uninstaller PRO</strong> Oferuje najlepszą <br>
              defragmentację dysku i maksymalnie <br>
              przyspiesza jego prędkość!
            </dd>
          </dl>
          <!-- buybtn -->
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2003<?php echo $refStr;?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asceaster2003-pl');">
            Aktywuj teraz
          </a>
          <!-- countdown -->
          <h4>
            <span class="countdown">
            <i></i>
            <strong>00</strong> godz.
            <strong>19</strong> min
            <strong>59</strong> sek.
            <strong>66</strong> ms
            </span>
          </h4>
        </div>
        <!-- after -->
        <div class="after">
          <h3>Skorzystaj jeszcze z <b>60%</b> zniżki!</h3>
          <dl class="asc clearfix">
            <dt>Advanced SystemCare PRO></dt>
            <dd>
              <!-- price -->
              <p class="price"><big>74</big>,90zł &nbsp; <del>199,90zł</del></p>
              <!-- buybtn -->
              <a class="buybtn"
                 href="http://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase2003<?php echo $refStr;?>&refs=pl_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asceaster2003-pl');">
                Aktywuj teraz
              </a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
          <dd>
            <h2>Recenzje mediów</h2>
            <p>„Nie ma nic gorszego niż komputer, który jest tak zapchany, że jego użytkowanie oraz granie stają się niemożliwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprzątanie niepotrzebnych plików, złośliwego oprogramowania i nieprawidłowych wpisów w rejestrze, ale również dając Twojemu komputerowi impuls do zoptymalizowania jego działania”.</p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></dt>
          <dd>
            <h2>Recenzja użytkownika</h2>
            <p>„Używam Advanced SystemCare Pro od dłuższego czasu, a najnowsza wersja 13 jest nawet lepsza niż wersja 12. ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych funkcji, których możesz użyć, aby utrzymać komputer w dobrym stanie. Gorąco polecam wszystkim najnowszy Advanced SystemCare 13”.</p>
            <cite>Tony Fisher</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></dt>
          <dd>
            <h2>Recenzja użytkownika</h2>
            <p>„Nigdy nie znalazłem lepszego programu do konserwacji i bezpieczeństwa komputera niż Advanced SystemCare. Odkąd kupiłem ASC, nigdy nie miałem problemów z wirusami, phishingiem, czarnymi ekranami lub innymi rodzajami błędów. To były najlepiej zainwestowane pieniądze, jakie kiedykolwiek wydałem na komputer. Dziękuję ASC za to, że korzystanie z komputera jest dużo przyjemniejsze”.</p>
            <cite>Danny R. Sheets</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></dt>
          <dd>
            <h2>Recenzja użytkownika</h2>
            <p>„Nowy ASC 13 to obowiązkowa pozycja dla wszystkich użytkowników komputerów. Czysty i intuicyjny interfejs jest łatwy w obsłudze zarówno dla początkującego, jak i zaawansowanego użytkownika. Wiele potężnych narzędzi w zestawie, aby utrzymać najwyższą wydajność komputera. Wyrazy uznania dla IObit za tak wspaniały zestaw narzędzi w jednym miejscu”.</p>
            <cite>Daniel Sanders</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></dt>
          <dd>
            <h2>Recenzja użytkownika</h2>
            <p>„Uwielbiam używać Advanced SystemCare 13 Beta. Jest bardzo szybki. Usuwa ślady prywatności, niepotrzebne pliki i fragmenty rejestru. Szczególnie podoba mi się wyskakujące okienko z pozwoleniem na dostęp do obszarów wrażliwych. Gdy aplikacja po raz pierwszy próbuje uzyskać dostęp do poufnych plików, otwiera się okno umożliwiające dostęp lub odmowę. Po przyznaniu uprawnień dla aplikacji wyskakujące okienko nie będzie już dla niej wyświetlane. Wiem, że moje wrażliwe pliki będą bezpieczne”.</p>
            <cite>Richard Preston</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- compare -->
<div class="compare wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Dlaczego Advanced SystemCare PRO?</th>
      <th class="itemb">
        <div class="box">
          Twoja aktualna wersja
        </div>
      </th>
      <td class="space"></td>
      <th class="itema">
        <div class="box">
          Wersja PRO
        </div>
        <span class="shadow"></span>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></td>
      <td class="virtue">Podstawowe czyszczenie, naprawa i optymalizacja systemu </td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></td>
      <td class="virtue">Do 300% szybszy Internet dzięki funkcji Internet Booster </td>
      <td class="itemb"><i class="all-icons close">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></td>
      <td class="virtue">Do 200% szybszy czas uruchamiania systemu</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></td>
      <td class="virtue">Dokładne czyszczenie rejestru systemu Windows zapobiega awariom komputera</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></td>
      <td class="virtue">Szybszy system dzięki pełnej optymalizacji dysku twardego</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons06.png" alt=""></td>
      <td class="virtue">Chroni dane osobowe za pomocą Osłony Prywatności</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons07.png" alt=""></td>
      <td class="virtue">Ukrywa cyfrowy odcisk palca, aby dbać o Twoją prywatność online</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons08.png" alt=""></td>
      <td class="virtue">Niweluje luki bezpieczeństwa w czasie rzeczywistym</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons09.png" alt=""></td>
      <td class="virtue">Wygoda użytkowania dzięki automatycznym aktualizacjom i automatycznemu czyszczeniu pamięci RAM</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons10.png" alt=""></td>
      <td class="virtue">Bezpłatne wsparcie techniczne 24/7</td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- bottom buy -->
<div class="bottombuy">
  <div class="wrapper">
    <h2>Zgarnij zniżkę i odpicuj swój komputer</h2>
    <dl class="clearfix">
      <dt>Advanced SystemCare PRO</dt>
      <dd>
        <!-- price -->
        <p class="price">74,90zł <del>469,70zł</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2003<?php echo $refStr;?>&refs=pl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asceaster2003-pl');">
          Aktywuj teraz
        </a>
        <!-- countdown -->
        <h4>
            <span class="countdown">
            <i></i>
            <strong>00</strong> godz.
            <strong>19</strong> min
            <strong>59</strong> sek.
            <strong>66</strong> ms
            </span>
        </h4>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottom buy -->

<!-- service -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt>Gwarancja satysfakcji</dt>
      <dd><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dd>
    </dl>
    <dl>
      <dt>Całkowicie bezpieczna płatność</dt>
      <dd><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""></dd>
    </dl>
    <dl class="last">
      <dt>Bezpłatne wsparcie techniczne 24/7</dt>
      <dd><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></dd>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Uwaga:</dt>
    <dd>
      * Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.
    </dd>
    <dd>
      * Dane mogą się różnić w zależności od różnych systemów lub komputerów
    </dd>
  </dl>
  <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</div>
</div>
<!-- end footer -->

<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>