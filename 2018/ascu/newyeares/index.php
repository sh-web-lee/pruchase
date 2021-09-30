<?php  
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './'; 
		$pRootUrl = '../../../'; 
	}
	include $pRootUrl.'include/common.inc.php';

 function microtime_float(){
	 list($usec, $sec) = explode(' ', microtime());
	 return ((float)$usec + (float)$sec);
 }
 $buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;
 $buyNum = number_format($buyNum);

  $packsNum = ceil(microtime_float()*2000/20000);
$packsCount=88;
  $packsNum = $packsCount-($packsNum%$packsCount);
  if ($_GET['action'] == 'getPacks'){
      echo $packsNum;
  exit;
  }
$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
		'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf'))){
	$refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>80% de descuento y regalos gratis para ASCU PRO – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
	function decreasingPacks(){
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),
      success: function(packs){
        $('#packs').html(packs);
        setTimeout('decreasingPacks()', 10000);
      }
    });
  }
  setTimeout('decreasingPacks()', 10000);
	</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
	<div class="wrapper">
		<a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
		<h1>VENTA RELÁMPAGO</h1>
		<h2>Esta mejor oferta no te la pierdas</h2>
		<div class="date">
			<p><span>HORAS</span> <span>MIN</span> <span>SEG</span> <span>MS</span></p>
			<ul>
				<li>09</li>
				<li>09</li>
				<li>09</li>
				<li class="last">09</li>
			</ul>
		</div>
		<div class="content wrapper">
			<div class="left-img">
				 <img src="<?php echo $pResUrl; ?>images/ascu-box.png" alt="">
				 <p>Lleváte 3, paga sólo 1</p>
			</div>
			<div class="right-message">
				<h3>Advanced SystemCare Ultimate 11 </h3>
				<h4><img src="<?php echo $pResUrl; ?>images/gift.png" alt=""> Regalo gratis: </h4>
				<h5>
					<span><strong>Protected Folder</strong> <b>0€ </b> <del>39,95€ </del></span>
					<span><strong> Smart Defrag 5 PRO</strong> <b>0€ </b> <del>29,99€ </del></span>
				</h5>
				<dl>
					<dt><strong>22,95€</strong> <del>119,93€</del></dt>
					<dd><a href="https://www.iobit.com/buy.php?product=es-ascu113pcsdpf2295&ref=es_ascu113pcpfsdpurchase1801<?php echo $refStr;?>&refs=es_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1801-es')" class="buybtn">Comprar ahora</a></dd>
					<dd><img src="<?php echo $pResUrl; ?>images/people.png" alt="">  Más de <?php echo $buyNum; ?> personas ya han comprado</dd>
				</dl>
				<p class="payment">
					<img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
				</p>
			</div>
		</div>
	</div>
</div>
<div class="payment-message clearfix">
	<div class="wrapper">
		<dl>
			<dt>Garandía de reembolso</dt>
			<dd><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dd>
			<dd>Si no está satisfecho en los primeros 60 días, le devolveremos su dinero</dd>
		</dl>
		<dl>
			<dt>Pago seguro</dt>
			<dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
			<dd>100% pago seguro para su pedido</dd>
		</dl>
		<dl>
			<dt>Servicio al cliente</dt>
			<dd><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dd>
			<dd>24/7 Soporte Técnico gratis</dd>
		</dl>
	</div>
</div>
<div class="intro wrapper">
	<h2>¡Mejor protección contra virus, spyware y otras amenazas para tu PC!</h2>
	<img src="<?php echo $pResUrl; ?>images/ascu-message.png" alt="" class="img-box">
	<dl class="stand-list list01">
		<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
		<dd>Monitoriza y protege tu PC en tiempo real con Módulo de Protección</dd>
	</dl>
	<dl class="list list02">
		<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
		<dd>Protege PC contra amenazas y ataques de virus</dd>
	</dl>
	<dl class="list list03">
		<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
		<dd>PC más limpio y hasta 300% más <br> rápido por limpiar y acelerar con un clic.*</dd>
	</dl>
	<dl class="stand-list list04">
		<dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
		<dd>Protege navegación contra anuncios e intrusos y limpia rastro de privacidad</dd>
	</dl>
	<p><a href="javascript:">Más razón para elegir ASCU>></a></p>
