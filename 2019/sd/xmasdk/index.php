<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-'.$ver[3];
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Få glæde af vores særtilbud for Smart Defrag PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/dk/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>Flash-salg i 2020</h1>
      <p>Gå ikke glip af gaven der er forberedt til dig</p>
    </div>
    <!-- message -->
    <div class="message clearfix">

      <!-- 1pc asc -->
      <div class="message-box small fl">
        <!-- off -->
        <div class="off">-55%</div>
        <!-- box -->
        <div class="box">Smart Defrag PRO</div>
        <!-- price -->
        <p class="price"><span><big>179</big> <sup>kr. </sup></span> <del>399 kr.</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-sd63pc179&ref=dk_sd73pcsale2101-i-u-l-e<?= $refStr; ?>&refs=dk_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcsinglepurchase2101-dk')  ">
          <i class="all-icons"></i> Køb nu
        </a>
      </div>

      <!-- 3pc asc -->
      <div class="message-box large fr">
        <!-- off -->
        <div class="off">-78%</div>
        <!-- box -->
        <div class="box">
          Advanced SystemCare PRO+bundles
          <span>Cadeaux valent 89,97€</span>
        </div>
        <!-- price -->
        <p class="price large"><span><big>129</big> <sup>kr. </sup></span> <del> 588 kr.</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=dk-sd6isu129&ref=dk_sd7isusale2101-i-u-l-e<?= $refStr; ?>&refs=dk_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcbundlepurchase2101-dk') ">
          <i class="all-icons"></i> Køb nu
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment wrapper">
  <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
</div>
<!-- end payment -->

<!-- intro -->
<div class="intro">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Hvorfor Smart Defrag PRO</h2>
    <div class="title">
      <h2>Hvorfor Smart Defrag PRO</h2>
    </div>
    <!-- left-message -->
    <div class="left-message">
      <!-- message -->
      <div class="message">
        <div class="list">
          <h3>Hastighed</h3>
          <dl>
            <dt>Op til 200% hurtigere</dt>
            <dd>
              Med bedre fildefragmentering kan du tilgå filer <br>
              hurtigt og spille spil op til 200% hurtigere.
            </dd>
          </dl>
          <dl>
            <dt>Hurtig defragmentering</dt>
            <dd>
              Defragmenter dine diske og filer grundigt og <br>
              effektivt for at spare tid.
            </dd>
          </dl>
        </div>
      </div>
      <!-- message -->
      <div class="message">
        <div class="list">
          <h3 class="small">Ydeevne</h3>
          <dl>
            <dt>Opstart</dt>
            <dd>
              Hurtigere defragmentering af databasen og <br>
              systemfiler under systemoperation for en hurtigere <br>
              opstart og optimal systemydeevne.
            </dd>
          </dl>
          <dl>
            <dt>Defragmentering</dt>
            <dd>
              Defragmenter dine filer og diske automatisk og <br>
              intelligent på din PC til ethvert tidspunkt med <br>
              maksimal ydeevne.
            </dd>
          </dl>
        </div>
      </div>

    </div>
    <!-- change-img-->
    <div class="change-img">
      <!-- list01 -->
      <div class="list-img list01 show">
        <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
        <div class="img-before"></div>
      </div>
      <!-- list02 -->
      <div class="list-img list02">
        <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
        <div class="privacy-right"></div>
      </div>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>Gå ikke glip af din gave</h2>
    <!-- gifts message -->
    <div class="gifts-message clearfix">
      <!-- isu -->
      <div class="gifts-box">
        <dl class="isu">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon03.png')?>" alt=""></dt>
          <dd class="clearfix">
            <!-- box -->
            <div class="box fl"></div>
            <div class="message fl">
              <h3>IObit Software Updater 4 PRO</h3>
              <em>(1 år / 1 PC)</em>
              <span class="arrow"></span>
              <ul>
                <li>Opdater det installerede software uden at åbne <br> en webbrowser.</li>
                <li>Hold al dit software opdateret til den seneste <br> version nemt.</li>
              </ul>
            </div>
          </dd>
        </dl>
      </div>
    </div>
    <!-- buybtn -->
    <a class="buybtn larger"
       href="https://www.iobit.com/buy.php?product=dk-sd6isu129&ref=dk_sd7isusale2101-i-u-l-e<?= $refStr; ?>&refs=dk_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcbundlepurchase2101-dk') ">
      <i class="all-icons"></i> Køb nu
    </a>
  </div>
