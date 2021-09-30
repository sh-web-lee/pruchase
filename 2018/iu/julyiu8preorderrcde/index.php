<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(60,88);

if(!empty($_GET['action'])&&($_GET['action']=='getViewNum')){
  echo $viewNum;
  exit();
}

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='deiuprerc_p'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>1){
      $packsNum--;
    }
  }else{
    $packsNum=48;
  }
  setcookie($cName,$packsNum);
  echo $packsNum;
  exit();
}
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['to'])?'':('-'.$_GET['to']));
  ?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <title>Bezahlen Sie 0€ um neue IObit Uninstaller PRO vorzubestellen</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <h1>Der globale Vorverkauf beginnt!</h1>
      <h2>Beeilung! <span class="soldNum">450</span> von 500 Deals sind verkauft!</h2>
     <div class="message clearfix">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
        <div class="right-message">
          <h3>IObit Uninstaller 8 PRO</h3>
          <h4>Jetzt: <strong>0€</strong> UVP:<del>39,95€</del></h4>
          <div class="progress-bar">
            <div class="left-number">
              <span class="viewNum"><?php echo $viewNum?></span> User online, <strong class="gift">32</strong> Deals übrig
            </div>
            <div class="date">
              Nach: <strong>05</strong>Min:  <strong>05</strong>Sek: <strong>05</strong>Ms ausverkauft      
            </div>
            <div class="bar">
              <span></span>
            </div>
          </div> 
          <a href="https://www.iobit.com/buy.php?product=de-iu8preorder30day&ref=de_iu8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderrc-de');" class="buybtn"><span>Jetzt vorbestellen</span></a>
          <p>Lizenz: 1 Jahr / 3 PCs</p>
        </div>
     </div>
      <ul class="distance">
        <li>Erhalten Sie nach 30 Tagen <br> 52% Rabatt auf den <br> ursprünglichen Preis.</li>
        <li class="center">  <span>Wenn Sie <br> zufrieden sind </span>  <span class="two">Bestellen Sie für 0€</span> <span>Wenn Sie nicht <br> zufrieden sind</span></li>
        <li>stornieren Sie die Bestellung <br> innerhalb von 30 Tagen ohne <br> Gebühren</li>
      </ul>
    </div>
  </div>
  <!-- end banner -->
  <!-- benfits -->
  <div class="feature wrapper clearfix">
    <h2>Warum sollten Sie IObit Uninstaller 8 PRO auswählen?</h2>
    <h3>Neue Funktionen und Verbesserungen: Probieren lohnt sich!</h3>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd><span>Bundleware deinstallieren</span></dd>
      <dd>Erkennt Adware, Symbolleisten und unerwünschte Programme von Drittanbietern, die andere Freeware installiert, um lästige Werbung zu liefern oder Ihre Privatsphäredaten zu stehlen.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd><span>Hartnäckige Programme entfernen</span></dd>
      <dd>Deinstalliert unerwünschte Programme oder hartnäckige Programme, die Sie nicht mit Windows oder anderen Programmen entfernen können.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd><span>Software-Updater  </span></dd>
      <dd>Mit einem Klick aktualisieren Sie Ihre wichtigen Software auf Ihrem PC ohne Benutzereingriff.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd><span>Bösartige Plugins identifizieren </span></dd>
      <dd>Beseitigt vom Browser bösartige Werbeplugins, um eine sichere und saubere Browser-Erfahrung zu gewährleisten.</dd>
    </dl>
  </div>
  <!-- end feature -->
  <!-- compar-tab start -->
  <div class="compar-tab wrapper">
    <h2>Weitere Vorteile der Pro-Version</h2>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="itema"><div class="bg">IObit Uninstaller 8 Free  <span>  Ihre aktuelle Version</span></div></th>
          <th class="space"></th>
          <th class="itemb"> VS </th>
          <th class="space"></th>
          <th class="itemc"><div class="bg">IObit Uninstaller 8 PRO</div></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema"><i class="green"></i></td>
          <td class="space"></td>
          <td class="itemb">Deinstalliert unerwünschte Programme und Windows-Apps</td>
          <td class="space"></td>
          <td class="itemc"><i class="green"></i></td>
        </tr>
        <tr>
          <td class="itema"><i></i></td>
          <td class="space"></td>
          <td class="itemb">Löscht hartnäckige Programme, die sich nicht entfernen lassen</td>
          <td class="space"></td>
          <td class="itemc"><i class="green"></i></td>
        </tr>
        <tr>
          <td class="itema"><i></i></td>
          <td class="space"></td>
          <td class="itemb">Deinstalliert unerwünschte Drittanbietersoftware neben Freeware</td>
          <td class="space"></td>
          <td class="itemc"><i class="green"></i></td>
        </tr>
        <tr>
          <td class="itema"><i></i></td>
          <td class="space"></td>
          <td class="itemb">Identifiziert und entferntt bösartige Plug-Ins und Symbolleisten</td>
          <td class="space"></td>
          <td class="itemc"><i class="green"></i></td>
        </tr>
        <tr>
          <td class="itema"><i></i></td>
          <td class="space"></td>
          <td class="itemb">Löscht automatisch alle Reste, die einen PC verlangsamen</td>
          <td class="space"></td>
          <td class="itemc"><i class="green"></i></td>
        </tr>
        <tr>
          <td class="itema"><i></i></td>
          <td class="space"></td>
          <td class="itemb">Löscht die Reste, die andere Uninstaller nicht entfernen können</td>
          <td class="space"></td>
          <td class="itemc"><i class="green"></i></td>
        </tr>
        <tr>
          <td class="itema"><i></i></td>
          <td class="space"></td>
          <td class="itemb">Aktualisiert die essentiellen Software mit 1 Klick</td>
          <td class="space"></td>
          <td class="itemc"><i class="green"></i></td>
        </tr>
        <tr>
          <td class="itema"><i></i></td>
          <td class="space"></td>
          <td class="itemb">Aktualisiert sich automatisch, wenn eine neue Version verfügbar ist</td>
          <td class="space"></td>
          <td class="itemc"><i class="green"></i></td>
        </tr>
        <tr>
          <td class="itema"><i></i></td>
          <td class="space"></td>
          <td class="itemb">Premium 24/7 Technischer Support</td>
          <td class="space"></td>
          <td class="itemc"><i class="green"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- compar-tab end -->
  <div class="between-buy wrapper">
    <h2>Bezahlen Sie jetzt <strong>0€</strong> , um alle PRO-Funktionen zu genießen</h2>
    <a href="https://www.iobit.com/buy.php?product=de-iu8preorder30day&ref=de_iu8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderrc-de');" class="buybtn"><span>Jetzt vorbestellen</span></a>
    <p>Aktuell <span class="viewNum"><?php echo $viewNum?></span> Besucher auf der Website, aber nur <strong class="gift">35</strong> Deals übrig</p>
  </div>

  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/giga.png')?>" alt=""></dt>
            <dd>
              <h2>Media Review</h2>
              <p>Neben Programmen beseitigt der „IObit Uninstaller“ auch Toolbars und Plugins von Firefox, Chrome und Internet Explorer. Mit dem „IObit Uninstaller“ entfernen Sie nicht mehr benötigte Software von Ihrem PC. Im Anschluss an die Standard-Deinstallation durchsucht das kostenlose Tool Ihren kompletten Rechner und die Registry nach möglichen Datenresten, die Sie ebenfalls löschen können.</p>
              <cite>GIGA</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt=""></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>„Uninstaller PRO ist nur eines von fünf der IObit Wartungsprogrammen, in die ich für meinen PC investiert habe, wie Chefköche in Ihre Messer. Uninstaller ist genial darin die Bit- und Bytereste, die sich überall verstecken, zu finden, die ansonsten Festplattenspeicher verbrauchen und das Register beeinflussen. Wenn ich die ‚deinstallieren‘ Funktion des zu deinstallierenden Programmes nutze, funktioniert dies ohne Probleme. Aber Uninstaller PRO ist im Nachhinein aufgetaucht und hat 35 weitere Dateien angezeigt, die noch entfernt werden mussten. Alles was ich tun musste, ist OK zu klicken. Sehr zu empfehlen und auch von mir gekauft ist die Lizenz für 3 PCs. Der Support ist höflich und hervorragend.“</p>
              <cite>Joseph Yu</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt=""></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>„IObit Uninstaller ist wahrscheinlich eines der besten Programme, um unnötige Programme von deinem Computer zu entfernen. Im Gegensatz zur Windows Standarddeinstallation, entfernt dieses Programm jegliche Überbleibsel der Programme, die später deinen PC verlangsamen könnten. Ich nutze dieses Programm seit mehreren Jahren und es hilft mir zu jeder Zeit meinen Computer sauber und schnell zu halten. Ich habe dieses Programm an einige meiner Freunde in der Vergangenheit weiterempfohlen und würde heute auch wieder tun.“</p>
              <cite>Sergey Erlich</cite>
            </dd>
          </dl>                 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt=""></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>„IObit Uninstaller ist eines der besten Programme mit seinem Nutzungsumfang. Einfach zu handhaben, schnelle und tiefe Reinigung. Die neue Version beinhaltet mehr andere Funktionalitäten, die nicht nur mit Windows 10 funktionieren. Die schnelle Reinigung durch die Plug-ins ist auch sehr komfortabel. Ebenso die Suche nach Duplikaten und nicht genutzten Programmen. Danke für die Bewirtung der Computer meiner Familie und mir.“</p>
              <cite>Áda Görtler</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt=""></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>„Der IObit Uninstaller wird mit jedem Update besser. Ich nutze ihn nun schon seit mehr als 3 Jahren. Er lädt schnell und hat eine einfache Benutzeroberfläche. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features, welches mir einen schnellen Zugriff auf kürzlich installierte Programme gibt, die ich nicht mag oder nicht angemessen funktionieren. Es wird außerdem einfacher, deine Startanwendungen zu kontrollieren, sodass dein PC schneller hochfährt.“</p>
              <cite>Lovro Žužić</cite>
            </dd>
          </dl>
        </div>               
    </div>
  </div>
  <div class="award">
  <div class="wrapper">
    <h2> Weltweite Auszeichnungen</h2>
    <p>Von diesen Medien empfohlen und ausgezeichnet</p>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
  </div>
