 <?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
 if ($_GET['action'] == 'getPacks') {
   $date = $_GET['d'];
   $c_name = 'friuxmasexp_p' . $date;
   $c_name_t='friuxmasexp_t' . $date;
   if ($_COOKIE[$c_name]===null) {
     $totalNum=$packsNum=rand(37,50);
     setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
     setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
   } else {
     if (intval($_COOKIE[$c_name]) <= 5) {
       $packsNum = 5;
       setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
     } else {
       if((rand(1,100)%2)==0){
         $packsNum=$_COOKIE[$c_name];
       }else {
         $packsNum = $_COOKIE[$c_name] - 1;
         setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
       }
     }
   }
   echo json_encode(array('packsNum'=>$packsNum));
   exit();
 }

 if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
     $ver=$matches[1].'-'.$matches[2];
     $refStr.='-'.$ver;
 }
 $refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
 $refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
 $refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
 $refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
 $refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
 $refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
 $refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
 $refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spécial Noël - Réservé uniquement au renouvellement - IObit</title>
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
    <h1>Vente Flash – DE NOËL 88% d’économie </h1>
    <div class="box">
      <dl>
        <dt> <strong>15 </strong> <span>99€ <del>39,99€</del></span></dt>
        <dd>
          
          <span>1 AN / 3 PC</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=fr-iu101y3pc1599&ref=fr_iu103pcpurchaseexpired2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseexpsingle-fr')" class="buybtn small">VITE, J’EN PROFITE</a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt>  <strong>12</strong> <span>99€ <del>109,97€</del></span> </dt>
        <dd>
         
          <span>1 AN / <b>3 PC</b></span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=fr-iu103pcsdpf1299&ref=fr_iu103pcsdpf1299expired2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseexp-fr')"
         class="buybtn">
        VITE, J’EN PROFITE
      </a>
      <p>Quantité limitée</p>
    </div>
  </div>
</div>
<!-- end banner -->

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
      </div>
    </div>
  </div>
  <!-- benfits end -->

  <!-- comparison start -->
  <div class="comparison">
    <h2>Récupérez les fonctions PRO pour un PC propre et<br> des logiciels à jours</h2>
    <table class="wrapper">
      <thead>
        <tr>
          <th class="itema"><big>Attention !</big> Vous risquez…</th>
          <th class="itemb"><big>Profitez plutôt de…</big></th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">
            D’être incapable de <span>supprimer les logiciels persistants</span> de votre PC
          </td>
          <td class="itemb">
            Supprimer les logiciels même les plus tenaces pour <span>un PC propre et avec plus d’espace disque</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            Des <span>résidus de logiciels alourdissent votre PC</span> et polluent votre système
          </td>
          <td class="itemb">
            <span>Un système propre</span> et plus d'espace disque libre car tous les restes sont automatiquement supprimés
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Des installations groupées</span> sur votre PC lors du téléchargement de logiciels gratuits
          </td>
          <td class="itemb">
            <span>Détecte les installations groupées</span> et les supprimes en un clic
          </td>
        </tr>
        <tr>
          <td class="itema">
            Plug-ins malveillants qui <span>affaiblissent votre PC</span>
          </td>
          <td class="itemb">
            <span>Supprime tous les plug-ins</span> et barre d’outils et vérifie si les plug-ins installés sont malveillants.
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Vos paramètres sont modifiés</span> et vous êtes bloqué sans pouvoir les retrouver
          </td>
          <td class="itemb">
            Surveille toutes les installations et <span>restaure tous les paramètres initiaux</span> une fois le logiciel supprimé
          </td>
        </tr>
        <tr>
          <td class="itema">
            Les logiciels obsolètes mettent <span>votre ordinateur en danger</span>
          </td>
          <td class="itemb">
            <span>Met à jour tous les logiciels importants</span> en un clic et profitez des dernières fonctions et d’un PC sûr.
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

