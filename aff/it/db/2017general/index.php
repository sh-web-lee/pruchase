<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
$buyLink="https://www.iobit.com/buy.php?product=itaff-db83pc2024&ref=".(empty($_GET['ref'])?'itaff_db8_2017general':$_GET['ref'])."&aff=".$affStr;
$refStr=$_GET['ref'];
$buytext = "65%";
if (preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

    $buyLink = "https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993";

    if ($arr[1][0] != null) {

        $buyLink = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/535215/4385";
    }
}else{
    if(preg_match('/fspi([0-9]*)/',$refStr,$matches)||preg_match('/ir([0-9]*)/',$refStr,$matches)){
        $buyLink='https://iobit.onfastspring.com/driver-booster-pro-1-year-subscription-3-pcs-1993';
        $pregNum=$matches[1];
        if(!empty($pregNum)){
            $buyLink='http://macbooster.7eer.net/c/'.$pregNum.'/558401/4385';
        }
    }
}


function statistic($status){
  try{
    $dsn="mysql:host=purchase-iobit-com-db.cylexcs6bned.us-east-1.rds.amazonaws.com;dbname=purchase";
    $pdo=new PDO($dsn,'purchase','PXdNZdCE68iz');
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $pdo->query("set names utf8");
    $insertSql="insert into affdbgeneral(ip,refStr,addtime,status) values(:ip,:refStr,:addtime,:status)";
    $pre=$pdo->prepare($insertSql);

    $ip=getIP();
    $refStr=$_GET['ref'].'-'.$_GET['aff'];
    $addTime=time();
    $pre->bindParam(':ip',$ip);
    $pre->bindParam(':refStr',$refStr);
    $pre->bindParam(':addtime',$addTime);
    $pre->bindParam(':status',$status);
    $pre->execute();
  }catch (PDOException $e){
  }
}

if($_GET['action']=='downloadCount'){
  statistic(2);
  exit();
}

