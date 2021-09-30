<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdbsum_p' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 77;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo $packsNum;
  exit();
}

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>1 ACHETÉ = 4 GRATUITS ! Profitez de votre coffret cadeau uniquement pour l'été !</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Oswald|Roboto:400,500&display=swap" rel="stylesheet">
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
    <h1>1 ACHETÉ = 4 GRATUITS</h1>
    <h3 class="date">
       <img src="<?php echo $pResUrl; ?>images/date.png" alt="">
       <strong>12</strong> <span>H</span> :
       <strong>12</strong> <span>M</span> :
       <strong class="first">12</strong> <span>S</span> :
       <strong class="last">12</strong> <span>MS</span>
    </h3>
    <img src="<?php echo $pResUrl; ?>images/db-banner-box.png" alt="" class="img-box">
    <dl class="price">
      <dt>
        <strong>24,€99</strong> <del>149,95€</del>
      </dt>
      <dd><a 
        href="https://www.iobit.com/buy.php?product=fr-db6sdiu2499&ref=fr_db6sdiu2499purchase1906<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db"
        onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1906-fr')  " class="buybtn">VITE, J’EN PROFITE</a></dd>
      <dd>Plus que <strong class="packsNum">50</strong> coffrets cadeaux disponibles</dd>
    </dl>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment wrapper clearfix">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dt>
    <dd>Garantie satisfait ou remboursé <br> pendant 60 jours après la date <br> d’achat.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></dt>
    <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></dt>
    <dd>Assistance téléphonique 7j/7 et <br> 24h/24.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""/></dt>
    <dd>Vous recevrez le code de licence <br> dans les minutes après <br> l’achat.</dd>
  </dl>
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
        <h3>Met à jour plus de 3 000 000 pilotes</h3>
        <p>
          Solution “one-stop” pour mettre à jour automatiquement<br>
          plus de 3 000 000 pilotes obsolètes et incompatibles.
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
    <h2>Profitez vite d’un coffret cadeau uniquement pour cet été ! </h2>
    <!-- sd box -->
    <div class="box sd">
      <img src="<?php echo $pResUrl; ?>images/db-gift.png" alt="">
      <dl>
        <dt>
          <h3>Driver Booster PRO</h3>
          <del>59,98€</del>&nbsp;&nbsp;<strong>2 PC SUPP. </strong>
        </dt>
        <dd>
          Gardez tous vos pilotes à jour et diminuez <br> des crashs de système.
        </dd>
      </dl>
    </div>
    <!-- pf box -->
    <div class="box pf">
      <img src="<?php echo $pResUrl; ?>images/sd-gift.png" alt="">
      <dl>
        <dt>
          <h3>Smart Defrag 6 PRO</h3>
          <del>29,99€</del>&nbsp;&nbsp;<strong>1 An / 1 PC </strong>
        </dt>
        <dd>
          Maximisez les performances du disque <br> dur et de votre PC.
        </dd>
      </dl>
    </div>
    <!-- iu box -->
    <div class="box iu">
      <img src="<?php echo $pResUrl; ?>images/iu-gift.png" alt="">
      <dl>
        <dt>
          <h3>IObit Uninstaller 8 PRO</h3>
          <del>29,99€</del>&nbsp;&nbsp;<strong>1 An / 1 PC </strong>
        </dt>
        <dd>
          Désinstallez les bundlewares, programmes
          indésirables  <br> et les plug-ins en un clic.
        </dd>
      </dl>
    </div>
    <!-- clear float -->
    <div class="clear"></div>
    <!-- buybtn -->
    <a class="buybtn " href="https://www.iobit.com/buy.php?product=fr-db6sdiu2499&ref=fr_db6sdiu2499purchase1906<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db"
        onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1906-fr')  ">
      Profite de mes cadeaux 
    </a>
    <p class="last">Plus que <strong class="packsNum">50</strong> coffrets cadeaux disponibles</p>
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
  <h2>Aperçu des différences entre votre version et Driver Booster PRO</h2>
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2"></th>
      <th class="itemb"><span>Votre version actuelle</span></th>
      <th class="itema shadow"><span>Driver Booster PRO</span></th>
    </tr>
    </thead>
    <tbody>
      <tr class="title">
        <td colspan="2" class="text">Mode Automatique</td>
        <td class="itemb"></td>
        <td class="itema"></td>
      </tr>
      <tr>
        <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
        <td class="virtue">Vérifiez et mettez à jour automatiquement les pilotes obsolètes et incompatibles	</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
        <td class="virtue">Téléchargez automatiquement des pilotes pendant le temps d’inactivité</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
        <td class="virtue">Sauvegardez automatiquement tous les pilotes et créez un point de restauration du système</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
        <td class="virtue">Mettez à niveau automatiquement vers la dernière version</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr class="title">
        <td colspan="2" class="text">Privilège</td>
        <td class="itemb"></td>
        <td class="itema"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
        <td class="virtue">Priorité pour télécharger les derniers pilotes Game Ready  </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
        <td class="virtue">Priorité pour mettre à jour les pilotes rares </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
        <td class="virtue">Priorité pour installer les composants mis à jour et appropriés </td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
        <td class="virtue">Assistance technique gratuite 24h / 24 et 7 jours sur 7</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
        <td class="virtue">Prend en charge 200% plus de périphériques</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
        <td class="virtue">La vitesse de mise à jour des pilotes jusqu’à 100% plus rapide</td>
        <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
        <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- comparison-table end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <img src="<?php echo $pResUrl; ?>images/bottom-db-box.png" alt="" class="img-box">
    <dl class="price">
      <dt>
        <strong>24,€99</strong> <del>149,95€</del>
      </dt>
      <dd><a 
        href="https://www.iobit.com/buy.php?product=fr-db6sdiu2499&ref=fr_db6sdiu2499purchase1906<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db"
        onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1906-fr')  " class="buybtn">VITE, J’EN PROFITE</a></dd>
      <dd>1 an d’abonnement / 3 PC</dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
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