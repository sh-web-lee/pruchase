<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$driversCount=empty($_GET['uc'])?0:intval($_GET['uc']);
$updateAuto=($_GET['adu']==1)?1:0;

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>

<!DOCTYPE html>
  <html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Exclusieve 85% KORTING om Driver Booster PRO terug te krijgen - IObit</title>
    <meta name="Copyright" content="IObit">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>

  </head>
  <body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <!-- logo -->
      <a class="logo" href="http://www.iobit.com" target="_blank">IObit</a>
      <!-- title -->
      <h1>Upgrade naar het nieuwe Driver Booster 8 PRO</h1>
      <!-- subtitle -->
      <h2>De nummer 1 driver updater – update drivers simpel, veilig en snel</h2>
      <!-- db-box -->
      <img class="db-box fl" src="<?php echo $pResUrl;?>images/db-box.png" alt="">
      <!-- db-message -->
      <div class="db-message fr">
        <!-- db-off -->
        <img class="db-off" src="<?php echo $pResUrl;?>images/db-off.png" alt="">
        <!-- db-line -->
        <p class="db-des">Exclusief voor Give-away gebruikers</p>
        <!-- price -->
        <p class="price">
          Slechts: <span>€<b>9</b>,99</span>  <del>€74,85</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db8-ac&ref=nl_2018sepgiveaway<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-nl');">
          Krijg PRO terug
        </a>
        <!-- attention -->
        <p class="attention">1-jarig abonnement / 1 PC</p>
        <!-- money-back -->
        <img class="money-back" src="<?php echo $pResUrl;?>images/money-back.png" alt="">
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- feature-part1 start -->
  <div class="feature-part1">
    <div class="wrapper">
      <!-- arrow -->
      <img class="arrow" src="<?php echo $pResUrl;?>images/feature-arrow.png" alt="">
      <!-- title -->
      <h2 class="fr">
        <span class="top">Sinds u het gebruikt,</span>
        <span class="bottom">heeft Driver Booster PRO voor u</span>
      </h2>
      <!-- details -->
      <ul class="details fr">
        <!-- updated -->
        <li class="updated">
          <?php if($driversCount!=0):?>
          <span class="numbers clearfix">
              <i class="">0123456789</i>
              <i class="">0123456789</i>
              <i class="">0123456789</i>
          </span>
          <strong> drivers </strong>
          en gamecomponenten geüpdatet en u verzekerd <br>
          van stabiele pc-prestaties en een soepele game-ervaring;
          <?php else:?>
            Stabiele pc-prestaties en een soepele game-ervaring gegarandeerd.
          <?php endif;?>
        </li>
        <!-- saved -->
        <li class="saved">
          <?php if($updateAuto==1):?>
            <span class="letters clearfix">
              <i class="let1">A B C D E F G H I J K L M N O P Q R S T U V W X Y Z</i>
              <i class="let2">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let3">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let4">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let5">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let6">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
            </span>
          zoveel <strong>tijd bespaard</strong> als de gratis versie met<br>
          Automatisch Updaten;
          <?php endif;?>
        </li>
        <!-- reduced -->
        <li class="reduced">
          Gezorgd dat u <b class="red">geen risico</b> op <b>crashes en dataverlies</b> meer <br>
          loopt door back-ups en herstelpunten aan te maken.
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part1 end -->
  <!-- feature-part2 start -->
  <div class="feature-part2">
    <div class="wrapper">
      <!-- content -->
      <p>
        In de afgelopen 6 jaar, heeft Driver Booster PRO <strong>12.700.000</strong> drivers geüpdatet voor <strong>1.500.000</strong><br>
        gewaardeerde gebruikers, dit maakt hun pc’s tot <strong>200%</strong> sneller*, door drivers altijd up-to-date te <br>
        houden en stabiele pc-prestaties te garanderen.
      </p>
    </div>
  </div>
  <!-- feature-part2 end -->
  <!-- feature-part3 start -->
  <div class="feature-part3 wrapper">
    <!-- title -->
    <h2>Als u nu niet voor de Nieuwe PRO kiest, kunt u last krijgen van</h2>
    <!-- content for progress -->
    <div class="content clearfix">
      <!-- Worse PC Performance -->
      <dl class="performance fl">
        <dt>Slechtere PC-Prestaties</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>15% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Unstable & Stuck Gaming Experience -->
      <dl class="experience fl">
        <dt>Instabiele & Vastlopende Games</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>35% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Time-consuming Driver Update -->
      <dl class="update fr">
        <dt>Tijdrovende Driver Update</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>2X langer </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <!-- notes -->
    <p>*Driver Booster PRO is getest in ons interne testlab. Uw resultaten kunnen afwijken.</p>
  </div>
  <!-- feature-part3 end -->
  <hr>
  <!-- feature-part4 start -->
  <div class="feature-part4">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
        Daarom is het aan te raden om te upgraden naar Driver Booster 8 PRO,<br>
        en alle drivers altijd up-to-date te houden
      </h2>
      <!-- left-message -->
      <ul class="left-message fl">
        <li class="padding-right25">
          <strong>4.500.000+ driver</strong> database om al uw<br>
          drivers up-to-date te houden
        </li>
        <li class="padding-right55">
          <strong>Auto update</strong> drivers zonder <br>
          onderbreking van uw werk
        </li>
        <li class="padding-right5">
          Alle apparaatproblemen op uw
          computer <strong>oplossen in 1 klik</strong>
        </li>
      </ul>
      <!-- right-message -->
      <ul class="right-message fr">
        <li class="padding-left45">
          <strong>Nodige componenten</strong> om games <br>
          zonder problemen op te starten
        </li>
        <li class="padding-left5">
          Voorrang om <strong>Game Ready Drivers</strong> te <br>
          updaten om volop van games te <br>
          kunnen genieten
        </li>
        <li class="padding-left10">
          Met 1 klik <strong>overbodige processen </strong><br>
          <strong>sluiten </strong>voor snellere games
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part4 end -->
  <!-- between-buy start -->
  <div class="between-buy wrapper">
    <!-- title -->
    <h2>Verzeker uzelf nu van betere pc-prestaties & soepelere games</h2>
    <!-- price -->
    <p class="price">
      Slechts: <span>€<b>9</b>,99</span>  <del>€74,85</del>
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=nl-db8-ac&ref=nl_2018sepgiveaway<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_db"
       onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-nl');">
      Krijg PRO terug
    </a>
    <!-- attention -->
    <p class="attention">1-jarig abonnement / 1 PC</p>
    <!-- money-back -->
    <img class="money-back" src="<?php echo $pResUrl;?>images/money-back.png" alt="">
  </div>
  <!-- between-buy end -->
  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <!-- title -->
      <h2>Wat u mist als u een gratis gebruiker blijft:</h2>
      <!-- table -->
      <table cellspacing="0" cellpadding="0" valign="middle" align="cnter">
        <thead>
        <tr>
          <th class="w320"></th>
          <th class="w530"></th>
          <th class="w350"></th>
          <th class="w50"></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td class="w320 grey">3.500.000+</td>
          <td class="w530">Driver Database</td>
          <td class="w350 red">4.500.000+</td>
          <td class="w50"></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="w320 grey">Normale snelheid</td>
          <td class="w530">Driver Download Snelheid</td>
          <td class="w350 red">200% sneller</td>
          <td class="w50"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="w320 grey">Geen voorrang</td>
          <td class="w530">Game Ready Drivers</td>
          <td class="w350 red">Voorrang</td>
          <td class="w50"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Gamecomponenten</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Automatische driver update</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Driver Back-Up</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td class="w320"></td>
          <td class="w530"></td>
          <td class="w350"></td>
          <td class="w50"></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Media recensie</h2>
            <h4></h4>
            <p>
              “IObit maakt allerlei programma’s en Driver Booster PRO is een van de beste. Driver Booster PRO werkt automatisch alle drivers bij en biedt meerdere functies en licentiecodes voor een goede prijs. De gebruikersinterface kan handmatig naar eigen smaak worden ingesteld wat dit programma erg overzichtelijk maakt. In het hoofdmenu kun je alle hardware gerelateerde informatie makkelijk terugvinden. Concurrenten als Ashampoo Driver Updater en Slimware Utilities DriverUpdate bieden soortgelijke functies maar Driver Booster blijft absoluut nummer één.”
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <h4></h4>
            <p>
              “Allereerst, moet ik zeggen dat het hele lichte en gemakkelijke software is. Driver Booster draait op de achtergrond en beperkt mijn CPU en RAM niet. Ik kon de nieuwste games spelen, zonder achtergrondprocessen te moeten sluiten. Normaal gesproken draai ik Windows updates elke dag voor de laatste drivers, maar Driver Booster doet dat nu voor mij en doet het beter en nauwkeuriger dan Windows update. Ik sta versteld van de prestaties en raad dit programma ten sterkste aan.”
            </p>
            <cite>Dunston Diaz</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <h4></h4>
            <p>
              “Wat een fijne verrassing brengt Driver Booster. Na de installatie en scan, bleek ik van de helft van de drivers niet eens te weten dat ik ze had, laat staan dat ze een update nodig hadden. Toen de update voltooid was, leek mijn pc een complete makeover te hebben gehad. Sensationeel!”
            </p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <h4></h4>
            <p>
              “Werkelijk de beste driver updater die beschikbaar is.  Het is gebruiksvriendelijk, heeft een simpele interface en doet zijn werk beter dan elk ander programma dat ik geprobeerd heb. Dit programma is een dikke 5 sterren waard. Aanradertje!”
            </p>
            <cite>Hishaam Salasa</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <h4></h4>
            <p>
              “Dit programma heeft me geholpen om de traagheid van mijn gamelaptop op te lossen zonder het te laten crashen. Soms probeerde ik mijn drivers te updaten, maar crashte mijn computer en moest ik ‘m formatteren om ‘m weer te kunnen gebruiken, maar dat gebeurt niet met DB8. Met groot gebruiksgemak en snelle downloads is het duidelijk de beste driver tool die er is!”
            </p>
            <cite>Carlos Alexandre Veríssimo</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <!-- title -->
    <h2>Vertrouwd en bekroond door de volgende media</h2>
    <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
  </div>
  <!-- award end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="footer-servizio clearfix">
        <dl class="money_back fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/money_back.png" alt="">
          </dd>
          <dt>
            <h3>Garantie</h3>
            <p>60 Dagen niet goed geld terug <br>garantie</p>
          </dt>
        </dl>
        <dl class="veloce fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
          </dd>
          <dt>
            <h3>Website beveiliging</h3>
            <p>Alle websites van IObit zijn beveiligd</p>
          </dt>
        </dl>
        <dl class="verified fr">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
          </dd>
          <dt>
            <h3>Directe Levering</h3>
            <p>U ontvangt de licentie binnen enkele<br> minuten na bestelling</p>
          </dt>
        </dl>
      </div>
      <p class="note">
        Let op:<br>
        * De gegevens kunnen variëren op basis van verschillende systemen en computers.
      </p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
    </div>
  </div>
  <!-- footer end -->
  <!-- float start -->
  <div class="float">
    <div class="wrapper clearfix">
      <dl class="fl">
        <dt>Exclusieve Aanbieding </dt>
        <dd><strong>85% KORTING </strong>om van Crashes & Instabiele games verlost te worden</dd>
      </dl>
      <div class="float-message fr">
        <!-- price -->
        <p class="price">
          <span>€<b>9</b>,99</span>  <del>€74,85</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-db8-ac&ref=nl_2018sepgiveaway<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_db"
           onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-nl');">
          Krijg PRO terug
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->
  <script>
    driversCount=<?php echo $driversCount;?>;
    autoUpdate=<?php echo $updateAuto;?>;
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  </body>
  </html>