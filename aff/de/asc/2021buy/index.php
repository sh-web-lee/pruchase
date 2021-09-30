<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='deaff_asc13_2021buy1pc';
$ref3pc='deaff_asc13_2021buy3pc';
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
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aktivieren Sie jetzt AdvancedSystemCare PRO, um ihren trägen PC zum Laufen zu bringen</title>
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
        <span>Sie aktivieren:</span>
        <h1>Advanced SystemCare 14 PRO</h1>
        <p>Kaufen Sie jetzt, um Ihren trägen PC zu erneuern und ihn mit maximaler <br> Kapazität laufen zu lassen!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>“Advanced Systemcare sorgt dafür, dass ihr Computer reibungslos läuft”</p>
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
      <h2>1 Jahr / 1 PC Lizenz</h2>
      <!-- details -->
      <ul>
        <li><i></i>Ultimative PC Reinigung</li>
        <li><i></i>System Tune-up</li>
        <li><i></i>Umfassender Datenschutz</li>
        <li><i></i>Automatische RAM Bereinigung</li>
        <li><i></i>Kostenlose Updates</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>17,99<small>€</small></strong> <del>35,98€</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=deaff-asc141pc1799&ref=deaff_asc14_2021buy1pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'deaffasc142021buy1pc')">
          In den Warenkorb legen
        </a>
      </div>
    </div>

    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>1 Jahr / 3 PCs Lizenz</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Ultimative PC Reinigung</li>
        <li><i></i>System Tune-up</li>
        <li><i></i>Umfassender Datenschutz</li>
        <li><i></i>Automatische RAM Bereinigung</li>
        <li><i></i>Kostenlose Updates</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>24,99<small>€</small></strong> <del>62,48€</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=deaff-asc143pc2499&ref=deaff_asc14_2021buy3pc&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'deaffasc142021buy3pc');">
          In den Warenkorb legen
        </a>
        <p class="people"><i></i><b class="buynum"><?php echo $buyNum;?></b> Menschen haben es bereits gekauft</p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>Wir bieten</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>60 TAGE GELD-ZURÜCK-GARANTIE</h2>
        <p>
          Wenn Sie mit AdvancedSystemCare PRO nicht zufrieden sind, erhalten Sie innerhalb von 60 Tagen eine vollständige Rückerstattung Ihres Kaufpreises.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>SICHERE BEZAHLUNG</h2>
        <p>
          Wir setzen uns dafür ein, Ihre persönlichen Daten durch fortschrittliche Verschlüsselung und Anti-Spam Schutz zu schützen.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>KOSTENLOSER 24/7 TECHNIK SUPPORT</h2>
        <p>
          Unser Premium Support Team beantwortet Ihre Fragen zu unseren Produkten innerhalb von 24 Stunden.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>KOSTENLOSE UPDATES</h2>
        <p>
          Während der Abonnementlaufzeit erhalten Sie alle Software-Updates kostenlos.
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
        <h2>Nutzerbewertung</h2>
        <h3>"Hat Spyware und Malware entfernt, die mein Antivirus Programm nicht erkannt hat"</h3>
        <p>"Früher haben wir diverse Programme genutzt, damit unsere PCs einwandfrei laufen und Gefahren zu vermeiden. Dies beanspruchte mehrere Stunden pro Woche, um die Sicherheit auf den Rechnern zu gewährleisten. Mit Advanced System Care Pro dauert jetzt alles nur wenige Minuten, um die gleiche Arbeit mit viel mehr Sicherheit zu machen."</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Medienbewertung</h2>
        <h3>"AdvancedSystemcare zielt darauf ab, alle Probleme Ihres Computers zu beheben."</h3>
        <p>"Es gibt nichts Schlimmeres als einen Computer, der so festgefahren ist, dass er Ihre Arbeits- oder Spielefähigkeit beeinträchtigt. AdvancedSystemcare zielt darauf ab, alle Probleme Ihres Computers zu beheben, indem nicht nur Junk-Dateien, Malware und ungültige Registrierungseinträge bereinigt werden, sondern indem Sie ihren PC beschleunigen und die Arbeit am PC verbessern."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>Nutzerbewertung</h2>
        <h3>"Ich bin immer noch sehr zufrieden mit meiner Wahl vonAdvancedSystemCare Pro"</h3>
        <p>"Als Computerreparaturtechniker finde ich, dass durch das Herunterladen und Scannen mit ASC Free die häufigsten Probleme behoben werden. Wenn eine Reparatur abgeschlossen ist, empfehle ich normalerweise dem Kunden, das Pro-Paket zu kaufen. Wer braucht einen Techniker, wenn Sie Advanced System Care Pro haben?" Dies ist das beste Produkt, das ein Heimanwender kaufen kann. Vielen Dank, dass Sie mir die Arbeit erleichtert haben."</p>
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
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
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