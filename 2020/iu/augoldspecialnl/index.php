<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr='';
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title> Tijdelijk voor de allerlaagste Prijs! IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed:500,700|Montserrat:500,600,700&display=swap" rel="stylesheet">
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
    <!-- title -->
    <h1>Tijdelijke actie: Krijg Gratis Cadeaus bij IObit Uninstaller PRO!</h1>
    <!-- content -->
    <div class="content">

      <!-- 3pcs -->
      <div class="panel small">
        <!-- off -->
        <span class="off">-33%</span>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-iu.png')?>" alt="IObit Uninstaller PRO">
        <!-- price -->
        <p class="price">
          <small>€</small><big>19</big>,99 
          <del>€29,99</del>
        </p>
        <!-- clear both -->
        <div class="clear"></div>
        <!-- buybtn -->
        <a class="buybtn" 
        href="https://www.iobit.com/buy.php?product=nl-iu113pc1999&ref=nl_iu113pc1999purchaseoldspecial<?php echo $refStr;?>&refs=nl_purchase_iu"
        onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseoldspecial-nl')">
        KOOP NU
        </a>
      </div>

      <!-- 3pcs+sd -->
      <div class="panel large">
        <!-- off -->
        <span class="off">-75%</span>
        <!-- h2 -->
        <h2>Met Gratis Cadeaus!</h2>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-iusd.png');?>" alt="">
        <!-- price -->
        <p class="price">
          <small>€</small><big>14</big>,99 
          <del>€99,93</del>
        </p>
        <!-- clear both -->
        <div class="clear"></div>
        <!-- buybtn -->
        <a class="buybtn large" 
        href="https://www.iobit.com/buy.php?product=nl-iu113pcpfsd1499&ref=nl_iu113pcpfsd1499purchaseoldspecial<?php echo $refStr;?>&refs=nl_purchase_iu"
        onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseoldspecial-nl')">
        KOOP NU
        </a>
        <!-- countdown -->
        <div class="bot">
          <p class="countdown">
            <i></i>
            Nog maar
            <strong>0</strong> min        
            <strong>00</strong> sec
            <strong class="last">000</strong> ms
            beschikbaar!
          </p>
        </div>
      </div>

    </div>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">
  <!-- payments -->
  <div class="payments wrapper">
    <img src="<?php echo getStaticUrl('images/payments.png');?>" alt="">
  </div>
  <!-- end payments -->

  <!-- feature -->
  <div class="feature wrapper clearfix">
    <h2>Verwijder alle ongewenste software grondig, simpel en snel!</h2>
    <!-- computer -->
    <div class="computer">
      <div class="screen">
        <div class="list clearfix">
          <img src="<?php echo getStaticUrl('images/feature-screen01.png');?>" alt="">
          <img src="<?php echo getStaticUrl('images/feature-screen02.png');?>" alt="">
          <img src="<?php echo getStaticUrl('images/feature-screen03.png');?>" alt="">
          <img src="<?php echo getStaticUrl('images/feature-screen04.png');?>" alt="">
          <img src="<?php echo getStaticUrl('images/feature-screen05.png');?>" alt="">
        </div>
      </div>
    </div>
    <!-- ul -->
    <div class="message">
      <ul>
        <li>
         <b>Krachtige</b> verwijdering van alle ongewenste en hardnekkige software.
        </li>
        <li>
         <b>Intelligente</b> detectie en verwijdering van gebundelde software.
        </li>
        <li>
          <b>Eenvoudig</b> in één klik alle belangrijke software bijwerken naar de laatste versie.
        </li>
        <li class="last">
          <b>Automatisch</b> achtergebleven restanten <br> verwijderen en IObit Uninstaller updaten.
        </li>
      </ul>
      <!-- active -->
      <span></span>
    </div>
  </div>
  <!-- end feature -->

  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper">
      <!-- 3pcs+sd -->
      <div class="content clearfix bundle">
        <h2>Krijg Smart Defrag PRO helemaal Gratis!</h2>
        <img class="box" src="<?php echo getStaticUrl('images/gifts-sd.png');?>" alt="">
        <ul>
          <li>Automatisch harde schijven defragmenteren en SSD’s trimmen</li>
          <li>Bescherm uw belangrijke bestanden met een wachtwoord</li>
        </ul>
        <dl>
          <dd>
             <!-- buybtn -->
            <a class="buybtn large" 
              href="https://www.iobit.com/buy.php?product=nl-iu113pcpfsd1499&ref=nl_iu113pcpfsd1499purchaseoldspecial<?php echo $refStr;?>&refs=nl_purchase_iu"
              onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseoldspecial-nl')">
              Claim Mijn Cadeaus
            </a>
            <!-- countdown -->
            <p class="countdown countdown2">
              <i></i>
              Nog maar
              <strong>0</strong> min        
              <strong>00</strong> sec
              <strong class="last">000</strong> ms
            </p>
          </dd>
        </dl>
      </div>

      <!-- 3pcs -->
      <div class="content clearfix single">
        <img class="soldoutbox" src="<?php echo getStaticUrl('images/gifts-sd-soldout.png');?>" alt="">
        <p class="describe">
          <b>Helaas!</b> <br>
          Gratis Cadeaus Uitverkocht <br>
          Pak toch nog <span><b>33% Korting</b></span>
        </p>
        <img class="box" src="<?php echo getStaticUrl('images/gifts-iu.png');?>images/gifts-iu.png" alt="">
        <dl>
          <dd>
            <!-- price -->
            <p class="price">
              <small>€</small><big>19</big>,99 
              <del>€29,99</del>
            </p>
            <!-- buybtn -->
            <a class="buybtn large" 
              href="https://www.iobit.com/buy.php?product=nl-iu113pc1999&ref=nl_iu113pc1999purchaseoldspecial<?php echo $refStr;?>&refs=nl_purchase_iu"
              onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseoldspecial-nl')">
              KOOP NU
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end gifts -->

  <!-- review -->
    <div class="review">
      <div class="wrapper">
        <h2>Wat Andere Gebruikers en Media Vinden</h2>
        <!-- media -->
        <div class="media clearfix">
          <img src="<?php echo getStaticUrl('images/makeuseof.png');?>" alt="">
          <div class="details">
            <p>
              "Dit gemakkelijk te gebruiken deïnstallatieprogramma, configureert en optimaliseert uw PC. Dit programma is makkelijk en gratis te downloaden. IObit Uninstaller kan worden beschouwd als het beste in zijn soort en maakt het ook mogelijk om meerdere programma’s tegelijk te verwijderen. Na de standaard verwijdering kunt u nog een krachtige scan uitvoeren om alle overgebleven resten op te sporen en te verwijderen." - MakeUseOf
            </p>
          </div>
        </div>
        <!-- user -->
        <div class="user clearfix">
          <!-- details -->
          <div class="details">
            <!-- Lovro Žužić -->
            <p class="active">
              "IObit Uninstaller wordt beter met elke update. Ik gebruik het programma al meer dan 3 jaar. Het programma laadt snel en is simpel in het gebruik. De functies die ik het meeste gebruik zijn Gezamenlijk Verwijderen, Krachtige Scan, Bestand Versnipperaar en laatst geïnstalleerde programma’s zodat ik snel kan zien welke van die programma’s ik prettig vind en welke niet. Je kunt ook gemakkelijk de opstartprogramma’s beheren waardoor de pc sneller opstart." - Lovro Žužić
            </p>
            <!-- Joseph Yu -->
            <p>
              "Uninstaller PRO is een van de producten van de productlijn van IObit waarmee ik investeer in mijn PC zoals een kok investeert in zijn messen. Uninstaller is een geweldig programma om resten van verwijderde programma’s op te sporen en te verwijderen. Je merkt direct dat er meer vrije ruimte is op de computer. De standaard Windows Uninstaller werkt wel, maar verwijdert niet alle resten. IObit Unistaller PRO heeft 35 bestanden grondig van mijn PC verwijderd waardoor er direct meer ruimte vrijkwam op mijn harde schijf. Ik heb de licentie aangeschaft voor 3 PC’s zodat ik dit programma bij mijn hele familie kan installeren. Iedereen is erg te spreken over dit programma!" - Joseph Yu
            </p>
            <!-- Áda Görtler -->
            <p>
              "IObit Uninstaller is een van de beste deïnstallatie programma’s op de markt. Het is makkelijk in de omgang, het verwijdert bestanden en programma’s enorm snel en grondig. Vanaf de 5 de versie van IObit Uninstaller kun je echt zien dat het programma volledig is afgestemd op Windows 10. Je kunt gemakkelijk en snel allerlei vervelende plug-ins en vooraf geïnstalleerde Windows apps verwijderen. Je kunt ook makkelijk dubbel geïnstalleerde of ongebruikte programma’s vinden en verwijderen. Bedankt dat jullie de computers van mijn hele familie altijd goed onderhouden!" - Áda Görtler
            </p>
            <!-- Sergey Erlich -->
            <p>
              "In tegenstelling tot de basis uninstaller van Windows, verwijdert IObit Uninstaller ook resten van programma’s die uw PC vertragen. Ik gebruik dit programma al meerdere jaren en ik blijf dit programma aan iedereen aanbevelen!" - Sergey Erlich
            </p>
          </div>
          <!-- photos -->
          <div class="photos">
            <ul>
              <li class="active"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png');?>" alt=""></li>
              <li><img src="<?php echo getStaticUrl('images/joseph-yu.png');?>" alt=""></li>
              <li><img src="<?php echo getStaticUrl('images/ada-gortler.png');?>" alt=""></li>
              <li><img src="<?php echo getStaticUrl('images/sergey-erlich.png');?>" alt=""></li>
            </ul>
          </div>
          <!-- button -->
          <span class="prev" onclick="prevUser();"></span>
          <span class="next" onclick="nextUser();"></span>
        </div>
      </div>
    </div>
  <!-- end review -->

  <!-- comparison -->
  <div class="comparison wrapper">
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">Waarom IObit Uninstaller PRO?</th>
          <th class="space"></th>
          <th valign="bottom" class="free">
            <div>
              IObit Uninstaller <br>
              free
            </div>
          </th>
          <th class="space"></th>
          <th valign="bottom" class="pro">
            <div>
              IObit Uninstaller <br>
              PRO
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_01.png');?>" alt=""></td>
          <td class="text">
            Deïnstalleer programma's via een snelkoppeling, openstaand venster of <br>
            systeemvakicoon
          </td>
          <td class="space"></td>
          <td class="free"><i class="all-icons yes"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_02.png');?>" alt=""></td>
          <td class="text">
            Verwijdert Plug-ins & extensies in Edge, Chrome, IE, Firefox, etc
          </td>
          <td class="space"></td>
          <td class="free"><i class="all-icons yes"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_12.png');?>" alt=""></td>
          <td class="text">
          Blokkeert storende pop-ups in browser en Windows Apps <i class="all-icons new"></i>
          </td>
          <td class="space"></td>
          <td class="free"><i class="all-icons yes"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_03.png');?>" alt=""></td>
          <td class="text">
            Kan hardnekkige programma's verwijderen <i class="all-icons"></i>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_04.png');?>" alt=""></td>
          <td class="text">
            Detecteert en verwijdert programma's die meekomen met freeware <i class="all-icons"></i>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <!-- 05
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_05.png');?>" alt=""></td>
          <td class="text">
            Detecteert en herstelt systeemwijzigingen die programma’s aanbrengen  <i class="all-icons new"></i>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        -->
        <!-- 06 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_06.png');?>" alt=""></td>
          <td class="text">
            Verwijdert automatisch restbestanden die andere uninstall programma’s <br>
            niet verwijderd krijgen  <i class="all-icons"></i>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_07.png');?>" alt=""></td>
          <td class="text">
          Gloednieuwe Software Health module houdt al uw software fit en veilig <i class="all-icons new"></i>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_08.png');?>" alt=""></td>
          <td class="text">
            Indentificeert en verwijdert adverterende plug-ins
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_09.png');?>" alt=""></td>
          <td class="text">
            Update automatisch alle belangrijke software in 1 klik <i class="all-icons"></i>
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <!-- 10 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_10.png');?>" alt=""></td>
          <td class="text">
            Automatische update naar de nieuwste versie
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
        <!-- 11 -->
        <tr class="last">
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon_11.png');?>" alt=""></td>
          <td class="text">
            Gratis 24/7 technische ondersteuning
          <td class="space"></td>
          <td class="free"><i class="all-icons"></i></td>
          <td class="space"></td>
          <td class="pro"><i class="all-icons"></i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- bottombuy -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <div class="box">
        <img src="<?php echo getStaticUrl('images/bottombuy-box.png');?>" alt="">
      </div>
      <dl>
        <dt><h2> Alleen Nu Met Twee Gratis Cadeaus!</h2></dt>
        <dd>
          <!-- price -->
          <p class="price">
            <small>€</small><big>14</big>,99 
            <del>€99,93</del>
          </p>
          <!-- buybtn -->
          <a class="buybtn large" 
            href="https://www.iobit.com/buy.php?product=nl-iu113pcpfsd1499&ref=nl_iu113pcpfsd1499purchaseoldspecial<?php echo $refStr;?>&refs=nl_purchase_iu"
            onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseoldspecial-nl')">
            KOOP NU
          </a>
          <!-- countdown -->
          <p class="countdown countdown3">
            Nog maar
            <strong>0</strong> min        
            <strong>00</strong> sec
            <strong class="last">000</strong> ms
            beschikbaar!
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end bottombuy -->
</div>
<!-- end container -->

<!-- service start -->
<div class="service wrapper clearfix">
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
    <dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt="" /></dt>
    <dd><h4>24/7 gratis klantenservice</h4></dd>
    <dd>IObit biedt gratis 24/7 <span>klantenservice voor PRO gebruikers</span></dd>
  </dl>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
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

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>