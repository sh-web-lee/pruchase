<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$reduceNum=517656825;
$reTime=3;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);

?>
<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Spar op til 80% på IObit Malware Fighter PRO og få en gratis gavepakke med i købet – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script>
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 10000);
        }
      });
    }
    setTimeout('getBuyNum()', 10000);
  </script>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="clearfix">
        <a class="logo fl" href="https://www.iobit.com/dk/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <div class="title fr">
          <h1>IObits 14 Jubilaum</h1>
          <h4><span>80% rabat </span> på jubilæiumspakke! Så længe lager haves!</h4>
        </div>
      </div>
      <div class="clearfix">
        <div class="offer">
          <h2 class="all-icons">Standardpakke</h2>
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/>
          <div class="price">
            <img src="<?php echo getStaticUrl('images/iu-price.png')?>" alt=""/>
            <p>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=dk-imf71pc189&ref=dk_imf71pcpurchase1904&refs=dk_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcbuy1904-dk')">
                Køb nu  
              </a>
            </p>
          </div>
        </div>
        <div class="offer red">
          <h2 class="all-icons">Standardpaket </h2>
          <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt=""/>
          <div class="price">
            <img src="<?php echo getStaticUrl('images/iu-gift-price.png')?>" alt=""/>
            <p>
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=dk-imf73pcpf199&ref=dk_imf73pcpfpurchase1904&refs=dk_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcbuy1904-dk')">
                Køb nu
              </a>
            </p>
            <p><span class="buyNum"><?php echo $buyNum;?></span> personer har købt denne pakke</p>
          </div>
        </div>
      </div>
      <p class="gray">
        Tilfredshedsgaranti på 60 dage eller pengene retur.
      </p>
    </div>
  </div>
  <!-- banner end -->

    <!-- intro start -->
    <div class="intro wrapper">
      <h2> Hvorfor vælge IObit Malware Fighter PRO?</h2>
      <p><i></i> Beskyttet af Anti-Ransomare-mekanisme</p>
      <p class="list02"><i></i> Beskyttet af Bitdefender anti-virus-mekanisme</p>
      <p class="list03"><i></i> Beskyttet af IObits ''Dual-Core''-mekanisme</p>
      <img src="<?php echo getStaticUrl('images/intro-box.jpg')?>" alt="" class="img-box">
      <div class="more">
        <a href="javascript: void(0);">
          Forskelle mellem den gratis version og Pro-versionen >>
        </a>
      </div>
    </div>
    <!-- intro end -->

    <!-- awards start -->
    <div class="awards ">
      <h2>Editors’ valg</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
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
  <div class="comparison">
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Se hvad PRO-udgaven kan gøre for dig:</th>
            <td class="space"></td>
            <th class="itema"><span>IObit Malware Fighter <br> FREE</span></th>
            <td class="space"></td>
            <th class="itemb"><span>IObit Malware Fighter <br> PRO</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Anti-malware med den seneste IObit malware database </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Opdager trusler, som gemmer sig i din pc hurtigt  </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Skanner downloadede filer og fjerner annoncer for at forbedre beskyttelsen</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Fuld anti-malware-funktion med unik "dual-core-engine"</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Opdager 203,000,000+ trusler med Bitdefender og IObit</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Stopper ransomware fra at forsøge at kryptere dine vigtige filer</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Beskyt dit kamera mod uautoriseret adgang</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">Ingen kan få adgang til dine personlige data uden kodeord</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue">Forebygger virusinfektion overført via usb-enheder</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Opdager skadelige processer, der kører i RAM</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
            <td class="virtue">Auto-rensning af private spor med browser-anti-sporing</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt="" /></td>
            <td class="virtue">Registrerer trusler ved at analysere skadelige handlinger  </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt="" /></td>
            <td class="virtue">Arbejder intelligent i baggrunden uden at forstyrre dig</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt="" /></td>
            <td class="virtue">Automatisk opdatering til den nyeste version</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt="" /></td>
            <td class="virtue">Gratis 24/7 teknisk support ved behov</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons gray">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
      <h2>For IObit's 14. Fødselsdag får du  <span class="all-icons">80% rabat </span>  på IObit Malware Fighter Pro!</h2>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <img class="fl left" src="<?php echo getStaticUrl('images/iu-foot-box.png')?>" alt=""/>
      <div class="price fr">
        <img src="<?php echo getStaticUrl('images/iu-foot-price.png')?>" alt=""/>
        <p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-imf73pcpf199&ref=dk_imf73pcpfpurchase1904&refs=dk_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcbuy1904-dk')">
            Køb nu
          </a>
        </p>
        <p><span class="buyNum"><?php echo $buyNum;?></span> personer har købt denne pakke</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Bemærk:</dt>
    <dd>
      *. Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.
    </dd>
    <dd>*. Data kan variere baseret på forskellige systemer eller computere.</dd>
    <dd>*. Protected Folder support 1 års abonnement / 1 pc.</dd>

  </dl>

  <!-- copyright -->
  <div class="copyright">    
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit.  All Rights Reserved </p>
  </div>

  <!-- backtotop start -->
  <div class="backtotop all-icons">TOP</div>
  <!-- backtotop end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>