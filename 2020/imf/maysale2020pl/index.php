<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xi_imf','xb_imf'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Najnowszy IObit Malware Fighter nawet 80% taniej! - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
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
      <h1>PEŁNE BEZPIECZEŃSTWO W SIECI</h1>
      <p>TYLKO TERAZ NAWET DO <b>80%</b> TANIEJ</p>
    </div>
    <!-- countdown -->
    <p class="countdown">
      <i class="hourglass"></i>
      <span>Zostało:</span>
      <strong>00</strong> min
      <strong>00</strong> sek
      <strong>00</strong> ms
    </p>
    <!-- content -->
    <div class="content">

      <!-- 1pc -->
      <dl class="small left">
        <dt><span>30% zniżki</span></dt>
        <dd>
          <!-- box -->
          <span class="box">IObit Malware Fighter PRO</span>
          <!-- price -->
          <p class="price"><big>79,</big>90 zł <del>119,90 zł</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-imf81pc79&ref=pl_imf81pc79purchase2005<?php echo $refStr;?>&refs=pl_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfmaysale2020-top-pl');">
            <i class="all-icons"></i>
            KUP TERAZ
          </a>
          <!-- type -->
          <p class="type">1 rok / 1 komputer</p>
        </dd>
      </dl>

      <!-- 3pc+bundle -->
      <dl class="large middle">
        <dt><span>80% zniżki</span></dt>
        <dd>
          <!-- box -->
          <span class="box">IObit Malware Fighter PRO+IObit Uninstaller PRO+Smart Defrag PRO</span>
          <!-- price -->
          <p class="price"><big>89,</big>90 zł <del>469,70 zł</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imf83pcsdiu89purchase2005<?php echo $refStr;?>&refs=pl_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfmaysale2020-top-pl');">
            <i class="all-icons"></i>
            KUP TERAZ
          </a>
          <!-- type -->
          <p class="type">1 rok / 3 komputer</p>
        </dd>
      </dl>

      <!-- 3pc -->
      <dl class="small right">
        <dt><span>55% zniżki</span></dt>
        <dd>
          <!-- box -->
          <span class="box">IObit Malware Fighter PRO</span>
          <!-- price -->
          <p class="price"><big>89,</big>90 zł <del>199,90 zł</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-imf83pc89&ref=pl_imf83pc89purchase2005<?php echo $refStr;?>&refs=pl_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfmaysale2020-top-pl');">
            <i class="all-icons"></i>
            KUP TERAZ
          </a>
          <!-- type -->
          <p class="type">1 rok / 3 komputer</p>
        </dd>
      </dl>

    </div>
    <!-- payments -->
    <ul class="payments clearfix">
      <li class="one">
        <p>Akceptowane płatności</p>
        <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
      </li>
      <li class="two">
        <p>Gwarancja zwrotu pieniędzy</p>
        <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="">
      </li>
      <li class="three">
        <p>Bezpieczna płatność</p>
        <img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="">
      </li>
    </ul>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <!-- title -->
    <div class="title">
      <h2>Gwarantujemy Ci ochronę komputera i prywatności w Internecie</h2>
      <p>W przeciwnym razie natychmiast zwrócimy Ci pieniądze!*</p>
    </div>
    <!-- top -->
    <div class="content top clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
        <dd>
          <h4>Silnik antywirusowy Bitdefender</h4>
          <p>
            Zabezpiecz się przed <br>
            209 milionami zagrożeń ONLINE
          </p>
        </dd>
      </dl>
      <dl class="twice">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
        <dd>
          <h4>Bezpieczne dane osobowe</h4>
          <p>
            Chroń dane osobowe za pomocą hasła i <br>
            dzięki ulepszonemu silnikowi anty-ransomware

          </p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
        <dd>
          <h4>Ochrona przed ransomware</h4>
          <p>
            Zapewni ochronę przed <br>
            oprogramowaniem szpiegującym
          </p>
        </dd>
      </dl>
    </div>
    <!--  bot-->
    <div class="content bot">
      <dl>
        <dt>Kupuj i płać online bez obaw</dt>
        <dd>
          IObit Malware Fighter PRO automatycznie wykrywa i <br>
          blokuje podejrzane lub fałszywe strony, aby zapewnić Ci <br>
          bezpieczne zakupy i bankowość online.
        </dd>
      </dl>
      <dl class="last">
        <dt>Zabezpiecz przeglądarke</dt>
        <dd>
          Automatycznie usuwaj pliki cookies i niebezpieczne <br>
          ślady, aby uniemożliwić hakerom wyszukiwanie treści, <br>
          które czytasz i przeglądasz.
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>Wyczyść i przyspiesz komputer dzięki</h2>
    <!-- content -->
    <div class="content clearfix">
      <!-- imf -->
      <dl class="clearfix imf">
        <dt><img src="<?php echo getStaticUrl('images/gifts-imf.png')?>" alt="IObit Malware Fighter PRO"></dt>
        <dd>
          <!-- price -->
          <p class="price"><big>89,</big>90 zł <del>199,90 zł</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-imf83pc89&ref=pl_imf83pc89purchase2005<?php echo $refStr;?>&refs=pl_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfmaysale2020-mid-pl');">
            <i class="all-icons"></i>
            KUP TERAZ
          </a>
        </dd>
      </dl>
      <!-- iu -->
      <dl class="clearfix iu">
        <dt><img src="<?php echo getStaticUrl('images/gifts-iu2.png')?>" alt="IObit Uninstaller PRO"></dt>
        <dd>
          <p class="price">0 zł <del>119,90 zł </del></p>
          <ul>
            <li>Całkowicie odinstaluj programy</li>
            <li>Usuń złośliwe wtyczki</li>
            <li>Automatycznie aktualizuj programy</li>
          </ul>
        </dd>
      </dl>
      <!-- sd -->
      <dl class="clearfix sd">
        <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"></dt>
        <dd>
          <p class="price">0 zł <del>119,90 zł </del></p>
          <ul>
            <li>Przyspiesz komputer</li>
            <li>Zoptymalizuj dysk</li>
            <li>Zwiększ wydajność gier</li>
          </ul>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end gifts -->

