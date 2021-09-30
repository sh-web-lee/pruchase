<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';

$reTime=15;
$reduceNum=102069325;
$buyNum = number_format(ceil(microtime_float()*1000/(1000*$reTime)) - $reduceNum);
?>
<!DOCTYPE html>
<html lang="de">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Smart Defrag PRO ist 77% günstiger und Sie erhalten bessere PC-Leistung - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Roboto:400,900'>
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <a class="logo wrapper" href="https://www.iobit.com" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>  
    <div class="offer">
      <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/>
      <h1>1 KAUFEN, 2 GESCHENKT BEKOMMEN</h1>
      <p>Dieses Angebot gilt nur für kurze Zeit, nur einmal pro Jahr. Nicht mehr verpassen!</p>
      <div class="price">
        <p>Originalpreis: <del>89,93€</del></p>
        <p><strong>19,99<small>€</small></strong></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=de-sd63pcpfamc1999&ref=de_sd63pcpfamc1808&refs=de_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201808-de')">
          JETZT SPAREN  
        </a>
        <p class="people">Schon <b class="buyNum"><?php echo $buyNum;?></b> Deals verkauft</p>
      </div>
      <div id="countdown" class="countdown">
        <div class="clock-item clock-days countdown-time-value">
          <div class="inner">
            <div id="canvas-days" class="clock-canvas"></div>
            <div class="text">
              <strong class="val">0</strong>
              <p class="type-days type-time">Tage</p>
            </div>
          </div>
        </div>
        <div class="clock-item clock-hours countdown-time-value">
          <div class="inner">
            <div id="canvas-hours" class="clock-canvas"></div>
            <div class="text">
              <strong class="val">0</strong>
              <p class="type-hours type-time">Stunden</p>
            </div>
          </div>
        </div>
        <div class="clock-item clock-minutes countdown-time-value">
          <div class="inner">
            <div id="canvas-minutes" class="clock-canvas"></div>
            <div class="text">
              <strong class="val">0</strong>
              <p class="type-minutes type-time">Minuten</p>
            </div>
          </div>
        </div>
        <div class="clock-item clock-seconds countdown-time-value">
          <div class="inner">
            <div id="canvas-seconds" class="clock-canvas"></div>
            <div class="text">
              <strong class="val">0</strong>
              <p class="type-seconds type-time">Sekunden</p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment">
    <div class="wrapper clearfix">
      <dl>
        <dt>60 Tage Geld-Zurück-Garantie</dt>
        <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
      </dl>
      <dl>
        <dt>Sichere Bezahlung</dt>
        <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dd>
      </dl>
      <dl>
        <dt>Millionen aktive Nutzer</dt>
        <dd><img src="<?php echo getStaticUrl('images/millionen.png')?>" alt=""/></dd>
      </dl>
    </div>
  </div>
  <!-- payment end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Warum Smart Defrag PRO?</h2>
      <div class="focus">
        <ul>
          <li>
            <img src="<?php echo getStaticUrl('images/screen-01.png')?>" alt=""/>
            <p>Die PRO-Version defragmentiert Festplatten automatisch und intelligent für mehr PC-Leistung</p>
          </li>
          <li class="two">
            <img src="<?php echo getStaticUrl('images/screen-02.png')?>" alt=""/>
            <p>Bestimmte Dateien, Registrierungsdateien und System-Dateien werden vorm Systemstart defragmentiert.</p>
          </li>
          <li class="three">
            <img src="<?php echo getStaticUrl('images/screen-03.png')?>" alt=""/>
            <p>Die Multithreading-Defragmentierung sowie Konsolidierung sorgen für eine schnellere Defragmentierung.</p>
            <a class="more" href="javascript: void(0);">Mehr erfahren>>></a>
          </li>
        </ul>
        <div class="prev">></div>
        <div class="next">></div>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <h2>Es lohnt sich, die kostenlosen Geschenke zu bekommen!</h2>
      <div class="clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="Protected Folder"/></dt>
          <dd>Mit Protected Folder können Sie Dateien auf einfachste Weise vor Fremdzugriff schützen.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-amc.png')?>" alt="AMC Security PRO"/></dt>
          <dd>Die nützliche Android-App "AMC Security" entfernt Malware, verlängert die Batterielaufzeit und sorgt für mehr Speed.</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Smart Defrag ist ein mehrfach preisgekrönter Defragmentierer</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review clearfix">
      <div class="media fl">
        <h2>Medienbewertungen</h2>
        <div class="list">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="CHIP"/></dt>
            <dd>
              <span class="all-icons">★★★★☆</span>
              <p>
                Mit "Smart Defrag" holen Sie das Beste aus Ihrer Festplatte heraus und beschleunigen Ihren Computer.
              </p>
            </dd>
          </dl>
          <dl class="center">
            <dt><img src="<?php echo getStaticUrl('images/computerbild.png')?>" alt="Computerbild"/></dt>
            <dd>
              <span class="all-icons star">★★★★★</span>
              <p>
                Defragmentieren Sie die Festplatten Ihres Computersund verbessern so unter Umständen die Performance Ihres PCs.
              </p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/netzwelt.png')?>" alt="Netzwelt"/></dt>
            <dd>
              <span class="all-icons">★★★★☆</span>
              <p>
                Es sorgt mit nur wenigen Klicks für eine Optimierung der Lese- und Schreibgeschwindigkeiten des Speicherplatzes.
              </p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="user fr">
        <h2>Userbewertungen</h2>
        <div class="list">
          <div class="box">
            <div class="text fl">
              <h3>Amnon</h3>
              <p>
                Treiber werden permanent defragmentiert, was die Zugriffsgeschwindigkeit erhöht und den Verschleiß reduziert.
              </p>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/amnon.png')?>" alt="Amnon"/></div>
          </div>
          <div class="box center">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"/></div>
            <div class="text fr">
              <h3>Edward Lee Ah Yen</h3>
              <p>
                Ich verwende Smart Defrag Pro, um meine Treiber zu analysieren, zu defragmentieren und Spitzenleistungen zu erhalten.
              </p>
            </div>
          </div>
          <div class="box">
            <div class="text fl">
              <h3>Hans</h3>
              <p>
                Seit der Nutzung dieser fantastischen Software laufen mein Desktop und Laptop immer schneller. 
              </p>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/hans.png')?>" alt="Hans"/></div>
          </div>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Mehr Vorteile von Smart Defrag PRO <br>auf einen Blick</th>
            <th class="itema"><h3>Smart Defrag <br>Free</h3></th>
            <th class="itemb">
              <h3>Smart Defrag <br>PRO</h3>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=de-sd63pcpfamc1999&ref=de_sd63pcpfamc1808&refs=de_purchase_sd"
                 onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201808-de')">
                JETZT SPAREN  
              </a>
              <p>1 Jahr, 3 PCs + Geschenke</p>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="title" colspan="4">Schnellere Systemstarts und ein flotter PC</td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
            <td class="text">Grundlegende Defragmentierung und Optimierung der Festplatte</td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""/></td>
            <td class="text">Defragmentiert Registrierungsdateien für mehr PC-Leistung</td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
            <td class="text">Boot-Time-Defragmentierung für einen schnelleren PC-Start</td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
            <td class="text">Bis zu 200% schnellere Datenzugriffsgeschwindigkeit</td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""/></td>
            <td class="text">Defragmentiert ausgewählte Dateien und Festplatten automatisch und intelligent</td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
            <td class="text">Angepasste Defragmentierung von Dateien während des Systemstarts</td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
            <td class="text">Verwendet DMA, um die Festplatten-Performance zu verbessern</td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
            <td class="text">Schnellere und reibungslosere Spiele mit Spiel-Optimieren</td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
          <tr>
            <td class="title" colspan="4">Optimaler Service von IObit</td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
            <td class="text">Automatische Updates auf die neuste Version</td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""/></td>
            <td class="text">Kostenloser technischer Support 24/7</td>
            <td class="itema"><i class="all-icons circle">√</i></td>
            <td class="itemb"><i class="all-icons yellow">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th class="text" colspan="2"></th>
            <th class="itema"><h3>Smart Defrag <br>Free</h3></th>
            <th class="itemb">
              <div class="price">
                <p><img src="<?php echo getStaticUrl('images/price.png')?>" alt="19,99€"/> <del>89,93€</del></p>
                <p>1 Jahr, 3 PCs + Geschenke</p>
                <a class="buybtn"
                   href="https://www.iobit.com/buy.php?product=de-sd63pcpfamc1999&ref=de_sd63pcpfamc1808&refs=de_purchase_sd"
                   onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase201808-de')">
                  JETZT SPAREN
                </a>
                <p class="people">Schon <b class="buyNum"><?php echo $buyNum;?></b> Deals verkauft</p>
              </div>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- comparison end -->

    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Hinweis</dt>
      <dd>
        * Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
      </dd>
      <dd>* Daten können sich system- oder computerabhängig ändern.</dd>
      <dd>* Lizenz für die Vollversion von AMC Security mit in-app Werbung</dd>
    </dl>
    <!-- annotation end -->
  </div>

  <!-- footer start -->
    <div class="footer">
      <div class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
    </div>
  <!-- footer end --> 

  <!-- floatlayer start --> 
  <div class="floatlayer">
    <h2>3 FÜR 1</h2>
    <ul>
      <li class="gift">Geschenke</li>
      <li class="comment">Reviews</li>
      <li class="free">Free vs PRO</li>
      <li class="backtotop"><i class="all-icons">↑</i> TOP</li>
    </ul>
  </div>
  <!-- floatlayer end --> 
<script type="text/javascript">
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime?>&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 15000);
      }
    });
  }
  setTimeout('getBuyNum()', 15000);
</script>
<script src="<?php echo getStaticUrl('script/kinetic.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.final-countdown.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>
<script type="text/javascript">  
$('document').ready(function() {
  $('#countdown').final_countdown({
    'start': 20151019,
    'end': 30151019,
    'now': 20151019        
  });
});
</script>
</body>
</html>