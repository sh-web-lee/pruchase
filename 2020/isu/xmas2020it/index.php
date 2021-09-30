<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'isuxmasde_p' . $date;
	$c_name_t='isuxmasde_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(78,98);
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

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].'-'.$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="de">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Offerta di Natale, fino al 90% di sconto su IObit Software Updater – IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
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
			<h1>FLASH SALE zur Markteinführung</h1>
			<div class="img-box">
				<img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
        <img class="slist snow" src="<?php echo getStaticUrl('images/snow.png')?>" alt=""/>
        <img class="slist cap" src="<?php echo getStaticUrl('images/cap.png')?>" alt=""/>
			</div>
			<div class="right-message">
          <h2><span>3 REGALI GRATIS</span> limitati per i primi 100 acquisti</h2>
          <div class="progress">
            <p><strong class="viewNum"><?php echo $viewNum;?></strong> visitatori <span class="buyNum">51</span> posti restanti</p>
            <div class="bar">
              <span class="box"><span class="disappear"></span></span>
            </div>
          </div>
          <p class="price">
            <span>Ora  <strong><b>12</b>,99€</strong></span>
            <a href="http://www.iobit.com/buy.php?product=it-isu33pciusdpf1299&ref=it_isu33pciusdpf1299purchasexmas2020<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase3pciusdpfxmas2020-it');" class="buybtn">ATTIVA ORA</a>
          </p>
          <ul class="list">
          	<li>Originale  <span>139,92€</span>
          	</li>
          	<li>Sconto  <span>90% </span></li>
          	<li>Risparmi  <span>126,93€</span></li>
          </ul>
        </div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>Perché IObit Software Updater PRO?</h2>
			<img src="<?php echo getStaticUrl('images/intro-box.png')?>" class="img-box" alt="IObi
      t Software Update PRO"/>
      <span class="oldoman"></span>
			<div class="left-message">
				<h3><i></i>Mantiene i software sempre aggiornati</h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
					<dd><strong>Protezione</strong></dd>
					<dd>Software aggiornati riparano le <br> falle di sicurezza prevenendo gli <br>  attacchi informatici.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
					<dd><strong>Miglioramento</strong></dd>
					<dd>Software aggiornati riportano le <br> nuove funzioni e migliorano la <br>  prestazione e la stabilità del PC.</dd>
				</dl>
			</div>
			<div class="right-message">
				<h3><i></i> <span>Aggiorna i software in modo semplice </span></h3>
				<dl class="list01">
					<dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
					<dd><strong>Illimitato</strong> Aggiornamenti illimitati dei software con 1 clic, scarica e installa automaticamente i programmi corretti senza aprire il browser Web. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
					<dd><strong>Automatico</strong> Aggiornamento programmato ti aiuta a scaricare e installare gli aggiornamenti in modo automatico e silenzioso quando sono disponibili. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
					<dd><strong>Sicuro</strong> Crea automaticamente il punto di ripristino prima di installare nel caso qualcosa vada storto. </dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>IObit Software Updater 3 PRO ti aiuta a restare aggiornato in modo semplice, con zero sforzi!</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>
				</div>
				<div class="right fr">
					<ul class="feature-list">
					<li><i class="all-icons">◎</i>1 clic per aggiornare il software, senza bundlware e senza limiti di quantità (<span style="width:auto;">Versione gratuita: 2 al giorno</span>)</li>
					<li><i class="all-icons">◎</i>Scarica e installa gli aggiornamenti in modo silenzioso e rapido</li>
					<li><i class="all-icons">◎</i>Imposta automaticamente le scansioni e gli aggiornamenti secondo un tempo programmato</li>
					<li><i class="all-icons">◎</i>Esclude determinati programmi dall'aggiornamento</li>
					<li><i class="all-icons">◎</i>Supporta il download diretto degli strumenti di telelavoro</li>
					<li><i class="all-icons">◎</i>Opzione di creare automaticamente un punto di ripristino prima d’installazione</li>
					<li><i class="all-icons">◎</i>Opzione di cancellare automaticamente i file di setup dopo l’installazione</li>
					<li><i class="all-icons">◎</i>Disattiva le pubblicità sponsorizzate nella versione free</li>
					</ul>
					<p class="price">
					<!-- price -->
					<span>Ora <strong><b>12</b>,99</strong>€ <span>Solo <b class="buyNum">50</b> restanti, affrettati!</span></span>
					<!-- buybtn -->
					<a class="buybtn"
						href="http://www.iobit.com/buy.php?product=it-isu33pciusdpf1299&ref=it_isu33pciusdpf1299purchasexmas2020<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_isu"
						onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase3pciusdpfxmas2020-it')">
						ATTIVA ORA
					</a>
					</p>
				</div>
			</div>
		</div>
	</div>
	<!-- gift-message start -->
