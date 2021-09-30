<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -76400174;
$buyNum = number_format($buyNum);


if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
				'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
				'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
				'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
				'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
				'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
				'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
				'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
				'invalidcode','asc_install','asc_p6','asc_p7','officialfree','officialpro',
				'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
				'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
				'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
				'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3',
				'asc_promote13','asc_promote14','asc_promote15','asc_promote16','asc_promote17','asc_promote18')
)) {
	$refStr = '-' . $_GET['st'];
} else {
	$refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc','x_asc','xi_asc','xb_asc'))){
	$refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
	$refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
	$refStr.='-'.$_GET['to'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>80% Kerstkorting op Advanced SystemCare PRO - IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<div class="banner">
		<div class="snow"></div>
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/nl/" target="_blank" class="logo">IObit</a>
			<h1>Speciale Kerstaanbieding</h1>
			<h2>Tijdelijke aanbieding <div class="date"><span>nog maar</span> <strong>00</strong> uur <strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms</div></h2>

 			<div class="one-pc-box">
 				<h2>35% Korting</h2>
 				<div class="img-box clearfix">
 					<img src="<?php echo $pResUrl; ?>images/asc-one-box.png" alt="">
 					<div class="price">
 						<strong>€<b>18</b>,99</strong>
 						<del>€29,99</del>
 					</div>
 				</div>
 				<a href="https://www.iobit.com/buy.php?product=nl-asc131pc1899&ref=nl_asc131pc1899purchase1911<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911-nl')" class="button border">Activeer Nu!</a>
 			</div>
 			<div class="packs">
 				<h2>35% Korting</h2>
 				<div class="img-box clearfix">
 					<span class="box"></span>
 					<div class="price">
 						<strong>€<b>19</b>,99</strong>
 						<del>€119,93</del>
 					</div>
 				</div>
 				<a href="https://www.iobit.com/buy.php?product=nl-asc133pcsdpf1999&ref=nl_asc133pcsdpf1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911-nl')" class="button">Activeer Nu!</a>
 			</div>
 			<div class="one-pc-box three-pcs">
 				<h2>35% Korting</h2>
 				<div class="img-box clearfix">
 					<span class="box"></span>
 					<div class="price">
 						<strong>€<b>19</b>,99</strong>
 						<del>€49,99</del>
 					</div>
 				</div>
 				<a href="https://www.iobit.com/buy.php?product=nl-asc131y3pc1999&ref=nl_asc133pc1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911-nl')" class="button border">Activeer Nu!</a>
 			</div>
	 	</div>
	</div>
	<div class="payments ">
		<div class="wrapper">
			<img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
		</div>
	</div>
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2><span>Haal deze feestdagen het maximale uit uw pc!</span></h2>
			<div class="showcase">
				<div class="inner">
					<ul class="screenshot">
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
						</li>
					</ul>
				</div>
				<ul class="zoom">
					<li></li>
					<li class="fun3">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
						</div>
					</li>
					<li class="fun2">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
						</div>
					</li>
					<li class="fun4">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
						</div>
					</li>
					<li class="fun5">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
						</div>
					</li>
				</ul>
				<ul class="list-icon">
					<li class="active"></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="detail-list">
				<dl>
					<dt><i class="benfits04"></i></dt>
					<dd>
						<h3>100% BESCHERMING</h3>
						<p>Beschermt uw privacy en data tegen toegang van buitenaf. Beschermt uw privacy twee keer zo goed*  als de gratis versie.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits02"></i></dt>
					<dd>
						<h3>200%* SNELLER SYSTEEM</h3>
						<p>Ruimt onnodige bestanden op en optimaliseert CPU en RAM voor een sneller systeem. Maakt uw systeem tot 200% sneller dan de gratis versie.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits03"></i></dt>
					<dd>
						<h3>300%* SNELLER INTERNET</h3>
						<p>Downloads, online games, internetpagina’s en YouTube video’s worden tot 300% sneller dan met de gratis versie.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits01"></i></dt>
					<dd>
						<h3>MEER VRIJE SCHIJFRUIMTE</h3>
						<p>Ruimt overbodige bestanden, ongeldige snelkoppelingen, registeritems en onvoltooide downloadbestanden volledig op.</p>
					</dd>
				</dl>
				<a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Meer informatie ></a>
			</div>
		</div>
	</div>
	<!-- end benfits -->
	<!-- gifts -->
	<div class="gifts default ">
		<div class="wrapper">
			<h2>Met Twee Gratis Kerstcadeaus!</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/amc-gift.png" alt=""></dt>
				<dd><strong>Protected Folder </strong> beschermt uw belangrijke bestanden en mappen met een wachtwoord </dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt=""></dt>
				<dd><strong>Smart Defrag PRO </strong> is de ideale aanvulling op  Advanced SystemCare en haalt het maximale uit  uw harde schijf en SSD! </dd>
			</dl>
			<a href="https://www.iobit.com/buy.php?product=nl-asc133pcsdpf1999&ref=nl_asc133pcsdpf1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911-nl')" class="button btn-mid-lag">Claim uw Kerstcadeaus!</a>
			<div class="date"><strong>00</strong> uur <strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms</div>
		</div>
	</div>
	<!-- end gifts -->
	<div class="gifts exceed hide">
		<div class="wrapper">
			<img src="<?php echo $pResUrl; ?>images/gifts-sold-out.png" alt="" class="img-box">
			<div class="message">
				<h2>Toch nog 60% Kerstkorting!</h2>
				<img src="<?php echo $pResUrl; ?>images/gift-box-exceed.png" alt="">
				<dl>
					<dt> <strong>€<b>19</b>,99</strong> <del>€49,99</del></dt>
					<dd><a href="https://www.iobit.com/buy.php?product=nl-asc131y3pc1999&ref=nl_asc133pc1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911-nl')" class="button">Activeer Nu!</a></dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- review -->

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
	          <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
	          <dd>
	            <h2>Media recensie</h2>
	            <p>"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
	            <cite>Cnet</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></dt>
	          <dd>
	            <h2>Klantbeoordeling</h2>
	            <p>“Ik heb over de jaren verschillende programma’s geprobeerd die computers probleemloos zouden doen werken. Een paar jaar geleden ben ik bij ASC uitgekomen, in eerste instantie de gratis versie. Toen ik merkte dat ik eindelijk van alle computerproblemen en ergernissen af was, ben ik naar de betaalde versie overgestapt en hoef ik er niet meer naar om te kijken. Advanced SystemCare Pro is de enige die ik anderen zou aanbevelen, gebaseerd op mijn ervaring. Ik gebruik ook IObit Uninstaller, Smart Defrag en Driver Booster, dat maakt het nog gemakkelijker.”</p>
	            <cite>Richard Beavers</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></dt>
	          <dd>
	            <h2>Klantbeoordeling</h2>
	            <p>“Advanced System Care is een geweldig programma.  Ik gebruik het al jaren en het werkt fantastisch. Ze verbeteren hun producten continu en het wordt alleen maar beter over de jaren. Ik gebruik meerdere IObit producten en ze werken allemaal volledig naar behoren.”</p>
	            <cite>Patsy Clark</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/rej-visschers-bernabela.png')?>" alt="R.E.J Visschers-Bernabela"></dt>
	          <dd>
	            <h2>Klantbeoordeling</h2>
	            <p>“Ik heb Advanced SystemCare 12 en de 13 beta, gedownload en uitgebreid getest (win 7). De uitstraling is mooi en overzichtelijk. De nieuwe functies zijn super.”</p>
	            <cite>R.E.J Visschers-Bernabela</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/siegfried-van-hoek.png')?>" alt="Siegfried van Hoek"></dt>
	          <dd>
	            <h2>Klantbeoordeling</h2>
	            <p>"Nr. 13 is mijn geluksgetal! Met Systemcare brengt Iobit niet slechts een vage update van versie12 uit, die net klaar is voor SSD. De architecture van SSD schijven gaf ruimte voor een nieuwe benadering in onderhoud en beveiliging met minder benodigde prestatietijd, terwijl ook HDD nog steeds aan zijn trekken komt. Natuurlijk kost het zoeken naar bestandsrestanten relatief meer tijd in vergelijk tot andere taken, want de fysieke C: schijf moet geheel uitgelezen worden, maar dan toch... En mijn favoriete tool aller-tijden de Ontbrekende Updates en Systeem Zwakheden Zoek-tool was echt heel alert, alleen daarom al adviseer ik alle vrienden die ik help altijd Iobit Sytemcare. Met versie 13 was het alsof ik een oude vriend terug ontmoette met een enthousisme net als toen ik ooit begon met Iobit Systemcare nr. 5. Welkom Iobit Sytemcare 13!"</p>
	            <cite>Siegfried van Hoek</cite>
	          </dd>
	        </dl>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end review -->

	<!-- end review -->
	<!-- compare -->
	<div class="compare wrapper">
	  <table border="0" cellspacing="0" cellpadding="0" width="100%">
	    <thead>
	    <tr>
	      <th class="text" colspan="2">Waarom Advanced SystemCare PRO?</th>
	      <th class="itemb">
	        <div class="box">
	          Uw huidige versie
	        </div>
	      </th>
	      <td class="space"></td>
	      <th class="itema">
	        <div class="box">
	          De PRO versie
	        </div>
	        <span class="shadow"></span>
	      </th>
	    </tr>
	    </thead>
	    <tbody>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></td>
	      <td class="virtue">Basis opschoning, reparatie en optimalisatie van het systeem </td>
	      <td class="itemb"><i class="all-icons">√</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></td>
	      <td class="virtue">Tot wel 300% sneller internet met internet booster</td>
	      <td class="itemb"><i class="all-icons close">√</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></td>
	      <td class="virtue">Tot wel 200% snellere opstarttijd</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></td>
	      <td class="virtue">Grondige Windows register opschoning voorkomt computer crashes</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></td>
	      <td class="virtue">Sneller systeem door volledige harde schijf optimalisatie</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons06.png" alt=""></td>
	      <td class="virtue"> Bescherm persoonlijke gegevens met het Privacy Schild</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons07.png" alt=""></td>
	      <td class="virtue">Verbergt de Digitale Vingerafdruk zodat surfgedrag privé blijft</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons08.png" alt=""></td>
	      <td class="virtue">Dicht beveiligingsgaten in real time</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons09.png" alt=""></td>
	      <td class="virtue">Optimaal gemak met automatische updates en automatische RAM-opschoning</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons10.png" alt=""></td>
	      <td class="virtue">Gratis 24/7 technische ondersteuning</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    </tbody>
	  </table>
	</div>
	<!-- end compare -->
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>Een Schone, Veilige Computer en Twee Gratis Kerstcadeaus</h2>
			<div class="img-box"></div>
			<div class="price">
				<strong>€<b>19</b>,99</strong> <del> €119,93</del>
				<a href="https://www.iobit.com/buy.php?product=nl-asc133pcsdpf1999&ref=nl_asc133pcsdpf1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911-nl')" class="button btn-mid-lag">Activeer Nu!</a>
				<div class="date"><strong>00</strong> uur <strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms</div>
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
	<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
	
	<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
	<script type="text/javascript">
		var refStr = '<?php echo $refStr;?>'
		
	</script>
</body>
</html>