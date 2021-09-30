<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

//viewNum
$viewNum=rand(10000, 30000);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

//packsNum
$packsNum = ceil(microtime_float()*2000/20000);
$packsCount = 138;
$packsNum = $packsCount-($packsNum%$packsCount);
if ($_GET['action'] == 'getPacks'){
  echo $packsNum;
  exit();
}

//refStr
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Activez le moteur Bitdefender pour bénéficier d'une protection optimale !</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700|Roboto:700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper clearfix">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Le moteur Bitdefender – La meilleure protection pour votre PC</h1>
    <h2> Profitez de technologies innovantes pour vous protéger contre les malwares, ransomwares, spywares et adwares</h2>
    <!-- box -->
    <div class="box">
      <img src="<?php echo getStaticUrl('images/banner-bundle.png')?>" alt="IObit Malware Fighter PRO+Smart Defrag PRO+Protected Folder">
      <p class="packs">
        <span class="packsNum"><?php echo $packsNum?></span>
        <span class="reduce"></span>
      </p>
    </div>
    <!-- dl -->
    <dl>
      <dt>Jusqu’à -85%</dt>
      <dd>
        <h3>
          Profitez de la protection de Bitdefender et obtenez GRATUITEMENT <br>
          2 outils PRO supplémentaires.
        </h3>
        <!-- price -->
        <p class="price"><big>21</big> <del>149,97€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-imf7pfsd2199&ref=fr_imf7bdpurchase2003<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdeg-fr');">
          <span>J’EN PROFITE VITE</span>
        </a>
        <!-- view -->
        <p class="view"><span class="buyNum"><?php echo $viewNum?></span> personnes sont protégées par IObit Malware Fighter PRO</p>
      </dd>
    </dl>
  </div>
</div>
<!-- end banner -->

<!-- product -->
<div class="product">
  <div class="wrapper">
    <h2>Pourquoi IObit Malware Fighter 7 PRO ?</h2>
    <h3>Augmentez le niveau de sécurité de votre PC avec la protection multicouche</h3>
    <h4>Les moteurs de Bitdefender leader mondial <i>Nouveau</i></h4>
    <p><img src="<?php echo getStaticUrl('images/currt.png')?>" alt="">Equipé des derniers moteurs Anti-virus & Anti-malware de Bitdefender, plus de 203 millions de nouvelles menaces en ligne, <br> telles que adwares, virus, logiciels malveillants, logiciels espions, etc. peuvent être facilement éliminées.</p>
    <img src="<?php echo getStaticUrl('images/authoritative.png')?>" alt="" class="img-box">
  </div>
</div>
<!-- end product -->

<!-- product2 -->
<div class="product2 wrapper">
  <div class="content">
    <dl class="list01">
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Renseignement sur les Cybermenaces <span>Nouveau</span></strong>
        <p>Obtenir rapidement des informations liées aux menaces actuelles ou <br> potentielles afin de vous fournir par avance une défense proactive.</p>
      </dd>
    </dl>
    <dl class="list02">
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Détection imbattable des menaces <br> <span>Nouveau</span></strong>
        <p>Profiter d’une vitesse d’analyse jusqu’à 300% et d’un <br> taux d’élimination des menaces plus élevé grâce à la <br> nouvelle génération de moteur Anti-malware.</p>
      </dd>
    </dl>
    <dl class="list03">
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Aucune chance pour Ransomware  <br> <span>Amélioré </span></strong>
        <p>Bloquer proactivement tous accès non autorisé <br> à vos fichiers importants et empêcher la <br> modification et le cryptage de vos données <br> personnels.</p>
      </dd>
    </dl>
  </div>
</div>
<!-- end product2 -->

<!-- between buy -->
<div class="between-buy between1">
  <div class="wrapper">
    <h2>Profitez de la protection de Bitdefender pour une cybersécurité de niveau supérieur !</h2>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=fr-imf7pfsd2199&ref=fr_imf7bdpurchase2003<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdeg-fr');">
      <span> J’EN PROFITE VITE</span>
    </a>
    <p>Vite, plus que <strong class="packsNum"><?php echo $packsNum?></strong> disponibles !</p>
  </div>
</div>
<!-- end between buy -->

