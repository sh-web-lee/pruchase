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
	$c_name = 'itiuexpjune_p' . $date;
	$c_name_t='itiuexpjune_t' . $date;
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

$transData=json_decode(base64_decode($_GET['data']));
$preData=$transData->iu9pre;
$preDataArr=(array)$preData;
$pluginMp=$preDataArr['plugin-mp'];
$fileSizeShow=number_format($preData->filesize/(1024*1024*1024),1);
$fileSizeShow=$fileSizeShow>0.1?$fileSizeShow:0;
$leftOvers=intval($preData->reg)+intval($preData->file)+intval($preData->task)+intval($preData->service);
$preData->fileSizeShow=$fileSizeShow;
$preData->leftOvers=$leftOvers;
$preData->pluginMp=$pluginMp;
$preDataJs=json_encode($preData);
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ottieni IObit Uninstaller 9 PRO a €0</title>
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
							   href="https://www.iobit.com/buy.php?product=it-iu9preorder&ref=it_iu9preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp-it');">
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
			<h2>Cosa faceva IObit Uninstaller 8 PRO per Te?</h2>
			<div class="three clearfix">
				<div class="left-message fl">
					<div class="post">
					  <div class="post-criale"></div>
						<div class="mask"></div>
						<span class="star"></span>
					</div>
					<span class="clean"></span>
					<div class="left-post">
					  <div class="post-criale"></div>
						<div class="mask"></div>
					</div>
				</div>
				<?php if(($fileSizeShow+intval($preData->soft)+$leftOvers+intval($preData->plugin)+intval($preData->softupdate)+intval($preData->stubborn)+intval($preData->bundle)+intval($pluginMp))<=0):?>
					<ul class="right-message normal">
						<li class="first">
							<h3>Disinstalla</h3>
							<p>i programmi testardi e in bundle, estensioni browser e app di Windows</p>
						</li>
						<li>
							<h3>Pulisce</h3>
							<p>completamente i file rimanenti dei programmi disinstallati</p>
						</li>
						<li>
							<h3>Identifica</h3>
							<p>I plug-in dannosi e pubblicitari per browser più sicuri</p>
						</li>
						<li>
							<h3>Aggiorna</h3>
							<p>tutti i software obsoleti con un clic per evitare le falle di sicurezza</p>
						</li>
					</ul>
				<?php else:?>
				<ul class="right-message">
					<?php if(!empty($fileSizeShow)):?>
					<li class="data1">
						<h3><span>2</span> G </h3>
						<p>di spazio su disco liberati</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->soft))):?>
					<li class="data2">
						<h3><span>20</span>  </h3>
						<p class="one">programmi disinstallati</p>
					</li>
					<?php endif;?>
					<?php if(!empty($leftOvers)):?>
					<li class="data3">
						<h3><span>200</span>  </h3>
						<p class="two">residui di programmi rimossi</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->plugin))):?>
					<li class="data4">
						<h3><span>10</span> </h3>
						<p class="eight">estensioni del browser rimosse</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->softupdate))):?>
					<li class="data5">
						<h3><span>3</span> </h3>
						<p class="four">software scaduti aggiornati</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->stubborn))):?>
					<li class="data6">
						<h3><span>5</span> </h3>
						<p class="five">programmi ostinati disinstallati</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($preData->bundle))):?>
					<li class="data7">
						<h3><span>5</span></h3>
						<p class="six">programmi in bundle disinstallati</p>
					</li>
					<?php endif;?>
					<?php if(!empty(intval($pluginMp))):?>
					<li class="data8">
						<h3><span>2</span> </h3>
						<p class="seven">plug-in maligni rimossi</p>
					</li>
					<?php endif;?>
				</ul>
				<?php endif;?>
			</div>
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Cosa Può Fare IObit Uninstaller 9 PRO per Te?</h2>
			<div class="one clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-01.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h3><b>Disinstallazione più Potente</b></h3>
					<dl>
						<dt><h4>Programmi indesiderati</h4></dt>
						<dd>
							Rimuove programmi, estensioni del browser e app Windows. 
						</dd>
					</dl>
					<dl>
						<dt><h4>Programmi ostinati <span><em>MIGLIORATO 150%</em></span></h4></dt>
						<dd>
							Rimuove con forza programmi che non possono essere disinstallati con strumenti convenzionali.
						</dd>
					</dl>
					<dl>
						<dt><h4>Programmi in bundle</h4></dt>
						<dd>
							Rimuovi i programmi che vengono installati insieme al freeware per pubblicizzare o rubare dati sulla privacy.
						</dd>
						<dd><span><em>Unico sul mercato</em></span></dd>
					</dl>
					<dl>
						<dt><h4>Plug-in pubblicitari e maligni <span><em>MIGLIORATO 50%</em></span></h4></dt>
						<dd>
							Rimuove i plug-in infetti che iniettano pubblicità o collegamenti dannosi nelle pagine visualizzate.
						</dd>
						<dd><span><em>Unico sul mercato</em></span></dd>
					</dl>
				</div>
			</div>
			<div class="two clearfix">
				<div class="right fl">
					<h3><b>Pulizia più Accurata</b></h3>
					<dl class="safe">
						<dt><h4>Rimuove <span><em>MIGLIORATO 15%</em></span></h4></dt>
						<dd>File e registri residui dopo la disinstallazione.</dd>
					</dl>
					<dl>
						<dt><h4>Rileva <span class="green"><em>NUOVO</em></span></h4></dt>
						<dd>Modifiche del sistema da un programma e le ripristina dopo aver disinstallato il programma.</dd>
					</dl>
					<dl>
						<dt><h4>Scansiona <span class="green"><em>NUOVO</em></span></h4></dt>
						<dd>File rimanenti di programmi disinstallati in precedenza senza usare IObit Uninstaller.</dd>
						<dd><span><em>Unico sul mercato</em></span></dd>
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
			<h2>Differenza tra la tua edizione corrente e IObit Uninstaller 9 PRO</h2>
			<table border="0" cellspacing="0" cellpadding="0" width="100%">
				<thead>
					<tr>
						<th class="text"></th>
						<th class="space"></th>
						<th class="itema"><span>La Tua Edizione Corrente</span></th>
						<th class="space"></th>
						<th class="itemb"><span>IObit Uninstaller 9 PRO</span></th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></span>
							Rimuove programmi, estensioni e applicazioni Windows in batch
						</td>
						<td class="space"></td>
						<td class="itema"><span class="currt"></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></span>
							Identifica e rimuove programmi ostinati e bundleware 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></span>
							<span class="txt">
								Rileva e ripristina le modifiche di sistema effettuate da un programma di installazione
							</span>   
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></span>
							Identifica le estensioni dannose e pubblicitarie 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""/></span>
							<span class="txt">Pulizia automatica degli avanzi che non possono essere cancellati da altre utilità</span>  
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""/></span>
							Scansiona gli avanzi di programmi già disinstallati    
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""/></span>
							Aggiorna tutti i programmi obsoleti con un clic 
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr>
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""/></span>
							<span class="txt">Aggiornamento automatico quando è disponibile una nuova versione</span>  
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
					<tr class="blue">
						<td class="text">
							<span><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""/></span>
							Supporto tecnico 24/7 gratuito su richiesta
						</td>
						<td class="space"></td>
						<td class="itema"><span></span></td>
						<td class="space"></td>
						<td class="itemb"><span></span></td>
					</tr>
				</tbody>
			</table>
		</div>
	</div>
	<!-- feature end -->
	<div class="between-buy">
		<div class="wrapper">
			<h2>Pre-Ordina a €0 per Avere IObit Uninstaller 9 PRO</h2>
			<ul class="price clearfix">
				<li class="first">
					<strong>€<big>0</big><sup>*</sup></strong> <del>€39,99</del>
					<p class="change"><b class="giftNum">50</b> posti restanti ora</p>
				</li>
				<li>
					<a class="buybtn"
					   href="https://www.iobit.com/buy.php?product=it-iu9preorder&ref=it_iu9preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_iu"
					   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp-it');">
					  Pre-ordina Ora
					</a>
				</li>
			</ul>
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
	  			   href="https://www.iobit.com/buy.php?product=it-iu9preorder&ref=it_iu9preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=it_purchase_iu"
	  			   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderexp-it');">
	  			  Pre-ordina Ora
	  			</a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
	<script>
		refStr="<?php echo $refStr;?>";
		preData=JSON.parse('<?php echo $preDataJs;?>');
	</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>