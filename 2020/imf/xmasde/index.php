<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Sparen Sie heute bis zu 82% auf IObit Malware Fighter PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script type="text/javascript">
  		var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
		var paramTo=MApp(2.2).url.getParameters('to');
  </script>
</head>
<body>
  <!-- banner -->
  <div class="banner">
	 <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>VENTE FLASH DE NOËL</h1>
    <!-- subtitle -->
    <p>
    Bis zu - <b>82</b> % reduziert! 1 bezahlen und 3 bekommen! Verpassen Sie nicht!
    </p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <div class="message-box">
			<div class="message-box-sale"><p>-50%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
		</div>
        <p> 1 Jahr / 1 PC</p>
        <dl>
          <dd class="clearfix">
            sparen : <span class="fr">20€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>19</b> <del>39,99€</del></p>
          </dd>
          <dd> 
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-imf81pc1999&ref=de_imf83pcpurchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcsinglepurchase2012-de');"> <i class="all-icons"></i> Jetzt kaufen </a>
          </dd>
        </dl>
      </div>

      <!-- imf-85 -->
      <div class="message large fr">
		<div class="countd countdown">
			<div class="countdcnt">
				<strong>00</strong><span>h :</span>
				<strong>00</strong><span>m :</span>
				<strong>30</strong><span>s</span>
			</div>
		</div>
		<div class="message-box">
			<div class="message-box-sale message-box-eaux"><p>-82%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
			<div class="xmas-giveaway"></div>
			<div class="message-tips"><i class="all-icons"></i><p>Zusätzliche Geschenke enthalten IObit Uninstaller PRO und Protected Folder.</p></div>
		</div>
        <p> 1 Jahr / 3 PCs + <del class="messagecad">Gratisgeschenke</del></p>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            sparen : <span class="fr largeolsa"><em>101,85</em>€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>21</b> <del class="largeold"><em>123,84</em>€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
            
               href="https://www.iobit.com/buy.php?product=de-imf83pcpfiu2199&ref=de_imf83pcpfiusale2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcbundlepurchase2012-de');"> <i class="all-icons"></i> Jetzt kaufen </a>
            <!-- <p class="note"><i class="all-icons"></i><b class="viewNum">4,006,553</b> personnes l'ont acheté!</p> -->
          </dd>
        </dl>
      </div>
	  
	  <div class="message message3">
	    <dl>
	      <dd class="two">
	        <p class="price"><b>21</b> <del>59,99€</del></p>
	      </dd>
	      <dd>
	        <a class="buybtn"
          
	           href="https://www.iobit.com/buy.php?product=de-imf83pc2199&ref=de_imf83pcpurchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcsinglepurchase2012-de')"> <i class="all-icons"></i> Jetzt kaufen </a>
	      </dd>
	    </dl>
	  </div>
    </div>
	</div>
  </div>
  <!-- end banner -->
<div class="xmas-annou"><i class="all-icons"></i>Achtung ! Die Geschenke laufen in 24 Stunden ab. Beeilen Sie sich!</div>
<div class="xmas-payment"></div>
<div class="wrapper xmas-pour">
  <!-- feature -->
  <div class="feature">
    <h2>Warum IObit Malware Fighter PRO?</h2>
    <p>Nur die PRO-Version schützt Ihren PC vor 209 Millionen Bedrohungen voll</p>
  </div>
  <!-- end feature -->

  <!-- intro -->
  <div class="intro">
    <!-- 01 -->
    <dl class="one clearfix">
      <dd>
		<img src="<?php echo getStaticUrl('images/xmas-icon1.png')?>" alt="">  
        <h3>Bitdefender Maschine</h3>
        <p>Verhindert über 209 Millionen Bedrohungen, Ihren Computer zu infizieren und zu beschädigen.</p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon2.png')?>" alt="">
        <h3>Schutz der sensiblen Daten</h3>
        <p>Verwendet Passwörter, um Ihre sensiblen Daten zu schützen, sodass niemand ohne Ihre Erlaubnis darauf zugreifen kann.</p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon3.png')?>" alt="">
        <h3>Anti-Ransomware Maschine</h3>
        <p>Blockiert Ransomware, die in Ihren Computer eindringen oder Ihre wichtigen Dateien verschlüsseln möchte.</p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon4.png')?>" alt="">
        <h3>Sicheres Online-Surfen</h3>
        <p>Entfernt automatisch gefährliche Cookies und Spuren, wenn Sie Ihren Browser schließen, und verhindert, dass Hacker finden, was Sie online lesen, sehen oder kaufen.</p>
        </p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->
