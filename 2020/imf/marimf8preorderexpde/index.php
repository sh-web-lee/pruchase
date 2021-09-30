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
    $c_name = 'deimf8exp_p' . $date;
    $c_name_t='deimf8exp_t' . $date;
    $isInit=$_GET['isInit'];
    if ($_COOKIE[$c_name]===null) {
      $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
      setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
      setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
    } else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        $packsNum = 0;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      } else {
        if($isInit==1){
          $packsNum = intval($_COOKIE[$c_name]);
        }else {
          $packsNum = $_COOKIE[$c_name] - 1;
        }
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
    echo json_encode(array('packsNum'=>$packsNum));
    exit();
  }

  $refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

  $isNewUser=false;
  $isNewUserV = false;
  $isNewRef = false;
  if(preg_match('/^7\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUser=true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }
  if(preg_match('/^5\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
    $isNewUserV = true;
    if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
        'imfpro','iufree','iupro','dbfree',
        'dbpro','isu'))){
      $isNewRef = true;
    }
  }

  $packsNum=49;
  $transData=json_decode(base64_decode($_GET['num']));
  if(!empty($transData)){
    if(@intval($transData->seats)){
      $packsNum=@intval($transData->seats);
    }
  }

  $popStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);
  $refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

  $isNewRef = false;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
      'imfpro','iufree','iupro','dbfree',
      'dbpro','isu'))){
    $isNewRef = true;
  }
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bezahlen Sie 0€ um das neue IObit Malware Fighter PRO zu erhalten</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <h1 class="title">Der Vorverkauf ist live</h1>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="msgbox fl">
          <h2>Einmal im Jahr Vorverkauf  <br> Kehren Sie für 0€ zur PRO-Version zurück</h2>
          <div class="barbox clearfix">
            <div class="progressbar fl">
              <span class="reducebar">Erste 500 Kunden  </span>
              <div class="numbox">
                 <span class="totalNum">498</span> Deals schon verkauft, <b class="reduceNum"><em>2</em></b> übrig! 
              </div>
            </div>
            <div class="changebar fl"><span>Nächste 500+ Kunden  </span></div>
          </div>
          <ul class="barprice">
            <li>0€*</li>
            <li class="last">21,99€</li>
          </ul>
          <ul class="price">
            <li class="first">
              <p><strong>0€</strong><sup>*</sup></p>
            </li>
            <li>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=de-imf8preorder&ref=de_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-de');">
                Jetzt vorbestellen
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <div class="arrow-down"></div>
      <h2>Was hat IObit Malware Fighter PRO für Sie getan?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
          <span class="line-left line"></span>
        </div>
        <div class="message fr">
          <h3>Schützte Ihren PC</h3>
          <ul>
            <li>
              Entfernte <?php if(!empty($_GET['fileto'])):?><b class="remove"><?php echo number_format($_GET['fileto'])?></b><?php endif;?> Sicherheitsbedrohungen für einen sichereren PC
            </li>
            <li>
             Blockierte  <?php if(!empty($_GET['rsto'])):?><b class="stop"><?php echo number_format($_GET['rsto'])?></b><?php endif;?>  Ransomware-Angriffe
            </li>
            <li>Stoppte Bedrohungen von einem USB-Laufwerk, das Ihren PC infiziert</li>
            <li>Lieferte <b>vollständigen</b>   Echtzeitschutz</li>
          </ul>
        </div>
      </div>
      <div class="clearfix">
        <div class="message message2 fl">
          <h3>Schützte Ihre Privatsphäre</h3>
          <ul>
            <li>
              Erkannte <?php if(!empty($_GET['camto'])):?><b class="detect"><?php echo number_format($_GET['camto'])?></b><?php endif;?>  nicht vertrauenswürdige Zugriffe auf Ihre Webcam
            </li>
            <li>
              Löschte <?php if(!empty($_GET['traceto'])):?><b class="online"><?php echo number_format($_GET['traceto'])?></b><?php endif;?>  Online-Traces, um Snoopers zu vermeiden
            </li>
            <li><b>Passwortgeschützte</b>  Ihre persönlichen Dateien</li>
          </ul>
        </div>
        <div class="imgbox imgbox2 fr">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="line-right line"></span>
          <span class="shield-box"><em class="shield"></em><em class="shield-shadow"></em></span>
        </div>
      </div>
      <div class="fbottom">
        <h2>Ohne PRO müssen Sie  <b>sich jetzt verabschieden von:</b></h2>
        <div class="clearfix">
          <div class="imgbox fl">
            <img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/>
            <span class="warning"></span>
          </div>
          <div class="message fr">
            <ul>
              <li>Malware- und Virenschutz durch Bitdefender Engine;</li>
              <li>Ransomware-Schutz durch IObit Anti-Ransomware Engine;</li>
              <li>Kameraschutz gegen unbefugte Zugriffe;</li>
              <li>Schutz vor Sicherheitsbedrohungen durch USB-Laufwerk;</li>
              <li>Datenschutz durch automatische Löschung von Online-Spuren;</li>
              <li>Automatische Aktualisierung der Malware-Datenbank;</li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- moregives start -->
  <div class="moregives">
    <h2>Kommen Sie zurück, die neue Version bietet Ihnen mehr:</h2>
    <div class="wrapper">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
        <dd>
          <big>100% größer</big>
          <p>Malware-Datenbank</p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
        <dd>
          <big>50%* schnelller</big>
          <p>Scan-Geschwindigkeit</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
        <dd>
          <big>E-mail Schutz</big>
          <p>um böswillige Links zu identifizieren</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- moregives end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Was sagen andere dazu:</h2>
      <div class="review-box">
        <div class="reviews">
          <div class="inner">
            <dl>
              <dt>Adam Cullen</dt>
              <dd>
                "IObit Malware Fighter ist großartig, da es Dateien und USBs scannen und vor Online- und Offline-Bedrohungen schützen kann. IObit-Produkte haben mir oft rechtzeitig geholfen. Ich würde IObit und all seine Programme empfehlen, wenn du deinen Computer sicher und flott machen und das Leben ein bisschen einfacher machen möchtest."
              </dd>
            </dl>
            <dl>
              <dt>Software.Informer</dt>
              <dd>
                "Das Programm verfügt über zwei Antiviren-Maschinen von IObit und Bitdefender und scheint wirksam gegen Malware, die nicht von anderen ähnlichen Tools erkannt werden können. Und es kann zusammen mit Ihren Antivirenprogrammen arbeiten. Es kann eine breite Reihe von Spyware, Ransomware, Adware, Trojaner, Würmer, Keylogger und Bots erkennen."
              </dd>
            </dl>
            <dl>
              <dt>Filipe</dt>
              <dd>
                "IObit Malware Fighter ist der beste Malware-Entferner, die ich in meiner Arbeit verwende. Ich bin ein IT-Mann und arbeite in der Support-Abteilung, IMF ist mein Lieblingstool zum Malware Entfernen.Malware kann davon schnell beendet werden. IMF ist eine intuitive Software mit erweiterten Funktionen und einer sehr schönen Benutzeroberfläche. Dieses Werkzeug verwende ich fast jeden Tag."
              </dd>
            </dl>
          </div>
        </div>
        <div class="handle">          
          <span class="one"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"/></span>
          <span class="two on"><img src="<?php echo getStaticUrl('images/software.informer.png')?>" alt=""/></span>
          <span class="three"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Weltweite Auszeichungen</h2>
      <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dt>*Hinweis: </dt>
      <dd>
        Nach Ablauf der 30-tägigen Testphase wird Ihr Kreditkarten- oder PayPal-Konto automatisch mit 21,99€ belastet. Der Rabatt i.H.v. 63% auf den ursprünglichen Preis von 59,99 € gilt nur für Vorbestellungen!
      </dd>
      <dd>
        *.Wenn Sie nicht zufrieden sind, können Sie die Bestellung innerhalb von 30 Tagen ohne Zahlung einer Gebühr stornieren.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
      </div>
      <div class="barbox fl">
        <h2>Für 0€ die PRO-Version vorbestellen</h2>
        <div class="numbox">
           <span class="viewNum"><?php echo $viewNum?></span> Deals schon verkauft,  <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b>  übrig!
        </div>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong>0€</strong><sup>*</sup></p>
        </li>
        <li>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-imf8preorder&ref=de_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8predorderexp-de');">
            Jetzt vorbestellen
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>