<!-- centbuy -->
<div class="centbuy wrapper">
  <h3>IObit Malware Fighter PRO + darmowe prezenty</h3>
  <!-- price -->
  <p class="price"><big>89,</big>90 zł <del>469,70 zł</del></p>
  <!-- buybtn -->
  <a class="buybtn"
     href="http://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imf83pcsdiu89purchase2005<?php echo $refStr;?>&refs=pl_purchase_imf"
     onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfmaysale2020-mid-pl');">
    <i class="all-icons"></i>
    KUP TERAZ
  </a>
  <!-- countdown -->
  <p class="countdown">
    <i class="all-icons"></i>
    <span>Zostało:</span>
    <strong>00</strong> min
    <strong>00</strong> sek
    <strong>00</strong> ms
  </p>
</div>
<!-- end centbuy -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <!-- title -->
    <h2>Zobacz recenzje i opinie użytkowników</h2>
    <!-- content -->
    <div class="content">
      <!-- details -->
      <div class="details">
        <p>
          „Jestem bardzo zadowolony z waszego produktu IObit Maleware Fighter. Przed zakupieniem tego produktu, miałem wiele problemów ze złośliwymi zakłóceniami, nie byłem w stanie obejrzeć całego filmu lub koncertu, co bardzo lubię robić. Dzięki waszemu programowi, teraz każda operacja jest przejrzysta, bezpieczna i dobrze chroniona. Program skanuje mój laptop bez wpływu na jego wydajność. Poleciłem ten produkt dwóm moim znajomym”.
        </p>
        <p>
          „Używaliśmy do kilkunastu różnych programów, aby nasze komputery działały bezproblemowo i trzymały hakerów z dala. Utrzymanie bezpieczeństwa i wydajności każdego tygodnia zajmowało dużo czasu. Teraz, dzięki IObit Malware Fighter Pro i Advanced SystemCare Pro, wszystko jest w jednym miejscu i wystarczy tylko kilka minut tygodniowo, aby zabezpieczyć i zoptymalizować nasze komputery. Od kiedy używamy waszych programów, nie mamy już żadnych problemów z komputerem”.
        </p>
        <p class="on">
          „Program wykorzystuje dwa silniki AV, własny oraz BitDefender. Program wydaje się skutecznie działać przeciwko szkodliwemu oprogramowaniu, które nie może zostać wykryte przez inne podobnie działające programy. Bardzo dobrze, że może działać razem ze standardowym oprogramowaniem AV. Może wykryć szeroki zakres programów szpiegujących, ransomware, adware, trojanów, robaków, keyloggerów i botów.”
        </p>
        <p>
          „Kilka lat temu ktoś zwrócił moją uwagę na IObit Malware Fighter. Najpierw byłem sceptycznie nastawiony. Jednak po zainstalowaniu stał się on moim ulubionym programem przeciwko złośliwemu oprogramowaniu. Jest bardzo łatwy w użyciu. Przez lata udało mu się wykryć i usunąć wiele zagrożeń. We współpracy z innymi programami IObit, takimi jak na przykład ASC, mam zapewnioną dobrą ochronę komputera. Teraz polecam te programy wszystkim moim znajomym i rodzinie”.
        </p>
        <p>
          „Chciałbym bardzo podziękować wszystkim pracownikom IObit za ciężką pracę nad dostarczeniem nam najlepszych programów. Rozwijacie się dla użytkowników. Ostatnia aktualizacja jest znacznie szybsza w skanerze i łatwa w obsłudze. Ci, którzy szukają naprawdę dobrego programu antywirusowego, który jest również wart swojej ceny, nie muszą szukać dalej niż IObit Malware Fighter”.
        </p>
        <p>
          „IObit Malware Fighter jest świetny, ponieważ może skanować pliki i usb oraz chronić przed zagrożeniami online i offline. Ogólnie dzięki produktom IObit uzyskałem świetne wyniki nawet w przypadku darmowych wersji, ponieważ pomogły mi i mojemu komputerowi. Poleciłbym IObit i wszystkie ich programy każdemu, kto chciałby zapewnić ochronę komputera, a także przyspieszyć jego działanie”.
        </p>
        <p>
          „IObit Malware Fighter to najlepsze narzędzie do usuwania złośliwego oprogramowania, którego używam w swojej pracy. Jestem informatykiem, który pracuje w dziale Wsparcia, a IMF to moje najlepsze narzędzie do walki. IMF to intuicyjne oprogramowanie z zaawansowanymi funkcjami i bardzo ładnym interfejsem. Nowoczesne narzędzie codziennego użytku”.
        </p>
      </div>
      <!-- photos -->
      <ul>
        <li class="zero">
          <img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Bati">
          <cite>Gelu Bati</cite>
        </li>
        <li class="one">
          <img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett">
          <cite>Bob Bassett</cite>
        </li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer">
          <cite>Software Informer</cite>
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers">
          <cite>Peter Stoffers</cite>
        </li>
        <li class="four">
          <img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy">
          <cite>David Cassidy</cite>
        </li>
        <li class="five">
          <img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen">
          <cite>Adam Cullen</cite>
        </li>
        <li class="six">
          <img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe">
          <cite>Filipe</cite>
        </li>
      </ul>
      <!-- arrow -->
      <a class="prev btn" href="javascript: previous();"></a>
      <a class="next btn" href="javascript: nextpage();"></a>
    </div>
  </div>
