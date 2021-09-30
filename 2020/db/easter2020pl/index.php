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
  $c_name = 'pldbeaster_p' . $date;
  $c_name_t='pldbeaster_t' . $date;
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


$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
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
  <title>Wielka wielkanocna promocja na najnowszy Driver Booster PRO! - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600&display=swap" rel="stylesheet">
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
        <h1>NIE PRZEGAP SPECJALNEJ PROMOCJI</h1>
        <p id="topcount" class="countdown">Oferta ograniczona czasowo, zostało <strong>00</strong> godz. <strong>00</strong> min <strong>00</strong> sek </p>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <div class="discount"><big>63%</big> zniżki</div>
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <div class="price">
            <p><del>229,90 zł</del> <strong>84,90 zł</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pl-db71pc84&ref=pl_db71pc84purchase2003<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbeaster2020-pl');">
              KUP TERAZ
            </a>
            <p>1 rok / 1 komputer</p>
          </div>
        </div>
        <div class="offer bigbox">
          <div class="discount"><big>85%</big> zniżki</div>
          <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="">
          <div class="price">
            <p><del>639,80 zł</del> <strong>89,90 zł</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pl-db73pcsdpfamc89&ref=pl_db73pcsdpfamc89purchase2003<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbeaster2020-pl');">
              KUP TERAZ
            </a>
            <p>1 rok / 3 komputery</p>
          </div>
        </div>
        <div class="offer right">
          <div class="discount"><big>67%</big> zniżki</div>
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <div class="price">
            <p><del>279,90 zł</del> <strong>89,90 zł</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pl-db73pc89&ref=pl_db73pc89purchase2003<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbeaster2020-pl');">
              KUP TERAZ
            </a>
            <p>1 rok / 3 komputery</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

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

  <!-- feature start -->
  <div class="feature wrapper">
    <h2>Zwiększ wydajność pracy komputera i gier z najnowszym<br> Driver Booster PRO!</h2>
    <div class="clearfix panel">
      <dl class="list one">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
        <dd>
          <h3>DOSKONAŁE WRAŻENIA Z GRY </h3>
          <p>
            Aktualizuje sterowniki graficzne i sterowniki Game Ready,<br> optymalizuje wydajność sprzętu i maksymalizuje wrażenia z gry.
          </p>
        </dd>
      </dl>
      <dl class="list two">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
        <dd>
          <h3>BEZPIECZNA aktualizacja sterowników</h3>
          <p>
            Automatyczne tworzenie kopii zapasowych przywracanie systemu<br> przed aktualizacją, na wypadek, gdyby coś poszło nie tak.
          </p>
        </dd>
      </dl>
      <dl class="list three">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
        <dd>
          <h3>BARDZIEJ STABILNY system</h3>
          <p>
            Zawsze utrzymuj wszystkie sterowniki<br> zaktualizowane, aby system działał<br> sprawniej i stabilniej.
          </p>
        </dd>
      </dl>
      <dl class="list four">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
        <dd>
          <h3>Do 100% SZYBSZE pobieranie</h3>
          <p>
            Szybkość pobierania sterowników jest o 100%<br> szybsza niż w przypadku darmowej wersji.
          </p>
        </dd>
      </dl>
      <dl class="list five">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
        <dd>
          <h3>Jeszcze SZYBSZA i PROSTSZA aktualizacja sterowników</h3>
          <p>
            Driver Booster oferuje rozwiązanie automatycznej aktualizacji sterowników,<br> instaluje i aktualizuje sterowniki automatycznie w czasie bezczynności komputera.
          </p>
        </dd>
      </dl>
      <img class="screen" src="<?php echo getStaticUrl('images/screen.png')?>" alt="">
    </div>
  </div>
  <!-- feature end -->

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Zgarnij wielkanocne prezenty!</h2>
      <div class="sdpfamc">
        <div class="gift-list clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"></dt>
            <dd>
              <h4>Smart Defrag 6 PRO</h4>
              <span>1 rok / 1 PC <del>119.90 zł</del></span>
              <p>Oferuje wydajną defragmentację dysku i przyspiesza jego prędkość!</p>
            </dd>
          </dl>
          <dl class="center">
            <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"></dt>
            <dd>
              <h4>Protected Folder</h4>
              <span>1 rok / 1 PC <del>149.90 zł</del></span>
              <p>Chroń swoje pliki osobiste i trzymaj je z dala od złośliwych ataków!</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="AMC Security"></dt>
            <dd>
              <h4>AMC Security</h4>
              <span>1 rok / wiele urządzeń <del>89.90 zł</del></span>
              <p>Pozbądź się niepotrzebnych plików oraz przyspiesz pracę urządzenia mobilnego!</p>
            </dd>
          </dl>
        </div>
        <h5>Driver Booster PRO + darmowe prezenty</h5>
        <div class="price">
          <p><strong>89,90 zł</strong> <del>639,80 zł</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pl-db73pcsdpfamc89&ref=pl_db73pcsdpfamc89purchase2003<?php echo $refStr;?>&refs=pl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbeaster2020-pl');">
            KUP TERAZ
          </a>
        </div>
        <p id="giftcount" class="countdown"><strong>00</strong> godz. <strong>14</strong> min <strong>59</strong> sek</p>
      </div>

      <div class="giftdb clearfix">
        <img class="db fl" src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
        <div class="price fl">
          <p><strong>89,90 zł</strong> <del>279,90 zł</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pl-db73pc89&ref=pl_db73pc89purchase2001<?php echo $refStr;?>&refs=pl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbfebsale2020-pl');">
            KUP TERAZ
          </a>
          <p>1 rok / 3 komputery</p>
        </div>
      </div>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- miliony start -->
  <div class="miliony">
    <div class="wrapper clearfix">
      <h2>Zaufały mu miliony</h2>
      <dl>
        <dt><h4>200+</h4></dt>
        <dd>Popularny w ponad <b>200</b> krajach<br> na całym świecie</dd>
      </dl><dl>
        <dt><h4>1,000+</h4></dt>
        <dd>Ponad <b>1000</b> mediów doceniło<br> Driver Booster</dd>
      </dl><dl>
        <dt><h4>250,000,000+</h4></dt>
        <dd>Wybrany i rekomendowany<br> przez ponad <b>250 milionów</b> użytkowników na całym świecie</dd>
      </dl><dl>
        <dt><h4>80%+</h4></dt>
        <dd>Ponad <b>80%</b> użytkowników<br> Driver Booster aktywowało<br> wersję PRO</dd>
      </dl>
    </div>
  </div>
  <!-- miliony end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
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
          <div class="pc">
            <h4>PC Magazine</h4>
            <p>
              „IObit ma w swojej ofercie wiele programów, a Driver Booster PRO, który automatycznie aktualizuje sterowniki, jest jednym z najlepszych. Prosta podstawowa funkcjonalność Driver Booster PRO jest jeszcze bardziej atrakcyjna dzięki połączeniu wielu licencji w bardzo przystępnej cenie. Zachwyca również konfigurowalny interfejs, który dobrze wyświetla specyficzne informacje związane ze sprzętem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferują atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle”
            </p>
          </div>
          <div class="active">
            <h4>Adam Backlund</h4>
            <p>
              „Driver Booster jest niesamowitą aplikacją, szczególnie dla kogoś, kto ma wiele aplikacji i dysków, ale brakuje mu czasu na ich ręczną aktualizację. Zdecydowanie polecam Driver Booster, który pomoże zaktualizować sterowniki łatwo i szybko”
            </p>
          </div>
          <div>
            <h4>Wayne Bowler</h4>
            <p>
              „Jest to jeden z najlepszych programów do aktualizacji sterowników jaki istnieje. Microsoft zwiódł mnie na manowce, sugerując aktualizacje, które nie były kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo łatwy w obsłudze i intuicyjny, podaje też dużo istotnych informacji. Już zawsze będę go używać... Świetna robota!”
            </p>
          </div>
          <div>
            <h4>Myo Thuya</h4>
            <p>
              „Dzięki Driver Booster mogę z łatwością sprawdzić, które sterowniki urządzeń są nieaktualne, a następnie łatwo je zaktualizować. Poza tym program pomaga mi naprawić błędy dźwięku, błędy sieci, błędy urządzeń itp. Z początku nie wierzyłem w działanie Driver Booster, ale po użyciu naprawdę mi się podoba. Mój komputer jest szybszy, bezpieczniejszy i nowszy niż 8 miesięcy temu... Dziękuję IObit”
            </p>
          </div>
        </div>
        <a class="next" href="javascript: nextFun();"></a>
        <a class="prev" href="javascript: prevFun();"></a>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <h2>Zyskaj więcej dzięki Driver Booster PRO </h2>
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">Porównanie produktów: </th>
          <th class="space"></th>
          <th class="itema">
            <div class="pro">
              <h3>Driver Booster <br> <big>PRO</big></h3>
              <em class="all-icons smile"></em>
            </div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="free">
              <h3>Driver Booster <br> <big>FREE</big></h3>
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
             <span  style="display: inline-block; padding-left: 6px;">200% większa baza danych, aby zaktualizować znacznie więcej rzadkich i przestarzałych sterowników <sup class="all-icons"></sup></span>
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
            <span style="display: inline-block; padding-left: 6px;"> Automatyczne tworzenie kopii zapasowych wszystkich sterowników w celu bezpiecznego odzyskiwania <sup class="all-icons nov">Nuovo</sup></span>
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
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
          <td class="virtue">
            Skuteczne wykrywanie i naprawianie błędów sterowników <sup class="all-icons">Ulepszone</sup>
          </td>
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
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img class="db" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
        <img class="on" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="" />
        <img class="db" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
      </div>
      <ul class="changelist fl">
        <li class="one"><b>Driver Booster 1 rok / 3 PC</b></li>
        <li class="two on"><b>Driver Booster 1 rok / 3 PC + prezenty</b></li>
        <li class="three"><b>Driver Booster 1 rok / 1 PC</b></li>
      </ul>
      <div class="price fr">
        <p><del class="origain">639,80 zł</del>  <strong class="discount">89,90 zł</strong></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pl-db73pcsdpfamc89&ref=pl_db73pcsdpfamc89purchase2003<?php echo $refStr;?>&refs=pl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbeaster2020-pl');">
          KUP TERAZ
        </a>
        <p id="bottomcount" class="countdown"><strong>00</strong> godz. <strong>14</strong> min <strong>59</strong> sek</p>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <dl class="note">
        <dt>Uwaga:</dt>
        <dd>1. Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami. </dd>
        <dd>2. Dane mogą się różnić w zależności od systemu lub komputera.</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
    </div>
  </div>
  <!-- footer end -->

  <script>var _src = "<?php echo getStaticUrl('images/db-box-sold.png')?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>