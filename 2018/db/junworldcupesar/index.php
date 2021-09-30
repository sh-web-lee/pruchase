<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) -67862032;
$buyNum = number_format($buyNum);

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34'))){
    $refStr='-'.$_GET['to'];
}else{
    $refStr='';
}
if(in_array($_GET['pop'],array('xr_db','x_db'))){
    $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Oferta especial de la Copa Mundial. 90% de descuento y regalo para Driver Booster PRO – IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Play:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!--header-->
<div class="header">
  <div class="wrapper">
    <a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
    <div class="db">
      <img src="<?php echo $pResUrl; ?>images/db-icon.png" alt="">
      Driver Booster 5 PRO
    </div>
  </div>
</div>
<!--banner-->
<div class="banner">
  <div class="wrapper">
    <h1>OFERTA ESPECIAL PARA LA COPA MUNDIAL 2018 </h1>
    <h2>
      -80%
    </h2>
    <h3>Sólo <strong> <span>23</span>h: <span>23</span>min: <span>23</span>s: <span class="last">23</span>ms*</strong> para conseguir 90% dto. y regalos gratis</h3>
    <dl class="price">
      <dt><del>ARS 3.492,00 </del> <strong>ARS 329,00</strong></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=ar-db53pciusdpf329&ref=ar_db53pciusdpfxmaspurchase1806wc<?php echo $refStr;?>&refs=ar_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1806wc-ar')" class="buybtn"><i></i> <span>Comprar ahora</span></a></dd>
      <dd>Suscripción de 1 año / 3 PCs</dd>
    </dl>
    <img src="<?php echo $pResUrl; ?>images/db-message.png" alt="" class="db-message">
  </div>
</div>
<!--end banner-->

<!--container-->
<div class="db-content clearfix">
  <div class="wrapper">
  	
    <h2>Disfrute del superior rendimiento de PC con controladores siempre actualizados</h2>
  	<dl>
  		<dt><img src="<?php echo $pResUrl; ?>images/icons01.png" alt=""></dt>
  		<dd>
  			Soporta más de 1,000,000 <br> dispositivos y controladores.
  		</dd>
  	</dl>
  	<dl>
  		<dt><img src="<?php echo $pResUrl; ?>images/icons02.png" alt=""></dt>
  		<dd>
        La velocidad de descarga <br> más rápida.
      </dd>
  	</dl>
  	<dl>
  		<dt><img src="<?php echo $pResUrl; ?>images/icons03.png" alt=""></dt>
  		<dd>
        Experiencia de juegos <br> más rápida y suave.
  		</dd>
  	</dl>
  	<dl>
  		<dt><img src="<?php echo $pResUrl; ?>images/icons04.png" alt=""></dt>
  		<dd>
        Actualización de controlador <br> más segura.
  			<a href="javascript:void(0);" onclick="goTaget($('.comparison_table'))">Ver más sobre la edición PRO >></a>
  		</dd>
  	</dl>
    </div>
</div>
<div class="gift-intro  clearfix">
  <div class="wrapper">
  	<h2> <img src="<?php echo $pResUrl; ?>images/gift-icon.png" alt="">Regalos gratis sólo para oferta especial de La Copa Mundial de Fútbol 2018</h2>
    <dl>
      <dt> <img src="<?php echo $pResUrl; ?>images/iu-box.png" alt=""></dt>
      <dd>El mejor desinstalador para <br> remover programs y <br> plugins maliciosos.</dd>
    </dl>
    <dl>
      <dt> <img src="<?php echo $pResUrl; ?>images/pf-box.png" alt=""></dt>
      <dd>La herramienta de protección <br> de carpeta fácil de usar y con <br> una contraseña.</dd>
    </dl>
    <dl>
      <dt> <img src="<?php echo $pResUrl; ?>images/sd-box.png" alt=""></dt>
      <dd>Desfragmentador de disco <br> confiable e inteligente con <br> 7,000,000+ usuarios.</dd>
    </dl>
  </div>
</div>
<div class="between-buy">
	<div class="wrapper">
    <div class="left-message">
      <p>-90% y regalos gratis <br> por comprar Driver Booster 5 PRO</p>
      <h2>-90%</h2>
    </div>
    <img src="<?php echo $pResUrl; ?>images/db-box.png" alt="" class="db-box">
    <dl class="price">
      <dt><del>ARS 3.492,00</del> <strong>ARS 329,00</strong></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=ar-db53pciusdpf329&ref=ar_db53pciusdpfxmaspurchase1806wc<?php echo $refStr;?>&refs=ar_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1806wc-ar')" class="buybtn"><i></i> <span>Comprar ahora</span></a></dd>
      <dd>Suscripción de 1 año / 3 PCs</dd>
    </dl>
	</div>
</div>
<div class="awrad wrapper">
  <h2>Recomendado y premiado por estos Medios</h2>
  <img src="<?php echo $pResUrl; ?>images/awrad.jpg" alt="">
</div>
<div class="softonic wrapper ">
	<dl class="clearfix">
		<dt><img src="<?php echo $pResUrl; ?>images/soft.jpg" alt=""></dt>
		<dd>
      “Driver Booster detecta los controladores obsoletos de tu ordenador y te permite descargar e instalar las versiones más recientes con un solo clic. Si estás buscando una solución para actualizar rápidamente los controladores de tu ordenador, Driver Booster se encargará de hacer eficazmente el trabajo.”
			<span>-Softonic</span>
		</dd>
	</dl>
</div>
<!--end container-->
<div class="wrapper review">
    <div class="content">
      <dl>
        <dt><h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Mi PC es más rápido, más seguro y más nuevo que hace ocho meses."</h4>
        </dd>
        <dd>"Con Driver Booster, puedo encontrar fácilmente los controladores de dispositivos obsoletos y actualizarlos fácilmente. Además, me ayuda a reparar los errores de sonido, los de red y los de dispositivo etc. No lo creo antes de usar, pero después de probarlo me encanta. Mi PC es más rápido, más seguro y más nuevo que hace ocho meses. Muchas gracias, IObit."</dd>
      </dl>
      <dl class="active">
        <dt><h3>Comentario de usuario</h3></dt>
        <dd><h4>"Yo recomiendo encarecidamente Driver Booster, que le ayuda a actualizar los controladores rápidamente y fácilmente."</h4></dd>
        <dd>"Driver Booster es una aplicación increíble. Este programa para los usuarios que tienen muchas aplicaciones y dispositivos y no tienen tiempo para actualizarlos de forma manual, recomiendo encarecidamente Driver Booster, que le ayuda a actualizar los controladores rápidamente y fácilmente."</dd>
      </dl>
      <dl>
       <dt><h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Funciona perfectamente. Fácil de usar, informativo y intuitivo. "</h4>
        </dd>
        <dd>"Este es uno de los mejores programas de actualizador de controladores. Microsoft incluso me ha llevado por mala dirección que actualizaciones no funcionarán con mi PC. Este programa sabía qué actualización necesitaba sin conflictos. Funcionó perfectamente. Fácil de usar, informativo y intuitivo. Este se quedará en mi caja de herramienta para siempre... buena herramienta."</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
        <p>Myo Thuya</p>
      </li>
      <li class="current">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund"></div>
        <p>Adam Backlund</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
        </div>
        <p>Wayne Bowler</p>
      </li>
    </ul>
  </div>
<div class="comparison_table wrapper" id="comparison_table">
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th colspan="2" class="text"> </th>
				<th class="itemb">Driver Booster FREE</th>
				<th class="itema">Driver Booster PRO</th>
			</tr>
		</thead>
		<tbody>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_03.png"></td>
        <td class="virtue">
          <span>Desbloquea límite de velocidad de actualización de controlador</span>
          <img src="<?php echo $pResUrl; ?>images/migliorato.png">
        </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_04.png"></td>
        <td class="virtue">
          <span>Prioridad para actualizar más controladores obsoletos y raros</span>
          <img src="<?php echo $pResUrl; ?>images/novedad.png">
        </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_05.png"></td>
        <td class="virtue">Reduce bloqueos y fallos del sistema para mejor rendimiento con mayor base <b>de datos</b></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_06.png"></td>
        <td class="virtue">Descarga e instala automáticamente controladores en el tiempo de inactividad <b>del sistema</b></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_07.png"></td>
        <td class="virtue">Hace copia de seguridad de todos los controladores automáticamente para <b>restauración segura</b></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_08.png"></td>
        <td class="virtue mejor">
          <span>Prioridad de actualizar componentes de juego para mejor experiencia de juego</span>
          <img src="<?php echo $pResUrl; ?>images/migliorato.png">
        </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_09.png"></td>
        <td class="virtue">Detecta y repara efectivamente errores de dispositivos </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_10.png"></td>
        <td class="virtue">Actualización automática a la última versión</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_11.png"></td>
        <td class="virtue">24/7 soporte técnico gratuito para demanda</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_01.png"></td>
        <td class="virtue">Escanea e identifica automáticamente controladores obsoletos, desaparecidos <b>y defectuosos</b></td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
      </tr>
			<tr>
				<td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_02.png"></td>
				<td class="virtue">Descarga y actualiza los controladores obsoletos con un solo clic</td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
			</tr>
		</tbody>
		<tfoot>
			<tr>
				<th colspan="2"></th>
				<th class="itemb">Driver Booster FREE <span class="name">Su edición actual</span></th>
				<th class="itema">
					<span class="name">Driver Booster PRO </span>
					<strong>ARS 329,00</strong><br>  <del>ARS 3.492,00 </del>
					<a class="buybtn" href="https://www.iobit.com/buy.php?product=ar-db53pciusdpf329&ref=ar_db53pciusdpfxmaspurchase1806wc<?php echo $refStr;?>&refs=ar_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1806wc-ar')"> <i></i> <span>Comprar ahora</span></a> </th>
			</tr>
		</tfoot>
	</table>
</div>
<div class="footer">
  <div class="payment wrapper clearfix">
    <dl class="visa">
      <dt><img src="<?php echo $pResUrl; ?>images/visa.png" alt=""></dt>
      <dd><strong>Formas de pago</strong></dd>
      <dd>Aceptamos varios formas de pago por <br> su pedido</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/dias.png" alt=""></dt>
      <dd><strong>Garandía de reembolso</strong></dd>
      <dd>Si no está satisfecho en los primeros <br> 60 días, le devolveremos su dinero</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><strong>Pago seguro</strong></dd>
      <dd>100% pago seguro para su pedido</dd>
    </dl>
    <dl class="servicion">
      <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
      <dd><strong>Servicio al cliente</strong></dd>
      <dd>24/7 Soporte Técnico gratis</dd>
    </dl>
  </div>
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
  </dl>
  <p class="copyright">Copyright  2005 - <?php echo date(Y)?> IObit. Todos los derechos reservados</p>
</div>


<script>
  $(".users li").mouseover(function(event) {
    var num = $(this).index();
    $(".users li").eq(num).addClass('current').siblings().removeClass('current');
    $(".review dl").eq(num).addClass('active').siblings().removeClass('active');
   });
	function goTaget(target) {
		var Theigth = target.offset().top;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	}
	function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 03:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp,4);
    d = MApp(2.2).packages.zeroize(datetime[0],2);
    h = MApp(2.2).packages.zeroize(datetime[1],2);
    i = MApp(2.2).packages.zeroize(datetime[2],2);
    s = MApp(2.2).packages.zeroize(datetime[3],2);
    mi = MApp(2.2).packages.zeroize(datetime[4],3);
    $(".banner h3 strong span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
		setTimeout('cycleCountdown()', 1);
	}
	cycleCountdown();
</script>
</body>
</html>