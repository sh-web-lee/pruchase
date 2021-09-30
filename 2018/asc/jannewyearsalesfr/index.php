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
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10')
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
  <title>Jusqu'à -85% sur Advanced SystemCare PRO - Vente Flash chez IObit</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="http://www.iobit.com" target="_blank">IObit</a>
    <h1>VENTE FLASH DE DENOËL</h1>
    <h2>JUSQU’À -85% SUR ADVANCED SYSTEMCARE 11 PRO, PREMIER ARRIVÉ, PREMIER SERVI ! </h2>
    <div class="panel clearfix">
      <p class="countdown">
        <img src="<?php echo $pResUrl; ?>images/time.png" alt="" />
        OFFRE LIMITEE: <span>00</span> H :<span>88</span> M :<span>88</span> S <span class="three">888</span>MS*
      </p>
      <div class="box">
        <img src="<?php echo $pResUrl; ?>images/banner-box-43.png" alt="" class="img-box">
        <h5>1 an / 1 PC</h5>
        <del>29,99€</del> <strong> 16,99€</strong> 
        <p>Économisez 13€</p>
        <a class="buy-btn" href="http://www.iobit.com/buy.php?product=fr-asc111pc1699&ref=fr_asc111pcpurchase1801<?php echo $refstr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1699-fr')"> <i></i> <span>VITE, J’EN PROFITE</span>
        </a>
      </div>
      <div class="box big">
        <img src="<?php echo $pResUrl; ?>images/banner-box-85.png" alt="" class="img-box">
        <h5>1 an / 3 PCs</h5>
        <del>139,96€</del> <strong>17,99€</strong>
        <p>Économisez 121,97€</p>
        <a class="buy-btn red" href="http://www.iobit.com/buy.php?product=fr-asc11pfiuamc1799&ref=fr_asc113pcpfiuamcpurchase1801<?php echo $refstr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1799-fr')"> <i></i> <span>VITE, J’EN PROFITE</span> </a>
        <p class="bought">
          <img src="<?php echo $pResUrl; ?>images/icon-bought.png" alt="" />
          <span class="buyNum"><?php echo $buyNum?></span> personnes l’ont acheté
        </p>
        <div class="sold"></div>
      </div>
      <div class="box">
        <img src="<?php echo $pResUrl; ?>images/banner-box-64.png" alt="" class="img-box">
        <h5>1 an / 3 PCs</h5>
        <del class="original">49,99€</del> <strong class="price">17,99€</strong>
        <p>Économisez 32€</p>
        <a class="buy-btn"  href="http://www.iobit.com/buy.php?product=fr-asc113pc1799&ref=fr_asc113pcpurchase1801<?php echo $refstr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1799b-fr')">
          <i></i> <span>VITE, J’EN PROFITE</span>
        </a>
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
  <h2>UN PAQUET CADEAU EXCLUSIF À DURÉE LIMITÉE POUR LE NOUVEL AN 2018 ! </h2>
  <dl>
    <dt><img src=" <?php echo $pResUrl; ?>images/iu-box.png" alt=""></dt>
    <dd><h3>IObit Uninstaller 7 PRO </h3></dd>
    <dd>1 an / 1 PC</dd>
    <dd><strong>0€</strong> <del>29,99€</del></dd>
    <dd>Désinstalle puissamment et en toute sécurité <br> les applications et les adwares</dd>
  </dl>
  <dl>
    <dt><img src=" <?php echo $pResUrl; ?>images/pf-box.png" alt=""></dt>
    <dd><h3>Protected Folder </h3></dd>
    <dd>1 an / 1 PC</dd>
    <dd><strong>0€</strong> <del>39,99€</del></dd>
    <dd>Vous prémunir contre la perte, le vol et la <br> fuite de données.</dd>
  </dl>
  <dl>
    <dt><img src=" <?php echo $pResUrl; ?>images/amc-box.png" alt=""></dt>
    <dd><h3>AMC Security PRO <sup> *</sup></h3></dd>
    <dd>1 an / Plusieurs appareils</dd>
    <dd><strong>0€</strong> <del>19,99€</del></dd>
    <dd>Un tout-en-un protecteur et accélérateur <br> pour votre smartphone Android</dd>
  </dl>
  <h4>ASC PRO (<strong>17,99€</strong>) + cadeaux gratuits(<strong>0€</strong>)</h4>
  <a href="http://www.iobit.com/buy.php?product=fr-asc11pfiuamc1799&ref=fr_asc113pcpfiuamcpurchase1801<?php echo $refstr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1799-fr')" class="buy-btn red middle"><i></i> <span>VITE, J’EN PROFITE</span></a>
  <p>PREMIER ARRIVÉ, PREMIER SERVI </p>
</div>

<!--review-->
<div class="review clearfix wrapper">
  <div class="media clearfix">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
    <img src="<?php echo $pResUrl; ?>images/media.png" alt="media images">
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
<div class="buy-bottom">
  <div class="wrapper clearfix">
    <div class="img-box a fl"></div>
    <ul>
      <li class="active" data-url="http://www.iobit.com/buy.php?product=fr-asc11pfiuamc1799&ref=fr_asc113pcpfiuamcpurchase1801<?php echo $refstr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1799-fr')" data-price="17,99€" data-original="139,96€">
        <span class="per">-85%</span>
        <span class="num">1 an / 3 PCs + Cadeaux offerts</span>
      </a>
      <li data-url="http://www.iobit.com/buy.php?product=fr-asc113pc1799&ref=fr_asc113pcpurchase1801<?php echo $refstr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1799b-fr')" data-price="17,99€" data-original="49,99€">
        <span class="per">-64%</span>
        <span class="num">1 an / 3 PCs</span>
      </a>
      <li data-url="http://www.iobit.com/buy.php?product=fr-asc111pc1699&ref=fr_asc111pcpurchase1801<?php echo $refstr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1699-fr')" data-price="16,99€" data-original="29,99€">
        <span class="per">-43%</span>
        <span class="num">1 an / 1 PC</span>
      </a>
    </ul>
    <div class="buy-container fl">
      <del class="original">139,96€</del> <strong class="price">17,99€</strong>
      <p>Économisez <span>121,97€</span></p>
      <a class="buy-btn red middle" href="http://www.iobit.com/buy.php?product=fr-asc11pfiuamc1799&ref=fr_asc113pcpfiuamcpurchase1801<?php echo $refstr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1799-fr')">
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
      <dt><img src="<?php echo $pResUrl; ?>images/cert-medal.png" alt=""></dt>
      <dd><strong>Satisfait ou Remboursé</strong>Garantie satisfait ou remboursé pendant <br>60 jours après la date d’achat.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/cert-verified.png" alt=""></dt>
      <dd><strong>Paiement 100% Sécurisé</strong>IObit vous propose huit modes de paiement <br>sécurisé pour régler vos achats.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/cert-cart.png" alt=""></dt>
      <dd><strong>Obtenir la licence</strong>Vous recevrez le code de licence dans les <br>minutes après l’achat.</dd>
    </dl>
  </div>
</div>

<!--Annotations-->
<div class="annotations wrapper">
  <p>N.B.</p>
  <p>1*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</p>
  <p>2*.Licence gratuite d'AMC Security PRO, la version complète comprend annonces intégrées.</p>
</div>

<!--footer-->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>

<script src="<?php echo getStaticUrl('js/script.js') ?>"></script>
</body>
</html>