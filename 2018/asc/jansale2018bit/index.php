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

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -70867174;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/it_name_natale.txt',rand(1,454))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$saleType=(rand(1,6)%6==0)?1:5;
if($_GET['type']==2){
	$saleType=3;
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
		'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
		'asc_gift','asc_pro11','asc_pro12'))) {
	$refStr = '-' . $_GET['st'];
} else {
	$refStr = '';
}
?>
<!DOCTYPE html>
<html lang="it">
<head>
	<meta charset="UTF-8">
	<title>Saldi 2018, sconti fino all’83% su Advanced SystemCare PRO – Offerta Speciale di IObit</title>
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
	 		<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
	 		<div class="wrapper">
	 			<div class="title">
	 				<h1>Offerte a Tempo Limitato</h1>
	 				<p>SCONTI FINO AL 85%</p>
	 			</div>
	 			<div class="defalut-exceed"></div>
	 			<div class="sold-box">
	 				<h2>Mancano: <strong>55</strong> ore <strong>55</strong> min <strong>55</strong> sec <strong>55</strong> ms *</h2>
	 				<div class="img-box">
	 					<span class="three-img"></span>
	 					<span class="one-img"></span>
	 				</div>
	 				<dl>
	 					<dt><strong>83%</strong> di sconto</dt>
	 					<dd>
              <!-- 83% buybtn -->
              <a href="https://www.iobit.com/buy.php?product=it-asc125pcsd1999&ref=it_asc125pcsd1999purchase1801b<?php echo $refStr;?>&refs=it_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase5pcsd1801b-it')"
                 class="button button-top-lag">
                <span></span>Approfittane Ora!
              </a>
            </dd>
	 					<dd>Più di <span class="buyNum"><?php echo $buyNum?></span> acquistati</dd>
	 				</dl>
	 			</div>
	 			<div class="one-pc-box">
	 				<div class="img-box">
	 					<span class="one-img"></span>
	 					<span class="three-img"></span>
	 				</div>
	 				<dl>
	 					<dt><strong>60%</strong> di sconto</dt>
	 					<dd>
              <!-- 60% buybtn -->
              <a href="https://www.iobit.com/buy.php?product=it-asc123pc1799&ref=it_asc123pc1799purchase1801b<?php echo $refStr;?>&refs=it_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3pc1801b-it')"
                 class="button">
                ACQUISTA Ora!
              </a>
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
    <!-- title -->
    <h2>Attiva le funzionalità super potenti</h2>
    <p class="subtitle">Cogli l’attimo e fai tornare il PC come nuovo!</p>
    <!-- content -->
    <div class="content clearfix">
      <!-- left lists -->
      <ul class="left-lists fl">
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon01.png" alt=""></dt>
            <dd class="fl">
              <h3>200%*</h3>
              <p>
                Riduce gli inceppamenti e i ritardi del<br>
                sistema incrementando la sua<br>
                velocità fino al 200% in più.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon02.png" alt=""></dt>
            <dd class="fl">
              <h3>Più Approfondito</h3>
              <p>
                Ripara i problemi di registro per<br>
                ridurre i blocchi di Windows e i<br>
                messaggi di errore.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/benfits-icon03.png" alt=""></dt>
            <dd class="fl">
              <h3>Sicurezza della Privacy</h3>
              <p>
                Protegge da accessi segreti i tuoi dati<br>
                sensibili come contatti, posta<br>
                elettronica, Dropbox, OneDrive ecc.
              </p>
            </dd>
          </dl>
        </li>
      </ul>
      <!-- right lists -->
      <ul class="right-lists fr">
        <li>
          <dl class="clearfix">
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/benfits-icon04.png" alt=""></dt>
            <dd class="fr">
              <h3>300%*</h3>
              <p>
                Accelera download, gioco, navigazione<br>
                su Internet e su piattaforme video<br>
                come YouTube fino al 300% in più.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/benfits-icon05.png" alt=""></dt>
            <dd class="fr">
              <h3>Automatico</h3>
              <p>
                Blocca automaticamente i<br>
                programmi inutilizzati per liberare<br>
                più RAM del PC.
              </p>
            </dd>
          </dl>
        </li>
        <li>
          <dl class="clearfix">
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/benfits-icon06.png" alt=""></dt>
            <dd class="fr">
              <h3>Più Sicuro</h3>
              <p>
                Cancella le tracce di Privacy<br>
                impedendone i tracciamenti maligni.
              </p>
            </dd>
          </dl>
        </li>
      </ul>
      <!-- the anchor to compare -->
      <a class="textlink" href="Javascript:void(0);">Per maggiori informazioni clicca qui ></a>
    </div>
  </div>