</div>
<!-- end gifts -->

<!-- comparison -->
<div class="comparison wrapper" id="compare">
  <!-- title -->
  <h2>Se hvorfor PRO-udgaven er det hele værd.</h2>
  <!-- table -->
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text"></th>
      <th class="space"></th>
      <th class="itemb">
        Smart Defrag <strong>Free</strong>
      </th>
      <th class="space"></th>
      <th class="itema">
        Smart Defrag <strong>PRO</strong>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
      <td class="virtue">Grundlæggende defragmentering og optimering af din harddisk</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
      <td class="virtue"> Ingen afbrydelse mens du arbejder eller spiller, når du bruger 'lydløs' tilstand</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
      <td class="virtue"><span> Toptunet spiloplevelse med spiloptimering</span</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
      <td class="virtue">Planlagt opgave-understøttelse for inaktiv defragmentering</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""/></td>
      <td class="virtue">	Op til 200% hurtigere adgang til filer</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
      <td class="virtue">	Start-defragmentering for en hurtigere systemstart</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
      <td class="virtue">	Automatisk og intelligent defragmentering af fragmenterede filer</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""/></td>
      <td class="virtue">	Tilpasning af defragmenteringsmetode og valg af hvilke diske eller filer, der skal defragmenteres</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
      <td class="virtue">	DMA anvendt til bedre, hurtigere og mere stabil dataoverførsel</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""/></td>
      <td class="virtue">	Automatisk opdatering til den nyeste version</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""/></td>
      <td class="virtue">	Gratis 24/7 teknisk support ved behov</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- review start -->
<div class="review wrapper">
  <div class="content">
    <dl>
      <dt>
        <h3>Anmeldelser fra brugere</h3></dt>
      <dd>
        <h4>
          "At have min "Smart Defrag 5 Pro" indstillet til automatisk defragmentering og til at køre "Defragmnter og optimer" en gang om ugen holder det mit system kørende gnidningsløst og godt."
        </h4>
      </dd>
      <dd>
        "Jeg har brugt Iobit-produkter i mange år nu. Fordi jeg bruger en ældre maskine med 6 drev, herunder 2 eksterne, finder jeg, at Iobits "Smart Defrag Pro" har hjulpet mig rigtig godt. Mit ældre computersystem er tilbøjeligt til hurtigt at blive fragmenteret. Når jeg har "Smart Defrag Pro", der er indstillet til automatisk defragmentering og til at køre "Defragmnter og optimer" en gang om ugen, holder det mit system kørende gnidningsløst og godt. Iobit opdaterer løbende og stræber hele tiden efter at lave produkter, der bliver bedre og bedre. Jeg er rigtig godt tilfreds med dette produkt."
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>Anmeldelser fra brugere</h3></dt>
      <dd>
        <h4>"Det er nemt at bruge, et "must have", til din harddisk eller SSD."</h4>
      </dd>
      <dd>
        "Jeg kører en kombination af RAID 0 SSD'er og RAID 0 HDD'er og bruger Smart Defrag Pro til at analysere, defragmentere og holde mine drev kørende med høj ydeevne. Som med alle IObit-programmer er det nemt at installere og bruge, og det er meget pålideligt. Når det er indstillet, behøver du ikke tænke mere på det. Smart Defrag har et meget lille hukommelsesforbrug, så det vil ikke sløve dit system. Det anbefales helt bestemt!"
      </dd>
    </dl>
    <dl class="active">
      <dt>
        <h3>Anmeldelser fra medier</h3></dt>
      <dd>
        <h4>
          "IObit Smart Defrag er det bedste defragmenteringsprogram, vi har prøvet til dato."
        </h4>
      </dd>
      <dd>
        "IObit Smart Defrag optimerer din pc for fuldt ud at udnytte SSD-ydeevnen, ved at defragmenterer dine harddiske. Dens SSD-trim-værktøj gør det muligt automatisk at tilpasse system-tweaks, der ellers ville kræve eksperterfaring. Smart Defrags opdateringer indeholder en ny defragmenteringsmotor, specialiseret spildefragmentering, et flot nyt udseende og mange flere sprogindstillinger (flere end 35)."
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>Anmeldelser fra brugere</h3></dt>
      <dd>
        <h4>
          "Med Smart Defrag får man en mere robust og præcis diagnose end med Windows 10 Optimizer"
        </h4>
      </dd>
      <dd>
        "Jeg har brugt Smart Defrag, siden det kom frem, på flere pc'er og helt fra starten, sammen med medlemmerne af min computerklub kunne vi se de løbende forbedringer. Det var perfekt til dem, lige bortset fra det engelske sprog. Så jeg investerede i den franske oversættelse for IObit. Fra nu af anbefaler de franske IT-blade varmt Smart Defrag, sammenlignet med Windows 10 Optimiser, for at give en mere robust og præcis diagnose med mulighed for også at fremskynde systemets opstart."
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>Anmeldelser fra brugere</h3></dt>
      <dd>
        <h4>
          "Smart Defrag er et stort aktiv for mit system, og det gør alt, hvad jeg har brug for og vil have det til at gøre."
        </h4>
      </dd>
      <dd>
        "Jeg ved ikke, hvordan jeg kunne være mere tilfreds med Smart Defrag. Det virker som en drøm hver gang, og alt jeg skal gøre er at køre programmet og alt er rent og jeg er absolut 100% tilfreds, ikke kun med programmet, men også med det hurtige svar, da jeg havde brug for råd om, hvordan man kunne håndtere de problemer, jeg havde. Det sætter jeg meget stor pris på."
      </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="William Howes">
      </div>
      <p>William Howes</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></div>
      <p>Edward Lee Ah Yen</p>
    </li>
    <li class="active">
      <div class="pic"><img src="<?php echo getStaticUrl('images/cnet-cnet.png')?>" alt="Cnet">
      </div>
      <p>Cnet</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland LALIS">
      </div>
      <p>Roland LALIS</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten">
      </div>
      <p>Jim Parten</p>
    </li>
  </ul>
