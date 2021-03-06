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
    $packsNum = 98;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      setcookie($c_name, 0, time() + 3600 * 24);
      $packsNum = 0;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit;
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
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
<title> Bis zu 80% Rabatt auf Advanced SystemCare PRO - IObit</title>
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
            Normalpreis: <del>39,99???</del>
            <strong>22,99???</strong>
            <span>1 PC</span>
          </dd>
        </dl>
        <a href="http://www.iobit.com/buy.php?product=de-asc141pc2299&ref=de_asc141pcpurchase1905<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1910-de')" class="buybtn border">Jetzt kaufen</a>

      </div>
      <div class="box three-box">
       <dl class="clearfix">
          <dd>
            Normalpreis: <del>151,93???</del>
            <strong>24,99???</strong>
            <span>3 PCs</span>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt="" /><i class="info"></i> <img src="<?php echo getStaticUrl('images/asc-reduce.png')?>" alt="" class="asc-reduce"></dt>
        </dl>
        <a href="https://www.iobit.com/buy.php?product=de-asc14sdpf2499&ref=de_asc143pcsdpf1905<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1910-de')" class="buybtn">Jetzt kaufen</a>

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
          Deals verf??gbar
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
        <dd>Gr??ndliche und zeitsparende Systemreinigung</dd>
        <dd class="list02">Mehr Speed f??r Windows</dd>
        <dd class="list03">Sicherer PC & bessere Privatsph??re</dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/intro-box.png')?>" alt="" class="imgbox">
      <a href="#" class="tag"> F??r weitere Details klicken Sie hier</a>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Was k??nnen die folgenden Produkte, die Sie kostenlos bekommen?</h2>
      <div class="gift">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
        <dl>
          <dt><strong>0???</strong> Normalpreis: <del>39,99???</del></dt>
          <dd>Ihre Festplatte automatisch und schnell <br> defragmentieren. </dd>
          <dd>Ihren Datenzugriff dramatisch beschleunigen.  </dd>
        </dl>
      </div>
      <div class="gift">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
        <dl>
          <dt><strong>0???</strong> Normalpreis: <del>39,95???</del></dt>
          <dd>Entfernt Software und Programmreste schnell und gr??ndlich.</dd>
          <dd>Macht die vorgenommenen System??nderungen r??ckg??ngig.  </dd>
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
          <p> ???Ich habe im Laufe der Zeit verschiedene Programme ausprobiert, die versprochen haben, dass mein Computer problemlos laufen wird. Ich habe vor Jahren die kostenlose Version von ASC versucht. Seitdem ich die kostenpflichtige Version aktiviert habe, leide ich nicht mehr unter Systemproblemen. Advanced SystemCare Pro ist das Einzige, das ich aufgrund meiner Erfahrungen empfehlen w??rde. Ich benutze auch IObit Uninstaller, Smart Defrag und Driver Booster, um meinen PC viel besser zu machen.???</p>
          <p class="active"> ???Der neue ASC 14 ist ein Muss f??r alle PC-Benutzer. Die ??bersichtliche und intuitive Benutzeroberfl??che macht die Bedienung sowohl f??r Anf??nger als auch f??r Fortgeschrittene einfach. Viele leistungsstarke Tools sorgen daf??r, dass Ihr PC stets mit der bestm??glichen Leistung arbeitet. Ein gro??es Lob ist an IObit f??r eine so wunderbare Reihe von Werkzeugen. Vielen Dank an IObit f??r das wunderbare Werkzeug.???</p>
          <p> ???Ich habe noch nie ein besseres PC-Wartungs- oder Sicherheitsprogramm als Advanced Systems Care gefunden, seitdem ich ASC gekauft habe, hatte ich noch nie Probleme mit Viren, Phishing, schwarzen Bildschirmen oder einer anderen Art von Bugaboo Wenn es um Computer geht, vielen Dank an ASC, dass Sie meinen PC so viel angenehmer gemacht haben.???</p>
          <p> ???Ich benutze Advanced SystemCare Pro seit langer Zeit und diese neueste Version 14 ist sogar besser als Version 13. Sie kann Probleme sehr schnell finden und beheben. Das Produkt verf??gt ??ber so viele zus??tzliche Funktionen, die man verwenden kann, um Ihren Computer gut und stabil zu halten. Es ist ziemlich empfehlenswert.???</p>
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
          <th class="text">Mit der PRO-Version sparen Sie mehr Zeit und M??he  </th>
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
          <td class="itemb"><i>???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">Grundlegender PC-Schutz mit Spyware-Entfernung</td>
          <td class="space"></td>
          <td class="itemb"><i>???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">S??ubert Registries um Systemabst??rze zu verhindern</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
         <tr>
          <td class="virtue">Beendet unbenutzte Programme und Prozesse</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
         <tr>
          <td class="virtue">Automatische Pflege f??r Ihren PC wie geplant</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">Bis zu 200% schnellerer Systemstart</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">Bis zu 300% h??here Internetgeschwindigkeit</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">L??scht Ihre Datenspuren automatisch</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">Verkleidet Ihren digitalen Fingerabdruck</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">Erkennt und blockiert Sicherheitsl??cken in Echtzeit</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">Sch??tzt Ihre Daten vor anderen Programmen</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">Automatisches Update auf die neueste Version</td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
        <tr>
          <td class="virtue">Kostenloser technischer Support 24/7 </td>
          <td class="space"></td>
          <td class="itemb"><i class="wrong">???</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">???</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->


  <div class="footer wrapper">
   <div class="service clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dt>
      <dd><strong>Zufriedenheitsgarantie</strong> 60-Tage-Geld-zur??ck-Garantie</dd>
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
        *. Solche Promotionsprogramme k??nnen von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ank??ndigung ge??ndert werden.
      </dd>
      <dd>*Daten k??nnen sich system- oder computerabh??ngig ??ndern.</dd>
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
       <a href="https://www.iobit.com/buy.php?product=de-asc14sdpf2499&ref=de_asc143pcsdpf1905<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1910-de')" class="buybtn">Jetzt kaufen</a>
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
          Deals verf??gbar
        </div>
     </div>
   </div>
  </div>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
</body>
</html>