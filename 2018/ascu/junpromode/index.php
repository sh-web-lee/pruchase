<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';

	//创建浮点计算，取 购买人数 及 剩余礼品数，根据情况选择使用
	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}

	// 剩余礼品数
  $reTime=15;
  $packsNum = ceil(microtime_float()*1000/(1000*$reTime));
  //礼品数最大值
  $packsCount=199;
  $packsNum = $packsCount-($packsNum%$packsCount);

  $reduceNum=102052325;
  $buyNum = number_format(ceil(microtime_float()*1000/(1000*$reTime)) - $reduceNum);

  if ($_GET['action'] == 'getPacks'){
      echo $packsNum;
      exit;
  }
?>

<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Ab jetzt sparen Sie bis zu 76% auf Advanced SystemCare Ultimate. 丨IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- sale -->
<img class="sale" src="<?php echo $pResUrl;?>images/sale.png" alt="">
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <!-- head -->
      <h1 class="head">BLITZ DEAL! NICHT VERPASSEN!</h1>
      <!-- subhead -->
      <p class="countdown" id="countdown">
        Restzeit:
        <strong>00</strong>
        Tage
        <strong>00</strong>
        Stunden
        <strong>00</strong>
        Minuten
        <strong class="second">000</strong>
        Sekunden
      </p>
      <!-- ascu content -->
      <div class="content container clearfix">
        <!-- rabatt:50 -->
        <div class="rabatt-50 left">
          <img class="rabatt50-ascu left" src="<?php echo $pResUrl; ?>images/rabatt50-ascu.png" alt="">
          <img class="rabatt50 right" src="<?php echo $pResUrl; ?>images/rabatt50.png" alt="">
          <div class="clear"></div>
          <h3 class="rabatt-product">Advanced SystemCare Ultimate 11</h3>
          <h4 class="rabatt-price"><strong>29</strong>,99€ <del>59,99€</del></h4>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-ascu113pc2999&ref=de_au11purchase1806&refs=de_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase201806-de')">
            <i></i>
            <span>JETZT KAUFEN</span>
          </a>
        </div>
        <!-- rabatt:70 -->
        <div class="rabatt-70 right">
          <img class="rabatt70 left" src="<?php echo $pResUrl; ?>images/rabatt70.png" alt="">
          <img class="rabatt70-ascu right" src="<?php echo $pResUrl; ?>images/rabatt70-ascu.png" alt="">
          <div class="clear"></div>
          <h3 class="rabatt-product">Advanced SystemCare Ultimate 11</h3>
          <p class="rabatt70-pf">Protected Folder & Smart Defrag Pro</p>
          <h4 class="rabatt-price"><strong>29</strong>,99€ <del>129,84€</del></h4>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=de-ascu113pcpfsd2999&ref=de_au11pfsdpurchase1806&refs=de_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase201806-de')">
            <i></i>
            <span>JETZT KAUFEN</span>
          </a>
          <p class="attention">Von <span class="buyNum"><?php echo $buyNum; ?></span> Personen gekauft</p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- payments start -->
  <div class="payments container">
    <div class="wrapper">
      <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
    </div>
  </div>
  <!-- payments end -->
  <!-- ascu-message start -->
  <div class="ascu-message wrapper clearfix">
    <h2> Mit Advanced SystemCare Ultimate bekommen Sie vollkommenden PC-Schutz.</h2>
    <p class="ascu-details top left">
      Erkennt unbefugten Zugriff auf Ihr System und<br>
      blockiert potenzielle Ransomware-Angriffe.
    </p>
    <p class="ascu-details top right">
      Überwacht RAM, Festplatten und CPU in<br>
      Echtzeit und macht Ihren PC wieder flott.
    </p>
    <p class="ascu-details bottom left">
      Verhindert die Modifikation zur Startseite & DNS,<br>
      Popup-Anzeigen und bösartige Verfolgung.
    </p>
    <p class="ascu-details bottom right">
      Bereinigt Junk-Dateien & private Informationen<br>
      und beschleunigt die Internet-Geschwindigkeit.
    </p>
    <div class="clear"></div>
    <a class="anchor" href="javascript:void(0);" onclick="goTaget($('.comparison'))">
      ASCU und andere Antivirus-Programme vergleichen >
    </a>
  </div>
  <!-- ascu-message end -->
  <!-- gift-box strat -->
