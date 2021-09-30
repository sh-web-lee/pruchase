<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frascpup_p' . $date;
  $c_name_t='frascpup_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Précommandez le nouvel Advanced SystemCare 13 PRO pour seulement 0€ - IObit    </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Accélérez votre ancient PC 200%* plus rapide</h3>
      <dl>
        <dt class="price">
          <strong><b>0</b>€<sup>*</sup></strong> <a href="https://www.iobit.com/buy.php?product=fr-asc13preorder&ref=fr_asc13preorderpopup<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-fr');" class="buybtn"><span>J’EN PROFITE VITE</span></a>
        </dt>
        <dd class="number">
          VITE, PLUS QUE 
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          DISPOS. <span><span class="viewNum"><?php echo $viewNum;?></span> CLIENTS SUR LA PAGE.</span>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->
<div class="intro wrapper clearfix">
  <span class="arrow"></span>
  <h2>Pourquoi pré-commander Advanced SystemCare 13 PRO ?</h2>
  <h3><strong>Pour profiter d’une performance <span>PC optimale</span></strong></h3>
  <div class="message01">
    <img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" class="img-box ">
    <img src="<?php echo getStaticUrl('images/guide.png')?>" alt="" class="guide">
    <img src="<?php echo getStaticUrl('images/good.png')?>" alt="" class="good">
    <img src="<?php echo getStaticUrl('images/intro-list01.png')?>" alt="" class="icons01">
    <img src="<?php echo getStaticUrl('images/intro-list02.png')?>" alt="" class="icons02">
    <div class="round">
      <div class="top-round"></div>
      <div class="circle right">
        <div class="circleprogress rightcircle"></div>
      </div>
    </div>
    <div class="left-round"></div>
    <dl class="list01">
      <dt>Espace de disque plus grande <span><em>Fonction exclusive pro</em></span></dt>
      <dd>
        Un nettoyage approfondi et une défragmentation<br> de disque maximisée libèrent plus d'espace disque<br> pour garantir des performances fluides du PC.
      </dd>
    </dl>
    <dl class="list02">
      <dt>PC 200%* plus rapide <span><em>Fonction exclusive pro</em></span></dt>
      <dd>
        Nettoyez tous les fichiers inutiles et optimisez le<br> processeur et la RAM pour un démarrage de<br> l’ordinateur et un système deux fois plus rapides.
      </dd>
    </dl>
    <dl class="list03">
      <dt>Pas de processus inutiles <span><em>Fonction exclusive pro</em></span></dt>
      <dd>
        Arrêtez automatiquement les processus inutiles exécutant<br> en arrière-plan pour éviter les ralentis de PC.
      </dd>
    </dl>
    <dl class="list04">
      <dt>Faster 300%* plus rapide <span><em>Fonction exclusive pro</em></span></dt>
      <dd>
        Optimise les paramètres du navigateur pour un téléchargement,<br> une navigation sur le Web, un jeu en ligne et une visualisation<br> YouTube trois fois plus rapides.
      </dd>
    </dl>
  </div>

  <h3 class="title2"><strong>Pour garder votre ordinateur et vie privée en <span>toute sécurité</span></strong></h3>
  <div class="message02">
    <div class="img-box">
      <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="">
      <img src="<?php echo getStaticUrl('images/lock.png')?>" alt="" class="lock">
    </div>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd>
        <strong>Aucun accès non autorisé <span><em>Fonction exclusive pro</em></span></strong>
        Les programmes tentant d’accéder secrètement à vos données personnelles seraient immédiatement détectés.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd>
        <strong class="first">Arrêtez les infections de logiciels<br> malveillants <span><em>Fonction exclusive pro</em></span></strong>
        Les logiciels malveillants et les logiciels espions ne peuvent plus s'introduire dans votre ordinateur grâce à la protection en temps réel.
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd>
        <strong>Effacer les traces en ligne <span><em>Fonction exclusive pro</em></span></strong>
        Vos traces en ligne privées seraient automatiquement effacées pour arrêter les attaques malveillantes.
      </dd>
    </dl>
  </div>

  <h3 class="title3"><strong>De plus, <span>davantage d’améliorations</span> de Advanced SystemCare 13 PRO vous attendent </strong></h3>
  <div class="message03">
    <div class="box clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
        <dd>
          Nettoyer <strong>Plus de 4GB*</strong> fichiers inutiles sur votre PC
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
        <dd>
          Balayer les traces de <strong>plus de 200</strong> programmes pour tous les<br> comptes d'utilisateurs
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
        <dd>
          Optimiser <strong>30% plus</strong> d'éléments de démarrage pour<br> un PC plus rapide  
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
        <dd>
          Prise en charge de <strong>60% plus</strong> de logiciels pour fournir de<br> meilleures performances
        </dd>
      </dl>

    </div>

  </div>
</div>


