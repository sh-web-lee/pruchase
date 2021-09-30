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
  $c_name = 'pldbxmas2020_p' . $date;
  $c_name_t='pldbxmas2020_t' . $date;
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Oferta świąteczna, do 88% zniżki na Driver Booster PRO - promocja IObit 2020</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
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
        <h2>ZAKTUALIZUJ WSZYSTKIE STEROWNIKI I KOMPONENTY GIER</h2>
        <h1>NIE PRZEGAP ŚWIĄTECZNEJ PROMOCJI</h1>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <div class="price">
            <p><strong>69,90 zł</strong></p>
            <p><b>11,65 zł</b> / 1 miesiąc</p>
            <p class="last">1 PC | 6 miesięcy</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-db81pc6m69&ref=pl_db81pc6m69purchase2011xr-i-u-t-e<?= $refStr; ?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmasxr2011-pl');">
              KUP TERAZ
            </a>
          </div>
        </div>
        <div class="offer bigbox">
          <div class="superbox">
            <h3>ŚWIĄTECZNA PROMOCJA</h3>
            <p>
              Zostało tylko <span class="reduce reduce1">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> pakietów</p>
          </div>
          <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="">
          <b class="discount">-83<small>%</small></b>
          <div class="price">
            <p><strong>79,90 zł</strong> <del>609,60 zł</del></p>
            <p><b>7,49 zł</b> / 1 miesiąc</p>
            <p class="last"><span>3 PC</span> | 1 rok</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-db83pcsdpfisu79&ref=pl_db83pcsdpfisu89purchase2011xr-i-u-t-e<?= $refStr; ?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmasxr2011-pl');">
              KUP TERAZ
            </a>
          </div>
        </div>
        <div class="offer right">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <b class="discount">-63<small>%</small></b>
          <div class="price">
            <p><strong>79,90 zł</strong> <del>229,90 zł</del></p>
            <p><b>7,07 zł</b> / 1 miesiąc</p>
            <p class="last">1 PC | 1 rok</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pl-db81pc79&ref=pl_db81pc84purchase2011xr-i-u-t-e<?= $refStr; ?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmasxr2011-pl');">
              KUP TERAZ
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
<div class="payment-bg">
  <div class="pay-miliony">
    <!-- payment start -->
    <div class="payment wrapper clearfix">
      <dl>
        
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
        <dt>Akceptowane płatności</dt>
      </dl>
      <dl>
        
        <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
        <dt>Gwarancja zwrotu pieniędzy</dt>
      </dl>
      <dl class="last">
        
        <dd><img src="<?php echo getStaticUrl('images/gooddy.png')?>" alt=""/></dd>
        <dt>Bezpieczna płatność</dt>
      </dl>
    </div>
    <!-- payment end -->
  </div>
