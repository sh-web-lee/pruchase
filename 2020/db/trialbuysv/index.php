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
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Spara upp till 68% rabatt på Driver Booster PRO – IObit</title>
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
			<a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<div class="title">
				<p>Ditt prov slutar om <b class="days">3</b> dag!</p>
				<h1>Sista Chansen att Få det Bästa Priset Endast för provanvändare</h1>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
				</div>
				<div class="right fr">
					<h2>Missa inte ditt bästa pris!</h2>
					<div class="curvebox">
						<img src="<?php echo getStaticUrl('images/price-curve.png')?>" alt=""/>
						<span class="one">
							Innan <i class="date0">01</i> <em class="month">juli</em>
						</span>
						<span class="two">
              <i class="date0">01</i>-<i class="date1">02</i> <em class="month">juli</em>
						</span>
						<span class="three">
							<i class="date2">03</i> <i class="date3">04</i> <i class="date4 last">05</i> <em class="month">juli</em>
						</span>
						<span class="four">
							Efter <i class="date4">06</i> <em class="month">juli</em>
						</span>
					</div>
					<ul class="price clearfix">
						<li><p>Nu <b>279 kr</b></p> Rabatt: 68% RABATT</li>
						<li class="last">
							<a class="buybtn" 
							   href="https://www.iobit.com/buy.php?product=sv-db83pc279&ref=sv_trialdb83pc279<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_db"
							   onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-trialbuy-sv')">
								<i class="all-icons"></i> KÖP NU
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
			<h2>Varför väljer du Driver Booster PRO?</h2>
			<p class="words">Uppdatera <b class="nums"></b> föråldrade drivrutiner och spelkomponenter för att förbättra din dators prestanda och spelupplevelse.</p>
			<div class="content">
				<dl class="one">
					<dt><i class="all-icons">1</i></dt>
					<dd>
						<h3>Stabil Prestanda</h3>
						<p>Uppdatera nödvändiga datordrivrutiner för att undvika frysning och kraschar.</p>
					</dd>
				</dl>
				<dl class="two">
					<dt><i class="all-icons">2</i></dt>
					<dd>
						<h3>Snabb Spelladdning</h3>
						<p>Uppdatera lämpliga komponenter för att garantera smidig lansering.</p>
					</dd>
				</dl>
				<dl class="three">
					<dt><i class="all-icons">3</i></dt>
					<dd>
						<h3>Effektiv Enhetshantering</h3>
						<p>Upptäck och fixa enhetsfel för att minska hårdvaruproblem.</p>
					</dd>
				</dl>
				<dl class="four">
					<dt><i class="all-icons">4</i></dt>
					<dd>
						<h3>Bättre Spelupplevelse</h3>
						<p>Uppdatera spelrelaterade drivrutiner för att uppleva avancerade och nya funktioner.</p>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- comparison start -->
	<div class="comparison wrapper">
	  <h2>Vad är skillnaden mellan din nuvarande utgåva och PRO?</h2>
	  <table>
	    <thead>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema">
	          <div class="free">Din nuvarande version</div>
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
	        <td class="virtue">Uppdatera drivrutiner automatiskt medan systemet är inaktivt</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">1 klick för att uppdatera drivrutiner</td>
	        <td class="itema daysDes">Slutar om <span class="days">3</span> dag</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">Upp till 100% högre uppdateringshastighet</td>
	        <td class="itema daysDes">Slutar om <span class="days">3</span> dag</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Fixa enhetsfel för en säkrare dator</td>
	        <td class="itema daysDes">Slutar om <span class="days">3</span> dag</td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
	        <td class="virtue">Ladda ner och säkerhetskopiera automatiskt </td>
	        <td class="itema daysDes">Slutar om <span class="days">3</span> dag</td>
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
	          <p><b>279 kr</b> <del>899 kr</del></p>
	          <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sv-db83pc279&ref=sv_trialdb83pc279<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_db"
               onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-trialbuy-sv')">
              <i class="all-icons"></i> KÖP NU
	          </a>
	          <p>1 Års Prenumeration / 3 PC</p>
	        </th>
	      </tr>
	    </tfoot>
	  </table>
	</div>
	<!-- comparison end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>VI GÖR ALLT MÖJLIGT FÖR ATT MÖTA VÅRA <br> KUNDER OAVSETT VAR DU ÄR!</h2>
    <div class="reviewbox">
      <h3>Vad säger andra</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/pcmag.png')?>" alt="PC Magazine"></li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund">
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya">
        </li>
        <li class="four"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"></li>
      </ul>
      <div class="details">
        <div>
          <h4>PC Magazine <span class="flag de"></span></h4>
          <p>
            “IObit tillverkar många olika verktyg, och Driver Booster PRO, som automatiskt uppdaterar dina drivrutiner är ett av dem bästa.”- PC Magazine
        </div>
        <div class="active">
          <h4>Adam Backlund <span class="flag us"></span></h4>
          <p>
            "Driver booster är en fantastisk applikation. För alla som har en hel del applikationer och enheter, och som inte har tid att manuellt uppdatera dem, rekommenderar jag starkt Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt." - Adam Backlund
          </p>
        </div>
        <div>
          <h4>Myo Thuya <span class="flag it"></span></h4>
          <p>
            "Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa ljudfel, nätverksfel, enhetsfel osv."    - Myo Thuya
          </p>
        </div>
        <div>
          <h4>Wayne Bowler <span class="flag it"></span></h4>
          <p>
            "Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter." - Wayne Bowler
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>VÄRLDSOMSPÄNNANDE UTMÄRKELSER</h2>
      <p>IObit är betrodd och belönad av dessa media i världsklass de senaste sex åren,och du har valt den riktiga drivrutinsuppdateraren.</p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl class="fl">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
      <dd>
        <h3>
          Prova det RISKFRITT - med vår 60 dagars Pengarna <br> Tillbaka Garanti
        </h3>
        <p>
          Vi är självsäkra om att aktivering av den PRO versionen <br>
          kommer att fixa alla dina huvudvärkdrivrutinsfrågor till <br>
          överkomligt pris!
        </p>
      </dd>
    </dl>
    <dl class="fr">
      <dd><h3>Accepterade Betalningssätt </h3></dd>
      <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
    </dl>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <dl class="note wrapper">
    <dt>Notera:</dt>
    <dd>*. Uppgifter kan variera beroende på olika system eller datorer.</dd>
    <dd>*. Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
    <dd>*. Smart Defrag PRO / IObit Software Updater PRO stöder 1 års prenumeration / 1 dator.</dd>
  </dl>
  <div class="copyright">
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
  </div>
  <!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/></div>
	    <h2 class="fl"><span class="off">68%</span> Rabatt</h2>
	    <div class="price fr">
	    	<h3>Håll Alla drivrutinerna Uppdaterade Hela Året!</h3>
	    	<a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-db83pc279&ref=sv_trialdb83pc279<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=sv_purchase_db"
           onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-trialbuy-sv')">
          <i class="all-icons"></i> KÖP NU
	    	</a>
	    	<p>1 Års Prenumeration / 3 PC</p>
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