<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr = "";
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf','xi_imf','xb_imf'))){
    $refStr.='-'.$_GET['pop'];
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -85% sur IObit Malware Fighter 8 PRO et n'attendez pas la dernière démarque - Solde d'été chez IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Abril+Fatface&family=Lato:wght@400;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php">IObit</a>
    <!-- sun -->
    <span class="sun"></span>
    <!-- h1 -->
    <h1>Vente Flash Spécial été</h1>
    <!-- h2 -->
    <h2>Il fait trop chaud ! Les prix ont fondus ! Premier arrivé, premier servi !</h2>
    <!-- container -->
    <div class="container">
      <!-- large offer -->
      <div class="offer large">
        <!-- countdown -->
        <p class="countdown">
          <i class="all-icons"></i>
          <strong>00</strong>j:
          <strong>00</strong>h:
          <strong>00</strong>m:
          <strong>00</strong>s:
          <strong>00</strong>ms *
        </p>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-imfbundle.png')?>" alt="IObit Malware Fighter PRO+Protected Folder+Smart Defrag PRO+IObit Software Updater PRO">
        <!-- dl -->
        <dl>
          <dd>
            <!-- price -->
            <p class="price"><big>21</big> <del>179,96€</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-imf8pfsdisu2199&ref=fr_imf8bundle2199indexpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2006a-fr');">
              <i class="all-icons"></i>
              J’en profite vite !
            </a>
            <!-- view -->
            <p class="view"><i class="all-icons"></i> <b class="viewNum">4,006,553</b> personnes l'ont acheté!</p>
          </dd>
        </dl>
      </div>

      <!-- medium offer -->
      <div class="offer medium dns">
        <!-- h3 -->
        <h3>Deuxième Démarque</h3>
        <!-- off -->
        <span class="off">-70%</span>
        <!-- box -->
        <img class="box" src="<?php echo getStaticUrl('images/banner-imf.png')?>" alt="IObit Malware Fighter PRO">
        <!-- dl -->
        <dl>
          <dd>
            <!-- price -->
            <p class="price"><big>23</big> <del>79,99€</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-imf83pc2399&ref=fr_imf83pc2399indexpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2006c-fr');">
              <i class="all-icons"></i>
              J’en profite vite !
            </a>
          </dd>
        </dl>
      </div>

      <!-- small offer -->
      <div class="offer small dns">
        <h3>Dernière Démarque</h3>
        <span class="off">-50%</span>
      </div>

      <!-- shadow -->
      <span class="shadow"></span>
    </div>
    <!-- service -->
    <div class="service">
      <dl class="one fl">
        <dd>Nous acceptons</dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
      <dl class="fl">
        <dd>Satisfait ou 100% remboursé</dd>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      </dl>
      <dl class="fr">
        <dd>Paiement sécurisé</dd>
        <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- h2 -->
    <h2>La seule protection de sécurité dont vous aurez jamais besoin</h2>
    <!-- left-message -->
    <div class="left-message fl">
      <h3><strong>3 moteurs</strong> fonctionnant <br> parfaitement ensemble</h3>
      <img class="arrow" src="<?php echo getStaticUrl('images/arrow.png')?>" alt="">
      <dl class="clearfix" data-index="01" data-color="blue">
        <dd class="fl">
          <h4>Moteur Bitdefender</h4>
          <p>
            Moteur leader mondial contre les <br>
            virus et les logiciels malveillants
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="02" data-color="blue">
        <dd class="fl">
          <h4>Moteur Anti-malware IObit</h4>
          <p>
            Des actions coordonnées du moteur <br>
            Bitdefender et du moteur IObit
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="03" data-color="blue">
        <dd class="fl">
          <h4>Moteur Anti-ransomware IObit</h4>
          <p>Blocage des attaques de ransomware</p>
        </dd>
        <dt class="fr paddingtop15"><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <dl data-index="04" data-color="green">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
        <dd>
          <h4>Protection en temps réel</h4>
          <p>Aucun chance pour les malwares</p>
        </dd>
      </dl>
      <dl data-index="05" data-color="green">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
        <dd>
          <h4>Protection des données sensibles</h4>
          <p>
            Aucun accès non autorisé ne sera <br>
            possible
          </p>
        </dd>
      </dl>
    </div>
    <!-- detail-show -->
    <div class="detail-show clearfix">
      <div id="show01" class="showes fl on blue">
        <h5>Moteur Bitdefender</h5>
        <hr>
        <p>Une base de données diversifiée et complète qui est mis à jour quotidiennement vous permet d’identifier des risques en évolution.</p>
      </div>
      <div id="show02" class="showes fl blue">
        <h5>Moteur Anti-malware IObit</h5>
        <hr>
        <p>Plus de 209 millions de menaces telles que virus, logiciels malveillants, spywares, crypto jacking, peuvent être facilement supprimées.</p>
      </div>
      <div id="show03" class="showes fl blue">
        <h5>Moteur Anti-ransomware Iobit</h5>
        <hr>
        <p>Ne vous inquiétez jamais des pirates informatiques qui pénètrent dans votre ordinateur et chiffrent vos fichiers importants et vos données personnelles.</p>
      </div>
      <div id="show04" class="showes fl green">
        <h5>Protection en temps réel</h5>
        <hr>
        <p>Effacez automatiquement les cookies et traces dangereuses lors que vous fermez le navigateur et empêchez les hackers de rechercher ce que vous lisez, visualisez et achetez en ligne.</p>
      </div>
      <div id="show05" class="showes fl green">
        <h5>Protection des données sensibles</h5>
        <hr>
        <p>Renforcez la protection multicouche des fichiers auxquels vous tenez le plus grâce à la combanaison de la protection des données sensibles et du Coffre-fort.</p>
      </div>
    </div>
  </div>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <!-- h2 -->
    <h2>Les cadeaux exclusifs réservés à nos utilisateurs PRO ! Quantités limitées !</h2>
    <!-- sd -->
    <dl class="sd fl">
      <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"></dt>
      <dd>
        Maximisez les performances et la <br>
        durée de votre disque en <br>
        défragmentant les registres et les <br>
        fichiers du système.
      </dd>
    </dl>
    <!-- pf -->
    <dl class="pf fl">
      <dt><img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"></dt>
      <dd>
        Un outil de protection puissant des <br>
        fichiers qui garantit la sécurité de <br>
        vos dossiers et vos données.
      </dd>
    </dl>
    <!-- isu -->
    <dl class="isu fr">
      <dt><img src="<?php echo getStaticUrl('images/gifts-isu.png')?>" alt="IObit Software Updater PRO"></dt>
      <dd>
        Mettez à jour automatiquement <br>
        l’ensemble de vos logiciels pour <br>
        éviter toutes les failles exploitables <br>
        par les hackers.
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review">
  <div class="wrapper">
    <!-- h2 -->
    <h2>
      IObit Malware Fighter PRO a déjà protégé plus de <b class="userNum">5 381 569</b> <br>
      ordinateurs, il est temps de protéger le vôtre.
    </h2>
    <!-- container -->
    <div class="container clearfix">
      <dl class="fl">
        <dt>
          <img src="<?php echo getStaticUrl('images/harold-barr.png')?>" alt="Harold Barr">
          <i class="all-icons">"</i>
        </dt>
        <dd>
          <h4>Harold Barr</h4>
          <p>" IObit Malware Fighter est le meilleur logiciel de suppression de logiciels malveillants que j’utilise pour mon travail. Je travaille dans l’informatique et IMF est le meilleur outil de protection. Attention, malware ! Vous n’aurez aucune chance. IMF est un logiciel intuitif avec des fonctionnalités avancées et une interface utilisateur très agréable. Un outil moderne pour un usage quotidien. "</p>
        </dd>
      </dl>
      <dl class="fr">
        <dt>
          <img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen">
          <i class="all-icons">"</i>
        </dt>
        <dd>
          <h4> Adam Cullen</h4>
          <p>" IObit Malware Fighter est génial car il analyse les fichiers et les clés USB et protège contre les menaces en ligne et hors ligne. La gamme de produit IObit m'offre toujours des services irréprochables et même quand j'utilise seulement les versions gratuites. Je recommanderais IObit et leurs produits à tous ceux qui souhaitent utiliser des logiciels simples d'utilisation, qui assurent une protection intégrale ainsi qu'un PC performant. "</p>
        </dd>
      </dl>
    </div>
    <!-- media -->
    <dl class="media clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/software.png')?>" alt="Software.informer"></dt>
      <dd class="fl">
        <h4>Ce que l'on dit de nous : <i class="all-icons"></i></h4>
        <p>" Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots. "</p>
      </dd>
    </dl>
  </div>
