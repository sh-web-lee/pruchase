<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}

include $pRootUrl.'include/common.inc.php';

function statistic($type){
//  try{
//    $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
//    $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
//    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
//    $pdo->query("set names utf8");
//    $insertSql="insert into nlascreturn(ip,type,addTime) values(:ip,:type,:addTime)";
//    $pre=$pdo->prepare($insertSql);
//
//    $ip=getIP();
//    $addTime=time();
//    $pre->bindParam(':ip',$ip);
//    $pre->bindParam(':type',$type);
//    $pre->bindParam(':addTime',$addTime);
//    $pre->execute();
//  }catch (PDOException $e){
//    var_dump($e->getMessage());
//  }
}

if($_GET['action']=='statistic'){
  $type=intval($_GET['type']);
  statistic($type);
  exit();
}
?>

<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>WEES ER SNEL BIJ: Tijdelijke aanbieding voor korting op Advanced SystemCare PRO - IObit</title>
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
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1 class="standard">Tijdelijke Aanbieding: met GRATIS Cadeau!</h1>
      <p>Wees er snel bij, beperkt beschikbaar!</p>
    </div>
    <!-- panel -->
    <ul class="panel">
      <li class="small left">
        <img class="box" src="<?php echo $pResUrl;?>images/asc-standard-3pc.png" alt="Advanced SystemCare PRO 12">
        <h4><strong>60%</strong> KORTING</h4>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-asc121y3pc1999&ref=nl_asc123pc1999purchase1905&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905-nl')">
        Activeer Nu!
        </a>
      </li>
      <li class="large right">
        <p class="countdown countdown1"><i class="all-icons"></i> <strong>00</strong> min <strong>00</strong> sec <strong class="last">00</strong> ms*</p>
        <img class="box" src="<?php echo $pResUrl;?>images/asc-standard-gift.png" alt="Advanced SystemCare PRO 12 + Smart Defrag PRO 6">
        <h4><strong>75%</strong> KORTING</h4>
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=nl-asc123pcsd1999&ref=nl_asc123pcsd1999purchase1905&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905-nl')">
        <i class="all-icons"></i>
        Activeer Nu!
        </a>
        <p class="attention">Al <strong class="viewNum">1.559.502</strong> keer geactiveerd</p></li>
    </ul>
  </div>
</div>
<!-- end banner -->

<!-- payments -->
<div class="payments wrapper">
  <img src="<?php echo $pResUrl;?>images/payments.png" alt="">
</div>
<!-- end payments -->

<!-- benfits -->
<div class="benfits">
  <div class="wrapper">
    <h2>De ideale alles-in-één oplossing om het maximale <br> uit uw pc te halen!</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li></li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
          </div>
        </li>
        <li class="fun5">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
          </div>
        </li>
      </ul>
      <ul class="list-icon">
        <li class="active"></li>
        <li></li>
        <li></li>
        <li></li>
        <li></li>
      </ul>
    </div>
    <div class="detail-list">
      <dl>
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>100% BESCHERMING</h3>
          <p>Beschermt uw privacy en data tegen toegang van buitenaf. Beschermt uw privacy twee keer zo goed*  als de gratis versie.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>200%* SNELLER SYSTEEM</h3>
          <p>Ruimt onnodige bestanden op en optimaliseert CPU en RAM voor een sneller systeem. Maakt uw systeem tot 200% sneller dan de gratis versie.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>300%* SNELLER INTERNET</h3>
          <p>Downloads, online games, internetpagina’s en YouTube video’s worden tot 300% sneller dan met de gratis versie.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>MEER VRIJE SCHIJFRUIMTE</h3>
          <p>Ruimt overbodige bestanden, ongeldige snelkoppelingen, registeritems en onvoltooide downloadbestanden volledig op.</p>
        </dd>
      </dl>
      <a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Meer informatie ></a>
    </div>
  </div>
</div>
<!-- end benfits -->

