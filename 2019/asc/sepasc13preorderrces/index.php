<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esascpre_p' . $date;
  $c_name_t='esascpre_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
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

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Obtén el último Advanced SystemCare 13 PRO con 0€ - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Convierte tu PC lento en un 200%* más rápido</h3>
      <dl>
        <dt class="price">
          <strong><b>0</b>€</strong>
          <a href="http://www.iobit.com/buy.php?product=es-asc13preorder&ref=es_asc13preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderrc-es');"
             class="buybtn">
            <span>Resérvalo ahora</span>
          </a>
        </dt>
        <dd class="number">
          <span><span class="viewNum"><?php echo $viewNum;?></span> están viendo.</span> Date prisa, solo quedan
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- intro -->
<div class="intro wrapper clearfix">
  <span class="arrow"></span>
  <h2> ¿Por qué mejorar a Advanced SystemCare 13 PRO? </h2>
  <div class="title">
    <span class="arrow"></span>
    <h2> ¿Por qué mejorar a Advanced SystemCare 13 PRO? </h2>
  </div>
  <div class="left-message">

    <div class="message">
      <div class="list">
        <h3>Ordenador Más Rápido</h3>
        <dl>
          <dt>PC 200%* más rápido</dt>
          <dd>
            Limpia y optimiza el sistema para mejorar la velocidad de inicio <br>
            del ordenador, funcionando hasta un 200% más rápido.
          </dd>
          <dd><em>SÓLO PRO</em></dd>
        </dl>
        <dl>
          <dt>Internet un 300%* más rápido</dt>
          <dd>
            Optimiza las opciones del navegador para acelerar las descargas, <br>
            la navegación, los juegos y YouTube hasta un 300% más rápido.
          </dd>
          <dd><em>SÓLO PRO</em></dd>
        </dl>
      </div>
    </div>

    <div class="message">
      <div class="list">
        <h3>Navegación Más Segura</h3>
        <dl>
          <dt>Escudo de Privacidad</dt>
          <dd>
            No deja que los programas que no son de confianza accedan <br>
            a tus datos sensibles como contactos, e-mail, Dropbox, OneDrive, etc.
          </dd>
          <dd><em>SÓLO PRO</em></dd>
        </dl>
        <dl>
          <dt>Navegación Segura</dt>
          <dd>
            Limpia automáticamente datos de navegación y esconde <br>
            tu rastro para prevenir que atacantes puedan ver lo que estás leyendo, <br>
            viendo o comprando.
          </dd>
          <dd><em>SÓLO PRO</em></dd>
        </dl>
      </div>
    </div>

  </div>
  <div class="change-img">

    <div class="list-img list01 show">
      <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
      <div class="scan">
        <div class="circleprogress-content">
          <div class="circle right">
            <div class="circleprogress rightcircle"></div>
          </div>
          <div class="circle left">
            <div class="circleprogress leftcircle"></div>
          </div>
        </div>
      </div>
      <div class="img-before">
        <span class="change-num">50</span>
        <span class="completed"></span>
        <div class="circle">
          <div class="top-circle"></div>
          <div class="bottom-circle"></div>
        </div>
      </div>

    </div>

    <div class="list-img list02">
      <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
      <div class="privacy">
        <span class="icon"></span>
        <div class="check"></div>
        <span class="text">1 acceso secreto</span>
      </div>
      <div class="privacy-right"></div>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- comparison -->
