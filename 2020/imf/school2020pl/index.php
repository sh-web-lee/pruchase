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
  $c_name = 'plimfschool0621_p' . $date;
  $c_name_t='plimfschool0621_t' . $date;
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

$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xi_imf','xb_imf'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title> Wielka promocja na najnowszy IObit Malware Fighter PRO! - IObit  </title>
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
        <h2>PE??NE BEZPIECZE??STWO W SIECI</h2>
        <h1>SPECJALNA PROMOCJA NA NOWY ROK SZKOLNY</h1>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
          <b class="discount">-30<small>%</small></b>
          <div class="price">
            <p><strong>79,90 z??</strong> <del>119,90 z??</del></p>
            <p><b>11,65 z??</b> / 1 miesi??c</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-imf81pc79&ref=pl_imf81pc79purchase2008<?php echo $refStr;?>&refs=pl_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf-school2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">1 rok / 1 komputer</p>
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
          <img src="<?php echo getStaticUrl('images/banner-3pcbundle.png')?>" alt="">
          <b class="discount">-80<small>%</small></b>
          <div class="price">
            <p><strong>89,90 z??</strong> <del>469,70 z??</del></p>
            <p><b>7,49 z??</b> / 1 miesi??c</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imf83pcsdiu89purchase2008<?php echo $refStr;?>&refs=pl_purchase_imf  "
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf-school2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">1 rok / <b class="red">3 komputer</b></p>
          </div>
        </div>
        <div class="offer right">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
          <b class="discount">-50<small>%</small></b>
          <div class="price">
            <p><strong>89,90 z??</strong> <del>199,90 z??</del></p>
            <p><b>7,07 z??</b> / 1 miesi??c</p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-imf83pc89&ref=pl_imf83pc89purchase2008<?php echo $refStr;?>&refs=pl_purchase_imf  "
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf-school2020-pl');">
              KUP TERAZ
            </a>
            <p class="month">1 rok / 3 komputer</p>
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
  </div>

 
