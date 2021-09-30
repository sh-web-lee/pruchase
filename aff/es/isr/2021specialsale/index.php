<?php
error_reporting(0);
define("IObit", "IObit");
header("location:https://es.itopvpn.com/screenrecorder/aff/2021specialsale".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));exit();
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (!empty($_GET['AFF'])) $_GET['aff'] = $_GET['AFF'];

// if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
// 	$date = $_GET['d'];
// 	$c_name = '2021specialsale' . $date;
// 	if (empty($_COOKIE[$c_name])) {
// 		$packsNum = rand(50, 100);
// 		setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
// 	} else {
// 		if (intval($_COOKIE[$c_name]) <= 3) {
// 			$packsNum = 3;
// 		} else {
// 			$packsNum = $_COOKIE[$c_name];
// 			$packsNum -- ;
// 			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
// 		}
// 	}
// 	echo json_encode(['packsNum' => $packsNum]);
// 	exit();
// }
// $refStr = empty($_GET['st']) ? '' : '-'.$_GET['st'];
// $refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
// $refStr .= empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
// $refStr .= empty($_GET['insur']) ? '' : '-'.$_GET['insur'];
// if(!empty($_GET['ver'])){
// 	$ver = explode('.',$_GET['ver']);
// 	$refStr .= '-'.$ver[0].$ver[1];
// }
// $refStr .= empty($_GET['instd']) ? '' : '-'.$_GET['instd'];
// $refStr .= empty($_GET['finstd']) ? '' : '-'.$_GET['finstd'];


if (empty($_GET['ref'])) $_GET['ref'] = 'esaff_isr1_2021specialsale';

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>55% de descuento para el nuevo lanzamiento de iFun Screen Recorder - IObit</title>
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
				<p>¡Personaliza y crea videos de mayor calidad sin ningnún límite!</p>
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
								<p>Licencia de 1 PC para el Uso de por Vida</p>
								<p>Marca de Agua Personalizada</p>
								<p>Grabación con Mayor Calidad</p>
								<p>Grabación Más Fluida sin Retrasos</p>
							</div>
						</li>
						<li class="custom-radio active">
							<span class="like"></span>
							<label>1 Año / 1 PC<i>-55%</i></label>
							<div class="sel-list">
								<p>Licencia para 1 PC durante 1 año</p>
								<p>Marca de Agua Personalizada</p>
								<p>Grabación con Mayor Calidad</p>
								<p>Grabación Más Fluida sin Retrasos</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd>
							<div class="now">
								<h3>39<span>,</span><i>99</i></h3>
								<span>€</span>
							</div>
							<div class="old">
								<h3>79,99</h3>
								<span>€</span>
							</div>
							<div class="getItNow">
								<a class="button"onclick="ga('send', 'event', 'isrbuy', 'buy', 'esaffisr12021specialsale')" href="
https://www.iobit.com/buy.php?product=esaff-isr1lf1pc3999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>">Comprar Ahora</a>
							</div>
						</dd>
						<dd style="display: block;">
							<div class="now">
								<h3>21<span>,</span><i>99</i></h3>
								<span>€</span>
							</div>
							<div class="old">
								<h3>49,99</h3>
								<span>€</span>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'esaffisr12021specialsale')" href="https://www.iobit.com/buy.php?product=esaff-isr11pc2199&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>">Comprar Ahora</a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 80px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO </span><br />Mucho Más Que Grabación de Pantalla</h3>
			<div class="screen2-cont" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" />
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Marca de Agua Personal</h3>
					<span>Sólo para la versión PRO</span>
					<p>Puedes grabar la pantalla sin ningún logotipo y añadir tu propia marca de agua.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="rec"></i>Grabacón sin Retrasos*</h3>
					<span>Sólo para la versión PRO</span>
					<p>Se optimiza el motor de iFun Screen Recorder con altos FPS para garantizarte una experiencia más fluida al grabar juegos.</p>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fl">
					<div class="vfx-image-wrap">
						<div class="before-image"><img src="<?php echo getStaticUrl('images/img-after.png')?>" alt="" /></div>
						<div class="after-image"><img src="<?php echo getStaticUrl('images/img-before.png')?>" alt="" /></div>
						<div class="divider-bar"></div>
					</div>
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="search"></i>Alta de Definición*</h3>
					<span>Sólo para la versión PRO</span>
					<p>Gracias a la técnica de la aceleración avanzada de GPU, tendrás videos de mayor calidad.</p>
				</div>
			</div>
		</div>
	</div>
	
	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">Disfrutarás más funciones con la versión PRO</h3>
			<div class="versionTable">
				<div class="versionDesc">
					
					<ul><li><i class="descIcon time"></i>Tiempo de Grabación Ilimitado</li></ul>
					<ul><li><i class="descIcon cut"></i>Edición Personalizada de la Grabación</li></ul>
					<ul><li><i class="descIcon seal"></i>Añadir Marca de Agua Personal</li></ul>
					<ul><li><i class="descIcon game"></i>Grabación más fluida del juego con optimización de hasta un <span>30%</span> más FPS*<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Grabación sin retrasos con aceleración de hardware hasta un <span>55%</span> más rápida*<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Alta calidad de video*<i class="tableIcon up"></i> <p style="font-size: 12px;">(hasta <span>30%</span> más alta de definición)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Actualización Automática</li></ul>
					<ul><li><i class="descIcon spt24"></i>Soporte Técnico Gratis 24/7</li></ul>
				</div>
				<!-- <div class="versionFree">
					<div class="topTitle">Versión FREE</div>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
				</div> -->
				<div class="versionPro">
					<div class="topTitle">Versión PRO</div>
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
							<label for="option3">1 Año</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4">De Por Vida</label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'esaffisr12021specialsale')" href="https://www.iobit.com/buy.php?product=esaff-isr11pc2199&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>" style="display: block;">Comprar Ahora-21,99€</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'esaffisr12021specialsale')" href="
