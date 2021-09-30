<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
?>

<!DOCTYPE html>
  <html lang="nl">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title> IObit Malware Fighter PRO: Essentiële bescherming in een sterk verbonden wereld</title>
    <meta name="Copyright" content="IObit">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
  </head>
  <body>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <!-- logo -->
      <a class="logo" href="http://www.iobit.com/nl/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>De Essentiële Beveiliging in een Sterk Verbonden Wereld</h1>
      <div class="content exceed hide">
        <h3>Volledig beschermd voor slechts:</h3>
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="" class="imf-box">
        </div>
        <div class="price-message">
          <p><strong>€ 21,99</strong><del>€ 79,99</del></p>
          <p class="pc"><span></span>1 Jaar, 3 pc’s<span></span></p>
          <a href="https://www.iobit.com/buy.php?product=nl_imf73pcpf2199&ref=nl_imf73pcpf2199purchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2002-nl')" class="buybtn">BESCHERM MIJ NU</a>
        </div>
        <p class="moneyback"><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""> Krijg zonder problemen binnen 60 dagen uw geld terug, als u niet tevreden bent.</p>
      </div>

      <div class="box">
        <div class="price">
          <strong>€ 21,99</strong> <del>€ 79,99</del>
        </div>
        <p><span></span>1 Jaar, 3 pc’s<span></span></p>
        <a href="https://www.iobit.com/buy.php?product=nl-imf73pc2199&ref=nl_imf73pc2199purchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2002-nl')" class="buybtn border">BESCHERM MIJ NU</a>
      </div>
       <div class="box three-box">
        <div class="price">
          <strong>€ 21,99</strong> <del>€ 79,99</del>
        </div>
        <p><span></span>1 Jaar, 3 pc’s<span></span></p>
        <a href="https://www.iobit.com/buy.php?product=nl_imf73pcpf2199&ref=nl_imf73pcpf2199purchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
          onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2002-nl')" class="buybtn">BESCHERM MIJ NU</a>
        <p class="date-title">Tijdelijke aanbieding, nog maar </p>
        <h2><strong>00</strong> : <strong>00</strong> : <strong>00</strong> : <strong>000</strong></h2>
      </div>
      <p class="moneyback"><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""> Krijg zonder problemen binnen 60 dagen uw geld terug, als u niet tevreden bent.</p>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <span class="arrow"></span>
    <div class="wrapper">
      <h2>Waarom heeft u IObit Malware Fighter PRO nodig?</h2>
      <div class="feature-change">
          <a href="javascript:void(0);" class="dg-prev"></a>
          <a href="javascript:void(0);" class="dg-next"></a>
          <ul>
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
          </ul>
          <div class="continer">
              <div class="roll">
                <div class="part part01" data-num="0">
                  <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="">
                  <div class="right-message">
                    <p>Bitdefender en IObit garanderen samen uw veiligheid</p>
                    <p class="center">Voorkom dat uw bestanden vergrendeld worden door ransomware</p>
                    <p>Blijf internetcriminelen telkens een stap voor</p>
                  </div>
                </div>
                <div class="part part02" data-num="1">
                  <h3>Bitdefender en IObit garanderen samen uw veiligheid</h3>
                  <div class="left-message">
                    Het is handig dat internet ons verbindt met de hele wereld, maar het brengt ook veel gevaren met zich mee. Met hulp van de Bitdefender anti-virus engine die meer dan 203.000.000 bedreigingen herkent, wordt u beschermd tegen internationaal verspreide virussen en malware.
                  </div>
                   <img src="<?php echo getStaticUrl('images/part02.png')?>" alt="" class="img-box">
              </div>
              <div class="part part03" data-num="2">
                  <h3>Voorkom dat uw bestanden vergrendeld worden door ransomware</h3>
                  <div class="left-message">
                    U heeft vast wel eens gehoord van ransomware of gijzelsoftware die computers vergrendelt en losgeld vraagt (denk aan de Universiteit Maastricht). Dit overkomt niet alleen grote bedrijven, maar ook particulieren, die het losgeld niet kunnen betalen. De anti-ransomware engine houdt ransomware uit uw computer.
                  </div>
                   <img src="<?php echo getStaticUrl('images/part03.png')?>" alt="" class="img-box">
              </div>
              <div class="part part04" data-num="3">
                  <h3>Blijf internetcriminelen telkens een stap voor</h3>
                  <div class="left-message">
                    Met IObit Malware Fighter PRO maakt u gebruik van de nieuwste technieken en is uw database altijd up-to-date. Zodra er verdachte activiteit plaatsvindt op uw computer, grijpt IObit Malware Fighter PRO in.
                  </div>
                   <img src="<?php echo getStaticUrl('images/part04.png')?>" alt="" class="img-box">
              </div>
          </div>
        </div>
    </div>
  </div>
