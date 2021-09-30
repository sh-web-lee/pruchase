<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
if (empty($_GET['ref'])) $_GET['ref'] = 'deaff_asc_2017scaninstall';
if($_GET['ref']=='cb138a54'){
	$buyHref="https://www.cleverbridge.com/289/?scope=checkout&cart=184284&pricerule=1pc1999&ref=".$_GET['ref']."&AFFILIATE=".$_GET['aff'];
}else{
	$buyHref="http://www.iobit.com/buy.php?product=de_asc101pc1999_aff&ref=".$_GET['ref']."&aff=".$_GET['aff'];
}
include $pRootUrl . 'include/common.inc.php';

?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Aktiviere jetzt Advanced SystemCare 10 PRO!</title>
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
		#products .comparepage .compare .button.yellowbtn.middle span{padding: 12px 0 15px;}
		#products .compare .major-title .leftarea .button.yellowbtn span{padding: 15px 32px;}
	</style>
</head>
<body id="products">
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<?php echo $linkStr;?>
<div id="header">
	<div class="wrapper">
		<a href="http://www.iobit.com/de/index.php" class="logo" target="_blank">IObit</a>
	</div>
</div>
<div id="container" class="comparepage">
	<!-- compare tab -->
	<div class="compare">
		<div class="wrapper">
			<!--  -->
			<div class="major-title">
				<div class="leftarea">
					<h1>Aktiviere jetzt Advanced SystemCare 10 PRO!</h1>
					<p>Upgrade auf PRO, um das Internet und den PC um bis zu 300% zu beschleunigen.</p>
					<ul>
						<li>60% sparen </li>
						<li class="price">Nur 15, 99€</li>
						<li><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'deaffasc102017scaninstall')" class="button yellowbtn"><span>JETZT KAUFEN</span></a></li>
					</ul>
				</div>
				<dl class="rightarea">
					<dt><img src="<?php echo $pResUrl; ?>images/asc-leftside.png" alt=""><span class="guarantee orange"></span></dt>
					<dd> Zeitlich begrenztes Angebot!</dd>
					<dd id="countdown" class="countdown"><strong>2</strong>d: <strong>5</strong>h: <strong>53</strong>m: <strong>2</strong>s <em>813</em><i>*</i></dd>
				</dl>
			</div>
			<!--  -->
			<table border="0" cellspacing="0" cellpadding="0" width="100%" class="comparetab">
				<thead>
				<tr>
					<td colspan="2" class="intro">
						<p><strong>Einige Vorteile nach dem Upgrade auf ASC PRO</strong> :</p>
						<p>Advanced SystemCare 10 PRO ist eine All-in-One PC Optimierungs-Anwendung, die Ihren PC um bis zu 300% beschleunigt. Mit einer erweiterten Datenbank bietet ASC besseren PC Schutz, um Ihnen einen schnelleren und saubereren PC & noch reibungsloseres und sichereres Surferlebnis zu garantieren. Um den Benutzern einen besseren Service zu bieten, wird der Ressourcen-Manager hinzugefügt, so dass die Nutzung von RAM, Festplatten und CPU in Echtzeit überwacht wird und RAM automatisch gereinigt wird.</p>
						<p><img src="<?php echo getStaticUrl('images/promo_awards.png')?>" alt=""></p>
					</td>
					<td class="items itemb">
						<table>
							<thead>
							<tr class="name">
								<td class="items"><span>Advanced SystemCare<br>PRO</span></td>
							</tr>
							<tr class="product">
								<td class="items">
									<div class="discount"><img src="<?php echo getStaticUrl('images/discount-60.png')?>" alt=""></div>
									<a rel="superbox[gallery][b]" href="<?php echo $pResUrl; ?>images/ascpro-large.jpg"><img src="<?php echo $pResUrl; ?>images/ascpro-small.jpg" alt=""></a>
								</td>
							</tr>
							<tr class="price">
								<td class="items"><span><strong> Nur 15, 99€</strong> <del>39.99€</del></span></td>
							</tr>
							<tr class="limit">
								<td><span>für 1 PC / 1 Jahr Abo</span></td>
							</tr>
							<tr class="handle">
								<td><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'deaffasc102017scaninstall')" target="" class="button yellowbtn middle"><span>JETZT KAUFEN</span></a></td>
							</tr>
							<tr class="special">
								<td>
									<span>Sonderangebot zur Neuerscheinung!</span>
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
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_02.png')?>" alt=""></td>
					<td class="text"><span>Ultimatives System Tuneup für Top Performance</span><i class="improved">Verbessert</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png')?>" alt="" data-pin-nopin="true"></td>
					<td class="text"><span>Erhöht die Internetgeschwindigkeit um bis zu 300% mit dem Internet Booster</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_16.png')?>" alt=""></td>
					<td class="text"><span>Erwischt Eindringlinge automatisch mit der GesichtsID</span><i class="new">Neu</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_15.png')?>" alt=""></td>
					<td class="text"><span>Automatische RAM-Bereinigung mit der Echtzeit Optimierung</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_05.png')?>" alt=""></td>
					<td class="text"><span>Tiefenreinigung der Windows-Registry</span><i class="improved">Verbessert</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png')?>" alt=""></td>
					<td class="text"><span>Maximale Festplattenleistung</span><i class="improved">Verbessert</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png')?>" alt=""></td>
					<td class="text"><span>Umfassende Erkennung von Sicherheitsbedrohungen</span><i class="improved">Verbessert</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png')?>" alt=""></td>
					<td class="text"><span>Automatische Beseitigung von privaten Spuren im Internet mit der Anti Browser Verfolgung</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_18.png')?>" alt=""></td>
					<td class="text"><span>Überwacht RAM, CPU & Festplatte mit dem verbesserten Leistungsmonitor</span><i class="improved">Verbessert</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_17.png')?>" alt=""></td>
					<td class="text"><span>Bis zu 200% schnellerer Systemstart</span><i class="improved">Verbessert</i></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_11.png')?>" alt=""></td>
					<td class="text"><span>Automatisches Update auf die neueste Version</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png')?>" alt=""></td>
					<td class="text"><span>Läuft im Hintergrund - Installiere und vergisst es</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png')?>" alt=""></td>
					<td class="text"><span>Fantastische neue Designs und Oberflächen</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				<tr>
					<td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png')?>" alt=""></td>
					<td class="text"><span>Kostenloser technischer Support 24/7</span></td>
					<td class="items itemb"><span class="yellowstar"></span></td>
				</tr>
				</tbody>
				<tfoot>
				<tr class="name">
					<td></td>
					<td></td>
					<td class="items"><span>Advanced SystemCare<br>PRO</span></td>
				</tr>
				<tr class="handle">
					<td></td>
					<td></td>
					<td class="items"><a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'deaffasc102017scaninstall')" target="" class="button yellowbtn middle"><span>JETZT KAUFEN</span></a></td>
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
	<!-- end compare tab -->
	<!-- review -->
	<div class="review clearfix">
		<div class="wrapper">
			<div class="media_rev">
				<h3>Media Review </h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/chip.png')?>" alt=""></dt>
					<dd><h4>"Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte."</h4></dd>
					<dd>Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version. <span> -Chip</span></dd>
				</dl>
			</div>
			<div class="user_rev" id="user_rev">
				<div class="content">
					<h3 class="hide">Kundenbewertung</h3>
					<dl class="hide">
						<dd><h4>„Das Produkt an sich ist genau so großartig wie der dazugehörige Support.“</h4></dd>
						<dd>„Ich machte es wie viele andere auch. Ich startete mit der Testversion und kaufte dann anschließend die Vollversion. Es hält meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie enttäuscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. Meiner Meinung nach ist der Support ein wichtiger Aspekt, wenn ich mich für ein Produkt entscheide. ASC gewinnt bei Produkt und Support.“</dd>
					</dl>
					<dl class="hide">
						<dd><h4>„Advanced SystemCare Pro ist das beste Programm, das ich seit Jahren getestet habe.“</h4></dd>
						<dd>„Wie die meisten Menschen bin ich kein Computerexperte. Ich weiß nicht wie viele Programme, die alle von sich behaupten das Beste zu sein, ich über die letzten Jahre ausprobiert habe, ohne auch nur ansatzweise an meinen Schutz von Advanced SystemCare heranzukommen. Seit ich dieses großartige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als übertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus. Vielen Dank an Euch alle, dass Ihr mein Leben so viel einfacher gemacht habt.“</dd>
					</dl>
					<dl class="hide">
						<dd><h4>„Advanced SystemCare v10 PRO ist eine überwältigende Wahl.“</h4></dd>
						<dd>„Als Computer-Reparatur-Techniker finde ich, dass man durch das Herunterladen und Scannen mit ASC die häufigsten Probleme lösen kann. Nach der Reparatur empfehle ich allen Kunden ein Pro-Paket zu kaufen. Wer braucht einen Techniker? Wenn Sie die Macht des Advanced SystemCare Pro haben, das mit Ihrem System 24*7 Stunden arbeiten kann. Das ist das beste Produkt, das ein Heimanwender kaufen kann. Das Produkt erleichtert meinen Job, vielen Dank dafür.“</dd>
					</dl>
					<dl class="show">
						<dd><h4>„Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein.“</h4></dd>
						<dd>„Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer läuft so viel besser und schneller, nachdem ich ASC10 downgeloadet habe. Es hat unnötige und doppelte Dateien, leere Ordner gesäubert und ich habe es zum Vernichten von Dateien genutzt. Es säuberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.“</dd>
					</dl>
				</div>
				<ul class="users" style="width: 640px;">
					<li class=""><img src="<?php echo getStaticUrl('images/bruce-ramsay.jpg')?>" alt="">Bruce Ramsay<br>2015</li>
					<li><img src="<?php echo getStaticUrl('images/hank-ewert.jpg')?>" alt="">Hank Ewert<br>2016</li>
					<li class=""><img src="<?php echo getStaticUrl('images/charles-r-widick.jpg')?>" alt="">Charles R. Widick<br>2015</li>
					<li class="current"><img src="<?php echo getStaticUrl('images/loretta-harnarine.jpg')?>" alt="">Loretta Harnarine<br>2016</li>i>
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
				<p>Von über <strong>250.000.000</strong> Benutzern ausgewählt</p>
				<p>Beschleunigen Sie Ihren PC um bis zu 300% </p>
			</h2>
			<dl class="handelbuy">
				<dt>15, 99€ </dt>
				<dd>
					<p class="butt-holder">
						<a href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'deaffasc102017scaninstall')" target="" class="button yellowbtn"><span>Jetzt kaufen</span></a>
					</p>
				</dd>
				<dd>100% Geld zurück Garantie <br>für 1 PC / 1 Jahr Abo</dd>
			</dl>
		</div>
	</div>
	<!-- end btmarea -->
	<!-- bottom -->
	<div id="bottom" class="clearfix">
		<div class="wrapper">
			<div class="footer" style="padding-top:40px;">
				<p> © 2005 - <?php echo date(Y)?> IObit.  Alle Rechte Vorbehalten &nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/privacy.php"><span>Datenschutz</span></a>&nbsp;&nbsp;|&nbsp;&nbsp;<a rel="nofollow" href="http://www.iobit.com/en/legal.php"><span>Rechtliche Hinweise</span></a></p>
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