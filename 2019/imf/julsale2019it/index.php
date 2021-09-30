<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr = empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta speciale - Sconti fino all’85% su IObit Malware Fighter PRO per rimuovere malware, ransomeware e virus</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.min.css') ?>">
    <?php echo $gJavascript ['public']; ?>
    <?php echo $gJavascript ['head'] ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank"></a>
    <h1>Sconto fino al 85%!</h1>
    <div class="bundle-container clearfix">
      <div class="bundle">
        <img src="<?php echo $pResUrl; ?>images/banner-bundle-0.png" alt="">
        <p class="price">
          <i>€</i>
          <b class="discount">18</b>
          <span class="decimal">,99</span>
          <del class="original">€39,95</del>
        </p>
        <a class="btn btn-white"
           href="http://www.iobit.com/buy.php?product=it-imf71pc1899&ref=it_imf71pc1899purchase1907&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1PC1907a-it')"
        >ACQUISTA ORA</a>
      </div>
      <div class="bundle main" id="mainBundle">
        <div class="main-container">
          <div class="countdown"><span>10</span><i>min : </i><span>00</span><i>sec : </i><span class="count-last">000</span><i>ms</i></div>
          <div class="bundle-content">
            <img src="<?php echo $pResUrl; ?>images/banner-bundle-1.png" alt="banner-bundle-1">
            <p class="price">
              <i>€</i>
              <b class="discount">21</b>
              <span class="decimal">,99</span>
              <del class="original">€129,89</del>
            </p>
            <a class="btn btn-orange"
               href="http://www.iobit.com/buy.php?product=it-imf73pcsdpf2199&ref=it_imf73pc2199purchase1907&refs=it_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCsdpf1907b-it')"
            >APPROFITTANE ORA</a>
            <p class="note"><span class="packsNum">67</span> pezzi disponibili, <span class="buyNum">433</span> sono già stati acquistati!</p>
            <div class="tips-container">
              <img src="<?php echo $pResUrl; ?>images/bundle-main-tip.png" alt="tip">
            </div>
          </div>
        </div>
      </div>
      <div class="bundle">
        <img src="<?php echo $pResUrl; ?>images/banner-bundle-2.png" alt="">
        <p class="price">
          <i>€</i>
          <b class="discount">21</b>
          <span class="decimal">,99</span>
          <del class="original">€59,95</del>
        </p>
        <a class="btn btn-white"
           href="http://www.iobit.com/buy.php?product=it-imf71pc2199&ref=it_imf73pc1999purchase1907&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC1907c-it')"
        >ACQUISTA ORA</a>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<div class="scroll-icon"></div>

<!-- payments start -->
<div class="payments"></div>
<!-- payments end -->

<!-- feature start -->
<div class="feature">
  <h2>Il tuo esperto di protezione per computer <br>Stiamo migliorando costantemente per la tua sicurezza</h2>
  <div class="detail">
    <div class="img-slider">
      <!--      <div class="bg"></div>-->
      <div class="slider-container">
        <div class="swiper-container">
          <div class="swiper-wrapper">
            <div class="swiper-slide">
              <img src="<?php echo $pResUrl; ?>images/feature-screenshot-0.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo $pResUrl; ?>images/feature-screenshot-1.jpg" alt="">
              <img src="<?php echo $pResUrl; ?>images/feature-screenshot-small-0.png" alt="" class="small" id="small-img-0">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo $pResUrl; ?>images/feature-screenshot-2.jpg" alt="">
              <img src="<?php echo $pResUrl; ?>images/feature-screenshot-small-1.png" alt="" class="small" id="small-img-1">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo $pResUrl; ?>images/feature-screenshot-3.jpg" alt="">
            </div>
            <div class="swiper-slide">
              <img src="<?php echo $pResUrl; ?>images/feature-screenshot-4.jpg" alt="">
            </div>
          </div>
        </div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-button-next"></div>
      </div>
    </div>
    <div class="img-text wrapper clearfix" id="sliderSwitch">
      <div class="text">
        <img src="<?php echo $pResUrl; ?>images/feature-icon-0.png" alt="feature icon">
        <h4>Motore Bitdefender</h4>
        <p>Con l'ultimo motore Bitdefender, oltre <span>200.000.000</span> di minacce come virus, malware, spyware, ecc. sono tenute lontano dal tuo computer.</p>
      </div>
      <div class="text">
        <img src="<?php echo $pResUrl; ?>images/feature-icon-1.png" alt="feature icon">
        <h4>Blocca i hacker</h4>
        <p>Non dovrai più preoccuparti degli hacker che irrompono nel tuo computer e crittografano i tuoi file e dati personali importanti.</p>
      </div>
      <div class="text">
        <img src="<?php echo $pResUrl; ?>images/feature-icon-2.png" alt="feature icon">
        <h4>Protezione in tempo reale</h4>
        <p>Protegge il tuo PC in tempo reale e previene gli attacchi ransomware come WannaCry, NotPetya durante il processo di avvio.</p>
      </div>
      <div class="text">
        <img src="<?php echo $pResUrl; ?>images/feature-icon-3.png" alt="feature icon">
        <h4>Navigazione online sicura</h4>
        <p>Cancella automaticamente i cookie e le tracce per bloccare il monitoraggio online invasivo e proteggere la tua privacy.</p>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<div class="scroll-icon"></div>

