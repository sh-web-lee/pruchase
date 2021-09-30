<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
$buyLink="https://www.iobit.com/buy.php?product=plaff-db83pc7493&ref=".(empty($_GET['ref'])?'plaff_db8_2017general':$_GET['ref'])."&aff=".$affStr;
$refStr=$_GET['ref'];
$buytext = "65%";
if (preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

    $buyLink = "https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993";

    if ($arr[1][0] != null) {

        $buyLink = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/535215/4385";
    }
}else{
    if(preg_match('/fspi([0-9]*)/',$refStr,$matches)||preg_match('/ir([0-9]*)/',$refStr,$matches)){
        $buyLink='https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993';
        $pregNum=$matches[1];
        if(!empty($pregNum)){
            $buyLink='http://macbooster.7eer.net/c/'.$pregNum.'/558401/4385';
        }
    }
}


function statistic($status){
  try{
    $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
    $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");
    $insertSql="insert into affdbgeneral(ip,refStr,addtime,status) values(:ip,:refStr,:addtime,:status)";
    $pre=$pdo->prepare($insertSql);

    $ip=getIP();
    $refStr=$_GET['ref'].'-'.$_GET['aff'];
    $addTime=time();
    $pre->bindParam(':ip',$ip);
    $pre->bindParam(':refStr',$refStr);
    $pre->bindParam(':addtime',$addTime);
    $pre->bindParam(':status',$status);
    $pre->execute();
  }catch (PDOException $e){
  }
}

if($_GET['action']=='downloadCount'){
  statistic(2);
  exit();
}

