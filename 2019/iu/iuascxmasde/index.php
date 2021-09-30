<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'dexasciu_p' . $date;
  $c_name_t='dexasciu_t' . $date;
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
$refStr='';
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> 78% Rabatt auf Advanced SystemCare PRO und IObit Uninstaller PRO - IObit </title>
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
      <h1 class="title">  Weihnachten Großer Sale Letzte Chance um groß einzusparen! </h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">78% Rabatt</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>78% Rabatt limitiert auf die ersten 999 Käufer</h2></div>
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
            <!-- <p class="change">Hurry, only <b class="packsNum">50</b> Left at this price!</p> -->
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price"><big>21,99</big>€</strong> <del> 99,94€ </del></p>
              <p>1 Jahresabo / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=de-iuasc3pc&ref=de_asciuxmas1912<?php echo $refStr;?>&refs=de_purchase_iu"
                 onclick="ga('send', 'event', 'iuascbuy', 'buy', 'iuascxmas1912-de')">
                Jetzt aktivieren
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
      Probieren Sie es RISIKIKOFREI aus – Aktivieren Sie es jetzt, damit ihr PC in einem exzellentem Zustand bleibt und erhalten Sie unsere 60-Tage Geldzurück-Garantie.
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Super Sparpaket – Was ist mit inbegriffen?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/iu-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 13 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>All-in-one System-Optimierer, der ihren PC beschleunigt und ihre Privatssphäre schützt.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
              <span>IObit Uninstaller 9 PRO</span>
            </h3>
          </dt>
          <dd>Einfach zu bedienendes Software-Deinstallationsprogramm, das unerwünschte Programme und Plug-Ins vollständig entfernt.</dd>
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
          <dt><b>200% * Schnellerer PC</b></dt>
          <dd>Selbstreinigung und Systemoptimierung, um den Computer schneller zu machen. <span>Nur für PRO</span></dd>
        </dl>
        <dl>
          <dt><b>300% * Schnelleres Internet </b></dt>
          <dd>Schnellerer Internet-Download, Schnelleres Surfen, Spielen, YouTube-Schauen.  <span>Nur für PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Privatssphärenschutz</b></dt>
          <dd>Blockieren Sie den unbefugten Zugriff auf Ihre Kontakte, E-Mails und andere vertrauliche Daten. <span>Nur für PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Sicheres Surfen</b></dt>
          <dd>Verhindern Sie, dass Tracker auf das zugreifen können, was Sie lesen, anschauen und kaufen. <span>Nur für PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Software Updater</b></dt>
          <dd>Halten Sie wichtige Programme mit einem Klick auf dem Laufenden.  <span>Nur für PRO</span></dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Entfernen Sie hartnäckige und gebündelte Software </b> </dt>
          <dd>die nicht mit herkömmlichen Mitteln deinstalliert werden kann.  <span>Nur für PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Automatische Suche nach Überresten</b> </dt>
          <dd>die beim standardmäßigen Deinstallieren ürbig geblieben sind  oder die durch andere Dienstprogramme nicht gelöscht werden konnten.  <span>Nur für PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Identifizieren Sie böswillige oder werbebasierte-Plug-Ins  </b> </dt>
          <dd>die Werbeanzeigen oder schädliche Links in die angezeigten Seiten einfügen. <span>Nur für PRO</span></dd>
        </dl>
        <dl>
          <dt><b>Echtzeitüberwachung von Dateiänderungen </b> </dt>
          <dd>die durch Programme während deren Installation gemacht werden.   <span>Nur für PRO</span></dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/iu-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Wann ist die beste Zeit es sich zu holen?_</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <span class="original"><em>59,99€</em></span>
          <span class="original last"><em>39,95€</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost">50% Rabatt</h3>
            <span class="month">Thanksgiving</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>78%</span> Rabatt</h3>
            <span class="month">Heute</span>
          </div>
          <div class="clist three">
            <h3 class="cost">60% Rabatt</h3>
            <span class="month">Silvester</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price"><big>21,99</big>€</strong> <del>99,94€</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=de-iuasc3pc&ref=de_asciuxmas1912<?php echo $refStr;?>&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iuascbuy', 'buy', 'iuascxmas1912-de')">
          Jetzt aktivieren
        </a>
        <p>1 Jahresabo/ 3 PCs</p>
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
                "Advanced SystemCare Pro" beschleunigt Ihren PC und schafft neuen Speicherplatz auf der Festplatte. Zusätzlich zu den Features der Free-Version bietet "Advanced SystemCare" in der Pro-Version unter anderem verbesserten Malware-Schutz und verbesserte Internet-Sicherheit. Auch eine System-Optimierung in Echtzeit erhalten Sie in der Pro-Version
              </p>
             <cite>chip</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd> 
              <p>
                „Dieses Programm ist das mit Abstand beste, das ich jemals ausprobiert habe. Mein Computer läuft so viel besser und schneller, nachdem ich ASC12 heruntergeladen habe. Es hat unnötige und doppelte Dateien, leere Ordner gesäubert und ich habe es zum Vernichten von Dateien genutzt. Es säuberte und defragmentierte das Register und alle Dateien auf dem PC. Ich empfehle den Kauf dieses Programmes wärmstens. Es ist nicht teuer und was es für euren Computer machen wird, wird großartig sein. Du wirst es lieben, das verspreche ich.“
              </p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd>
              <p>
                „Wie die meisten Menschen bin ich kein Computerexperte. Ich weiß nicht wie viele Programme, die alle von sich behaupten das Beste zu sein, ich über die letzten Jahre ausprobiert habe, ohne auch nur ansatzweise an meinen Schutz von Advanced SystemCare heranzukommen. Seit ich dieses großartige Programm besitze, musste ich mich kein einziges Mal an einen Techniker wenden. Es hat meine Erwartungen mehr als übertroffen, immer auf dem neusten Stand, und die Grafiken sehen auch super aus. Vielen Dank an Euch alle, dass Ihr mein Leben so viel einfacher gemacht habt.“
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd>
              <p>
                „Als Computer-Reparatur-Techniker finde ich, dass man durch das Herunterladen und Scannen mit ASC die häufigsten Probleme lösen kann. Nach der Reparatur empfehle ich allen Kunden ein Pro-Paket zu kaufen. Wer braucht einen Techniker? Wenn Sie die Macht des Advanced SystemCare Pro haben, das mit Ihrem System 24*7 Stunden arbeiten kann. Das ist das beste Produkt, das ein Heimanwender kaufen kann. Das Produkt erleichtert meinen Job, vielen Dank dafür.“
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>

          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd>
              <p>
                „IObit Uninstaller ist eines der besten Programme mit seinem Nutzungsumfang. Einfach zu handhaben, schnelle und tiefe Reinigung. Die neue Version beinhaltet mehr andere Funktionalitäten, die nicht nur mit Windows 10 funktionieren. Die schnelle Reinigung durch die Plug-ins ist auch sehr komfortabel. Ebenso die Suche nach Duplikaten und nicht genutzten Programmen. Danke für die Bewirtung der Computer meiner Familie und mir.“
              </p>
              <cite>Áda Görtler</cite>
            </dd>
          </dl>
          <dl class="reviews jeff">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd> 
              <p>
                „IObit Uninstaller ist wahrscheinlich eines der besten Programme, um unnötige Programme von deinem Computer zu entfernen. Im Gegensatz zur Windows Standarddeinstallation, entfernt dieses Programm jegliche Überbleibsel der Programme, die später deinen PC verlangsamen könnten. Ich nutze dieses Programm seit mehreren Jahren und es hilft mir zu jeder Zeit meinen Computer sauber und schnell zu halten. Ich habe dieses Programm an einige meiner Freunde in der Vergangenheit weiterempfohlen und würde heute auch wieder tun.“
              </p>
              <cite>Sergey Erlich</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Kundenbewertung</span></h3></dt>
            <dd>
              <p>
                „Der IObit Uninstaller wird mit jedem Update besser. Ich nutze ihn nun schon seit mehr als 3 Jahren. Er lädt schnell und hat eine einfache Benutzeroberfläche. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features, welches mir einen schnellen Zugriff auf kürzlich installierte Programme gibt, die ich nicht mag oder nicht angemessen funktionieren. Es wird außerdem einfacher, deine Startanwendungen zu kontrollieren, sodass dein PC schneller hochfährt.“
              </p>
              <cite>Lovro Žužić</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Media Review</span></h3></dt>
            <dd>
              <p>
                Neben Programmen beseitigt der „IObit Uninstaller“ auch Toolbars und Plugins von Firefox, Chrome und Internet Explorer. Mit dem „IObit Uninstaller“ entfernen Sie nicht mehr benötigte Software von Ihrem PC. Im Anschluss an die Standard-Deinstallation durchsucht das kostenlose Tool Ihren kompletten Rechner und die Registry nach möglichen Datenresten, die Sie ebenfalls löschen können.
              </p>
              <cite>GIGA</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="ergey Erlich"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="chip"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/giga.png')?>" alt="GIGA"></li>
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
            <h3>RISIKIKOFREI ausprobieren – 60-Tage Geld zurück-Garantie</h3>
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
        <dd>
          *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
        </dd>
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
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> Besucher jetzt gerade, <b class="packsNum">50</b>Stück übrig</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price"><big>21,99</big>€</strong> <del>99,94€</del></p>
          <p>1 Jahresabo/ 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=de-iuasc3pc&ref=de_asciuxmas1912<?php echo $refStr;?>&refs=de_purchase_iu"
             onclick="ga('send', 'event', 'iuascbuy', 'buy', 'iuascxmas1912-de')">
            Jetzt aktivieren
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>