<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

// $time = time();
// if(isset($_COOKIE['toreturn'])&&$time-$_COOKIE['toreturn']>86400){
//   $param = $_SERVER["QUERY_STRING"]?('?'.$_SERVER["QUERY_STRING"]):'';
//   header("Location:return.php?".$param);
//   exit;
// }else{
//   if(!isset($_COOKIE['toreturn'])) setcookie('toreturn',$time,$time+2592000);
// }

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
    $date = $_GET['d'];
    $cName = 'febofferes' . $date;
    $cookie = $_COOKIE[$cName];
    if ($cookie) {
        $packsNum = $_COOKIE[$cName];
        if ($packsNum > 5) {
            $packsNum--;
            setcookie($cName, $packsNum);
            if (rand(0, 100) % 2 == 0) {
                $packsNum = $packsNum + 1;
            }
        } else {
            $packsNum = 5;
        }
    } else {
        $packsNum = 50;
        setcookie($cName, $packsNum);
    }
    echo json_encode(array('packsNum' => $packsNum, 'viewNum' => $viewNum));
    exit();
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>90% de descuento y regalos para Driver Booster PRO en oferta de Navidad  – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper new_w">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      
    </h1>
    <div class="cont">
        <div class="left">
          <img class="offer-img" src="<?php echo $pResUrl; ?>images/offer.png" alt="">
          <p>3PCs / 1 año</p>
          <i class="add"></i>
        </div>
        <dl class="center soldout-box">
          <dt>Regalos gratis por tiempo limitado</dt>
          <ul>
            <li>
              <img src="<?php echo $pResUrl; ?>images/nav-0.png" alt="">
              <p>
                <span class="title">Protected Folder</span>
                <span class="mor"><b><span>0</span>€</b>&nbsp;<del>39.95€</del></span>
              </p>
            </li>
            <li>
              <img src="<?php echo $pResUrl; ?>images/nav-1.png" alt="">
              <p>
                <span class="title">Smart Defrag PRO</span>
                <span class="mor"><b><span>0</span>€</b>&nbsp;<del>29.99€</del></span>
              </p>
            </li>
            <li>
              <img src="<?php echo $pResUrl; ?>images/nav-2.png" alt="">
              <p>
                <span class="title">Software Updater PRO</span>
                <span class="mor"><b><span>0</span>€</b>&nbsp;<del>29.99€</del></span>
              </p>
            </li>
          </ul>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/lh.png" alt=""> Valor de <span>99,93€</span>
            <p>una vez al año, exclusiva para Navidad</p>
          </dd>
          <div class="time" id="countdown2">
              <img src="<?php echo $pResUrl; ?>images/bell.png" alt="">
              <p class="countdown" id="countdown2">
            <em>Expira en </em>
            <strong>05</strong> <span>M <b>:</b></span>
            <strong>00</strong> <span>S <b>:</b></span>
            <strong class="last">00</strong> <span>Ms</span>
          </p>
              <!-- <i>¡date prisa! solo <i class="t">03</i> M: <i class="t">54</i> S: <i class="t">79</i> MS</i> -->
          </div>
        </dl>
        <dl class="right">
          <dt>Driver Booster 8 PRO</dt>
          <p class="dt_t soldout-block">Suscripción de 3PCs / 1 año</p>
          <dd class="one">
            <span >17,99€</span> <del class="original">174.78€ </del> <span>Suscripción de 3PCs / 1 año</span>
          </dd>
          <dd class="two soldout-none">
            <img src="<?php echo $pResUrl; ?>images/lh.png" alt=""><span>Paquetes de regalo exclusivos de Navidad</span>
          </dd>
          <dd class="three">
              <p class="t">En toal: <span>17<b>.99€</b></span> <del class="original">174.78€</del></p>
              <a class="ga-button" href="https://www.iobit.com/buy.php?product=es-db83pcpfsdisu1799&ref=es_db83pcpfsdisu1799purchase2011exp<?= $refStr; ?>&refs=es_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcpurchase2011exp-es');"
              >
                <button class="buy">Comprar ahora</button>
              </a>
              <p class="b">Solo 1.66€ per mes</p>
          </dd>
        </dl>
    </div>
    </div>
  </div>
