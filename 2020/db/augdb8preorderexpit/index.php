<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbexp_p' . $date;
  $c_name_t='endbexp_t' . $date;
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$udate = empty($_GET['udata']) ? '' : $_GET['udata'];
$date_arr = json_decode(base64_decode(urldecode($udate)),true);
?>
<!DOCTYPE html>
<html lang="en">
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
        <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>La prevendita è iniziata</p>
          <h2>Riottieni i tuoi privilegi per 0€</h2>
          <h4>con la migliore versione PRO</h4>
          <div class="price">
            <span>Prezzo  <br> prevendita:</span>
            <strong>0€<sup>*</sup></strong>
            <a href="https://www.iobit.com/buy.php?product=it-db8preorder&ref=it_db8preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-it');" class="buybtn">Rinnova Ora</a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              rimasti ora
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
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Con Driver Booster PRO hai già:</h2>
      </div>
      <div class="line"></div>
      <ul class="message-box">
          <?php if ($date_arr['UpdDrv'] == 1): ?>
              <li data-name='default'>Aggiornato <strong class="updated">1</strong> driver importante</li>
          <?php else: ?>
              <li data-name='default'>Aggiornato <strong
                          class="updated"><?php echo empty($date_arr['UpdDrv']) ? '' : $date_arr['UpdDrv']; ?></strong>
                  driver importanti
              </li>
          <?php endif; ?>
          <?php if ($date_arr['FixedErr'] == 1): ?>
              <li data-name='default'>Risolto <strong class="fixed">1</strong> problema di codice di errore comuni</li>
          <?php else: ?>
              <li data-name='default'>Risolto <strong
                          class="fixed"><?php echo empty($date_arr['FixedErr']) ? '' : $date_arr['FixedErr']; ?></strong>
                  problemi di codice di errore comuni
              </li>
          <?php endif; ?>
          <?php $UpdSum = $date_arr['UpdCmp'] + $date_arr['UpdRdy'];
          if ($UpdSum == 1): ?>
              <li data-name='default'>Aggiornato <strong class="game">1</strong> componente e driver di gioco essenziale
              </li>
          <?php else: ?>
              <li data-name='default'>Aggiornato <strong
                          class="game"><?php echo empty($UpdSum) ? '' : $UpdSum; ?></strong> componenti e driver di
                  gioco essenziali
              </li>
          <?php endif; ?>
      </ul>
      <div class="img-box">
        <span class="computer two" data-name='default'></span>
        <img src="<?php echo getStaticUrl('images/feature-02-icon.png')?>" alt="" class="icon three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon02.png')?>" alt="" class="icon01 three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon03.png')?>" alt="" class="icon02 three" data-name='default'>

      </div>
    </div>
    <div class="message01 wrapper">
      <div class="title">
        <h2>Ora, potrai avere molto più</h2>
        <h4>con l’ultimo Driver Booster 8 PRO</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png')?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png')?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png')?>" alt="" class="icon02">
        </li>
         <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png')?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt><i></i>Database driver più grande <span><em>50%↑</em></span></dt>
          <dd>
            Supporta ora 4.500.000 driver e hai la priorità per rilevare e aggiornare tutti i driver obsoleti e ancora più driver recenti e rari.
              <?php if (!empty($_GET['more'])) :
                  if ($_GET['more'] == 1) :?>
                      <p>* <strong><?php echo $_GET['more']; ?></strong> aggiornamento extra rilevato ora </p>
                  <?php else: ?>
                      <p>* <strong><?php echo $_GET['more']; ?></strong> aggiornamenti extra rilevati ora </p>
                  <?php endif; ?>
              <?php endif; ?>
          </dd>
        </dl>
        <dl>
          <dt><i></i>Aggiornamento offline dei driver  <span class="market"><em>Nuovo</em></span></dt>
          <dd>Aggiorna i driver di rete senza aver bisogno di una connessione Internet, perfetto per reinstallare o aggiornare il sistema.</dd>
        </dl>
        <dl>
          <dt><i></i>Driver stabili e più recenti <span><em>unico sul mercato</em></span></dt>
          <dd>Aggiorna i driver dando priorità o alla stabilità o alle ultime funzioni supportate, adatto a differenti esigenze.</dd>
        </dl>
        <dl>
          <dt><i></i>Backup dei driver più sicuro <span class="market"><em>Migliorato</em></span></dt>
          <dd>Il backup dei driver completamente ottimizzato garantisce una maggiore percentuale di successo di backup e ripristino dei driver in Windows 10.</dd>
        </dl>
      </div>
    </div>

    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <div class="title">
          <h2>Senza Driver Booster PRO,</h2>
          <h4>ti troverai di fronte a: </h4>
        </div>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <p>Database ridotto a<br>3.000.000 driver</p>
          </dd>
        </dl>
        <dl class="two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt="" ></dt>
          <dd>
            <p>Nessun aggiornamento e<br>backup automatico <br/> dei driver</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt="" ></dt>
          <dd>
            <p>Nessun aggiornamento dei <br> componenti di gioco</p>
          </dd>
        </dl>
        <dl class="four last" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt="" ></dt>
          <dd>
            <p>Nessuna accelerazione di <br> download dei driver</p>
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
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
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
     <strong>0€<sup>*</sup></strong>
     <span></span>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db8preorder&ref=it_db8preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-it');">
           Rinnova Ora
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