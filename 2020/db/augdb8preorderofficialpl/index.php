<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'pldbofficial_p' . $date;
  $c_name_t='pldbofficial_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Zdobądź najnowszy Driver Booster PRO za 0 zł</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>Ruszyła przedsprzedaż</p>
          <h2>Najlepszy aktualizator sterowników</h2>
          <h4>Zapewnia płynniejszy komputer i szybszą grę</h4>
          <div class="price">
            <span>Cenaw  <br> przedpsrzedaży: </span>
            <strong>0 zł<sup>*</sup></strong>
            <a href="https://www.iobit.com/buy.php?product=pl-db8preorder&ref=pl_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-pl');" class="buybtn">Kup w przedsprzedaży</a>
          </div>
          <div class="numbox">
            <h3>
              Zostało 
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
            </h3>
            <div class="bar">
               <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="feature">
    <div class="message01 wrapper">
      <div class="title">
        <h2>Ponad 4,500,000 sterowników</h2>
        <h4>Największa baza sterowników Driver Booster</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png')?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png')?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png')?>" alt="" class="icon02">
        </li>
         <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png')?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt>Automatyczna aktualizacja sterowników <span>WHQL</span></dt>
          <dd>Automatycznie wyszukuj i aktualizuj najbardziej dopasowane sterowniki z certyfikatem WHQL.</dd>
        </dl>
        <dl>
          <dt>Stabilny sterownik VS najnowszy sterownik  <span class="market">unikalny na rynku</span></dt>
          <dd>Wybierz rodzaj sterowniki w zależności od preferencji, stabilny gwarantuje niezawodność, a najnowszy wsparcie dla najnowszych funkcji.</dd>
        </dl>
        <dl class="three">
          <dt>Napraw problemy ze sprzętem </dt>
          <dd>Zapewnij rozwiązanie 1-kliknięciem, aby rozwiązać problemy związane ze słabą jakością wideo, niewyraźnym dźwiękiem, zerwaniem połączenia internetowego i niedziałającym urządzeniem zewnętrznym.</dd>
        </dl>
        <dl>
          <dt>Aktualizacja sterowników offline  </dt>
          <dd>Zainstaluj sterowniki sieciowe bez połączenia z Internetem. Pobierz odpowiedni sterownik sieciowy na jeden komputer, a następnie przenieś go na inny.</dd>
        </dl>
      </div>
    </div>
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Sterowniki Game Ready & Komponenty</h2>
        <h4>Optymalizacja pod kątem 90% gier komputerowych</h4>
      </div>
      <div class="line"></div>
      <dl class="message-box">
        <dt class="one" data-name='default'>Płynniejsza gra </dt>
        <dd class="one" data-name='default'>Zapewnij najnowsze sterowniki i komponenty do gry w celu zmniejszenia opóźnień komputera lub zrywania ekranu i obsługi nowych funkcji gry.</dd>
        <dt class="two" data-name='default'>Game Boost</dt>
        <dd class="two" data-name='default'>Zatrzymaj niepotrzebne usługi, aby poprawić szybkość komputera i uzyskać lepsze wrażenia z gry.</dd>
      </dl>
      <div class="img-box">
        <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="computer three" data-name='default'>
        <span class="light four" data-name='default'></span>
        <span class="smail-light"></span>
        <img src="<?php echo getStaticUrl('images/feature-icon.png')?>" alt="" class="icon five" data-name='default'>
      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Ciesz się z funkcji dostępnych tylko w PRO</h2>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <h3>Bezpieczna aktualizacja</h3>
            <p>Automatyczne tworzenie kopii zapasowych sterowników i tworzenie punktu przywracania systemu.</p>
          </dd>
        </dl>
        <dl class="center two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt="" ></dt>
          <dd>
            <h3>Tryb cichy</h3>
            <p>Automatycznie wycisz wszystkie powiadomienia, aby przestały przeszkadzać.</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt="" ></dt>
          <dd>
            <h3>Automatyczne usuwanie</h3>
            <p>Automatyczne usuwanie zainstalowanego pakietu sterowników.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>Najpopularniejszy program do aktualizacji sterowników na świecie</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40 mln+</strong>
          pobrań 
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          ocena użytkowników 
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          rekomendacji mediów 
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Recenzja mediów</dt>
              <dd>
                „IObit ma w swojej ofercie wiele programów, a Driver Booster PRO, który automatycznie aktualizuje sterowniki, jest jednym z najlepszych. Prosta podstawowa funkcjonalność Driver Booster PRO jest jeszcze bardziej atrakcyjna dzięki połączeniu wielu licencji w bardzo przystępnej cenie. Zachwyca również konfigurowalny interfejs, który dobrze wyświetla specyficzne informacje związane ze sprzętem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferują atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle”
              </dd>
            </dl>
            <dl>
              <dt>Recenzja użytkownika</dt>
              <dd>„Driver Booster jest niesamowitą aplikacją, szczególnie dla kogoś, kto ma wiele aplikacji i dysków, ale brakuje mu czasu na ich ręczną aktualizację. Zdecydowanie polecam Driver Booster, który pomoże zaktualizować sterowniki łatwo i szybko”</dd>
            </dl>
            <dl>
              <dt>Recenzja użytkownika</dt>
              <dd>„Jest to jeden z najlepszych programów do aktualizacji sterowników jaki istnieje. Microsoft zwiódł mnie na manowce, sugerując aktualizacje, które nie były kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo łatwy w obsłudze i intuicyjny, podaje też dużo istotnych informacji. Już zawsze będę go używać... Świetna robota!”</dd>
            </dl>

            <dl>
              <dt>Recenzja użytkownika</dt>
              <dd>„Dzięki Driver Booster mogę z łatwością sprawdzić, które sterowniki urządzeń są nieaktualne, a następnie łatwo je zaktualizować. Poza tym program pomaga mi naprawić błędy dźwięku, błędy sieci, błędy urządzeń itp. Z początku nie wierzyłem w działanie Driver Booster, ale po użyciu naprawdę mi się podoba. Mój komputer jest szybszy, bezpieczniejszy i nowszy niż 8 miesięcy temu... Dziękuję IObit”</dd>
            </dl>

          </div>
        </div>
        <ul>
           <li>
            <div><img src="<?php echo getStaticUrl('images/myo_thuya.png')?>" alt="Myo Thuya"></div>
            <p>Myo Thuya</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></div>
            <p>Adam Backlund</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/wayne_bowler.png')?>" alt="Wayne Bowler"></div>
            <p>Wayne Bowler</p>
          </li>
           
        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Nagrody z całego świata</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Uwaga:</dt>
      <dd>
        *Pod koniec 30-dniowego bezpłatnego okresu próbnego Twoja karta kredytowa lub konto PayPal zostanie automatycznie obciążone kwotą 79,90 zł. Ten 70% rabat od pierwotnej ceny 299,90 zł jest bonusem tylko w przypadku zamówień w przedsprzedaży!
      </dd>
      <dd>*Jeśli nie jesteś zadowolony, możesz anulować złożone zamówienie w ciągu 30 dni bez uiszczania opłaty.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        dostępnych z 1000
      </h3>
    </div>
    <div class="price fr">
     <strong>0 zł <sup>*</sup></strong>
     <span></span>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pl-db8preorder&ref=pl_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=pl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-pl');">
          Kup w przedsprzedaży
        </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>