<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="it">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Speciale Natale, sconti fino all'89% su IObit Malware Fighter PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script type="text/javascript">
  		var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
		var paramTo=MApp(2.2).url.getParameters('to');
  </script>
</head>
<body>
  <!-- banner -->
  <div class="banner">
	 <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/it/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>OFFERTA DI NATALE</h1>
    <!-- subtitle -->
    <p>
      Sconti fino all’<b>89</b>% ! Paghi 1 e hai 3 regali GRATUITI, approfittane ora!
    </p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <div class="message-box">
			<div class="message-box-sale"><p>-50%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
		</div>
        <p>1 anno / 1 PC</p>
        <dl>
          <dd class="clearfix">
            Risparmi : <span class="fr">21,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>17</b>,99€ <del>39,95€</del></p>
          </dd>
          <dd>
            <a class="buybtn" href="http://www.iobit.com/buy.php?product=it-imf81pc1799&ref=it_imf81pc1799purchasexmasxr2020<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1pcxmasxr2020-it');"> <i class="all-icons"></i> ACQUISTA ORA </a>
          </dd>
        </dl>
      </div>

      <!-- imf-85 -->
      <div class="message large fr">
		<div class="countd countdown">
			<div class="countdcnt">
				<strong>00</strong><span>h :</span>
				<strong>00</strong><span>m :</span>
				<strong>30</strong><span>s</span>
			</div>
		</div>
		<div class="message-box">
			<div class="message-box-sale message-box-eaux"><p>-89%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
			<div class="xmas-giveaway"></div>
			<div class="message-tips"><i class="all-icons"></i><p>I regali esclusivi includono Protected Folder, Smart Defrag PRO e IObit Software Updater PRO.</p></div>
		</div>
        <p> 1 anno / 3 PC + <del class="messagecad">3 REGALI PRO</del></p>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Risparmi : <span class="fr largeolsa"><em>142,89</em>€</span>
          </dd>
          <dd class="two">
            <p class="price largemony"><b>16</b>,99€ <del class="largeold"><em>159,88</em>€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="http://www.iobit.com/buy.php?product=it-imf83pcsdisupf1699&ref=it_imf83pcsdisupf1699purchasexmasxr2020<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcsdisupfxmasxr2020-it');"> <i class="all-icons"></i> ACQUISTA ORA </a>
          </dd>
        </dl>
      </div>
	  
	  <div class="message message3">
	    <dl>
	      <dd class="two">
	        <p class="price"><b>19</b>,99€ <del>59,95€</del></p>
	      </dd>
	      <dd>
	        <a class="buybtn"
	           href="http://www.iobit.com/buy.php?product=it-imf83pc1999&ref=it_imf83pc1999purchasexmasxr2020<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcxmasxr2020-it');"> <i class="all-icons"></i> ACQUISTA ORA </a>
	      </dd>
	    </dl>
	  </div>
    </div>
	</div>
  </div>
  <!-- end banner -->
<div class="xmas-annou"><i class="all-icons"></i>I regali scadono tra 15 minuti. Non farteli scappare!</div>
<div class="xmas-payment"></div>
<div class="wrapper xmas-pour">
  <!-- feature -->
  <div class="feature">
    <h2>Perché scelgo IObit Malware Fighter PRO ?</h2>
    <p>Solo PRO difende in modo completo il tuo PC contro 209 milioni di minacce</p>
  </div>
  <!-- end feature -->

  <!-- intro -->
  <div class="intro">
    <!-- 01 -->
    <dl class="one clearfix">
      <dd>
		<img src="<?php echo getStaticUrl('images/xmas-icon1.png')?>" alt="">  
        <h3>Motore Bitdefender</h3>
        <p>Impedisce a oltre 209 milioni di minacce di infettare e danneggiare il tuo computer.</p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon2.png')?>" alt="">
        <h3>Protezione dati sensibili</h3>
        <p>Utilizza password per proteggere i tuoi dati sensibili in modo che nessuno possa accedervi senza la tua autorizzazione.</p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon3.png')?>" alt="">
        <h3>Motore Anti-Ransomware</h3>
        <p>Blocca i ransomware che tentano di entrare nel tuo computer o crittografare i tuoi file importanti.</p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon4.png')?>" alt="">
        <h3>Navigazione Internet più sicura</h3>
        <p>Elimina automaticamente cookie e tracce pericolose quando chiudi il browser impedendo agli hacker di cercare ciò che leggi, visualizzi o acquisti online.</p>
        </p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->
