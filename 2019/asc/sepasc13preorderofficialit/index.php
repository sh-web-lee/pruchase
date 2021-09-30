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
  $c_name = 'itascpre_p' . $date;
  $c_name_t='itascpre_t' . $date;
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
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Rende il PC lento più veloce al 200%*</h3>
      <dl>
        <dt class="price">
          <strong>€<b>0</b></strong>
          <a href="http://www.iobit.com/buy.php?product=it-asc13preorder&ref=it_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13 predorderofficial-it');"
             class="buybtn">
            <span>Pre-ordina Ora</span>
          </a>
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
  </div>
</div>
<!-- banner end -->

<!-- intro -->
<div class="intro wrapper clearfix">
    <span class="arrow"></span>
    <h2> Perché Advanced SystemCare 13 PRO </h2>
    <div class="title">
      <span class="arrow"></span>
      <h2> Perché Advanced SystemCare 13 PRO </h2>
    </div>
  <div class="left-message">
    <div class="message">
      
      <div class="list">
        <h3>Computer più veloce</h3>
        <dl>
          <dt>200% più veloce del PC</dt>
          <dd>
            Pulisce e ottimizza il sistema per accelerare l’avvio del PC, rendendolo <br>
            funzionare fino al 200% più veloce.
          </dd>
        </dl>
        <dl>
          <dt>300% più veloce d’Internet</dt>
          <dd>
            Ottimizza le impostazioni del browser per accelerare il download, <br>
            la navigazione, il gioco, e la visualizzazione su YouTube fino <br>
            al 300% più veloce.
          </dd>
        </dl>
      </div>
    </div>
    <div class="message">
      <div class="list">
        <h3>Navigazione più sicura</h3>
        <dl>
          <dt>Scudo della Privacy</dt>
          <dd>
            Blocca i programmi non attendibili per accedere ai dati <br>
            sensibili come contatto, dati e-mail, Dropbox, OneDrive ecc.
          </dd>
        </dl>
        <dl>
          <dt>Navigazione sicura</dt>
          <dd>
            Cancella automaticamente i dati di navigazione e nasconde le <br>
            tracce per impedire agli tracker di curiosare su ciò che leggi, <br>
            visualizzi e acquisti.
          </dd>
        </dl>
      </div>
    </div>
    <div class="message last">
      <div class="list">
        <h3>Altre funzionalità</h3>
        <ul class="active">
          <li>Pulizia automatica dei file spazzatura per ottimizzare il sistema <br> all’orario programmato</li>
          <li>Pulisce a fondo i registri per ridurre i crash e gli errori del sistema</li>
          <li>Protezione automatica contro le infezioni da malware in tempo reale</li>
          <li>Rileva le minacce più profonde nel computer</li>
          <li>Rileva i collegamenti dannosi nelle e-mail web</li>
          <li class="no">Arresta automaticamente i servizi non necessari per rilasciare la RAM</li>
          <li>Blocca automaticamente gli intrusi con FaceID</li>
          <li>Rimuove automaticamente gli annunci pubblicitari fastidiosi sulla <br> pagina web</li>
          <li>Aggiorna tutti i software obsoleti con un clic</li>
          <li>Aggiorna automaticamente all’ultima versione</li>
          <li>Supporto tecnico 24/7 gratuito su richiesta</li>
        </ul>
      </div>
    </div>
  </div>
  <div class="change-img">
    <div class="list-img list01 show">
      <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
      <div class="scan">
        <div class="circleprogress-content">
          <div class="circle right">
              <div class="circleprogress rightcircle"></div>
          </div>
          <div class="circle left">
              <div class="circleprogress leftcircle"></div>
          </div>
       </div>
      </div>
      <div class="img-before">
        <span class="change-num">50</span>
        <span class="completed"></span>
        <div class="circle">
          <div class="top-circle"></div>
          <div class="bottom-circle"></div>
        </div>
      </div>

    </div>
    <div class="list-img list02">
      <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
      <div class="privacy">
        <span class="icon"></span>
        <div class="check"></div>
        <span class="text">1 accesso segreto</span>
      </div>
      <div class="privacy-right"></div>
    </div>
    <div class="list-img list03">
      <img src="<?php echo getStaticUrl('images/intro3.png')?>" alt="" class="nomal3">
      <div class="icon-list">
        <span class="icons01"><i></i></span>
        <span class="icons02"><i></i></span>
        <span class="icons03"><i></i></span>
        <span class="icons04"><i></i></span>
        <span class="icons05"><i></i></span>
        <span class="icons06 active"><i></i></span>
      </div>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- review-content -->
<div class="review-content">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Ulteriori informazioni su Advanced SystemCare 13 PRO</h2>
    <h3>Cosa abbiamo fatto per ottimizzare il computer dei nostri utenti</h3>

    <!-- present -->
    <div class="present">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
        <dd>
          Risolto i problemi per <strong>30.000.000</strong> di utenti
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
        <dd>
          Risparmiato <strong>2.666.667</strong> ore al mese
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
        <dd>
          Risparmiato <strong>$1,18 miliardi</strong> all'anno
        </dd>
      </dl>
    </div>
    <!-- end present -->

    <!-- review start -->
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
              <p>"Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."</p>
             <cite>HTML</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Recensioni degli utenti</span></h2></dt>
            <dd> 
              <p>"Nel corso del tempo ho provato vari programmi che promettevano di mantenere i miei computer liberi da qualunque tipo di problema. All’inizio, molti anni fa, ho incominciato ad usare ASC nella sua versione gratuita. Scoprendo poi che il mio computer non aveva più problemi e non era più lento, sono passato alla versione a pagamento e da allora non ho mai fatto dietrofront. In base alle mie esperienze, Advanced SystemCare Pro è l'unico che mi sento di consigliare. Uso anche IObit Uninstaller, Smart Defrag e Driver Booster, rendono le cose veramente migliori."</p>
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
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/html.png')?>" alt="HTML"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
</div>
<!-- end review-content -->

<!-- bottom -->
<div class="bottom">
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Premi Mondiali</h2>
    <p>
      In quanto fidato e premiato da quei media di classe mondiale negli ultimi dodici anni, sai che ottieni l'ottimizzatore giusto per PC.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer wrapper">
    <dl>
      <dd>
       Note:
      </dd>
      <dd>*.Abbiamo testato il Advanced SystemCare 13 PRO nel nostro laboratorio di test interno. I risultati possono variare.</dd>
      <dd>*.Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €17,99 sulla tua carta di credito o account PayPal. Lo sconto del 65% sul <br> &nbsp; prezzo originale di €49,99 è un bonus solo per i preordini!</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
  <!-- footer end -->

</div>

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
      pezzi rimasti. <span><span class="viewNum"><?php echo $viewNum;?></span> stanno visualizzando. </span>
    </div>
    <div class="price">
      <strong>€<b>0</b></strong>
      <a href="http://www.iobit.com/buy.php?product=it-asc13preorder&ref=it_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13 predorderofficial-it');"
         class="buybtn">
        <span>Pre-ordina Ora</span>
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>