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
  $cName='ascprepa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
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
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Soli €0, preordina subito il nuovo Advanced SystemCare 12 PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>LA PRE-VENDITA GLOBALE HA INIZIO!</h1>
        <h3>Affrettati! Offerta limitata per 500 pezzi, <span class="soldNum">453</span> venduti ora</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                Ora: <del>€49.99</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum">78</span> persone stanno guardando, <b class="reduceGift"><span class="packsNum">**</span></b> posti rimasti!
                </li>
                <li id="bandown" class="countdown">Scade tra : <b>05</b>M: <b>00</b>S: <b>000</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=it-asc12preorder&ref=it_asc12preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorder-it');"
                 data-text="Pre-ordina Ora">
                <span>Pre-ordina Ora</span>
              </a>
              <h5>Abbonamento 1 Anno/3 PC</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- flow start -->
    <div class="flow wrapper clearfix">
      <p>
        Se soddisfatto, ottieni uno sconto del
        65% sul prezzo originale 30 giorni dopo il
        pre-ordine
      </p>
      <h2>€0 pre-ordina oggi</h2>
      <p>
        Se insoddisfatto, cancellazione entro 30 giorni senza alcun addebito
      </p>
    </div>
    <!-- flow end -->

    <!-- intro start -->
    <div class="intro wrapper">
      <h2><b>3 RAGIONI</b> per pre-ordinare Advanced  SystemCare 12 PRO</h2>
      <h3 class="steps-title"><b>1</b> Nuova funzionalità che vale la pena provare</h3>
      <div class="panel">
        <img src="<?php echo getStaticUrl('images/screen.png')?>" alt=""/>
        <dl class="first">
          <dt><img src="<?php echo getStaticUrl('images/intro_01.png')?>" alt=""/></dt>
          <dd>
            <h4>Scudo della Privacy <b>NUOVO</b></h4>
            <h5>Blocca l’accesso segreto ai tuoi file e foto</h5>
            <p>
              Proteggi i tuoi file privati e le tue foto contro gli accessi segreti o non autorizzati per evitare la perdita della privacy e i rischi derivanti dai software ricatto, siti di phishing e messaggi
            </p>
          </dd>
        </dl>
        <dl class="two">
          <dt><img src="<?php echo getStaticUrl('images/intro_02.png')?>" alt=""/></dt>
          <dd>
            <h4>Pulizia dell’Impronta Digitale <b>NUOVO</b></h4>
            <h5>Nessuno saprà cosa fai online</h5>
            <p>
              Nascondi la traccia dell’impronta digitale che hai lasciato. Evita che le compagnie di tracciamento ficchino il naso in quello che leggi, vedi o acquisti.
            </p>
          </dd>
        </dl>
        <dl class="three">
          <dt><img src="<?php echo getStaticUrl('images/intro_03.png')?>" alt=""/></dt>
          <dd>
            <h4>Anti-Mining di Criptovalute <b>NUOVO</b></h4>
            <h5>Dì addio ai crash improvvisi, al surriscaldamento e arresto del computer</h5>
            <p>
              Impedisci ai siti web maligni che visiti di usare il tuo computer per minare<br>
              le criptovalute, provocando crash del browser, surriscaldamento del<br>
              computer e improvvisi arresti del sistema.
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h2 class="steps-title"><b>2</b> Esperienza migliorata con ottimizzazioni</h2>
        <ul class="clearfix">
          <li><img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt=""/></li>
          <li><img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt=""/></li>
          <li><img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt=""/></li>
        </ul>
        <div class="note">
          <span><i>□</i> La tua Versione Attuale</span>
          <span class="blue"><i>■</i> Advanced SystemCare 12 PRO</span>
        </div>
        <p>*Abbiamo testato Advanced SystemCare 12 PRO nei nostri laboratori interni. I tuoi risultati possono variare.</p>
      </div>
    </div>
    <!-- feature end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2 class="steps-title"><b>3</b> Soluzioni perfette per i frustranti problemi del tuo PC</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema"><span class="cry">PROBLEMA</span></th>
              <th class="itemb"></th>
              <th class="itemc"><span class="smile">SOLUZIONE</span></th>
            </tr>
          </thead>
          <tbody>
            <!-- 01 -->
            <tr class="first">
              <td class="itema">
                <p>Ricevi il messaggio di <span>spazio esaurito sul drive del [disco]</span></p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Scansiona automaticamente e rimuove i file spazzatura per liberare spazio sul disco</p>
                <b><i class="all-icons">■</i> Esclusiva funzione pro</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <!-- 02 -->
            <tr>
              <td class="itema">
                <p>Il sistema è lento all’avvio e le prestazioni generali sono rallentate</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Rilascio automatico della memoria per rendere il PC fino al 200% più veloce quando il computer rallenta</p>
                <b><i class="all-icons">■</i> Esclusiva funzione pro</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <!-- 03 -->
            <tr>
              <td class="itema">
                <p>Download da Internet lento, rallentamento della navigazione sul web, delle prestazioni di gioco e della fruizione di YouTube</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Ottimizza le impostazioni del browser per accelerare la connessione a Internet del 300% in più</p>
                <b><i class="all-icons">■</i> Esclusiva funzione pro</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <!-- 04 -->
            <tr>
              <td class="itema">
                <p>Crash di sistema improvvisi e blocco del PC</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Pulisce e ripara i registri per incrementare la stabilità e sicurezza del sistema</p>
                <b><i class="all-icons">■</i> Esclusiva funzione pro</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <!-- 05 -->
            <tr>
              <td class="itema">
                <p>Le pubblicità di cose che hai cercato online ti perseguitano</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Blocco automatico delle pubblicità e pulizia delle tracce online per evitare i tracciamenti maligni di hacker</p>
                <b><i class="all-icons">■</i> Esclusiva funzione pro</b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Pre-ordina Subito Advanced SystemCare 12 PRO a <b>€0!</b></h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=it-asc12preorder&ref=it_asc12preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorder-it');"
           data-text="Pre-ordina Ora">
          <span>Pre-ordina Ora</span>
        </a>
        <ul class="price">
          <li><span class="surplusGift viewNum">78</span> persone stanno guardando, <b class="reduceGift"><span class="packsNum">**</span></b> posti rimasti!</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <!-- HTML.it -->
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/html-it.png')?>" alt="HTML.it"></dt>
            <dd>
              <h2>Recensioni dei media</h2>
              <p>
                "Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."
              </p>
              <cite>HTML</cite>
            </dd>
          </dl>
          <!-- Bruce Ramsay -->
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>
                "Ho cominciato a usare la versione gratuita e in fine, ho acquistato la versione completa. Funziona bene per mantenere il mio computer pulito e senza nessun “problema” per tanti anni e non mi ha deluso mai finora. Ho contattato il team di supporto di Advanced SystemCare di recente e mi hanno risposto entro un giorno o due con tutto quello che dovevo sapere. Nel mio parere sia importante il supporto per mantenere i clienti rimanere e ASC ha vinto sia in prodotti che in supporto."
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <!-- Hank Ewert -->
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>
                "Come la maggior parte degli utenti, non sono un esperto di computer. Non so quanti programmi che ho provato nel corso degli anni, tutti reclamano di essere il migliore, ma mai avvicinarsi alla protezione di Advanced SystemCare Pro che sto usando adesso. Dopo avere acquistato questo programma impressionante, non ho mai chiamato un tecnico per aiuto più, nemmeno una sola volta. Ha superato le mie aspettative, mantiene sempre aggiornato, e la grafica è molto fresca! Grazie mille a tutti voi per rendere la mia vita molto più facile e veloce."
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <!-- Loretta Harnarine -->
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>
                "Questo programma è il migliore che ho mai provato e usato. Ora, il mio PC funziona molto meglio e più veloce con il Advanced SystemCare. Ha pulito i file indesiderati e duplicati e le cartelle vuote, mi ha aiutato a distruggere i file e ha pulito e deframmentato i registri e tanti file sul mio PC. Ti raccomando di acquistare questo programma, non è costoso e cosa che farà per il tuo PC sarà totalmente sorprendente."
              </p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <!-- Charles R. Widick -->
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <h4>"My choice is still overwhelmingly Advanced SystemCare Pro"</h4>
              <p>
                "Come un tecnico in riparazione di computer, ho trovato che la maggiore parte di problemi possono essere risolti con la scansione e riparazione di Advanced SystemCare Free. Di solito, dopo aver finita una riparazione, consiglio al cliente di acquistare la versione Pro di questo prodotto. Chi ha bisogno di un tecnico avendo il potente Advanced SystemCare che cura il tuo sistema 24-7? Questo è il miglior prodotto che ogni utente privato vale a comprare e provare. Grazie per aver reso il mio lavoro più facile..”
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Premi Mondiali</h2>
        <p>
          Raccomandato e affidato dai media in tutto il mondo
        </p>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <!-- payment start -->
    <div class="payment wrapper clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/moeny-back.png" alt=""></dt>
        <dd><strong>Garanzia di Soddisfazione</strong> Garantiamo il rimborso entro <br> 60 giorni dalla data <br> d’acquisto.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/bottom-verified.png" alt=""></dt>
        <dd><strong>Pagamento Assicurato</strong> IObit offre i metodi di pagamento <br> sicuri per la transazione.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
        <dd><strong>Attivazione Veloce</strong>Dopo avere completato il tuo acquisto, <br> riceverai il codice di licenza in pochi <br> minuti tramite la mail</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
        <dd><strong>Servizio di Supporto</strong> Il nostro supporto tecnico gratuito <br> è disponibile tutto il giorno, <br> 24 ore su 24.</dd>
      </dl>
    </div>
    <!-- payment end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dd>
          *Al termine del periodo di prova gratuito di 30 giorni, ti saranno addebitati €17.99 in automatico dalla tua carta di credito o conto PayPal.<br>
          Lo sconto del 65% sul prezzo originale di €49.99 è un bonus solo per i pre-ordini!
        </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i Diritti Riservati</p>
    </div>
    <!-- footer end -->

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt=""/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum">78</span> persone stanno guardando, <b class="reduceGift"><span class="packsNum">**</span></b> posti rimasti!
            </li>
            <li id="floatdown" class="countdown">Scade tra: <b>05</b>M: <b>00</b>S: <b>000</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <a class="buybtn fr" 
           href="https://www.iobit.com/buy.php?product=it-asc12preorder&ref=it_asc12preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorder-it');"
           data-text="Pre-ordina Ora">
          <span>Pre-ordina Ora</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->
  </div>


  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.min.js')?>"></script>

</body>
</html>