</div>
  

  <!-- feature start -->
  <div class="feature ">
    <div class="wrapper">
      <h2>Tylko w Driver Booster PRO</h2>
      <div class="img-box">

      </div>
      <div class="message">
        <dl class="active">
          <dt><i></i></dt>
          <dd>
            <strong>Automatycznie</strong>
            <p>aktualizuj sterowniki i już nigdy nie martw  <br> się o wydajność swojego komputer</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><i></i></dt>
          <dd>
            <strong>Płynna gra</strong>
            <p>dzięki dostępowi do jeszcze <br> większej bazy komponentów gier</p>
          </dd>
        </dl>
        <dl class="three">
          <dt><i></i></dt>
          <dd>
            <strong>Gwarantowane bezpieczeństwo</strong>
            <p>komputera dzięki automatycznemu <br> tworzeniu kopi zapasowych sterowników</p>
          </dd>
        </dl>
        <dl class="four">
          <dt><i></i></dt>
          <dd>
            <strong>Idealne</strong>
            <p>dzialanie komputera, dzięki Driver Booster PRO, <br> który rozwiąże za Ciebie problemy sprzętowe</p>
          </dd>
        </dl>
      </div>
    </div>
    
    
  </div>
  <!-- feature end -->
  <div class="stepbox">
    <div class="wrapper">
      <h2>Dlaczego warto wybrać Driver Booster PRO?</h2>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/step-01.png')?>" alt="">
        <strong>
          Baza danych ponad <br> 4 500 000 sterowników
        </strong>
        <p>
           Wykryj i aktualizuj rzadkie, niedopasowane i przestarzałe sterowniki i <b>ciesz sie wydajnym i szybkim komputerem.</b>
        </p>
      </div>
      <div class="box big">
        <img src="<?php echo getStaticUrl('images/step-02.png')?>" alt="">
        <strong>
        Automatyczna, szybka i bezpieczna aktualizacja   sterowników
        </strong>
        <p>
         <b>Aktualizuj sterowniki automatycznie</b> podczas bezczynności systemu
        </p>
      </div>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/step-03.png')?>" alt="">
        <strong>
        Lepsza wydajność gier
        </strong>
        <p>
        Zaktualizuj sterowniki Game Ready oraz najnowsze i niezbędne komponenty gier, aby cieszyć się <b>szybszym i płynniejszym graniem.</b>
        </p>
      </div>
    </div>
  </div>

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Szybszy, wydajniejszy i bezpieczniejszy komputer <br> dzieki DARMOWYM prezentom</h2>
      <div class="clearfix">
        <div class="gift-list">
          <img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt=""/>
          <p><strong>0 zł</strong> <del>119,90 zł</del></p>
          <ul>
            <li>1-kliknięcie, aby zaktualizować programy </li>
            <li>Pobierz przydatne narzędzia do pracy zdalnej</li>
            <li>Usuwania plików instalacyjnych po instalacji</li>
          </ul>
        </div>
        <div class="gift-list">
          <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""/>
          <p><strong>0 zł</strong> <del>119,90 zł</del></p>
          <ul>
            <li>Maksymalna wydajność dysku</li>
            <li>Szybszy dostęp do plików</li>
            <li>Zwiększona wydajność gier</li>
          </ul>
        </div>
        <div class="gift-list">
          <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/>
          <p><strong>0 zł</strong> <del>149,90 zł</del></p>
          <ul >
            <li>Zabezpiecz dane hasłem</li>
            <li>Chroń pliki przed atakami</li>
            <li>Chroń prywatność</li>
          </ul>
        </div>
      </div>
      <a href="http://www.iobit.com/buy.php?product=pl-db83pcsdpfisu79&ref=pl_db83pcsdpfisu89purchase2011xr-i-u-t-e<?= $refStr; ?>&refs=pl_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmasxr2011-pl');" class="buybtn">KUP TERAZ</a>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Miliony użytkowników wybrały Driver Booster PRO</h2>
      <div class="ponad">
        <dl>
          <dt>200+</dt>
          <dd><b>Popularny</b> w ponad 200 <br>  krajach na całym świecie</dd>
        </dl>
        <dl>
          <dt>1,000+</dt>
          <dd><b>Ponad 1000 mediów </b> <br> doceniło Driver Booster</dd>
        </dl>
        <dl>
          <dt>2,500,000+</dt>
          <dd><b>Wybrany i rekomendowany </b> <br> przez ponad 250 milionów <br> użytkowników na całym świecie </dd>
        </dl>
        <dl>
          <dt>80%+</dt>
          <dd>Ponad 80% użytkowników Driver <br>  Booster <b>aktywowało wersję PRO</b></dd>
        </dl>
      </div>
      <div class="reviewbox clearfix">

        <div class="reviewlist">
          <ul>
            <li>
              <h3>PC Magazine</h3>
              <p>
                „IObit ma w swojej ofercie wiele programów, a Driver Booster PRO, który automatycznie aktualizuje sterowniki, jest jednym z najlepszych. Prosta podstawowa funkcjonalność Driver Booster PRO jest jeszcze bardziej atrakcyjna dzięki połączeniu wielu licencji w bardzo przystępnej cenie. Zachwyca również konfigurowalny interfejs, który dobrze wyświetla specyficzne informacje związane ze sprzętem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferują atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle”
              </p>
            </li>
            <li class="active">
              <h3>Adam Backlund</h3>
              <p>
                „Driver Booster jest niesamowitą aplikacją, szczególnie dla kogoś, kto ma wiele aplikacji i dysków, ale brakuje mu czasu na ich ręczną aktualizację. Zdecydowanie polecam Driver Booster, który pomoże zaktualizować sterowniki łatwo i szybko”
              </p>
            </li>
            <li>
              <h3>Wayne Bowler</h3>
              <p>
                „Jest to jeden z najlepszych programów do aktualizacji sterowników jaki istnieje. Microsoft zwiódł mnie na manowce, sugerując aktualizacje, które nie były kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo łatwy w obsłudze i intuicyjny, podaje też dużo istotnych informacji. Już zawsze będę go używać... Świetna robota!”
              </p>
            </li>
            <li>
              <h3>Myo Thuya</h3>
              <p>
                „Dzięki Driver Booster mogę z łatwością sprawdzić, które sterowniki urządzeń są nieaktualne, a następnie łatwo je zaktualizować. Poza tym program pomaga mi naprawić błędy dźwięku, błędy sieci, błędy urządzeń itp. Z początku nie wierzyłem w działanie Driver Booster, ale po użyciu naprawdę mi się podoba. Mój komputer jest szybszy, bezpieczniejszy i nowszy niż 8 miesięcy temu... Dziękuję IObit”
              </p>
            </li>
          </ul>
        </div>
        <div class="reviewuser">
          <span><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""/></span>
          <span class="active"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""/></span>
          <span><img src="<?php echo getStaticUrl('images/wayne_bowler.png')?>" alt=""/></span>
          <span><img src="<?php echo getStaticUrl('images/myo_thuya.png')?>" alt=""/></span>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->
  <div class="bottom-bg">
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
                <h3>Driver Booster <br> PRO</h3>
              </div>
            </th>
            <th class="space"></th>
            <th class="itemb">
              <div class="free">
                <h3>Driver Booster <br> FREE</h3>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""/></td>
            <td class="virtue">Pobierz i zaktualizuj przestarzałe sterowniki <b>jednym kliknięciem</b></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
            <td class="virtue">Odblokowuje <b>maksymalną prędkość</b> aktualizacji nowych sterowników </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
            <td class="virtue vtop">
              <b>200% większa baza danych,</b> aby zaktualizować znacznie więcej rzadkich i przestarzałych sterowników
            </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/></td>
            <td class="virtue">
              <b>Wysoka wydajność</b> pobierania, automatyczna aktualizacja i instalacja sterowników <br> podczas bezczynności systemu
            </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""/></td>
            <td class="virtue">
              <b>Automatyczne tworzenie kopii zapasowych</b> wszystkich sterowników w celu <br> bezpiecznego odzyskiwania
            </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""/></td>
            <td class="virtue">Aktualizacja priorytetowa urządzeń w celu <b>ulepszenia wydajności gier</b></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
            <td class="virtue"><b>Skuteczne wykrywanie i naprawianie</b> błędów sterowników</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""/></td>
            <td class="virtue"><b>Automatyczna aktualizacja</b> do najnowszej wersji</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""/></td>
            <td class="virtue"><b>Bezpłatne</b> wsparcie techniczne 24/7 </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>Driver Booster 8 PRO potrafi jeszcze <br> więcej niż Twoja poprzednia wersja!</h2>
        <dl class="on">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
          <dd>
            <h3>Offline Driver Updater</h3>
            <p>
            Zaktualizuj sterowniki sieciowe nawet bez połączenia z Internetem.
            </p>
          </dd>
        </dl>
        <dl class="on">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
          <dd>
            <h3>Wybierz priorytet aktualizacji</h3>
            <p>
            Wybierz, czy Driver Booster priorytetowo traktuje najnowsze, czy najbardziej stabilne sterowniki.
            </p>
          </dd>
        </dl>
        <dl class="on">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
          <dd>
            <h3>Szybszy</h3>
            <p>
            Dzięki 30% szybszej aktualizacji niż w poprzedniej wersji oszczędzasz jeszcze więcej czasu.
            </p>
          </dd>
        </dl>
        <dl class="last on">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
          <dd>
            <h3>Bezpieczniejszy</h3>
            <p>
            Dzięki ulepszonej kopii zapasowej sterowników nie musisz się martwić o żadne problemy podczas aktualizacji.
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- comparison end -->
    <div class="award">
      <h2>Nagrody z całego swiata</h2>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
  <!-- footerbuy start -->
  <div class="footerbuy">
    <div class="wrapper">
      <h2>Nie zwlekaj i usprawnij komputer już TERAZ</h2>
      <h3>Pospiesz się, zostało tylko 
        <span class="reduce reduce2">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> pakietów
        </h3>
      <div class="clearfix">
        <div class="imgbox fl">
          <img class="on" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="" />
          <img class="db" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
          <span class="discount on">-83<small>%</small></span>
        </div>
        <ul class="changelist fl">
          <li class="one on" data-num="1"><b>Driver Booster 1 rok / 3 PC + prezenty</b></li>
          <li class="two" data-num="2"><b>Driver Booster 1 rok / 3 PC</b></li>
          <li class="three" data-num="0"><b>Driver Booster 1 rok / 1 PC</b></li>
        </ul>
        <div class="price fr">
          <p><strong>89,90 zł</strong> <del>549,70 zł</del></p>
          <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-db83pcsdpfisu79&ref=pl_db83pcsdpfisu89purchase2011xr-i-u-t-e<?= $refStr; ?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmasxr2011-pl');">
            KUP TERAZ
          </a>
        </div>
      </div>
     
    </div>
  </div>
  <div class="footer">
    <div class="wrapper">
      <dl class="note">
          <dt>Uwaga:</dt>
          <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
          <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów.</dd>
          <dd>* Jeśli będziesz niezadowolony, to możesz anulować zakup w ciągu 60 dni bez żadnych opłat. Pieniądze zostaną automatycznie zwrócone na Twoje konto.</dd>
        </dl>
        <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
    </div>
  </div>
  <!-- footerbuy end -->

  <script>var refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>