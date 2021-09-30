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
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-imf81pc1799&ref=es_imf81pc1799purchase2011exp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcpurchase2011exp-es');"> <i class="all-icons"></i>Comprar Ahora</a>
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
            <a class="buybtn large" href="https://www.iobit.com/buy.php?product=es-imf83pcpfsdisu1799&ref=es_imf83pcpfsdisu1799purchase2011exp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpfsdisupurchase2011exp-es');"> <i class="all-icons"></i>Comprar Ahora</a>
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
  <!-- comparison start -->
  <div class="comparison">
    <h2>Recupera todas las funciones PRO para un PC<br> completamente protegido</h2>
    <table class="wrapper">
      <thead>
        <tr>
          <th class="itema"><big>¡Cuidado!</big> Actualmente corres el riesgo de …</th>
          <th class="itemb"><big>En su lugar, puedes disfrutar…</big></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">
            <span>Infecciones de virus</span> que dañan tu PC debido a la base de datos limitada
          </td>
          <td class="itemb">
            <span>La base de datos de 209,000,000 de virus de Bitdefender</span> mantiene tu PC seguro
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Nuevas variantes de virus que infectan</span> tu PC porque no son reconocidas
          </td>
          <td class="itemb">
            Heurística avanzada utiliza el conocimiento sobre los virus existentes para <span>detectar incluso las variantes más nuevas</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            Ransomware secuestra tu PC y <span>bloquea todos tus archivos y datos</span>
          </td>
          <td class="itemb">
            El potente motor Anti-ransomware <span>bloquea los ataques de ransomware</span> para mantener tus archivos seguros
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Tus archivos más importantes son robados</span> u otros acceden a ellos
          </td>
          <td class="itemb">
            Coloca tus archivos más importantes en <span>la Caja Fuerte</span> para evitar que cualquier hacker o usuario de tu PC acceda a ellos
          </td>
        </tr>
        <tr>
          <td class="itema">
            Los hackers y las empresas controlan los sitios web que visitas y <span>realizan un seguimiento de tu comportamiento en línea</span>
          </td>
          <td class="itemb">
            Con el Anti-tracking, <span>borras sus rastros</span> y te aseguras de que tu privacidad no sea violada
          </td>
        </tr>
        <tr>
          <td class="itema">
            Tu PC <span>se infecta a través de un disco USB</span>
          </td>
          <td class="itemb">
            La Protección de Disco USB <span>comprueba los discos USB y los bloquea</span> si contienen archivos maliciosos
          </td>
        </tr>
  		<tr>
  		  <td class="itema">
  		    Los hackers informáticos <span>obtienen acceso a tu cámara</span> web y te observan en tu propia casa
  		  </td>
  		  <td class="itemb">
  		    La Protección de Cámara garantiza que <span>nadie tenga acceso a tu cámara web</span> sin tu consentimiento
  		  </td>
  		</tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
  
  <!-- offermore start -->
  <div class="offermore clearfix">
    <h2>¡IObit Malware Fighter 8 PRO puede hacer incluso<br> más que la versión anterior!</h2>
  	<div class="offermorecnt">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-01.png')?>" alt=""/></dt>
      <dd>
        <h3>Base de datos más grande</h3>
        <p>Con la base de datos de malware 100% más grande se detectan todas las amenazas.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-02.png')?>" alt=""/></dt>
      <dd>
        <h3>Más inteligente</h3>
        <p>Con Heurística avanzada, incluso estás protegido contra nuevas variantes de virus.</p>
      </dd>
    </dl>
  	<dl>
  	  <dt><img src="<?php echo getStaticUrl('images/offermore-03.png')?>" alt=""/></dt>
  	  <dd>
  	    <h3>Más rápido</h3>
  	    <p>Escanea tu PC un 50% más rápido para ahorrarte mucho tiempo.</p>
  	  </dd>
  	</dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-04.png')?>" alt=""/></dt>
      <dd>
        <h3>Correos electrónicos seguros</h3>
        <p>Ahora IObit Malware Fighter también protege tu correo electrónico contra spam, phishing y enlaces maliciosos.</p>
      </dd>
    </dl>
  </div>
  </div>
  <!-- offermore end -->

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
        <a class="buybtn small" href="https://www.iobit.com/buy.php?product=es-imf83pcpfsdisu1799&ref=es_imf83pcpfsdisu1799purchase2011exp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpfsdisupurchase2011exp-es');">
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