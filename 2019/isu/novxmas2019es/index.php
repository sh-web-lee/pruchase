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
	$c_name = 'isunovxmas2020_p' . $date;
	$c_name_t='isunovxmas2020_t' . $date;
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].'-'.$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Oferta Especial para IObit Software Updater – IObit</title>
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
			<a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>OFERTA ESPECIAL DEL AÑO NUEVO</h1>
			<div class="img-box">
				<img src="<?php echo getStaticUrl('images/isu-box.png')?>" alt="IObit Software Update PRO"/>
<!--        <span class="snow01"></span>-->
<!--        <span class="snow02"></span>-->
			</div>
			<div class="right-message">
          <h2><span>2 Regalos Gratis</span> para los primeros 100 compradores</h2>
          <div class="progress">
            <p><strong class="viewNum"><?php echo $viewNum;?></strong> visitantes,  <span class="buyNum">51</span> solo quedan</p>
            <div class="bar">
              <span class="box"><span class="disappear"></span></span>
            </div>
          </div>
          <p class="price">
            <span>Sólo <strong><b>12</b>,99€</strong></span>
            <a href="https://www.iobit.com/buy.php?product=es-isu43pcsdpf1299&ref=es_isu3pcsdpf2104<?php echo $refStr;?>&refs=es_purchase_isu"
               onclick="ga('send', 'event', 'isubundlebuy', 'buy', 'isupurchase1912-es');"
               class="buybtn">
              Comprar ahora
            </a>
          </p>
          <ul class="list">
          	<li class="one">
          		Precio original <span>67,93€</span>
          	</li>
          	<li>Descuento <span>80% </span></li>
          	<li>Ahorra  <span>54,94€</span></li>
          </ul>
        </div>
