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
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Offerta Speciale - Sconti fino all’80% per IObit Malware Fighter PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,700i">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      SALE - L’ULTIMA OFFERTA
      <span>Tempo limitato, non perderti l’ultimo minuto!</span>
    </h1>
    <!-- product-message -->
    <ul class="message">
      <!-- 3pc -->
      <li class="prev">
        <!-- countdown -->
        <p class="countdown countdown2 prev hide">
          <span>Scade tra</span>
          <strong>00</strong> O
          <strong>00</strong> M
          <strong>00</strong> S
          <strong>00</strong> Ms*
        </p>
        <!-- box -->
        <div class="box">IObit Malware Fighter PRO</div>
        <!-- price -->
        <p class="price"><strong>19</strong> <sup>99€</sup> <del>59,95€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-imf73pc1999&ref=it_imf73pcpurchase1910<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC1910-it')">
          ACQUISTA ORA
        </a>
      </li>

      <!-- 3pc+gifts -->
      <li class="last">
        <!-- countdown -->
        <p class="countdown countdown1">
          <span>Scade tra</span>
          <strong>00</strong> O
          <strong>00</strong> M
          <strong>00</strong> S
          <strong>00</strong> Ms*
        </p>
        <!-- box -->
        <div class="box">IObit Malware Fighter PRO + Smart Defrag 6 PRO + AMC Security PRO</div>
        <!-- price -->
        <p class="price small"><strong>19</strong> <sup>99€</sup> <del>109,93€</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=it-imf73pcsdamc1999&ref=it_imf73pcsdamcpurchase1910<?php echo $refStr;?>&refs=it_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCsdamc1910-it')">
          APPROFITTANE ORA
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<!-- payment end -->

<!-- intro start -->
<div class="wrapper">
  <h2 class="intro-h2">Goditi la massima sicurezza del tuo PC!</h2>
  <p class="intro-p">Blocca ed elimina malware e ransomware in modo efficace</p>
</div>
<div class="intro wrapper">
  <ul class="cont">
    <li class="one active">
      <h5><i class="i-icons"></i>Motore Bitdefender</h5>
      <p>Impedisce facilmente a oltre 200 milioni di minacce come virus, malware, sypware e cryptojacking.</p>
    </li>
    <li class="two">
      <h5><i class="i-icons"></i>Dati Personali Più Sicuri</h5>
      <p>Protegge i tuoi dati sensibili con una password e nessuno può accederli senza la tua autorizzazione.</p>
    </li>
    <li class="three">
      <h5><i class="i-icons"></i>Blocca i Ransomware</h5>
      <p>Blocca in modo proattivo il ransomware che tenta di accedere al tuo computer o crittografare i tuoi file importanti.</p>
    </li>
    <li class="four">
      <h5><i class="i-icons"></i>Sicurezza Superiore</h5>
      <p>Tre motori e più strumenti di sicurezza per provvederti una protezione multiplo.</p>
    </li>
  </ul>
  <div class="imgcont">
    <div class="img-change">
      <img class="active" src="<?php echo getStaticUrl('images/img-list01.png')?>" alt="" />
      <img src="<?php echo getStaticUrl('images/img-list02.png')?>" alt="" />
      <img src="<?php echo getStaticUrl('images/img-list03.png')?>" alt="" />
      <img src="<?php echo getStaticUrl('images/img-list04.png')?>" alt="" />
    </div>
    <ul class="img-glass">
      <li class="active"><img src="<?php echo getStaticUrl('images/list-icon01.png')?>" alt="" /></li>
      <li class="two"><img src="<?php echo getStaticUrl('images/list-icon02.png')?>" alt="" /></li>
      <li class="three"><img src="<?php echo getStaticUrl('images/list-icon03.png')?>" alt="" /></li>
      <li class="four"><img src="<?php echo getStaticUrl('images/list-icon04.png')?>" alt="" /></li>
    </ul>
  </div>
</div>
<!-- intro end -->

<!-- donation start -->
<div class="donation ">
  <div class="wrapper">
    <h2>Profitez d’un paquet cadeau à durée limitée, dépêchez-vous !</h2>
    <div class="clearfix">
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="" />
          <p>1 Anno / 1 PC</p>
          <del>29,99€</del>
        </dt>
        <dd>Offre la migliore deframmentazione del <br> disco e accelera al massimo l'hard <br> driver!</dd>
      </dl>
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/amc-gift.png')?>" alt="" />
          <p>1 Anno / Multi Dispositivi</p>
          <del>19,99€</del>
        </dt>
        <dd>Accelera il tuo dispositivo fino al <br> 200% più veloce!</dd>
      </dl>
    </div>
    <a class="buybtn yellow"
       href="https://www.iobit.com/buy.php?product=it-imf73pcsdamc1999&ref=it_imf73pcsdamcpurchase1910<?php echo $refStr;?>&refs=it_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCsdamc1910-it')">
      APPROFITTANE ORA
    </a>
    <p class="countdown countdown1 bottom">
      <strong>08</strong> O :
      <strong>08</strong> M :
      <strong>55</strong> S :
      <strong>89</strong> MS*
    </p>
  </div>
