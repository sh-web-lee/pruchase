<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Oferta Especial de Navidad para IObit Malware Fighter PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script type="text/javascript">
  		var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
		var paramTo=MApp(2.2).url.getParameters('to');
  </script>
</head>
<body>
  <!-- banner -->
  <div class="banner">
	 <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>VENTE FLASH DE NOËL</h1>
    <!-- subtitle -->
    <p>
      ¡Descuento hasta <b>90</b>% y los regalos gratis!
    </p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <div class="message-box">
			<div class="message-box-sale"><p>-55%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
		</div>
        <p>1 año, 1 PC</p>
        <dl>
          <dd class="clearfix">
            Ahorra: <span class="fr">21,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>17</b> <del>39,95€</del></p>
          </dd>
          <dd>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-imf81pc1799&ref=es_imf81pc1799purchase2011xr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcpurchase2011xr-es');"> <i class="all-icons"></i>Comprar Ahora</a>
          </dd>
        </dl>
      </div>

      <!-- imf-85 -->
      <div class="message large fr">
		<div class="countd countdown">
			<div class="countdcnt">
				<strong>00</strong><span>h :</span>
				<strong>00</strong><span>m :</span>
				<strong>30</strong><span>s</span>
			</div>
		</div>
		<div class="message-box">
			<div class="message-box-sale message-box-eaux"><p>-90%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
			<div class="xmas-giveaway"></div>
			<div class="message-tips"><i class="all-icons"></i><p>Los regalos exclusivos incluyen Protected Folder, Smart Defrag e IObit Software Updater.</p></div>
		</div>
        <p> 1 año / 3 PC + <del class="messagecad">REGALOS PRO</del></p>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Ahorra: <span class="fr largeolsa"><em>159,89</em>€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>17</b> <del class="largeold"><em>179,88</em>€</del></p>
          </dd>
          <dd>
            <a class="buybtn large" href="https://www.iobit.com/buy.php?product=es-imf83pcpfsdisu1799&ref=es_imf83pcpfsdisu1799purchase2011xr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpfsdisupurchase2011xr-es');"> <i class="all-icons"></i>Comprar Ahora</a>
          </dd>
        </dl>
      </div>
    </div>
	</div>
  </div>
  <!-- end banner -->
<div class="xmas-annou"><i class="all-icons"></i>¡Atención ! Solo 24 horas. ¡Darse prisa!</div>
<div class="xmas-payment"></div>
<!-- feature -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2><span>Las funciones más destacadas de IObit Malware Fighter PRO</span></h2>
    <!-- computer -->
    <img class="computer" src="<?php echo getStaticUrl('images/computer.png')?>" alt=""/>
    <!-- list -->
    <div class="right-lists">
      <ul>
        <li class="icon1">Caja Fuerte mantiene archivos importantes limpios<br>
          y fuera del alcance de terceros.</li>
        <li class="icon2">
          Añade una nueva capa de protección además del motor anti-ransomware para proteger múltiples archivos y carpetas de los atacantes.
        </li>
        <li class="icon3"> Evita que más de 200 millones de amenazas de seguridad infecten y dañen tu ordenador con el motor bitdefender.
        </li>
        <li class="icon4">Protege tu cámara contra el acceso no autorizado.</li>
      </ul>
      <a class="more" href="javascript:void(0)">Ver más sobre la versión Pro >></a>
    </div>
  </div>
