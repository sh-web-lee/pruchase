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
  $cName='sdasc'.$date;
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

$viewNum=rand(96,125);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_sdpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Grande Offerta! Sconti fino al 65% su Advanced SystemCare PRO – Offerta natale 2018 di IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
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
        <h1>GRANDE OFFERTA DI NATALE!</h1>
        <p class="best">Sconto più basso in assoluto - SOLO una volta all’anno!</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
          </div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, solo <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti!
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Affrettati! Scade tra <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
              </div>
              <p><strong>17<small>,</small></strong> <span>99 <del> €49,99</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-asc123pc1799&ref=it_asc123pcsdpasc1799purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'sdpascpurchase1811xr-it')">
                 Approfittane Ora!
              </a>
              <p class="year">Abbonamento 1 anno / 3 PC</p>
            </div>
          </div>
        </div>
      </div>
        <span class="snow list01"></span>
        <span class="snow snow-clarity  list02"></span>
        <span class="snow snow-smail list03"></span>
        <span class="round  list04"></span>
        <span class="round round-smail list05"></span>
        <span class="round round-clarity list06"></span>
        <span class="round round-large list07"></span>
        <span class="snow snow-clarity  list15"></span>
        <span class="snow snow-smail  list16"></span>
        <span class="snow snow-clarity  list17"></span>
        <span class="snow snow-smail  list18"></span>
        <span class="round round-clarity list23"></span>
        <span class="round round-clarity list24"></span>

        <span class="round round-clarity list08"></span>
        <span class="round round-smail list09"></span>
        <span class="round round-large  list10"></span>
        <span class="round list11"></span>
        <span class="snow snow-clarity list12"></span>
        <span class="snow snow-smail list13"></span>
        <span class="snow list14"></span>
        <span class="snow snow-clarity  list19"></span>
        <span class="snow snow-smail  list20"></span>
        <span class="snow snow-clarity  list21"></span>
        <span class="snow snow-smail  list22"></span>
        <span class="round round-clarity list25"></span>
        <span class="round round-clarity list26"></span>
    </div>
    <!-- banner end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper">
        <h2>Scopri i vantaggi che puoi ottenere con Advanced SystemCare 12 PRO:</h2>
        <p class="over">Più di 35,000,000 utenti mondiali hanno scelto Advanced SystemCare PRO per <br> ottimizzare il loro vecchio PC e farlo funzionare come nuovo.</p>  
        <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Privacy Sicura<b class="sign"> Nuovo</b></h3>
                <p>Cancella le tracce di privacy per prevenire il tracciamento maligno e mantiene i tuoi dati sensibili al sicuro da qualsiasi tentativo segreto di intrusione.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>300%* Internet più Rapido <b>Rafforzato</b></h3>
                <p>Accelera la velocità di download, di gioco, di navigazione online e su YouTube fino al 300% in più.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>200%* PC più Veloce<b> Rafforzato </b></h3>
                <p>
                 Riduce i crash/rallentamenti di sistema e velocizza il PC del 200% in più.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Pulizia più Profonda  <b> Rafforzato</b></h3>
                <p>Rilascia automaticamente la RAM per una migliore prestazione del PC e ripara i problemi dei registri per un sistema più stabile.</p>
              </dd>
            </dl>
          </div>
        </div>     
      </div>
    </div>
    <!-- feature end -->
    <!-- together start -->
    <div class="together">
      <div class="wrapper">
        <h2>
          Insieme a Smart Defrag PRO, <br> massimizza la prestazione dell’hard drive e accelera il PC lento!
        </h2>
        <div class="panel clearfix">
          <div class="asc-box fl clearfix">
            <div class="box fl">
              <h3>Massima Performance dell’Hard Drive <i></i></h3>
              <dl>
                <dt><strong>Fino al 200%* più Veloce</strong></dt>
                <dd>
                  Accelera l’accesso ai file & il lancio del gioco in modo efficiente. 
                  <span>*Smart Defrag PRO Esclusivo!</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Performance del Disco Migliorata </strong></dt>
                <dd class="message">
                  Performance del disco più stabile e veloce con la Pulizia Automatica dei file spazzatura e la pulizia più profonda del registro.
                  <span>*Advanced SystemCare PRO Esclusivo!</span>
                </dd>
              </dl>
            </div>
            <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
          </div>
          <div class="db-box fl clearfix">
            <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
            <div class="box fl">
              <h3><i></i> Velocità del PC potenziata</h3>
              <dl>
                <dt><strong>Fino al 200%* più Veloce </strong></dt>
                <dd>Riduce i crash/rallentamenti di sistema per velocizzare il PC.
                  <span>*Advanced SystemCare PRO Esclusivo!</span>
                </dd>
              </dl>
              <dl>
                <dt><strong>Avvio del PC più Rapido</strong></dt>
                <dd>Goditi avvio più rapido del PC e prestazioni al top con  la Deframmentazione Programmata.
                  <span>*Smart Defrag PRO Esclusivo!</span>
                </dd>
              </dl>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- together end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Ultima Opportunità per il Grande Risparmio del 2018!</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  stanno guardando, solo <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em>  pezzi rimasti!
            </p>
          </div>
          <p><strong>17<small>,</small></strong> <span>99<del>€49,99</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-asc123pc1799&ref=it_asc123pcsdpasc1799purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'sdpascpurchase1811xr-it')">
            Approfittane Ora
          </a>
          <p class="year">Offerta esclusiva solo per gli utenti stimati di Smart Defrag!</p>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Confronto di funzionalità tra edizione Free e PRO</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Advanced SystemCare 12 <br>FREE</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>Advanced SystemCare 12 <b>PRO</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema"><i class="all-icons free">√</i></td>
              <td class="itemb">Pulizia, riparazione e ottimizzazione di base del sistema </td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Blocca l’accesso non autorizzato ai tuoi file privati</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Previene attacchi spyware e malware in tempo reale</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Riduce e ripara i crash e gli errori di sistema </td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Accelera il computer fino al 200% in più</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Accelera la velocità di Internet fino al 300% in più</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Aggiornamento automatico dei programmi essenziali </td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Rimozione automatica delle tracce di privacy per una navigazione sicura</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Aggiornamento automatico all’ultima versione</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"></td>
              <td class="itemb"></td>
              <td class="itemc last"></td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper">
        <h3>NON FARTELO SCAPPARE!</h3>
        <h2>Ottieni lo  <b>sconto esclusivo del 65%</b> per rendere il tuo PC più veloce, più pulito e più sicuro!</h2>
        <div class="price">
          <p><strong>17<small>,</small></strong> <span>99<del> €49,99</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-asc123pc1799&ref=it_asc123pcsdpasc1799purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'sdpascpurchase1811xr-it')">
            Approfittane Ora!
          </a>
          <p id="footdown" class="countdown">Affrettati! Scade tra  <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Scelto dagli esperti. Preferito dagli utenti!</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
    <!-- review -->
    <div class="review wrapper">
      <div class="content">
        <dl class="active">
          <dt><h3>Recensioni degli utenti</h3></dt>
          <dd>
            "Ho cominciato a usare la versione gratuita e in fine, ho acquistato la versione completa. Funziona bene per mantenere il mio computer pulito e senza nessun “problema” per tanti anni e non mi ha deluso mai finora. Ho contattato il team di supporto di Advanced SystemCare di recente e mi hanno risposto entro un giorno o due con tutto quello che dovevo sapere. Nel mio parere sia importante il supporto per mantenere i clienti rimanere e ASC ha vinto sia in prodotti che in supporto."
          </dd>
        </dl>
        <dl>
          <dt><h3>Recensioni degli utenti</h3></dt>
          <dd>
            "Come la maggior parte degli utenti, non sono un esperto di computer. Non so quanti programmi che ho provato nel corso degli anni, tutti reclamano di essere il migliore, ma mai avvicinarsi alla protezione di Advanced SystemCare Pro che sto usando adesso. Dopo avere acquistato questo programma impressionante, non ho mai chiamato un tecnico per aiuto più, nemmeno una sola volta. Ha superato le mie aspettative, mantiene sempre aggiornato, e la grafica è molto fresca! Grazie mille a tutti voi per rendere la mia vita molto più facile e veloce."
          </dd>
        </dl>
        <dl>
          <dt><h3>Recensioni dei media</h3></dt>
          <dd>
            "Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."
          </dd>
        </dl>
        <dl>
          <dt><h3>Recensioni degli utenti</h3></dt>
          <dd>
            "Questo programma è il migliore che ho mai provato e usato. Ora, il mio PC funziona molto meglio e più veloce con il Advanced SystemCare. Ha pulito i file indesiderati e duplicati e le cartelle vuote, mi ha aiutato a distruggere i file e ha pulito e deframmentato i registri e tanti file sul mio PC. Ti raccomando di acquistare questo programma, non è costoso e cosa che farà per il tuo PC sarà totalmente sorprendente."
          </dd>
        </dl>
        <dl>
          <dt><h3>Recensioni degli utenti</h3></dt>
          <dd>
            "Come un tecnico in riparazione di computer, ho trovato che la maggiore parte di problemi possono essere risolti con la scansione e riparazione di Advanced SystemCare Free. Di solito, dopo aver finita una riparazione, consiglio al cliente di acquistare la versione Pro di questo prodotto. Chi ha bisogno di un tecnico avendo il potente Advanced SystemCare che cura il tuo sistema 24-7? Questo è il miglior prodotto che ogni utente privato vale a comprare e provare. Grazie per aver reso il mio lavoro più facile..”
          </dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active">
          <img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="">
          Bruce Ramsay
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="">
          Hank Ewert
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/html.png')?>" alt="HTML">
          HTML
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="">
          Loretta Harnarine
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick">
          Charles R. Widickn
        </li>
      </ul>
    </div>
    <!-- end review  -->
    
    <div class="bottom"> 
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl class="fl">
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Provalo senza nessun rischio con la nostra garanzia di rimborso di 60 giorni</h4>
              <p>Garantiamo la tua soddisfazione entro 60 giorni dopo aver attivato la versione PRO.</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Accettiamo</h4>
            </dd>
            <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dt>Note:</dt>
            <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
            <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- backtotop start -->
    <div id="backtotop" class="backtotop">top</div>
    <!-- backtotop end -->

  </div>
  <script>
    var refStr = '<?php echo $refStr;?>';
    var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=it-asc123pc1999&ref=it_asc123pcsdpasc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc&tw=-8";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'sdpascpurchase1811xr-2-it')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>