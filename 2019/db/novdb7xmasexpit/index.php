<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'itdbxnov_p' . $date;
  $c_name_t='itdbxnov_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    // $totalNum=$packsNum=rand(37,50);
    $totalNum=$packsNum=26;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_dbe'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Grande Offerta! sconti fino a 90% su Driver Booster PRO – Offerta di natale 2019 di IObit </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>CORREGGI E AGGIORNA TUTTI I DRIVER ORA!</h1>
        <p>PIÙ DRIVER ESCLUSIVI, PIÙ SICURI GLI AGGIORNAMENTI, PIÙ EFFICACE E VELOCE SARÀ IL TUO PC!</p>
      </div>
      <div class="left fl">
        <h4>OFFERTA DI NATALE</h4>
        <h2>SALE -90%</h2>
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <div class="chart">
          <div class="clist one">
            <span class="cost"><strong>26,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">12 Luglio</span>
          </div>
          <div class="clist two">
            <span class="cost"><strong><big>19</big>,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="text"><b class="pickNum"><b>26</b>*</b> pezzi rimasti, affrettati!</span>
          </div>
          <div class="clist three">
            <span class="cost"><strong>29,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">16 Luglio</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>19</big>,99€</strong> <del>174,78€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=it-db73pciusdpf1999&ref=it_db7xmasexp1911<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7xmasexp1911-it');">
            Approfittane Ora
          </a>
        </div>
      </div>
    </div>
    <span class="snow snow01"></span>
    <span class="snow snow02"></span>
    <span class="snow snow03"></span>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- map start -->
  <div class="map">
    <div class="wrapper">
      <h2>
        ESCLUSIVO DATABASE DI DRIVER, TECNOLOGIA AVANZATA DI AGGIORNAMENTO, <br>
        EFFICACISSIMO SARÀ IL TUO PC!
      </h2>
      <p>Oltre 10 milioni di utenti internazionali hanno scelto Driver Booster PRO</p>
    </div>
  </div>
  <!-- map end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <img class="feature-db" src="<?php echo getStaticUrl('images/feature-db.png')?>" alt=""/>
      <div class="scan"><b>Scansiona</b></div>
      <dl class="one clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
        <dd>
          <h3>AGGIORNAMENTO DI DRIVER <strong>PIÙ VELOCE E SEMPLICE</strong></h3>
          <p>
            Ti offre la soluzione di aggiornamento automatico che installa e aggiorna <br>i driver in modo automatico durante il tempo di inattività del tuo PC.
          </p>
        </dd>
      </dl>
      <dl class="two clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd>
          <h3>AGGIORNAMENTO DI DRIVER <strong>PIÙ SICURO</strong></h3>
          <p>
            Effettua automaticamente il backup e crea un punto di <br>ripristino del sistema prima dell'aggiornamento, <br>nel caso qualcosa vada storto.
          </p>
        </dd>
      </dl>
      <dl class="three clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>SISTEMA <strong>PIÙ STABILE</strong></h3>
          <p>
            Mantiene tutti i tuoi driver sempre <br>aggiornati così il sistema funziona in <br>modo più stabile.</p>
        </dd>
      </dl>
      <dl class="four clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
        <dd>
          <h3><strong>100%* PIÙ VELOCE</strong> IL DOWNLOAD</h3>
          <p>La velocità di download di driver è 100% più <br>veloce rispetto alla versione Free</p>
        </dd>
      </dl>
      <dl class="five clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
        <dd>
          <h3><strong>OTTIMA ESPERIENZA</strong> DI GIOCO</h3>
          <p>
            Mantiene i driver grafici e i driver di Game Ready sempre aggiornati al fine di <br> ottimizzare le prestazioni hardware e migliorare al massimo l’esperienza di gioco.
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <h2>Non lasciare che i problemi dei driver<br> degradino il tuo PC!</h2>
    <table>
      <thead>
        <tr>
          <th class="itema"><big>Problemi</big> del PC che potresti incontrare:</th>
          <th class="itemb"><big>Soluzioni</big> che puoi ottenere:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">
            L’aggiornamento manuale potrebbe farti<br> <span>perdere</span> aggiornamenti importanti
          </td>
          <td class="itemb">
            Aggiorna automaticamente i driver e<br> mantiene tutti i tuoi driver <span>sempre aggiornati</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            La velocità di download <span>limitata</span> potrebbe richiedere<br> più tempo per scaricare ogni driver
          </td>
          <td class="itemb">
            <span>Sblocca l’accelerazione</span> di download al 100% per ridurre<br> notevolmente il tempo di download dei driver
          </td>
        </tr>
        <tr>
          <td class="itema">
            Il database driver <span>ridotto</span> potrebbe non rispondere<br> alle esigenze dei tuoi driver
          </td>
          <td class="itemb">
            Il database <span>ingrandito</span> del 40% copre il 99%* in<br> più delle esigenze dei tuoi driver
          </td>
        </tr>
        <tr>
          <td class="itema">
            Il processo di backup manuale <span>complicato</span> potrebbe<br> richiederti molto tempo
          </td>
          <td class="itemb">
            Backup automatico ti garantisce aggiornamenti<br> sicuri con una <span>doppia sicurezza</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            I componenti di gioco obsoleti potrebbero <span>degradare</span><br> le prestazioni di gioco
          </td>
          <td class="itemb">
            Componenti di gioco esclusivi, rari e più recenti a<br> disposizione per garantire un’<span>ottima</span> esperienza di gioco
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Nessuna priorità</span> in più per aggiornare i più recenti<br> ed esclusivi driver, inclusi i driver game-ready
          </td>
          <td class="itemb">
            Essere sempre il primo a ottenere i <span>più recenti</span><br> ed esclusivi driver
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper clearfix">
      <h2>L’ultimo IObit Driver Booster 7 PRO ti offre<br> molto più di quanto pensi! </h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>Oltre 3.500.000</h3>
          <p>driver per PC supportati</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>20% IN PIÙ</h3>
          <p>di componenti supportati</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>20% più veloce</h3>
          <p>per la scansione di driver</p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>Blocca le notifiche</h3>
          <p>di Driver Booster quando si lavora a schermo intero</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Facciamo tutto il possibile per soddisfare i nostri<br> clienti ovunque essi siano!</h2>
    <div class="reviewbox">
      <h3>Cosa dicono di noi</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/chip.png')?>" alt="Chip"></li>
        <li class="two">
          <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund">
        </li>
        <li class="three">
          <img src="<?php echo getStaticUrl('images/fabio-tursi.png')?>" alt="Fabio Tursi">
        </li>
        <li class="four"><img src="<?php echo getStaticUrl('images/olorin89.png')?>" alt="Olorin 89"></li>
      </ul>
      <div class="details">
        <div>
          <h4>CHIP <span class="flag de"></span></h4>
          <p>
            "Driver Booster Pro: La funzionalità di download automatico di driver è disponibile solo nella versione Pro." – Tradotto da Tedesco
          </p>
        </div>
        <div class="active">
          <h4>Adam Backlund <span class="flag us"></span></h4>
          <p>
            "Driver Booster Pro è un'applicazione eccellente. Se avete molte applicazioni e dispositivi sul computer ma non avete tempo per aggiornarli manualmente come me, vi consiglio vivamente Driver Booster, vi aiuta ad aggiornare i driver in modo molto veloce e facile." – Tradotto da inglese
          </p>
        </div>
        <div>
          <h4>Fabio Tursi <span class="flag it"></span></h4>
          <p>
            “Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”
          </p>
        </div>
        <div>
          <h4>Olorin 89 <span class="flag it"></span></h4>
          <p>
            "Driver Booster è semplicemente il tool di aggiornamento driver che semplifica la vita a tutti."
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Premi a livello mondiale</h2>
      <p>
        Raccomandato e premiato dai media a livello mondiale, hai scelto il programma giusto per aggiornare i driver!
      </p>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service clearfix">
        <dl class="fl one">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h3>SENZA RISCHIO - Garanzia di rimborso di 60 giorni</h3>
            <p>
              Siamo fiduciosi che l’edizione PRO sarà in grado di offrire la migliore protezione per il tuo PC a un prezzo economico!
            </p>
          </dd>
        </dl>
        <dl class="fr two">
          <dt><h3>Accettiamo</h3></dt>
          <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
        </dl>
      </div>
      <dl class="note">
        <dt>Note:</dt>
        <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
        <dd>* Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/></div>
      <div class="center fl">
        <h2>Offerta esclusiva per il Natale 2019!</h2>
        <div class="numbox">
          <p>Affrettati, ne restano solo </p>
          <div id="flip" class="flipNum">
            <div class="listbox"><span class="list"><b>2</b></span></div>
            <div class="listbox"><span class="list"><b>6</b></span></div>
          </div>                      
        </div>
      </div>
      <div class="price fr">
        <p><strong>19,99€</strong> <del>174,78€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=it-db73pciusdpf1999&ref=it_db7xmasexp1911<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7xmasexp1911-it');">
          Rinnova e risparmia ora!
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>