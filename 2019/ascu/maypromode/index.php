<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$viewNum=rand(100,150);
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='deascuoct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=3;
    }
  }else{
    $packsNum=69;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Sparen Sie 76% auf Advanced SystemCare Ultimate und erhalten Sie zusätzlich zwei Geschenke kostenlos!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
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
    <h1>
     ANGEBOT DES TAGES
      Sparen Sie 76% auf ASCU und erhalten Sie zusätzlich Gratisges
    </h1>
    <!-- content -->
    <div class="content clearfix">
      <!-- left-message -->
      <div class="left-message fl">
        <img src="<?php echo $pResUrl;?>images/banner-ascu.png" alt="">
        <img class="db-reduce" src="<?php echo getStaticUrl('images/banner-ascu-reduce.png')?>" alt="">
      </div>
      <!-- right-message -->
      <div class="right-message fr">
        <!-- title -->
        <!-- surplus -->
        <p class="surplus">  <b class="one">0</b><b class="two">0</b> verkauft!    <b class="three">0</b><b class="four">0</b>  verfügbar!</p>
        <!-- progressbar -->
        <div class="progressbar">
          <span></span>
        </div>
        <!-- view -->
        <p class="view"><span class="viewNum"><?php echo $viewNum;?></span> Leute beobachten das Angebot im Moment </p>
        <!-- price -->
        <p class="price">
          <strong>29,99€</strong>
          <span>
            Normalpreis:
            <del> 129,84€</del>
          </span>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-ascu123pcpfsd2999eu&ref=de_au12pfsd6purchase1905<?php echo $refStr;?>&refs=de_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase201905-de')">
             JETZT SPAREN
        </a>
        <!-- attention -->
        <p class="attention">      1 Jahresabo für 3 Rechner </p>
        <!-- moneyback -->
        <img class="moneyback" src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="">
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
</div>
<!-- payment end -->

<!-- benfits start -->
<div class="benfits">
  <div class="wrapper clearfix">
    <h2> Umfassender Schutz und stabile Performance für Ihren PC</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt=""/>
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li class="fun1 active">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
          </div>
        </li>
      </ul>
    </div>
    <div class="detail-list">
      <dl class="active first">
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Große Virendatenbank</h3>
          <p>Erkennt und beseitigt mehr Sicherheitsbedrohungen für einen besseren Schutz.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>Anti-Ransomware-Engine</h3>
          <p>Blockiert proaktiv potenzielle Ransomware-Angriffe &  schützt durchgehend Ihre Dateien und Ihr Geld</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>Sauberer & schneller PC</h3>
          <p>Entfernt Junk-Dateien und verbessert die Surfgeschwindigkeit mit nur einem Klick</p>
        </dd>
      </dl>
      <dl class="last">
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Anzeigenentfernung</h3>
          <p>Blockiert schädliche Anzeigen im Browser für sicheres und reibungsloses Online-Surfen</p>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <a class="intro" href="javascript:void(0)">ASCU und andere Produkte vergleichen >></a>
  </div>
</div>
<!-- benfits end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Kostenlose und leistungsstarke Geschenke für Sie</h2>
    <!-- PF -->
    <dl class="pf-box">
      <dt><img src="<?php echo $pResUrl;?>images/sd-box.png" alt=""></dt>
      <dd>
        <h3>Smart Defrag 6 PRO  </h3>
        <p><del>29,99€</del> <b>0€</b></p>
        <p>
          Automatische Festplattendefragmentierung <br> Bis zu 200% schnellerer Zugriff auf Dateien
        </p>
      </dd>
    </dl>
     <!-- IU -->
    <dl class="iu-box">
      <dt><img src="<?php echo $pResUrl;?>images/pf-box.png" alt=""></dt>
      <dd>
        <h3>Protected Folder</h3>
        <p> <del>39,99€</del> <b>0€</b></p>
        <p>
         Ihre wichtigen Dateien schützen <br> Keine Sorgen um Datendiebstahl
        </p>
      </dd>
    </dl>

    <!-- clear float -->
    <div class="clear"></div>
    <!-- words -->
    <h4>  Exklusive Geschenke nur für kurze Zeit!</h4>
    <p class="surplus">  Nur noch <b class="packsNum"><?php echo $packsNum ?></b> Plätze übrig</p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=de-ascu123pcpfsd2999eu&ref=de_au12pfsd6purchase1905<?php echo $refStr;?>&refs=de_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase201905-de')">
       JETZT SPAREN
    </a>
  </div>
</div>
<!-- gift-box end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content ">
      <dl class="active">
        <dt><h3>Media Review</h3></dt>
        <dd>
          <h4>Mit „Advanced SystemCare Ultimate“ schützen, analysieren, reparieren und optimieren Sie Windows und Ihren PC. </h4>
        </dd>
        <dd>Die Tool-Sammlung sucht und beseitigt überflüssige Dateien, fehlerhafte Registry-Einträge und Malware-Infektionen. Darüber hinaus ist eine komplette Antivirensoftware enthalten.</dd>
      </dl>
      <dl>
        <dt><h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„Advanced SystemCare Ultimate ist die neue Lösung. Der große Gewinner! “</h4>
        </dd>
        <dd>„Advanced SystemCare Ultimate ist die neue Lösung. Der große Gewinner! Mein Computer ist immer auf dem aktuellsten Stand und läuft superschnell. Wie oft mit anderen Produkten, habe ich hier absolut keine Probleme.“</dd>
      </dl>
      <dl>
        <dt><h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„Ich empfehle Advanced SystemCare Ultimate als ihre Antiviren- und Systemoptimierungssoftware.“</h4>
        </dd>
        <dd>„Mithilfe der letzten Version von Advanced SystemCare Ultimate hatte ich keine Probleme mit dem System, der Malware etc. Die neue Version bietet mehrere Features, um meinen Laptop 5x schneller zu machen, als zuvor. “</dd>
      </dl>
      <dl>
        <dt><h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„Eines der simpelsten und dennoch effektiven Programme, die ich zur Pflege aller meiner drei Computer benutze.“</h4>
        </dd>
        <dd>„Als ich die Inhalte von Advanced SystemCare Ultimate sah, wusste ich, dass ich es haben musste. Ich wurde nicht enttäuscht. Es ist eines der simpelsten und dennoch effektiven Programme, die ich zur Pflege aller meiner drei Computer benutze.“</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/computer.png" alt="Computerbild"></div>
        <p>Computerbild</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett"></div>
        <p>Rod Garnett</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"></div>
        <p>Dareen Lim</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="Russell Peck"></div>
        <p>Russell Peck</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- comparison start -->
<div class="comparison wrapper">
  <h2>Warum Advanced SystemCare Ultimate 12?</h2>
  <h3><span>Besserer Schutz</span>, und <span>keine Leistungsverzögerungen mehr</span>. Hier der Vergleich</h3>
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text"></th>
        <th class="ascu"><div>Advanced SystemCare <br> Ultimate</div></th>
        <th class="avc"><div>AVG <br> Anti-virus</div></th>
        <th class="nor"><div>Norton Security <br> Deluxe</div></th>
        <th class="ava"><div>Avast! Pro <br> Antivirus</div></th>
        <th class="mic"><div>Microsoft <br> Security Essentials</div></th>
        <th class="mic mca"><div>McAfee® AntiVirus</div></th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text">Erkennungsrate</td>
        <td class="ascu">Sehr hoch </td>
        <td class="avc">Normal</td>
        <td class="nor">Hoch </td>
        <td class="ava">Normal </td>
        <td class="mic">Hoch</td>
        <td class="mic">Hoch</td>
      </tr>
      <tr>
        <td class="text">Leistungsverzögerung</td>
        <td class="ascu">Nein  </td>
        <td class="avc"> Ja</td>
        <td class="nor"> Ja </td>
        <td class="ava"> Ja </td>
        <td class="mic"> Ja</td>
        <td class="mic"> Ja</td>
      </tr>
      <tr>
        <td class="text">Top PC-Reinigung und Optimierung</td>
        <td class="ascu"><i class="green"></i>  </td>
        <td class="avc"> <i class="red"></i></td>
        <td class="nor"> <i class="red"></i> </td>
        <td class="ava"> <i class="red"></i> </td>
        <td class="mic"> <i class="red"></i></td>
        <td class="mic"> <i class="red"></i></td>
      </tr>
      <tr>
        <td class="text">Über 20 extra Tools für die PC-Leistung</td>
        <td class="ascu"><i class="green"></i>  </td>
        <td class="avc"> <i class="red"></i></td>
        <td class="nor"> <i class="red"></i> </td>
        <td class="ava"> <i class="red"></i> </td>
        <td class="mic"> <i class="red"></i></td>
        <td class="mic"> <i class="red"></i></td>
      </tr>
    </tbody>
  </table>
  <dl>
    <dt>Unübertroffene Erkennungsrate und maximaler Schutz</dt>
    <dd>Reinigung von versteckten und hartnäckigen Viren, Trojanern, Würmern, Spyware, Adware und verschiedener Malware mit nur einem Klick. Advanced SystemCare Ultimate 12 bietet zudem einen always-on, automatisierten und proaktiven Schutz gegen alle Arten von Internet-Bedrohungen mit einer konstant aktualisierten Virendatenbank.</dd>
  </dl>
  <dl>
    <dt>Genießen Sie die unschlagbare Sicherheit ohne Verlangsamungen des Systems</dt>
    <dd>Das System läuft mit seiner Spitzengeschwindigkeit ohne Leistungsverzögerung aufgrund unserer branchenführenden Internet-Sicherheitstechnologie.</dd>
  </dl>
  <dl>
    <dt>Sicheres Surfen, Suchen, Herunterladen und Teilen mit Vertrauen</dt>
    <dd>Die proaktive Virus Control-Technologie überwacht das Verhalten von Prozessen in Echtzeit, scannt Dateien, die durch E-Mails verteilt werden und blockiert mögliche Bedrohungen. Während Sie Ihren PC benutzen, garantiert Ihnen die unübertroffene Erkennungsrate eine sichere Umgebung. </dd>
  </dl>
  <dl>
    <dt>Genießen Sie die zuversichtliche Sicherheit ohne Verlangsamung des Systems</dt>
    <dd>Die bereits bewährte leistungsstarke PC Tune-up-Fähigkeit entfesselt die volle Leistung Ihres PCs. Mit Echtzeit-Optimierung und ActiveBoost-Signaturen werden System-Ressourcen intelligent verwaltet, und damit erhalten Sie einen superschnellen PC.</dd>
  </dl>
</div>
  <!-- comparison end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="left-message">
      <img src="<?php echo $pResUrl;?>images/bottom-ascu.png" alt="">
      <img class="db-reduce" src="<?php echo $pResUrl;?>images/bottom-ascu-reduce.png" alt="">
    </div>
    <dl class="price-content">
      <dt>
        <h3>Nur solange der Vorrat reicht! Nicht verpassen!</h3>
        <!-- price -->
        <p class="price">
          <strong>  29,99€</strong>
          <span>
            Normalpreis:
            <del>129,84€</del>
          </span>
        </p>
      </dt>
      <dd>
        <!-- buybtn -->
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=de-ascu123pcpfsd2999eu&ref=de_au12pfsd6purchase1905<?php echo $refStr;?>&refs=de_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase201905-de')">
          <span>JETZT SPAREN</span>
        </a>
        <!-- attention -->
        <p class="attention"><i></i> <b class="salesNum">34</b> verkauft! <b class="packsNum">20</b> verfügbar</p>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <div class="serives wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><strong>Zufriedenheitsgarantie</strong></dd>
      <dd>60-Tage-Geld-zurück-Garantie</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><strong>Zahlungssicherheit</strong></dd>
      <dd>Ihre Zahlung ist 100% sicher</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/shop-box.png" alt=""></dt>
      <dd><strong>Schnelle Aktivierung</strong></dd>
      <dd> Nach dem Kauf erhalten Sie <br> sofort einen Aktivierungscode</dd>
    </dl>
    <dl class="servicion">
      <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
      <dd><strong>Kundendienst</strong></dd>
      <dd>Kostenloser technischer Support 24/7</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Hinweis:</dt>
    <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
    <dd>*Daten können sich system- oder computerabhängig ändern.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
</div>
<!-- footer end -->

<div class='popout'><p>ASCU v12 erkennt den ASCU v11 Lizensschüssel <strong>für ASCU v12 als gültig an.</strong></p></div>

<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>