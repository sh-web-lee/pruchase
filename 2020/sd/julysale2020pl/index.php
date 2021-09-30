<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}
$refStr='';
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
  'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
  'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr.='-'.$_GET['ref'];
}
$refStr .= empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Nawet 80% zniżki na Smart Defrag PRO - IObit!</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
  <?php echo $gJavascript ['public']; ?>
  <?php echo $gJavascript ['head'] ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank"></a>
    <h1>JESZCZE SZYBSZY I WYDAJNIESZY KOMPUTER</h1>
    <h3>Tylko teraz, nawet do 80% zniżki!</h3>
    <div class="bundle-container clearfix">
      <div class="bundle left">
        <img src="<?php echo getStaticUrl('images/bundle-0.png')?>" alt=""/>
        <em>1 rok / 1 komputer</em>
        <p class="price">
          <b class="discount">69,90 zł</b> <del class="original">119,90zł</del> <br>
          <span><small>5,82 zł</small> / 1 miesiąc</span>
        </p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-sd1pc69&ref=pl_sd1pc69purchase2007<?php echo $refStr; ?>&refs=pl_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd-julysale2020-pl');">
          KUP TERAZ
        </a>
      </div>
      <div class="bundle right">
        <div class="countdown-container">
          <i></i>
          <span>12</span> godz :
          <span>24</span> min :
          <span>52</span> sek :
          <span>235</span> ms
        </div>
        <img src="<?php echo getStaticUrl('images/bundle-1.png')?>" alt=""/>
        <em>1 rok / 3 komputery</em>
        <p class="price">
          <b class="discount">79,90 zł</b> <del class="original">389,70zł</del> <br>
          <span><small>6,65 zł</small> / 1 miesiąc</span>
        </p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pl-sd63pcisupf79&ref=pl_sd63pcisupf79purchase2007<?php echo $refStr; ?>&refs=pl_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd-julysale2020-pl');">
          KUP TERAZ
        </a>
        <p class="note">Kupiło już ponad <span>107 725</span> osób</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

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

<!-- benfits start -->
<div class="feature clearfix">
  <div class="wrapper">
    <h2>Gwarantujemy Ci szybszy i wydajniejszy komputer! <br> <small>W przeciwnym razie zwrócimy Ci pieniądze*</small></h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.png')?>" alt=""/>
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li class="fun1 active">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
          </div>
        </li>
      </ul>
    </div>
    <div class="detail-list">
      <dl class="active">
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>Do 200% szybciej*</h3>
          <p>Nawet do 200% szybszy dostęp do plików i szybkość uruchamiania gier dzięki funkcji defragmentacji dużych plików.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>Inteligentny</h3>
          <p>Automatycznie defragmentuje pliki i dyski, aby komputer działał z najwyższą wydajnością, gdy tylko jest to potrzebne.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Szybsze uruchamianie komputera</h3>
          <p>Defragmentuje pliki rejestru i systemowe podczas działania systemu, zapewniając szybsze uruchamianie komputera i optymalną wydajność systemu.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Szybka defragmentacja</h3>
          <p>Defragmentuje dyski i pliki dokładniej i wydajniej, aby znacznie przyspieszyć czas defragmentacji.</p>
        </dd>
      </dl>
      <a class="textlink" href="Javascript:void(0);">Zobacz różnice pomiędzy DARMOWĄ wersją a PRO >></a>
    </div>
  </div>
</div>
<!-- benfits end -->

<!-- gifubox start -->
<div class="giftbox">
  <h2>Zyskaj więcej dzięki darmowym prezentom!</h2>
  <div class="wrapper">
    <div class="clearfix">
      <dl class="isu">
        <dt><img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt=""/></dt>
        <dd>
          <h3>IObit Software Updater 3 PRO <span>(1rok / 1 komputer)</span></h3>
          <p>Szybka i bezpieczna aktualizacja programów</p>
          <p>Automatyczne aktualizowanie programów</p>
          <p>Bezpieczne pobieranie setek programów</p>
        </dd>
      </dl>
      <dl class="pf">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
        <dd>
          <h3>Protected Folder <span>(1rok /1 komputer)</span></h3>
          <p>Zabezpiecz dane hasłem</p>
          <p>Chroń pliki przed atakami</p>
          <p>Chroń prywatność</p>
        </dd>
      </dl>
    </div>
    <a href="https://www.iobit.com/buy.php?product=pl-sd63pcisupf79&ref=pl_sd63pcisupf79purchase2007<?php echo $refStr; ?>&refs=pl_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd-julysale2020-pl');">
      KUP TERAZ
    </a>
    <div class="countdown-container countdown-lab">
      <i></i>
      <span>12</span> godz :
      <span>24</span> min :
      <span>52</span> sek :
      <span>235</span> ms
    </div>
  </div>
</div>
<!-- gifubox end -->


