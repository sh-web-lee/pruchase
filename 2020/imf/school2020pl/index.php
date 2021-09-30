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
        <h2>PEŁNE BEZPIECZEŃSTWO W SIECI</h2>
        <h1>SPECJALNA PROMOCJA NA NOWY ROK SZKOLNY</h1>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
          <b class="discount">-30<small>%</small></b>
          <div class="price">
            <p><strong>79,90 zł</strong> <del>119,90 zł</del></p>
            <p><b>11,65 zł</b> / 1 miesiąc</p>
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
              Zostało tylko <span class="reduce">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> pakietów</p>
          </div>
          <img src="<?php echo getStaticUrl('images/banner-3pcbundle.png')?>" alt="">
          <b class="discount">-80<small>%</small></b>
          <div class="price">
            <p><strong>89,90 zł</strong> <del>469,70 zł</del></p>
            <p><b>7,49 zł</b> / 1 miesiąc</p>
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
            <p><strong>89,90 zł</strong> <del>199,90 zł</del></p>
            <p><b>7,07 zł</b> / 1 miesiąc</p>
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
        <dt>Akceptowane płatności</dt>
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
      </dl>
      <dl>
        <dt>Gwarancja zwrotu pieniędzy</dt>
        <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
      </dl>
      <dl class="last">
        <dt>Bezpieczna płatność</dt>
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
      <h2>Gwarantujemy Ci ochronę komputera i prywatności w Internecie</h2>
      <p>W przeciwnym razie natychmiast zwrócimy Ci pieniądze!*</p>
    </div>
    <!-- top -->
    <div class="content top clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
        <dd>
          <h4>Silnik antywirusowy Bitdefender</h4>
          <p>
            Zabezpiecz się przed <br>
            209 milionami zagrożeń ONLINE
          </p>
        </dd>
      </dl>
      <dl class="twice">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
        <dd>
          <h4>Bezpieczne dane osobowe</h4>
          <p>
            Chroń dane osobowe za pomocą hasła i <br>
            dzięki ulepszonemu silnikowi anty-ransomware

          </p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
        <dd>
          <h4>Ochrona przed ransomware</h4>
          <p>
            Zapewni ochronę przed <br>
            oprogramowaniem szpiegującym
          </p>
        </dd>
      </dl>
    </div>
    <!--  bot-->
    <div class="content bot">
      <dl>
        <dt>Kupuj i płać online bez obaw</dt>
        <dd>
          IObit Malware Fighter PRO automatycznie wykrywa i <br>
          blokuje podejrzane lub fałszywe strony, aby zapewnić Ci <br>
          bezpieczne zakupy i bankowość online.
        </dd>
      </dl>
      <dl class="last">
        <dt>Zabezpiecz przeglądarke</dt>
        <dd>
          Automatycznie usuwaj pliki cookies i niebezpieczne <br>
          ślady, aby uniemożliwić hakerom wyszukiwanie treści, <br>
          które czytasz i przeglądasz.
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end feature -->

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Czystszy, szybszy, bezpieczniejszy komputer<br> dzięki DARMOWYM PREZENTOM</h2>
      <div class="clearfix">
        <div class="gift-list">
          <img class="fl" src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
          <ul class="fl">
            <li>Całkowicie odinstaluj programy</li>
            <li>Usuń złośliwe wtyczki</li>
            <li>Automatycznie aktualizuj programy</li>
          </ul>
        </div>
        <div class="gift-list pf">
          <img class="fl" src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
          <ul class="fl">
            <li>Przyspiesz komputer</li>
            <li>Zoptymalizuj dysk</li>
            <li>Zwiększ wydajność gier</li>
          </ul>
        </div>
      </div>
      <div class="price">
        <h3>IObit Malware Fighter + prezenty</h3>
        <p><strong>89,90 zł</strong> <del>469,70 zł</del></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imf83pcsdiu89purchase2008<?php echo $refStr;?>&refs=pl_purchase_imf  "
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf-school2020-pl');">
          KUP TERAZ
        </a>
        <p>Pospiesz się, zostało tylko<span class="reduce"><b>123</b><b class="reduceNum">123</b></span>pakietów </p>
      </div>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Zobacz co mówią użytkownicy i media</h2>
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
              <p>„Używaliśmy do kilkunastu różnych programów, aby nasze komputery działały bezproblemowo i trzymały hakerów z dala. Utrzymanie bezpieczeństwa i wydajności każdego tygodnia zajmowało dużo czasu. Teraz, dzięki IObit Malware Fighter Pro i Advanced SystemCare Pro, wszystko jest w jednym miejscu i wystarczy tylko kilka minut tygodniowo, aby zabezpieczyć i zoptymalizować nasze komputery. Od kiedy używamy waszych programów, nie mamy już żadnych problemów z komputerem”.</p>
            </li>
            <li>
              <h3>Peter Stoffers</h3>
              <p>„Program wykorzystuje dwa silniki AV, własny oraz BitDefender. Program wydaje się skutecznie działać przeciwko szkodliwemu oprogramowaniu, które nie może zostać wykryte przez inne podobnie działające programy. Bardzo dobrze, że może działać razem ze standardowym oprogramowaniem AV. Może wykryć szeroki zakres programów szpiegujących, ransomware, adware, trojanów, robaków, keyloggerów i botów.”</p>
            </li>
            <li>
              <h3>David Cassidy</h3>
              <p>„Kilka lat temu ktoś zwrócił moją uwagę na IObit Malware Fighter. Najpierw byłem sceptycznie nastawiony. Jednak po zainstalowaniu stał się on moim ulubionym programem przeciwko złośliwemu oprogramowaniu. Jest bardzo łatwy w użyciu. Przez lata udało mu się wykryć i usunąć wiele zagrożeń. We współpracy z innymi programami IObit, takimi jak na przykład ASC, mam zapewnioną dobrą ochronę komputera. Teraz polecam te programy wszystkim moim znajomym i rodzinie”.</p>
            </li>
            <li>
              <h3>Adam Cullen</h3>
              <p>„Chciałbym bardzo podziękować wszystkim pracownikom IObit za ciężką pracę nad dostarczeniem nam najlepszych programów. Rozwijacie się dla użytkowników. Ostatnia aktualizacja jest znacznie szybsza w skanerze i łatwa w obsłudze. Ci, którzy szukają naprawdę dobrego programu antywirusowego, który jest również wart swojej ceny, nie muszą szukać dalej niż IObit Malware Fighter”.</p>
            </li>
             <li>
              <h3>Filipe</h3>
              <p>„Jestem bardzo zadowolony z waszego produktu IObit Maleware Fighter. Przed zakupieniem tego produktu, miałem wiele problemów ze złośliwymi zakłóceniami, nie byłem w stanie obejrzeć całego filmu lub koncertu, co bardzo lubię robić. Dzięki waszemu programowi, teraz każda operacja jest przejrzysta, bezpieczna i dobrze chroniona. Program skanuje mój laptop bez wpływu na jego wydajność. Poleciłem ten produkt dwóm moim znajomym”.</p>
            </li>
            <li>
              <h3>Gelu Bati</h3>
              <p>„Używaliśmy do kilkunastu różnych programów, aby nasze komputery działały bezproblemowo i trzymały hakerów z dala. Utrzymanie bezpieczeństwa i wydajności każdego tygodnia zajmowało dużo czasu. Teraz, dzięki IObit Malware Fighter Pro i Advanced SystemCare Pro, wszystko jest w jednym miejscu i wystarczy tylko kilka minut tygodniowo, aby zabezpieczyć i zoptymalizować nasze komputery. Od kiedy używamy waszych programów, nie mamy już żadnych problemów z komputerem”.</p>
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
          <td class="virtue"> Baza danych złośliwego oprogramowania</td>
          <td class="space"></td>
          <td class="itema">Ponad 209 milionów</td>
          <td class="space"></td>
          <td class="itemb">9 milionów</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
          <td class="virtue"> Silniki antywirusowe Bitdefender</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
          <td class="virtue vtop">
              Silnik anty-Ransomware
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
          <td class="virtue">
            Ochrona folderów i plików przed atakami ransomware
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
          <td class="vtop">
              Ochrona kamery internetowej
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
          <td class="virtue">Ochrona przed śledzeniem</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
          <td class="virtue">Ochrona klucza USB</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
          <td class="virtue">Wrażliwe dane chronione hasłem</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></td>
          <td class="virtue">Ochrona w czasie rzeczywistym </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
         <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></td>
          <td class="virtue">Automatyczna aktualizacja</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footerbuy start -->
  <div class="footerbuy">
    <div class="wrapper">
      <h2>Nie zwlekaj i usprawnij komputer już TERAZ!</h2>
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
          <p><strong>89,90 zł</strong> <del>549,70 zł</del></p>
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
          <dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.</dd>
          <dd>* Dane mogą się różnić w zależności od różnych systemów lub komputerów.</dd>
          <dd>* Jeśli będziesz niezadowolony, to możesz anulować zakup w ciągu 60 dni bez żadnych opłat. Pieniądze zostaną automatycznie zwrócone na twoje konto.</dd>
        </dl>
        <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
      </div>
    </div>
  </div>
  <!-- footerbuy end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <h2>NIE PRZEGAP SUPER PROMOCJI</h2>
    <p class="f-gift">Zostało tylko<span class="reduce"><b>123</b><b class="reduceNum">123</b></span>pakietów!</p>
    <p><b class="userNum">00</b> osób przegląda stronę</p>
    <i class="close">X</i>
  </div>
  <!-- floatlayer end -->

  <script>var refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>