<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-'.$ver[3];
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Zaoszczędź do 85% na Smart Defrag PRO - IObit! </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
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
    <div class="title">
      <h1>BŁYSKAWICZNA ŚWIĄTECZNA PROMOCJA
      </h1>
      <p> Nie przegap prezentu, którego dla Ciebie mamy </p>
    </div>
    <!-- message -->
    <div class="message clearfix">

      <!-- 1pc asc -->
      <div class="message-box small fl">
        <!-- off -->
        <div class="off">-40%</div>
        <!-- box -->
        <div class="box">Advanced SystemCare PRO</div>
        <!-- price -->
        <p class="price"><span><big>64</big> <sup>zł</sup> <sub>90</sub></span> <del>119,90 zł</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-sd1pc64&ref=pl_sd1pc64purchasexmas1911<?php echo $refStr;?>&refs=pl_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdxmas1912-pl');">
          <i class="all-icons"></i> KUP TERAZ
        </a>
      </div>

      <!-- 3pc asc -->
      <div class="message-box large fr">
        <!-- off -->
        <div class="off">-80%</div>
        <!-- box -->
        <div class="box">
          1 ROK / 3 KOMPUTERY
          <span>Prezenty warte 149,90 zł </span>
        </div>
        <!-- price -->
        <p class="price large"><span><big>69</big> <sup>zł</sup> <sub>90</sub></span> <del>479.70 zł</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="http://www.iobit.com/buy.php?product=pl-sd63pciupf69&ref=pl_sd3pciupf69purchasexmas1911<?php echo $refStr;?>&refs=pl_purchase_sd "
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdxmas1912-pl');">
          <i class="all-icons"></i> KUP TERAZ
        </a>
        <!-- countdown -->
        <p class="countdown">
          <i class="all-icons"></i>
          <strong>00</strong> G :
          <strong>00</strong> M :
          <strong>00</strong> S :
          <strong class="last">000</strong> MS*
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment wrapper">
  <img src="<?php echo getStaticUrl('images/payment.png')?>images/payment.png" alt="">
</div>
<!-- end payment -->

<!-- intro -->
<!-- intro -->
<div class="intro">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Dlaczego warto wybrać Smart Defrag 7 PRO</h2>
    <div class="title">
      <h2>Dlaczego warto wybrać Smart Defrag 7 PRO</h2>
    </div>
    <!-- left-message -->
    <div class="left-message">
      <!-- message -->
      <div class="message">
        <div class="list">
          <dl>
            <dt>Nowy ultraszybki silnik</dt>
            <dd>
              Wydajniejsza defragmentacja plików <br> w krótszym czasie
            </dd>
          </dl>
          <dl>
            <dt>Automatyczna defragmentacja</dt>
            <dd>
              Automatycznie i inteligentnie defragmentuje <br> wybrane pliki i dyski twarde
            </dd>
          </dl>
        </div>
      </div>
      <!-- message -->
      <div class="message">
        <div class="list">
          <dl>
            <dt>Do 200% szybciej *</dt>
            <dd>Przyspiesza dostęp do plików i szybkość <br> uruchamiania gier dzięki funkcji <br> defragmentacji dużych plików
            </dd>
          </dl>
          <dl>
            <dt>Szybsze uruchamianie komputera</dt>
            <dd>
              Uruchamianie komputera i szybsze działanie <br> systemu dzięki defragmentacji podczas <br> uruchamiania
            </dd>
          </dl>
        </div>
      </div>

    </div>
    <!-- change-img-->
    <div class="change-img">
      <!-- list01 -->
      <div class="list-img list01 show">
        <img src="<?php echo getStaticUrl('images/pc.png')?>" alt="" class="nomal">

      </div>
      <!-- list02 -->
      <div class="list-img list02">
        <img src="<?php echo getStaticUrl('images/pc-2.png')?>" alt="" class="nomal2">
        <div class="privacy-right"></div>
      </div>
    </div>
  </div>
