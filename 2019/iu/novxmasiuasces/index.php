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
  $c_name = 'novxmasiuasces2019_p' . $date;
  $c_name_t='novxmasiuasces2019_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

$isNewUser=false;
if(preg_match('/^13\./',$_GET['ver'])){
  $isNewUser=true;
}

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Oferta Especial para IObit Uninstaller y Advanced SystemCare – IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/es/index.php" target="_blank">IObit</a>
      <h1 class="title">OFERTA ESPECIAL Año Nuevo! ¡Última oportunidad para ahorrar a lo grande!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">78% de Descuento</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>78% de Descuento, Limitados a los PRIMEROS<br> 999 Compradores</h2></div>
          <div class="numbox">
            <span>Solo quedan</span>
            <div id="flip" class="flipNum">
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>
              </div>
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>          
              </div>
              <div class="numwrap last">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div> 
              </div>
            </div>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price"><big>17,99</big>€</strong> <del>79,98€</del></p>
              <p>1 año de suscripción / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=es-asc13iu3pc1799&ref=es_asc13iu9purchase1911x<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1911x-es')">
                Comprar ahora 
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
      Pruébalo SIN RIESGO ALGUNO – Actívalo ahora para mantener a tu PC en excelente estado y Recupera tu Dinero con una Garantía de 60 días.
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Súper Oferta- ¿Qué Incluye?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 13 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Optimizador todo en uno que acelera tu PC y protege tu privacidad.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>IObit Uninstaller 9 PRO</span>
            </h3>
          </dt>
          <dd>
            Software fácil de usar que desinstala y elimina completamente los programas y plugins no necesarios.
          </dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Súper Oferta - ¿Por qué merece la pena comprarlo?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
        <dl>
          <dt><b>PC un 200%* más Rápido</b> <span>Solo PRO</span></dt>
          <dd>
            Limpia y optimiza tu sistema automáticamente para que tu ordenador vaya más rápido. 
          </dd>
        </dl>
        <dl>
          <dt><b>Internet un 300%* más rápido </b> <span>Solo PRO</span></dt>
          <dd>
            Mayor velocidad de descarga, navegación, juegos, Streaming.
          </dd>
        </dl>
        <dl>
          <dt><b>Protección de Privacidad</b> <span>Solo PRO</span></dt>
          <dd>Bloquea accesos no autorizados a tus contactos, correo, y otros datos sensibles. </dd>
        </dl>
        <dl>
          <dt><b>Navegación Segura</b> <span>Solo PRO</span></dt>
          <dd>Previene que rastreadores puedan ver lo que estás leyendo, viendo y comprando.</dd>
        </dl>
        <dl>
          <dt><b>Actualizador de Software</b> <span>Solo PRO</span></dt>
          <dd>Mantén tus programas más importantes actualizados con un solo clic. </dd>
        </dl>
      </div>
    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Elimina paquetes de programas obstinados </b> <span>Solo PRO</span></dt>
          <dd>que no pueden ser desinstalados de forma convencional.</dd>
        </dl>
        <dl>
          <dt><b>Escáner automático de restos</b> <span>Solo PRO</span></dt>
          <dd>que se han quedado al desinstalar un programa de forma estándar o que no han podido ser desinstalados por otras utilidades.</dd>
        </dl>
        <dl>
          <dt><b>Identifica plugins publicitarios y maliciosos</b> <span>Solo PRO</span></dt>
          <dd>que ponen anuncios o links en las páginas que estás visitando.</dd>
        </dl>
        <dl>
          <dt><b>Monitorización en tiempo real de cambios</b> <span>Solo PRO</span></dt>
          <dd>en archivos hechos por programas durante su instalación.</dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/db-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Súper Oferta - ¿cuál es el mejor día para comprar?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <span class="original"><em>49,99€</em></span>
          <span class="original last"><em>29,99€</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span> de descuento</h3>
            <span class="month">Día de acción<br> de gracias</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>78%</span> de descuento</h3>
            <span class="month">Hoy</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span> de descuento</h3>
            <span class="month">Nochevieja</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price"><big>17,99</big>€</strong> <del>79,98€</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=es-asc13iu3pc1799&ref=es_asc13iu9purchase1911x<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1911x-es')">
          Comprar ahora 
        </a>
        <p>1 año de suscripción / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Lo que dicen de nosotros</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h3><span>Comentarios mediáticos</span></h3></dt>
            <dd>
              <p class="on">
                Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.”
              </p>
             <cite>Softonic</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios del usuario</span></h3></dt>
            <dd> 
              <p>
                "Con la nueva compra de la versión complete, mi ordenador ha estado libre de “bugs” por años y no me ha dejado solo en ningun momento. Contacte ASC recientemente y respondieron en 1 dia con todo lo que necesitaba saber."
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios del usuario</span></h3></dt>
            <dd>
              <p>
                "Como tecnico de ordenadores, encuentro que al descargar y escanear ASC Gratis, la mayoría de problemas estan resueltos. Cuando acabo una reparación, usualmente sugiero al cliente comprar el paquete PRO. Quien necesita un tecnico cuando tienes el poder de ASC PRO trabajando en tu sistema 24-7? Este es el major product que un usuario puede comprar desde casa. Gracias por hacer mi trabajo más fácil."
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios del usuario</span></h3></dt>
            <dd>
              <p>
                "No soy un expert en ordenadores como mucha gente lo es. No cuantos programas he probado durante años, todos diciendo ser los mejores pero nunca llegando cerca a ASC que yo sepa. Desde que tengo este programa no he tenido que llamar a un tecnico. A sobrepasado mis expectativas, siempre actualizado y los graficos son geniales. Muchas gracias a todos los que estan hacienda mi vida mas facil."
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios del usuario</span></h3></dt>
            <dd> 
              <p>
                "IObit Uninstaller se pone mejor con cada actualización. Ya lo he utilizado más de 3 años. El programa se descarga rápidamente y posee una interfaz de usuario simple. Algunas funciones que utilizo regularmente son Desinstalación de lotes, Escaneo Profundo, Destruir Archivos y función de Recientemente Instalados que me permite tener un acceso rápido a los programas que he instalado recientemente o que no funcionan correctamente. Es fácil de controlar los elementos de inicio para arranque de PC más rápido."
              </p>
              <cite>Lovro Žužić</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios del usuario</span></h3></dt>
            <dd>
              <p>
                "IObit Uninstaller es uno de los mejores programas con su uso. Es fácil de utilizar y limpieza profunda. Despúes de versión 5 tiene más funciones de utilizar no solo con Windows 10. La limpieza de los plugins también es útil extremadamente. Búsqueda para programas duplicados no utilizados es perfecta. Muchas gracias por cuidar mi ordenadores y los de mis familias."
              </p>
              <cite>Áda Görtler</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios del usuario</span></h3></dt>
            <dd>
              <p>
                "IObit Uninstaller es probablemente uno de los mejores software para eliminar los programas innecesarios de su ordenador. A diferencia del desinstalador básico de windows, IObit Uninstaller elimina los restos del programa desinstalado, que podría ralentizar su PC. He utilizado este programa por algunos años y lo siempre me ayuda a mantener PC limpio y rápido. He recomiendo este programa para algunos amigos en el pasado y lo recomendaré a los nuevos en el futuro."
              </p>
              <cite>Sergey Erlich</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios mediáticos</span></h3></dt>
            <dd>
              <p>
                "IObit Uninstaller es ligero y su interfaz es amigable. Usuarios pueden descargarlo rápidamente. Esta herramienta de desinstalación se pueden clasificar como el mejor programa de desinstalación y permite a los usuarios desinstalar al por mayor. Ofrecerá a los usuarios un "Escaneo potente" para operar más profundo y buscar restos de programas desinstalados. En general, este desinstalador cumple lo que promete: desinstalación completa. El rendimiento hace esta pequeña herramienta de desinstalación valer la pena conservar."
              </p>
              <cite>MakeUseOf</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/lovro-žužić.png')?>" alt="Lovro Žužić"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="Softonic"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Premios a Nivel Mundial</h2>
      <p>
        Hemos sido premiados y contamos con la confianza de los medios de comunicación líderes del mercado durante los últimos 12 años, ahora ya puedes estar seguro de que has elegido el mejor optimizador de PC y actualizador de drivers
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>Pruébelo SIN RIESGO - con nuestra garantía de devolución de dinero de 60 días</h3>
            <p>
              Estamos seguros de que activando la versión PRO te olvidarás de tus dolores de cabeza a la hora de actualizar tus drivers por un precio asequible
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>Aceptamos</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>Nota:</dt>
        <dd>
          *. Estos programas promocionales están sujetos a posibles cambios sin previo aviso, en cualquier momento a nuestra discreción.
        </dd>
        <dd>
          *. Los datos pueden variar según el sistema o el ordenador.
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados </p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">76% OFF</div>
      </div>
      <div class="numbox fl">
        <div id="fliptwo" class="flipNum">
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>
          </div>
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>          
          </div>
          <div class="numwrap last">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div> 
          </div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> usuarios están viendo, solo quedan<b class="packsNum">50</b></p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price"><big>17,99</big>€</strong> <del>79,98€</del></p>
          <p>1 año de suscripción / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=es-asc13iu3pc1799&ref=es_asc13iu9purchase1911x<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=es_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1911x-es')">
            Comprar ahora 
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>