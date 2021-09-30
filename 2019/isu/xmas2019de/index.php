<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'isuxmasde2021_p' . $date;
	$c_name_t='isuxmasde2021_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(78,98);
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

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].'-'.$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>85% Rabatt auf IObit Software Updater PRO und ein kostenloses Geschenkpaket erhalten - IObit</title>
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
			<a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>Deal des Tages</h1>
			<div class="img-box">
				<img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
        <!-- <img class="slist snow" src="<?php echo getStaticUrl('images/snow.png')?>" alt=""/>
        <img class="slist cap" src="<?php echo getStaticUrl('images/cap.png')?>" alt=""/> -->
			</div>
			<div class="right-message">
          <h2><span>2 Gratisgeschenke</span> für die ersten 100 Kunden!</h2>
          <div class="progress">
            <p><strong class="viewNum"><?php echo $viewNum;?></strong> Besucher,  <span class="buyNum">51</span> Geschenke verbleibend</p>
            <div class="bar">
              <span class="box"><span class="disappear"></span></span>
            </div>
          </div>
          <p class="price">
            <span>Jetzt <strong><b>14</b>,99€</strong></span>
            <a href="https://www.iobit.com/buy.php?product=de-isu43pcpfsd1499&ref=de_isu3pcpfsd2101<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_isu" onclick="ga('send', 'event', 'isubundlebuy', 'buy', 'isu3pcbundlesale2101-de');" class="buybtn">Jetzt aktivieren</a>
          </p>
          <ul class="list">
          	<li>
          		Original <span>99,93€</span>
          	</li>
          	<li>Rabatt <span>85% </span></li>
          	<li>Spare <span>84,94€</span></li>
          </ul>
        </div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>Warum IObit Software Updater PRO?</h2>
			<img src="<?php echo getStaticUrl('images/intro-box.png')?>" class="img-box" alt="IObi
      t Software Update PRO"/>
      <!-- <span class="oldoman"></span> -->
			<div class="left-message">
				<h3><i></i>Halte Software immer aktuell</h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
					<dd><strong>Schutz</strong></dd>
					<dd>Dank der Aktualisierung von veralteter Software werden Sicherheitslücken rechtzeitig geschlossen und Hackerangriffe vermieden </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
					<dd><strong>Verbesserung</strong></dd>
					<dd>Die Aktualisierung von veralteter Software ermöglicht neue Funktionen und verbessert die Leistung und Stabilität. </dd>
				</dl>
			</div>
			<div class="right-message">
				<h3><i></i> <span>Holen Sie sich ganz leicht Softwareupdates</span></h3>
				<dl class="list01">
					<dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
					<dd><strong>Ganz einfach</strong> Downloaden Sie Softwareupdates ohne ihren Browser zu öffnen. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
					<dd><strong>Automatisch</strong> Automatische Updates können geplant werden und verfügbare Updates können so - ohne zu stören - gedownloaded und installiert werden.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
					<dd><strong>Sicher</strong> Erstellt automatisch Wiederherstellungspunkte vor der Installation</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- intro end -->

  <!-- magazine start -->
  <div class="magazine wrapper clearfix">
    <div class="book">
      <img src="<?php echo getStaticUrl('images/magazine.png')?>" alt="">
      <span class="glass"></span>
    </div>
    <div class="article">
      <h3>Mit IObit Software Updater Pro sind alle Programme auf Ihrem Computer stets auf aktuellem<br> Stand – und damit sicher.</h3>
      <p>
        Veraltete Programme sind gefährlich: Die Hersteller flicken Schwachstellen zwar mit Updates. Doch sobald die verfügbar sind, stehen auch Infos über die jeweilige Sicherheitslücke im Netz – wer dann noch die alte Version hat, ist ein gefundenes Fressen für Hacker. Halten Sie daher mit IObit Software Updater installierte Programme stets aktuell.
      </p>
      <p>
        Nach dem Programmstart sucht IObit Software Updater automatisch nach veralteter Software und listet sie anschließend oben im Fenster auf. Um alle Updates zu installieren, klicken Sie einfach rechts oben auf Jetzt aktualisieren.
        Das Programm lädt nun alle Updates herunter, erstellt einen Systemwiederherstellungspunkt und installiert dann die Updates. Je nach Datenmenge kann das ein paar Minuten dauern. Danach sehen Sie eine Erfolgsmeldung.
      </p>
    </div>
  </div>
  <!-- magazine end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Was sind die Vorteile von IObit Software Updater PRO?</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>
				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">◎</i> Software mit 1-Klick aktualisieren (Unbegrenzte Anzahl)</li>
						<li><i class="all-icons">◎</i> Ungestört Updates downloaden und installieren lassen</li>
						<li><i class="all-icons">◎</i> Automatische Scans und Updates können eingestellt werden</li>
						<li><i class="all-icons">◎</i> Schließen Sie Programme aus, die nicht aktualisiert werden sollen</li>
						<li><i class="all-icons">◎</i> Vor der Installation kann ein Wiederherstellungspunkt erstellt werden</li>
						<li><i class="all-icons">◎</i> <span>Nach der Installation können Installationsdateien automatisch gelöscht werden</span></li>
						<li><i class="all-icons">◎</i> Tools für Remote-Arbeit direkt im Programm herunterladen</li>
						<li><i class="all-icons">◎</i> Gesponserte Werbung in der Free Version kann deaktiviert werden</li>
					</ul>
					 <p class="price">
            <span>Jetzt <strong><b>14</b>,99€</strong> </span>
            <a href="https://www.iobit.com/buy.php?product=de-isu43pcpfsd1499&ref=de_isu3pcpfsd2101<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_isu" onclick="ga('send', 'event', 'isubundlebuy', 'buy', 'isu3pcbundlesale2101-de');" class="buybtn">Jetzt aktivieren</a>
            <p><span>Beeilung, es sind nur noch<b class="buyNum">50</b>Stück übrig!</span></p>
          </p>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->
	<div class="gift-message"> 
		<div class="wrapper">
			<h2>Welche Vorteile bekommen Sie durch die Gratisgeschenke?</h2>
			<dl>
				<dt>
          <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""/>
        </dt>
				<dd>
					<h3>Smart Defrag PRO</h3>
					<strong>0€</strong> <del>29,99€</del> 1 Jahr / 1 PC
					<p>Maximierter Speicherplatz auf der Festplatte <br>Optimierung für einen schnellen PC</p>
				</dd>
			</dl>
			<dl class="pf">
				<dt>
          <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/>
        </dt>
				<dd>
					<h3>Protected Folder</h3>
					<strong>0€</strong> <del>39,95€</del> 1 Jahr / 1 PC
					<p>Machen Sie sich nie wieder Sorgen um <br>Datendiebstahl oder Sicherheitslücken! </p>
				</dd>
			</dl>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
    <h2>Was sagen Andere?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>IObit Software Updater wurde entwickelt, um all ihre Anwendungen auf dem PC aktuell zu halten. Es kann nach neuen Versionen suchen und diese automatisch installieren. Außerdem hilft es ihnen dabei, beliebte Software für verschiedene Zwecke herunterzuladen und zu installieren.</p>
              <cite>softpedia</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
            <dd>
              <h2>User Review</h2>
              <p>Ich habe eine kostenlose Version von IObit von einem Freund bekommen und ich bin von der Geschwindigkeit und der einfachen Handhabung der Software beeindruckt. Es ist genau das Richtige für Anfänger, die ihren PC pflegen wollen. Vielen Dank dafür! Ich plane eine IObit Lizenz zu erwerben, einfach um das Unternehmen dabei zu unterstützen, weiter zu machen.Dankeschön!</p>
              <cite>Nicolae Mocioc</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
            <dd>
              <h2>User Review</h2>
              <p>Ich liebe es, dass die Updates automatisch vorgenommen werden. Das Programm ist schnell und effizient. Zudem wird ein Wiederherstellungspunkt erstellt, falls bei der Installation irgendwas schief geht. Es ist außerdem super, dass das Programm die Updates direkt von den passenden Seiten herunterlädt. So muss ich nicht mehr auf jede einzelne Seite gehen, um die Updates zu downloaden. Meiner Meinung nach ist das eine von euren besten Ideen gewesen!</p>
              <cite>Joshua Irving</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
            <dd>
              <h2>User Review</h2>
              <p>Das ist ein toller Software Updater. Es ist einfach gestaltet und leicht zu bedienen. Das Programm läuft ohne Probleme und sehr schnell. Auch das Design ist super und modern und es ist praktisch, dass sowohl die alte als auch die neue Version des Programms zu sehen ist, das man updaten will. Es ist auch ganz praktisch, dass das Programm einem Empfehlungen für neue Programm anzeigt. </p>
              <cite>Nico Bremmer</cite>
            </dd>
          </dl>                  
        </div>  
      </div>             
    </div>
  </div>
	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<div class="service clearfix">
				<dl>
					<dt>Ausgezeichnet durch</dt>
					<dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
				</dl>
				<dl class="right">
					<dt>Diverse Zahlungsmöglichkeiten werden akzeptiert</dt>
					<dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
				</dl>
			</div>
			<dl class="annotation">
				<dt>Hinweis:</dt>
				<dd>
					*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		IObit Software Update PRO
	  	</div>
	  	<div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> Besucher, noch <strong class="buyNum">86</strong> Stück übrig!</p>
      </div>
       <p class="price">
          <span><strong><b>14</b>,99€</strong> <del>99,93€</del></span>
          <a href="https://www.iobit.com/buy.php?product=de-isu43pcpfsd1499&ref=de_isu3pcpfsd2101<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_isu" onclick="ga('send', 'event', 'isubundlebuy', 'buy', 'isu3pcbundlesale2101-de');" class="buybtn">Jetzt aktivieren</a>
       </p>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>