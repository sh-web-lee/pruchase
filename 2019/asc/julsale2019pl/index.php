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
  <title>Obni??ka cen! Advanced SystemCare 13 PRO a?? 125z?? TANIEJ!</title>
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
      <p>Najlepszy przyjaciel Twojego komputera: oczy??ci, przyspieszy, zabepieczy</p>
    </div>
    <!-- asc-box -->
    <img class="asc-box" src="<?php echo $pResUrl;?>images/asc-box.png" alt="Advanced SystemCare PRO 12">
    <!-- middle-message -->
    <div class="middle-message">
      <p class="viewNum">Tylko dzisiaj <br> o sw??j komputer <span class="unit-bef">zadba??o</span> &nbsp;<strong>5</strong><strong>8</strong><strong>2</strong><strong>4</strong><strong>1</strong>&nbsp; <span class="unit-af">os??b</span></p>
      <h2>Zazdrosny? Zadbaj i Ty!</h2>
      <ul>
        <li>1 rok / 3 PC</li>
        <li class="two">Dost??pny od zaraz</li>
        <li class="three">Pomoc techniczna 24/7</li>
        <li class="four">60-dniowa gwarancja satysfakcji</li>
        <li class="five">Bezpieczne metody p??atno??ci</li>
      </ul>
    </div>
    <!-- right-message -->
    <div class="right-message">
      <div class="content">
        <h3>Advanced SystemCare 13 PRO</h3>
        <p class="original">stara cena <del>199,90 z??</del> <span>1 rok / 3 PC</span></p>
        <p class="price">74,90 z??</p>
        <p class="off">zaoszcz??dzasz a?? <span>-125 z??</span></p>
      </div>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase1907<?php echo $refStr;?>&refs=pl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1907-pl')">
        <span>Przejd?? na PRO</span>
      </a>
      <p class="attention">Na co czekasz?</p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- awards -->
<div class="awards wrapper">
  Polecaj?? go najlepsi gracze na rynku: <img src="<?php echo $pResUrl;?>images/payments.png" alt="">
</div>
<!-- end awards -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <h2>
      Zapoznaj si?? z korzy??ciami, jakie przyniesie Ci <br>
      Advanced SystemCare 13 PRO
    </h2>
    <dl class="one">
      <dt>BEZPIECZNY</dt>
      <dd>
        Po??egnaj si?? z niebezpiecznymi intruzami, wyczy???? ??lady <br>
        online, zabezpiecz system, zadbaj o bezpiecze??stwo <br>
        Twoje oraz Twojego komputera.
      </dd>
    </dl>
    <dl class="two">
      <dt>CZYSTSZY</dt>
      <dd>
        Zapewnij swojemu komputerowi dog????bne czyszczenie <br>
        rejestru, zwolnij miejsce na dysku i popraw wydajno???? <br>
        Twojego PC.
      </dd>
    </dl>
    <dl class="three">
      <dt>SZYBSZY</dt>
      <dd>
        Zwi??kszona pr??dko???? pracy komputera i Internetu? Tak! <br>
        Optymalne ustawienia przegl??darki w po????czeniu z <br>
        optymalizacj?? systemu pozwol?? Ci cieszy?? si?? <br>
        niesamowit?? pr??dko??ci??.
      </dd>
    </dl>
    <dl class="four">
      <dt>
        Z ZAGWARANTOWAN?? OCHRON?? <br>
        PRYWATNO??CI
      </dt>
      <dd>
        Ukrycie cyfrowego odcisku palca oraz zablokowanie <br>
        potajemnego dost??pu do Twoich danych pozwoli Ci <br>
        cieszy?? si?? bezpiecze??stwem online.
      </dd>
    </dl>
  </div>
</div>
<!-- end feature -->

