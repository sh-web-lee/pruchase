<?php
ob_start();
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
include $pRootUrl.'callback.php';
function get_line($file, $line)
{
    $fp = fopen($file, 'r');
    $i = 0;
    while (!feof($fp)) {
        $i++;
        $c = fgets($fp);
        if ($i == $line) {
            return $c;
            break;
        }
    }
}
$name=explode(' ',trim(get_line('data/feb_name.txt',rand(1,20))));
$firstName=preg_replace("/(.{2})(.)*/",'${1}'.str_repeat('*',strlen($name[0])-2),$name[0]);
$lastName=empty($name[1])?'':preg_replace("/(.{2})(.)*/",'${1}'.str_repeat('*',strlen($name[1])-2),$name[1]);
if($_GET['action']=='getSales'){
    $packsNum=125;
    if($_GET['status']==2){
        $date = $_GET['d'];
        $c_name = 'esascfeb' . $date;
        if (!isset($_COOKIE[$c_name])) {
            $packsNum = 124;
        } else {
            if (intval($_COOKIE[$c_name]) <= 5) {
                $packsNum = 5;
            } else {
                $packsNum = $_COOKIE[$c_name] - 1;
            }
        }
        ob_get_clean();
        setcookie($c_name, $packsNum, time() + 3600 * 24 *30*2);
    }
    echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'packsNum'=>$packsNum));
    exit();
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Disfruta de hasta el 85% descuento y mejor PC rendimiento con Advanced SystemCare PRO  – IObit</title>
    <meta name="Copyright" content="IObit">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600" rel="stylesheet">
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- banner start -->
<div class="banner">
    <div class="wrapper">
        <a class="logo" href="http://www.iobit.com" target="_blank">
            <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
        </a>
        <h1>OFERTA DE TIEMPO LIMITADO</h1>
        <p class="subhead">Obtén optimización completa para PC con Advanced SystemCare 11 PRO</p>
        <div class="panel clearfix">
            <div class="offer left sold">
                <div class="imgbox"><img src="<?php echo getStaticUrl('images/box-85.png')?>" alt=""/></div>
                <div class="price">
                    <p><del>149,92€</del> <strong>17,99€</strong></p>
                    <a class="buybtn">
                        <i class="all-icons"></i>
                        COMPRAR AHORA
                    </a>
                </div>
            </div>
            <div class="offer center current">
                <div class="time">
                    <span>Finalizará en</span>
                    <ul id="countdown" class="countdown">
                        <li><strong>00</strong>h :</li>
                        <li><strong>15</strong>min :</li>
                        <li><strong>34</strong>s :</li>
                        <li class="last"><strong>938</strong>ms*</li>
                    </ul>
                </div>
                <div class="imgbox"><img src="<?php echo getStaticUrl('images/box-pcs.png')?>" alt=""/></div>
                <div class="price">
                    <p><del class="original">79,89€</del> <strong class="discount">17,99€</strong></p>
                    <a class="buybtn"
                       href="http://www.iobit.com/buy.php?product=es-asc113pcpfsd1799&ref=es_asc113pcpfsdpurchase1805&refs=es_purchase_asc"
                       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1805-es')">
                        <i class="all-icons"></i>
                        COMPRAR AHORA
                    </a>
                </div>
                <p class="people">
                    <img src="<?php echo getStaticUrl('images/people.png')?>" alt=""/>
                    Más de <b>6,378,528</b> personas han comprado
                </p>
            </div>
            <div class="offer right">
                <div class="imgbox"><img src="<?php echo getStaticUrl('images/box-pc.png')?>" alt=""/></div>
                <div class="price">
                    <p><del class="original">29,99€</del> <strong class="discount">14,99€</strong></p>
                    <a class="buybtn"
                       href="http://www.iobit.com/buy.php?product=es-asc111pc1499&ref=es_asc111pcpurchase1805&refs=es_purchase_asc"
                       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1805-es')">
                        <i class="all-icons"></i>
                        COMPRAR AHORA
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- banner end -->

