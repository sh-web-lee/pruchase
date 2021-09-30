<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
if(!empty($_GET['ver'])){
    $ver = explode('.',$_GET['ver']);
    $refStr .= '-'.$ver[3];
}
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Passez le plus inoubliable des Noël avec les offres IObit !</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- container -->
<div class="container">
  <!-- tree -->
  <div class="tree wrapper">
    <span class="tree-l"></span>
    <span class="tree-r"></span>
  </div>
  <!-- end tree -->

  <!-- spree -->
  <div class="spree wrapper">
    <div class="spree-box">
      <p>Plus que <b class="packsNum"><?php echo $packsNum?></b> dispos !</p>
      <a class="spree-buy"
         href="https://www.iobit.com/buy.php?product=fr-sd3pcpfisu1499&ref=fr_sd63pcpfisu1499purchase2012<?php echo $refStr;?>&refs=fr_purchase_sd"
         onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2012a-fr');">
      </a>
    </div>
  </div>
  <!-- end spree -->

  <!-- star -->
  <div class="star wrapper">
    <span class="star-l"></span>
    <span class="star-r"></span>
  </div>
  <!-- end star -->
</div>
<!-- end container -->

<!-- main -->
<div class="main wrapper">

  <!-- banner -->
  <div class="banner">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>VENTE FLASH - SPÉCIAL NOËL</h1>
    <!-- subtitle -->
    <p>Cette année, passez le plus inoubliable des Noël avec les offres IObit !</p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <img class="box" src="<?php echo getStaticUrl('images/sd-55.png')?>" alt="IObit Malware Fighter PRO">
        <p>1 an, 3 PC</p>
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">30,00€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>19</b> <del>49,99€</del></p>
          </dd>
          <dd>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-sd61y3pc1999&ref=fr_sd61y3pc1999purchase2012<?php echo $refStr;?>&refs=fr_purchase_sd"
               onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2012b-fr');"
               data-num="2">
              <i class="all-icons"></i> J’en profite !
            </a>
          </dd>
        </dl>
      </div>

      <!-- imf-85 -->
      <div class="message large fl">
        <img class="box" src="<?php echo getStaticUrl('images/sd-85.png')?>" alt="IObit Malware Fighter PRO">
        <p> 1 an, 3 PC</p>
        <!-- progress -->
        <div class="progress clearfix">
          <div class="progressbar fl clearfix">
            <p class="fr"></p>
          </div>
          <p class="countdown fl">
            <strong>00</strong>j
            <strong>00</strong>h
            <strong>00</strong>m
            <strong>30</strong>s
          </p>
        </div>
        <!-- dl -->
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">71,99€</span>
          </dd>
          <dd class="two">
            <p class="price red"><b>14</b> <del>109,97€</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=fr-sd3pcpfisu1499&ref=fr_sd63pcpfisu1499purchase2012<?php echo $refStr;?>&refs=fr_purchase_sd"
               onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2012a-fr');"
               data-num="0">
              <i class="all-icons"></i> J’en profite !
            </a>
            <p class="note"><i class="all-icons"></i><b class="viewNum">3 794 663</b> personnes l’ont acheté !</p>
          </dd>
        </dl>
      </div>

      <!-- imf-70 -->
      <div class="message small fr">
        <img class="box" src="<?php echo getStaticUrl('images/sd-70.png')?>" alt="IObit Malware Fighter PRO">
        <p> 1 an, 1 PC</p>
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">12,00€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>17</b> <del>29,99€</del></p>
          </dd>
          <dd>            
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-sd61pc1799&ref=fr_sd61pc1799purchase2012<?php echo $refStr;?>&refs=fr_purchase_sd"
               onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2012c-fr');"
               data-num="1">
              <i class="all-icons"></i> J’en profite !
            </a>
          </dd>
        </dl>
      </div>

    </div>
    <!-- payment -->
    <img class="payment" src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
  </div>
  <!-- end banner -->

  <!-- feature -->
  <div class="feature">
    <div class="wrapper">
      <!-- title -->
      <h3>Quels avantages vous obtiendrez de Smart Defrag PRO ?</h3>
      <div class="content">
        <dl class="one clearfix">
          <dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""/></dt>
          <dd>
            <h4>Jusqu’à 200% plus rapide</h4>
            <p>
              La défragmentation de fichiers volumineux plus complète vous permet d’accéder aux fichiers & lancer des jeux jusqu’à 200% plus rapidement.
            </p>
          </dd>
        </dl>
        <dl class="two clearfix">
          <dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""/></dt>
          <dd>
            <h4>Défragmentation rapide</h4>
            <p>
              Défragmente vos disques et fichiers en profondeur et plus efficacement pour vous éviter de prendre plus de temps.
            </p>
          </dd>
        </dl>
        <dl class="three clearfix">
          <dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""/></dt>
          <dd>
            <h4>Démarrage de l’ordinateur<br> plus rapide</h4>
            <p>
              Défragmente votre registre et vos fichiers <br>système pendant le fonctionnement du<br> système pour un démarrage plus rapide <br>de votre ordinateur et des performances<br> système optimales.
            </p>
          </dd>
        </dl>
        <dl class="four on clearfix">
          <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""/></dt>
          <dd>
            <h4>Défragmentation<br> automatique et intelligente</h4>
            <p>
              Défragmente automatiquement et en<br> arrière-plan les fichiers et disques<br> pendant le système d’inactivité pour des<br> performances maximales 
            </p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end feature -->

  <!-- gifts -->
  <div class="gifts">
    <!-- title -->
    <h2 class="on">NOTRE CADEAU EXCLUSIF NOËL POUR VOUS !</h2>
    <!-- dl -->
    <div class="content clearfix">
      <!-- pf -->
      <dl class="pf clearfix">
        <dt></dt>
        <dd>
          <p class="cost"><span>0€</span> <del>39,99€</del></p>
          <p class="detail">Protégez les fichiers et les dossiers grâce à un mot de passe</p>
          <p class="detail">Ajoutez vos données personnelles en un clic de souris</p>
          <p class="detail">Masquez ou affichez les documents protégés dans l'explorateur</p>
        </dd>
      </dl>
      <dl class="isu clearfix">
        <dt></dt>
        <dd>
          <p class="cost"><span>0€</span> <del>29,99€</del></p>
          <p class="detail">Fournir les logiciels les plus populaires incluant aussi leurs dernières mises à jour et le tout en un seul clic.</p>
          <p class="detail">Simplifier vos tâches de mise à jour en détectant automatiquement l’état du logiciel et en installant automatiquement les derniers logiciels.</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end gifts -->

  <!-- comparison -->
  <div class="comparison">
    <div class="wrapper">
      <h3>Aperçu des différences entre votre version et Smart Defrag PRO</h3>
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
    <!-- subtitle -->
    <h4>Activez Smart Defrag PRO avec <span>85%</span> de remise pour un démarrage plus rapide (jusqu’à 200%)</h4>
    <!-- imf-85 buybtn -->
    <a class="buybtn red"
       href="https://www.iobit.com/buy.php?product=fr-sd3pcpfisu1499&ref=fr_sd63pcpfisu1499purchase2012<?php echo $refStr;?>&refs=fr_purchase_sd"
       onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2012a-fr');">
      <i class="all-icons"></i> J’en profite !
    </a>

  </div>
  <!-- end comparison -->

  <!-- awards -->
  <div class="awards wrapper">
    <h3>APPROUVÉ PAR LES MÉDIAS CÉLÈBRES DU MONDE</h3>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- end awards -->

  <!-- review -->
  <div class="review">
    <h2 class="on">
      Nous faisons de notre mieux pour satisfaire <br>
      nos clients où que vous soyez !
    </h2>
    <div class="content">
      <h3>Ce qu’ils disent</h3>
      <ul>
        <li class="one"><img src="<?php echo getStaticUrl('images/william-howes.png')?>" alt="William Howes"></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/edward-lee-ah-yen.png')?>" alt="Edward Lee Ah Yen"></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/roland-lalis.png')?>" alt="Roland LALIS"></li>
        <li class="five"><img src="<?php echo getStaticUrl('images/jim-parten.png')?>" alt="Jim Parten"></li>
      </ul>
      <div class="details">
        <div>
          <h4>William Howes</h4>
          <p>
            "J'utilise des produits IObit depuis de nombreuses années. Parce que j’ai une ancienne machine avec 6 pilotes dont 2 externes, je trouve qu’IObit "Smart Defrag Pro" m'a très bien servi. En tant qu’ordinateur ancien, mon système informatique se faisait assez facilement fragmenté. Avoir mon «Smart Defrag Pro» qui défragmente automatiquement , et qui exécuter «défragmenter et optimiser» une fois par semaine gardemon système fluide et en bon état. IObit ne cesse de s’améliorer et s'efforcer de nous apporter un meilleur produit. Je suis satisfait de ce produit."
          </p>
        </div>
        <div class="active">
          <h4>Cnet</h4>
          <p>
            "IObit Smart Defrag optimise votre PC afin de exploiter pleinement les performances SSD lors de la défragmentation de vos disques durs. Son outil SSD Trim effectue automatiquement des réglages sur le système qui ne peuvent normalement être effectués que par des personnes expérimentées. Les mises à jour de Smart Defrag comprennent un nouveau moteur de défragmentation, une défragmentation de jeu spéciale et une nouvelle interface conviviale. "
          </p>
        </div>
        <div>
          <h4>Edward Lee Ah Yen</h4>
          <p>
            "Je fais fonctionner RAID 0 SSDs et RAID 0 HDDs, et j’utilise Smart Defrag Pro afin d’analyser, défragmenter mes disques et de les rendre parfaitement fonctionnels. Il est fiable, facile à installer et à utiliser comme tous les logiciels d’IObit. Il suffit de le configurer et le laisser faire. Smart Defrag a une petite empreinte de mémoire afin de ne pas ralentir votre système. Fortement recommandé ! "
          </p>
        </div>
        <div>
          <h4>Roland LALIS</h4>
          <p>
            "J'utilise Smart Defrag depuis sa création sur plusieurs PC et dès le début avec les membres de mon club informatique nous avons pu constater les améliorations continuelles. C'était parfait pour eux ,excepté le langage anglais. Je me suis donc investi pour IObit dans la traduction française. Désormais, les revues informatiques françaises recommandent fortement Smart Defrag, y compris avec Optimiser de Windows 10, pour un diagnostic plus solide et précis avec options pour accélérer le démarrage du système."
          </p>
        </div>
        <div>
          <h4>Jim Parten</h4>
          <p>
            “Je suis très content de Smart Defrag. Il fonctionne toujours parfaitement sur mon ordinateur, et il me suffit d’effectuer ce programme, toutes les actions peuvent se faire automatiquement. Ce qui est intéressant avec Smart Defrag, c’est qu’il ne risque pas de me déranger pendant le processus de défragmentation. D’ailleurs, le service client est toujours très satisfaisant, je peux recevoir la réponse dans les plus bref délais lors que je rencontre des soucis. C’est la raison pour laquelle j’ai choisi Smart Defrag.”
          </p>
        </div>
      </div>
      <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a>
    </div>
  </div>
  <!-- end review -->

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">Ne laissez pas les menaces gâcher la fête !</h2>
    <!-- box -->
    <div class="box fl">
      <img class="on" src="<?php echo getStaticUrl('images/bottombuy-sd-bundle.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-sd.png')?>" alt="IObit Malware Fighter PRO">
      <img src="<?php echo getStaticUrl('images/bottombuy-sd.png')?>" alt="IObit Malware Fighter PRO">
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="active top">1 An / 3 PC + Cadeau Noël</li>
      <li class="mid">1 An / 3 PC</li>
      <li class="bot">1 An / 1 PC</li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>14</b> <del>109,97€</del></p>
      </dd>
      <dd>
        <a class="buybtn small"
           href="https://www.iobit.com/buy.php?product=fr-sd3pcpfisu1499&ref=fr_sd63pcpfisu1499purchase2012<?php echo $refStr;?>&refs=fr_purchase_sd"
           onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase2012a-fr');">
          <i class="all-icons"></i> J’en profite !
        </a>
      </dd>
    </dl>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
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
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Note:</dt>
        <dd>
          *.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion
        </dd>
        <dd>*.Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- end footer -->

</div>
<!-- end main -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>