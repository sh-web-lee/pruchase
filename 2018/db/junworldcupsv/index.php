<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }

  $buyNum = ceil(microtime_float()*1000/20000) - 69041325;
  
  $packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_db','x_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Specialerbjudanden upp till 63% rabatt för att heja för 2018 FIFA VM   – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans:300,400,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script>
  function getPacksNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
      success: function(packs){
        $('#packs').html(packs);
        setTimeout('getPacksNum()', 10000);
      }
    });
  }
  setTimeout('getPacksNum()', 10000);
</script>
</head>

<body> 
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>Heja under fotbolls-VM med Iobit</h1>
        <p>Specialerbjudanden upp till <strong>63%</strong> rabatt för att heja för 2018 FIFA VM</p>
      </div>
      <!-- time -->
      <ul id="countdown" class="countdown">
        <li><strong>00</strong>Timmar : </li>
        <li><strong>00</strong>Minuter : </li>
        <li><strong>00</strong>Sekunder : </li>
        <li class="last"><strong>000</strong>Ms *</li>
      </ul>
      <!-- panel -->
      <div class="panel clearfix">
        <div class="box redbox">
          <h3>PRIVATA ANVÄNDARE</h3>
          <div class="name"><b>3</b> PC, 1 År</div>
          <img class="dbbox" src="<?php echo getStaticUrl('images/db-big.png')?>" alt="" />
          <p>Fixar och uppdaterar mer än 1.000.000 drivrutiner för hela familjen</p>
          <strong>329 kr</strong>
          <div class="sign"><b>-570 kr</b> <del>899 kr</del></div>
          <a class="buybtn redbtn" href="https://www.iobit.com/buy.php?product=sv-db53pc329&ref=sv_db53pcpurchase1806wc<?php echo $refStr;?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1806wc-sv');">
            <i class="all-icons"></i>
            KÖP NU
          </a>
        </div>
        <div class="box graybox">
          <div class="inner">
            <h3>PRIVATANVÄNDARE</h3>
            <div class="name">1 PC, 1 År</div>
            <img class="dbbox" src="<?php echo getStaticUrl('images/db-big.png')?>" alt="" />
            <p>Ger dig optimal datorprestanda</p>
            <strong>299 kr</strong>
            <div class="sign"><b>-400 kr</b> <del>699 kr</del></div>
            <a class="buybtn graybtn" href="https://www.iobit.com/buy.php?product=sv-db51pc299&ref=sv_db51pcpurchase1806wc<?php echo $refStr;?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1806wc-sv');">
              <i class="all-icons"></i>
              KÖP NU
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <div class="wrapper">
    <!-- intro start -->
    <div class="intro clearfix">
      <h2>Optimera din dators prestanda med de senaste drivrutinerna!</h2>
      <p>
        <i class="all-icons">bell</i>Endast <strong id="packs"><?php echo $packsNum; ?></strong> paket tillgängliga!
      </p>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/intro_db.jpg')?>"></dt>
        <dd><h3>Varför välja Driver Booster 5?</h3></dd>
        <dd>
          <span class="intro-icons">1、</span>Stöder över 1.000.000 drivrutiner och enheter!
        </dd>
        <dd>
          <span class="intro-icons two">2、</span>Expanderad spelkomponentdatabas!
        </dd>
        <dd>
          <span class="intro-icons three">3、</span>Identifierar och reparerar saknade och felaktiga drivrutiner!
        </dd>
        <dd>
          <span class="intro-icons four">4、</span>Alla drivrutiner från Driver Booster 5 har passerat WHQL-tester!
        </dd>
        <dd>
          <a href="javascript: ;">Läs mer om PRO-versionen>></a>
        </dd>
      </dl>
    </div>
    <!-- intro end -->

    <!-- media start -->
    <div class="media">
      <h2>Rekommenderas och belönade av dessa medier</h2>
      <img src="<?php echo getStaticUrl('images/media.jpg')?>" alt="" />
    </div>
    <!-- media end -->

    <!-- media-rev start -->
    <dl class="media-rev clearfix">
      <h2>I media</h2>
      <dt>
        <img src="<?php echo getStaticUrl('images/makeuseof.jpg')?>" alt="" />
      </dt>
      <dd>
        <h3>"Driver Booster, från IObit, lovar en enklare lösning för att hämta och uppdatera drivrutiner med den mest avancerade tekniken."</h3>
      </dd>
      <dd>
        "Driver Booster, från IObit, lovar en enklare lösning för att hämta och uppdatera drivrutiner med den mest avancerade tekniken genom att fungera som en allt-i-ett kommandocentral. Alla dina drivrutiner är listade i applikationens gränssnitt, vilket gör det till en enkel process att hämta och uppdatera drivrutiner. Att ladda ned och installera drivrutiner med denna programvara är en enkel match och ofta tar det bara några minuter (eller mindre)."  
        <span>-MakeUseOf</span>
      </dd>
    </dl>
    <!-- media-rev end -->

    <!-- payment start -->
    <div class="payment clearfix">
      <dl>
        <dt>Godkända Betalningsformer</dt>
        <dd><img src="<?php echo getStaticUrl('images/payment.jpg')?>" alt="" /></dd>
      </dl>
      <dl>
        <dt>Pengarna Tillbaka Garanti </dt>
        <dd><img src="<?php echo getStaticUrl('images/refoud.png')?>" alt="" /></dd>
      </dl>
      <dl>
        <dt>Tillförlitliga Tjänster</dt>
        <dd><img src="<?php echo getStaticUrl('images/pay_service.jpg')?>" alt="" /></dd>
      </dl>
    </div>
    <!-- payment end -->

    <!-- user-rev start -->
    <div class="user-rev" id="user_rev">
      <div class="content">
        <h3>Användares omdömen</h3>
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
  </div>

  <!-- center-banner start -->
  <div class="center-banner">
    <div class="wrapper">
      <h3>Specialerbjudanden upp till 63% rabatt för att heja för 2018 FIFA VM</h3>
      <div class="clearfix">
        <dl class="show">
          <dt><img src="<?php echo getStaticUrl('images/db-cent.png')?>"></dt>
          <dd class="first active" data-name="pcs" data-url="https://www.iobit.com/buy.php?product=sv-db53pc329&ref=sv_db53pcpurchase1806wc<?php echo $refStr;?>&refs=sv_purchase_db">
            <span>
              <i class="all-icons">×</i>
              1 År/ 3 PC 
            </span>
            <strong><ins>329 kr</ins> <del>899 kr</del></strong>
          </dd>
          <dd data-name="pc" data-url="https://www.iobit.com/buy.php?product=sv-db51pc299&ref=sv_db51pcpurchase1806wc<?php echo $refStr;?>&refs=sv_purchase_db">
            <span>
              <i class="all-icons">×</i>
              1 År/ 1 PC 
            </span>
            <strong><ins>299 kr</ins> <del>699 kr </del></strong>
          </dd>
        </dl>
        <dl class="total">
          <dt><strong class="price">329 kr</strong></dt>
          <dd>
            <a class="buybtn redbtn" href="https://www.iobit.com/buy.php?product=sv-db53pc329&ref=sv_db53pcpurchase1806wc<?php echo $refStr;?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1806wc-sv');">
              <i class="all-icons">cart</i>
              KÖP NU
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- center-banner end -->

  <div class="wrapper">
    <!-- comparison start -->
    <div class="comparison wrapper" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">
              Vilka fördelar har du som PRO användare?
            </th>
            <th class="itemb">Driver Booster Free</th>
            <th class="itema">Driver Booster Pro</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
            <td class="virtue">Automatisk Identifikation av Föråldrade, Saknade och Felaktiga Drivrutiner</td>
            <td class="itemb"><span class="all-icons blue">√</span></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
            <td class="virtue">Uppdatera Inaktuella Drivrutiner med Ett Klick</td>
            <td class="itemb"><span class="all-icons blue">√</span></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
            <td class="virtue">Lås Upp Hastighetsgräns för Nedladdning av Drivrutiner</td>
            <td class="itemb"></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
            <td class="virtue">Prioriterar att Uppdatera Föråldrade och Ovanliga Drivrutiner</td>
            <td class="itemb"></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
            <td class="virtue">Reducerar Systemfrys och Krascher för Bättre Prestanda</td>
            <td class="itemb"></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
            <td class="virtue">Automatisk Hämtning av Drivrutiner och Installation medan Systemet är Inaktivt</td>
            <td class="itemb"></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
            <td class="virtue">Automatisk Säkerhetskopiering av Alla Drivrutiner för Säker Återställning</td>
            <td class="itemb"></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
            <td class="virtue">Privilegium att Uppdatera Spelkomponenter för Bättre Spelande</td>
            <td class="itemb"></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
            <td class="virtue">Upptäcker och Åtgärdar Enhetsfel Effektivt</td>
            <td class="itemb"></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
            <td class="virtue">Automatisk Uppdatering till Senaste Versionen</td>
            <td class="itemb"></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
          <tr class="last">
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
            <td class="virtue">Gratis Teknisk Support vid Behov, Dygnet Runt</td>
            <td class="itemb"></td>
            <td class="itema"><span class="all-icons orange">√</span></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->

    <!-- backtop start -->
    <div class="backtop">
      <a href="javascript: void(0);">
        <i class="all-icons">︿</i>
        Tillbaka till toppen
      </a>
    </div>
    <!-- backtop end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Notera:</dt>
      <dd>
        *.Uppgifter kan variera beroende på olika system eller datorer.
      </dd>
      <dd>
        *.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.
      </dd>
    </dl>
    <!-- annotation end -->

  </div>

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</div>
  <!-- footer end -->
  
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>