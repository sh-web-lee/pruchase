<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dedbexp0819_p' . $date;
  $c_name_t='dedbexp0819_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$udate = empty($_GET['udata']) ? '' : $_GET['udata'];
$date_arr = json_decode(base64_decode(urldecode($udate)),true);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Bezahlen Sie 0€ um Driver Booster 8 PRO zu bekommen - IObit </title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>Vorverkauf startet</p>
          <h2>Nehmen Sie Ihre Priorität zurück für 0€</h2>
          <h4>mit der neuesten PRO Version</h4>
          <div class="price">
            <span>Vorverkauf <br> Preis:</span>
            <strong>0€ <sup>*</sup></strong>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=de-db8preorder&ref=de_db8preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-de');">
              Jetzt vorbestellen
           </a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              übrig
            </h3>
            <div class="bar">
               <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <div class="feature">
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Driver Booster PRO hat Ihnen geholfen:</h2>
      </div>
      <div class="line"></div>
      <ul class="message-box">
        <li data-name='default'><strong class="updated"><?php echo empty($date_arr['UpdDrv'])? '': $date_arr['UpdDrv']; ?></strong> wichtige Treiber aktualisiert</li>
        <li data-name='default'><strong class="fixed"><?php echo empty($date_arr['FixedErr'])? '': $date_arr['FixedErr']; ?></strong> häufige Fehlercode-Probleme behoben</li>
        <li class="three" data-name='default'><strong class="game"><?php $UpdSum = $date_arr['UpdCmp'] + $date_arr['UpdRdy'];echo empty($UpdSum)? '': $UpdSum; ?></strong> wichtige Spielkomponenten & Game Ready-Treiber<br> aktualisiert</li>
      </ul>
      <div class="img-box">
        <span class="computer two" data-name='default'></span>
        <img src="<?php echo getStaticUrl('images/feature-02-icon.png')?>" alt="" class="icon three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon02.png')?>" alt="" class="icon01 three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon03.png')?>" alt="" class="icon02 three" data-name='default'>

      </div>
    </div>
    <div class="message01 wrapper">
      <div class="title">
        <h2>Jetzt werden Sie viel mehr mit dem neuesten</h2>
        <h4>Driver Booster 8 PRO genießen</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png')?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png')?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png')?>" alt="" class="icon02">
        </li>
         <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png')?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="one active">
          <dt><i></i> Größere Treiberdatenbank <span><em>50%↑</em></span></dt>
          <dd>
            Unterstützt jetzt 4.500.000 Treiber. Vorrangige Erkennung und Aktualisierung aller veralteten und mehr* neuesten & seltenen Treiber.
            <?php if(!empty($_GET['more'])) :?>
            <p>* Zusätzliche <strong><?php echo $_GET['more']; ?></strong> Updates jetzt gefunden</p>
            <?php endif;?> 
          </dd>
        </dl>
        <dl>
          <dt><i></i> Offline-Treiberaktualisierung <span class="market"><em>Neu</em></span></dt>
          <dd>
            Aktualisiert Netzwerktreiber ohne Internetverbindung, insbesondere für das neu installierte oder aktualisierte System.
          </dd>
        </dl>
        <dl class="three">
          <dt>
            <i></i> <h3>Stabile Treiber VS Neueste Treiber<br> <span><em>Einzigartig auf dem Markt</em></span></h3>
          </dt>
          <dd>
            Aktualisiert die Treiber auf der Grundlage der Stabilität oder der neuesten zuerst, um unterschiedlichen Anforderungen zu erfüllen.
          </dd>
        </dl>
        <dl>
          <dt><i></i>Sicherere Treibersicherung <span class="market"><em>Verbessert</em></span></dt>
          <dd>
            Die vollständig optimierte Treibersicherung garantiert eine höhere Erfolgsrate bei der Treibersicherung und -wiederherstellung unter Windows 10.
          </dd>
        </dl>
      </div>
    </div>
    
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <div class="title">
          <h2>Ohne Driver Booster PRO,</h2>
          <h4>könnten Sie folgende Probleme haben:</h4>
        </div>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <p>Die Datenbank wird auf 3.000.000 verkleinert</p>
          </dd>
        </dl>
        <dl class="two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt="" ></dt>
          <dd>
            <p>Keine automatische Treiberaktualisierung und -sicherung</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt="" ></dt>
          <dd>
            <p>Keine Aktualisierung der Spielkomponenten </p>
          </dd>
        </dl>
        <dl class="four last" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt="" ></dt>
          <dd>
            <p>Keine Download-<br>Beschleunigung für Treiber</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>

  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>Es ist der weltweit beste Treiber-Updater</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Downloads
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Benutzerbewertung
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          positive Rezensionen
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Media Review</dt>
              <dd>
                „IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“
              </dd>
            </dl>
            <dl>
              <dt>Kundenbewertung</dt>
              <dd>
                Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.  
              </dd>
            </dl>
            <dl>
              <dt>Kundenbewertung</dt>
              <dd>
                Es hat geholfen, Probleme mit der Langsamkeit meines Laptops zu lösen, ohne ihn zum Absturz zu bringen. Manchmal, wenn ich versuchte, meine Treiber zu aktualisieren, stürzte der Computer ab und ich musste meinen Computer formatieren, um die Funktionen wiederherzustellen, und jetzt ist solche Situation mit DB7 nicht mehr möglich. Es ist einfach zu bedienen als das beste Tool auf dem Markt bis jetzt!
              </dd>
            </dl>
            <dl>
              <dt>Kundenbewertung</dt>
              <dd>
                Driver Booster ist wirklich der beste Treiber-Updater auf dem Markt. Es ist benutzerfreundlich, hat eine einfache und gute Oberfläche und erledigt seine Aufgabe besser als jede andere Anwendung, die ich verwendet habe. Dieses Programm ist 5 Sterne wert. Sehr empfehlenswert. 
              </dd>
            </dl>
            <dl>
              <dt>Kundenbewertung</dt>
              <dd>
                Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!
              </dd>
            </dl>
          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/peter-bomers.png')?>" alt="Peter Bomers"></div>
            <p>Peter Bomers</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Verissimo"></div>
            <p>Carlos Alexandre Verissimo</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Redaktions-Tipp</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Hinweis</dt>
      <dd>
        *.Nach Ablauf der 30-tägigen Testphase wird Ihre Kreditkarten- oder PayPal-Konto automatisch mit 26,99€ belastet. Der Rabatt i.H.v. 70% auf den ursprünglichen Preis von 89,99 € gilt nur für Vorbestellungen!
      </dd>
      <dd>*.Wenn Sie mit unserem Produkt nicht zufrieden sind, können Sie die Bestellung innerhalb von 30 Tagen kostenfrei stornieren.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        von 1000 Stück übrig
      </h3>
    </div>
    <div class="price fr">
      <strong>0€ <sup>*</sup></strong>
      <span></span>
       <a class="buybtn" 
          href="https://www.iobit.com/buy.php?product=de-db8preorder&ref=de_db8preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_db"
          onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-de');">
        Jetzt vorbestellen
      </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>