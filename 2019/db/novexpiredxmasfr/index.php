<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

//创建浮点计算，取 购买人数 及 剩余礼品数，根据情况选择使用
function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

// 已购买人数
// 需要精确到某个值时，先输出 ceil(microtime_float()*1000/20000) 再 由此结果计算需要减去的量
$cName = 'frdbau_re';
$reduceNum = empty($_COOKIE[$cName]) ? (ceil(microtime_float() * 1000 / 20000)) : $_COOKIE[$cName];
$buyNum = ceil(microtime_float() * 1000 / 20000) - $reduceNum;
if ($_GET['action'] == 'getBuyNum') {
    setcookie($cName, $reduceNum, time() + 3600 * 24 * 30 * 7);
    echo $buyNum;
    exit();
}

if (in_array($_GET['st'], array('dbxmasr'))) {
    $refStr = '-' . $_GET['st'];
} else {
    $refStr = '';
}
if(in_array($_GET['pop'],array('xr_dbe'))){
  $refStr.='-'.$_GET['pop'];
}
if (!empty($_GET['to'])) {
    $refStr .= '-' . $_GET['to'];
}
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['user']) ? '' : ('-' . $_GET['user']);
$refStr .= empty($_GET['insday']) ? '' : ('-' . $_GET['insday']);
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-t' . $_GET['type'] . '-e' . $_GET['expd'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Jusqu'à 88% d'économie sur Driver Booster PRO et profitez des cadeaux de Noël !</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,700&display=swap" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
<!--banner-->
<div class="banner">
  <div class="snow"></div>
  <div class="wrapper">
    <a href="https://www.iobit.com/fr/index.php" target="_blank" class="logo">IObit</a>
    <h1>Vente Flash – Spécial Noël</h1>
    <h2>Offre à durée limitée
      <div class="date"><span>Plus que </span> <strong>00</strong> H <strong>55</strong> Min <strong>55</strong> Sec <strong>55</strong> Ms</div>
    </h2>

    <div class="one-pc-box">
      <h2>60% de remise</h2>
      <div class="img-box clearfix">
        <img src="<?php echo getStaticUrl('images/db-one-box.png') ?>" alt="" />
        <div class="price">
          <strong>29</strong>
          <span>
 							<b>€99</b>
 							<del>74,85€</del>
 						</span>
        </div>
      </div>
      <a href="https://www.iobit.com/buy.php?product=fr-db71y3pc2999&ref=fr_db71y3pcexpired2999purchase1911<?php echo $refStr; ?>&aff=&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase1911b-fr')" class="button border">J’en profite !</a>
    </div>

    <div class="packs">
      <h2>85% de remise</h2>
      <div class="img-box clearfix">
        <span class="box"><img src="<?php echo getStaticUrl('images/packs-box.png') ?>" alt="" /></span>
        <div class="price">
          <strong>19</strong>
          <span>
 							<b>€99</b>
 							<del>174,82€</del>
 						</span>
        </div>
      </div>
      <a href="https://www.iobit.com/buy.php?product=fr-db71y3pcisusdpf1999&ref=fr_db71y3pcbundleexpired1999purchase1911<?php echo $refStr; ?>&aff=&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase1911a-fr')" class="button">J’en profite !</a>
      <p class="people"><span>4 325 356</span> personnes l’ont acheté !</p>
    </div>

    <div class="one-pc-box three-pcs">
      <h2>15% de remise</h2>
      <div class="img-box clearfix">
        <span class="box"><img src="<?php echo getStaticUrl('images/right-box.png') ?>" alt="" /></span>
        <div class="price">
          <strong>24</strong>
          <span>
 							<b>€99</b>
 							<del>29,99€</del>
 						</span>
        </div>
      </div>
      <a href="https://www.iobit.com/buy.php?product=fr-db71y1pc2499&ref=fr_db71y1pcexpired2499purchase1911<?php echo $refStr; ?>&aff=&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase1911c-fr')" class="button border">J’en profite !</a>
    </div>
  </div>
</div>
<!--banner-->