</div>
<!-- end intro -->
<!-- end intro -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>Zgarnij Darmowy prezent!</h2>
    <!-- gifts message -->
    <div class="gifts-message clearfix">
      <!-- iu -->
      <div class="gifts-box">
        <img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon01.png')?>" alt="">
        <dl class="pf">
          <dt><div class="box"></div></dt>
          <dd>
            <!-- box -->
            
            <h3>Protected Folder</h3>
            <em>1 rok / 1 komputery</em>
            <p>Działa jak sejf dla twoich plików i folderów, chroniąc dostępu do nich za pomocą hasła.</p>
          </dd>
        </dl>
      </div>
      <div class="gifts-box">
        <img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon01.png')?>" alt="">
        <dl class="iu">
          <dt><div class="box"></div></dt>
          <dd>
            <!-- box -->
            
            <h3>IObit Uninstaller PRO 11</h3>
            <em>1 rok / 1 komputery</em>
            <p>Czystszy komputer oraz szybsze i bezpieczniejsze przeglądanie Internetu! </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- buybtn -->
    <a class="buybtn larger"
       href="http://www.iobit.com/buy.php?product=pl-sd63pciupf69&ref=pl_sd3pciupf69purchasexmas1911<?php echo $refStr;?>&refs=pl_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdxmas1912-pl');">
      <i class="all-icons"></i> KUP TERAZ
    </a>
  </div>
</div>
<!-- end gifts -->

<!-- comparison -->
<div class="comparison">
    <div class="wrapper">
      <h3>Różnice pomiędzy twoją wersją a Smart Defrag PRO</h3>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th colspan="2">
            <div class="text"></div>
          </th>
          <th class="itema">
            <div class="free">Twoja aktualna wersja</div>
          </th>
          <th class="itemb">
            <div class="pro">Smart Defrag 7 PRO</div>
          </th>
        </tr>
        </thead>
        <tbody>
          <tr class="title">
            <td class="virtue" colspan="2">Defragmentacja bez żadnych obaw</td>
            <td class="itema"></td>
            <td class="itemb"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
            <td class="virtue">
              <span>Dostosuj tryb, dyski i pliki, które chcesz defragmentować</span>
            </td>
            <td class="itema"><i class="all-icons close"></i></td>
            <td class="itemb"><i class="all-icons red"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
            <td class="virtue">
              <span>Automatycznie defragmentuje wybrane pliki i foldery w czasie rzeczywistym</span>
            </td>
            <td class="itema"><i class="all-icons close"></i></td>
            <td class="itemb"><i class="all-icons red"></i></td>
          </tr>
          <tr class="title">
            <td class="virtue" colspan="2">Szybszy komputer i lepsza wydajność</td>
            <td class="itema"></td>
            <td class="itemb"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
            <td class="virtue">
              <span>Defragmentuje pliki rejestru podczas pracy systemu Windows, aby uzyskać lepszą wydajność komputera</span>
            </td>
            <td class="itema"><i class="all-icons close"></i></td>
            <td class="itemb"><i class="all-icons red"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
            <td class="virtue">
              <span>Defragmentuje określone pliki podczas uruchamiania, aby szybciej uruchomić komputer</span>
            </td>
            <td class="itema"><i class="all-icons close"></i></td>
            <td class="itemb"><i class="all-icons red"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
            <td class="virtue"><span>Maksymalizuje wydajność i trwałość dysku</span></td>
            <td class="itema"><i class="all-icons close"></i></td>
            <td class="itemb"><i class="all-icons red"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
            <td class="virtue"><span>Uzyskaj dostęp do plików nawet o 200% szybciej</span></td>
            <td class="itema"><i class="all-icons close"></i></td>
            <td class="itemb"><i class="all-icons red"></i></td>
          </tr>
          <tr class="title">
            <td class="virtue" colspan="2">Optymalna obsługa</td>
            <td class="itema"></td>
            <td class="itemb"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon07.png')?>" alt=""></td>
            <td class="virtue"><span>Automatyczna aktualizacja do najnowszej wersji</span></td>
            <td class="itema"><i class="all-icons close"></i></td>
            <td class="itemb"><i class="all-icons red"></i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon08.png')?>" alt=""></td>
            <td class="virtue"><span>Bezpłatne wsparcie techniczne 24/7</span></td>
            <td class="itema"><i class="all-icons close"></i></td>
            <td class="itemb"><i class="all-icons red"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- subtitle -->
    <h4>Wybierz Smart Defrag PRO z <span>85%</span> zniżką dla nawet 200% szybszego uruchamiania</h4>
    <!-- imf-85 buybtn -->
    <a class="buybtn red" href="http://www.iobit.com/buy.php?product=pl-sd63pciupf69&ref=pl_sd3pciupf69purchasexmas1911<?php echo $refStr;?>&refs=pl_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdxmas1912-pl');">
      <i class="all-icons"></i> Kup TERAZ
    </a>

  </div>
