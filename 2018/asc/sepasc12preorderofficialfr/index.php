<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='ascprepa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<title>Précommandez Advanced SystemCare 12 PRO à 0€ - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>La prévente mondiale est en direct</h1>
        <h3>Vite ! Quantités limitées à 500 pièces, déjà <span class="soldNum">453</span> vendues</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO"/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                Maintenant à: <del>49,99€</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <b class="reduceGift"><span class="packsNum">**</span></b> dispos!
                </li>
                <li id="bandown" class="countdown">Rupture de stock prévu: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=fr-asc12preorder30&ref=fr_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialfr');"
                 data-text="VITE, J’EN PROFITE">
                <span>VITE, J’EN PROFITE</span>
              </a>
              <h5>1 an d’abonnement / 3 PC</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- flow start -->
    <div class="flow wrapper clearfix">
      <p>Obtenez 60% de réduction sur le prix <br> d'origine 30 jours après</p>
      <h2>0€ en pré-commande</h2>
      <p>Annulez dans les 30 jours sans <br> payer de frais</p>
    </div>
    <!-- flow end -->

    <!-- intro start -->
    <div class="intro wrapper">
      <h2>Pourquoi pré-commander Advanced SystemCare 12 PRO</h2>
      <div class="top clearfix">
        <div class="fl">
          <h3>Bénéficiez des nouvelles fonctionnalités plus tôt que d'autres</h3>
          <img src="<?php echo getStaticUrl('images/computer_01.png')?>" alt="Advanced SystemCare 12 PRO"/>
        </div>
        <div class="fr">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_01.png')?>" alt="Advanced SystemCare 12 PRO"/></dt>
            <dd>
              <h4>Bouclier de confidentialité</h4>
              <h5>Bloquez l'accès secret à vos fichiers et photos</h5>
              <p>
                Vous informe quand il y a un accès secret à vos fichiers et photos privés et vous permet de le bloquer.
              </p>
              <span>Fonction exclusive pro</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_02.png')?>" alt=""/></dt>
            <dd>
              <h4>Nettoyage d'empreintes digitales numérique </h4>
              <h5>Personne ne peut savoir ce que vous faites en ligne</h5>
              <p>
                Empêchez les trackers de rechercher ce que vous lisez, visualisez et achetez en déguisant votre empreinte numérique
              </p>
              <span>Fonction exclusive pro</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_03.png')?>" alt=""/></dt>
            <dd>
              <h4>Anti minage de crypto-monnaie</h4>
              <h5>Empêchez les crash soudains, la surchauffe et l'arrêt de l'ordinateur</h5>
              <p>
                Empêchez les sites Web malveillants qui utilisent votre ordinateur pour miner secrètement des crypto-monnaies et provoquer des pannes, une surchauffe et un arrêt du système.
              </p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="bot clearfix">
        <div class="fl">
          <h3>Profitez des améliorations tout de suite</h3>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_04.png')?>" alt=""/></dt>
            <dd>
              <h4>Nettoyer et optimiser </h4>
              <h5>Accélère l'ordinateur lent jusqu'à 200% </h5>
              <p>
                Nettoyez tous les fichiers inutiles et optimisez le processeur et la RAM pour un démarrage et un système deux fois plus rapides.
              </p>
              <span>Fonction exclusive pro</span>
            </dd>
          </dl>
          <dl class="last">
            <dt><img src="<?php echo getStaticUrl('images/intro_05.png')?>" alt=""/></dt>
            <dd>
              <h4>Internet Booster</h4>
              <h5>Accélère la connexion Internet jusqu'à 300%</h5>
              <p>
                Optimisez les paramètres du navigateur pour<br> un téléchargement, une navigation sur le Web,<br> un jeu en ligne et une visualisation YouTube<br> trois fois plus rapides
              </p>
              <span>Fonction exclusive pro</span>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <img src="<?php echo getStaticUrl('images/computer_02.png')?>" alt=""/>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Résolvez vos problèmes de PC frustrants en 1 clic</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema"><span class="cry">Problème</span></th>
              <th class="itemb"></th>
              <th class="itemc"><span class="smile">Solution</span></th>
            </tr>
          </thead>
          <tbody>

            <tr class="first">
              <td class="itema">
                <p>Réception du message "vous êtes à court d'espace disque<br> sur Disque local (X:) "</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Analyse et supprime automatiquement les fichiers<br> inutiles pour libérer de l'espace disque</p>
                <b><i class="all-icons">■</i> Fonction exclusive pro </b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>

            <tr>
              <td class="itema">
                <p>Le système démarre et marche lentement </p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Libération automatique de la mémoire pour accélérer<br> le PC jusqu'à 200% lorsque l'ordinateur devient lent</p>
                <b><i class="all-icons">■</i> Fonction exclusive pro </b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>

            <tr>
              <td class="itema">
                <p>Lenteur des téléchargements Internet, navigation sur<br> Internet, jeux en ligne et visualisations sur YouTube </p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Optimise les paramètres du navigateur pour accélérer la<br> connexion Internet jusqu'à 300%</p>
                <b><i class="all-icons">■</i> Fonction exclusive pro </b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>

            <tr>
              <td class="itema">
                <p>Le système se bloque soudainement et se fige<br> lorsque vous naviguez sur Internet</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Nettoie et répare les registres pour améliorer la stabilité et<br> la sécurité du système</p>
                <b><i class="all-icons">■</i> Fonction exclusive pro </b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>

            <tr>
              <td class="itema">
                <p>Les publicités pour les produits que vous avez regardés<br> en ligne vous suivent</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Bloque automatiquement les publicités et efface vos traces<br> en ligne pour vous empêcher d'être traqué par des pirates</p>
                <b><i class="all-icons">■</i> Fonction exclusive pro </b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- ad-points start -->
    <div class="ad-points wrapper">
      <h2>Ce que nous faisons pour nos utilisateurs</h2>
      <ul class="clearfix">
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_01.png')?>" alt=""/></div>
          <p class="light">Résolvons</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num01.png')?>" alt=""/></div>
          <p>Problèmes de PC par mois</p>
        </li>
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_02.png')?>" alt=""/></div>
          <p class="light">Économisons</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num02.png')?>" alt=""/></div>
          <p>Heures par mois</p>
        </li>
        <li class="last">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_03.png')?>" alt=""/></div>
          <p class="light">Économisons</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num03.png')?>" alt=""/></div>
          <p>Milliards par an</p>
        </li>
      </ul>
    </div>
    <!-- ad-points end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Pré-commandez pour 0 € maintenant pour rendre votre PC plus rapide, plus propre<br>
          et plus sécurisé</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=fr-asc12preorder30&ref=fr_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialfr');"
           data-text="VITE, J’EN PROFITE">
          <span>VITE, J’EN PROFITE</span>
        </a>
        <ul class="price">
          <li><span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <b class="reduceGift"><span class="packsNum">**</span></b> dispos!</li>
        </ul>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
            <dd>
              <h2>Avis des médias</h2>
              <p>
                « Il n'y a rien de pire qu'un ordinateur qui tombe en panne trop souvent. Cela entrave votre capacité à travailler ou à jouer à des jeux. Advanced SystemCare répare tous les problèmes indépendants en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides. Il offre également la possiblité de donner un coup de pouce à votre ordinateur pour optimiser l'expérience PC. »
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                « J’aime beaucoup les fonctionnalités de base dans la version gratuite et finalement j’ai acheté la version complète. Il gardait mon ordinateur propre et loin de tout « bug » depuis plusieurs années et il ne m’a jamais laissé tombé jusqu’à présent. J’ai contacté récemment l’équipe d’Advanced SystemCare, et ils m’ont répondu en un jour ou deux avec tout ce que je voulais savoir. D’après moi, le support service est un énorme facteur décisif concernant la fidélisation de ce produit, et ASC est le gagnant à la fois en produit et en support. »
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                « Comme la plupart des gens, je ne suis pas un expert en informatique. Je ne sais pas combien de programmes j'ai pu essayé au fil des ans, tous prétendent être le meilleur parmi les plus utilisés sur le marché des logiciels d’optimisation, mais Advanced SystemCare Pro est vraiment le meilleur programme que j'ai jamais utilisé. Depuis que j'ai ce programme génial je n'ai pas eu à appeler le support technique, pas même une fois. Il a surpassé toutes mes attentes, toujours à jour, et l’interface est très cool aussi! Merci à tous d’avoir facilité ma vie. »
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                « Ce programme est le meilleur que j’ai jamais essayé. Mon ordinateur est beaucoup plus performant depuis que j’ai téléchargé ASC. Il a nettoyé les fichiers indésirables, les fichiers en double et les dossiers vides. Je l’ai aussi utilisé pour déchiqueter des fichiers. Je vous recommande d’acheter ce programme, pas cher et très efficace pour maximiser les performances de votre PC. Vous allez l’adorer, je vous le promets. »
              </p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                « En tant que technicien de réparation d’ordinateurs, je trouve que la plupart des problèmes communs peuvent être souvent résolu en scannant le PC avec ASC free. Quand j’ai fini la réparation , je proposais habituellement à mes clients d’acheter la version Pro. Qui a besoin d’un technicien lorsque l’on peut profiter d’un logiciel aussi puissant qu’Advanced SystemCare Pro 24-7? C’est le meilleur produit qu’un utilisateur débutant peut acheter. Merci à IObit qui rend mon travail plus facile. »
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Recommandé par ces médias</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
            <dd>
              <h4>Satisfait ou Remboursé</h4>
              <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/></dt>
            <dd>
              <h4>Paiement 100% Sécurisé</h4>
              <p>IObit vous propose huit modes de paiement sécurisé pour régler vos achats.</p>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt=""/></dt>
            <dd>
              <h4>Obtenir la licence</h4>
              <p>Vous recevrez le code de licence dans les minutes après l’achat.</p>
            </dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <dl>
            <dd>
              * À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement facturé 17,99€. Cette réduction de 60% sur le prix original de 49,99€ est un bonus
            </dd>
            <dd>uniquement pour les précommandes! </dd>
          </dl>
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 PRO"/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page,  <b class="reduceGift"><span class="packsNum">**</span></b> dispos!
            </li>
            <li id="floatdown" class="countdown">Rupture de stock prévu: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <a class="buybtn fr" 
           href="https://www.iobit.com/buy.php?product=fr-asc12preorder30&ref=fr_asc12preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialfr');"
           data-text="J’EN PROFITE - 0€">
          <span>J’EN PROFITE - 0€</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->
  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    refStr="<?php echo $refStr;?>";
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var onGa = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialpopfr');";
    var aff = "<?php echo $_GET['aff'];?>";
  </script>

</body>
</html>