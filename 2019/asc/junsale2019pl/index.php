<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','crcur',
        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
        'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
include $pRootUrl.'include/common.inc.php';
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edg
  e,chrome=1">
  <title>Do 80% zni??ki na Advanced SystemCare PRO</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,700i">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
    <h1>
      Dzisiejsza sprzeda?? Flash
      <span>Oferta ograniczona, nie czekaj do ostatniej chwili!</span>
    </h1>
    <div class="clearfix">
      <div class="offer left">
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
          <span></span>
          <b>-40%</b>
        </div>
        <div class="price">
          <p><strong>69</strong><span><b>,90 z?? </b><del>119,90 z??</del></span></p>
          <a  class="buybtn gray" 
              href="https://www.iobit.com/buy.php?product=pl-asc121pc69&ref=pl_asc121pc69purchase1906<?php echo $refStr;?>&refs=pl_purchase_asc"
              onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1906-pl')">
            Aktywuj teraz
          </a>
        </div>
      </div>
      <div class="offer right">
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
          <b>-80%</b>
        </div>
        <div class="price">
          <p><strong>74</strong><span><b>,90 z?? </b><del>409,70 z??</del></span></p>
          <a  class="buybtn" 
              href="https://www.iobit.com/buy.php?product=pl-asc123pcsdpf74&ref=pl_asc123pcsdpf74purchase1906<?php echo $refStr;?>&refs=pl_purchase_asc"
              onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1906-pl')">
            Aktywuj teraz
          </a>
        </div>
        <div class="countdown countdown1"><span>Pozosta??o jedynie</span> <b>09</b>G&nbsp; <b>09</b>M&nbsp;&nbsp; <b>10</b>S <b class="last">51</b>ms</div>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.jpg" alt="">
</div>
<!-- payment end -->

<!-- intro start -->
<div class="benfits">
  <div class="wrapper">
    <h2>Ekskluzywniejsze funkcje, <br>Tw??j komputer b??dzie szybszy i bezpieczniejszy!</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li></li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
          </div>
        </li>
        <li class="fun5">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
          </div>
        </li>
      </ul>
      <ul class="list-icon">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class="detail-list">
      <dl>
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>100% * BEZPIECZNIEJ</h3>
          <p>
            Chroni Twoj?? prywatno???? i dane przed tajnym dost??pem, zapobiega 
            wszelkim pr??bom przedostania si?? z??o??liwych intruz??w oraz utrzymuje Twoj?? prywatno???? dwukrotnie bezpieczniejsz??* ni?? jego darmowy odpowiednik.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>200% * SZYBCIEJ</h3>
          <p>
            Czy??ci wszystkie niepotrzebne pliki, optymalizuje procesor i pami???? RAM w celu przyspieszenia uruchamiania, zwi??kszenia pr??dko??ci systemu oraz przyspieszenia wolnego komputera nawet o 200%.
          </p>
        </dd>
      </dl>
      <dl class="three">
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>300% * P??YNNIEJ</h3>
          <p>Znacznie zwi??ksza pr??dko???? pobierania, gry, przegl??dania Internetu i platform wideo, takich jak YouTube, nawet o 300%.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>MAKSYMALNE ZWI??KSZENIE MIEJSCA</h3>
          <p>G????boko czy??ci niepotrzebne pliki, linki, pliki dziennika systemowego i pozosta??o??ci po niezako??czonym pobieraniu dzi??ki zaawansowanej optymalizacji.</p>
        </dd>
      </dl>
      <a href="Javascript:void(0);" class="textlink">Aby uzyska?? wi??cej informacji, kliknij tutaj >></a>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- complimentary start -->
<div class="complimentary">
  <div class="wrapper">
    <h2>Skorzystaj z pakietu prezent??w! Pospiesz si??, oferta ograniczona!</h2>
    <div class="gift-list clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/gift-sd.png" alt=""></dt>
        <dd>
          <h3>Smart Defrag 6 PRO  <strong>0 z?? </strong> <del>59,90 z??</del></h3>
          <ul>
            <li>Maksymalna wydajno???? dysku</li>
            <li>Szybszy dost??p do plik??w</li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/gift-pf.png" alt=""></dt>
        <dd>
          <h3>Protected Folder PRO  <strong>0 z?? </strong> <del>149,90 z??</del></h3>
          <ul>
            <li>Sejf dla plik??w i folder??w</li>
            <li>Dost??p do plik??w zabezpieczony has??em</li>
          </ul>
        </dd>
      </dl>
    </div>
    <!-- buybtn -->
    <a class="buybtn yellow"
       href="https://www.iobit.com/buy.php?product=pl-asc123pcsdpf74&ref=pl_asc123pcsdpf74purchase1906<?php echo $refStr;?>&refs=pl_purchase_asc"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase3PC1906-pl');">
      Zdob??d?? prezenty ju?? teraz!
    </a>
    <!-- countdown -->
    <p class="countdown countdown2">
      <b>09</b>G
      <b>09</b>M
      <b>10</b>S 
      <b class="last">51</b>ms
    </p>
  </div>
