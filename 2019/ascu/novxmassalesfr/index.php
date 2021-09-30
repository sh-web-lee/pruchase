 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
$refStr='';
//if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
//    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
//  $refStr.='-'.$_GET['st'];
//}
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
include $pRootUrl.'include/common.inc.php';
if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
  ob_get_clean();
  $date = $_GET['d'];
  $c_name = 'novxmassalesfr' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['pageView']==1){
      $packsNum=3;
    }else {
      $packsNum = 82;
    }
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 0, time() + 3600 * 24);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
      if (rand(1, 100) % 2 == 0) {
        $packsNum++;
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -75% sur Advanced SystemCare Ultimate pour bloquer les virus et cybermenaces et améliorer les performances de votre PC !  </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="lamp">
    <div class="light hide"></div>
    <div class="light01 hide"></div>
    <div class="light02 hide"></div>
  </div>
  <div class="snow"></div>
  <div class="wrapper">
   
    <div class="star"></div>
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Soldes d’Hiver 2021 </h1>
    <!-- <h2>Jusqu'à -75% ! Achetez-en 1 et obtenez-en 2 GRATUITS ! N'attendez pas la dernière minute. </h2> -->
    <div class="box">
      <dl>
        <dt> Au lieu de : <del>59,99€</del></dt>
        <dd>
          <strong>29,99€</strong>
          <span>1 An, 3 PC</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=fr-ascu143pc2999&ref=fr_ascu143pc2999indexpurchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1911b-fr');" class="buybtn small"> J’en profite !</a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt> Au lieu de : <del>129,97€</del></dt>
        <dd>
          <strong>29,99€</strong>
          <span>1 An,  <b>3 PC</b></span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/ascu-gift-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=fr-au14iupf2999&ref=fr_ascu143pciupf2999indexpurchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_ascu" 
         onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1911-fr');" class="buybtn">J’en profite !</a>
      <p>Plus que <b class="pickNum">83</b> disponibles !</p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- intro -->
  <div class="boxshot wrapper">
    <h2> Maintenez votre système exempt de virus et de fichiers inutiles pour un PC sûr, performant et rapide</h2>
    <dl>
      <dt> <img src="<?php echo getStaticUrl('images/icons-01.png')?>" alt=""> Protection de l’ordinateur</dt>
      <dd>
        <strong>Détection imbattable</strong>
        <p>Détection précise des menaces avec le moteur de Bitdefender.</p>
      </dd>
       <dd>
        <strong>Protection en temps réel</strong>
        <p>Protégez-vous contre les virus, ransomwares, logiciels espions, chevaux de Troie, etc, en temps réel. </p>
      </dd>
       <dd>
        <strong>Protection de la vie privée</strong>
        <p>Empêchez les hackers de rechercher ce que vous lisez, visualisez et achetez en ligne.</p>
      </dd>
    </dl>
    <img src="<?php echo getStaticUrl('images/boxshot-ascu.png')?>" alt="" class="img-box">
    <dl class="right">
      <dt> <img src="<?php echo getStaticUrl('images/icons-02.png')?>" alt=""> Optimisation de l’ordinateur</dt>
      <dd>
        <strong>PC plus rapide (x200%)</strong>
        <p>Réduisez le ralentissement du système et accélérez votre PC (jusqu’à 200%).</p>
      </dd>
       <dd>
        <strong>Internet plus rapide (x300%)</strong>
        <p>Accélérez le téléchargement, la navigation, les jeux et la visualisation YouTube 4 fois plus rapides.</p>
      </dd>
       <dd>
        <strong>Nettoyage en profondeur</strong>
        <p>Résolvez les problèmes de registre pour réduire des crashs du système et les messages d’erreur de Windows.</p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->

  <div class="gift-content wrapper clearfix">
    <h2> Découvrez les cadeaux Exclusifs, rien que pour vous !</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""></dt>
      <dd>
        <strong>0€</strong> <del> 39,99€</del>
        <p>Il fait office de coffre-fort pour vos fichiers et dossiers.</p>
        <p>Un mot de passe empêche quiconque de les ouvrir.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt=""></dt>
      <dd>
        <strong>0€</strong>  <del> 29,99€</del>
        <p>Désinstallez proprement les programmes indésirables et nettoyez les résidus.</p>
        <p>Mettez à jour tous les logiciels essentiels en un clic.</p>
      </dd>
    </dl>
  </div>
  <div class="wrapper">
    <div class="betwwen-buy">
      <div class="content">
        <img src="<?php echo getStaticUrl('images/between-buy-box.png')?>" alt="" class="img-box">
        <dl>
          <dt><strong>  29,99€</strong>  <del>129,97€</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=fr-au14iupf2999&ref=fr_ascu143pciupf2999indexpurchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_ascu" 
                 onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1911-fr');" class="buybtn red"> J’en profite !    </a></dd>
          <dd class="last">Plus que <b class="pickNum">83</b> disponibles !</dd>
        </dl>
      </div>
    </div>
  </div>


</div>
<!-- end container -->
<!-- comparison -->
<div class="comparison wrapper">
  <h2>         Aperçu des différences entre votre version actuelle et la version PRO ?</h2>
  <div class="ctable">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th class="text"></th>
        <th class="space"></th>
        <th class="itema">
          Votre version actuelle
        </th>
        <th class="space"></th>
        <th class="itemb"><p>PRO</p></th>
      </tr>
      </thead>
      <tbody>
        <tr class="gray">
          <td class="text"><img src="<?php echo getStaticUrl('images/icons-03.png')?>" alt=""> Protection Complète      </td>
          <td class="space"></td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="text">Luttez contre les virus en temps réel</td>
          <td class="space"></td>
          <td class="itema">Expire après 30 jours</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Protégez vos fichiers importants contre les ransomwares</td>
          <td class="space"></td>
          <td class="itema">Expire après 30 jours</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Protégez-vous des sites Web malveillants et de phishing</td>
          <td class="space"></td>
          <td class="itema">Expire après 30 jours</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Bloquez les accès secrets à votre identité et à votre vie privée</td>
          <td class="space"></td>
          <td class="itema">Expire après 30 jours</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Capturez les intrus qui tentent d’utiliser votre ordinateur </td>
          <td class="space"></td>
          <td class="itema">Expire après 30 jours</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr class="gray">
          <td class="text"><img src="<?php echo getStaticUrl('images/icons-04.png')?>" alt=""> Optimisation Maximale</td>
          <td class="space"></td>
          <td class="itema"></td>
          <td class="space"></td>
          <td class="itemb"></td>
        </tr>
         <tr>
          <td class="text">Nettoyez les fichiers indésirables et les registres inutiles</td>
          <td class="space"></td>
          <td class="itema">Expire après 30 jours</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Accélérez la vitesse de votre ordinateur (jusqu’à 200%) </td>
          <td class="space"></td>
          <td class="itema">Expire après 30 jours</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Augmentez votre vitesse de navigation Internet (jusqu’à 300%)</td>
          <td class="space"></td>
          <td class="itema">Expire après 30 jours</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
        <tr>
          <td class="text">Réduisez les plantages de Windows et les messages d’erreur </td>
          <td class="space"></td>
          <td class="itema">Expire après 30 jours</td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons"></i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr><th class="text"></th>
        <th class="space"></th>
        <th class="itema"></th>
        <th class="space"></th>
        <th class="itemb">
          <strong class="prime">29,99€</strong> <del>129,97€</del>
          <a href="https://www.iobit.com/buy.php?product=fr-au14iupf2999&ref=fr_ascu143pciupf2999indexpurchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_ascu" 
             onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1911-fr');" class="buybtn change-buybtn">J’en profite !</a>
        </th>
      </tr></tfoot>
    </table>
  </div>
</div>
<!-- end comparison -->
<!-- review -->
  <div class="review wrapper">
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
<!-- end review -->

<div class="awards">
    <div class="wrapper">
      <h2>APPROUVÉ PAR CES MÉDIAS CÉLÈBRES DU MONDE</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
    </div>
  </div>
  <div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dt>
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
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Note:  </dt>
        <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion</dd>
        <dd>*.Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
      </dl>
      <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
    <!-- footer end -->
  </div>
</div>


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>