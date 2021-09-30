<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','officialfree','officialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr','crcur',
        'asc_promote3','asc_promote4','asc_promote5','asc_promote6','asc_promote7','asc_promote8',
        'asc_promote9','asc_promote10','asc_promote11','asc_promote12','asc_pm5','asc_pm6','asc_so1','asc_so3',
        'asc_promote13','asc_promote14','asc_promote15','asc_promote16','asc_promote17','asc_promote18')
)){
  $refstr='-'.$_GET['st'];
}else{
  $refstr='';
}

if(in_array($_GET['ref'],array('nc_fr'))){
  $refstr.='-'.$_GET['ref'];
}

if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc','xi_asc','xb_asc'))){
  $refstr.='-'.$_GET['pop'];
}
$refstr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];


?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Vente flash de nouvel an - ne manquez pas nos cadeaux préparés pour vous - IObit</title>
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
      <h1>VENTE FLASH DE NOUVEL AN</h1>
      <p>Joyeuses fêtes - ne manquez pas nos cadeaux préparés pour vous</p>
    </div>
    <!-- message -->
    <div class="message clearfix">

      <!-- 1pc asc -->
      <div class="message-box small fl">
        <!-- off -->
        <div class="off">-60%</div>
        <!-- box -->
        <div class="box">Advanced SystemCare PRO</div>
        <!-- price -->
        <p class="price"><span><big>19</big> <sup>€</sup> <sub>99</sub></span> <del>49,99€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-asc133pc1999&ref=fr_asc133pc1999purchase1912<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911b-fr')">
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
        <p class="price large"><span><big>19</big> <sup>€</sup> <sub>99</sub></span> <del>149,96€</del></p>
        <!-- buybtn -->
        <a class="buybtn large"
           href="https://www.iobit.com/buy.php?product=fr-asc133pcpfiusd1999&ref=fr_asc133pcpfiusd1999purchase1912<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911ba-fr')">
          <i class="all-icons"></i> Vite, J’en Profite
        </a>
        <!-- countdown -->
        <p class="countdown">
          <i class="all-icons"></i>
          <strong>00</strong> H :
          <strong>00</strong> M :
          <strong>00</strong> :
          <strong class="last">000</strong>*
        </p>
      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment wrapper">
  <img src="<?php echo getStaticUrl('images/payment.png')?>images/payment.png" alt="">
</div>
<!-- end payment -->

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
    <h2>Profitez de vos cadeaux de nouvel an en temps limité !</h2>
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
      <!-- pf -->
      <div class="gifts-box last">
        <dl class="pf">
          <dt><img class="gifts-icon" src="<?php echo getStaticUrl('images/gifts-icon03.png')?>" alt=""></dt>
          <dd>
            <!-- box -->
            <div class="box"></div>
            <h3>Protected Folder</h3>
            <em>(1 an / 1 PC)</em>
            <span class="arrow"></span>
            <ul>
              <li>Vous pouvez vous prémunir contre la perte, le vol et la fuite de données.</li>
              <li>Un mot de passe empêche quiconque de les ouvrir.</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
    <!-- buybtn -->
    <a class="buybtn larger"
       href="https://www.iobit.com/buy.php?product=fr-asc133pcpfiusd1999&ref=fr_asc133pcpfiusd1999purchase1912<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911ba-fr')">
      <i class="all-icons"></i> Profitez de mes cadeaux
    </a>
  </div>
</div>
<!-- end gifts -->

<!-- comparison -->
<div class="comparison wrapper" id="compare">
  <!-- title -->
  <h2>En savoir plus sur Advanced SystemCare 13 PRO</h2>
  <!-- table -->
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text"></th>
      <th class="space"></th>
      <th class="itemb">
        Advanced SystemCare <strong>Free</strong>
      </th>
      <th class="space"></th>
      <th class="itema">
        Advanced SystemCare <strong>PRO</strong>
      </th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_01.png')?>" alt=""/></td>
      <td class="virtue">Nettoyage, réparation et optimisation du système de base </td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_02.png')?>" alt=""/></td>
      <td class="virtue"><span>Bloquer les liens malveillants et les expéditeurs suspects dans les e-mails Web</span> <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_04.png')?>" alt=""/></td>
      <td class="virtue"><span>Personne ne peut voler votre empreinte digitale numérique pour vous suivre en lignen</span> <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_07.png')?>" alt=""/></td>
      <td class="virtue"><span>Nettoyage des registres empilés pour un système stable </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png')?>" alt=""/></td>
      <td class="virtue">Nouveau moteur d'optimisation du disque pour maximiser les performances PC <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png')?>" alt=""/></td>
      <td class="virtue">Protection en temps réel contre les menaces de sécurité</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_10.png')?>" alt=""/></td>
      <td class="virtue">Déctection complète contre les infections les plus approfondies</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 12 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png')?>" alt=""/></td>
      <td class="virtue"><span>Nettoyage Auto de la RAM pour un système plus fluide</span</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 13 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png')?>" alt=""/></td>
      <td class="virtue">Mise à jour automatique vers la dernière version</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <!-- 14 -->
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png')?>" alt=""/></td>
      <td class="virtue">Soutien technique gratuit de 24/7 à la demande</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- review-content -->
