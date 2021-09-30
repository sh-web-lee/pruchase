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
  <title>80% Kerstkorting op IObit Uninstaller</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <nav>
    <div class="logo"><a href="https://www.iobit.com/nl/index.php" target="_blank" onclick="ga('send', 'event', 'iubuy', 'buy', ''iuexppurchase2011-nl')"><img src="<?= $pResUrl; ?>static/img/LOGO.png" alt=""></a>
    </div>
    <img src="<?= $pResUrl; ?>static/img/wordbd.png" alt="">
    <div class="book clearfix">
      <div class="one left ">
        <h3>Standaardpakket</h3>
        <p style="text-align: right;">
          €19<span style="font-size: 18px;">,99</span> <i style="font-size: 18px; color: #838395;text-decoration: line-through;">€29,99</i>
        </p>
        <div style="text-align: left;">
          <img src="<?= $pResUrl; ?>static/img/ISU.png" alt="">
        </div>
        <a href="https://www.iobit.com/buy.php?product=nl-iu103pc1999&ref=nl_iu103pc1999exppurchase2011<?= $refStr; ?>&refs=nl_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iuexppurchase2011-nl')">NU KOPEN</button>
        </a>
      </div>
      <div class="two left">
        <div class="two-up">
          <h3>Tijdelijk Kerstpakket!</h3>
          <p style=" padding-left: 27%;text-align: left;">
            <img src="<?= $pResUrl; ?>static/img/time.png" alt="">
            Nog maar
            <i id="timeout">00:11:24:326</i>
          </p>
        </div>
        <p style="text-align: right;font-size: 60px; font-weight: 600;margin-right: 20px;">
          €17<span style="font-size: 22px;">,99</span> <i style="font-size: 22px; color: #838395;text-decoration: line-through;">€89,97</i>
        </p>
        <div style="text-align: left;margin-left: 25px;margin-top: -19px;">
          <img src="<?= $pResUrl; ?>static/img/box.png" alt="">
        </div>
        <a href="https://www.iobit.com/buy.php?product=nl-iu103pcsdisu1799&ref=nl_iu103pcsdisu1799exppurchase2011<?= $refStr; ?>&refs=nl_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iuexppurchase2011-nl')">
            NU KOPEN
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
            <b>Krachtige</b>verwijdering van alle ongewenste en hardnekkige software.
          </li>
          <li>
            <b>Intelligente</b> detectie en verwijdering van gebundelde software.
          </li>
          <li>
            <b>Eenvoudig</b> in één klik alle belangrijke software bijwerken naar de laatste versie.
          </li>
          <li class="last">
            <b>Automatisch</b> het systeem herstellen naar de status van voor de installatie van te deïnstalleren
            software.

          </li>
        </ul>
        <!-- active -->
        <span></span>
      </div>
    </div>
  </aside>


  <div class="comparison wrapper" style="margin-top: 80px;">
    <h2>Krijg alle PRO-functies terug voor een schone pc en <br> perfecte Software Health</h2>
    <table>
      <thead>
        <tr>
          <th class="itema"><big>Pas op!</big> Momenteel riskeert u …</th>
          <th class="itemb"><big>U </big> kunt ook genieten van…</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">
            <span>Hardnekkige, ongewenste software niet kunnen verwijderen</span>
            van uw computer
          </td>
          <td class="itemb">
            Verwijder zelfs de hardnekkigste software voor een
            <span>
              schone pc en meer vrije schijfruimte
            </span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            Softwarerestanten blijven achter na deïnstallatie en
            <span>vervuilen uw systeem</span>
          </td>
          <td class="itemb">
            <span>Een schoon systeem</span>
            en meer schijfruimte omdat alle restanten automatisch worden verwijderd
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Bundleware wordt geïnstalleerd</span>
            op uw computer bij het downloaden van freeware
          </td>
          <td class="itemb">
            <span>Detecteer bundleware</span>
            zodra het geïnstalleerd wordt en verwijder het in één klik
          </td>
        </tr>
        <tr>
          <td class="itema">
            Schadelijke browser
            <span>plug-ins beschadigen uw computer</span>
          </td>
          <td class="itemb">
            <span>Verwijder elke plug-in</span>
            en taakbalk en zie of plug-ins schadelijk zijn of niet
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Systeeminstellingen worden aangepast</span>
            en u kunt ze niet zo maar terugveranderen
          </td>
          <td class="itemb">
            Monitor alle installaties en
            <span>herstel alle systeeminstellingen </span>
            bij het verwijderen van de software
          </td>
        </tr>
        <tr>
          <td class="itema">
            Verouderde software brengt uw
            <span>computer in gevaar</span>
          </td>
          <td class="itemb">
            <span>Update al uw belangrijke software </span>
            in één klik voor de laatste functies en een veilige pc
          </td>
        </tr>
      </tbody>
    </table>
  </div>


  <div class="intro">
    <div class="wrapper clearfix">
      <h2>IObit Uninstaller 10 PRO kan zelfs nog meer <br> dan uw vorige versie!</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('static/img/intro-icons01.png') ?>" alt="" /></dt>
        <dd>
          <h3 style="font-size: 18px;">Blokkeer Meldingen</h3>
          <p>De laatste versie blokkeert ook browsermeldingen voor een ongestoorde surfervaring.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('static/img/intro-icons02.png') ?>" alt="" /></dt>
        <dd>
          <h3>Schoner</h3>
          <p>Met de 30% grotere database, worden meer restanten verwijderd voor een schoon en snel systeem.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('static/img/intro-icons03.png') ?>" alt="" /></dt>
        <dd>
          <h3>Krachtiger</h3>
          <p>Verwijdert meer hardnekkige software, waaronder Microsoft Edge (Chromium).</p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('static/img/intro-icons04.png') ?>" alt="" /></dt>
        <dd>
          <h3 style="font-size: 15px;">Volledige Browserondersteuning</h3>
          <p>Onderteunt meer browsers, zoals de nieuwe Chromium-based Microsoft Edge.</p>
        </dd>
      </dl>
    </div>
  </div>

  <!-- review -->
  <div class="review wrapper clearfix">
    <h2>WE DOEN ER ALLES AAN OM ONZE KLANTEN WAAR OOK TER WERELD, <br> TEVREDEN TE MAKEN!</h2>
    <div class="review-icons fl">
      <img src="<?php echo $pResUrl; ?>static/img/review-icons.png" alt="">
    </div>
    <div class="review-content fr">
      <ul class="clearfix">
        <li class="active">
          <img src="<?php echo $pResUrl; ?>static/img/makeuseof.png" alt="CHIP">
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>static/img/ivan.png" alt="Sergey Erlich">
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>static/img/ali.png" alt="Áda Görtler">
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>static/img/samrat.png" alt="Joseph Yu">
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>static/img/john.png" alt="Lovro Žužić">
        </li>
      </ul>
      <span class="line"></span>
      <div class="review-message">
        <p class="active">
          "Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen."
          <span>- MakeUseOf</span>
        </p>
        <p>
          Ik gebruik IObit Uninstaller al heel lang, en ik hou ervan. Het is heel grondig en nu zelfs nog beter. Ik ben heel tevreden en kan niet meer zonder. Als je het nog niet gebruikt, moet je het zeker proberen. Het is nu 100% beter dan een jaar geleden. Het ruimt alle rotzooi uit het register op en dat doet het geweldig
          <span>- Ivan White</span>
        </p>
        <p>
          Dit programma bespaart me een hoop geld. Voordat ik het gebruikte was mijn computer heel traag. Ik kon er niets meer mee. Dankzij dit programma, is mijn computer weer hartstikke snel. Dankzij dit programma hoef ik geen nieuwe computer te kopen. Heel erg bedankt, IObit! I love you.
          <span>- Ali Tekin</span>
        </p>
        <p>
          Ik heb in het verleden meerdere uninstallers gebruikt, maar zodra ik IObit gebruikte (sinds versie 7.0), wilde ik nooit meer een ander programma. De interface is zeer gebruiksvriendelijk en doet wat het doen moet met indrukwekkende perfectie. Het verschoont automatisch het register, dat anders helemaal dichtslibt, en draagt zo bij aan de gezondheid van de PC. De bundleware dectectie en verwijdering zijn super en ongeëvenaard door andere software.
          <span>- Samrat Kumar Chakrabortty</span>
        </p>
        <p>
          IObit Uninstaller detecteert plug-ins in my browsers waarvan ik niet eens wist dat ze bestonden. Het opschonen van restbestanden is heel goed; er blijven geen nutteloze gegevens achter. Mijn hele computer werkt daardoor beter. Het is een handig en gebruiksvriendelijk programma; ik beveel het al mijn vrienden aan.
          <span>- John Glenn Perong</span>
        </p>
      </div>
    </div>
  </div>
  <!-- end review -->


  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Wereldwijd Bekroond door de Media</h2>
      <p>
        Dankzij de waardering van vooraanstaande media over de hele wereld, weet u dat het goed zit!
      </p>
      <img src="<?php echo $pResUrl; ?>static/img/award.png" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- service  -->
  <div class="service  clearfix">
    <div class="wrapper">
      <dl>
        <dt>Garantie</dt>
        <dd><img src="<?php echo $pResUrl; ?>static/img/money-back.png" alt=""></dd>
      </dl>
      <dl>
        <dt>Veilig betalen</dt>
        <dd><img src="<?php echo $pResUrl; ?>static/img/verified.png" alt=""></dd>
      </dl>
      <dl class="last">
        <dt>24/7 Gratis Klantenservice</dt>
        <dd><img src="<?php echo $pResUrl; ?>static/img/servizio.png" alt=""></dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <dl class="annotation wrapper">
      <dt>*Opmerkingen:</dt>
      <dd>
        IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
      </dd>
      <dd>
        Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.
      </dd>
    </dl>
    <div class="copyright">Copyright ©2005 - <?php echo date('Y') ?> IObit. Alle Rechten Voorbehouden</div>
  </div>
  <!-- end footer -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl">
        <img id="floatImg" src="<?php echo getStaticUrl('static/img/iu-float-box.png') ?>" alt="" />
      </div>
      <div class="center fl">
        <h2>Exclusieve Kerstaanbieding!</h2>
        <div class="numbox">
          <p>Wees er snel bij, beperkt beschikbaar</p>
        </div>
      </div>
      <div id="priceContainer" class="price fr">
        <p class="hrfPrice"><strong>€ 17,99</strong> <del>€ 89,97</del></p>
        <a class="hrf" href="https://www.iobit.com/buy.php?product=nl-iu103pcsdisu1799&ref=nl_iu103pcsdisu1799exppurchase2011<?php echo $refStr; ?>&refs=nl_purchase_iu" target="_blank">
          <button onclick="ga('send', 'event', 'iubuy', 'buy', 'iuexppurchase2011-nl')">NU KOPEN</button>
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->
</body>


