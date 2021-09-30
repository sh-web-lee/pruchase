<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esdb8preorderpre_p' . $date;
  $c_name_t = 'esdb8preorderpre_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = rand(64, 98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}

$viewNum = rand(99, 156);
if ($_GET['action'] == 'getViewNum') {
  echo $viewNum;
  exit();
}
include $pRootUrl . 'include/common.inc.php';

function paramDeal($num)
{
  return (intval($num) > 0) ? ('<span class="dataNum">' . number_format(intval($num)) . '</span>') : '';
}

$paramData = json_decode(base64_decode($_GET['udata']));

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
$refStr .= empty($_GET['instd']) ? '' : ('-' . $_GET['instd']);
$refStr .= empty($_GET['finstd']) ? '' : ('-' . $_GET['finstd']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-' . $_GET['st']);
?>
<!DOCTYPE html>
<html lang="es">

<head>
  <meta charset="UTF-8">
  <title>Paga 0€ para conseguir la última versión de Driver Booster 8 PRO - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
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
        <p><img src="<?php echo getStaticUrl('images/db-icon.png') ?>" /> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="Driver Booster PRO" />
        </div>
        <div class="right">
          <p>Comienza la preventa</p>
          <h2>Actualiza a la última edición PRO</h2>
          <h4>para un máximo rendimiento del PC y juegos</h4>
          <div class="price">
            <span>Precio de <br>preventa:</span>
            <strong>0€ <sup>*</sup></strong>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=es-db8preorder&ref=es_db8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_db" 
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderpre-es');">
              Resérvalo ahora
            </a>
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
    <div class="message01 wrapper">
      <div class="title">
        <h4>Driver Booster 8 PRO</h4>
        <h2>ahora es mejor</h2>
      </div>
      <div class="line"></div>
      <div class="message-box">
        <ul class="img-box">
          <li class="icon01">
            <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="" >
          </li>
          <li class="icon02">
            <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="">
          </li>
        </ul>
        <dl class='one'>
          <dt>
            <i></i>
            <h3>
              Base de datos de controladores<br> <em>más grande</em>
              <span class='soportes red_soportes'>50% <img src="<?php echo getStaticUrl('images/subir.png') ?>" alt=""></span>                          
            </h3>
          </dt>
          <dd>
            Ahora soporta más de 4.500.000 controladores y proporciona actualizaciones que coinciden con precisión para todos los controladores desactualizados, no coincidentes o faltantes.
          </dd>
        </dl>
        <dl class='two'>
          <dt>
            <i></i>
            <h3>
              Modo de actualización<br> <em>más inteligente</em>
              <span class='soportes green_soportes'>Nuevo</span>
            </h3>
          </dt>
          <dd>
            Proporciona la actualización de los controladores más estables diseñados para quién prioriza la estabilidad del PC o los controladores más recientes diseñados para quién prioriza las nuevas características.
            <div class='market'>Único en el mercado</div>
          </dd>
        </dl>
        <dl class='three'>
          <dt> 
            <i></i>
            <h3>
              Actualización sin conexión<br> <em>más fácil</em>
              <span class='soportes green_soportes'>Nuevo</span>
            </h3> 
          </dt>
          <dd>
            Actualiza e instala controladores de red sin conexión a Internet, especialmente para el sistema reinstalado o actualizado.
          </dd>
        </dl>
        <dl class='four'>
          <dt>
            <i></i> 
            <h3>
              Copia de seguridad del controlador<br> <em>más segura</em>
              <span class='soportes red_soportes'>Mejorado</span>
            </h3>
          </dt>
          <dd>
            La totalmente optimizada copia de seguridad del controlador garantiza una mayor tasa de éxito de la copia de seguridad y restauración del controlador en Windows 10.
          </dd>
        </dl>
      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Disfrutarás todas las funciones PRO</h2>
        <div class='current_Version'>
          Tu versión actual
        </div>
        <div class='driver_Booster'>

          <p>
            Driver Booster 8<br /> PRO<br />
            <span class='soportes green_soportes'>Nuevo</span>
          </p>
        </div>
        <ul class='benefits-ul'>
          <li>
            <i class='_icon'></i>
            <span>Escaneo automático de controladores desactualizados y faltantes</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>1 clic para actualizar los controladores obsoletos</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Gran base de datos con soporte para más de 4.500.000 controladores</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Actualiza e instala controladores de red sin conexión</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
          <li class="five">
            <i class='_icon'></i>
            <span>Actualización automática de controladores cuando el<br> sistema está inactivo</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Velocidad completa de descarga y actualización sin límite</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li class="five">
            <i class='_icon'></i>
            <span>Copia de seguridad automática del controlador y creación de un<br> punto de restauración</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Corrige fácilmente los errores del dispositivo para un mejor rendimiento</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Prioridad para actualizar los controladores de estabilidad</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Componentes necesarios para un juego más fluido</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Prioridad para actualizar los últimos controladores para juegos</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
        </ul>

      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>Es el actualizador de controladores más importante del mundo</h2>
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
          recomendaciones<br> de medios
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
              <dd>
                "IObit ofrece muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."
              </dd>
            </dl>
            <dl>
              <dt>Comentarios del usuario</dt>
              <dd>
                "Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB7 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."
              </dd>
            </dl>
            <dl>
              <dt>Comentarios del usuario</dt>
              <dd>
                "Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"
              </dd>
            </dl>
            <dl>
              <dt>Comentarios del usuario</dt>
              <dd>
                "Verdaderamente el mejor actualizador de drivers del Mercado. Es fácil de usar, y tiene una interfaz simple que hace su trabajo mejor que cualquier aplicación que haya usado antes. Este programa se merece 5 estrellas, altamente recomendado!"
              </dd>
            </dl>
            <dl>
              <dt>Comentarios del usuario</dt>
              <dd>
                "Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."
              </dd>
            </dl>
          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/dunston-diaz.png') ?>" alt="Dunston Diaz"></div>
            <p>Dunston Diaz</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png') ?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png') ?>" alt="Carlos Alexandre Veríssimo"></div>
            <p>Carlos Alexandre Veríssimo</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt="Harold Barr"></div>
            <p>Harold Barr</p>
          </li>

        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Premios a Nivel Mundial</h2>
      <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
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
      <p>Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- float start -->
  <div class="floatlayer clearfix">
    <div class="wrapper clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/fl-db-box.png') ?>" alt="Driver Booster PRO" />
      </div>
      <div class="numbox fl">
        <h3>
          Ahora sólo quedan
          <span id="botNum" class="giftNum">
            <b class="nwrap"><b class="numlist"></b></b>
            <b class="nwrap"><b class="numlist"></b></b>
          </span>
          de 1000
        </h3>
      </div>
      <div class="price fr">
        <strong>0€ <sup>*</sup></strong>
        <span></span>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=es-db8preorder&ref=es_db8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_db" 
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderpre-es');">
          Resérvalo ahora
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->

  <script>
    refStr = '<?php echo $refStr; ?>';
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>