<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$reTime=15;
$reduceNum=103385972;
$sepStr=' ';
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum,0,'.',$sepStr);
$refStr='';
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
/*if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}*/
if(!empty($_GET['pop'])){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(!empty($_GET['st'])){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['user'])){
  $refStr.='-'.$_GET['user'];
}
if(!empty($_GET['insday'])){
  $refStr.='-'.$_GET['insday'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Mega promocja na IObit Uninstaller 10 – IObit!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 15000);
        }
      });
    }
    setTimeout('getBuyNum()', 15000);
  </script>
</head>

<body>  
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1>TYLKO TERAZ NAWET DO 90% TANIEJ</h1>
      <p class="subhead ">Oferta ograniczona czasowo, pospiesz się!</p>
      <div class="offer clearfix">
        <div class="list left">
          <img src="<?php echo getStaticUrl('images/iubox-twenty.png')?>" alt=""/>
          <div class="price">
            <p>
              <strong class="sale">45</strong>
              <b>
                <span>Zaoszczędź <font class="discount">20,00 zł</font></span>
                <small>,90 zł <del class="original">79,90 zł</del></small>
              </b>
            </p>
            <a class="buybtn small"
               href="http://www.iobit.com/buy.php?product=pl-iu101pc45&ref=pl_iu101pc45purchasespecial2020<?php echo $refStr;?>&refs=pl_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10-special2020-pl');">
              <i class="all-icons"></i>
              <big>KUP TERAZ</big>  
            </a>
          </div>
        </div>
        <div class="list right">
          <div class="timebox">
            <ul id="countdown1" class="countdown countdown1">
              <li><strong>05</strong> Godz </li>
              <li><strong>25</strong> min </li>
              <li><strong>47</strong> sek</li>
              <li class="last"><strong>241</strong> ms*</li>
            </ul>
          </div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/iubox-seventy.png')?>" alt=""/>
          </div>
          <div class="price">
            <p>
              <strong class="sale">49</strong>
              <b>
                <span>Zaoszczędź <font class="discount">419,70 zł</font></span>
                <small>,90 zł <del class="original">469,60 zł</del></small>
              </b>
            </p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-iu103pcisupfsd49&ref=pl_iu103pcisupfsd49purchasespecial2020<?php echo $refStr;?>&refs=pl_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10-special2020-pl');">
              <i class="all-icons"></i>
              <big>KUP TERAZ</big>   
            </a>
          </div>
          <p class="people"><i class="all-icons"></i> Więcej niż <span class="buyNum"><?php echo $buyNum;?></span> <span class="unit">zakupionych</span></p>
          <div class="sign"></div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- patment start -->
  <div class="payment">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- patment end -->

  <!-- benfits start -->
  <div class="benfits wrapper clearfix">
    <h2>Czystszy komputer oraz szybsze i bezpieczniejsze przeglądanie Internetu!</h2>
    <div class="snapshoot">
      <img src="<?php echo getStaticUrl('images/snapshoot.jpg')?>" alt="" />
    </div>
    <div class="benfits-list clearfix">
      <div class="list fl">
        <img src="<?php echo getStaticUrl('images/benfits-icon-01.png')?>" alt="" />
        <dl>
          <dt><b>NOWOŚĆ!</b> Bezpieczniejsza i szybsza nawigacja</dt>
          <dd>Automatycznie wykrywa złośliwe wtyczki reklamowe i rozszerzenia.</dd>
        </dl>
      </div>
      <div class="list fr two">
        <img src="<?php echo getStaticUrl('images/benfits-icon-02.png')?>" alt=""/>
        <dl>
          <dt><b>NOWOŚĆ!</b><span>Wykrywa i odinstalowuje Bundleware</span></dt>
          <dd>
            Wykrywa i odinstalowuje pakiety oprogramowań jak adware, wtyczki, przeglądarki i inne oprogramowania innych firm.
          </dd>
        </dl>
      </div>
      <div class="list fl">
        <img src="<?php echo getStaticUrl('images/benfits-icon-03.png')?>" alt=""/>
        <dl>
          <dt><b class="red">ULEPSZONE!</b> <span>Automatyczne czyszczenie</span></dt>
          <dd>Skanuje i czyści pozostałości plików, aby uzyskać czystszy i szybszy komputer.</dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo getStaticUrl('images/benfits-icon-04.png')?>" alt="" />
        <dl>
          <dt><b class="red">ULEPSZONE!</b> Aktualizacja oprogramowania</dt>
          <dd>
            Aktualizuje programy na komputerze za pomocą jednego kliknięcia.
          </dd>
        </dl>
      </div>
    </div>
    <!-- <a class="morelink" href="javascript:void(0);" onclick="goTaget($('.compar-tab'))">
      Learn more about PRO edition >>
    </a> -->
  </div>
  <!-- benfits end -->

  <!-- complimentary start -->
  <div class="complimentary">
    <div class="wrapper">
      <h2>Przyspiesz i zabezpiecz komputer dzięki prezentom!</h2>
      <div class="gift-list clearfix">
        <dl>
          <dt><img src="<?php echo $pResUrl;?>images/gift-sd.png" alt=""></dt>
          <dd>
            <h3>Smart Defrag 6 PRO <br><strong>0 <b>zł</b> </strong> <del>59,90 zł</del></h3>
            <ul>
              <li>Maksymalna wydajność dysku</li>
              <li>Szybszy dostęp do plików</li>
            </ul>
          </dd>
        </dl>
        <dl class="pf">
          <dt><img src="<?php echo $pResUrl;?>images/gift-pf.png" alt=""></dt>
          <dd>
            <h3>Protected Folder PRO <br><strong>0 <b>zł</b> </strong> <del>149,90 zł</del></h3>
            <ul>
              <li>Sejf dla plików i folderów</li>
              <li>Dostęp do plików zabezpieczony hasłem</li>
            </ul>
          </dd>
        </dl>
        <dl class="isu">
          <dt><img src="<?php echo $pResUrl;?>images/gift-isu.png" alt=""></dt>
          <dd>
            <h3>IObit Software Updater 3 PRO <br><strong>0 <b>zł</b> </strong> <del>149,90 zł</del></h3>
            <ul>
              <li>Automatyczna aktualizacja programów</li>
              <li>Zaplanuj aktualizację</li>
              <li>Szybka i bezpieczna aktualizacja programów</li>
            </ul>
          </dd>
        </dl>
      </div>
      <!-- buybtn -->
      <a class="buybtn yellow"
         href="http://www.iobit.com/buy.php?product=pl-iu103pcisupfsd49&ref=pl_iu103pcisupfsd49purchasespecial2020<?php echo $refStr;?>&refs=pl_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10-special2020-pl');">
        <i class="all-icons"></i>
        <big>KUP TERAZ</big>
      </a>
    </div>
  </div>
  <!-- complimentary end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <!-- awards start -->
      <div class="awards">
        <h2>Nagrody</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
      </div>
      <!-- awards end -->
      <div class="content">
        <dl>
          <dt><h3>Recenzja użytkownika</h3></dt>
          <dd>
            „IObit Uninstaller staje się lepszy z każdą aktualizacją. Używam go od ponad 3 lat. Szybko się ładuje i ma prosty interfejs użytkownika. Niektóre z wielu funkcji, z których regularnie korzystam, to odinstalowywanie wsadowe, zaawansowane skanowanie, czy niszczarka plików. Ostatnio zainstalowana funkcja, która zapewnia szybki dostęp do programu, który właśnie zainstalowałem jest funkcją, której nie lubię lub nie działa ona poprawnie”.
          </dd>
        </dl>
        <dl>
          <dt><h3>Recenzja użytkownika</h3></dt>
          <dd>
            „IObit Uninstaller to jeden z najlepszych programów do deinstalacji. Łatwy w obsłudze, proponuje bardzo szybkie oraz głębokie czyszczenie. Od wersji 5 ma większą liczbę innych funkcji współpracujących nie tylko z Windows 10. Również szybkie czyszczenie z wtyczek jest bardzo wygodne. Świetne wyszukiwanie duplikatów czy nieużywanych programów. Dziękuję za pomoc mojemu komputerowi i również tym należącym do członków mojej rodziny”.
          </dd>
        </dl>
        <dl class="active">
          <dt><h3>Recenzje mediów</h3></dt>
          <dd>
            „To łatwe w użyciu i pouczające narzędzie do deinstalacji czyści, konfiguruje i optymalizuje komputer. Użytkownicy mogą go pobrać praktycznie w mgnieniu oka. To narzędzie do deinstalacji można sklasyfikować jako najlepszy deinstalator, który pozwala użytkownikom odinstalować kilka programów za jednym zamachem. Program proponuje użytkownikom wykonanie „Potężnego skanowania”, aby wejść głębiej w system i znaleźć resztki usuniętych programów. Sama wydajność sprawia, że to małe narzędzie do deinstalacji jest warte swojego miejsca w naszych komputerach”.
          </dd>
        </dl>
        <dl>
          <dt><h3>Recenzja użytkownika</h3></dt>
          <dd>
            „IObit Uninstaller jest prawdopodobnie jednym z najlepszych programów do usuwania niepotrzebnych programów z komputera. W przeciwieństwie do podstawowego deinstalatora Windows, program usunie wszystkie pozostałości programu, które mogłyby później spowolnić działanie komputera. Używam tego programu do kilku lat i zawsze pomaga utrzymać mój komputer w czystości, szybko. Już wcześniej poleciłem ten program moim znajomym. Dzisiaj polecam go ponownie”.
          </dd>
        </dl>
        <dl>
          <dt><h3>Recenzja użytkownika</h3></dt>
          <dd>
            „Uninstaller PRO to tylko jeden z pięciu programów do optymizacji od firmy IObit, w które postanowiłem zainwestować, tak jak szefowie kuchni inwestują w noże. Co prawda, użycie zwykłego programu do odinstalowania zadziałało, natomiast Uninstaller PRO pojawił się później i pokazał, że 35 plików wymaga wyczyszczenia. Wystarczyło kliknąć „OK”. Polecam ten program każdemu. Kupiłem licencję na 3 komputery. Obsługa techniczna jest uprzejma i znakomita”.
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić">
          </div>
          <p>Lovro Žužić</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler">
          </div>
          <p>Áda Görtler</p>
        </li>
        <li class="active">
          <a href="https://www.cnet.com/" target="_blank">
            <div class="pic"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></div>
            <p>MakeUseOf</p>
          </a>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></div>
          <p>Sergey Erlich</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu">
          </div>
          <p>Joseph Yu</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Co zyskasz dzięki wersji PRO?</th>
          <th class="itemb">IObit Uninstaller 10 <p>FREE</p></th>
          <th class="itema">IObit Uninstaller 10 <p>PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">
            <b>Usuwa powiadomienia przeglądarki</b>
            <span class="nuo">NOWOŚĆ</span>
          </td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">
            <b>Odinstalowuje programy bezpośrednio z ikony na pulpicie, w otwartym<br> oknie lub z nowej ikony paska zadań</b>
          </td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
          <td class="virtue">Nowy algorytm precyzyjnie wykrywa uparte oprogramowanie i<br> bundleware <span class="nuo">NOWOŚĆ</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Automatyczne przywracanie zmian w systemie dokonanych po dezinstalacji <br>
          niechcianego programu</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Skutecznie usuwa uparte programy <span class="two two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">
            <b>Automatycznie usuwa resztki plików, z którymi inne programy nie mogły sobie poradzić </b><span>Migliorato</span>
          </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Identyfikuje i usuwa złośliwe wtyczki <span class="two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Identyfikuje i usuwa wtyczki reklamowe <span class="two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue"><b>Aktualizuje wszystkie ważne oprogramowania jednym kliknięciem </b> <span class="two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatycznie aktualizuje do najnowszej wersji</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Bezpłatna pomoc techniczna 24/7</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>ZNIŻKI do 45%, NIE POZWÓL IM UCIEC!</h2>
      <div class="panel clearfix">
        <div class="imgbox fl">
          <img class="sale active" src="<?php echo getStaticUrl('images/iubox-seventy.png')?>" alt="" />
          <img class="iu" src="<?php echo getStaticUrl('images/iubox-twenty.png')?>" alt="" />
        </div>
        <ul class="fl">
          <li class="active anno" data-num="1">
            <h3>1 rok / 3 PC + Darmowy prezent</h3> <strong>-60%</strong>
          </li>
          <li data-num="0"><h3>1 rok / 1 PC </h3> <strong>-90%</strong></li>
        </ul>
        <div class="price fr">
          <p>
            <strong class="sale">49</strong>
            <b>
              <span>Zaoszczędź <font class="discount">419,60 zł</font></span>
              <small>,90 zł <del class="original">469,90 zł</del></small>
            </b>
          </p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-iu103pcisupfsd49&ref=pl_iu103pcisupfsd49purchasespecial2020<?php echo $refStr;?>&refs=pl_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10-special2020-pl');">
            <i class="all-icons"></i>
            <big>KUP TERAZ</big>   
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h4>Gwarancja zwrotu pieniędzy</h4></dd>
          <dd>Gwarantujemy zwrot pieniędzy <br>w ciągu 60 dni.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd><h4>100% Bezpieczna płatność</h4></dd>
          <dd>IObit oferuje bezpieczne dla <br>transakcji metody płatności.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
          <dd><h4>Szybka aktywacja</h4></dd>
          <dd>Po dokonaniu zakupu otrzymasz kod licencji na podany adres mailowy w kilka minut.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
          <dd><h4>Pomoc techniczna</h4></dd>
          <dd>Nasze bezpłatne wsparcie <br>techniczne jest dostępne 24/7.</span></dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Uwaga:</dt>
        <dd>Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</dd>
        <dd>Dane mogą się różnić w zależności od systemu lub komputera.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright ©2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->
  <script>
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&sepStr=<?php echo $sepStr;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 15000);
        }
      });
    }
    setTimeout('getBuyNum()', 15000);
  </script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>