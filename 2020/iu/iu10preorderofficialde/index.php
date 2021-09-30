<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'deiujune_p' . $date;
	$c_name_t='deiujune_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(41,59);
		setcookie($c_name, $packsNum, time() + 3600 * 24);
		setcookie($c_name_t,$totalNum, time() + 3600 * 24);
	} else {
		if (intval($_COOKIE[$c_name]) <= 0) {
			$packsNum = 0;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Zahlen Sie 0€, um den neuesten IObit Uninstaller PRO zu erhalten</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner" data-name="animation">
		<div class="wrapper">
			<div class="top">
				<a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
				  IObit
				</a>
				<div class="icon">
					<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
					IObit Uninstaller 10
				</div>
			</div>
			<div class="clearfix">
				<div class="left-img">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
				</div>
				<div class="right fr">
					<h1 data-name="default">Willkommen zu unserem Vorverkauf</h1>
					<h2 data-name="default">Für 0 Euro können Sie das beste Deinstallationstool erwerben</h2>
					<div class="number" data-name="default">
						<div id="reduce" class="reduceNum">
							<div class="listbox"><span class="list"><b>5</b></span></div>
							<div class="listbox"><span class="list"><b>0</b></span></div>
						</div>
						von 200 Stück übrig
						<div class="bar">
							<span></span>
						</div>
					</div>
					<div class="price" data-name="default">
						<strong>0€ <sup>*</sup></strong>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=de-iu10preorder&ref=de_iu10preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_iu"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10preorderofficial-de');">
						  Jetzt vorbestellen
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro" data-name="animation">
		<div class="wrapper ">
			<h2>Deinstallieren Sie alles Unerwünschte</h2>
			<dl class="first" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>Plug-Ins</h3>
					<p>Nutzlose Plug-Ins<br> Werbebasierte Plug-Ins<br> Schädliche Plug-Ins</p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>Programme</h3>
					<p>Nutzlose Programme<br> Hartnäckige Programme<br> Gebündelte Programme</p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>Windows-Apps</h3>
					<p>Nutzlose Windows-Apps<br> Windows Standard-Apps</p>
				</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/intro-img.png')?>" alt="" class="img-box" data-name="default">
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature" data-name="animation">
		<div class="wrapper">
			<h2>Deinstallieren Sie alles vollständig</h2>
			 <div class="img-box" data-name="default">
			 	<div class="list01">
			 		<span class="button">Deinstallieren</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Antivirus-Software</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Deinstalliere Antivirus-Software</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>Sie haben <strong>0</strong> Programme erfolgreich deinstalliert. Details:</p>
			 		<ul>
			 			<li>Registrierungseinträge gelöscht: <strong>0</strong></li>
			 			<li class="right">Dateien gelöscht: <span><strong>0</strong>,<strong>0</strong></span>MB</li>
			 			<li>Geplante Aufgaben gelöscht: <strong>0</strong></li>
			 			<li class="right">Systemdienste gelöscht: <strong>0</strong></li>
			 			<li>Protokollierte Elemente gelöscht: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			</div>
			<div class="message">
			 	<dl data-name="default" class="one">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Änderungen aufzeichnen</h3>
			 			<p>Zeichnet die Systemänderungen, die  bei der Installation eines Programms entstanden sind, auf, um später eine vollständige Deinstallation zu gewährleisten.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="two">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Leistungsstark deinstallieren</h3>
			 			<p>Mit nur einem Klick, lassen sich alle unerwünschten Programme, einschließlich Antiviren- Software, gleichzeitig entfernen.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="three">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Überreste bereinigen</h3>
			 			<p>Beseitigt automatisch alle Datenreste die durch die Deinstallation von Programmen entstanden sind.</p>
			 		</dd>
			 	</dl>
			 </div>
		</div>
	</div>
	<!-- feature end -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<h2>Weitere Funktionen, die Sie nutzen können</h2>
			<dl data-name="default" class="one">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Software updaten</h3>
		 			<p>Aktualisiert alle veralteten Software mit nur einem Klick.</p>
		 		</dd>
			</dl>
			<dl class="center" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Benachrichtigungen blockieren</h3>
		 			<p>Nervige Site-Benachrichtigungen beim Surfen werden blockiert.</p>
		 		</dd>
			</dl>
			<dl data-name="default" class="three">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Automatische Updates</h3>
		 			<p>Aktualisiert sich automatisch für eine schnellere und gründlichere Reinigung.</p>
		 		</dd>
			</dl>
		</div>
	</div>
	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Praktisches Deinstallationsprogramm</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>50M+</h3>
					<p>Downloads</p>
				</dd>
			</dl>
			<dl class="center">
				<dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>4.5+</h3>
					<p>Benutzerbewertung</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>positive Rezensionen</p>
				</dd>
			</dl>
			<div class="review-box">
				<div class="box">
					<h3>Kundenbewertung</h3>
					<p>Ich benutze den IObit Uninstaller schon eine lange Zeit und ich kann mich nicht beklagen. Es hat das erste Mal als ich es benutzt habe bereits gut funktioniert aber verbessert wurde er über die Jahre trotzdem, was auch letztlich der Grund war, warum ich dieses Programm bereits so lange nutze. Ich kann dieses Produkt jedem weiterempfehlen der Schwierigkeiten damit hat Programme komplett zu deinstallieren ohne, dass Datenreste auf dem Computer verbleiben.</p>
				</div>
				<div class="box">
					<h3>Kundenbewertung</h3>
					<p>Ich bin echt froh, dass ich dieses Programm gefunden habe, weil mein Computer war sehr langsam und ich dachte, es liegt daran da er vielleicht alt ist. Mein Kumpel hat mir dann aber gesagt, dass der Grund  auch sein kann, dass sich zu viele Daten von deinstallierten Programmen  auf meinem Computer befinden. Er hatte recht. Nachdem ich mit IObit Uninstaller Programme deinstalliert habe, von denen ich nichts mehr wusste und andere Programme, die ich eigentlich schon deinstalliert habe, komplett vom Computer entfernen konnte hat sich die Computergeschwindigkeit deutlich verbessert. Ich kann mich bei IObit nur bedanken. Vielen Dank.</p>
				</div>
				<div class="box active">
					<h3>Media Review</h3>
					<p>
						Die Pro-Version beinhaltet alle Funktionen der Freeware und kommt mit einigen praktischen Zusatz-Features. So kann die Vollversion beispielsweise auch gebündelte Programme oder Plugins entfernen und alle Ihre wichtigen Programme mit nur einem Klick auf die neueste Version updaten.
					</p>
				</div>
				<div class="box">
					<h3>Kundenbewertung</h3>
					<p>Ich habe in der Vergangenheit mehrere Deinstallationsprogramme verwendet. Nachdem ich IOBit  (Version 7.0) benutzt habe, habe ich kein anderes Programm mehr benutzt. Es hat eine einfach zu bedienende Benutzeroberfläche und erledigt alles sehr schnell und effektiv. Es hilft Ihnen, die Registrierungsdaten automatisch zu bereinigen und somit die Computerperformance auf einem guten Level zu halten. Die Fähigkeit, Bundleware zu identifizieren und zu entfernen, ist eine großartige Funktion in IOBit, die unübertroffen ist.</p>
				</div>
				<div class="box">
					<h3>Kundenbewertung</h3>
					<p>Der IObit Uninstaller findet Plugins in meinen Browsern, von denen ich nicht einmal wusste, dass sie existieren. Die Bereinigung von Restdateien ist sehr gut. Es bleiben keine Datenreste von deinstallierten Programmen übrig. Es erinnert mich außerdem an die verfügbaren Updates für alle meine Programme. Insgesamt hat sich die Leistung meines Computers dadurch verbessert. Es ist sehr bequem und leicht zu handhaben. Ich habe das sogar meinen Freunden empfohlen.</p>
				</div>
			</div>
			<ul>
				<li>
					<span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
					<p>Ivan White</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
					<p>Ali Tekin</p>
				</li>
				<li class="active">
					<span><img src="<?php echo getStaticUrl('images/chip-de.png')?>" alt="Chip.de"></span>
					<p>Chip.de</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
					<p>Samrat Kumar Chakrabortty</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
					<p>John Glenn Perong</p>
				</li>
			</ul>
		</div>
	</div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>Weltweite Auszeichnungen</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Hinweis:</dt>
				<dd>
					*.Nach Ablauf der 30-tägigen Testphase wird Ihre Kreditkarten- oder PayPal-Konto automatisch mit 18,99€ belastet. Der Rabatt i.H.v. 52% auf den ursprünglichen Preis von 39,95 € gilt nur für Vorbestellungen!
				</dd>
				<dd>
					*.Wenn Sie mit unserem Produkt nicht zufrieden sind, können Sie die Bestellung innerhalb von 30 Tagen kostenfrei stornieren.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
				IObit Uninstaller 10
	  	</div>
  		<div class="number fl">
  			<div id="fReduce" class="reduceNum">
  				<div class="listbox"><span class="list"><b>5</b></span></div>
  				<div class="listbox"><span class="list"><b>0</b></span></div>
  			</div>
  			 von 500 Stück übrig
  		</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>