<!-- intro -->
<div class="intro">
  <div class="clearfix">
    <h2>IObit Uninstaller 10 PRO fait bien plus<br> que la version précédente !</h2>
	<div class="offermorecnt">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-01.png')?>" alt=""></dt>
      <dd>
        <h3>Notifications</h3>
        <p>
          La dernière version bloque aussi les notifications des navigateurs. Vous ne serez plus jamais embêté
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-02.png')?>" alt=""></dt>
      <dd>
        <h3>Propre</h3>
        <p>
          Une base de données 30% plus importante, plus de fichiers résiduels sont supprimé pour un PC propre
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/offermore-03.png')?>" alt=""></dt>
      <dd>
        <h3>Plus efficace</h3>
        <p>Supprime encore plus de logiciels persistants, incluant Microsoft Edge (Chromium)</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/offermore-04.png')?>" alt=""></dt>
      <dd>
        <h3>Compatible</h3>
        <p>Supporte plus de navigateurs, tout particulièrement Microsoft Edge (basé sur Chromium)</p>
      </dd>
    </dl>
	</div>
  </div>
</div>
<!-- end intro -->

<!-- review -->
<div class="review wrapper">
  <h2>NOUS FAISONS DE NOTRE MIEUX POUR SATISFAIRE <br> NOS CLIENTS OÙ QUE VOUS SOYEZ !</h2>
  <div class="reviewbox">
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></li>
      <li class="two">
        <img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC.MAGAZINE">
      </li>
      <li class="three">
        <img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf">
      </li>
      <li class="four"><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></li>
      <li class="five"><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></li>
    </ul>
    <div class="details">
      <div>
        <h4>Lovro Žužić</h4>
        <p>
          «Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. »
        </p>
      </div>
      <div class="active">
        <h4>PC.MAGAZINE </h4>
        <p>
          «Cet utilitaire, compatible parfaitement avec Win 10, est mesure de désinstaller des applications en toute simplicité, y compris des fichiers restants dans le registre Windows lors que vous supprimez des logiciels en utilisant le désinsatalleur intégré sous Windows, ainsi que les barres d’outils et plug-ins du navigateur agaçants. En un mot, si vous utilisez un PC sous Windows, je vous recommande IObit Uninstaller. »
        </p>
      </div>
      <div>
        <h4>MakeUseOf</h4>
        <p>
          «IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Il proposera aux utilisateurs une fonctionnalité "Analyse Approfondie" pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. »
        </p>
      </div>
      <div>
        <h4>Lynette van Niekerk</h4>
        <p>
          «J'aime le fait qu'il désinstalle tous les fragments restants. Il dispose également d'un programme de mise à jour du logiciel qui vous rappelle lorsque l'un des programmes doit être mis à jour. La désinstallation des programmes de traitement par lots en fait un outil de choix. En fait, c’est essentiellement ce dont vous avez besoin pour garder votre ordinateur en état de fonctionner. »
        </p>
      </div>
      <div>
        <h4>Paulo Martins</h4>
        <p>
          «Il est rapide et très efficace, il est incomparable face au programme de désinstallation de base de Windows. Il nettoie entièrement tous les résidus de programme et évite ainsi tout ralentissement de l'ordinateur. J’utilise IObit Uninstaller depuis quelques mois et je ne peux désormais plus m’en passer. Je le recommande à mes amis et à ma famille. Merci, IObit Uninstaller est fantastique. »
        </p>
      </div>
    </div>
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- end review -->

<!-- bottom -->
<div class="bottom">
  <div class="bottom-content">
    <!-- award -->
    <div class="award">
      <h2 class="on">Approuvé par ces médias célèbres du monde</h2>
      <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>

    <!-- service -->
    <div class="service clearfix">
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
    <dl class="annotation">
      <dt>Note: </dt>
      <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      <dd>*.Les données peuvent varier en fonction de différents systèmes ou ordinateurs.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">
      <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tous droits réservés</p>
    </div>
  </div>
</div>
<!-- end bottom -->

<!-- floatlayer -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""></div>
    <div class="center fl">
      <h2>Retrouver la version PRO grâce à cette offre temporaire de Noël !</h2>
      <div class="numbox">
        <p>Plus que</p>
        <div class="flipNum">
          <div class="listbox">
            <div class="list">
              <b>0</b>
            </div>
          </div>
          <div class="listbox">
            <div class="list" >
              <b>0</b>
            </div>
          </div>
        </div>
        <p> unités dispos *</p>
      </div>
    </div>
    <div class="price fr">
      <p><strong>12,99€</strong> <del> 109,97€ </del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fr-iu103pcsdpf1299&ref=fr_iu103pcsdpf1299expired2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseexp-fr')">
        Renouvelez Maintenant
      </a>
    </div>
  </div>
</div>
<!-- end floatlayer -->


<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script></body>
</html>