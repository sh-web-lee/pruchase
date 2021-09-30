<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdbrc_p' . $date;
  $c_name_t='frdbrc_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title> Profitez de Driver Booster 7 PRO pour 0€</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <p class="name">Driver Booster 7 PRO</p>
      <h1>La prévente mondiale en direct</h1>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right fl">
          <h2>RÉSERVÉ UNIQUEMENT À NOS  <big>1000</big> PREMIERS CLIENTS </h2>
          <div class="numbox">
            <h3>
              Plus que 
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              disponibles
            </h3>
            <p><span class="buyNum"><?php echo $viewNum; ?></span> utilisateurs sont sur cette page</p>
          </div>
          <ul class="price clearfix">
            <li class="first"><strong>0<small>€</small></strong></li>
            <li class="last">
              <a class="buybtn big"
                 href="https://www.iobit.com/buy.php?product=fr-db7preorder&ref=fr_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-fr');">
                 VITE, J’EN PROFITE
              </a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- foryou start -->
  <div class="foryou">
    <div class="wrapper">
      <h2>Driver Booster 6 PRO a vous aide à</h2>
      <div class="screen">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <span class="rocket"></span>
        <div class="forlist left">
          <h3>Améliorer les performances du <b>PC</b> </h3>
          <p><i class="circle">.</i> Mettre à jour <b>x </b> pilote(s) PC afin d'éviter les problèmes du système;</p>
          <p><i class="circle">.</i> Corriger  <b>x</b> erreur(s) de périphérique pour résoudre les problèmes matériels; </p>
        </div>
        <div class="forlist right">
          <h3>Améliorer les <b>performances</b> de jeu</h3>
          <p><i class="circle">.</i> Mettre à jour  <b>x</b> composant(s) de jeu pour un lancement rapide de jeu;</p>
          <p><i class="circle">.</i> Mettre à jour <b>x</b> pilote(s) Game-ready avec priorité pour profiter des nouvelles fonctionnalités <br> &nbsp;&nbsp; et corriger les bugs;</p>
        </div>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- foryou end -->

  <!-- hashow start -->
  <div class="hashow">
    <div class="wrapper">
      <h2>Votre Driver Booster PRO a maintenant expiré</h2>
      <div class="screen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="point">!</span>
        </div>
        <ul class="right fr">
          <li class="first"><i class="all-icons arrow"></i> <span>Base de données se réduit à <b>2 500 000</b></span></li>
          <li><i class="all-icons"></i> <span> Accélération de téléchargement de pilote <b>Non disponible</b></span></li>
          <li><i class="all-icons"></i> <span> Mise à jour automatique du pilote <b>Non disponible</b></span></li>
          <li><i class="all-icons"></i> <span> Sauvegarde de pilote précédent  <b>Non disponible</b>    </span></li>
          <li><i class="all-icons"></i> <span> Correction des erreurs de périphérique <b>Non disponible</b> </span></li>
          <li><i class="all-icons"></i> <span> Mise à jour de composants de jeu <b>Non disponible</b> </span></li>
          <li><i class="all-icons"></i> <span> Pilotes Game Ready  <b>Non disponible</b></span></li>
        </ul>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- hashow end -->

  <!-- db-feature start -->
  <div class="db-feature">
    <div class="wrapper">
      <h2>Driver Booster 7 PRO disponible en précommande, <br> plus d’avantages vous obtiendrez</h2>
      <div class="clearfix">
        <div class="featlist one">
          <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
          <p>Prise en charge de </p>
          <h3>3 500 000+</h3>
          <p>pilotes</p>
        </div>
        <div class="featlist two">
          <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
          <p>Prise en charge de </p>
          <h3>  20%+ </h3>
          <p>de composants  </p>
        </div>
        <div class="featlist three">
          <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
          <p>Vitesse d’analyse </p>
          <h3>20%+ </h3>
          <p>rapide</p>
        </div>
        <div class="featlist four">
          <img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt=""/>
          <p>Notifications désactivées</p>
          <h3>automatiques</h3>
          <p> lorsqu'une tâche en plein écran</p>
        </div>
      </div>
      <h3 class="subtitle">Profitez de nouveau de toutes les fonctionnalités PRO</h3>
      <ul class="price">
        <li class="last">
          <a class="buybtn big"
             href="https://www.iobit.com/buy.php?product=fr-db7preorder&ref=fr_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-fr');">
             VITE, J’EN PROFITE <span>- <big>0€</big></span>
          </a>
        </li>
      </ul>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    </div>
  </div>
  <!-- db-feature end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent !  </h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Avis des médias</h2>
            <p>« IObit développe de nombeux utilitaires, et Driver Booster PRO, qui met automatiquement à jour vos pilotes, est l’un de ses meilleurs utilitaires. Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. L’interface utilisateur personnalisée affiche des informations matérielles spécifiques. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un. »</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/dunston-diaz.png')?>" alt=""></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>Je dois dire premièrement que c’est un logiciel très léger et facile à utiliser. Driver Booster travaille en arrière-plan et ne surchargera pas le processeur et la RAM. J'ai pu jouer à de nouveaux jeux sans avoir à arrêter tout processus en arrière-plan. J'exécute habituellement les mises à jour Windows quotidiennement pour obtenir les derniers pilotes et Driver Booster a mis à jour et corrigé les pilotes de mon ordinateur précisément, mieux que Windows Update. Je suis vraiment impressionné par le logiciel et le recommande fortement.</p>
            <cite>Dunston Diaz</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt=""></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>
              Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède une interface utilisateur conviviale et facile à utiliser. C'est vraiment le meilleur programme que j'ai jamais utilisé ! 5 ETOILES bien mérités !!! Hautement recommandé !
            </p>
            <cite>Hishaam Salasa</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt=""></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>
              Driver Booster a aidé à résoudre les problèmes de lenteurs de mon ordinateur portable et éviter la plantage. Parfois, lorsque j’essayais de mettre à jour mes pilotes, l’ordinateur tombait en panne et je devais le formater pour restaurer les fonctions. Cela ne se produit plus avec DB7. Il télécharge des pilotes rapidement et facile à utiliser, c'est le meilleur outil sur le marché jusqu'à présent !
            </p>
            <cite>Carlos Alexandre Veríssimo</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/jean-pierre.png')?>" alt=""></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>
              J'ai été fortement impressionné de voir tout ce que peut faire Driver Booster ! J'en avais tellement besoin pour résoudre une partie de mes logiciels dont les drivers étaient périmés et bons à mettre à jour. C'est ce que Driver Booster à fait pour moi, en partie. Drivers Booster a sécurisé la plupart de mes applications devenues obsolètes et je suis impatient de finaliser l'entièreté du PC. J'ai bien remarqué que mes applications étaient plus performantes. Je ne regrette pas de m'être penché sur Driver Booster 
            </p>
            <cite>Jean-Pierre FILLION</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

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
        <dd>*À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement facturé de 24,99€. Ce rabais de 70% par rapport au prix original de 74,85€ est un bonus réservé uniquement aux précommandes !</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Plus que
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        dispos, dépêchez-vous !
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> utilisateurs sont sur cette page</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong>0<small>€</small></strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-db7preorder&ref=fr_db7preorderexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-fr');">
         VITE, J’EN PROFITE
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->
  <script>
    refStr='<?php echo $refStr;?>';
    $('.foryou .screen p b').eq(0).html('<?php echo paramDeal($paramData->UpdDrv);?>').end()
        .eq(1).html('<?php echo paramDeal($paramData->FixedErr);?>').end()
        .eq(2).html('<?php echo paramDeal($paramData->UpdCmp);?>').end()
        .eq(3).html('<?php echo paramDeal($paramData->UpdRdy);?>');
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>