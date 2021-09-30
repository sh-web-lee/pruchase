<?php 
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$cName='frdbfeb_re';
$reduceNum=empty($_COOKIE[$cName])?(ceil(microtime_float()*1000/20000)):$_COOKIE[$cName];
$buyNum = ceil(microtime_float()*1000/20000) - $reduceNum;
if($_GET['action']=='getBuyNum'){
  setcookie($cName, $reduceNum, time() + 3600 * 24 *30 *7);
  echo $buyNum;
  exit();
}

/*$time = time();
if(!isset($_COOKIE['returnuserfr2020'])){
  setcookie('returnuserfr2020', $time, time() + 3600 * 24 *30 *7);
}else{
  if($time-$_COOKIE['returnuserfr2020']>86400){
    header("Location:./return.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
  }
}
*/

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Jusqu'à -85% sur Driver Booster PRO. Achetez-en 1 et obtenez-en 3 GRATUITS !  Soldes d'été chez IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- banner-title -->
    <h1 class="title">Dernière Démarque - Soldes d'été</h1>
    <h2 class="subtitle">Jusqu'à -85% ! Attention les quantités sont limitées, n'attendez pas la dernière minute !</h2>
    <!-- banner-content -->
    <ul class="content">
      <!-- Left BD-1PC -->
      <li id="db-1pc" class="on-left">
        <!-- box -->
        <img class="off" src="<?php echo getStaticUrl('images/banner-offer15.png')?>" alt="">
        <img class="box" src="<?php echo getStaticUrl('images/banner-db-box.png')?>" alt="">
        <!-- price -->
        <p class="price">
          <strong>24</strong>
          <sup> €99</sup>
          <del> 29,99€</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=fr-db71y1pc2499&ref=fr_db71y1pc2499indexpurchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2002-fr')">
          <span>VITE, J’EN PROFITE</span>
        </a>
      </li>
      <li id="db-pf-sd" class="on-middle">
        <img class="off" src="<?php echo getStaticUrl('images/banner-offer85.png')?>" alt="">
        <img class="box" src="<?php echo getStaticUrl('images/banner-dbpfsd-box.png')?>" alt="">
        <!-- price -->
        <p class="price">
          <strong>24</strong>
          <sup> €99</sup>
          <del> 174,82€</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2499&ref=fr_db7sdpfiu2499indexpurchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2002-fr')">
          <span>VITE, J’EN PROFITE</span>
        </a>
        <!-- attention -->
        <p class="attention hidden"><i></i><strong class="buyNum"><?php echo $buyNum ?></strong> personnes l'ont acheté!</p>
        <!-- countdown -->
        <p class="countdown">
          Expiré dans
          <strong>00</strong>H :
          <strong>00</strong>m :
          <strong>00</strong>s :
          <strong class="small">00</strong>ms *
        </p>
        <!-- attention -->
        <p class="attention"><i></i><strong>4,325,356</strong> personnes l’ont acheté !</p>
      </li>
      <li id="db-3pc" class="on-right">
        <img class="off" src="<?php echo getStaticUrl('images/banner-offer60.png')?>" alt="">
        <img class="box" src="<?php echo getStaticUrl('images/banner-db-box3pc.png')?>" alt="">
        <!-- price -->
        <p class="price">
          <strong>26</strong>
          <sup> €99</sup>
          <del> 74,85€</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=fr-db73pc2699&ref=fr_db71y3pc2699indexpurchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2002-fr')">
          <span>VITE, J’EN PROFITE</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
</div>
<!-- payment end -->

<!-- benfits start -->
<div class="benfits wrapper clearfix">
  <h2>Gardez les pilotes à jour et les performances du PC stables</h2>
  <div class="showcase">
    <div class="inner">
      <ul class="screenshot">
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt=""/>
        </li>
      </ul>
    </div>
    <ul class="zoom">
      <li class="fun1 active">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun2">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun3">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun4">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
        </div>
      </li>
    </ul>
  </div>
  <div class="detail-list">
    <dl class="active first">
      <dt><i class="benfits01"></i></dt>
      <dd>
        <h3>Met à jour plus de 3 500 000 pilotes</h3>
        <p>
          Solution “one-stop” pour mettre à jour automatiquement<br>
          plus de 3 500 000 pilotes obsolètes et incompatibles.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benfits02"></i></dt>
      <dd>
        <h3>Mise à jour 100% sécurisée</h3>
        <p>
          Sauvegarder automatiquement tous les pilotes et créer un point<br>
          de restauration du système.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benfits03"></i></dt>
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
      <dt><i class="benfits04"></i></dt>
      <dd>
        <h3>Téléchargement de pilotes plus rapide</h3>
        <p>
          Télécharger et installer automatiquement les<br>
          pilotes & les composants du jeu pendant le temps d’inactivité.
        </p>
      </dd>
    </dl>
  </div>
  <div class="clear"></div>
  <a class="intro fr" href="javascript: void(0)">En savoir plus sur la version PRO >></a>
