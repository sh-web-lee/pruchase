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
if(in_array($_GET['pop'],array('x_db','xr_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Grande Offerta! sconti fino al 88% su Driver Booster PRO – Offerta natale 2018 di IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>GRANDE OFFERTA DI NATALE!</h1>
      <p class="best">Sconto più basso in assoluto – SOLO una volta all’anno!</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Driver Booster 6 PRO"/>
          <a class="hint" id="hint" href="javascript: void(0)" target="_blank"></a>
        </div>
        <div class="right fr">
          <h2>Driver Booster 6 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora! Affrettati!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Scade tra <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>Ms</p>
            </div>
            <p><strong>19<big>,</big></strong> <span>99 <del>€164,78</del></span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-db63pcsdpfamc1999&ref=it_db63pcsdpfamc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811xr-it')">
              APPROFITTANE ORA
            </a>
            <p class="year">Un abbonamento annuale per 3 PC</p>
            <!-- money-back -->
            <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
          </div>
        </div>
      </div>
    </div>

    <!-- snow -->
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
      <h2>Aggiorna i driver mancanti, obsoleti e difettosi con un solo clic!</h2>
      <p class="over">
        Più di 150,000,000 di utenti mondiali hanno scelto Driver Booster Pro come il loro software ideale per aggiornare i driver<br>
        in modo più facile e ottimizzare al massimo le prestazioni di gioco.
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt="Driver Booster 6 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Aggiorna oltre 3,000,000 di driver -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Aggiorna oltre 3,000,000 di driver</h3>
              <p>
                Verifica più di 3,000,000 di driver in modo automatico e<br>
                ti consiglia quelli giusti per ridurre i crash del computer<br>
                e migliorare la stabilità del sistema.
              </p>
              <p><b>20% di driver in più rispetto alla versione gratuita.</b></p>
            </dd>
          </dl>
          <!-- Migliore prestazione di gioco  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Migliore prestazione di gioco</h3>
              <p>
                Rileva automaticamente i driver di gioco e i componenti<br>
                di gioco per far funzionare i giochi in modo più fluido<br>
                e ne  incrementa la velocità fino al 39% in più.
              </p>
              <p><b>*PRO Esclusivo</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Download di driver più veloce -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Download di driver più veloce</h3>
              <p>
                Scarica i driver in anticipo per risparmiare il tempo<br>
                d'aggiornamento e ridurre la lentezza del<br>
                computer.
              </p>
              <p><b>*PRO Esclusivo</b></p>
            </dd>
          </dl>
          <!--
            Nessuna scomparsa del suono e nessun
            problema di connessione a Internet
          -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Nessuna scomparsa del suono e nessun<br>
                problema di connessione a Internet </h3>
              <p>
                Risolve i problemi inerenti la scomparsa del suono e i<br>
                conflitti con la tua stampante, lo schermo, l'Internet,<br>
                il mouse e altri dispositivi esterni.
              </p>
              <p><b>*PRO Esclusivo</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifts -->
  <div class="gifts wrapper" id="gifts">
      <h2>Regali Gratis Esclusivi per il Natale 2018!</h2>
      <div class="gift-list clearfix">
        <!-- sd -->
        <dl class="sd">
          <dt>
            <span></span>
            <strong>Smart Defrag 6 PRO</strong>
          </dt>
          <dd><del>€29,99</del>  <b>€<span>0</span></b></dd>
          <dd><p>Offre la migliore deframmentazione del <br> disco e accelera al massimo l'hard driver!</p></dd>
        </dl>
        <!-- pf -->
        <dl class="pf">
          <dt>
            <span></span>
            <strong>Protected Folder </strong>
          </dt>
          <dd><del>€39,95</del>  <b>€<span>0</span></b></dd>
          <dd><p>Il programma più affidabile per proteggere <br> i tuoi file dagli attacchi maligni e assicurare <br> la tua privacy al massimo!</p></dd>
        </dl>
        <!-- amc -->
        <dl class="amc">
          <dt>
            <span></span>
            <strong>Advanced MobileCare PRO</strong>
          </dt>
          <dd><del>€19,99</del>  <b>€<span>0</span></b></dd>
          <dd><p>Accelera e protegge il tuo dispositivo <br> mobile in tempo reale e non dovrai più <br> preoccuparti delle frodi.
            </p></dd>
        </dl>
      </div>
  </div>
  <!-- end gifts -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Con soli €0,02 al giorno ottieni un PC più stabile e un'esperienza di gioco più fluida!</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Driver Booster 6 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> stanno guardando, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pezzi rimasti ora! Affrettati!
          </p>
        </div>
        <p class="padding-left108"><strong>19<big>,</big></strong> <span>99 <del>€164,78</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db63pcsdpfamc1999&ref=it_db63pcsdpfamc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811xr-it')">
          APPROFITTANE ORA
        </a>
        <p class="year">Un abbonamento annuale per 3 PC</p>
        <!-- money-back -->
        <img class="moneyback" src="<?php echo $pResUrl;?>images/moneyback.png" alt="">
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Ecco i privilegi di cui puoi godere con la versione Pro:</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">Driver Booster <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>Driver Booster <br> <b>PRO</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema">2,500,000+</td>
          <td class="itemb">Database di driver</td>
          <td class="itemc">3,000,000+</td>
        </tr>
        <tr>
          <td class="itema">Limitata</td>
          <td class="itemb">Velocità di download di driver</td>
          <td class="itemc">Non Limitata</td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Aggiornamento automatico dei driver obsoleti</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Backup automatico di driver per il ripristino sicuro</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Riparazione degli errori di driver</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Controllo dei componenti di gioco</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Aggiornamento prioritario dei driver di Game Ready</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Aggiornamento automatico alla versione più recente</td>
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
      <h2>Ottieni lo sconto esclusivo dell’88% per mantenere tutti i driver aggiornati con un solo clic</h2>
      <div class="price">
        <p><strong>19<big>,</big></strong> <span>99 <del>€164,78</del></span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db63pcsdpfamc1999&ref=it_db63pcsdpfamc1999purchase1811xr<?php echo $refStr;?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811xr-it')">
          APPROFITTANE ORA
        </a>
        <p id="footdown" class="countdown">Affrettati! <b>05</b>Min: <b>00</b>Sec: <b class="last">000</b>Ms</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <!-- 01 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/PCMAG-editchoice.png')?>" alt="PC Magazine"></dt>
          <dd>
            <h2>Recensioni dei media</h2>
            <p>"IObit fornisce varie utilità tra cui Driver Booster PRO, il quale ti aiuta ad aggiornare i driver in automatico, è il migliore! La funzionalità di base di Driver Booster PRO è diventata ancora più attraente grazie all'inserimento di più licenze ad un prezzo molto economico, senza contare che l'interfaccia personalizzabile consente di visualizzare informazioni specifiche relative agli hardware. I competitor come Ashampoo Driver Updater e SlimWare Utilities DriverUpdate offrono caratteristiche interessanti, ma IObit Driver Booster PRO è il primo nel settore."</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <!-- 02 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/giardiniblog.png')?>" alt="GiardiniBlog"></dt>
          <dd>
            <h2>Recensioni dei media</h2>
            <p>Tutte e due le versioni ti permettono di aggiornare i driver in automatico, ma con la versione a pagamento otterrai un database molto più grande (ottimo per aggiornare driver rari e obsoleti), una velocità di download maggiore (nella versione free è limitata a 100 KB/s) il backup automatico dei driver aggiornati (nella versione free crea solo punti di ripristino in automatico) e il supporto tecnico 24 ore su 24, 7 giorni su 7.</p>
            <cite>GiardiniBlog</cite>
          </dd>
        </dl>
        <!-- 03 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Wayne-Bowler.png')?>" alt="Wayne Bowler"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"Uno dei migliori programmi per l'aggiornamento driver esistenti. Microsoft mi aveva portato fuori strada, suggerendomi aggiornamenti che non avrebbero funzionato sul mio PC. Invece, questo programma sapeva quali erano gli aggiornamenti di cui avevo bisogno e che non avrebbero causato conflitti. Ha funzionato perfettamente. Facile da usare, intuitivo e informativo. Ora che l'ho scoperto, non lo mollo più... Ottimo lavoro!"</p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
        <!-- 04 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Adam-Backlund.png')?>" alt="Adam Backlund"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"Driver Booster è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer e pero non avete tempo per aggiornare manualmente come me, vi raccomando sinceramente il Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile."</p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <!-- 05 -->
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/Myo-Thuya.png')?>" alt="Myo Thuya"></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>"Con Driver Booster, posso facilmente scoprire quali dispositivi di driver sono obsoleti e aggiornarli in modo facile. Inoltre, mi aiuta a riparare gli errori di suono, di rete, di dispositivi, ecc...Non ci credevo prima dell’uso, ma dopo averlo provato, mi è piaciuto molto perché il mio PC è stato più stabile veloce e più sicuro di 8 mesi fa. Grazie, IObit."</p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Riconoscimenti e Recensioni</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Provalo senza nessun rischio con la nostra garanzia di<br>
              rimborso di 60 giorni</h4>
            <p>Garantiamo la tua soddisfazione entro 60 giorni dopo aver<br>
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
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit.Tutti i diritti riservati</p>
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
  var _href = "https://www.iobit.com/buy.php?product=it-db63pcsdpfamc1899&ref=it_db63pcsdpfamc1899purchase1811xr<?php echo $refStr;?>&refs=it_purchase_db";
  var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1811xr-1-it')";
  var viewNum = "<?php echo $viewNum;?>";
</script>

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>