</div>
	<!-- end benfits -->
	<!-- gifts -->
	<div class="gifts">
		<h2>Regalo Gratis solo per Super Offerta</h2>
		<div class="wrapper">
			<div class="gift-list clearfix">
				<div class="lists exceed">
					<img src="<?php echo $pResUrl; ?>images/iu-gift.png" alt="">
					<dl>
						<dt>
							<h3>IObit Uninstaller 8 PRO</h3>
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
							<h3>Smart Defrag 6</h3>
							<del>€29,99</del> <strong>€<b>0</b></strong>
						</dt>
						<dd>
							Offre la migliore deframmentazione del disco <br> e accelera al massimo l'hard driver!
					</dl>
				</div>
			</div>
      <!-- 83% buybtn -->
      <a href="https://www.iobit.com/buy.php?product=it-asc125pcsd1999&ref=it_asc125pcsd1999purchase1801b<?php echo $refStr;?>&refs=it_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase5pcsd1801b-it')"
         class="button btn-mid-lag">
        <span></span>OTTIENI I REGALI SUBITO!
      </a>

		</div>
	</div>
	<!-- end gifts -->
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
	<!-- end review -->
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
    <!-- 15 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
      <td class="virtue">
        Mantieni i tuoi dati personali lontani dai programmi inaffidabili
        <span class="all-icons nuo">Nuovo</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 16 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_16.png"></td>
      <td class="virtue">
        <em>Nessuno può rubare la tua impronta digitale per tracciare la tua navigazione sul web</em>
        <span class="all-icons nuo last">Nuovo</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 02 -->
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
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">
        200% avvio più veloce con Ottimizzazione all’Avvio
        <span class="all-icons">Migliorato</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 04 -->
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
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">
        <em>Nuovo motore di ottimizzazione del disco rigido per l'accesso più rapido all’Hard Driver</em>
        <span class="all-icons nuo last">Nuovo</span>
      </td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Protezione in tempo reale contro le minacce alla sicurezza</td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Rilevazione completa contro le infezioni più profonde</td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 08 -->
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
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Pulizia automatica della RAM per far funzionare il PC più scorrevolmente <span class="all-icons ">Migliorato</span></td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
      <td class="virtue">Aggiornamento automatico alla versione più recente</td>
      <td class="spac"></td>
      <td class="itemb"><i class="all-icons close">X</i></td>
      <td class="spac"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <!-- 11 -->
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
	<!-- end compare -->
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>Con solo <strong>€<b>1,5</b></strong> al mese, fai funzionare il tuo PC come un NUOVO!</h2>
			<div class="cartarea clearfix">
				<div class="showcase">
					<span class="img"></span>
				</div>
				<div class="selection">
					<ul>
						<li class="three-pc active" ><i></i> <span>5 PC / 1 Anno + SD</span> <strong>-83%</strong></li>
						<li class="one-pc"><i></i> <span>3 PC / 1 Anno </span> <strong>-60%</strong></li>
					</ul>
				</div>
				
				<dl class="btnarea">
					<dt> <strong><b>19</b>,99</strong> <del>119,98</del>   Risparmi <span>99,99</span></dt>
					<dd>
            <!-- 83% buybtn -->
            <a href="https://www.iobit.com/buy.php?product=it-asc125pcsd1999&ref=it_asc125pcsd1999purchase1801b<?php echo $refStr;?>&refs=it_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase5pcsd1801b-it')"
               class="button button-top-lag">
              <span></span>Approfittane Ora!
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
		</dl>
		<div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</div>
	</div>
	<!-- end footer -->
	<!-- float -->
	<div class="float">
		<a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
		<dl>
			<dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
			<dd>ha già attivato <span id="saleType"><?php echo $saleType;?></span> PC / 1 Anno</dd>
		</dl>
	</div>
	<script type="text/javascript">refStr='<?php echo $refStr;?>';</script>
	<script src="<?php echo $pResUrl; ?>script/script.js"></script>
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
</body>
</html>