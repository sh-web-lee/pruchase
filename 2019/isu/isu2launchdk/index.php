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
	$c_name = 'isulaun_p' . $date;
	$c_name_t='isulaun_t' . $date;
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

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="dk">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eksklusive 80% rabat på  IObit Software Updater PRO & og få en product gratis - IObit  </title>
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
			<h1>Ny lancering, specialtilbud</h1>
			<div class="img-box">
				<img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
			</div>
			<div class="right-message">
          <h2><span>Gaver medfølger</span> begrænset antal til de 100</h2>
          <div class="progress">
            <p>  første købere! <br> <strong class="viewNum"><?php echo $viewNum;?></strong>  besøgende,  <span class="buyNum">51</span> tilbage</p>
            <div class="bar">
              <span class="box"><span class="disappear"></span></span>
            </div>
          </div>
          <p class="price">
            <span> Nu<strong><b>129</b>kr.</strong></span>
            <a href="https://www.iobit.com/buy.php?product=dk-isu23pcpf129&ref=dk_isu23pcpfsale1906<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isubundlepurchase1906-dk');"  class="buybtn">Aktiver nu</a>
          </p>
          <ul class="list">
          	<li class="frist">
          		Originalpris  <span>688 kr.  </span>
          	</li>
          	<li>Rabat <span>80% </span></li>
          	<li> Spar <span>559 kr. </span></li>
          </ul>
        </div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>Hvorfor IObit Software Updater PRO?</h2>
			<img src="<?php echo getStaticUrl('images/intro-box.jpg')?>" class="img-box" alt="IObit Software Update PRO"/>
			<div class="left-message">
				<h3> Holder altid software <br> opdateret </h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
					<dd><strong>Beskyttelse </strong></dd>
					<dd>Opdaterer forældet software og <br> dækker  sikkerhedshuller i tide <br> og holder hackers ude. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
					<dd><strong>Forbedringer </strong></dd>
					<dd>Opdatering af forældet software <br> giver nye funktioner og forbedret <br> ydeevne og stabilitet.</dd>
				</dl>
			</div>
			<div class="right-message">
				<h3><i></i> Få software-opdateringer <br> nemt  </h3>
				<dl class="list01">
					<dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
					<dd><strong>Simpelt</strong> Software-opdateringer downloades uden behov for åbning af web browsere. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
					<dd><strong>Automatisk </strong> Aktiver automatisk opdatering efter tidsplan og download og installer opdateringer lydløst og automatisk, når opdateringer er tilgængelige. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
					<dd><strong>Sikker </strong> Opretter automatisk gendannelsespunkt før installering i tilfælde af, noget går galt.</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Hvad er fordelene ved IObit Software Updater PRO?</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>

				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li>Opdater software med 1 klik</li>
						<li>Download og installer opdateringer lydløst</li>
						<li>Planlæg automatiske skanninger og opdateringer efter tidsplan</li>
						<li>Ekskluder programmer du ikke ønsker at opdatere</li>
						<li>Giver mulighed for automatisk oprettelse af gendannelsespunkt før installering</li>
						<li>Giver mulighed for automatisk sletning af installerirngsfiler efter installation. </li>
						<li>Understøtter direkte download af andet populært software</li>
						<li>Ingen sponsorerede annoncer som er vist i den gratis version</li>
					</ul>
					 <p class="price">
            <span>Nu  <strong><b>129</b>kr.</strong> <span>Skynd dig, kun <b class="buyNum">50</b> tilbage!</span></span>
            <a href="https://www.iobit.com/buy.php?product=dk-isu23pcpf129&ref=dk_isu23pcpfsale1906<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isubundlepurchase1906-dk');" class="buybtn">Aktiver nu</a>
          </p>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->
	<div class="gift-message">
		<div class="wrapper">
			<h2>Vilken extra fördelar får du med gratis gåvor?</h2>
			<dl class="pf">
				<dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/></dt>
				<dd>
					<h3>Protected Folder</h3>
					<strong>0 kr.</strong> <del>399 kr. </del> 1 år / 1 PC
					<p>Aldrig bekymr dig om datatyveri <br> eller lækning af private filer!</p>
				</dd>
			</dl>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
    <h2>Hvad andre siger?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Media anmeldelse</h2>
              <p>IObit Software Updater er designet til at simplificere opgaven at holde alle applikationer på din computer opdaterede. Det tjekker for nye versioner og installerer dem automatisk, selv uden burger-input. Det kan også hjælpe med at downloade og installere populære applikationer til forskellige formål.</p>
              <cite>softpedia</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
            <dd>
              <h2>Brugeranmeldelse</h2>
              <p>Jeg installerede IObit free fra en ven og jeg er meget tilfreds med hastigheden og enkeltheden som møder en nybegynders behov i at vedligeholde hans private computer. Tak for det! Jeg må også informere jer om, at jeg vil købe en IObit licens, så jeg kan give et mindre beløb til jer for at hjælpe jer med at fortsætte det gode stykke arbejde. Tak!</p>
              <cite>Nicolae Mocioc</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
            <dd>
              <h2>Brugeranmeldelse</h2>
              <p>Jeg elsker den automatiske del af opdateringerne. Det er hurtigt og effektivt og det opretter også et gendannelsespunkt før installering bare i tilfælde af, at noget går galt. Jeg elsker også, at programmet downloader opdateringerne direkte fra passende hjemmesider i stedet for, at jeg skal besøge hjemmesiderne enkeltvist for at downloade og opdatere. Jeg synes dette er et af jeres bedste ideer til dags dato!</p>
              <cite>Joshua Irving</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
            <dd>
              <h2>Brugeranmeldelse</h2>
              <p>Det er fantastisk stykke opdateringsprogram. Det er meget nemt at bruge og super simpelt. Programmet er tydeligt og virker uden problemer og det er super hurtigt. Designet er fint og modern og du kan bade se, den gamle og nye version af programmet, du ønsker at opdatere. Det er også fint, at det viser dig nye program-tips. </p>
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
					<dt>Godkendt af disse medier     </dt>
					<dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
				</dl>
				<dl class="right">
					<dt>Understøtter flere betalingsmetoder</dt>
					<dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
				</dl>
			</div>
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.
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
	  		IObit Software Update PRO
	  	</div>
	  	<div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> besøgende, kun  <strong class="buyNum">86</strong> tilbage!</p>
      </div>
       <p class="price">
          <span><strong><b>129</b>kr.</strong> <del>688 kr.</del>  </span>
          <a href="https://www.iobit.com/buy.php?product=dk-isu23pcpf129&ref=dk_isu23pcpfsale1906<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isubundlepurchase1906-dk');" class="buybtn">Aktiver nu</a>
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