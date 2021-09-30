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
	$c_name = 'nliujune_p' . $date;
	$c_name_t='nliujune_t' . $date;
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

$transData=json_decode(base64_decode($_GET['data']));
$preData=$transData->iu9pre;
$preDataArr=(array)$preData;
$pluginMp=$preDataArr['plugin-mp'];
$fileSizeShow=number_format($preData->filesize/(1024*1024*1024),1,',','.');
$fileSizeShow=$fileSizeShow>0.1?$fileSizeShow:0;
$leftOvers=$leftOversCount=intval($preData->reg)+intval($preData->file)+intval($preData->task)+intval($preData->service);
$leftOvers=number_format($leftOvers,0,'','.');
$preData->fileSizeShow=$fileSizeShow;
$preData->leftOvers=$leftOvers;
$preData->pluginMp=$pluginMp;
$preDataJs=json_encode($preData);
?>
<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Krijg 50% Korting op het nieuwe IObit Uninstaller 9 PRO</title>
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
			<a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>De Voorverkoop is Begonnen!</h1>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
					<span class="discount">55% OFF</span>
				</div>
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<p>Complete verwijdering zonder sporen achter te laten</p>
					<ul class="price clearfix">
						<li class="first">
							<strong>€<big>14</big>,99</strong> <del>€29,99</del>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"> slechts <b class="giftNum">50</b> over</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=nl-iu9preorder1499&ref=nl_iu9preorder1499expired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp-nl');">
							  Profiteer Nu
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
			<h2>What Heeft IObit Uninstaller 8 PRO Voor U Gedaan?</h2>
			<div class="three clearfix">
				<div class="left-message fl">
					<div class="post">
					  <div class="post-criale"></div>
						<div class="mask"></div>
						<span class="star"></span>
					</div>
					<span class="clean"></span>
					<div class="left-post">
					  <div class="post-criale"></div>
						<div class="mask"></div>
					</div>
				</div>
				<?php if(($fileSizeShow+intval($preData->soft)+$leftOversCount+intval($preData->plugin)+intval($preData->softupdate)+intval($preData->stubborn)+intval($preData->bundle)+intval($pluginMp))<=0):?>
					<ul class="right-message normal">
						<li>
							<h3>Verwijder </h3>
							<p>Hardnekkige en gebundelde programma’s, browserextensies en Windows apps</p>
						</li>
						<li>
							<h3>Wis </h3>
							<p>Alle achtergebleven restanten van verwijderde programma’s</p>
						</li>
						<li>
							<h3>Identificeer </h3>
							<p>Schadelijke en adverterende plug-ins voor een veiligere browser</p>
						</li>
						<li>
							<h3>Update </h3>
							<p>Alle verouderde software met 1 klik om gaten in de beveiliging te dichten</p>
						</li>
					</ul>
				<?php else:?>
				<ul class="right-message">
					<?php if(!empty($fileSizeShow)):?>
					<li class="data1">
						<h3><span>2</span> G </h3>
						<p>schijfruimte vrijgemaakt</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->soft))):?>
					<li class="data2">
						<h3><span>20</span>  </h3>
						<p>programma’s verwijderd</p>
					</li>
					<?php endif;?>
					<?php if(!empty($leftOvers)):?>
					<li class="data3">
						<h3><span>200</span>  </h3>
						<p> restanten verwijderd </p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->plugin))):?>
					<li class="data4">
						<h3><span>10</span> </h3>
						<p> browser extensies verwijderd</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->softupdate))):?>
					<li class="data5">
						<h3><span>3</span> </h3>
						<p>verouderde programma’s bijgewerkt</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->stubborn))):?>
					<li class="data6">
						<h3><span>5</span> </h3>
						<p>hardnekkige programma’s verwijderd </p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->bundle))):?>
					<li class="data7">
						<h3><span>5</span></h3>
						<p> gebundelde programma’s verwijderd  </p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($pluginMp))):?>
					<li class="data8">
						<h3><span>2</span> </h3>
						<p>schadelijke plug-ins verwijderd  </p>
					</li>
					<?php endif;?>
				</ul>
				<?php endif;?>
			</div>
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Wat Kan IObit Uninstaller 9 PRO Voor U Doen?</h2>
			<div class="one clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-01.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h3><b>Krachtigere Uninstall</b></h3>
					<dl>
						<dt><h4>Ongewenste programma’s</h4></dt>
						<dd>
							Verwijder programma’s, browser extensies en Windows apps.
						</dd>
					</dl>
					<dl>
						<dt><h4>Hardnekkige programma’s <span><em>150% BETER </em></span></h4></dt>
						<dd>
							Verwijder hardnekkige programma’s die niet op andere manieren verwijderd kunnen worden.
						</dd>
					</dl>
					<dl>
						<dt><h4>Gebundelde programma’s</h4></dt>
						<dd>Verwijder bundleware die meekomt met freeware en adverteert of gegevens steelt</dd>
						<dd><span><em>alleen bij IObit</em></span></dd>
					</dl>
					<dl>
						<dt><h4>Schadelijke en reclamemakende plug-ins  <span><em> 50% BETER </em></span></h4></dt>
						<dd>Verwijder plug-ins die advertenties of schadelijke links in webpagina’s toevoegen</dd>
						<dd><span><em>alleen bij IObit</em></span></dd>
					</dl>
				</div>
			</div>
			<div class="two clearfix">
				<div class="right fl">
					<h3><b> Grondiger Opschonen</b></h3>
					<dl class="safe">
						<dt><h4>Wist <span><em>15% BETER </em></span></h4></dt>
						<dd>
							Overgebleven bestanden en register items na deïnstallatie
						</dd>
					</dl>
					<dl>
						<dt><h4>Detecteert <span class="green"><em>NIEUW</em></span></h4></dt>
						<dd>
							Systeemwijzigingen die programma’s doorvoeren tijdens de installatie en herstelt ze.
						</dd>
					</dl>
					<dl>
						<dt><h4>Scant <span class="green"><em>NIEUW</em></span></h4></dt>
						<dd>
							Restanten van programma’s die eerder zonder IObit Uninstaller zijn gedeïnstalleerd.
						</dd>
						<dd><span><em>alleen bij IObit</em></span></dd>
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
			<h2>Verschil Tussen Uw Huidige Versie en IObit Uninstaller 9 PRO</h2>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
					<tr>
						<th class="text"></th>
						<th class="space"></th>
						<th class="itema"><span>Uw Huidige Versie </span></th>
						<th class="space"></th>
						<th class="itemb"><span> IObit Uninstaller 9 PRO</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></span>
							Verwijder meerdere programma’s, browser extensies en Windows apps tegelijkertijd
						</td>
						<td class="space"></td>
						<td class="itema"><span class="currt"></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></span>
							Identificeer en verwijder hardnekkige programma’s en bundleware
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></span>
							Detecteer en herstel systeemwijzigingen tijdens installaties
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></span>
							Identificeer schadelijke en reclamemakende extensies 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></span>
							Schoon automatisch restanten op die andere uninstallers niet kunnen verwijderen
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></span>
							Verwijder restanten van reeds verwijderde programma’s  
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></span>
							Update verouderde programma’s in één klik 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></span>
							Update IObit Uninstaller automatisch naar de nieuwste versie 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></span>
							24/7 technische ondersteuning
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- feature end -->
	<div class="between-buy">
		<div class="wrapper">
			<h2>Krijg Nu  <span>50% Korting</span> op IObit Uninstaller 9 PRO</h2>
			<ul class="price clearfix">
				<li class="first">
					<strong>€<big>14</big>,99</strong> <del>€29,99</del>
					<p class="change"> Slechts<b class="giftNum">50</b> over</p>
				</li>
				<li>
					<a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-iu9preorder1499&ref=nl_iu9preorder1499expired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_iu"
						 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp-nl');">
					  Profiteer Nu
					</a>
				</li>
			</ul>
		</div>
	</div>

	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Wat Vinden Anderen?</h2>
			<div class="box">
				<div class="relist clearfix">
					<dl class="on clearfix">
						<dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
						<dd>
							<h3>Media recensie</h3>
							<p>"Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen."</p>
							<h4>MakeUseOf</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A. Watts"/></dt>
						<dd>
							<h3>Klantbeoordeling</h3>
							<p>"Ik gebruik de IObit programma’s al jaren en ben er erg tevreden mee. Daarom blijf ik trouw IObit producten gebruiken. Vroeger hielp ik mensen met het oplossen van computer- en Android telefoonproblemen, ik installeerde altijd IObit programma’s op de apparaten en vroeg ze regelmatig hun apparaten te scannen zodat hun laptop/computer/mobiel weer gerepareerd en snel werd! :) Ik beveel de uninstaller (inclusief de laatste beta versie) ten sterkste aan als veilig en betrouwbaar programma dat hardnekkige programma’s verwijdert! En belangrijker, het verwijdert verborgen codes die softwareontwikkelaars expres achterlaten om schimmige software opnieuw te installeren! Alle IObit producten zijn veilig en gemakkelijk in gebruik. Top software!"</p>
							<h4>Jeff A. Watts</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
						<dd>
							<h3>Klantbeoordeling</h3>
							<p>"Ik vind IObit Uninstaller super om te gebruiken, omdat het alles heeft wat je maar kan wensen. Ik vind het fijn dat het alle restanten verwijdert. Het heeft ook een software updater die je waarschuwt als software op je computer een update nodig heeft. Dat het meerdere programma’s tegelijk kan verwijderen maakt het echt een topper! Het is eigenlijk precies wat je nodig hebt om je computer in goede conditie te houden."</p>
							<h4>Lynette van Niekerk</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
						<dd>
							<h3>Klantbeoordeling</h3>
							<p>"IObit Uninstaller is de beste software om programma’s van een computer te verwijderen, het is snel en zeer effectief. De prestaties zijn vele malen beter dan de normale uninstaller van Windows, dit programma schoont echt alle restanten van programma’s op zodat de computer niet trager wordt. Ik heb het een paar maanden gebruikt en weet nu al niet meer wat ik zonder zou moeten. Ik adviseer al mijn vrienden en familie IObit Uninstaller te gebruiken."</p>
							<h4>Paulo Martins</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
						<dd>
							<h3>Klantbeoordeling</h3>
							<p>"IObit Uninstaller wordt beter met elke update. Ik gebruik het programma al meer dan 3 jaar. Het programma laadt snel en is simpel in het gebruik. De functies die ik het meeste gebruik zijn Gezamenlijk Verwijderen, Krachtige Scan, Bestand Versnipperaar en laatst geïnstalleerde programma’s zodat ik snel kan zien welke van die programma’s ik prettig vind en welke niet. Je kunt ook gemakkelijk de opstartprogramma’s beheren waardoor de pc sneller opstart."</p>
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
			<h2>Wereldwijde Awards</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Opmerking:</dt>
				<dd>
					U kunt direct na de bestelling aan de slag met de RC versie van IObit Uninstaller 9. Deze versie bevat vrijwel alle functies van het nieuwe IObit Uninstaller 9. Bij de officiële lancering van IObit Uninstaller 9, laten we u weten dat u kunt updaten naar de definitieve versie.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
	  		<span class="discount">55% OFF</span>
	  	</div>
	  	<div class="price fr clearfix">
	  		<div class="one fl">
	  			<div id="fReduce" class="reduceNum">
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>5</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  			</div>
	  			<p class="change"><span class="viewNum"><?php echo $viewNum;?></span>  mensen kijken, slechts<b class="giftNum">50</b>over!</p>
	  		</div>
	  		<div class="two fl"><strong>€<big>14</big>,99</strong> <del>€29,99</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
	  			   href="https://www.iobit.com/buy.php?product=nl-iu9preorder1499&ref=nl_iu9preorder1499expired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_iu"
						 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp-nl');">
	  			  Profiteer Nu
	  			</a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
	<script>
		refStr="<?php echo $refStr;?>";
		preData=JSON.parse('<?php echo $preDataJs;?>');
	</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>