<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$packsNumReTime = 10;
$packsCount = 249;
$packsNum = ceil(microtime_float() * 1000 / (1000 * $packsNumReTime));
$packsNum = $packsCount - ($packsNum % $packsCount);
include $pRootUrl . 'include/common.inc.php';
$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
    'box','notibc','box13thbc'))){
  $refStr.='-'.$_GET['ref'];
}

if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Spar op til kr. 400 på IObit Malware Fighter PRO!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,400i,700'>
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getPacksNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs) {
          $('.packsNum').html(packs);
          setTimeout('getPacksNum()', 10000);
        }
      });
    }
    getPacksNum();
  </script>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png') ?>" alt="IObit"/>
    </a>
    <h1>God Jul! Special tilbud</h1>
    <p class="subhead">Kun <span class="packsNum">249</span> omhandler begrænset tilbud</p>
    <div class="banner-buy clearfix">
      <div class="banner-box fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png') ?>" alt="IMF Pro 5">
        <p>Anti-Ransomware-funktion</p>
        <p>Bitdefender Anti-Virus-motor</p>
        <p>IObit Anti-Malware-funktion</p>
      </div>
      <div class="banner-1pc buy-box fl">
        <div class="banner-buy-box-container">
          <h4>1 år, 1 pc</h4>
          <p>Beskytter din pc mod ransomware</p>
        </div>
        <div class="opr">
          <img src="<?php echo getStaticUrl('images/1pc-price.png')?>" alt="" />
        </div>
        <p class="uvp"><span>Normalpris:</span> <del>kr. 379</del></p>
        <p class="sparen">Spar <span>kr. 190</span></p>
        <a class="buy-btn" href="https://www.iobit.com/buy.php?product=dk-imf61pc189&ref=dk_imf61pcpurchase1810<?php echo $refStr;?>&refs=dk_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201805-dk')">Køb nu</a>
      </div>​
      <div class="banner-3pc buy-box fl">
        <div class="banner-buy-box-container">
          <h4>1 år, 3 pc'er</h4>
          <p>Del den bedste virusbeskyttelse</p>
        </div>
        <div class="opr">
          <img src="<?php echo getStaticUrl('images/3pc-price.png')?>" alt="" />
        </div>
        <p class="uvp"><span>Normalpris:</span> <del>kr. 599</del></p>
        <p class="sparen">Spar <span>kr. 400</span></p>
        <a class="buy-btn" href="https://www.iobit.com/buy.php?product=dk-imf63pc199&ref=dk_imf63pcpurchase1810<?php echo $refStr;?>&refs=dk_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201805-dk')">Køb nu</a>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <div class="wrapper clearfix">
    <dl>
      <dt>Betalingsmetoder</dt>
      <dd><img src="<?php echo getStaticUrl('images/visa.png') ?>" alt=""/></dd>
    </dl>
    <dl>
      <dt>Pengene tilbage garanti</dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""/></dd>
    </dl>
    <dl class="last">
      <dt>Certificering</dt>
      <dd><img src="<?php echo getStaticUrl('images/amgold.png') ?>" alt=""/></dd>
    </dl>
  </div>
</div>
<!-- payment end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Forhindrer proaktivt alle typer af ransomware, der forsøger at bryde ind i din pc!</h2>
    <div class="introimg">
      <div class="imglist">
        <ul>
          <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot03.png') ?>" alt=""></li>
          <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot02.png') ?>" alt=""></li>
          <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot01.png') ?>" alt=""></li>
        </ul>
      </div>
      <div class="mask left-mask"></div>
      <div class="mask right-mask"></div>
      <a href="javascript:" class="prev btn"><</a>
      <a href="javascript:" class="next btn">></a>
    </div>
    <div class="point clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/point01.png') ?>" alt=""/></dt>
        <dd>Skanner de filer, <span>du downloadede</span></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/point02.png') ?>" alt=""/></dt>
        <dd>Fjerner uønskede <span>browser-annoncer</span></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/point03.png') ?>" alt=""/></dt>
        <dd>Beskytter dit kamera <span>mod uautoriseret brug</span></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/point04.png') ?>" alt=""/></dt>
        <dd>Opdager og blokerer for <span>WannaCry og Petya</span></dd>
      </dl>
    </div>
    <a class="klicken" href="javascript: void(0);">Klik her for at se flere pro-funktioner>></a>
  </div>
