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
  <title>Najnowszy Driver Booster do 85% taniej! - IObit</title>
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
        <p id="topcount" class="countdown">Oferta ograniczona czasowo, zosta??o <strong>00</strong> godz. <strong>00</strong> min <strong>00</strong> sek </p>
      </div>
      <div class="clearfix">
        <div class="offer">
          <div class="discount"><big>63%</big> zni??ki</div>
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <div class="price">
            <p><del>229,90 z??</del> <strong>84,90 z??</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pl-db71pc84&ref=pl_db71pc84purchase2001<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbfebsale2020-pl');">
              KUP TERAZ
            </a>
            <p>1 rok / 1 komputer</p>
          </div>
        </div>
        <div class="offer bigbox">
          <div class="discount"><big>85%</big> zni??ki</div>
          <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="">
          <div class="price">
            <p><del>639,80 z??</del> <strong>89,90 z??</strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pl-db73pcsdpfamc89&ref=pl_db73pcsdpfamc89purchase2001<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbfebsale2020-pl');">
              KUP TERAZ
            </a>
            <p>1 rok / 3 komputery</p>
          </div>
        </div>
        <div class="offer right">
          <div class="discount"><big>67%</big> zni??ki</div>
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <div class="price">
            <p><del>279,90 z??</del> <strong>89,90 z??</strong></p>
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
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper clearfix">
    <dl>
      <dt>Akceptowane p??atno??ci</dt>
      <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
    </dl>
    <dl>
      <dt>Gwarancja zwrotu pieni??dzy</dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
    </dl>
    <dl class="last">
      <dt>Bezpieczna p??atno????</dt>
      <dd><img src="<?php echo getStaticUrl('images/gooddy.png')?>" alt=""/></dd>
    </dl>
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <h2>Zwi??ksz wydajno???? pracy komputera i gier z najnowszym<br> Driver Booster PRO!</h2>
    <div class="clearfix panel">
      <dl class="list one">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
        <dd>
          <h3>DOSKONA??E WRA??ENIA Z GRY </h3>
          <p>
            Aktualizuje sterowniki graficzne i sterowniki Game Ready,<br> optymalizuje wydajno???? sprz??tu i maksymalizuje wra??enia z gry.
          </p>
        </dd>
      </dl>
      <dl class="list two">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
        <dd>
          <h3>BEZPIECZNA aktualizacja sterownik??w</h3>
          <p>
            Automatyczne tworzenie kopii zapasowych przywracanie systemu<br> przed aktualizacj??, na wypadek, gdyby co?? posz??o nie tak.
          </p>
        </dd>
      </dl>
      <dl class="list three">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
        <dd>
          <h3>BARDZIEJ STABILNY system</h3>
          <p>
            Zawsze utrzymuj wszystkie sterowniki<br> zaktualizowane, aby system dzia??a??<br> sprawniej i stabilniej.
          </p>
        </dd>
      </dl>
      <dl class="list four">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
        <dd>
          <h3>Do 100% SZYBSZE pobieranie</h3>
          <p>
            Szybko???? pobierania sterownik??w jest o 100%<br> szybsza ni?? w przypadku darmowej wersji.
          </p>
        </dd>
      </dl>
      <dl class="list five">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
        <dd>
          <h3>Jeszcze SZYBSZA i PROSTSZA aktualizacja sterownik??w</h3>
          <p>
            Driver Booster oferuje rozwi??zanie automatycznej aktualizacji sterownik??w,<br> instaluje i aktualizuje sterowniki automatycznie w czasie bezczynno??ci komputera.
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
      <h2>Co zyskasz dzi??ki darmowym prezentom?</h2>
      <div class="sdpfamc">
        <div class="gift-list clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"></dt>
            <dd>
              <h4>Smart Defrag 6 PRO</h4>
              <span>1 rok / 1 PC <del>119.90 z??</del></span>
              <p>Oferuje wydajn?? defragmentacj?? dysku i przyspiesza jego pr??dko????!</p>
            </dd>
          </dl>
          <dl class="center">
            <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"></dt>
            <dd>
              <h4>Protected Folder</h4>
              <span>1 rok / 1 PC <del>149.90 z??</del></span>
              <p>Chro?? swoje pliki osobiste i trzymaj je z dala od z??o??liwych atak??w!</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="AMC Security"></dt>
            <dd>
              <h4>AMC Security</h4>
              <span>1 rok / wiele urz??dze?? <del>89.90 z??</del></span>
              <p>Pozb??d?? si?? niepotrzebnych plik??w oraz przyspiesz prac?? urz??dzenia mobilnego!</p>
            </dd>
          </dl>
        </div>
        <h5>Driver Booster PRO + darmowe prezenty</h5>
        <div class="price">
          <p><strong>89,90 z??</strong> <del>639,80 z??</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pl-db73pcsdpfamc89&ref=pl_db73pcsdpfamc89purchase2001<?php echo $refStr;?>&refs=pl_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbfebsale2020-pl');">
            KUP TERAZ
          </a>
        </div>
        <p id="giftcount" class="countdown"><strong>00</strong> godz. <strong>14</strong> min <strong>59</strong> sek</p>
      </div>

      <div class="giftdb clearfix">
        <img class="db fl" src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
        <div class="price fl">
          <p><strong>89,90 z??</strong> <del>279,90 z??</del></p>
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
      <h2>Zaufa??y mu miliony</h2>
      <dl>
        <dt><h4>200+</h4></dt>
        <dd>Popularny w ponad <b>200</b> krajach<br> na ca??ym ??wiecie</dd>
      </dl><dl>
        <dt><h4>1,000+</h4></dt>
        <dd>Ponad <b>1000</b> medi??w doceni??o<br> Driver Booster</dd>
      </dl><dl>
        <dt><h4>250,000,000+</h4></dt>
        <dd>Wybrany i rekomendowany<br> przez ponad <b>250 milion??w</b> u??ytkownik??w na ca??ym ??wiecie</dd>
      </dl><dl>
        <dt><h4>80%+</h4></dt>
        <dd>Ponad <b>80%</b> u??ytkownik??w<br> Driver Booster aktywowa??o<br> wersj?? PRO</dd>
      </dl>
    </div>
  </div>
  <!-- miliony end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
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
          <div class="pc">
            <h4>PC Magazine</h4>
            <p>
              ???IObit ma w swojej ofercie wiele program??w, a Driver Booster PRO, kt??ry automatycznie aktualizuje sterowniki, jest jednym z najlepszych. Prosta podstawowa funkcjonalno???? Driver Booster PRO jest jeszcze bardziej atrakcyjna dzi??ki po????czeniu wielu licencji w bardzo przyst??pnej cenie. Zachwyca r??wnie?? konfigurowalny interfejs, kt??ry dobrze wy??wietla specyficzne informacje zwi??zane ze sprz??tem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferuj?? atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle???
            </p>
          </div>
          <div class="active">
            <h4>Adam Backlund</h4>
            <p>
              ???Driver Booster jest niesamowit?? aplikacj??, szczeg??lnie dla kogo??, kto ma wiele aplikacji i dysk??w, ale brakuje mu czasu na ich r??czn?? aktualizacj??. Zdecydowanie polecam Driver Booster, kt??ry pomo??e zaktualizowa?? sterowniki ??atwo i szybko???
            </p>
          </div>
          <div>
            <h4>Wayne Bowler</h4>
            <p>
              ???Jest to jeden z najlepszych program??w do aktualizacji sterownik??w jaki istnieje. Microsoft zwi??d?? mnie na manowce, sugeruj??c aktualizacje, kt??re nie by??y kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo ??atwy w obs??udze i intuicyjny, podaje te?? du??o istotnych informacji. Ju?? zawsze b??d?? go u??ywa??... ??wietna robota!???
            </p>
          </div>
          <div>
            <h4>Myo Thuya</h4>
            <p>
              ???Dzi??ki Driver Booster mog?? z ??atwo??ci?? sprawdzi??, kt??re sterowniki urz??dze?? s?? nieaktualne, a nast??pnie ??atwo je zaktualizowa??. Poza tym program pomaga mi naprawi?? b????dy d??wi??ku, b????dy sieci, b????dy urz??dze?? itp. Z pocz??tku nie wierzy??em w dzia??anie Driver Booster, ale po u??yciu naprawd?? mi si?? podoba. M??j komputer jest szybszy, bezpieczniejszy i nowszy ni?? 8 miesi??cy temu... Dzi??kuj?? IObit???
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
    <h2>Zyskaj wi??cej dzi??ki Driver Booster PRO </h2>
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">Por??wnanie produkt??w: </th>
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
             <span  style="display: inline-block; padding-left: 6px;">200% wi??ksza baza danych, aby zaktualizowa?? znacznie wi??cej rzadkich i przestarza??ych sterownik??w <sup class="all-icons"></sup></span>
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
            <span style="display: inline-block; padding-left: 6px;"> Automatyczne tworzenie kopii zapasowych wszystkich sterownik??w w celu bezpiecznego odzyskiwania <sup class="all-icons nov">Nuovo</sup></span>
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
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
          <td class="virtue">
            Skuteczne wykrywanie i naprawianie b????d??w sterownik??w <sup class="all-icons">Ulepszone</sup>
          </td>
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
        <p><del class="origain">639,80 z??</del>  <strong class="discount">89,90 z??</strong></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pl-db73pcsdpfamc89&ref=pl_db73pcsdpfamc89purchase2001<?php echo $refStr;?>&refs=pl_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbfebsale2020-pl');">
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
        <dd>1. Programy promocyjne mog?? ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami. </dd>
        <dd>2. Dane mog?? si?? r????ni?? w zale??no??ci od systemu lub komputera.</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrze??one</p>
    </div>
  </div>
  <!-- footer end -->

  <script>var _src = "<?php echo getStaticUrl('images/db-box-sold.png')?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>