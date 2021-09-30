<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deiulaun_p' . $date;
  $c_name_t='deiulaun_t' . $date;
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);

$paramPct=$_GET['pct'];
$tagShow=true;
if(!empty($paramPct)){
  $refStr.='-'.$paramPct;
  if($paramPct==2){
    $tagShow=false;
  }
}

$transData=json_decode(base64_decode($_GET['data']));
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>84% RABATT auf IObit Uninstaller PRO und kostenlose Geschenke - IObit</title>
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
      <!-- logo -->
			<a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <!-- title -->
			<h1>Neue Version speziell für Ihre treue Unterstützung</h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
          <img src="<?php echo getStaticUrl('images/ghost.png')?>" class="ghost"/>
          <span class="disappear"></span>
				</div>
        <!-- right-message -->
				<div class="right fr">
          <div class="message">
            <h2>Auf IObit Uninstaller 11 PRO upgraden</h2>
            <div class="number">
              <span>Nur</span>
              <div id="reduce" class="reduceNum">
                <div class="listbox"><span class="list"><b>0</b></span></div>
                <div class="listbox"><span class="list"><b>0</b></span></div>
              </div>
              <span>Gratisgeschenke sind verfügbar </span>
            </div>
            <p><img src="<?php echo getStaticUrl('images/people.png')?>"> <strong class="viewNum"><?php echo $viewNum;?></strong> Benutzer sind gerade auf dieser Seite</p>
          </div>
          <dl class="price">
            <dt><strong><b>16</b>,99€</strong> <del>109,89€</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=de-iu113pcpfsd1699&ref=de_iu113pcpfsd1699launch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-newlaunch-de');" 
                   class="buybtn">Jetzt aktivieren</a></dd>
          </dl>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
  <div class="intro">
    <div class="wrapper">
      <h2>Neuer IObit Uninstaller 11 PRO macht mehr <span></span></h2>
      <div class="message clearfix">
        <h3>1. Nicht nur ungewollte Programme, sondern auch heikle Software können entfernt werden</h3>
        <img src="<?php echo getStaticUrl('images/intro-message.png')?>" class="img-box" alt="" / >
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>"></dt>
          <dd>
            <strong>Hartnäckige Programme</strong> können nicht durch Standard-Deinstallation entfernt werden.
            <br>
            <?php if($tagShow):?>
            <span>um 152% verbessert</span>
            <?php endif;?>
          </dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>"></dt>
          <dd>
            <strong>Gebündelte Programme </strong>belegen ohne Vorankündigung Ihren Festplattenspeicher.
          </dd>
        </dl>
        <div class="clear"></div>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>"></dt>
          <dd>
            <strong>Schädliche Browsererweiterungen </strong>zielen auf Ihre persönlichen Daten ab und versuchen, die PC-Sicherheit zu verringern. <br><?php if($tagShow):?><span>um 56% verbessert</span><?php endif;?>
          </dd>
        </dl>
        <dl class="right last">
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>"></dt>
          <dd>
            <strong>Werbe-Plug-Ins </strong>haben Popup-Anzeigen, die Ihnen überall beim Surfen im Internet folgen. <br><?php if($tagShow):?><span>um 50% verbessert</span><?php endif;?>
          </dd>
        </dl>
      </div>
      <div class="message2 clearfix">
        <h3>2. Neben den verbleibenden Dateien <br>können auch andere nutzlose Daten gelöscht werden</h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
          <dd><strong>Erkennt automatisch</strong></dd>
          <dd>existierende Dateireste auf Ihrem PC und hilft diese mit nur einem Klick zu entfernen. </dd>
          <dd><span>Einzigartig auf dem Markt</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
          <dd><strong>Säubert automatisch</strong></dd>
          <dd>unbrauchbare Daten von Programmen, die mit der Windows-Standardmethode oder mit anderen Tools deinstalliert wurden.</dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
          <dd><strong>Setzt</strong> die Systemmänderungen <strong>automatisch rückgängig</strong>, die ein Programm vorgenommen hat, nachdem das Programm deinstalliert wurde. </dd>
          <dd><span>Einzigartig auf dem Markt</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="intro2">
    <div class="wrapper">
      <h3>3. Es gibt weitere Vorteile, die Sie nicht verpassen möchten</h3>
      <img src="<?php echo getStaticUrl('images/intro2-message.png')?>" class="img-box"> 
      <ul>
        <li>Aktualisiert alle veralteten Programme mit einem Klick.</li>
        <li>Überprüft und bereinigt automatisch die verbleibenden <br>Dateien nach der Deinstallation. <?php if($tagShow):?><span>um 30% verbessert</span><?php endif;?> </li>
        <li>Entfernt unerwünschte Windows-Apps im Batch.</li>
        <li>Aktualisiert sich automatisch wenn eine neue<br> Version verfügbar ist.</li>
        <li>Premium technischer Support 24/7 .</li>
      </ul>
    </div>
  </div>
  <div class="gift-message">
    <div class="wrapper clearfix">
      <h2>Wir bereiten auch zwei leistungsstarke Tools als Dankeschön vor</h2>
      <div class="gift clearfix">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
        <dl>
          <dt> 
            <strong>0€</strong> <del>29,99€</del> <br>
            <span>1 Jahr / 1 PC</span>
          </dt>
          <dd>Maximiert die Festplattenoptimierung<br> für einen schnelleren PC</dd>
        </dl>
      </div>
      <div class="gift clearfix">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
        <dl>
          <dt>
            <strong>0€</strong> <del>39,95€</del> <br>
            <span>1 Jahr / 1 PC</span>
          </dt>
          <dd>Keine Sorgen über Datendiebstahl<br> oder Privatsphärenlecks!</dd>
        </dl>
      </div>
    </div>
  </div>
	<!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Was sagen Andere?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/giga.png')?>" alt="GIGA"/></dt>
            <dd>
              <h3>Media Review</h3>
              <p>
                Neben Programmen beseitigt der „IObit Uninstaller“ auch Toolbars und Plugins von Firefox, Chrome und Internet Explorer. Mit dem „IObit Uninstaller“ entfernen Sie nicht mehr benötigte Software von Ihrem PC. Im Anschluss an die Standard-Deinstallation durchsucht das kostenlose Tool Ihren kompletten Rechner und die Registry nach möglichen Datenresten, die Sie ebenfalls löschen können.
              </p>
              <h4>GIGA</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                Ich benutze IObit-Programme seit Jahren mit großer Wirkung! Aus diesem Grund bleibe ich bei IObit-Produkten.
                Ich habe in der Vergangenheit Laptops und Handys (Android) gewartet und repariert und lasse sie immer mit installierten IObit-Produkten. Ich fordere sie auf, regelmäßig zu scannen und ihnen mitzuteilen, dass es Laptop/ Computer / Handy automatisch repariert und beschleunigt. :)
                Ich empfehle das Deinstallationsprogramm (und die neueste Beta) als sicheres und zuverlässiges Programm, das hartnäckige Programme verschiebt! Es entfernt vor allem die "versteckte" Codierung, die der Programmierer verlassen wollte, und installieren Sie die Werbung dann erneut!
                Die alle Produkte von IObit sind sicher und einfach zu bedienen. Sie kümmern sich vor allem um Ihre PCs.
              </p>
              <h4>Jeff A Watts</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                Ich finde IObit Uninstaller hervorragend zu bedienen, da es alles hat, was Sie sich wünschen können. Ich liebe die Tatsache, dass es alle übrig gebliebenen Fragmente deinstalliert. Es hat auch einen Software-Updater, der Sie daran erinnert, wenn eines der Programme aktualisiert werden muss, und die Tatsache, dass es Batch-Programme deinstalliert, macht es wirklich zu einem Gewinner. Eigentlich ist es genau das, was man braucht, um den Computer gut zu halten.
              </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                IObit Uninstaller ist die beste Software zum Entfernen von Programmen auf dem Computer, ganz schnell und effektiv. Es funktioniert besser als das grundlegende Deinstallationsprogramm von Windows. Es reinigt ernsthaft Datenreste des Programms und es gibt keine Verzögerungen auf dem Computer. Ich benutze es seit ein paar Monaten und weiß nicht, wie ich ohne es leben soll. Ich empfehle es meinen Freunden und meiner Familie. Danke! IObit Uninstaller ist fantastisch.
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
            <dd>
              <h3>User Review</h3>
              <p>
                Der IObit Uninstaller wird mit jedem Update besser. Ich nutze ihn nun schon seit mehr als 3 Jahren. Er lädt schnell und hat eine einfache Benutzeroberfläche. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features, welches mir einen schnellen Zugriff auf kürzlich installierte Programme gibt, die ich nicht mag oder nicht angemessen funktionieren. Es wird außerdem einfacher, deine Startanwendungen zu kontrollieren, sodass dein PC schneller hochfährt.
              </p>
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
	<div class="awards">
		<div class="wrapper">
			<h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h4>RISIKOFREI TESTEN – 60 Tage Geld zurück Garantie</h4>
            <p>
              Wenn Sie die PRO-Edition aktivieren, werden ungewollte 
              Programme für einen bezahlbaren Preis schnell deinstalliert.
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Wir akzeptieren</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
        </dl>
      </div>
			<dl class="annotation">
				<dt>Hinweis:</dt>
				<dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
				</dd>
        <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl"> 
        <img src="<?php echo getStaticUrl('images/fl-ghost.png')?>" class="ghost"/>
        <span class="disappear"></span>
        </div>
      <div class="message">
        <div class="number">
          <span>Beeilung, nur noch </span>
          <div id="fReduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <span> Geschenke übrig</span>
        </div>
        <p><strong class="viewNum"><?php echo $viewNum;?></strong> Benutzer sind gerade auf dieser Seite</p>
      </div>
      <div class="price">
        <a href="https://www.iobit.com/buy.php?product=de-iu113pcpfsd1699&ref=de_iu113pcpfsd1699launch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-newlaunch-de');" class="buybtn">Meine Gratisgeschenke holen</a>
      </div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>