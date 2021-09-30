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
  $cName='frasc'.$date;
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
    $packsNum=80;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(85,100);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie 63% auf Advanced SystemCare Pro.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com/de/" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Weihnachtssale</h1>
        <p class="best">Die beste Gelegenheit unglaublich zu Sparen! – Nur einmal pro jahr!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 Pro</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, noch  <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>Stück übrig!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Nicht verpassen! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms*verbleibend</p>
              </div>
              <p><strong>21<big>,</big></strong> <span>99€ <del>59,99€</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-asc121y3pc2199&ref=de_asc12fromdbrcpro<?php echo $refStr;?>&aff=&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchasefromdbpro-de')">
                 Jetzt aktivieren
              </a>
              <p class="year">1 Jahr / 3 PCs</p>
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
        <h2>Welche Vorteile bringt Ihnen das Advanced SystemCare 12 PRO?</h2>
        <p class="over">
          Über 55,000,000 Benutzer haben sich weltweit für Advanced SystemCare Pro entschieden, um ihren alten PC wie einen neuen PC laufen zu lassen und ihren neuen PC noch schneller zu machen.
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
        <div class="clearfix">
            <dl class="clearfix fl">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Sichere Privatsphäre<b class="sign">Neu</b></h3>
                <p>Löscht ihre privaten Daten, um online nicht verfolgt werden zu können und schützt ihre Privatsphäre.</p>
              </dd>
            </dl>
            <dl class="clearfix fr">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>200%* schnellerer PC <b>Verbessert </b></h3>
                <p>Reduziert Systemausfälle und beschleunigt  ihren PC um bis zu 200%.</p>
              </dd>
            </dl>
            <div class="clearfix"></div>
            <dl class="clearfix fr">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>300%* Schnelles Internet<b>Verbessert </b></h3>
                <p>Beschleunigt die Download-geschwindigkeit, ihr Surferlebnis, Online Gaming und schauen Sie Youtube Videos bis zu 300% schneller.</p>
              </dd>
            </dl>
            <dl class="clearfix fl">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Umfassende Reinigung<b>Verbessert </b></h3>
                <p>Automatische Reinigung ihres RAM für ein besseres PC Erlebnis und ein stabiles System.</p>
              </dd>
            </dl>
        </div>
      </div>
    </div>
    <!-- feature end -->
    <!-- together start -->
    <div class="together">
      <div class="wrapper">
        <h2>
          Mit dem Driver Booster Pro haben Sie das beste Gamingerlebnis und holen die höchste Leistung aus ihrem PC heraus!
        </h2>
        <div class="panel clearfix">
          <div class="asc-box fl clearfix">
            <div class="box fl">
              <h3>UNGLAUBLICHES GAMINGERLEBNIS<i></i></h3>
              <dl>
                <dt><strong>Schnelleres Gaming</strong></dt>
                <dd>
                  Reinigt ihren RAM automatisch und beendet unnötige Prozesse.
                  <span>* Nur mit Advanced SystemCare pro</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Angenehmeres Gamingerlebnis</strong></dt>
                <dd>
                  Nutzt Game Ready Treiber und die dazugehörigen Komponenten, um ihr Spieleerlebnis zu verbessern.
                  <span>* Nur mit Driver Booster Pro</span>
                </dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
          </div>
          <div class="db-box fl clearfix">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
            <div class="box fl">
              <h3><i></i>DIE BESTE LEISTUNG FÜR IHREN PC</h3>
              <dl>
                <dt><strong>Bereinigter & schneller PC</strong></dt>
                <dd>Automatisches entfernen von Junkdateien und optimierte Verzeichnisse, um die Laufgeschwindigkeit  zu beschleunigen.
                  <span>*nur mit Advanced SystemCare pro</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Stabiler PC</strong></dt>
                <dd>Fehlende, fehlerhafte, ungültige, geringe Treiber werden aktualisiert.
                  <span>* Nur mit Driver Booster Pro</span>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- together end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Aktivieren Sie jetztAdvanced SystemCare Pro–der beste Preis des Jahres!</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, noch <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Stück übrig!
            </p>
          </div>
          <p><strong>21<big>,</big></strong> <span>99€ <del>59,99€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-asc121y3pc2199&ref=de_asc12fromdbrcpro<?php echo $refStr;?>&aff=&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchasefromdbpro-de')">
            Jetzt aktivieren
          </a>
          <p class="year">1 Jahr / 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Kurz und Knapp: der Unterschied zwischen der Free und Pro Version</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Advanced SystemCare<br>FREE</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>Advanced SystemCare<b>PRO</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema"><i class="all-icons free">√</i></td>
              <td class="itemb">Grundlegende Systemreinigung, schnell und optimiert</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Blockiert unerlaubten Zugriff auf ihre Dateien</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Schützt vor Spyware und Malware in Echtzeit</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Reduziert und repariert Systemfehler und -ausfälle</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Beschleunigt ihren PC um bis zu 200%</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Verschnellert ihre Internetgeschwindigkeit um bis zu 300%</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Aktualisiert automatisch wichtige Programme</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Löscht automatisch Verläufe für sicheres Surfen</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Aktualisiert automatisch auf die neueste Version</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"></td>
              <td class="itemb"></td>
              <td class="itemc last"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>NICHT VERPASSEN</h3>
        <h2>Erhalten Sie eklusiv <b>63%</b> Rabatt und machen Sie ihren PC schneller, aufgeräumt und sicher</h2>
        <div class="price">
          <p><strong>21<big></big></strong> <span>99€<del>59,99€ </del></span></p> 
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-asc121y3pc2199&ref=de_asc12fromdbrcpro<?php echo $refStr;?>&aff=&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchasefromdbpro-de')">
            Jetzt aktivieren
          </a>
          <p id="footdown" class="countdown">Nicht verpassen!<b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms*verbleibend</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->
    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip"></dt>
            <dd>
              <h2>Media Review</h2>
              <p>„Zusätzlich zu den Features der Free-Version bietet Advanced SystemCare in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.“</p>
              <cite>Chip</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>„Wie die meisten Menschen bin ich kein Computerexperte. Ich weiß nicht wie viele Programme, die alle von sich behaupten das Beste zu sein, ich über die letzten Jahre ausprobiert habe, ohne auch nur ansatzweise an meinen Schutz von Advanced SystemCare heranzukommen. Seit ich dieses großartige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als übertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus. Vielen Dank an Euch alle, dass Ihr mein Leben so viel einfacher gemacht habt.“</p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>„Ich machte es wie viele andere auch. Ich startete mit der Testversion und kaufte dann anschließend die Vollversion. Es hält meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie enttäuscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. Meiner Meinung nach ist der Support ein wichtiger Aspekt, wenn ich mich für ein Produkt entscheide. ASC gewinnt bei Produkt und Support.“</p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>„Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer läuft so viel besser und schneller, nachdem ich ASC downgeloadet habe. Es hat unnötige und doppelte Dateien, leere Ordner gesäubert und ich habe es zum Vernichten von Dateien genutzt. Es säuberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.“</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/markus-thomas.png')?>" alt="Markus Thomas Geldermann"></dt>
            <dd>
              <h2>Kundenbewertung</h2>
              <p>„Was die Funktionalität & Leistung vom neuen Advanced SystemCare angeht, kann ich hier an diesem Punkt nur eine ganz klare Empfehlung aussprechen. Das Programm säubert & beschleunigt den PC sehr zuverlässig und sicher. Selbst PC´s älterer Generationen werden um ein Vielfaches beschleunigt und zugleich perfekt optimiert. Damit gehören langsame und zugemüllte Computer der Vergangenheit an. Wer seinen PC optimal nutzen möchte (jetzt und in Zukunft), sollte sich das neue IObit Advanced SystemCare 11 am besten in der Pro-Version anschaffen und die Freude an einem sehr gut gewartetem PC genießen.“</p>
              <cite>Markus Thomas Geldermann</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
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
              <p>Mit der PRO-Version wird Ihr PC immer schneller, sauberer und sicherer!</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Wir akzeptieren</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Notiz:</dt>
            <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
            <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
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
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "http://www.iobit.com/buy.php?product=de-asc122399-ac&ref=de_asc12fromdbprorcpop<?php echo $refStr;?>&refs=de_purchase_asc";
    var _ga = "('send', 'event', 'ascbuy', 'buy', ' asc12purchasefromdbpropop-de')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>