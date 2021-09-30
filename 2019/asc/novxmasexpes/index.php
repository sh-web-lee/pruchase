<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'esascnovxmasexpes_p' . $date;
  $c_name_t='esascnovxmasexpes_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=50;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('xr_asce'))){
  $refStr.='-'.$_GET['pop'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>88% de descuento de Navidad para Advanced SystemCare PRO – IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <div class="title">
        <h1>¡ACELERA Y PROTEGE TU PC AHORA!</h1>
        <p>Limpieza profunda, 300% más rápido y protección de la privacidad personal en tiempo real</p>
      </div>
      <div class="left fl">
        <h4>OFERTA DE NAVIDAD</h4>
        <h2>88% <small>DE DESCUENDO</small></h2>
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <div class="right fr">
        <div class="chart">
          <div class="clist one">
            <span class="cost"><strong>19,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">12 Diciembre</span>
          </div>
          <div class="clist two">
            <span class="cost"><strong><big>16</big>,77€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="text">Solo quedan <b class="pickNum">50</b>* piezas, ¡date prisa!</span>
          </div>
          <div class="clist three">
            <span class="cost"><strong>22,99€</strong></span>
            <span class="line"></span>
            <span class="point"></span>
            <span class="month">14 Diciembre</span>
          </div>
        </div>
        <div class="price">
          <p><strong><big>16</big>,77€</strong> <del>139,92€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=es-asc133pcsdpfisu1677&ref=es_asc133pcpfsdisu1677purchase1911exp<?php echo $refStr;?>&refs=es_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1911exp-es');">
            COMPRAR AHORA
          </a>
        </div>
      </div>
    </div>
    <span class="snow snow01"></span>
    <span class="snow snow02"></span>
    <span class="snow snow03"></span>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- map start -->
  <div class="map">
    <div class="wrapper">
      <h2>
        Disfruta de un PC más rápido y seguro con el mejor rendimiento y protección con<br>
        Advanced SystemCare 13 PRO
      </h2>
      <p>Elección de más de 10 millones de usuarios internacionales</p>
    </div>
  </div>
  <!-- map end -->

  <!-- feature start -->
  <?php if($_GET['st']!='asc_wr'):?>
    <!-- feature start -->
    <div class="feature">
      <div class="wrapper clearfix">
        <!-- feature details -->
        <ul class="left-details fl">
          <!-- 01 -->
          <li class="padding-left50 top">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
              <dd class="fl">
                <h3>200%*</h3>
                <p>
                  Reduce el retraso de sistema y acelera la<br>
                  velocidad de tu PC hasta 200% más rápida!
                </p>
              </dd>
            </dl>
          </li>
          <!-- 02 -->
          <li class="middle">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
              <dd class="fl">
                <h3>100% protección</h3>
                <p>
                  Borra los rastros de privacidad para<br>
                  evitar que se rastreen
                </p>
              </dd>
            </dl>
          </li>
          <!-- 03 -->
          <li class="padding-left30 bottom">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
              <dd class="fl">
                <h3>Más profundo</h3>
                <p>
                  Repara los problemas de registro para<br>
                  reducir los bloqueos de Windows y<br>
                  los mensajes de error
                </p>
              </dd>
            </dl>
          </li>
        </ul>
        <ul class="right-details fr">
          <!-- 04 -->
          <li class="padding-left165 top">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
              <dd class="fl">
                <h3>300%*</h3>
                <p>
                  Acelere la velocidad de descarga, navegación,<br>
                  juegos, visualización de YouTube hasta un<br>
                  300% más rápida
                </p>
              </dd>
            </dl>
          </li>
          <!-- 05 -->
          <li class="padding-left180 middle">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon05.png" alt=""></dt>
              <dd class="fl">
                <h3>Función automática</h3>
                <p>
                  Detiene automáticamente los procesos<br>
                  no utilizados para liberar RAM y mejorar el<br>
                  rendimiento de PC
                </p>
              </dd>
            </dl>
          </li>
          <!-- 06 -->
          <li class="padding-left75 bottom">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon06.png" alt=""></dt>
              <dd class="fl">
                <h3>En Tiempo real </h3>
                <p>
                  Protección contra amenazas de<br>
                  seguridad para PC y navegación en tiempo real
                </p>
              </dd>
            </dl>
          </li>
        </ul>
        <!-- clear float -->
        <div class="clear"></div>
        <!-- a.intro -->
        <a class="more" href="javascript:void (0);">Más información sobre la edición PRO>></a>
      </div>
    </div>
    <!-- feature end -->
  <?php else:?>
    <!-- feature start -->
    <div class="feature upd">
      <div class="wrapper clearfix">
        <!-- feature details -->
        <ul class="left-details fl">
          <!-- 01 -->
          <li class="padding-left50 top">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
              <dd class="fl">
                <h3>200%*</h3>
                <p>
                  Reduce el retraso de sistema y acelera la<br>
                  velocidad de tu PC hasta 200% más rápida!
                </p>
              </dd>
            </dl>
          </li>
          <!-- 02 -->
          <li class="middle">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
              <dd class="fl">
                <h3>100% protección</h3>
                <p>
                  Borra los rastros de privacidad para<br>
                  evitar que se rastreen
                </p>
              </dd>
            </dl>
          </li>
          <!-- 03 -->
          <li class="padding-left30 bottom">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
              <dd class="fl">
                <h3>Más profundo</h3>
                <p>
                  Repara los problemas de registro para<br>
                  reducir los bloqueos de Windows y<br>
                  los mensajes de error
                </p>
              </dd>
            </dl>
          </li>
        </ul>
        <ul class="right-details fr">
          <!-- 04 -->
          <li class="padding-left165 top">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon04.png" alt=""></dt>
              <dd class="fl">
                <h3>300%*</h3>
                <p>
                  Acelere la velocidad de descarga, navegación,<br>
                  juegos, visualización de YouTube hasta un<br>
                  300% más rápida
                </p>
              </dd>
            </dl>
          </li>
          <!-- 05 -->
          <li class="padding-left180 middle">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/upd_software.png" alt=""></dt>
              <dd class="fl">
                <h3>Actualización de software <br>
                  segura <img src="<?php echo $pResUrl;?>images/attention.png" alt="ATTENTION"></h3>
                <p>
                  Con sólo un clic, puede actualizar software <br>
                  importante sin la intervención del usuario, <br>
                  incluido <b>WinRAR*, que fallo de seguridad <br>
                    descubierto puede pone en peligro su <br>
                    computadora por años.</b><br>
                  <em>* Actualizar inmediatamente, una vez que la <br>
                    nueva versión oficial esté lista.</em>
                </p>
              </dd>
            </dl>
          </li>
          <!-- 06 -->
          <li class="padding-left75 bottom">
            <dl class="clearfix">
              <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon06.png" alt=""></dt>
              <dd class="fl">
                <h3>En Tiempo real </h3>
                <p>
                  Protección contra amenazas de<br>
                  seguridad para PC y navegación en tiempo real
                </p>
              </dd>
            </dl>
          </li>
        </ul>
        <!-- clear float -->
        <div class="clear"></div>
        <!-- a.intro -->
        <a class="more" href="javascript:void (0);">Más información sobre la edición PRO>></a>
      </div>
    </div>
    <!-- feature end -->
  <?php endif;?>
  <!-- feature end -->

  <!-- comparison -->
  <div class="comparison wrapper">
    <h2>¡No permitas que archivos basura ralenticen tu PC!</h2>
    <table>
      <thead>
        <tr>
          <th class="itema"><big>Problemas</big> de PC que puedes encontrar:</th>
          <th class="itemb"><big>Soluciones</big> que puedes disfrutar:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">Sistema inestable que puede <span>colapsar</span></td>
          <td class="itemb">
            <span>Limpieza profunda</span> de archivos de registro para solucionar problemas de sistema
          </td>
        </tr>
        <tr>
          <td class="itema">
            La optimización manual <span>no puede garantizar</span> la alta velocidad de tu PC en tiempo real
          </td>
          <td class="itemb">
            <span>Limpieza automática de RAM</span> mantiene tu ordenador funcionando sin problemas
          </td>
        </tr>
        <tr>
          <td class="itema">
            El rendimiento del disco <span>no está del todo optimizado</span>
          </td>
          <td class="itemb">
            Motor de optimización de disco <span>acelera</span> al máximo el rendimiento del disco
          </td>
        </tr>
        <tr>
          <td class="itema">Conexión a internet <span>lenta e inestable</span></td>
          <td class="itemb">
            Aceleración de la conexión a internet acelera el internet hasta un <span>300%* más rápido</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Ligera</span> optimización de la velocidad de inicio
          </td>
          <td class="itemb">
            Optimización de inicio para un inicio hasta un <span>200%* más rápido</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            La protección más <span>básica</span> no puede garantizar la seguridad de tu privacidad
          </td>
          <td class="itemb">
            Protección de datos personales <span>protege completamente</span> tu privacidad
          </td>
        </tr>
        <tr>
          <td class="itema">
            El spyware más reciente puede <span>entrar a</span> tu PC y atacar tu sistema  
          </td>
          <td class="itemb">
            Protección en tiempo real <span>bloquea infecciones de spyware</span> 
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper clearfix">
      <h2>¡La última versión Advanced SystemCare 13<br> puede hacer mucho más de lo que crees!</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>Más limpio</h3>
          <p>
            Detecta y limpia <b>4GB*</b> más de archivos basura
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>Más Completo</h3>
          <p>
            Barre rastros personales de más de <b>200</b> programas y <b>15</b> navegadores para todas las cuentas de usuario
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>Más seguro</h3>
          <p><b>Protege tu email</b> de varias amenazas por correo electrónico </p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>Más grande</h3>
          <p>Una mayor base de datos te permite actualizar un <b>60%</b> más software</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>LO HACEMOS LO MEJOR QUE PODEMOS PARA SATISFACER<br> A NUESTROS USUARIOS EN DONDE SEA QUE ESTÉN</h2>
    <div class="reviewbox">
      <h3>Lo que dicen de nosotros</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="Softonic"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></li>
      </ul>
      <div class="details">
        <div>
          <h4>Softonic</h4>
          <p>
            “Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.”
          </p>
        </div>
        <div class="active">
          <h4>Bruce Ramsay</h4>
          <p>
            "Con la nueva compra de la versión complete, mi ordenador ha estado libre de “bugs” por años y no me ha dejado solo en ningun momento. Contacte ASC recientemente y respondieron en 1 dia con todo lo que necesitaba saber."
          </p>
        </div>
        <div>
          <h4>Hank Ewert</h4>
          <p>
            "No soy un expert en ordenadores como mucha gente lo es. No cuantos programas he probado durante años, todos diciendo ser los mejores pero nunca llegando cerca a ASC que yo sepa. Desde que tengo este programa no he tenido que llamar a un tecnico. A sobrepasado mis expectativas, siempre actualizado y los graficos son geniales. Muchas gracias a todos los que estan hacienda mi vida mas facil."
          </p>
        </div>
        <div>
          <h4>Charles R. Widick</h4>
          <p>
            "Como tecnico de ordenadores, encuentro que al descargar y escanear ASC Gratis, la mayoría de problemas estan resueltos. Cuando acabo una reparación, usualmente sugiero al cliente comprar el paquete PRO. Quien necesita un tecnico cuando tienes el poder de ASC PRO trabajando en tu sistema 24-7? Este es el major product que un usuario puede comprar desde casa. Gracias por hacer mi trabajo más fácil."
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
  <div class="bottomt">
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
          <dt><img src="<?php echo getStaticUrl('images/payment.png') ?>" alt=""></dt>
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
          <dd>
            *. Datos pueden variar basados en diferentes sistemas u ordenadores.
          </dd>
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
        <h2>Oferta exclusiva para esta Navidad 2019</h2>
        <div class="numbox">
          <p>
            Date prisa, solo quedan 
            <div class="flipNum">
              <div class="listbox">
                <div class="list">
                  <b>0</b>
                </div>
              </div>
              <div class="listbox">
                <div class="list" >
                  <b>0</b>
                </div>
              </div>
            </div>  
          </p>
        </div>
      </div>
      <div class="price fr">
        <p><strong>16,77€</strong> <del>139,92€</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=es-asc133pcsdpfisu1677&ref=es_asc133pcpfsdisu1677purchase1911exp<?php echo $refStr;?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1911exp-es');">
          ¡Renueva y ahorra ahora!
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>