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
  $cName='sviu'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
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
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>77% RABATT på IObit Uninstaller PRO & Advanced SystemCare PRO - IObit</title>
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
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>STORT JUL ERBJUDANDE</h1>
      <p class="best">Bästa chansen att spara stort – bara en gång per år!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> platser kvar nu!  
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Skynda! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms återstår</p>
            </div>
            <p><strong>249</strong><span>kr <del>1 098kr</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sv-asciu3pc249&ref=sv_iu8asc123pc249purchase1811r<?php echo $refStr;?>&refs=sv_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8asc12purchase1811r-sv');">
              Aktivera Nu
            </a>
            <p class="year">Registrering av 3 PC / 1 år</p>
          </div>
        </div>
      </div>
    </div>
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>IObits Dubbelgaranti: Renare, Snabbare och Säkrare Dator</h2>
      <p class="over">
        Tillsammans med världsledande tuneup verktyg - Advanced SystemCare 12 PRO gör IObit Uninstaller 8 PRO din gamla dator känd som ny igen och skrubba bort alla spår av envisa program.
      </p>
      <!-- computer -->
      <img class="computer" src="<?php echo $pResUrl;?>images/computer.png" alt="">
      <span class="circle circle-out"></span>
      <span class="circle circle-mid"></span>
      <span class="circle circle-int"></span>
      <!-- Schonere PC -->
      <dl class="schonere clearfix">
        <dd class="fl">
          <h3>Renare Dator</h3>
          <p>
            Rena skräpfiler, registren djupt för att frigöra utrymme 
            <span>*Bara Advanced SystemCare PRO </span>
           Ta bort envisa program eller bundleware för att spara utrymme
            <span>*Bara IObit Uninstaller PRO</span>
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      </dl>
      <!-- Sneller Browsen -->
      <dl class="sneller clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Renare Webbläsning</h3>
          <p>
            Optimera webbläsarinställning och skynda internet till 300% snabbare
            <span>*Bara Advanced SystemCare PRO</span>
            Ta bort annonsbaserade plugins som saktar webbläsare
            <span>*Bara IObit Uninstaller PRO</span>
          </p>
        </dd>
      </dl>
      <!-- Veiligere PC -->
      <dl class="veiligere">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>Säkrare Dator</h3>
          <p>
            Håll personuppgifter och onlinespår säkert från otillförlitliga och skadliga program
            <span>*Bara Advanced SystemCare PRO </span>
            Bli av med skadliga bundleware och plugins
            <span>*Bara IObit Uninstaller PRO</span>
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
      <h2>Du Kan Också Njuta Av Följande Fantastiska Funktioner:</h2>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-01.png" alt=""></dt>
        <dd>
          200% Snabbare Uppstart
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-02.png" alt=""></dt>
        <dd>
          Digitalt Fingeravtrycksskydd
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-03.png" alt=""></dt>
        <dd>
          Auto RAM Rengöring
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-04.png" alt=""></dt>
        <dd>
          Uppdatera Alla Program i 1 Klick
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Tveka inte! Få Dessa Två Kraftfulla Optimeringsverktyg för Dato</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar,  <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  platser kvar nu!  
          </p>
        </div>
        <p><strong>249</strong><span>kr <del>1 098kr</del></span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-asciu3pc249&ref=sv_iu8asc123pc249purchase1811r<?php echo $refStr;?>&refs=sv_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8asc12purchase1811r-sv');">
          Aktivera Nu
        </a>
        <p class="year">Registrering av 3 PC / 1 år</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- award start -->
  <div class="award wrapper">
    <h2>Världsomspännande Utmärkelser</h2>
    <p>Med förtroende och pris från dessa världsledande medier de senaste fyra åren är det ett rätt val du har gjort.</p>
    <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
  </div>
  <!-- award end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
          <dd>
            <h2>I media</h2>
            <p>"IObit Uninstaller är ett litet program med användarvänligt gränssnitt. Användare kan ladda ner det på ett ögonblick. IObit Uninstaller tillåter användaren att avinstallera flera program samtidigt vilket gör den till ett unikt verktyg. Användare erbjuds även att genomföra en djup-skanning för att hitta rester. Denna avinstallerare håller vad den lovar: En grundlig avinstallation. Prestandan är såpass bra att det är värt att behålla verktyget enbart för den saken."</p>
            <cite>MakeUseOf</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"IObit Uninstaller blir bättre med varje uppdatering. Jag har använt den i mer än 3 år nu. Det går snabbt att ladda ner och har enkel UI. Några av de många funktioner som jag använder regelbundet är Batch Uninstall, Powerful Scan, File Shredder och Recently Installed som ger mig snabb åtkomst till ett program som jag just installerat som jag inte gillar eller inte funkar. Det är också lätt att styra startobjekt så att din dator bootar snabbare."</p>
            <cite>Lovro Žužić</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"IObit Uninstaller är ett av de bästa programmen. Lätt att arbeta med, mycket snabb rengöring och djuprengöring. Funktioner samarbetar bra med Windows 10. Den snabba rengöringen av plug-ins är också mycket bekväm. Stor sökning efter dubbletter som inte används mycket. Tack för er gästfrihet ni visat mig och min dator."</p>
            <cite>Áda Görtler</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"IObit Uninstaller är förmodligen den bästa mjukvaran för att ta bort onödiga program från datorn. Till skillnad från den grundläggande Windows avinstalleraren tar detta program bort alla rester, som senare kan bromsa datorns prestanda. Jag har använt detta program under flera år och det har alltid hjälpt till att hålla min dator ren och snabb. Jag rekommenderade detta program till några av mina vänner i det förflutna och skulle rekommendera det igen i dag."</p>
            <cite>Sergey Erlich</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></dt>
          <dd>
            <h2>Användares omdömen</h2>
            <p>"Uninstaller PRO är bara ett av fem av familjen IObits "underhållsprogram" jag har investerat i för min dator, ungefär som kockar investerar i sina knivar. Uninstaller är bra på att hitta rester av bit och byte som gömmer sig och tar upp diskutrymme och påverkar registret. Vid ett tidigare tillfälle gjorde jag en avinstallation av ett annat program med hjälp av den inbyggda avinstallationsfunktionen och det fungerade. Men Uninstaller PRO upptäckte att 35 filer hade lämnats kvar. Det enda jag behövde göra var att klicka på godkänn så var de borta. Jag rekommenderar starkt det här programmet och har köpt en licens för tre datorer. Supporten är artig och utmärkt."</p>
            <cite>Joseph Yu</cite>
          </dd>
        </dl>
      </div>
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
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  platser kvar nu!  
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Skynda! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms återstår</p>
      </div>
      <div class="price fr">
        <p><strong>249</strong><span>kr  <del>1 098kr</del></span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-asciu3pc249&ref=sv_iu8asc123pc249purchase1811r<?php echo $refStr;?>&refs=sv_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8asc12purchase1811r-sv');">
          Aktivera Nu
        </a>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->
  <div class="service  ">
    <div class="wrapper">
      <dl class="moneyback">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <strong>Prova det RISKFRITT - med vår 60-dagars pengarna tillbaka garanti</strong>
         Vi är övertygade om att aktivering av PRO-utgåvan <span>ger dig en renare dator och <br> säkrare surf</span> till ett överkomligt pris!
        </dd>
      </dl>
      <ul>
        <li class="first">
          Accepterade Betalningssätt
          <span><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""></span>
        </li>
         <li>
          Säker Betalning
          <span><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></span>
        </li>
      </ul>
      </div>
    </div>
  <!-- footer start -->
  <div class="footer wrapper">

    <p class="notes">
     Notera:<br>
     *.Uppgifter kan variera beroende på olika system eller datorer.<br>
      *.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.
    </p>
    <p class="copyright">Copyright © 2005 - 2018 IObit. Alla Rättigheter Förbehållna</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=sv-asciu3pc239&ref=sv_iu8asc123pc239purchase1811rpop<?php echo $refStr;?>&refs=sv_purchase_iu";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', ''iu8asc12purchase1811rpop-sv')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>