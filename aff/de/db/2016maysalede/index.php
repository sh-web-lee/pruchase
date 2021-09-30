<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }

  $buyNum = ceil(microtime_float()*1000/20000) - 69041325;
  
  $packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Sparen Sie 70% auf Driver Booster 4 PRO& haben Sie den zusätzlichen Schutz kostenlos!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script>
  function decreasingPacks() {
    $.ajax({
      type: "GET",
      url: "maysalede.php",
      data: "action=getPacks&r=" + Math.random(),
      success: function(packs) {
        $('#packs').html(packs);
        setTimeout('decreasingPacks()', 10000);
      }
    });
  }
  setTimeout('decreasingPacks()', 10000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- header start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>FINAL-SALE bis 70% </h1>
        <p>Jetzt kaufen und profitieren Sie von dem <strong>70%</strong> Preisnachlass auf DB PRO!</p>
      </div>
      <!-- time -->
      <ul id="countdown" class="countdown">
        <li>00</li>
        <li>00</li>
        <li>00</li>
        <li>000</li>
      </ul>
      <!-- panel -->
      <div class="panel clearfix">
        <div class="redbox fl">
          <div class="top">
            <h2>PRIVATANWENDER</h2>
            <p><strong>3</strong> PCs, 1 Jahr</p>
            <img src="<?php echo $pResUrl; ?>images/header_dbpcs.png">
          </div>
          <dl>
            <dt>Behebt und updatet über 400.000 Treiber für die ganze Familie</dt>
            <dd>
              <strong>26,99€ </strong>
              <del> 89,99€</del>
            </dd>
            <dd>
              <a class="buybtn redbtn" href="http://www.iobit.com/buy.php?product=de-db43pc-aff" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb2016maysalede');">
                <i class="all-icons">cart</i>
                JETZT KAUFEN
              </a>
            </dd>
          </dl>
        </div>
        <div class="graybox fl">
          <div class="top">
            <h2>PRIVATANWENDER</h2>
            <p>1 PC, 1 Jahr</p>
            <img src="<?php echo $pResUrl; ?>images/header_dbpc.png">
          </div>
          <dl>
            <dt>Gibt Ihnen optimale PC Leistung</dt>
            <dd>
              <strong>24,99€ </strong>
              <del> 39,99€</del>
            </dd>
            <dd>
              <a class="buybtn graybtn" href="http://www.iobit.com/buy.php?product=de-db41pc-aff" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb2016maysalede');">
                <i class="all-icons">cart</i>
                JETZT KAUFEN
              </a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- header end -->

  <div class="wrapper">
    <!-- intro start -->
    <div class="intro clearfix">
      <h2>Optimieren Sie Ihre PC-Leistung mit den aktuellsten Treibern!</h2>
      <p>
        <i class="all-icons">bell</i> Nur noch <strong id="packs"><?php echo $packsNum; ?></strong> erhältlich!
      </p>
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl; ?>images/intro_db.jpg"></dt>
        <dd><h3>Warum wählen Sie Driver Booster 4 aus?</h3></dd>
        <dd>
          <span class="intro-icons">1、</span>Unterstützt über 400.000 Treiber und Geräte!
        </dd>
        <dd>
          <span class="intro-icons two">2、</span>Erweiterte Spiel-Komponenten-Datenbasis!
        </dd>
        <dd>
          <span class="intro-icons three">3、</span>Erkennt und repariert fehlende und fehlerhafte Treiber!
        </dd>
        <dd>
          <span class="intro-icons four">4、</span>Alle Treiber aus Driver Booster 4 haben die WHQL-Tests bestanden!
        </dd>
      </dl>
    </div>
    <!-- intro end -->

    <!-- media start -->
    <div class="media">
      <h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
      <img src="<?php echo $pResUrl; ?>images/media.jpg">
    </div>
    <!-- media end -->

    <!-- media-rev start -->
    <dl class="media-rev clearfix">
      <dt>
        <strong>Media Review</strong>
        <img src="<?php echo $pResUrl; ?>images/chlp.png">
      </dt>
      <dd>
        “Der kostenlose "Driver Booster " von IObit überprüft Ihre Treiber auf Aktualität und bringt diese bei Bedarf per Mausklick auf den neuesten Stand. ”
      </dd>
      <dd>
        “Häufig werden Treiber nicht automatisch aktualisiert oder erst gar nicht installiert. Der "Driver Booster" kümmert sich um die Aktualität Ihrer Treiber und sorgt so für ein optimales Setup.”
      </dd>
    </dl>
    <!-- media-rev end -->

    <!-- payment start -->
    <div class="payment clearfix">
      <dl>
        <dt>Akzeptierte Zahlungsmittel</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/payment.jpg"></dd>
      </dl>
      <dl>
        <dt>Geld-zurück-Garantie</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/refoud.png"></dd>
      </dl>
      <dl>
        <dt>Zuverlässiger Service</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/pay_service.jpg"></dd>
      </dl>
    </div>
    <!-- payment end -->

    <!-- user-rev start -->
    <div class="user-rev" id="user_rev">
      <h3>Kundenbewertung</h3>
      <div class="content">
        <dl class="active">
          <dd>
            <h4>
              "Driver Booster hat das für mich mit einem einfachen Mausklick erledigt. 19 Treiber wurden innerhalb kürzester Zeit aktualisiert."
            </h4>
          </dd>
          <dd>
            "Ich bin sehr zufrieden mit Driver Booster. Ich habe schon mit einigen dieser Programme Erfahrungen gemacht, aber die Suche nach Treibern musste ich trotzdem immer selbst übernehmen. Driver Booster hat das für mich mit einem einfachen Mausklick erledigt. Der ganze Vorgang hat mich sehr beeindruckt, vor allem das Ergebnis. 19 Treiber wurden innerhalb kürzester Zeit aktualisiert."
          </dd>
        </dl>
        <dl>
          <dd>
            <h4>
              "10 meiner Treiber waren veraltet und durch Driver Booster wurden alle wieder auf den neuesten Stand gebracht."
            </h4>
          </dd>
          <dd>
            "WOW! Ist das ein tolles Programm. Ich habe meinen Laptop von einem Dual-Core auf einen Quad-Core umgerüstet und hatte Probleme bei der Aktualisierung der installierten Hardware. 10 meiner Treiber waren veraltet und durch Driver Booster wurden alle wieder auf den neuesten Stand gebracht. Mein Laptop ist jetzt auf dem neusten Stand und läuft absolut reibungslos. Große Klasse! Ich werde dieses Programm definitiv meiner Familie und meinen Freunden empfehlen."
          </dd>
        </dl>
        <dl>
          <dd>
            <h4>
              "Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"
            </h4>
          </dd>
          <dd>
            "Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"
          </dd>
        </dl>
        <dl>
          <dd>
            <h4>
              "Driver Booster hat zwei wichtige Treiber-Updates gefunden, während das andere Programm überhaupt keine Updates gefunden hat."
            </h4>
          </dd>
          <dd>
            "Ich habe Driver Booster erst kürzlich installiert und finde es, wie auch schon die anderen Produkte von IObit, einfach großartig. Ich hatte bereits ein ähnliches Programm installiert, aber Driver Booster hat zwei wichtige Treiber-Updates gefunden, während das andere Programm überhaupt keine Updates gefunden hat. Die benötigten Updates konnte ich innerhalb weniger Sekunden herunterladen. Ich bin mit diesem Produkt wirklich sehr zufrieden!"
          </dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active"><img src="<?php echo $pResUrl; ?>images/vince-lewis.jpg" alt="Vince Lewis">Vince Lewis</li>
        <li><img src="<?php echo $pResUrl; ?>images/mike-goggans.jpg" alt="Mike Goggans">Mike Goggans</li>
        <li><img src="<?php echo $pResUrl; ?>images/wayne-bowler.jpg" alt="Wayne Bowler">Wayne Bowler</li>
        <li><img src="<?php echo $pResUrl; ?>images/leslie-hutton.jpg" alt="Leslie Hutton">Leslie Hutton </li>
      </ul>
    </div>
    <!-- user-rev end -->
  </div>

  <!-- center-banner start -->
  <div class="center-banner">
    <div class="wrapper clearfix">
      <h3>Jetzt kaufen und sparen Sie bis zu 70% auf DB 4 PRO</h3>
      <dl class="show">
        <dt><img src="<?php echo $pResUrl; ?>images/center_db.png"></dt>
        <dd class="first active" data-name="pcs" data-url="http://www.iobit.com/buy.php?product=de-db43pc-aff">
          <span>
            <i class="all-icons">×</i>
            1 Jahr/ 3 PCs  
          </span>
          <strong><ins>26,99€</ins> <del>89,99€</del></strong>
        </dd>
        <dd data-name="pc" data-url="http://www.iobit.com/buy.php?product=de-db41pc-aff">
          <span>
            <i class="all-icons">×</i>
            1 Jahr/ 1 PC 
          </span>
          <strong><ins>24,99€</ins> <del>39,99€</del></strong>
        </dd>
      </dl>
      <dl class="total">
        <dt><strong class="price">26,99€ </strong></dt>
        <dd>
          <a class="buybtn redbtn" href="http://www.iobit.com/buy.php?product=de-db43pc-aff" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb2016maysalede');">
            <i class="all-icons">cart</i>
            JETZT KAUFEN
          </a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- center-banner end -->

  <div class="wrapper">
    <!-- backtop start -->
    <div class="backtop">
      <a href="javascript:viod(0);" onclick="goTarget($('.header'))">
        <i class="all-icons">︿</i>
        Zurück nach oben
      </a>
    </div>
    <!-- backtop end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>
        *.Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
      </dd>
      <dd>
        *.Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.
      </dd>
    </dl>
    <!-- annotation end -->

  </div>

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
  <!-- footer end -->

  <script>    
    //userreview 
    $(".users li").mouseover(function(event) {
      var num = $(this).index();
      $(".users li").eq(num).addClass('active').siblings().removeClass('active');
      $(".user-rev .content > dl").eq(num).addClass('active').siblings().removeClass('active');
    });
      
    $("[data-name^='pc']").on("click",function(){
      var dataName = $(this).attr("data-name");
      var dataUrl = $(this).attr("data-url");
      var price = $(this).find("ins").text();
      $("[data-name=\'" + dataName + "\']").addClass("active"); 
      $("[data-name^='pc']:not([data-name=\'" + dataName + "\'])").removeClass("active");
      $(".center-banner .total .price").text(price);
      $(".center-banner .total .buybtn").attr("href",dataUrl);
      return false;
    });

    function goTarget(target,yoffset) {
      if(!yoffset) yoffset = 0;
      var Theigth = target.offset().top - yoffset;
      $("html, body").animate({scrollTop: Theigth}, 'slow');
    }

    //count down
    function cycleCountdown(){
      var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
      var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
      d = MApp(2.2).packages.zeroize(datetime[0], 2);
      h = MApp(2.2).packages.zeroize(datetime[1], 2);
      i = MApp(2.2).packages.zeroize(datetime[2], 2);
      s = MApp(2.2).packages.zeroize(datetime[3], 2);
      mi = MApp(2.2).packages.zeroize(datetime[4], 3);
      document.getElementById('countdown').innerHTML = '<li>'+h+'<span>Std</span><span class="colon">:</span>'+'</li><li>'+ i+'<span>Min</span><span class="colon">:</span>'+'</li><li>'+ s+'<span>Sek</span><span class="colon">:</span>'+'</li><li class="last">'+ mi+'<span>Ms</span></li>'+'<li><sup>*</sup></li>';
      setTimeout('cycleCountdown()', 1);
    }
    cycleCountdown();
  </script>
</body>
</html>