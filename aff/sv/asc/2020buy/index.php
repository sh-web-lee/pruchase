<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='svaff_asc13_2020buy1pc';
$ref3pc='svaff_asc13_2020buy3pc';
if(!empty($_GET['ref'])){
  $ref1pc=$ref3pc=$_GET['ref'];
}
include $pRootUrl.'include/common.inc.php';

$reduceNum=74041325;
$buyNum = number_format(ceil(microtimeFloat()*1000/20000) - $reduceNum);
if($_GET['action']=='maskCount'){
  $maskType=$_GET['maskType'];
  if(in_array($maskType,array(1,2))) {
    $buttonClick=$_GET['buttonClick'];
    $ip=empty($_GET['ip']) ? getIP() : $_GET['ip'];
    $time=time();
    try {
      $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
      $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
      $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      $pdo->query("set names utf8");

      $sql = "insert into affascmaskcount2019 (ip,addTime,maskType,buttonClick) values(:ip,:addTime,:maskType,:buttonClick)";
      $pre = $pdo->prepare($sql);
      $pre->bindParam(':ip', $ip);
      $pre->bindParam(':addTime', $time);
      $pre->bindParam(':maskType', $maskType);
      $pre->bindParam(':buttonClick', $buttonClick);
      $pre->execute();
    } catch (PDOException $e) {
      var_dump($e->getMessage());
    }
  }
  exit();
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aktivera Advanced SystemCare PRO Nu för att Göra Din Tröga Dator att Köra med Högsta Kapacitet</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
        success: function(packs){
          $('.buynum').html(packs);
          setTimeout('getBuyNum()', 20000);
        }
      });
    }
    setTimeout('getBuyNum()', 20000);
  </script>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <dl class="fl clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/ascbox.png')?>" alt="" /></dt>
      <dd class="fl">
        <span>Du aktiverar:</span>
        <h1>Advanced SystemCare 13 PRO</h1>
        <p>Köp nu för att föryngra din tröga dator och göra den att fungera med <br> högsta kapacitet!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>“Avanceradsystemvårdsyftar till att åtgärda vad som helst på din dator”</p>
      <img src="<?php echo getStaticUrl('images/clnet.png')?>" alt="" />
    </div>
  </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="wrapper">
  <!-- title -->
  <h2 class="title"></h2>
  <!-- offer start -->
  <div class="offer clearfix">
    <!-- 1PC BOX -->
    <div class="box pc">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
      <!-- title -->
      <h2>1 År / Licens för 1 Dator</h2>
      <!-- details -->
      <ul>
        <li><i></i>Ultimat Rengöring på Dator</li>
        <li><i></i>Systems Tuneup</li>
        <li><i></i>Fullständigt Integritetsskydd</li>
        <li><i></i>Automatisk Rengöring på RAM</li>
        <li><i></i>Gratis uppdateringar</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>219 <small>kr</small> </strong> <del>438 kr</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=svaff-asc131pc219&ref=<?php echo $ref1pc;?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'svaffasc132020buy1pc')">
          Lägg till i Kundvagn
        </a>
      </div>
    </div>

    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1 År / Licens för 3 Dator</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Ultimat Rengöring på Dator</li>
        <li><i></i>Systems Tuneup</li>
        <li><i></i>Fullständigt Integritetsskydd</li>
        <li><i></i>Automatisk Rengöring på RAM</li>
        <li><i></i>Gratis uppdateringar</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>309 <small>kr</small></strong> <del>772 kr</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=svaff-asc133pc309&ref=<?php echo $ref3pc;?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'svaffasc132020buy3pc')">
          Lägg till i Kundvagn
        </a>
        <p class="people"><i></i><b class="buynum"><?php echo $buyNum;?></b> personerharköpt</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>Vi accepterar</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>60 Dagars Pengar Tillbaka Garanti</h2>
        <p>
          Om du inte är nöjd med Advanced SystemCare PRO, kan du få pengar tillbaka under de första 60 dagarna.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>SÄKER BETALNING</h2>
        <p>
          Vi har åtagit oss att skydda din personliga information med avancerad kryptering och antispam skydd.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>GRATIS, 24/7 TECH STÖD</h2>
        <p>
          Vårautmärkta stödpersonal kommer att svara på dig inom 24 timmar för alla frågor du kan ha angående våra produkter.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>GRATIS UPPDATERINGAR</h2>
        <p>
          Du kommer att få alla programuppdateringar gratis under prenumerationsperioden.
        </p>
      </dd>
    </dl>
  </div>
  <!-- feature end -->
</div>
<!-- container end -->

<!-- review start -->
<div class="container bordertop clearfix">
  <div class="review wrapper">
    <div class="review-box">
      <!-- 01 -->
      <div class="reviews clearfix">
        <h2>Användarrecension</h2>
        <h3>"Rensade upp Spionprogram och Skadlig Programvara som Mitt antivirus utelämnar."</h3>
        <p>"Vi brukade använda ett dussin olika program för att få våra maskiner att fungera smidigt och hålla skurkarna ute. Det tog timmar varje vecka för att upprätthålla säkerhet och prestanda. Nu med Advanced System Care Pro är allt på ett ställe och det tar oss bara några minuter varje par dagar att göra samma jobb med mycket mer självförtroende."</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Media Recension</h2>
        <h3>"Advanced Systemcare syftar till att avhjälpa vad som helst på din dator."</h3>
        <p>"Det finns inget värre än en dator som kör fast så ofta att den hindrar din förmåga att arbeta eller spela. Advanced Systemcare syftar till att avhjälpa vad som helst på din dator genom att inte bara rensa upp skräpfiler, skadlig programvara och ogiltiga registerposter, utan ge din dator ett boost för att optimera din dators upplevelse också."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>Användarrecension</h2>
        <h3>"Mitt val är fortfarande överväldigande Advanced SystemCare Pro."</h3>
        <p>"Som datorreparatör hittar jag genom att ladda ner och skanna med ASC free att de vanligaste problemen löses. När jag är klar med en reparation föreslår jag vanligtvis att klienten köper Pro-paketet. Vem behöver en teknik när du har Advanced System Care Pro som underhåller ditt system dygnet runt? Detta är den bästa produkten som en hemanvändare kan köpa. Tack föratt du hargjort mitt jobbenklare."</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/bob-bassett.png" alt="Bob Bassett"><span></span></div>
        <strong>Bob Bassett</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"><span></span></div>
        <strong>Charles R. Widick</strong>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- footer start -->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Allarättigheterförbehållna</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="plana">
      <p>GRATTIS! Du er den heldige besøgende i dag!</p>
      <p>Du är dagens lyckliga besökare! Få <b> extra 25% rabatt </b> på en begränsad tid!</p>
      <div class="panel clearfix">

      </div>
    </div>
    <div class="close" onclick="maskClose()">x</div>
  </div>
</div>
<!-- mask end -->

<script>var imgSrc = "<?php echo getStaticUrl('images/off.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>