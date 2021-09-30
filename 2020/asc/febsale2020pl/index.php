<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$buyNum = ceil(microtimeFloat() * 1000 / 20000) - 76400174;
$buyNum = number_format($buyNum);

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if (in_array($_GET['pop'], array('x_asc', 'xr_sdpasc', 'xr_dbpasc'))) {
    $refStr .= '-' . $_GET['pop'];
}
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
if (in_array($_GET['to'], array('event1', 'ascrenew'))) {
    $refStr .= '-' . $_GET['to'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Zaoszczędź do 80% na Advanced SystemCare PRO - IObit!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<div class="banner">
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/pl/index.php" target="_blank" class="logo">IObit</a>
			<h1>Tchnij nowe życie w swój komputer! Zgarnij do 80% zniżki.</h1>
			<h2>Pośpiesz się, oferta ograniczona czasowo!</h2>

 			<div class="one-pc-box">
 				<div class="img-box">
 					<img src="<?php echo getStaticUrl('images/onepc.png')?>" alt="">
 				</div>
 				<dl>
 					<dt><strong>40%</strong> ZNIŻKI</dt>
 					<dd>
 						<a href="https://www.iobit.com/buy.php?product=pl-asc131pc69test&ref=pl_asc131pc69purchase2002<?php echo $refStr; ?>&refs=pl_purchase_asc" 
 						   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2002-pl');" 
 						   class="button border">
 						  AKTYWUJ TERAZ
 						</a>
 					</dd>
 				</dl>
 			</div>

 			<div class="packs">
 				<h3><img src="<?php echo getStaticUrl('images/date.png')?>" alt=""><strong>06</strong> min <strong>11</strong> sek <strong>08</strong> ms</h3>
 				<div class="img-box">
 					<span></span>
 				</div>
 				<dl>
 					<dt><strong>80%</strong> ZNIŻKI</dt>
 					<dd>
 						<a href="https://www.iobit.com/buy.php?product=pl-asc133pciupf74test&ref=pl_asc133pciupf74purchase2002<?php echo $refStr; ?>&refs=pl_purchase_asc" 
 						   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2002-pl');" 
 						   class="button">
 						  <span></span>
 						  Aktywuj teraz
 						</a>
 					</dd>
 					<dd><span class="buyNum">5,414,943</span> osób już to kupiło</dd>
 				</dl>
 			</div>

 			<div class="one-pc-box three-pcs">
 				<div class="img-box">
 					<span></span>
 				</div>
 				<dl>
 					<dt><strong>60%</strong> ZNIŻKI</dt>
 					<dd>
 						<a href="https://www.iobit.com/buy.php?product=pl-asc133pc74test&ref=pl_asc133pc74purchase2002<?php echo $refStr; ?>&refs=pl_purchase_asc" 
 						   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2002-pl');" 
 						   class="button border">
 						  Aktywuj teraz
 						</a>
 					</dd>
 				</dl>
 			</div>
	 	</div>
	</div>
	<div class="payments wrapper">
		<img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
	</div>
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2><span>Wykorzystaj w pełni możliwości swojego komputera w te święta!</span></h2>
			<div class="showcase">
				<div class="inner">
					<ul class="screenshot">
						<li>
						  <img src="<?php echo getStaticUrl('images/screenshot-00.jpg')?>" alt="">
						</li>
						<li>
						  <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt="">
						</li>
						<li>
						  <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt="">
						</li>
						<li>
						  <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt="">
						</li>
						<li>
						  <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt="">
						</li>
					</ul>
				</div>
				<ul class="zoom">
					<li></li>
					<li class="fun3">
						<div class="container">
						  <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt="">
						</div>
					</li>
					<li class="fun2">
						<div class="container">
						  <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt="">
						</div>
					</li>
					<li class="fun4">
						<div class="container">
						  <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt="">
						</div>
					</li>
					<li class="fun5">
						<div class="container">
						  <img src="<?php echo getStaticUrl('images/screenshot-05-zoom.png')?>" alt="">
						</div>
					</li>
				</ul>
				<ul class="list-icon">
					<li class="active"></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="detail-list">
				<dl>
					<dt><i class="benfits04"></i></dt>
					<dd>
						<h3>100% OCHRONY</h3>
						<p>Chroni Twoją prywatność i dane przed nieporządanym dostępem, dwukrotnie lepiej* niż wersja darmowa.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits02"></i></dt>
					<dd>
						<h3>200%* SZYBSZY SYSTEM</h3>
						<p>Czyści niepotrzebne pliki i optymalizuje procesor i pamięć RAM w celu uzyskania szybszego systemu. Sprawia, że Twój system jest do 200% szybszy niż przy użyciu darmowej wersji.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits03"></i></dt>
					<dd>
						<h3>300%* SZYBSZY INTERNET</h3>
						<p>Pobieranie, granie online, strony internetowe i filmy z YouTube są do 300% szybsze niż w wersji darmowej. </p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits01"></i></dt>
					<dd>
						<h3>WIĘCEJ MIEJSCA NA DYSKU</h3>
						<p>Całkowicie usuwa niepotrzebne pliki, nieprawidłowe skróty, elementy rejestru i niedokończone pliki do pobrania.</p>
					</dd>
				</dl>
				<a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Więcej informacji></a>
			</div>
		</div>
	</div>
	<!-- end benfits -->
	<!-- gifts -->
	<div class="gifts default">
		<div class="wrapper">
			<h2>Zgarnij dwa darmowe prezenty!</h2>
			<img class="img-box" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt="">
			<div class="dl-box">
				<dl>
					<dt>IObit Uninstaller PRO</dt>
					<dd>Oferuje wydajną defragmentację dysku i maksymalnie<br> przyspiesza jego prędkość!</dd>
				</dl>
				<dl>
					<dt>Protected Folder</dt>
					<dd>Chroń swoje pliki osobiste i trzymaj je z dala od<br> złośliwych ataków! </dd>
				</dl>
			</div>
			<div class="price">
				<span><strong>0zł</strong> <del>269,80zł</del></span>
				<a href="https://www.iobit.com/buy.php?product=pl-asc133pciupf74test&ref=pl_asc133pciupf74purchase2002<?php echo $refStr; ?>&refs=pl_purchase_asc" 
				   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2002-pl');" 
				   class="button btn-gift-lag">
				  ODBIERZ PREZENTY TERAZ
				 </a>
				<p><strong>6</strong> min <strong>11</strong> sek <strong>08</strong> ms</p>
			</div>
		</div>
	</div>
	<!-- end gifts -->
	<div class="gifts exceed hide">
		<div class="wrapper">
			<div class="message">
				<h2>Skorzystaj jeszcze z 60% zniżki!</h2>
				<img class="img-box" src="<?php echo getStaticUrl('images/right-box.png')?>" alt="">
				<dl>
					<dt>74,90 zł <del>199,90 zł</del></dt>
					<dd>
						<a href="https://www.iobit.com/buy.php?product=pl-asc133pc74test&ref=pl_asc133pc74purchase2002<?php echo $refStr; ?>&refs=pl_purchase_asc" 
					     onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2002-pl');" 
					     class="button button-btm-lag">
					    AKTYWUJ TERAZ
					  </a>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- review -->
	<div class="reviews ">
		<div class="wrapper">
			<h2>Uznany i doceniony na całym świecie</h2>
			<ul class="message clearfix">
				<li>
					<strong>200+</strong>
					<p>Popularny w ponad <b>200</b> krajach na całym świecie</p>
				</li>
				<li>
					<strong>1,000+</strong>
					<p>Ponad <b>1,000</b> mediów doceniło Advanced SystemCare</p>
				</li>
				<li>
					<strong>250,000,000+</strong>
					<p>Wybrany i rekomendowany przez ponad <b>250 milionów</b> użytkowników na całym świecie</p>
				</li>
				<li>
					<strong>80%+</strong>
					<p>Ponad <b>80%</b> użytkowników Advanced SystemCare aktywowało wersję PRO</p>
				</li>
			</ul>
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
				<span class="recover recover22 smail"></span>
				<span class="recover recover23 smail"></span>
				<span class="recover recover24 smail"></span>
				<span class="recover recover25 smail"></span>
				<span class="recover recover26 smail"></span>
				<dl class="tradotto-da-tedesco">
				  <dt><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></dt>
					<dd>
					  <strong>Danny R. Sheets</strong>
				  	<p>
				  		„Nowy ASC 13 to obowiązkowa pozycja dla wszystkich<br> użytkowników komputerów. Wiele potężnych narzędzi<br> w zestawie, aby utrzymać najwyższą wydajność komputera”.
				  	</p>
				  	<span></span>
					</dd>
				</dl>
				<dl class="html-it">
				  <dt><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></dt>
					<dd>
						<strong>Tony Fisher</strong>
						<p>
							„ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych<br> funkcji, których możesz użyć, aby utrzymać komputer w dobrym stanie”.
						</p>
						<span></span>
					</dd>
				</dl>
				<dl class="baixaki">
					<dt><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></dt>
					<dd>
						<strong>Daniel Sanders</strong>
						<p>
							”Nigdy nie znalazłem lepszego programu do konserwacji i bezpieczeństwa komputera niż Advanced SystemCare”.
						</p>
						<span></span>
					</dd>
				</dl>
				<dl class="charles-r-widick">
					<dt><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></dt>
					<dd>
						<strong>Richard Preston</strong>
						<p>
							Uwielbiam używać Advanced SystemCare 13. Jest bardzo szybki. <br>Usuwa ślady prywatności, niepotrzebne pliki i fragmenty rejestru“.
						</p>
						<span></span>
					</dd>
				</dl>
				<dl class="cnet">
					<dt><img src="<?php echo getStaticUrl('images/cnet.png')?>"></dt>
					<dd>
						<strong>Cnet</strong>
						<p>
							”Advanced Systemcare radzi sobie z<br> wszystkimi problemami komputera”.
						</p>
						<span></span>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- end review -->
	<!-- compare -->
	<div class="compare wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="itemb">
					<div class="box">
						Twoja aktualna wersja
						<span></span>
					</div>
				</th>
				<th class="text">Dlaczego Advanced SystemCare PRO?</th>

				<th class="itema">
					<div class="box">
						Wersja PRO
						<span></span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="itemb"><i class="all-icons">√</i></td>
				<td class="virtue">Podstawowe czyszczenie, naprawa i optymalizacja systemu</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">√</i></td>
				<td class="virtue">
					Do 300% szybszy Internet dzięki funkcji Internet Booster
					<span class="all-icons">Ulepszone</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Do 200% szybszy czas uruchamiania systemu
					<span class="all-icons">Ulepszone</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Dokładne czyszczenie rejestru systemu Windows zapobiega awariom komputera
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Szybszy system dzięki pełnej optymalizacji dysku twardego</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Chroni dane osobowe za pomocą Osłony Prywatności <span class="all-icons">Ulepszone</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Ukrywa cyfrowy odcisk palca, aby dbać o Twoją prywatność online <span class="all-icons nuo">Nowość</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Niweluje luki bezpieczeństwa w czasie rzeczywistym <span class="all-icons">Ulepszone</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Wygoda użytkowania dzięki automatycznym aktualizacjom i automatycznemu <em>czyszczeniu pamięci RAM</em>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Bezpłatne wsparcie techniczne 24/7</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb radius"></td>
				<td class="virtue radius"></td>
				<td class="itema radius"> <span class="shadow"></span></td>
			</tr>
		</tbody>
	</table>
	</div>
	<!-- end compare -->
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<div class="showcase">
				<span class="packs"></span>
			</div>
			<div class="selection">
				<ul>
					<li class="three-pc"><span>1 rok / 3 PC	</span> <strong>-60%</strong></li>
					<li class="packs active" ><span>1 rok / 3 PC + IU + PF</span> <strong>-80%</strong></li>
					<li class="one-pc"><span>1 rok / 1 PC </span> <strong>-40%</strong></li>
				</ul>
			</div>
			<dl class="btnarea">
				<dt> <strong><b>74</b>,90 zł</strong> <del>469,70 zł</del></dt>
				<dd>
					<a href="https://www.iobit.com/buy.php?product=pl-asc133pciupf74test&ref=pl_asc133pciupf74purchase2002<?php echo $refStr; ?>&refs=pl_purchase_asc" 
					   onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascfebsale2002-pl');" 
					   class="button btn-gift-lag">
					  <span></span>AKTYWUJ TERAZ
					</a>
				</dd>
				<dd><strong>6</strong> min <strong>48</strong> sek <strong>11</strong> ms</dd>
			</dl>
		</div>
	</div>
	<!-- end bottomcart -->
	<!-- payments  -->
	<div class="service  clearfix">
		<div class="wrapper">
			<dl>
				<dt>Gwarancja satysfakcji</dt>
				<dd><img src="<?php echo getStaticUrl('images/money-back.png')?>"></dd>
			</dl>
			<dl>
				<dt>Całkowicie bezpieczna płatność</dt>
				<dd><img src="<?php echo getStaticUrl('images/verified.png')?>"></dd>
			</dl>
			<dl class="last">
				<dt>Bezpłatne wsparcie techniczne 24/7</dt>
				<dd><img src="<?php echo getStaticUrl('images/servizio.png')?>"></dd>
			</dl>
		</div>
	</div>
	<!-- end payments -->
	<!-- footer -->
	<div class="footer">
		<dl class="annotation wrapper">
			<dt>Uwaga:</dt>
			<dd>
				* Programy promocyjne mogą ulec zmianie bez powiadomienia, w dowolnym momencie i według własnego uznania IObit.
			</dd>
			<dd>
			 * Dane mogą się różnić w zależności od różnych systemów lub komputerów
			</dd>
		</dl>
		<div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</div>
	</div>
	<!-- end footer -->
	<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	<script type="text/javascript">
		var refStr = '<?php echo $refStr; ?>'
	</script>
</body>
</html>