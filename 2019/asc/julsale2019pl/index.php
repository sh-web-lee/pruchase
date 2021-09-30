<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

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
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
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

$reTime=15;
$reduceNum=104212894;
$sepStr=' ';
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum,0,'.',$sepStr);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Obniżka cen! Advanced SystemCare 13 PRO aż 125zł TANIEJ!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>Advanced SystemCare 13 PRO</h1>
      <p>Najlepszy przyjaciel Twojego komputera: oczyści, przyspieszy, zabepieczy</p>
    </div>
    <!-- asc-box -->
    <img class="asc-box" src="<?php echo $pResUrl;?>images/asc-box.png" alt="Advanced SystemCare PRO 12">
    <!-- middle-message -->
    <div class="middle-message">
      <p class="viewNum">Tylko dzisiaj <br> o swój komputer <span class="unit-bef">zadbało</span> &nbsp;<strong>5</strong><strong>8</strong><strong>2</strong><strong>4</strong><strong>1</strong>&nbsp; <span class="unit-af">osób</span></p>
      <h2>Zazdrosny? Zadbaj i Ty!</h2>
      <ul>
        <li>1 rok / 3 PC</li>
        <li class="two">Dostępny od zaraz</li>
        <li class="three">Pomoc techniczna 24/7</li>
        <li class="four">60-dniowa gwarancja satysfakcji</li>
        <li class="five">Bezpieczne metody płatności</li>
      </ul>
    </div>
    <!-- right-message -->
    <div class="right-message">
      <div class="content">
        <h3>Advanced SystemCare 13 PRO</h3>
        <p class="original">stara cena <del>199,90 zł</del> <span>1 rok / 3 PC</span></p>
        <p class="price">74,90 zł</p>
        <p class="off">zaoszczędzasz aż <span>-125 zł</span></p>
      </div>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase1907<?php echo $refStr;?>&refs=pl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1907-pl')">
        <span>Przejdź na PRO</span>
      </a>
      <p class="attention">Na co czekasz?</p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- awards -->
<div class="awards wrapper">
  Polecają go najlepsi gracze na rynku: <img src="<?php echo $pResUrl;?>images/payments.png" alt="">
</div>
<!-- end awards -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <h2>
      Zapoznaj się z korzyściami, jakie przyniesie Ci <br>
      Advanced SystemCare 13 PRO
    </h2>
    <dl class="one">
      <dt>BEZPIECZNY</dt>
      <dd>
        Pożegnaj się z niebezpiecznymi intruzami, wyczyść ślady <br>
        online, zabezpiecz system, zadbaj o bezpieczeństwo <br>
        Twoje oraz Twojego komputera.
      </dd>
    </dl>
    <dl class="two">
      <dt>CZYSTSZY</dt>
      <dd>
        Zapewnij swojemu komputerowi dogłębne czyszczenie <br>
        rejestru, zwolnij miejsce na dysku i popraw wydajność <br>
        Twojego PC.
      </dd>
    </dl>
    <dl class="three">
      <dt>SZYBSZY</dt>
      <dd>
        Zwiększona prędkość pracy komputera i Internetu? Tak! <br>
        Optymalne ustawienia przeglądarki w połączeniu z <br>
        optymalizacją systemu pozwolą Ci cieszyć się <br>
        niesamowitą prędkością.
      </dd>
    </dl>
    <dl class="four">
      <dt>
        Z ZAGWARANTOWANĄ OCHRONĄ <br>
        PRYWATNOŚCI
      </dt>
      <dd>
        Ukrycie cyfrowego odcisku palca oraz zablokowanie <br>
        potajemnego dostępu do Twoich danych pozwoli Ci <br>
        cieszyć się bezpieczeństwem online.
      </dd>
    </dl>
  </div>
</div>
<!-- end feature -->

<!-- benefits -->
<div class="benefits">
  <div class="wrapper">
    <h2>
      Czego nie zagwarantuje Ci bezpłatna wersja <br>
      Advanced SystemCare 13 PRO?
    </h2>
    <ul>
      <li>Czyszczenie i optymalizacja komputera w wersji PREMIUM</li>
      <li>Dogłębne czyszczenie rejestru</li>
      <li>Defragmentacja dysku</li>
      <li>Automatyczne czyszczenie pamięci RAM</li>
      <li>Automatycznie zaplanowane czyszczenie</li>
      <li>Nawet do 200% szybsze uruchamianie komputera</li>
      <li>Nawet do 300% szybsza praca Internetu</li>
      <li>Pełna ochrona komputera</li>
      <li>Wykrywanie i naprawianie infekcji</li>
      <li>Ochrona podczas surfowania po Internecie w wersji PREMIUM</li>
      <li>Ukrywanie cyfrowego odcisku palca</li>
      <li>Oraz wiele innych przydatnych funkcji</li>
    </ul>
  </div>
</div>
<!-- end benefits -->

