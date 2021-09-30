<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='enimfpre'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 48;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit;
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <meta name="format-detection" content="telephone=no,email=no,address=no"> 
  <title>Paga €0 per preordinare il nuovo IObit Malware Fighter PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <h1>Benvenuto alla nostra prevendita globale</h1>
      <p class="fast">2.000 pezzi limitati al giorno, muoviti per non perdere questa opportunità</p>
      <div class="clearfix">
        <div class="left-img"><span></span></div>
        <div class="right-message">
          <h2>IObit Malware Fighter 7 PRO</h2>
          <div class="progress">
            <p><strong class="packnum">*</strong> pezzi disponibili, <strong class="buyNum">*</strong> sono già stati acquistati!</p>
            <div class="bar">
              <span class="box"><span><span class="disappear"></span></span></span>
            </div>
          </div>
          <p class="price">
            Ora: <strong>€<b>0</b></strong> <del>€59,95</del>
          </p>
          <!-- buybtn -->
           <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-imf7preorder30d&ref=it_imf7preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_imf"
              onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderrc-it');">
                 <span>Pre-ordina Ora</span>
           </a>
        </div>
      </div>
      <div class="step">
        <span class="one">Se soddisfatto, otterrai uno sconto del 70% sul prezzo <br>originale 30 giorni dopo il pre-ordine</span>
        <strong>€0 pre-ordina oggi</strong>
        <span>Se insoddisfatto, annulla entro 30 giorni senza alcun addebito</span>
      </div>
    </div>
    
  </div>
  <!-- end banner -->
  <!-- feature -->
  <div class="feature">
    <div class="wrapper">
      <h2>PERCHÉ AGGIORNARE A IOBIT MALWARE FIGHTER 7 PRO?</h2>
      <h3>Le sorprendenti funzionalità PRO aumentano il livello di sicurezza del tuo PC</h3>
      <dl class="list01">
        <dt>Ultimo motore Bitdefender</dt>
        <dd>Con l'ultimo motore Bitdefender, <br>oltre <span>200.000.000</span> di minacce come <br>virus, malware, spyware, ecc. sono tenute <br>lontano dal tuo computer.</dd>
      </dl>
      <dl class="list02">
        <dt>File sicuri e protetti da password</dt>
        <dd>I file importanti vengono tenuti separati dagli altri e <br>nessuno può accedervi senza la password.</dd>
      </dl>
      <dl class="list03">
        <dt>Nessun attacco Ransomware</dt>
        <dd>Non dovrai più preoccuparti degli hacker che <br>irrompono nel tuo computer e crittografano i <br>tuoi file e dati personali importanti.</dd>
      </dl>
      <dl class="list04">
        <dt>Navigazione online sicura</dt>
        <dd>Cancella automaticamente i cookie e le tracce per <br>bloccare il monitoraggio online invasivo e proteggere <br>la tua privacy. </dd>
      </dl>

      <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt="" class="img-box">
    </div>
  </div>
  <!-- benfits -->
  <div class="compar-tab">
    <div class="wrapper">
      <h2>Ulteriori funzionalità PRO offrono una protezione completa per il tuo PC</h2>
      <table border="0" cellspacing="0" cellpadding= "0" width="100%">
        <thead>
          <tr>
            <th class="itema"></th>
            <th class="space"></th>
            <th class="itemb"><span>Versione corrente</span></th>
            <th class="space"></th>
            <th class="itemc">Cosa fornisce PRO</th>
          </tr>
        </thead>
        <tbody>
          <tr class="protection">
            <td colspan="5">Protezione per PC</td>
          </tr>
          <tr>
            <td class="itema">Database anti-malware</td>
            <td class="space"></td>
            <td class="itemb">3.000.000</td>
            <td class="space"></td>
            <td class="itemc">203.000.000</td>
          </tr>
          <tr>
            <td class="itema">Protezione in tempo reale</td>
            <td class="space"></td>
            <td class="itemb size14">Basica</td>
            <td class="space"></td>
            <td class="itemc size14">Completa</td>
          </tr>
          <tr>
            <td class="itema">Maggiore velocità di rilevamento con doppio motore</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Prevenzione di virus tramite USB</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Aggiornamento automatico del database</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr class="protection">
            <td colspan="5">Protezione di dati</td>
          </tr>
           <tr>
            <td class="itema">Blocca i ransomware</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Protegge i file con le password</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr class="protection">
            <td colspan="5">Protezione di navigazione</td>
          </tr>
          <tr>
            <td class="itema">Blocca siti Web e annunci pubblicitari dannosi</td>
            <td class="space"></td>
            <td class="itemb"><i></i></td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Impedisce il download di file dannosi</td>
            <td class="space"></td>
            <td class="itemb"><i></i></td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
          <tr>
            <td class="itema">Arresta il monitoraggio online maligno</td>
            <td class="space"></td>
            <td class="itemb">-</td>
            <td class="space"></td>
            <td class="itemc"><i></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- end benfits -->
  <div class="between-buy wrapper">
    <h2>SBLOCCA ORA TUTTE LE FUNZIONI PRO PER UNA PROTEZIONE POTENTE</h2>
    <p class="price">
      Ora: <strong>€<b>0</b></strong> <del>€59,95</del>
    </p>
    <!-- buybtn -->
     <a class="buybtn" href="https://www.iobit.com/buy.php?product=it-imf7preorder30d&ref=it_imf7preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_imf"
        onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderrc-it');">
           <span>Pre-ordina Ora</span>
     </a>
     <p class="last"><strong class="packnum">*</strong> pezzi disponibili, <strong class="buyNum">*</strong> sono già stati acquistati!</p>
  </div>

  <div class="review wrapper">
    <h2>Cosa dicono gli altri utenti e media</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Recensioni dei media</h2>
              <h4>IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojan, worm, keylogger e bot.</h4>
              <p>Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV. IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots. - Tradotto da inglese</p>
              <cite>Software.Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/giardiniblog-com.png')?>" alt="giardiniblog.com"></dt>
            <dd>
              <h2>Recensioni dei media</h2>
              <h4>IObit Malware Fighter è decisamente il miglior sistema per proteggere un PC in mano ad un utente inesperto dall'attacco dei ransomware, così da evitare anche la perdita dei file.</h4>
              <p>Questo programma vanta un efficace sistema anti-ransomware che impedisce la criptazione dei file e il blocco delle attività del PC, così da rendere completamente innocui qualsiasi tipo di ransomware e in generale qualsiasi tipo di malware.</p>
              <cite>giardiniblog.com</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <h4>IObit Malware Fighter PRO scansiona il mio PC portatile senza influenzare le prestazioni. Ho raccomandato questo ottimo prodotto ai miei amici.</h4>
              <p>Sono molto soddisfatto con il vostro prodotto – IObit Malware Fighter. Prima di conoscerlo le interferenze maligne mi causavano moltissimi problemi, non potevo guardare un film per intero o godermi un concerto. Grazie al vostro programma ogni operazione è chiara, sicura e ben protetta. IObit Malware Fighter scansiona il mio PC portatile senza influenzare le prestazioni, per questo motivo l’ho consigliato a due dei miei amici. - Tradotto da inglese</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/dave-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>Recensioni degli utenti</h2>
              <h4>Molto semplice da usare e la scansione è più veloce!</h4>
              <p>Voglio ringraziare tutto lo staff di IObit per il loro impegno nel rilasciare sempre i programmi migliori. Questo aggiornamento è eccellente per gli utenti. La scansione è molto più veloce ed è facilissimo da usare. Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo non deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate il migliore, IObit Malware Fighter. - Tradotto da inglese</p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>                 
        </div>               
    </div>
  </div>
  <div class="bottom">
      <div class="award wrapper ">
        <h2>Premi a livello mondiale</h2>
        <p>Raccomandato e premiato dai media a livello mondiale, hai scelto il programma giusto per proteggere il PC!</p>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>SENZA RISCHIO - Garanzia di rimborso di 60 giorni</h4>
          <p>
           Siamo fiduciosi che l’edizione PRO sarà in grado di offrire la migliore protezione per il tuo PC a un prezzo economico! 
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
      <dd>* Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €17,99 sulla tua carta di credito o account PayPal. Lo sconto del 70% sul prezzo originale di €59,95 è un bonus solo per i preordini!</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati </p>
    </div>
  </div>



  <div class="float-right">
    <img src="<?php echo getStaticUrl('images/people.png')?>"> <p><span class="viewNum"><?php echo $viewNum;?></span> stanno visualizzando <br>questa pagina ora!</p>
  </div>
  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-imf-box.png')?>" alt=" IObit Malware Fighter 7 PRO"></div>
      <div class="progress">
        <p><strong class="packnum">*</strong> pezzi disponibili, <strong class="buyNum">*</strong> sono già stati acquistati!</p>
        <div class="bar">
          <span class="box"><span><span class="disappear"></span></span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-imf7preorder30d&ref=it_imf7preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_imf"
                 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderrc-it');">
        <span>Pre-ordina Ora - €0</span>
      </a>
    </div>
  </div>
  <div class="pop-over ">
    <h2>OOPS! Hai perso la nostra prevendita di €0</h2>
    <h3>Non perdere di nuovo questo sconto del <strong>70%</strong></h3>
    <img src="<?php echo getStaticUrl('images/pop-img-box.png')?>" alt=" IObit Malware Fighter 7 PRO" class="img-box">
    <div class="message">
       <p><strong>€<b>17</b>,99</strong> <del>€59,95</del></p>
       <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=it-imf7preorder3pc1799&ref=it_imf7preorderrc1799<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderrc1799-it');">
         <span>Pre-ordina Ora</span>
      </a>
      <p class="last">Abbonamento 1 Anno / 3 PC</p>
    </div>
   
  </div>
  <div class="pop-bg "></div>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>