</div>
  <!-- feature end -->

  <!-- gift start -->
  <div class="gift default">
    <div class="wrapper">
      <div class="content clearfix">
        <h2>Tijdelijk met een Schitterend Gratis Cadeau!</h2>
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/gift-pf-box.png')?>" alt="">
          <p>1 Jaar, 1 pc</p>
        </div>
        <div class="right-message">
          Protected Folder is de ideale aanvulling op IObit Malware Fighter PRO, omdat het niet alleen extra beveiliging biedt voor uw belangrijkste bestanden, maar ze ook beschermt tegen nieuwsgierige gebruikers van uw pc.
        </div>
      </div>
       <a href="https://www.iobit.com/buy.php?product=nl_imf73pcpf2199&ref=nl_imf73pcpf2199purchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
          onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2002-nl')"
          class="buybtn">BESCHERM MIJ NU</a>
       <p class="date">Nog maar <span><strong>00</strong>:<strong>00</strong>:<strong>00</strong>:<strong>00</strong></span> geldig</p>
    </div>
  </div>
  <div class="gift exceed hide">
    <div class="wrapper">
      <div class="content clearfix">
        <h2>Cadeau helaas uitverkocht</h2>
        <h3>Kies toch nog volledige bescherming voor een kleine prijs</h3>
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="" height="169">
          <p><span></span>1 Jaar, 3 PC’s<span></span></p>
        </div>
        <div class="right-message">
          <p><strong>€ 21,99</strong><del>€ 79,99</del></p>
          <a href="https://www.iobit.com/buy.php?product=nl-imf73pc2199&ref=nl_imf73pc2199purchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2002-nl')" class="buybtn">BESCHERM MIJ NU</a>
        </div>
      </div>
    </div>
  </div>
  <!-- gift end -->

  <!-- comparison start -->
  <div class="comparison ">
    <div class="wrapper">
      <!-- table -->
      <table border="0" cellspacing="0" cellpadding="0" width="100%" valign="middle" align="center">
        <thead>
          <tr>
            <th class="text"> Wat maakt PRO essentieel?</th>
            <th class="width205">
              IObit Malware Fighter Free
            </th>
            <th class="width235">
              IObit Malware Fighter PRO
            </th>
          </tr>
        </thead>
        <tbody>
          <!-- 01 -->
          <tr>
            <td class="text">
              Bescherming tegen veel voorkomende malware
            </td>
            <td class="width205"><i></i></td>
            <td class="width235"><i></i></td>
          </tr>
          <tr>
            <td class="text">
              Detecteer meer dan 203.000.000 bedreigingen met de Bitdefender <br>  Anti-virus Engine
            </td>
            <td class="width205"></td>
            <td class="width235"><i></i></td>
          </tr>
          <tr>
            <td class="text">
              Volledige bescherming tegen gijzeling van uw bestanden met de <br> Anti-ransomware engine
            </td>
            <td class="width205"></td>
            <td class="width235"><i></i></td>
          </tr>
          <tr>
            <td>
              Geavanceerde bescherming van de MBR, webcam en USB-schijven
            </td>
            <td class="width205"></td>
            <td class="width235"><i></i></td>
          </tr>
          <tr>
            <td>
              Isoleer essentiële bestanden in de Kluis zodat die onaantastbaar zijn
            </td>
            <td class="width205"></td>
            <td class="width235"><i></i></td>
          </tr>

          <tr>
            <td>
              Gratis 24/7 klantenservice en automatisch updaten
            </td>
            <td class="width205"></td>
            <td class="width235"><i></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review">
    <span class="arrow"></span>
    <div class="wrapper">
      <h2>Met Waardering van Gebruikers van over de Hele Wereld</h2>
      <div class="review-box">
        <ul>
          <li class="bob active">
            <img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett">
            <p>Bob Bassett</p>
          </li>
          <li class="david">
            <img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David-Cassidy">
            <p>David Cassidy</p>
          </li>
          <li class="gelu">
            <img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu-Batir">
            <p>Gelu Batir</p>
          </li>
          <li class="peter">
            <img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter-Stoffers">
            <p>Peter Stoffers</p>
          </li>
        </ul>
        <div class="content">
           <dl class="active">
             <dt><span></span>Klantbeoordeling <span></span></dt>
             <dd>"We gebruikten tientallen verschillende programma's om onze systemen soepel te laten lopen en te beveiligen. Het duurde elke week uren om alle programma’s te laten lopen. Met IObit Malware Fighter PRO en Advanced SystemCare PRO, hebben we eindelijk alles wat we nodig hebben op één plek en is het scannen een fluitje van een cent. We hebben geen problemen meer gehad sinds we jullie producten gebruiken!”</dd>
           </dl>
           <dl>
             <dt><span></span>Klantbeoordeling <span></span></dt>
             <dd>"Ik wil al het personeel van IObit hartelijk bedanken voor het harde werk dat zij leveren om de beste programma’s uit te kunnen brengen. Het is een geweldige update die jullie hebben gemaakt. Het scannen gaat een stuk sneller and het is gebruiksvriendelijk. Iedereen die een goed anti-malware en anti-virus programma wil dat het geld ruimschoots waard is, hoeft niet verder te zoeken dan IObit Malware Fighter. Ik zou aanraden andere opties te vergeten en voor de beste optie te gaan: IObit Malware Fighter."</dd>
           </dl>
           <dl>
             <dt><span></span>Klantbeoordeling <span></span></dt>
             <dd>"Ik ben zeer tevreden met jullie product IObit Malware Fighter. Voordat ik dit product had, had ik veel last van ongewenste verstoringen. Ik kon geen hele film of concert kijken, waar ik erg van houd. Dankzij jullie product verloopt alles nu soepel, veilig en met een goede bescherming. Het programma scant mijn laptop zonder dat het de prestaties beperkt. Ik heb dit product ook aanbevolen aan twee vrienden."</dd>
           </dl>
           <dl>
             <dt><span></span>Klantbeoordeling <span></span></dt>
             <dd>"Enkele jaren geleden heeft een vriend mij getipt over IObit Malware Fighter. In het begin was ik sceptisch, maar na het installeren werd het direct mijn favoriete anti-malware programma. Het is zeer eenvoudig te gebruiken. In de afgelopen jaren heeft het al verschillende bedreigingen gedetecteerd en verwijderd. In samenwerking met andere IObit programma's, bijvoorbeeld ASC, biedt het een zeer goede bescherming van mijn PC. Ik heb nu al meerdere programma's van IObit aan al mijn vrienden en familie aangeraden."</dd>
           </dl>
        </div>
      </div>
      <div class="award">
        <h3>En Vele Internationale Prijzen</h3>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
        <p>Is IObit Malware Fighter PRO de Betrouwbare Oplossing voor uw Beveiliging</p>
      </div>
    </div>
  </div>
  <!-- review end -->





  <!-- bottombuy start -->
  <div class="bottombuy banner">
    <div class="wrapper clearfix">
      <div class="content">
        <h3>Kies de Essentiële Bescherming in een Sterk Verbonden Wereld
        </h3>
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="" width="200" class="imf-box">
          <img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" width="120" class="pf-box">
           <p class="pc"><span></span>1 Jaar, 3 pc’s<span></span></p>
        </div>
        <div class="price-message">
          <p><strong>€ 21,99</strong><del>€ 119,94</del></p>
          <a href="https://www.iobit.com/buy.php?product=nl_imf73pcpf2199&ref=nl_imf73pcpf2199purchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=nl_purchase_imf"
             onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2002-nl')" class="buybtn">BESCHERM MIJ NU</a>
        </div>
        <h4 class="countdown">Tijdelijke aanbieding, nog maar <span><strong>00</strong>:<strong>11</strong>:<strong>12</strong>:<strong>00</strong></span></h4>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer">
    
    <div class="wrapper">
      <div class="servie clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/payment.png')?>"></dt>
          <dd>Betaalmethoden</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>"></dt>
          <dd>Website beveiliging</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/servie.png')?>"></dt>
          <dd>24/7 gratis klantenservice</dd>
        </dl>
      </div>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
    </div>
  </div>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  </body>
  </html>