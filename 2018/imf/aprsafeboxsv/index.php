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
	$c_name = 'enimfsb' . $date;
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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>73% RABATT för att dubbelskydda dina viktiga filer - IObit Malware Fighter 7 Ny Specialutgåva | IObit</title>
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
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<h1>Safe Box: Inget lösenord, ingen åtkomst</h1>
			<h2>Enkelt men kraftfullt skydd för din personliga data</h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3>Endast
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				paket kvar idag! 
	      			</h3>
							<span>Ett års skydd för 3 datorer</span> <del>699 kr</del>
						</dt>
						<dd>
							<span><i></i> Protected Folder</span> <del>249 kr</del><em>  GRATIS</em>
						</dd>
						<dd>
							<span><i></i> AMC Security PRO </span> <del>249 kr</del><em>  GRATIS</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							 Endast <strong>329 kr</strong> <del>1 197 kr</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=sv-imf73pcpfamc329&ref=sv_imfsb3pcpfamc1804<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-safebox-sv');" class="buybtn"><i></i> Aktivera Nu</a></dd>
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
			<h2>Sådant som du måste veta</h2>
			<ul>
				<li>
					<h3>Varför ska man skydda viktiga filer?</h3>
					<p>
						Snokare kan enkelt stjäla din identitet om de får tillgång till dina personliga filer såsom finansiella och andra viktiga filer. Konfidentiella företagsfiler på din dator skulle kunna bli synliga och sabotera ditt företag.
					</p>
				</li>
				<li class="last">
					<h3>Var uppmärksam på ransomware!</h3>
					<p>
						Förutom identitetsstöld och informationsstöld, är ransomware attacker ett stigande problem som du bör vara uppmärksam på. Hackare krypterar dina viktiga filer för att be om pengar. Ökända WannaCry and Petya drabbade miljontals organisationer och privatpersoner förra året.
					</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Kraftfullt lösenordsskydd för din personliga data</h2>
		<p>IObit Malware Fighter 7 PRO tillåter att viktiga filer hålls separata med lösenord för att undvika någon form av obehörig åtkomst.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Sekretesskydd</dt>
				<dd>Du kan hålla dina viktiga filer som din personliga information och finansiella filer separata från andra filer. Ingen kan få åtkomst till dem utan tillstånd.</dd>
			</dl>
			<dl class="list02">
				<dt>Inga Ransomware attacker</dt>
				<dd>När väl filer har lagts till i Safe Box, är de inte tillgängliga för hackare. Ransomware skulle misslyckas med att kryptera dessa filer.</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				 Endast <strong>329 kr</strong> <del>1 197 kr</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=sv-imf73pcpfamc329&ref=sv_imfsb3pcpfamc1804<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-safebox-sv');" class="buybtn"><i></i> Aktivera Nu</a></dd>
			<dd class="last"><i></i> 100% 60 Dagars Pengarna Tillbaka Garanti
			</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Med endast PRO kan du få andra skydd</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Anti-ransomwaremotor</h3></dd>
				<dd>Stoppar proaktivt och smart utpressningsprogram som försöker bryta sig in i din dator och skyddar dina filer.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Bitdefender Engine</h3></dd>
				<dd>Oslagbar virusdetektering med avancerad Bitdefender Antivirusmotor </dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Kameraskydd</h3></dd>
				<dd>Informerar dig omedelbart om någon försöker få tillgång till din kamera i hemlighet.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Automatisk uppdatering</h3></dd>
				<dd>Automatisk uppdatering till den senaste versionen. </dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>73% RABATT när du aktiverar IObit Malware Fighter PRO idag</h2>
			<h3>  Get 2 Extra Protection Tools (valued at 498 kr) for FREE</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Protected Folder</strong> <del> 249 kr</del> (1 År , 1 PC)
				</dd>
				<dd class="last">Inga läckor av viktiga filer för en skyddad integritet</dd>
			</dl>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>AMC Security PRO</strong> <del> 249 kr</del> (1 År , 1 PC)
				</dd>
				<dd class="last">Håll din Android snabb, säker och fri från virus!</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				 Endast <strong>329 kr</strong> <del>1 197 kr</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=sv-imf73pcpfamc329&ref=sv_imfsb3pcpfamc1804<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-safebox-sv');" class="buybtn"><i></i> Activate Now</a></dd>
			<dd class="last"><i></i> 100% 60 Dagars Pengarna Tillbaka Garanti</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Vad andra användare och media säger om den nya versionen</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd>Jag är väldigt nöjd med er product IObit Maleware Fighter. Innan jag hade denna produkt, hade jag massvist med problem med skadliga störningar. Jag kunde inte se en hel film eller en konsert som jag tycker väldigt mycket om. Tack vare er produkt är all användning säker och väl skyddad. Den skannar min bärbara dator utan att den påverkar dess prestanda. Jag har även rekommenderat denna produkt till två av mina vänner.</dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>Detta program använder två antivirusmotorer, sitt egna och BitDefender och verkar vara effektivt mot skadliga program som inte går att upptäcka med andra liknande verktyg, så det är bra att programmet kan användas tillsammans ditt standard antivirusprogram. Det kan upptäcka många olika spionprogram, utpressningsprogram, reklamprogram, trojaner, maskar, keyloggers och bot. </dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="">
			</dt>
			<dd>
				<strong>David Cassidy</strong>
			</dd>
			<dd>Jag skulle vilja säga ett stort tack till alla anställda på IObit för att ni arbetar hårt för att ge oss de bästa programmen. Ni har gjort bra uppdateringar för era användare. Programmet skannar snabbare och är enkelt att använda. Ni som verkligen vill ha en bra Malware och antivirusprogram som även ger bra valuta för pengarna, behöver inte leta mer. Jag skulle rekommendera de att glömma det andra och skaffa det bästa som är IObit Malware Fighter.  </dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>Utmärkelser</h2>
			<p>Som betrodd och prisad av media i världsklass de senaste tio åren vet du att du har det rätta PC skyddet.</p>
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
			<dt>Notera:</dt>
			<dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>