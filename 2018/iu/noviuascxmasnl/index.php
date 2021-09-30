<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='frasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Advanced SystemCare PRO en IObit Uninstaller PRO Combo met 75% Korting! - Gelukkig Nieuwjaar!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>Vrolijk 2019! Speciale Aanbieding!</h1>
      <p class="best">Uw Laatste Kans op een Grote Besparing – Slechts 1 keer per jaar!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Wees er snel bij! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms over</p>
            </div>
            <p><strong><small>€</small>19</strong> <span><del>€79,98</del><b>99</b> </span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=nl-asc12iu83pc1999&ref=nl_asc12iu83pc1999purchase1811a<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_iu"
               onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201811a-nl');">
              Activeer Nu
            </a>
            <p class="year">1-jarig abonnement / 3 PC’s</p>
          </div>
        </div>
      </div>
    </div>
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>IObits Dubbele Zekerheid: Schonere, Snellere en Veiligere PC </h2>
      <p class="over">
        IObit Uninstaller 8 PRO maakt samen met het toonaangevende optimalisatieprogramma – Advanced SystemCare 12 PRO, uw oude computer weer als nieuw en wist ieder spoor van hardnekkige programma’s.
      </p>
      <!-- computer -->
      <img class="computer" src="<?php echo $pResUrl;?>images/computer.png" alt="">
      <span class="circle circle-out"></span>
      <span class="circle circle-mid"></span>
      <span class="circle circle-int"></span>
      <!-- Schonere PC -->
      <dl class="schonere clearfix">
        <dd class="fl">
          <h3>Schonere PC</h3>
          <p>
            Ruim overbodige bestanden en het<br>
            register grondig op voor meer vrije ruimte
            <span>*Alleen met Advanced SystemCare PRO</span>
            Verwijder hardnekkige en gebundelde<br>
            programma’s voor meer vrije ruimte
            <span>*Alleen met IObit Uninstaller PRO</span>
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      </dl>
      <!-- Sneller Browsen -->
      <dl class="sneller clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Sneller Browsen</h3>
          <p>
            Optimaliseer browserinstellingen voor 300%<br>
            sneller internet
            <span>*Alleen met Advanced SystemCare PRO</span>
            Verwijder reclamemakende plug-ins die uw<br>
            browser vertragen
            <span>*Alleen met IObit Uninstaller PRO</span>
          </p>
        </dd>
      </dl>
      <!-- Veiligere PC -->
      <dl class="veiligere">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>Veiligere PC</h3>
          <p>
            Bescherm privégegevens en surfsporen tegen niet-vertrouwde<br>
            programma’s en malware
            <span>*Alleen met Advanced SystemCare PRO</span>
            Verwijder schadelijke bundleware en plug-ins
            <span>*Alleen met IObit Uninstaller PRO</span>
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <div class="arrow"><i></i></div>
      <h2>Geniet ook van deze geweldige functies!</h2>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-01.png" alt=""></dt>
        <dd>
          200% Sneller<br>
          Opstarten
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-02.png" alt=""></dt>
        <dd>
          Digitale Vingerafdruk<br>
          Beschermen
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-03.png" alt=""></dt>
        <dd>
          Automatisch RAM<br>
          Opschonen
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-04.png" alt=""></dt>
        <dd>
          Alle Software Updaten<br>
          in 1 klik
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Obtenez Pro pour un PC plus propre, plus rapide et plus sécuris</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
          </p>
        </div>
        <p><strong><small>€</small>19</strong> <span><del>€79,98</del><b>99</b> </span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-asc12iu83pc1999&ref=nl_asc12iu83pc1999purchase1811b<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_iu"
           onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201811b-nl');">
          Activeer Nu
        </a>
        <p class="year">1-jarig abonnement / 3 PC’s</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- award start -->
  <div class="award wrapper">
    <h2>Vertrouwd en bekroond door de volgende media</h2>
    <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
  </div>
  <!-- award end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <div class="content ">
        <!-- 01 -->
        <dl class="active">
          <dt>
            <h3>Klantbeoordeling</h3>
          </dt>
          <dd>
            "Net als de meeste mensen die ik ken, ben ik geen computer expert. Door de jaren heen heb ik al tig programma’s geprobeerd die allemaal beweren de beste te zijn. Die kunnen allemaal niet tippen aan de Advanced SystemCare PRO-bescherming die ik nu heb. Sinds de installatie van deze software, loopt mijn PC weer als nieuw. Dit programma overtreft alle verwachtingen, het is altijd up-to-date, en de graphics zijn ook erg gaaf! Bedankt voor dit geweldige programma!"
          </dd>
        </dl>
        <!-- 02 -->
        <dl>
          <dt>
            <h3>Klantbeoordeling</h3></dt>
          <dd>
            "Als ICT'er merk ik dat tijdens het repareren van computers, veel problemen worden opgelost door te scannen met ASC. Na de reparatie raad ik de klanten meestal het ASC PRO-pakket aan. Wie heeft er nog een technicus nodig als de klantenservice van Advanced SystemCare PRO, 24 uur per dag beschikbaar is. Dit is het beste product dat een thuisgebruiker kan kopen. Bedankt dat jullie mijn werk een stuk makkelijker maken!"
          </dd>
        </dl>
        <!-- 03 -->
        <dl>
          <dt>
            <h3>Media recensie</h3></dt>
          <dd>
            "Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."
          </dd>
        </dl>
        <!-- 04 -->
        <dl>
          <dt>
            <h3>Media recensie</h3></dt>
          <dd>
            "Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen."
          </dd>
        </dl>
        <!-- 05 -->
        <dl>
          <dt>
            <h3>Klantbeoordeling</h3></dt>
          <dd>
            "Uninstaller PRO is een van de producten van de productlijn van IObit waarmee ik investeer in mijn PC zoals een kok investeert in zijn messen. Uninstaller is een geweldig programma om resten van verwijderde programma’s op te sporen en te verwijderen. Je merkt direct dat er meer vrije ruimte is op de computer. De standaard Windows Uninstaller werkt wel, maar verwijdert niet alle resten. IObit Unistaller PRO heeft 35 bestanden grondig van mijn PC verwijderd waardoor er direct meer ruimte vrijkwam op mijn harde schijf. Ik heb de licentie aangeschaft voor 3 PC’s zodat ik dit programma bij mijn hele familie kan installeren. Iedereen is erg te spreken over dit programma!"
          </dd>
        </dl>
        <!-- 06 -->
        <dl>
          <dt>
            <h3>Klantbeoordeling</h3></dt>
          <dd>
            "IObit Uninstaller wordt beter met elke update. Ik gebruik het programma al meer dan 3 jaar. Het programma laadt snel en is simpel in het gebruik. De functies die ik het meeste gebruik zijn Gezamenlijk Verwijderen, Krachtige Scan, Bestand Versnipperaar en laatst geïnstalleerde programma’s zodat ik snel kan zien welke van die programma’s ik prettig vind en welke niet. Je kunt ook gemakkelijk de opstartprogramma’s beheren waardoor de pc sneller opstart."
          </dd>
        </dl>
      </div>
      <ul class="users clearfix lato">
        <!-- hank-ewert -->
        <li class="current">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/hank-ewert.png" alt="Hank Ewert"></div>
            <p>Hank Ewert</p>
          </a>
        </li>
        <!-- 02 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"></div>
          <p>Charles R. Widick</p>
        </li>
        <!-- 03 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"></div>
          <p>Cnet</p>
        </li>
        <!-- 04 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt="MakeUseOf">
          </div>
          <p>MakeUseOf</p>
        </li>
        <!-- 05 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/joseph-yu.png" alt="Joseph Yu"></div>
          <p>Joseph Yu</p>
        </li>
        <!-- 06 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/Lovro-zuzic.png" alt="Lovro Žužić">
          </div>
          <p>Lovro Žužić</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <div class="box fl">
        <img src="<?php echo getStaticUrl('images/asc-bottom-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count fl">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Wees er snel bij! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms over</p>
      </div>
      <div class="price fr">
        <p><strong><small>€</small>19</strong> <span><del>€79,98</del><b>99</b> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-asc12iu83pc1999&ref=nl_asc12iu83pc1999purchase1811c<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_iu"
           onclick="ga('send', 'event', 'asciubuy', 'buy', 'iupurchase-asc201811c-nl');">
          Activeer Nu
        </a>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="service clearfix">
      <dl class="fl moneyback clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
        <dd class="fl">
          <h3>
            Probeer ZONDER RISICO –<br>
            met onze 60 dagen niet-goed-geld-terug garantie
          </h3>
          <p>
            Door PRO te activeren zult u een schonere, snellere en veiligere pc<br>
            krijgen voor een schappelijke prijs!
          </p>
        </dd>
      </dl>
      <dl class="fl payments">
        <dd><h3>Wij accepteren:</h3></dd>
        <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
      </dl>
    </div>
    <p class="notes">
      Opmerking:<br>
      *.Dergelijke promotionele programma's kunnen zonder voorafgaande kennisgeving worden gewijzigd, van tijd tot tijd naar eigen goeddunken.<br>
      *.Data kan variëren afhankelijk van verschillende computer systemen.
    </p>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=nl-asc12iu83pc1899&ref=nl_asc12iu83pc1899purchase1811a<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_iu";
  var _ga = "ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201811popup-nl')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>