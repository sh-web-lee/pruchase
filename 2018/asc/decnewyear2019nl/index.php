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
				'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro',
				'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted')
)) {
	$refStr = '-' . $_GET['st'];
} else {
	$refStr = '';
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
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Gelukkig Nieuwjaar: 80% korting op Advanced SystemCare PRO - IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<div class="banner">
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/nl/" target="_blank" class="logo">IObit</a>
			<div class="title">
				<h1>Gelukkig Nieuwjaar!</h1>
				<p>Ga voordelig 2019 in met deze Spectaculaire Aanbieding!</p>
			</div>

 			<div class="one-pc-box">
 				<div class="img-box">
 					<img src="<?php echo $pResUrl; ?>images/onepc.png" alt="">
 				</div>
 				<dl>
 					<dt><strong><b>€18</b>,99</strong>  i.p.v. €29,99</dt>
 					<dd><a href="https://www.iobit.com/buy.php?product=nl-asc121pc1899&ref=nl_asc121pc1899purchase1812<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1812-nl')" class="button">Activeer Nu!</a></dd>
 				</dl>
 			</div>
 			<div class="sold-box">
 				<h3> Nog <strong>55</strong> uur <strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms beschikbaar</h3>
 				<div class="img-box">
 					<img src="<?php echo $pResUrl; ?>images/packs.png" alt="">
 				</div>
 				<dl>
 					<dt><strong><b>€19</b>,99</strong>  i.p.v. €119,93</dt>
 					<dd><a href="https://www.iobit.com/buy.php?product=nl-asc123pcsdpf1999&ref=nl_asc123pcsdpf1999purchase1812<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1812-nl')" class="button button-btm-lag"> <span></span>Activeer Nu!</a></dd>
 					<dd>Al <span class="buyNum"><?php echo $buyNum?></span> keer geactiveerd</dd>
 				</dl>
 			</div>
 			<div class="one-pc-box">
 				<div class="img-box">
 					<img src="<?php echo $pResUrl; ?>images/three-pcs.png" alt="">
 				</div>
 				<dl>
 					<dt><strong><b>€19</b>,99</strong>  i.p.v. €49,99</dt>
 					<dd><a href="https://www.iobit.com/buy.php?product=nl-asc121y3pc1999&ref=nl_asc123pc1999purchase1812<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1812-nl')" class="button">Activeer Nu!</a></dd>
 				</dl>
 			</div>
	 	</div>
	</div>
	<div class="payments wrapper">
		<img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
	</div>
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>De ideale alles-in-één oplossing om het maximale uit uw pc te halen!</h2>
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
	<div class="gifts">
		<div class="wrapper">
			<h2>Twee Gratis Cadeaus om het Nieuwe Jaar in te luiden!</h2>
			<div class="gift-list clearfix">
				<dl class="pf">
					<dt>
						<span>
							<img src="<?php echo $pResUrl; ?>images/pf-box.png" alt="">
						</span>
						<strong>Protected Folder </strong>
					</dt>
					<dd><del>€39,95</del>  <b>€<span>0</span></b></dd>
				  	<dd>
					  	<p>- Vergrendel uw belangrijke mappen met een wachtwoord!</p>
					  	<p>- Voorkom dat uw gegevens gestolen of bekeken worden!</p>
				  	</dd>
				</dl>
				<dl class="sd">
					<dt>
						<span><img src="<?php echo $pResUrl; ?>images/sd-box.png" alt=""></span>
						<strong>Smart Defrag 6 PRO</strong>
					</dt>
					<dd><del>€29,99</del>  <b>€<span>0</span></b></dd>
				  	<dd>
					  	<p>- Veilige en automatische schijfdefragmentatie</p>
					  	<p>- Maximale schijfprestaties en snellere toegang tot uw bestanden</p>
				  	</dd>
				</dl>
			</div>
			<a href="https://www.iobit.com/buy.php?product=nl-asc123pcsdpf1999&ref=nl_asc123pcsdpf1999purchase1812<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1812-nl')" class="button btn-mid-lag"> <span></span>Claim uw CADEAUS</a>

		</div>
	</div>
	<!-- end gifts -->
	<!-- review -->
	<div class="reviews ">
		<div class="wrapper">
			<h2>Wereldwijd erkend en gewaardeerd</h2>
			<p>Wij gaan altijd voor tevreden klanten, waar ook ter wereld</p>
			<ul class="message clearfix">
				<li>
					<strong>200+</strong>
					<p>Populair in meer dan <b>200</b> landen wereldwijd</p>
				</li>
				<li>
					<strong>1.000+</strong>
					<p>Reviews en waardering van meer dan <b>1.000</b> media </p>
				</li>
				<li>
					<strong>250.000.000+</strong>
					<p>Gekozen en gewaardeerd door meer dan <b>250 miljoen</b> mensen</p>
				</li>
				<li>
					<strong>80%+</strong>
					<p>Meer dan <b>80%</b> van de gebruikers heeft PRO geactiveerd</p>
				</li>
			</ul>
			<div class="map">
				<span class="recover recover01 big"></span>
				<span class="recover recover02 middle"></span>
				<span class="recover recover03 smail"></span>
				<span class="recover recover04 big"></span>
				<span class="recover recover05 middle"></span>
				<span class="recover recover06 smail"></span>
				<span class="recover recover07 big"></span>
				<span class="recover recover08 middle"></span>
				<span class="recover recover09 smail"></span>
				<span class="recover recover10 smail"></span>
				<span class="recover recover11 smail"></span>
				<span class="recover recover12 smail"></span>
				<span class="recover recover13 middle"></span>
				<span class="recover recover14 middle"></span>
				<span class="recover recover15 smail"></span>
				<span class="recover recover16 smail"></span>
				<span class="recover recover17 big"></span>
				<span class="recover recover18 smail"></span>
				<span class="recover recover19 smail"></span>
				<span class="recover recover20 big"></span>
				<span class="recover recover22 smail"></span>
				<span class="recover recover23 smail"></span>
				<span class="recover recover24 smail"></span>
				<span class="recover recover25 smail"></span>
				<span class="recover recover26 smail"></span>
				<dl class="tradotto-da-tedesco">
					<dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
					<dd>
						<strong>Markus Thomas</strong>
						<p>Het ideale programma om mijn pc te versnellen en op te <br> schonen. Mijn oude pc is weer snel en krachtig!</p>
						<span></span>
					</dd>
				</dl>
				<dl class="html-it">
					<dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
					<dd>
						<strong>HTML.it</strong>
						<p>Advanced SystemCare PRO is een krachtig <br> programma om het beste uit je systeem te <br> halen. Bijna alles gaat automatisch, heel <br> gemakkelijk!</p>
						<span></span>
					</dd>
					</dl>
				<dl class="baixaki">
					<dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
					<dd>
						<strong>Baixaki</strong>
						<p>Advanced SystemCare presteert uitzonderlijk goed. <br>
Het detecteert complexe problemen en lost ze direct op. </p>
						<span></span>
					</dd>
				</dl>
				<dl class="charles-r-widick">
					<dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
					<dd>
						<strong>Charles R. Widick</strong>
						<p>Ik kies nog altijd voor Advanced SystemCare PRO!</p>
						<span></span>
					</dd>
				</dl>
				<dl class="cnet">

					<dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
					<dd>
						<strong>Cnet</strong>
						<p>Advanced SystemCare kan uw <br> computer nieuw leven in blazen. Het <br> vindt de juiste oplossing voor elk <br> probleem!</p>
						<span></span>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- end review -->
	<!-- compare -->
	<div class="compare wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="itemb">
					<div class="box">
						Uw huidige versie
						<span></span>
					</div>
				</th>
				<th class="text">Vergelijking van de functionaliteit:</th>

				<th class="itema">
					<div class="box">
						De PRO versie
						<span></span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="itemb"><i class="all-icons">√</i></td>
				<td class="virtue">Basis opschoning, reparatie en optimalisatie van het systeem</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">√</i></td>
				<td class="virtue">
					Tot wel 300% sneller internet met internet booster
					<span class="all-icons">Aggiornato</span>
				</td>

				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Tot wel 200% snellere opstarttijd
					<span class="all-icons">Aggiornato</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
						Grondige Windows register opschoning voorkomt computer crashes
						<span class="all-icons ra">Raccomandat</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Sneller systeem door volledige harde schijf optimalisatie
					<span class="all-icons ra">Raccomandat</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Bescherm persoonlijke gegevens met het Privacy Schild<span class="all-icons nuo">Nuovo</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Verbergt de  Digitale Vingerafdruk zodat surfgedrag privé blijft<span class="all-icons nuo">Aggiornato</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Dicht beveiligingsgaten in real time<span class="all-icons">Aggiornato</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Optimaal gemak met automatische updates en automatische RAM-opschoning
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Gratis 24/7 technische ondersteuning</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb radius"></td>
				<td class="virtue radius"></td>
				<td class="itema radius"> <span class="shadow"></span></td>
			</tr>
		</tbody>
	</table>
	</div>
	<!-- end compare -->
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>Geef deze kerst ook een MOOI CADEAU aan uw oude pc!</h2>

				<div class="showcase">
					<span class="packs"></span>
				</div>
				<div class="selection">
					<ul>
						<li class="one-pc"><i></i><span>1 PC / 1 JAAR</span> <strong>-35%</strong></li>
						<li class="three-pc active" ><i></i><span>3 PC’s/1 JAAR + PF + SD</span> <strong>-80%</strong></li>
						<li class="three-pc"><i></i><span>3 PC’s/1 JAAR</span> <strong>-60%</strong></li>
					</ul>
				</div>

				<dl class="btnarea">
					<dt> <strong><b>€19</b>,99</strong> <del>119,93 </del></dt>
					<dd>
						<a href="https://www.iobit.com/buy.php?product=nl-asc123pcsdpf1999&ref=nl_asc123pcsdpf1999purchase1812<?php echo $refStr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1812-nl')" class="button btn-mid-lag button-top-lag"> <span></span>Activeer Nu!</a>
					</dd>
				</dl>
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
	<script>
		refStr='<?php echo $refStr;?>';
	</script>
	<script src="<?php echo $pResUrl; ?>script/script.js"></script>
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
</body>
</html>