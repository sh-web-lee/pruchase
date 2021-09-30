<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdb8preorderpre_p' . $date;
  $c_name_t = 'frdb8preorderpre_t' . $date;
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

$refStr = empty($_GET['to']) ? '' : ('-' . $_GET['to']);
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
$refStr .= empty($_GET['instd']) ? '' : ('-' . $_GET['instd']);
$refStr .= empty($_GET['finstd']) ? '' : ('-' . $_GET['finstd']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-' . $_GET['st']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Profitez de nouveau Driver Booster 8 PRO pour 0€ - IObit </title>
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
          <p class="_title_p">La prévente c’est maintenant</p>
          <h2 class="_title_h2">Mettez à niveau vers La dernière version PRO</h2>
          <h4 class="_title_h4">pour optimiser les performances de vos jeux</h4>
          <div class="price">
            <span>Prix de<br> prévente:</span>
            <strong>0€ <sup>*</sup></strong>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=fr-db8preorder&ref=fr_db8preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_db" 
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorder-fr');" >
              Vite, J’en Profite
            </a>
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
        <h4><big>Meilleur</big> Driver Booster 8 PRO est</h4>
        <h2>disponible</h2>
      </div>
      <div class="line"></div>
      <div class="message-box">
        <ul class="img-box">
          <li class="icon01">
            <img src="<?php echo getStaticUrl('images/feature-04-01.png') ?>" alt="" >
          </li>
          <li class="icon02">
            <img src="<?php echo getStaticUrl('images/feature-03-01.png') ?>" alt="">
          </li>
        </ul>
        <dl class='one'>
          <dt>
            <i></i> Base de données <em>plus grande</em>
            <span class='soportes red_soportes'>50% <img src="<?php echo getStaticUrl('images/subir.png') ?>" alt=""></span>
          </dt>
          <dd>
            Prend en charge plus de 4 500 000 pilotes et fournit des mises à jour parfaitement adaptées pour tous les pilotes obsolètes, incompatibles ou manquants.
          </dd>
        </dl>
        <dl class='two'>
          <dt>
            <i></i><em>plus intelligent</em>
            <span class='soportes green_soportes'>Nouveau</span>
          </dt>
          <dd>
            Vous pouvez choisir entre les pilotes les plus stable pour la stabilité optimale ou les derniers pilotes adaptés pour accéder aux nouvelles fonctionnalités.
            <br/>
            <div class='market'>Exclusif à Driver Booster</div>
          </dd>
        </dl>
        <dl class='three'>
          <dt>
            <i></i> Mise à jour <em>hors-ligne</em>
            <span class='soportes green_soportes'>Nouveau</span>
          </dt>
          <dd>
            Installez vos pilotes réseaux sans connexion à Internet. En particulier pour le système réinstallé ou mis à niveau.
          </dd>
        </dl>
        <dl class='four'>
          <dt>
            <i></i> Mise à jour <em>sûre</em>
            <span class='soportes red_soportes'>Amélioré</span></dt>
          <dd>
            La sauvegarde de pilote entièrement optimisée garantit un taux de réussite plus élevé de la sauvegarde et de la restauration de pilotes dans Windows 10.
          </dd>
        </dl>
      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Profiterez de tous les avantages PRO</h2>
        <div class='current_Version'>
          Your Current Version
        </div>
        <div class='driver_Booster'>

          <p>
            Driver Booster 8<br /> PRO<br />
            <span class='soportes green_soportes'>Nouveau</span>
          </p>
        </div>
        <ul class='benefits-ul'>
          <li>
            <i class='_icon'></i>
            <span>Scannez automatiquement les pilotes manquants et obsolètes</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Mettez à jour les pilotes obsolètes en un clic</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Plus grande base de données avec plus de 4 500 000 pilotes</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Installez les pilotes réseaux sans connexion à Internet</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
          <li class="two">
            <i class='_icon'></i>
            <span>Mettez à jour automatiquement les pilotes lorsque le<br> système est inactif</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Accélérez la vitesse de la mise à jour des pilotes</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li class="two">
            <i class='_icon'></i>
            <span>Sauvegardez automatiquement vos pilotes et créez un point<br> de restauration </span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li class="two">
            <i class='_icon'></i>
            <span>Corrigez facilement les erreurs de périphérique pour<br> de meilleures performances</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">
            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Mettez à jour en priorité les pilotes axés sur la stabilité</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Composants nécessaires pour des jeux plus fluides</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
          <li>
            <i class='_icon'></i>
            <span>Mettez à jour en priorité les derniers pilotes de game ready</span>
            <div class='_booster'>
              <img src="<?php echo getStaticUrl('images/true.png') ?>" alt="">
            </div>
            <div class='_version'>
              <img src="<?php echo getStaticUrl('images/false.png') ?>" alt="">

            </div>
          </li>
        </ul>

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
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=fr-db8preorder&ref=fr_db8preorder<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_db" 
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorder-fr');" >
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