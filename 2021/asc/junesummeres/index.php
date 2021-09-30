<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$entryIsPdts = false;

$entryIsPdts = preg_match("/^p_/", $_GET['ref']);

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['name']) ? '' : '-'.$_GET['name'];
$refStr .= empty($_GET['type']) ? '' : '-'.$_GET['type'];


?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Obtener 91% de descuento en el paquete de aniversario - IObit</title>
    <meta name="Copyright" content="IObit">
    <meta name="description" content="Es hora de la fiesta de IObit. Ven y abre tu paquete de aniversario con hasta un 91% de descuento">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700;800&display=swap">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@500&family=Ubuntu:wght@500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/index.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
  </head>
  <body>
    <div class="container">
      <div class="g-main">
        <!-- banner -->
        <div class="banner">
          <div class="banner-cont">
            <a href="https://www.iobit.com/es/index.php" target="_blank" class="logo"><img src=<?php echo getStaticUrl('images/logo.png')?>" alt="logo"></a>
            <div class="banner-title">
              <div class="small">OFERTA DE ANIVERSARIO </div>
              <div class="big">Descuento de hasta el <i></i> en todos los productos de IObit, ¡el precio más bajo del año!</div>
            </div>
            <div class="date">May 19 - June 18</div>
            <div class="img">
              <img src=<?php echo getStaticUrl('images/banner-product.png')?>" alt="banner-product">
            </div>
            <div class="m-product">
              <h3 class="title"><i>Super Paquete</i></h3>
              <ul>
                <li>
                  <div class="name">Advanced SystemCare PRO <i>(1 Año / 3 PC)</i></div>
                  <div class="price">€49.99</div>
                </li>
                <li>
                  <div class="name">IObit Uninstaller PRO <i>(1 Año / 3 PC)</i></div>
                  <div class="price">€29.99</div>
                </li>
                <li>
                  <div class="name">IObit Malware Fighter PRO <i>(1 Año / 3 PC)</i></div>
                  <div class="price">€79.95</div>
                </li>
                <li>
                  <div class="name">Smart Defrag PRO <i>(1 Año / 3 PC)</i></div>
                  <div class="price">€29.99</div>
                </li>
                <li>
                  <div class="name">Protected Folder <i>(1 Año / 1 PC)</i></div>
                  <div class="price">€39.95</div>
                </li>
              </ul>
              <div class="m-price">
                <div class="price">
                  <div class="new">
                    <i>€</i>19.99
                  </div>
                  <div class="old">€229.87</div>
                  <div class="tag">91<i>% DTO</i></div>
                </div>
                <a class="btn" href="https://www.iobit.com/buy.php?product=es-asciuimfsd3pcpf1999&ref=es_asciuimfsd3pcpf1999summer2106<?= $refStr; ?>&refs=es_summerpurchase_asciuimfsdpf" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asciuimfsd3pcpfsummer2106-es')">Comprar ahora</a>
              </div>
            </div>
          </div>
        </div>
        <div class="content">
           <!-- packs -->
          <div class="pack-cont">
            <h3><i>86</i>% DE DESCUENTO: los paquetes de protección y optimización de PC también son para ti</h3>
            <div class="pack-list">
              <div class="pack-item">
                <dl>
                  <dt><img src=<?php echo getStaticUrl('images/n-pack01.png')?>" alt="pack01"></dt>
                  <dd>
                    <ul class="item1">
                      <li><i></i>Limpia, acelera y protege tu PC.</li>
                      <li><i></i>Desinstala programas y complementos para liberar espacio.</li>
                      <li><i></i>Maximiza el rendimiento de tu disco duro.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>€</i>17.99</div>
                    <div class="old">€99.97</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=es-asc3pciusd1799&ref=es_asc3pciusd1799summer2106<?= $refStr; ?>&refs=es_summerpurchase_asciusd" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pciusdsummer2106-es')">Comprar ahora</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src=<?php echo getStaticUrl('images/n-pack02.png')?>" alt="pack02"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Protección integral contra 209 millones de amenazas.</li>
                      <li><i></i>Desinstala programas y complementos para liberar espacio</li>
                      <li><i></i>Protege tus datos, carpetas y archivos importantes con solo una contraseña.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>€</i>19.99</div>
                    <div class="old">€139.89</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=es-imf3pciupf1999&ref=es_imf3pciupf1999summer2106<?= $refStr; ?>&refs=es_summerpurchase_imfiupf" onclick="ga('send', 'event', 'imfbuy', 'buy', '‘imf3pciupfsummer2106-es')">Comprar ahora</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src=<?php echo getStaticUrl('images/n-pack03.png')?>" alt="pack03"></dt>
                  <dd>
                    <ul>
                      <li><i></i>Mantiene siempre tus controladores actualizados.</li>
                      <li><i></i>Maximiza el rendimiento de tu disco duro.</li>
                      <li><i></i>Protege tus datos, carpetas y archivos importantes con solo una contraseña.</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>€</i>19.99</div>
                    <div class="old">€144.79</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=es-db83pcpfsd1999&ref=es_db3pcpfsd1999summer2106<?= $refStr; ?>&refs=es_summerpurchase_dbpfsd" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcpfsdsummer2106-es')">Comprar ahora</a>
                  </dd>
                </dl>
              </div>
              <div class="pack-item">
                <dl>
                  <dt><img src=<?php echo getStaticUrl('images/n-pack04.png')?>" alt="pack04"></dt>
                  <dd>
                    <ul class="item4">
                      <li><i></i>Limpia, acelera y protege tu PC.</li>
                      <li><i></i>Protección integral contra 209 millones de amenazas.</li>
                      <li><i></i>Actualiza el software fácilmente</li>
                    </ul>
                  </dd>
                  <dd class="price">
                    <div class="new"><i>€</i>17.99</div>
                    <div class="old">€89.93</div>
                  </dd>
                  <dd>
                    <a class="btn" href="https://www.iobit.com/buy.php?product=es-ascimfisu1pc1799&ref=es_ascimfisu1pc1799summer2106<?= $refStr; ?>&refs=es_summerpurchase_ascimfisu" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascimfisu1pcsummer2106-es')">Comprar ahora</a>
                  </dd>
                </dl>
              </div>
            </div>
          </div>
          <!-- product -->
          <div class="product-cont">
            <h3>Descuentos de hasta el <i>73</i><span>%</span> para productos que satisfacen tus necesidades diarias</h3>
            <div class="product-list">
              <div class="product-item mr product1">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product01.png')?>" alt="product01">
                </div>
                <div class="info">
                  <div class="title pro1-title">Advanced Systemcare PRO</div>
                  <div class="desc pro1-desc">El mejor programa de optimización de PC que puedes obtener. Haz que tu PC viejo parezca nuevo otra vez.</div>
                  <div class="price">
                    <div class="new">€17.99</div>
                    <div class="old">€49.99</div>
                    <div class="tag">64% <i>DTO</i></div>
                  </div>
                  <a href="https://www.iobit.com/buy.php?product=es-asc143pc1799&ref=es_asc3pc1799summer2106<?= $refStr; ?>&refs=es_summerpurchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcsummer2106-es')" class="btn">Comprar ahora</a>
                </div>
              </div>
              <div class="product-item mr product2">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product02.png')?>" alt="product02">
                </div>
                <div class="info">
                  <div class="title pro2-title">Driver Booster PRO</div>
                  <div class="desc pro2-desc">El mejor actualizador de controladores para solucionar problemas de dispositivos con más de 4.500.000 bases de datos de controladores.</div>
                  <div class="price">
                    <div class="new">€19.99</div>
                    <div class="old">€74.85</div>
                    <div class="tag">73% <i>DTO</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=es-db83pc1999&ref=es_db3pc1999summer2106<?= $refStr; ?>&refs=es_summerpurchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db3pcsummer2106-es')">Comprar ahora</a>
                </div>
              </div>
              <div class="product-item product3">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product03.png')?>" alt="product03">
                </div>
                <div class="info">
                  <div class="title pro3-title">IObit Uninstaller PRO</div>
                  <div class="desc pro3-desc">Se necesita un desinstalador potente para facilitar la desinstalación de programas y complementos.</div>
                  <div class="price">
                    <div class="new">€15.99</div>
                    <div class="old">€29.99</div>
                    <div class="tag">47% <i>DTO</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=es-iu103pc1599&ref=es_iu3pc1599summer2106<?= $refStr; ?>&refs=es_summerpurchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', '‘iu3pcsummer2106-es')">Comprar ahora</a>
                </div>
              </div>
              <div class="product-item mr product4">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product04.png')?>" alt="product04">
                </div>
                <div class="info">
                  <div class="title pro4-title">IObit Malware Fighter PRO</div>
                  <div class="desc pro4-desc">Protege tu PC de virus, malware y ransomware con motores de triple protección.</div>
                  <div class="price">
                    <div class="new">€14.77</div>
                    <div class="old">€39.95</div>
                    <div class="tag">63% <i>DTO</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=es-imf81pc1477&ref=es_imf1pc1477summer2106<?= $refStr; ?>&refs=es_summerpurchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf1pcsummer2106-es')">Comprar ahora</a>
                </div>
              </div>
              <div class="product-item mr product5">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product05.png')?>" alt="product05">
                </div>
                <div class="info">
                  <div class="title pro5-title">IObit Software Updater PRO</div>
                  <div class="desc pro5-desc">¡Programa que ayuda a los usuarios a mantenerse actualizados fácilmente, sin esfuerzo!  </div>
                  <div class="price">
                    <div class="new">€12.99</div>
                    <div class="old">€29.99</div>
                    <div class="tag">57% <i>DTO</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=es-isu43pc1299&ref=es_isu3pc1299summer2106<?= $refStr; ?>&refs=es_summerpurchase_isu" onclick="ga('send', 'event', 'isubuy', 'buy', 'isu3pcsummer2106-es')">Comprar ahora</a>
                </div>
              </div>
              <div class="product-item product6">
                <div class="img">
                  <img src=<?php echo getStaticUrl('images/product06.png')?>" alt="product06">
                </div>
                <div class="info">
                  <div class="title pro6-title">Smart Defrag PRO</div>
                  <div class="desc pro6-desc">Administra y desfragmenta el espacio en disco para mejorar el rendimiento del PC.</div>
                  <div class="price">
                    <div class="new">€17.99</div>
                    <div class="old">€29.99</div>
                    <div class="tag">40% <i>DTO</i></div>
                  </div>
                  <a class="btn" href="https://www.iobit.com/buy.php?product=es-sd63pc1799&ref=es_sd3pc1799summer2106<?= $refStr; ?>&refs=es_summerpurchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sd3pcsummer2106-es')">Comprar ahora</a>
                </div>
              </div>
            </div>
          </div>
          <!-- award -->
          <div class="award-cont">
            <h3>Recomendado y premiado por estos Medios</h3>
            <div class="award-list">
              <img src=<?php echo getStaticUrl('images/awards.png')?>" alt="awards">
            </div>
          </div>
          <div class="review wrapper">
            <div class="content">
              <span class="next"></span>
              <span class="prev"></span>
              <div class="message">
                <div class="roll">
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/softonic.png')?>" alt=""></dt>
                    <dd>
                      <h3>Comentarios</h3>
                      <p>“Advanced SystemCare Pro incluye una nueva tecnología de protección para mejorar la seguridad al navegar por Internet, una instalación más sencilla y un nuevo motor para desfragmentar discos duros a una mayor velocidad.”</p>
                      <h4>Softonic</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/hank-ewert.png')?>" alt=""></dt>
                    <dd>
                      <h3>Comentarios</h3>
                      <p>"No soy un expert en ordenadores como mucha gente lo es. No cuantos programas he probado durante años, todos diciendo ser los mejores pero nunca llegando cerca a ASC que yo sepa. Desde que tengo este programa no he tenido que llamar a un tecnico. A sobrepasado mis expectativas, siempre actualizado y los graficos son geniales. Muchas gracias a todos los que estan hacienda mi vida mas facil."</p>
                      <h4>Hank Ewert</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
                    <dd>
                      <h3>Comentarios</h3>
                      <p>"Este es uno de los mejores programas de actualización de drivers. Microsoft incluso me ha desviado al sugerir actualizaciones que no funcionarían con mi ordenador. Este programa sabía qué actualizaciones necesitaba sin ningún conflicto. Funcionó perfectamente. Fácil de usar, informativo e intuitivo. Este permanecerá en mi caja de herramientas para siempre... ¡Buen trabajo!"</p>
                      <h4>Wayne Bowler</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/gelu-bati.png')?>" alt=""></dt>
                    <dd>
                      <h3>Comentarios</h3>
                      <p>Estoy muy satisfecho con su producto IObit Malware Fighter. Anteriormente, este producto se me ocurrió. Tenía muchos problemas con interferencias maliciosas, no podía ver una película entera o un concierto. Debido a su nuevo producto, ahora cada operación es clara, segura y bien protegida. Escanea mi ordenador portátil sin afectar su rendimiento, mientras que también recomendé este producto a dos de mis amigos. </p>
                      <h4>Gelu Bati</h4>
                    </dd>
                  </dl>
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/fernando-gomes.png')?>" alt=""></dt>
                    <dd>
                      <h3>Comentarios</h3>
                      <p>"IObit Uninstaller es una herramienta excelente para desinstalar programas, barras de herramientas y plugins. Su uso ha sido muy útil para mí, ya que desinstala programas y aplicaciones. Además, limpia su registro asociado, en la mayoría de los casos desconocidos para los usuarios como yo. Tiene una interfaz de usuario agradable e intuitiva sin necesidad de habilidades informáticas principales. Lo recomiendo fuertemente."</p>
                      <h4>Fernando Lourenço Gomes</h4>
                    </dd>
                  </dl>
                  <!-- <dl>
                    <dt><img src=<?php echo getStaticUrl('images/softpedia.png')?>" alt=""></dt>
                    <dd>
                      <h3>Recensioni dei media</h3>
                      <p>
                        IObit Software Updater was designed to simplify the task of keeping all the applications on your computer up-to-date. It can check for new versions and install them automatically, even without user input. Moreover, it can help you download and install popular applications for various purposes.
                      </p>
                      <h4>Softpedia</h4>
                    </dd>
                  </dl> -->
                  <dl>
                    <dt><img src=<?php echo getStaticUrl('images/hans.png')?>" alt=""></dt>
                    <dd>
                      <h3>Comentarios</h3>
                      <p>"Soy un usuario de Smart Defrag durante muchos años. Desde que uso este fantástico software, mi ordenador y mi coputadora portátil son rápidos y se ha ahorre mucho tiempo. Junto con Advance SystemCare Ultimate tienes una herramienta completa para mantener tu sistema rápido y seguro. No necesitas esperar (PC se cierra por sí mismo) utilizando SD todos los días. Matiene tu sistema en las mejores condiciones, aunque no tienes experiencia técnica."</p>
                      <h4>Hans</h4>
                    </dd>
                  </dl>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="g-footer">
        <div class="service">
          <div class="wrapper">
            <div class="clearfix">
              <dl class="first">
                <dt>
                  <h3>Pruébalo SIN RIESGOS, con nuestra garantía de reembolso de dinero de 60 días</h3>
                </dt>
                <dd>
                  <div class="first-image">
                    <img src=<?php echo getStaticUrl('images/n-moneyback.png')?>">
                  </div>
                  <div class="first-text">
                  Estamos seguros de que la activación de la edición PRO maximizará el rendimiento de tu PC.¡Rendimiento y seguridad de PC a un precio asequible!
                  </div>
                </dd>
              </dl>
              <dl class="last">
                <dt><h3>Aceptamos</h3></dt>
                <dd><img src=<?php echo getStaticUrl('images/payment.png')?>"></dd>
              </dl>
            </div>
            <div class="note">
            <p>Nota:</p>
            <p>*Datos pueden variar basados en diferentes sistemas u ordenadores.</p>
            <p>*Estos programas promocionales están sujetos a cambios sin previo aviso, dependiendo de nuestra discreción exclusiva en cualquier momento.</p>
          </div>
          <div class="copyright">Copyright ©2005 - <?= date('Y'); ?> IObit. Todos los derechos reservados</div>
          </div>
        </div>
      </div>
      <div class="g-float">
        <div class="cake"></div>
        <div class="off-list">
          <div class="off-item active">
            <div class="num"><i></i>91% DTO</div>
            <div class="name">Super Paquete</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>86% DTO</div>
            <div class="name">Paquete de Optimización</div>
          </div>
          <div class="off-item">
            <div class="num"><i></i>73% DTO</div>
            <div class="name">El Producto Emblemático</div>
          </div>
        </div>
      </div>
    </div>
    <script src="<?php echo getStaticUrl('script/index.js')?>"></script>
  </body>
</html>
