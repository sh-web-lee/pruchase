<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;
$buyNum = number_format($buyNum);

$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Jusqu'à -70% sur Advanced SystemCare Ultimate - Vente Flash Spéciale Nouvel An - IObit</title>
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <div class="title">
      <h1>Vente Flash Spéciale Nouvel An</h1>
      <p>Profitez d'un cadeau exclusif uniquement pour les fêtes de fin d'année</p>
    </div>
    <div class="panel clearfix">
      <div class="box small">
        <p><img src="<?php echo getStaticUrl('images/asc.png')?>" alt="" /></p>
        <p>
          <strong>29</strong>
          <span><b>€99</b> <del class="original">49,99€</del></span>
        </p>
        <a class="buy-btn" href="https://www.iobit.com/buy.php?product=fr-ascu123pc2999&ref=fr_ascu123pcpurchase1812<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812bfr');">
          J’EN PROFITE VITE
        </a>
      </div>
      <div class="box">
        <ul id="countdown2" class="countdown countdowntwo">
          <li><strong>00</strong> H : </li>
          <li><strong>00</strong> M : </li>
          <li><strong>00</strong> : </li>
          <li><strong>000</strong> * </li>
        </ul>
        <p><img src="<?php echo getStaticUrl('images/ascpf.png')?>" alt="" /></p>
        <p>
          <strong>29</strong>
          <span><b>€99</b> <del class="original">89,98€</del></span>
        </p>
        <a class="buy-btn red" href="https://www.iobit.com/buy.php?product=fr-ascu123pcpf&ref=fr_ascu123pcpfpurchase1812<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812fr'); ">
          J’EN PROFITE VITE
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
<div class="introduction">
  <div class="wrapper">
    <h2>Offre votre PC une meilleure protection avec le Moteur Antivirus de Bitdefender!</h2>
    <div class="clearfix">
      <img class="asc-box fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
      <div class="high-light fl">
        <ul>
          <li><i>√</i> Protège PC contre virus, logiciels espions, pirates, phishing, botnets.</li>
          <li><i>√</i> Protège PC pro-activement des attaques de ransomware tel que WannaCry.</li>
          <li class="three"><i>√</i> <span>Masque votre empreinte numérique et protège votre vie privée en <br>ligne en temps réel.</span></li>
          <li><i>√</i> Accélère, nettoie et répare de divers problèmes de PC en quelques clics.</li>
          <li><i>√</i> Léger, rapide et compatible avec d’autres produits de sécurité.</li>
        </ul>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <div class="donation clearfix">
      <div class="ascu-box fl"><img src="<?php echo getStaticUrl('images/ascu-gift.png')?>" alt="Advanced Systemcare Ultimate"/></div>
      <div class="all-icons add fl"></div>
      <div class="pf-box fl"><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></div>
      <dl class="fl">
        <dt><h4>Profitez d’un PC plus sûr grâce à un outil PRO supplémentaire</h4></dt>
        <dd>Protected Folder <b>0€</b> <del>39,99€</del></dd>
        <dd>ll fait office de coffre-fort pour vos fichiers et dossiers</dd>
        <dd>Un mot de passe empêche quiconque de les ouvrir</dd>
      </dl>
    </div>
  </div>
</div>

<div class="centbuy">
  <div class="wrapper">
    <p>
      <strong>29</strong>
      <span><b>€99</b> au lieu de <del class="original">89,98€</del></span>
    </p>
    <a class="buy-btn red" href="https://www.iobit.com/buy.php?product=fr-ascu123pcpf&ref=fr_ascu123pcpfpurchase1812<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812fr'); ">
      J’EN PROFITE VITE
    </a>
    <p class="bought">Premier arrivé, premier servi</p>
  </div>
</div>

<!--review-->
<div class="wrapper media">
  <h2>Recommandé par ces médias</h2>
  <img class="media-img" src="<?php echo getStaticUrl('images/media.png')?>" alt=""/>
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

<!--comparison-->
<div class="comparison wrapper">
  <h2>Pourquoi choisissez-vous l’Advanced SystemCare Ultimate 12?</h2>
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

<!--buy-bottom-->
<div class="buy-bottom">
  <div class="wrapper clearfix">
    <div class="img-box fl">
      <img class="active gift" src="<?php echo getStaticUrl('images/bot-ascgift.png')?>" alt="" />
      <img class="asc" src="<?php echo getStaticUrl('images/bot-asc.png')?>" alt="" />
    </div>
    <ul>
      <li class="active" data-num="1">
        <h4>1 an / 3 PC + Cadeau offert</h4>
        <div class="off">-85%</div>
      </li>
      <li data-num="0">
        <h4>1 an / 3 PC</h4>
        <div class="off sm-off">-60%</div>
      </li>
    </ul>
    <div class="buy-container fr">
      <p>
        <strong>29</strong>
        <span><b>€99</b> <del class="original">89,97€</del></span>
      </p>
      <a class="buy-btn red middle" href="https://www.iobit.com/buy.php?product=fr-ascu123pcpf&ref=fr_ascu123pcpfpurchase1812<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1812fr'); ">
          <i></i>
          <span>J’EN PROFITE VITE</span>
      </a>
    </div>
  </div>
</div>

<!--certification-->
<div class="certification clearfix wrapper">
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/cert-medal.png')?>" alt="" /></dt>
      <dd><strong>Satisfait ou Remboursé</strong> Garantie satisfait ou remboursé pendant <br>60 jours après la date d’achat.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/cert-verified.png')?>" alt="" /></dt>
      <dd><strong>Paiement 100% Sécurisé</strong> IObit vous propose huit modes de paiement <br>sécurisé pour régler vos achats.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/cert-cart.png')?>" alt="" /></dt>
      <dd><strong>Obtenir la licence</strong> Vous recevrez le code de licence dans les <br>minutes après l’achat.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt="" /></dt>
      <dd><strong>Service Client à votre écoute</strong> Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.</dd>
    </dl>
  </div>
</div>

<!--Annotations-->
<div class="annotations wrapper">
  <p>Note:</p>
  <p>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</p>
</div>

<!--footer-->
<div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>

<div class='popout'><p>La clé de licence d'ASCU v11 est aussi <strong>valide pour ASCU v12.</strong></p></div>

<script src="<?php echo getStaticUrl('js/script.js') ?>"></script>
</body>
</html>