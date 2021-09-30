<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

$reduceNum=758560000;
$reduceTime=2;
$buyNum = ceil(microtimeFloat()*1000/(1000*$reduceTime)) - $reduceNum;
$buyNum = number_format($buyNum);

$driverCount=intval($_GET['uc']);
$installDays=intval($_GET['iday']);
$expireTimestamp=intval(base64_decode($_GET['ext']));
$expireDate=date('Y-m-d H:i:s',$expireTimestamp);
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Paga € 0 para mantener Driver Booster PRO para usuarios de Giveaway – IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Play" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<div class="info">
				<h2>Driver Booster 5 PRO</h2>
				<p>Disfruta de tus privilegios exclusivos para mantener PRO <span>por otros 15 DÍAS GRATIS</span></p>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>H : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=es-db5preorder15d&ref=es_2018giveaway&aff=&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-es');" class="orig-btn">
						<span>Activar PRO: 0€</span>
					</a>
					<div class="shadow"></div>
				</div>
				<div class="crowd-count"><span class="buy-num"><?php echo $buyNum;?></span> personas han obtenido esta oferta</div>
			</div>
			<div class="steps clearfix">
				<ul>
					<li>Disfruta gratuitamente de tu Driver <span>Booster 5 PRO (3 PCs) por 15 días más </span></li>
					<li>Después de 15 días, recibe una oferta exclusiva <span>con el 70% de descuento (Original: 74,85€) en el</span> Driver Booster 5 PRO (1 año / 3 PCs)</li>
					<li>No se hará efectivo el pago hasta que los 15 <span>días de prueba caduquen. Puedes cancelar la</span> compra en cualquier momento.</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<!-- statistics -->
	<div class="statistics">
		<div class="wrapper">
			<h2>En los últimos <strong class="countDay">345</strong> días, Driver Booster ha instalado <strong class="driver">57</strong> drivers para tu PC</h2>
			<p>Ha mantenido tu PC estable y al máximo rendimiento.</p>
		</div>
	</div>
	<!-- end statistics -->
	<!-- features -->
	<div class="features">
		<div class="wrapper">
			<h2>Ahora continúa disfrutando de todas las mejoras de Driver Booster 5 PRO. <span>Nosotros nos encargaremos de mantener tu PC estable en este nuevo año.</span></h2>
			<div class="disp">
				<dlv class="list feat-01">
					<h3>No hay necesidad de acutualizar los driver uno por uno</h3>
					<p>Ofrece una solución única de detección y actualización <span>de drivers.</span></p>
				</dlv>
				<div class="list feat-02">
					<h3>Descarga y actualiza de manera segura el driver</h3>
					<p>Genera una copia de seguridad automática y crea un punto de restauración del sistema antes de actualizar.</p>
				</div>
				<div class="list feat-03">
					<h3>Sin bloqueo inesperado del sistema</h3>
					<p>Mantiene todos los drivers actualizados para asegurarte una PC estable.</p>
				</div>
				<div class="list feat-04">
					<h3>200% * descarga más rápida</h3>
					<p>Ahorra tiempo con la descarga de tiempo de inactividad del sistema con una velocidad hasta un 200% más rápida.</p>
				</div>
				<div class="list feat-05" >
					<h3>Rendimiento de juego máximo garantizado</h3>
					<p>Enorme base de datos de componentes de juegos que incluye Nvidia, Realtek, Intel, AMD, Broadcom, VIA, Microsoft Visual C ++ 2017 redistribuible, etc. para asegurar una experiencia de juego fluida.</p>
				</div>
			</div>
			<div class="cart-zone">
				<h3>¡Recibe 15 días Gratis Ahora, para asegurar &amp; actualizar tus dispositivos fácilmente!</h3>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=es-db5preorder15d&ref=es_2018giveaway1&aff=&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-es');" class="orig-btn"><span>Activar PRO: 0€</span></a>
					<div class="shadow red"></div>
				</div>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>H : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->
	<!-- awards -->
	<div class="awards">
		<div class="wrapper">
			<h2>Recomendado y premiado por estos Medios </h2>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
		</div>
	</div>
	<!-- end awards -->
	<!-- reviews -->
	<div class="reviews">
		<div class="wrapper">
			<h2>Driver Booster 5 PRO ha sido premiado por sitios mediáticos famosos y usuarios.</h2>
				<div class="review active">
					<h3>Media Review</h3>
					<h4>“IObit ha hecho muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus controladores, es una de las mejores utilidades.”</h4>
					<p>
						“Driver Booster ofrece múltiples funciones atractivas y precio de licencia es muy asequible. Además, una interfaz personalizable hace un buen trabajo de mostrar la <span>información específica relacionada con hardware.”</span>
					</p>
				</div>
				<div class="review">
					<h3>Comentario de usuario</h3>
					<h4>"Mi PC es más rápido, más seguro y más nuevo que hace ocho meses."</h4>
					<p>
						"Con Driver Booster, puedo encontrar fácilmente los controladores de dispositivos obsoletos y actualizarlos fácilmente. Además, me ayuda a reparar los <span>errores de sonido, los de red y los de dispositivo etc. No lo creo antes de usar, pero después de probarlo me encanta.</span> Mi PC es más rápido, más seguro y más nuevo que hace ocho meses. Muchas gracias, IObit."
					</p>
				</div>
				<div class="review">
					<h3>Comentario de usuario</h3>
					<h4>"Yo recomiendo encarecidamente Driver Booster, que le ayuda a actualizar los controladores rápidamente y fácilmente."</h4>
					<p>
						"Driver Booster es una aplicación increíble. Este programa para los usuarios que tienen muchas aplicaciones y dispositivos y no tienen tiempo para <span>actualizarlos de forma manual, recomiendo encarecidamente Driver Booster, que le ayuda a actualizar los controladores rápidamente y fácilmente."</span>
					</p>
				</div>
				<div class="review">
					<h3>Comentario de usuario</h3>
					<h4>"Funciona perfectamente. Fácil de usar, informativo y intuitivo. Este se quedará en mi caja de herramienta para siempre... buena herramienta. "</h4>
					<p>
						"Este es uno de los mejores programas de actualizador de controladores. Microsoft incluso me ha llevado por mala dirección que actualizaciones no funcionarán con mi PC. <span>Este programa sabía qué actualización necesitaba sin conflictos. Funcionó perfectamente. Fácil de usar, informativo y intuitivo.</span> Este se quedará en mi caja de herramienta para siempre... buena herramienta."
					</p>
				</div>
				<ul class="users clearfix">
					<li class="active">
						<img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="PC.MAGAZINE">
						<span>PC.MAGAZINE</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya">
						<span>Myo Thuya</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund">
						<span>Adam Backlund</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
						<span>Wayne Bowler</span>
					</li>
				</ul>	
		</div>
	</div>
	<!-- end reviews -->
	<!-- bottom -->
	<div class="bottom">
		<div class="wrapper">
			<div class="solgan">
				<p>Entonces ¿por qué dudar?</p>
				<h2>¡Obtén la versión PRO ahora y disfruta de una PC ligera y una experiencia de juego más veloz!</h2>
			</div>
			<div class="btn-zone">
				<a href="https://www.iobit.com/buy.php?product=es-db5preorder15d&ref=es_2018giveaway2&aff=&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-es');" class="orig-btn"><span>Activar PRO: 0€</span></a>
				<div class="shadow"></div>
			</div>
			<div class="count-down">
				<strong>6</strong>D : 
				<strong>22</strong>H : 
				<strong>34</strong>M : 
				<strong>25</strong>S : 
				<small>345</small>ms
			</div>
			<div class="footer">
				<dl>
					<dt>Nota:</dt>
					<dd>*.Datos pueden variar basados en diferentes sistemas o ordenadores. </dd>
					<dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
				</dl>
				<p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
			</div>
		</div>
	</div>
	<!-- end bottom -->
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
	<script>
		function getBuyNum(){
			$.ajax({
				type: "GET",
				url: "<?php echo $pRootUrl;?>callback.php",
				data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reduceTime;?>&r="+Math.random(),
				success: function(packs){
					$('.buy-num').html(packs);
				}
			});
			setTimeout('getBuyNum()', 3000);
		}
		setTimeout('getBuyNum()', 3000);

		$(".reviews .users li").click(function(event) {
			$(this).addClass("active").siblings().removeClass("active");
			$(".reviews .review").eq($(this).index()).addClass("active").siblings().removeClass("active");
		});
		$(document).ready(function() {
			cycleCountdown();
			$('.countDay').animateNumber({
						number: <?php echo $installDays;?>
					},
					5000,
					'linear'
			);
			$('.driver').animateNumber({
						number: <?php echo $driverCount;?>
					},
					3000,
					'linear'
			);
		});

		function cycleCountdown(){
			var datetime = timeCountDown(<?php echo $expireTimestamp;?>);
			if(datetime==false){
				window.location.href='index.php';
			}else {
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				$('.count-down').each(function () {
					$(this).find('strong').eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
				});
				$('.count-down small').html(mi);
				setTimeout('cycleCountdown()', 1);
			}
		}

		function timeCountDown(startTimestamp) {
			var dateObj = new Date();
			var time = dateObj.getTime().toString().substring(0, 10);
			var remainingTime = startTimestamp - time;
			if (remainingTime > 0) {
				var d = Math.floor(remainingTime / (24 * 60 * 60));
				var h = Math.floor(remainingTime / (60 * 60) % 24);
				var i = Math.floor(remainingTime / 60 % 60);
				var s = Math.floor(remainingTime % 60);
				var mi = 999 - dateObj.getMilliseconds();
				if (mi < 10) {
					mi = '00' + mi;
				} else if (mi < 100) {
					mi = '0' + mi;
				}
				return [d, h, i, s, mi];
			} else {
				return false;
			}
		}
		function clickCount(){
			$.ajax({
				type: "GET",
				url: "dbgive.php",
				data: "action=clickCount&r="+Math.random()
			});
		}
	</script>
</body>
</html>