<div class="comparison wrapper">
  <span class="arrow"></span>
  <h2>Conoce más sobre Advanced SystemCare 13 PRO</h2>
  <table>
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="item">
        <div>Tu edición actual</div>
      </th>
      <th class="item-up">
        <div>Advanced SystemCare <br> 13 PRO</div>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""></td>
      <td class="text">Limpieza y optimización de PC básica.</td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""></td>
      <td class="text">Protección de PC básica con eliminación de spyware.</td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""></td>
      <td class="text">Captura intrusos automáticamente con Face ID.</td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""></td>
      <td class="text">Detecta links maliciosos en tus emails.</td>
      <td class="item"><span class="all-icons">√</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""></td>
      <td class="text">Limpia y optimiza automáticamente a una hora programada.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""></td>
      <td class="text">Limpia profundamente el registro para reducir fallos y errores del sistema.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""></td>
      <td class="text">Protección automatic contra infecciones de malware en tiempo real.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon08.png" alt=""></td>
      <td class="text">Detiene automáticamente servicios innecesarios para liberar RAM.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon09.png" alt=""></td>
      <td class="text">Detecta las amenazas más profundas en tu ordenador.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon10.png" alt=""></td>
      <td class="text">Elimina automáticamente anuncios de los sitios web.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon11.png" alt=""></td>
      <td class="text">Actualiza programas obsoletos con un solo clic.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 12 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon12.png" alt=""></td>
      <td class="text">Actualiza automáticamente a la última versión.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up"><span class="all-icons">√</span></td>
    </tr>
    <!-- 13 -->
    <tr>
      <td class="icon"><img src="<?php echo $pResUrl;?>images/icon13.png" alt=""></td>
      <td class="text">Soporte técnico gratis disponible 24/7.</td>
      <td class="item"><span class="all-icons nope">-</span></td>
      <td class="item-up last"><span class="all-icons">√</span></td>
    </tr>
    </tbody>
  </table>
  <span class="border"></span>
</div>
<!-- end comparison -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Cosas que hacemos en la optimización de computadora</h2>
    <div class="review-content clearfix">
      <div class="review-icons fl">
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/review-icon01.png" alt=""></dt>
          <dd class="fl">
            Corregimos <br>
            problemas de más de <br>
            <b>30,000,000</b> de usuarios
          </dd>
        </dl>
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/review-icon02.png" alt=""></dt>
          <dd class="fl">
            Ahorramos <br>
            <b>2,666,667</b> horas <br>
            al mes
          </dd>
        </dl>
        <dl class="clearfix">
          <dt class="fl"><img src="<?php echo $pResUrl;?>images/review-icon03.png" alt=""></dt>
          <dd class="fl">
            Ahorramos <br>
            <b>$1.18</b> billones <br>
            al año
          </dd>
        </dl>
      </div>
      <div class="review-users fr">
        <div class="review-details">
          <div>
            <!-- Media -->
            <h3>Reseña de los Medios</h3>
            <p>"Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad."</p>
            <cite>Softonic</cite>
          </div>
          <!-- Tony Fisher -->
          <div>
            <h3>Comentario de usuario</h3>
            <p>"Llevo usando Advanced SystemCare Pro bastante tiempo y esta última versión 13 es incluso mucho mejor que la versión 12. Puede detectar y corregir problemas muy rápidamente y además viene con un montón de funciones extras que ayudan a que el ordenador vaya rápido, fluido y estable. No podría dejar de recomendarlo."</p>
            <cite>Tony Fisher</cite>
          </div>
          <!-- Richard Preston -->
          <div>
            <h3>Comentario de usuario</h3>
            <p>"Me ha encantado usar la Beta de Advanced SystemCare 13. Es rápido, limpia tu rastro de privacidad, archivos basura y fragmentos del registro. Me gusta especialmente el área sensible al acceso de permisos de pop-ups. La primera vez que una app intenta acceder a tus archivos sensibles, se abre una ventana que te permite aceptarla o denegarla. Una vez se dan los permisos a una app, el pop-up no vuelve a aparecer para esa app. Ahora se que mis archivos sensibles están seguros y protegidos."</p>
            <cite>Richard Preston</cite>
          </div>
          <!-- Richard Beavers -->
          <div>
            <h3>Comentario de usuario</h3>
            <p>"He probado varios programas en los últimos años que me han prometido que mi ordenador funcionaría sin ningún problema. Conseguí el ASC hace unos años utilizando la versión gratuita al principio y me encontré con que el PC ya no sufría los problemas que arrastraba por lo que lo mejoré a la versión PRO y llevo con ella desde entonces. Advanced SystemCare Pro es el único programa que recomendaría basándome en mis experiencias anteriores. También he usado IObit Uninstaller, Smart Defrag y Driver Booster y estoy encantado."</p>
            <cite>Richard Beavers</cite>
          </div>
          <!-- Pasty Clark -->
          <div>
            <h3>Comentario de usuario</h3>
            <p>"Advanced SystemCare es un muy buen programa. Lo he usado durante muchos años y funciona genial. Siempre están mejorando sus funciones y cada año es mejor. He usado muchos de los programas de IObit y todos funcionan muy bien."</p>
            <cite>Patsy Clark</cite>
          </div>
          <!-- Danny R. Sheets -->
          <div>
            <h3>Comentario de usuario</h3>
            <p>"Nunca había visto un programa de mantenimiento y seguridad mejor que Advanced SystemCare y desde que lo uso ya no tengo problemas con virus, phising , pantallazos negros ni otros bugs. La mejor inversión que he hecho en tema ordenadores, gracias ASC por hacer que pueda disfrutar mucho más de mi experiencia con el PC."</p>
            <cite>Danny R. Sheets</cite>
          </div>
          <!-- Daniel Sanders -->
          <div>
            <h3>Comentario de usuario</h3>
            <p>"El Nuevo ASC 13 es una herramienta que todos los usuarios deberían de tener. Su interfaz es clara e intuitiva y hace que sea muy fácil de usar para tanto usuarios expertos como para los que no lo son. Incluye un montón de herramientas súper útiles para que el PC vaya rápido y al máximo rendimiento. Gracias a ti IObit por un programa tan increíble con un montón de herramientas en un mismo lugar."</p>
            <cite>Daniel Sanders</cite>
          </div>
        </div>
        <div class="review-photos clearfix">
          <ul class="fr">
            <li class="one" data-num="0" data-fixed="0"><img src="<?php echo $pResUrl;?>images/softonic.png" alt="Softonic"></li>
            <li class="two" data-num="6" data-fixed="6"><img src="<?php echo $pResUrl;?>images/daniel-sanders.png" alt="Daniel Sanders"></li>
            <li class="three" data-num="5" data-fixed="5"><img src="<?php echo $pResUrl;?>images/danny-r-sheets.png" alt="Danny R. Sheets."></li>
            <li class="four" data-num="4" data-fixed="4"><img src="<?php echo $pResUrl;?>images/patsy-clark.png" alt="Patsy Clark"></li>
            <li class="five" data-num="3" data-fixed="3"><img src="<?php echo $pResUrl;?>images/richard-beavers.png" alt="Richard Beavers"></li>
            <li class="six" data-num="2" data-fixed="2"><img src="<?php echo $pResUrl;?>images/richard-preston.png" alt="Richard Preston"></li>
            <li class="seven" data-num="1" data-fixed="1"><img src="<?php echo $pResUrl;?>images/tony-fisher.png" alt="Tony Fisher"></li>
          </ul>
        </div>
        <a class="next" href="javascript: userNext();"></a>
      </div>
    </div>
  </div>
