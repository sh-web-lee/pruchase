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
	$c_name = 'dkiujune_p' . $date;
	$c_name_t='dkiujune_t' . $date;
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
<html lang="dk">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Betal 0 kr. For at få den nyeste IObit Uninstaller PRO</title>
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
				<a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">
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
					<h1 data-name="default">Velkommen til vores forsalg</h1>
					<h2 data-name="default">0 kr. for det bedste afinstalleringsværktøj du kan få</h2>
					<div class="number" data-name="default">
						<div id="reduce" class="reduceNum">
							<div class="listbox"><span class="list"><b>5</b></span></div>
							<div class="listbox"><span class="list"><b>0</b></span></div>
						</div>
            stk. tilbage
						<div class="bar">
							<span></span>
						</div>
					</div>
					<div class="price" data-name="default">
						<strong>0 kr. <sup>*</sup></strong>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=dk-iu10preorder&ref=dk_iu10preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_iu"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10preorderofficial-dk');">
              Forudbestil nu
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
			<h2>Afinstaller alt der er uønsket</h2>
			<dl class="first" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
          <h3>Plug-ins</h3>
          <p>
            Ubrugelige Plug-ins <br>
            Annoncebaserede Plug-ins <br>
            Ondsindede Plug-ins
          </p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
          <h3>Programmer</h3>
          <p>
            Ubrugelige programmer <br>
            Stædige programmer <br>
            Bundled programmer
          </p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>Windows App</h3>
					<p>
            Ubrugelige Windows Apps <br>
            Standard Windows Apps
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
			<h2>Afninstaller alt fuldstændigt</h2>
			 <div class="img-box" data-name="default">
			 	<div class="list01">
			 		<span class="button">Uninstall</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Antivirus Software</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Uninstalling Antivirus Software</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>Du har succesfuldt afinstalleret <strong>0</strong> programmer med <br> følgende detaljer: </p>
			 		<ul>
			 			<li>Slettede poster i registreringsdatabasen: <strong>0</strong></li>
			 			<li>Slettede filer: <span><strong>0</strong>.<strong>0</strong></span>MB</li>
			 			<li>Slettede skemalagte opgaver: <strong>0</strong></li>
			 			<li>Slettede systemtjenester: <strong>0</strong></li>
			 			<li>Slettede logfiler: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			 </div>
			 <div class="message">
			 	<dl data-name="default" class="one">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Gem ændringer</h3>
			 			<p>Gem systemændringer ved nyligt installerede programmer og garanter grundig afinstallering i fremtiden.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="two">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Grundig afinstallering</h3>
			 			<p>Et klik for at afinstallere uønskede programmer i batch, inklusiv antivirus software som nægter at blive fjernet.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="three">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Ryd rester</h3>
			 			<p>Ryd rester af afinstallerede programmer automatisk, selv dem der er efterladt ved afinstallering med andre værktøjer.</p>
			 		</dd>
			 	</dl>
			 </div>
		</div>
	</div>
	<!-- feature end -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<h2>Andre funktioner du kan få glæde af</h2>
			<dl data-name="default" class="one">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Opdater Software</h3>
		 			<p>Opdater al forældet software med et klik. </p>
		 		</dd>
			</dl>
			<dl class="center" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Bloker Notifikationer</h3>
		 			<p>Bliv ikke forstyrret af andre sider, når du surfer online. </p>
		 		</dd>
			</dl>
			<dl data-name="default" class="three">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Opdater automatisk</h3>
		 			<p>Opdater automatisk til den seneste version og få en hurtigere og grundigere rensning.</p>
		 		</dd>
			</dl>
		</div>
	</div>

	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>En pålidelig Uninstaller</h2>
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
					<p>I brugervurdering</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>Media-anbefalinger</p>
				</dd>
			</dl>
			<div class="review-box">
				<div class="box">
					<h3>Brugeranmeldelser</h3>
					<p>"IObit Uninstaller har udviklet sig markant og det er fantastisk og virker effektivt og nu er det endnu bedre. Jeg er super tilfreds med det og vil ikke være foruden. Er du endnu ikke en bruger, kan du prøve det, det er 100% bedre i dag end for et år siden. Det renser for alle de ekstra junkfiler der er i databasen."</p>
				</div>
				<div class="box">
					<h3>Brugeranmeldelser</h3>
					<p>"Dette program har sparet mig penge. Før jeg brugte dette program, var min computer altid langsom. Jeg kunne ikke lave noget på den, men nu virker den bare. Takket være dette program, blev min computer super hurtig. Jeg sparede alt med det program. Tak til IObit, I er fantastiske. "</p>
				</div>
				<div class="box active">
					<h3>Medieanmeldelser</h3>
					<p>"Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc. Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde."</p>
				</div>
				<div class="box">
					<h3>Brugeranmeldelser</h3>
					<p>"Jeg har tidligere prøvet flere forskellige uninstallers, men da jeg først startede med at bruge IObit version 7.0 har jeg ikke brugt andet siden. Det har en interface, som er nem at navigere og løser de opgaver det er designet til til perfektion. Det rydder op i databasen automatisk, som ellers bliver oversvømmet med restfiler og holder derved computeren stabil. Det er i stand til at identificere bundleware og fjerne dem, hvilket er en fantastisk uovertruffen funktion. "</p>
				</div>
        <div class="box">
          <h3>Brugeranmeldelser</h3>
          <p>"IObit Uninstaller finder plugins i min browser som jeg ikke anede eksisterede. Oprydningen af overflødige filer er mega god, den efterlader ingen ubrugelige data efter afinstallering af software. Det påminder mig om tilgængelige opdateringer til alle mine programmer. Samlet set er min computer blevet langt forbedret takket være dette. Programmet er bekvemt at bruge og jeg vil gerne anbefale det til mine venner. "</p>
        </div>
			</div>
			<ul>
				<li>
					<span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
					<p>Ivan White</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt="Ali Tekin"></span>
					<p>Ali Tekin</p>
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
			<h2>Verdensomspændende priser</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Bemærk:</dt>
				<dd>
          *.Efter endt 30 dages gratis prøveperiode vil dit betalingskort eller PayPal-konto debiteres med 159 kr. automatisk. Denne 60% rabat fra originalprisen 399 kr. gælder kun for forudbestillinger!
				</dd>
				<dd>
          *.Er du utilfreds, kan du annullere din ordre inden for 30 dage uden gebyr.
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
	  		<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
				IObit Uninstaller 10
	  	</div>
  		<div class="number fl">
  			<div id="fReduce" class="reduceNum">
  				<div class="listbox"><span class="list"><b>5</b></span></div>
  				<div class="listbox"><span class="list"><b>0</b></span></div>
  			</div>
        stk. tilgængelige ud af 500 stk.
  		</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
</body>
</html>