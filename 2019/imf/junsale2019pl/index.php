<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$reTime=15;
$reduceNum=103541523;
$sepStr=' ';
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum,0,'.',$sepStr);

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Do 55% zniżki na IObit Malware Fighter PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1>Oferta ograniczona </h1>
      <div class="subtitle clearfix">
        <p>Kup IObit Malware Fighter PRO w ciągu następnych </p>
        <ul id="banCountdown" class="cuntdown">
          <li><span>12</span> Godz</li>
          <li><span>12</span> min </li>
          <li><span>12</span> sek </li>
          <li><span>12</span> ms</li>
        </ul>
         i otrzymaj darmowe prezenty
      </div>
      <div class="offer">
        <img src="<?php echo getStaticUrl('images/box.png')?>" alt=""/>
        <div class="price">
          <p><strong>89<small>,90 zł</small></strong> <del> 199,90 zł</del></p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-imf73pc89&ref=pl_imf73pc89purchase1906<?php echo $refStr;?>&refs=pl_purchase_imf  "
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC1906-pl')">
            <i class="all-icons"></i>
            <span>Kup Teraz</span>
          </a>
          <p><span class="unit-bef">Kupiło</span> go ponad <span class="buyNum"><?php echo $buyNum;?></span> <span class="unit-af">osób</span></p>
        </div>
        <div class="info">
          <ul class="info-box">
            <li>
              <p>Licencja Iobit Malware Fighter PRO obsługuje 2 dodatkowe komputery, dzięki czemu możesz udostępnić je znajomym i rodzinie!</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payments start -->
  <div class="payments">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  </div>
  <!-- payments end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Żadne tricki nie oprą się IObit Malware Fighter 7 PRO</h2>
      <div class="clearfix">
        <div class="left fl">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dt>
            <dd>
              <h4>Koniec z atakami Ransomware</h4>
              <p>
                Słynne Ransomware, takie jak WannaCry, utrudnia nam życie. Teraz IMF 6 PRO aktywnie wykrywa i zapobiega tym atakom.
              </p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></dt>
            <dd>
              <h4>Ochrona kamerki internetowej</h4>
              <p>Zapewnia całkowitą ochronę, dzięki której nikt nie będzie Cię podglądał, miał dostępu do informacji, czy śledził osobistych rozmów w Twojej prywatnej przestrzeni.</p>
            </dd>
          </dl>
        </div>
        <img class="fl imgbox" src="<?php echo getStaticUrl('images/computer.png')?>" alt=""/>
        <div class="right fr">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></dt>
            <dd>
             <h4>Ochrona ważnych plików</h4>
              <p>Sejf chroni ważne pliki i foldery przed nieautoryzowanym dostępem i zagrożeniami.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></dt>
            <dd>
              <h4>Potrójna ochrona komputera </h4>
              <p>
                Twój komputer będzie chroniony przez Bitdefender Engine, silnik anty-malware IObit oraz silnik AntiResomware.
              </p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end --> 

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Porównanie wersji FREE oraz PRO</th>
          <th class="itemb">
            <h3>IObit Malware Fighter <b>FREE</b></h3>
            <p> Twoja aktualna wersja</p>
          </th>
          <th class="itema">
            <h3>IObit Malware Fighter <b>PRO</b></h3>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pl-imf73pc89&ref=pl_imf73pc89purchase1906<?php echo $refStr;?>&refs=pl_purchase_imf  "
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC1906-pl')">
              <i class="all-icons"></i>
              <span>Kup Teraz</span>
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Podstawowa funkcja ochrony przed złośliwym oprogramowaniem</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">
           Wykrywa ponad 203 mln zagrożeń dzięki silnikom Bitdefender i IObit  <span class="sign">ULEPSZONE</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">
            Blokuje oprogramowanie ransomware próbujące zaszyfrować ważne pliki  <span class="sign nuevo">NOWOSC</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">
            Chroni w sejfie określone pliki przed nieautoryzowanym dostępem  <span class="sign nuevo">NOWOSC</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">
            Pełna ochrona w czasie rzeczywistym dla najlepszego bezpieczeństwa komputera  <span class="sign">ULEPSZONE</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">
            Chroni Twoją kamerkę przed nieautoryzowanym dostępem  <span class="sign nuevo">NOWOSC</span>
          </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Zapobiega infekcjom wirusowym przesyłanym przez dyski USB</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Wykrywa złośliwe procesy działające w pamięci RAM</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Wykrywa zagrożenia poprzez dokładną analizę </td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatycznie czyści śledzenie nawigacji w celu uniknięcia złośliwego śledzenia</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Automatyczna aktualizacja do najnowszej wersji</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Bezpłatna pomoc techniczna 24 godziny na dobę, 7 dni w tygodniu</td>
          <td class="itemb"><i class="all-icons fork">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <div class="content">
        <dl>
          <dt><h3>Recenzja użytkownika</h3></dt>
          <dd>„Jestem bardzo zadowolony z waszego produktu IObit Maleware Fighter. Przed zakupieniem tego produktu, miałem wiele problemów ze złośliwymi zakłóceniami, nie byłem w stanie obejrzeć całego filmu lub koncertu, co bardzo lubię robić. Dzięki waszemu programowi, teraz każda operacja jest przejrzysta, bezpieczna i dobrze chroniona. Program skanuje mój laptop bez wpływu na jego wydajność. Poleciłem ten produkt dwóm moim znajomym”.</dd>
        </dl>
        <dl class="active">
          <dt><h3>Recenzje mediów</h3></dt>
          <dd>„Program wykorzystuje dwa silniki AV, własny oraz BitDefender. Program wydaje się skutecznie działać przeciwko szkodliwemu oprogramowaniu, które nie może zostać wykryte przez inne podobnie działające programy. Bardzo dobrze, że może działać razem ze standardowym oprogramowaniem AV. Może wykryć szeroki zakres programów szpiegujących, ransomware, adware, trojanów, robaków, keyloggerów i botów”.</dd>
        </dl>
        <dl>
          <dt>
          <h3>Recenzja użytkownika</h3></dt>
          <dd>„Chciałbym bardzo podziękować wszystkim pracownikom IObit za ciężką pracę nad dostarczeniem nam najlepszych programów. Rozwijacie się dla użytkowników. Ostatnia aktualizacja jest znacznie szybsza w skanerze i łatwa w obsłudze. Ci, którzy szukają naprawdę dobrego programu antywirusowego, który jest również wart swojej ceny, nie muszą szukać dalej niż IObit Malware Fighter”.</dd>
        </dl>
      </div>
      <ul class="users clearfix">
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir">
          </div>
          <p>Gelu Batir</p>
        </li>
        <li class="center active">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/software-informer.png" alt="Software.Informer"></div>
          <p>Software.Informer</p>
        </li>
        <li class="last">
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy">
          </div>
          <p>David Cassidy</p>
        </li>
      </ul>
      <div class="arrow"><img src="<?php echo getStaticUrl('images/arrow.png')?>"></div>
    </div>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <div class="top">
        <h2>Pozostało jedynie aby porządnie i mądrze zabezpieczyć komputer</h2>
        <ul id="botCountdown" class="cuntdown">
          <li><span>12</span> Godz </li>
          <li><span>12</span> min </li>
          <li><span>12</span> sek </li>
          <li><span>12</span> ms</li>
        </ul>

      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/box-bottom.png')?>" alt=""/>
        <div class="price fl">
          <p>
            <strong>89<small>,90 zł</small></strong> <del>199,90 zł</del>
            <span class="sign">Oszczędzasz 110,00 zł</span>
          </p>
          <a class="buybtn"
             href="http://www.iobit.com/buy.php?product=pl-imf73pc89&ref=pl_imf73pc89purchase1906<?php echo $refStr;?>&refs=pl_purchase_imf  "
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC1906-pl')">
            <i class="all-icons"></i>
            <span>Kup Teraz</span>
          </a>
          <p><span class="unit-bef">Kupiło</span> go już ponad  <b class="buyNum"><?php echo $buyNum;?></b>  <span class="unit-af">osób</span></p>
        </div>
        <div class="info">
          <ul class="info-box">
            <li>
              <p>Licencja Iobit Malware Fighter PRO obsługuje 2 dodatkowe komputery, dzięki czemu możesz udostępnić je znajomym i rodzinie!</p>
            </li>
          </ul>
        </div>
      </div>
    </div>
    
  </div>
  <!-- footbuy end -->

  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/opswat.png')?>" alt="" /></dt>
        <dd>
          <h3>Certyfikaty</h3>
          <p>Certyfikowany przez profesjonalnych ekspertów z OPSWAT</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <h3>Satysfakcja gwarantowana</h3>
          <p>60 dni zwrotu</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd>
          <h3>Ubezpieczona płatność</h3>
          <p>IObit obsługuje różne tryby bezpiecznej płatności </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt="" /></dt>
        <dd>
          <h3>Obsługa klienta</h3>
          <p>24/7 Bezpłatna pomoc techniczna</p>
        </dd>
      </dl>
    </div>
    <!-- service end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Uwaga:</dt>
      <dd>*. Dane mogą się różnić w zależności od systemu lub komputera.</dd>
      <dd>*.Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</div>
    <!-- footer end -->
  </div>

<script>    
  var countdown = function(countdown) {
    getCycleCountdown();
    $(countdown).eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout("countdown('" + countdown + "')", 1);
  };

  function getCycleCountdown() {
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2019-07-14 16:00:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
  }
  $(function(){
    countdown(("#banCountdown span"));
    countdown(("#botCountdown span"));
    //userreview 
    $(".users li").mouseover(function(event) {
      var num = $(this).index();
      $(".users li").eq(num).addClass('active').siblings().removeClass('active');
      $(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
    });
  });
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
</script>
</body>
</html>