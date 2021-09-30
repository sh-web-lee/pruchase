 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('xr_sd'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Gelukkig 2020! Hoge korting op Smart Defrag PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">

  <div class="wrapper">
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Weihnachts SALE BIS ZU -83%</h1>
    <div class="box">
      <dl>
        <dt>i.p.v. <del>€29,99</del></dt>
        <dd>
          <strong>€19,99</strong>
          <span>1 pc, 1 jaar</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=nl-sd61pc1999&ref=nl_sd61pc1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1911-nl')" class="buybtn small">Bestel Nu</a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt>i.p.v. <del>€69,97</del></dt>
        <dd>
          <strong>€17,99</strong>
          <span>1 pc, 1 jaar</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/sd-gift-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=nl-sd61y3pcamc1799&ref=nl_sd63pcamc1799purchase1911<?php echo $refStr;?>&refs=nl_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1911-nl')" class="buybtn">Bestel Nu</a>
      <p>Cadeaupakket beperkt beschikbaar</p>
    </div>
    <p class="last">Als u in de eerste 60 dagen ontevreden bent, krijgt u het volledige bedrag terug</p>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- intro -->
  <div class="wrapper sd-content clearfix">
    <h2>Maximaliseer de harde schijf prestaties <br> en snelheid van uw PC met SD 6 PRO</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons001.png')?>" alt=""></dt>
      <dd><strong>Nieuwe ultra-snelle Engine</strong> <span>Defragmenteert bestanden efficiënter en grondiger in minder tijd</span></dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons002.png')?>" alt=""></dt>
      <dd><strong>Tot wel 200% Sneller*</strong> <span>Met deze nieuwe versie hebt u sneller toegang tot uw bestanden en verhoogt u de gaming prestaties</span></dd>
    </dl>
    <div class="clear"></div>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons003.png')?>" alt=""></dt>
      <dd><strong>Auto Smart defragmentatie</strong> <span>Defragmenteert automatisch de geselecteerde bestanden en schijven zonder onderbreking</span></dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons004.png')?>" alt=""></dt>
      <dd><strong>Snellere PC Opstarttijd</strong> <span>Start uw PC sneller op en verhoog de loopsnelheid van het systeem met het vernieuwde “Opstart Menu”</span></dd>
    </dl>
    <div class="clear"></div>
    <img src="<?php echo getStaticUrl('images/sd-content.png')?>" alt="" class="img-sd-content">
    <p><a href="javascript:void(0);">Meer informatie over de PRO editie&gt;</a></p>
  </div>
  <!-- end intro -->

  <div class="gift-content wrapper clearfix">
    <h2>Wat zit er in mijn Cadeaupakket?</h2>
    <dl class="sd-box">
      <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""></dt>
      <dd>
        <strong>€0</strong> i.p.v. <del> €19,99</del>
        <p>Licentie ondersteunt twee extra pc’s!</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/amc-gift.png')?>" alt=""></dt>
      <dd>
        <strong>€0</strong> i.p.v. <del> €19,99</del>
        <p>Maakt Android apparaten tot 200% sneller en beschermt tegen malware!</p>
      </dd>
    </dl>
  </div>
  <div class="wrapper">
    <div class="betwwen-buy">
      <div class="content">
        <img src="<?php echo getStaticUrl('images/between-buy-box.png')?>" alt="" class="img-box">
        <dl>
          <dt><strong>€17,99</strong> i.p.v. <del> €69,97</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=nl-sd61y3pcamc1799&ref=nl_sd63pcamc1799purchase1911<?php echo $refStr;?>&refs=nl_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1911-nl')" class="buybtn red">Bestel Nu</a></dd>
          <dd class="last">Cadeaupakket beperkt beschikbaar</dd>
        </dl>
      </div>
    </div>
  </div>


</div>
<!-- end container -->
<!-- review -->
<div class="review wrapper clearfix">
  <div class="title">
    <h2>Aangeraden door Experts en Gebruikers</h2>
    <p>Miljoenen gebruikers wereldwijd, zijn tevreden met Smart Defrag PRO</p>
  </div>
  <div class="review-icons fl">
    <img src="<?php echo $pResUrl;?>images/review-icons.png" alt="">
  </div>
  <div class="review-content fr">
    <ul class="clearfix">
      <li class="active">
        <img src="<?php echo $pResUrl;?>images/cnet.png" alt="Cnet">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/amnon.jpg" alt="Amnon">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/edward-lee-ah-yen.jpg" alt="Edward Lee Ah Yen">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/hans.jpg" alt="Hans">
      </li>
    </ul>
    <span class="line"></span>
    <div class="review-message">
      <!-- CHIP -->
      <p class="active">
        "IObit Smart Defrag optimaliseert uw PC om volledig te profiteren van SSD prestaties tijdens het defragmenteren van uw harde schijf. De SSD Trim applicatie maakt automatische systeem tweaks die normaal gesproken alleen door iemand met ervaring uitgevoerd kunnen worden. Smart Defrag's updates omvatten onder andere een nieuw defragmenteer machine, speciale Game Defragmentatie, een coole nieuwe interface en meer opties voor talen (35 en groeiende)."  <span>–Cnet</span>
      </p>
      <!-- Jeff A Watts -->
      <p>
        "Smart Defrag is een zeer goede schijf defragmenteer programma, opererent in de achtergrond zodat je het nauwelijks merkt. Het gevolg is dat je schijven permanent gedefragmenteerd worden waardoor snellere toegang mogelijk is en minder problemen zich voordoen. Smart Defrag is de beste gratis schijf defragmenteerder die ik ooit gebruikt heb en ik raad dit zeker aan alle mijn vrienden en familie aan!" <span>-Amnon</span>
      </p>
      <!-- Lynette van Niekerk -->
      <p>
        "Ik run een combinatie van RAID 0 SSD's en RAID 0 HDD's en gebruik Smart Defrag Pro voor het analyseren, defragmenteren en het houden van mijn schijven op een top niveau. Zoals met alle software van IObit is het eenvoudig te installeren, te gebruiken en zeer betrouwbaar. Installeer het en geen omkijken naar. Smart Defrag laat een zeer kleine voetstap achter in je systeem zodat het je pc niet langzamer maakt. Een absolute aanrader." <span>- Edward Lee Ah Yen</span>
      </p>
      <!-- Paulo Martins -->
      <p>
        "Ik ben al meerdere jaren een gebruiker van Smart Defrag. Sinds het gebruik van deze fantastische software zijn mijn desktop en laptop sneller en veiliger geworden. Samen met Advanced System Care Ultimate heb je een complete tool voor het up to date houden van je systeem, snel en veilig. Door het elke dag te gebruiken houd je je systeem in top conditie zelfs als je geen technische achtergrond heb!" <span>-Hans</span>
      </p>
    </div>
  </div>
</div>
<!-- end review -->
<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2">Waarom u de PRO versie nodig heeft</th>
        <td class="space"></td>
        <th class="itema"><span>Free</span></th>
        <td class="space"></td>
        <th class="itemb"><span>PRO</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icons01.jpg')?>" alt="" /></td>
        <td class="virtue">Standaard harde schijf Defragmentatie en Optimalisatie</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icons02.jpg')?>" alt="" /></td>
        <td class="virtue">Tot 200% snellere toegang tot uw bestanden</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icons03.jpg')?>" alt="" /></td>
        <td class="virtue">Snellere PC Opstart tijd met het nieuwe ‘Opstart Menu’</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
       <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icons04.jpg')?>" alt="" /></td>
        <td class="virtue">Defragmenteert automatisch bestanden</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icons05.jpg')?>" alt="" /></td>
        <td class="virtue">Aanpassen van defragmentatie Modus & Schijven die u wilt defragmenteren</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icons06.jpg')?>" alt="" /></td>
        <td class="virtue">DMA toegevoegd voor Betere, Snellere & meer Stabiele Dataoverdracht</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icons07.jpg')?>" alt="" /></td>
        <td class="virtue">Automatische updates</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
       <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icons08.jpg')?>" alt="" /></td>
        <td class="virtue">Gratis 24/7 technische ondersteuning</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->
<!--bottom-->
<div class="bottom">
  <div class="wrapper">
    <div class="content">
      <div class="img-box"></div>
      <ul>
        <li><i></i> <strong>1 Jaar, <b>1 PC</b></strong> €<span>19</span>,99</li>
        <li class="active"><i></i> <strong>1 Jaar, 1 PC + <b> 2 PC’s + AMC</b></strong> €<span>17</span>,99</li>
      </ul>
      <dl>
        <dt><span>70%</span> Korting</dt>
        <dd><a href="https://www.iobit.com/buy.php?product=nl-sd61y3pcamc1799&ref=nl_sd63pcamc1799purchase1911<?php echo $refStr;?>&refs=nl_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1911-nl')" class="buybtn">Bestel Nu</a></dd>
        <dd class="last">Beperkt Beschikbaar</dd>
      </dl>
    </div>
  </div>
</div>
<!--bottom-->
<!-- service -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dt>
      <dd><strong>Garantie</strong> 60 Dagen niet-goed-geld-teruggarantie</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""></dt>
      <dd><strong>Website beveiliging</strong> Alle websites van IObit zijn beveiligd</dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></dt>
      <dd><strong>24/7 gratis klantenservice</strong> IObit biedt gratis 24/7 klantenservice voor PRO gebruikers</dd>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Let op:</dt>
    <dd>
      *Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken
    </dd>
    <dd>
      * De gegevens kunnen variëren op basis van verschillende systemen en computers.
    </dd>
  </dl>
  <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</div>
</div>
<!-- end footer -->


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>