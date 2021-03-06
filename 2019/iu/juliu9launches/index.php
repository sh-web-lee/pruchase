<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esiulaun_p' . $date;
  $c_name_t='esiulaun_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
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
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);

$paramPct=$_GET['pct'];
$tagShow=true;
if(!empty($paramPct)){
  $refStr.='-'.$paramPct;
  if($paramPct==2){
    $tagShow=false;
  }
}

$transData=json_decode(base64_decode($_GET['data']));
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<title> 83% de descuento en IObit Uninstaller PRO y regalos gratis - IObit </title>
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
      <!-- logo -->
			<a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <!-- title -->
			<h1> Lanzamiento Especial </h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" class="iu-box" alt="IObit Uninstaller PRO"/>
          <img src="<?php echo getStaticUrl('images/ghost.png')?>" class="ghost"/>
          <span class="disappear"></span>
				</div>
        <!-- right-message -->
				<div class="right fr">
          <div class="message">
            <h2>Consigue el Nuevo IObit Uninstaller 10 PRO</h2>
            <div class="number">
              <span>Obt??n regalos gratis, s??lo quedan </span>
              <div id="reduce" class="reduceNum">
                <div class="listbox"><span class="list"><b>0</b></span></div>
                <div class="listbox"><span class="list"><b>0</b></span></div>
              </div>
            </div>
            <p><img src="<?php echo getStaticUrl('images/people.png')?>"> <strong class="viewNum"><?php echo $viewNum;?></strong> usuarios est??n viendo esta p??gina ahora</p>
          </div>
          <dl class="price">
            <dt><strong><b>15</b>,99<small>???</small></strong> &nbsp; <del>99,93???</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=es-iu103pcpfsd1599&ref=es_iu103pcpfsd1599launch<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_iu"
                   onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-newlaunch-es');"
                   class="buybtn">Comprar ahora</a></dd>
          </dl>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
  <div class="intro">
    <div class="wrapper">
      <h2>El Nuevo IObit Uninstaller 10 PRO te ayuda a??n m??s<span></span></h2>
      <div class="message clearfix">
        <h3>1. Adem??s de programas no deseados, tambi??n desinstala los siguientes tipos:</h3>
        <img src="<?php echo getStaticUrl('images/intro-message.png')?>" class="img-box" alt="" / >
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>"></dt>
          <dd>
            <strong>Programas obstinados </strong>que no pueden desinstalarse desde el desinstalador est??ndar.
            <?php if($tagShow):?><span>mejorado en un 152%</span><?php endif;?>
          </dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>"></dt>
          <dd>
            <strong>Paquetes de programas </strong>que ocupan espacio en el disco sin que te des cuenta.
          </dd>
        </dl>
        <div class="clear"></div>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>"></dt>
          <dd>
            <strong>Extensiones de navegador maliciosas </strong>que intentan robar tus datos personales y comprometen la seguridad de tu PC.
            <?php if($tagShow):?><span>mejorado en un 56%</span><?php endif;?>
          </dd>
        </dl>
        <dl class="right last">
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>"></dt>
          <dd>
            <strong>Plugins publicitarios </strong>que tienen anuncios que te siguen a todas partes cuando navegas por internet.
            <?php if($tagShow):?><span>mejorado en un 50%</span><?php endif;?>
          </dd>
        </dl>
      </div>
      <div class="message2 clearfix">
        <h3>2. Adem??s de los restos residuales, se pueden eliminar otros datos in??tiles para el PC</h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
          <dd><strong>Detecta autom??ticamente </strong></dd>
          <dd>los restos de archivos en tu PC que hab??a antes de que instalaras IObit Uninstaller 10 PRO y te ayuda a eliminarlos con tan solo un clic.</dd>
          <dd><span>??nico en el mercado</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
          <dd><strong>Limpieza autom??tica </strong></dd>
          <dd>de datos de programas in??tiles desinstalados a trav??s del m??todo est??ndar de Windows u otros desinstaladores.</dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
          <dd><strong>Revierte los cambios</strong></dd>
          <dd>que un programa realiza en tu sistema despu??s de su instalaci??n autom??ticamente.</dd>
          <dd><span>??nico en el mercado</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="intro2">
    <div class="wrapper">
      <h3>3. A??n hay m??s beneficios que no vas a querer perderte</h3>
      <img src="<?php echo getStaticUrl('images/intro2-message.png')?>" class="img-box"> 
      <ul>
        <li>Actualiza programas desactualizados con un solo clic.</li>
        <li>Escanea y limpia autom??ticamente archivos residuals despu??s de la <br> desinstalaci??n. <?php if($tagShow):?><span>mejorado en un 30%</span><?php endif;?> </li>
        <li>Elimina paquetes de aplicaciones de windows no deseadas.</li>
        <li>Actualiza autom??ticamente cuando hay una nueva versi??n disponible.</li>
        <li>Soporte t??cnico premium disponible 24/7.</li>
      </ul>
    </div>
  </div>
  <div class="gift-message">
    <div class="wrapper clearfix">
      <h2>Tambi??n hemos preparado 2 potentes herramientas en forma de regalo para darte las gracias</h2>
      <div class="gift clearfix">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
        <dl>
          <dt>
            <strong>0???</strong> <del>29,99???</del> <br>
            <span>1 A??o / 1 PC</span>
          </dt>
          <dd>Maximiza la optimizaci??n <br> del Disco Duro para un PC <br> m??s r??pido.</dd>
        </dl>
      </div>
      <div class="gift clearfix">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
        <dl>
          <dt>
            <strong>0???</strong> <del>39,95???</del> <br>
            <span>1 A??o / 1 PC</span>
          </dt>
          <dd>Nunca m??s te preocupes por <br> los ladrones de datos o <br> p??rdidas de tu privacidad.</dd>
        </dl>
      </div>
    </div>
  </div>
	<!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Comentarios</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>Rese??a de los medios</h3>
              <p>
                IObit Uninstaller es ligero y su interfaz es amigable. Usuarios pueden descargarlo r??pidamente. Esta herramienta de desinstalaci??n se pueden clasificar como el mejor programa de desinstalaci??n y permite a los usuarios desinstalar al por mayor. Ofrecer?? a los usuarios un "Escaneo potente" para operar m??s profundo y buscar restos de programas desinstalados. En general, este desinstalador cumple lo que promete: desinstalaci??n completa. El rendimiento hace esta peque??a herramienta de desinstalaci??n valer la pena conservar.
              </p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
            <dd>
              <h3>Comentarios de los usuarios</h3>
              <p>
                He usado los programas de IObit durante a??os muy satisfactoriamente y por ello sigo usando su software. En el pasado he trabajado arreglando port??tiles y m??viles (android) y siempre les he dejado instalados varios programas de IObit. Me acuerdo decirles a mis clientes que pulsar??n el bot??n ???C??? de vez en cuando para corregir algunos problemas y acelerar sus port??tiles, m??viles y ordenadores. : )
                Recomiendo el desinstalador especialmente, (la ??ltima versi??n) ya que es un programa de confianza que elimina por completo los programas m??s obstinados. M??s importante a??n, es capaz de eliminar c??digo ???escondido??? que el programador ten??a intenci??n de dejar en tu sistema para que luego te lleguen anuncios de reinstalaci??n.
                Todos los productos de IObit son de confianza y f??ciles de usar y los recomiendo para cualquier ordenador.
              </p>
              <h4>Jeff A Watts</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>Comentarios de los usuarios</h3>
              <p>
                El desinstalador de IObit es excelente y tiene todo lo que uno puede esperar. Me encanta el hecho de que desinstala todos los restos y fragmentos. Tambi??n incluye un actualizador de software que me recuerda cada vez que es necesario actualizar un programa, y el hecho de que tambi??n desinstala paquetes enteros de programas lo convierte en un ganador para m??. De hecho es b??sicamente todo lo que uno necesita para tener el ordenador a punto.
              </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>Comentarios de los usuarios</h3>
              <p>
                El desinstalador de IObit es el mejor software para eliminar programas de tu ordenador, es r??pido y muy efectivo y no tiene nada que ver con el desinstalador predeterminado de Windows. Verdaderamente elimina todos los restos de programas para que no dejen nada en tu ordenador. Lo llevo usando unos cuantos meses y ya no s?? c??mo vivir sin ??l as?? que se lo he recomendado a todos mis amigos y a mi familia.
                Gracias IObit, vuestro desinstalador es fant??stico.
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro ??u??i??"/></dt>
            <dd>
              <h3>Comentarios de los usuarios</h3>
              <p>
                IObit Uninstaller se pone mejor con cada actualizaci??n. Ya lo he utilizado m??s de 3 a??os. El programa se descarga r??pidamente y posee una interfaz de usuario simple. Algunas funciones que utilizo regularmente son Desinstalaci??n de lotes, Escaneo Profundo, Destruir Archivos y funci??n de Recientemente Instalados que me permite tener un acceso r??pido a los programas que he instalado recientemente o que no funcionan correctamente. Es f??cil de controlar los elementos de inicio para arranque de PC m??s r??pido.
              </p>
              <h4>Lovro ??u??i??</h4>
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
	<div class="awards">
		<div class="wrapper">
			<h2>Premios a Nivel Mundial</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
          <dd>
            <h4>Pru??belo SIN RIESGO - con nuestra garant??a de devoluci??n <br> de dinero de 60 d??as</h4>
            <p>
              Estamos seguros de que activando la versi??n PRO te olvidar??s de tus
              dolores de cabeza a la hora de actualizar tus drivers por un precio
              asequible
            </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Aceptamos</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
        </dl>
      </div>
			<dl class="annotation">
				<dt>Nota:</dt>
				<dd>
          1*.Estos programas promocionales est??n sujetos a cambios sin previo aviso, dependiendo de nuestra discreci??n exclusiva en cualquier momento.
				</dd>
        <dd>
          2*.Datos pueden variar basados en diferentes sistemas u ordenadores.
        </dd>
			</dl>
			<p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl"> 
        <img src="<?php echo getStaticUrl('images/fl-ghost.png')?>" class="ghost"/>
        <span class="disappear"></span>
        </div>
      <div class="message">
        <div class="number">
          <span>Obt??n regalos gratis, s??lo quedan </span>
          <div id="fReduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
        </div>
        <p><strong class="viewNum"><?php echo $viewNum;?> </strong> usuarios est??n viendo esta p??gina ahora</p>
      </div>
      <div class="price">
        <a href="https://www.iobit.com/buy.php?product=es-iu103pcpfsd1599&ref=es_iu103pcpfsd1599launch<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_iu "
           onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iupurchase-newlaunch-es');"
           class="buybtn">Obtener mis regalos</a>
      </div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>
  var refStr = "<?php echo $refStr;?>";
  var iuImg = "<?php echo getStaticUrl('images/iu-box-soldout.png')?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>