<!-- gift start -->
<div class="gift wrapper">
  <h2>Blocca le tracce online per riprendere il controllo della tua privacy <br>
    Ottieni 2 prodotti gratis del valore di €69,94!
  </h2>
  <div class="gift-container" id="gift">
    <div class="bg"></div>
    <div class="box-container clearfix">
      <div class="box">
        <img src="<?php echo $pResUrl; ?>images/gift-box-0.png" alt="">
        <div class="box-detail">
          <h3>Smart Defrag 6 PRO</h3>
          <p class="box-price">€0
            <del>€29,99</del>
          </p>
          <p class="note">Offre la migliore deframmentazione del disco e accelera al massimo l'hard driver!</p>
        </div>
      </div>
      <div class="box">
        <img src="<?php echo $pResUrl; ?>images/gift-box-1.png" alt="">
        <div class="box-detail">
          <h3>Protected Folder</h3>
          <p class="box-price">€0
            <del>€39,95</del>
          </p>
          <p class="note">Aggiungi la password per i tuoi file, protegge i file dagli attacchi maligni e assicura la tua privacy al 100%!</p>
        </div>
      </div>
    </div>
    <p class="price">
      <i>€</i>
      <b class="discount">21</b>
      <span class="decimal">,99</span>
      <del class="original">€129.89</del>
    </p>
    <a class="btn btn-orange"
       href="http://www.iobit.com/buy.php?product=it-imf73pcsdpf2199&ref=it_imf73pc2199purchase1907&refs=it_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCsdpf1907b-it')"
    >APPROFITTANE ORA</a>
    <div class="countdown"><span>10</span><i>min : </i><span>00</span><i>sec : </i><span class="count-last">000</span><i>ms</i></div>
  </div>
</div>
<!-- gift end -->

<!-- award start -->
<div class="award wrapper">
  <!-- title -->
  <h2>Raccomandato e premiato dai media mondiali</h2>
  <!-- icons -->
  <img src="<?php echo $pResUrl; ?>images/award.png" alt="award">
</div>
<!-- award end -->