<script>
  $.fn.scrollWindow = function(topheight, scrollclass, ClassName, reheight) {
    $(window).on('scroll', function() {
      if ($(window).scrollTop() > topheight.offset().top - reheight) {
        scrollclass.addClass(ClassName);
      } else {
        scrollclass.removeClass(ClassName);
      }
    });
  };

  $(".feature .message ul li").hover(function() {
    var index = $(this).index();
    $(".feature .message>span").stop().animate({
      "marginTop": index * 104
    }, 300);
    $(".feature .list ").stop().animate({
      "marginLeft": -(index + 1) * 560
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

  var review = function(review) {
    $(review).mouseover(function() {
      var index = $(this).index();
      $(this).addClass("active").siblings().removeClass("active");
      $("span.line").stop().animate({
        "marginLeft": 98 * index
      }, 200);
      $(".review-message p").eq(index).addClass("active").siblings().removeClass("active");
    });
  };

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
  function soldOut() {
    $('#post').addClass('post')
    $('.one').addClass('topleft')
    $('.art').css('display', 'none')
    $('.nothing').css('display', 'block')
    $('#arti').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/ker.png')"
    })
    $('#sect').css({
      "background-image": "url('<?= $pResUrl; ?>static/img/overbanner.png')"
    })
    $('#sale').attr('src', '<?= $pResUrl; ?>static/img/IU.png')
    $('.hrf').attr('href', 'https://www.iobit.com/buy.php?product=nl-iu103pc1999&ref=nl_iu103pc1999exppurchase2011<?= $refStr; ?>&refs=nl_purchase_iu')
    $('.hrfPrice').html('<strong>€ 19,99</strong> <del>€ 29,99</del>');
    $('#floatImg').attr('src', "<?php echo getStaticUrl('static/img/ISU.png') ?>")
    $('#floatImg').css('margin-top', '-50px')
    $('#priceContainer').addClass('soldout');
    var container = $('#floatlayer');
    container.find('.center').find('h2').text('Helaas! Kerstpakket Uitverkocht');
    container.find('.center').find('.numbox').find('p').text('Pak toch nog 33% Korting');
  }
  (function() {
    countdown(("#timeout"));
    countdown(("#hidn i"));
    countdown((".art .num3 i"));
    //review
    review((".review ul li"));

    //floatlayer
    $(window).scrollWindow($("aside"), $('.floatlayer'), ("on"), 0);
  }());
</script>

</html>