<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
$refStr=empty($_GET['ref'])?'deaff_db5_2018scaninstall':$_GET['ref'];
$buyHref="https://www.iobit.com/buy.php?product=deaffdb51pc1999&ref=".$refStr."&aff=".$_GET['aff'];
if(preg_match('/^fspi([0-9]*)$/',$refStr,$matches)){
	$match=$matches[1];
	if($match==''){
		$buyHref='http://macbooster.7eer.net/c/301238/434372/4385';
	}else{
		$buyHref='http://macbooster.7eer.net/c/'.$match.'/434372/4385';
	}
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Aktivieren Sie jetzt Driver Booster 5 PRO !</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,600italic' rel='stylesheet' type='text/css'>
	<link href="<?php echo getStaticUrl('style/base.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/common.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/lang.css')?>" rel="stylesheet" media="all">
	<link href="<?php echo getStaticUrl('style/products.css')?>" rel="stylesheet" media="all">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script src="<?php echo getStaticUrl('script/jquery.superbox-min.js')?>" type="text/javascript"></script>
	<style>
		#products .compare .major-title .leftarea .button.yellowbtn span{padding: 15px 32px; }
		#products .compare table tfoot .name span { margin-bottom: 6px; color: #fd9610; }
		.comparetab .awards { display: block; clear: both; list-style: none; }
		.comparetab .awards li { float: left; margin-right: 20px; }
		.comparetab .awards li img { max-height: 92px; max-width: 100px; }
		#products .comparepage .btmarea .handelbuy dt span {
    color: #ff3c3c;
    font-size: 36px;
    vertical-align: text-top; }
    #products .comparepage .compare .button.yellowbtn.middle span { padding: 15px 0; font-size: 20px; }
	</style>
