<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
    $date = $_GET['d'];
    $cName = 'ascupl' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum > 5) {
            $packsNum--;
            setcookie($cName, $packsNum);
            if (rand(0, 100) % 2 == 0) {
                $packsNum = $packsNum + 1;
            }
        } else {
            $packsNum = 5;
        }
    } else {
        $packsNum = 50;
        setcookie($cName, $packsNum);
    }
    echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum));
    exit();
}
$refStr='';
//if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
//  'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
//  $refStr.='-'.$_GET['st'];
//}
if($_GET['ref']=='nc'){
  $refStr.='-'.$_GET['ref'];
}
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Nie przegap wyjątkowej promocji na Advanced SystemCare Ultimate!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      NIE PRZEGAP WYJĄTKOWEJ OFERTY!
    </h1>
    <div class="left-box">
      <h2><strong>80%</strong> <cite>zniżki</cite> <span>Nie zwlekaj i wykorzystaj</span></h2>
      <img src="<?php echo $pResUrl; ?>images/ascu-box.png" alt="">
      <img src="<?php echo $pResUrl; ?>images/raduem-box.png" alt="" class="raduem-box">
    </div>
    <div class="right-box">
      <h3> Pozostało tylko  <strong class="raduem"></strong> <span class="surplus"><b class="one"><span>0</span></b><b class="two"><span>0</span></b></span>  pakietów </h3>
      <dl>
        <dt><strong>Advanced SystemCare Ultimate</strong> <span>109,90 zł</span> <del>229,90 zł</del></dt>
        <dd><strong>Protected Folder</strong> <del>149,90 zł</del></dd>
        <dd><strong>Smart Defrag 6 PRO</strong> <del>119,90 zł</del></dd>
        <dd><strong>IObit Uninstaller 9 PRO</strong> <del>119,90 zł</del></dd>
        <dd class="last"><span>Prezenty o wartości </span> <b>389,70 zł</b></dd>
      </dl>
    </div>
    <dl class="price">
      <dt> <del>619,60 zł</del> <strong>109,90 zł</strong></dt>
      <dd>
        <a href="http://www.iobit.com/buy.php?product=pl-au133pciusdpf109&ref=pl_au133pcsdiupf109purchase1912<?php echo $refStr;?>&refs=pl_purchase_au" 
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascuaprsale2020-pl');" class="buybtn">Kup teraz</a>
      </dd>
      <dd>Kupiło już ponad <b id="bynum">507 725</b> osób</dd>
    </dl>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- benfits start -->
<div class="intro wrapper">
    <h2>Ciesz się pełną ochroną dzięki Advanced SystemCare Ultimate 13!</h2>
    <div class="panel clearfix">
      <div class="left fl">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/list01.png" alt=""></dt>
          <dd>
            <h4>Bezpieczne dane osobowe</h4>
            <p>
              Nowa ochrona prywatności i odcisków palców chroni poufne dane przed oprogramowaniem szantażującym, witrynami wyłudzającymi informacje i spamem.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/list03.png" alt=""></dt>
          <dd>
            <h4>Skuteczna ochrona przed wirusami i złośliwym oprogramowaniem</h4>
            <p>
              Advanced SystemCare Ultimate 13 PRO zapobiega i eliminuje wirusy i złośliwe oprogramowanie za pomocą silnika Bitdefender, który blokuje ataki ransomware i przechwytuje intruzów.
            </p>
          </dd>

        </dl>
      </div>
      <div class="right fr">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/list02.png" alt=""></dt>
          <dd>
            <h4>Zintegrowana ochrona Internetu</h4>
            <p>
              Blokuj reklamy, zapobiegaj wydobywaniu kryptowalut w przeglądarce i natychmiast <br> informuj o zmianie strony głównej, aby zapewnić bezpieczne przeglądanie Internetu.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/list04.png" alt=""></dt>
          <dd>
            <h4>Czystszy i szybszy komputer</h4>
            <p>
              Usuń niepotrzebne pliki, aby zwolnić miejsce na dysku, zarządzaj elementami startowymi, aby przyspieszyć system, monitoruj komputer w czasie rzeczywistym, aby skrócić czas reakcji.
            </p>
          </dd>
        </dl>
      </div>
      <img class="screen" src="<?php echo $pResUrl; ?>images/ascu-screen.png" alt="Advanced SystemCare Ultimate PRO">
    </div>
  </div>
