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
  $c_name = 'deascnovbrb_p' . $date;
  $c_name_t='deascnovbrb_t' . $date;
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

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);
if(in_array($_GET['pop'],array('bi_asc','bb_asc','bnc_asc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sparen Sie 70% auf Advanced SystemCare PRO am Black Friday - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
    <div class="title clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <b class="only">Only Today</b>
        <h1>Black Friday Sale</h1>
        <h5>Niedrigster Preis des Jahres</h5>
        <div class="discount">70% Rabatt</div>
      </div>
    </div>
    <div class="chart">
      <div class="chartbox one"><span>Normal   <b>59,99€</b></span></div>
      <div class="chartbox big two"><span>Halloween <b>24,99€</b></span></div>
      <div class="chartbox center three"><span>Heute<b class="change-price"><big>17</big>,99€</b></span></div>
      <div class="chartbox big four"><span>Weihnachten <b>24,99€ </b></span></div>
      <div class="chartbox five"><span>Normal<b>59,99€</b></span></div>
    </div>
    <div class="price clearfix">
      <div class="numbox">
         Nur noch 50 Stück zu diesem Preis!
        <div id="flip" class="flipNum">
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>0</b></span></div>
          <div class="listbox"><span class="list"><b>5</b></span></div>
          <div class="listbox last"><span class="list"><b>0</b></span></div>
        </div>
      </div>
      <div class="btnbox">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc3pc1799&ref=de_ascbf1799sale1911<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1799bfsale1911-de')">
          Jetzt aktivieren – 17,99€
        </a>
        <p>1 Jahresabo für 3 PCs</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <h2>Wir streben nach dem Besten und Sie haben einen</h2>
  <div class="wrapper intro-box">
    <div class="intro-img">
      <div class="intro-list one">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <div class="gray"></div>
        <span class="loading">Loading...</span>
        <div class="scanbox">
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
        </div>
        <div class="percent">
          <span class="change-num">50</span>
          <span class="completed"></span>
          <div class="circletwo">
            <div class="bottom-circle"></div>
            <div class="top-circle"></div>
          </div>
        </div>
        <div class="rocket"></div>
        <div class="safebox">
          <img src="<?php echo getStaticUrl('images/screen04.png')?>" alt=""/>
          <div class="privacy">
            <span class="icon"></span>
            <span class="shield">Privatsphärenschild</span>
            <div class="check"></div>
            <span class="text">188 sensible Daten geschützt.</span>
          </div>
          <div class="privacy-right">
            <img src="<?php echo getStaticUrl('images/privacy-right.png')?>" alt=""/>
          </div>
          <div class="shield-img"></div>
        </div>
      </div>
    </div>
    <div class="intro-txt">
      <div class="slow">
        <h3><span>langsamen PC</span></h3>
        <p>
          <span class="one">Viele Junk-Dateien, Fehler, </span>
          <span class="two">Abstürze und Datenschutzverletzungen.</span>
          
        </p>
      </div>
      <div class="fast">
        <h3>schnellen PC</h3>
        <p>Schnelle Reaktion & Internetgeschwindigkeit sowie umfassenden Datenschutz.</p>
        <div class="fast-list">
          <div class="one">
            <dl>
              <dt><b>PC 200%* schneller</b></dt>
              <dd>Reinigt und optimiert das System automatisch , um den Computer 200%* schneller zu machen.</dd>
            </dl>
            <dl>
              <dt><b>Internet 300%* schneller</b></dt>
              <dd>Optimiert das Netzwerk, um das Herunterladen, Surfen, Spielen & Ansehen von YouTube um 300%* zu beschleunigen.</dd>
            </dl>
          </div>
          <div class="two">
            <dl>
              <dt><b>Privatsphärenschutzschild</b></dt>
              <dd>Verhindert unsichere Zugriffe auf Ihre <br> sensiblen Daten wie Kontaktdaten, E-Mail-Daten, Dropbox usw.</dd>
            </dl>
            <dl>
              <dt><b>Sicheres Surfen</b></dt>
              <dd>Löscht private Spuren automatisch, so dass <br> Tracker nicht wissen was Sie lesen, ansehen und kaufen.</dd>
            </dl>
          </div>
          <span class="line"><span class="red"></span></span>
        </div>
      </div>
    </div>
  </div>
  <span class="intro-bg"></span>
</div>
<!-- intro end -->

<!-- comparison start -->
<div class="comparison wrapper" id="compare">
  <h2 class="">Genießen Sie die Vorteile…</h2>
  <table>
    <thead>
    <tr>
      <th class="text"></th>
      <th class="itema">
        <div class="free">Ihre aktuelle Version</div>
      </th>
      <th class="itemb">
        <div class="pro">Advanced SystemCare 13<big>PRO</big></div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="virtue">Grundlegende Systemreinigung -Reparatur und -Optimierung </td>
      <td class="itema"><i class="all-icons black">√</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Optimiert die Startobjekte für schnelle PC-Starts  </td>
      <td class="itema"><i class="all-icons black">√</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Erkennt schädliche Links in Ihrer Web-E-Mail </td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Beschleunigt den Computer um bis zu 200% </td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Macht das Internet bis zu 300% schneller </td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Blockiert den unbefugten Zugriff auf Ihre privaten Dateien </td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Entfernt automatisch private Spuren für sicheres Surfen</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Verhindert Spyware und Malware in Echtzeit </td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Reduziert und repariert Systemabstürze und -Fehler</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Aktualisiert wichtige Programme mit einem Klick</td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="virtue">Aktualisiert sich auf die neueste Version </td>
      <td class="itema"><i class="all-icons">×</i></td>
      <td class="itemb"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th></th>
      <th class="itema"></th>
      <th class="itemb"></th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- feature start -->
<div id="feature" class="feature">
  <div class="wrapper">
    <h2>Aktivieren Sie alle Funktionen zum niedrigsten Preis des Jahres!</h2>
    <div class="price">
      <p><strong class="change-price"><big>17</big>,99€</strong> <del>59,99€</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=de-asc3pc1799&ref=de_ascbf1799sale1911<?php echo $refStr;?>&refs=de_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1799bfsale1911-de')">
        Jetzt aktivieren
      </a>
      <p> 1 Jahresabo für 3 PCs</p>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
  <div class="wrapper">
    <h2>Was andere dazu sagen…</h2>
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
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>“Ich habe im Laufe der Zeit verschiedene Programme ausprobiert, die versprochen haben, dass mein Computer problemlos laufen wird. Ich habe vor Jahren die kostenlose Version von ASC versucht. Seitdem ich die kostenpflichtige Version aktiviert habe, leide ich nicht mehr unter Systemproblemen. Advanced SystemCare Pro ist das Einzige, das ich aufgrund meiner Erfahrungen empfehlen würde. Ich benutze auch IObit Uninstaller, Smart Defrag und Driver Booster, um meinen PC viel besser zu machen.”</p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>“Der neue ASC 13 ist ein Muss für alle PC-Benutzer. Die übersichtliche und intuitive Benutzeroberfläche macht die Bedienung sowohl für Anfänger als auch für Fortgeschrittene einfach. Viele leistungsstarke Tools sorgen dafür, dass Ihr PC stets mit der bestmöglichen Leistung arbeitet. Ein großes Lob ist an IObit für eine so wunderbare Reihe von Werkzeugen. Vielen Dank an IObit für das wunderbare Werkzeug.”</p>
              <cite>Daniel Sanders</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>“Ich habe noch nie ein besseres PC-Wartungs- oder Sicherheitsprogramm als Advanced Systems Care gefunden, seitdem ich ASC gekauft habe, hatte ich noch nie Probleme mit Viren, Phishing, schwarzen Bildschirmen oder einer anderen Art von Bugaboo Wenn es um Computer geht, vielen Dank an ASC, dass Sie meinen PC so viel angenehmer gemacht haben.“</p>
              <cite>Danny R. Sheets </cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>User Review</span></h2></dt>
            <dd>
              <p>“Ich benutze Advanced SystemCare Pro seit langer Zeit und diese neueste Version 13 ist sogar besser als Version 12. Sie kann Probleme sehr schnell finden und beheben. Das Produkt verfügt über so viele zusätzliche Funktionen, die man verwenden kann, um Ihren Computer gut und stabil zu halten. Es ist ziemlich empfehlenswert.“</p>
              <cite>Tony Fisher </cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="two" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
          <li class="three" data-num="4"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher  "></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="chip"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="daniel-sanders"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Auszeichnungen</h2>

    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      <dd><strong>Zufriedenheitsgarantie</strong> 60-Tage-Geld-zurück-Garantie</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""></dt>
      <dd><strong>Zahlungssicherheit</strong> Ihre Zahlung ist 100% sicher</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/veloce.png')?>" alt=""></dt>
      <dd><strong>Schnelle Aktivierung</strong> Kurz nach dem Kauf erhalten Sie <br>einen Aktivierungscode.</dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></dt>
      <dd><strong>Kundendienst</strong> Kostenloser technischer Support 24/7</dd>
    </dl>
  </div>
</div>
<!-- footer start -->
<div class="footer wrapper">
  <dl>
    <dt>Hinweis:</dt>
    <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
    <dd>
      *. Daten können sich system- oder computerabhängig ändern.
    </dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
      <div class="discount">70% Rabatt</div>
    </div>
    <div class="numbox fl">
      <div id="fliptwo" class="flipNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox last"><span class="list"><b>0</b></span></div>
      </div>
      <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> Beobachter, nur noch <b class="packsNum">50</b>Stück zu diesem Preis!</p>
    </div>
    <div class="price fl">
      <strong class="change-price">17,99€</strong> <del>59,99€</del>
      <p>1 Jahresabo für 3 PCs</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=de-asc3pc1799&ref=de_ascbf1799sale1911<?php echo $refStr;?>&refs=de_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1799bfsale1911-de')">
      Jetzt aktivieren
    </a>
  </div>
</div>
<!-- floatlayer end -->
<script>packsNum=<?php echo $packsNum;?>;</script>
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>