</div>
<!-- end review -->

<!-- compare -->
<div class="compare wrapper">
  <!-- title -->
  <h2>Kompleksowa ochrona tylko w PRO</h2>
  <!-- table -->
  <table>
    <thead>
      <tr>
        <th class="text" colspan="2"></th>
        <th class="free" valign="bottom"><div>Twoja aktualna wersja</div></th>
        <th class="pro"><div>IObit Malware Fighter 8 PRO</div></th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
        <td class="text">Baza danych złośliwego oprogramowania</td>
        <td class="free">9 milionów</td>
        <td class="pro">Ponad 209 milionów</td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
        <td class="text">Silniki antywirusowe Bitdefender</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
        <td class="text">Silnik anty-Ransomware</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- add -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
        <td class="text">Ochrona folderów i plików przed atakami ransomware </td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
        <td class="text">Ochrona kamery internetowej</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
        <td class="text">Ochrona przed śledzeniem</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></td>
        <td class="text">Ochrona klucza USB</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
        <td class="text">Wrażliwe dane chronione hasłem</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
        <td class="text">Ochrona w czasie rzeczywistym</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="pro"><i class="all-icons"></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
        <td class="text">Automatyczna aktualizacja</td>
        <td class="free"><i class="all-icons"></i></td>
        <td class="pro last" valign="bottom"><i class="all-icons"></i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper">
    <!-- title -->
    <h2>Nie zwlekaj i zabezpiecz się w sieci już TERAZ!
    </h2>
    <!-- content -->
    <div class="content clearfix">
      <!-- box -->
      <div class="box fl">
        <img src="<?php echo getStaticUrl('images/bottombuy-1pc.png')?>" alt="IObit Malware Fighter PRO">
        <img class="on" src="<?php echo getStaticUrl('images/bottombuy-3pcbundle.png')?>" alt="IObit Malware Fighter PRO+IObit Uninstaller PRO+Smart Defrag PRO">
        <img src="<?php echo getStaticUrl('images/bottombuy-3pc.png')?>" alt="IObit Malware Fighter PRO">
      </div>
      <!-- selector -->
      <ul class="fl">
        <li class="one"
            data-url="http://www.iobit.com/buy.php?product=pl-imf81pc79&ref=pl_imf81pc79purchase2005<?php echo $refStr;?>&refs=pl_purchase_imf&tw=-8"
            data-price="79,"
            data-del="119,90 zł">
          1 rok / 1 komputer
        </li>
        <li class="two active"
            data-url="http://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imf83pcsdiu89purchase2005<?php echo $refStr;?>&refs=pl_purchase_imf&tw=-8"
            data-price="89,"
            data-del="469,70 zł">
          1 rok / 3 komputery + DARMOWE PREZENTY
        </li>
        <li class="three"
            data-url="http://www.iobit.com/buy.php?product=pl-imf83pc89&ref=pl_imf83pc89purchase2005<?php echo $refStr;?>&refs=pl_purchase_imf&tw=-8"
            data-price="89,"
            data-del="199,90 zł">
          1 rok / 3 komputery
        </li>
      </ul>
      <!-- message -->
      <dl class="fr">
        <dd>
          <!-- price -->
          <p class="price"><big>89,</big>90 zł <del>469,70 zł</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imf83pcsdiu89purchase2005<?php echo $refStr;?>&refs=pl_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfmaysale2020-btm-pl');">
            <i class="all-icons"></i>
            KUP TERAZ
          </a>
          <!-- countdown -->
          <p class="countdown">
            <i class="all-icons"></i>
            <span>Zostało:</span>
            <strong>00</strong> min
            <strong>00</strong> sek
            <strong>00</strong> ms
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end bottombuy -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dt>Uwaga: </dt>
    <dd>
      * Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.
    </dd>
    <dd>
      * Dane mogą się różnić w zależności od różnych systemów lub komputerów.
    </dd>
    <dd>
      * Jeśli będziesz niezadowolony, to możesz anulować zakup w ciągu 60 dni bez żadnych opłat. Pieniądze zostaną automatycznie zwrócone na twoje konto.
    </dd>
  </dl>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>