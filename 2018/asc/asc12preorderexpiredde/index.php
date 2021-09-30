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

$params=json_decode(base64_decode($_GET['data']));
$reg=empty($params->reg)?1113:$params->reg;
$junk=round((empty($params->junk)?9762:(($params->junk)/1024)),2);
$startUp=empty($params->startup)?19:$params->startup;
$internet=empty($params->internet)?21:$params->internet;
$privacy=empty($params->privacy)?2014:$params->privacy;
$ad=empty($params->ad)?0:$params->ad;

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Willkommen zurück und bestellen Sie für 0€ Advanced SystemCare 12 PRO vor.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
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
        <h1>Willkommen zurück & machen Sie beim 0€ weltweiten Vorverkauf</h1>
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
                 href="https://www.iobit.com/buy.php?product=de-asc12preorder&ref=de_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-de');"
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

    <!-- intro-part01 start -->
    <div class="intro intro-part01">
      <div class="wrapper">
        <h3>Lass uns zurückblicken:</h3>
        <h2>Wie geht es Ihrem PC mit Advanced SystemCare 11 PRO?</h2>
        <div class="event">
          <!-- bight -->
          <div class="bight"></div>
          <!-- optimized for faster PC -->
          <dl class="optimized clearfix">
            <dd class="fr">
              <p>
                <strong class="startupNum"><?php echo $startUp;?></strong> Systemstarteinträge und <br><strong class="browserNum"><?php echo $internet;?></strong> Browsereinstellungen <br>optimiert für einen schnelleren PC
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon01.png" alt=""></dt>
          </dl>
          <!-- during online surfing  -->
          <dl class="online clearfix">
            <dd>
              <p>
                <strong class="personalNum"><?php echo $privacy;?></strong> persönliche Spuren und <br><strong class="popupNum"><?php echo $ad;?></strong> Pop-Up Werbung während <br>des online Surfens entfernt
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon02.png" alt=""></dt>
          </dl>
          <!-- to free up disk  -->
          <dl class="disk">
            <dd>
              <p>
                <strong class="bytesNum"><?php echo $junk;?></strong> MB Junk Dateien und <br><strong class="regNum"><?php echo $reg;?></strong> Registry-Einträge entfernt, <br>um Speicher zu befreien
              </P>
              <span></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon03.png" alt=""></dt>
          </dl>
          <!-- Better PC Performance -->
          <p class="better">Bessere PC Performance</p>
        </div>
      </div>
    </div>
    <!-- intro-part01 end -->

    <!-- intro-part02 start -->
    <div class="intro intro-part02">
      <div class="wrapper clearfix">
        <h3>Von jetzt an:</h3>
        <h2>Erforsche Funktionen, die es nur im neuen Advanced SystemCare 12 gibt</h2>
        <img class="intro-pc fl" src="<?php echo $pResUrl;?>images/intro-pc.jpg" alt="">
        <div class="right-message fr">
          <!-- Privacy Shield -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon04.png" alt=""></dt>
            <dd>
              <h4>Privatsphärenschutz <span>exklusiv</span></h4>
              <p>Sensible Daten bleiben vertrauensunwürdigen Programmen verborgen.</p>
            </dd>
          </dl>
          <!-- Digital Fingerprint Protection -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon05.png" alt=""></dt>
            <dd>
              <h4>Beseitigung digitaler Fingerabdrücke <span>exklusiv</span></h4>
              <p>Keine Hacker können Ihre persönlichen Informationen verfolgen und in diese eindringen.</p>
            </dd>
          </dl>
          <!-- Unfinished Downloads File Cleaning -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon06.png" alt=""></dt>
            <dd>
              <h4><b>Reinigung von unfertigen Downloaddateien </b><span>exklusiv</span></h4>
              <p>Schnell unfertige Downloaddateien loswerden, um Speicher freizusetzen.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- intro-part02 end -->

    <!-- intro-part03 start -->
    <div class="intro intro-part03">
      <div class="wrapper clearfix">
        <h2>Genießen Sie wichtige Vorzüge im Vergleich zu Advanced SystemCare 11 PRO</h2>
        <!-- Cleaner -->
        <dl class="cleaner fl">
          <dt>
            <h4>Sauberer</h4>
            <img src="<?php echo $pResUrl;?>images/intro-cleaner.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/intro-more30.png')?>" alt=""/>
            <p>freien Festplattenspeicher</p>
          </dd>
        </dl>
        <!-- Faster -->
        <dl class="faster fl">
          <dt>
            <h4>Schneller</h4>
            <img src="<?php echo $pResUrl;?>images/intro-faster.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/intro-faster20.png')?>" alt=""/>
            <p>PC -Starts</p>
          </dd>
        </dl>
        <!-- Safer -->
        <dl class="safer fl">
          <dt>
            <h4>Sicherer</h4>
            <img src="<?php echo $pResUrl;?>images/intro-safer.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/intro-more40.png')?>" alt=""/>
            <p>Werbeentfernung</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro-part03 end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Nur <b>0€</b>,um zurück zu PRO zu kommen und all diese einzigartigen Features genießen! </h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=de-asc12preorder&ref=de_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-de');"
           data-text="Jetzt vorbestellen">
          <span>Jetzt vorbestellen</span>
        </a>
        <ul class="price">
          <li><span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, <b class="reduceGift"><span class="packsNum">**</span></b> Plätze übrig!</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- intro-part04 start -->
    <div class="intro-part04">
      <div class="wrapper">
        <h3>Sie sind nicht PRO und leiden an den folgenden Problemen?</h3>
        <div class="intro-top clearfix">
          <!-- slow computer -->
          <dl class="fl clearfix">
            <dd class="fl">
              <strong>Langsamer Computer</strong>, der zu lange <br>braucht, um Webseiten zu laden 
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon08.png" alt=""></dt>
          </dl>
          <!-- system freezes or crashes -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon09.png" alt=""></dt>
            <dd class="fl">
              Gelegentliche <strong>Systemabstürze und <br>Systemeinfrierungen</strong>
            </dd>
          </dl>
        </div>
        <div class="intro-bottom clearfix">
          <!-- cluttering up -->
          <dl class="fl clearfix">
            <dd class="fl">
              Unnütze und unnötige Dateien <br><strong>müllen Ihre Festplatte zu</strong>  
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon10.png" alt=""></dt>
          </dl>
          <!-- annoying ads -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon11.png" alt=""></dt>
            <dd class="fl">
              <strong>Nervige Pop-Up Werbung</strong> jedes Mal, <br>wenn Sie surfen
            </dd>
          </dl>
        </div>
        <h2>Es wird Zeit, bei PRO für <b>0€</b> einzusteigen</h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-asc12preorder&ref=de_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-de');"
           data-text="Jetzt vorbestellen">
          <span>Jetzt vorbestellen</span>
        </a>
        <p class="price">1 Jahresabo / 3 PCs</p>
      </div>
    </div>
    <!-- intro-part04 end -->

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
           href="https://www.iobit.com/buy.php?product=de-asc12preorder&ref=de_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-de');"
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
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-de');";
    var _url = "https://www.iobit.com/buy.php?product=de-asc12preorder1799&ref=de_asc12preorderexpired1799<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=de_purchase_asc";
  </script>

</body>
</html>