<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='dedb'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(75,90);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_db','xr_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sparen Sie 87% auf Driver Booster Pro und erhalten Sie zusätzlich zwei hilfreiche Programme kostenlos.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>Weihnachtssale</h1>
      <p class="best">Die letzte Chance, möglichst viel zu sparen – nur einmal im Jahr!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster 6 PRO"/>
          <a class="hint" id="hint" href="javascript: void(0)" target="_blank"></a>
        </div>
        <div class="right fr">
          <h2>Driver Booster 6 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Plätze übrig! 
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Nur jetzt! <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>MS  verbleibend</p>
            </div>
            <p><strong>19<big>,</big></strong> <span>99€ <del>159,93€</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-db6sdpf1999&ref=de_db6rightcorner<?php echo $refStr;?>&aff=&refs=de_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1812rc-de')">
              Jetzt aktivieren
            </a>
            <p class="year">1 Jahresabo für 3 PCs</p>
            <!-- money-back -->
            <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- snow -->
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Aktualisiert fehlende, veraltete und und fehlerhafte Treiber durch nur einen Klick!!</h2>
      <p class="over">
        Driver Booster Pro hat über 150.000.000 Nutzer weltweit und macht die Treiberaktualisierung <br>einfacher & die Spieleleistung besser.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt="Driver Booster 6 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Aggiorna oltre 3,000,000 di driver -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Aktualisiert über 3.000.000 Gerätetreiber</h3>
              <p>
                Prüft über 3.000.000 Treiber automatisch und und empfiehlt die richtigen Treiber, um Computerabstürze zu reduzieren und das System zu stabilisieren.
              </p>
              <p><b>20% besser als die Free Version</b></p>
            </dd>
          </dl>
          <!-- Migliore prestazione di gioco  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Schnellere und bessere Spielqualität</h3>
              <p>
                Prüft die Treiber und Komponenten des Spiels automatisch, um schnelleres Spielen zu ermöglichen. Die Geschwindigkeit einiger Spiele erhöht sich um bis zu 39%. 
              </p>
              <p><b>* gilt nur für die PRO Version</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Download di driver più veloce -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Aktualisiert Treiber schneller</h3>
              <p>
                Laden Sie Ihre Treiber vorab herunter, um Treiber schneller zu aktualisieren und Verzögerungen zu reduzieren. 
              </p>
              <p><b>*gilt nur für die PRO Version</b></p>
            </dd>
          </dl>
          <!--
            Nessuna scomparsa del suono e nessun
            problema di connessione a Internet
          -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Löst Ton- und Internetprobleme</h3>
              <p>
                Behebt Gerätefehler, um Probleme mit ihrem Drucker, Bildschirm, Internet, Maus und anderen externen Geräten zu reduzieren. 
              </p>
              <p><b>*gilt nur für die PRO Version</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts -->
  <div class="gifts wrapper" id="gifts">
      <h2>Die PRO Version ermöglicht eine einfache Aktualisierung von Treibern und sorgt für ein bessere Spieleerlebnis</h2>
      <div class="gift-list clearfix">
        <!-- sd -->
        <dl class="sd">
          <dt>
            <span><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></span>
            <strong>Smart Defrag 6 PRO</strong>
          </dt>
          <dd><del>29,99€</del>  <b><span>0</span>€</b></dd>
          <dd><p>Defragmentiert Festplatten und Dateien <br>automatisch und ultraschnell</p></dd>
        </dl>
        <!-- pf -->
        <dl class="pf">
          <dt>
            <span><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></span>
            <strong>Protected Folder</strong>
          </dt>
          <dd><del>39,95€</del>  <b><span>0</span>€</b></dd>
          <dd><p>Schützt wichtige Dateien und ihre <br>Privatsphäre mit nur einem Klick</p></dd>
        </dl>
      </div>
  </div>
  <!-- end gifts -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Con soli €0,02 al giorno ottieni un PC più stabile e un'esperienza di gioco più fluida!</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster 6 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Plätze übrig! 
          </p>
        </div>
        <p><strong>19<big>,</big></strong> <span>99€ <del>159,93€</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-db6sdpf1999&ref=de_db6rightcorner<?php echo $refStr;?>&aff=&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1812rc-de')">
          Jetzt aktivieren
        </a>
        <p class="year">1 Jahresabo für 3 PCs</p>
        <!-- money-back -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Sehen Sie sich die Vergleichsübersicht der Pro und Free Version an.</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">Driver Booster <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>Driver Booster <br> <b>Pro</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema">Über 2.500.000</td>
          <td class="itemb">Treiberdatenbank</td>
          <td class="itemc">Über 3.000.000</td>
        </tr>
        <tr>
          <td class="itema">Begrentzt</td>
          <td class="itemb">Treiber-Downloadgeschwindigkeit</td>
          <td class="itemc">Unbegrentzt</td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Automatische Updates veralteter Treiber</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Automatische Treibersicherung gegen Unfälle</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Behebung der Gerätefehlern</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Überprüfung von Spielekomponenten</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Überprüft Game Ready Treiber als Priorität</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Automatische Updates auf die neueste Version</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema last"></td>
          <td class="itemb"></td>
          <td class="itemc last"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h3>Nicht verpassen!</h3>
      <h2>Erhalten Sie 87% Rabatt und aktualisieren Sie Ihre Treiber mit nur einem Klick</h2>
      <div class="price">
        <p><strong>19<big>,</big></strong> <span>99€ <del>159,93€</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-db6sdpf1999&ref=de_db6rightcorner<?php echo $refStr;?>&aff=&refs=de_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1812rc-de')">
          Jetzt aktivieren
        </a>
        <p id="footdown" class="countdown">Nur jetzt! <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>MS</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <!-- 01 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/PCMAG-editchoice.png')?>" alt="PC Magazine"></dt>
          <dd>
            <h2>Media Review</h2>
            <p>„IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <!-- 03 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Wayne-Bowler.png')?>" alt="Wayne Bowler"></dt>
          <dd>
            <h2>Kundenbewertung</h2>
            <p>"Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"</p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
        <!-- 04 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Adam-Backlund.png')?>" alt="Adam Backlund"></dt>
          <dd>
            <h2>Kundenbewertung</h2>
            <p>„Driver Booster ist eine großartige Anwendung. Für jemanden, der viele Anwendungen und Treiber besitzt, aber nicht die Zeit dafür hat diese manuell zu aktualisieren, kann Driver Booster nur dringendst empfehlen, er wird Euch dabei helfen, Updates und Treiber schnell und einfach zu updaten.“</p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <!-- 05 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Myo-Thuya.png')?>" alt="Myo Thuya"></dt>
          <dd>
            <h2>Kundenbewertung</h2>
            <p>"Durch Driver Booster weiß ich mit Leichtigkeit, welche Gerätetreiber veraltet sind und kann diese einfach updaten. Nebenbei hilft es mir auch dabei, Soundfehler, Netzwerkfehler, Gerätefehler usw. zu beheben. Ich hatte es vor dem Gebrauch nicht geglaubt, aber nach wenigen Anwendungen, lernte ich es zu lieben. Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten. Danke IObit."</p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Unternehmensauszeichnungen</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Testen Sie risikofrei mit unserer 60-Tage-Geld-Zurück-Garantie</h4>
            <p>Die PRO Version kann all ihre Kopfschmerzen zu einem günstigen Preis lösen!</p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Wir akzeptieren</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Hinweis:</dt>
          <dd>Daten können sich system- oder computerabhängig ändern.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
      </div>
      <!-- footer end -->
    </div>
  </div>

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>

<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/db-mask-box.png')?>";
  var _href = "http://www.iobit.com/buy.php?product=de-db6sdpf1899&ref=de_db6rightcornerpopup<?php echo $refStr;?>&refs=de_purchase_db&tw=-8";
  var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1812rcpop-de')";
  var viewNum = "<?php echo $viewNum;?>";
</script>

<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>