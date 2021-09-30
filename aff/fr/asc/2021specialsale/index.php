<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}
$refstr = empty($_GET['ref']) ? 'fraff_asc14_2021specialsale' : ($_GET['ref']);
$affstr =$_GET['aff'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -85% sur Advanced SystemCare PRO - Vente Spéciale d'été - IObit </title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,700i&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
    <?php echo $gJavascript ['public']; ?>
    <?php echo $gJavascript ['head'] ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank"></a>
    <h1>Offre spÉciale pour le nouveau lancement </h1>
    <h3>N'OFFREZ QUE LE MEILLEUR À VOTRE PC À PETIT PRIX</h3>
    <div class="clearfix">
      <div class="offer left">
        <img src="<?php echo getStaticUrl('images/asc-three-box.png') ?>" alt=""/>
        <span class="off six">-60%</span>
        <div class="price">
          <p><strong>19<small>€99</small></strong> <del>49,99€</del></p>
          <a class="buybtn gray"
             href="https://www.iobit.com/buy.php?product=fraff-asc143pc1999&ref=<?php echo $refstr; ?>&aff=<?php echo $affstr; ?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142021specialsale')">
            <i class="all-icons"></i>
            <span>VITE,J’EN PROFITE</span>
          </a>
        </div>
        <ul class="list">
          <li>Système 200% plus rapide</li>
          <li>Internet 300% plus rapide</li>
          <li>Protection de la vie privée</li>
          <li>Prend en charge 3 PC (1 an)</li>
        </ul>
      </div>
      <div class="offer big">
        <img src="<?php echo getStaticUrl('images/asc-gift-box.png') ?>" alt=""/>
        <span class="off eight">-85%</span>
        <div id="topcount" class="countdown"><b>05</b>H: <b>28</b>M: <b>39</b>: <b class="last">033</b>*</div>
        <div class="price">
          <p><strong>19<small>€99</small></strong> <del>149,96€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fraff-asc143pcpfiusd1999&ref=<?php echo $refstr; ?>&aff=<?php echo $affstr; ?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142021specialsale')">
            <i class="all-icons"></i>
            <span>VITE,J’EN PROFITE</span>
          </a>
        </div>
        <ul class="list">
          <li>Système 200% plus rapide</li>
          <li>Internet 300% plus rapide</li>
          <li>Protection de la vie privée</li>
          <li>Prend en charge 3 PC (1 an)</li>
          <li>Déinstallation complète</li>
          <li>Performance maximale du disque</li>
          <li>Vitesse d’accès aux données plus rapide</li>
          <li>Protection des fichiers plus sûre</li>
        </ul>
      </div>
      <div class="offer right">
        <img src="<?php echo getStaticUrl('images/asc-one-box.png') ?>" alt=""/>
        <span class="off four">-40%</span>
        <div class="price">
          <p><strong>17<small>€99</small></strong> <del>29,99€</del></p>
          <a class="buybtn gray"
             href="https://www.iobit.com/buy.php?product=fraff-asc141pc1799&ref=<?php echo $refstr; ?>&aff=<?php echo $affstr; ?>"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142021specialsale')">
            <i class="all-icons"></i>
            <span>VITE,J’EN PROFITE</span>
          </a>
        </div>
        <ul class="list">
          <li>Système 200% plus rapide</li>
          <li>Internet 300% plus rapide</li>
          <li>Protection de la vie privée</li>
          <li>Prend en charge 1 PC (1 an)</li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!--payment start-->
<div class="payment"><img src="<?php echo getStaticUrl('images/payments.png') ?>" alt=""/></div>
<!--payment end-->

<!-- feature start -->
<div class="feature clearfix">
  <div class="wrapper">
    <h2>Pourquoi choisir Advanced SystemCare PRO</h2>
    <h4>Des fonctions plus poussées que la version gratuite</h4>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-05.png') ?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-05.png') ?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-01.png') ?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-02.png') ?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-03.png') ?>" alt="">
          </li>
          <li>
            <img src="<?php echo getStaticUrl('images/screenshot-04.png') ?>" alt="">
          </li>
        </ul>
      </div>
      <ul class="zoom">        
        <li class="fun1"></li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png') ?>" alt="">
          </div>
        </li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png') ?>" alt="">
          </div>
        </li>
        <li class="fun4">
          <!-- <div class="container">
            <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png') ?>" alt="">
          </div> -->
        </li>
        <li></li>
      </ul>
    </div>
    <div class="detail-list">
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>Nettoyage plus profond avec l'IA</h3>
          <p>
            Nettoyez en profondeur les registres cachés, inutiles ou invalides pour libérer plus d'espace disque et améliorer complètement les performances du PC avec le nouveau mode IA.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>200%* plus rapide</h3>
          <p>Optimisez le processeur et la RAM et augmentez la vitesse du système pour accélérer le PC lent jusqu'à 200% de plus.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>300%* plus rapide</h3>
          <p>Optimisez les paramètres du navigateur pour accélérer la vitesse d’Internet jusqu’à 300% plus rapide</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Garder automatiquement vos logiciels à jour</h3>
          <p>Mettez à jour vos programmes obsolètes en un seul clic</p>
        </dd>
      </dl>
      <a class="textlink" href="Javascript:void(0);">En savoir plus sur PRO version>>></a>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- gifubox start -->
