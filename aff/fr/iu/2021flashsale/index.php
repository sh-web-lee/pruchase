<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$refStr=empty($_GET['ref']) ? 'fraff_iu10_2021flashsale' : ($_GET['ref']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Vente Flash - Jusqu'à -85% sur IObit Uninstaller 10 PRO</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
  <?php echo $gJavascript ['public']; ?>
  <?php echo $gJavascript ['head'] ?>
  <script>
    var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
    var paramTo = MApp(2.2).url.getParameters('to');
    if ((paramTo == 'enable') || (paramTo == 'installmonitor')) {
        window.location.href = "./installmonitor.php" + queryStr;
    } else if(paramTo == 'enablenew') {
      // window.location.href = "https://purchase.iobit.com/it/iu/installmonitorb.php" + queryStr;
      window.location.href = "./installmonitorb.php" + queryStr;
    }
  </script>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank"></a>
    <h1>Ventes Flash</h1>
    <h3>Profitez des meilleures offres jamais vues auparavant !</h3>
    <div class="bundle-container clearfix">
      <div class="bundle left">
        <img src="<?php echo getStaticUrl('images/bundle-0.png')?>" alt=""/>
        <p class="price">
          <b class="discount">15</b>
          <span>
            <i>€99</i>
            <del class="original">39,99€</del>
          </span>
        </p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fraff-iu101y3pc1599&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu102021flashsale')"
        >VITE, J'EN PROFITE</a>
      </div>
      <div class="bundle right">
        <div class="countdown-container"><i></i><span>12</span> H : <span>24</span> M : <span>52</span> : <span>235</span>*
        </div>
        <img src="<?php echo getStaticUrl('images/bundle-1.png')?>" alt=""/>
        <p class="price">
          <b class="discount">15</b>
          <span>
            <i>€99</i>
            <del class="original">109,97€</del>
          </span>
        </p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fraff-iu103pcsdpf1599&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu102021flashsale')">VITE, J'EN PROFITE</a>
        <p class="note"><span>7,390,557</span> personnes l’ont acheté</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!--payment start-->
<div class="payment"></div>
<!--payment end-->

<!-- benfits start -->
<div class="feature clearfix">
  <div class="wrapper">
    <h2>Profitez d’un PC plus léger & une navigation</h2>
    <h4>plus sûre avec IObit Uninstaller PRO !</h4>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-00.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-05.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.png')?>" alt=""/>
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.png')?>" alt=""/>
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li class="fun1">
          <!-- <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
          </div> -->
        </li>
        <li class="fun2"></li>
        <li class="fun3"></li>
        <li class="fun4"></li>
      </ul>
    </div>
    <div class="detail-list">
      <dl class="two">
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>Désinstallation Complète</h3>
          <p>Désinstallez les programmes tenaces et groupés, annulez automatiquement les modifications du système apportées par l'installation d'un programme lors de sa désinstallation.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>Navigation sans publicité</h3>
          <p>Désinstallez les plug-ins malveillants et publicitaires et supprimez les notifications du navigateur pour assurer une expérience de navigation propre et sécurisée.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Outil Software Health</h3>
          <p>Détecte automatiquement les restes existants des désinstallations précédentes, les logiciels obsolètes et les modules malveillants et les répare en un seul clic.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Mise à jour de logiciel sécurisée</h3>
          <p>Mettez à jour en un seul clic des logiciels sélectionnés sans intervention de l'utilisateur.</p>
        </dd>
      </dl>
      <a class="textlink" href="Javascript:void(0);">En savoir plus sur la version PRO >></a>
    </div>
  </div>
</div>
<!-- benfits end -->

<!-- gifubox start -->
<div class="giftbox">
  <h2>Les cadeaux exclusifs, rien que pour vous!</h2>
  <div class="wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></dt>
        <dd>
          <h3>Smart Defrag 7 PRO <span>(1 an / 1 PC)</span></h3>
          <p>Défragmenter automatiquement les fichiers et disques sélectionnés en temps réel.</p>
          <p>Maximiser les performances et la durée de votre disque.</p>
        </dd>
      </dl>
      <dl class="pf">
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
        <dd>
          <h3>Protected Folder <span>(1 an / 1 PC)</span></h3>
          <p>Il fait office de coffre-fort pour vos fichiers et dossiers.</p>
          <p>Un mot de passe empêche quiconque de les ouvrir.</p>
        </dd>
      </dl>
    </div>
    <a href="https://www.iobit.com/buy.php?product=fraff-iu103pcsdpf1599&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>" 
       onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu102021flashsale')">
      VITE, J'EN PROFITE
    </a>
    <div class="countdown-container countdown-lab"><i></i><span>12</span> H : <span>24</span> M : <span>52</span> : <span>235</span>*</div>
  </div>
</div>
<!-- gifubox end -->

<!-- review start -->
<div class="review">
  <h2 class="on">
    Nous faisons de notre mieux pour satisfaire <br>
    nos clients où que vous soyez !
  </h2>
  <div class="content">
    <h3>Ce qu’ils disent</h3>
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></li>
      <li class="two"><img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC.MAGAZINE"></li>
      <li class="three"><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></li>
      <li class="four"><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></li>
      <li class="five"><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></li>
      <li class="six"><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></li>
    </ul>
    <div class="details">
      <div>
        <h4>Lovro Žužić</h4>
        <p>«Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. »</p>
      </div>
      <div class="active">
        <h4>PC.MAGAZINE</h4>
        <p>«Cet utilitaire, compatible parfaitement avec Win 10, est mesure de désinstaller des applications en toute simplicité, y compris des fichiers restants dans le registre Windows lors que vous supprimez des logiciels en utilisant le désinsatalleur intégré sous Windows, ainsi que les barres d’outils et plug-ins du navigateur agaçants. En un mot, si vous utilisez un PC sous Windows, je vous recommande IObit Uninstaller. »</p>
      </div>
      <div>
        <h4>MakeUseOf</h4>
        <p>«IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Il proposera aux utilisateurs une fonctionnalité "Analyse Approfondie" pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. »</p>
      </div>
      <div>
        <h4>Jeff A Watts</h4>
        <p>«Je recommande vivement ce désinstallateur en tant que programme fiable et sûr qui permet de désinstaller les programmes les plus tenaces! Plus important encore, supprimer le code "caché" que le programmeur avait l'intention de laisser, ce qui obligerait ensuite les publicités à être réinstallées! Tous les produits IObit sont sûrs et faciles à utiliser pour optimiser votre PC. »</p>
      </div>
      <div>
        <h4>Lynette van Niekerk</h4>
        <p>«J'aime le fait qu'il désinstalle tous les fragments restants. Il dispose également d'un programme de mise à jour du logiciel qui vous rappelle lorsque l'un des programmes doit être mis à jour. La désinstallation des programmes de traitement par lots en fait un outil de choix. En fait, c’est essentiellement ce dont vous avez besoin pour garder votre ordinateur en état de fonctionner. »</p>
      </div>
      <div>
        <h4>Paulo Martins</h4>
        <p>«Il est rapide et très efficace, il est incomparable face au programme de désinstallation de base de Windows. Il nettoie entièrement tous les résidus de programme et évite ainsi tout ralentissement de l'ordinateur. J’utilise IObit Uninstaller depuis quelques mois et je ne peux désormais plus m’en passer. Je le recommande à mes amis et à ma famille. Merci, IObit Uninstaller est fantastique. »</p>
      </div>
    </div>
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- review end -->

<!-- comparsion start -->
<div class="comparsion wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text">Savoir ce que PRO édition peut faire pour vous?</th>
      <th class="space"></th>
      <th class="itema">
        IObit Uninstaller 10 <strong>PRO</strong>
      </th>
    </tr>
    </thead>
    <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""/></td>
        <td class="virtue">
          <span>Désinstaller un programme depuis sa fenêtre ouverte, de son icône surle bureau ou de l'icône de la barre d'état système</span>
        </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt=""/></td>
        <td class="virtue">Supprimer plug-ins & extensions sur Edge, Chrome, IE, Firefox, etc </td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr class="three">
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt=""/></td>
        <td class="virtue"><span>Annuler automatiquement les modifications du système apportées par un programme lors de la désinstallation <sup class="nou">nouveau </sup></span></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""/></td>
        <td class="virtue"><span>Prise en charge de la désinstallation des programmes tenaces</span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""/></td>
        <td class="virtue"><span>Détecter et désinstaller les bundlewares et les plug-ins regroupés </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""/></td>
        <td class="virtue"><span>Mettre à jour automatiquement tous les logiciels obsolètes choisis </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""/></td>
        <td class="virtue"><span>Désinstaller plug-ins malveillants pour un navigateur plus sécurisé</span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""/></td>
        <td class="virtue">Expérience en ligne plus rapide et plus sûre en activant Déinstallation Adware <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""/></td>
        <td class="virtue"><span>Nettoyer automatiquement les restes que d’autres utilitaires ont échoué à supprimer </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""/></td>
        <td class="virtue">Mise à jour Auto vers la Dernière Version</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""/></td>
        <td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>    
    </tbody>
  </table>
</div>
<!-- comparsion end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img class="small on" src="<?php echo getStaticUrl('images/iu-one-box.png') ?>" alt="" />
      <img class="small" src="<?php echo getStaticUrl('images/iu-three-box.png') ?>" alt="" />
    </div>
    <ul class="fl">
      <li class="on" data-num="1"><span>1 An / 3 PC<em> + cadeaux exclusifs</em></span></li>
      <li data-num="0"><span>1 An / 3 PC</span></li>
    </ul>
    <div class="price fl">
      <p>
        <b class="discount">15</b>
        <span>
            <i>€99</i>
            <del class="original">109,97€</del>
          </span>
      </p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fraff-iu103pcsdpf1599&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>" 
         onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu102021flashsale')">
        VITE, J'EN PROFITE
      </a>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl class="astisfait fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
    <dd>
      <h3>Satisfait ou Remboursé</h3>
      <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
    </dd>
  </dl>
  <dl class="paiement fl">
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png') ?>" alt=""></dt>
    <dd>
      <h3>Paiement 100% Sécurisé</h3>
      <P>IObit vous propose sept modes de paiement sécurisé pour régler vos achats.</P>
    </dd>
  </dl>
  <dl class="modes fl">
    <dt><img src="<?php echo getStaticUrl('images/modes.png') ?>" alt=""></dt>
    <dd>
      <h3>Modes de paiement acceptés</h3>
      <p>Nous vous proposons 7 modes de paiement</p>
    </dd>
  </dl>
  <dl class="service-client fr">
    <dt><img src="<?php echo getStaticUrl('images/service-client.png') ?>" alt=""></dt>
    <dd>
      <h3>Service Client à votre écoute</h3>
      <p>
        Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.
      </p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer wrapper">
  <div class="notes">
    <p>Note:</p>
    <p>*. Les données peuvent varier en fonction du système ou de l'ordinateur.</p>
    <p>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</p>
  </div>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tous droits réservés</p>
</div>
<!-- footer end -->

<!-- <div class="popbg"></div>
<div class="popbox">
  <h2>FELICITATIONS</h2>
  <h4>Vous profiterez de <b>10%</b> de réduction supplémentaire !</h4>
  <div class="clearfix">
    <img class="left fl" src="<?php echo getStaticUrl('images/asc-pop-box.png') ?>" alt="" />
    <div class="right fl">
      <h3>Offre expirera dans <span class="count-box"><em class="secbox">6</em><em class="secbox">0</em>s</span></h3>
      <p><strong class="one">149,96€</strong> <strong class="two">19,99€</strong> <strong class="three">17,99€</strong></p>
      <a
          href="https://www.iobit.com/buy.php?product=fr-asc133pcpfiusd1799&ref=<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>"
          onclick="ga('send', 'event', 'iubuy', 'buy', 'enaffiu102021flashsale')">
        <i class="all-icons"></i> VITE, J'EN PROFITE
      </a>
    </div>
  </div>
  <i class="close">X</i>
</div> -->

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>