</div>
<div class="gift-message">
	<div class="wrapper">
		<h2>¡Mejores regalos para ti mismo!</h2>
		<dl>
			<dt>
				<img src="<?php echo $pResUrl; ?>images/pf-box.png" alt="">
				<strong>Protected Folder (1 PC, 1 año )</strong> <b>0€</b> <del>39,95€</del>
			</dt>
			<dd>Protege tus archivos importantes y personales</dd>
			<dd>No hay preocupaciones de robo de datos y fugas de privacidad</dd>
		</dl>
		<dl>
			<dt>
				<img src="<?php echo $pResUrl; ?>images/sd-box.png" alt="">
				<strong>Smart Defrag 5 PRO (1 PC, 1 año )</strong> <b>0€</b> <del>29,99€</del>
			</dt>
			<dd>Máxima velocidad de acceso a archivos</dd>
			<dd>Desfragmentación de disco segura y estable</dd>
		</dl>
	</div>
</div>
<div class="awards wrapper">
	<h2>Recomendado y premiado por estos Medios</h2>
	<img src="<?php echo $pResUrl; ?>images/awards.jpg" alt="">
</div>
<div class="review wrapper">
  <div class="content">
    <dl class="active">
      <dt><h3>Reseña de los Medios  </h3></dt>
      <dd><h4>“Advanced SystemCare Ultimate es una completísima solución todo en uno muy recomendable.”</h4></dd>
      <dd>“Advanced SystemCare Ultimate es una potente suite de optimización para Windows que con su nueva actualización viene cargada de nuevas e interesantes herramientas.”</dd>
    </dl>
    <dl>
      <dt><h3>Comentarios de usuarios</h3></dt>
      <dd>
        <h4>"¡Advanced SystemCare Ultimate es el asistente inteligente. Grande victoria!"</h4>
      </dd>
      <dd>“El tiempo pasado tuve frecuentemente un problema de desordenar mi ordenador. Después de obtener mi código de Advanced Systemcare Ultimate, este caso nunca ocurrió. En este software incluido función de antivirus, ya no necesita segundo producto. Advanced SystemCare Ultimate es el asistente inteligente. Mi ordenador está ejecutando más suave y más rápido como un nuevo. A diferencia de otros productos, no ha habido conflictos constantes."</dd>
    </dl>
    <dl>
      <dt><h3>Comentarios de usuarios</h3></dt>
      <dd>
        <h4>"Recomendé advanced systemcare ultimate para optimización de su antivirus o del sistema."</h4>
      </dd>
      <dd>“En la versión obsoleta de advanced systemcare ultimate, no tuve problemas en casi todo, tales como sistema, malware, etc. Ahora, se ha actualizado y más funciones de advanced systemcare ultimate aceleran mi ordenador portátil ejecutando 5 veces más rápido que antes. También me gusta mucho la piel nueva. Cuando arreglo otros ordenadores, recomendaré advanced systemcare ultimate para optimización de su antivirus o del sistema."</dd>
    </dl>
    <dl>
      <dt><h3>Comentarios de usuarios</h3></dt>
      <dd>
        <h4>"Uno de los programas más simples pero más efectivos que he encontrado para mantener mis tres computadores sanos."</h4>
      </dd>
      <dd>"He utilizado varias versiones de Advanced SystemCare durante algunos años. Cuando encontré la función de Advanced SystemCare Ultimate yo supe que lo necesitaba. No me ha decepcionado. Uno de los programas más simples pero más efectivos que he encontrado para mantener mis tres computadores sanos."</dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li class="active">
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/softonic.png" alt="softonic"></div>
      <p>Softonic</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett">
      </div>
      <p>Rod Garnett</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"></div>
      <p>Dareen Lim</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="Russell Peck">
      </div>
      <p>Russell Peck</p>
    </li>
  </ul>
