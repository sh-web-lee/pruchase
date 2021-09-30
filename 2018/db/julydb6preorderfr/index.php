<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'endbpre' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 63;
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
    }
  }
  setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['to'])?'':('-'.$_GET['to']));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>N'hésitez pas à profiter de Driver Booster 6 PRO aujourd'hui pour 0€ !</title>
    <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
    <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800' rel='stylesheet'>
    <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public'];?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <div class="title clearfix">
      <!-- logo -->
      <a class="logo fl" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- head -->
      <h1 class="head fr">PRET A REJOINDRE NOTRE PREVENTE MONDIALE?</h1>
    </div>
    
    <!-- db-off -->
    <div class="db-off fr">
      <!-- only -->
      <h3 class="only">
        Driver Booster 6 PRO à
        <big>Seulement<span></span></big>
      </h3>
      <img class="free" src="<?php echo getStaticUrl('images/money.png')?>" alt="">
      <!-- progressbar -->
      <div class="progressbar">
        <p class="viewNum">Vite! <strong class="gift">53</strong> places restantes!</p>
        <div class="bar">
          <span></span>
        </div>
      </div>
      <!-- price -->
      <p class="price"><strong>0€</strong> prix original: <del>74,85€</del></p>
      <!-- buybtn -->
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-db6preorder&ref=fr_db6preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6preorder-fr');">
        <span>J’EN PROFITE VITE</span>
      </a>
      <!-- attention -->
      <p class="attention">1 an d’abonnement / 3 PC</p>
    </div>
    <div class="clear"></div>
    <!-- distance -->
    <ul class="distance">
      <li>Payez 0€ pour profiter de Driver Booster 6 PRO <br>(3 PC) pendant 30 jours.</li>
      <li class="center">Après 30 jours, bénéficiez d'une réduction de 70% <br>sur Driver Booster 6 PRO (1 an / 3 PC)</li>
      <li>Vous ne serez pas débité pendant la période d’essai de 30 <br>jours, vous pouvez annuler la commande à tout moment.</li>
    </ul>
  </div>
</div>
<!-- banner end -->
<!-- feature-db start -->
<div class="feature-db">
  <div class="wrapper">
    <h2 class="head">Pourquoi proposer Driver Booster 6 RPO ?</h2>
    <h3 class="subhead">Améliore significativement les performances de votre PC</h3>
    <div class="container">
      <img class="db-box" src="<?php echo $pResUrl;?>images/db-box.png" alt="">
      <!-- update 3000000+ drivers -->
      <dl class="update clearfix">
        <dt class="fr">
          <img src="<?php echo $pResUrl;?>images/db-update-drivers.png" alt="">
        </dt>
        <dd class="fl">
          <h3>Met à jour 3 000 000+ pilotes<br><span>amélioré</span></h3>
          <p>
            Identifiez et mettez à jour rapidement plus de 3 000 000 pilotes défectueux, manquants ou rares pour tous vos périphériques.
          </p>
        </dd>
      </dl>
      <!-- quickly fix device errors -->
      <dl class="quickly clearfix">
        <dt class="fl">
          <img src="<?php echo $pResUrl;?>images/db-quickly-device.png" alt="">
        </dt>
        <dd class="fr">
          <h3>Répare les erreurs de périphérique <span>amélioré</span></h3>
          <p>
            Résolvez rapidement les erreurs de périphérique en 1 clic pour éviter d'affecter les performances du PC.
          </p>
        </dd>
      </dl>
      <!-- auto update -->
      <dl class="auto clearfix">
        <dt class="fl">
          <img src="<?php echo $pResUrl;?>images/db-auto-update.png" alt="">
        </dt>
        <dd class="fr">
          <h3>Mise à jour automatique <span>amélioré</span></h3>
          <p>
            Vous pouvez garder les pilotes du PC à jour sans vérifier quotidiennement l'état des pilotes.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature-db end -->
