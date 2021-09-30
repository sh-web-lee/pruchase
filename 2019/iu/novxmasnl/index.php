 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Gelukkig 2020! Hoge korting op IObit Uninstaller - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
<!--  <div class="lamp">-->
<!--    <div class="light hide"></div>-->
<!--    <div class="light01 hide"></div>-->
<!--    <div class="light02 hide"></div>-->
<!--  </div>-->
<!--  <div class="snow"></div>-->

  <div class="wrapper">
<!--    <div class="star"></div>-->
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Begin 2020 goed met Hoge Korting!</h1>
    <div class="box">
      <dl>
        <dt>i.p.v. <del>€29,99</del></dt>
        <dd>
          <strong>€19,99</strong>
          <span>3 pc’s, 1 jaar</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=nl-iu93pc1999&ref=nl_iu93pc1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911-nl')"
         class="buybtn small">
        Bestel Nu
      </a>
    </div>

    <div class="box gift-box">
      <dl>
        <dt>i.p.v. <del>€99,93</del></dt>
        <dd>
          <strong>€19,99</strong>
          <span>3 pc’s, 1 jaar</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=nl-iu93pcsdpf1999&ref=nl_iu93pcsdpf1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911-nl')"
         class="buybtn">
        Bestel Nu
      </a>
      <p>Gratis Cadeaus beperkt beschikbaar</p>
    </div>
    <p class="last">Als u in de eerste 60 dagen ontevreden bent, krijgt u het volledige bedrag terug</p>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- intro -->
  <div class="intro wrapper clearfix">
    <h2>IObit Uninstaller PRO <br> scheelt u een hoop tijd en moeite</h2>
    <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Krachtig</strong>
        <p>Ongewenste programma’s, die zich niet zo maar laten verwijderen, worden volledig gedeïnstalleerd.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Nauwkeurig</strong>
        <p>Met dank aan de verbeterde diepe scan worden alle restanten gedetecteerd en automatisch verwijderd.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Intelligent</strong>
        <p>Bundleware en browserplug-ins worden gemakkelijk herkend en verwijderd.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd>
        <strong>Snel</strong>
        <p>In één klik wordt alle belangrijke software op uw computer bijgewerkt.</p>
      </dd>
    </dl>
    <p class="learn-more">Verschillen tussen de gratis versie en PRO >></p>
  </div>
  <!-- end intro -->

  <div class="gift-content wrapper clearfix">
    <h2>Wat voegen de Gratis Cadeaus toe?</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""></dt>
      <dd>
        <strong>€0</strong> i.p.v. <del> €29,99</del>
        <p>Automatische defragmentatie</p>
        <p>Sneller toegang tot bestanden</p>
        <p>Trimt SSD’s voor de beste resultaten</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""></dt>
      <dd>
        <strong>€0</strong> i.p.v. <del> €39,95</del>
        <p>Vergrendel uw belangrijke mappen met een wachtwoord</p>
        <p>Voorkom dat uw gegevens gestolen of bekeken worden</p>
      </dd>
    </dl>
  </div>

  <div class="wrapper">
    <div class="betwwen-buy">
      <div class="content">
        <img src="<?php echo getStaticUrl('images/between-buy-box.png')?>" alt="" class="img-box">
        <dl>
          <dt><strong>€19,99</strong> i.p.v. <del>€99,93</del></dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=nl-iu93pcsdpf1999&ref=nl_iu93pcsdpf1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911-nl')"
               class="buybtn red">
              Bestel Nu
            </a>
          </dd>
          <dd class="last">Gratis Cadeaus beperkt beschikbaar</dd>
        </dl>
      </div>
    </div>
  </div>

</div>
<!-- end container -->

