<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itascexd_p' . $date;
  $c_name_t='itascexd_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);

function paramDeal($num,$decimals,$separate=',',$decimal='.'){
  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
}

$params=json_decode(base64_decode($_GET['data']));
$fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,'.',',');
$fileSizeUnit='GB';
if($fileSizeShow<=1){
  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,'.',',');
  $fileSizeUnit='elementi';
}
$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
$paramPri=paramDeal($params->privacy,0,'.',',');
$paramPro=paramDeal($params->program,0,'.',',');
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Paga €0 per ottenere l'ultimo Advanced SystemCare 13 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Rende il PC lento più veloce al 200%*</h3>
      <dl>
        <dt class="price">
          <strong>€<b>0</b><sup>*</sup></strong>
          <a href="https://www.iobit.com/buy.php?product=it-asc13preorder&ref=it_asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-it');" class="buybtn"><span>Pre-ordina Ora</span></a>
        </dt>
        <dd class="number">
          Affrettati, solo
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          pezzi rimasti. <span><span class="viewNum"><?php echo $viewNum;?></span> stanno visualizzando.</span>
        </dd>
      </dl>
    </div>
    <span class="arrow"></span>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Cosa ha fatto Advanced SystemCare PRO<br> per te nel passato?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        <div class="scan">Scansiona</div>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span><?php echo empty($paramJunk)?'Liberato':'Liberati';?> <b>XX</b> <?php echo empty($paramJunk)?'lo':'di';?> spazio sul disco.</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Cancellate <b>XX</b> tracce private.</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Accelerato il tempo d’avvio del PC fino al <b>200%</b> più veloce.</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Accelerata la connessione Internet fino al <b>300%</b> più veloce.</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Bloccati <b>XX</b> accessi non attendibili ai tuoi dati personali.</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>Con la tua edizione scaduta,</h3>
      <h2>non potresti <b>godere più：</b></h2>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span>Pulizia approfondita dei file di registro per risolvere i problemi di sistema</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Pulizia automatica della RAM per fare funzionare più veloce il PC</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Accelerazione dell’avvio del PC e della connessione d’Internet</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Protezione dei dati personali per evitare le perdite di privacy</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Protezione in tempo reale per evitare l'infezione di malware</span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Il nuovo Advanced SystemCare 13 PRO <br> ti offre molte più funzioni avanzate per la migliore prestazione del tuo PC!</h2>
    <div class="clearfix">
      <dl class="blue">
        <dt><img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>4GB<small>*</small></h3>
          <p>Rileva e pulisci i file di <b>4 GB *</b> in più</p>
        </dd>
      </dl>
      <dl class="purple">
        <dt><img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>200+</h3>
          <p>Pulisce le tracce personali<br> da oltre <b>200</b> programmi e <b>15</b> browser per tutti gli account utente</p>
        </dd>
      </dl>
      <dl class="green">
        <dt><img src="<?php echo getStaticUrl('images/f-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>e-mail</h3>
          <p>Protegge la tua email da varie minacce derivanti dalle <b>email</b></p>
        </dd>
      </dl>
      <dl class="orange">
        <dt><img src="<?php echo getStaticUrl('images/f-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>60%</h3>
          <p>Aggiorna il <b>60%</b> in più dei software con un solo clic</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Cosa abbiamo fatto per i nostri utenti</h2>
    <div class="present clearfix">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/p-icons01.png')?>" alt=""/></dt>
        <dd>Riparato problemi per <h4 class="first">00.000.000</h4> utenti</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/p-icons02.png')?>" alt=""/></dt>
        <dd>Risparmiato <h4 class="two">0.000.000</h4> ore al mese</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons03.png')?>" alt=""/></dt>
        <dd>Risparmiato <h4>$1,18  bilioni</h4> all’anno</dd>
      </dl>
    </div>
    
    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Recensioni dei media</span></h2></dt>
            <dd>
              <p class="on">"Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."</p>
             <cite>HTML</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recensioni degli utenti</span></h2></dt>
            <dd> 
              <p class="twice">"Nel corso del tempo ho provato vari programmi che promettevano di mantenere i miei computer liberi da qualunque tipo di problema. All’inizio, molti anni fa, ho incominciato ad usare ASC nella sua versione gratuita. Scoprendo poi che il mio computer non aveva più problemi e non era più lento, sono passato alla versione a pagamento e da allora non ho mai fatto dietrofront. In base alle mie esperienze, Advanced SystemCare Pro è l'unico che mi sento di consigliare. Uso anche IObit Uninstaller, Smart Defrag e Driver Booster, rendono le cose veramente migliori."</p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recensioni degli utenti</span></h2></dt>
            <dd>
              <p>"Advanced System Care è un ottimo programma. Uso questo programma da molti anni e funziona molto bene. L’azienda perfeziona sempre i suoi prodotti , migliorandosi anno dopo anno. Uso molti dei loro prodotti e funzionano tutti molto bene. "</p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recensioni degli utenti</span></h2></dt>
            <dd>
              <p>"Non ho mai trovato un programma di manutenzione o sicurezza del PC migliore di Advanced Systems Care, dal momento in cui ho acquistato ASC, non ho mai avuto problemi con virus, phishing, schermate nere o altre inimmaginabili minacce, sono stati i soldi spesi in modo migliore in ambito di computer, grazie ASC per rendere la mia esperienza informatica molto più piacevole."</p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recensioni degli utenti</span></h2></dt>
            <dd> 
              <p>"Ho usato Advanced SystemCare Pro per molto tempo e l’ultima versione 13 è ancora meglio della versione 12. Rileva e risolve i problemi velocemente e ha molte funzioni extra che puoi utilizzare per far funzionare bene e in modo stabile il tuo computer. Non posso che raccomandarlo caldamente."</p>
              <cite>Tony Fisher</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recensioni degli utenti</span></h2></dt>
            <dd>
              <p>"Il Nuovo ASC13 è un must che tutti gli utenti del PC devono avere. La sua interfaccia chiara ed intuitiva rende il programma facilmente utilizzabile dagli utenti alle prime armi, fino a quelli più esperti.
                Nel programma sono inclusi molti strumenti utili per far funzionare il tuo computer alla massima prestazione. Complimenti ad IObit per così tanti magnifici strumenti racchiusi in un unico programma. "</p>
              <cite>Daniel Sanders</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recensioni degli utenti</span></h2></dt>
            <dd>
              <p>"Amo utilizzare Advanced SystemCare 13 Beta. È veloce. Pulisce le tracce di privacy, i file spazzatura e i frammenti di registro. Mi piace specialmente il pop-up di autorizzazione dell’accesso all’area sensibile. Quando per la prima volta un’app prova ad accedere a file sensibili, appare una finestra per consentirne o negarne l’accesso. Una volta che è stata garantita l’autorizzazione per un’app, il pop-up non apparirà più per quell’app. So che i miei file sensibili sono al sicuro."</p>
              <cite>Richard Preston</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/html-it.png')?>" alt="Cnet"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
          <li class="six last" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Premi Mondiali</h2>
    <p>
      In quanto fidato e premiato da quei media di classe mondiale negli ultimi dodici anni, sai che ottieni l'ottimizzatore giusto per PC.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

  
  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
       Note:
      </dd>
      <dd>
        *. Abbiamo testato il Advanced SystemCare 13 PRO nel nostro laboratorio di test interno. I risultati possono variare.
      </dd>
      <dd>
        *. Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €17,99 sulla tua carta di credito o account PayPal. Lo sconto del 65% sul prezzo originale di €49,99 è un bonus solo per i preordini!
      </dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
  <!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      Affrettati, solo
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      pezzi rimasti. <span><span class="viewNum"><?php echo $viewNum;?></span> stanno visualizzando.</span>
    </div>
    <div class="price">
      <strong>€<b>0</b><sup>*</sup></strong> <a href="https://www.iobit.com/buy.php?product=it-asc13preorder&ref=it_asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-it');" class="buybtn"><span>Pre-ordina Ora</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>
    $(".intro .wrapper .right b").eq(0).html("<?php echo $paramJunk?>").end().eq(1).html("<?php echo $paramPri?>").end().
      eq(4).html("<?php echo $paramPro;?>");
  </script>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>