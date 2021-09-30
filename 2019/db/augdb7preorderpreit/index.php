<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itdbexp_p' . $date;
  $c_name_t='itdbexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
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

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if($_GET['to']=='db6preicon') {
  if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
  }
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Paga €0 per ottenere Driver Booster 7 PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <p class="name">Driver Booster 7 PRO</p>
      <h1>Inizia la Prevendita</h1>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right fl">
          <h2>SOLO PER I PRIMI <big>1.000</big> CLIENTI AL GIORNO</h2>
          <div class="numbox">
            <h3>
              Solo  
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              Restanti
            </h3>
            <p><span class="buyNum"><?php echo $viewNum; ?></span> utenti stanno visualizzando ora</p>
          </div>
          <ul class="price clearfix">
            <li class="first"><strong><small>€</small>0</strong></li>
            <li class="last">
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=it-db7preorder&ref=it_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-it');">
                 Pre-ordina Ora
              </a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- function-wrap start -->
  <div class="function-wrap">
    <div class="wrapper">
      <h2 class="why">
        Perché Aggiornare a  <br> Driver Booster 7 PRO? <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
      </h2>
      <div class="db-message">
        <h2>Risolve tutti i problemi causati dai driver per te</h2>
        <div class="screenshot">
          <div class="maglist one">
            <h3><big>Ripara</big> Problemi di Ritardo del Gioco</h3>
            <p>
              Ottiene driver pronti per il gioco aggiornati e consiglia componenti di gioco adeguati per correggere il caricamento lento e le scarse prestazioni di gioco.
            </p>
            <span class="tag">Ripara di più con PRO</span>
          </div>
          <div class="maglist two">
            <h3><big>Ripara</big> i Crash di Sistema</h3>
            <p>
              Esegue la scansione di oltre 3.500.000 driver e li tiene aggiornati per correggere la schermata blu, l'arresto anomalo del sistema e altri problemi di sistema.
            </p>
            <span class="tag">Solo PRO</span>
          </div>
          <div class="maglist three">
            <h3><big>Ripara</big> Errori di Dispositivi </h3>
            <p>
              Rileva e ripara gli errori del dispositivo con 1 clic per risolvere i problemi del driver del dispositivo, il conflitto delle risorse di sistema e altri problemi hardware.
            </p>
            <span class="tag">Solo PRO</span>
          </div>
        </div>
      </div>
      <div class="db-feature">
        <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
        <h2>Processo di aggiornamento driver automatico e sicuro</h2>
        <div class="featlist one">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
            <h3>SCANSIONE</h3>
            <p>Controlla automaticamente lo stato dei driver di dispositivi per gli aggiornamenti.</p>
            <p class="red"><span>La connessione Https sicura</span></p>
          </div>
        </div>
        <div class="featlist two">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
            <h3>DOWNLOAD</h3>
            <p>Scarica automaticamente i driver quando il sistema è inattivo.</p>
            <p class="red"><span>I driver hanno superato solo le regole WHQL e IObit.</span></p>
          </div>
        </div>
        <div class="featlist three">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
            <h3>INSTALLAZIONE</h3>
            <p>Installa automaticamente i driver quando il sistema è inattivo.</p>
            <p class="red"><span>Esegue il backup dei driver precedenti</span></p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- function-wrap end -->
    <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
      <h2>Driver Booster 7 PRO ti offre di molto più</h2>
      <table>
        <thead>
        <tr>
          <th class="text"></th>
          <th class="itema">
            <h3>La tua versione attuale</h3>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <h3>Driver Booster 7 PRO</h3>
          </th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""> Database di driver</td>
          <td class="itema">2.500.000+</td>
          <td class="space"></td>
          <td class="itemb">3.500.000+</td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""> Accelera la velocità di download dei driver </td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon03.png" alt="">Scansione e aggiornamento automatici come programmati</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""> Backup dei driver precedenti</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""> Aggiorna i componenti di gioco</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""> Priorità a aggiornare i driver Game-Ready</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""> Riduce i problemi di hardware</td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <th class="text"></th>
          <th class="itema"></th>
          <th class="space"></th>
          <th class="itemb"></th>
        </tr>
        </tfoot>
      </table>
      <h4>Aggiorna a <strong>€<big>0</big></strong> per sbloccare subito TUTTE le funzioni di PRO</h4>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-db7preorder&ref=it_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-it');">
        Pre-ordina Ora
      </a>
    </div>
  </div>
  <!-- comparison end -->
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
              Driver Booster 7 ha aiutato a risolvere i problemi di lentezza con il mio giocatore laptop. Quando avevo provato a aggiornare i driver sul mio computer, si è stato bloccato e avevo dovuto formattare il mio computer per ripristinare tutte le funzioni, ma ora nessun problema con Driver Booster 7. Facile da usare e download veloci, è lo strumento migliore sul mercato fino ad ora!
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
        <dd>*Al termine del periodo gratuito di 30 giorni, sulla tua carta di credito o sul conto PayPal verranno addebitati automaticamente €22,95. Questo sconto del 70% sul prezzo originale di €74,85 è un bonus solo per i pre-ordini! </dd>
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
      <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Affrettati, solo
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        rimasti
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> utenti stanno visualizzando ora</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong><small>€</small>0</strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db7preorder&ref=it_db7preorderpre<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderpre-it');">
          Pre-Ordina Ora
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>