<!-- benefits start -->
<div class="benefits wrapper clearfix">
  <h2><span>Profitez des performances optimales <br> sur PC et les jeux en ligne avec Driver Booster PRO</span></h2>
  <div class="showcase">
    <div class="inner">
      <ul class="screenshot clearfix">
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-01.jpg') ?>" alt="" />
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-02.jpg') ?>" alt="" />
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-03.jpg') ?>" alt="" />
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-04.jpg') ?>" alt="" />
        </li>
      </ul>
    </div>
    <ul class="zoom">
      <li class="fun1 active">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png') ?>" alt="" />
        </div>
      </li>
      <li class="fun2">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png') ?>" alt="" />
        </div>
      </li>
      <li class="fun3">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png') ?>" alt="" />
        </div>
      </li>
      <li class="fun4">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png') ?>" alt="" />
        </div>
      </li>
    </ul>
  </div>
  <div class="detail-list">
    <dl class="active first">
      <dt><i class="benefits01"></i></dt>
      <dd>
        <h3>Met à jour plus de 3 500 000 pilotes</h3>
        <p>
          Solution “one-stop” pour mettre à jour automatiquement<br>
          plus de 3 500 000 pilotes obsolètes et incompatibles.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benefits02"></i></dt>
      <dd>
        <h3>Mise à jour 100% sécurisée</h3>
        <p>
          Sauvegarder automatiquement tous les pilotes et créer<br> un point de restauration du système.
        </p>
      </dd>
    </dl>
    <dl class="three">
      <dt><i class="benefits03"></i></dt>
      <dd>
        <h3>Performance de jeu maximale</h3>
        <p>
          Augmentez les performances de jeu avec les derniers<br>
          pilotes Game Ready et améliorez l’expérience de jeu avec<br>
          les composants mis à jour et appropriés.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benefits04"></i></dt>
      <dd>
        <h3>Téléchargement de pilotes plus rapide</h3>
        <p>
          Télécharger et installer automatiquement les<br>
          pilotes & les composants du jeu pendant le temps d’inactivité.
        </p>
      </dd>
    </dl>
  </div>
  <div class="clearfix"></div>
  <a class="more fr" href="javascript: void(0)">En savoir plus sur la version PRO >></a>
</div>
<!-- benefits end -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>Ne laissez plus les problèmes de pilotes dégrader votre PC !</h2>
  <table>
    <thead>
    <tr>
      <th class="itema"><big>Problèmes</big> que vous pouviez rencontrer :</th>
      <th class="itemb"><big>Solutions</big> que vous pouvez obtenir :</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="itema">
        La mise à jour manuelle peut vous faire <span>rater</span> des mises à jour essentielles
      </td>
      <td class="itemb">
        Mettez à jour les pilotes automatiquement et les gardez <span>toujours à jour</span>
      </td>
    </tr>
    <tr>
      <td class="itema">
        Passez plus de temps à télécharger chaque pilote à cause de la vitesse <span>limitée</span> de téléchargement
      </td>
      <td class="itemb">
        Téléchargez <span>automatiquement</span> les pilotes en quelques minutes <span>à vitesse maximale</span>
      </td>
    </tr>
    <tr>
      <td class="itema">
        Base de données <span>limitée</span> de pilotes ne peut pas satisfaire les besoins de tous vos périphériques
      </td>
      <td class="itemb">
        Une base de données <span>plus vaste que jamais (x40%)</span> peut couvrir 99% de drivers matériels
      </td>
    </tr>
    <tr>
      <td class="itema">
        Le processus de sauvegarde manuelle <span>compliqué</span> prend beaucoup de temps
      </td>
      <td class="itemb">
        La sauvegarde <span>automatique</span> garantit la sécurité de votre mise à jour
      </td>
    </tr>
    <tr>
      <td class="itema">
        Des composants de jeu obsolètes entraîneront des performances <span>faibles</span> de jeu
      </td>
      <td class="itemb">
        Les pilotes peu courants et les plus récents disponibles pour des performances <span>optimales</span> sur les jeux
      </td>
    </tr>
    <tr class="intro-beacon">
      <td class="itema">
        <span>Ne plus avoir le privilège</span> de mettre à jour les derniers pilotes et introuvables, y compris les pilotes Game-Ready
      </td>
      <td class="itemb">
        Profitez <span>en priorité</span> des derniers pilotes pour une expérience de jeu plus fluide que jamais
      </td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>Plus d’avantages dont vous profiterez de Driver Booster 7 PRO !</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
      <dd>
        <p>Prise en charge de </p>
        <h3>3 500 000+</h3>
        <p>pilotes</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
      <dd>
        <p>Prise en charge de </p>
        <h3>  20%+ </h3>
        <p>de composants  </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
      <dd>
        <p>Vitesse d’analyse </p>
        <h3>20%+ </h3>
        <p>rapide</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
      <dd>
        <p>Notifications désactivées</p>
        <h3>automatiques</h3>
        <p> lorsqu'une tâche en plein écran</p>
      </dd>
    </dl>
  </div>
