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
	$c_name = 'apr2021it' . $date;
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
  <title>50% di SCONTO sul nuovo iFun Screen Recorder PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Lato:wght@400;500;600;700;800&display=swap">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
	
</head>
<body>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://www.iobit.com/it/index.php"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>"/>
				<p>Personalizza e crea video di alta qualit?? senza filigrana!</p>
			</div>
			<div id="banner-box" class="box">
				<img src="<?php echo getStaticUrl('images/box-banner.png')?>" alt="box-banner">
				<i></i>
			</div>
			<div class="banner-cont">
				<p class="banner-count">Solo <span class="active countNum">50<i></i></span>rimasti</p>
				<div class="offer-list">
					<div class="offer-wrap">
						<div class="offer-item">
							<div class="offter-wrap">
								<div class="offer-header">
									<span>1 Mese / 1 PC</span>
									<i>-35%</i>
								</div>
								<div class="offer-body">
									<div class="price">
										<div class="new">
											<span>12</span>
											<b>,99</b>
											<i>???</i>
										</div>
										<div class="old">
											<span>19</span>
											<b>,99</b>
											<i>???</i>
										</div>
									</div>
									<a class="btn" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1m1pcpurchase2104sale-it');" href="https://www.iobit.com/buy.php?product=it-isr1m1pc1299&ref=it_isr1m1pc1299purchase2104sale<?= $refStr; ?>&refs=it_purchase_isr">Acquista ora</a>
									<ul class="first">
										<li><i></i>Licenza valida 1 mese</li>
										<li><i></i>Elimina filigrana predefinita e aggiungi la tua filigrana personalizzata</li>
										<li><i></i>Massima qualit?? di registrazione</li>
										<li><i></i>Registra video in 4K e senza lag</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="offer-wrap active">
						<div class="offer-item">
							<div class="offer-header">
								<span>1 Anno / 1 PC</span>
								<i>-50%</i>
								<b></b>
							</div>
							<div class="offer-body">
								<div class="price">
									<div class="new">
										<span>24</span>
										<b>,99</b>
										<i>???</i>
									</div>
									<div class="old">
										<span>49</span>
										<b>,99</b>
										<i>???</i>
									</div>
								</div>
								<a class="btn" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2104sale-it');" href="https://www.iobit.com/buy.php?product=it-isr11pc2499&ref=it_isr11pc2499purchase2104sale<?= $refStr; ?>&refs=it_purchase_isr">Acquista ora</a>
								<div class="tip">Solo 2,15??? al mese</div>
								<ul class="second">
									<li><i></i>Licenza con aggiornamenti gratuiti</li>
									<li><i></i>Elimina filigrana predefinita e aggiungi la tua filigrana personalizzata</li>
									<li><i></i>Massima qualit?? di registrazione</li>
									<li><i></i>Registra video in 4K e senza lag</li>
								</ul>
							</div>
						</div>
					</div>
					<div class="offer-wrap">
						<div class="offer-item">
							<div class="offer-header">
								<span>A vita / 1 PC</span>
								<i>-40%</i>
							</div>
							<div class="offer-body">
								<div class="price">
									<div class="new">
										<span>47</span>
										<b>,99</b>
										<i>???</i>
									</div>
									<div class="old">
										<span>79</span>
										<b>,99</b>
										<i>???</i>
									</div>
								</div>
								<a class="btn" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2104sale-it');" href="https://www.iobit.com/buy.php?product=it-isr1lf1pc4799&ref=it_isr1lf1pc4799purchase2104sale<?= $refStr; ?>&refs=it_purchase_isr">Acquista ora</a>
								<ul class="third">
									<li><i></i>Licenza senza aggiornamenti gratuiti</li>
									<li><i></i>Elimina filigrana predefinita e aggiungi la tua filigrana personalizzata</li>
									<li><i></i>Massima qualit?? di registrazione</li>
									<li><i></i>Registra video in 4K e senza lag</li>
								</ul>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 80px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO </span><br />Molto pi?? di una semplice registrazione</h3>
			<div class="screen2-cont" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" width="480" height="280" />
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Filigrana personalizzata</h3>
					<span>Solo nella versione PRO</span>
					<p>Non vuoi avere nessuna filigrana sul tuo video? Con iFun Screen Recorder PRO puoi eliminare la filigrana predefinita e aggiungere il nome della tua azienda o del tuo canale per creare video professionali.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/timeout.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="date"></i>Registrazione programmata</h3>
					<span>Solo nella versione PRO</span>
					<p>Ti permette di programmare le registrazioni impostando l???orario specifico per attivare e interrompere la registrazione dello schermo del PC e della webcam.</p>
					<p>Puoi programmare registrazioni multiple in modo automatico. Registra videoconferenze, lezioni online e dirette streaming senza dover rimanere seduto di fronte al PC.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fl">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/audio.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="audio"></i>Separa l???audio dal video</h3>
					<span>Solo nella versione PRO</span>
					<p>iFun Screen Recorder PRO ti aiuta a registrare solo la musica di un video YouTube o l???audio del tuo PC.</p>
					<p>Ti permette di estrarre l???audio dai video dopo aver terminato la registrazione, separarlo e salvarlo in modo indipendente sul tuo PC.</p>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont4 fl">
					<h3><i class="rec"></i>Registrazione senza lag</h3>
					<span>Solo nella versione PRO</span>
					<p>iFun Screen Recorder PRO, con un frame rate a 60 FPS, ?? il migliore per registrare partite di videogiochi o guide strategiche e condividerle su YouTube.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">Molte pi?? funzionalit?? con la versione PRO</h3>
			<div class="versionTable">
				<div class="versionDesc">
					
					<ul><li><i class="descIcon time"></i>Tempo di registrazione illimitato</li></ul>
					<ul><li><i class="descIcon cut"></i>Video editing personalizzato</li></ul>
					<ul><li><i class="descIcon remove"></i>Elimina filigrana predefinita</li></ul>
					<ul><li><i class="descIcon seal"></i>Aggiungi filigrana personale</li></ul>
					<ul><li><i class="descIcon date"></i>Programma le tue registrazioni</li></ul>
					<ul><li><i class="descIcon audio"></i>Estrai l'audio dal video e salvalo separatamente</li></ul>
					<ul><li><i class="descIcon game"></i>Registrazione gameplay pi?? fluida con ottimizzazione FPS fino al <span>30%</span> in pi??*<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Registrazione senza lag con accelerazione hardware fino al <span>50%</span> pi?? veloce*<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Massima qualit?? video <i class="tableIcon up"></i> <p style="font-size: 12px;">(definizione fino al <span>30%</span> pi?? alta*)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Aggiornamento automatico</li></ul>
					<ul><li><i class="descIcon spt24"></i>Supporto tecnico gratuito 24/7</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">Versione FREE</div>
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
					<div class="topTitle">Versione PRO</div>
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
							<label for="option3">1 Anno</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option2" value="0">
							<label for="option2">1 Mese</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4">A vita</label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2104sale-it');" href="https://www.iobit.com/buy.php?product=it-isr11pc2499&ref=it_isr11pc2499purchase2104sale<?= $refStr; ?>&refs=it_purchase_isr" style="display: block;">Acquista ora-24,99???</a>
							<a class="button" id="planC" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1m1pcpurchase2104sale-it');" href="https://www.iobit.com/buy.php?product=it-isr1m1pc1299&ref=it_isr1m1pc1299purchase2104sale<?= $refStr; ?>&refs=it_purchase_isr" style="display: none;">Acquista ora-12,99???</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2104sale-it');" href="https://www.iobit.com/buy.php?product=it-isr1lf1pc4799&ref=it_isr1lf1pc4799purchase2104sale<?= $refStr; ?>&refs=it_purchase_isr">Acquista ora-47,99???</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen4" >
		<div class="content">
			<h3 class="screen-title">Premiati da media di fama internazionale</h3>
			<div class="media">
				<p>Con i riconoscimenti di questi media internazionali, IObit ?? la scelta giusta che fa per te</p>
				<img src="<?php echo getStaticUrl('images/media.png')?>" />
			</div>
			<h3 class="screen-title" style="margin-top: 160px;">Ascoltiamo sempre i nostri utenti</h3>
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
							Finora tutto fantastico. iFun Screen Recorder ?? davvero un programma facile da usare. Non sono un???esperta di computer, non sapevo come registrare lo schermo del mio Windows, ma con questo software ce l'ho fatta! Posso catturare lo schermo, aggiungere la mia filigrana personale, fare screenshot durante la registrazione e caricare facilmente i video su Instagram. Questo registratore dello schermo mi ha aiutato tantissimo ad avviare il mio business. Tra l'altro ?? 100% gratuito.
							<p>???Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Ho trovato questo registratore dello schermo gratuito per caso e mi sono innamorato delle sue semplici funzioni di editing. Mi piace registrare i processi operativi per aiutare le persone a risolvere i loro problemi con il computer e con questo software di registrazione dello schermo, posso catturare i video con audio e caricarli direttamente su YouTube dopo averli editati. iFun Screen Recorder supporta sia la registrazione dello schermo sia il video editing, il che ?? molto conveniente per gli youtubers come me che vogliono condividere i loro video tutorial.
							<p>???Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							In quanto segretaria, ho bisogno di usare molto spesso software per registrare lo schermo del PC. ?? stato difficile trovare un registratore dello schermo ideale per le mie esigenze, fortunatamente ho provato iFun Screen Recorder, uno strumento perfetto per registrare le videoconferenze, mi ha aiutato moltissimo! Con iFun Screen Recorder posso registrare lo schermo in HD e convertire i video in diversi formati. Raccomando vivamente questo software a tutti!
							<p>???Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							Questo registratore dello schermo gratis ?? fantastico! Con iFun Screen Recorder posso registrare tutti i miei momenti preziosi, soprattutto le live streaming video. La qualit?? dei video che ho registrato con iFun Screen Recorder ?? ottima! Posso condividerli subito con i miei amici. Brava, IObit!
							<p>???Robbins Hilton</p>
							<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
						</li>
					</ul>
					
				</div>
			</div>
			
		</div>
	</div>
	<div class="wrapper screen5">
		<div class="content" >
			<h3 class="screen-title">Perch?? i numeri di IObit</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">non mentono mai</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500M</h3>
					Download
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>1.5M</h3>
					Visualizzazioni
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>200K</h3>
					Utenti attivi giornalieri
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					Paesi
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					Anni di esperienza
				</div>
			</div>
		</div>
		
	</div>
	<div class="wrapper" style="background-color: #F2F2F2; border-top: #cecece 1px solid;">
		<div class="content backMoney">
			<p >Accettiamo:<img src="<?php echo getStaticUrl('images/foot-icon1.png')?>"></p>
			<p >Pagamento sicuro<img src="<?php echo getStaticUrl('images/foot-icon2.png')?>"></p>
			<p >Rimborso garantito<img src="<?php echo getStaticUrl('images/foot-icon3.png')?>"></p>
			<p >Consegna immediata<img src="<?php echo getStaticUrl('images/foot-icon4.png')?>"></p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
				Note:<br />
				1. L'effetto finale potrebbe variare in base al sistema o computer.<br />
				2. Tali promozioni sono soggette a modifiche senza preavviso, periodiche e a nostra esclusiva discrezione.<br />
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; font-weight: 500;">Copyright ?? 2005 - 2021 IObit. Tutti i diritti riservati</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label70"></div>
			<div class="font-layer">
				<ul>
					<li class="active"><div>1 Anno / 1 PC</div></li>
					<li class=""><div>1 Mese / 1 PC</div></li>
					<li class=""><div>A vita / 1 PC</div></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<!-- 1 Anno / 1 PC -->
					<dd style="display: block;">
						<div class="now">
							<h3>24<i>,99</i></h3>
							<span>???</span>
						</div>
						<div class="old">
							<h3>49<i>,99</i></h3>
							<span>???</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2104sale-it');" href="https://www.iobit.com/buy.php?product=it-isr11pc2499&ref=it_isr11pc2499purchase2104sale<?= $refStr; ?>&refs=it_purchase_isr">Acquista ora</a>
					</dd>
					<!-- 1 Mese / 1 PC -->
					<dd>
						<div class="now">
							<h3>12<i>,99</i></h3>
							<span>???</span>
						</div>
						<div class="old">
							<h3>19<i>,99</i></h3>
							<span>???</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1m1pcpurchase2104sale-it');" href="https://www.iobit.com/buy.php?product=it-isr1m1pc1299&ref=it_isr1m1pc1299purchase2104sale<?= $refStr; ?>&refs=it_purchase_isr">Acquista ora</a>
					</dd>
					<!-- A vita / 1 PC -->
					<dd>
						<div class="now">
							<h3>47<i>,99</i></h3>
							<span>???</span>
						</div>
						<div class="old">
							<h3>79<i>,99</i></h3>
							<span>???</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2104sale-it');" href="https://www.iobit.com/buy.php?product=it-isr1lf1pc4799&ref=it_isr1lf1pc4799purchase2104sale<?= $refStr; ?>&refs=it_purchase_isr">Acquista ora</a>
					</dd>
				</dl>
				<p>Affrettati, solo <span class="countNum">50</span> rimasti!</p>
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