</head>
<body id="products">
	<div id="header">
		<div class="wrapper">
			<a href="http://www.iobit.com/en/index.php" class="logo" target="_blank">IObit</a>
		</div>
	</div>
	<div id="container" class="comparepage">
		<!-- comparetab -->
		<div class="compare">
			<div class="wrapper">
				<div class="major-title">
					<div class="leftarea">
						<h1>Aktivieren Sie jetzt Driver Booster 5 PRO !</h1>
						<p>Upgraden Sie auf PRO, um einen stabileren PC und ein reibungsloses Gaming Erlebnis zu genießen !</p>
						<ul>
							<li>Bis zu 70% sparen</li>
							<li class="price">Nur 19,99€</li>
							<li><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb52018scaninstall');" class="button yellowbtn"><span>JETZT KAUFEN</span></a></li>
						</ul>
					</div>
					<dl class="rightarea">
						<dt><img src="<?php echo $pResUrl; ?>images/db_left256.png" alt=""><span class="guarantee orange"></span></dt>
						<dd>Zeitlich begrenztes Angebot</dd>
						<dd id="countdown" class="countdown"><strong>0</strong>d: <strong>4</strong>h: <strong>57</strong>m: <strong>49</strong>s <em>488</em><i>*</i></dd>					</dl>
				</div>
				
				<table border="0" cellspacing="0" cellpadding="0" width="100%" class="comparetab">
					<thead>
						<tr>
							<td colspan="2" class="intro">
								<p>Mit einer 200% größeren online Datenbank hält Driver Booster 5 mehr PC Treiber aktuell sicher mit nur einem Klick. Mehr Spiel-Komponenten wurden in Driver Booster 5 hinzugefügt, so dass Sie ein noch reibungsloseres Gaming Erlebnis haben. Außerdem können Sie mindestens 200% schnellere Download-Geschwindigkeit genießen und PC-Treiber beim Systemleerlauf automatisch installieren und aktualisieren.</p>
								<ul class="awards">
									<li>
										<a href="https://www.pcmag.com/article2/0,2817,2499949,00.asp?source=autosuggest">
											<img src="<?php echo getStaticUrl('images/pcmag-nl.png')?>" alt="">
										</a>
									</li>
									<li>
										<a href="https://www.netzwelt.de/download/13595-advanced-systemcare-free.html">
											<img src="<?php echo getStaticUrl('images/netzwelt-de.png')?>" alt="">
										</a>
									</li>
									<li>
										<a href="http://www.techradar.com/reviews/iobit-advanced-systemcare-11 ">
											<img src="<?php echo getStaticUrl('images/techrader.png')?>" alt="">
										</a>
									</li>
									<li>
										<a href="https://advanced-systemcare.informer.com/awards/">
											<img src="<?php echo getStaticUrl('images/si-award-epick5.png')?>" alt="">
										</a>
									</li>
									<li>
										<a href="http://download.cnet.com/blog/download-blog/downloads-of-the-year-2014/">
											<img src="<?php echo getStaticUrl('images/badge-top-10-download.jpg')?>" alt="">
										</a>
									</li>								
								</ul>
							</td>
							<td class="items itemb">
								<table>
									<thead>
										<tr class="name">
											<td class="items"><span>Driver Booster PRO</span></td>
										</tr>
										<tr class="product">
											<td class="items">
											<div class="discount"><img src="<?php echo getStaticUrl('images/discount-70.png')?>" alt=""></div>
												<a rel="superbox[gallery][b]" href="<?php echo $pResUrl; ?>images/dbpro-large.jpg"><img src="<?php echo $pResUrl; ?>images/dbpro-small.jpg" alt=""></a>
											</td>
										</tr>
										<tr class="price">
											<td class="items"><span><strong>Nur 19,99€<strong> <del>69,99€</del></strong></strong></span></td>
										</tr>
										<tr class="limit">
											<td><span>für 1 PC / 1 Jahr Abo</span></td>
										</tr>
										<tr class="handle">
											<td><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb52018scaninstall');" class="button yellowbtn middle"><span>JETZT KAUFEN</span></a></td>
										</tr>
										<tr class="special">
											<td>
												<span>Zeitlich begrenztes Angebot</span>
												<p class="countdown" id="countdown"></p>
											</td>
										</tr>
									</thead>
								</table>
							</td>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_01.png')?>" alt=""></td>
							<td class="text"><span>Scannt und erkennt automatisch veraltete, fehlende &amp; fehlerhafte Treiber</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_02.png')?>" alt=""></td>
							<td class="text"><span>Downloaden Sie aktuelle Treiber und updaten Sie veraltete mit einem Klick</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_15.png')?>" alt=""></td>
							<td class="text"><span>Kleines Treiberpaket mit neuem verkürzten Treiberalgorithmus</span><i class="improved">Verbessert</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_16.png')?>" alt=""></td>
							<td class="text"><span>Sicheres Updaten mit AUSSCHLIEßLICH zertifizierten WHQL Treibern	</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_03.png')?>" alt=""></td>
							<td class="text"><span>Entsperrt die Geschwindigkeitsbeschränkung von Treiber-Updates</span><i class="improved">Verbessert</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_17.png')?>" alt=""></td>
							<td class="text"><span>200% größere Datenbank, um mehr veraltete &amp; seltene Treiber zu updaten</span><i class="improved">Verbessert</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_12.png')?>" alt=""></td>
							<td class="text"><span>Reduziert Einfrieren &amp; Abstürze des Systems für bessere Leistung</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_18.png')?>" alt=""></td>
							<td class="text"><span>Verbesserter selbständiger Download für schnellere Downloads</span><i class="improved">Verbessert</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_07.png')?>" alt=""></td>
							<td class="text"><span>Automatisches Backup aller Treiber zur Sicherheitswiederherstellung	</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_12.png')?>" alt=""></td>
							<td class="text"><span>Automatische Installation und Aktualisierung beim Systemleerlauf</span><i class="new">Neu</i></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_14.png')?>" alt=""></td>
							<td class="text"><span>	Erhalten Sie Vorzug bei Updates für Spielkomponenten für ein besseres Gaming-Erlebnis</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_09.png')?>" alt=""></td>
							<td class="text"><span>Automatische Updates auf die neuste Version</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
						<tr>
							<td class="icons"><img src="<?php echo getStaticUrl('images/cop_db_i_10.png')?>" alt=""></td>
							<td class="text"><span>Kostenloser technischer Support 24/7</span></td>
							<td class="items itemb"><span class="yellowstar"></span></td>
						</tr>
					</tbody>
					<tfoot>
						<tr class="name">
							<td></td>
							<td></td>
							<td class="items"><span>Driver Booster PRO</span></td>
						</tr>
						<tr class="handle">
							<td></td>
							<td></td>
							<td class="items"><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb52018scaninstall');" class="button yellowbtn middle"><span>JETZT KAUFEN</span></a></td>
						</tr>
						<tr class="limit">
							<td></td>
							<td></td>
							<td class="items"><span>Sonderangebot zur Neuerscheinung!</span></td>
						</tr>
					</tfoot>
				</table>
			</div>
		</div>
		<!-- end comparetab -->
		<!-- review -->
		<div class="review clearfix">
			<div class="wrapper">
				<div class="media_rev">
					<h3>Media Review</h3>
					<dl>
						<dt>
						     <a href="http://www.pcmag.com/review/351094/iobit-driver-booster-pro" target="_blank"><img src="<?php echo getStaticUrl('images/netzwelt-de.png')?>" alt=""></a>
                            </dt>
						<dd><h4>„Mit der Anwendung Driver Booster ist es ein Kinderspiel, die installierten Treiber auf dem aktuellsten Stand zu halten.“</h4></dd>
						<dd>„Um die Treiber nun auf den aktuellsten Stand zu bringen, könnt ihr entweder jeden Treiber mit einem Klick auf den "Aktualisieren"-Button einzeln aktualisieren, oder ihr Klick auf den roten "Alle aktualisieren"-Button und die Software beginnt damit, alle Treiber automatisch auf den aktuellsten Stand zu bringen.” <span>-NetzWelt</span></dd>
					</dl>
				</div>
								<div class="user_rev" id="user_rev">
					<div class="content">
						<h3>User Review</h3>
												<dl class="show">							<dd><h4>"Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten."</h4></dd>
							<dd>"Durch Driver Booster weiß ich mit Leichtigkeit, welche Gerätetreiber veraltet sind und kann diese einfach updaten. Nebenbei hilft es mir auch dabei, Soundfehler, Netzwerkfehler, Gerätefehler usw. zu beheben. Ich hatte es vor dem Gebrauch nicht geglaubt, aber nach wenigen Anwendungen, lernte ich es zu lieben. Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten. Danke IObit."</dd>
						</dl>
												<dl class="hide">							<dd><h4>"Ich kann Driver Booster nur dringendst empfehlen, er wird euch dabei helfen, Updates und Treiber schnell und einfach zu updaten."</h4></dd>
							<dd>„Driver Booster ist eine großartige Anwendung. Für jemanden, der viele Anwendungen und Treiber besitzt, aber nicht die Zeit dafür hat diese manuell zu aktualisieren, kann Driver Booster nur dringendst empfehlen, er wird Euch dabei helfen, Updates und Treiber schnell und einfach zu updaten.“</dd>
						</dl>
												<dl class="hide">							<dd><h4>"Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"</h4></dd>
							<dd>"Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"</dd>
						</dl>
											</div>
					<ul class="users" style="width: 480px;">
											<li class="current"><img src="<?php echo getStaticUrl('images/myo-thuya.jpg')?>" alt="">Myo Thuya<br>2016</li>
											<li><img src="<?php echo getStaticUrl('images/adam-backlund.jpg')?>" alt="">Adam Backlund<br>2016</li>
											<li><img src="<?php echo getStaticUrl('images/wayne-bowler.jpg')?>" alt="">Wayne Bowler<br>2013</li>
										</ul>
				</div>
							</div>
		</div>
		<!-- end review -->
				<div class="statementarea">
			<div class="wrapper">
				<dl class="statement">
					<dt>Note:</dt>
					<dd>*.Solche Werbeaktionen können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorheriger Ankündigung geändert werden.</dd>
				</dl>
			</div>
		</div>
				<!-- btmarea -->
		<div class="btmarea clearfix">
			<div class="wrapper">
				<h2>
					<p>Downloaden und updaten Sie mehr seltene Treiber schnell und sicher</p>
		            <p>Reibungsloses Gaming Erlebnis mit verschiedenen Spiel-Komponenten</p>
				</h2>
				<dl class="handelbuy">
					<dt>19,99€<span>*</span></dt>
					<dd>
						<p class="butt-holder">
							<a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb52018scaninstall');" class="button yellowbtn middle"><span>JETZT KAUFEN</span></a>
						</p>
					</dd>
					<dd>100% Geld zurück Garantie <br>für 1 PC / 1 Jahr Abo</dd>
				</dl>
			</div>
		</div>
		<!-- end  btmarea-->
		<!-- bottom -->
		<div id="bottom" class="clearfix">
			<div class="wrapper">
				<div class="footer" style="padding-top:40px;">
					<p> © 2005 - <?php echo date('Y')?> IObit. Alle Rechte Vorbehalten &nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/de/privacy.php"><span>Datenschutz</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/de/legal.php"><span>Rechtliche Hinweise</span></a></p>
				</div>
			</div>
		</div>
	</div>
	<script type="text/javascript">
	$(document).ready(function() {
		$.superbox();
		/*user review*/
		var user_rev_width = $("#products #user_rev .users li").outerWidth() * $("#products #user_rev .users li").length ;
		$("#products #user_rev .users").css("width", user_rev_width);

		$("#products #user_rev .users li").mouseover(function(event) {
			var num = $(this).index();
			var selecter = $(this);
			var target = $("#user_rev dl");
			selecter.addClass("current").siblings().removeClass("current")
			target.eq(num).removeClass("hide").addClass("show").siblings().removeClass("show").addClass("hide");
		});
	});

	function countdown(){
		var startTimestamp = 1383553207;
		var intervalTimestamp = 4*24*60*60;
		var dateObj = new Date();
		var time = dateObj.getTime().toString().substring(0,10);
		for(i=1;;i++){
			var remainingTime = (startTimestamp+intervalTimestamp*i)-time;
			if (remainingTime > 0) break;
		}
		var d = Math.floor(remainingTime/(24*60*60));
		var H = Math.floor(remainingTime/(60*60)%24);
		var i = Math.floor(remainingTime/60%60);
		var s = Math.floor(remainingTime%60);
		var mi = 999-dateObj.getMilliseconds();
		if (mi < 10){
			mi = '00'+mi;
		} else if(mi < 100) {
			mi = '0'+mi;
		}
		var countdown = '<strong>'+d+'</strong>d: <strong>'+H+'</strong>h: <strong>'+i+'</strong>m: <strong>'+s+'</strong>s <em>'+mi+'</em>';
		$('#countdown').html(countdown + '<i>*</i>');
		setTimeout('countdown()', 1);
	}
	countdown();
</script>
</body>
</html>