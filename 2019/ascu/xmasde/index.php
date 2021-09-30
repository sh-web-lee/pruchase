<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deascuxnov_p' . $date;
  $c_name_t='deascuxnov_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Sparen Sie bis zu 76% auf Advanced SystemCare Ultimate& erhalten Sie ein Geschenkpaket kostenlos!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>Deal des Tages<!-- ASCU bringt Ihnen einen “neuen” Computer --></h1>
        <p>Optimiert Windows, behebt Systemprobleme und liefert einen umfassenden Virenschutz</p>
      </div>
      <div class="left fl">
<!--        <h4>Weihnachtsverkauf</h4>-->
        <h2>76% Rabatt</h2>
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <div class="chart">
          <div class="clist one">
            <span class="cost"><strong>35,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">12 Dezember</span>
          </div>
          <div class="clist two">
            <span class="cost"><strong><big>29</big>,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="text">Nur <b class="pickNum">39</b>* Stück übrig, Beeilung!</span>
          </div>
          <div class="clist three">
            <span class="cost"><strong>39,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">14 Dezember</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>29</big>,99€</strong> <del>159,92€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-ascu143pcpfsdiu2999&ref=de_au143pcbundlepurchase202101<?php echo $refStr;?>&refs=de_purchase_ascu"
             onclick="ga('send', 'event', ' ascubuy', 'buy', 'ascupurchase1912-de')">
            JETZT KAUFEN
          </a>
        </div>
      </div>
    </div>
<!--    <span class="snow snow01"></span>-->
<!--    <span class="snow snow02"></span>-->
<!--    <span class="snow snow03"></span>-->
<!--    <span class="snow snow04"></span>-->
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- map start -->
  <div class="map">
    <div class="wrapper">
      <h2>
        Umfassender Schutz und stabile Performance für Ihren PC
      </h2>
      <p>Über 10 Millionen internationale Benutzer haben Advanced SystemCare Ultimate ausgewählt</p>
    </div>
  </div>
  <!-- map end -->

  <!-- benefits start -->
  <div class="benefits">
    <div class="wrapper clearfix">
      <div class="showcase">
        <div class="inner">
          <ul class="screenshot">
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-01.png')?>" alt=""/>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-02.png')?>" alt=""/>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-03.png')?>" alt=""/>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-04.png')?>" alt=""/>
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
          <dt><i class="benefits01"></i></dt>
          <dd>
            <h3>Große Virendatenbank</h3>
            <p>Erkennt und beseitigt mehr Sicherheitsbedrohungen für einen besseren Schutz.</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benefits02"></i></dt>
          <dd>
            <h3>Anti-Ransomware-Engine</h3>
            <p>Blockiert proaktiv potenzielle Ransomware-Angriffe &  schützt durchgehend Ihre Dateien und Ihr Geld</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benefits03"></i></dt>
          <dd>
            <h3>Sauberer & schneller PC</h3>
            <p>Entfernt Junk-Dateien und verbessert die Surfgeschwindigkeit mit nur einem Klick</p>
          </dd>
        </dl>
        <dl class="last">
          <dt><i class="benefits04"></i></dt>
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
  <!-- benefits end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper clearfix">
      <h2>ZAHLEN SIE EINEN RABATTPREIS UND ERHALTEN SIE DREI SUPER GESCHENKE! *</h2>
      <h3>ALLES WAS SIE FÜR IHREN PC WOLLEN, IST HIER!</h3>
      <dl class="iu">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-iu.png')?>" alt="IObit Uninstaller PRO"/>
        </dt>
        <dd>
          <h4>IObit Uninstaller PRO</h4>
          <strong>0€ </strong> <del>29,99€</del>
          <p>Löscht unerwünschte Windows-Programme, Plugins und Apps dauerhaft mit einem Klick!</p>
        </dd>
      </dl>
      <dl class="sd">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"/>
        </dt>
        <dd>
          <h4>Smart Defrag PRO</h4>
          <strong>0€ </strong> <del>29,99€</del>
          <p>Bietet die beste Defragmentierung und beschleunigt den Festplatten-Treiber auf das Maximum!</p>
        </dd>
      </dl>
      <dl class="pf">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"/>
        </dt>
        <dd>
          <h4>Protected Folder</h4>
          <strong>0€ </strong> <del>39,95€</del>
          <p>Schützt Ihre persönlichen Dateien und hält sie von böswilligen Angriffen fern!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- gifts end -->

  <!-- centbuy start -->
  <div class="centbuy price wrapper">
    <p><strong>29,99€</strong> <del>159,92€</del></p>
