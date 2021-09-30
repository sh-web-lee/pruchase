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
  $c_name = 'svascpup_p' . $date;
  $c_name_t='svascpup_t' . $date;
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Betala 0 kr för att få den Advanced SystemCare 13 PRO – IObit</title>
  <meta name="Copyright" content="IObit">
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
          <strong><b>0</b>kr<sup></strong>
          <a href="http://www.iobit.com/buy.php?product=sv-asc13preorder&ref=sv_asc13preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-sv');"
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
  </div>
</div>
<!-- banner end -->

<!-- intro -->
<div class="intro wrapper clearfix">
  <span class="arrow"></span>
  <h2>Varför Uppgradera till Advanced SystemCare 13 PRO?</h2>
  <h3><strong>Din Dator Skulle Köras vid <span>Toppprestanda</span></strong></h3>
  <div class="message01">
    <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" class="img-box ">
    <img src="<?php echo getStaticUrl('images/guide.png')?>" alt="" class="guide">
    <img src="<?php echo getStaticUrl('images/good.png')?>" alt="" class="good">
    <img src="<?php echo getStaticUrl('images/intro-list01.png')?>" alt="" class="icons01">
    <img src="<?php echo getStaticUrl('images/intro-list02.png')?>" alt="" class="icons02">
    <div class="round">
      <div class="top-round"></div>
      <div class="circle right">
        <div class="circleprogress rightcircle"></div>
      </div>
    </div>
    <div class="left-round"></div>
    <dl class="list01">
      <dt>Större Diskutrymme <span><em>endast PRO</em></span></dt>
      <dd>
        Djup rengöring på register och maximerad <br> diskdefragering frigör mer diskutrymme för att <br> garantera smidiga datorprestanda.
      </dd>
    </dl>
    <dl class="list02">
      <dt>200%* Snabbare PC <span><em>endast PRO</em></span></dt>
      <dd>
        Rengör och optimera system för att påskynda <br> dators start och körning till 200% snabbare.
      </dd>
    </dl>
    <dl class="list03">
      <dt>Inga Onödiga Processer <span><em>endast PRO</em></span></dt>
      <dd>
        Stoppa automatiskt onyttiga processer som <br> körs i bakgrunden för att undvika trög dator.
      </dd>
    </dl>
    <dl class="list04">
      <dt>300%* Snabbare Internet <span><em>endast PRO</em></span></dt>
      <dd>
        Optimera webbläsarinställningar för att påskynda <br> nedladdning, surfning, spel, YouTube-visning upp <br> till 300% snabbare.
      </dd>
    </dl>
  </div>

  <h3 class="title2"><strong>Din Dator och Sekretess Skulle <span>Förbli Säker</span></strong></h3>

  <div class="message02">
    <div class="img-box">
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="">
      <img src="<?php echo getStaticUrl('images/lock.png')?>" alt="" class="lock">
    </div>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Inga Otillförlitliga Åtkomst <span><em>endast PRO</em></span></strong>
        Upptäck och blockera hemlig åtkomst till dina känsliga data.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Stoppa Malwares Infection <span><em>endast PRO</em></span></strong>
        Malware och spyware kan inte längre bryta sig in i din dator med realtidsskydd.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Radera Spår på Nätet <span><em>endast PRO</em></span></strong>
        Dina privata spår på nätet raderas automatiskt för att stoppa illvillig spårning.
      </dd>
    </dl>
  </div>

  <h3 class="title3"><strong>Dessutom är Advanced SystemCare 13 PRO <span>MycketBättre</span> än Vad Du Har Nu</strong></h3>

  <div class="message03">
    <div class="box clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
        <dd>
          Rengör <strong>4GB* Mer</strong> skräpfil på din dator
        </dd>
      </dl>
      <dl class="olter">
        <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
        <dd>
          Sopa Spår av <strong>200+ Program</strong> för alla användarkonton
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
        <dd>
          Optimera <strong>30% Fler</strong> Startuppgifter för snabbare dator
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
        <dd>
          Stödj att Uppdatera <strong>60% Fler</strong> programvara för att ge bättre prestanda
        </dd>
      </dl>
    </div>
  </div>

</div>




<div class="bottom">
  <!-- review start -->
  <div class="review wrapper">
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
      <strong><b>0</b>kr</strong>
      <a href="http://www.iobit.com/buy.php?product=sv-asc13preorder&ref=sv_asc13preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-sv');"
         class="buybtn">
        <span>Förbeställ Nu</span>
      </a>
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