<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

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
  <title>Jusqu'à -85% sur Advanced SystemCare PRO  - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css') ?>">
    <?php echo $gJavascript ['public']; ?>
    <?php echo $gJavascript ['head'] ?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank"></a>
    <h1>SOLDES D'ÉTÉ</h1>
    <h3>Profitez des meilleures offres jamais vues auparavant</h3>
    <div class="bundle-container clearfix">
      <div class="bundle left">
        <img src="<?php echo $pResUrl; ?>images/bundle-0.png" alt="bundle-one">
        <p class="price">
          <b class="discount">19</b>
          <span>
            <i>€99</i>
            <del class="original">49,99€</del>
          </span>
        </p>
        <a class="buyBTN"
           href="https://www.iobit.com/buy.php?product=fr-asc133pc1999&ref=fr_asc133pc1999purchase2001<?php echo $refstr; ?>&aff=&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2001b-fr')"
        >VITE, J'EN PROFITE</a>
      </div>
      <div class="bundle right">
        <div class="countdown-container"><i></i><span>12</span> H : <span>24</span> M : <span>52</span> : <span>235</span>*
        </div>
        <img src="<?php echo $pResUrl; ?>images/bundle-1.png" alt="bundle-two">
        <p class="price">
          <b class="discount">19</b>
          <span>
            <i>€99</i>
            <del class="original">159,96€</del>
          </span>
        </p>
        <a class="buyBTN"
           href="https://www.iobit.com/buy.php?product=fr-asc135pcsdpfiu1999&ref=fr_asc135pcpfiusd1999purchase2001<?php echo $refstr; ?>&aff=&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2001a-fr')">VITE, J'EN PROFITE</a>
        <p class="note"><span>7,390,557</span> personnes l’ont acheté</p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!--payment start-->
<div class="payment"></div>
<!--payment end-->

<!-- benfits start -->
<div class="feature clearfix">
  <div class="wrapper">
    <h2>Pourquoi choisir Advanced SystemCare 13 PRO</h2>
    <h4>Des fonctions plus poussées que la version gratuite</h4>
    <div class="showcase">
      <div class="inner">
        <ul class="screenshot">
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-05.png" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-00.png" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-01.png" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-02.png" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-03.png" alt="">
          </li>
          <li>
            <img src="<?php echo $pResUrl; ?>images/screenshot-04.png" alt="">
          </li>
        </ul>
      </div>
      <ul class="zoom">
        <li class="fun1"></li>
        <li class="fun2">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-01-zoom.png" alt="">
          </div>
        </li>
        <li class="fun3">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
          </div>
        </li>
        <li class="fun4">
          <div class="container">
            <img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
          </div>
        </li>
        <li></li>
      </ul>
    </div>
    <div class="detail-list">
      <dl>
        <dt><i class="benfits03"></i></dt>
        <dd>
          <h3>200%* plus rapide</h3>
          <p>Optimise le processeur et la RAM et augmente la vitesse du système pour accélérer le PC lent jusqu'à 200% de plus.</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits02"></i></dt>
        <dd>
          <h3>300%* plus rapide</h3>
          <p>Optimise les paramètres du navigateur pour accélérer la vitesse d’Internet jusqu’à 300% plus rapide</p>
        </dd>
      </dl>
      <dl class="two">
        <dt><i class="benfits04"></i></dt>
        <dd>
          <h3>Nettoyage automatique</h3>
          <p>Nettoie les registres et les fichiers inutiles ou invalides en profondeur pour libérer plus d’espace sur le disque dur et améliore les performances de votre ordinateur.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits01"></i></dt>
        <dd>
          <h3>Nettoyage d'empreintes digitales numérique</h3>
          <p>Empêchez les trackers de rechercher ce que vous lisez, visualisez et achetez en déguisant votre empreinte numérique</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="benfits05"></i></dt>
        <dd>
          <h3>Garder automatiquement vos logiciels à jour</h3>
          <p>Mettez à jour vos programmes obsolètes en un seul clic</p>
        </dd>
      </dl>
      <a class="textlink" href="Javascript:void(0);">En savoir plus sur PRO version>>></a>
    </div>
  </div>
</div>
<!-- benfits end -->

