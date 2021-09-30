<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=76036125;
$buyNum = number_format(ceil(microtime_float()*1000/20000) - $reduceNum);

$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
    'bdda','arda','box','notibc','box13thbc','xgiftbox','xactivate'))){
  $refStr.='-'.$_GET['ref'];
}
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>80% Kerstkorting op IObit Malware Fighter PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript">
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 20000);
</script>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/nl/index.php" target="_blank">IObit</a>
    <div class="title">
      <h1>  Speciale Kerstaanbieding  </h1>
      <h2> Beperkt aantal cadeaupakketten, slechts eens per jaar! </h2>
    </div>
    <div class="panel clearfix">
      <div class="box small">
        <img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="">
        <p><strong>19</strong><span><b>95</b> <del class="original">€39,95</del></span></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-imf61pc1995&ref=nl_imf61pc1995purchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811-nl')">
          <i></i> <span>Profiteer nu</span>
        </a>
      </div>
      <div class="box">
        <ul>
          <li><strong>11</strong> UUR :</li>
          <li><strong>43</strong> MIN :</li>
          <li><strong>44</strong> SEC :</li>
          <li><strong>644</strong> MS*</li>
        </ul>
        <img src="<?php echo $pResUrl; ?>images/imf-three-box.png" alt="">
        <p><strong>21</strong><span><b>95</b> <del class="original">€139,93</del></span></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=nl-imf6amcpf2195&ref=nl_imf6amcpf2195purchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811-nl')">
          <i></i> <span>Profiteer nu</span>
        </a>
        <p class="bought">
          <img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Al  <span class="buyNum"><?php echo $buyNum;?></span> keer gekocht
        </p>
      </div>
    </div>
  </div>
  <span class="snow list01"></span>
  <span class="snow snow-clarity  list02"></span>
  <span class="snow snow-smail list03"></span>
  <span class="round  list04"></span>
  <span class="round round-smail list05"></span>
  <span class="round round-clarity list06"></span>
  <span class="round round-large list07"></span>
  <span class="snow snow-clarity  list15"></span>
  <span class="snow snow-smail  list16"></span>
  <span class="snow snow-clarity  list17"></span>
  <span class="snow snow-smail  list18"></span>
  <span class="round round-clarity list23"></span>
  <span class="round round-clarity list24"></span>

  <span class="round round-clarity list08"></span>
  <span class="round round-smail list09"></span>
  <span class="round round-large  list10"></span>
  <span class="round list11"></span>
  <span class="snow snow-clarity list12"></span>
  <span class="snow snow-smail list13"></span>
  <span class="snow list14"></span>
  <span class="snow snow-clarity  list19"></span>
  <span class="snow snow-smail  list20"></span>
  <span class="snow snow-clarity  list21"></span>
  <span class="snow snow-smail  list22"></span>
  <span class="round round-clarity list25"></span>
  <span class="round round-clarity list26"></span>
</div>
<!-- banner end -->
<!-- awards start -->
<div class="awards">
  <img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
</div>
<!-- awards end -->
<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <h2><span>Waarom heeft u IObit Malware Fighter PRO nodig?</span></h2>
    <img class="computer" src="<?php echo $pResUrl; ?>images/computer.png" alt="">
    <div class="right-lists">
      <ul>
        <li class="icon1">De Kluis beschermt uw belangrijke bestanden tegen <br> ransomware door ze te isoleren.</li>
        <li class="icon2">De Anti-ransomware Engine voorkomt dat uw computer <br> wordt gegijzeld.</li>
        <li class="icon3">Wist automatisch uw surfsporen, zodat u niet gevolgd <br> kunt worden.</li>
        <li class="icon4"> Voorkomt dat onbevoegden toegang tot uw camera krijgen.</li>
      </ul>
      <a class="intro" href="javascript:void(0)">  Meer over de PRO versie >></a>
    </div>
  </div>
