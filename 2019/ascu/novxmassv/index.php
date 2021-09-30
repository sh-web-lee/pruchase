<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) -69997174;

$packsNum = ceil(microtime_float()*2000/20000);
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit;
}

if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','ascofficialfree','ascofficialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
        'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3','pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
        'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion')
)){
  $refstr='-'.$_GET['st'];
}else{
  $refstr='';
}

if(in_array($_GET['ref'],array('nc_fr'))){
  $refstr.='-'.$_GET['ref'];
}

if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc','xi_asc','xb_asc'))){
  $refstr.='-'.$_GET['pop'];
}
$refstr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spara 84% rabatt på Advanced SystemCare Ultimate - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>Denna veckas specialerbjudande</h1>
      <p>Trevlig helg, missa inte den gåva vi har för dig.</p>
    </div>
    <!-- message -->
    <div class="message clearfix">

      <!-- 1pc asc -->
      <div class="message-box small fl">
        <!-- off -->
        <div class="off">56% rabatt </div>
        <!-- box -->
        <div class="box">ASCU PRO</div>
        <!-- price -->
        <p class="price"><span><big>349</big> kr</span> <del>799 kr</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-ascu133pc349&ref=sv_ascu133pcpurchasexmas1911<?php echo $refstr;?>&refs=sv_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpurchasexmas1911-sv')">
          <i class="all-icons"></i> KÖP NU
        </a>
      </div>

      <!-- 3pc asc -->
      <div class="message-box large fr">
        <!-- off -->
        <div class="off">84% rabatt </div>
        <!-- box -->
        <div class="box">
          ASCU PRO
          <span>Gratis värderad till 1 387 kr</span>
        </div>
        <!-- price -->
        <p class="price large"><span><big>349</big> kr</span> <del>2 186 kr</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=sv-ascu133pcpfsdisu349&ref=sv_ascu133pcpfsdisupurchasexmas1911<?php echo $refstr;?>&refs=sv_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascubundlepurchasexmas1911-sv')">
          <i class="all-icons"></i> KÖP NU
        </a>
        <!-- countdown -->
        <p class="countdown">
          <i class="all-icons"></i> Tim:
          <strong>00</strong> Min:
          <strong>00</strong> Sek:
          <strong>00</strong> Ms:
          <strong class="last">000</strong>*
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment wrapper">
  <img src="<?php echo getStaticUrl('images/payment.png')?>images/payment.png" alt="">
</div>
<!-- end payment -->

<!-- intro -->
<div class="intro wrapper">
  <h2>Detta får du när du aktiverar ASCU PRO</h2>
  <div class="content clearfix">
    <img src="<?php echo getStaticUrl('images/content.png')?>">
    <dl>
      <dd>Skyddar mot virus, spionprogram, hackare, nätfiske, botnät och andra typer av skadlig kod</dd>
      <dd>Skyddar din integritet i realtid medan du surfar på Internet</dd>
      <dd>Snabbar upp, rengör och reparerar alla typer av problem i din PC med bara ett klick</dd>
      <dd>Resurssnålt, lätt att använda och kompatibel med andra säkerhetsprogram.</dd>
      <p><a href="javascript: void(0);" onclick="goTaget($('.comparison'),150)">Lär dig mer om PRO-versionen</a></p>
    </dl>
  </div>
