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
	<title>Hasta 85% de Driver Booster PRO para animar a la Copa Mundial 2018 ??? IObit</title>
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
    <h1>VENTA REL??MPAGO</h1>
    <h2>Oferta especial hasta 85% de descuento para animar a los equipos </h2>
    <div class="box three-box exceed">
      <div class="message">
        <div class="img">
          <img src="<?php echo getStaticUrl('images/three-db-box.png')?>" alt="">
        </div>
        <dl>
          <dt><strong>19,99???</strong> <del>144,79???</del></dt>
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
          <dt><strong>19,99???</strong> <del>104,84???</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=es-db53pciu1999&ref=es_db53pciu1999purchase1806wc<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciu1806wc-es')" class="buybtn">Comprar ahora</a></dd>
        </dl>
      </div>
    </div>
    <div class="box">
      <div class="message">
        <div class="img">
          <span>-50%</span>
        </div>
        <dl>
          <dt><strong>17,99???</strong> <del>35,98???</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=es-db51pc1799&ref=es_db51pc1799purchase1806wc<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1pc1806wc-es')" class="buybtn">Comprar ahora</a></dd>
        </dl>
      </div>
    </div>
   </div>
</div>
<!--end banner-->
<div class="db-message wrapper clearfix">
  <h2>??Disfruta de la Copa Mundial 2018 con los drivers actualizados!</h2>
  <p><img src="<?php echo getStaticUrl('images/win.png')?>" alt="" /> Compatible con Windows 10 </p>
  <img src="<?php echo getStaticUrl('images/db-message.jpg')?>" alt="" class="img-box"/>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
    <dd>Actualiza e instala m??s de 1,000,000 drivers obsoletos, <br>desaparecidos y defectuosos.</dd>
  </dl>
  <dl>
    <dt class="nuevo"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
    <dd>Mayor base de datos incluidos nuevos drivers gr??ficos <br> NVIDIA y nuevo AMD Radeon Software Adrenalin Edition. </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
    <dd>Actualizaci??n m??s segura con los drivers calificados <br> s??lo por WHQL.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
    <dd>Hace copia de seguridad de todos los drivers <br> autom??ticamente para restauraci??n segura. </dd>
  </dl>
