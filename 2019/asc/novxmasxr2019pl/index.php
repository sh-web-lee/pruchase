<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -76400174;
$buyNum = number_format($buyNum);
$refStr='';
if(in_array($_GET['pop'],array('xr_asc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Zaoszczędź do 85% na Advanced SystemCare PRO z okazji Bożego Narodzenia - IObit!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<div class="banner">
		<div class="snow"></div>
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/pl/index.php" target="_blank" class="logo">IObit</a>
			<h1>Specjalna oferta świąteczna!</h1>
			<h2> Oferta ograniczona czasowo, zostało <div class="date"> <strong>00</strong> godz <strong>55</strong> min <strong>55</strong> sek <strong>55</strong> ms</div></h2>

 			<div class="one-pc-box">
 				<h2>50% ZNIŻKI</h2>
 				<div class="img-box clearfix">
 					<img src="<?php echo $pResUrl; ?>images/asc-one-box.png" alt="">
 					<div class="price">
 						<strong><b>59</b>,90 zł</strong>
 						<del>119,90 zł</del>
 					</div>
 				</div>
 				<a href="https://www.iobit.com/buy.php?product=pl-asc131pc59&ref=pl_asc131pc59purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascxmas1911xr-pl');" class="button border">Aktywuj teraz</a>
 			</div>
 			<div class="packs">
 				<h2>85% ZNIŻKI</h2>
 				<div class="img-box clearfix">
 					<span class="box"></span>
 					<div class="price">
 						<strong><b>64</b>,90 zł</strong>
 						<del>429,70 zł</del>
 					</div>
 				</div>
 				<a href="https://www.iobit.com/buy.php?product=pl-asc133pciupf64&ref=pl_asc133pciupf64purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascxmas1911xr-pl');" class="button">Aktywuj teraz</a>
 			</div>
 			<div class="one-pc-box three-pcs">
 				<h2>65% ZNIŻKI</h2>
 				<div class="img-box clearfix">
 					<span class="box"></span>
 					<div class="price">
 						<strong><b>64</b>,90 zł</strong>
 						<del>199,90 zł</del>
 					</div>
 				</div>
 				<a href="https://www.iobit.com/buy.php?product=pl-asc1364-ac&ref=pl_asc133pc64purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascxmas1911xr-pl');" class="button border">Aktywuj teraz</a>
 			</div>
	 	</div>
	</div>
	<div class="payments ">
		<div class="wrapper">
			<img src="<?php echo $pResUrl; ?>images/payments.png" alt="">
		</div>
	</div>
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2><span>Wykorzystaj w pełni możliwości swojego komputera w te święta!</span></h2>
			<div class="showcase">
				<div class="inner">
					<ul class="screenshot">
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
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
							<img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
						</div>
					</li>
					<li class="fun2">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
						</div>
					</li>
					<li class="fun4">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
						</div>
					</li>
					<li class="fun5">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
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
	<div class="gifts default ">
		<div class="wrapper">
			<h2>Z dwoma darmowymi prezentami świątecznymi!</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/iu-gift.png" alt=""></dt>
				<dd><strong>IObit Uninstaller PRO </strong> Oferuje najlepszą defragmentację dysku i maksymalnie przyspiesza jego prędkość!</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/pf-gift.png" alt=""></dt>
				<dd><strong>Protected Folder </strong> Chroń swoje pliki osobiste i trzymaj je z dala od złośliwych ataków!  </dd>
			</dl>
			<a href="https://www.iobit.com/buy.php?product=pl-asc133pciupf64&ref=pl_asc133pciupf64purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascxmas1911xr-pl');" class="button btn-mid-lag">ODBIERZ ŚWIĄTECZNE PREZENTY</a>
			<div class="date"><strong>00</strong> godz. <strong>55</strong>  min <strong>55</strong> sek <strong>55</strong> ms</div>
		</div>
	</div>
	<!-- end gifts -->
	<div class="gifts exceed hide">
		<div class="wrapper">
			<img src="<?php echo $pResUrl; ?>images/gifts-sold-out.png" alt="" class="img-box">
			<div class="message">
				<h2>Skorzystaj jeszcze z 65% zniżki świątecznej!</h2>
				<img src="<?php echo $pResUrl; ?>images/gift-box-exceed.png" alt="">
				<dl>
					<dt> <strong><b>64</b>,90 zł</strong> <del>199,90 zł</del></dt>
					<dd><a href="https://www.iobit.com/buy.php?product=pl-asc1364-ac&ref=pl_asc133pc64purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascxmas1911-pl');" class="button">Aktywuj teraz</a></dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- review -->

	<!-- review -->
	<div class="review">
	  <div class="wrapper">
	    <div id="dg-container" class="dg-container">
	      <div class="nav">
	        <span class="dg-prev"></span>
	        <span class="dg-next"></span>
	      </div>
	      <div class="content dg-wrapper">
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
	          <dd>
	            <h2>Recenzje mediów</h2>
	            <p>„Nie ma nic gorszego niż komputer, który jest tak zapchany, że jego użytkowanie oraz granie stają się niemożliwe. Advanced Systemcare radzi sobie z wszystkimi problemami komputera, nie tylko poprzez sprzątanie niepotrzebnych plików, złośliwego oprogramowania i nieprawidłowych wpisów w rejestrze, ale również dając Twojemu komputerowi impuls do zoptymalizowania jego działania”.</p>
	            <cite>Cnet</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></dt>
	          <dd>
	            <h2>Recenzja użytkownika</h2>
	            <p>„Używam Advanced SystemCare Pro od dłuższego czasu, a najnowsza wersja 13 jest nawet lepsza niż wersja 12. ASC 13 bardzo szybko znajduje i naprawia problemy, oraz ma wiele dodatkowych funkcji, których możesz użyć, aby utrzymać komputer w dobrym stanie. Gorąco polecam wszystkim najnowszy Advanced SystemCare 13”.</p>
	            <cite>Tony Fisher</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></dt>
	          <dd>
	            <h2>Recenzja użytkownika</h2>
	            <p>„Nigdy nie znalazłem lepszego programu do konserwacji i bezpieczeństwa komputera niż Advanced SystemCare. Odkąd kupiłem ASC, nigdy nie miałem problemów z wirusami, phishingiem, czarnymi ekranami lub innymi rodzajami błędów. To były najlepiej zainwestowane pieniądze, jakie kiedykolwiek wydałem na komputer. Dziękuję ASC za to, że korzystania z komputera jest dużo przyjemniejsze”.</p>
	            <cite>Danny R. Sheets</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></dt>
	          <dd>
	            <h2>Recenzja użytkownika</h2>
	            <p>„Nowy ASC 13 to obowiązkowa pozycja dla wszystkich użytkowników komputerów. Czysty i intuicyjny interfejs jest łatwy w obsłudze zarówno dla początkującego, jak i zaawansowanego użytkownika. Wiele potężnych narzędzi w zestawie, aby utrzymać najwyższą wydajność komputera. Wyrazy uznania dla IObit za tak wspaniały zestaw narzędzi w jednym miejscu”.</p>
	            <cite>Daniel Sanders</cite>
	          </dd>
	        </dl>
	        <dl class="reviews">
	          <dt><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></dt>
	          <dd>
	            <h2>Recenzja użytkownika</h2>
	            <p>„Uwielbiam używać Advanced SystemCare 13 Beta. Jest bardzo szybki. Usuwa ślady prywatności, niepotrzebne pliki i fragmenty rejestru. Szczególnie podoba mi się wyskakujące okienko z pozwoleniem na dostęp do obszarów wrażliwych. Gdy aplikacja po raz pierwszy próbuje uzyskać dostęp do poufnych plików, otwiera się okno umożliwiające dostęp lub odmowę. Po przyznaniu uprawnień dla aplikacji wyskakujące okienko nie będzie już dla niej wyświetlane. Wiem, że moje wrażliwe pliki będą bezpieczne”.</p>
	            <cite>Richard Preston</cite>
	          </dd>
	        </dl>
	      </div>
	    </div>
	  </div>
	</div>
	<!-- end review -->

	<!-- end review -->
	<!-- compare -->
	<div class="compare wrapper">
	  <table border="0" cellspacing="0" cellpadding="0" width="100%">
	    <thead>
	    <tr>
	      <th class="text" colspan="2">Dlaczego Advanced SystemCare PRO?</th>
	      <th class="itemb">
	        <div class="box">
	          Twoja aktualna wersja
	        </div>
	      </th>
	      <td class="space"></td>
	      <th class="itema">
	        <div class="box">
	          Wersja PRO
	        </div>
	        <span class="shadow"></span>
	      </th>
	    </tr>
	    </thead>
	    <tbody>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></td>
	      <td class="virtue">Podstawowe czyszczenie, naprawa i optymalizacja systemu </td>
	      <td class="itemb"><i class="all-icons">√</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></td>
	      <td class="virtue">Do 300% szybszy Internet dzięki funkcji Internet Booster </td>
	      <td class="itemb"><i class="all-icons close">√</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></td>
	      <td class="virtue">Do 200% szybszy czas uruchamiania systemu</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></td>
	      <td class="virtue">Dokładne czyszczenie rejestru systemu Windows zapobiega awariom komputera</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons05.png" alt=""></td>
	      <td class="virtue">Szybszy system dzięki pełnej optymalizacji dysku twardego</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons06.png" alt=""></td>
	      <td class="virtue">Chroni dane osobowe za pomocą Osłony Prywatności</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons07.png" alt=""></td>
	      <td class="virtue">Ukrywa cyfrowy odcisk palca, aby dbać o Twoją prywatność online</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons08.png" alt=""></td>
	      <td class="virtue">Niweluje luki bezpieczeństwa w czasie rzeczywistym</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons09.png" alt=""></td>
	      <td class="virtue">Wygoda użytkowania dzięki automatycznym aktualizacjom i automatycznemu czyszczeniu pamięci RAM</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    <tr>
	      <td class="icon"><img src="<?php echo $pResUrl; ?>images/icons10.png" alt=""></td>
	      <td class="virtue">Bezpłatne wsparcie techniczne 24/7</td>
	      <td class="itemb"><i class="all-icons close">X</i></td>
	      <td class="space"></td>
	      <td class="itema"><i class="all-icons red">√</i></td>
	    </tr>
	    </tbody>
	  </table>
	</div>
	<!-- end compare -->
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>Czysty, bezpieczny komputer i dwa bezpłatne prezenty</h2>
			<div class="img-box"></div>
			<div class="price">
				<strong><b>64</b>,90 zł</strong> <del> 429,70 zł</del>
				<a href="https://www.iobit.com/buy.php?product=pl-asc133pciupf64&ref=pl_asc133pciupf64purchase1911xr<?php echo $refStr;?>&refs=pl_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascxmas1911xr-pl');" class="button btn-mid-lag">Aktywuj teraz</a>
				<div class="date"><strong>00</strong>  godz <strong>55</strong>  min <strong>55</strong> sek <strong>55</strong> ms</div>
			</div>
		</div>
	</div>
	<!-- end bottomcart -->
	<!-- payments  -->
	<div class="service  clearfix">
		<div class="wrapper">
			<dl>
				<dt>Gwarancja satysfakcji</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dd>
			</dl>
			<dl>
				<dt>Całkowicie bezpieczna płatność</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dd>
			</dl>
			<dl class="last">
				<dt>Bezpłatne wsparcie techniczne 24/7</dt>
				<dd><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dd>
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
	<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
	
	<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
	<script type="text/javascript">
		var refStr = '<?php echo $refStr;?>';
		
	</script>
</body>
</html>