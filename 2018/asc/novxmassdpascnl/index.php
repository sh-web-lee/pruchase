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
  $cName='nlsdasc'.$date;
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

$viewNum=rand(96,125);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_sdpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>65% Kerstkorting op Advanced SystemCare PRO</title>
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
        <a class="logo" href="https://www.iobit.com/nl/" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Speciale Kerstaanbieding</h1>
        <p class="best">Uw Laatste Kans op een Grote Besparing – Slechts 1 keer per jaar!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Wees er snel bij! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms  over</p>
              </div>
              <p><strong><small>€</small>17<small>,</small></strong> <span>99 <del> €49,99</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=a12spin3pcnl&ref=nl_sd6pasc12rightcorner1799purchase1811a<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1812a-nl')">
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
        <h2>Waarom heeft u Advanced SystemCare 12 PRO nodig?</h2>
        <p class="over">Meer dan 35.000.000 gebruikers wereldwijd kiezen Advanced SystemCare PRO om hun oude pc weer als nieuw te maken en hun nieuwe pc te optimaliseren om er het maximale uit te halen.</p>  
        <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Meer Privacy<b class="sign"> Nieuw</b></h3>
                <p>Wis privacysporen zodat u niet getraceerd kunt worden en blokkeer toegang tot al uw privacygevoelige gegevens.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>300%* Sneller Internet <b>Verbeterd</b></h3>
                <p>Versnel downloads, surfen, online games en YouTube video’s met tot 300%.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>200%* Snellere PC <b> Verbeterd </b></h3>
                <p>
                 Voorkom dat uw systeem hapert en maak uw pc tot 200% sneller.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Grondiger Opschonen  <b> Verbeterd</b></h3>
                <p>Maak automatisch RAM vrij voor betere pc-prestaties en repareer het register voor een stabiel systeem.</p>
              </dd>
            </dl>
          </div>
        </div>     
      </div>
    </div>
    <!-- feature end -->
    <!-- together start -->
    <div class="together">
      <div class="wrapper">
        <h2>
          Met Smart Defrag en Advanced SystemCare PRO, <br> haalt u het maximale uit uw harde schijf en wordt uw pc sneller!
        </h2>
        <div class="panel clearfix">
          <div class="asc-box fl clearfix">
            <div class="box fl">
              <h3>Maximale Harde Schijf Prestaties<i></i></h3>
              <dl>
                <dt><strong>Tot 200%* Sneller</strong></dt>
                <dd>
                 Sneller toegang tot bestanden & sneller games starten.
                  <span>*Alleen Smart Defrag PRO!</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Betere Schijfprestaties</strong></dt>
                <dd class="message">
                  Stabielere en snellere harde schijf door automatisch overbodige bestanden te verwijderen en het register op te schonen.
                  <span>*Alleen Advanced SystemCare PRO!</span>
                </dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
          </div>
          <div class="db-box fl clearfix">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
            <div class="box fl">
              <h3><i></i> Snellere PC</h3>
              <dl>
                <dt><strong>Tot 200%* Sneller </strong></dt>
                <dd>Zorgt dat uw pc weer vloeiend en snel werkt.
                  <span>*Alleen Advanced SystemCare PRO!</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Snel Opstarten</strong></dt>
                <dd>Laat uw pc sneller opstarten en draaien met Defragmenteren bij Opstarten.
                  <span>*Alleen Smart Defrag PRO!</span>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- together end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Activeer Advanced SystemCare PRO Nu – Laatste Kans om in 2018 Flink te Besparen!</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  mensen kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  over!
            </p>
          </div>
          <p><strong><small>€</small>17<small>,</small></strong> <span>99 <del> €49,99</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=a12spin3pcnl&ref=nl_sd6pasc12rightcorner1799purchase1811b<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1812b-nl')">
            Activeer Nu
          </a>
          <p class="year">EXCLUSIEF voor Smart Defrag PRO gebruikers!</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Vergelijk Advanced SystemCare Free met de PRO versie</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Advanced SystemCare 12 <br>FREE</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>Advanced SystemCare 12 <b>PRO</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema"><i class="all-icons free">√</i></td>
              <td class="itemb">Basis opschoning, reparatie en optimalisatie </td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Blokkeer toegang tot uw privébestanden</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Voorkom spyware en malware in real time</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Voorkom en herstel crashes en foutmeldingen </td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Maak uw computer tot 200% sneller</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Maak uw internet tot 300% sneller</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Houd essentiële software automatisch up-to-date</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Verwijder automatisch privacysporen</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Update automatisch naar de laatste versie</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"></td>
              <td class="itemb"></td>
              <td class="itemc last"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>MIS HET NIET!</h3>
        <h2>Krijg exclusief   <b>65% KORTING</b> op een Schonere, Snellere en Veiligere PC!</h2>
        <div class="price">
          <p><strong><small>€</small>17<small>,</small></strong> <span>99 <del> €49,99</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=a12spin3pcnl&ref=nl_sd6pasc12rightcorner1799purchase1811c<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1812c-nl')">
           Activeer Nu
          </a>
          <p id="footdown" class="countdown">Wees er snel bij!  <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms  over</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Vertrouwd en bekroond door de volgende media</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
    <!-- review -->
    <div class="review">
      <div class="wrapper">
        <div id="dg-container" class="dg-container">
          <div class="nav">
            <span class="dg-prev"></span>
            <span class="dg-next"></span>
          </div>
          <div class="content dg-wrapper">
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""/></dt>
              <dd>
                <h2>Media recensie</h2>
                <p>"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
                <cite>Cnet</cite></dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt=""/></dt>
              <dd>
                <h2>Klantbeoordeling</h2>
                <p>"Als zovelen, ben ik begonnen met de gratis versie van ASC en heb ik uiteindelijk de PRO-versie gekocht. Dit programma zorgt ervoor dat mijn computer schoon en “bug free” blijft en het heeft me nog nooit teleurgesteld. Onlangs nam ik contact op met de klantenservice van Advanced SystemCare en kreeg ik al binnen twee dagen een antwoord op al mijn vragen. Ik vind service erg belangrijk en daarom wint ASC voor mij als het beste product met de beste service."</p>
                <cite>Bruce Ramsay</cite></dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank-Ewert"/></dt>
              <dd>
                <h2>Klantbeoordeling</h2>
                <p>"Net als de meeste mensen die ik ken, ben ik geen computer expert. Door de jaren heen heb ik al tig programma’s geprobeerd die allemaal beweren de beste te zijn. Die kunnen allemaal niet tippen aan de Advanced SystemCare PRO-bescherming die ik nu heb. Sinds de installatie van deze software, loopt mijn PC weer als nieuw. Dit programma overtreft alle verwachtingen, het is altijd up-to-date, en de graphics zijn ook erg gaaf! Bedankt voor dit geweldige programma!"</p>
                <cite>Hank Ewert</cite></dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles-R-Widick"/></dt>
              <dd>
                <h2>Klantbeoordeling</h2>
                <p>"Als ICT'er merk ik dat tijdens het repareren van computers, veel problemen worden opgelost door te scannen met ASC. Na de reparatie raad ik de klanten meestal het ASC PRO-pakket aan. Wie heeft er nog een technicus nodig als de klantenservice van Advanced SystemCare PRO, 24 uur per dag beschikbaar is. Dit is het beste product dat een thuisgebruiker kan kopen. Bedankt dat jullie mijn werk een stuk makkelijker maken!"</p>
                <cite>Charles R. Widick</cite></dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta-Harnarine"/></dt>
              <dd>
                <h2>Klantbeoordeling</h2>
                <p>"Dit programma is het beste programma dat ik ooit geprobeerd heb. Mijn computer loopt veel soepeler en sneller sinds ik ASC geïnstalleerd heb. Het ruimt onnodige en dubbele bestanden op, verwijdert lege mappen en ik gebruik het om bestanden te versnipperen. Het reinigt en defragmenteert het register en alle bestanden op mijn pc. Ik beveel dit programma aan iedereen aan. Het is niet duur en u krijgt gegarandeerd waar voor uw geld. Uw computer zal weer lopen als nieuw. U zult dit programma zonder enige twijfel geweldig vinden."</p>
                <cite>Loretta Harnarine</cite></dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- review end -->
    
    <div class="bottom"> 
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Probeer ZONDER RISICO – met onze 60 dagen niet-goed-geld-terug garantie</h4>
              <p>Door PRO te activeren zult u een schonere, snellere en veiligere pc krijgen voor een schappelijke prijs!</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Wij accepteren:</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>*Opmerkingen:</dt>
            <dd>- IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</dd>
            <dd>- Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop">top</div>
    <!-- backtotop end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=nl-asc121y3pc1999&ref=nl_sd6pasc12rightcorner1999purchase1811<?php echo $refStr;?>&refs=nl_purchase_asc&tw=-8";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1812-nl')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>