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
  $cName='svimfpre'.$date;
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

$viewNum=rand(46,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>85% RABATT! Aktivera IMF PRO för att skydda din PC och online-upplevelse! </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>STORT JUL ERBJUDANDE</h1>
        <p class="best">Bästa chansen att spara stort – bara en gång per år!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
          </div>
          <div class="right fr">
            <h2>Fullständig internetsäkerhet för dig och dina närstående.</h2>
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
              <p><strong>279<big>kr</big></strong> <del>1 856kr</del></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf63pcpfsd279&ref=sv_imf63pcpfsd279purchase1811r<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811r-sv')">
                Aktivera Nu
              </a>
              <p class="year">1 års prenumeration / 3 datorer</p>
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
        <h2>Få full internet-säkerhet för att skydda dig från skadlig hackning </h2>
        <p class="over">
          Över 5.500.000 användare väljer IObit Malware Fighter Pro som sitt online-säkerhetsprogram för att skydda sig mot virus, ransomware, spionprogram, trojaner, reklamprogram, fishing och annan frustrerande skadlig kod. 
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/imf-screen.png')?>" alt="IObit Malware Fighter PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Omfattande realtidsskydd <b class="sign">förbättrad</b></h3>
                <p>
                  Dubbelskydd med Advanced Bitdefender Anti-Virus Engine och IObit Anti-Malware Engine med större databas.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Boot-time Disk Guard <b>Ny</b></h3>
                <p>
                  Skydda dator mot skadliga attacker, särskilt ransomware-attacker under uppstartsprocessen.
                </p>
              </dd>
            </dl> 
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Ingen Ransomware Attack <b class="sign">förbättrad</b></h3>
                <p>
                  Anti-ransomware Motor förhindrar proaktivt alla Ransomware som försöker bryta sig in i din dator, t.ex. Petya / GoldenEye.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Realtidsskydd <b class="sign">förbättrad</b></h3>
                <p>
                  Blockera automatiskt och ta bort över 200 miljoner hot i realtid och rensa skadliga spårningsdata.
                </p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->
    <!-- donation start -->
    <div class="donation clearfix">
      <h2>Exklusiva gåvor ENDAST under denna jul 2018</h2>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
        <dd>
          <h3>Smart Defrag 6 PRO <b>Gratis</b></h3>
          <p>Högre defragmenteringshastighet <br>Auto-defragmentera valda filer</p>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h3>Protected Folder <b>Gratis</b></h3>
          <p>Skydda dina filer från skadliga attacker <br>Skydda ditt privatliv från intrång</p>
        </dd>
      </dl>
    </div>
    <!-- donation end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Ta reda på mer om Pro för fullständigt, smartare och snabbare online skydd</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> platser kvar nu! 
            </p>
          </div>
          <p><strong>279<big>kr</big></strong> <del>1 856kr</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf63pcpfsd279&ref=sv_imf63pcpfsd279purchase1811r<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811r-sv')">
            Aktivera Nu
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Se Klart Vad Du Kommer att Få från Pro, om Du Aktiverar Nu:</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">IObit Malware Fighter <br>Free</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>IObit Malware Fighter <b>Pro</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">Grundläggande</td>
              <td class="itemb">Malware & Virus skydd</td>
              <td class="itemc">Bitdefender Anti-Virus Engine</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Anti-ransomware skydd</td>
              <td class="itemc">Anti-ransomware Engine</td>
            </tr>
            <tr>
              <td class="itema">Grundläggande</td>
              <td class="itemb">Realtidsskydd</td>
              <td class="itemc">Omfattande</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Boot-time Disk skydd</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Skydda din kamera</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Viktigt mappskydd</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Auto rensa surfspår</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">USB Disk Guard</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">RAM Guard</td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">Auto Uppdatering</td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>MISSA INTE!</h3>
        <h2>Få exklusiv 85% rabatt för att ta hand om dig och dina året runt.</h2>
        <div class="price">
          <p><strong>279<big>kr</big></strong> <del>1 856kr</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf63pcpfsd279&ref=sv_imf63pcpfsd279purchase1811r<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811r-sv')">
            Aktivera Nu
          </a>
          <p id="footdown" class="countdown">Skynda! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms återstår</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/betanews.png')?>" alt="betanews"></dt>
            <dd>
              <h2>I media</h2>
              <p>"IObit Malware Fighter PRO är ett komplett säkerhetspaket. Det rensar bort spionprogram, trojaner och allehanda otrevligheter. Det finns också ett Uppstartsskydd som säkerställer att inga skadliga processer startas med Windows. Webbläsarskyddet garanterar att ingen programvara gör ändringar i din webbläsare och Filgranskaren garanterar att varje okänd fil du öppnar inte kan orsaka någon skada. Inkluderat är också vaktenheter för USB och processor med mera."</p>
              <cite>betanews</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>"Vi brukade använda upp till ett dussin olika program för att hålla våra maskiner i trim och hålla skurkarna borta. Det tog timmar varje vecka för att upprätthålla säkerhet och prestanda. Nu, med IObit Malware Fighter PRO och Advanced System Care PRO, är allt på ett ställe och det tar oss bara några minuter varje vecka för att göra samma jobb, men med mer förtroende. Vi har inte haft ett enda problem sedan vi började använda era produkter."</p>
              <cite>Bob Bassett</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>"För några år sedan drogs min uppmärksamhet till IObit Malware Fighter. Först var jag skeptisk. Men efter att ha installerat det blev det snabbt min favorit bland anti-malware program. Det är mycket lätt att använda. Genom åren har det upptäckt många hot och avlägsnat dem. I samarbete med andra program från IObit, som till exempel ASC, har jag nu ett ypperligt skydd för min dator. Jag rekommenderar alla dessa program till mina vänner och familj."</p>
              <cite>Peter Stoffers</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->


    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Världsomspännande Utmärkelser</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Prova det RISKFRITT - med vår 60 dagars Pengar Tillbaka Garanti</h4>
              <p>Vi är självsäkra att du ska få en renare dator och säkrare webbläsning till överkomligt pris om du aktiverar PRO utgåvan!</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Accepterade Betalningssätt</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Notera:</dt>
            <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
            <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
        </div>
        <!-- footer end -->
      </div>
    </div>
    <!-- backtotop start -->
    <div id="backtotop" class="backtotop">top</div>
    <!-- backtotop end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/imf-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=sv-imf63pcpfsd269&ref=sv_imf63pcpfsd269purchase1811rpop<?php echo $refStr;?>&refs=sv_purchase_imf&tw=-8";
    var _ga = "ga('send', 'event', 'imfbuy', 'buy', 'imf6purchase1811rpop-sv')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>