<!-- banner end -->
<!-- service -->
  <div class="service">
    <div class="wrapper clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/visa.png" alt=""></dt>
        <dd><h3>Formas de pago</h3></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
        <dd><h3>Garantía de reembolso</h3></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy-secure.png" alt=""></dt>
        <dd><h3>Pago 100% seguro</h3></dd>
      </dl>
    </div>
  </div>
<!-- benefits start -->
<div class="benefits">
  <div class="wrapper clearfix">
    <h2>¡El mejor actualizador de controladores te ofrece <br> el máximo rendimiento para tu PC!</h2>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.png') ?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.png') ?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.png') ?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.png') ?>" alt=""/>
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li class="fun1 active">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png') ?>" alt=""/>
          </div>
        </li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png') ?>" alt=""/>
          </div>
        </li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png') ?>" alt=""/>
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png') ?>" alt=""/>
          </div>
        </li>
      </ul>
    </div>
    <div class="detail-list">
      <dl class="active first">
        <dt><i class="benefits01"></i></dt>
        <dd>
          <h3>Soporta más de 4,500,000 drivers y componentes  </h3>
          <p>
            Soporta la actualización de más de 4,500,000 drivers y <br>
            componentes que pasaron la prueba WHQL de Microsoft y <br>
            las reglas de evaluación estrictas de IObit.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits02"></i></dt>
        <dd>
          <h3>Actualización del driver 100% segura </h3>
          <p>
            Hace una copia de seguridad automáticamente y crea un punto <br>
            de restauración del sistema antes de actualizar en caso de <br>
            cualquier inesperado.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits03"></i></dt>
        <dd>
          <h3>El máximo rendimiento de juego garantizado </h3>
          <p>
            Consigue mejor rendimiento con nuevos drivers de “Game Ready” <br>
            y componentes actualizados.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benefits04"></i></dt>
        <dd>
          <h3>Descarga 200%* más rápida </h3>
          <p>
            La descarga de tiempo de inactividad del sistema ahorra <br>
            tiempo con velocidad hasta 200%* más rápida.
          </p>
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <a class="intro fr" href="javascript: void(0)">Ver más sobre versión PRO>></a>
  </div>
</div>
<!-- benefits end -->

<div class="paquete soldout-box">
  <img class="soldout-block soldout-img" src="<?php echo $pResUrl; ?>images/center-soldout.png" alt="">
  <dl class="wrapper soldout-none">
    <dt>El paquete de regalo exclusivo solo para Navidad por <br/> comprar Driver Booster PRO, ¡no te lo pierdas!</dt>
    <dd>
      <div class="item">
        <img src="<?php echo $pResUrl; ?>images/sdp.png" alt="">
        <h4>Smart Defrag PRO</h4>
        <p class="one">Obtén el máximo rendimiento de disco duro. </p>
        <p class="two"><span>0</span>€&nbsp;<del>29.99€</del></p>
      </div>
      <div class="item">
        <img src="<?php echo $pResUrl; ?>images/isu.png" alt="">
        <h4>IObit Software Updater PRO</h4>
        <p class="one">Actualiza programas con un solo clic y establece actualizaciones automáticas.</p>
        <p class="two"><span>0</span>€&nbsp;<del>29.99€</del></p>
      </div>
      <div class="item">
        <img src="<?php echo $pResUrl; ?>images/pf.png" alt="">
        <h4>Protected Folder</h4>
        <p class="one">¡No te preocupes por el robo de datos o las fugas de privacidad!</p>
        <p class="two"><span>0</span>€&nbsp;<del>39.95€</del></p>
      </div>
    </dd>
    <a class="ga-button" href="https://www.iobit.com/buy.php?product=es-db83pcpfsdisu1799&ref=es_db83pcpfsdisu1799purchase2011exp<?= $refStr; ?>&refs=es_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcpurchase2011exp-es');"
    >
      <button class="buy">Conseguir mis regalos de Navidad</button>
    </a>
  </dl>
  
