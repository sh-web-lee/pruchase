<?php
//一下为必须开头代码片段
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
//创建浮点计算，取 购买人数 及 剩余礼品数，根据情况选择使用
function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
// 剩余礼品数
$packsNum = ceil(microtime_float()*2000/20000);
//礼品数最大值（根据需求的数量来确定）
$packsCount=360;
$packsNum = $packsCount-($packsNum%$packsCount);
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit;
}
?>

<!DOCTYPE html>
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Eksklusive 1028 kr. rabat på Advanced SystemCare PRO og få 2 ekstra gaver gratis!</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
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
    <!-- countdown -->
    <p class="countdown">
      Timer:
      <strong>00</strong> Dage
      <strong>00</strong> T:
      <strong>00</strong> M:
      <strong>00</strong> S:
      <strong>000</strong> Ms
    </p>
    <!-- title -->
    <h1>Begrænset tilbud – få glæde af en PC-ydeevne der er i top i et år</h1>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- small-message -->
      <dl class="small-message fl">
        <dt>
          <img class="box" src="<?php echo getStaticUrl('images/asc1pc.png')?>" alt="Advanced SystemCare PRO">
        </dt>
        <dd>
          <!-- price -->
          <p class="price">
            <span>Standard</span>
            <b>179 kr. </b>
            <small>1 år, 1 pc</small>
          </p>
          <!-- list -->
          <ul>
            <li><span><i class="all-icons"></i> En bruger</span></li>
            <li><span><i class="all-icons"></i> Spar 170 kr.</span></li>
          </ul>
          <!-- 1pc buybtn -->
          <a class="buybtn yellow"
             href="https://www.iobit.com/buy.php?product=dk-asc131pc179&ref=dk_asc131pcpurchase201910&refs=dk_purchase_asc"
             onclick="ga ('send', 'event', 'ascbuy', 'buy', 'ascpurchase19101pc-dk')">
            <span><i class="all-icons"></i> Køb nu</span>
          </a>
        </dd>
      </dl>

      <!-- large-message -->
      <dl class="large-message fl">
        <dt>
          <img src="<?php echo getStaticUrl('images/asc3pcgift.png')?>" alt="Advanced SystemCare PRO + Protected Folder + Smart Defrag Pro">
        </dt>
        <dd>
          <!-- price -->
          <p class="price">
            <span><i class="all-icons"></i> Premium</span>
            <b>199 kr. <del>1227kr.</del></b>
            <small>1 år, 3 pc`er</small>
          </p>
          <!-- list -->
          <ul>
            <li><span><i class="all-icons"></i> Op til tre brugere</span></li>
            <li><span><i class="all-icons"></i> Spar 1028 kr. </span></li>
            <li><span><i class="all-icons gift"></i> Smart Defrag PRO</span></li>
            <li><span><i class="all-icons gift"></i> Protected Folder</span></li>
          </ul>
          <!-- 3pc+gifts buybtn -->
          <a class="buybtn yellow large"
             href="https://www.iobit.com/buy.php?product=dk-asc133pcsdpf199&ref=dk_asc13sdpfpurchase1910&refs=dk_purchase_asc"
             onclick="ga ('send', 'event', 'ascbuy', 'buy', 'ascpurchase1910bundle-dk')">
            <span><i class="all-icons"></i> Køb nu</span>
          </a>
        </dd>
      </dl>

      <!-- small-message -->
      <dl class="small-message fr">
        <dt>
          <img class="box" src="<?php echo getStaticUrl('images/asc3pc.png')?>" alt="Advanced SystemCare PRO">
        </dt>
        <dd>
          <!-- price -->
          <p class="price">
            <span>Gruppe</span>
            <b>199 kr. </b>
            <small>1 år, 3 pc`er</small>
          </p>
          <!-- list -->
          <ul>
            <li><span><i class="all-icons"></i>Op til tre brugere</span></li>
            <li><span><i class="all-icons"></i>Spar 250 kr.</span></li>
          </ul>
          <!-- buybtn -->
          <a class="buybtn yellow"
             href="https://www.iobit.com/buy.php?product=dk-asc133pc199&ref=dk_asc133pcpurchase201910&refs=dk_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase19103pc-dk')">
            <span><i class="all-icons"></i> Køb nu</span>
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <div class="content">
      <!-- 01 -->
      <dl class="one clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
        <dd class="fl">
          <h3>Auto</h3>
          <p>
            Stopper automatisk processer der ikke <br>
            bruges for at frigive RAM og forbedre PC-ydeevnen.
          </p>
        </dd>
      </dl>
      <!-- 02 -->
      <dl class="two clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
        <dd class="fl">
          <h3>200%*</h3>
          <p>
            Reducer system flakker <br>
            og forøg hastigheden med op til 200%.
          </p>
        </dd>
      </dl>
      <!-- 03 -->
      <dl class="three clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
        <dd class="fl">
          <h3>Sikrere Browsing</h3>
          <p>
            Rydder automatisk browsing data og skjuler <br>
            digitale fingeraftyk for at undgå ondsindet tracking.
          </p>
        </dd>
      </dl>
      <!-- 04 -->
      <dl class="four clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
        <dd class="fl">
          <h3>300%*</h3>
          <p>
            Accelerer download, surfing, <br>
            gaming, YouTube streaming med op til 300%.
          </p>
        </dd>
      </dl>
      <!-- 05 -->
      <dl class="five clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
        <dd class="fl">
          <h3>Sikring af private data</h3>
          <p>
            Hold dine følsomme data såsom kontakter, <br>
            e-mail data, Dropbox, OneDrive m.fl. væk fra ukendt adgang.
          </p>
        </dd>
      </dl>
      <!-- 06 -->
      <dl class="six clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
        <dd class="fl">
          <h3>Grundigere</h3>
          <p>
            Ret problemer i databasen og <br>
            reducer Windows-nedbrydninger og fejlmeddelelser.
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- arrow -->
  <span class="arrow">↓</span>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts wrapper clearfix">
  <h2>Hvilke ekstra fordele vil du få med vores 3-i-1-Premium udgave?</h2>
  <!-- asc -->
  <dl class="fl asc">
    <dt><img src="<?php echo getStaticUrl('images/gifts-asc.png')?>" alt="Advanced SystemCare PRO"></dt>
    <dd>
      <h4>Advanced SystemCare PRO</h4>
      <del>449 kr</del>
      <p><i class="all-icons"></i> Profesionel optimering til hele <br> families PC’ere!</p>
    </dd>
  </dl>
  <!-- sd -->
  <dl class="fl sd">
    <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"></dt>
    <dd>
      <h4>Smart Defrag PRO</h4>
      <del>379 kr</del>
      <p><i class="all-icons"></i> Maks Hard Drive Optimering for <br> hurtigere PC</p>
    </dd>
  </dl>
  <!-- pf -->
  <dl class="fl pf">
    <dt><img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"></dt>
    <dd>
      <h4>Protected Folder</h4>
      <del>349 kr</del>
      <p><i class="all-icons"></i> Beskyt dine personlige filer og hold <br> dem fra ondsindede angreb!</p>
    </dd>
  </dl>
  <!-- clear -->
  <div class="clear"></div>
  <!-- gifts-buy -->
  <table>
    <tr>
      <td rowspan="2" class="box">
        <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare PRO + Protected Folder + Smart Defrag Pro">
      </td>
      <td>
        <p class="price">199kr. <del>1227kr.</del></p>
      </td>
    </tr>
    <tr>
      <td>
        <!-- 3pc+gifts buybtn -->
        <a class="buybtn red"
           href="https://www.iobit.com/buy.php?product=dk-asc133pcsdpf199&ref=dk_asc13sdpfpurchase1910&refs=dk_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1910bundle-dk')">
          <span><i class="all-icons"></i> Aktiver nu</span>
        </a>
      </td>
    </tr>
  </table>
