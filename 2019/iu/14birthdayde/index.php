<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$reduceNum=517656825;
$reTime=3;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);

$refStr='';
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>
<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Bis zu 73% Rabatt auf IObit Uninstaller PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script>
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
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="clearfix">
        <a class="logo fl" href="https://www.iobit.com/de/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <div class="title fr">
          <h1>IObits 14 Jubiläum</h1>
          <h4><span>73% Rabatt</span> auf das Jubiläumspaket! Solange der Vorrat reicht!</h4>
        </div>
      </div>
      <div class="clearfix">
        <div class="offer">
          <h2 class="all-icons">Standardpaket</h2>
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
          <div class="price">
            <img src="<?php echo getStaticUrl('images/iu-price.png')?>" alt=""/>
            <p>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=de-iu83pc1999&ref=de_iu83pcbuysingle1903<?php echo $refStr;?>&refs=de_purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcbuysingle1903-de')">
                JETZT KAUFEN  
              </a>
            </p>
          </div>
        </div>
        <div class="offer red">
          <h2 class="all-icons">Jubiläumspaket</h2>
          <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt=""/>
          <div class="price">
            <img src="<?php echo getStaticUrl('images/iu-gift-price.png')?>" alt=""/>
            <p>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=de-iu83pcpf1899&ref=de_iu8pfbuybundle1903<?php echo $refStr;?>&refs=de_purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcbuybundle1903-de')">
                JETZT KAUFEN  
              </a>
            </p>
            <p><span class="buyNum"><?php echo $buyNum;?></span> Deals verkauft</p>
          </div>
        </div>
      </div>
      <p class="gray">
        Wenn Sie innerhalb der ersten 60 Tage nicht zufrieden sind, erstatten wir Ihnen Ihr Geld zurück.
      </p>
    </div>
  </div>
  <!-- banner end -->

  <div class="wrapper">
    <!-- intro start -->
    <div class="intro">
      <h2>Mit IObit Uninstaller PRO sparen Sie mehr Zeit und Mühe</h2>
      <div class="content clearfix">
        <dl>
          <dt><i class="all-icons">1.</i></dt>
          <dd>
            <h3>Leistungsstark</h3>
            <p>Ungewollte Programme, die sich nicht entfernen lassen, können schnell deinstalliert werden.</p>
          </dd>
        </dl>
        <dl class="right two">
          <dt><i class="all-icons">2.</i></dt>
          <dd>
            <h3>Automatisch</h3>
            <p>Dank des verbesserten Tiefenscans werden alle Datenreste automatisch gefunden und bereinigt.</p>
          </dd>
        </dl>
        <dl class="red three">
          <dt><i class="all-icons">3.</i></dt>
          <dd>
            <h3>Intelligent</h3>
            <p>Bündel-Software, Adware und Plug-Ins werden erkannt und gelöscht.</p>
          </dd>
        </dl>
        <dl class="right red four">
          <dt><i class="all-icons">4.</i></dt>
          <dd>
            <h3>Werbefrei</h3>
            <p>100% mehr Werbe-Plugins im Browser werden gefunden und entfernt.</p>
          </dd>
        </dl>
        <dl class="five">
          <dt><i class="all-icons">1.</i></dt>
          <dd>
            <h3>Aktuell</h3>
            <p>Mit 1 Klick aktualisieren Sie wichtigen Software auf dem Rechner.</p>
          </dd>
        </dl>
        <dl class="right six">
          <dt><i class="all-icons">2.</i></dt>
          <dd>
            <h3>Schnell</h3>
            <p>Deinstalliert Software schnell über das Desktopsymbol, geöffnete Fenster oder Taskleistensymbol.</p>
          </dd>
        </dl>
      </div>
      <div class="more">
        <a href="javascript: void(0);">
          Unterschiede zwischen der kostenlosen Version und der Pro-Version>>
        </a>
      </div>
    </div>
    <!-- intro end -->

    <!-- awards start -->
    <div class="awards">
      <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <!-- media start -->
    <dl class="media clearfix">
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
    <div class="review">
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
          <p>Joseph Yu</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></div>
          <p>Sergey Erlich</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler">
          </div>
          <p>Áda Görtler</p>
        </li>
        <li>
          <div class="pic"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić">
          </div>
          <p>Lovro Žužić</p>
        </li>
      </ul>
    </div>
    <!-- review end -->
  </div>

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Hier ist der Grund, warum Sie die Pro-Version haben sollten.</th>
            <td class="space"></td>
            <th class="itema"><span>Free-Version</span></th>
            <td class="space"></td>
            <th class="itemb"><span>PRO-Version</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Deinstalliert Programme schnell</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Beseitigt Erweiterungen von Browsern</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Entfernt hartnäckigste Software</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Erkennt und entfernt Bündel-Software</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Bereinigt Datenreste automatisch</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Findet und entfernt bösartige Plug-Ins</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Findet und entfernt Werbe-Plug-Ins</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Updatet wichtige Software mit 1 Klick</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Aktualisiert sich automatisch</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Bietet technischen Support 24/7</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
      <h2>Zum 14. Geburtstag erhalten Sie <span class="all-icons">73% Rabatt</span> auf IObit Uninstaller Pro!</h2>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <img class="fl left" src="<?php echo getStaticUrl('images/iu-foot-box.png')?>" alt=""/>
      <div class="price fr">
        <img src="<?php echo getStaticUrl('images/iu-foot-price.png')?>" alt=""/>
        <p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=de-iu83pcpf1899&ref=de_iu8pfbuybundle1903<?php echo $refStr;?>&refs=de_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcbuybundle1903-de')">
            JETZT KAUFEN  
          </a>
        </p>
        <p><span class="buyNum"><?php echo $buyNum;?></span> Deals verkauft</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Hinweis:</dt>
    <dd>
      *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
    </dd>
    <dd>*Daten können sich system- oder computerabhängig ändern.</dd>

  </dl>

  <!-- copyright -->
  <div class="copyright">    
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>

  <!-- backtotop start -->
  <div class="backtotop all-icons">TOP</div>
  <!-- backtotop end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>