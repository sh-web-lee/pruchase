<?php
//	初始化
	error_reporting(0);
	define('IObit', 'IObit');
	if (@!$include){
        $pResUrl = './';
        $pRootUrl = '../../../../';
    }
	include $pRootUrl.'include/common.inc.php';
	
	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
	$buyNum = ceil(microtime_float()*1000/20000)-68799080;
	
	$packsNum = ceil(microtime_float()*2000/20000);
	$packsNum = 360-($packsNum%360);
	if ($_GET['action'] == 'getPacks'){
		echo $packsNum;
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Aktivieren Sie ASC Ultimative für 3 PCs mit großen Rabatt, und erhalten Sie kostenlose Geschenke！</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css"/>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function decreasingPacks(){
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&r="+Math.random(),
		success: function(packs){
			$('#packs').html(packs);
			setTimeout('decreasingPacks()', 10000);
		}
	});
}
setTimeout('decreasingPacks()', 10000);
</script>
</head>

<body>
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<div class="header">
    	<div class="warpper clearfix">
            <a href="http://www.iobit.com/de" class="logo" target="_blank"></a>
            <div class="title"></div>
            <dl class="time">
                <dt>Zeitlich begrenztes Angebot<sub>①</sub></dt>
                <dd id="counttime"><span>00</span><span>00</span><span>00</span><span>00</span><em>000</em></dd>
            </dl>
        </div>
    </div>
    <div class="middle">
    	<div class="warpper clearfix">
			<div class="lace">
              <div class="introduce">
                <h3>Sparen Sie <span>70%</span> auf ASC & erhalten Sie das Super-Geschenke GRATIS</h3>
                <p>Aktivieren Sie ASC Ultimative für 3 PCs und erhalten Sie ein kostenloses Geschenkpaket! <span>Nur noch <em id="packs"><?php echo $packsNum; ?></em> erhältlich!</span></p>
                <div class="foucs"><img src="<?php echo $pResUrl; ?>img/salepack.jpg"></div>
              </div>
              <div class="control">
                <ul>
                  <li class="name">Ultimativer PC-Schutz</li>
                  <li class="price">Jetzt <span>29,99€</span></li>
                  <li class="original">Vorher: <span>109,99€</span></li>
                  <li class="link"><a href="http://www.iobit.com/buy.php?product=de-ascupf-aff&ref=de_ascu7purchase&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_ascu_aff" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014flashsale-de-aff');" title="Kaufen Sie Advanced SystemCare Ultimate jetzt, können Sie Protected Folder KOSTENLOS erhalten.">JETZT AKTIVIEREN</a></li>
                  <li class="people"><span>Von <?php echo $buyNum; ?></span> Nutzern aktiviert</li>
                  <li class="subscription">Für<span>3 PCs</span>/ 1 Jahr Abo</li>
                </ul>
              </div>
            </div>
            
            <h3 class="corssname">Ultimativer Schutz und ultimative Performance von Ihrem PC!</h3>
            <div class="whatdo clearfix">
            	<div class="left">
                	<div class="boxshot"></div>
                    <dl>
                        <dt>Advanced SystemCare Ultimate 7:</dt>
                        <dd>Ein automatisierter und all-in-one-Schutz gegen alle Arten von Viren und des Systems, Verlangsamung des Systems, Einfrieren und Absturz. Es ist Ihre beste Lösung für Sicherheit und Performance.</dd>
                        <dd><img src="<?php echo $pResUrl; ?>img/product_awards.png"></dd>
                        <dd class="edition"><a href="#compare">Erfahren Sie mehr über Pro Edition >></a></dd>
                        <dd class="sale"></dd>
                    </dl>
                </div>
                <div class="right">
                	<dl class="clearfix">
                    	<dt><img src="<?php echo $pResUrl; ?>img/add2pcs.jpg"></dt>
                        <dd class="name">Zusätzliche 2 PCs Unterstützte</dd>
                        <dd>Advanced SystemCare Ultimate- Lizenz unterstützt 2 zusätzliche PCs, sodass Sie es mit Ihrer Familie und Freunden teilen können.</dd>
                        <dd class="free"></dd>
                    </dl>
                    <dl class="end clearfix">
                    	<dt><img src="<?php echo $pResUrl; ?>img/boxshot_pf.jpg"></dt>
                        <dd class="name">Protected Folder</dd>
                        <dd>Keine Sorgen von Datendiebstahl oder Datenlecks!</dd>
                        <dd class="free"></dd>
                    </dl>
                </div>
            </div>
            <div class="cross clearfix">
            	<div class="left">
                    <dl class="discribe">
                      <dd>Aktivieren Sie Advanced SystemCare Ultimative heute,können Sie die 2 zusätzliche Secured PCs und Protected Folder kostenlos erhalten.</dd>
                      <dt>Jetzt sparen Sie bis zu 70%!</dt>                      
                    </dl>
                </div>
                <dl class="link">
                	<dt>Von <span><?php echo $buyNum; ?></span> Menschen aktiviert</dt>
					        <dd><a href="http://www.iobit.com/buy.php?product=de-ascupf-aff&ref=de_ascu7purchase&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_ascu_aff" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014flashsale-de-aff');" title="Purchase  Advanced SystemCare Ultimate to get Protected Folder for FREE.">JETZT AKTIVIEREN</a></dd>
                </dl>
                <dl class="right">
                	<dt>Jetzt <span>29,99€</span></dt>
                    <dd>Im Wert von <span>109,99€</span></dd>
                </dl>
            </div>
            <dl class="awards">
            	<dt>Produktauszeichnungen</dt>
                <dd><img src="<?php echo $pResUrl; ?>img/awards.jpg"></dd>
            </dl>
            <div class="usersaying" id="compare">
                <h2>Kundenbewertung</h2>
                <div class="boxa" style="margin-top:0;">
                    <h3>"Advanced System Care Ultimate is the new mother load. The big winner! "</h3>
                    <dl class="user">
                      <dt><img src="<?php echo $pResUrl; ?>img/rod_garnett.jpg" alt=""/></dt>
                      <dd>Rod Garnett</dd>
                      <dd>2012</dd>
                    </dl>
                    <dl class="quit">
                      <dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
                      <dd>I have had a past problem of always messing with my computer. Then I got my first copy of Advanced Systemcare. There is no need to mess around any longer. Now that I have antivirus, included in the product, my need for secondary software is none existent. Advanced System Care Ultimate is the new mother load. The big winner! My computer is always up to date and runs like deer. Unlike other products; there has not been a constant stream of conflicts."</dd>
                    </dl>
                  </div>
                  <div class="boxb" style="margin-top:0;">
                    <h3>"I recommend advanced systemcare ultimate as their antivirus/system optimizer."</h3>
                    <dl class="user">
                      <dt><img src="<?php echo $pResUrl; ?>img/dareen_lim.jpg" alt=""/></dt>
                      <dd>Dareen Lim</dd>
                      <dd>2013</dd>
                    </dl>
                    <dl class="quit">
                      <dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
                      <dd>On the past version of advanced systemcare ultimate, i had no problem on almost everything, system, malwares, etc. and now, it's updated, more features on it will make my laptop run 5x faster than before. i also like the new skin of it. so next time i fix other's computer, i recommend advanced systemcare ultimate as their antivirus/system optimizer."</dd>
                    </dl>
                </div>
                <div class="clear"></div>
            </div>
            <div class="comparison_table">
              <h4>Warum wählen Sie Advanced SystemCare Ultimate 7 aus?</h4>
              <div id="hidetab">
                <dl class="comtable">
                  <dt><span>Besserer Schutz</span>, und <span>keine Performance Lag mehr</span>. Siehe unter Vergleich</dt>
                  <dd><img src="<?php echo $pResUrl; ?>img/comparetable.png"  /></dd>
                </dl>
                <dl class="comlist">
                  <dt>Unübertroffene Erkennungsrate und maximaler Schutz</dt>
                  <dd>Reinigung von versteckte und hartnäckige Viren, Trojaner, Würmer, Spyware, Adware und verschiedenen Malware mit nur einem Klick. Advanced SystemCare Ultimate 7 bietet auch einen always-on, automatisierten und proaktiven Schutz gegen alle Arten von Internet-Bedrohungen mit schnellen Aktualisierung der Virendatenbank.</dd>
                  <dt>Genießen die zuversichtliche Sicherheit ohne Verlangsamung des Systems</dt>
                  <dd>Das System läuft mit seiner Spitzengeschwindigkeit ohne Leistungsverzögerung aufgrund unserer branchenführenden Internet-Sicherheitstechnologie.</dd>
                  <dt>Sicheres Surfen, Suchen, Herunterladen und Teilen mit Vertrauen</dt>
                  <dd>Proaktive Virus Control-Technologie überwacht Verhalten von Prozess in Echtzeit, scannt Dateien, die durch E-Mail geteilt wird und blockiert mögliche Bedrohungen. Während Sie Ihren PC benutzen, garantiert die unübertroffene Erkennungsrate Ihnen eine sichere Umgebung.</dd>
                  <dt>Haben Sie eine hohe abgestimmte Leistung und genießen Sie ein neues PC-Gefühl</dt>
                  <dd>Bereits bewährte leistungsstarke PC Tune-up-Fähigkeit entfesselt die volle Leistung Ihres PC. Mit Echtzeit-Optimierung und ActiveBoost-Merkmal werden System-Ressourcen intelligent verwaltet, und dann haben Sie einen super-schnellen PC.</dd>
                </dl>
              </div>
           </div>
           <div class="floatlayer" id="floatlayer">
				      <dl class="left">
              	<dt>Sparen Sie <span>70%</span>, genießen Sie besten Schutz und beste Leistung!</dt>
                <dd>Von <span><?php echo $buyNum; ?></span> Menschen aktiviert</dd>
              </dl>
              <div class="price">29,99€</div>
              <dl class="right">
              	<dt><a id="buyUrl3" href="http://www.iobit.com/buy.php?product=de-ascupf-aff&ref=de_ascu7purchase&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_ascu_aff" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014flashsale-de-aff');" title="Purchase  Advanced SystemCare Ultimate to get Protected Folder for FREE.">JETZT AKTIVIEREN</a></dt>
                  <dd id="counttime1"><span>00</span>d: <span>00</span>h: <span>00</span>m: <span>00</span>s <em>000</em></dd>
              </dl>
           </div>
           <dl class="annotation">
              <dt>Anmerkung:</dt>
              <dd>①.Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
            </dl>
        </div>
        <div class="copy">Copyright &copy; 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
    </div>
    <script type="text/javascript">
    $(function () {
        $(window).on('scroll',function(){
        if ($(window).scrollTop() > 390) {
          $('#floatlayer').addClass('on');
        }else{
          $('#floatlayer').removeClass('on');
        }
      });  
    });
    </script>
    <script type="text/javascript">
		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<span>'+h+'</span><span>'+i+'</span><span>'+s+'</span><em>'+mi+'</em>';
			document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em><sub>①</sub>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
	</script>
<?php echo $gJavascript['foot']; ?>
</body>
</html>