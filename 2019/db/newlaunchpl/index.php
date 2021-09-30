<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reTime=15;
$reduceNum=103441325;
$sepStr=' ';
$buyNum = number_format(ceil(microtime_float()*1000/(1000*$reTime)) - $reduceNum,0,'.',$sepStr);

$refStr=empty($_GET['to'])?'':('-').$_GET['to'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zaoszczędź do 70% na Driver Booster PRO i otrzymaj dodatkowe prezenty za darmo!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <h1>Oferta specjalna najnowszej premiery</h1>
    <h2>70% ZNIŻKI na Driver Booster 8 PRO oraz 2 miesiące za darmo - specjalnie dla Ciebie!</h2>
    <div class="left-message">
      <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
      <p>
        <span>Oferta wygasa za</span>
        <strong>15</strong> Godz <strong>15</strong> min <strong>15</strong> sek <strong class="last">15</strong> ms
      </p>
    </div>
    <div class="right-message">
      <h3>Driver Booster 8 PRO - 3 PC, 1 rok <span>+ <br> Dodatkowe 2 miesiące za darmo</span> </h3>
      <p><i></i>Otrzymasz 200%<sup>*</sup> większą bazę danych</p>
      <p><i></i>Będziesz cieszyć się lepszą grą</p>
      <p><i></i>Otrzymasz bezpieczną aktualizację w 100%<sup>*</sup></p>
      <dl class="price">
        <dt><del>326,80 zł</del> <strong>89,90 zł</strong></dt>
        <dd>
          <a href="https://www.iobit.com/buy.php?product=pl-db83pc14m89&ref=pl_db8newlaunch14m<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=pl_purchase_db"
             onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchasenewlaunch14m-pl')"
             class="buybtn">
            KUP TERAZ
          </a>
        </dd>
        <dd>Kupiło go już ponad <span class="buyNum"><?php echo $buyNum;?></span> osób</dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- db-mesage start -->
<div class="db-message wrapper">
  <h2>Aktywując Driver Booster PRO, <br> zoptymalizujesz wydajność komputera</h2>
  <img src="<?php echo getStaticUrl('images/db-message.png')?>" alt="" class="img-box">
  <dl class="list01">
    <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
    <dd>
      <strong>Nie ma potrzeby aktualizacji pojedynczych sterowników</strong>
      Zapewnia kompleksowe rozwiązanie do wykrywania i <br> aktualizacji sterowników.
    </dd>
  </dl>
  <dl class="list02">
    <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
    <dd>
      <strong>Bezpieczne pobieranie i aktualizacja sterowników</strong>
      Automatyczna kopia zapasowa i tworzenie punktu <br> przywracania systemu sprzed aktualizacji, w przypadku <br> wystąpienia czegoś nieoczekiwanego.
    </dd>
  </dl>
  <dl class="list03">
    <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
    <dd>
      <strong>Koniec z nieoczekiwanymi <br> awariami systemu</strong>
      Zawsze miej zaktualizowane <br> wszystkie sterowniki i stabilny <br> komputer.
    </dd>
  </dl>
  <dl class="list04">
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
    <dd>
      <strong>200% * szybsze pobieranie</strong>
      Oszczędność czasu dzięki <br> pobieraniu w czasie bezczynności <br> systemu z prędkością zwiększoną <br> do 200% *.
    </dd>
  </dl>
  <dl class="list05">
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
    <dd>
      <strong>Gwarantowana najwyższa wydajność podczas gry</strong>
      Ogromna baza danych komponentów do gier, w tym Nvidia, Realtek, Intel, AMD, Broadcom, VIA, <br>
      Microsoft Visual C ++ 2017 Redistributable itd., zapewni płynne korzystanie z gier.
    </dd>
  </dl>
</div>
<!-- db-message end -->

<hr>

<!-- media start -->
<div class="media wrapper">
  <h2>Nagrody z całego świata</h2>
  <p>Dzięki zaufaniu i nagrodom tych przodujących światowych mediów w ciągu ostatnich czterech lat, jest to właściwy wybór.</p>
  <img src="<?php echo getStaticUrl('images/award.png')?>" alt="" />
</div>
<!-- media end -->

<!-- user-rev start -->
<div class="user-rev wrapper">
  <div class="content">
    <dl>
      <dd>
        <h3>Recenzja użytkownika</h3>
        <h4>
          „Dzięki Driver Booster mogę z łatwością sprawdzić, które sterowniki urządzeń są nieaktualne, a następnie łatwo je zaktualizować”
        </h4>
      </dd>
      <dd>
        „Poza tym program pomaga mi naprawić błędy dźwięku, błędy sieci, błędy urządzeń itp. Z początku nie wierzyłem w działanie Driver Booster, ale po użyciu naprawdę mi się podoba. Mój komputer jest szybszy, bezpieczniejszy i nowszy niż 8 miesięcy temu... Dziękuję IObit”.
      </dd>
    </dl>
    <dl class="active">
      <dd>
        <h3>Recenzje mediów</h3>
        <h4>
          „IObit ma w swojej ofercie wiele programów, a Driver Booster PRO, który automatycznie aktualizuje sterowniki, jest jednym z najlepszych”
        </h4>
      </dd>
      <dd>
        „Prosta podstawowa funkcjonalność Driver Booster PRO jest jeszcze bardziej atrakcyjna dzięki połączeniu wielu licencji w bardzo przystępnej cenie. Zachwyca również konfigurowalny interfejs, który dobrze wyświetla specyficzne informacje związane ze sprzętem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferują atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle”
      </dd>
    </dl>
    <dl>
      <dd>
        <h3>Recenzja użytkownika</h3>
        <h4>
          „Driver Booster jest niesamowitą aplikacją, szczególnie dla kogoś, kto ma wiele aplikacji i dysków, ale brakuje mu czasu na ich ręczną aktualizację”
        </h4>
      </dd>
      <dd>
        „Zdecydowanie polecam Driver Booster, który pomoże zaktualizować sterowniki łatwo i szybko”
      </dd>
    </dl>
    <dl>
      <dd>
        <h3>Recenzja użytkownika</h3>
        <h4>
          „Jest to jeden z najlepszych programów do aktualizacji sterowników jaki istnieje”
        </h4>
      </dd>
      <dd>
        „Microsoft zwiódł mnie na manowce, sugerując aktualizacje, które nie były kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo łatwy w obsłudze i intuicyjny, podaje też dużo istotnych informacji. Już zawsze będę go używać... Świetna robota!”
      </dd>
    </dl>
  </div>
  <ul class="users">
    <li>
      <img src="<?php echo getStaticUrl('images/myo_thuya.png')?>" alt="" />
      Myo Thuya
    </li>
    <li class="active">
      <img src="<?php echo getStaticUrl('images/pc.png')?>" alt="" />
     PC Magazine
    </li>
    <li>
      <img src="<?php echo getStaticUrl('images/adam_backlund.png')?>" alt="" />
      Adam Backlund
    </li>
    <li>
      <img src="<?php echo getStaticUrl('images/wayne_bowler.png')?>" alt="" />
      Wayne Bowler
    </li>
  </ul>
</div>
<!-- user-rev end -->

<!-- comparison start -->
<div class="comparison wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">
        Jakie masz korzyści jako użytkownik PRO?
      </th>
      <th class="itemb"><span class="bg">Driver Booster Free</span></th>
      <th class="itema"><span class="bg">Driver Booster Pro</span></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Automatyczna identyfikacja przestarzałych, brakujących i <br> niepoprawnych sterowników</td>
      <td class="itemb"><span class="all-icons blue">√</span></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Odblokowanie prędkości sterowników</td>
      <td class="itemb"><i class="all-icons close">√</i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Priorytetowa aktualizacja przestarzałych i nietypowych sterowników</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Zmniejszenie awarii systemu w celu zwiększenia wydajności</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Automatyczne pobieranie i instalacja sterowników w stanie <br> bezczynności systemu</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Automatyczna kopia zapasowa wszystkich sterowników dla <br> bezpiecznego odzyskiwania</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Przywilej aktualizowania składników gry dla lepszej gry</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Skuteczne wykrywanie i usuwanie błędów urządzenia</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Automatyczna aktualizacja do najnowszej wersji</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr class="last">
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Bezpłatne wsparcie techniczne w razie potrzeby, 24/7</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- footer start -->
<div class="footer">
  <div class="bottom">
    <div class="wrapper clearfix">
      <div class="bottombuy">
        <h3>Aktywuj wersję PRO teraz, aby pozbyć się frustrujących problemów z komputerem</h3>
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" width="250" class="img-box">
        <dl class="price">
          <dt><del>326,80 zł</del> <strong>89,90 zł</strong></dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=pl-db83pc14m89&ref=pl_db8newlaunch14m<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=pl_purchase_db"
               onclick="ga( 'send', 'event', 'dbbuy', 'buy', 'dbpurchasenewlaunch14m-pl')"
               class="buybtn">
              KUP TERAZ
            </a>
          </dd>
          <dd>Roczna subskrypcja / 3 PC</dd>
        </dl>
      </div>
      <dl class="moneyback">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <strong>ZERO RYZYKA dzięki naszej 60-dniowej gwarancji zwrotu pieniędzy</strong>
          Jesteśmy pewni, że wszystkie Twoje problemy ze sterownikami zostaną rozwiązane za pomocą aktywowanej edycji PRO. Teraz w przystępnej cenie.
        </dd>
      </dl>
      <ul class="clearfix">
        <li class="first">
          Akceptowane metody płatności
          <span><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></span>
        </li>
        <li class="two">
          Bezpieczna płatność
          <span><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></span>
        </li>
      </ul>
    </div>
  </div>
  <dl class="note wrapper">
    <dt>Uwaga:</dt>
    <dd>
      *. Dane mogą się różnić w zależności od systemu lub komputera.
    </dd>
    <dd>
      *.Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.
    </dd>
  </dl>
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
</div>
<!-- footer end -->
<script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&sepStr=<?php echo $sepStr;?>&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 15000);
      }
    });
  }
  setTimeout('getBuyNum()', 15000);
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>