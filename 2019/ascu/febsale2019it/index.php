<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}

$name=explode(' ',trim(get_line('data/names_jan.txt',rand(1,50))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
if(!empty($_GET['action'])&&($_GET['action']=='getUser')){
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName));
  exit();
}

$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
if($_GET['ref']=='nc'){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Offerta speciale - Sconti fino all’77% su Advanced SystemCare Ultimate per contro i virus</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Muli:600,800" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <div class="clearfix">
      <a class="logo fl" href="https://www.iobit.com/it/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1 class="title fr">OFFERTA SPECIALE Solo Per Te!</h1>
    </div>
    <h2>Nuovo Advanced Systemcare Ultimate rende la tua vita digitale più sicura!</h2>
    <div class="clearfix">
      <div class="offer">
        <h3>-50%</h3>
        <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/>
        <div class="price">
          <p><del>€59.99</del> <strong>€<big>29</big>.99</strong></p>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=it-au122999&ref=it_au123pc2999purchase1902<?php echo $refStr;?>&refs=it_purchase_ascu"
             onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1902b-it')">
            APPROFITTANE ORA
          </a>
        </div>
      </div>
      <div class="offer big">
        <h3>-77%</h3>
        <div class="countdown"><strong>00</strong> Ore : <strong>10</strong> Min : <strong class="small">00</strong> Sec : <strong class="small">000</strong> Ms</div>
        <img src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt=""/>
        <div class="price">
          <p><del>€129.93</del> <strong>€<big>29</big>.99</strong></p>
          <a class="buybtn orange" 
             href="http://www.iobit.com/buy.php?product=it-au12sdpf2999&ref=it_au123pcsdpf2999purchase1902<?php echo $refStr;?>&refs=it_purchase_ascu"
             onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1902a-it')">
            APPROFITTANE ORA
          </a>
        </div>
      </div>
    </div>
    <div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Il tuo computer ha bisogno di una protezione più professionale e potente</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/hightlight.png')?>" alt=""/>
      </div>
      <div class="describe fr">
        <ul>
          <li><i class="all-icons">√</i> Protegge il PC contro virus, spyware, ransomware, hacker, e tanti altri.</li>
          <li><i class="all-icons">√</i> Protegge il PC in modo proattivo dagli attacchi ransomware come WannaCry.</li>
          <li><i class="all-icons">√</i> Protegge la tua privacy online in tempo reale.</li>
          <li><i class="all-icons">√</i> Accelera, pulisce e ripara i vari problemi del PC in un solo clic.</li>
          <li><i class="all-icons">√</i> Leggero, veloce e compatibile con altri prodotti di sicurezza.</li>
        </ul>
        <img class="service" src="<?php echo getStaticUrl('images/prize-icon.png')?>" alt=""/>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- centbuy start -->
<div class="centbuy">
  <div class="wrapper">
    <h2>Ti suggeriamo di ottenere il pacchetto regalo (<b>Valore di €69,94</b>)!</h2>
    <h4>Per una protezione migliore e omnicomprensiva del tuo computer.</h4>
    <div class="clearfix">
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/></dt>
        <dd>
          <h3>Smart Defrag 6 PRO</h3>
          <strong>€0 </strong> <del>€29,99</del>
          <p>Offre la migliore deframmentazione del disco e accelera al massimo l'hard driver!</p>
        </dd>
      </dl>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Floder"/></dt>
        <dd>
          <h3>Protected Folder PRO</h3>
          <strong>€0 </strong> <del>€39,95</del>
          <p>Mantiene i tuoi file e dati lontani dagli accessi non autorizzati e dagli attacchi dannosi.</p>
        </dd>
      </dl>
    </div>
    <a class="buybtn orange" 
       href="http://www.iobit.com/buy.php?product=it-au12sdpf2999&ref=it_au123pcsdpf2999purchase1902<?php echo $refStr;?>&refs=it_purchase_ascu"
       onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1902a-it')">
      OTTIENI SUBITO I REGALI
    </a>
  </div>
</div>
<!-- centbuy end -->

<!-- awards start -->
<div class="awards wrapper">
  <h2>PREMIATO E CONSIGLIATO DAI MEDIA PROFESSIONALI A LIVELLO MONDIALE</h2>
  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
</div>
<!-- awards end -->

<!-- review start -->
<div class="review wrapper">
  <div class="content clearfix">
    <div class="reviews active">
      <h2>Recensioni degli Utenti</h2>
      <h3>"Advanced SystemCare Ultimate è Grandioso!"</h3>
      <p>"Ho avuto un problema che metteva sempre nei guai il mio computer. Dopo avere installato Advanced SystemCare Ultimate, non c’è più il problema dei guai. Antivirus è già incluso nel prodotto, non ho bisogno di installarne un altro. È il vincitore! Il mio computer è sempre aggiornato e funziona velocemente. È il programma più eccellente tra gli altri e senza nussun flusso costante di conflitti."</p>
    </div>
    <div class="reviews">
      <h2>Recensione dei Media</h2>
      <h3>"In conclusione Advanced SystemCare Ultimate è un ottimo prodotto."</h3>
      <p>"In conclusione Advanced SystemCare Ultimate è un ottimo prodotto che unisce le caratteristiche della versione precedente, insieme a quelle di Advanced SystemCare con Antivirus dando vita ad un prodotto nuovo, robusto e dalle eccellenti funzionalità. L’interfaccia grafica di Advanced SystemCare era già accattivante e ben organizzata."</p>
    </div>
    <div class="reviews">
      <h2>Recensioni degli Utenti</h2>
      <h3>"Vi raccomando Advanced SystemCare Ultimate come programma antivirus, è perfetto!"</h3>
      <p>"Con la versione precedente di Advanced SystemCare Ultimate non ho mai avuto problemi di nessun tipo, né per il sistema né per i malware. Dopo aver aggiornato all’ultima versione, le funzionalità aggiuntive hanno reso il mio PC cinque volte più veloce di prima. Mi piace anche la nuova interfaccia. Vi consiglio caldamente di installare Advanced SystemCare Ultimate come programma antivirus, è eccezionale."</p>
    </div>
  </div>
  <ul class="handle clearfix">
    <li class="first">
      <div class="badge">
        <img src="<?php echo getStaticUrl('images/rod-garnett.png')?>" alt="Rod Garnett"/>
        <span></span>
      </div>
      <strong>Rod Garnett</strong>
    </li>
    <li class="active">
      <div class="badge">
        <img src="<?php echo getStaticUrl('images/htmlit.png')?>" alt="HTML.it"/>
        <span></span>
      </div>
      <strong>HTML.it</strong>
    </li>
    <li>
      <div class="badge">
        <img src="<?php echo getStaticUrl('images/dareen-lim.png')?>" alt="Dareen Lim"/>
        <span></span>
      </div>
      <strong>Dareen Lim</strong>
    </li>
  </ul>
</div>
<!-- review end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Perché Advanced SystemCare Ultimate 12?</h2>
    <h5>Un potente antivirus che non teme i confronti. Il tuo supporto ci aiuta a fare meglio!</h5>
    <img class="screen" src="<?php echo getStaticUrl('images/screen.jpg')?>" alt="Advanced SystemCare Ultimate"/>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-01.png')?>" alt=""/></dt>
        <dd>
          <h3>Protezione massima senza rivali</h3>
          <p>
            Advanced SystemCare Ultimate garantisce una protezione proattiva, automatizzata ed efficace contro ogni tipo di minaccia alla sicurezza proveniente da Internet, aggiornando rapidamente il suo database di virus.
          </p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/intro-02.png')?>" alt=""/></dt>
        <dd>
          <h3>Scopri la sicurezza senza rallentamenti</h3>
          <p>
            Grazie alla nostra tecnologia di sicurezza all’avanguardia, il tuo sistema lavorerà alla massima velocità, senza alcun rallentamento.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-03.png')?>" alt=""/></dt>
        <dd>
          <h3>Naviga in sicurezza</h3>
          <p>
            La tecnologia antivirus proattiva tiene sotto controllo i processi in tempo reale, analizza i file condivisi via email e blocca le potenziali minacce.
          </p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/intro-04.png')?>" alt=""/></dt>
        <dd>
          <h3>Ottimizza le prestazioni del PC</h3>
          <p>
            Grazie all'ottimizzazione in tempo reale e alla funzione ActiveBoost, le risorse di sistema vengono gestite in maniera intelligente per garantirti un PC velocissimo.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper">
    <h2>Sconti fino al <span>77%</span>, non perderti questa occasione!</h2>
    <div class="clearfix">
      <div class="imgbox fl">
        <img class="active" src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt=" Advanced SystemCare Ultimate"/>
        <img class="one" src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=" Advanced SystemCare Ultimate"/>
      </div>
      <ul class="fl">
        <li class="one active" data-num="1"><i class="all-icons"></i> <span>1 Anno / 3PC+SD+PF</span> <strong>-77%</strong></li>
        <li data-num="0"><i class="all-icons"></i> <span>1 Anno / 3PC</span> <strong>-50%</strong></li>
      </ul>
      <div class="price fr">
        <p><del>€129.93</del> <strong>€<big>29</big>.99</strong> <span>Risparmi: <span class="discount">€99.94</span></span></p>
        <a class="buybtn orange" 
           href="http://www.iobit.com/buy.php?product=it-au12sdpf2999&ref=it_au123pcsdpf2999purchase1902<?php echo $refStr;?>&refs=it_purchase_ascu"
           onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1902a-it')">
          APPROFITTANE ORA
        </a>
      </div>
    </div>    
  </div>
</div>
<!-- footbuy end -->

<!-- footer start -->
<div class="footer">
  <!-- payment -->
  <div class="server wrapper clearfix">
    <!-- visa -->
    <dl class="visa">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
      <dd><strong>Garanzia di Rimborso</strong></dd>
      <dd>Garantiamo il rimborso entro <br>60 giorni.</dd>
    </dl>
    <!-- moneyback -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
      <dd><strong>Pagamento 100% Sicuro</strong></dd>
      <dd>IObit offre i metodi di pagamento <br>sicuri per la transazione.</dd>
    </dl>
    <!-- godaddy -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
      <dd><strong>Attivazione Veloce</strong></dd>
      <dd>Riceverai il codice di <br>licenza in pochi minuti tramite la mail.</dd>
    </dl>
    <!-- servicion -->
    <dl class="servicion">
      <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
      <dd><strong>Servizio di Supporto</strong></dd>
      <dd>Il nostro supporto tecnico gratuito <br>è disponibile 24 ore su 24.</dd>
    </dl>
  </div>
  <div class="container">
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
    <dd>2*.I dati potrebbero variare in base al sistema o computer.</dd>
  </dl>
  <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="float">
  <i class="all-icons clock"></i>
  <i class="all-icons close"></i>
  <p>
    <span id="firstName"><?php echo $firstName;?></span> <span id="lastName"><?php echo $lastName;?></span> ha già acquistato
  </p>
  <p>
    Solo <b class="packsNum"><?php echo $packsNum ?></b> pezzi restanti, affrettati!
  </p>

</div>
<!-- float end -->

<div class='popout'><p>La licenza di ASCU v11 è anche <strong>valida su ASCU v12.</strong></p></div>

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>