<!-- gifubox start -->
<div class="giftbox">
  <h2>Profitez d’un PC plus rapide, plus propre et plus sûr avec ASC Pro et les outils PRO ci-dessous</h2>
  <div class="wrapper">
    <div class="box-container clearfix">
      <div class="content">
        <img src="<?php echo $pResUrl; ?>images/giftbox-0.png" alt="giftbox">
        <h3>IObit Uninstaller 10 PRO <span>(1 an / 1 PC)</span></h3>
        <p style="margin-left: -11px;">Désinstaller les logiciels, les plug-ins et le bundleware en un seul clic</p>
        <p style="margin-left: -11px;">Nettoyer automatiquement les restes de programmes désinstallés</p>
      </div>
      <div class="content line"></div>
      <div class="content">
        <img src="<?php echo $pResUrl; ?>images/giftbox-1.png" alt="giftbox">
        <h3>Smart Defrag 6 PRO <span>(1 an / 1 PC)</span></h3>
        <p style="margin-left: 4px;">La performance maximale du disque</p>
        <p style="margin-left: 4px;">Un accès plus rapide aux fichiers</p>
      </div>
      <div class="content line"></div>
      <div class="content">
        <img src="<?php echo $pResUrl; ?>images/giftbox-2.png" alt="giftbox">
        <h3>Protected Folder <span>(1 an / 1 PC)</span></h3>
        <p style="margin-left: 20px;">Vous prémunir contre la perte, le vol et la fuite de données.</p>
        <p style="margin-left: 20px;">Un mot de passe empêche quiconque de les ouvrir</p>
      </div>
    </div>
    <a
        href="https://www.iobit.com/buy.php?product=fr-asc135pcsdpfiu1999&ref=fr_asc135pcpfiusd1999purchase2001<?php echo $refstr; ?>&aff=&refs=fr_purchase_asc"
        onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2001a-fr')"
    >VITE, J'EN PROFITE</a>
    <div class="countdown-container countdown-lab"><i></i><span>12</span> H : <span>24</span> M : <span>52</span> : <span>235</span>*</div>
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
      <th colspan="2" class="text">La comparaison des produits:</th>
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
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_01.png') ?>" alt="" /></td>
      <td class="virtue">Nettoyage, réparation et optimisation du système de base</td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_02.png') ?>" alt="" /></td>
      <td class="virtue"><span>Réparer les failles de sécurité pour empêcher le piratage en un clic</span> <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb gray"><i class="all-icons">☆</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png') ?>" alt="" /></td>
      <td class="virtue"><span>Mettez vos données personnelles à l'abris des programmes frauduleux </span> <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_04.png') ?>" alt="" /></td>
      <td class="virtue"><span>Personne ne peut voler votre empreinte digitale numérique pour vous suivre en ligne</span> <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_05.png') ?>" alt="" /></td>
      <td class="virtue"><span>Optimisation de la vitesse Internet jusqu'à 300% avec Internet Booster </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png') ?>" alt="" /></td>
      <td class="virtue"><span>Le démarrage jusqu'à 200% plus rapide de votre PC </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_07.png') ?>" alt="" /></td>
      <td class="virtue"><span>Nettoyage des registres empilés pour un système stable </span> <sup class="ame">amélioré </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png') ?>" alt="" /></td>
      <td class="virtue">Nouveau moteur d'optimisation du disque pour maximiser les performances PC <sup class="nou">nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png') ?>" alt="" /></td>
      <td class="virtue">Protection en temps réel contre les menaces de sécurité</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_10.png') ?>" alt="" /></td>
      <td class="virtue">Déctection complète contre les infections les plus approfondies</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_11.png') ?>" alt="" /></td>
      <td class="virtue">Supprimer Auto les publicités &amp; la vie privée en ligne pour une navigation plus sûre</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png') ?>" alt="" /></td>
      <td class="virtue"><span>Nettoyage Auto de la RAM pour un système plus fluide</span</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png') ?>" alt="" /></td>
      <td class="virtue">Mise à jour automatique vers la dernière version</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png') ?>" alt="" /></td>
      <td class="virtue">Soutien technique gratuit de 24/7 à la demande</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">★</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparsion end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img class="small on" src="<?php echo getStaticUrl('images/asc-one-box.png') ?>" alt="" />
      <img class="small" src="<?php echo getStaticUrl('images/asc-three-box.png') ?>" alt="" />
    </div>
    <ul class="fl">
      <li class="on" data-num="1"><span>1 An / 5 PC + <em>3 outils Pro gratuits</em></span></li>
      <li data-num="0"><span>1 An / 3 PC</span></li>
    </ul>
    <div class="price fl">
      <p>
        <b class="discount">19</b>
        <span>
            <i>€99</i>
            <del class="original">159,96€</del>
          </span>
      </p>
      <a class="buyBTN"
         href="https://www.iobit.com/buy.php?product=fr-asc135pcsdpfiu1999&ref=fr_asc135pcpfiusd1999purchase2001<?php echo $refstr; ?>&aff=&refs=fr_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2001a-fr')">VITE, J'EN PROFITE</a>
    </div>
  </div>
</div>
<!-- footbuy end -->

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

<div class="popbg"></div>
<div class="popbox">
  <h2>FELICITATIONS</h2>
  <h4>Vous profiterez de <b>10%</b> de réduction supplémentaire !</h4>
  <div class="clearfix">
    <img class="left fl" src="<?php echo getStaticUrl('images/asc-pop-box.png') ?>" alt="" />
    <div class="right fl">
      <h3>Offre expirera dans <span class="count-box"><em class="secbox">6</em><em class="secbox">0</em>s</span></h3>
      <p><strong class="one">49,99€</strong> <strong class="two">19,99€</strong> <strong class="three">17,99€</strong></p>
      <a
          href="https://www.iobit.com/buy.php?product=fr-asc133pc1799&ref=fr_asc133pc1799purchase2001<?php echo $refstr; ?>&aff=&refs=fr_purchase_asc"
          onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase2001pop-fr')">
        <i class="all-icons"></i>
        VITE, J'EN PROFITE
      </a>
    </div>
  </div>
  <i class="close">X</i>
</div>

<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>
