<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

// $time = time();
// if(isset($_COOKIE['toreturn'])&&$time-$_COOKIE['toreturn']>86400){
//   $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
//   header("Location:return.php?".$param);
//   exit;
// }else{
//   if(!isset($_COOKIE['toreturn'])) setcookie('toreturn',$time,$time+2592000);
// }

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
    $date = $_GET['d'];
    $cName = 'febofferes' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum > 5) {
            $packsNum--;
            setcookie($cName, $packsNum);
            if (rand(0, 100) % 2 == 0) {
                $packsNum = $packsNum + 1;
            }
        } else {
            $packsNum = 5;
        }
    } else {
        $packsNum = 50;
        setcookie($cName, $packsNum);
    }
    echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum));
    exit();
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Spara 88% rabatt på Driver Booster PRO och få extra skydd på köpet – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper new_w">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      
    </h1>
    <div class="cont">
        <div class="left">
          <img class="offer-img" src="<?php echo $pResUrl; ?>images/offer.png" alt="">
          <p>1 År / 3 PC</p>
          <i class="add"></i>
        </div>
        <dl class="center soldout-box">
          <dt>Gratis gåvor under en begränsad tid</dt>
          <ul>
            <li>
              <img src="<?php echo $pResUrl; ?>images/nav-0.png" alt="">
              <p>
                <span class="title">Protected Folder</span>
                <span class="mor"><b><span>0</span>kr</b>&nbsp;<del>499kr</del></span>
              </p>
            </li>
            <li>
              <img src="<?php echo $pResUrl; ?>images/nav-1.png" alt="">
              <p>
                <span class="title">Smart Defrag PRO</span>
                <span class="mor"><b><span>0</span>kr</b>&nbsp;<del>459kr</del></span>
              </p>
            </li>
            <li>
              <img src="<?php echo $pResUrl; ?>images/nav-2.png" alt="">
              <p>
                <span class="title">IObit Uninstaller</span>
                <span class="mor"><b><span>0</span>kr</b>&nbsp;<del>399kr</del></span>
              </p>
            </li>
          </ul>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/lh.png" alt=""><span>1557kr</span>
            <p>En gång om året, exklusivt på jul</p>
          </dd>
          <div class="time" id="countdown2">
              <img src="<?php echo $pResUrl; ?>images/bell.png" alt="">
              <p class="countdown" id="countdown2">
            <em>Upphör att gälla om </em>
            <strong>05</strong> <span>M <b>:</b></span>
            <strong>00</strong> <span>S <b>:</b></span>
            <strong class="last">00</strong> <span>Ms</span>
          </p>
              <!-- <i>¡date prisa! solo <i class="t">03</i> M: <i class="t">54</i> S: <i class="t">79</i> MS</i> -->
          </div>
        </dl>
        <dl class="right">
          <dt>Driver Booster 8 PRO</dt>
          <p class="dt_t soldout-block"> 1 År / 3 PC</p>
          <dd class="one">
            <span >349kr</span> <del class="original">899kr </del> <span> 1 År / 3 PC</span>
          </dd>
          <dd class="two soldout-none">
            <img src="<?php echo $pResUrl; ?>images/lh.png" alt=""><span>Exklusiva julklappspaket</span>
          </dd>
          <dd class="three">
              <p class="t">Total: <span>279<b>kr</b></span> <del class="original">2256kr</del></p>
              <a class="ga-button" href="https://www.iobit.com/buy.php?product=sv-db83pciusdpf279&ref=sv_db83pciusdpf279purchase2011xr<?= $refStr; ?>&refs=sv_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pciusdpfpurchase2011xr-sv');"
              >
                <button class="buy">Köp nu</button>
              </a>
              <p class="b">Endast 24.92 kr per månad</p>
          </dd>
        </dl>
    </div>
    </div>
  </div>
