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

$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt'))){
  $refStr.='-'.$_GET['ref'];
}

if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Sparen Sie bis zu 83% auf IMF PRO & erhalten Sie zwei Geschenke für das Familienpaket gratis.</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
	</head>
	<body>
		<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

    <!-- top -->
    <div class="top">
      <!-- header -->
      <div class="header">
        <div class="wrapper">
          <a class="logo" href="https://www.iobit.com" target="_blank"><img src="<?php echo $pResUrl; ?>images/logo.png"></a>
          <div class="clear"></div>
          <h1>Weihnachtsangebot</h1>
          <ul class="counttime clearfix" id="counttime">
            <li class="member">02</li>
            <li>:</li>
            <li class="member">34</li>
            <li>:</li>
            <li class="member">56</li>
            <li>:</li>
            <li class="member ms">123</li>
          </ul>
          <div class="clear"></div>
          <dl class="imf-message clearfix">
            <dt><img src="<?php echo $pResUrl; ?>images/imf-boxshot-header.png"></dt>
            <dd>Sparen Sie bis zu <strong>83%</strong> auf IMF PRO &  <br> erhalten Sie zwei Geschenke für das Familienpaket <span>GRATIS!</span></dd>
          </dl>
          <div class="personl content">
            <h3> Persönliche Lösung</h3>
            <dl>
              <dt><strong>19,<span>99€</span></strong><del>39,95€</del></dt>
              <dd><i>/</i><span><font>1 PC</font><font>1 Jahr</font></span></dd>
            </dl>
            <a href="http://www.iobit.com/buy.php?product=de-imf51pc1999&ref=de_imf51pcpurchase1802a<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802a-de')" class="buybtn">Jetzt kaufen</a>
            <p><img src="<?php echo $pResUrl; ?>images/payment.png"></p>
          </div>
          <div class="familien content">
            <h3> Familienpaket</h3>
            <dl>
              <dt><strong>21,<span>99€</span></strong><del>129,80€</del></dt>
              <dd><i>/</i><span><font>3 PCs</font><font>1 Jahr</font></span></dd>
            </dl>
            <ul>
              <li><a href="javascript:void(0)" onclick="goTaget($('.gift-sd'))" class="f-left"><img src="<?php echo $pResUrl; ?>images/gift.jpg" alt="" ></a><span class="f-left">Smart Defrag Pro</span><span class="f-right"><strong>0€</strong> <del>29,90€</del></span></li>
              <li><a href="javascript:void(0)" onclick="goTaget($('.gift-sd'))" class="f-left"><img src="<?php echo $pResUrl; ?>images/gift.jpg" alt=""></a><span class="f-left">Protected Folder Pro</span><span class="f-right"><strong>0€</strong> <del>39,95€</del></span></li>
            </ul>
            <div class="clear"></div>
            <a href="http://www.iobit.com/buy.php?product=de-imf53pcsdpf2199&ref=de_imf5sdpfpurchase1802a<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802a-de')" class="buybtn">Jetzt kaufen</a>
            <p>Sehr empfehlenswert<img src="<?php echo $pResUrl; ?>images/star.jpg"></p>
          </div>
        </div>
      </div>
      <!-- header end -->
    </div>
    <!-- top end -->
    <!-- main -->
    <div class="title wrapper">
      <h2>IMF ist eine der beliebtesten Sicherheitslösungen für PCs!</h2>
    </div>
    <div class="gift-message">
      <div class="wrapper">
        <img src="<?php echo $pResUrl; ?>images/benefits.jpg" alt="" class="imf">
        <dl class="imf-dl">
          <dt>Was kann IMF 5 PRO?</dt>
          <dd>Top Anti-Malware/Anti-Spyware</dd>
          <dd>Schützt Ihren Browser vor Hijacker</dd>
          <dd>Blockiert bösartige Webseiten</dd>
          <dd>Bietet Echtzeitschutz & aktiven Schutz vor Viren</dd>
          <dd>Kompatibel mit allen Antivirus-Produkten</dd>
        </dl>
      </div>
      <div class="clear"></div>
      <div class="gift-sd">
        <div class="wrapper">
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/sd.jpg" alt=""></dt>
            <dd>Schneller Zugriff auf Dateien</dd>
            <dd>Ihren PC um 100% beschleunigen ②</dd>
            <dd>Festplatten sicher & automatisch defragmentieren</dd>
          </dl>
          <dl>
            <dt><img src="<?php echo $pResUrl; ?>images/pf.jpg" alt=""></dt>
            <dd>Das Fortschrittlichste und am einfachsten zu benutzende Ordner-Schutzwerkzeug</dd>
            <dd>Machen Sie sich keine Sorgen um Datendiebstahl aus böswilligen Quellen</dd>
          </dl>
        </div>
        <div class="clear"></div>
      </div>
    </div>
    <dl class="awards wrapper">
      <dt>Produktauszeichngen</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/awards.png"></dd>
    </dl>
    <div class="clear"></div>
    <div class="mediu">
      <dl class="chlp wrapper">
        <dt><strong>Media Review</strong><img src="<?php echo $pResUrl; ?>images/chlp.png"></dt>
        <dd>„Um sich vor Angriffen zu schützen reicht die Free-Version nicht aus. Allerdings erhalten Sie erst durch die kostenpflichtige Pro-Version einen erweiterten Malware-Schutz sowie automatische Updates. Eine weitere Funktion, die Sie erst nach dem Upgade zur Pro-Version erhalten, ist der Schutz gegen Ransomware.“          </dd>
        <dd> -Chip.de</dd>
      </dl>
      <div class="clear"></div>
      <div class="review">
        <div class="content wrapper">
          <h3>Kundenbewertung</h3>
          <div class="reviews current">„Wir waren es gewöhnt über ein Dutzend verschiedene Programme zu verwenden, damit unsere Maschinen fehlerfrei laufen und um böse Dinge zu verhindern. Um die Sicherheit und Leistung aufrechtzuerhalten, benötigten wir mehrere Stunden pro Woche. Aber mit IObit Malware Fighter Pro und Advanced System Care Pro hat man alles in einem. Jetzt nimmt es uns nur noch wenige Minuten alle paar Tage, um dieselbe Arbeit mit viel mehr Vertrauen zu erledigen. Seitdem wir ihre Produkte nutzen, haben wir keine Probleme mehr.“</div>
          <div class="reviews">„Vor einigen Jahren machte mich jemand auf den IObit Malware Fighter aufmerksam. Anfangs war ich skeptisch, aber nach der Installation wurde es mein lieblings Anti-Malware Programm. Es lässt sich sehr einfach bedienen. Im Laufe der Jahre hat es bereits verschiedene Bedrohungen erkannt und entfernt. Durch das Zusammenspiel mit anderen IObit Programmen, wie beispielsweise dem ASC, habe ich einen guten PC-Schutz. Diese Programme werde ich nun all meinen Freunden und meiner Familie empfehlen.“</div>
        </div>
        <ul class="users">
          <li class="current"><img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="">Bob Bassett</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/peter-stoffers.jpg" alt="">Peter Stoffers</li>
        </ul>
      </div>
    </div>
    <div class="comparison_table wrapper" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th colspan="2" class="text">Mehr Vorteile von <br> IObit Malware Fighter PRO auf einen Blick</th>
            <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
            <th class="itema"><span>IMF PRO für 1 PC</span><strong>19,99€</strong> <del>39,95€</del><a href="http://www.iobit.com/buy.php?product=de-imf51pc1999&ref=de_imf51pcpurchase1802a<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802a-de')" class="btton">Jetzt kaufen</a></th>
            <th class="itemb"><span>IMF PRO für 3 PCs</span><strong>21,99€</strong> <del>129,80€</del><a href="http://www.iobit.com/buy.php?product=de-imf53pcsdpf2199&ref=de_imf5sdpfpurchase1802a<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802a-de')" class="btton">Jetzt kaufen</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
            <td class="virtue">Grundlegende Anti-Malware Funktion</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
            <td class="virtue">Erweiterter Bedrohungsschutz mit Bitdefender Anti-Viren-Engine</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
            <td class="virtue">Erkennt und verhindert Ransomware wie Petya/GoldenEye, Wannacry</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
            <td class="virtue">Grundlegender Echtzeitschutz gegen bösartiges Verhalten</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
            <td class="virtue">Umfassender Echtzeitschutz für erstklassige PC Sicherheit</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
            <td class="virtue">Schützt Ihre Kamera vor unbefugtem Zugriff</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
            <td class="virtue">Verhindert Vireninfektion durch USB-Datenträger</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
            <td class="virtue">Erkennt bösartige Prozesse, die im RAM laufen </td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
            <td class="virtue">Scannt bis zu 130% schneller um aktive Bedrohungen rasch zu finden</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
            <td class="virtue">Erkennt Gefährdungen durch die Analyse böswilliger Aktionen</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
            <td class="virtue">Löscht Ihre Surfspuren automatisch um böswillige Verfolgung zu blockieren</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
            <td class="virtue">Scannt die herunterdeladenen Dateien und entfernt die Anzeigen für höhere Sicherheit</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
            <td class="virtue">Verbesserter Shutz für Startseiten & DNS</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
            <td class="virtue">Automatische Updates auf die neuste Version</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
            <td class="virtue">Kostenloser technischer Support 24/7</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
        </tbody>
         <tfoot>
          <tr>
            <th colspan="2"></th>
            <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
            <th class="itema"><span>IMF PRO für 1 PC</span><strong>19,99€</strong> <del>39,95€</del><a href="http://www.iobit.com/buy.php?product=de-imf51pc1999&ref=de_imf51pcpurchase1802a<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802a-de')" class="btton">Jetzt kaufen</a></th>
            <th class="itemb"><span>IMF PRO für 3 PCs</span><strong>21,99€</strong> <del>129,80€</del><a href="http://www.iobit.com/buy.php?product=de-imf53pcsdpf2199&ref=de_imf5sdpfpurchase1802a<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802a-de')" class="btton">Jetzt kaufen</a></th>
          </tr>
        </tfoot>
      </table>
    </div>
    <dl class="annotation">
        <dt>Note:</dt>
        <dd>①.Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
        <dd>②.Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
    </dl>
    <!-- main end -->
    <div class="footer">Copyright © 2005 - 2018 IObit. Alle Rechte vorbehalten</div>
    <div class="floatlayer" id="floatlayer">
      <div class="wrapper">
        <h2>IMF PRO bietet umfassenden Echtzeit-Schutz für erstklassige PC-Sicherheit</h2>
        <ul>
          <li data-url="http://www.iobit.com/buy.php?product=de-imf51pc1999&ref=de_imf51pcpurchase1802a<?php echo $refStr;?>&refs=de_purchase_imf"><i></i><span class="name">Persönliche Lösung</span> <span class="pc">1 PC / 1 Jahr</span><span><strong>19,99€ </strong><del>39,95€</del></span></li>
          <li data-url="http://www.iobit.com/buy.php?product=de-imf53pcsdpf2199&ref=de_imf5sdpfpurchase1802a<?php echo $refStr;?>&refs=de_purchase_imf" class="currt"><i></i><span class="name">Familienpaket</span> <span class="pc">3 PCs / 1 Jahr</span><span><strong>21,99€ </strong><del>129,80€</del></span></li>
        </ul>
        <a href="http://www.iobit.com/buy.php?product=de-imf53pcsdpf2199&ref=de_imf5sdpfpurchase1802a<?php echo $refStr;?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201802a-de')" class="fl-buybtn">Jetzt kaufen</a>
      </div>
    </div>

		<script>
			$(document).ready(function() {
		    $(window).on('scroll', function () {
          var scrollHeight = $(".header .buybtn").offset().top;
          if ($(window).scrollTop() > scrollHeight) {
            $('#floatlayer').addClass('on');
          } else {
            $('#floatlayer').removeClass('on');
          }
        });
				$(".users li").mouseover(function(event) {
					var num = $(this).index();
          $(this).addClass('current').siblings().removeClass("current");
					$(".reviews").eq(num).addClass('current').siblings().removeClass("current");
				});
				cycleCountdown();
			});

			function goTaget(target) {
        var Theigth = target.offset().top - 160;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
      }

      $('.floatlayer ul li').click(function(){
        $(this).addClass('currt').siblings().removeClass("currt");
        $(".fl-buybtn").attr("href", $(this).attr('data-url'));
      });

			function cycleCountdown(){
				var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
				var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				$("#counttime .member").eq(0).text(h).end().eq(1).text(i).end().eq(2).text(s).end().eq(3).text(mi);
				setTimeout('cycleCountdown()', 1);
			}
		</script>
	</body>
</html>