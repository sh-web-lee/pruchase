<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'pldbpre_p' . $date;
  $c_name_t='pldbpre_t' . $date;
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
if($_GET['to']=='db6preicon') {
  if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
  }
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <title>Zapłać 0 zł za Driver Booster 7 PRO</title>
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
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=pl-db7preorder&ref=pl_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pl_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-pl');">
                Zamów już teraz
              </a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- function-wrap start -->
  <div class="function-wrap">
    <div class="wrapper">
      <h2 class="why">
        Dlaczego warto <br> przejść na Driver Booster 7 PRO? <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
      </h2>
      <div class="db-message">
        <h2>Naprawi wszystkie problemy spowodowane przez sterowniki</h2>
        <div class="screenshot">
          <div class="maglist one">
            <h3><big>Naprawi</big> problemy z opóźnieniem gry </h3>
            <p>
              Zaktualizuje gotowe sterowniki do gry i zaleci odpowiednie komponenty, aby naprawić powolne ładowanie i słabą wydajność gier.
            </p>
            <span class="tag last">tylko PRO</span>
          </div>
          <div class="maglist two">
            <h3><big>Naprawi</big> awarię systemu</h3>
            <p>
              Jednym klinięciem wykryje i naprawi błędy urządzenia, aby rozwiązać problemy ze sterownikiem urządzenia, konfliktem zasobów systemowych lub innymi problemami sprzętowymi.
            </p>
            <span class="tag">tylko PRO</span>
          </div>
          <div class="maglist three">
            <h3><big>Naprawi</big> błędy urządzenia</h3>
            <p>
              Skanuje i aktualizuje ponad 3 500 000 sterowników, aby naprawić niebieski ekran, awarię systemu czy inne problemy systemowe.
            </p>
            <span class="tag">PRO może więcej</span>
          </div>
        </div>
      </div>
      <div class="db-feature">
        <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
        <h2>Automatyczny i bezpieczny proces aktualizacji sterowników</h2>
        <div class="featlist one">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
            <h3>SKANOWANIE</h3>
            <p>Automatycznie sprawdza stan sterowników urządzenia w poszukiwaniu aktualizacji.</p>
            <p class="red"><span>Bezpieczne połączenie https</span></p>
          </div>
        </div>
        <div class="featlist two">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
            <h3>POBIERANIE</h3>
            <p>Automatycznie pobiera sterowniki, gdy system jest bezczynny.</p>
            <p class="red"><span>Sterowniki zgodne z wytycznymi Microsoft WHQL i IObit</span></p>
          </div>
        </div>
        <div class="featlist three">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
            <h3>INSTALACJA</h3>
            <p>Automatycznie instaluje sterowniki, gdy system jest bezczynny.</p>
            <p class="red"><span>Kopia zapasowa poprzednich sterowników</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- function-wrap end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
      <h2>Driver Booster 7 PRO zrobi dla Ciebie o wiele więcej </h2>
      <table>
        <thead>
        <tr>
          <th class="text"></th>
          <th class="itema">
            <h3>Twoja obecna wersja</h3>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <h3>Driver Booster 7 PRO</h3>
          </th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""> Baza danych sterowników</td>
          <td class="itema">2 500 000+</td>
          <td class="space"></td>
          <td class="itemb">3 500 000+</td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""> Zwiększona prędkość pobierania sterowników</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""> <span>Automatyczne skanowanie i aktualizacja zgodnie z harmonogramem</span></td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""> Kopia zapasowa poprzednich sterowników</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""> Aktualizacja składników gry </td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""> <span>Pierwszeństwo aktualizacji sterowników gotowych do gry</span></td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""> Ograniczenie problemów ze sprzętem</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <th class="text"></th>
          <th class="itema"></th>
          <th class="space"></th>
          <th class="itemb"></th>
        </tr>
        </tfoot>
      </table>
      <h4>Uaktualnij za <strong><big>0</big> zł</strong>, aby odblokować wszystkie funkcje PRO teraz</h4>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=pl-db7preorder&ref=pl_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pl_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-pl');">
        Zamów już teraz
      </a>
    </div>
  </div>
  <!-- comparison end -->

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
           href="https://www.iobit.com/buy.php?product=pl-db7preorder&ref=pl_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-pl');">
          Zamów już teraz
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>