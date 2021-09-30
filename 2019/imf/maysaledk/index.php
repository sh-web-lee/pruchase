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
  <html lang="dk">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Køb IObit Malware Fighter PRO til rimelige priser </title>
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
      <a class="logo" href="http://www.iobit.com/dk/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>All-round beskyttelse til rimelige priser</h1>

      <!-- offers: IMF 1 PC|1 TEAR -->
      <div class="offer offer3 fl">
        <!-- title -->
        <h3>Beskyttelse til dig</h3>
        <!-- IMF(1PC|1YEAR) -->
        <img class="box" src="<?php echo $pResUrl;?>images/offer-box03.png" alt="">
        <!-- price -->
        <p class="price fr"><span>189kr.</span></p>
        <div class="clear"></div>
        <!-- offer3 buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-imf71pc189&ref=dk_imf71pc1905<?php echo $refStr;?>&refs=dk_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1905-dk')">
          <i></i>
          <span>Køb nu</span>
        </a>
      </div>

      <!-- offer: IMF 3 PC|1 YEAR & PF -->
      <div class="offer offer1 fl">
        <!-- title -->
        <h3>Omfattende beskyttelse</h3>
        <!-- countdown -->
        <p class="countdown">
          <strong>00</strong> min
          <strong>00</strong> sec
          <strong class="small">000</strong> ms
        </p>
        <!-- IMF(3PC|1YEAR) && PF -->
        <img class="box" src="<?php echo $pResUrl;?>images/offer-box01.png" alt="">
        <!-- price -->
        <p class="price fr"><span>199kr.</span></p>
        <div class="clear"></div>
        <!-- offer1 buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-imf73pcpf199&ref=dk_imf73pcpf1905<?php echo $refStr;?>&refs=dk_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1905-dk')">
          <i></i>
          <span>Køb nu</span>
        </a>
      </div>

      <!-- offer: IMF 3 PC|1 YEAR -->
      <div class="offer offer2 fr">
        <!-- title -->
        <h3>Beskyttelse til din familie</h3>
        <!-- IMF(3PC|1YEAR) -->
        <img class="box" src="<?php echo $pResUrl;?>images/offer-box02.png" alt="">
        <!-- price -->
        <p class="price fr"><span>199kr.</span></p>
        <div class="clear"></div>
        <!-- offer2 buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-imf73pc199&ref=dk_imf73pc1905<?php echo $refStr;?>&refs=dk_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1905-dk')">
          <i></i>
          <span>Køb nu</span>
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
        <dd>Betalingsmetoder</dd>
        <dt><img src="<?php echo $pResUrl;?>images/payment.png" alt=""></dt>
      </dl>
      <!-- monyback -->
      <dl class="moneyback fl">
        <dd>
         60 dages tilfredshesdgaranti
        </dd>
        <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
      </dl>
      <!-- godaddy -->
      <dl class="godaddy fl">
        <dd>Certifikat</dd>
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
    <h2>Derfor har du brug for IObit Malware Fighter PRO</h2>
    <!-- left-message -->
    <div class="left-message fl">
      <h3><strong>3 motorer </strong> der arbejder perfekt sammen</h3>
      <img class="arrow" src="<?php echo $pResUrl;?>images/arrow.png" alt="">
      <dl class="clearfix" data-index="01" data-color="blue">
        <dd class="fl">
          <h4>Bitdefender motor</h4>
          <p>
            Kendt motor mod malware og virusser
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="02" data-color="blue">
        <dd class="fl">
          <h4>IObit Anti-malware motor</h4>
          <p>
            Supplerer Bitdefender-motoren og <br> beskytter mod al malware
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="03" data-color="blue">
        <dd class="fl">
          <h4>IObit Anti-ransomware motor</h4>
          <p>Stopper ransomware-infektioner</p>
        </dd>
        <dt class="fr paddingtop15"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
      </dl>
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <dl data-index="04" data-color="green">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
        <dd>
          <h4>Beskyttelse i realtid</h4>
          <p>
            Håndterer malware øjeblikkeligt
          </p>
        </dd>
      </dl>
      <dl data-index="05" data-color="green">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
        <dd>
          <h4>Sikker</h4>
          <p>
            Beskytter dine vigtige filer ved at isolere <br> dem
          </p>
        </dd>
      </dl>
    </div>
    <!-- detail-show -->
    <div class="detail-show clearfix">
      <div id="show01" class="showes fl on blue">
        <h5>Bitdefender motor</h5>
        <hr>
        <p>Den berømte Bitdefender-motor tilbyder fremragende beskyttelse mod virusser og malware. Desuden opdateres den gigantiske database dagligt. </p>
      </div>
      <div id="show02" class="showes fl blue">
        <h5>IObit Anti-malware motor</h5>
        <hr>
        <p>Vores Anti-malware-motor er en ideel tilføjelse til Bitdefender-motoren. Sammen garanterer de, at din computer forbliver malware-fri.</p>
      </div>
      <div id="show03" class="showes fl blue">
        <h5>IObit Anti-ransomware motor</h5>
        <hr>
        <p>Ransomware bliver mere og mere sofistikeret. Vores anti-ransomware-motor forhindrer din computer i at blive last.</p>
      </div>
      <div id="show04" class="showes fl green">
        <h5>Beskyttelse i realtid</h5>
        <hr>
        <p>Med alle tre motorer aktiveret er din computer altid beskyttet. Trusler fjernes øjeblikkeligt og du behøver ikke bekymre dig om dem.</p>
      </div>
      <div id="show05" class="showes fl green">
        <h5>Sikker</h5>
        <hr>
        <p>Gem dine vigtige filer i Safe-Box. Her er de isoleret fra andre filer og programmer, selv ikke ransomware kan påvirke dem.</p>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gift start -->
  <div class="gift">
    <div class="wrapper clearfix">
      <!-- PF -->
      <img class="gift-box fl" src="<?php echo $pResUrl;?>images/gift-pf.png" alt="">
      <!-- details -->
      <dl class="gift-details fl">
        <dt><h3>Protected Folder fuldstændig gratis</h3></dt>
        <dd>
          <p>Beskytter dine vigtige filer og andre mapper med kodeord!</p>
          <p>Stopper andre og hackere i at spionere på din copmuter!</p>
        </dd>
      </dl>
      <!-- message -->
      <div class="gift-message fr">
        <!-- price -->
        <p class="price"><b>0kr.</b><del>399 kr.</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-imf73pcpf199&ref=dk_imf73pcpf1905<?php echo $refStr;?>&refs=dk_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1905-dk')">
          <i></i>
          <span>Få denne pakke</span>
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
      <h2>Editors’ valg</h2>
      <h3>Med priserne vi har modtaget fra disse medier over de sidste seks 6, ved du, at du er på det rette sted med os.</h3>
      <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
      <!-- content -->
      <div class="content">
        <ul class="clearfix">
          <li>
            <img src="<?php echo $pResUrl;?>images/peter-stoffers.png" alt="Peter Stoffers">
            <p>Peter Stoffers</p>
          </li>
          <li class="active">
            <img src="<?php echo $pResUrl;?>images/betanews.png" alt="Betanews.com">
            <p>Betanews.com</p>
          </li>
          <li>
            <img src="<?php echo $pResUrl;?>images/bob-bassett.png" alt="Bob Bassett">
            <p>Bob Bassett</p>
          </li>
        </ul>
        <div class="details">
          <dl>
            <dt>Brugeranmeldelser</dt>
            <dd>"For nogle år siden henledte nogen min opmærksomheden på IObit Malware Fighter. Først var jeg skeptisk, men efter at have installeret det blev det min favorit-anti-malware-program. Det er meget nemt at bruge. Gennem årene har det allerede opdaget flere trusler og fjernet dem. I samarbejde med de andre IObit-programmer, som for eksempel ASC, har jeg en god pc-beskyttelse. Jeg anbefaler nu disse programmer til alle mine venner og familie. "</dd>
          </dl>
          <dl class="active">
            <dt>Medieanmeldelser</dt>
            <dd>"IObit Malware Fighter PRO er en komplet sikkerhedspakke. Det luger ud i spyware, trojaner og alle andre ubehageligheder, der er også Startup Guard, som sikrer, at ingen ondsindede processer starter med Windows, Browser Guard, der sikrer, at ingen software tilføjer ændringer til din webbrowser, File Guard, der sikrer, at ukendte filer du åbner ikke forårsager skade, USB Guard, Process Guard og meget mere."</dd>
          </dl>
          <dl>
            <dt>Brugeranmeldelser</dt>
            <dd>"Vi plejede at bruge op til et dusin forskellige programmer for at holde vores maskiner kørende og holde de onde gutter ude. Det tog timer hver uge at opretholde sikkerhed og ydeevne. Nu med IObit Malware Fighter Pro er alt samlet på ét sted, og det tager os bare et par minutter hver anden dag at udføre de samme opgaver med meget mere tillid. Vi har ikke haft nogen problemer, siden vi begyndte at bruge jeres program."</dd>
          </dl>
        </div>
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
          <td> Se hvad PRO-udgaven kan gøre for dig:</td>
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
            Anti-malware med den seneste IObit malware database
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
            Opdager 203,000,000+ trusler med Bitdefender og IObit
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
            Fuld anti-malware-funktion med unik "dual-core-engine"
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
            Ingen kan få adgang til dine personlige data uden kodeord
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
            Auto-rensning af private spor med browser-anti-sporing 
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
            Stopper ransomware fra at forsøge at kryptere dine vigtige filer
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
            Omfattende realtidsbeskyttelse for maksimal pc-sikkerhed
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
            Beskyt dit kamera mod uautoriseret adgang
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
            Forebygger virusinfektion overført via usb-enheder
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
            Gratis 24/7 teknisk support ved behov
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
          <img src="<?php echo $pResUrl;?>images/bottombuy-box01.png" alt="">
          <img src="<?php echo $pResUrl;?>images/bottombuy-box02.png" alt="">
          <img src="<?php echo $pResUrl;?>images/bottombuy-box03.png" alt="">
        </div>
      </div>
      <!-- option -->
      <ul class="option fl clearfix">
        <li class="active" data-url="https://www.iobit.com/buy.php?product=dk-imf73pcpf199&ref=dk_imf73pcpf1905<?php echo $refStr;?>&refs=dk_purchase_imf">
          <img src="<?php echo $pResUrl;?>images/bottombuy-icon01.png" alt="">
          <span>Omfattende beskyttelse</span>
        </li>
        <li data-url="https://www.iobit.com/buy.php?product=dk-imf73pc199&ref=dk_imf73pc1905<?php echo $refStr;?>&refs=dk_purchase_imf" >
          <img src="<?php echo $pResUrl;?>images/bottombuy-icon02.png" alt="">
          <span>Beskyttelse til din familie</span>
        </li>
        <li data-url="https://www.iobit.com/buy.php?product=dk-imf71pc189&ref=dk_imf71pc1905<?php echo $refStr;?>&refs=dk_purchase_imf">
          <img src="<?php echo $pResUrl;?>images/bottombuy-icon03.png" alt="">
          <span>Beskyttelse til dig</span>
        </li>
      </ul>
      <!-- message -->
      <div class="bottombuy-message fr">
        <p class="price price00">199 kr.</p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=dk-imf73pcpf199&ref=dk_imf73pcpf1905<?php echo $refStr;?>&refs=dk_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1905-dk')">
          <i></i>
          <span>Køb nu</span>
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
    var _src = "<?php echo $pResUrl;?>images/offer-box04.png";
  </script>
  </body>
  </html>