<div class="giftbox">
  <div class="wrapper">
    <h2>Profitez d’un PC plus rapide, plus propre et plus sûr avec ASC Pro et les outils PRO ci-dessous </h2>
    <div class="clearfix">
      <div class="giftlist">
        <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="IObit Uninstaller 10 PRO"/>
        <h3>IObit Uninstaller 10 PRO <small>(1 an / 1 PC)</small></h3>
        <ul>
          <li>Désinstaller les logiciels, les plug-ins et le bundleware en un seul clic</li>
          <li>Nettoyer automatiquement les restes de programmes désinstallés</li>
        </ul>
      </div>
      <div class="giftlist sd">
        <img src="<?php echo getStaticUrl('images/sd-box.png') ?>" alt="Smart Defrag 7 PRO"/>
        <h3>Smart Defrag 7 PRO <small>(1 an / 1 PC)</small></h3>
        <ul>
          <li>La performance maximale du disque</li>
          <li>Un accès plus rapide aux fichiers</li>
        </ul>
      </div>
      <div class="giftlist pf">
        <img src="<?php echo getStaticUrl('images/pf-box.png') ?>" alt="Protected Folder"/>
        <h3>Protected Folder <small>(1 an / 1 PC)</small></h3>
        <ul>
          <li>Vous prémunir contre la perte, le vol et la fuite de données. </li>
          <li>Un mot de passe empêche quiconque de les ouvrir</li>
        </ul>
      </div>
    </div>
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=fraff-asc143pcpfiusd1999&ref=<?php echo $refstr; ?>&aff=<?php echo $affstr; ?>"
       onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142021specialsale')">
      <i class="all-icons"></i>
      <span>VITE,J’EN PROFITE</span>
    </a>
    <div id="giftcount" class="countdown"><b>05</b>H: <b>28</b>M: <b>39</b>: <b>033</b>*</div>
  </div>
</div>
<!-- gifubox end -->

<!-- review start -->
<div class="reviews wrapper">
  <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
  <p>ASC - Le choix de plus de <span>250 millions</span> d'utilisateurs dans le monde</p>
  <div class="map">
    <span class="recover recover01 big"></span>
    <span class="recover recover02 middle"></span>
    <span class="recover recover03 smail"></span>
    <span class="recover recover04 big"></span>
    <span class="recover recover05 middle"></span>
    <span class="recover recover06 smail"></span>
    <span class="recover recover07 big"></span>
    <span class="recover recover08 middle"></span>
    <span class="recover recover09 smail"></span>
    <span class="recover recover10 smail"></span>
    <span class="recover recover11 smail"></span>
    <span class="recover recover12 smail"></span>
    <span class="recover recover13 middle"></span>
    <span class="recover recover14 middle"></span>
    <span class="recover recover15 smail"></span>
    <span class="recover recover16 smail"></span>
    <span class="recover recover17 big"></span>
    <span class="recover recover18 smail"></span>
    <span class="recover recover19 smail"></span>
    <span class="recover recover20 big"></span>
    <span class="recover recover21 middle"></span>
    <dl class="tradotto-da-tedesco">
      <dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
      <dd>C'est le meilleur programme qui nettoie et accélère mon PC<br> correctement et en toute sécurité.</dd>
    </dl>
    <dl class="html-it">
      <dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
      <dd>
        Advanced SystemCare Pro intègre des outils indispensables pour surveiller la santé <br>
        de votre système en vérifiant l'état des disques durs, en bouchant les failles de<br>
        sécurité et pour protéger votre vie privée en effaçant les fichiers sensibles ainsi<br>
        qu'une fonction Turbo Boost pour nettoyer votre PC en profondeur.
      </dd>
    </dl>
    <dl class="baixaki">
      <dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
      <dd>Advanced SystemCare a une efficacité exceptionnelle. Il est capable de détecter et de résoudre des<br> problèmes qui sont vraiment complexes, difficiles à imaginer.</dd>
    </dl>
    <dl class="charles-r-widick">
      <dd>Mon choix est sans aucun doute<br> Advanced SystemCare Pro.</dd>
      <dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
    </dl>
    <dl class="cnet">
      <dd>Advanced SystemCare vise à remédier à tout<br> problème affectant votre ordinateur!</dd>
      <dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
    </dl>
  </div>
</div>
<!-- review end -->