</div>
  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper gifts-cont">
		<h2>Zwei nützliche Tools als Geschenke für eine begrenzte Zeit!</h2>
		<p>Die Zeit ist begrenzt, verpassen Sie nicht!</p>
		<!-- <div class="gifts-giveway gifts-giveway1">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>IObit Software Updater 3 PRO <b>0€</b> <del>27,99€</del> <span>(1 Jahr / 1 PC)</span></h4>
				<ul>
					<li>Bietet die beliebteste Software einschließlich ihrer neuesten Updates mit nur einem Klick an.</li>
					<li>Vereinfacht Ihre Aktualisierungsaufgaben, indem es automatisch den Softwarestatus erkennt und veraltete Software aktualisiert.</li>
				</ul>
			</div>
		</div> -->
		<div class="gifts-giveway gifts-giveway2">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>IObit Uninstaller 10 PRO <b>0€</b> <del>23,90€</del> <span>(1 Jahr / 1 PC)</span></h4>
				<ul>
					<li>Unerwünschte Software werden restlos bis zum letzten Byte entfernt!</li>
					<li>Deinstalliert böswillige Plugins und entfernt Browser-Benachrichtigungen für ein sicheres Surferlebnis</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway3">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Protected Folder <b>0€</b> <del>39,95€</del> <span>(1 Jahr / 1 PC)</span></h4>
				<ul>
					<li>Schützt Ihre wichtigen Daten, Ordner und Dateien effektiver mit einem Passwort..</li>
					<li>Selbst wenn der PC von Viren, Spyware und Ransomware böswillig angegriffen wird, kann die Engine von Protected Folder Ihre Dateien sicher halten.</li>
				</ul>
			</div>
		</div>
	</div>
  </div>
  <!-- end gifts -->
<div class="gifts-store">
	<div class="gifts-store-arrow"></div>
	<a class="buybtn" href="https://www.iobit.com/buy.php?product=de-imf83pcpfiu2199&ref=de_imf83pcpfiusale2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcbundlepurchase2012-de');"> <i class="all-icons"></i>Geschenke bekommen</a>
	</dd>
