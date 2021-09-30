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
	$c_name = 'apr2021dk' . $date;
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
<html lang="dk">
<head>
<meta name="robots" content="noindex, nofollow"/>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Op til 50% rabat på iFun Screen Recorder PRO PRO – IObit</title>
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
			<a class="logo" href="https://www.iobit.com/dk/index.php"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>"/>
				<p>Ska bog tilpas videoer i høj kvalitet uden begrænsninger!</p>
			</div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label45"></div>
				<div class="banner-option">
					<p class="banner-count"><span class="active countNum">50<i></i></span>stk. tilbage</p>
					<ul>
						<li class="custom-radio active">
							<span class="like"></span>
							<label>Livstid / 1 PC<i>-50%</i></label>
							<div class="sel-list">
								<p>Gælder kun for den aktuelle version</p>
								<p>Slet / tilføj vandmærke</p>
								<p>Optagelse i højere kvalitet</p>
								<p>Optag problemfrit uden Lagging</p>
							</div>
						</li>
						<li class="custom-radio">
							
							<label>1 År / 1 PC<i>-45%</i></label>
							<div class="sel-list">
								<p>Licens til 1 PC gældende 1 år</p>
								<p>Slet / tilføj vandmærke</p>
								<p>Optagelse i højere kvalitet</p>
								<p>Problemfri optagelse uden Lagging</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd style="display: block;">
							<div class="now">
								<h3>399</h3>
								<span>kr.</span>
							</div>
							<div class="old">
								<h3>799</h3>
								<span>kr.</span>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isrlifetimepurchase<?= $refStr; ?>-dk');" href="https://www.iobit.com/buy.php?product=dk-isr1lifetime399&ref=dk_isr1lifetimesale399<?= $refStr; ?>&aff=&refs=dk_purchase_isr">Køb nu</a>
								
							</div>
						</dd>
						<dd>
							<div class="now">
								<h3>219</h3>
								<span>kr.</span>
							</div>
							<div class="old">
								<h3>399</h3>
								<span>kr.</span>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1yearpurchase<?= $refStr; ?>-dk');" href="https://www.iobit.com/buy.php?product=dk-isr11year219&ref=dk_isr11yearsale219<?= $refStr; ?>&aff=&refs=dk_purchase_isr">Køb nu</a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 80px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO PRO </span><br />Meget mere end skærmoptagelse</h3>
			<div class="screen2-cont" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" />
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Tilpasset vandmærke</h3>
					<span>Kun i PRO-versionen</span>
					<p>Du kan fjerne standard vandmærket inden du optager skærmen.</p>
					<p>Du kan tilføje dit eget vandmærke på dine videoer. Så dit originale indhold er beskyttet, og piratkopiering til fortjeneste undgås.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/timeout.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="date"></i>Skemalagt optagelse</h3>
					<span>Kun i PRO version</span>
					<p>Du kan oprette skemalagte optagelser ved at vælge specifikke tidspunkter til start og stop af skærm- samt webcamoptagelser.</p>
					<p>Du kan oprette flere automatiske optagelses-tasks. I dette eksempel kan forelæsninger, kurser og live streams optages uden du behøver være foran PC’en.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fl">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/audio.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="audio"></i>Separer lyd fra video</h3>
					<span>Kun i PRO version</span>
					<p>Med iFun Screen Recorder PRO kan du optage musik fra en YouTube-video eller optage lyd fra din PC.</p>
					<p>Understøtter adskillelse af lyd fra videoer efter optagelse. Du kan separere lyden fra videon og gemme dem hver for sig.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont4 fl">
					<h3><i class="rec"></i>Lag-fri HD-optagelse *</h3>
					<span>Kun i PRO version</span>
					<p>Avanceret GPU accelerationsteknologi gør det muligt at optage spil uden at gå på kompromis med FPS, og du kan lave 4K videoer i HD.</p>
					<p>For gamers er iFun Screen Recorder det bedste valg. Du kan optage højdepunkterne, lave spiltutorials og dele dem på Youtube.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">Sammenligning mellem FREE- og PRO-versionen</h3>
			<div class="versionTable">
				<div class="versionDesc">
					
					<ul><li><i class="descIcon time"></i>Ingen tidsbegrænsning på optagelser</li></ul>
					<ul><li><i class="descIcon cut"></i>Brugerdefineret redigering</li></ul>
					<ul><li><i class="descIcon remove"></i>Fjern vandmærke</li></ul>
					<ul><li><i class="descIcon seal"></i>Personligt vandmærke</li></ul>
					<ul><li><i class="descIcon date"></i>Opret skemalagte optagelses-tasks</li></ul>
					<ul><li><i class="descIcon audio"></i>Separer lyd fra video og gem dem adskilt</li></ul>
					<ul><li><i class="descIcon game"></i>Jævn gameplayoptagelse med op til <span>30%</span> højere FPS-optimering<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Hurtig optagelse uden forsinkelse, hardwareacceleration op til <span>50%</span><i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Optimal videokvalitet <i class="tableIcon up"></i> <p style="font-size: 12px;">(op til <span>30%</span> højere opløsning)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Automatisk opdatering</li></ul>
					<ul><li><i class="descIcon spt24"></i>Gratis teknisk support 24/7</li></ul>
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
							<label for="option3">1 År</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4">Livstid</label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1yearpurchase<?= $refStr; ?>-dk');" href="https://www.iobit.com/buy.php?product=dk-isr11year219&ref=dk_isr11yearsale219<?= $refStr; ?>&aff=&refs=dk_purchase_isr" style="display: block;">Køb nu-219kr.</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isrlifetimepurchase<?= $refStr; ?>-dk');" href="https://www.iobit.com/buy.php?product=dk-isr1lifetime399&ref=dk_isr1lifetimesale399<?= $refStr; ?>&aff=&refs=dk_purchase_isr">Køb nu-399kr.</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen4" >
		<div class="content">
			<h3 class="screen-title">Vi er stolte af at I har tillid til os</h3>
			<div class="media">
				<p>I mere end et årti er vi blevet anerkendt af disse medier i verdensklasse, IObit er det rette valg.</p>
				<img src="<?php echo getStaticUrl('images/media.png')?>" />
			</div>
			<h3 class="screen-title" style="margin-top: 180px;">Vi lytter altid til vores kunder og brugere</h3>
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
							Så langt så godt. iFun Screen Recorder PRO er virkelig et komplet værktøj, som er nemt at bruge. Jeg vidste ikke, hvordan man optog sin skærm på Windows, men med dette program er det super nemt. Jeg kan tage skærmbilleder under HD optagelse og tilføje underskrifter efter optagelserne. Efterfølgende kan jeg uploade til Instagram. Jeg bruger programmet til at promovere min virksomhed, og programmet er ganske gratis.
							<p>—Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Jeg stødte på den gratis skærmoptager og var med det samme glad for programmet og dets enkle redigeringsfunktioner. Jeg filmer løsninger til folk, der har problemer med deres computere, og dette program optager både lyd og billeder, som kan uploades til YouTube med det samme. Det kombinerer optagelse og redigering, hvilket er super praktisk for youtubere som mig selv, som laver tutorials!
							<p>—Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							Som sekretær har jeg tit brug for en skærmoptager. Det har været svært at finde et ideelt program, som var gratis, men iFun Screen Recorder PRO er helt perfekt til at optage videokonferencer og er i stand til at filme i HD, og videoen kan gemmes i mange formater. Anbefales varmt.
							<p>—Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							Hej! Jeres fantastiske skærmoptager har overrasket mig. Jeg kan optage alle de skønneste øjeblikke med iFun Screen Recorder PRO, især livevideoer. Videoerne optages i ekstremt høj kvalitet, og jeg kan gemme og dele dem med venner. I begyndelsen var jeg lidt usikker på programmet, men resultaterne er vildt gode. Genialt!
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
			<h3 class="screen-title">Hvorfor IObit</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">Tal lyver ikke</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500M</h3>
					Downloads
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>1.5M</h3>
					Sidevisninger
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>450M</h3>
					Tilfredse kunder
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					Lande
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					års erfaring
				</div>
			</div>
		</div>
		
	</div>
	<div class="wrapper">
		<div class="content backMoney">
			<p ><img src="<?php echo getStaticUrl('images/foot-icon1.png')?>">Vi tager imod:</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon2.png')?>">Sikker betaling</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon3.png')?>">Refunderingsgaranti</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon4.png')?>">Øjeblikkelig levering på Email</p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
				Bemærk:<br />
				1. *Vi forbeholder os retten til at ændre sådanne salgskampagner til hver en tid uden varsel.<br>
				2.&3. *Den endelige effekt kan variere alt efter system eller computer
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; color: #858899; font-weight: 500;">Copyright © 2005 - 2021 IObit. Alle rettigheder forbeholdes</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label45"></div>
			<div class="font-layer">
				<ul>
					<li class="">1 År / PC <span>-45%</span></li>
					<li class="active">Livstid / 1 PC <span>-50%</span></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd>
						<div class="now">
							<h3>219</h3>
							<span>kr.</span>
						</div>
						<div class="old">
							<h3>399</h3>
							<span>kr.</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1yearpurchase<?= $refStr; ?>-dk');" href="https://www.iobit.com/buy.php?product=dk-isr11year219&ref=dk_isr11yearsale219<?= $refStr; ?>&aff=&refs=dk_purchase_isr">Køb nu</a>
					</dd>
					<dd style="display: block;">
						<div class="now">
							<h3>399</h3>
							<span>kr.</span>
						</div>
						<div class="old">
							<h3>799</h3>
							<span>kr.</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isrlifetimepurchase<?= $refStr; ?>-dk');" href="https://www.iobit.com/buy.php?product=dk-isr1lifetime399&ref=dk_isr1lifetimesale399<?= $refStr; ?>&aff=&refs=dk_purchase_isr">Køb nu</a>
					</dd>
				</dl>
				<p>Kun <i class="countNum">50</i> stk. tilbage i dag!</p>
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