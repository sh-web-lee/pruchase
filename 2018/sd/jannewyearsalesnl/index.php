<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  $packsCount=299;
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide'))){
  $refStr='-'.$_GET['ref'];
}else{
  $refStr='';
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>70% Nieuwjaarskorting op Smart Defrag PRO - Gelukkig Nieuwjaar 2018 </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Montserrat:400,600'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script>
    function getPacksNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),
        success: function(packs){
          $('.packsNum').html(packs);
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
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>Nieuwjaarsactie  70%  KORTING </h1>
        <h2> 2 HALEN 1 BETALEN Aanbieding eingigt BIJNA!</h2>
      </div>
      <div class="offer clearfix">
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/sdbox.png')?>" alt="" /></dt>
          <dd><strong>€19,99  </strong> <del>€29,99</del></dd>
          <dd class="name"><i class="all-icons"></i><b> 1</b> jarig abonnement voor <b>3</b> PC’s</dd>
          <dd class="last">De beste harde schijf prestaties en PC snelheid</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pfbox.png')?>" alt="" /></dt>
          <dd><strong>€0,- </strong> <del>€39,95</del></dd>
          <dd class="name"><i class="all-icons"></i>1 jarig abonnement voor 1 PC</dd>
          <dd class="last">De beste bescherming voor uw persoonsgegevens</dd>
        </dl>
        <div class="fr informa">
          <img src="<?php echo getStaticUrl('images/sdpfbox.png')?>" alt="" />
          <div class="price">
            <p><strong>19<span>99</span></strong> <span><del>€69,94</del> <b>Bespaar €49,95</b></span></p>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=nl-sd53pcpf1999&ref=nl_sd53pcpfpurchase1801<?php echo $refStr;?>&refs=nl_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1801-nl')​">
              Bestel Nu!
            </a>
            <p>Nog maar <span class="packsNum"><?php echo $packsNum;?></span> pakketten!</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- payments start -->
  <div class="payments ">
    <div class="wrapper">
      <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" />
    </div>
  </div>
  <!-- payments end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Ultieme prestaties voor uw harde schijf - SmartDefrag Pro!</h2>
    <div class="cont clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <div class="fl">
        <h3>Waarom zou u de PRO versie aanschaffen? </h3>
        <ul>
          <li>Intelligente defragmentie met meer dan 5.000.000 PRO <br> gebruikers wereldwijd</li>
          <li>Veilige en automatische schijfdefragmentatie </li>
          <li>Maximale schijfprestaties en snellere toegang tot bestanden</li>
          <li>Tot 100% snellere opstarttijd en starten van pc games</li>
        </ul>
        <a class="compareBtn" href="javascript: void(0);">Verschillen tussen de Free & Pro versie></a>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Vertrouwd en bekroond door de volgende media</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->
  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>Klantbeoordelingen</h3></dt>
        <dd>
          <h4>
            "Met Smart Defrag 5 PRO op mijn PC, defragmenteert mijn PC zich automatisch zonder omkijken. Mijn systeem loopt nu altijd soepel en snel."
          </h4>
        </dd>
        <dd>
          "Ik gebruik al jaren verschillende IObit producten. Ik gebruik een verouderde PC met 6 besturingssystemen, inclusief 2 externe. Ik ben het meest te spreken over Smart Defrag 5 PRO omdat het mijn oude computer gemakkelijk en automatisch defragmenteert. IObit blijft zijn producten continu verbeteren en de versies bijwerken. Ik ben erg tespreken over dit product!"
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordelingen</h3></dt>
        <dd>
          <h4>"Het is een eenvoudig te gebruiken, must-have tool voor je harde schijf of SSD"</h4>
        </dd>
        <dd>
          "Ik gebruik een combinatie van RAID 0 SSD's en RAID 0 HDD's en gebruik Smart Defrag Pro voor het analyseren, defragmenteren zodat mijn schijven op top niveau blijven. Zoals met alle software van IObit is het eenvoudig te installeren, gebruiken en is het een zeer betrouwbaar programma. Smart Defrag neemt weinig ruimte in beslag zodat het geen invloed heeft op de snelheid van de  pc. Een absolute aanrader."
        </dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Media recensie</h3></dt>
        <dd>
          <h4>
            "IObit Smart Defrag is tot zover de beste defragger die we hebben gebruikt."
          </h4>
        </dd>
        <dd>
          "IObit Smart Defrag optimaliseert uw PC om volledig te profiteren van SSD prestaties tijdens het defragmenteren van uw harde schijf. De SSD Trim applicatie maakt automatische systeem tweaks die normaal gesproken alleen door iemand met ervaring uitgevoerd kunnen worden. Smart Defrag's updates omvatten onder andere een nieuw defragmentatie engine, speciale Game Defragmentatie, een geweldige nieuwe interface en meer opties voor talen (35 en groeiende)."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordelingen</h3></dt>
        <dd>
          <h4>
            "Smart Defrag geeft mij alles wat ik nodig heb voor mijn Windows 10 systeem.”
          </h4>
        </dd>
        <dd>
          "Ik gebruik Smart Defrag op meerdere computers sinds ik mij heb aangemeld op de computer club. De leden gebruikte dit programma al jaren en toen de Franse vertaling van Smart Defrag uitkwam, heb ik het direct geïnstalleerd. Ik zie steeds meer IT tijdschriften die Smart Defrag aanbevelen. Dit prorgamma werkt goed met Windows 10.” 
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Klantbeoordelingen</h3></dt>
        <dd>
          <h4>
            “Smart Defrag v5 is een geweldige aanwinst voor mijn systeem. Het doet precies wat ik ervan verwacht en nodig heb.”
          </h4>
        </dd>
        <dd>
          “Ik ben zeer tevreden met Smart Defrag v5. Het werkt altijd optimaal. Ik hoef alleen maar het programma op te starten en het schoont alles weer op. Ik ben absoluut een 100% tevreden klant. Ook wanneer ik hulp nodig had met het oplossen van een probleem, kreeg ik onmiddellijk antwoord. Dat waardeer ik heel erg.” 
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="William Howes">
        </div>
        <p>William Howes</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></div>
        <p>Edward Lee Ah Yen</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet">
        </div>
        <p>Cnet</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland LALIS">
        </div>
        <p>Roland LALIS</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten">
        </div>
        <p>Jim Parten</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Bekijk wat de PRO editie voor u kan betekenen:</th>
          <td class="space"></td>
          <th class="itemb">Smart Defrag <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">
            SD PRO + Protected Folder GRATIS
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=nl-sd53pcpf1999&ref=nl_sd53pcpfpurchase1801<?php echo $refStr;?>&refs=nl_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1801-nl')​">
              Bespaar Nu
            </a>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Standaard harde schijf Defragmentatie en Optimalisatie</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Tot 200% snellere toegang tot uw bestanden</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Snellere PC Opstart tijd met het nieuwe ‘Opstart Menu’</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Defragmenteert Automatisch Gedefragmenteerde bestanden</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Aanpassen van defragmentatie Mode & Schijven die u wilt defragmenteren</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">DMA toegevoegd voor Betere, Snellere &amp; meer Stabiele Dataoverdracht</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Geen onderbrekingen tijdens uw werk of tijdens het gamen met de ‘Stille Modus’</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Beste gaming belevenis met de ‘Game Optimalisatie’ </td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Geplande taak ondersteuning met standby defragmentatie</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Automatische updates</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Gratis 24/7 technische ondersteuning</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text" colspan="2"></th>
          <td class="space"></td>
          <th class="itemb">Smart Defrag <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">
            <p>Smart Defrag PRO</p>
            <p><strong>€19,99 </strong> <del>€69,94</del></p>
            <p>1 Jaar / 3 PC’s</p>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=nl-sd53pcpf1999&ref=nl_sd53pcpfpurchase1801<?php echo $refStr;?>&refs=nl_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1801-nl')​">
              Bespaar Nu
            </a>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->
  <div class="footer">
    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Opmerking:</dt>
      <dd>*. Dergelijke promotie acties kunnen worden gewijzigd zonder voorafgaande kennisgeving van tijd tot tijd naar eigen oordeel.</dd>
      <dd>*. Data kan variëren op basis van andere computer systemen.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <p> Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
  </div>
  <!-- footer end -->


  <!-- backtotop start -->
  <div class="backtotop">
    <a href="javascript: void(0);"><img src="<?php echo getStaticUrl('images/backtotop.png')?>" alt="" /></a>
    <p>Naar boven</p>
  </div>
  <!-- backtotop end -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>