</div>
<!-- end intro -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>Missa inte den gåvar vi har för dig</h2>
    <!-- gifts message -->
    <div class="gifts-message clearfix">
      <!-- pf -->
      <div class="gifts-box">
        <dl class="pf">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon01.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>Protected Folder</h3>
            <em>1 År / 1 PC</em>
            <span class="arrow"></span>
            <ul>
              <li>Skydda dina filer från skadliga attacker.</li>
              <li>Ett lösenord för alla filer.</li>
              <li>Skydda dina filer från andra.</li>
            </ul>
          </dd>
        </dl>
      </div>
      <!-- sd -->
      <div class="gifts-box">
        <dl class="sd">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon02.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>Smart Defrag 6 PRO</h3>
            <em>1 År / 1 PC</em>
            <span class="arrow"></span>
            <ul>
              <li>Högre defragmenteringshastighet.</li>
              <li>Auto-defragmentera valda filer.</li>
              <li>Snabbare uppstart av datorn.</li>
            </ul>
          </dd>
        </dl>
      </div>
      <!-- isu -->
      <div class="gifts-box last">
        <dl class="isu">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon03.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>IObit Software Updater 2 PRO</h3>
            <em>1 År / 1 PC</em>
            <span class="arrow"></span>
            <ul>
              <li>Uppdatera automatiskt programvaror.</li>
              <li>1-klick för att hålla programvarorna uppdaterade.</li>
              <li>Ladda ned och installera nödvändiga programvaror direkt.</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
    <!-- buybtn -->
    <a class="buybtn larger"
       href="https://www.iobit.com/buy.php?product=sv-ascu133pcpfsdisu349&ref=sv_ascu133pcpfsdisupurchasexmas1911<?php echo $refstr;?>&refs=sv_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascubundlepurchasexmas1911-sv')">
      <i class="all-icons"></i> Skaffa Det Nu
    </a>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review wrapper">
  <div class="container">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews dg-center">
          <dt><img src="<?php echo getStaticUrl('images/addictivetips.png')?>" alt=""></dt>
          <dd>
            <h2>
              I media
            </h2>
            <p>”Advanced SystemCare Ultimate är ett kraftfullt antivirus- och systemoptimeringsverktyg. Förutom att det skyddar din PC mot skadeprogram, virus och liknande hot, kan det också öka PC-prestandan med hjälp av olika korrigeringar, genom att ta bort skräpfiler och genom att skanna lokala diskvolymer för sårbarheter i systemet etc.”</p>
            <cite>Addictivetips</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/russell-peck.png')?>" alt=""></dt>
          <dd>
            <h2>
              Användares omdömen
            </h2>
            <p>"Jag har använt olika versioner av Advanced SystemCare under flera år. När jag tittade på funktionerna i Advanced SystemCare Ultimate visste jag att jag var tvungen att ha det. Det har inte gjort mig besviken. Ett av de enklaste men mest effektiva program som jag har funnit för att hålla alla tre av mina datorer friska."</p>
            <cite>Russell Peck</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt=""></dt>
          <dd>
            <h2>
              Användares omdömen
            </h2>
            <p>"Med den förra versionen av Advanced Systemcare Ultimate hade jag inga som helst problem med mitt system som malwares med mera. Nu uppdaterat med flera funktioner arbetar min dator 5x snabbare än tidigare. Jag gillar även det nya utseendet. Nästa gång när jag uppdaterar andras datorer kommer jag att rekommendera Advanced Systemcare Ultimate som deras antivirus och systemoptimerare."</p>
            <cite>Dareen Lim</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo  getStaticUrl('images/rod-garnett.png')?>" alt=""></dt>
          <dd>
            <h2>
              Användares omdömen
            </h2>
            <p>"Jag har tidigare alltid behövt krångla med min dator när problem uppstått. Sedan skaffade jag Advanced SystemCare för första gången. Det finns inget behov av att krångla längre. Nu när jag har antivirusprogrammet som ingår i produkten behöver jag inte längre sekundär programvara. Med Advanced Systemcare Ultimate har jag vunnit på jackpot. Högvinst! Min dator är numera alltid aktuell och snabb som en galopperande häst. Andra produkter är bara en ständig ström konflikter jämfört med det här."</p>
            <cite>Rod Garnett</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison wrapper">
  <h4>Varför Välja Advanced SystemCare Ultimate 13?</h4>
  <h5>Se vad PRO-versionen kan göra för dig:</h5>
  <div class="ctable">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text"></th>
        <th class="blue">
          <p><span>Advanced SystemCare</span> Ultimate</p>
        </th>
        <th>AVG<span>Anti-virus</span></th>
        <th>Norton Security<span>Deluxe</span></th>
        <th>Avast! Pro<span>Antivirus</span></th>
        <th>Microsoft<span>Security Essentials</span></th>
        <th>McAfee® AntiVirus</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="title first">Träffsäkerhet</td>
        <td class="gray">Väldigt hög</td>
        <td>Normal</td>
        <td>Hög</td>
        <td>Normal</td>
        <td>Hög</td>
        <td>Hög</td>
      </tr>
      <tr>
        <td class="title">Prestandafördröjning</td>
        <td class="gray">Nej</td>
        <td>Ja</td>
        <td>Ja</td>
        <td>Ja</td>
        <td>Ja</td>
        <td>Ja</td>
      </tr>
      <tr>
        <td class="title">Bästa PC-rengöring och optimering</td>
        <td class="gray"><i class="tb-icons red">√</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
      </tr>
      <tr>
        <td class="title">Över 20 extra verktyg för datorprestanda</td>
        <td class="gray"><i class="tb-icons red">√</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
      </tr>
      </tbody>
    </table>
  </div>
  <dl class="comlist">
    <dt>
      <i class="all_icons">√</i>
      Oöverträffad Detekteringsgrad och Maximalt Skydd
    </dt>
    <dd>
      Ett klick för att rengöra envisa virus, trojaner, maskar, spionprogram, adware och olika skadliga program. Advanced SystemCare Ultimate ger också ett ständigt,
      automatiskt, och proaktivt skydd mot alla typer av säkerhetshot på Internet, med snabb uppdatering av virusdatabasen.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="all_icons">√</i>
      Njut av Övertygande Säkerhet utan Avmattat System
    </dt>
    <dd>
      Ditt system körs i topphastighet utan prestandafördröjning, tack vare vår branschledande Internetsäkerhet
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="all_icons">√</i>
      Säker Surf, Ladda Ner och Dela med Förtroende
    </dt>
    <dd>
      Proaktiv teknik för viruskontroll övervakar processernas beteende i realtid, genomsöker filer som delas med e-post och blockerar eventuella hot. Oöverträffad träffsäkerhet försäkrar dig en säkrare miljö när du använder din PC.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="all_icons">√</i>
      Få Vältrimmad Prestanda och Njut av en Ny PC-Känsla
    </dt>
    <dd>
      Den redan bevisat kraftfulla finjusteringsförmågan släpper loss den fulla kraften i din PC. Med realtidsoptimering och en ActiveBoost-funktion kan systemresurserna intelligent försäkra dig om en supersnabb PC.
    </dd>
  </dl>
