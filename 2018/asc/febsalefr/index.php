<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;
$buyNum = number_format($buyNum);

if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12')
)){
  $refstr='-'.$_GET['st'];
}else{
  $refstr='';
}

if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refstr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Jusqu'à -85% sur Advanced SystemCare PRO - Dernière Démarque - IObit</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<div class="banner bg">
  <div class="wrapper">
    <a class="logo" href="http://www.iobit.com" target="_blank">IObit</a>
    <h1>2018 Ventes Flash de Pâques</h1>
    <div class="panel clearfix">
      <div class="box small">
        <p><img src="<?php echo getStaticUrl('images/asc.png')?>" alt="" /></p>
        <p>
          <strong>17</strong>
          <span><b>€99</b> <del class="original">49,99€</del></span>
        </p>
        <a class="buy-btn" href="http://www.iobit.com/buy.php?product=fr-asc113pc1799&ref=fr_asc113pcpurchase1802<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1802b-fr')">
          VITE, J’EN PROFITE
        </a>
      </div>
      <div class="box">
        <ul id="countdown2" class="countdown countdowntwo">
          <li><strong>00</strong> H : </li>
          <li><strong>00</strong> M : </li>
          <li><strong>00</strong> S : </li>
          <li><strong>000</strong> MS*</li>
        </ul>
        <p><img src="<?php echo getStaticUrl('images/ascgift.png')?>" alt="" /></p>
        <p>
          <strong>17</strong>
          <span><b>€99</b> <del class="original">119,97€</del></span>
        </p>
        <a class="buy-btn red" href="http://www.iobit.com/buy.php?product=fr-asc11pfsd1799&ref=fr_asc113pcpfsdpurchase1802<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1802a-fr')">
          VITE, J’EN PROFITE
        </a>
        <p class="bought">
          <span class="buyNum"><?php echo $buyNum?></span> personnes l’ont acheté
        </p>
      </div>
    </div>
  </div>
</div>

<!--payment-->
<div class="payment">
  <img src=" <?php echo $pResUrl; ?>images/payment.png" alt="">
</div>

<!--introduction-->
<div class="introduction clearfix wrapper">
  <h2>Maintenance automatique, la solution la plus simple et la plus efficace pour rendre votre PC rapide!</h2>
  <img class="asc-box" src="<?php echo $pResUrl; ?>images/asc-box.png" alt="" />
  <div class="high-light clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/features-cleanup.png" alt="features-cleanup"></dt>
      <dd>
        <h3>Nettoyer Automatiquement votre registre</h3>
        <p>Un registre propre améliore le temps du démarrage et de la fermeture de Windows, il permet également de charger les programmes plus rapidement.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/features-protect.png" alt="features-protect"></dt>
      <dd>
        <h3>Supprimer Malware en temps réel</h3>
        <p>Mettre votre PC à l’abri de malware et des menaces de sécurité diverses pour vous proposer la sécurité informatique.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/features-autoclean.png" alt="features-autoclean"></dt>
      <dd>
        <h3>Nettoyer Automatiquement les fichiers indésirables</h3>
        <p>Libérer plus d’espace de disque afin de profiter des performances au top en nettoyant des fichiers indésirables et unnécessaires.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/features-corriger.png" alt="features-corriger"></dt>
      <dd>
        <h3>Corriger des vulnérabilités Windows</h3>
        <p>Scanner et corriger des vulnérabilités Windows pour prévenir les problèmes avant qu’il ne se produisent.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/features-protection.png" alt="features-protection"></dt>
      <dd>
        <h3>Garder vos logiciels à jour automatiquement</h3>
        <p>Vous aider à mettre à jour vos programmes importants en un seul clic  </p>
      </dd>
    </dl>
    <p class="savoir clearfix"><a href="javascript:">En savoir plus sur PRO version&gt;&gt;</a></p>
  </div>
</div>