</div>
  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper gifts-cont">
		<h2>3 regali gratuiti PRO per un tempo limitato !</h2>
		<p>Il tempo è limitato, non farteli scappare !</p>
		<div class="gifts-giveway gifts-giveway1">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>IObit Software Updater 3 PRO <b>0€</b> <del>29,99€</del> <span>(1 Anno / 1 PC)</span></h4>
				<ul>
					<li>Fornisce i software più popolari, inclusi i loro ultimi aggiornamenti, tutto con un solo clic.</li>
					<li>Semplifica i tuoi aggiornamenti rilevando automaticamente lo stato dei software e aggiornando automaticamente i software obsoleti.</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway2">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Smart Defrag 6 PRO <b>0€</b> <del>29,99€</del> <span>(1 Anno / 1 PC)</span></h4>
				<ul>
					<li>Deframmenta file di grandi dimensioni per aumentare la velocità di scrittura e lettura del disco e migliorarne la durata.</li>
					<li>Monitora lo stato del disco in tempo reale: temperatura, utilizzo, analisi del disco in automonitoraggio ecc.</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway3">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Protected Folder <b>0€</b> <del>39,95€</del> <span>(1 Anno / 1 PC)</span></h4>
				<ul>
					<li>Protegge più efficacemente i tuoi dati, cartelle e file importanti con l’uso di una password.</li>
					<li>Anche se il PC viene attaccato da virus, spyware e ransomware il motore di Protected Folder può mantenere i file bloccati e protetti.</li>
				</ul>
			</div>
		</div>
	</div>
  </div>
  <!-- end gifts -->
<div class="gifts-store">
	<div class="gifts-store-arrow"></div>
	<a class="buybtn" href="http://www.iobit.com/buy.php?product=it-imf83pcsdisupf1699&ref=it_imf83pcsdisupf1699purchasexmasxr2020<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcsdisupfxmasxr2020-it');"> <i class="all-icons"></i>Approfittane ora</a>
	</dd>
