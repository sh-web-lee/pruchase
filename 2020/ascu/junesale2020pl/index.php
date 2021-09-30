<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
  $date = $_GET['d'];
  $cName = 'juneascupl' . $date;
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
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
  'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
if($_GET['ref']=='nc'){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Nawet 80% zniżki na Advanced SystemCare Ultimate PRO - IObit!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,500;0,600;0,700;1,800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>KOMPLETNA OCHRONA I OPTYMALIZACJA KOMPUTERA</h1>
    <!-- countdown -->
    <p class="countdown">
      TYLKO TERAZ NAWET - <i>75% TANIEJ</i>
      <span>
        Pospiesz się, zostało:
        <strong>0</strong><strong>0</strong> <small>min</small>
        <strong>0</strong><strong>0</strong> <small>sek</small>
        <strong>0</strong><strong>0</strong> <small>ms</small>
      </span>
    </p>

    <!-- content -->
    <div class="content clearfix">
      <!-- left small 3pc -->
      <div class="offer small fl">
        <!-- off -->
        <span class="off">-50%</span>
        <!-- box -->
        <span class="box">Advanced SystemCare Ultimate</span>
        <!-- dl -->
        <dl>
          <dd>
            <!-- price -->
            <p class="price">
              <big>109,90 zł</big>
              <span>Oryginalna cena: <del>229,90 zł</del> </span>
              <small>9,15 zł / 1 miesiąc</small>
            </p>
            <!-- buybtn -->
            <a class="buybtn small"
               href="http://www.iobit.com/buy.php?product=pl-au14109&ref=pl_au14109purchase2006<?php echo $refStr;?>&refs=pl_purchase_au"
               onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascujunesale2020-pl');">
              KUP TERAZ
            </a>
            <!-- type -->
            <p class="type">1 rok / 3 komputery</p>
          </dd>
        </dl>
      </div>

      <!-- right large 3pc+bundle -->
      <div class="offer large fr">
        <!-- off -->
        <span class="off">-75%</span>
        <!-- box -->
        <span class="box">Advanced SystemCare Ultimate+Smart Defrag PRO+Protected Folder</span>
        <!-- dl -->
        <dl>
          <dd>
            <!-- price -->
            <p class="price">
              <big>109,90 zł</big>
              <span>Oryginalna cena: <del>619,60 zł</del> </span>
              <small>9,15 zł / 1 miesiąc</small>
              <em>+ Smart Defrag 7 PRO</em>
              <em>+ Protected Folder</em>
              <em>+ IObit Uninstaller 10 PRO</em>
            </p>
            <!-- buybtn -->
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-au143pciusdpf109&ref=pl_au143pciusdpf109purchase2006<?php echo $refStr;?>&refs=pl_purchase_au  "
               onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascujunesale2020-pl');">
              KUP TERAZ
            </a>
            <!-- type -->
            <p class="type">1 rok / <b>3 komputery</b></p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- payment start -->
  <div class="payment">
    <div class="wrapper clearfix">
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
  </div>
  <!-- payment end -->

  <!-- intro -->
  <div class="intro wrapper">
    <!-- title -->
    <h2>
      Gwarantujemy Ci bezpieczniejszy i szybszy komputer! <br>
      <small>W przeciwnym razie zwrócimy Ci pieniądze* </small>
    </h2>
    <!-- left message -->
    <dl class="left">
      <dt> <img src="<?php echo getStaticUrl('images/icons-01.png')?>" alt=""> Kompleksowa ochrona</dt>
      <dd>
        <strong>Wykryj wszystkie zagrożenia</strong>
        <p>Dokładne wykrywanie zagrożeń dzięki silnikowi Bitdefender.</p>
      </dd>
      <dd>
        <strong>Ochronę w czasie rzeczywistym</strong>
        <p>Ochrona przed wirusami, ransomware, oprogramowaniem szpiegującym, trojanami itp. w czasie rzeczywistym.</p>
      </dd>
      <dd>
        <strong>Ochrona danych osobowych</strong>
        <p>Zabezpiecz pliki, hasła i płatności online.</p>
      </dd>
    </dl>
    <!-- ascu -->
    <img src="<?php echo getStaticUrl('images/intro-ascu.png')?>" alt="" class="img-box">
    <!-- right message -->
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons-02.png')?>" alt=""> Optymalizacja komputera</dt>
      <dd>
        <strong>Szybszy komputer (x200%)</strong>
        <p>Zoptymalizuj i przyspiesz swój komputer nawet o 200%.</p>
      </dd>
      <dd>
        <strong>Szybszy Internet (x300%)</strong>
        <p>Przyspiesz pobieranie z YouTube, przeglądanie, gry i oglądanie filmów nawet o 300%.</p>
      </dd>
      <dd>
        <strong>Dogłębne czyszczenie</strong>
        <p>Rozwiązuj problemy rejestru, aby zmniejszyć awarie systemu i komunikaty o błędach systemu Windows.</p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->

  <!-- gift -->
  <div class="gift">
    <div class="wrapper clearfix">
      <h2>Wykorzystaj promocje i zgarnij darmowe prezenty!</h2>
      <!-- sd -->
      <dl class="sd">
        <dt>Smart Defrag PRO</dt>
        <dd>
          <strong>0 zł</strong> <del>119,90zł</del>
          <p>Maksymalna wydajność dysku</p>
          <p>Szybszy dostęp do plików</p>
          <p>Zwiększona wydajność gier</p>
        </dd>
      </dl>
      <dl class="iu">
        <dt> IObit Uninstaller 10 PRO</dt>
        <dd>
          <strong>0 zł</strong> <del>119,90zł</del>
          <p>Całkowicie odinstaluj programy</p>
          <p>Usuń złośliwe wtyczki</p>
          <p>Automatycznie aktualizuj <br> programy</p>
        </dd>
      </dl>
      <!-- pf -->
      <dl class="pf">
        <dt>Protected Folder</dt>
        <dd>
          <strong>0 zł</strong> <del>149,90zł</del>
          <p>Sejf dla plików i folderów</p>
          <p>Dostęp do plików <br> zabezpieczony hasłem</p>
        </dd>
      </dl>
      <div class="clear"></div>
      <!-- price -->
      <p class="price"><big>109,90 zł</big> &nbsp;&nbsp; <del>619,60 zł</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=pl-au143pciusdpf109&ref=pl_au143pciusdpf109purchase2006<?php echo $refStr;?>&refs=pl_purchase_au  "
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascujunesale2020-pl');">
        KUP TERAZ
      </a>
      <!-- countdown -->
      <p class="countdown1">
        Pospiesz się, zostało:
        <strong>00</strong> min
        <strong>00</strong> sek
        <strong>00</strong> ms
      </p>
    </div>
  </div>
  <!-- end gift -->
</div>
<!-- end container -->

<!-- comparison -->
<div class="comparison wrapper">
  <h2>Co zyskasz przechodząc na wersję PRO?</h2>
  <div class="ctable">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text"></th>
        <th class="space"></th>
        <th class="itema">
          Twoja aktualna wersja
        </th>
        <th class="space"></th>
        <th class="itemb"><p>PRO</p></th>
      </tr>
      </thead>
      <tbody>
      <tr class="gray">
        <td class="text"><img src="<?php echo getStaticUrl('images/icons-03.png')?>" alt=""> Pełna ochrona</td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text">Zwalczanie wirusów w czasie rzeczywistym</td>
        <td class="space"></td>
        <td class="itema">Wygasa po 30 dniach</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="text">Ochrona ważnych plików przed ransomware</td>
        <td class="space"></td>
        <td class="itema">Wygasa po 30 dniach</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="text">Ochrona przed złośliwymi oprogramowaniem i phishingowymi stronami internetowymi</td>
        <td class="space"></td>
        <td class="itema">Wygasa po 30 dniach</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="text">Ochrona tożsamości i prywatności</td>
        <td class="space"></td>
        <td class="itema">Wygasa po 30 dniach</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="text">Wykrywanie intruzów próbujących użyć komputera</td>
        <td class="space"></td>
        <td class="itema">Wygasa po 30 dniach</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr class="gray">
        <td class="text"><img src="<?php echo getStaticUrl('images/icons-04.png')?>" alt=""> Maksymalna optymalizacja</td>
        <td class="space"></td>
        <td class="itema"></td>
        <td class="space"></td>
        <td class="itemb"></td>
      </tr>
      <tr>
        <td class="text">Dokładnie czyszczenie niepotrzebnych plików i rejestrów</td>
        <td class="space"></td>
        <td class="itema">Wygasa po 30 dniach</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="text">Nawet do 200% szybszy komputer</td>
        <td class="space"></td>
        <td class="itema">Wygasa po 30 dniach</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="text">Do 300% szybsza prędkość przeglądania Internetu</td>
        <td class="space"></td>
        <td class="itema">Wygasa po 30 dniach</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="text">Zmniejszona liczba awarii systemu Windows i komunikatów o błędach</td>
        <td class="space"></td>
        <td class="itema">Wygasa po 30 dniach</td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      </tbody>
      <tfoot>
      <tr><th class="text"></th>
        <th class="space"></th>
        <th class="itema"></th>
        <th class="space"></th>
        <th class="itemb">
          <p class="price"><big>109,90 zł</big> <del>619,60 zł</del></p>
          <!-- buybtn -->
          <a href="http://www.iobit.com/buy.php?product=pl-au143pciusdpf109&ref=pl_au143pciusdpf109purchase2006<?php echo $refStr;?>&refs=pl_purchase_au  "
             onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascujunesale2020-pl');"
             class="buybtn">
            KUP TERAZ
          </a>
        </th>
      </tr>
      </tfoot>
    </table>
  </div>
</div>
<!-- end comparison -->

<!-- review -->
<div class="review wrapper">

  <div class="reviews">
    <h2>Wyróżnieni na całym świecie</h2>
    <h3>Użytkownicy z całego świata dzielą się swoimi doświadczeniami</h3>
    <p>„Zawsze miałem jakieś problemy z komputerem. W pewnym momencie zainstalowałem po raz pierwszy Advanced SystemCare i moje problemy zniknęły. Teraz, z dodatkowym antywirusem, niepotrzebne są już żadne inne programy. Advanced SystemCare Ultimate jest niezastąpiony. To wielki zwycięzca! Dzięki niemu mój komputer jest zawsze uaktualniony i działa bez zarzutu. W przeciwieństwie do innych produktów, nigdy nie miałem z nim żadnych problemów”.</p>
  </div>

  <div class="reviews">
    <h2>Wyróżnieni na całym świecie</h2>
    <h3>Użytkownicy z całego świata dzielą się swoimi doświadczeniami</h3>
    <p>„W poprzedniej wersji Advanced SystemCare Ultimate, nie miałem prawie żadnych problemów z systemem, złośliwymi programami itp. Nowa aktualizacja i większa ilość funkcji sprawiają, że mój laptop działa 5 razy szybciej niż wcześniej. Podoba mi się też nowa skórka dla interfejsu użytkownika. Następnym razem, gdy będę naprawiać jakiś komputer, z pewnością polecę zainstalowanie Advanced SystemCare Ultimate jako optymalizator systemowy i antywirus w jednym”.</p>
  </div>

  <div class="reviews o1net active">
    <h2>Wyróżnieni na całym świecie</h2>
    <h3>Użytkownicy z całego świata dzielą się swoimi doświadczeniami</h3>
    <p>„Advanced SystemCare Ultimate to potężne narzędzie do optymalizacji systemu oraz antywirus w jednym. Oprócz ochrony komputera przed złośliwym oprogramowaniem, wirusami i podobnymi zagrożeniami, może również zwiększyć jego wydajność, stosując różne poprawki rejestru i skrótów, usuwając niepotrzebne pliki, skanując woluminy dysku lokalnego dla luk w systemie itp”.</p>
  </div>

  <div class="reviews">
    <h2>Wyróżnieni na całym świecie</h2>
    <h3>Użytkownicy z całego świata dzielą się swoimi doświadczeniami</h3>
    <p>„Od wielu lat korzystam z różnych wersji Advanced SystemCare. Kiedy odkryłem jakie funkcje proponuje Advanced SystemCare Ultimate, wiedziałem, że muszę go mieć. Nie zawiodłem się! Jest to jeden z najłatwiejszych, a zarazem najwydajniejszych programów, który utrzymuje trzy moje komputery w dobrym stanie”.</p>
  </div>

  <!-- handle -->
  <ul class="handle clearfix">
    <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett"><span></span></div>
      <strong>Rod Garnett</strong>
    </li>
    <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"><span></span></div>
      <strong>Dareen Lim</strong>
    </li>
    <li class="active">
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/01net.png" alt="addictivetips"><span></span></div>
      <strong>addictivetips</strong>
    </li>
    <li>
      <div class="badge"><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="Russell Peck"><span></span></div>
      <strong>Russell Peck</strong>
    </li>
  </ul>
</div>
<!-- end review -->

<!-- awards -->
<div class="awards">
  <div class="wrapper">
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- end awards -->

<!-- between-buy -->
  <div class="between-buy">
    <div class="wrapper">
      <h2>Zabezpiecz i przyspiesz komputer już TERAZ!</h2>
      <div class="content clearfix">
        <!-- off -->
        <span class="off">-75%</span>
        <!-- box -->
        <span class="box fl">Advanced SystemCare Ultimate</span>
        <!-- dl -->
        <dl class="fl">
          <dd>
            <!-- price -->
            <p class="price"><big>109,90 zł</big> <del>619,60 zł</del></p>
            <!-- buybtn -->
            <a href="http://www.iobit.com/buy.php?product=pl-au143pciusdpf109&ref=pl_au143pciusdpf109purchase2006<?php echo $refStr;?>&refs=pl_purchase_au  "
               onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascujunesale2020-pl');"
               class="buybtn red">
              KUP TERAZ
            </a>
          </dd>
          <dd class="countdown2">
            Pospiesz się, zostało:
            <strong>00</strong> min
            <strong>00</strong> sek
            <strong>00</strong> ms
          </dd>
        </dl>
      </div>
    </div>
  </div>
<!-- end between-buy -->

<!-- bottom -->
<div class="bottom">
  <div class="wrapper">
    <!-- footer -->
    <div class="footer">
      <dl>
        <dt>Uwaga: </dt>
        <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
        <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów.</dd>
        <dd>* Jeśli będziesz niezadowolony, to możesz anulować zakup w ciągu 60 dni bez żadnych opłat. Pieniądze zostaną automatycznie zwrócone na twoje konto.</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
    </div>
    <!-- footer end -->
  </div>
</div>


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>