</div>
<!-- intro end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Verdensomspændende priser</h2>
    <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<div class="wrapper">
  <!-- review start -->
  <div class="review">
    <h2>Anmeldelser fra medier og brugere</h2>
    <div class="clearfix">
      <dl class="bob">
        <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png') ?>" alt="Bob Bassett"/></dt>
        <dd>
          <p>
            "Vi plejede at bruge op til et dusin forskellige programmer for at holde vores maskiner kørende og holde de onde gutter ude. Det tog timer hver uge at opretholde sikkerhed og ydeevne. Nu med IObit Malware Fighter Pro er alt samlet på ét sted, og det tager os bare et par minutter hver anden dag at udføre de samme opgaver med meget mere tillid. Vi har ikke haft nogen problemer, siden vi begyndte at bruge jeres program."   
          </p>
          <h3>-Bob Bassett</h3>
        </dd>
      </dl>
      <dl class="chip">
        <dt><img src="<?php echo getStaticUrl('images/software.png') ?>" alt=""/></dt>
        <dd>
          <p>
            "IObit Malware Fighter PRO er en komplet sikkerhedspakke. Det luger ud i spyware, trojaner og alle andre ubehageligheder, der er også Startup Guard, som sikrer, at ingen ondsindede processer starter med Windows, Browser Guard, der sikrer, at ingen software tilføjer ændringer til din webbrowser, File Guard, der sikrer, at ukendte filer du åbner ikke forårsager skade, USB Guard, Process Guard og meget mere." 
          </p>
          <h3>-Betanews.com</h3>
        </dd>
      </dl>
      <dl class="peter">
        <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png') ?>" alt="Peter Stoffers"/></dt>
        <dd>
          <p>
            "For nogle år siden henledte nogen min opmærksomheden på IObit Malware Fighter. Først var jeg skeptisk, men efter at have installeret det blev det min favorit-anti-malware-program. Det er meget nemt at bruge. Gennem årene har det allerede opdaget flere trusler og fjernet dem. I samarbejde med de andre IObit-programmer, som for eksempel ASC, har jeg en god pc-beskyttelse. Jeg anbefaler nu disse programmer til alle mine venner og familie. "
          </p>
          <h3>-Peter Stoffers</h3>
        </dd>
      </dl>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2">Se hvad PRO-udgaven kan gøre for dig:</th>
        <th class="space"></th>
        <th class="itemb"><span>IObit Malware Fighter</span>FREE</th>
        <th class="space"></th>
        <th class="itema"><span>IObit Malware Fighter</span>PRO</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
        <td class="virtue">Grundlæggende anti-malware-funktion <sup>forbedret</sup></td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
        <td class="virtue">Op til 130% hurtigere skanning ved målrettet og hurtigt at finde aktive trusler  <sup>forbedret</sup></td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
        <td class="virtue">Skanner downloadede filer og fjerner annoncer for at forbedre beskyttelsen <sup class="ny">ny</sup></td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
        <td class="virtue">Fuld anti-malware-funktion med unik "dual-core-engine" <sup>forbedret</sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
        <td class="virtue">Advanceret trusselsbeskyttelse med Bitdefenders anti-virus-funktion <sup>forbedret</sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
        <td class="virtue">Beskyt dine filer og penge fra ransomware-angreb <sup class="ny">ny</sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
        <td class="virtue">Beskyt dit kamera mod uautoriseret adgang <sup class="ny">ny</sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
        <td class="virtue">Omfattende realtidsbeskyttelse for den bedste pc-sikkerhed <sup>forbedret</sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
        <td class="virtue">Forebygger virusinfektion overført via usb-enheder</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
        <td class="virtue">Opdager skadelige processer, der kører i RAM</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
        <td class="virtue">Auto-rensning af private spor med browser-anti-sporing <sup>forbedret</sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
        <td class="virtue">Registrerer trusler ved at analysere skadelige handlinger</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
        <td class="virtue">Arbejder intelligent i baggrunden uden at forstyrre dig</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
        <td class="virtue">Automatisk opdatering til den nyeste version</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
        <td class="virtue">Gratis 24/7 teknisk support ved behov</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons star">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
</div>

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Bemærk:</dt>
      <dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</dd>
      <dd>*. Data kan variere baseret på forskellige systemer eller computere.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">  Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
  <div class="wrapper clearfix">
    <div class="floatlayer-left fl">
      <h4>IMF PRO forhindrer ransomware-angreb fra WannaCry, Petya / GoldenEye!</h4>
      <ul>
        <li data-url="https://www.iobit.com/buy.php?product=dk-imf61pc189&ref=dk_imf61pcpurchase1810<?php echo $refStr;?>&refs=dk_purchase_imf">
          <span class="name"><i></i>1 år, 1 pc</span>
          <span><strong>kr. 189</strong>&nbsp;&nbsp;<del>kr. 379</del></span>
        </li>
        <li class="active" data-url="https://www.iobit.com/buy.php?product=dk-imf63pc199&ref=dk_imf63pcpurchase1810<?php echo $refStr;?>&refs=dk_purchase_imf">
          <span class="name"><i></i>1 år, 3 pc'er</span>
          <span><strong>kr. 199</strong>&nbsp;&nbsp;<del>kr. 599</del></span>
        </li>
      </ul>​
    </div>
    <div class="floatlayer-right fl">
      <em class="">Spar kr. 400</em>
      <a class="buy-btn"
         href="https://www.iobit.com/buy.php?product=dk-imf63pc199&ref=dk_imf63pcpurchase1810<?php echo $refStr;?>&refs=dk_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase201805-dk')">Køb nu</a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<!-- backtotop start -->
<div class="backtotop">
  <div class="wrapper">
    <div class="box">Tilbage til toppen <span><i class="all-icons"></i></span></div>
  </div>
</div>
<!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>