</div>
<!-- end gifts -->

<!-- service -->
<div class="service">
  <div class="wrapper clearfix">
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      <dd class="fl">
        <p>Prøv det RISIKOFRT – med vores 60 dages </p>
        <p>
          tilfredsgaranti eller pengene retur. Vi er sikre på at <br>
          aktiveringen af PRO-udgaven vil forbedre din PC’s
        </p>
      </dd>
    </dl>
    <dl class="fr">
      <dd><p>Vi tager imod følgende betalingsmetoder</p></dd>
      <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <!-- content -->
    <div class="content">
      <!-- list -->
      <div class="review-list">
        <!-- Richard Beavers-->
        <div>
          <h3>Brugeranmeldelser</h3>
          <p>"Jeg har prøvet diverse programmer over tiden som har lovet at holde min computer problemfri. Jeg vendte mig mod ASC for år tilbage ved at bruge den gratis udgave først. Jeg fandt, at jeg ikke længere oplevede småproblemer og opgraderede derfor til den betalte version og har aldrig set mig tilbage igen. Advanced SystemCare Pro er det eneste værktøj jeg vil anbefale baseret på mine oplevelser. Jeg bruger også IObit Uninstaller, Smart Defrag og Driver Booster gør virkelig en forskel."</p>
        </div>
        <!-- Patsy Clark -->
        <div>
          <h3>Brugeranmeldelser</h3>
          <p>"Advanced SystemCare er et skønt program. Jeg har brugt dette i mange år og det virker helt uden problemer. De forbedrer altid deres produkter som bare bliver bedre med årene. Jeg bruger mange af deres produkter og alt virker som det skal."</p>
        </div>
        <!-- Danny R. Sheets -->
        <div>
          <h3>Brugeranmeldelser</h3>
          <p>"Jeg har aldrig fundet et bedre vedligeholdelsesprogram til computeren eller et bedre sikkerhedsprogram end Advanced SystemCare. Siden jeg har købt det, har jeg aldrig haft problemer med viruser, phishing, sorte skærme eller noget som helst andet man kan komme i tanke om, den bedste investering jeg har gjort mig, når det kommer til computere, tak ASC for at gøre min computeroplevelse så meget skønnere."</p>
        </div>
        <!-- Cnet -->
        <div class="active">
          <h3>Medieanmeldelser</h3>
          <p>"Der er ikke noget værre end en computer, der driller så meget, at det forhindrer dig i at arbejde eller i at spille. Avanceret SystemCare har til formål at afhjælpe hvad som helst, der måtte være galt med din computer - ikke kun ved at rydde op, fjerne uønskede filer, malware og ugyldige registreringsposter, men også ved at give din computer et løft for at optimere din pc-oplevelse."</p>
        </div>
        <!-- Tony Fisher -->
        <div>
          <h3>Brugeranmeldelser</h3>
          <p>"Jeg har brugt Advanced SystemCare Pro i lang tid og den seneste version 13 er endnu bedre end version 12. Det identificerer og retter problemer hurtigt og har så mange ekstra funktioner, som du kan bruge til at holde din computer stabil. Kan kun anbefales varmt."</p>
        </div>
        <!-- Daniel Sanders-->
        <div>
          <h3>Brugeranmeldelser</h3>
          <p>"Den nye ASC 13 er et must-have for alle computer-brugere. Dets overskuelige og intuitive interface gør det nemt at bruge for både nye og gamle brugere. Mange effektive værktøjer holder din PC i topform. Godt gået IObit for at have samlet så mange skønne værktøjer på et sted."</p>
        </div>
        <!-- Richard Preston -->
        <div>
          <h3>Brugeranmeldelser</h3>
          <p>"Jeg elsker at bruge Avanced SystemCare 13 Beta. Det er hurtigt, det rydder for private dataspor, junkfiler og registrerede fragmenter. jeg kan især godt lide pop-up vinduet som beder om adgang til følsomme data. Den første gang en app forsøger at få adgang til dine følsomme filer, åbner et vindue med mulighed for enten at tillade eller forhindre adgang. Når adgang er blevet givet til en app, åbnes vinduet ikke igen for denne app. Jeg ved, at mine følsomme filer er opbevaret sikkert."</p>
        </div>
      </div>
      <!-- review-arrow -->
      <span class="review-arrow"></span>
      <!-- user-list -->
      <ul class="clearfix">
        <li>
          <img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="">
          <p>Richard Beavers</p>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="">
          <p>Patsy Clark</p>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="">
          <p>Danny R. Sheets</p>
        </li>
        <li class="active">
          <img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="">
          <p>Cnet</p>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="">
          <p>Tony Fisher</p>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="">
          <p>Daniel Sanders</p>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="">
          <p>Richard Preston</p>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- end review -->

