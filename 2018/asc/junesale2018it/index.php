<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
	$date=$_GET['d'];
	$cName='itascjanpa'.$date;
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
		$packsNum=128;
		setcookie($cName,$packsNum);
	}
	echo $packsNum;
	exit();
}

function get_line($file, $line)
{
	$fp = fopen($file, 'r');
	$i = 0;
	while (!feof($fp)) {
		$i++;
		$c = fgets($fp);
		if ($i == $line) {
			return $c;
			break;
		}
	}
}

$reduceNum=146967974;
$reTime=10;
$buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);

$name=explode(' ',trim(get_line('data/it_name_natale.txt',rand(1,454))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,6)%6==0)?1:3;
if($_GET['type']==2){
	$saleType=1;
}
if($_GET['action']=='getPack'){
	$date = $_GET['d'];
	$statusNow=$_GET['statusNow'];
	$packsNum=28;
	$c_name = 'itascjune_p' . $date;
	if ($statusNow==3) {
		if (!isset($_COOKIE[$c_name])) {
			$packsNum = 28;
		} else {
			if (intval($_COOKIE[$c_name]) <= 5) {
				$packsNum = 5;
			} else {
				$packsNum = $_COOKIE[$c_name] - 1;
			}
		}
		setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
	}
	echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'buyNum'=>$buyNum,'packsNum'=>$packsNum));
	exit();
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>Offerte del giorno, sconti fino all’ 85% su Advanced SystemCare PRO – Offerte di IObit 2018</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script type="text/javascript">
//	  function getBuyNum(){
//	    $.ajax({
//	      type: "GET",
//	      url: "<?php //echo $pRootUrl;?>//callback.php",
//	      data: "action=getBuyNum&reduceNum=<?php //echo $reduceNum;?>//&reTime=<?php //echo $reTime;?>//&r="+Math.random(),
//	      success: function(packs){
//	        $('.buyNum').html(packs);
//	        setTimeout('getBuyNum()', 10000);
//	      }
//	    });
//	  }
//	  setTimeout('getBuyNum()', 10000);
	</script>
</head>

