<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Tijdelijk met gratis cadeau! IObit Software Updater PRO Aanschaffen</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&family=Poppins:ital,wght@1,400;1,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- h1 -->
    <h1>Ongelimiteerde software-updates!</h1>
    <h2>Tijdelijk met Gratis Cadeau</h2>
    <!-- container -->
    <div class="container clearfix">
      <!-- left message -->
      <div class="message small fl">
        <!-- box -->
        <span class="box">IObit Software Updater PRO</span>
        <!-- price -->
        <p class="price"><big>€14</big>,99 <del>€29,99</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-isu41y3pc1499&ref=nl_isu41y3pc1499purchase2005<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu"
           onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2005-nl');"
           target="_blank">
          ACTIVEER NU!
        </a>
      </div>

      <!-- right message -->
      <div class="message large fr">
        <!-- tip -->
        <p class="tip">Nu Met Gratis Cadeau!</p>
        <!-- box -->
        <span class="box">IObit Software Updater PRO+Protected Folder</span>
        <!-- price -->
        <p class="price"><big>€14</big>,99 <del>€69,94</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=nl-isu43pcpf1499&ref=nl_isu43pcpf1499purchase2005<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu"
           onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2005-nl');"
           target="_blank">
          ACTIVEER NU!
        </a>
        <!-- countdown -->
        <p class="countdown">
          <span>Wees er snel bij! Nog maar:</span>
          <strong>00</strong>:
          <strong>00</strong>:
          <strong>00</strong>:
          <strong class="last">000</strong>
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payments -->
<div class="payments wrapper">
  <img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
</div>
<!-- end payments -->

<!-- feature -->
<div class="feature wrapper">
  <h2>Waarom heeft u IObit Software Updater PRO nodig?</h2>
  <!-- container -->
  <div class="container clearfix">
    <!-- left message -->
    <div class="fl left-message">
      <div class="screenshots">
        <!-- screenshots-list -->
        <ul class="screenshots-list clearfix">
          <li class="active">
            <img src="<?php echo getStaticUrl('images/feature-screen01.jpg')?>" alt="">
            <span></span>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/feature-screen02.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/feature-screen03.jpg')?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/feature-screen04.jpg')?>" alt="">
          </li>
        </ul>
      </div>
      <!-- point-list -->
      <ul class="point-list clearfix">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li class="last"></li>
      </ul>
    </div>
    <!-- right message -->
    <div class="fr right-message">
      <dl class="one clearfix active">
        <dt></dt>
        <dd>
          <h3>Ongelimiteerd updaten</h3>
          <p>Update direct al uw software, zonder te hoeven wachten</p>
        </dd>
      </dl>
      <dl class="two clearfix">
        <dt></dt>
        <dd>
          <h3>Automatisch updaten</h3>
          <p>Werk automatisch op een ingesteld moment al uw software bij, zodat u direct de laatste en veiligste versie heeft.</p>
        </dd>
      </dl>
      <dl class="three clearfix">
        <dt></dt>
        <dd>
          <h3>Volledig stille installatie</h3>
          <p>IObit Software Updater werkt uw software bij zonder dat u iets hoeft te doen.</p>
        </dd>
      </dl>
      <dl class="four clearfix">
        <dt></dt>
        <dd>
          <h3>Automatisch herstelpunt</h3>
          <p>Zodat u zich nooit ergens zorgen over hoeft te maken, wordt er voor elke update automatisch een herstelpunt aangemaakt.</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <div class="container">
      <!-- message -->
      <div class="message clearfix">
        <!-- ago -->
        <div class="fl ago clearfix">
          <h2>Krijg Protected Folder Helemaal Gratis!</h2>
          <!-- box -->
          <span class="fl box">Protected Folder</span>
          <!-- ul -->
          <ul class="fl">
            <li>Bescherm uw belangrijke bestanden en mappen met <br> een wachtwoord.</li>
            <li>Weer zowel nieuwsgierige gebruikers van uw <br> computer als hackers!</li>
          </ul>
          <!-- dl -->
          <dl class="fr">
            <dd>
              <!-- price -->
              <p class="price white"><big>€0</big> <del>€39,95</del></p>
              <!-- buybtn -->
              <a class="buybtn yellow"
                 href="https://www.iobit.com/buy.php?product=nl-isu43pcpf1499&ref=nl_isu43pcpf1499purchase2005<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu"
                 onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2005-nl');"
                 target="_blank">
                Claim Mijn Cadeau
              </a>
              <!-- countdown -->
              <p class="countdown white">
                <span>Nog maar:</span>
                <strong>00</strong>:
                <strong>00</strong>:
                <strong>00</strong>:
                <strong class="last">000</strong>
              </p>
            </dd>
          </dl>
        </div>
        <!-- later -->
        <div class="fl later clearfix">
          <h2>Pak toch nog <span>50%</span> Korting!</h2>
          <!-- box -->
          <img class="fl box" src="<?php echo getStaticUrl('images/gifts-isu.png')?>" alt="IObit Software Updater PRO">
          <!-- dl -->
          <dl class="fr">
            <dd>
              <!-- price -->
              <p class="price white"><big>€14</big>,99 <del>€29,99</del></p>
              <!-- buybtn -->
              <a class="buybtn yellow"
                 href="https://www.iobit.com/buy.php?product=nl-isu41y3pc1499&ref=nl_isu41y3pc1499purchase2005<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu"
                 onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2005-nl');"
                 target="_blank">
                ACTIVEER NU!
              </a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end gifts -->

