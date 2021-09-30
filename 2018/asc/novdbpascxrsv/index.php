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
  $cName='frasc'.$date;
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
    $packsNum=41;
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
if(in_array($_GET['pop'],array('xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Spara upp till 58% på Advanced SystemCare - IObit </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/sv/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>STORT JUL ERBJUDANDE</h1>
      <p class="best">Bästa chansen att spara stort – bara en gång per år!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          <span class="ghost"><span class="reduce"></span></span>
        </div>
        <div class="right fr">
          <h2>Advanced SystemCare 12 Pro</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar, &nbsp;&nbsp; <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> platser kvar nu!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Skynda! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms* återstår</p>
            </div>
            <p class="prz"><strong>249<big>kr</big></strong>   <span><del>599kr</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sv-asc123pc249&ref=sv_asc123pc249purchase1811dbr<?php echo $refStr;?>&refs=sv_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1811dbr-sv')">
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
      <h2>Få fullständig rensning, optimering och skyddsverktyg till överkomligt pris!</h2>
      <p class="over">
        Över 5 500 000 användare runtom i världen väljer Advanced SystemCare Pro som optimeringsverktyg för att få sin gamla dator att köra som en ny och optimera en ny dator att fungera snabbare.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
      <div class="clearfix">
        <dl class="clearfix fl">
          <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
          <dd>
            <h3>Säkrare Integritet<b class="sign">Ny</b></h3>
            <p>Radera sekretesspår för att förhindra spårning och Skydda dina känsliga uppgifter och persondata.</p>
          </dd>
        </dl>
        <dl class="clearfix fr">
          <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
          <dd>
            <h3>200%* Snabbare Dator <b>Förbättrad</b></h3>
            <p>Minska systems lag och skynda dator upp till 200%* snabbare.</p>
          </dd>
        </dl>
        <div class="clearfix"></div>
        <dl class="clearfix fr">
          <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
          <dd>
            <h3>Djupare rensning<b>Förbättrad</b></h3>
            <p>Auto frisläpp RAM för bättre prestanda, och åtgärda registreringsproblem för stabilare system.</p>
          </dd>
        </dl>
        <dl class="clearfix fl">
          <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
          <dd>
            <h3>300%* Faster Internet<b>Förbättrad</b></h3>
            <p>Accelerera nedladdning, surfning, spel och YouTube till 300%* snabbare.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- together start -->
  <div class="together">
    <div class="wrapper">
      <h2>
        Med Driver Booster Pro kommer du kunna njuta av en fantastisk spelupplevelse och högsta <span>PC-prestanda!</span>
      </h2>
      <div class="panel clearfix">
        <div class="asc-box fl clearfix on">
          <div class="box fl">
            <h3>BÄSTA SPELUPPLEVELSE<i></i></h3>
            <dl>
              <dt><strong>Snabbare Spel</strong></dt>
              <dd>
                Rengör automatiskt RAM och stoppar onödiga processer.
                <span>* Endast Advanced SystemCare pro</span>
              </dd>
            </dl>
            <dl>
              <dt><strong>Smidigare och mjukare spel</strong></dt>
              <dd>
                Spelklara drivrutiner och komponenter tillgängliga för att förbättra din spelupplevelse.
                <span>* Endast Driver Booster Pro</span>
              </dd>
            </dl>
          </div>
          <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
        </div>
        <div class="db-box fl clearfix on">
          <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
          <div class="box fl">
            <h3><i></i>TOPPA PC ANVÄNDNING</h3>
            <dl>
              <dt><strong>Renare och snabbare PC</strong></dt>
              <dd>Rensa skräpfiler automatiskt och optimera registreringar för att höja systemhastigheten.
                <span>* Endast Advanced SystemCare pro</span>
              </dd>
            </dl>
            <dl>
              <dt><strong>Mer stabil dator</strong></dt>
              <dd>Saknas / felaktig / föråldrad / sällsynt uppdatering av PC-drivrutiner.
                <span>* Endast Driver Booster Pro</span>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- together end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Aktivera Advanced SystemCare Pro nu - Årets bästa pris!</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar, &nbsp;&nbsp; <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  platser kvar nu!
          </p>
          <div class="progressbar">
            <span></span>
          </div>
          <p id="bandown" class="countdown">Skynda! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms* återstår</p>
        </div>
        <p class="prz"><strong>249<big>kr</big></strong> <span><del>599kr</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-asc123pc249&ref=sv_asc123pc249purchase1811dbr<?php echo $refStr;?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1811dbr-sv')">
          Aktivera Nu
        </a>
        <p class="year">Registrering av 3 PC / 1 år</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Snabbvy med jämförelse mellan Free och Pro</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">Advanced SystemCare 12 <br>FREE</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>Advanced SystemCare 12 <b>PRO</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema"><i class="all-icons free">√</i></td>
          <td class="itemb">Grund rengöring, fixning och optimering på system</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Blockera obehörig åtkomst till dina privata filer</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Förhindra spionprogram och skadlig kod i realtid</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Minska och reparera systems krascher och fel</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Skynda dator upp till 200%* snabbare</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Skynda Internethastigheten upp till 300%* snabbare</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Auto behåll viktiga program uppdaterade</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Auto ta bort sekretesspår för säker surfning</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Auto uppdatering till den senaste versionen</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema last"></td>
          <td class="itemb"></td>
          <td class="itemc last"></td>
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
      <h2>Få exklusiv <b>58% RABATT</b> för att få en snabbare, renare och säkrare dator!</h2>
      <div class="price">
        <p  class="prz"><strong>249<big>kr</big></strong> <span><del>599kr </del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-asc123pc249&ref=sv_asc123pc249purchase1811dbr<?php echo $refStr;?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1811dbr-sv')">
          Aktivera Nu
        </a>
        <p id="footdown" class="countdown">Skynda! <b>05</b>M:<b>000</b>S:<b class="last">00</b>Ms* återstår</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>
      Världsomspännande Utmärkelser
<!--      <span>Med förtroende och pris från dessa världsledande medier de senaste fyra åren är det ett rätt val du har gjort</span>-->
    </h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review">
    <div class="wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt=""/></dt>
            <dd>
              <h2>I media</h2>
              <p>"Det finns inget värre än en dator som kör fast så mycket att det hindrar din förmåga att arbeta eller spela spel. Advanced Systemcares syfte är att råda bot på allt som plågar din dator, inte bara städa upp skräpfiler, malware och ogiltiga registerposter utan också ge din dator ett rejält uppsving för en optimal datorupplevelse."</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt=""/></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>"Jag, precis som många andra, började använda gratisversionen och köpte så småningom den fullständiga versionen. Den har arbetat för att hålla datorn ren och buggfri i ett år och den har ännu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller två med allt jag behövde veta. I mina ögon är support ett enormt beslut i att stanna med en produkt och ASC segrar i både produkt och support."</p>
              <cite>Bruce Ramsay</cite></dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank-Ewert"/></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>"Som de flesta människor är jag ingen expert på datorer. Jag vet inte hur många program jag har testat genom åren. Alla påstår sig vara det bästa men inget kommer i närheten av skyddet jag har nu med Advanced Systemcare Pro. Sedan jag fick detta fantastiska program har jag inte behövt ringa för teknisk support en enda gång. Det har mer än överträffat mina förväntningar, är alltid uppdaterat, och grafiken är väldigt cool också! Stort tack till er alla för att ni gör mitt liv mycket lättare."</p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles-R-Widick"/></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>"Som datorreperatör finner jag att genom att ladda ner och skanna med ASC Free kan man lösa de vanligaste problemen. När jag är klar med en reperation brukar jag råda mina kunder till att köpa PRO-paketet. Vem behöver en tekniker när du har kraften i Advanced SystemCare PRO-systemet som jobbar dygnet runt? Det här är den bästa produkten en hemanvändare kan köpa. Tack för att ni gör mitt jobb lättare."</p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta-Harnarine"/></dt>
            <dd>
              <h2>Användares omdömen</h2>
              <p>"Detta program är det bästa som jag någonsin har provat. Min dator går så mycket bättre och snabbare nu när jag har hämtat ASC. Det har städat upp onödiga och dubbla filer, tomma mappar och jag har använt den för att rensa filer. Det har rengjort och defragmenterat registret och alla filer på datorn. Jag rekommenderar starkt att du köper det här programmet. Det är inte dyrt och vad den kommer att göra för din dator kommer att vara helt fantastiskt. Du kommer att älska det, jag lovar."</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Prova det RISKFRITT - <span>med vår 60 dagars Pengar Tillbaka Garanti</span></h4>
            <p>Vi är självsäkra att du ska få en renare dator och säkrare webbläsning <br> till överkomligt pris om du aktiverar PRO utgåvan!</p>
          </dd>
        </dl>
        <dl class="fr clearfix">
          <dd class="fl">
            <h4>Accepterade Betalningssätt</h4>
            <img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/>
          </dd>
          <dd class="fr">
            <h4>Säker Betalning</h4>
            <img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/>
          </dd>
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
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=sv-asc123pc269&ref=sv_asc123pc269purchase1811dbrpop<?php echo $refStr;?>&refs=sv_purchase_asc";
  var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1811dbrpop-sv')";
  var viewNum = "<?php echo $viewNum;?>";
</script>

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>