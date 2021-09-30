<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function get_line($file, $line)
{
  $fp = fopen($file, 'r');
  $i = 0;
  while (!feof($fp)) {
    $i++;
    $c = fgets($fp);
    if ($i == $line) {
      return $c;
      break;
    }
  }
}

$name=explode(' ',trim(get_line('data/jan_name.txt',rand(1,20))));
$firstName=preg_replace("/(.{2})(.)*/",'${1}'.str_repeat('*',strlen($name[0])-2),$name[0]);
$lastName=empty($name[1])?'':preg_replace("/(.{2})(.)*/",'${1}'.str_repeat('*',strlen($name[1])-2),$name[1]);

if($_GET['action']=='getSales'){
  $packsNum=98;
  if($_GET['status']==2){
    $date = $_GET['d'];
    $c_name = 'esdbjanp' . $date;
    if (!isset($_COOKIE[$c_name])) {
      $packsNum = 97;
    } else {
      if (intval($_COOKIE[$c_name]) <= 41) {
        $packsNum = 41;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
    }
    setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
  }
  echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'packsNum'=>$packsNum));
  exit();
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if($_GET['to']=='purchase-6'){
  $ver=$_GET['ver'];
  if(preg_match('/^([0-9])\.([0-9])\.[0-9]\.[0-9]{3}/',$ver,$matches)){
    $verStr=$matches[1].$matches[2];
    $refStr.='-'.$verStr;
  }
}
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>Ofertas del día, hasta 85% de descuento en Driver Booster PRO – IObit 2018</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
    <script type="text/javascript">refStr='<?php echo $refStr;?>';</script>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<div class="banner">
  <div class="wrapper">
    <a href="https://www.iobit.com/" class="logo" target="_blank">IObit</a>
    <h1>VENTA RELÁMPAGO</h1>
    <h2>Superior redimiento y estabilidad para PC con drivers actualizados </h2>
    <div class="box three-box exceed">
      <div class="message">
        <div class="img">
          <img src="<?php echo getStaticUrl('images/three-db-box.png')?>" alt="">
        </div>
        <dl>
          <dt><strong>19,99€</strong> <del>144,79€</del></dt>
          <dd><a href="#" class="buybtn">Comprar ahora</a></dd>
        </dl>
      </div>
    </div>
    <div class="box three">
       <h3><i></i><strong>03</strong> h : <strong>03</strong> min : <strong>03</strong> s : <strong>03</strong> ms*</h3>
      <div class="message">
        <div class="img">
          <span>IObit Uninstaller PRO</span>
        </div>
        <dl>
          <dt><strong>19,99€</strong> <del>104,84€</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=es-db63pciu1999&ref=es_db63pciu1999purchase1804<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciu1804-es')" class="buybtn">Comprar ahora</a></dd>
        </dl>
      </div>
    </div>
    <div class="box">
      <div class="message">
        <div class="img">
          <span>-50%</span>
        </div>
        <dl>
          <dt><strong>17,99€</strong> <del>35,98€</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=es-db61pc1799&ref=es_db61pc1799purchase1804<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1804-es')" class="buybtn">Comprar ahora</a></dd>
        </dl>
      </div>
    </div>
   </div>
</div>
<!--end banner-->
<div class="db-message wrapper clearfix">
  <h2>¡Obtén el máximo rendimiento para tu PC con los últimos drivers!</h2>
  <p><img src="<?php echo getStaticUrl('images/win.png')?>" alt="" /> Compatible con Windows 10 </p>
  <img src="<?php echo getStaticUrl('images/db-message.jpg')?>" alt="" class="img-box"/>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
    <dd>Actualiza e instala más de 3,000,000 drivers obsoletos, <br>desaparecidos y defectuosos.</dd>
  </dl>
  <dl>
    <dt class="nuevo"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
    <dd>Mayor base de datos incluidos nuevos drivers gráficos <br> NVIDIA y nuevo AMD Radeon Software Adrenalin Edition. </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
    <dd>Actualización más segura con los drivers calificados <br> sólo por WHQL.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
    <dd>Hace copia de seguridad de todos los drivers <br> automáticamente para restauración segura. </dd>
  </dl>
</div>
<!--container-->
<div class="gift-intro">
  <div class="wrapper">
  	<h2>¡Mejor regalo gratis sólo para la oferta de 3PCs/ 1año!</h2>
    <div class="gift">
      <img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt="">
      <dl>
        <dt>
          <h3>IObit Uninstaller PRO</h3>
          <del>29,99€</del> <strong>0€</strong> <span>1 año / 1 PC</span>
        </dt>
        <dd>El mejor desinstalador para remover programs <br> y plugins maliciosos.</dd>
      </dl>
    </div>
    <div class="gift sd exceed">
      <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
      <dl>
        <dt>
          <h3>Smart Defrag</h3>
          <del>29,99€</del> <strong>0€</strong> <span>1 año / 1 PC</span>
        </dt>
        <dd>Máxima velocidad de acceso a archivos.</dd>
        <dd>Desfragmentación de disco segura y estable.</dd>
      </dl>
    </div>
    <div class="price">
      <p><strong>19,99€</strong> <del>104,84€</del></p>
      <a href="https://www.iobit.com/buy.php?product=es-db63pciu1999&ref=es_db63pciu1999purchase1804<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciu1804-es')" class="buybtn orange">Comprar ahora</a>
    </div>
  </div>
