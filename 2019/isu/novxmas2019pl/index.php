<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'isunovxmas2019pl_p' . $date;
	$c_name_t='isunovxmas2019pl_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(78,98);
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

$viewNum=rand(156,200);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Do 85% zniżki na IObit Software Updater PRO</title>
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
			<a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>Tylko teraz, nawet 85% taniej!</h1>
			<div class="img-box">
				<img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
			</div>
			<div class="right-message">
          <h2><span>2 DARMOWE PREZENTY</span> dla pierwszych 100 klientów! </h2>
          <div class="progress">
            <p><strong class="viewNum"><?php echo $viewNum;?></strong> odwiedzających, <nobr class="unit-bef">pozostało</nobr>  <span class="buyNum">51</span> <em class="miejsc unit-af">prezentów</em></p>
            <div class="bar">
              <span class="box"><span class="disappear"></span></span>
            </div>
          </div>
          <p class="price">
            <span>Tylko <strong><b>49</b>,90 zł</strong></span>
            <a href="https://www.iobit.com/buy.php?product=pl-isu43pcsdpf49&ref=pl_isu3pcsdpf49purchase1911<?php echo $refStr;?>&refs=pl_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase3PC1912-pl')" class="buybtn">Aktywuj teraz</a>
          </p>
          <ul class="list">
          	<li class="first">
          		Cena oryginalna <span>389,70 zł </span>
          	</li>
          	<li>Zniżka <span>85% </span></li>
          	<li class="last"> Oszczędzasz <span>339,80 zł</span></li>
          </ul>
        </div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>Dlaczego IObit Software Updater 3 PRO?</h2>
			<img src="<?php echo getStaticUrl('images/intro-box.jpg')?>" class="img-box" alt="IObit Software Update PRO"/>
			<div class="left-message">
				<h3><i></i>Zawsze zaktualizowane programy</h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
					<dd><strong>Ochrona</strong></dd>
					<dd>Aktualizacja przestarzałego<br>  oprogramowania obejmuje luki w <br> zabezpieczeniach  na czas, aby<br> powstrzymać  hakerów.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
					<dd><strong>Poprawa</strong></dd>
					<dd>Aktualizacja przestarzałego  <br> oprogramowania zapewnia nowe funkcje oraz <br> zwiększa wydajność  i stabilność.</dd>
				</dl>
			</div>
			<div class="right-message">
				<h3><i></i>Łatwość aktualizacji  </h3>
				<dl class="list01">
					<dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
					<dd><strong>Bez ograniczeń</strong> Nieograniczone aktualizacje oprogramowania za pomocą 1-kliknięcia, bezpieczne pobieranie i instalacja bez otwierania przeglądarki internetowej.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
					<dd><strong>Automatyczność</strong> Skonfiguruj zaplanowane i automatyczne aktualizacje, a program zajmie się wszystkim, gdy tylko pojawią się nowe aktualizacje. </dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
					<dd><strong>Bezpieczeństwo</strong> Aby uniknąć problemów, program automatycznie tworzy wersję sprzed instalacji. </dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Zadbaj o programy z IObit Software Updater 3 PRO!</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>

				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">◎</i>1-kliknięcie, aby zaktualizować wszystkie programy (<span>darmowa wersja: 2 dziennie</span>)</li>
						<li><i class="all-icons">◎</i>Pobierz i zainstaluj aktualizacje szybko i cicho </li>
						<li><i class="all-icons">◎</i>Skonfiguruj automatyczne skanowanie i aktualizacje zgodnie z harmonogramem</li>
						<li><i class="all-icons">◎</i>Wyklucz programy, których nie chcesz aktualizować</li>
						<li><i class="all-icons">◎</i>Pobierz przydatne narzędzia do pracy zdalnej</li>
						<li><i class="all-icons">◎</i>Opcja automatycznego utworzenia punktu przywracania przed instalacją</li>
						<li><i class="all-icons">◎</i>Opcja automatycznego usuwania plików instalacyjnych po instalacji</li>
						<li><i class="all-icons">◎</i>Wyłącz reklamy sponsorowane wyświetlane w bezpłatnej wersji</li>
					</ul>
					 <p class="price">
            <span><strong><b>49</b>,90 zł </strong> <span>Pospiesz się, zostało <b class="buyNum">51</b> <em class="miejsc unit-af">prezentów</em></span></span>
            <a href="https://www.iobit.com/buy.php?product=pl-isu43pcsdpf49&ref=pl_isu3pcsdpf49purchase1911<?php echo $refStr;?>&refs=pl_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase3PC1912-pl')" class="buybtn">Aktywuj teraz</a>
          </p>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->
	<div class="gift-message">
		<div class="wrapper">
			<h2>Zwiększ wydajność komputera dzięki prezentom</h2>
			<dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""/>
        </dt>
				<dd>
					<h3>Smart Defrag PRO</h3>
					<strong>0 zł</strong> <del>119,90 zł </del> 1 rok / 1 PC
					<p>Maksymalizacja dysku twardego <br> Szybszy komputer</p>
				</dd>
			</dl>
			<dl class="pf">
				<dt>
          <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/>
        </dt>
				<dd>
					<h3>Protected Folder</h3>
					<strong>0 zł </strong> <del>149,90 zł </del> 1 rok / 1 PC
					<p>Nie martw się o kradzież danych <br> lub wycieki prywatności!</p>
				</dd>
			</dl>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
    <h2>Co mówią inni?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Opinia mediów</h2>
              <p>IObit Software Updater został zaprojektowany, aby uprościć zadanie aktualizowania wszystkich aplikacji na komputerze. Może sprawdzać dostępność nowych wersji i instalować je automatycznie, nawet bez wprowadzania danych przez użytkownika. Ponadto może pomóc w pobieraniu i instalowaniu popularnych aplikacji.</p>
              <cite>softpedia</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
            <dd>
              <h2>Opinie użytkowników</h2>
              <p>Zainstalowałem darmowy IObit od przyjaciela i jestem bardzo zadowolony z prędkości i prostoty, która zaspokaja potrzeby początkującego w utrzymaniu jego komputera osobistego. Dziękuję za to! Muszę dodać, że wykupię licencję IObit, aby pomóc Wam kontynuować dobrą robotę. Dziękuję! </p>
              <cite>Nicolae Mocioc</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
            <dd>
              <h2>Opinie użytkowników</h2>
              <p>Uwielbiam automatyczny aspekt aktualizacji. Jest szybki i wydajny, a także tworzy punkt przywracania przed instalacją, na wypadek, gdyby coś poszło nie tak. Uwielbiam również to, że program pobiera aktualizacje bezpośrednio z odpowiednich stron, a ja nie muszę przechodzić do każdej z witryn, aby pobrać aktualizację. Myślę, że to jeden z waszych najlepszych pomysłów!</p>
              <cite>Joshua Irving</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
            <dd>
              <h2>Opinie użytkowników</h2>
              <p>To świetny program do aktualizacji oprogramowania. Jest bardzo łatwy w obsłudze, przejrzysty, działa bardzo płynnie i jest naprawdę szybki. Również design jest miły i nowoczesny. Podoba mi się również, że widzisz jednocześnie starą i nową wersję programu, który chcesz zaktualizować. Dodatkowo program pokazuje nowe wskazówki dotyczące aktualizacji.</p>
              <cite>Nico Bremmer</cite>
            </dd>
          </dl>                  
        </div>  
      </div>             
    </div>
  </div>
	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<div class="service clearfix">
				<dl>
					<dt>Zaufali mu </dt>
					<dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
				</dl>
				<dl class="right">
					<dt>Obsługa kilku metod płatności</dt>
					<dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
				</dl>
			</div>
			<dl class="annotation">
				<dt>Uwaga:</dt>
				<dd>* Dane mogą się różnić w zależności od systemu lub komputera.</dd>
				<dd>* Programy promocyjne mogą ulec zmianie bez powiadomienia, zgodnie z naszymi kryteriami.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Wszelkie prawa zastrzeżone</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		IObit Software Update PRO
	  	</div>
	  	<div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p>Pozostało tylko <strong class="buyNum">51</strong> prezentów</p>
      </div>
       <p class="price">
          <span><strong><b>49</b>,90 zł </strong> <del>389,70 zł</del></span>
          <a href="https://www.iobit.com/buy.php?product=pl-isu43pcsdpf49&ref=pl_isu3pcsdpf49purchase1911<?php echo $refStr;?>&refs=pl_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isupurchase3PC1912s-pl')" class="buybtn">Aktywuj teraz</a>
       </p>
	  </div>
	</div>
	<!-- floatlayer end -->
	<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>