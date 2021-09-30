<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
//创建浮点计算，取 购买人数 及 剩余礼品数，根据情况选择使用
function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

// 已购买人数
// 需要精确到某个值时，先输出 ceil(microtime_float()*1000/20000) 再 由此结果计算需要减去的量
$cName='frdbau_re';
$reduceNum=empty($_COOKIE[$cName])?(ceil(microtime_float()*1000/20000)):$_COOKIE[$cName];
$buyNum = ceil(microtime_float()*1000/20000) - $reduceNum;
if($_GET['action']=='getBuyNum'){
  setcookie($cName, $reduceNum, time() + 3600 * 24 *30 *7);
  echo $buyNum;
  exit();
}


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
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrom
  e=1" >
  <title>Mettez à niveau vers Driver Booster PRO avec 70% de réduction pour garder tous vos pilotes à jour</title>
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
   <div class="top-box">
     <img src="<?php echo $pResUrl;?>images/banner-db-box.png" alt="">
     <h1>Driver Booster PRO</h1>
     <h2>Passez PRO dès maintenant pour avoir des pilotes à jour en permanence et un PC performant !</h2>
   </div>
   <div class="content">
     <div class="box" data-name="pc3">
       <h3> 3 Mois</h3>
       <p><strong><b>3</b>,99€</strong> / mois</p>
       <a href="https://www.iobit.com/buy.php?product=fr-db73months1199&ref=fr_db73months1199return<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasereturn-fr')" class="buybtn border">VITE, J’EN PROFITE</a>
       <ul>
         <li>3 mois / 3 PC  <strong>11,99€ </strong></li>
         <li class="border">Total  <strong class="red">11,99€ </strong></li>
         <li> <span>Économisez 0€ </span></li>
       </ul>
     </div>
      <div class="box twelve" data-name="pc12">
       <h3> 12 Mois</h3>
       <p><strong><b>1</b>,99€</strong> / mois</p>
       <a href="https://www.iobit.com/buy.php?product=fr-db73pc2299&ref=fr_db712months2299return<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasereturn-fr')" class="buybtn yellow">VITE, J’EN PROFITE</a>
       <ul>
         <li>12 mois / 3 PC  <strong>74,85€  </strong></li>
         <li class="border">Réduction  <strong>-70%  </strong></li>
         <li class="border">Total  <strong class="red">22,99€ </strong></li>
         <li> <span>Économisez 51,86€ </span></li>
       </ul>
     </div>
     <div class="box sixmouth" data-name="pc6">
       <h3> 6 Mois</h3>
       <p><strong><b>2</b>,99€</strong> / mois</p>
       <a href="https://www.iobit.com/buy.php?product=fr-db76months1799&ref=fr_db76months1799return<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasereturn-fr')" class="buybtn border">VITE, J’EN PROFITE</a>
       <ul>
         <li>6 mois / 3 PC  <strong>39,99€  </strong></li>
         <li class="border">Réduction  <strong>-50%  </strong></li>
         <li class="border">Total  <strong class="red">17,99€ </strong></li>
         <li> <span>Économisez 22.00€ </span></li>
       </ul>
     </div>
   </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment wrapper">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<!-- payment end -->

<!-- benfits start -->
<div class="benfits wrapper clearfix">
  <h2>Mettez à jour automatiquement vos pilotes, <br> composants de jeu obsolètes et réparez les problèmes matériels</h2>
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


<!-- review start -->
<div class="review">
  <div class="wrapper clearfix">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
    <div class="media"><img src="<?php echo getStaticUrl('images/media.png')?>" alt=""/></div>
    <div class="usereview">
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"/>
          </div>
          <b> PC Magazine</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/christian-cappelle.png')?>" alt="Christian Cappelle"/>
          </div>
          <b>Christian Cappelle</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/jean-pierre.png')?>" alt="Jean-Pierre FILLION"/>
          </div>
          <b> Jean-Pierre FILLION</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"/>
          </div>
          <b> Hishaam Salasa</b>
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
            
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              Driver Booster PRO m'a permis de rafraîchir et optimise mes ordinateurs qui 
              fonctionnent beaucoup mieux malgré leur âge avancé . Avec les mises à 
              jour régulières il demeurent plus efficaces et plus fluides!
            </p>
            
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
            
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède 
              une interface utilisateur conviviale et facile à utiliser. 5 ETOILES bien mérités !!!
            </p>
            
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->


<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <h2>Aperçu des différences entre votre édition actuelle et la version PRO</h2>
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="itemb"><div>Driver Booster PRO <span></span></div></th>
      <th class="space"></th>
      <th class="itema"><div>Votre édition actuelle <span></span></div></th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Vérifiez l’état des pilotes en un seul clic	</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Téléchargez et installez automatiquement et rapidement les pilotes</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Téléchargez et installez les pilotes pendant vos périodes d’inactivités</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Sauvegardez automatiquement vos pilotes précédents pour restauration simplifiée en cas de besoin </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Mettez à jour plus de pilotes peu courants ou introuvables</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Mise à jour prioritaire pour les pilotes Game Ready et les composants les plus récents</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Corrigez en un clic les erreurs de périphérique pour de meilleures performances </td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <!-- ADD NEW -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Mise à jour automatique vers la dernière version</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
    <!-- AMEND OLD -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Assistance technique gratuite 24h / 24 et 7 jours sur 7</td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
    </tr>
     <tr>
      <td class="icons border"></td>
      <td class="virtue border"></td>
      <td class="itemb last"></td>
      <td class="space"></td>
      <td class="itema last"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison-table end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="showcase">
      <span class="img three-box"></span>
    </div>
    <ul>
      <li class="active twelve" data-name="pc12">
        <span>12 mois, 3 PC</span>
        <strong>Prix choc: 22,99€</strong>
      </li>
      <li class="sixmouth" data-name="pc6">
         <span>6 mois, 3 PC  </span>
         <strong>Prix réduit: 17,99€</strong>
      </li>
      <li data-name="pc3">
         <span> 3 mois, 3 PC </span>
        <strong>Prix d’essai: 11,99€</strong>
      </li>
    </ul>
    <dl class="price-content">
      <dt>
        seulement <strong><b>1</b>,99€</strong> par mois
      </dt>
      <dd>
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=fr-db73pc2299&ref=fr_db712months2299return<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasereturn-fr')">
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
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Satisfait ou Remboursé</h3></dd>
      <dd>Garantie satisfait ou remboursé pendant 60 <br> jours après la date d’achat.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><h3>Paiement 100% Sécurisé</h3></dd>
      <dd>IObit vous propose huit modes de paiement <br> sécurisés pour régler vos achats.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/service.png" alt=""></dt>
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



<script src="<?php echo $pResUrl; ?>js/script.js"></script>
</body>
</html>