<!--    <p>WEIHNACHTSPREIS</p>-->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=de-ascu143pcpfsdiu2999&ref=de_au143pcbundlepurchase202101<?php echo $refStr;?>&refs=de_purchase_ascu"
       onclick="ga('send', 'event', ' ascubuy', 'buy', 'ascupurchase1912-de')">
      JETZT KAUFEN
    </a>
    <p class="pick">Nur noch <b class="pickNum">39</b> Stück übrig, Beeilung!</p>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Wir sind bemüht darum, alle zufriedenzustellen, </h2>
    <div class="reviewbox">
      <h3>wo auch immer Sie sind</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/computer.png')?>" alt="Computerbild"></li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="Rod Garnett">
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt="Dareen Lim">
        </li>
        <li class="four"><img src="<?php echo getStaticUrl('images/russell-peck.png')?>" alt="Russell Peck"></li>
      </ul>
      <div class="details">
        <div>
          <h4>Computerbild </h4>
          <p>
            „Mit „Advanced SystemCare Ultimate“ schützen, analysieren, reparieren und optimieren Sie Windows und Ihren PC. Die Tool-Sammlung sucht und beseitigt überflüssige Dateien, fehlerhafte Registry-Einträge und Malware-Infektionen. Darüber hinaus ist eine komplette Antivirensoftware enthalten.“ – Computerbild
          </p>
        </div>
        <div class="active">
          <h4>Rod Garnett</h4>
          <p>
            „Advanced SystemCare Ultimate ist die neue Lösung. Der große Gewinner! Advanced SystemCare Ultimate ist die neue Lösung. Der große Gewinner! Mein Computer ist immer auf dem aktuellsten Stand und läuft superschnell. Wie oft mit anderen Produkten, habe ich hier absolut keine Probleme.“ - Rod Garnett
          </p>
        </div>
        <div>
          <h4>Dareen Lim</h4>
          <p>
            „Ich empfehle Advanced SystemCare Ultimate als ihre Antiviren- und Systemoptimierungssoftware. Mithilfe der letzten Version von Advanced SystemCare Ultimate hatte ich keine Probleme mit dem System, der Malware etc. Die neue Version bietet mehrere Features, um meinen Laptop 5x schneller zu machen, als zuvor. “ - Dareen Lim
          </p>
        </div>
        <div>
          <h4>Russell Peck</h4>
          <p>
            „Eines der simpelsten und dennoch effektiven Programme, die ich zur Pflege aller meiner drei Computer benutze. Als ich die Inhalte von Advanced SystemCare Ultimate sah, wusste ich, dass ich es haben musste. Ich wurde nicht enttäuscht. Es ist eines der simpelsten und dennoch effektiven Programme, die ich zur Pflege aller meiner drei Computer benutze.“ - Russell Peck
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Redaktions-Tipp</h2>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <h2>Warum Advanced SystemCare Ultimate?</h2>
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
      <dd>Reinigung von versteckten und hartnäckigen Viren, Trojanern, Würmern, Spyware, Adware und verschiedener Malware mit nur einem Klick. Advanced SystemCare Ultimate bietet zudem einen always-on, automatisierten und proaktiven Schutz gegen alle Arten von Internet-Bedrohungen mit einer konstant aktualisierten Virendatenbank.</dd>
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

  <!-- bottombuy start -->
  <div class="bottombuy wrapper clearfix">
    <h2>Billiger als jeder Vergleich! Nicht verpassen!</h2>
    <div class="left fl"><img src="<?php echo getStaticUrl('images/bottombuy-db.png')?>" alt=""/></div>
    <div class="right price fr">
      <p><strong>29,99€</strong> <del>159,92€ </del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=de-ascu143pcpfsdiu2999&ref=de_au143pcbundlepurchase202101<?php echo $refStr;?>&refs=de_purchase_ascu"
         onclick="ga('send', 'event', ' ascubuy', 'buy', 'ascupurchase1912-de')">
        JETZT KAUFEN
      </a>
      <p>Nur heute, Beeilung!</p>
    </div>
  </div>
  <!-- bottombuy end -->

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
      <dd>*. Daten können sich system- oder computerabhängig ändern.</dd>
      <dd>*.Smart Defrag PRO /Protected Folder/IObit Uninstaller unterstützt 1 Jahr / 1 PC.</dd>
    </dl>
    <!-- copyright -->
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>