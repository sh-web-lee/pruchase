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

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2'))){
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
<title>Spara upp till 80% på Driver Booster PRO och du får extra skydd helt gratis – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body> 
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>STORT JUL ERBJUDANDE</h1>
      <h2>Spara 80% på Driver Booster PRO + Gratis Gåvor</h2>
      <div class="left-message">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
        <p>
          <span>Erbjudandet löper ut</span>
          <strong>15</strong> Timmar : <strong>15</strong> Minuter : <strong>15</strong> Sekunder : <strong class="last">15</strong> Ms<sup>*</sup>
        </p>
      </div>
      <div class="right-message">
        <h3>Driver Booster 6 PRO - 3 PC, 1 År</h3>
        <p><i></i>Du kommer att få 200%<sup>*</sup> större databas</p>
        <p><i></i>Du kommer att få smidigare spelupplevelse</p>
        <p><i></i>Du kommer att få 100%<sup>*</sup> Säker Uppdatering</p>
        <dl class="price">
          <dt><del>1 857 kr</del> <strong>299 kr</strong></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=sv-db63pcpfsd299x&ref=sv_db63pcpfsdpurchase1811<?php echo $refStr;?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811-sv');" class="buybtn">KÖP NU</a></dd>
          <dd>Mer än 3 365 695 personer har redan köpt den</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="db-message wrapper">
    <h2>Genom att aktivera Driver Booster PRO kan du optimera din dators Prestanda</h2>
    <img src="<?php echo getStaticUrl('images/db-message.png')?>" alt="" class="img-box">
    <dl class="list01">
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Inget behov av drivrutinsuppdatering en i taget</strong>
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
  <div class="gift-message">
   <div class="wrapper">
      <h3><span>75% Rabatt</span> på aktivera Driver Booster PRO nu,</h3>
      <h2>Få 2 PC Optimeringsverktyg (värderad till 468 kr) <span>GRATIS!</span></h2>
      <dl class="sd">
        <dt><img src="<?php echo getStaticUrl('images/sd-icon.png')?>" alt=""></dt>
        <dd><strong>Smart Defrag PRO</strong> <del>219 kr</del></dd>
        <dd>Max hårddiskoptimering för <br> snabbare dator</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-icon.png')?>" alt=""></dt>
        <dd><strong>Protected Folder</strong> <del>249 kr</del></dd>
        <dd>Ingen läckage av viktiga filer för <br> säker personlig integritet</dd>
      </dl>
      <a href="https://www.iobit.com/buy.php?product=sv-db63pcpfsd299x&ref=sv_db63pcpfsdpurchase1811<?php echo $refStr;?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811-sv');" class="buybtn">Hämta mina gratis gåvor</a>
   </div>
  </div>
  <!-- media start -->
  <div class="media wrapper">
    <h2>Världsomspännande Utmärkelser</h2>
    <p>Med förtroende och pris från dessa världsledande medier de senaste fyra åren är det ett rätt val du har gjort.</p>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt="" />
  </div>
  <div class="user-rev wrapper">
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
  <!-- media end -->
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
          <td class="virtue">Automatisk Identifikation av Föråldrade, Saknade och Felaktiga Drivrutiner</td>
          <td class="itemb"><span class="all-icons blue">√</span></td>
          <td class="itema"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
          <td class="virtue">Lås Upp Hastighetsgräns för Nedladdning av Drivrutiner</td>
          <td class="itemb"><i class="all-icons close"></i></td>
          <td class="itema"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
          <td class="virtue">Prioriterar att Uppdatera Föråldrade och Ovanliga Drivrutiner</td>
          <td class="itemb"><i class="all-icons close"></i></td>
          <td class="itema"><span class="all-icons orange">√</span></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
          <td class="virtue">Reducerar Systemfrys och Krascher för Bättre Prestanda</td>
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
  <div class="footer-buy">
    <div class="wrapper clearfix">
      <img src="<?php echo getStaticUrl('images/bottom-asc-box.png')?>" alt=""/>
      <div class="price">
        <div class="title">
          <h2>STORT JUL ERBJUDANDE!</h2>
          <h3>HÄMTA DEN NU!</h3>
        </div>
        <p><del>1 857 kr</del> <strong>299 kr</strong></p>
        <a href="https://www.iobit.com/buy.php?product=sv-db63pcpfsd299x&ref=sv_db63pcpfsdpurchase1811<?php echo $refStr;?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811-sv');" class="buybtn">KÖP NU</a>
        <p><i class="all-icons"></i> BARA 269 paket kvar, skynda dig!</p>
      </div>
    </div>
  </div>
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper clearfix">
      <dl class="moneyback">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <strong>Prova det RISKFRITT - med vår 60-dagars Pengarna Tillbaka Garanti</strong>
          Vi är säker på att alla dina problem på drivrutin ska lösas med hjälp <br> av den activerade PRO editionen med ett överkomligt pris.
        </dd>
      </dl>
      <ul class="clearfix">
        <li class="first">
          Accepterade Betalningssätt
          <span><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></span>
        </li>
         <li class="two">
          Säker Betalning
          <span><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></span>
        </li>
      </ul>
    </div>
    <dl class="note wrapper">
      <dt>Notera:</dt>
      <dd>
        *.Uppgifter kan variera beroende på olika system eller datorer.
      </dd>
      <dd>
        *.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.
      </dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
  </div>
  <!-- footer end -->
  
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>