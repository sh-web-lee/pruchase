<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = '2020xmas_p' . $date;
  $c_name_t = '2020xmas_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = rand(155, 165);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}
include $pRootUrl . 'include/common.inc.php';
$refStr = empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= $pResUrl; ?>style/Normalize.css" type="text/css">
  <link rel="stylesheet" href="<?= $pResUrl; ?>style/common.css" type="text/css">
  <link rel="icon" href="https://codes.iobit.com/iobit/images/favicon.ico" mce_href="https://codes.iobit.com/iobit/images/favicon.ico" type="image/x-icon">
  <!-- <link rel="stylesheet" href="./static/css/swiper.min.css"> -->
  <!-- <link rel="stylesheet" href="./static/css/animate.css"> -->
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700;800;900&display=swap" rel="stylesheet">
  <script src="https://cdn.bootcdn.net/ajax/libs/less.js/3.9.0/less.min.js"></script>
  <script src="https://cdn.bootcdn.net/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <!-- <script src="https://cdn.bootcdn.net/ajax/libs/wow/1.1.2/wow.min.js"></script> -->
  <title>89% de descuento de Navidad para Advanced SystemCare PRO – IObit</title>
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <header>
    <a href="https://www.iobit.com/es/index.php" style="position: absolute;left: 20%; top: 14%;">
      <img src="<?= $pResUrl; ?>images/logo.png" alt="">
    </a>
    <div style="text-align: center;">
      <img src="<?= $pResUrl; ?>images/title.png" alt="">
      <p style="margin-top: -27px;font-size: 20px; color: #442325;font-weight: 600;">Acelera y optimiza tu PC con Advanced SystemCare PRO</p>
    </div>
    <!-- content -->
    <div class="content clearfix">
      <!-- box -->
      <div class="left box clearfix">
        <dl class="left">
          <dt>
            <img src="<?php echo getStaticUrl('images/banner-asc.png') ?>" alt="Advanced SystemCare PRO">
          </dt>
          <dd>
            <del>49,99 €</del> (1 año/3 PCs)
          </dd>
        </dl>
        <dl class="left">
          <h3 style="padding-right: 30px;">
            <img src=" <?php echo getStaticUrl('images/descu.png') ?>" alt="">
          </h3>
          <dt style="margin-top:-51px ;">
            <img src=" <?php echo getStaticUrl('images/banner-regalo.png') ?>" alt="IObit Uninstaller PRO" style="margin-left: 57px;">
          </dt>
          <dd style="margin-top:-31px ;">
            <del>99,93 €</del> (1 año/1 PC)
          </dd>
        </dl>
      </div>
      <!-- dl -->
      <div class="message right">
        <!-- solo -->
        <p class="solo"><span class="all-icons"></span> Solo quedan <b class="packsNum">21</b> paquetes </p>
        <!-- price -->
        <p class="price"><big>16</big> <del>149,92€</del></p>
        <!-- buybtn -->
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=es-asc143pciusdpf1677&ref=es_asc143pciusdpf1677purchase2011exp<?= $refStr; ?>&refs=es_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase2011exp-es') ">
          <span class="all-icons"></span>
          COMPRAR
        </a>
        <!-- notice -->
        <p class="notice">Entrega inmediata por correo electrónico</p>
        <!-- bottom -->
        <p class="bottom">
          <img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""> 60 Días Reembolso
          <img src="<?php echo getStaticUrl('images/seguro.png') ?>" alt=""> Pago seguro
          <img src="<?php echo getStaticUrl('images/service.png') ?>" alt="" style="width: 50px;">
        </p>
      </div>
    </div>
    <!-- <!-- content结束 -->
  </header>
  <div class="navtop">
    Aunque la versión Free tenga una calidad más que aceptable, la auténtica estrella es Advanced SystemCare Pro
    <img src="<?= $pResUrl; ?>images/Chip_Logo.png" alt="">
  </div>
  <nav>
    <div>
      <img src="<?= $pResUrl; ?>images/tree.png" alt="">
      <span style="font-size: 42px; font-weight: 600; color: #233653;;margin-left: 22px;">
        ¿Por qué escoger Advanced SystemCare PRO?</span>
    </div>
    <div style="margin-top: 14px;">
      <img src="<?= $pResUrl; ?>images/acceimg4.png" alt="" id="chaimg">
    </div>
    <ul class="topimg">
      <li>
        <div><img src="<?= $pResUrl; ?>images/clean.png" alt=""></div>
        <div style="margin-left: 11px;margin-top: 8px;">
          <h5>Más profundo</h5>
          <p>Repara los problemas de registro para reducir los bloqueos de Windows y los mensajes de error</p>
        </div>
      </li>
      <li>
        <div><img src="<?= $pResUrl; ?>images/safety.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Más seguro</h5>
          <p>
            Limpia rastros en línea, oculta tu firma digital y bloquea el acceso secreto a archivos personales para proteger destacablemente tu PC y tu privacidad online.
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/speed.png" alt=""></div>
        <div style="margin-left: 11px;margin-top: 8px;">
          <h5>Más rápido</h5>
          <p>
            Optimiza las configuraciones del navegador para acelerar la conexión a Internet hasta 300%* más rápido.
          </p>
        </div>
      </li>
      <li class="top">
        <div><img src="<?= $pResUrl; ?>images/AI.png" alt=""></div>
        <div style="margin-left: 11px;">
          <h5>Más inteligente</h5>
          <p>
            Modo IA más inteligente para escaneo inteligente y limpieza y optimización premium de PC
          </p>
        </div>
      </li>
    </ul>
  </nav>
  <aside>
    <div>
      <img src="<?= $pResUrl; ?>images/peop.png" alt="" style="vertical-align: bottom;">
      <span style="font-size: 38px; font-weight: 600; color: #233653;;margin-left: 22px;">
        ¡PAGA UN PRECIO REDUCIDO Y ADEMÁS TE LLEVAS 3 REGALOS! *</span>
    </div>
    <div class="asibox">
      <ul>
        <li>
          <div><img src="<?= $pResUrl; ?>images/IU.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Ahora 0€</h1>
            <h4>IObit Uninstaller PRO puede desinstalar programas y aplicaciones en Windows, eliminar los restos de software automáticamente y actualizar el software fácilmente. Las funciones avanzadas de edición PRO garantizan un mejor rendimiento de tu PC y una navegación en línea más segura.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/sd.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Ahora 0€</h1>
            <h4>Smart Defrag PRO es un software de desfragmentación eficaz, el cual ayuda a acelerar el pc y la velocidad de acceso a los datos. Supervisa el estado del disco en tiempo real: temperatura, uso, analiza el informe, etc.</h4>
          </div>
        </li>
        <li>
          <div><img src="<?= $pResUrl; ?>images/PF.png" alt=""></div>
          <div style="margin-left: 9px;">
            <h1>Ahora 0€</h1>
            <h4>Protected Folder es una efectiva herramienta de protección de archivos que garantiza la seguridad de tu privacidad, así como la de tus carpetas y datos más importantes. </h4>
          </div>
        </li>
      </ul>
    </div>
  </aside>
  <div style="text-align: center;">
    <img src="<?php echo getStaticUrl('images/media.png') ?>" alt="">
  </div>
  <div class="review wrapper">
    <h2>LO HACEMOS LO MEJOR QUE PODEMOS PARA SATISFACER A NUESTROS USUARIOS <br> EN DONDE SEA QUE ESTÉN</h2>
    <div class="reviewbox">
      <h3>Lo que dicen de nosotros</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/softonic.png') ?>" alt="Softonic"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png') ?>" alt="Bruce Ramsay"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/hank-ewert.png') ?>" alt="Hank Ewert"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/charles-r-widick.png') ?>" alt="Charles R. Widick"></li>
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
  <div class="asc">
    <h1>¡Advanced SystemCare 14 PRO puede hacer incluso más que la versión anterior!</h1>
    <img src="<?= $pResUrl; ?>images/line.png" alt="">
    <div class="asc-box">
      <ul>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 1.png" alt=""></div>
          <h2>Más inteligente</h2>
          <p>El nuevo modo IA puede optimizar completamente tu PC de acuerdo con tus necesidades</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 2.png" alt=""></div>
          <h2>SauMás limpioberer</h2>
          <p>Elimina un 50% más de archivos basura para un sistema más limpio</p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 3.png" alt=""></div>
          <h2>Más rápido</h2>
          <p>Hace que tu PC se inicie hasta el doble de rápido que antes </p>
        </li>
        <li>
          <div class="po"><img src="<?= $pResUrl; ?>images/icon 4.png" alt=""></div>
          <h2>Actualizado</h2>
          <p>Mantiene actualizado un 33% más de software importante para que los hackers no puedan abusar de las vulnerabilidades.</p>
        </li>
      </ul>
    </div>
  </div>
  <div class="sect">
    <h1 style="margin-bottom: 10px;">Recupera todas las funciones PRO para resolver los problemas de tu PC</h1>
    <div style="text-align:center;margin:50px 0 0 0">
      <img src="<?= $pResUrl; ?>images/line.png" alt="">
    </div>
    <div class="contains">
      <table>
        <thead>
          <tr>
            <th>¡Cuidado! Actualmente corres el riesgo de...</th>
            <th>En su lugar, puedes disfrutar ...</th>
          </tr>
        </thead>
        <tr>
          <td>Tu PC <b>responde lentamente</b> y te hace esperar</td>
          <td>Limpieza completa del sistema para el PC <b>más rápido</b></b></td>
        </tr>
        <tr>
          <td>Conexión a Internet inestable y tiempos de <b>carga de páginas prolongados</b> </td>
          <td>Optimización del navegador para una conexión a <b>Internet hasta un 300% más rápida</b></td>
        </tr>
        <tr>
          <td>Sistema inestable que <b>se bloquea o se congela</b> de vez en cuando</td>
          <td>Limpieza de registro profunda para <b> el sistema más estable</b></td>
        </tr>

        <tr>
          <td><b>Esperando</b> que tu PC se inicie</td>
          <td>Máxima aceleración de inicio para <b>no volver a esperar nunca más</b></td>
        </tr>
        <tr>
          <td>Los programas pueden acceder a <b>tus archivos</b> personales</td>
          <td><b>Protección de privacidad total</b> que bloquea los programas que no son de confianza</td>
        </tr>
        <tr>
          <td>Tu PC <b>no puede ejecutar software pesado</b></td>
          <td>La limpieza automática de RAM mantiene tu PC <b>funcionando sin problemas</b></td>
        </tr>
        <tr>
          <td>Spyware puede ingresar a tu PC y <b>robar tus datos</b></td>
          <td><b>Protección en tiempo real</b> para mantener el software espía y otro malware fuera de tu PC</td>
        </tr>
      </table>
    </div>

  </div>
  <!-- <section>
    <div class="check">
      <h2>La comparación entre versión FREE y PRO: </h2>
      <ul class="check-ul">
        <li>Limpieza y optimización básica</li>
        <li>Bloquea links malicios y mensajeros sospechos en el email </li>
        <li>Modo IA más inteligente para escaneo inteligente y limpieza y optimización premium de PC </li>
        <li>Encendido hasta un 200% más rápido</li>
        <li>Encendido hasta un 300% de velocidad Web</li>
        <li>1 clic para mantener programas importantes actualizados</li>
        <li>Protección completa de PC para detectar y eliminar las infecciones más profundas</li>
        <li>Protección Premium automática que limpia información personal que puede ser rastreada</li>
        <li>Disimula la huella digital para mantener tu comportamiento privado en línea </li>
        <li>Manttine tus datos personales alejados de programas no confiables</li>
        <li>Detecta y Bloquea continuamente agujeros de seguridad en tiempo real</li>
        <li>Actualización automática de la última versión</li>
        <li>Soporte técnico Gratis 24/7</li>
      </ul>
      <div class="checkbox">
        <h3>Free Versión</h3>
        <ul>
          <li><img src="<?= $pResUrl; ?>images/ri.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/ri.png" alt=""></li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li>-</li>
          <li style="border: 0;">-</li>
        </ul>
      </div>
      <div class="checkbox2">
        <h3>PRO Versión</h3>
        <ul>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
          <li><img src="<?= $pResUrl; ?>images/rr.png" alt=""></li>
        </ul>
      </div>
    </div>
  </section> -->
  <footer>
    <ul>
      <li class="left">
        <img src="<?= $pResUrl; ?>images/size72.png" alt="" class="left">
        <div class="left">
          <h3 style="margin-bottom: 18px;">Garantía de reembolso</h3>
          <p>Si no estás satisfecho en los primeros <br>
            60 días, te devolvemos el dinero</p>
        </div>
      </li>
      <li class="left">
        <h3 style="text-align: center;">Formas de pago</h3>
        <img src="<?= $pResUrl; ?>images/icon.png" alt="">

      </li>
    </ul>
  </footer>
  <div class="laster">
    <h5>
      Nota: <br>
      *. Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento. <br>
      *. Datos pueden variar basados en diferentes sistemas u ordenadores.
      <h6>Copyright ©2005 - 2020 IObit. Todos los derechos reservados</h6>
    </h5>
  </div>
  <div id="floatlayer" class="floatlayer">
    <div class="ayer">
      <div style="margin-top: -30px;"><img src="<?= $pResUrl; ?>images/box.png" alt=""></div>
      <div style="  color: #FFF4C7;font-size: 21px;">
        <i style="font-size: 21px;color: #FFFFFF;; ">89%</i> DTO y regalos exclusivos de Navidad para Advanced SystemCare PRO
      </div>
      <div class="text">
        <p style="margin-top: -35px;"><span>16<strong>,77€</strong> <b></b><i>149,92€</i></span> </p>
        <p>
          <a href="https://www.iobit.com/buy.php?product=es-asc143pciusdpf1677&ref=es_asc143pciusdpf1677purchase2011exp<?= $refStr; ?>&refs=es_purchase_asc">
            <button onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase2011exp-es')">
              Comprar ahora</button>
          </a>
        </p>
        <p style="height: 16px; font-size: 14px;font-weight: 500;color: #FFFBF0;margin-top: 5px;">Solo quedan <i id="viewNum-2">3</i> paquetes
        </p>
      </div>
    </div>
  </div>
  </div>

