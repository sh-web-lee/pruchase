<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$viewNum=rand(154,196);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itdbnew_p' . $date;
  $c_name_t='itdbnew_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['to'])?'':('-').$_GET['to'];
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>65% di sconto su Driver Booster PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Prompt:400,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h1>SALDI</h1>
        <p>Ottieni il tuo regalo esclusivo per il nuovo lancio!</p>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <div class="top">
            <h2>Trimestrale</h2>
            <p><strong>€<big>6,24</big>/Mese</strong></p>
            <p><span class="sign">NO SCONTO</span></p>
            <a class="buybtn small"
               href="https://www.iobit.com/buy.php?product=it-db83m3pc1872&ref=it_db83mnewlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasenewlaunch3m-it');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Acquista Ora</span>     
            </a>
          </div>
          <div class="price">
            <h3>Dettagli dei prezzi</h3>
            <ul>
              <li><span>3 Mesi</span><span class="right">€18,72</span></li>
              <li><span><b>Totale</b></span><span class="right"><b>€18,72</b></span></li>
              <li class="last"><b class="red">(Risparmi €0)</b></li>
            </ul>
          </div>
        </div>
        <div class="offer right">
          <div class="top">
            <h2>Annuale</h2>
            <p><strong>€<big>1,91</big>/Mese</strong></p>
            <p><span class="sign">65% DI SCONTO + 2 Mesi Gratis</span></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-db814m3pc2399&ref=it_db814mnewlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
               onclick="ga('send', 'event', 'db14mbuy', 'buy', 'dbpurchasenewlaunch14m-it');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Acquista Ora</span>  
            </a>
          </div>
          <div class="price">
            <h3>Dettagli dei prezzi</h3>
            <ul>
              <li><span>12 Mesi</span><span class="right">€74,85</span></li>
              <li><span>Extra 2 mesi</span><span class="right"><del>€12,48</del></span></li>
              <li><span>65% di sconto</span><span class="right">-€50,86</span></li>
              <li><span><b>Totale</b></span><span class="right"><b>€23,99</b></span></li>
              <li class="last"><b class="red">(Risparmi €63,34)</b></li>
            </ul>
          </div>
          <div class="numbox">
            <h3>
              Affrettati, solo
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
                <b class="nwrap"><b class="numlist">5</b></b>
              </span>
              pezzi rimasti
            </h3>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature first">
    <h2 class="wrapper">Nuove funzioni e miglioramenti di<br> Driver Booster 8 PRO</h2>
    <div class="wrapper clearfix">
      <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/device.png')?>" alt=""/></div>
      <div class="content fr">
        <h3>Aggiornamento driver con un clic</h3>
        <ul>
          <li class="twice">
            <i>●</i>
            <span>Aggiorna oltre 4.500.000 driver con un clic per ridurre gli arresti anomali e il blocco del sistema.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Maggiore velocità di scansione di driver obsoleti con il nuovo motore di scansione.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Ripara più problemi di audio e di connessione Internet con strumenti potenti.</span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt>
              <img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/>
              <span class="_num">3.500.000+</span>
              <span class="_num red">4.500.000+</span>
            </dt>
            <dd>
              <strong>1 MILIONE</strong>
              <p>di driver extra</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon02.png')?>" alt=""/></dt>
            <dd>
              <strong>2X</strong>
              <p>più veloce la scansione</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <div class="feature second">
    <div class="wrapper clearfix">
      <div class="content fl">
        <h3>Migliore esperienza di gioco </h3>
        <ul>
          <li class="twice">
            <i>●</i>
            <span>Game Boost potenziato per accelerare ulteriomente la velocità di gioco.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Modalità Silenziosa disattiva automaticamente tutte le notifiche di Driver Booster per interrompere il disturbo.</span>
          </li>
          <li class="twice">
            <i>●</i>
            <span>Mantiene sempre aggiornati i componenti di gioco per migliorare l’esperienza di gioco e supportare nuove.</span>
          </li>
        </ul>
        <div class="clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/arrow-icon01.png')?>" alt=""/></dt>
            <dd>
              <strong>15%</strong>
              <p>più rapido il game boost</p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="scan01" src="<?php echo getStaticUrl('images/scan-01.png')?>" alt=""/>
        <img class="scan02" src="<?php echo getStaticUrl('images/scan-02.png')?>" alt=""/>
        <img class="scan03" src="<?php echo getStaticUrl('images/scan-03.png')?>" alt=""/> 
      </div>
    </div>
  </div>
  <div class="feature third wrapper">
    <p>
      <span><i></i> <b>Driver Booster 8 Free</b></span> <span class="red"><i></i> <b>Driver Booster 8 PRO</b></span>
    </p>
    <p class="gray">*. Abbiamo testato il driver booster 8 PRO nel nostro laboratorio di test interno. I risultati possono variare.</p>
  </div>
  <!-- feature end -->

  <!-- unique start -->
  <div class="feature unique">
    <div class="wrapper">
      <h2>Altri vantaggi esclusivi di Driver Booster 8 PRO</h2>
      <div class="clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/></div>
        <ul class="content fr">
          <li>
            <i class="all-icons"></i>
            <span>Velocità di download del driver illimitata</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Priorità per ottenere gli ultimi driver Game Ready</span>
          </li>
          <li class="twice">
            <i class="all-icons"></i>
            <span>Download e aggiornamento automatici durante il sistema inattivo</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Aggiorna i componenti necessari per un gioco fluido</span>
          </li>
          <li class="twice">
            <i class="all-icons"></i>
            <span>Corregge facilmente gli errori del dispositivo per le prestazioni migliori</span>
          </li>
          <li>
            <i class="all-icons"></i>
            <span>Aggiornamento automatico all’ultima versione</span>
          </li>
          <li>
        </ul>
      </div>
      <div class="giftbox">
        <h3>Ti regaliamo 2 mesi di abbonamento in più,<br> solo per questo nuovo rilascio!</h3>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/></dt>
          <dd>
            <div class="numbox">
              <h3>
                Affrettati, 
                <span id="centNum" class="giftNum">
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">0</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                  <b class="nwrap"><b class="numlist">5</b></b>
                </span>
                pezzi rimasti
              </h3>
            </div>
            <a class="buybtn green"
               href="https://www.iobit.com/buy.php?product=it-db814m3pc2399&ref=it_db814mnewlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
               onclick="ga('send', 'event', 'db14mbuy', 'buy', 'dbpurchasenewlaunch14m-it');">
              <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
              <span>Ottienilo Ora</span>     
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- unique end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Cosa dicono gli altri: </h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni dei media</h2>
            <p>"IObit fornisce varie utilità e tra cui Driver Booster PRO, il quale ti aiuta ad aggiornare i driver in automatico, è il migliore! La funzionalità di base semplice di Driver Booster PRO è diventato ancora più attraente grazie all'inserimento di più licenze ad un prezzo molto economico, così come un'interfaccia personalizzabile che fa un buon lavoro di visualizzare informazioni specifiche relativi ai hardware. I concorrenti come Ashampoo Driver Updater e SlimWare Utilities DriverUpdate offrono caratteristiche interessanti, ma IObit Driver Booster PRO conduce nel campo."</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>Che sorpresa utilizzare il nuovo Driver Booster di IObit. Prima che avrebbe installatoe iniziato l’aggiornamento, non sapevo dove fosse la metà dei programmi sul mio PC, per non parlare di aggiornarli. Una volta completato l'aggiornamento, mi sembra che il mio PC avesse una ristrutturazione completa. Che senzazionale!</p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/fabio-tursi.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema. Grazie alla potenza del suo motore, e all’enorme database, è un’applicazione che non dovrebbe mancare in nessun computer.</p>
            <cite>Fabio Tursi</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/gianfranco-marinelli.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>
              È un software perfetto per rilevare driver obsoleti ed aggiornarli senza problemi di funzionalità e tutti WHQL e quindi mantenere il PC sempre col massimo delle potenzialità. Inoltre in caso di problema (mai successo) c’è la possibilità attraverso il backup di ripristinare il Driver precedente.
            </p>
            <cite>Gianfranco Marinelli </cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni degli utenti</h2>
            <p>
              Driver Booster 8 ha aiutato a risolvere i problemi di lentezza con il mio giocatore laptop. Quando avevo provato a aggiornare i driver sul mio computer, si è stato bloccato e avevo dovuto formattare il mio computer per ripristinare tutte le funzioni, ma ora nessun problema con Driver Booster 8. Facile da usare e download veloci, è lo strumento migliore sul mercato fino ad ora!
            </p>
            <cite>Carlos Alexandre Veríssimo </cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/html-it.png')?>" alt=""></dt>
          <dd>
            <h2>Recensioni dei media</h2>
            <p>
              Driver Booster di IObit, ti offre una soluzione dell'aggiornamento dei driver più semplice con la sua più avanzata tecnologia. Funziona come un centro tutto in uno di comando. Tutti i driver sono elencati nell' interfaccia dell'app, rendendo il processo dell'aggiornamento super facile. Richiedono solo pochi minuti per lo scaricamento e l'installazione dei driver!
            </p>
            <cite>HTML.it </cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Raccomandato e premiato dai media mondiali</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>SENZA RISCHIO – Garanzia di rimborso di 60 giorni</h4>
          <p>
            Siamo fiduciosi che l’edizione PRO sarà in grado di risolvere tutti i problemi del driver per il tuo PC a un prezzo economico!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Accettiamo</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Nota: </dt>
        <dd>*. Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente a nostra esclusiva discrezione.</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/float-gift-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Affrettati, 
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
          <b class="nwrap"><b class="numlist">5</b></b>
        </span>
        pezzi rimasti
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> visitatori a questa pagina ora</p>
    </div>
    <a class="buybtn fr"
       href="https://www.iobit.com/buy.php?product=it-db814m3pc2399&ref=it_db814mnewlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
       onclick="ga('send', 'event', 'db14mbuy', 'buy', 'dbpurchasenewlaunch14m-it');">
      <em><i class="all-icons"></i><i class="all-icons icon-cart"></i></em>
      <span>Ottienilo Ora</span>     
    </a>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>