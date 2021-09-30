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
    $packsNum=48;
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
if(in_array($_GET['pop'],array('xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grande Offerta! Sconti fino al 60% su Advanced SystemCare PRO – Offerta natale 2018 di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<!--  <link href="https://fonts.googleapis.com/css?family=Roboto:400,500,700" rel="stylesheet">-->
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
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
          <span class="ghost"><span class="reduce"></span></span>
        </div>
        <div class="right fr">
          <h2>Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora! Affrettati!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Affrettati! Scade tra <b>05</b>Min:<b>00</b>Sec:<b class="last">00</b>Ms</p>
            </div>
            <p><strong>19<big>,</big></strong> <span>99 <del>€49,99</del></span></p>
<!--            <p class="prz"><strong>€19<big>,99</big></strong>   <span><del>€49,99</del></span></p>-->
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-asc123pc1999&ref=it_asc123pcdbpasc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'dbpascpurchase1811xr-it')">
              Approfittane Ora!
            </a>
            <p class="year">Un abbonamento annuale per 3 PC</p>
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
      <p class="over">
        Più di 35,000,000 utenti mondiali hanno scelto Advanced SystemCare Pro per ottimizzare il loro vecchio PC e farlo funzionare come nuovo.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Advanced SystemCare 12 Pro"/>
      <div class="clearfix">
        <dl class="clearfix fl">
          <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
          <dd>
            <h3>Privacy Sicura <b class="sign">Nuovo</b></h3>
            <p>Elimina le tracce della privacy per proteggerti contro il tracciamento, e mantiene i tuoi dati sensibili al sicuro da qualsiasi tentativo segreto di intrusione.</p>
          </dd>
        </dl>
        <dl class="clearfix fr">
          <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
          <dd>
            <h3>200%* più veloce <b>Rafforzato </b></h3>
            <p>Riduce la lentezza di sistema e velocizza il PC del 200% in più.</p>
          </dd>
        </dl>
        <div class="clearfix"></div>
        <dl class="clearfix fr">
          <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
          <dd>
            <h3>Pulizia più profonda <b>Rafforzato </b></h3>
            <p>Rilascia automaticamente la RAM per una migliore prestazione del PC e ripara i problemi dei registri per un sistema più stabile.</p>
          </dd>
        </dl>
        <dl class="clearfix fl">
          <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
          <dd>
            <h3>300%* più fluido <b>Rafforzato </b></h3>
            <p>Accelera la velocità di download, di gioco, di navigazione online e su YouTube fino al 300% in più.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- together start -->
  <div class="together">
    <div class="wrapper">
      <h2>
        Insieme a Driver Booster Pro, massimizza l’esperienza di gioco e <br> la prestazione del PC!
      </h2>
      <div class="panel clearfix">
        <div class="asc-box fl clearfix on">
          <div class="box fl long">
            <h3>MIGLIORE ESPERIENZA DI GIOCO<i></i></h3>
            <dl>
              <dt><strong>Gioco più veloce</strong></dt>
              <dd>
                Pulisce automaticamente la RAM e blocca i processi inutili.
                <span>*Advanced SystemCare PRO Esclusivo</span>
              </dd>
            </dl>
            <dl>
              <dt><strong>Gioco più fluido</strong></dt>
              <dd>
                I driver di Game Ready  e i componenti di gioco sono disponibili per migliorare l'esperienza di gioco.
                <span>*Driver Booster PRO Esclusivo</span>
              </dd>
            </dl>
          </div>
          <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
        </div>
        <div class="db-box fl clearfix on">
          <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
          <div class="box fl">
            <h3><i></i> LA MIGLIORE PRESTAZIONE DEL PC </h3>
            <dl>
              <dt><strong>PC più veloce e più pulito</strong></dt>
              <dd>Pulisce automaticamente i file spazzatura e ottimizza i registri per accelerare la velocità di funzionamento.
                <span>*Advanced SystemCare PRO Esclusivo</span>
              </dd>
            </dl>
            <dl>
              <dt><strong>PC più Stabile</strong></dt>
              <dd>Aggiorna i driver mancanti/errati/obsoleti/rari.
                <span>*Driver Booster PRO Esclusivo</span>
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
    <h2>Attiva Advanced SystemCare PRO Ora - Il migliore prezzo di quest'anno!</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora!
          </p>
          <div class="progressbar">
            <span></span>
          </div>
          <p id="bandown" class="countdown">Affrettati! Scade tra <b>05</b>Min:<b>00</b>Sec:<b class="last">00</b>Ms</p>
        </div>
<!--        <p class="prz"><strong>€19<big>,99</big></strong> <span><del>€49,99</del></span></p>-->
        <p><strong>19<big>,</big></strong> <span>99 <del>€49,99</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc123pc1999&ref=it_asc123pcdbpasc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'dbpascpurchase1811xr-it')">
          Approfittane Ora!
        </a>
        <p class="year">Un abbonamento annuale per 3 PC</p>
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
          <td class="itemb">Pulizia, riparazione e ottimizzazione di base del sistema</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Blocca gli accessi non autorizzati ai tuoi file privati</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Previene spyware e malware in tempo reale</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Riduce e ripara i crash e gli errori del sistema</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Velocizza il computer del 200% in più</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Incrementa la velocità di Internet del 300% in più</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Mantiene i programmi essenziali aggiornati in modo automatico</td>
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
      <h3>NON FARTELO SCAPPARE</h3>
      <h2>Ottieni lo sconto esclusivo del <b>60%</b> per rendere il tuo PC più veloce, più pulito e più sicuro!</h2>
      <div class="price">
<!--        <p  class="prz"><strong>€19<big>,99</big></strong> <span><del>€49,99 </del></span></p>-->
        <p><strong>19<big>,</big></strong> <span>99 <del>€49,99</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc123pc1999&ref=it_asc123pcdbpasc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'dbpascpurchase1811xr-it')">
          Approfittane Ora!
        </a>
        <p id="footdown" class="countdown">Affrettati! Scade tra <b>05</b>Min:<b>00</b>Sec:<b class="last">000</b>Ms</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Riconoscimenti e Recensioni</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review">
    <div class="wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/HTML.it.png')?>" alt="HTML"/></dt>
            <dd>
              <h2>Recensioni dei media</h2>
              <p>"Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."</p>
              <cite>HTML</cite></dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"/></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>"Ho cominciato a usare la versione gratuita e in fine, ho acquistato la versione completa. Funziona bene per mantenere il mio computer pulito e senza nessun “problema” per tanti anni e non mi ha deluso mai finora. Ho contattato il team di supporto di Advanced SystemCare di recente e mi hanno risposto entro un giorno o due con tutto quello che dovevo sapere. Nel mio parere sia importante il supporto per mantenere i clienti rimanere e ASC ha vinto sia in prodotti che in supporto."</p>
              <cite>Bruce Ramsay</cite></dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank-Ewert"/></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>"Come la maggior parte degli utenti, non sono un esperto di computer. Non so quanti programmi che ho provato nel corso degli anni, tutti reclamano di essere il migliore, ma mai avvicinarsi alla protezione di Advanced SystemCare Pro che sto usando adesso. Dopo avere acquistato questo programma impressionante, non ho mai chiamato un tecnico per aiuto più, nemmeno una sola volta. Ha superato le mie aspettative, mantiene sempre aggiornato, e la grafica è molto fresca! Grazie mille a tutti voi per rendere la mia vita molto più facile e veloce."</p>
              <cite>Hank Ewert</cite></dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles-R-Widick"/></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>"Come un tecnico in riparazione di computer, ho trovato che la maggiore parte di problemi possono essere risolti con la scansione e riparazione di Advanced SystemCare Free. Di solito, dopo aver finita una riparazione, consiglio al cliente di acquistare la versione Pro di questo prodotto. Chi ha bisogno di un tecnico avendo il potente Advanced SystemCare che cura il tuo sistema 24-7? Questo è il miglior prodotto che ogni utente privato vale a comprare e provare. Grazie per aver reso il mio lavoro più facile..”</p>
              <cite>Charles R. Widick</cite></dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta-Harnarine"/></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>"Questo programma è il migliore che ho mai provato e usato. Ora, il mio PC funziona molto meglio e più veloce con il Advanced SystemCare. Ha pulito i file indesiderati e duplicati e le cartelle vuote, mi ha aiutato a distruggere i file e ha pulito e deframmentato i registri e tanti file sul mio PC. Ti raccomando di acquistare questo programma, non è costoso e cosa che farà per il tuo PC sarà totalmente sorprendente."</p>
              <cite>Loretta Harnarine</cite></dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- review end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Provalo senza nessun rischio con la nostra garanzia di <br>
              rimborso di 60 giorni</h4>
            <p>Garantiamo la tua soddisfazione entro 60 giorni dopo aver <br>
              attivato la versione PRO.</p>
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
  var _href = "https://www.iobit.com/buy.php?product=it-asc123pc2199&ref=it_asc123pcdbpasc2199purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc";
  var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'dbpascpurchase1811xr-2-it')";
  var viewNum = "<?php echo $viewNum;?>";
</script>

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>