</div>
<!--container-->
<div class="gift-intro">
  <div class="wrapper">
  	<h2>??Mejor regalo gratis para los fanes del f??tbol!</h2>
    <div class="gift">
      <img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt="">
      <dl>
        <dt>
          <h3>IObit Uninstaller PRO</h3>
          <del>29,99???</del> <strong>0???</strong> <span>1 a??o / 1 PC</span>
        </dt>
        <dd>El mejor desinstalador para remover programs <br> y plugins maliciosos.</dd>
      </dl>
    </div>
    <div class="gift sd exceed">
      <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
      <dl>
        <dt>
          <h3>Smart Defrag</h3>
          <del>29,99???</del> <strong>0???</strong> <span>1 a??o / 1 PC</span>
        </dt>
        <dd>M??xima velocidad de acceso a archivos.</dd>
        <dd>Desfragmentaci??n de disco segura y estable.</dd>
      </dl>
    </div>
    <div class="price">
      <p><strong>19,99???</strong> <del>104,84???</del></p>
      <a href="https://www.iobit.com/buy.php?product=es-db53pciu1999&ref=es_db53pciu1999purchase1806wc<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciu1806wc-es')" class="buybtn orange">Comprar ahora</a>
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
        <dt><h3>Rese??a de los Medios</h3></dt>
        <dd>
          <h4>???IObit ha hecho muchas utilidades y Driver Booster PRO, que actualiza autom??ticamente tus controladores, es una de las mejores utilidades.???</h4>
        </dd>
        <dd>???Driver Booster ofrece m??ltiples funciones atractivas y precio de licencia es muy asequible. Adem??s, una interfaz personalizable hace un buen trabajo de mostrar la informaci??n espec??fica relacionada con hardware.???</dd>
      </dl>
      <dl>
        <dt><h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Mi PC es m??s r??pido, m??s seguro y m??s nuevo que hace ocho meses."</h4>
        </dd>
        <dd>"Con Driver Booster, puedo encontrar f??cilmente los controladores de dispositivos obsoletos y actualizarlos f??cilmente. Adem??s, me ayuda a reparar los errores de sonido, los de red y los de dispositivo etc. No lo creo antes de usar, pero despu??s de probarlo me encanta. Mi PC es m??s r??pido, m??s seguro y m??s nuevo que hace ocho meses. Muchas gracias, IObit."</dd>
      </dl>
      <dl>
        <dt><h3>Comentario de usuario</h3></dt>
        <dd><h4>"Yo recomiendo encarecidamente Driver Booster, que le ayuda a actualizar los controladores r??pidamente y f??cilmente."</h4></dd>
        <dd>"Driver Booster es una aplicaci??n incre??ble. Este programa para los usuarios que tienen muchas aplicaciones y dispositivos y no tienen tiempo para actualizarlos de forma manual, recomiendo encarecidamente Driver Booster, que le ayuda a actualizar los controladores r??pidamente y f??cilmente."</dd>
      </dl>
      <dl>
       <dt><h3>Comentario de usuario</h3></dt>
        <dd>
          <h4>"Funciona perfectamente. F??cil de usar, informativo y intuitivo. "</h4>
        </dd>
        <dd>"Este es uno de los mejores programas de actualizador de controladores. Microsoft incluso me ha llevado por mala direcci??n que actualizaciones no funcionar??n con mi PC. Este programa sab??a qu?? actualizaci??n necesitaba sin conflictos. Funcion?? perfectamente. F??cil de usar, informativo y intuitivo. Este se quedar?? en mi caja de herramienta para siempre... buena herramienta."</dd>
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
				<th colspan="2" class="text">Ver la comparaci??n entre FREE y PRO:</th>
				<th class="itemb">Driver Booster FREE</th>
				<th class="itema">Driver Booster PRO</th>
			</tr>
		</thead>
		    <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_01.png"></td>
            <td class="virtue">
              <span>Desbloquea l??mite de velocidad de actualizaci??n de controlador</span>
              <img src="<?php echo $pResUrl; ?>images/migliorato.png">
            </td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_02.png"></td>
            <td class="virtue">
              <span>Prioridad para actualizar m??s controladores obsoletos y raros</span>
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
            <td class="virtue">Descarga e instala autom??ticamente controladores en el tiempo de inactividad del sistema</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_05.png"></td>
            <td class="virtue">Hace copia de seguridad de todos los controladores autom??ticamente para restauraci??n segura</td>
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
            <td class="virtue">Actualizaci??n autom??tica a la ??ltima versi??n</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_09.png"></td>
            <td class="virtue">24/7 soporte t??cnico gratuito para demanda</td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/fork.png"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/draw.png"></td>
          </tr>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop_db_i_10.png"></td>
            <td class="virtue">Escanea e identifica autom??ticamente controladores obsoletos, desaparecidos y defectuosos</td>
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
      <li class="three-box exceed">  <strong>-85%</strong> <span>3 PCs / 1 a??o + PF SD Gratis  </span></li>
      <li class="three active"> <strong>-80%</strong> <span>3 PCs / 1 a??o + IU Gratis  </span></li>
      <li> <strong>-50%</strong> <span>1 PC / 1 a??o  </span></li>
    </ul>
    <dl>
      <dt><strong>19,99???</strong> <del>104,84???</del></dt>
      <dd><a href="https://www.iobit.com/buy.php?product=es-db53pciu1999&ref=es_db53pciu1999purchase1806wc<?php echo $refStr;?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase3pciu1806wc-es')" class="buybtn orange">Comprar ahora</a></dd>
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
      <dd><strong>Garant??a de reembolso</strong></dd>
      <dd>Si no est?? satisfecho en los primeros <br> 60 d??as, le devolveremos su dinero</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><strong>Pago seguro</strong></dd>
      <dd>100% pago seguro para su pedido</dd>
    </dl>
    <dl class="servicion">
      <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
      <dd><strong>Servicio al cliente</strong></dd>
      <dd>24/7 Soporte T??cnico gratis</dd>
    </dl>
  </div>
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>*.Estos programas promocionales est??n sujetos a cambios sin previo aviso, dependiendo de nuestra discreci??n exclusiva en cualquier momento.</dd>
  </dl>
  <p class="copyright">Copyright  2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
</div>
<div class="floatlayer">
  <h4><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span>
  </h4>
  <p>ha comprado 3 PCs / 1 a??o</p>
  <i class="close">??</i>
</div>
<script type="text/javascript">refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</html>