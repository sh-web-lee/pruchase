<?php

header("location:../2017asc10general/index.php" . (empty($_SERVER['QUERY_STRING']) ? '' : ('?' . $_SERVER['QUERY_STRING'])));
exit();
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
  $downloadRef=empty($_GET['ref'])?'frasc12g':$_GET['ref'];
  if (empty($_GET['ref'])) $_GET['ref'] = 'fraff_asc12_2019general';
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Profitez d'un PC rapide et sécurisé avec ASC PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <p>Le meilleur utilitaire d’optimisation PC</p>
      <h1>Advanced SystemCare PRO</h1>
      <h4> Rend votre PC plus propre, plus rapide et plus performant en un seul clic </h4>
      <div class="btnbox">
        <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $downloadRef;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascdl', 'download', 'frasc12g')">
          <p>Analysez Gratuitement </p>
          Pour Win 10/8/7/Vista/XP
        </a>
        <a class="btn buy" href="https://www.iobit.com/buy.php?product=fraff-asc123pc1499&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc122019general') ">
          JAchetez Maintenant &  <strong>50%</strong>  
        </a>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- mediareview start -->
    <dl class="mediareview wrapper clearfix">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/media_icon.png" alt="">
        <p>Choix de plus de 250     millions d'utilisateurs </p>
      </dt>
      <dd>
        <h3>Advanced SystemCare répare tous les problèmes indépendants</h3>
        <p>"Il n'y a rien de pire qu'un ordinateur qui tombe en panne trop souvent. Cela entrave votre capacité à travailler ou à jouer à des jeux. Advanced SystemCare répare tous les problèmes indépendants en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides. Il offre également la possibilité de donner un coup de pouce à votre ordinateur pour optimiser l'expérience PC."-Cnet</p>
      </dd>
    </dl>
    <!-- mediareview end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>  L’utilitaire d’optimisation du système indispensable pour Windows </h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro1.png')?>" alt=""></dt>
          <dd><h3>PC plus rapide </h3></dd>
          <dd>Identifie et supprime les problèmes quiralentissent l'ordinateur</dd>
        </dl>
        <dl class="more">
          <dt><img src="<?php echo getStaticUrl('images/intro2.png')?>" alt=""></dt>
          <dd><h3>Système plus stable</h3></dd>
          <dd>Corrige les erreurs Windows pour restaurer la stabilité du système et réduire les pannes de PC</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro3.png')?>" alt=""></dt>
          <dd><h3>Navigation plus sécurisée</h3></dd>
          <dd>Efface automatiquement des données de navigation et dissimule des empreintes digitales numériques pour empêcher le suivi malveillant</dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Juste un clic de souris rend votre PC plus propre, plus rapide et plus performant</h2>
        <div class="btnbox">
          <a class="btn buy" href="https://www.iobit.com/buy.php?product=fraff-asc123pc1499&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc122019general') ">
            Achetez Maintenant &   <strong>50%</strong>  
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- describe start -->
    <div class="wrapper">
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe1.png')?>" alt=""></div>
        <div class="fl txtbox">
          <h2>Nettoyezet optimisez en profondeur votre PC</h2>
          <p>Advanced SystemCare PRO nettoie en profondeur les fichiers indésirables, les entrées de registre invalides, les programmes indésirables et tenaces, les barres d'outils et les plug-ins, et optimise le démarrage, la RAM, Internet, le système et les disques pour un PC propre et rapide.</p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe2.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Résolvez toutes sortes de problèmes de PC</h2>
          <p>Advanced SystemCare PRO identifie et corrige toutes sortes de problèmes Windows, y compris les erreurs de registre, les erreurs de disque, les problèmes de sécurité Windows, les pilotes obsolètes, les problèmes de système, etc. pour restaurer la stabilité du système et réduire les pannes de PC.</p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe3.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Surveille les ressources système en temps réel</h2>
          <p>Advanced SystemCare PRO vous aide à gérer en un clic l’utilisation de la RAM, du processeur et du disque, et détecte, désactive automatiquement les processus et programmes inactifs afin de libérer de la mémoire et d’améliorer les performances de votre ordinateur.</p>
        </div>
      </div>
      <div class="describe describe-padding clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe4.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Protégez proactivement votre vie privée en ligne </h2>
          <p>Intégré au tout nouveau bouclier de protection de la vie privée et de protection des empreintes digitales numérisées, Advanced SystemCare PRO est capable de détecter et bloquer les accès secrets à vos données personnelles et dissimuler les empreintes digitales pour effacer les traces en ligne, pour une meilleure protection de votre ordinateur et de la confidentialité en ligne. En même temps, il empêche les modifications malveillantes de votre page d'accueil, de votre moteur de recherche et de vos paramètres DNS et supprime les menaces en ligne en temps réel.</p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe5.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Supprime les annonces et bloque les sites Web malveillants</h2>
          <p>Advanced SystemCare PRO supprime les publicités gênantes dans Internet Explorer, Chrome et Firefox, et bloque les sites Web malveillants et dangereux en cours de navigation pour une meilleure expérience de navigation.</p>
        </div>
      </div>
      <div class="describe last clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe6.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2> Capture l'intrus automatiquement <span>(Caméra demandée)</span></h2>
          <p>Advanced SystemCare PRO aide à capturer les intrus accédant à votre PC sans autorisation ou tentative de voler vos informations personnelles et vos fichiers importants. Après avoir enregistré votre propre visage, il capturera automatiquement l'image des intrus enarrière-plan.</p>
        </div>
      </div>
    </div>
    <!-- describe end -->

    <!-- tool start -->
    <div class="tool">
      <div class="wrapper clearfix">
        <h2>  Découvrez plus d'outils indispensables</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon1.png" alt=""></dt>
          <dd><h4>Gestionnaire de démarrage</h4></dd>
          <dd>Gérez les éléments de démarrage pour accélérer le démarrage du PC.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon2.png" alt=""></dt>
          <dd><h4>RAM Intelligente</h4></dd>
          <dd>Libérez de la mémoire pour améliorer les performances du PC.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon3.png" alt=""></dt>
          <dd><h4>Accélérateur d’Internet </h4></dd>
          <dd>Optimisez les navigateurs pour accélérer la connexion Internet.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon4.png" alt=""></dt>
          <dd><h4>Réparateur de Windows </h4></dd>
          <dd>Identifiez et corrigez les problèmes de Windows.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon5.png" alt=""></dt>
          <dd><h4>Recherche de fichiers volumineux</h4></dd>
          <dd>Recherchez et supprimez des fichiers volumineux pour plus d'espace.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon6.png" alt=""></dt>
          <dd><h4>Broyeur de fichiers</h4></dd>
          <dd>Supprimez définitivement les fichiers indésirables pour éviter la récupération.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon7.png" alt=""></dt>
          <dd><h4>Nettoyeur du registre</h4></dd>
          <dd>Nettoyez et réparez en toute sécurité les problèmes de registre.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon8.png" alt=""></dt>
          <dd><h4>Nettoyeur de disque</h4></dd>
          <dd>Nettoyez toutes sortes de fichiers indésirables pour libérer de l'espace disque.</dd>
        </dl>
      </div>
    </div>
    <!-- tool end -->
  
    <!-- usereview start -->
    <div id="user" class="usereview wrapper clearfix">
      <h2>Avis des utilisateurs</h2>
      <dl class="active">
        <dt><h4>"ASC est le gagnant à la fois en produit et en support"</h4></dt>
        <dd>"Advanced SystemCare garde mon ordinateur propre et loin de tout « bug » depuis plusieurs années et il ne m’a jamais laissé tombé jusqu’à présent. J’ai contacté récemment l’équipe d’Advanced SystemCare, et ils m’ont répondu en un jour ou deux avec tout ce que je voulais savoir. D’après moi, le support service est un énorme facteur décisif concernant la fidélisation de ce produit, et ASC est le gagnant à la fois en produit et en support."</dd>
      </dl>
      <dl>
        <dt><h4>"Sans aucun doute, mon choix est toujours Advanced SystemCare Pro"</h4></dt>
        <dd>"En tant que technicien de réparation d’ordinateurs, je trouve que la plupart des problèmes communs peuvent être souvent résolu en scannant le PC avec ASC PRO. Quand j’ai fini la réparation, je proposais habituellement à mes clients d’acheter la version Pro. Qui a besoin d’un technicien lorsque l’on peut profiter d’un logiciel aussi puissant qu’Advanced SystemCare Pro 24-7? C’est le meilleur produit qu’un utilisateur débutant peut acheter. Merci à IObit qui rend mon travail plus facile."</dd>
      </dl>
      <dl>
        <dt><h4>" Advanced SystemCare Pro est vraiment le meilleur programme que j'ai jamais utilisé."</h4></dt>
        <dd>"Comme la plupart des gens, je ne suis pas un expert en informatique. Je ne sais pas combien de programmes j'ai pu essayé au fil des ans, tous prétendent être le meilleur parmi les plus utilisés sur le marché des logiciels d’optimisation, mais Advanced SystemCare Pro est vraiment le meilleur programme que j'ai jamais utilisé. Depuis que j'ai ce programme génial je n'ai pas eu à appeler le support technique, pas même une fois. Il a surpassé toutes mes attentes, toujours à jour, et l’interface est très cool aussi! Merci à tous d’avoir facilité ma vie."</dd>
      </dl>
      <dl>
        <dt><h4>"Ce programme est le meilleur que j’ai jamais essayé."</h4></dt>
        <dd>"Ce programme est le meilleur que j’ai jamais essayé. Mon ordinateur est beaucoup plus performant depuis que j’ai téléchargé ASC. Il a nettoyé les fichiers indésirables, les fichiers en double et les dossiers vides. Je l’ai aussi utilisé pour déchiqueter des fichiers. Je vous recommande d’acheter ce programme, pas cher et très efficace pour maximiser les performances de votre PC. Vous allez l’adorer, je vous le promets."</dd>
      </dl>
      <ul class="username">
        <li class="current">
          <img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
          <p>Bruce Ramsay</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
          <p>Charles R. Widick</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/hank-ewert.png" alt="Hank Ewert">
          <p>Hank Ewert</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/loretta-harnarine.png" alt="Loretta Harnarine">
          <p>Loretta Harnarine</p>
        </li>

      </ul>
    </div>
    <!-- usereview end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <h2>Advanced SystemCare PRO</h2>
        <p>   Approuvé par plus de 250 millions d'utilisateurs dans le monde</p>
        <div class="btnbox">
          <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $downloadRef;?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascdl', 'download', 'frasc12g')">
            <p>Analysez Gratuitement </p>
            PourWin 10/8/7/Vista/XP
          </a>
          <a class="btn buy" href="https://www.iobit.com/buy.php?product=fraff-asc123pc1499&ref=<?php echo $_GET['ref'];?>&aff=<?php echo $_GET['aff'];?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'fraffasc122019general') ">
            Achetez Maintenant & <strong>50%</strong>
          </a>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt>100% Propre </dt>
          <dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
        <dl class="back">
          <dt>Garantie satisfait ou remboursé pendant 60 jours    </dt>
          <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>Support 24/7</dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/call.png" alt="">
            <span>Soutien technique gratuit de 24/7 à la demande</span>
          </dd>
        </dl>
      </div>
    </div>
    <!-- service end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
  <!-- footer end -->

  <!-- backtop start -->
  <div id="backtop" class="backtop" onclick="goTarget($('.header'))"></div>
  <!-- backtop end -->

<script>    
  //userreview 
  $(".username li").mouseover(function(event) {
    var num = $(this).index();
    $(".username li").eq(num).addClass('current').siblings().removeClass('current');
    $("#user dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  //floatlayer
  $(window).on('scroll', function () {
    var scrollHeight = $(".header:last").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
      $('#backtop').addClass('on');
    }else {
      $('#backtop').removeClass('on');
    }
  });

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
</script>
</body>
</html>