<div class="gift-box ">
  <div class="wrapper">
    <h2>Kostenlose Geschenke für die Nutzer von Advanced SystemCare Ultimate 11</h2>
    <div class="box">
      <img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt="">
      <dl>
        <dt>
          <h3>Smart Defrag 6 PRO</h3>
          <strong>0€</strong> <del>29,90€</del>
        </dt>
        <dd>Defragmentiert die Festplatten und verbessert Ihre PC-Leistung</dd>
      </dl>
    </div>
    <div class="box pf">
      <img src="<?php echo $pResUrl; ?>images/pf-gift.png" alt="">
      <dl>
        <dt>
          <h3>Protected Folder</h3>
          <strong>0€</strong> <del>39,95€</del>
        </dt>
        <dd>Schützt Ihre persönlichen Dateien gegen Diebstahl</dd>
      </dl>
    </div>
  </div>
</div>
  <!-- gift-box end -->
  <!-- award start -->
  <div class="awrad wrapper">
    <h3>Von diesen Medien empfohlen und ausgezeichnet</h3>
    <img src="<?php echo $pResUrl; ?>images/award.png" alt="">
  </div>
  <!-- award end -->
  <!-- review start -->
  <div class="review wrapper">
    <div class="content ">
      <dl class="active">
        <dt><h3>Media Review</h3></dt>
        <dd>
          <h4>Mit „Advanced SystemCare Ultimate“ schützen, analysieren, reparieren und optimieren Sie Windows und Ihren PC. </h4>
        </dd>
        <dd>Die Tool-Sammlung sucht und beseitigt überflüssige Dateien, fehlerhafte Registry-Einträge und Malware-Infektionen. Darüber hinaus ist eine komplette Antivirensoftware enthalten.</dd>
      </dl>
      <dl>
        <dt><h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„Advanced SystemCare Ultimate ist die neue Lösung. Der große Gewinner! “</h4>
        </dd>
        <dd>„Advanced SystemCare Ultimate ist die neue Lösung. Der große Gewinner! Mein Computer ist immer auf dem aktuellsten Stand und läuft superschnell. Wie oft mit anderen Produkten, habe ich hier keinen regelmäßigen Fluss an Problemen.“</dd>
      </dl>
      <dl>
        <dt><h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„Ich empfehle Advanced SystemCare Ultimate als ihre Antiviren- und Systemoptimierungssoftware.“</h4>
        </dd>
        <dd>„Mithilfe der letzten Version von Advanced SystemCare Ultimate hatte ich keine Probleme mit dem System oder Malware usw. Die neue Version bietet mehrere Features, um meinen Laptop 5x schneller zu machen, als zuvor. “</dd>
      </dl>
      <dl>
        <dt><h3>Kundenbewertung</h3></dt>
        <dd>
          <h4>„Eines der simpelsten und dennoch effektiven Programme, die ich zur Pflege aller meiner drei Computer benutze.“</h4>
        </dd>
        <dd>„Als ich die Inhalte von Advanced SystemCare Ultimate sah, wusste ich, dass ich es haben musste. Ich wurde nicht enttäuscht. Es ist eines der simpelsten und dennoch effektiven Programme, die ich zur Pflege aller meiner drei Computer benutze.“</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li class="current">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/computer.png" alt="Computerbild"></div>
        <p>Computerbild</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett"></div>
        <p>Rod Garnett</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"></div>
        <p>Dareen Lim</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="Russell Peck"></div>
        <p>Russell Peck</p>
      </li>
    </ul>
  </div>
  <!-- review end -->
  <!-- comparison start -->
  <div class="comparison wrapper">
    <h2>Warum wählen Sie Advanced SystemCare Ultimate 11 aus?</h2>
    <h3><span>Besserer Schutz</span>, und <span>keine Performance Lag mehr</span>. Sehen Sie unter Vergleich</h3>
    <table>
      <thead>
        <tr>
          <th class="text"></th>
          <th class="ascu"><div>Advanced SystemCare <br> Ultimate</div></th>
          <th class="avc"><div>AVG <br> Anti-virus</div></th>
          <th class="nor"><div>Norton Security <br> Deluxe</div></th>
          <th class="ava"><div>Avast! Pro <br> Antivirus</div></th>
          <th class="mic"><div>Microsoft <br> Security Essentials</div></th>
          <th class="mic mca"><div>McAfee® AntiVirus</div></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="text">Erkennungsrate</td>
          <td class="ascu">Sehr hoch </td>
          <td class="avc">Normal</td>
          <td class="nor">Hoch </td>
          <td class="ava">Normal </td>
          <td class="mic">Hoch</td>
          <td class="mic">Hoch</td>
        </tr>
        <tr>
          <td class="text">Leistungsverzögerung</td>
          <td class="ascu">Nein  </td>
          <td class="avc"> Ja</td>
          <td class="nor"> Ja </td>
          <td class="ava"> Ja </td>
          <td class="mic"> Ja</td>
          <td class="mic"> Ja</td>
        </tr>
        <tr>
          <td class="text">Top PC-Reinigung und Optimierung</td>
          <td class="ascu"><img src="<?php echo $pResUrl; ?>images/green.png" alt="">  </td>
          <td class="avc"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
          <td class="nor"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
          <td class="ava"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
          <td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
          <td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
        </tr>
        <tr>
          <td class="text">Über 20 extra Tools für die PC-Leistung</td>
          <td class="ascu"><img src="<?php echo $pResUrl; ?>images/green.png" alt="">  </td>
          <td class="avc"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
          <td class="nor"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
          <td class="ava"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
          <td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
          <td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
        </tr>
      </tbody>
    </table>
    <dl>
      <dt>Unübertroffene Erkennungsrate und maximaler Schutz</dt>
      <dd>
        Reinigung von versteckte und hartnäckige Viren, Trojaner, Würmer, Spyware, 
        Adware und verschiedenen Malware mit nur einem Klick. 
        Advanced SystemCare Ultimate 11 bietet auch einen always-on, 
        automatisierten und proaktiven Schutz gegen alle Arten von Internet-Bedrohungen mit schnellen Aktualisierung der Virendatenbank.
      </dd>
    </dl>
    <dl>
      <dt>Genießen Sie die zuversichtliche Sicherheit ohne Verlangsamung des Systems</dt>
      <dd>
        Das System läuft mit seiner Spitzengeschwindigkeit ohne Leistungsverzögerung aufgrund unserer branchenführenden Internet-Sicherheitstechnologie.
      </dd>
    </dl>
    <dl>
      <dt>Sicheres Surfen, Suchen, Herunterladen und Teilen mit Vertrauen</dt>
      <dd>
        Proaktive Virus Control-Technologie überwacht Verhalten von Prozess in Echtzeit, scannt Dateien, 
        die durch E-Mail geteilt wird und blockiert mögliche Bedrohungen. Während Sie Ihren PC benutzen, 
        garantiert die unübertroffene Erkennungsrate Ihnen eine sichere Umgebung.
      </dd>
    </dl>
    <dl>
      <dt>Haben Sie eine hohe abgestimmte Leistung und genießen Sie ein neues PC-Gefühl</dt>
      <dd>
        Bereits bewährte leistungsstarke PC Tune-up-Fähigkeit entfesselt die volle Leistung Ihres PC. 
        Mit Echtzeit-Optimierung und ActiveBoost-Merkmal werden System-Ressourcen intelligent verwaltet, 
        und dann haben Sie einen super-schnellen PC.
      </dd>
    </dl>
  </div>
  <!-- comparison end -->
  <!-- footer start -->
  <div class="footer">
    <div class="payment wrapper clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
        <dd><strong>Zufriedenheitsgarantie</strong></dd>
        <dd>60-Tage-Geld-zurück-Garantie</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
        <dd><strong>Zahlungssicherheit</strong></dd>
        <dd>Ihre Zahlung ist 100% sicher</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/shop-box.png" alt=""></dt>
        <dd><strong>Schnelle Aktivierung</strong></dd>
        <dd>Sie erhalten bald einen Aktivierungs- <br> code nach dem Kauf.</dd>
      </dl>
      <dl class="servicion">
        <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
        <dd><strong>Kundendienst</strong></dd>
        <dd>Kostenloser technischer Support 24/7</dd>
      </dl>
    </div>
    <dl class="annotation wrapper">
      <dt>Notiz:</dt>
      <dd>
      *.Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - 2018 IObit. Alle Rechte vorbehalten</p>
  </div>
  <!-- footer end -->
