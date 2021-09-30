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
	$c_name = 'apr2021sv' . $date;
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
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spara 40% rabatt på iFun Screen Recorder -IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="robots" content="noindex,nofollow">
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
			<a class="logo" href="https://www.iobit.com/sv/index.php"></a>
			<div class="banner-title">
				<h1>Specialerbjudande för Den Nya Versionen</h1>
				<p>Anpassa och skapa videor av hög kvalitet utan begränsningar!</p>
			</div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label70"></div>
				<div class="banner-option">
					<p class="banner-count"><span class="active countNum">50<i></i></span> platser kvar nu!</p>
					<ul>
						<li class="custom-radio">
							<label>Livstid / 1 PC  <i>-30%</i></label>
							<div class="sel-list">
								<p>1 Licens på 1 Dator för Livstid</p>
								<p>Ta bort det standardvattenmärket</p>
								<p>Toppkvalitets Inspelning</p>
								<p>Smidig Inspelning utan Fördröjning</p>
							</div>
						</li>
						<li class="custom-radio active">
							<span class="like"></span>
							<label>1 År / 1 PC <i>-40%</i></label>
							<div class="sel-list">
								<p>1 Licens på 1 Dator för 1 år</p>
								<p>Ta bort det standardvattenmärket</p>
								<p>Toppkvalitets Inspelning</p>
								<p>Smidig Inspelning utan Fördröjning</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd>
							<div class="now">
							  <h3>549</h3>
								<span>kr</span>
							</div>
							<div class="old">
								<h3>799</h3>
								<span>kr</span>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2103-sv')  " href="https://www.iobit.com/buy.php?product=sv-isr1lf1pc549&ref=sv_isr1lf1pc549purchase2103<?= $refStr; ?>&refs=sv_purchase_isr">Köp Nu</a>
							</div>
						</dd>
						<dd style="display: block;">
						<div class="now">
								<h3>299</h3>
								<span>kr</span>
							</div>
							<div class="old">
								<h3>499</h3>
								<span>kr</span>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-sv')" href="https://www.iobit.com/buy.php?product=sv-isr11pc299&ref=sv_isr11pc299purchase2103<?= $refStr; ?>&refs=sv_purchase_isr">Köp Nu</a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 80px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO</span><br />
			Mer än bara inspelning</h3>
			<div class="screen2-cont" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" />
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>100% Flexibilitet med Vattenstämpel</h3>
					<span>Endast för PRO-version</span>
					<p>Ta bort det standardvattenmärket. </p>
					<p>Anpassa videon med din egen vattenstämpel.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/timeout.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="date"></i>schemalägg inspelning</h3>
					<span>Endast för PRO-version</span>
					<p>Låter dig skapa schemalagda uppgifter genom att ställa in en viss tid för att aktivera och sluta inspelning av skärm och webbkamera.</p>
					<p>Du kan skapa flera automatiska inspelningsuppgifter. I det här fallet spelas föreläsningar, klasser och direktsändningar in utan att behöva stanna framför dator.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fl">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/audio.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="audio"></i>Separera Ljud från Video</h3>
					<span>Endast för PRO-version</span>
					<p>iFun Screen Recorder PRO hjälper dig i fall där du bara är intresserad av en videomusik på YouTube eller bara vill spela in ljud från din dator.</p>
					<p>Stödjer dig att extrahera ljud från videor efter inspelning. Du kan separera ljudet från videorna och spara det individuellt.</p>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont4 fl">
					<h3><i class="rec"></i>HD-inspelning utan dröjsmål</h3>
					<span>Endast för PRO-version</span>
					<p>Den avancerade GPU-accelerationstekniken låter dig spela in spel utan FPS-droppar och ha skarpare videor med högupplöst upp till 4K.</p>
					<p>För spelare är iFun Screen Recoder den bästa inspelaren för att skapa matcher eller spelguider och dela dem på Youtube.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">Se vad PRO edition kan göra för dig:</h3>
			<div class="versionTable">
				<div class="versionDesc">
					
					<ul><li><i class="descIcon time"></i>Obegränsad Inspelningstid</li></ul>
					<ul><li><i class="descIcon cut"></i>Anpassad Redigering</li></ul>
					<ul><li><i class="descIcon remove"></i>Ta bort det standardvattenmärket</li></ul>
					<ul><li><i class="descIcon seal"></i>Lägg till Personlig Vattenstämpel</li></ul>
					<ul><li><i class="descIcon date"></i>Skapa Schemalagda Inspelningsuppgifter</li></ul>
					<ul><li><i class="descIcon audio"></i>Extrahera Ljud och Spara Individuellt</li></ul>
					<ul><li><i class="descIcon game"></i>Smidigare inspelning av gameplay med  <br>  upp till<span>30%</span> högre FPS-optimering* <i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Snabbare och ingen eftersläpande inspelning medupp till <span>50%</span> snabbare hårdvaruacceleration* <i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Kvalitet för Optimal Video upp till <span>30%</span> högre upplösning* <i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon update"></i>Automatisk Uppdatering</li></ul>
					<ul><li><i class="descIcon spt24"></i>24/7 Gratis Teknisk Stöd</li></ul>
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
							<label for="option3">1 År </label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4"> Livstid</label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-sv')" href="https://www.iobit.com/buy.php?product=sv-isr11pc299&ref=sv_isr11pc299purchase2103<?= $refStr; ?>&refs=sv_purchase_isr" style="display: block;">Köp Nu – 299kr</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2103-sv')  " href="https://www.iobit.com/buy.php?product=sv-isr1lf1pc549&ref=sv_isr1lf1pc549purchase2103<?= $refStr; ?>&refs=sv_purchase_isr">Köp Nu – 549kr</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen4" >
		<div class="content">
			<h3 class="screen-title">Vi är stolta över att litas av</h3>
			<div class="media">
				<p>Eftersom IObit litas och tilldelas av dessa världsklassmedier i mer än ett decennium är det helt rätt du borde äga det.</p>
				<img src="<?php echo getStaticUrl('images/media.png')?>" />
			</div>
			<h3 class="screen-title" style="margin-top: 160px;">Vi lyssnar alltid på våra användare</h3>
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
						Hittills så bra. IObit skärminspelare är verkligen ett komplett verktyg som är lätt att använda. Jag visste inte hur man spelar in skärm på Windows, men med denna programvara är det enkelt. Med ISR kan jag ta skärmdumpar medan jag spelar in skärm. Sedan laddar jag upp den till min Instagram och fångar massiv uppmärksamhet. Denna kraftfulla skärminspelare har hjälpt till att driva mitt företag framåt. 
							<p>—Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
						Jag stötte på den här fria skärminspelaren och blev ett fan av den för sina enkla redigeringsfunktioner. Eftersom jag gillar att spela in driftsprocessen för att hjälpa människor att lösa datorproblem, och denna inspelningsprogramvara gör att jag kan spela in med ljud så att jag kan ladda upp direkt den redigerade videon till YouTube efter inspelningen. Den kombinerar inspelning och redigering, vilket är väldigt bekvämt för yutuber som jag som vill dela handledning videor!
							<p>—Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
						Som sekreterare måste jag ofta använda skärminspelningsprogramvara. Det var svårt att hitta en idealisk gratis skärminspelare för mig, men Iobit kärminspelare råkar vara ett så perfekt verktyg för video-telekonferensinspelning och hjälper mig mycket! Jag kan spela in HD skärm med den och konvertera video till olika format. Jag rekommenderar ISR starkt!
							<p>—Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
						Hej! Din fantastiska gratis skärminspelare överraskar mig. Jag kan spela in alla dessa värdefulla och underbara stunder med IObit Inspelare, särskilt för livevideor. De videorna som jag spelar in med ISR är extremt högkvalitativa. Jag kan spara och dela dem med mina vänner. Först var jag inte säker på den programvaran, men resultaten är fantastiska. Det är lysande!
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
			<h3 class="screen-title">Varför IObit？</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">Siffrorna ljuger aldrig</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500M</h3>
					Nedladdningar
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>1.5M</h3>
					Sidvisningar
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>200K</h3>
					Tusen Nöjda Användare
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					Länder
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					Års Erfarenhet
				</div>
			</div>
		</div>
		
	</div>
	<div class="wrapper" style="background-color: #F2F2F2; border-top: #cecece 1px solid;">
		<div class="content backMoney">
			<p ><img src="<?php echo getStaticUrl('images/foot-icon1.png')?>">Accepterade Betalningssätt</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon2.png')?>">Säker betalning</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon3.png')?>">Pengarna- tillbaka-garanti</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon4.png')?>">Omedelbar Leverans</p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
			Anmärkningar:<br />
				 1.*Sådana kampanjprogram kan ändras utan föregående meddelande, då och då efter vårt eget gottfinnande.<br />
				 2.*De slutliga effekterna kan variera beroende på olika system eller datorer.
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; font-weight: 500;">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label70"></div>
			<div class="font-layer">
				<ul>
					<li class="active">1 År / 1 PC     <span>-40%</span></li>
					<li class="">Livstid / 1 PC   <span>-30%</span></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd style="display: block;">
						<div class="now">
							<h3>299</h3>
							<span>kr</span>
						</div>
						<div class="old">
							<h3>499</h3>
							<span>kr</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-sv')" href="https://www.iobit.com/buy.php?product=sv-isr11pc299&ref=sv_ isr11pc299purchase2103<?= $refStr; ?>&refs=sv_purchase_isr">Köp Nu</a>
					</dd>
					<dd>
						<div class="now">
							<h3>549</h3>
							<span>kr</span>
						</div>
						<div class="old">
							<h3>799</h3>
							<span>kr</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2103-sv')  " href="https://www.iobit.com/buy.php?product=sv-isr1lf1pc549&ref=sv_isr1lf1pc549purchase2103<?= $refStr; ?>&refs=sv_purchase_isr">Köp Nu</a>
					</dd>
				</dl>
				<p>Skynda dig, <span class="countNum">50</span>  lämnade idag!</p>
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