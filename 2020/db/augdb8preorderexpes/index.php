<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esdbexp_p' . $date;
  $c_name_t='esdbexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$udate = empty($_GET['udata']) ? '' : $_GET['udata'];
$date_arr = json_decode(base64_decode(urldecode($udate)),true);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Paga 0€ para conseguir la última versión de Driver Booster 8 PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>Comienza la preventa</p>
          <h2>Prioridad para obtener DB8 PRO por 0€</h2>
          <h4>con la Mejor Edición PRO</h4>
          <div class="price">
            <span>Presale <br> Price:</span>
            <strong>0€ <sup>*</sup></strong>
            <a href="https://www.iobit.com/buy.php?product=es-db8preorder&ref=es_db8preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-es');" class="buybtn">Renovar ahora</a>
          </div>
          <div class="numbox">
            <h3>
              Sólo quedan 
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
            </h3>
            <div class="bar">
               <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="feature">
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Driver Booster PRO ya te ha ayudado:</h2>
      </div>
      <div class="line"></div>
      <ul class="message-box">
        <li data-name='default'>Actualizando  <strong class="updated"><?php echo empty($date_arr['UpdDrv'])? '': $date_arr['UpdDrv']; ?></strong> controladores importantes</li>
        <li data-name='default'>Corrigiendo  <strong class="fixed"><?php echo empty($date_arr['FixedErr'])? '': $date_arr['FixedErr']; ?></strong> problemas comunes de códigos de error  </li>
        <li data-name='default'>Actualizando  <strong class="game"><?php $UpdSum = $date_arr['UpdCmp'] + $date_arr['UpdRdy'];echo empty($UpdSum)? '': $UpdSum; ?></strong> componentes y controladores esenciales de juego </li>
      </ul>
      <div class="img-box">
        <span class="computer two" data-name='default'></span>
        <img src="<?php echo getStaticUrl('images/feature-02-icon.png')?>" alt="" class="icon three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon02.png')?>" alt="" class="icon01 three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon03.png')?>" alt="" class="icon02 three" data-name='default'>

      </div>
    </div>
    <div class="message01 wrapper">
      <div class="title">
        <h2>Ahora, disfrutarás mucho más</h2>
        <h4>con el último Driver Booster 8 PRO</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png')?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png')?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png')?>" alt="" class="icon02">
        </li>
         <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png')?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt><i></i>Base de datos de controladores más grande <span><em>50%↑</em></span></dt>
          <dd>
          Ahora soporta 4.500.000 controladores. Prioridad para detectar y actualizar todos los controladores desactualizados y más* controladores recientes y raros.
              <?php if(!empty($_GET['more'])) :?>
                  <p>* <strong><?php echo $_GET['more']; ?></strong> actualizaciones adicionales encontradas ahora</p>
              <?php endif;?>
          </dd>
        </dl>
        <dl>
          <dt><i></i>Actualizador de controladores sin conexión  <span class="market"><em>Nuevo</em></span></dt>
          <dd>Actualiza los controladores de red sin conexión a Internet, especialmente para el sistema reinstalado o actualizado.</dd>
        </dl>
        <dl>
          <dt><i></i>Controlador estable o el último controlador <span class="market_long"><em>único en el mercado</em></span></dt>
          <dd>Actualiza los controladores en función de la estabilidad o los más recientes, adaptados para satisfacer diferentes necesidades.</dd>
        </dl>
        <dl>
          <dt><i></i>Copia de seguridad de controlador más segura <span class="market"><em>Mejorado</em></span></dt>
          <dd>La totalmente optimizada copia de seguridad del controlador garantiza una mayor tasa de éxito de la copia de seguridad y restauración del controlador en Windows 10. </dd>
        </dl>
      </div>
    </div>
    
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <div class="title">
          <h2>Sin Driver Booster PRO,</h2>
          <h4>te enfrentas a:</h4>
        </div>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <p>La base de datos se reduce a <br> 3,000,000</p>
          </dd>
        </dl>
        <dl class="two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt="" ></dt>
          <dd>
            <p>Sin actualización y copia de seguridad automáticas del controlador</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt="" ></dt>
          <dd>
            <p>Sin actualización de componentes de juego</p>
          </dd>
        </dl>
        <dl class="four last" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt="" ></dt>
          <dd>
            <p>Sin aceleración de descarga de controladores</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>Es el mejor actualizador de controladores del mundo</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          descargas         
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Calificación del usuario
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          recomendaciones   <br> de medios
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Comentarios mediáticos</dt>
              <dd>"IObit ofrece muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."</dd>
            </dl>
            <dl>
              <dt>Comentarios del usuario</dt>
              <dd>"Verdaderamente el mejor actualizador de drivers del Mercado. Es fácil de usar, y tiene una interfaz simple que hace su trabajo mejor que cualquier aplicación que haya usado antes. Este programa se merece 5 estrellas, altamente recomendado!"</dd>
            </dl>
            <dl>
              <dt>Comentarios del usuario</dt>
              <dd>"Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."</dd>
            </dl>

            <dl>
              <dt>Comentarios del usuario</dt>
              <dd>"Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"</dd>
            </dl>
            <dl>
              <dt>Comentarios del usuario</dt>
              <dd>"Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB7 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."</dd>
            </dl>

          </div>
        </div>
        <ul>
           <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></div>
            <p>Carlos Alexandre Veríssimo</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></div>
            <p>Dunston Diaz</p>
          </li>
           
        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Premios a Nivel Mundial</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Nota:</dt>
      <dd>
      *. Al final del período de prueba gratuito de 30 días, se te cobrará 19,99€ a tu tarjeta de crédito o cuenta de PayPal automáticamente. ¡Este 73% de descuento del precio original de 74,85€ es un bono solo para pedidos anticipados!
      </dd>
      <dd>*. Si no estás satisfecho, puedes cancelar el pedido que realizaste dentro de los 30 días sin pagar una tarifa.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
      Ahora sólo quedan 
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>de 1000
      </h3>
    </div>
    <div class="price fr">
     <strong>€0 <sup>*</sup></strong>
     <span></span>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-db8preorder&ref=es_db8preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=es_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-es');">
           Renovar ahora
        </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>