<div class="gift-message">
  <div class="wrapper">
    <h2>Quali vantaggi otterrai con questi regali PRO gratuiti?</h2>
    <dl>
      <dt>
        <img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt="IObit Uninstaller PRO"/>
      </dt>
      <dd>
        <h3>IObit Uninstaller PRO</h3>
        <strong>0€</strong> <del>29,99€</del> 1 Anno / 1 PC
        <p>Rimuovi tutti le tracce dei programmi  <br>più difficili da rimuovere!</p>
      </dd>
    </dl>
	<dl>
      <dt>
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="Smart Defrag PRO"/>
      </dt>
      <dd>
        <h3>Smart Defrag PRO</h3>
        <strong>0€</strong> <del>29,99€</del> 1 Anno / 1 PC
        <p>Massimizza l’ottimizzazione del <br> disco rigido del PC!</p>
      </dd>
    </dl>
    <dl class="pf">
      <dt>
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="Protected Folder"/>
      </dt>
      <dd>
        <h3>Protected Folder</h3>
        <strong>0€</strong> <del>39,95€</del> 1 Anno / 1 PC
        <P>Non preoccuparti più della perdita dei tuoi <br> dati e della tua privacy!</P>
      </dd>
    </dl>
  </div>
</div>
<!-- gift-message end -->

<!-- review start -->
<div class="review ">
  <div class="wrapper">
    <h2>Cosa dicono gli altri?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
          <dd>
            <h2>Recensione del Media</h2>
            <p>IObit Software Updater è progettato per semplificare il lavoro di mantenere sempre aggiornati i programmi installati sul tuo PC. Esso può cercare e installare automaticamente le versioni nuove, anche senza l'input degli utenti. Inoltre, può aiutare a scaricare e installare i programmi popolari per vari scopi.</p>
            <cite>softpedia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
          <dd>
            <h2>Recensioni degli Utenti</h2>
            <p>Ho installato IObit Software Updater dal mio amico, e sono molto soddisfato della velocità di download e la semplicità che incontra i bisogni di un principiante per mantenere il suo computer personale. Grazie per questo! Pagherò la versione PRO e vorrei donare un pò per aiutarvi a continuare il vostro lavoro! Grazie mille!</p>
            <cite>Nicolae Mocioc</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
          <dd>
            <h2>Recensioni degli Utenti</h2>
            <p>Mi piace la funzionlità di aggiornamento automatico che è veloce ed efficiente, IObit software updater crea anche un punto di ripristino prima dell’installazione in caso che qualcosa non va corretamente. Mi piace anche che il software scarica e installa l’aggiornamento direttamente dai siti approriati piuttosto che mi manda ad ogni sito individuale. Penso che sia uno dei migliori idea di IObit! </p>
            <cite>Joshua Irving</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
          <dd>
            <h2>Recensioni degli Utenti</h2>
            <p>È un ottimo software per aggiornare i programmi. È facile da usare. Questo software è molto chiaro, funziona in modo fluido e veloce. Anche il design è bello e moderno. È bello che tutti i programmi vecchi che vuoi aggiornare sono passati all’ultima versione. È anche bello che questo software ti offre i suggerimenti dei programmi nuovi e essenziali per il tuo PC. </p>
            <cite>Nico Bremmer</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt>Affidato dei media </dt>
        <dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
      </dl>
      <dl class="right">
        <dt>Pagamento supportato </dt>
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
      </dl>
    </div>
    <dl class="annotation">
      <dt>Note:</dt>
      <dd>
        Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Tutti i diritti riservati</p>
  </div>
</div>
<!-- bottom end -->
<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      IObit Software Update PRO
    </div>
    <div class="number">
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
      </div>
      <p><span class="viewNum"><?php echo $viewNum;?></span> visitatori, <strong class="buyNum">75</strong> pacchetti restanti</p>
    </div>
    <p class="price">
      <!-- price -->
      <span><strong><b>12</b>,99€</strong><del>139,92€</del></span>
      <!-- buybtn -->
      <a class="buybtn"
      
         href="http://www.iobit.com/buy.php?product=it-isu33pciusdpf1299&ref=it_isu33pciusdpf1299purchasexmas2020<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_isu"
         onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase3pciusdpfxmas2020-it')">
        ATTIVA ORA
      </a>
    </p>
  </div>
</div>
<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>