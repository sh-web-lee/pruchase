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
  $c_name = 'plascschool0621_p' . $date;
  $c_name_t='plascschool0621_t' . $date;
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
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title> Wielka promocja na najnowszy Advanced SystemCare PRO! - IObit  </title>
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
        <h2>Szybszy, wydajniejszy i bezpieczniejszy komputer</h2>
        <h1>Specjalna promocja na nowy rok szkolny!</h1>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt="">
          <b class="discount">-40<small>%</small></b>
          <div class="price">
            <p><strong>69,90 z??</strong> <del> 110,90 z??</del></p>
            <p><b>5,82 z?? </b> / 1 miesi??c</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-asc131pc69&ref=pl_asc131pc69purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc    "
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">1 komputer / 1 rok</p>
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
          <img src="<?php echo getStaticUrl('images/asc-bundle-box.png')?>" alt="">
          <b class="discount">-80<small>%</small></b>
          <div class="price">
            <p><strong>74,90 z??</strong> <del>469,70 z??</del></p>
            <p><b>6,24 z??</b> / 1 miesi??c</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
              KUP TERAZ
            </a>
            <p class="month"><b class="red">3  komputery </b> / 1 rok</p>
          </div>
        </div>
        <div class="offer right">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="">
          <b class="discount">-60<small>%</small></b>
          <div class="price">
            <p><strong>74,90 z??</strong> <del>199,90 z??</del></p>
            <p><b>6,24 z??</b> / 1 miesi??c</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc  "
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">3 komputery / 1 rok</p>
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
          <dd>Ponad <b>1000</b> medi??w doceni??o<br> Advanced SystemCare</dd>
        </dl>
        <dl class="three">
          <dt><h4>210 000 000+</h4></dt>
          <dd>Wybrany i rekomendowany<br> przez ponad <b>210 milion??w</b><br> u??ytkownik??w na ca??ym ??wiecie</dd>
        </dl>
        <dl class="four">
          <dt><h4>80%+</h4></dt>
          <dd>Ponad <b>80%</b> u??ytkownik??w<br> Advanced SystemCare aktywowa??o<br> wersj?? PRO</dd>
        </dl>
      </div>
    </div>
    <!-- miliony end -->
  </div>

  <!-- benefits start -->
  <div class="benefits">
    <div class="wrapper">
      <h2>Zyskaj wi??cej z Advanced SystemCare PRO!</h2>
      <div class="clearfix">
        <div class="showcase fl">
          <div class="inner">
            <ul class="screenshot">
              <li class="on">
                <img src="<?php echo getStaticUrl('images/screenshot-01.png')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-02.png')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-03.png')?>" alt="">
              </li>
              <li>
                <img src="<?php echo getStaticUrl('images/screenshot-04.png')?>" alt="">
              </li>
            </ul>
          </div>
          <ul class="zoom">
            <li class="on">
              <div class="container">
                <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt="">
              </div>
            </li>
            <li>
              <div class="container">
                <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt="">
              </div>
            </li>
            <li>
              <div class="container">
                <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt="">
              </div>
            </li>
            <li>
              <div class="container">
                <img src="<?php echo getStaticUrl('images/screenshot-05-zoom.png')?>" alt="">
              </div>
            </li>
          </ul>
        </div>
        <div class="detail-list fr">
          <dl class="on">
            <dt><i class="benefits01"></i></dt>
            <dd>
              <h3>200% szybszy komputer</h3>
              <p>
                Czy??ci niepotrzebne pliki i optymalizuje procesor i pami???? RAM w celu uzyskania szybszego systemu. Sprawia, ??e Tw??j system jest do 200%* szybszy ni?? przy u??yciu darmowej wersji.
              </p>
            </dd>
          </dl>
          <dl class="two">
            <dt><i class="benefits02"></i></dt>
            <dd>
              <h3>100% ochrony</h3>
              <p>Chroni Twoj?? prywatno???? i dane przed niepo????danym dost??pem, dwukrotnie lepiej* ni?? wersja darmowa.</p>
            </dd>
          </dl>
          <dl>
            <dt><i class="benefits03"></i></dt>
            <dd>
              <h3>300% szybszy Internet</h3>
              <p>Pobieranie, granie online, przegl??danie stron internetowych, e-mail, a tak??e filmy z YouTube i Netflix b??d?? dzia??a?? jeszcze sprawniej i szybciej!*</p>
            </dd>
          </dl>
          <dl class="last two">
            <dt><i class="benefits04"></i></dt>
            <dd>
              <h3>Wi??cej miejsca na dysku</h3>
              <p>Ca??kowicie usuwa niepotrzebne pliki, nieprawid??owe skr??ty, wpisy rejestru i niepoprawnie pobrane pliki.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- benefits end -->

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
        <h3>Advanced SystemCare PRO + prezenty</h3>
        <p><strong>74,90 z??</strong> <del>469,70 z??</del></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
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
          <span class="one"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"/></span>
          <span class="three "><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"/></span>
          <span class="four"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"/></span>
          <span class="five"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"/></span>
          
        </div>
        <div class="reviewlist fr">
          <ul>

            <li>
              <h3>Cnet</h3>
              <p>???Nie ma nic gorszego ni?? komputer, kt??ry jest tak zapchany, ??e jego u??ytkowanie oraz granie staj?? si?? niemo??liwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprz??tanie niepotrzebnych plik??w, z??o??liwego oprogramowania i nieprawid??owych wpis??w w rejestrze, ale r??wnie?? daj??c Twojemu komputerowi impuls do zoptymalizowania jego dzia??ania???.</p>
            </li>
            <li>
              <h3>Tony Fisher</h3>
              <p>???U??ywam Advanced SystemCare Pro od d??u??szego czasu, a najnowsza wersja 13 jest nawet lepsza ni?? wersja 12. ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych funkcji, kt??rych mo??esz u??y??, aby utrzyma?? komputer w dobrym stanie. Gor??co polecam wszystkim najnowszy Advanced SystemCare 13???.</p>
            </li>
            <li>
              <h3>Danny R. Sheets</h3>
              <p>
                ???Nigdy nie znalaz??em lepszego programu do konserwacji i bezpiecze??stwa komputera ni?? Advanced SystemCare. Odk??d kupi??em ASC, nigdy nie mia??em problem??w z wirusami, phishingiem, czarnymi ekranami lub innymi rodzajami b????d??w. To by??y najlepiej zainwestowane pieni??dze, jakie kiedykolwiek wyda??em na komputer. Dzi??kuj?? ASC za to, ??e korzystanie z komputera jest du??o przyjemniejsze???.
              </p>
            </li>
            <li>
              <h3>Daniel Sanders</h3>
              <p>
                ???Nowy ASC 13 to obowi??zkowa pozycja dla wszystkich u??ytkownik??w komputer??w. Czysty i intuicyjny interfejs jest ??atwy w obs??udze zar??wno dla pocz??tkuj??cego, jak i zaawansowanego u??ytkownika. Wiele pot????nych narz??dzi w zestawie, aby utrzyma?? najwy??sz?? wydajno???? komputera. Wyrazy uznania dla IObit za tak wspania??y zestaw narz??dzi w jednym miejscu???.
              </p>
            </li>
            <li>
              <h3>Richard Preston</h3>
              <p>
                ???Uwielbiam u??ywa?? Advanced SystemCare 13 Beta. Jest bardzo szybki. Usuwa ??lady prywatno??ci, niepotrzebne pliki i fragmenty rejestru. Szczeg??lnie podoba mi si?? wyskakuj??ce okienko z pozwoleniem na dost??p do obszar??w wra??liwych. Gdy aplikacja po raz pierwszy pr??buje uzyska?? dost??p do poufnych plik??w, otwiera si?? okno umo??liwiaj??ce dost??p lub odmow??. Po przyznaniu uprawnie?? dla aplikacji wyskakuj??ce okienko nie b??dzie ju?? dla niej wy??wietlane. Wiem, ??e moje wra??liwe pliki b??d?? bezpieczne???.
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
              <h3>Advanced SystemCare <br> PRO</h3>
            </div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="free">
              <h3>Advanced SystemCare <br> FREE</h3>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></td>
          <td class="virtue">Podstawowe czyszczenie i optymalizacja komputera</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
          <td class="virtue"> Czyszczenie i optymalizacja komputera w wersji PREMIUM </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
          <td class="virtue vtop">
              Ochrona komputera do wykrywania i usuwania najg????bszych infekcji
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
          <td class="virtue">
            Do 200% szybsze uruchamianie komputera
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
          <td class="vtop">
              Do 300% przyspieszenia Internetu dzi??ki Internet Booster
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
          <td class="virtue">Kompleksowa ochrona podczas surfowania z automatycznie usuwanymi danymi ??ledzenia</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
          <td class="virtue"> Ochrona danych osobowych</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
          <td class="virtue">Aktywne wykrywanie i blokowanie luk bezpiecze??stwa w czasie rzeczywistym</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
         <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></td>
          <td class="virtue"> Bezp??atne wsparcie techniczne 24/7 na ????danie </td>
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
          <img class="on" src="<?php echo getStaticUrl('images/asc-bundle-box.png')?>" alt="" />
          <img class="db" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="" />
          <img class="dbone" src="<?php echo getStaticUrl('images/asc-one-box.png')?>" alt="" />
          <span class="discount on">-80<small>%</small></span>
        </div>
        <ul class="changelist fl">
          <li class="one on" data-num="1"><b>   Advanced SystemCare 1 rok / 3 PC + prezenty</b></li>
          <li class="two" data-num="2"><b>Advanced SystemCare 1 rok / 3 PC</b></li>
          <li class="three" data-num="0"><b>Advanced SystemCare 1 rok / 1 PC</b></li>
        </ul>
        <div class="price fr">
          <p><strong>74,90 z??</strong> <del>469,70 z??</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-asc133pciupf74&ref=pl_asc133pciupf74purchase2008<?php echo $refStr;?>&refs=pl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc-school2020-pl');">
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