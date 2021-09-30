<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdboffice_p' . $date;
  $c_name_t='frdboffice_t' . $date;
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
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
                <b class="nwrap"><b class="numlist">0</b></b>
              </span>
              disponibles
            </h3>
            <p><span class="buyNum"><?php echo $viewNum; ?></span> utilisateurs sont sur cette page</p>
          </div>
          <ul class="price clearfix">
            <li class="first"><strong>0<small>€</small></strong></li>
            <li class="last">
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=fr-db7preorder&ref=fr_db7preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderofficial-fr');">
                 VITE, J’EN PROFITE
              </a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- function-wrap start -->
  <div class="function-wrap">
    <div class="wrapper">
      <h2 class="why">
        C’est le meilleur logiciel de mise<br> à jour de pilotes pour vous <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
      </h2>
      <div class="db-message">
        <h2>Processus intelligent de mise à jour pour garder plus de <span>3 500 000</span> pilotes à jour</h2>
        <div class="screenshot">
          <img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
          <div class="maglist one">
            <h3>Mise à jour <big>Automatique</big> des pilotes</h3>
            <span class="tag">Exclusive PRO</span>
            <p>Vérifie automatiquement l'état de vos pilotes selon un planning et les met à jour automatiquement lorsque votre système est inactif.</p>
          </div>
          <div class="maglist two">
            <h3>Mise à jour <big>Rapide</big> des pilotes</h3>
            <span class="tag">Exclusive PRO</span>
            <p>
              Débloque la limite de vitesse de la mise à jour des pilotes pour gagner beaucoup de temps et préserver votre période de travail.
            </p>
          </div>
          <div class="maglist three">
            <h3>Mise à jour <big>Sécurisée</big> des pilotes</h3>
            <span class="tag">Exclusive PRO</span>
            <p>
             Crée un point de restauration du système et sauvegarde les pilotes précédents avant la mise à jour afin de garantir une mise à jour sûre et d'éviter tout imprévu.
            </p>
          </div>
        </div>
      </div>
      <div class="db-feature">
        <h2>Il ne se limite pas à la mise à jour de pilotes</h2>
        <div class="featlist one">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
            <h3>Améliore les<br> performances du jeu</h3>
            <span class="tag">Exclusive PRO</span>
            <p>Garde les pilotes Game Ready mis à jour et propose les composants de jeu appropriés pour corriger le chargement lent du jeu et les mauvaises performances.</p>
          </div>
        </div>
        <div class="featlist two">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
            <h3>Résout les problèmes matériels</h3>
            <span class="tag">Exclusive PRO</span>
            <p>Détecte et répare, en un clic, les erreurs de périphérique « Windows ne peut pas identifier un périphérique », « Ce périphérique est désactivé » ou « Ce périphérique ne peut pas fonctionner » etc.</p>
          </div>
        </div>
        <div class="featlist three">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
            <h3>Ne pas être dérangé </h3>
            <span class="tag red">Nouveau</span>
            <p>Faire taire automatiquement toutes les notifications de Driver Booster lorsqu’une tâche en plein écran ou un programme spécifique est en cours d’exécution.</p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- function-wrap end -->

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
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
          <b class="nwrap"><b class="numlist">0</b></b>
        </span>
        dispos, dépêchez-vous !
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> utilisateurs sont sur cette page</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong>0<small>€</small></strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-db7preorder&ref=fr_db7preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderofficial-fr');">
         VITE, J’EN PROFITE
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>