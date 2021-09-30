<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(126,158);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itiumon'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=rand(50,50);
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
function changeCont($to, $transData){
    switch ($to){
        case 'cleanuninstall':
            $fileSize=$transData->cleanuninstall->extra;
            $fileSizeShow=number_format($fileSize/(1024*1024),0);
            if(($fileSize/(1024*1024))>=10){
                $fileSizeStr=$fileSizeShow.' MB';
            }else{
                $fileSizeStr='';
            }
            $dataNum = $transData->cleanuninstall->reg
                +$transData->cleanuninstall->file
                +$transData->cleanuninstall->task
                +$transData->cleanuninstall->service
                +$transData->cleanuninstall->dll;
            return 'Pulisce tutti i '. $dataNum .' elementi registrati e libera '. $fileSizeStr .' di spazio in più';
            break;
        case 'prom_d':
            $dataNum = $transData->promote3->reg
                +$transData->promote3->file
                +$transData->promote3->task
                +$transData->promote3->service
                +$transData->promote3->dll;
            return 'Pulisce più di '. $dataNum .' avanzi con la modalità Disinstallazione Completa';
            break;
    }
}
$to = empty($_GET['to']) ? '' : $_GET['to'];
$data = empty($_GET['data']) ? '' : $_GET['data'];
$tData=json_decode(base64_decode($data));

if ($to == 'cleanuninstall' || $to == 'prom_d') {
    $transData = changeCont($to, $tData);
}

