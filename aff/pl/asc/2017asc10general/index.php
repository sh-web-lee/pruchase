<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if (empty($_GET['ref'])) {
  $refStr = 'plaff_asc14_2017general';
  $refDownloadStr='plasc12g';
}else{
  $refStr=$refDownloadStr=$_GET['ref'];
}
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
if($_GET['ref']=='cb1712en'){
  $buyHref="https://www.cleverbridge.com/289/?scope=checkout&cart=184422&pricerule=enaff2999&coupon=CB50OFF&ref=".$refStr."&AFFILIATE=".$affStr;
}elseif($_GET['ref']=='fs1702en'){
  $buyHref="https://www.macboost.net/xhtml/iobit.html?product=advanced-systemcare-10-pro-1-year-subscription-3-pcs&coupon=ASC50OFF";
}elseif($_GET['ref']=='rw1702en'){
  $buyHref="https://safecart.com/iobit/ascpro/1year3pcs?coupon_code=66PQ";
}elseif($_GET['ref']=='fs269814'){
  $buyHref="https://macbooster.7eer.net/c/269814/378283/4385";
}elseif($_GET['ref']=='fs391813'){
  $buyHref="https://macbooster.7eer.net/c/391813/378283/4385";
}else{
  $buyHref="https://www.iobit.com/buy.php?product=plaff-asc143pc5993a&ref=".$refStr."&aff=".$affStr;
}

if(preg_match('/fspi([0-9]*)/',$_GET['ref'],$matches)){
  $buyHref='https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499';
  $pregNum=$matches[1];
  if(!empty($pregNum)){
    $buyHref='https://macbooster.7eer.net/c/'.$pregNum.'/556566/4385';
  }
}

