<?php 
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$cName='frdbau_re';
$reduceNum=empty($_COOKIE[$cName])?(ceil(microtime_float()*1000/20000)):$_COOKIE[$cName];
$buyNum = ceil(microtime_float()*1000/20000) - $reduceNum;
if($_GET['action']=='getBuyNum'){
  setcookie($cName, $reduceNum, time() + 3600 * 24 *30 *7);
  echo $buyNum;
  exit();
}

$refstr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refstr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refstr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refstr.='-'.$_GET['pop'];
}
$refstr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrom
  e=1" >
  <title>Passez à la version PRO d'Advanced SystemCare pour un PC plus rapide, plus propre et plus sécurisé.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <div class="top-box clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
      <div class="fr">
        <h1>Advanced SystemCare PRO</h1>
        <h2>Passez PRO maintenant pour un PC plus rapide, plus stable et plus sûr ! </h2>
      </div>
    </div>
    <div class="clearfix">
      <div class="offer" data-name="pc3">
        <h3>3 Mois</h3>
        <div class="price">
          <p><strong><big>3</big>,33€</strong> / mois</p>
          <a class="buybtn gray"
             href="https://www.iobit.com/buy.php?product=fr-asc133months999&ref=fr_asc133months999return<?php echo $refstr; ?>&aff=&refs=fr_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchasereturn-fr');">
            VITE, J’EN PROFITE 
          </a>
        </div>
        <ul>
          <li>3 mois / 3 PC  <b>9,99€</b></li>
          <li class="last">Total  <b>9,99€</b></li>
        </ul>
        <span class="save">Économisez 0€</span>
      </div>
      <div class="offer twelve" data-name="pc12">
        <h3>12 Mois</h3>
        <div class="price">
          <p><strong><big>1</big>,50€</strong> / mois</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-asc133pc1799&ref=fr_asc1312months1799return<?php echo $refstr; ?>&aff=&refs=fr_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchasereturn-fr');">
            VITE, J’EN PROFITE 
          </a>
        </div>
        <ul>
          <li>12 mois / 3 PC  <b>49,99€</b></li>
          <li>Réduction <b>-65%</b></li>
          <li class="last">Total  <b>17,99€</b></li>
        </ul>
        <span class="save">Économisez 32,00€</span>
        <span class="discount">65% de remise</span>
      </div>
      <div class="offer sixmouth" data-name="pc6">
        <h3>6 Mois</h3>
        <div class="price">
          <p><strong><big>2</big>,17€</strong> / mois</p>
          <a class="buybtn gray"
             href="https://www.iobit.com/buy.php?product=fr-asc136months1299&ref=fr_asc136months1299return<?php echo $refstr; ?>&aff=&refs=fr_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchasereturn-fr');">
            VITE, J’EN PROFITE 
          </a>
        </div>
        <ul>
          <li>6 mois / 3 PC  <b>24,99€</b></li>
          <li>Réduction <b>-50%</b></li>
          <li class="last">Total  <b>12,99€</b></li>
        </ul>
        <span class="save">Économisez 12,00€</span>
        <span class="discount">50% de remise</span>
      </div>
   </div>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment wrapper">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<!-- payment end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper clearfix">
    <h2>Votre PC a besoin de soins professionnels afin de libérer tout son<br> potentiel et prévenir les violations de votre vie privée.</h2>
    <div class="title">
      <h2>Votre PC a besoin de soins professionnels afin de libérer tout son<br> potentiel et prévenir les violations de votre vie privée.</h2>
    </div>
    <div class="left-message">
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
    <div class="change-img">
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
<!-- intro end -->

<!-- review start -->
<div class="review">
  <div class="wrapper clearfix">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
    <div class="media"><img src="<?php echo getStaticUrl('images/media.png')?>" alt=""/></div>
    <div class="usereview">
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="CNET"/>
          </div>
          <b>CNET</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/01net.png')?>" alt="01net.com"/>
          </div>
          <b>01net.com</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"/>
          </div>
          <b>Richard Beavers</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/danny-r-sheets.png')?>" alt="Danny R. Sheets"/>
          </div>
          <b>Danny R. Sheets</b>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/tony-fisher.png')?>" alt="Tony Fisher"/>
          </div>
          <b>Tony Fisher</b>
        </li>
      </ul>
      <div class="userbox">
        <dl class="one active">
          <dd>
            <p>
              Advanced SystemCare répare tous les problèmes indépendants en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides. Il offre également la possibilité de donner un coup de pouce à votre ordinateur pour optimiser l'expérience PC.
            </p>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              Advanced SystemCare Pro intègre des outils indispensables pour surveiller la santé de votre système en vérifiant l'état des disques durs, en bouchant les failles de sécurité et pour protéger votre vie privée en effaçant les fichiers sensibles ainsi qu'une fonction Turbo Boost pour nettoyer votre PC en profondeur.
            </p>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              Je ne regrette pas que j'ai choisi la version PRO, parce que je ne souffrais plus de problèmes du système après la mise à niveau vers la version payante. Advanced SystemCare Pro est le seul programme que je voudrais recommander en fonction de mes expériences.
            </p>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              Je trouve que ASC PRO mérite d’être acheté car il peut vraiment résoudre les problèmes informatiques. Merci à ASC de m’avoir apporté une expérience plus agréable sur PC.
            </p>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              J’utilise Advanced SystemCare Pro depuis longtemps. Il peut détecter et résoudre les problèmes très rapidement et dispose de nombreuses fonctionnalités supplémentaires dont vous pouvez bénéficier pour un démarrage du PC plus rapide et un système plus stable.
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- present start -->
<div class="present wrapper">
  <h2>Ce que nous faisons pour nos utilisateurs en optimisation informatique</h2>
  <div class="clearfix">
    <dl class="one clearfix">
      <dt><img src="<?php echo getStaticUrl('images/present01.png')?>" alt=""/></dt>
      <dd>
        <p class="first">Résolvons les problèmes de PC pour</p>
        <h3>30,000,000</h3>
        <p>utilisateurs</p>
      </dd>
    </dl>
    <dl class="clearfix">
      <dt><img src="<?php echo getStaticUrl('images/present02.png')?>" alt=""/></dt>
      <dd>
        <p class="first">Économisons</p>
        <h3>2,666,667</h3>
        <p>heures par mois</p>
      </dd>
    </dl>
    <dl class="three clearfix">
      <dt><img src="<?php echo getStaticUrl('images/present03.png')?>" alt=""/></dt>
      <dd>
        <p class="first">Économisons</p>
        <h3>$1.18 billion</h3>
        <p>par an</p>
      </dd>
    </dl>
  </div>
