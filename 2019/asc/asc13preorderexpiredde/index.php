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
  $c_name = 'deascexd_p' . $date;
  $c_name_t='deascexd_t' . $date;
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

function paramDeal($num,$decimals,$separate=',',$decimal='.'){
  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
}

$params=json_decode(base64_decode($_GET['data']));
$fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,',','.');
$fileSizeUnit='GB';
if($fileSizeShow<=1){
  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,',','.');
  $fileSizeUnit='MB';
}
$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
$paramPri=paramDeal($params->privacy,0,',','.');
$paramPro=paramDeal($params->program,0,',','.');
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
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Ihr langsamer PC wird 200% * schneller</h3>
      <dl>
        <dt class="price">
          <strong><b>0</b>€</strong> <a href="https://www.iobit.com/buy.php?product=de-asc13preorder&ref=de_asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexp-de');" class="buybtn"><span>Jetzt vorbestellen</span></a>
        </dt>
        <dd class="number">
          <span><span class="viewNum"><?php echo $viewNum;?></span> Beobachter.</span> Nur 
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          Stück übrig. 
        </dd>
      </dl>
    </div>
    <span class="arrow"></span>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Was hat Advanced SystemCare PRO für Sie gemacht?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        <div class="scan">PRÜFEN</div>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span><b>XX</b> Speicherplatz wurde freigegeben</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span><b>XX</b> <?php echo empty($paramPri)?'Private':'private';?> Spuren wurden gelöscht</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Die PC-Startzeit wurde um bis zu <b>200%</b> beschleunigt</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Das Online-Surfen wurde um bis zu <b>300%</b> beschleunigt</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span><b>XX</b> <?php echo empty($paramPro)?'Fremde':'fremde';?> Zugriffe auf die Privatsphäre wurden gesperrt</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>Ihr Abo ist abgelaufen und<br> genießen Sie nicht mehr:</h3>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span>Tiefenreinigung der Registry-Dateien zur Behebung von Systemproblemen</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Automatische RAM-Reinigung für einen reibungslosen<br> PC-Betrieb</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>PC-Start und Internetverbindungsbeschleunigung</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Schutz personenbezogener Daten zur Vermeidung von Datenschutzverlusten</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Echtzeitschutz zum Blockieren von Malware-Infektionen</span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Neue PRO-Version vorbestellen,<br> Bekommen Sie wieder PRO und genießen Sie die folgenden Vorteile</h2>
    <div class="clearfix">
      <dl class="blue">
        <dt><img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>4GB<small>*</small></h3>
          <p><b>4GB* mehr</b> Junk-Dateien erkennen und bereinigen</p>
        </dd>
      </dl>
      <dl class="purple">
        <dt><img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>200+</h3>
          <p>Persönliche Spuren auf <b>über 200</b> Programmen und 15 Browsern für alle Benutzerkonten löschen.</p>
        </dd>
      </dl>
      <dl class="green">
        <dt><img src="<?php echo getStaticUrl('images/f-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>E-Mails</h3>
          <p><b>E-Mails</b> vor verschiedenen von E-Mail-Bedrohungen schützen</p>
        </dd>
      </dl>
      <dl class="orange">
        <dt><img src="<?php echo getStaticUrl('images/f-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>60%</h3>
          <p><b>60%</b> mehr Software mit einem Klick aktualisieren</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Was wir erreicht und erhalten haben</h2>
    <div class="present clearfix">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/p-icons01.png')?>" alt=""/></dt>
        <dd>Wir haben <h4 class="first">00.000.000</h4> Benutzern geholfen</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/p-icons02.png')?>" alt=""/></dt>
        <dd>Unsere Benutzer haben <h4 class="two">0,000,000</h4> Std. pro Monat erspart</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons03.png')?>" alt=""/></dt>
        <dd>Unsere Benutzer haben <h4>1,18 Milliarden USD</h4> pro Jahr gespart</dd>
      </dl>
    </div>
    
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
              <p class="on">"Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte. Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.</p>
              <cite>CHIP</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>
                Ich habe im Laufe der Zeit verschiedene Programme ausprobiert, die versprochen haben, dass mein Computer problemlos laufen wird. Ich habe vor Jahren die kostenlose Version von ASC versucht. Seitdem ich die kostenpflichtige Version aktiviert habe, leide ich nicht mehr unter Systemproblemen. Advanced SystemCare Pro ist das Einzige, das ich aufgrund meiner Erfahrungen empfehlen würde. Ich benutze auch IObit Uninstaller, Smart Defrag und Driver Booster, um meinen PC viel besser zu machen.
              </p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>
                Advanced System Care ist ein tolles Programm. Ich habe dieses Programm für viele Jahre benutzt und es funktioniert super gut. Der Hersteller verbessert ständig seine Produkte. Diese Produkte werden im Laufe der Jahre immer besser. Ich verwende viele ihrer Produkte und sie funktionieren alle großartig.
              </p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>
                Ich habe noch nie ein besseres PC-Wartungs- oder Sicherheitsprogramm als Advanced Systems Care gefunden, seitdem ich ASC gekauft habe, hatte ich noch nie Probleme mit Viren, Phishing, schwarzen Bildschirmen oder einer anderen Art von Bugaboo Wenn es um Computer geht, vielen Dank an ASC, dass Sie meinen PC so viel angenehmer gemacht haben.
              </p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>
                Ich benutze Advanced SystemCare Pro seit langer Zeit und diese neueste Version 13 ist sogar besser als Version 12. Sie kann Probleme sehr schnell finden und beheben. Das Produkt verfügt über so viele zusätzliche Funktionen, die man verwenden kann, um Ihren Computer gut und stabil zu halten. Es ist ziemlich empfehlenswert.
              </p>
              <cite>Tony Fisher</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>
                Der neue ASC 13 ist ein Muss für alle PC-Benutzer. Die übersichtliche und intuitive Benutzeroberfläche macht die Bedienung sowohl für Anfänger als auch für Fortgeschrittene einfach. Viele leistungsstarke Tools sorgen dafür, dass Ihr PC stets mit der bestmöglichen Leistung arbeitet. Ein großes Lob ist an IObit für eine so wunderbare Reihe von Werkzeugen. Vielen Dank an IObit für das wunderbare Werkzeug.
              </p>
              <cite>Daniel Sanders</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>
                Ich liebe Advanced SystemCare 13 Beta. Es läuft schnell und bereinigt persönliche Spuren, Junk-Dateien und Registrierungsfragmente. Besonders gut gefällt mir das Popup-Fenster mit den Zugriffsberechtigungen für sensible Bereiche. Wenn eine App zum ersten Mal versucht, auf sensible Dateien zuzugreifen, wird ein Fenster geöffnet, um den Zugriff zuzulassen oder zu verweigern. Sobald die Berechtigung für eine App erteilt wurde, wird das Popup für diese App nicht mehr angezeigt. Ich weiß, dass meine vertraulichen Dateien sicher aufbewahrt werden.
              </p>
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
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Weltweite Auszeichnungen</h2>
    <p>
      Unsere Produkte sind seit 12 Jahren von diesen erstklassigen Medien anerkannt.<br> Deswegen haben Sie das richtige PC-Optimierungsprogramm.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

  
  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
       Notiz:
      </dd>
      <dd>
        *. Wir haben Advanced SystemCare 13 PRO in unserem internen Testlabor getestet. Ihre Ergebnisse können variieren.
      </dd>
      <dd>
        *. Nach Ablauf der 30-tägigen Testphase wird Ihr Kreditkarten- oder PayPal-Konto automatisch mit 24,99€ belastet. Der Rabatt i.H.v. 58% auf den ursprünglichen
           Preis von 59,99 € gilt nur für Vorbestellungen!
      </dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
  <!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      <span><span class="viewNum"><?php echo $viewNum;?></span> Beobachter.</span> Nur 
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      Stück übrig. 
    </div>
    <div class="price">
      <strong><b>0</b>€<sup>*</sup></strong> <a href="https://www.iobit.com/buy.php?product=de-asc13preorder&ref=de_asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexp-de');" class="buybtn"><span>Jetzt vorbestellen</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>
    $(".intro .wrapper .right b").eq(0).html("<?php echo $paramJunk?>").end().eq(1).html("<?php echo $paramPri?>").end().
      eq(4).html("<?php echo $paramPro;?>");
  </script>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>