<!-- banner end -->
<!-- service -->
<div class="service wrapper clearfix">
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
          <dd>
            <h3>Accepterade Betalningssätt</h3>
            <p>Gratis 24/7 Teknisk Support vid Behov Live Chattjänst</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
          <dd>
            <h3>Pengarna- tillbaka-garanti</h3>
            <p>Om du inte är nöjd med produkten inom 60 dagar,ger vi dig pengarna tillbaka.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/secure.png" alt=""></dt>
          <dd>
            <h3>Säker betalning</h3>
            <p>IObit stöder flera säkra betalningsal- ternativ.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/cart.png" alt=""></dt>
          <dd>
            <h3>Få Licens</h3>
            <p>Du kommer få licensen inom några minuter efter betalning..</p>
          </dd>
        </dl>
      </div>
 <!-- feature start -->
 <div class="feature-box">
 <div class="feature wrapper">
    <img class="feature-db" src="<?php echo $pResUrl; ?>images/feature-db.png" alt=""/>
    <dl class="one clearfix">
      <dt><img src="<?php echo $pResUrl; ?>images/feature-icon01.png" alt=""></dt>
      <dd>
        <h3>IDrivrutinsuppdateringar <strong>med 1-klick</strong></h3>
        <p>
          Ge dig en “one-stop” drivrutinsdetektering och uppdateringslösning.
        </p>
      </dd>
    </dl>
    <dl class="two clearfix">
      <dt><img src="<?php echo $pResUrl; ?>images/feature-icon02.png" alt=""></dt>
      <dd>
        <h3><strong> Säker</strong> drivrutinsnedladdning och uppdatering</h3>
        <p>
          Säkerhetskopiera och skapa systemåterställningspunkt <br> automatiskt före uppdatering, i händelse av något som är oväntat.
        </p>
      </dd>
    </dl>
    <dl class="three clearfix">
      <dt><img src="<?php echo $pResUrl; ?>images/feature-icon03.png" alt=""></dt>
      <dd>
        <h3><strong>Ingen oväntad</strong> systemkrasch </h3>
        <p>
          Håll alltid alla drivrutiner uppdaterade <br> så att du får en stabil dator.</p>
      </dd>
    </dl>
    <dl class="four clearfix">
      <dt><img src="<?php echo $pResUrl; ?>images/feature-icon04.png" alt=""></dt>
      <dd>
        <h3> <strong>100% * snabbare</strong> nedladdning</h3>
        <p>Tidsbesparande med nedladdning i tid när <br> system är på tomgång med upp till 100%* <br> snabbare hastighet. </p>
      </dd>
    </dl>
    <dl class="five clearfix">
      <dt><img src="<?php echo $pResUrl; ?>images/feature-icon05.png" alt=""></dt>
      <dd>
        <h3><strong>Högsta spelprestanda</strong> garanterad</h3>
        <p>
          En enorm spelkomponentdatabas inklusive Nvidia, Realtek, <br> Intel, AMD, Broadcom, VIA, Microsoft Visual C ++ 2017 <br> Redistributable, osv. för att säkerställa smidig spelupplevelse.
        </p>
      </dd>
    </dl>
  </div>
 </div>
  <!-- feature end -->


<div class="paquete soldout-box">
  <img class="soldout-block soldout-img" src="<?php echo $pResUrl; ?>images/center-soldout.png" alt="">
  <dl class="wrapper soldout-none">
    <dt>Den exklusiva julklappen för att köpa<br/> Driver Booster Pro, missa inte den</dt>
    <dd>
      <div class="item">
        <img src="<?php echo $pResUrl; ?>images/sdp.png" alt="">
        <h4>Smart Defrag PRO</h4>
        <p class="one">Defragmentera snabbt och grundligt för att optimera hårddiskens och datorns prestanda</p>
        <p class="two"><span>0</span>kr&nbsp;<del>459kr</del></p>
      </div>
      <div class="item">
        <img src="<?php echo $pResUrl; ?>images/iu.png" alt="">
        <h4>IObit Uninstaller 10 PRO</h4>
        <p class="one">Avinstallera Program Helt, Rengör Rester Automatiskt och Uppdatera Program Enkelt</p>
        <p class="two"><span>0</span>kr&nbsp;<del>399kr</del></p>
      </div>
      <div class="item">
        <img src="<?php echo $pResUrl; ?>images/pf.png" alt="">
        <h4>Protected Folder</h4>
        <p class="one">Effektivt filskyddsverktyg som garanterar säkerheten för dina viktiga mappar, data och din integritet!</p>
        <p class="two"><span>0</span>kr&nbsp;<del>499kr</del></p>
      </div>
    </dd>
    <a class="ga-button" href="https://www.iobit.com/buy.php?product=sv-db83pciusdpf279&ref=sv_db83pciusdpf279purchase2011xr<?= $refStr; ?>&refs=sv_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pciusdpfpurchase2011xr-sv');"
    >
      <button class="buy">Köp nu</button>
    </a>
  </dl>
