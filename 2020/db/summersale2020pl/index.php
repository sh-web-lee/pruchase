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
  $c_name = 'pldbsummersale0621_p' . $date;
  $c_name_t='pldbsummersale0621_t' . $date;
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
  <title>Tylko TERAZ najnowszy Driver Booster PRO nawet 83% taniej! - IObit</title>
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
        <h2>ZAKTUALIZUJ WSZYSTKIE STEROWNIKI I KOMPONENTY GIER</h2>
        <h1>NIE PRZEGAP SPECJALNEJ OFERTY</h1>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <div class="price">
            <p><strong>69,90 zł</strong></p>
            <p><b>11,65 zł</b> / 1 miesiąc</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-db81pc6m69&ref=pl_db81pc6m69purchase2005<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbsummersale2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">1 PC / 6 miesięcy</p>
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
          <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="">
          <b class="discount">-83<small>%</small></b>
          <div class="price">
            <p><strong>89,90 zł</strong> <del>549,70 zł</del></p>
            <p><b>7,49 zł</b> / 1 miesiąc</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-db83pciupf89&ref=pl_db83pciupf89purchase2005<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbsummersale2020-pl');">
              KUP TERAZ
            </a>
            <p class="month"><b class="red">3 PC</b> / 1 rok</p>
          </div>
        </div>
        <div class="offer right">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <b class="discount">-63<small>%</small></b>
          <div class="price">
            <p><strong>84,90 zł</strong> <del>229,90 zł</del></p>
            <p><b>7,07 zł</b> / 1 miesiąc</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pl-db81pc84&ref=pl_db81pc84purchase2005<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbsummersale2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">1 PC / 1 rok</p>
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
          <dd>Ponad <b>1000</b> mediów doceniło<br> Driver Booster</dd>
        </dl>
        <dl class="three">
          <dt><h4>250 000 000+</h4></dt>
          <dd>Wybrany i rekomendowany<br> przez ponad <b>250 milionów</b><br> użytkowników na całym świecie</dd>
        </dl>
        <dl class="four">
          <dt><h4>80%+</h4></dt>
          <dd>Ponad <b>80%</b> użytkowników<br> Driver Booster aktywowało<br> wersję PRO</dd>
        </dl>
      </div>
    </div>
    <!-- miliony end -->
  </div>

  <!-- feature start -->
  <div class="feature wrapper">
    <h2>Zyskaj więcej z Driver Booster PRO</h2>
    <div class="feature-box one clearfix">
      <div class="textbox fl">
        <h3>Baza danych ponad<br> 4 500 000 sterowników</h3>
        <p>Wykryj i aktualizuj rzadkie, niedopasowane i przestarzałe sterowniki za pomocą jednego kliknięcia.</p>
      </div>
      <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/db-screesn01.png')?>" alt=""/></div>
    </div>
    <div class="feature-box two clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/db-screesn02.png')?>" alt=""/></div>
      <div class="textbox fr">
        <h3>Automatyczna, szybka i bezpieczna aktualizacja sterowników</h3>
        <p>Aktualizuj sterowniki automatycznie podczas bezczynności systemu. Poprzednie sterowniki zostaną archiwizowane w przypadku niespodziewanych zdarzeń.</p>
      </div>
    </div>
    <div class="feature-box three clearfix">
      <div class="textbox fl">
        <h3>Lepsza wydajność gier</h3>
        <p>Zaktualizuj sterowniki Game Ready oraz najnowsze i niezbędne komponenty gier, aby cieszyć się szybszym i płynniejszym graniem.</p>
      </div>
      <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/db-screesn03.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- feature end -->

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
        <h3>Driver Booster PRO + prezenty</h3>
        <p><strong>89,90 zł</strong> <del>549,70 zł</del></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-db83pciupf89&ref=pl_db83pciupf89purchase2005<?php echo $refStr;?>&refs=pl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbsummersale2020-pl');">
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
          <span class="one"><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""/></span>
          <span class="three"><img src="<?php echo getStaticUrl('images/wayne_bowler.png')?>" alt=""/></span>
          <span class="four"><img src="<?php echo getStaticUrl('images/myo_thuya.png')?>" alt=""/></span>
        </div>
        <div class="reviewlist fr">
          <ul>
            <li>
              <h3>PC Magazine</h3>
              <p>
                „IObit ma w swojej ofercie wiele programów, a Driver Booster PRO, który automatycznie aktualizuje sterowniki, jest jednym z najlepszych. Prosta podstawowa funkcjonalność Driver Booster PRO jest jeszcze bardziej atrakcyjna dzięki połączeniu wielu licencji w bardzo przystępnej cenie. Zachwyca również konfigurowalny interfejs, który dobrze wyświetla specyficzne informacje związane ze sprzętem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferują atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle”
              </p>
            </li>
            <li>
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
          <td class="virtue">Pobierz i zaktualizuj przestarzałe sterowniki jednym kliknięciem</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
          <td class="virtue">Odblokowuje maksymalną prędkość aktualizacji nowych sterowników </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
          <td class="virtue vtop">
             <span  style="display: inline-block; padding-left: 6px;">200% większa baza danych, aby zaktualizować znacznie więcej rzadkich i przestarzałych sterowników</span>
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
            <span style="display: inline-block; padding-left: 6px;"> Automatyczne tworzenie kopii zapasowych wszystkich sterowników w celu bezpiecznego odzyskiwania</span>
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

  <!-- footerbuy start -->
  <div class="footerbuy">
    <div class="wrapper">
      <h2>Nie zwlekaj i usprawnij komputer już TERAZ!</h2>
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
             href="http://www.iobit.com/buy.php?product=pl-db83pciupf89&ref=pl_db83pciupf89purchase2005<?php echo $refStr;?>&refs=pl_purchase_db "
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbsummersale2020-pl');">
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