<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=153348120;
  $reTime=10;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);

$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
    'bdprog','iuasc'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie bis zu 72% auf IObit Uninstaller Pro.</title>
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
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="title clearfix">
        <a class="logo fl" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <h1 class="fr">LAST-MINUTE-ANGEBOT</h1>
      </div>
      <p>Sie sparen <b>72%</b> auf IObit Uninstaller PRO und bekommen Protected Folder geschenkt.</p>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/iupfbox-big.png')?>" alt="" />
          <h3>Der IObit Uninstaller ist ein Tool zum vollständigen Entfernen von Programmen, Apps und Plugins. </h3>
          <p>
            Die Pro-Version der Software verfügt über eine umfangreichere Datenbank zum Entfernen von noch mehr unnötigen Daten und kann außerdem wichtige Programme auf dem jeweiligen System aktualisieren.    ---Chip.de
          </p>
        </div>
        <div class="right fr">
          <h2>Mehr sparen und mehr Funktionen</h2>
          <h3 class="pc">1 Jahr, 3 Computer</h3>
          <div class="price">
            <strong>18,99€</strong>
            <p>Originalpreis: <del>69,94€</del></p>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=de-iu83pcpf1899&ref=de_iu8pfbuy1803<?php echo $refStr;?>&aff=&refs=de_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201803-de');">
              Jetzt kaufen und 72% sparen
            </a>
            <p class="number">Bereits <span class="buyNum"><?php echo $buyNum;?></span> Deals verkauft</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- patment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- patment end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <div class="feature clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
      <ul class="fl">
        <li>Ungewollte Programme, die sich nicht entfernen lassen wollen, können schnell deinstalliert werden.</li>
        <li class="blue">
          Mit einem Klick aktualisieren Sie ohne Benutzereingriff Ihre wichtigen Software auf dem PC
        </li>
        <li class="three">
          Dank des verbesserten Tiefenscans werden alle Programmreste automatisch gefunden und bereinigt.
        </li>
        <li class="four blue">
          Bündel-Software, Adware und Plug-Ins werden erkannt und gelöscht.
        </li>
      </ul>
    </div>
    <div class="gift clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/pfbox.png')?>" alt="" />
      <div class="right fl">
        <h2>DIE VOLLVERSION VON PROTECTED FOLDER ERHALTEN SIE <b>KOSTENLOS!</b></h2>
        <ul>
          <li><i class="all-icons">√</i> Es kann Ihre wichtigen und persönlichen Dateien schützen.</li>
          <li><i class="all-icons">√</i> Machen Sie sich keine Sorgen mehr um Datendiebstahl.</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation " id="test">
    <div class="wrapper clearfix">
      <img class="iupfbox fl" src="<?php echo getStaticUrl('images/iupfbox.png')?>" alt="" />
      <div class="price fr">
        <p><strong>18,99€</strong> <del>statt 69,94€</del></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=de-iu83pcpf1899&ref=de_iu8pfbuy1803<?php echo $refStr;?>&aff=&refs=de_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201803-de');">
          JETZT KAUFEN
        </a>
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
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Welche Vorteile bietet Ihnen die PRO Edition?</th>
          <th class="itemb">IObit Uninstaller 8 <b>FREE</b></th>
          <th class="itema">
            IObit Uninstaller 8 <b>PRO</b>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=de-iu83pcpf1899&ref=de_iu8pfbuy1803<?php echo $refStr;?>&aff=&refs=de_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201803-de')">
              JETZT KAUFEN
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue first">Deinstalliert Programme über das Desktopsymbol, das Fenster oder die Taskleiste <span class="nuo">Neu</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Entfernt Erweiterungen von Edge, Chrome, IE, Firefox, etc.</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Erweiterte Datenbasis zur Entfernung hartnäckigster Programme <span class="twox">Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Erkennt und deinstalliert Fremd- und Freeware <span class="nuo">Neu</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td> 
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue five">Entfernt automatisch Datenreste, die andere Anwendungen nicht löschen können <span>Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue first">Erweiterte Datenbasis für die Findung und Entfernung bösartiger Plug-Ins <span class="twox">Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue first">Erweiterte Datenbasis für die Findung und Entfernung von Werbe-Plug-Ins <span class="twox">Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Updatet noch mehr essenzielle Software mit einem Klick <span class="twox fivex">Verbessert</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatische Updates auf die neuste Version</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Kostenloser technischer Support 24/7</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2"></th>
          <th class="itemb"></th>
          <th class="itema">
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=de-iu83pcpf1899&ref=de_iu8pfbuy1803<?php echo $refStr;?>&aff=&refs=de_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase201803-de')">
              JETZT KAUFEN
            </a>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h4>Zufriedenheitsgarantie</h4></dd>
          <dd>60-Tage-Geld-zurück-Garantie</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd><h4>Zahlungssicherheit</h4></dd>
          <dd>Ihre Zahlung ist 100% sicher</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt="" /></dt>
          <dd><h4>Schnelle Aktivierung</h4></dd>
          <dd>Kurz nach dem Kauf erhalten Sie <span>einen Aktivierungscode.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
          <dd><h4>Kundendienst</h4></dd>
          <dd>Kostenloser technischer Support 24/7</dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Notiz:</dt>
        <dd>*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
        <dd>*Daten können sich system- oder computerabhängig ändern.</dd>
      </dl>
      <!-- annotation end -->

      <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
    </div>
  </div>
  <!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>