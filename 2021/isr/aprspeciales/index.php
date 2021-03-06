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
	$c_name = 'apr2021es' . $date;
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
  <meta name="robots" content="noindex,nofollow">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>60% de descuento para el nuevo lanzamiento de iFun Screen Recorder - IObit</title>
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
			<a class="logo" href="https://www.iobit.com/es/index.php"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>"/>
				<p>??Personaliza y crea videos de mayor calidad sin ning??n l??mite!</p>
			</div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label70"></div>
				<div class="banner-option">
					<p class="banner-count">Solo quedan <span class="active countNum">50<i></i></span>paquetes</p>
					<ul>
						<li class="custom-radio">
							<label>De Por Vida / 1 PC<i>-50%</i></label>
							<div class="sel-list">
								<p>Uso de por vida en la versi??n actual</p>
								<p>Eliminar la marca de agua predeterminada y a??adir la personal</p>
								<p>Grabar la pantalla y c??mara web en alta calidad sin retrasos</p>
								<p>Recomendado para cursos en l??nea, partidas de juego y videos de Youtube</p>
							</div>
						</li>
						<li class="custom-radio active">
							<span class="like"></span>
							<label>1 A??o / 1 PC<i>-60%</i></label>
							<div class="sel-list">
								<p>Uso con actualizaciones en 1 a??o</p>
								<p>Eliminar la marca de agua predeterminada y a??adir la personal</p>
								<p>Grabar la pantalla y c??mara web en alta calidad sin retrasos</p>
								<p>Recomendado para cursos en l??nea, partidas de juego y videos de Youtube</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd>
							<div class="now">
								<span class="symbol">US$</span>
								<h3>39<span>.</span><i>99</i></h3>
							</div>
							<div class="old">
								<span>US$</span>
								<h3>95.99</h3>
							</div>
							<div class="getItNow">
								<a class="button"onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2105usd3999-es')" href="https://www.iobit.com/buy.php?product=es-isr1lf1pcusd3999&ref=es_isr1lf1pcusd3999purchase2105<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora</a>
							</div>
						</dd>
						<dd style="display: block;">
							<div class="now">
								<span class="symbol">US$</span>
								<h3>22<span>.</span><i>99</i></h3>
							</div>
							<div class="old">
								<span>US$</span>
								<h3>59.99</h3>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2105usd2299-es')" href="https://www.iobit.com/buy.php?product=es-isr11pcusd2299&ref=es_isr11pcusd2299purchase2105<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora</a>
								Pagar s??lo <strong>US$1.9</strong> cada mes para el uso de <strong> 1 </strong> a??o.
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 20px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO </span><br />Mucho M??s Que Grabaci??n de Pantalla</h3>
			<div class="screen2-cont" >
				<p style=" margin-bottom: 30px; color: #303030;">Disfrutar??s de nuestro soporte t??cnico de 24 horas y la garant??a de reembolso de hasta 60 d??as, lo que destaca entre los competidores que solo ofrecen 30 d??as.</p>
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" width="480" height="280"/>
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Personalizar Marca de Agua</h3>
					<span>S??lo para la versi??n PRO</span>
					<p>Puedes eliminar la marca de agua predeterminada antes de grabar la pantalla.</p>
					<p>Puedes a??adir tu propia marca de agua en tus videos. As?? que se protege tu contenido original y se evitan las copia pirata con fines de lucro.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/timeout.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="date"></i>Grabaci??n Programada</h3>
					<span>S??lo para la versi??n PRO</span>
					<p>Te permite crear tareas programadas estableciendo la hora determinada para activar y detener la grabaci??n de la pantalla y de la c??mara web.</p>
					<p>Puedes crear m??ltiples tareas de grabaci??n autom??tica. En este caso se graban las conferencias, clases y transmisiones en vivo, sin tener que quedarte en frente del PC.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fl">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/audio.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="audio"></i>Separar Audio del Video</h3>
					<span>S??lo para la versi??n PRO</span>
					<p>iFun Screen Recorder PRO te ayuda en casos de que solo te interesa la m??sica de un video en Youtube o que quieres grabar simplemente el audio de tu PC.</p>
					<p>Te admite extraer el audio de los videos despu??s de realizar la grabaci??n. Puedes separar el audio de los videos y guardarlo de manera individual.</p>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont4 fl">
					<h3><i class="rec"></i>Alta Definici??n sin Retrasos*</h3>
					<span>S??lo para la versi??n PRO</span>
					<p>La t??cnica de la aceleraci??n avanzada de GPU te permite grabar los juegos sin ca??das de FPS y tener videos m??s n??tidos con alta definici??n hasta 4K.</p>
					<p>Para los jugadores, iFun Screen Recoder es el mejor grabador para hacer partidas o gu??as de juegos y compartirlos en Youtube.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">Disfrutar??s m??s funciones con la versi??n PRO</h3>
			<div class="versionTable">
				<div class="versionDesc">
					
					<ul><li><i class="descIcon time"></i>Tiempo de Grabaci??n Ilimitado</li></ul>
					<ul><li><i class="descIcon cut"></i>Edici??n Personalizada de la Grabaci??n</li></ul>
					<ul><li><i class="descIcon remove"></i>Eliminar Marca de Agua Predeterminada</li></ul>
					<ul><li><i class="descIcon seal"></i>A??adir Marca de Agua Personal</li></ul>
					<ul><li><i class="descIcon date"></i>Crear Tareas de Grabaci??n Programadas</li></ul>
					<ul><li><i class="descIcon audio"></i>Extraer el Audio y Guardarlo Individualmente</li></ul>
					<ul><li><i class="descIcon game"></i>Grabaci??n m??s fluida del juego con optimizaci??n de hasta un <span>30%</span> m??s FPS*<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Grabaci??n sin retrasos con aceleraci??n de hardware hasta un <span>55%</span> m??s r??pida*<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Alta calidad de video*<i class="tableIcon up"></i> <p style="font-size: 12px;">(hasta <span>30%</span> m??s alta definici??n)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Actualizaci??n Autom??tica</li></ul>
					<ul><li><i class="descIcon spt24"></i>Soporte T??cnico Gratis 24/7</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">Versi??n FREE</div>
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
					<div class="topTitle">Versi??n PRO</div>
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
							<label for="option3">1 A??o</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4">De Por Vida</label>
						</div>
						<div class="optionsLink" id="planA" style="display: block;">
							<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2105usd2299-es')" href="https://www.iobit.com/buy.php?product=es-isr11pcusd2299&ref=es_isr11pcusd2299purchase2105<?= $refStr; ?>&refs=es_purchase_isr" >Comprar Ahora-US$22.99</a>
							<!-- <p style="font-size: 12px; margin-top: 10px; text-align: center; line-height: 1.5;">Se necesitar??a pagar 24,99US$ por uso <br />de 1 a??o y s??lo 2.08US$ cada mes.</p> -->
						</div>
						<div class="optionsLink" id="planB" >
							<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2105usd3999-es')" href="https://www.iobit.com/buy.php?product=es-isr1lf1pcusd3999&ref=es_isr1lf1pcusd3999purchase2105<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora-US$39.99</a>
						</div>
						
						
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen4" >
		<div class="content">
			<h3 class="screen-title">Estamos orgullosos de ser confiados por</h3>
			<div class="media">
				<p>Al ser confiado y premiado por estos medios de comunicaci??n de clase mundial durante m??s de una d??cada, IObit es tu mejor opci??n. </p>
				<img src="<?php echo getStaticUrl('images/media.png')?>" />
			</div>
			<h3 class="screen-title" style="margin-top: 160px;">Siempre Escuchamos a Nuestros Usuarios</h3>
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
							Bueno, hasta ahora todo bien. iFun Screen Recorder es realmente una herramienta completa y f??cil de usar. No sab??a c??mo grabar la pantalla en Windows, pero con este software es f??cil. Puedo tomar capturas de pantalla mientras grabo en HD y agregar mi propia marca de agua en el video. Luego lo subo a mi Instagram y capto una atenci??n masiva. Este potente grabador de pantalla me ha ayudado a impulsar mi negocio.
							<p>???Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Encontr?? este grabador de pantalla gratuito y me volv?? fan por sus sencillas funciones de edici??n. Me gusta grabar el proceso de operaci??n para ayudar a las personas a resolver problemas del ordenador, y este software de grabaci??n me permite grabar con audio para poder subir directamente el video editado a YouTube. ??Combina grabaci??n y edici??n, lo cual es muy conveniente para youtubers como yo que quieren compartir videos tutoriales!
							<p>???Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							Como secretaria, necesito usar mucho software de grabaci??n de pantalla. Fue dif??cil encontrar un grabador de pantalla gratis ideal para m??, pero iFun Screen Recorder resulta ser una herramienta perfecta para la grabaci??n de videoconferencias y me ayuda mucho. Puedo grabar la pantalla HD con ??l y convertir el video en diferentes formatos. ??Lo recomiendo ampliamente!
							<p>???Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							??Hola! Este fant??stico grabador de pantalla me sorprende. Puedo grabar todos estos momentos preciosos y maravillosos con iFun Screen Recorder, especialmente para videos en vivo. Los videos grabados son de muy alta calidad. Puedo guardarlos y compartirlos con mis amigos. Al principio, no estaba seguro sobre el software, pero los resultados son asombrosos. ??Es incre??ble!
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
			<h3 class="screen-title">??Por Qu?? IObit?</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">Los N??meros Nunca Mienten</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500M</h3>
					de <br />Descargas
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>1.5M</h3>
					Visitas <br/>de P??gina
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>200K</h3>
					Usuarios Contentos
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					Pa??ses y Territorios
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					A??os de Experiencia
				</div>
			</div>
		</div>
		
	</div>
	<div class="wrapper" style="background-color: #F2F2F2; border-top: #cecece 1px solid;">
		<div class="content backMoney">
			<p ><img src="<?php echo getStaticUrl('images/foot-icon1.png')?>">Formas de Pago</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon2.png')?>">Pago Seguro</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon3.png')?>">Garant??a de Reembolso</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon4.png')?>">Entrega Inmediata</p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
				Notas:<br />
				1. *Estos programas promocionales est??n sujetos a cambios sin previo aviso, dependiendo de nuestra discreci??n exclusiva en cualquier momento.<br />
				2.&3. *El efecto final variar?? en funci??n de las diferentes configuraciones de cada ordenador.
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; font-weight: 500;">Copyright ?? 2005 - 2021 IObit. Todos los derechos reservados</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label70"></div>
			<div class="font-layer">
				<ul>
					<li class="active">1 A??o / 1 PC <span>-60%</span></li>
					<li class="">De Por Vida / 1 PC <span>-50%</span></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd style="display: block;">
						<div class="now">
							<span class="symbol">US$</span>
							<h3>22<span>.</span><i>99</i></h3>
						</div>
						<div class="old">
							<span>US$</span>
							<h3>59.99</h3>
						</div>
						<font class="por-mes" style="color: #fff; margin-left: 10px;">por mes</font>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2105usd2299-es')" href="https://www.iobit.com/buy.php?product=es-isr11pcusd2299&ref=es_isr11pcusd2299purchase2105<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora</a>
						<!-- <p>Se necesitar??an 24,99US$ para uso de 1 a??o.</p> -->
					</dd>
					<dd>
						<div class="now">
							<span class="symbol">US$</span>
							<h3>39<span>.</span><i>99</i></h3>
						</div>
						<div class="old">
							<span>US$</span>
							<h3>95.99</h3>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2105usd3999-es')" href="https://www.iobit.com/buy.php?product=es-isr1lf1pcusd3999&ref=es_isr1lf1pcusd3999purchase2105<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora</a>
					</dd>
				</dl>
				<p>??Date prisa, s??lo quedan <span class="countNum">50</span> paquetes!</p>
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