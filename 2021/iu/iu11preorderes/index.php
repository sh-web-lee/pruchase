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
	$c_name = 'esiujune_p' . $date;
	$c_name_t='esiujune_t' . $date;
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
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Paga 0€ para conseguir la última versión de IObit Uninstaller PRO</title>
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
				<a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
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
					<h1 data-name="default">Bienvenido a la preventa</h1>
					<h2 data-name="default">Consigue el mejor desinstalador por 0€</h2>
					<div class="number" data-name="default">
						<div id="reduce" class="reduceNum">
              <span class="fl">Sólo quedan </span>
							<div class="listbox"><span class="list"><b>5</b></span></div>
							<div class="listbox"><span class="list"><b>0</b></span></div>
						</div>
						<div class="bar">
							<span></span>
						</div>
					</div>
					<div class="price" data-name="default">
						<strong>0€ <sup>*</sup></strong>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=es-iu11preorder&ref=es_iu11preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_iu"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11predorder-es');">
              Resérvalo ahora
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
			<h2>Desinstala cualquier cosa que no quieras</h2>
			<dl class="first" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
          <h3>Plugins</h3>
          <p>
            Plugins Inútiles <br>
            Plugins Publicitarios <br>
            Plugins Maliciosos
          </p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
          <h3>Programas</h3>
          <p>
            Programas Inútiles <br>
            Programas Obstinados <br>
            Paquetes de Programas
          </p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>Aplicaciones de Windows</h3>
					<p>
            Aplicaciones Inútiles de Windows <br>
            Aplicaciones por Defecto de Windows
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
			<h2>Disfruta de la desinstalación potente</h2>
			 <div class="img-box" data-name="default">
			 	<div class="list01">
			 		<span class="button">Desinstalar</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Antivirus Software</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Desinstalando el software antivirus</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>Has Desinstalado con éxito <strong>0</strong> programa, aquí los detalles de su desinstalación:</p>
			 		<ul>
			 			<li>Entradas de registro eliminadas: <strong>0</strong></li>
			 			<li>Archivos borrados: <span><strong>0</strong>.<strong>0</strong></span>MB</li>
			 			<li>Tareas programadas eliminadas: <strong>0</strong></li>
			 			<li>Servicios del sistema eliminados: <strong>0</strong></li>
			 			<li>Ítems registrados eliminados: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			 </div>
			 <div class="message">
			 	<dl data-name="default" class="one">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Graba los cambios</h3>
			 			<p>Graba los cambios del sistema cuando se instala un nuevo programa para garantizar su completa desinstalación.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="two">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Desinstalación eficaz</h3>
			 			<p>1 clic para desinstalar programas no deseados, incluyendo antivirus y programas que son más difíciles de eliminar.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="three">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Limpieza de restos</h3>
			 			<p>Limpia los restos de programas desinstalados automáticamente, incluyo aquellos que se quedan en el PC después de la desinstalación.</p>
			 		</dd>
			 	</dl>
			 </div>
		</div>
	</div>
	<!-- feature end -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<h2>El Nuevo IObit Uninstaller 11 funciona mejor</h2>
			<dl data-name="default" class="one">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
		 		<dd>
		 			<!-- <h3>NUEVO Salud de Software</h3> -->
		 			<p><strong>NUEVA</strong> Salud de Software</p>
		 		</dd>
			</dl>
			<dl class="center" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
		 		<dd>
		 			<!-- <h3>1000+ Eliminar Programa Obstinado</h3> -->
		 			<p><strong>1000+</strong> Eliminar Programa Obstinado</p>
		 		</dd>
			</dl>
			<dl data-name="default" class="three">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
		 		<dd>
		 			<!-- <h3>50%↑Base de datos de Actualizador</h3> -->
		 			<p><strong>50%</strong>↑Base de datos de Actualizador</p>
		 		</dd>
			</dl>
		</div>
	</div>
	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Un desinstalador de confianza</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>50M+</h3>
					<p>Descargas</p>
				</dd>
			</dl>
			<dl class="center">
				<dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>4.5+</h3>
					<p>Opiniones de Usuarios</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>Recomendaciones de Medios</p>
				</dd>
			</dl>
			<div class="review-box">
        <div class="box">
          <h3>Comentario de usuario</h3>
          <p>"Llevo usando el desinstalador de IObit desde hace tiempo, me encanta, es muy completo, y ahora incluso está mejorando. Estoy muy contento y no podría estar sin él. Si nunca lo has usado te recomendó probarlo, siendo hoy 100% mejor que hace un año. Limpia toda la basura de registro de forma muy eficaz."</p>
        </div>
        <div class="box">
          <h3>Comentario de usuario</h3>
          <p>"Este programa me ha ahorrado mucho dinero. Antes de usarlo, mi ordenador era muy lento y no podía hacer nada. Ahora mi ordenador está limpio y gracias a este programa funciona mucho más rápido que antes. Muchas gracias IObit, os quiero."</p>
        </div>
				<div class="box active">
					<h3>Reseña de los Medios</h3>
					<p>"Si necesita una aplicación para que desinstale fácilmente aplicaciones limpiamente y completamente, IObit Uninstaller es la mejor opción. La utilidad, compatible con Windows 10, elimina fácilmente aplicaciones, incluyendo los archivos quedados frecuentemente cuando un programa es eliminado desde PC y barras de herramientas y plugins molestos de navegador. En resumen, si usa un PC de Windows, debería descargar IObit Uninstaller."</p>
				</div>
        <div class="box">
          <h3>Comentario de usuario</h3>
          <p>"He usado múltiples desinstaladores en el pasado, sin embargo, una vez que comencé a usar IOBit desde la versión 7.0, nunca volví a ninguna otra aplicación. Tiene una interfaz fácil de usar y hace el trabajo para el que está destinado con perfección. Te ayuda a limpiar el registro automáticamente, que de no hacerlo se acaba ahogando con todos los restos, manteniendo así la salud del PC. La capacidad de identificar Bundleware y eliminarlos es una gran característica presente en IOBit que no tiene rival."</p>
        </div>
        <div class="box">
          <h3>Comentario de usuario</h3>
          <p>"IObit Uninstaller encuentra complementos en mis navegadores que ni siquiera sabía que existían. La limpieza de los archivos residuales es muy buena; no deja ningún dato inútil en el software desinstalado. También me recuerda las actualizaciones disponibles para todos mis programas por lo que en general, el rendimiento de mi ordenador ha mejorado considerablemente. Es muy conveniente y fácil de usar, por lo que lo he recomendado a varios de mis amigos."</p>
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
			<h2>Premios y Galardones Reconocidos Mundialmente</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Nota:</dt>
				<dd>
          *Al finalizar el periodo de prueba de 30 días, tu tarjeta de crédito o cuenta PayPal serán cargadas 15,99€ de forma automática. Este 46% de descuento sobre el precio original de 29,99€ es solo un bonus para los pedidos por anticipado.
				</dd>
				<dd>
          *Si no estás satisfecho, puedes cancelar tu pedido dentro del plazo de 30 días sin tener que pagar ninguna cuota.
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
	  		<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
				IObit Uninstaller 11
	  	</div>
  		<div class="number fl">
        Sólo quedan
  			<div id="fReduce" class="reduceNum">
  				<div class="listbox"><span class="list"><b>5</b></span></div>
  				<div class="listbox"><span class="list"><b>0</b></span></div>
  			</div>
        de los 500 de hoy
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