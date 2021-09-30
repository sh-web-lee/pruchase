<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'svascexd_p' . $date;
  $c_name_t='svascexd_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);

function paramDeal($num,$decimals,$separate=',',$decimal='.'){
  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
}

$params=json_decode(base64_decode($_GET['data']));
$fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,',','.');
$fileSizeUnit='GB';
if($fileSizeShow<=1){
  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,',','.');
  $fileSizeUnit='MB';
}
$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
$paramPri=paramDeal($params->privacy,0,',','.');
$paramPro=paramDeal($params->program,0,',','.');
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Betala 0 kr för att få den Advanced SystemCare 13 PRO – IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Gör din långsamma PC 200% * snabbare</h3>
      <dl>
        <dt class="price">
          <strong><b>0</b>kr</strong>
          <a href="http://www.iobit.com/buy.php?product=sv-asc13preorder&ref=sv_asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-sv');"
             class="buybtn">
            <span>Förbeställ Nu</span>
          </a>
        </dt>
        <dd class="number">
          <span><span class="viewNum"><?php echo $viewNum;?></span> BESÖKARE.</span> RUSA, BARA
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          KVAR.
        </dd>
      </dl>
    </div>
    <span class="arrow"></span>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Vad Gjorde Advanced Systemcare Pro för Dig Förra Året?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        <div class="scan">Skanna</div>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span>Frigör Diskutrymme <b>XX</b></span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Radera <b>XX</b> Privata Spår</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Snabba upp PC Starttid <b>200%</b>* Snabbare</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Spåskynda Surfning på Nätet <b>300%</b>* Snabbare</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Blockera <b>XX</b> Otillförlitliga Åtkomst till Integritet </span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>Nu Uw Advanced SystemCare PRO Verlopen Is,</h3>
      <h2> Profiteert U <b>Niet Meer</b> Van:</h2>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span>Djup rengöring av registerfiler för att lösa systemproblem</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Automatisk rengöring på RAM för att göra dator smidig</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Acceleration av dators upstart och anslutning till Internet</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Skydd av personuppgifter för att undvika sekretessläckor</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Realtidsskydd för att blockera infektion med skadlig kod</span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Med Följande Funktioner,<br> Ger Ny Advanced SystemCare 13 PRO Dig Bättre Dators Prestanda </h2>
    <div class="clearfix">
      <dl class="blue">
        <dt><img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>4GB<small>*</small></h3>
          <p>Upptäck och rengör <b>4GB* mer</b> skräpfil</p>
        </dd>
      </dl>
      <dl class="purple">
        <dt><img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>200+</h3>
          <p>Sopa personliga spår från <b>200+</b> program och <b>15</b> webbläsare för alla användarkonton</p>
        </dd>
      </dl>
      <dl class="green">
        <dt><img src="<?php echo getStaticUrl('images/f-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>e-post</h3>
          <p>Skydda <b>e-post</b> från olika e-postbaserat hot</p>
        </dd>
      </dl>
      <dl class="orange">
        <dt><img src="<?php echo getStaticUrl('images/f-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>60%</h3>
          <p><b>60%</b> fler programvara kan uppdateras med 1 klick</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Vad vi har uppnått</h2>
    <div class="present clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons01.png')?>" alt=""/></dt>
        <dd>Löser problem för <br> oplossen voor  <h4 class="first">00,000,000</h4> användare</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/p-icons02.png')?>" alt=""/></dt>
        <dd>Sparar <h4 class="two">0,000,000</h4> timmar per månad</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons03.png')?>" alt=""/></dt>
        <dd>Sparar <h4>$1.18 billion</h4> varje år</dd>
      </dl>
    </div>

    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>I media</span></h2></dt>
            <dd>
              <p class="on">"Det finns inget värre än en dator som kör fast så mycket att det hindrar din förmåga att arbeta eller spela spel. Advanced Systemcares syfte är att råda bot på allt som plågar din dator, inte bara städa upp skräpfiler, malware och ogiltiga registerposter utan också ge din dator ett rejält uppsving för en optimal datorupplevelse."</p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Användares omdömen</span></h2></dt>
            <dd>
              <p>"Jag, precis som många andra, började använda gratisversionen och köpte så småningom den fullständiga versionen. Programmet har arbetat för att hålla min dator ren och buggfri i flera år och det har ännu inte svikit mig. Jag kontaktade Advanced SystemCare nyligen och de svarade inom en dag eller två med allt jag behövde veta. I mina ögon väger support mycket i beslutsbefattandet om jag ska fortsätta använda en produkt. ASC segrar i både produkt och support."</p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Användares omdömen</span></h2></dt>
            <dd>
              <p>"Som de flesta människorna är jag ingen datorexpert. Jag vet inte hur många program jag har testat genom åren. Alla påstår sig vara bästa, men inget kommer i närheten av skyddet jag har nu med Advanced Systemcare Pro. Sedan jag fick detta fantastiska program har jag inte behövt ringa för teknisk support en enda gång. Det har mer än överträffat mina förväntningar, det är alltid uppdaterat och grafiken är väldigt cool också! Stort tack till er alla för att ni gör mitt liv mycket lättare."</p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Användares omdömen</span></h2></dt>
            <dd>
              <p>"Som datorreparatör finner jag att vanligaste problemen kan lösas genom att ladda ner och skanna med ASC Free. När jag är klar med en reparation brukar jag råda mina kunder till att köpa PRO-paketet. Vem behöver en tekniker när du har kraften i Advanced SystemCare PRO som dygnet runt jobbar på ditt system? Det här är den bästa produkten en hemanvändare kan köpa. Tack för att ni gör mitt jobb lättare."</p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Användares omdömen</span></h2></dt>
            <dd>
              <p>"Detta program är det bästa som jag någonsin har provat. Min dator går så mycket bättre och snabbare nu när jag har hämtat ASC. Det har städat upp onödiga och dubbla filer, tomma mappar och jag har använt det till att rensa filer. Det har städat och defragmenterat registret och alla filer på datorn. Jag rekommenderar starkt att köpa det här programmet. Det är inte dyrt och vad det kommer att göra för din dator kommer att vara helt fantastiskt. Du kommer att älska det, det jag lovar."</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="two" data-num="3"><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></li>
          <li class="three" data-num="4"><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="awards wrapper">
    <h2>Världsomspännande Utmärkelser</h2>
    <p>
      Med förtroende och pris från dessa världsledande medier de senaste tolv åren är det ett rätt val du har gjort.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

  
  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
        Notera:
      </dd>
      <dd>*. Vi testade Advanced SystemCare 13 PRO i vårt interna testlabb. Dina resultat kan variera.</dd>
      <dd>*. I slutet av den 30-dagars gratisperioden debiteras ditt kreditkort eller PayPal-konto 299 kr automatiskt. Denna 50% rabatt från det ursprungliga priset på 599 kr är bonus endast för förbeställningar!</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alla rättigheter förbehållna</p>
  </div>
  <!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      <span><span class="viewNum"><?php echo $viewNum;?></span> BESÖKARE.</span> RUSA, BARA
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      KVAR.
    </div>
    <div class="price">
      <strong><b>0</b>kr</strong>
      <a href="http://www.iobit.com/buy.php?product=sv-asc13preorder&ref=sv_asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-sv');"
         class="buybtn">
        <span>Förbeställ Nu</span>
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

  <script>
    $(".intro .wrapper .right b").eq(0).html("<?php echo $paramJunk?>").end().eq(1).html("<?php echo $paramPri?>").end().
      eq(4).html("<?php echo $paramPro;?>");
  </script>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>