</div>
<!-- end feature -->
  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper gifts-cont">
		<h2>¡PAGA UN PRECIO REDUCIDO Y ADEMÁS TE LLEVAS 3 REGALOS!</h2>
		<div class="gifts-giveway gifts-giveway1">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>IObit Software Updater 3 Pro <b>0€</b> <del>19,99€</del> <span>(1 año / 1PC)</span></h4>
				<ul>
					<li>Proporcione el software más popular, incluidas sus últimas actualizaciones, y todo solo con un solo clic.</li>
					<li>Simplifique sus tareas de actualización detectando el estado del software e instalando automáticamente el software más reciente.</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway2">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Smart Defrag 6 Pro <b>0€</b> <del>29,99€</del> <span>(1 año / 1PC)</span></h4>
				<ul>
					<li>Desfragmente archivos grandes para acelerar la velocidad del disco y mejorar la durabilidad del disco.</li>
					<li>Supervise el estado del disco en tiempo real: temperatura, uso, informe del disco de autocontrol, etc.</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway3">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Protected Folder <b>0€</b> <del>39,95€</del> <span>(1 año / 1PC)</span></h4>
				<ul>
					<li>Proteja sus datos, carpetas y archivos importantes de forma más eficaz con una contraseña.</li>
					<li>Incluso si la PC es atacada maliciosamente por virus, spyware y ransomware, el motor de protección de archivo puede mantener los archivos bloqueados.</li>
				</ul>
			</div>
		</div>
	</div>
  </div>
  <!-- end gifts -->
<div class="gifts-store">
	<div class="gifts-store-arrow"></div>
	<a class="buybtn" href="https://www.iobit.com/buy.php?product=es-imf83pcpfsdisu1799&ref=es_imf83pcpfsdisu1799purchase2011xr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpfsdisupurchase2011xr-es');"> <i class="all-icons"></i>Comprar Ahora</a>
	</dd>
