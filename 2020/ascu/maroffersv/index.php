<?php
error_reporting(0);
define('IObit', 'IObit');
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

$buyNum = ceil(microtime_float() * 1000 / 20000) -69997174;

$packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }

$refStr='';
//if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
//        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
//        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
//        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
//        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
//        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
//        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
//        'asc_gift','asc_pro11','asc_pro12','ascofficialfree','ascofficialpro',
//        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
//        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
//        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
//        'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3','pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
//        'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion')
//)){
//  $refstr='-'.$_GET['st'];
//}else{
//  $refstr='';
//}
$refstr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
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
  <title>Upp till 81% rabatt p?? Advanced SystemCare Ultimate -IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <div class="title">
      <h1>EXKLUSIV REA</h1>
      <p>Upp till <b>81%</b> p?? Advanced SystemCare Ultimate och f?? en gratis</p>
    </div>
    <div class="clearfix">
      <div class="offer left small">
        <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt="Advacced SystemCare Ultimate"/>
        <div class="discount">
          <b>56<small>%</small></b>
          <span>RABATT</span>
        </div>
        <div class="price">
          <p>Ord. pris <del>799 kr</del></p>
          <p><strong>349 <small>kr</small></strong></p>
          <a class="buybtn graybtn"
             href="https://www.iobit.com/buy.php?product=sv-ascu143pc349&ref=sv_ascu143pcpurchase2101<?php echo $refstr;?>&refs=sv_purchase_ascu"
             onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase2101-sv')">
            K??P NU
          </a>
        </div>
      </div>
      <div class="offer right large">
        <div id="topcount" class="countdown">Tim:<b>00</b>, Min:<b>10</b>, Sek:<b>52</b>, Ms:<b>716</b>*</div>
        <img src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt="Advacced SystemCare Ultimate"/>
        <div class="discount big">
          <b>81<small>%</small></b>
          <span>RABATT</span>
        </div>
        <div class="price">
          <p>Ord. pris <del>1 857 kr</del></p>
          <p><strong>349 <small>kr</small></strong></p>
          <a class="buybtn greenbtn"
             href="https://www.iobit.com/buy.php?product=sv-ascu143pcpfsd349&ref=sv_ascu143pcpfsdpurchase2101<?php echo $refstr;?>&refs=sv_purchase_ascu"
             onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpfsdpurchase2101-sv');">
            K??P NU
          </a>
          <p class="people">Mer ??n <b>3 365 <span id="num">695</span></b> personer har redan k??pt den</p>
        </div>
        <!-- <div class="mask"><span class="sold-word">UTS??LD</span></div> -->
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- intro start -->
<div class="intro wrapper">
  <h2>Aktivera Advanced SystemCare Ultimate f??rattf?? en snabbareochs??kraredator!</h2>
  <div class="clearfix">
    <div class="screen fl"><img src="<?php echo getStaticUrl('images/screen.png')?>" alt=""/></div>
    <ul class="intro-list fr">
      <li>Skyddar mot virus, spionprogram, hackare, n??tfiske, botn??t och andra typer av skadlig kod</li>
      <li class="single">Skyddar din integritet i realtid medan du surfar </li>
      <li>Snabbar upp, reng??r och reparerar alla typer av problem i din PC med bara ett klick </li>
      <li>Minska systems f??rdr??jning och skynda p?? dator upp till 200% snabbare</li>
    </ul>
  </div>
</div>
<!-- intro end -->

<!-- giftbox start -->
<div class="giftbox">
  <div class="wrapper">
    <h2>Missa inte den g??var vi har f??r dig</h2>
    <div class="clearfix">
      <dl class="pf"> 
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h3>Protected Folder</h3>
          <strong>0<small>kr</small></strong>
          <p>Skydda dina filer fr??n skadliga attacker.</p>
          <p>Ett l??senord f??r alla filer.</p>
          <p>Skydda dina filer fr??n andra.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 7 PRO"/></dt>
        <dd>
          <h3>Smart Defrag 7 PRO</h3>
          <strong>0<small>kr</small></strong>
          <p>H??gre defragmenteringshastighet.</p>
          <p>Auto-defragmentera valda filer.</p>
          <p>Snabbare uppstart av datorn.</p>
        </dd>
      </dl>
    </div>
    <a class="buybtn greenbtn"
       href="https://www.iobit.com/buy.php?product=sv-ascu143pcpfsd349&ref=sv_ascu143pcpfsdpurchase2101<?php echo $refstr;?>&refs=sv_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpfsdpurchase2101-sv');">
      Skaffa Det Nu
    </a>
    <!-- <div class="mask"><span class="sold-word">UTS??LD</span></div> -->
  </div>
</div>
<!-- giftbox end -->