<!-- review -->
<div class="review wrapper clearfix">
  <div class="title">
    <h2>Aangeraden door Experts en Gebruikers</h2>
    <p>Miljoenen gebruikers wereldwijd, zijn tevreden met IObit Uninstaller PRO</p>
  </div>
  <div class="review-icons fl">
    <img src="<?php echo $pResUrl;?>images/review-icons.png" alt="">
  </div>
  <div class="review-content fr">
    <ul class="clearfix">
      <li class="active">
        <img src="<?php echo $pResUrl;?>images/makeuseof.png" alt="CHIP">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/sergey-erlich.png" alt="Sergey Erlich">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/ada-gortler.png" alt="Áda Görtler">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/joseph-yu.png" alt="Joseph Yu">
      </li>
      <li>
        <img src="<?php echo $pResUrl;?>images/lovro-zuzic.png" alt="Lovro Žužić">
      </li>
    </ul>
    <span class="line"></span>
    <div class="review-message">
      <!-- CHIP -->
      <p class="active">
        "Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen." <span>- MakeUseOf</span>
      </p>
      <!-- Sergey Erlich -->
      <p>
        "In tegenstelling tot de basis uninstaller van Windows, verwijdert IObit Uninstaller ook resten van programma’s die uw PC vertragen. Ik gebruik dit programma al meerdere jaren en ik blijf dit programma aan iedereen aanbevelen!" <span>- Sergey Erlich</span>
      </p>
      <!-- Áda Görtler -->
      <p>
        "IObit Uninstaller is een van de beste deïnstallatie programma’s op de markt. Het is makkelijk in de omgang, het verwijdert bestanden en programma’s enorm snel en grondig. Vanaf de 5 de versie van IObit Uninstaller kun je echt zien dat het programma volledig is afgestemd op Windows 10. Je kunt gemakkelijk en snel allerlei vervelende plug-ins en vooraf geïnstalleerde Windows apps verwijderen. Je kunt ook makkelijk dubbel geïnstalleerde of ongebruikte programma’s vinden en verwijderen. Bedankt dat jullie de computers van mijn hele familie altijd goed onderhouden!" <span>- Áda Görtler</span>
      </p>
      <!-- Joseph Yu -->
      <p>
        "Uninstaller PRO is een van de producten van de productlijn van IObit waarmee ik investeer in mijn PC zoals een kok investeert in zijn messen. Uninstaller is een geweldig programma om resten van verwijderde programma’s op te sporen en te verwijderen. Je merkt direct dat er meer vrije ruimte is op de computer. De standaard Windows Uninstaller werkt wel, maar verwijdert niet alle resten. IObit Unistaller PRO heeft 35 bestanden grondig van mijn PC verwijderd waardoor er direct meer ruimte vrijkwam op mijn harde schijf. Ik heb de licentie aangeschaft voor 3 PC’s zodat ik dit programma bij mijn hele familie kan installeren. Iedereen is erg te spreken over dit programma!" <span>- Joseph Yu</span>
      </p>
      <!-- Lovro Žužić -->
      <p>
        "IObit Uninstaller wordt beter met elke update. Ik gebruik het programma al meer dan 3 jaar. Het programma laadt snel en is simpel in het gebruik. De functies die ik het meeste gebruik zijn Gezamenlijk Verwijderen, Krachtige Scan, Bestand Versnipperaar en laatst geïnstalleerde programma’s zodat ik snel kan zien welke van die programma’s ik prettig vind en welke niet. Je kunt ook gemakkelijk de opstartprogramma’s beheren waardoor de pc sneller opstart."  <span>- Lovro Žužić</span>
      </p>
    </div>
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text" colspan="2">Waarom u de PRO versie nodig heeft</th>
        <td class="space"></td>
        <th class="itema"><span>Free</span></th>
        <td class="space"></td>
        <th class="itemb"><span>PRO</span></th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
        <td class="virtue">Deïnstalleert snel programma’s</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
        <td class="virtue">Verwijdert hardnekkige software</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
        <td class="virtue">Herkent en verwijdert gebundelde software</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
        <td class="virtue">Schoont automatisch restanten op</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
        <td class="virtue">Detecteert en verwijdert adverterende plug-ins</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
        <td class="virtue">Werkt belangrijke software bij in 1 klik</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt="" /></td>
        <td class="virtue">Herstelt systeemwijzigingen tijdens deïnstallatie</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
        <td class="virtue">Werkt IObit Uninstaller automatisch bij</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
        <td class="virtue">24/7 technische ondersteuning</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons gray">√</i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->

<!--bottom-->
<div class="bottom">

  <div class="bottom-content wrapper clearfix">
    <div class="content">
      <div class="img-box"></div>
      <ul>
        <li><i></i> <strong>1 Jaar, <b>3 PC’s</b></strong> €<span>19</span>,99</li>
        <li class="active"><i></i> <strong>1 Jaar, <b>3 PC’s + Cadeaus</b></strong> €<span>19</span>,99</li>
      </ul>
      <dl>
        <dt><span>80%</span> Korting</dt>
        <dd>
          <a href="https://www.iobit.com/buy.php?product=nl-iu93pcsdpf1999&ref=nl_iu93pcsdpf1999purchase1911<?php echo $refStr;?>&refs=nl_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911-nl')"
             class="buybtn">
            Bestel Nu
          </a>
        </dd>
        <dd class="last">Beperkt Beschikbaar</dd>
      </dl>
    </div>
  </div>

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h4>Garantie</h4></dd>
          <dd>60 Dagen niet-goed-geld-teruggarantie</dd>
        </dl>
        <dl class="center">
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd><h4>Website beveiliging</h4></dd>
          <dd>Alle websites van IObit zijn beveiligd</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
          <dd><h4>24/7 gratis klantenservice</h4></dd>
          <dd>IObit biedt gratis 24/7 <span>klantenservice voor PRO gebruikers</span></dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Let op:</dt>
        <dd>*Promoties kunnen door IObit op elk moment en zonder voorafgaande kennisgeving veranderd worden naar eigen goeddunken</dd>
        <dd>* De gegevens kunnen variëren op basis van verschillende systemen en computers.</dd>
      </dl>
      <!-- annotation end -->

      <div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</div>
    </div>
  </div>
  <!-- footer end -->
</div>
<!--bottom-->


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>