</body>

<script>
  var num = 0
  $('.pole').on('click', function() {
    num--
    $(".con li").removeClass('special')
    $(".con li").eq(num).addClass('special')
    if (num == -1) {
      num = 2
    }
  })
  $('.pori').on('click', function() {
    num++
    $(".con li").removeClass('special')
    $(".con li").eq(num).addClass('special')
    if (num == 2) {
      num = -1
    }
  })
  $('.topimg li').hover(function() {
    // alert('11')
    var index = $(this).index()
    switch (index) {
      case 0:
        $('#chaimg').attr('src', '<?= $pResUrl; ?>images/acceimg2.png')
        break;
      case 1:
        $('#chaimg').attr('src', '<?= $pResUrl; ?>images/acceimg3.png')
        break;
      case 2:
        $('#chaimg').attr('src', '<?= $pResUrl; ?>images/acceimg1.png')
        break;
      case 3:
        $('#chaimg').attr('src', '<?= $pResUrl; ?>images/acceimg4.png')
        break;
    }
  });
  // $('#floatlayer').slideDown()
  $(window).on('scroll', function() {
    if ($(window).scrollTop() > $(".navtop").offset().top) {
      $('#floatlayer').slideDown(); //滑动隐藏
    } else {
      $('#floatlayer').slideUp(); //滑动出现
    }
  });
  $('.pobox').hover(function() {
    $('.pobox').addClass('hidd');

  }, function() {
    $('.pobox').removeClass('hidd');
  })

  function cSet(name, value) {
      var Days = 2;
      var exp = new Date();
      name = name + exp.getDate();
      exp.setTime(exp.getTime() + Days * 24 * 60 * 60 * 1000 * 2);
      document.cookie = name + "=" + escape(value) + ";expires=" + exp.toGMTString();
  }
  function cGet(name) {
      var exp = new Date();
      name = name + exp.getDate();
      var arr, reg = new RegExp("(^| )" + name + "=([^;]*)(;|$)");
      if (arr = document.cookie.match(reg))
          return unescape(arr[2]);
      else
          return null;
  }

  function getView() {
    $.ajax({
      type: 'GET',
      url: '2020xmas.php',
      data: 'action=getView',
      success: function(res) {
        $("#viewNum").html(res);
        setTimeout("getView()", )
      }
    });
  }

  function packInit(){
      packs = cGet('2020xrasce');
      if(packs == null){
          packs = 50;
      }else {
          packs--;
          if(packs <= 3)
              packs = 3;
      }
      $('.packsNum').html(packs);
      $('#viewNum-2').html(packs)
  }
  function getSales(){
      packInit();
      $('.packsNum').html(packs);
      $('#viewNum-2').html(packs);
      cSet('2020xrasce',packs);
      if(packs >= 40) setTimeout('getSales()',6000);
      if(packs < 40 && packs >= 20) setTimeout('getSales()',20000);
      if(packs < 20) setTimeout('getSales()',7000);
  }
  packInit();
  setTimeout('getSales()',3000);

  var className = ["one", "two", "three", "four"];
  var index = 1;
  var nextFun = function() {
    var addName = className.pop();
    className.unshift(addName);
    for (var i = 0; i < $(".review ul li").length; i++) {
      $(".review ul li").eq(i).attr("class", className[i]);
    }
    if (index < 3) {
      index++;
      review(index);
    } else {
      index = 0;
      review(index);
    }
  };

  var prevFun = function() {
    var addName = className.shift();
    className.push(addName);
    for (var i = 0; i < $(".review ul li").length; i++) {
      $(".review ul li").eq(i).attr("class", className[i]);
    }
    if (index > 0) {
      index--;
      review(index);
    } else {
      index = 3;
      review(index);
    }

  };

  var review = function(index) {
    $(".review .details div").eq(index).addClass("active").siblings().removeClass('active');
  };
</script>

</html>