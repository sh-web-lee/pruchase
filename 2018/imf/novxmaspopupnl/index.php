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
  $cName='nlimfpre'.$date;
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

$viewNum=rand(80,100);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>86% Kerstkorting op IObit Malware Fighter PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Speciale Kerstaanbieding</h1>
        <p class="best">De ideale kans om flink te besparen – Slechts eens per jaar!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
          </div>
          <div class="right fr">
            <h2>IObit Malware Fighter 6 PRO</h2>
            <h3>Complete online beveiliging voor u en uw familie.</h3>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  mensen kijken, slechts   <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  over
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Wees er snel bij! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Over</p>
              </div>
              <p><strong><big>€</big>19<big></big></strong> <span><del>€139,93</del>99</span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-imf6amcpf1999&ref=nl_imf6rightcorner1999purchase1811a<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxrpurchase1811a-nl')">
                 Activeer Nu
              </a>
              <p class="year"> 1-jarig abonnement / 3 PC’s</p>
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
        <h2>Volledige Online Beveiliging om Hackers en Malware weg te houden  </h2>
        <p class="over">
         Meer dan 5.500.000 gebruikers wereldwijd kiezen IObit Malware Fighter PRO als hun online beveiliging tegen virussen, ransomware, spyware, Trojans, adware, phishing en andere schadelijke malware. 
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/imf-screen.png')?>" alt="IObit Malware Fighter PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Dubbele Bescherming  <b> Verbeterd </b></h3>
                <p>
                 Dubbele bescherming met de geavanceerde Bitdefender Anti-virus Engine & de IObit Anti-Malware Engine.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>MBR Guard  <b  class="sign">Nieuw</b></h3>
                <p>Voorkomt aanvallen, van met name ransomware, tijdens het opstarten.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Geen Ransomware Aanvallen <b> Verbeterd</b></h3>
                <p>De Anti-ransomware Engine stopt actief alle Ransomware die uw pc binnen probeert te komen, zoals Petya/GoldenEye.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Realtime Bescherming <b> Verbeterd</b></h3>
                <p>Blokkeer & verwijder automatisch meer dan 200 miljoen bedreigingen in real time en wis schadelijke tracking data.</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- donation start -->
    <div class="donation clearfix">
      <h2>Alleen nu met twee gratis Kerstcadeaus</h2>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h3>Protected Folder <br>  <strong>€0</strong> <del>€39,95</del></h3>
          <p>Bescherm uw belangrijke mappen en bestanden met een wachtwoord zodat hackers en gebruikers van uw pc <br> er niet bij kunnen.</p>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="AMC"/></dt>
        <dd>
          <h3> AMC Security <br> <strong>€0</strong> <del>€19,99</del></h3>
          <p>Bescherm uw mobiele apparaat tegen malware en privacyschending & ruim bestanden op voor een snel apparaat.</p>
        </dd>
      </dl>
    </div>
    <!-- donation end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Adquira a versão Pro para uma proteção online completa e inteligente</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/imf-small-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> over!
            </p>
          </div>
          <p><strong><big>€</big>19<big></big></strong> <span><del>€139,93</del>99</span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-imf6amcpf1999&ref=nl_imf6rightcorner1999purchase1811b<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxrpurchase1811b-nl')">
            Activeer Nu
          </a>
          <p class="year"> 1-jarig abonnement / 3 PC’s</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Wat u precies krijgt als u nu activeert:</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">IObit Malware Fighter <br>Free</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>IObit Malware Fighter <b>Pro</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">Basis</td>
              <td class="itemb">Malware & Virus Bescherming</td>
              <td class="itemc">Bitdefender Anti-virus Engine</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Bescherming tegen Ransomware</td>
              <td class="itemc">Anti-ransomware Engine</td>
            </tr>
            <tr>
              <td class="itema">Basis</td>
              <td class="itemb">Realtime Bescherming</td>
              <td class="itemc">Volledig</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">MBR guard voor tijdens het opstarten</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Camerabescherming</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Bescherming van belangrijke mappen</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Automatisch surfsporen wissen</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">USB Schijfbescherming</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Bedreigingen detecteren o.b.v. verdacht gedrag</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">Automatisch Updaten</td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
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
        <h2>Krijg alleen nu 86% KORTING op volledige bescherming voor u en uw familie.</h2>
        <div class="price">
          <p><strong><big>€</big>19<big></big></strong> <span><del>€139,93</del>99</span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-imf6amcpf1999&ref=nl_imf6rightcorner1999purchase1811c<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfxrpurchase1811c-nl')">
            Activeer Nu
          </a>
          <p id="footdown" class="countdown">Wees er snel bij! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Over</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></dt>
            <dd>
              <h2>Media recensie</h2>
              <p>"Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren." </p>
              <cite>Software Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."</p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!”</p>
              <cite>Bob Bassett</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden."</p>
              <cite>Peter Stoffers</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Vertrouwd en bekroond door de volgende media</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Probeer ZONDER RISICO – met onze 60 dagen niet-goed-geld-terug garantie</h4>
              <p>Door PRO te activeren zult u beschermd worden tegen alle malware voor een schappelijke prijs.</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Wij accepteren: </h4>
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
    var imgSrc = "<?php echo getStaticUrl('images/imf-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=nl-imf6amcpf1899&ref=nl_imf6rightcorner1899purchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf&tw=-8";
    var _ga = "ga('send', 'event', 'imfbuy', 'buy', 'imfxrpurchase1811-nl')  ";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>