<!--      <span class="cute cute01"></span>-->
<!--      <span class="cute cute02"></span>-->
<!--      <span class="cute cute03"></span>-->
<!--      <span class="cute cute04"></span>-->
<!--      <span class="cute cute05"></span>-->
<!--      <span class="cute cute06"></span>-->
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>¿Por qué escoger IObit Software Updater PRO?</h2>
			<img src="<?php echo getStaticUrl('images/intro-box.png')?>" class="img-box" alt="IObit Software Update PRO"/>
			<div class="left-message">
				<h3><i></i> <span>Mantén tus programas siempre actualizados</span></h3>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
					<dd><strong>Protección</strong></dd>
					<dd>Si actualizas tus programas obsoletos evitarás las brechas de seguridad a tiempo para que los hackers no puedan atacar tu PC.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
					<dd><strong>Mejora</strong></dd>
					<dd>Actualizando los programas obsoletos conseguirás nuevas funciones, un mejor rendimiento y más estabilidad.</dd>
				</dl>
			</div>

			<div class="right-message">
				<h3><i></i> <span>Consigue las actualizaciones de tus programas fácilmente</span></h3>
				<dl class="list01">
					<dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
					<dd><strong>Simple</strong> Tus programas se actualizan con un clic, descarga e instálalos sin abrir tu navegador web.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
					<dd><strong>Automático</strong> Establece actualizaciones automáticas para que más adelante cuando estén disponibles se descarguen y se instalen sin molestar.</dd>
				</dl>
				<dl>
					<dt><img src="<?php echo getStaticUrl('images/intro-icons05.png')?>" alt=""></dt>
					<dd><strong>Seguro</strong> Crea puntos de restauración automáticamente después de instalar una actualización.</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>IObit Software Updater 4 PRO lo hace todo por ti</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/isu-screen-two.png')?>" alt="IObit Software Update PRO"/>
					<span class="suspend01"></span>
					<span class="suspend02"></span>
					<span class="suspend03"></span>
				</div>
				<div class="right fr">
					<ul class="feature-list">
            <li><i class="all-icons">◎</i> Soporta más software con base de datos 150% mayor</li>
						<li><i class="all-icons">◎</i> Actualiza programas con un solo clic</li>
						<li><i class="all-icons">◎</i> Descarga e instala actualizaciones silenciosamente</li>
						<li><i class="all-icons">◎</i> Establece escaneos y actualizaciones automáticas</li>
						<li><i class="all-icons">◎</i> Excluye ciertos programas que no quieres que se actualicen</li>
            <li><i class="all-icons">◎</i> <span>Compatible con la descarga directa de varias herramientas para el trabajo desde casa</span></li>
            <li><i class="all-icons">◎</i> Opción para crear un punto de restauración antes de la instalación</li>
						<li><i class="all-icons">◎</i> <span>Opción para borrar automáticamente archivos de ejecución de instalación después de la instalación</span></li>
						<li><i class="all-icons">◎</i> Se han eliminado los anuncios que se muestran en la versión gratuita</li>
					</ul>
					 <p class="price">
            <span>Sólo <strong><b>12</b>,99€</strong> </span>
            <a href="https://www.iobit.com/buy.php?product=es-isu43pcsdpf1299&ref=es_isu3pcsdpf2104<?php echo $refStr;?>&refs=es_purchase_isu"
               onclick="ga('send', 'event', 'isubundlebuy', 'buy', 'isupurchase1912-es');"
               class="buybtn">
              Comprar ahora
            </a>
            <p><span>!Date prisa, ya sólo quedan<b class="buyNum">50</b>!</span></p>
          </p>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->

  <!-- gift-message start -->
	<div class="gift-message">
		<div class="wrapper">
			<h2>¿Qué beneficios extras puedes conseguir de estos regalos?</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""/></dt>
				<dd>
					<h3>Smart Defrag PRO</h3>
					<strong>0€</strong> <del>17,99€</del> 1 año / 1 PC
					<p>Maximiza el rendimiento de tu Disco Duro. <br>Optimización de tu PC.</p>
				</dd>
			</dl>
			<dl class="pf">
				<dt><img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/></dt>
				<dd>
					<h3>Protected Folder</h3>
					<strong>0€</strong> <del>19,99€</del> 1 año / 1 PC
					<p>No te preocupes más por posibles <br>robos de tus datos y archivos privados.</p>
				</dd>
			</dl>
		</div>
	</div>
  <!-- gift-message end -->

  <!-- review start -->
	<div class="review ">
		<div class="wrapper">
    <h2>Comentarios</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Reseña de los Medios</h2>
              <p>IObit Software Updater ha sido diseñado para simplificar la tarea de mantener los programas y aplicaciones de los ordenadores actualizados. Busca nuevas versiones y las instala automáticamente sin molestar al usuario. Es más, puede descargar e instalar las aplicaciones más populares para distintos propósitos. </p>
              <cite>softpedia</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nicolae Mocioc"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>He instalado IObit Software Updater gratuitamente gracias a un amigo y estoy muy contento con su velocidad y simplicidad, es perfecto para alguien que no sabe mucho de ordenadores como yo, gracias. Voy a comprar una licencia de IObit porque me apetece ayudarles y felicitarles por su trabajo. Gracias de nuevo!!</p>
              <cite>Nicolae Mocioc</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Joshua Irving"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>Me encantan las actualizaciones automáticas. Son rápidas y muy útiles y además crean un punto de restauración por si algo va mal en la instalación. También me encanta que el programa descargue las actualizaciones directamente desde las webs originales sin que tenga que ir yo uno a uno. ¡Creo que esta es una de vuestras mejores ideas!</p>
              <cite>Joshua Irving</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt="Nico Bremmer"></dt>
            <dd>
              <h2>Comentarios del usuario</h2>
              <p>Es un programa de actualización genial. Muy fácil de usar y una interfaz muy simple. Funciona muy bien y realmente rápido. También me gusta el diseño, es muy bonito y moderno y puedes ver claramente la antigua y la nueva versión del programa que vas a actualizar. Además te da consejos para nuevos programas. </p>
              <cite>Nico Bremmer</cite>
            </dd>
          </dl>                  
        </div>  
      </div>             
    </div>
  </div>
  <!-- review end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<div class="service clearfix">
				<dl>
					<dt>Recomendado y premiado por estos Medios</dt>
					<dd><img src="<?php echo getStaticUrl('images/medias.png')?>" alt=""/></dd>
				</dl>
				<dl class="right">
					<dt>Compatible con varios métodos de pago </dt>
					<dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
				</dl>
			</div>
			<dl class="annotation">
				<dt>Nota:</dt>
				<dd>
					*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		IObit Software Update PRO
<!--        <span class="snow01"></span>-->
<!--        <span class="snow02"></span>-->
	  	</div>
	  	<div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> visitantes, sólo quedan<strong class="buyNum">86</strong></p>
      </div>
       <p class="price">
          <span><strong><b>12</b>,99€</strong> <del>67,93€</del></span>
          <a href="https://www.iobit.com/buy.php?product=es-isu43pcsdpf1299&ref=es_isu3pcsdpf2104<?php echo $refStr;?>&refs=es_purchase_isu"
               onclick="ga('send', 'event', 'isubundlebuy', 'buy', 'isupurchase1912-es');"
             class="buybtn">
            Comprar ahora
          </a>
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