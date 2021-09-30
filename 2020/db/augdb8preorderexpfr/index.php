<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdbexp_p' . $date;
  $c_name_t = 'frdbexp_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = rand(78, 98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24 * 2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
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

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$udate = empty($_GET['udata']) ? '' : $_GET['udata'];
$date_arr = json_decode(base64_decode(urldecode($udate)),true);
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
        <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png') ?>" /> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="Driver Booster PRO" />
        </div>
        <div class="right">
          <p>LA PRÉVENTE c’est maintenant</p>
          <h2>Renouvelez votre version PRO pour 0€</h2>
          <h4>Pour récupérer toutes les fonctionnalités</h4>
          <div class="price">
            <span>Prix de <br> prévente:</span>
            <strong>0€ <sup>*</sup></strong>
            <a href="https://www.iobit.com/buy.php?product=fr-db8preorder&ref=fr_db8preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-fr');" class="buybtn">Vite, J’en Profite</a>
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
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Driver Booster PRO vous a déjà beaucoup apporté : </h2>
      </div>
      <div class="line"></div>
      <ul class="message-box">
        <li data-name='default'>Mise à jour de <strong class="updated"><?php echo empty($date_arr['UpdDrv'])? '': $date_arr['UpdDrv']; ?></strong> pilotes importants</li>
        <li data-name='default'>Correction de <strong class="fixed"><?php echo empty($date_arr['FixedErr'])? '': $date_arr['FixedErr']; ?></strong> problèmes de code d'erreur courants </li>
        <li data-name='default'>Mise à jour de <strong class="game"><?php $UpdSum = $date_arr['UpdCmp'] + $date_arr['UpdRdy'];echo empty($UpdSum)? '': $UpdSum; ?></strong> composants et pilotes de jeu essentiels </li>
      </ul>
      <div class="img-box">
        <span class="computer two" data-name='default'></span>
        <img src="<?php echo getStaticUrl('images/feature-02-icon.png') ?>" alt="" class="icon three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon02.png') ?>" alt="" class="icon01 three" data-name='default'>
        <img src="<?php echo getStaticUrl('images/feature-02-icon03.png') ?>" alt="" class="icon02 three" data-name='default'>

      </div>
    </div>
    <div class="message01 wrapper">
      <div class="title">
        <h2>Vous profiterez beaucoup plus </h2>
        <h4>avec le dernier Driver Booster 8 PRO</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png') ?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png') ?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png') ?>" alt="" class="icon02">
        </li>
        <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png') ?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt><i></i>Base de données plus grande<span><em>50%↑</em></span></dt>
          <dd>
            Prend en charge plus de 4 500 000 pilotes. Détectez et mettez à jour en priorité tous les pilotes obsolètes et plus * récents et rares.
              <?php if(!empty($_GET['more'])) :?>
                  <p>* <strong><?php echo $_GET['more']; ?></strong> mises à jour trouvées maintenant</p>
              <?php endif;?>
          </dd>
        </dl>
        <dl>
          <dt><i></i>Mise à jour hors-ligne<span class="market"><em>Nouveau</em></span></dt>
          <dd>Installez vos pilotes réseaux sans connexion à Internet. En particulier pour le système réinstallé ou mis à niveau.</dd>
        </dl>
        <dl>
          <dt><i></i>Stabilité VS Nouveauté <span><em>Exclusif à Driver Booster</em></span></dt>
          <dd>Mettez à jour les pilotes en fonction de la stabilité en premier ou le plus récent en premier, conçus pour répondre à différents besoins.</dd>
        </dl>
        <dl>
          <dt><i></i>Mise à jour sûre <span class="market"><em>Amélioré</em></span></dt>
          <dd>La sauvegarde de pilote entièrement optimisée garantit un taux de réussite plus élevé de la sauvegarde et de la restauration de pilotes dans Windows 10.</dd>
        </dl>
      </div>
    </div>

    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <div class="title">
          <h2>Sans Driver Booster PRO,</h2>
          <h4>Avec les Problèmes ci-dessous :</h4>
        </div>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png') ?>" alt=""></dt>
          <dd>
            <p>Base de données se <br> réduit à 3 000 000</p>
          </dd>
        </dl>
        <dl class="two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png') ?>" alt=""></dt>
          <dd>
            <p>Mises à jour et sauvegardes automatiques indisponibles</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png') ?>" alt=""></dt>
          <dd>
            <p>Mise à jour de<br/> composants de jeu<br/> indisponible</p>
          </dd>
        </dl>
        <dl class="four last" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons04.png') ?>" alt=""></dt>
          <dd>
            <p>Accélération de <br/>téléchargement<br/> indisponible</p>
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
      <h2>Récompenses Mondiales</h2>
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
        <dd> * Si vous n'êtes pas satisfait, vous pouvez annuler la commande que vous avez passée dans les 30 jours sans payer de frais.
        </dd>
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
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-db8preorder&ref=fr_db8preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderexp-fr');">
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