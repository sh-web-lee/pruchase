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
  $c_name = 'svdbxnov_p' . $date;
  $c_name_t='svdbxnov_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
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
  <title>Spara 78% rabatt på Driver Booster PRO och få extra skydd på köpet – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>RÄTTA OCH UPPDATERA ALLA DRIVRUTINER NU!</h1>
        <p>MED FLER EXKLUSIVA DRIVRUTINER, SÄKRARE UPPDATERINGAR, KOMMER DIN PC ATT VARA MER EFFEKTIV OCH SNABBARE! </p>
      </div>
      <div class="left fl">
        <h4>SPECIALERBJUDANDE</h4>
        <h2>REA 78% rabatt </h2>
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <div class="chart">
          <div class="clist one">
            <span class="cost"><strong>319 kr</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">12 November</span>
          </div>
          <div class="clist two">
            <span class="cost"><strong><big>299</big> kr</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="text"> Endast <b class="pickNum">50</b>*  Platser Kvar</span>
          </div>
          <div class="clist three">
            <span class="cost"><strong>349 kr </strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">14 November</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>299</big> kr</strong> <del>1 367 kr</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=sv-db83pcpfsd299&ref=sv_db83pcpfsdpurchase2001<?= $refStr;?>&refs=sv_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1912-sv')">
            KÖP NU
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- map start -->
  <div class="map">
    <div class="wrapper">
      <h2>
        MED EXKLUSIV DATABAS AV DRIVRUTINER OCH AVANCERAD UPPDATERINGSTEKNIK,  <br> KOMMER DIN PC ATT VARA EFFEKTIV!
      </h2>
      <p>Över 10 miljoner internationella användare har valt Driver Booster PRO </p>
    </div>
  </div>
  <!-- map end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <img class="feature-db" src="<?php echo getStaticUrl('images/feature-db.png')?>" alt=""/>
    <dl class="one clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      <dd>
        <h3>IDrivrutinsuppdateringar <strong>med 1-klick</strong></h3>
        <p>
          Ge dig en “one-stop” drivrutinsdetektering och uppdateringslösning.
        </p>
      </dd>
    </dl>
    <dl class="two clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      <dd>
        <h3><strong> Säker</strong> drivrutinsnedladdning och uppdatering</h3>
        <p>
          Säkerhetskopiera och skapa systemåterställningspunkt <br> automatiskt före uppdatering, i händelse av något som är oväntat.
        </p>
      </dd>
    </dl>
    <dl class="three clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      <dd>
        <h3><strong>Ingen oväntad</strong> systemkrasch </h3>
        <p>
          Håll alltid alla drivrutiner uppdaterade <br> så att du får en stabil dator.</p>
      </dd>
    </dl>
    <dl class="four clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
      <dd>
        <h3> <strong>100% * snabbare</strong> nedladdning</h3>
        <p>Tidsbesparande med nedladdning i tid när <br> system är på tomgång med upp till 100%* <br> snabbare hastighet. </p>
      </dd>
    </dl>
    <dl class="five clearfix">
      <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
      <dd>
        <h3><strong>Högsta spelprestanda</strong> garanterad</h3>
        <p>
          En enorm spelkomponentdatabas inklusive Nvidia, Realtek, <br> Intel, AMD, Broadcom, VIA, Microsoft Visual C ++ 2017 <br> Redistributable, osv. för att säkerställa smidig spelupplevelse.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->

  <!-- gifts start -->
  <div class="gifts">
    <div class="wrapper clearfix">
      <h2>BETALA ETT RABATTERAT PRIS OCH FÅ TVÅ! *</h2>
      <h3>ALLT DU VILL HA FÖR DIN DATOR ÄR HÄR, PÅ DIN KLICK!</h3>
      <dl class="sd">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"/>
        </dt>
        <dd>
          <h4>Smart Defrag PRO</h4>
          <strong>0 kr </strong>
          <p>Auto-defragmentera valda filer och snabbare upstart. </p>
        </dd>
      </dl>
      <dl class="pf">
        <dt>
          <span class="ribbon"></span>
          <img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"/>
        </dt>
        <dd>
          <h4>Protected Folder</h4>
          <strong>0 kr </strong>
          <p>Skydda dina filer från skadliga attacker 1 lösenord för alla filer Skydda ditt privatliv från intrång.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- gifts end -->

  <!-- centbuy start -->
  <div class="centbuy price wrapper">
    <p><strong>299 kr</strong> <del>1 367 kr</del></p>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=sv-db83pcpfsd299&ref=sv_db83pcpfsdpurchase2001<?= $refStr;?>&refs=sv_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1912-sv')">
      KÖP NU
    </a>
    <p class="pick">Endast <b class="pickNum">39</b> Platser Kvar</p>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>VI GÖR ALLT MÖJLIGT FÖR ATT MÖTA VÅRA <br> KUNDER OAVSETT VAR DU ÄR!</h2>
    <div class="reviewbox">
      <h3>Vad säger andra</h3>
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

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Världsomspännande Utmärkelser</h2>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

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

  <!-- bottombuy start -->
  <div class="bottombuy wrapper clearfix">
    <h2>LÅT INTE DIG DRA DAGEN PÅ DATORS PROBLEM! </h2>
    <div class="left fl"><img src="<?php echo getStaticUrl('images/bottombuy-db.png')?>" alt=""/></div>
    <div class="right price fr">
      <p><strong>299 kr</strong> <del>1 367 kr</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=sv-db83pcpfsd299&ref=sv_db83pcpfsdpurchase2001<?= $refStr;?>&refs=sv_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1912-sv')">
        KÖP NU
      </a>
      <p>BARA IDAG, SKYNDA DIG!</p>
    </div>
  </div>
  <!-- bottombuy end -->

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
        <dl>
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