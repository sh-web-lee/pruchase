<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';
if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'enimfar' . $date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 55;
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			setcookie($c_name, 3, time() + 3600 * 24 * 2);
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>-85% para proteger de Malware y Virus - IObit Malware Fighter 8 | IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/es/index.php" target="_blank" class="logo">IObit</a>
			<h1>El motor de Bitdefender: La seguridad superior de PC para ti</h1>
			<h2>Protege tu PC contra más de 209 millones de amenazas</h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3>Solamente 
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				Paquetes de Seguridad Disponibles 
	      			</h3>
							<span>Protección por 1 año para 3 PCs</span> <del>79,95€</del>
						</dt>
						<dd>
							<span><i></i> Protected Folder</span> <del>39,95€</del> <em>GRATIS</em>
						</dd>
						<dd>
							<span><i></i> Smart Defrag PRO </span> <del>29,99€</del> <em>GRATIS</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							 <b>Solamente</b> <strong>19,99€</strong> <del>149,89€</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=es-imf83pcpfsd1999&ref=es_imfbdengine3pcpfsd1804<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine1804-es');" class="buybtn"><i></i> Activar Ahora</a></dd>
					</dl>
				</div>
				<img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" class="payment">
			</div>
		</div>  
	</div> 
	<!--end banner-->
	<!--cruces-->
	<div class="cruces">
		<div class="wrapper clearfix">
			<h2>Aspectos Importantes que debe Saber</h2>
			<ul>
				<li class="first">
					<h3>¡El Malware está en todas partes!</h3>
					<p>El internet es un lugar que va incrementando su peligro, incluyendo miles de Malware incluyendo virus, gusanos, spyware, adware y Troyanos que emergen a diario poniendo en riesgo a su ordenador.</p>
				</li>
				<li class="last">
					<h3>Graves consecuencias al estar infectado</h3>
					<p>Estos malware pueden robar información personal, financiera o relacionada a su negocio en su ordenador.  </p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>Protección eficaz de PC con el último motor de Bitdefender</h2>
		<p>Equipado con el último motor anti-virus de Bitdefender, IObit Malware Fighter PRO evita que más de 209,000,000 amenazas de seguridad dañen tu ordenador. </p>
		<div class="message-box">
			<dl class="list01">
				<dt>Base de Datos Actualizada</dt>
				<dd>Los nuevos malware serán constantemente añadidos a la base de datos Bitdefender para asegurar que su ordenador este a salvo de infecciones dañinas.   </dd>
			</dl>
			<dl class="list02">
				<dt>Protección en tiempo real</dt>
				<dd>Una vez que el motor sea activado, su ordenador estará completamente activado en tiempo real. Cualquier amenaza que trate de irrumpir en el sistema, será bloqueado y removido. </dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				 <b>Solamente</b> <strong>19,99€</strong> <del>149,89€</del>
			</dt>	
			<dd><a href="https://www.iobit.com/buy.php?product=es-imf83pcpfsd1999&ref=es_imfbdengine3pcpfsd1804<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine1804-es');" class="buybtn"><i></i> Activar Ahora</a></dd>
			<dd class="last"><i></i> 60 DÍAS DE GARANTÍA DE REEMBOLSO</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Otras protecciones que solamente podrá obtener con la versión PRO</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Motor Anti-ransomware </h3></dd>
				<dd>Proactivamente e inteligentemente detiene Ransomware que intenta irrumpir en el sistema y protege tus archivos.  </dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Caja Fuerte</h3></dd>
				<dd>Protección en archivos específicos contra amenazas.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Protector de Cámara</h3></dd>
				<dd>Le informa de inmediato si existe algún intento de acceso a su cámara.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
				<dd><h3>Protección de Datos Sensibles</h3></dd>
				<dd>Añade una nueva capa de protección a tus datos sensibles como tus documentos, imágenes, videos, etc.</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>85% de Descuento para Activar IObit Malware Fighter PRO Ahora</h2>
			<h3>Recibe 2 Herramientas IObit de Protección Extra (valoradas en 69,94€) Gratis</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Protected Folder</strong> <del> 39,95€</del> (1 Año / 1 PC)
				</dd>
				<dd class="last">¡Sin pérdida de archivos importantes asegurando la privacidad!</dd>
			</dl>
			<dl class="right">
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Smart Defrag PRO</strong> <del> 29,99€ </del> (1 Año / 1 PC)
				</dd>
				<dd class="last">¡Desfragmentación de disco segura y estable! </dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				 <b>Solamente</b> <strong>19,99€</strong> <del>149,89€</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=es-imf83pcpfsd1999&ref=es_imfbdengine3pcpfsd1804<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdengine1804-es');" class="buybtn"><i></i> Activar Ahora</a></dd>
			<dd class="last"><i></i> 60 DÍAS DE GARANTÍA DE REEMBOLSO</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Comentarios de Prensa y Usuarios</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd>Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos.</dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV estándar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots.</dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="">
			</dt>
			<dd>
				<strong>David Cassidy</strong>
			</dd>
			<dd>Me gustaría dar las gracias a todo el personal de IObit por trabajar duro para proveernos los mejores programas. Es una gran actualización que ha hecho para sus usuarios. Es mucho más rápido en el escáner y fácil de usar. Las personas que realmente desean un buen programa de Malware y Antivirus que también tenga una buena relación calidad-precio no deben buscar más allá de IObit Malware Fighter. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter.</dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>Recomendado y premiado por estos Medios</h2>
			<ul class="clearfix">
				<li class="first">
					<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/major-geeks.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/chip.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.softpedia.com/get/System/System-Miscellaneous/IObit-Driver-Booster.shtml?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="">
					</a>
				</li>
				<li class="last">
					<a href="http://driver-booster.updatestar.com/?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="">
					</a>
				</li>
			</ul>
		</div>
		<dl class="note wrapper">
			<dt>Nota:</dt>
			<dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>