</div>
<!-- feature end -->
<!-- gift message start -->
<div class="gift-message">
  <div class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/imf-center-box.png" alt="" class="img-box">
    <div class="right-message">
      <img src="<?php echo $pResUrl; ?>images/gift-box.png" alt="" class="img-box">
      <div class="box">
        <h3>Twee gratis cadeaus</h3>
        <h4>Protected Folder: </h4>
        <p>Vergrendel uw bestanden met een wachtwoord (normaal €39,95)</p>
        <h4>AMC Security: </h4>
        <p> Bescherm en versnel uw mobiele apparaat (normaal €19,99)</p>
      </div>
    </div>
  </div>
</div>
<!-- gift message end -->
<!-- between-buy start -->
<div class="between-buy">
  <div class="wrapper">
    <p class="price"><strong>€21,95 </strong> <del>€139,93</del></p>
    <a href="https://www.iobit.com/buy.php?product=nl-imf6amcpf2195&ref=nl_imf6amcpf2195purchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811-nl')" class="buybtn"><i></i> <span>PROFITEER NU</span>   </a>
    <p class="last"> <i></i> Al <span class="buyNum"><?php echo $buyNum;?></span> keer gekocht</p>
  </div>
</div>
<!-- between-buy end -->
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <!-- nav -->
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <!-- software -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/software.png" alt=""></dt>
          <dd>
            <h2>Media recensie</h2>
            <p>"Het programma gebruikt twee engines, de eigen en de Bitdefender engine, en blijkt effectief tegen malware die vergelijkbare tools niet kunnen vinden. Het is daarom goed om deze naast eventuele eigen anti-virussoftware te draaien. Het kan een brede selectie spyware, ransomware, adware, Trojans, wormen, keyloggers en bots detecteren." </p>
            <cite>Software.Informer</cite>
          </dd>
        </dl>
        <!-- Bob Bassett -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/bob-bassett.png" alt=""></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!” </p>
            <cite>Bob Bassett</cite>
          </dd>
        </dl>
        <!-- Peter Stoffers -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/peter-stoffers.png" alt=""></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden." </p>
            <cite>Peter Stoffers</cite>
          </dd>
        </dl>
        <!-- Gelu Batir -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/gelu-batir.png" alt=""></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."</p>
            <cite>Gelu Batir</cite>
          </dd>
        </dl>
        <!-- David Cassidy -->
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/david-cassidy.png" alt=""></dt>
          <dd>
            <h2>Klantbeoordeling</h2>
            <p>"Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."</p>
            <cite>David Cassidy</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

