<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr='';
if(in_array($_GET['pop'],array('x_iu','xi_iu','xb_iu','xnc_iu'))){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);

$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -85% sur IObit Uninstaller PRO et obtenez les cadeaux exclusifs - Soldes d'hiver ! </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script>
  var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
  var paramTo = MApp(2.2).url.getParameters('to');
    if ((paramTo == 'enable') || (paramTo == 'installmonitor')) {
      window.location.href = "./installmonitor.php" + queryStr;
    }
  </script>
</head>
<body>
<!-- container -->
<div class="container">
  <!-- tree -->
  <div class="tree wrapper">
    <span class="tree-l"></span>
    <span class="tree-r"></span>
  </div>
  <!-- end tree -->

  <!-- spree -->
  <div class="spree wrapper">
    <div class="spree-box">
      <p>Plus que <b class="packsNum"><?php echo $packsNum?></b> dispos !</p>
      <a class="spree-buy"
         href="https://www.iobit.com/buy.php?product=fr-iu93pcsdpf1599&ref=fr_iu93pcsdpf1599purchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2001a-fr')">
      </a>
    </div>
  </div>
  <!-- end spree -->

  <!-- star -->
  <div class="star wrapper">
    <span class="star-l"></span>
    <span class="star-r"></span>
  </div>
  <!-- end star -->
</div>
<!-- end container -->