<!-- end comparison -->

<!-- review-content -->
<div class="review-content">
  <div class="wrapper">
    <!-- title -->
    <h2>Jak pomagamy naszym użytkownikom w zakresie optymalizacji?</h2>
    <div class="present">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
        <dd>
          Rozwiązujemy problemy z komputerem <strong>30 000 000</strong> użytkowników
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
        <dd>
          Pomagamy zaoszczędzić im <strong>2 666 667</strong> godzin w miesiącu
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
        <dd>
          Pomagamy zaoszczędzić im <strong>1.18 mld $  </strong> rocznie 
        </dd>
      </dl>
    </div>
    <!-- review start -->
    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Recenzje mediów</span></h2></dt>
            <dd>
              <p>„IObit Smart Defrag optymalizuje komputer, aby w pełni wykorzystać wydajność SSD podczas defragmentacji dysków twardych. Narzędzie SSD Trim automatycznie włącza poprawki systemowe, które zwykle wymagają większego doświadczenia. Aktualizacje Smart Defrag obejmują nowy silnik defrag, specjalistyczny Game Defrag, fajny nowy wygląd i wiele opcji językowych (35 teraz, ale ciągle dodawane są nowe)”.</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„Nie wiem, czy mógłbym być bardziej zadowolony ze Smart Defrag. Za każdym razem działa idealnie, a wszystko, co muszę zrobić, to uruchomić program i wszystko jest czyste. Jestem zadowolony w 100% z tego programu, jak również z szybkiej odpowiedzi, gdy potrzebowałem porady, jak radzić sobie z problemami, które mogłem mieć. Bardzo to doceniam”.</p>
              <cite>Jim Parten</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„Używam Smart Defrag na kilku komputerach od czasu jego utworzenia. Od początku, z członkami mojego klubu komputerowego, byliśmy w stanie zobaczyć ciągłe ulepszenia. To było dla nich idealne, z wyjątkiem angielskiej wersji językowej. Zainwestowałem więc we francuską wersję dla IObit. Od tej chwili francuskie magazyny IT zdecydowanie zalecają Smart Defrag, w tym z Optymalizatorem Windows 10, aby uzyskać solidniejszą i dokładniejszą diagnozę z opcjami przyspieszającymi uruchamianie systemu”.</p>
              <cite>Roland LALIS</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„Korzystam z kombinacji dysków SSD RAID 0 i dysków HDD RAID 0 i używam Smart Defrag Pro do analizowania, defragmentowania i utrzymania maksymalnej wydajności dysków. Jak z wszystkimi produktami IObit, instalacja jest bardzo prosta, tak samo jak użytkowanie. Inteligentna defragmentacja zużywa bardzo małe ilości energii, więc nie spowalnia systemu. Zdecydowanie polecam!”</p>
              <cite>Edward Lee Ah Yen</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recenzja użytkownika</span></h2></dt>
            <dd>
              <p>„Używam produktów IObit już od wielu lat. Ponieważ używam starszej maszyny z 6 dyskami, w tym 2 zewnętrznymi, uważam, że „Smart Defrag Pro” firmy IObit dobrze mi służył. Będąc starszym komputerem, mój system staje się dość łatwo pofragmentowany. Ustawiłem „Smart Defrag Pro” na auto defrag, a dodatkowo wykonuję „Defrag and Optimize” raz w tygodniu. Dzięki temu mój system działa płynnie i dobrze. IObit nieustannie dba o to, aby produkt był jeszcze lepszy. Jestem bardzo zadowolony z tego produktu”.</p>
              <cite>William Howes</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="two" data-num="3"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></li>
          <li class="three" data-num="4"><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="Recenzja użytkownika"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland LALIS"></li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
