<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'itiujune_p' . $date;
	$c_name_t='itiujune_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(41,59);
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ottieni l'ultimo IObit Uninstalller PRO a €0</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner" data-name="animation">
		<div class="wrapper">
			<div class="top">
				<a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">
				  IObit
				</a>
				<div class="icon">
					<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
					IObit Uninstaller 10
				</div>
			</div>
			<div class="clearfix">
				<div class="left-img">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
				</div>
				<div class="right fr">
					<h1 data-name="default">Benvenuto alla nostra prevendita</h1>
					<h2 data-name="default">€0 per ottenere il migliore programma di disinstallare</h2>
					<div class="number" data-name="default">
						<div id="reduce" class="reduceNum">
							<div class="listbox"><span class="list"><b>5</b></span></div>
							<div class="listbox"><span class="list"><b>0</b></span></div>
						</div>
						rimasti ora
						<div class="bar">
							<span></span>
						</div>
					</div>
					<div class="price" data-name="default">
						<strong>€0 <sup>*</sup></strong>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=it-iu10preorder&ref=it_iu10preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_iu"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10preorderofficial-it');">
						  PREORDINA ORA
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro" data-name="animation">
		<div class="wrapper ">
			<h2>Disinstalla tutto quello che non desideri</h2>
			<dl class="first" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>Plugin</h3>
					<p>Plugin inutili<br> Plugin pubblicitari<br> Plugin maligni</p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>Programmi</h3>
					<p>Programmi inutili<br> Programmi ostinati<br> Programmi in bundle</p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>App di Windows</h3>
					<p>App di Windows inutili<br> App di Windows predefinite</p>
				</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/intro-img.png')?>" alt="" class="img-box" data-name="default">
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature" data-name="animation">
		<div class="wrapper">
			<h2>Disinstalla tutto in modo completo</h2>
			 <div class="img-box" data-name="default">
			 	<div class="list01">
			 		<span class="button">Disinstalla</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Programma Antivirus</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Disinstallando Programma Antivirus</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>Hai disinstallato con successo <strong>0</strong> programma con i seguenti dettagli:</p>
			 		<ul>
			 			<li>Voci di registro rilevate: <strong>0</strong></li>
			 			<li class="right">File rilevati: <span><strong>0</strong>.<strong>0</strong></span>MB</li>
			 			<li>Operazioni pianificate rilevate: <strong>0</strong></li>
			 			<li class="right">Servizi di sistema rilevati: <strong>0</strong></li>
			 			<li>Elementi monitorati rilevati: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			 </div>
			<div class="message">
			 	<dl data-name="default" class="one">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Registra Modifiche</h3>
			 			<p>Registra le modifiche di Windows quando installa un nuovo programma per garantire una disinstallazione completa.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="two">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Disinstallazione Potente</h3>
			 			<p>Disinstalla i programmi in bundle con un solo clic, inclusi i programmi antivirus che rifiutano di essere rimossi.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="three">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Rimuove Residui</h3>
			 			<p>Pulisce automaticamente i residui dei programmi disinstallati, anche quelli rimasti dalle disinstallazioni di altre utilità.</p>
			 		</dd>
			 	</dl>
			 </div>
		</div>
	</div>
	<!-- feature end -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<h2>Altri Potenti Vantaggi</h2>
			<dl data-name="default" class="one">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Aggiorna Software</h3>
		 			<p>Aggiorna tutti i software con un solo clic.</p>
		 		</dd>
			</dl>
			<dl class="center" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Blocca Notifiche</h3>
		 			<p>Non sarai interrotto dalle notifiche di altri siti durante la navigazione online.</p>
		 		</dd>
			</dl>
			<dl data-name="default" class="three">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Aggiornamento Automatico</h3>
		 			<p>Aggiorna automaticamente all’ultima versione per una pulizia più rapida e approfondita.</p>
		 		</dd>
			</dl>
		</div>
	</div>
	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>È un programma di disinstallazione<br> di cui ti puoi fidare</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>50M+</h3>
					<p>Download</p>
				</dd>
			</dl>
			<dl class="center">
				<dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>4.5+</h3>
					<p>Valutazione degli utenti</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>Raccomandazioni dei media</p>
				</dd>
			</dl>
			<div class="review-box">
				<div class="box">
					<h3>Recensioni degli Utenti</h3>
					<p>IObit Uninstaller ha fatto molta strada, l'ho usato per molto tempo, mi piace moltissimo, è molto accurato e migliora giorno dopo giorno. Sono molto soddisfatto, senza di lui non lo sarei. Se ancora non lo stai usando potresti provarlo, è 100 volte migliore rispetto a un anno fa. Pulisce tutta la spazzatura indesiderata del registro e lo fa anche molto bene.</p>
				</div>
				<div class="box">
					<h3>Recensioni degli Utenti</h3>
					<p>Questo programma mi ha permesso di risparmiare denaro. Prima di utilizzarlo, il mio computer era molto lento, non potevo usarlo per fare niente. Ora il mio computer è veramente pulito e grazie a questo programma è diventato molto più veloce. Sono riuscito a salvare il mio computer grazie a IObit Uninstaller. Grazie mille IObit, ti amo.</p>
				</div>
				<div class="box">
					<h3>Recensioni dei Media</h3>
					<p>
						"Se hai bisogno di un programma che ti consenta di disinstallare in modo pulito e completo i programmi e le applicazioni, avvia IObit Uninstaller. Questa utilità gratuita rende molto facile la rimozione delle app, inclusi file sparsi che spesso non vengono rimossi quando si utilizza Windows per eliminare i software dal disco rigido o dalla SSD."  
					</p>
				</div>
				<div class="box active">
					<h3>Recensioni dei Media</h3>
					<p>
						Questo strumento di disinstallazione facile da usare e informativo pulisce, configura, e ottimizza il tuo PC. Gli utenti possono scaricarlo in pochissimi minuti. Questo strumento di disinstallazione può essere classificato come il miglior programma di disinstallazione e permette agli utenti di disinstallare all'ingrosso. Esso offre agli utenti di fare una "Scansione Approfondita" per andare più a fondo e trovare gli avanzi. La prestazione la stessa rende questo piccolo strumento vale la pena tenere.
					</p>
				</div>
				<div class="box">
					<h3>Recensioni degli Utenti</h3>
					<p>In passato ho usato diversi programmi di disinstallazione, tuttavia, una volta che ho iniziato a utilizzare IOBit Uninstaller dalla versione 7.0, non ho più utilizzato nessun'altra applicazione. Ha un'interfaccia facile da usare e fa il lavoro per cui è pensato alla massima perfezione. Ti aiuta a ripulire automaticamente il registro che altrimenti rimarrebbe stracolmo di avanzi e preserva così la salute del PC. La capacità di identificare Bundleware e rimuoverli è una grande funzionalità presente in IOBit Unistaller che non ha eguali.</p>
				</div>
				<div class="box">
					<h3>Recensioni degli Utenti</h3>
					<p>IObit Uninstaller trova nei miei browser dei plugin che non sapevo nemmeno esistessero. La pulizia dei file residui è ottima, non lascia alcun dato inutile del software disinstallato. Mi ricorda gli aggiornamenti disponibili per tutti i miei programmi. Complessivamente, le prestazioni del mio computer sono migliorate grazie a questo programma. È molto conveniente e facilmente gestibile, l’ho persino consigliato ai miei amici.</p>
				</div>
			</div>
			<ul class="clearfix">
				<li class="first">
					<span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
					<p>Ivan White</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
					<p> Ali Tekin</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/pcgm.png')?>" alt="PC Magazine"></span>
					<p>PC Magazine</p>
				</li>
				<li class="active">
					<span><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></span>
					<p>MakeUseOf</p>
				</li>
				<li class="samrat">
					<span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
					<p>Samrat Kumar Chakrabortty</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
					<p>John Glenn Perong</p>
				</li>
			</ul>
		</div>
	</div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>Premi Mondiali</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*. Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €15,99 sulla tua carta di credito o account PayPal. Lo sconto del 60% sul prezzo originale di €39,99 è un bonus valido solo per i preordini!
				</dd>
				<dd>*. Se non sei soddisfatto, puoi annullare l'ordine che hai effettuato entro 30 giorni senza alcun addebito.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
				IObit Uninstaller 10
	  	</div>
  		<div class="number fl">
  			<div id="fReduce" class="reduceNum">
  				<div class="listbox"><span class="list"><b>5</b></span></div>
  				<div class="listbox"><span class="list"><b>0</b></span></div>
  			</div>
  			dei 500 rimasti ora
  		</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>