<!-- bottom-buy -->
<div class="bottom-buy">
  <div class="wrapper clearfix">
    <h2>SPAR 85%, aktiver nu og få glæde af en hurtigere og mere problemfri PC!</h2>
    <ul class="fl">
      <li class="one"
          data-url="https://www.iobit.com/buy.php?product=dk-asc131pc179&ref=dk_asc131pcpurchase201910&refs=dk_purchase_asc&tw=8"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', ascpurchase19101pc-dk')"
          data-price="179kr."
          data-del=" ">
        <span><i class="all-icons"></i>ASC 1 år, 1 pc</span>
      </li>
      <li class="two active"
          data-url="https://www.iobit.com/buy.php?product=dk-asc133pcsdpf199&ref=dk_asc13sdpfpurchase1910&refs=dk_purchase_asc&tw=8"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', ascpurchase1910bundle-dk')"
          data-price="199kr."
          data-del="1227kr.">
        <span><i class="all-icons"></i>ASC 1 år, 3 pc`er   +SD &PF </span>
      </li>
      <li class="three"
          data-url="https://www.iobit.com/buy.php?product=dk-asc133pc199&ref=dk_asc133pcpurchase201910&refs=dk_purchase_asc&tw=8"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', ascpurchase19103pc-dk')"
          data-price="199kr."
          data-del=" ">
        <span><i class="all-icons"></i>ASC 1 år, 3 pc`er</span>
      </li>
    </ul>
    <dl class="fr">
      <dt>
          <p class="countdown2">
            Skynd dig!
            <strong>00</strong>Dage
            <strong>00</strong>T:
            <strong>02</strong>M:
            <strong>29</strong>S:
            <strong>50</strong>Ms 
            tilbage
            <i class="all-icons"></i>
          </p>
      </dt>
      <dd>
        <div class="box fl">
          <img src="<?php echo getStaticUrl('images/bottom-box.png')?>" alt="Advanced SystemCare PRO">
        </div>
        <div class="else fl">
          <p class="price">199kr. <del>1227kr.</del></p>
          <!-- 3pc+gifts buybtn -->
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=dk-asc133pcsdpf199&ref=dk_asc13sdpfpurchase1910&refs=dk_purchase_asc"
             onclick="ga ('send', 'event', 'ascbuy', 'buy', 'ascpurchase1910bundle-dk')">
            <span><i class="all-icons"></i> Aktiver nu</span>
          </a>
        </div>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottom-buy -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dd>Note:</dd>
    <dd>*.Data kan variere alt efter system og computer.</dd>
    <dd>*.Sådanne promoveringsprogrammer kan ændres uden varsel fra tid til anden. IObit forholder sig suve from time to time in our sole discretion.</dd>
    <dd>*.Smart Defrag PRO / Protected Folder understøtter 1 års abonnement / 1 PC.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