</div>
<!-- complimentary end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Nagradzany na ca??ym ??wiecie</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
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
          <h2>Recenzje medi??w</h2>
          <p>
            ???Nie ma nic gorszego ni?? komputer, kt??ry jest tak zapchany, ??e jego u??ytkowanie oraz granie staj?? si?? niemo??liwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprz??tanie niepotrzebnych plik??w, z??o??liwego oprogramowania i nieprawid??owych wpis??w w rejestrze, ale r??wnie?? daj??c Twojemu komputerowi impuls do zoptymalizowania jego dzia??ania???.
          </p>
          <h4>Fernando Louren??o Gomes</h4>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/loretta-harnarine.png" alt="Loretta Harnarine"></dt>
        <dd>
          <h2>Recenzja u??ytkownika</h2>
          <p>
            ???To jest najlepszy program, z jakiego mia??am okazj?? skorzysta??. Odk??d pobra??am ASC10, m??j komputer dzia??a o wiele lepiej i szybciej. Program wyczy??ci?? niepotrzebne i powielone pliki, puste foldery. U??y??am go te?? do zniszczenia plik??w. Wyczy??ci?? i zdefragmentowa?? rejestr oraz wszystkie pliki na moim komputerze. Gor??co polecam zakup tego programu. Nie jest wcale drogi, a to, co zrobi dla twojego komputera, b??dzie ca??kowicie niesamowite. Pokochasz to, obiecuj?????.
          </p>
          <h4>Loretta Harnarine</h4>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/charles-r-widick.png" alt="Charles R. Widick"></dt>
        <dd>
          <h2>Recenzja u??ytkownika</h2>
          <p>
            ???Jako informatyk, uwa??am ??e pobranie ASC i skanowanie komputera rozwi??zuje najcz??stsze problemy. Po zako??czeniu naprawy zazwyczaj sugeruj?? klientowi zakup pakietu Pro. Kto potrzebuje informatyka, gdy mo??e polega?? na Advanced SystemCare Pro 24/7? To najlepszy produkt dla zwyczajnych u??ytkownik??w. Dzi??kuj?? za u??atwienie mojej pracy???.
          </p>
          <h4>Charles R. Widick</h4>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/bruce-ramsay.png" alt="Bruce Ramsay"></dt>
        <dd>
          <h2>Recenzja u??ytkownika</h2>
          <p>
            ???Tak jak wi??kszo????, zacz????em od pobrania darmowej wersji przed przej??ciem na wersj?? PRO. Od wielu lat ten program zapewnia czysto???? mojego komputera oraz chroni go przed zawieszaniem i b????dami. Jeszcze si?? nie zawiod??em. Ostatnio musia??em skontaktowa?? si?? z Advanced SystemCare i dosta??em odpowied?? w ci??gu jednego lub dw??ch dni. Ekipa odpowiedzia??a na wszystkie moje pytania. Moim zdaniem wsparcie jest ogromne, co pomog??o mi w decyzji o pozostaniu przy produkcie. ASC wygrywa zar??wno je??li chodzi o produkt, jak i wsparcie???.
          </p>
          <h4>Bruce Ramsay</h4>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo $pResUrl;?>images/hank-ewert.png" alt="Hank Ewert"></dt>
        <dd>
          <h2>Recenzja u??ytkownika</h2>
          <p>
            ???Jak wi??kszo???? ludzi, nie jestem ekspertem komputerowym. Nie wiem, ile ju?? program??w wypr??bowa??em przez lata. Wszystkie twierdzi??y, ??e s?? najlepsze, ale nigdy nie dor??wna??y ochronie zapewnionej przez Advanced SystemCare Pro. Od czasu zakupu programu, nie musia??em ju?? dzwoni?? do informatyka z problemami. Ten program przewy??szy?? moje oczekiwania, jest zawsze aktualny, i nawet grafika jest bardzo fajna! Dzi??kuj?? wam wszystkim za u??atwienie mi ??ycia???.
          </p>
          <h4>Hank Ewert</h4>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end review -->

