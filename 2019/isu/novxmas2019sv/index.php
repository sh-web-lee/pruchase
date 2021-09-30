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
	$c_name = 'isunovxmas2021sv_p' . $date;
	$c_name_t='isunovxmas2021sv_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(78,98);
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

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].'-'.$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Spara upp till 80% på IObit Software Updater PRO och få ett gåvopaket – IObit</title>
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
			<a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>Nytt År Specialerbjudande</h1>
			<div class="img-box">
				<img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
			</div>
			<div class="right-message">
          <h2><span>2 GRATIS GÅVOR</span> begränsat till dem 100 första köparna! </h2>
          <div class="progress">
            <p><strong class="viewNum"><?php echo $viewNum;?></strong> besökare,  <span class="buyNum">51</span> paket kvar</p>
            <div class="bar">
              <span class="box"><span class="disappear"></span></span>
            </div>
          </div>
          <p class="price">
            <span><strong><b>159</b>kr</strong> <del>797 kr</del></span>
            <a href="https://www.iobit.com/buy.php?product=sv-isu43pcsdpf159&ref=sv_isu43pcsdpf2104<?php echo $refStr;?>&refs=sv_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3pcpfsdpurchase2011-sv');"  class="buybtn">Aktivera nu</a>
          </p>
          <ul class="list">
          	<li class="frist">
          		Originalpris <span>797 kr</span>
          	</li>
          	<li>Rabatt <span>80% </span></li>
          	<li> Spara <span>639 kr </span></li>
          </ul>
        </div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>Varför IObit Software Updater PRO?</h2>
			<img src="<?php echo getStaticUrl('images/intro-box.jpg')?>" class="img-box" alt="IObit Software Update PRO"/>
			<div class="left-message">
				<h3><i></i> Håll alltid programvaror <br> uppdaterade  </h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
					<dd><strong>Skydd </strong></dd>
					<dd>Uppdatering av föråldrade programvaror <br> täcker säkerhetshålen i tid för <br> att hålla hackare borta.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
					<dd><strong>Förbättring </strong></dd>
					<dd>Uppdatering av föråldrade programvaror <br> levererar  nya funktioner och  <br> förbättrar prestanda och stabilitet.</dd>
				</dl>
			</div>
			<div class="right-message">
				<h3><i></i> Få  programvaruuppdateringar <br>  enkelt  </h3>
				<dl class="list01">
					<dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
					<dd><strong>Enkelt</strong> Programvaruuppdateringar laddas ned utan att man behöver öppna en webbläsare. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
					<dd><strong>Automatiskt </strong> Du kan välja så att du uppdaterar programvaror automatiskt vid en schemalagd tid och sedan automatiskt och tyst ladda ned och installera när uppdateringar är tillgängliga. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
					<dd><strong>Säker </strong> Skapa automatiskt återställningspunkt före installationen ifall något skulle gå fel.</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Vilka fördelar får du med IObit Software Updater PRO?</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>

				</div>
				<div class="right fr">
					<ul class="feature-list">
            <li>Stöder fler programvara med 150% större databas</li>
						<li>Uppdatera programvaror med endast 1-klick</li>
						<li>Tyst nedladdning och installation av uppdateringar</li>
						<li>Du kan välja att ha automatiska sökningar och uppdateringar vid en schemalagd tid</li>
						<li>Uteslut vissa program som du inte vill uppdatera</li>
						<li>Välj om du vill automatiskt skapa återställningspunkt innan du installerar</li>
						<li>Välj om du vill automatiskt ta bort installationsfiler efter installationen</li>
						<li>Stöder direkt nedladdning av vertyg för att arbeta på distans</li>
						<li>Inaktivera sponsrade annonser som visas i den fria versionen</li>
					</ul>
					 <p class="price">
            <span>Endast <strong><b>159</b>kr</strong> <span>Skynda, endast <b class="buyNum">50</b> paket kvar!</span></span>
            <a href="https://www.iobit.com/buy.php?product=sv-isu43pcsdpf159&ref=sv_isu43pcsdpf2104<?php echo $refStr;?>&refs=sv_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3pcpfsdpurchase2011-sv');" class="buybtn">Aktivera nu</a>
          </p>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->
	<div class="gift-message">
		<div class="wrapper">
			<h2>Vilken extra fördelar får du med gratis gåvor?</h2>
			<dl>
				<dt>
          <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""/>
        </dt>
				<dd>
					<h3>Smart Defrag PRO</h3>
					<strong>0 kr</strong> <del>219 kr</del> 1 år/1 PC
					<p>Maximera hårddisken <br> Optimering för snabbare PC</p>
				</dd>
			</dl>
			<dl class="pf">
				<dt>
          <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/>
        </dt>
				<dd>
					<h3>Protected Folder</h3>
					<strong>0 kr</strong> <del>249 kr</del> 1 år/1 PC
					<p>Oroa dig inte för stöld av data <br> eller integritetsläckor! </p>
				</dd>
			</dl>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
    <h2>Vad säger andra?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Mediarecension</h2>
              <p>IObit Software Updater utformades för att förenkla processen av att hålla alla program på din dator uppdaterade. Det kan söka efter nya versioner och installera dem automatiskt, även utan användarinmatning. Dessutom kan det hjälpa dig att ladda ned och installera populära program för olika ändamål. </p>
              <cite>softpedia</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
            <dd>
              <h2>Användarrecension</h2>
              <p>Jag installerade en gratis version av IObit som jag fick av en vän och jag är mycket nöjd med dess hastighet och enkelhet som möter behoven hos en nybörjare när det kommer till underhållning av persondator. Tack för det! Jag måste informera om att jag kommer att köpa en IObit-licens, bara för att donera ett belopp som hjälper er att fortsätta ert arbete.</p>
              <cite>Nicolae Mocioc</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
            <dd>
              <h2>Användarrecension</h2>
              <p>Jag älskar den automatiska aspekten av uppdateringarna. Det är snabbt och effektivt och det skapar även en återställningspunkt före installationen ifall något skulle gå fel. Jag älskar även att programmet hämtar uppdateringarna direkt från lämpliga webbplatser i stället för att jag måste gå till varje enskild webbplats för att ladda ned en uppdatering. Jag tycker att det här är en av era bästa idéer än! </p>
              <cite>Joshua Irving</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
            <dd>
              <h2>Användarrecension</h2>
              <p>Det är ett bra programvaruuppdateringsprogram. Det är väldigt enkelt att använda. Det här programmet fungerar väldigt smidigt och det är väldigt snabbt. Designen är också snygg och modern och det är bra att man kan se gamla och nya versioner av programmen som man vill uppdatera. Det är också trevligt att det här programmet visar nya programtips.</p>
              <cite>Nico Bremmer</cite>
            </dd>
          </dl>                  
        </div>  
      </div>             
    </div>
  </div>
	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<div class="service clearfix">
				<dl>
					<dt>Betrodd av dessa medier   </dt>
					<dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
				</dl>
				<dl class="right">
					<dt>Stöder flera betalningssätt</dt>
					<dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
				</dl>
			</div>
			<dl class="annotation">
				<dt>Notera:</dt>
				<dd>
					*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.
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
	  		IObit Software Update PRO
	  	</div>
	  	<div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> besökare nu, endast   <strong class="buyNum">86</strong> paket kvar!</p>
      </div>
       <p class="price">
          <span>Endast<strong><b>159</b>kr</strong>  </span>
          <a href="https://www.iobit.com/buy.php?product=sv-isu43pcsdpf159&ref=sv_isu43pcsdpf2104<?php echo $refStr;?>&refs=sv_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3pcpfsdpurchase2011-sv');" class="buybtn">Aktivera nu</a>
       </p>
	  </div>
	</div>
	<!-- floatlayer end -->
	<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>