<!--buy-mid-->
<div class="buy-mid wrapper">
  <h2>Profitez d’un PC plus rapide, plus propre et plus sûr avec ASC PRO et les outils PRO ci-dessous </h2>
  <div class="clearfix">
    <dl class="clearfix">
      <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="" /></dt>
      <dd>
        <h3>Protected Folder <small>1 an / 1 PC</small></h3>
        <p><strong>0€</strong>  <del>39,99€</del></p>
        <ul>
          <li><i class="all-icons"></i> <span>Vous prémunir contre la perte, le vol et la fuite de données.</span></li>
          <li><i class="all-icons"></i> <span>Un mot de passe empêche quiconque de les ouvrir</span></li>
        </ul>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="" /></dt>
      <dd>
        <h3>Smart Defrag 5 PRO <small>1 an / 1 PC</small></h3>
        <p><strong>0€</strong>  <del>29,99€</del></p>
        <ul>
          <li><i class="all-icons"></i> <span>La performance maximale du disque </span></li>
          <li><i class="all-icons"></i> <span>Un accès plus rapide aux fichiers</span></li>
        </ul>
      </dd>
    </dl>
  </div>
  <h4>Vite, les cadeaux sont disponibles à durée limitée</h4>
  <ul id="countdown2" class="countdown countdowntwo">
    <li><strong>00</strong> H : </li>
    <li><strong>00</strong> M : </li>
    <li><strong>00</strong> S : </li>
    <li><strong>000</strong> MS*</li>
  </ul>
  <a href="http://www.iobit.com/buy.php?product=fr-asc11pfsd1799&ref=fr_asc113pcpfsdpurchase1802<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1802a-fr')" class="buy-btn red middle"><i></i> <span>VITE, J’EN PROFITE</span></a>
</div>

<!--review-->
<div class="review clearfix wrapper">
  <div class="media clearfix">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
    <img class="media-img" src="<?php echo $pResUrl; ?>images/media.png" alt="media images">
    <div class="message">
      <p>Advanced SystemCare Pro offre les derniers outils d'optimisation, dans cette version professionnelle, de son nettoyeur de disque. Quelle que soit votre version de Windows, vous pouvez nettoyer, défragmenter, détecter et réparer les erreurs de vos disques durs pour en augmenter la rapidité de traitement des données et ainsi optimiser les performances de votre PC.</p>
      <p><span> -01net       </span></p>
    </div>
    <img src="<?php echo $pResUrl; ?>images/01net.com.png" alt="01net.com" class="olnet">
  </div>
  <div class="user-review">
    <div>
      <h4>Gordon Griswold<img src="<?php echo $pResUrl; ?>images/star01.png" alt=""></h4>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/gordon.png" alt="">
        </dt>
        <dd>"D’après moi, ASC Pro d’IObit est la meilleure application de maintenance pour les utilisateurs Windows.Il propose le support technique professionnel, autoritaire et résponsable."</dd>
      </dl>
    </div>
    <div class="right">
      <h4>Bruce Ramsay <img src="<?php echo $pResUrl; ?>images/star02.png" alt=""></h4>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/bruce.jpg" alt="">
        </dt>
        <dd>"Non seulement il est un bon produit, mais le support est également très bon."</dd>
      </dl>
    </div>
    <div>
      <h4>Charles R. Widick <img src="<?php echo $pResUrl; ?>images/star01.png" alt=""></h4>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/charles.png" alt="">
        </dt>
        <dd>"Mon choix est sans aucun doute Advanced SystemCare Pro. C’est le meilleur produit qu’un utilisateur débutant peut acheter. Merci à IObit qui rend mon travail plus facile."</dd>
      </dl>
    </div>
    <div class="right">
      <h4>Bob Bassett <img src="<?php echo $pResUrl; ?>images/star01.png" alt=""></h4>
      <dl>
        <dt>
          <img src="<?php echo $pResUrl; ?>images/bob.png" alt="">
        </dt>
        <dd>"Nous avons utilisé une douzaine de programmes differents pour garder nos machines fonctionner bien. Maintenant, avec Advanced SystemCare Pro, tous sont bien rangés."</dd>
      </dl>
    </div>
  </div>
</div>

