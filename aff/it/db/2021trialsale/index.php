<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$transData=json_decode(base64_decode($_GET['tdata']));
if(($transData->LftTrlDay<=4)&&($_GET['to']=='trialbuy_8')){
  header("location:./trialbuy.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
}

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itdbseppa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>5){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=5;
    }
  }else{
    $packsNum=84;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$buyNum = ceil(microtime_float() * 1000 / 20000) -70807174;
$buyNum = number_format($buyNum);

// 剩余礼品数
$packsNum = ceil(microtime_float()*2000/20000);
//礼品数最大值
$packsCount=360;
$packsNum = 360-($packsNum%360);
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit;
}

//function get_line($file, $line)
//{
//  $fp = fopen($file, 'r');
//  $i = 0;
//  while (!feof($fp)) {
//    $i++;
//    $c = fgets($fp);
//    if ($i == $line) {
//      return $c;
//      break;
//    }
//  }
//  fclose($fp);
//}
//
//$name=explode(' ',trim(get_line('data/db_data.txt',rand(1,500))));
//$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
//$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$viewNum=rand(64,87);
//if($_GET['action']=='getPack'){
//  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'viewNum'=>$viewNum));
//  exit();
//}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if (empty($_GET['ref'])) $_GET['ref'] = 'itaff_db8_2021trialsale';

