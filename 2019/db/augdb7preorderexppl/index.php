<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'pldbexp_p' . $date;
  $c_name_t='pldbexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title> Zapłać 0 zł za Driver Booster 7 PRO </title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <p class="name">Driver Booster 7 PRO</p>
    <h1>PRZEDSPRZEDAŻ ROZPOCZĘTA</h1>
    <div class="offer clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
      </div>
      <div class="right fl">
        <h2>DLA PIERWSZEGO TYSIĄCA KLIENTÓW DZIENNIE</h2>
        <div class="numbox">
          <h3>
            <span class="unit-bef">Pozostało</span> <span class="unit-af">jedynie</span>
            <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
          </h3>
          <p><span class="buyNum"><?php echo $viewNum; ?></span> użytkowników rozpatruje teraz ofertę</p>
        </div>
        <ul class="price clearfix">
          <li class="first"><strong>0<small>zł</small></strong></li>
          <li class="last">
            <a class="buybtn big"
               href="https://www.iobit.com/buy.php?product=pl-db7preorder&ref=pl_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-pl');">
              Zamów już teraz
            </a>
          </li>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- foryou start -->
<div class="foryou">
  <div class="wrapper">
    <h2>Jak Driver Booster 6 PRO mógł Ci pomóc?</h2>
    <div class="screen">
      <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
      <span class="rocket"></span>
      <div class="forlist left">
        <h3>Poprawiał wydajność <b>komputera</b></h3>
        <p><i class="circle">.</i> Zaktualizuje <b>x</b> <span class="unit">sterowników</span> komputera, aby uniknąć problemów z systemem.</p>
        <p><i class="circle">.</i> Naprawi <b>x</b> <span class="unit">błędów</span> urządzenia, aby rozwiązać problemy sprzętowe.</p>
      </div>
      <div class="forlist right">
        <h3>Poprawiał wydajność <b>gry</b></h3>
        <p><i class="circle">.</i> Zaktualizuje <b>x</b> <span class="unit">elementów</span> gry, aby zagwarantować pomyślne jej uruchomienie.</p>
        <p><i class="circle">.</i> Priorytetowo zaktualizuje <b>x</b>  <span class="unit">gotowych do gry sterowników</span>, aby korzystać z <br> &nbsp;&nbsp; nowych funkcji i naprawić błędy.</p>
      </div>
    </div>
    <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
  </div>
</div>
<!-- foryou end -->

<!-- hashow start -->
<div class="hashow">
  <div class="wrapper">
    <h2>Twój Driver Booster PRO wygasł</h2>
    <div class="screen clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
        <span class="point">!</span>
      </div>
      <ul class="right fr">
        <li><i class="all-icons arrow"></i> <span>Baza danych sterowników zmniejszyła się do <b>2 500 000</b></span></li>
        <li><i class="all-icons"></i> <span><b>Brak</b> przyspieszenia prędkości pobierania</span></li>
        <li><i class="all-icons"></i> <span><b>Brak</b> automatycznej aktualizacji sterowników</span></li>
        <li><i class="all-icons"></i> <span><b>Brak</b> kopii zapasowej poprzednich sterowników</span></li>
        <li><i class="all-icons"></i> <span><b>Brak</b> naprawy błędu kodu urządzenia</span></li>
        <li><i class="all-icons"></i> <span><b>Brak</b> aktualizacji składników gry</span></li>
        <li><i class="all-icons"></i> <span><b>Brak</b> pierwszeństwa aktualizowania sterowników gotowych do gry</span></li>
      </ul>
    </div>
    <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
  </div>
</div>
<!-- hashow end -->

<!-- db-feature start -->
<div class="db-feature">
  <div class="wrapper">
    <h2>Driver Booster 7 PRO jest dostępny w przedsprzedaży <br> i może zrobić dla Ciebie więcej</h2>
    <div class="clearfix">
      <div class="featlist one">
        <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
        <h3>ponad 3,5 mln</h3>
        <p>obsługiwanych sterowników PC</p>
      </div>
      <div class="featlist two">
        <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
        <h3>20% więcej </h3>
        <p>obsługiwanych komponentów</p>
      </div>
      <div class="featlist three">
        <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
        <h3>20% szybsze</h3>
        <p>skanowanie sterownika</p>
      </div>
      <div class="featlist four">
        <img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt=""/>
        <h3></h3>
        <p><b>Brak powiadomień Driver Booster</b> podczas pracy na pełnym ekranie.</p>
      </div>
    </div>
    <h3 class="subtitle">Wróć więc do PRO, aby cieszyć się wszystkimi jego funkcjami</h3>
    <ul class="price">
      <li class="last">
        <a class="buybtn big"
           href="https://www.iobit.com/buy.php?product=pl-db7preorder&ref=pl_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-pl');">
          Zamów teraz 0zł
        </a>
      </li>
    </ul>
    <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
  </div>
</div>
<!-- db-feature end -->

