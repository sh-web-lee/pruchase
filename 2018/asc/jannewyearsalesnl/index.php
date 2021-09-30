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
  $packsNum = 56-($packsNum%56);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
    'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
    'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
    'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
    'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
    'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
    'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10'))){
  $refstr='-'.$_GET['st'];
}else{
  $refstr='';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refstr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> 80% Nieuwjaarskorting op Advanced SystemCare PRO, Ontvang het beste giftpack van 2018 GRATIS - Gelukkig Nieuwjaar </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
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
      <h1>Nieuwjaarskorting</h1>
      <ul>
        <li><span>05</span> Uur</li>
        <li><span>05</span> Min</li>
        <li><span>05</span> Sec</li>
        <li><span class="last">005</span> Ms <sup>*</sup></li>
      </ul>
      <img src="<?php echo $pResUrl; ?>images/asc-box.png" alt="" class="asc-box">
      <dl class="price">
        <dt> <span>VOOR</span> <strong>19,99  </strong> <span>van <del>109,97</del></span></dt>
        <dd><a href="http://www.iobit.com/buy.php?product=nl-asc111y3pcsdiu1999&ref=nl_asc111y3pcsdiu1999purchase1801<?php echo $refstr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1801-nl')" class="buybtn">Nu Activeren</a></dd>
        <dd><img src="<?php echo $pResUrl; ?>images/gift.png" alt=""> Slechts <strong class="packsNum"><?php echo $packsNum ?></strong> bundels beschikbaar </dd>
      </dl>
    </div>
  </div>
  <!-- banner end -->
  <!-- payment start -->
  <div class="payment wrapper">
    <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
  </div>
  <!-- payment end -->

  <!-- intro start -->
  <div class="intro wrapper clearfix">
    <h2>Haal het maximale uit uw PC met Advanced SystemCare PRO</h2>
    <img src="<?php echo $pResUrl; ?>images/intro-asc.png" alt="" class="img-box">
    <ul>
      <li>Verwijdert opgestapelde junk files en registerbestanden die uw pc vertragen</li>
      <li class="icons02">Versnelt de opstarttijd van de computer met wel 200%*</li>
      <li class="icons03">Tot wel 300%* snellere internetverbinding</li>
      <li class="icons04">Wist automatisch alle privacy sporen die u achterlaat tijdens het surfen</li>
      <li class="icons05">Repareeert zwakheden en beveilingsgaten in uw systeem  <img src="<?php echo $pResUrl; ?>images/nieuw.png" alt=""></li>
    </ul>
  </div>
  <!-- intro end -->
  <div class="gift-message">
    <h2>Ontvang 2 award winnende producten <span>GRATIS</span></h2>
    <div class="wrapper clearfix">
      <div class="gift">
        <img src="<?php echo $pResUrl; ?>images/iu-gift.png" alt="">
        <h3>IObit Uninstaller 7 PRO</h3>
        <h4>t.w.v  <del>€29,99</del> 1 jaar - 1 pc</h4>
        <p>•  Verwijdert hardnekkige programma's en plug-ins in real-time</p>
        <p>•  Detecteert kwaadaardige reclame plug-ins en extensies</p>
        <p>•  Verwijdert ingebouwde Apps in Win 10 & 8</p>
      </div>
      <div class="gift sd">
        <img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt="">
        <h3>Smart Defrag 5 PRO</h3>
        <h4>t.w.v  <del>€29,99</del> 1 jaar - 1 pc</h4>
        <p>•  Meer dan 5 miljoen PRO gebruikers wereldwijd</p>
        <p>•  Veilige en automatische schijfdefragmentatie</p>
        <p>•  Maximale schijfprestaties en snellere toegang tot  uw bestanden</p>
      </div>
      <p class="target"><a href="javascript: void(0)">Aanbieding bekijken ></a></p>
    </div>
  </div>
  <div class="awards wrapper">
    <h2>Vertrouwd en bekroond door de volgende media</h2>
    <img src="<?php echo $pResUrl; ?>images/awards.jpg" alt="">
  </div>
  <!-- user-rev start -->
  <div class="user-rev">
    <div class="wrapper clearfix">
      <h2>Advanced SystemCare PRO wordt wereldwijd door <span>6.516.944</span> personen gebruikt. </h2>
      <h3>Zie wat onze trouwe klanten & media te zeggen hebben over onze software. </h3>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick" class="head-portrait">
          <h4>Charles R. Widick</h4>
          <img src="<?php echo $pResUrl; ?>images/star.png" alt="">
        </dt>
        <dd>"Als ICT'er merk ik dat tijdens het repareren van computers, veel problemen worden opgelost door te scannen met ASC. Na de reparatie raad ik de klanten meestal het ASC PRO-pakket aan. Wie heeft er nog een technicus nodig als de klantenservice van Advanced SystemCare PRO, 24 uur per dag beschikbaar is. Dit is het beste product een thuisgebruiker kan kopen. Bedankt dat jullie mijn werk een stuk makkelijker maken!"</dd>
      </dl>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet" class="head-portrait">
          <h4>Cnet</h4>
        </dt>
        <dd>"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of spelen van online games belemmert. Advanced SystemCare heeft als doel om uw computer te herstellen. Niet alleen door het opruimen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</dd>
      </dl>
      <dl class="last">
        <dt>
          <img src="<?php echo $pResUrl; ?>images/hank-ewert.png" alt="Hank Ewert" class="head-portrait">
          <h4>Hank Ewert</h4>
          <img src="<?php echo $pResUrl; ?>images/star.png" alt="">
        </dt>
        <dd>"Net als de meeste mensen die ik ken, ben ik geen computer expert. Door de jaren heen heb ik al tig programma’s geprobeerd die allemaal beweren de beste te zijn. Die kunnen allemaal niet tippen aan de Advanced SystemCare PRO-bescherming die ik nu heb. Sinds de installatie van deze software, loopt mijn PC weer als nieuw. Dit programma overtreft alle verwachtingen, het is altijd up-to-date, en de graphics zijn ook erg gaaf! Bedankt voor dit geweldige programma!"</dd>
      </dl>
    </div>
  </div>
  <!-- user-rev end -->
  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Advanced SystemCare PRO functies</th>
          <th class="itema">
            Advanced SystemCare <br> Free
          </th>
          <th class="itemb">
            Advanced SystemCare <br> PRO
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td colspan="4" class="tab-title">Opschonen & Optimalisatie</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png" alt=""></td>
          <td class="virtue">Grondige Windows register opschoning voorkomt computer crashes</td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png" alt=""></td>
          <td class="virtue">Defragmenteert de harde schijf voor ultieme prestaties</td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png" alt=""></td>
          <td class="virtue">Schoont het RAM automatisch zodat ongebruikte programma’s en processen worden afgesloten</td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png" alt=""></td>
          <td class="virtue">Auto Care houdt uw PC automatisch in de beste conditie</td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png" alt=""></td>
          <td class="virtue">Bekijk de conditie van uw systeem in real-time</td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/gray-mark.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td colspan="4" class="tab-title">Snelheidsboost</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png" alt=""></td>
          <td class="virtue">Tot wel 200% snellere opstarttijd</td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png" alt=""></td>
          <td class="virtue">Tot wel 300% sneller internet met internet booster </td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td colspan="4" class="tab-title">Beveiliging</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png" alt=""></td>
          <td class="virtue">Basis bescherming voor verwijderen van spyware </td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/gray-mark.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png" alt=""></td>
          <td class="virtue">Volledige bescherming tegen spyware, malware, trojans, etc. </td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png" alt=""></td>
          <td class="virtue">Vang indringers met FaceID  </td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/gray-mark.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png" alt=""></td>
          <td class="virtue">Premium bescherming tijdens het surfen</td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png" alt=""></td>
          <td class="virtue">Dicht beveiligingsgaten in real-time </td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td colspan="4" class="tab-title">Premium IObit Service</td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png" alt=""></td>
          <td class="virtue">Automatische bijwerken naar de nieuwste versie</td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png" alt=""></td>
          <td class="virtue">Gratis 24/7 technische ondersteuning </td>
          <td class="itema"><span class="circle"></span></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-mark.png" alt=""></td>
        </tr>

      </tbody>
    </table>
  </div>
  <!-- comparison end -->
  <div class="bottom-buy">
    <div class="wrapper">
      <h2>Nieuwjaarskorting + GRATIS GIFTPACK</h2>
      <div class="asc-box">
        <img src="<?php echo $pResUrl; ?>images/bottom-asc-box.png" alt="">
      </div>
      <dl class="price">
        <dt> <span>VOOR</span> <strong>19,99  </strong> <span>van <del>109,97</del></span></dt>
        <dd><a href="http://www.iobit.com/buy.php?product=nl-asc111y3pcsdiu1999&ref=nl_asc111y3pcsdiu1999purchase1801<?php echo $refstr;?>&refs=nl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1801-nl')" class="buybtn">Nu Activeren</a></dd>
        <dd><img src="<?php echo $pResUrl; ?>images/gift.png" alt=""> Slechts <strong class="packsNum"><?php echo $packsNum ?></strong> bundels beschikbaar </dd>
      </dl>
    </div>
  </div>


  <!-- annotation start -->
  <dl class="annotation wrapper">
    <dt>Opmerking: </dt>
    <dd>*.Dergelijke promotionele programma's kunnen zonder voorafgaande kennisgeving worden gewijzigd, van tijd tot tijd naar eigen goeddunken.</dd>
    <dd>*.Data kan variëren afhankelijk van verschillende computer systemen.</dd>
  </dl>
  <!-- annotation end -->
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</div>
  <!-- footer end -->
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>