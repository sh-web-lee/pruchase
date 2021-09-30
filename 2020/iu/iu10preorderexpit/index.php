<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(116, 198);
if ($_GET['action'] == 'getViewNum') {
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'itiujunexp0709_p' . $date;
	$c_name_t = 'itiujunexp0709_t' . $date;
	if ($_COOKIE[$c_name] === null) {
		$totalNum = $packsNum = rand(41, 59);
		setcookie($c_name, $packsNum, time() + 3600 * 24);
		setcookie($c_name_t, $totalNum, time() + 3600 * 24);
	} else {
		if (intval($_COOKIE[$c_name]) <= 0) {
			$packsNum = 0;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		}
	}
	echo json_encode(array('packsNum' => $packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$data = json_decode(base64_decode($_GET['data']), true);
$data_arr = $data['iu10pre'];
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ottieni l'ultimo IObit Uninstalller PRO a €0 </title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
		  mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
		  mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
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
				<img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
				IObit Uninstaller 10
			</div>
		</div>
		<div class="clearfix">
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" class="iu-box" data-name="default">
				<img src="<?php echo getStaticUrl('images/banner-icon01.png') ?>" alt="" class="iu-icon01"
					 data-name="default">
				<img src="<?php echo getStaticUrl('images/banner-icon02.png') ?>" alt="" class="iu-icon02"
					 data-name="default">
			</div>
			<div class="right fr">
				<h1 data-name="default">La prevendita inizia ora</h1>
				<h2 data-name="default">Rinnova la versione PRO per €0</h2>
				<h3 data-name="default">Limitato per i primi 500 utenti al giorno prima del 25 agosto</h3>
				<div class="number" data-name="default">
					<div id="reduce" class="reduceNum">
						<div class="listbox"><span class="list"><b>5</b></span></div>
						<div class="listbox"><span class="list"><b>0</b></span></div>
					</div>
					dei 500 pezzi rimasti
					<div class="bar">
						<span></span>
					</div>
				</div>
				<div class="price" data-name="default">
					<strong> €0 <sup>*</sup></strong>
					<a class="buybtn"
					   href="https://www.iobit.com/buy.php?product=it-iu10preorder&ref=it_iu10preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=it_purchase_iu"
					   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderexp-it');">
						RINNOVA ORA
					</a>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
	<div class="wrapper ">
		<h2>Con IObit Uninstaller PRO hai già</h2>
		<div class="clearfix">
			<dl class="one" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png') ?>" alt=""/></dt>
				<dd>
					Disinstallato <?php echo empty($data_arr['soft']) ? '' : '<b class="total">' . $data_arr['soft'] . '</b>'; ?>
					programmi,
					inclusi <?php echo (empty($data_arr['bundle']) || empty($data_arr['soft'])) ? '' : '<b class="bundle">' . $data_arr['bundle'] . '</b>'; ?>
					programmi ostinati e
					<?php echo (empty($data_arr['stubborn']) || empty($data_arr['soft'])) ? '' : '<b class="sofeware">' . $data_arr['stubborn'] . '</b> programmi'; ?>
					in bundle
				</dd>
			</dl>
			<dl class="right" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png') ?>" alt=""/></dt>
				<dd>
					Disinstallato <?php echo empty($data_arr['plugin']) ? '' : '<b class="plug-total">' . $data_arr['plugin'] . '</b>'; ?>
					toolbar e plugin,
					inclusi <?php echo (empty($data_arr['plugin-mp']) || empty($data_arr['plugin'])) ? 'quelli' : '<b class="mail">' . $data_arr['plugin-mp'] . '</b>'; ?>
					maligni e pubblicitari
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png') ?>" alt=""/></dt>
				<?php echo (empty($data_arr['file']) || empty($data_arr['reg'])) ? '<dd>Rimosso file e voci di registro</dd>' : '<dd> Rimosso <b class="files">' . $data_arr['file'] . '</b>  file e <b class="registries">' . $data_arr['reg'] . '</b> voci di registro</dd>'; ?>
				<!-- <dd>Delete files and registry entries</dd> -->
			</dl>
			<dl class="right two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon04.png') ?>" alt=""/></dt>
				<?php
				$filesize = round($data_arr['filesize'] / (1024 * 1024), 2);
				$size = explode('.', $filesize);
				if (empty($size[0])&&empty($size[1])) : ?>
					<dd>Pulito tracce e risparmiato spazio sul disco</dd>
				<?php else :?>
					<dd>Risparmiato in totale <b class="disk"><em class="integer"><?php echo $size[0]; ?></em>.<em class="decimal"><?php echo $size[1]; ?></em></b> MB di
						spazio sul disco
					</dd>
				<?php endif; ?>
				<!-- <dd>Clean traces and save disk space</dd> -->
			</dl>
		</div>
	</div>
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature" data-name="animation">
	<div class="wrapper">
		<h2>I tuoi privilegi PRO sono scaduti, devi dire addio a:</h2>
		<div class="feature-img">
			<img class="img-box" src="<?php echo getStaticUrl('images/feature-img.png') ?>" data-name="default" alt=""/>
			<dl class="one" data-name="default">
				<dt>Disinstallazione potente</dt>
				<dd>Disinstalla i programmi indesiderati con un solo clic, in particolare quelli ostinati o gli
					antivirus che rifiutano di essere rimossi.
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt>Navigazione veloce e sicura</dt>
				<dd>Identifica i plugin maligni e pubblicitari per garantire un’esperienza di navigazione sicura.</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt>Pulizia automatica</dt>
				<dd>Rileva e pulisce automaticamente i residui lasciati dalle disinstallazioni con altre utilità</dd>
			</dl>
			<dl class="four" data-name="default">
				<dt>Pulizia Approfondita</dt>
				<dd>Monitora e rimuove completamente tutti i file e registri creati dalle installazioni e lasciati dalle
					disinstallazioni standard.
				</dd>
			</dl>
			<dl class="five" data-name="default">
				<dt>Aggiorna Software</dt>
				<dd>Aggiorna tutti i programmi importanti con un solo clic senza nessun intervento dell'utente.</dd>
			</dl>
			<span class="circle one" data-name="default"></span>
			<span class="circle two" data-name="default"></span>
			<span class="circle three" data-name="default"></span>
		</div>
	</div>
</div>
<!-- feature end -->

<div class="feature-02" data-name="animation">
	<div class="wrapper">
		<h2>Nuovo IObit Uninstaller 10 offre <br> prestazioni migliori:</h2>
		<dl data-name="default" class="one">
			<dt><img src="<?php echo getStaticUrl('images/feature-icon08.png') ?>" alt=""></dt>
			<dd>
				<h3><b>50% più veloce</b> il processo di disinstallazione</h3>
			</dd>
		</dl>
		<dl class="center" data-name="default">
			<dt><img src="<?php echo getStaticUrl('images/feature-icon07.png') ?>" alt=""></dt>
			<dd>
				<h3>Scansiona <b> 30% più residui </b> di disinstallazione</h3>
			</dd>
		</dl>
		<dl data-name="default" class="three">
			<dt><img src="<?php echo getStaticUrl('images/feature-icon05.png') ?>" alt=""></dt>
			<dd>
				<h3><b>Blocca</b> i messaggi di notifica dei siti</h3>
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
			<div class="box first">
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
		<img src="<?php echo getStaticUrl('images/awards.png') ?>" alt=""/>
	</div>
</div>
<!-- service end -->

<!-- bottom start -->
<div class="bottom">
	<div class="wrapper">
		<dl class="annotation">
			<dt>Note:</dt>
			<dd>
				*. Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €15,99
				sulla tua carta di credito o account PayPal. Lo sconto del 60% sul prezzo originale di €39,99 è un bonus
				valido solo per i preordini!
			</dd>
			<dd>*. Se non sei soddisfatto, puoi annullare l'ordine che hai effettuato entro 30 giorni senza alcun
				addebito.
			</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tutti i diritti riservati</p>
	</div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
	<div class="wrapper clearfix">
		<div class="imgbox fl">
			<img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
			IObit Uninstaller 10
		</div>
		<div class="number fl">
			<div id="fReduce" class="reduceNum">
				<div class="listbox"><span class="list"><b>5</b></span></div>
				<div class="listbox"><span class="list"><b>0</b></span></div>
			</div>
			dei 500 pezzi rimasti
		</div>
	</div>
</div>
<!-- floatlayer end -->
<script>refStr = "<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>