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
	$c_name = 'nliujune_p' . $date;
	$c_name_t='nliujune_t' . $date;
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
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Exclusieve Voorverkoopkorting op IObit Uninstaller PRO</title>
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
				<a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
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
					<h1 data-name="default">Exclusieve Voorverkoop</h1>
					<h2 data-name="default">De Krachtigste Uninstaller, voor deze Exclusieve Prijs!</h2>
					<div class="number" data-name="default">
						Nog 
						<div id="reduce" class="reduceNum">
							<div class="listbox"><span class="list"><b>5</b></span></div>
							<div class="listbox"><span class="list"><b>0</b></span></div>
						</div>
						over
						<div class="bar">
							<span></span>
						</div>
					</div>
					<div class="price" data-name="default">
						<strong>€<big>14</big>,99</strong> <del>€29,99</del>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=nl-iu10preorder1499&ref=nl_iu10preorderofficial1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=purchase_iu"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10preorderofficial-nl');">
						  Bestel Nu
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
			<h2>Verwijder Alles Waar U Vanaf Wilt</h2>
			<dl class="first" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>Plug-ins</h3>
					<p>Overbodige Plug-ins<br> Adverterende Plug-ins<br> Schadelijke Plug-ins</p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>Programma’s</h3>
					<p>
						Overbodige programma’s<br> Hardnekkige programma’s<br> Gebundelde programma’s
					</p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>Windows Apps</h3>
					<p>
						Overbodige Windows Apps<br>	Voorgeïnstalleerde Windows Apps
					</p>
				</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/intro-img.png')?>" alt="" class="img-box" data-name="default">
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature" data-name="animation">
		<div class="wrapper">
			<h2>Complete Verwijdering</h2>
			<div class="img-box" data-name="default">
			 	<div class="list01">
			 		<span class="button">Deïnstalleren</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Antivirus Software</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Antivirus Software aan het Deïnstalleren</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>U heeft succesvol <strong>0</strong> programma gedeïnstalleerd,<br> met de volgende details:</p>
			 		<ul>
			 			<li>Verwijderde register items: <strong>0</strong></li>
			 			<li>Verwijderde bestanden: <span><strong>0</strong>.<strong>0</strong></span>MB</li>
			 			<li>Verwijderde geplande taken: <strong>0</strong></li>
			 			<li>Verwijderde services: <strong>0</strong></li>
			 			<li>Verwijderde gelogde items: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			</div>
			<div class="message">
				<dl data-name="default" class="one">
					<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
					<dd>
						<h3>Registreer Wijzigingen</h3>
						<p>Registreer systeemwijzigingen bij nieuwe installaties, om volledig herstel bij deïnstallatie te garanderen.</p>
					</dd>
				</dl>
				<dl data-name="default" class="two">
					<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
					<dd>
						<h3>Krachtige Deïnstallatie</h3>
						<p>Verwijder in 1 klik meerdere programma’s, zelfs antivirus software die op geen enkele andere manier te verwijderen is.</p>
					</dd>
				</dl>
				<dl data-name="default" class="three">
					<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
					<dd>
						<h3>Restanten Wissen</h3>
						<p>Wis automatisch restanten van verwijderde programma’s, zelfs van programma’s die op andere manieren verwijderd zijn.</p>
					</dd>
				</dl>
			</div> 
		</div>
	</div>
	<!-- feature end -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<h2>Andere Nuttige Functies</h2>
			<dl data-name="default" class="one">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Update Software</h3>
		 			<p>Update alle verouderde software in 1 klik.</p>
		 		</dd>
			</dl>
			<dl class="center" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Blokkeer Meldingen</h3>
		 			<p>Word nooit meer gestoord door websites die meldingen geven tijdens het browsen. </p>
		 		</dd>
			</dl>
			<dl data-name="default" class="three">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Automatisch Updaten</h3>
		 			<p>Update IObit Uninstaller automatisch naar de laatste versie voor de beste functionaliteit.</p>
		 		</dd>
			</dl>
		</div>
	</div>
	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Kies de betrouwbaarste deïnstallatiesoftware</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>50 miljoen+</h3>
					<p>Downloads</p>
				</dd>
			</dl>
			<dl class="center">
				<dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>4.5+</h3>
					<p>Gebruikersoordeel</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>Media Aanbevelingen</p>
				</dd>
			</dl>
			<div class="review-box">
			  <div class="box">
			    <h3>Klantbeoordeling</h3>
			    <p>Ik gebruik IObit Uninstaller al heel lang, en ik hou ervan. Het is heel grondig en nu zelfs nog beter. Ik ben heel tevreden en kan niet meer zonder. Als je het nog niet gebruikt, moet je het zeker proberen. Het is nu 100% beter dan een jaar geleden. Het ruimt alle rotzooi uit het register op en dat doet het geweldig.</p>
			  </div>
			  <div class="box">
			    <h3>Klantbeoordeling</h3>
			    <p>Dit programma bespaart me een hoop geld. Voordat ik het gebruikte was mijn computer heel traag. Ik kon er niets meer mee. Dankzij dit programma, is mijn computer weer hartstikke snel. Dankzij dit programma hoef ik geen nieuwe computer te kopen. Heel erg bedankt, IObit! I love you.</p>
			  </div>
			  <div class="box active">
			    <h3>Media recensie</h3>
			    <p>"Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen."</p>
			  </div>
			  <div class="box">
			    <h3>Klantbeoordeling</h3>
			    <p>Ik heb in het verleden meerdere uninstallers gebruikt, maar zodra ik IObit gebruikte (sinds versie 7.0), wilde ik nooit meer een ander programma. De interface is zeer gebruiksvriendelijk en doet wat het doen moet met indrukwekkende perfectie. Het verschoont automatisch het register, dat anders helemaal dichtslibt, en draagt zo bij aan de gezondheid van de PC. De bundleware dectectie en verwijdering zijn super en ongeëvenaard door andere software.</p>
			  </div>
			  <div class="box">
			    <h3>Klantbeoordeling</h3>
			    <p>IObit Uninstaller detecteert plug-ins in my browsers waarvan ik niet eens wist dat ze bestonden. Het opschonen van restbestanden is heel goed; er blijven geen nutteloze gegevens achter. Mijn hele computer werkt daardoor beter. Het is een handig en gebruiksvriendelijk programma; ik beveel het al mijn vrienden aan.</p>
			  </div>
			</div>
			<ul>
			  <li>
			    <span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
			    <p>Ivan White</p>
			  </li>
			  <li>
			    <span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
			    <p> Ali Tekin</p>
			  </li>
			  <li class="active">
			    <span><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></span>
			    <p>MakeUseOf</p>
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
			<h2>Wereldwijde Awards</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Opmerking: </dt>
				<dd>
					U kunt direct na de bestelling aan de slag met de RC versie van IObit Uninstaller 10 PRO. Deze versie bevat vrijwel alle functies van de definitieve versie. Bij de officiële lancering van IObit Uninstaller 10 PRO, laten we u weten dat u kunt updaten naar de definitieve versie.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
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
  			Nog 
  			<div id="fReduce" class="reduceNum">
  				<div class="listbox"><span class="list"><b>5</b></span></div>
  				<div class="listbox"><span class="list"><b>0</b></span></div>
  			</div>
  			van de 200 over
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