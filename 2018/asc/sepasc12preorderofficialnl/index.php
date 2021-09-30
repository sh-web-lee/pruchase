<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Pak deze kans om met hoge korting als eerste Advanced SystemCare 12 PRO te gebruiken!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
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
        <h1>Pak 70% Korting in de Voorverkoop</h1>
        <h3>Wees er snel bij! Slechts 500 beschikbaar, waarvan <span class="soldNum">453</span> verkocht</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                Alleen tijdens de voorverkoop: <del>€49,99</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <b class="reduceGift"><span class="packsNum">**</span></b> over!
                </li>
                <li id="bandown" class="countdown">Waarschijnlijk op in: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=nl-asc121y3pcs1499&ref=nl_asc12preorder1499officiala<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficiala-nl');"
                 data-text="Bestel Nu">
                <span>Bestel Nu</span>
              </a>
              <h5>1-jarig abonnement / 3 pc’s</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- intro start -->
    <div class="intro wrapper">
      <h2>Waarom koopt u Advanced SystemCare 12 PRO in de voorverkoop?</h2>
      <div class="top clearfix">
        <div class="fl">
          <h3>Probeer nieuwe functies eerder dan anderen</h3>
          <img src="<?php echo getStaticUrl('images/computer_01.png')?>" alt="Advanced SystemCare 12 PRO"/>
        </div>
        <div class="fr">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_01.png')?>" alt="Advanced SystemCare 12 PRO"/></dt>
            <dd>
              <h4>Privacy Schild</h4>
              <h5>Blokkeer ongewenste toegang tot uw bestanden en foto’s</h5>
              <p>
                Geeft een melding wanneer iemand toegang tot uw privébestanden en –foto’s probeert te krijgen en biedt de mogelijkheid om dit te blokkeren.
              </p>
              <span>Exclusieve pro functie</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_02.png')?>" alt=""/></dt>
            <dd>
              <h4>Digitale Vingerafdruk Opschonen</h4>
              <h5>Niemand kan uw online activiteiten volgen</h5>
              <p>
                Voorkom dat mensen of bedrijven meekijken met wat u online leest, bekijkt en koopt door uw digitale vingerafdruk te verbergen.
              </p>
              <span>Exclusieve pro functie</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_03.png')?>" alt=""/></dt>
            <dd>
              <h4>Anti-Cryptomunt Mining</h4>
              <h5>Voorkom crashes, oververhitting en plotseling afsluiten</h5>
              <p>
                Blokkeer schadelijke websites die uw computer gebruiken om cryptomunten te minen wat browser crashes, oververhitting en plotseling afsluiten kan veroorzaken.
              </p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="bot clearfix">
        <div class="fl">
          <h3>Profiteer zo snel mogelijk van verbeterde functies</h3>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_04.png')?>" alt=""/></dt>
            <dd>
              <h4>Opschonen en Optimaliseren</h4>
              <h5>Maak uw computer tot 200% sneller</h5>
              <p>
                Schoon alle nutteloze bestanden op en optimaliseer CPU en RAM om het systeem twee keer sneller te laten draaien en opstarten.
              </p>
              <span>Exclusieve pro functie</span>
            </dd>
          </dl>
          <dl class="last">
            <dt><img src="<?php echo getStaticUrl('images/intro_05.png')?>" alt=""/></dt>
            <dd>
              <h4>Internet Boost</h4>
              <h5>Versnel uw internetverbinding met tot 300%</h5>
              <p>
                Optimaliseer browserinstellingen om 3 keer sneller te downloaden, surfen, gamen en YouTube video’s te kijken.
              </p>
              <span>Exclusieve pro functie</span>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <img src="<?php echo getStaticUrl('images/computer_02.png')?>" alt=""/>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Los uw frustrerende pc-problemen in 1 klik op</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema"><span class="cry">Probleem</span></th>
              <th class="itemb"></th>
              <th class="itemc"><span class="smile">Oplossing</span></th>
            </tr>
          </thead>
          <tbody>
            <tr class="first">
              <td class="itema">
                <p>Meldingen zoals: “Er is onvoldoende schijfruimte op lokale schijf (C:) beschikbaar”</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Scan automatisch en verwijder nutteloze bestanden om schijfruimte vrij te maken</p>
                <b><i class="all-icons">■</i> Exclusieve pro functie</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Systeem start en draait langzaam</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Maak automatisch geheugen vrij om uw pc tot 200%  sneller te laten werken</p>
                <b><i class="all-icons">■</i> Exclusieve pro functie</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Langzame downloads, browser, online games en YouTube video’s</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Optimaliseer browserinstellingen om de internetverbinding tot 300% sneller te maken </p>
                <b><i class="all-icons">■</i> Exclusieve pro functie</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Pagina’s die bevriezen of plostelinge uitschakeling van het systeem  </p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Verschoon en repareer het register om het systeem stabieler en veiliger te maken</p>
                <b><i class="all-icons">■</i> Exclusieve pro functie</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Advertenties voor iets waar je naar gezocht hebt, blijven je online achtervolgen</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Blokkeer automatisch advertenties en schoon uw online sporen op zodat u niet gevolgd kunt worden</p>
                <b><i class="all-icons">■</i> Exclusieve pro functie</b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- ad-points start -->
    <div class="ad-points wrapper">
      <h2>Wat doen wij voor onze gebruikers?</h2>
      <ul class="clearfix">
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_01.png')?>" alt=""/></div>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num01.png')?>" alt=""/></div>
          <p>pc-problemen per maand <span>oplossen</span></p>
        </li>
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_02.png')?>" alt=""/></div>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num02.png')?>" alt=""/></div>
          <p>uur werk per maand <br><span>besparen</span></p>
        </li>
        <li class="last">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_03.png')?>" alt=""/></div>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num03.png')?>" alt=""/></div>
          <p>miljard per jaar <br><span>besparen</span></p>
        </li>
      </ul>
    </div>
    <!-- ad-points end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Pak deze hoge korting en maak uw pc sneller, schoner en veiliger</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=nl-asc121y3pcs1499&ref=nl_asc12preorder1499officialb<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialb-nl');"
           data-text="Bestel nu met 70% korting">
          <span>Bestel nu met 70% korting</span>
        </a>
        <p>
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <b class="reduceGift"><span class="packsNum">**</span></b> over!
        </p>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
            <dd>
              <h2>Media recensie</h2>
              <p>"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Als zovelen, ben ik begonnen met de gratis versie van ASC en heb ik uiteindelijk de PRO-versie gekocht. Dit programma zorgt ervoor dat mijn computer schoon en “bug free” blijft en het heeft me nog nooit teleurgesteld. Onlangs nam ik contact op met de klantenservice van Advanced SystemCare en kreeg ik al binnen twee dagen een antwoord op al mijn vragen. Ik vind service erg belangrijk en daarom wint ASC voor mij als het beste product met de beste service."</p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Net als de meeste mensen die ik ken, ben ik geen computer expert. Door de jaren heen heb ik al tig programma’s geprobeerd die allemaal beweren de beste te zijn. Die kunnen allemaal niet tippen aan de Advanced SystemCare PRO-bescherming die ik nu heb. Sinds de installatie van deze software, loopt mijn PC weer als nieuw. Dit programma overtreft alle verwachtingen, het is altijd up-to-date, en de graphics zijn ook erg gaaf! Bedankt voor dit geweldige programma!"</p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Dit programma is het beste programma dat ik ooit geprobeerd heb. Mijn computer loopt veel soepeler en sneller sinds ik ASC geïnstalleerd heb. Het ruimt onnodige en dubbele bestanden op, verwijdert lege mappen en ik gebruik het om bestanden te versnipperen. Het reinigt en defragmenteert het register en alle bestanden op mijn pc. Ik beveel dit programma aan iedereen aan. Het is niet duur en u krijgt gegarandeerd waar voor uw geld. Uw computer zal weer lopen als nieuw. U zult dit programma zonder enige twijfel geweldig vinden."</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Klantbeoordeling</h2>
              <p>"Als ICT'er merk ik dat tijdens het repareren van computers, veel problemen worden opgelost door te scannen met ASC. Na de reparatie raad ik de klanten meestal het ASC PRO-pakket aan. Wie heeft er nog een technicus nodig als de klantenservice van Advanced SystemCare PRO, 24 uur per dag beschikbaar is. Dit is het beste product dat een thuisgebruiker kan kopen. Bedankt dat jullie mijn werk een stuk makkelijker maken!"</p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Vertrouwd en bekroond door de volgende media</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Garantie</h4>
              <p>60 Dagen niet goed geld terug garantie</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
            <dd>
              <h4>Website beveiliging</h4>
              <p>Alle websites van IObit zijn beveiligd</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt=""/></dt>
            <dd>
              <h4>Directe Levering</h4>
              <p>U ontvangt de licentie binnen enkele minuten na bestelling.</p>
            </dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dd>U kunt direct na de bestelling aan de slag met de RC versie van Advanced SystemCare 12 PRO. Deze versie bevat vrijwel alle functies van Advanced SystemCare 12. </dd>
            <dd>Bij de officiële lancering van Advanced SystemCare 12 laten we u weten dat u kunt updaten naar de definitieve versie.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt=""/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> mensen kijken, slechts <b class="reduceGift"><span class="packsNum">**</span></b> over!
            </li>
            <li id="floatdown" class="countdown">Waarschijnlijk op in: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
          <p><b>70% Korting</b> alleen tijdens de voorverkoop!</p>
        </div>
        <a class="buybtn fr" 
           href="https://www.iobit.com/buy.php?product=nl-asc121y3pcs1499&ref=nl_asc12preorder1499officialc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialc-nl');"
           data-text="Bestel Nu">
          <span>Bestel Nu</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->

  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialpop-nl');";
    var _url = "https://www.iobit.com/buy.php?product=nl-asc12preorderpopup1799&ref=nl_asc12preorderofficialpopup1799<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_asc";
  </script>

</body>
</html>