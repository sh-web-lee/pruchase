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
  $cName='deiu'.$date;
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

$viewNum=rand(80,110);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sparen Sie 85% auf IObit Uninstaller Pro und erhalten Sie zusätzlich zwei hilfreiche Programme kostenlos.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>Weihnachtssale</h1>
      <p class="best">Letzte Chance, möglichst viel zu sparen – einmal pro Jahr!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
          <div class="hint">
            <dl class="pop-bg">
              <dt>AMC Security PRO <span><b> 0€</b></span></dt>
              <dd>Schützt, beschleunigt und säubert Ihr Android-Handy mit nur einem Klick</dd>
              <dt>Smart Defrag 6 PRO <span><b> 0€</b></span></dt>
              <dd>Defragmentiert Festplatten und ausgewählte Dateien automatisch und schnell</dd>
            </dl>
          </div>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Plätze übrig!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Nur jetzt! <b>05</b>M: <b>00</b>S: <b class="last">000</b>Ms</p>
            </div>
            <p><strong>16<big>,99€</big></strong> <del> 109,89€</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=de-iu8amcsd1699&ref=de_iu8amcsdrightcorner<?php echo $refStr;?>&aff=&refs=de_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8purchase1812rc-de')">
              Jetzt aktivieren
            </a>
            <p class="year">1 Jahresabo für 3 PCs</p>
          </div>
        </div>
      </div>
    </div>

    <!-- snow -->
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
      <h2>Entfernt hartnäckige Programme und schädliche Plug-Ins</h2>
      <p class="over">
        Mit über 25.000.000 Nutzern weltweit, hält IObit Uninstaller PRO Ihren Computer in Ordnung und sorgt für sicheres Surfen.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/iu-screen.png')?>" alt="IObit Uninstaller 8 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Rengöring av Bundleware -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Bündel- Software entfernen</h3>
              <p>
                Entfernt lästige Bündel-Software , die unbemerkt installiert wurde, um Speicherplatz zu schaffen.
              </p>
              <p><b>*nur für PRO</b></p>
            </dd>
          </dl>
          <!-- Borttagning av Felaktiga Plugins  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Bösartige Plugins entfernen</h3>
              <p>
                Entfernt schädliche oder Werbe-Plugins, um sicheres Surfen zu garantieren. 
              </p>
              <p><b>*nur für PRO</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Inga Envisa Program -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Keine hartnäckigen Programme</h3>
              <p>
                Entfernt Programme, die nicht von anderen Tools gelöscht werden können.
              </p>
              <p><b>*nur für PRO</b></p>
            </dd>
          </dl>
          <!-- Rengör Rester Automatiskt -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Datenreste automatisch löschen</h3>
              <p>
                Erkennt und entfernt Datenreste von deinstallierten Programmen automatisch 
              </p>
              <p><b>*nur für PRO</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Die Pro-Version sorgt für einen sauberen PC und sicheres Surfen </h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> Beobachter, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> Plätze übrig!
          </p>
        </div>
        <p><strong>16<big>,99€</big></strong> <del> 109,89€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-iu8amcsd1699&ref=de_iu8amcsdrightcorner<?php echo $refStr;?>&aff=&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8purchase1812rc-de')">
          Jetzt aktivieren
        </a>
        <p class="year">1 Jahresabo für 3 PCs</p>
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
          <th class="itema">IObit Uninstaller <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>IObit Uninstaller <br> <b>Pro</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema"><i class="all-icons free">√</i></td>
          <td class="itemb">Entfernt ungewollte Programme & Plug-Ins</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Deinstalliert Bündel-Software</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Entfernt hartnäckige Programme</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Entfernt schädliche Werbe-Plugins</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Reinigt Datenreste</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Aktualisiert Programme durch 1 Klick</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Automatische Aktualisierung</td>
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
      <h3>Nicht verpassen!</h3>
      <h2>85% Rabatt, um Ihren PC sauberer, sicherer und schneller zu machen</h2>
      <div class="price">
        <p><strong>16<big>,99€</big></strong> <del> 109,89€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-iu8amcsd1699&ref=de_iu8amcsdrightcorner<?php echo $refStr;?>&aff=&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8purchase1812rc-de')">
          Jetzt aktivieren
        </a>
        <p id="footdown" class="countdown">Nur jetzt! <b>05</b>M: <b>00</b>S: <b class="last">000</b>Ms</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- media start -->
  <dl class="media wrapper clearfix">
    <dt><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="CHIP"/></dt>
    <dd>
      <h2>Media Review</h2>
      <h3>„In der Pro-Version arbeitet der "IObit Uninstaller" noch besser als in der Freeware - greifen Sie also schnell zu!“</h3>
      <p>
        „Die Pro-Version beinhaltet alle Funktionen der Freeware und kommt mit einigen praktischen Zusatz-Features. So kann die Vollversion beispielsweise auch gebündelte Programme oder Plugins entfernen und alle Ihre wichtigen Programme mit nur einem Klick auf die neueste Version updaten.“
      </p>
    </dd>
  </dl>
  <!-- media end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl class="active">
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>
            „Uninstaller ist genial darin die Bit- und Bytereste, die sich überall verstecken, zu finden, die ansonsten Festplattenspeicher verbrauchen und das Register beeinflussen.“
          </h4>
        </dd>
        <dd>
          „Uninstaller PRO ist nur eines von fünf der IObit Wartungsprogrammen, in die ich für meinen PC investiert habe, wie Chefköche in Ihre Messer. Uninstaller ist genial darin die Bit- und Bytereste, die sich überall verstecken, zu finden, die ansonsten Festplattenspeicher verbrauchen und das Register beeinflussen. Wenn ich die ‚deinstallieren‘ Funktion des zu deinstallierenden Programmes nutze, funktioniert dies ohne Probleme. Aber Uninstaller PRO ist im Nachhinein aufgetaucht und hat 35 weitere Dateien angezeigt, die noch entfernt werden mussten. Alles was ich tun musste, ist OK zu klicken. Sehr zu empfehlen und auch von mir gekauft ist die Lizenz für 3 PCs. Der Support ist höflich und hervorragend.“
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>
            „IObit Uninstaller ist wahrscheinlich eines der besten Programme, um unnötige Programme von deinem Computer zu entfernen.“
          </h4>
        </dd>
        <dd>
          „IObit Uninstaller ist wahrscheinlich eines der besten Programme, um unnötige Programme von deinem Computer zu entfernen. Im Gegensatz zur Windows Standarddeinstallation, entfernt dieses Programm jegliche Überbleibsel der Programme, die später deinen PC verlangsamen könnten. Ich nutze dieses Programm seit mehreren Jahren und es hilft mir zu jeder Zeit meinen Computer sauber und schnell zu halten. Ich habe dieses Programm an einige meiner Freunde in der Vergangenheit weiterempfohlen und würde heute auch wieder tun.“
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„IObit Uninstaller ist eines der besten Programme mit seinem Nutzungsumfang.“</h4>
        </dd>
        <dd>
          „IObit Uninstaller ist eines der besten Programme mit seinem Nutzungsumfang. Einfach zu handhaben, schnelle und tiefe Reinigung. Die neue Version beinhaltet mehr andere Funktionalitäten, die nicht nur mit Windows 10 funktionieren. Die schnelle Reinigung durch die Plug-ins ist auch sehr komfortabel. Ebenso die Suche nach Duplikaten und nicht genutzten Programmen. Danke für die Bewirtung der Computer meiner Familie und mir.“
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>
            „Der IObit Uninstaller wird mit jedem Update besser. Ich nutze ihn nun schon seit mehr als 3 Jahren.“
          </h4>
        </dd>
        <dd>
          „Der IObit Uninstaller wird mit jedem Update besser. Ich nutze ihn nun schon seit mehr als 3 Jahren. Er lädt schnell und hat eine einfache Benutzeroberfläche. Einige der vielen Features, die ich regelmäßig nutze, sind Batch Uninstall, Tiefenscan, Dateischredder und kürzlich installierte Features, welches mir einen schnellen Zugriff auf kürzlich installierte Programme gibt, die ich nicht mag oder nicht angemessen funktionieren. Es wird außerdem einfacher, deine Startanwendungen zu kontrollieren, sodass dein PC schneller hochfährt.“
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu">
        </div>
        <p>Joseph Yu <span>2016</span></p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"/></div>
        <p>Sergey Erlich <span>2016</span></p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler">
        </div>
        <p>Áda Görtler <span>2016</span></p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić">
        </div>
        <p>Lovro Žužić <span>2016</span></p>
      </li>
    </ul>
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
            <p>Mit der PRO-Version werden Software und Datenreste schnell und vollständig gelöscht.</p>
          </dd>
        </dl>
        <dl class="fr clearfix">
        
          <dd>
            <h4>Wir akzeptieren</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <p class="notes">
          Notiz:<br>
          * Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.<br>
          * Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.
        </p>
        <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</p>
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
  var imgSrc = "<?php echo getStaticUrl('images/iu-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=de-iu8amcsd1599&ref=de_iu8amcsdrightcornerpopup<?php echo $refStr;?>&refs=de_purchase_iu&tw=-8";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', 'iu8purchase1812rcpop-de')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>