</div>
<!-- intro end -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <h2>Quantité limitée ! Ne manquez pas les cadeaux Noël !</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png') ?>" alt=""></dt>
        <dd>
          <strong>0€</strong>
          <del>39,99€</del>
          <p>
            Un outil de protection puissant des fichiers qui garantit la sécurité de vos dossiers et vos données.
          </p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png') ?>" alt=""></dt>
        <dd>
          <strong>0€</strong>
          <del>29,99€</del>
          <p>
            Maximisez les performances et la durée de votre disque en défragmentant les registres et les fichiers du système.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/isu-box.png') ?>" alt=""></dt>
        <dd>
          <strong>0€</strong>
          <del>29,99€</del>
          <p>Mettez à jour automatiquement tous vos logiciels sans ouvrir de navigateur Web.</p>
        </dd>
      </dl>
    </div>
    <a class="button btn-mid-lag"
       href="https://www.iobit.com/buy.php?product=fr-db71y3pcisusdpf1999&ref=fr_db71y3pcbundleexpired1999purchase1911<?php echo $refStr; ?>&aff=&refs=fr_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase1911a-fr')">
      Profitez-en dès maintenant
    </a>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review wrapper">
  <h2>
    Nous faisons de notre mieux pour satisfaire <br>
    nos clients où que vous soyez !
  </h2>
  <div class="container">
    <h3>Qu'en pensent-ils ?</h3>
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/jean-pierre.png') ?>" alt="Jean-Pierre FILLION"></li>
      <li class="two"><img src="<?php echo getStaticUrl('images/pcmag.png') ?>" alt="PC Magazine"></li>
      <li class="three"><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></li>
      <li class="four"><img src="<?php echo getStaticUrl('images/christian-cappelle.png') ?>" alt="Christian Cappelle"></li>
    </ul>
    <div class="details">
      <div>
        <h4>Jean-Pierre FILLION <img src="<?php echo getStaticUrl('images/flag-fr.png') ?>" alt=""></h4>
        <p>« J'ai été fortement impressionné de voir tout ce que peut faire Driver Booster PRO ! J'en avais tellement besoin pour résoudre une partie de mes logiciels dont les drivers étaient périmés et bons à mettre à jour. Je ne regrette pas de m'être penché sur Driver Booster. »</p>
      </div>
      <div class="active">
        <h4>PC Magazine</h4>
        <p>« Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un. »</p>
      </div>
      <div>
        <h4>Hishaam Salasa <img src="<?php echo getStaticUrl('images/flag-us.png') ?>" alt=""></h4>
        <p>« Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède une interface utilisateur conviviale et facile à utiliser. 5 ETOILES bien mérités !!! »</p>
      </div>
      <div>
        <h4>Christian Cappelle <img src="<?php echo getStaticUrl('images/flag-be.png') ?>" alt=""></h4>
        <p>« Driver Booster PRO m'a permis de rafraîchir et optimise mes ordinateurs qui fonctionnent beaucoup mieux malgré leur âge avancé . Avec les mises à jour régulières il demeurent plus efficaces et plus fluides! »</p>
      </div>
    </div>
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- end review -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>APPROUVÉ PAR CES MÉDIAS CÉLÈBRES DU MONDE</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Essayez pendant 60 jours, sans risque.</h4>
          <p>
            Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Nous acceptons</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Note:  </dt>
        <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
        <dd>*.Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/packs-box.png')?>" alt=""/></div>
    <div class="center fl">
      <h2>Ne ratez pas la plus grande remise en 2019 !</h2>
    </div>
    <div class="price fr">
      <p><strong>19,99€</strong> <del>174,82€</del></p>
      <a class="button btn-mid-lag"
         href="https://www.iobit.com/buy.php?product=fr-db71y3pcisusdpf1999&ref=fr_db71y3pcbundleexpired1999purchase1911<?php echo $refStr; ?>&aff=&refs=fr_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbexppurchase1911a-fr')">
        Renouvelez et économisez
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
<script type="text/javascript">
var refStr = '<?php echo $refStr;?>';
</script>
</body>
</html>