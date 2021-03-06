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
<title>Ciesz si?? stabilniejszym komputerem dzi??ki Driver Booster PRO</title>
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
      <h2>Niezb??dne narz??dzie do aktualizacji sterownik??w</h2>
      <h1>Driver Booster PRO</h1>
      <p>Bezpiecznie i szybko aktualizuj przestarza??e sterowniki jednym klikni??ciem</p>
      <ul class="btnbox clearfix">
        <li class="first">
          <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'pldb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'pldb6g')" data-text="Darmowe pobieranie">
            <span>Darmowe pobieranie </span>
            <i class="all-icons"></i>
          </a>
		  <p style="float: left;text-align: center;width: 280px; margin-top: 0;">Obs??uguje Windows XP/Vista/7/8/8.1/10</p>
        </li>
        <li>
          <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'plaffdb82017general');dlCount()" data-text="Kup teraz i zaoszcz??d?? <?php echo $buytext; ?> >>">
            <span>Kup teraz i zaoszcz??d?? <b><?php echo $buytext; ?></b> >></span>
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
        <h2>Jakie masz problemy z komputerem z przestarza??ymi <br />sterownikami i komponentami gry?</h2>
        <div class="clearfix">
          <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
          <div class="describe fr">
            <div class="list">
              <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
              <span><b>! </b>Cz??ste awarie i zawieszanie si?? systemu</span>
            </div>
            <div class="list two">
              <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
              <span><b>! </b>Czasami po????czenie sieciowe jest przerywane</span>
            </div>
            <div class="list three">
              <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
              <span><b>! </b>Drukarka lub inne urz??dzenie zewn??trzne nie dzia??a prawid??owo</span>
            </div>
            <div class="list four">
              <img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" />
              <span><b>! </b>Brak d??wi??ku podczas s??uchania muzyki lub rozmowy z innymi</span>
            </div>
            <div class="list five">
              <img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" />
              <span><b>! </b>S??aba wydajno???? gry, awarie gier lub zawieszanie si?? gier spowodowane przez sterownik karty graficznej</span>
            </div>
          </div>
        </div>
        <div class="learn">
          <a href="javascript: void(0)">Kliknij tutaj, aby dowiedzie?? si?? wi??cej o sterownikach</a>
          <div class="drivers">
            <p>Sterowniki to elementy oprogramowania, kt??rych ka??de urz??dzenie lub sk??adnik sprz??towy potrzebuje do dzia??ania. Je??li pod????czysz urz??dzenie do komputera bez instalowania odpowiedniego sterownika, system Windows nie b??dzie mia?? poj??cia, co z nim zrobi??.</p>
            <p>Sterowniki informuj?? system operacyjny o tym, czym jest urz??dzenie i jak z niego korzysta??.</p>
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
            <h4>Wykryj i napraw sterowniki jednym klikni??ciem</h4>
            <p>
				??atwe wykrywanie i naprawianie wszystkich <br>przestarza??ych, brakuj??cych i <br>nieprawid??owych sterownik??w w jednym miejscu.
            </p>
          </div>
          <div class="pointist two">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point02.png')?>" alt="" /></div>
            <b>2<span class="arrow"></span><span class="arrow right"></span></b>
            <h4>Pobierz sterowniki bezpiecznie i szybko</h4>
            <p>
				Automatyczne tworzenie kopii zapasowych i <br>tworzenie punktu przywracania systemu przed<br> aktualizacj?? na wypadek nieoczekiwanego zdarzenia.
            </p>
          </div>
          <div class="pointist three">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point03.png')?>" alt="" /></div>
            <b>3</b>
            <h4>Ciesz si?? p??ynnym korzystaniem z komputera i gier</h4>
            <p>
				Najnowsze sterowniki Game Ready r????nych <br>marek pomagaj?? zwi??kszy?? wydajno????, <br>naprawi?? b????dy i poprawi?? wra??enia z gry.
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- threepoints end -->

    <!-- centbuy start -->
    <div class="centbuy">
		<h2>Uzyskaj kompleksowe rozwi??zanie dla problemu ze sterownikiem urz??dzenia!</h2>
      <div class="wrapper">
        
        <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'plaffdb82017general');dlCount()" data-text="Kup teraz i zaoszcz??d?? <?php echo $buytext; ?> >>">
          <span>Kup teraz i zaoszcz??d?? <b><?php echo $buytext; ?></b> >></span>
        </a>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Wsparcie aktualizacji ponad 4 500 000 sterownik??w urz??dze??</h2>
          <span></span>
          <p>
            Automatycznie aktualizuj zalecane sterowniki i sprz??t dzi??ki Driver Booster PRO. Obs??uguj??c ponad 4 500 000 sterownik??w urz??dze??, Driver Booster PRO mo??e naprawi?? brakuj??ce / wadliwe / nieaktualne sterowniki, aby pom??c wyeliminowa?? zawieszanie si?? i awarie systemu.
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
            Driver Booster PRO automatycznie tworzy kopi?? zapasow?? poprzedniej kopii i punkt przywracania systemu przed aktualizacj??, na wypadek gdyby wydarzy??o si?? co?? nieoczekiwanego. Aby zapewni?? bezpiecze??stwo komputer??w u??ytkownik??w, Driver Booster PRO zapewnia tylko kwalifikowane sterowniki WHQL, a nowo przyj??te po????czenie HTTPS mo??e szyfrowa?? po????czenie z serwerem podczas pobierania sterownik??w.
          </p>
        </div>
      </div>
    </div>

    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Ciesz si?? p??ynn?? rozgrywk??</h2>
          <span></span>
          <p>
            Driver Booster PRO z ??atwo??ci?? aktualizuje sterowniki graficzne i sterowniki Game Ready, aby uzyska?? najlepsz?? wydajno???? sprz??tu i przenie???? gr?? na wy??szy poziom. Szybko wy????cza r??wnie?? procesy dzia??aj??ce w tle i niepotrzebn?? us??ug?? Windows, aby odblokowa?? pe??ny potencja?? gry. Dost??pne s?? r??wnie?? komponenty gier do wi??kszo??ci gier komputerowych, kt??re pomagaj?? w pomy??lnym uruchomieniu gry.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" />
        <div class="text">
          <h2>Oszcz??dno???? czasu i inteligentne pobieranie sterownik??w</h2>
          <span></span>
          <p>
            Usuwaj??c niepotrzebne pliki w pakiecie instalacyjnym i wyra??nie kompresuj??c pakiet instalacyjny, Driver Booster oszcz??dza Tw??j czas na aktualizowaniu sterownik??w i sprawia, ??e Twoja rutyna pozostaje niezak????cona. Driver Booster PRO oferuje r??wnie?? wi??ksz?? pr??dko???? pobierania i umo??liwia pobieranie i instalacj?? w czasie bezczynno??ci systemu, pozwalaj??c u??ytkownikom skupi?? si?? na wykonywanej pracy bez ??adnych zak????ce??.
          </p>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- footbuy start -->
    <div class="centbuy footbuy">
      <div class="wrapper">
        <h3>Jak dba?? o aktualno???? sterownik??w komputera?   <span>Wypr??buj Driver Booster PRO i za??atw to jednym klikni??ciem!</span></h3>
        <ul class="btnbox clearfix">
          <li class="first">
            <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'pldb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'pldb6g')" data-text="Darmowe pobieranie">
              <span>Darmowe pobieranie </span>
              <i class="all-icons"></i>
            </a>
          </li>
          <li>
            <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'plaffdb82017general');dlCount()" data-text="Kup teraz i zaoszcz??d?? <?php echo $buytext; ?> >>">
              <span>Kup teraz i zaoszcz??d?? <b><?php echo $buytext; ?></b> >></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- brands start -->
    <div class="brands wrapper">
      <h2>Obs??uga aktualizacji sterownik??w ponad 500 g????wnych marek </h2>
      <p>za pomoc?? jednego klikni??cia</p>
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
          <h2>Recenzja medi??w</h2>
          <h3>???IObit tworzy wiele narz??dzi, a Driver Booster PRO, kt??ry automatycznie aktualizuje sterowniki, jest jednym z najlepszych???.</h3>
          <p>???Prosta podstawowa funkcjonalno???? Driver Booster PRO jest jeszcze bardziej atrakcyjna dzi??ki w????czeniu wielu licencji w bardzo przyjaznej dla portfela cenie, a tak??e dostosowywanemu interfejsowi, kt??ry dobrze radzi sobie z wy??wietlaniem okre??lonych informacji zwi??zanych ze sprz??tem. Konkurenci Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferuj?? atrakcyjne funkcje, ale IObit Driver Booster PRO jest liderem???.</p>
        </div>
        <div class="reviews">
          <h2>Recenzja u??ytkownika</h2>
          <h3></h3>
          <p>???Jest to jeden z najlepszych program??w do aktualizacji sterownik??w jaki istnieje. Microsoft zwi??d?? mnie na manowce, sugeruj??c aktualizacje, kt??re nie by??y kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo ??atwy w obs??udze i intuicyjny, podaje te?? du??o istotnych informacji. Ju?? zawsze b??d?? go u??ywa??... ??wietna robota???!</p>
        </div>
        <div class="reviews">
          <h2>Recenzja u??ytkownika</h2>
          <h3></h3>
          <p>???Driver Booster jest niesamowit?? aplikacj??, szczeg??lnie dla kogo??, kto ma wiele aplikacji i dysk??w, ale brakuje mu czasu na ich r??czn?? aktualizacj??. Zdecydowanie polecam Driver Booster, kt??ry pomo??e zaktualizowa?? sterowniki ??atwo i szybko???.</p>
        </div>
        <div class="reviews">
          <h2>Recenzja u??ytkownika</h2>
          <h3></h3>
          <p>???Dzi??ki Driver Booster mog?? z ??atwo??ci?? sprawdzi??, kt??re sterowniki urz??dze?? s?? nieaktualne, a nast??pnie ??atwo je zaktualizowa??. Poza tym program pomaga mi naprawi?? b????dy d??wi??ku, b????dy sieci, b????dy urz??dze?? itp. Z pocz??tku nie wierzy??em w dzia??anie Driver Booster, ale po u??yciu naprawd?? mi si?? podoba. M??j komputer jest szybszy, bezpieczniejszy i nowszy ni?? 8 miesi??cy temu... Dzi??kuj?? IObit???.</p>
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
      <dt><h5>100% czysto??ci</h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" /></dd>
    </dl>
    <dl class="two">
      <dt><h5>60-dniowa gwarancja zwrotu pieni??dzy </h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
    </dl>
    <dl>
      <dt><h5>Wsparcie 24/7</h5></dt>
      <dd>Bezp??atna pomoc techniczna 24/7 na ????danie</dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer">
    <p class="wrapper">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrze??one</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div class="backtotop">top</div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>