<!-- gifts -->
<div class="gifts default">
  <div class="wrapper">
    <h2>Smart Defrag PRO Gratis en Voor Niets!</h2>
    <img class="img-box" src="<?php echo $pResUrl; ?>images/gift-box.png" alt="Smart Defrag PRO 6">
    <dl>
      <dt>Smart Defrag PRO is de ideale aanvulling op Advanced SystemCare <br> PRO. Samen halen ze het maximale uit uw harde schijf!</dt>
      <dd>Automatische Defragmentatie</dd>
      <dd>Sneller toegang tot uw bestanden</dd>
      <dd>SSDs trimmen voor de beste resultaten</dd>
    </dl>
    <div class="price">
      <span><strong>€0</strong> <del>€29,99</del></span>
      <a class="buybtn yellow"
         href="https://www.iobit.com/buy.php?product=nl-asc123pcsd1999&ref=nl_asc123pcsd1999purchase1905&refs=nl_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905-nl')">
        Claim Uw Gratis Cadeau!
      </a>
      <p class="countdown3"><strong>6</strong> min <strong>66</strong> sec <strong>66</strong> ms</p>
    </div>
  </div>
</div>
<div class="gifts exceed hide">
  <div class="wrapper">
    <div class="message">
      <h2>Pak 60% Korting nu het nog kan!</h2>
      <img class="img-box" src="<?php echo $pResUrl; ?>images/asc-box.png" alt="Advanced SystemCare PRO 12">
      <dl>
        <dt>19,99 Normaal 49,99</dt>
        <dd>
          <a class="buybtn small"
             href="https://www.iobit.com/buy.php?product=nl-asc121y3pc1999&ref=nl_asc123pc1999purchase1905&refs=nl_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905-nl')">Activeer Nu!
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end gifts -->

<!-- reviews -->
<div class="reviews">
  <div class="wrapper">
    <h2>Wereldwijd erkend en gewaardeerd</h2>
    <p>Wij gaan altijd voor tevreden klanten, waar ook ter wereld</p>
    <ul class="message clearfix">
      <li>
        <strong>200+</strong>
        <p>Populair in meer dan <b>200</b> landen wereldwijd</p>
      </li>
      <li>
        <strong>1.000+</strong>
        <p>Reviews en waardering van meer dan <b>1.000</b> media </p>
      </li>
      <li>
        <strong>250.000.000+</strong>
        <p>Gekozen en gewaardeerd door meer dan <b>250 miljoen</b> mensen</p>
      </li>
      <li>
        <strong>80%+</strong>
        <p>Meer dan <b>80%</b> van de gebruikers heeft PRO geactiveerd</p>
      </li>
    </ul>
    <div class="map">
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
      <span class="recover recover22 smail"></span>
      <span class="recover recover23 smail"></span>
      <span class="recover recover24 smail"></span>
      <span class="recover recover25 smail"></span>
      <span class="recover recover26 smail"></span>
      <dl class="tradotto-da-tedesco">
        <dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
        <dd>
          <strong>Markus Thomas</strong>
          <p>Het ideale programma om mijn pc te versnellen en op te <br> schonen. Mijn oude pc is weer snel en krachtig!</p>
          <span></span>
        </dd>
      </dl>
      <dl class="html-it">
        <dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
        <dd>
          <strong>HTML.it</strong>
          <p>Advanced SystemCare PRO is een krachtig <br> programma om het beste uit je systeem te <br> halen. Bijna alles gaat automatisch, heel <br> gemakkelijk!</p>
          <span></span>
        </dd>
      </dl>
      <dl class="baixaki">
        <dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
        <dd>
          <strong>Baixaki</strong>
          <p>Advanced SystemCare presteert uitzonderlijk goed. <br>
            Het detecteert complexe problemen en lost ze direct op. </p>
          <span></span>
        </dd>
      </dl>
      <dl class="charles-r-widick">
        <dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
        <dd>
          <strong>Charles R. Widick</strong>
          <p>Ik kies nog altijd voor Advanced SystemCare PRO!</p>
          <span></span>
        </dd>
      </dl>
      <dl class="cnet">

        <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
        <dd>
          <strong>Cnet</strong>
          <p>Advanced SystemCare kan uw <br> computer nieuw leven in blazen. Het <br> vindt de juiste oplossing voor elk <br> probleem!</p>
          <span></span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end reviews -->

