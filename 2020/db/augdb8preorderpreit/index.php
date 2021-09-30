<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itdbpre_p' . $date;
  $c_name_t='itdbpre_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
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

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
$refStr .= empty($_GET['instd']) ? '' : ('-' . $_GET['instd']);
$refStr .= empty($_GET['finstd']) ? '' : ('-' . $_GET['finstd']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Ottieni Driver Booster 8 PRO a €0 - IObit</title>
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
            <a href="https://www.iobit.com/buy.php?product=it-db8preorder&ref=it_db8preorderpre<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
               onclick="a('send', 'event', 'dbbuy', 'buy', 'db8preorderpre-it');" class="buybtn">Preordina Ora</a>
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
        <h4>Driver Booster 8 PRO è</h4>
        <h2> nuovo e migliore</h2>
      </div>
      <div class="line"></div>
      <div class="message-box">
        <ul class="img-box">
          <li class="icon01">
            <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="" >
          </li>
          <li class="icon02">
            <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="">
          </li>
        </ul>
        <dl class='one'>
          <dt><i></i>
            <em>
              Più grande
            </em>
             il database driver
            <span class='soportes red_soportes'>50% <img src="<?php echo getStaticUrl('images/subir.png') ?>" alt=""></span></dt>
          <dd>Ora supporta più di 4.500.000 driver e fornisce aggiornamenti precisi per tutti i driver obsoleti, non corrispondenti o mancanti.</dd>
        </dl>
        <dl class='two'>
          <dt><i></i>
            <em>
              Più intelligente
            </em>
            la modalità  d’aggiornamento 
            <span class='soportes green_soportes'>Nuovo </span></dt>
            <dd>Fornisce aggiornamenti dei driver più stabili per chi dà priorità alla stabilità del PC o dei driver più recenti per chi dà priorità alle nuove funzionalità.
            <br/>
            <div class='market'>Unico sul mercato</div>
          </dd>
        </dl>
        <dl class='three'>
          <dt><i></i>
            <em>
             Più facile
            </em>
            l’aggiornamento offline 
            <span class='soportes green_soportes'>Migliorato </span></dt>
          <dd>Aggiorna e installa i driver di rete anche senza una connessione internet, perfetto per reinstallare o aggiornare il sistema</dd>
        </dl>
        <dl class='four'>
          <dt><i></i>
            <em>
              Più sicuro 
            </em>
            il backup dei driver 
            <span class='soportes red_soportes'>Migliorato</span></dt>
          <dd>Il backup dei driver completamente ottimizzato garantisce una maggiore percentuale di successo di backup e ripristino dei driver in Windows 10.</dd>
        </dl>

      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Potrai godere di TUTTI i benefici della versione PRO</h2>
        <div class='current_Version'>
          La tua versione attuale
        </div>
        <div class='driver_Booster'>

          <p>
            Driver Booster 8<br /> PRO<br />
            <span class='soportes green_soportes'>Nuovo </span>
          </p>
        </div>
        <ul class='benefits-ul'>
          <li>
            <i class='_icon'></i>
            <span>Aggiornamento automatico di driver obsoleti e mancanti</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Soluzione con 1 clic per aggiornare tutti i driver obsoleti</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Enorme database per il supporto di oltre 4,500,000 driver</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Aggiornamento e installazione offline dei driver di rete</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Aggiornamento automatico dei driver quando il sistema è inattivo</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Download completo e velocità di aggiornamento senza limiti</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Backup automatico dei driver e creazione di un punto di ripristino</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Facile correzione degli errori di dispositivo per prestazioni migliori</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Priorità per l’aggiornamento di driver stabili   </span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Componenti necessari per un’esperienza di gioco più fluida</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Priorità per l’aggiornamento degli ultimi driver Game Ready</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
        </ul>

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
           href="https://www.iobit.com/buy.php?product=it-db8preorder&ref=it_db8preorderpre<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
           onclick="a('send', 'event', 'dbbuy', 'buy', 'db8preorderpre-it');">
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