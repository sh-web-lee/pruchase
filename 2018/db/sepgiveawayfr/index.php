<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$driversCount=empty($_GET['uc'])?0:intval($_GET['uc']);
$updateAuto=($_GET['adu']==1)?1:0;

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>

<!DOCTYPE html>
  <html lang="fr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <title>Retrouvez Driver Booster 7 PRO en profitant de 85% de réduction – IObit </title>
    <meta name="Copyright" content="IObit">
    <meta name="Description" content="">
    <meta name="Keywords" content="">
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
    <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>

  </head>
  <body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <!-- logo -->
      <a class="logo" href="http://www.iobit.com" target="_blank">IObit</a>
      <!-- title -->
      <h1>Retrouver le nouveau Driver Booster 8 PRO</h1>
      <!-- subtitle -->
      <h2>Logiciel de mise à jour de pilote n ° 1 pour PC - Mettez à jour des pilotes facilement, en toute sécurité et rapidement</h2>
      <!-- db-box -->
      <img class="db-box fl" src="<?php echo $pResUrl;?>images/db-box.png" alt="">
      <!-- db-message -->
      <div class="db-message fr">
        <!-- db-off -->
        <img class="db-off" src="<?php echo $pResUrl;?>images/db-off.png" alt="">
        <!-- db-line -->
        <p class="db-des">Exclusive pour les utilisateurs de Giveaway</p>
        <!-- price -->
        <p class="price">
          <span><b>9</b>,99€</span>  <del>74,85 €</del>
          <i></i>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-db83pc999&ref=fr_2018sepgiveaway<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-fr');">
          J’EN PROFITE
        </a>
        <!-- attention -->
        <p class="attention">1 an d’abonnement / <strong>3 PC</strong></p>
        <!-- money-back -->
        <img class="money-back" src="<?php echo $pResUrl;?>images/money-back.png" alt="">
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- feature-part1 start -->
  <div class="feature-part1">
    <div class="wrapper">
      <!-- arrow -->
      <img class="arrow" src="<?php echo $pResUrl;?>images/feature-arrow.png" alt="">
      <!-- title -->
      <h2 class="fr">
        <span class="top">Depuis que vous l’utilisez,</span>
        <span class="bottom">Driver Booster Pro a</span>
      </h2>
      <!-- details -->
      <ul class="details fr">
        <!-- updated -->
        <li class="updated">
          <?php if($driversCount!=0):?>
          <strong>Mis à jour </strong>
          <span class="numbers clearfix">
              <i class="">0123456789</i>
              <i class="">0123456789</i>
              <i class="">0123456789</i>
          </span>
            pilotes et composants de jeu, et vous avez assuré <br>
            des <b>performances PC stables et une expérience de jeu fluide;</b>
          <?php else:?>
            Vous fourni des performances PC stables et une expérience de jeu fluide
          <?php endif;?>
        </li>
        <!-- saved -->
        <li class="saved">
          <?php if($updateAuto==1):?>
            <strong>Economisé </strong> au moins
            <span class="letters clearfix">
              <i class="let1">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let2">b c d e f g h i j k l m a n o p q r s t u v w x y z</i>
              <i class="let3">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let4">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let5">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let6">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let7">a b c d e f g h i j k l m n o p q r s t u v w x y z</i>
              <i class="let8">a b c d é f g h i j k l m n o p q r s t u v w x y z</i>
            </span>
            <b>de votre temps</b> avec la<br>
            mise à jour automatique;
          <?php endif;?>
        </li>
        <!-- reduced -->
        <li class="reduced">
          <b class="red">Réduit</b> <b>les pannes de votre système </b>grâce à la technologie de <br>
          <b>sauvegarde et de récupération automatique des pilotes.</b>
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part1 end -->
  <!-- feature-part2 start -->
  <div class="feature-part2">
    <div class="wrapper">
      <!-- content -->
      <p>
        Au cours des six dernières années, Driver Booster Pro a mis à jour <strong>12 700 000</strong> pilotes pour <br>
        <strong>1 500 000</strong> utilisateurs, ce qui rend leur PC plus rapide de <strong>200%</strong> en moyenne *, en maintenant les <br>
        pilotes toujours à jour et en améliorant la stabilité et les performances du PC.
      </p>
    </div>
  </div>
  <!-- feature-part2 end -->
  <!-- feature-part3 start -->
  <div class="feature-part3 wrapper">
    <!-- title -->
    <h2>Si vous manquez le nouveau Pro, vous risquez les problèmes suivants:</h2>
    <!-- content for progress -->
    <div class="content clearfix">
      <!-- Worse PC Performance -->
      <dl class="performance fl">
        <dt>Mauvaises Performances PC</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>15% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Unstable & Stuck Gaming Experience -->
      <dl class="experience fl">
        <dt>Expérience de jeu instable et saccadée</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>35% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Time-consuming Driver Update -->
      <dl class="update fr">
        <dt>Mises à jour de drivers chronophages </dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>2 fois plus </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <!-- notes -->
    <p>*Nous avons testé Driver Booster 7 PRO dans notre laboratoire de test. Vos résultats peuvent varier.</p>
  </div>
  <!-- feature-part3 end -->
  <hr>
  <!-- feature-part4 start -->
  <div class="feature-part4">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
        Nous vous recommandons vivement de profiter de Driver Booster 7 Pro<br>
        pour garder tous les pilotes toujours à jour.
      </h2>
      <!-- left-message -->
      <ul class="left-message fl">
        <li class="padding-right25">
          Une base de données de plus de<br>
          <strong>3 500 000 pilotes</strong> pour garder à <br>
          jour tous les pilotes de votre PC
        </li>
        <li class="padding-right55">
          Met à jour les pilotes <strong>automatiquement</strong>
          lorsque l'ordinateur est moins occupé
        </li>
        <li>
          <strong>Corrige</strong> toutes <strong>les erreurs</strong> de <br>
          périphérique de votre ordinateu <strong>en 1 clic</strong>
        </li>
      </ul>
      <!-- right-message -->
      <ul class="right-message fr">
        <li class="padding-left45">
          Composants nécessaires<br>
          disponibles pour <strong>lancer vos jeux </strong><br>
          <strong>avec succès</strong>
        </li>
        <li class="padding-left5">
          Met à jour en priorité les pilotes Game<br>
          Ready pour <strong>une meilleure expérience </strong><br>
          <strong>de jeu</strong>
        </li>
        <li class="padding-left10">
          Arrête les processus inutiles <strong>en 1 clic </strong><br>
          pour un <strong>jeu plus rapide</strong>
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part4 end -->
  <!-- between-buy start -->
  <div class="between-buy wrapper">
    <!-- title -->
    <h2>De meilleures performances PC et une expérience de jeu plus fluide maintenant</h2>
    <!-- price -->
    <p class="price">
      <span><b>9</b>,99€</span>  <del>74,85 €</del>
      <i></i>
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=fr-db83pc999&ref=fr_2018sepgiveaway1<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
       onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-fr');">
      J’EN PROFITE
    </a>
    <!-- attention -->
    <p class="attention">1 an d’abonnement / <strong>3 PC</strong></p>
    <!-- money-back -->
    <img class="money-back" src="<?php echo $pResUrl;?>images/money-back.png" alt="">
  </div>
  <!-- between-buy end -->
  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <!-- title -->
      <h2>
        Pour comprendre clairement ce que vous manquez<br>
        avec la version gratuite
      </h2>
      <!-- table -->
      <table cellspacing="0" cellpadding="0" valign="middle" align="cnter">
        <thead>
        <tr>
          <th class="w320"></th>
          <th class="w530"></th>
          <th class="w350"></th>
          <th class="w50"></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td class="w320 grey">3 500 000+</td>
          <td class="w530">Base de données de pilotes</td>
          <td class="w350 red">4 500 000+</td>
          <td class="w50"></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="w320 grey">Vitesse normale</td>
          <td class="w530">Vitesse de téléchargement des pilotes</td>
          <td class="w350 red">200% plus rapide</td>
          <td class="w50"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="w320 grey">Non prioritaire</td>
          <td class="w530">Pilotes Game Ready</td>
          <td class="w350 red">En Priorité</td>
          <td class="w50"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Composant de jeux</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">MAJ automatique des pilotes</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Sauvegarde des pilotes</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td class="w320"></td>
          <td class="w530"></td>
          <td class="w350"></td>
          <td class="w50"></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->
  <!-- review start -->
  <div class="review wrapper">
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
              Driver Booster a aidé à résoudre les problèmes de lenteurs de mon ordinateur portable et éviter la plantage. Parfois, lorsque j’essayais de mettre à jour mes pilotes, l’ordinateur tombait en panne et je devais le formater pour restaurer les fonctions. Cela ne se produit plus avec DB8. Il télécharge des pilotes rapidement et facile à utiliser, c'est le meilleur outil sur le marché jusqu'à présent !
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
  <div class="awards wrapper">
    <!-- title -->
    <h2>Recommandé par ces médias</h2>
    <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
  </div>
  <!-- award end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="footer-servizio clearfix">
        <dl class="money_back fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/money_back.png" alt="">
          </dd>
          <dt>
            <h3>Satisfait ou Remboursé</h3>
            <p>Garantie satisfait ou remboursé pen-<br>dant 60 jours après la date d’achat.</p>
          </dt>
        </dl>
        <dl class="veloce fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
          </dd>
          <dt>
            <h3>Paiement 100% Sécurisé</h3>
            <p>IObit vous propose huit modes de paie-<br>ment sécurisé pour régler vos achats.</p>
          </dt>
        </dl>
        <dl class="verified fr">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
          </dd>
          <dt>
            <h3>Obtenir la licence</h3>
            <p>Vous recevrez le code de licence<br> dans les minutes après l’achat.</p>
          </dt>
        </dl>
      </div>
      <p class="note">
        Note:<br>
        * Les données peuvent varier en fonction de différents systèmes ou ordinateurs
      </p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- footer end -->
  <!-- float start -->
  <div class="float">
    <div class="wrapper clearfix">
      <dl class="fl">
        <dt>Offre exclusive</dt>
        <dd><strong>-85%</strong> pour se débarrasser des pannes système et des expériences de jeu instable </dd>
      </dl>
      <div class="float-message fr">
        <!-- price -->
        <p class="price">
          <span><b>9</b>,99€</span>  <del>74,85€</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-db83pc999&ref=fr_2018sepgiveaway2<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-fr');">
          J’EN PROFITE
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->


  <script>
    driversCount=<?php echo $driversCount;?>;
    autoUpdate=<?php echo $updateAuto;?>;
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  </body>
  </html>