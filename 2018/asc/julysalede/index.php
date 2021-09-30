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

  if(!empty($_GET['reduceNum'])&&intval($_GET['reduceNum'])){
    $reduceNum=intval($_GET['reduceNum']);
  }else{
    $reduceNum=70800000;
  }
  $buyNumReTime=empty($_GET['reTime'])?20:($_GET['reTime']);
  $buyNum = ceil(microtime_float()*1000/(1000*$buyNumReTime))-$reduceNum;
  $buyNum = number_format($buyNum);

if (in_array($_GET['st'], array('asc_c1new', 'asc_c1new1', 'asc_c6', 'asc_c2', 'asc_c3', 'asc_feature', 'asc_c7',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s2', 'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_freetip', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie 80% auf Advanced SystemCare & erhalten zwei zusätzliche Tools kostenlos!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600i,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script>
  function strFormat(str) {
    return str.replace(/,/g, '.');
  }
  $(function(){
    $('.buyNum').html(strFormat($('.buyNum').html()));
  });
  function strFormat(str){
    return str.replace(/,/g, '.');
  }
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        $('.buyNum').html(strFormat(packs));
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 20000);
</script>
</head>

<body>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo fl" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>Summer Sale</h1>
      <p>Spare <b>80%</b> auf ASC PRO und erhalte extra zwei nützliche Produkte Gratis!</p>
      <div class="panel clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt=""/></div>
        <div class="price fl">
          <h2>Advanced SystemCare 11 Pro</h2>
          <ul>
            <li><i class="all-icons"></i> <b>IObit Uninstaller</b> <span>GRATIS</span></li>
            <li><i class="all-icons"></i> <b>Protected Folder</b> <span>GRATIS</span></li>
          </ul>
          <p><strong>24<small>,99€</small></strong> <del>123,84€</del></p>
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=de-asc11iupf2499&ref=de_asc113pciupf1807<?php echo $refStr;?>&refs=de_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase201807-de')">
            JETZT KAUFEN
          </a>
          <p><i class="all-icons"></i> Von <b class="buyNum"><?php echo $buyNum; ?></b> Personen gekauft</p>
        </div>
      </div>
      
    </div>
  </div>
  <!-- banner end -->

  <!-- payments start -->
  <div class="payments wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- payments end -->

  <!-- cause start -->
  <div class="cause">
    <div class="wrapper">
      <h2>Warum wählen über 250 Millionen Nutzer Advanced SystemCare?</h2>
      <p>
        Denn wird dein PC bis zu 300% schneller als bisher laufen, Advanced SystemCare überwacht RAM, CPU & Festplatten in Echtzeit, <span>analysiert, repariertund optimiert Windows und deinen PC. Es schützt deinen PC vor bösartigen</span>Angriffe mit dem System-Verstärken.
      </p>
    </div>
  </div>
  <!-- cause end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Hilfreiche Features, die sich problemlos an deine Bedürfnisse anpassen</h2>
    <p>1-Jahres-Abonnement für 3 PCs</p>
    <div class="clearfix panel">
      <div class="list one">
        <img class="fl" src="<?php echo getStaticUrl('images/list01.png')?>" alt="" />
        <dl class="fl">
          <dt>Keine lästigen Anzeigen und <br>sicheres Surfen <b>VERBESSERT</b></dt>
          <dd>Entfernt verschiedene Onlineanzeigen und blockiert mehr <span>bösartige Webseiten.</span></dd>
        </dl>
      </div>
      <div class="list two">
        <img class="fl" src="<?php echo getStaticUrl('images/list02.png')?>" alt="" />
        <dl class="fl">
          <dt>Automatische Reinigung <b>VERBESSERT</b></dt>
          <dd>Scannt und bereinigt Restdateien automatisch, um <span>den PC schneller zu machen.</span></dd>
        </dl>
      </div>
      <div class="list three">
        <img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" />
        <dl>
          <dt>FaceID <b class="nue">NEU</b></dt>
          <dd>Macht Fotos von Eindringlingen, <span>die deine Privatsphäre ausspionieren wollen.</span></dd>
        </dl>
      </div>
      <div class="list four">
        <img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" />
        <dl>
          <dt>Mit Windows 10 kompatibel <br><b>VERBESSERT</b></dt>
          <dd>Entfernt Windows 10 Erweiterungen <span>vom Microsoft Edge</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <h2>Das kostenfreie Geschenkpaket nur in diesem Sommer 2018!</h2>
      <div class="clearfix">
        <div class="list">
          <img src="<?php echo getStaticUrl('images/gift_iu.png')?>" alt="IObit Uninstaller PRO" />
          <div class="text">
            <h3>IObit Uninstaller PRO</h3>
            <img src="<?php echo getStaticUrl('images/price-small.png')?>" alt="0€"/> <del>23,90€</del>
            <ul>
              <li><i class="all-icons"></i><span>Schnellere Entfernung von Plug-ins</span></li>
              <li><i class="all-icons"></i><span>Starke Deinstallation von unerwünschten Programmen</span></li>
            </ul>
          </div>
        </div>
        <div class="list pf">
          <img src="<?php echo getStaticUrl('images/gift_pf.png')?>" alt="Smart Defrag 5 PRO" />
          <div class="text">
            <h3>Protected Folder</h3>
            <img src="<?php echo getStaticUrl('images/price-small.png')?>" alt="0€"/> <del>39,95€</del>
            <ul>
              <li><i class="all-icons"></i><span>Keine Sorgen um Datendiebstahl</span></li>
              <li><i class="all-icons"></i><span>Deine wichtigen und persönlichen Dateien schützen</span></li>
            </ul>
          </div>
        </div>
      </div>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=de-asc11iupf2499&ref=de_asc113pciupf1807<?php echo $refStr;?>&refs=de_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase201807-de')">
        JETZT KAUFEN
      </a>
    </div>
  </div>
  <!-- donation end -->

  <!-- describe start -->
  <div class="describe">
    <div class="wrapper">
      <h2>Advanced SystemCare bemüht sich, deine Probleme zu lösen:</h2>
      <ul>
        <li><i class="all-icons"></i>Der Systemstart des PCs dauerte sehr lange</li>
        <li><i class="all-icons"></i>Dein PC hatte ständig Verzögerungen/ist oftmals eingefroren</li>
        <li><i class="all-icons"></i>Du willst die PC-Performance auf das höchste Level bringen</li>
        <li><i class="all-icons"></i>Du willst verhindern, dass dein PC im Laufe der Zeit Performance verliert</li>
        <li><i class="all-icons"></i>Du willst deine persönlichen Daten vor Unbekannten schützen</li>
      </ul>
    </div>
  </div>
  <!-- describe end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Media-Auszeichungen</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review">
      <div class="content">
        <dl class="active">
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>„Das Produkt an sich ist genau so großartig wie der dazugehörige Support.“</h4></dd>
          <dd>
            „Ich machte es wie viele andere auch. Ich startete mit der Testversion und kaufte dann anschließend die Vollversion. Es hält meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie enttäuscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. Meiner Meinung nach ist der Support ein wichtiger Aspekt, wenn ich mich für ein Produkt entscheide. ASC gewinnt bei Produkt und Support.“
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>„Advanced SystemCare Pro ist das beste Programm, das ich seit Jahren getestet habe.“</h4></dd>
          <dd>
            „Wie die meisten Menschen bin ich kein Computerexperte. Ich weiß nicht wie viele Programme, die alle von sich behaupten das Beste zu sein, ich über die letzten Jahre ausprobiert habe, ohne auch nur ansatzweise an meinen Schutz von Advanced SystemCare heranzukommen. Seit ich dieses großartige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als übertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus. Vielen Dank an Euch alle, dass Ihr mein Leben so viel einfacher gemacht habt.“
          </dd>
        </dl>
        <dl>
          <dt><h3>Media Review</h3></dt>
          <dd><h4>„Advanced SystemCare Pro beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte.“</h4></dd>
          <dd>
            „Zusätzlich zu den Features der Free-Version bietet Advanced SystemCare in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.“
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd>
            <h4>
              „Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein.“
            </h4>
          </dd>
          <dd>
            „Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer läuft so viel besser und schneller, nachdem ich ASC11 downgeloadet habe. Es hat unnötige und doppelte Dateien, leere Ordner gesäubert und ich habe es zum Vernichten von Dateien genutzt. Es säuberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.“
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>„Das Programm säubert &amp; beschleunigt den PC sehr zuverlässig und sicher.“</h4></dd>
          <dd>
            „Was die Funktionalität &amp; Leistung vom neuen Advanced SystemCare 11 angeht, kann ich hier an diesem Punkt nur eine ganz klare Empfehlung aussprechen. Das Programm säubert &amp; beschleunigt den PC sehr zuverlässig und sicher. Selbst PC´s älterer Generationen werden um ein Vielfaches beschleunigt und zugleich perfekt optimiert. Damit gehören langsame und zugemüllte Computer der Vergangenheit an. Wer seinen PC optimal nutzen möchte (jetzt und in Zukunft), sollte sich das neue IObit Advanced SystemCare 11 am besten in der Pro-Version anschaffen und die Freude an einem sehr gut gewartetem PC genießen.“
          </dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active">
          <img src="<?php echo getStaticUrl('images/bruce-ramsay.jpg')?>" alt="">
          Bruce Ramsay
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/hank-ewert.jpg')?>" alt="">
          Hank Ewert
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip">
          Chip
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/loretta-harnarine.jpg')?>" alt="">
          Loretta Harnarine
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/markus-thomas-geldermann.jpg')?>" alt="">
          Markus Thomas Geldermann
        </li>
      </ul>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Welche Vorteile bietet dir die PRO Edition?</th>
            <th class="space"></th>
            <th class="itemb">Advanced SystemCare <b>FREE</b></th>
            <th class="space"></th>
            <th class="itema"><span>Advanced SystemCare <b>PRO</b></span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Grundlegende System-Reinigung, Reparatur und Optimierung</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Erwischt Eindringlinge automatisch mit der GesichtsID <sup class="neu">Neu</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">
              <span>Erhöht die Internetgeschwindigkeit um bis zu 300% mit dem Internet Booster</span>
              <sup>Verbessert</sup>
            </td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Bis zu 200% schnellerer Systemstart <sup>Verbessert</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Bereinigt ansammelte Registry für ein stabiles System <sup>Verbessert</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Neue Festplattenoptimierungsengine maximiert die PC Performance <sup class="neu">Neu</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">
              <span>Repariert die Systemschwachstellen mit 1 Klick um Hacker zu verhindern</span>
              <sup>Verbessert</sup>
            </td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Entfernt Infektionen und verhindert verschiedene Bedrohungen <sup>Verbessert</sup></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue"><span>Automatische Beseitigung von privaten Spuren im Internet mit der Anti Browser Verfolgung</span></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Automatische RAM-Bereinigung mit der Echtzeit Optimierung</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Automatisches Update auf die neueste Version</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Kostenloser technischer Support 24/7</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
            <td class="virtue">Ünterstützung für 3 PCs</td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
  </div>
  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <h2>80% Rabatt</h2>
      <h3>auf ASC PRO und erhalte ein besonderes Geschenkpaket (im Wert von 63,85€) Gratis!</h3>
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/foot-ascbox.png')?>" alt="" /></div>
      <div class="price fl">
        <p><img src="<?php echo getStaticUrl('images/price.png')?>" alt="24,99€"/> <del>123,84€</del></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=de-asc11iupf2499&ref=de_asc113pciupf1807<?php echo $refStr;?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase201807-de')">
          JETZT KAUFEN
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy start -->

  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <dl class="annotation">
        <dt>Notiz:</dt>
        <dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
        </dd>
        <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- container end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>