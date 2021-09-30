<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
include $pRootUrl.'include/common.inc.php';
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -75% sur Advanced SystemCare Ultimate et obtenez les cadeaux gratuits uniquement pour cet été</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,700i">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <div class="top clearfix">
      <a class="logo fl" href="https://www.iobit.com/fr/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title fr">
        <h1>VENTE FLASH SPÉCIALE D'ÉTÉ</h1>
        <h3>Offre limitée, n’attendez pas la dernière minute !</h3>
      </div>
    </div>
    <div class="clearfix">
      <div class="offer left">
        <span class="skewbox"></span>
        <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/>
        <div class="price">
          <p><b>29</b> <span><b>€99</b> <del>49,99€</del></span></p>
          <!-- <a class="buybtn gray" href="https://www.iobit.com/buy.php?product=fr-ascu123pc2999&ref=fr_ascu123pcpurchase1904<?php echo $refStr;?>&aff=&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1904-fr');"> -->
		  <a class="buybtn gray" href="https://www.iobit.com/buy.php?product=fr-ascu143pc2999&ref=fr_ascu143pc2999indexpurchase2008<?php echo $refStr;?>&aff=&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase2008-fr');">
            VITE, J’EN PROFITE
          </a>
        </div>
        <!-- <div class="mask"><span>TERMINE</span></div> -->
      </div>
      <div class="offer right">
        <span class="skewbox"></span>
        <img src="<?php echo getStaticUrl('images/ascu-box-gift.png')?>" alt=""/>
        <div class="price">
          <p><b>29</b> <span><b>€99</b> <del>129,97€</del></span></p>
          <!-- <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-ascu123pcpfsd&ref=fr_ascu123pcpfsdpurchase1906<?php echo $refStr;?>&aff=&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1906-fr');"> -->
		  <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-au14iupf2999&ref=fr_ascu143pciupf2999indexpurchase2008<?php echo $refStr;?>&aff=&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase2008b-fr');">
            VITE, J’EN PROFITE
          </a>
        </div>
        <div class="countdown countdown1"><i class="all-icons"></i> Plus que <b>09</b> M <b>10</b> s <b>18</b> Ms*</div>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo getStaticUrl('images/payment.jpg')?>" alt=""/>
</div>
<!-- payment end -->

<!-- intro start -->
<div class="intro wrapper">
  <h2>Offre votre PC une meilleure protection avec le Moteur Antivirus de Bitdefender!</h2>
  <div class="clearfix">
    <img class="asc-box fl" src="<?php echo getStaticUrl('images/ascu-screen.png')?>" alt=""/>
    <div class="high-light fl">
      <ul>
        <li><i class="all-icons">√</i> Protège PC contre virus, logiciels espions, pirates, phishing, botnets.</li>
        <li><i class="all-icons">√</i> Protège PC pro-activement des attaques de ransomware tel que WannaCry.</li>
        <li><i class="all-icons">√</i> Masque votre empreinte numérique et protège votre vie privée en ligne en temps réel.</li>
        <li><i class="all-icons">√</i> Accélère, nettoie et répare de divers problèmes de PC en quelques clics.</li>
        <li><i class="all-icons">√</i> Léger, rapide et compatible avec d’autres produits de sécurité.</li>
      </ul>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- complimentary start -->
<div class="complimentary">
  <div class="wrapper">
    <h2>Profitez d’un paquet cadeau à durée limitée, dépêchez-vous !</h2>
    <div class="gift-list clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></dt>
        <dd>
          <h3>1 AN / 1 PC <strong>0€ </strong> <del>29,99€</del></h3>
          <ul>
            <li>
              Maximisez les performances du 
              disque dur et de votre PC.
            </li>
          </ul>
        </dd>
      </dl>
      <dl class="fr">
        <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt=""/></dt>
        <dd>
          <h3>1 AN / 1 PC <strong>0€ </strong> <del>39,99€</del></h3>
          <ul>
            <li>Protégez vos fichiers et vos données importants contre le vol, la perte et les fuites.</li>
          </ul>
        </dd>
      </dl>
    </div>
    <div class="price">
      <p><b>29</b> <span><b>€99</b> <del>39,99€</del></span></p>
      <!-- <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-ascu123pcpfsd&ref=fr_ascu123pcpfsdpurchase1906<?php echo $refStr;?>&aff=&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1906-fr');"> -->
	  <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-au14iupf2999&ref=fr_ascu143pciupf2999indexpurchase2008<?php echo $refStr;?>&aff=&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase2008b-fr');">
        VITE, J’EN PROFITE
      </a>
    </div>
    <div id="centercount" class="countdown countdown1"><b>09</b> M: <b>10</b> s: <b>18</b> Ms*</div>
  </div>
</div>
<!-- complimentary end -->

