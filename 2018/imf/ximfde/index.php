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
  $cName='deimfpre'.$date;
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

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie 83% auf IObit Malware Fighter Pro und erhalten Sie zusätzlich zwei hilfreiche Programme kostenlos.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
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
        <h1>Weihnachtssale</h1>
        <p class="best">Beste Chance, möglichst viel zu sparen – einmal pro Jahr!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
            <div class="hint">
              <dl class="pop-bg">
                <dt>Protected Folder       <span><b>0€ </b>  (1 Jahr / 1 PC)</span></dt>
                <dd>Besserer Schutz für Ihre wichtigen Dateien!</dd>
                <dt>AMC Security PRO     <span><b>0€ </b>  (1 Jahr / 1 Gerät)</span></dt>
                <dd>Hält Ihr Android-Handy schnell, sicher und virenfrei! </dd>
              </dl>
            </div>
          </div>
          <div class="right fr">
            <h2> Komplette Cyber-Sicherheit für Sie und Ihre Familie</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Plätze übrig!   
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Nur jetzt!   <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
              </div>
              <p><strong>19<big>,</big></strong><span>99€ <del>119,89€</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-imf6amcpf1999&ref=de_imf6rightcorner<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1812rc-de')">
                 Jetzt aktivieren
              </a>
              <p class="year">  1 Jahresabo für 3 PCs</p>
            </div>
          </div>
        </div>
      </div>
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
        <h2>Erhalten Sie volle Cyber-Sicherheit, um sich vor böswilligen Hackern zu schützen </h2>
        <p class="over">
          Über 5.500.000 Benutzer verwenden IObit Malware Fighter Pro für ihre Online-Sicherheit zum Schutz vor Viren, Ransomware, Spyware, Trojanern, Adware, Phishing und anderen frustrierenden Malware. 
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/imf-screen.png')?>" alt="IObit Malware Fighter PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Umfassender Echtzeitschutz <b>Verbessert</b></h3>
                <p>
                 Doppelter Schutz durch erweiterte Bitdefender Anti-Virus-Engine und IObit Anti-Malware-Engine mit einer größeren Datenbank.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Systemstartschutz <b class="sign">Neu</b></h3>
                <p>Schützt Ihren PC gegen bösartige Angriffen, insbesondere Ransomware-Angriffen während des Systemstarts.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Blockiert Ransomware-Angriffe <b>Verbessert</b></h3>
                <p>Die Anti-Ransomware-Engine verhindert proaktiv Ransomware, die versucht, in Ihren PC einzubrechen, wie Petya / GoldenEye.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Größere Datenbank <b>Verbessert</b></h3>
                <p>Blockiert und entfernt automatisch über 200 Millionen Bedrohungen in Echtzeit und löscht schädliche Tracking-Daten.</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Die Pro-Version bietet vollen, intelligenteren & schnelleren Online-Schut </h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/imf-small-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Plätze übrig!
            </p>
          </div>
          <p><strong>19<big>,</big></strong> <span>99€<del>119,89€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-imf6amcpf1999&ref=de_imf6rightcorner<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1812rc-de')">
            Jetzt aktivieren
          </a>
          <p class="year"> 1 Jahresabo für 3 PCs</p>
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
              <th class="itema">IObit Malware Fighter <br>Free</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>IObit Malware Fighter <b>Pro</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">Basic</td>
              <td class="itemb">Schutz vor Malware & Virus</td>
              <td class="itemc">Bitdefender Anti-Virus-Engine </td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Anti-Ransomware-Schutz</td>
              <td class="itemc">Anti-Ransomware-Engine</td>
            </tr>
            <tr>
              <td class="itema">Basic</td>
              <td class="itemb">Echtzeitschutz</td>
              <td class="itemc"> Umfassend</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Systemanlauf-Wächter</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Kamera-Wächter</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Schutz für wichtige Ordner</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Autom. Reinigung der Spuren</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">USB-Speicher-Wächter</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">RAM-Wächter </td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">Automatische Updates  </td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>NE VOUS EN MANQUEZ PAS !</h3>
        <h2>Erhalten Sie exklusiven 83% Rabatt, um Sie und Ihre Familie umfassend zu schützen.</h2>
        <div class="price">
          <p><strong>19<big>,</big></strong> <span>99 €<del>119,89€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-imf6amcpf1999&ref=de_imf6rightcorner<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1812rc-de')">
            Jetzt aktivieren
          </a>
          <p id="footdown" class="countdown">Nur jetzt! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- review start -->
    <div class="review">
      <div class="wrapper clearfix">
        <dl class="gelu-batir">
          <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
          <dd>
            <strong>Bob Bassett</strong>
            <p>
              Um die Sicherheit und Leistung aufrechtzuerhalten, benötigten wir mehrere Stunden pro Woche. Aber mit IObit Malware Fighter Pro und Advanced System Care Pro hat man alles in einem. Jetzt nimmt es uns nur noch wenige Minuten alle paar Tage, um dieselbe Arbeit mit viel mehr Vertrauen zu erledigen. Seitdem wir ihre Produkte nutzen, haben wir keine Probleme mehr.            
            </p>
            <p class="star"><img src="<?php echo getStaticUrl('images/star.png')?>" alt=""/></p>
          </dd>
        </dl>
        <dl class="david-cassidy">
          <dt><img src="<?php echo getStaticUrl('images/software.png')?>" alt="David Cassidy"></dt>
          <dd>
            <strong>Software.Informer</strong>
            <p>
              Das Programm verfügt über zwei Antiviren-Maschinen von IObit und Bitdefender und scheint wirksam gegen Malware, die nicht von anderen ähnlichen Tools erkannt werden können. Und es kann zusammen mit Ihren Antivirenprogrammen arbeiten. Es kann eine breite Reihe von Spyware, Ransomware, Adware, Trojaner, Würmer, Keylogger und Bots erkennen.
            </p>
            <p class="star"><img src="<?php echo getStaticUrl('images/star.png')?>" alt=""/></p>
          </dd>
        </dl>
        <dl class="david-cassidy">
          <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></dt>
          <dd>
            <strong>David Cassidy</strong>
            <p>
              Danke, dass Sie Malware Fighter V6 herausgebracht haben, es ist ein großartiges Update, das Sie für Ihre Benutzer erstellt haben. Es ist viel schneller beim Scannen und einfach zu bedienen. Für Leute, die wirklich ein gutes Malware- und Antiviren-Programm wollen, ist IObit Malware Fighter preiswert und die beste Wahl. Ich würde empfehlen, dass alle Leute die beste Software „IObit Malware Fighter“ benutzen.
            </p>
            <p class="star"><img src="<?php echo getStaticUrl('images/star.png')?>" alt=""/></p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Von den Medien empfohlen und ausgezeichnet</h2>
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
              <p>Die Pro-Version schützt Ihren Computer in Echtzeit mit Bitdefender-Antivirus-Engine, Anti-Ransomware-Engine und Anti-Malware-Engine</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Wir akzeptieren </h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Hinweis:</dt>
            <dd>Daten können sich system- oder computerabhängig ändern.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten </p>
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
    var imgSrc = "<?php echo getStaticUrl('images/imf-mask-box.png')?>";
    var _href = "http://www.iobit.com/buy.php?product=de-imf6amcpf1899&ref=de_imf6rightcornerpopup<?php echo $refStr;?>&refs=de_purchase_imf&tw=-8";
    var _ga = "ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1812rcpop-de')  ";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>