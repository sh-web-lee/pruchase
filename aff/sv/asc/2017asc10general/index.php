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
  $refStr = 'svaff_asc14_2017general';
  $refDownloadStr='svasc12g';
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
  $buyHref="https://www.iobit.com/buy.php?product=svaff-asc143pc232a&ref=".$refStr."&aff=".$affStr;
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
<title>Njut av en problemfri snabb dator med ASC PRO</title>
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
      <p>Världens Första Tuneup Verktyg för Dator</p>
      <h1>Advanced SystemCare PRO</h1>
      <h4>Gör Din Dator Renare, Snabbare och Mer Stabil med Bara 1 Klick</h4>
      <div class="btnbox">
        <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'svasc12g')">
          <p>Ladda ner för en gratis skanning</p>
          För Win10/8/7/Vista/XP
        </a>
        <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'svaffasc142017general')">
         Köp Nu & Spara <strong>50%</strong> 
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
        <p>Över 250 miljoner användares val</p>
      </dt>
      <dd>
        <h3>Advanced Systemcare syftar till att avhjälpa vad som helst skadar din dator.</h3>
        <p>
         "Det finns inget värre än en dator som är fastnat så mycket att den hindrar din förmåga att arbeta eller spela spel. Advanced Systemcare syftar till att avhjälpa vad som helst skadar din dator genom att inte bara rengöra skräpfiler, skadlig programvara och ogiltiga registerposter, utan ge din dator ett boost för att optimera din upplevelse på dator. "- Cnet
        </p>
      </dd>
    </dl>
    <!-- mediareview end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>Det Must-ha Tuneup Verktyget för Varje PC-användare</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro1.png')?>" alt=""></dt>
          <dd><h3>Snabbare PC</h3></dd>
          <dd>Identifiera och ta bort prestandaproblem som orsakar dators nedgång</dd>
        </dl>
        <dl class="more">
          <dt><img src="<?php echo getStaticUrl('images/intro2.png')?>" alt=""></dt>
          <dd><h3>Mer Stabilt System</h3></dd>
          <dd>Fixa Windows fel för att återställa systemstabilitet och minska PC-kraschar</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro3.png')?>" alt=""></dt>
          <dd><h3>Säkrare Surfning</h3></dd>
          <dd>Rensa bläddringsdata automatiskt och dölja digitalt fingeravtryck för att stoppa skadlig spårning</dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>En Ren, Snabb och Stabil Dator är bara ett Musklick Bort</h2>
        <div class="btnbox">
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'svaffasc142017general')">
            Köp Nu & Spara <strong>50%</strong> 
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
          <h2>Djup Rengöring och Optimering på Din Dator</h2>
          <p>
            Advanced SystemCare PRO rensar djupt skräpfiler, ogiltiga registerposter, oönskade & envisa program, adbaserade verktygsfält och plugins och optimerar start, RAM, Internet, system och diskar för att återställa en ren och snabb dator.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe2.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Fixa Alla Typer av Problem med Dator</h2>
          <p>
            Advanced SystemCare PRO identifierar och fixar alla typer av problem med Windows inkl. registerfel, diskfel, Windows-säkerhetsproblem, föråldrade drivrutiner, systemproblem etc. för att återställa systemstabilitet och förhindra kraschar på dator.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe3.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Övervaka Systemresurs i Realtid</h2>
          <p>
            Advanced SystemCare PRO hjälper dig att hantera RAM, CPU  och disks användning med 1 klick och upptäcker och inaktiverar automatiskt inaktiva processer och program för att frigöra minne och öka dators prestanda.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe4.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Skydda Din Onlineintegritet på Ett Proaktivt Sätt</h2>
          <p>
            Integrerat med helt nytt Integritetssköld och helt nytt Skydd för Digitalt Fingeravtryck, kan Advanced SystemCare PRO upptäcka och blockera hemlig åtkomst till dina personuppgifter och dölja digitalt fingeravtryck för att rensa onlinespår, för att bättre skydda din dator och onlineintegritet. Samtidigt förhindrar det skadliga ändringar på din hemsida, sökmotor och DNS-inställningar, tar bort onlinehot i realtid.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe5.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Ta Bort Annonser och Blockera Skadliga Webbplatser</h2>
          <p>
            Advanced SystemCare PRO tar bort irriterande annonser i Internet Explorer, Chrome och Firefox och blockerar skadliga och osäkra webbplatser medan du surfar för att säkerställa en bättre surfupplevelse.
          </p>
        </div>
      </div>
      <div class="describe last clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe6.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2> Fånga önkräktare Automatiskt  <span>(Kamera Krävs)</span></h2>
          <p>
            Advanced SystemCare PRO hjälper till att fånga inkräktare som kommer åt din dator utan tillstånd eller försöker stjäla din personliga information och viktiga filer. Efter du har spelat in ditt eget ansikte kommer det automatiskt att fånga inkräktares bild tyst i bakgrunden.
          </p>
        </div>
      </div>
    </div>
    <!-- describe end -->

    <!-- tool start -->
    <div class="tool">
      <div class="wrapper clearfix">
        <h2>Fler Fantastiska Verktyg</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon1.png" alt=""></dt>
          <dd><h4>StartHanterare</h4></dd>
          <dd>Hantera Startobjekt för att Påskynda Dators Start.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon2.png" alt=""></dt>
          <dd><h4>Smart RAM</h4></dd>
          <dd>Frigör minne för att höjer dators prestanda.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon3.png" alt=""></dt>
          <dd><h4>Internet Booster</h4></dd>
          <dd>Optimera webbläsare för att påskynda den anslutningen till Internet.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon4.png" alt=""></dt>
          <dd><h4>Win Lagning</h4></dd>
          <dd>Identifiera och lösa Windowsproblem.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon5.png" alt=""></dt>
          <dd><h4>Sökare efter Stor Filer</h4></dd>
          <dd>Hitta och ta bort stora filer för mer utrymme.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon6.png" alt=""></dt>
          <dd><h4>Filförstörare</h4></dd>
          <dd>Ta bort oönskade filer beständigt bortom återställning.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon7.png" alt=""></dt>
          <dd><h4>Registerrensare</h4></dd>
          <dd>Rengör och reparera registerproblem på ett säkert sätt.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon8.png" alt=""></dt>
          <dd><h4>Diskrensare</h4></dd>
          <dd>Rengör alla typer av skräpfiler för att frigöra diskutrymme.</dd>
        </dl>
      </div>
    </div>
    <!-- tool end -->
  
    <!-- usereview start -->
    <div id="user" class="usereview wrapper clearfix">
      <h2>Användarrecension</h2>
      <dl class="active">
        <dt><h4>"Inte bara den produkt utan också det stödet är bra"</h4></dt>
        <dd>
          "Advanced SystemCare har fungerats för att hålla min dator ren och" bug "försvinnande i flera år och det har inte svikit mig ännu. Jag kontaktade Advanced System Care nyligen och de svarade inom en dag eller två med allt jag behövde veta. I mitt sinne är stödet enormt i beslutet att stanna med en produkt och ASC vinner på både produkt och support."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Rensat upp spionprogram och skadligt program som Mitt antivirusprogram låter glida igenom"</h4></dt>
        <dd>
          "Vi brukade förbruka ett dussin olika program för att få våra maskiner att fungera smidigt och hålla skurkar ute. Det tog timmar varje vecka för att upprätthålla säkerhet och prestanda. Nu, med Advanced System Care Pro, är allt på ett ställe och det tar oss bara några minuter varje par dagar att göra samma jobb med mycket mer självförtroende."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Mitt val är fortfarande överväldigande Advanced SystemCare Pro"</h4></dt>
        <dd>
          "Som underhållspersonal hittar jag genom att ladda ner och söka med ASC PRO dem flesta lösningarna till problem med dator. När jag är klar med en skanning föreslår jag vanligtvis att våra kunder köpa Pro paket. Vem behöver en teknik när du har gjort det i Advanced System Care Pro fungerar på ditt system 24-7? Detta är den bästa produkten som en hemanvändare kan köpa. Tack för att du har gjort mitt jobb enklare."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Mitt system har aldrig fungerat bättre."</h4></dt>
        <dd>
          "Enligt min åsikt är IObit ASC Pro det bästa underhållsprogrammet som finns tillgängligt för Windows användare, vilket ger utmärkt värde och funktion. Samtidigt ger IObit expert-tekniskt stöd som är kompetent, kunnigt och lyhört och lägger betydande värde på sina produkter och tjänster för sina kunder."
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
        <p>Med förtroende från fler än 250 miljoner användare över hela världen</p>
        <div class="btnbox">
          <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'svasc12g')">
            <p>Ladda ner för en gratis skanning</p>
            För Win10/8/7/Vista/XP
          </a>
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'svaffasc142017general')">
            Köp Nu & Spara <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt>100% Ren</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
        <dl class="back">
          <dt>60 dagars Pengar Tillbaka</dt>
          <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>24/7 support</dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/call.png" alt="">
            <span>Gratis 24/7 Teknisk Support vid Behov</span>
          </dd>
        </dl>
      </div>
    </div>
    <!-- service end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</div>
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