<!-- comparsion start -->
<div class="comparsion wrapper" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text">Découvrez plus d’avantages d’Advanced SystemCare PRO：</th>
      <th class="space"></th>
      <th class="itema">
        Advanced SystemCare <strong>PRO</strong>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_01.png') ?>" alt="" /></td>
      <td class="virtue">Nettoyage, réparation et optimisation du système de base</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_02.png') ?>" alt="" /></td>
      <td class="virtue"><span>Réparer les failles de sécurité pour empêcher le piratage en un clic</span> <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png') ?>" alt="" /></td>
      <td class="virtue"><span>Mettez vos données personnelles à l'abris des programmes frauduleux </span> <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_04.png') ?>" alt="" /></td>
      <td class="virtue"><span>Personne ne peut voler votre empreinte digitale numérique pour vous suivre en ligne</span> <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_05.png') ?>" alt="" /></td>
      <td class="virtue"><span>Optimisation de la vitesse Internet jusqu'à 300% avec Internet Booster </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png') ?>" alt="" /></td>
      <td class="virtue"><span>Le démarrage jusqu'à 200% plus rapide de votre PC </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_07.png') ?>" alt="" /></td>
      <td class="virtue"><span>Nettoyage des registres empilés pour un système stable </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png') ?>" alt="" /></td>
      <td class="virtue">Nouveau moteur d'optimisation du disque pour maximiser les performances PC <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png') ?>" alt="" /></td>
      <td class="virtue">Protection en temps réel contre les menaces de sécurité</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_10.png') ?>" alt="" /></td>
      <td class="virtue">Déctection complète contre les infections les plus approfondies</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_11.png') ?>" alt="" /></td>
      <td class="virtue">Supprimer Auto les publicités &amp; la vie privée en ligne pour une navigation plus sûre</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png') ?>" alt="" /></td>
      <td class="virtue"><span>Nettoyage Auto de la RAM pour un système plus fluide</span</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png') ?>" alt="" /></td>
      <td class="virtue">Mise à jour automatique vers la dernière version</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png') ?>" alt="" /></td>
      <td class="virtue">Soutien technique gratuit de 24/7 à la demande</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparsion end -->

<!-- threepoint start -->
<div class="threepoint">
  <h2>Ce que nous faisons pour nos utilisateurs en optimisation informatique</h2>
  <div class="wrapper clearfix">
    <dl>
      <dt>1.</dt>
      <dd>Résolvons les problèmes de PC pour <b>30,000,000</b> utilisateurs</dd>
    </dl>
    <dl class="center">
      <dt>2.</dt>
      <dd>Économisons <b>2,666,667</b> heures par mois</dd>
    </dl>
    <dl class="right">
      <dt>3.</dt>
      <dd>Économisons <b>$1.18 bilion</b> par an</dd>
    </dl>
  </div>
</div>
<!-- threepoint end -->


<div class="bottom">
  <!-- service start -->
  <div class="service wrapper clearfix">
    <dl class="astisfait fl">
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt=""></dt>
      <dd>
        <h3>Satisfait ou Remboursé</h3>
        <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
      </dd>
    </dl>
    <dl class="paiement fl">
      <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png') ?>" alt=""></dt>
      <dd>
        <h3>Paiement 100% Sécurisé</h3>
        <P>IObit vous propose sept modes de paiement sécurisé pour régler vos achats.</P>
      </dd>
    </dl>
    <dl class="modes fl">
      <dt><img src="<?php echo getStaticUrl('images/modes.png') ?>" alt=""></dt>
      <dd>
        <h3>Modes de paiement acceptés</h3>
        <p>Nous vous proposons 7 modes de paiement</p>
      </dd>
    </dl>
    <dl class="service-client fr">
      <dt><img src="<?php echo getStaticUrl('images/service-client.png') ?>" alt=""></dt>
      <dd>
        <h3>Service Client à votre écoute</h3>
        <p>
          Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.
        </p>
      </dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="notes">
      <p>Note:</p>
      <p>*. Les données peuvent varier en fonction du système ou de l'ordinateur.</p>
      <p>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</p>
    </div>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y') ?> IObit. Tous droits réservés</p>
  </div>
  <!-- footer end -->
</div>

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/asc-gift-box.png') ?>" alt=""/>
      <span class="off">-85%</span>
    </div>
    <div class="center fl">
      <h2>Profitez de la réduction de durée limitée</h2>
      <div id="botcount" class="countdown"><b>05</b>H: <b>28</b>M: <b>39</b>: <b>033</b>*</div>
    </div>
    <div class="price fr">
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fraff-asc143pcpfiusd1999&ref=<?php echo $refstr; ?>&aff=<?php echo $affstr;?>"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142021specialsale')">
        <i class="all-icons"></i>
        <span>VITE,J’EN PROFITE</span>
      </a>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<!-- pop start -->
<div class="pop-bg"></div>
<div class="pop">
  <h3>Profitez de <big>10%</big> de réduction supplémentaire !</h3>
  <div class="pop-offer">
    <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/></div>
    <div class="price fr">
      <p><strong>17<small>€99</small></strong> <del>149,96€</del></p>
      <a class="buybtn greenbtn"
         href="https://www.iobit.com/buy.php?product=fraff-asc143pcpfiusd1799&ref=<?php echo $refstr;?>&aff=<?php echo $affstr;?>"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'enaffasc142021specialsale')">
        <i class="all-icons"></i>
        VITE,J’EN PROFITE
      </a>
    </div>
  </div>
  <i class="close">X</i>
  <div id="popcount" class="minutes">Offre expirera dans <span class="packsNum">60</span> S </div>
</div>
<!-- pop end -->

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>
