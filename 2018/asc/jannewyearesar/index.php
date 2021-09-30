<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  
  $buyNum = ceil(microtime_float()*1000/20000) - 69041325;
  $buyNum = number_format($buyNum);
  
  $packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12')
)){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> 90% de descuento y regalo para Advanced SystemCare PRO – IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script>
  function decreasingPacks() {
    $.ajax({
      type: "GET",
      url: "<?php echo $pRootUrl;?>callback.php",
      data: "action=getPacksNum&packsCount=<?php echo $packsCount;?>r="+Math.random(),
      success: function(packs) {
        $('#packs').html(packs);
        setTimeout('decreasingPacks()', 10000);
      }
    });
  }
  setTimeout('decreasingPacks()', 10000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <div class="bg"></div>
  <div class="header">
    <div class="wrapper">
      <a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
    </div>
  </div>
  <div class="wrapper">
    <!-- banner start -->
    <div class="banner">
      <h1>OFERTA EXCLUSIVA</h1>
      <h2>- 90% y obtén regalos exclusivos para Advanced SystemCare 11 PRO</h2>
      <span class="gift-box"></span>
      <div class="ball"></div>
      <div class="left-message">
        <img src="<?php echo $pResUrl; ?>images/asc-box.png" alt="" class="asc-box">
        <p>Oferta termina en: <span> <span>06</span>h: <span>06</span>min: <span>06</span>s: <span>06</span>ms <sup>*</sup></span> </p>
      </div>
      <div class="right-message">
        <h2>Advanced SystemCare PRO 11 </h2>
        <p>1 año / 3 PCs <strong>+ Paquete de regalo exclusivo</strong></p>
        <dl class="price">
          <dt>
            <del>ARS 2.992,00</del>  <strong>ARS 279,00</strong> <span>¡Se ahorra ARS 2.713,00!</span>
          </dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=ar-asc113pcpfsdiu279&ref=ar_asc113pcpfsdiupurchase1801<?php echo $refStr;?>&refs=ar_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1801-ar')" class="buybtn">
              <span><i></i> <em>Comprar ahora</em></span>
            </a>
          </dd>
          <dd> <img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Más de 6,378,528 personas han comprado</dd>
        </dl>
      </div>
      <div class="line"></div>
    </div>
    <!-- banner end -->
    <div class="asc-message clearfix">
      <h2>Disfruta de un PC más rápido y seguro con el mejor rendimiento y protección con <br> Advanced SystemCare 11 PRO</h2>
      <img src="<?php echo $pResUrl; ?>images/asc-content.png" alt="" class="img-box">
      <ul>
        <li class="list01">¡Acelera la velocidad de tu PC hasta 300% más rápida!*</li>
        <li class="list02">Optimización más completa para máximo rendimiento</li>
        <li class="list03">Protección en tiempo real contra amenazas de seguridad <br>para PC y navegación</li>
        <li class="list04">Limpieza automatica y profunda para PC y privacidad</li>
      </ul>
      <div class="line"></div>
    </div>
    <div class="gift-message clearfix">
      <h2>Paquete de regalo sólo para oferta exclusiva</h2>
      <dl>
        <dt> <img src="<?php echo $pResUrl; ?>images/iu-box.png" alt=""></dt>
        <dd>El mejor desinstalador para remover programs y plugins maliciosos.</dd>
      </dl>
      <dl>
        <dt> <img src="<?php echo $pResUrl; ?>images/pf-box.png" alt=""></dt>
        <dd>La herramienta de protección de carpeta fácil de usar y con una contraseña.</dd>
      </dl>
      <dl>
        <dt> <img src="<?php echo $pResUrl; ?>images/sd-box.png" alt=""></dt>
        <dd>Desfragmentador de disco confiable e inteligente con 7,000,000+ usuarios.</dd>
      </dl>
      <div class="line"></div>
    </div>
    <div class="between-buy">
      <img src="<?php echo $pResUrl; ?>images/asc-box.png" alt="" class="asc-box"  width="422">
      <div class="right-message">
        <h2>OFERTA EXCLUSIVA</h2>
        <h3>Suscripción de 1 año / 3 PCs y 3 REGALOS <img src="<?php echo $pResUrl; ?>images/gift.png" alt=""></h3>
        <dl class="price">
          <dt>
            <del>ARS 2.992,00</del>  <strong>ARS 279,00</strong>
          </dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=ar-asc113pcpfsdiu279&ref=ar_asc113pcpfsdiupurchase1801<?php echo $refStr;?>&refs=ar_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1801-ar')" class="buybtn">
              <span><i></i> <em>Comprar ahora</em></span>
            </a>
          </dd>
          <dd> <img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Más de 6,378,528 personas han comprado</dd>
        </dl>
      </div>   
      <div class="line"></div>  

    </div>
    <div class="awrad">
      <h2>Recomendado y premiado por estos Medios</h2>
      <img src="<?php echo $pResUrl; ?>images/awrad.jpg" alt="">
    </div>
    <div class="media-rev">
      <dl class="clearfix">
        <dt class="fr"><img src="<?php echo $pResUrl; ?>images/media.png" alt=""></dt>
        <dd class="fl">
          <h3>El programa ideal para reparar y limpiar su Windows.</h3>
          Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.
        </dd>
      </dl>
      </div>
    <!-- review start -->
    <div class="user-rev clearfix">
      <h2>Comentarios de usuarios</h2>
      <div class="content">
        <dl class="active">
          <dt>"No sólo es un gran producto, pero el soporte es igualmente excelente."</dt>
          <dd>"Al principio me gusta mucho la versión gratis y finalmente compré la versión completa. Es efectivo mantener mi equipo limpio y libre de"bug" durante años y todavía no me ha defraudado. Me puse en contacto con Advanced SystemCare recientemente y me respondieron dentro de uno o dos día con todo lo que necesitaba saber. En mi mente soporte es muy importante en la decisión de usar un producto a largo plazo y ASC cuenta con tanto producto y soporte."</dd>
        </dl>
        <dl>
          <dt>"Advanced SystemCare Pro es el mejor programa que he probado en los últimos años."</dt>
          <dd>"Como la mayoría de gente, no soy un experto en informática. Se me ha olvidado cuantos programas he probado en los últimos años. Todos afirman ser el mejor, pero nunca es similar a protección de Advanced SystemCare Pro que tengo ahora. Desde que tuve este excelente programa no he tenido que llamar a soporte técnico ni siquiera una vez. ¡Ha superado mis expectaciones, siempre actualizado, y el aspecto es bastante moderno! Muchas gracias a todos por hacer mi vida más fácil."</dd>
        </dl>
        <dl>
          <dt>"Mi elección todavía es abrumadoramente Advanced SystemCare Pro."</dt>
          <dd>"Como un técnico de reparación de computadoras, encuentro que mediante la descarga y el escaneo con ASC gratis se pueden solucionar problemas más comunes. Cuando terminó la reparación de PC, en general recomiendo al cliente que compren la versión Pro. ¿Quién necesita un técnico cuando tiene Advanced SystemCare Pro que trabaja para su sistema 24-7? Es el mejor producto para usuarios doméstico. Muchas gracias por hacer mi trabajo más fácil."</dd>
        </dl>
        <dl>
          <dt>"Le recomiendo mucho que compre este programa. No es caro y lo que va a hacer para su ordenador es totalmente impresionante."</dt>
          <dd>"Este programa es el mejor que he utilizado. Mi ordenador está ejecutando mucho más rápido y mucho mejor ahora desde que he descargado ASC. El programa ha limpiado archivos innecesarios y duplicados, carpetas vacías y yo lo he utilizado para destruir archivos. También limpió y desfragmentó el registro y todos los archivos en mi PC. Le recomiendo que compre este programa. No es caro y lo que va a hacer para su ordenador es totalmente impresionante. Le encantará, prometo."</dd>
        </dl>
        <dl>
          <dt>"Es uno de los mejores programas para cuidar la computadora"</dt>
          <dd>"Mi computadora se hizo más rapida por la limpieza de Ram, me ha prevenido de muchos problemas tanto en su versión gratitua como en su versión paga. Si no fuera por el Systemcare talvez hubiera formateado mi computadora así que estoy completamente agradecido con el Systemcare y los programas de Iobit. "</dd>
        </dl>
      </div>
      <ul class="users">
        <li class="active"><img alt="" src="<?php echo $pResUrl; ?>images/bruce-ramsay.png">Bruce Ramsay</li>
        <li><img alt="" src="<?php echo $pResUrl; ?>images/hank-ewert.png">Hank Ewert </li>
        <li><img alt="" src="<?php echo $pResUrl; ?>images/charles-r-widick.png">Charles R. Widick</li>
        <li><img alt="" src="<?php echo $pResUrl; ?>images/loretta-harnarine.png">Loretta Harnarine  </li>
        <li><img alt="" src="<?php echo $pResUrl; ?>images/jorge-esteban-jaramillo-perez.png">Jorge Esteban Jaramillo Perez </li>
      </ul>
      <div class="line"></div>  
    </div>
    <!-- review end -->
    
    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Ver la comparación entre FREE y PRO: </th>
            <th class="spac"></th>
            <th class="itemb">
              Advanced SystemCare <br> FREE
            </th>
            <th class="spac"></th>
            <th class="itema">
              Advanced SystemCare <br> PRO
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
            <td class="virtue">Hasta 300% aceleración de Internet con Internet acelerador*</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
            <td class="virtue">Optimización potente de sistema en tiempo real para mejor rendimiento</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
            <td class="virtue">Limpieza profunda de registro de Windows</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
            <td class="virtue">Máximo rendimiento del disco duro</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
            <td class="virtue">Detección completa contra amenazas de seguridad</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
            <td class="virtue">Experiencia segura online con protección de navegación</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
            <td class="virtue">Limpieza automática de seguridad de privacidad siempre que inicie sesión</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
            <td class="virtue">Actualización automática a la última versión</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
            <td class="virtue">Se ejecuta en segundo plano sin molestia</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
            <td class="virtue">24/7 soporte técnico gratuito para demanda</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-free.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
            <td class="virtue">Limpieza, optimización y protección básica de sistema básico</td>
            <td class="spac"></td>
            <td class="itemb"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
            <td class="spac"></td>
            <td class="itema"><img src="<?php echo $pResUrl; ?>images/mark-pro.png"></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="2" class="text"></th>
            <th class="spac"></th>
            <th class="itemb">
              Tu edición actual
            </th>
            <th class="spac"></th>
            <th class="itema">
              <del>ARS 2.992,00</del>  <strong>ARS 279,00</strong>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=ar-asc113pcpfsdiu279&ref=ar_asc113pcpfsdiupurchase1801<?php echo $refStr;?>&refs=ar_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1801-ar')">
                Comprar ahora
              </a>
              1 año / 3 PCs+ Regalos
            </th>
          </tr>
        </tfoot>
      </table>
      <div class="line"></div>  
    </div>
    <!-- comparison end -->
    <div class="payment wrapper clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/payment.png"></dt>
        <dd>
          <strong>Formas de pago</strong> Aceptamos varios formas de pago por <br> tu pedido
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/money-back.png"></dt>
        <dd>
          <strong>Garandía de reembolso</strong> Si no está satisfecho en los primeros 60 <br> días, le devolveremos tu dinero
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png"></dt>
        <dd>
          <strong>Pago seguro</strong> 100% pago seguro para tu pedido
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/servicio.png"></dt>
        <dd>
          <strong>Servicio al cliente</strong> 24/7 Soporte Técnico gratis
      </dl>
    </div>
  </div>
  <div class="footer">
    <dl class="annotation wrapper">
      <dt>Nota:</dt>
      <dd>
        *.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
      </dd>
      <dd>*.Datos pueden variar basados en diferentes sistemas o ordenadores.</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</p>
  </div>
<script type="text/javascript" src="<?php echo $pResUrl; ?>js/script.js"></script>
<script> 
  countdown((".banner .left-message p span span"));
  $(".users li").userMouseover($(".content dl"));
  $(".gift-box").target($(".asc-message .line"),0);
   setTimeout(function () { 
    $(".gift-box").addClass("active");
  }, 100);

</script>
</body>
</html>