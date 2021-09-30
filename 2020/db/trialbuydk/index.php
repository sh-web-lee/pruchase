<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(empty(json_decode(base64_decode($_GET['tdata'])))){
	$_GET['tdata']='eyJMZnRUb2RDb3VudCI6MCwiTGZ0RHJ2Q291bnQiOjAsIkxmdENtcENvdW50IjowLCJMZnRUcmxEYXkiOjF9';
}
if(!empty($_GET['ref'])){
	$refStr.='-'.$_GET['ref'];
  }
?>
<!DOCTYPE html>
<html lang="dk">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eksklusive 72% rabat på Driver Booster Pro</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800" rel="stylesheet">
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
			<div class="title">
				<p>Din prøveperiode slutter om <b class="days">1</b> dage!</p>
				<h1>Sidste chance for kunder af prøveperioden. Få IObit til den bedste pris</h1>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
				</div>
				<div class="right fr">
					<h2>Gå ikke glip af prisen!</h2>
					<div class="curvebox">
						<img src="<?php echo getStaticUrl('images/price-curve.png')?>" alt=""/>
						<span class="one">
							Før <i class="date0">1</i><em class="month">/7</em>
						</span>
						<span class="two">
							<i class="date0">1</i>-<i class="date1">2</i><em class="month">/7</em>
						</span>
						<span class="three">
							<i class="date2">4</i> <i class="date3">5</i> <i class="date4 last">6</i><em class="month">/7</em>
						</span>
						<span class="four">
							efter <i class="date4">6</i><em class="month">/7</em>
						</span>
					</div>
					<ul class="price clearfix">
						<li><p><b>189 kr.</b> i dag </p> Rabat: 72% </li>
						<li class="last">
							<a class="buybtn" 
							   href="https://www.iobit.com/buy.php?product=dk-db7trialbuy&ref=dk_trialbuydb73pc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
							   onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-trialbuy-dk');">
								<i class="all-icons"></i>  Køb nu
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Hvorfor vælge Driver Booster PRO?</h2>
			<p class="words">Opdaterer <b class="nums"></b> forældede drev og spilkomponenter og forbedrer din PC’s stabilitet og din spiloplevelse</p>
			<div class="content">
				<dl class="one">
					<dt><i class="all-icons">1</i></dt>
					<dd>
						<h3>Stabil præstation</h3>
						<p>Opdater vigtige PC-drev og forhindr din PC i at fryse eller bryde sammen. </p>
					</dd>
				</dl>
				<dl class="two">
					<dt><i class="all-icons">2</i></dt>
					<dd>
						<h3>Hurtig indlæsning af spil </h3>
						<p>Opdaterer matchende komponenter og garanterer en perfekt start.</p>
					</dd>
				</dl>
				<dl class="three">
					<dt><i class="all-icons">3</i></dt>
					<dd>
						<h3>Effektiv device manager</h3>
						<p>Korrigerer fejlkoder og løser hardwareproblemer.</p>
					</dd>
				</dl>
				<dl class="four">
					<dt><i class="all-icons">4</i></dt>
					<dd>
						<h3>Forbedret spiloplevelse</h3>
						<p>Opdaterer spilklare drev så du kan få adgang til forbedrede samt nye funktioner.</p>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- comparison start -->
	<div class="comparison wrapper">
	  <h2>Hvad er forskellen mellem din nuværende version og PRO-versionen?</h2>
	  <table>
	    <thead>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema">
	          <div class="free">Din nuværende version</div>
	        </th>
	        <th class="space"></th>
	        <th class="itemb">
	          <div class="pro">Driver Booster PRO</div>
	        </th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
	        <td class="virtue">Opdaterer drev automatisk når systemet er ledet</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">Opdater drev med et klik</td>
	        <td class="itema daysDes"><span class="days">3</span> dage</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">Op til 100% hurtigere opdateringshastighed</td>
	        <td class="itema daysDes"><span class="days">3</span> dage</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Løser enhedsproblemer og sikrer din PC</td>
	        <td class="itema daysDes"><span class="days">3</span> dage</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
	        <td class="virtue">Downloader og sikkerhedskopierer drev automatisk</td>
	        <td class="itema daysDes"><span class="days">3</span> dage</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	    </tbody>
	    <tfoot>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema"></th>
	        <th class="space"></th>
	        <th class="itemb">
	          <p><b>189 kr.</b> <del>679 kr.</del></p>
	          <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=dk-db7trialbuy&ref=dk_trialbuydb73pc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-trialbuy-dk');">
	          	<i class="all-icons"></i> Køb nu
	          </a>
	          <p>1 år, 3 pc`er</p>
	        </th>
	      </tr>
	    </tfoot>
	  </table>
	</div>
	<!-- comparison end -->

  <!-- reviews -->
  <div class="review wrapper">
    <div class="container">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt="PCMG"></dt>
            <dd>
              <h2>Medieanmeldelser</h2>
              <p>Driver Booster PROs enkle kernefunktionalitet er blevet endnu mere attraktiv takket være inkluderingen af flere licenser til en virkelig økonomisk pris, samt en brugerdefineret grænseflade, der gør et godt stykke arbejde ved at vise specifikke informationer om din hardware. Konkurrenterne Ashampoo Driver Updater og SlimWare Utilities DriverUpdate har tilsvarende funktioner, men IObit Driver Booster PRO fører klart i kategorien."</p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt="Harold Barr"></dt>
            <dd>
              <h2>Brugeranmeldelelse</h2>
              <p>
                Sikke en overraskelse at modtage Driver Booster fra IObit. Så snart det var installeret begyndte
                opdateringerne. Jeg anede ikke jeg havde så mange programmer på computeren og slet ikke at de
                behøvede opgraderinger. Da opdateringerne afsluttede, var det som om, min PC havde fået en
                komplet makeover. Fantastisk!
              </p>
              <cite>Harold Barr</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></dt>
            <dd>
              <h2>Brugeranmeldelelse</h2>
              <p>
                Virkelig den bedste driver updater der er på markedet. Det er brugervenligt, har en simpel
                brugerflade der er nem at bruge og det klarer arbejdet bedre end nogen applikation, jeg tidligere
                har brugt. Dette program er fem stjerner værd. Varmt anbefalet.
              </p>
              <cite>Hishaam Salasa</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png') ?>" alt="Carlos Alexandre Veríssimo"></dt>
            <dd>
              <h2>Brugeranmeldelelse</h2>
              <p>
                Det hjalp med at løse hastighedsproblemer på min gamer laptop uden at nedbryde det. Nogle
                gange, når jeg har forsøgt at opdatere mine drev, er computeren brudt sammen og jeg var nødt til
                at formatere min computer for at gendanne funktioner, men dette skete ikke med DB7. Det er nemt
                at bruge og downloader hurtigt, det er det bedste værktøj på markedet hidtil!
              </p>
              <cite>Carlos Alexandre Veríssimo</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- end reviews -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Anbefalet og belønnet af disse medier</h2>
      <p></p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
      <dd>
        <h3>Tilfredshedsgaranti</h3>
        <p>60-dages pengene-tilbage-garanti</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
      <dd>
        <h3>Betalingssikkerhed</h3>
        <p>Din betaling er 100% sikker</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/buycut.png" alt=""></dt>
      <dd>
        <h3>Hurtig aktivering</h3>
        <p>
          Du vil modtage en aktiveringskode <br>
          hurtigt efter betalingen
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/service.png" alt=""></dt>
      <dd>
        <h3>Kundeservice</h3>
        <p>Gratis 24/7 teknisk support ved behov</p>
      </dd>
    </dl>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer wrapper">
    <dl>
      <dt>Note:</dt>
      <dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.Alle rettigheder forbeholdes</p>
  </div>
  <!-- end footer -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/></div>
	    <h2 class="fl"><span class="off">72%</span> Rabat</h2>
	    <div class="price fr">
	    	<h3>Hold alle drivere opdaterede i hele året!</h3>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-db7trialbuy&ref=dk_trialbuydb73pc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=dk_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase-trialbuy-dk');">
          <i class="all-icons"></i> Køb nu
        </a>
        <p>1 år, 3 pc`er</p>
	    </div>
	  </div>
	</div>
	<!-- floatlayer end -->

<script type="text/javascript">
	var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
	transData = JSON.parse(transDataJson);
</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>