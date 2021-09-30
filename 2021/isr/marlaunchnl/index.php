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
	$c_name = 'marlaunchnl' . $date;
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
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex,nofollow">  
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Exclusieve Lanceringsaanbieding iFun Screen Recorder PRO - IObit</title>
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
			<a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>"/>
				<p>Maak video’s van de hoogste kwaliteit zonder beperkingen!</p>
			</div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label70"></div>
				<div class="banner-option">
					<p class="banner-count">Nog maar <span class="active countNum">50<i></i></span>beschikbaar</p>
					<ul>
						<li class="custom-radio">
							<label>Levenslang  / 1 PC</label>
							<div class="sel-list">
								<p>1 pc, levenslang (geen updates)</p>
								<p style="white-space: pre;">Verwijder het standaard watermerk</p>
								<p>Maximale opnamekwaliteit</p>
								<p>Opnemen zonder haperingen</p>
							</div>
						</li>
						<li class="custom-radio active">
							<span class="like"></span>
							<label>1 Jaar / 1 PC<i>-40%</i></label>
							<div class="sel-list">
								<p>1 pc, 1 jaar (gratis updates)</p>
								<p style="white-space: pre;">Verwijder het standaard watermerk</p>
								<p>Maximale opnamekwaliteit</p>
								<p>Opnemen zonder haperingen</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd>
							<div class="now">
								<span>€</span>
								<h3>49<i>99</i></h3>
							</div>
							<div class="old">
								<span>€</span>
								<h3>79<i>99</i></h3>
							</div>
							<div class="getItNow">
								<a class="button"onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr-lf-purchase2103-nl')" href="https://www.iobit.com/buy.php?product=nl-isr1lf1pc4999&ref=nl_isr1lf1pc4999purchase2103<?= $refStr; ?>&refs=nl_purchase_isr">Bestel Nu</a>
							</div>
						</dd>
						<dd style="display: block;">
							<div class="now">
								<span>€</span>
								<h3>29<i>99</i></h3>
							</div>
							<div class="old">
								<span>€</span>
								<h3>49<i>99</i></h3>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr-1y-purchase2103-nl')" href="https://www.iobit.com/buy.php?product=nl-isr11y1pc2999&ref=nl_isr11y1pc2999purchase2103<?= $refStr; ?>&refs=nl_purchase_isr">Bestel Nu</a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 80px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO </span><br />Meer dan alleen opnemen</h3>
			<div class="screen2-cont" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" width="480" height="280"/>
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Watermerk Naar Keuze</h3>
					<span>Alleen PRO</span>
					<p>Verwijder ons watermerk en voeg indien gewenst de naam van uw bedrijf of kanaal toe voor een extra professionele video.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<img src="<?php echo getStaticUrl('images/timeout.gif')?>" width="480" height="280"/>
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="date"></i>Geplande opnames</h3>
					<span>Alleen PRO</span>
					<p>Stel een specifieke tijd in om opnames te starten en stoppen zodat uw lezingen, lessen en live uitzendingen automatisch opgenomen worden zelfs als u niet achter uw computer zit.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/audio.gif')?>" width="480" height="280"/>
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="audio"></i>Audio loskoppelen van de video</h3>
					<span>Alleen PRO</span>
					<p>Sla audio op als een apart bestand zodat u alleen de muziek van een YouTube video krijgt of het geluid van uw PC op kunt nemen.</p>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont4 fl">
					<h3><i class="rec"></i>Maximale kwaliteit video’s</h3>
					<span>Alleen PRO</span>
					<p>Met onze geavanceerde FPS-optimalisatie en krachtige GPU-versnelling, zijn al uw video’s van extreem hoge kwaliteit, zelfs als u zware games opneemt.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">Geniet van de Krachtige PRO-functies</h3>
			<div class="versionTable">
				<div class="versionDesc">
					<ul><li><i class="descIcon time"></i>Ongelimiteerde opnametijd</li></ul>
					<ul><li><i class="descIcon cut"></i>Videobewerking voor de perfecte video</li></ul>
					<ul><li><i class="descIcon remove"></i>Verwijder standaard watermerk</li></ul>
					<ul><li><i class="descIcon seal"></i>Voeg uw eigen watermerk toe</li></ul>
					<ul><li><i class="descIcon date"></i>Automatisch opnemen op ingeplande momenten</li></ul>
					<ul><li><i class="descIcon audio"></i> Sla het geluid van de opname op als apart bestand</li></ul>
					<ul><li><i class="descIcon game"></i>Neem vloeiend games op dankzij de tot wel <span>30%</span> hogere framerate<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Tot wel <span>50%</span> sneller en zonder haperingen opnemen met krachtige hardware-acceleratie<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Maximale videokwaliteit<i class="tableIcon up"></i> <p style="font-size: 12px;">(tot wel  <span>30%</span> hogere resolutie)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Automatisch updaten</li></ul>
					<ul><li><i class="descIcon spt24"></i>24/7 gratis technische ondersteuning</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">FREE</div>
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
					<div class="topTitle">PRO</div>
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
					<div class="buyPro">
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option3" value="1" checked="">
							<label for="option3">1 Jaar</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4">Levenslang </label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr-1y-purchase2103-nl')" href="https://www.iobit.com/buy.php?product=nl-isr11y1pc2999&ref=nl_isr11y1pc2999purchase2103<?= $refStr; ?>&refs=nl_purchase_isr" style="display: block;">Bestel Nu-€29,99</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr-lf-purchase2103-nl')" href="https://www.iobit.com/buy.php?product=nl-isr1lf1pc4999&ref=nl_isr1lf1pc4999purchase2103<?= $refStr; ?>&refs=nl_purchase_isr">Bestel Nu-€49,99</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen4" >
		<div class="content">
			<h3 class="screen-title">Vertrouwd door Toonaangevende Media</h3>
			<div class="media">
				<p>Aan het vertrouwen en de awards die wij al meer dan tien jaar krijgen van internationale, toonaangevende media, ziet u dat u bij ons goed zit. </p>
				<img src="<?php echo getStaticUrl('images/media.png')?>" />
			</div>
			<h3 class="screen-title" style="margin-top: 160px;">Wij luisteren naar de feedback van onze gebruikers</h3>
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
							Tot nu toe vind ik iFun Screen Recorder super. Het is echt screen capture software die heel gemakkelijk in gebruik is. Ik wilde een video opnemen met mijn laptop, maar ik wist niet hoe. Met iFun Screen Recorder neem ik zelfs screenshots tijdens het opnemen in HD en voeg ik na het opnemen tekst toe aan de video. Dan upload ik mijn video op Instagram en krijg ik altijd veel reacties. Dankzij de engagement met mijn video’s gaat het steeds beter met mijn business.
							<p>—Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Ik kwam deze gratis screen recorder een tijdje geleden tegen en was direct fan, met name door de eenvoudige editing opties. Ik neem vaak mijn scherm op om mensen te helpen met computerproblemen en met deze software kan ik zelfs mijn stem erbij opnemen om uit te leggen wat mensen moeten doen. Ik upload de video direct naar YouTube na het opnemen. Dat opnemen en editen samen in één programma zitten is super handig voor youtubers zoals ik die tutorials willen delen!
							<p>—Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							Voor mijn werk heb ik vaak schermopname software nodig. Ik had moeite de ideale gratis screen recorder te vinden, maar iFun Screen Recorder is echt perfect voor het opnemen van teleconferenties en online meetings! Ik kan mijn scherm opnemen in HD en de video’s naar verschillende soorten bestanden omzetten. iFun Screen Recorder is sterk aan te raden!
							<p>—Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							Hallo! Uw fantastische gratis screen recorder heeft me verrast. Ik kan al mijn waardevolle momenten opnemen met iFun Screen Recorder, ik gebruik het vooral voor livestreams opnemen. Mijn opnames zijn van extreem goede kwaliteit. Ik kan ze opslaan en direct naar mijn vrienden sturen. In het begin was ik niet zo zeker van de software, maar de resultaten zijn geweldig!
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
			<h3 class="screen-title">Waarom IObit?</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">Cijfers liegen niet</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500</h3>
					Miljoen <br />Downloads
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3 style="margin-bottom: 5px;">1,5</h3>
					Miljoen <br/>Pagina <br/>weergaven
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>200.000</h3>
					Dagelijkse gebruikers
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					Landen en Territoria
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					Jaar Ervaring
				</div>
			</div>
		</div>
		
	</div>
	<div class="wrapper" style="background-color: #F2F2F2; border-top: #cecece 1px solid;">
		<div class="content backMoney">
			<p >Betaalmethoden<img src="<?php echo getStaticUrl('images/foot-icon1.png')?>"></p>
			<p >Veilig Betalen<img src="<?php echo getStaticUrl('images/foot-icon2.png')?>"></p>
			<p >Niet-goed-geld-terug<img src="<?php echo getStaticUrl('images/foot-icon3.png')?>"></p>
			<p >Directe Levering<img src="<?php echo getStaticUrl('images/foot-icon4.png')?>"></p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
				Opmerkingen:<br />
				1.IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.<br />
				2.Resultaten met betrekking tot verbeteringen in prestaties zijn afhankelijk van het systeem.
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; font-weight: 500;">Copyright © 2005 - 2021 IObit. Alle Rechten Voorbehouden</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label70"></div>
			<div class="font-layer">
				<ul>
					<li class="active">1 Jaar / 1 PC <span>-40%</span></li>
					<li class="">Levenslang  / 1 PC </li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd style="display: block;">
						<div class="now">
							<span>€</span>
							<h3>29<i>99</i></h3>
						</div>
						<div class="old">
							<span>€</span>
							<h3>49<i>99</i></h3>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr-1y-purchase2103-nl')" href="https://www.iobit.com/buy.php?product=nl-isr11y1pc2999&ref=nl_isr11y1pc2999purchase2103<?= $refStr; ?>&refs=nl_purchase_isr">Bestel Nu</a>
					</dd>
					<dd>
						<div class="now">
							<span>€</span>
							<h3>49<i>99</i></h3>
						</div>
						<div class="old">
							<span>€</span>
							<h3>79<i>99</i></h3>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr-lf-purchase2103-nl')" href="https://www.iobit.com/buy.php?product=nl-isr1lf1pc4999&ref=nl_isr1lf1pc4999purchase2103<?= $refStr; ?>&refs=nl_purchase_isr">Bestel Nu</a>
					</dd>
				</dl>
				<p>Schiet op, nog maar <span class="countNum">50</span> over!</p>
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