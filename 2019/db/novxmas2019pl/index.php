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
  $c_name = 'pldbxnov_p' . $date;
  $c_name_t='pldbxnov_t' . $date;
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

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if($_GET['to']=='purchase-6'){
  if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    if(count($matches[1])>=2){
      $refStr.='-'.$matches[1][0].$matches[1][1];
    }
  }
}

if(in_array($_GET['st'],array('dbxmasr','officialfree','officialpro'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
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
  <title>Specjalna oferta, do 80% zni??ki na Driver Booster PRO - IObit</title>
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
        <p>WI??KSZA BAZA STEROWNIK??W, BEZPIECZNIEJSZE AKTUALIZACJE, WI??KSZA SKUTECZNO???? I SZYBSZY KOMPUTER!</p>
      </div>
      <div class="left fl">
        <h4>SPECJALNA OFERTA</h4>
        <h2>80% ZNI??KI</h2>
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <div class="chart">
          <div class="clist one">
            <span class="cost"><strong>99,90 z??</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">12 listopada</span>
          </div>
          <div class="clist two">
            <span class="cost"><strong><big>89</big>,90z??</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="text">Zosta??o <b class="pickNum">39*</b> sztuk, po??piesz si??!</span>
          </div>
          <div class="clist three">
            <span class="cost"><strong>119,90 z??</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">14 listopada</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>89</big>,90 z??</strong> <del>549.70 z??</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-db73pcsdpf89&ref=pl_db73pcsdpf89purchase1912<?php echo $refStr;?>&refs=pl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmas1912-pl');">
            KUP TERAZ
          </a>
        </div>
      </div>
    </div>
<!--    <span class="snow snow01"></span>-->
<!--    <span class="snow snow02"></span>-->
<!--    <span class="snow snow03"></span>-->
<!--    <span class="snow snow04"></span>-->
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- map start -->
  <div class="map">
    <div class="wrapper">
      <h2>
        EKSKLUZYWNA BAZA DANYCH STEROWNIK??W, ZAAWANSOWANA TECHNOLOGIA AKTUALIZACJI, <br>
        TW??J KOMPUTER B??DZIE JESZCZE SPRAWNIEJSZY!
      </h2>
      <p>Ponad 10 milion??w u??ytkownik??w na ca??ym ??wiecie wybra??o Driver Booster PRO</p>
    </div>
  </div>
  <!-- map end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <img class="feature-db" src="<?php echo getStaticUrl('images/feature-db.png')?>" alt=""/>
    <dl class="one clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      <dd>
        <h3>AKTUALIZACJA STEROWNIK??W JESZCZE <strong>SZYBSZA I PROSTSZA</strong></h3>
        <p>
          Driver Booster oferuje rozwi??zanie automatycznej aktualizacji sterownik??w, <br>
          instaluje i aktualizuje sterowniki automatycznie w czasie bezczynno??ci komputera.
        </p>
      </dd>
    </dl>
    <dl class="two clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      <dd>
        <h3><strong>BEZPIECZNA</strong> AKTUALIZACJA STEROWNIK??W</h3>
        <p>
          Automatyczne tworzenie kopii zapasowych <br>
          przywracanie systemu przed aktualizacj??, <br>
          na wypadek, gdyby co?? posz??o nie tak.
        </p>
      </dd>
    </dl>
    <dl class="three clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      <dd>
        <h3><strong>BARDZIEJ STABILNY</strong> SYSTEM</strong></h3>
        <p>
          Zawsze utrzymuj wszystkie sterowniki <br>
          zaktualizowane, aby system dzia??a?? <br>
          sprawniej i stabilniej.
        </p>
      </dd>
    </dl>
    <dl class="four clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
      <dd>
        <h3><strong>100%* SZYBSZE</strong> POBIERANIE</h3>
        <p>
          Szybko???? pobierania sterownik??w jest o 100% <br>
          szybsza ni?? w przypadku darmowej wersji.
        </p>
      </dd>
    </dl>
    <dl class="five clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
      <dd>
        <h3><strong>DOSKONA??E WRA??ENIA</strong> Z GRY</h3>
        <p>
          Aktualizuje sterowniki graficzne i sterowniki Game Ready, <br>
          optymalizuje wydajno???? sprz??tu i maksymalizuje wra??enia z gry.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper clearfix">
      <h2>P??A?? ZA 1 OTRZYMAJ 3!*</h2>
      <h3>WSZYSTKO CZEGO POTRZEBUJESZ JEST DOST??PNE ZA POMOC?? JEDNEGO KLIKNI??CIA!</h3>
      <dl class="sd">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"/>
        </dt>
        <dd>
          <h4>Smart Defrag PRO</h4>
          <strong>0 z?? </strong> <del> 119,90 z??</del>
          <p>Oferuje najlepsz?? defragmentacj?? dysku i maksymalnie przyspiesza jego pr??dko????! </p>
        </dd>
      </dl>
      <dl class="pf">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"/>
        </dt>
        <dd>
          <h4>Protected Folder</h4>
          <strong>0 z?? </strong> <del> 149,90 z??</del>
          <p>Chro?? swoje pliki osobiste i trzymaj je z dala od z??o??liwych atak??w!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- gifts end -->

  <!-- centbuy start -->
  <div class="centbuy price wrapper">
    <p><strong>89,90 z??</strong> <del>549.70 z??</del></p>
    <p>SUPER CENA</p>
    <a class="buybtn"
       href="http://www.iobit.com/buy.php?product=pl-db73pcsdpf89&ref=pl_db73pcsdpf89purchase1912<?php echo $refStr;?>&refs=pl_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmas1912-pl');">
      KUP TERAZ
    </a>
    <p class="pick">Zosta??o tylko <b class="pickNum">39</b> sztuk, po??piesz si??!</p>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>NASZYCH U??YTKOWNIK??W MO??ESZ SPOTKA?? WSZ??DZIE!</h2>
    <div class="reviewbox">
      <h3>Zobacz co o nas m??wi??</h3>
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
            ???IObit ma w swojej ofercie wiele program??w, a Driver Booster PRO, kt??ry automatycznie aktualizuje sterowniki, jest jednym z najlepszych. Prosta podstawowa funkcjonalno???? Driver Booster PRO jest jeszcze bardziej atrakcyjna dzi??ki po????czeniu wielu licencji w bardzo przyst??pnej cenie. Zachwyca r??wnie?? konfigurowalny interfejs, kt??ry dobrze wy??wietla specyficzne informacje zwi??zane ze sprz??tem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferuj?? atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle??? - PC Magazine
          </p>
        </div>
        <div class="active">
          <h4>Adam Backlund</h4>
          <p>
            ???Driver Booster jest niesamowit?? aplikacj??, szczeg??lnie dla kogo??, kto ma wiele aplikacji i dysk??w, ale brakuje mu czasu na ich r??czn?? aktualizacj??. Zdecydowanie polecam Driver Booster, kt??ry pomo??e zaktualizowa?? sterowniki ??atwo i szybko??? - Adam Backlund
          </p>
        </div>
        <div>
          <h4>Wayne Bowler</h4>
          <p>
            ???Jest to jeden z najlepszych program??w do aktualizacji sterownik??w jaki istnieje. Microsoft zwi??d?? mnie na manowce, sugeruj??c aktualizacje, kt??re nie by??y kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo ??atwy w obs??udze i intuicyjny, podaje te?? du??o istotnych informacji. Ju?? zawsze b??d?? go u??ywa??... ??wietna robota!??? - Wayne Bowler
          </p>
        </div>
        <div>
          <h4>Myo Thuya</h4>
          <p>
            ???Dzi??ki Driver Booster mog?? z ??atwo??ci?? sprawdzi??, kt??re sterowniki urz??dze?? s?? nieaktualne, a nast??pnie ??atwo je zaktualizowa??. Poza tym program pomaga mi naprawi?? b????dy d??wi??ku, b????dy sieci, b????dy urz??dze?? itp. Z pocz??tku nie wierzy??em w dzia??anie Driver Booster, ale po u??yciu naprawd?? mi si?? podoba. M??j komputer jest szybszy, bezpieczniejszy i nowszy ni?? 8 miesi??cy temu... Dzi??kuj?? IObit???. - Myo Thuya
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
          <th colspan="2" class="text">Por??wnanie produkt??w: </th>
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
          <td class="virtue">Pobierz i zaktualizuj przestarza??e sterowniki jednym klikni??ciem</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
          <td class="virtue">
            Odblokowuje maksymaln?? pr??dko???? aktualizacji nowych sterownik??w <sup class="all-icons">Ulepszone</sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
          <td class="virtue vtop">
             <span>200% wi??ksza baza danych, aby zaktualizowa?? znacznie wi??cej rzadkich i przestarza??ych sterownik??w</span>
             <sup class="all-icons"></sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/></td>
          <td class="virtue">
            Wysoka wydajno???? pobierania, automatyczna aktualizacja i instalacja sterownik??w podczas bezczynno??ci systemu
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""/></td>
          <td class="vtop">
            <span>Automatyczne tworzenie kopii zapasowych wszystkich sterownik??w w celu bezpiecznego odzyskiwania</span>
            <sup class="all-icons nov">Nuovo</sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""/></td>
          <td class="virtue">Aktualizacja priorytetowa urz??dze?? w celu ulepszenia wydajno??ci gier</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon07.png')?>" alt=""/></td>
          <td class="virtue">
            Skuteczne wykrywanie i naprawianie b????d??w sterownik??w <sup class="all-icons">Ulepszone</sup>
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
          <td class="virtue">Skuteczne wykrywanie i naprawianie b????d??w sterownik??w</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""/></td>
          <td class="virtue">Automatyczna aktualizacja do najnowszej wersji</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""/></td>
          <td class="virtue">Bezp??atne wsparcie techniczne 24/7 </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- bottombuy start -->
  <div class="bottombuy wrapper clearfix">
    <h2>NIGDY WI??CEJ NIE MIEJ PROBLEM??W Z KOMPUTEREM!</h2>
    <div class="left fl"><img src="<?php echo getStaticUrl('images/bottombuy-db.png')?>" alt=""/></div>
    <div class="right price fr">
      <p><strong>89,90 z??</strong> <del>549.70 z??</del></p>
      <a class="buybtn"
         href="http://www.iobit.com/buy.php?product=pl-db73pcsdpf89&ref=pl_db73pcsdpf89purchase1912<?php echo $refStr;?>&refs=pl_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmas1912-pl');">
        KUP TERAZ
      </a>
      <p>TYLKO DZI??, PO??PIESZ SI??!</p>
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
            <p>60-dniowa gwarancja zwrotu pieni??dzy</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/secure.png')?>" alt=""></dt>
          <dd>
            <h3>Zabezpieczenie p??atno??ci</h3>
            <p>Twoja p??atno???? jest w 100% bezpieczna</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""></dt>
          <dd>
            <h3>Szybka aktywacja</h3>
            <p>Kod licencyjny otrzymasz w ci??gu kilku minut po zakupie</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dt>
          <dd>
            <h3>Obs??uga klienta</h3>
            <p>Bezp??atne wsparcie techniczne 24/7</p>
          </dd>
        </dl>
      </div>
      <dl class="note">
        <dt>Uwaga:</dt>
        <dd>* Programy promocyjne mog?? ulec zmianie bez powiadomienia, w dowolnym momencie i wed??ug w??asnego uznania IObit.</dd>
        <dd>* Dane mog?? si?? r????ni?? w zale??no??ci od r????nych system??w lub komputer??w Prawa autorskie.</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrze??one</p>
    </div>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>