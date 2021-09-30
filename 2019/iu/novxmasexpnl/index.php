<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'nliuxnovexp_p' . $date;
  $c_name_t='nliuxnovexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
        $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_iue'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>85% Kerstkorting op IObit Uninstaller PRO</title>
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
  <div class="lamp">
    <div class="light hide"></div>
    <div class="light01 hide"></div>
    <div class="light02 hide"></div>
  </div>
  <div class="snow"></div>

  <div class="wrapper">
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Kerstmis Aanbieding -85%</h1>
    <div class="box">
      <dl>
        <dt>i.p.v. <del>€29,99</del></dt>
        <dd>
          <strong>€19,99</strong>
          <span>3 pc’s, 1 jaar</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=nl-iu93pc1999&ref=nl_iu93pc1999purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911exp-nl')"
         class="buybtn small">
        Bestel Nu
      </a>
    </div>

    <div class="box gift-box">
      <dl>
        <dt>i.p.v. <del>€99,93</del></dt>
        <dd>
          <strong>€14,99</strong>
          <span>3 pc’s, 1 jaar</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=nl-iu93pcsdpf1499&ref=nl_iu93pcsdpf1499purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911exp-nl')"
         class="buybtn">
        Bestel Nu
      </a>
      <p>Kerstcadeaus beperkt beschikbaar</p>
    </div>
    <p class="last">Als u in de eerste 60 dagen ontevreden bent, krijgt u het volledige bedrag terug</p>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">
  <!-- feature -->
  <div class="feature wrapper clearfix">
    <h2>IObit Uninstaller PRO <br> scheelt u een hoop tijd en moeite</h2>
    <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""></dt>
      <dd>
        <strong>Krachtig</strong>
        <p>Ongewenste programma’s, die zich niet zo maar laten verwijderen, worden volledig gedeïnstalleerd.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""></dt>
      <dd>
        <strong>Nauwkeurig</strong>
        <p>Met dank aan de verbeterde diepe scan worden alle restanten gedetecteerd en automatisch verwijderd.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""></dt>
      <dd>
        <strong>Intelligent</strong>
        <p>Bundleware en browserplug-ins worden gemakkelijk herkend en verwijderd.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""></dt>
      <dd>
        <strong>Snel</strong>
        <p>In één klik wordt alle belangrijke software op uw computer bijgewerkt.</p>
      </dd>
    </dl>
  </div>
  <!-- end feature -->
</div>
<!-- end container -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>Verschil Tussen Uw Huidige Versie en <br> IObit Uninstaller 9 PRO</h2>
  <table>
    <thead>
    <tr>
      <th class="text" colspan="2"></th>
      <th class="itema">
        <div class="free">Uw Huidige Versie</div>
      </th>
      <th class="space"></th>
      <th class="itemb">
        <div class="pro">IObit Uninstaller 9 PRO</div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></td>
      <td class="virture">Verwijder meerdere programma’s, browser extensies en Windows apps tegelijkertijd</td>
      <td class="itema"><i class="all-icons orange"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></td>
      <td class="virture">Identificeer en verwijder hardnekkige programma’s en bundleware</td>
      <td class="itema"><i class="all-icons"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></td>
      <td class="virture">Detecteer en herstel systeemwijzigingen tijdens installaties</td>
      <td class="itema"><i class="all-icons"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></td>
      <td class="virture">Identificeer schadelijke en reclamemakende extensies</td>
      <td class="itema"><i class="all-icons"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></td>
      <td class="virture">Verwijder restanten automatisch na deïnstallatie</td>
      <td class="itema"><i class="all-icons"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></td>
      <td class="virture">Verwijder restanten van reeds verwijderde programma’s</td>
      <td class="itema"><i class="all-icons"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""/></td>
      <td class="virture">Maak automatisch een herstelpunt voor deïnstallatie </td>
      <td class="itema"><i class="all-icons"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></td>
      <td class="virture">Update verouderde programma’s in één klik </td>
      <td class="itema"><i class="all-icons"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></td>
      <td class="virture">Update IObit Uninstaller automatisch naar de nieuwste versie</td>
      <td class="itema"><i class="all-icons"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></td>
      <td class="virture">24/7 technische ondersteuning</td>
      <td class="itema"><i class="all-icons"></i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons orange"></i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>De nieuwste IObit Uninstaller 9 PRO kan nog veel <br>  meer dan u dacht! </h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
      <dd>
        <h3>Schoner</h3>
        <p>
          Volledige verwijdering van 150%* meer programma’s die niet op reguliere wijze verwijderd kunnen worden
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
      <dd>
        <h3>Grondiger</h3>
        <p>
          15%* meer restanten en register items kunnen gedetecteerd en grondig verwijderd worden na deïnstallatie
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
      <dd>
        <h3>Sneller</h3>
        <p>10%* sneller deïnstallatieproces</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
      <dd>
        <h3>Veiliger</h3>
        <p>50%* meer schadelijke plug-ins kunnen gedetecteerd en verwijderd worden</p>
      </dd>
    </dl>
  </div>
</div>
<!-- intro end -->

<!-- review -->
<div class="review wrapper clearfix">
  <h2>WE DOEN ER ALLES AAN OM ONZE KLANTEN WAAR OOK TER WERELD, <br> TEVREDEN TE MAKEN!</h2>
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

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Wereldwijd Bekroond door de Media</h2>
    <p>
      Dankzij de waardering van vooraanstaande media over de hele wereld, weet u dat het goed zit!
    </p>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- service  -->
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
    <dt>*Opmerkingen:</dt>
    <dd>
      IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.
    </dd>
    <dd>
      Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.
    </dd>
  </dl>
  <div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</div>
</div>
<!-- end footer -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/iu-float-box.png')?>" alt=""/></div>
    <div class="center fl">
      <h2>Exclusieve Kerstaanbieding!</h2>
      <div class="numbox">
        <p>Wees er snel bij, beperkt beschikbaar</p>
      </div>
    </div>
    <div class="price fr">
      <p><strong>€ 14,99</strong> <del>€ 99,93</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=nl-iu93pcsdpf1499&ref=nl_iu93pcsdpf1499purchase1911exp<?php echo $refStr;?>&refs=nl_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1911exp-nl')">
        Krijg Nu PRO terug!
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>