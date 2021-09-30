<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=152813220;
  $reTime=10;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie bis zu 80% auf IObit Uninstaller PRO.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,700i'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 10000);
        }
      });
    }
    setTimeout('getBuyNum()', 10000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="top clearfix">
        <a class="logo fl" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <div class="pc fr">
          <img src="<?php echo getStaticUrl('images/pc-logo.png')?>" alt="PC"/>
        </div>
      </div>
      <div class="title">
        <h1>Fan-tastisches Angebot zur Fußball WM 2018</h1>
        <h2>Ab sofort 80% sparen, um die WM 2018 mitzufeiern.</h2>
      </div>
      <div class="panel clearfix">
        <div class="sale fl">
          <img src="<?php echo getStaticUrl('images/sale.png')?>" alt="" />
        </div>
        <div class="offer fl">
          <img src="<?php echo getStaticUrl('images/box.png')?>" alt="" />
          <div class="price">
            <p><strong>18,99€</strong> <span>Vorher <del>99,93€</del></span></p>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=de-iu7pfsd1899&ref=de_iu7pfsd1805&aff=&refs=de_purchase_iu" 
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201805-de')"
               data-text="JETZT SPAREN">
              <span>JETZT SPAREN</span>
            </a>
            <p class="number"><i class="all-icons"></i> Schon <b class="buyNum"><?php echo $buyNum;?></b> Deals verkauft</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Highlights von IObit Uninstaller PRO</h2>
    <div class="feature clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <div class="center fl">
        <img class="fl" src="<?php echo getStaticUrl('images/icons.png')?>" alt="" />
      </div>
      <ul class="fl">
        <li>Ungewollte Programme, die sich nicht entfernen lassen, können schnell deinstalliert werden.</li>
        <li>Mit einem Klick aktualisieren Sie ohne Benutzereingriff Ihre wichtigen Software auf dem PC.</li>
        <li>Gebündelte Software, Adware und Plugins werden intelligent erkannt und gelöscht.</li>
        <li>Dank dem verbesserten Tiefenscan werden alle Programmreste automatisch gefunden und bereinigt.</li>
        <li>
          <a class="more" href="javascript: void(0);">Mehr über die Pro-Version >></a>
        </li>
      </ul>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div id="test" class="donation" >
    <div class="wrapper">
      <h2>Kostenlose Geschenke nur für die FIFA Fussball-Weltmeisterschaft 2018</h2>
      <div class="clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/pf.png')?>" alt=""/></dt>
          <dd>
            <h3>Protected Folder <strong>0€</strong> <del>39,95€</del></h3>
            <ul>
              <li><i class="all-icons">√</i> Ihre wichtigen Dateien schützen</li>
              <li><i class="all-icons">√</i> Keine Sorgen um Datendiebstahl</li>
            </ul>
          </dd>
        </dl>
        <dl class="fr">
          <dt><img src="<?php echo getStaticUrl('images/sd.png')?>" alt=""/></dt>
          <dd>
            <h3>Smart Defrag PRO <strong>0€</strong> <del>29,99€</del></h3>
            <ul>
              <li><i class="all-icons">√</i> Automatische Festplattendefragmentierung</li>
              <li><i class="all-icons">√</i> 200% schneller Zugriff auf Dateien</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

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
        <div class="pic"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></div>
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

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Welche Vorteile bietet Ihnen die PRO Edition?</th>
            <th class="itemb">IObit Uninstaller 7 <b>FREE</b></th>
            <th class="itema">
              IObit Uninstaller 7 <b>PRO</b>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=de-iu7pfsd1899&ref=de_iu7pfsd1805&aff=&refs=de_purchase_iu" 
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201805-de')"
                 data-text="JETZT SPAREN">
                <span>JETZT SPAREN</span>
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Entfernt unerwünschte Programme gründlich und schnell <span>Verbessert</span></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Enrfernt Plug-ins & Erweiterungen auf Edge, Chrome, IE, Firefox, usw.  <span class="nuo">Neu</span></td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Erkennt und entfernt gebündelte Software & Plug-ins</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Mit einem Klick aktualisieren Sie alle wichtigen Software <span class="nuo">Neu</span></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Deinstalliert bösartige Plug-Ins für sichereres Surfen <span class="nuo">Neu</span> </td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Sauberes und schnelles Surf-Erlebnis mit Anti-Adware <span class="nuo">Neu</span> </td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Entfernt automatisch die Restdateien, die andere Uninstaller nicht entfernten  </td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Automatisches Update auf die neueste Version</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Kostenloser 24/7 technischer Support</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="2"></th>
            <th class="itemb"></th>
            <th class="itema">
              <strong>18,99€</strong>
              <p>Vorher <del>99,93€</del></p>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=de-iu7pfsd1899&ref=de_iu7pfsd1805&aff=&refs=de_purchase_iu" 
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201805-de')"
                 data-text="JETZT SPAREN">
                <span>JETZT SPAREN</span>
              </a>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Notiz:</dt>
      <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
      <dd>*. Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
    </dl>
    <!-- annotation end -->

    <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl">
        <h2><span>Sofortrabatt nur für die WM 2018!</span> Solange Vorrat reicht!</h2>
        <h3>Ihre Computer werden immer schneller, sicherer und sauberer.</h3>
      </div>
      <div class="price fr">
        <p><strong>18,99€</strong> <del>99,93€</del></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=de-iu7pfsd1899&ref=de_iu7pfsd1805&aff=&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201805-de')"
           data-text="JETZT SPAREN">
          <span>JETZT SPAREN</span>
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <!-- backtotop start -->
  <div class="backtotop">
    <div class="wrapper">
      <div class="box">Nach oben<span><i class="all-icons"></i></span></div>
    </div>
  </div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>