</div>


  <!-- comparison start -->
  <div class="comparison-box">
  <div class="comparison wrapper">
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">Vilka fördelar har du som PRO användare?</th>
          <th class="space"></th>
          <th class="itema">
            <div class="pro">
              <h3>  Driver Booster Pro</h3>
              <em class="all-icons smile"></em>
            </div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="free">
              <h3>Driver Booster Free</h3>
              <em class="all-icons"></em>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon01.png" alt=""/></td>
          <td class="virtue">Automatisk identifikation av föråldrade, saknade och felaktiga drivrutiner</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon02.png" alt=""/></td>
          <td class="virtue">
              Lås upp hastighetsgränsen för nedladdning av drivrutiner
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon03.png" alt=""/></td>
          <td class="virtue vtop">
              Prioriterar att uppdatera föråldrade och sällsynta drivrutiner
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon04.png" alt=""/></td>
          <td class="virtue">
            Reducerar systemfrysningar och krascher för bättre prestanda
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon05.png" alt=""/></td>
          <td class="vtop">
            Automatisk Hämtning av Drivrutiner och Installation medan Systemet är Inaktivt
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon06.png" alt=""/></td>
          <td class="virtue">Automatisk Säkerhetskopiering av Alla Drivrutiner för Säker Återställning</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon07.png" alt=""/></td>
          <td class="virtue">
              Privilegium att Uppdatera Spelkomponenter för Bättre Spelande
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon08.png" alt=""/></td>
          <td class="virtue">Upptäcker och Åtgärdar Enhetsfel Effektivt</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon09.png" alt=""/></td>
          <td class="virtue"> Automatisk Uppdatering till Senaste Versionen</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon10.png" alt=""/></td>
          <td class="virtue"> Gratis Teknisk Support vid Behov, Dygnet Runt</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>VI GÖR ALLT MÖJLIGT FÖR ATT MÖTA VÅRA <br> KUNDER OAVSETT VAR DU ÄR!</h2>
    <div class="reviewbox">
      <h3>Vad säger andra</h3>
      <ul>
        <li class="one"><img src="<?php echo $pResUrl; ?>images/pcmag.png" alt="PC Magazine"></li>
        <li class="two">
          <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund">
        </li>
        <li class="three">
          <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya">
        </li>
        <li class="four"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler"></li>
      </ul>
      <div class="details">
        <div>
          <h4>PC Magazine <span class="flag de"></span></h4>
          <p>
            “IObit tillverkar många olika verktyg, och Driver Booster PRO, som automatiskt uppdaterar dina drivrutiner är ett av dem bästa.”- PC Magazine
        </div>
        <div class="active">
          <h4>Adam Backlund <span class="flag us"></span></h4>
          <p>
            "Driver booster är en fantastisk applikation. För alla som har en hel del applikationer och enheter, och som inte har tid att manuellt uppdatera dem, rekommenderar jag starkt Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt." - Adam Backlund
          </p>
        </div>
        <div>
          <h4>Myo Thuya <span class="flag it"></span></h4>
          <p>
            "Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa ljudfel, nätverksfel, enhetsfel osv."    - Myo Thuya
          </p>
        </div>
        <div>
          <h4>Wayne Bowler <span class="flag it"></span></h4>
          <p>
             "Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter." - Wayne Bowler
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->
<!-- awards start -->
<div class="awards">
    <div class="wrapper">
      <h2>Världsomspännande Utmärkelser</h2>
      <img src="../../2019/db/novxmassv/images/award.png?t=1577956127" alt=""/>
    </div>
  </div>
  <!-- awards end -->
<h1 class="b-title">Betala ett rabatterat pris och få också 3 gåvor</h1>
<div class="wrapper new_w b-buy">
    <div class="cont">
        <div class="left">
          <img class="offer-img" src="<?php echo $pResUrl; ?>images/offer.png" alt="">
          <span class="num"><del class="soldout-num">279kr</del><span class="original">2256kr </span></span>
          <p>1 År / 3 PC</p>
          <i class="add"></i>
        </div>
        <dl class="center soldout-box">
          <ul>
            <li>
              <img src="<?php echo $pResUrl; ?>images/lh.png" alt="">
              <span class="title">Smart Defrag PRO</span>
              <p>
                <span class="mor"><b><span>0</span>kr</b>&nbsp;<del>459kr </del></span>
              </p>
            </li>
            <li>
            <img src="<?php echo $pResUrl; ?>images/lh.png" alt="">
            <span class="title">IObit Uninstaller</span>
              <p>
                <span class="mor"><b><span>0</span>kr</b>&nbsp;<del>399kr</del></span>
              </p>
            </li>
            <li>
            <img src="<?php echo $pResUrl; ?>images/lh.png" alt="">
            <span class="title">Protected Folder</span>
              <p>
                <span class="mor"><b><span>0</span>kr</b>&nbsp;<del>499kr</del></span>
              </p>
            </li>
          </ul>
        </dl>
        <dl class="right">
          <dd>
            <p class="t">Total: <span class="soldout-num">279<b>kr</b></span> <del class="original">2256kr</del></p>
            <a class="ga-button" href="https://www.iobit.com/buy.php?product=sv-db83pciusdpf279&ref=sv_db83pciusdpf279purchase2011xr<?= $refStr; ?>&refs=sv_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pciusdpfpurchase2011xr-sv');"
              >
              <button class="buy">Köp nu</button>
            </a>
          </dd>
        </dl>
    </div>
  </div>
<!--  footer start-->
<div class="footer">
  
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*. Uppgifter kan variera beroende på olika system eller datorer.</dd>
    <dd>*. Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Alla Rättigheter Förbehållna</p>
</div>
<!-- footer end -->
<script>refStr = '<?= $refStr; ?>';</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>