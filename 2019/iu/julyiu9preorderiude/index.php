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
	$c_name = 'deiuoldjune_p' . $date;
	$c_name_t='deiuoldjune_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(49,58);
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
	$ver=$matches[1][0].$matches[1][1];
	$refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bezahlen Sie 0€ um IObit Uninstaller 9 PRO zu bekommen</title>
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
			<a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>Der weltweite Vorverkauf ist live</h1>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<p>Deinstalliere ohne Spuren zu hinterlassen</p>
					<ul class="price clearfix">
						<li class="first">
							<strong><big>0</big>€<sup>*</sup></strong> <del>39,95€</del>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"><b class="giftNum">50</b> Stück verbleibend</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=de-iu9preorder&ref=de_iu9preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu-de');">
							  Jetzt vorbestellen
							</a>
						</li>
					</ul> 
				</div>
			</div>
			<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
		<div class="intro">
	    <h2>Warum auf IObit Uninstaller 9 PRO upgraden?</h2>
	    <!-- content -->
	    <div class="content">
	      <div class="wrapper">
	        <ul class="clearfix">
	          <li class="active">Leistungsfähigere Deinstallation</li>
	          <li>Gründlichere Reinigung</li>
	        </ul>
	        <div class="box">
	          <div class="inlist">
	            <div class="indetail first clearfix">
	              <dl class="fl">
	                <dt>
	                  <h3>Deine aktuelle Version</h3>
	                  <h4>Deinstalliert</h4>
	                </dt>
	                <dd>Programme, Browser Erweiterungen und Windows Apps. </dd>
	              </dl>
	              <dl class="fr">
	                <dt>
	                  <h3>IObit Uninstaller 9 PRO</h3>
	                  <h4>Deinstalliert <i>VERBESSERT</i></h4>
	                </dt>
	                <dd>Programme, Browser Erweiterungen und Windows Apps. </dd>
	                <dd>Hartnäckige Programme, die mit herkömmlichen Mitteln nicht deinstalliert werden können.</dd>
	                <dd>
	                  Gebündelte Programme zusammen mit Freeware, um Daten zu stehlen und zu verkaufen. <em class="space">Einzigartig auf dem Markt</em>
	                </dd>
	                <dd>
	                  Gefährliche und Werbe-Plug-Ins, die gefährliche Links oder Werbung anzeigen. <em class="space">Einzigartig auf dem Markt</em>
	                </dd>
	              </dl>
	              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
	            </div>
	            <div class="indetail last clearfix">
	              <dl class="fl">
	                <dt>
	                  <h3>Deine aktuelle Version</h3>
	                </dt>
	                <dd>
	                  <h4>Entfernt</h4>
	                  Übergebliebene Dateien und Register nach der Deinstallation
	                </dd>
	              </dl>
	              <dl class="fr">
	                <dt>
	                  <h3>IObit Uninstaller 9 PRO</h3>
	                </dt>
	                <dd>
	                  <h4>Entfernt <i>VERBESSERT</i></h4>
	                  15% mehr verbliebene Dateien und Register nach der Deinstallation.
	                </dd>
	                <dd>
	                  <h4>Erkennt <i class="new">NEU</i></h4>
	                  die von einem Programm vorgenommenen Systemänderungen und setzt diese nach der Deinstallation des Programms zurück.
	                </dd>
	                <dd>
	                  <h4>Scannt <i class="new">NEU</i></h4>
	                  Übrig gebliebene Dateien von Programmen, die zuvor ohne Verwendung von IObit Uninstaller deinstalliert wurden. <em class="space">Einzigartig auf dem Markt</em>
	                </dd>
	              </dl>
	              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
	            </div>
	          </div>
	        </div>
	      </div>
	      <span class="prev"><</span>
	      <span class="next active">></span>
	    </div>
		</div>
	<!-- intro end -->

	<!-- feature start -->
		<div class="feature">
			<div class="wrapper">
				<div class="iumouse"><div class="mouse"></div></div>
				<h2>Noch mehr Vorteile von IObit Uninstaller 9 PRO</h2>
				<div class="clearfix">
					<div class="left fl">
						<img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
					</div>
					<div class="right fr">
						<ul class="feature-list">
							<li class="one">
								<i class="all-icons">√</i>
								<span>Entfernen Sie gebündelt Programme, Browsererweiterungen und Windows Apps</span>
							</li>
							<li class="one">
								<i class="all-icons">√</i>
								<span>
									Deinstallieren Sie Programme über das Desktopsymbol, das geöffnete Fenster oder das Taskleistensymbol
								</span>
							</li>
							<li>
								<i class="all-icons">√</i>
								<span>Erstellen Sie vor der Deinstallation automatisch einen Wiederherstellungspunkt</span>
							</li>
							<li><i class="all-icons">√</i> Aktualisieren Sie alle veralteten Programme mit einem Klick</li>
							<li><i class="all-icons">√</i> Automatische Updates, wenn eine neue Version verfügbar ist</li>
						</ul>
					</div>
				</div>
	      <div class="price clearfix">
	        <h3>Jetzt für €0 vorbestellen, um alle PRO Funktionen freizuschalten</h3>
	        <div class="fl">
	          <strong><big>0</big>€<sup>*</sup></strong> <del>39,95€</del>
	          <p class="change"><b class="giftNum">50</b> Stück verbleibend</p>
	        </div>
	        <a class="buybtn fl"
	           href="https://www.iobit.com/buy.php?product=de-iu9preorder&ref=de_iu9preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_iu"
	           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu-de');">
	          Jetzt vorbestellen
	        </a>
	      </div>
			</div>
		</div>
	<!-- feature end -->

	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Was sagen Andere?</h2>
			<div class="box">
				<div class="relist clearfix">
					<dl class="on clearfix">
						<dt><img src="<?php echo getStaticUrl('images/giga.png')?>" alt="GIGA"/></dt>
						<dd>
							<h3>Media review</h3>
							<p>
							  Neben Programmen beseitigt der „IObit Uninstaller“ auch Toolbars und Plugins von Firefox, Chrome und Internet Explorer. Mit dem „IObit Uninstaller“ entfernen Sie nicht mehr benötigte Software von Ihrem PC. Im Anschluss an die Standard-Deinstallation durchsucht das kostenlose Tool Ihren kompletten Rechner und die Registry nach möglichen Datenresten, die Sie ebenfalls löschen können.
							</p>
							<h4>GIGA</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
						<dd>
							<h3>User review</h3>
							<p>
							  Ich benutze IObit-Programme seit Jahren mit großer Wirkung! Aus diesem Grund bleibe ich bei IObit-Produkten.
							  Ich habe in der Vergangenheit Laptops und Handys (Android) gewartet und repariert und lasse sie immer mit installierten IObit-Produkten. Ich fordere sie auf, regelmäßig zu scannen und ihnen mitzuteilen, dass es Laptop/ Computer / Handy automatisch repariert und beschleunigt. :)
							  Ich empfehle das Deinstallationsprogramm (und die neueste Beta) als sicheres und zuverlässiges Programm, das hartnäckige Programme verschiebt! Es entfernt vor allem die "versteckte" Codierung, die der Programmierer verlassen wollte, und installieren Sie die Werbung dann erneut!
							  Die alle Produkte von IObit sind sicher und einfach zu bedienen. Sie kümmern sich vor allem um Ihre PCs.
							</p>
							<h4>Jeff A Watts</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
						<dd>
							<h3>User review</h3>
							<p>
							  Ich finde IObit Uninstaller hervorragend zu bedienen, da es alles hat, was Sie sich wünschen können. Ich liebe die Tatsache, dass es alle übrig gebliebenen Fragmente deinstalliert. Es hat auch einen Software-Updater, der Sie daran erinnert, wenn eines der Programme aktualisiert werden muss, und die Tatsache, dass es Batch-Programme deinstalliert, macht es wirklich zu einem Gewinner. Eigentlich ist es genau das, was man braucht, um den Computer gut zu halten.
							</p>
							<h4>Lynette van Niekerk</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
						<dd>
							<h3>User review</h3>
							<p>
							  IObit Uninstaller ist die beste Software zum Entfernen von Programmen auf dem Computer, ganz schnell und effektiv. Es funktioniert besser als das grundlegende Deinstallationsprogramm von Windows. Es reinigt ernsthaft Datenreste des Programms und es gibt keine Verzögerungen auf dem Computer. Ich benutze es seit ein paar Monaten und weiß nicht, wie ich ohne es leben soll. Ich empfehle es meinen Freunden und meiner Familie. Danke! IObit Uninstaller ist fantastisch.
							</p>
							<h4>Paulo Martins</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
						<dd>
							<h3>User review</h3>
							<p>
							  Der IObit Uninstaller wird mit jedem Update besser. Ich nutze ihn nun schon seit mehr als 3 Jahren. Er lädt schnell und hat eine einfache Benutzeroberfläche. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features, welches mir einen schnellen Zugriff auf kürzlich installierte Programme gibt, die ich nicht mag oder nicht angemessen funktionieren. Es wird außerdem einfacher, deine Startanwendungen zu kontrollieren, sodass dein PC schneller hochfährt.
							</p>
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
	<div class="service">
		<div class="wrapper">
			<h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Hinweis:</dt>
				<dd>
					*.Nach der 30 tägigen kostenlosen Zeit, wird ihre Kreditkarte oder Paypal Konto automatisch i.H.v. 18,99€ belastet. Der Rabatt von 52% auf den Original Preis von 39,95€ gilt nur für Vorbestellungen!
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
	  	</div>
	  	<div class="price fr clearfix">
	  		<div class="one fl">
	  			<div id="fReduce" class="reduceNum">
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>5</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  			</div>
	  			<p class="change"><span class="viewNum"><?php echo $viewNum;?></span> Besucher, Nur noch<b class="giftNum">50</b>Stück verfügbar!</p>
	  		</div>
	  		<div class="two fl"><strong><big>0</big>€<sup>*</sup></strong> <del>39,95€</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
	  			   href="https://www.iobit.com/buy.php?product=de-iu9preorder&ref=de_iu9preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_iu"
	  			   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu-de');">
	  			  Jetzt vorbestellen
	  			</a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>