<!-- review start -->
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
            <p>???Advanced SystemCare Ultimate ??r ett kraftfullt antivirus- och systemoptimeringsverktyg. F??rutom att det skyddar din PC mot skadeprogram, virus och liknande hot, kan det ocks?? ??ka PC-prestandan med hj??lp av olika korrigeringar, genom att ta bort skr??pfiler och genom att skanna lokala diskvolymer f??r s??rbarheter i systemet etc.???</p>
            <cite>Addictivetips</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/russell-peck.png')?>" alt=""></dt>
          <dd>
            <h2>
              Anv??ndares omd??men
            </h2>
            <p>"Jag har anv??nt olika versioner av Advanced SystemCare under flera ??r. N??r jag tittade p?? funktionerna i Advanced SystemCare Ultimate visste jag att jag var tvungen att ha det. Det har inte gjort mig besviken. Ett av de enklaste men mest effektiva program som jag har funnit f??r att h??lla alla tre av mina datorer friska."</p>
            <cite>Russell Peck</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt=""></dt>
          <dd>
            <h2>
              Anv??ndares omd??men
            </h2>
            <p>"Med den f??rra versionen av Advanced Systemcare Ultimate hade jag inga som helst problem med mitt system som malwares med mera. Nu uppdaterat med flera funktioner arbetar min dator 5x snabbare ??n tidigare. Jag gillar ??ven det nya utseendet. N??sta g??ng n??r jag uppdaterar andras datorer kommer jag att rekommendera Advanced Systemcare Ultimate som deras antivirus och systemoptimerare."</p>
            <cite>Dareen Lim</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo  getStaticUrl('images/rod-garnett.png')?>" alt=""></dt>
          <dd>
            <h2>
              Anv??ndares omd??men
            </h2>
            <p>"Jag har tidigare alltid beh??vt kr??ngla med min dator n??r problem uppst??tt. Sedan skaffade jag Advanced SystemCare f??r f??rsta g??ngen. Det finns inget behov av att kr??ngla l??ngre. Nu n??r jag har antivirusprogrammet som ing??r i produkten beh??ver jag inte l??ngre sekund??r programvara. Med Advanced Systemcare Ultimate har jag vunnit p?? jackpot. H??gvinst! Min dator ??r numera alltid aktuell och snabb som en galopperande h??st. Andra produkter ??r bara en st??ndig str??m konflikter j??mf??rt med det h??r."</p>
            <cite>Rod Garnett</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h4>Varf??r V??lja Advanced SystemCare Ultimate 14?</h4>
  <h5>Se vad PRO-versionen kan g??ra f??r dig:</h5>
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
        <th>McAfee?? AntiVirus</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="title first">Tr??ffs??kerhet</td>
        <td class="gray">V??ldigt h??g</td>
        <td>Normal</td>
        <td>H??g</td>
        <td>Normal</td>
        <td>H??g</td>
        <td>H??g</td>
      </tr>
      <tr>
        <td class="title">Prestandaf??rdr??jning</td>
        <td class="gray">Nej</td>
        <td>Ja</td>
        <td>Ja</td>
        <td>Ja</td>
        <td>Ja</td>
        <td>Ja</td>
      </tr>
      <tr>
        <td class="title">B??sta PC-reng??ring och optimering</td>
        <td class="gray"><i class="tb-icons red">???</i></td>
        <td><i class="tb-icons">??</i></td>
        <td><i class="tb-icons">??</i></td>
        <td><i class="tb-icons">??</i></td>
        <td><i class="tb-icons">??</i></td>
        <td><i class="tb-icons">??</i></td>
      </tr>
      <tr>
        <td class="title">??ver 20 extra verktyg f??r datorprestanda</td>
        <td class="gray"><i class="tb-icons red">???</i></td>
        <td><i class="tb-icons">??</i></td>
        <td><i class="tb-icons">??</i></td>
        <td><i class="tb-icons">??</i></td>
        <td><i class="tb-icons">??</i></td>
        <td><i class="tb-icons">??</i></td>
      </tr>
      </tbody>
    </table>
  </div>
  <dl class="comlist">
    <dt>
      <i class="all_icons">???</i>
      O??vertr??ffad Detekteringsgrad och Maximalt Skydd
    </dt>
    <dd>
      Ett klick f??r att reng??ra envisa virus, trojaner, maskar, spionprogram, adware och olika skadliga program. Advanced SystemCare Ultimate ger ocks?? ett st??ndigt,
      automatiskt, och proaktivt skydd mot alla typer av s??kerhetshot p?? Internet, med snabb uppdatering av virusdatabasen.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="all_icons">???</i>
      Njut av ??vertygande S??kerhet utan Avmattat System
    </dt>
    <dd>
      Ditt system k??rs i topphastighet utan prestandaf??rdr??jning, tack vare v??r branschledande Internets??kerhet
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="all_icons">???</i>
      S??ker Surf, Ladda Ner och Dela med F??rtroende
    </dt>
    <dd>
      Proaktiv teknik f??r viruskontroll ??vervakar processernas beteende i realtid, genoms??ker filer som delas med e-post och blockerar eventuella hot. O??vertr??ffad tr??ffs??kerhet f??rs??krar dig en s??krare milj?? n??r du anv??nder din PC.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="all_icons">???</i>
      F?? V??ltrimmad Prestanda och Njut av en Ny PC-K??nsla
    </dt>
    <dd>
      Den redan bevisat kraftfulla finjusteringsf??rm??gan sl??pper loss den fulla kraften i din PC. Med realtidsoptimering och en ActiveBoost-funktion kan systemresurserna intelligent f??rs??kra dig om en supersnabb PC.
    </dd>
  </dl>
