<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1].'-'.$matches[2];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Spar op til 85% på IObit Uninstaller PRO og afinstaller uønskede programmer. - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('static/css/common.css')?>" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700i&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <nav class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
      <h1 class="title">Gå ikke glip af din gratis julegave!</h1>
      <div class="clearfix">
        <div class="offer">
          <h2>Standardpakke</h2>
          <p class="price"><strong>179<small>kr</small></strong> <del>399kr</del></p>
          <div class="imgbox"><img src="<?php echo getStaticUrl('static/img/iu-box.png')?>" alt=""/></div>
          <a class="buybtn empty"
             href="https://www.iobit.com/buy.php?product=dk-iu103pc179&ref=dk_iu103pcpurchase2012<?php echo $refStr;?>&refs=dk_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcsinglepurchase2012-dk');">
            Køb nu
          </a>
        </div>
        <div class="offer big">
          <div class="top-wrap">
            <h2>Tidsbegrænset Julepakke!</h2>
            <div class="countdown"><i></i> Kun <span><b>00</b>:<b>00</b>:<b>00</b>:<b>00</b></span> tilbage</div>
          </div>
          <p class="price"><strong>179<small>kr</small></strong> <del>1179kr</del></p>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('static/img/iu-box.png')?>" alt=""/>
            <img class="isu" src="<?php echo getStaticUrl('static/img/isu-box.png')?>" alt=""/>
            <img class="sd" src="<?php echo getStaticUrl('static/img/sd-box.png')?>" alt=""/>
          </div>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-iu10pfsd179&ref=dk_iu103pcpfsdsale2012<?php echo $refStr;?>&refs=dk_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcbundlepurchase2012-dk')">
            Køb nu
          </a>
        </div>
      </div>
      <div class="payment">
        <img src="<?php echo getStaticUrl('static/img/payment.png')?>" alt=""/>
      </div>
      <span class="snow"></span>
    </div>
  </nav>

  <div class="feature">
    <h2 class="wrapper">Fjern alle spor af uønsket software, simpelt og hurtigt!</h2>
    <div class="wrapper clearfix">
      <div class="computer fl">
        <div class="screen">
          <ul>
            <li><img src="<?php echo getStaticUrl('static/img/screen01.png')?>" alt=""/></li>
            <li><img src="<?php echo getStaticUrl('static/img/screen02.png')?>" alt=""/></li>
            <li><img src="<?php echo getStaticUrl('static/img/screen03.png')?>" alt=""/></li>
            <li><img src="<?php echo getStaticUrl('static/img/screen04.png')?>" alt=""/></li>
          </ul>
        </div>
      </div>
      <div class="feature-message fr">
        <ul>
          <li><b>Fjern</b> al uønsket og stædigt software.</li>
          <li><b>Intelligent</b> opdagelse og fjernelse af bundled software.</li>
          <li><b>Opdater</b> al vigtigt software til den nyeste version med et klik.</li>
          <li><b>Fjerner</b> rester og opdaterer IObit Uninstaller.</li>
        </ul>
        <span class="feature-tag"></span>
      </div>
    </div>
  </div>

  <div class="gifts">
    <div class="wrapper">
      <h2><span>Køb fantastiske julegaver!</span></h2>
      <h3>Få stadig 55% rabat!</h3>
      <div class="gifts-offer clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('static/img/iu-box.png')?>" alt=""/>
          <img class="isu" src="<?php echo getStaticUrl('static/img/isu-box.png')?>" alt=""/>
          <img class="sd" src="<?php echo getStaticUrl('static/img/sd-box.png')?>" alt=""/>
          <span class="gift-tag one"></span>
          <span class="gift-tag two"></span>
        </div>
        <div class="gifts-list fl">
          <dl>
            <dt><i class="all-icons"></i> Smart Defrag PRO</dt>
            <dd>holder din hard drive SSD i perfekt stand!</dd>
          </dl>
          <dl>
            <dt><i class="all-icons"></i> Protected Folder PRO</dt>
            <dd>Beskytter dine vigtige data og mapper<br> med et kodeord</dd>
          </dl>
        </div>
        <div class="price fr">
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-iu10pfsd179&ref=dk_iu103pcpfsdsale2012<?php echo $refStr;?>&refs=dk_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcbundlepurchase2012-dk')">
            FÅ GAVE
          </a>
          <div class="countdown"><i></i> Kun <span><b>00</b>:<b>00</b>:<b>00</b>:<b>00</b></span> tilbage</div>
        </div>
      </div>
    </div>
  </div>

  <div class="review">
    <div class="wrapper">
      <div class="review-wrap">
        <div class="review-list">
          <h3>Brugeranmeldelser</h3>
          <p>
            "IObit Uninstaller bliver bedre ved hver opdatering. Jeg har brugt det i mere end 3 år nu. Det er hurtigt at indlæse og har en simpel brugergrænseflade. Nogle af de mange funktioner, jeg regelmæssigt bruger, er batch-afinstallation, grundig scanning, filmakulering og den nye funktion, som giver mig hurtig adgang til et program jeg lige har installeret, som jeg ikke kan lide eller som ikke virker korrekt."
          </p>
        </div>
        <div class="review-list">
          <h3>Brugeranmeldelser</h3>
          <p>
            "IObit Uninstaller er et af de bedste programmer med dets mange muligheder. Det er nemt at arbejde med, meget hurtig rengøring og grundig rengøring. Fra version 5 med flere nye funktioner, der samarbejder fint med bl.a. Windows 10. Hurtig fjernelse af uønskede plug-ins er også meget praktisk. God søgning efter dubletter og ikke brugte programmer. Tak for jeres hjælp til mig og min families computere."
          </p>
        </div>
        <div class="review-list">
          <h3>Medieanmeldelser</h3>
          <p>
            "Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc. Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde."
          </p>
        </div>
        <div class="review-list">
          <h3>Brugeranmeldelser</h3>
          <p>
            "Uninstaller PRO er kun et af de fem IObit-vedligeholdelsesprogrammer, jeg har investeret i til min pc, ligesom kokke investerer i deres knive. Uninstaller er fantastisk til at finde rester af bits og bytes, der gemmer sig her og der og tager plads op på harddisken og påvirker registreringsdatabasen. Da jeg brugte programmernes egne afinstallationsfiler til at afinstallere, så det ud til at fungere, men da dukkede Uninstaller PRO op og viste at yderligere 35 filer kunne fjernes, da behøvede jeg bare at klikke på OK. Det kan stærkt anbefales og jeg købte en licens til 3 pc'er. Supportservice er høflig og fremragende."
          </p>
        </div>
        <div class="review-list">
          <h3>Brugeranmeldelser</h3>
          <p>
            "IObit Uninstaller er nok en af de bedste værktøjer til at fjerne unødvendigt programmer fra din computer. I modsætning til Windows egen uninstaller vil IObit Uninstaller fjerne alle rester af programmet, som ellers ville kunne sænke ydeevnen på din pc. Jeg har brugt dette program i flere år, og det hjælper altid med holde min computer ren og hurtig. Jeg har førhen anbefalet dette program til nogle af mine venner og vil anbefale det igen i dag."
          </p>
        </div>
      </div>
      <ul class="review-icon">
        <li>
          <img src="<?php echo getStaticUrl('static/img/lovro-zuzic.png')?>" alt="Lovro Žužić"/>
          <h4>Lovro Žužić</h4>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('static/img/ada-gortler.png')?>" alt="Áda Görtler"/>
          <h4>Áda Görtler</h4>
        </li>
        <li class="on">
          <img src="<?php echo getStaticUrl('static/img/makeusef.png')?>" alt="MakeUseOf"/>
          <h4>MakeUseOf</h4>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('static/img/joseph-yu.png')?>" alt="Joseph Yu"/>
          <h4>Joseph Yu</h4>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('static/img/sergey-erlich.png')?>" alt="Sergey Erlich"/>
          <h4>Sergey Erlich</h4>
        </li>
      </ul>
    </div>
  </div>

  <div class="intro">
    <h2>IObit Uninstaller 10 PRO kan endnu<br> mere end dets tidligere version!</h2>
    <div class="wrapper clearfix">
      <dl class="intro-list">
        <dt><img src="<?php echo getStaticUrl('static/img/intro-icon01.png')?>" alt=""/></dt>
        <dd>
          <h3>Bloker Notifikationer</h3>
          <p>Den nyeste version blokerer også browser notifikationer, så du kan surfe uforstyrret på nettet.</p>
        </dd>
      </dl>
      <dl class="intro-list">
        <dt><img src="<?php echo getStaticUrl('static/img/intro-icon02.png')?>" alt=""/></dt>
        <dd>
          <h3>Renere</h3>
          <p>Med en 30% større database, fjernes flere rester, så du kan få et renere og hurtigere system.</p>
        </dd>
      </dl>
      <dl class="intro-list">
        <dt><img src="<?php echo getStaticUrl('static/img/intro-icon03.png')?>" alt=""/></dt>
        <dd>
          <h3>More effektivt</h3>
          <p>Fjerner flere stædigt software herunder Microsoft Edge (Chromium).</p>
        </dd>
      </dl>
      <dl class="intro-list last">
        <dt><img src="<?php echo getStaticUrl('static/img/intro-icon04.png')?>" alt=""/></dt>
        <dd>
          <h3>Fuld Browser understøttelse</h3>
          <p>Understøtter flere browsere herunder den nye Chromium-baseret Microsoft Edge.</p>
        </dd>
      </dl>
    </div>
  </div>

  <div class="tablebox">
    <div class="wrapper">
      <div class="table-title">
        <h3>IObit Uninstaller Free </h3>
        <div class="table-center">Hvorfor behøver du PRO?</div>
        <h3 class="pro"> IObit Uninstaller PRO</h3>
      </div>
      <table cellpadding="0" cellspacing="0" border="0">
        <tr>
          <td class="free"><i class="all-icons grayfork right"></i></td>
          <td class="text">Afinstaller programmer via genveje, åbne vinduer eller systembakke ikoner</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork right"></i></td>
          <td class="text">Fjerner plugins og udvidelser i Edge, Chrome, IE, Firefox m.fl.</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Kan fjerne stædige programmer</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Opdager og fjerner programmer som kommer med freeware</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Fjerner automatisk restfiler som andre afinstalleringsprogrammer ikke kan fjerne</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Holder al software på din PC i god stand</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Identificerer og fjerner annoncebaserede plugins</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Opdaterer al vigtigt software med et klik</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr>
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Opdater automatisk til den nyeste version</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
        <tr class="last">
          <td class="free"><i class="all-icons grayfork"></i></td>
          <td class="text">Gratis teknisk support 24/7</td>
          <td class="pro"><i class="all-icons yellowfork"></i></td>
        </tr>
      </table>
    </div>
  </div>

  <div class="footbuy">
    <h2>Grib den sidste chance til skønne julegaver!</h2>
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('static/img/iu-box.png')?>" alt=""/>
        <img class="isu" src="<?php echo getStaticUrl('static/img/isu-box.png')?>" alt=""/>
        <img class="sd" src="<?php echo getStaticUrl('static/img/sd-box.png')?>" alt=""/>
        <span class="discount">-75%</span>
      </div>
      <div class="price fr">
        <p><strong>179<small>kr</small></strong> <del>1177kr</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-iu10pfsd179&ref=dk_iu103pcpfsdsale2012<?php echo $refStr;?>&refs=dk_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu3pcbundlepurchase2012-dk')">
          Køb nu
        </a>
        <div class="countdown"><i></i> Kun <span><b>00</b>:<b>00</b>:<b>00</b>:<b>00</b></span> tilbage</div>
      </div>
    </div>
  </div>

  <!-- service -->
  <div class="service ">
    <div class="wrapper clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('static/img/moneyback.png')?>" alt=""></dt>
        <dd><strong>Tilfredshedsgaranti</strong></dd>
        <dd>60-dages pengene-tilbage-garanti</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('static/img/secure.png')?>" alt=""></dt>
        <dd><strong>Betalingssikkerhed</strong></dd>
        <dd>Din betaling er 100% sikker</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('static/img/shop.png')?>" alt=""></dt>
        <dd><strong>Hurtig aktivering</strong></dd>
        <dd>Du vil modtage en aktiveringskode <br> hurtigt efter betalingen</dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('static/img/servies.png')?>" alt=""></dt>
        <dd><strong>Kundeservice</strong></dd>
        <dd>Gratis 24/7 teknisk support ved behov</dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="wrapper">
      <dl class="annotation">
        <dt>Bemærk:</dt>
        <dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel ændres efter vores skøn.</dd>
        <dd>*. Data kan ændres baseret på forskellige systemer eller computere.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
  </div>
  <!-- end footer -->
</body>

<script src="<?php echo getStaticUrl('static/js/script.js')?>"></script>
</html>