<!-- benfits end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Zwiększ moc komputera dzięki darmowym prezentom!</h2>
    <!-- SD -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/sd-box.png" alt=""></dt>
      <dd>
        <p>
         Uzyskaj maksymalną wydajność dysku twardego!
        </p>
        <p><b>0 zł</b> <del> 119,90 zł</del></p>
      </dd>
    </dl>
    <!-- PF -->
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/iu-box.png" alt=""></dt>
      <dd>
        <p>
         Potężny deinstalator pomaga całkowicie i łatwo odinstalować programy.
        </p>
        <p><b>0 zł</b> <del> 119,90 zł</del></p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/pf-box.png" alt=""></dt>
      <dd>
        <p>
        Nie martw się o kradzież danych lub wyciek  prywatności!
        </p>
        <p><b>0 zł</b> <del> 149,90 zł</del></p>
      </dd>
    </dl>
    <div class="message">
      <div class="left-message">
        <img src="<?php echo $pResUrl; ?>images/gift-ascu-box.png" alt="" class="img-box">
        <div class="title">
          <h3>Advanced SystemCare Ultimate</h3>
          <p>3 komputery / 1 rok <strong>109,90 zł </strong> <del>229,90 zł</del></p>
        </div>
        <ul>
          <li><i></i> <span>Smart Defrag 6 PRO </span> <b>0 zł</b> <del>119,90 zł</del></li>
          <li><i></i> <span>IObit Uninstaller 9 PRO </span> <b>0 zł</b> <del>119,90 zł</del></li>
          <li><i></i> <span>Protected Folder </span> <b>0 zł</b> <del>149,90 zł</del></li>
        </ul>
      </div>
      <dl class="price">
        <dt> <del>619,60 zł</del> <strong> 109,90 zł </strong></dt>
        <dd>
          <a href="http://www.iobit.com/buy.php?product=pl-au133pciusdpf109&ref=pl_au133pcsdiupf109purchase1912<?php echo $refStr;?>&refs=pl_purchase_au" 
             onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascuaprsale2020-pl');" class="buybtn">Kup teraz</a>
        </dd>
        <dd>Pospiesz się, zostało tylko <strong class="raduem"></strong> <b class="packsNum">50</b> pakietów! </dd>
      </dl>
    </div>


  </div>
</div>

<!-- gift-box end -->
<div class="reviews wrapper clearfix">
  <h2>Wyróżnieni na całym świecie</h2>
  <p>Użytkownicy z całego świata dzielą się swoimi doświadczeniami</p>
  <div class="content">
    <div class="media">
      <img src="<?php echo $pResUrl; ?>images/media.png" alt="">
    </div>
    <div class="reviews-box">
      <ul class="message">
        <li>„Zawsze miałem jakieś problemy z komputerem. W pewnym momencie zainstalowałem po raz pierwszy Advanced SystemCare i moje problemy zniknęły. Teraz, z dodatkowym antywirusem, niepotrzebne są już żadne inne programy. Advanced SystemCare Ultimate jest niezastąpiony. To wielki zwycięzca! Dzięki niemu mój komputer jest zawsze uaktualniony i działa bez zarzutu. W przeciwieństwie do innych produktów, nigdy nie miałem z nim żadnych problemów”.</li>
        <li  class="active">„Advanced SystemCare Ultimate to potężne narzędzie do optymalizacji systemu  oraz antywirus w jednym. Oprócz ochrony komputera przed złośliwym oprogramowaniem, wirusami i podobnymi zagrożeniami, może również zwiększyć jego wydajność, stosując różne poprawki rejestru i skrótów, usuwając niepotrzebne pliki, skanując woluminy dysku lokalnego dla luk w systemie itp”.</li>
        <li>„Od wielu lat korzystam z różnych wersji Advanced SystemCare. Kiedy odkryłem jakie funkcje proponuje Advanced SystemCare Ultimate, wiedziałem, że muszę go mieć. Nie zawiodłem się! Jest to jeden z najłatwiejszych, a zarazem najwydajniejszych programów, który utrzymuje trzy moje komputery w dobrym stanie”.</li>
        <li> „W poprzedniej wersji Advanced SystemCare Ultimate, nie miałem prawie żadnych problemów z systemem, złośliwymi programami itp. Nowa aktualizacja i większa ilość funkcji sprawiają, że mój laptop działa 5 razy szybciej niż wcześniej. Podoba mi się też nowa skórka dla interfejsu użytkownika. Następnym razem, gdy będę naprawiać jakiś komputer, z pewnością polecę zainstalowanie Advanced SystemCare Ultimate jako optymalizator systemowy i antywirus w jednym”.</li>
      </ul>
      <ul class="img-box">
        <li class="first">
          <div><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett"></div>
          <p>Rod Garnett</p>
        </li>
        <li class="active">
          <div><img src="<?php echo $pResUrl; ?>images/addictivetips.png" alt="addictivetips"></div>
          <p>addictivetips </p>
        </li>
        <li>
          <div><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="Russell Peck"></div>
          <p>Russell Peck </p>
        </li>
        <li>
          <div><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"></div>
          <p>Dareen Lim</p>
        </li>

      </ul>
    </div>
  </div>
</div>

