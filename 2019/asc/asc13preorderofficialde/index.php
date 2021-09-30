<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deascpre_p' . $date;
  $c_name_t='deascpre_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Kaufen Sie das neueste Advanced SystemCare 13 PRO für 0€ - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Ihr langsamer PC wird 200% * schneller</h3>
      <dl>
        <dt class="price">
          <strong> <b>0</b>€</strong>
          <a href="https://www.iobit.com/buy.php?product=de-asc13preorder&ref=de_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-de');"
             class="buybtn">
            <span>Jetzt vorbestellen</span>
          </a>
        </dt>
        <dd class="number">
          <span><span class="viewNum"><?php echo $viewNum;?></span> Beobachter. </span>
          Nur
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          Stück übrig
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro -->
<div class="intro wrapper clearfix">
    <span class="arrow"></span>
    <h2> Warum auf Advanced SystemCare 13 PRO upgraden</h2>
    <div class="title">
      <span class="arrow"></span>
      <h2> Warum auf Advanced SystemCare 13 PRO upgraden</h2>
    </div>
  <div class="left-message">
    <div class="message">
      
      <div class="list">
        <h3>Schneller Computer</h3>
        <dl>
          <dt>200%* schnellerer PC</dt>
          <dd>Bereinigt und optimiert das System, um den Systemstart zu <br> beschleunigen und den Computer bis zu 200% schneller zu machen.</dd>
        </dl>
        <dl>
          <dt>300%* schnelleres Internet</dt>
          <dd>Optimiert die Browsereinstellungen, um das Herunterladen, <br> Surfen, Spielen und Ansehen von YouTube um bis zu 300% zu <br> beschleunigen.</dd>
        </dl>
      </div>
    </div>
    <div class="message">
      <div class="list">
        <h3>Sicheres Surfen</h3>
        <dl>
          <dt>Privatsphärenschild </dt>
          <dd>Verhindert unvertrauenswürdige Programme, die auf Ihre persönlichen <br> Daten wie Kontakt, E-Mail-Daten, Dropbox, OneDrive usw. <br> zuzugreifen wollen </dd>
        </dl>
        <dl>
          <dt>Sicheres Browsen </dt>
          <dd>Löscht die Browserdaten automatisch und verbirgt Ihre Spuren, <br> so dass Tracker nicht wissen, was Sie lesen, ansehen und kaufen.</dd>
        </dl>
      </div>
    </div>
    <div class="message last">
      <div class="list">
        <h3>Andere Vorteile</h3>
        <ul class="active">
          <li>Bereinigt Junk-Dateien automatisch, um das System zu einem <br> bestimmten Zeitpunkt zu optimieren.</li>
          <li>Säubert die Registrierung gründlich, um Systemabstürze und Fehler <br> zu reduzieren.</li>
          <li>Schützt automatisch vor Malware-Infektionen in Echtzeit.</li>
          <li>Erkennt die tiefsten Bedrohungen im Computer.  </li>
          <li>Erkennt schädliche Links in Ihren Web-E-Mails.</li>
          <li class="on">Stoppt unnötigte Dienstleistung automatisch, um RAM freizugeben.</li>
          <li>Erwischt Eindringlinge automatisch mit der FaceID</li>
          <li>Entfernt lästige Online-Werbung automatisch.</li>
          <li>Aktualisiert veraltete Software mit einem Klick.</li>
          <li>Automatisches Update auf die neueste Version </li>
          <li>Kostenloser technischer Support 24/7</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="change-img">
    <div class="list-img list01 show">
      <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
      <div class="scan">
        <div class="circleprogress-content">
          <div class="circle right">
              <div class="circleprogress rightcircle"></div>
          </div>
          <div class="circle left">
              <div class="circleprogress leftcircle"></div>
          </div>
       </div>
      </div>
      <div class="img-before">
        <span class="change-num">50</span>
        <span class="completed"></span>
        <div class="circle">
          <div class="top-circle"></div>
          <div class="bottom-circle"></div>
        </div>
      </div>

    </div>
    <div class="list-img list02">
      <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
      <div class="privacy">
        <span class="icon"></span>
        <div class="check"></div>
        <span class="text">6 sensible Daten geschützt.</span>
      </div>
      <div class="privacy-right"></div>
    </div>
    <div class="list-img list03">
      <img src="<?php echo getStaticUrl('images/intro3.png')?>" alt="" class="nomal3">
      <div class="icon-list">
        <span class="icons01"><i></i></span>
        <span class="icons02"><i></i></span>
        <span class="icons03"><i></i></span>
        <span class="icons04"><i></i></span>
        <span class="icons05"><i></i></span>
        <span class="icons06 active"><i></i></span>
      </div>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- review-content -->
