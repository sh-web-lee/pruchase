<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=310931325;
$buyNum = number_format(ceil(microtime_float()*1000/5000) - $reduceNum);

if($_GET['action']=='getSales'){
  echo json_encode(array('buyNum'=>$buyNum));
  exit();
}

if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr='-'.$_GET['ref'];
}else{
  $refStr='';
}
$refStr .= empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -85% sur Smart Defrag PRO et profitez dès maintenant de ce prix baissé !</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
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
    <h1>Vente Flash du Jour</h1>
    <!-- content -->
    <div class="content clearfix">

      <!-- 3pc -->
      <dl class="fl">
        <dt>
          <img src="<?php echo $pResUrl;?>images/db-3pc.png?t=2" alt="Driver Booster PRO 6">
          <p>1 an, 3 PC</p>
        </dt>
        <dd>
          <p class="price"><strong><big>19</big>,99€</strong> <del>49,99€</del></p>
          <!-- 3pc buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-sd61y3pc1999&ref=fr_sd71y3pc199purchase2105<?php echo $refStr;?>&refs=fr_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1907a-fr');">
            <i class="all-icons"></i>
            <span>J’EN PROFITE VITE</span>
          </a>
        </dd>
        <!-- <div class="mask"><span>TERMINÉ!</span></div> -->
      </dl>

      <!-- 3pc bundle -->
      <dl class="fl large">
        <dt>
          <!-- countdown -->
          <p class="countdown" id="countdown">
            <i class="all-icons"></i>
            Plus que 
            <strong>00</strong>H :
            <strong>00</strong>m :
            <strong>00</strong>s :
            <strong class="last">000</strong>ms
          </p>
          <img src="<?php echo $pResUrl;?>images/db-3pcbundle.png?t=3" alt="Driver Booster PRO 6 + Smart Defrag PRO 6">
          <p>1 an, 3 PC</p>
        </dt>
        <dd>
          <p class="price"><strong><big>17</big>,99€</strong> <del>109,97€</del></p>
          <!-- 3pc bundle buybtn -->
          <a class="buybtn black"
             href="https://www.iobit.com/buy.php?product=fr-sd61y3pcpfamc1799&ref=fr_sd7amcpf1799purchase2105<?php echo $refStr;?>&refs=fr_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1907b-fr');">
            <i class="all-icons"></i>
            <span>J’EN PROFITE VITE</span>
          </a>
          <!-- person -->
          <p class="person"><i class="all-icons"></i>&nbsp;&nbsp;&nbsp;<strong class="buyNum"><?php echo $buyNum;?></strong> personnes l’ont déjà acheté</p>
        </dd>
      </dl>

      <!-- 1pc -->
      <dl class="fr">
        <dt>
          <img src="<?php echo $pResUrl;?>images/db-1pc.png?t=1" alt="Driver Booster PRO 6">
          <p>1 an, 1 PC</p>
        </dt>
        <dd>
          <p class="price"><strong><big>17</big>,99€</strong> <del>29,99€</del></p>
          <!-- 1pc buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-sd61pc1799&ref=fr_sd71pc1799purchase2105<?php echo $refStr;?>&refs=fr_purchase_sd"
             onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1907-fr');">
            <i class="all-icons"></i>
            <span>J’EN PROFITE VITE</span>
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->
<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>

<!-- feature -->
<div class="feature wrapper">
  <!-- title -->
  <h2>Quels avantages vous obtiendrez de Smart Defrag PRO ?</h2>
  <div class="content">
    <dl class="one clearfix">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""/></dt>
      <dd>
        <h3>Jusqu’à 200% plus rapide</h3>
        <p>
          La défragmentation de fichiers volumineux plus complète vous permet d’accéder aux fichiers & lancer des jeux jusqu’à 200% plus rapidement.
        </p>
      </dd>
    </dl>
    <dl class="two clearfix">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""/></dt>
      <dd>
        <h3>Défragmentation rapide</h3>
        <p>
          Défragmente vos disques et fichiers en profondeur et plus efficacement pour vous éviter de prendre plus de temps.
        </p>
      </dd>
    </dl>
    <dl class="three clearfix">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""/></dt>
      <dd>
        <h3>Démarrage de l’ordinateur<br> plus rapide</h3>
        <p>
          Défragmente votre registre et vos fichiers <br>système pendant le fonctionnement du<br> système pour un démarrage plus rapide <br>de votre ordinateur et des performances<br> système optimales.
        </p>
      </dd>
    </dl>
    <dl class="four on clearfix">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""/></dt>
      <dd>
        <h3>Défragmentation<br> automatique et intelligente</h3>
        <p>
          Défragmente automatiquement et en<br> arrière-plan les fichiers et disques<br> pendant le système d’inactivité pour des<br> performances maximales 
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- end feature -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Notre cadeau exclusif uniquement pour vous</h2>
    <!-- message -->
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt=""/></dt>
      <dd>
        <p class="price"><strong>0€</strong> <del>19,99€</del></p>
        <ul>
          <li>
            La première application mobile de sécurité et d’optimisation pour vos téléphones et tablettes Android.
          </li>
        </ul>
      </dd>
    </dl>
    <dl class="pf">
      <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
      <dd>
        <p class="price"><strong>0€</strong> <del>39,99€</del></p>
        <ul>
          <li>
            Un outil de protection puissant des fichiers qui garantit la sécurité de vos dossiers et données avec un mot de passe.
          </li>
        </ul>
      </dd>
    </dl>
  </div>