</div>
<!-- end footer -->

<!-- float -->
<div class="float">
  <strong class="packsNum"><?php echo $packsNum ?></strong> brugere ser på denne side
</div>
<!-- end float -->

<!-- coupon -->
<div class="coupon">
  <div class="coupon-content">
    <p>
      Tillykke! <br>
      Du er blevet udvalgt til at vinde 10 kr. ekstra rabat
    </p>
    <p>
<!--      Skynd dig, dette tilbud er tilgængeligt i <b class="countdown3">50</b> s-->
    </p>
    <p>
      Salgspris: <b>189 kr.</b> <br>
      Oprindelig pris: 1227 kr.
    </p>
    <a class="close" href="javascript: couponHide();">X</a>
    <!-- coupon buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=dk-asc133pcsdpf189&ref=dk_asc13sdpfpurchase1910popup&refs=dk_purchase_asc"
       onclick="ga ('send', 'event', 'ascbuy', 'buy', 'ascpurchase19103pc-dk')">
      <span><i class="all-icons"></i> Få det nu</span>
    </a>
  </div>
</div>
<!-- coupon -->


<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  function getPacksNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>&r="+Math.random(),
      success: function(packs){
        $('.packsNum').html(packs);
        setTimeout('getPacksNum()', 10000);
      }
    });
  }
  setTimeout('getPacksNum()', 10000)
</script>
</body>
</html>