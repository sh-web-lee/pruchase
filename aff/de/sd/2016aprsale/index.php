<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
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
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Sparen Sie 70% auf Smart Defrag PRO & haben Sie den zusätzlichen Schutz kostenlos!</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
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
		<!-- header -->
		<div class="header">
			<div class="wrapper">
				<a href="http://www.iobit.com" class="logo" target="_blank">IObit</a>
				<h1>Bis zu 70% reduziert Spezielles Angebot für neue Smart Defrag 5</h1>
				<ul id="counttime1">
					<li>00 <span>Std:</span></li>
					<li>00 <span>Min:</span></li>
					<li>00 <span>sek:</span></li>
					<li>000<span>Ms</span><sup>*</sup></li>
				</ul>
				<div class="clear"></div>
		  </div>
			<div class="content">
				<div class="left">
					<img src="<?php echo $pResUrl; ?>images/sd-box.png" alt="">
				</div>
				<div class="arrow"></div>
				<div class="right">
					<dl class="message">
						<dt><strong>Smart Defrag 5 PRO <span>(1 Jahr / 1 PC)</span></strong> <b>19,99€</b> <del>29,99€</del></dt>
						<dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>SD PRO Extra 2 PCs unterstützt</strong> <img src="<?php echo $pResUrl; ?>images/gratis.png" alt=""> <del>19,99€</del></dd>
						<dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>AMC Security PRO</strong> <img src="<?php echo $pResUrl; ?>images/gratis.png" alt=""> <del>19,99€</del></dd>
					</dl>
					<dl class="buy">
						<dt><strong>0,55€</strong>/Monat/PC</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=de-aff-sd5purchase201604b" onclick="ga('send', 'event', 'sdbuy', 'buy', 'deaffsd52016aprsale')" class="buybtn">Jetzt kaufen</a></dd>
						<dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Nur noch <strong class="packs"><?php echo $packsNum; ?></strong> erhältlich!</dd>
					</dl>
				</div>
			</div>

		</div>
		<!-- header end -->
		<div class="wrapper accepted">
			<img src="<?php echo $pResUrl; ?>images/accepted.jpg" alt="">
		</div>
		<div class="wrapper clnet">
			<h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
			<img src="<?php echo $pResUrl; ?>images/clnet.jpg" alt="">
		</div>
		<div class="wrapper sd-content clearfix">
			<h2>Maximierte Festplatten-Performance&beschleunigter PC mit SD 5 PRO</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons001.png" alt=""></dt>
				<dd><strong>Neue Ultraschneller Motor</strong> <span>Defragmentiert Dateien effizienter und gründlich in kürzerer Zeit</span></dd>
			</dl>
			<dl class="right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons002.png" alt=""></dt>
				<dd><strong>Bis zu 200% schneller *</strong> <span>Beschleunigte Dateizugriffsgeschwindigkeit & Spiel-Abschussgeschwindigkeit</span></dd>
			</dl>
			<div class="clear"></div>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons003.png" alt=""></dt>
				<dd><strong>Automatisch Smart Defrag</strong> <span>Defragmentiert ausgewählte Dateien und Datenträger automatisch und  intelligent ohne Unterbrechung</span></dd>
			</dl>
			<dl class="right">
				<dt><img src="<?php echo $pResUrl; ?>images/icons004.png" alt=""></dt>
				<dd><strong>Schnellerer PC-Start</strong> <span>Genießen Sie schnelleren PC-Start und Top-System-Laufgeschwindigkeit mit Boot Time Defrag</span></dd>
			</dl>
			<div class="clear"></div>
			<img src="<?php echo $pResUrl; ?>images/sd-content.png" alt="" class="img-sd-content">
			<p><a href="javascript:void(0);" onclick="goTaget($('#compare'))">Mehr Infos über die PRO Edition></a></p>
		</div>
		<div class="wrapper between-buy clearfix">
			<div class="left">
				<dl class="sd">
					<dt><img src="<?php echo $pResUrl; ?>images/big-sd.png" alt=""></dt>
					<dd><strong>19,99€</strong> <del>29,99€</del></dd>
				</dl>
				<dl class="free">
					<dt><img src="<?php echo $pResUrl; ?>images/two-sd.png" alt=""></dt>
					<dd>Extra 2 PCs unterstützt</dd>
					<dd><span class="see-more">Mehr erfahren</span></dd>
				</dl>
				<dl class="free amc">
					<dt><img src="<?php echo $pResUrl; ?>images/amc-free.png" alt=""></dt>
					<dd>Schützt Android-Geräte vor Viren </dd>
					<dd><span class="see-more">Mehr erfahren</span></dd>
				</dl>
			</div>
			<div class="pop-content hidden">
				<span class="close"></span>
				<dl>
					<dt>Zusätzliche2 PCs Unterstützt</dt>
					<dd>Smart Defrag 5 PRO Lizenz unterstützt zusätzliche2 PCs, so dass Sie es mit Ihrer Familie und Freunden teilen können!</dd>
					<dt>AMC Security PRO <span>Multi-Geräte</span></dt>
					<dd class="check">Beschleunigt Ihr Handy um bis zu 200%</dd>
					<dd class="check">Echtzeitschutz vor mobilen Bedrohungen</dd>
					<dd class="check">Voller Schutz für Ihre privaten Daten</dd>
					<dd class="check">   Pionier auf dem Gebiet mobiler Zahlungen & keine Sorgen mehr um Betrug   </dd>
				</dl>
			</div>
			<dl class="right buy">
				<dt><strong>0,55€</strong>/Monat/PC</dt>
				<dd><a href="https://www.iobit.com/buy.php?product=de-aff-sd5purchase201604b" onclick="ga('send', 'event', 'sdbuy', 'buy', 'deaffsd52016aprsale')" class="buybtn">Jetzt kaufen</a></dd>
				<dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Nur noch <strong class="packs"><?php echo $packsNum; ?></strong> erhältlich!</dd>
			</dl>
		</div>
		<div class="review">
		  <div class="wrapper">
		    <div class="media_rev">
		      <h3>Media Review</h3>
		      <dl>
		        <dt><img src="<?php echo $pResUrl; ?>images/chip.png" alt=""></dt>
		        <dd><strong>“Mit dem kostenlosen "Smart Defrag" lassen sich Festplatten vollkommen automatisch oder manuell defragmentieren.”</strong></dd>
		        <dd>“Smart Defrag" hilft Ihnen, die Schnelligkeit Ihres PCs beizubehalten. Dabei komprimiert das Tool die Dateien auf der Festplatte und schließt die Speicherlücken. So sparen Sie Speicherplatz und häufig benutzte Programme werden an die schnell erreichbaren Orte der Festplatte verlegt.”<span>-Chip.de</span></dd>
		      </dl>
		    </div>
		    <div class="user_rev" id="user_rev">
		      <div class="content">
		        <h3>Kundenbewertung</h3>
		        <dl class="show">
		          <dd><h4>„Smart Defrag ist eine sehr gute Defragmentierungs-Software“.</h4></dd>
		          <dd>„Smart Defrag ist eine sehr gute Defragmentierungs-Software. Es arbeitet im Hintergrund, wenn Computer im Leerlauf ist, so dass man es kaum merkt. Als Ergebnis: Treiber werden permanent defragmentiert, dann hat es den schnellen Zugriff und weniger Verschleiß. Smart Defrag ist der beste kostenloser Festplatten-Defragmentierer, den ich je benutzt habe und ich werde es meiner Familie und Freunden auf jeden Fall empfehlen!“</dd>
		        </dl>
		        <dl>
		          <dd><h4>„Es ist ein einfach zu benutzender Tool, den du für die Festplatten oder SSD haben musst“.</h4></dd>
		          <dd>„Ich betreibe eine Kombination von RAID 0 SSDs und RAID 0 HDDs und verwende Smart Defrag Pro, um meine Treiber zu analysieren, zu defragmentieren und mit der Spitzenleistung zu halten. Alle Software von IObit sind einfach zu installieren und sehr zuverlässig. Man braucht nur es zu installieren und dann vergisst es. Smart Defrag nutzt sehr wenig Speicherplatz, so dass das System nicht verlangsamt wird. Besonders empfehlenswert“.</dd>
		        </dl>
		        <dl>
		          <dd><h4>„Seit der Nutzung dieser fantastischen Software laufen meine Desktop und Laptop immer schneller“.</h4></dd>
		          <dd>„Ich habe Smart Defrag für mehrere Jahre verwendet. Seit der Nutzung dieser fantastischen Software laufen meine Desktop und Laptop immer schneller. Zusammen mit Advanced SystemCare Ultimate hat man ein komplettes Werkzeug, um das System up-to-date, schnell und sicher zu halten. Mit Smart Defrag kannst du dein System in einem Top Zustand zu halten, auch wenn du keinen technischen Hintergrund hast“.</dd>
		        </dl>
		      </div>
		      <ul class="users">
		        <li class="active"><img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">Amnon<br>2014</li>
		        <li class=""><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">Edward Lee Ah Yen<br>2014</li>
		        <li class=""><img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">Hans<br>2014</li>
		      </ul>
		    </div>
		  </div>
		</div>
		<div class="comparison_table wrapper" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th colspan="2"><b>Welche Vorteile bietet Ihnen die PRO Edition :</b></th>
          <th class="itemb">Smart Defrag FREE</th>
          <th class="itema"><span>SD PRO + Geschenke Graits</span>
          <span class="last"><strong>19,99€</strong> <del>69,97€</del></span>
          1 Jahr / 3 PCs
            <a href="https://www.iobit.com/buy.php?product=de-aff-sd5purchase201604b" onclick="ga('send', 'event', 'sdbuy', 'buy', 'deaffsd52016aprsale')" class="tbbuybtn">Jetzt kaufen</a>
           </th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons01.jpg"></td>
          <td class="virtue">Grundlegende Defragmentierung der Festplatte und Optimierung</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons02.jpg"></td>
          <td class="virtue">Bis zu 200% schnellere Datenzugriffsgeschwindigkeit</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons03.jpg"></td>
          <td class="virtue">Boot-Time-Defragmentierung für schnelleren PC-Start</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons04.jpg"></td>
          <td class="virtue">Defragmentiert fragmentierte Dateien automatisch& smart</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons05.jpg"></td>
          <td class="virtue">Anpassende Defragemtierungsmode& Festplatten/Dateien</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons06.jpg"></td>
          <td class="virtue">Verwendt DMA für bessere, schnellere& stabilere Datenübertragung</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons07.jpg"></td>
          <td class="virtue">Keine Unterbrechung bei Arbeiten oder Spielen mit Stiller Modus</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons08.jpg"></td>
          <td class="virtue">Top Spielerfahrung mit Spieloptimerung</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons09.jpg"></td>
          <td class="virtue">Geplante Aufgabe unterstützt leere Defragmentierung</td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons10.jpg"></td>
          <td class="virtue"> Automatisches Update auf die neueste Version</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/table-icons11.jpg"></td>
          <td class="virtue">Kostenloser 24/7 technischer Support</td>
          <td class="itemb"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        </tbody>
        <tfoot>
	        <tr>
	          <th colspan="2"></th>
	          <th class="itemb">Smart Defrag FREE</th>
	          <th class="itema"><span>Smart Defrag PRO <br>+ Geschenke Graits</span>
	           </th>
	        </tr>
        </tfoot>
      </table>
  </div>
  <div class="fy-banner wrapper">
  	<img src="<?php echo $pResUrl; ?>images/bottom-sd-content.png" alt="">
  	<dl>
  		<dd>
  			<span><img src="<?php echo $pResUrl; ?>images/spped.png" alt="">Beschleunigt Ihren PC mit smarter Defragmentierung</span>
  			<span><img src="<?php echo $pResUrl; ?>images/imporve.png" alt="">Verbessert PC Leistung mit optimierter Festplatte</span>
  		</dd>
  		<dt>
  			<a href="https://www.iobit.com/buy.php?product=de-aff-sd5purchase201604b" onclick="ga('send', 'event', 'sdbuy', 'buy', 'deaffsd52016aprsale')" class="buybtn">Jetzt kaufen</a>
  		</dt>
  	</dl>
  </div>
  <dl class="annotation wrapper">
  	<dt>Note:</dt>
  	<dd>*.Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
  	<dd>*.Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
  </dl>
		<!-- footer -->
		<div class="footer">
			<p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
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
				document.getElementById('counttime1').innerHTML = '<li>'+h+'<span>Std : </span></li><li>'+i+'<span>Min : </span></li><li>'+s+'<span>Sek : </span></li> <li>'+mi+'<span>Ms </span><sup>*</sup></li>';
				setTimeout('cycleCountdown()', 1);
			}
		</script>
	</body>
</html>