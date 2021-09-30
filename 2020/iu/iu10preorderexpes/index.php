<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(116, 198);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'esiujunexp0716_p' . $date;
    $c_name_t = 'esiujunexp0716_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = rand(41, 59);
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$data = json_decode(base64_decode($_GET['data']), true);
$data_arr = $data['iu10pre'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Paga 0€ para conseguir la última versión de IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>    
</head>

<body>
<!-- banner start -->
<div class="banner" data-name="animation">
  <div class="wrapper">
    <div class="top">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">
        IObit
      </a>
      <div class="icon">
        <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
        IObit Uninstaller 10
      </div>        
    </div>
    <div class="clearfix">
      <div class="left-img">
        <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" class="iu-box" data-name="default">
        <img src="<?php echo getStaticUrl('images/banner-icon01.png') ?>" alt="" class="iu-icon01"
             data-name="default">
        <img src="<?php echo getStaticUrl('images/banner-icon02.png') ?>" alt="" class="iu-icon02"
             data-name="default">            
      </div>
      <div class="right fr">
        <h1 data-name="default">Comienza la preventa una vez al año</h1>
        <h2 data-name="default">Renueva la versión PRO por 0€</h2>
        <h3 data-name="default">Limitada a los primeros 500 usuarios de cada día antes del 25 de Agosto</h3>
        <div class="number" data-name="default">
          Sólo quedan 
          <div id="reduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <div class="bar">
            <span></span>
          </div> 
        </div>
        <div class="price" data-name="default">
          <strong>0€ <sup>*</sup></strong>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=es-iu10preorder&ref=es_iu10preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=es_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderexp-es');">
            Renovar ahora
          </a>                
        </div>              
      </div>          
    </div> 
  </div> 
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper ">
    <h2>IObit Uninstaller PRO ya te ha ayudado</h2>
    <div class="clearfix">
      <dl class="one" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon01.png') ?>" alt=""/></dt>
        <dd>
          Desinstalando <?php echo empty($data_arr['soft']) ? '' : '<b class="total">' . $data_arr['soft'] . '</b>'; ?> programas, incluyendo <?php echo (empty($data_arr['bundle']) || empty($data_arr['soft'])) ? '' : '<b class="bundle">' . $data_arr['bundle'] . '</b>'; ?> paquetes y <?php echo (empty($data_arr['stubborn']) || empty($data_arr['soft'])) ? '' : '<b class="sofeware">' . $data_arr['stubborn'] . '</b>'; ?> software obstinado
        </dd>
      </dl>
      <dl class="right three" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon02.png') ?>" alt=""/></dt>
        <dd>
          Desinstalando <?php echo empty($data_arr['plugin']) ? '' : '<b class="plug-total">' . $data_arr['plugin'] . '</b>'; ?> plugins y barras de herramientas, incluyendo <?php echo (empty($data_arr['plugin-mp']) || empty($data_arr['plugin'])) ? '' : '<b class="mail">' . $data_arr['plugin-mp'] . '</b>'; ?> plugins maliciosos y publicitarios
        </dd>
      </dl>
      <dl class="two" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon03.png') ?>" alt=""/></dt>
        <?php echo (empty($data_arr['file']) || empty($data_arr['reg'])) ? '<dd>Eliminando archivos y registry entries</dd>' : '<dd>Eliminando <b class="files">' . $data_arr['file'] . '</b> archivos y <b class="registries">' . $data_arr['reg'] . '</b> entradas de registro</dd>'; ?>
      </dl>
      <dl class="right two" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon04.png') ?>" alt=""/></dt>
        <?php if (empty($data_arr['filesize'])) : ?>
          <dd>Limpiando rastros y ahorrando espacio en disco</dd>
        <?php else :
          $filesize = round($data_arr['filesize'] / (1024 * 1024), 2);
          $size = explode('.', $filesize);?>
          <dd>Ahorrando <b class="disk"><em class="integer"><?php echo $size[0];?></em>.<em class="decimal"><?php echo $size[1];?></em></b> MB de espacio en el disco duro
          </dd>
        <?php endif; ?>
      </dl>
    </div>
  </div>    
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature" data-name="animation">
  <div class="wrapper">
    <h2>Tu prioridad PRO ha expirado y con ella <span>las siguientes funciones:</span></h2>
    <div class="feature-img">
      <img class="img-box" src="<?php echo getStaticUrl('images/feature-img.png') ?>" data-name="default" alt=""/>
      <dl class="one" data-name="default">
        <dt>Desinstalación eficiente </dt>
        <dd>
          1 clic para desinstalar los programas no deseados, especialmente los obstinados o software antivirus que no permiten que sean eliminados.
        </dd> 
      </dl>
      <dl class="two" data-name="default">
        <dt>Navegación Rápida y Segura</dt>
        <dd>
          Identifica plugins maliciosos y publicitarios para asegurar una experiencia de navegación segura.
        </dd>
      </dl>
      <dl class="three" data-name="default">
        <dt>Limpieza automática</dt>
        <dd>
          Detecta y limpia automátiamente los restos que quedan despues de haber desinstalado programas por otros métodos.
        </dd>
      </dl>
      <dl class="four" data-name="default">
        <dt>Limpieza profunda</dt>
        <dd>
          Monitoriza y elimina por completo todos los archivos y entradas de registro creadas por la desinstalación estándar.
        </dd>
      </dl>
      <dl class="five" data-name="default">
        <dt>Actualización de Software</dt>
        <dd>1 clic para actualizar todo el software importante sin ninguna intervención del usuario.</dd>
      </dl>
      <span class="circle one" data-name="default"></span>
      <span class="circle two" data-name="default"></span>
      <span class="circle three" data-name="default"></span>   
    </div>  
  </div>
    
</div>
<!-- feature end -->

<div class="feature-02" data-name="animation">
  <div class="wrapper">
    <h2>El Nuevo IObit Uninstaller 10 funciona mejor:</h2>
    <dl data-name="default" class="one">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon08.png') ?>" alt=""></dt>
      <dd>
        <h3>Proceso de desinstalación un <b>50% más rápido</b></h3>
      </dd>
    </dl>
    <dl class="center" data-name="default">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon07.png') ?>" alt=""></dt>
      <dd>
        <h3>Escanea un <b>30% más</b> de restos</h3>
      </dd>
    </dl>
    <dl data-name="default" class="three">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png') ?>" alt=""></dt>
      <dd>
        <h3><b>Bloquea</b> las notificaciones de las webs</h3>
      </dd>
    </dl>
  </div>
</div>

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>Un desinstalador de confianza</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>50M+</h3>
        <p>Descargas</p>
      </dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
      <dd>
        <h3>4.5+</h3>
        <p>Opiniones de Usuarios</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>1000+</h3>
        <p>Recomendaciones de Medios</p>
      </dd>
    </dl>
    <div class="review-box">
      <div class="box">
        <h3>Comentario de usuario</h3>
        <p>Llevo usando el desinstalador de IObit desde hace tiempo, me encanta, es muy completo, y ahora incluso está mejorando. Estoy muy contento y no podría estar sin él. Si nunca lo has usado te recomendó probarlo, siendo hoy 100% mejor que hace un año. Limpia toda la basura de registro de forma muy eficaz.</p>
      </div>
      <div class="box">
        <h3>Comentario de usuario</h3>
        <p>Este programa me ha ahorrado mucho dinero. Antes de usarlo, mi ordenador era muy lento y no podía hacer nada. Ahora mi ordenador está limpio y gracias a este programa funciona mucho más rápido que antes. Muchas gracias IObit, os quiero.</p>
      </div>
      <div class="box active">
        <h3>Reseña de los Medios</h3>
        <p>"Si necesita una aplicación para que desinstale fácilmente aplicaciones limpiamente y completamente, IObit Uninstaller es la mejor opción. La utilidad, compatible con Windows 10, elimina fácilmente aplicaciones, incluyendo los archivos quedados frecuentemente cuando un programa es eliminado desde PC y barras de herramientas y plugins molestos de navegador. En resumen, si usa un PC de Windows, debería descargar IObit Uninstaller."</p>
      </div>
      <div class="box">
        <h3>Comentario de usuario</h3>
        <p>He usado múltiples desinstaladores en el pasado, sin embargo, una vez que comencé a usar IOBit desde la versión 7.0, nunca volví a ninguna otra aplicación. Tiene una interfaz fácil de usar y hace el trabajo para el que está destinado con perfección. Te ayuda a limpiar el registro automáticamente, que de no hacerlo se acaba ahogando con todos los restos, manteniendo así la salud del PC. La capacidad de identificar Bundleware y eliminarlos es una gran característica presente en IOBit que no tiene rival.</p>
      </div>
      <div class="box">
        <h3>Comentario de usuario</h3>
        <p>IObit Uninstaller encuentra complementos en mis navegadores que ni siquiera sabía que existían. La limpieza de los archivos residuales es muy buena; no deja ningún dato inútil en el software desinstalado. También me recuerda las actualizaciones disponibles para todos mis programas por lo que en general, el rendimiento de mi ordenador ha mejorado considerablemente. Es muy conveniente y fácil de usar, por lo que lo he recomendado a varios de mis amigos.</p>
      </div>
    </div>
    <ul>
      <li>
        <span><img src="<?php echo getStaticUrl('images/ivan.png')?>" alt="Ivan White"></span>
        <p>Ivan White</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/ali.png')?>" alt=" Ali Tekin"></span>
        <p> Ali Tekin</p>
      </li>
      <li class="active">
        <span><img src="<?php echo getStaticUrl('images/pcgm.png')?>" alt="PC Magazine"></span>
        <p>PC Magazine</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/samrat.png')?>" alt="Samrat Kumar Chakrabortty"></span>
        <p>Samrat Kumar Chakrabortty</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/john.png')?>" alt="John Glenn Perong"></span>
        <p>John Glenn Perong</p>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

<!-- service start -->
<div class="service">
  <div class="wrapper">
    <h2>Premios y Galardones Reconocidos Mundialmente</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- service end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <dl class="annotation">
      <dt>Nota:</dt>
      <dd>
        *Al finalizar el periodo de prueba de 30 días, tu tarjeta de crédito o cuenta PayPal serán cargadas 15,99€ de forma automática. Este 46% de descuento sobre el precio original de 29,99€ es solo un bonus para los pedidos por anticipado.
      </dd>
      <dd>
        *Si no estás satisfecho, puedes cancelar tu pedido dentro del plazo de 30 días sin tener que pagar ninguna cuota.
      </dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Todos los derechos reservados</p>    
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
      IObit Uninstaller 10
    </div>
    <div class="number fl">
      Sólo quedan
      <div id="fReduce" class="reduceNum">
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
      </div> 
      de los 500 de hoy
    </div>
  </div>
</div>
<!-- floatlayer end -->
<script>refStr = "<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>