 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr='';
if(in_array($_GET['pop'],array('xr_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spar op til 87% på IObit Uninstaller PRO til Jul - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="lamp">
    <div class="light hide"></div>
    <div class="light01 hide"></div>
    <div class="light02 hide"></div>
  </div>
  <div class="snow"></div>

  <div class="wrapper">
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Jule- UDSALG OP TIL 87% RABAT</h1>
    <div class="box">
      <dl>
        <dt>Normalpris: <del>379 kr.</del></dt>
        <dd>
          <strong>159 kr.</strong>
          <span>1 PC, 1 år</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO" class="img-box">
      <!-- 1pc buybtn -->
      <a href="https://www.iobit.com/buy.php?product=dk-iu91pc159&ref=dk_iu91pc159xmasrc1912<?php echo $refStr;?>&refs=dk_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iu159xmasrc1912-dk')"
         class="buybtn small">
        Køb nu
      </a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt>Normalpris: <del>1 177 kr.</del></dt>
        <dd>
          <strong>149 kr.</strong>
          <span><b>3 PC’er</b>, 1 år</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="IObit Uninstaller PRO+Protected Folder PRO" class="img-box">
      <!-- 3pc buybtn -->
      <a href="https://www.iobit.com/buy.php?product=dk-iu9pfsd149&ref=dk_iu9pfsd149xmasrc1912<?php echo $refStr;?>&refs=dk_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iu149xmasrc1912-dk')"
         class="buybtn">
        Køb nu
      </a>
      <p>Kun et få antal gaver tilgængelige</p>
    </div>
    <p class="last">Er du ikke tilfreds inden for de første 60 dage, refunderer vi dine penge.</p>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- intro -->
  <div class="intro wrapper clearfix">
    <h2>Med IObit Uninstaller PRO <br> sparer du både tid og energi</h2>
    <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Kraftfuld</strong>
        <p>Uønskede og stædige programmer fjernes nemt og hurtigt.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Fuldstændig</strong>
        <p>Forbedrede og grundigere skanning registrerer og fjerner alle rester automatisk.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Intelligent</strong>
        <p>Bundleware og annoncebaserede plug-ins opdages og fjernes.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>Hurtig</strong>
        <p>Med et klik kan du opdatere vigtigt software på din computer.</p>
      </dd>
    </dl>
    <p class="learn-more">Forskellen mellem den GRATIS og PRO-versionen >></p>
  </div>
  <!-- end intro -->

  <div class="gift-content wrapper clearfix">
    <h2>Hvad kan denne gratis gave gøre for dig?</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""></dt>
      <dd>
        <strong>0 kr.</strong> <del>Normalpris: 379 kr.</del>
        <p>Defragmenter din disk hurtigt og automatisk.</p>
        <p>Forøg adgangshastigheden til dine filer.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="Protected Folder PRO"></dt>
      <dd>
        <strong>0 kr. </strong> <del>Normalpris: 399 kr.</del>
        <p>Et stærkt værktøj der garanterer beskyttelse af dine filer og data.</p>
      </dd>
    </dl>
  </div>

  <div class="wrapper">
    <div class="betwwen-buy">
      <div class="content">
        <img src="<?php echo getStaticUrl('images/between-buy-box.png')?>" alt="" class="img-box">
        <dl>
          <dt><strong>149 kr.</strong> <del>1 177 kr.</del></dt>
          <dd>
            <!-- 3pc buybtn -->
            <a href="https://www.iobit.com/buy.php?product=dk-iu9pfsd149&ref=dk_iu9pfsd149xmasrc1912<?php echo $refStr;?>&refs=dk_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iu149xmasrc1912-dk')"
               class="buybtn red">
              Køb nu <span>– spar 87%</span>
            </a>
          </dd>
          <dd class="last">Kun et få antal gaver tilgængelige</dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end container -->

<!-- review -->
<div class="review wrapper clearfix">
  <div class="title">
    <h2>Editors’ valg</h2>
    <p>Hvad andre siger?</p>
  </div>
  <div class="review-icons fl">
    <img src="<?php echo $pResUrl;?>images/review-icons.png" alt="">
  </div>
  <div class="review-content fr">
    <ul class="clearfix">
      <li class="active">
        <img src="<?php echo $pResUrl;?>images/makeuseof.png" alt="MakeUseOf">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/sergey-erlich.png" alt="Sergey Erlich">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/joseph-yu.png" alt="Joseph Yu">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/ada-gortler.png" alt="Áda Görtler">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/lovro-zuzic.png" alt="Lovro Žužić">
      </li>
    </ul>
    <span class="line"></span>
    <div class="review-message">
      <!-- MakeUseOf -->
      <p class="active">
        "Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc. Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde." <span>–MakeUseOf</span>
      </p>
      <!-- Sergey Erlich -->
      <p>
        "IObit Uninstaller er nok en af de bedste værktøjer til at fjerne unødvendigt programmer fra din computer. I modsætning til Windows egen uninstaller vil IObit Uninstaller fjerne alle rester af programmet, som ellers ville kunne sænke ydeevnen på din pc. Jeg har brugt dette program i flere år, og det hjælper altid med holde min computer ren og hurtig. Jeg har førhen anbefalet dette program til nogle af mine venner og vil anbefale det igen i dag." <span>-JSergey Erlich</span>
      </p>
      <!-- Joseph Yu -->
      <p>
        "Uninstaller PRO er kun et af de fem IObit-vedligeholdelsesprogrammer, jeg har investeret i til min pc, ligesom kokke investerer i deres knive. Uninstaller er fantastisk til at finde rester af bits og bytes, der gemmer sig her og der og tager plads op på harddisken og påvirker registreringsdatabasen. Da jeg brugte programmernes egne afinstallationsfiler til at afinstallere, så det ud til at fungere, men da dukkede Uninstaller PRO op og viste at yderligere 35 filer kunne fjernes, da behøvede jeg bare at klikke på OK. Det kan stærkt anbefales og jeg købte en licens til 3 pc'er. Supportservice er høflig og fremragende." <span>- Joseph Yu</span>
      </p>
      <!-- Áda Görtler -->
      <p>
        "IObit Uninstaller er et af de bedste programmer med dets mange muligheder. Det er nemt at arbejde med, meget hurtig rengøring og grundig rengøring. Fra version 5 med flere nye funktioner, der samarbejder fint med bl.a. Windows 10. Hurtig fjernelse af uønskede plug-ins er også meget praktisk. God søgning efter dubletter og ikke brugte programmer. Tak for jeres hjælp til mig og min families computere." <span>-Áda Görtler</span>
      </p>
      <!-- Lovro Žužić -->
      <p>
        "IObit Uninstaller bliver bedre ved hver opdatering. Jeg har brugt det i mere end 3 år nu. Det er hurtigt at indlæse og har en simpel brugergrænseflade. Nogle af de mange funktioner, jeg regelmæssigt bruger, er batch-afinstallation, grundig scanning, filmakulering og den nye funktion, som giver mig hurtig adgang til et program jeg lige har installeret, som jeg ikke kan lide eller som ikke virker korrekt." <span>- Lovro Žužić</span>
      </p>
    </div>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2">Se hvad pro-udgave kan gøre for dig:</th>
        <td class="space"></td>
        <th class="itema"><span>Free-Version</span></th>
        <td class="space"></td>
        <th class="itemb"><span>PRO-Version</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue">Afinstallere programmer nemt og hurtigt</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
        <td class="virtue">Fjern problematiske Windows opdateringer</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">Hurtig skanning & sletter leftovers automatisk efter standard afinstallering </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">	Slet kombinerede programmer og plug-ins </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">	Opdag og slet ondsindet plug-ins for en mere sikker browsing</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
        <td class="virtue">Større database til fjernelse af flere uønskede programmer </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">	Genkalder automatisk systemændringer under afinstallering</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">	1-klik for at opdatere alt vigtig software</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
       <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue">	Auto opdater til den seneste Version</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">	Gratis 24/7 Teknisk Support on Demand</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->

<!--bottom-->
<div class="bottom">
  <div class="wrapper">
    <div class="content">
      <div class="img-box"></div>
      <ul>
        <li><i></i> <strong>1 år, <b>1 PC</b></strong> nu: <span>159</span> kr.</li>
        <li class="active"><i></i> <strong>1 år, <b>3 PC‘er</b></strong>  nu: <span>149</span> kr.</li>
      </ul>
      <dl>
        <dt><span>87%</span> rabat</dt>
        <dd>
          <!-- 3pc buybtn -->
          <a href="https://www.iobit.com/buy.php?product=dk-iu9pfsd149&ref=dk_iu9pfsd149xmasrc1912<?php echo $refStr;?>&refs=dk_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu149xmasrc1912-dk')"
             class="buybtn">
            Køb nu
          </a>
        </dd>
        <dd class="last">Kun et få antal gaver tilgængelige</dd>
      </dl>
    </div>
  </div>
</div>
<!--bottom-->

<!-- service -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      <dd><strong>Tilfredshedsgaranti</strong></dd>
      <dd>60-dages pengene-tilbage-garanti</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
      <dd><strong>Betalingssikkerhed</strong></dd>
      <dd>Din betaling er 100% sikker</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/shop.png')?>" alt=""></dt>
      <dd><strong>Hurtig aktivering</strong></dd>
      <dd>Du vil modtage en aktiveringskode <br> hurtigt efter betalingen</dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/servies.png')?>" alt=""></dt>
      <dd><strong>Kundeservice</strong></dd>
      <dd>Gratis 24/7 teknisk support ved behov</dd>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dt>Bemærk:</dt>
    <dd>
      *. Tilbud som dette kan fra tid til anden ændres uden varsel ændres efter vores skøn.
    </dd>
    <dd>
      *. Data kan ændres baseret på forskellige systemer eller computere.
    </dd>
  </dl>
  <div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
</div>
<!-- end footer -->


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>