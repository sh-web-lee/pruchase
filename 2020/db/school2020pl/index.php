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
  $c_name = 'pldbschool0621_p' . $date;
  $c_name_t='pldbschool0621_t' . $date;
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
  <title> Promocja na nowy rok szkolny - Driver Booster PRO nawet 83% taniej! - IObit  </title>
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
        <h1>SPECJALNA PROMOCJA NA NOWY ROK SZKOLNY/h1>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <div class="price">
            <p><strong>69,90 z??</strong></p>
            <p><b>11,65 z??</b> / 1 miesi??c</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-db71pc6m69&ref=pl_db71pc6m69purchase2008<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db-school-2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">1 PC / 6 miesi??cy</p>
          </div>
        </div>
        <div class="offer bigbox">
          <div class="superbox">
            <h3>SUPER PROMOCJA</h3>
            <p>
              Zosta??o tylko <span class="reduce">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> pakiet??w</p>
          </div>
          <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="">
          <b class="discount">-83<small>%</small></b>
          <div class="price">
            <p><strong>89,90 z??</strong> <del>549,70 z??</del></p>
            <p><b>7,49 z??</b> / 1 miesi??c</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-db73pciupf89&ref=pl_db73pciupf89purchase2008<?php echo $refStr;?>&refs=pl_purchase_db "
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db-school-2020-pl');">
              KUP TERAZ
            </a>
            <p class="month"><b class="red">3 PC</b> / 1 rok</p>
          </div>
        </div>
        <div class="offer right">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <b class="discount">-63<small>%</small></b>
          <div class="price">
            <p><strong>84,90 z??</strong> <del>229,90 z??</del></p>
            <p><b>7,07 z??</b> / 1 miesi??c</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pl-db71pc84&ref=pl_db71pc84purchase2008<?php echo $refStr;?>&refs=pl_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db-school-2020-pl');">
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

    <!-- miliony start -->
    <div class="miliony">
      <h2>Gwarantujemy Ci wi??kszy komfort pracy i grania!</h2>
      <p>W przeciwnym razie natychmiast zwr??cimy Ci pieni??dze!*</p>
      <div class="miliony-box clearfix">
        <dl>
          <dt><h4>200+</h4></dt>
          <dd>Popularny w ponad <b>200</b> krajach<br> na ca??ym ??wiecie</dd>
        </dl>
        <dl class="two">
          <dt><h4>1 000+</h4></dt>
          <dd>Ponad <b>1000</b> medi??w doceni??o<br> Driver Booster</dd>
        </dl>
        <dl class="three">
          <dt><h4>250 000 000+</h4></dt>
          <dd>Wybrany i rekomendowany<br> przez ponad <b>250 milion??w</b><br> u??ytkownik??w na ca??ym ??wiecie</dd>
        </dl>
        <dl class="four">
          <dt><h4>80%+</h4></dt>
          <dd>Ponad <b>80%</b> u??ytkownik??w<br> Driver Booster aktywowa??o<br> wersj?? PRO</dd>
        </dl>
      </div>
    </div>
    <!-- miliony end -->
  </div>

  <!-- feature start -->
  <div class="feature wrapper">
    <h2>Zyskaj wi??cej z Driver Booster PRO</h2>
    <div class="feature-box one clearfix">
      <div class="textbox fl">
        <h3>Baza danych ponad<br> 3??500??000 sterownik??w</h3>
        <p>Wykryj i aktualizuj rzadkie, niedopasowane i przestarza??e sterowniki za pomoc?? jednego klikni??cia.</p>
      </div>
      <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/db-screesn01.png')?>" alt=""/></div>
    </div>
    <div class="feature-box two clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/db-screesn02.png')?>" alt=""/></div>
      <div class="textbox fr">
        <h3>Automatyczna, szybka i bezpieczna aktualizacja sterownik??w</h3>
        <p>Aktualizuj sterowniki automatycznie podczas bezczynno??ci systemu. Poprzednie sterowniki zostan?? archiwizowane w przypadku niespodziewanych zdarze??.</p>
      </div>
    </div>
    <div class="feature-box three clearfix">
      <div class="textbox fl">
        <h3>Lepsza wydajno???? gier</h3>
        <p>Zaktualizuj sterowniki Game Ready oraz najnowsze i niezb??dne komponenty gier, aby cieszy?? si?? szybszym i p??ynniejszym graniem.</p>
      </div>
      <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/db-screesn03.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- feature end -->

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Czystszy, szybszy, bezpieczniejszy komputer<br> dzi??ki DARMOWYM PREZENTOM</h2>
      <div class="clearfix">
        <div class="gift-list">
          <img class="fl" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
          <ul class="fl">
            <li>Ca??kowicie odinstaluj programy</li>
            <li>Usu?? z??o??liwe wtyczki</li>
            <li>Automatycznie aktualizuj programy</li>
          </ul>
        </div>
        <div class="gift-list pf">
          <img class="fl" src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/>
          <ul class="fl">
            <li>Zabezpiecz dane has??em</li>
            <li>Chro?? pliki przed atakami</li>
            <li>Chro?? prywatno????</li>
          </ul>
        </div>
      </div>
      <div class="price">
        <h3>Driver Booster PRO + prezenty</h3>
        <p><strong>89,90 z??</strong> <del>549,70 z??</del></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-db73pciupf89&ref=pl_db73pciupf89purchase2008<?php echo $refStr;?>&refs=pl_purchase_db "
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db-school-2020-pl');">
          KUP TERAZ
        </a>
        <p>Pospiesz si??, zosta??o tylko<span class="reduce"><b>123</b><b class="reduceNum">123</b></span>pakiet??w </p>
      </div>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Zobacz co m??wi?? u??ytkownicy i media</h2>
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
                ???IObit ma w swojej ofercie wiele program??w, a Driver Booster PRO, kt??ry automatycznie aktualizuje sterowniki, jest jednym z najlepszych. Prosta podstawowa funkcjonalno???? Driver Booster PRO jest jeszcze bardziej atrakcyjna dzi??ki po????czeniu wielu licencji w bardzo przyst??pnej cenie. Zachwyca r??wnie?? konfigurowalny interfejs, kt??ry dobrze wy??wietla specyficzne informacje zwi??zane ze sprz??tem. Konkurenci tacy jak Ashampoo Driver Updater i SlimWare Utilities DriverUpdate oferuj?? atrakcyjne funkcje, ale IObit Driver Booster PRO zostawia ich daleko w tyle???
              </p>
            </li>
            <li>
              <h3>Adam Backlund</h3>
              <p>
                ???Driver Booster jest niesamowit?? aplikacj??, szczeg??lnie dla kogo??, kto ma wiele aplikacji i dysk??w, ale brakuje mu czasu na ich r??czn?? aktualizacj??. Zdecydowanie polecam Driver Booster, kt??ry pomo??e zaktualizowa?? sterowniki ??atwo i szybko???
              </p>
            </li>
            <li>
              <h3>Wayne Bowler</h3>
              <p>
                ???Jest to jeden z najlepszych program??w do aktualizacji sterownik??w jaki istnieje. Microsoft zwi??d?? mnie na manowce, sugeruj??c aktualizacje, kt??re nie by??y kompatybilne z moim komputerem. Ten program bezproblemowo znajduje odpowiednie sterowniki. Jest bardzo ??atwy w obs??udze i intuicyjny, podaje te?? du??o istotnych informacji. Ju?? zawsze b??d?? go u??ywa??... ??wietna robota!???
              </p>
            </li>
            <li>
              <h3>Myo Thuya</h3>
              <p>
                ???Dzi??ki Driver Booster mog?? z ??atwo??ci?? sprawdzi??, kt??re sterowniki urz??dze?? s?? nieaktualne, a nast??pnie ??atwo je zaktualizowa??. Poza tym program pomaga mi naprawi?? b????dy d??wi??ku, b????dy sieci, b????dy urz??dze?? itp. Z pocz??tku nie wierzy??em w dzia??anie Driver Booster, ale po u??yciu naprawd?? mi si?? podoba. M??j komputer jest szybszy, bezpieczniejszy i nowszy ni?? 8 miesi??cy temu... Dzi??kuj?? IObit???
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
    <h2>Ciesz si?? funkcjami dost??pnymi tylko w PRO</h2>
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">Por??wnanie produkt??w:</th>
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
          <td class="virtue">Pobierz i zaktualizuj przestarza??e sterowniki jednym klikni??ciem</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
          <td class="virtue">Odblokowuje maksymaln?? pr??dko???? aktualizacji nowych sterownik??w </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
          <td class="virtue vtop">
             <span  style="display: inline-block; padding-left: 6px;">200% wi??ksza baza danych, aby zaktualizowa?? znacznie wi??cej rzadkich i przestarza??ych sterownik??w</span>
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
            <span style="display: inline-block; padding-left: 6px;"> Automatyczne tworzenie kopii zapasowych wszystkich sterownik??w w celu bezpiecznego odzyskiwania</span>
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

  <!-- footerbuy start -->
  <div class="footerbuy">
    <div class="wrapper">
      <h2>Nie zwlekaj i usprawnij komputer ju?? TERAZ!</h2>
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
          <p><strong>89,90 z??</strong> <del>549,70 z??</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-db73pciupf89&ref=pl_db73pciupf89purchase2008<?php echo $refStr;?>&refs=pl_purchase_db "
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db-school-2020-pl');">
            KUP TERAZ
          </a>
        </div>
      </div>
      <div class="footer">
        <dl class="note">
          <dt>Uwaga:</dt>
          <dd>* Programy promocyjne mog?? ulec zmianie bez powiadomienia, w dowolnym momencie i wed??ug w??asnego uznania IObit.</dd>
          <dd>* Dane mog?? si?? r????ni?? w zale??no??ci od r????nych system??w lub komputer??w.</dd>
          <dd>* Je??li b??dziesz niezadowolony, to mo??esz anulowa?? zakup w ci??gu 60 dni bez ??adnych op??at. Pieni??dze zostan?? automatycznie zwr??cone na Twoje konto.</dd>
        </dl>
        <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrze??one</p>
      </div>
    </div>
  </div>
  <!-- footerbuy end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <h2>NIE PRZEGAP SUPER PROMOCJI</h2>
    <p class="f-gift">Zosta??o tylko<span class="reduce"><b>123</b><b class="reduceNum">123</b></span>pakiet??w!</p>
    <p><b class="userNum">00</b> os??b przegl??da stron??</p>
    <i class="close">X</i>
  </div>
  <!-- floatlayer end -->

  <script>var refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>