<!--review-->
<div class="wrapper media">
  <div class="wrapper">
    <h2>Recommandé par ces médias</h2>
    <img class="media-img" src="<?php echo getStaticUrl('images/media.png')?>" alt="media images">
  </div>
</div>
<div class="wrapper clearfix">
  <div class="review">
    <div class="reviews">
      <h2>Avis des utilisateurs</h2>
      <h3>"Advanced SystemCare Ultimate est vraiment très utile."</h3>
      <p>"J’avait un problème de toujours désordonner mon ordianteur auparavant. Puis, j’ai eu la première copie de l’Advanced Systemcare. Je ne perds plus mon temps. Parce que la fonction d’antivirus est incluse dans ce produit, il n’a pas besoin d’installer un autre logiciel. Advanced System Care Ultimate est très utile. Maintenant, mon ordinateur est toujours à jour et fonctionne aussi rapide comme le cerf ! Les autres produits ne le peuvent pas ; il n’y a pas de conflits incessants non plus."</p>
    </div>
    <div class="reviews">
      <h2>Avis des utilisateurs</h2>
      <h3>"Je recommande l’advanced systemcare ultimate comme un antivirus/optimiseur de système."</h3>
      <p>"Sur la version passée de l’ advanced systemcare ultimate, j’ai pas de problèmes presque sur tout, système, malware, etc. Et maintenant, il a été à jour, plus de fonctionnalités rendent mon ordinateur fonctionne à 5x plus rapide qu’auparavant. J’aime sa nouvelle apparance aussi. Alors, je vais le recommander comme un antivirus/optimiseur de système quand je répare l’ordinateurs des autres." —— Traduit l'anglais</p>
    </div>
    <div class="reviews o1net active">
      <h2>Avis des Médias</h2>
      <h3>"L'utilitaire de nettoyage s'améliore encore et s'accompagne d'un antivirus performant, offrant les dernières signatures de virus et une protection optimale."</h3>
      <p>"Cette association garantit un niveau de détection et de sécurité maximal pour votre PC. Advanced SystemCare Ultimate détecte et supprime les virus, trojans, vers et autres logiciels intrusifs, et propose également des outils de défragmentation et de gestion des ressources de votre PC. Vous disposez ainsi d'une protection proactive et d'un gain de performance et de stabilité de votre machine."</p>
    </div>
    <div class="reviews">
      <h2>Avis des utilisateurs</h2>
      <h3>"Parfait! Il fait tout tout seul et bien!"</h3>
      <p>"Parfait! Il fait tout tout seul et bien! On ne s'occupe de rien, il s'occupe de tout. Je suis agréablement surpris à la vitesse que le logiciel détecte et répare les erreurs et autres problèmes qui peuvent être détectés. Outils parfaits pour des performances au top. Bravo jamais je n'ai pu avoir aussi efficace, l'ordi est prêt quelques minutes! Ce logiciel est formidable, simple, efficace, rapide. Je le recommande vivement. Merci à IObit!"</p>
    </div>
    <div class="reviews">
      <h2>Avis des utilisateurs</h2>
      <h3>"C'est comme pratiqué un sport de ligue de garage et passer au Ligue Majeur. "</h3>
      <p>"Pour ma part depuis que j’ai découvert l'efficacité de Advanced SystemeCare Ultimate par l'entremise d'un ami, et bien je ne peux m'en passer. Rien de mieux pour nettoyer et protéger mon système. C'est comme pratiqué un sport de ligue de garage et passer au Ligue Majeur. Et bien sûr le Driver Booster-Smart Defrag-Protected Folder font aussi parti de mes préféré. Et quand je le peut, je n'hésite pas en parler à des amis."</p>
      </div>
    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett"><span></span></div>
        <strong>Rod Garnett</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"><span></span></div>
        <strong>Dareen Lim</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/01net.png" alt="01net"><span></span></div>
        <strong>01net</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/formaglio-lorenzo.png" alt="Formaglio Lorenzo"><span></span></div>
        <strong>Formaglio Lorenzo</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/mario-morel.png" alt="Mario Morel"><span></span></div>
        <strong>Mario Morel</strong>
      </li>
    </ul>
  </div>
</div>
<!-- end review -->

