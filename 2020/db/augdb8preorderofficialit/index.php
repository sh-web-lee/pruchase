<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itdbofficial_p' . $date;
  $c_name_t='itdbofficial_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,98);
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
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Ottieni l'ultimo Driver Booster PRO a €0</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>LA PREVENDITA È INIZIATA</p>
          <h2>Il programma n.1 per aggiornare driver</h2>
          <h4>Ti offre un PC più fluido e un gaming più veloce</h4>
          <div class="price">
            <span>Prezzo <br> prevendita:</span>
            <strong>0€ <sup>*</sup></strong>
            <a href="https://www.iobit.com/buy.php?product=it-db8preorder&ref=it_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-it');" class="buybtn">Preordina Ora</a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              pezzi rimasti ora
            </h3>
            <div class="bar">
               <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="feature">
    <div class="message01 wrapper">
      <div class="title">
        <h2>Oltre 4.500.000 Driver</h2>
        <h4>Il database più grande di sempre di Driver Booster</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png')?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png')?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png')?>" alt="" class="icon02">
        </li>
         <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png')?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt><i></i>Aggiornamento automatico dei driver <span>WHQL</span></dt>
          <dd>Cerca e aggiorna automaticamente i driver piu adatti certificati WHQL.</dd>
        </dl>
        <dl>
          <dt><i></i>Driver stabili e più recenti   <span class="market"> unico sul mercato</span></dt>
          <dd>Fornisce in modo intelligente driver stabili per gli utenti che danno priorità all'affidabilità dei dispositivi e driver più recenti per quelli che danno priorità alle ultime funzioni supportate. </dd>
        </dl>
        <dl>
          <dt><i></i>Ripara i problemi dell’Hardware</dt>
          <dd>Fornisce una soluzione con 1 clic per riparare i problemi di scarsa qualità video, suono poco chiaro, interruzione della connessione Internet e dispositivo esterno non funzionante.</dd>
        </dl>
        <dl>
          <dt><i></i>Aggiornamento dei driver offline </dt>
          <dd>Installa i driver di rete senza aver bisogno di una connessione Internet. Scarica i giusti driver di rete sul computer, che potrai poi trasferire su un altro computer. </dd>
        </dl>
      </div>
    </div>
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Driver e componenti Game Ready</h2>
        <h4>Ottimizzazione per il 90% dei giochi del PC</h4>
      </div>
      <div class="line"></div>
      <dl class="message-box">
        <dt class="one" data-name='default'>Gioco più fluido </dt>
        <dd class="one" data-name='default'>Fornisce gli ultimi driver e componenti Game Ready per ridurre ritardi nel computer o strappi dello schermo e per supportare nuove funzionalità di gioco.</dd>
        <dt class="two" data-name='default'>Gioco più veloce</dt>
        <dd class="two" data-name='default'>Blocca i servizi non necessari per accelerare il tuo PC per un migliore esperienza di gioco.</dd>
      </dl>
      <div class="img-box">
        <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="computer three" data-name='default'>
        <span class="light four" data-name='default'></span>
        <span class="smail-light"></span>
        <img src="<?php echo getStaticUrl('images/feature-icon.png')?>" alt="" class="icon five" data-name='default'>
      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Altri Potenti Vantaggi</h2>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <h3>Modalità Silenziosa</h3>
            <p>Blocca automaticamente le <br> notifiche per non disturbarti. </p>
          </dd>
        </dl>
        <dl class="center two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt="" ></dt>
          <dd>
            <h3>Aggiornamento Sicuro</h3>
            <p>Realizza automaticamente il backup <br> e crea un punto di ripristino del sistema.</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt="" ></dt>
          <dd>
            <h3>Cancellazione Automatica</h3>
            <p>Cancella automaticamente i pacchetti <br> dei driver installati.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>È il programma di aggiornamento driver più scaricato al mondo</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Download
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Valutazione degli utenti
        </li>
        <li data-name='default'>
          <strong>1000+</strong>
          Raccomandazioni dei media
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Cosa dicono di noi</dt>
              <dd>"Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese</dd>
            </dl>
            <dl>
              <dt>Cosa dicono di noi</dt>
              <dd>“Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”</dd>
            </dl>
            <dl>
              <dt>Cosa dicono di noi</dt>
              <dd>"Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese</dd>
            </dl>
            <dl>
              <dt>Cosa dicono di noi</dt>
              <dd>"Driver Booster è semplicemente il tool di aggiornamento driver che semplifica la vita a tutti."</dd>
            </dl>
          </div>
        </div>
        <ul>
           <li>
            <div><img src="<?php echo getStaticUrl('images/olorin89.png')?>" alt="Olorin 89"></div>
            <p>Olorin 89</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="CHIP"></div>
            <p>CHIP</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/Fabio.png')?>" alt="Fabio Tursi"></div>
            <p>Fabio Tursi</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></div>
            <p>Adam Backlund</p>
          </li>
           
        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Premi Mondiali</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Note:</dt>
      <dd>
       *. Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €22,95 sulla tua carta di credito o account PayPal. Lo sconto del 70% sul prezzo originale di €74,85 è un bonus valido solo per i preordini!
      </dd>
      <dd>*. Se non sei soddisfatto, puoi annullare l'ordine che hai effettuato entro 30 giorni senza alcun addebito.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        dei 1000 pezzi rimasti ora
      </h3>
    </div>
    <div class="price fr">
     <strong>0€ <sup>*</sup></strong>
     <span></span>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db8preorder&ref=it_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-it');">
          Preordina Ora
        </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>