</div>
<!-- end review-content -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- box -->
    <div class="box fl">Smart Defrag</div>
    <!-- bottombuy-mid -->
    <div class="bottombuy-mid fl">
      <!-- countdown -->
      <p class="countdown">
        <strong>00</strong> G :
        <strong>00</strong> M :
        <strong>00</strong> S :
        <strong class="last">000</strong>
      </p>
      <!-- off -->
      <div class="off"></div>
    </div>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price white"><span><big>69</big> <sup>zł</sup> <sub>90</sub></span> <del>269.80 zł </del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="http://www.iobit.com/buy.php?product=pl-sd63pciupf69&ref=pl_sd3pciupf69purchasexmas1911<?php echo $refStr;?>&refs=pl_purchase_sd "
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdxmas1912-pl');">
          <i class="all-icons"></i> Kup TERAZ
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl class="astisfait fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
    <dd>
      <h3>warancja satysfakcji</h3>
      <p>60-dniowa gwarancja zwrotu pieniędzy</p>
    </dd>
  </dl>
  <dl class="paiement fl">
    <dt><img src="<?php echo getStaticUrl('images/verified.png') ?>" alt=""></dt>
    <dd>
      <h3>Zabezpieczenie płatności</h3>
      <P>Twoja płatność jest w 100% bezpieczna</P>
    </dd>
  </dl>
  <dl class="modes fl">
    <dt><img src="<?php echo getStaticUrl('images/veloce.png') ?>" alt=""></dt>
    <dd>
      <h3>Szybka aktywacja</h3>
      <p>Kod licencyjny otrzymasz w ciągu <br> kilku minut po zakupie</p>
    </dd>
  </dl>
  <dl class="service-client fr">
    <dt><img src="<?php echo getStaticUrl('images/servizio.png') ?>" alt=""></dt>
    <dd>
      <h3>Obsługa klienta</h3>
      <p>
        Bezpłatne wsparcie techniczne 24/7
      </p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer -->
<div class="footer wrapper">
  <div class="notes">
    <p>Uwaga:</p>
    <p>1*. Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</p>
    <p>2*. Dane mogą się różnić w zależności od systemu lub komputera.</p>
  </div>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Wszelkie prawa zastrzeżone</p>
</div>
<!-- footer end -->

<!-- float -->
<div class="float">
  <p>
    Do
    <b>-85%</b>
    W wersji dla 3 komputerów
  </p>
  <!-- buybtn -->
  <a class="buybtn small"
     href="http://www.iobit.com/buy.php?product=pl-sd63pciupf69&ref=pl_sd3pciupf69purchasexmas1911<?php echo $refStr;?>&refs=pl_purchase_sd"
     onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdxmas1912-pl');">
    Sprawdź
  </a>
  <!-- close -->
  <a class="close"
     href="javascript: closeFloat();"
     onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdxmas1912-pl');">
    ×
  </a>
</div>
<!-- end float -->

<!-- pop -->
<div class="pop">
  <div class="coupon">
    <a class="pop-buy"
       href="http://www.iobit.com/buy.php?product=pl-sd63pciupf69&ref=pl_sd3pciupf69purchasexmas1911<?php echo $refStr;?>&refs=pl_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdxmas1912-pl');"></a>
    <!-- hand -->
    <img class="hand" src="<?php echo getStaticUrl('images/hand.png')?>" alt="">
    <!-- close -->
    <a class="pop-close"
       href="javascript: closePop();"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdxmas1912-pl');">
      ×</a>
  </div>
</div>

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/TweenMax.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>