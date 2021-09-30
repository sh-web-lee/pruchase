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
  $cName='svasc'.$date;
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
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_ascdb','xr_ascdb','xr_dbasc','x_dbasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Advanced SystemCare PRO och Driver Booster PRO - IObit</title>
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
      <a class="logo" href="https://www.iobit.com/sv/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>STORT JUL ERBJUDANDE</h1>
      <p class="best">Bästa chansen att spara stort – bara en gång per år!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 Pro"/>
        </div>
        <div class="right fr">
          <h2>Driver Booster 8 PRO och Advanced SystemCare 13 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> tittar,&nbsp;&nbsp;<em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> platser kvar nu!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Skynda! <b>00</b>H:<b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms återstår</p>
            </div>
            <p><strong>349<big>kr</big></strong> <span><del>1 498kr</del> </span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=sv-asc14db83pc349&ref=sv_ascdb3pc349purchase2011<?php echo $refStr;?>&refs=sv_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14db8purchase2011-sv')">
              Aktivera nu
            </a>
            <p class="year"> Registrering av 3 PC / 1 år</p>
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
      <h2>IObits dubbelgaranti: Mjukare PC och förbättrat spelande </h2>
      <p class="over">Driver Booster 8 PRO körs tillsammans med världsledande förbättringsverktyg - Advanced SystemCare 14 PRO, gör så att datorn körs smidigt och spelprestandan optimeras.</p>
    </div>
  </div>
  <!-- feature end -->

  <!-- together start -->
  <div class="together">
    <div class="wrapper">
      <div class="panel clearfix">
        <div class="asc-box fl clearfix on">
          <div class="box fl">
            <h3>Advanced SystemCare 14 PRO<i></i></h3>
            <dl>
              <dt><strong>Mycket stabilt system </strong></dt>
              <dd>som inte längre saktas ned av värdelösa filer på disken.</dd>
            </dl>
            <dl>
              <dt><strong>Snabbare spelprestanda </strong></dt>
              <dd>eftersom onödiga processer avslutas automatiskt för att frisläppa RAM</dd>
            </dl>
            <dl>
              <dt><strong>Snabbare datorreaktion </strong></dt>
              <dd>genom 300% snabbare internetanslutning och 200% snabbare uppstart.</dd>
            </dl>
          </div>
          <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
        </div>
        <div class="db-box fl clearfix on">
          <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
          <div class="box fl">
            <h3><i></i>Driver Booster 8 PRO</h3>
            <dl>
              <dt><strong>Mjukare spelbelastning </strong></dt>
              <dd>utrustad med nödvändiga och uppdaterade spelkomponenter.</dd>
            </dl>
            <dl>
              <dt><strong>Förbättrad PC-prestanda </strong></dt>
              <dd>för 3.000.000 + PC-drivrutiner som kan hållas aktuella
              </dd>
            </dl>
            <dl>
              <dt><strong>Bättre spelupplevelse med </strong></dt>
              <dd>Game Ready Drivers och spelkomponenter som hålls uppdaterade.</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- together end -->

  <!-- features -->
  <div class="features">
    <div class="wrapper">
      <h2>Plus du kan också få följande fantastiska funktioner:</h2>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></span>
          <p>Skyddade personuppgifter</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></span>
          <p>Digitalt fingeravtrycksskydd</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></span>
          <p>Automatisk uppdatering av drivrutin</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></span>
          <p>Reparering av fel på enheter</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- end features -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="centbuyTop"></div>
  
    <h2>Så Missa Inte! Hämta dessa två kraftfulla verktyg för din dator och spel nu</h2>
    <div class="wrapper clearfix">
      <div class="fl">
      <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 14 Pro"/>
        <!-- <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 14 Pro"/> -->
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  tittar,&nbsp;&nbsp;<em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> platser kvar nu!
          </p>
        </div>
        <p><strong>349<big>kr</big></strong> <span><del>1 498k</del> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-asc14db83pc349&ref=sv_ascdb3pc349purchase2011<?php echo $refStr;?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14db8purchase2011-sv')">
          Aktivera nu
        </a>
        <p class="year"> Registrering av 3 PC / 1 år</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->


  <!-- awards start -->
  <div class="awards wrapper">
    <h2>
      Priser och utmärkelser över hela världen
      <span>Du vet att du har rätt PC-optimerare när den vunnit förtroende och prisats i prestigefyllda medier över hela världen</span>
    </h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div class="review-box">
      <div class="reviews clearfix">
        <h2>Användares omdömen</h2>
        <p>"Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter. Det fungerade perfekt. Lätt att använda, informativt och intuitivt. Det här kommer att stanna i min verktygslåda för alltid... Bra jobbat!"</p>
      </div>
      <div class="reviews clearfix">
        <h2>Användares omdömen</h2>
        <p>"Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa ljudfel, nätverksfel, enhetsfel osv... Jag trodde inte det innan jag använde programmet, men efter att ha testat älskar jag verkligen det.. Min dator är snabbare, säkrare och känns nyare nu än under de senaste 8 månaderna... Så tack IObit."</p>
      </div>
      <div class="reviews clearfix active">
        <h2>I media</h2>
        <p>"IObit tillverkar många olika verktyg, och Driver Booster PRO, som automatiskt uppdaterar dina drivrutiner är ett av dem bästa. Driver Booster PRO är enkelt och funktionellt. Programmet blir ännu mer attraktivt tack vare att det innehåller flertalet licenser till väldigt budgetvänliga priser och tack vare att användargränssnittet både går att anpassa och ger en bra överblick över information om hårdvaror. Konkurrerande Ashampoo Driver Updater och SlimWare Utilities DriverUpdate erbjuder också intressanta funktioner, men det är IObit Driver Booster PRO som tar täten."</p>
      </div>
      <div class="reviews clearfix">
        <h2>I media</h2>
        <p>"Det finns inget värre än en dator som kör fast så mycket att det hindrar din förmåga att arbeta eller spela spel. Advanced Systemcare syftar till att råda bot på allt som plågar din dator, inte bara städa upp skräpfiler, malware och ogiltiga registerposter utan också ge din dator ett rejält uppsving för en optimal datorupplevelse."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Användares omdömen</h2>
        <p>"Detta program är det bästa som jag någonsin har provat. Min dator går så mycket bättre och snabbare nu när jag har hämtat ASC. Det har städat upp onödiga och dubbla filer, tomma mappar och jag har använt den för att rensa filer. Det har rengjort och defragmenterat registret och alla filer på datorn. Jag rekommenderar starkt att du köper det här programmet. Det är inte dyrt och vad den kommer att göra för din dator kommer att vara helt fantastiskt. Du kommer att älska det, jag lovar."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Användares omdömen</h2>
        <p>"Jag, precis som många andra, började använda gratisversionen och köpte så småningom den fullständiga versionen. Den har arbetat för att hålla datorn ren och buggfri i ett år och den har ännu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller två med allt jag behövde veta. I mina ögon är support ett enormt beslut i att stanna med en produkt och ASC segrar i både produkt och support."</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Wayne-Bowler.png" alt="Wayne Bowler"><span></span></div>
        <strong>Wayne Bowler</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Myo-Thuya.png" alt="Myo Thuya"><span></span></div>
        <strong>Myo Thuya</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/PCMAG-editchoice.png" alt="PC Magazine"><span></span></div>
        <strong>PC Magazine</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Loretta-Harnarine.png" alt="Loretta Harnarine"><span></span></div>
        <strong>Loretta Harnarine</strong>
      </li>
      <li class="last">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
        <strong>Bruce Ramsay</strong>
      </li>
    </ul>
  </div>
  <!-- end review  -->

  <!-- bottomcart -->
  <div class="btmcart">
    <div class="wrapper">
      <div class="leftpart">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 Pro"/>
      </div>
      <div class="count">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  tittar,&nbsp;&nbsp;<em class="packimg">
            <b id="packbox" class="reduceGift packbox">
              <b class="list">
                <strong>0</strong>
                <strong>1</strong>
                <strong>2</strong>
                <strong>3</strong>
                <strong>4</strong>
                <strong>5</strong>
                <strong>6</strong>
                <strong>7</strong>
                <strong>8</strong>
                <strong>9</strong>
              </b>
              <b class="list">
                <strong>0</strong>
                <strong>1</strong>
                <strong>2</strong>
                <strong>3</strong>
                <strong>4</strong>
                <strong>5</strong>
                <strong>6</strong>
                <strong>7</strong>
                <strong>8</strong>
                <strong>9</strong>
              </b>
            </b></em>platser kvar nu!
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Skynda! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms återstår</p>
      </div>
      <div class="price">
        <p><strong>349<big>kr</big></strong> <span><del>1 498kr</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=sv-asc14db83pc349&ref=sv_ascdb3pc349purchase2011<?php echo $refStr;?>&refs=sv_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc14db8purchase2011-sv')">
          Aktivera nu
        </a>
      </div>
    </div>
  </div>
  <!-- end btmcart -->

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
  var _href = "https://www.iobit.com/buy.php?product=sv-ascdb3pc339&ref=sv_ascdb3pc339purchase1811rpop<?php echo $refStr;?>&refs=sv_purchase_asc";
  var _ga = "('send', 'event', 'ascbuy', 'buy', 'asc12db6purchase1811rpop-sv')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>