</div>
  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <h2>La versione PRO ti offre una protezione più completa !</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-a"><p>La tua versione attuale</p></th>
          <th class="item-b"></th>
          <th class="item-c"><p>IObit Malware Fighter 8 PRO</p></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-a">9 milioni</td>
          <td class="item-b">Database Anti-Malware</td>
          <td class="item-c">Più di 209 milioni</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
          <td class="item-b">Motore Anti-Virus di Bitdefender</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
          <td class="item-b">Motore Anti-Ransomware</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
          <td class="item-b">Protezione della webcam</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
          <td class="item-b">Protezione anti-tracciamento</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
          <td class="item-b">Protezione chiave USB</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
          <td class="item-b">Dati sensibili protetti da password</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
          <td class="item-b">Protezione in tempo reale</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponibile</td>
          <td class="item-b">Aggiornamento automatico</td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2>Migliaia di utenti in tutto al mondo hanno scelto<br> IObit Malware Fighter per il loro PC</h2>
    <div class="content">
      <div class="details">
        <div class="active">
          <h4>Recensioni dei media</h4>
          <p>« IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojan, worm, keylogger e bot. Il programma utilizza due motori AV - il proprio e BitDefender – ed è efficace contro i malware impossibili da rilevare con altri strumenti. Un altro vantaggio è che funziona contemporaneamente con il programma standard AV. IObit Malware Fighter PRO è in grado di rilevare vari tipi di spyware, ransomware, adware, Trojans, worms, keyloggers e bots. »</p>
		  <h5>Software.Informer</h5>
        </div>
        <div>
          <h4>Recensioni degli utenti</h4>
          <p>« Abbiamo utilizzato tanti programmi diversi per mantenere i nostri PC puliti e senza nessun intoppo. Ogni settimana ci volevano ore per questo processo. Ora, con IObit Malware Fighter Pro e Advanced System Care Pro, tutto è al suo posto e ci vogliono solo pochi minuti ogni due giorni per fare lo stesso lavoro con molta più fiducia. Il computer non ha più nessun problema dopo aver installato i prodotti di IObit. »</p>
		  <h5>Bob Bassett</h5>
        </div>
        <div>
          <h4>Recensioni degli utenti</h4>
          <p>« Mi hanno consigliato Malware Fighter di IObit alcuni anni fa. All'inizio ero scettico, ma dopo averlo installato, è diventato il mio programma anti-malware preferito. È molto facile da usare. Dopo anni d'uso, ha già rilevato e rimosso diverse minacce. Con la collaborazione degli altri programmi IObit, per esempio ASC, il mio computer è ben protetto. Cosiglio questo programma a tutta la mia famiglia e tutti i miei amici. »</p>
		  <h5>Peter Stoffers</h5>
        </div>
        <div>
          <h4>Recensioni degli utenti</h4>
          <p>« Sono molto soddisfatto del vostro prodotto – IObit Malware Fighter. Prima di conoscerlo le interferenze maligne mi causavano moltissimi problemi, non riuscivo a guardare un film per intero o godermi un concerto. Grazie al vostro programma, ogni operazione è diventata chiara, sicura e ben protetta. IObit Malware Fighter scansiona il mio PC portatile senza influenzarne le prestazioni, per questo motivo l’ho consigliato a due miei amici. »</p>
		  <h5>Gelu Batir</h5>
        </div>
		<div>
		  <h4>Recensioni degli utenti</h4>
		  <p>« Voglio ringraziare tutto lo staff di IObit per il loro impegno nel rilasciare sempre i programmi migliori. Questo aggiornamento è eccellente per gli utenti. La scansione è molto più veloce ed è facilissimo da usare. Chi cerca un buon programma anti-virus e anti-malware con un buon rapporto qualità-prezzo non deve fare altro che scaricare IObit Malware Fighter. Non accontentatevi, provate il migliore, IObit Malware Fighter. »</p>
		  <h5>David Cassidy</h5>
		</div>
      </div>
	  <ul>
		  <a class="next nextbtn" href="javascript: nextFun();"></a>
		  <li class="one"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
		  <li class="two"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
	      <li class="three"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Gelu Batir"></li>
	      <li class="four"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
	      <li class="five"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
	  	
	  </ul>
    </div>
  </div>
  <!-- end review -->
  
  <div class="award">
	  <div class="wrapper">
		  <h2>Raccomandato anche da</h2>
		  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="Gelu Batir">
	  </div>
  </div>
  
  

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">SUPER RISPARMIO DI NATALE !</h2>
    <!-- box -->
	<div class="wrapper bottom-buy-center">
    <div class="box fl">
	  <div class="bottom-buyimg bottom-buy1"></div>
	  <div class="bottom-buyimg bottom-buy2 on"></div>
	  <div class="bottom-buyimg bottom-buy3 opci0"></div>
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="top">1 Anno / 1 PC</li>
      <li class="active mid">1 Anno / 3 PC + <small>3 Regali esclusivi</small></li>
      <li class="bot opci0">1 Anno / 3 PC</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>16</b>,99€ <del>159,88€</del></p>
      </dd>
      <dd>
        <a class="buybtn small" href="http://www.iobit.com/buy.php?product=it-imf83pcsdisupf1699&ref=it_imf83pcsdisupf1699purchasexmasxr2020<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=it_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase3pcsdisupfxmasxr2020-it');">
          <i class="all-icons"></i> ACQUISTA ORA
        </a>
      </dd>
    </dl>
	</div>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Garanzia di rimborso</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Pagamento 100% sicuro</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/service-client.png" alt=""></dt>
        <dd>
          <h3>Servizio clienti 24/7</h3>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Note:</dt>
        <dd>* Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tutti i diritti riservati</p>
    </div>
  </div>
  <!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>