<!-- main -->
<div class="main wrapper">

  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>SOLDES D’HIVER 2020</h1>
    <!-- subtitle -->
    <p>Vous avez manqué le Noël, ne ratez pas l’occasion de profiter de nos offres d’hiver</p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- iu-55 -->
      <div class="message small fl">
        <img class="box" src="<?php echo getStaticUrl('images/iu-55.png')?>" alt="IObit Uninstaller PRO">
        <p> 1 an, 3 PC</p>
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">20€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>19</b> <del>39,99€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-iu91y3pc1999&ref=fr_iu93pcpurchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2001b-fr')"
               data-num="2">
              <i class="all-icons"></i> VITE, J’EN PROFITE
            </a>
          </dd>
        </dl>
      </div>

      <!-- iu-85 -->
      <div class="message large fl">
        <img class="box" src="<?php echo getStaticUrl('images/iu-85.png')?>" alt="IObit Uninstaller PRO">
        <p> 1 an, 3 PC</p>
        <!-- progress -->
        <div class="progress clearfix">
          <div class="progressbar fl clearfix">
            <p class="fr"></p>
          </div>
          <p class="countdown fl">
            <strong>00</strong>j
            <strong>00</strong>h
            <strong>00</strong>m
            <strong>30</strong>s
          </p>
        </div>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">93,98€</span>
          </dd>
          <dd class="two">
            <p class="price red"><b>15</b> <del>109,97€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=fr-iu93pcsdpf1599&ref=fr_iu93pcsdpf1599purchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2001a-fr')"
               data-num="0">
              <i class="all-icons"></i> VITE, J’EN PROFITE
            </a>
          </dd>
        </dl>
      </div>

      <!-- iu-45 -->
      <div class="message small fr">
        <img class="box" src="<?php echo getStaticUrl('images/iu-45.png')?>" alt="IObit Uninstaller PRO">
        <p> 1 an, 1 PC</p>
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">14€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>15</b> <del>29,99€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-iu91pc1599&ref=fr_iu91pcpurchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2001c-fr')"
               data-num="1">
              <i class="all-icons"></i> VITE, J’EN PROFITE
            </a>
          </dd>
        </dl>
      </div>

    </div>
    <!-- payment -->
    <img class="payment" src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature clearfix">
    <!-- title -->
    <h2>Profitez d’un PC plus léger & une navigation <br> plus sûre avec IObit Uninstaller PRO !</h2>
    <img src="<?php echo getStaticUrl('images/feature-machine.jpg')?>" alt="">
    <!-- 01 -->
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
      <dd class="fl">
        <h3><span>AMELIORE !</span> Désinstallation Complète</h3>
        <p>Désinstallez les programmes tenaces et groupés, annulez automatiquement les modifications du système apportées par l’installation d’un programme lors de sa désinstallation.</p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
      <dd class="fl">
        <h3><span>AMELIORE !</span> Navigation sans publicité</h3>
        <p>Désinstaller puissamment les plug-ins malveillants et publicitaires pour assurer une expérience de navigation sécurisée et propre.</p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
      <dd class="fl">
        <h3><span>NOUVEAU !</span> Outil Software Health</h3>
        <p>Détecte automatiquement les restes existants des désinstallations précédentes, les logiciels obsolètes et les modules malveillants et les répare en un seul clic.</p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
      <dd class="fl">
        <h3><span>AMELIORE !</span> Mise à jour de logiciel sécurisée</h3>
        <p>Mettez à jour en un seul clic des logiciels sélectionnés sans intervention de l'utilisateur.</p>
      </dd>
    </dl>
    <div class="clear"></div>
    <a class="intro" href="javascript: void(0);">En savoir plus sur la version PRO >></a>
  </div>
  <!-- end feature -->

  <!-- gifts -->
  <div class="gifts">
    <!-- title -->
    <h2>Les cadeaux exclusifs, rien que pour vous !</h2>
    <!-- dl -->
    <div class="content clearfix">
      <!-- sd -->
      <dl class="sd clearfix">
        <dt></dt>
        <dd>
          <p class="cost"> <span>0€</span> <del>29,99€</del></p>
          <p class="detail">Défragmenter automatiquement les fichiers et disques sélectionnés en temps réel.</p>
          <p class="detail">Maximiser les performances et la durée de votre disque.</p>
        </dd>
      </dl>
      <!-- pf -->
      <dl class="pf">
        <dt></dt>
        <dd>
          <p class="cost"><span>0€</span> <del>39,99€</del></p>
          <p class="detail">Il fait office de coffre-fort pour vos fichiers et dossiers.</p>
          <p class="detail">Un mot de passe empêche quiconque de les ouvrir.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end gifts -->

  <!-- comparison -->
  <div class="comparison">
    <!-- table -->
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">Savoir ce que PRO édition peut faire pour vous?</th>
          <th class="free" valign="bottom"><div>IObit Uninstaller 9 <br> FREE </div></th>
          <th class="space"></th>
          <th class="pro"><div>IObit Uninstaller 9 <br> PRO</div></th>
        </tr>
      </thead>
      <tbody>
        <!-- 01 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""></td>
          <td class="text">Désinstaller un programme depuis sa fenêtre ouverte, de son icône sur <br> le bureau ou de l'icône de la barre d'état système</td>
          <td class="free"><i></i></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""></td>
          <td class="text">Supprimer plug-ins & extensions sur Edge, Chrome, IE, Firefox, etc</td>
          <td class="free"><i></i></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""></td>
          <td class="text">Annuler automatiquement les modifications du système apportées <br> par un programme lors de la désinstallation<span class="red">NOUVEAU</span></td>
          <td class="free"></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""></td>
          <td class="text">Prise en charge de la désinstallation des programmes tenaces<span>Amélioré</span></td>
          <td class="free"></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""></td>
          <td class="text">Détecter et désinstaller les bundlewares et les plug-ins regroupés<span>Amélioré</span></td>
          <td class="free"></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""></td>
          <td class="text">Mettre à jour automatiquement tous les logiciels obsolètes choisis<span>Amélioré</span></td>
          <td class="free"></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 07 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon07.png')?>" alt=""></td>
          <td class="text">Désinstaller plug-ins malveillants pour un navigateur plus sécurisé<span>Amélioré</span></td>
          <td class="free"></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 08 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""></td>
          <td class="text">Expérience en ligne plus rapide et plus sûre en activant <br> Déinstallation Adware<span>Amélioré</span></td>
          <td class="free"></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 09 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""></td>
          <td class="text">Nettoyer automatiquement les restes que d’autres utilitaires ont <br> échoué à supprimer<span>Amélioré</span></td>
          <td class="free"></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 10 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""></td>
          <td class="text">Mise à jour Auto vers la Dernière Version</td>
          <td class="free"></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
        <!-- 11 -->
        <tr>
          <td class="icon"><img src="<?php echo getStaticUrl('images/icon11.png')?>" alt=""></td>
          <td class="text">Soutien Technique Gratuit de 24/7 à la Demande</td>
          <td class="free"></td>
          <td class="space"></td>
          <td class="pro"><i></i></td>
        </tr>
      </tbody>
    </table>
    <!-- subtitle -->
    <h3>ÉBLOQUEZ TOUTES LES FONCTIONNALITES PRO MAINTENANT AVEC LA <span>RÉDUCTION DE 85%</span></h3>
    <!-- imf-85 buybtn -->
    <a class="buybtn red"
       href="https://www.iobit.com/buy.php?product=fr-iu93pcsdpf1599&ref=fr_iu93pcsdpf1599purchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2001a-fr')">
      <i class="all-icons"></i> VITE, J’EN PROFITE
    </a>

  </div>
  <!-- end comparison -->

  <!-- review -->
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
  <!-- end review -->

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">PREMIER ARRIVE, PREMIER SERVI !</h2>
    <!-- box -->
    <div class="box fl">
      <img class="on" src="<?php echo getStaticUrl('images/bottombuy-iu-bundle.png')?>" alt="IObit Uninstaller PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-iu.png')?>" alt="IObit Uninstaller PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-iu.png')?>" alt="IObit Uninstaller PRO">
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="active top">1 An / 3 PC + <small>Cadeaux exclusifs</small></li>
      <li class="mid">1 An / 3 PC</li>
      <li class="bot">1 An / 1 PC</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>15</b> <del>109,97€</del></p>
      </dd>
      <dd>
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=fr-iu93pcsdpf1599&ref=fr_iu93pcsdpf1599purchase2001<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase2001a-fr')">
          <i class="all-icons"></i> VITE, J’EN PROFITE
        </a>
      </dd>
    </dl>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Satisfait ou Remboursé</h3>
          <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Paiement 100% Sécurisé</h3>
          <p>IObit vous propose huit modes de paiement sécurisés pour régler vos achats.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/buycut.png" alt=""></dt>
        <dd>
          <h3>Obtenir la licence</h3>
          <p>Vous recevrez le code de licence dans les minutes après l’achat.</p>
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
        <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- end footer -->

</div>
<!-- end main -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>