https://www.iobit.com/buy.php?product=esaff-isr1lf1pc3999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>">Comprar Ahora-39,99€</a>
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
				<p>Al ser confiado y premiado por estos medios de comunicación de clase mundial durante más de una década, IObit es totalmente tu mejor </p>
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
							Bueno, hasta ahora todo bien. iFun Screen Recorder es realmente una herramienta completa y fácil de usar. No sabía cómo grabar la pantalla en Windows, pero con este software es fácil. Con ISR, puedo tomar capturas de pantalla mientras grabo en HD y agregar subtítulos para el video después de la grabación. Luego lo subo a mi Instagram y capto una atención masiva. Este potente grabador de pantalla me ha ayudado a impulsar mi negocio. 
							<p>—Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Encontré este grabador de pantalla y me volví fan por sus sencillas funciones de edición. Me gusta grabar el proceso de operación para ayudar a las personas a resolver problemas del ordenador, y este software de grabación me permite grabar con audio para poder subir directamente el video editado a YouTube. ¡Combina grabación y edición, lo cual es muy conveniente para youtubers como yo que quieren compartir videos tutoriales!
							<p>—Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							Como secretaria, necesito usar mucho software de grabación de pantalla. Fue difícil encontrar un grabador de pantalla ideal para mí, pero iFun Screen Recorder resulta ser una herramienta perfecta para la grabación de videoconferencias y me ayuda mucho. Puedo grabar la pantalla HD con él y convertir el video en diferentes formatos. ¡Lo recomiendo ampliamente!
							<p>—Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							¡Hola! Este fantástico grabador de pantalla me sorprende. Puedo grabar todos estos momentos preciosos y maravillosos con iFun Screen Recorder, especialmente para videos en vivo. Los videos que grabo con ISR son de muy alta calidad. Puedo guardarlos y compartirlos con mis amigos. Al principio, no estaba seguro sobre el software, pero los resultados son asombrosos. ¡Es increíble!
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
			<h3 class="screen-title">¿Por Qué IObit?</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">Los Números Nunca Mienten</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500M</h3>
					de <br />Descargas
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>1.5M</h3>
					Visitas <br/>de Página
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>200K</h3>
					Usuarios Contentos
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					Países y Territorios
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					Años de Experiencia
				</div>
			</div>
		</div>
		
	</div>
	<div class="wrapper" style="background-color: #F2F2F2; border-top: #cecece 1px solid;">
		<div class="content backMoney">
			<p ><img src="<?php echo getStaticUrl('images/foot-icon1.png')?>">Formas de Pago</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon2.png')?>">Pago Seguro</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon3.png')?>">Garantía de Reembolso</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon4.png')?>">Entrega Inmediata</p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
				Notas:<br />
				1. *Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.<br />
				2.&3. *El efecto final variará en función de las diferentes configuraciones de cada ordenador.
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; font-weight: 500;">Copyright © 2005 - 2021 IObit. Todos los derechos reservados</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label70"></div>
			<div class="font-layer">
				<ul>
					<li class="active">1 Año / 1 PC <span>-55%</span></li>
					<li class="">De Por Vida / 1 PC <span>-50%</span></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd style="display: block;">
						<div class="now">
							<h3>21<span>,</span><i>99</i></h3>
							<span>€</span>
						</div>
						<div class="old">
							<h3>49,99</h3>
							<span>€</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'esaffisr12021specialsale')" href="https://www.iobit.com/buy.php?product=esaff-isr11pc2199&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>">Comprar Ahora</a>
					</dd>
					<dd>
						<div class="now">
							<h3>39<span>,</span><i>99</i></h3>
							<span>€</span>
						</div>
						<div class="old">
							<h3>79,99</h3>
							<span>€</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'esaffisr12021specialsale')" href="
https://www.iobit.com/buy.php?product=esaff-isr1lf1pc3999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']?>">Comprar Ahora</a>
					</dd>
				</dl>
				<p>¡Date prisa, sólo quedan <span class="countNum">50</span> paquetes!</p>
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