<!-- comparison start -->
<div class="comparison wrapper">
  <h2>Pourquoi choisissez-vous l’Advanced SystemCare Ultimate 14 ?</h2>
  <h3>Meilleure protection, et plus aucun retard de performance. Voir la comparaison ci-dessous</h3>
  <div class="ctable">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text"></th>
        <th class="blue">
          <p><span>Advanced SystemCare</span> Ultimate</p>
        </th>
        <th>AVG<span>Anti-virus</span></th>
        <th>Norton Security<span>Deluxe</span></th>
        <th>Avast! Pro<span>Antivirus</span></th>
        <th>Microsoft<span>Security Essentials</span></th>
        <th>McAfee® AntiVirus</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="title first">Taux de Détection</td>
        <td class="gray">Très élevé</td>
        <td>Normal</td>
        <td>Elevé</td>
        <td>Normal</td>
        <td>Elevé</td>
        <td>Elevé</td>
      </tr>
      <tr>
        <td class="title">Ralentissement des Performances</td>
        <td class="gray">Non</td>
        <td>Oui</td>
        <td>Oui</td>
        <td>Oui</td>
        <td>Oui</td>
        <td>Oui</td>
      </tr>
      <tr>
        <td class="title">Meilleur Nettoyage et Optimisation</td>
        <td class="gray"><i class="tb-icons red">√</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
      </tr>
      <tr>
        <td class="title">Plus de 20 outils Supplémentaires pour Les Performances de PC</td>
        <td class="gray"><i class="tb-icons red">√</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
        <td><i class="tb-icons">×</i></td>
      </tr>
      </tbody>
    </table>
  </div>
  <dl class="comlist">
    <dt>
      <i class="all-icons">√</i>
      Taux de détection imbattable et protection maximale
    </dt>
    <dd>
      Un clic pour nettoyer les virus cachés et obstinés, les chevaux de Troie, les vers, les logiciels espions, les logiciels publicitaires et divers logiciels malveillants. Advanced SystemCare 
      Ultimate fournit également une protection permanente, automatisée et proactive contre toutes les menaces de sécurité Internet, avec une mise à jour rapide de la base de données 
      antivirus.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="all-icons">√</i>
      Profitez de la sécurité renforcée sans ralentissement du système
    </dt>
    <dd>
      Votre système fonctionne à sa vitesse maximale sans retard de performance, en raison de notre technologie de sécurité Internet leader sur le marché.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="all-icons">√</i>
      Surfez en toute sécurité, recherchez, téléchargez et partagez avec confiance
    </dt>
    <dd>
      La technologie Proactive Virus Control surveille le comportement des processus en temps réel, analyse les fichiers partagés par courrier électronique et bloque les menaces possibles. Le 
      taux de détection inégalé vous assure un environnement plus sécurisé lors de l’utilisation de votre PC.
    </dd>
  </dl>
  <dl class="comlist">
    <dt>
      <i class="all-icons">√</i>
      Obtenez une performance optimisée et profitez de votre PC comme s’il était neuf
    </dt>
    <dd>
      La puissante capacité de mise au point sur PC ayant déjà fait ces preuves, libère toute la puissance de votre PC. Grâce à l'optimisation en temps réel et à la fonction ActiveBoost, les 
      ressources système sont gérées intelligemment pour vous assurer d'avoir un PC super rapide.
    </dd>
  </dl>
</div>
<!-- comparison end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img class="on" src="<?php echo getStaticUrl('images/ascu-box-gift.png')?>" alt=""/>
      <img class="pcs" src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/>
    </div>
    <ul class="fl">
      <li class="pc on" data-num="1"><span>1 AN / 3 PC + Cadeau Gratuit </span> <strong><small>-</small>75<small class="last">%</small></strong></strong></li>
      <li class="pcs" data-num="0"><span>1 AN / 3 PC </span> <strong><small>-</small>40<small class="last">%</small></strong></li>
    </ul>
    <div class="price fr">
      <p><b>29</b> <span><b>€99</b> <del>119,97€</del></span></p>
      <!-- <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-ascu123pcpfsd&ref=fr_ascu123pcpfsdpurchase1906<?php echo $refStr;?>&aff=&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1906-fr');"> -->
	  <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-au14iupf2999&ref=fr_ascu143pciupf2999indexpurchase2008<?php echo $refStr;?>&aff=&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase2008b-fr');">
        VITE, J’EN PROFITE
      </a>
    </div>
  </div>
</div>
<!-- footbuy enb -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt="" /></dt>
        <dd><h4>Satisfait ou Remboursé</h4></dd>
        <dd>Garantie satisfait ou remboursé <span>pendant 60 jours après la date d’achat.</span></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy-secure.png" alt="" /></dt>
        <dd><h4>Paiement 100% Sécurisé</h4></dd>
        <dd>IObit vous propose huit modes de paiement sécurisé pour régler vos achats.</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/cart.png" alt="" /></dt>
        <dd><h4>Obtenir la licence</h4></dd>
        <dd>Vous recevrez le code de licence dans <span>les minutes après l’achat.</span></dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/24hours.png" alt="" /></dt>
        <dd><h4>Service Client à votre écoute</h4></dd>
        <dd>Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.</dd>
      </dl>
    </div>
    <!-- service end -->

    <!-- annotation start -->
    <dl class="annotation">
      <dt>N.B.</dt>
      <dd>1*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
    </dl>
    <!-- annotation end -->

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>