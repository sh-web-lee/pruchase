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
  $c_name = 'nlascexd_p' . $date;
  $c_name_t='nlascexd_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);

function paramDeal($num,$decimals,$separate=',',$decimal='.'){
  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
}

$params=json_decode(base64_decode($_GET['data']));
$fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,'.',',');
$fileSizeUnit='GB';
if($fileSizeShow<=1){
  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,'.',',');
  $fileSizeUnit='MB';
}
$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
$paramPri=paramDeal($params->privacy,0,'.',',');
$paramPro=paramDeal($params->program,0,'.',',');
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% Korting op het Nieuwe Advanced SystemCare 13 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Maak uw trage pc tot 200%* sneller</h3>
      <dl>
        <dt class="price">
          <strong>€<b>14</b>,99</strong>
          <a href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderexpired1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-nl');"
             class="buybtn">
            <span>Bestel Nu</span>
          </a>
        </dt>
        <dd class="number">
          SLECHTS
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          OVER. <span><span class="viewNum"><?php echo $viewNum;?></span> KIJKEN NU.</span>
        </dd>
      </dl>
    </div>
    <span class="arrow"></span>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Wat Heeft Advanced SystemCare PRO voor U Gedaan?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        <div class="scan">SCAN</div>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span><b>XX</b> schijfruimte vrijgemaakt</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span><b>XX</b> privacysporen gewist</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span><b>200%</b> sneller uw pc opgestart</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span><b>300%</b> hogere internetsnelheden behaald</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span><b>XX</b> <?php echo empty($paramPro)?'':'keer';?> toegangspogingen tot gevoelige gegevens geblokkeerd</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>Nu Uw Advanced SystemCare PRO Verlopen Is,</h3>
      <h2> Profiteert U <b>Niet Meer</b> Van:</h2>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span>Grondige registeropschoning om systeemfouten op te lossen</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Automatische RAM-opschoning om uw pc soepel te laten draaien</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Sneller Opstarten en Internetten</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Bescherming van uw persoonlijke gegevens</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Realtime bescherming tegen malware-infecties</span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Krijg alle Nuttige PRO functies terug,<br> inclusief deze nieuwe:</h2>
    <div class="clearfix">
      <dl class="blue">
        <dt><img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>4GB</h3>
          <p>Schoon <b>4GB* meer</b> overbodige bestanden op</p>
        </dd>
      </dl>
      <dl class="purple">
        <dt><img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>200+</h3>
          <p>Wis persoonlijke sporen van <b>200+</b> programma’s en <b>15</b> browsers voor alle gebruikersaccounts</p>
        </dd>
      </dl>
      <dl class="green">
        <dt><img src="<?php echo getStaticUrl('images/f-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>e-mail</h3>
          <p>Bescherm <b>e-mail</b> tegen verscheidene bedreigingen</p>
        </dd>
      </dl>
      <dl class="orange">
        <dt><img src="<?php echo getStaticUrl('images/f-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>60%</h3>
          <p><b>60%</b> meer software kan in 1 klik bijgewerkt worden</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Wat Wij Doen Voor Onze Gebruikers</h2>
    <div class="present clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons01.png')?>" alt=""/></dt>
        <dd>Problemen <br> oplossen voor  <h4 class="first">00.000.000</h4> gebruikers</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/p-icons02.png')?>" alt=""/></dt>
        <dd><h4 class="two">0.000.000</h4> uur per maand besparen</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons03.png')?>" alt=""/></dt>
        <dd><h4>$1,18 miljard</h4> per jaar besparen</dd>
      </dl>
    </div>

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
    <dl class="wrapper">
      <dd>
        Opmerking:
      </dd>
      <dd>* Advanced SystemCare 13 PRO is getest in ons interne test lab. Resultaten kunnen afwijken.</dd>
      <dd>* U kunt direct na de bestelling aan de slag met de RC versie van Advanced SystemCare 13 PRO. Bij de officiële lancering van Advanced SystemCare 13, laten we u weten dat u kunt updaten naar de definitieve versie.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
  </div>
  <!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      SLECHTS
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      OVER. <span><span class="viewNum"><?php echo $viewNum;?></span>  KIJKEN. </span>
    </div>
    <div class="price">
      <strong>€<b>14</b>,99</strong>
      <a href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderexpired1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-nl');"
         class="buybtn">
        <span>Bestel Nu</span>
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>
    $(".intro .wrapper .right b").eq(0).html("<?php echo $paramJunk?>").end().eq(1).html("<?php echo $paramPri?>").end().
      eq(4).html("<?php echo $paramPro;?>");
  </script>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>