</div>
<!-- comparison start -->
<div class="comparison wrapper">
	<h4>¿Por qué elegir Advanced SystemCare Ultimate 11?</h4>
	<h5><span>Mejor protección y no retraso de rendimiento.</span> Ver comparación abajo</h5>
	<div class="ctable">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<thead>
				<tr>
					<th class="text"></th>
					<th class="blue">
						<p><span>Advanced SystemCare</span> Ultimate</p>
					</th>
					<th>AVG<span>Anti-virus</span></th>
					<th>Norton Security<span>Deluxe</span></th>
					<th>Avast! Pro<span>Antivirus</span></th>
					<th>Microsoft<span>Security Essentials</span></th>
					<th>McAfee® AntiVirus</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td class="title first">Tesa de detección</td>
					<td class="gray">Muy alto</td>
					<td>Normal</td>
					<td>Alto</td>
					<td>Normal</td>
					<td>Alto</td>
					<td>Alto</td>
				</tr>
				<tr>
					<td class="title">Retraso de rendimiento</td>
					<td class="gray">No</td>
					<td>Sí</td>
					<td>Sí</td>
					<td>Sí</td>
					<td>Sí</td>
					<td>Sí</td>
				</tr>
				<tr>
					<td class="title">Limpieza y optimización<br /> superior de PC</td>
					<td class="gray"><i class="tb-icons red">√</i></td>
					<td><i class="tb-icons">×</i></td>
					<td><i class="tb-icons">×</i></td>
					<td><i class="tb-icons">×</i></td>
					<td><i class="tb-icons">×</i></td>
					<td><i class="tb-icons">×</i></td>
				</tr>
				<tr>
					<td class="title">Más de 20 herramientas para rendimiento de PC</td>
					<td class="gray"><i class="tb-icons red">√</i></td>
					<td><i class="tb-icons">×</i></td>
					<td><i class="tb-icons">×</i></td>
					<td><i class="tb-icons">×</i></td>
					<td><i class="tb-icons">×</i></td>
					<td><i class="tb-icons">×</i></td>
				</tr>
			</tbody>
		</table>
	</div>
	<dl class="comlist">
		<dt>
			<i class="tb-icons">√</i>
			Inigualable tasa de detección y protección máxima
		</dt>
		<dd>
			Un clic para limpiar los virus ocultos y difíciles, troyanos, gusanos, spyware, adware y diversos malwares. Advanced SystemCare Ultimate 10 también proporciona una protección proactiva, siempre-online, automática y contra todo tipo de amenazas de seguridad de Internet, con actualización rápida de base de datos de virus.
		</dd>
	</dl>
	<dl class="comlist">
		<dt>
			<i class="tb-icons">√</i>
			Disfrute de seguridad confiada sin ralentización del sistema
		</dt>
		<dd>
			Su sistema funciona a su velocidad máxima y sin ningún retraso de rendimiento, gracias a nuestra tecnología de líder industrial en seguridad de Internet.
		</dd>
	</dl>
	<dl class="comlist">
		<dt>
			<i class="tb-icons">√</i>
			Navegación segura, buscar, descargar y compartir con confianza
		</dt>
		<dd>
			Comportamiento de procesos de monitores tecnológicos de control proactivo de virus en tiempo real, escanea los archivos compartidos con correo electrónico y bloquea las amenazas posibles. Tasa de detección sin precedentes asegura un entorno más seguro cuando usa su PC.
		</dd>
	</dl>
	<dl class="comlist">
		<dt>
			<i class="tb-icons">√</i>
			Obtener un rendimiento optimizado altamente y disfrutar de la experiencia nueva de PC
		</dt>
		<dd>
			Ya han probado la gran capacidad de optimización de PC suelta a la potencia de su PC. Con la optimización en tiempo real y característica de ActiveBoost, los recursos del sistema se gestionan de forma inteligente para asegurar su PC super rápido.
		</dd>
	</dl>
</div>
<!-- comparison end -->
<div class="footer">
	<div class="wrapper">
		<dl>
			<dt>Nota:</dt>
			<dd>*Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
			<dd>*Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
		</dl>
		<p>Copyright 2005 - <?php echo date(Y)?> IObit. Todos los derechos reservados</p>
	</div>
</div>
<div class="floatlayer" id="floatlayer">
  <div class="wrapper">
  	<div class="left-message">
  		<h2>¡Ahorra  <span>80%</span> en ASCU11 y obtén regalos gratis! </h2>
  		<ul>
  			<li><span>09</span> h: </li>
  			<li><span>09</span> min:</li>
  			<li><span>09</span> s:</li>
  			<li><span>09</span> ms <sup>*</sup></li>
  		</ul>
  		<p> <img src="<?php echo $pResUrl; ?>images/fl-people.png" alt="">Más de <?php echo $buyNum; ?> personas ya han comprado</p>
  	</div>
  	<dl>
  		<dt><del>119,93€</del> &nbsp;  <strong>22,95€</strong> </dt>
  		<dd><a href="https://www.iobit.com/buy.php?product=es-ascu113pcsdpf2295&ref=es_ascu113pcpfsdpurchase1801<?php echo $refStr;?>&refs=es_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1801-es')" class="buybtn">Comprar ahora</a></dd>
  	</dl>
  </div>
</div>
<script src="<?php echo $pResUrl; ?>script/script.js"></script>
</body>
</html>