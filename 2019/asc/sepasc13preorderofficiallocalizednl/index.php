<?php
//一下为必须开头代码片段
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spectaculaire Voorverkoopkorting op Advanced SystemCare 13 PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed:300,400,700|Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- box -->
    <span class="box fl">Advanced SystemCare PRO</span>
    <!-- message -->
    <div class="message fr">
      <!-- title -->
      <h1>Spectaculaire Korting!</h1>
      <h3>Alleen tijdens de Voorverkoop</h3>
      <!-- countdown -->
      <p class="countdown">
        Nog maar
        <strong>00</strong> :
        <strong>07</strong> :
        <strong>33</strong> :
        <strong>11</strong>
      </p>
      <!-- price -->
      <p class="price">€<b>14</b><small>,99</small> <del>€49,99</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderofficialnl<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13preorderofficialnl-nl');">
        <span>Bestel Nu</span>
      </a>
      <!-- note -->
      <p class="note">
        U kunt direct na de bestelling aan de slag met de RC versie van Advanced SystemCare 13 PRO. Deze versie bevat vrijwel  alle functies van het nieuwe Advanced SystemCare 13. Bij de officiële lancering van Advanced SystemCare 13, laten we u weten dat u kunt updaten naar de definitieve versie.
      </p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>De Schoonste PC voor de Allerlaagste Prijs van het Jaar</h2>
    <!-- feature-message -->
    <ul class="message fl">
      <li>Verwijder <b>meer</b> overbodige <br> register items</li>
      <li>Verwijder <b>grondiger</b> alle <br> privacysporen</li>
      <li>Verwijder <b>meer</b> malware en <br> online bedreigingen</li>
    </ul>
    <!-- feature-machine -->
    <div class="machine fr">
      <div class="machine-box">
        <ul class="machine-list clearfix">
          <li class="active"><img src="<?php echo $pResUrl;?>images/screen01.png" alt=""></li>
          <li><img src="<?php echo $pResUrl;?>images/screen02.png" alt=""></li>
          <li>
            <img src="<?php echo $pResUrl;?>images/screen03.png" alt="">
            <img class="card" src="<?php echo $pResUrl;?>images/screen03-card.png" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl;?>images/screen04.png" alt="">
            <img class="card" src="<?php echo $pResUrl;?>images/screen04-card.png" alt="">
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- intro -->
<div class="intro">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Krijg als eerste de Nieuwste Functies</h2>
    <!-- intro 01 -->
    <dl class="fr">
      <dd>
        <h3>Beveilig uw e-mail <span class="all-icons">NIEUW</span></h3>
        <p>
          Voorkom spam, phishing en andere schadelijke e-mails <br>
          in uw web-based e-mail account.
        </p>
      </dd>
    </dl>
    <!-- intro 02 -->
    <dl class="fl">
      <dd class="fl">
        <h3>Bescherm uw privacy <span class="all-icons">NIEUW</span></h3>
        <p>
          Kies zelf welke privacygevoelige gegevens beschermd <br>
          moeten worden en voorkom dat uw gegevens op straat komen te liggen.
        </p>
      </dd>
    </dl>
    <!-- intro 03 -->
    <dl class="fr last">
      <dd>
        <h3>Betere Opschoning <span class="all-icons green">VERBETERD</span></h3>
        <p>
          Verwijder meer overbodige bestanden, beheer meer <br>
          opstart items en maak uw pc sneller.
        </p>
      </dd>
    </dl>
    <!-- intro-icon01 -->
    <img class="intro-icon icon01" src="<?php echo $pResUrl;?>images/intro-icon01.png" alt="">
    <!-- intro-icon02 -->
    <img class="intro-icon icon02" src="<?php echo $pResUrl;?>images/intro-icon02.png" alt="">
    <!-- intro-icon03 -->
    <img class="intro-icon icon03" src="<?php echo $pResUrl;?>images/intro-icon03.png" alt="">
  </div>
