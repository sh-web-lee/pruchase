<?php
ob_start();
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);


if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);

$isNewRef=false;
if(in_array($_GET['to'],array('newnc3','oldicon3'))){
  $isNewRef = true;
}
?>
<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Spar op til 77% på IObit Uninstaller PRO og afinstaller uønskede programmer.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/dk/index.php">IObit</a>
    <!-- title -->
    <h1>
      <strong>Superpakke,</strong>
      tilbuddet gælder i en begrænset periode Vær hurtig!
    </h1>
    <!-- content -->
    <div class="content">

      <!-- 1pc -->
      <dl class="message small left">
        <dt>Singlepakke</dt>
        <dd>
          <!-- box -->
          <img src="<?php echo getStaticUrl('images/banner-iu1pc.png')?>" alt="IObit Uninstaller PRO">
          <!-- price -->
          <p class="price 1pc"><strong><big>159</big> kr.</strong> <del>379 kr.</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-iu111pc159&ref=dk_iu111pc159sale202108<?php echo $refStr;?>&refs=dk_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iusale2005-dk')">
            Spar nu
          </a>
        </dd>
      </dl>

      <!-- 3pc+pf -->
      <dl class="message large middle">
        <dt>Superpakke</dt>
        <dd>
          <!-- box -->
          <img src="<?php echo getStaticUrl('images/banner-iu3pcpf.png')?>" alt="IObit Uninstaller PRO+Protected Folder">
          <!-- price -->
          <p class="price 1pc"><strong><big>179</big> kr.</strong> <del>798 kr.</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-iu11pf179&ref=dk_iu11pf179sale202108<?php echo $refStr;?>&refs=dk_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iusale2005-dk')">
            Spar nu
          </a>
          <!-- view -->
          <p class="view"><i class="all-icons"></i> <span class="viewNum">5,252,240</span> solgte superpakker</p>
        </dd>
      </dl>

      <!-- 3pc -->
      <dl class="message small right">
        <dt>Voordeelpakket</dt>
        <dd>
          <!-- box -->
          <img src="<?php echo getStaticUrl('images/banner-iu3pc.png')?>" alt="IObit Uninstaller PRO">
          <!-- price -->
          <p class="price 1pc"><strong><big>179</big> kr.</strong> <del>399 kr.</del></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=dk-iu113pc179&ref=dk_iu113pc179sale202108<?php echo $refStr;?>&refs=dk_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iusale2005-dk')">
            Spar nu
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment">
  <div class="wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
      <dd>Betalingsmetoder</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
      <dd>60 dages tilfredsgaranti eller pengene retur</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/veilig.png')?>" alt=""/></dt>
      <dd>Sikker betaling</dd>
    </dl>
  </div>
</div>
<!-- end payment -->

<!-- intro -->
<div class="intro wrapper">
  <h2>Hvorfor IObit Uninstaller PRO</h2>
  <p>Komplet afinstallering af programmer uden af efterlade spor på din PC</p>
  <!-- content -->
  <div class="clearfix content">
    <!-- 01 -->
    <dl class="one">
      <dt></dt>
      <dd>Fjerner stædige programmer</dd>
    </dl>
    <!-- 02 -->
    <dl class="two">
      <dt></dt>
      <dd>
        Fjerner ondsindede og <br>
        annoncebaserede plug-ins
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three">
      <dt></dt>
      <dd>
        Rydder automatisk for rester som <br>
        ikke kan fjernes ved andre værktøjer
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four">
      <dt></dt>
      <dd>Gratis teknisk support 24/7</dd>
    </dl>
    <!-- 05 -->
    <dl class="five">
      <dt></dt>
      <dd>
        Tilbagekalder automatisk <br>
        systemændringer foretaget af <br>
        programmer under afinstallering
      </dd>
    </dl>
    <!-- 06 -->
    <dl class="six">
      <dt></dt>
      <dd>
        Opdaterer al vigtigt software <br>
        med blot et klik
      </dd>
    </dl>
  </div>
</div>
<!-- end intro -->