</div>
<div class="awrad wrapper">
  <h2>Recomendado y premiado por estos Medios</h2>
  <img src="<?php echo getStaticUrl('images/awrad.jpg')?>" alt="">
</div>
<!--end container-->
<div class="wrapper review">
    <div class="content">
       <dl class="active">
        <dt><h3>Reseña de los Medios</h3></dt>
        <dd>
          <h4>“IObit ha hecho muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus controladores, es una de las mejores utilidades.”</h4>
        </dd>
        <dd>“Driver Booster ofrece múltiples funciones atractivas y precio de licencia es muy asequible. Además, una interfaz personalizable hace un buen trabajo de mostrar la información específica relacionada con hardware.”</dd>
      </dl>
      <dl>
        <dt><h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Mi PC es más rápido, más seguro y más nuevo que hace ocho meses."</h4>
        </dd>
        <dd>"Con Driver Booster, puedo encontrar fácilmente los controladores de dispositivos obsoletos y actualizarlos fácilmente. Además, me ayuda a reparar los errores de sonido, los de red y los de dispositivo etc. No lo creo antes de usar, pero después de probarlo me encanta. Mi PC es más rápido, más seguro y más nuevo que hace ocho meses. Muchas gracias, IObit."</dd>
      </dl>
      <dl>
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
      <li class="current">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC.MAGAZINE"></div>
        <p>PC.MAGAZINE</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
        <p>Myo Thuya</p>
      </li>
      <li>
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
				<th colspan="2" class="text">Ver la comparación entre FREE y PRO:</th>
				<th class="itemb">Driver Booster FREE</th>
				<th class="itema">Driver Booster PRO</th>
			</tr>
		</thead>
		    <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_01.png"></td>
            <td class="virtue">
              <span>Desbloquea límite de velocidad de actualización de controlador</span>
              <img src="<?php echo $pResUrl; ?>images/migliorato.png">
            </td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_02.png"></td>
            <td class="virtue">
              <span>Prioridad para actualizar más controladores obsoletos y raros</span>
              <img src="<?php echo $pResUrl; ?>images/novedad.png">
            </td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_03.png"></td>
            <td class="virtue">Reduce bloqueos y fallos del sistema para mejor rendimiento con mayor base de datos</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_04.png"></td>
            <td class="virtue">Descarga e instala automáticamente controladores en el tiempo de inactividad del sistema</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_05.png"></td>
            <td class="virtue">Hace copia de seguridad de todos los controladores automáticamente para restauración segura</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_12.png"></td>
            <td class="virtue mejor">
              <span>Mejora el rendimiento del juego por detener procesos innecesarios</span>
              <img src="<?php echo $pResUrl; ?>images/novedad.png">
            </td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_13.png"></td>
            <td class="virtue mejor">
              <span>Prioridad de actualizar Driver de Game Ready para mejor experiencia del juego   </span>
              <img src="<?php echo $pResUrl; ?>images/novedad.png">
            </td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_06.png"></td>
            <td class="virtue mejor">
              <span>Prioridad de actualizar componentes de juego para mejor experiencia de juego</span>
              <img src="<?php echo $pResUrl; ?>images/migliorato.png">
            </td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_07.png"></td>
            <td class="virtue">Detecta y repara efectivamente errores de dispositivos </td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_08.png"></td>
            <td class="virtue">Actualización automática a la última versión</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_09.png"></td>
            <td class="virtue">24/7 soporte técnico gratuito para demanda</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_10.png"></td>
            <td class="virtue">Escanea e identifica automáticamente controladores obsoletos, desaparecidos y defectuosos</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_11.png"></td>
            <td class="virtue">Descarga y actualiza los controladores obsoletos con un solo clic</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
        </tbody>
		<tfoot>
			<tr>
				<th colspan="2"></th>
				<th class="itemb">Driver Booster FREE</th>
				<th class="itema">
					Driver Booster PRO
        </tr>
		</tfoot>
  </table>
</div>
<div class="bottom-buy">
  <div class="wrapper">
    <div class="img-box"></div>
    <ul>
      <li class="three-box exceed">  <strong>-85%</strong> <span>3 PCs / 1 año + PF SD Gratis  </span></li>
      <li class="three active"> <strong>-80%</strong> <span>3 PCs / 1 año + IU Gratis  </span></li>
      <li> <strong>-50%</strong> <span>1 PC / 1 año  </span></li>
    </ul>
    <dl>
      <dt><strong>19,99€</strong> <del>104,84€</del></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=es-db63pciu1999&ref=es_db63pciu1999purchase1804<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciu1804-es')" class="buybtn orange">Comprar ahora</a></dd>
    </dl>
  </div>
</div>
<div class="footer">
  <div class="payment wrapper clearfix">
    <dl class="visa">
      <dt><img src="<?php echo $pResUrl; ?>images/payment.png" alt=""></dt>
      <dd><strong>Formas de pago</strong></dd>
      <dd>Aceptamos varios formas de pago por <br> su pedido</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt="" /></dt>
      <dd><strong>Garantía de reembolso</strong></dd>
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
  <p class="copyright">Copyright  2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
</div>
<div class="floatlayer">
  <h4><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span>
  </h4>
  <p>ha comprado 3 PCs / 1 año</p>
  <i class="close">×</i>
</div>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</html>