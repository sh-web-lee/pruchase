<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ref'])){
	$refStr.='-'.$_GET['ref'];
  }
if(empty(json_decode(base64_decode($_GET['tdata'])))){
  $_GET['tdata']='eyJMZnRUb2RDb3VudCI6MCwiTGZ0RHJ2Q291bnQiOjAsIkxmdENtcENvdW50IjowLCJMZnRUcmxEYXkiOjF9';
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>-75% de descuento en Driver Booster PRO - IObit</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800" rel="stylesheet">
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
			<div class="title">
				<p>Tu periodo de prueba finalizará en <b class="days">3</b> <span class="dayStr">días!</span></p>
				<h1> Última oportunidad para conseguir el mejor precio, solo para los usuarios de la versión de prueba</h1>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO 6"/>
				</div>
				<div class="right fr">
					<h2>¡No te pierdas el mejor precio!</h2>
          <div class="curvebox">
            <img src="<?php echo getStaticUrl('images/price-curve.png')?>" alt=""/>
            <span class="one">
							Antes del <i class="date0">11</i> <em class="month">abril</em>
						</span>
            <span class="two">
							<i class="date0">11</i> <em class="month">abril</em> al <i class="date1">21</i> <em class="month">abril</em>
						</span>
            <span class="three">
							<i class="date2">22</i> <em class="month">abril</em> al <i class="date3">24</i> <em class="month">abril</em>
						</span>
            <span class="four">
							Después del <i class="date4">24</i> <em class="month">abril</em>
						</span>
          </div>
					<ul class="price clearfix">
						<li><p>Hoy <b>17,99€</b></p>Descuento: 75% DTO.
            </li>
						<li class="last">
							<a class="buybtn" 
							   href="https://www.iobit.com/buy.php?product=es-db83pc1799&ref=es_trialdb83pc1799&<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_db"
							   onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-trialbuy-es')">
								<i class="all-icons"></i> Cómpralo ya
              </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

  <!-- feature -->
  <div class="feature wrapper">
    <div class="original">
      <h2>¿Por qué Driver Booster Pro?</h2>
      <h3>
        Actualiza <strong class="driverCount"></strong> <span class="driverStr">drivers</span> y componentes de juego para mejorar la estabilidad y el rendimiento del PC y la experiencia <br>
        de juego
      </h3>
      <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan01.png" alt="">
      <div class="content">
        <!--one -->
        <dl class="one clearfix">
          <dt></dt>
          <dd>
            <h4>Rendimiento estable</h4>
            <p>
              Actualiza drivers necesarios para <br>
              evitar “Freezeo y crashes” de <br>
              pantalla
            </p>
          </dd>
        </dl>
        <!-- two -->
        <dl class="two clearfix">
          <dt></dt>
          <dd>
            <h4>Gestión eficiente de dispositivos</h4>
            <p>
              Detecta y corrige errores para evitar problemas <br>
              de hardware.
            </p>
          </dd>
        </dl>
        <!-- three -->
        <dl class="three clearfix">
          <dt></dt>
          <dd>
            <h4>Arranque de juegos más rápido</h4>
            <p>
              Actualiza componentes necesarios para un <br>
              menor tiempo de ejecución.
            </p>
          </dd>
        </dl>
        <!-- four -->
        <dl class="four clearfix">
          <dt></dt>
          <dd>
            <h4>Mejor experiencia de juego</h4>
            <p>
              Actualiza controladores de juegos para <br>
              experimentar funciones más avanzadas.
            </p>
          </dd>
        </dl>
      </div>
    </div>
    <div class="update">
      <h2>¿Por qué Driver Booster Pro?</h2>
      <h3>
        Actualiza <strong>30</strong> drivers y componentes de juego para mejorar la estabilidad y el rendimiento del PC y la <br>
        experiencia de juego
      </h3>
      <img class="scan" src="<?php echo $pResUrl;?>images/feature-scan02.png" alt="">
      <div class="content">
        <!-- five -->
        <dl class="five top clearfix">
          <dt class="driveNum">15</dt>
          <dd>actualizaciones de <br> drivers disponibles  <sup>PRO</sup></dd>
        </dl>
        <!-- six -->
        <dl class="six top clearfix">
          <dt class="gameNum">15</dt>
          <dd>actualizaciones de componentes <br> de juego disponibles PRO <sup>PRO</sup></dd>
        </dl>
        <!-- one -->
        <dl class="one clearfix">
          <dt></dt>
          <dd>
            <h4>Rendimiento estable</h4>
            <p>
              Actualiza drivers necesarios para evitar <br>
              “Freezeo y crashes” de pantalla
            </p>
          </dd>
        </dl>
        <!-- two -->
        <dl class="two clearfix">
          <dt></dt>
          <dd>
            <h4>Gestión eficiente de dispositivos</h4>
            <p>
              Detecta y corrige errores para evitar problemas <br>
              de hardware.
            </p>
          </dd>
        </dl>
        <!-- three -->
        <dl class="three clearfix">
          <dt></dt>
          <dd>
            <h4>Arranque de juegos más rápido</h4>
            <p>
              Actualiza componentes necesarios para <br>
              un menor tiempo de ejecución.
            </p>
          </dd>
        </dl>
        <!-- four -->
        <dl class="four clearfix">
          <dt></dt>
          <dd>
            <h4>Mejor experiencia de juego</h4>
            <p>
              Actualiza controladores de juegos para <br>
              experimentar funciones más avanzadas.
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end feature -->

	<!-- comparison start -->
  <div class="comparison wrapper">
    <h2>¿Qué diferencias hay entre tu versión actual y la PRO?</h2>
    <table>
      <thead>
      <tr>
        <th colspan="2"></th>
        <th class="itema">
          <div class="free">Tu version actual</div>
        </th>
        <th class="space"></th>
        <th class="itemc">
          <div class="pro">Driver Booster PRO </div>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
        <td class="virtue">Actualiza automáticamente los drivers mientras el sistema está inactivo</td>
        <td class="itema"><i class="all-icons">√</i></td>
        <td class="space"></td>
        <td class="itemc"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
        <td class="virtue">1-clic para actualizar tus drivers</td>
        <td class="itema"><p class="exTxt first">Finaliza en 3 días</p></td>
        <td class="space"></td>
        <td class="itemc"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
        <td class="virtue">Velocidad de actualización 100% más rápida</td>
        <td class="itema"><p class="exTxt">Finaliza en 3 días</p></td>
        <td class="space"></td>
        <td class="itemc"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
        <td class="virtue">Corrige errores de dispositivo para un PC más seguro</td>
        <td class="itema"><p class="exTxt">Finaliza en 3 días</p></td>
        <td class="space"></td>
        <td class="itemc"><i class="all-icons red">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
        <td class="virtue">Descarga y creación de copia de seguridad automática</td>
        <td class="itema"><p class="exTxt">Finaliza en 3 días</p></td>
        <td class="space"></td>
        <td class="itemc"><i class="all-icons red">√</i></td>
      </tr>
      </tbody>
      <tfoot>
      <tr>
        <th colspan="2"></th>
        <th class="itema"></th>
        <th class="space"></th>
        <th class="itemc">
          <p><b>17,99€</b> <del>74,85€</del></p>
          <a class="buybtn other shadow"
             href="https://www.iobit.com/buy.php?product=es-db83pc1799&ref=es_trialdb83pc1799&<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_db"
             onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-trialbuy-es')">
            <i class="all-icons"></i> Cómpralo ya
          </a>
          <p>1 año de suscripción / 3 PCs</p>
        </th>
      </tr>
      </tfoot>
    </table>
  </div>
	<!-- comparison end -->

	<!-- review start -->
  <div class="review">
    <div class="wrapper ">
      <h2>¿Qué dicen otros?</h2>
      <div class="review-message">
        <dl class="wayne">
          <dt>
            <div class="img-box">
              <h4>Wayne Bowler</h4>
              <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>""Este es uno de los mejores programas de actualizador de controladores.""</dd>
        </dl>
        <dl class="myo ">
          <dt>
            <div class="img-box">
              <h4>Myo Thuya</h4>
              <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Con Driver Booster, puedo encontrar los drivers de dispositivos obsoletos y actualizarlos fácilmente." </dd>
        </dl>
        <dl class="pcmag red-round active">
          <dt>
            <div class="img-box">
              <h4>PC-MAG</h4>
              <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>“IObit ha hecho muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus controladores, es una de las mejores utilidades.”</dd>
        </dl>
        <dl class="chip ">
          <dt>
            <div class="img-box">
              <h4>chip</h4>
              <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd> "Driver Booster PRO: la actualización automática del driver sólo está disponible en la versión PRO."</dd>
        </dl>
        <dl class="fabio red-round active">
          <dt>
            <div class="img-box">
              <h4>Fabio Tursi</h4>
              <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Con Driver Booster PRO, encontré el programa perfecto para mantener mi sistema limpio y actualizado."</dd>
        </dl>
        <dl class="vector ">
          <dt>
            <div class="img-box">
              <h4>Vector</h4>
              <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
            </div>
            <div class="line"></div>
          </dt>
          <dd> "¡Un programa mantiene mi sistema actualizado más fácilmente!"</dd>
        </dl>
        <dl class="adam">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
              <h4>Adam Backlund</h4>
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Yo recomiendo encarecidamente Driver Booster, que le ayuda a actualizar los drivers rápida y fácilmente."</dd>
        </dl>
        <dl class="olnet">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
              <h4>01net</h4>
            </div>
            <div class="line"></div>
          </dt>
          <dd> "Todas estas operaciones se realizan en un solo clic, lo que le ayuda a ahorrar tiempo y hacer que su PC sea más estable."</dd>
        </dl>
        <dl class="olorin red-round active">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
              <h4>Olorin 89</h4>
            </div>
            <div class="line"></div>
          </dt>
          <dd>"Driver Booster es una herramienta de actualización de driver, lo que hace la vida más fácil para todos."</dd>
        </dl>
        <dl class="html ">
          <dt>
            <div class="img-box">
              <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
              <h4>HTML-it</h4>
            </div>
            <div class="line"></div>
          </dt>
          <dd> "IObit Driver Booster mantiene todos los drivers siempre actualizados con su tecnología avanzada."</dd>
        </dl>

      </div>
    </div>
  </div>
	<!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>PREMIOS A NIVEL MUNDIAL</h2>
      <p>
        Contamos con la confianza y tenemos galardones de los medios de comunicación de tecnología más importantes del mundo, <br>
        ahora ya sabes que tienes el actualizador de drivers que necesitas.
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl class="fl">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
      <dd>
        <h3>
          Pruébalo SIN RIESGO - con nuestra garantía de reembolso de 60 días
        </h3>
        <p>
          Estamos seguros de que activando la versión PRO te olvidarás de tus <br>
          dolores de cabeza a la hora de actualizar tus drivers por un precio <br>
          asequible
        </p>
      </dd>
    </dl>
    <dl class="fr">
      <dd><h3>Aceptamos</h3></dd>
      <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dt>
    </dl>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <dl class="note wrapper">
    <dt>Nota:</dt>
    <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
  </dl>
  <div class="copyright">
    <p class="wrapper">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><img src="<?php echo getStaticUrl('images/db-float-box.png')?>" alt="Driver Booster PRO6"></div>
      <h2 class="fl">75% de descuento</h2>
      <div class="price fr">
        <h3>Mantén todos tus drivers actualizados todo el año</h3>
        <a class="buybtn shadow other"
           href="https://www.iobit.com/buy.php?product=es-db83pc1799&ref=es_trialdb83pc1799&<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_db"
           onclick="ga('send', 'event', 'db3pcbuy', 'buy', 'dbpurchase-trialbuy-es')">
          <i class="all-icons"></i> Cómpralo ya
        </a>
        <p>1 año de suscripción / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->
    <script>
      var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
      transData = JSON.parse(transDataJson);
    </script>
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>