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
	$c_name = 'pliujune_p' . $date;
	$c_name_t='pliujune_t' . $date;
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
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Zdobądź nowy IObit Uninstaller PRO za 0 zł</title>
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
				<a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
				  IObit
				</a>
				<div class="icon">
					<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
					IObit Uninstaller 11
				</div>
			</div>
			<div class="clearfix">
				<div class="left-img">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
				</div>
				<div class="right fr">
					<h1 data-name="default">Witaj na naszej przedsprzedaży</h1>
					<h2 data-name="default">0zł, aby przesiąść się na najlepszy dezinstalator</h2>
					<div class="number" data-name="default">
						pozostało
						<div id="reduce" class="reduceNum">
							<div class="listbox"><span class="list"><b>5</b></span></div>
							<div class="listbox"><span class="list"><b>0</b></span></div>
						</div>
						szt.
						<div class="bar">
							<span></span>
						</div>
					</div>
					<div class="price" data-name="default">
						<strong>0zł<sup>*</sup></strong>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=pl-iu11preorder&ref=pl_iu11preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pl_purchase_iu"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11preorder-pl');">
							 Zamów w przedsprzedaży	
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
			<h2>Odinstaluj wszystko, co niechciane</h2>
			<dl class="first" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>Wtyczki</h3>
					<p>
					Bezużyteczne wtyczki <br> Wtyczki reklamowe <br> Złośliwe wtyczki
					</p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>Programy</h3>
					<p>
					Bezużyteczne programy <br> Uporczywe programy <br> Oprogramowanie pakietowe bundleware
					</p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>Aplikacje Windowsa</h3>
					<p>
					Bezużyteczne aplikacje Windowsa <br> Domyślne aplikacje Windowsa
					</p>
				</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/intro-img.png')?>" alt="" class="img-box" data-name="default">
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature" data-name="animation">
		<div class="wrapper">
			<h2>Odinstaluj wszystko całkowicie</h2>
			 <div class="img-box" data-name="default">
			 	<div class="list01">
			 		<span class="button">Uninstall</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Antivirus Software</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Uninstalling Antivirus Software</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>You have successfully uninstalled <strong>0</strong> program with details below:</p>
			 		<ul>
			 			<li>Registry entries deleted: <strong>0</strong></li>
			 			<li>Files deleted: <span><strong>0</strong>.<strong>0</strong></span>MB</li>
			 			<li>Scheduled tasks deletd: <strong>0</strong></li>
			 			<li>System services deleted: <strong>0</strong></li>
			 			<li>Logged items deleted: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			 </div>
			 <div class="message">
			 	<dl data-name="default" class="one">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Zapisywanie zmian</h3>
			 			<p>Rejestrowanie zmian systemowych podczas nowej instalacji programu, aby zagwarantować późniejszą całkowitą dezinstalację.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="two">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Zaawansowana dezinstalacja</h3>
			 			<p>Jedno kliknięcie, aby zbiorowo odinstalować niechciane programy, w tym oprogramowanie antywirusowe, które odmawia usunięcia.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="three">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Sprzątanie pozostałości</h3>
			 			<p>Automatyczne usuwanie resztek odinstalowanych programów, nawet tych, które pozostały po odinstalowaniu za pomocą innych narzędzi.</p>
			 		</dd>
			 	</dl>
			 </div>
		</div>
	</div>
	<!-- feature end -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<h2>Inne funkcje, z których możesz korzystać</h2>
			<dl data-name="default" class="one">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Aktualizuj oprogramowanie</h3>
		 			<p>Zaktualizuj stare oprogramowanie za pomocą jednego kliknięcia. </p>
		 		</dd>
			</dl>
			<dl class="center" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Blokuj powiadomienia</h3>
		 			<p>Bez przerywania przez powiadomienia z witryn podczas surfowania w sieci.  </p>
		 		</dd>
			</dl>
			<dl data-name="default" class="three">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Automatyczna aktualizacja</h3>
		 			<p>Automatyczna aktualizacja do najnowszej wersji w celu szybszego i dokładniejszego czyszczenia. </p>
		 		</dd>
			</dl>
		</div>
	</div>
	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>To zaufany dezinstalator</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>50M+</h3>
					<p>pobrań</p>
				</dd>
			</dl>
			<dl class="center">
				<dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>4.5+</h3>
					<p>ocena użytkowników</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>rekomendacji mediów</p>
				</dd>
			</dl>
			<div class="review-box">
				<div class="box">
					<h3>Recenzja użytkowników</h3>
					<p>"IObit Uninstaller ma za sobą długą drogę, używam go od dawna, naprawdę go uwielbiam, jest bardzo dokładny i co więcej, staje się coraz lepszy. Jestem z niego bardzo zadowolony, nie poradziłbym sobie bez niego. Jeśli jeszcze go nie używasz, być może powinieneś/powinnaś go wypróbować, jest dziś o 100% lepszy niż rok temu. Usuwa wszystkie dodatkowe śmieci rejestru i robi to bardzo dobrze”.</p>
				</div>
				<div class="box">
					<h3>Recenzja użytkowników</h3>
					<p>"Ten program pomógł mi zaoszczędzić pieniądze. Przed użyciem tej aplikacji mój komputer działał bardzo wolno. Nie mogłam nic zrobić. Ale teraz mój komputer został wysprzątany do czysta. Dzięki temu programowi mój komputer stał się bardzo szybki. Zaoszczędziłam wszystko dzięki temu programowi. Dziękuję bardzo IOBit, kocham was.”</p>
				</div>
				<div class="box active">
					<h3>Rencje Mediów</h3>
					<p>„Jeśli potrzebujesz programu, który pozwala na czyste i kompletne odinstalowanie aplikacji, uruchom program IObit Uninstaller. To bezpłatne narzędzie sprawia, że usuwanie aplikacji, w tym bezpańskich plików, które często pozostają, gdy używasz systemu Windows do usuwania oprogramowania z dysku twardego lub SSD."</p>
				</div>
				<div class="box">
					<h3>Recenzja użytkowników</h3>
					<p>„Korzystałem z wielu dezinstalatorów w przeszłości, jednak gdy zacząłem używać IObit od wersji 7.0, nigdy już nie powróciłem do żadnej innej aplikacji. Posiada łatwy w użyciu interfejs i wykonuje zadanie, do którego jest przeznaczony, przy pomocy precyzyjnej dokładności. Pomaga w automatycznym czyszczeniu rejestru, który bez czyszczenia zostanie zatkany pozostałościami i tym samym utrzymuje dobry stan komputera. Możliwość identyfikacji oprogramowania pakietowego bundleware i jego usunięcia to jedna z tych świetnych i niezrównanych funkcji obecnych w IOBit.”</p>
				</div>
				<div class="box">
					<h3>Recenzja użytkowników</h3>
					<p>„IObit Uninstaller odnajduje wtyczki w moich przeglądarkach, o których istnieniu nawet nie miałem pojęcia. Czyszczenie pozostałych plików działa bardzo dobrze; nie pozostawia żadnych bezużytecznych danych w odinstalowanym oprogramowaniu. Przypomina mi o dostępnych aktualizacjach dla wszystkich moich programów. Ogólnie rzecz biorąc, dzięki temu poprawiła się wydajność mojego komputera. Jest bardzo wygodny i prosty w zarządzaniu; poleciłem go nawet moim znajomym."</p>
				</div>
			</div>
			<ul>
				<li>
					<span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
					<p>Ivan White</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
					<p> Ali Tekin</p>
				</li>
				<li class="active">
					<span><img src="<?php echo getStaticUrl('images/pcgm.png')?>" alt="PC Magazine"></span>
					<p>PC Magazine</p>
				</li>
				<li>
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
			<h2>Nagradzany na całym świecie</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Uwaga:</dt>
				<dd>
				*.Pod koniec 30-dniowego bezpłatnego okresu próbnego Twoja karta kredytowa lub konto PayPal zostanie automatycznie obciążone 64.90 zł. Ta 67% zniżka od początkowej ceny 199.90 zł to bonus tylko w przypadku zamówień w przedsprzedaży!
				</dd>
				<dd>*.Jeśli jesteś nieusatysfakcjonowany/a możesz anulować złożone zamówienie w ciągu 30 dni bez ponoszenia opłat.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
				IObit Uninstaller 11
	  	</div>
  		<div class="number fl">
  			<div id="fReduce" class="reduceNum">
  				<div class="listbox"><span class="list"><b>5</b></span></div>
  				<div class="listbox"><span class="list"><b>0</b></span></div>
  			</div>
  			pozostało 500 szt
  		</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="http://codes.iobit.com/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
</body>
</html>