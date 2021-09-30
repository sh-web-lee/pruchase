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
  $c_name = 'esascpup_p' . $date;
  $c_name_t='esascpup_t' . $date;
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Obtén el último Advanced SystemCare 13 PRO con 0€ - IObit</title>
<meta name="Copyright" content="IObit">
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
          <a href="http://www.iobit.com/buy.php?product=es-asc13preorder&ref=es_asc13preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-es');"
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
  <h2>¿Por qué actualizar a Advanced SystemCare 13 PRO?</h2>
  <h3><strong>Tu ordenador funcionará <span>máximo rendimiento</span></strong></h3>
  <div class="message01">
    <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" class="img-box ">
    <img src="<?php echo getStaticUrl('images/guide.png')?>" alt="" class="guide">
    <img src="<?php echo getStaticUrl('images/good.png')?>" alt="" class="good">
    <img src="<?php echo getStaticUrl('images/intro-list01.png')?>" alt="" class="icons01">
    <img src="<?php echo getStaticUrl('images/intro-list02.png')?>" alt="" class="icons02">
    <div class="round">
      <div class="top-round"></div>
      <div class="circle right">
        <div class="circleprogress rightcircle"></div>
      </div>
    </div>
    <div class="left-round"></div>
    <dl class="list01">
      <dt>Mayor Espacio en el Disco Duro <span><em>solo PRO</em></span></dt>
      <dd>
        Limpieza y desfragmentación profunda del disco <br> duro para liberar más espacio y garantizar un <br> rendimiento del PC más fluido.
      </dd>
    </dl>
    <dl class="list02">
      <dt>PC un 200%* más rápido <span><em>solo PRO</em></span></dt>
      <dd>
        Limpia y optimiza el ordenador para acelerar el <br> inicio del sistema y la velocidad del PC <br> hasta un 200% más rápido.
      </dd>
    </dl>
    <dl class="list03">
      <dt>Sin Procesos Innecesarios <span><em>solo PRO</em></span></dt>
      <dd>
        Detiene automáticamente procesos innecesarios <br> que están siendo ejecutados en segundo plano <br> para evitar lentitud en el PC.
      </dd>
    </dl>
    <dl class="list04">
      <dt>Internet un 300%* más rápido <span><em>solo PRO</em></span></dt>
      <dd>
        Optimiza las opciones del navegador para acelerar <br> las descargas, la navegación, los juegos, YouTube, etc., <br> hasta un 300%  más rápido.
      </dd>
    </dl>
  </div>

  <h3 class="title2"><strong>Tu ordenador y privacidad <span>estará asegurada</span></strong></h3>
  <div class="message02">
    <div class="img-box">
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="">
      <img src="<?php echo getStaticUrl('images/lock.png')?>" alt="" class="lock">
    </div>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Sin Accesos No Autorizados <span><em>solo PRO</em></span></strong>
        Los programas que intenten accede a tus datos personales secretamente serán detectados de manera inmediata.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Detiene infecciones por Malware <span><em>solo PRO</em></span></strong>
        Malware y spyware no podrán irrumpir en tu ordenador gracias a la protección en tiempo real.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Borra Rastro Online <span><em>solo PRO</em></span></strong>
        Tu rastro online privado será borrado automáticamente para evitar rastreos maliciosos.
      </dd>
    </dl>
  </div>

  <h3 class="title3"><strong>Además, Advanced SystemCare 13 PRO es <span>mucho mejor</span> que lo que tienes ahora</strong></h3>
  <div class="message03">
    <div class="box clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
        <dd>
          Limpia <strong>4GB* más</strong> de archivos basuras en tu ordenador
        </dd>
      </dl>
      <dl class="olter">
        <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
        <dd>
          Limpia el rastro de <strong> 200+ programas</strong> para todas las cuentas de usuario
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
        <dd>
          Optimiza <strong>un 30% más</strong> de elementos de inicio para PC más rápido
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
        <dd>
          Es compatible con la actualización de <strong>un 60% más</strong> de programas para un mejor rendimiento
        </dd>
      </dl>
    </div>
  </div>
</div>




<div class="bottom">
  <!-- review start -->
  <div class="review wrapper">
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
      <dd>*.Al final de los 30 días gratuitos del periodo de prueba, se te cargarán 17,99€ automáticamente a tu cuenta de PayPal o tarjeta de crédito. Esto supone un 64% de descuento sobre el <br> &nbsp; precio original de 49,99€, el cual sólo podrán obtener los usuarios que lo reserven por adelantado.</dd>
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
      <a href="http://www.iobit.com/buy.php?product=es-asc13preorder&ref=es_asc13preorderpopup<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-es');"
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