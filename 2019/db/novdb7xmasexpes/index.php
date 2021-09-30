<?php //    初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float) $usec + (float) $sec);
}

$viewNum = rand(96, 125);
if (!empty($_GET['action']) && ($_GET['action'] == 'getPacks')) {
    $date = $_GET['d'];
    $cName = 'novdb7xmasexpes2019' . $date;
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
$refStr='';
if(in_array($_GET['pop'],array('xr_dbe'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>89% de descuento y regalos para DB PRO de oferta navidad 2019 – IObit</title>
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
  <span class="snow"></span>
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      ¡OFERTA ESPECIAL DE NAVIDAD!
    </h1>
    <div class="left-box">
      <span class="hand"></span>
      <span class="head"></span>
      <h2><strong>89%</strong> de descuento <span>Una vez al año, ¡solo para Navidad!</span></h2>
      <img src="<?php echo $pResUrl; ?>images/db-box.png" alt="">
      <img src="<?php echo $pResUrl; ?>images/raduem-box.png" alt="" class="raduem-box">
    </div>
    <div class="right-box">
      <h3> Hoy solo quedan <strong class="raduem"></strong> <span class="surplus"><b class="one"><span>0</span></b><b class="two"><span>0</span></b></span>  paquetes</h3>
      <dl>
        <dt><strong>Driver Booster 7 PRO</strong> <span>17,99€</span> <del>74,85€</del></dt>
        <dd><strong>Protected Folder</strong> <span>0€</span></dd>
        <dd><strong>Smart Defrag 6 PRO</strong> <span>0€</span></dd>
        <dd><strong>IObit Uninstaller 9 PRO</strong> <span>0€</span></dd>
        <dd class="last"><span>Valor de</span> <b>89,93€</b></dd>
      </dl>
    </div>
    <dl class="price">
      <dt> <del>164,78€</del> <strong>17,99€</strong></dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=es-db73pcsdpfiu1799&ref=es_db73pcsdpfiu1799exppurchase1911<?php echo $refStr; ?>&refs=es_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmasexppurchase1911-es')" class="buybtn">Comprar ahora</a>
      </dd>
      <dd>Más de <b id="bynum">8,007,680</b> personas han comprado</dd>
    </dl>
    </div>
  </div>
</div>
<!-- banenr end -->

<!-- benfits start -->
<div class="benfits">
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
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Soporta más de 3,500,000 drivers y componentes  </h3>
          <p>
            Soporta la actualización de más de 3,500,000 drivers y <br>
            componentes que pasaron la prueba WHQL de Microsoft y <br>
            las reglas de evaluación estrictas de IObit.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
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
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>El máximo rendimiento de juego garantizado </h3>
          <p>
            Consigue mejor rendimiento con nuevos drivers de “Game Ready” <br>
            y componentes actualizados.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits04"></i></dt>
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
    <a class="more fr" href="javascript: void(0)">Ver más sobre versión PRO>></a>
  </div>
</div>
<!-- benfits end -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>¡No permitas que problemas<br> de controladores degraden tu PC!</h2>
  <table>
    <thead>
      <tr>
        <th class="itema"><big>Problemas</big> de PC que puedes encontrar:</th>
        <th class="itemb"><big>Soluciones</big> que puedes recuperar:</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="itema">
          La actualización manual puede hacer que <span>pierdas</span> actualizaciones importantes
        </td>
        <td class="itemb">
          Actualiza el software automáticamente y mantiene todos tus drivers <span>actualizados</span>
        </td>
      </tr>
      <tr>
        <td class="itema">
          Velocidad <span>limitada</span> de descarga requiere de más tiempo para descargar cada controlador
        </td>
        <td class="itemb">
          <span>Desbloquea la aceleración</span> de descarga al 100% para que puedas descargar drivers en solo unos minutos.
        </td>
      </tr>
      <tr>
        <td class="itema">
          La <span>reducción</span> de la base de datos de controladores puede no satisfacer las necesidades de todos tus dispositivos
        </td>
        <td class="itemb">
          Base de datos de controladores <span>mayor</span> en un 40% que cubre tus necesidades al 99%*
        </td>
      </tr>
      <tr>
        <td class="itema">
          <span>Complicado</span> proceso manual de respaldo te puede tomar mucho tiempo
        </td>
        <td class="itemb">
          Punto de restauración automático que garantiza la seguridad de tus actualizaciones con <span>doble seguridad</span>
        </td>
      </tr>
      <tr>
        <td class="itema">
          Los componentes de juego desactualizados pueden generar un <span>pobre</span> rendimiento de juego
        </td>
        <td class="itemb">
          Componentes de juego más recientes, raros y exclusivos disponibles para una experiencia de juego <span>fantástica</span>
        </td>
      </tr>
      <tr>
        <td class="itema">
          <span>No más prioridad</span> para actualizar los controladores más recientes y exclusivos, incluidos controladores listos para juegos
        </td>
        <td class="itemb">
          Se el primero siempre en obtener los controladores más recientes y <span>exclusivos</span>
        </td>
      </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>¡La última versión Driver Booster 7 PRO<br> puede hacer mucho más de lo que crees!</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
      <dd>
        <h3>3,500,000+</h3>
        <p>Controladores de PC compatibles</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
      <dd>
        <h3>20% MÁS</h3>
        <p>de componentes compatibles</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
      <dd>
        <h3>20% MÁS RÁPIDO</h3>
        <p>Escaneo de controladores</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
      <dd>
        <h3>DETIENE NOTIFICACIONES</h3>
        <p>de Driver Booster cuando estás trabajando con pantalla completa</p>
      </dd>
    </dl>
  </div>
</div>
<!-- intro end -->

<!-- review start -->
<div class="review wrapper">
  <h2>Comentarios:</h2>
  <div class="reviewbox">
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></li>
      <li class="two">
        <img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz">
      </li>
      <li class="three">
        <img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr">
      </li>
      <li class="four"><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></li>
      <li class="five"><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></li>
    </ul>
    <div class="details">
      <div class="pc">
        <h4>PC Magazine</h4>
        <p>
          "IObit ofrece muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."
        </p>
      </div>
      <div class="active">
        <h4>Dunston Diaz</h4>
        <p>
          "Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."
        </p>
      </div>
      <div>
        <h4>Harold Barr</h4>
        <p>
          "Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"
        </p>
      </div>
      <div>
        <h4>Hishaam Salasa</h4>
        <p>
          "Verdaderamente el mejor actualizador de drivers del Mercado. Es fácil de usar, y tiene una interfaz simple que hace su trabajo mejor que cualquier aplicación que haya usado antes. Este programa se merece 5 estrellas, altamente recomendado!"
        </p>
      </div>
      <div>
        <h4>Carlos Alexandre Veríssimo</h4>
        <p>
          "Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB7 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."
        </p>
      </div>
    </div>
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Premios a Nivel Mundial</h2>
    <p>
      Hemos sido premiados y contamos con la confianza de los medios de comunicación líderes del mercado durante los últimos 6 años, ahora ya puedes estar seguro de que has elegido el mejor actualizador de drivers
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
  </div>
</div>
<!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
        <dd>
          <h4>
            Pruébelo SIN RIESGO - con nuestra garantía de devolución <br>
            de dinero de 60 días
          </h4>
          <p>
            Estamos seguros de que activando la versión PRO te olvidarás de tus dolores de cabeza a la hora de actualizar tus drivers por un precio asequible
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Aceptamos</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png') ?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Nota:</dt>
        <dd>
          *. Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
        </dd>
        <dd>*. Datos pueden variar basados en diferentes sistemas u ordenadores.</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/></div>
    <div class="center fl">
      <h2>Oferta exclusiva solo para Navidad</h2>
      <div class="numbox">
        <p>Date prisa, solo quedan</p>
        <div id="flip" class="flipNum">
          <div class="listbox"><span class="list"><b>2</b></span></div>
          <div class="listbox"><span class="list"><b>1</b></span></div>
        </div>                      
      </div>
    </div>
    <div class="price fr">
      <p><strong>17,99€</strong> <del>164,78€</del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=es-db73pcsdpfiu1799&ref=es_db73pcsdpfiu1799exppurchase1911<?php echo $refStr; ?>&refs=es_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbxmasexppurchase1911-es');">
        Renueva y ahorra ahora
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>