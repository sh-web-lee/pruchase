<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
	$date=$_GET['d'];
	$cName='eniunewins_p'.$date;
	$cookie=$_COOKIE[$cName];
	if($cookie!==null){
		$packsNum=$_COOKIE[$cName];
		if($packsNum>3){
			$packsNum--;
			setcookie($cName,$packsNum);
		}else{
			$packsNum=3;
		}
	}else{
		$packsNum=97;
		setcookie($cName,$packsNum);
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
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Bis zu 52% RABATT auf IObit Uninstaller PRO und kostenlose Geschenke - IObit </title>
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
			<h1>Holen Sie sich Gratisgeschenke</h1>
			<h6>Verpassen Sie nicht die Chance und nutzen Sie das Sonderangebot</h6>
			<div id="clist" class="clist clearfix">
				<div class="imgbox fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 9 PRO"/>
					<b class="all-icons three">1 PC</b>
				</div>
				<div class="electbox fl">
					<h4><span class="name">Gerät(e)</span> <span>Preis</span></h4>
					<ul>
						<li>
							<div class="tag"><i class="all-icons">√</i></div>
							<h2>IObit Uninstaller 11 PRO <span>1 Jahresabo</span></h2>
							<h3>1 PC</h3>
							<div class="price">
								<strong>17,99<small>€</small></strong> <del>23,90€ </del>
								<p>24% Rabatt</p>
							</div>
						</li>
						<li class="on">
							<div class="tag"><i class="all-icons">√</i></div>
							<h2>IObit Uninstaller 11 PRO <span>1 Jahresabo</span></h2>
							<h3>3 PCs</h3>
							<div class="price">
								<strong>18,99<small>€</small></strong> <del>39,95€  </del>
								<p>52% Rabatt</p>
							</div>
						</li>
					</ul>
				</div>
			</div>
			<div class="clist glist clearfix">
				<div class="imgbox fl">
					<img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
				</div>
				<ul class="electbox fl">
					<li>
						<div class="tag"><i class="all-icons">√</i></div>
						<h2>IObit Gift Pack <span>Smart Defrag 7 PRO<br> Protected Folder<br> Start Menu 8</span></h2>
						<h3><span class="gift"><b class="giftNum">96</b></span> Stück übrig</h3>
						<div class="price"><strong>Kostenlos</strong></div>
					</li>
				</ul>
			</div>
			<div class="allprice clearfix">
				<p><b>Gesamtpreis</b> <strong><span>18</span>,99<small>€</small></strong></p>
				<a class="buybtn fr"
				   href="https://www.iobit.com/buy.php?product=de-iu113pcpfsdsm1899&ref=de_iu3pcsdpfsmnewinstall<?php echo $refStr;?>"
				   onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-newinstall-de');">
					JETZT AKTIVIEREN
				</a>
			</div>
			<p>100% 60 Tage Geld zurück Garantie</p>
		</div>
	</div>
	<!-- banner end -->

	<!-- comparison start -->
	<div id="compare" class="comparison wrapper">
		<h2>Unterschied zwischen Free und PRO Versionen</h2>
	  <table border="0" cellspacing="0" cellpadding="0" width="100%">
	    <thead>
	      <tr>
	        <th class="icons"></th>
	        <th class="itema"><span>IObit Uninstaller Free</span></th>
	        <th class="itemb"><span>IObit Uninstaller PRO</span></th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons" rowspan="3">
	        	<img src="<?php echo getStaticUrl('images/icons-01.png')?>" alt=""/>
	        	<b>Schnelle Deinstallation</b>
	        </td>
	        <td class="itema first"> Deinstalliert ungewollte Programme und Windows Apps.</td>
	        <td class="itemb"> Deinstalliert ungewollte Programme und Windows Apps.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Deinstalliert hartnäckige Programme, die sich nicht deinstallieren lassen.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Identifiziert gebündelte Programme, die zusammen mit Freeware installiert wurden</td>
	      </tr>
	      <tr class="space"><td></td></tr>
	      <tr>
	        <td class="icons" rowspan="3">
	        	<img src="<?php echo getStaticUrl('images/icons-02.png')?>" alt=""/>
	        	<b>Browser berenigen</b>
	        </td>
	        <td class="itema first gray">Entfernt Plug-Ins / Add-Ons / Erweiterungen in mehreren Browsern.</td>
	        <td class="itemb gray">Entfernt Plug-Ins / Add-Ons / Erweiterungen in mehreren Browsern.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Identifiziert schädliche Plug-Ins, die schädliche Links oder Anzeigen in die Seiten einfügen.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Identifiziert Werbe-Plug-Ins, die Anzeigen auf den Seiten einfügen</td>
	      </tr>
	      <tr class="space"><td></td></tr>
	      <tr>
	        <td class="icons" rowspan="3">
	        	<img src="<?php echo getStaticUrl('images/icons-03.png')?>" alt=""/>
	        	<b>Tiefenreinigung</b>
	        </td>
	        <td class="itema first gray"> Reinigt Programmreste automatisch nach der Deinstallation von Programmen.</td>
	        <td class="itemb gray"> Reinigt Programmreste automatisch nach der Deinstallation von Programmen.</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Reinigt Programmreste automatisch, auch wenn das Programm nicht von IObit Uninstallers deinstalliert wurde</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Macht die von einem Programm vorgenommenen Systemänderungen nach der Deinstallation rückgängig</td>
	      </tr>
	      <tr class="space"><td></td></tr>
	      <tr>
	        <td class="icons last" rowspan="3">
	        	<img src="<?php echo getStaticUrl('images/icons-04.png')?>" alt=""/>
	        	<b>Andere Vorteile</b>
	        </td>
	        <td class="itema gray"><i class="all-icons">×</i></td>
	        <td class="itemb gray">Aktualisiert alle veralteten Programme mit einem Klick</td>
	      </tr>
	      <tr>
	        <td class="itema"><i class="all-icons">×</i></td>
	        <td class="itemb">Aktualisiert sich automatisch, wenn eine neue Version verfügbar ist	</td>
	      </tr>
	      <tr>
	        <td class="itema last"><i class="all-icons">×</i></td>
	        <td class="itemb last">Premium technischer Support 24/7 auf Anfrage	 </td>
	      </tr>
	    </tbody>
	  </table>
	</div>
	<!-- comparison end -->

	<!-- giftdetails start -->
	<div class="giftdetails">
		<div class="wrapper">
			<h2>Außerdem wird ein kostenloses Geschenkpaket für Sie vorbereitet</h2>
			<ul class="clearfix">
				<li>
					<img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/>
					<h4>Smart Defrag PRO</h4>
					<p class="name"><strong>0€</strong> <del>29,99€</del>    1 Jahr / 1 PC</p>
					<p>Holen Sie sich die maximale Festplattenleistung!</p>
				</li>
				<li>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/>
					<h4>Protected Folder</h4>
					<p class="name"><strong>0€</strong> <del>39,95€</del>    1 Jahr / 1 PC</p>
					<p>Keine Sorgen um Datendiebstahl oder Datenschutzverluste!</p>
				</li>
				<li class="last">
					<img src="<?php echo getStaticUrl('images/sm8-box.png')?>" alt="Start Menu 8"/>
					<h4>Start Menu 8</h4>
					<p class="name"><strong>0€</strong> <del>17,99€</del>   1 Jahr / 1 PC</p>
					<p>Einfach zum klassischen Startmenü zurückkehren</p>
				</li>
			</ul>
			<h3>Holen Sie sich das Geschenkpaket, um Ihre PC-Leistung zu optimieren!</h3>
			<a class="buybtn"
			   href="https://www.iobit.com/buy.php?product=de-iu113pcpfsdsm1899&ref=de_iu3pcsdpfsmnewinstall<?php echo $refStr;?>"
				 onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-newinstall-de');">
				Mein Geschenkpaket holen
			</a>
			<p class="giftbox"><span class="gift"><b class="giftNum">96</b></span> Pakete übrig</p>
		</div>
	</div>
	<!-- giftdetails end -->

	<!-- review start -->
	<div class="review wrapper">
		<h2>Was sagen andere darüber?</h2>
		<div id="dg-container" class="dg-container">
		  <div class="nav"> 
		    <span class="dg-prev"></span>
		    <span class="dg-next"></span>
		  </div>
		    <div class="content dg-wrapper">  
		      <dl class="reviews">
		        <dt><img src="<?php echo getStaticUrl('images/giga.png')?>" alt=""></dt>
		        <dd>
		          <h2>Media Review</h2>
		          <p>Neben Programmen beseitigt der „IObit Uninstaller“ auch Toolbars und Plugins von Firefox, Chrome und Internet Explorer. Mit dem „IObit Uninstaller“ entfernen Sie nicht mehr benötigte Software von Ihrem PC. Im Anschluss an die Standard-Deinstallation durchsucht das kostenlose Tool Ihren kompletten Rechner und die Registry nach möglichen Datenresten, die Sie ebenfalls löschen können.</p>
		          <cite>GIGA</cite>
		        </dd>
		      </dl>
		      <dl class="reviews">
		        <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt=""></dt>
		        <dd>
		          <h2>Kundenbewertung</h2>
		          <p>„Uninstaller PRO ist nur eines von fünf der IObit Wartungsprogrammen, in die ich für meinen PC investiert habe, wie Chefköche in Ihre Messer. Uninstaller ist genial darin die Bit- und Bytereste, die sich überall verstecken, zu finden, die ansonsten Festplattenspeicher verbrauchen und das Register beeinflussen. Wenn ich die ‚deinstallieren‘ Funktion des zu deinstallierenden Programmes nutze, funktioniert dies ohne Probleme. Aber Uninstaller PRO ist im Nachhinein aufgetaucht und hat 35 weitere Dateien angezeigt, die noch entfernt werden mussten. Alles was ich tun musste, ist OK zu klicken. Sehr zu empfehlen und auch von mir gekauft ist die Lizenz für 3 PCs. Der Support ist höflich und hervorragend.“</p>
		          <cite>Joseph Yu</cite>
		        </dd>
		      </dl>             
		      <dl class="reviews">
		        <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt=""></dt>
		        <dd>
		          <h2>Kundenbewertung</h2>
		          <p>„IObit Uninstaller ist wahrscheinlich eines der besten Programme, um unnötige Programme von deinem Computer zu entfernen. Im Gegensatz zur Windows Standarddeinstallation, entfernt dieses Programm jegliche Überbleibsel der Programme, die später deinen PC verlangsamen könnten. Ich nutze dieses Programm seit mehreren Jahren und es hilft mir zu jeder Zeit meinen Computer sauber und schnell zu halten. Ich habe dieses Programm an einige meiner Freunde in der Vergangenheit weiterempfohlen und würde heute auch wieder tun.“</p>
		          <cite>Sergey Erlich</cite>
		        </dd>
		      </dl>                 
		      <dl class="reviews">
		        <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt=""></dt>
		        <dd>
		          <h2>Kundenbewertung</h2>
		          <p>„IObit Uninstaller ist eines der besten Programme mit seinem Nutzungsumfang. Einfach zu handhaben, schnelle und tiefe Reinigung. Die neue Version beinhaltet mehr andere Funktionalitäten, die nicht nur mit Windows 10 funktionieren. Die schnelle Reinigung durch die Plug-ins ist auch sehr komfortabel. Ebenso die Suche nach Duplikaten und nicht genutzten Programmen. Danke für die Bewirtung der Computer meiner Familie und mir.“</p>
		          <cite>Áda Görtler</cite>
		        </dd>
		      </dl>
		      <dl class="reviews">
		        <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt=""></dt>
		        <dd>
		          <h2>Kundenbewertung</h2>
		          <p>„Der IObit Uninstaller wird mit jedem Update besser. Ich nutze ihn nun schon seit mehr als 3 Jahren. Er lädt schnell und hat eine einfache Benutzeroberfläche. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features, welches mir einen schnellen Zugriff auf kürzlich installierte Programme gibt, die ich nicht mag oder nicht angemessen funktionieren. Es wird außerdem einfacher, deine Startanwendungen zu kontrollieren, sodass dein PC schneller hochfährt.“</p>
		          <cite>Lovro Žužić</cite>
		        </dd>
		      </dl>
		    </div>               
		</div>
	</div>
	<!-- review end -->

  <!-- awards start -->
	<div class="awards">
		<div class="wrapper">
			<h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- awards end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<!-- service start -->
			<div class="service wrapper clearfix">
			  <dl class="fl">
			    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
			    <dd>
			      <h4>RISIKOFREI TESTEN - 60 Tage Geld zurück Garantie</h4>
			      <p>Wenn Sie die PRO-Edition aktivieren, werden unerwünschte Programme für einen bezahlbaren Preis schnell deinstalliert.</p>
			    </dd>
			  </dl>
			  <dl class="fr">
			    <dd>
			      <h4>Wir akzeptieren</h4>
			    </dd>
			    <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
			  </dl>
			</div>
			<!-- service end -->
			<dl class="annotation">
				<dt>Hinweis:</dt>
				<dd>
					*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- pop start -->
	<div class="popbg"></div>
	<div class="popbox">
		<div class="inner">
			<big>Willkommen</big>
			<dl class="clearfix">
				<dt><img src="<?php echo getStaticUrl('images/pop-gift-box.png')?>" alt=""/></dt>
				<dd>
					<h2>Geschenke für <br>  Neukunden</h2>
					<p>Nur <span class="gift"><b class="giftNum">96</b></span> Stück übrig</p>
				</dd>
			</dl>
			<i class="close">X</i>
		</div>
	</div>
	<!-- pop end -->
	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
		<img src="<?php echo getStaticUrl('images/float-gift-box.png')?>" alt=""/>
		<p class="giftbox">Nur<span class="gift"><b class="giftNum">96</b></span> Stück übrig</p>
		<a class="fbtn"
		   href="https://www.iobit.com/buy.php?product=de-iu113pcpfsdsm1899&ref=de_iu3pcsdpfsmnewinstall<?php echo $refStr;?>"
			 onclick="ga('send', 'event', 'iu3pcbuy', 'buy', 'iupurchase-newinstall-de');">
			 Jetzt erhalten >>
		</a>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>