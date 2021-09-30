<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deimfmarpre' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 55;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24 * 2);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Zahlen Sie 0€, um IObit Malware Fighter 6 PRO für 30 Tage zu erhalten - IObit</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Raleway:500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <div class="clearfix">
        <div class="right fr">
          <h1>IObit Malware Fighter 6 PRO</h1>
          <p>Heute vorbestellen für komplette Cyber-Sicherheit</p>
          <div class="price">
            <div class="gift">
              Nur 
              <div class="countdown packsNum">
                <div class="list"><div class="scroll-tick">5</div></div>
                <div class="list right"><div class="scroll-tick">6</div></div>
              </div> 
              Deals übrig
            </div>
            <p class="people">Von <b class="buyNum">731,717</b> Personen vorbestellt</p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-imf63pc0&ref=de_imf6preorder1<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy1', 'buy', 'imfpurchase-preorderde');">
              Jetzt vorbestellen
            </a>
          </div>
        </div>
      </div>
      <ul class="point clearfix">
        <li>Kaufen Sie IObit Malware Fighter 6 PRO (3 PCs, 30 Tage)  für <b>0€</b>.</li>
        <li class="center">
          Ihnen werden Gebühren in Rechnun-g gestellt, wenn die 30-Tage-Testphase abläuft. Während dieser Periode können Sie jederzeit kündigen.
        </li>
        <li class="last">
          Sparen Sie nach 30 Tagen <b>63<small>%</small></b> auf 1-Jahresabo für <b>3 PCs</b> （Sonderpreis: 21,99€）
        </li>
      </ul>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <h2>IObit Malware Fighter 6 PRO, die richtige Cyber-Sicherheit, die Sie gerade suchen!</h2>
    <div class="clearfix">
      <div class="content fl">
        <p>
          Im Laufe der Jahre haben wir uns bemüht, den leistungsstarken Schutz gegen Malware, Ransomware, Adware, Spyware, Phishing und andere versteckte Sicherheitsbedrohungen zu verbessern. Der neue IObit Malware Fighter 6 ist so leistungsstark, dass Ihre persönlichen Dateien geschützt werden und die Hacker-Angriffe blockiert werden.
        </p>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" /></dt>
          <dd>
            <h4>Ordnerschutz <i class="all-icons new">Neu</i></h4>
            <p>
              SafeBox schützt Ihre angegebenen wichtigen Ordner vor unbefugtem Zugriff und
              neuesten Bedrohungen.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" /></dt>
          <dd>
            <h4>Bootzeit-Diskschutz <i class="all-icons new">Neu</i></h4>
            <p>
              Neuer MBR Guard schützt den PC gegen böswillige Angriffe, besonders
              Ransomware-Attacken wie WannaCry während des Bootvorgangs.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" /></dt>
          <dd>
            <h4>Anti-Ransomware-Maschine <i class="all-icons">Verbessert</i></h4>
            <p>
              Verhindert proaktiv alle Ransomware, die in Ihren PC einbrechen wollen. Sogar
              Ransomware wie Petya/GoldenEye können auch genau blockiert und entfernt werden.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" /></dt>
          <dd>
            <h4>Anti-Viren &amp; Anti-Malware <i class="all-icons">Verbessert</i></h4>
            <p>
              Doppelter Schutz durch die fortschrittliche Bitdefender Anti-Viren-Maschine &amp;
              IObit Anti-Malware-Maschine mit einer verbesserten Datenbank.
            </p>
          </dd>
        </dl>
      </div>
      <div class="computer fr"><img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" /></div>
    </div>
    <h3>Erfahren Sie mehr über das intelligentere und schnellere Sicherheitstool.</h3>
    <div class="price">
      <a class="buybtn big"
         href="https://www.iobit.com/buy.php?product=de-imf63pc0&ref=de_imf6preorder2<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy2', 'buy', 'imfpurchase-preorderde');">
        Jetzt vorbestellen - <b><big>0</big>€</b>
      </a>
      <div class="gift">
        Nur
        <div class="countdown packsNum">
          <div class="list"><div class="scroll-tick">5</div></div>
          <div class="list"><div class="scroll-tick">6</div></div>
        </div> 
        Deals übrig
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Mehr Verbesserungen in der neuen PRO-Version</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="title"></th>
            <th class="space"></th>
            <th class="itema"><span>IObit Malware Fighter 5 PRO</span></th>
            <th class="space"></th>
            <th class="itemb"><span>IObit Malware Fighter 6 PRO</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="title">Automatische Aktualisierung</td>
            <td class="space"></td>
            <td class="itema">Privileg des autom. Updates der Datenbank und Programme.</td>
            <td class="space"></td>
            <td class="itemb"><b>Genauere</b> Erkennung</td>
          </tr>
          <tr>
            <td class="title">USB-Wächter</td>
            <td class="space"></td>
            <td class="itema">Scannt und verhindert Vireninfektion durch USB-Datenträger.</td>
            <td class="space"></td>
            <td class="itemb"><b>130%*</b> schnellerer Scan</td>
          </tr>
          <tr>
            <td class="title">Anti-Verfolgung</td>
            <td class="space"></td>
            <td class="itema">Autom. Reinigung der bösartigen Tracking-Cookies beim <span>Beenden des Browsers.</span></td>
            <td class="space"></td>
            <td class="itemb"><b>Über 15.000</b> Bedrohung-Beispiele hinzugefügt</td>
          </tr>
          <tr>
            <td class="title">Kamera-Wächter</td>
            <td class="space"></td>
            <td class="itema">Schützt Ihre Kamera gegen unbefugten Zugriff.</td>
            <td class="space"></td>
            <td class="itemb"><b>115%*</b> schnellerer Scan. <b>Genauere</b> Erkennung</td>
          </tr>
        </tbody>
      </table>
      <div class="price">
        <h3>Verpassen Sie nicht Ihre Chance!</h3>
        <p>Holen Sie sich das exklusive Angebot, um Ihren PC umfassend zu schützen.</p>
        <a class="buybtn big"
           href="https://www.iobit.com/buy.php?product=de-imf63pc0&ref=de_imf6preorder3<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy3', 'buy', 'imfpurchase-preorderde');">
          Jetzt vorbestellen - <b><big>0</big>€</b>  
        </a>
        <div class="gift">
          Nur
          <div class="countdown packsNum">
            <div class="list"><div class="scroll-tick">5</div></div>
            <div class="list"><div class="scroll-tick">6</div></div>
          </div> 
          Deals übrig
        </div>
      </div>
    </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Weitere User- und Medien-Bewertungen über die neue Version</h2>
    <div class="clearfix">
      <dl class="left">
        <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"/></dt>
        <dd>
          <h3>Gelu Batir</h3>
          <p>
            Ih bin sehr zufrieden mit Ihrem Produkt IObit Maleware Fighter. Weshalb ich dieses Produkt verwendet habe ist, dass ich mehrere Probleme mit bösartigen Interferenzen hatte, ich konnte keinen ganzen Film oder kein Konzert anschauen, die ich mag. Dank Ihrem Produkt ist jetzt jede Operation klar, sicher und gut geschützt. Es scannt meinen Laptop, ohne seine Leistung zu beeinträchtigen, während ich auch zwei meiner Freunde dieses Produkt empfohlen habe. Ich danke Ihnen noch einmal!  
          </p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"/></dt>
        <dd>
          <h3>Software.Informer</h3>
          <p>
            Das Programm verfügt über zwei Antiviren-Maschinen von IObit und Bitdefender und scheint wirksam gegen Malware, die nicht von anderen ähnlichen Tools erkannt werden können. Deswegen es kann zusammen mit Ihren Antivirenprogrammen arbeiten. Es kann eine breite Reihe von Spyware, Ransomware, Adware, Trojaner, Würmer, Keylogger und Bots erkennen.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"/></dt>
        <dd>
          <h3>David Cassidy</h3>
          <p>
            Danke, dass Sie Malware Fighter V6 herausgebracht haben, es ist ein großartiges Update, das Sie für Ihre Benutzer erstellt haben. Es ist viel schneller beim Scannen und einfach zu bedienen. Für Leute, die wirklich ein gutes Malware- und Antiviren-Programm wollen, ist IObit Malware Fighter preiswert und die best Wahl. Ich würde empfehlen, dass Sie den Anderen vergessen und das Beste bekommen, was IObit Malware Fighter ist. 
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Weltweite Auszeichnungen</h2>
      <p>Wir sind von den weltweit führenden Medien anerkannt und liefern den richtigen PC-Schutz.</p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd>
            <h3>Geld-zurück-Garantie</h3>
            <p>Wenn Sie innerhalb von 60 Tagen nicht zufrieden sind, bekommen Sie Ihr Geld zurück.</p>
          </dd>
        </dl>
        <dl class="center">
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd>
            <h3>Zahlungssicherheit</h3>
            <p>IObit akzeptiert mehrere sichere Zahlungsmethoden.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
          <dd>
            <h3>Schnelle Aktivierung</h3>
            <p>Sie erhalten bald einen Aktivierungscode nach dem Kauf.</p>
          </dd>
        </dl>
      </div>
      <dl class="annotation">
        <dt>Notiz: </dt>
        <dd>*Daten können auf der Grundlage verschiedener Systeme oder Computer geändert werden.</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/imfbox.png')?>" alt="">
      <div class="content fl">
        <h2>IObit Malware Fighter 6 Pro jetzt <b>kostenlos!</b></h2>
        <p>Verhindert Ransomware, Malware, Adware und andere <span>bösartige Angriffe.</span></p>
      </div>
      <div class="price fl">
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=de-imf63pc0&ref=de_imf6preorder4<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=de_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy4', 'buy', 'imfpurchase-preorderde');">
          Jetzt vorbestellen - <b><big>0</big>€</b>
        </a>
        <p>1 Jahr/ <b>3 PCs</b> vorher: 59,95€</p>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>