</div>
<!-- donation end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>Raccomandato e premiato dai media mondiali</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
</div>
<!-- awards end -->

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
      <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>"></dt>
      <dd>
        IObit Malware Fighter scansiona il mio PC portatile senza <br>
        influenzare le prestazioni, per questo motivo l’ho consigliato a <br>
        due dei miei amici.
      </dd>
    </dl>

    <dl class="br">
      <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>"></dt>
      <dd>
        Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo <br>
        non deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate il migliore, <br>
        IObit Malware Fighter.
      </dd>
    </dl>

    <dl class="html-it">
      <dt><img src="<?php echo getStaticUrl('images/br.png')?>"></dt>
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
      <dt><img src="<?php echo getStaticUrl('images/soft.png')?>"></dt>
    </dl>

    <dl class="peter-stoffers">
      <dd>
        IObit Malware Fighter offre molto oltre alle <br>
        sue capacità di scansione.
      </dd>
      <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>"></dt>
    </dl>
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="title" colspan="2">Il PC è sempre sicuro con IObit Malware Fighter PRO!</th>
      <th class="space"></th>
      <th class="itemfree">IObit Malware Fighter <br>FREE <span><img src="<?php echo getStaticUrl('images/cry.png')?>" alt=""/></span></th>
      <th class="space"></th>
      <th class="itempro"><p></p>IObit Malware Fighter <br>PRO <span><img src="<?php echo getStaticUrl('images/smile.png')?>" alt=""/></span></th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
      <td class="text">Pulizia, riparazione ed ottimizzazione di base del sistema <em class="tab-icons">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree gray"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
      <td class="text"><span>Nuovo motore Anti Ransomware blocca gli accessi non autorizzati <br> per assicurare i file importanti <em class="tab-icons nuovo">Nuovo</em></span></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
      <td class="text"><span class="right">Protegge cartelle specifiche dagli accessi non autorizzati con la Cassetta di Sicurezza <em class="tab-icons nuovo">Nuovo</em></span></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
      <td class="text"><span>Funzionamento completo di Anti-malware con il motore unico “Dual-Core” <br> di IObit e Bitdefender <em class="tab-icons">Migliorato</em></span></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
      <td class="text">Protezione avanzata contro le minacce con il motore Anti-Virus di Bitdefender <em class="tab-icons">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
      <td class="text">Protezione del disco all'avvio contro gli attacchi dannosi con la Guardia MBR <em class="tab-icons nuovo">Nuovo</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
      <td class="text">Protegge la fotocamera del PC contro gli accessi non autorizzati <em class="tab-icons">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""/></td>
      <td class="text">Prevenzione delle infezioni provocate dai virus trasmessi da chiavi USB </td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt=""/></td>
      <td class="text">Pulizia automatica delle tracce di privacy online con Browser Anti-Traccia <em class="tab-icons">Migliorato</em></td>
      <td class="space"></td>
      <td class="itemfree"><i class="all-icons circle">●</i></td>
      <td class="space"></td>
      <td class="itempro"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon_16.png')?>" alt=""/></td>
      <td class="text">Privilegi di servizio 24/7 Supporto Tecnico Gratuito </td>
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
  <div class="wrapper clearfix">
    <div class="box fl">
      <ul class="clearfix fl">
        <li class="active"></li>
        <li class="second"></li>
      </ul>
    </div>
    <div class="middle fl">
      <ul class="select">
        <li class="active"
            data-url="https://www.iobit.com/buy.php?product=it-imf73pcsdamc1999&ref=it_imf73pcsdamcpurchase1910<?php echo $refStr;?>&refs=it_purchase_imf&tw=8"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCsdamc1910-it')"
            data-del="109,93€" data-price="19">
          <i></i>
          1 ANNO / 3 PC + SD + AMC
          <span>-80%</span>
        </li>
        <li class="second"
            data-url="https://www.iobit.com/buy.php?product=it-imf73pc1999&ref=it_imf73pcpurchase1910<?php echo $refStr;?>&refs=it_purchase_imf&tw=8"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PC1910-it')"
            data-del="59,95€" data-price="19">
          <i></i>
          1 ANNO / 3 PC
          <span>-65%</span>
        </li>
      </ul>
    </div>
    <div class="fr another">
      <p class="price"><strong>19</strong> <sup>99€</sup> <del>109,93€</del></p>
      <a class="buybtn yellow"
         href="https://www.iobit.com/buy.php?product=it-imf73pcsdamc1999&ref=it_imf73pcsdamcpurchase1910<?php echo $refStr;?>&refs=it_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3PCsdamc1910-it')">
        ACQUISTA ORA
      </a>
    </div>
  </div>
</div>
<!-- boittombuy enb -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd>
      <h3>Garanzia di Soddisfazione</h3>
      <p>Garanzia di Soddisfazione</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
    <dd>
      <h3>Pagamento Assicurato</h3>
      <p>Tutti i metodi di pagamento sono 100% verificati e sicuri</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
    <dd>
      <h3>Attivazione Veloce</h3>
      <p>Dopo il tuo acquisto, riceverai il codice di licenza in pochi muniti tramite la mail </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
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
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Tutti i diritti riservati</p>
</div>
<!-- footer end -->

<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>