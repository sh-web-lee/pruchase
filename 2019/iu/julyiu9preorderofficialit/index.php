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
		$totalNum=$packsNum=rand(49,58);
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
	$refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Paga €0 per ottenere il nuovo IObit Uninstaller PRO</title>
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
			<h1>La prevendita globale in diretta</h1>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<p>Disinstallazione completa senza tracce</p>
					<ul class="price clearfix">
						<li class="first">
							<strong>€<big>0</big><sup>*</sup></strong> <del>€39,99</del>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"><b class="giftNum">50</b> posti restanti ora</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=it-iu9preorder&ref=it_iu9preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderofficial-it');">
							  Pre-ordina Ora
							</a>
						</li>
					</ul> 
				</div>
			</div>
			<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Cosa può fare IObit Uninstaller 9 PRO per te?</h2>
			<div class="one clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-01.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h3><b>Disinstallazione rapida</b></h3>
					<dl>
						<dt><h4>Software ostinati e in bundle <span><em>unico sul mercato</em></span></h4></dt>
						<dd>
							Rimuove con la forza i programmi indesiderati, in bundle e ostinati che non possono essere disinstallati con metodi convenzionali.
						</dd>
					</dl>
					<dl>
						<dt><h4>Estensioni del browser maligne <span><em>unico sul mercato</em></span></h4></dt>
						<dd>
							Ti aiuta a rimuovere le barre degli strumenti, i componenti aggiuntivi e le estensioni del browser indesiderate, comunicandoti anche quali sono quelli sicuri da lasciare sul tuo PC.
						</dd>
					</dl>
					<dl>
						<dt><h4>App di Windows</h4></dt>
						<dd>Ti aiuta a sbarazzarti delle app integrate di Windows 10 che non usi.</dd>
					</dl>
				</div>
			</div>
			<div class="two clearfix">
				<div class="right fl">
					<h3><b>Pulizia approfondita</b></h3>
					<dl class="safe">
						<dt><h4>Dati del programma inutili</h4></dt>
						<dd>
							Elimina tutti gli avanzi associati di file, cartelle e registri dopo aver disinstallato un programma.
						</dd>
					</dl>
					<dl>
						<dt><h4>Residui su PC <span><em>unico sul mercato</em></span></h4></dt>
						<dd>
							Con un clic scansiona e rimuove i file residui dei programmi già disinstallati che sono stati disinstallati prima di usare IObit Uninstaller.
						</dd>
					</dl>
					<dl>
						<dt><h4>Modifiche del sistema dal programma d’installazione</h4></dt>
						<dd>
							Identifica le modifiche dal programma d’installazione e rimuove tutti i file modificati dal programma durante la loro installazione.
						</dd>
					</dl>
				</div>
				<div class="left fr">
					<img src="<?php echo getStaticUrl('images/iu-screen-02.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Quali sono i vantaggi di IObit Uninstaller 9 PRO?</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">√</i> Rimozioni raggruppate di programmi e app di Windows</li>
						<li><i class="all-icons">√</i> Identifica e rimuove bundleware</li>
						<li class="three"><i class="all-icons">√</i> Rileva le modifiche del sistema dal programma d’installazione <sup class="green">NUOVO</sup></li>
						<li><i class="all-icons">√</i> Cancella i programmi ostinati <sup>MIGLIORATO</sup></li>
						<li><i class="all-icons">√</i> Identifica le estensioni pubblicitarie e quelle maligne <sup>MIGLIORATO</sup></li>
						<li><i class="all-icons">√</i> Elimina automaticamente gli avanzi dopo la disinstallazione normale <sup>MIGLIORATO</sup></li>
						<li><i class="all-icons">√</i> Scansiona gli avanzi di programmi già disinstallati  <sup class="green">NUOVO</sup></li>
						<li><i class="all-icons">√</i> Costruisce automaticamente un punto di ripristino prima di disinstallare</li>
						<li><i class="all-icons">√</i> Aggiorna tutti i programmi obsoleti con un solo clic</li>
						<li><i class="all-icons">√</i> Aggiornamento automatico quando è disponibile una nuova versione</li>
						<li><i class="all-icons">√</i> Supporto tecnico 24/7 gratuito su richiesta</li>
					</ul>
					<ul class="price clearfix">
						<li class="first">
							<strong>€<big>0</big><sup>*</sup></strong> <del>€39,99</del>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=it-iu9preorder&ref=it_iu9preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderofficial-it');">
							  Pre-ordina Ora
							</a>
						</li>
					</ul>
					<p class="change">Affrettati, soli <b class="giftNum">50</b> posti restanti ora</p>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Cosa dicono gli altri?</h2>
			<div class="box">
				<div class="relist clearfix">
					<dl class="on clearfix">
						<dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
						<dd>
							<h3>Recensioni dei Media</h3>
							<p>
							  Questo strumento di disinstallazione facile da usare e informativo pulisce, configura, e ottimizza il tuo PC. Gli utenti possono scaricarlo in pochissimi minuti. Questo strumento di disinstallazione può essere classificato come il miglior programma di disinstallazione e permette agli utenti di disinstallare all'ingrosso. Esso offre agli utenti di fare una "Scansione Approfondita" per andare più a fondo e trovare gli avanzi. La prestazione la stessa rende questo piccolo strumento vale la pena tenere.
							</p>
							<h4>MakeUseOf</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
						<dd>
							<h3>Recensioni degli Utenti</h3>
							<p>
							  Ho usato i programmi IObit per anni con grandi risultati! Ed è per questo che resto con i prodotti IObit. In passato, ho riparato e aggiustato laptop e cellulari (Android) a parenti ed amici, lascio sempre i prodotti IObit installati e dico loro di lasciar fare tutto ai programmi che sistemeranno e velocizzeranno automaticamente il loro laptop / computer / cellulare! :) 
							  Consiglio vivamente Iobit Uninstaller (e l'ultima versione beta) in quanto è un programma affidabile e sicuro che disinstalla i programmi testardi! La cosa più importante è rimuovere il codice  "nascosto" che il programmatore voleva lasciare, perché è quello che consente la re-installazione degli annunci! 
							  TUTTI i prodotti IObit sono sicuri e facili da usare e la maggior parte si prende davvero cura del tuo PC.
							</p>
							<h4>Jeff A Watts</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
						<dd>
							<h3>Recensioni degli Utenti</h3>
							<p>
							  Trovo che il programma di disinstallazione IObit sia eccellente da usare in quanto ha tutto ciò che si possa desiderare. Mi piace il fatto che disinstalla tutti i frammenti residui. Ha anche un programma di aggiornamento che ti ricorda quando è necessario aggiornare i programmi e il fatto che disinstalla i programmi batch lo rende davvero il numero uno sul mercato. È un software fondamentale per mantenere il computer a posto. 
							</p>
							<h4>Lynette van Niekerk</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
						<dd>
							<h3>Recensioni degli Utenti</h3>
							<p>
							  IObit Uninstaller è il miglior software per rimuovere programmi sul computer, è veloce e molto efficace, niente a che vedere con il programma di disinstallazione di base di Windows, infatti pulisce a fondo tutti i residui del programma, evitando i rallentamenti nel computer. Lo uso da alcuni mesi e non so come farei senza, lo consiglio ai miei amici e alla mia famiglia. Grazie a IObit Uninstaller, è fantastico!
							</p>
							<h4>Paulo Martins</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
						<dd>
							<h3>Recensioni degli Utenti</h3>
							<p>
							  IObit Unisntaller migliora se stesso con ogni aggiornamento, l’ho già usato per 3 anni. Funziona molto veloce e ha un’interfaccia semplice. Alcune funzioni che uso regolarmente sono Batch Uninstaller, Scansione Approfondita, Distruggi File e Installati di Recente, il quale offre un’accesso veloce ai programmi installati di recente che non mi piacciono o non funzionano correttamente. È anche facile da controllare i tuoi elementi d’avvio per rendere più veloce l’avvio del tuo PC.
							</p>
							<h4>Lovro Žužić</h4>
						</dd>
					</dl>
				</div>
			</div>
			<span class="prev"><</span>
			<span class="next">></span>
		</div>
	</div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>Raccomandato e premiato dai media mondiali</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					* Alla fine del periodo di prova gratuito di 30 giorni, ti saranno addebitati automaticamente €15,99 sulla tua carta di credito o account PayPal. Lo sconto del 60% sul prezzo originale di €39,99 è un bonus solo per i preordini!
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
	  	</div>
	  	<div class="price fr clearfix">
	  		<div class="one fl">
	  			<div id="fReduce" class="reduceNum">
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>5</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  			</div>
	  			<p class="change"><span class="viewNum"><?php echo $viewNum;?></span>  visitatori ora, solo<b class="giftNum">50</b>posti restanti!</p>
	  		</div>
	  		<div class="two fl"><strong>€<big>0</big><sup>*</sup></strong> <del>€39,99</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
	  			   href="https://www.iobit.com/buy.php?product=it-iu9preorder&ref=it_iu9preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_iu"
	  			   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderofficial-it');">
	  			  Pre-ordina Ora
	  			</a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>