</div>
<!-- end comparison -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- box -->
    <div class="box fl">ASCU PRO</div>
    <!-- bottombuy-mid -->
    <div class="bottombuy-mid fl">
      <!-- countdown -->
      <p class="countdown">
        <strong>00</strong> Min:
        <strong>00</strong> Sek:
        <strong>00</strong> Ms:
        <strong class="last">000</strong>*
      </p>
      <!-- off -->
      <div class="off"></div>
    </div>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price white"><span><big>349</big> kr</span> <del>2 186 kr</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=sv-ascu133pcpfsdisu349&ref=sv_ascu133pcpfsdisupurchasexmas1911<?php echo $refstr;?>&refs=sv_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascubundlepurchasexmas1911-sv')">
          <i class="all-icons"></i> KÖP NU
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- service start  -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd><strong>Accepterade Betalningssätt </strong>Gratis 24/7 Teknisk Support vid <br>Behov Live Chattjänst</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
      <dd><strong>Pengarna- tillbaka-garanti </strong>Om du inte är nöjd med produkten inom  <br>60 dagar,ger vi dig pengarna tillbaka.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><strong>Säker betalning </strong>IObit stöder flera säkra betalningsal-<br>ternativ.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
      <dd><strong>Få Licens </strong>Du kommer få licensen inom några <br>minuter efter betalning..</dd>
    </dl>
  </div>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  </dl>
  <div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</div>
</div>
<!-- footer end -->

<!-- float -->
<div class="float">
  <p>
    Upp till
    <b>84% rabatt</b>
    1 års prenumation / 3 PC
  </p>
  <!-- buybtn -->
  <a class="buybtn small"
     href="https://www.iobit.com/buy.php?product=sv-ascu133pcpfsdisu349&ref=sv_ascu133pcpfsdisupurchasexmas1911<?php echo $refstr;?>&refs=sv_purchase_ascu"
     onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascubundlepurchasexmas1911-sv')">
    KÖP NU
  </a>
  <!-- close -->
  <a class="close" href="javascript: closeFloat();">×</a>
</div>
<!-- end float -->

<!-- pop -->
<div class="pop">
  <div class="coupon">
    <a class="pop-buy"
       href="https://www.iobit.com/buy.php?product=sv-ascu133pcpfsdisu349&ref=sv_ascu133pcpfsdisupurchasexmas1911<?php echo $refstr;?>&refs=sv_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascubundlepurchasexmas1911-sv')"></a>
    <!-- hand -->
    <img class="hand" src="<?php echo getStaticUrl('images/hand.png')?>" alt="">
    <!-- close -->
    <a class="pop-close" href="javascript: closePop();">×</a>
  </div>
</div>

<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js//review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>