<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='frasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc','x_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['to'],array('softall','soft','iuself','bdplug','plug','uqprom','bdfail',
    'bdprog','iuasc'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grande Offerta! Sconti fino al 75% su Advanced SystemCare PRO e IObit Uninstaller PRO – Offerta natale 2018 di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>GRANDE OFFERTA DI CAPODANNO!</h1>
      <p class="best">Sconto più basso in assoluto – SOLO una volta all’anno!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Affrettati! Scade tra<b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms</p>
            </div>
            <p><strong>19<small>,</small></strong> <span><b>99</b><del>€79,98</del> </span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-asc12iu83pc1999&ref=it_asc12iu83pc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1811xr-it')">
              Approfittane Ora
            </a>
            <p class="year">Un abbonamento annuale per 3 PC</p>
          </div>
        </div>
      </div>
    </div>    
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Ottimizzazione Raddoppiata di IObit: PC più pulito, più veloce e più sicuro</h2>
      <p class="over">
        IObit Uninstaller 8 PRO insieme al programma di ottimizzazione più avanzato al mondo – Advanced SystemCare 12 PRO, fanno funzionare il tuo vecchio PC come nuovo eliminando qualsiasi traccia di programmi ostinati!
      </p>
      <!-- computer -->
      <img class="computer" src="<?php echo $pResUrl;?>images/computer.png" alt="">
      <span class="circle circle-out"></span>
      <span class="circle circle-mid"></span>
      <span class="circle circle-int"></span>
      <!-- Schonere PC -->
      <dl class="schonere clearfix">
        <dd class="fl">
          <h3>PC più Veloce</h3>
          <p>
            Pulisce a fondo i file spazzatura e i registri per liberare lo spazio sul PC.
            <span>*Advanced SystemCare PRO Esclusivo</span>
            Nessun programma ostinato o programma in bundle.
            <span>*IObit Uninstaller PRO Esclusivo</span>
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      </dl>
      <!-- Sneller Browsen -->
      <dl class="sneller clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Navigazione Online più Fluida</h3>
          <p>
            Ottimizza le impostazioni del browser per incrementare la velocità di Internet del 300% in più.
            <span>*Advanced SystemCare PRO Esclusivo</span>
            Nessun plugin che rallenta il tuo browser.
            <span>*IObit Uninstaller PRO Esclusivo</span>
          </p>
        </dd>
      </dl>
      <!-- Veiligere PC -->
      <dl class="veiligere">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>PC più Sicuro</h3>
          <p>
           Protegge i dati personali e le tracce della privacy online contro i programmi non autorizzati e i malware.
            <span>*Advanced SystemCare PRO Esclusivo</span>
            Nessun programma in bundle né plugin maligni.

            <span>*IObit Uninstaller PRO Esclusivo</span>
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <div class="arrow"><i></i></div>
      <h2>NON È FINITA QUI! Puoi anche godere di ulteriori funzionalità avanzate elencate sotto:</h2>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-01.png" alt=""></dt>
        <dd>
          200% Avvio più Veloce
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-02.png" alt=""></dt>
        <dd>
          Protezione dell’Impronta Digitale
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-03.png" alt=""></dt>
        <dd>
          Pulizia Automatica della RAM 
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-04.png" alt=""></dt>
        <dd>
          Aggiorna tutti i Software con un Solo Clic
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Non esitare! Ottieni subito due utilità potenti per ottimizzare il tuo PC al massimo!</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora!
          </p>
        </div>
        <p><strong><strong>19<small>,</small></strong><span><b>99</b><del>€79,98</del> </span></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc12iu83pc1999&ref=it_asc12iu83pc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1811xr-it')">
          Approfittane Ora
        </a>
        <p class="year">Un abbonamento annuale per 3 PC</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- award start -->
  <div class="award wrapper">
    <h2>Raccomandato e premiato dai media mondiali</h2>
    <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
  </div>
  <!-- award end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <div class="content ">
        <!-- 01 -->
        <dl class="active">
          <dt>
            <h3>Recensioni degli utenti</h3>
          </dt>
          <dd>
            "Come la maggior parte degli utenti, non sono un esperto di computer. Non so quanti programmi che ho provato nel corso degli anni, tutti reclamano di essere il migliore, ma mai avvicinarsi alla protezione di Advanced SystemCare Pro che sto usando adesso. Dopo avere acquistato questo programma impressionante, non ho mai chiamato un tecnico per aiuto più, nemmeno una sola volta. Ha superato le mie aspettative, mantiene sempre aggiornato, e la grafica è molto fresca! Grazie mille a tutti voi per rendere la mia vita molto più facile e veloce."
          </dd>
        </dl>
        <!-- 02 -->
        <dl>
          <dt>
            <h3>Recensioni degli utenti</h3></dt>
          <dd>
           "Come un tecnico in riparazione di computer, ho trovato che la maggiore parte di problemi possono essere risolti con la scansione e riparazione di Advanced SystemCare Free. Di solito, dopo aver finita una riparazione, consiglio al cliente di acquistare la versione Pro di questo prodotto. Chi ha bisogno di un tecnico avendo il potente Advanced SystemCare che cura il tuo sistema 24-7? Questo è il miglior prodotto che ogni utente privato vale a comprare e provare. Grazie per aver reso il mio lavoro più facile..”
          </dd>
        </dl>
        <!-- 03 -->
        <dl>
          <dt>
            <h3>Recensioni dei media</h3></dt>
          <dd>
           "Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."
          </dd>
        </dl>
        <!-- 04 -->
        <dl>
          <dt>
            <h3>Recensioni dei media</h3></dt>
          <dd>
            "Questo strumento di disinstallazione facile da usare e informativo pulisce, configura, e ottimizza il tuo PC. Gli utenti possono scaricarlo in pochissimi minuti. Questo strumento di disinstallazione può essere classificato come il miglior programma di disinstallazione e permette agli utenti di disinstallare all'ingrosso. Esso offre agli utenti di fare una "Scansione Approfondita" per andare più a fondo e trovare gli avanzi. La prestazione la stessa rende questo piccolo strumento vale la pena tenere."
          </dd>
        </dl>
        <!-- 05 -->
        <dl>
          <dt>
            <h3>Recensioni degli utenti</h3></dt>
          <dd>
            "IObit Uninstaller PRO è uno dei cinque prodotti di manutenzione di IObit che ho investito nel mio PC, come Chef investono in loro coltelli. Uninstaller è ottimo per trovare i residui di bit e byte nascosti nel PC che occupano lo spazio dei dischi e colpisce i registri. Se uso la versione free, si funziona. Ma la versione PRO ha rilevato altri 35 file da pulire dopo la disinstallazione normale. Tutto quello che devo fare è cliccare OK. Consiglio vivamente e ho acquistato il codice di licenza per 3 PC. Il servizio cliente è anche attento ed efficace."
          </dd>
        </dl>
        <!-- 06 -->
        <dl>
          <dt>
            <h3>Recensioni degli utenti</h3></dt>
          <dd>
            "IObit Unisntaller migliora se stesso con ogni aggiornamento, l’ho già usato per 3 anni. Funziona molto veloce e ha un’interfaccia semplice. Alcune funzioni che uso regolarmente sono Batch Uninstaller, Scansione Approfondita, Distruggi File e Installati di Recente, il quale offre un accesso veloce ai programmi installati di recente che non mi piacciono o non funzionano correttamente. È anche facile da controllare i tuoi elementi d’avvio per rendere più veloce l’avvio del tuo PC."
          </dd>
        </dl>
      </div>
      <ul class="users clearfix lato">
        <!-- hank-ewert -->
        <li class="current">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/hank-ewert.png" alt="Hank Ewert"></div>
            <p>Hank Ewert</p>
          </a>
        </li>
        <!-- 02 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick"></div>
          <p>Charles R. Widick</p>
        </li>
        <!-- 03 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/HTML.it.png" alt="HTML.it"></div>
          <p>HTML.it</p>
        </li>
        <!-- 04 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt="MakeUseOf">
          </div>
          <p>MakeUseOf</p>
        </li>
        <!-- 05 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/joseph-yu.png" alt="Joseph Yu"></div>
          <p>Joseph Yu</p>
        </li>
        <!-- 06 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/Lovro-zuzic.png" alt="Lovro Žužić">
          </div>
          <p>Lovro Žužić</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <div class="box fl">
        <img src="<?php echo getStaticUrl('images/asc-bottom-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count fl">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora!
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Affrettati! Scade tra<b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms over</p>
      </div>
      <div class="price fr">
        <p><strong><strong>19<small>,</small></strong><span><b>99</b><del>€79,98</del> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc12iu83pc1999&ref=it_asc12iu83pc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1811xr-it')">
          Approfittane Ora
        </a>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="service clearfix">
      <dl class="fl moneyback clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
        <dd class="fl">
          <h3>Provalo senza nessun rischio con la nostra garanzia di <br>
rimborso di 60 giorni
          </h3>
          <p>
           Garantiamo la tua soddisfazione entro 60 giorni dopo aver <br>
attivato la versione PRO.
          </p>
        </dd>
      </dl>
      <dl class="fl payments">
        <dd><h3>Accettiamo</h3></dd>
        <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
      </dl>
    </div>
    <p class="notes">
      Note:<br>
      * Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.<br>
      * I dati potrebbero variare in base al sistema o computer.
    </p>
    <p class="copyright">Copyright © 2005 - 2018 IObit. Tutti i diritti riservati</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=it-asc12iu83pc1899&ref=it_asc12iu83pc1899purchase1811xr<?php echo $refStr;?>&refs=it_purchase_iu";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1811xr-1-it') ";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>