<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
  <div class="wrapper clearfix">
    <ul class="left">
      <li data-role="ascu">
        Advanced SystemCare Ultimate 11
        <span>29,99€</span>
        <del>59,99€</del>
      </li>
      <li class="active" data-role="ascu-geschenk">
        Advanced SystemCare Ultimate 11 & Geschenke
        <span>29,99€</span>
        <del>129,84€</del>
      </li>
    </ul>
    <div class="floatlayer-box right">
      <!-- rabatt70 -->
      <div class="clearfix show" id="ascu-geschenk">
        <img class="left" src="<?php echo $pResUrl; ?>images/ascu-geschenk-rabatt.png" alt="">
        <a class="buybtn right" href="https://www.iobit.com/buy.php?product=de-ascu113pcpfsd2999&ref=de_au11pfsdpurchase1806&refs=de_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase201806-de')">
            <i></i>
            <span>JETZT KAUFEN</span>
          </a>
      </div>
      <!-- rabatt50 -->
      <div class="clearfix" id="ascu">
        <img class="left" src="<?php echo $pResUrl; ?>images/ascu-rabatt.png" alt="">
        <a class="buybtn right" href="https://www.iobit.com/buy.php?product=de-ascu113pc2999&ref=de_au11purchase1806&refs=de_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase201806-de')">
            <i></i>
            <span>JETZT KAUFEN</span>
          </a>
      </div>
    </div>
  </div>