<!-- review start -->
<div class="review wrapper">
  <h2>Co mówią inni: </h2>
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
        <dd>
          <h2>Recenzja mediów</h2>
          <h4>IObit tworzy wiele narzędzi, ale Driver Booster PRO, który automatycznie aktualizuje sterowniki, jest jednym z najlepszych.</h4>
          <p>Prosta podstawowa funkcjonalność Driver Booster PRO staje się jeszcze atrakcyjniejsza dzięki połączeniu wielu licencji w bardzo przystępnej cenie, a także możliwości dostosowania interfejsu, który dobrze wyświetla określone informacje związane ze sprzętem. Konkurenci Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferują atrakcyjne funkcje, ale to IObit Driver Booster PRO jest liderem.</p>
          <cite>PC Magazine</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></dt>
        <dd>
          <h2>Recenzja użytkownika </h2>
          <h4></h4>
          <p>Po pierwsze muszę powiedzieć, że jest to bardzo lekkie i łatwe w użyciu oprogramowanie. Driver Booster działa w tle i nie obciąża ani procesora, ani pamięci RAM. Mogłem grać w nowe gry bez konieczności wyłączania jakiegokolwiek procesu w tle. Zwykle uruchamiam aktualizacje systemu Windows codziennie, aby zaktualizować najnowsze sterowniki, a Driver Booster zaktualizował i naprawił sterowniki mojego PC bardzo trafnie i dokładnie, lepiej niż aktualizacja Windows. Jestem pod wrażeniem tego oprogramowania i śmiało mogę je polecić innym.</p>
          <cite>Dunston Diaz</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
        <dd>
          <h2>Recenzja użytkownika</h2>
          <h4></h4>
          <p>Co za niespodzianka otrzymać nowy Driver Booster od IObit. Po zainstalowaniu i rozpoczęciu aktualizacji nie wiedziałem, że połowa z wyświetlonych programów znajduje się na moim komputerze, nie wspominając już nawet o ich aktualizacji. Po zakończeniu aktualizacji mój komputer działał jak nowy. Rewelacja!</p>
          <cite>Harold Barr</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
        <dd>
          <h2>Recenzja użytkownika</h2>
          <h4></h4>
          <p>Naprawdę najlepszy aktualizator sterowników na rynku. Jest przyjazny dla użytkownika, ma prosty i łatwy w użyciu interfejs i działa lepiej niż jakakolwiek aplikacja z której korzystałem. Ten program jest wart pięciogwiazdkowej oceny. Wysoce rekomendowane.</p>
          <cite>Hishaam Salasa</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
        <dd>
          <h2>Recenzja użytkownika</h2>
          <h4></h4>
          <p>Program pomógł rozwiązać problemy ze spowolnieniem mojego laptopa bez spowodowania awarii. Czasami, gdy próbowałem zaktualizować sterowniki, komputer się zawieszał i musiałem go formatować, aby przywrócić funkcje. Z DB7 tak się nie dzieje. Łatwy w użyciu plus szybkie pobieranie: to do tej pory najlepsze narzędzie na rynku!</p>
          <cite>Carlos Alexandre Veríssimo</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Nagrody z całego świata</h2>
    <p>
      Dzięki zaufaniu i nagrodom tych przodujących światowych mediów w ciągu ostatnich czterech lat, jest to właściwy wybór.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>ZERO RYZYKA dzięki naszej 60-dniowej gwarancji zwrotu pieniędzy</h4>
          <p>
            Jesteśmy pewni, że wszystkie Twoje problemy ze sterownikami zostaną rozwiązane za pomocą aktywowanej edycji PRO. Teraz w przystępnej cenie.
          </p>
        </dd>
      </dl>
      <ul class="fr">
        <li class="first">
          Akceptowane metody płatności
          <span><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></span>
        </li>
        <li class="two">
          Bezpieczna płatność
          <span><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></span>
        </li>
      </ul>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Uwaga:</dt>
        <dd>
          * Po upływie bezpłatnego 30-dniowego okresu próbnego, Twoja karta kredytowa lub konto PayPal zostaną automatycznie obciążone obniżoną kwotą 79,90 zł. 70% zniżki od pierwotnej ceny 279,90 zł to bonus oferowany wyłącznie klientom przedsprzedażowym!
        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Pospiesz się, <span class="unit-bottom">zostało tylko</span>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> użytkowników rozpatruje teraz ofertę</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong>0<small>zł</small></strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pl-db7preorder&ref=pl_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-pl');">
          Zamów już teraz
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

<script>
  refStr='<?php echo $refStr;?>';
  var packsNumArr=[<?php echo intval($paramData->UpdDrv);?>,<?php echo intval($paramData->FixedErr);?>,<?php echo intval($paramData->UpdCmp);?>,<?php echo intval($paramData->UpdRdy);?>];
  setParamUnit(packsNumArr);
  $('.foryou .screen p b').eq(0).html('<?php echo paramDeal($paramData->UpdDrv);?>').end()
      .eq(1).html('<?php echo paramDeal($paramData->FixedErr);?>').end()
      .eq(2).html('<?php echo paramDeal($paramData->UpdCmp);?>').end()
      .eq(3).html('<?php echo paramDeal($paramData->UpdRdy);?>');
  function setParamUnit(packsNumArr) {
    var unitNormalArr=['sterowników','błędów','elementów','gotowych go gry sterowników'];
    var unitSingleArr=['sterownik','błąd','element','gotowy do gry sterownik'];
    var unit234Arr=['sterowniki','błędy','elementy','gotowe do gry sterowniki'];
    for(var i=0;i<packsNumArr.length;i++){
      var unitStr=unitNormalArr[i];
      var packsNum=parseInt(packsNumArr[i]);
      var packsLast = packsNum % 10;
      var packsLastTwo = packsNum % 100;
      if(packsNum==1){
        unitStr=unitSingleArr[i];
      } else if ((($.inArray(packsLast, [2, 3, 4]) != -1)&&($.inArray(packsLastTwo,[12,13,14])==-1))||(packsNum==0)) {
        unitStr=unit234Arr[i];
      }
      $('.foryou .unit').eq(i).html(unitStr);
    }
  }
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>