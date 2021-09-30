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
  $cName='sdasc'.$date;
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

$viewNum=rand(96,125);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_sdpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>66% Rabatt auf Advanced SystemCare PRO</title>
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
        <a class="logo" href="https://www.iobit.com/de/" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Frohe Weihnachten! Spezial Sale</h1>
        <p class="best">Die letzte Möglichkeit, um unglaublich zu sparen – Nur einmal im Jahr!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, noch <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Stück übrig!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Nicht verpassen! Noch <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms verbleibend</p>
              </div>
              <p><strong><small>€</small>19<small>,</small></strong> <span><del>€59,99</del>99</span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=a12spin3pcde&ref=de_sd6pasc12 rightcorner1999purchase1812a<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1812a-de')">
                 Jetzt aktivieren
              </a>
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
        <h2>Welche Vorteile bringt ihnen Advanced SystemCare 12 Pro?</h2>
        <p class="over">Mehr als 35,000,000 Nutzer haben sich weltweit für Advanced SystemCare Pro entschieden, um ihren alten PC so schnell wie einen neuen PC laufen zu lassen und ihren neuen PC noch schneller zu machen. </p>  
        <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Sicherere Privatsphäre<b class="sign">Neu</b></h3>
                <p>Löscht private Spuren, um zu verhindern, dass Sie verfolgt werden, und um Ihre sensiblen Daten vor jedem geheimen Zugriff zu schützen.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>300% * schnelleres Internet<b>verstärkt</b></h3>
                <p>Verschnellert die Download-, Surf-, Gaming- und YouTube-Inhalte um bis zu 300%.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>200% schnellerer PC<b>verstärkt </b></h3>
                <p>
                 Reduziert die Verzögerung des Systems und beschleunigt Ihren PC um bis zu 200%.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Umfassende Reinigung <b>verstärkt</b></h3>
                <p>Automatische Reinigung ihres RAM für ein besseres PC Erlebnis und ein stabiles System.</p>
              </dd>
            </dl>
          </div>
        </div>     
      </div>
    </div>
    <!-- feature end -->
    <!-- together start -->
    <div class="together">
      <div class="wrapper">
        <h2>
          Mit Smart Defrag Pro maximieren <br>Sie die Leistung ihrer Festplatte und verschnellern ihren PC! 
        </h2>
        <div class="panel clearfix">
          <div class="asc-box fl clearfix">
            <div class="box fl">
              <h3>Festplattenleistung Maximale <i></i></h3>
              <dl>
                <dt><strong>Bis zu 200%* schneller</strong></dt>
                <dd>
                  Beschleunigen Sie den Zugriff auf ihre Dateien & das Starten von Spielen effizient  
                  <span>*Nur mit Smart Defrag Pro!</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Verbesserte Leistung der Fetsplatte</strong></dt>
                <dd>
                  Zuverlässige und schnelle Leistung ihrer Festplatte mit automatischer Entfernung von Junkdateien und gründlicher Reinigung von Verzeichnissen.
                  <span>*Nur mit Advanced SystemCare Pro!</span>
                </dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
          </div>
          <div class="db-box fl clearfix">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
            <div class="box fl">
              <h3><i></i> Schneller PC</h3>
              <dl>
                <dt><strong>Bis zu 200%* schneller </strong></dt>
                <dd>Reduzieren Sie Systemausfälle und beschleunigen Sie ihren PC.
                  <span>*Nur mit Advanced SystemCare Pro!</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Schnelles Hochfahren</strong></dt>
                <dd>Genießen Sie das schnelle Hochfahren ihres PC´s  und ein einwandfrei laufendes System mit Boot Time Defrag.
                  <span>*Nur mit Smart Defrag Pro!</span>
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
      <h2>Nicht verpassen! Holen Sie sich die beiden leistungsstarken Tools für Ihren PC und Ihr Spiel</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, noch <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Stück übrig!
            </p>
          </div>
          <p><strong><small>€</small>19<small>,</small></strong> <span><del>€59,99</del>99</span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=a12spin3pcde&ref=de_sd6pasc12rightcorner1999purchase1812b<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1812b-de')">
            Jetzt aktivieren
          </a>
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
              <th class="itema">Advanced SystemCare 12 <br>FREE</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>Advanced SystemCare 12 <b>PRO</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema"><i class="all-icons free">√</i></td>
              <td class="itemb">Grundlegende System-Bereinigung, -Reparierung und -Optimierung</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Blockiert unerlaubten Zugriff auf Ihre privaten Dateien</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Verhindert Spyware und Malware in Echtzeit</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Reduziert und behebt Systemabstürze und -fehler</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Beschleunigt den Computer um bis zu 200%</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Beschleunigt die Internetgeschwindigkeit um bis zu 300%</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Hält Ihre wichtigen Programmeautomatisch immer auf dem neuesten Stand</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Entferntprivate Spuren automatisch für sicheres Surfen</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Automatisches Update auf die neueste Version</td>
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
        <h3>NICHT VERPASSEN!</h3>
        <h2>Erhalten Sie exklusiv <b>66%</b> RABATT und machen Sie ihren PC schneller, aufgeräumter und sicher!</h2>
        <div class="price">
          <p><strong><small>€</small>19<small>,</small></strong> <span><del>€59,99</del>99</span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=a12spin3pcde&ref=de_sd6pasc12rightcorner1999purchase1812c<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1812c-de')">
            Jetzt aktivieren
          </a>
          <p id="footdown" class="countdown">Nicht verpassen! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms verbleibend</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
    <!-- review -->
    <div class="review wrapper">
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
          <dt><h3>Unternehmensauszeichnungen</h3></dt>
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
            „Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer läuft so viel besser und schneller, nachdem ich ASC downgeloadet habe. Es hat unnötige und doppelte Dateien, leere Ordner gesäubert und ich habe es zum Vernichten von Dateien genutzt. Es säuberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.“
          </dd>
        </dl>
        <dl>
          <dt><h3>Kundenbewertung</h3></dt>
          <dd><h4>„Das Programm säubert &amp; beschleunigt den PC sehr zuverlässig und sicher.“</h4></dd>
          <dd>
            „Was die Funktionalität &amp; Leistung vom neuen Advanced SystemCare angeht, kann ich hier an diesem Punkt nur eine ganz klare Empfehlung aussprechen. Das Programm säubert &amp; beschleunigt den PC sehr zuverlässig und sicher. Selbst PC´s älterer Generationen werden um ein Vielfaches beschleunigt und zugleich perfekt optimiert. Damit gehören langsame und zugemüllte Computer der Vergangenheit an. Wer seinen PC optimal nutzen möchte (jetzt und in Zukunft), sollte sich das neue IObit Advanced SystemCare 11 am besten in der Pro-Version anschaffen und die Freude an einem sehr gut gewartetem PC genießen.“
          </dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active">
          <img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="">
          Bruce Ramsay
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="">
          Hank Ewert
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip">
          Chip
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="">
          Loretta Harnarine
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/markus-thomas.png')?>" alt="">
          Markus Thomas <br> Geldermann
        </li>
      </ul>
    </div>
    <!-- end review  -->
    
    <div class="bottom"> 
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Testen Sie risikofrei <br>mit unserer 60-Tage-Geld-Zurück-Garantie</h4>
              <p>Wir sind zuversichtlich, dass Sie die Aktivierung der PRO Edition einen leistungsstarken PC-Optimierer und Treiber-Updater zu einem erschwinglichen Preis erhalten!</p>
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
            <dd>* Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
            <dd>* Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
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
    var _href = "https://www.iobit.com/buy.php?product=de-asc121y3pc2199&ref=de_sd6pasc12rightcorner2199purchase1812<?php echo $refStr;?>&refs=de_purchase_asc";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12sdpascpurchase1812popup-de')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>