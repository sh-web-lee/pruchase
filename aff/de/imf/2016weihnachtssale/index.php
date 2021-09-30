<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
//if (empty($_GET['ref'])) $_GET['ref'] = '';

if($_GET['ref']=='imfxmaspopup-de'){
    $refstr='-imfxmaspopup';
}else{
    $refstr='';
}

function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;

$packsNum = ceil(microtime_float() * 2000 / 20000);
$packsNum = 360 - ($packsNum % 360);
if ($_GET['action'] == 'getPacks') {
  echo $packsNum;
  exit ;
}
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Sparen Sie bis zu 85% auf IMF PRO & erhalten Sie zwei Geschenke für das Familienpaket gratis.</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
		<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
		<script type="text/javascript">function decreasingPacks() {
    $.ajax({
      type: "GET",
        url: "index.php",
        data: "action=getPacks&r=" + Math.random(),
        success: function(packs) {
          $('#packs, #packs-floatlayer').html(packs);
          setTimeout('decreasingPacks()', 10000);
        }
      });
    }
    setTimeout('decreasingPacks()', 10000);
    </script>
	</head>
	<body>
		<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

    <!-- top -->
    <div class="top">
      <!-- header -->
      <div class="header">
        <div class="wrapper">
          <a class="logo" href="http://www.iobit.com" target="_blank"><img src="<?php echo $pResUrl; ?>images/logo.png"></a>
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
            <dd>Sparen Sie bis zu <strong>85%</strong> auf IMF PRO & <span>erhalten Sie zwei Geschenke für das Familienpaket <strong>GRATIS!</strong></span></dd>
          </dl>
          <div class="personl content">
            <h3> Persönliche Lösung</h3>
            <dl>
              <dt><strong>19,<span>99€</span></strong><del>39,95€</del></dt>
              <dd><i>/</i><span><font>1 PC</font><font>1 Jahr</font></span></dd>
            </dl>
            <a href="http://www.iobit.com/buy.php?product=de-aff-imf41pc<?php echo $refstr;?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'deaffimf42016weihnachtssale');" class="buybtn">Jetzt kaufen</a>
            <p><img src="<?php echo $pResUrl; ?>images/tage.jpg"></p>
          </div>
          <div class="familien content">
            <h3> Familienpaket</h3>
            <dl>
              <dt><strong>21,<span>99€</span></strong><del>159,83€</del></dt>
              <dd><i>/</i><span><font>3 PCs</font><font>1 Jahr</font></span></dd>
            </dl>
            <ul>
              <li><a href="javascript:void(0)" onclick="goTaget($('.gift-sd'))" class="f-left"><img src="<?php echo $pResUrl; ?>images/gift.jpg" alt="" ></a><span class="f-left">Smart Defrag Pro</span><span class="f-right"><strong>0€</strong> <del>19,99€</del></span></li>
              <li><a href="javascript:void(0)" onclick="goTaget($('.gift-sd'))" class="f-left"><img src="<?php echo $pResUrl; ?>images/gift.jpg" alt=""></a><span class="f-left">Protected Folder Pro</span><span class="f-right"><strong>0€</strong> <del>19,99€</del></span></li>
            </ul>
            <div class="clear"></div>
            <a href="http://www.iobit.com/buy.php?product=de-aff-imf43pcsdpf<?php echo $refstr;?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'deaffimf42016weihnachtssale');" class="buybtn">Jetzt kaufen</a>
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
          <dt>Was kann IMF 4 PRO?</dt>
          <dd>Ist top Anti-Malware/Anti-Spyware</dd>
          <dd>Schützt Ihren Browser vor Hijacker</dd>
          <dd>Blockiert bösartige Webseiten</dd>
          <dd>Bietet Echtzeitschutz & aktiven Schutz vor Viren</dd>
          <dd>Ist kompatibel mit allen Antivirus-Produkten</dd>
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
      <dt>Produktauszeichnungen</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/awards-banner.jpg"></dd>
    </dl>
    <div class="clear"></div>
    <div class="mediu">
      <dl class="chlp wrapper">
        <dt><strong>Media Review</strong><img src="<?php echo $pResUrl; ?>images/chlp.png"></dt>
        <dd>“Der "IObit Malware Fighter" tritt den Kampf gegen gefährliche Malware für Sie an.”</dd>
        <dd>“Der "IObit Malware Fighter" ist ein erweitertes Dienstprogramm zur Entfernung sowie zum Schutz vor gefährlicher Malware
     und Spyware. Auch Adware, Trojaner Keylogger, Bots, Würmer und Hijacker sollen es mit der Software schwerer haben, Ihren
     Computer anzugreifen.” </dd>
        <dd> -Chip.de</dd>
      </dl>
      <div class="clear"></div>
      <div class="user_rev warp review" id="user_rev">
        <div class="content wrapper">
          <h3>Kundenbewertung</h3>
          <dl class="show">
            <dd><h4>"We have not had a problem since using your products."</h4></dd>
            <dd>"We used to use up to a dozen different programs to keep our machines running smoothly and keep the bad guys out. It took hours every week to maintain security and performance. Now, with IObit Malware Fighter Pro and Advanced System Care Pro, everything is in one place and it takes us just a few minutes every couple of days to do the same jobs with much more confidence. We have not had a problem since using your products."</dd>
          </dl>
          <dl class="hidden">
            <dd><h4>"I also had other programs for this purpose installed, but IMF always finds the problems first and blocks them."</h4></dd>
            <dd>"Some years ago somebody drew my attention to IObit Malware Fighter. First I was sceptic. But after installing it, it became my favourite anti-malware program. It is very easy to use. Through the years it already has detected several threats and removed it. In cooperation with the other IObit programs, like for example ASC, I have a good PC protection. I now recommend these programs to all my friends and family."</dd>
          </dl>
        </div>
        <ul class="users" id="users">
          <li class="current mar"><img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="">Bob Bassett</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/peter-stoffers.jpg" alt="">Peter Stoffers</li>
        </ul>
      </div>
    </div>
    <div class="comparison_table wrapper" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th colspan="2" style="text-align:left">Sehen Sie welche Vorteile Ihnen die PRO edition bietet:</th>
            <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
            <th class="itema"><span>IMF PRO für 1 PC</span><br><strong>19,99€</strong> <del>39,95€</del><a href="http://www.iobit.com/buy.php?product=de-aff-imf41pc<?php echo $refstr;?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'deaffimf42016weihnachtssale');" class="btton">Jetzt kaufen</a></th>
            <th class="itemb"><span>IMF PRO für 3 PCs</span><br><strong>21,99€</strong> <del>159,83€</del><a href="http://www.iobit.com/buy.php?product=de-aff-imf43pcsdpf<?php echo $refstr;?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'deaffimf42016weihnachtssale');" class="btton">Jetzt kaufen</a></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
            <td class="virtue">Grundlegende Anti-Malware Funktionalität</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
            <td class="virtue">Vollständige Anti-Malware Fähigkeit mit IObit Anti-Malware Engine</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
            <td class="virtue">Erweiterter Bedrohungenschutz mit Bitdefender Antiviren-Engine</td>
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
            <td class="virtue">Umfassender Echtzeitschutz für erstklassige PC-Sicherheit</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
            <td class="virtue">Verhindert Vireninfektion durch USB-Datenträger</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
            <td class="virtue">Erkennt bösartige Prozesse, die im RAM laufen</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
            <td class="virtue">Automatische Reinigung der Internet-Spuren mit Browser Anti-Verfolgung </td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
            <td class="virtue">Erkennt Gefährdungen durch die Analyse böswilliger Aktionen</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
            <td class="virtue">Arbeitet intelligent im Hintergrund ohne Sie zu stören</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
            <td class="virtue">Automatische Updates auf die neuste Version</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
            <td class="virtue">Kostenloser 24/7 Technischer Support</td>
            <td class="itemb"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
          </tr>
        </tbody>
         <thead>
          <tr>
            <th colspan="2"></th>
            <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
            <th class="itema"><span>IMF PRO für 1 PC</span><br><strong>19,99€</strong> <del>39,95€</del><a href="http://www.iobit.com/buy.php?product=de-aff-imf41pc<?php echo $refstr;?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'deaffimf42016weihnachtssale');" class="btton">Jetzt kaufen</a></th>
            <th class="itemb"><span>IMF PRO für 3 PCs</span><br><strong>21,99€</strong> <del>159,83€</del><a href="http://www.iobit.com/buy.php?product=de-aff-imf43pcsdpf<?php echo $refstr;?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'deaffimf42016weihnachtssale');" class="btton">Jetzt kaufen</a></th>
          </tr>
        </thead>
      </table>
    </div>
    <dl class="annotation">
        <dt>Note:</dt>
        <dd>①.Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
        <dd>②.Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
    </dl>
    <!-- main end -->
    <div class="footer">Copyright © 2005 - 2016 IObit. Alle Rechte vorbehalten</div>
    <div class="floatlayer" id="floatlayer">
      <div class="wrapper">
        <h2>IMF PRO bietet umfassenden Echtzeit-Schutz für erstklassige PC-Sicherheit</h2>
        <ul>
          <li data-url="http://www.iobit.com/buy.php?product=de-aff-imf41pc<?php echo $refstr;?>"><i></i><span class="name">Persönliche Lösung</span> <span class="pc">1 PC / 1 Jahr</span><span><strong>19,99€ </strong><del>39,95€</del></span></li>
          <li data-url="http://www.iobit.com/buy.php?product=de-aff-imf43pcsdpf<?php echo $refstr;?>" class="currt"><i></i><span class="name">Familienpaket</span> <span class="pc">3 PCs / 1 Jahr</span><span><strong>21,99€ </strong><del>159,83€</del></span></li>
        </ul>
        <a href="http://www.iobit.com/buy.php?product=de-aff-imf43pcsdpf<?php echo $refstr;?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'deaffimf42016weihnachtssale');" class="fl-buybtn">Jetzt kaufen</a>
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

				$("#user_rev .users li").mouseover(function(event) {
					var num = $(this).index();
						$("#user_rev .users li").each(function(index, el) {
							$(this).removeClass('current');
						});
						$(this).addClass('current');
						$("#user_rev dl").each(function(index, el) {
							$(this).removeClass('show').addClass('hidden')
						});
						$("#user_rev dl").eq(num).removeClass('hidden').addClass('show');
				});

				cycleCountdown();
			});

			function goTaget(target) {
        var Theigth = target.offset().top - 160;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
      }

      $('.floatlayer ul li').click(function(){
        $('.floatlayer ul li').removeClass('currt');
        $(this).addClass('currt');
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
				//document.getElementById('counttime').innerHTML = '<li>'+h+'<span>Hr :</span></li><li>'+i+'<span>m :</span></li><li>'+s+'<span>s :</span></li><li>'+mi+'<span>ms</span> <sup>*</sup></li>';
				$("#counttime .member").eq(0).text(h).end().eq(1).text(i).end().eq(2).text(s).end().eq(3).text(mi);
				setTimeout('cycleCountdown()', 1);
			}
		</script>
	</body>
</html>