<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$packsNum=empty($_COOKIE['pc'])?120:$_COOKIE['pc'];
if ($_GET['action'] == 'getPacks') {
    $randNum=rand(1,100);
    if($randNum%4==0){
        $packsNum-=2;
    }else
        $packsNum--;
    if($packsNum<=0){
        $packsNum=120;
    }
    setcookie('pc',$packsNum,time()+3600*720);
	echo $packsNum;
	exit ;
}
if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-'.$ver[3];
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="nl">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>75% Kerstkorting op Smart Defrag PRO - IObit</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
		<script type="text/javascript">
		function decreasingPacks() {
		$.ajax({
			type: "GET",
				url: "index.php",
				data: "action=getPacks&r=" + Math.random(),
				success: function(packs) {
					$('.packs').html(packs);
					setTimeout('decreasingPacks()', 75000);
				}
			});
		}
		setTimeout('decreasingPacks()', 75000);
		</script>
	</head>
	<body>
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
      <h1 class="title">Kerstmis SPECIALE SALE Laatste kans op een grote besparing!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/box.png')?>" alt="">
          <div class="discount">80% Rabatt</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>Tijdelijk 75% Korting & Twee Mooie Kerstcadeaus</h2></div>
          <div class="numbox">
            <span>Nog maar</span>
            <strong id="counttime1"> <span>09</span>:<span>09</span>:<span>09</span>:<span>09</span></strong>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price">€<big>17,99 </big></strong> <del>€79,97</del></p>
              <p>1 jaar / 3 pc's + 2 cadeaus</p>
            </li>
            <li>
							<a class="buybtn exbtn" 
							   href="https://www.iobit.com/buy.php?product=nl-sd63pcamcisu1799&ref=nl_sd63pcamcisu1799purchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_sd  " 
				         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2011-nl')">
							 Activeer Nu
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
    Probeer ZONDER RISICO – Activeer nu voor een perfect werkende pc, en krijg anders binnen 60 dagen uw geld terug
    </div>
  </div>
		<ul class="wrapper accepted">
			<li>
        <span>Betaalmogelijkheden</span>   
        <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
      </li>
      <li class="cent">
        <span>Geldteruggarantie</span>   
        <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" />
      </li>
      <li>
        <span>Veilige betaling</span>   
        <img src="<?php echo getStaticUrl('images/veilige.png')?>" alt="" />
      </li>
		</ul>
		<div class="wrapper clnet">
			<h2>Awards</h2>
			<img src="<?php echo $pResUrl; ?>images/clnet.jpg" alt="">
		</div>
		<div class="wrapper sd-content clearfix">
			<h2>Maximaliseer de harde schijf prestaties en snelheid van uw PC met SD 6 PRO</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons001.png" alt=""></dt>
				<dd><strong>Nieuwe ultra-snelle Engine</strong> <span>Defragmenteert bestanden efficiënter en grondiger in minder tijd</span></dd>
			</dl>
			<dl class="right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons002.png" alt=""></dt>
				<dd><strong>Tot wel 200% Sneller*</strong> <span>Met deze nieuwe versie hebt u sneller toegang tot uw bestanden en verhoogt u de gaming prestaties</span></dd>
			</dl>
			<div class="clear"></div>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons003.png" alt=""></dt>
				<dd><strong>Auto Smart defragmentatie</strong> <span>Defragmenteert automatisch de geselecteerde bestanden en schijven zonder onderbreking</span></dd>
			</dl>
			<dl class="right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons004.png" alt=""></dt>
				<dd><strong>Snellere PC Opstarttijd</strong> <span>Start uw PC sneller op en verhoog de loopsnelheid van het systeem met het vernieuwde “Opstart Menu”</span></dd>
			</dl>
			<div class="clear"></div>
			<img src="<?php echo getStaticUrl('images/sd-content.png')?>" alt="" class="img-sd-content">
			<p><a href="javascript:void(0);" onclick="goTaget($('#compare'))">Meer informatie over de PRO editie></a></p>
		</div>
		<div class="center-buy">
			<div class="wrapper">
				<h2>Tijdelijk Met Twee Gratis Kerstcadeaus</h2>
				<dl>
					<dt>	<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt=""></dt>
					<dd>
						<strong>€0</strong> <del>€19,99</del>
						<p>Maak uw Android apparaten <br> sneller en veiliger!</p>
					</dd>
				</dl>
				<dl>
					<dt>	<img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt=""></dt>
					<dd>
						<strong>€0</strong> <del>€29,99</del>
						<p>Update automatisch de <br> software op uw computer!</p>
					</dd>
				</dl>
				<a class="buybtn exbtn" 
				   href="https://www.iobit.com/buy.php?product=nl-sd63pcamcisu1799&ref=nl_sd63pcamcisu1799purchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_sd  " 
				   onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2011-nl')">
					Activeer Nu
				</a>
			</div>
		</div>
		<div class="review">
		  <div class="wrapper">
		    <div class="media_rev">
		      <h3>Media beoordeling</h3>
		      <dl>
		        <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg" alt=""></dt>
		        <dd><strong>"IObit Smart Defrag is tot zover de beste defragger die we hebben gebruikt."</strong></dd>
		        <dd>"IObit Smart Defrag optimaliseert uw PC om volledig te profiteren van SSD prestaties tijdens het defragmenteren van uw harde schijf. De SSD Trim applicatie maakt automatische systeem tweaks die normaal gesproken alleen door iemand met ervaring uitgevoerd kunnen worden. Smart Defrag's updates omvatten onder andere een nieuw defragmenteer machine, speciale Game Defragmentatie, een coole nieuwe interface en meer opties voor talen (35 en groeiende)."<span>- Score: 4.5/5 Sterren 'Uitmuntend' | Cnet</span></dd>
		      </dl>
		    </div>
		    <div class="user_rev" id="user_rev">
		      <div class="content">
		        <h3>Gebruikers Recensie</h3>
		        <dl class="show">
		          <dd><h4>"Smart Defrag is een zeer goede schijf defragmenteer programma."</h4></dd>
		          <dd>"Smart Defrag is een zeer goede schijf defragmenteer programma, opererent in de achtergrond zodat je het nauwelijks merkt. Het gevolg is dat je schijven permanent gedefragmenteerd worden waardoor snellere toegang mogelijk is en minder problemen zich voordoen. Smart Defrag is de beste gratis schijf defragmenteerder die ik ooit gebruikt heb en ik raad dit zeker aan alle mijn vrienden en familie aan!"</dd>
		        </dl>
		        <dl>
		          <dd><h4>"Het is een eenvoudig te gebruiken, must-have tool voor je harde schijf of SSD"</h4></dd>
		          <dd>"Ik run een combinatie van RAID 0 SSD's en RAID 0 HDD's en gebruik Smart Defrag Pro voor het analyseren, defragmenteren en het houden van mijn schijven op een top niveau. Zoals met alle software van IObit is het eenvoudig te installeren, te gebruiken en zeer betrouwbaar. Installeer het en geen omkijken naar. Smart Defrag laat een zeer kleine voetstap achter in je systeem zodat het je pc niet langzamer maakt. Een absolute aanrader."</dd>
		        </dl>
		        <dl>
		          <dd><h4>"Sinds het gebruik van deze fantastische software zijn mijn desktop en laptop veel sneller en veiliger geworden"</h4></dd>
		          <dd>"Ik ben al meerdere jaren een gebruiker van Smart Defrag. Sinds het gebruik van deze fantastische software zijn mijn desktop en laptop sneller en veiliger geworden. Samen met Advanced System Care Ultimate heb je een complete tool voor het up to date houden van je systeem, snel en veilig. Door het elke dag te gebruiken houd je je systeem in top conditie zelfs als je geen technische achtergrond heb!"</dd>
		        </dl>
		      </div>
		      <ul class="users">
		        <li class="active"><img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">Amnon</li>
		        <li class=""><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">Edward Lee Ah Yen</li>
		        <li class=""><img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">Hans</li>
		      </ul>
		    </div>
		  </div>
		</div>
		<div class="comparison_table wrapper" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th colspan="2"><b>Bekijk wat de PRO editie voor u kan betekenen:</b></th>
          <th class="itemb">Smart Defrag FREE</th>
          <th class="itema"><span>SD PRO + Gratis Cadeaus</span>
            <span class="last"><strong>€17,99</strong> <del>€79,97</del></span>
            1 Jaar / 3 PCs
            <a href="https://www.iobit.com/buy.php?product=nl-sd63pcamcisu1799&ref=nl_sd63pcamcisu1799purchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_sd  " 
				       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2011-nl')"   class="tbbuybtn">Activeer Nu</a>
						
           </th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons01.jpg"></td>
          <td class="virtue">Standaard harde schijf Defragmentatie en Optimalisatie</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons02.jpg"></td>
          <td class="virtue">Tot 200% snellere toegang tot uw bestanden</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons03.jpg"></td>
          <td class="virtue">Snellere PC Opstart tijd met het nieuwe ‘Opstart Menu’</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons04.jpg"></td>
          <td class="virtue">Defragmenteert Automatisch Gedefragmenteerde bestanden</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons05.jpg"></td>
          <td class="virtue">Aanpassen van defragmentatie Mode & Schijven die u wilt defragmenteren</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons06.jpg"></td>
          <td class="virtue">DMA toegevoegd voor Betere, Snellere & meer Stabiele Dataoverdracht</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons07.jpg"></td>
          <td class="virtue">Geen onderbrekingen tijdens uw werk of tijdens het gamen met de ‘Stille Modus’</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons08.jpg"></td>
          <td class="virtue">Beste gaming belevenis met de ‘Game Optimalisatie’</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons09.jpg"></td>
          <td class="virtue">Geplande taak ondersteuning met standby defragmentatie </td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons10.jpg"></td>
          <td class="virtue"> Automatische updates</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons11.jpg"></td>
          <td class="virtue">Gratis 24/7 technische ondersteuning</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        </tbody>
        <tfoot>
	        <tr>
	          <th colspan="2"></th>
	          <th class="itemb">Smart Defrag FREE</th>
	          <th class="itema"><span>Smart Defrag PRO <br>+ Gratis Cadeaus</span>
	           </th>
	        </tr>
        </tfoot>
      </table>
  </div>
  <div class="fy-banner wrapper">
  	<img src="<?php echo getStaticUrl('images/bottom-sd-content.png')?>" alt="">
  	<dl>
  		<dd>
  			<span class="spped">Maximale versnelling van uw systeem </span>
  			<span class="last">Verbeter de PC-prestaties met een geoptimaliseerde harde schijf</span>
  		</dd>
  		<dt>
				<a href="https://www.iobit.com/buy.php?product=nl-sd63pcamcisu1799&ref=nl_sd63pcamcisu1799purchase2011<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_sd  " 
				   onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2011-nl')" class="buybtn">Activeer Nu</a>
  		</dt>
  	</dl>
  </div>
  <dl class="annotation wrapper">
  	<dt>Opmerking:</dt>
  	<dd>*. Dergelijke promotie acties kunnen worden gewijzigd zonder voorafgaande kennisgeving van tijd tot tijd naar eigen oordeel.</dd>
  	<dd>*. Data kan variëren op basis van andere computer systemen. </dd>
  	<dd>*. Licentie voor AMC Security, Volledige versie beschikt over advertenties.</dd>
  </dl>
		<!-- footer -->
		<div class="footer">
			<p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
		</div>
		<!-- footer end -->
		<script>
			$(document).ready(function() {
					$("#user_rev .users li").mouseover(function(event) {
		      var num = $(this).index();
		      $("#user_rev .users li").eq(num).addClass('active').siblings().removeClass('active');
		      $("#user_rev dl").eq(num).addClass('show').siblings().removeClass('show');
				});
				cycleCountdown();
			});
			$(".see-more").click(function(){
	      $(".pop-content").addClass("show").removeClass("hidden");
    	});
    	$(".close").click(function(){
	      $(".pop-content").addClass("hidden").removeClass("show");
    	});
		  function goTaget(target) {
		    var Theigth = target.offset().top;
		    $("html, body").animate({scrollTop: Theigth}, 'slow');
		  }
			function cycleCountdown(){
				var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
				var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				document.getElementById('counttime1').innerHTML = '<span>'+h+':</span><span>'+i+':</span><span>'+s+':</span><span>'+mi+'</span>';
				setTimeout('cycleCountdown()', 1);
			}
		</script>
	</body>
</html>