</div>
<!-- benfits end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Profitez d’un paquet cadeau à durée limitée !</h2>
    <!-- sd box -->
    <div class="box sd">
      <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
      <dl>
        <dt>
          <h3>Smart Defrag 6 PRO</h3>
          <del>29,99€</del>&nbsp;&nbsp;<strong>0<b>€</b> </strong>
        </dt>
        <dd>
          Maximisez les performances <br>
          du disque dur et de votre PC.
        </dd>
      </dl>
    </div>
    <!-- pf box -->
    <div class="box pf">
      <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
      <dl>
        <dt>
          <h3>Protected Folder</h3>
          <del>39,99€</del>&nbsp;&nbsp;<strong>0<b>€</b> </strong>
        </dt>
        <dd>
          Protégez vos fichiers et vos données <br>
          importants contre le vol, la perte et les fuites.
        </dd>
      </dl>
    </div>
    <!-- iu box -->
    <div class="box iu">
      <img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt="">
      <dl>
        <dt>
          <h3>IObit Uninstaller 9 PRO</h3>
          <del>29,99€</del>&nbsp;&nbsp;<strong>0<b>€</b> </strong>
        </dt>
        <dd>
          Désinstallez les bundlewares, programmes <br>
          indésirables et les plug-ins en un clic.
        </dd>
      </dl>
    </div>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- buybtn -->
    <a class="buybtn cart"
       href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2499&ref=fr_db7sdpfiu2499indexpurchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2002-fr')">
      <span>VITE, J’EN PROFITE</span>
    </a>
  </div>
</div>
<!-- gift-box end -->

<div class="reviewcompare">
  <!-- review start -->
  <div class="review wrapper clearfix">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
    <div class="media"><img src="<?php echo getStaticUrl('images/media.png')?>" alt=""/></div>
    <div class="usereview">
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"/>
          </div>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/christian-cappelle.png')?>" alt="Christian Cappelle"/>
          </div>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/jean-pierre.png')?>" alt="Jean-Pierre FILLION"/>
          </div>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"/>
          </div>
        </li>
      </ul>
      <div class="userbox">
        <dl class="one active">
          <dd>
            <p>
              Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de 
              licence pour un bon prix. Bien que les concurrents Ashampoo Driver Updater et 
              SlimWare Utilities DriverUpdate offrent également des fonctionnalités 
              intéressantes, IObit Driver Booster PRO reste absolument numéro un.
            </p>
            <b>— PC Magazine</b>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              Driver Booster PRO m'a permis de rafraîchir et optimise mes ordinateurs qui 
              fonctionnent beaucoup mieux malgré leur âge avancé . Avec les mises à 
              jour régulières il demeurent plus efficaces et plus fluides!
            </p>
            <b>— Christian Cappelle</b>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              J'ai été fortement impressionné de voir tout ce que peut faire Driver Booster PRO ! 
              J'en avais tellement besoin pour résoudre une partie de mes logiciels dont les drivers 
              étaient périmés et bons à mettre à jour. Je ne regrette pas de m'être penché sur 
              Driver Booster. 
            </p>
            <b>— Jean-Pierre FILLION</b>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède 
              une interface utilisateur conviviale et facile à utiliser. 5 ETOILES bien mérités !!!
            </p>
            <b>— Hishaam Salasa</b>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <h2>Aperçu des différences entre votre édition actuelle et la version PRO</h2>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th colspan="2"></th>
          <th class="space"></th>
          <th class="itema">Driver Booster PRO</th>
          <th class="space2"></th>
          <th class="itemb">Votre édition actuelle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Vérifiez l’état des pilotes en un seul clic</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Téléchargez et installez automatiquement et rapidement les pilotes</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Téléchargez et installez les pilotes pendant vos périodes d’inactivités</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Sauvegardez automatiquement vos pilotes précédents pour restauration simplifiée en cas de besoin</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Mettez à jour plus de pilotes peu courants ou introuvables</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Mise à jour prioritaire pour les pilotes Game Ready et les composants les plus récents</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Corrigez en un clic les erreurs de périphérique pour de meilleures performances </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Mise à jour automatique vers la dernière version</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Assistance technique gratuite 24h / 24 et 7 jours sur 7</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
</div>

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <!-- title -->
    <h2>Premier arrivé, premier servi !</h2>
    <div class="showcase">
      <span class="img three-box"></span>
    </div>
    <ul>
      <li class="active" data-num="1">
        <span>1 An / 3 PC+Paquet Cadeau</span>
        <strong>-85%</strong>
      </li>
      <li class="one-pc" data-num="0">
        <i></i> <span>1 An / 1 PC  </span>
        <strong>-15%</strong>
      </li>
      <li class="three-pc" data-num="2">
        <i></i> <span> 1 An / 3 PC </span>
        <strong>-60%</strong>
      </li>
    </ul>
    <dl class="price-content">
      <dt>
        <p class="price">
          <strong>24</strong>
          <sup> €99</sup>
          <del> 174,82€</del>
        </p>
      </dt>
      <dd>
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2499&ref=fr_db7sdpfiu2499indexpurchase2002<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2002-fr')">
          <span>VITE, J’EN PROFITE</span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      <dd><h3>Satisfait ou Remboursé</h3></dd>
      <dd>Garantie satisfait ou remboursé pendant 60 <br> jours après la date d’achat.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
      <dd><h3>Paiement 100% Sécurisé</h3></dd>
      <dd>IObit vous propose huit modes de paiement <br> sécurisés pour régler vos achats.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dt>
      <dd><h3>Obtenir la licence</h3></dd>
      <dd>Vous recevrez le code de licence dans les <br> minutes après l’achat.</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
    <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
  </dl>
  <!-- copyright -->
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
</div>
<!-- footer end -->



<script src="<?php echo getStaticUrl('js/script.js')?>"></script>
<script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "febdecoy.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 15000);
</script>
</body>
</html>