<!-- comparison start -->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text" colspan="2"></th>
        <th class="itema"><span>Advanced SystemCare FREE</span></th>
        <th class="itemb"><span>Advanced SystenCare PRO</span></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue">Podstawowe czyszczenie systemu, naprawa i optymizacja </td>
        <td class="itema"><i class="all-icons gray">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
        <td class="virtue">
          Naprawa s??abo??ci systemu jednym klikni??ciem pomo??e zapobiec hackowaniu <sup class="all-icons">ULEPSZONE</sup>
        </td>
        <td class="itema"><i class="all-icons gray">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">
          Przechowywanie danych osobowych z dala od niezaufanych program??w <sup class="all-icons red">NOWOSC</sup>
        </td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr class="four">
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">
          Ochrona cyfrowego odcisku palca pomo??e zapobiec ??ledzeniu przegl??dania stron internetowych <sup class="all-icons red">NOWOSC</sup>
        </td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">
          Do 300% szybszy Internet dzi??ki funkcji Internet Booster <sup class="all-icons">ULEPSZONE</sup>
        </td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
        <td class="virtue">
          Do 200% szybsze uruchomienie komputera dzi??ki optymalizacji uruchamiania <sup class="all-icons">ULEPSZONE</sup>
        </td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">
          Dog????bne czyszczenie rejestru i defragmentacja pomo??e z mniejszymi awariami <sup class="all-icons">ULEPSZONE</sup>
        </td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">Nowy mechanizm optymalizacji dysku przyspieszy dzia??anie systemu</td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue">Ochrona przed zagro??eniami bezpiecze??stwa w czasie rzeczywistym</td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">Pe??ne wykrywanie najg????bszych infekcji</td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
        <td class="virtue">
          Automatyczne usuwanie reklam i ??lad??w prywatno??ci dla bezpieczniejszego przegl??dania <sup class="all-icons">ULEPSZONE</sup>
        </td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
        <td class="virtue">Automatyczne czyszczenie pami??ci RAM dla p??ynniejszego dzia??ania systemu</td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
        <td class="virtue">Automatyczna aktualizacja do najnowszej wersji</td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
        <td class="virtue">Bezp??atna pomoc techniczna 24/7 na ????danie</td>
        <td class="itema"><i class="all-icons">???</i></td>
        <td class="itemb"><i class="all-icons red">???</i></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th colspan="2"></th>
        <th class="itema"></th>
        <th class="itemb">
          <p><strong>74,90 z??</strong> <del>409,70 z??</del></p>
          <a  class="buybtn" 
              href="https://www.iobit.com/buy.php?product=pl-asc123pcsdpf74&ref=pl_asc123pcsdpf74purchase1906<?php echo $refStr;?>&refs=pl_purchase_asc"
              onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1906-pl')">
            Aktywuj teraz
          </a>
          <p>1 rok / 3 PC</p>
        </th>
      </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <div class="box fl">
      <ul class="clearfix fl">
        <li class="active"></li>
        <li class="second"></li>
      </ul>
    </div>
    <div class="middle fl">
      <ul class="select">
        <li class="active" data-num="1">
          <i></i>
          1 rok / 3 PC + Darmowe prezenty
          <span>-80%</span>
        </li>
        <li class="second" data-num="0">
          <i></i>
          1 rok / 1 PC 
          <span>-40%</span>
        </li>
      </ul>
    </div>
    <div class="fr another price">
      <p><strong>74</strong><span><b>,90 z?? </b><del>409,70 z??</del></span></p>
      <a  class="buybtn" 
          href="https://www.iobit.com/buy.php?product=pl-asc123pcsdpf74&ref=pl_asc123pcsdpf74purchase1906<?php echo $refStr;?>&refs=pl_purchase_asc"
          onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1906-pl')">
        Aktywuj teraz
      </a>
    </div>
  </div>
</div>
<!-- boittombuy enb -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <h4>Satysfakcja gwarantowana</h4>
          <p>60 dni zwrotu</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd>
          <h4>Ubezpieczona p??atno????</h4>
          <p>IObit obs??uguje r????ne tryby <br>bezpiecznej p??atno??ci</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
        <dd>
          <h4>Szybka aktywacja</h4>
          <p>Po dokonaniu zakupu otrzymasz kod licencji na podany adres mailowy w kilka minut</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
        <dd>
          <h4>Obs??uga klienta</h4>
          <p>24/7 Bezp??atna pomoc techniczna</p>
        </dd>
      </dl>
    </div>
    <!-- service end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Uwaga:</dt>
      <dd>*. Dane mog?? si?? r????ni?? w zale??no??ci od systemu lub komputera.</dd>
      <dd>*.Programy promocyjne mog?? ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">?? 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrze??one</div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>