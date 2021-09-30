<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'enascnovbrb_p' . $date;
  $c_name_t='enascnovbrb_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}

$refStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Black Friday Sale: De Allerlaagste Prijs van het Jaar voor Advanced SystemCare PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <div class="title clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <b class="only">Only Today</b>
        <h1>Black Friday Sale</h1>
        <h5>De Allerlaagste Prijs van het Jaar!</h5>
        <div class="discount">70% OFF</div>
      </div>
    </div>
    <div class="chart">
      <div class="chartbox one"><span>Normaal <b>€49,99</b></span></div>
      <div class="chartbox big two"><span>Halloween <b>€19,99</b></span></div>
      <div class="chartbox center three"><span>Black Friday<b class="change-price">€<big>14</big>,99</b></span></div>
      <div class="chartbox big four"><span>Kerst<b>€19,99</b></span></div>
      <div class="chartbox five"><span>Normaal<b>€49,99</b></span></div>
    </div>
    <div class="price clearfix">
      <div class="numbox">
        Wees er snel bij, slechts
        <div id="flip" class="flipNum">
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>5</b></span></div>
          <div class="listbox last"><span class="list"><b>0</b></span></div>
        </div>
        over!
      </div>
      <div class="btnbox">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-asc131y3pc1499&ref=nl_asc133pcblackfriday1499purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascblackfriday1499-nl')">
          Activeer Nu
        </a>
        <p>1-jarig abonnement / 3 pc’s</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <h2>Met Advanced SystemCare PRO heeft u…</h2>
  <div class="wrapper intro-box">
    <div class="intro-img">
      <div class="intro-list one">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <div class="gray"></div>
        <span class="loading">Loading...</span>
        <div class="scanbox">
          <div class="scan">
            <div class="circleprogress-content">
              <div class="circle right">
                <div class="circleprogress rightcircle"></div>
              </div>
              <div class="circle left">
                <div class="circleprogress leftcircle"></div>
              </div>
            </div>
          </div>
        </div>
        <div class="percent">
          <span class="change-num">50</span>
          <span class="completed"></span>
          <div class="circletwo">
            <div class="bottom-circle"></div>
            <div class="top-circle"></div>
          </div>
        </div>
        <div class="rocket"></div>
        <div class="safebox">
          <img src="<?php echo getStaticUrl('images/screen04.png')?>" alt=""/>
          <div class="privacy">
            <span class="icon"></span>
            <span class="shield">Privacy Schild</span>
            <div class="check"></div>
            <span class="text">1 verborgen toegang</span>
          </div>
          <div class="privacy-right">
            <img src="<?php echo getStaticUrl('images/privacy-right.png')?>" alt=""/>
          </div>
          <div class="shield-img"></div>
        </div>
      </div>
    </div>
    <div class="intro-txt">
      <div class="slow">
        <h3><span>Een trage pc</span></h3>
        <p>
          <span class="one">last van opgehoopte overbodige bestan</span>
          <span class="two">den, systeemfouten,</span>
          <span class="three">crashes en privacyschending</span>
        </p>
      </div>
      <div class="fast">
        <h3>Een snelle pc</h3>
        <p>razendsnel systeem en internet, en complete privacybescherming.</p>
        <div class="fast-list">
          <div class="one">
            <dl>
              <dt><b>200%* Snellere PC</b></dt>
              <dd>Ruimt onnodige bestanden op en optimaliseert CPU en RAM zodat uw systeem tot 200% sneller wordt dan met de gratis versie.</dd>
            </dl>
            <dl>
              <dt><b>300%* Sneller Internet</b></dt>
              <dd>Downloads, online games, internetpagina’s en YouTube video’s worden tot 300% sneller dan met de gratis versie.</dd>
            </dl>
          </div>
          <div class="two">
            <dl>
              <dt><b>Privacy Schild</b></dt>
              <dd>Blokkeer ongewenste toegang tot uw <br> gevoelige gegevens zoals contacten, <br> e-mails en  Dropbox.</dd>
            </dl>
            <dl>
              <dt><b>Veilig Browsen</b></dt>
              <dd>Wis automatisch surfsporen zodat niemand <br> meekijkt naar wat u leest, bekijkt en koopt.</dd>
            </dl>
          </div>
          <span class="line"><span class="red"></span></span>
        </div>
      </div>
    </div>
  </div>
  <span class="intro-bg"></span>
</div>
<!-- intro end -->

<!-- comparison start -->
<div class="comparison wrapper" id="compare">
  <h2 class="">Welke functies krijgt u?</h2>
  <table>
    <thead>
    <tr>
      <th class="text"></th>
      <th class="itema">
        <div class="free">Uw huidige versie</div>
      </th>
      <th class="itemb">
        <div class="pro">Advanced SystemCare <big>PRO</big></div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="virtue">Basis opschoning, reparatie en optimalisatie van het systeem</td>
      <td class="itema"><i class="all-icons black">√</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Maak uw computer tot wel 200% sneller</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Versnel uw internet met tot wel 300%</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Blokkeer ongewenste toegang tot uw privébestanden</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Verwijder automatisch privacysporen om veilig te browsen</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Voorkom spyware en malware in real time</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Voorkom en herstel crashes en systeemfouten</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Update essentiële programma’s in één klik</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Update automatisch naar de laatste versie</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th></th>
      <th class="itema"></th>
      <th class="itemb"></th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- feature start -->
