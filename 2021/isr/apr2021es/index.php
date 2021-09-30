<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';


$list = ['MX', 'PE', 'CO', 'CL', 'AR', 'VE', 'EC', 'BO', 'CR', 'HN', 'DO', 'GT', 'PY', 'CU'];

require $pResUrl.'geoip/geoip2.phar';

$ip = getIP();

$reader = new GeoIp2\Database\Reader($pResUrl.'geoip/GeoLite2-City.mmdb');
try {
    $record = $reader->city($ip);

    $continent = $record->continent->names['en'];

    $city = $record->city->names['en'];

    $code = $record->country->isoCode;

    if (in_array($code, $list)) {

        header("location:./special.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));

        exit();
    }
}catch (GeoIp2\Exception\AddressNotFoundException $e) {

}

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
  <title>50% de descuento para el nuevo lanzamiento de iFun Screen Recorder - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

    <script>
        function cSet(name, value) {
            var Days = 2;
            var exp = new Date();
            exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
            document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
        }
        function cGet(name) {
            var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
            if (arr = document.cookie.match(reg))
                return unescape(arr[2]);
            else
                return null;
        }
        function pageDivide(cName,devicePage){
            var queryStr = <?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
            var pageAb = cGet(cName);
            if (pageAb == 'tob') {
                window.location.replace(devicePage + queryStr);
            } else {
                if (pageAb == null) {
                    randNum = Math.random();
                    if (randNum > 0.5) {
                        window.location.replace(devicePage + queryStr);
                        cSet(cName, 'tob');
                    } else {
                        cSet(cName, 'toa');
                    }
                }
            }
        }
        // pageDivide('isr2021', 'special.php')
    </script>
</head>
<body>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://www.iobit.com/es/index.php"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>" />
				<p>¡Personaliza y crea videos de mayor calidad sin ningún límite!</p>
			</div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label70"></div>
				<div class="banner-option">
					<p class="banner-count">Solo quedan <span class="active countNum">50<i></i></span>paquetes</p>
					<ul>
						<li class="custom-radio">
							<label>De Por Vida / 1 PC<i>-40%</i></label>
							<div class="sel-list">
								<p>Uso de por vida en la versión actual</p>
								<p>Eliminar la marca de agua predeterminada y añadir la personal</p>
								<p>Grabar la pantalla y cámara web en alta calidad sin retrasos</p>
								<p>Recomendado para cursos en línea, partidas de juego y videos de Youtube</p>
							</div>
						</li>
						<li class="custom-radio active">
							<span class="like"></span>
							<label>1 Año / 1 PC<i>-50%</i></label>
							<div class="sel-list">
								<p>Uso con actualizaciones en 1 año</p>
								<p>Eliminar la marca de agua predeterminada y añadir la personal</p>
								<p>Grabar la pantalla y cámara web en alta calidad sin retrasos</p>
								<p>Recomendado para cursos en línea, partidas de juego y videos de Youtube</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd>
							<div class="now">
								<h3>44<span>,</span><i>99</i></h3>
								<span>€</span>
							</div>
							<div class="old">
								<h3>79,99</h3>
								<span>€</span>
							</div>
							<div class="getItNow">
								<a class="button"onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=es-isr1lf1pc4499&ref=es_isr1lf1pc4499purchase2103<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora</a>
							</div>
						</dd>
						<dd style="display: block;">
							<div class="now">
								<h3>24<span>,</span><i>99</i></h3>
								<span>€</span>
							</div>
							<div class="old">
								<h3>49,99</h3>
								<span>€</span>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=es-isr11pc2499&ref=es_isr11pc2499purchase2103<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora</a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 20px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO </span><br />Mucho Más Que Grabación de Pantalla</h3>
			<div class="screen2-cont" >
				<p style=" margin-bottom: 30px; color: #303030;">Disfrutarás de nuestro soporte técnico de 24 horas y la garantía de reembolso de hasta 60 días, lo que destaca entre los competidores que solo ofrecen 30 días.</p>
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" width="480" height="280" />
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Personalizar Marca de Agua</h3>
					<span>Sólo para la versión PRO</span>
					<p>Puedes eliminar la marca de agua predeterminada antes de grabar la pantalla.</p>
					<p>Puedes añadir tu propia marca de agua en tus videos. Así que se protege tu contenido original y se evitan las copia pirata con fines de lucro.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/timeout.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="date"></i>Grabación Programada</h3>
					<span>Sólo para la versión PRO</span>
					<p>Te permite crear tareas programadas estableciendo la hora determinada para activar y detener la grabación de la pantalla y de la cámara web.</p>
					<p>Puedes crear múltiples tareas de grabación automática. En este caso se graban las conferencias, clases y transmisiones en vivo, sin tener que quedarte en frente del PC.</p>
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
					<span>Sólo para la versión PRO</span>
					<p>iFun Screen Recorder PRO te ayuda en casos de que solo te interesa la música de un video en Youtube o que quieres grabar simplemente el audio de tu PC.</p>
					<p>Te admite extraer el audio de los videos después de realizar la grabación. Puedes separar el audio de los videos y guardarlo de manera individual.</p>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont4 fl">
					<h3><i class="rec"></i>Alta Definición sin Retrasos*</h3>
					<span>Sólo para la versión PRO</span>
					<p>La técnica de la aceleración avanzada de GPU te permite grabar los juegos sin caídas de FPS y tener videos más nítidos con alta definición hasta 4K.</p>
					<p>Para los jugadores, iFun Screen Recoder es el mejor grabador para hacer partidas o guías de juegos y compartirlos en Youtube.</p>
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
					<ul><li><i class="descIcon remove"></i>Eliminar Marca de Agua Predeterminada</li></ul>
					<ul><li><i class="descIcon seal"></i>Añadir Marca de Agua Personal</li></ul>
					<ul><li><i class="descIcon date"></i>Crear Tareas de Grabación Programadas</li></ul>
					<ul><li><i class="descIcon audio"></i>Extraer el Audio y Guardarlo Individualmente</li></ul>
					<ul><li><i class="descIcon game"></i>Grabación más fluida del juego con optimización de hasta un <span>30%</span> más FPS*<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Grabación sin retrasos con aceleración de hardware hasta un <span>50%</span> más rápida*<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Alta calidad de video*<i class="tableIcon up"></i> <p style="font-size: 12px;">(hasta <span>30%</span>más alta definición)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Actualización Automática</li></ul>
					<ul><li><i class="descIcon spt24"></i>Soporte Técnico Gratis 24/7</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">Versión FREE</div>
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
					<div class="topTitle">Versión PRO</div>
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
							<label for="option3">1 Año</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2">
							<label for="option4">De Por Vida</label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=es-isr11pc2499&ref=es_isr11pc2499purchase2103<?= $refStr; ?>&refs=es_purchase_isr" style="display: block;">Comprar Ahora-24,99€</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=es-isr1lf1pc4499&ref=es_isr1lf1pc4499purchase2103<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora-44,99€</a>
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
				<p>Al ser confiado y premiado por estos medios de comunicación de clase mundial durante más de una década, IObit es tu mejor opción. </p>
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
							Bueno, hasta ahora todo bien. iFun Screen Recorder es realmente una herramienta completa y fácil de usar. No sabía cómo grabar la pantalla en Windows, pero con este software es fácil. Puedo tomar capturas de pantalla mientras grabo en HD y agregar mi propia marca de agua en el video. Luego lo subo a mi Instagram y capto una atención masiva. Este potente grabador de pantalla me ha ayudado a impulsar mi negocio.
							<p>—Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Encontré este grabador de pantalla gratuito y me volví fan por sus sencillas funciones de edición. Me gusta grabar el proceso de operación para ayudar a las personas a resolver problemas del ordenador, y este software de grabación me permite grabar con audio para poder subir directamente el video editado a YouTube. ¡Combina grabación y edición, lo cual es muy conveniente para youtubers como yo que quieren compartir videos tutoriales!
							<p>—Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							Como secretaria, necesito usar mucho software de grabación de pantalla. Fue difícil encontrar un grabador de pantalla gratis ideal para mí, pero iFun Screen Recorder resulta ser una herramienta perfecta para la grabación de videoconferencias y me ayuda mucho. Puedo grabar la pantalla HD con él y convertir el video en diferentes formatos. ¡Lo recomiendo ampliamente!
							<p>—Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							¡Hola! Este fantástico grabador de pantalla me sorprende. Puedo grabar todos estos momentos preciosos y maravillosos con iFun Screen Recorder, especialmente para videos en vivo. Los videos grabados son de muy alta calidad. Puedo guardarlos y compartirlos con mis amigos. Al principio, no estaba seguro sobre el software, pero los resultados son asombrosos. ¡Es increíble!
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
					<li class="active">1 Año / 1 PC <span>-50%</span></li>
					<li class="">De Por Vida / 1 PC <span>-40%</span></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd style="display: block;">
						<div class="now">
							<h3>24<span>,</span><i>99</i></h3>
							<span>€</span>
						</div>
						<div class="old">
							<h3>49,99</h3>
							<span>€</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=es-isr11pc2499&ref=es_isr11pc2499purchase2103<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora</a>
					</dd>
					<dd>
						<div class="now">
							<h3>44<span>,</span><i>99</i></h3>
							<span>€</span>
						</div>
						<div class="old">
							<h3>79,99</h3>
							<span>€</span>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1lf1pcpurchase2103-es')" href="https://www.iobit.com/buy.php?product=es-isr1lf1pc4499&ref=es_isr1lf1pc4499purchase2103<?= $refStr; ?>&refs=es_purchase_isr">Comprar Ahora</a>
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