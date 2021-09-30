<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
$ref1pc='plaff_asc12_2019buy1pc';
$ref3pc='plaff_asc12_2019buy3pc';
if(!empty($_GET['ref'])){
  $ref1pc=$ref3pc=$_GET['ref'];
}
include $pRootUrl.'include/common.inc.php';

$reduceNum=74041325;
$buyNum = number_format(ceil(microtimeFloat()*1000/20000) - $reduceNum,0,'.',' ');
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
<html lang="pl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Aktywuj Advanced SystemCare PRO teraz, i spraw aby Twój powolny komputer działał z maksymalną wydajnością</title>
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
        <span>Aktywujesz:</span>
        <h1>Advanced SystemCare 12 PRO</h1>
        <p>Kup teraz, aby odmłodzić swój powolny komputer i sprawić, by działał <br> z maksymalną wydajnością!</p>
      </dd>
    </dl>
    <div class="right fr">
      <p>“Advanced SystemCare ma na celu zaradzenie wszystkim dolegliwościom twojego komputera”</p>
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
      <h2>Licencja na 1 rok / 1 komputer</h2>
      <!-- details -->
      <ul>
        <li><i></i>Całkowite czyszczenie komputera</li>
        <li><i></i>Dostrajanie systemu</li>
        <li><i></i>Pełna ochrona prywatności</li>
        <li><i></i>Automatyczne czyszczenie RAM</li>
        <li><i></i>Darmowe aktualizacje</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>54,90 <small>zł</small></strong>  <del>109,80 zł</del></p>
        <!-- 1pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=plaff-asc121pc5490&ref=<?php echo $ref1pc;?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'plaffasc122019buy1pc');">
          Dodaj do koszyka
        </a>
      </div>
    </div>

    <!-- 3PC BOX -->
    <div class="box pcs">
      <!-- computer -->
      <img src="<?php echo getStaticUrl('images/computer-pcs.png')?>" alt="" />
      <!-- title -->
      <h2>Licencja na 1 rok / 3 komputery</h2>
      <!-- detailes -->
      <ul>
        <li><i></i>Całkowite czyszczenie komputera</li>
        <li><i></i>Dostrajanie systemu</li>
        <li><i></i>Pełna ochrona prywatności</li>
        <li><i></i>Automatyczne czyszczenie RAM</li>
        <li><i></i>Darmowe aktualizacje</li>
      </ul>
      <div class="price">
        <!-- price -->
        <p><strong>79,90 <small>zł</small></strong>  <del>199,75 zł</del></p>
        <!-- 3pc buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=plaff-asc123pc7990&ref=<?php echo $ref3pc;?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'plaffasc122019buy3pc')">
          Dodaj do koszyka
        </a>
        <p class="people"><i></i><b class="buynum"><?php echo $buyNum;?></b> osóbkupiło </p>
      </div>
    </div>
  </div>
  <!-- offer end -->

  <!-- payment start -->
  <div class="payment">
    <span>Akceptujemy</span>
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt="" /></dt>
      <dd>
        <h2>60-DNIOWA GWARANCJA ZWROTU PIENIĘDZY</h2>
        <p>
          Jeśli nie będziesz zadowolony z Advanced SystemCare PRO, otrzymasz pełny zwrot pieniędzy w ciągu 60 dni od momentu <br> zakupienia.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt="" /></dt>
      <dd>
        <h2>BEZPIECZNA PŁATNOŚĆ</h2>
        <p>
          Dokładamy wszelkich starań, aby chronić Twoje dane osobowe za pomocą zaawansowanego szyfrowania i ochrony przed spamem.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt="" /></dt>
      <dd>
        <h2>BEZPŁATNE WSPARCIE TECHNICZNE 24/7</h2>
        <p>
          Nasz zespół wsparcia premium odpowie na wszelkie pytania dotyczące naszych produktów w ciągu 24 godzin.
        </p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt="" /></dt>
      <dd>
        <h2>BEZPŁATNE AKTUALIZACJE</h2>
        <p>
          Wszystkie aktualizacje oprogramowania otrzymasz bezpłatnie w okresie subskrypcji.
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
        <h2>Recenzja użytkownika</h2>
        <h3>"Usunął szpiegujące i złośliwe oprogramowanie, które mój program antywirusowy przepuścił."</h3>
        <p>"Kiedyś korzystaliśmy z kilkunastu różnych programów, aby zapewnić płynne działanie naszych komputerów i nie wpuszczać do nich niechcianych gości. Każdego tygodnia poświęcaliśmy wiele godzin na utrzymanie bezpieczeństwa i wydajności. Teraz, dzięki Advanced System Care Pro, wystarczy nam jedynie kilka minut, aby wykonać te same prace z dużo większą efektywnością."</p>
      </div>
      <!-- 02 -->
      <div class="reviews clearfix active">
        <h2>Recenzje mediów</h2>
        <h3>"Advanced Systemcare har til formål at kurere hvad end din computer fejler."</h3>
        <p>"Nie ma nic gorszego niż komputer, który jest tak mocno zapchany, że przeszkadza w pracy lub graniu w gry. Advanced Systemcare ma na celu zaradzenie problemom komputera, nie tylko usuwając niepotrzebne pliki, złośliwe oprogramowanie i nieprawidłowe wpisy rejestru, ale także dając komputerowi impuls do optymalizacjijego działania."</p>
      </div>
      <!-- 03 -->
      <div class="reviews clearfix">
        <h2>Recenzja użytkownika</h2>
        <h3>"Moim wyborem numer jeden jest niezmiennie Advanced SystemCare Pro."</h3>
        <p>"Jako informatyk uważam, że ASC free rozwiązuję wszystkie najczęściej spotykane problemy komputera. Po zakończeniu naprawy zazwyczaj sugeruję klientowi zakup pakietu Pro. Kto potrzebuje informatyka, gdy można polegać na Advanced System Care Pro 24-7? To najlepszy produkt dla zwyczajnych użytkowników. Dziękuję za ułatwienie mojej pracy."</p>
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
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</div>
<!-- footer end -->

<!-- mask start -->
<div class="mask">
  <div class="mask-box">
    <div class="plana">
      <p>GRATULACJE! Du er den heldige besøgende i dag!</p>
      <p>Jesteś dzisiejszym szczęśliwym odwiedzającym! <br>
        Tylko przez ograniczony czas, otrzymasz <b>25%</b> rabatu!</p>
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