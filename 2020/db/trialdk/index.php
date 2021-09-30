<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
$transData=json_decode(base64_decode($_GET['tdata']));
if(($transData->LftTrlDay<=4)&&($_GET['to']=='trialbuy_8')){
	header("location:./trialbuy.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!in_array($_GET['to'],array('trialbuy_7','trialbuy_2','trialbuy_9','trialbuy_4','trialbuy_8'))){
	$_GET['to']='';
}
if(!empty($_GET['ref'])){
	$refStr.='-'.$_GET['ref'];
  }
if(empty(json_decode(base64_decode($_GET['tdata'])))){
	$_GET['tdata']='W10=';
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Eksklusive 85% rabat på Driver Booster 7 Pro & og få en product gratis</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800" rel="stylesheet">
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
				<p>Din prøveperiode slutter snart</p>
				<h1>Gå ikke glip af vores eksklusive tilbud for kunder af prøveversionen.</h1>
			</div>
      <!-- content -->
      <div class="content clearfix">

        <!-- 1pc -->
        <dl class="fl">
          <dt>
            <img src="<?php echo $pResUrl;?>images/db-1pc.png" alt="Driver Booster PRO 6">
            <p>1 år, 1 pc</p>
          </dt>
          <dd>
            <p class="price"><strong>189,-</strong> Før: (<del>399,-</del>)</p>
            <!-- 1pc buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=dk-db7trial1pc&ref=dk_trialdb71pc<?php echo $refStr;?>&refs=dk_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db1pcpurchase-trial-dk');">
              Køb nu
            </a>
          </dd>
        </dl>

        <!-- 3pc bundle -->
        <dl class="fl large">
          <dt>
            <!-- countdown -->
            <p class="countdown" id="countdown">
              <i class="all-icons"></i>
              Udløber om:
              <strong>00</strong>m,
              <strong>00</strong>s,
              <strong class="last">000</strong>ms
            </p>
            <img src="<?php echo $pResUrl;?>images/db-3pcbundle.png" alt="Driver Booster PRO 6 + Smart Defrag PRO 6">
            <p>1 år, 3 pc`er</p>
          </dt>
          <dd>
            <p class="price"><strong>199,-</strong> Før: (<del>1.058,-</del>)</p>
            <!-- 3pc bundle buybtn -->
            <a class="buybtn black"
               href="https://www.iobit.com/buy.php?product=dk-db7trialsd&ref=dk_trialdb7bundle<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbsdpurchase-trial-dk');">
              Køb nu
            </a>
            <!-- person -->
            <p class="person"><i class="all-icons"></i>&nbsp;&nbsp;&nbsp;<strong class="buyNum"><?php echo $buyNum ?></strong> personer har allerede købt</p>
          </dd>
        </dl>

        <!-- 3pc -->
        <dl class="fr">
          <dt>
            <img src="<?php echo $pResUrl;?>images/db-3pc.png" alt="Driver Booster PRO 6">
            <p>1 år, 3 pc`er</p>
          </dt>
          <dd>
            <p class="price"><strong>199,-</strong> Før: (<del>679,-</del>)</p>
            <!-- 3pc buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=dk-db7trial3pc&ref=dk_trialdb73pc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcpurchase-trial-dk');">
              Køb nu
            </a>
          </dd>
        </dl>
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
	          <div class="free">Driver Booster PRO</div>
	        </th>
	        <th class="space"></th>
	        <th class="itemc">
	          <div class="pro"><span>2-i-1</span> bundle</div>
	        </th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
	        <td class="virtue">Opdaterer drev automatisk når systemet er ledet</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">Opdater drev med et klik</td>
	        <td class="itema"><p class="exTxt first">≤ <span class="days">14</span> dage</p></td>
	        <td class="space"></td>
	        <td class="itemb"><b class="limite">Ubegrænset</b></td>
	        <td class="space"></td>
	        <td class="itemc"><b class="limite">Ubegrænset</b></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">Op til 100% hurtigere opdateringshastighed</td>
	        <td class="itema"><p class="exTxt">≤ <span class="days">14</span> dage</p></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Løser enhedsproblemer og sikrer din PC</td>
	        <td class="itema"><p class="exTxt">≤ <span class="days">14</span> dage</p></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
	        <td class="virtue">Downloader og sikkerhedskopierer drev automatisk</td>
	        <td class="itema"><p class="exTxt">≤ <span class="days">14</span> dage</span></p></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons black">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
	        <td class="virtue">Forbedrer harddrev og gør din PC hurtigere </td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	    </tbody>
	    <tfoot>
	      <tr>
	      	<th colspan="2"></th>
	      	<th class="itema"></th>
	      	<th class="space"></th>
	      	<th class="itemb">
	      	  <p><b>199 kr.</b> <del> 679 kr.</del></p>
	      	  <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=dk-db7trial3pc&ref=dk_trialdb73pc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcpurchase-trial-dk');">
	      	  	<i class="all-icons"></i> Køb nu
	      	  </a>
	      	</th>
	      	<th class="space"></th>
	      	<th class="itemc">
	      	  <p><b>199 kr.</b> <del>1.058 kr.</del></p>
	      	  <a class="buybtn shadow"
               href="https://www.iobit.com/buy.php?product=dk-db7trialsd&ref=dk_trialdb7bundle<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbsdpurchase-trial-dk');">
	      	  	<i class="all-icons"></i> Køb nu
	      	  </a>
	      	  <p id="tabcount" class="countdown">
              <strong>04</strong>m,
              <strong>29</strong>s,
              <strong>44</strong>ms
            </p>
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
	    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt=""/></div>
	    <h2 class="fl"><span class="off">85%</span> Rabat</h2>
	    <div class="price fr">
	    	<h3>Hold alle drivere opdaterede i hele året!</h3>
	    	<a class="buybtn shadow"
           href="https://www.iobit.com/buy.php?product=dk-db7trialsd&ref=dk_trialdb7bundle<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=dk_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbsdpurchase-trial-dk');">
	    		<i class="all-icons"></i> Køb nu
	    	</a>
	    	<p id="floatcount" class="countdown">
          <strong>04</strong>m,
          <strong>29</strong>s,
          <strong>44</strong>ms
        </p>
	    </div>
	  </div>
	</div>
	<!-- floatlayer end -->

<script>
	var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
	transData = JSON.parse(transDataJson);
</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>