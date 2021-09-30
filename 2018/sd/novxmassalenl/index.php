<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$packsNum=empty($_COOKIE['pc'])?120:$_COOKIE['pc'];
if ($_GET['action'] == 'getPacks') {
  $randNum=rand(1,100);
  if($randNum%4==0){
    $packsNum-=2;
  }else
    $packsNum--;
  if($packsNum<=0){
    $packsNum=120;
  }
  setcookie('pc',$packsNum,time()+3600*720);
  echo $packsNum;
  exit ;
}
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr='-'.$_GET['ref'];
}else{
  $refStr='';
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>75% Kerstkorting op Smart Defrag PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function decreasingPacks() {
      $.ajax({
        type: "GET",
        url: "index.php",
        data: "action=getPacks&r=" + Math.random(),
        success: function(packs) {
          $('.packs').html(packs);
          setTimeout('decreasingPacks()', 75000);
        }
      });
    }
    setTimeout('decreasingPacks()', 75000);
  </script>
</head>
<body>

<!-- header -->
<div class="header">
  <div class="wrapper">
    <a href="https://www.iobit.com" class="logo" target="_blank">IObit</a>
    <h1>75% KORTING Speciale Kerstaanbieding De laagste prijs van het jaar!</h1>
    <ul id="counttime1" class="date">
      <li>00 <span>Uur:</span></li>
      <li>00 <span>Min:</span></li>
      <li>00 <span>Sec:</span></li>
      <li>000 <span>Ms</span><sup>*</sup></li>
    </ul>
    <div class="clear"></div>
  </div>
  <div class="content">
    <div class="left">
      <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="">
    </div>
    <div class="arrow"></div>
    <div class="right">
      <dl class="message">
        <dt><strong>Smart Defrag 6 PRO <span>(1 Jaar/ 1 PC)</span></strong> <b>€17,99</b> <del>€29,99</del></dt>
        <dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>SD PRO Ondersteunt 2 PC’s Extra</strong> <img src="<?php echo $pResUrl; ?>images/gratis.png" alt=""> <del>€19,99</del></dd>
        <dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>AMC Security PRO</strong> <img src="<?php echo $pResUrl; ?>images/gratis.png" alt=""> <del>€19,99</del></dd>
      </dl>
      <dl class="buy">
        <dt><strong>€17,99</strong> <del>€69,97</del></dt>
        <dd>
          <!-- buybtn -->
          <a href="https://www.iobit.com/buy.php?product=nl-sd61y3pcamc1799&ref=nl_sd63pcamcpurchase1811<?php echo $refStr;?>&refs=nl_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1811-nl')"
             class="buybtn">
            Activeer Nu
          </a>
        </dd>
        <dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Nog maar <strong class="packs"><?php echo $packsNum; ?></strong> paketten</dd>
      </dl>
    </div>​
  </div>

</div>
<!-- header end -->

<ul class="wrapper accepted">
  <li>
    <span>Betaalmogelijkheden</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </li>
  <li class="cent">
    <span>Geldteruggarantie</span>
    <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" />
  </li>
  <li>
    <span>Veilige betaling</span>
    <img src="<?php echo getStaticUrl('images/veilige.png')?>" alt="" />
  </li>
</ul>

<div class="wrapper clnet">
  <h2>Awards</h2>
  <img src="<?php echo $pResUrl; ?>images/clnet.jpg" alt="">
</div>

<div class="wrapper sd-content clearfix">
  <h2>Maximaliseer de harde schijf prestaties en snelheid van uw PC met SD6 PRO</h2>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/icons001.png" alt=""></dt>
    <dd>
      <strong>Nieuwe ultra-snelle Engine</strong>
      <span>Defragmenteert bestanden <br> efficiënter en grondiger in <br> minder tijd</span>
    </dd>
  </dl>
  <dl class="right">
    <dt><img src="<?php echo $pResUrl; ?>images/icons002.png" alt=""></dt>
    <dd>
      <strong>Tot wel 200% Sneller*</strong>
      <span>Met deze nieuwe versie hebt u <br> sneller toegang tot uw <br> bestanden en verhoogt u de <br> gaming prestaties</span></dd>
  </dl>
  <div class="clear"></div>
  <dl class="bottom">
    <dt><img src="<?php echo $pResUrl; ?>images/icons003.png" alt=""></dt>
    <dd><strong>Auto Smart defragmentatie</strong> <span>Defragmenteert automatisch de <br> geselecteerde bestanden en <br> schijven zonder onderbreking</span></dd>
  </dl>
  <dl class="right bottom">
    <dt><img src="<?php echo $pResUrl; ?>images/icons004.png" alt=""></dt>
    <dd><strong>Snellere PC Opstarttijd</strong> <span>Start uw PC sneller op en <br> verhoog de loopsnelheid van <br> het systeem met het <br> vernieuwde “Opstart Menu”</span></dd>
  </dl>
  <div class="clear"></div>
  <img src="<?php echo getStaticUrl('images/sd-content.png')?>" alt="" class="img-sd-content">
  <p><a href="javascript:void(0);" onclick="goTaget($('#compare'))">Meer informatie over de PRO editie></a></p>
</div>

<div class="wrapper between-buy clearfix">
  <div class="left">
    <dl class="sd">
      <dt><img src="<?php echo getStaticUrl('images/big-sd.png')?>" alt=""></dt>
      <dd><strong>€17,99</strong> <del>€29,99</del></dd>
    </dl>
    <dl class="free">
      <dt><img src="<?php echo getStaticUrl('images/two-sd.png')?>" alt=""></dt>
      <dd>Ondersteunt 2 PC’s Extra</dd>
      <dd><span class="see-more">Lees meer</span></dd>
    </dl>
    <dl class="free amc">
      <dt><img src="<?php echo $pResUrl; ?>images/amc-free.png" alt=""></dt>
      <dd class="last">Bescherm uw Android-apparaten tegen virussen</dd>
      <dd><span class="see-more">Lees meer</span></dd>
    </dl>
  </div>
  <div class="pop-content hidden">
    <span class="close"></span>
    <dl>
      <dt>Ondersteunt nu 2 PC’s Extra</dt>
      <dd>De licentie code van Smart Defrag 6 PRO ondersteunt 2 pc's extra, zodat u deze kunt delen met uw familie en vrienden!</dd>
      <dt>AMC Security PRO <span>Meerdere Apparaten</span></dt>
      <dd class="check">Versnel je mobiele telefoon tot wel 200%</dd>
      <dd class="check">Real-Time Bescherming tegen Veiligheidsbedreigingen </dd>
      <dd class="check">Beschermt uw privé gegevens volledig</dd>
      <dd class="check">Pionier in Mobiele Betaal Bescherming</dd>
    </dl>
  </div>
  <dl class="right buy">
    <dt><strong>€17,99</strong> <del>€69,97</del></dt>
    <dd>
      <!-- buybtn -->
      <a href="https://www.iobit.com/buy.php?product=nl-sd61y3pcamc1799&ref=nl_sd63pcamcpurchase1811<?php echo $refStr;?>&refs=nl_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1811-nl')"
         class="buybtn">
        Activeer Nu
      </a>
    </dd>
    <dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Nog maar <strong class="packs"><?php echo $packsNum; ?></strong> paketten</dd>
  </dl>
</div>

<div class="review">
  <div class="wrapper">
    <div class="media_rev">
      <h3>Media beoordeling</h3>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg" alt=""></dt>
        <dd><strong>"IObit Smart Defrag is tot zover de beste defragger die we hebben gebruikt."</strong></dd>
        <dd>"IObit Smart Defrag optimaliseert uw PC om volledig te profiteren van SSD prestaties tijdens het defragmenteren van uw harde schijf. De SSD Trim applicatie maakt automatische systeem tweaks die normaal gesproken alleen door iemand met ervaring uitgevoerd kunnen worden. Smart Defrag's updates omvatten onder andere een nieuw defragmenteer machine, speciale Game Defragmentatie, een coole nieuwe interface en meer opties voor talen (35 en groeiende)."<span>- Score: 4.5/5 Sterren 'Uitmuntend' | Cnet</span></dd>
      </dl>
    </div>
    <div class="user_rev" id="user_rev">
      <div class="content">
        <h3>Gebruikers Recensie</h3>
        <dl class="show">
          <dd><h4>"Smart Defrag is een zeer goede schijf defragmenteer programma."</h4></dd>
          <dd>"Smart Defrag is een zeer goede schijf defragmenteer programma, opererent in de achtergrond zodat je het nauwelijks merkt. Het gevolg is dat je schijven permanent gedefragmenteerd worden waardoor snellere toegang mogelijk is en minder problemen zich voordoen. Smart Defrag is de beste gratis schijf defragmenteerder die ik ooit gebruikt heb en ik raad dit zeker aan alle mijn vrienden en familie aan!"</dd>
        </dl>
        <dl>
          <dd><h4>"Het is een eenvoudig te gebruiken, must-have tool voor je harde schijf of SSD"</h4></dd>
          <dd>"Ik run een combinatie van RAID 0 SSD's en RAID 0 HDD's en gebruik Smart Defrag Pro voor het analyseren, defragmenteren en het houden van mijn schijven op een top niveau. Zoals met alle software van IObit is het eenvoudig te installeren, te gebruiken en zeer betrouwbaar. Installeer het en geen omkijken naar. Smart Defrag laat een zeer kleine voetstap achter in je systeem zodat het je pc niet langzamer maakt. Een absolute aanrader."</dd>
        </dl>
        <dl>
          <dd><h4>"Sinds het gebruik van deze fantastische software zijn mijn desktop en laptop veel sneller en veiliger geworden"</h4></dd>
          <dd>"Ik ben al meerdere jaren een gebruiker van Smart Defrag. Sinds het gebruik van deze fantastische software zijn mijn desktop en laptop sneller en veiliger geworden. Samen met Advanced System Care Ultimate heb je een complete tool voor het up to date houden van je systeem, snel en veilig. Door het elke dag te gebruiken houd je je systeem in top conditie zelfs als je geen technische achtergrond heb!"</dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active"><img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">Amnon</li>
        <li class=""><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">Edward Lee Ah Yen</li>
        <li class=""><img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">Hans</li>
      </ul>
    </div>
  </div>
</div>

<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2">Bekijk wat de PRO editie voor u kan betekenen:</th>
      <th class="space"></th>
      <th class="itemb">Smart Defrag <br> FREE</th>
      <th class="space"></th>
      <th class="itema">Smart Defrag <br> PRO</th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Standaard harde schijf Defragmentatie en Optimalisatie</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Tot 200% snellere toegang tot uw bestanden</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Snellere PC Opstart tijd met het nieuwe ‘Opstart Menu’</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Defragmenteert Automatisch Gedefragmenteerde bestanden</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Aanpassen van defragmentatie Mode & Schijven die u wilt defragmenteren</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">DMA toegevoegd voor Betere, Snellere & meer Stabiele Dataoverdracht</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Geen onderbrekingen tijdens uw werk of tijdens het gamen met de ‘Stille Modus’</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Beste gaming belevenis met de ‘Game Optimalisatie’</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Geplande taak ondersteuning met standby defragmentatie</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Automatische updates</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Gratis 24/7 technische ondersteuning</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison-table end -->

<div class="fy-banner">
  <div class="wrapper">
    <img src="<?php echo getStaticUrl('images/bottom-sd-content.png')?>" alt="">
    <dl>
      <dd>
        <span class="spped">Maximale versnelling van uw systeem </span>
        <span class="last">Verbeter de PC-prestaties met een geoptimaliseerde harde schijf</span>
      </dd>
      <dt>
        <p><strong>€17,99</strong> <del>€69,97</del></p>
        <!-- buybtn -->
        <a href="https://www.iobit.com/buy.php?product=nl-sd61y3pcamc1799&ref=nl_sd63pcamcpurchase1811<?php echo $refStr;?>&refs=nl_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1811-nl')"
           class="buybtn">
          Activeer Nu
        </a>
      </dt>
    </dl>
  </div>
</div>

<dl class="annotation wrapper">
  <dt>Opmerking:</dt>
  <dd>*. Dergelijke promotie acties kunnen worden gewijzigd zonder voorafgaande kennisgeving van tijd tot tijd naar eigen oordeel.</dd>
  <dd>*. Data kan variëren op basis van andere computer systemen. </dd>
  <dd>*. Licentie voor AMC Security, Volledige versie beschikt over advertenties.</dd>
</dl>

<!-- footer -->
<div class="footer">
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
</div>
<!-- footer end -->

<script>
  $(document).ready(function() {
    $("#user_rev .users li").mouseover(function(event) {
      var num = $(this).index();
      $("#user_rev .users li").eq(num).addClass('active').siblings().removeClass('active');
      $("#user_rev dl").eq(num).addClass('show').siblings().removeClass('show');
    });
    cycleCountdown();
  });
  $(".see-more").click(function(){
    $(".pop-content").addClass("show").removeClass("hidden");
  });
  $(".close").click(function(){
    $(".pop-content").addClass("hidden").removeClass("show");
  });
  function goTaget(target) {
    var Theigth = target.offset().top;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    document.getElementById('counttime1').innerHTML = '<li>'+h+'<span>Uur : </span></li><li>'+i+'<span>Min : </span></li><li>'+s+'<span>Sec : </span></li> <li>'+mi+'<span>Ms</span><sup>*</sup></li>';
    setTimeout('cycleCountdown()', 1);
  }
</script>
</body>
</html>