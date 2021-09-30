<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float() {
  list($usec, $sec) = explode('', microtime());
  return ((float)$usec + (float)$sec);
}

// $reduceNum=77136125;
// $buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);
$buyNum = '996 487';

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>80% RABATT! Aktivera IMF PRO för att skydda din PC och online-upplevelse! – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <div class="title">
      <h1>Denna veckas specialerbjudanden</h1>
      <p>Exklusiva Gåvor! Bara några få paket kvar!</p>
    </div>
    <div class="panel clearfix">
      <div class="box small">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
        <p><strong>249<small>kr</small></strong> <del class="original">499<small>kr</small></del></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf71pc249&ref=sv_imf71pcpurchase1901<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcpurchase1901-sv');">
          <i></i> <span>KÖP NU</span>
        </a>
      </div>
      <div class="box">
        <ul>
          <li><strong>11</strong> Timmar:</li>
          <li><strong>43</strong> Min :</li>
          <li><strong>44</strong> Sek :</li>
          <li><strong>644</strong> Ms*</li>
        </ul>
        <img src="<?php echo getStaticUrl('images/imf-three-box.png')?>" alt="">
        <p><strong>329<small>kr</small></strong> <del class="original">1 856<small>kr</small></del></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf73pcpfsdamc329&ref=sv_imf73pcpfsdamcpurchase1901<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1901-sv');">
          <i></i> <span>KÖP NU</span>
        </a>
        <p class="bought">
          <img src="<?php echo $pResUrl; ?>images/people.png" alt=""> <span class="buyNum"><?php echo $buyNum;?></span> människor har aktiverat
        </p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->
<!-- awards start -->
<div class="awards wrapper">
  <h2>Rekommenderas och är belönade av dessa medier</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
</div>
<!-- awards end -->

<div class="feature-bg">
  <!-- feature start -->
  <div class="feature">
    <div class="wrapper clearfix">
      <h2>För mindre än <b>0.3 kr</b> per dag/PC kan du njuta av det bästa <br>dubbla skyddet för din PC!</h2>
      <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="">
      <div class="right-lists">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""/></dt>
          <dd>Djup Borttagning av Skadlig Programvara med ny Motor från Bitdefender</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""/></dt>
          <dd>Upptäcker och Tar Bort mer än 200 Miljoner Dolda Hot</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""/></dt>
          <dd>
            Stoppa utpressningsprogram som försöker bryta sig in i din dator. Även Petya/GoldenEye ransomware kan blockeras och tas bort.
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""/></dt>
          <dd>SafeBox skyddar dina markerade mappar från icke auktoriserad tillgång & senaste hot</dd>
        </dl>
        <a class="intro" href="javascript:void(0)">Läs mer om PRO-versionen>></a>
      </div>
    </div>
  </div>
  <!-- feature end -->
  <!-- gift message start -->
  <div class="gift-message">
    <div class="wrapper">
      <img src="<?php echo getStaticUrl('images/imf-center-box.png')?>" alt="" class="img-box">
      <div class="right-message">
        <div class="box">
          <p><b>Protected Folder</b> - Skydda dina filer från skadliga attacker</p>
          <p><b>Smart Defrag 6 PRO</b> - Auto-defragmentera valda filer</p>
          <p><b>AMC Security PRO</b> - <span>Bästa allt-i-ett städaren och boostaren för Android-enheter</span></p>
        </div>
      </div>
    </div>
  </div>
  <!-- gift message end -->
</div>

<!-- between-buy start -->
<div class="between-buy">
  <div class="wrapper">
    <p class="price"><strong>329<small>kr</small></strong> <del class="original">1 856<small>kr</small></del></p>
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf73pcpfsdamc329&ref=sv_imf73pcpfsdamcpurchase1901<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1901-sv');">
      <i></i> <span>KÖP NU</span>
    </a>
    <p class="last">
      <i class="all-icons"></i> <span class="buyNum"><?php echo $buyNum;?></span> människor har aktiverat
    </p>
  </div>