<!-- feature -->
<div class="feature">
  <div class="wrapper">
    <h2>Profitez de la protection de la vie privée ultime </h2>
    <div class="left-message">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
        <dd>
          <strong>Fichiers protégés par mot de passe</strong> <span>Exclusive PRO</span>
          <p>Verrouiller vos données sensibles et photos privées avec un mot de passe sécurisé et les protège de tout accès non autorisé. </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
        <dd>
          <strong>Navigateur Anti-Pistage</strong> <span>Exclusive PRO</span>
          <p>Effacer automatiquement les cookies et traces dangereuses <br> lors que vous fermez le navigateur Web. </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
        <dd>
          <strong>Protection de Webcam</strong> <span>Exclusive PRO</span>
          <p>Toute tentative d'accès à votre webcam ne peut se faire <br> qu'avec votre accord afin d'éviter tous les regards indiscrets. </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
        <dd>
          <strong>Blocages des virus sur USB </strong> <span>Exclusive PRO</span>
          <p>Vérifier et bloquer les viurs cachés sur les clés USB qui pourraient mettre en danger l’intégrité de l’information stockée dans l’ordinateur. </p>
        </dd>
      </dl>
    </div>
    <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt="" class="imgbox">
  </div>
</div>
<!-- end feature -->

<!-- between buy2 -->
<div class="between-buy between2">
  <div class="wrapper">
    <h2>Passez à IObit Malware Fighter 7 PRO et bénéficiez d’une confidentialité en ligne optimale !</h2>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=fr-imf7pfsd2199&ref=fr_imf7bdpurchase2003<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdeg-fr');">
      <span> J’EN PROFITE VITE</span>
    </a>
    <p>Vite, plus que <strong class="packsNum"><?php echo $packsNum?></strong> disponibles !</p>
  </div>
</div>
<!-- end between buy2 -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <h2>Découvrez les cadeaux Exclusifs, rien que pour vous !</h2>
    <!-- sd -->
    <dl class="sd clearfix">
      <dt><img src="<?php echo getStaticUrl('images/gifts-sd.png')?>" alt="Smart Defrag PRO"></dt>
      <dd>
        <h3> 0€ <del>29,99€</del></h3>
        <p>Maximisez les performances et la durée de votre disque en défragmentant les registres et les fichiers du système</p>
      </dd>
    </dl>
    <dl class="pf clearfix">
      <dt><img src="<?php echo getStaticUrl('images/gifts-pf.png')?>" alt="Protected Folder"></dt>
      <dd>
        <h3> 0€ <del>39,99€</del></h3>
        <p>Un outil de protection puissant des fichiers qui garantit la sécurité de vos dossiers et vos données</p>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- compare -->
<div class="compare-tab wrapper">
  <h2>Aperçu des différences entre VOTRE VERSION ACTUELLE ET LA VERSION PRO</h2>
  <table border="0" cellspacing="0" cellpadding= "0" width="100%">
    <thead>
    <tr>
      <th class="itema"></th>
      <th class="space"></th>
      <th class="itemb"><span>Votre version actuelle</span></th>
      <th class="itemc">IObit Malware Fighter 7 PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="itema">Base de données Anti-malware</td>
      <td class="space"></td>
      <td class="itemb">3 millions</td>
      <td class="itemc">Plus de 203 millions</td>
    </tr>
    <tr>
      <td class="itema">Moteur Anti-virus et Anti-malware de Bitdefender</td>
      <td class="space"></td>
      <td class="itemb">-</td>
      <td class="itemc"><i></i></td>
    </tr>
    <tr>
      <td class="itema">Moteur Anti-ransomware</td>
      <td class="space"></td>
      <td class="itemb">-</td>
      <td class="itemc"><i></i></td>
    </tr>
    <tr>
      <td class="itema">Protection en temps réel</td>
      <td class="space"></td>
      <td class="itemb">Basique</td>
      <td class="itemc">Complète</td>
    </tr>
    <tr>
      <td class="itema">Blocage des virus sur Clés USB</td>
      <td class="space"></td>
      <td class="itemb">-</td>
      <td class="itemc"><i></i></td>
    </tr>
    <tr>
      <td class="itema">Protection par mot de passe</td>
      <td class="space"></td>
      <td class="itemb">-</td>
      <td class="itemc"><i></i></td>
    </tr>
    <tr>
      <td class="itema">Arrêter les suivi en ligne malveillants</td>
      <td class="space"></td>
      <td class="itemb">-</td>
      <td class="itemc"><i></i></td>
    </tr>
    <tr>
      <td class="itema">Protection de Webcam</td>
      <td class="space"></td>
      <td class="itemb">-</td>
      <td class="itemc"><i></i></td>
    </tr>
    <tr class="last">
      <td class="itema">Mise à jour automatique de la base de données</td>
      <td class="space"></td>
      <td class="itemb">-</td>
      <td class="itemc"><i></i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end compare -->

