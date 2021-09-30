<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
  $packsNum = ceil(microtime_float()*2000/20000);
  $packsCount=109;
  $packsNum = $packsCount-($packsNum%$packsCount);
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
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>OP=OP! Ontvang 80% korting op Driver Booster 6 PRO - Zolang de voorraad strekt</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function getPacksNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
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
      <a href="http://www.iobit.com" class="logo" target="_blank" class="logo">IObit</a>
      <div class="title">
        <h1>OP=OP !</h1>
        <h2>Ontvang nu 2 licentiecodes en 1 cadeau gratis voor de héle familie GRATIS</h2>
        <ul>
          <li> <span>8</span> Uur</li>
          <li><span>88</span> Min</li>
          <li><span>88</span> Sec</li>
          <li><span>888</span> Ms</li>
        </ul>
      </div>
      <div class="img-box clearfix">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
        <span class="packsNum"><?php echo $packsNum; ?></span>
      </div>
      <dl class="price">
        <dt><strong>24 99</strong> <del>114,98</del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=nl-db63pcpf2499&ref=nl_db63pcpf2499purchase1804<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=nl_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1804-nl')" class="buybtn"><i class="all-icons"></i> Nu Activeren</a></dd>
        <dd class="last"><i class="all-icons"></i> Al door <b>6.953.487</b> personen geactiveerd</dd>
      </dl>
    </div>
  </div>
  <!-- banner end -->
  <div class="payment">
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
  </div>
  <div class="db-message wrapper">
    <h2>Voorkom blauwe schermen of een vastlopende computer!</h2>
    <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="" class="img-box">
    <ul>
      <li>Detecteer en update meer dan 3.000.000 missende en foutieve <br>  drivers in 1 klik <img src="<?php echo getStaticUrl('images/nieuw.png')?>" alt=""></li>
      <li>Ontgrendel de maximale updatesnelheid</li>
      <li>Toegang tot alle gamecomponenten en Game Ready Drivers  <img src="<?php echo getStaticUrl('images/nieuw.png')?>" alt=""></li>
      <li>Maakt automatisch een back-up van alle drivers voor een veilig herstel</li>
      <li>Laat games soepel draaien met de nodige gamecomponenten. </li>
    </ul>
    <p><a href="Javascript:void(0);">Leer meer over de PRO versie >></a></p>
  </div>

  <div class="gift-message">
    <div class="wrapper">
      <img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt="">
      <dl>
        <dt>Protected Folder <strong>€0</strong> <del>€39,95</del></dt>
        <dd>Bescherm uw belangrijke en persoonlijke bestanden</dd>
        <dd>Geen zorgen over diefstal van gegevens</dd>
        <dd>Eén wachtwoord beschermings oplossing</dd>
      </dl>
    </div>
  </div>
  <div class="review">
    <div class="wrapper ">
      <h2> IObit wordt bekroond en vertrouwd door verschillende media.</h2>
      <div class="review-message">
        <dl class="wayne">
          <dt>
            <div class="img-box">
              <h4>Wayne Bowler</h4>
              <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Driver Booster PRO is een van de beste driver updater programma's op de markt. Het is eenvoudig te gebruiken, informatief en intuïtief. Dit programma vind alle updates die ik nodig heb. Het werkt perfect."</dd>
        </dl>
        <dl class="myo ">
          <dt>
            <div class="img-box">
              <h4>Myo Thuya</h4>
              <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Mijn PC is sneller, veiliger en nieuwer dan 8 maanden geleden met Driver Booster PRO."</dd>
        </dl>
        <dl class="pcmag red-round active">
          <dt>
            <div class="img-box">
              <h4>PC-MAG</h4>
              <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>“IObit maakt verschillende software voor Windows, Driver Booster PRO, die automatisch drivers update, is een van hun beste programma’s.”</dd>
        </dl>
        <dl class="chip ">
          <dt>
            <div class="img-box">
              <h4>chip</h4>
              <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>Driver Booster PRO: Automatisch drivers updaten is alleen mogelijk in de PRO versie.</dd>
        </dl>
        <dl class="fabio red-round active">
          <dt>
            <div class="img-box">
              <h4>Fabio Tursi</h4>
              <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Met IObit Driver Booster Pro heb ik eindelijk het perfecte programma gevonden om mijn systeem schoon en up-to-date te houden.”</dd>
        </dl>
        <dl class="vector ">
          <dt>
            <div class="img-box">
              <h4>Vector</h4>
              <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
            <div>
            <div class="line"></div>
          </dt>
          <dd>“Eindelijk een programma dat mijn systeem up-to-date houdt op de meest simpele manier!”</dd>
        </dl>
        <dl class="adam">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
               <h4>Adam Backlund</h4>
             </div>
            <div class="line"></div>
          </dt>
          <dd>"Raad ik Driver Booster PRO aan iedereen die gemakkelijk en snel zijn drivers wil bijwerken direct aan."</dd>
        </dl>
        <dl class="olnet">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
               <h4>01net</h4>
             <div>
            <div class="line"></div>
          </dt>
          <dd>“U kunt alle drivers bijwerken met maar 1-klik. Dit programma bespaart tijd en maakt uw PC weer stabiel.”</dd>
        </dl>
        <dl class="olorin red-round active">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
               <h4>Olorin 89</h4>
             </div>
            <div class="line"></div>
          </dt>
          <dd>“Driver Booster is gewoonweg de driver update tool die het leven voor iedereen makkelijker maakt.”</dd>
        </dl>
        <dl class="html ">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
               <h4>HTML-it</h4>
            </div>
            <div class="line"></div>
          </dt>
          <dd>IObit Driver Booster houdt met een geavanceerde technologie alle drivers up-to-date.</dd>
        </dl>

      </div>
    </div>
  </div>
  <!-- comparison start -->
  <div id="compare" class="comparison wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Driver Booster PRO functies</th>
          <th class="itemb">Driver Booster <b>FREE</b></th>
          <td class="space"></td>
          <th class="itema">Driver Booster <b>PRO</b></th>
        </tr>
      </thead>
      <tbody>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Snel &amp; Veilig Updaten</strong></td>
          <td class="itemb gray"></td>
          <td class="space"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Scant &amp; identificeert automatisch verouderde, missende en foutieve Drivers</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Update verouderde drivers met 1-klik</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Veiliger updaten met alléén gekwalificeerde WHQL drivers</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Grotere database werkt nog meer verouderde en zeldzame drivers bij</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Ontgrendel de maximale updatesnelheid</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Maakt automatisch een backup van alle Drivers voor een veilig herstel</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
          <td class="virtue">Voorrang op de nieuwste Game Ready Drivers</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Voorrang op het installeren van vernieuwde gamecomponenten</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="bottall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Repareert apparaatfouten automatisch voor betere prestaties</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Sneller Downloaden</strong></td>
          <td class="itemb gray"></td>
          <td class="space"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Kleinere driver pakketten voor snelle installatie</td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="bottall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Download &amp; Installeert Drivers tijdens het opstarten</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="title">
          <td class="icons gray" width="45"></td>
          <td class="virtue gray"><strong>Premium IObit service</strong></td>
          <td class="itemb gray"></td>
          <td class="space"></td>
          <td class="itema orange"></td>
        </tr>
        <tr class="tall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
          <td class="virtue">Automatisch bijwerken naar de nieuwste versie </td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
        <tr class="bottall">
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
          <td class="virtue">Gratis 24/7 technische ondersteuning</td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons orange">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
  <div class="bottom-buy">
    <div class="wrapper">
      <h2>OP=OP !</h2>
      <h3>Nog maar <strong class="packsNum"><?php echo $packsNum; ?></strong> pakketten beschikbaar!</h3>
      <img src="<?php echo $pResUrl; ?>images/bottom-db-box.png" alt="" class="img-box">
      <dl class="price">
        <dt><strong>24 99</strong> normal prijs <del>114,98</del></dt>
        <dd><a href="https://www.iobit.com/buy.php?product=nl-db63pcpf2499&ref=nl_db63pcpf2499purchase1804<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=nl_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1804-nl')" class="buybtn"><i class="all-icons"></i> Nu Activeren</a></dd>
        <dd class="last">1 jarig abonnement voor 3 PC's </dd>
      </dl>
    </div>
  </div>
  <div class="footer">
    <div class="service wrapper clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
        <dd><h3>Garantie</h3></dd>
        <dd>60 Dagen niet goed geld terug garantie</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
        <dd><h3>Website beveiliging</h3></dd>
        <dd>Alle websites van IObit zijn beveiligd</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/service.png" alt=""></dt>
        <dd><h3>24/7 gratis klantenservice</h3></dd>
        <dd>IObit biedt gratis 24/7 <br> klantenservice voor PRO gebruikers</dd>
      </dl>
    </div>
    <!-- annotation start -->
    <dl class="annotation wrapper">
      <dt>Let op:</dt>
      <dd>*Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken</dd>
      <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
    </dl>
    <!-- annotation end -->
    <!-- footer start -->
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
    <!-- footer end -->
  </div>


  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>