<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdb8preorderofficial_p' . $date;
  $c_name_t = 'frdb8preorderofficial_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = rand(64, 98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    }
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}

$viewNum = rand(99, 156);
if ($_GET['action'] == 'getViewNum') {
  echo $viewNum;
  exit();
}
include $pRootUrl . 'include/common.inc.php';

function paramDeal($num)
{
  return (intval($num) > 0) ? ('<span class="dataNum">' . number_format(intval($num)) . '</span>') : '';
}

$paramData = json_decode(base64_decode($_GET['udata']));

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <title>Profitez de nouveau Driver Booster 8 PRO pour 0€ - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/en/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png') ?>" /> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="Driver Booster PRO" />
        </div>
        <div class="right">
          <p class="_title_p">LA PRÉVENTE c’est maintenant </p>
          <h2 class="_title_h2">Leader des logiciels de mise à jour des pilotes</h2>
          <h4 class="_title_h4">Vous offre un PC plus fluides et des jeux plus rapides</h4>
          <div class="price">
            <span>Prix de<br> prévente:</span>
            <strong>0€ <sup>*</sup></strong>
            <a href="https://www.iobit.com/buy.php?product=fr-db8preorder&ref=fr_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-fr');" class="buybtn">Vite, J’en Profite</a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              restants
            </h3>
            <div class="bar">
              <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="feature">
    <div class="message01 wrapper">
      <div class="title">
        <h2>Plus de 4 500 000 Pilotes</h2>
        <h4>La plus grande base de données pour Driver Booster</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png') ?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png') ?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png') ?>" alt="" class="icon02">
        </li>
        <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png') ?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt><i></i>Mise à jour automatique des pilotes <span>WHQL</span></dt>
          <dd>Trouve et met à jour automatiquement les pilotes correspondant au mieux à votre PC tout en étant certifié WHQL.</dd>
        </dl>
        <dl>
          <dt><i></i>Stabilité VS Nouveauté <span class="market">Exclusif à Driver Booster</span></dt>
          <dd>Driver Booster favorise la compatibilité des pilotes avec votre PC ou si vous le souhaitez, l’installation des toutes dernières versions des pilotes. Vous pouvez ainsi choisir entre stabilité optimale ou l’accès aux toutes dernières fonctionnalités.</dd>
        </dl>
        <dl>
          <dt><i></i>Corrigez les problèmes de Hardware </dt>
          <dd>Une solution en 1 clic pour résoudre tous les problèmes de qualité de vidéo, de son, de perte de connection Internet et des périphériques non reconnu.</dd>
        </dl>
        <dl>
          <dt><i></i>Mise à jour Hors-ligne </dt>
          <dd>Installez vos pilotes réseaux sans connexion à Internet. Téléchargez-le sur un PC et transférez-le sur un autre PC.</dd>
        </dl>
      </div>
    </div>
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Pilotes et composants de jeux Game Ready</h2>
        <h4>Optimisation pour 90% des Jeux PC</h4>
      </div>
      <div class="line"></div>
      <dl class="message-box">
        <dt class="one" data-name='default'>Jeux fluides </dt>
        <dd class="one" data-name='default'>Obtenez les derniers pilotes et composants de jeux Game Ready et réduisez les lags, les erreurs d’affichage et supportez les nouvelles fonctionnalités de jeux.</dd>
        <dt class="two" data-name='default'>Jeux boostés</dt>
        <dd class="two" data-name='default'>Terminez les tâches de fonds inutiles et améliorez la vitesse de votre PC pour une expérience de jeux optimale.</dd>
      </dl>
      <div class="img-box">
        <img src="<?php echo getStaticUrl('images/computer.png') ?>" alt="" class="computer three" data-name='default'>
        <span class="light four" data-name='default'></span>
        <span class="smail-light"></span>
        <img src="<?php echo getStaticUrl('images/feature-icon.png') ?>" alt="" class="icon five" data-name='default'>
      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Profitez Aussi De Ces Fonctionnalités Supplémentaires</h2>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png') ?>" alt=""></dt>
          <dd>
            <h3>Mise à jour sûre</h3>
            <p>Back up automatique et <br /> création d’un point de<br /> restauration système.</p>
          </dd>
        </dl>
        <dl class="center two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png') ?>" alt=""></dt>
          <dd>
            <h3>Mode Silencieux</h3>
            <p>Supprimez automatiquement <br /> les notifications qui peuvent <br /> vous déranger.</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png') ?>" alt=""></dt>
          <dd>
            <h3>Suppression automatique</h3>
            <p>Supprime<br /> automatiquement les packs<br /> d’installation des pilotes.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>Le meilleur logiciel de mise à jour de pilotes</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          téléchargements
        </li>
        <li class="center" data-name='default'>
          <strong>4.7+ </strong>
          Note utilisateurs
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          Recommandations des Médias
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Commentaires</dt>
              <dd>Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un.</dd>
            </dl>
              <dt>Commentaires</dt>
              <dd>Driver Booster PRO m'a permis de rafraîchir et optimise mes ordinateurs qui fonctionnent beaucoup mieux malgré leur âge avancé . Avec les mises à jour régulières il demeurent plus efficaces et plus fluides!</dd>
            </dl>
            <dl>
              <dt>Commentaires</dt>
              <dd>Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède une interface utilisateur conviviale et facile à utiliser. 5 ETOILES bien mérités !!! </dd>
            </dl>
            <dl>
              <dt>Commentaires</dt>
              <dd>J'ai été fortement impressionné de voir tout ce que peut faire Driver Booster PRO ! J'en avais tellement besoin pour résoudre une partie de mes logiciels dont les drivers étaient périmés et bons à mettre à jour. Je ne regrette pas de m'être penché sur Driver Booster.</dd>
            </dl>


          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png') ?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png') ?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png') ?>" alt="Hishaam Salasa"></div>
            <p>Christian Cappelle</p>
          </li>
          <li>
            <div><img src="<?php echo getStaticUrl('images/harold-barr.png') ?>" alt="Jean-Pierre FILLION"></div>
            <p>Jean-Pierre FILLION</p>
          </li>

        </ul>

      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Récompenses Mondiale</h2>
      <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
    </div>
    <!-- awards end -->
  </div>

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <dl>
        <dt>A Noter:</dt>
        <dd>
        *À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement débité de 24,99€. Cette réduction de 65% par rapport au prix initial de 74,85€ est un bonus uniquement pour les préventes!
        </dd>
        <dd>* Si vous n'êtes pas satisfait, vous pouvez annuler la commande que vous avez passée dans les 30 jours sans payer de frais. </dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y') ?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- float start -->
  <div class="floatlayer clearfix">
    <div class="wrapper clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/fl-db-box.png') ?>" alt="Driver Booster PRO" />
      </div>
      <div class="numbox fl">
        <h3>
          <span id="botNum" class="giftNum">
            <b class="nwrap"><b class="numlist"></b></b>
            <b class="nwrap"><b class="numlist"></b></b>
          </span>
          des 1000 offres restantes
        </h3>
      </div>
      <div class="price fr">
        <strong>0€ <sup>*</sup></strong>
        <span></span>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-db8preorder&ref=fr_db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-fr');">
        Vite, J’en Profite
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->

  <script>
    refStr = '<?php echo $refStr; ?>';
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>