<!-- comparison -->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Se hvad pro-udgave kan gøre for dig:</th>
      <th class="itemb">Free-Version</th>
      <td class="space"></td>
      <th class="itema">PRO-Version</th>
    </tr>
    </thead>
    <tbody>
    <tr class="title">
      <td class="icons gray"></td>
      <td class="virtue gray"></td>
      <td class="itemb gray"></td>
      <td class="space"></td>
      <td class="itema orange"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
      <td class="virtue">Afinstallere programmer nemt og hurtigt</td>
      <td class="itemb"><i class="all-icons yes">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
      <td class="virtue">Fjern problematiske Windows opdateringer</td>
      <td class="itemb"><i class="all-icons">×</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
      <td class="virtue">Hurtig skanning & sletter leftovers automatisk efter standard afinstallering	</td>
      <td class="itemb"><i class="all-icons">×</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
      <td class="virtue">Slet kombinerede programmer og plug-ins</td>
      <td class="itemb"><i class="all-icons">×</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
      <td class="virtue">Opdag og slet ondsindet plug-ins for en mere sikker browsing</td>
      <td class="itemb"><i class="all-icons">×</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
      <td class="virtue">Større database til fjernelse af flere uønskede programmer</td>
      <td class="itemb"><i class="all-icons">×</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
      <td class="virtue">Genkalder automatisk systemændringer under afinstallering</td>
      <td class="itemb"><i class="all-icons">×</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
      <td class="virtue">1-klik for at opdatere alt vigtig software</td>
      <td class="itemb"><i class="all-icons">×</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
      <td class="virtue">Auto opdater til den seneste Version</td>
      <td class="itemb"><i class="all-icons">×</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
      <td class="virtue">Gratis 24/7 teknisk support ved behov</td>
      <td class="itemb"><i class="all-icons">×</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons orange">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- review -->
<div class="review wrapper">
  <div class="container">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
          <dd>
            <h2>Medieanmeldelser</h2>
            <p>"Dette nemme og informative afinstallationsværktøj renser, konfigurerer og optimerer din pc. Brugere kan downloade det på et øjeblik. Dette afinstallationsværktøj kan kategoriseres som den bedste uninstaller og det giver brugerne mulighed for at afinstallere flere progranner på en gang. Det tilbyder brugere at køre en "grundig scanning" for at gå dybere og finde efterladenskaber. Ydelsen alene gør det lille afinstalleringsværktøj værd at beholde."</p>
            <cite>MakeUseOf</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="JSergey Erlich"></dt>
          <dd>
            <h2>Brugeranmeldelser</h2>
            <p>"IObit Uninstaller er nok en af de bedste værktøjer til at fjerne unødvendigt programmer fra din computer. I modsætning til Windows egen uninstaller vil IObit Uninstaller fjerne alle rester af programmet, som ellers ville kunne sænke ydeevnen på din pc. Jeg har brugt dette program i flere år, og det hjælper altid med holde min computer ren og hurtig. Jeg har førhen anbefalet dette program til nogle af mine venner og vil anbefale det igen i dag."</p>
            <cite>JSergey Erlich</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></dt>
          <dd>
            <h2>Brugeranmeldelser</h2>
            <p>"Uninstaller PRO er kun et af de fem IObit-vedligeholdelsesprogrammer, jeg har investeret i til min pc, ligesom kokke investerer i deres knive. Uninstaller er fantastisk til at finde rester af bits og bytes, der gemmer sig her og der og tager plads op på harddisken og påvirker registreringsdatabasen. Da jeg brugte programmernes egne afinstallationsfiler til at afinstallere, så det ud til at fungere, men da dukkede Uninstaller PRO op og viste at yderligere 35 filer kunne fjernes, da behøvede jeg bare at klikke på OK. Det kan stærkt anbefales og jeg købte en licens til 3 pc'er. Supportservice er høflig og fremragende."</p>
            <cite>Joseph Yu</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></dt>
          <dd>
            <h2>Brugeranmeldelser</h2>
            <p>"IObit Uninstaller er et af de bedste programmer med dets mange muligheder. Det er nemt at arbejde med, meget hurtig rengøring og grundig rengøring. Fra version 5 med flere nye funktioner, der samarbejder fint med bl.a. Windows 10. Hurtig fjernelse af uønskede plug-ins er også meget praktisk. God søgning efter dubletter og ikke brugte programmer. Tak for jeres hjælp til mig og min families computere."</p>
            <cite>Áda Görtler</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
          <dd>
            <h2>Brugeranmeldelser</h2>
            <p>"IObit Uninstaller bliver bedre ved hver opdatering. Jeg har brugt det i mere end 3 år nu. Det er hurtigt at indlæse og har en simpel brugergrænseflade. Nogle af de mange funktioner, jeg regelmæssigt bruger, er batch-afinstallation, grundig scanning, filmakulering og den nye funktion, som giver mig hurtig adgang til et program jeg lige har installeret, som jeg ikke kan lide eller som ikke virker korrekt."</p>
            <cite>Lovro Žužić</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- gift -->
