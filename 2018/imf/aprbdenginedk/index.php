<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'dkimfbd' . $date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 55;
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			setcookie($c_name, 3, time() + 3600 * 24 * 2);
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="dk">
<head>
	<meta charset="UTF-8">
	<title>Spar 86% of få fuld online beskyttelse – IObit Malware Fighter 8 ny ekstraudgivelse | IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/dk/index.php" target="_blank" class="logo">IObit</a>
			<h1>Bitdefender: Top PC-sikkerhed til dig og din pc </h1>
			<h2>Beskytter din PC mod over 209 millioner trusler  </h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3>Kun 
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				sikkerhedspakker tilbage i dag!
	      			</h3>
							<span>  1 års beskyttelse til 3 PC’er</span> <del>599 kr</del>
						</dt>
						<dd>
							<span><i></i>Protected Folder </span> <del>435 kr</del><em>  GRATIS</em>
						</dd>
						<dd>
							<span><i></i> AMC Security PRO </span> <del> 379 kr</del><em>  GRATIS</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							 Kun <strong>199 kr</strong> <del> 1,377 Kr</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=dk-imf8amcpf199&ref=dk_imfbdengine3pcpfamc1904<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine-dk');" class="buybtn"><i></i> Aktiver nu</a></dd>
					</dl>
				</div>
				<img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" class="payment">
			</div>
		</div>
	</div>
	<!--end banner-->
	<!--cruces-->
	<div class="cruces">
		<div class="wrapper clearfix">
			<h2>Ting du skal vide</h2>
			<ul>
				<li>
					<h3>Malware er overalt!</h3>
					<p>Internettet er et mere og mere farligt sted, nye malware inklusive virusser, orme, spyware, adware og Trojan kommer til hver dag og forsøger at gøre skade på din computer.</p>
				</li>
				<li class="last">
					<h3>Alvorlige konsekvenser hvis inficeret</h3>
					<p>Disse malware kan stjæle personlige, finansielle eller business informationer fra din computer, hvis den er blevet angrebet.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Stærk PC-beskyttelse med den seneste Bitdefender mekanisme</h2>
		<p>Udstyret med den seneste Bitdefender anti-virus-mekanisme, IObit Malware Fighter 8 PRO <br> beskytter mod mere end 209,000,000 sikkerhedstrusler i at beskadige din computer.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Opdateret Database</dt>
				<dd>Nyt malware bliver konstant tilføjet til Bitdefentders database for at sikre din computer mod skadelige infektioner.</dd>
			</dl>
			<dl class="list02">
				<dt>Real-tid Beskyttelse</dt>
				<dd>Så snart Bitdefender er aktiveret, er din computer fuldt beskyttet i realtid. Enhver trussel, som forsøger at bryde ind, blokeres og fjernes øjeblikkeligt. </dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				 Kun <strong>199 kr</strong> <del>1,377 Kr</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=dk-imf8amcpf199&ref=dk_imfbdengine3pcpfamc1904<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine-dk');" class="buybtn"><i></i> Aktiver nu</a></dd>
			<dd class="last"><i></i>  100% 60 dages tilfredshedsgaranti eller pengene tilbage</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Du kan også få andre beskyttelser kun i PRO</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Anti-ransomware</h3></dd>
				<dd>Stopper intelligent og proaktivt enhver ransomware som forsøger at bryde ind på din PC og beskytter dine filer.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Safe Box</h3></dd>
				<dd>Beskyttelse af dine specificerede vigtige mapper mod uautoriseret adgang og trusler.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Camera Guard</h3></dd>
				<dd>Informerer dig øjeblikkeligt ved ethvert forsøg på at få hemmelig adgang til dit kamera for krænkelse af privatliv. </dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Auto Update</h3></dd>
				<dd>Opdaterer automatisk til den seneste version.</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>86% rabat på aktivering af IObit Malware Fighter PRO i dag</h2>
			<h3>  Få 2 Ekstra Beskyttelsesværktøjer med i købet (værdi af 814 kr)</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Protected Folder</strong> <del>  435 kr</del> (1 år / 1 PC)
				</dd>
				<dd class="last">Ingen lækning af vigtige filer og sikring af private filer.</dd>
			</dl>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>AMC Security PRO</strong> <del> 379 kr</del> (1 år / 1 enhed)
				</dd>
				<dd class="last">Hold din Android hurtig, sikker og virusfri gratis!</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				 Kun <strong>199 kr</strong> <del> 1,377 Kr</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=dk-imf8amcpf199&ref=dk_imfbdengine3pcpfamc1904<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=dk_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine-dk');" class="buybtn"><i></i> Aktiver nu</a></dd>
			<dd class="last"><i></i> 100% 60 dages tilfredshedsgaranti eller pengene tilbage. </dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Hvad andre brugere og Media siger om dette produkt</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd>"Jeg er meget tilfreds med jeres produkt IObit Malware Fighter. Inden jeg fik dette produkt, havde jeg mange problemer med irriterende afbrydelser, jeg kunne ikke se en hel film eller koncert, som jeg godt kan lide at gøre. På grund af jeres produkt er hver eneste visning nu klar, sikker og godt beskyttet. Den scanner min bærbare computer uden at påvirke dens ydelse, derfor har jeg også anbefalet dette produkt til to af mine venner. "</dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>"Programmet bruger to antivirus-motorer, dets egne og BitDefenders, og de ser ud til at være effektive mod malware, der ikke kan opdages af andre tilsvarende programmer, så det er godt, at det kan køre sammen med dit standard-antivirusprogram. Det kan registrere et bredt udvalg af spyware, ransomware, adware, trojanere, orme, keyloggers og bots. "</dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="">
			</dt>
			<dd>
				<strong>Bob Bassett</strong>
			</dd>
			<dd>"Vi plejede at bruge op til et dusin forskellige programmer for at holde vores maskiner kørende og holde de onde gutter ude. Det tog timer hver uge at opretholde sikkerhed og ydeevne. Nu med IObit Malware Fighter Pro er alt samlet på ét sted, og det tager os bare et par minutter hver anden dag at udføre de samme opgaver med meget mere tillid. Vi har ikke haft nogen problemer, siden vi begyndte at bruge jeres program."</dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>Verdensomspændende priser</h2>
			<p>Som værende betroet og tildelt af de førsteklasses medier i de sidste ti år, ved du at du har den rigtige pc-beskyttelse.</p>
			<ul class="clearfix">
				<li class="first">
					<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/major-geeks.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/chip.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.softpedia.com/get/System/System-Miscellaneous/IObit-Driver-Booster.shtml?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="">
					</a>
				</li>
				<li class="last">
					<a href="http://driver-booster.updatestar.com/?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="">
					</a>
				</li>
			</ul>
		</div>
		<dl class="note wrapper">
			<dt>Bemærk:</dt>
			<dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</dd>
			<dd>*. Data kan variere baseret på forskellige systemer eller computere.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>