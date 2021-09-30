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

$refStr='';
if(in_array($_GET['st'],array('no_patch_asc','patch_installed_asc','no_patch_db','patch_installed_db','no_patch_imf',
    'patch_installed_imf'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Repara Intel Kernel Flaw y evita impacto de rendimiento con Advanced SystemCare PRO – IObit </title>
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
     <a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
     <h3>Estimados usuarios IObit,</h3>
     <p>¡Noticia de último momento! Los procesadores de la empresa Intel han sufrido una gran falla en el programa llamado Kernel. Los dos mayores riesgos de esta falla son Meltdown y Spectre. Meltdown por un lado almacena datos e información privada en las cuales las contraseñas están involucradas. Por otro lado, Spectre, posee información sobre bloques de datos e información de diferentes aplicaciones. Millones de ordenadores que poseen un procesador Intel podrían sufrir daños e infección de virus.</p>
   </div>
 </div>
 <div class="asc-message wrapper">
   <p>El equipo IObit también ha desarrollado un software para mantener a sus usuarios fuera de riesgo y se llama <strong>Advanced SystemCare PRO (ASC PRO)</strong> . El rediseño del procesador por parte de Intel contra la falla Kernel, afectará el rendimiento de los ordenadores con Windows 7, 8 y hasta Windows 10 desde un 5% hasta un 30%. <strong>Nuestro equipo recomienda a los usuarios IObit ejecutar Advanced SystemCare PRO.</strong></p>
   <div class="buy-content">
     <img src="<?php echo getStaticUrl('images/asc-message.png')?>" alt="" class="asc-box">
     <dl class="price">
       <dt><a href="https://www.iobit.com/buy.php?product=es-asc113pc1799&ref=es_asc1799event2018a<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-event1-es');" class="buybtn">Comprar ahora - <strong>17,99€</strong></a></dt>
       <dd>1 año de suscripción / 3 PCs </dd>
       <dd><p>Ahorra 32€ para sólo estimados usuarios IObit</p></dd>
     </dl>
   </div>
 </div>
 <div class="asc-introduce wrapper">
   <h3>Las funciones de Advanced SystemCare PRO optimizarán tu ordenador</h3>
   <ul class="clearfix">
     <li>
       <img src="<?php echo getStaticUrl('images/icons01.png')?>" alt="">
       <p>Limpia profunda y automáticamente registros y búsquedas para garantizar el rendimiento de tu PC.</p>
     </li>
     <li>
       <img src="<?php echo getStaticUrl('images/icons02.png')?>" alt="">
       <p>Optimiza la configuración del navegador para una conexión a Internet hasta 300%* más rápida.</p>
     </li>
    <li>
       <img src="<?php echo getStaticUrl('images/icons03.png')?>" alt="">
       <p>Protege automáticamente tu ordenador según lo programado sin molestias.</p>
     </li>
   </ul>
   <h3>Protégete de la falla Kernel y de tu lento rendimiento en los ordenadores. !Ahora!  </h3>
   <dl class="price">
     <dt><a href="https://www.iobit.com/buy.php?product=es-asc113pc1799&ref=es_asc1799event2018b<?php echo $refStr;?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase-event1-es');" class="buybtn">Comprar ahora - <strong>17,99€</strong></a></dt>
     <dd>1 año de suscripción / 3 PCs </dd>
     <dd><p>Ahorra 32€ para sólo estimados usuarios IObit </p></dd>
   </dl>
 </div>
 <div class="footer">
   Nota:*Datos pueden variar basados en diferentes sistemas o ordenadores. 
   <p>© 2005 - <?php echo date('Y')?> Tecnología Informática IObit. Todos los derechos reservados.</p>
 </div>
</body>
</html>