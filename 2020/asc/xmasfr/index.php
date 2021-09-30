<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
$refStr = empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
$refStr .= empty($_GET['ver']) ? '' : ('-' . $_GET['ver']);
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
?>

<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -85% sur Advanced SystemCare PRO - vente flash de Noël - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
  <script type="text/javascript">
    var queryStr = <?php echo empty($_SERVER['QUERY_STRING']) ? '""' : ('"?' . $_SERVER['QUERY_STRING']) . '"'; ?>;
    var paramTo = MApp(2.2).url.getParameters('to');
  </script>
</head>

<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
      <!-- title -->
      <h1>VENTE FLASH DE NOËL</h1>
      <!-- subtitle -->
      <p>
        Jusqu'à -<b>85</b>% ! Achetez-en 1 et obtenez-en 3 GRATUITS ! Ne vous en manquez pas !
      </p>
      <!-- panel -->
      <div class="panel clearfix">

        <!-- imf-55 -->
        <div class="message small fl">
          <div class="message-box">
            <div class="message-box-sale">
              <p>-40%</p>
            </div>
            <img class="box" src="<?php echo getStaticUrl('images/xmas-ascbox.png') ?>" alt="IObit Malware Fighter PRO">
          </div>
          <p> 1 an, 1 PC</p>
          <dl>
            <dd class="clearfix">
              Réduction : <span class="fr">12€</span>
            </dd>
            <dd class="two">
              <p class="price"><b>17</b> <del>29,99 €</del></p>
            </dd>
            <dd>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-asc141pc1799&ref=fr_asc141pc1799purchase2012<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2012b-fr');"> <i class="all-icons"></i> VITE, J’EN PROFITE </a>
            </dd>
          </dl>
        </div>

        <!-- imf-85 -->
        <div class="message large fr">
          <div class="countd countdown">
            <div class="countdcnt">
              <strong>00</strong><span>h :</span>
              <strong>00</strong><span>m :</span>
              <strong>30</strong><span>s</span>
            </div>
          </div>
          <div class="message-box">
            <div class="message-box-sale message-box-eaux">
              <p>-85%</p>
            </div>
            <img class="box" src="<?php echo getStaticUrl('images/xmas-ascbox.png') ?>" alt="IObit Malware Fighter PRO">
            <div class="xmas-giveaway"></div>
            <div class="message-tips"><i class="all-icons"></i>
              <p>Cadeaux exclusifs incluent IObit Uninstaller PRO, Protected Folder et Smart Defrag PRO.</p>
            </div>
          </div>
          <p> 1 an / 3 PC + <del class="messagecad">CADEAUX PRO</del></p>
          <!-- dl -->
          <dl>
            <dd class="clearfix">
              Réduction : <span class="fr largeolsa"><em>129,97</em>€</span>
            </dd>
            <dd class="two">
              <p class="price"><b>19</b> <del class="largeold"><em>149,96</em>€</del></p>
            </dd>
            <dd>
              <a class="buybtn large" href="https://www.iobit.com/buy.php?product=fr-asc143pcpfiusd1999&ref=fr_asc143pcpfiusd1999purchase2012<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2012a-fr');"> <i class="all-icons"></i> VITE, J’EN PROFITE </a>
            </dd>
          </dl>
        </div>

        <div class="message message3">
          <dl>
            <dd class="two">
              <p class="price"><b>19</b> <del>49,99€</del></p>
            </dd>
            <dd>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-asc143pc1999&ref=fr_asc143pc1999purchase2012<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2012c-fr')"> <i class="all-icons"></i> VITE, J’EN PROFITE </a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <div class="xmas-annou"><i class="all-icons"></i>Attention ! Les cadeaux expireront dans 24 heures. Dépêchez-vous !</div>
  <div class="xmas-payment"></div>
  <!-- feature start -->
  <div class="feature clearfix">
    <div class="wrapper">
      <h2>Pourquoi choisir Advanced SystemCare PRO</h2>
      <h4>Des fonctions plus poussées que la version gratuite</h4>
      <div class="showcase">
        <div class="inner">
          <ul class="screenshot">
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-05.png') ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-05.png') ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-01.png') ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-02.png') ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-03.png') ?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-04.png') ?>" alt="">
            </li>
          </ul>
        </div>
        <ul class="zoom">
          <li class="fun1"></li>
          <li class="fun2">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png') ?>" alt="">
            </div>
          </li>
          <li class="fun3">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png') ?>" alt="">
            </div>
          </li>
          <li class="fun4">
            <!-- <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png') ?>" alt="">
          </div> -->
          </li>
          <li></li>
        </ul>
      </div>
      <div class="detail-list">
        <dl>
          <dt><i class="benfits03"></i></dt>
          <dd>
            <h3>Nettoyage plus profond avec l'IA</h3>
            <p>
              Nettoyez en profondeur les registres cachés, inutiles ou invalides pour libérer plus d'espace disque et améliorer complètement les performances du PC avec le nouveau mode IA.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits02"></i></dt>
          <dd>
            <h3>200%* plus rapide</h3>
            <p>Optimisez le processeur et la RAM et augmentez la vitesse du système pour accélérer le PC lent jusqu'à 200% de plus.</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><i class="benfits04"></i></dt>
          <dd>
            <h3>300%* plus rapide</h3>
            <p>Optimisez les paramètres du navigateur pour accélérer la vitesse d’Internet jusqu’à 300% plus rapide</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><i class="benfits01"></i></dt>
          <dd>
            <h3>Garder automatiquement vos logiciels à jour</h3>
            <p>Mettez à jour vos programmes obsolètes en un seul clic</p>
          </dd>
        </dl>
        <a class="textlink" href="Javascript:void(0);">En savoir plus sur PRO version>>></a>
      </div>
    </div>
  </div>
  <!-- feature end -->
  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper gifts-cont">
      <h2>Trois outils pratiques comme cadeaux gratuits pour un temps limité !</h2>
      <p>Le temps est limité, ne le manquez pas !</p>
      <div class="gifts-giveway gifts-giveway1">
        <div class="gifts-box"></div>
        <div class="gifts-text">
          <h4>IObit Uninstaller 10 PRO <b>0€</b> <del>29,99€</del> <span>(1 an / 1 PC)</span></h4>
          <ul>
            <li>Désinstaller les logiciels, même les programmes tenaces et groupés, et effacer automatiquement les résidus après sa désinstallation.</li>
            <li>Désinstallez les plug-ins malveillants et publicitaires et supprimez les notifications du navigateur pour assurer une expérience de navigation propre et sécurisée.</li>
          </ul>
        </div>
      </div>
      <div class="gifts-giveway gifts-giveway2">
        <div class="gifts-box"></div>
        <div class="gifts-text">
          <h4>Smart Defrag 6 PRO <b>0€</b> <del>29,99€</del> <span>(1 an / 1 PC)</span></h4>
          <ul>
            <li>Défragmenter les fichiers volumineux pour accélérer la vitesse de lecture / écriture du disque et améliorer la durabilité du disque.</li>
            <li>Surveiller l'état du disque en temps réel : la température, l’utilisation, le rapport d'analyse en auto-surveillance du disque, etc.</li>
          </ul>
        </div>
      </div>
      <div class="gifts-giveway gifts-giveway3">
        <div class="gifts-box"></div>
        <div class="gifts-text">
          <h4>Protected Folder <b>0€</b> <del>39,99€</del> <span>(1 an / 1 PC)</span></h4>
          <ul>
            <li>Protèger plus efficacement vos données, dossiers et fichiers importants avec un mot de passe.</li>
            <li>Même si le PC est attaqué de manière malveillante par desvirus, des logiciels espions et des ransomwares, le moteur de
              Protected Folder peut garder le verrouillage des fichiers.</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
  <!-- end gifts -->
  <div class="gifts-store">
    <div class="gifts-store-arrow"></div>
    <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-asc143pcpfiusd1999&ref=fr_asc143pcpfiusd1999purchase2012<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2012a-fr');"> <i class="all-icons"></i>Profitez-en maintenant</a>
    </dd>
  </div>
  <!-- comparison -->
  <div id="compare" class="comparison">
    <!-- title -->
    <h2>La version PRO vous offre une optimisation plus approfondie !</h2>
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th class="item-a">
            <p>Votre version actuelle</p>
          </th>
          <th class="space"></th>
          <th class="item-b"></th>
          <th class="space"></th>
          <th class="item-c">
            <p>Advanced SystemCare 14 PRO</p><img src="<?php echo getStaticUrl('images/xmas-santa.png') ?>" class="xmas-santa" alt="">
          </th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="item-a">Basiques</td>
          <td class="space"></td>
          <td class="item-b">Nettoyage, réparation et optimisation du système</td>
          <td class="space"></td>
          <td class="item-c">Approfondis</td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Nettoyage automatique et complet de la RAM pour un système plus fluide</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Optimisation du processeur pour accélérer le PC lent jusqu'à 200% de plus</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Nettoyage des registres empilés pour un système stable</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Protection de l’empreinte digitale numérique pour empêcher le suivi de votre activité en ligne</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Déctection et suppression des infections les plus approfondies</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Protection en temps réel contre les menaces de sécurité</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Optimisation de la vitesse Internet jusqu'à 300%</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Entretien automatique de votre PC lorsque le système est inactif ou à une heure programmée</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 10 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Optimisation du disque pour maximiser les performances PC</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 11 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Suppression des publicités & de la vie privée en ligne pour une navigation plus sûre</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 12 -->
        <tr>
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Mise à jour automatique vers la dernière version</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
        <!-- 13 -->
        <tr class="lasttr">
          <td class="item-a"><i class="all-icons"></i> Non disponible</td>
          <td class="space"></td>
          <td class="item-b">Soutien technique gratuit de 24/7 à la demande</td>
          <td class="space"></td>
          <td class="item-c"><i class="all-icons"></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
    <p>Advanced SystemCare - choix de plus de 250 millions d'utilisateurs dans le monde</p>
    <div class="content">
      <div class="details">
        <div class="active">
          <h4>Avis des médias</h4>
          <p>« Il n'y a rien de pire qu'un ordinateur qui tombe en panne trop souvent. Cela entrave votre capacité à travailler ou à jouer à des jeux. Advanced SystemCare répare tous les problèmes indépendants en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides. Il offre également la possiblité de donner un coup de pouce à votre ordinateur pour optimiser l'expérience PC. »</p>
          <h5>Cnet</h5>
        </div>
        <div>
          <h4>Avis des utilisateurs</h4>
          <p>« Advanced system care 14 est le système tout-en-un le plus complet sur le marché. J’ai utilisé ces produits pendant de nombreuses années, et chaque année il y a une meilleure nouvelle interface facile à utiliser. Le nettoyage en profondeur avec ce logiciel est facile avec un seul clic. Et ça fait sa magie toutes les autres options disponibles dans le système, il est aussi le chercheur de dossiers vides, le booster Internet, même le booster de jeu !! Je pense que c'est l'un des meilleurs systèmes de nettoyage disponibles aujourd'hui. »</p>
          <h5>Ryan Hill</h5>
        </div>
        <div>
          <h4>Avis des utilisateurs</h4>
          <p>« J’ai acheté de nombreux logiciels différents pour accélérer et résoudre les problèmes avec mon PC. Malheureusement, la plupart d’entre eux n’ont vraiment pas aidé ou fait une différence jusqu’à ce que j’aie essayé Advanced System Care 14. J’aime qu’il y ait tellement d’options et de solutions pour résoudre n’importe quel problème. Comme c'est incroyable, après la première analyse et réparation, mon PC est maintenant très rapide ! Certainement le meilleur produit que j’ai rencontré. »</p>
          <h5>Lyle Stelmaschuk</h5>
        </div>
        <div>
          <h4>Avis des utilisateurs</h4>
          <p>« J’utilise ASC depuis des années maintenant. J’ai récemment testé la dernière version V14. Et c’est la version la plus complète à ce jour. IObit continue d’améliorer ses produits et sa technologie. Avec plus d’options et une navigation plus facile qui aident à trouver des solutions. Je n’ai pas besoin d’acheter autre chose. »</p>
          <h5>Brendon O'Rourke</h5>
        </div>
        <div>
          <h4>Avis des utilisateurs</h4>
          <p>« Les fonctionnalités de Advanced System Care (ASC) 14 sont impressionnantes et l'apparence générale est propre, fraîche et moderne. J'ai utilisé d'autres programmes de maintenance système tout-en-un, mais aucun n'a été aussi efficace que ASC 14. Le programme est facile à utiliser et très intuitif. Les outils inclus sont vraiment tout compris et après avoir exécuté le programme, mon ordinateur est plus réactif. Le programme réduit et élimine l'utilisation de ressources non essentielles qui permettent à votre ordinateur de fonctionner plus frais et plus efficacement. Ce produit est incroyable et le meilleur de sa catégorie. Si vous vous souciez de votre ordinateur portable ou de votre PC, utilisez Advanced SystemCare 14 ! »</p>
          <h5>Anthony Baker</h5>
        </div>
      </div>
      <ul>
        <a class="next nextbtn" href="javascript: nextFun();"></a>
        <li class="one"><img src="<?php echo getStaticUrl('images/cnet.png') ?>" alt="Software Informer"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/Ryan-Hill.png') ?>" alt="Bob Bassett"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/Lyle-Stelmaschuk.png') ?>" alt="Gelu Batir"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/Brendon.png') ?>" alt="Gelu Batir"></li>
        <li class="five"><img src="<?php echo getStaticUrl('images/Anthony-Baker.png') ?>" alt="David Cassidy"></li>

      </ul>
    </div>
  </div>
  <!-- end review -->

  <div class="award">
    <div class="wrapper">
      <h2>Aussi recommandé par</h2>
      <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="Gelu Batir">
    </div>
  </div>



  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">PREMIER ARRIVE, PREMIER SERVI !</h2>
    <!-- box -->
    <div class="wrapper bottom-buy-center">
      <div class="box fl">
        <div class="bottom-buyimg bottom-buy1"></div>
        <div class="bottom-buyimg bottom-buy2 on"></div>
        <div class="bottom-buyimg bottom-buy3"></div>
      </div>
      <!-- ul -->
      <ul class="fl">
        <li class="top">1 An / 1 PC</li>
        <li class="active mid">1 An / 3 PC + <small>Cadeaux exclusifs</small></li>
        <li class="bot">1 An / 3 PC</li>
      </ul>
      <!-- dl -->
      <dl class="fr">
        <dd>
          <p class="price"><b>19</b> <del>149,96€</del></p>
        </dd>
        <dd>
          <a class="buybtn small" href="https://www.iobit.com/buy.php?product=fr-asc143pcpfiusd1999&ref=fr_asc143pcpfiusd1999purchase2012<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'] ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2012a-fr');">
            <i class="all-icons"></i> VITE, J’EN PROFITE
          </a>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
        <dd>
          <h3>Garantie de remboursement</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Paiement 100% Sécurisé</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/service-client.png" alt=""></dt>
        <dd>
          <h3>Service à la clientèle 24h/24</h3>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Note:</dt>
        <dd>* Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- end footer -->

  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>