</div>
  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2>Die PRO-Version bietet Ihnen umfassenderen Schutz!</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-a"><p>Ihre aktuelle Version</p></th>
          <th class="item-b"></th>
          <th class="item-c"><p>IObit Malware Fighter 8 PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-a">9 Millionen</td>
          <td class="item-b">Anti-Malware-Datenbank</td>
          <td class="item-c">über 209 Millionen</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> </td>
          <td class="item-b">Bitdefender Anti-Virus Maschine</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> </td>
          <td class="item-b">Anti-Ransomware Maschine</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> </td>
          <td class="item-b">Webcam-Schutz</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> </td>
          <td class="item-b">Anti-Verfolgung-Schutz</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> </td>
          <td class="item-b">USB-Wächter</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> </td>
          <td class="item-b">Sensible Daten werden mithilfe vom Passwort geschützt</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> </td>
          <td class="item-b">Echtzeit-schutz</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> </td>
          <td class="item-b">Automatisches Update</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2>Was haben die Benutzer von IObit Malware Fighter Pro gesagt</h2>
    <div class="content">
      <div class="details">
        <div class="active">
          <h4>Media Review</h4>
          <p>Das Programm verfügt über zwei Antiviren-Maschinen von IObit und Bitdefender und scheint wirksam gegen Malware, die nicht von anderen ähnlichen Tools erkannt werden können. Und es kann zusammen mit Ihren Antivirenprogrammen arbeiten. Es kann eine breite Reihe von Spyware, Ransomware, Adware, Trojaner, Würmer, Keylogger und Bots erkennen.</p>
		  <h5>Software.Informer</h5>
        </div>
        <div>
          <h4>Kundenbewertung</h4>
          <p>„Wir waren es gewöhnt über ein Dutzend verschiedene Programme zu verwenden, damit unsere Maschinen fehlerfrei laufen und um böse Dinge zu verhindern. Um die Sicherheit und Leistung aufrechtzuerhalten, benötigten wir mehrere Stunden pro Woche. Aber mit IObit Malware Fighter Pro und Advanced System Care Pro hat man alles in einem. Jetzt nimmt es uns nur noch wenige Minuten alle paar Tage, um dieselbe Arbeit mit viel mehr Vertrauen zu erledigen. Seitdem wir ihre Produkte nutzen, haben wir keine Probleme mehr.“</p>
		  <h5>Bob Bassett</h5>
        </div>
        <div>
          <h4>Kundenbewertung</h4>
          <p>„Vor einigen Jahren machte mich jemand auf den IObit Malware Fighter aufmerksam. Anfangs war ich skeptisch, aber nach der Installation wurde es mein lieblings Anti-Malware Programm. Es lässt sich sehr einfach bedienen. Im Laufe der Jahre hat es bereits verschiedene Bedrohungen erkannt und entfernt. Durch das Zusammenspiel mit anderen IObit Programmen, wie beispielsweise dem ASC, habe ich einen guten PC-Schutz. Diese Programme werde ich nun all meinen Freunden und meiner Familie empfehlen.“</p>
		  <h5>Peter Stoffers</h5>
        </div>
        <div>
          <h4>Kundenbewertung</h4>
          <p>Ich bin sehr zufrieden mit Ihrem Produkt IObit Maleware Fighter. Ich verwende dieses Produkt, da ich mehrere Probleme mit bösartigen Interferenzen hatte. ich konnte keinen ganzen Film oder kein Konzert anschauen, die ich mag. Dank Ihrem Produkt ist jetzt jede Operation klar, sicher und gut geschützt. Es scannt meinen Laptop, ohne seine Leistung zu beeinträchtigen, und ich habe auch zwei meiner Freunde dieses Produkt empfohlen. Ich danke IObit noch einmal!</p>
		  <h5>Gelu Batir</h5>
        </div>
		<div>
		  <h4>Kundenbewertung</h4>
      <p>Danke, dass Sie Malware Fighter V6 herausgebracht haben, es ist ein großartiges Update, das Sie für Ihre Benutzer erstellt haben. Es ist viel schneller beim Scannen und einfach zu bedienen. Für Leute, die wirklich ein gutes Malware- und Antiviren-Programm wollen, ist IObit Malware Fighter preiswert und die beste Wahl. Ich würde empfehlen, dass alle Leute die beste Software „IObit Malware Fighter“ benutzen.</p>
		  <h5>David Cassidy</h5>
		</div>
      </div>
	  <ul>
		  <a class="next nextbtn" href="javascript: nextFun();"></a>
		  <li class="one"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
		  <li class="two"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
	    <li class="three"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Gelu Batir"></li>
	    <li class="four"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
	    
	    <li class="five"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
	  	
	  </ul>
	  
      <!-- <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a> -->
    </div>
  </div>
  <!-- end review -->
  
  <div class="award">
	  <div class="wrapper">
		  <h2>Vertrauen von diesen Medien</h2>
		  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="Gelu Batir">
	  </div>
  </div>
  
  

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">PREMIER ARRIVE, PREMIER SERVI !</h2>
    <!-- box -->
	<div class="wrapper bottom-buy-center">
    <div class="box fl">
	  <div class="bottom-buyimg bottom-buy1"></div>
	  <div class="bottom-buyimg bottom-buy2 on"></div>
	  <div class="bottom-buyimg bottom-buy3"></div>
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="top">1 Jahr / 1 PC</li>
      <li class="active mid">1 Jahr / 3 PCs +  <small>Exklusive Geschenke</small></li>
      <li class="bot">1 Jahr / 3 PCs</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>21</b> <del>123,84€</del></p>
      </dd>
      <dd>
        <a class="buybtn small" href="https://www.iobit.com/buy.php?product=de-imf83pcpfiu2199&ref=de_imf83pcpfiusale2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcbundlepurchase2012-de');">
          <i class="all-icons"></i> Jetzt kaufen
        </a>
      </dd>
    </dl>
	</div>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>60 Tage Geld-Zurück-Garantie</h3>          
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>100% sichere Zahlung</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/service-client.png" alt=""></dt>
        <dd>
          <h3>Kundenservice rund um die Uhr</h3>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Note:</dt>
        <dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
        </dd>
        <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
        <dd>* .IObit Uninstaller 10 PRO /Protected Folder unterstützt 1 Jahr / 1 PC.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>
  <!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>