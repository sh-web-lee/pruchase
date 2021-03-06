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
<title>Nie przegap specjalnej promocji - nawet do 83% rabatu na IObit Uninstaller PRO - IObit!    </title>
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
      <h1>NIE PRZEGAP MAJ??WKOWEJ PROMOCJI!</h1>
      <p class="subhead ">TYLKO TERAZ, NAWET DO -83% TANIEJ!</p>
      <div class="offer clearfix">
        <div class="list left">
          <img src="<?php echo getStaticUrl('images/iubox-twenty.png')?>" alt=""/>
          <div class="price">
            <p>
              <strong class="sale">59</strong>
              <b>
                <span>Zaoszcz??d?? <font class="discount">20,00 z??</font></span>
                <small>,90 z?? <del class="original">79,90 z??</del></small>
              </b>
            </p>
            <a class="buybtn small"
               href="http://www.iobit.com/buy.php?product=pl-iu91pc59&ref=pl_iu91pc59purchase2003<?php echo $refStr;?>&refs=pl_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iueaster2020-pl');">
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
              <strong class="sale">64</strong>
              <b>
                <span>Zaoszcz??d?? <font class="discount">324,80 z??</font></span>
                <small>,90 z?? <del class="original">389,70 z??</del></small>
              </b>
            </p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-iu93pcsdpf64&ref=pl_iu93pcsdpf64purchase2003<?php echo $refStr;?>&refs=pl_purchase_iu "
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iueaster2020-pl');">
              <i class="all-icons"></i>
              <big>KUP TERAZ</big>   
            </a>
          </div>
          <p class="people"><i class="all-icons"></i> Wi??cej ni?? <span class="buyNum"><?php echo $buyNum;?></span> <span class="unit">zakupionych</span></p>
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
    <h2>Czystszy komputer oraz szybsze i bezpieczniejsze przegl??danie Internetu!</h2>
    <div class="snapshoot">
      <img src="<?php echo getStaticUrl('images/snapshoot.jpg')?>" alt="" />
    </div>
    <div class="benfits-list clearfix">
      <div class="list fl">
        <img src="<?php echo getStaticUrl('images/benfits-icon-01.png')?>" alt="" />
        <dl>
          <dt><b>NOWO????!</b> Bezpieczniejsza i szybsza nawigacja</dt>
          <dd>Automatycznie wykrywa z??o??liwe wtyczki reklamowe i rozszerzenia.</dd>
        </dl>
      </div>
      <div class="list fr two">
        <img src="<?php echo getStaticUrl('images/benfits-icon-02.png')?>" alt=""/>
        <dl>
          <dt><b>NOWO????!</b><span>Wykrywa i odinstalowuje Bundleware</span></dt>
          <dd>
            Wykrywa i odinstalowuje pakiety oprogramowa?? jak adware, wtyczki, przegl??darki i inne oprogramowania innych firm.
          </dd>
        </dl>
      </div>
      <div class="list fl">
        <img src="<?php echo getStaticUrl('images/benfits-icon-03.png')?>" alt=""/>
        <dl>
          <dt><b class="red">ULEPSZONE!</b>??<span>Automatyczne czyszczenie</span></dt>
          <dd>Skanuje i czy??ci pozosta??o??ci plik??w, aby uzyska?? czystszy i szybszy komputer.</dd>
        </dl>
      </div>
      <div class="list fr">
        <img src="<?php echo getStaticUrl('images/benfits-icon-04.png')?>" alt="" />
        <dl>
          <dt><b class="red">ULEPSZONE!</b>??Aktualizacja oprogramowania</dt>
          <dd>
            Aktualizuje programy na komputerze za pomoc?? jednego klikni??cia.
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
      <h2>Przyspiesz i zabezpiecz komputer dzi??ki prezentom!</h2>
      <div class="gift-list clearfix">
        <dl>
          <dt><img src="<?php echo $pResUrl;?>images/gift-sd.png" alt=""></dt>
          <dd>
            <h3>Smart Defrag 6 PRO <br><strong>0 <b>z??</b> </strong> <del>59,90 z??</del></h3>
            <ul>
              <li>Maksymalna wydajno???? dysku</li>
              <li>Szybszy dost??p do plik??w</li>
            </ul>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl;?>images/gift-pf.png" alt=""></dt>
          <dd>
            <h3>Protected Folder PRO <br><strong>0 <b>z??</b> </strong> <del>149,90 z??</del></h3>
            <ul>
              <li>Sejf dla plik??w i folder??w</li>
              <li>Dost??p do plik??w zabezpieczony has??em</li>
            </ul>
          </dd>
        </dl>
      </div>
      <!-- buybtn -->
      <a class="buybtn yellow"
         href="http://www.iobit.com/buy.php?product=pl-iu93pcsdpf64&ref=pl_iu93pcsdpf64purchase2003<?php echo $refStr;?>&refs=pl_purchase_iu "
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iueaster2020-pl');">
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
          <dt><h3>Recenzja u??ytkownika</h3></dt>
          <dd>
            ???IObit Uninstaller staje si?? lepszy z ka??d?? aktualizacj??. U??ywam go od ponad 3 lat. Szybko si?? ??aduje i ma prosty interfejs u??ytkownika. Niekt??re z wielu funkcji, z kt??rych regularnie korzystam, to odinstalowywanie wsadowe, zaawansowane skanowanie, czy niszczarka plik??w. Ostatnio zainstalowana funkcja, kt??ra zapewnia szybki dost??p do programu, kt??ry w??a??nie zainstalowa??em jest funkcj??, kt??rej nie lubi?? lub nie dzia??a ona poprawnie???.
          </dd>
        </dl>
        <dl>
          <dt><h3>Recenzja u??ytkownika</h3></dt>
          <dd>
            ???IObit Uninstaller to jeden z najlepszych program??w do deinstalacji. ??atwy w obs??udze, proponuje bardzo szybkie oraz g????bokie czyszczenie. Od wersji 5 ma wi??ksz?? liczb?? innych funkcji wsp????pracuj??cych nie tylko z Windows 10. R??wnie?? szybkie czyszczenie z wtyczek jest bardzo wygodne. ??wietne wyszukiwanie duplikat??w czy nieu??ywanych program??w. Dzi??kuj?? za pomoc mojemu komputerowi i r??wnie?? tym nale????cym do cz??onk??w mojej rodziny???.
          </dd>
        </dl>
        <dl class="active">
          <dt><h3>Recenzje medi??w</h3></dt>
          <dd>
            ???To ??atwe w u??yciu i pouczaj??ce narz??dzie do deinstalacji czy??ci, konfiguruje i optymalizuje komputer. U??ytkownicy mog?? go pobra?? praktycznie w mgnieniu oka. To narz??dzie do deinstalacji mo??na sklasyfikowa?? jako najlepszy deinstalator, kt??ry pozwala u??ytkownikom odinstalowa?? kilka program??w za jednym zamachem. Program proponuje u??ytkownikom wykonanie ???Pot????nego skanowania???, aby wej???? g????biej w system i znale???? resztki usuni??tych program??w. Sama wydajno???? sprawia, ??e to ma??e narz??dzie do deinstalacji jest warte swojego miejsca w naszych komputerach???.
          </dd>
        </dl>
        <dl>
          <dt><h3>Recenzja u??ytkownika</h3></dt>
          <dd>
            ???IObit Uninstaller jest prawdopodobnie jednym z najlepszych program??w do usuwania niepotrzebnych program??w z komputera. W przeciwie??stwie do podstawowego deinstalatora Windows, program usunie wszystkie pozosta??o??ci programu, kt??re mog??yby p????niej spowolni?? dzia??anie komputera. U??ywam tego programu do kilku lat i zawsze pomaga utrzyma?? m??j komputer w czysto??ci, szybko. Ju?? wcze??niej poleci??em ten program moim znajomym. Dzisiaj polecam go ponownie???.
          </dd>
        </dl>
        <dl>
          <dt><h3>Recenzja u??ytkownika</h3></dt>
          <dd>
            ???Uninstaller PRO to tylko jeden z pi??ciu program??w do optymizacji od firmy IObit, w kt??re postanowi??em zainwestowa??, tak jak szefowie kuchni inwestuj?? w no??e. Co prawda, u??ycie zwyk??ego programu do odinstalowania zadzia??a??o, natomiast Uninstaller PRO pojawi?? si?? p????niej i pokaza??, ??e 35 plik??w wymaga wyczyszczenia. Wystarczy??o klikn???? ???OK???. Polecam ten program ka??demu. Kupi??em licencj?? na 3 komputery. Obs??uga techniczna jest uprzejma i znakomita???.
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro ??u??i??">
          </div>
          <p>Lovro ??u??i??</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="??da G??rtler">
          </div>
          <p>??da G??rtler</p>
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
          <th class="text" colspan="2">Jakie masz korzy??ci jako u??ytkownik PRO?</th>
          <th class="itemb">IObit Uninstaller 9 <p>FREE</p></th>
          <th class="itema">IObit Uninstaller 9 <p>PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">
            <b>Odinstalowuje programy bezpo??rednio z ikony na pulpicie, w otwartym oknie lub z nowej ikony paska zada??</b>
            <span class="nuo">Nuovo</span>
          </td>
          <td class="itemb"><i class="all-icons">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Automatyczne przywracanie zmian w systemie dokonanych po dezinstalacji niechcianego programu <span class="nuo">Nuovo</span></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Obs??uguje usuwanie upartych program??w <span class="two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Wykrywa i odinstalowuje programy innych firm wraz z nowym darmowym oprogramowaniem <span>Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">
            <b>Automatycznie usuwa resztki plik??w, z kt??rymi inne programy nie mog??y sobie poradzi?? </b><span>Migliorato</span>
          </td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Identyfikuje i usuwa z??o??liwe wtyczki <span class="two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Identyfikuje i usuwa wtyczki reklamowe <span class="two">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue"><b>Aktualizuje wszystkie wa??ne oprogramowania jednym klikni??ciem </b> <span class="two five">Migliorato</span></td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatycznie aktualizuje do najnowszej wersji</td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Bezp??atna pomoc techniczna 24/7</td>
          <td class="itemb"><i class="all-icons circle">???</i></td>
          <td class="itema"><i class="all-icons red">???</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>ZNI??KI do 45%, NIE POZW??L IM UCIEC!</h2>
      <div class="panel clearfix">
        <div class="imgbox fl">
          <img class="sale active" src="<?php echo getStaticUrl('images/iubox-seventy.png')?>" alt="" />
          <img class="iu" src="<?php echo getStaticUrl('images/iubox-twenty.png')?>" alt="" />
        </div>
        <ul class="fl">
          <li class="active anno" data-num="1">
            <h3>1 rok / 3 PC + Darmowy prezent</h3> <strong>-83%</strong>
          </li>
          <li data-num="0"><h3>1 rok / 1 PC </h3> <strong>-25%</strong></li>
        </ul>
        <div class="price fr">
          <p>
            <strong class="sale">64</strong>
            <b>
              <span>Zaoszcz??d?? <font class="discount">324,80 z??</font></span>
              <small>,90 z?? <del class="original">349,80 z??</del></small>
            </b>
          </p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-iu93pcsdpf64&ref=pl_iu93pcsdpf64purchase2003<?php echo $refStr;?>&refs=pl_purchase_iu "
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iueaster2020-pl');">
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
          <dd><h4>Gwarancja zwrotu pieni??dzy</h4></dd>
          <dd>Gwarantujemy zwrot pieni??dzy <br>w ci??gu 60 dni.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd><h4>100% Bezpieczna p??atno????</h4></dd>
          <dd>IObit oferuje bezpieczne dla <br>transakcji metody p??atno??ci.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
          <dd><h4>Szybka aktywacja</h4></dd>
          <dd>Po dokonaniu zakupu otrzymasz kod licencji na podany adres mailowy w kilka minut.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
          <dd><h4>Pomoc techniczna</h4></dd>
          <dd>Nasze bezp??atne wsparcie <br>techniczne jest dost??pne 24/7.</span></dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Uwaga:</dt>
        <dd>Programy promocyjne mog?? ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</dd>
        <dd>Dane mog?? si?? r????ni?? w zale??no??ci od systemu lub komputera.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright ??2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrze??one</div>
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