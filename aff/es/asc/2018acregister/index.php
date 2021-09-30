<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../';
  }
  include $pRootUrl.'include/common.inc.php';

  if (empty($_GET['ref'])) {
    $_GET['ref'] = 'esaff_asc12_2018acregister';
  }

?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>65% de descuento para Advanced SystemCare PRO - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <div class="title">
        <h1>Advanced SystemCare 12 PRO</h1>
        <p>Utilidad potente de optimización garantiza un PC limpio, seguro y rápido</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="">
        <div class="discount fl">
          <h2>-65%</h2>
          <p>Exclusive for IObit Valued Users</p>
        </div>
      </div>
      <div class="pricebox">
        <dl class="price">
          <dt>Sólo <strong>16,99€ </strong><del>49,99€</del></dt>
          <dd>
            <a class="buybtn bigbtn" 
               href="https://www.iobit.com/buy.php?product=esaff-asc123pc1699&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'esaffasc122018acregister')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Comprar ahora</span>
              </div>
            </a>
          </dd>
          <dd>Suscripción de 1 año para 3 PCs</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <div class="feature wrapper">
    <h2>¿Qué Advanced SystemCare PRO puede hacer por usted?</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>LIMPIA PROFUNDAMENTE</h3>
          <p>Limpia profundamente para solucionar problemas del registro y evitar mensajes  de choque y error de Windows.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>CUIDA AUTOMÁTICAMENTE SU PC</h3>
          <p>Cuida automáticamente su PC según lo planeado y limpia RAM para mejorar el rendimiento de PC.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>ACELERA PC</h3>
          <p>Aumenta velocidad de inicio y del internet hasta 200% y 300% más rápida para reducir el retraso del sistema y mejorar experiencia en línea.*</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>PROTEGE PC Y PRIVACIDAD SEGUROS</h3>
          <p>Disfraza tu huella digital para proteger tu<br>
             comportamiento privado en línea y bloquear<br>
             los accesos secretos a tus datos personales<br>
             para evitar que tu privacidad se espía por otros. </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Premios Mundiales</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt>
        <h3>Comentarios de usuarios</h3></dt>
        <dd>
          <h4>"No sólo es un gran producto, pero el soporte es igualmente excelente."</h4>
        </dd>
        <dd>"Al principio me gusta mucho la versión gratis y finalmente compré la versión completa. Es efectivo mantener mi equipo limpio y libre de"bug" durante años y todavía no me ha defraudado. Me puse en contacto con Advanced SystemCare recientemente y me respondieron dentro de uno o dos día con todo lo que necesitaba saber. En mi mente soporte es muy importante en la decisión de usar un producto a largo plazo y ASC cuenta con tanto producto y soporte."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Comentarios de usuarios</h3></dt>
        <dd>
          <h4>"Se han eliminado Spyware y Malware que mi Antivirus los omita."</h4>
        </dd>
        <dd>"Hemos utilizado hasta una docena de programas diferentes para mantener nuestros ordenadores funcionar sin problema y eliminar gusanos. Tardó horas cada semana en mantener seguridad y rendimiento. Ahora, con Advanced SystemCare Pro, todos están en un lugar y nos tardan pocos minutos cada dos días para hacer el mismo trabajo con mucha confianza."
        </dd>
      </dl>
      <dl class="active">
        <dt>
        <h3>Reseña de los Medios</h3></dt>
        <dd>
          <h4>“El programa ideal para reparar y limpiar tu Windows.”</h4>
        </dd>
        <dd>“Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.”
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Comentarios de usuarios</h3></dt>
        <dd>
          <h4>"Mi elección todavía es abrumadoramente Advanced SystemCare Pro."</h4>
        </dd>
        <dd>"Como un técnico de reparación de computadoras, encuentro que mediante la descarga y el escaneo con ASC gratis se pueden solucionar problemas más comunes. Cuando terminó la reparación de PC, en general recomiendo al cliente que compren la versión Pro. ¿Quién necesita un técnico cuando tiene Advanced SystemCare Pro que trabaja para su sistema 24-7? Es el mejor producto para usuarios doméstico. Muchas gracias por hacer mi trabajo más fácil."
        </dd>
      </dl>
      <dl>
        <dt>
        <h3>Comentarios de usuarios</h3></dt>
        <dd>
          <h4>"Mi sistema nunca ha funcionado mejor."</h4>
        </dd>
        <dd>"En mi opinión, ASC Pro de IObit es la mejor aplicación de mantenimiento disponible para usuarios de Windows, y ambas sus versión de shareware y freeware ofrecen excelentes funciones y valor. IObit ofrece soporte técnico experto que es competente, bien informado y sensible, añadiendo valor significativo a sus productos y servicios para sus clientes."
        </dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay">
        </div>
        <p>Bruce Ramsay</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></div>
        <p>Bob Bassett</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="Softonic"></div>
        <p>Softonic</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick">
        </div>
        <p>Charles R. Widick</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo getStaticUrl('images/gordon-griswold.png')?>" alt="Gordon Griswold">
        </div>
        <p>Gordon Griswold</p>
      </li>
    </ul>
  </div>
  <!-- review end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Disfrute de un PC limpio, seguro y rápido con el optimizador todo en uno para PC</h2>
      <div class="pricebox">
        <dl class="price">
          <dt>Sólo <strong>16,99€ </strong><del>49,99€</del></dt>
          <dd>
            <a class="buybtn bigbtn"
               href="https://www.iobit.com/buy.php?product=esaff-asc123pc1699&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'esaffasc122018acregister')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Comprar ahora</span>
              </div>
            </a>
          </dd>
          <dd>Suscripción de 1 año para 3 PCs</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- container end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <p class="annotation">Nota: *. Datos pueden variar según sistema o computadora.</p>
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer">© 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>OFERTA EXCLUSIVA</h2>
        <p><strong>-65%</strong> para mantener su PC funcionar al máximo rendimiento</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt><strong>16,99€ </strong><del>49,99€</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=esaff-asc123pc1699&ref=<?php echo $_GET['ref']?>&aff=<?php echo $_GET['aff']?>"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'esaffasc122018acregister')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Comprara ahora</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo $pResUrl; ?>script/script.js"></script>
</body>
</html>