<div class="bottom">
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Avis des médias</span></h2></dt>
          <dd>
            <p>« Il n'y a rien de pire qu'un ordinateur qui tombe en panne trop souvent. Cela entrave votre capacité à travailler ou à jouer à des jeux. Advanced SystemCare répare tous les problèmes indépendants en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides. Il offre également la possiblité de donner un coup de pouce à votre ordinateur pour optimiser l'expérience PC. »</p>
           <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Avis des utilisateurs</span></h2></dt>
          <dd> 
            <p>« J’ai essayé divers programmes qui promettaient de garder mes ordinateurs en bonne état de marche. Je me suis tourné vers ASC il y a quelques années en utilisant la version gratuite au début. Je ne regrette pas que j'ai choisi la version PRO, parce que je ne souffrais plus de problèmes du système après la mise à niveau vers la version payante. Advanced SystemCare Pro est le seul programme que je voudrais recommander en fonction de mes expériences. De plus, j’utilise également IObit Uninstaller, Smart Defrag et Driver Booster afin d’améliorer les performances de mes machines. »</p>
            <cite>Richard Beavers</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Avis des utilisateurs</span></h2></dt>
          <dd>
            <p>« Advanced SystemCare est un excellent logiciel. J’ai utilisé ce logiciel pendant de nombreuses années et il fonctionne très bien. IObit ne cesse pas d’améliorer leur produit ces dernières années pour les rendre meilleurs. La plupart de leurs logiciels sont installés sur mon ordinateur et ils marchent tous très bien. »</p>
            <cite>Patsy Clark</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Avis des utilisateurs</span></h2></dt>
          <dd>
            <p>« Advanced SystemCare est le meilleur logiciel d’optimisation et de sécurité du PC que j’ai jamais essayé. Depuis l’achat d’ASC, je n’ai jamais eu de problèmes de virus, de phishing, d’écrans noirs ou de tout autre type de problème auquel on pourrait penser. Je trouve que ASC PRO mérite d’être acheté car il peut vraiment résoudre les problèmes informatiques. Merci à ASC de m’avoir apporté une expérience plus agréable sur PC. »</p>
            <cite>Danny R. Sheets</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Avis des utilisateurs</span></h2></dt>
          <dd> 
            <p>« J’utilise Advanced SystemCare Pro depuis longtemps et cette dernière version 13 est encore meilleure que la version 12. Il peut détecter et résoudre les problèmes très rapidement et dispose de nombreuses fonctionnalités supplémentaires dont vous pouvez bénéficier pour un démarrage du PC plus rapide et un système plus stable. Je le recommande vivement. »</p>
            <cite>Tony Fisher</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Avis des utilisateurs</span></h2></dt>
          <dd>
            <p>« Le nouvel ASC 13 est indispensable pour tous les utilisateurs PC. Une interface claire et intuitive. Les utilisateurs novices apprécieront certainement cette suite par sa simplicité tandis que les plus expérimentés pourront se tourner vers la boîte d'outils et explorer outils d'optimisation et de nettoyage individuellement. Vous profitez des performances optimales sur PC avec de nombreux outils puissants. Félicitations à IObit pour une suite d’utilitaires. »</p>
            <cite>Daniel Sanders</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Avis des utilisateurs</span></h2></dt>
          <dd>
            <p>« J’aime utiliser Advanced SystemCare. Il me suffit de lancer une analyse pour obtenir le report rapidement. Il nettoie les traces de la vie privée, les fichiers inutiles ainsi que les fragments de registre. J'aime particulièrement la fenêtre contextuelle d'autorisation d'accès aux zones sensibles. Une application tente d’accéder aux fichiers sensibles pour la première fois, une fenêtre pop-up s’ouvre automatiquement pour demander un accès. Une fois que l’autorisation est accordée pour une application, la fenêtre contextuelle ne se produit plus pour cette application. Je sais que mes fichiers sensibles seront gardés en toute sécurité. »</p>
            <cite>Richard Preston</cite>
          </dd>
        </dl>
      </div>
      <ul>
        <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"></li>
        <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/daniel-sanders.png')?>" alt="Daniel Sanders"></li>
        <li class="three" data-num="6"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
        <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
        <li class="four" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
        <li class="five" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
        <li class="six" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
      </ul>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <h2>APPROUVÉ PAR LES MÉDIAS CÉLÈBRES DU MONDE</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->
  <!-- footer start -->
  <div class="footer wrapper">
    <dl>
      <dd>
       Note:
      </dd>
      <dd>*. Nous avons testé Advanced SystemCare 13 PRO dans notre laboratoire de test. Vos résultats peuvent varier.</dd>
      <dd>
        *. À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement facturé de 19,99€. Ce réduction de 60% par rapport au prix original de 49,99€ est un bonus réservé uniquement aux précommandes !
      </dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
  </div>
  <!-- footer end -->

</div>

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      VITE, PLUS QUE 
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      DISPOS. <span><span class="viewNum"><?php echo $viewNum;?></span> CLIENTS SUR LA PAGE.</span>
    </div>
    <div class="price">
      <strong><b>0</b>€<sup>*</sup></strong> <a href="https://www.iobit.com/buy.php?product=fr-asc13preorder&ref=fr_asc13preorderpopup<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderpopup-fr');" class="buybtn"><span>J’EN PROFITE VITE</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>