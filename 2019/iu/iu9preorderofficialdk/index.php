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
	$c_name = 'eniujune_p' . $date;
	$c_name_t='eniujune_t' . $date;
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
?>
<!DOCTYPE html>
<html lang="dk">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Betal 0 kr. for at få den nyeste IObit Uninstaller PRO</title>
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
			<a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>Det globale forsalg er live</h1>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<p>Afinstaller fuldstændigt uden at efterlade spor</p>
					<ul class="price clearfix">
						<li class="first">
							<strong><big>0</big>kr.<sup>*</sup></strong> <del>399 kr.</del>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"><b class="giftNum">50</b> enheder tilbage nu</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=dk-iu9preorder&ref=dk_iu9preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_iu"
	  			   		 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderofficial-dk');">
							  Forudbestil nu
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
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Hvad kan IObit Uninstaller 9 PRO gøre for dig?</h2>
			<div class="one clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-01.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h3><b>Afinstaller hurtigt</b></h3>
					<dl>
						<dt><h4>Stædig og Bundled Software  <span><em>Unik på markedet</em></span></h4></dt>
						<dd>
							Tving fjernelse af uønskede, bundled og stædige programmer, som ikke kan afinstalleres konventionelt.
						</dd>
					</dl>
					<dl>
						<dt><h4>Ondsindede Browser-udvidelser<span><em>Unik på markedet</em></span></h4></dt>
						<dd>
							Assisterer med at fjerne enhver uønsket browser-værktøjslinje, add-ons og udvidelser og fortæller dig, hvilke der er sikre at beholde på din PC.
						</dd>
					</dl>
					<dl>
						<dt><h4>Windows Apps</h4></dt>
						<dd>Hjælper dig med at fjerne Windows 10's nytteløse apps, som du ikke længere bruger.</dd>
					</dl>
				</div>
			</div>
			<div class="two clearfix">
				<div class="right fl">
					<h3><b>Renser grundigt</b></h3>
					<dl class="safe">
						<dt><h4>Ubrugelige programdata</h4></dt>
						<dd>
							Slet alle associerede filer, mapper og registreringer efter installering af et program.
						</dd>
					</dl>
					<dl>
						<dt><h4>Rester på PC’en  <span><em>Unik på markedet</em></span></h4></dt>
						<dd>Et klik for at skanne og fjerne resterende filer af allerede afinstallerede programmer, der blev afinstalleret uden brug af IObit Uninstaller. </dd>
					</dl>
					<dl>
						<dt><h4>Systemændringer med Installer</h4></dt>
						<dd>
							Identificer og ændr alle ændringer forårsager af afinstallationer og fjern alle filer, som programmet har ændret under dets installering.
						</dd>
					</dl>
				</div>
				<div class="left fr">
					<img src="<?php echo getStaticUrl('images/iu-screen-02.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Hvad er fordelene ved IObit Uninstaller 9 PRO?</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">√</i> Fjerner programmer og Windows apps i bundter</li>
						<li><i class="all-icons">√</i> Identificerer og fjerner bundleware</li>
						<li><i class="all-icons">√</i> Opfanger systemændringer foretaget ved installeringer <sup class="green">NY</sup></li>
						<li><i class="all-icons">√</i> Sletter stædige programmer <sup>FORBEDRET</sup></li>
						<li><i class="all-icons">√</i> Identificer ondsindet og reklamemæssige udvidelser <sup>FORBEDRET</sup></li>
						<li><i class="all-icons">√</i> Slet rester automatisk efter standard-installation <sup>FORBEDRET</sup></li>
						<li><i class="all-icons">√</i> Skanner efter rester af allerede afinstallerede programmer <sup class="green">NY</sup></li>
						<li><i class="all-icons">√</i> Opretter automatisk et gendannelsespunkt før installation</li>
						<li><i class="all-icons">√</i> Opdater alle forældede programmer med et klik</li>
						<li><i class="all-icons">√</i> Opdater automatisk når en ny version er tilgængelig</li>
						<li><i class="all-icons">√</i> Premium teknisk support 24/7</li>
					</ul>
					<ul class="price clearfix">
						<li class="first">
							<strong><big>0</big>kr.<sup>*</sup></strong> <del>399 kr.</del>
							<p class="change">Skynd dig, kun<b class="giftNum">50</b>enheder</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=dk-iu9preorder&ref=dk_iu9preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_iu"
	  			   		 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderofficial-dk');">
							  Forudbestil nu	
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- review start -->
	<div class="review">
    <div class="wrapper">
      <h2>Hvad andre siger?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>Medieanmeldelser</h3>
              <p>"Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc. Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde."</p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
            <dd>
              <h3>Brugeranmeldelser</h3>
              <p>
                Jeg har brugt IObits programmer i årevis med stor tilfredshed! Af denne grund holder jeg mig til IObits produkter. Jeg har tidligere repareret bærbare computere og mobiltelefoner (android) og efterlader dem altid med IObits produkter installeret og råder kunderne til regelmæssigt at ’’trykke på det store C’’ og siger til dem, at det automatisk vil rette og accelerere deres bærbar/computer/mobil! <br>
                Jeg anbefaler varmt deres afinstallationsprogram Uninstaller (og den seneste beta) som er et sikkert og pålideligt program, som fjerner stædige programmer. Vigtigere er, at det også fjerner skjulte koder som programører efterlader for at bringe reklamer om at installere programmet igen! <br>
                Alle IObits programmer er sikre og nemme at bruge og de passer på din PC.
              </p>
              <h4>Jeff A Watts</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>Brugeranmeldelser</h3>
              <p>Jeg synes at IObit Uninstaller er fantastisk og det har alt hvad du behøver og mere til. Jeg elsker det faktum, at det afinstallerer alle resterende fragmenter. Det har også en opdateringssoftware, som notificerer dig, når et af dine programmer har brug for at blive opdateret og det afinstallerer i bundter, hvilket virkelig gør det til en vinder. Faktisk er det alt hvad du behøver for at holde din computer i topform og klar til køre til hver en tid. </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>Brugeranmeldelser</h3>
              <p>
                IObit Uninstaller er det bedste program til at fjerne programmer på din computer, det er hurtigt og super effektivt. Den basale uninstaller på Windows kan slet ikke sammenlignes hermed, det renser grundigt alle rester af programmer, så der ikke forekommer nogen forsinkelser på computeren. Jeg har brugt det i et par måneder og kan slet ikke undvære det, jeg anbefaler det både til venner og familie. <br>
                Tak, IObit Uninstaller er fantastisk.
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
            <dd>
              <h3>Brugeranmeldelser</h3>
              <p>"IObit Uninstaller bliver bedre ved hver opdatering. Jeg har brugt det i mere end 3 år nu. Det er hurtigt at indlæse og har en simpel brugergrænseflade. Nogle af de mange funktioner, jeg regelmæssigt bruger, er batch-afinstallation, grundig scanning, filmakulering og den nye funktion, som giver mig hurtig adgang til et program jeg lige har installeret, som jeg ikke kan lide eller som ikke virker korrekt."</p>
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
			<h2>Priser fra hele verden</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.Efter 30 dages gratis prøveperiode, trækkes 159 kr. fra dit kreditkort eller PayPal-konto automatisk. 60% rabat fra originalprisen på 399 kr. gælder kun for forudbestillinger!
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Rettigheder forbeholdes</p>
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
	  			<p class="change"><span class="viewNum"><?php echo $viewNum;?></span>  ser på dette, kun <b class="giftNum">50</b>enheder tilbage!</p>
	  		</div>
	  		<div class="two fl"><strong><big>0</big>kr.<sup>*</sup></strong> <del>399 kr.</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
	  			   href="https://www.iobit.com/buy.php?product=dk-iu9preorder&ref=dk_iu9preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_iu"
	  			   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderofficial-dk');">
	  			  Forudbestil nu
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