</div>
<!-- present end -->

<!-- comparison start -->
<div id="compare" class="comparison wrapper">
  <h2>Aperçu des différences entre votre édition actuelle et la version PRO</h2>
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th colspan="2"></th>
        <th class="itema"><div>Advanced<br> SystemCare PRO <span></span></div></th>
        <th class="space"></th>
        <th class="itemb"><div>Votre édition actuelle <span></span></div></th>
      </tr>    
    </thead>
    <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_01.png')?>" alt=""/></td>
        <td class="virtue">Vérifiez l’état des pilotes en un seul clic</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png')?>" alt=""/></td>
        <td class="virtue">Réparer les failles de sécurité pour empêcher le piratage en un clic  <span>nouveau</span></td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_05.png')?>" alt=""/></td>
        <td class="virtue">Mettez vos données personnelles à l'abris des programmes frauduleux <span>nouveau</span></td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_04.png')?>" alt=""/></td>
        <td class="virtue">Personne ne peut voler votre empreinte digitale numérique pour vous suivre en ligne <span>nouveau</span></td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png')?>" alt=""/></td>
        <td class="virtue">Optimisation de la vitesse Internet jusqu'à 300% avec Internet Booster <span class="red">amélioré</span></td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png')?>" alt=""/></td>
        <td class="virtue">Le démarrage jusqu'à 200% plus rapide de votre PC <span class="red">amélioré</span></td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_07.png')?>" alt=""/></td>
        <td class="virtue">Nettoyage des registres empilés pour un système stable <span class="red">amélioré</span></td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png')?>" alt=""/></td>
        <td class="virtue">Nouveau moteur d'optimisation du disque pour maximiser les performances PC  <span>nouveau</span></td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png')?>" alt=""/></td>
        <td class="virtue">Protection en temps réel contre les menaces de sécurité</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_10.png')?>" alt=""/></td>
        <td class="virtue">Déctection complète contre les infections les plus approfondies  </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_15.png')?>" alt=""/></td>
        <td class="virtue">Supprimer Auto les publicités & la vie privée en ligne pour une navigation plus sûre </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png')?>" alt=""/></td>
        <td class="virtue">Nettoyage Auto de la RAM pour un système plus fluide </td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png')?>" alt=""/></td>
        <td class="virtue">Mise à jour automatique vers la dernière version</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_16.png')?>" alt=""/></td>
        <td class="virtue">Soutien technique gratuit de 24/7 à la demande</td>
        <td class="itema"><i class="all-icons"></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="all-icons gray"></i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper clearfix">
    <div class="showcase fl">
      <span class="on"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/></span>
      <span class="sixmonth"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/></span>
      <span class="threemonth"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/></span>
    </div>
    <ul class="changelist fl">
      <li class="on twelve" data-num="1"><span>12 mois, 3 PC</span><b>Prix choc: 17,99€</b></li>
      <li class="sixmonth" data-num="2"><span>6 mois, 3 PC  </span><b>Prix réduit: 12,99€</b></li>
      <li data-num="0"><span>3 mois, 3 PC </span><b>Prix d’essai: 9,99€</b></li>
    </ul>
    <div class="price fr">
      <p>seulement <strong><big>1</big>,50€</strong> par mois</p>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fr-asc133pc1799&ref=fr_asc1312months1799return<?php echo $refstr; ?>&aff=&refs=fr_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchasereturn-fr');">
        VITE, J’EN PROFITE 
      </a>
    </div>
  </div>
</div>
<!-- bottomcart end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
    <dd><h3>Satisfait ou Remboursé</h3></dd>
    <dd>Garantie satisfait ou remboursé pendant 60 <br> jours après la date d’achat.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
    <dd><h3>Paiement 100% Sécurisé</h3></dd>
    <dd>IObit vous propose huit modes de paiement <br> sécurisés pour régler vos achats.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/service.png" alt=""></dt>
    <dd><h3>Obtenir la licence</h3></dd>
    <dd>Vous recevrez le code de licence dans les <br> minutes après l’achat.</dd>
  </dl>
</div>
<!-- service end -->

<!-- annotation start -->
<dl class="annotation wrapper">
  <dt>Note:</dt>
  <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
  <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
</dl>
<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
<!-- annotation end -->

<script src="<?php echo getStaticUrl('script/TweenMax.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>