<!-- compare -->
<div class="compare wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="itemb">
        <div class="box">
          Uw huidige versie
          <span></span>
        </div>
      </th>
      <th class="text">Vergelijking van de functionaliteit:</th>

      <th class="itema">
        <div class="box">
          De PRO versie
          <span></span>
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="virtue">Basis opschoning, reparatie en optimalisatie van het systeem</td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">√</i></td>
      <td class="virtue">
        Tot wel 300% sneller internet met internet booster
        <span class="all-icons">Aggiornato</span>
      </td>

      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        Tot wel 200% snellere opstarttijd
        <span class="all-icons">Aggiornato</span>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        Grondige Windows register opschoning voorkomt computer crashes
        <span class="all-icons ra">Raccomandat</span>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        Sneller systeem door volledige harde schijf optimalisatie
        <span class="all-icons ra">Raccomandat</span>
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">Bescherm persoonlijke gegevens met het Privacy Schild<span class="all-icons nuo">Nuovo</span></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">Verbergt de  Digitale Vingerafdruk zodat surfgedrag privé blijft<span class="all-icons nuo">Aggiornato</span></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">Dicht beveiligingsgaten in real time<span class="all-icons">Aggiornato</span></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">
        Optimaal gemak met automatische updates en automatische RAM-opschoning
      </td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="virtue">Gratis 24/7 technische ondersteuning</td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="itemb radius"></td>
      <td class="virtue radius"></td>
      <td class="itema radius"> <span class="shadow"></span></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- bottomcart -->
<div class="bottomcart">
  <div class="wrapper clearfix">
    <div class="box"><img src="<?php echo $pResUrl;?>images/bottomcart-box.png" alt="Advanced SystemCare PRO 12"></div>
    <ul class="cartarea">
      <li class="top"><span>1 JAAR / 3 PC’s</span> <strong>-60%</strong></li>
      <li class="active bottom packs"><span>1 JAAR / 3 PC’s + SD</span> <strong>-75%</strong></li>
    </ul>
    <dl class="btnarea">
      <dt><strong>€19,99</strong> <del>€79,98 </del></dt>
      <dd>
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=nl-asc123pcsd1999&ref=nl_asc123pcsd1999purchase1905&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905-nl')">
          <i class="all-icons"></i> Activeer Nu!
        </a>
      </dd>
      <dd class="countdown4 isShow1"><strong>00</strong> min <strong>00</strong> sec <strong>00</strong> ms</dd>
    </dl>
  </div>
</div>
<!-- end bottomcart -->

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

<!-- popup -->
<div class="popup">
  <div class="content clearfix">
    <h2>Extra Korting, Speciaal Voor U!</h2>
    <img src="<?php echo $pResUrl;?>images/popup-asc.png" alt="Advanced SystemCare PRO 12">
    <dl>
      <dt>
        Claim uw korting binnen <strong class="popup-countdown">60</strong> sec
      </dt>
      <dd>
        <p class="price">Voor u slechts <strong>18,99</strong> <del>79,98</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=nl-asc123pcsd1899&ref=nl_asc123pcsd1899purchase1905&refs=nl_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905-nl')">
          CLAIM UW KORTING NU
        </a>
        <a class="popup-close" href="javascript: nlAscReturn.closePopup();">Nee, bedankt. Ik betaal liever de volle mep</a>
      </dd>
    </dl>
  </div>
</div>
<!-- end popup -->


