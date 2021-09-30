<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = '2021aprsale_p' . $date;
	$c_name_t = '2021aprsale_t' . $date;
	if ($_COOKIE[$c_name] === null) {
		$totalNum = $packsNum = rand(155, 165);
		setcookie($c_name, $packsNum, time() + 3600 * 24);
		setcookie($c_name_t, $totalNum, time() + 3600 * 24);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			$packsNum = 3;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		}
	}
	echo json_encode(array('packsNum' => $packsNum));
	exit();
}

$refStr = '';

if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
	$ver=$matches[1][0].$matches[1][1];
	$refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>86% de descuento y regalos gratis para Driver Booster PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>OFERTA ESPECIAL DEL ANIVERSARIO 16</h1>
	<p>¡Descuento hasta 86% y los regalos gratis!</p>
    <div class="banner_box">
		<div class="banner_cont1">
			<img src="<?php echo $pResUrl; ?>images/banner-box1.png">
			<div class="banner_cont1_text">
				<h5>Driver Booster 8 PRO</h5>
				<div class="banner_showdow banner_showdow1">
					<span>1 año / 3 PCs</span>
					<p>19,99<em>€</em> <del>74,85€</del></p>
				</div>
				<a href="https://www.iobit.com/buy.php?product=es-db83pc1999&ref=es_db83pc1999purchase2103<?= $refStr; ?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db83pcpurchase2103-es')" class="buybtn sigle_btn">Comprar Ahora</a>
			</div>
		</div>
		<div class="banner_cont2">
			<div class="banner_cont2_price">
				<img src="<?php echo $pResUrl; ?>images/banner-box2.png">
				<div class="banner_cont2_text">
					<h4>Driver Booster 8 PRO</h4>
					<div class="banner_showdow banner_showdow2">
						<span>1 año / 3 PCs +Regalos Gratis</span>
						<ul>
							<li>+Protected Folder</li>
							<li>+Smart Defrag 7 PRO</li>
						</ul>
						<p>19,99<em>€</em> <del>144,79€</del></p>
					</div>
				</div>
			</div>
			<div class="banner_price">
				<p>Solo quedan <span>36</span> paquetes <img src="<?php echo $pResUrl; ?>images/arrow1.png"></p> 
				<a href="https://www.iobit.com/buy.php?product=es-db83pcpfsd1999&ref=es_db83pcpfsd1999purchase2103<?= $refStr; ?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db83pcpfsdpurchase2103-es')" class="buybtn total_btn">Comprar Ahora</a>
			</div>
		</div>
    </div>
  </div>
</div>
<!-- banner end -->
<div class="drive_booster">
	<div class="wrapper drive_booscnt">
		<h2>¿Por qué Driver Booster 8 PRO?</h2>
		<div class="drive_boosct">
			<div class="drive_boosimg">
				<div class="drive_boost"></div>
			</div>
			<div class="drive_descrp">
				<div class="drive_despoint drive_despoint1">
					<h5>Mejor rendimiento de juego</h5>
					<p>Actualiza a los controladores y componentes de juego más recientes para un inicio de Juego más rápido, las funciones más nuevas y una experiencia de juego más fluida.</p>
				</div>
				<div class="drive_despoint drive_despoint2">
					<h5>Actualización de controlador automática y segura</h5>
					<p>Actualiza automáticamente a los controladores más estables cuando tu sistema esté inactivo. Los controladores anteriores se respaldan automáticamente para garantizar la seguridad.</p>
				</div>
				<div class="drive_despoint drive_despoint3">
					<h5>4.500.000+ controladores compatibles</h5>
					<p>Detecta y actualiza controladores más raros, no coincidentes y desactualizados con acceso a la base de datos completa. El motor de escaneo optimizado y la estructura de la base de datos te brindan la actualización de controladores más rápida y precisa.</p>
				</div>
			</div>
		</div>
		<div class="clear"></div>
	</div>
</div>

