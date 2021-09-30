<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'septemb_p' . $date;
    $c_name_t='septemb_t' . $date;
    if ($_COOKIE[$c_name]===null) {
        $totalNum=$packsNum=rand(52,74);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t,$totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 3) {
            $packsNum = 3;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum'=>$packsNum));
    exit();
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Sparen Sie bis zu 80% auf Advanced SystemCare 13 Pro &amp; erhalten Sie ein Geschenkpaket kostenlos!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank"></a>
    <!-- title -->
    <h1><img src="<?= getStaticUrl("images/deal_title.png")?>"></h1>
    <!-- content -->
    <div class="content clearfix">

      <!-- 1pc -->
      <div class="sepsale_box fl sepsale_box1">
		  <img src="<?= getStaticUrl("images/sepsale_box1.png")?>">
        <dl>
          <dt>60% Rabatt</dt>
          <dd>
            <!-- price -->
            <p class="price"><big>23</big>,99€ <del>59,99€</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-asc152399-ac&ref=de_asc153pcpurchase202110<?= $refStr; ?>&refs=de_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc2009a-de')">
              Jetzt kaufen
            </a>
          </dd>
        </dl>
      </div>

      <!-- 3pc bundle -->
      <div class="sepsale_box fr sepsale_box2">
		   <img src="<?= getStaticUrl("images/sepsale_box2.png")?>">
		   <a href="javascript:void(0);" class="sepsale_excla" onclick="goTarget($('.sepsale_option .sepsale_title'))">
               <img src="<?= getStaticUrl("images/sepsale_excla.png")?>"></a>
        <dl>
          <dt>80% Rabatt</dt>
          <dd>
            <!-- price -->
            <p class="price"><big>24</big>,99€ <del>139,89 €</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-asc153pciupf2499&ref=de_asc153pcbundlepurchase2110<?= $refStr; ?>&refs=de_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcbundle2009a-de')">
              Jetzt kaufen
            </a>
			<p class="sepsale_tipsico"><img src="<?= getStaticUrl("images/sepsale_tipsico.png")?>">Nur <span>45</span> Stück übrig!</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payments -->
<div class="payments"><img src="<?= getStaticUrl("images/sepsale_payment.png")?>" alt=""></div>
<!-- end payments -->

<div class="sepsale_advan">
	<div class="sepsale_title">
		<h2>Warum Advanced SystemCare Pro?</h2>
		<p>Advanced SystemCare PRO ist eine erweiterte Version <br>Die automatischen und erweiterten Funktionen stellen sicher, dass Ihr PC wie neu funktioniert.</p>
	</div>
	<div class="sepsale_adcnt">
		<div class="wrapper sepsale_adcbox">
			<div class="sepsale_aimg">
				<img class="showed" src="<?= getStaticUrl("images/sepsale_acceimg4.png")?>">
				<img src="<?= getStaticUrl("images/sepsale_acceimg2.png")?>">
				<img src="<?= getStaticUrl("images/sepsale_acceimg3.png")?>">
				<img src="<?= getStaticUrl("images/sepsale_acceimg1.png")?>">
			</div>
				<dl class="sepsale_acare sepsale_acare1 checked">
					<dt></dt>
					<dd>
						<h5>Neuer KI-Modus</h5>
						<p>Bereinigt versteckter, nutzloser oder ungültiger Registrierungen mit dem neuen KI-Modus viel tiefer.</p>
					</dd>
				</dl>
				<dl class="sepsale_acare sepsale_acare2">
					<dt></dt>
					<dd>
						<h5>AUTOMATISCH</h5>
						<p>Beendet nicht verwendete Prozesse automatisch, um RAM freizugeben und die PC-Leistung zu verbessern.</p>
					</dd>
				</dl>
				<dl class="sepsale_acare sepsale_acare3">
					<dt></dt>
					<dd>
						<h5>SICHERER</h5>
						<p>Verbesserter Computer- und Privatsphäreschutz durch die Löschung von Browserverläufen und Blockierung von unerlaubten Zugriffen von Dritten.</p>
					</dd>
				</dl>
				<dl class="sepsale_acare sepsale_acare4">
					<dt></dt>
					<dd>
						<h5>SCHNELLER</h5>
						<p>Reduziert Systemstottern / - verzögerungen und beschleunigt den PC um bis zu 200% *</p>
					</dd>
				</dl>
		</div>
	</div>
</div>
<div class="sepsale_option">
	<div class="sepsale_title">
		<h2>Welche zusätzlichen Vorteile bekommen Sie von den Gratisgeschenken?</h2>
	</div>
	<div class="sepsale_oppro">
		<div class="sepsale_opbox">
			<img src="<?= getStaticUrl("images/sepsale_pfico1.png")?>">
			<h4>Protected Folder</h4>
			<p class="sepsale_opprice">1 Jahr/ 1 PC <del>19,95 €</del></p>
			<ul>
				<li>Schützt Ihre Dateien vor bösartigen Angriffen</li>
				<li>Ein Passwort für alle Dateien</li>
				<li>Schutz der Privatsphäre</li>
			</ul>
		</div>
		<div class="sepsale_opbox">
			<img src="<?= getStaticUrl("images/sepsale_pfico2.png")?>">
			<h4>IObit Uninstaller</h4>
			<p class="sepsale_opprice">1 Jahr/ 1 PC <del>19,99 €</del></p>
			<ul>
				<li>Entfernt unerwünschte Software</li>
				<li>Entfernt Webbrowser-Benachrichtigungen </li>
				<li>Reinigt automatisch Datenreste</li>
			</ul>
		</div>
	</div>
	
	<!-- review -->
	<div class="review">
	  <div class="wrapper">
		<div class="sepsale_title">
			<h2>Was sagen Andere?</h2>
		</div>
		  
	    <div id="dg-container" class="dg-container">
	      <div class="nav">
	        <span class="dg-prev"></span>
	        <span class="dg-next"></span>
	      </div>
	      <div class="content dg-wrapper">
	        <dl class="reviews">
	          <dt><img src="<?= getStaticUrl("images/sepsale_cnet.png")?>" alt="Cnet"></dt>
	          <dd>
	            <p>„Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte. Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version”.</p>
				<cite>CHIP</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?= getStaticUrl("images/sepsale_per4.png")?>" alt=""></dt>
	          <dd>
	            <p>„Wie die meisten Menschen bin ich kein Computerexperte. Seit ich dieses großartige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als übertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus”.</p>
				<cite>Hank Ewert</cite>
	          </dd>
			  
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?= getStaticUrl("images/sepsale_per2.png")?>" alt=""></dt>
	          <dd>
	            <p>„Ich machte es wie viele andere auch. Ich startete mit der Testversion und kaufte dann anschließend die Vollversion. Es hält meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie enttäuscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. Meiner Meinung nach ist der Support ein wichtiger Aspekt, wenn ich mich für ein Produkt entscheide. ASC gewinnt bei Produkt und Support”.</p>
				<cite>Bruce Ramsay</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?= getStaticUrl("images/sepsale_per3.png")?>" alt=""></dt>
	          <dd>
	            <p>„Als Computer-Reparatur-Techniker finde ich, dass man durch das Herunterladen und Scannen mit ASC die häufigsten Probleme lösen kann. Nach der Reparatur empfehle ich allen Kunden ein Pro-Paket zu kaufen. Wer braucht einen Techniker? Wenn Sie die Macht des Advanced SystemCare Pro haben, das mit Ihrem System 24*7 Stunden arbeiten kann. Das ist das beste Produkt, das ein Heimanwender kaufen kann. Das Produkt erleichtert meinen Job, vielen Dank dafür”.</p>
				<cite>Charles R. Widick</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?= getStaticUrl("images/sepsale_per1.png")?>" alt=""></dt>
	          <dd>
	            <p>„Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer läuft so viel besser und schneller, nachdem ich ASC15 heruntergeladen habe. Es hat unnötige und doppelte Dateien, leere Ordner gesäubert und ich habe es zum Vernichten von Dateien genutzt. Es säuberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich”.</p>
				<cite>Loretta Harnarine</cite>
	          </dd>
	        </dl>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end review -->
</div>

<div class="sepsale_dieme">
	<h2>Vertrauen von diesen Medien</h2>
	<div class="sepsale_diesen">
		<div class="wrapper sepsale_dieimg"><div class="sepsale_period sepsale_per1"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per2"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per3"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per4"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per5"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per6"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per7"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div><div class="sepsale_period sepsale_per8"><span class="sepsale_perid1"></span><span class="sepsale_perid2"></span><span class="sepsale_perid3"></span></div></div>
	</div>
</div>

<!-- compare -->
<div class="wrapper sepsale_compare clearfix">
		<div class="olduser_othtit">
				  <div class="olduser_tit1"><p>V E R G L E I C H S T A B E L L E</p></div>
				  <div class="olduser_tit2"><p>Advanced SystemCare <br>Free</p></div>
				  <div class="olduser_space"><p></div>
				  <div class="olduser_tit3"><p>Advanced SystemCare <br>Pro</p></div>
		</div>
		<table>
				  <tr>
					  <td class="olduser_are1"><p>Grundlegende Systemreinigung und -Optimierung</p></td>
					  <td class="olduser_fre olduser_are2"></td>
					  <td class="olduser_space"></td>
					  <td class="olduser_cor olduser_are3"></td>
				  </tr>
				  <tr>
				  	  <td><p>Live-Systemüberwachung</p></td>
				  	  <td class="olduser_fre"></td>
					  <td class="olduser_space"></td>
				  	  <td class="olduser_cor"></td>
				  </tr>
				  <tr>
				  	  <td><p>Säubert Registries um Systemabstürze zu verhindern</p></td>
				  	  <td class="olduser_wrong"></td>
					  <td class="olduser_space"></td>
				  	  <td class="olduser_cor"></td>
				  </tr>
				  <tr>
				  	  <td><p>Bis zu 200% schnellerer Systemstart</p></td>
				  	  <td class="olduser_wrong"></td>
					  <td class="olduser_space"></td>
				  	  <td class="olduser_cor"></td>
				  </tr>
				  <tr>
				  	  <td><p>Bis zu 300% höhere Internetgeschwindigkeit mit dem Internet Booster</p></td>
				  	  <td class="olduser_wrong"></td>
					  <td class="olduser_space"></td>
				  	  <td class="olduser_cor"></td>
				  </tr>
				  <tr>
				  	  <td><p>Schutz privater Daten vor nicht vertrauenswürdigen Programmen</p></td>
				  	  <td class="olduser_wrong"></td>
					  <td class="olduser_space"></td>
				  	  <td class="olduser_cor"></td>
				  </tr>
				  <tr>
				  	  <td><p>Automatisches Beenden von unbenutzen Programme und Prozesse</p></td>
				  	  <td class="olduser_wrong"></td>
					  <td class="olduser_space"></td>
				  	  <td class="olduser_cor"></td>
				  </tr>
				  <tr>
				  	  <td><p>Automatische Pflege für Ihren PC wie geplant</p></td>
				  	  <td class="olduser_wrong"></td>
					  <td class="olduser_space"></td>
				  	  <td class="olduser_cor"></td>
				  </tr>
				  <tr>
				  	  <td><p>Automatische Enrfernung von Anzeigen und Datenschutzspuren</p></td>
				  	  <td class="olduser_wrong"></td>
					  <td class="olduser_space"></td>
				  	  <td class="olduser_cor"></td>
				  </tr>
				  <tr>
				  	  <td><p>Automatisches Update auf die neueste Version</p></td>
				  	  <td class="olduser_wrong"></td>
					  <td class="olduser_space"></td>
				  	  <td class="olduser_cor"></td>
				  </tr>
		</table>
  </div>
<!-- end compare -->

<!-- service -->
<div class="service">
  <div class="wrapper">
	  <div class="clearfix service_tech">
		  <dl>
			<dt><img src="<?= getStaticUrl("images/sepsale_guara1.png")?>" alt=""></dt>
		    <dd>60-Tage-Geld-zurück-Garantie</dd>
		    
		  </dl>
		  <dl>
		    
		    <dt><img src="<?= getStaticUrl("images/sepsale_guara2.png")?>" alt=""></dt>
			<dd>Ihre Zahlung ist 100% sicher</dd>
		  </dl>
		  <dl class="last">
		    
		    <dt><img src="<?= getStaticUrl("images/sepsale_guara3.png")?>" alt=""></dt>
			<dd>Kostenloser technischer Support 24/7</dd>
		  </dl>
	  </div>
    <div class="service_hin">
		<p>Hinweis：</p>
		<p>*. Daten können sich system- oder computerabhängig ändern.</p>
		<p>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</p>
		<p>*. Protected Folder Pro und IObit Uninstaller Pro unterstützen 1 Jahr Abonnement / 1 PC.</p>
	</div>
	<div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
  </div>
</div>
<!-- end service -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img class="pc on" src="<?= getStaticUrl("images/sepsale_box2.png")?>" alt=""/>
      <img src="<?= getStaticUrl("images/sepsale_box1.png")?>" alt=""/>
    </div>
    <ul class="float-change fl">
	  <li class="float-change1 on" data-num="1"><div class="float-changebox"><span>ASC Pro + <img src="<?= getStaticUrl("images/sepsale_sel1gift.png")?>"> </span> <b>80% Rabatt</b></div></li>
	  <li class="float-change1" data-num="2"><div class="float-changebox"><span>ASC Pro </span> <b>60% Rabatt</b></div></li>
    </ul>
    <div class="price fr">
      <p><strong><big>24</big>,99€</strong></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=de-asc153pciupf2499&ref=de_asc153pcbundlepurchase2110<?= $refStr; ?>&refs=de_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pcbundle2009b-de')">
        Jetzt kaufen
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<a href="javascript:void(0);" onclick="goTarget($('.banner'))" class="sepsale_backup"><img src="<?= getStaticUrl("images/sepsale_backup.png")?>"></a>
<script>refStr = "<?php echo $refStr; ?>"</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>