</div>
<!-- comparison end -->

<!-- footbuy start-->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img class="on" src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt="" />
      <img class="pc" src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt="" />
    </div>
    <ul class="changelist fl">
      <li class="on" data-num="1"><span>1 ??r / 3 PC + Gratis g??vor</span> <strong>Spara 1 508 kr</strong></li>
      <li data-num="0"><span>1 ??r / 3 PC</span> <strong>Spara 450 kr</strong></li>
    </ul>
    <div class="price fr">
      <p><strong>349 <small>kr</small></strong> Ord. pris <del>1 857 kr</del></p>
      <a class="buybtn greenbtn"
         href="https://www.iobit.com/buy.php?product=sv-ascu143pcpfsd349&ref=sv_ascu143pcpfsdpurchase2101<?php echo $refstr;?>&refs=sv_purchase_ascu"
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascu3pcpfsdpurchase2101-sv');">
        K??P NU
      </a>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- service start -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
      <dd><strong>Accepterade Betalningss??tt </strong>Gratis 24/7 Teknisk Support vid <br>Behov Live Chattj??nst</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
      <dd><strong>Pengarna- tillbaka-garanti </strong>Om du inte ??r n??jd med produkten inom  <br>60 dagar,ger vi dig pengarna tillbaka.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
      <dd><strong>S??ker betalning </strong>IObit st??der flera s??kra betalningsal-<br>ternativ.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
      <dd><strong>F?? Licens </strong>Du kommer f?? licensen inom n??gra <br>minuter efter betalning..</dd>
    </dl>
  </div>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*.Uppgifter kan variera beroende p?? olika system eller datorer.</dd>
    <dd>*.Reklamkampanjer kan emellan??t ??ndras utan f??rvarning, efter v??rt eget godtycke.</dd>
  </dl>
  <div class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Alla R??ttigheter F??rbeh??llna</div>
</div>
<!-- footer end -->

<!-- pop start -->
<!-- <div class="pop-bg"></div> -->
<!-- <div class="pop"> -->
  <!-- <h2>Du har valts ut f??r att vinna v??r <span>extra gratis present</span> till PC!</h2>
  <div class="imgbox fl">
    <img src="<?php echo getStaticUrl('images/ascu-pop-box.png')?>" alt=""/>
    <div class="tips">
      <dl>
        <dt><b>IObit Software Updater PRO</b></dt>
        <dd>1-klick f??r att h??lla programvarorna uppdaterade.</dd>
        <dd>Ladda ned och installera n??dv??ndiga programvaror direkt.</dd>
      </dl>
    </div>
  </div>
  <div class="price fl">
    <div id="popcount" class="countdown">Tim:<b>00</b>, Min:<b>10</b>, Sek:<b>52</b>, Ms:<b>716</b>*</div>
    <p>Ord. pris <del>2 186kr</del></p>
    <p><strong>349 <small>kr</small></strong></p>
    <a class="buybtn greenbtn"
       href="https://www.iobit.com/buy.php?product=sv-ascu133pcpfsdisu349&ref=sv_ascu133pcpfsdisupurchasepop2011<?php echo $refstr;?>&refs=sv_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupoppurchase2011-sv');">
      H??mta det nu
    </a>
  </div>
  <ul class="pop-close">
    <li class="mini"><i></i> <span>minimera</span></li>
    <li class="close"><i></i> <span>st??ng</span></li>
  </ul> -->
  <!-- <div class="mask"><span class="sold-word">UTS??LD</span></div> -->
<!-- </div> -->
<!-- pop end -->

<!-- popsmall start -->
<!-- <div class="popsmall">
  <div id="popsmallcount" class="countdown">Tim:<b>00</b>, Min:<b>10</b>, Sek:<b>52</b>, Ms:<b>716</b>*</div>
  <a class="buybtn greenbtn"
     href="https://www.iobit.com/buy.php?product=sv-ascu133pcpfsdisu349&ref=sv_ascu133pcpfsdisupurchasepop2011<?php echo $refstr;?>&refs=sv_purchase_ascu"
     onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupoppurchase2011-sv');">
    Skaffa Det Nu
  </a>
  <p>BARA IDAG, SKYNDA DIG!</p>
  <ul class="pop-close">
    <li class="maxi"><i></i> <span>maximera</span></li>
  </ul>
</div> -->
<!-- popsmall end -->

<script> var refstr = '<?php echo $refstr;?>';</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js//review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>