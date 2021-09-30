<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$reTime=15;
$reduceNum=103578564;
$sepStr=' ';
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum,0,'.',$sepStr);

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['st'])){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Duża wyprzedaż - 65% zniżki na Start Menu 8 PRO – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <!-- banner start -->
  <div class="header">
    <div class="wrapper clearfix">
      <a class="logo fl" href="https://www.iobit.com/pl/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="countdown fr">
        <b>15</b>Godz <b>15</b>min <b>15</b>sek <b class="last">155</b> <sup>*</sup>
      </div>
    </div>
  </div>
  <div class="banner">
    <div class="wrapper clearfix">
      <div class="right">
        <h1>Start Menu 8 Wielka Wyprzedaż</h1>
        <h5>Uzyskaj 65% zniżki na powrót do klasycznego menu Start</h5>
        <div class="imgbox">
          <img src="<?php echo getStaticUrl('images/sm8-box.png')?>" alt=""/>
          <span>
            <img src="<?php echo getStaticUrl('images/discount.png')?>" alt=""/>
            <b>1 rok / 3 PC</b>
          </span>
        </div>
        <div class="price">
          <p><strong>49,90 zł </strong> <del>119,90 zł</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-sm83pc49&ref=pl_sm83pc49purchase1906<?php echo $refStr;?>&refs=pl_purchase_sm8"
             onclick="ga('send', 'event', 'sm8buy', 'buy', 'sm8purchase3PC1906-pl')">
            <i class="all-icons"></i>
            <span>Aktywuj teraz</span>     
          </a>
          <p class="people"><i class="all-icons"></i> <span class="unit-bef">Kupiło</span> go już ponad <span class="buyNum"><?php echo $buyNum;?></span> <span class="unit-af">osób</span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><b>Metody płatności</b></dt>
      <dd><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dd>
    </dl>
    <dl>
      <dt><b>Satysfakcja gwarantowana</b></dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
    </dl>
    <dl>
      <dt><b>Ubezpieczona płatność</b></dt>
      <dd><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2 class="subtitle">Co Start Menu 8 v5 może dla Ciebie zrobić?</h2>
      <div class="imgbox">
        <img src="<?php echo getStaticUrl('images/screen.png')?>" alt=""/>
      </div>
      <div class="one clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/intro-icon1.png')?>" alt=""/></dt>
          <dd>
            <h3>Przywraca klasyczne menu Start</h3>
            <p>Łatwo przełączaj menu startowe pomiędzy Win 7 i Win 8/10.</p>
          </dd>
        </dl>
        <dl class="fr">
          <dt><img src="<?php echo getStaticUrl('images/intro-icon2.png')?>" alt=""/></dt>
          <dd>
            <h3>Bez reklam</h3>
            <p>Gwarancja czystości menu<br> startowego.</p>
          </dd>
        </dl>
      </div>
      <div class="two clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/intro-icon3.png')?>" alt=""/></dt>
          <dd>
            <h3>20% * szybsze lokalizowanie plików</h3>
            <p>Wpisz nazwę pliku, a nawet zawartość pliku, aby łatwo i dokładnie dostać się do pliku.</p>
          </dd>
        </dl>
        <dl class="fr">
          <dt><img src="<?php echo getStaticUrl('images/intro-icon4.png')?>" alt=""/></dt>
          <dd>
            <h3>Dostosowanie ikony przycisku Start</h3>
            <p>Wybierz swoją ulubioną, spersonalizowaną ikonę przycisku startowego.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <div class="graybg">
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Zaufany i nagradzany przez media</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review wrapper">
      <div class="content">
        <dl>
          <dt><h3>Recenzja użytkownika</h3></dt>
          <dd>
            „Jako konsultant ds. Technologii i twórca aplikacji, często używam oprogramowania do wirtualizacji. Lubię tworzyć nową maszynę wirtualną dla każdego z moich projektów. W ten sposób mogę utrzymać porządek i instalować tylko potrzebne mi narzędzia. Ponieważ nie podoba mi się ekran Metro w systemie Windows 8, lubię korzystać z rozwiązania zastępczego menu startowego, aby odzyskać wygląd systemu Windows 7. Od kilku lat walczę z kilkoma różnymi rozwiązaniami, zarówno płatnymi, jak i bezpłatnymi. Czasami działają dobrze, czasem nie. Jednak odkąd zacząłem używać Start Menu 8, nie miałem żadnych problemów z menu startowym. Jest to czysta implementacja, bardzo łatwa w użyciu i konfiguracji”.
          </dd>
        </dl>
        <dl class="active">
          <dt><h3>Recenzje mediów</h3></dt>
          <dd>
            „Start Menu 8 przechwytuje strukturę nawigacji znaną z systemu Windows 7. Interfejs Windows 8 o nazwie Metro usunął przycisk Start i zastąpił go menu z płaskimi kafelkami używanymi na telefonach i tabletach z systemem Windows”.
          </dd>
        </dl>
        <dl>
          <dt><h3>Recenzja użytkownika</h3></dt>
          <dd>
            „Nawet jeśli nie jestem żółtodziobem, pogubiłem się używając po raz pierwzy Win 8. Dlatego pomoc Start Menu 8 ogromnie mnie ucieszyła. Program pozwolił mi zaoszczędzić czas, bez niepotrzebnej zmiany nawyków. Raz miałem z tym programem mały problem i nie mogłem go rozwiązać samodzielnie, więc napisałem do zespołu wsparcia IObit, bez jakiejkolwiek nadziei na odpowiedź… Błędne założenie! Odpowiedzieli szybko i pomogli mi rozwiązać mój problem. Od tego czasu jestem większym fanem IObit i czekam na ich kolejne programy”.
          </dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/dan-jurden.png" alt="Dan Jurden">
          </div>
          <p>Dan Jurden</p>
        </li>
        <li class="active">
          <a href="https://www.cnet.com/" target="_blank">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"></div>
            <p>Cnet</p>
          </a>
        </li>
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/juerg.png" alt="Juerg"></div>
          <p>Juerg</p>
        </li>
      </ul>
    </div>
    <!-- review end -->
  </div>

  <!-- comparison start -->
  <div id="compare" class="comparison wrapper">
    <h2>Tabela porównawcza pomoże Ci dokonać wyboru</h2>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2"></th>
          <th class="itemb">Start Menu 8 <b>wersja próbna</b></th>
          <th class="itema"><span>Start Menu 8 <b>PRO</b></span></th>            
        </tr>        
      </thead>
      <tbody>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Klasyczne i spersonalizowane menu Start</strong></td>
          <td class="itemb gray"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" />
          </td>
          <td class="virtue">Przywróć menu Start w stylu Windows 7 do Windows 8, 8.1, 10</td>
          <td class="itemb"><span>Dostępne jedynie przez 7 dni</span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" />
          </td>
          <td class="virtue">Płaski styl Menu Start z dostosowanym kolorem</td>
          <td class="itemb"><span>Dostępne jedynie przez 7 dni</span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr>
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" />
          </td>
          <td class="virtue">Spersonalizowany przycisk start dla Windows 7, 8, 8.1, 10</td>
          <td class="itemb"><span>Dostępne jedynie przez 7 dni</span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr>
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" />
          </td>
          <td class="virtue">Szybki i trafny dostęp do plików, dokumentów i programów</td>
          <td class="itemb"><span>Dostępne jedynie przez 7 dni</span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr>
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" />
          </td>
          <td class="virtue">Łatwo przypina i organizuje ulubione aplikacje i strony internetowe</td>
          <td class="itemb"><span>Dostępne jedynie przez 7 dni</span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr class="bottall">
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" />
          </td>
          <td class="virtue">100% czyste menu Start bez żadnych przeszkadzających reklam</td>
          <td class="itemb"><span>Dostępne jedynie przez 7 dni</span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Optymalna usługa IObit</strong></td>
          <td class="itemb gray"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" />
          </td>
          <td class="virtue">Automatyczna aktualizacja do najnowszej wersji</td>
          <td class="itemb"><span>Dostępne jedynie przez 7 dni</span></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="bottall">
          <td class="icons" width="45">
            <img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" />
          </td>
          <td class="virtue">Bezpłatna pomoc techniczna 24/7 na żądanie</td>
          <td class="itemb white"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>              
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text" colspan="2"></th>
          <th class="itemb"></th>
          <th class="itema">
            <p><strong>49,90 zł </strong> <del>119,90 zł</del></p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-sm83pc49&ref=pl_sm83pc49purchase1906<?php echo $refStr;?>&refs=pl_purchase_sm8"
               onclick="ga('send', 'event', 'sm8buy', 'buy', 'sm8purchase3PC1906-pl')">
              <i class="all-icons"></i>
              <span>Aktywuj teraz</span>   
            </a>
            <p>1 rok / 3 PC</p>
          </th>            
        </tr>        
      </tfoot>
    </table>  
  </div>
  <!-- comparison end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>Uwaga:</dt>
      <dd>*. Dane mogą się różnić w zależności od systemu lub komputera.</dd>
      <dd>*. Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</dd>
    </dl>
    <p>© 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/sm8-box-off.png')?>" alt=""/>
      </div>
      <h2 class="fl">Łatwy sposób na powrót do klasycznego menu Start</h2>
      <div class="price fr">
        <p><strong>49,90 zł </strong> <del>119,90 zł</del></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pl-sm83pc49&ref=pl_sm83pc49purchase1906<?php echo $refStr;?>&refs=pl_purchase_sm8"
           onclick="ga('send', 'event', 'sm8buy', 'buy', 'sm8purchase3PC1906-pl')">
          <i class="all-icons"></i>
          <span>Aktywuj teraz</span>   
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&sepStr=<?php echo $sepStr;?>&r="+Math.random(),
        success: function(packs){
          setUnit(parseInt(packs.replace(/ /g,'')));
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 15000);
        }
      });
    }
    setTimeout('getBuyNum()', 15000);
    function setUnit(packsNum) {
      var unitStrBefore = 'Kupiło';
      var unitStrAfter = 'osób';
      var packsLast = packsNum % 10;
      var packsLastTwo = packsNum % 100;
      if (($.inArray(packsLast, [2, 3, 4]) != -1)&&($.inArray(packsLastTwo,[12,13,14])==-1)) {
        unitStrBefore = 'Kupiły';
        unitStrAfter = 'osoby';
      }
      $('.unit-bef').html(unitStrBefore);
      $('.unit-af').html(unitStrAfter);
    }
    setUnit(<?php echo intval(str_replace(' ','',$buyNum));?>);
    var imgSrc = "<?php echo getStaticUrl('images/sm-two-box.png')?>";
    var packsNum ='<?php echo $packsNum;?>';
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>