</div>
<!-- floatlayer end -->


<script>
  window.onload = function () {

    //userreview
    $(".users li").on("mouseover", function (event) {
      let num = $(this).index();
      $(".users li").eq(num).addClass('current').siblings().removeClass('current');
      $(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
    });

    //floatlayer change item
    $(".floatlayer ul li").on("click", function () {
      $(this).addClass('active').siblings().removeClass('active');
      let thisRole = $(this).attr("data-role");
      // console.log(thisRole);
      $("#" + thisRole).addClass('show').siblings().removeClass('show');
    });

  };

  //anchor
	function goTaget(target) {
		let Theigth = target.offset().top - 10;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	}

  //scroll
  $(window).on('scroll', function () {
		let scrollHeight = $(".banner .buybtn:last").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
        $('#floatlayer').addClass('on');
    } else {
        $('#floatlayer').removeClass('on');
    }
    if ($(window).scrollTop() > 200) {
      $('.ascu-details').addClass('on');
    }
  });

  //  countdown
  $(function () {
    timeInit();
  });

  let countdown = function (countdown){
    getCycleCountdown(countTime);
    $(countdown).eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
    setTimeout("countdown('"+ countdown +"')", 1);
  };

  function getCycleCountdown (endTime) {
    var datetime = timeCountDown(endTime);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
  }

  function cSet(cName,cVal){
    var Days = 2;
    var exp = new Date();
    exp.setTime(exp.getTime() + Days*24*60*60*1000);
    document.cookie = cName + "="+ escape (cVal) + ";expires=" + exp.toGMTString();
  }

  function timeInit(){
    var date = new Date();
    var cName = "deascumod" + date.getDate();
    var arr = document.cookie.match(new RegExp("(^| )" + cName + "=([^;]*)(;|$)"));
    var nowTime=Math.floor(date.getTime()/1000);
    if (arr == null) {
      countTime=nowTime+3600*10;
      cSet(cName,countTime);
    } else {
      countTime=arr[2];
    }
    countdown(("#countdown strong"));
  }

  function timeCountDown(startTimestamp) {
    var dateObj = new Date();
    var time = dateObj.getTime().toString().substring(0, 10);
    var remainingTime = startTimestamp - time;
    while (remainingTime<=0){
      remainingTime+=3600*10;
    }
    if (remainingTime > 0) {
      var d = Math.floor(remainingTime / (24 * 60 * 60));
      var h = Math.floor(remainingTime / (60 * 60) % 24);
      var i = Math.floor(remainingTime / 60 % 60);
      var s = Math.floor(remainingTime % 60);
      return [d, h, i, s];
    } else {
      return [0, 0, 0, 0];
    }
  }

  //packsNum
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
</body>
</html>
