<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$driversCount=empty($_GET['uc'])?0:intval($_GET['uc']);
$updateAuto=($_GET['adu']==1)?1:0;

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
  <html lang="es">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>90% de descuento exclusivo para obtener Driver Booster 8 PRO – IObit</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
  </head>
  <body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>Obtén nuevo Driver Booster 8 PRO</h1>
      <!-- subtitle -->
      <h2>El mejor actualizador de driver de PC – actualiza drivers fácil, segura y rápidamente</h2>
      <!-- db-box -->
      <img class="db-box fl" src="<?php echo $pResUrl;?>images/db-box.png" alt="">
      <!-- db-message -->
      <div class="db-message fr">
        <!-- db-off -->
        <img class="db-off" src="<?php echo $pResUrl;?>images/db-off.png" alt="">
        <!-- db-line -->
        <p class="db-des">Exclusivo para usuarios de Giveaway</p>
        <!-- price -->
        <p class="price">
          Sólo: <span><b>5</b>,99€</span>  <del>74,85€</del>
          <i class="tab"></i>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-db81pc599&ref=es_2018sepgiveaway2<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_db"
           onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-es');">
          Obtener ahora
        </a>
        <!-- attention -->
        <p class="attention">1 año de suscripción / 1 PC</p>
        <!-- money-back -->
        <img class="money-back" src="<?php echo $pResUrl;?>images/money-back.png" alt="">
        <!-- pay -->
        <p class="pays"><i></i>Formas de pago internacionales disponibles</p>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- feature-part1 start -->
  <div class="feature-part1">
    <div class="wrapper">
      <!-- arrow -->
      <img class="arrow" src="<?php echo $pResUrl;?>images/feature-arrow.png" alt="">
      <!-- title -->
      <h2 class="fr">
        <span class="top">Desde que está contigo,</span>
        <span class="bottom">Driver Booster Pro ha</span>
      </h2>
      <!-- details -->
      <ul class="details fr">
        <!-- updated -->
        <li class="updated">
          <?php if($driversCount!=0):?>
          <strong>Actualizado </strong>
          <span class="numbers clearfix">
              <i class="num1">0123456789</i>
              <i class="num2">0123456789</i>
              <i class="num3">0123456789</i>
            </span>
          drivers y componentes de juegos para garantizar <br>
          <b>el rendimiento estable de tu PC y experiencia de juego fluida;</b>
          <?php else:?>
          Asegurado el rendimiento estable de tu PC y experiencia de juego fluida
          <?php endif;?>
        </li>
        <!-- saved -->
        <li class="saved">
          <?php if($updateAuto==1):?>
          <strong>Ahorrado </strong>
          <span class="letters clearfix">
            <i class="let1">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
            <i class="let2">b c d e f g h i j k l m a n o p q r s t u v w x y z</i>
            <i class="let3">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
            <i class="let4">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
            <i class="let5">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
            <i class="let6">b c d e f g h i j k l m a n o p q r s t u v w x y z</i>
            <i class="let7">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
            </span>
          de tu tiempo con actualización<br>
          automática;
          <?php endif;?>
        </li>
        <!-- reduced -->
        <li class="reduced">
          <b class="red">Reducido fallo del sistema </b> con copia de seguridad automática<br>
          de drivers y tecnología de recuperación .
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part1 end -->
  <!-- feature-part2 start -->
  <div class="feature-part2">
    <div class="wrapper">
      <!-- content -->
      <p>
        En los últimos 6 años, Driver Booster Pro ha actualizado <strong>12,700,000</strong> drivers para <strong>1,500,000</strong><br>
        usuarios valiosos, lo que hace sus PCs hasta <strong>200%</strong> más rápidos* en promedio, manteniendo drivers de<br>
        dispositivo siempre actualizados y mejorarando la estabilidad del rendimiento de PC .
      </p>
    </div>
  </div>
  <!-- feature-part2 end -->
  <!-- feature-part3 start -->
  <div class="feature-part3 wrapper">
    <!-- title -->
    <h2>Ahora si te pierdes la nueva versión Pro, puedes perder</h2>
    <!-- content for progress -->
    <div class="content clearfix">
      <!-- Worse PC Performance -->
      <dl class="performance fl">
        <dt>Peor rendimiento de PC</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>15% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Unstable & Stuck Gaming Experience -->
      <dl class="experience fl">
        <dt>Experiencia de juego inestable</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>35% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Time-consuming Driver Update -->
      <dl class="update fr">
        <dt>Pérdida de tiempo</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>2X más largo </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <!-- notes -->
    <p>*Probamos Driver Booster 8 PRO en nuestro laboratorio interno de pruebas. Tus resultados pueden variar.</p>
  </div>
  <!-- feature-part3 end -->
  <hr>
  <!-- feature-part4 start -->
  <div class="feature-part4">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
        Por eso, te recomendamos encarecidamente que utilices Driver Booster 8 Pro<br>
        para mantener todos los drivers siempre actualizados.
      </h2>
      <!-- left-message -->
      <ul class="left-message fl">
        <li class="padding-right25">
          <strong>4,500,000+ </strong>base de datos de driver <br>
          para mantener todos los drivers de<br>
          dispositivo actualizados
        </li>
        <li class="padding-right55">
          <strong>Actualiza drivers </strong><br>
          <strong>automáticamente</strong> sin ninguna<br>
          molestia mientras trabajas
        </li>
        <li class="padding-right10">
          <strong>1 clic </strong>para reparar todos los errores del<br>
          dispositivo para tu computadora
        </li>
      </ul>
      <!-- right-message -->
      <ul class="right-message fr">
        <li class="padding-left45">
          <strong>Componentes necesarios </strong><br>
          disponibles para lanzar tu juego<br>
          exitosamente
        </li>
        <li class="padding-left5">
          Prioridad para actualizar <strong>drivers de </strong><br>
          <strong>Game Ready</strong> Prioridad para actualizar
        </li>
        <li class="padding-left20">
          1 clic para <strong>terminar procesos </strong><br>
          <strong>innecesarios </strong>para juego más rápido
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part4 end -->
  <!-- between-buy start -->
  <div class="between-buy wrapper">
    <!-- title -->
    <h2>Garantiza mejor rendimiento de PC y experiencia de juego más fluida</h2>
    <!-- price -->
    <p class="price">
      Sólo: <span><b>5</b>,99€</span>  <del>74,85€</del>
      <i class="tab"></i>
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=es-db81pc599&ref=es_2018sepgiveaway2<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_db"
       onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-es');">
      Obtener ahora
    </a>
    <!-- attention -->
    <p class="attention">1 año de suscripción / 1 PC</p>
    <!-- money-back -->
    <img class="money-back" src="<?php echo $pResUrl;?>images/money-back.png" alt="">
    <!-- pay -->
    <p class="pays"><i></i>Formas de pago internacionales disponibles</p>
  </div>
  <!-- between-buy end -->
  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <!-- title -->
      <h2>Ve claramente lo que perderás, si quedas edición Free:</h2>
      <!-- table -->
      <table cellspacing="0" cellpadding="0" valign="middle" align="cnter">
        <thead>
        <tr>
          <th class="w320"></th>
          <th class="w530"></th>
          <th class="w350"></th>
          <th class="w50"></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td class="w320 grey">3,500,000+</td>
          <td class="w530">Base de datos de driver</td>
          <td class="w350 red">4,500,000+</td>
          <td class="w50"></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="w320 grey">Sin aceleración</td>
          <td class="w530">Velocidad de descarga de driver</td>
          <td class="w350 red">200% más rápida</td>
          <td class="w50"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="w320 grey">Sin prioridad</td>
          <td class="w530">Driver de Game Ready</td>
          <td class="w350 red">Prioridad</td>
          <td class="w50"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Componentes de juegos</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Actualización automática de driver</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Copia de seguridad de driver</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td class="w320"></td>
          <td class="w530"></td>
          <td class="w350"></td>
          <td class="w50"></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Comentarios mediáticos</h2>
            <h4></h4>
            <p>
              "IObit ofrece muchas utilidades  y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></dt>
          <dd>
            <h2>Comentarios del usuario</h2>
            <h4></h4>
            <p>
              "Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."
            </p>
            <cite>Dunston Diaz</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></dt>
          <dd>
            <h2>Comentarios del usuario</h2>
            <h4></h4>
            <p>
              "Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"
            </p>
            <cite>Harold Barr</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></dt>
          <dd>
            <h2>Comentarios del usuario</h2>
            <h4></h4>
            <p>
              "Verdaderamente el mejor actualizador de drivers del Mercado. Es fácil de usar, y tiene una interfaz simple que hace su trabajo mejor que cualquier aplicación que haya usado antes. Este programa se merece 5 estrellas, altamente recomendado!"
            </p>
            <cite>Hishaam Salasa</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
          <dd>
            <h2>Comentarios del usuario</h2>
            <h4></h4>
            <p>
              "Me ayudó a solucionar los problemas de lentitud de mi portátil gamer sin dejar de funcionar. A veces cuando he intentado actualizar los drivers, mi ordenador dejaba de funcionar y tenía que formatear para restaurar todas las funciones. Eso con DB8 no pasa y además es fácil de usar y las descargas son rápidas, sinceramente una de las mejores herramientas que hay en el mercado hoy en día."
            </p>
            <cite>Carlos Alexandre Veríssimo</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <!-- title -->
    <h2>Recomendado y premiado por estos Medios</h2>
    <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
  </div>
  <!-- award end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="footer-servizio clearfix">
        <dl class="money_back fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/money_back.png" alt="">
          </dd>
          <dt>
            <h3>Garantía de reembolso</h3>
            <p>Si no está satisfecho en los primeros<br> 60 días, le devolveremos tu dinero</p>
          </dt>
        </dl>
        <dl class="veloce fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
          </dd>
          <dt>
            <h3>Pago seguro</h3>
            <p>100% pago seguro para tu pedido</p>
          </dt>
        </dl>
        <dl class="verified fr">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
          </dd>
          <dt>
            <h3>Obtener licencia</h3>
            <p>Recibirás la licencia unos minutos <br>después de la compra</p>
          </dt>
        </dl>
      </div>
      <p class="note">
        Nota:<br>
        *.Datos pueden variar basados en diferentes sistemas u ordenadores.
      </p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
    </div>
  </div>
  <!-- footer end -->
  <!-- float start -->
  <div class="float">
    <div class="wrapper clearfix">
      <dl class="fl">
        <dt>Oferta exclusiva</dt>
        <dd><strong>-90%</strong> para deshacerte de bloqueo del sistema y experiencia inestable de juego</dd>
      </dl>
      <div class="float-message fr">
        <!-- price -->
        <p class="price">
          <span><b>5</b>,99€</span>  <del>74,85€</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-db81pc599&ref=es_2018sepgiveaway2<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_db"
           onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-es');">
          Obtener ahora
        </a>
        <!-- pay -->
        <p class="pays"><i></i>Formas de pago internacionales disponibles</p>
      </div>
    </div>
  </div>
  <!-- float end -->
  <script>
    driversCount=<?php echo $driversCount;?>;
    autoUpdate=<?php echo $updateAuto;?>;
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
  </script>
  </body>
  </html>