<div id="feature" class="feature">
  <div class="wrapper">
    <h2>Activeer Nu alle functies voor de allerlaagste prijs van het jaar!</h2>
    <div class="price">
      <p><strong class="change-price">€<big>14</big>,99</strong> <del>€49,99</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=nl-asc131y3pc1499&ref=nl_asc133pcblackfriday1499purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascblackfriday1499-nl')">
        Activeer Nu
      </a>
      <p>1-jarig abonnement / 3 pc’s</p>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
  <div class="wrapper">
    <h2>Wat vinden anderen?</h2>
    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Media recensie</span></h2></dt>
            <dd>
              <p class="on">"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>“Ik heb over de jaren verschillende programma’s geprobeerd die computers probleemloos zouden doen werken. Een paar jaar geleden ben ik bij ASC uitgekomen, in eerste instantie de gratis versie. Toen ik merkte dat ik eindelijk van alle computerproblemen en ergernissen af was, ben ik naar de betaalde versie overgestapt en hoef ik er niet meer naar om te kijken. Advanced SystemCare Pro is de enige die ik anderen zou aanbevelen, gebaseerd op mijn ervaring. Ik gebruik ook IObit Uninstaller, Smart Defrag en Driver Booster, dat maakt het nog gemakkelijker.”</p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>“Advanced System Care is een geweldig programma.  Ik gebruik het al jaren en het werkt fantastisch. Ze verbeteren hun producten continu en het wordt alleen maar beter over de jaren. Ik gebruik meerdere IObit producten en ze werken allemaal volledig naar behoren.”</p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>“Ik heb Advanced SystemCare 12 en de 13 beta, gedownload en uitgebreid getest (win 7). De uitstraling is mooi en overzichtelijk. De nieuwe functies zijn super.”</p>
              <cite>R.E.J Visschers-Bernabela </cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Klantbeoordeling</span></h2></dt>
            <dd>
              <p>“Nr. 13 is mijn geluksgetal! Met Systemcare brengt Iobit niet slechts een vage update van versie12 uit, die net klaar is voor SSD. De architecture van SSD schijven gaf ruimte voor een nieuwe benadering in onderhoud en beveiliging met minder benodigde prestatietijd, terwijl ook HDD nog steeds aan zijn trekken komt. Natuurlijk kost het zoeken naar bestandsrestanten relatief meer tijd in vergelijk tot andere taken, want de fysieke C: schijf moet geheel uitgelezen worden, maar dan toch... En mijn favoriete tool aller-tijden de Ontbrekende Updates en Systeem Zwakheden Zoek-tool was echt heel alert, alleen daarom al adviseer ik alle vrienden die ik help altijd Iobit Sytemcare. Met versie 13 was het alsof ik een oude vriend terug ontmoette met een enthousisme net als toen ik ooit begon met Iobit Systemcare nr. 5. Welkom Iobit Sytemcare 13!”</p>
              <cite>Siegfried van Hoek </cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="two" data-num="3"><img src="<?php echo getStaticUrl('images/rej-visschers-bernabela.png')?>" alt="R.E.J Visschers-Bernabela "></li>
          <li class="three" data-num="4"><img src="<?php echo getStaticUrl('images/siegfried-van-hoek.png')?>" alt="Siegfried van Hoek "></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Wereldwijde Awards</h2>
    <p>
      Dankzij het vertrouwen en de prijzen die wij de afgelopen 12 jaar hebben ontvangen van deze vooraanstaande media, weet u dat u de juiste optimaliseersoftware heeft.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <div class="service">
      <dl class="left fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h3>Probeer ZONDER RISICO – met onze 60 dagen <br> niet-goed-geld-teruggarantie</h3>
          <p>
            Door PRO te activeren krijgt u een schonere, snellere en veiligere pc, voor een schappelijke prijs.
          </p>
        </dd>
      </dl>
      <dl class="right fr">
        <dt><h3>Wij accepteren</h3></dt>
        <dd>
          <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
        </dd>
      </dl>
    </div>
    <dl>
      <dt>*Opmerkingen:</dt>
      <dd>Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.</dd>
      <dd>
        IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
  </div>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
      <div class="discount">70% OFF</div>
    </div>
    <div class="numbox fl">
      <div id="fliptwo" class="flipNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox last"><span class="list"><b>0</b></span></div>
      </div>
      <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> mensen kijken, slechts <b class="packsNum">50</b>over</p>
    </div>
    <div class="price fl">
      <strong class="change-price">€14,99</strong> <del>€49,99</del>
      <p>1 jaar / 3 pc’s</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=nl-asc131y3pc1499&ref=nl_asc133pcblackfriday1499purchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascblackfriday1499-nl')">
      Activeer Nu
    </a>
  </div>
</div>
<!-- floatlayer end -->
<script>packsNum=<?php echo $packsNum;?>;</script>
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>