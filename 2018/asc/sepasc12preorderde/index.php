<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Bezahlen Sie 0€ um ein neues Advanced SystemCare PRO vorzubestellen</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Der weltweite Vorverkauf beginnt</h1>
        <h3>Beeilung! Nur 500 Exemplare erhältlich, <span class="soldNum">453</span> wurden bereits verkauft</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO"/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                Jetzt: <del>59,99€</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, <b class="reduceGift"><span class="packsNum">**</span></b> Plätze übrig!
                </li>
                <li id="bandown" class="countdown">Erwarteter Ausverkauf in: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=de-asc12preorder&ref=de_asc12preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorder-de');"
                 data-text="Jetzt vorbestellen">
                <span>Jetzt vorbestellen</span>
              </a>
              <h5>1 Jahresabo / 3 PCs</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- flow start -->
    <div class="flow wrapper clearfix">
      <p>58% Rabatt auf den Originalpreis 30 Tage nach der Vorbestellung</p>
      <h2>Heute für 0€ vorbestellen</h2>
      <p>Innerhalb von 30 Tagen gratis abbestellen</p>
    </div>
    <!-- flow end -->

    <!-- intro start -->
    <div class="intro wrapper">
      <h2><b>3 Gründe, </b> Advanced SystemCare 12 PRO vorzubestellen</h2>
      <h3 class="steps-title"><b>1</b> Neue Features, die es wert sind</h3>
      <div class="panel">
        <img src="<?php echo getStaticUrl('images/screen.png')?>" alt=""/>
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/intro_01.png')?>" alt=""/></dt>
          <dd>
            <h4>Privatsphärenschutz <b>Neu</b></h4>
            <h5>Blockiert heimliche Zugriffe auf Ihre Dateien und Fotos</h5>
            <p>
              Es informiert Sie, falls ein heimlicher Zugriff auf Ihre privaten Dateien und Fotos geschieht und erlaubt es ihnen, diesen zu blockieren.
            </p>
          </dd>
        </dl>
        <dl class="two">
          <dt><img src="<?php echo getStaticUrl('images/intro_02.png')?>" alt=""/></dt>
          <dd>
            <h4>Beseitigung digitaler Fingerabdrücke <b>Neu</b></h4>
            <h5>Niemand kann nachvollziehen, was Sie Online machen</h5>
            <p>
              Verdecke hinterlassene digitale Spuren automatisch. Verhindere, dass Tracking-Firmen Ihre Nase in das stecken,  was Sie lesen, ansehen und kaufen.
            </p>
          </dd>
        </dl>
        <dl class="three">
          <dt><img src="<?php echo getStaticUrl('images/intro_03.png')?>" alt=""/></dt>
          <dd>
            <h4>Anti-Kryptowährungsmining <b>Neu</b></h4>
            <h5>Stoppt unerwartetes Abstürzen, Computerüberhitzen und Herunterfahren</h5>
            <p>
              Verhindert, dass schädliche Seiten, die Sie besuchen, Ihren Computer zum Kryptowährungsmining nutzen, wodurch Browser-Crashs, Computerüberhitzungen und plötzliche Systemabstürze entstehen.
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h2 class="steps-title"><b>2</b> Bessere Erlebnisse, dank Verbesserungen</h2>
        <ul class="clearfix">
          <li><img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt=""/></li>
          <li><img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt=""/></li>
          <li><img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt=""/></li>
        </ul>
        <div class="note">
          <span><i>□</i> Ihre aktuelle Version</span>
          <span class="blue"><i>■</i> Advanced SystemCare 12 PRO</span>
        </div>
        <p>*Wir haben Advanced SystemCare 12 PRO in unserem internen Testlabor untersucht. Ihre Ergebnisse können abweichen.</p>
      </div>
    </div>
    <!-- feature end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2 class="steps-title"><b>3</b> Die perfekten Lösungen für Ihre frustrierenden PC-Probleme</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema"><span class="cry">Probleme</span></th>
              <th class="itemb"></th>
              <th class="itemc"><span class="smile">Lösungen</span></th>
            </tr>
          </thead>
          <tbody>
            <tr class="first">
              <td class="itema">
                <p>Benachrichtigungen, dass der Festplattenspeicher voll ist</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Autoscans, um Junk-Dateien zu entfernen, für mehr Festplattenspeicher</p>
                <b><i class="all-icons">■</i> Exklusives Pro Feature</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Das System startet und läuft langsam</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Automatisches Arbeitsspeicherfreisetzen, um den PC um bis zu 200% zu beschleunigen, wenn Ihr Computer langsam wird. </p>
                <b><i class="all-icons">■</i> Exklusives Pro Feature</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Langsame Downloadraten, langsames Websurfen, Online Spielen und YouTube Videos schauen.</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Optimierte Browsereinstellungen, um die <br>Internetverbindung um bis zu 300% zu beschleunigen.</p>
                <b><i class="all-icons">■</i> Exklusives Pro Feature</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Plötzliches Abstürzen und Einfrieren, wenn Sie im Internet surfen</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Säubern und Reparieren der Registry, um die Systemstabilität und Sicherheit zu verbessern</p>
                <b><i class="all-icons">■</i> Exklusives Pro Feature</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Werbungen für Dinge, nach denen Sie gesucht haben, verfolgen Sie</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Auto-Blockierung von Werbung und Verwischung Ihrer Onlinespuren, um Verfolgungen durch Hacker zu verhindern.</p>
                <b><i class="all-icons">■</i> Exklusives Pro Feature</b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Bestelle Advanced SystemCare 12 PRO heute für <b>0€</b> vor!</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=de-asc12preorder&ref=de_asc12preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorder-de');"
           data-text="Jetzt vorbestellen">
          <span>Jetzt vorbestellen</span>
        </a>
        <ul class="price">
          <li><span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, <b class="reduceGift"><span class="packsNum">**</span></b> Plätze übrig!</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="CHIP"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>
                "Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte. Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.
              </p>
              <cite>CHIP</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>
                „Ich machte es wie viele andere auch. Ich startete mit der Testversion und kaufte dann anschließend die Vollversion. Es hält meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie enttäuscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. Meiner Meinung nach ist der Support ein wichtiger Aspekt, wenn ich mich für ein Produkt entscheide. ASC gewinnt bei Produkt und Support.“
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>
                „Wie die meisten Menschen bin ich kein Computerexperte. Ich weiß nicht wie viele Programme, die alle von sich behaupten das Beste zu sein, ich über die letzten Jahre ausprobiert habe, ohne auch nur ansatzweise an meinen Schutz von Advanced SystemCare heranzukommen. Seit ich dieses großartige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als übertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus. Vielen Dank an Euch alle, dass Ihr mein Leben so viel einfacher gemacht habt.“
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>
                „Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer läuft so viel besser und schneller, nachdem ich ASC11 downgeloadet habe. Es hat unnötige und doppelte Dateien, leere Ordner gesäubert und ich habe es zum Vernichten von Dateien genutzt. Es säuberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.“
              </p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>
                „Als Computer-Reparatur-Techniker finde ich, dass man durch das Herunterladen und Scannen mit ASC die häufigsten Probleme lösen kann. Nach der Reparatur empfehle ich allen Kunden ein Pro-Paket zu kaufen. Wer braucht einen Techniker? Wenn Sie die Macht des Advanced SystemCare Pro haben, das mit Ihrem System 24*7 Stunden arbeiten kann. Das ist das beste Produkt, das ein Heimanwender kaufen kann. Das Produkt erleichtert meinen Job, vielen Dank dafür.“
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Weltweite Auszeichnungen</h2>
        <p>
          In den vergangenen zehn Jahren von diesen erstklassigen Medien vertraut und ausgezeichnet wurden.
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Zufriedenheitsgarantie</h4>
              <p>60-Tage-Geld-zurück-Garantie</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
            <dd>
              <h4>Zahlungssicherheit</h4>
              <p>Ihre Zahlung ist 100% sicher</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt=""/></dt>
            <dd>
              <h4>Schnelle Aktivierung</h4>
              <p>Kurz nach dem Kauf erhalten Sie bald einen Aktivierungscode.</p>
            </dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dd>
              *Am Ende der 30 Tage Probeversion werden Ihrer Kreditkarte oder Ihrem PayPal-Konto automatisch 24,99€ abgerechnet. Der 58% Rabatt auf den Originalpreis 59,99€ ist ein Bonus nur für Vorbesteller!
            </dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt=""/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter , <b class="reduceGift"><span class="packsNum">**</span></b> Plätze übrig!
            </li>
            <li id="floatdown" class="countdown">Erwarteter Ausverkauf in: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <a class="buybtn fr" 
           href="https://www.iobit.com/buy.php?product=de-asc12preorder&ref=de_asc12preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorder-de');"
           data-text="Jetzt vorbestellen">
          <span>Jetzt vorbestellen</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->

  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>