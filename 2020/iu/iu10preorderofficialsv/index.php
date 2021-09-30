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
	$c_name = 'sviujune_p' . $date;
	$c_name_t='sviujune_t' . $date;
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
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Betala 0 kr för att få den senaste versionen av IObit Uninstaller PRO</title>
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
				<a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
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
					<h1 data-name="default">Välkommen till vårt Förköp </h1>
					<h2 data-name="default">0kr för att få den bästa avinstalleraren som du kan vända dig till</h2>
					<div class="number" data-name="default">
						<div id="reduce" class="reduceNum">
							<div class="listbox"><span class="list"><b>5</b></span></div>
							<div class="listbox"><span class="list"><b>0</b></span></div>
						</div>
            kvar nu
						<div class="bar">
							<span></span>
						</div>
					</div>
					<div class="price" data-name="default">
						<strong>0kr <sup>*</sup></strong>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=sv-iu10preorder&ref=sv_iu10preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=sv_purchase_iu"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10preorderofficial-sv');">
              Förbeställ Nu
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
			<h2>Avinstallera Allt Oönskat </h2>
			<dl class="first" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>Insticksprogram</h3>
					<p>
            Onyttiga Insticksprogram <br>
            Ad-baserade Insticksprogram <br>
            Skadliga Insticksprogram
					</p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>Program</h3>
					<p>
            Onyttiga program <br>
            Envisa program <br>
            Medföljande program
					</p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>Windows Program</h3>
					<p>
            Onyttiga Windows Program <br>
            Standard Windows Program
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
			<h2>Avinstallera Allt Helt </h2>
			 <div class="img-box" data-name="default">
			 	<div class="list01">
			 		<span class="button">Avinstallera</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Antivirus Software</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Avinstallera Antivirusprogram</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>Du har avinstallerat <strong>0</strong> program med information nedan:</p>
			 		<ul>
			 			<li>Registerposter som raderats: <strong>0</strong></li>
			 			<li>filer som raderats: <span><strong>0</strong>.<strong>0</strong></span>MB</li>
			 			<li>Schemalagda aktiviteter som raderats: <strong>0</strong></li>
			 			<li>Systemtjänster som raderats: <strong>0</strong></li>
			 			<li>Loggade objekt som raderats: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			 </div>
			 <div class="message">
			 	<dl data-name="default" class="one">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Spela in Ändringar</h3>
			 			<p>Spela in systemändringar när du installerar ett program nyligen för att garantera ytterligare fullständig avinstallation.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="two">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Kraftfull Avinstallation</h3>
			 			<p>1 klicka för att avinstallera oönskade program i batch, inklusive antivirusprogram som vägrar tas bort. </p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="three">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Rengöra rester</h3>
			 			<p>Rengör automatiskt rester av avinstallerade program, även dem som finns kvar efter avinstallation med andra verktyg. </p>
			 		</dd>
			 	</dl>
			 </div>
		</div>
	</div>
	<!-- feature end -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<h2>Andra Funktioner som Du Kan Njuta Av </h2>
			<dl data-name="default" class="one">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Uppdatera Mjukvara</h3>
		 			<p>Uppdatera alla föråldrade programvarorna tillsammans med 1 klick.</p>
		 		</dd>
			</dl>
			<dl class="center" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Block Meddelande</h3>
		 			<p>Avbryts aldrig av olika webbplatsaviseringar när du surfar på nätet.</p>
		 		</dd>
			</dl>
			<dl data-name="default" class="three">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Automatisk Uppdatering</h3>
		 			<p>Uppdatera automatiskt till den senaste versionen för snabbare och djupare rengöring.</p>
		 		</dd>
			</dl>
		</div>
	</div>
	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Det är en Förtroendevärd Avinstallerare</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>50M+</h3>
					<p>Nedladdningar</p>
				</dd>
			</dl>
			<dl class="center">
				<dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>4.5+</h3>
					<p>Användares betyg</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>Medier rekommendationer</p>
				</dd>
			</dl>
			<div class="review-box">
				<div class="box">
					<h3>Användaromdömen</h3>
					<p>"IObit Uninstaller är ett av de bästa programmen. Lätt att arbeta med, mycket snabb rengöring och djuprengöring. Den snabba rengöringen av plug-ins är också mycket bekväm. Stor sökning efter dubbletter som inte används mycket. Tack för er gästfrihet ni visat mig och min dator."</p>
				</div>
				<div class="box">
					<h3>Användaromdömen</h3>
					<p>"IObit Uninstaller blir bättre med varje uppdatering. Jag har använt den i mer än 3 år nu. Det går snabbt att ladda ner och har enkel UI. Några av de många funktioner som jag använder regelbundet är Batch Uninstall, Powerful Scan, File Shredder och Recently Installed som ger mig snabb åtkomst till ett program som jag just installerat som jag inte gillar eller inte funkar. Det är också lätt att styra startobjekt så att din dator bootar snabbare."</p>
				</div>
				<div class="box active">
					<h3>I media</h3>
					<p>"IObit Unistaller har ett användarvänligt gränssnitt och användare kan ladda ner det på ett ögonblick. Programmet kan kategoriseras till den bästa avinstalleraren och programmet tillåter användaren att avinstallera flera program samtidigt. Användare erbjuds även att genomföra en djup-skanning för att hitta rester. Prestandan är såpass bra att det är värt att behålla verktyget enbart för den saken."</p>
				</div>
				<div class="box">
					<h3>Användaromdömen</h3>
					<p>"IObit Uninstaller är förmodligen den bästa mjukvaran för att ta bort onödiga program från datorn. Till skillnad från den grundläggande Windows avinstalleraren tar detta program bort alla rester, som senare kan bromsa datorns prestanda. Jag har använt detta program under flera år och det har alltid hjälpt till att hålla min dator ren och snabb. Jag har rekommenderat detta program till några av mina vänner och skulle rekommendera det igen idag."</p>
				</div>
        <div class="box">
          <h3>Användaromdömen</h3>
          <p>"Uninstaller PRO är bara ett av fem av familjen IObits "underhållsprogram" jag har investerat i för min dator, ungefär som kockar investerar i sina knivar. Uninstaller är bra på att hitta rester av bit och byte som gömmer sig och tar upp diskutrymme och påverkar registret. Vid ett tidigare tillfälle gjorde jag en avinstallation av ett annat program med hjälp av den inbyggda avinstallationsfunktionen och det fungerade. Men Uninstaller PRO upptäckte att 35 filer hade lämnats kvar. Det enda jag behövde göra var att klicka på godkänn så var de borta. Jag rekommenderar starkt det här programmet och har köpt en licens för tre datorer. Supporten är artig och utmärkt."</p>
        </div>
			</div>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></span>
          <p>Áda Görtler</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></span>
          <p>Lovro Žužić</p>
        </li>
        <li class="active">
          <span><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></span>
          <p>MakeUseOf</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="JSergey Erlich"></span>
          <p>Sergey Erlich</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></span>
          <p>Joseph Yu</p>
        </li>
      </ul>
		</div>
	</div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>Världsomspännande</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Notera:</dt>
				<dd>
          *.I slutet av 30 dagars kostnadsfri provperiod debiteras ditt kreditkort eller PayPal-konto automatiskt 239kr. Denna 50% rabatt från det ursprungliga priset på 499kr är bonus endast för förköp!
				</dd>
				<dd>
          *.Om du inte är nöjd kan du avbryta beställningen inom 30 dagar utan att betala en avgift.
        </dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
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
  			of av 500 platser kvar nu
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