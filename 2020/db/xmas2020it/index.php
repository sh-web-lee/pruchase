<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 69041325;
$buyNum = number_format($buyNum);
$viewNum = rand(60, 90);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
  $date = $_GET['d'];
  $cName_t = 'optimizedtext2020_t' . $date;
  $cName_p = 'optimizedtext2020_p' . $date;
  $maxNum = rand(70, 90);
  $minNum = 3;
  $cookie = $_COOKIE[$cName_p];
  if ($cookie !== null) {
    $packsNum = $_COOKIE[$cName_p];
    if ($packsNum > $minNum) {
      $packsNum--;
      setcookie($cName_p, $packsNum);
    } else {
      $packsNum = $minNum;
    }
  } else {
    $packsNum = $maxNum;
    setcookie($cName_t, $packsNum);
    setcookie($cName_p, $packsNum);
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}
// $time = time();
// if(isset($_COOKIE['optimize'])&&$time-$_COOKIE['optimize']>86400){
//     header("Location:return.php");
//     exit;
// }else{
//   if(!isset($_COOKIE['optimize'])) setcookie('optimize',$time,$time+2592000);
// }
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];

?>
<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <title>Offerta di Natale, fino a 85% di sconto su Driver Booster PRO – IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Roboto:ital,wght@0,400;0,500;0,700;0,900;1,400;1,500;1,700;1,900&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="top-img" id="light-ctrl">
      <div class="light-0 on"></div>
      <div class="light-1"></div>
      <div class="snow"></div>
    </div>

    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/it/index" target="_blank">IObit</a>
      <h1>SOLO PER QUESTO NATALE!</h1>
      <h2>Driver aggiornati automaticamente e cura completa del tuo PC a soli 24,99€!</h2>

      <div class="clearfix">
        <div class="banlist ">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="" />
          <div class="price">
            <p><strong>24,99€</strong> <del>74,78 €</del></p>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=it-db83pc2499&ref=it_db83pc2499purchasexmas2020<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pcxmas2020-it');">
            Acquista ora
            </a>
          </div>
          <ul class="txtlist">
            <li><i class="all-icons"></i> Risparmia 49,79€</li>
            <!-- <li><i class="all-icons"></i> Driver Booster PRO <del>1990 €</del></li> -->
          </ul>
          <div class="discount"><b>-65%</b></div>
        </div>
        <div class="banlist big">
          <div class="gift date">
            <i></i>
              OFFERTA LIMITATA: &nbsp;&nbsp;<strong><b>10</b> M </strong>
              <strong><b>10</b> S  </strong>
              <strong class="ms"><b>10</b> MS </strong>
          </div>
          <img src="<?php echo getStaticUrl('images/db-gift-box.png') ?>" alt="" />
          <div class="price">
            <p><strong>24,99€</strong> <del>174,78€</del></p>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=it-db83pciuisupf2499&ref=it_db83pciuisupf2499purchasexmas2020<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciuisupfxmas2020-it');">
              Approfittane ora
            </a>
          </div>
          <ul class="txtlist">
            <li><i class="all-icons"></i> Risparmia 149,79€</li>
            <li><i class="all-icons"></i>Ottieni 3 regali PRO GRATUITI!</li>
            <!-- <li><i class="all-icons red"></i> IObit Software Updater PRO <del>990 €</del></li>
            <li><i class="all-icons red"></i> Smart Defrag PRO <del>1600 €</del></li> -->
          </ul>
          <div class="discount"><b>-85%</b></div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->


  <div class="payment">
    <img src="<?php echo getStaticUrl('images/payment.png') ?>" alt="" />
    <p>
      <img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt="" />
      <span>
      Garanzia di rimborso di 60 giorni – Ti garantiamo che la versione PRO ti aiuterà a risolvere i problemi dei driver del tuo PC, altrimenti ti rimborseremo tutto l’importo pagato!
      </span>
    </p>
  </div>

  <!-- feature start -->
  <div class="feature">
    <div class="triangle"></div>
    <h2 class="tree">Perché scelgo Driver Booster PRO?</h2>
    <div class="wrapper">
      <div class="clearfix">
        <div class="feature-img fl"><img src="<?php echo getStaticUrl('images/screen.png') ?>" alt="" /></div>
        <div class="feature-txt fr">
          <dl>
            <dt>
              <h3>Oltre 4.500.000 driver supportati</h3>
            </dt>
            <dd>Rileva e aggiorna con un solo clic molti più driver rari e obsoleti anche senza connessione Internet
              <br> 
            </dd>
          </dl>
          <dl class="two">
            <dt>
              <h3>Migliori prestazioni di gioco</h3>
            </dt>
            <dd>Aggiorna i driver Game Ready e i componenti di gioco per una maggiore velocità, nuove funzionalità e un’esperienza di gioco più fluida
            </dd>
          </dl>
          <dl class="three">
            <dt>
              <h3>Correzione errori dispositivi</h3>
            </dt>
            <dd>Rileva e ripara la mancanza di suono e gli errori dei dispositivi periferici come USB, stampante e tastiera per una migliore esperienza informatica
            </dd>
          </dl>
          <dl class="four">
            <dt>
              <h3>Download 100% più veloce</h3>
            <dd>Velocità di download driver 100% più veloce rispetto alla versione gratuita
            </dd>
            </dt>
          </dl>
          <span class="feature-icon one"></span>
          <span class="feature-icon two"></span>
          <span class="feature-icon three"></span>
          <span class="feature-icon four"></span>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <div class="line"></div>



  <div class="feature-tile">
    <h2>
      <span class="tree">Il kit natalizio ti garantisce prestazioni ottimali per il tuo PC</span>
    </h2>
    <div class="giftbox">
        <div class="wrapper clearfix">
        <dl class="fl clearfix" style="margin-left: 50px;">
        <dt class="fl"> <img src="<?php echo getStaticUrl('images/IU.png')?>" alt=""/><p><span>0€ </span><del>29,99€</del></p></dt>
        
        <dd class="fl">
          <ul class="fr">
          <li>Mantiene pulito il tuo PC disinstallando programmi ostinati, avanzi di altri programmi e rimuovendo plugin dannosi</li>
          </ul>
        </dd>
      </dl>
      <dl class="fl clearfix">
        <dt class="fl"> <img src="<?php echo getStaticUrl('images/ISU.png')?>" alt=""/><p><span>0€ </span><del>29,99€</del></p></dt>
        
        <dd class="fl">
          <ul class="fr">
          <li>Aggiorna e installa in modo sicuro i software sul tuo PC, ottimizzandone le prestazioni in tempo reale </li>
          </ul>
        </dd>
      </dl>
      <dl class="fl clearfix">
        <dt class="fl"> <img src="<?php echo getStaticUrl('images/PF.png')?>" alt=""/><p><span>0€ </span><del>39,99€</del></p></dt>
        
        <dd class="fl">
          <ul class="fr">
          <li>Protegge i tuoi dati e le tue cartelle importanti in modo semplice ed efficace grazie all’uso di una password </li>
          </ul>
        </dd>
      </dl>
        </div>
    </div>
  </div>


  <!-- review -->
  <div class="review">
    <h2>
      <em class="tree">Miglior strumento di aggiornamento driver</em>
      <br>
      Driver Booster PRO ha già aggiornato i driver di 10 milioni di utenti
      <!-- Публикации и награды в
      <b>100+</b>
      авторитетных СМИ и отзывы от
      <b>250+</b>
      млн пользователей по всему миру -->
    </h2>

    <div class="wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt>
              <div class="img-container">
                <img src="<?php echo getStaticUrl('images/chip.png') ?>" alt="">
              </div>
            </dt>
            <dd>
            <p>
            "Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese
          </p>
              <cite>CHIP</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt>
              <div class="img-container"><img src="<?php echo getStaticUrl('images/olorin89.png') ?>" alt=""></div>
            </dt>
            <dd>
            <p>"Driver Booster è semplicemente il tool di aggiornamento driver che semplifica la vita a tutti."</p>
              <cite>Olorin 89</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt>
              <div class="img-container"><img src="<?php echo getStaticUrl('images/adam-backlund.png') ?>" alt=""></div>
            </dt>
            <dd>
            <p>
            "Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese
          </p>
              <cite>Adam Backlund</cite>
            </dd>
          </dl>
        </div>
      </div>
      <div class="title-0"></div>
      <div class="title-1"></div>
    </div>
  </div>
  <!-- end review -->



  <!-- comparison start -->
  <div class="comparison">
    <h2 class="tree">Scopri i vantaggi unici di Driver Booster PRO</h2>
    <div class="wrapper">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="itema">
              <div class="name">La tua versione attuale</div>
            </th>
            <th class="itemb"></th>
            <th class="itemc">
              <div class="name">Driver Booster PRO</div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema">Oltre 3.500.000</td>
            <td class="itemb">
            Scegli tra priorità per driver più stabili per una maggiore sicurezza o driver più recenti per una migliore esperienza di gioco
            </td>
            <td class="itemc">
            Oltre 4.500.000
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
            Sblocca la velocità massima di aggiornamento dei driver
              <!-- <i class="label red">уникальная функция</i> -->
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
            Database del 200% più grande per aggiornare molti più driver