<!-- review -->
<div class="reviews wrapper">
  <h2>Recenzje i nagrody z całego świata</h2>
  <p>Wybrało go ponad <span>250 milionów</span> użytkowników</p>
  <div class="map">
    <span class="recover recover01 big"></span>
    <span class="recover recover02 smail"></span>
    <span class="recover recover22 middle"></span>
    <span class="recover recover03 smail"></span>
    <span class="recover recover04 big"></span>
    <span class="recover recover05 middle"></span>
    <span class="recover recover06 smail"></span>
    <span class="recover recover07 big"></span>
    <span class="recover recover08 middle"></span>
    <span class="recover recover09 smail"></span>
    <span class="recover recover10 smail"></span>
    <span class="recover recover11 smail"></span>
    <span class="recover recover12 smail"></span>
    <span class="recover recover13 middle"></span>
    <span class="recover recover14 middle"></span>
    <span class="recover recover15 smail"></span>
    <span class="recover recover16 smail"></span>
    <span class="recover recover17 big"></span>
    <span class="recover recover18 smail"></span>
    <span class="recover recover19 smail"></span>
    <span class="recover recover20 big"></span>
    <span class="recover recover21 middle"></span>
    <dl class="tradotto-da-tedesco">
      <dt><img src="<?php echo $pResUrl; ?>images/jim-parten.png"></dt>
      <dd>
        „Nie wiem, czy mógłbym być bardziej zadowolony ze Smart Defrag. <br>
        Jestem zadowolony w 100% z tego programu, jak również z <br>
        szybkiej i profesjonalnej obsługi klienta. Bardzo to doceniam.”
      </dd>
    </dl>
    <dl class="html-it">
      <dt><img src="<?php echo $pResUrl; ?>images/roland-lalis.png"></dt>
      <dd>
        „Wraz z członkami mojego klubu komputerowego używamy Smart Defrag <br>
        od początku. Kupiłem wersję PRO, która zapewnia solidniejszą i <br>
        dokładniejszą diagnozę i szybszy system.”
      </dd>
    </dl>
    <dl class="baixaki">
      <dd>
        „Korzystam z dysków SSD i HDD i używam Smart Defrag Pro do <br>
        defragmentowania i optymalizacji. Inteligentna defragmentacja <br>
        działa doskonale i nie spowalnia systemu. Zdecydowanie polecam!”
      </dd>
      <dt><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.png"></dt>
    </dl>
    <dl class="charles-r-widick">
      <dd>
        „IObit Smart Defrag optymalizuje komputer, aby w pełni <br>
        wykorzystać wydajność SSD podczas defragmentacji. Nowy Smart <br>
        Defrag to jeszcze lepszy silnik, Game Defrag i odnowiony interfejs.”
      </dd>
      <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
    </dl>
  </div>
</div>
<!-- review end -->

<!-- comparison_table -->
<div class="comparison_table wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2"><strong>Co zyskasz dzięki wersji PRO?</strong></th>
      <th class="itemb">Smart Defrag FREE</th>
      <th class="itema">Smart Defrag PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons01.jpg"></td>
      <td class="virtue">Defragmentacja i optymalizacja bazy dysku twardego</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greymark.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons02.jpg"></td>
      <td class="virtue">Prędkość dostępu do plików do 200% szybciej</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons03.jpg"></td>
      <td class="virtue">Szybsze uruchamianie komputera za pomocą defragmentacji <br> podczas uruchamiania</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons04.jpg"></td>
      <td class="virtue">Automatyczna i inteligentna defragmentacja plików</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons05.jpg"></td>
      <td class="virtue">Dostosuj tryb, wybierz dyski twarde / pliki, które chcesz <br> zdefragmentować</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons06.jpg"></td>
      <td class="virtue">DMA zastosowany dla szybszego i stabilnego transferu danych</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons07.jpg"></td>
      <td class="virtue">Brak komplikacji w trakcie gry w trybie cichym</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/greymark.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons10.jpg"></td>
      <td class="virtue">Automatyczna aktualizacja do najnowszej wersji</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons last"><img src="<?php echo $pResUrl; ?>images/table-icons11.jpg"></td>
      <td class="virtue last">Bezpłatne wsparcie techniczne 24/7 na żądanie</td>
      <td class="itemb last"></td>
      <td class="itema last"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison_table end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <h2>Nie zwlekaj i tchnij nowe życie w swój komputer!</h2>
    <div class="imgbox fl">
      <img class="small on" src="<?php echo getStaticUrl('images/sd-one-box.png') ?>" alt="" />
      <img class="small" src="<?php echo getStaticUrl('images/sd-three-box.png') ?>" alt="" />
    </div>
    <ul class="fl">
      <li class="on" data-num="1"><span>1 rok / 3 komputery <em> + prezenty </em></span></li>
      <li data-num="0"><span>1 rok / 3 komputery</span></li>
    </ul>
    <div class="price fl">
      <p>
        <b class="discount">79</b>
        <span>
            <i>90 zł</i>
            <del class="original">389,70zł</del>
          </span>
      </p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=pl-sd63pcisupf79&ref=pl_sd63pcisupf79purchase2007<?php echo $refStr; ?>&refs=pl_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd-julysale2020-pl');">
        KUP TERAZ
      </a>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- footer start -->
<div class="footer wrapper">
  <div class="notes">
    <p>Uwaga:</p>
    <p>1*. Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</p>
    <p>2*. Dane mogą się różnić w zależności od systemu lub komputera.</p>
    <p>3*. Jeśli będziesz niezadowolony, to możesz anulować zakup w ciągu 60 dni bez żadnych opłat. Pieniądze zostaną automatycznie zwrócone na Twoje konto.</p>
  </div>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Wszelkie prawa zastrzeżone</p>
</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>