</div>
  <!-- comparison -->
  <div id="compare" class="comparison">
    <!-- title -->
    <h2>La comparación entre FREE y PRO</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-a"><p>Tu versión actual</p></th>
  		  <th class="space"></th>
          <th class="item-b"></th>
  		  <th class="space"></th>
          <th class="item-c"><p>IObit Malware Fighter PRO</p><img src="<?php echo getStaticUrl('images/xmas-santa.png') ?>" class="xmas-santa" alt=""></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-a">3 millones</td>
  		  <td class="space"></td>
          <td class="item-b">Base de datos de antimalware</td>
  		  <td class="space"></td>
          <td class="item-c">más de 209 millones</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
          <td class="item-b">Motor de antivirus Bitdefender</td>
  		  <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
          <td class="item-b">Motor de Anti-Ransomware</td>
  		  <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
          <td class="item-b">Protege tus carpetas principales y múltiples tipos de archivos contra ataques de ransomware.</td>
  		  <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
          <td class="item-b">Archivos Específicos Protegidos contra Accesos no Autorizados en Caja Fuerte</td>
  		  <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
          <td class="item-b">Protección completa en tiempo real para la mejor seguridad del PC</td>
  		  <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
          <td class="item-b">Protege tu cámara contra el acceso no autorizado</td>
  		  <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
          <td class="item-b">Previene infecciones de virus transmitidas por discos USB</td>
  		  <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
          <td class="item-b">Detecta un proceso malicioso que se ejecuta en la RAM</td>
  		  <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
  		<!-- 10 -->
  		<tr>
  		  <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
  		  <td class="item-b">Detecta amenazas mediante el análisis de acciones maliciosas</td>
  		  <td class="space"></td>
  		  <td class="item-c"><i class="all-icons"></td>
  		</tr>
  		<!-- 11 -->
  		<tr>
  		  <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
  		  <td class="item-b">Limpia automáticamente el rastreo de navegación para evitar el seguimiento malicioso</td>
  		  <td class="space"></td>
  		  <td class="item-c"><i class="all-icons"></td>
  		</tr>
  		<!-- 12 -->
  		<tr>
  		  <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
  		  <td class="item-b">Actualización automática a la última versión</td>
  		  <td class="space"></td>
  		  <td class="item-c"><i class="all-icons"></td>
  		</tr>
  		<!-- 13 -->
  		<tr class="lasttr">
  		  <td class="item-a"><i class="all-icons"></i> No disponible</td>
  		  <td class="space"></td>
  		  <td class="item-b">Soporte técnico gratuito las 24 horas, 7 días a la semana</td>
  		  <td class="space"></td>
  		  <td class="item-c"><i class="all-icons"></td>
  		</tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2>Escuche lo que dicen los usuarios que usan IObit Malware Pro</h2>
    <div class="content">
      <div class="details">
        <div class="active">
          <h4>Comentario de media</h4>
          <p>« El programa utiliza dos motores de AV, el suyo y BitDefender, y parece ser efectivo contra el malware que no puede ser detectado por otras herramientas similares, por lo que es bueno que se pueda ejecutar junto con su software AV estándar. Puede detectar una gran variedad de spyware, ransomware, adware, troyanos, gusanos, keyloggers y bots. »</p>
		  <h5>Software Informer</h5>
        </div>
        <div>
          <h4>Comentario de usuarios</h4>
          <p>« Solíamos utilizar hasta una docena de programas diferentes para mantener nuestras máquinas funcionando sin problemas. Tomaba horas cada semana para mantener la seguridad y el rendimiento. Ahora, con IObit Malware Fighter Pro y Advanced System Care Pro, todo está un solo lugar y nos toma sólo unos minutos cada dos días hacer los mismos trabajos con mucha más confianza. No hemos tenido ningún problema desde el uso de sus productos. »</p>
		  <h5>Bob Bassett</h5>
        </div>
        <div>
          <h4>Comentario de usuarios</h4>
          <p>« Hace algunos años alguien llamó mi atención sobre IObit Malware Fighter. Primero fuí escéptico. Pero después de instalarlo, se convirtió en mi programa anti-malware favorito. Es muy fácil de usar. A través de los años ya ha detectado varias amenazas y las ha eliminado. En cooperación con otros programas IObit, como por ejemplo ASC, tengo una buena protección para mi PC. Ahora recomiendo estos programas a todos mis amigos y familiares. »</p>
		  <h5>Peter Stoffers</h5>
        </div>
        <div>
          <h4>Comentario de usuarios</h4>
          <p>« Me gustaría dar las gracias a todo el personal de IObit por trabajar duro para proveernos los mejores programas. Es una gran actualización que ha hecho para sus usuarios. Es mucho más rápido en el escáner y fácil de usar. Las personas que realmente desean un buen programa de Malware y Antivirus que también tenga una buena relación calidad-precio no deben buscar más allá de IObit Malware Fighter. Yo recomendaría que olviden el resto y obtengan lo mejor que es IObit Malware Fighter. »</p>
		  <h5>David Cassidy</h5>
        </div>
		<div>
		  <h4>Comentario de usuarios</h4>
		  <p>« Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos. »</p>
		  <h5>Gelu Bati</h5>
		</div>
      </div>
	  <ul>
		  <a class="next nextbtn" href="javascript: nextFun();"></a>
		  <li class="one"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
		  <li class="two"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
	    <li class="three"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Gelu Batir"></li>
	    <li class="four"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
		<li class="five"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
	  	
	  </ul>
    </div>
  </div>
  <!-- end review -->
  
  <div class="award">
	  <div class="wrapper">
		  <h2>También recomendado por</h2>
		  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="Gelu Batir">
	  </div>
  </div>
  
  

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">¡Tiempo limitado! Aprovecha la oportunidad ahora</h2>
    <!-- box -->
	<div class="wrapper bottom-buy-center">
    <div class="box fl">
	  <div class="bottom-buyimg bottom-buy1"></div>
	  <div class="bottom-buyimg bottom-buy2 on"></div>
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="top">1 año / 1 PC</li>
      <li class="active mid">1 año / 3 PC + <small>Regalos exclusivos</small></li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>17</b> <del>179,88€</del></p>
      </dd>
      <dd>
        <a class="buybtn small" href="https://www.iobit.com/buy.php?product=es-imf83pcpfsdisu1799&ref=es_imf83pcpfsdisu1799purchase2011xr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpfsdisupurchase2011xr-es');">
          <i class="all-icons"></i> Comprar Ahora
        </a>
      </dd>
    </dl>
	</div>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Garantía de reembolso</h3>
		  <p>Si no está satisfecho en los primeros 60 días, le devolveremos su dinero</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Pago seguro</h3>
		  <p>100% pago seguro para su pedido</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/service-client.png" alt=""></dt>
        <dd>
          <h3>Servicio al cliente</h3>
		  <p>24/7 Soporte Técnico gratis</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Nota:</dt>
        <dd>1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
		<dd>2*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
    </div>
  </div>
  <!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>