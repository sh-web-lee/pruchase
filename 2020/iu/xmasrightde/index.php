<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1].'-'.$matches[2];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/Normalize.css" type="text/css">
  <link rel="stylesheet" href="<?php echo $pResUrl; ?>static/css/common.css" type="text/css">
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/swiper.min.css"> -->
  <!-- <link rel="stylesheet" href="<?= $pResUrl; ?>static/css/animate.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
  <title> Sparen Sie heute bis zu 85% auf IObit Uninstaller PRO - IObit</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <nav>
    <div class="logo"><a href="https://www.iobit.com/de/index.php" target="_blank" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2012-de')"><img src="<?= $pResUrl; ?>static/img/LOGO.png" alt=""></a>
    </div>
    <img src="<?= $pResUrl; ?>static/img/wordbd.png" alt="">
    <div class="book clearfix">
      <div class="one left ">
        <h3>Standard</h3>
        <p style="text-align: right;">
          19<span style="font-size: 18px;">,99€</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">39,95€</i>
        </p>
        <div style="text-align: left;">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <a href="https://www.iobit.com/buy.php?product=de-iu103pc1999&ref=de_iu103pcpurchase2012xr<?= $refStr; ?>&refs=de_purchase_iu">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcsinglepurchase2012xr-de')">Jetzt kaufen</button>
        </a>
      </div>
      <div class="two left">
        <div class="two-up">
          <h3>Weihnachtsangebot</h3>
          <p style=" padding-left: 27%;text-align: left;">
            <img src="<?= $pResUrl; ?>static/img/time.png" alt="">
            <span>Restzeit</span>
            <i id="timeout">00:11:24:326</i>
          </p>
        </div>
        <p style="text-align: right;font-size: 60px; font-weight: 600;margin-right: 20px;">
          16<span style="font-size: 22px;">,99€</span> <i style="font-size: 22px; color: #838395;text-decoration: line-through;">109,89€</i>
        </p>
        <div style="text-align: left;margin-left: 25px;margin-top: -19px;">
          <img src="<?= $pResUrl; ?>static/img/box.png" alt="">
        </div>
        <a href="https://www.iobit.com/buy.php?product=de-iu10pfsd1699&ref=de_iu103pcpfsdsale2012xr<?= $refStr; ?>&refs=de_purchase_iu">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcbundlepurchase2012xr-de') ">
            Jetzt kaufen
          </button>
        </a>
        <img src="<?= $pResUrl; ?>static/img/UITVERKOCHT.png" alt="" style="display: none;" id="post">
      </div>
      <img src="<?= $pResUrl; ?>static/img/pplay.png" alt="" style=" bottom: -125px;
      position: absolute;
      z-index: 999;
      left: -64px;">
    </div>
  </nav>
  <aside>
    <h2 style="text-align: center;"><img src="<?= $pResUrl; ?>static/img/word.png" alt=""></h2>
    <div class="feature wrapper clearfix">
      <!-- computer -->
      <div class="computer">
        <div class="screen">
          <div class="list clearfix">
            <img src="<?= $pResUrl; ?>static/img/num1.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num2.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num3.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num4.png" alt="">
            <img src="<?= $pResUrl; ?>static/img/num5.png" alt="">
          </div>
        </div>
      </div>
      <!-- ul -->
      <div class="message">
        <ul>
          <li>
            <b>Entfernt</b> alle unerwünschte und hartnäckige Software leistungsstark.
          </li>
          <li>
            <b>Intelligente</b> Erkennung und Entfernung von Bundleware.
          </li>
          <li>
            <b>Aktualisiert</b> einfach alle wichtige Software mit einem Klick auf die neueste Version.
          </li>
          <li class="last">
            <b>Reinigt</b> Datenreste und aktualisiert sich automatisch.
          </li>
        </ul>
        <!-- active -->
        <span></span>
      </div>
    </div>
  </aside>
  <article id="arti">
    <div class="art">
      <div class="num1">
        <img src="<?= $pResUrl; ?>static/img/twobox.png" alt="">
      </div>
      <div class="num2">
        <p>
          <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          Smart Defrag PRO
        </p>
        <i>hält Ihre Festplatte und SSD im perfekten Zustand!</i>
        <p> <img src="<?= $pResUrl; ?>static/img/right.png" alt="">
          Protected Folder </p>
        <i>sorgt für den Schutz ihrer Ordner und Dateien!</i>
      </div>
      <div class="num3">
        <a href="https://www.iobit.com/buy.php?product=de-iu10pfsd1699&ref=de_iu103pcpfsdsale2012xr<?= $refStr; ?>&refs=de_purchase_iu">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcbundlepurchase2012xr-de')">Geschenke bekommen</button>
          <p>
        </a>
        <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
        Restzeit
        <i id="timeout" style="font-size: 14px;color: #EA2D2D;font-weight: bold;">00:11:24:326</i>
        </p>
      </div>
    </div>
    <div class="nothing">
      <h2 style=" text-align: left;font-size: 26px;  color: #292b2f;margin-top: 23px;text-align:center">Bekommen Sie noch einen 50% Rabatt
      </h2>
      <div class="arttwo">
        <div class="num1">
          <img src="<?= $pResUrl; ?>static/img/ubox.png" alt="">
        </div>
        <div class="num2">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <div class="num3">
          <p style="text-align: center;font-size: 48px; font-weight: 600;margin-right: 20px;">
            19<span style="font-size: 18px;">,99€</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">39,95€</i>
          </p>
          <a href=" https://www.iobit.com/buy.php?product=de-iu103pc1999&ref=de_iu103pcpurchase2012xr<?= $refStr; ?>&refs=de_purchase_iu">
            <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcsinglepurchase2012xr-de')">Jetzt kaufen</button>
          </a>
        </div>
      </div>
    </div>
  </article>
  <div class="mainbox clearfix">
    <div class="tab">
      <div class="context">
        <div class="con">
          <h5>Kundenbewertung</h5>
          <h6>
            Ich benutze den IObit Uninstaller schon eine lange Zeit und ich kann mich nicht beklagen. Es hat das erste Mal als ich es benutzt habe bereits gut funktioniert aber verbessert wurde er über die Jahre trotzdem, was auch letztlich der Grund war, warum ich dieses Programm bereits so lange nutze. Ich kann dieses Produkt jedem weiterempfehlen der Schwierigkeiten damit hat Programme komplett zu deinstallieren ohne, dass Datenreste auf dem Computer verbleiben.
          </h6>
        </div>
        <div class="con">
          <h5>Kundenbewertung</h5>
          <h6>
            Ich bin echt froh, dass ich dieses Programm gefunden habe, weil mein Computer war sehr langsam und ich dachte, es liegt daran da er vielleicht alt ist. Mein Kumpel hat mir dann aber gesagt, dass der Grund auch sein kann, dass sich zu viele Daten von deinstallierten Programmen auf meinem Computer befinden. Er hatte recht. Nachdem ich mit IObit Uninstaller Programme deinstalliert habe, von denen ich nichts mehr wusste und andere Programme, die ich eigentlich schon deinstalliert habe, komplett vom Computer entfernen konnte hat sich die Computergeschwindigkeit deutlich verbessert. Ich kann mich bei IObit nur bedanken. Vielen Dank. </h6>
        </div>
        <div class="con">
          <h5>Media Review</h5>
          <h6>
            Neben Programmen beseitigt der „IObit Uninstaller“ auch Toolbars und Plugins von Firefox, Chrome und Internet Explorer. Mit dem „IObit Uninstaller“ entfernen Sie nicht mehr benötigte Software von Ihrem PC. Im Anschluss an die Standard-Deinstallation durchsucht das kostenlose Tool Ihren kompletten Rechner und die Registry nach möglichen Datenresten, die Sie ebenfalls löschen können.
          </h6>
        </div>
        <div class="con">
          <h5>Kundenbewertung</h5>
          <h6>
            Der IObit Uninstaller findet Plugins in meinen Browsern, von denen ich nicht einmal wusste, dass sie existieren. Die Bereinigung von Restdateien ist sehr gut. Es bleiben keine Datenreste von deinstallierten Programmen übrig. Es erinnert mich außerdem an die verfügbaren Updates für alle meine Programme. Insgesamt hat sich die Leistung meines Computers dadurch verbessert. Es ist sehr bequem und leicht zu handhaben. Ich habe das sogar meinen Freunden empfohlen.</h6>
        </div>
        <div class="con">
          <h5>Kundenbewertung</h5>
          <h6>
            Das Deinstallationsprogramm von IObit funktioniert sehr gut und entfernt die Überreste von meinem System. Es arbeitet schnell und sicher ohne zusätzlichen Aufwand. Ich habe es installiert, weil es auch Browser-Erweiterungen und andere hartnäckige Programme deinstallieren kann. Es hat mich nie im Stich gelassen. Ich finde es toll, dass ein System im Notfall wiederherstellt werden kann.
          </h6>

        </div>
      </div>
      <ul class="btn">
        <li class="active">
          <img src="<?= $pResUrl; ?>static/img/ivan.png" alt="" class="imgon">
          <h3>Ivan White</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/ali.png" alt="" class="imgon">
          <h3>Ali Tekin</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/MakeUseOf.png" alt="" class="imgon">
          <h3>GIGA </h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/john.png" alt="" class="imgon">
          <h3>John Glenn Perong</h3>
        </li>
        <li>
          <img src="<?= $pResUrl; ?>static/img/samrat.png" alt="" class="imgon">
          <h3>James Gresley</h3>
        </li>
      </ul>
    </div>
    <div class="tablebox">
      <div class="title">
        <h3>IObit Uninstaller Free </h3>
        <div>
          <img src="<?= $pResUrl; ?>static/img/title.png" alt="">
        </div>
        <h1> IObit Uninstaller PRO</h1>
      </div>
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Deinstalliert Programme durch eine Verknüpfung, ein geöffnetes Fenster oder ein Taskleistensymbol</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/rightg.png" alt=""></td>
          <td>Entfernt Plugins und Erweiterungen in Edge, Chrome, IE, Firefox usw.</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Entfernt hartnäckige Programme </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Erkennt und entfernt Programme, die mit Freeware geliefert werden </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>
            Reinigt automatisch übriggebliebene Dateien, die andere Tools nicht entfernen können
          </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Hält alle Software von Ihrem PC in gutem Zustand</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Identifiziert und entfernt Werbe-Plugins</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Aktualisiert automatisch wichtige Software mit einem Klick  </td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td>Automatische Versionsaktualisierung</td>
          <td><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
        <tr>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/error.png" alt=""></td>
          <td style="border-bottom: 0;">Kostenloser technischer Support 24/7</td>
          <td style="border-bottom: 0;"><img src="<?= $pResUrl; ?>static/img/cright.png" alt=""></td>
        </tr>
      </table>
    </div>
  </div>
  <section class="clearfix" id="sect">
    <div class="sec">
      <div class="sec-sale">
        <img src="<?= $pResUrl; ?>static/img/IU83.png" alt="" id="sale"> </div>
      <div class="sec-buy">
        <p class="sec1">16<span>,99€</span> <i>109,89€</i></p>
        <p class="sec2">19<span>,99€</span> <i>39,95€</i></p>
        <a href="https://www.iobit.com/buy.php?product=de-iu10pfsd1699&ref=de_iu103pcpfsdsale2012xr<?= $refStr; ?>&refs=de_purchase_iu" id="hrf">
          <button>Jetzt kaufen</button>
        </a>
        <h2 id="hidn" style="text-align: left; padding-left: 17%;">
          <img src="<?= $pResUrl; ?>static/img/time.png" alt="" style="margin-right: 7px;">
          Restzeit
          <i id="timeout" style="font-size: 14px;color:#292B2F;font-weight: bold;">00:11:24:326</i>
        </h2>
      </div>
    </div>
  </section>
  <footer>
    <ul>
      <li>
        <img src="<?= $pResUrl; ?>static/img/size72.png" alt="">
        <h3>Zufriedenheitsgarantie</h3>
        <p>60-Tage-Geld-zurück-Garantie.</p>
      </li>
      <li style="margin-top: 20px;">
        <img src="<?= $pResUrl; ?>static/img/secure.png" alt="">
        <h3 style="margin-top: 45px;">Zahlungssicherheit</h3>
        <p>Ihre Zahlung ist 100% sicher </p>
      </li>
      <li style="margin-top: 15px;">
        <img src="<?= $pResUrl; ?>static/img/erji.png" alt="">
        <h3 style="margin-top: 33px;">Kundendienst</h3>
        <p>Kostenloser technischer Support 24/7</p>
      </li>
    </ul>
  </footer>
  <div class="laster">
    <h5>
      Hinweis: <br>
      *. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden. <br>
      *. Daten können sich system- oder computerabhängig ändern. <br>
      *.Smart Defrag PRO /Protected Folder unterstützt 1 Jahr / 1 PC.
    </h5>
    <h6>Copyright © 2005 - 2020 IObit. Alle Rechte vorbehalten
    </h6>
  </div>
