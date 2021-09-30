<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if (empty($_GET['ref'])) $_GET['ref'] = 'itaff_db8_2021trialendsale';
if(empty(json_decode(base64_decode($_GET['tdata'])))){
  $_GET['tdata']='eyJMZnRUb2RDb3VudCI6MCwiTGZ0RHJ2Q291bnQiOjAsIkxmdENtcENvdW50IjowLCJMZnRUcmxEYXkiOjF9';
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Risparmia il 70% su Driver Booster PRO - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<div class="title">
				<p>IL TUO TRIAL SCADRÀ TRA <b class="days">3</b> <span class="dayStr">GIORNI</span>!</p>
				<h1>
          L'ULTIMA OPPORTUNITÀ PER MANTENERE LE FUNZIONI <br>
          AVANZATE AL PREZZO MIGLIORE
        </h1>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO 6"/>
				</div>
				<div class="right fr">
					<h2>NON FAR SCAPPARE IL MIGLIOR PREZZO ESCLUSIVO PER TE!</h2>
          <div class="curvebox">
            <img src="<?php echo getStaticUrl('images/price-curve.png')?>" alt=""/>
            <span class="one">
							Prima dell’<i class="date0">11</i> <em class="month">Aprile</em>
						</span>
            <span class="two">
							<i class="date0">11</i> <em class="month">Aprile</em> a <i class="date1">21</i> <em class="month">Aprile</em>
						</span>
            <span class="three">
							<i class="date2">22</i> <em class="month">Aprile</em> a <i class="date3">24</i> <em class="month">Aprile</em>
						</span>
            <span class="four">
							Dopo il <i class="date4">24</i> <em class="month">Aprile</em>
						</span>
          </div>
					<ul class="price clearfix">
						<li><p>Oggi <b>€19,99</b></p> Sconto: più di 70%</li>
						<li class="last">
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=itaff-db83pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
							   onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialendsale')">
                APPROFITTANE SUBITO
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

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
	          <div class="free">LA TUA EDIZIONE ATTUALE</div>
	        </th>
	        <th class="space"></th>
	        <th class="itemb">
	          <div class="pro">DRIVER BOOSTER PRO
            </div>
	        </th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
	        <td class="virtue">Aggiornamento automatico dei driver durante i periodi di inattività del sistema</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">Aggiorna tutti i driver con un solo clic</td>
	        <td class="itema">Scadrà tra <span class="days">3</span> <span class="dayStr">giorni</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">Download di driver fino al 100% più veloce</td>
	        <td class="itema">Scadrà tra <span class="days">3</span> <span class="dayStr">giorni</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Riparazione degli errori dei dispositivi per un PC più sicuro</td>
	        <td class="itema">Scadrà tra <span class="days">3</span> <span class="dayStr">giorni</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
	        <td class="virtue">Backup automatico e ripristino sicuro</td>
	        <td class="itema">Scadrà tra <span class="days">3</span> <span class="dayStr">giorni</span></td>
	        <td class="space"></td>
	        <td class="itemb"><i class="all-icons red">√</i></td>
	      </tr>
	    </tbody>
	    <tfoot>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema"></th>
	        <th class="space"></th>
	        <th class="itemb">
	          <p><b>€19,99</b> <del>€74,85</del></p>
	          <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=itaff-db83pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialendsale')">
	          	<i class="all-icons"></i> Acquista Ora
	          </a>
            <p>1 Anno / 3 PC</p>
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
  </dl>
  <div class="copyright">
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><img class="floatbox" src="<?php echo getStaticUrl('images/db-bundle-boxsoldout.png')?>" alt="Driver Booster PRO"></div>
      <h2 class="fl"><sup>Più di</sup>70% <small>DI SCONTO</small></h2>
      <div class="price fr">
        <h3>Mantiene tutti i driver aggiornati per tutto l’anno!</h3>
        <a class="buybtn shadow other"
           href="https://www.iobit.com/buy.php?product=itaff-db83pc1999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'itaffdb82021trialendsale')">
          <i class="all-icons"></i> Acquista Ora
        </a>
        <p>1 Anno / 3 PC</p>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->
<script>
  var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
  transData = JSON.parse(transDataJson);
</script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>