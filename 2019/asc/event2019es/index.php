<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Correger los Servicios Remotos de Escritorio y la Vulnerabilidad de Ejecución Remota de Código con Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
 <div class="header">
   <div class="wrapper">
     <a href="https://www.iobit.com/es/index.php" target="_blank" class="logo"> IObit</a>
     <h3>¡Atención! Se ha encontrado un gran fallo de seguridad similar a  WannaCry</h3>
     <p> <strong>El  14 de Mayo de  2019</strong>, Microsoft lanzó un parche para corregir la vulnerabilidad en la ejecución remota del código en los Servicios Remotos de Escritorio, la cual afecta a Windows XP, Windows 7 y otros sistemas operativos anteriores. Esta vulnerabilidad sucede independientemente de la interacción del usuario. En otras palabras, una vez que el hacker ha entrado, puede tomar el control total del ordenador, ver, cambiar o eliminar datos e incluso paralizar completamente el sistema. Peor aún, los sistemas afectados pueden propagar el virus de un ordenador a otro de manera similar al WannaCry malware que se expandió por todo el mundo en 2017.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
   <p>Es por esto que recomendamos a nuestros usuarios actualizar a Advanced SystemCare PRO para reducir el riesgo de infectarse. Advanced SystemCare PRO puede ofrecer doble protección aplicando actualizaciones de Windows importantes y evitando ataques futuros reforzando el sistema y defendiéndolo de amenazas inminentes. ¡Mejóralo ahora con un <strong>65% de descuento! </strong></p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="Advanced SystemCare PRO" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=es-asc12a1699-ac&ref=es_asc1699event2019<?php echo $refStr;?>&refs=es_purchase_asc " onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-event2019-es')" class="buybtn">Mejóralo ahora – <strong>16,99€</strong></a></dt>
       <dd>1 año de suscripción / 3 PCs</dd>
       <dd><p>Ahorra  <strong> 33€</strong> Solo para Usuarios de IObit</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Funciones más avanzadas de Advanced SystemCare PRO que mejoran Tu Ordenador</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Limpia automática y profundamente registros y datos de navegación para mejorar el rendimiento y la protección del sistema.</p>
     </li>
     <li class="center">
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimiza las opciones del navegador para una conexión a internet un 300% *más rápida.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Mantén tus datos sensibles como los datos del e-mail, contactos, Dropbox, Onedrive, etc., lejos de amenazas y accesos secretos.</p>
     </li>
   </ul>
   <h3>Mantente alejado de Ataques de Ciberseguridad y Corrige Debilidades del Sistema ahora</h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=es-asc12a1699-ac&ref=es_asc1699event2019<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-event2019-es')" class="buybtn">Mejóralo ahora – <strong>16,99€</strong></a></dt>
     <dd>1 año de suscripción / 3 PCs</dd>
     <dd><p>Ahorra  <strong> 33€</strong> Solo para Usuarios de IObit</p></dd>
   </dl>
 </div>
 <div class="footer">
   Note:*. Los Datos pueden variar según los diferentes sistemas u ordenadores. <span>© 2005 - <?php echo date('Y')?>  Información de Tecnología IObit. Todos los Derechos Reservados</span>
 </div>
</body>
</html>