<!-- review start -->
<div class="review">
  <h2>Recensioni in tutto il mondo</h2>
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
    <span class="recover recover21 middle"></span>
    <span class="recover recover22 smail"></span>

    <dl class="chip">
      <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png') ?>"></dt>
      <dd>
        IObit Malware Fighter scansiona il mio PC portatile senza <br>
        influenzare le prestazioni, per questo motivo l’ho consigliato a <br>
        due dei miei amici.
      </dd>
    </dl>

    <dl class="br">
      <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png') ?>"></dt>
      <dd>
        Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo <br>
        non deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate il migliore, <br>
        IObit Malware Fighter.
      </dd>
    </dl>

    <dl class="html-it">
      <dt><img src="<?php echo getStaticUrl('images/br.png') ?>"></dt>
      <dd>
        IObit Malware Fighter è decisamente il miglior sistema per <br>proteggere un PC in mano ad un utente inesperto dall'attacco dei <br>ransomware, così da evitare anche la perdita dei file.
      </dd>
    </dl>

    <dl class="bob-bassett">
      <dd>
        IObit Malware Fighter PRO è in grado di <br>
        rilevare vari tipi di spyware, ransomware, <br>
        adware, Trojan, worm, keylogger e bot.
      </dd>
      <dt><img src="<?php echo getStaticUrl('images/soft.png') ?>"></dt>
    </dl>

    <dl class="peter-stoffers">
      <dd>
        IObit Malware Fighter offre molto oltre alle <br>
        sue capacità di scansione.
      </dd>
      <dt><img src="<?php echo getStaticUrl('images/cnet.png') ?>"></dt>
    </dl>
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="title" colspan="2">Il PC è sempre sicuro con IObit Malware Fighter PRO!</th>
      <th class="space"></th>
      <th class="itemfree">IObit Malware Fighter <br>FREE <span><img src="<?php echo getStaticUrl('images/cry.png') ?>" alt="" /></span></th>
      <th class="space"></th>
      <th class="itempro"><p></p>IObit Malware Fighter <br>PRO <span><img src="<?php echo getStaticUrl('images/smile.png') ?>" alt="" /></span></th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png') ?>" alt="" /></td>
      <td class="text">Anti-malware con ultimo database di malware Iobit <em class="tab-icons">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree gray"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png') ?>" alt="" /></td>
      <td class="text"><span>Arresta il ransomware tentando di crittografare i tuoi file importanti <em class="tab-icons nuovo">Nuovo</em></span></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png') ?>" alt="" /></td>
      <td class="text"><span>Nessuno può accedere ai tuoi dati personali senza password <em class="tab-icons nuovo">Nuovo</em></span></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png') ?>" alt="" /></td>
      <td class="text"><span>Funzionamento completo di Anti-malware con il motore unico “Dual-Core” di IObit e Bitdefender <em class="tab-icons">Migliorato</em></span></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png') ?>" alt="" /></td>
      <td class="text">Rileva oltre 203.000.000 di minacce con motori Bitdefender e di Iobit <em class="tab-icons">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png') ?>" alt="" /></td>
      <td class="text">Protezione del disco all'avvio contro gli attacchi dannosi con la Guardia MBR <em class="tab-icons nuovo">Nuovo</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png') ?>" alt="" /></td>
      <td class="text">Protegge la fotocamera del PC contro gli accessi non autorizzati <em class="tab-icons">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png') ?>" alt="" /></td>
      <td class="text">Prevenzione delle infezioni provocate dai virus trasmessi da chiavi USB</td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png') ?>" alt="" /></td>
      <td class="text">Pulizia automatica delle tracce di privacy online con Browser Anti-Traccia <em class="tab-icons">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_16.png') ?>" alt="" /></td>
      <td class="text">Privilegi di servizio 24/7 Supporto Tecnico Gratuito</td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper">
    <!-- content -->
    <div class="content clearfix">
      <!-- box -->
      <div class="bottom-box fl">
        <img src="<?php echo $pResUrl; ?>images/bottombuy-box.png" alt="">
      </div>
      <!-- choice list -->
      <ul class="fl clearfix">
        <!-- 3pc+pf  -->
        <li class="imf3pcpf active"
            data-url="http://www.iobit.com/buy.php?product=it-imf73pcsdpf2199&ref=it_imf73pc2199purchase1907&refs=it_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCsdpf1907b-it')"
            data-price="21"
            data-del="€129.89"
            data-off="€">
          1 ANNO / 3 PC+SD+PF
          <i>85%</i>
        </li>
        <!-- 3pc -->
        <li class="imf3pc"
            data-url="http://www.iobit.com/buy.php?product=it-imf71pc2199&ref=it_imf73pc1999purchase1907&refs=it_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC1907c-it')"
            data-price="21"
            data-del="€59.95"
            data-off="€">
          1 Anno / 3 PC
          <i>65%</i>
        </li>
        <!-- 1pc -->
        <li class="imf1pc"
            data-url="http://www.iobit.com/buy.php?product=it-imf71pc1899&ref=it_imf71pc1899purchase1907&refs=it_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1PC1907a-it')"
            data-price="18"
            data-del="€39.95"
            data-off="€">
          1 Anno / 1 PC
          <i>50%</i>
        </li>
      </ul>
      <!-- 3pc + pf over -->
      <div class="imf3pcpfover"></div>
      <!-- else -->
      <div class="else fr">
        <p class="price">
          <i>€</i>
          <b class="discount">21</b>
          <span class="decimal">,99</span>
          <del class="original">€129.89</del>
        </p>
        <!-- 3pc+pf buybtn -->
        <a class="btn btn-orange"
           href="http://www.iobit.com/buy.php?product=it-imf73pcsdpf2199&ref=it_imf73pc2199purchase1907&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCsdpf1907b-it')">
          <span>APPROFITTANE ORA</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- bottombuy end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt="" /></dt>
    <dd>
      <h3>Garanzia di Soddisfazione</h3>
      <p>Garanzia di Soddisfazione</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png') ?>" alt="" /></dt>
    <dd>
      <h3>Pagamento Assicurato</h3>
      <p>Tutti i metodi di pagamento sono 100% verificati e sicuri</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/cart.png') ?>" alt="" /></dt>
    <dd>
      <h3>Attivazione Veloce</h3>
      <p>Dopo il tuo acquisto, riceverai il codice di licenza in pochi muniti tramite la mail </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/service.png') ?>" alt="" /></dt>
    <dd>
      <h3>Servizio Clienti</h3>
      <p>24/7 Supporto tecnico gratuito</p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer wrapper">
  <dl class="annotation">
    <dt>Note:</dt>
    <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
    <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente a nostra esclusiva discrezione.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tutti i diritti riservati</p>
</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/swiper.min.js') ?>"></script>
</body>
</html>