</div>
<!-- payments -->
<div class="serive wrapper">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/money-back-guarantee.png')?>" alt=""></dt>
    <dd><strong>Zufriedenheitsgarantie</strong></dd>
    <dd>60-Tage-Geld-zurück-Garantie</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""></dt>
    <dd><strong>Zahlungssicherheit</strong></dd>
    <dd>Ihre Zahlung ist 100% sicher</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/license.png')?>" alt=""></dt>
    <dd><strong>Schnelle Aktivierung</strong></dd>
    <dd>Sie erhalten bald einen Aktivierungs-code nach dem Kauf.</dd>
  </dl>
  <dl class="last">
    <dt><img src="<?php echo getStaticUrl('images/support.png')?>" alt=""></dt>
    <dd><strong>Kundendienst</strong></dd>
    <dd>Kostenloser technischer Support 24/7</dd>
  </dl>
</div>

<!-- end payments -->
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>*Am Ende der kostenlosen 30-Tage-Testabo, wird Ihre Kreditkarte- oder Paypal-Konto automatisch 18,99€ berechnet.</dt>
    <dd>Der 52% Rabatt auf Originalpreis von 39,95€ ist ein Bonus nur für die vorbestellenden Personen.</dd>
  </dl>

  <!-- footer -->
  <div class="footer">    
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>

  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <img src="<?php echo getStaticUrl('images/fl-iu-box.png')?>" alt="" class="img-box">
      <div class="progress-bar">
        <div class="left-number">
          <span class="viewNum"><?php echo $viewNum?></span> User online, <strong class="gift">32</strong> Deals übrig
        </div>
        <div class="date">
          Nach: <strong>05</strong>Min:  <strong>05</strong>Sek: <strong>05</strong>Ms ausverkauft      
        </div>
        <div class="bar">
          <span></span>
        </div>
      </div> 
      <a href="https://www.iobit.com/buy.php?product=de-iu8preorder30day&ref=de_iu8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderrc-de');" class="buybtn"><span>$0 Pre-order Now</span></a>
    </div>
  </div>
  <div class="pop-over">
    <h2>UPS</h2>
    <h3>Vorbestellung-Reservierungen sind heute voll.</h3>
    <a href="https://purchase.iobit.com/de/iu/index.php" onclick="ga('send', 'event', 'iu7buy', 'buy', 'iu8predorderrc-de');">Checken Sie ein anderes Angebot >></a>
  </div>
  <div class="pop-bg"></div>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>