<body>

	<!-- banner -->
	<div class="banner">
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
	 		<h1 class="title">Fai tornare subito il tuo PC come nuovo!</h1>
	 		<p class="subtitle">
	 			<i class="all-icons"></i> Più di <b class="buyNum"><?php echo $buyNum;?></b> utenti FREE hanno attivato la versione PRO!
	 		</p>
	 		<div class="panel clearfix">
	 			<div class="box left">
	 				<div class="countbox"></div>
	 				<div class="imgbox">
	 					<img src="<?php echo getStaticUrl('images/asciu.png')?>" alt=""/>
	 					<span class="off"></span>
	 				</div>
	 				<div class="price">
	 					<p><strong>17<small>,99</small></strong> <del class="original">79,98</del></p>
	 					<a class="buybtn"
	 					   href="https://www.iobit.com/buy.php?product=it-asc11iu3pc1799&ref=it_asc113pciu1799purchase1806&refs=it_purchase_asc"
	 					   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1806-it')">
	 					  APPROFITTANE ORA!
	 					</a>
	 				</div>
	 			</div>
	 			<div class="box sold center">
	 				<div class="countbox">
	 					<h2 class="countdown">Mancano: <b>55</b> ore <b>55</b> min <b>55</b> sec<b class="last">55</b>ms *</h2>
	 				</div>
	 				<div class="imgbox">
	 					<img src="<?php echo getStaticUrl('images/asciusd.png')?>" alt=""/>
	 					<span class="off"></span>
	 				</div>
	 				<div class="price">
	 					<p><strong>17<small>,99</small></strong> <del class="original">109,97</del></p>
	 					<a class="buybtn"
	 					   href="https://www.iobit.com/buy.php?product=it-asc11iusd3pc1799&ref=it_asc113pciusd1799purchase1806&refs=it_purchase_asc"
	 					   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiusd1806-it')">
	 					   <i class="all-icons"></i>
	 					  APPROFITTANE ORA!
	 					</a>
	 				</div>
	 			</div>
	 			<div class="box right">
	 				<div class="imgbox"><img src="<?php echo getStaticUrl('images/asc.png')?>" alt=""/></div>
	 				<div class="price">
	 					<p><strong>29<small>,99</small></strong></p>
	 					<a class="buybtn"
	 					   href="https://www.iobit.com/buy.php?product=it-asc111pc2999&ref=it_asc111pc2999purchase1806&refs=it_purchase_asc"
	 					   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1806-it')">
	 					  APPROFITTANE ORA!
	 					</a>
	 				</div>
	 			</div>
	 		</div>
	 	</div>
	</div>
	<!-- banner end -->
	
	<!-- payments -->
	<div class="payments wrapper">
		<img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
	</div>
	<!-- payments end -->

	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>Goditi ora le funzionalità avanzate e privilegiate!</h2>
			<p class="subtitle">I tuoi amici hanno anche attivato la versione PRO.</p>
			<div class="showcase">
				<div class="inner">
					<ul class="screenshot">
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
						</li>
						<li>							
							<img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
						</li>
						<li>							
							<img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
						</li>
						<li>							
							<img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
						</li>
					</ul>					
				</div>	
				<ul class="zoom">
					<li></li>
					<li class="fun3">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
						</div>
					</li>
					<li class="fun2">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
						</div>
					</li>
					<li class="fun4">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
						</div>
					</li>
					<li></li>
				</ul>			
			</div>
			<div class="detail-list">
				<dl>
					<dt><i class="benfits03"></i></dt>
					<dd>
						<h3>300%* PIÙ RAPIDO</h3>
						<p>Aumenta notevolmente la velocità di download, di gioco, di navigazione su Internet e su piattaforme video come YouTube fino al 300% in più</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits02"></i></dt>
					<dd>
						<h3>200%* PIÙ VELOCE</h3>
						<p>Ripara definitivamente una serie di problemi del PC per velocizzarlo al massimo</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits04"></i></dt>
					<dd>
						<h3>100% PROTEZIONE </h3>
						<p>Protegge la tua privacy da tutti i tipi di rilevamenti effettuati da intrusi maligni</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits01"></i></dt>
					<dd>
						<h3>MAGGIORE SPAZIO LIBERO</h3>
						<p>Pulisce profondamente i file spazzatura, i collegamenti invalidi e i file di registro di sistema con ottimizzazione avanzata</p>
					</dd>
				</dl>
				<a class="textlink" href="Javascript:void(0);">Per maggiori informazioni clicca qui ></a>
			</div>
		</div>
	</div>
	<!-- benfits end -->

	<!-- gifts -->
	<div class="gifts">
		<h2>Regali Gratis limitati</h2>
		<div class="wrapper">
			<div class="gift-list clearfix">
				<div class="lists">
					<img src="<?php echo $pResUrl; ?>images/iu-gift.png" alt="">
					<dl>
						<dt>
							<h3>IObit Uninstaller 7 PRO</h3>
							<del>€29,99</del> <strong>€<b>0</b></strong>
						</dt>
						<dd>
							La migliore scelta per disinstallare in modo <br> potente i programmi e plug-in ostinati!
					</dl>
				</div>
				<div class="lists last">
					<img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt="">
					<dl>
						<dt>
							<h3>Smart Defrag 5</h3>
							<del>€29,99</del> <strong>€<b>0</b></strong>
						</dt>
						<dd>
							Offre la migliore deframmentazione del disco <br> e accelera al massimo l'hard driver!
					</dl>
				</div>
			</div>
			<a class="buybtn" 
			   href="https://www.iobit.com/buy.php?product=it-asc11iusd3pc1799&ref=it_asc113pciusd1799purchase1806&refs=it_purchase_asc" 
			   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiusd1806-it')">
				<i class="all-icons"></i> OTTIENI I REGALI SUBITO!
			</a>

		</div>
	</div>
	<!-- gifts end -->

	<!-- review -->
	<div class="reviews wrapper">
		<h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
		<p>Scelto da oltre <span>250 milioni</span> di utenti mondiali</p>
		<div class="map">
			<span class="recover recover01 big"></span>
			<span class="recover recover02 middle"></span>
			<span class="recover recover03 smail"></span>
			<span class="recover recover04 big"></span>
			<span class="recover recover05 middle"></span>
			<span class="recover recover06 smail"></span>
			<span class="recover recover07 big"></span>
			<span class="recover recover08 middle"></span>
			<span class="recover recover09 smail"></span>
			<span class="recover recover10 smail"></span>
			<span class="recover recover11 smail"></span>
			<span class="recover recover12 smail"></span>
			<span class="recover recover13 middle"></span>
			<span class="recover recover14 middle"></span>
			<span class="recover recover15 smail"></span>
			<span class="recover recover16 smail"></span>
			<span class="recover recover17 big"></span>
			<span class="recover recover18 smail"></span>
			<span class="recover recover19 smail"></span>
			<span class="recover recover20 big"></span>
			<span class="recover recover21 middle"></span>
			<dl class="tradotto-da-tedesco">
				<dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
				<dd>È il migliore programma che pulisce e accelera il mio PC in modo <br> corretto e sicuro. Rende i computer di vecchia generazione più <br> veloci e potenti! – Tradotto da Tedesco</dd>
			</dl>
			<dl class="html-it">
				<dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
				<dd>Advanced SystemCare Pro è un potente programma con cui potremo <br> ottimizzare al massimo le prestazioni del nostro sistema operativo. <br> Gestisce in automatico quasi tutte le funzioni, molto semplice da usare!</dd>
			</dl>
			<dl class="baixaki">
				<dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
				<dd>Advanced SystemCare ha un rendimento eccezionale, è in grado di rilevare e risolvere <br> problemi davvero complessi, difficili persino da immaginare. – Tradotto da Portoghese </dd>
			</dl>
			<dl class="charles-r-widick">
				<dd>La mia scelta è ancora Advanced <br> SystemCare Pro! </dd>
				<dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
			</dl>
			<dl class="cnet">
				<dd>Advanced SystemCare punta a rimediare <br> qualsiasi problema affligga il tuo computer!</dd>
				<dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
			</dl>
		</div>
	</div>
	<!-- review end -->

	<!-- compare -->
	<div class="compare wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="text" colspan="2">Confronto delle funzionalità:</th>
				<th class="spac"></th>
				<th class="itemb">
					<div class="box">
						La tua versione <br> ATTUALE
						<span></span>
					</div>
				</th>
				<th class="spac"></th>
				<th class="itema">
					<div class="box">
						La versione PRO <br> AGGIORNATO
						<span></span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
				<td class="virtue">Pulizia, riparazione ed ottimizzazione di base del sistema</td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons">√</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
				<td class="virtue">
					300% maggiore rapidità di Internet con Internet Booster
					<span class="all-icons">Migliorato</span>
				</td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
				<td class="virtue">
						200% avvio più veloce con Ottimizzazione dell’Avvio
						<span class="all-icons">Migliorato</span>
				</td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
				<td class="virtue">
					Pulizia profonda del registro di Windows per un sistema più stabile
					<span class="all-icons">Migliorato</span>
				</td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
				<td class="virtue"> <em>Nuovo motore di ottimizzazione del disco rigido per l'accesso più rapido all’Hard Driver</em> <span class="all-icons nuo last">Nuovo</span></td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
				<td class="virtue">Protezione in tempo reale contro le minacce alla sicurezza</td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
				<td class="virtue">Rilevazione completa contro le infezioni più profonde</td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
				<td class="virtue">
					Rimuove in automatico gli annunci e le tracce di privacy per una navigazione più sicura
				</td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
				<td class="virtue">Pulizia automatica della RAM per far funzionare il PC più scorrevolmente <span class="all-icons ">Migliorato</span></td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
				<td class="virtue">Aggiornamento automatico alla versione più recente</td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
				<td class="virtue">24/7 Supporto tecnico gratuito</td>
				<td class="spac"></td>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
		</tbody>
	</table>
	</div>
	<!-- compare end -->

	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>Accelera il tuo PC e fallo funzionare come nuovo con soli euro <b>1,5</b> al mese!</h2>
			<div class="cartarea clearfix">
				<div class="showcase">
					<span class="img"></span>
				</div>
				<div class="selection">
					<ul>
						<li class="three-pc active" ><i></i> <span>3 PC / 1 Anno + IU</span> <strong>-75%</strong></li>
						<li class="one-pc"><i></i> <span>1 PC / 1 Anno</span></li>
					</ul>
				</div>
				<dl class="btnarea">
					<dt><strong class="discount"><b>17</b>,99</strong> <del class="original">79,98</del>   <span>Risparmi <b>61,99</b></span></dt>
					<dd>
						<a class="buybtn" 
						   href="https://www.iobit.com/buy.php?product=it-asc11iu3pc1799&ref=it_asc113pciu1799purchase1806&refs=it_purchase_asc" 
						   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1806-it')">
						<i class="all-icons"></i>
						APPROFITTANE ORA!
					</a>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- bottomcart end -->

	<!-- payments  -->
	<div class="service  clearfix">
		<div class="wrapper">
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
				<dd><strong>Garanzia di Soddisfazione</strong>60 giorni rimborso</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
				<dd><strong>Pagamento Assicurato</strong>Tutti i metodi di pagamento sono 100% <br> verificati e sicuri</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
				<dd><strong>Attivazione Veloce</strong>Dopo avere completato il tuo acquisto, <br> riceverai il codice di licenza in pochi <br> minuti tramite la mail</dd>
			</dl>
			<dl class="last">
				<dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
				<dd><strong>Servizio Clienti</strong>24/7 Supporto tecnico gratuito</dd>
			</dl>
		</div>
	</div>
	<!-- payments end -->

	<!-- footer -->
	<div class="footer">
		<dl class="annotation wrapper">
			<dt>Note:</dt>
			<dd>
				* I dati potrebbero variare in base al sistema o computer. 
			</dd>
			<dd>
			 * Tali promozioni sono soggette a modifiche senza preavviso, periodicamente e a nostra esclusiva discrezione.
			</dd>
		</dl>
		<div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
	</div>
	<!-- footer end -->

	<!-- float -->
	<div class="float">
		<a href="javascript:void(0);" class="close">X</a>
		<dl>
			<dt><span id="first">Cla***</span> <span id="last">Pis*</span></dt>
			<dd>ha già attivato 1 PC / 1 Anno</dd>
			<!-- <dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
			<dd>ha già attivato <span id="saleType"><?php echo $saleType;?></span> PC / 1 Anno</dd> -->
		</dl>
	</div>
	<script>
		refStr='<?php echo $refStr;?>';
		var _asciusd = "<?php echo getStaticUrl('images/asciusd.png')?>";
		var _asciu = "<?php echo getStaticUrl('images/asciu.png')?>";
		var esaurito = "<?php echo getStaticUrl('images/esaurito.png')?>";
  </script>
	<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>