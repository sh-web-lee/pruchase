<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sconti fino a 85% su IObit Advanced SystemCare PRO! - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Fira+Sans+Extra+Condensed:700|Lato:700,700i,900,900i&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?> 
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Massima ottimizzazione a <span>360</span> per il tuo PC sempre a portata di clic</h1>
    <h2>Affrettati prima che sia troppo tardi</h2>
    <!-- countdown -->
    <p class="countdown">
      <strong>00</strong>
      <strong>00</strong>
      <strong class="last">000</strong>
    </p>
    <!-- content -->
    <div class="content">

      <!-- 3pc+bundle -->
      <div class="offer large">
        <!-- box -->
        <div class="box">
          <img src="<?php echo getStaticUrl('images/banner-bundle.png')?>" alt="">
          <p><b>-85</b>%</p>
        </div>
        <!-- type -->
        <p class="type">1 anno / 3 PC</p>
        <!-- price -->
        <p class="price"><big>18</big>,99€ <del>129,97€</del></p>
        <!-- save -->
        <p class="save"><span>Risparmia 110,98€</span></p>
        <!-- buybtn -->
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=it-asc143pciusd1899&ref=it_asc143pciusd1899purchase2002<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2020-it');">
          Acquista ora
        </a>
      </div>

      <!-- 3pc -->
      <div class="offer small">
        <!-- box -->
        <div class="box">
          <img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="">
          <p><b>-65</b>%</p>
        </div>
        <!-- type -->
        <p class="type">1 anno / 3 PC</p>
        <!-- price -->
        <p class="price"><big>17</big>,99€ <del>49,99€</del></p>
        <!-- save -->
        <p class="save"><span>Risparmia 32€</span></p>
        <!-- buybtn -->
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=it-asc143pc1799&ref=it_asc143p1799purchase2002<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2020-it');">
          Acquista ora
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <h2>Perché scelgo PRO?</h2>
    <p>
      Solo PRO ottimizza e pulisce il tuo PC automaticamente e in modo completo, aumentando la velocità <br> 
      Internet e la protezione del tuo sistema
    </p>
    <div class="content">
      <img src="<?php echo getStaticUrl('images/machine.png')?>" alt="">
      <span class="rocket"></span>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- comparison -->