if(!in_array($_GET['to'],array('trialbuy_7','trialbuy_2','trialbuy_9','trialbuy_4','trialbuy_8'))){
  $_GET['to']='';
}
if(empty(json_decode(base64_decode($_GET['tdata'])))){
  $_GET['tdata']='W10=';
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Risparmia 80% su Driver Booster PRO + Regali gratis - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title changed">
      <p>LA TUA EDIZIONE DI PROVA SCADRÀ TRA POCO</p>
      <h1>Non farti scappare l’offerta esclusiva per gli utenti trial</h1>
    </div>
    <!-- panel -->
    <div class="panel clearfix">
      <!-- 1px -->
      <div class="box">
        <h2>-50%</h2>
        <div class="img-box"></div>
        <p class="line"><span></span>1 Anno/1 PC <span></span> </p>
        <p class="price">
          <strong>24</strong>
          <span>
          <del>59,85</del>
          <b>,99</b>
        </span>
        </p>
        <!-- db 1anno/1pc buybtn -->
        <a href="https://www.iobit.com/buy.php?product=itaff-db81pc2499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialsale')"
           class="buybtn db-box">
          <i></i>
          <span>ACQUISTA ORA</span>
        </a>
      </div>
      <!-- 3pc bundle -->
      <div class="box gift-box">
        <h2>-80%</h2>
        <div class="date">
          <h3>Scade tra: <strong>12</strong>m, <strong>12</strong>s, <strong>12</strong>ms</h3>
          <p>Soli <strong class="packsNum">40</strong> pezzi restanti!</p>
          <div class="bar">
            <span></span>
          </div>
        </div>
        <div class="img-box"></div>
        <p class="line"><span></span>1 Anno/3 PC <span></span> </p>
        <p class="price">
          <strong>24</strong>
          <span>
          <del>144,79</del>
          <b>,99</b>
        </span>
        </p>
        <!-- db+sd+pf 1anno/3pc buybtn -->
        <a href="https://www.iobit.com/buy.php?product=itaff-db83pcsdpf2499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialsale')"
           class="buybtn">
          <i></i>
          <span>APPROFITTANE SUBITO</span>
        </a>
        <p class="last">Più di <strong class="buyNum">**</strong> acquistati</p>
      </div>
      <div class="box three-pc ">
        <h2>-65%</h2>
        <div class="img-box"></div>
        <p class="line"><span></span>1 Anno/3 PC <span></span> </p>
        <p class="price">
          <strong>25</strong>
          <span>
          <del>74,85</del>
          <b>,99</b>
        </span>
        </p>
        <!-- db 1anno/3pc buybtn -->
        <a href="https://www.iobit.com/buy.php?product=itaff-db83pc2599&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialsale')"
           class="buybtn db-box">
          <i></i>
          <span>ACQUISTA ORA</span>
        </a>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature wrapper">
  <div class="original">
    <h2>PERCHÉ DRIVER BOOSTER PRO?</h2>
    <h3>
      Aggiorna <strong class="driverCount"></strong> <span class="driverStr">i driver obsoleti e componenti</span> di gioco per la più stabile prestazione del PC e la migliore esperienza di gioco. <br>
    </h3>
    <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan01.png" alt="">
    <div class="content">
      <!--one -->
      <dl class="one clearfix">
        <dt></dt>
        <dd>
          <h4>Prestazione stabile</h4>
          <p>
            Aggiorna i driver essenziali del <br>
            PC per evitare i blocchi o gli <br>
            arresti anomali.
          </p>
        </dd>
      </dl>
      <!-- two -->
      <dl class="two clearfix">
        <dt></dt>
        <dd>
          <h4>
            Funzionamento efficiente dei <br>
            dispositivi
          </h4>
          <p>
            Rileva e ripara gli errori dei dispositivi per <br>
            ridurre i problemi dell’hardware.
          </p>
        </dd>
      </dl>
      <!-- three -->
      <dl class="three clearfix">
        <dt></dt>
        <dd>
          <h4>
            Caricamento di gioco <br>
            veloce
          </h4>
          <p>
            Aggiorna componenti di gioco <br>
            appropriati per garantire un <br>
            caricamento fluido.
          </p>
        </dd>
      </dl>
      <!-- four -->
      <dl class="four clearfix">
        <dt></dt>
        <dd>
          <h4>Esperienza di gioco migliore</h4>
          <p>
            Aggiorna i driver in tempo per provare subito <br>
            le ultime funzionalità di gioco avanzate.
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <div class="update">
    <h2>PERCHÉ DRIVER BOOSTER PRO?</h2>
    <h3>
      Aggiorna <strong>30</strong> driver obsoleti e componenti di gioco per la più stabile prestazione del PC e la migliore esperienza di gioco. <br>
    </h3>
    <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan02.png" alt="">
    <div class="content">
      <!-- five -->
      <dl class="five top clearfix">
        <dt class="driveNum">15</dt>
        <dd><span class="fea-des1">aggiornamenti</span> di <br> driver <span class="fea-des2">disponibili</span> <sup>PRO</sup></dd>
      </dl>
      <!-- six -->
      <dl class="six top clearfix">
        <dt class="gameNum">15</dt>
        <dd><span class="fea-des1">aggiornamenti</span> di <br> componenti di gioco <br> <span class="fea-des2">disponibili</span> <sup>PRO</sup></dd>
      </dl>
      <!-- one -->
      <dl class="one clearfix">
        <dt></dt>
        <dd>
          <h4>Prestazione stabile</h4>
          <p>
            Aggiorna i driver essenziali del PC <br>
            per evitare i blocchi o gli arresti anomali.
          </p>
        </dd>
      </dl>
      <!-- two -->
      <dl class="two clearfix">
        <dt></dt>
        <dd>
          <h4>Funzionamento efficiente dei dispositivi</h4>
          <p>
            Rileva e ripara gli errori dei dispositivi per ridurre i <br>
            problemi dell’hardware.
          </p>
        </dd>
      </dl>
      <!-- three -->
      <dl class="three clearfix">
        <dt></dt>
        <dd>
          <h4>Caricamento di gioco veloce</h4>
          <p>
            Aggiorna componenti di gioco appropriati per <br>
            garantire un caricamento fluido.
          </p>
        </dd>
      </dl>
      <!-- four -->
      <dl class="four clearfix">
        <dt></dt>
        <dd>
          <h4>Esperienza di gioco migliore</h4>
          <p>
            Aggiorna i driver in tempo per provare subito <br>
            le ultime funzionalità di gioco avanzate.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>
    QUALI SONO LE DIFFERENZE TRA LA TUA EDIZIONE <br>
    ATTUALE E LA EDIZIONE PRO?
  </h2>
  <table>
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="itema">
        <div class="free">La Tua Edizione Attuale</div>
      </th>
      <th class="space"></th>
      <th class="itemb">
        <div class="free">Driver Booster PRO</div>
      </th>
      <th class="space"></th>
      <th class="itemc">
        <div class="pro"><span>3-in-1</span> Kit Completo</div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
      <td class="virtue">Aggiornamento automatico dei driver durante i periodi di inattività del sistema</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
      <td class="virtue">Aggiorna tutti i driver con un solo clic</td>
      <td class="itema"><p class="exTxt first">Meno di 7 giorni</p></td>
      <td class="space"></td>
      <td class="itemb changed"><b class="limite"><i class='all-icons black'>√</i></b></td>
      <td class="space"></td>
      <td class="itemc changed"><b class="limite"><i class='all-icons red'>√</i></b></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
      <td class="virtue">Download di driver fino al 100% più veloce</td>
      <td class="itema"><p class="exTxt">Meno di 7 giorni</p></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
      <td class="virtue">Riparazione degli errori dei dispositivi per un PC più sicuro</td>
      <td class="itema"><p class="exTxt">Meno di 7 giorni</p></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
      <td class="virtue">Backup automatico e ripristino sicuro</td>
      <td class="itema"><p class="exTxt">Meno di 7 giorni</p></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons black">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon04.png')?>" alt=""></td>
      <td class="virtue">Deframmentazione rapida e profonda per un PC più veloce</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon07.png')?>" alt=""></td>
      <td class="virtue">Garantisce la sicurezza dei file importanti, dei dati personali e della privacy</td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itemc"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th class="itema"></th>
      <th class="space"></th>
      <th class="itemb">
        <p><b>€25,99</b> <del>€74,85</del></p>
        <a class="buybtn other"
           href="https://www.iobit.com/buy.php?product=itaff-db83pc2599&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialsale')">
          <i class="all-icons"></i> Acquista Ora
        </a>
      </th>
      <th class="space"></th>
      <th class="itemc">
        <p><b>€24,99</b> <del>€144,79</del></p>
        <a class="buybtn other shadow"
           href="https://www.iobit.com/buy.php?product=itaff-db83pcsdpf2499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialsale')">
          <i class="all-icons"></i> Acquista Ora
        </a>
        <p id="tabcount" class="date tabcount">Mancano <b>04</b>M: <b>29</b>S: <b>44</b>MS</p>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- comparison end -->

<!-- review -->
<div class="review">
  <div class="wrapper ">
    <h2>CHE COSA DICONO DI DRIVER BOOSTER PRO?</h2>
    <div class="review-message">
      <span class="drop"></span>
      <dl class="wayne">
        <dt>
          <div class="img-box">
            <h4>Wayne Bowler</h4>
            <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster PRO ha funzionato perfettamente. Facile da usare, intuitivo e informativo. Ora che l'ho scoperto, non lo mollo più... Ottimo lavoro!" – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="myo">
        <dt>
          <div class="img-box">
            <h4>Myo Thuya</h4>
            <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>“Il mio computer è più veloce e sicuro che negli ultimi 8 mesi con Driver Booster PRO." – <em> Tradotto da Inglese</em></dd>
      </dl>
      <dl class="pcmag">
        <dt>
          <div class="img-box">
            <h4>PC-MAG</h4>
            <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"IObit fornisce vari software di windows, e Driver Booster PRO, il quale aggiorna automaticamente i driver, è uno dei migliori." – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="chip">
        <dt>
          <div class="img-box">
            <h4>chip</h4>
            <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster Pro: La funzionalità di download automatico di driver è disponibile solo nella edizione Pro." – <em>Tradotto da Tedesco</em></dd>
      </dl>
      <dl class="fabio red-round active">
        <dt>
          <div class="img-box">
            <h4>Fabio Tursi</h4>
            <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>”Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema.”</dd>
      </dl>
      <dl class="vector">
        <dt>
          <div class="img-box">
            <h4>Vector</h4>
            <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
            <div>
              <div class="line"></div>
        </dt>
        <dd>"Finalmente, ho trovato Driver Booster Pro, il programma perfetto per mantenere sempre pulito e aggiornato il mio sistema in modo super semplice." - <em>Tradotto da Giapponese</em></dd>
      </dl>
      <dl class="adam">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
            <h4>Adam Backlund</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Consiglio vivamente Driver Booster PRO: mantiene aggiornati i driver rapidamente e facilmente." – <em>Tradotto da Inglese</em></dd>
      </dl>
      <dl class="olnet">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
            <h4>01net</h4>
            <div>
              <div class="line"></div>
        </dt>
        <dd>"Tutte le operazioni possono essere finite con un solo clic, Driver Booster ti aiuta a risparmiare il tuo tempo e rendere il PC più stabile." – <em>Tradotto da Francese</em></dd>
      </dl>
      <dl class="olorin">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
            <h4>Olorin 89</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster è semplicemente il tool di aggiornamento driver che semplifica la vita a tutti."</dd>
      </dl>
      <dl class="html">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
            <h4>HTML-it</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster di IObit, ti offre una soluzione dell'aggiornamento dei driver più semplice con la sua più avanzata tecnologia."</dd>
      </dl>

    </div>
  </div>
</div>
<!-- end review -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Premi a livello mondiale</h2>
    <p>Raccomandato e premiato dai media a livello mondiale, hai scelto il programma giusto per aggiornare i driver!</p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- awards end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl class="fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
    <dd>
      <h3>SENZA RISCHIO - Garanzia di rimborso di 60 giorni</h3>
      <p>
        Siamo fiduciosi che l’edizione PRO sarà in grado di offrire la migliore <br>
        protezione per il tuo PC a un prezzo economico!
      </p>
    </dd>
  </dl>
  <dl class="fr">
    <dd><h3>Accettiamo</h3></dd>
    <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
  </dl>
</div>
<!-- service end -->

<!-- bottom start -->
<dl class="note wrapper">
  <dt>Note:</dt>
  <dd>* I dati potrebbero variare in base al sistema o computer.</dd>
  <dd>* Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.</dd>
  <dd>* Smart Defrag PRO / Protected Folder supportano 1 anno di iscrizione per 1 PC.</dd>
</dl>
<div class="copyright">
  <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img class="floatbox" src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt="Driver Booster PRO6"></div>
    <h2 class="fl">80% <small>DI SCONTO</small></h2>
    <div class="price fr">
      <h3>Mantiene tutti i driver aggiornati per tutto l’anno!</h3>
      <a class="buybtn shadow other"
         href="https://www.iobit.com/buy.php?product=itaff-db83pcsdpf2499&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialsale')">
        <i class="all-icons"></i> Acquista Ora
      </a>
      <p id="tabcount" class="date tabcount">Affrettati! Mancano <b>04</b>M: <b>29</b>S: <b>44</b>MS</p>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>
  var _src = "<?php echo getStaticUrl('images/db-bundle-boxsoldout.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=itaff-db83pc2599&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>";
  var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialsale')";
  var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
  transData = JSON.parse(transDataJson);
</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>