</div>
<!-- comparison -->
<div class="comparison">
    <!-- title -->
    <div class="title">
      <h2>Recupera todas las funciones PRO para obtener el mejor rendimiento de hardware</h2>
      <img src="<?php echo getStaticUrl('images/b-border.png')?>" alt="">
    </div>
    <!-- table -->
    <div class="cont">
      <dl>
        <dd class="one"><span>¡Cuidado !</span>  Actualmente corres el riesgo de ...</dd>
        <dd class="two"><span>En su lugar,</span>  puedes disfrutar ...<img src="<?php echo getStaticUrl('images/sd-icon.png')?>" alt=""></dd>
      </dl>
      <table>
        <tbody>
          <tr>
            <td><span>Controladores desactualizados</span> debido a una base de datos limitada</td>
            <td>Actualiza todos tus controladores con la base de datos de <span>más de 4.500.000 controladores</span></td>
          </tr>
          <tr>
            <td><span>El sistema se bloquea</span>  si algo sale mal durante el proceso de actualización</td>
            <td><span>Respaldos automáticos de controladores </span>y puntos de restauración del sistema para evitar problemas</td>
          </tr>
          <tr>
            <td>Dispositivos que <span>de repente dejan de funcionar </span>o no funcionan tan bien como podrían</td>
            <td><span>Dispositivos estables </span>y que funcionen, como mouse, teclado y cámara web.</td>
          </tr>
          <tr>
            <td><span>Sin audio, mala resolución de pantalla o fallas en la conexión de red.</span></td>
            <td><span>Resuelve problemas </span>con tu hardware con un solo clic</td>
          </tr>
          <tr>
            <td><span>Mucho tiempo de espera</span> al actualizar los controladores</td>
            <td>Actualiza tus controladores hasta <span>un 100% más rápido</span> con la versión PRO</td>
          </tr>

          <tr>
            <td><span>Los juegos no se pueden jugar</span> o carecen de características importantes</td>
            <td>Con acceso a todos los componentes del juego y controladores Game Ready, disfruta de <span>la mejor experiencia de juego</span></td>
          </tr>
          <tr>
            <td><span>Videos y juegos de baja calidad</span> debido a controladores de gráficos inadecuados</td>
            <td>Experiencia de video, streaming y juegos de <span>calidad perfecta</span> con los mejores controladores de gráficos</td>
          </tr>
          <tr>
            <td><span>Problemas de red sin solución</span> porque no puedes actualizar los controladores de red sin una conexión a Internet</td>
            <td>Actualiza tus controladores de red sin conexión a Internet con <span>el Actualizador de Controladores sin Conexión.</span></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="h-list">
    <div class="title">
      <h2>¡Driver Booster 8 PRO puede hacer incluso más que la versión anterior!</h2>
      <img src="<?php echo getStaticUrl('images/b-border.png')?>" alt="">
    </div>
    <div class="sw">
      <img class='bg' src="<?php echo getStaticUrl('images/list-bg.png')?>" alt="">
      <div class="cont">
          <ul>
            <li>
              <img src="<?php echo getStaticUrl('images/icon1.png')?>" alt="">
              <h4>Actualizador de controladores sin conexión</h4>
              <p>Actualiza tus controladores de red incluso sin una conexión a Internet.</p>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/icon2.png')?>" alt="">
              <h4>Elije la prioridad de actualización</h4>
              <p>Elije si Driver Booster da prioridad a los controladores más nuevos o más estables.</p>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/icon3.png')?>" alt="">
              <h4>Más rápido</h4>
              <p>Con una actualización un 30% más rápida que la versión anterior, ahorra aún más tiempo.</p>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/icon4.png')?>" alt="">
              <h4>Más seguro</h4>
              <p>Con la copia de seguridad mejorada del controlador, no tienes que preocuparte por ningún problema durante la actualización.</p>
            </li>

          </ul>
        </div>
    </div>
  </div>
  <!-- end comparison -->