</div>
<!-- end review -->

<!-- awards -->
<div class="awards">
  <div class="wrapper">
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- end awards -->

<!-- comparison -->
<div class="comparison">
  <!-- h2 -->
  <h2>Sans la protection complète, votre ordinateur est vulnérable !</h2>
  <!-- table -->
  <table>
    <thead>
    <tr>
      <th class="item-a"><p>Votre version actuelle</p></th>
      <th class="item-b"></th>
      <th class="item-c"><p>IObit Malware Fighter 8 PRO</p></th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="item-a">9 millions</td>
      <td class="item-b">Base de données Anti-malware</td>
      <td class="item-c">Plus de 209 millions</td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="item-a"><i class="all-icons"></i> Non disponible</td>
      <td class="item-b">Moteurs anti-virus de Bitdefender</td>
      <td class="item-c"><i class="all-icons"></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="item-a"><i class="all-icons"></i> Non disponible</td>
      <td class="item-b">Moteur Anti-Ransomware</td>
      <td class="item-c"><i class="all-icons"></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="item-a"><i class="all-icons"></i> Non disponible</td>
      <td class="item-b">Protection de Webcam </td>
      <td class="item-c"><i class="all-icons"></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="item-a"><i class="all-icons"></i> Non disponible</td>
      <td class="item-b">Protection des anti-traçages</td>
      <td class="item-c"><i class="all-icons"></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="item-a"><i class="all-icons"></i> Non disponible</td>
      <td class="item-b">Protection de clés USB</td>
      <td class="item-c"><i class="all-icons"></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="item-a"><i class="all-icons"></i> Non disponible</td>
      <td class="item-b">Des données sensibles protégées par mot de passe</td>
      <td class="item-c"><i class="all-icons"></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="item-a"><i class="all-icons"></i> Non disponible</td>
      <td class="item-b">Protection en temps réel</td>
      <td class="item-c"><i class="all-icons"></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="item-a"><i class="all-icons"></i> Non disponible</td>
      <td class="item-b">Mise à jour automatique</td>
      <td class="item-c"><i class="all-icons"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <!-- box -->
    <span class="box fl">IObit Malware Fighter PRO</span>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price"><big>21</big> <del>179,96€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-imf8pfsdisu2199&ref=fr_imf8bundle2199indexpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2006a-fr');">
          <i class="all-icons"></i>
          J’en profite vite !
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end float -->

<!-- footer -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Note:</dt>
      <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date(Y)?> IObit. Tous droits réservés</p>
  </div>
</div>
<!-- end footer -->

<!-- coupon -->
<div class="coupon">
  <div class="coupon-content hide">
    <!-- close -->
    <a class="close" href="javascript: closeCoupon();">×</a>
    <!-- countdown -->
    <div class="countdown">
      L'offre se terminera dans
      <div class="tens">
        <strong></strong>
      </div>
      <div class="unit">
        <strong></strong>
      </div>
    </div>
    <!-- box -->
    <img class="box" src="<?php echo getStaticUrl('images/coupon-imfbundle.png')?>" alt="IObit Malware Fighter PRO">
    <!-- dl -->
    <dl>
      <dd>
        <!-- price -->
        <p class="price"><big>21</big> <big class="black">23</big></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-imf8pfsdisu2199&ref=fr_imf8bundle2199indexpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase2006b-fr');">
          <i class="all-icons"></i>
          J’en profite vite !
        </a>
      </dd>
    </dl>

  </div>
</div>
<!-- end coupon -->

<script src="<?php echo $pRootUrl; ?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>