<!-- intro -->
<div class="intro">
  <div class="wrapper">
    <!-- top -->
    <div class="top clearfix">
      <div class="screenshot fl">
        <span class="pro"></span>
        <span class="free"></span>
      </div>
      <div class="details fr">
        <h3>Waarom altijd alles up-to-date?</h3>
        <ul>
          <li>Veilige computer: krijg altijd direct de laatste security patches</li>
          <li>De beste software: krijg altijd direct toegang tot nieuwe functies</li>
          <li>Nooit meer twijfelen over welke software geüpdatet moet worden</li>
        </ul>
      </div>
    </div>

    <!-- bottom -->
    <div class="bottom clearfix">
      <div class="details fl">
        <h3>Waarom automatisch updaten?</h3>
        <ul>
          <li>Wordt niet gestoord als nieuwe updates beschikbaar zijn</li>
          <li>Nooit meer moeite, omdat alles voor u bijgehouden wordt </li>
          <li>Sluit programma’s uit die u niet wilt laten updaten</li>
        </ul>
      </div>
      <div class="screenshot fr"><span></span></div>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- reviews -->
<div class="reviews">
  <div class="wrapper">
    <h2>Wereldwijd geliefd bij gebruikers en experts!</h2>
    <div class="container">
      <span class="recover recover01 big"></span>
      <span class="recover recover02 middle"></span>
      <span class="recover recover03 smail"></span>
      <span class="recover recover04 big"></span>
      <span class="recover recover05 middle"></span>
      <span class="recover recover06 smail"></span>
      <span class="recover recover07 big"></span>
      <span class="recover recover08 middle"></span>
      <span class="recover recover09 smail"></span>
      <span class="recover recover10 smail"></span>
      <span class="recover recover11 smail"></span>
      <span class="recover recover12 smail"></span>
      <span class="recover recover13 middle"></span>
      <span class="recover recover14 middle"></span>
      <span class="recover recover15 smail"></span>
      <span class="recover recover16 smail"></span>
      <span class="recover recover17 big"></span>
      <span class="recover recover18 smail"></span>
      <span class="recover recover19 smail"></span>
      <span class="recover recover20 big"></span>
      <span class="recover recover21 big"></span>
      <span class="recover recover22 smail"></span>
      <span class="recover recover23 smail"></span>
      <span class="recover recover24 smail"></span>
      <span class="recover recover25 smail"></span>
      <dl class="softpedia">
        <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""></dt>
        <dd>
          <strong>Softpedia</strong>
          <p>
            IObit Software Updater kan automatisch controleren of er <br>
            nieuwe versies zijn en ze automatisch installeren, zelfs zonder <br>
            dat de gebruiker iets hoeft te doen.
          </p>
          <span></span>
        </dd>
      </dl>
      <dl class="computer">
        <dt><img src="<?php echo getStaticUrl('images/computer.png')?>" alt=""></dt>
        <dd>
          <strong>Computertaal</strong>
          <p>
            Door dit systeem verhoog je de eigen <br>
            veiligheid en zorg je er meteen voor dat je <br>
            de beste software ervaring hebt. Je <br>
            computer zal je er dankbaar voor zijn.
          </p>
          <span></span>
        </dd>
      </dl>
      <dl class="bremmer">
        <dt><img src="<?php echo getStaticUrl('images/review-user.png')?>" alt=""></dt>
        <dd>
          <strong>Nico Bremmer</strong>
          <p>
            Het is een geweldig software update <br>
            programma; gebruiksvriendelijk en <br>
            simpel!
          </p>
          <span></span>
        </dd>
      </dl>
      <dl class="joshu">
        <dt><img src="<?php echo getStaticUrl('images/review-user.png')?>" alt=""></dt>
        <dd>
          <strong>Joshua Irving</strong>
          <p>
            De automatische updates zijn echt top! Het is snel <br>
            en efficiënt. Een van de beste tools die ik ken!
          </p>
          <span></span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end reviews -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- countdown -->
    <p class="countdown bottom clearfix">
      <span>Gratis cadeau nog maar&nbsp;</span>
      <strong>00</strong><em>:</em>
      <strong>00</strong><em>:</em>
      <strong>00</strong><em>:</em>
      <strong class="last">000</strong>
      <span>&nbsp;beschikbaar!</span>
    </p>
    <!-- dl -->
    <dl class="fl small clearfix">
      <dt>IObit Software Updater PRO</dt>
      <dd>
        <!-- price -->
        <p class="price"><big>€14</big>,99 <del>€29,99</del></p>
        <!-- buybtn -->
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=nl-isu41y3pc1499&ref=nl_isu41y3pc1499purchase2005<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu"
           onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2005-nl');"
           target="_blank">
          ACTIVEER NU!
        </a>
      </dd>
    </dl>
    <dl class="fr large clearfix">
      <dt>IObit Software Updater PRO+Protected Folder</dt>
      <dd>
        <!-- price -->
        <p class="price"><big>€14</big>,99 <del>€69,94</del></p>
        <!-- buybtn -->
        <a class="buybtn large small"
           href="https://www.iobit.com/buy.php?product=nl-isu43pcpf1499&ref=nl_isu43pcpf1499purchase2005<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_isu"
           onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase2005-nl');"
           target="_blank">
          ACTIVEER NU!
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
<div class="service  clearfix">
  <div class="wrapper">
    <dl>
      <dt>Garantie</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dd>
    </dl>
    <dl>
      <dt>Veilig betalen</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
    </dl>
    <dl class="last">
      <dt>24/7 Gratis Klantenservice</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dd>
    </dl>
  </div>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <dl class="annotation wrapper">
    <dd>IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</dd>
  </dl>
  <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</div>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>