<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  popupShow=false;
  var tw = MApp(2.2).datetime.getTimeZone();
  var nlAscReturn =  {
    off: ["60%", "75%", "35%", "62%"],   // off
    number: 104,    //  .bottomcart > dl > dt > background-position
    delNumber: 0,
    hrefNumber: 0,
    //all title
    title: [
      "Tijdelijke Aanbieding: met GRATIS Cadeau!",
      "Helaas Gratis Cadeau Uitverkocht... Pak Toch Nog 60% Korting!!",
      "Tijdelijke Aanbieding: 3 pc's voor de prijs van 1!",
      "Uw PC Als Nieuw! Tijdelijk 60% Korting"
    ],
    //.gifts > img > alt
    giftsAlt: [
      "Smart Defrag PRO 6",
      "Advanced SystemCare PRO 12",
    ],
    // .gifts > price
    price: ["€18,99", "€0"],
    // all del
    del: ["€49,99", "€79,98", "€29,99"],
    // banner asc-box
    bannerasc: [
      "<?php echo $pResUrl;?>images/asc-standard-3pc.png",
      "<?php echo $pResUrl;?>images/asc-soldout-3pc.png",
      "<?php echo $pResUrl;?>images/asc-return-1pc.png",
      "<?php echo $pResUrl;?>images/asc-return-3pc.png",
      "<?php echo $pResUrl;?>images/asc-final-3pc.png",
      "<?php echo $pResUrl;?>images/asc-final-soldout-3pc.png"
    ],
    // gifts asc-box
    giftsasc: [
      "<?php echo $pResUrl;?>images/asc-standard-gift.png",
      "<?php echo $pResUrl;?>images/asc-soldout-gift.png",
      "<?php echo $pResUrl; ?>images/gift-box.png",
      "<?php echo $pResUrl;?>images/gift-box-asc.png"
    ],
    // bottomcart asc-box
    bottomcartasc: [
      "<?php echo $pResUrl;?>images/bottomcart-box.png",
      "<?php echo $pResUrl;?>images/bottomcart-return-box.png",
      "<?php echo $pResUrl;?>images/bottomcart-final-box.png",
    ],
    // all buylink
    href: [
      "https://www.iobit.com/buy.php?product=nl-asc121y3pc1999&ref=nl_asc123pc1999purchase1905&refs=nl_purchase_asc&tw="+tw,
      "https://www.iobit.com/buy.php?product=nl-asc123pcsd1999&ref=nl_asc123pcsd1999purchase1905&refs=nl_purchase_asc&tw="+tw,
      "https://www.iobit.com/buy.php?product=nl-asc121pc1899&ref=nl_asc121pc1899returnpurchase1905&refs=nl_purchase_asc&tw="+tw,
      "https://www.iobit.com/buy.php?product=nl-asc121899-ac&ref=nl_asc123pc1899returnpurchase1905&refs=nl_purchase_asc&tw="+tw,
      "https://www.iobit.com/buy.php?product=nl-asc121y3pc1999&ref=nl_asc123pc1999returnpurchase1905&refs=nl_purchase_asc&tw="+tw
    ],
    // all buylink's ga code
    ga: [
      "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1905-nl')",
      "ga('send', 'event', 'ascbuy', 'buy', 'ascpurchasereturn1905-nl')"
    ],
    //standard function
    standardFun: function () {
      $(".banner .title h1").removeClass().addClass("standard").text(nlAscReturn.title[0]);
      $(".banner ul.panel").html("" +
        "<li class='small left'>" +
        "<img class='box' src='"+ nlAscReturn.bannerasc[0] +"' alt='Advanced SystemCare PRO 12'>" +
        "<h4><strong>"+ nlAscReturn.off[0] +"</strong> KORTING</h4>" +
        "<a class='buybtn' href='"+ nlAscReturn.href[0] +"' onclick='"+ nlAscReturn.ga[0] +"'>Activeer Nu!</a>" +
        "</li>" +
        "<li class='large right'>" +
        "<p class='countdown countdown1'><i class='all-icons'></i> <strong>00</strong> min <strong>00</strong> sec <strong class='last'>00</strong> ms*</p>" +
        "<img class='box' src='"+ nlAscReturn.giftsasc[0] +"' alt='Advanced SystemCare PRO 12 + Smart Defrag PRO 6'>" +
        "<h4><strong>"+ nlAscReturn.off[1] +"</s" +
        "trong> KORTING</h4>" +
        "<a class='buybtn large' href='"+ nlAscReturn.href[1] +"' onclick='"+ nlAscReturn.ga[0] +"'><i class='all-icons'></i> Activeer Nu!</a>"+
        "<p class='attention'>Al <strong class='viewNum'>1.559.502</strong> keer geactiveerd</p>" +
        "</li>");
      nlAscReturn.giftsFun();
      nlAscReturn.giftsStandardFun();
      nlAscReturn.number = 104;
      nlAscReturn.hrefNumber = 0;
      $(".bottomcart .box img").attr({"src": nlAscReturn.bottomcartasc[0]});
      $(".bottomcart ul").html("" +
        "<li class='top'><span>1 JAAR / 3 PC’s</span> <strong>-"+ nlAscReturn.off[0] +"</strong></li>" +
        "<li class='bottom active packs'><span>1 JAAR / 3 PC’s + SD</span> <strong>-"+ nlAscReturn.off[1] +"</strong></li>");
      nlAscReturn.bottomcartRegainFun();
    },
    // standard soldout function
    soldoutFun: function () {
      $(".banner .title h1").removeClass().addClass("soldout").text(nlAscReturn.title[1]);
      $(".banner ul.panel").html("" +
        "<li class='large left'>" +
        "<p class='countdown'>Voor 3 computers, slechts:</p>" +
        "<img class='box' src='"+ nlAscReturn.bannerasc[1] +"' alt='Advanced SystemCare PRO 12'>" +
        "<h4><strong>"+ nlAscReturn.off[0] +"</strong> KORTING</h4>" +
        "<a class='buybtn large' href='"+ nlAscReturn.href[0] +"' onclick='"+ nlAscReturn.ga[0] +"'><i class='all-icons'></i> Activeer Nu!</a>" +
        "</li>" +
        "<li class='small right'>" +
        "<img class='box' src='"+ nlAscReturn.giftsasc[1] +"' alt='Advanced SystemCare PRO 12 + Smart Defrag PRO 6'>" +
        "<h4><strong>"+ nlAscReturn.off[1] +"</strong> KORTING</h4>" +
        "<a class='buybtn' href='"+ nlAscReturn.href[1] +"' onclick='"+ nlAscReturn.ga[0] +"'>Activeer Nu!</a>" +
        "<span></span>" +
        "</li>");
      nlAscReturn.number = 104;
      nlAscReturn.hrefNumber = 0;
      nlAscReturn.giftsStandardFun();
      nlAscReturn.giftsSoldoutFun();
      $(".bottomcart .box img").attr({"src": nlAscReturn.bottomcartasc[0]});
      $(".bottomcart ul").html("" +
        "<li class='top active'><span>1 JAAR / 3 PC’s</span> <strong>-"+ nlAscReturn.off[0] +"</strong></li>" +
        "<li class='bottom packs'><span>1 JAAR / 3 PC’s + SD</span> <strong>-"+ nlAscReturn.off[1] +"</strong></li>");
      nlAscReturn.bottomcartFun($(".bottomcart ul li").eq(0));
      nlAscReturn.bottomcartExceed();
    },
    // return function
    returnFun: function () {
      $(".banner .title h1").removeClass().addClass("return").text(nlAscReturn.title[2]);
      $(".banner ul.panel").html("" +
        "<li class='small left'>" +
        "<img class='box' src='"+ nlAscReturn.bannerasc[2] +"' alt='Advanced SystemCare PRO 12'>" +
        "<h4><strong>"+ nlAscReturn.off[2] +"</strong> KORTING</h4>" +
        "<a class='buybtn' href='"+ nlAscReturn.href[2] +"' onclick='"+ nlAscReturn.ga[1] +"'>Activeer Nu!</a>" +
        "</li>" +
        "<li class='large right'>" +
        "<p class='countdown countdown2'><i class='all-icons'></i> <strong>00</strong> min <strong>00</strong> sec <strong class='last'>00</strong> ms*</p>" +
        "<img class='box' src='"+ nlAscReturn.bannerasc[3] +"' alt='Advanced SystemCare PRO 12'>" +
        "<h4><strong>"+ nlAscReturn.off[3] +"</strong> KORTING</h4>" +
        "<a class='buybtn large' href='"+ nlAscReturn.href[3] +"' onclick='"+ nlAscReturn.ga[1] +"'><i class='all-icons'></i> Activeer Nu!</a>" +
        "</li>");
      nlAscReturn.giftsFun();
      nlAscReturn.giftsReturnFun();
      nlAscReturn.number = 204;
      nlAscReturn.hrefNumber = 2;
      $(".bottomcart .box img").attr({"src": nlAscReturn.bottomcartasc[1]});
      $(".bottomcart ul").html("" +
        "<li class='top'><span>1 JAAR / 1 PC</span> <strong>-"+ nlAscReturn.off[2] +"</strong></li>" +
        "<li class='bottom active packs'><span>1 JAAR / 3 PC’s</span> <strong>-"+ nlAscReturn.off[3] +"</strong></li>");
      nlAscReturn.bottomcartRegainFun();
    },
    // final(return soldout) function
    finalFun: function () {
      $(".banner .title h1").removeClass().addClass("final").text(nlAscReturn.title[3]);
      $(".banner ul.panel").html("" +
        "<li class='small moreleft'>" +
        "<img class='box' src='"+ nlAscReturn.bannerasc[2] +"' alt='Advanced SystemCare PRO 12'>" +
        "<h4><strong>"+ nlAscReturn.off[2] +"</strong> KORTING</h4>" +
        "<a class='buybtn' href='"+ nlAscReturn.href[2] +"' onclick='"+ nlAscReturn.ga[1] +"'>Activeer Nu!</a>" +
        "</li>" +
        "<li class='large middle'>" +
        "<p class='countdown'>Voor 3 computers, slechts:</p>" +
        "<img class='box' src='"+ nlAscReturn.bannerasc[4] +"' alt='Advanced SystemCare PRO 12'>" +
        "<h4><strong>"+ nlAscReturn.off[0] +"</strong> KORTING</h4>" +
        "<a class='buybtn large' href='"+ nlAscReturn.href[4] +"' onclick='"+ nlAscReturn.ga[1] +"'><i class='all-icons'></i> Activeer Nu!</a>" +
        "</li>" +
        "<li class='small moreright'>" +
        "<img class='box' src='"+ nlAscReturn.bannerasc[5] +"' alt='Advanced SystemCare PRO 12 + Smart Defrag PRO 6'>" +
        "<h4><strong>"+ nlAscReturn.off[3] +"</strong> KORTING</h4>" +
        "<a class='buybtn' href='"+ nlAscReturn.href[3] +"' onclick='"+ nlAscReturn.ga[1] +"'>Activeer Nu!</a>" +
        "<span></span>" +
        "</li>");
      nlAscReturn.number = 204;
      nlAscReturn.hrefNumber = 2;
      nlAscReturn.giftsReturnFun();
      nlAscReturn.giftsSoldoutFun();
      $(".bottomcart .box img").attr({"src": nlAscReturn.bottomcartasc[2]});
      $(".bottomcart ul").html("" +
        "<li class='moretop'><span>1 JAAR / 1 PC</span> <strong>-"+ nlAscReturn.off[2] +"</strong></li>" +
        "<li class='middle packs'><span>1 JAAR / 3 PC’s</span> <strong>-"+ nlAscReturn.off[3] +"</strong></li>" +
        "<li class='morebottom active'><span>1 JAAR / 3 PC’s</span> <strong>-"+ nlAscReturn.off[0] +"</strong></li>");
      $(".bottomcart ul li").on("hover", function () {
        nlAscReturn.bottomcartFun($(this));
      });
      nlAscReturn.bottomcartFun($(".bottomcart ul li").eq(2));
      nlAscReturn.bottomcartExceed();
    },
    //gifts regain
    giftsFun: function () {
      $(".gifts.default").removeClass("hide");
      $(".gifts.exceed").addClass("hide");
    },
    //gifts soldout
    giftsSoldoutFun: function () {
      $(".gifts.default").addClass("hide");
      $(".gifts.exceed").removeClass("hide");
    },
    //gifts standard
    giftsStandardFun: function () {
      $(".gifts").removeClass("return");
      $(".gifts.default .img-box").attr({"src": nlAscReturn.giftsasc[2], "alt": nlAscReturn.giftsAlt[0]});
      $(".gifts.default .price span").html("<strong>"+ nlAscReturn.price[0] +"</strong> <del>"+ nlAscReturn.del[2] +"</del>");
      $(".gifts.default dl").html("" +
        "<dt>Smart Defrag PRO is de ideale aanvulling op Advanced SystemCare <br> PRO. Samen halen ze het maximale uit uw harde schijf!</dt>" +
        "<dd>Automatische Defragmentatie</dd>" +
        "<dd>Sneller toegang tot uw bestanden</dd>" +
        "<dd>SSDs trimmen voor de beste resultaten</dd>");
      $(".gifts.default .buybtn").attr({"href": nlAscReturn.href[1], "onclick": nlAscReturn.ga[0]}).text("Claim Uw Gratis Cadeau!");
      $(".gifts.exceed .buybtn").attr({"href": nlAscReturn.href[0], "onclick": nlAscReturn.ga[0]}).text("Claim Uw Gratis Cadeau!");
    },
    //gifts return
    giftsReturnFun: function () {
      $(".gifts").addClass("return");
      $(".gifts.default .img-box").attr({"src": nlAscReturn.giftsasc[3], "alt": nlAscReturn.giftsAlt[1]});
      $(".gifts.default .price span").html("<strong>"+ nlAscReturn.price[1] +"</strong> <del>"+ nlAscReturn.del[0] +"</del>");
      $(".gifts.default dl").html("" +
        "<dt>ASC PRO Op 3 PC’s Voor De Prijs Van 1!</dt>" +
        "<dd>Gebruik snel onze tijdelijke aanbieding: Betaal voor </dd>" +
        "<dd>Advanced SystemCare PRO op 1 pc en krijg de licentie </dd>" +
        "<dd>voor 2 extra pc’s helemaal gratis. Beperkt Beschikbaar!</dd>");
      $(".gifts.default .buybtn").attr({"href": nlAscReturn.href[3], "onclick": nlAscReturn.ga[1]}).text("CLAIM UW KORTING!");
      $(".gifts.exceed .buybtn").attr({"href": nlAscReturn.href[4], "onclick": nlAscReturn.ga[1]}).text("CLAIM UW KORTING!");
    },
    //bottomcart selecte
    bottomcartFun: function (selector) {
      var index = selector.index();
      selector.addClass("active").siblings().removeClass('active');
      $(".bottomcart .box img").stop().animate({"marginLeft": index*(-252)}, 500);
      $(".bottomcart dl dt").html("<strong>€19,99</strong> <del>"+ nlAscReturn.del[index+nlAscReturn.delNumber] +" </del>").css({"backgroundPosition": "center "+ -(nlAscReturn.number+index*50) + "px"});
      $(".bottomcart .buybtn").attr({"href": nlAscReturn.href[index+nlAscReturn.hrefNumber]});
      if (index == 1) { $(".bottomcart dl dd.countdown4").removeClass("isShow0").addClass("isShow1");} else { $(".bottomcart dl dd.countdown4").removeClass("isShow1").addClass("isShow0");}
    },
    //bottomcart regain
    bottomcartRegainFun: function () {
      $(".bottomcart ul li.packs").removeClass("exceed").addClass("active").siblings().removeClass("active");
      $(".bottomcart ul li").on("hover", function () {
        nlAscReturn.bottomcartFun($(this));
      });
      nlAscReturn.bottomcartFun($(".bottomcart ul li:last-child"));
    },
    //bottomcar exceed
    bottomcartExceed: function () {
      $(".bottomcart ul li.packs").addClass("exceed").removeClass("active");
      $(".bottomcart ul li.packs").unbind("hover");
    },
    //popup
    showPopup: function () {
      $(".popup").fadeIn(500,function(){
        popupShow=true;
      });
    },
    closePopup: function () {
      cSet('enascanni_s',-2);
      $(".popup").fadeOut(500,function(){
        popupShow=false;
      });
    }
  }
</script>
</body>
</html>