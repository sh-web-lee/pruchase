<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
$refStr .= empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
?>

<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Zaoszczędź do 85% na IObit Malware Fighter PRO z okazji Bożego Narodzenia - IObit!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
  <script type="text/javascript">
    var queryStr = <?php echo empty($_SERVER['QUERY_STRING']) ? '""' : ('"?' . $_SERVER['QUERY_STRING']) . '"'; ?>;
    var paramTo = MApp(2.2).url.getParameters('to');
  </script>
</head>

<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>ŚWIĄTECZNA WYPRZEDAŻ</h1>
      <!-- subtitle -->
      <p>Aż do -<b>85</b>%! Kup 1, a otrzymasz 3 GRATIS! Nie przegap tego!</p>
      <!-- panel -->
      <div class="panel clearfix">

        <!-- imf-55 -->
        <div class="message small fl">
          <div class="message-box">
            <div class="message-box-sale">
              <p>-50%</p>
            </div>
            <img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png') ?>" alt="IObit Malware Fighter PRO">
          </div>
          <p>1 rok / 1 komputer</p>
          <dl>
            <dd class="clearfix">
              &emsp;&emsp;&emsp;&emsp;
              Oszczędzasz : <span class="fr">80 zł</span>
            </dd>
            <dd class="two">
              <p class="price"><b>79</b> <del>159,00 zł</del></p>
            </dd>
            <dd>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=pl-imf81pc79&ref=pl_imf81pc79purchase2011<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas2011-pl');"> <i class="all-icons"></i> KUP TERAZ </a>
            </dd>
          </dl>
        </div>

        <!-- imf-85 -->
        <div class="message large fr">
          <div class="countd countdown">
            <div class="countdcnt">
              <strong>00</strong><span>h :</span>
              <strong>00</strong><span>m :</span>
              <strong>30</strong><span>s</span>
            </div>
          </div>
          <div class="message-box">
            <div class="message-box-sale message-box-eaux">
              <p>-85%</p>
            </div>
            <img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png') ?>" alt="IObit Malware Fighter PRO">
            <div class="xmas-giveaway"></div>
            <div class="message-tips"><i class="all-icons"></i>
              <p>Ekskluzywne prezenty obejmują Smart Defrag PRO, IObit Uninstaller PRO i Protected Folder.</p>
            </div>
          </div>
          <p>1 rok / 3 komputery + <del class="messagecad">Prezenty PRO</del></p>
          <!-- dl -->
          <dl>
            <dd class="clearfix">
              &emsp;&emsp;
              Oszczędzasz : <span class="fr largeolsa"><em>509,70</em> zł</span>
            </dd>
            <dd class="two">
              <p class="price"><b>89</b> <del class="largeold"><em>599,60</em> zł</del></p>
            </dd>
            <dd>
              <a class="buybtn large" href="https://www.iobit.com/buy.php?product=pl-imf83pcsdpfiu89&ref=pl_imf83pcsdpfiu89purchase2011<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas2011-pl');"> <i class="all-icons"></i> KUP TERAZ </a>
              <!-- <p class="note"><i class="all-icons"></i><b class="viewNum">4,006,553</b> personnes l'ont acheté!</p> -->
            </dd>
          </dl>
        </div>

        <div class="message message3">
          <dl>
            <dd class="two">
              <p class="price"><b>89</b> <del>199,90 zł</del></p>
            </dd>
            <dd>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=pl-imf83pc89&ref=pl_imf83pc89purchase2011<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas2011-pl')"> <i class="all-icons"></i> KUP TERAZ </a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <div class="xmas-annou"><i class="all-icons"></i>Uwaga ! Prezent straci ważność za 24 godziny. Pośpiesz się!</div>
  <div class="xmas-payment"></div>
  <div class="wrapper xmas-pour">
    <!-- feature -->
    <div class="feature">
      <h2>Dlaczego warto wybrać IObit Malware Fighter PRO?</h2>
      <p>Tylko wersja PRO w pełni chroni Twój komputer przed 209 milionami zagrożeń</p>
    </div>
    <!-- end feature -->

    <!-- intro -->
    <div class="intro">
      <!-- 01 -->
      <dl class="one clearfix">
        <dd>
          <img src="<?php echo getStaticUrl('images/xmas-icon1.png') ?>" alt="">
          <h3>Silnik Bitdefender</h3>
          <p>Zapobiega zainfekowaniu i uszkodzeniu komputera przez ponad 209 milionów zagrożeń.</p>
        </dd>
      </dl>
      <!-- 02 -->
      <dl class="two clearfix">
        <dd>
          <img src="<?php echo getStaticUrl('images/xmas-icon2.png') ?>" alt="">
          <h3>Ochrona wrażliwych danych</h3>
          <p>Używa haseł do ochrony poufnych danych, aby nikt nie mógł uzyskać do nich dostępu bez Twojej zgody.</p>
        </dd>
      </dl>
      <!-- 03 -->
      <dl class="three clearfix">
        <dd>
          <img src="<?php echo getStaticUrl('images/xmas-icon3.png') ?>" alt="">
          <h3>Silnik anty-ransomware</h3>
          <p>Blokuje oprogramowanie ransomware, które próbuje dostać się do komputera lub zaszyfrować ważne pliki.</p>
        </dd>
      </dl>
      <!-- 04 -->
      <dl class="four clearfix">
        <dd>
          <img src="<?php echo getStaticUrl('images/xmas-icon4.png') ?>" alt="">
          <h3>Bezpieczniejsze surfowanie po Internecie</h3>
          <p>Automatycznie usuwa niebezpieczne pliki cookie i ślady po zamknięciu przeglądarki, uniemożliwiając hakerom znalezienie tego, co czytasz, przeglądasz lub kupujesz online.</p>
          </p>
        </dd>
      </dl>
    </div>
    <!-- end intro -->
  </div>
  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper gifts-cont">
      <h2>Trzy przydatne narzędzia jako darmowe prezenty przez ograniczony czas!</h2>
      <p>Czas jest ograniczony, nie przegap tego!</p>
      <div class="gifts-giveway gifts-giveway1">
        <div class="gifts-box"></div>
        <div class="gifts-text">
          <!-- <h4>IObit Software Updater 3 PRO <b>0zł</b> <del>29,99zł</del> <span>(1 an / 1 PC)</span></h4> -->
          <ul>
            <li>IObit Uninstaller PRO może szybko usunąć niepotrzebne programy i wtyczki. Dzięki głębokiemu skanowaniu i czyszczeniu możesz całkowicie wyczyścić wszystkie pozostałości. </li>
            <li>Monitoruje i przywraca zmiany systemowe automatycznie podczas instalacji programu. W ten sposób odbywa się czysta dezinstalacja.</li>
          </ul>
        </div>
      </div>
      <div class="gifts-giveway gifts-giveway2">
        <div class="gifts-box"></div>
        <div class="gifts-text">
          <!-- <h4>Smart Defrag 6 PRO <b>0zł</b> <del>29,99zł</del> <span>(1 an / 1 PC)</span></h4> -->
          <ul>
            <li>Defragmentuje duże pliki, aby przyspieszyć prędkość odczytu / zapisu dysku i poprawić trwałość dysku.</li>
            <li>Monitoruje stan sterownika w czasie rzeczywistym: temperaturę, użycie, autokontrolę raportu, analizę dysku itp.</li>
          </ul>
        </div>
      </div>
      <div class="gifts-giveway gifts-giveway3">
        <div class="gifts-box"></div>
        <div class="gifts-text">
          <!-- <h4>Protected Folder <b>0zł</b> <del>39,99zł</del> <span>(1 an / 1 PC)</span></h4> -->
          <ul>
            <li>Chroń swoje pliki osobiste i trzymaj je z dala od złośliwych ataków!</li>
            <li>Nie martw się o kradzież danych lub wyciek prywatności!</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- end gifts -->
  <div class="gifts-store">
    <div class="gifts-store-arrow"></div>
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=pl-imf83pcsdpfiu89&ref=pl_imf83pcsdpfiu89purchase2011<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas2011-pl');"> <i class="all-icons"></i>Ciesz się tym teraz</a>
    </dd>
  </div>

  <!-- h-list -->
  <div class="h-list">
    <div class="title">
      <h2>IObit Malware Fighter 8 PRO potrafi jeszcze więcej niż Twoja poprzednia wersja!</h2>
      <img src="<?php echo getStaticUrl('images/b-border.png') ?>" alt="">
    </div>
    <div class="sw">
      <div class="cont">
        <ul>
          <li>
            <img src="<?php echo getStaticUrl('images/icon1.png') ?>" alt="">
            <h4>Większa baza danych</h4>
            <p>Dzięki 100% większej bazie danych złośliwego oprogramowania wszystkie zagrożenia są wykrywane.</p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/icon2.png') ?>" alt="">
            <h4>Inteligentniejszy</h4>
            <p>Dzięki zaawansowanej heurystyce jesteś chroniony nawet przed nowymi wariantami wirusów.</p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/icon3.png') ?>" alt="">
            <h4>Szybszy</h4>
            <p>Skanuje komputer o 50% szybciej, aby zaoszczędzić dużo czasu.</p>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/icon4.png') ?>" alt="">
            <h4>Bezpieczne e-maile</h4>
            <p>Teraz IObit Malware Fighter chroni również Twoją pocztę e-mail przed spamem, phishingiem i złośliwymi linkami.</p>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- end h-list -->


  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2>Wersja PRO zapewnia pełniejszą ochronę!</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-a">
            <p>Twoja aktualna wersja</p>
          </th>
          <th class="item-b"></th>
          <th class="item-c">
            <p>IObit Malware Fighter 8 PRO</p>
          </th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-a">9 millionów</td>
          <td class="item-b">Baza danych anty-malware</td>
          <td class="item-c">ponad 209 millionów</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i></td>
          <td class="item-b">Silniki antywirusowe Bitdefender</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i></td>
          <td class="item-b">Silnik anty-ransomware</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i></td>
          <td class="item-b">Ochrona kamery internetowej</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i></td>
          <td class="item-b">Ochrona przed śledzeniem</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i></td>
          <td class="item-b">Ochrona USB</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i></td>
          <td class="item-b">Wrażliwe dane chronione hasłem</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i></td>
          <td class="item-b">Ochrona w czasie rzeczywistym</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i></td>
          <td class="item-b">Automatyczna aktualizacja</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2>
      Zobacz, co mówią użytkownicy, którzy używają IObit Malware Fighter Pro do
      <br>
      ochrony swojego komputera</h2>
    <div class="content">
      <div class="details">
        <div class="active">
          <h4>Recenzje mediów</h4>
          <p>„Kilka lat temu ktoś zwrócił moją uwagę na IObit Malware Fighter. Najpierw byłem sceptycznie nastawiony. Jednak po zainstalowaniu stał się on moim ulubionym programem przeciwko złośliwemu oprogramowaniu. Jest bardzo łatwy w użyciu. Przez lata udało mu się wykryć i usunąć wiele zagrożeń. We współpracy z innymi programami IObit, takimi jak na przykład ASC, mam zapewnioną dobrą ochronę komputera. Teraz polecam te programy wszystkim moim znajomym i rodzinie”.</p>
          <h5>Software Informer</h5>
        </div>
        <div>
          <h4>Recenzja użytkownika</h4>
          <p>„Program wykorzystuje dwa silniki AV, własny oraz BitDefender. Program wydaje się skutecznie działać przeciwko szkodliwemu oprogramowaniu, które nie może zostać wykryte przez inne podobnie działające programy. Bardzo dobrze, że może działać razem ze standardowym oprogramowaniem AV. Może wykryć szeroki zakres programów szpiegujących, ransomware, adware, trojanów, robaków, keyloggerów i botów.”</p>
          <h5>Bob Bassett</h5>
        </div>
        <div>
          <h4>Recenzja użytkownika</h4>
          <p>„Program wykorzystuje dwa silniki AV, własny oraz BitDefender. Program wydaje się skutecznie działać przeciwko szkodliwemu oprogramowaniu, które nie może zostać wykryte przez inne podobnie działające programy. Bardzo dobrze, że może działać razem ze standardowym oprogramowaniem AV. Może wykryć szeroki zakres programów szpiegujących, ransomware, adware, trojanów, robaków, keyloggerów i botów.”</p>
          <h5>Peter Stoffers</h5>
        </div>
        <div>
          <h4>Recenzja użytkownika</h4>
          <p>„Używaliśmy do kilkunastu różnych programów, aby nasze komputery działały bezproblemowo i trzymały hakerów z dala. Utrzymanie bezpieczeństwa i wydajności każdego tygodnia zajmowało dużo czasu. Teraz, dzięki IObit Malware Fighter Pro i Advanced SystemCare Pro, wszystko jest w jednym miejscu i wystarczy tylko kilka minut tygodniowo, aby zabezpieczyć i zoptymalizować nasze komputery. Od kiedy używamy waszych programów, nie mamy już żadnych problemów z komputerem”.</p>
          <h5>Gelu Batir</h5>
        </div>
        <div>
          <h4>Recenzja użytkownika</h4>
          <p>„Jestem bardzo zadowolony z waszego produktu IObit Maleware Fighter. Przed zakupieniem tego produktu, miałem wiele problemów ze złośliwymi zakłóceniami, nie byłem w stanie obejrzeć całego filmu lub koncertu, co bardzo lubię robić. Dzięki waszemu programowi, teraz każda operacja jest przejrzysta, bezpieczna i dobrze chroniona. Program skanuje mój laptop bez wpływu na jego wydajność. Poleciłem ten produkt dwóm moim znajomym”.</p>
          <h5>David Cassidy</h5>
        </div>
      </div>
      <ul>
        <a class="next nextbtn" href="javascript: nextFun();"></a>
        <li class="one"><img src="<?php echo getStaticUrl('images/software-informer.png') ?>" alt="Software Informer"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/bob-bassett.png') ?>" alt="Bob Bassett"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/peter-stoffers.png') ?>" alt="Gelu Batir"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/gelu-batir.png') ?>" alt="Gelu Batir"></li>

        <li class="five"><img src="<?php echo getStaticUrl('images/david-cassidy.png') ?>" alt="David Cassidy"></li>

      </ul>

      <!-- <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a> -->
    </div>
  </div>
  <!-- end review -->

  <div class="award">
    <div class="wrapper">
      <h2>Polecane również przez</h2>
      <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="Gelu Batir">
    </div>
  </div>



  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">KTO PIERWSZY, TEN LEPSZY !</h2>
    <!-- box -->
    <div class="wrapper bottom-buy-center">
      <div class="box fl">
        <div class="bottom-buyimg bottom-buy1"></div>
        <div class="bottom-buyimg bottom-buy2 on"></div>
        <div class="bottom-buyimg bottom-buy3"></div>
      </div>
      <!-- ul -->
      <ul class="fl">
        <li class="top">1 rok / 1 PC</li>
        <li class="active mid">1 rok / 3 PC + <small>prezenty</small></li>
        <li class="bot">1 rok / 3 PC</li>
      </ul>
      <!-- dl -->
      <dl class="fr">
        <dd>
          <p class="price"><b>89</b> <del>599,60zł</del></p>
        </dd>
        <dd>
          <a class="buybtn small" href="https://www.iobit.com/buy.php?product=pl-imf83pcsdpfiu89&ref=pl_imf83pcsdpfiu89purchase2011<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxmas2011-pl');">
            <i class="all-icons"></i> KUP TERAZ
          </a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
        <dd>
          <h3>Gwarancja satysfakcji</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Całkowicie bezpieczna płatność</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/service-client.png" alt=""></dt>
        <dd>
          <h3>Bezpłatne wsparcie techniczne 24/7</h3>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Uwaga:</dt>
        <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
        <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Wszelkie prawa zastrzeżone</p>
    </div>
  </div>
  <!-- end footer -->

  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>