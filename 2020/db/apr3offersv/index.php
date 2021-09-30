<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'svdbapr3off_p' . $date;
  $c_name_t='svdbapr3off_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):40;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spara upp till 85% rabatt på Driver Booster PRO och få extra skydd på köpet. - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com/sv/index.php" target="_blank">IObit</a>
      <h5>EXKLUSIV REA</h5>
      <h1>SPARA UPP TILL 1 757 kr</h1>
      <div class="clearfix">
        <div class="offer left">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/></div>
          <div class="off"><span>SPARA</span><b>600</b></div>
          <div class="price">
            <p>Ord. pris <del>899kr</del></p>
            <p><strong>299 <small>kr</small></strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sv-db73pc299&ref=sv_db73pcpurchase2004<?php echo $refStr;?>&refs=sv_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2004-sv');">
              <i class="all-icons"></i>
              <span>KÖP PRO</span>   
            </a>
          </div>
        </div>
        <div class="offer center on">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/></div>
          <div class="off"><span>SPARA</span><b>1757</b></div>
          <div id="timecount" class="countdown">
            Tim:<b>00</b>, Min:<b>09</b>, Sek:<b>59</b>, Ms:<b class="last">136</b>*
          </div>
          <div class="price">
            <p>Ord. pris <del>2 056kr</del></p>
            <p><strong>299 <small>kr</small></strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sv-db73pcisupfsd299&ref=sv_db73pcisupfsdpurchase2004<?php echo $refStr;?>&refs=sv_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3giftpurchase2004-sv');">
              <i class="all-icons"></i>
              <span>KÖP PRO</span>   
            </a>
          </div>
        </div>
        <div class="offer right">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/></div>
          <img class="db-small" src="<?php echo getStaticUrl('images/gift-small-box.png')?>" alt=""/>
          <div class="off"><span>SPARA</span><b>1068</b></div>
          <div class="countdown">Endast <span class="giftNum">50</span> Platser Kvar</div>
          <div class="price">
            <p>Ord. pris <del>1 367kr</del></p>
            <p><strong>299 <small>kr</small></strong></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sv-db73pcpfsd299&ref=sv_db73pcpfsdpurchase2004<?php echo $refStr;?>&refs=sv_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db2giftpurchase2004-sv');">
              <i class="all-icons"></i>
              <span>KÖP PRO</span>   
            </a>
          </div>
          <div class="mask">
            <span class="mask-words arrow"></span>
            <p>Mängdbegränsade paket kommer att starta efter de bästa paketen slutar</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>MED EXKLUSIV DATABAS AV DRIVRUTINER OCH AVANCERAD UPPDATERINGSTEKNIK, KOMMER DIN PC ATT VARA EFFEKTIV!</h2>
      <h3>Över 10 miljoner internationella användare har valt Driver Booster PRO</h3>
      <div class="feature-box">
        <dl class="one">
          <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
          <dd>
            <h4>IDrivrutinsuppdateringar med <b>1-klick</b></h4>
            <p>Ge dig en “one-stop” drivrutinsdetektering<br> och uppdateringslösning.</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
          <dd>
            <h4><b>Säker</b> drivrutinsnedladdning och uppdatering</h4>
            <p>Säkerhetskopiera och skapa systemåterställningspunkt automatiskt före uppdatering, i händelse av något som är oväntat.</p>
          </dd>
        </dl>
        <dl class="three">
          <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
          <dd>
            <h4><b>Ingen oväntad</b> systemkrasch</h4>
            <p>Håll alltid alla drivrutiner uppdaterade så<br> att du får en stabil dator.</p>
          </dd>
        </dl>
        <dl class="four">
          <dt><img src="<?php echo getStaticUrl('images/feature04.png')?>" alt=""/></dt>
          <dd>
            <h4><b>100% * snabbare</b> nedladdning</h4>
            <p>Tidsbesparande med nedladdning i tid när<br> system är på tomgång med upp till 100%*<br> snabbare hastighet.</p>
          </dd>
        </dl>
        <dl class="five clearfix">
          <dt><img src="<?php echo getStaticUrl('images/feature05.png')?>" alt=""/></dt>
          <dd>
            <h4><b>Högsta spelprestanda</b> garanterad</h4>
            <p>En enorm spelkomponentdatabas inklusive Nvidia, Realtek, Intel, AMD, Broadcom, VIA, Microsoft Visual C ++ 2017 Redistributable, osv. för att säkerställa smidig spelupplevelse.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- giveaway start -->
  <div class="giveaway">
    <div class="wrapper">
      <h2>ALLT DU VILL HA FÖR DIN DATOR ÄR HÄR, PÅ DIN KLICK!</h2>
      <div class="clearfix">
        <div class="give-list left">
          <img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Updater PRO"/>
          <h3>IObit Software Updater PRO</h3>
          <strong><big>0</big> kr</strong>
          <p>Denna programvara hjälper dig att uppdatera alla föråldrade program med endast 1-klick. </p>
        </div>
        <div class="give-list center">
          <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/>
          <h3>Protected Folder</h3>
          <strong><big>0</big> kr</strong>
          <p>Skydda dina filer från skadliga attacker 1 lösenord för alla filer Skydda ditt privatliv från intrång</p>
        </div>
        <div class="give-list right">
          <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/>
          <h3>Smart Defrag 6 PRO</h3>
          <strong><big>0</big> kr</strong>
          <p>Högre defragmenteringshastighet Auto-defragmentera valda filer Snabbare uppstart av datorn</p>
        </div>
      </div>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=sv-db73pcisupfsd299&ref=sv_db73pcisupfsdpurchase2004<?php echo $refStr;?>&refs=sv_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3giftpurchase2004-sv');">
        <i class="all-icons"></i>
        <span>Skaffa Det Nu</span>   
      </a>
      <div class="countdown">Endast <span class="giftNum">50</span> Platser Kvar</div>
    </div>
  </div>
  <!-- giveaway end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Priser och utmärkelser över hela världen</h2>
    <div class="awards-box"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Vad säger andra</h2>
    <div class="reviewbox">
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/pcmag.png')?>" alt="PC Magazine"></li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund">
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya">
        </li>
        <li class="four"><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="Wayne Bowler"></li>
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

  <!-- comparison start -->
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
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""/></td>
          <td class="virtue">Automatisk identifikation av föråldrade, saknade och felaktiga drivrutiner</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
          <td class="virtue">
              Lås upp hastighetsgränsen för nedladdning av drivrutiner
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
          <td class="virtue vtop">
              Prioriterar att uppdatera föråldrade och sällsynta drivrutiner
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/></td>
          <td class="virtue">
            Reducerar systemfrysningar och krascher för bättre prestanda
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""/></td>
          <td class="vtop">
            Automatisk Hämtning av Drivrutiner och Installation medan Systemet är Inaktivt
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""/></td>
          <td class="virtue">Automatisk Säkerhetskopiering av Alla Drivrutiner för Säker Återställning</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon07.png')?>" alt=""/></td>
          <td class="virtue">
              Privilegium att Uppdatera Spelkomponenter för Bättre Spelande
          </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
          <td class="virtue">Upptäcker och Åtgärdar Enhetsfel Effektivt</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""/></td>
          <td class="virtue"> Automatisk Uppdatering till Senaste Versionen</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""/></td>
          <td class="virtue"> Gratis Teknisk Support vid Behov, Dygnet Runt</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imglist fl">
        <div class="imgbox dbgift on"><img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="" /></div>
        <div class="imgbox db"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" /></div>
        <span class="db-small"><img src="<?php echo getStaticUrl('images/gift-small-box.png')?>" alt=""/></span>
      </div>
      <ul class="changelist fl">
        <li class="one on" data-num="1"><span>3 PC / 1 År + 3 Gåvor GRATIS</span> <b>-85%</b></li>
        <li class="two stop" data-num="2"><span>3 PC / 1 År + 2 Gåvor GRATIS </span> <b>-78%</b></li>
        <li class="three" data-num="0"><span>3 PC / 1 År </span> <b>-65%</b></li>
      </ul>
      <div class="price fr">
        <p><strong><big>299</big> Ord.</strong> pris <del>2 056 kr</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-db73pcisupfsd299&ref=sv_db73pcisupfsdpurchase2004<?php echo $refStr;?>&refs=sv_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3giftpurchase2004-sv');">
          <i class="all-icons"></i>
          <span>KÖP PRO</span>   
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></dt>
          <dd>
            <h3>Accepterade Betalningssätt</h3>
            <p>Gratis 24/7 Teknisk Support vid Behov Live Chattjänst</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h3>Pengarna- tillbaka-garanti</h3>
            <p>Om du inte är nöjd med produkten inom 60 dagar,ger vi dig pengarna tillbaka.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/secure.png')?>" alt=""></dt>
          <dd>
            <h3>Säker betalning</h3>
            <p>IObit stöder flera säkra betalningsal- ternativ.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""></dt>
          <dd>
            <h3>Få Licens</h3>
            <p>Du kommer få licensen inom några minuter efter betalning..</p>
          </dd>
        </dl>
      </div>
      <dl class="note">
        <dt>Notera:</dt>
        <dd>*. Uppgifter kan variera beroende på olika system eller datorer.</dd>
        <dd>*. Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
    </div>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>