<!-- review -->
<div class="review wrapper">
  <div id="dg-container" class="dg-container">
    <div class="nav">
      <span class="dg-prev"></span>
      <span class="dg-next"></span>
    </div>
    <div class="content dg-wrapper">
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"></dt>
        <dd>
          <h2>Avis des médias</h2>
          <p>" Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est donc compatible avec votre logiciel antivirus standard. IObit Malware Fighter est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots."</p>
          <cite>Software.Informer</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
        <dd>
          <h2>Avis des utilisateurs</h2>
          <p>" Nous avons utilisé de nombreux de programmes différents pour assurer le bon fonctionnement de nos ordinateurs et éviter les menaces. Il faut quelques heures pour maintenir la sécurité et les performances chaque semaine. Avec IObit Malware Fighter Pro et Advanced System Care Pro, tout est bien rangé. Après avoir utilisé vos produits, il n’y a plus de problèmes. "</p>
          <cite>Bob Bassett</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></dt>
        <dd>
          <h2>Avis des utilisateurs</h2>
          <p>"Il y a quelques années une personne de mon entourage m’a parlé d’IObit Malware fighter. Au départ j’étais sceptique. Mais après l’avoir installé c’est devenu mon logiciel anti malware préféré. Il est très facile d’utilisation. Au cours des années il a détecté plusieurs menaces et les a éliminé . En association avec d’autres programmes IObit comme ASC j’ai une très bonne protection pour mon PC. Je recommande ces programmes à tous mes amis ainsi qu’à ma famille."</p>
          <cite>Peter Stoffers</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
        <dd>
          <h2>Avis des utilisateurs</h2>
          <p>"Je suis très satisfait de votre produit IObit Malware Fighter. J'ai eu beaucoup de problèmes d'interférences malveillantes auparavant, je n'ai pas pu regarder un film ou un concert entier que j'aime beaucoup. Grâce à votre produit, maintenant chaque opération est claire, sûre et bien protégée. Il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis. "</p>
          <cite>Gelu Batir</cite>
        </dd>
      </dl>
      <dl class="reviews">
        <dt><img src="<?php echo getStaticUrl('images/dave-cassidy.png')?>" alt="David Cassidy"></dt>
        <dd>
          <h2>Avis des utilisateurs</h2>
          <p>"Merci d'avoir fait sortir Malware Fighter, c’est une autre mise à jour majeure pour vos utilisateurs. Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide. Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter."</p>
          <cite>David Cassidy</cite>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end review -->

<!-- bottom -->
<div class="bottom">
  <!-- award -->
  <div class="award wrapper ">
    <h2>Approuvé par ces médias célèbres du monde</h2>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
  </div>

  <!-- service -->
  <div class="service wrapper clearfix">
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

  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
    <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs.</dd>
  </dl>

  <!-- footer -->
  <div class="footer">
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
  </div>
</div>
<!-- end bottom -->

<!-- float -->
<div class="float">
  <div class="wrapper clearfix">
    <!-- box -->
    <img class="box" src="<?php echo getStaticUrl('images/float-bundle.png')?>" alt="">
    <!-- countdown -->
    <div class="countdown">
      <div class="countdown-content clearfix">
        <div class="countdown-box">
          <div class="countdown-list"><span>0</span></div>
        </div>
        <div class="countdown-box">
          <div class="countdown-list"><span>1</span></div>
        </div>
        <div class="countdown-box">
          <div class="countdown-list"><span>3</span></div>
        </div>
        <div class="countdown-box last">
          <div class="countdown-list"><span>8</span></div>
        </div>
      </div>
      <!-- view -->
      <p class="view"><span class="viewNum"><?php echo $viewNum?></span> personnes en ligne !</p>
    </div>
    <!-- price -->
    <p class="price"><big>21</big>€99 <del>149,97€</del></p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=fr-imf7pfsd2199&ref=fr_imf7bdpurchase2003<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-bdeg-fr');">
      <span>J’EN PROFITE VITE</span>
    </a>
  </div>
</div>
<!-- end float -->

<!-- top -->
<a class="top" href="javascript: void(0);">Top</a>
<!-- end top -->

<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>