<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <!-- title -->
    <div class="title">
      <h2>Gwarantujemy Ci ochron?? komputera i prywatno??ci w Internecie</h2>
      <p>W przeciwnym razie natychmiast zwr??cimy Ci pieni??dze!*</p>
    </div>
    <!-- top -->
    <div class="content top clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
        <dd>
          <h4>Silnik antywirusowy Bitdefender</h4>
          <p>
            Zabezpiecz si?? przed <br>
            209 milionami zagro??e?? ONLINE
          </p>
        </dd>
      </dl>
      <dl class="twice">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
        <dd>
          <h4>Bezpieczne dane osobowe</h4>
          <p>
            Chro?? dane osobowe za pomoc?? has??a i <br>
            dzi??ki ulepszonemu silnikowi anty-ransomware

          </p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
        <dd>
          <h4>Ochrona przed ransomware</h4>
          <p>
            Zapewni ochron?? przed <br>
            oprogramowaniem szpieguj??cym
          </p>
        </dd>
      </dl>
    </div>
    <!--  bot-->
    <div class="content bot">
      <dl>
        <dt>Kupuj i p??a?? online bez obaw</dt>
        <dd>
          IObit Malware Fighter PRO automatycznie wykrywa i <br>
          blokuje podejrzane lub fa??szywe strony, aby zapewni?? Ci <br>
          bezpieczne zakupy i bankowo???? online.
        </dd>
      </dl>
      <dl class="last">
        <dt>Zabezpiecz przegl??darke</dt>
        <dd>
          Automatycznie usuwaj pliki cookies i niebezpieczne <br>
          ??lady, aby uniemo??liwi?? hakerom wyszukiwanie tre??ci, <br>
          kt??re czytasz i przegl??dasz.
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end feature -->

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
          <img class="fl" src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
          <ul class="fl">
            <li>Przyspiesz komputer</li>
            <li>Zoptymalizuj dysk</li>
            <li>Zwi??ksz wydajno???? gier</li>
          </ul>
        </div>
      </div>
      <div class="price">
        <h3>IObit Malware Fighter + prezenty</h3>
        <p><strong>89,90 z??</strong> <del>469,70 z??</del></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imf83pcsdiu89purchase2008<?php echo $refStr;?>&refs=pl_purchase_imf  "
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf-school2020-pl');">
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
          <span class="one"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt=""/></span>
          <span class="two"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt=""/></span>
          <span class="three"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt=""/></span>
          <span class="four"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt=""/></span>
          <span class="five"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt=""/></span>
          <span class="six"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt=""/></span>
        </div>
        <div class="reviewlist fr">
          <ul>
            <li>
              <h3>Software Informer</h3>
              <p>???U??ywali??my do kilkunastu r????nych program??w, aby nasze komputery dzia??a??y bezproblemowo i trzyma??y haker??w z dala. Utrzymanie bezpiecze??stwa i wydajno??ci ka??dego tygodnia zajmowa??o du??o czasu. Teraz, dzi??ki IObit Malware Fighter Pro i Advanced SystemCare Pro, wszystko jest w jednym miejscu i wystarczy tylko kilka minut tygodniowo, aby zabezpieczy?? i zoptymalizowa?? nasze komputery. Od kiedy u??ywamy waszych program??w, nie mamy ju?? ??adnych problem??w z komputerem???.</p>
            </li>
            <li>
              <h3>Peter Stoffers</h3>
              <p>???Program wykorzystuje dwa silniki AV, w??asny oraz BitDefender. Program wydaje si?? skutecznie dzia??a?? przeciwko szkodliwemu oprogramowaniu, kt??re nie mo??e zosta?? wykryte przez inne podobnie dzia??aj??ce programy. Bardzo dobrze, ??e mo??e dzia??a?? razem ze standardowym oprogramowaniem AV. Mo??e wykry?? szeroki zakres program??w szpieguj??cych, ransomware, adware, trojan??w, robak??w, keylogger??w i bot??w.???</p>
            </li>
            <li>
              <h3>David Cassidy</h3>
              <p>???Kilka lat temu kto?? zwr??ci?? moj?? uwag?? na IObit Malware Fighter. Najpierw by??em sceptycznie nastawiony. Jednak po zainstalowaniu sta?? si?? on moim ulubionym programem przeciwko z??o??liwemu oprogramowaniu. Jest bardzo ??atwy w u??yciu. Przez lata uda??o mu si?? wykry?? i usun???? wiele zagro??e??. We wsp????pracy z innymi programami IObit, takimi jak na przyk??ad ASC, mam zapewnion?? dobr?? ochron?? komputera. Teraz polecam te programy wszystkim moim znajomym i rodzinie???.</p>
            </li>
            <li>
              <h3>Adam Cullen</h3>
              <p>???Chcia??bym bardzo podzi??kowa?? wszystkim pracownikom IObit za ci????k?? prac?? nad dostarczeniem nam najlepszych program??w. Rozwijacie si?? dla u??ytkownik??w. Ostatnia aktualizacja jest znacznie szybsza w skanerze i ??atwa w obs??udze. Ci, kt??rzy szukaj?? naprawd?? dobrego programu antywirusowego, kt??ry jest r??wnie?? wart swojej ceny, nie musz?? szuka?? dalej ni?? IObit Malware Fighter???.</p>
            </li>
             <li>
              <h3>Filipe</h3>
              <p>???Jestem bardzo zadowolony z waszego produktu IObit Maleware Fighter. Przed zakupieniem tego produktu, mia??em wiele problem??w ze z??o??liwymi zak????ceniami, nie by??em w stanie obejrze?? ca??ego filmu lub koncertu, co bardzo lubi?? robi??. Dzi??ki waszemu programowi, teraz ka??da operacja jest przejrzysta, bezpieczna i dobrze chroniona. Program skanuje m??j laptop bez wp??ywu na jego wydajno????. Poleci??em ten produkt dw??m moim znajomym???.</p>
            </li>
            <li>
              <h3>Gelu Bati</h3>
              <p>???U??ywali??my do kilkunastu r????nych program??w, aby nasze komputery dzia??a??y bezproblemowo i trzyma??y haker??w z dala. Utrzymanie bezpiecze??stwa i wydajno??ci ka??dego tygodnia zajmowa??o du??o czasu. Teraz, dzi??ki IObit Malware Fighter Pro i Advanced SystemCare Pro, wszystko jest w jednym miejscu i wystarczy tylko kilka minut tygodniowo, aby zabezpieczy?? i zoptymalizowa?? nasze komputery. Od kiedy u??ywamy waszych program??w, nie mamy ju?? ??adnych problem??w z komputerem???.</p>
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
    <h2>Kompleksowa ochrona tylko w PRO</h2>
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text"></th>
          <th class="space"></th>
          <th class="itema">
            <div class="pro">
              <h3>IObit Malware Fighter <br> PRO</h3>
            </div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="free">
              <h3>IObit Malware Fighter <br> FREE</h3>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></td>
          <td class="virtue"> Baza danych z??o??liwego oprogramowania</td>
          <td class="space"></td>
          <td class="itema">Ponad 209 milion??w</td>
          <td class="space"></td>
          <td class="itemb">9 milion??w</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
          <td class="virtue"> Silniki antywirusowe Bitdefender</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
          <td class="virtue vtop">
              Silnik anty-Ransomware
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
          <td class="virtue">
            Ochrona folder??w i plik??w przed atakami ransomware
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
          <td class="vtop">
              Ochrona kamery internetowej
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
          <td class="virtue">Ochrona przed ??ledzeniem</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
          <td class="virtue">Ochrona klucza USB</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
          <td class="virtue">Wra??liwe dane chronione has??em</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></td>
          <td class="virtue">Ochrona w czasie rzeczywistym </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
         <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></td>
          <td class="virtue">Automatyczna aktualizacja</td>
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
          <img class="on" src="<?php echo getStaticUrl('images/banner-3pcbundle.png')?>" alt="" />
          <img class="db" src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="" />
          <span class="discount on">-80<small>%</small></span>
        </div>
        <ul class="changelist fl">
          <li class="one on" data-num="1"><b>1 rok / 3 komputery + DARMOWE PREZENTY </b></li>
          <li class="two" data-num="2"><b>1 rok / 3 komputery</b></li>
          <li class="three" data-num="0"><b>1 rok / 1 komputer</b></li>
        </ul>
        <div class="price fr">
          <p><strong>89,90 z??</strong> <del>549,70 z??</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imf83pcsdiu89purchase2008<?php echo $refStr;?>&refs=pl_purchase_imf  "
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf-school2020-pl');">
            KUP TERAZ
          </a>
        </div>
      </div>
      <div class="footer">
        <dl class="note">
          <dt>Uwaga:</dt>
          <dd>* Programy promocyjne mog?? ulec zmianie bez powiadomienia, w dowolnym momencie i wed??ug w??asnego uznania IObit.</dd>
          <dd>* Dane mog?? si?? r????ni?? w zale??no??ci od r????nych system??w lub komputer??w.</dd>
          <dd>* Je??li b??dziesz niezadowolony, to mo??esz anulowa?? zakup w ci??gu 60 dni bez ??adnych op??at. Pieni??dze zostan?? automatycznie zwr??cone na twoje konto.</dd>
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