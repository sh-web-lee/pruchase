<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  
  $buyNum = ceil(microtime_float()*1000/20000) - 69041325;
  $buyNum = number_format($buyNum);
if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deasc3pc_p' . $date;
  if ($_COOKIE[$c_name]===null) {
    $packsNum = 48;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit;
}

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','crcur',
        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
        'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3'
        ,'asc_promote13','asc_promote14','asc_promote15','asc_promote16','asc_promote17','asc_promote18')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Bis zu 83% Rabatt auf Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a href="https://www.iobit.com/de/index.php" target="_blank" class="logo">IObit</a>
      <div class="title">
        <h1> Schnapp des Tages</h1>
        <h2> Bis zu 80% reduziert! Nur solange der Vorrat reicht!</h2>
      </div>
      <div class="box">
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="" /></dt>
          <dd>
            Normalpreis: <del>39,99€</del>
            <strong>22,99€</strong>
            <span>1 PC</span>
          </dd>
        </dl>
        <a href="http://www.iobit.com/buy.php?product=de-asc131pc2299&ref=de_asc131pcxmastest1912<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc1pcxmastest1912-de')" class="buybtn border">Jetzt kaufen</a>

      </div>
      <div class="box three-box">
       <dl class="clearfix">
          <dd>
            Normalpreis: <del>149,92€</del>
            <strong>24,99€</strong>
            <span>3 PCs</span>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt="" /><i class="info"></i> <img src="<?php echo getStaticUrl('images/asc-reduce.png')?>" alt="" class="asc-reduce"></dt>
        </dl>
        <a href="https://www.iobit.com/buy.php?product=de-asc13sdpfamc2499&ref=de_asc133pcxmastest1912<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcxmastest1912-de')" class="buybtn">Jetzt kaufen</a>

         <div class="date">
          <i class="fire"></i> Nur noch
          <div class="countdown countdown1">
            <div class="scroll-tick">
              <span>0</span>
            </div>
            <div class="scroll-tick">
              <span>0</span>
            </div>
          </div>
          Deals verfügbar
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="cause wrapper">
    <h2>Welche sind die besten Werkzeuge,  <br> um Windows 10 Registrys zu bereinigen, zu reparieren und zu optimieren? </h2>
    <div class="message">
      <ul>
        <li>Advanced  <br> System Care</li>
        <li>Defencebyte <br> Computer Optimizer</li>
        <li>Registry Repair</li>
        <li>CCleaner</li>
        <li>Iolo System <br> Mechanic</li>
        <li>Wise Registry <br> Cleaner</li>
      </ul>
    </div>
    <p>Quelle: https://windowsreport.com/windows-10-registry-cleaners/</p>
  </div>

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <dl>
        <dt>Warum Advanced SystemCare PRO?</dt>
        <dd>Gründliche und zeitsparende Systemreinigung</dd>
        <dd class="list02">Mehr Speed für Windows</dd>
        <dd class="list03">Sicherer PC & bessere Privatsphäre</dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/intro-box.png')?>" alt="" class="imgbox">
      <a href="javascript::" class="tag"> Für weitere Details klicken Sie hier</a>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Was können die folgenden Produkte, die Sie kostenlos bekommen?</h2>
      <div class="gift">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
        <dl>
          <dt><strong>0€</strong> Normalpreis: <del>39,99€</del></dt>
          <dd>Ihre Festplatte automatisch und schnell defragmentieren. </dd>
          <dd>Ihren Datenzugriff dramatisch beschleunigen.  </dd>
        </dl>
      </div>
      <div class="gift">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
        <dl>
          <dt><strong>0€</strong> Normalpreis: <del>39,95€</del></dt>
          <dd>Passwortschutz für Ordner und Dateien  unter Windows bieten. </dd>
          <dd>Daten vor Datenverlust und Viren schützen.  </dd>
        </dl>
      </div>
      <div class="gift">
        <img src="<?php echo getStaticUrl('images/amc-gift.png')?>" alt="">
        <dl>
          <dt><strong>0€</strong> Normalpreis: <del>19,99€</del></dt>
          <dd>Ihr Handy automatisch scannen & reinigen. <br> &nbsp; </dd>
          <dd>Ihre Zahlungssicherheit garantieren.  </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- centbuy end -->
  <!-- awards start -->
  <div class="awards ">
    <div class="wrapper">
      <h2>Redaktions-Tipp</h2>
      <h3>Millionen von Nutzern weltweit haben ihre Erfahrungen geteilt</h3>
      <!-- review start -->
      <div class="review clearfix">
        <img src="<?php echo getStaticUrl('images/awards.jpg')?>" alt="" class="awards-icon">
        <div class="content">
          <p> “Ich habe im Laufe der Zeit verschiedene Programme ausprobiert, die versprochen haben, dass mein Computer problemlos laufen wird. Ich habe vor Jahren die kostenlose Version von ASC versucht. Seitdem ich die kostenpflichtige Version aktiviert habe, leide ich nicht mehr unter Systemproblemen. Advanced SystemCare Pro ist das Einzige, das ich aufgrund meiner Erfahrungen empfehlen würde. Ich benutze auch IObit Uninstaller, Smart Defrag und Driver Booster, um meinen PC viel besser zu machen.”</p>
          <p class="active"> “Der neue ASC 13 ist ein Muss für alle PC-Benutzer. Die übersichtliche und intuitive Benutzeroberfläche macht die Bedienung sowohl für Anfänger als auch für Fortgeschrittene einfach. Viele leistungsstarke Tools sorgen dafür, dass Ihr PC stets mit der bestmöglichen Leistung arbeitet. Ein großes Lob ist an IObit für eine so wunderbare Reihe von Werkzeugen. Vielen Dank an IObit für das wunderbare Werkzeug.”</p>
          <p> “Ich habe noch nie ein besseres PC-Wartungs- oder Sicherheitsprogramm als Advanced Systems Care gefunden, seitdem ich ASC gekauft habe, hatte ich noch nie Probleme mit Viren, Phishing, schwarzen Bildschirmen oder einer anderen Art von Bugaboo Wenn es um Computer geht, vielen Dank an ASC, dass Sie meinen PC so viel angenehmer gemacht haben.“</p>
          <p> “Ich benutze Advanced SystemCare Pro seit langer Zeit und diese neueste Version 13 ist sogar besser als Version 12. Sie kann Probleme sehr schnell finden und beheben. Das Produkt verfügt über so viele zusätzliche Funktionen, die man verwenden kann, um Ihren Computer gut und stabil zu halten. Es ist ziemlich empfehlenswert.“</p>
        </div>
        <ul class="users">
          <li>
            <div><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt=""></div>
            Richard Beavers
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></div>
            Daniel Sanders
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></div>
            Danny R. Sheets
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></div>
            Tony Fisher
          </li>
        </ul>
      </div>
      <!-- review end -->
    </div>
  </div>
  <!-- awards end -->
    

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text">Mit der PRO-Version sparen Sie mehr Zeit und Mühe  </th>
          <th class="space"></th>
          <th class="itemb"> Free-Version</th>
          <th class="space"></th>
          <th class="itema"> Pro-Version </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="virtue">Grundlegende Systemreinigung und -Optimierung</td>
          <td class="space"></td>
          <td class="itemb"><i>√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Grundlegender PC-Schutz mit Spyware-Entfernung</td>
          <td class="space"></td>
          <td class="itemb"><i>√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Säubert Registries um Systemabstürze zu verhindern</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
         <tr>
          <td class="virtue">Beendet unbenutzte Programme und Prozesse</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
         <tr>
          <td class="virtue">Automatische Pflege für Ihren PC wie geplant</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Bis zu 200% schnellerer Systemstart</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Bis zu 300% höhere Internetgeschwindigkeit</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Löscht Ihre Datenspuren automatisch</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Verkleidet Ihren digitalen Fingerabdruck</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Erkennt und blockiert Sicherheitslücken in Echtzeit</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Schützt Ihre Daten vor anderen Programmen</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Automatisches Update auf die neueste Version</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="virtue">Kostenloser technischer Support 24/7 </td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->


  <div class="footer wrapper">
   <div class="service clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dt>
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
    <!-- annotation start -->
    <dl>
      <dt>Notiz:</dt>
      <dd>
        *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
      </dd>
      <dd>*Daten können sich system- oder computerabhängig ändern.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <p>Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    <!-- footer end -->
  </div>
  <!-- container end -->
  <div class="floatlayer" id="floatlayer">
   <div class="wrapper">
     <div class="img-box"><img src="<?php echo getStaticUrl('images/fl-asc-reduce.png')?>" alt="" class="asc-reduce"></div>
     <h2> 1 Jahr, 3 Rechner  <strong> 24,99</strong></h2>
     <div class="buy-content">
       <a href="https://www.iobit.com/buy.php?product=de-asc13sdpfamc2499&ref=de_asc133pcxmastest1912<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcxmastest1912-de')" class="buybtn">Jetzt kaufen</a>
       <div class="date">
         <i class="fire"></i> Nur noch
          <div class="countdown countdown2">
            <div class="scroll-tick">
              <span>0</span>
            </div>
            <div class="scroll-tick">
              <span>0</span>
            </div>
          </div>
          Deals verfügbar
        </div>
     </div>
   </div>
  </div>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
</body>
</html>