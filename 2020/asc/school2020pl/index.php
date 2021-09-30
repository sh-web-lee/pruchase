<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'plascschool0621_p' . $date;
  $c_name_t='plascschool0621_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(98,165);


// $time = time();
// if(isset($_COOKIE['toreturn'])&&$time-$_COOKIE['toreturn']>86400){
//     header("Location:return.php");
//     exit;
// }else{
//   if(!isset($_COOKIE['toreturn'])) setcookie('toreturn',$time,$time+2592000);
// }

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
  <title> Wielka promocja na najnowszy Advanced SystemCare PRO! - IObit  </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
      <div class="title">
        <h2>Szybszy, wydajniejszy i bezpieczniejszy komputer</h2>
        <h1>Specjalna promocja na nowy rok szkolny!</h1>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt="">
          <b class="discount">-40<small>%</small></b>
          <div class="price">
            <p><strong>69,90 zł</strong> <del> 110,90 zł</del></p>
            <p><b>5,82 zł </b> / 1 miesiąc</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-asc131pc69&ref=pl_asc131pc69purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc    "
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">1 komputer / 1 rok</p>
          </div>
        </div>
        <div class="offer bigbox">
          <div class="superbox">
            <h3>SUPER PROMOCJA</h3>
            <p>
              Zostało tylko <span class="reduce">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> pakietów</p>
          </div>
          <img src="<?php echo getStaticUrl('images/asc-bundle-box.png')?>" alt="">
          <b class="discount">-80<small>%</small></b>
          <div class="price">
            <p><strong>74,90 zł</strong> <del>469,70 zł</del></p>
            <p><b>6,24 zł</b> / 1 miesiąc</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
              KUP TERAZ
            </a>
            <p class="month"><b class="red">3  komputery </b> / 1 rok</p>
          </div>
        </div>
        <div class="offer right">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="">
          <b class="discount">-60<small>%</small></b>
          <div class="price">
            <p><strong>74,90 zł</strong> <del>199,90 zł</del></p>
            <p><b>6,24 zł</b> / 1 miesiąc</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc  "
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">3 komputery / 1 rok</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <div class="pay-miliony">
    <!-- payment start -->
    <div class="payment wrapper clearfix">
      <dl>
        <dt>Akceptowane płatności</dt>
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
      </dl>
      <dl>
        <dt>Gwarancja zwrotu pieniędzy</dt>
        <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
      </dl>
      <dl class="last">
        <dt>Bezpieczna płatność</dt>
        <dd><img src="<?php echo getStaticUrl('images/gooddy.png')?>" alt=""/></dd>
      </dl>
    </div>
    <!-- payment end -->

    <!-- miliony start -->
    <div class="miliony">
      <h2>Gwarantujemy Ci większy komfort pracy i grania!</h2>
      <p>W przeciwnym razie natychmiast zwrócimy Ci pieniądze!*</p>
      <div class="miliony-box clearfix">
        <dl>
          <dt><h4>200+</h4></dt>
          <dd>Popularny w ponad <b>200</b> krajach<br> na całym świecie</dd>
        </dl>
        <dl class="two">
          <dt><h4>1 000+</h4></dt>
          <dd>Ponad <b>1000</b> mediów doceniło<br> Advanced SystemCare</dd>
        </dl>
        <dl class="three">
          <dt><h4>210 000 000+</h4></dt>
          <dd>Wybrany i rekomendowany<br> przez ponad <b>210 milionów</b><br> użytkowników na całym świecie</dd>
        </dl>
        <dl class="four">
          <dt><h4>80%+</h4></dt>
          <dd>Ponad <b>80%</b> użytkowników<br> Advanced SystemCare aktywowało<br> wersję PRO</dd>
        </dl>
      </div>
    </div>
    <!-- miliony end -->
  </div>

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

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Czystszy, szybszy, bezpieczniejszy komputer<br> dzięki DARMOWYM PREZENTOM</h2>
      <div class="clearfix">
        <div class="gift-list">
          <img class="fl" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
          <ul class="fl">
            <li>Całkowicie odinstaluj programy</li>
            <li>Usuń złośliwe wtyczki</li>
            <li>Automatycznie aktualizuj programy</li>
          </ul>
        </div>
        <div class="gift-list pf">
          <img class="fl" src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/>
          <ul class="fl">
            <li>Zabezpiecz dane hasłem</li>
            <li>Chroń pliki przed atakami</li>
            <li>Chroń prywatność</li>
          </ul>
        </div>
      </div>
      <div class="price">
        <h3>Advanced SystemCare PRO + prezenty</h3>
        <p><strong>74,90 zł</strong> <del>469,70 zł</del></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
          KUP TERAZ
        </a>
        <p>Pospiesz się, zostało tylko<span class="reduce"><b>123</b><b class="reduceNum">123</b></span>pakietów </p>
      </div>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Zobacz co mówią użytkownicy i media</h2>
      <div class="reviewbox clearfix">
        <div class="reviewuser fl">
          <span class="one"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"/></span>
          <span class="three "><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"/></span>
          <span class="four"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"/></span>
          <span class="five"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"/></span>
          
        </div>
        <div class="reviewlist fr">
          <ul>

            <li>
              <h3>Cnet</h3>
              <p>„Nie ma nic gorszego niż komputer, który jest tak zapchany, że jego użytkowanie oraz granie stają się niemożliwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprzątanie niepotrzebnych plików, złośliwego oprogramowania i nieprawidłowych wpisów w rejestrze, ale również dając Twojemu komputerowi impuls do zoptymalizowania jego działania”.</p>
            </li>
            <li>
              <h3>Tony Fisher</h3>
              <p>„Używam Advanced SystemCare Pro od dłuższego czasu, a najnowsza wersja 13 jest nawet lepsza niż wersja 12. ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych funkcji, których możesz użyć, aby utrzymać komputer w dobrym stanie. Gorąco polecam wszystkim najnowszy Advanced SystemCare 13”.</p>
            </li>
            <li>
              <h3>Danny R. Sheets</h3>
              <p>
                „Nigdy nie znalazłem lepszego programu do konserwacji i bezpieczeństwa komputera niż Advanced SystemCare. Odkąd kupiłem ASC, nigdy nie miałem problemów z wirusami, phishingiem, czarnymi ekranami lub innymi rodzajami błędów. To były najlepiej zainwestowane pieniądze, jakie kiedykolwiek wydałem na komputer. Dziękuję ASC za to, że korzystanie z komputera jest dużo przyjemniejsze”.
              </p>
            </li>
            <li>
              <h3>Daniel Sanders</h3>
              <p>
                „Nowy ASC 13 to obowiązkowa pozycja dla wszystkich użytkowników komputerów. Czysty i intuicyjny interfejs jest łatwy w obsłudze zarówno dla początkującego, jak i zaawansowanego użytkownika. Wiele potężnych narzędzi w zestawie, aby utrzymać najwyższą wydajność komputera. Wyrazy uznania dla IObit za tak wspaniały zestaw narzędzi w jednym miejscu”.
              </p>
            </li>
            <li>
              <h3>Richard Preston</h3>
              <p>
                „Uwielbiam używać Advanced SystemCare 13 Beta. Jest bardzo szybki. Usuwa ślady prywatności, niepotrzebne pliki i fragmenty rejestru. Szczególnie podoba mi się wyskakujące okienko z pozwoleniem na dostęp do obszarów wrażliwych. Gdy aplikacja po raz pierwszy próbuje uzyskać dostęp do poufnych plików, otwiera się okno umożliwiające dostęp lub odmowę. Po przyznaniu uprawnień dla aplikacji wyskakujące okienko nie będzie już dla niej wyświetlane. Wiem, że moje wrażliwe pliki będą bezpieczne”.
              </p>
            </li>
          </ul>
        </div>
        <span class="prev" onclick="prevFun();"></span>
        <span class="next" onclick="nextFun();"></span>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <h2>Ciesz się funkcjami dostępnymi tylko w PRO</h2>
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">Porównanie produktów:</th>
          <th class="space"></th>
          <th class="itema">
            <div class="pro">
              <h3>Advanced SystemCare <br> PRO</h3>
            </div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="free">
              <h3>Advanced SystemCare <br> FREE</h3>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></td>
          <td class="virtue">Podstawowe czyszczenie i optymalizacja komputera</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
          <td class="virtue"> Czyszczenie i optymalizacja komputera w wersji PREMIUM </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
          <td class="virtue vtop">
              Ochrona komputera do wykrywania i usuwania najgłębszych infekcji
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
          <td class="virtue">
            Do 200% szybsze uruchamianie komputera
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
          <td class="vtop">
              Do 300% przyspieszenia Internetu dzięki Internet Booster
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
          <td class="virtue">Kompleksowa ochrona podczas surfowania z automatycznie usuwanymi danymi śledzenia</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
          <td class="virtue"> Ochrona danych osobowych</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
          <td class="virtue">Aktywne wykrywanie i blokowanie luk bezpieczeństwa w czasie rzeczywistym</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
         <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></td>
          <td class="virtue"> Bezpłatne wsparcie techniczne 24/7 na żądanie </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footerbuy start -->
  <div class="footerbuy">
    <div class="wrapper">
      <h2>Nie zwlekaj i usprawnij komputer już TERAZ!</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img class="on" src="<?php echo getStaticUrl('images/asc-bundle-box.png')?>" alt="" />
          <img class="db" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="" />
          <img class="dbone" src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt="" />
          <span class="discount on">-80<small>%</small></span>
        </div>
        <ul class="changelist fl">
          <li class="one on" data-num="1"><b>   Advanced SystemCare 1 rok / 3 PC + prezenty</b></li>
          <li class="two" data-num="2"><b>Advanced SystemCare 1 rok / 3 PC</b></li>
          <li class="three" data-num="0"><b>Advanced SystemCare 1 rok / 1 PC</b></li>
        </ul>
        <div class="price fr">
          <p><strong>74,90 zł</strong> <del>469,70 zł</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
            KUP TERAZ
          </a>
        </div>
      </div>
      <div class="footer">
        <dl class="note">
          <dt>Uwaga:</dt>
          <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
          <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów.</dd>
          <dd>* Jeśli będziesz niezadowolony, to możesz anulować zakup w ciągu 60 dni bez żadnych opłat. Pieniądze zostaną automatycznie zwrócone na Twoje konto.</dd>
        </dl>
        <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
      </div>
    </div>
  </div>
  <!-- footerbuy end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <h2>NIE PRZEGAP SUPER PROMOCJI</h2>
    <p class="f-gift">Zostało tylko<span class="reduce"><b>123</b><b class="reduceNum">123</b></span>pakietów!</p>
    <p><b class="userNum">00</b> osób przegląda stronę</p>
    <i class="close">X</i>
  </div>
  <!-- floatlayer end -->

  <script>var refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>