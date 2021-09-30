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
	$c_name = 'esisuofficial_p' . $date;
	$c_name_t='esisuofficial_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(68,78);
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

$viewNum=rand(115,125);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Paga 0€ y reserva el nuevo IObit Software Updater 3 PRO </title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/es/index.php" target="_blank"></a>
			<div class="right-message">
				<h1>Bienvenido a participar en nuestra  <strong>Preventa </strong></h1>
					<div class="number">
						Date prisa, solo quedan 
						<div id="topNum" class="giftNum">
              <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>
		          <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>

            </div>
            , y hay <strong class="viewNum"><?php echo $viewNum;?></strong> viendo la oferta ahora 
					</div>
					<p class="price">
						<span> <strong>0€</strong><sup>*</sup></span>
						<a href="https://www.iobit.com/buy.php?product=es-isu3preorder&ref=es_isu3preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-es'); " class="buybtn">Resérvalo ahora</a>
					</p>
				</div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>El actualizador de software que estabas buscando</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
				<dd>
					<strong>Amplia base de datos</strong>
					<p>Compatible con la actualización de cientos <br> de programas, incluyendo los más usados.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
				<dd>
					<strong>Actualización dentro del programa</strong>
					<p>Actualiza fácilmente los programas obsoletos <br> dentro de IObit Software Updater.  </p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
				<dd>
					<strong>Actualización automática</strong>
					<p>Descarga e instala las actualizaciones para programas <br> automáticamente en un tiempo programado.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
				<dd>
					<strong>Manténte seguro</strong>
					<p>Actualiza programas para reparar las vulnerabilidades <br> de seguridad que pueden usar los hackers. </p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
				<dd>
					<strong>Actualización limpia</strong>
					<p>Sin bundleware, barras de herramientas o <br> instaladores acoplados.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
				<dd>
					<strong>Recomendación de programas</strong>
					<p>La mayoría de los programas más populares pueden ser rápidamente  descargados sin tener que ir a la página web del desarrollador. </p>
				</dd>
			</dl>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Te proporciona la mejor experiencia de usuario</h2>
			<ul class="message-list">
				<li class="list01 active"><i></i> <span> Elimina automáticamente los instaladores</span></li>
				<li class="list02"><i></i> <span>Crea puntos de restauración del sistema automáticament</span></li>
				<li class="list03"><i></i> Ignora la opción de actualización</li>
				<li class="list04"><i></i> <span>Haz tu propia lista de actualización automática</span></li>
				<li class="list05"><i></i> Sin anuncios </li>
			</ul>
			<div class="img-list">
				<div class="img-box">
					<ul class="box">
						<li data-num="0"><img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt=""/></li>
						<li data-num="1"><img src="<?php echo getStaticUrl('images/feature-list02.png')?>" alt=""/></li>
						<li data-num="2"><img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt=""/></li>
						<li data-num="3"><img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt=""/></li>
						<li data-num="4"><img src="<?php echo getStaticUrl('images/feature-list05.png')?>" alt=""/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
		<h2>Comentarios:</h2>
		<div class="review-box">
			<a href="javascript::" class="prev"></a>
			<div class="content">
				<div class="roll">
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""/></dt>
							<dd>
								Comentarios mediáticos
								<strong>softpedia</strong>
							</dd>
						</dl>
						<p>IObit Software Updater ha sido diseñado para simplificar la tarea de mantener los programas y aplicaciones de los ordenadores actualizados. Busca nuevas versiones y las instala automáticamente sin molestar al usuario. Es más, puede descargar e instalar las aplicaciones más populares para distintos propósitos.</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Comentarios del usuario
								<strong>Nicolae Mocioc</strong>
							</dd>
						</dl>
						<p>He instalado IObit Software Updater gratuitamente gracias a un amigo y estoy muy contento con su velocidad y simplicidad, es perfecto para alguien que no sabe mucho de ordenadores como yo, gracias. Voy a comprar una licencia de IObit porque me apetece ayudarles y felicitarles por su trabajo. Gracias de nuevo!!</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Comentarios del usuario
								<strong>Joshua Irving</strong>
							</dd>
						</dl>
						<p>Me encantan las actualizaciones automáticas. Son rápidas y muy útiles y además crean un punto de restauración por si algo va mal en la instalación. También me encanta que el programa descargue las actualizaciones directamente desde las webs originales sin que tenga que ir yo uno a uno. ¡Creo que esta es una de vuestras mejores ideas!</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Comentarios del usuario
								<strong>Nico Bremmer</strong>
							</dd>
						</dl>
						<p>Es un programa de actualización genial. Muy fácil de usar y una interfaz muy simple. Funciona muy bien y realmente rápido. También me gusta el diseño, es muy bonito y moderno y puedes ver claramente la antigua y la nueva versión del programa que vas a actualizar. Además te da consejos para nuevos programas.</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- bottom start -->
	<div class="awards">
		<h2>Premios a Nivel Mundial</h2>
		<p>Contamos con la confianza de los medios más importantes a nivel mundial, ahora ya sabes con certeza que este es el programa que necesitas.</p>
		<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
	</div>
	<div class="bottom">
		<div class="wrapper">
			<p class="annotation">
				Nota: <br> * Al finalizer los 30 días de periódo de prueba gratuito, se te cargarán 12,99€ automáticamente a tu cuenta de PayPal o tarjeta de crédito. Este 56% de descuento sobre el precio original de 29,99€ es solo para las preventas. 
			</p>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer nomal">
		<div class="wrapper clearfix">
			<img src="<?php echo getStaticUrl('images/fl-isu-box.png')?>" class="img-box" alt=""/>
			<div class="number">
				 Date prisa, solo quedan
				<div class="giftNum">
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>

        </div>
        , y hay <strong class="viewNum"><?php echo $viewNum;?></strong> viendo la oferta ahora 
			</div>
			<p class="price">
				<span> <strong>0€</strong><sup>*</sup></span>
				<a href="https://www.iobit.com/buy.php?product=es-isu3preorder&ref=es_isu3preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3preorder-es'); " class="buybtn">Resérvalo ahora</a>
			</p>
		</div>
	</div>
	<!-- floatlayer end -->
	<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>