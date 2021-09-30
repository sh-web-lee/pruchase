<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
  <html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Welkom! IObit Malware Fighter met gratis welkomstcadeau voor nieuwe gebruikers</title>
    <meta name="Copyright" content="IObit">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Cabin:400,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
  </head>
  <body>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>Als Dank voor uw Trouwe Gebruik, Exclusieve Korting!</h1>

      <!-- offers: IMF 1 PC|1 TEAR -->
      <div class="offer offer3 fl">
        <!-- title -->
        <h3>Bescherming voor uzelf</h3>
        <!-- IMF(1PC|1YEAR) -->
        <img class="box" src="<?php echo getStaticUrl('images/offer-box03.png')?>" alt=""/>
        <!-- price -->
        <p class="price fr"><span>€19,99</span></p>
        <div class="clear"></div>
        <!-- offer3 buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-imf81pc1999&ref=nl_imf81pc1999newlaunchpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfnewlaunchpurchase2006-nl');">
          <i></i>
          <span>BESTEL NU</span>
        </a>
      </div>

      <!-- offer: IMF 3 PC|1 YEAR & PF -->
      <div class="offer offer1 fl">
        <!-- title -->
        <h3>Exclusieve Aanbieding</h3>
        <!-- countdown -->
        <p class="countdown">
          <strong>00</strong> min
          <strong>00</strong> sec
          <strong class="small">000</strong> ms
        </p>
        <!-- IMF(3PC|1YEAR) && PF -->
        <img class="box" src="<?php echo getStaticUrl('images/offer-box01.png')?>" alt=""/>
        <!-- price -->
        <p class="price fr"><span>€19,99</span></p>
        <div class="clear"></div>
        <!-- offer1 buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-imf8newlaunchpackage&ref=nl_imf8newlaunchpackagepurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfnewlaunchpurchase2006-nl');">
          <i></i>
          <span>BESTEL NU</span>
        </a>
        <span class="discount">-80%</span>
      </div>

      <!-- offer: IMF 3 PC|1 YEAR -->
      <div class="offer offer2 fr">
        <!-- title -->
        <h3>Bescherming voor het hele gezin</h3>
        <!-- IMF(3PC|1YEAR) -->
        <img class="box" src="<?php echo getStaticUrl('images/offer-box02.png')?>" alt=""/>
        <!-- price -->
        <p class="price fr"><span>€21,99</span></p>
        <div class="clear"></div>
        <!-- offer2 buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-imf83pc2199&ref=nl_imf83pc2199newlaunchpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfnewlaunchpurchase2006-nl');">
          <i></i>
          <span>BESTEL NU</span>
        </a>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper clearfix">
      <!-- payment -->
      <dl class="payment fl">
        <dd>Betaalmethoden</dd>
        <dt><img src="<?php echo $pResUrl;?>images/payment.png" alt=""></dt>
      </dl>
      <!-- monyback -->
      <dl class="moneyback fl">
        <dd>
          60 dagen<br>
          niet-goed-geld-terug-garantie
        </dd>
        <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
      </dl>
      <!-- godaddy -->
      <dl class="godaddy fl">
        <dd>Veilig Betalen</dd>
        <dt><img class="fr" src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
      </dl>
    </div>
  </div>
  <!-- service end -->

  <!-- divider start -->
  <hr>
  <!-- divider end -->

  <!-- feature start -->
  <div class="feature wrapper clearfix">
    <!-- title -->
    <h2>Waarom heeft u IObit Malware Fighter PRO nodig?</h2>
    <!-- left-message -->
    <div class="left-message fl">
      <h3><strong>3 engines</strong> die perfect samenwerken</h3>
      <img class="arrow" src="<?php echo $pResUrl;?>images/arrow.png" alt="">
      <dl class="clearfix" data-index="01" data-color="blue">
        <dd class="fl">
          <h4>Bitdefender engine</h4>
          <p>
            Befaamde engine tegen malware en <br>
            virussen die constant bijgewerkt wordt
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="02" data-color="blue">
        <dd class="fl">
          <h4>IObit Anti-malware engine</h4>
          <p>
            Vult de Bitdefender engine aan om echt<br>
            alle malware buiten te houden
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="03" data-color="blue">
        <dd class="fl">
          <h4>IObit Anti-ransomware engine</h4>
          <p>Voorkomt infecties met ransomware</p>
        </dd>
        <dt class="fr paddingtop15"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      </dl>
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <dl data-index="04" data-color="green">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
        <dd>
          <h4>Realtime bescherming</h4>
          <p>
            Geeft malware geen enkele kans door<br>
            het direct uit te schakelen
          </p>
        </dd>
      </dl>
      <dl data-index="05" data-color="green">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
        <dd>
          <h4>Kluis</h4>
          <p>
            Beschermt uw belangrijke bestanden <br>
            met een wachtwoord zodat hackers en anderen er niet bij kunnen
          </p>
        </dd>
      </dl>
    </div>
    <!-- detail-show -->
    <div class="detail-show clearfix">
      <div id="show01" class="showes fl on blue">
        <h5>Bitdefender Engine</h5>
        <hr>
        <p>De befaamde Bitdefender Engine biedt uitstekende bescherming tegen virussen en malware. Bovendien wordt de gigantische database dagelijks bijgewerkt.</p>
      </div>
      <div id="show02" class="showes fl blue">
        <h5>IObit Anti-malware Engine</h5>
        <hr>
        <p>Onze Anti-malware Engine is de ideale aanvulling op de Bitdefender Engine. Samen garanderen ze dat uw computer malwarevrij blijft.</p>
      </div>
      <div id="show03" class="showes fl blue">
        <h5>IObit Anti-ransomware Engine</h5>
        <hr>
        <p>De Anti-Ransomware Engine voorkomt dat uw computer vergrendeld wordt en criminelen losgeld eisen, en biedt extra bescherming voor gevoelige gegevens.</p>
      </div>
      <!-- <div id="show02" class="showes fl blue">
        <h5>IObit Anti-malware Engine</h5>
        <hr>
        <p>De Anti-Ransomware Engine voorkomt dat uw computer vergrendeld wordt en criminelen losgeld eisen, en biedt extra bescherming voor gevoelige gegevens.</p>
      </div>
      <div id="show03" class="showes fl blue">
        <h5>IObit Anti-ransomware Engine</h5>
        <hr>
        <p>Ransomware wordt steeds geavanceerder. Onze anti-ransomware engine voorkomt dat uw computer vergrendeld wordt en criminelen u om losgeld vragen.</p>
      </div> -->
      <div id="show04" class="showes fl green">
        <h5>Realtime bescherming</h5>
        <hr>
        <p>Met alle drie de engines ingeschakeld, is uw computer altijd veilig. Bedreigingen worden per direct verwijderd, zonder dat u zich er zorgen over hoeft te maken.</p>
      </div>
      <div id="show05" class="showes fl green">
        <h5>Kluis</h5>
        <hr>
        <p>Bewaar uw belangrijke bestanden in de Kluis. Daar worden ze afgesloten van andere bestanden en programma’s zodat zelfs ransomware ze niet aan kan tasten.</p>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gift start -->
  <div class="gift">
    <div class="wrapper clearfix">
      <!-- PF -->
      <img class="gift-box fl" src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="">
      <!-- details -->
      <dl class="gift-details fl">
        <dt><h3>Protected Folder & Twee extra maanden gratis!</h3></dt>
        <dd>
          <p>De ideale aanvulling op IObit Malware Fighter</p>
          <p>Bescherm uw belangrijke bestanden en mappen met een wachtwoord.</p>
          <p>Twee extra maanden PRO voor €0</p>
        </dd>
      </dl>
      <!-- message -->
      <div class="gift-message fr">
        <!-- price -->
        <p class="price"><b>€0</b><del>€39,95</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-imf8newlaunchpackage&ref=nl_imf8newlaunchpackagepurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfnewlaunchpurchase2006-nl');">
          <i></i>
          <span>CLAIM UW CADEAU</span>
        </a>
      </div>
    </div>
  </div>
  <!-- gift end -->

  <!-- divider start -->
  <hr>
  <!-- divider end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Wereldwijde awards</h2>
      <h3>Dankzij het vertrouwen en de prijzen die we in de afgelopen zes jaar hebben gekregen van deze media weet u dat u bij ons goed zit.</h3>
      <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
      <!-- content -->
      <div class="content">
        <ul class="clearfix">
          <li>
            <img src="<?php echo $pResUrl;?>images/Peter-Stoffers.png" alt="Peter Stoffers">
            <p>Peter Stoffers</p>
          </li>
          <li>
            <img src="<?php echo $pResUrl;?>images/David-Cassidy_362.png" alt="David Cassidy">
            <p>David Cassidy</p>
          </li>
          <li class="active">
            <img src="<?php echo $pResUrl;?>images/software.png" alt="Software.Informer">
            <p>Software.Informer</p>
          </li>
          <li>
            <img src="<?php echo $pResUrl;?>images/Bob-Bassett.png" alt="Bob Bassett">
            <p>Bob Bassett</p>
          </li>
          <li>
            <img src="<?php echo $pResUrl;?>images/Gelu-Batir_771.png" alt="Gelu Batir">
            <p>Gelu Batir</p>
          </li>
        </ul>
        <div class="details">
          <dl>
            <dt>Klantbeoordeling</dt>
            <dd>"Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden."</dd>
          </dl>
          <dl>
            <dt>Klantbeoordeling</dt>
            <dd>"Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."</dd>
          </dl>
          <dl class="active">
            <dt>Media recensie</dt>
            <dd>"Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren."</dd>
          </dl>
          <dl>
            <dt>Klantbeoordeling</dt>
            <dd>"We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!” </dd>
          </dl>
          <dl>
            <dt>Klantbeoordeling</dt>
            <dd>"Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."</dd>
          </dl>
        </div>
        <span></span>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- divider start -->
  <hr>
  <!-- divider end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <!-- table -->
    <table border="0" cellspacing="0" cellpadding="0" width="100%" valign="middle" align="center">
      <thead>
        <tr>
          <td> Bekijk wat de PRO versie voor u kan betekeken</td>
          <td class="space"></td>
          <td class="width240 grey">
            IObit Malware Fighter<br>
            Free
          </td>
          <td class="space"></td>
          <td class="width240 red">
            IObit Malware Fighter<br>
            PRO
          </td>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon01.png" alt="">
            Anti-malware met de laatste IObit Malware database<span class="verbeterd">verbeterd</span>
          </td>
          <td class="space"></td>
          <td class="width240 grey"><i></i></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon07.png" alt="">
            <span class="two">Detecteer meer dan 209.000.000 bedreigingen dankzij de Bitdefender <br>
              Anti-virus Engine<span class="verbeterd">verbeterd</span></span>
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon09.png" alt="">
            Anti-Malware bescherming met de unieke Dual Core Engine
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon20.png" alt="">
            <span class="two">&nbsp;Herken nieuwe virusvarianten met behulp van de nieuwe Heuristiek-methode die onbekende<br> &nbsp;virussen detecteert op basis van kennis over bekende virussen<span class="nieuw">nieuw</span></span>
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon04.png" alt="">
            <span class="two">Bescherm belangrijke bestanden in de Kluis met een wachtwoord zodat hackers en andere <br>
              gebruikers er niet bij kunnen<span class="verbeterd">verbeterd</span></span>
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon14.png" alt="">
            Automatisch wissen van uw sporen online met de Anti-Browser tracking<span class="verbeterd">verbeterd</span>
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon05.png" alt="">
            <span class="two">Krachtige Anti-ransomware Engine die voorkomt dat uw computer vergrendeld wordt door<br> criminelen<span class="verbeterd">verbeterd</span></span>
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon19.png" alt="">
            <span class="two">&nbsp;Extra bescherming tegen ransomware-aanvallen voor uw belangrijke bestanden en<br> &nbsp;gevoelige gegevens<span class="nieuw">nieuw</span></span>
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon08.png" alt="">
            <span class="two">Opstart Schijfbescherming Tegen Kwaadaardige Aanvallen<br>
              met MBR Guard</span>
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon10.png" alt="">
            Beveilig uw webcam tegen ongeautoriseerde toegang
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon12.png" alt="">
            Voorkom geïnfecteerd te raken via de USB-aansluiting
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
        <!-- 10 -->
        <tr>
          <td>
            <img src="<?php echo $pResUrl;?>images/icon18.png" alt="">
            Gratis 24/7 klantenservice en automatisch updaten
          </td>
          <td class="space"></td>
          <td class="width240"></td>
          <td class="space"></td>
          <td class="width240 red"><i></i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <!-- box -->
      <div class="bottombuy-box fl">
        <div class="boxes clearfix">
          <img src="<?php echo getStaticUrl('images/bottombuy-box01.png')?>" alt="">
          <img src="<?php echo getStaticUrl('images/bottombuy-box02.png')?>" alt="">
          <img src="<?php echo getStaticUrl('images/bottombuy-box03.png')?>" alt="">
          <span class="discount">-80%</span>
        </div>
      </div>
      <!-- option -->
      <ul class="option fl clearfix">
        <!-- IMF 3PC|1YEAR & PF -->
        <li class="active"
            data-url="https://www.iobit.com/buy.php?product=nl-imf8newlaunchpackage&ref=nl_imf8newlaunchpackagepurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfnewlaunchpurchase2006-nl');"
            data-price="€19,99"
            data-del="€119,94">
          <img src="<?php echo $pResUrl;?>images/bottombuy-icon01.png" alt="">
          <span>Exclusieve Aanbieding</span>
        </li>
        <!-- IMF 3PC|1YEAR -->
        <li
            data-url="https://www.iobit.com/buy.php?product=nl-imf83pc2199&ref=nl_imf83pc2199newlaunchpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfnewlaunchpurchase2006-nl');"
            data-price="€21,99"
            data-del="€79,99">
          <img src="<?php echo $pResUrl;?>images/bottombuy-icon02.png" alt="">
          <span>Bescherming voor het hele gezin</span>
        </li>
        <!-- IMF 1PC|1YEAR -->
        <li
            data-url="https://www.iobit.com/buy.php?product=nl-imf81pc1999&ref=nl_imf81pc1999newlaunchpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfnewlaunchpurchase2006-nl');"
            data-price="€19.99"
            data-del="€39,95">
          <img src="<?php echo $pResUrl;?>images/bottombuy-icon03.png" alt="">
          <span>Bescherming voor uzelf</span>
        </li>
      </ul>
      <!-- message -->
      <div class="bottombuy-message fr">
        <p class="price price00"><span>€19,99</span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-imf8newlaunchpackage&ref=nl_imf8newlaunchpackagepurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfnewlaunchpurchase2006-nl');">
          <i></i>
          <span>BESTEL NU</span>
        </a>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
    </div>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    var _src = "<?php echo getStaticUrl('images/offer-box04.png')?>";
    var imgUrl = "<?php echo $pResUrl;?>";
  </script>
  </body>
  </html>