<!-- comparison_table start -->
<div class="comparison_table wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text">Alle voordelen van IObit  <br> Malware Fighter PRO in één oogopslag</th>
      <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
      <th class="itema"><span>IMF PRO voor 1 PC</span><strong>€19,95</strong> <del>€39,95</del><a href="https://www.iobit.com/buy.php?product=nl-imf61pc1995&ref=nl_imf61pc1995purchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811-nl')" class="buybtn">PROFITEER NU</a></th>
      <th class="itemb"><span>IMF PRO voor 3 PC’s</span><strong>€21,95</strong> <del>€139,93</del><a href="https://www.iobit.com/buy.php?product=nl-imf6amcpf2195&ref=nl_imf6amcpf2195purchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811-nl')" class="buybtn">PROFITEER NU</a></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon01.png"></td>
      <td class="virtue">Basis Anti-Malware Functie<sup>Verbeterd</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon02.png"></td>
      <td class="virtue">Tot wel 130% sneller scanproces <sup>Verbeterd</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon03.png"></td>
      <td class="virtue">Beveiliging tijdens downloaden & AdBlocker voor een veilige online omgeving <sup>Verbeterd</sup></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon04.png"></td>
      <td class="virtue">Bescherm Specifieke Belangrijke Mappen tegen Ongewenste Toegang met de Kluis <sup class="red">Nieuw</sup></td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon05.png"></td>
      <td class="virtue">Gloednieuwe Anti-ransomware Engine om Verdachte Toegang tot BelangrijkeBestanden te Blokkeren <sup class="red">Nieuw</sup></td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon06.png"></td>
      <td class="virtue">Basis bescherming in real-time tegen kwaadaar dig gedrag  <sup>Verbeterd</sup></td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon07.png"></td>
      <td class="virtue">Geavanceerde bescherming met de Bitdefender Anti-Virus Engine <sup class="red">Nieuw</sup></td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon08.png"></td>
      <td class="virtue">Opstart Schijfbescherming Tegen Kwaadaardige Aanvallen met MBR Guard <sup>Verbeterd</sup> </td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon09.png"></td>
      <td class="virtue">Anti-Malware bescherming met de unieke Dual Core Engine </td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon10.png"></td>
      <td class="virtue">Beveilig uw webcam tegen ongeautoriseerde toegang</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon11.png"></td>
      <td class="virtue">Geavanceerde bescherming in real-time voor ultieme bescherming <sup>Verbeterd</sup></td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon12.png"></td>
      <td class="virtue">Voorkom geïnfecteerd te raken via de USB-aansluiting</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon13.png"></td>
      <td class="virtue"> Detecteert schadelijke processen in RAM</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon14.png"></td>
      <td class="virtue">Automatisch wissen van uw sporen online met de Anti-Browser tracking</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon15.png"></td>
      <td class="virtue">Detecteert en analyseert kwaadaardig gedrag</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon16.png"></td>
      <td class="virtue">Werkt op de achtergrond</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon17.png"></td>
      <td class="virtue">Automatische updates</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon18.png"></td>
      <td class="virtue">Gratis 24/7 klantenservice</td>
      <td class="itemb"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th class="itemb"><span>IObit Malware Fighter FREE</span></th>
      <th class="itema"><span>IMF PRO voor 1 PC</span><strong>€19,95</strong> <del>€39,95</del><a href="https://www.iobit.com/buy.php?product=nl-imf61pc1995&ref=nl_imf61pc1995purchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811-nl')" class="buybtn">PROFITEER NU</a></th>
      <th class="itemb"><span>IMF PRO voor 3 PC’s</span><strong>€21,95</strong> <del>€139,93</del><a href="https://www.iobit.com/buy.php?product=nl-imf6amcpf2195&ref=nl_imf6amcpf2195purchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=nl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811-nl')" class="buybtn">PROFITEER NU</a></th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison_table end -->
<!-- service start -->
<div class="service wrapper clearfix">
  <dl class="payment">
    <dd>BETAALMETHODEN</dd>
    <dt><img src="<?php echo $pResUrl;?>images/payment.png" alt=""></dt>
  </dl>
  <dl class="moneyback">
    <dd>60 DAGEN <br> NIET-GOED-GELD-TERUG-GARANTIE</dd>
    <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
  </dl>
  <dl class="godaddy">
    <dd>VEILIG BETALEN</dd>
    <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
  </dl>
</div>
<!-- service end -->
<!-- footer start -->
<div class="footer clearfix">
  <dl class="annotation">
    <dt>*Opmerkingen:</dt>
    <dd>①IObit behoudt zich het recht voor dergelijke promoties te allen tijde naar eigen goeddunken te wijzigen zonder dit van tevoren aan te kondigen.</dd>
    <dd>②Resultaten met betrekking tot verbeteringen in prestaties kunnen afwijken afhankelijk van het systeem.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle Rechten Voorbehouden</p>
</div>
<!-- footer end -->
<!-- sides bg start -->
<div class="container clearfix">
  <img class="fl" src="<?php echo $pResUrl;?>images/left-bg.jpg" alt="">
  <img class="fr" src="<?php echo $pResUrl;?>images/right-bg.jpg" alt="">
</div>
<!-- sides bg end -->
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script>
    $(function () {
      $('#dg-container').gallery();
    })
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $(".banner .box ul strong").eq(0).text(h).end().eq(1).text(i).end().eq(2).text(s).end().eq(3).text(mi);
    setTimeout('cycleCountdown()', 1);
  }
  $(function () {
    $.fn.target=function (target) {
      $(this).click(function() {
        var Theigth = target.offset().top;
        $("html, body").animate({scrollTop: Theigth}, 'slow');
      });
    };
    $("a.intro").target($("#compare"));
    cycleCountdown();
  })
</script>
</body>
</html>