</div>
<!-- between-buy end -->
<!-- review -->
<div class="review">
  <div class="wrapper">
    <div class="media_rev">
      <h3>I media</h3>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/betanews.png" alt=""></dt>
        <dd><h4>"IObit Malware Fighter PRO är ett komplett säkerhetspaket."</h4></dd>
        <dd>"IObit Malware Fighter PRO är ett komplett säkerhetspaket. Det rensar bort spionprogram, trojaner och allehanda otrevligheter. Det finns också ett Uppstartsskydd som säkerställer att inga skadliga processer startas med Windows. Webbläsarskyddet garanterar att ingen programvara gör ändringar i din webbläsare och Filgranskaren garanterar att varje okänd fil du öppnar inte kan orsaka någon skada. Inkluderat är också vaktenheter för USB och processor med mera."<span>-Betanews.com</span></dd>
      </dl>
    </div>
    <div class="user_rev" id="user_rev">

      <div class="content">
        <h3>Användares omdömen</h3>
        <dl  class="active">
          <dd>
            <h4>"Vi har inte haft några problem sedan vi började använda era produkter."</h4>
          </dd>
          <dd>"Vi brukade använda upp till ett dussin olika program för att hålla våra maskiner i trim och hålla skurkarna borta. Det tog timmar varje vecka för att upprätthålla säkerhet och prestanda. Nu, med IObit Malware Fighter PRO och Advanced System Care PRO, är allt på ett ställe och det tar oss bara några minuter varje vecka för att göra samma jobb, men med mer förtroende. Vi har inte haft ett enda problem sedan vi började använda era produkter."</dd>
        </dl>
        <dl>
          <dd>
            <h4>"Jag har haft andra program för detta ändamål installerade men IMF finner alltid problemen först och blockerar dem."</h4>
          </dd>
          <dd>"För några år sedan drogs min uppmärksamhet till IObit Malware Fighter. Först var jag skeptisk. Men efter att ha installerat det blev det snabbt min favorit bland anti-malware program. Det är mycket lätt att använda. Genom åren har det upptäckt många hot och avlägsnat dem. I samarbete med andra program från IObit, som till exempel ASC, har jag nu ett ypperligt skydd för min dator. Jag rekommenderar alla dessa program till mina vänner och familj."</dd>
        </dl>

      </div>
      <ul class="users" id="users">
        <li class="current"><img src="<?php echo $pResUrl; ?>images/peter-stoffers.jpg" alt="">Peter Stoffers</li>
        <li><img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="">Bob Bassett</li>
      </ul>
    </div>
  </div>
</div>
<!-- end review -->

