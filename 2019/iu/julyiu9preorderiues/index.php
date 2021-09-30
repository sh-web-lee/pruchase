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
		$totalNum=$packsNum=rand(49,58);
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
	$refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
	$ver=$matches[1][0].$matches[1][1];
	$refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Consigue el nuevo IObit Uninstaller PRO por 0€</title>
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
			<h1>Comienza la preventa mundial</h1>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<p>Desinstalación completa sin dejar rastro</p>
					<ul class="price clearfix">
						<li class="first">
							<strong><big>0</big>€<sup>*</sup></strong> <del>29,99€</del>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change">Sólo quedan <b class="giftNum">50</b></p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=es-iu9preorder&ref=es_iu9preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu-es');">
							  Resérvalo ya
							</a>
						</li>
					</ul> 
				</div>
			</div>
			<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro">
    <h2>¿Por qué actualizar a IObit Uninstaller 9 PRO?</h2>
    <!-- content -->
    <div class="content">
      <div class="wrapper">
        <ul class="clearfix">
          <li class="active">Desinstalación más potente</li>
          <li>Limpieza más completa</li>
        </ul>
        <div class="box">
          <div class="inlist">
            <div class="indetail first clearfix">
              <dl class="fl">
                <dt>
                  <h3>Tu edición actual</h3>
                  <h4>Desinstala</h4>
                </dt>
                <dd>
                 Programas, extensiones de navegador y aplicaciones de Windows.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>IObit Uninstaller 9 PRO</h3>
                  <h4>Desinstalación <i>Mejorado</i></h4>
                </dt>
                <dd>
                  Programas, extensiones de navegador y aplicaciones de Windows.
                </dd>
                <dd>
                  Los programas obstinados que no pueden ser desinstalados por los métodos convencionales.
                </dd>
                <dd>
                  Paquetes de programas y software gratuito que anuncian o roban datos de privacidad. <br>
                  <em class="space">Función única</em>
                </dd>
                <dd>
                  Plugins maliciosos y publicitarios que inyectan anuncios o enlaces maliciosos en las páginas que aparecen. <br>
                  <em class="space">Función única</em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
            <div class="indetail last clearfix">
              <dl class="fl">
                <dt>
                  <h3>Tu edición actual </h3>
                </dt>
                <dd>
                  <h4>Elimina</h4>
                  Los archivos y registros residuales después de la desinstalación.
                </dd>
              </dl>
              <dl class="fr">
                <dt>
                  <h3>IObit Uninstaller 9 PRO</h3>
                </dt>
                <dd>
                  <h4>Elimina <i>Mejorado </i></h4>
                  Los archivos y registros residuales después de la desinstalación
                </dd>
                <dd>
                  <h4>Detecta <i class="new">Nuevo</i></h4>
                  Los cambios en el sistema provocados por <br> un programa y los revierte al <br> desinstalar el programa. 
                </dd>
                <dd>
                  <h4>Escanea <i class="new">Nuevo</i></h4>
                  Los archivos residuales de programas desinstalados previamente sin usar IObit Uninstaller. <br>
                  <em class="space">Función única  </em>
                </dd>
              </dl>
              <img class="face" src="<?php echo getStaticUrl('images/face.png')?>" alt="">
            </div>
          </div>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next active">></span>
    </div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Más beneficios de IObit Uninstaller 9 PRO</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">√</i> <span>Elimina programas, extensiones de navegador y aplicaciones de Windows por lotes</span></li>
						<li><i class="all-icons">√</i> <span>Desinstala programas a través del ícono del escritorio, el propio programa o  desde el ícono de la bandeja del sistema </span> </li>
						<li><i class="all-icons">√</i> <span>Crea un punto de restauración automáticamente antes de desinstalar</span></li>
						<li><i class="all-icons">√</i> <span>Actualiza todos los programas obsoletos con un clic</span></li>
						<li><i class="all-icons">√</i> <span>Actualiza automáticamente cuando una nueva versión está disponible</span> </li>
						<li><i class="all-icons">√</i> <span>Soporte técnico Gratuito 24/7</span> </li>
					</ul>
				</div>
			</div>
      <div class="price clearfix">
        <h3>Reserva por 0€ para desbloquear todas las funciones PRO</h3>
        <div class="fl">
          <strong><big>0</big>€<sup>*</sup></strong> <del>29,99€</del>
          <p class="change">Sólo quedan <b class="giftNum">50</b></p>
        </div>
        <a class="buybtn fl"
           href="https://www.iobit.com/buy.php?product=es-iu9preorder&ref=es_iu9preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_iu"
					 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu-es');">
          Resérvalo ya 
        </a>
      </div>
		</div>
	</div>
	<!-- feature end -->

	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Comentarios</h2>
			<div class="box">
				<div class="relist clearfix">
					<dl class="on clearfix">
						<dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
						<dd>
							<h3>Reseña de los medios</h3>
							<p>
							  IObit Uninstaller es ligero y su interfaz es amigable. Usuarios pueden descargarlo rápidamente. Esta herramienta de desinstalación se pueden clasificar como el mejor programa de desinstalación y permite a los usuarios desinstalar al por mayor. Ofrecerá a los usuarios un "Escaneo potente" para operar más profundo y buscar restos de programas desinstalados. En general, este desinstalador cumple lo que promete: desinstalación completa. El rendimiento hace esta pequeña herramienta de desinstalación valer la pena conservar.
							</p>
							<h4>MakeUseOf</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
						<dd>
							<h3>Comentarios de los usuarios</h3>
							<p>
							  He usado los programas de IObit durante años muy satisfactoriamente y por ello sigo usando su software. En el pasado he trabajado arreglando portátiles y móviles (android) y siempre les he dejado instalados varios programas de IObit. Me acuerdo decirles a mis clientes que pulsarán el botón “C” de vez en cuando para corregir algunos problemas y acelerar sus portátiles, móviles y ordenadores. : )
							  Recomiendo el desinstalador especialmente, (la última versión) ya que es un programa de confianza que elimina por completo los programas más obstinados. Más importante aún, es capaz de eliminar código “escondido” que el programador tenía intención de dejar en tu sistema para que luego te lleguen anuncios de reinstalación. 
							  Todos los productos de IObit son de confianza y fáciles de usar y los recomiendo para cualquier ordenador.
							</p>
							<h4>Jeff A Watts</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
						<dd>
							<h3>Comentarios de los usuarios</h3>
							<p>
							  El desinstalador de IObit es excelente y tiene todo lo que uno puede esperar. Me encanta el hecho de que desinstala todos los restos y fragmentos. También incluye un actualizador de software que me recuerda cada vez que es necesario actualizar un programa, y el hecho de que también desinstala paquetes enteros de programas lo convierte en un ganador para mí. De hecho es básicamente todo lo que uno necesita para tener el ordenador a punto.
							</p>
							<h4>Lynette van Niekerk</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
						<dd>
							<h3>Comentarios de los usuarios</h3>
							<p>
							  El desinstalador de IObit es el mejor software para eliminar programas de tu ordenador, es rápido y muy efectivo y no tiene nada que ver con el desinstalador predeterminado de Windows. Verdaderamente elimina todos los restos de programas para que no dejen nada en tu ordenador. Lo llevo usando unos cuantos meses y ya no sé cómo vivir sin él así que se lo he recomendado a todos mis amigos y a mi familia. 
							  Gracias IObit, vuestro desinstalador es fantástico.
							</p>
							<h4>Paulo Martins</h4>
						</dd>
					</dl>
					<dl class="clearfix">
						<dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
						<dd>
							<h3>Comentarios de los usuarios</h3>
							<p>
							  IObit Uninstaller se pone mejor con cada actualización. Ya lo he utilizado más de 3 años. El programa se descarga rápidamente y posee una interfaz de usuario simple. Algunas funciones que utilizo regularmente son Desinstalación de lotes, Escaneo Profundo, Destruir Archivos y función de Recientemente Instalados que me permite tener un acceso rápido a los programas que he instalado recientemente o que no funcionan correctamente. Es fácil de controlar los elementos de inicio para arranque de PC más rápido.
							</p>
							<h4>Lovro Žužić</h4>
						</dd>
					</dl>
				</div>
			</div>
			<span class="prev"><</span>
			<span class="next">></span>
		</div>
	</div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>Premios a Nivel Mundial</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Nota:</dt>
				<dd>
					*.Al final de los 30 días gratuitos del periodo de prueba, se te cargarán 15,99€ automáticamente a tu cuenta de PayPal o tarjeta de crédito. Esto supone un 46% de descuento sobre el precio original de 29,99€, el cual sólo podrán obtener los usuarios que lo reserven por adelantado.
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
	  		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
	  	</div>
	  	<div class="price fr clearfix">
	  		<div class="one fl">
	  			<div id="fReduce" class="reduceNum">
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>5</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  			</div>
	  			<p class="change">¡<span class="viewNum"><?php echo $viewNum;?></span>personas están mirando, sólo quedan<b class="giftNum">50</b>!</p>
	  		</div>
	  		<div class="two fl"><strong><big>0</big>€<sup>*</sup></strong> <del>29,99€</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
	  			   href="https://www.iobit.com/buy.php?product=es-iu9preorder&ref=es_iu9preorderiu<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_iu"
						 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9predorderiu-es');">
	  			  Resérvalo ya
	  			</a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>