<div class="review-content">
  <div class="wrapper">
    <!-- title -->
    <h2>Ce que nous faisons pour nos utilisateurs en optimisation informatique</h2>
    <div class="present">
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
        <dd>
          Résolvons les problèmes de PC pour <strong>30,000,000</strong> utilisateurs
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
        <dd>
          Économisons <strong>2,666,667</strong> heures par mois
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
        <dd>
          Économisons <strong>$1.18 bilion </strong> par an
        </dd>
      </dl>
    </div>
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

<!-- awards -->
<div class="awards">
  <div class="wrapper">
    <h2>APPROUVÉ PAR CES MÉDIAS CÉLÈBRES DU MONDE</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- end awards -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- box -->
    <div class="box fl">Advanced SystemCare PRO</div>
    <!-- bottombuy-mid -->
    <div class="bottombuy-mid fl">
      <!-- countdown -->
      <p class="countdown">
        <strong>00</strong> H :
        <strong>00</strong> M :
        <strong>00</strong> :
        <strong class="last">000</strong>*
      </p>
      <!-- off -->
      <div class="off"></div>
    </div>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <!-- price -->
        <p class="price white"><span><big>19</big> <sup>€</sup> <sub>99</sub></span> <del>149,96€</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=fr-asc133pcpfiusd1999&ref=fr_asc133pcpfiusd1999purchase1912<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911ba-fr')">
          <i class="all-icons"></i> Vite, J’en Profite
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl class="astisfait fl">
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
    <dd>
      <h3>Satisfait ou Remboursé</h3>
      <p>Garantie satisfait ou <br> remboursé pendant 60 <br> jours après la date d’achat.</p>
    </dd>
  </dl>
  <dl class="paiement fl">
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png') ?>" alt=""></dt>
    <dd>
      <h3>Paiement 100% Sécurisé</h3>
      <P>IObit vous propose sept <br> modes de paiement sécurisé <br> pour régler vos achats.</P>
    </dd>
  </dl>
  <dl class="modes fl">
    <dt><img src="<?php echo getStaticUrl('images/modes.png') ?>" alt=""></dt>
    <dd>
      <h3>Modes de paiement acceptés</h3>
      <p>Nous vous proposons 7 <br> modes de paiement</p>
    </dd>
  </dl>
  <dl class="service-client fr">
    <dt><img src="<?php echo getStaticUrl('images/service-client.png') ?>" alt=""></dt>
    <dd>
      <h3>Service Client à votre écoute</h3>
      <p>
        Notre Support Technique <br> gratuit est à votre disposition <br> 24 heures sur 24, 7 <br> jours sur 7.
      </p>
    </dd>
  </dl>
</div>
<!-- service end -->

<!-- footer -->
<div class="footer wrapper">
  <div class="notes">
    <p>Note:</p>
    <p>*. Les données peuvent varier en fonction du système ou de l'ordinateur.</p>
    <p>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</p>
  </div>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tous droits réservés</p>
</div>
<!-- footer end -->

<!-- float -->
<div class="float">
  <p>
    Jusqu’à
    <b>-85%</b>
    Sur la version de 3 PC
  </p>
  <!-- buybtn -->
  <a class="buybtn small"
     href="https://www.iobit.com/buy.php?product=fr-asc133pcpfiusd1999&ref=fr_asc133pcpfiusd1999purchase1912<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
     onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911bpp-fr')">
    J’en Profite
  </a>
  <!-- close -->
  <a class="close"
     href="javascript: closeFloat();"
     onclick="ga('send', 'event', 'ascclose', 'click', 'purchase-fr')">
    ×
  </a>
</div>
<!-- end float -->

<div class="popbg"></div>
<div class="popbox">
  <h2>FELICITATIONS</h2>
  <h4>Vous profiterez de <b>10%</b> de réduction supplémentaire !</h4>
  <div class="clearfix">
    <img class="left fl" src="<?php echo getStaticUrl('images/asc-pop-box.png') ?>" alt="" />
    <div class="right fl">
      <h3>Offre expirera dans <span class="count-box"><em class="secbox">6</em><em class="secbox">0</em>s</span></h3>
      <p><strong class="one">149,96€</strong> <strong class="two">19,99€</strong> <strong class="three">17,99€</strong></p>
      <a
          href="https://www.iobit.com/buy.php?product=fr-asc133pcpfiusd1799&ref=fr_asc133pcpfiusd1799purchase1912<?php echo $refstr; ?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
          onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911pop-fr')">
        <i class="all-icons"></i> VITE, J'EN PROFITE
      </a>
    </div>
  </div>
  <i class="close">X</i>
</div>

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/TweenMax.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>