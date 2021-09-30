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
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
if(in_array($_GET['pop'],array('x_asc','xi_asc','xb_asc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Sconti fino all'85% su IObit Advanced SystemCare PRO! - IObit</title>
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
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <h1>Massima ottimizzazione a <span>360</span> per il tuo PC sempre a portata di clic</h1>
    <h2>Affrettati prima che sia troppo tardi</h2>
    <p class="countdown">
      <strong>00</strong>
      <strong>00</strong>
      <strong class="last">000</strong>
    </p>
    <div class="content center clearfix">
      <div class="offer small">
        <div class="box">
          <img src="<?php echo getStaticUrl('images/banner-asc.png')?>" alt="">
          <p><b>-65</b>%</p>
        </div>
        <p class="type">1 anno / 3 PC</p>
        <p class="price"><big>17</big>,99€ <del>49,99€</del></p>
        <p class="save"><span>Risparmia 32€</span></p>
        <p class="liscen">Licenza valida per versioni future</p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=it-asc133pc1799&ref=it_asc133p1799purchase2002b<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2020b-it');">
          Acquista ora
        </a>
      </div>
      <div class="offer large">
        <div class="box">
          <img src="<?php echo getStaticUrl('images/banner-bundle.png')?>" alt="">
          <p><b>-85</b>%</p>
        </div>
        <p class="type">1 anno / 3 PC</p>
        <p class="price"><big>18</big>,99€ <del>129,97€</del></p>
        <p class="save"><span>Risparmia 110,98€</span></p>
        <p class="liscen">Licenza valida per versioni future</p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=it-asc133pciusd1899&ref=it_asc133pciusd1899purchase2002b<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2020b-it');">
          Acquista ora
        </a>
      </div>
    </div>
    <div class="payment">
      <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
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
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text">Funzionalità principali</th>
        <th class="space"></th>
        <th class="pro">Advanced SystemCare<br> PRO</th>
        <th class="space"></th>
        <th class="free">Advanced SystemCare<br> Free</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="text">Pulizia e ottimizzazione di base del sistema</td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="free"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="text">Pulizia approfondita del registro per evitare crash improvvisi di sistema</td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
      </tr>
      <tr>
        <td class="text">Cura automatica del PC</td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
      </tr>
      <tr>
        <td class="text">Avvio del PC fino al 200% più veloce</td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
      </tr>
      <tr>
        <td class="text">Protegge i tuoi dati privati dai programmi non affidabili</td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
      </tr>
      <tr>
        <td class="text">Navigazione Internet fino al 300% più veloce</td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
      </tr>
      <tr>
        <td class="text">Rileva e blocca in tempo reale le minacce alla sicurezza</td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
      </tr>
      <tr>
        <td class="text">Nasconde la traccia dell’impronta digitale per assicurare la privacy online</td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
      </tr>
      <tr>
        <td class="text">Supporto tecnico 24/7 gratuito su richiesta</td>
        <td class="space"></td>
        <td class="pro"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="free"><i class="all-icons yes"></i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- gifts start -->
<div class="gifts">
  <div class="wrapper">
    <h2><span>2 regali PRO</span> esclusivi solo per te!</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/></dt>
        <dd>Disinstallazione completa per tutti i tuoi programmi difficili da disinstallare</dd>
      </dl>
      <dl class="sd">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></dt>
        <dd>Ottimizzazione delle prestazioni del PC e della tua esperienza di gioco</dd>
      </dl>
    </div>
    <h3>Advanced SystemCare PRO<br> <span>2 REGALI PRO GRATIS</span></h3>
    <a class="buybtn" 
       href="https://www.iobit.com/buy.php?product=it-asc133pciusd1899&ref=it_asc133pciusd1899purchase2002b<?php echo $refStr;?>&refs=it_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2020b-it');">
      <i></i> Li voglio
    </a>
  </div>
</div>
<!-- gifts end -->

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
          <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="">
          <h4>Hank Ewert</h4>
          <p>
            Advanced SystemCare è un programma impres- <br>
            sionante, protegge alla perfezione il mio PC e ha <br>
            una grafica molto bella e intuitiva. Ha superato le <br>
            mie aspettative!
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
          <img src="<?php echo getStaticUrl('images/markus-thomas.png')?>" alt="">
          <h4>Markus Thomas</h4>
          <p>
            È il migliore programma che pulisce e accelera il mio <br> 
            PC in modo corretto e sicuro. Rende i computer di <br> 
            vecchia generazione più veloci e potenti! 
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
          <img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="">
          <h4>Bruce Ramsay</h4>
          <p>
            Non so quanti programmi ho provato nel corso degli anni, tutti reclamavano di<br>  essere i migliori, ma non si sono mai avvicinati alla protezione di Advanced SystemCare Pro,<br> che sto usando adesso. Dopo aver acquistato questo programma impressionante, non ho mai<br> chiamato un tecnico per chiedere aiuto.
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
             href="https://www.iobit.com/buy.php?product=it-asc133pciusd1899&ref=it_asc133pciusd1899purchase2002b<?php echo $refStr;?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2020b-it');">
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