<!-- review -->
<div class="review">
  <div class="wrapper clearfix">
    <div class="container clearfix">
      <h2>Oni nam zaufali!</h2>
      <div class="review-message">
        <!-- cnet -->
        <dl class="active clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/cnet.png" alt="Cnet"></dt>
          <dd>
            <h3>Recenzje mediów</h3>
            <p>
              „Nie ma nic gorszego niż komputer, który jest tak zapchany, że jego użytkowanie oraz granie stają się niemożliwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprzątanie niepotrzebnych plików, złośliwego oprogramowania i nieprawidłowych wpisów w rejestrze, ale również dając Twojemu komputerowi impuls do zoptymalizowania jego działania”.
            </p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <!-- Danny R. Sheets -->
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/danny-r-sheets.png" alt="Danny R. Sheets"></dt>
          <dd>
            <h3>Recenzja użytkownika</h3>
            <p>
              „Nigdy nie znalazłem lepszego programu do konserwacji i bezpieczeństwa komputera niż Advanced SystemCare. Odkąd kupiłem ASC, nigdy nie miałem problemów z wirusami, phishingiem, czarnymi ekranami lub innymi rodzajami błędów. To były najlepiej zainwestowane pieniądze, jakie kiedykolwiek wydałem na komputer. Dziękuję ASC za to, że korzystania z komputera jest dużo przyjemniejsze”.
            </p>
            <cite>Danny R. Sheets</cite>
          </dd>
        </dl>
        <!-- Tony Fisher -->
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/tony-fisher.png" alt="Tony Fisher"></dt>
          <dd>
            <h3>Recenzja użytkownika</h3>
            <p>
              „Używam Advanced SystemCare Pro od dłuższego czasu, a najnowsza wersja 13 jest nawet lepsza niż wersja 12. ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych funkcji, których możesz użyć, aby utrzymać komputer w dobrym stanie. Gorąco polecam wszystkim najnowszy Advanced SystemCare 13”.
            </p>
            <cite>Tony Fisher</cite>
          </dd>
        </dl>
        <!-- Daniel Sanders -->
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/daniel-sanders.png" alt="Daniel Sanders"></dt>
          <dd>
            <h3>Recenzja użytkownika</h3>
            <p>
              „Nowy ASC 13 to obowiązkowa pozycja dla wszystkich użytkowników komputerów. Czysty i intuicyjny interfejs jest łatwy w obsłudze zarówno dla początkującego, jak i zaawansowanego użytkownika. Wiele potężnych narzędzi w zestawie, aby utrzymać najwyższą wydajność komputera. Wyrazy uznania dla IObit za tak wspaniały zestaw narzędzi w jednym miejscu”.
            </p>
            <cite>Daniel Sanders</cite>
          </dd>
        </dl>
        <!-- Richard Preston -->
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/richard-preston.png" alt="Richard Preston"></dt>
          <dd>
            <h3>Recenzja użytkownika</h3>
            <p>
              „Uwielbiam używać Advanced SystemCare 13 Beta. Jest bardzo szybki. Usuwa ślady prywatności, niepotrzebne pliki i fragmenty rejestru. Szczególnie podoba mi się wyskakujące okienko z pozwoleniem na dostęp do obszarów wrażliwych. Gdy aplikacja po raz pierwszy próbuje uzyskać dostęp do poufnych plików, otwiera się okno umożliwiające dostęp lub odmowę. Po przyznaniu uprawnień dla aplikacji wyskakujące okienko nie będzie już dla niej wyświetlane. Wiem, że moje wrażliwe pliki będą bezpieczne”.
            </p>
            <cite>Richard Preston</cite>
          </dd>
        </dl>
      </div>
      <a class="next" href="javascript: userMouseover();"> > </a>
    </div>
  </div>
</div>
<!-- end review -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <img class="asc-box" src="<?php echo $pResUrl;?>images/bottombuy-asc-box.png" alt="Advanced SystemCare PRO 12">
    <h2>
      <strong>Nie czekaj!</strong>
      <span>Dołącz do grona użytkowników Advanced SystemCare 13 PRO już teraz.</span>
    </h2>
    <dl>
      <dd>
        <p class="price">Jedyne <strong>74,90 zł</strong> <del>199,90 zł</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase1907<?php echo $refStr;?>&refs=pl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1907-pl')">
          <span>Przejdź na PRO</span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone
  </div>
</div>
<!-- end footer -->
<script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&sepStr=<?php echo $sepStr;?>&r="+Math.random(),
      success: function(packs){
        var buyNum=parseInt(packs.replace(/ /g,''));
        setUnit(buyNum);
        fillIn(buyNum);
        setTimeout('getBuyNum()', 15000);
      }
    });
  }

  function setUnit(packsNum) {
    var unitStrBefore = 'zadbało';
    var unitStrAfter = 'osób';
    var packsLast = packsNum % 10;
    var packsLastTwo = packsNum % 100;
    if (($.inArray(packsLast, [2, 3, 4]) != -1)&&($.inArray(packsLastTwo,[12,13,14])==-1)) {
      unitStrBefore = 'zadbały';
      unitStrAfter = 'osoby';
    }
    $('.unit-bef').html(unitStrBefore);
    $('.unit-af').html(unitStrAfter);
  }

  $(function(){
    var buyNum=<?php echo intval(str_replace(' ','',$buyNum));?>;
    fillIn(buyNum);
    setTimeout('getBuyNum()', 15000);
    setUnit(<?php echo intval(str_replace(' ','',$buyNum));?>);
  });
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>