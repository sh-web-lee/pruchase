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
  $c_name = 'frascexd_p' . $date;
  $c_name_t='frascexd_t' . $date;
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

function paramDeal($num,$decimals,$separate=',',$decimal='.'){
  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
}

$params=json_decode(base64_decode($_GET['data']));
$fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,',','.');
$fileSizeUnit='Go';
if($fileSizeShow<=1){
  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,',','.');
  $fileSizeUnit='Mo';
}
$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
$paramPri=paramDeal($params->privacy,0,' ','.');
$paramPro=paramDeal($params->program,0,' ','.');
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Précommandez le nouvel Advanced SystemCare 13 PRO pour seulement 0€ - IObit  </title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
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
          <strong><b>0</b>€<sup></sup></strong> <a href="https://www.iobit.com/buy.php?product=fr-asc13preorder&ref=fr_asc13preorderexpired&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-fr');" class="buybtn"><span>J’EN PROFITE VITE</span></a>
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
    <span class="arrow"></span>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>Qu'a fait Advanced SystemCare PRO pour vous ?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        <div class="scan">Analyser</div>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span>Libère <b>XX</b> de l'espace disque</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Efface <b>XX</b> traces privées</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Accélère le démarrage du système <b>200%</b>* plus rapide</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Accélère la navigation en ligne <b>300%</b>* plus rapide</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Bloque <b>XX fois</b> accès secrets à vos données sensibles</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>En utilisant la version expirée,</h3>
      <h2> vous <b>perdez</b> les fonctions suivantes:</h2>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span>Nettoyage en profondeur des fichiers de registre pour résoudre les problèmes du système</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Nettoyage automatique de la RAM pour un fonctionnement plus fluide du PC</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Accélération du démarrage du PC et de la connexion Internet</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Protection des données personnelles pour éviter les fuites de la vie privée</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Protection en temps réel pour bloquer les infections de malwares</span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Précommandez la nouvelle version PRO<br> pour récupérer les privilèges pro et profiter les nouvelles fonctions suivantes </h2>
    <div class="clearfix">
      <dl class="blue">
        <dt><img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>4Go<small>*</small></h3>
          <p>Détectez et nettoyez plus de <b>4Go*</b> de fichiers inutiles</p>
        </dd>
      </dl>
      <dl class="purple">
        <dt><img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>200+</h3>
          <p>Balayez les traces privées <b>de 200+ </b> logiciels et de <b>15</b> navigateurs pour tous les comptes d'utilisateurs </p>
        </dd>
      </dl>
      <dl class="green">
        <dt><img src="<?php echo getStaticUrl('images/f-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>Email</h3>
          <p>Protégez votre <b>E-mail </b> contre diverses menaces véhiculées par courrier électronique</p>
        </dd>
      </dl>
      <dl class="orange">
        <dt><img src="<?php echo getStaticUrl('images/f-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>60%</h3>
          <p><b>Plus de 60% </b> de logiciels peuvent être mis à jour en un clic </p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
  <div class="wrapper">
    <span class="arrow"></span>
    <h2>Ce que nous avons accompli et reçu</h2>
    <div class="present clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons01.png')?>" alt=""/></dt>
        <dd>Résolution des problèmes  de PC pour  <h4 class="first">00 000 000</h4> Utilisateurs</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/p-icons02.png')?>" alt=""/></dt>
        <dd>Économie de  <h4 class="two">0 000 000</h4> heures  Par mois</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/p-icons03.png')?>" alt=""/></dt>
        <dd>Économie de  <h4>$1.18 milliards</h4> Par an </dd>
      </dl>
    </div>
    
    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Avis des médias</span></h2></dt>
            <dd>
              <p class="on">« Il n'y a rien de pire qu'un ordinateur qui tombe en panne trop souvent. Cela entrave votre capacité à travailler ou à jouer à des jeux. Advanced SystemCare répare tous les problèmes indépendants en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides. Il offre également la possiblité de donner un coup de pouce à votre ordinateur pour optimiser l'expérience PC. »</p>
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
              <p>« J’utilise Advanced SystemCare Pro depuis longtemps et cette dernière version 13 est encore meilleure que la version 12. Il peut détecter et résoudre les problèmes très rapidement et dispose de nombreuses fonctionnalités supplémentaires dont vous pouvez bénéficier pour un démarrage du PC plus rapide et un système plus stable. Je le recommande vivement.»  </p>
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
          <li class="six last" data-num="3"><img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>APPROUVÉ PAR LES MÉDIAS CÉLÈBRES DU MONDE</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

  
  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
       Note :
      </dd>
      <dd>*. Nous avons testé Advanced SystemCare 13 PRO dans notre laboratoire de test. Vos résultats peuvent varier.</dd>
      <dd>*. À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement facturé de 19,99€. Ce réduction de 60% par rapport au prix original de 49,99€ est un bonus réservé uniquement aux précommandes !</dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
  </div>
  <!-- footer end -->

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
      DISPOS. <span><span class="viewNum"><?php echo $viewNum;?></span>  clients sur la page. </span>
    </div>
    <div class="price">
      <strong><b>0</b>€</strong> <a href="https://www.iobit.com/buy.php?product=fr-asc13preorder&ref=fr_asc13preorderexpired&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-fr');" class="buybtn"><span>VITE, J’EN PROFITE</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>
    $(".intro .wrapper .right b").eq(0).html("<?php echo $paramJunk?>").end().eq(1).html("<?php echo $paramPri?>").end().
      eq(4).html("<?php echo $paramPro;?>");
  </script>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>