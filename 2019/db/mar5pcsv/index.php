<?php
//一下为必须开头代码片段
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='svdbmar_p'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
//      if(rand(1,100)%2==0){
//        $packsNum++;
//      }
    }else{
      $packsNum=3;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=159;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

if(!empty($_GET['st'])){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
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
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spara 78% på Driver Booster PRO och få extra skydd på köpet– IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="http://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <!-- countdown -->
    <p class="countdown">
      <i class="all-icons"></i>
      <span>
        Tim: <strong>00</strong>
        Min: <strong>00</strong>
        Sek: <strong>00</strong>
        Ms:  <strong class="last">000</strong> *
      </span>
    </p>
    <!-- panel -->
    <div class="panel">
      <!-- title -->
      <div class="title">
        <h1>Denna veckas specialerbjudande</h1>
        <p>Exklusiv rabatt på DB PRO (1 År, 3 PC) + 2 Optimeringsverktyg GRATIS!</p>
      </div>
      <!-- 3pcgifts -->
      <dl class="large-box">
        <dt>
          <img src="<?php echo $pResUrl;?>images/db-3pcgifts.png" alt="Driver Booster PRO">
        </dt>
        <dd>
          <p class="price">
            Ord. pris <del>1 367 kr</del> <br>
            <strong>299 <small>kr</small></strong>
          </p>
          <!-- 3pcgifts buybtn -->
          <a class="buybtn large green"
             href="https://www.iobit.com/buy.php?product=sv-db73pcpfsd299&ref=sv_db73pcpfsdpurchase1910<?php echo $refStr;?>&refs=sv_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3PCpurchase1910-sv');">
            <span>KÖP NU</span>
          </a>
          <p class="attention"><i></i> Mer än <span class="buyNum">3 278 204</span> personer har redan köpt den</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- db-mesage -->
<div class="db-message wrapper">
  <h2>Genom att aktivera Driver Booster PRO kan du optimera din dators Prestanda</h2>
  <img src="<?php echo getStaticUrl('images/db-message.png')?>" alt="" class="img-box">
  <dl class="list01">
    <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
    <dd>
      <strong>IDrivrutinsuppdateringar med 1-klick</strong>
      Ge dig en “one-stop” drivrutinsdetektering och <br> uppdateringslösning.
    </dd>
  </dl>
  <dl class="list02">
    <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
    <dd>
      <strong>Säker drivrutinsnedladdning och uppdatering</strong>
      Säkerhetskopiera och skapa systemåterställningspunkt <br> automatiskt före uppdatering, i händelse av något som <br> är oväntat.
    </dd>
  </dl>
  <dl class="list03">
    <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
    <dd>
      <strong>Ingen oväntad systemkrasch</strong>
      Håll alltid alla drivrutiner <br> uppdaterade så att du får en <br> stabil dator.
    </dd>
  </dl>
  <dl class="list04">
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
    <dd>
      <strong>200% * snabbare nedladdning</strong>
      Tidsbesparande med nedladdning <br> i tid när system är på tomgång <br> med upp till 200%<sup>*</sup> snabbare <br> hastighet.
    </dd>
  </dl>
  <dl class="list05">
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
    <dd>
      <strong>Högsta spelprestanda garanterad</strong>
      En enorm spelkomponentdatabas inklusive Nvidia, Realtek, Intel, AMD, Broadcom, VIA, <br> Microsoft Visual C ++ 2017 Redistributable, osv. för att säkerställa smidig spelupplevelse.
    </dd>
  </dl>
</div>
<!-- end db-message -->

<!-- gifts -->
<div class="gifts wrapper clearfix">
  <h2>Få 2 PC Optimeringsverktyg (värderad till 468 kr)  GRATIS!</h2>
  <!-- pf -->
  <dl class="clearfix pf">
    <dt><img src="<?php echo $pResUrl;?>images/gifts-pf.png" alt="Protected Folder"></dt>
    <dd>
      <h3>Protected Folder</h3>
      <h4><strong>0</strong>kr</h4>
      <p>
        Skydda dina filer från skadliga attacker 1 <br>
        lösenord för alla filer Skydda ditt privatliv <br>
        från intrång
      </p>
    </dd>
  </dl>
  <!-- sd -->
  <dl class="clearfix sd">
    <dt><img src="<?php echo $pResUrl;?>images/gifts-sd.png" alt="Smart Defrag 6 PRO"></dt>
    <dd>
      <h3>Smart Defrag 6 PRO</h3>
      <h4><strong>0</strong>kr</h4>
      <p>
        Högre defragmenteringshastighet <br>
        Auto-defragmentera valda filer <br>
        Snabbare uppstart
      </p>
    </dd>
  </dl>
  <!-- 3pcgifts buybtn -->
  <a class="buybtn large green"
     href="https://www.iobit.com/buy.php?product=sv-db73pcpfsd299&ref=sv_db73pcpfsdpurchase1910<?php echo $refStr;?>&refs=sv_purchase_db"
     onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3PCpurchase1910-sv');">
    <span>HÄMTA PRESENTEN NU!</span>
  </a>
</div>
<!-- end gifts -->

<!-- media start -->
<div class="media wrapper">
  <h2>Världsomspännande Utmärkelser</h2>
  <p>Med förtroende och priser från dessa världsledande medier de senaste fyra åren är det ett rätt val du har gjort.</p>
  <img src="<?php echo getStaticUrl('images/award.png')?>" alt="" />
</div>
<!-- media end -->

<!-- user-rev start -->
<div class="user-rev wrapper">
  <div class="content">
    <h3>Användaromdömen</h3>
    <dl class="active">
      <dd>
        <h4>
          "Jag rekommenderar Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt."
        </h4>
      </dd>
      <dd>
        "Driver booster är en fantastisk applikation. När det gäller någon som har en hel del applikationer och enheter och som inte har tid att manuellt uppdatera dem, rekommenderar jag starkt Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt."
      </dd>
    </dl>
    <dl>
      <dd>
        <h4>
          "Min dator är snabbare, säkrare och känns nyare nu än under de senaste 8 månaderna."
        </h4>
      </dd>
      <dd>
        "Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa ljudfel, nätverksfel, enhetsfel osv... Jag trodde inte det innan jag använde programmet, men efter att ha testat älskar jag verkligen det.. Min dator är snabbare, säkrare och känns nyare nu än under de senaste 8 månaderna... Så tack IObit."
      </dd>
    </dl>
    <dl>
      <dd>
        <h4>
          "Det fungerade perfekt. Lätt att använda, informativt och intuitivt. Det här kommer att stanna i min verktygslåda för alltid... Bra jobbat!"
        </h4>
      </dd>
      <dd>
        "Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter. Det fungerade perfekt. Lätt att använda, informativt och intuitivt. Det här kommer att stanna i min verktygslåda för alltid... Bra jobbat!"
      </dd>
    </dl>
  </div>
  <ul class="users">
    <li class="active">
      <img src="<?php echo getStaticUrl('images/adam_backlund.png')?>" alt="" />
      Adam Backlund
    </li>
    <li>
      <img src="<?php echo getStaticUrl('images/myo_thuya.png')?>" alt="" />
      Myo Thuya
    </li>
    <li>
      <img src="<?php echo getStaticUrl('images/wayne_bowler.png')?>" alt="" />
      Wayne Bowler
    </li>
  </ul>
</div>
<!-- user-rev end -->

<!-- comparison start -->
<div class="comparison wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">
        Vilka fördelar har du som PRO användare?
      </th>
      <th class="itemb"><span class="bg">Driver Booster Free</span></th>
      <th class="itema"><span class="bg">Driver Booster Pro</span></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Automatisk identifikation av föråldrade, saknade och felaktiga drivrutiner</td>
      <td class="itemb"><span class="all-icons blue">√</span></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Lås upp hastighetsgränsen för nedladdning av drivrutiner</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Prioriterar att uppdatera föråldrade och sällsynta drivrutiner</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Reducerar systemfrysningar och krascher för bättre prestanda</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Automatisk Hämtning av Drivrutiner och Installation medan Systemet är Inaktivt</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Automatisk Säkerhetskopiering av Alla Drivrutiner för Säker Återställning</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Privilegium att Uppdatera Spelkomponenter för Bättre Spelande</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Upptäcker och Åtgärdar Enhetsfel Effektivt</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Automatisk Uppdatering till Senaste Versionen</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    <tr class="last">
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Gratis Teknisk Support vid Behov, Dygnet Runt</td>
      <td class="itemb"><i class="all-icons close"></i></td>
      <td class="itema"><span class="all-icons orange">√</span></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <div class="box fl">
      <img src="<?php echo $pResUrl;?>images/bottombuy-db.png" alt="Driver Booster PRO">
    </div>
    <div class="another fl">
      <!-- countdown -->
      <p class="countdown">
        <i class="all-icons"></i>
        <span>
        Tim: <strong>00</strong>
        Min: <strong>00</strong>
        Sek: <strong>00</strong>
        Ms:  <strong class="last">000</strong> *
      </span><br>
        <em>begränsad tid</em>
      </p>
      <p class="price"><strong>299</strong> kr  <del>1 367 kr</del></p>
      <!-- 3pc+gifts buybtn -->
      <a class="buybtn large green"
         href="https://www.iobit.com/buy.php?product=sv-db73pcpfsd299&ref=sv_db73pcpfsdpurchase1910<?php echo $refStr;?>&refs=sv_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3PCpurchase1910-sv');">
        <span>KÖP NU</span>
      </a>
      <p class="attention">Endast <span class="packsNum">160</span> paket kvar!</p>
    </div>
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

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>