</div>
<!-- review end -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- box -->
    <div class="box fl">Smart Defrag PRO</div>
    <!-- bottombuy-mid -->
    <div class="bottombuy-mid fl">
      <!-- off -->
      <div class="off"></div>
    </div>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price white"><span><big>129</big> <sup> kr.</sup></span> <del> 588 kr.</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=dk-sd6isu129&ref=dk_sd7isusale2101-i-u-l-e<?= $refStr; ?>&refs=dk_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcbundlepurchase2101-dk') ">
          <i class="all-icons"></i> Køb nu
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl class="astisfait fl">
    <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
    <dd>
      <h3>Tilfredshedsgaranti</h3>
      <p>60-dages pengene-tilbage-garanti</p>
    </dd>
  </dl>
  <dl class="paiement fl">
    <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
    <dd>
      <h3>Betalingssikkerhed</h3>
      <P>Din betaling er 100% sikker</P>
    </dd>
  </dl>
  <dl class="modes fl">
    <dt><img src="<?php echo $pResUrl; ?>images/shop-box.png" alt=""></dt>
    <dd>
      <h3>Hurtig aktivering</h3>
      <p>Du vil modtage en aktiveringskode <br> hurtigt efter betalingen</p>
    </dd>
  </dl>
  <dl class="service-client fr">
    <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
    <dd>
      <h3>Kundeservice</h3>
      <p>Gratis 24/7 teknisk support ved behov</p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer -->
<div class="footer wrapper">
  <div class="notes">
    <p>Note:</p>
    <p>*. Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</p>
    <p>*. IObit Software Updater giver understøttlese i 1 år til 1 PC.</p>
  </div>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Alle rettigheder forbeholdes</p>
</div>
<!-- footer end -->

<!-- float -->
<div class="float">
  <p>
    rabat
    <b>-78%</b>
    Nytårssalg
  </p>
  <!-- buybtn -->
  <a class="buybtn small"
     href="https://www.iobit.com/buy.php?product=dk-sd6isu129&ref=dk_sd7isusale2101-i-u-l-e<?= $refStr; ?>&refs=dk_purchase_sd"
     onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcbundlepurchase2101-dk') ">
    Køb nu
  </a>
  <!-- close -->
  <a class="close" href="javascript: closeFloat();">×</a>
</div>
<!-- end float -->

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/TweenMax.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>