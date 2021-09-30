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

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
    'purchase-10','purchase-14','purchase-15','purchase-16',
    'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
    'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
    'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
    'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['st'],array('dbxmasr','db_xmas'))){
  $refStr.='-'.$_GET['st'];
}
if($_GET['to']=='purchase-6'){
  $ver=$_GET['ver'];
  if(preg_match('/^([0-9])\.([0-9])\.[0-9]\.[0-9]{3}/',$ver,$matches)){
    $verStr=$matches[1].$matches[2];
    $refStr.='-'.$verStr;
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Jusqu'à -85% sur Driver Booster PRO et profitez des cadeaux exclusifs uniquement pour Noël - Vente Flash Noël chez IObit</title>
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
    <h1 class="title">Vente Flash Spéciale Noël</h1>
    <!--
        banner-subtitle
        changing the text of subtitle after 30s
    -->
    <h2 class="subtitle countdown">
      Une nouvelle offre dans
      <strong>00</strong><span>h:</span>
      <strong>00</strong><span>m:</span>
      <strong>00</strong><span>:</span>
      <strong>00</strong>,
      dépêchez-vous !
    </h2>
    <!-- banner-content -->
    <ul class="content">
      <!-- Left BD-1PC -->
      <li id="db-1pc" class="on-left">
        <!-- box -->
        <img class="box" src="<?php echo $pResUrl;?>images/banner-db-box.png" alt="">
        <!-- price -->
        <p class="price">
          <strong>29</strong>
          <sup> €99</sup>
        </p>
        <!-- buybtn -->
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-db61pc2999&ref=fr_db61pc2999purchase1808<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1808c-fr');">
          <span>Activez Maintenant</span>
        </a>
      </li>
      <!-- Middle DB-3PC -->
      <li id="db-3pc" class="on-middle">
        <!-- off -->
        <img class="off" src="<?php echo $pResUrl;?>images/banner-offer60.png" alt="">
        <!-- box -->
        <img class="box" src="<?php echo $pResUrl;?>images/banner-db-box3pc.png" alt="">
        <!-- price -->
        <p class="price">
          <strong>24</strong>
          <sup> €99</sup>
          <del> 74,85€</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn cart" href="https://www.iobit.com/buy.php?product=fr-db63pc2499&ref=fr_db63pc2499purchase1808<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1808b-fr');">
          <span>VITE, J’EN PROFITE</span>
        </a>
        <!-- attention -->
        <p class="attention"><i></i><strong>4,006,553</strong> personnes l'ont acheté!</p>
        <!-- countdown -->
        <p class="countdown">
          Expiré dans
          <strong>00</strong>H :
          <strong>00</strong>m :
          <strong>00</strong>s :
          <strong class="small">00</strong>ms *
        </p>
      </li>
      <!-- Right DB-PF-SD -->
      <li id="db-pf-sd" class="on-right nobegin">
        <!-- off -->
        <img class="off" src="<?php echo $pResUrl;?>images/banner-offer83.png" alt="">
        <!-- box -->
        <img class="box" src="<?php echo $pResUrl;?>images/banner-dbpfsd-box.png" alt="">
        <!-- price -->
        <p class="price">
          <strong>24</strong>
          <sup> €99</sup>
          <del> 144,83€</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn cart" href="https://www.iobit.com/buy.php?product=fr-db6sdpf2499&ref=fr_db6sdpf2499purchase1808<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1808a-fr');">
          <span>VITE, J’EN PROFITE</span>
        </a>
        <!-- attention -->
        <p class="attention hidden"><i></i><strong class="buyNum"><?php echo $buyNum ?></strong> personnes l'ont acheté!</p>
        <!-- countdown -->
        <p class="countdown hidden">
          Expiré dans
          <strong>00</strong>H :
          <strong>00</strong>m :
          <strong>00</strong>s :
          <strong class="small">00</strong>ms *
        </p>
      </li>
    </ul>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<!-- payment end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- feature title -->
    <h2>Gardez les pilotes à jour et les performances du PC stables</h2>
    <!-- feature-showcase -->
    <img class="showcase" src="<?php echo $pResUrl; ?>images/showcase.png" alt="">
    <!-- feature-details -->
    <div class="detail-list">
      <!-- 01 -->
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Met à jour plus de 3 000 000 pilotes</h3>
          <p>Solution “one-stop” pour mettre à jour automatiquement plus de 3 000 000 pilotes obsolètes et incompatibles.</p>
        </dd>
      </dl>
      <!-- 02 -->
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>Mise à jour 100% sécurisée</h3>
          <p>Sauvegarder automatiquement tous les pilotes et créer un point de restauration du système.</p>
        </dd>
      </dl>
      <!-- 03 -->
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>Performance de jeu maximale</h3>
          <p>Augmentez les performances de jeu avec les derniers pilotes Game Ready et améliorez l’expérience de jeu avec les composants mis à jour et appropriés.</p>
        </dd>
      </dl>
      <!-- 04 -->
      <dl>
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Téléchargement de pilotes plus rapide </h3>
          <p>Télécharger et installer automatiquement les pilotes & les composants du jeu pendant le temps d’inactivité.</p>
        </dd>
      </dl>
      <!-- anchor -->
      <a href="Javascript:void(0);" class="textlink">En savoir plus sur la version PRO >></a>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- gift-box start -->
<div class="gift-box">
  <!-- gift-box title -->
  <h2>Un paquet cadeau à durée limitée pour nos utilisateurs importants !</h2>
  <div class="wrapper clearfix">
    <!-- box -->
    <div class="box">
      <img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt="">
      <dl>
        <dt>
          <h3>Smart Defrag 6 PRO</h3>
          <del>29,99€</del>&nbsp;&nbsp;<strong>0<b>€</b> </strong>
        </dt>
        <dd>Accélère la vitesse d’accès aux fichiers & de <br> lancement du jeu</dd>
        <dd>Maximise les performances du disque dur <br> et de votre PC    </dd>
      </dl>
    </div>
    <!-- box -->
    <div class="box last">
      <img src="<?php echo $pResUrl; ?>images/pf-gift.png" alt="">
      <dl>
        <dt>
          <h3>Protected Folder</h3>
          <del>39,99€</del>&nbsp;&nbsp;<strong>0<b>€</b> </strong>
        </dt>
        <dd>Il fait office de coffre-fort pour vos fichiers <br> et dossiers</dd>
        <dd>Un mot de passe empêche quiconque <br> de les ouvrir   </dd>
      </dl>
    </div>
    <!-- buybtn -->
    <a class="buybtn cart disabled" disabled="ture" data-url="https://www.iobit.com/buy.php?product=fr-db6sdpf2499&ref=fr_db6sdpf2499purchase1808<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1808a-fr');" href="javascript:void(0)" onclick="">
      <span>VITE, J’EN PROFITE</span>
    </a>
  </div>
</div>
<!-- gift-box end -->

<!-- review start -->
<div class="review">
  <div class="wrapper ">
    <h2> Approuvé par ces célèbres médias à travers le monde</h2>
    <div class="review-message">
      <dl class="wayne">
        <dt>
          <div class="img-box">
            <h4>Wayne Bowler</h4>
            <img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster PRO est l’un des meilleurs programmes de mise à jour de pilotes sur le marché. Très facile à utiliser, informatif et intuitif, il contient toutes les mises à jour dont j’ai besoin."</dd>
      </dl>
      <dl class="myo ">
        <dt>
          <div class="img-box">
            <h4>Myo Thuya</h4>
            <img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Mon PC est plus rapide, plus stable que je ne le pensais avec Driver Booster PRO."</dd>
      </dl>
      <dl class="pcmag red-round active">
        <dt>
          <div class="img-box">
            <h4>PC-MAG</h4>
            <img src="<?php echo $pResUrl; ?>images/pc-mag.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>“IObit développe de nombreux logiciels pour Windows, Driver Booster PRO, qui met automatiquement à jour les pilotes, est l’un de ses meilleurs programmes.”</dd>
      </dl>
      <dl class="chip ">
        <dt>
          <div class="img-box">
            <h4>chip</h4>
            <img src="<?php echo $pResUrl; ?>images/chip.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Driver Booster PRO: La mise à jour automatique de pilotes n’est que offerte dans la version PRO. ”</dd>
      </dl>
      <dl class="fabio red-round active">
        <dt>
          <div class="img-box">
            <h4>Fabio Tursi</h4>
            <img src="<?php echo $pResUrl; ?>images/fabio-tursi.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Avec Driver Booster PRO, j’ai finalement trouvé le programme parfait pour garder mon système propre et à jour.”</dd>
      </dl>
      <dl class="vector ">
        <dt>
          <div class="img-box">
            <h4>Vector</h4>
            <img src="<?php echo $pResUrl; ?>images/vector.png" alt="">
          </div>
          <div class="line"></div>
        </dt>
        <dd>“Enfin un programme qui maintient mon système à jour de la manière la plus simple!”</dd>
      </dl>
      <dl class="adam">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="">
            <h4>Adam Backlund</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>"Je recommande vivement Driver Booster PRO à tous ceux qui veulent mettre à jour leurs pilotes rapidement et facilement."</dd>
      </dl>
      <dl class="olnet">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olnet.png" alt="">
            <h4>01net</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>“Toutes ces opérations sont réalisées en un seul clic, ce qui vous fait gagner un temps précieux, et rend votre PC plus stable.”</dd>
      </dl>
      <dl class="olorin red-round active">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/olorin.png" alt="">
            <h4>Olorin 89</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>“Driver Booster est un outil simple de mise à jour du pilote qui rend la vie plus facile pour tout le monde.”</dd>
      </dl>
      <dl class="html ">
        <dt>
          <div class="img-box">
            <img src="<?php echo $pResUrl; ?>images/html-it.png" alt="">
            <h4>HTML-it</h4>
          </div>
          <div class="line"></div>
        </dt>
        <dd>“IObit Driver Booster garde tous les pilotes toujours à jour avec sa technologie de pointe.”</dd>
      </dl>

    </div>
  </div>
</div>
<!-- review end -->

<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2">La comparaison de produit</th>
      <th class="space"></th>
      <th class="itemb">Driver Booster FREE</th>
      <th class="space"></th>
      <th class="itema">Driver Booster PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Identifier Auto les pilotes obsolètes, manquants et défectueux	</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Mise à jour en un clic pour une performance maximale du matériel</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Débloquer la limite de vitesse de la mise à jour des pilotes</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Priorité pour mettre à jour plus de pilotes obsolètes & rares  <sup>Amélioré  </sup> </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Réduire les crashs Système pour une meilleure performance    <sup class="nou">Nouveau</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Télécharger & Installer Auto les pilotes pendant le temps d’inactivité   <sup class="nou"> Nouveau</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Sauvegarde automtique de tous les pilotes pour une restauration sûre </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- ADD NEW -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Priorité pour obtenir les pilotes Game Ready <sup class="nou"> Nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- AMEND OLD -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Priorité pour installer les composants de jeu mis à jour et appropriés <sup> Amélioré</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Détecter et réparer efficacement les erreurs de périphériques <sup class="nou"> Nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue"> Mettre à jour Automatiquement vers la Dernière Version</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison-table end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <!-- title -->
    <h2>Premier arrivé, premier servi !</h2>
    <div class="showcase">
      <span class="img three-box"></span>
    </div>
    <ul>
      <li class="active" data-url="https://www.iobit.com/buy.php?product=fr-db6sdpf2499&ref=fr_db6sdpf2499purchase1808<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1808a-fr');" data-price="24" data-original="144,83€"><span>1 An / 3 PC+Paquet Cadeau</span> <strong>-85%</strong></li>
      <li class="one-pc" data-url="https://www.iobit.com/buy.php?product=fr-db61pc2999&ref=fr_db61pc2999purchase1808<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1808c-fr');" data-price="29" data-original=""><i></i> <span>1 An / 1 PC  </span></li>
      <li class="three-pc" data-url="https://www.iobit.com/buy.php?product=fr-db63pc2499&ref=fr_db63pc2499purchase1808<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" data-ga="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1808b-fr');" data-price="24" data-original="74,85€"><i></i> <span> 1 An / 3 PC </span> <strong>-60%</strong></li>
    </ul>
    <dl class="price-content">
      <dt>
        <p class="price">
          <strong>24</strong>
          <sup> €99</sup>
          <del> 144,83€</del>
        </p>
      </dt>
      <dd>
        <a class="buybtn cart" href="https://www.iobit.com/buy.php?product=fr-db6sdpf2499&ref=fr_db6sdpf2499purchase1808<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1808a-fr');">
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
  <p>Copyright © 2005 - 2018 IObit. Tous droits réservés</p>
</div>
<!-- footer end -->



<script src="<?php echo $pResUrl; ?>js/script.js"></script>
<script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "augflashsales.php",
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