<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='dkaff_asc14_2021buy1pc';
$ref3pc='dkaff_asc14_2021buy3pc';
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
<html lang="dk">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aktiver Advanced SystemCare PRO nu og få din langsomme computer op på fuld kapacitet</title>
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
        <span>Du aktiverer:</span>
        <h1>Advanced SystemCare 14 PRO</h1>
        <p>Køb nu og genopliv din langsomme computer. Med SystemCare 14 PRO kan <br> du få den op på fuld kapacitet!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>“Advanced Systemcare har til formål at kurere din computer for hvad end den fejler”</p>
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
      <h2>1 år / 1 PC-licens</h2>
      <!-- details -->
      <ul>
        <li><i></i>Ultimative rensing af PC’en</li>
        <li><i></i>Accelererer systemet</li>
        <li><i></i>Fuld beskyttelse af private data</li>
        <li><i></i>Automatisk oprydning af RAM</li>
        <li><i></i>Gratis opdateringer</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong><small>kr. </small>159</strong> <del>kr. 318</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dkaff-asc141pc159&ref=<?php echo $ref1pc;?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'dkaffasc142021buy1pc')">
          Føj til kurv
        </a>
      </div>
    </div>

    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1 år / 3 PC-licenser</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Ultimative rensing af PC’en</li>
        <li><i></i>Accelererer systemet</li>
        <li><i></i>Fuld beskyttelse af private data</li>
        <li><i></i>Automatisk oprydning af RAM</li>
        <li><i></i>Gratis opdateringer</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong><small>kr. </small>219</strong> <del>kr. 547</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dkaff-asc143pc219&ref=<?php echo $ref3pc;?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'dkaffasc142021buy3pc')">
          Føj til kurv
        </a>
        <p class="people"><i></i><b class="buynum"><?php echo $buyNum;?></b> personer har købt denne</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>Vi tager imod</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>60 dages tilfredsgaranti eller pengene retur</h2>
        <p>
          Er du ikke tilfreds med Advanced SystemCare PRO, kan du få fuld refundering for dit køb inden for 60 dage.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>SIKKER BETALING</h2>
        <p>Vi er dedikerede til at beskytte dine personlige oplysninger med avanceret enkryptering og anti-spam.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>GRATIS TEKNISK SUPPORT 24/7</h2>
        <p>
          Vores premium support team vil besvare ethvert spørgsmål du måtte have vedrørende vores produkter inden for 24 timer.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>GRATIS OPDATERINGER</h2>
        <p>
          Du vil få alle software-opdateringer inden for perioden du abonnerer uden ekstra omkostninger.
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
        <h2>Brugeranmeldelse</h2>
        <h3>"Ryddede bade Spyware og Malware som min anti-virus havde ladt smutte igennem."</h3>
        <p>"Vi plejede at bruge et dusin af forskellige programmer for at holde vores computere i stand og væk fra skurkene. Det tog timer hver uge at vedligholde sikkerheden og ydeevnen. Nu, med Advanced SystemCare Pro er alt samlet på et sted, tager det kun et par minutter med et par dages mellemrum at gøre det samme stykke arbejde meget mere effektivt."</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Medieanmeldelse</h2>
        <h3>"Advanced Systemcare har til formål at kurere hvad end din computer fejler."</h3>
        <p>"Der er ikke noget værre end en computer, der driller så meget, at det forhindrer dig i at arbejde eller spille. Avanceret SystemCare har til formål at afhjælpe hvad som helst, der måtte være galt med din computer ikke kun ved at rydde op, fjerne uønskede filer, malware og ugyldige registreringsposter, men også ved at give din computer et løft for at optimere din pc-oplevelse."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>Brugeranmeldelse</h2>
        <h3>"Advanced SystemCare Pro er uden tvivl stadig mit foretrukne valg."</h3>
        <p>"Som computertekniker oplever jeg, at de mest almindelige problemer bliver løst ved at downloade og scanne med ASC-fri. Når jeg er færdig med en reparation, foreslår jeg normalt, at kunden køber pro-pakken. Hvem har brug for en tekniker, når du har styrken i Advanced SystemCare Pro, som arbejder for dit system 24-7? Dette er det bedste produkt, som en hjemmebruger kan købe. Tak for at gøre mit job lettere."</p>
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
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rettigheder forbeholdes</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="plana">
      <p>TILLYKKE! Du er den heldige besøgende i dag!</p>
      <p>Få <b>25%</b> ekstra i rabat, gælder i en begrænset tidsperiode!</p>
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