$refStr='';
if(in_array($_GET['st'],array('iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['user'])){
  $refStr.='-'.$_GET['user'];
}
if(!empty($_GET['insday'])){
  $refStr.='-'.$_GET['insday'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <title>Risparmia fino al 65% di sconto su IObit Uninstaller PRO e ricevi un pacchetto regalo gratis - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/it/index.php" class="logo" target="_blank">IObit</a>
      <ul>
          <li class="first">
              <?php if (in_array($to, ['cleanuninstall', 'prom_d'])): ?>
                  DISINSTALLAZIONE COMPLETA
              <?php else: ?>
                  MONITOR D’INSTALLAZIONE
              <?php endif; ?>
          </li>

          <li class="last">
              <?php if (!in_array($to, array('cleanuninstall', 'prom_d'))): ?>
                  Monitorare le modifiche del sistema causate dai programmi durante l'installazione
              <?php else: echo $transData; endif; ?>
          </li>
      </ul>
      <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO"></div>
      <div class="right-message">
        <h1>IObit Uninstaller 11 PRO</h1>
        <h2>Ripristina le modifiche del sistema dopo aver disinstallato i programmi</h2>
        <p class="price"><strong><b>14</b>,99€</strong> <del>39,99€</del></p>
        <p class="pc"><span></span> 1 Anno Abbonamento / 3 PC</p>
        <div class="number-message">
          <div class="number">
            <div class="countdown">
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
            </div>
            <p>Affrettati, solo <span class="gift">50</span> pezzi rimasti!</p>
          </div>
          <div class="buy-content">
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=it-iu113pc1499&ref=it_iu113pc1499monitor<?php echo $refStr;?>&refs=it_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iumonitor1499-it');">
              <i></i> <span>ATTIVA ORA</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- end banner -->

  <!-- problem -->
  <div class="problem">
    <div class="wrapper">
      <h2>Cos'è il Monitor d’<span>Installazione</span>?</h2>
      <div class="message-box">
        <div class="list01">
          <h3>MONITOR D’INSTALLAZIONE</h3>
          <p>Monitora tutto ciò che i programmi hanno fatto al tuo sistema durante l'installazione.</p>
        </div>
        <div class="list02">
          <h3>MODIFICHE DI REGISTRAZIONE</h3>
          <p>Registra le modifiche al file e al registro apportate dai programmi in una registrazione.</p>
        </div>
        <img class="screen" src="<?php echo getStaticUrl('images/screen-01.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- end problem -->

  <div class="feature">
    <div class="wrapper clearfix">
      <div class="left-message">
        <h2>Perché abilitare il <span>Monitor d’Installazione</span>?</h2>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
          <dd>
            <h3>VISUALIZZA</h3>
            <p>
              Consente di visualizzare i dati registrati per sapere cosa hanno fatto i programmi monitorati durante l'installazione.
            </p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd>
            <h3>DISINSTALLA</h3>
            <p>Aiuta a ripristinare i file e le modifiche al registro apportate dai programmi monitorati dopo la disinstallazione.</p>
          </dd>
        </dl>
      </div>
      <img class="img-box" src="<?php echo getStaticUrl('images/screen-02.png')?>" alt=""/>
    </div>
  </div>

  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2>Quali altri vantaggi posso ottenere da<br> IObit Uninstaller PRO?</h2>
      <div class="box">
        <dl class="list01">
          <dt>Elimina i Programmi Testardi</dt>
          <dd>Scansiona e rimuove completamente programmi con problemi di disinstallazione che non possono essere disinstallati con i mezzi convenzionali.</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list02 right">
          <dt>Pulizia Completa</dt>
          <dd>Pulisce automaticamente i file residui dei programmi disinstallati senza utilizzare IObit Uninstaller.</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list03">
          <dt>Software Updater</dt>
          <dd>1 clic per aggiornare i<br> tuoi software importanti senza l'intervento dell'utente.</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list04 right">
          <dt>Browser Veloce e Sicuro</dt>
          <dd>Identifica i plugin dannosi e pubblicitari ed elimina le notifiche del browser per garantire un’esperienza di navigazione più sicura e pulita. </dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
        <dl class="list05 right botright">
          <dt>Rimuove Bundleware</dt>
          <dd>Rimuove i programmi indesiderati di terze parti che sono installati insieme a freeware per pubblicizzare o rubare dati sulla privacy.</dd>
          <dd><strong>*SOLO PRO</strong></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->


  <div class="review wrapper">
    <h2>Cosa dicono altri utenti e media?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
            <dd>
              <h2>Recensioni dei media</h2>
              <p>Questo strumento di disinstallazione facile da usare e informativo pulisce, configura, e ottimizza il tuo PC. Gli utenti possono scaricarlo in pochissimi minuti. Questo strumento di disinstallazione può essere classificato come il miglior programma di disinstallazione e permette agli utenti di disinstallare all'ingrosso. Esso offre agli utenti di fare una "Scansione Approfondita" per andare più a fondo e trovare gli avanzi. La prestazione la stessa rende questo piccolo strumento vale la pena tenere.</p>
              <cite>MakeUseOf</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>Ho usato i programmi IObit per anni con grandi risultati! Ed è per questo che resto con i prodotti IObit. In passato, ho riparato e aggiustato laptop e cellulari (Android) a parenti ed amici, lascio sempre i prodotti IObit installati e dico loro di lasciar fare tutto ai programmi che sistemeranno e velocizzeranno automaticamente il loro laptop / computer / cellulare! :) Consiglio vivamente Iobit Uninstaller (e l'ultima versione beta) in quanto è un programma affidabile e sicuro che disinstalla i programmi testardi! La cosa più importante è rimuovere il codice "nascosto" che il programmatore voleva lasciare, perché è quello che consente la re-installazione degli annunci! TUTTI i prodotti IObit sono sicuri e facili da usare e la maggior parte si prende davvero cura del tuo PC.</p>
              <cite>Jeff A Watts</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>Trovo che il programma di disinstallazione IObit sia eccellente da usare in quanto ha tutto ciò che si possa desiderare. Mi piace il fatto che disinstalla tutti i frammenti residui. Ha anche un programma di aggiornamento che ti ricorda quando è necessario aggiornare i programmi e il fatto che disinstalla i programmi batch lo rende davvero il numero uno sul mercato. È un software fondamentale per mantenere il computer a posto.</p>
              <cite>Lynette van Niekerk</cite>
            </dd>
          </dl>                 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>IObit Uninstaller è il miglior software per rimuovere programmi sul computer, è veloce e molto efficace, niente a che vedere con il programma di disinstallazione di base di Windows, infatti pulisce a fondo tutti i residui del programma, evitando i rallentamenti nel computer. Lo uso da alcuni mesi e non so come farei senza, lo consiglio ai miei amici e alla mia famiglia. Grazie a IObit Uninstaller, è fantastico!</p>
              <cite>Paulo Martins</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <p>IObit Unisntaller migliora se stesso con ogni aggiornamento, l’ho già usato per 3 anni. Funziona molto veloce e ha un’interfaccia semplice. Alcune funzioni che uso regolarmente sono Batch Uninstaller, Scansione Approfondita, Distruggi File e Installati di Recente, il quale offre un’accesso veloce ai programmi installati di recente che non mi piacciono o non funzionano correttamente. È anche facile da controllare i tuoi elementi d’avvio per rendere più veloce l’avvio del tuo PC.</p>
              <cite>Lovro Žužić</cite>
            </dd>
          </dl>
        </div>               
    </div>
  </div>
  
  <div class="bottom">
      <div class="award wrapper ">
        <h2>PREMI A LIVELLO MONDIALE</h2>
        <p>Raccomandato e premiato dai media a livello mondiale, hai scelto il giusto programma di disinstallazione per il PC!</p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>SENZA RISCHIO - Garanzia di rimborso di 60 giorni</h4>
          <p>
            Siamo fiduciosi che l’edizione PRO sarà in grado di disinstallare rapidamente i programmi indesiderati sul tuo PC a un prezzo economico!
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
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Note: </dt>
      <dd>*.I dati potrebbero variare in base al sistema o computer.</dd>
      <dd>*.Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>


  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=" IObit Uninstalller PRO"></div>
      <div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> visitatori ora, solo <span class="gift">50</span> rimasti a questo costo!</p>
      </div>
      <p class="price"> <del>39,99€</del> <strong><b>14</b>,99€</strong></p>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=it-iu113pc1499&ref=it_iu113pc1499monitor<?php echo $refStr;?>&refs=it_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iumonitor1499-it');">
        <i></i> <span>ATTIVA ORA</span>
      </a>
    </div>
  </div>
  
  <div class="pop-over ">
    <h2>Sorpresa! Regali gratis per il nostro visitatore fortunato</h2>
    <h3>Attiva oggi IObit Uninstaller PRO per ottenere i tuoi regali gratis (Vale 69,94€)</h3>
    <p>Offerta limitata! Scade tra <strong><span class="count-time">60</span>s</strong></p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a class="buybtn buybtn-pop" 
       href="https://www.iobit.com/buy.php?product=it-iu113pcsdpf1499&ref=it_iu113pcsdpf1499monitor<?php echo $refStr;?>&refs=it_purchase_iu"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iumonitorgifts1499-it');" >
      Prendo I Miei Regali Gratis
    </a>
  </div>
  <div class="pop-bg "><span class="close">X</span></div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>