<div class="review-content">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>More About Advanced SystemCare 13 PRO</h2>
    <h3>Was kann die PRO-Edition bei der Computeroptimierung</h3>
    <div class="present">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
        <dd>
          Wir haben  <strong>30.000.000</strong> Benutzern geholfen
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
        <dd>
          Unsere Benutzer haben <strong>2.666.667</strong> Stunden pro Monat erspart
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
        <dd>
          Unsere Benutzer haben <strong>1,18 Milliarden USD</strong> pro Jahr gespart
        </dd>
      </dl>
    </div>
    <!-- review start -->
    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Media Review</span></h2></dt>
            <dd>
              <p>"Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte. Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.</p>
              <cite>CHIP</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>Ich habe im Laufe der Zeit verschiedene Programme ausprobiert, die versprochen haben, dass mein Computer problemlos laufen wird. Ich habe vor Jahren die kostenlose Version von ASC versucht. Seitdem ich die kostenpflichtige Version aktiviert habe, leide ich nicht mehr unter Systemproblemen. Advanced SystemCare Pro ist das Einzige, das ich aufgrund meiner Erfahrungen empfehlen würde. Ich benutze auch IObit Uninstaller, Smart Defrag und Driver Booster, um meinen PC viel besser zu machen.</p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>Advanced System Care ist ein tolles Programm. Ich habe dieses Programm für viele Jahre benutzt und es funktioniert super gut. Der Hersteller verbessert ständig seine Produkte. Diese Produkte werden im Laufe der Jahre immer besser. Ich verwende viele ihrer Produkte und sie funktionieren alle großartig.</p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>Ich habe noch nie ein besseres PC-Wartungs- oder Sicherheitsprogramm als Advanced Systems Care gefunden, seitdem ich ASC gekauft habe, hatte ich noch nie Probleme mit Viren, Phishing, schwarzen Bildschirmen oder einer anderen Art von Bugaboo Wenn es um Computer geht, vielen Dank an ASC, dass Sie meinen PC so viel angenehmer gemacht haben.</p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>Ich benutze Advanced SystemCare Pro seit langer Zeit und diese neueste Version 13 ist sogar besser als Version 12. Sie kann Probleme sehr schnell finden und beheben. Das Produkt verfügt über so viele zusätzliche Funktionen, die man verwenden kann, um Ihren Computer gut und stabil zu halten. Es ist ziemlich empfehlenswert.</p>
              <cite>Tony Fisher</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>Der neue ASC 13 ist ein Muss für alle PC-Benutzer. Die übersichtliche und intuitive Benutzeroberfläche macht die Bedienung sowohl für Anfänger als auch für Fortgeschrittene einfach. Viele leistungsstarke Tools sorgen dafür, dass Ihr PC stets mit der bestmöglichen Leistung arbeitet. Ein großes Lob ist an IObit für eine so wunderbare Reihe von Werkzeugen. Vielen Dank an IObit für das wunderbare Werkzeug.</p>
              <cite>Daniel Sanders</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>Ich liebe Advanced SystemCare 13 Beta. Es läuft schnell und bereinigt persönliche Spuren, Junk-Dateien und Registrierungsfragmente. Besonders gut gefällt mir das Popup-Fenster mit den Zugriffsberechtigungen für sensible Bereiche. Wenn eine App zum ersten Mal versucht, auf sensible Dateien zuzugreifen, wird ein Fenster geöffnet, um den Zugriff zuzulassen oder zu verweigern. Sobald die Berechtigung für eine App erteilt wurde, wird das Popup für diese App nicht mehr angezeigt. Ich weiß, dass meine vertraulichen Dateien sicher aufbewahrt werden.</p>
              <cite>Richard Preston</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="CHIP"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
</div>
<!-- end review-content -->

<!-- bottom -->
<div class="bottom">
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Weltweite Auszeichnungen</h2>
    <p>
      Unsere Produkte sind seit 12 Jahren von diesen erstklassigen Medien anerkannt. <br>
      Deswegen haben Sie das richtige PC-Optimierungsprogramm.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer wrapper">
    <dl>
      <dd>
       Note:
      </dd>
      <dd>*. Wir haben Advanced SystemCare 13 PRO in unserem internen Testlabor getestet. Ihre Ergebnisse können variieren.</dd>
      <dd>*. Nach Ablauf der 30-tägigen Testphase wird Ihr Kreditkarten- oder PayPal-Konto automatisch mit 24,99€ belastet. Der Rabatt i.H.v. 58% auf den ursprünglichen <br> &nbsp;&nbsp; Preis von 59,99 € gilt nur für Vorbestellungen!</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
  <!-- footer end -->

</div>
<!-- end bottom -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      <span><span class="viewNum"><?php echo $viewNum;?></span> Beobachter. </span>
      Nur
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      Stück übrig
    </div>
    <div class="price">
      <strong><b>0</b>€</strong>
      <a href="https://www.iobit.com/buy.php?product=de-asc13preorder&ref=de_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=de_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-de');"
         class="buybtn">
        <span>Jetzt vorbestellen</span>
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>