if(!empty($_GET['ref'])){

    if(preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

        $buyHref = "https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499";

        if ($arr[1][0] != null) {

            $buyHref = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/556566/4385";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Ciesz się bezproblemowym szybkim komputerem z ASC PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <p>Najlepsze na świecie narzędzia do optymalizacji komputera</p>
      <h1>Advanced SystemCare PRO</h1>
      <h4>Spraw, aby Twój komputer był czystszy, szybszy i stabilniejszy za pomocą jednego kliknięcia</h4>
      <div class="btnbox">
        <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'plasc12g')">
          <p>Pobierz i zeskanuj za darmo</p>
          Dla Win10/8/7/Vista/XP
        </a>
        <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'plaffasc142017general')">
         Kup teraz i oszczędź <strong>50%</strong> 
        </a>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- mediareview start -->
    <dl class="mediareview wrapper clearfix">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/media_icon.png" alt="">
        <p>Wybór ponad 250 milionów użytkowników</p>
      </dt>
      <dd>
        <h3>Advanced SystemCare zaradzi wszystkim dolegliwościom komputera.</h3>
        <p>
          „Nie ma nic gorszego niż komputer, który jest tak zapchany, że utrudnia Ci pracę lub granie w gry. Advanced SystemCare ma na celu zaradzenie wszystkim dolegliwościom komputera, nie tylko usuwając niepotrzebne pliki, złośliwe oprogramowanie i nieprawidłowe wpisy rejestru, ale także dając komputerowi impuls, aby zoptymalizować działanie komputera. ”- Cnet
        </p>
      </dd>
    </dl>
    <!-- mediareview end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>Niezbędne narzędzia dla każdego użytkownika komputera</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro1.png')?>" alt=""></dt>
          <dd><h3>Szybszy computer</h3></dd>
          <dd>Zidentyfikuj i usuń problemy z wydajnością powodujące spowolnienie komputera</dd>
        </dl>
        <dl class="more">
          <dt><img src="<?php echo getStaticUrl('images/intro2.png')?>" alt=""></dt>
          <dd><h3>Bardziej stabilny system</h3></dd>
          <dd>Napraw błędy systemu Windows, aby przywrócić stabilność systemu i zmniejszyć awarie komputera</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro3.png')?>" alt=""></dt>
          <dd><h3>Bezpieczniejsze przeglądanie</h3></dd>
          <dd>Automatyczne czyszczenie danych przeglądania i ukrywanie cyfrowego odcisku palca, aby powstrzymać złośliwe śledzenie</dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Czysty, szybki i stabilny komputer to po prostu kliknięcie myszą</h2>
        <div class="btnbox">
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'plaffasc142017general')">
            Kup teraz i oszczędź <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- describe start -->
    <div class="wrapper">
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe1.png')?>" alt=""></div>
        <div class="fl txtbox" style="margin-top: 20px;">
          <h2>Dogłębne czyszczenie i optymalizacja komputera</h2>
          <p>
            Advanced SystemCare PRO dogłębnie usuwa niepotrzebne pliki, nieprawidłowe wpisy rejestru, niechciane i uparte programy, paski narzędzi i wtyczki reklamowe oraz optymalizuje uruchamianie, pamięć RAM, Internet, system i dyski, aby przywrócić czysty i szybki komputer.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe2.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Napraw wszystkie problemy z komputerem</h2>
          <p>
            Advanced SystemCare PRO identyfikuje i naprawia wszelkiego rodzaju problemy z systemem Windows, w tym błędy rejestru, błędy dysku, problemy z bezpieczeństwem systemu Windows, nieaktualne sterowniki, problemy z systemem itp., aby przywrócić stabilność systemu i zapobiec awariom komputera.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe3.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Monitoruj zasoby systemowe w czasie rzeczywistym</h2>
          <p>
            Advanced SystemCare PRO pomaga zarządzać użyciem pamięci RAM, procesora i dysku za pomocą jednego kliknięcia oraz automatycznie wykrywa i wyłącza nieaktywne procesy i programy, aby zwolnić pamięć i zwiększyć wydajność komputera.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe4.png')?>" alt=""></div>
        <div class="txtbox fr" style="margin-top: 10px; margin-bottom: 40px;">
          <h2>Proaktywnie chroń swoją prywatność w Internecie</h2>
          <p>
            Zintegrowany z zupełnie nową tarczą prywatności i cyfrową ochroną odcisków palców, Advanced SystemCare PRO może wykrywać i blokować tajny dostęp do twoich danych osobowych oraz ukrywać cyfrowy odcisk palca, aby wyczyścić ślad online, dla lepszej ochrony Twojego komputera i prywatności online. Zapobiega złośliwym modyfikacjom strony głównej, wyszukiwarki i ustawień DNS, usuwa zagrożenia internetowe w czasie rzeczywistym. 
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe5.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Usuń reklamy i blokuj złośliwe strony internetowe</h2>
          <p>
            Advanced SystemCare PRO usuwa irytujące reklamy w przeglądarkach Internet Explorer, Chrome i Firefox oraz blokuje złośliwe i niebezpieczne witryny podczas przeglądania, aby zapewnić lepsze wrażenia podczas surfowania.
          </p>
        </div>
      </div>
      <div class="describe last clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe6.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Automatyczne przechwytywanie intruza <span>(wymagana kamera)</span></h2>
          <p>
            Advanced SystemCare PRO pomaga przechwytywać intruzów uzyskujących dostęp do Twojego komputera bez pozwolenia lub próbujących ukraść Twoje dane osobowe i ważne pliki. Po nagraniu Twojej twarzy automatycznie przechwytuje obraz intruzów w tle.
          </p>
        </div>
      </div>
    </div>
    <!-- describe end -->

    <!-- tool start -->
    <div class="tool">
      <div class="wrapper clearfix">
        <h2>Więcej niesamowitych narzędzi</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon1.png" alt=""></dt>
          <dd><h4>Menedżer uruchamiania</h4></dd>
          <dd>Zarządzaj elementami startowymi, aby przyspieszyć uruchamianie komputera.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon2.png" alt=""></dt>
          <dd><h4>Inteligentna pamięć RAM</h4></dd>
          <dd>Zwolnij pamięć, aby zwiększyć wydajność komputera.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon3.png" alt=""></dt>
          <dd><h4>Internet Booster</h4></dd>
          <dd>Zoptymalizuj przeglądarki, aby przyspieszyć połączenie internetowe.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon4.png" alt=""></dt>
          <dd><h4>Naprawa Systemu</h4></dd>
          <dd>Zidentyfikuj i napraw problemy z systemem Windows.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon5.png" alt=""></dt>
          <dd><h4>Wyszukiwarka dużych plików</h4></dd>
          <dd>Znajdź i usuń duże pliki, aby uzyskać więcej miejsca.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon6.png" alt=""></dt>
          <dd><h4>Niszczarka plików</h4></dd>
          <dd>Trwale usuń niechciane pliki, których nie można odzyskać.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon7.png" alt=""></dt>
          <dd><h4>Czyść rejestr</h4></dd>
          <dd>Bezpiecznie czyść i naprawiaj problemy z rejestrem.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon8.png" alt=""></dt>
          <dd><h4>Czyść dysk</h4></dd>
          <dd>Wyczyść wszelkiego rodzaju niepotrzebne pliki, aby zwolnić miejsce na dysku.</dd>
        </dl>
      </div>
    </div>
    <!-- tool end -->
  
    <!-- usereview start -->
    <div id="user" class="usereview wrapper clearfix">
      <h2>Recenzja użytkownika</h2>
      <dl class="active">
        <dt><h4>„To nie tylko świetny produkt, ale obsługa klienta jest równie świetna”</h4></dt>
        <dd>
          „Advanced SystemCare od lat pracuje nad utrzymaniem mojego komputera w czystości i bez bugów, jeszcze mnie nie zawiódł. Niedawno skontaktowałem się z Advanced System Care i odpowiedzieli w ciągu jednego lub dwóch dni, pomagając we wszystkim, co chciałem wiedzieć. Ich wsparcie jest ogromne, ASC wygrywa zarówno pod względem produktu, jak i wsparcia”.
        </dd>
      </dl>
      <dl>
        <dt><h4>„Pozbywa się złośliwego i szpiegowskiego oprogramowania, które mój program antywirusowy przepuszcza”</h4></dt>
        <dd>
          „Kiedyś używaliśmy do tuzina różnych programów, aby nasze maszyny działały płynnie i były bezpieczne. Każdego tygodnia utrzymanie bezpieczeństwa i wydajności zajmowało wiele godzin. Teraz, dzięki Advanced System Care Pro, wszystko jest w jednym miejscu. Zajmuje nam to tylko kilka minut raz na jakiś czas, aby wykonać tę samą pracę z dużo większą pewnością”.
        </dd>
      </dl>
      <dl>
        <dt><h4>„Mój wybór to nieustannie Advanced SystemCare Pro”</h4></dt>
        <dd>
          „Jako informatyk, używam ASC PRO do rozwiązywania większości problemów komputerowych. Po zakończeniu skanowania zwykle sugeruję klientowi zakup pakietu Pro. Kto potrzebuje techników, gdy istnieje tak doskonałe narzędzie jak Advanced SystemCare PRO? To najlepszy produkt, jaki może kupić użytkownik. Dziękuję za ułatwienie mi pracy”.
        </dd>
      </dl>
      <dl>
        <dt><h4>„Mój system nigdy nie działał lepiej”</h4></dt>
        <dd>
          „Moim zdaniem ASC Pro firmy IObit jest najlepszą aplikacją do optymalizacji dostępną dla użytkowników systemu Windows, zapewniającą doskonałą wartość i funkcjonalność. IObit zapewnia fachowe wsparcie techniczne, które dodaje znaczną wartość do ich produktów i usług".
        </dd>
      </dl>
      <ul class="username">
        <li class="current">
          <img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
          <p>Bruce Ramsay</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett">
          <p>Bob Bassett</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
          <p>Charles R. Widick</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold">
          <p>Gordon Griswold</p>
        </li>
      </ul>
    </div>
    <!-- usereview end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <h2>Advanced SystemCare PRO</h2>
        <p>Zaufało nam ponad 250 milionów użytkowników na całym świecie</p>
        <div class="btnbox">
          <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'plasc12g')">
            <p>Pobierz i zeskanuj za darmo</p>
            Dla Win10/8/7/Vista/XP
          </a>
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'plaffasc142017general')">
            Kup teraz i oszczędź <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt>100% czystości</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
        <dl class="back">
          <dt>60-dniowa gwarancja zwrotu pieniędzy </dt>
          <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>Wsparcie 24/7</dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/call.png" alt="">
            <span>Bezpłatna pomoc techniczna 24/7 na żądanie</span>
          </dd>
        </dl>
      </div>
    </div>
    <!-- service end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</div>
  <!-- footer end -->

  <!-- backtop start -->
  <div id="backtop" class="backtop" onclick="goTarget($('.header'))"></div>
  <!-- backtop end -->

<script>    
  //userreview 
  $(".username li").mouseover(function(event) {
    var num = $(this).index();
    $(".username li").eq(num).addClass('current').siblings().removeClass('current');
    $("#user dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  //floatlayer
  $(window).on('scroll', function () {
    var scrollHeight = $(".header:last").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
      $('#backtop').addClass('on');
    }else {
      $('#backtop').removeClass('on');
    }
  });

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
</script>
</body>
</html>