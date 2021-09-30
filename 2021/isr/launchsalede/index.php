<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (!empty($_GET['AFF'])) $_GET['aff'] = $_GET['AFF'];

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'launchsalede' . $date;
	if (empty($_COOKIE[$c_name])) {
		$packsNum = rand(50, 100);
		setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name];
			$packsNum -- ;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(['packsNum' => $packsNum]);
	exit();
}

$refStr = empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
$refStr .= empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['insur']) ? '' : '-'.$_GET['insur'];
if(!empty($_GET['ver'])){
	$ver = explode('.',$_GET['ver']);
	$refStr .= '-'.$ver[0].$ver[1];
}
$refStr .= empty($_GET['instd']) ? '' : '-'.$_GET['instd'];
$refStr .= empty($_GET['finstd']) ? '' : '-'.$_GET['finstd'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Bis zu 40% Rabatt auf iFun Screen Recorder PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
	
</head>
<body>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://www.iobit.com/de/index.php"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>"/>
				<p>Erstellen Sie qualitativ hochwertige Videos ohne Begrenzung!</p>
			</div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label70"></div>
				<div class="banner-option">
					<p class="banner-count">Nur noch <span class="active countNum">50<i></i></span>Stück übrig</p>
					<ul>
						<li class="custom-radio">
							<label>Lebenslange Lizenz / 1 PC<i>-38%</i></label>
							<div class="sel-list">
								<p>Nur gültig für aktuelle Version</p>
								<p>Wasserzeichen löschen/ hinzufügen</p>
								<p>Aufnahme mit höherer Qualität</p>
								<p>Reibungslose Aufnahme ohne Verzögerung</p>
							</div>
						</li>
						<li class="custom-radio active">
							<span class="like"></span>
							<label>1 Jahr / 1 PC<i>-40%</i></label>
							<div class="sel-list">
								<p>Lizenz für 1 Jahr / 1 PC</p>
								<p>Wasserzeichen löschen/ hinzufügen</p>
								<p>Aufnahme mit höherer Qualität</p>
								<p>Reibungslose Aufnahme ohne Verzögerung</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd>
							<div class="now">
								<h3>49<i>99</i></h3>
								<span>€</span>
							</div>
							<div class="old">
								<h3>79<i>99</i></h3>
								<span>€</span>
							</div>
							<div class="getItNow">
								<a class="button"onclick="ga('send', 'event', 'isrbuy', 'buy', 'isrlifetimepurchase-de');" href="https://www.iobit.com/buy.php?product=de-isr1lifetime4999&ref=de_isr1lifetimesale4999<?= $refStr; ?>&refs=de_purchase_isr">JETZT KAUFEN</a>
							</div>
						</dd>
						<dd style="display: block;">
							<div class="now">
								<h3>29<i>99</i></h3>
								<span>€</span>
							</div>
							<div class="old">
								<h3>49<i>99</i></h3>
								<span>€</span>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1yearpurchase-de');" href="https://www.iobit.com/buy.php?product=de-isr11year2999&ref=de_isr11yearsale2999<?= $refStr; ?>&refs=de_purchase_isr">JETZT KAUFEN</a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 80px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO </span><br />nicht nur Bildschirm aufnehmen</h3>
			<div class="screen2-cont" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" />
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Persönliches Wasserzeichen</h3>
					<span>nur für PRO</span>
					<p>Wollen kein hässliches Wasserzeichen auf Ihrem Bildschirm Video? Wenn ja, verwenden Sie dann iFun Screen Recorder, den besten Bildschirmrekorder ohne Wasserzeichen für die Aufnahme unter Windows. Damit können Sie auch Ihr eigenes Wasserzeichen hinzufügen. Niemand ist in der Lage, mit Ihren Inhalten zu raubkopieren oder Geld zu verdienen.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<img src="<?php echo getStaticUrl('images/timeout.gif')?>" />
				</div>
				<div class="cont-text cont2 fl">
					<h3 style="font-size: 25px;"><i class="date"></i>Geplante Aufnahme</h3>
					<span>nur für PRO</span>
					<p>Sie können geplante Aufgaben erstellen, indem Sie die bestimmte Zeit zum Starten und Stoppen der Bildschirm- und Webcam-Aufzeichnung festlegen.</p>
					<p>Sie können mehrere automatische Aufzeichnungsaufgaben erstellen. In diesem Fall werden Vorträge, Kurse und Live-Übertragungen aufgezeichnet, ohne vor dem PC bleiben zu müssen.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/audio.gif')?>" />
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="audio"></i>Audio vom Video trennen</h3>
					<span>nur für PRO</span>
					<p>iFun Screen Recorder PRO hilft Ihnen, die Musik aus einem Youtube-Video oder das Audio von Ihrem PC aufzunehmen.</p>
					<p>Unterstützt das Extrahieren von Audio aus Videos nach der Aufnahme. Sie können das Audio vom Video trennen und einzeln speichern.</p>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont4 fl">
					<h3 style="font-size: 25px;"><i class="rec"></i>Verzögerungsfreie HD-Aufnahme *</h3>
					<span>nur für PRO</span>
					<p>Mit der fortschrittlichen GPU-Beschleunigungstechnik können Sie Spiele ohne FPS-Einbußen aufnehmen und 4K-Videos in HD erstellen.</p>
					<p>Für Gamer ist iFun Screen Recoder das Beste. Man kann Spielhighlights aufnehmen, Spiel-Tutorials erstellen und auf Youtube teilen.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">Unterschiede zwischen Free- und Pro-Versionen:</h3>
			<div class="versionTable">
				<div class="versionDesc">
					
					<ul><li><i class="descIcon time"></i>Unbegrenzte Aufnahmezeit</li></ul>
					<ul><li><i class="descIcon cut"></i>Benutzerdefinierte Bearbeitung</li></ul>
					<ul><li><i class="descIcon remove"></i>Wasserzeichen entfernen</li></ul>
					<ul><li><i class="descIcon seal"></i>Persönliches Wasserzeichen hinzufügen</li></ul>
					<ul><li><i class="descIcon date"></i>Geplante Aufzeichnungsaufgaben erstellen</li></ul>
					<ul><li><i class="descIcon audio"></i>Audio extrahieren und einzeln speichern</li></ul>
					<ul><li><i class="descIcon game"></i> Reibungslose Gameplay-Aufnahme mit bis zu <span>30%</span> höherer FPS-Optimierung<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Schnelle und verzögerungsfreie Aufnahme mit bis zu <span>50%</span> schnellerer Hardwarebeschleunigung<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Optimale Videoqualität<i class="tableIcon up"></i> <p style="font-size: 12px;">(bis zu <span>30%</span> höhere Definition)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Automatische Versionsaktualisierung</li></ul>
					<ul><li><i class="descIcon spt24"></i>Kostenloser technischer Support 24/7</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">FREE-Version</div>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
				</div>
				<div class="versionPro">
					<div class="topTitle">PRO-Version</div>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<div class="buyPro" style="padding: 20px 10px;">
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option3" value="1" checked="">
							<label for="option3">1 Jahr</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4">Lebenslange Lizenz</label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1yearpurchase-de');" href="https://www.iobit.com/buy.php?product=de-isr11year2999&ref=de_isr11yearsale2999<?= $refStr; ?>&refs=de_purchase_isr" style="display: block;">JETZT KAUFEN-29,99€</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isrlifetimepurchase-de');" href="https://www.iobit.com/buy.php?product=de-isr1lifetime4999&ref=de_isr1lifetimesale4999<?= $refStr; ?>&refs=de_purchase_isr">JETZT KAUFEN-49,99€</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen4" >
		<div class="content">
			<h3 class="screen-title">Redaktions-Tipp</h3>
			<div class="media">
				<p>IObit wird seit mehreren Jahren von diesen erstklassigen Medien empfohlen und ausgezeichnet.</p>
				<img src="<?php echo getStaticUrl('images/media.png')?>" />
			</div>
			<h3 class="screen-title" style="margin-top: 160px;">Kundenbewertungen</h3>
			<div class="review-wrap">
				<!-- Swiper -->
				<div class="user-head">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
					        <div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
							</div>
					    </div>
						
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div class="user-avator">
					<ul>
						<li>
							So weit, so gut. iFun Screen Recorder ist wirklich ein praktisches Tool, das einfach nutzbar ist. Ich wusste nicht, wie man einen Bildschirm unter Windows aufzeichnet, aber mit dieser Software ist es ganz einfach. Damit kann ich während der HD-Aufnahme Screenshots machen und nach der Aufnahme Untertitel für das Video hinzufügen. Dann lade ich es auf mein Instagram hoch und erhalte massive Aufmerksamkeit. Dieses leistungsstarke Bildschirm-Aufzeichnungstool hat mir geholfen, mein Geschäft voranzutreiben.
							<p>—Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Ich bin auf diese Bildschirmaufzeichnungssoftware gestoßen und bin jetzt ein Fan davon wegen seiner einfachen Bearbeitungsfunktionen. Ich zeichne den Betriebsprozess gerne auf, um Computerprobleme zu lösen. Diese Aufnahmesoftware ermöglicht es mir , mit Audio aufzunehmen, damit ich das bearbeitete Video nach der Aufnahme direkt auf YouTube hochladen kann. Es kombiniert Aufnahme und Bearbeitung, was sehr praktisch für Youtuber wie mich ist, die Tutorial-Videos teilen möchten!
							<p>—Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							Als Sekretärin muss ich viele Bildschirmaufzeichnungssoftwares verwenden. Es war schwer, einen idealen kostenlosen Bildschirm-Recorder zu finden, aber iFun Screen Recorder ist ein perfektes Werkzeug für die Aufzeichnung von Videokonferenzen und hilft mir sehr! Ich könnte den HD-Bildschirm damit aufnehmen und das Video in verschiedene Formate konvertieren. Besonders empfehlenswert!
							<p>—Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							Hallo! Ihr fantastischer kostenloser Bildschirm-Recorder überrascht mich. Ich kann all diese kostbaren und wunderbaren Momente mit dem iFun Screen Recorder aufnehmen, insbesondere für Live-Videos. Die Videos, die ich damit aufgenohmen habe, sind von extrem hoher Qualität. Ich kann sie speichern und mit meinen Freunden teilen. Anfangs war ich mir bei der Software nicht so sicher, aber die Ergebnisse sind erstaunlich. Das ist klasse! 
							<p>—Robbins Hilton</p>
							<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
						</li>
					</ul>
					
				</div>
			</div>
			
		</div>
	</div>
	<div class="wrapper screen5">
		<div class="content" >
			<h3 class="screen-title">Warum IObit?</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">Zahlen lügen nicht</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500M</h3>
					Downloads
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>1.5M</h3>
					Seitenbesuche
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>200K</h3>
					Zufriedene Benutzer
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					Länder und Gebiete
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					Jahre Erfahrung
				</div>
			</div>
		</div>
		
	</div>
	<div class="wrapper" style="background-color: #F2F2F2; border-top: #cecece 1px solid;">
		<div class="content backMoney">
			<p ><img src="<?php echo getStaticUrl('images/foot-icon1.png')?>">Wir akzeptieren</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon2.png')?>">Zahlungssicherheit</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon3.png')?>">Zufriedenheitsgarantie</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon4.png')?>">Sofortige Lieferung per E-Mail</p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
				Hinweis:<br />
				1. *Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.<br />
				2.&3. *Daten können sich system- oder computerabhängig ändern.
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; font-weight: 500;">Copyright © 2005 - 2021 IObit. Alle Rechte vorbehalten</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label70"></div>
			<div class="font-layer">
				<ul>
					<li class="active">1 Jahr / 1 PC <span>-40%</span></li>
					<li class="">Lebenslange Lizenz / 1 PC <span>-38%</span></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd style="display: block;">
						<div class="now">
							<h3>29<i>99</i></h3>
							<span>€</span>
						</div>
						<div class="old">
							<h3>49<i>99</i></h3>
							<span>€</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1yearpurchase-de');" href="https://www.iobit.com/buy.php?product=de-isr11year2999&ref=de_isr11yearsale2999<?= $refStr; ?>&refs=de_purchase_isr">JETZT KAUFEN</a>
					</dd>
					<dd>
						<div class="now">
							<h3>49<i>99</i></h3>
							<span>€</span>
						</div>
						<div class="old">
							<h3>79<i>99</i></h3>
							<span>€</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isrlifetimepurchase-de');" href="https://www.iobit.com/buy.php?product=de-isr1lifetime4999&ref=de_isr1lifetimesale4999<?= $refStr; ?>&refs=de_purchase_isr">JETZT KAUFEN</a>
					</dd>
				</dl>
				<p>Nur noch <span class="countNum">50</span> Stück übrig</p>
			</div>
		</div>
		
	</div>
	

<script>refStr = "<?= $refStr; ?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo getStaticUrl('script/swiper.min.js')?>"></script>

 <script>
	   var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        slidesPerView: 3,
	        paginationClickable: true,
	        spaceBetween: 150,
			loop : true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			onSlideChangeEnd: function(swiper){
				
				$('.user-avator ul li').hide()
				$('.user-avator ul li').eq(swiper.realIndex).show()
			}
	    });
  </script>
</body>
</html>