<!-- feature-exp start -->
<div class="feature-sf">
  <div class="sf-box"></div>
  <div class="wrapper">
    <h3 class="subhead">Une expérience de jeu plus fluide et plus rapide</h3>
    <dl class="details clearfix">
      <dt class="fl">
        <img src="<?php echo $pResUrl;?>images/major-game-components.png" alt="">
      </dt>
      <dd class="fr">
        <h3>Composants de jeu populaires</h3>
        <p>
          Téléchargez et installez rapidement les composants mis à jour et appropriés pour assurer une expérience de jeu fluide sur votre PC.
        </p>
      </dd>
    </dl>
    <dl class="two clearfix">
      <dt class="fl">
        <img src="<?php echo $pResUrl;?>images/game-ready-drivers.png" alt="">
      </dt>
      <dd class="fr">
        <h3>Game Ready driver <span>NOUVEAU</span></h3>
        <p>
          Obtenez immédiatement les pilotes de vos jeux favoris dès leur sortie pour améliorer les performances, corriger les bugs et améliorer l'expérience de jeu.
        </p>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt class="fl">
        <img src="<?php echo $pResUrl;?>images/boots-game-performance.png" alt="">
      </dt>
      <dd class="fr">
        <h3>Augmente les performances du jeu <span>NOUVEAU</span></h3>
        <p>
          Arrêtez tous les processus inutiles en 1 clic afin de libérer de la RAM et augmenter considérablement les performances du jeu.
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- feature-exp end -->
<div class="contrast">
  <div class="wrapper">
    <h2>Attention! Comment fonctionne Driver Booster ?</h2>
    <table border="0" cellpadding="0" cellspacing="0">
      <thead>
        <tr>
          <th class="itema"></th>
          <th class="itemb">Étape 1</th>
          <th class="itemc">Étape 2</th>
          <th class="itemc">Étape 3</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">Free :</td>
          <td class="itemb">Vérifie l’état des pilotes <br><span>2 000 000+ pilotes</span></td>
          <td class="itemc">Télécharge les pilotes manuellement <br><span>Pas d’accélération</span></td>
          <td class="itemc">Installe les pilotes manuellement <br><span>Impossible de sauvegarder</span></td>
        </tr>
        <tr>
          <td class="itema space"></td>
          <td class="itemb space"></td>
          <td class="itemc space"></td>
          <td class="itemc space"></td>
        </tr>
        <tr class="probox">
          <td class="itema">PRO : </td>
          <td class="itemb pro">Vérifie l’état des pilotes <span class="size">automatiquement</span> <span>3 000 000+ pilotes</span></td>
          <td class="itemc pro">Télécharge les pilotes <span class="size">automatiquement</span> <span>200% plus rapide</span></td>
          <td class="itemc pro">Installe les pilotes <span class="size">automatiquement</span> <span>Sauvegarde les pilotes</span></td>
        </tr>
      </tbody>
    </table>
  </div>
</div> 
<!-- between-buy start -->
<div class="between-buy">
  <div class="wrapper">
    <h3>
      Obtenez de meilleures performances pour votre PC et vos jeux pour
      <img src="<?php echo $pResUrl;?>images/money.png">
    </h3>
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-db6preorder&ref=fr_db6preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6preorder-fr');" target="_blank">
      <span>J’EN PROFITE VITE</span>
    </a>
    <p class="viewNum">Seulement <strong class="gift">56</strong> places restantes</p>
  </div>
</div>
<!-- between-buy end -->
<!-- comparision start -->
<div class="comparision">
  <div class="comparision-content">
    <div class="wrapper">
      <h3>Ce que vous gagnerez en passant à la version PRO</h3>
      <table>
        <thead>
          <tr>
            <th class="itema">Driver Booster 6 Free</th>
            <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>" alt=""/></th>
            <th class="itemc">Driver Booster 6 PRO</th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="itema">2 000 000+</td>
            <td class="itemb">Base de données des pilotes</td>
            <td class="itemc">3 000 000+</td>
          </tr>
          <tr>
            <td class="itema">Non disponible</td>
            <td class="itemb">Téléchargement rapide des pilotes</td>
            <td class="itemc">200% plus rapide</td>
          </tr>
          <tr>
            <td class="itema">Non disponible</td>
            <td class="itemb">Game Ready Driver</td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="free"></i></td>
            <td class="itemb">Composants de jeu</td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="free"></i></td>
            <td class="itemb">Mise à jour automatique du pilote</td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
          <tr>
            <td class="itema"><i class="free"></i></td>
            <td class="itemb">Sauvegarde du pilote</td>
            <td class="itemc"><i class="pro"></i></td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>