</div>
<!-- end gifts -->

<!-- cutbuy -->
<div id="centbuy" class="cutbuy">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Économisez 85% sur Smart Defrag PRO et profitez des cadeaux exclusifs !</h2>
    <!-- db-box -->
    <div class="box fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO 6"></div>
    <!-- selector -->
    <ul class="selector fl">

      <!-- 3pc bundle -->
      <li class="active clearfix" data-num="1">
        1 An / 3 PC + Cadeaux Exclusifs
        <strong>-85%</strong>
      </li>

      <!-- 1pc -->
      <li class="clearfix" data-num="2">
        1 An / 1 PC
        <strong>-40%</strong>
      </li>

      <!-- 3pc -->
      <li class="clearfix" data-num="0">
         1 An / 3 PC
        <strong>-60%</strong>
        <!-- <div class="mask"><span>TERMINÉ!</span></div> -->
      </li>     
    </ul>
    <!-- message -->
    <dl class="fr">
      <dt>
        <p class="price"><strong><big>17</big>,99€</strong> <del>109,97€</del></p>
      </dt>
      <dd>
        <!-- 3pc bundle buybtn -->
        <a class="buybtn black"
           href="https://www.iobit.com/buy.php?product=fr-sd61y3pcpfamc1799&ref=fr_sd7amcpf1799purchase2105<?php echo $refStr;?>&refs=fr_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1907b-fr');">
          <i class="all-icons"></i>
          <span>J’EN PROFITE VITE</span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end cutbuy -->

<!-- comparison -->
<div class="comparison">
  <div class="wrapper">
    <h2>Aperçu des différences entre votre version et Smart Defrag PRO</h2>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2">
          <div class="text"></div>
        </th>
        <th class="itema">
          <div class="free">Votre version actuelle</div>
        </th>
        <th class="itemb">
          <div class="pro">Smart Defrag 6 PRO</div>
        </th>
      </tr>
      </thead>
      <tbody>
        <tr class="title">
          <td class="virtue" colspan="2">Défragmentation sans aucun souci</td>
          <td class="itema"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon01.png" alt=""></td>
          <td class="virtue">
            <span>Personnalise le mode, les disques et les fichiers que vous voulez défragmenter</span>
          </td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon02.png" alt=""></td>
          <td class="virtue">
            <span>Défragmente automatiquement les fichiers et disques sélectionnés en temps réel</span>
          </td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
        </tr>
        <tr class="title">
          <td class="virtue" colspan="2">PC plus rapide & performances optimales</td>
          <td class="itema"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon03.png" alt=""></td>
          <td class="virtue">
            <span>Défragmente les fichiers du registre pendant l'exécution de Windows pour de meilleures performances du PC</span>
          </td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon04.png" alt=""></td>
          <td class="virtue">
            <span>Défragmente les fichiers spécifiques pendant le démarrage pour lancer PC plus rapidement</span>
          </td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon05.png" alt=""></td>
          <td class="virtue"><span>Maximise les performances et la durée de votre disque</span></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon06.png" alt=""></td>
          <td class="virtue"><span>Accède aux fichiers jusqu’à 200% plus rapidement</span></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
        </tr>
        <tr class="title">
          <td class="virtue" colspan="2">Service Optimum</td>
          <td class="itema"></td>
          <td class="itemb"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon07.png" alt=""></td>
          <td class="virtue"><span>Mise à jour automatique vers la dernière version</span></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/com-icon08.png" alt=""></td>
          <td class="virtue"><span>Assistance technique gratuite 24h / 24 et 7 jours sur 7</span></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/black-bad.png" alt=""></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/red-cancel.png" alt=""></td>
        </tr>
      </tbody>
    </table>
  </div>
</div>
<!-- end comparison -->

<!-- awards -->
<div class="awards wrapper">
  <h2>APPROUVÉ PAR LES MÉDIAS CÉLÈBRES DU MONDE</h2>
  <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
</div>
<!-- end awards -->

