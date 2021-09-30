<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'nliulaun_p' . $date;
  $c_name_t='nliulaun_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);

$paramPct=$_GET['pct'];
$tagShow=true;
if(!empty($paramPct)){
  $refStr.='-'.$paramPct;
  if($paramPct==2){
    $tagShow=false;
  }
}

$transData=json_decode(base64_decode($_GET['data']));
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>75% Korting op IObit Uninstaller PRO met Gratis Cadeau - IObit </title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
      <!-- logo -->
			<a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
      <!-- title -->
			<h1> Lanceringsaanbieding exclusief voor trouwe gebruikers </h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" class="iu-box" alt="IObit Uninstaller PRO"/>
          <img src="<?php echo getStaticUrl('images/ghost.png')?>" class="ghost"/>
          <span class="disappear"></span>
				</div>
        <!-- right-message -->
				<div class="right fr">
          <div class="message">
            <h2>Upgrade Naar Het Nieuwe IObit Uninstaller 11 PRO</h2>
            <div class="number">
              <span>En Krijg een Gratis Cadeau. Slechts </span>
              <div id="reduce" class="reduceNum">
                <div class="listbox"><span class="list"><b>0</b></span></div>
                <div class="listbox"><span class="list"><b>0</b></span></div>
              </div>
              <span>over  </span>
            </div>
            <p><img src="<?php echo getStaticUrl('images/people.png')?>"> <strong class="viewNum"><?php echo $viewNum;?></strong> mensen bekijken deze deal</p>
          </div>
          <dl class="price">
            <dt><strong><small>€</small><b>15</b>,99</strong> <del>€69,94</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=nl-iu113pcpf1599&ref=nl_iu3pcpf1599purchaselaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_iu"
                   onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-newlaunch-nl');"
                   class="buybtn">Activeer Nu</a></dd>
          </dl>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
  <div class="intro">
    <div class="wrapper">
      <h2>Het Nieuwe IObit Uninstaller 11 PRO Doet Meer Voor U <span></span></h2>
      <div class="message clearfix">
        <h3>1. Naast Ongewenste Programma’s, Verwijdert U Deze Probleemgevallen:</h3>
        <img src="<?php echo getStaticUrl('images/intro-message.png')?>" class="img-box" alt="" / >
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>"></dt>
          <dd>
            <strong>Hardnekkige programma’s </strong>die niet verwijderd kunnen worden met de standaard deïnstallatie.
            
          </dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>"></dt>
          <dd>
            <strong>Gebundelde programma’s </strong>die schijfruimte innemen zonder dat u het doorheeft.
            <?php if($tagShow):?><span>Verbeterd</span><?php endif;?>
          </dd>
        </dl>
        <div class="clear"></div>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>"></dt>
          <dd>
            <strong>Schadelijke browserextensies </strong>die uw persoonlijke gegevens proberen te stelen en uw pc in gevaar brengen.
            <?php if($tagShow):?><span>Verbeterd</span><?php endif;?>
          </dd>
        </dl>
        <dl class="right last">
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>"></dt>
          <dd>
            <strong>Storende pop-ups </strong> en meldingen in uw browser en Windows Apps.
            <?php if($tagShow):?><span> Nieuw</span><?php endif;?>
          </dd>
        </dl>
      </div>
      <div class="message2 clearfix">
        <h3>2. Naast Achtergebleven Bestanden, <br> Wist U Meer Overbodige Gegevens </h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
          <dd><strong>Detecteer en verwijder automatisch </strong></dd>
          <dd>restanten van programma’s die verwijderd zijn voordat u IObit Uninstaller PRO gebruikte.</dd>
          <dd><span>alleen bij IObit</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
          <dd><strong>Schoon Automatisch</strong></dd>
          <dd>nutteloze gegevens op van programma’s die met de standaard Windows deïnstallatie of andere uninstallers zijn verwijderd.</dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
          <dd><strong>Herstel Automatisch systeemwijzigingen</strong></dd>
          <dd>die programma’s  die u deïnstalleert hebben aangebracht.</dd>
          <dd><span>alleen bij IObit</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="intro2">
    <div class="wrapper">
      <h3>3. En Er Zijn Nog Meer Voordelen Die U Niet Wilt Missen</h3>
      <img src="<?php echo getStaticUrl('images/intro2-message.png')?>" class="img-box"> 
      <ul>
        <li>Update alle verouderde programma’s in 1 klik;</li>
        <li>Verwijder automatisch restbestanden na deïnstallatie;</li>
        <li>Verwijder ongewenste Windows apps;</li>
        <li>Update automatisch zodra de nieuwe versie beschikbaar is;</li>
        <li>Premium 24/7 technische ondersteuning;</li>
      </ul>
    </div>
  </div>
  <div class="gift-message">
    <div class="wrapper clearfix">
      <h2>Een Gratis Cadeau Als Bedankje Voor Onze Trouwe Gebruikers</h2>
      <div class="gift clearfix">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
        <dl>
          <dt>
            <strong>€0</strong> <del>€39,95</del> <br>
            <span>1 Jaar / 1 pc</span>
          </dt>
          <dd>· Vergrendel uw belangrijke mappen met een wachtwoord <br> · Voorkom dat uw gegevens gestolen of bekeken worden</dd>
        </dl>
      </div>
    </div>
  </div>
	<!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Wat Vinden Anderen?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>Media recensie</h3>
              <p>"Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen."</p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A. Watts"/></dt>
            <dd>
              <h3>Klantbeoordeling</h3>
              <p>
                Ik gebruik de IObit programma’s al jaren en ben er erg tevreden mee. Daarom blijf ik trouw IObit producten gebruiken. Vroeger hielp ik mensen met het oplossen van computer- en Android telefoonproblemen, ik installeerde altijd IObit programma’s op de apparaten en vroeg ze regelmatig hun apparaten te scannen zodat hun laptop/computer/mobiel weer gerepareerd en snel werd! :) Ik beveel de uninstaller (inclusief de laatste beta versie) ten sterkste aan als veilig en betrouwbaar programma dat hardnekkige programma’s verwijdert! En belangrijker, het verwijdert verborgen codes die softwareontwikkelaars expres achterlaten om schimmige software opnieuw te installeren! Alle IObit producten zijn veilig en gemakkelijk in gebruik. Top software!
              </p>
              <h4>Jeff A. Watts</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>Klantbeoordeling</h3>
              <p>
                Ik vind IObit Uninstaller super om te gebruiken, omdat het alles heeft wat je maar kan wensen. Ik vind het fijn dat het alle restanten verwijdert. Het heeft ook een software updater die je waarschuwt als software op je computer een update nodig heeft. Dat het meerdere programma’s tegelijk kan verwijderen maakt het echt een topper! Het is eigenlijk precies wat je nodig hebt om je computer in goede conditie te houden.
              </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>Klantbeoordeling</h3>
              <p>
                IObit Uninstaller is de beste software om programma’s van een computer te verwijderen, het is snel en zeer effectief. De prestaties zijn vele malen beter dan de normale uninstaller van Windows, dit programma schoont echt alle restanten van programma’s op zodat de computer niet trager wordt. Ik heb het een paar maanden gebruikt en weet nu al niet meer wat ik zonder zou moeten. Ik adviseer al mijn vrienden en familie IObit Uninstaller te gebruiken.
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
            <dd>
              <h3>Klantbeoordeling</h3>
              <p>"IObit Uninstaller wordt beter met elke update. Ik gebruik het programma al meer dan 3 jaar. Het programma laadt snel en is simpel in het gebruik. De functies die ik het meeste gebruik zijn Gezamenlijk Verwijderen, Krachtige Scan, Bestand Versnipperaar en laatst geïnstalleerde programma’s zodat ik snel kan zien welke van die programma’s ik prettig vind en welke niet. Je kunt ook gemakkelijk de opstartprogramma’s beheren waardoor de pc sneller opstart."</p>
              <h4>Lovro Žužić</h4>
            </dd>
          </dl>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next">></span>
    </div>
  </div>
	<!-- review end -->

  <!-- service start -->
	<div class="awards">
		<div class="wrapper">
			<h2>Wereldwijde Awards</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h4>Probeer ZONDER RISICO – <br> met onze 60 dagen niet-goed-geld-terug garantie</h4>
            <p>
              Door PRO te activeren zullen al uw ongewenste programma’s snel en soepel verwijderd worden!
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Wij accepteren:</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
        </dl>
      </div>
			<dl class="annotation">
				<dt>Let op:</dt>
				<dd>
          * De gegevens kunnen variëren op basis van verschillende systemen en computers.
				</dd>
        <dd>
          *Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken
        </dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl"> 
        <img src="<?php echo getStaticUrl('images/fl-ghost.png')?>" class="ghost"/>
        <span class="disappear"></span>
        </div>
      <div class="message">
        <div class="number">
          <span>Wees er snel bij, slechts </span>
          <div id="fReduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <span> Cadeaus over  </span>
        </div>
        <p><strong class="viewNum"><?php echo $viewNum;?></strong> mensen bekijken deze deal</p>
      </div>
      <div class="price">
        <a href="https://www.iobit.com/buy.php?product=nl-iu113pcpf1599&ref=nl_iu3pcpf1599purchaselaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase-newlaunch-nl');" class="buybtn">Claim Gratis Cadeau </a>
      </div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>
  refStr = "<?php echo $refStr;?>";
  iuImg = "<?php echo getStaticUrl('images/iu-box-soldout.png')?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>