<!-- comparison-table start -->
<div class="comparison wrapper">
  <h4>Dlaczego warto wybrać Advanced SystemCare Ultimate 13?</h4>
  <h5>Lepsza ochrona i brak opóźnień w działaniu. Zobacz porównanie poniżej.</h5>
  <div class="ctable">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text"></th>
          <th class="blue">
            <p><span>Advanced SystemCare</span> Ultimate</p>
          </th>
          <th>AVG<span>Anti-virus</span></th>
          <th>Norton <span>SecurityDeluxe</span></th>
          <th>Avast!  Pro<span>Antivirus</span></th>
          <th>Microsoft<span>Security Essentials</span></th>
          <th>McAfee® AntiVirus</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="title first">Wskaźnik wykrywalności</td>
          <td class="gray">Bardzo wysoki</td>
          <td>Normalny</td>
          <td>Wysoki</td>
          <td>Normalny</td>
          <td>Wysoki</td>
          <td>Wysoki</td>
        </tr>
        <tr>
          <td class="title">Opóźnienie wydajności</td>
          <td class="gray">Nie</td>
          <td>Tak</td>
          <td>Tak</td>
          <td>Tak</td>
          <td>Tak</td>
          <td>Tak</td>
        </tr>
        <tr>
          <td class="title">Doskonałe czyszczenie i optymalizacja komputera</td>
          <td class="gray"><i class="tb-icons red">√</i></td>
          <td><i class="tb-icons">×</i></td>
          <td><i class="tb-icons">×</i></td>
          <td><i class="tb-icons">×</i></td>
          <td><i class="tb-icons">×</i></td>
          <td><i class="tb-icons">×</i></td>
        </tr>
        <tr>
          <td class="title">Ponad 20 narzędzi zwiększających wydajność komputera</td>
          <td class="gray"><i class="tb-icons red">√</i></td>
          <td><i class="tb-icons">×</i></td>
          <td><i class="tb-icons">×</i></td>
          <td><i class="tb-icons">×</i></td>
          <td><i class="tb-icons">×</i></td>
          <td><i class="tb-icons">×</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <dl class="comlist">
    <dt>
      <i class="tb-icons">√</i>
       Niezrównana szybkość wykrywania i maksymalna ochrona
    </dt>
    <dd>
      Jedno kliknięcie, aby usunąć ukryte wirusy, trojany, robaki, oprogramowanie szpiegujące, adware i różne złośliwe oprogramowanie. Advanced SystemCare Ultimate 13 zapewnia również proaktywną ochronę, zawsze online, automatyczną i przed wszystkimi rodzajami zagrożeń bezpieczeństwa w Internecie, z szybką aktualizacją bazy wirusów.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="tb-icons">√</i>
      Ciesz się niezawodnym bezpieczeństwem bez spowolnienia systemu
    </dt>
    <dd>
      Twój system będzie działać z maksymalną prędkością i bez opóźnień wydajności dzięki naszej przodującej w branży technologii bezpieczeństwa w Internecie.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="tb-icons">√</i>
      Bezpieczne przeglądanie, wyszukiwanie, pobieranie i udostępnianie
    </dt>
    <dd>
      Zachowanie procesowe proaktywnej technologii kontroli wirusów w czasie rzeczywistym monitoruje, skanuje pliki współdzielone z pocztą e-mail i blokuje możliwe zagrożenia. Najwyższa częstotliwość wykrywania zapewnia bezpieczniejsze środowisko podczas korzystania z komputera.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="tb-icons">√</i>
      Uzyskaj wysoce zoptymalizowaną wydajność swojego komputera
    </dt>
    <dd>
      Dzięki optymalizacji w czasie rzeczywistym i funkcji Turbo Boost zasoby systemowe są inteligentnie zarządzane, aby zapewnić superszybki komputer.
    </dd>
  </dl>
</div>
<!-- comparison-table end -->
<div class="wrapper">
    <div class="betwwen-buy">
      <div class="content">
        <img src="<?php echo $pResUrl; ?>images/between-buy-box.png" alt="" class="img-box">
        <dl>
          <dt><strong>109,90 zł </strong> <del>619,60 zł</del></dt>
          <dd><a href="http://www.iobit.com/buy.php?product=pl-au133pciusdpf109&ref=pl_au133pcsdiupf109purchase1912<?php echo $refStr;?>&refs=pl_purchase_au" 
                 onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascuaprsale2020-pl');" class="buybtn red">KUP TERAZ <span>–80%</span> </a></dd>
          <dd class="last">Oferta ograniczona, pospiesz się! </dd>
        </dl>
      </div>
    </div>
  </div>

<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Gwarancja satysfakcji</h3></dd>
      <dd>60-dniowagwarancjazwrotu pieniędzy</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><h3>Całkowicie bezpieczna płatność</h3></dd>
      <dd>Twoja płatność jest w 100% bezpieczna</dd>

    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd><h3>Obsługa klienta  </h3></dd>
      <dd>Bezpłatne wsparcie techniczne 24/7</dd>
    </dl>
     <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/visa.png" alt=""></dt>
      <dd><h3>Wygodna płatność</h3></dd>
      <dd>Akceptujemy 8 metod płatności</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Uwaga:</dt>
    <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
    <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Wszelkie prawa zastrzeżone</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>