<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esiujunerc_p' . $date;
  $c_name_t='esiujunerc_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,58);
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Paga 0€ para conseguir la última versión de IObit Uninstaller PRO</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- container start -->
<div class="container">
  <!-- banner start -->
  <div class="banner" data-name="animation">
    <div class="wrapper">
      <!-- top -->
      <div class="top clearfix">
        <!-- logo -->
        <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
        <div class="record-box">
          <i></i>
          Willkommen zu unserem Vorverkauf
        </div>
        <!-- icon -->
        <div class="icon"><img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""> IObit Uninstaller 10</div>
      </div>
      <!-- content -->
      <div class=" content clearfix">
        <!-- left-img -->
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
          <img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
        </div>
        <!-- right -->
        <div class="right fr">
          <h1 data-name="default">Bienvenido a la Preventa </h1>
          <h2 data-name="default">Consigue PRO por 0€</h2>
          <h3 data-name="default">Limitado a los primeros 500 usuarios de cada día antes del 25 de Agosto</h3>
          <!-- number -->
          <div class="number" data-name="default">
             Sólo quedan
            <div id="reduce" class="reduceNum">
              <div class="listbox"><span class="list"><b>0</b></span></div>
              <div class="listbox"><span class="list"><b>5</b></span></div>
              <div class="listbox"><span class="list"><b>0</b></span></div>
            </div>
            <div class="bar">
              <span></span>
            </div>
          </div>
          <!-- message -->
          <div class="price" data-name="default">
            <!-- price -->
            <strong>0€<sup>*</sup></strong>
            <!-- buybtn -->
            <a class="buybtn"
              href="https://www.iobit.com/buy.php?product=es-iu10preorder&ref=es_iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_iu"
              onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrc-es');">
              Resérvalo ahora 
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <!-- title -->
      <h2>Elimina Programas y Restos no Necesarios Fácilmente <br> IObit Uninstaller 10 PRO hace que la desinstalación sea más fácil, limpia y segura. </h2>
      <!-- content -->
      <div class="content">
        <!-- feature-nav -->
        <ul class="feature-nav" id="barUl">
          <li class="active one">Más Fácil </li>
          <li class="two">Más Limpio</li>
          <li class="three">Más Seguro</li>
        </ul>
        <!-- feature-container -->
        <div class="feature-container clearfix">
          <!-- interface -->
          <div class="interface-list fl">
            <!-- Easier -->
            <div class="interface easier">
              <span>Desinstalar</span>
              <ul>
                <li class="act05"><img src="<?php echo getStaticUrl('images/feature-easier-icon05.png')?>" alt=""></li>
                <li class="act04"><img src="<?php echo getStaticUrl('images/feature-easier-icon04.png')?>" alt=""></li>
                <li class="act03"><img src="<?php echo getStaticUrl('images/feature-easier-icon03.png')?>" alt=""></li>
                <li class="act02"><img src="<?php echo getStaticUrl('images/feature-easier-icon02.png')?>" alt=""></li>
                <li class="act01"><img src="<?php echo getStaticUrl('images/feature-easier-icon01.png')?>" alt=""></li>
              </ul>
            </div>

            <!-- Cleaner -->
            <div class="interface cleaner">
              <span></span>
              <div class="picture"><span></span></div>
              <div class="xprogress"><span></span></div>
            </div>

            <!-- Safer -->
            <div class="interface safer">
              <ul>
                <li class="act one">
                  Barras de herramientas maliciosas y plugins basados en anuncios
                </li>
                <li class="act two">
                  Barras de herramientas y plugins  
                </li>
                <li class="three">
                  Barras de herramientas y plugins de confianza 
                </li>
              </ul>
            </div>
          </div>

          <!-- details -->
          <div class="detail-list fr" id="wheelUl">
            <!-- one -->
            <div class="detail">
              <h3>Desinstala cualquier programa, plugins & aplicaciones de Windows </h3>
              <ul>
                <li class="one">Programas que no pueden ser desinstalados por los métodos convencionales.</li>
                <li class="two">Programas de terceros que han sido instalados por otro software.</li>
                <li class="three">Extensiones del navegador instaladas sin tu permiso</li>
                <li class="four">Aplicaciones incorporadas de Windows 10 que no quieres</li>
              </ul>
            </div>

            <!-- two -->
            <div class="detail">
              <h3>Limpia todo el rastro de los programas desinstalados </h3>
              <ul>
                <li class="one">Restos de la desinstalación.</li>
                <li class="two">Restos de programas que ya han sido desinstalados. </li>
                <li class="three">Archivos y registros que no pueden ser desinstalados normalmente.</li>
              </ul>
            </div>

            <!-- three -->
            <div class="detail">
              <h3><br>Reduce riesgos en la seguridad</h3>
              <ul>
                <li class="one">Identifica plugins y te dice cuales puedes dejar en tu PC de forma segura.</li>
                <li class="two">Actualiza el software obsoleto para cerrar brechas en la defensa de tu PC.</li>
              </ul>
            </div>

          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Comparación de Ediciones </h2>
      <!-- table -->
      <table>
        <thead>
          <tr>
            <th colspan="2"></th>
            <th class="free" valign="bottom"><div>Tu versión actual</div></th>
            <th class="pro"><div>Edición PRO</div></th>
          </tr>
        </thead>
        <tbody>
          <!-- 01 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
            <td class="text">Desinstala programas, plugins y aplicaciones con 1 solo clic  </td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 02 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
            <td class="text">Escaneo los restos durante la desinstalación</td>
            <td class="free"><i class="all-icons yes">√</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 03 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
            <td class="text">Limpia en profundidad los archivos que no pueden ser eliminados con la desinstalación por defecto</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 04 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
            <td class="text">Elimina  programas que no se pueden desinstalar por medios convencionales   </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 05 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
            <td class="text">Desinstala programas de terceros que han sido instalados por otro software</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 07 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
            <td class="text">Limpia automáticamente los restos de programas desinstalados  </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 08 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
            <td class="text">Identifica y elimina plugins maliciosos y basados en anuncios</td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 09 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
            <td class="text">Un clic para actualizar todo el software importante </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 10 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
            <td class="text">Actualiza a la última versión de forma automática </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
          <!-- 11 -->
          <tr>
            <td class="icon"><img src="<?php echo getStaticUrl('images/icons11.png')?>" alt=""></td>
            <td class="text">Soporte técnico 24/7 disponible </td>
            <td class="free"><i class="all-icons">×</i></td>
            <td class="pro"><i class="all-icons">√</i></td>
          </tr>
        </tbody>
      </table>
      <!-- buybtn -->
      <div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-iu10preorder&ref=es_iu10preorderrc<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderrc-es');">
          <span>Resérvalo ahora </span>
        </a>
      </div>
    </div>
  </div>
  <!-- comparison end -->

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
          <p>"Llevo usando el desinstalador de IObit desde hace tiempo, me encanta, es muy completo, y ahora incluso está mejorando. Estoy muy contento y no podría estar sin él. Si nunca lo has usado te recomendó probarlo, siendo hoy 100% mejor que hace un año. Limpia toda la basura de registro de forma muy eficaz."</p>
        </div>
        <div class="box">
          <h3>Comentario de usuario</h3>
          <p>"Este programa me ha ahorrado mucho dinero. Antes de usarlo, mi ordenador era muy lento y no podía hacer nada. Ahora mi ordenador está limpio y gracias a este programa funciona mucho más rápido que antes. Muchas gracias IObit, os quiero."</p>
        </div>
        <div class="box active">
          <h3>Reseña de los Medios</h3>
          <p>"Si necesita una aplicación para que desinstale fácilmente aplicaciones limpiamente y completamente, IObit Uninstaller es la mejor opción. La utilidad, compatible con Windows 10, elimina fácilmente aplicaciones, incluyendo los archivos quedados frecuentemente cuando un programa es eliminado desde PC y barras de herramientas y plugins molestos de navegador. En resumen, si usa un PC de Windows, debería descargar IObit Uninstaller."</p>
        </div>
        <div class="box">
          <h3>Comentario de usuario</h3>
          <p>"He usado múltiples desinstaladores en el pasado, sin embargo, una vez que comencé a usar IOBit desde la versión 7.0, nunca volví a ninguna otra aplicación. Tiene una interfaz fácil de usar y hace el trabajo para el que está destinado con perfección. Te ayuda a limpiar el registro automáticamente, que de no hacerlo se acaba ahogando con todos los restos, manteniendo así la salud del PC. La capacidad de identificar Bundleware y eliminarlos es una gran característica presente en IOBit que no tiene rival."</p>
        </div>
        <div class="box">
          <h3>Comentario de usuario</h3>
          <p>"IObit Uninstaller encuentra complementos en mis navegadores que ni siquiera sabía que existían. La limpieza de los archivos residuales es muy buena; no deja ningún dato inútil en el software desinstalado. También me recuerda las actualizaciones disponibles para todos mis programas por lo que en general, el rendimiento de mi ordenador ha mejorado considerablemente. Es muy conveniente y fácil de usar, por lo que lo he recomendado a varios de mis amigos."</p>
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
        <dd>*Si no estás satisfecho, puedes cancelar tu pedido dentro del plazo de 30 días sin tener que pagar ninguna cuota.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
    </div>
  </div>
  <!-- bottom end -->
</div>
<!-- container end -->


<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
      IObit Uninstaller 10
    </div>
    <div class="number fl">
      Sólo quedan
      <div id="fReduce" class="reduceNum">
        <div class="listbox"><span class="list"><b>0</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
      </div>
      de los 500 de hoy
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/jquery-1.7.1.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>