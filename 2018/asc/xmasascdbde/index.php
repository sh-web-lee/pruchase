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
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(89,108);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_ascdb','x_dbasc','xr_ascdb'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie 80% bei ASC PRO & DB PRO für einen schnelleren,sichereren und stabileren PC</title>
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
        <h1>Weihnachtssale</h1>
        <p class="best">Die letzte Chance, möglichst viel zu sparen –  nur einmal im Jahr!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          </div>
          <div class="right fr">
            <h2>Driver Booster 6 PRO & Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter,&nbsp;&nbsp;<em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>Plätze übrig!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Beeilung! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
              </div>
              <p><strong>29<big>,</big></strong> <span><del>149,98€</del>99€ </span></p>
              <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-ascdb3pc&ref=de-ascdb3pc2018a<?php echo $refStr;?>&aff=&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018a-de')">
                 Jetzt aktivieren
              </a>
              <p class="year">1 Jahresabo für 3 PCs</p>
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
        <h2>Doppelte Garantie von IObit: ein schneller PC & ein besseres Spielerlebnis </h2>
        <p class="over">Driver Booster 6 PRO arbeitet zusammen mit dem weltweit führenden Tuning-Tool – Advanced SystemCare 12 PRO, damit Ihr Computer reibungslos läuft und Ihr PC-Spiel gut funktioniert.</p>       
      </div>
    </div>
    <!-- feature end -->
    <!-- together start -->
    <div class="together">
      <div class="wrapper">        
        <div class="panel clearfix">
          <div class="asc-box fl clearfix on">
            <div class="box fl">
              <h3>Advanced SystemCare 12 PRO<i></i></h3>
              <dl>
                <dt><strong>Ein viel stabileres System, </strong></dt>
                <dd>weil sich keine nutzlosen Registrierungen auf Ihrer Festplatte ansammelen.</dd>
              </dl>
              <dl>
                <dt><strong>Eine bessere Spieleleistung,</strong></dt>
                <dd>da unnötige Prozesse automatisch zur Reinigung des Arbeitsspeichers gestoppt werden.
                </dd>
              </dl>
              <dl>
                <dt><strong>Ihr PC reagiert schneller</strong></dt>
                <dd>wegen 300% schnellerer Internetverbindung und 200% schnelleres Systemstarts.</dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
          </div>
          <div class="db-box fl clearfix on">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
            <div class="box fl">
              <h3><i></i>Driver Booster 6 PRO</h3>
              <dl>
                <dt><strong>Kürzere Ladezeiten von Spielen,</strong></dt>
                <dd>ausgesattet mit notwendigen und aktualisierten Spielkomponenten.</dd>
              </dl>
              <dl>
                <dt><strong>Eine verbesserte PC-Leistung - </strong></dt>
                <dd>denn über 3.000.000 PC-Treiber können aktualisiert werden.</dd>
              </dl>
              <dl>
                <dt><strong>Ein besseres Spielerlebnis</strong></dt>
                <dd>mit Game Reay Treibern und Spielkomponenten, die ständig aktualisiert werden.</dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- together end -->
    <!-- features -->
    <div class="features">
      <div class="wrapper">
        <h2>Außerdem können Sie folgende einzigartigen Funktionen genießen:</h2>
        <ul>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></span>
            <p>Schutz der Personaldaten</p>
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></span>
            <p>Digitaler Fingerabdruckschutz</p>
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></span>
            <p>Automatische Treiberupdates</p>
          </li>
          <li>
            <span><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></span>
            <p>Behebung der Gerätefehler</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- end features -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Nicht verpassen! Holen Sie sich die beiden leistungsstarken Tools für Ihren PC und Ihr Spiel</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter,&nbsp;&nbsp;<em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Plätze übrig!
            </p>
          </div>
          <p><strong>29<big>,</big></strong> <span><del>149,98€</del>99€ </span></p>
          <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-ascdb3pc&ref=de-ascdb3pc2018b<?php echo $refStr;?>&aff=&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase- ascdb2018b-de')  ">
            Jetzt aktivieren
          </a>
          <p class="year">1 Jahresabo für 3 PCs</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Unternehmensauszeichnungen</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
    <!-- review -->
    <div class="review wrapper">
      <div class="review-box">
        <div class="reviews clearfix">
          <h2>Kundenbewertung</h2>
          <p>"Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"</p>
        </div>
        <div class="reviews clearfix">
          <h2>Kundenbewertung</h2>
          <p>"Durch Driver Booster weiß ich mit Leichtigkeit, welche Gerätetreiber veraltet sind und kann diese einfach updaten. Nebenbei hilft es mir auch dabei, Soundfehler, Netzwerkfehler, Gerätefehler usw. zu beheben. Ich hatte es vor dem Gebrauch nicht geglaubt, aber nach wenigen Anwendungen, lernte ich es zu lieben. Mein PC ist schneller, sicherer und fühlt sich neuer an als noch vor 8 Monaten. Danke IObit."</p>
        </div>
        <div class="reviews clearfix active">
          <h2>Media Review</h2>
          <p>„IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“</p>
        </div>
        <div class="reviews clearfix">
          <h2>Media Review</h2>
          <p>"Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte. Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version.</p>
        </div>
        <div class="reviews clearfix">
          <h2>Kundenbewertung</h2>
          <p>Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer läuft so viel besser und schneller, nachdem ich ASC12 heruntergeladen habe. Es hat unnötige und doppelte Dateien, leere Ordner gesäubert und ich habe es zum Vernichten von Dateien genutzt. Es säuberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.</p>
        </div>
        <div class="reviews clearfix">
          <h2>Kundenbewertung</h2>
          <p>„Ich machte es wie viele andere auch. Ich startete mit der Testversion und kaufte dann anschließend die Vollversion. Es hält meinen Computer sauber und entfernt Bugs restlos und hat mich bisher noch nie enttäuscht. Ich kontaktierte Advanced SystemCare vor Kurzem und sie reagierten innerhalb von ein oder zwei Tagen. Sie sagten mir alles, was ich wissen wollte. Meiner Meinung nach ist der Support ein wichtiger Aspekt, wenn ich mich für ein Produkt entscheide. ASC gewinnt bei Produkt und Support.“</p>
        </div>
      </div>
      
      <ul class="handle clearfix">
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Wayne-Bowler.png" alt="Wayne Bowler"><span></span></div>
          <strong>Wayne Bowler</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Myo-Thuya.png" alt="Myo Thuya"><span></span></div>
          <strong>Myo Thuya</strong>
        </li>
        <li class="active">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/PCMAG-editchoice.png" alt="PC Magazine"><span></span></div>
          <strong>PC Magazine</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/chip.png" alt="CHIP"><span></span></div>
          <strong>Chip.de</strong>
        </li>
        <li>
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Loretta-Harnarine.png" alt="Loretta Harnarine"><span></span></div>
          <strong>Loretta Harnarine</strong>
        </li>
        <li class="last">
          <div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
          <strong>Bruce Ramsay</strong>
        </li>
      </ul>
    </div>
    <!-- end review  -->
    <!-- bottomcart -->
    <div class="btmcart">
      <div class="wrapper">
        <div class="leftpart">
          <img src="<?php echo getStaticUrl('images/btmpacks.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter,&nbsp;&nbsp;<em class="packimg">
              <b id="packbox" class="reduceGift packbox">
                  <b class="list">
                    <strong>0</strong>
                    <strong>1</strong>
                    <strong>2</strong>
                    <strong>3</strong>
                    <strong>4</strong>
                    <strong>5</strong>
                    <strong>6</strong>
                    <strong>7</strong>
                    <strong>8</strong>
                    <strong>9</strong>
                  </b>
                  <b class="list">
                    <strong>0</strong>
                    <strong>1</strong>
                    <strong>2</strong>
                    <strong>3</strong>
                    <strong>4</strong>
                    <strong>5</strong>
                    <strong>6</strong>
                    <strong>7</strong>
                    <strong>8</strong>
                    <strong>9</strong>
                  </b>
              </b></em>Plätze übrig!
          </p>
          <div class="progressbar">
            <span></span>
          </div>
          <p id="bandown" class="countdown">Beeilung! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
        </div>
        <div class="price">
          <p><strong>29<big>,</big></strong> <span><del>149,98€</del>99€ </span></p>
          <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-ascdb3pc&ref=de-ascdb3pc2018c<?php echo $refStr;?>&aff=&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase- ascdb2018c-de')  ">
                 Jetzt aktivieren
              </a>
        </div>
      </div>
    </div>
    <!-- end btmcart -->
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
    var _href = "http://www.iobit.com/buy.php?product=de-ascdb3pc2899&ref=de-ascdb3pc2018popup<?php echo $refStr;?>&aff=&refs=de_purchase_asc";
    var _ga = "ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018popup-de')  ";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>