<div class="reviews  clearfix">
  <div class="wrapper">
    <h2>Premios a Nivel Mundial</h2>
    <p>Los usuarios de todo el mundo comparten sus experiencias.</p>
    <div class="content">
    <div class="media">
      <img src="<?php echo $pResUrl; ?>images/media.png" alt="">
    </div>
    <div class="reviews-box">
      <ul class="message">
        <li>"Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB8 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."</li>
        <li  class="active">"IObit ofrece muchas utilidades  y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."</li>
        <li>"Verdaderamente el mejor actualizador de drivers del Mercado. Es fácil de usar, y tiene una interfaz simple que hace su trabajo mejor que cualquier aplicación que haya usado antes. Este programa se merece 5 estrellas, altamente recomendado!"</li>
        <li> "Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."</li>
        <li> "Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"</li>
      </ul>
      <ul class="img-box">
        <li class="first">
          <div><img src="<?php echo $pResUrl; ?>images/carlos-alexandre.png" alt="Carlos Alexandre Veríssimo"></div>
          <p>Carlos Alexandre Veríssimo</p>
        </li>
        <li class="active">
          <div><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine"></div>
          <p>PC Magazine </p>
        </li>
        <li>
          <div><img src="<?php echo $pResUrl; ?>images/hishaam-salasa.png" alt="Hishaam Salasa"></div>
          <p>Hishaam Salasa </p>
        </li>
        <li>
          <div><img src="<?php echo $pResUrl; ?>images/dunston-diaz.png" alt="Dunston Diaz"></div>
          <p>Dunston Diaz</p>
        </li>

        <li>
          <div><img src="<?php echo $pResUrl; ?>images/harold-barr.png" alt="Harold Barr"></div>
          <p>Harold Barr</p>
        </li>
      </ul>
    </div>
  </div>
  </div>
</div>
<h1 class="b-title">¡PAGA UN PRECIO REDUCIDO Y ADEMÁS TE <br/> LLEVAS 3 REGALOS! *</h1>
<div class="wrapper new_w b-buy">
    <div class="cont">
        <div class="left">
          <img class="offer-img" src="<?php echo $pResUrl; ?>images/offer.png" alt="">
          <span class="num">17,99€<span class="original">174.78€ </span></span>
          <p>3PCs / 1 año</p>
          <i class="add"></i>
        </div>
        <dl class="center soldout-box">
          <ul>
            <li>
              <img src="<?php echo $pResUrl; ?>images/lh.png" alt="">
              <span class="title">Smart Defrag PRO</span>
              <p>
                <span class="mor"><b><span>0</span>€</b>&nbsp;<del>29.99€ </del></span>
              </p>
            </li>
            <li>
            <img src="<?php echo $pResUrl; ?>images/lh.png" alt="">
            <span class="title">IObit Software Updater</span>
              <p>
                <span class="mor"><b><span>0</span>€</b>&nbsp;<del>29.99€</del></span>
              </p>
            </li>
            <li>
            <img src="<?php echo $pResUrl; ?>images/lh.png" alt="">
            <span class="title">Protected Folder</span>
              <p>
                <span class="mor"><b><span>0</span>€</b>&nbsp;<del>39.95€</del></span>
              </p>
            </li>
          </ul>
        </dl>
        <dl class="right">
          <dd>
            <p class="t">En toal: <span>17<b>.99€</b></span> <del class="original">174.78€</del></p>
            <a class="ga-button" href="https://www.iobit.com/buy.php?product=es-db83pcpfsdisu1799&ref=es_db83pcpfsdisu1799purchase2011exp<?= $refStr; ?>&refs=es_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcpurchase2011exp-es');"
              >
              <button class="buy">Comprar ahora</button>
            </a>
          </dd>
        </dl>
    </div>
  </div>
<!--  footer start-->
<div class="footer">
  
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Nota:</dt>
    <dd>*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</dd>
    <dd>*.Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
    <dd>*.Smart Defrag PRO/ Protected Folder para un año de suscripción / 1 PC.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
</div>
<!-- footer end -->
<script>refStr = '<?= $refStr; ?>';</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>