<div class="giveaway">
	<div class="wrapper">
		<h2>Aquí Te Llevas 2 Regalos Gratis Con La Oferta Especial</h2>
		<div class="giveaway_cont">
			<div class="giveaway_pro giveaway_pf">
				<img src="<?php echo $pResUrl; ?>images/pfbox.png">
				<h5>Protected Folder ( <span>0€</span> Ahora )</h5>
				<ul>
					<li>Protege tus archivos de ataques maliciosos</li>
					<li>Una sola contraseña para todos los archivos</li>
					<li>Protege tu privacidad de otros</li>
				</ul>
			</div>
			<div class="giveaway_pro giveaway_sdp">
				<img src="<?php echo $pResUrl; ?>images/sdpbox.png">
				<h5>Smart Defrag 7 PRO ( <span>0€</span> Ahora )</h5>
				<ul>
					<li>Mayor velocidad de desfragmentación</li>
					<li>Archivos de selección de desfragmentación automática</li>
					<li>Encendido del PC más rápido</li>
				</ul>
			</div>
		</div>
	</div>
</div>

<!-- comparison-table start -->

<div class="comparison-area">
	<div class="wrapper">
		<h2>La Comparación Entre Free Versión Y Pro Versión</h2>
		<div class="comparison-table" id="compare">
		  <table border="0" cellspacing="0" cellpadding="0" width="100%">
		    <thead>
		    <tr>
		      <th class="free-version">Free Versión</th>
		      <th class="des-text"></th>
		      <th class="pro-version">
				  <div class="pro-head">
					  <span>Pro Versión</span>
					  <h5>Regalos Gratis</h5>
				  </div>
			  </th>
		    </tr>
		    </thead>
		    <tbody>
		    <tr>
		      <td class="free-version icon-right"></td>
		      <td class="des-text">Descarga y actualiza los controladores obsoletos con un solo clic</td>
		      <td class="pro-version icon-right"></td>
		    </tr>
		    <tr>
		      <td class="free-version icon-wrong"></td>
		      <td class="des-text">Desbloquea límite de velocidad de actualización de controlador</td>
		      <td class="pro-version icon-right"></td>
		    </tr>
		    <tr>
		      <td class="free-version icon-wrong"></td>
		      <td class="des-text">Prioridad para actualizar más controladores obsoletos y raros</td>
		      <td class="pro-version icon-right"></td>
		    </tr>
		    <tr>
		      <td class="free-version icon-wrong"></td>
		      <td class="des-text">Reduce bloqueos y fallos del sistema para mejor rendimiento con mayor base de datos</td>
		      <td class="pro-version icon-right"></td>
		    </tr>
		    <tr>
		      <td class="free-version icon-wrong"></td>
		      <td class="des-text">Descarga e instala automáticamente controladores en el tiempo de inactividad del sistema</td>
		      <td class="pro-version icon-right"></td>
		    </tr>
			<tr>
			  <td class="free-version icon-wrong"></td>
			  <td class="des-text">Hace copia de seguridad de todos los controladores automáticamente para restauración segura</td>
			  <td class="pro-version icon-right"></td>
			</tr>
			<tr>
			  <td class="free-version icon-wrong"></td>
			  <td class="des-text">Prioridad de actualizar componentes de juego para mejor experiencia de juego</td>
			  <td class="pro-version icon-right"></td>
			</tr>
			<tr>
			  <td class="free-version icon-wrong"></td>
			  <td class="des-text">Detecta y repara efectivamente errores de dispositivos</td>
			  <td class="pro-version icon-right"></td>
			</tr>
		    <tr>
		      <td class="free-version icon-wrong"></td>
		      <td class="des-text">Actualización automática a la última versión</td>
		      <td class="pro-version icon-right"></td>
		    </tr>
			<tr>
			  <td class="free-version icon-wrong"></td>
			  <td class="des-text">24/7 soporte técnico gratuito para demanda</td>
			  <td class="pro-version icon-right"></td>
			</tr>
		    </tbody>
		    <tfoot>
		      <tr>
		        <th class="free-version">&nbsp;</th>
		        <th class="des-text">&nbsp;</th>
		        <th class="pro-version">
					<div class="pro-foot">
						<a href="https://www.iobit.com/buy.php?product=es-db83pcpfsd1999&ref=es_db83pcpfsd1999purchase2103<?= $refStr; ?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db83pcpfsdpurchase2103-es')" class="buybtn compare-buybtn">Comprar Ahora</a>
					</div>
				</th>
		      </tr>
		    </tfoot>
		  </table>
		</div>
	</div>
