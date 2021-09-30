<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if (empty($_GET['ref'])) {
  $refStr = 'nlaff_asc14_2017general';
  $refDownloadStr='nlasc12g';
}else{
  $refStr=$refDownloadStr=$_GET['ref'];
}
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
if($_GET['ref']=='cb1712en'){
  $buyHref="https://www.cleverbridge.com/289/?scope=checkout&cart=184422&pricerule=enaff2999&coupon=CB50OFF&ref=".$refStr."&AFFILIATE=".$affStr;
}elseif($_GET['ref']=='fs1702en'){
  $buyHref="https://www.macboost.net/xhtml/iobit.html?product=advanced-systemcare-10-pro-1-year-subscription-3-pcs&coupon=ASC50OFF";
}elseif($_GET['ref']=='rw1702en'){
  $buyHref="https://safecart.com/iobit/ascpro/1year3pcs?coupon_code=66PQ";
}elseif($_GET['ref']=='fs269814'){
  $buyHref="https://macbooster.7eer.net/c/269814/378283/4385";
}elseif($_GET['ref']=='fs391813'){
  $buyHref="https://macbooster.7eer.net/c/391813/378283/4385";
}else{
  $buyHref="https://www.iobit.com/buy.php?product=nlaff-asc143pc1499a&ref=".$refStr."&aff=".$affStr;
}

if(preg_match('/fspi([0-9]*)/',$_GET['ref'],$matches)){
  $buyHref='https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499';
  $pregNum=$matches[1];
  if(!empty($pregNum)){
    $buyHref='https://macbooster.7eer.net/c/'.$pregNum.'/556566/4385';
  }
}