statistic(0);
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Goditi un PC più stabile con Driver Booster PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <h2>Lo strumento indespensabile per l’aggiornamento dei driver</h2>
      <h1>Driver Booster PRO</h1>
      <p>Aggiorna in modo rapido e sicuro i tuoi driver obsoleti con un solo clic</p>
      <ul class="btnbox clearfix">
        <li class="first">
          <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'itdb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'itdb6g')" data-text="Download gratuito">
            <span>Download gratuito </span>
            <i class="all-icons"></i>
          </a>
		  <p style="float: left;text-align: center;width: 280px; margin-top: 0;">Supporta Windows XP/Vista/7/8/8.1/10</p>
        </li>
        <li>
          <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82017general');dlCount()" data-text="Acquista ora e risparmia il <?php echo $buytext; ?> >>">
            <span>Acquista ora e risparmia il <b><?php echo $buytext; ?></b> >></span>
          </a>
        </li>
      </ul>
      <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" /></div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper">
        <h2>Quali problemi del PC hai con driver e componenti di gioco obsoleti?</h2>
        <div class="clearfix">
          <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt="" />
          <div class="describe fr">
            <div class="list">
              <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="" />
              <span><b>! </b>Arresti anomali e blocchi frequenti del sistema</span>
            </div>
            <div class="list two">
              <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="" />
              <span><b>! </b>Interruzione occasionale della connessione di rete</span>
            </div>
            <div class="list three">
              <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="" />
              <span><b>! </b>Funzionamento non corretto della stampante e degli altri dispositivi esterni</span>
            </div>
            <div class="list four">
              <img src="<?php echo getStaticUrl('images/icons04.png')?>" alt="" />
              <span><b>! </b>Nessun errore audio mentre si ascolta la musica o si parla con altre persone</span>
            </div>
            <div class="list five">
              <img src="<?php echo getStaticUrl('images/icons05.png')?>" alt="" />
              <span><b>! </b>Scarsa prestazione di gioco, arresto anomalo o blocco del gioco causato dal driver grafico </span>
            </div>
          </div>
        </div>
        <div class="learn">
          <a href="javascript: void(0)">Clicca qui per maggiori informazioni sui driver</a>
          <div class="drivers">
            <p>I driver sono pezzi di software di cui ogni dispositivo o componente hardware ha bisogno per funzionare. Se colleghi un dispositivo al PC senza installarne il driver appropriato, Windows non saprà cosa farne.</p>
            <p>I driver consentono al tuo sistema operativo di sapere qual’è il dispositivo e come utilizzarlo.</p>
          </div>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- threepoints start -->
    <div class="threepoints">
      <div class="wrapper">
        <h2>Cosa fa Driver Booster PRO?</h2>
        <div class="clearfix">
          <div class="pointist one">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point01.png')?>" alt="" /></div>
            <b>1</b>
            <h4>Rileva e corregge i driver con un clic</h4>
            <p>
				Rileva e corregge facilmente tutti <br>i driver obsoleti, mancanti ed <br>errati in un'unica soluzione.
            </p>
          </div>
          <div class="pointist two">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point02.png')?>" alt="" /></div>
            <b>2<span class="arrow"></span><span class="arrow right"></span></b>
            <h4>Scarica i driver in modo sicuro e veloce</h4>
            <p>
				Esegue un backup automatico e crea <br>un punto di ripristino del sistema prima <br>dell'aggiornamento, in caso di imprevisti.
            </p>
          </div>
          <div class="pointist three">
            <div class="point-img"><img src="<?php echo getStaticUrl('images/point03.png')?>" alt="" /></div>
            <b>3</b>
            <h4>Goditi una fluida esperienza informatica e di gioco</h4>
            <p>
				I driver Game Ready più recenti e di diversi<br> marchi aiutano a migliorare le prestazioni, <br>correggere i bug e migliorare l'esperienza di gioco.
              
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- threepoints end -->

    <!-- centbuy start -->
    <div class="centbuy">
		<h2>Get Your One-stop Solution for Frustrating Device Driver Problems!</h2>
      <div class="wrapper">
        
        <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82017general');dlCount()" data-text="Acquista ora e risparmia il <?php echo $buytext; ?> >>">
          <span>Acquista ora e risparmia il <b><?php echo $buytext; ?></b> >></span>
        </a>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Supporta l'aggiornamento di oltre 4.500.000 driver di dispositivo</h2>
          <span></span>
          <p>
            Con Driver Booster PRO ottieni automaticamente i driver e gli aggiornamenti consigliati per il tuo hardware. Supportando oltre 4.500.000 driver di dispositivo, Driver Booster PRO può risolvere i problemi di driver mancanti / difettosi / obsoleti per aiutarti a ridurre i blocchi e gli arresti anomali del sistema.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" />
        <div class="text">
          <h2>Aggiornamento sicuro dei driver</h2>
          <span></span>
          <p>
            Driver Booster PRO esegue automaticamente il backup di una copia precedente e crea un punto di ripristino del sistema prima dell'aggiornamento, nel caso in cui accada qualcosa di imprevisto. Per garantire la sicurezza del computer degli utenti, Driver Booster PRO fornisce solo driver WHQL qualificati e la connessione HTTPS recentemente adottata può crittografare la tua connessione con il server durante il download dei driver.
          </p>
        </div>
      </div>
    </div>

    <div class="feature">
      <div class="wrapper clearfix">
        <div class="text">
          <h2>Goditi una fluida esperienza di gioco</h2>
          <span></span>
          <p>
            Driver Booster PRO mantiene facilmente aggiornati i driver grafici e i driver Game Ready per ottenere le migliori prestazioni dell'hardware e portare il gioco al livello successivo. Inoltre, interrompe rapidamente i processi in background e il Servizio Windows non necessario per sbloccare il pieno potenziale del tuo gioco. Sono anche disponibili componenti di gioco per la maggior parte dei giochi per PC per aiutarti ad avviare con successo il gioco.
          </p>
        </div>
        <img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" />
      </div>
    </div>

    <div class="feature gray">
      <div class="wrapper clearfix">
        <img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" />
        <div class="text">
          <h2 style="margin-top: 60px;">Ti fa risparmiare tempo e scarica in modo intelligente i driver</h2>
          <span></span>
          <p>
           Eliminando file inutili del pacchetto di installazione e comprimendo nettamente il pacchetto di installazione, Driver Booster ti consente di risparmiare tempo sull'aggiornamento dei driver e non disturba la tua routine. Driver Booster PRO offre anche una maggiore velocità di download e consente il download e l'installazione anche durante i tempi di inattività del sistema, permettendo agli utenti di concentrarsi sul proprio lavoro senza essere disturbati.
          </p>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- footbuy start -->
    <div class="centbuy footbuy">
      <div class="wrapper">
        <h3>Come mantenere aggiornati i driver del PC?  <span>Prova Driver Booster PRO e fallo con un clic!</span></h3>
        <ul class="btnbox clearfix">
          <li class="first">
            <a class="btn down" href="./download.php?ref=<?php echo (empty($_GET['ref'])?'itdb6g':$_GET['ref']);?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'dbdl', 'download', 'itdb6g')" data-text="Download gratuito">
              <span>Download gratuito </span>
              <i class="all-icons"></i>
            </a>
          </li>
          <li>
            <a class="btn buy" href="<?php echo $buyLink;?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82017general');dlCount()" data-text="Acquista ora e risparmia il <?php echo $buytext; ?> >>">
              <span>Acquista ora e risparmia il <b><?php echo $buytext; ?></b> >></span>
            </a>
          </li>
        </ul>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- brands start -->
    <div class="brands wrapper">
      <h2>Supporta l'aggiornamento dei driver di oltre 500 grandi marchi </h2>
      <p>con un solo clic</p>
      <ul class="clearfix">
        <li><img src="<?php echo getStaticUrl('images/hp.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/microsoft.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/canon.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/dell.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/nvidia.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/snmsung.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/lg.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/amd.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/brother.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/intel.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/sony.png')?>" alt=""/></li>
        <li><img src="<?php echo getStaticUrl('images/logitech.png')?>" alt=""/></li>
      </ul>
    </div>
    <!-- brands end -->

    <!-- review start -->
    <div class="review">
      <div class="wrapper">
        <div class="reviews active">
          <h2>Recensioni dei media</h2>
          <h3>“IObit offre molte utilità per il PC e Driver Booster PRO, che aggiorna automaticamente i driver, è uno dei migliori.”</h3>
          <p>“La funzionalità di base di Driver Booster PRO è resa ancora più attraente grazie all'inclusione di più licenze a un prezzo molto conveniente, oltre che a un'interfaccia ottima per la visualizzazione di informazioni specifiche relative all'hardware. I concorrenti Ashampoo Driver Updater e SlimWare Utilities DriverUpdate offrono funzionalità interessanti, ma IObit Driver Booster PRO è un passo più avanti.”</p>
        </div>
        <div class="reviews">
          <h2>Recensioni degli utenti</h2>
          <h3></h3>
          <p>“Finalmente, con IObit Driver Booster Pro ho trovato il programma perfetto per mantenere pulito e aggiornato il mio sistema. Grazie alla potenza del suo motore, e all’enorme database, è un’applicazione che non dovrebbe mancare in nessun computer.”</p>
        </div>
        <div class="reviews">
          <h2>Recensioni degli utenti</h2>
          <h3></h3>
          <p>“Che sorpresa utilizzare il nuovo Driver Booster di IObit. Prima che si installasse e iniziasse l’aggiornamento, non sapevo dove fosse la metà dei miei programmi sul mio PC e non se ne parlava proprio di aggionarli. Una volta completato l’aggiornamento, mi è sembrato che il mio PC fosse stato completamente ristrutturato. Sensazionale!”</p>
        </div>
        <div class="reviews">
          <h2>Recensioni degli utenti</h2>
          <h3></h3>
          <p>“Driver Booster 7 mi ha aiutato a risolvere i problemi di lentezza con il mio giocatore laptop senza crasharlo. Quando avevo provato ad aggiornare i driver, il mio computer si era bloccato e avevo dovutop formattarlo per ripristinare tutte le sue funzioni, ma ora con Driver Booster 7 non ho nessun problema. Facile da usare e con download veloci, fino ad ora è il migliore strumento presente sul mercato.”</p>
        </div>
        <ul class="handle clearfix">
          <li class="active">
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC Magazine" />
              <span></span>
            </div>
            <strong>PC Magazine</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/Fabio-Tursi.png')?>" alt="Fabio Tursi"/>
              <span></span>
            </div>
            <strong>Fabio Tursi</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"/>
              <span></span>
            </div>
            <strong>Harold Barr</strong>
          </li>
          <li>
            <div class="badge">
              <img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"/>
              <span></span>
            </div>
            <strong>Carlos Alexandre Veríssimo</strong>
          </li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
  <!-- container end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><h5>100% Pulito</h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" /></dd>
    </dl>
    <dl class="two">
      <dt><h5>Rimborso di 60 giorni</h5></dt>
      <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dd>
    </dl>
    <dl>
      <dt><h5>Supporto 24/7</h5></dt>
      <dd>Supporto tecnico gratuito su richiesta 24/7</dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer">
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div class="backtotop">top</div>
  <!-- backtotop end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>