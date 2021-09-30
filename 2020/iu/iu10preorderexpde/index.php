<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(116, 198);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'deiujunexp0716_p' . $date;
    $c_name_t = 'deiujunexp0716_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = rand(41, 59);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$data = json_decode(base64_decode($_GET['data']), true);
$data_arr = $data['iu10pre'];
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Zahlen Sie 0 €, um IObit Uninstaller 10 PRO zu verlängern</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>    
</head>

<body>
<!-- banner start -->
<div class="banner" data-name="animation">
  <div class="wrapper">
    <div class="top">
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
        IObit
      </a>
      <div class="icon">
        <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
        IObit Uninstaller 10
      </div>        
    </div>
    <div class="clearfix">
      <div class="left-img">
        <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" class="iu-box" data-name="default">
        <img src="<?php echo getStaticUrl('images/banner-icon01.png') ?>" alt="" class="iu-icon01"
             data-name="default">
        <img src="<?php echo getStaticUrl('images/banner-icon02.png') ?>" alt="" class="iu-icon02"
             data-name="default">            
      </div>
      <div class="right fr">
        <h1 data-name="default">Der alljährliche Vorverkauf beginnt.</h1>
        <h2 data-name="default">Verlängern Sie die PRO Version für 0 Euro</h2>
        <h3 data-name="default">Diese Aktion ist begrenzt auf die ersten 500 Benutzer pro Tag bis zum 25 August</h3>
        <div class="number" data-name="default"> 
          <div id="reduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          übrig
          <div class="bar">
            <span></span>
          </div> 
        </div>
        <div class="price" data-name="default">
          <strong>0€ <sup>*</sup></strong>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-iu10preorder&ref=de_iu10preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderexp-de');">
            Jetzt erneuern
          </a>                
        </div>              
      </div>          
    </div> 
  </div> 
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper ">
    <h2>IObit Unistaller PRO hat Ihnen bereits geholfen :</h2>
    <div class="clearfix">
      <dl class="one" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon01.png') ?>" alt=""/></dt>
        <dd>
          <?php echo empty($data_arr['soft']) ? '' : '<b class="total">' . $data_arr['soft'] . '</b>'; ?> Programme, inklusive <?php echo (empty($data_arr['bundle']) || empty($data_arr['soft'])) ? '' : '<b class="bundle">' . $data_arr['bundle'] . '</b>'; ?> hartnäckiger Software und <?php echo (empty($data_arr['stubborn']) || empty($data_arr['soft'])) ? '' : '<b class="sofeware">' . $data_arr['stubborn'] . '</b>'; ?> Softwarebundels deinstalliert
        </dd>
      </dl>
      <dl class="right three" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon02.png') ?>" alt=""/></dt>
        <dd>
          <?php echo empty($data_arr['plugin']) ? '' : '<b class="plug-total">' . $data_arr['plugin'] . '</b>'; ?> Plug-ins & Toolbars, inklusive <?php echo (empty($data_arr['plugin-mp']) || empty($data_arr['plugin'])) ? '' : '<b class="mail">' . $data_arr['plugin-mp'] . '</b>'; ?> bösartiger Plug-ins und Werbe-Plug-ins
        </dd>
      </dl>
      <dl class="two" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon03.png') ?>" alt=""/></dt>
        <?php echo (empty($data_arr['file']) || empty($data_arr['reg'])) ? '<dd>Dateien und Register gelöscht</dd>' : '<dd><b class="files">' . $data_arr['file'] . '</b> Dateien und <b class="registries">' . $data_arr['reg'] . '</b> Register gelöscht</dd>'; ?>
      </dl>
      <dl class="right two" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon04.png') ?>" alt=""/></dt>
        <?php if (empty($data_arr['filesize'])) : ?>
          <dd>Speicherplatz freigegeben</dd>
        <?php else :
          $filesize = round($data_arr['filesize'] / (1024 * 1024), 2);
          $size = explode('.', $filesize);?>
          <dd><b class="disk"><em class="integer"><?php echo $size[0];?></em>.<em class="decimal"><?php echo $size[1];?></em></b> MB Speicherplatz freigegeben
          </dd>
        <?php endif; ?>
      </dl>
    </div>
  </div>    
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature" data-name="animation">
  <div class="wrapper">
    <h2>Ihr PRO-Priority ist ausgelaufen und Sie müsesn sich <span>verabschieden von diesen Vorteilen:</span></h2>
    <div class="feature-img">
      <img class="img-box" src="<?php echo getStaticUrl('images/feature-img.png') ?>" data-name="default" alt=""/>
      <dl class="one" data-name="default">
        <dt>Machtvoller Deinstallierer</dt>
        <dd>
          Deinstallation von ungewollten Proggrammen, insbesondere nervender Programme oder Antivirussoftware die sich schwer entfenen lassen.
        </dd> 
      </dl>
      <dl class="two" data-name="default">
        <dt>Sicheres und schnelles Browsen</dt>
        <dd>
          Identifizierung und Deinstallation von bösartigen Plug-ins und Werbe-Plug-ins für sichere und schnelle Surfen.
        </dd>
      </dl>
      <dl class="three" data-name="default">
        <dt>Software Update</dt>
        <dd>Ein Klick für die vollautomatische Aktualisierung aller wichtigen Programme.</dd>
      </dl>
      <dl class="four" data-name="default">
        <dt>Automatische Reinigung</dt>
        <dd>
          Automatische Suche und Löschung von Datenüberresten aus Deinstallationen.
        </dd>
      </dl>
      <dl class="five" data-name="default">
        <dt>Tiefenreinigung</dt>
        <dd>
          Monitoring /Überwachung und Löschung aller Daten und Registern die durch Installationen oder Standardeinstallationen entstanden sind.
        </dd>
      </dl>
      <span class="circle one" data-name="default"></span>
      <span class="circle two" data-name="default"></span>
      <span class="circle three" data-name="default"></span>   
    </div>  
  </div>