<!--contrast-->
<div class="contrast wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text">La comparaison des produits:</th>
      <th class="space"></th>
      <th class="itemb">
        Advanced SystemCare <strong>Free</strong>
      </th>
      <th class="space"></th>
      <th class="itema">
        Advanced SystemCare <strong>PRO</strong>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_01.png"></td>
      <td class="virtue">Nettoyage, réparation et optimisation du système de base </td>
      <td class="space"></td>
      <td class="itemb gray-star"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_02.png')?>" alt="" /></td>
      <td class="virtue"><span>Réparer les failles de sécurité pour empêcher le piratage en un clic</span> <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb gray-star"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png')?>" alt="" /></td>
      <td class="virtue"><span>Le moniteur de performance redessiné pour surveiller et accélérer votre PC </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itemb gray-star"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_04.png')?>" alt="" /></td>
      <td class="virtue"><span>Capturer automatiquement les intrus avec FaceID</span></td>
      <td class="space"></td>
      <td class="itemb gray-star"><img src="<?php echo $pResUrl; ?>images/gray-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_05.png"></td>
      <td class="virtue"><span>Optimisation de la vitesse Internet jusqu'à 300% avec Internet Booster </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_06.png"></td>
      <td class="virtue"><span>Le démarrage jusqu'à 200% plus rapide de votre PC </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_07.png"></td>
      <td class="virtue"><span>Nettoyage des registres empilés pour un système stable </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_08.png"></td>
      <td class="virtue">Nouveau moteur d'optimisation du disque pour maximiser les performances PC <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_09.png"></td>
      <td class="virtue">Protection en temps réel contre les menaces de sécurité</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_10.png"></td>
      <td class="virtue">Déctection complète contre les infections les plus approfondies</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_11.png"></td>
      <td class="virtue">Supprimer Auto les publicités &amp; la vie privée en ligne pour une navigation plus sûre</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_12.png"></td>
      <td class="virtue"><span>Nettoyage Auto de la RAM pour un système plus fluide</span</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_13.png"></td>
      <td class="virtue">Mise à jour automatique vers la dernière version</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop_asc_i_14.png"></td>
      <td class="virtue">Soutien technique gratuit de 24/7 à la demande</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/red-star.png"></td>
    </tr>
    </tbody>
  </table>
</div>

<!--buy-bottom-->
<div class="buy-bottom bg">
  <div class="wrapper clearfix">
    <div class="img-box fl">
      <img class="active gift" src="<?php echo getStaticUrl('images/bot-ascgift.png')?>" alt="" />
      <img class="asc" src="<?php echo getStaticUrl('images/bot-asc.png')?>" alt="" />
    </div>
    <ul>
      <li class="active" data-num="1">
        <h4>1 an / 3 PCs + Cadeaux offerts</h4>
        <div class="off">-85%</div>
      </li>
      <li data-num="0">
        <h4>1 an / 3 PCs</h4>
        <div class="off sm-off">-60%</div>
      </li>
    </ul>
    <div class="buy-container fr">
      <p>
        <strong>17</strong>
        <span><b>€99</b> <del class="original">119,97€</del></span>
      </p>
      <a class="buy-btn red middle" href="http://www.iobit.com/buy.php?product=fr-asc11pfsd1799&ref=fr_asc113pcpfsdpurchase1802<?php echo $refstr;?>&aff=&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1802a-fr')">
          <i></i>
          <span>VITE, J’EN PROFITE</span>
      </a>
    </div>
  </div>
</div>

<!--certification-->
<div class="certification clearfix wrapper">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/cert-medal.png')?>" alt="" /></dt>
      <dd><strong>Satisfait ou Remboursé</strong>Garantie satisfait ou remboursé pendant <br>60 jours après la date d’achat.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/cert-verified.png')?>" alt="" /></dt>
      <dd><strong>Paiement 100% Sécurisé</strong>IObit vous propose huit modes de paiement <br>sécurisé pour régler vos achats.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/cert-cart.png')?>" alt="" /></dt>
      <dd><strong>Obtenir la licence</strong>Vous recevrez le code de licence dans les <br>minutes après l’achat.</dd>
    </dl>
  </div>
</div>

<!--Annotations-->
<div class="annotations wrapper">
  <p>N.B.</p>
  <p>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</p>
</div>

<!--footer-->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>

<script src="<?php echo getStaticUrl('js/script.js') ?>"></script>
</body>
</html>