<div class="gift">
  <div class="wrapper clearfix">
    <h2>Hvad kan denne gratis gave gøre for dig?</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="Protected Folder PRO"></dt>
      <dd>
        <strong>0 kr. </strong> <del>Normalpris: 399 kr.</del>
        <p>Et stærkt værktøj der garanterer <br> beskyttelse af dine filer og data.</p>
      </dd>
    </dl>
  </div>
</div>
<!-- end gift -->

<!-- footbuy -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="box"><img src="<?php echo getStaticUrl('images/footbuy-box.png')?>" alt=""></div>
    <ul class="fl">
      <li class="eight active" data-num="1">
        <span>Superpakke</span>
      </li>
      <li data-num="2">
        <span>Familiepakke</span>
      </li>
      <li data-num="0">
        <span>Singlepakke</span>
      </li>
    </ul>
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price"><strong><big>179</big> kr.</strong> <del>798 kr.</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-iu11pf179&ref=dk_iu11pf179sale202108<?php echo $refStr;?>&refs=dk_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iusale2005-dk')">
          Spar nu
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end footbuy -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <dl class="annotation">
      <dt>Bemærk:</dt>
      <dd>*. Tilbud som dette kan fra tid til anden ændres uden varsel ændres efter vores skøn.</dd>
      <dd>*. Data kan ændres baseret på forskellige systemer eller computere.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- end footer -->

<!-- script -->
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script type="text/javascript" src="<?php echo getStaticUrl('script/script.js')?>"></script>
<?php if ($isNewRef):?>
  <script>
    document.title = "Spar op til 82% på IObit Uninstaller PRO og afinstaller uønskede programmer.";
    $(".banner").removeClass("change").addClass("change");
    $(".banner .message.middle,.footbuy").find(".buybtn").attr({
      "href": "https://www.iobit.com/buy.php?product=dk-iu11pf139&ref=dk_iuspecialbundlesale<?php echo $refStr;?>&refs=dk_purchase_iu",
      "onclick":"ga('send', 'event', 'iubuy', 'buy', 'iuspecialbundlesale-dk')",
    });
    $(".banner .message.left").find(".buybtn").attr({
      "href": "https://www.iobit.com/buy.php?product=dk-iu111pc159&ref=dk_iuspecial1pcsale<?php echo $refStr;?>&refs=dk_purchase_iu",
      "onclick":"ga('send', 'event', 'iubuy', 'buy', 'iuspecial1pcsale-dk')",
    });
    $(".banner .message.right").find(".buybtn").attr({
      "href": "https://www.iobit.com/buy.php?product=dk-iu113pc179&ref=dk_iuspecial3pcsale<?php echo $refStr;?>&refs=dk_purchase_iu",
      "onclick":"ga('send', 'event', 'iubuy', 'buy', 'iuspecial3pcsale-dk')",
    });
    $(".banner .message.middle,.footbuy").find(".price big").text("139 kr.");
  </script>
<?php endif;?>
</body>
</html>