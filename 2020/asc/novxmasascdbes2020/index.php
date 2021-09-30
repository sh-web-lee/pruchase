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
  $c_name = 'novxmasascdbes2019_p' . $date;
  $c_name_t='novxmasascdbes2019_t' . $date;
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
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
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
?>
<!DOCTYPE html>
<html lang="es">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Oferta especial para Advanced SystemCare PRO y Driver Booster PRO – IObit</title>
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
      <a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">IObit</a>
      <h1 class="title">Weihnachten Großer Sale Letzte Chance um groß einzusparen!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">80% Rabatt</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>Ups, 80% de descuento AGOTADO
76% de descuento todavía está disponible</h2></div>
          <div class="numbox">
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
            <span>Solo quedan</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price"><big>29,99</big>€</strong> <del>124,84€</del></p>
              <p>1 año de suscripción / 3 PCs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=es-asc14db83pc2999&ref=es_asc14db83pcpurchase2011xmas<?php echo $refStr;?>&refs=es_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase2011-es')">
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
              <span>Advanced SystemCare 14 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Optimizador todo en uno que acelera tu PC y protege tu privacidad.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>Driver Booster 8 PRO</span>
            </h3>
          </dt>
          <dd>
            Actualizador de controladores fácil de usar para actualizar los drivers y componentes de juego obsoletos. 
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
          <dt><b>Base de datos un 20% mayor</b> <span>Solo PRO</span></dt>
          <dd>Escaneo automático y actualización de más de 3.500.000 drivers.</dd>
        </dl>
        <dl>
          <dt><b>Velocidad Ilimitada</b> <span>Solo PRO</span></dt>
          <dd>Desbloquea el límite de velocidad para una descarga de drivers un 100% más rápida.</dd>
        </dl>
        <dl>
          <dt><b>Mejor Experiencia de Juego</b> <span>Solo PRO</span></dt>
          <dd>Recomienda componentes de juego para acelerar tus juegos.</dd>
        </dl>
        <dl>
          <dt><b>Corrige Errores de Dispositivos</b> <span>Solo PRO</span></dt>
          <dd>Sin Sonido, Internet, y otros problemas de hardware.</dd>
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
          <span class="original last"><em>74,85€</em></span>
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span> de descuento</h3>
            <span class="month">Día de acción<br> de gracias</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>76%</span> de descuento</h3>
            <span class="month">Hoy</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span> de descuento</h3>
            <span class="month">Nochevieja</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price"><big>29,99</big>€</strong> <del>124,84€</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=es-asc14db83pc2999&ref=es_asc14db83pcpurchase2011xmas<?php echo $refStr;?>&refs=es_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase2011-es');">
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
                "Lo primero quería recalcar que es un programa muy ligero y fácil de usar. Normalmente ejecuto actualizaciones de Windows diariamente para conseguir los últimos controladores pero Driver Booster actualiza y corrige todos los problemas de mis drivers de manera más precisa y mejor que las actualizaciones de Windows. Estoy realmente impresionado con este software y lo recomiendo como el gran producto que es."
              </p>
              <cite>Dunston Diaz</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios del usuario</span></h3></dt>
            <dd>
              <p>
                "Que sorpresa haber recibido la nueva versión de Driver Booster de IObit. Una vez lo he instalado y ha empezado a actualizar me he dado cuenta de que no tenía ni idea de la cantidad de programas de mi PC que tenía que actualizar. Ahora que están todos actualizados, mi PC vuelve a funcionar como si estuviera nuevo, increíble!"
              </p>
              <cite>Harold Barr</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios del usuario</span></h3></dt>
            <dd>
              <p>
                "Verdaderamente el mejor actualizador de drivers del Mercado. Es fácil de usar, y tiene una interfaz simple que hace su trabajo mejor que cualquier aplicación que haya usado antes. Este programa se merece 5 estrellas, altamente recomendado!"
              </p>
              <cite>Hishaam Salasa</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Comentarios mediáticos</span></h3></dt>
            <dd>
              <p>
                "IObit ofrece muchas utilidades y Driver Booster PRO, que actualiza automáticamente tus drivers, es uno de los mejores. La funcionalidad simple de Driver Booster PRO se hace aún más atractiva gracias a la inclusión de múltiples licencias a un precio muy económico, así como una interfaz personalizable que hace un buen trabajo al mostrar información específica relacionada con el hardware. Competidores como Ashampoo Driver Updater y SlimWare Utilities DriverUpdate ofrecen características atractivas, pero IObit Driver Booster PRO lidera el mercado."
              </p>
              <cite>PC Magazine</cite>
            </dd>
          </dl>
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt="Dunston Diaz"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr"></li>
          <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="Softonic"></li>
          <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></li>
          <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></li>
          <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></li>
          <li class="seven last" data-num="7"><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="CHIP"></li>
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
          <p><strong class="change-price"><big>29,99</big>€</strong> <del>124,84€</del></p>
          <p>1 año de suscripción / 3 PCs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=es-asc14db83pc2999&ref=es_asc14db83pcpurchase2011xmas<?php echo $refStr;?>&refs=es_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascdbpurchase2011-es');">
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