<!-- container start -->
<div class="container">
    <!-- intro start -->
    <div class="intro wrapper">
        <h2 class="intro-title">Disfruta de una PC más rápida y segura con el mejor rendimiento y protección con Advanced SystemCare 11 PRO</h2>
        <p>
            <img src="<?php echo getStaticUrl('images/windows.png')?>" alt="" />
            <span>/&nbsp;&nbsp;Compatible con Windows 10</span>
        </p>
        <div class="box clearfix">
            <dl>
                <dt class="fl"><img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" /></dt>
                <dd class="fr">
                    <h3>Rapido</h3>
                    <p>Acelera la velocidad de tu PC hasta 300% más rápida*</p>
                </dd>
            </dl>
            <dl class="right">
                <dt class="fr"><img src="<?php echo getStaticUrl('images/list02.png')?>" alt="" /></dt>
                <dd class="fl">
                    <h3>Seguro</h3>
                    <p>Protección en tiempo real contra amenazas de seguridad </p>
                </dd>
            </dl>
            <dl>
                <dt class="fl"><img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" /></dt>
                <dd class="fr">
                    <h3>Limpio</h3>
                    <p>Limpieza automatica y profunda para PC y privacidad</p>
                </dd>
            </dl>
            <dl class="right">
                <dt class="fr"><img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" /></dt>
                <dd class="fl">
                    <h3>Mejor Rendimiento</h3>
                    <p>Optimización más completa para máximo rendimiento</p>
                </dd>
            </dl>
        </div>
    </div>
    <!-- intro end -->

    <!-- giveaway start -->
    <div class="giveaway">
        <div class="wrapper clearfix">
            <h2>¡Tiempo limitado! Regalo gratis sólo para suscripción de 3 PCs / 1 año</h2>
            <div class="panel clearfix">
                <div class="list">
                    <img src="<?php echo getStaticUrl('images/iu.png')?>" alt=""/>
                    <h3>IObit Uninstaller PRO <b>0€</b></h3>
                    <p>
                        <i class="all-icons"></i>
                        <span>El mejor desinstalador para remover programs y plugins maliciosos.</span>
                    </p>
                </div>
                <div class="list">
                    <img src="<?php echo getStaticUrl('images/pf.png')?>" alt=""/>
                    <h3>Protected Folder <b>0€</b></h3>
                    <p>
                        <i class="all-icons"></i>
                        <span>La herramienta de protección de carpeta fácil de usar y con una contraseña.</span>
                    </p>
                </div>
                <div class="list last">
                    <img src="<?php echo getStaticUrl('images/sd.png')?>" alt=""/>
                    <h3>Smart Defrag PRO <b>0€</b></h3>
                    <p>
                        <i class="all-icons"></i>
                        <span>Desfragmentador de disco confiable e inteligente con 7000,000+ usuarios.</span>
                    </p>
                </div>
            </div>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=es-asc113pcpfsd1799&ref=es_asc113pcpfsdpurchase1805&refs=es_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1805-es')">
                <i class="all-icons"></i>
                COMPRAR AHORA
            </a>
        </div>
    </div>
    <!-- giveaway end -->

    <div class="wrapper">
        <!-- awards start -->
        <div class="awards">
            <h2>Recomendado y premiado por estos Medios</h2>
            <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
        </div>
        <!-- awards end -->

        <!-- review start -->
        <div class="review clearfix">
            <dl class="media clearfix">
                <dt class="fr"><img src="<?php echo getStaticUrl('images/softonic.png')?>" alt="" /></dt>
                <dd class="fl">
                    <h2>El programa ideal para reparar y limpiar su Windows.</h2>
                    <p>
                        Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.
                    </p>
                </dd>
            </dl>
            <div class="user">
                <h2>Comentarios de usuarios</h2>
                <div class="content">
                    <dl class="active">
                        <dt><h3>"No sólo es un gran producto, pero el soporte es igualmente excelente."</h3></dt>
                        <dd>
                            "Al principio me gusta mucho la versión gratis y finalmente compré la versión completa. Es efectivo mantener mi equipo limpio y libre de"bug" durante años y todavía no me ha defraudado. Me puse en contacto con Advanced SystemCare recientemente y me respondieron dentro de uno o dos día con todo lo que necesitaba saber. En mi mente soporte es muy importante en la decisión de usar un producto a largo plazo y ASC cuenta con tanto producto y soporte."
                        </dd>
                    </dl>
                    <dl>
                        <dt><h3>"Advanced SystemCare Pro es el mejor programa que he probado en los últimos años."</h3></dt>
                        <dd>
                            "Como la mayoría de gente, no soy un experto en informática. Se me ha olvidado cuantos programas he probado en los últimos años. Todos afirman ser el mejor, pero nunca es similar a protección de Advanced SystemCare Pro que tengo ahora. Desde que tuve este excelente programa no he tenido que llamar a soporte técnico ni siquiera una vez. ¡Ha superado mis expectaciones, siempre actualizado, y el aspecto es bastante moderno! Muchas gracias a todos por hacer mi vida más fácil."
                        </dd>
                    </dl>
                    <dl>
                        <dt><h3>"Mi elección todavía es abrumadoramente Advanced SystemCare Pro."</h3></dt>
                        <dd>
                            "Como un técnico de reparación de computadoras, encuentro que mediante la descarga y el escaneo con ASC gratis se pueden solucionar problemas más comunes. Cuando terminó la reparación de PC, en general recomiendo al cliente que compren la versión Pro. ¿Quién necesita un técnico cuando tiene Advanced SystemCare Pro que trabaja para su sistema 24-7? Es el mejor producto para usuarios doméstico. Muchas gracias por hacer mi trabajo más fácil."
                        </dd>
                    </dl>
                    <dl>
                        <dt><h3>"Le recomiendo mucho que compre este programa. No es caro y lo que va a hacer para su ordenador es totalmente impresionante."</h3></dt>
                        <dd>
                            "Este programa es el mejor que he utilizado. Mi ordenador está ejecutando mucho más rápido y mucho mejor ahora desde que he descargado ASC. El programa ha limpiado archivos innecesarios y duplicados, carpetas vacías y yo lo he utilizado para destruir archivos. También limpió y desfragmentó el registro y todos los archivos en mi PC. Le recomiendo que compre este programa. No es caro y lo que va a hacer para su ordenador es totalmente impresionante. Le encantará, prometo."
                        </dd>
                    </dl>
                    <dl>
                        <dt><h3>"Es uno de los mejores programas para cuidar la computadora"</h3></dt>
                        <dd>
                            "Mi computadora se hizo más rapida por la limpieza de Ram, me ha prevenido de muchos problemas tanto en su versión gratitua como en su versión paga. Si no fuera por el Systemcare talvez hubiera formateado mi computadora así que estoy completamente agradecido con el Systemcare y los programas de Iobit."
                        </dd>
                    </dl>
                </div>
                <ul class="list clearfix">
                    <li class="active first">
                        <img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="" />
                        <p>Bruce Ramsay</p>
                    </li>
                    <li class="current">
                        <img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="" />
                        <p>Hank Ewert</p>
                    </li>
                    <li>
                        <img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="" />
                        <p>Charles R. Widick</p>
                    </li>
                    <li>
                        <img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="" />
                        <p>Loretta Harnarine</p>
                    </li>
                    <li>
                        <img src="<?php echo getStaticUrl('images/jorge.png')?>" alt="" />
                        <p>Jorge Esteban Jaramillo Perez</p>
                    </li>
                </ul>
            </div>
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
                        Advanced SystemCare
                        <span>FREE</span>
                    </th>
                    <th class="spac"></th>
                    <th class="itema">
                        Advanced SystemCare
                        <span>PRO</span>
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
                    <td class="virtue">Limpieza, optimización y protección básica de sistema básico</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons orange">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
                    <td class="virtue">Hasta 300% aceleración de Internet con Internet acelerador*</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
                    <td class="virtue">Optimización potente de sistema en tiempo real para mejor rendimiento</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
                    <td class="virtue">Limpieza profunda de registro de Windows</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
                    <td class="virtue">Máximo rendimiento del disco duro</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
                    <td class="virtue">Detección completa contra amenazas de seguridad</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
                    <td class="virtue">Experiencia segura online con protección de navegación</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
                    <td class="virtue">Limpieza automática de seguridad de privacidad siempre que inicie sesión </td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
                    <td class="virtue">Actualización automática a la última versión</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr>
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
                    <td class="virtue">Se ejecuta en segundo plano sin molestia</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                <tr class="last">
                    <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
                    <td class="virtue">24/7 soporte técnico gratuito para demanda</td>
                    <td class="spac"></td>
                    <td class="itemb"><i class="all-icons">√</i></td>
                    <td class="spac"></td>
                    <td class="itema"><i class="all-icons orange">√</i></td>
                </tr>
                </tbody>
            </table>
        </div>
        <!-- comparison end -->
    </div>
    <!-- footbuy start -->
    <div class="footbuy">
        <div class="wrapper">
            <h2>Con hasta sólo 1,25€ al mes, haz que tu PC funcione como NUEVO</h2>
            <div class="clearfix">
                <div class="imgbox fl">
                    <img class="active" src="<?php echo getStaticUrl('images/box-pcs.png')?>" alt=""/>
                    <img class="pc" src="<?php echo getStaticUrl('images/box-pc.png')?>" alt=""/>
                </div>
                <ul class="fl">
                    <li class="sold"><b>-85%</b> <strong>3PCs/1 año + IU/PF/SD</strong></li>
                    <li class="active center" data-num="0"><b>-75%</b> <strong>3PCs / 1 año + PF/SD</strong></li>
                    <li data-num="1"><b>-50%</b> <strong>1 PC / 1 año</strong></li>
                </ul>
                <div class="price fr">
                    <p><del class="original">79,89€</del> <strong class="discount">17,99€</strong></p>
                    <a class="buybtn"
                       href="http://www.iobit.com/buy.php?product=es-asc113pcpfsd1799&ref=es_asc113pcpfsdpurchase1805&refs=es_purchase_asc"
                       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1805-es')">
                        <i class="all-icons"></i>
                        COMPRAR AHORA
                    </a>
                </div>
            </div>
        </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service wrapper clearfix">
        <dl>
            <dt><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></dt>
            <dd>
                <h3>Formas de pago</h3>
                <p>Aceptamos varios formas de <span>pago por tu pedido</span></p>
            </dd>
        </dl>
        <dl>
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
            <dd>
                <h3>Garantía de reembolso</h3>
                <p>Si no estás satisfecho en los primeros 60 <span>días, te devolveremos el dinero</span></p>
            </dd>
        </dl>
        <dl>
            <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
            <dd>
                <h3>Pago seguro</h3>
                <p>100% pago seguro para tu pedido</p>
            </dd>
        </dl>
        <dl>
            <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt="" /></dt>
            <dd>
                <h3>Servicio al cliente</h3>
                <p>24/7 Soporte Técnico gratis</p>
            </dd>
        </dl>
    </div>
    <!-- service end -->
</div>
<!-- container end -->

<div class="bottom">
    <div class="wrapper">
        <!-- annotation start -->
        <dl class="annotation">
            <dt>Nota:</dt>
            <dd>
                1*.Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.
            </dd>
            <dd>2*.Datos pueden variar basados en diferentes sistemas o ordenadores.</dd>
        </dl>
        <!-- annotation end -->

        <!-- footer start -->
        <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos los derechos reservados</div>
        <!-- footer end -->
    </div>
</div>

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
    <p class="one"><span><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></span></p>
    <p><span class="salesDes">ha comprado 3 PCs / 1 año</span></p>
    <i class="close all-icons">×</i>
</div>
<!-- floatlayer end -->

<script>
    var soldl = "<?php echo getStaticUrl('images/sold.png')?>";
    var soldsm = "<?php echo getStaticUrl('images/sold-sm.png')?>";
    var pcs = "<?php echo getStaticUrl('images/box-pcs.png')?>";
    var pc = "<?php echo getStaticUrl('images/box-pc.png')?>";
    var shadow = "<?php echo getStaticUrl('images/shadow.png')?>";
    var packsNum = "<?php echo $packsNum; ?>";
</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>