</div>
<!-- end intro -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
          <dd>
            <h2>Media recensie</h2>
            <p>"Er is niets vervelender dan een computer die zo vaak vastloopt dat het uw werk of online gamen belemmert. Advanced SystemCare heeft als doel om uw computer nieuw leven in te blazen. Niet alleen door het opruimen en verwijderen van ongewenste bestanden, malware, en ongeldige registerbestanden, maar ook door uw computer een boost te geven en de pc-prestaties te verbeteren."</p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>“Ik heb over de jaren verschillende programma’s geprobeerd die computers probleemloos zouden doen werken. Een paar jaar geleden ben ik bij ASC uitgekomen, in eerste instantie de gratis versie. Toen ik merkte dat ik eindelijk van alle computerproblemen en ergernissen af was, ben ik naar de betaalde versie overgestapt en hoef ik er niet meer naar om te kijken. Advanced SystemCare Pro is de enige die ik anderen zou aanbevelen, gebaseerd op mijn ervaring. Ik gebruik ook IObit Uninstaller, Smart Defrag en Driver Booster, dat maakt het nog gemakkelijker.”</p>
            <cite>Richard Beavers</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>“Advanced System Care is een geweldig programma.  Ik gebruik het al jaren en het werkt fantastisch. Ze verbeteren hun producten continu en het wordt alleen maar beter over de jaren. Ik gebruik meerdere IObit producten en ze werken allemaal volledig naar behoren.”</p>
            <cite>Patsy Clark</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/rej-visschers-bernabela.png')?>" alt="R.E.J Visschers-Bernabela"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>“Ik heb Advanced SystemCare 12 en de 13 beta, gedownload en uitgebreid getest (win 7). De uitstraling is mooi en overzichtelijk. De nieuwe functies zijn super.”</p>
            <cite>R.E.J Visschers-Bernabela</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/siegfried-van-hoek.png')?>" alt="Siegfried van Hoek"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Nr. 13 is mijn geluksgetal! Met Systemcare brengt Iobit niet slechts een vage update van versie12 uit, die net klaar is voor SSD. De architecture van SSD schijven gaf ruimte voor een nieuwe benadering in onderhoud en beveiliging met minder benodigde prestatietijd, terwijl ook HDD nog steeds aan zijn trekken komt. Natuurlijk kost het zoeken naar bestandsrestanten relatief meer tijd in vergelijk tot andere taken, want de fysieke C: schijf moet geheel uitgelezen worden, maar dan toch... En mijn favoriete tool aller-tijden de Ontbrekende Updates en Systeem Zwakheden Zoek-tool was echt heel alert, alleen daarom al adviseer ik alle vrienden die ik help altijd Iobit Sytemcare. Met versie 13 was het alsof ik een oude vriend terug ontmoette met een enthousisme net als toen ik ooit begon met Iobit Systemcare nr. 5. Welkom Iobit Sytemcare 13!"</p>
            <cite>Siegfried van Hoek</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <!-- title -->
    <h2>De Voordelen van Advanced SystemCare 13 PRO</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="text"><p></p></th>
          <th class="item-free"><p>Free</p></th>
          <th class="item-pro"><p>PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="text"><p>Basis opschoning, reparatie en optimalisatie van het systeem</p></td>
          <td class="item-free"><p><i class="all-icons grey">√</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="text"><p>Basis bescherming tegen spyware</p></td>
          <td class="item-free"><p><i class="all-icons grey">√</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="text"><p>Tot 200% snellere pc en 300% sneller internet</p></td>
          <td class="item-free"><p><i class="all-icons">×</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="text"><p>Privacy Schild beschermt uw persoonlijke gegevens</p></td>
          <td class="item-free"><p><i class="all-icons">×</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="text"><p>Realtime bescherming tegen malware</p></td>
          <td class="item-free"><p><i class="all-icons">×</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="text"><p>Wis uw browsegegevens zodat u niet getraceerd wordt</p></td>
          <td class="item-free"><p><i class="all-icons">×</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="text"><p>Automatisch optimaliseren op een gepland moment</p></td>
          <td class="item-free"><p><i class="all-icons">×</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="text"><p>Diepe opschoning van het systeem om traagheid en systeemfouten te voorkomen</p></td>
          <td class="item-free"><p><i class="all-icons">×</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="text"><p>Update verouderde software in één klik</p></td>
          <td class="item-free"><p><i class="all-icons">×</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
        <!-- 10 -->
        <tr>
          <td class="text"><p>Gratis 24/7 technische ondersteuning</p></td>
          <td class="item-free"><p><i class="all-icons">×</i></p></td>
          <td class="item-pro"><p><i class="all-icons">√</i></p></td>
        </tr>
      </tbody>
    </table>
    <span class="table-shadow"></span>
  </div>
</div>
<!-- end comparison -->

<!-- bottom-buy -->
<div class="bottom-buy">
  <div class="wrapper clearfix">
    <!-- box -->
    <span class="box fl">Advanced SystemCare PRO</span>
    <!-- message -->
    <div class="message fr">
      <h2>Exclusieve voorverkoopdeal!</h2>
      <!-- price -->
      <p class="price">€<b>14</b><small>,99</small> <del>€49,99</del></p>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderofficialnl<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13preorderofficialnl-nl');">
        <span>Bestel Nu</span>
      </a>
      <!-- countdown -->
      <div class="countdown-box">
        Nog maar
        <p class="countdown">
          <strong>00</strong> :
          <strong>07</strong> :
          <strong>33</strong> :
          <strong>11</strong>
        </p>
        beschikbaar
      </div>
    </div>
  </div>
</div>
<!-- end bottom-buy -->

<!-- service -->
<div class="service wrapper clearfix">
  <!-- 01 -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
    <dd>60 Dagen <br> niet-goed-geld-teruggarantie</dd>
  </dl>
  <!-- 02 -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
    <dd><br>Betaalmethoden</dd>
  </dl>
  <!-- 03 -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/cart.png" alt=""></dt>
    <dd>Ontvang de <br> licentie direct na bestelling</dd>
  </dl>
</div>
<!-- end service --->

<!-- footer -->
<div class="footer wrapper">
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
</div>
<!-- end footer -->

<!-- coupon -->
<div class="coupon">
  <!-- title -->
  <h3>Alleen tijdens de voorverkoop!</h3>
  <!-- price -->
  <p class="price">€<b>14</b><small>,99</small> <del>€49,99</del></p>
  <!-- buybtn -->
  <a class="buybtn"
     href="https://www.iobit.com/buy.php?product=nl-asc13preorder1499&ref=nl_asc13preorderofficialnl<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_asc"
     onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13preorderofficialnl-nl');">
    <span>Bestel Nu</span>
  </a>
  <!-- countdown -->
  <div class="countdown-box">
    Nog maar
    <p class="countdown">
      <strong>00</strong> :
      <strong>07</strong> :
      <strong>33</strong> :
      <strong>11</strong>
    </p>
  </div>
  <!-- close -->
  <a class="close" href="javascript: closeCoupon();">×</a>
</div>
<!-- end coupon -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>