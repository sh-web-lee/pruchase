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
  $refStr = 'dkaff_asc14_2017general';
  $refDownloadStr='dkasc12g';
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
  $buyHref="https://www.iobit.com/buy.php?product=dkaff-asc143pc164&ref=".$refStr."&aff=".$affStr;
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
<title>Få glæde af en problemfri og hurtig PC med ASC PRO</title>
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
      <p>Få glæde af en mere stabil PC med ASC PRO</p>
      <h1>Advanced SystemCare PRO</h1>
      <h4>En renere, hurtigere og mere stabil PC med blot et klik</h4>
      <div class="btnbox">
        <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'dkasc12g')">
          <p>Download og få en gratis skanning</p>
          Til Win10/8/7/Vista/XP
        </a>
        <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'dkaffasc142017general')">
         Køb nu og spar <strong>50%</strong> 
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
        <p>Over 250 millioner brugere har valgt IObit</p>
      </dt>
      <dd>
        <h3>Advanced Systemcare bestræber sig på at kurere, hvad end din computer fejler.</h3>
        <p>
          "Der er intet værre end en computer, der er så nedkørt, at det hæmmer dit arbejde eller din spiloplevelse. Advanced Systemcare bestræber sig på at kurere hvad end det er, din computer fejler ved ikke kun at rengøre for junkfiler, malware og ugyldige poster i registreringsdatabasen, men booster også din computer for at optimere din PC-oplevelse.”-Cnet
        </p>
      </dd>
    </dl>
    <!-- mediareview end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>Det essentielle TuneUp-værktøj til enhver PC-bruger</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro1.png')?>" alt=""></dt>
          <dd><h3>Hurtigere PC</h3></dd>
          <dd>Identificer og fjern problemer der påvirker din PC’s ydeevne og gør den hurtigere.</dd>
        </dl>
        <dl class="more">
          <dt><img src="<?php echo getStaticUrl('images/intro2.png')?>" alt=""></dt>
          <dd><h3>Mere stabilt system</h3></dd>
          <dd>Ret Windows -fejl og gendan systemstabilitet og reducer sammenbrydninger på din PC</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro3.png')?>" alt=""></dt>
          <dd><h3>Sikrere Browsing</h3></dd>
          <dd>Ryd browser-data automatisk og skjul dine digitale fingeraftryk for at stoppe ondsindet sporing.</dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>En ren, hurtig og stabil PC er blot et klik væk.</h2>
        <div class="btnbox">
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'dkaffasc142017general')">
            Køb nu og spar <strong>50%</strong> 
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
          <h2>Rens din PC grundigt for at optimere den</h2>
          <p>
            Advanced SystemCare PRO renser grundigt for junkfiler, ugyldige poster i registreringsdatabasen, uønskede og stædige programmer, annoncebaserede værktøjer og plugins og optimerer PC-opstarten, RAM, Internet, system og diske og gør din PC hurtig og god som ny.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe2.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Ret alle slags PC-problemer</h2>
          <p>
            Advanced SystemCare PRO identificerer og retter alle slags Windows-problemer inklusive fejl i registreringsdatabasen, diskfejl, sikkerhedsfejl i Windows, forældede drev, systemproblemer m.fl. og gendanner dit systems stabilitet og forhindrer din PC i at bryde sammen.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe3.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Overvågning af systemets resurser i realtid</h2>
          <p>
            Advanced SystemCare PRO hjælper dig med at håndtere din RAM, CPU og diskbrug med blot et klik. Værktøjer opdager og deaktiverer også inaktive processer og programmer for at frigøre hukommelsesplads og booste din PC’s ydeevne.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe4.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Beskyt dine private onlinedata proaktivt</h2>
          <p>
            Integreret med de splinternye funktioner Privacy Shield og Digital Fingerprint Protection, kan Advanced SystemCare PRO opdage og stoppe uvedkommende i at tilgå dine personlige data og skjule digitale fingeraftryk for at forhindre online sporing og beskytter din PC og personlige data bedre. Det forhinder ondsindede ændringer på din startside, søgemaskine samt DNS-indstillinger og fjerner onlinetrusler i realtid.  
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe5.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Fjern annoncer og bloker ondsindede hjemmesider</h2>
          <p>
            Advanced SystemCare PRO fjerner irriterende annoncer i Internet Explorer, Chrome og Firefox, og blokerer ondsindede og usikre hjemmesider, mens du browser og giver en bedre surfing-oplevelse.
          </p>
        </div>
      </div>
      <div class="describe last clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe6.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2> Fang ubudne gæster automatisk  <span>(kræver kamera)</span></h2>
          <p>
            Advanced SystemCare PRO hjælper med at stoppe uvedkommende i at tilgå din PC uden din tilladelse eller i at stjæle dine personlige informationer samt vigtige filer. Efter optagelse af dit ansigt vil det automatisk optage billeder lydløst i baggrunden efter uvedkommende.
          </p>
        </div>
      </div>
    </div>
    <!-- describe end -->

    <!-- tool start -->
    <div class="tool">
      <div class="wrapper clearfix">
        <h2>Flere fantastiske værktøjer</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon1.png" alt=""></dt>
          <dd><h4>Startup Manager</h4></dd>
          <dd>Håndterer opstartsposter og accelererer din PC’s opstart.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon2.png" alt=""></dt>
          <dd><h4>Smart RAM</h4></dd>
          <dd>Frigør hukommelsesplads og boost din PC’s ydeevne.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon3.png" alt=""></dt>
          <dd><h4>Internet Booster</h4></dd>
          <dd>Optimerer browsere så internethastigheden øges.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon4.png" alt=""></dt>
          <dd><h4>Win Fix</h4></dd>
          <dd>Identificerer og retter Windows-problemer.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon5.png" alt=""></dt>
          <dd><h4>Large Files Finder</h4></dd>
          <dd>Finder og fjerner større filer for at frigøre plads.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon6.png" alt=""></dt>
          <dd><h4>File Shredder</h4></dd>
          <dd>Fjerner uønskede filer permanent, så de ikke kan gendannes.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon7.png" alt=""></dt>
          <dd><h4>Registry Cleaner</h4></dd>
          <dd>Renser sikkert og reparerer problemer i databasen.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon8.png" alt=""></dt>
          <dd><h4>Disk Cleaner</h4></dd>
          <dd>Renser for alle slags junkfiler og frigør diskplads.</dd>
        </dl>
      </div>
    </div>
    <!-- tool end -->
  
    <!-- usereview start -->
    <div id="user" class="usereview wrapper clearfix">
      <h2>Brugeranmeldelse</h2>
      <dl class="active">
        <dt><h4>"Det er ikke kun et skønt produkt, servicen er lige så skøn"</h4></dt>
        <dd>
          "Advanced SystemCare har holdt min computer ren og "bug"-fri i flere år nu og det har ikke svigtet mig endnu. Jeg kontaktede Advanced System Care for nyligt og de svarede inden for en dag eller to med alt jeg behøvede at vide. For mit vedkommende er kundeservicen afgørende for, om jeg fortsat bruger et produkt, og ASC leverer både med produktet og servicen."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Fjernede Spyware og Malware, som min antivirus lod slippe igennem"</h4></dt>
        <dd>
          "Vi plejede at bruge et dusin af forskellige programmer for at holde vores computere problemfrie og uvedkommende ude. Det tog flere timer hver uge at vedligeholde sikkerheden og ydeevnen. Men nu, med Advanced SystemCare Pro, er alt samlet et sted, og det tager os kun et par minutter med et par dages mellemrum at udføre et endnu bedre stykke arbejde."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Mit valg er stadig uden tvivl Advanced SystemCare Pro"</h4></dt>
        <dd>
          "Som computerreparatør løser jeg de fleste problemer ved at downloade og foretage skanninger med ASC PRO. Når en skanning er udført, anbefaler jeg som regel clienten til at købe Pro-pakken. Hvem behøver en tekniker, når du kan få Advanced System Care Pro til at køre dit suste, 24/7? Dette er det bedste produkt en hjemmebruger kan købe. Tak fordi I gør mit job lettere."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Mit system har aldrig kørt bedre."</h4></dt>
        <dd>
          "Jeg mener, at IObit’s ASC Pro er det bedste vedligeholdelsesværktøj tilgængeligt for Windows brugere. Det giver suveræn værdi og funktion. Samtidig, forsyner IObit dig med støtte fra tekniske eksperter, som er kompetente, besidder en stor viden, og forstående, hvilket tilføjer en betydelig værdi til deres produkter og service for deres kunder."
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
        <p>Betroet af flere end 250 millioner brugere verdenen over</p>
        <div class="btnbox">
          <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'dkasc12g')">
            <p>Download og få en gratis skanning</p>
            Til Win10/8/7/Vista/XP
          </a>
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'dkaffasc142017general')">
            Køb nu og spar <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt>100% Clean</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
        <dl class="back">
          <dt>60 dages tilfredsgaranti eller pengene retur</dt>
          <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>Support 24/7</dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/call.png" alt="">
            <span>Gratis teknisk support 24/7</span>
          </dd>
        </dl>
      </div>
    </div>
    <!-- service end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rettigheder forbeholdes.</div>
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