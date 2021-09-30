<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='nlaff_asc13_2020buya1pc';
$ref3pc='nlaff_asc13_2020buya3pc';
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
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Activeer Advanced SystemCare PRO Nu om Weer het Maximale Uit Uw Trage PC te Halen</title>
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
        <span>U activeert:</span>
        <h1>Advanced SystemCare 13 PRO</h1>
        <p>Koop nu om weer het maximale uit uw trage pc te halen!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>“Advanced Systemcare streeft ernaar al uw computerproblemen op te lossen”</p>
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
      <h2>1 Jaar / 1 PC Licentie</h2>
      <!-- details -->
      <ul>
        <li><i></i>Maximale pc-opschoning</li>
        <li><i></i>Systeemoptimalisatie</li>
        <li><i></i>Volledige Privacy Bescherming</li>
        <li><i></i>Automatisch RAM Opschonen</li>
        <li><i></i>Gratis Updates</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong><small>€</small>14,99</strong> <del>€29,99</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nlaff-asc131pc1499&ref=nlaff_asc13_2020buya1pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'nlaffasc132020buya1pc')">
          Activeer Nu!
        </a>
      </div>
    </div>

    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1 Jaar / 3 PC’s Licentie</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Maximale pc-opschoning</li>
        <li><i></i>Systeemoptimalisatie</li>
        <li><i></i>Volledige Privacy Bescherming</li>
        <li><i></i>Automatisch RAM Opschonen</li>
        <li><i></i>Gratis Updates</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong><small>€</small>19,99</strong> <del>€49,98</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nlaff-asc133pc1999&ref=nlaff_asc13_2020buya3pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'nlaffasc132020buya3pc')">
          Activeer Nu!
        </a>
        <p class="people"><i></i> <b class="buynum"><?php echo $buyNum;?></b> keer geactiveerd</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>Wij accepteren</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>60 DAGEN NIET-GOED-GELD-TERUGGARANTIE</h2>
        <p>
          Als je niet tevreden bent met Advanced SystemCare PRO kun je binnen 60 dagen het volledige bedrag terugkrijgen.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>VEILIG BETALING</h2>
        <p>
          Wij zetten ons volledig in om uw persoonlijke info te beschermen met geavanceerde versleuteling en anti-spam bescherming.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>GRATIS 24/7 TECHNISCHE ONDERSTEUNING</h2>
        <p>
          Ons support team zal al uw vragen over onze producten binnen 24 uur beantwoorden.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>GRATIS UPDATES</h2>
        <p>
          Gedurende uw abonnementsperiode krijgt u gratis alle software updates.
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
        <h2>Gebruikersreview</h2>
        <h3>"Verlost van Spyware en Malware die mijn antivirus doorliet"</h3>
        <p>"Wij gebruikten een tiental verschillende programma’s om onze apparaten snel te houden en hackers buiten de deur te houden. Het kostte elke week uren om de beveiliging en prestaties op peil te houden. Maar nu met Advanced System Care Pro, zit alles in één programma en kost het slechts een paar minuten per week om hetzelfde te doen met meer zekerheid dan voorheen."</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Media Review</h2>
        <h3>“Advanced Systemcare streeft ernaar al uw computerproblemen op te lossen”</h3>
        <p>"Er is niets vervelender dan een computer die zo traag is geworden dat uw werk en games eronder lijden. Advanced Systemcare lost al uw computerproblemen op door junk files, malware en ongeldige register items op te schonen engeeft uw computer een boost om de gebruikservaring te optimaliseren."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>Gebruikersreview</h2>
        <h3>"Ik ben nog altijd overtuigd van mij keuze voor Advanced SystemCare Pro"</h3>
        <p>"Als ICT'er merk ik dat tijdens het repareren van computers, veel problemen worden opgelost door te scannen met ASC. Na de reparatie raad ik de klanten meestal het ASC PRO-pakket aan. Wie heeft er nog een technicus nodig als de klantenservice van Advanced SystemCare PRO 24 uur per dag beschikbaar is. Dit is het beste product dat een thuisgebruiker kan kopen. Bedankt dat jullie mijn werk een stuk makkelijker maken!"</p>
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
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit.Alle Rechten Voorbehouden</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="close" onclick="maskClose()">x</div>
  </div>
</div>
<!-- mask end -->

<script>var imgSrc = "<?php echo getStaticUrl('images/off.png')?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>