</div>
<!-- feature end -->

<div class="feature-02" data-name="animation">
  <div class="wrapper">
    <h2>Der neue IObit Uninstaller 10 performt besser:</h2>
    <dl data-name="default" class="one">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon08.png') ?>" alt=""></dt>
      <dd>
        <h3><b>50% schneller</b> beim Deinstallieren   </h3>
      </dd>
    </dl>
    <dl class="center" data-name="default">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon07.png') ?>" alt=""></dt>
      <dd>
        <h3>Findet <b>30% mehr</b> Datenüberreste<br> von Deinstallation</h3>
      </dd>
    </dl>
    <dl data-name="default" class="three">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png') ?>" alt=""></dt>
      <dd>
        <h3><b>Blockiert</b> automatische<br> Anweisungsnachrichten</h3>
      </dd>
    </dl>
  </div>
</div>

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>Praktisches Deinstallationsprogramm</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>50M+</h3>
        <p>Downloads</p>
      </dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
      <dd>
        <h3>4.5+</h3>
        <p>Benutzerbewertung</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>1000+</h3>
        <p>positive Rezensionen</p>
      </dd>
    </dl>
    <div class="review-box">
      <div class="box">
        <h3>Kundenbewertung</h3>
        <p>Ich benutze den IObit Uninstaller schon eine lange Zeit und ich kann mich nicht beklagen. Es hat das erste Mal als ich es benutzt habe bereits gut funktioniert aber verbessert wurde er über die Jahre trotzdem, was auch letztlich der Grund war, warum ich dieses Programm bereits so lange nutze. Ich kann dieses Produkt jedem weiterempfehlen der Schwierigkeiten damit hat Programme komplett zu deinstallieren ohne, dass Datenreste auf dem Computer verbleiben.</p>
      </div>
      <div class="box">
        <h3>Kundenbewertung</h3>
        <p>Ich bin echt froh, dass ich dieses Programm gefunden habe, weil mein Computer war sehr langsam und ich dachte, es liegt daran da er vielleicht alt ist. Mein Kumpel hat mir dann aber gesagt, dass der Grund  auch sein kann, dass sich zu viele Daten von deinstallierten Programmen  auf meinem Computer befinden. Er hatte recht. Nachdem ich mit IObit Uninstaller Programme deinstalliert habe, von denen ich nichts mehr wusste und andere Programme, die ich eigentlich schon deinstalliert habe, komplett vom Computer entfernen konnte hat sich die Computergeschwindigkeit deutlich verbessert. Ich kann mich bei IObit nur bedanken. Vielen Dank.</p>
      </div>
      <div class="box active">
        <h3>Media Review</h3>
        <p>
          Die Pro-Version beinhaltet alle Funktionen der Freeware und kommt mit einigen praktischen Zusatz-Features. So kann die Vollversion beispielsweise auch gebündelte Programme oder Plugins entfernen und alle Ihre wichtigen Programme mit nur einem Klick auf die neueste Version updaten.
        </p>
      </div>
      <div class="box">
        <h3>Kundenbewertung</h3>
        <p>Ich habe in der Vergangenheit mehrere Deinstallationsprogramme verwendet. Nachdem ich IOBit  (Version 7.0) benutzt habe, habe ich kein anderes Programm mehr benutzt. Es hat eine einfach zu bedienende Benutzeroberfläche und erledigt alles sehr schnell und effektiv. Es hilft Ihnen, die Registrierungsdaten automatisch zu bereinigen und somit die Computerperformance auf einem guten Level zu halten. Die Fähigkeit, Bundleware zu identifizieren und zu entfernen, ist eine großartige Funktion in IOBit, die unübertroffen ist.</p>
      </div>
      <div class="box">
        <h3>Kundenbewertung</h3>
        <p>Der IObit Uninstaller findet Plugins in meinen Browsern, von denen ich nicht einmal wusste, dass sie existieren. Die Bereinigung von Restdateien ist sehr gut. Es bleiben keine Datenreste von deinstallierten Programmen übrig. Es erinnert mich außerdem an die verfügbaren Updates für alle meine Programme. Insgesamt hat sich die Leistung meines Computers dadurch verbessert. Es ist sehr bequem und leicht zu handhaben. Ich habe das sogar meinen Freunden empfohlen.</p>
      </div>
    </div>
    <ul>
      <li>
        <span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
        <p>Ivan White</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
        <p>Ali Tekin</p>
      </li>
      <li class="active">
        <span><img src="<?php echo getStaticUrl('images/chip-de.png')?>" alt="Chip.de"></span>
        <p>Chip.de</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
        <p>Samrat Kumar Chakrabortty</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
        <p>John Glenn Perong</p>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- service start -->
<div class="service">
  <div class="wrapper">
    <h2>Weltweite Auszeichnungen</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- service end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <dl class="annotation">
      <dt>Hinweis:</dt>
      <dd>
        *.Nach Ablauf der 30-tägigen Testphase wird Ihre Kreditkarten- oder PayPal-Konto automatisch mit 18,99€ belastet. Der Rabatt i.H.v. 52% auf den ursprünglichen Preis von 39,95 € gilt nur für Vorbestellungen!
      </dd>
      <dd>
        *.Wenn Sie mit unserem Produkt nicht zufrieden sind, können Sie die Bestellung innerhalb von 30 Tagen kostenfrei stornieren.
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
      <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
      IObit Uninstaller 10
    </div>
    <div class="number fl">
      <div id="fReduce" class="reduceNum">
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
      </div> 
      von 500 Stück übrig
    </div>
  </div>
</div>
<!-- floatlayer end -->
<script>refStr = "<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>