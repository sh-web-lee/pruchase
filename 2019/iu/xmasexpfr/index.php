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

 if(in_array($_GET['st'],array('dbxmasr'))){
   $refStr='-'.$_GET['st'];
 }else{
   $refStr='';
 }
 if(in_array($_GET['pop'],array('xr_iue'))){
  $refStr.='-'.$_GET['pop'];
}
 if(!empty($_GET['to'])){
   $refStr.='-'.$_GET['to'];
 }
 if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
   $ver=$matches[1][0].$matches[1][1];
   $refStr.='-'.$ver;
 }
 $refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
 $refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
 $refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
 $refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
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
    <h1>Vente Flash – DE NOËL 80% d’économie </h1>
    <div class="box">
      <dl>
        <dt> <strong>15 </strong> <span>99€ <del>29,99€</del></span></dt>
        <dd>
          
          <span>1 AN / 3 PC</span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=fr-iu93pc1599&ref=fr_iu93pcpurchaserightcorexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseexpsingle-fr')"
         class="buybtn small">
        VITE, J’EN PROFITE
      </a>
    </div>
    <div class="box gift-box">
      <dl>
        <dt>  <strong>14</strong> <span>99€ <del>99,93€</del></span> </dt>
        <dd>
         
          <span>1 AN / <b>3 PC</b></span>
        </dd>
      </dl>
      <img src="<?php echo getStaticUrl('images/iu-gift-box.png')?>" alt="" class="img-box">
      <a href="https://www.iobit.com/buy.php?product=fr-iu93pcsm8pf1499&ref=fr_iu93pcsm8pf1599purchaserightcorexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchaseexp-fr')"
         class="buybtn">
        VITE, J’EN PROFITE
      </a>
      <p>Quantité limitée</p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- container -->
<div class="container">

  <!-- feature -->
  <div class="feature wrapper clearfix">
    <h2>Économisez plus de temps et d'efforts <br> grâce à IObit Uninstaller PRO</h2>
    <img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" class="img-box">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Efficace</strong>
        <p>Désinstalle facilement les programmes indésirables qui ne peuvent pas être supprimés.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""></dt>
      <dd>
        <strong>Propre</strong>
        <p>Nettoie automatiquement les données inutiles des programmes désinstallés pour un PC plus propre et plus rapide.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Intelligent</strong>
        <p>Détecte et supprime les bundlewares et les plugins publicitaires.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt=""></dt>
      <dd>
        <strong>Rapide</strong>
        <p>Met à jour tous les logiciels importants en un clic.</p>
      </dd>
    </dl>
  </div>
  <!-- end feature -->

  <!-- comparison -->
  <div class="comparison wrapper">
    <h2>Aperçu des différences entre votre version et <br> IObit Uninstaller 9 PRO </h2>
    <table>
      <thead>
      <tr>
        <th class="text" colspan="2"></th>
        <th class="itema">
          <div class="free">Votre version actuelle</div>
        </th>
        <th class="space"></th>
        <th class="itemb">
          <div class="pro">IObit Uninstaller 9 PRO</div>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></td>
        <td class="virture">Désinstalle des programmes, extensions de navigateur et applications Windows par lot</td>
        <td class="itema"><i class="all-icons orange"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></td>
        <td class="virture">Détecte et désinstalle les programmes récalcitrants et bundlewares</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></td>
        <td class="virture">Détecte et répare les modifications du système causées par l’installation d’un programme</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></td>
        <td class="virture">Détecte les extensions malveillantes et publicitaires</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></td>
        <td class="virture">Nettoie automatiquement les résidus qui ne peuvent pas être supprimés par d'autres utilitaires</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></td>
        <td class="virture">Analyse les résidus de programmes déjà désinstallés</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></td>
        <td class="virture">Crée automatiquement un point de restauration avant la désinstallation</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons08.png')?>" alt=""></td>
        <td class="virture">Met à jour tous les programmes obsolètes en un clic</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons09.png')?>" alt=""></td>
        <td class="virture">Mise à jour automatique dès qu’une nouvelle version est disponible</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icons10.png')?>" alt=""></td>
        <td class="virture">Assistance téléphonique 7j/7j et 24/24</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons orange"></i></td>
      </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->
</div>
<!-- end container -->

<!-- intro -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>Plus d’avantages dont vous profiterez <br> d’IObit Uninstaller 9 PRO ! </h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
      <dd>
        <h3>Plus propre</h3>
        <p>
          Supprimez proprement 150%* de plus de programmes qui ne peuvent être désinstallés de manière classique
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
      <dd>
        <h3>En profondeur</h3>
        <p>
          15%* de plus de fichiers et registres résiduels peuvent être détectés et complètement nettoyés après la désinstallation
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
      <dd>
        <h3>Plus rapide</h3>
        <p>Le processus de désinstallation est 10%* plus rapide qu’auparavant</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
      <dd>
        <h3>Plus sûr</h3>
        <p>50%* de plus de plug-ins malveillants peuvent être supprimés</p>
      </dd>
    </dl>
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
      <h2>Offre exclusive pour Noël 2019!</h2>
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
      <p><strong>14,99€</strong> <del> 99,93€ </del></p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fr-iu93pcsm8pf1499&ref=fr_iu93pcsm8pf1599purchaserightcorexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_iu"
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