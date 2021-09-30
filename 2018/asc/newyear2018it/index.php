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
	$cName='itascnatapa'.$date;
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
$buyNum = ceil(microtimeFloat() * 1000 / 20000) -70867174;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/it_name_natale.txt',rand(1,454))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,6)%6==0)?1:3;
if($_GET['type']==2){
	$saleType=1;
}
if($_GET['action']=='getPack'){
	echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'buyNum'=>$buyNum));
	exit();
}

if (in_array($_GET['st'], array('asc_c1new', 'asc_c1new1', 'asc_c6', 'asc_c2', 'asc_c3', 'asc_feature', 'asc_c7', 'asc_t2', 'asc_t3',
		'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1', 'asc_s2', 'asc_s3', 'asc_s4',
		'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report', 'asc_promote', 'asc_autocare', 'asc_buypro',
		'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5', 'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
		'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
		'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10'))) {
	$refStr = '-' . $_GET['st'];
} else {
	$refStr = '';
}

if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
	$refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>Promozione Limitata, sconti fino al 85% su Advanced SystemCare PRO – Offerta Esclusiva 2018 di IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<div class="banner">
	 	<div class="wrapper">
	 		<a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
	 		<div class="title">
				<h1>TUTTO SOTTOCOSTO!</h1>
				<p>Fino all'85%di sconto, solo a Natale 2017. APPROFITTANE SUBITO!</p>
			</div>
			<div class="showcase normal clearfix">
				<div class="subcase single">
					<div class="discount">50% di sconto</div>
					<div class="countdown">
						<strong class="packsNum">84</strong> Pezzi Rimasti Oggi
					</div>
					<dl>
						<dt>
							<img src="<?php echo $pResUrl; ?>images/boxshot-asc.png" alt="">
						</dt>
						<dd class="price"><del>€29,99</del>  €<strong>14,99</strong></dd>
						<dd>
							<a href="http://www.iobit.com/buy.php?product=it-asc111pc1499&ref=it_asc111pc1499purchase1711<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1711-it')" class="button button-top-mid"><strong>acquista Ora!</strong> <span>Risparmi <b>€15,00</b></span></a>
						</dd>
					</dl>
				</div>
				<div class="maincase">
					<div class="discount">85% di sconto</div>
					<div class="countdown clearfix">
						<span>Mancano: </span>
						<ul>
							<li><strong>05</strong> ore</li>
							<li><strong>05</strong> min</li>
							<li><strong>05</strong> sec</li>
							<li><strong>05</strong> ms</li>
						</ul>
						<sup>*</sup>
					</div>
					<dl>
						<dt>
							<img src="<?php echo $pResUrl; ?>images/boxshot-giftpack.png" alt="">
						</dt>
						<dd class="price"><del>€139,92</del>  €<strong>17,99</strong></dd>
						<dd>
							<a href="http://www.iobit.com/buy.php?product=it-asc11iuamcpf3pc1799&ref=it_asc113pciuamcpf1799purchase1711<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiuamcpf1711-it')" class="button button-top-lag"><strong>acquista Ora!</strong> <span>Risparmi <b>€121,93</b></span></a>
						</dd>
						<dd class="last">Più di 4,698,204 acquistati</dd>
					</dl>
				</div>
				<div class="subcase double three-box">
					<div class="discount">75% di sconto</div>
					<div class="countdown">
						<span>Mancano: </span>
						<ul>
							<li><strong>05</strong> ore</li>
							<li><strong>05</strong> min</li>
							<li><strong>05</strong> sec</li>
							<li><strong>05</strong> ms</li>
						</ul>
						<sup>*</sup>
					</div>
					<dl>
						<dt>
							<img src="<?php echo $pResUrl; ?>images/boxshot-asciu.png" alt="">
						</dt>
						<dd class="price"><del>€79,98</del>  €<strong>17,99</strong></dd>
						<dd>
							<a href="http://www.iobit.com/buy.php?product=it-asc11iu3pc1799&ref=it_asc113pciu1799purchase1711<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1711-it')" class="button button-top-mid"><strong>acquista Ora!</strong> <span>Risparmi <b>€61,99</b></span></a>
						</dd>
					</dl>
				</div>
			</div>
	 	</div>
	</div>
	<div class="payments wrapper">
		<img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
	</div>
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>Fai tornare subito il tuo PC come nuovo!</h2>
			<div class="showcase">
				<div class="inner">
					<ul class="screenshot">
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
						</li>
						<li>							
							<img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
						</li>
						<li>							
							<img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
						</li>
						<li>							
							<img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
						</li>
					</ul>					
				</div>	
				<ul class="zoom">
					<li></li>
					<li></li>
					<li class="fun2">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
						</div>
					</li>
					<li class="fun3">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
						</div>
					</li>
					<li class="fun4">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
						</div>
					</li>						
				</ul>			
			</div>
			<div class="detail-list">
				<dl>
					<dt><i class="benfits01"></i></dt>
					<dd>
						<h3>MAGGIORE SPAZIO LIBERO</h3>
						<p>Pulisce profondamente i file spazzatura, i collegamenti invalidi e i file di registro di sistema con ottimizzazione avanzata</p>
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
					<dt><i class="benfits03"></i></dt>
					<dd>
						<h3>300%* PIÙ RAPIDO</h3>
						<p>Aumenta notevolmente la velocità di download, di gioco, di navigazione su Internet e su piattaforme video come YouTube fino al 300% in più</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits04"></i></dt>
					<dd>
						<h3>100% PROTEZIONE </h3>
						<p>Protegge la tua privacy da tutti i tipi di rilevamenti effettuati da intrusi maligni</p>
					</dd>
				</dl>
				<a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Per maggiori informazioni clicca qui ></a>
			</div>
		</div>
	</div>
	<!-- end benfits -->
	<!-- gifts -->
	<div class="gifts">
		<div class="wrapper">
			<h2>Regali Gratis solo per abbonamento di 3PC / 1 Anno</h2>
			<div class="gift-list clearfix">
				<div class="lists">
					<div class="tag"></div>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/giftbox-iu.png" alt=""></dt>
						<dd>
							<span><del>€29,99</del>  €<strong>0</strong> </span>
							La scelta migliore per disinstallare in modo potente i programmi e plug-in ostinati!</dd>
					</dl>
				</div>
				<div class="lists">
					<div class="tag"></div>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/giftbox-pf.png" alt=""></dt>
						<dd>
							<span><del>€39,95</del>  €<strong>0</strong> </span>
							Lo strumento più affidabile e più facile da usare per proteggere le cartelle!</dd>
					</dl>
				</div>
				<div class="lists last">
					<div class="tag"></div>
					<dl>
						<dt><img src="<?php echo $pResUrl; ?>images/giftbox-amc.png" alt=""></dt>
						<dd>
							<span><del>€19,99</del>  €<strong>0</strong> </span>
							La migliore applicazione per proteggere e accelerare il tuo dispositivo Android!</dd>
					</dl>
				</div>
			</div>
			<a href="http://www.iobit.com/buy.php?product=it-asc11iuamcpf3pc1799&ref=it_asc113pciuamcpf1799purchase1711<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiuamcpf1711-it')" class="button btn-mid-lag">OTTIENI I REGALI SUBITO!</a>

		</div>
	</div>
	<!-- end gifts -->
	<!-- review -->
	<div class="reviews wrapper">
		<h2>Riconoscimenti e Recensioni in tutto il mondo</h2>
		<p>Scelto da oltre <span>250 milioni</span> di utenti mondiali</p>
		<div class="map">
			<div class="stand">				
				<div class="pointer cnet"></div>
				<div class="zoom cnet-zoom">
					<img src="<?php echo $pResUrl; ?>images/media-review-cnet.png" alt="" >
				</div>				
				<div class="pointer user"></div>
				<div class="zoom user-zoom">
					<img src="<?php echo $pResUrl; ?>images/user-review-04.png" alt="">
				</div>				
				<div class="pointer softnic"></div>
				<div class="zoom softnic-zoom">
					<img src="<?php echo $pResUrl; ?>images/media-review-softnic.png" alt="">
				</div>				
			</div>
			<div class="carousel">
				<div class="zoom turns1 active">
					<img src="<?php echo $pResUrl; ?>images/media-review-htmlit.png" alt="">
				</div>
				<div class="zoom turns2">
					<img src="<?php echo $pResUrl; ?>images/user-review-03.png" alt="">
				</div>
				<div class="zoom turns3">
					<img src="<?php echo $pResUrl; ?>images/media-review-01net.png" alt="">
				</div>
				<div class="zoom turns4">
					<img src="<?php echo $pResUrl; ?>images/media-review-baixaki.png" alt="">
				</div>
				<div class="zoom turns5">
					<img src="<?php echo $pResUrl; ?>images/user-review-01.png" alt="">
				</div>
				<div class="zoom turns6">
					<img src="<?php echo $pResUrl; ?>images/user-review-02.png" alt="">
				</div>				
			</div>
		</div>
	</div>
	<!-- end review -->
	<!-- compare -->
	<div class="compare wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="text" colspan="2">Confronto delle funzionalità:</th>
				<th class="spac"></th>
				<th class="itemb">
					<span>Advanced SystemCare 11</span>
					<strong>FREE </strong>
				</th>
				<th class="spac"></th>
				<th class="itema">
					<span>Advanced SystemCare 11</span>
					<strong>PRO </strong>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
				<td class="virtue">Pulizia, riparazione ed ottimizzazione di base del sistema</td>
				<td class="spac"></td>
				<td class="itemb itembg"><i class="all-icons">√</i></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
				<td class="virtue">
					Protegge il PC dagli accessi non autorizzati con FaceID
					<span class="all-icons">Migliorato</span>
				</td>
				<td class="spac"></td>
				<td class="itemb itembg"><i class="all-icons">√</i></td>
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
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
				<td class="virtue">
						200% più veloce l’avvio con Ottimizzazione dell’Avvio
						<span class="all-icons">Migliorato</span>
				</td>
				<td class="spac"></td>
				<td class="itemb"></td>
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
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
				<td class="virtue"> <em>Nuovo motore di ottimizzazione del disco rigido per l'accesso più rapido all’Hard Driver</em> <span class="all-icons nuo last">Nuovo</span></td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
				<td class="virtue">Protezione in tempo reale contro le minacce alla sicurezza</td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
				<td class="virtue">Rilevazione completa contro le infezioni più profonde</td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
				<td class="virtue">
					Rimuove automaticamente gli annunci e le tracce di privacy per una navigazione più sicura
				</td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
				<td class="virtue">Pulizia automatica della RAM per un miglior funzionamento del PC <span class="all-icons ">Migliorato</span></td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
				<td class="virtue">Aggiornamento automatico alla versione più recente</td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
				<td class="virtue">24/7 Supporto tecnico in gratuito</td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
				<td class="virtue">Supporta 3 PC</td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
		</tbody>
	</table>
	</div>
	<!-- end compare -->
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<div class="title">
				<h2>Con solo €1,5 al mese, OTTIENI UN PC SUPER VELOCE, COME NUOVO!</h2>
			</div>
			<div class="cartarea clearfix">
				<div class="showcase">
					<ul class="pack">
						<li><img src="<?php echo $pResUrl; ?>images/boxshot-asc.png" alt=""></li>
						<li><img src="<?php echo $pResUrl; ?>images/boxshot-giftpack.png" alt=""></li>
						<li><img src="<?php echo $pResUrl; ?>images/boxshot-asciu.png" alt=""></li>
					</ul>
				</div>
				<div class="selection">
					<ul>
						<li class="single" data-url="http://www.iobit.com/buy.php?product=it-asc111pc1499&ref=it_asc111pc1499purchase1711<?php echo $refStr;?>&refs=it_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1711-it')" data-original="€29,99" data-price="14,99" data-scanty="€15,00">1 PC / 1 Anno  -50%</li>
						<li class="pack active" data-url="http://www.iobit.com/buy.php?product=it-asc11iuamcpf3pc1799&ref=it_asc113pciuamcpf1799purchase1711<?php echo $refStr;?>&refs=it_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiuamcpf1711-it')" data-original="€139,92" data-price="17,99" data-scanty="€121,93">3 PC / 1 Anno + 3 Regali Gratis -85%</li>
						<li class="double " data-url="http://www.iobit.com/buy.php?product=it-asc11iu3pc1799&ref=it_asc113pciu1799purchase1711<?php echo $refStr;?>&refs=it_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiu1711-it')" data-original="€79,98" data-price="17,99" data-scanty="€61,99">3 PC / 1 Anno + 1 Regalo Gratis -75%</li>
					</ul>
				</div>
				
				<dl class="btnarea">
					<dt><del class="original">€139,92</del>  €<strong class="price">17,99</strong></dt>
					<dd>
						<a href="http://www.iobit.com/buy.php?product=it-asc11iuamcpf3pc1799&ref=it_asc113pciuamcpf1799purchase1711<?php echo $refStr;?>&refs=it_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCiuamcpf1711-it')" class="button button-btm-lag">
							<strong>Approfittane Ora!</strong> <span>Risparmi <b class="scanty">€121,93</b></span>
						</a>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- end bottomcart -->
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
	<!-- end payments -->
	<!-- footer -->
	<div class="footer">
		<dl class="annotation wrapper">
			<dt>Note:</dt>
			<dd>
				* I dati potrebbero variare in base al sistema o computer.
			</dd>
			<dd>
			 * Tali promozioni sono soggette alle modifiche senza preavviso, periodicamente alla nostra esclusiva discrezione.
			</dd>
			<dd>
				* Licenza per AMC Security Versione Completa con pubblicità interna.
			</dd>
		</dl>
		<div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
	</div>
	<!-- end footer -->
	<!-- float -->
	<div class="float">
		<a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
		<dl>
			<dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
			<dd>ha appena attivato <span id="saleType"><?php echo $saleType;?></span> PC / 1 Anno</dd>
		</dl>
	</div>
	<div id="ghost"></div>
	<script src="<?php echo $pResUrl; ?>script/script.js"></script>
	<script src="<?php echo $pResUrl; ?>script/timer.jquery.min.js"></script>
</body>
</html>