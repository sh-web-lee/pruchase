<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'plimfar' . $date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 55;
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			setcookie($c_name, 3, time() + 3600 * 24 * 2);
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}
$refStr='';
if(in_array($_GET['ref'],array('ar'))){
	$refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="UTF-8">
	<title>Zaoszczędź 70% i uzyskaj pełną ochronę online - IObit Malware Fighter 8 nowe wydanie | Iobit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<h1>Ochrona przed ransomware: zatrzymuje ataki, chroni komputery </h1>
			<h2>Nie pozwól swoim ważnym plikom stać się zakładnikami </h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3><nobr class="unit-bef">Pozostał tylko</nobr>
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				<nobr class="unit-af">pakiet</nobr> bezpieczeństwa!
	      			</h3>
							<span>  Całoroczna ochrona dla 3 komputerów </span> <del> 149,90 zł</del>
						</dt>
						<dd>
							<span><i></i> IObit Uninstaller PRO</span> <del>79,90 zł</del><em>  ZA DARMO</em>
						</dd>
						<dd>
							<span><i></i> Smart Defrag PRO </span> <del>79,90 zł </del><em>  ZA DARMO</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							 Tylko <strong>89,90 zł </strong> <del>309,70 zł</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imfar<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-ar1908-pl');" class="buybtn"><i></i> Aktywuj teraz</a></dd>
					</dl>
				</div>
				<dl class="payment">
					<dt><img src="<?php echo $pResUrl; ?>images/opswat.png" alt=""></dt>
	        <dd>
	          <h3>Certyfikat Opswat   <span>Maj 2019</span></h3>
	          <p>
	            IObit Malware Fighter 8 otrzymał srebrny certyfikat <a href="javascript::">OPSWAT <span> OPSWAT współpracuje z AV-TEST, AV-Comparatives, Virus Bulletin, SE Labs, SKD Labs i ICSA Labs, w celu testowania wydajności, ochrony i użyteczności aplikacji antywirusowych.</span></a>  w teście <br> jakości ochrony przeciwko malware.
	          </p>
	        </dd>
				</dl>
			</div>
		</div>
	</div>
	<!--end banner-->
	<!--cruces-->
	<div class="cruces">
		<div class="wrapper clearfix">
			<h2>Co musisz wiedzieć</h2>
			<ul>
				<li>
					<h3>Ransomware</h3>
					<p>Jest to typ ataku złośliwego oprogramowania, który infekuje, szyfruje lub przejmuje kontrolę nad systemem komputera żądając okupu w zamian za odzyskanie dostępu  </p>
				</li>
				<li>
					<h3>Straty po zainfekowaniu </h3>
					<p>Infekcja ransomware wiąże się z żądaniem różnych kwot pieniędzy, brakiem dostępu do systemu i plików, możliwością uszkodzenia ważnych i osobistych plików oraz danych, lub innymi poważnymi konsekwencjami.</p>
				</li>
				<li class="last">
					<h3>Najczęściej spotykane ransomware</h3>
					<p>Od wystąpienia ataków WannaCry, na przestrzeni ostatnich lat, kilka wariantów oprogramowania ransomware, takich jak Petya / GoldenEye czy Bad Rabbit, rozprzestrzenia się w zawrotnym tempie.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Silna ochrona komputera dzięki najnowszemu silnikowi Bitdefender</h2>
		<p>Wyposażony w najnowszy silnik antywirusowy Bitdefender, IObit Malware Fighter 8 PRO zapobiega uszkodzeniu komputera przez ponad 203 000 000 zagrożeń bezpieczeństwa.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Inteligentna ochrona przeciw ransomware</dt>
				<dd>Używamy inteligentnej analizy, aby zablokować niezaufany dostęp do Twoich ważnych plików, zanim znajdą się one w niebezpieczeństwie. </dd>
			</dl>
			<dl class="list02">
				<dt>Duża baza danych </dt>
				<dd>Liczne warianty ransomware przechowywane w naszej bazie danych razem z inteligentnym skanowaniem zapobiegają zawieszaniu, usuwaniu lub szyfrowaniu Twoich danych osobowych i plików.</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				 Tylko  <strong>89,90 zł   </strong> <del>309,70 zł</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imfar<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-ar1908-pl');" class="buybtn"><i></i> Aktywuj teraz</a></dd>
			<dd class="last"><i></i> 60-dniowa gwarancja zwrotu pieniędzy na 100%</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Jedynie wersja PRO zapewni Ci dodatkową ochronę, taką jak:</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Silnik Bitdefender ransomware</h3></dd>
				<dd>Bezkonkurencyjne wykrywanie wirusów dzięki zaawansowanemu silnikowi antywirusowemu Bitdefender.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Sejf</h3></dd>
				<dd>Ochrona wybranych ważnych folderów przed nieautoryzowanym dostępem oraz najnowszymi zagrożeniami.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Ochrona kamerki</h3></dd>
				<dd>Poinformuje Cię natychmiast w razie próby potajemnego uzyskania dostępu do kamerki w celu kradzieży prywatności.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Ochrona wrażliwych danych</h3></dd>
				<dd>Dodatkowa warstwa ochrony poufnych danych, takich jak dokumenty, zdjęcia i filmy, zapewnia pełne bezpieczeństwo.</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>70% zniżki na aktywację IObit Malware Fighter PRO już dziś</h2>
			<h3>  Zdobądź 2 dodatkowe narzędzia ochrony (o wartości 159,80 zł) ZA DARMO</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>IObit Uninstaller PRO</strong> <del> 79,90 zł</del> (1 rok / 1 PC)
				</dd>
				<dd class="last">Odinstaluj niechciane wtyczki dla czystszego komputera i przeglądania!</dd>
			</dl>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Smart Defrag PRO</strong> <del> 79,90 zł</del> (1 rok / 1 PC)
				</dd>
				<dd class="last">Maksymalizuj optymalizację dysku twardego dla szybszego komputera! </dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				 Tylko <strong>89,90 zł   </strong> <del>309,70 zł</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=pl-imf83pcsdiu89&ref=pl_imfar<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pl_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-ar1908-pl');" class="buybtn"><i></i> Aktywuj teraz</a></dd>
			<dd class="last"><i></i> 60-dniowa gwarancja zwrotu pieniędzy na 100%</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Co inni użytkownicy i media myślą o najnowszej wersji?</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd>Jestem bardzo zadowolony z waszego produktu IObit Maleware Fighter. Zanim poznałem wasz produkt, miałem wiele problemów ze złośliwymi zakłóceniami, nie byłem w stanie obejrzeć całego filmu lub koncertu, a są to moje ulubione czynności. Dzięki waszemu produktowi każda czynność jest przejrzysta, bezpieczna i dobrze chroniona. Program skanuje mój laptop bez wpływu na jego wydajność, a ja poleciłem ten produkt już dwóm moim znajomym.</dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>Program wykorzystuje dwa silniki AV, własny oraz BitDefender, co wydaje się skutecznie zapobiegać szkodliwemu oprogramowaniu, którego nie wykrywają podobne narzędzia, więc dobrze, że może działać razem ze standardowym oprogramowaniem AV. Może wykryć szeroką gamę programów szpiegujących, ransomware, adware, trojanów, robaków, keyloggerów i botów.</dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="">
			</dt>
			<dd>
				<strong>David Cassidy</strong>
			</dd>
			<dd>Chciałbym bardzo podziękować wszystkim pracownikom IObit za ciężką pracę nad dostarczeniem nam najlepszych programów. To świetna aktualizacja dla użytkowników. Jest znacznie szybsza w skanerze i łatwa w użyciu. Ludzie, którzy naprawdę chcą dobrego programu do ochrony przeciwko wirusom i złośliwemu oprogramowaniu, który jest również wart swojej ceny, nie powinni szukać dalej niż IObit Malware Fighter. Polecam, aby zapomnieli o reszcie i sięgnęli po to, co najlepsze, czyli IObit Malware Fighter.</dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>Nagradzany na całym świecie</h2>
			<p>Zaufany i nagradzany przez te światowej klasy media program w ciągu ostatnich sześciu lat. Już wiesz, że masz właściwego opiekuna komputera.</p>
			<img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
		</div>
		<div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Wypróbuj BEZ RYZYKA dzięki naszej 60-dniowej gwarancji zwrotu pieniędzy</h4>
          <p>
          Jesteśmy przekonani, że aktywacja wersji PRO zapewni Ci wszechstronną ochronę komputera za przystępną cenę!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Akceptujemy</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
		<dl class="note wrapper">
			<dt>Uwaga:</dt>
			<dd>*. Takie programy promocyjne mogą ulec zmianie bez powiadomienia, według uznania producenta.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Wszelkie prawa zastrzeżone</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>