</body>
<script>
  var valuenum = 1


  $(".feature .message ul li").hover(function() {
    var index = $(this).index();
    $(".feature .message>span").stop().animate({
      "marginTop": index * 104
    }, 300);
    $(".feature .list ").stop().animate({
      "marginLeft": -(index) * 560
    }, 300);
  });
  //tab栏的切换显示与隐藏
  $(".con").eq(0).show();
  $('.btn li .hidn').eq(0).show()

  $(".btn li ").hover(function() {
    var num = $(".btn li ").index(this);
    $('.btn li').removeClass('active')
    $('.btn li').eq(num).addClass('active')
    $(".con").hide().animate({
      opacity: '0'
    }, 100);
    $(".con").eq(num).show().animate({
      opacity: '1'
    }, 100);
  })

  var countdown = function(countdown) {
    getCycleCountdown();
    $(countdown).html(h + ':' + i + ':' + s + ':' + mi);
    if (d != 0 || h != 0 || i != 0 || s != 0 || mi != 0) setTimeout("countdown('" + countdown + "')", 100);
    else soldOut();
  };

  function getCycleCountdown() {
    var date = new Date();
    if (MApp(2.2).cookie.get('xmasnl2020')) {
      dt = MApp(2.2).cookie.get('xmasnl2020');

    } else {
      dt = date.setMinutes(date.getMinutes() + 12);
      MApp(2.2).cookie.set('xmasnl2020', dt);
    }

    var datetime = getCountdown(dt);
    if (datetime == 0) {
      d = h = i = s = mi = "00";
      soldOut();
    } else {
      d = MApp(2.2).packages.zeroize(datetime[0], 2);
      h = MApp(2.2).packages.zeroize(datetime[1], 2);
      i = MApp(2.2).packages.zeroize(datetime[2], 2);
      s = MApp(2.2).packages.zeroize(datetime[3], 2);
      mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0, 2);
    }
  }

  function getCountdown(t) {
    var e = new Date,
      i = Math.floor(e.getTime() / 1000),
      r = t / 1000,
      n = r - i;
    if (n > 0) {
      var s = Math.floor(n / 86400),
        a = Math.floor(n / 3600 % 24),
        o = Math.floor(n / 60 % 60),
        u = Math.floor(n % 60),
        h = 999 - e.getMilliseconds();
      return 10 > h ? h = "00" + h : 100 > h && (h = "0" + h),
        Array(s, a, o, u, h)
    }
    return 0
  }

  //倒计时结束实现
  // function soldOut() {
  //   valuenum = 2
  //   $('#post').addClass('post')
  //   $('.one').addClass('topleft')
  //   $('.art').css('display', 'none')
  //   $('.nothing').css('display', 'block')
  //   $('#arti').css({
  //     "background-image": "url('<?= $pResUrl; ?>static/img/ker.png')"
  //   })
  //   $('#sect').css({
  //     "background-image": "url('<?= $pResUrl; ?>static/img/overbanner.png')"
  //   })
  //   $('#sale').attr('src', '<?= $pResUrl; ?>static/img/IU.png')
  //   $('#hrf').attr('href', ' https://www.iobit.com/buy.php?product=de-iu103pc1999&ref=de_iu103pcpurchase2012xr<?= $refStr; ?>&refs=de_purchase_iu')

  //   $('.sec1').hide()
  //   $('.sec2').show()
  //   // $('.two-up h3').text('Temporary Christmas package!')
  //   // $('.two-up p span').text('only')
  // }
  $('#hrf button').on('click', function() {
      if (valuenum == 1) {
        ga('send', 'event', 'iubuy', 'buy', 'iu3pcbundlepurchase2012xr-de')
      } else {
        ga('send', 'event', 'iubuy', 'buy', 'iu3pcsinglepurchase2012xr-de')
      }
    })
    (function() {
      countdown(("#timeout"));
      countdown(("#hidn i"));
      countdown((".art .num3 i"));
    }());
</script>

</html>