if(!empty($_GET['ref'])){

    if(preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

        $buyHref = "https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499";

        if ($arr[1][0] != null) {

            $buyHref = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/556566/4385";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Geniet zorgeloos van een snelle pc met ASC PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <p>De Beste PC-Optimalisatie Software Die Er Is</p>
      <h1>Advanced SystemCare PRO</h1>
      <h4>Maak Uw PC Schoner, Sneller en Stabieler in Slechts 1 Klik</h4>
      <div class="btnbox">
        <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'nlasc12g')">
          <p>Download voor een gratis scan</p>
          Voor Win10/8/7/Vista/XP
        </a>
        <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'nlaffasc142017general')">
         Koop Nu & Bespaar <strong>50%</strong> 
        </a>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- mediareview start -->
    <dl class="mediareview wrapper clearfix">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/media_icon.png" alt="">
        <p>Door meer dan 250 miljoen gebruikers gekozen</p>
      </dt>
      <dd>
        <h3>Advanced SystemCare herstelt wat er ook aan uw computer mankeert.</h3>
        <p>
          "Er is niets vervelender dan een computer die zo traag is geworden dat uw werk en games eronder lijden. Advanced Systemcare lost al uw computerproblemen op door junk files, malware en ongeldige register items op te schonen en geeft uw computer een boost om de gebruikservaring te optimaliseren." -Cnet
        </p>
      </dd>
    </dl>
    <!-- mediareview end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>De Must-have Optimalisatiesoftware voor Elke PC-Gebruiker</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro1.png')?>" alt=""></dt>
          <dd><h3>Snellere PC</h3></dd>
          <dd>Identificeer en verhelp prestatieproblemen die uw pc vertragen</dd>
        </dl>
        <dl class="more">
          <dt><img src="<?php echo getStaticUrl('images/intro2.png')?>" alt=""></dt>
          <dd><h3>Stabieler Systeem</h3></dd>
          <dd>Verhelp fouten in Windows om uw systeem weer stabiel te maken en crashes te voorkomen</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro3.png')?>" alt=""></dt>
          <dd><h3>Veiliger Browsen</h3></dd>
          <dd>Wis automatisch browsergegevens en verberg uw digitale vingerafdruk zodat u niet gevolgd wordt</dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Een Schone, Snelle en Stabiele PC is maar één Muisklik van U Verwijderd</h2>
        <div class="btnbox">
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'nlaffasc142017general')">
            Koop Nu & Bespaar <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- describe start -->
    <div class="wrapper">
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe1.png')?>" alt=""></div>
        <div class="fl txtbox">
          <h2>Grondige Opschoning & Optimalisatie van Uw PC</h2>
          <p>
            Advanced SystemCare PRO levert grondige opschoning van ongewenste bestanden, ongeldige register items, ongewenste & hardnekkige programma’s, adverterende taakbalken & plug-ins, en optimaliseert opstartproces, RAM, Internet, systeem en harde schijven voor een schone en snelle pc.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe2.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Verhelp Alle Soorten PC-Problemen</h2>
          <p>
           Advanced SystemCare PRO identificeert en verhelpt allerlei soorten Windows problemen, zoals registerfouten, schijffouten, Windows beveiligingsproblemen, verouderde drivers en systeemproblemen, om stabiliteit te herstellen en crashes te voorkomen.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe3.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Monitort Systeembronnen in Real Time</h2>
          <p>
            Advanced SystemCare PRO beheert uw RAM, CPU en Schijfgebruik in 1 klik, en kan inactieve processen & programma’s automatisch detecteren en uitschakelen, om geheugen vrij te maken en uw PC-prestaties een boost te geven.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe4.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Proactieve Bescherming van Uw Online Privacy</h2>
          <p>
            Dankzij het gloednieuwe Privacy Schild en de Digitale Vingerafdruk Bescherming, detecteert en blokkeert Advanced SystemCare PRO ongewenste toegang tot uw persoonlijke gegevens en verbergt het uw digitale vingerafdruk om online sporen te wissen, voor een beschermde pc en online privacy. Bovendien voorkomt het ongewenste wijziging van uw startpagina, zoekmachine en DNS-instellingen, en worden online bedreigingen in real time verwijderd.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe5.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Blokkeer Advertenties & Schadelijke Websites</h2>
          <p>
            Advanced SystemCare PRO verwijdert storende advertenties in Internet Explorer, Chrome en Firefox, en blokkeert schadelijke & onveilige websites tijdens het browsen voor een betere surfervaring.
          </p>
        </div>
      </div>
      <div class="describe last clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe6.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Betrap Indringers Automatisch <span>(Camera Vereist)</span></h2>
          <p>
            Advanced SystemCare PRO registreert indringers die toegang tot uw pc proberen te krijgen of uw gegevens en bestanden proberen te stelen. Nadat u uw eigen gezicht heeft opgenomen, worden anderen die uw computer gebruiken automatisch, zonder dat ze het merken, opgenomen.
          </p>
        </div>
      </div>
    </div>
    <!-- describe end -->

    <!-- tool start -->
    <div class="tool">
      <div class="wrapper clearfix">
        <h2>Meer Krachtige Tools</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon1.png" alt=""></dt>
          <dd><h4>Opstart Beheer</h4></dd>
          <dd>Beheer opstart items om het opstarten van uw pc te versnellen.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon2.png" alt=""></dt>
          <dd><h4>Smart RAM</h4></dd>
          <dd>Maak geheugen vrij voor betere pc-prestaties.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon3.png" alt=""></dt>
          <dd><h4>Internet Booster</h4></dd>
          <dd>Optimaliseer browsers voor een snellere internetverbinding.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon4.png" alt=""></dt>
          <dd><h4>Win Fix</h4></dd>
          <dd>Identificeer en herstel Windows problemen.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon5.png" alt=""></dt>
          <dd><h4>Grote Bestanden Vinden</h4></dd>
          <dd>Vind en verwijder grote bestanden voor meer vrije ruimte.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon6.png" alt=""></dt>
          <dd><h4>Bestandsversnipperaar</h4></dd>
          <dd>Vernietig ongewenste bestanden permanent.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon7.png" alt=""></dt>
          <dd><h4>Register Opschonen</h4></dd>
          <dd>Herstel en verschoon registerproblemen op een veilige manier.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon8.png" alt=""></dt>
          <dd><h4>Schijf Opschonen</h4></dd>
          <dd>Verwijder allerlei soorten overbodige bestanden voor meer schijfruimte.</dd>
        </dl>
      </div>
    </div>
    <!-- tool end -->
  
    <!-- usereview start -->
    <div id="user" class="usereview wrapper clearfix">
      <h2> Klantbeoordeling</h2>
      <dl class="active">
        <dt><h4>"Niet alleen het product is geweldig, ook de service"</h4></dt>
        <dd>
          "Advanced SystemCare houdt al jaren mijn computer schoon en vrij van "bugs" en het heeft me nog nooit teleurgesteld. Ik heb recent contact opgenomen met Advanced SystemCare en binnen één of twee dagen wist ik alles wat ik nodig had. Voor mij speelt service een grote rol in mijn keuze om een product te blijven gebruiken en ASC excelleert op product en service."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Schoont Spyware en Malware op die mijn antivirus over het hoofd zag"</h4></dt>
        <dd>
          "Wij gebruikten een tiental verschillende programma’s om onze apparaten snel te houden en hackers buiten de deur te houden. Het kostte elke week uren om de beveiliging en prestaties op peil te houden. Maar nu met Advanced System Care Pro, zit alles in één programma en kost het slechts een paar minuten per week om hetzelfde te doen met meer zekerheid dan voorheen"
        </dd>
      </dl>
      <dl>
        <dt><h4>"Ik kies nog steeds overtuigd voor Advanced SystemCare Pro"</h4></dt>
        <dd>
          "Als ICT'er merk ik dat tijdens het repareren van computers, veel problemen worden opgelost door te scannen met ASC. Na de reparatie raad ik de klanten meestal het ASC PRO-pakket aan. Wie heeft er nog een technicus nodig als de klantenservice van Advanced SystemCare PRO, 24 uur per dag beschikbaar is. Dit is het beste product dat een thuisgebruiker kan kopen. Bedankt dat jullie mijn werk een stuk makkelijker maken!"
        </dd>
      </dl>
      <dl>
        <dt><h4>"Mijn systeem draaide nog nooit zo soepel."</h4></dt>
        <dd>
          "Naar mijn mening is IObits ASC Pro de beste onderhoudssoftware die er is voor Windows gebruikers, het is het helemaal waard en bevat de beste functies. IObit biedt ook zeer goede technische ondersteuning die professioneel is en snel reageert. Dat maakt hun producten extra waardevol."
        </dd>
      </dl>
      <ul class="username">
        <li class="current">
          <img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
          <p>Bruce Ramsay</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett">
          <p>Bob Bassett</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
          <p>Charles R. Widick</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold">
          <p>Gordon Griswold</p>
        </li>
      </ul>
    </div>
    <!-- usereview end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <h2>Advanced SystemCare PRO</h2>
        <p>Vertrouwd door meer dan 250 miljoen gebruikers wereldwijd</p>
        <div class="btnbox">
          <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'nlasc12g')">
            <p>Download voor een gratis scan</p>
            Voor Win10/8/7/Vista/XP
          </a>
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'nlaffasc142017general')">
            Koop Nu & Bespaar <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt>100% Schoon </dt>
          <dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
        <dl class="back">
          <dt>60 dagen Geld-Teruggarantie</dt>
          <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>24/7 ondersteuning</dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/call.png" alt="">
            <span>Gratis 24/7 Technische Ondersteuning</span>
          </dd>
        </dl>
      </div>
    </div>
    <!-- service end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</div>
  <!-- footer end -->

  <!-- backtop start -->
  <div id="backtop" class="backtop" onclick="goTarget($('.header'))"></div>
  <!-- backtop end -->

<script>    
  //userreview 
  $(".username li").mouseover(function(event) {
    var num = $(this).index();
    $(".username li").eq(num).addClass('current').siblings().removeClass('current');
    $("#user dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  //floatlayer
  $(window).on('scroll', function () {
    var scrollHeight = $(".header:last").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
      $('#backtop').addClass('on');
    }else {
      $('#backtop').removeClass('on');
    }
  });

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
</script>
</body>
</html>