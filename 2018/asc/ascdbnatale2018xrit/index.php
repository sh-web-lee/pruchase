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

$viewNum=rand(89,108);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_dbasc','x_ascdb','xr_ascdb'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grande Offerta! Sconti fino al 75% su Advanced SystemCare PRO e Driver Booster PRO – Offerta natale 2018 di IObit</title>
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
      <p class="best">Sconto più basso in assoluto – SOLO una volta all’anno!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>Driver Booster 6 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Affrettati! Scade tra <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms</p>
            </div>
            <p><strong>29<big>,</big></strong> <span>99 <del>€124,84</del> </span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-asc12db63pc2999&ref=it_asc12db63pc2999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase1811xr-it')">
              APPROFITTANE ORA
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
      <h2>Ottimizzazione Raddoppiata di IObit: PC più Fluido e Migliore Esperienza di Gioco</h2>
      <p class="over">Driver Booster 6 PRO insieme al programma di ottimizzazione più avanzata al mondo – Advanced SystemCare 12 PRO, fanno funzionare il tuo vecchio PC come nuovo migliorando prestazioni ed esperienza di gioco.</p>
    </div>
  </div>
  <!-- feature end -->

  <!-- together start -->
  <div class="together">
    <div class="wrapper">
      <div class="panel clearfix">
        <div class="asc-box fl clearfix on">
          <div class="box fl">
            <h3>Advanced SystemCare 12 PRO<i></i></h3>
            <dl>
              <dt><strong>Sistema più stabile </strong></dt>
              <dd>con meno registri inutili accumulati sul tuo disco. </dd>
            </dl>
            <dl>
              <dt><strong>Prestazione di gioco più veloce </strong></dt>
              <dd>bloccando i processi non necessari per liberare più RAM.
              </dd>
            </dl>
            <dl>
              <dt><strong>PC più veloce </strong></dt>
              <dd>con la connessione ad Internet del 300% accelerata e l’avvio del 200% più rapido. </dd>
            </dl>
          </div>
          <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
        </div>
        <div class="db-box fl clearfix on">
          <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
          <div class="box fl">
            <h3><i></i>Driver Booster 6 PRO</h3>
            <dl>
              <dt><strong>Caricamento del gioco più fluido</strong></dt>
              <dd>con i componenti di gioco necessari e aggiornati. </dd>
            </dl>
            <dl>
              <dt><strong>Prestazione del PC migliorata</strong></dt>
              <dd>con oltre 3,000,000 di driver sempre aggiornati.</dd>
            </dl>
            <dl>
              <dt><strong>Migliore esperienza di gioco</strong></dt>
              <dd>con  i driver di Game Ready e i componenti di gioco aggiornati all’ultima versione.</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- together end -->

  <!-- features -->
  <div class="features">
    <div class="wrapper">
      <h2>NON È FINITA QUI! Puoi anche godere delle ulteriori funzionalità avanzate elencate sotto:</h2>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></span>
          <p>Protezione dei dati personali</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></span>
          <p>Protezione delle impronte digitali</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></span>
          <p>Aggiornamento automatico dei driver </p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></span>
          <p>Riparazione degli errori dei dispositivi</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- end features -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Non esitare! Ottieni subito due utilità potenti per il tuo PC e i tuoi giochi! </h2>
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
        <p><strong>29<big>,</big></strong> <span>99<del>€124,84</del> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc12db63pc2999&ref=it_asc12db63pc2999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase1811xr-it')">
          APPROFITTANE ORA
        </a>
        <p class="year">Un abbonamento annuale per 3 PC</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->


  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Raccomandato e premiato dai media mondiali</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div class="review-box">
      <div class="reviews clearfix">
        <h2>Recensioni degli utenti</h2>
        <p>"Uno dei migliori programmi per l'aggiornamento driver esistenti. Microsoft mi aveva portato fuori strada, suggerendomi aggiornamenti che non avrebbero funzionato sul mio PC. Invece, questo programma sapeva quali erano gli aggiornamenti di cui avevo bisogno e che non avrebbero causato conflitti. Ha funzionato perfettamente. Facile da usare, intuitivo e informativo. Ora che l'ho scoperto, non lo mollo più... Ottimo lavoro!"</p>
      </div>
      <div class="reviews clearfix">
        <h2>Recensioni degli utenti</h2>
        <p>"Con Driver Booster, posso facilmente scoprire quali dispositivi di driver sono obsoleti e aggiornarli in modo facile. Inoltre, mi aiuta a riparare gli errori di suono, di rete, di dispositivi, ecc...Non ci credevo prima dell’uso, ma dopo averlo provato, mi è piaciuto molto perché il mio PC è stato più stabile veloce e più sicuro di 8 mesi fa. Grazie, IObit."</p>
      </div>
      <div class="reviews clearfix active">
        <h2>Recensioni dei media</h2>
        <p>"IObit fornisce varie utilità e tra cui Driver Booster PRO, il quale ti aiuta ad aggiornare i driver in automatico, è il migliore! La funzionalità di base semplice di Driver Booster PRO è diventato ancora più attraente grazie all'inserimento di più licenze ad un prezzo molto economico, così come un'interfaccia personalizzabile che fa un buon lavoro di visualizzare informazioni specifiche relativi ai hardware. I concorrenti come Ashampoo Driver Updater e SlimWare Utilities DriverUpdate offrono caratteristiche interessanti, ma IObit Driver Booster PRO conduce nel campo."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Recensioni dei media</h2>
        <p>"Advanced SystemCare Pro si installa con semplicità. Advanced SystemCare Pro strizza l’occhio anche alla sicurezza ed è possibile scaricare come plugin aggiuntivo IObit Malware Fighter con cui proteggere il computer dai malware. Nella Modalità Semplificata sarà il programma a gestire in automatico quasi tutte le funzioni, mentre nella Modalità Esperto avremo la possibilità di configurare molte delle opzioni disponibili."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Recensioni degli utenti</h2>
        <p>"Questo programma è il migliore che ho mai provato e usato. Ora, il mio PC funziona molto meglio e più veloce con il Advanced SystemCare. Ha pulito i file indesiderati e duplicati e le cartelle vuote, mi ha aiutato a distruggere i file e ha pulito e deframmentato i registri e tanti file sul mio PC. Ti raccomando di acquistare questo programma, non è costoso e cosa che farà per il tuo PC sarà totalmente sorprendente."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Recensioni degli utenti</h2>
        <p>"Ho cominciato a usare la versione gratuita e in fine, ho acquistato la versione completa. Funziona bene per mantenere il mio computer pulito e senza nessun “problema” per tanti anni e non mi ha deluso mai finora. Ho contattato il team di supporto di Advanced SystemCare di recente e mi hanno risposto entro un giorno o due con tutto quello che dovevo sapere. Nel mio parere sia importante il supporto per mantenere i clienti rimanere e ASC ha vinto sia in prodotti che in supporto."</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Wayne-Bowler.png" alt="Wayne Bowler"><span></span></div>
        <strong>Wayne Bowler</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Myo-Thuya.png" alt="Myo Thuya"><span></span></div>
        <strong>Myo Thuya</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/PCMAG-editchoice.png" alt="PC Magazine"><span></span></div>
        <strong>PC Magazine</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/html.png" alt="HTML"><span></span></div>
        <strong>HTML</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Loretta-Harnarine.png" alt="Loretta Harnarine"><span></span></div>
        <strong>Loretta Harnarine</strong>
      </li>
      <li class="last">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
        <strong>Bruce Ramsay</strong>
      </li>
    </ul>
  </div>
  <!-- end review  -->

  <!-- bottomcart -->
  <div class="btmcart">
    <div class="wrapper">
      <div class="leftpart">
        <img src="<?php echo getStaticUrl('images/btmpacks.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg">
            <b id="packbox" class="reduceGift packbox">
              <b class="list">
                <strong>0</strong>
                <strong>1</strong>
                <strong>2</strong>
                <strong>3</strong>
                <strong>4</strong>
                <strong>5</strong>
                <strong>6</strong>
                <strong>7</strong>
                <strong>8</strong>
                <strong>9</strong>
              </b>
              <b class="list">
                <strong>0</strong>
                <strong>1</strong>
                <strong>2</strong>
                <strong>3</strong>
                <strong>4</strong>
                <strong>5</strong>
                <strong>6</strong>
                <strong>7</strong>
                <strong>8</strong>
                <strong>9</strong>
              </b>
            </b></em> pezzi rimasti ora!
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Affrettati! Scade tra <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
      </div>
      <div class="price">
        <p><strong>29<big>,</big></strong> <span>99 <del>€124,84</del> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-asc12db63pc2999&ref=it_asc12db63pc2999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase1811xr-it')">
          APPROFITTANE ORA
        </a>
      </div>
    </div>
  </div>
  <!-- end btmcart -->

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
          <dd>1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
          <dd>2*.I dati potrebbero variare in base al sistema o computer.</dd>
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
  var _href = "https://www.iobit.com/buy.php?product=it-asc12db63pc2899&ref=it_asc12db63pc2899purchase1811xr<?php echo $refStr;?>&refs=it_purchase_asc";
  var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase1811xr-1-it')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>