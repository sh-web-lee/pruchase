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
	$c_name = 'itisuofficial_p' . $date;
	$c_name_t='itisuofficial_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(68,78);
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

$viewNum=rand(115,125);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Paga 0€ per ottenere nuovo IObit Software Updater 3 PRO </title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/it/index.php" target="_blank"></a>
			<div class="right-message">
				<h1>Benvenuto alla nostra  <strong>Preventa </strong></h1>
					<div class="number">
						Affrettati! Solo 
						<div id="topNum" class="giftNum">
              <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>
		          <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>

            </div>
            pezzi rimasti.  <strong class="viewNum"><?php echo $viewNum;?></strong> stanno visualizzando 
					</div>
					<p class="price">
						<span> <strong>0€</strong><sup>*</sup></span>
						<a href="https://www.iobit.com/buy.php?product=it-isu3preorder&ref=it_isu3preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-it'); " class="buybtn">PREORDINA ORA</a>
					</p>
				</div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>È il programma per aggiornare i software che stai cercando</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
				<dd>
					<strong>Database ampliato dei software</strong>
					<p>Supporta di aggiornare centinaia di <br> programmi inclusi quelli comunemente usati.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
				<dd>
					<strong>Aggiornamento in programma</strong>
					<p>Aggiorna facilmente i programmi obsoleti <br> direttamente all'interno di IObit Software Updater. </p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
				<dd>
					<strong>Aggiornamento automatico</strong>
					<p>Scarica e installa automaticamente gli <br> aggiornamenti all'ora pianificata.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
				<dd>
					<strong>Ridurre il rischio di infezioni</strong>
					<p>Aggiorna i programmi per riparare le vulnerabilità della sicurezza che potrebbero essere utilizzate dagli hacker.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
				<dd>
					<strong>Aggiornamento pulito</strong>
					<p>Nessun bundleware, barre degli strumenti o <br> programmi di installazione sarebbe allegato.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
				<dd>
					<strong>Consigli affidabili dei software</strong>
					<p>La maggior parte dei software più diffusi può essere scaricata rapidamente senza accedere alla pagina Web.</p>
				</dd>
			</dl>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Offre molto più di quelli che pensi</h2>
			<ul class="message-list">
				<li class="list01 active"><i></i> <span> Cancella automaticamente i file di installazione</span></li>
				<li class="list02"><i></i> <span>Crea automaticamente il punto di ripristino del sistema</span></li>
				<li class="list03"><i></i> Opzione di ignorare gli aggiornamenti</li>
				<li class="list04"><i></i> <span>Personalizza l'elenco di aggiornamento automatico</span></li>
				<li class="list05"><i></i> Senza pubblicità sponsorizzata </li>
			</ul>
			<div class="img-list">
				<div class="img-box">
					<ul class="box">
						<li data-num="0"><img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt=""/></li>
						<li data-num="1"><img src="<?php echo getStaticUrl('images/feature-list02.png')?>" alt=""/></li>
						<li data-num="2"><img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt=""/></li>
						<li data-num="3"><img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt=""/></li>
						<li data-num="4"><img src="<?php echo getStaticUrl('images/feature-list05.png')?>" alt=""/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
		<h2>Cosa dicono gli altri:</h2>
		<div class="review-box">
			<a href="javascript::" class="prev"></a>
			<div class="content">
				<div class="roll">
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""/></dt>
							<dd>
								Recensione del Media
								<strong>softpedia</strong>
							</dd>
						</dl>
						<p>IObit Software Updater è progettato per semplificare il lavoro di mantenere sempre aggiornati i programmi installati sul tuo PC. Esso può cercare e installare automaticamente le versioni nuove, anche senza l'input degli utenti. Inoltre, può aiutare a scaricare e installare i programmi popolari per vari scopi.</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Recensioni degli Utenti
								<strong>Nicolae Mocioc</strong>
							</dd>
						</dl>
						<p>Ho installato IObit Uninstaller dal mio amico, e sono molto soddisfatto della velocità di download e la semplicità che incontra i bisogni di un principiante per mantenere il suo computer personale. Grazie per questo! Pagherò la versione PRO e vorrei donare un po' per aiutarvi a continuare il vostro lavoro! Grazie mille!</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Recensioni degli Utenti
								<strong>Joshua Irving</strong>
							</dd>
						</dl>
						<p>Mi piace la funzionalità di aggiornamento automatico che è veloce ed efficiente, IObit software updater crea anche un punto di ripristino prima dell’installazione in caso che qualcosa non va correttamente. Mi piace anche che il software scarica e installa l’aggiornamento direttamente dai siti appropriati piuttosto che mi manda ad ogni sito individuale. Penso che sia uno dei migliori idea di IObit!</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Recensioni degli Utenti
								<strong>Nico Bremmer</strong>
							</dd>
						</dl>
						<p>È un ottimo software per aggiornare i programmi. È facile da usare. Questo software è molto chiaro, funziona in modo fluido e veloce. Anche il design è bello e moderno. È bello che tutti i programmi vecchi che vuoi aggiornare sono passati all’ultima versione. È anche bello che questo software ti offre i suggerimenti dei programmi nuovi ed essenziali per il tuo PC.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- bottom start -->
	<div class="awards">
		<h2>Premi mondiali </h2>
		<p>In quanto fidato e premiato da quei media di classe mondiale, sai che ottieni il programma giusto per aggiornare i software.</p>
		<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
	</div>
	<div class="bottom">
		<div class="wrapper">
			<p class="annotation">
				Nota: <br>
				*.Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €12,99 sulla tua carta di credito o account PayPal. Lo sconto del 55% sul prezzo originale di €29,99 è un bonus solo per i preordini! 
			</p>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer nomal">
		<div class="wrapper clearfix">
			<img src="<?php echo getStaticUrl('images/fl-isu-box.png')?>" class="img-box" alt=""/>
			<div class="number">
					Affrettati! Solo 
					<div id="topNum" class="giftNum">
            <span class="nwrap">
	          	<strong>
	          		<b>1</b>
	          	</strong>
	          </span>
	          <span class="nwrap">
	          	<strong>
	          		<b>1</b>
	          	</strong>
	          </span>

          </div>
          pezzi rimasti.  <strong class="viewNum"><?php echo $viewNum;?></strong> stanno visualizzando 
				</div>
			<p class="price">
				<span> <strong>0€</strong><sup>*</sup></span>
				<a href="https://www.iobit.com/buy.php?product=it-isu3preorder&ref=it_isu3preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-it'); " class="buybtn">PREORDINA ORA</a>
			</p>
		</div>
	</div>
	<!-- floatlayer end -->
	<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>