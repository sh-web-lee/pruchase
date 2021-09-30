<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$packsNum=empty($_COOKIE['pc'])?120:$_COOKIE['pc'];
if ($_GET['action'] == 'getPacks') {
  $randNum=rand(1,100);
  if($randNum%4==0){
    $packsNum-=2;
  }else
    $packsNum--;
  if($packsNum<=0){
    $packsNum=120;
  }
  setcookie('pc',$packsNum,time()+3600*720);
  echo $packsNum;
  exit ;
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Nawet do 80% zniżki na Smart Defrag PRO! - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700&display=swap" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- header -->
<div class="header">
  <div class="wrapper">
    <a href="http://www.iobit.com/pl/index.php" class="logo" target="_blank">IObit</a>
    <h1>TYLKO TERAZ NAWET DO 80% TANIEJ NIE PRZEGAP SPECJALNEJ OFERTY</h1>
    <ul class="countdown" id="counttime1">
      <li>00 <span>Godz</span></li>
      <li>00 <span>min</span></li>
      <li>00 <span>sek</span></li>
      <li>000 <sup>ms</sup></li>
    </ul>
    <div class="clear"></div>
    <div class="content">
      <div class="left">
        <img src="<?php echo $pResUrl; ?>images/sd-box.png" alt="">
      </div>
      <div class="right">
        <dl class="message">
          <dt><strong>Smart Defrag 6 PRO <span>(Roczna subskrypcja / 1 PC)</span></strong> <b>79,90 zł</b></dt>
          <dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>Smart Defrag 6 PRO / 2 PC</strong> <span>ZA DARMO</span> <del> 159,80 zł</del></dd>
          <dd class="last"><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>Protected Folder / 1 PC</strong> <span>ZA DARMO</span> <del> 149,90 zł</del></dd>
        </dl>
        <dl class="buy">
          <dt><strong>79,90 zł</strong> <del>389,60 zł</del></dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=pl-sd3pcpf79&ref=pl_sd3pcpf79purchase1906<?php echo $refStr;?>&refs=pl_purchase_sd"
               onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3PC1906-pl')"
               class="buybtn">
              <i></i> Aktywuj teraz
            </a>
          </dd>
          <dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> <span class="unit-bef">Zostało tylko</span> <strong class="packs"><?php echo $packsNum; ?></strong> <span class="unit-af">paczek prezentów</span> </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- header end -->

<!-- accepted -->
<div class="wrapper accepted clearfix">
  <dl>
    <dt>Akceptowane płatności</dt>
    <dd><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dd>
  </dl>
  <dl>
    <dt>Gwarancja zwrotu pieniędzy</dt>
    <dd><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dd>
  </dl>
  <dl>
    <dt>Bezpieczna płatność</dt>
    <dd><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dd>
  </dl>
</div>
<!-- accepted end -->

<!-- benfits -->
<div class="wrapper benfits clearfix">
  <h2>
    Gwarantujemy szybszy i wydajniejszy komputer <br>
    W przeciwnym razie natychmiast zwrócimy Ci pieniądze*
  </h2>
  <dl class="row1 left">
    <dt><img src="<?php echo $pResUrl; ?>images/icons001.png" alt=""></dt>
    <dd>
      <strong>Nowy ultraszybki silnik</strong>
      <span>Wydajniejsza defragmentacja plików w krótszym czasie</span>
    </dd>
  </dl>
  <dl class="row1 right">
    <dt><img src="<?php echo $pResUrl; ?>images/icons002.png" alt=""></dt>
    <dd>
      <strong>Do 200% szybciej * </strong>
      <span>Przyspiesza dostęp do plików i szybkość uruchamiania gier dzięki funkcji defragmentacji dużych plików</span>
    </dd>
  </dl>
  <div class="clear"></div>
  <dl class="row2 left">
    <dt><img src="<?php echo $pResUrl; ?>images/icons003.png" alt=""></dt>
    <dd>
      <strong>Automatyczna defragmentacja </strong>
      <span>Automatycznie i inteligentnie defragmentuje wybrane pliki i dyski twarde</span>
    </dd>
  </dl>
  <dl class="row2 right">
    <dt><img src="<?php echo $pResUrl; ?>images/icons004.png" alt=""></dt>
    <dd>
      <strong>Szybsze uruchamianie komputera</strong>
      <span>Uruchamianie komputera i szybsze działanie systemu dzięki defragmentacji podczas uruchamiania</span></dd>
  </dl>
  <div class="clear"></div>
  <p><a href="javascript:void(0);" onclick="goTaget($('#compare'))">Dowiedz się więcej o edycji PRO ></a></p>
</div>
<!-- benfits end -->

<!-- between-buy -->
<div class="wrapper between-buy clearfix">
  <h2>Szybszy i bezpieczniejszy komputer dzięki prezentom!</h2>
  <div class="left">
    <dl class="sd">
      <dt><img src="<?php echo $pResUrl; ?>images/big-sd.png" alt=""></dt>
      <dd><strong>79,90 zł</strong></dd>
    </dl>
    <dl class="free">
      <dt><img src="<?php echo $pResUrl; ?>images/additions.png" alt=""></dt>
      <dd><strong>Darmowe prezenty!</strong></dd>
      <dd>
        Zabezpiecz swój komputer i chroń dostęp <br>
        do danych dzięki Protected Folder od IObit!
      </dd>
    </dl>
  </div>
  <dl class="right buy">
    <dt><strong>79,90 zł</strong> <del>389,60 zł</del></dt>
    <dd>
      <a href="https://www.iobit.com/buy.php?product=pl-sd3pcpf79&ref=pl_sd3pcpf79purchase1906<?php echo $refStr;?>&refs=pl_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3PC1906-pl')"
         class="buybtn large">
        <i></i> Aktywuj teraz
      </a>
    </dd>
    <dd><img src="<?php echo $pResUrl; ?>images/count.png" alt="">  <span class="unit-bef">Zostało tylko</span> <strong class="packs"><?php echo $packsNum; ?></strong> <span class="unit-af">pakiety</span></dd>
  </dl>
</div>
<!-- between-buy end -->

<!-- awards -->
<div class="wrapper awards">
  <h2>Nagrody</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
</div>
<!-- awards end -->

<!-- review -->
<div class="review wrapper">
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/cnet.png" alt="Cnet"></dt>
        <dd>
          <h2>Recenzje mediów</h2>
          <p>„IObit Smart Defrag optymalizuje komputer, aby w pełni wykorzystać wydajność SSD podczas defragmentacji dysków twardych. Narzędzie SSD Trim automatycznie włącza poprawki systemowe, które zwykle wymagają większego doświadczenia. Aktualizacje Smart Defrag obejmują nowy silnik defrag, specjalistyczny Game Defrag, fajny nowy wygląd i wiele opcji językowych (35 teraz, ale ciągle dodawane są nowe)”.</p>
          <cite>Cnet</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/jim-parten.png" alt="Jim Parten"></dt>
        <dd>
          <h2>Recenzja użytkownika</h2>
          <p>„Nie wiem, czy mógłbym być bardziej zadowolony ze Smart Defrag. Za każdym razem działa idealnie, a wszystko, co muszę zrobić, to uruchomić program i wszystko jest czyste. Jestem zadowolony w 100% z tego programu, jak również z szybkiej odpowiedzi, gdy potrzebowałem porady, jak radzić sobie z problemami, które mogłem mieć. Bardzo to doceniam”.</p>
          <cite>Jim Parten</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/roland-lalis.png" alt="Roland LALIS"></dt>
        <dd>
          <h2>Recenzja użytkownika</h2>
          <p>„Używam Smart Defrag na kilku komputerach od czasu jego utworzenia. Od początku, z członkami mojego klubu komputerowego, byliśmy w stanie zobaczyć ciągłe ulepszenia. To było dla nich idealne, z wyjątkiem angielskiej wersji językowej. Zainwestowałem więc we francuską wersję dla IObit. Od tej chwili francuskie magazyny IT zdecydowanie zalecają Smart Defrag, w tym z Optymalizatorem Windows 10, aby uzyskać solidniejszą i dokładniejszą diagnozę z opcjami przyspieszającymi uruchamianie systemu”.</p>
          <cite>Roland LALIS</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/edward-lee-ah-yen.png" alt="Edward Lee Ah Yen"></dt>
        <dd>
          <h2>Recenzja użytkownika</h2>
          <p>„Korzystam z kombinacji dysków SSD RAID 0 i dysków HDD RAID 0 i używam Smart Defrag Pro do analizowania, defragmentowania i utrzymania maksymalnej wydajności dysków. Jak z wszystkimi produktami IObit, instalacja jest bardzo prosta, tak samo jak użytkowanie. Inteligentna defragmentacja zużywa bardzo małe ilości energii, więc nie spowalnia systemu. Zdecydowanie polecam!”</p>
          <cite>Edward Lee Ah Yen</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/william-howes.png" alt="William Howes"></dt>
        <dd>
          <h2>Recenzja użytkownika</h2>
          <p>„Używam produktów IObit już od wielu lat. Ponieważ używam starszej maszyny z 6 dyskami, w tym 2 zewnętrznymi, uważam, że „Smart Defrag Pro” firmy IObit dobrze mi służył. Będąc starszym komputerem, mój system staje się dość łatwo pofragmentowany. Ustawiłem „Smart Defrag Pro” na auto defrag, a dodatkowo wykonuję „Defrag and Optimize” raz w tygodniu. Dzięki temu mój system działa płynnie i dobrze. IObit nieustannie dba o to, aby produkt był jeszcze lepszy. Jestem bardzo zadowolony z tego produktu”.</p>
          <cite>William Howes</cite>
        </dd>
      </dl>
    </div>
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
      <th class="itema">
        <span>Smart Defrag PRO</span>
        <a href="https://www.iobit.com/buy.php?product=pl-sd3pcpf79&ref=pl_sd3pcpf79purchase1906<?php echo $refStr;?>&refs=pl_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3PC1906-pl')"
           class="buybtn small">
          Aktywuj teraz
        </a>
        <span><strong>79,90 zł</strong> <del>389,60 zł</del></span>
      </th>
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
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons11.jpg"></td>
      <td class="virtue">Bezpłatne wsparcie techniczne 24/7 na żądanie</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th class="itemb">Smart Defrag FREE</th>
      <th class="itema"><span>Smart Defrag PRO <br> + prezenty</span>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison_table end -->

<!-- fy-banner -->
<div class="fy-banner wrapper">
  <h2>Nie zwlekaj i zwiększ prędkość komputera i gier TERAZ!</h2>
  <img src="<?php echo $pResUrl; ?>images/bottom-sd-content.png" alt="">
  <dl>
    <dd>
      <span><img src="<?php echo $pResUrl; ?>images/spped.png" alt="">Przyspiesz komputer dzięki inteligentnej defragmentacji</span>
      <span><img src="<?php echo $pResUrl; ?>images/imporve.png" alt="">Popraw wydajność komputera dzięki zoptymalizowanemu <br> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; dyskowi twardemu</span>
    </dd>
    <dt>
      <a href="https://www.iobit.com/buy.php?product=pl-sd3pcpf79&ref=pl_sd3pcpf79purchase1906<?php echo $refStr;?>&refs=pl_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase3PC1906-pl')"
         class="buybtn large">
        <i></i> Aktywuj teraz
      </a>
    </dt>
  </dl>
</div>
<!-- fy-banner end -->

<!-- annotation -->
<dl class="annotation wrapper">
  <dt>Uwaga:</dt>
  <dd>1*. Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</dd>
  <dd>2*. Dane mogą się różnić w zależności od systemu lub komputera.</dd>
  <dd>3*. Jeśli będziesz niezadowolony, to możesz anulować zakup w ciągu 60 dni bez żadnych opłat. Pieniądze zostaną automatycznie zwrócone na Twoje konto.</dd>
</dl>
<!-- annotation end -->

<!-- footer -->
<div class="footer">
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script>
  $(document).ready(function() {
    cycleCountdown();
    $('#dg-container').gallery();
  });
  function goTaget(target) {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 16:00:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    document.getElementById('counttime1').innerHTML = '<li>'+h+'<span> Godz </span></li><li>'+i+'<span> min </span></li><li>'+s+'<span> sek </span></li> <li><strong class="last">'+mi+'</strong> ms </li>';
    setTimeout('cycleCountdown()', 1);
  }
  function decreasingPacks() {
    $.ajax({
      type: "GET",
      url: "index.php",
      data: "action=getPacks&r=" + Math.random(),
      success: function (packs) {
        $('.packs').html(packs);
        setUnit(packs);
        setTimeout('decreasingPacks()', 5000);
      }
    });
  }
  function setUnit(packsNum) {
    var unitStrBefore = 'Zostało tylko';
    var unitStrAfter = 'pakietów';
    var packsLast = packsNum % 10;
    var packsLastTwo = packsNum % 100;
    if (packsNum == 1) {
      unitStrBefore = 'Został tylko';
      unitStrAfter = 'pakiet';
    } else if (($.inArray(packsLast, [2, 3, 4]) != -1)&&($.inArray(packsLastTwo,[12,13,14])==-1)) {
      unitStrBefore = 'Zostały tylko';
      unitStrAfter = 'pakiety';
    }
    $('.unit-bef').html(unitStrBefore);
    $('.unit-af').html(unitStrAfter);
  }
  setTimeout('decreasingPacks()', 5000);
  setUnit(<?php echo $packsNum;?>);
</script>
</body>
</html>