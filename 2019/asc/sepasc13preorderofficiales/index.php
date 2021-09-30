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
          <a href="http://www.iobit.com/buy.php?product=es-asc13preorder&ref=es_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-es');"
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
        </dl>
        <dl>
          <dt>Internet un 300%* más rápido</dt>
          <dd>
            Optimiza las opciones del navegador para acelerar las descargas, <br>
            la navegación, los juegos y YouTube hasta un 300% más rápido.
          </dd>
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
        </dl>
        <dl>
          <dt>Navegación Segura</dt>
          <dd>
            Limpia automáticamente datos de navegación y esconde <br>
            tu rastro para prevenir que atacantes puedan ver lo que estás leyendo, <br>
            viendo o comprando.
          </dd>
        </dl>
      </div>
    </div>
    <div class="message last">
      <div class="list">
        <h3>Otras características</h3>
        <ul class="active">
          <li>Limpia y optimiza automáticamente a una hora programada.</li>
          <li>Limpia profundamente el registro para reducir fallos y errores del sistema.</li>
          <li>Protección automatic contra infecciones de malware en tiempo real.</li>
          <li>Detecta las amenazas más profundas en tu ordenador.</li>
          <li>Detecta links maliciosos en tus emails.</li>
          <li class="on">Detiene automáticamente servicios innecesarios para liberar RAM.</li>
          <li>Captura intrusos automáticamente con Face ID.</li>
          <li>Elimina automáticamente anuncios de los sitios web.</li>
          <li>Actualiza programas obsoletos con un solo clic.</li>
          <li>Actualiza automáticamente a la última versión.</li>
          <li>Soporte técnico gratis disponible 24/7. </li>
        </ul>
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
    <div class="list-img list03">
      <img src="<?php echo getStaticUrl('images/intro3.png')?>" alt="" class="nomal3">
      <div class="icon-list">
        <span class="icons01"><i></i></span>
        <span class="icons02"><i></i></span>
        <span class="icons03"><i></i></span>
        <span class="icons04"><i></i></span>
        <span class="icons05"><i></i></span>
        <span class="icons06 active"><i></i></span>
      </div>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- review-content -->
<div class="review-content">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Conoce más sobre Advanced SystemCare 13 PRO</h2>
    <h3>Cosas que Hacemos Por Nuestros Usuarios Para la Optimización de sus Ordenadores </h3>

    <!-- present -->
    <div class="present">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
        <dd>
          Corregimos problemas de más de <strong>30,000,000</strong> de usuarios
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
        <dd>
          Ahorramos <strong>2,666,667</strong>  horas al mes
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
        <dd>
          Ahorramos <strong>$1.18 billones</strong> al año
        </dd>
      </dl>
    </div>
    <!-- end present -->

    <!-- review start -->
    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Reseña de los Medios</span></h2></dt>
            <dd>
              <p>Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.</p>
             <cite>Softonic</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Comentario de usuario</span></h2></dt>
            <dd> 
              <p>He probado varios programas en los últimos años que me han prometido que mi ordenador funcionaría sin ningún problema. Conseguí el ASC hace unos años utilizando la versión gratuita al principio y me encontré con que el PC ya no sufría los problemas que arrastraba por lo que lo mejoré a la versión PRO y llevo con ella desde entonces. Advanced SystemCare Pro es el único programa que recomendaría basándome en mis experiencias anteriores. También he usado IObit Uninstaller, Smart Defrag y Driver Booster y estoy encantado.</p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Comentario de usuario</span></h2></dt>
            <dd>
              <p>Advanced SystemCare es un muy buen programa. Lo he usado durante muchos años y funciona genial. Siempre están mejorando sus funciones y cada año es mejor. He usado muchos de los programas de IObit y todos funcionan muy bien.</p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Comentario de usuario</span></h2></dt>
            <dd>
              <p>Nunca había visto un programa de mantenimiento y seguridad mejor que Advanced SystemCare y desde que lo uso ya no tengo problemas con virus, phising , pantallazos negros ni otros bugs. La mejor inversión que he hecho en tema ordenadores, gracias ASC por hacer que pueda disfrutar mucho más de mi experiencia con el PC.</p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Comentario de usuario</span></h2></dt>
            <dd> 
              <p>Llevo usando Advanced SystemCare Pro bastante tiempo y esta última versión 13 es incluso mucho mejor que la versión 12. Puede detectar y corregir problemas muy rápidamente y además viene con un montón de funciones extras que ayudan a que el ordenador vaya rápido, fluido y estable. No podría dejar de recomendarlo.</p>
              <cite>Tony Fisher</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Comentario de usuario</span></h2></dt>
            <dd>
              <p>El Nuevo ASC 13 es una herramienta que todos los usuarios deberían de tener. Su interfaz es clara e intuitiva y hace que sea muy fácil de usar para tanto usuarios expertos como para los que no lo son. Incluye un montón de herramientas súper útiles para que el PC vaya rápido y al máximo rendimiento. Gracias a ti IObit por un programa tan increíble con un montón de herramientas en un mismo lugar.</p>
              <cite>Daniel Sanders</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Comentario de usuario</span></h2></dt>
            <dd>
              <p>Me ha encantado usar la Beta de Advanced SystemCare 13. Es rápido, limpia tu rastro de privacidad, archivos basura y fragmentos del registro. Me gusta especialmente el área sensible al acceso de permisos de pop-ups. La primera vez que una app intenta acceder a tus archivos sensibles, se abre una ventana que te permite aceptarla o denegarla. Una vez se dan los permisos a una app, el pop-up no vuelve a aparecer para esa app. Ahora se que mis archivos sensibles están seguros y protegidos.</p>
              <cite>Richard Preston</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="Softonic"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
        </ul>
      </div>
    </div>
    <!-- review end -->
  </div>
</div>
<!-- end review-content -->

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
  <div class="footer wrapper">
    <dl>
      <dd>
        Nota:
      </dd>
      <dd>*.Hemos realizado tests de Advanced SystemCare 13 PRO en nuestro laboratorio de pruebas. Los resultados pueden variar según tu sistema.</dd>
      <dd>*.Al final de los 30 días gratuitos del periodo de prueba, se te cargarán 17,99€ automáticamente a tu cuenta de PayPal o tarjeta de crédito.</dd>
      <dd>&nbsp;&nbsp; Esto supone un 64% de descuento sobre el precio original de 49,99€, el cual sólo podrán obtener los usuarios que lo reserven por adelantado.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
  <!-- footer end -->

</div>

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
      <a href="http://www.iobit.com/buy.php?product=es-asc13preorder&ref=es_asc13preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_asc"
          onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderofficial-es');"
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