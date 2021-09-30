<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(150,180);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ascdbxmasde_p' . $date;
  $c_name_t='ascdbxmasde_t' . $date;
  if ($_COOKIE[$c_name]===null) {
      $totalNum = $packsNum=rand(88,99);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
$isNewUser=false;
if(preg_match('/^13\./',$_GET['ver'])){
  $isNewUser=true;
}

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% Rabatt auf Advanced SystemCare PRO und Driver Booster PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <h1 class="title">Weihnachten Großer Sale Letzte Chance um groß einzusparen!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">80% Rabatt</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>80% Rabatt limitiert auf die ersten 999 Käufer</h2></div>
          <div class="numbox">
            <div id="flip" class="flipNum">
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>
              </div>
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>          
              </div>
              <div class="numwrap last">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div> 
              </div>
            </div>
            <span>Stück übrig</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price"><big>29,99</big>€</strong> <del>149,98€</del></p>
              <p>1 Jahresabo / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=de-ascdb3pc&ref=de_ascdbxmas2012<?php echo $refStr?>&refs=de_purchase_asc"
                 onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbxmas2012-de')">
                Jetzt aktivieren
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
    Probieren Sie es RISIKOFREI aus – Aktivieren Sie es jetzt, damit Ihr PC in einem exzellenten Zustand bleibt und Sie erhalten unsere 60-Tage Geldzurück-Garantie
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Super Sparpaket – Was ist mit inbegriffen?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 14 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>All-in-One-Systemoptimierer um Ihren PC automatisch und bis zu 200% schneller zu bereinigen</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>Driver Booster 8 PRO</span>
            </h3>
          </dt>
          <dd>Der beste Treiber-Updater um Treiber automatisch mit Höchstgeschwindigkeit herunterzuladen und zu installieren </dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Warum lohnt sich die Anschaffung?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
      <dl>
          <dt><b>Intelligenter</b> <span>Nur für PRO</span></dt>
          <dd>
          Reduziert Windows-Abstürze und Fehlermeldungen vollständig mit dem neuen AI-Modus
          </dd>
        </dl>
        <dl>
          <dt><b>200% * schnellerer PC</b> <span>Nur für PRO</span></dt>
          <dd>
            Selbstreinigung und Systemoptimierung, um den Computer schneller zu machen.
          </dd>
        </dl>
        <dl>
          <dt><b>300% * schnelleres Internet</b> <span>Nur für PRO</span></dt>
          <dd>
            Schnellerer Internet-Download, schnelleres Surfen, Spielen, YouTube-Schauen.
          </dd>
        </dl>
        <dl>
          <dt><b>Privatsphärenschutz</b> <span>Nur für PRO</span></dt>
          <dd>
            Blockieren Sie den unbefugten Zugriff auf Ihre Kontakte, E-Mails und andere vertrauliche Daten.
          </dd>
        </dl>
        <dl>
          <dt><b>Sicheres Surfen</b> <span>Nur für PRO</span></dt>
          <dd>
            Verhindern Sie, dass Tracker auf das zugreifen können, was Sie lesen, anschauen und kaufen.
          </dd>
        </dl>
        
      </div>
    </div>
    <div class="line-center">

    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>4.500.000+ Treiber Datenbank </b> <span>Nur für PRO</span></dt>
          <dd>Automatische Suche und Aktualisierung von mehr als 4.500.000 Treibern.</dd>
        </dl>
        <dl>
          <dt><b>Unbegrenzte Geschwindigkeit</b> <span>Nur für PRO</span></dt>
          <dd>Entsperren Sie das Tempolimit für 100% * schnelleren Treiber-Download.</dd>
        </dl>
        <dl>
          <dt><b>Besseres Spielen </b> <span>Nur für PRO</span></dt>
          <dd>Empfohlene Spielkomponenten, um die Spieleleistung zu beschleunigen. </dd>
        </dl>
        <dl>
          <dt><b>Gerätefehler beheben</b> <span>Nur für PRO</span></dt>
          <dd>Reduzieren Sie Sound-, Internet- und andere Hardwareprobleme.</dd>
        </dl>
        <dl>
          <dt><b>Offline-Treiber-Update</b> <span>Nur für PRO</span></dt>
          <dd>Aktualisiert und installiert Netzwerktreiber ohne Internetverbindung</dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/db-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Wann ist die beste Zeit zum Kaufen？</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/center-box.png')?>" alt=""/>
          <span class="original"><em>59,99€</em></span>
          <span class="original last"><em>89,99€</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span> Rabatt</h3>
            <span class="month">Thanksgiving</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>80%</span> Rabatt</h3>
            <span class="month">Heute</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span> Rabatt</h3>
            <span class="month">Silvester</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price"><big>29,99</big>€</strong> <del>149,98€</del></p>
        <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=de-ascdb3pc&ref=de_ascdbxmas2012<?php echo $refStr?>&refs=de_purchase_asc"
             onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbxmas2012-de')">
          Jetzt aktivieren
        </a>
        <p> 1 Jahresabo/ 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Millionen von Nutzern weltweit haben ihre Erfahrungen geteilt</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h3><span>Media Review</span></h3></dt>
            <dd>
              <p class="on">
              „Die kostenlose Tool-Sammlung sucht und beseitigt überflüssige Dateien, fehlerhafte Registry-Einträge und Malware-Infektionen. Auch bei der Deinstallation von Programmen, beim Aktualisieren von Treibern und beim Defragmentieren der Festplatte hilft die Tuning-Software.“
              </p>
              <cite>ComputerBild</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd>
              <p>
              „Eure Software hat sich über die letzten Jahre stark verbessert. Der Festplattenscan repariert ohne Neustart, zumindest bei kleineren Fehlern. Turbo Boost hat auch meinen Systemstart, alle Programme und Browser stark beschleunigt. Fakt ist, alles läuft bei geringerer CPU und Festplattennutzung besser. Euer Driver Booster ist ein echter Zeitsparer ohne Probleme zu verursachen. Ich nutze euren Uninstaller seit Jahren, weil dieser gründlich entfernt. Euer Defragmentierer ist exzellent. Meine Maschine läuft durch die Unterstützung eurer Programme wie eine fein abgestimmte Uhr.“
              </p>
              <cite>Hal Barry Koren</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd>
              <p>
              „Version 14 ist der bisher beste Ausgleich zwischen Stärke und einfacher Anwendung. ASC’s Gesichtserkennung-Sicherheit ist eine willkommene Addition zum sonstigen Aufgebot gegen sowohl kleine als auch große Sicherheitsgefahren. Der Systemmonitor zeigt dir in Echtzeit, durch was deine RAM und CPU ausgelastet werden. Das ist besonders für unsere heutige Welt mit Windows 10 wichtig, in der beide Ressourcen durch Updates schnell ausgelastet werden können. Ich liebe die verbesserte Freigabe von RAM. Die Anwendung läuft flüssiger und ist schneller abgeschlossen. “
              </p>
              <cite>Michael D. Masters</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd>
              <p>
              „Ich glaube, dass ich ASC über fünf Jahre benutzt habe, soweit ich mich daran erinnern kann. Und es ist genau das, das ich brauche, um meinen PC sauber zu halten, damit er wieder so schnell wie am Anfang wird. Immer wenn ich arbeite, muss das System schnell und gut arbeiten. Die Software „Advanced SystemCare“ wird einfach immer besser mit jeder neuen Version - eine wirklich zuverlässige und dringend benötigte Software für jeden Computer. Nun freue ich mich schon auf Ihre weiteren Software-Upgrades. Danke noch einmal!“
              </p>
              <cite>Savio Da Rocha Lobo</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd> 
              <p>
                „Auf die heutige Zeit bezogen, ist es sehr schwierig, immer mit den Treibern auf dem neuesten Stand zu sein. Da ich mit meinem PC viel experementiere und immer wieder was neues ausprobiere, bin ich eben auf den Driver Booster gekommen, weil Ihr immer fast genau, aktuell seid. Ich bin ein Hobby Mensch  in Sachen PC`s und freu mich immer über neue Errungenschaften. Macht weiter so und wir werden im Geschäft bleiben.“
              </p>
              <cite>Peter Bomers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd>
              <p>
                „Es hat geholfen, Probleme mit der Langsamkeit meines Laptops zu lösen, ohne ihn zum Absturz zu bringen. Manchmal, wenn ich versuchte, meine Treiber zu aktualisieren, stürzte der Computer ab und ich musste meinen Computer formatieren, um die Funktionen wiederherzustellen, und jetzt ist solche Situation mit DB8 nicht mehr möglich. Es ist einfach zu bedienen als das beste Tool auf dem Markt bis jetzt!“
              </p>
              <cite>Carlos Alexandre Veríssimo</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd>
              <p>
                „Was für eine Überraschung, den neuen Driver Booster von IObit zu erhalten. Sobald die Installation fertig ist, startet sein Update sofort. Nachdem das Upgrade abgeschlossen war, sah es so aus, als ob mein PC komplett überarbeitet worden wäre. Wirklich super!“
              </p>
              <cite>Harold Barr</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Media Review</span></h3></dt>
            <dd>
              <p>
                „IObit produziert viele Optimierungsprogramme, z.B. Driver Booster PRO, der Ihre Treiber automatisch aktualisiert, ist ja eine der besten. Driver Booster PRO bietet mehrere Funktionenen und Lizenz-Schlüssel zu einem guten Preis sowie eine anpassbare Benutzeroberfläche, die beim Anzeigen spezifischer Hardware-Informationen gut macht. Seine Wettbewerber wie Ashampoo Driver Updater und SlimWare Utilities DriverUpdate bieten überzeugende Funktionen an, aber IObit Driver Booster PRO tut krass besser.“
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/customer_de_88.png')?>" alt="Peter Bomers"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></li>

          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="CHIP"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/hal-barry-koren.png')?>" alt="Hal Barry Koren"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/michael-d-masters.png')?>" alt="Michael D. Masters"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/savio-da-rocha-lobo.png')?>" alt="Savio Da Rocha Lobo"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Redaktions-Tipp</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>RISIKOFREI ausprobieren – 60-Tage Geld zurück-Garantie</h3>
            <p>
              Aktivieren Sie es jetzt, damit ihr PC in einem exzellentem Zustand bleibt.
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>Wir akzeptieren</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>Notiz:</dt>
        <dd>*. Daten können auf der Grundlage verschiedener Systeme oder Computer geändert werden.</dd>
        <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">80% Rabatt</div>
      </div>
      <div class="numbox fl">
        <div id="fliptwo" class="flipNum">
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>
          </div>
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>          
          </div>
          <div class="numwrap last">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div> 
          </div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> Besucher jetzt online, <b class="packsNum">50</b> Stück übrig</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price"><big>29,99</big>€</strong> <del>149,98€</del></p>
          <p>1 Jahresabo/ 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=de-ascdb3pc&ref=de_ascdbxmas2012<?php echo $refStr?>&refs=de_purchase_asc"
             onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbxmas2012-de')">
            Jetzt aktivieren
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>