statistic(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Ciesz się stabilniejszym komputerem dzięki Driver Booster PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h2>Niezbędne narzędzie do aktualizacji sterowników</h2>
      <h1>Driver Booster PRO</h1>
      <p>Bezpiecznie i szybko aktualizuj przestarzałe sterowniki jednym kliknięciem</p>
      <ul class="btnbox clearfix">
        <li class="first">
          <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'pldb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'pldb6g')" data-text="Darmowe pobieranie">
            <span>Darmowe pobieranie </span>
            <i class="all-icons"></i>
          </a>
		  <p style="float: left;text-align: center;width: 280px; margin-top: 0;">Obsługuje Windows XP/Vista/7/8/8.1/10</p>
        </li>
        <li>
          <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'plaffdb82017general');dlCount()" data-text="Kup teraz i zaoszczędź <?php echo $buytext; ?> >>">
            <span>Kup teraz i zaoszczędź <b><?php echo $buytext; ?></b> >></span>
          </a>
        </li>
      </ul>
      <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" /></div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper">
        <h2>Jakie masz problemy z komputerem z przestarzałymi <br />sterownikami i komponentami gry?</h2>
        <div class="clearfix">
          <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
          <div class="describe fr">
            <div class="list">
              <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
              <span><b>! </b>Częste awarie i zawieszanie się systemu</span>
            </div>
            <div class="list two">
              <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
              <span><b>! </b>Czasami połączenie sieciowe jest przerywane</span>
            </div>
            <div class="list three">
              <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
              <span><b>! </b>Drukarka lub inne urządzenie zewnętrzne nie działa prawidłowo</span>
            </div>
            <div class="list four">
              <img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" />
              <span><b>! </b>Brak dźwięku podczas słuchania muzyki lub rozmowy z innymi</span>
            </div>
            <div class="list five">
              <img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" />
              <span><b>! </b>Słaba wydajność gry, awarie gier lub zawieszanie się gier spowodowane przez sterownik karty graficznej</span>
            </div>
          </div>
        </div>
        <div class="learn">
          <a href="javascript: void(0)">Kliknij tutaj, aby dowiedzieć się więcej o sterownikach</a>
          <div class="drivers">
            <p>Sterowniki to elementy oprogramowania, których każde urządzenie lub składnik sprzętowy potrzebuje do działania. Jeśli podłączysz urządzenie do komputera bez instalowania odpowiedniego sterownika, system Windows nie będzie miał pojęcia, co z nim zrobić.</p>
            <p>Sterowniki informują system operacyjny o tym, czym jest urządzenie i jak z niego korzystać.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- threepoints start -->
    <div class="threepoints">
      <div class="wrapper">
        <h2>Co robi Driver Booster PRO?</h2>
        <div class="clearfix">
          <div class="pointist one">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point01.png')?>" alt="" /></div>
            <b>1</b>
            <h4>Wykryj i napraw sterowniki jednym kliknięciem</h4>
            <p>
				Łatwe wykrywanie i naprawianie wszystkich <br>przestarzałych, brakujących i <br>nieprawidłowych sterowników w jednym miejscu.
            </p>
          </div>
          <div class="pointist two">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point02.png')?>" alt="" /></div>
            <b>2<span class="arrow"></span><span class="arrow right"></span></b>
            <h4>Pobierz sterowniki bezpiecznie i szybko</h4>
            <p>
				Automatyczne tworzenie kopii zapasowych i <br>tworzenie punktu przywracania systemu przed<br> aktualizacją na wypadek nieoczekiwanego zdarzenia.
            </p>
          </div>
          <div class="pointist three">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point03.png')?>" alt="" /></div>
            <b>3</b>
            <h4>Ciesz się płynnym korzystaniem z komputera i gier</h4>
            <p>
				Najnowsze sterowniki Game Ready różnych <br>marek pomagają zwiększyć wydajność, <br>naprawić błędy i poprawić wrażenia z gry.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- threepoints end -->

    <!-- centbuy start -->
    <div class="centbuy">
		<h2>Uzyskaj kompleksowe rozwiązanie dla problemu ze sterownikiem urządzenia!</h2>
      <div class="wrapper">
        
        <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'plaffdb82017general');dlCount()" data-text="Kup teraz i zaoszczędź <?php echo $buytext; ?> >>">
          <span>Kup teraz i zaoszczędź <b><?php echo $buytext; ?></b> >></span>
        </a>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Wsparcie aktualizacji ponad 4 500 000 sterowników urządzeń</h2>
          <span></span>
          <p>
            Automatycznie aktualizuj zalecane sterowniki i sprzęt dzięki Driver Booster PRO. Obsługując ponad 4 500 000 sterowników urządzeń, Driver Booster PRO może naprawić brakujące / wadliwe / nieaktualne sterowniki, aby pomóc wyeliminować zawieszanie się i awarie systemu.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" />
        <div class="text">
          <h2>Bezpieczna aktualizacja sterownika</h2>
          <span></span>
          <p>
            Driver Booster PRO automatycznie tworzy kopię zapasową poprzedniej kopii i punkt przywracania systemu przed aktualizacją, na wypadek gdyby wydarzyło się coś nieoczekiwanego. Aby zapewnić bezpieczeństwo komputerów użytkowników, Driver Booster PRO zapewnia tylko kwalifikowane sterowniki WHQL, a nowo przyjęte połączenie HTTPS może szyfrować połączenie z serwerem podczas pobierania sterowników.
          </p>
        </div>
      </div>
    </div>

    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Ciesz się płynną rozgrywką</h2>
          <span></span>
          <p>
            Driver Booster PRO z łatwością aktualizuje sterowniki graficzne i sterowniki Game Ready, aby uzyskać najlepszą wydajność sprzętu i przenieść grę na wyższy poziom. Szybko wyłącza również procesy działające w tle i niepotrzebną usługę Windows, aby odblokować pełny potencjał gry. Dostępne są również komponenty gier do większości gier komputerowych, które pomagają w pomyślnym uruchomieniu gry.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" />
        <div class="text">
          <h2>Oszczędność czasu i inteligentne pobieranie sterowników</h2>
          <span></span>
          <p>
            Usuwając niepotrzebne pliki w pakiecie instalacyjnym i wyraźnie kompresując pakiet instalacyjny, Driver Booster oszczędza Twój czas na aktualizowaniu sterowników i sprawia, że Twoja rutyna pozostaje niezakłócona. Driver Booster PRO oferuje również większą prędkość pobierania i umożliwia pobieranie i instalację w czasie bezczynności systemu, pozwalając użytkownikom skupić się na wykonywanej pracy bez żadnych zakłóceń.
          </p>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- footbuy start -->
    <div class="centbuy footbuy">
      <div class="wrapper">
        <h3>Jak dbać o aktualność sterowników komputera?   <span>Wypróbuj Driver Booster PRO i załatw to jednym kliknięciem!</span></h3>
        <ul class="btnbox clearfix">
          <li class="first">
            <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'pldb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'pldb6g')" data-text="Darmowe pobieranie">
              <span>Darmowe pobieranie </span>
              <i class="all-icons"></i>
            </a>
          </li>
          <li>
            <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'plaffdb82017general');dlCount()" data-text="Kup teraz i zaoszczędź <?php echo $buytext; ?> >>">
              <span>Kup teraz i zaoszczędź <b><?php echo $buytext; ?></b> >></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- brands start -->
    <div class="brands wrapper">
      <h2>Obsługa aktualizacji sterowników ponad 500 głównych marek </h2>
      <p>za pomocą jednego kliknięcia</p>
      <ul class="clearfix">
        <li><img src="<?php echo getStaticUrl('images/hp.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/microsoft.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/canon.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/dell.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/nvidia.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/snmsung.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/lg.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/amd.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/brother.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/intel.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/sony.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/logitech.png')?>" alt=""/></li>
      </ul>
    </div>
    <!-- brands end -->

    <!-- review start -->
    <div class="review">
      <div class="wrapper">
        <div class="reviews active">
          <h2>Recenzja mediów</h2>
          <h3>„IObit tworzy wiele narzędzi, a Driver Booster PRO, który automatycznie aktualizuje sterowniki, jest jednym z najlepszych”.</h3>
          <p>„Prosta podstawowa funkcjonalność Driver Booster PRO jest jeszcze bardziej atrakcyjna dzięki włączeniu wielu licencji w bardzo przyjaznej dla portfela cenie, a także dostosowywanemu interfejsowi, który dobrze radzi sobie z wyświetlaniem określonych informacji związanych ze sprzętem. Konkurenci Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferują atrakcyjne funkcje, ale IObit Driver Booster PRO jest liderem”.</p>
        </div>
        <div class="reviews">
          <h2>Recenzja użytkownika</h2>
          <h3></h3>
          <p>„Jest to jeden z najlepszych programów do aktualizacji sterowników jaki istnieje. Microsoft zwiódł mnie na manowce, sugerując aktualizacje, które nie były kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo łatwy w obsłudze i intuicyjny, podaje też dużo istotnych informacji. Już zawsze będę go używać... Świetna robota”!</p>
        </div>
        <div class="reviews">
          <h2>Recenzja użytkownika</h2>
          <h3></h3>
          <p>„Driver Booster jest niesamowitą aplikacją, szczególnie dla kogoś, kto ma wiele aplikacji i dysków, ale brakuje mu czasu na ich ręczną aktualizację. Zdecydowanie polecam Driver Booster, który pomoże zaktualizować sterowniki łatwo i szybko”.</p>
        </div>
        <div class="reviews">
          <h2>Recenzja użytkownika</h2>
          <h3></h3>
          <p>„Dzięki Driver Booster mogę z łatwością sprawdzić, które sterowniki urządzeń są nieaktualne, a następnie łatwo je zaktualizować. Poza tym program pomaga mi naprawić błędy dźwięku, błędy sieci, błędy urządzeń itp. Z początku nie wierzyłem w działanie Driver Booster, ale po użyciu naprawdę mi się podoba. Mój komputer jest szybszy, bezpieczniejszy i nowszy niż 8 miesięcy temu... Dziękuję IObit”.</p>
        </div>
        <ul class="handle clearfix">
          <li class="active">
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine" />
              <span></span>
            </div>
            <strong>PC Magazine</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"/>
              <span></span>
            </div>
            <strong>Wayne Bowler</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"/>
              <span></span>
            </div>
            <strong>Adam Backlund</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"/>
              <span></span>
            </div>
            <strong>Myo Thuya</strong>
          </li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
  <!-- container end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><h5>100% czystości</h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" /></dd>
    </dl>
    <dl class="two">
      <dt><h5>60-dniowa gwarancja zwrotu pieniędzy </h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
    </dl>
    <dl>
      <dt><h5>Wsparcie 24/7</h5></dt>
      <dd>Bezpłatna pomoc techniczna 24/7 na żądanie</dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer">
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div class="backtotop">top</div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>