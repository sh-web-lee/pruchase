<?php //  初始化
  error_reporting(0);
  define('IObit', 'IObit');
  if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }
  include $pRootUrl . 'include/common.inc.php';
  
  function microtime_float() {
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  
  $packsNum = ceil(microtime_float() * 2000 / 20000);
  $packsNum = 360 - ($packsNum % 360);
  if ($_GET['action'] == 'getPacks') {
    echo $packsNum;
    exit ;
  }
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <title>Sparen Sie 70% auf Driver Booster 3 PRO & haben Sie den zusätzlichen Schutz kostenlos!</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
    <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
   	<script type="text/javascript">
     	function decreasingPacks() {
        $.ajax({
          type: "GET",
          url: "febsalede.php",
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
    <!-- top -->
    <div class="top">
      <!-- header -->
      <div class="header">
        <div class="wrapper">
        	<a class="logo" href="http://www.iobit.com" target="_blank"><img src="<?php echo $pResUrl; ?>images/logo.png"></a>
          <h1>Der große Final-Sale von IObit hat begonnen!</h1>
          <h2>Jetzt kaufen und profitieren Sie von dem <strong>70%</strong> Preisnachlass bei DB PRO!</h2>
          <img src="<?php echo $pResUrl; ?>images/db-boxshot-header.png">
          <!-- content -->
          <div class="content">
            <div class="product-box big active clearfix" data-name="pcs3" data-url="http://www.iobit.com/buy.php?product=de-aff-db3pc201602">
              <div class="product-info">
                <i></i>
                <dl class="name">
                  <dt>Driver Booster 3 PRO <small>( <span><strong>3</strong> PCs,</span> 1 Jahr)</small></dt>
                  <dd><span><strong>70%</strong><em>sparen</em></span></dd>
                </dl>
                <dl class="price">
                  <dt><strong>26,99€ </strong><del>89,99€</del></dt>
                  <dd>Nur <strong> 0,07€ </strong> pro Tag</dd>
                </dl>
              </div>
              <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-aff-db3pc201602" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb32016febsale');"><i></i>Jetzt kaufen</a>
            </div>
            <div class="product-box small clearfix" data-name="pc1" data-url="http://www.iobit.com/buy.php?product=de-aff-db1pc201602">
              <div class="product-info">
                <i></i>
                <dl class="name">
                  <dt>Driver Booster 3 PRO <small>( <span><strong>1</strong> PC,</span> 1 Jahr)</small></dt>
                  <dd>Nur <strong> 16% </strong> sparen</dd>
                </dl>
                <dl class="price">
                  <dt><strong>24,99€ </strong><del>29,99€</del></dt>
                  <dd></dd>
                </dl>
              </div>
              <a class="buybtn" href="http://www.iobit.com/buy.php?product=de-aff-db1pc201602" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb32016febsale');"><i></i>Jetzt kaufen</a>
            </div>
          </div>
          <!-- end content -->
          <!-- countdown -->
          <div class="countdown">
            <ul class="clearfix" id="counttime">
              <li>00</li>
              <li>00</li>
              <li>00</li>
              <li class="end">000</li>
            </ul>
            <sup>*</sup>
          </div>  
          <!-- end countdown -->
        </div>
      </div>
      <!-- end header -->  
    </div>    
    <!-- end top -->
    
    <!-- main -->
    <div class="main">
    	<div class="wrapper">
    		<!-- benefits -->
    		<div class="benefits clearfix">
    			<h2>Optimieren Sie Ihre PC-Leistung mit den aktuellsten Treibern!</h2>
    			<span>Nur noch <strong id="packs"><?php echo $packsNum ?></strong> erhältlich!</span>
    			<div class="pic-holder">
    				<img src="<?php echo $pResUrl; ?>images/benefits.jpg">
    				<span>Kompatibel mit Windows 10</span>
    			</div>
    			<div class="list-holder">
    				<dl>
    					<dt>Warum wählen Sie Driver Booster 3 aus?</dt>
    					<dd><img src="<?php echo $pResUrl; ?>images/icon-benefits-01.jpg">Unterstützt Windows 10 vollständig!</dd>
    					<dd><img src="<?php echo $pResUrl; ?>images/icon-benefits-02.jpg">Erweiterte Spiel-Komponenten-Datenbasis!</dd>
    					<dd><img src="<?php echo $pResUrl; ?>images/icon-benefits-03.jpg">Erkennt und repariert fehlende und fehlerhafte Treiber!</dd>
    					<dd><img src="<?php echo $pResUrl; ?>images/icon-benefits-04.jpg">Alle Treiber aus Driver Booster 3 haben die WHQL-Tests bestanden!</dd>
    				</dl>
    				<a href="javascript:;" onclick="goTarget($('#compare'),140);">Erfahren Sie mehr über Pro Edition >></a>
    			</div>
    		</div>
    		<!-- end benefits -->
    		<!-- service -->
    		<div class="service clearfix">
    			<dl class="paypal">
    				<dt>Akzeptierte Zahlungsmittel </dt>
    				<dd><img src="<?php echo $pResUrl; ?>images/paypal.jpg"></dd>
    			</dl>
    			<dl class="moneyback">
            <dt>Geld-zurück-Garantie</dt>
            <dd><img src="<?php echo $pResUrl; ?>images/moneyback.jpg"></dd>
          </dl>
          <dl class="contact">
          	<dt>Zuverlässiger Service</dt>
          	<dd><i class="icon-phone"></i>Kostenloser 24/7 technischer Support</dd>
          	<dd><i class="icon-mail"></i>Live-Chat-Service</dd>
          </dl>
    		</div>
    		<!-- end service -->
    		<!-- awards -->
    		<div class="awards">
    			<h2>Von diesen Medien empfohlen und ausgezeichnet</h2>
    			<img src="<?php echo $pResUrl; ?>images/awards.jpg">
    		</div>
    		<!-- end awards -->
    		<!-- media-review -->
        <dl class="media-review clearfix">
          <dt><strong>Media Review</strong><img src="<?php echo $pResUrl; ?>images/chlp.png"></dt>
          <dd>“Der kostenlose "Driver Booster Free" von IObit überprüft Ihre Treiber auf Aktualität und bringt diese bei Bedarf per Mausklick auf den neuesten Stand. ”</dd>
          <dd>“Häufig werden Treiber nicht automatisch aktualisiert oder erst gar nicht installiert. Der "Driver Booster" kümmert sich um die Aktualität Ihrer Treiber und sorgt so für ein optimales Setup.”</dd>
          <dd class="tright"> -Chip.de</dd>
        </dl>
        <!-- end media-review -->
        <!-- user-rev -->
        <div class="user_rev" id="user_rev">
          <h3>Kundenbewertung</h3>
          <div class="content">
            <dl class="active">
              <dd><h4>"Driver Booster hat das für mich mit einem einfachen Mausklick erledigt. 19 Treiber wurden innerhalb kürzester Zeit aktualisiert."</h4></dd>
              <dd>"Ich bin sehr zufrieden mit Driver Booster. Ich habe schon mit einigen dieser Programme Erfahrungen gemacht, aber die Suche nach Treibern musste ich trotzdem immer selbst übernehmen. Driver Booster hat das für mich mit einem einfachen Mausklick erledigt. Der ganze Vorgang hat mich sehr beeindruckt, vor allem das Ergebnis. 19 Treiber wurden innerhalb kürzester Zeit aktualisiert."</dd>
            </dl>
            <dl class="">
              <dd><h4>"10 meiner Treiber waren veraltet und durch Driver Booster wurden alle wieder auf den neuesten Stand gebracht."</h4></dd>
              <dd>"WOW! Ist das ein tolles Programm. Ich habe meinen Laptop von einem Dual-Core auf einen Quad-Core umgerüstet und hatte Probleme bei der Aktualisierung der installierten Hardware. 10 meiner Treiber waren veraltet und durch Driver Booster wurden alle wieder auf den neuesten Stand gebracht. Mein Laptop ist jetzt auf dem neusten Stand und läuft absolut reibungslos. Große Klasse! Ich werde dieses Programm definitiv meiner Familie und meinen Freunden empfehlen."</dd>
            </dl>
            <dl class="">
              <dd><h4>"Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"</h4></dd>
              <dd>"Das ist eines der besten Programme, um Treiber zu aktualisieren. Microsoft hat mir sogar Updates vorgeschlagen, die nicht auf meinem System funktionieren. Dieses Programm wusste dagegen genau, welche Treiber ich brauche, und hat sie ohne Fehler installiert. Es hat einfach perfekt funktioniert und war dabei leicht und intuitiv zu bedienen. Dieses Programm werde ich immer behalten, es hat ganze Arbeit geleistet!"</dd>
            </dl>
            <dl class="">
              <dd><h4>"Driver Booster hat zwei wichtige Treiber-Updates gefunden, während das andere Programm überhaupt keine Updates gefunden hat."</h4></dd>
              <dd>"Ich habe Driver Booster erst kürzlich installiert und finde es, wie auch schon die anderen Produkte von IObit, einfach großartig. Ich hatte bereits ein ähnliches Programm installiert, aber Driver Booster hat zwei wichtige Treiber-Updates gefunden, während das andere Programm überhaupt keine Updates gefunden hat. Die benötigten Updates konnte ich innerhalb weniger Sekunden herunterladen. Ich bin mit diesem Produkt wirklich sehr zufrieden!"</dd>
            </dl>
          </div>
          <ul class="users">
            <li class="active"><img src="<?php echo $pResUrl; ?>images/vince-lewis.jpg" alt="">Vince Lewis</li>
            <li class=""><img src="<?php echo $pResUrl; ?>images/mike-goggans.jpg" alt="">Mike Goggans</li>
            <li class=""><img src="<?php echo $pResUrl; ?>images/wayne-bowler.jpg" alt="">Wayne Bowler</li>
            <li class=""><img src="<?php echo $pResUrl; ?>images/leslie-hutton.jpg" alt="">Leslie Hutton </li>
          </ul>
        </div>
        <!-- user-rev end-->
        <!-- comparison-table  -->
        <div id="compare" class="comparison_table">
          <table width="100%" cellspacing="0" cellpadding="0" border="0">
            <thead>
            <tr>
              <th class="text" colspan="2">Welche Vorteile bietet Ihnen die PRO Edition?</th>
              <th class="itemc">
                Driver Booster Free
              </th>
              <th class="itema">
                <p><b>Driver Booster Pro</b> (1 Jahr, 1 PC)</p>
                <strong>24,99€ </strong><del>29,99€</del>
                <a class="tbbuybtn" href="http://www.iobit.com/buy.php?product=de-aff-db1pc201602" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb32016febsale');">Jetzt kaufen</a>
              </th>
              <th class="itemb">
                <p><b>Driver Booster Pro</b> (1 Jahr, 3 PCs)</p>
                <strong>26,99€ </strong> <del>89,99€</del></a>
                <a class="tbbuybtn" href="http://www.iobit.com/buy.php?product=de-aff-db3pc201602" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb32016febsale');">Jetzt kaufen</a>
              </th>
            </tr>
            </thead>
            <tbody>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
                <td class="virtue">Scannt und erkennt automatisch veraltete, fehlende & fehlerhafte Treiber </td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
                <td class="virtue">Downloaden Sie aktuelle Treiber und updaten Sie veraltete mit einem Klick</td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
                <td class="virtue">Entsperrt die Geschwindigkeitsbeschränkung von Treiber-Updates</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
                <td class="virtue">Erhalten Sie Priorität mehr veraltete& rare Treiber zu updaten</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
                <td class="virtue">Reduziert Einfrieren & Abstürze des Systems für eine bessere Performance</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
                <td class="virtue">Automatische Download- & Installation-Funktion beim Systemleerlauf</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
                <td class="virtue">Sichert automatisch alle Treiber für sichere Wiederherstellung</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
                <td class="virtue">Erhalten Sie Priorität Spiel-Komponenten für bessere Gaming-Erfahrung zu updaten</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
                <td class="virtue">Automatische Updates auf die neuste Version</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
                <td class="virtue">Kostenloser technischer Support 24/7</td>
                <td class="itemb"></td>
                <td class="itema"><img src="<?php echo $pResUrl; ?>images/greenmark.png"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
              <tr>
                <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
                <td class="virtue">Support für den Nutzer von 3 Geräten</td>
                <td class="itemb"></td>
                <td class="itema"></td>
                <td class="itemb"><img src="<?php echo $pResUrl; ?>images/yellowmark.png"></td>
              </tr>
            </tbody>
            <tfoot>
            <tr>
              <th colspan="2"></th>
              <th class="itemc">
                <span class="black">Driver Booster Free</span>
              </th>
              <th class="itema">
                <p><b>Driver Booster Pro</b> (1 Jahr, 1 PC)</p>
                <strong>24,99€ </strong><del>29,99€</del>
                <a class="tbbuybtn" href="http://www.iobit.com/buy.php?product=de-aff-db1pc201602" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb32016febsale');">Jetzt kaufen</a>
              </th>
              <th class="itemb">
                <p><b>Driver Booster Pro</b> (1 Jahr, 3 PCs)</p>
                <strong>26,99€ </strong> <del>89,99€</del></a>
                <a class="tbbuybtn" href="http://www.iobit.com/buy.php?product=de-aff-db3pc201602" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb32016febsale');">Jetzt kaufen</a>
              </th>
            </tr>
            </tfoot>
          </table>
        </div>
        <!-- end comparison-table -->
        <!-- annotation -->
        <div class="annotation">
        	<dl>
            <dt>Note:</dt>
            <dd>*.Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.</dd>
            <dd>*.Daten können auf der Grundlage verschiedenes Systems oder Computers geändert werden.</dd>
          </dl>
        </div>
        <!-- annotation end -->
    	</div>
    </div>
    <!-- end main -->
    <!-- footer -->
    <div class="footer">Copyright © 2005 - 2016 IObit. Alle Rechte vorbehalten</div>
    <!-- end footer -->
    <!-- floatlayer -->
    <div class="floatlayer" id="floatlayer">
      <div class="wrapper">
      	<div class="left clearfix">
      		<h2>Jetzt kaufen und sparen Sie bis zu <strong>70%</strong> auf Driver Booster 3 PRO</h2>
      		<ul>
      			<li class="active" data-name="pcs3" data-url="http://www.iobit.com/buy.php?product=de-aff-db3pc201602"><i></i><span class="name">DB PRO</span><span class="term">1 Jahr/ <em>3</em> PCs</span><strong>26,99€</strong></li>
      			<li class="" data-name="pc1" data-url="http://www.iobit.com/buy.php?product=de-aff-db1pc201602"><i></i><span class="name">DB PRO</span><span class="term">1 Jahr/ <em>1</em> PC</span><strong>24,99€</strong></li>
      		</ul>
      		<a class="buybtn" href="http://www.iobit.com/buy.php?product=de-aff-db3pc201602" onclick="ga('send', 'event', 'dbbuy', 'buy', 'deaffdb32016febsale');"><i></i>Jetzt kaufen</a>
      	</div>
      	<div class="right">
      		<dl>
      			<dt><img src="<?php echo $pResUrl; ?>images/icon-friends.png">von <strong id="packs"><?php echo $packsNum ?></strong> Menschen aktiviert</i></dt>
      			<dd><span>00</span> Std : <span>00</span> Min : <span>00</span> Sek : <span class="end">000Ms</span></dd>
      		</dl>
      	</div>
      </div>
    </div>
    <!-- end floatlayer -->

    <script>
      $(document).ready(function() {
        $(".users li").mouseover(function(event) {
          var num = $(this).index();
          $(".users li").eq(num).addClass('active').siblings().removeClass('active');
          $(".user_rev .content>dl").eq(num).addClass('active').siblings().removeClass('active');
        });
        
        $(window).on('scroll', function () {
          var scrollHeight = $(".header .buybtn:last").offset().top;
          if ($(window).scrollTop() > scrollHeight) {
            $('#floatlayer').addClass('on');
          } else {
            $('#floatlayer').removeClass('on');
          }
        });
        
        $("[data-name^='pc']").on("click",function(){
          var dataName = $(this).attr("data-name");
          var dataUrl = $(this).attr("data-url");
          $("[data-name=\'" + dataName + "\']").addClass("active");
          $("[data-name^='pc']:not([data-name=\'" + dataName + "\'])").removeClass("active");
          $(".floatlayer .buybtn").attr("href",dataUrl);
          return false;
        });
        
        $(".header .product-box .buybtn").on("click",function(envet){
          if ($(this).parent().hasClass("active")) {
            envet.stopPropagation();
          } else{
            event.preventDefault();
          }
        });
        
        
        
        cycleCountdown();
      });

      function goTarget(target,yoffset) {
        if(!yoffset) yoffset = 0;
        var Theigth = target.offset().top - yoffset;
        $("html, body").animate({scrollTop: Theigth}, "slow");
      }

      function cycleCountdown(){
        var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
        var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
        d = MApp(2.2).packages.zeroize(datetime[0], 2);
        h = MApp(2.2).packages.zeroize(datetime[1], 2);
        i = MApp(2.2).packages.zeroize(datetime[2], 2);
        s = MApp(2.2).packages.zeroize(datetime[3], 2);
        mi = MApp(2.2).packages.zeroize(datetime[4], 3);
        $("#counttime li").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
        $("#floatlayer .right dd span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi + "Ms");
        setTimeout('cycleCountdown()', 1);
      }
    </script>
  </body>
</html>