</div>
<!-- end review -->

<!-- bottom -->
<div class="bottom">
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Premios Mundiales</h2>
    <p>
      Durante los últimos 12 años contamos con premios y con la confianza de medios de comunicación reconocidos mundialmente. <br> Ahora ya sabes que tienes el optimizador de PC que necesitas.
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dd>
          Nota:
        </dd>
        <dd>*.Hemos realizado tests de Advanced SystemCare 13 PRO en nuestro laboratorio de pruebas. Los resultados pueden variar según tu sistema.</dd>
        <dd>*.Al final de los 30 días gratuitos del periodo de prueba, se te cargarán 17,99€ automáticamente a tu cuenta de PayPal o tarjeta de crédito. Esto supone un 64% de descuento sobre el precio original de 49,99€, el cual sólo podrán obtener los usuarios que lo reserven por adelantado.</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
    </div>
  </div>
  <!-- footer end -->

</div>
<!-- end bottom -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      <span><span class="viewNum"><?php echo $viewNum;?></span> están viendo.</span>  Date prisa, solo quedan
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
    </div>
    <div class="price">
      <strong><b>0</b>€</strong>
      <a href="http://www.iobit.com/buy.php?product=es-asc13preorder&ref=es_asc13preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderrc-es');"
         class="buybtn">
        <span>Resérvalo ahora</span>
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>