</div>
<!-- comparision end -->
<!-- review start -->
<div class="review">
  <div class="wrapper">
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
            <p>
              « IObit développe de nombeux utilitaires, et Driver Booster PRO, qui met automatiquement à jour vos pilotes, est l’un de ses meilleurs utilitaires. Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. L’interface utilisateur personnalisée affiche des informations matérielles spécifiques. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un. »
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>
              « Avec Driver Booster,  je peux facilement trouver les pilotes obsolètes et les mettre à jour avec simplicité. En outre, il m’aide à corriger l’erreur sonore, l’erreur réseau, l’erreur de périphérique etc. Je n’y croyais pas avant de l’utiliser, mais après l’avoir essayé je l’ai aimé parce que mon PC est plus rapide et plus stable que je ne le pensais... Merci à IObit. »
            </p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>
              « Driver Booster est une application sensationnelle. Si vous êtes comme moi et que vous avez de nombreuses applications et périphériques ou pilotes et que vous n’avez pas le temps de les mettre à jour manuellement, je recommande vivement Driver Booster, il vous aide rapidement et facilement à mettre à jour les pilotes. »
            </p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>
              « Ceci est l'un des meilleurs programmes de mise à jour du pilote. Microsoft m'a même suggéré des mises à jour qui n’étaient pas compatible pas avec ma machine. Ce programme savait quelles mises à jour je devais installer sans problème. Il fonctionne parfaitement. Facile à utiliser, informatif et intuitif. Driver Booster restera dans ma boîte à outils pour toujours ... Bon boulot ! »
            </p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->
<!-- awards start -->
<div class="awards">
    <div class="wrapper">
      <h3>Approuvé par ces célèbres médias à travers le monde</h3>
      <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
    </div>
</div>
<!-- award end -->
<!-- footer start -->
<div class="footer">
    <div class="wrapper">
        <div class="footer-servizio clearfix">
            <dl class="money_back fl">
                <dd>
                    <img src="<?php echo getStaticUrl('images/money_back.png')?>" alt="">
                </dd>
                <dt>
                    <h3>Garantie de remboursement</h3>
                    <p>Nous vous rembourserons immédiatement, si vous n'êtes pas satisfait dans les 60 jours suivant de votre achat.</p>
                </dt>
            </dl>
            <dl class="veloce fl">
                <dd>
                    <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
                </dd>
                <dt>
                    <h3>Paiement 100% Sécurisé</h3>
                    <p>IObit vous propose huit modes de <br>paiement sécurisés pour <br>régler vos achats.</p>
                </dt>
            </dl>
            <dl class="verified fr">
                <dd>
                    <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
                </dd>
                <dt>
                    <h3>Obtenir la licence</h3>
                    <p>Vous recevrez le code de licence <br>dans les minutes après l’achat.</p>
                </dt>
            </dl>
        </div>
        <p class="note">
          Notification:<br>
          *À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement facturé de 24,99€. Ce rabais de 70% par rapport au prix original <br>de 74,85€ est un bonus réservé uniquement aux précommandes! <br>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs.
        </p>
        <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
</div>
<!-- footer end -->
<!-- float start -->
<div class="floatlayer">
    <div class="wrapper clearfix">
      <!-- progressbar -->
      <div class="progressbar fl">
        <p class="viewNum">Vite! Seulement <strong class="gift">56</strong> places restantes </p>
        <div class="bar">
          <span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn fr" href="https://www.iobit.com/buy.php?product=fr-db6preorder&ref=fr_db6preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6preorder-fr');">
        <span>J’EN PROFITE VITE</span>
      </a>
    </div>
</div> 
<!-- float end -->

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  $(function() {    
    $('#dg-container').gallery();     
  });
</script>
</body>
</html>