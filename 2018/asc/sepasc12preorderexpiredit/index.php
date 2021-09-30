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

$params=json_decode(base64_decode($_GET['data']));
$reg=empty($params->reg)?1113:$params->reg;
$junk=round((empty($params->junk)?9762:(($params->junk)/1024)),2);
$startUp=empty($params->startup)?19:$params->startup;
$internet=empty($params->internet)?21:$params->internet;
$privacy=empty($params->privacy)?2014:$params->privacy;
$ad=empty($params->ad)?0:$params->ad;

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Ritorna all'ultimo Advanced SystemCare 12 PRO</title>
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
        <h1>Bentornato! Partecipa alla pre-vendita globale di €0</h1>
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
                 href="https://www.iobit.com/buy.php?product=it-asc12preorder&ref=it_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-it');"
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

    <!-- intro-part01 start -->
    <div class="intro intro-part01">
      <div class="wrapper">
        <h3>Ricapitoliamo:</h3>
        <h2>Come va il tuo computer con Advanced SystemCare 11 PRO?</h2>
        <div class="event">
          <!-- bight -->
          <div class="bight"></div>
          <!-- optimized for faster PC -->
          <dl class="optimized clearfix">
            <dd class="fr">
              <p>
                <strong class="startupNum"><?php echo $startUp;?></strong> elementi d’avvio e <strong class="browserNum"><?php echo $internet;?></strong> <br>impostazioni del browser sono stati <br>ottimizzati per un PC più veloce.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon01.png" alt=""></dt>
          </dl>
          <!-- during online surfing  -->
          <dl class="online clearfix">
            <dd>
              <p>
                <strong class="personalNum"><?php echo $privacy;?></strong> tracce personali e <strong class="popupNum"><?php echo $ad;?></strong> pop up <br>pubblicitari  sono stati rimossi <br>durante le navigazioni online.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon02.png" alt=""></dt>
          </dl>
          <!-- to free up disk  -->
          <dl class="disk">
            <dd>
              <p>
                <strong class="bytesNum"><?php echo $junk;?></strong> MB file spazzatura e<br>
                <strong class="regNum"><?php echo $reg;?></strong> registri sono stati cancellati <br>per liberare lo spazio sul disco.
              </P>
              <span></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon03.png" alt=""></dt>
          </dl>
          <!-- Better PC Performance -->
          <p class="better">La migliore <br>prestazione del PC</p>
        </div>
      </div>
    </div>
    <!-- intro-part01 end -->

    <!-- intro-part02 start -->
    <div class="intro intro-part02">
      <div class="wrapper clearfix">
        <h3>Scopriamo ora:</h3>
        <h2>1 Le funzionalità esclusive del nuovo Advanced SystemCare 12 PRO</h2>
        <img class="intro-pc fl" src="<?php echo $pResUrl;?>images/intro-pc.jpg" alt="">
        <div class="right-message fr">
          <!-- Privacy Shield -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon04.png" alt=""></dt>
            <dd>
              <h4>Scudo della Privacy <span>esclusivo</span></h4>
              <p>I dati sensibili rimangono protetti dai programmi inaffidabili.</p>
            </dd>
          </dl>
          <!-- Digital Fingerprint Protection -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon05.png" alt=""></dt>
            <dd>
              <h4>Protezione dell’Impronta Digitale <span>esclusivo</span></h4>
              <p>Nessun hacker può tracciare e invadere le informazioni della tua privacy.</p>
            </dd>
          </dl>
          <!-- Unfinished Downloads File Cleaning -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon06.png" alt=""></dt>
            <dd>
              <h4>Pulizia dei File di Download Incompleti  <span>esclusivo</span></h4>
              <p>Pulisce immediatamente i file scaricati per liberare più spazio sul disco.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- intro-part02 end -->

    <!-- intro-part03 start -->
    <div class="intro intro-part03">
      <div class="wrapper clearfix">
        <h2>
          2 I miglioramenti importanti di cui puoi godere in comparazione con Advanced SystemCare 11 PRO
        </h2>
        <!-- Cleaner -->
        <dl class="cleaner fl">
          <dt>
            <h4>Più Pulito</h4>
            <img src="<?php echo $pResUrl;?>images/intro-cleaner.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/intro-more30.png')?>" alt=""/>
            <p>di spazio libero su disco</p>
          </dd>
        </dl>
        <!-- Faster -->
        <dl class="faster fl">
          <dt>
            <h4>Più Veloce</h4>
            <img src="<?php echo $pResUrl;?>images/intro-faster.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/intro-faster20.png')?>" alt=""/>
            <p>di velocità all'avvio del PC</p>
          </dd>
        </dl>
        <!-- Safer -->
        <dl class="safer fl">
          <dt>
            <h4>Più Sicuro</h4>
            <img src="<?php echo $pResUrl;?>images/intro-safer.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/intro-more40.png')?>" alt=""/>
            <p>di annunci pubblicitari rimossi</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro-part03 end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Con soli <b>€0</b> ritorna a PRO e goditi subito tutte queste incredibili funzionalità!</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=it-asc12preorder&ref=it_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-it');"
           data-text="Pre-ordina Ora">
          <span>Pre-ordina Ora</span>
        </a>
        <ul class="price">
          <li><span class="surplusGift viewNum">78</span> persone stanno guardando, <b class="reduceGift"><span class="packsNum">**</span></b> posti rimasti!</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- intro-part04 start -->
    <div class="intro-part04">
      <div class="wrapper">
        <h3>Senza la versione PRO, <br>rischi di incorrere nei seguenti problemi:</h3>
        <div class="intro-top clearfix">
          <!-- slow computer -->
          <dl class="fl clearfix">
            <dd class="fl">
              <strong>Computer lento</strong> che impiega troppo tempo <br>per rispondere e caricare le pagine Web
            </dd>
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon08.png" alt=""></dt>
          </dl>
          <!-- system freezes or crashes -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon09.png" alt=""></dt>
            <dd class="fl">
              Improvvisi e sporadici <strong>blocchi o <br>arresti</strong> anomali del sistema 
            </dd>
          </dl>
        </div>
        <div class="intro-bottom clearfix">
          <!-- cluttering up -->
          <dl class="fl clearfix">
            <dd class="fl">
              File inutili e irrilevanti che <strong>ingombrano</strong> <br>il tuo disco rigido 
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon10.png" alt=""></dt>
          </dl>
          <!-- annoying ads -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon11.png" alt=""></dt>
            <dd class="fr">
              <strong>Annunci fastidiosi</strong> che si aprono ogni <br>volta che navighi online
            </dd>
          </dl>
        </div>
        <h2>È ora di passare a Advanced SystemCare 12 PRO con <b>€0</b></h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc12preorder&ref=it_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-it');"
           data-text="Pre-Ordina Ora">
          <span>Pre-Ordina Ora</span>
        </a>
        <p class="price">Un Abbonamento annuale per 3 PC</p>
      </div>
    </div>
    <!-- intro-part04 end -->

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
           href="https://www.iobit.com/buy.php?product=it-asc12preorder&ref=it_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-it');"
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
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
   <script>
      var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
      var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-it');";
      var _url = "https://www.iobit.com/buy.php?product=it-asc12preorder1499&ref=it_asc12preorderexpired1499<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_asc";
    </script>
</body>
</html>