</div>
<!-- comparison-table end -->

<div class="reviews">
  <div class="wrapper">
     <div class="reviews-area clearfix">
		 <h2>Premios a Nivel Mundial</h2>
		   <p>Los usuarios de todo el mundo comparten sus experiencias.</p>
		   <div class="content">
		   <div class="media">
		     <img src="<?php echo $pResUrl; ?>images/partner-icon.png" alt="">
		   </div>
		   <div class="reviews-box">
		     <ul class="message">
		       <li class="active">"Con Driver Booster puedo saber fácilmente qué dispositivos están desactualizados y puedo actualizarlos instantáneamente. Además, me ayuda a corregir el error de sonido, error de red, error de dispositivo, etc. No lo creía antes de utilizarlo, pero después de usarlo realmente me encanta ... Mi PC es más rápida, más segura y más nueva que hace 8 meses atrás ... así que gracias IObit."</li>
		       <li>"Driver Booster es una aplicación increíble. Alguien que tiene muchas aplicaciones y unidades de disco ya que no tiene tiempo para actualizarlas manualmente, recomiendo Driver Booster, que ayudará a actualizar el controlador de forma rápida y sencilla."</li>
		       <li>"Este es uno de los mejores programas de actualización de drivers. Microsoft incluso me ha desviado al sugerir actualizaciones que no funcionarían con mi ordenador. Este programa sabía qué actualizaciones necesitaba sin ningún conflicto. Funcionó perfectamente. Fácil de usar, informativo e intuitivo. Este permanecerá en mi caja de herramientas para siempre... ¡Buen trabajo!"</li>
		       <li> "IObit ofrece muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."</li>
		     </ul>
		     <ul class="img-box">
		       <li class="active">
		         <div><img src="<?php echo $pResUrl; ?>images/user-img1.png" alt="Myo Thuya"></div>
		         <p>Myo Thuya</p>
		       </li>
		       <li>
		         <div><img src="<?php echo $pResUrl; ?>images/user-img2.png" alt="Adam Backlund"></div>
		         <p>Adam Backlund</p>
		       </li>
		       <li>
		         <div><img src="<?php echo $pResUrl; ?>images/user-img3.png" alt="Wayne Bowler"></div>
		         <p>Wayne Bowler</p>
		       </li>
		       <li>
		         <div><img src="<?php echo $pResUrl; ?>images/user-img4.png" alt="PC Magazine"></div>
		         <p>PC Magazine</p>
		       </li>
		     </ul>
		   </div>
		 </div>
	 </div>
	 <div class="service">
	   <div class="wrapper clearfix">
		   <p>Estás protegido por nuestra 100% garantía de reembolso en los primeros 60 días</p>
			<div class="service-list">
				<dl>
				  <dt><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dt>
				  <dd><h3>FORMAS DE PAGO</h3></dd>
				</dl>
				<dl>
				  <dt><img src="<?php echo $pResUrl; ?>images/dias.png" alt=""></dt>
				  <dd><h3>GARANTÍA DE REEMBOLSO</h3></dd>
				</dl>
				<dl>
				  <dt><img src="<?php echo $pResUrl; ?>images/verifled.png" alt=""></dt>
				  <dd><h3>PAGO SEGURO</h3></dd>
				</dl>
			</div>
	   </div>
	 </div>
  </div>
</div>

<div class="bottom-buy">
	<div class="bottom-buy-cont">
		<div class="left-img"></div>
		<div class="bottom-shadow">
			<h3>Driver Booster 8 Pro</h3>
			<em>1 año / 3 PCs + Regalos Gratis</em>
			<p>Solo quedan <span>36</span> paquetes</p>
		</div>
		<div class="bottom-price">
			<p>19,99<em>€</em><del>144,79€</del></p>
			<a href="https://www.iobit.com/buy.php?product=es-db83pcpfsd1999&ref=es_db83pcpfsd1999purchase2103<?= $refStr; ?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db83pcpfsdpurchase2103-es')" class="buybtn bottom-buybtn">Comprar Ahora</a>
		</div>
		<div class="right-img"></div>
	</div>
</div>


<!--  footer start-->
<div class="footer">
  
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
</div>
<!-- footer end -->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>