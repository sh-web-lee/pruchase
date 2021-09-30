<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=300041325;
  $reTime=5;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$aff=$_GET['aff'];
$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
    'bdprog','iuasc'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Eksklusive 80% rabat på IObit Uninstaller 8 PRO & og få en product gratis</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700,900'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 5000);
        }
      });
    }
    setTimeout('getBuyNum()', 5000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div id="top" class="banner section" data-num = '0'>
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h1> godt nytår! SPECIAL TILBUD</h1>
      <p>Ikke alene kan du spare 80% på IObit Uninstaller Pro, <span>du kan også få den fulde version af mappebeskyttelsesprogrammet "Protected Folder" helt gratis.</span></p>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" />
        <div class="price fr">
          <div class="top">
            <h2>2 for 1</h2>
            <h3>IObit Uninstaller PRO</h3>
          </div>
          <p><strong>kr. 159 </strong> Normalpris: <del>kr. 798</del></p>
          <h5>1 år, 3 pc'er</h5>
          <h4>Protected Folder</h4>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-iu83pcpf159&ref=dk_iu8pfpurchase1901<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=dk_purchase_iu"
               onclick="ga ('send', 'event', 'iubuy', 'buy', iupurchase1901-dk')">
            KØB NU 
          </a>
          <p><b><i class="all-icons"></i>Skynd dig, kun 67 tilbage i dag!</p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- payments start -->
  <div class="payments wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- payments end -->

  <!-- intro start -->
  <div id="highlights" class="intro wrapper section" data-num = '1'>
    <h2>Afinstaller kraftigt flere programmer og plug-ins for en sikrere pc og sikrere online-browsing </h2>
    <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
    <div class="feature clearfix">
      <div class="list clearfix">
        <img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt="" />
        <dl>
          <dt><b>Effektivitet</b><span>forbedret</span></dt>
          <dd>Uønskede programmer, der normalt ikke kan fjernes, kan hurtigt afinstalleres.</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt="" />
        <dl>
          <dt><b>Simpelt </b><span class="neu">ny</span></dt>
          <dd>Med et enkelt klik kan du opgradere dine vigtige programmer på pc'en uden besvær med selv at skulle lede efter opdateringerne.</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt="" />
        <dl>
          <dt><b>Automatik  </b><span>forbedret</span></dt>
          <dd>Takket være den forbedrede dybde-skanning bliver alle programrester automatisk fundet og fjernet.</dd>
        </dl>
      </div>
      <div class="list">
        <img src="<?php echo getStaticUrl('images/feature_04.png')?>" alt="" />
        <dl>
          <dt><b>Intelligent </b><span class="neu">ny</span></dt>
          <dd>Uønskede programmer, der kommer sammen med andre programmer samt adware og plugins kan fanges under installationen og blive slettet.</dd>
        </dl>
      </div>
    </div>
    <a class="compareBtn" href="javascript: void(0);">Se mere om pro-versionen >></a>
  </div>
  <!-- intro end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Disse medier viser os stor tillid til og har tildelt os priser </h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->
  <div class="wrapper">
    <div class="review " id="reviews">
      <div class="wrapper">
        <div id="dg-container" class="dg-container">
          <div class="nav">
            <span class="dg-prev"></span>
            <span class="dg-next"></span>
          </div>
          <div class="content dg-wrapper">
            <dl class="reviews">
              <dt><img src="<?php echo $pResUrl; ?>images/pcmag-editchoice.png" alt=""></dt>
              <dd>
                <h2>Medieanmeldelser</h2>
                <p>"Hvis du har brug for et program, der lader dig afinstallere programmer fuldstændigt, grundigt og nemt, skal du starte IObit Uninstaller. Dette værktøj, der nu er kompatibelt med Windows 10, gør det til en leg at fjerne apps, inklusiv de filer, der ofte efterlades, når et program fjernes fra en pc, også de irriterende webbrowser-værktøjslinjer og plug-ins. Kort sagt, hvis du bruger en Windows-pc, skal du downloade IObit Uninstaller."    </p>
                <cite>PC Magazine</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt=""></dt>
              <dd>
                <h2>Medieanmeldelser</h2>
                <p>"Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc.Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde."    </p>
                <cite>MakeUseOf</cite>
              </dd>
            </dl>
            <dl class="reviews">
              <dt><img src="<?php echo $pResUrl; ?>images/joseph-yu.png" alt=""></dt>
              <dd>
                <h2>Brugeranmeldelser</h2>
                <p>"Uninstaller PRO er kun et af de fem IObit-vedligeholdelsesprogrammer, jeg har investeret i til min pc, ligesom kokke investerer i deres knive. Uninstaller er fantastisk til at finde rester af bits og bytes, der gemmer sig her og der og tager plads op på harddisken og påvirker registreringsdatabasen. Da jeg brugte programmernes egne afinstallationsfiler til at afinstallere, så det ud til at fungere, men da dukkede Uninstaller PRO op og viste at yderligere 35 filer kunne fjernes, da behøvede jeg bare at klikke på OK. Det kan stærkt anbefales og jeg købte en licens til 3 pc'er. Supportservice er høflig og fremragende." </p>
                <cite>Joseph Yu</cite>
              </dd>
            </dl> 
          </div>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div id="compare" class="comparison section" data-num = '3'>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Se hvad pro-udgave kan gøre for dig:</th>
            <th class="itemb">IObit Uninstaller 8 <b>FREE</b></th>
            <th class="itema">
              IObit Uninstaller 8 <b>PRO</b>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=dk-iu83pcpf159&ref=dk_iu8pfpurchase1901<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=dk_purchase_iu"
                 onclick="ga ('send', 'event', 'iubuy', 'buy', iupurchase1901-dk')">
                KØB NU
              </a>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
            <td class="virtue">Afinstallere programmer nemt og hurtigt</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
            <td class="virtue">Fjern problematiske Windows opdateringer</td>
            <td class="itemb"><i class="all-icons">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
            <td class="virtue">Hurtig skanning & sletter leftovers automatisk efter standard afinstallering <span>forbedret</span></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
            <td class="virtue">Slet kombinerede programmer og plug-ins  <span class="neu">ny</span></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
            <td class="virtue">Opdag og slet ondsindet plug-ins for en mere sikker browsing <span>forbedret</span></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
            <td class="virtue">Større database til fjernelse af flere uønskede programmer <span>forbedret</span></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
            <td class="virtue">Renser automatisk filrester, som ikke kan slettes af andre hjælpeprogrammer <span>forbedret</span></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
            <td class="virtue">1-klik for at opdatere alt vigtig software <span class="neu">ny</span></td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
            <td class="virtue"> Auto opdater til den seneste Version</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
            <td class="virtue">Gratis 24/7 Teknisk Support on Demand</td>
            <td class="itemb"><i class="all-icons circle">√</i></td>
            <td class="itema"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
        <tfoot>
          <th class="text" colspan="2"></th>
          <th class="itemb"></th>
          <th class="itema">
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=dk-iu83pcpf159&ref=dk_iu8pfpurchase1901<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=dk_purchase_iu"
               onclick="ga ('send', 'event', 'iubuy', 'buy', iupurchase1901-dk')">
              KØB NU 
            </a>
          </th>
        </tfoot>
      </table>
    </div>
    <!-- comparison end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>Bemærk:</dt>
      <dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel ændres efter vores skøn.</dd>
      <dd>*. Data kan ændres baseret på forskellige systemer eller computere.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright   2005 - <?php echo date('Y')?> IObit.  All Rights Reserved</div>
    <!-- footer end -->
  </div>
  <!-- container end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <ul>
      <li class="top"><a href="#top"><i></i><span>Top</span></a></li>
      <li class="highlights"><a href="#highlights"><i></i><span>Højdepunkter</span></a></li>
      <li class="reviews"><a href="#reviews"><i></i><span>Anmeldelser</span></a></li>
      <li class="compare"><a href="#compare"><i></i><span>Sammenligning</span></a></li>
    </ul>
  </div>
  <!-- floatlayer end -->
<script src="<?php echo $pResUrl; ?>script/modernizr.min.js"></script>
<script src="<?php echo $pResUrl; ?>script/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>