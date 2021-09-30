<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (!empty($_GET['AFF'])) $_GET['aff'] = $_GET['AFF'];

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'mar2021pl' . $date;
	if (empty($_COOKIE[$c_name])) {
		$packsNum = rand(50, 100);
		setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name];
			$packsNum -- ;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(['packsNum' => $packsNum]);
	exit();
}
$refStr = empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
$refStr .= empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['insur']) ? '' : '-'.$_GET['insur'];
if(!empty($_GET['ver'])){
	$ver = explode('.',$_GET['ver']);
	$refStr .= '-'.$ver[0].$ver[1];
}
$refStr .= empty($_GET['instd']) ? '' : '-'.$_GET['instd'];
$refStr .= empty($_GET['finstd']) ? '' : '-'.$_GET['finstd'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="noindex, nofollow"/>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Wyjątkowa promocja - nawet do 45% rabatu na iFun Screen Recorder PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
	
</head>
<body>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://www.iobit.com/pl/index.php"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>"/>
				<p>Twórz i dostosuj wysokiej jakości wideo bez żadnych ograniczeń!</p>
			</div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label70"></div>
				<div class="banner-option">
					<p class="banner-count"><span class="active countNum">50<i></i></span>wolnych miejsc </p>
					<ul>
						<li class="custom-radio">
							<label>Dożywotnio / 1 PC<i>-40%</i></label>
							<div class="sel-list">
								<p>Dożywotnia licencja na 1 PC</p>
								<p>Brak domyślnego znaku wodnego i dodania osobistego znaku wodnego</p>
								<p>Nagrywanie w wyższej jakości</p>
								<p>Płynniejsze nagrywanie bez opóźnień</p>
							</div>
						</li>
						<li class="custom-radio active">
							<span class="like"></span>
							<label>1 rok / 1 PC<i>-45%</i></label>
							<div class="sel-list">
								<p>1 roczna licencja na 1 PC</p>
								<p>Brak domyślnego znaku wodnego i dodania osobistego znaku wodnego</p>
								<p>Nagrywanie w wyższej jakości</p>
								<p>Płynniejsze nagrywanie bez opóźnień</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd>
							<div class="now">
								<h3>179<i>90</i></h3>
								<span>zł</span>
							</div>
							<div class="old">
								<h3>379<i>90</i></h3>
								<span>zł</span>
							</div>
							<div class="getItNow">
								<a class="button"onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=pl-isr1lf1pc179&ref=pl_isr1lf1pc179purchase2103<?= $refStr; ?>&refs=pl_purchase_isr">Kup teraz</a>
							</div>
						</dd>
						<dd style="display: block;">
							<div class="now">
								<h3>109<i>90</i></h3>
								<span>zł</span>
							</div>
							<div class="old">
								<h3>199<i>90</i></h3>
								<span>zł</span>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=pl-isr11pc109&ref=pl_isr11pc109purchase2103<?= $refStr; ?>&refs=pl_purchase_isr">Kup teraz</a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 80px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO </span><br />Znacznie więcej niż prosta rejestracja</h3>
			<div class="screen2-cont" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" />
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Własny znak wodny </h3>
					<span>tylko w wersji PRO</span>
					<p>Możesz nagrać ekran bez logo firmowego i dodać własny znak wodny.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/timeout.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="date"></i>Zaplanowane nagrywanie</h3>
					<span>tylko w wersji PRO</span>
					<p>Umożliwia planowanie nagrywania poprzez ustawienie określonego czasu aktywacji i zatrzymania nagrywania ekranu komputera i kamery internetowej.</p>
					<p>Można automatycznie zaplanować wiele nagrań. Nagrywaj wideokonferencje, lekcje online i transmisje na żywo bez konieczności siedzenia przed komputerem.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fl">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/audio.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="audio"></i>Oddziel dźwięk od wideo</h3>
					<span>tylko w wersji PRO</span>
					<p>iFun Screen Recorder PRO pomaga nagrywać tylko muzykę z wideo YouTube lub dźwięk z komputera.</p>
					<p>Pozwala wyodrębnić dźwięk z filmów po zakończeniu nagrywania, oddzielić go i zapisać niezależnie na komputerze.</p>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont4 fl">
					<h3><i class="rec"></i>Nagrywanie bez opóźnień</h3>
					<span>tylko w wersji PRO</span>
					<p>iFun Screen Recorder PRO, z szybkością 60 klatek na sekundę, jest najlepszy do nagrywania meczów wideo lub przewodników strategicznych i udostępniania ich na YouTube.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">Porównanie wersji - DARMOWA i PRO</h3>
			<div class="versionTable">
				<div class="versionDesc">
					
					<ul><li><i class="descIcon time"></i>Nieograniczony czas nagrywania</li></ul>
					<ul><li><i class="descIcon cut"></i>Edycja użytkownika</li></ul>
					<ul><li><i class="descIcon remove"></i>Usuń domyślny znak wodny</li></ul>
					<ul><li><i class="descIcon seal"></i>Dodaj własny znak wodny</li></ul>
					<ul><li><i class="descIcon date"></i>Zaplanuj swoje nagrania</li></ul>
					<ul><li><i class="descIcon audio"></i>Wyodrębnij dźwięk z wideo i zapisz go niezależnie</li></ul>
					<ul><li><i class="descIcon game"></i>Poziom płynności nagrywania gier<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Jakość nagrywania<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Wysoka jakość wideo*<i class="tableIcon up"></i> <p style="font-size: 12px;">(do <span>30%</span> wyższa rozdzielczość)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Automatyczna aktualizacja</li></ul>
					<ul><li><i class="descIcon spt24"></i>Bezpłatna pomoc techniczna 24/7</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">DARMOWA</div>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
				</div>
				<div class="versionPro">
					<div class="topTitle"> PRO</div>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<div class="buyPro">
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option3" value="1" checked="">
							<label for="option3">1 rok</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4">Dożywotnio</label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103<?= $refStr; ?>-es')" href="https://www.iobit.com/buy.php?product=pl-isr11pc109&ref=pl_isr11pc109purchase2103<?= $refStr; ?>&refs=pl_purchase_isr" style="display: block;">Kup teraz-109.90zł</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2103<?= $refStr; ?>-es')" href="https://www.iobit.com/buy.php?product=pl-isr1lf1pc179&ref=pl_isr1lf1pc179purchase2103<?= $refStr; ?>&refs=pl_purchase_isr">Kup teraz-199.90zł</a>
						</div>
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen4" >
		<div class="content">
			<h3 class="screen-title">Jesteśmy dumni, że nam zaufano</h3>
			<div class="media">
				<p>Jako zaufany i nagradzany przez światowej klasy media od ponad dekady, IObit jest właściwym produktem dla Ciebie.</p>
				<img src="<?php echo getStaticUrl('images/media.png')?>" />
			</div>
			<h3 class="screen-title" style="margin-top: 160px;">Zawsze słuchamy opinii naszych użytkowników</h3>
			<div class="review-wrap">
				<!-- Swiper -->
				<div class="user-head">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
					        <div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
							</div>
					    </div>
						
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div class="user-avator">
					<ul>
						<li>
							Jak dotąd świetnie. iFun Screen Recorder to naprawdę kompletne narzędzie, które jest łatwe w użyciu. Nie wiedziałam, jak nagrywać ekran w systemie Windows, ale dzięki temu oprogramowaniu jest to łatwe. Dzięki iFun Screen Recorder mogę robić zrzuty ekranu podczas nagrywania HD i dodawać podpisy do filmu po nagraniu. Następnie przesyłam to na mój Instagram i przyciągam ogromną uwagę. Ten potężny rejestrator ekranu pomógł mi w rozwoju mojej firmy. Przy okazji, jest on całkowicie bezpłatny.
							<p>—Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Natknąłem się na ten darmowy rejestrator ekranu i stałem się jego fanem ze względu na jego proste funkcje edycji. Ponieważ lubię nagrywać proces obsługi, aby pomóc ludziom w rozwiązywaniu problemów z komputerem, a to oprogramowanie do nagrywania pozwala mi nagrywać wideo z dźwiękiem, więc mogę bezpośrednio po nagraniu przesłać zmontowany film do YouTube. Łączy nagrywanie i edycję, co jest bardzo wygodne dla youtuberów takich jak ja, którzy chcą udostępniać filmy instruktażowe!
							<p>—Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							Jako sekretarka muszę często korzystać z oprogramowania do nagrywania ekranu. Trudno było znaleźć dla mnie idealny darmowy rejestrator ekranu, ale iFun Screen Recorder jest doskonałym narzędziem do nagrywania wideo-telekonferencji i bardzo mi pomaga! Pozwolił mi nagrać ekran HD i przekonwertować wideo na różne formaty. Bardzo polecam iFun Screen Recorder!
							<p>—Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							Cześć! Wasz fantastyczny darmowy rejestrator ekranu zaskakuje mnie. Mogę nagrywać wszystkie cenne i wspaniałe chwile za pomocą iFun Screen Recorder, szczególnie w przypadku filmów na żywo. Filmy, które nagrywam za pomocą iFun Screen Recorder, są niezwykle wysokiej jakości. Mogę je zapisywać i udostępniać znajomym. Na początku nie byłem pewien tego oprogramowania, jednak rezultaty są niesamowite. Jest ono znakomite!
							<p>—Robbins Hilton</p>
							<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
						</li>
					</ul>
					
				</div>
			</div>
			
		</div>
	</div>
	<div class="wrapper screen5">
		<div class="content" >
			<h3 class="screen-title">Dlaczego IObit</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">Liczby nie kłamią</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500M</h3>
					Pobrań
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>1.5M</h3>
					Wyświetleń strony
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>200K</h3>
					 Zadowolonych<br />użytkowników 
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					Krajów
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					Lat doświadczenia  
				</div>
			</div>
		</div>
		
	</div>
	<div class="wrapper" style="background-color: #F2F2F2; border-top: #cecece 1px solid;">
		<div class="content backMoney">
			<p ><img src="<?php echo getStaticUrl('images/foot-icon1.png')?>">Akceptujemy</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon2.png')?>">Bezpieczna płatność</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon3.png')?>">Gwarancja zwrotu</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon4.png')?>">Natychmiastowa dostawa <br /> przez e-mail</p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
				Uwaga:<br />
				1. *Powyższe programy promocyjne mogą okresowo ulec zmianie według naszego wyłącznego uznania oraz bez powiadomienia.<br />
				2.&3. *Efekty końcowe mogą się różnić w zależności od systemu lub komputera.
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; font-weight: 500;">Prawa autorskie © 2005 - 2021 IObit. Wszelkie prawa zastrzeżone</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label70"></div>
			<div class="font-layer">
				<ul>
					<li class="active">1 rok / 1 PC <span>-45%</span></li>
					<li class="">Dożywotnio / 1 PC <span>-40%</span></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd style="display: block;">
						<div class="now">
							<h3>109<i>90</i></h3>
							<span>zł</span>
						</div>
						<div class="old">
							<h3>199<i>90</i></h3>
							<span>zł</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=pl-isr11pc109&ref=pl_isr11pc109purchase2103<?= $refStr; ?>&refs=pl_purchase_isr">Kup teraz</a>
					</dd>
					<dd>
						<div class="now">
							<h3>179<i>90</i></h3>
							<span>zł</span>
						</div>
						<div class="old">
							<h3>379<i>90</i></h3>
							<span>zł</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=pl-isr1lf1pc179&ref=pl_isr1lf1pc179purchase2103<?= $refStr; ?>&refs=pl_purchase_isr">Kup teraz</a>
					</dd>
				</dl>
				<p>Pośpiesz się, pozostało <span class="countNum">50</span> dziś!</p>
			</div>
		</div>
		
	</div>
	

<script>refStr = "<?= $refStr; ?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo getStaticUrl('script/swiper.min.js')?>"></script>

 <script>
	   var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        slidesPerView: 3,
	        paginationClickable: true,
	        spaceBetween: 150,
			loop : true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			onSlideChangeEnd: function(swiper){
				
				$('.user-avator ul li').hide()
				$('.user-avator ul li').eq(swiper.realIndex).show()
			}
	    });
  </script>
</body>
</html>