<div class="bottom">
  <!-- comparison_table -->
  <div class="comparison_table wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2">Se vad PRO-versionen kan göra för dig:</th>
        <th class="space"></th>
        <th class="itemc gray"><span>IObit Malware Fighter </span> Free</th>
        <th class="space"></th>
        <th class="itema orange">IObit Malware Fighter <br>PRO <br>(1 År / 1 PC )</th>
        <th class="space"></th>
        <th class="itemb red">IObit Malware Fighter <br>PRO <br>(1 År / 3 PC )+gåvor</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
        <td class="virtue">Grundläggande skydd mot sabotageprogram <sup>Förbättrad</sup></td>
        <td class="space"></td>
        <td class="itemc gray"><img src="<?php echo $pResUrl; ?>images/graymark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
        <td class="virtue">Upp till 130% snabbare sökning för att snabbt hitta aktiva hot <sup>Förbättrad</sup></td>
        <td class="space"></td>
        <td class="itemc gray"><img src="<?php echo $pResUrl; ?>images/graymark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
        <td class="virtue">Genomsök nedladdade filer och ta bort annonser för förbättrad säkerhet  <sup class="green"> Ny</sup></td>
        <td class="space"></td>
        <td class="itemc gray"><img src="<?php echo $pResUrl; ?>images/graymark.png"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
        <td class="virtue">Fullständigt skydd mot sabotageprogram med IObits <br> Anti-malwaremotor <sup> Förbättrad</sup></td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
        <td class="virtue">Avancerat skydd mot hot med Bitdefender Anti-virusmotor <sup> Förbättrad</sup></td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
        <td class="virtue">Skydda din PC och dina pengar från utpressningsprogram  <sup class="green">Ny</sup></td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
        <td class="virtue">Skydda din kamera från obehörig åtkomst <sup class="green">Ny</sup></td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
        <td class="virtue">Komplett skydd i realtid för ultimat säkerhet  <sup>Förbättrad</sup></td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
        <td class="virtue">Hindra virus som sprids genom USB-minnen</td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
        <td class="virtue">Hitta skadliga processer i RAM-minnet  </td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
        <td class="virtue">Rensa automatiskt bort surfspår med Anti-spårning för <br>webbläsare  <sup>Förbättrad</sup></td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
        <td class="virtue">Hitta hot genom att analysera skadlig aktivitet  </td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
        <td class="virtue">Jobbar smart i bakgrunden utan att störa </td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
        <td class="virtue">Uppdaterar automatiskt till den senaste versionen  </td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
        <td class="virtue">Gratis teknisk support dygnet runt </td>
        <td class="space"></td>
        <td class="itemc"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
        <td class="space"></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      </tr>
      </tbody>
      <tfoot>
      <tr>
        <th colspan="2"></th>
        <th class="space"></th>
        <th class="itemc">
          IObit Malware Fighter <br>Free
        </th>
        <th class="space"></th>
        <th class="itema">
          1 År / 1 PC <p><strong>249<small>kr</small></strong> <del>499kr</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf71pc249&ref=sv_imf71pcpurchase1901<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcpurchase1901-sv');">
            <span>KÖP NU</span>
          </a>
        </th>
        <th class="space"></th>
        <th class="itemb">
          1 År / <span>3</span> PC + gåvor <p><strong>329<small>kr</small></strong> <del>1 856kr</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf73pcpfsdamc329&ref=sv_imf73pcpfsdamcpurchase1901<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase1901-sv');">
            <span>KÖP NU</span>
          </a>
        </th>
      </tr>
      </tfoot>
    </table>
  </div>
  <!-- end comparison_table -->
  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl class="payment">
      <dd>Godkända Betalningsalternativ</dd>
      <dt><img src="<?php echo getStaticUrl('images/payments.jpg')?>" alt=""/></dt>
    </dl>
    <dl class="moneyback">
      <dd>Pengarna Tillbaka Garanti</dd>
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    </dl>
    <dl class="amgold">
      <dd>Support</dd>
      <dt>
        <p><img src="<?php echo getStaticUrl('images/email.jpg')?>">Teknisk support, 24/7 </p>
        <p><img src="<?php echo getStaticUrl('images/phone.jpg')?>">Live Chatttjänst</p>
      </dt>
    </dl>
  </div>
  <!-- service end -->
</div>

<!-- footer start -->
<div class="footer clearfix">
  <dl class="annotation">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
</div>
<!-- footer end -->

<script>
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $(".banner .box ul strong").eq(0).text(h).end().eq(1).text(i).end().eq(2).text(s).end().eq(3).text(mi);
    setTimeout('cycleCountdown()', 1);
  }
  $(function () {
    $.fn.target=function (target) {
      $(this).click(function() {
        var Theigth = target.offset().top;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
      });
    };
    $("a.intro").target($("#compare"));
    cycleCountdown();
    $(".users li").mouseover(function(event) {
      var num = $(this).index();
      $(".users li").eq(num).addClass('current').siblings().removeClass('current');
      $(".user_rev .content > dl").eq(num).addClass('active').siblings().removeClass('active');
    }); 
  });
</script>
</body>
</html>