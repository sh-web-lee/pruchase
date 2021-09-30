<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'isuofficial_p' . $date;
	$c_name_t='isuofficial_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(68,78);
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

$viewNum=rand(115,125);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Alleen in de Voorverkoop IObit Software Updater 3 voor de laagste prijs!</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank"></a>
			<div class="right-message">
				<h1>Neem deel aan onze <strong>VOORVERKOOP </strong></h1>
					<div class="number">
						slechts
						<div id="topNum" class="giftNum">
              <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>
		          <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>

            </div>
            over, <strong class="viewNum"><?php echo $viewNum;?></strong> bekijken deze deal
					</div>
					<p class="price">
						<span><strong>€<b>11</b>,99</strong> <del>€29,99</del></span>
						<a href="https://www.iobit.com/buy.php?product=nl-isu3preorder1199&ref=nl_isu3preorder1199<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-nl');" class="buybtn">Bestel Nu</a>
					</p>
				</div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>De Ideale Software Updater Voor U, dankzij:</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
				<dd>
					<strong>Grote Software Database</strong>
					<p>Kan honderden programma’s updaten, waaronder<br> de meest gebruikte software.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
				<dd>
					<strong>Updaten binnen IObit Software Updater</strong>
					<p>Werk eenvoudig verouderde programma’s bij, zonder webpagina’s te bezoeken. </p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
				<dd>
					<strong>Automatisch Updaten</strong>
					<p>Download en installeer automatisch updates op een gepland moment.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
				<dd>
					<strong>Blijf Veilig</strong>
					<p>Update programma’s om kwetsbaarheden die hackers kunnen misbruiken te verhelpen.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
				<dd>
					<strong>Schone Updates</strong>
					<p>Zonder installer, taakbalken of bundleware achter te laten.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
				<dd>
					<strong>Aanbevolen Software</strong>
					<p>Download snel en gemakkelijk alle populaire software zonder websites af te struinen.</p>
				</dd>
			</dl>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>En voor de Perfecte Gebruikservaring...</h2>
			<ul class="message-list">
				<li class="list01 active"><i></i> Verwijder Automatisch Installers</li>
				<li class="list02"><i></i> Maak Automatisch Herstelpunten Aan</li>
				<li class="list03"><i></i> Negeer Update Optie</li>
				<li class="list04"><i></i> Wijzig Uw Auto-update Lijst</li>
				<li class="list05"><i></i> Geen Gesponsorde Advertenties</li>
			</ul>
			<div class="img-list">
				<div class="img-box">
					<ul class="box">
						<li data-num="0"><img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt=""/></li>
						<li data-num="1"><img src="<?php echo getStaticUrl('images/feature-list02.png')?>" alt=""/></li>
						<li data-num="2"><img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt=""/></li>
						<li data-num="3"><img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt=""/></li>
						<li data-num="4"><img src="<?php echo getStaticUrl('images/feature-list05.png')?>" alt=""/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
		<h2>Wat Vinden Anderen?</h2>
		<div class="review-box">
			<a href="javascript::" class="prev"></a>
			<div class="content">
				<div class="roll">
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""/></dt>
							<dd>
								Mediabeoordeling
								<strong>softpedia</strong>
							</dd>
						</dl>
						<p>IObit Software Updater is gemaakt om het updaten van alle programma’s op uw computer simpel te maken. Het kan automatisch controleren of er nieuwe versies zijn en ze automatisch installeren, zelfs zonder dat de gebruiker iets hoeft te doen. Bovendien helpt het om populaire programma’s met verschillende doeleinden te downloaden en te installeren.</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Gebruikerservaringen
								<strong>Nicolae Mocioc</strong>
							</dd>
						</dl>
						<p>Ik heb IObit Software Updater op aanraden van een vriend, en ik ben erg tevreden over de snelheid en eenvoud die ook voldoen aan de wensen van een beginnende computergebruiker zoals ik. Ik ben blij dat ik door IObit Software Updater PRO aan te schaffen niet alleen een superprogramma heb, maar ook bijdraag aan IObit.</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Gebruikerservaringen
								<strong>Joshua Irving</strong>
							</dd>
						</dl>
						<p>De automatische updates zijn echt top! Het is snel en efficiënt. Het programma maakt ook een herstelpunt aan voor de installatie, gewoon voor het geval dat. Het is ook fijn dat het updates direct van de websites haalt, zodat ik niet meer verschillende websites hoef te openen. Kortom, een van de beste tools die ik ken!</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Gebruikerservaringen
								<strong>Nico Bremmer</strong>
							</dd>
						</dl>
						<p>Het is een geweldig software update programma! Het is gebruiksvriendelijk en simpel. Bovendien duidelijk, soepel en opvallend snel. Het ontwerp is ook overzichtelijk en modern en het is handig dat je zowel de huidige als de nieuwste versie van de programma’s kunt zien. Ook de tips voor nieuwe programma’s zijn leuk.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- bottom start -->
	<div class="awards">
		<h2>Wereldwijde Awards</h2>
		<p>Dankzij de waardering en prijzen van internationale media, weet u dat u de juiste software updater heeft.</p>
		<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
	</div>
	<div class="bottom">
		<div class="wrapper">
			<p class="annotation">
				Opmerking: <br> *U kunt direct na de bestelling aan de slag met de RC versie van IObit Software Updater 3 PRO. Bij de officiële lancering van IObit Software Updater 3,<br> laten we u weten dat u kunt updaten naar de definitieve versie.
				<br>*IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
			</p>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer nomal">
		<div class="wrapper clearfix">
			<img src="<?php echo getStaticUrl('images/fl-isu-box.png')?>" class="img-box" alt=""/>
			<div class="number">
				slechts 
				<div class="giftNum">
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>

        </div>
        over, <strong class="viewNum"><?php echo $viewNum;?></strong>  bekijken deze deal
			</div>
			<p class="price">
				<span> <strong>€<b>11</b>,99</strong> <del>€29,99</del></span>
				<a href="https://www.iobit.com/buy.php?product=nl-isu3preorder1199&ref=nl_isu3preorder1199<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-nl');" class="buybtn">Bestel Nu</a>
			</p>
		</div>
	</div>
	<!-- floatlayer end -->
	<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>