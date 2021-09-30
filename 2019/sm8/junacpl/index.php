<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
$refStr='';
if(in_array($_GET['to'],array('db_ac_sm8'))){
  $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('asc_acsm8'))){
  $refStr.='-'.$_GET['st'];
}
  include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="pl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>78% ZNIŻKI na Start Menu 8 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Wyłączna oferta dla cenionych użytkowników IObit oraz zaproszonych członków. Powrót do klasycznego menu Start jednym kliknięciem!">
<meta property="og:url" content="https://purchase.iobit.com/pl/sm8-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="78% ZNIŻKI na Start Menu 8 PRO - IObit">
<meta property="og:description" content="Wyłączna oferta dla cenionych użytkowników IObit oraz zaproszonych członków. Powrót do klasycznego menu Start jednym kliknięciem!">
<meta property="og:image" content="https://purchase.iobit.com/2019/sm8/junacpl/images/snapshot.png">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>Start Menu 8 PRO</h1>
        <p>Przywróć klasyczne menu Start systemowi Windows 8/10</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo $pResUrl; ?>images/boxshot.png" alt="">
        <div class="discount fl">
          <h2>78% TANIEJ</h2>
          <p>Wyłącznie dla cenionych użytkowników IObit</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>TYLKO:  <strong>19,90 zł </strong><del>89,90 zł</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=pl-sm819-ac&ref=pl_sm8-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pl_ac_sm8" onclick="ga('send', 'event', 'sm8buy', 'buy', 'sm8ac-pl');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktywuj teraz</span>
              </div>
            </a>
          </dd>
          <dd>1 rok / 3 PC</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <div class="feature wrapper">
    <h2>W jaki sposób Start Menu 8 PRO może Ci pomóc?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_01.png" alt=""></dt>
        <dd>
          <h3>KLASYCZNE MENU STARTOWE</h3>
          <p>Przywróć klasyczne menu startowe systemom Windows 8 i Windows 10.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_02.png" alt=""></dt>
        <dd>
          <h3>SZYBKIE WYSZUKIWANIE PLIKÓW</h3>
          <p>Potężna wyszukiwarka zapewnia szybkie i dokładne wyniki wyszukiwania.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_03.png" alt=""></dt>
        <dd>
          <h3>KONIEC Z REKLAMAMI</h3>
          <p>Łatwo znajdź to, czego potrzebujesz w 100% czystym i bezpiecznym menu startowym.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_04.png" alt=""></dt>
        <dd>
          <h3>DOSTOSOWYWANIE USTAWIEŃ</h3>
          <p>Ciesz się niestandardowym menu startowym dzięki bardziej zaawansowanym ustawieniom.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Nagradzany na całym świecie</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
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

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Łatwy powrót do klasycznego menu Start i zarządzania pulpitem</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>TYLKO:  <strong>19,90 zł </strong><del>89,90 zł</del></dt>
          <dd>
            <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=pl-sm819-ac&ref=pl_sm8-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pl_ac_sm8" onclick="ga('send', 'event', 'sm8buy', 'buy', 'sm8ac-pl');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktywuj teraz</span>
              </div>
            </a>
          </dd>
          <dd>1 rok / 3 PC</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">© 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>EKSKLUZYWNA OFERTA</h2>
        <p><strong>78% ZNIŻKI</strong> na powrót do klasycznego, wolnego od reklam menu Start</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>19,90 zł </strong><del>89,90 zł</del></dt>
          <dd>
            <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=pl-sm819-ac&ref=pl_sm8-ac-register<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pl_ac_sm8" onclick="ga('send', 'event', 'sm8buy', 'buy', 'sm8ac-pl');">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Aktywuj teraz</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo $pResUrl; ?>script/script.js"></script>
</body>
</html>