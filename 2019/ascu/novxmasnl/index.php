<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;
$buyNum = number_format($buyNum);

$packsNum = ceil(microtime_float()*2000/20000);
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
	echo $packsNum;
	exit;
}
$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
		'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
	$refStr.='-'.$_GET['st'];
}

?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title> Gelukkig Nieuwjaar! 75% korting op Advanced SystemCare Ultimate - IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script type="text/javascript">
	  function getPacksNum(){
	    $.ajax({
	      type: "GET",
	      url: "<?php echo $pRootUrl;?>callback.php",
	      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
	      success: function(packs){
	        $('.packsNum').html(packs);
	        setTimeout('getPacksNum()', 10000);
	      }
	    });
	  }
	  setTimeout('getPacksNum()', 10000);
	</script>
</head>
<body>
	<div class="banner">
		<div class="snow"></div>
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/nl/" target="_blank" class="logo">IObit</a>
			<h1>Gelukkig Nieuwjaar!</h1>
			<h2>Deze aanbieding verloopt in <div class="date"> <strong>00</strong> uur <strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms</div></h2>
			<div class="content">
				<div class="banner-container clearfix">
				<img class="boxsort-ascu" src="<?php echo $pResUrl; ?>images/boxsort-ascu.png" alt="" />
					<table class="banner-table">
						<thead>
						<tr>
							<th>
								<p>Advanced SystemCare Ultimate 13</p>
								<span>1 jaar / 3 PC’s</span>
							</th>
							<th class="th-last">29,99</th>
							<th class="th-last"><del>49,99</del></th>
						</tr>
						</thead>
						<tbody>
						<tr>
							<td><i class="gift-icon"></i>IObit Uninstaller 9 PRO</td>
							<td class="th-last fontred">GRATIS</td>
							<td class="th-last"><del>29,99</del></td>
						</tr>
						<tr>
							<td><i class="gift-icon"></i>Protected Folder</td>
							<td class="th-last fontred">GRATIS</td>
							<td class="th-last"><del>39,95</del></td>
						</tr>
						</tbody>
					</table>
				</div>
			<div class="buy-info">
				<p class="ascu-prize">slechts  <strong><b>€</b>29<b>99</b></strong> van <del>€119,93</del></p>
				<a href="https://www.iobit.com/buy.php?product=nl-ascu13pfiu2999&ref=nl_au13pfiupurchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1911-nl')" class="button">Koop Nu</a>
				<p class="people-num">Al  <b><?php echo $buyNum;?></b>  keer geactiveerd!</p>
			</div>
			</div>
	 	</div>
	</div>
	<div class="payments ">
		<div class="wrapper">
			<img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
		</div>
	</div>
	<!--hightlight-->
	<div class="wrapper hightlight clearfix">
		<h2>Razendsnelle PC & ultieme beveiliging met de antivirus scanner <br> van Bitdefender</h2>
		<div class="hightlight-body">
			<img src="<?php echo $pResUrl; ?>images/hightlight.png" alt="" />
			<div class="pro-describe clearfix">
				<ul>
					<li>Bescherm uw PC tegen virussen, malware en phishing websites.</li>
					<li>Bescherm uw computer tegen alle vormen van Ransomware waaronder WannaCry 2.0.</li>
					<li>Bescherm uw persoonlijke mappen en bestanden.</li>
					<li>Blaas nieuw leven in uw computer en versnel uw systeem met maar 1-klik.</li>
					<li>Volledig compatibel met andere antivirus software.</li>
				</ul>
				<img src="<?php echo $pResUrl; ?>images/prize-icon.png" alt="">
			</div>
		</div>
	</div>
	<!--pro-list-->
	<div class="wrapper-bg clearfix">
		<div class="wrapper pro-list clearfix">
			<h2>Nog maar een beperkt aantal pakketten beschikbaar!</h2>
			<p class="second-title">Nog maar <b class="packsNum"><?php echo $packsNum ?></b> cadeaupakketten op voorraad</p>
			<ul class="boxsort-list clearfix">
				<li>
					<img src="<?php echo $pResUrl; ?>images/boxsort-iup.png" alt="" />
					<div class="boxsort-info">
						<h3>IObit Uninstaller 9 PRO</h3>
						<h4>€0,- <del>€29,99</del> 1 Jaar / 1 PC</h4>
						<ul>
							<li>· Verwijder hardnekkige programma’s, plug-ins <span> en restbestanden met 1-klik.</span></li>
						</ul>
					</div>
				</li>
				<li>
					<img src="<?php echo $pResUrl; ?>images/boxsort-pf.png" alt="" />
					<div class="boxsort-info">
						<h3>Protected Folder</h3>
						<h4>€0,-  <del>€39,95</del> 1 Jaar / 1 PC</h4>
						<ul>
							<li>· Beveilig uw mappen, bestanden en overige data met 1 <span> wachtwoord. </span></li>
						</ul>
					</div>
				</li>
			</ul>
			<div class="price-line clearfix"></div>
			<div class="buy-info btn-position">
				<p class="ascu-prize price-bg"><strong><b>€</b>29<b>99</b></strong> <del>€119,93</del></p>
				<a href="https://www.iobit.com/buy.php?product=nl-ascu13pfiu2999&ref=nl_au13pfiupurchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1911-nl')" class="button">Koop Nu</a>
				<p class="vite-words">Wees er snel bij!</p>
			</div>
		</div>
	</div>
	<!--awards-->
	<div class="awards clearfix">
		<h2>Vertrouwd en bekroond door de volgende media</h2>
		<img src="<?php echo $pResUrl; ?>images/awards.png" alt=""/>
	</div>
	<!-- review -->
	<div class="review wrapper clearfix">
		<div class="reviews active">
			<h2>Media Recensie</h2>
			<p>“Naast het antiviruscomponent is de tool uitgerust met een Care-tab. Daarin vind je een berg aan optimalisatietools. Deze tools werken snel en erg goed. IObit detecteerd alle soorten problemen en zal eerst een herstelpunt aanmaken voordat deze problemen worden opgelost.”</p>
		</div>
		<div class="reviews">
			<h2>Klantbeoordeling</h2>
			<p>"In het verleden had ik vaker problemen tijdens het sleutelen aan mijn computer. Toen kreeg ik de eerste versie van Advanced SystemCare. Nu is het niet meer nodig om aan mijn pc te sleutelen. Sinds ik deze anti-virus software geïnstalleerd heb, hoef ik nooit meer te zoeken naar nieuwe software. Advanced SystemCare Ultimate beschermt en versnelt mijn PC. De grote winnaar! Mijn computer is altijd up to date en werkt als een paard. Anders dan andere producten was er geen constante stroom van conflicten."</p>
	  </div>
		<div class="reviews ">
			<h2>Klantbeoordeling</h2>
			<p>"Sinds ik Advanced SystemCare Ultimate geïnstalleerd heb, heb ik geen enkel probleem meer met mijn systeem of malware infecties enz. Nu Advanced SystemCare Ultimate een update heeft doorgevoerd met meerdere functies, loopt mijn computer 5x sneller dan voorheen. Ik vind de nieuwe interface ook aangenaam. De volgende keer als ik een computer repareer, raad ik Advanced SystemCare Ultimate aan als de beste anti-virus/systeem optimizer."</p>
		</div>
		<div class="reviews">
			<h2>Klantbeoordeling</h2>
			<p>“ De afgelopen jaren heb ik verschillende versies van Advanced SystemCare gebruikt. Toen ik de functies Advanced SystemCare Ultimate zag, wist ik meteen dat dit programma mij niet teleur zou stellen. Het is het meest gemakkelijke en meest effectieve programma die mijn drie computers laten lopen als nieuw.”</p>
			</div>
		<ul class="handle clearfix">
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="Rod Garnett"><span></span></div>
				<strong>PC Magazine</strong>
			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett"><span></span></div>
				<strong>Rod Garnett</strong>
			</li>
			<li class="active">
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"><span></span></div>
				<strong>Dareen Lim</strong>
			</li>
			<li>
				<div class="badge"><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="Russell Peck"><span></span></div>
				<strong>Russell Peck</strong>
			</li>
		</ul>
	</div>
	<!--comparison-->
	<div class="intro">
			<div class="wrapper">
				<h2>Advanced SystemCare Ultimate</h2>
				<p>Biedt volledige bescherming tegen virussen, spyware &amp; malware</p>
				<div class="screen"><img src="<?php echo $pResUrl; ?>images/screen.jpg" alt=""></div>
				<div class="box clearfix">
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
						<dd>Samen met de antivirus scanner van Bitdefender, beschermt Advanced SystemCare Ultimate tegen virussen, spyware, DNS aanvallen, en alle varianten van ransomware waaronder WannaCry 2.0</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
						<dd>Adblocker voorkomt dat u gebombardeerd wordt met vervelende of opdringerige pop-ups.</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
						<dd>Met Advanced SystemCare Ultimate 11 kunt u met 1-klik uw PC opschonen en versnellen. </dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
						<dd>Advanced SystemCare Ultimate zorgt voor een snellere opstarttijd en versnelt de internetsnelheid met wel 300%*.</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></dt>
						<dd>Advanced SystemCare Ultimate beveilgt uw systeem tegen phising websites en zorgt ervoor dat kwaadaardige websites u niet kunnen traceren.</dd>
					</dl>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/icons06.png" alt=""></dt>
						<dd>FaceID legt indringers vast op camera die in het geheim toegang proberen te verkrijgen tot uw persoonlijke gegevens door middel van de vernieuwde gezichtsherkenningstechnologie</dd>
					</dl>
				</div>
			</div>
		</div>
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>Een Schone, Veilige Computer en Twee Gratis Cadeaus</h2>
			<div class="img-box"></div>
			<div class="price">
				<strong>€<b>29</b>,99</strong> <del> €119,93</del>
				<a href="https://www.iobit.com/buy.php?product=nl-ascu13pfiu2999&ref=nl_au13pfiupurchase1911<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1911-nl')" class="button btn-mid-lag">KOOP NU</a>
				<div class="date">Deze aanbieding verloopt in <br> <strong>00</strong> uur <strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms</div>
			</div>
		</div>
	</div>
	<!-- end bottomcart -->
	<!-- payments  -->
	<div class="service  clearfix">
		<div class="wrapper">
			<dl>
				<dt>Garantie</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dd>
			</dl>
			<dl>
				<dt>Veilig betalen</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
			</dl>
			<dl class="last">
				<dt>24/7 Gratis Klantenservice</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dd>
			</dl>
		</div>
	</div>
	<!-- end payments -->
	<!-- footer -->
	<div class="footer">
		<dl class="annotation wrapper">
			<dt>*Opmerkingen:</dt>
			<dd>
				IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
			</dd>
			<dd>
			 Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.
			</dd>
		</dl>
		<div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</div>
	</div>
	<!-- end footer -->
	<script src="<?php echo $pResUrl; ?>script/script.js"></script>

</body>
</html>