<!-- benefits -->
<div class="benefits">
  <div class="wrapper">
    <h2>
      Czego nie zagwarantuje Ci bezp??atna wersja <br>
      Advanced SystemCare 13 PRO?
    </h2>
    <ul>
      <li>Czyszczenie i optymalizacja komputera w wersji PREMIUM</li>
      <li>Dog????bne czyszczenie rejestru</li>
      <li>Defragmentacja dysku</li>
      <li>Automatyczne czyszczenie pami??ci RAM</li>
      <li>Automatycznie zaplanowane czyszczenie</li>
      <li>Nawet do 200% szybsze uruchamianie komputera</li>
      <li>Nawet do 300% szybsza praca Internetu</li>
      <li>Pe??na ochrona komputera</li>
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
            <h3>Recenzje medi??w</h3>
            <p>
              ???Nie ma nic gorszego ni?? komputer, kt??ry jest tak zapchany, ??e jego u??ytkowanie oraz granie staj?? si?? niemo??liwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprz??tanie niepotrzebnych plik??w, z??o??liwego oprogramowania i nieprawid??owych wpis??w w rejestrze, ale r??wnie?? daj??c Twojemu komputerowi impuls do zoptymalizowania jego dzia??ania???.
            </p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <!-- Danny R. Sheets -->
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/danny-r-sheets.png" alt="Danny R. Sheets"></dt>
          <dd>
            <h3>Recenzja u??ytkownika</h3>
            <p>
              ???Nigdy nie znalaz??em lepszego programu do konserwacji i bezpiecze??stwa komputera ni?? Advanced SystemCare. Odk??d kupi??em ASC, nigdy nie mia??em problem??w z wirusami, phishingiem, czarnymi ekranami lub innymi rodzajami b????d??w. To by??y najlepiej zainwestowane pieni??dze, jakie kiedykolwiek wyda??em na komputer. Dzi??kuj?? ASC za to, ??e korzystania z komputera jest du??o przyjemniejsze???.
            </p>
            <cite>Danny R. Sheets</cite>
          </dd>
        </dl>
        <!-- Tony Fisher -->
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/tony-fisher.png" alt="Tony Fisher"></dt>
          <dd>
            <h3>Recenzja u??ytkownika</h3>
            <p>
              ???U??ywam Advanced SystemCare Pro od d??u??szego czasu, a najnowsza wersja 13 jest nawet lepsza ni?? wersja 12. ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych funkcji, kt??rych mo??esz u??y??, aby utrzyma?? komputer w dobrym stanie. Gor??co polecam wszystkim najnowszy Advanced SystemCare 13???.
            </p>
            <cite>Tony Fisher</cite>
          </dd>
        </dl>
        <!-- Daniel Sanders -->
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/daniel-sanders.png" alt="Daniel Sanders"></dt>
          <dd>
            <h3>Recenzja u??ytkownika</h3>
            <p>
              ???Nowy ASC 13 to obowi??zkowa pozycja dla wszystkich u??ytkownik??w komputer??w. Czysty i intuicyjny interfejs jest ??atwy w obs??udze zar??wno dla pocz??tkuj??cego, jak i zaawansowanego u??ytkownika. Wiele pot????nych narz??dzi w zestawie, aby utrzyma?? najwy??sz?? wydajno???? komputera. Wyrazy uznania dla IObit za tak wspania??y zestaw narz??dzi w jednym miejscu???.
            </p>
            <cite>Daniel Sanders</cite>
          </dd>
        </dl>
        <!-- Richard Preston -->
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/richard-preston.png" alt="Richard Preston"></dt>
          <dd>
            <h3>Recenzja u??ytkownika</h3>
            <p>
              ???Uwielbiam u??ywa?? Advanced SystemCare 13 Beta. Jest bardzo szybki. Usuwa ??lady prywatno??ci, niepotrzebne pliki i fragmenty rejestru. Szczeg??lnie podoba mi si?? wyskakuj??ce okienko z pozwoleniem na dost??p do obszar??w wra??liwych. Gdy aplikacja po raz pierwszy pr??buje uzyska?? dost??p do poufnych plik??w, otwiera si?? okno umo??liwiaj??ce dost??p lub odmow??. Po przyznaniu uprawnie?? dla aplikacji wyskakuj??ce okienko nie b??dzie ju?? dla niej wy??wietlane. Wiem, ??e moje wra??liwe pliki b??d?? bezpieczne???.
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
      <span>Do????cz do grona u??ytkownik??w Advanced SystemCare 13 PRO ju?? teraz.</span>
    </h2>
    <dl>
      <dd>
        <p class="price">Jedyne <strong>74,90 z??</strong> <del>199,90 z??</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pl-asc133pc74&ref=pl_asc133pc74purchase1907<?php echo $refStr;?>&refs=pl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1907-pl')">
          <span>Przejd?? na PRO</span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    Copyright ?? 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrze??one
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
    var unitStrBefore = 'zadba??o';
    var unitStrAfter = 'os??b';
    var packsLast = packsNum % 10;
    var packsLastTwo = packsNum % 100;
    if (($.inArray(packsLast, [2, 3, 4]) != -1)&&($.inArray(packsLastTwo,[12,13,14])==-1)) {
      unitStrBefore = 'zadba??y';
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