<div class="comparison wrapper">
  <table>
    <thead>
      <tr>
        <th class="pro">Versione PRO</th>
        <th class="space"></th>
        <th class="free">Versione gratuita</th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="pro"><i class="all-icons"></i> Pulizia e ottimizzazione di base del sistema</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="pro"><i class="all-icons"></i> Pulizia e ottimizzazione avanzate con la nuova modalità AI</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
      </tr>      
      <!-- 03 -->
      <tr>
        <td class="pro"><i class="all-icons"></i> Pulizia approfondita del registro per evitare crash improvvisi di sistema</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="pro"><i class="all-icons"></i> Avvio del PC fino al 200% più veloce</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="pro"><i class="all-icons"></i> Protegge i tuoi dati privati dai programmi non affidabili</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="pro"><i class="all-icons"></i> Navigazione Internet fino al 300% più veloce</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="pro"><i class="all-icons"></i> Rileva e blocca in tempo reale le minacce alla sicurezza</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="pro"><i class="all-icons"></i> Nasconde la traccia dell’impronta digitale per assicurare la privacy online</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="pro"><i class="all-icons"></i> Supporto tecnico 24/7 gratuito su richiesta</td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <h2>
      Più di <b>2,500,000</b> utenti in <br>
      tutto il mondo hanno scelto Advanced SystemCare
    </h2>
    <!-- content -->
    <div class="content">
      <!-- point -->
      <div class="point">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>
        <span></span>      
      </div>
      <!-- Hank Ewert -->
      <dl class="one clearfix">
        <dt>
          <div class="line"></div>
          <div class="arrow"></div>
        </dt>
        <dd>
          <img src="<?php echo getStaticUrl('images/ryan-hill.png')?>" alt="Ryan Hill">
          <h4>Ryan Hill</h4>
          <p>
            Advanced System Care 14 è il sistema onnicomprensivo più completo<br> sul mercato. Uso i prodotti IObit ormai da anni e anno dopo anno la nuova<br> interfaccia è diventata sempre più semplice da usare e la pulizia profonda<br> sempre più semplice da ottenere!
          </p>
        </dd>
      </dl>
      <!-- Cnet -->
      <dl class="two clearfix">
        <dt>
          <div class="line"></div>
          <div class="arrow"></div>
        </dt>
        <dd>
          <img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="">
          <h4>Cnet</h4>
          <p>
            Advanced SystemCare punta a rimediare <br>
            qualsiasi problema affligga il tuo computer!
          </p>
        </dd>
      </dl>
      <!-- Baixaki -->
      <dl class="three clearfix">
        <dt>
          <div class="line"></div>
          <div class="arrow"></div>
        </dt>
        <dd>
          <img src="<?php echo getStaticUrl('images/baixaki.png')?>" alt="">
          <h4>Baixaki</h4>
          <p>
            Advanced SystemCare ha un rendimento eccezionale, è in <br>
            grado di rilevare e risolvere problemi davvero complessi, <br> 
            difficili persino da immaginare.
          </p>
        </dd>
      </dl>
      <!-- Markus Thomas -->
      <dl class="four clearfix">
        <dt>
          <div class="line"></div>
          <div class="arrow"></div>
        </dt>
        <dd>
          <img src="<?php echo getStaticUrl('images/brendon-o-rourke.png')?>" alt="">
          <h4>Brendon O'Rourke</h4>
          <p>
            Uso ASC ormai da anni. Di recente ho testato<br> l'ultima versione 14 ed è di gran lunga la versione<br> più completa fino ad oggi. IObit continua a migliorare<br> i propri prodotti e tecnologie con più opzioni e una<br> navigazione più semplice che aiuta a risolvere molti problemi. 
          </p>
        </dd>
      </dl>
      <!-- Bruce Ramsay -->
      <dl class="five clearfix">
        <dt>
          <div class="line"></div>
          <div class="arrow"></div>
        </dt>
        <dd>
          <img src="<?php echo getStaticUrl('images/anthony-baker.png')?>" alt="">
          <h4>Anthony Baker</h4>
          <p>
            Le funzionalità di Advanced System Care 14 sono fantastiche<br> e l'aspetto generale è pulito, fresco e moderno. Ho utilizzato altri<br> programmi onnicomprensivi di manutenzione del sistema, ma<br> nessuno è stato efficace come ASC 14. Il programma è facile da<br> usare e molto intuitivo. Gli strumenti inclusi sono davvero completi<br> e dopo aver eseguito e utilizzato questo programma il mio computer<br> è molto più reattivo!
          </p>
        </dd>
      </dl>
    </div>
    
  </div>
</div>
<!-- end review -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper">
    <h2>Non farti scappare questa OFFERTA incredibile!</h2>
    <div class="content clearfix">
      <img class="box" src="<?php echo getStaticUrl('images/bottombuy-bundle.png')?>" alt="">
      <dl>
        <dt>
          Ottimizzazione, disinstallazione e deframmentazione <br> 
          sempre con te a soli
        </dt>
        <dd>
          <!-- price -->
          <p class="price"><big>18,99€</big></p>
          <!-- buybtn -->
          <a class="buybtn" 
             href="https://www.iobit.com/buy.php?product=it-asc143pciusd1899&ref=it_asc143pciusd1899purchase2002<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2020-it');">
            Acquista ora
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
<div class="service wrapper">
  <img class="payment" src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
  <dl class="one">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png');?>" alt=""></dt>
    <dd>
      <h3>Garanzia di rimborso</h3>
      <p>
        Non sei soddisfatto? Garanzia di rimborso <br> 
        entro 60 giorni assicurata
      </p>
    </dd>
  </dl>
  <dl class="two">
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png');?>" alt=""></dt>
    <dd>
      <h3>Pagamento Assicurato</h3>
      <p>
        Tutti i metodi di pagamento sono verificati <br>
        e sicuri al 100%
      </p>
    </dd>
  </dl>
  <dl class="three">
    <dt><img src="<?php echo getStaticUrl('images/carcut.png');?>" alt=""></dt>
    <dd>
      <h3>Attivazione Veloce</h3>
      <p>
        Dopo il tuo acquisto, riceverai il codice di <br> 
        licenza in pochi minuti tramite e-mail
      </p>
    </dd>
  </dl>
  <dl class="four">
    <dt><img src="<?php echo getStaticUrl('images/service.png');?>" alt=""></dt>
    <dd>
      <h3>Servizio Clienti</h3>
      <p>
        24/7 Supporto tecnico gratuito
      </p>
    </dd>
  </dl>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Note:</dt>
      <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
      <dd>* Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</dd>
    </dl>
    <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>