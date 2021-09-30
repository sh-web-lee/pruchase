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
  $c_name = 'svascpre_p' . $date;
  $c_name_t='svascpre_t' . $date;
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
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Betala 0 kr för att få den Advanced SystemCare 13 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Gör din långsamma PC 200% * snabbare</h3>
      <dl>
        <dt class="price">
          <strong><b>0</b>kr<sup></strong> <a href="https://www.iobit.com/buy.php?product=sv-asc13preorder&ref=sv_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-sv');" class="buybtn"><span>Förbeställ Nu</span></a>
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
  </div>
</div>
<!-- banner end -->
<div class="intro wrapper clearfix">
    <span class="arrow"></span>
    <h2>Varför Uppgraderar till Advanced SystemCare 13 PRO</h2>
    <div class="title">
      <span class="arrow"></span>
      <h2>Varför Uppgraderar till Advanced SystemCare 13 PRO</h2>
    </div>
  <div class="left-message">
    <div class="message">
      
      <div class="list">
        <h3>Snabbare Dator</h3>
        <dl>
          <dt>200%* Snabbare Dato</dt>
          <dd>Rengör och optimera systemet för att påskynda dators start<br> och körning upp till 200% snabbare.</dd>
        </dl>
        <dl>
          <dt>300%* Snabbare Internet</dt>
          <dd>Optimera webbläsarinställning för att påskynda nedladdning,<br> surfning, spel, YouTube-visning upp till 300% snabbare.</dd>
        </dl>
      </div>
    </div>
    <div class="message">
      <div class="list">
        <h3>Säkrare Surfning</h3>
        <dl>
          <dt>Integritetsskydd</dt>
          <dd>Stoppa opålitliga program för att komma åt dina känsliga data som<br> kontakt, e-postdata, Dropbox, OneDrive etc.</dd>
        </dl>
        <dl>
          <dt>Säker Bläddring</dt>
          <dd>Rensa webbläsares data och dölja ditt spår automatisktför att<br> förhindra spårare från att snoka på vad du läser, se och köpa.</dd>
        </dl>
      </div>
    </div>
    <div class="message last">
      <div class="list">
        <h3>Andra Funktioner</h3>
        <ul class="active">
          <li>Rengör skräpfil automatiskt för att optimera system enligt tidsplan.</li>
          <li>Rengör register Djupt för att minska systemkrasch och fel.</li>
          <li>Skydda automatiskt mot infektion med skadlig kod i realtid.</li>
          <li>Upptäck de djupaste hoten i datorn.</li>
          <li>Upptäck skadliga länkar i dina e-postmeddelanden.</li>
          <li class="on">Stoppa onödiga tjänster automatiskt för att släppa RAM.</li>
          <li>Fånga inkräktare automatiskt med FaceID</li>
          <li>Ta bort irriterande annonser på webbsidan automatiskt.</li>
          <li>Uppdatera föråldrad programvara med ett klick.</li>
          <li>Uppdatera automatiskt till den senaste versionen.</li>
          <li>Gratis 24/7 teknisk support på begäran.</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="change-img">
    <div class="list-img list01 show">
      <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
      <div class="scan">
        <div class="circleprogress-content">
          <div class="circle right">
              <div class="circleprogress rightcircle"></div>
          </div>
          <div class="circle left">
              <div class="circleprogress leftcircle"></div>
          </div>
       </div>
      </div>
      <div class="img-before">
        <span class="change-num">50</span>
        <span class="completed"></span>
        <div class="circle">
          <div class="top-circle"></div>
          <div class="bottom-circle"></div>
        </div>
      </div>

    </div>
    <div class="list-img list02">
      <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
      <div class="privacy">
        <span class="icon"></span>
        <div class="check"></div>
        <span class="text">1 Otillförlitliga Åtkomst</span>
      </div>
      <div class="privacy-right"></div>
    </div>
    <div class="list-img list03">
      <img src="<?php echo getStaticUrl('images/intro3.png')?>" alt="" class="nomal3">
      <div class="icon-list">
        <span class="icons01"><i></i></span>
        <span class="icons02"><i></i></span>
        <span class="icons03"><i></i></span>
        <span class="icons04"><i></i></span>
        <span class="icons05"><i></i></span>
        <span class="icons06 active"><i></i></span>
      </div>
    </div>
  </div>
</div>

<div class="review-content">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Mer om Advanced SystemCare 13 PRO</h2>
    <h3>Sakerna Vi Gör för Våra Användare på Datoroptimering</h3>
    <div class="present">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
        <dd>
          Löser problem för <strong>30,000,000</strong> användare
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
        <dd>
          Sparar <strong>2,666,667</strong> timmar per månad
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
        <dd>
         Sparar <strong>1.18kr billion</strong> varje år
        </dd>
      </dl>
    </div>
    <!-- review start -->
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
              <p>"Det finns inget värre än en dator som kör fast så mycket att det hindrar din förmåga att arbeta eller spela spel. Advanced Systemcares syfte är att råda bot på allt som plågar din dator, inte bara städa upp skräpfiler, malware och ogiltiga registerposter utan också ge din dator ett rejält uppsving för en optimal datorupplevelse."</p>
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
          <li class="first" data-num="3"><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></li>
          <li class="two" data-num="4"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="three" data-num="1"><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></li>
          <li class="four" data-num="2"><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
</div>
<div class="bottom">
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Världsomspännande Utmärkelser</h2>
    <p>
      Med förtroende och pris från dessa världsledande medier de senaste tolv åren är det ett rätt val du har gjort.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer wrapper">
    <dl>
      <dd>
       Notera:
      </dd>
      <dd>*. Vi testade Advanced SystemCare 13 PRO i vårt interna testlabb. Dina resultat kan variera.</dd>
      <dd>*. I slutet av den 30-dagars gratisperioden debiteras ditt kreditkort eller PayPal-konto 299 kr automatiskt. Denna 50% rabatt från det ursprungliga priset på 599 kr är bonus endast för förbeställningar!</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alla rättigheter förbehållna</p>
  </div>
  <!-- footer end -->

</div>

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
      <strong><b>0</b>kr</strong> <a href="https://www.iobit.com/buy.php?product=sv-asc13preorder&ref=sv_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-sv');" class="buybtn"><span>Förbeställ Nu</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>