<!-- reviews -->
<div class="review wrapper">
  <div class="container">
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
            <p>"IObit Smart Defrag optimise votre PC afin de exploiter pleinement les performances SSD lors de la défragmentation de vos disques durs. Son outil SSD Trim effectue automatiquement des réglages sur le système qui ne peuvent normalement être effectués que par des personnes expérimentées. Les mises à jour de Smart Defrag comprennent un nouveau moteur de défragmentation, une défragmentation de jeu spéciale et une nouvelle interface conviviale. "</p>
            <cite>Cnet</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="William Howes"></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>"J'utilise des produits IObit depuis de nombreuses années. Parce que j’ai une ancienne machine avec 6 pilotes dont 2 externes, je trouve qu’IObit "Smart Defrag Pro" m'a très bien servi. En tant qu’ordinateur ancien, mon système informatique se faisait assez facilement fragmenté. Avoir mon «Smart Defrag Pro» qui défragmente automatiquement , et qui exécuter «défragmenter et optimiser» une fois par semaine gardemon système fluide et en bon état. IObit ne cesse de s’améliorer et s'efforcer de nous apporter un meilleur produit. Je suis satisfait de ce produit. "</p>
            <cite>William Howes</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>"Je fais fonctionner RAID 0 SSDs et RAID 0 HDDs, et j’utilise Smart Defrag Pro afin d’analyser, défragmenter mes disques et de les rendre parfaitement fonctionnels. Il est fiable, facile à installer et à utiliser comme tous les logiciels d’IObit. Il suffit de le configurer et le laisser faire. Smart Defrag a une petite empreinte de mémoire afin de ne pas ralentir votre système. Fortement recommandé ! "</p>
            <cite>Edward Lee Ah Yen</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland LALIS"></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>"J'utilise Smart Defrag depuis sa création sur plusieurs PC et dès le début avec les membres de mon club informatique nous avons pu constater les améliorations continuelles. C'était parfait pour eux ,excepté le langage anglais. Je me suis donc investi pour IObit dans la traduction française. Désormais, les revues informatiques françaises recommandent fortement Smart Defrag, y compris avec Optimiser de Windows 10, pour un diagnostic plus solide et précis avec options pour accélérer le démarrage du système."</p>
            <cite>Roland LALIS</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten"></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>“Je suis très content de Smart Defrag. Il fonctionne toujours parfaitement sur mon ordinateur, et il me suffit d’effectuer ce programme, toutes les actions peuvent se faire automatiquement. Ce qui est intéressant avec Smart Defrag, c’est qu’il ne risque pas de me déranger pendant le processus de défragmentation. D’ailleurs, le service client est toujours très satisfaisant, je peux recevoir la réponse dans les plus bref délais lors que je rencontre des soucis. C’est la raison pour laquelle j’ai choisi Smart Defrag.”</p>
            <cite>Jim Parten</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- end reviews -->

<!-- cutbuy -->
<div id="footbuy" class="cutbuy footbuy">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>PERMIER ARRIVE, PERMIER SERVI !</h2>
    <!-- db-box -->
    <div class="box fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO 6"></div>
    <!-- selector -->
    <ul class="selector fl">

      <!-- 3pc bundle -->
      <li class="active clearfix" data-num="1">
        1 An / 3 PC + Cadeaux Exclusifs
        <strong>-85%</strong>
      </li>

      <!-- 1pc -->
      <li class="clearfix" data-num="2">
        1 An / 1 PC
        <strong>-40%</strong>
      </li>

      <!-- 3pc -->
      <li class="clearfix" data-num="0">
         1 An / 3 PC
        <strong>-60%</strong>
        <!-- <div class="mask"><span>TERMINÉ!</span></div> -->
      </li>

    </ul>
    <!-- message -->
    <dl class="fr">
      <dt>
        <p class="price"><strong><big>17</big>,99€</strong> <del>109,97€</del></p>
      </dt>
      <dd>
        <!-- 3pc bundle buybtn -->
        <a class="buybtn black"
           href="https://www.iobit.com/buy.php?product=fr-sd61y3pcpfamc1799&ref=fr_sd7amcpf1799purchase2105<?php echo $refStr;?>&refs=fr_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1907b-fr');">
          <i class="all-icons"></i>
          <span>J’EN PROFITE VITE</span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end cutbuy -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
    <dd>
      <h3>Satisfait ou Remboursé</h3>
      <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
    <dd>
      <h3>Paiement 100% Sécurisé</h3>
      <p>IObit vous propose huit modes de paiement sécurisés pour régler vos achats.</p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/buycut.png" alt=""></dt>
    <dd>
      <h3>Obtenir la licence</h3>
      <p>Vous recevrez le code de licence dans les minutes après l’achat.</p>
    </dd>
  </dl>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dt>Note:</dt>
    <dd>
      *.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion
    </dd>
    <dd>*.Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
    <dd>*.Licence gratuite d'AMC Security PRO, la version complète comprend des annonces intégrées.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
</div>
<!-- end footer -->
<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>