rari e obsoleti
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
            Riduce i blocchi del sistema, migliorandone le prestazioni
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
            Download, aggiornamento e installazione automatica dei driver durante i periodi di inattività del sistema
              <!-- <i class="label green">новинка</i> -->
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
            Backup automatico di tutti i driver per un ripristino sicuro
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
            Aggiornamento prioritario delle periferiche per un gioco più fluido
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
            Rileva e ripara gli errori dei driver in modo efficace
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
            Aggiornamento automatico alla versione più recente
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <tr>
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
            Supporto tecnico 24/7 gratuito su richiesta
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr>
          <!-- <tr class="last">
            <td class="itema"><i class="all-icons tabicon"></i></td>
            <td class="itemb">
              Бесплатная круглосуточная техническая поддержка в
              режиме 24\7.
            </td>
            <td class="itemc">
              <i class="smile"></i>
            </td>
          </tr> -->
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback-big.png') ?>" alt="" /></dt>
      <dd>
        <h3>Garanzia di rimborso</h3>
        <p>
        Non sei soddisfatto? Garanzia di rimborso 
      </p>
      </dd>
    </dl>
    <dl class="two">
      <dt><img src="<?php echo getStaticUrl('images/verified.png') ?>" alt="" /></dt>
      <dd>
        <h3>Pagamento Assicurato</h3>
        <p>
        Tutti i metodi di pagamento sono verificati <br> 
        e sicuri al 100%
      </p>
      </dd>
    </dl>
    <dl class="three">
      <dt><img src="<?php echo getStaticUrl('images/veloce.png') ?>" alt="" /></dt>
      <dd>
        <h3>Attivazione Veloce</h3>
        <p>
         
        Dopo il tuo acquisto, riceverai il codice di <br> 
        licenza in pochi minuti tramite e-mail
      
        </p>
      </dd>
    </dl>
    <dl class="four">
      <dt><img src="<?php echo getStaticUrl('images/servizio.png') ?>" alt="" /></dt>
      <dd>
        <h3>Servizio Clienti</h3>
        <p>
        24/7 Supporto tecnico gratuito
      </p>
      </dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dt>Note:</dt>
        <dd>
        1*.Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
        </dd>
        <dd>
        2*.I dati potrebbero variare in base al sistema o computer.
        </dd>
      </dl>
      <p class="copyright">©2005 - <?php echo date('Y') ?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/float-box.png') ?>" alt="" />
      </div>
      <div class="text fl">
        <h3>RISPARMIA <b>149,79€</b></h3>
        <h2>Elimina facilmente tutti i problemi dei tuoi driver e del tuo PC!</h2>
      </div>
      <div class="price fr">
        <p><strong>24,99€</strong> <del>174,78€</del></p>
        <a class="buybtn" href="http://www.iobit.com/buy.php?product=it-db83pciuisupf2499&ref=it_db83pciuisupf2499purchasexmas2020<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciuisupfxmas2020-it');">Approfittane ora</a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->


  <div class="popup" id="popup">
    <div class="mask"></div>
    <div class="container">
      <div class="close"></div>
      <h2>Вы получили дополнительную скидку <b>-50 €.</b>!</h2>
      <h3>Предложение закончится через <b>2</b><b>5</b> секунт</h3>
      <div class="content cf">
        <div class="img fl"></div>
        <div class="text fl">
          <p class="line-0">690 €.</p>
          <p class="line-1">Только <b>640</b>€.</p>
          <a class="buybtn" href="http://www.iobit.com/buy.php?product=it-db83pciuisupf2499&ref=it_db83pciuisupf2499purchasexmas2020<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=it_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciuisupfxmas2020-it');">Получить сейчас</a>
        </div>
      </div>
    </div>
  </div>


  <script src="<?php echo $pRootUrl; ?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl; ?>/tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>