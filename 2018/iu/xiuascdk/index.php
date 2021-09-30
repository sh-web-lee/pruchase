<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='dkiuasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=3;
    }
  }else{
    $packsNum=69;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Eksklusive 78% rabat på Advanced SystemCare 12 PRO & IObit Uninstaller 8 PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/dk/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>SPECIAL TILBUD</h1>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> kigger på dette lige nu <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pladser tilbage!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Skynd dig! <b>02</b>D:<b>05</b>H:<b>00</b>M:<b class="last">000</b>S tilbage</p>
            </div>
            <p><strong><small>kr. </small>189</strong> <span><del>kr. 848</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=dk-asc12iu83pc189&ref=dk_asc12iu83pc189purchase1811a<?php echo $refStr;?>&aff=&refs=dk_purchase_iu"
               onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201811a-dk');">
              Aktiver nu
            </a>
            <p class="year">1 års abonnement/3 PC’er</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>IObit’s dobbeltgaranti: Hurtigere og Sikrere PC</h2>
      <p class="over">
        Kør IObitUninstaller 8 PRO sammen med den verdensførende Advanced SystemCare 12 PRO og gør din gamle PC så god som ny og slip af med alle spor fra stædige programmer
      </p>
      <!-- computer -->
      <img class="computer" src="<?php echo $pResUrl;?>images/computer.png" alt="">
      <span class="circle circle-out"></span>
      <span class="circle circle-mid"></span>
      <span class="circle circle-int"></span>
      <!--  -->
      <dl class="schonere clearfix">
        <dd class="fl">
          <h3>Renere PC</h3>
          <p>
            Rens for junk-filer og frigør plads ved rensning af registreringsdatabasen
            <span>*Kun med Advanced SystemCare PRO</span>
            Slip af med stædige eller bundled programmer og spar plads
            <span>*Kun medIObitUninstaller PRO</span>
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      </dl>
      <!--  -->
      <dl class="sneller clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Hurtigere browsing</h3>
          <p>
            Optimer browserindstillingerne for hurtigere internet med op til 300%
            <span>*Kun med Advanced SystemCare PRO</span>
           Slip af med annonce-baseret plug-ins som gør din browser langsom
            <span>*Kun med IObitUninstaller PRO</span>
          </p>
        </dd>
      </dl>
      <!--  -->
      <dl class="veiligere">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>Sikrere PC</h3>
          <p>
            Hold dine personlige data og online spor private fra upålidelige programmer & malware
            <span>*Kun med Advanced SystemCare PRO</span>
            Slip af med ondsindet bundleware og plug-ins
            <span>*Kun med IObitUninstaller PRO</span>
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <div class="arrow"><i></i></div>
      <h2>Plus, du kan også nyde følgende fantastiske funktioner</h2>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-01.png" alt=""></dt>
        <dd>
          200% hurtigere opstart
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-02.png" alt=""></dt>
        <dd>
         Beskyttelse af digitale fingeraftryk
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-03.png" alt=""></dt>
        <dd>
         Automatisk rensning af RAM
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-04.png" alt=""></dt>
        <dd>
          1-klik for at opdatere al software
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Så tøv ikke! Få disse to kraftfulde PC-optimeringsværktøjer nu</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> kigger på det lige nu, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pladser tilbage!
          </p>
        </div>
        <p><strong><small>kr.</small>189</strong> <span><del>kr. 848</del></span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-asc12iu83pc189&ref=dk_asc12iu83pc189purchase1811b<?php echo $refStr;?>&aff=&refs=dk_purchase_iu"
           onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201811b-dk');">
          Aktiver nu
        </a>
        <p class="year">1 års abonnement/3 PC’er</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- award start -->
  <div class="award wrapper">
    <h2>Disse medier viser os stor tillid til og har tildelt os priser</h2>
    <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
  </div>
  <!-- award end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <div class="content ">
        <!-- 01 -->
        <dl class="active">
          <dt>
            <h3>Brugeranmeldelser</h3>
          </dt>
          <dd>
           "Som de fleste er jeg ikke computerekspert. Jeg ved ikke, hvor mange programmer jeg har prøvet i årenes løb, de påstår allesammen at være det bedste, men de kan ikke måle sig med den Advanced SystemCare Pro beskyttelse, jeg har nu. Siden jeg fik dette fantastiske program, har jeg ikke behøvet at tilkalde tekniker en eneste gang. Det har mere end overgået mine forventninger, altid opdateret og grafikken er også rigtig cool! Mange tak til jer alle for at gøre mit liv meget lettere."
          </dd>
        </dl>
        <!-- 02 -->
        <dl>
          <dt>
            <h3>Brugeranmeldelser</h3></dt>
          <dd>
            "Som computertekniker oplever jeg, at de mest almindelige problemer bliver løst ved at downloade og scanne med ASC-fri. Når jeg er færdig med en reparation, foreslår jeg normalt, at kunden køber pro-pakken. Hvem har brug for en tekniker, når du har styrken i Advanced SystemCare Pro, som arbejder for dit system 24-7? Dette er det bedste produkt, som en hjemmebruger kan købe. Tak for at gøre mit job lettere."
          </dd>
        </dl>
        <!-- 03 -->
        <dl>
          <dt>
            <h3>Medieanmeldelser</h3></dt>
          <dd>
           "Der er ikke noget værre end en computer, der driller så meget, at det forhindrer dig i at arbejde eller spille. Avanceret SystemCare har til formål at afhjælpe hvad som helst, der måtte være galt med din computer ikke kun ved at rydde op, fjerneuønskede filer, malware ogugyldigeregistreringsposter, men ogsåved at give din computer et løft for at optimere din pc-oplevelse."
          </dd>
        </dl>
        <!-- 04 -->
        <dl>
          <dt>
            <h3>Medieanmeldelser</h3></dt>
          <dd>
            "Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc. Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde."
          </dd>
        </dl>
        <!-- 05 -->
        <dl>
          <dt>
            <h3>Brugeranmeldelser</h3></dt>
          <dd>
            "Uninstaller PRO er kun et af de fem IObit-vedligeholdelsesprogrammer, jeg har investeret i til min pc, ligesom kokke investerer i deres knive. Uninstaller er fantastisk til at finde rester af bits og bytes, der gemmer sig her og der og tager plads op på harddisken og påvirker registreringsdatabasen. Da jeg brugte programmernes egne afinstallationsfiler til at afinstallere, så det ud til at fungere, men da dukkede Uninstaller PRO op og viste at yderligere 35 filer kunne fjernes, da behøvede jeg bare at klikke på OK. Det kan stærkt anbefales og jeg købte en licens til 3 pc'er. Supportservice er høflig og fremragende."
          </dd>
        </dl>
        <!-- 06 -->
        <dl>
          <dt>
            <h3>Brugeranmeldelser</h3></dt>
          <dd>
            "IObit Uninstaller bliver bedre ved hver opdatering. Jeg har brugt det i mere end 3 år nu. Det er hurtigt at indlæse og har en simpel brugergrænseflade. Nogle af de mange funktioner, jeg regelmæssigt bruger, er batch-afinstallation, grundig scanning, filmakulering og den nye funktion, som giver mig hurtig adgang til et program jeg lige har installeret, som jeg ikke kan lide eller som ikke virker korrekt."
          </dd>
        </dl>
      </div>
      <ul class="users clearfix lato">
        <!-- hank-ewert -->
        <li class="current">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/hank-ewert.png" alt="Hank Ewert"></div>
            <p>Hank Ewert</p>
          </a>
        </li>
        <!-- 02 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"></div>
          <p>Charles R. Widick</p>
        </li>
        <!-- 03 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"></div>
          <p>Cnet</p>
        </li>
        <!-- 04 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt="MakeUseOf">
          </div>
          <p>MakeUseOf</p>
        </li>
        <!-- 05 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/joseph-yu.png" alt="Joseph Yu"></div>
          <p>Joseph Yu</p>
        </li>
        <!-- 06 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/Lovro-zuzic.png" alt="Lovro Žužić">
          </div>
          <p>Lovro Žužić</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <div class="box fl">
        <img src="<?php echo getStaticUrl('images/asc-bottom-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count fl">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> kigger på det lige nu, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pladser tilbage!
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Skynd dig! <b>02</b>D:<b>05</b>H:<b>00</b>M:<b class="last">000</b>S tilbage</p>
      </div>
      <div class="price fr">
        <p><strong><small>kr.</small>189</strong> <span><del>kr. 848</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-asc12iu83pc189&ref=dk_asc12iu83pc189purchase1811c<?php echo $refStr;?>&aff=&refs=dk_purchase_iu"
           onclick="ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201811c-dk');  ">
          Aktiver nu
        </a>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="service clearfix">
      <dl class="moneyback clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
        <dd>
          <h3>
            Prøv det RISIKOFRIT – med vores 60 dages Penge-tilbage Garanti
          </h3>
          <p>
            Vi er sikre på, at du vil få en hurtigere og mere sikker PC med PRO-udgaven til rimelige priser!
          </p>
        </dd>
      </dl>
      <dl class="payments">
        <dd><h3>Vi accepterer</h3></dd>
        <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
      </dl>
    </div>
    <p class="notes">
      Bemærk:<br>
      *. Tilbud som dette kan fra tid til anden ændres uden varsel ændres efter vores skøn.<br>
      *. Data kan ændres baseret på forskellige systemer eller computere.
    </p>
    <p class="copyright">Copyright © 2005 - 2018 IObit. Alle rettigheder forbeholdes</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=dk-asc12iu83pc179&ref=dk_asc12iu83pc189purchase1811popup<?php echo $refStr;?>&aff=&refs=dk_purchase_iu";
  var _ga = "ga('send', 'event', 'asciubuy', 'buy', ' iupurchase-asc201811popup-dk');";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>