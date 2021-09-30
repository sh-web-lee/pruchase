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
  $c_name = 'frascxnovexp_p' . $date;
  $c_name_t='frascxnovexp_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(50,50);
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
$refStr='';
if(in_array($_GET['pop'],array('xr_asce'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Spécial Noël - Réservé uniquement au renouvellement  - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <div class="title">
      <h1>VENTE FLASH - SPÉCIAL NOËL</h1>
      <p>Joyeuses fêtes - ne manquez pas nos cadeaux préparés pour vous</p>
    </div>
    <!-- message -->
    <div class="message clearfix">

      <!-- 1pc asc -->
      <div class="message-box small fl">
        <!-- off -->
        <div class="off">-40%</div>
        <!-- box -->
        <div class="box">Advanced SystemCare PRO</div>
        <!-- price -->
        <p class="price"><span><big>17</big> <sup>€</sup> <sub>99</sub></span> <del>29,99€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-asc131pc1799&ref=fr_asc131pc1799exp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaserexpb-fr')">
          <i class="all-icons"></i> Vite, J’en Profite
        </a>
      </div>

      <!-- 3pc asc -->
      <div class="message-box large fr">
        <!-- off -->
        <div class="off">-85%</div>
        <!-- box -->
        <div class="box">
          Advanced SystemCare PRO+bundles
          <span>Cadeaux valent 89,97€</span>
        </div>
        <!-- price -->
        <p class="price large"><span><big>17</big> <sup>€</sup> <sub>99</sub></span> <del>139,96€</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=fr-asc13isuiusd1799&ref=fr_asc13isuiusd1799rightcorexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaseexpa-fr')">
          <i class="all-icons"></i> Vite, J’en Profite
        </a>
        <!-- countdown -->
        <div class="countdown">
          <i class="all-icons"></i>
         Vite, 
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
        </div>  unités dispos *
        </div>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->


<!-- intro -->
<div class="intro">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Pourquoi choisir Advanced SystemCare 13 PRO ?</h2>
    <div class="title">
      <h2>Pourquoi choisir Advanced SystemCare 13 PRO ?</h2>
    </div>
    <!-- left-message -->
    <div class="left-message">
      <!-- message -->
      <div class="message">
        <div class="list">
          <h3>Ordinateur plus rapide </h3>
          <dl>
            <dt>PC 200%* plus rapide</dt>
            <dd>
              Nettoyez tous les fichiers inutiles et optimisez le <br>
              processeur et la RAM pour un démarrage de <br>
              l’ordinateur et un système deux fois plus rapides.
            </dd>
          </dl>
          <dl>
            <dt>Internet 300%* plus rapide</dt>
            <dd>
              Optimisez les paramètres du navigateur pour un <br>
              téléchargement,une navigation sur le Web, un jeu en <br>
              ligne et une visualisation YouTube trois fois plus rapides.
            </dd>
          </dl>
        </div>
      </div>
      <!-- message -->
      <div class="message">
        <div class="list">
          <h3 class="small">Navigation plus sécurisée</h3>
          <dl>
            <dt>Protection de la vie privée</dt>
            <dd>Bloquez l’accès secret à vos données sensibles <br>
              telles que les contacts, les données de messagerie, <br>
              Dropbox, OneDrive, etc.
            </dd>
          </dl>
          <dl>
            <dt>Navigation propre & sûre en ligne</dt>
            <dd>
              Effacez automatiquement les données de navigation <br>
              et empêchez les trackers de rechercher ce que vous lisez, <br>
              visualisez et achetez en ligne.
            </dd>
          </dl>
        </div>
      </div>

    </div>
    <!-- change-img-->
    <div class="change-img">
      <!-- list01 -->
      <div class="list-img list01 show">
        <img src="<?php echo getStaticUrl('images/intro1.png')?>" alt="" class="nomal">
        <div class="scan">
          <div class="circleprogress-content">
            <div class="circle right">
              <div class="circleprogress rightcircle"></div>
            </div>
            <div class="circle left">
              <div class="circleprogress leftcircle"></div>
            </div>
          </div>
        </div>
        <div class="img-before">
          <span class="change-num">50</span>
          <span class="completed"></span>
          <div class="circle">
            <div class="top-circle"></div>
            <div class="bottom-circle"></div>
          </div>
        </div>

      </div>
      <!-- list02 -->
      <div class="list-img list02">
        <img src="<?php echo getStaticUrl('images/intro2.png')?>" alt="" class="nomal2">
        <div class="privacy">
          <span class="icon"></span>
          <div class="check"></div>
          <span class="text">1 accès secret</span>
        </div>
        <div class="privacy-right"></div>
      </div>
    </div>
  </div>
</div>
<!-- end intro -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper">
    <!-- title -->
    <h2>Cadeaux de Noël limités à ne pas rater</h2>
    <!-- gifts message -->
    <div class="gifts-message clearfix">
      <!-- iu -->
      <div class="gifts-box">
        <dl class="iu">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon01.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>IObit Uninstaller 9 PRO</h3>
            <em>(1 an / 1 PC)</em>
            <span class="arrow"></span>
            <ul>
              <li>Désinstaller les logiciels, les plug-ins et le bundleware en un seul clic.</li>
              <li>Nettoyer automatiquement les restes de programmes désinstallés.</li>
            </ul>
          </dd>
        </dl>
      </div>
      <!-- sd -->
      <div class="gifts-box">
        <dl class="sd">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon02.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>Smart Defrag 6 PRO</h3>
            <em>(1 an / 1 PC)</em>
            <span class="arrow"></span>
            <ul>
              <li>Défragmenter automatiquement les fichiers et disques sélectionnés en <br> temps réel.</li>
              <li>Maximiser les performances et la durée de votre disque.</li>
            </ul>
          </dd>
        </dl>
      </div>
      <!-- isu -->
      <div class="gifts-box last">
        <dl class="isu">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon03.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>IObit Software Updater 2 PRO</h3>
            <em>(1 an / 1 PC)</em>
            <span class="arrow"></span>
            <ul>
              <li>Télécharger les mises à jour de logiciels sans ouvrir de navigateur Web.</li>
              <li>Garder tous les logiciels à jour en toute simplicité.</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
    <!-- buybtn -->
    <a class="buybtn larger"
       href="https://www.iobit.com/buy.php?product=fr-asc13isuiusd1799&ref=fr_asc13isuiusd1799rightcorexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaseexpa-fr')">
      <i class="all-icons"></i> Profitez de mes cadeaux
    </a>
  </div>
</div>
<!-- end gifts -->


<!-- comparison -->
<div class="comparison wrapper">
  <h2>Ne laissez pas les fichiers inutiles ralentir votre PC !</h2>
  <table>
    <thead>
      <tr>
        <th class="itema"><big>Problèmes</big> du PC que vous pouvez rencontrer : </th>
        <th class="itemb"><big>Solutions</big> dont vous pouvez profiter :</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="itema">
          Le système instable provoquerait des  <span>plantages de Windows</span> 
        </td>
        <td class="itemb">
          <span>Nettoyage en profondeur  </span> des fichiers de registre pour résoudre les problèmes du système
        </td>
      </tr>
      <tr>
        <td class="itema">
          L’optimisation manuelle  <span> ne garantit pas </span> la vitesse maximale de votre PC
        </td>
        <td class="itemb">
          <span>Nettoyage automatique </span> de la RAM pour un fonctionnement plus fluide du PC
        </td>
      </tr>
      <tr>
        <td class="itema">
          Les performances de disque  <span>ne sont pas entièrement </span> optimisées
        </td>
        <td class="itemb">
          Accélération de connexion Internet <span> accélère   </span> la vitesse Internet  <span> (x300%*)</span>
        </td>
      </tr>
      <tr>
        <td class="itema">
          Optimisation au démarrage de <span>base</span> 
        </td>
        <td class="itemb">
          Optimiser le démarrage jusqu’à  <span>200%* plus rapide </span>
        </td>
      </tr>
      <tr>
        <td class="itema">
          La protection de <span>base</span> ne peuvent pas garantir la sécurité de votre vie privée
        </td>
        <td class="itemb">
          Protection des données personnelles <span>protège complètement</span> votre vie privée
        </td>
      </tr>
      <tr>
        <td class="itema">
          Les dernières menaces risquent de <span>pénétrer</span> dans votre PC et d’ <span>attaquer</span> votre système
        </td>
        <td class="itemb">
           <span>Protection en temps réel</span> contre les infections de sypwares
        </td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->
<div class="feature">
    <div class="wrapper clearfix">
      <h2>Plus d’avantages dont vous profiterez <br> d’Advanced SystemCare 13 PRO !  </h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""></dt>
        <dd>
          <h3>Plus propre</h3>
          <p>Détecte et nettoie plus de <strong>4 Go</strong>* de fichiers inutiles</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""></dt>
        <dd>
          <h3>Complet</h3>
          <p>Balaie les traces privées de plus de <strong>200</strong> logiciels et de <strong>15</strong> navigateurs pour tous les comptes d’utilisateur </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""></dt>
        <dd>
          <h3>Plus sécurisé</h3>
          <p> <strong>Protège votre e-mail  </strong>contre diverses menaces liées au courrier électronique</p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""></dt>
        <dd>
          <h3>Plus grande</h3>
          <p>La base de données logicielle a augmentée de <strong>60%</strong> pour mettre à jour plus de logiciels</p>
        </dd>
      </dl>
    </div>
  </div>
<!-- review-content -->
<div class="review-content">
  <div class="wrapper">
    <!-- title -->
    <!-- review start -->
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
  </div>
</div>
<!-- end review-content -->

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
      <dd>*.Licence gratuite d’AMC Security PRO, la version complète comprend annonces intégrées.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">
      <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tous droits réservés</p>
    </div>
  </div>
  </div>

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
      <p><strong>17,99€</strong> <del> 139,96€ </del></p>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-asc13isuiusd1799&ref=fr_asc13isuiusd1799rightcorexp<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchaseexpa-fr')">
        Renouvelez Maintenant 
      </a>
    </div>
  </div>
</div>

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/TweenMax.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>