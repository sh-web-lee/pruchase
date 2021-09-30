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
  $c_name = 'pldbxnovxr_p' . $date;
  $c_name_t='pldbxnovxr_t' . $date;
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


if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_db'))){
	$refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Oferta świąteczna, do 85% zniżki na Driver Booster PRO - ograniczona promocja IObit 2019</title>
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
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>AUTOMATYCZNIE AKTUALIZUJ WSZYSTKIE STEROWNIKI!</h1>
        <p>WIĘKSZA BAZA STEROWNIKÓW, BEZPIECZNIEJSZE AKTUALIZACJE, WIĘKSZA SKUTECZNOŚĆ I SZYBSZY KOMPUTER!</p>
      </div>
      <div class="left fl">
        <h4>OFERTA ŚWIĄTECZNA</h4>
        <h2>85% ZNIŻKI</h2>
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <div class="chart">
          <div class="clist one">
            <span class="cost"><strong>99,90 zł</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">12 listopada</span>
          </div>
          <div class="clist two">
            <span class="cost"><strong><big>79</big>,90zł</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="text">Zostało <b class="pickNum">39*</b> sztuk, pośpiesz się!</span>
          </div>
          <div class="clist three">
            <span class="cost"><strong>119,90 zł</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">14 listopada</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>79</big>,90 zł</strong> <del>549,70 zł</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-db73pcsdpf79&ref=pl_db73pcsdpf79purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_db "
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmas1911xr-pl');">
            KUP TERAZ
          </a>
        </div>
      </div>
    </div>
    <span class="snow snow01"></span>
    <span class="snow snow02"></span>
    <span class="snow snow03"></span>
    <span class="snow snow04"></span>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- map start -->
  <div class="map">
    <div class="wrapper">
      <h2>
        EKSKLUZYWNA BAZA DANYCH STEROWNIKÓW, ZAAWANSOWANA TECHNOLOGIA AKTUALIZACJI, <br>
        TWÓJ KOMPUTER BĘDZIE JESZCZE SPRAWNIEJSZY!
      </h2>
      <p>Ponad 10 milionów użytkowników na całym świecie wybrało Driver Booster PRO</p>
    </div>
  </div>
  <!-- map end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <img class="feature-db" src="<?php echo getStaticUrl('images/feature-db.png')?>" alt=""/>
    <dl class="one clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      <dd>
        <h3>AKTUALIZACJA STEROWNIKÓW JESZCZE <strong>SZYBSZA I PROSTSZA</strong></h3>
        <p>
          Driver Booster oferuje rozwiązanie automatycznej aktualizacji sterowników, <br>
          instaluje i aktualizuje sterowniki automatycznie w czasie bezczynności komputera.
        </p>
      </dd>
    </dl>
    <dl class="two clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      <dd>
        <h3><strong>BEZPIECZNA</strong> AKTUALIZACJA STEROWNIKÓW</h3>
        <p>
          Automatyczne tworzenie kopii zapasowych <br>
          przywracanie systemu przed aktualizacją, <br>
          na wypadek, gdyby coś poszło nie tak.
        </p>
      </dd>
    </dl>
    <dl class="three clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      <dd>
        <h3><strong>BARDZIEJ STABILNY</strong> SYSTEM</strong></h3>
        <p>
          Zawsze utrzymuj wszystkie sterowniki <br>
          zaktualizowane, aby system działał <br>
          sprawniej i stabilniej.
        </p>
      </dd>
    </dl>
    <dl class="four clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
      <dd>
        <h3><strong>100%* SZYBSZE</strong> POBIERANIE</h3>
        <p>
          Szybkość pobierania sterowników jest o 100% <br>
          szybsza niż w przypadku darmowej wersji.
        </p>
      </dd>
    </dl>
    <dl class="five clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
      <dd>
        <h3><strong>DOSKONAŁE WRAŻENIA</strong> Z GRY</h3>
        <p>
          Aktualizuje sterowniki graficzne i sterowniki Game Ready, <br>
          optymalizuje wydajność sprzętu i maksymalizuje wrażenia z gry.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper clearfix">
      <h2>PŁAĆ ZA 1 OTRZYMAJ 3!*</h2>
      <h3>WSZYSTKO CZEGO POTRZEBUJESZ JEST DOSTĘPNE ZA POMOCĄ JEDNEGO KLIKNIĘCIA!</h3>
      <dl class="sd">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"/>
        </dt>
        <dd>
          <h4>Smart Defrag PRO</h4>
          <strong>0 zł </strong> <del> 119,90 zł</del>
          <p>Oferuje najlepszą defragmentację dysku i maksymalnie przyspiesza jego prędkość! </p>
        </dd>
      </dl>
      <dl class="pf">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"/>
        </dt>
        <dd>
          <h4>Protected Folder</h4>
          <strong>0 zł </strong> <del> 149,90 zł</del>
          <p>Chroń swoje pliki osobiste i trzymaj je z dala od złośliwych ataków!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- gifts end -->

  <!-- centbuy start -->
  <div class="centbuy price wrapper">
    <p><strong>79,90 zł</strong> <del>549,70 zł</del></p>
    <p>ŚWIĄTECZNA CENA</p>
    <a class="buybtn"
       href="http://www.iobit.com/buy.php?product=pl-db73pcsdpf79&ref=pl_db73pcsdpf79purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_db "
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmas1911xr-pl');">
      KUP TERAZ
    </a>
    <p class="pick">Zostało tylko <b class="pickNum">39</b> sztuk, pośpiesz się!</p>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>NASZYCH UŻYTKOWNIKÓW MOŻESZ SPOTKAĆ WSZĘDZIE!</h2>
    <div class="reviewbox">
      <h3>Zobacz co o nas mówią</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund">
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/wayne_bowler.png')?>" alt="Wayne Bowler">
        </li>
        <li class="four"><img src="<?php echo getStaticUrl('images/myo_thuya.png')?>" alt="Myo Thuya"></li>
      </ul>
      <div class="details">
        <div>
          <h4>PC Magazine</h4>
          <p>
            „IObit ma w swojej ofercie wiele programów, a Driver Booster PRO, który automatycznie aktualizuje sterowniki, jest jednym z najlepszych. Prosta podstawowa funkcjonalność Driver Booster PRO jest jeszcze bardziej atrakcyjna dzięki połączeniu wielu licencji w bardzo przystępnej cenie. Zachwyca również konfigurowalny interfejs, który dobrze wyświetla specyficzne informacje związane ze sprzętem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferują atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle” - PC Magazine
          </p>
        </div>
        <div class="active">
          <h4>Adam Backlund</h4>
          <p>
            „Driver Booster jest niesamowitą aplikacją, szczególnie dla kogoś, kto ma wiele aplikacji i dysków, ale brakuje mu czasu na ich ręczną aktualizację. Zdecydowanie polecam Driver Booster, który pomoże zaktualizować sterowniki łatwo i szybko” - Adam Backlund
          </p>
        </div>
        <div>
          <h4>Wayne Bowler</h4>
          <p>
            „Jest to jeden z najlepszych programów do aktualizacji sterowników jaki istnieje. Microsoft zwiódł mnie na manowce, sugerując aktualizacje, które nie były kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo łatwy w obsłudze i intuicyjny, podaje też dużo istotnych informacji. Już zawsze będę go używać... Świetna robota!” - Wayne Bowler
          </p>
        </div>
        <div>
          <h4>Myo Thuya</h4>
          <p>
            „Dzięki Driver Booster mogę z łatwością sprawdzić, które sterowniki urządzeń są nieaktualne, a następnie łatwo je zaktualizować. Poza tym program pomaga mi naprawić błędy dźwięku, błędy sieci, błędy urządzeń itp. Z początku nie wierzyłem w działanie Driver Booster, ale po użyciu naprawdę mi się podoba. Mój komputer jest szybszy, bezpieczniejszy i nowszy niż 8 miesięcy temu... Dziękuję IObit”. - Myo Thuya
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>NAGRODY DRIVER BOOSTER</h2>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">Porównanie produktów: </th>
          <th class="space"></th>
          <th class="itema">
            <div class="pro">
              <h3> Wersja PRO<br> <big>AKTUALIZACJA</big></h3>
              <em class="all-icons smile"></em>
            </div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="free">
              <h3>Twoja obecna<br> <big>wersja</big></h3>
              <em class="all-icons"></em>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""/></td>
          <td class="virtue">Pobierz i zaktualizuj przestarzałe sterowniki jednym kliknięciem</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
          <td class="virtue">
            Odblokowuje maksymalną prędkość aktualizacji nowych sterowników <sup class="all-icons">Ulepszone</sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
          <td class="virtue vtop">
             <span>200% większa baza danych, aby zaktualizować znacznie więcej rzadkich i przestarzałych sterowników</span>
             <sup class="all-icons"></sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/></td>
          <td class="virtue">
            Wysoka wydajność pobierania, automatyczna aktualizacja i instalacja sterowników podczas bezczynności systemu
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""/></td>
          <td class="vtop">
            <span>Automatyczne tworzenie kopii zapasowych wszystkich sterowników w celu bezpiecznego odzyskiwania</span>
            <sup class="all-icons nov">Nuovo</sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""/></td>
          <td class="virtue">Aktualizacja priorytetowa urządzeń w celu ulepszenia wydajności gier</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon07.png')?>" alt=""/></td>
          <td class="virtue">
            Skuteczne wykrywanie i naprawianie błędów sterowników <sup class="all-icons">Ulepszone</sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
          <td class="virtue">Skuteczne wykrywanie i naprawianie błędów sterowników</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""/></td>
          <td class="virtue">Automatyczna aktualizacja do najnowszej wersji</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""/></td>
          <td class="virtue">Bezpłatne wsparcie techniczne 24/7 </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- bottombuy start -->
  <div class="bottombuy wrapper clearfix">
    <h2>NIGDY WIĘCEJ NIE MIEJ PROBLEMÓW Z KOMPUTEREM!</h2>
    <div class="left fl"><img src="<?php echo getStaticUrl('images/bottombuy-db.png')?>" alt=""/></div>
    <div class="right price fr">
      <p><strong>79,90 zł</strong> <del>549,70 zł</del></p>
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=pl-db73pcsdpf79&ref=pl_db73pcsdpf79purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_db "
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmas1911xr-pl');">
        KUP TERAZ
      </a>
      <p>TYLKO DZIŚ, POŚPIESZ SIĘ!</p>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h3>Gwarancja satysfakcji</h3>
            <p>60-dniowa gwarancja zwrotu pieniędzy</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/secure.png')?>" alt=""></dt>
          <dd>
            <h3>Zabezpieczenie płatności</h3>
            <p>Twoja płatność jest w 100% bezpieczna</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""></dt>
          <dd>
            <h3>Szybka aktywacja</h3>
            <p>Kod licencyjny otrzymasz w ciągu kilku minut po zakupie</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dt>
          <dd>
            <h3>Obsługa klienta</h3>
            <p>Bezpłatne wsparcie techniczne 24/7</p>
          </dd>
        </dl>
      </div>
      <dl class="note">
        <dt>Uwaga:</dt>
        <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
        <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów Prawa autorskie.</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
    </div>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>