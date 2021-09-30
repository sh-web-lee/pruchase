<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) - 68457026;
$buyNum = number_format($buyNum);

$packsNum = ceil(microtime_float() * 2000 / 20000);
$packsNum = 360 - ($packsNum % 360);
if ($_GET['action'] == 'getPacks') {
  echo $packsNum;
  exit ;
}
if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
  'purchase-10','purchase-14','purchase-15','purchase-16',
  'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
  'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
  'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['st'],array('dbxmasr','db_xmas'))){
  $refStr.='-'.$_GET['st'];
}
if($_GET['to']=='purchase-6'){
  $ver=$_GET['ver'];
  if(preg_match('/^([0-9])\.([0-9])\.[0-9]\.[0-9]{3}/',$ver,$matches)){
    $verStr=$matches[1].$matches[2];
    $refStr.='-'.$verStr;
  }
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Jusqu'à -70% sur Driver Booster PRO – Soldes d'été chez IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<!-- header -->
<div class="header">
  <div class="wrapper clearfix">
    <a href="https://www.iobit.com/fr/index.php" target="_blank" class="logo">IObit</a>
    <ul>
      <li><strong>00</strong> H :</li>
      <li><strong>00</strong> MIN :</li>
      <li><strong>00</strong> SEC:</li>
      <li><strong>00</strong> MS <sup>*</sup></li>
    </ul>
  </div>
</div>
<!-- end header -->

<!-- banner -->
<div class="banner">
  <div class="wrapper clearfix">
    <h1><strong>Vente Flash</strong></h1>
    <h2>Dépêchez-vous, profitez de notre meilleure offre !</h2>
    <img src="<?php echo $pResUrl; ?>images/db-box.png" alt="" class="db-box">
    <div class="right-message">
      <h2>-85%</h2>
      <h3>25% de réduction supplémentaire sur le prix régulier.<br> <span></span> Un prix aussi bas, c'est du jamais vu ! <span></span></h3>
      <dl class="price-content">
        <!-- price -->
        <dt>19,99€ <del>74,85€</del></dt>
        <!-- buybtn -->
        <dd>
          <a href="https://www.iobit.com/buy.php?product=db8spin3pcfr&ref=fr_db3pcoldspecial2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dboldspecial2006-fr')"
             class="buybtn">
            VITE, J’EN PROFITE
          </a>
        </dd>
        <dd><img src="<?php echo $pResUrl; ?>images/people.png" alt=""> 5,206,553 personnes l’ont acheté!</dd>
      </dl>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.png" alt="">
</div>
<!-- end payment -->

<!-- feature start -->
<div class="feature wrapper">
  <h2>Gardez vos pilotes à jour en permanence et<br> bénéficiez d’un PC performant</h2>
  <div class="clearfix">
    <div class="feature-list fl">
      <dl class="on clearfix">
        <dt>1、</dt>
        <dd>
          Une vaste base de données avec plus de 4,5 millions de pilotes <span class="pro-tag"><em>Exclusivité PRO</em></span>
        </dd>
      </dl>
      <dl class="two clearfix">
        <dt>2、</dt>
        <dd>
          Une vitesse de mise à jour des<br> pilotes 100% plus rapide <span class="pro-tag"><em>Exclusivité PRO</em></span>
        </dd>
      </dl>
      <dl class="three clearfix">
        <dt>3、</dt>
        <dd>
          Mise à jour automatique durant les<br> périodes d’inactivité <span class="pro-tag"><em>Exclusivité PRO</em></span>
        </dd>
      </dl>
      <dl class="four clearfix">
        <dt>4、</dt>
        <dd>
          Correction des erreurs de<br> périphérique  <span class="pro-tag"><em>Exclusivité PRO</em></span>
        </dd>
      </dl>
    </div>
    <div class="feature-animation fr">
      <div class="feature-bg">
        <div class="feature-box one on">
          <ul>
            <li>
              <div class="cylinder"><span class="one"></span><span class="two"></span></div>
              <h3>Version Gratuite</h3>
            </li>
            <li class="yellow">
              <div class="cylinder big">
                <span class="one"></span><span class="two"></span><span class="three
                "></span>
                <b class="arrow">Plus de 4 500 000</b>
              </div>
              <h3>Version PRO</h3>
            </li>
          </ul>
          <div class="notes">
            <p>
              Accès prioritaire vous permettant d'acquérir rapidement les dernières versions des pilotes et des composants de jeux. Oubliez les pilotes obsolètes, défectueux, incompatibles ainsi que les versions peu courantes.
            </p>
          </div>
        </div>
        <div class="feature-box two">
          <ul>
            <li class="yellow on">
              <h3 class="on">Version PRO</h3>
              <span class="progress-bar"><b class="arrow">+100%</b></span>
            </li>
            <li>
              <h3 class="on">Version Gratuite</h3>
              <span class="progress-bar"></span>
            </li>
          </ul>
          <div class="notes">
            <p>
              Offrez-vous la possibilité de bénéficier d’une vitesse de mise à jour deux fois plus importante que la version Gratuite et obtenez les pilotes les plus appropriés en quelques secondes.
            </p>
          </div>
        </div>
        <div class="feature-box three">
          <span class="driver-start"></span>
          <span class="driver"></span>
          <span class="driver driver02"></span>
          <div class="updated-driver">
            <div class="circle right">
              <div class="circleprogress rightcircle"></div>
            </div>
            <div class="circle left">
              <div class="circleprogress leftcircle"></div>
            </div>
          </div>
          <span class="attention"></span>
          <span class="complete"></span>
          <div class="notes three">
            <p>
              Téléchargez et mettez les pilotes automatiquement à jour durant vos périodes d’inactivité, de manière à avoir plus de ressources disponible pour votre ordinateur durant vos périodes de travail ou de divertissement.
            </p>
          </div>
        </div>
        <div class="feature-box four">
          <span class="repair"></span>
          <span class="usbox one">
            <em class="usb"><img src="<?php echo getStaticUrl('images/usb01.png')?>" alt=""/></em>
            <em class="usb-line"></em>
            <em class="usb-vercital"></em>
          </span>
          <span class="usbox two">
            <em class="usb"><img src="<?php echo getStaticUrl('images/usb02.png')?>" alt=""/></em>
            <em class="usb-line"></em>
            <em class="usb-vercital"></em>
          </span>
          <span class="usbox three">
            <em class="usb"><img src="<?php echo getStaticUrl('images/usb03.png')?>" alt=""/></em>
            <em class="usb-line"></em>
            <em class="usb-vercital"></em>
          </span>
          <span class="usbox four">
            <em class="usb"><img src="<?php echo getStaticUrl('images/usb04.png')?>" alt=""/></em>
            <em class="usb-line"></em>
            <em class="usb-vercital"></em>
          </span>
          <div class="notes">
            <p>
              Détectez et réparez, en un seul clic, les erreurs de périphérique du type : « Windows ne peut pas identifier ce matériel », « Ce périphérique est désactivé » ou « Ce périphérique ne peut pas fonctionner » etc…
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- feature-small start -->
<div class="feature-small">
  <h2>Les autres bénéficies exclusives à la version PRO</h2>
  <div class="clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-small01.png')?>" alt=""/></dt>
      <dd>
        <h3>Performance de jeu optimale</h3>
        <p>
          Augmentez les performances de jeu avec les derniers Game Ready Drivers et améliorez l’expérience de jeu grâce à des composants de jeux appropriés et à jour.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-small02.png')?>" alt=""/></dt>
      <dd>
        <h3>Mise à jour 100% sécurisée</h3>
        <p>
          Sauvegardez automatiquement tous les pilotes précédents avant  installation et restaurez-les en cas de besoin.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-small03.png')?>" alt=""/></dt>
      <dd>
        <h3>Mise à jour automatique</h3>
        <p>
          Mettez à jour automatiquement vers la dernière version pour profiter des nouvelles fonctions et améliorez la stabilité de votre PC sans aucun effort.
        </p>
      </dd>
    </dl>
  </div>
</div>
<!-- feature-small end -->

<!-- awards -->
<div class="awards wrapper">
  <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.jpg"/>
</div>
<!-- end awards -->

<!-- miliony start -->
<div class="miliony">
  <h2>Nous vous promettons plus de commodité sur votre travail et jeu !</h2>
  <p>Sinon, nous vous rembourserons immédiatement !</p>
  <div class="miliony-box clearfix">
    <dl>
      <dt><h4>200+</h4></dt>
      <dd>
        Préféré dans plus de <b>220</b> <br> 
        pays et territoires du monde
      </dd>
    </dl>
    <dl class="two">
      <dt><h4>1 000+</h4></dt>
      <dd>
        Approuvé par plus de <b>1 000</b> <br> 
        médias de renommés mondiale
      </dd>
    </dl>
    <dl class="three">
      <dt><h4>250 000 000+</h4></dt>
      <dd>
        Choisi et recommandé par <br>
        plus de <b>250 millions</b> <br>
        d'utilisateurs dans le monde
      </dd>
    </dl>
    <dl class="four">
      <dt><h4>80%+</h4></dt>
      <dd>
        Plus de <b>80%</b> des utilisateurs <br>
        de Driver Booster ont activé <br>
        la version PRO
      </dd>
    </dl>
  </div>
</div>
<!-- miliony end -->


<div class="review wrapper">
  <div class="content">
    <dl>
      <dt><h3>Commentaire des Utilisateurs</h3></dt>
      <dd>
        <h4>"Mon PC est plus rapide et plus stable que je ne le pensais."</h4>
      </dd>
      <dd>"Avec Driver Booster, je peux facilement trouver les pilotes obsolètes et les mettre à jour avec simplicité. En outre, il m’aide à corriger l’erreur sonore, l’erreur réseau, l’erreur de périphérique etc. Je ne le croyais pas avant de l’utiliser, mais après l’avoir essayé je l’ai aimé parce que mon PC est plus rapide et plus stable que je ne le pensais... Merci à IObit."</dd>
    </dl>
    <dl>
      <dt><h3>Commentaire des Utilisateurs</h3></dt>
      <dd>
        <h4>"Je recommande vivement Driver Booster , il vous aide rapidement et facilement à mettre à jour les pilotes."</h4>
      </dd>
      <dd>"Driver Booster est une application sensationnelle. Si vous êtes comme moi avez de nombreuses applications et périphériques ou pilotes et ne pas avoir le temps de les mettre à jour manuellement."</dd>
    </dl>
    <dl class="active">
      <dt><h3>Avis des Médias</h3></dt>
      <dd>
        <h4>La fonctionnalité de base simple de Driver Booster PRO est encore plus attrayante. "</h4>
      </dd>
      <dd>La fonctionnalité de base simple de Driver Booster PRO est encore plus attrayante. Grâce à l’inclusion de multiples licences à un prix très favorable ainsi qu’une interface personnalisable qui peut bien afficher des informations spécifiques sur le matériel. Alors que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent des fonctionnalités convaincantes, mais IObit Driver Booster PRO est le meilleur d’entre eux.</dd>
    </dl>
    <dl>
      <dt><h3>Commentaire des Utilisateurs</h3></dt>
      <dd>
        <h4>"Il fonctionne parfaitement. Facile à utiliser, informatif et intuitif. Driver Booster restera dans ma boîte à outils pour toujours ... Great job!"</h4>
      </dd>
      <dd>"Ceci est l'un des meilleurs programmes de mise à jour du pilote. Microsoft m'a même égaré en suggérant des mises à jour qui ne compatible pas avec ma machine. Ce programme savait ce que les mises à jour je devais sans conflits. "</dd>
    </dl>
    <dl>
      <dt><h3>Commentaire des Utilisateurs</h3></dt>
      <dd>
        <h4>“Les résultats étaient si fantastique que je vous conseille de l’obtenir tout de suite.”</h4>
      </dd>
      <dd>“Microsoft m’a égaré par conseiller les mises à jour inutiles pour ma machine. Driver Booster PRO détectait automatiquement les mises à jour des pilotes dont j’ai besoin et il peut les télécharger rapidement ”</dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
      <p>Myo Thuya</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund"></div>
      <p>Adam Backlund</p>
    </li>
    <li class="active">
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc-magazine.png" alt="PC magazine">
      </div>
      <p>PC magazine</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
      </div>
      <p>Wayne Bowler</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/leslie-hutton.png" alt="Leslie Hutton ">
      </div>
      <p>Leslie Hutton </p>
    </li>
  </ul>
</div>
<div class="comparison_table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2">La comparaison de produit</th>
      <th class="space"></th>
      <th class="itemb">Driver Booster FREE</th>
      <th class="space"></th>
      <th class="itema">Driver Booster PRO</th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Identifier Auto les pilotes obsolètes, manquants et défectueux	</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Débloquer la limite de vitesse de la mise à jour des pilotes</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Priorité pour mettre à jour plus de pilotes obsolètes & rares  <sup>Amélioré  </sup> </td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Réduire les crashs Système pour une meilleure performance    <sup class="nou">Nouveau</sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Télécharger & Installer Auto les pilotes pendant le temps d’inactivité   <sup class="nou"> Nouveau</sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Sauvegarde automtique de tous les pilotes pour une restauration sûre </td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Priorité pour mettre à jour les composants de jeux  <sup> Amélioré</sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Détecter et réparer efficacement les erreurs de périphériques <sup class="nou"> Nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue"> Mettre à jour Automatiquement vers la Dernière Version</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
      <td class="space"></td>
      <td class="itemb"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th colspan="2"></th>
      <th class="space"></th>
      <th class="itemb">Driver Booster FREE <span>Votre édition actuelle</span></th>
      <th class="space"></th>
      <th class="itema">
        Driver Booster PRO
        <span>(1 an / 3 PCs)</span>
        <strong>19,99€</strong> <del>74,85€</del>
        <a href="https://www.iobit.com/buy.php?product=db8spin3pcfr&ref=fr_db3pcoldspecial2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dboldspecial2006-fr')"
           class="buybtn">
          Acheter Maintenant
        </a>
      </th>
    </tr>
    </tfoot>
  </table>
</div>
<!-- main end -->


<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
      <dd><h3>Satisfait ou Remboursé</h3></dd>
      <dd>Garantie satisfait ou remboursé pendant 60 <br> jours après la date d’achat.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""></dt>
      <dd><h3>Paiement 100% Sécurisé</h3></dd>
      <dd>IObit vous propose huit modes de paiement <br> sécurisés pour régler vos achats.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dt>
      <dd><h3>Obtenir la licence</h3></dd>
      <dd>Vous recevrez le code de licence dans les <br> minutes après l’achat.</dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
    <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
  </dl>
  <!-- copyright -->
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
</div>
<!-- footer end -->


<div class="floatlayer">
  <div class="wrapper clearfix">
    <h2>Le prix le plus bas jamais vu auparavant ! Offre valable <br> uniquement aujourd’hui !</h2>
    <dl>
      <dt><strong>19,99€ </strong> <del>74,85€</del></dt>
      <dd>
        <a href="https://www.iobit.com/buy.php?product=db8spin3pcfr&ref=fr_db3pcoldspecial2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dboldspecial2006-fr')"
           class="buybtn">
          VITE, J’EN PROFITE
        </a>
      </dd>
    </dl>
  </div>
</div>

<script src="<?php echo $pResUrl; ?>script/script.js"></script>
<script type="text/javascript">
  $(function () {
    //countdown
    countdown((".header li strong"));
    //user
    $(".users li").userMouseover($(".content dl"));
    //floatlayer
    $(window).scrollWindow($(".banner .buybtn"),$('.floatlayer'),("on"));
    //feature
    $(".feature-list dl").click(function() {
      $(".notes").removeClass("on");
      $(this).addClass("on").siblings().removeClass("on");
      var index = $(this).index();
      $(".feature-box").eq(index).addClass("on").siblings().removeClass("on");
      setTimeout(function() {
        $(".feature-box").eq(index).find(".notes").addClass('on');
      }, 100);

      $(".feature-box h3,.feature .cylinder,.feature-box .progress-bar,.feature-box.three .driver,.feature-box .updated-driver,.feature-box.three .complete,.feature-box.three .attention,.feature-box .usbox,.feature-box .usb").removeClass("on");
      $(".driver-start").removeClass("finished");

      switch (index) {
        case 0:
          setTimeout(function() {
            $(".feature-box.one h3,.feature .cylinder").addClass("on");
          }, 300);
          break;
        case 1:
          setTimeout(function() {
            $(".feature-box .progress-bar,.feature-box.two h3").removeClass("on").addClass("on");
          }, 300);
          break;
        case 2:
          setTimeout(function() {
            $(".feature-box.three .driver,.feature-box .updated-driver").addClass('on');
          }, 300);
          setTimeout(function() {
            $(".feature-box.three .attention").addClass('on');
          }, 1000);
          setTimeout(function() {
            $(".feature-box .updated-driver").removeClass('on');
          }, 3800);
          setTimeout(function() {
            $(".feature-box.three .driver,.feature-box.three .attention").removeClass('on');
            $(".feature-box.three .complete").addClass('on');
            $(".driver-start").addClass("finished");
          }, 4400);
          break;
        case 3:
          setTimeout(function() {
            $(".feature-box .usbox").addClass("on");
          }, 300);
          setTimeout(function() {
            $(".feature-box .usbox.one .usb").addClass("on");
          }, 2200);
          setTimeout(function() {
            $(".feature-box .usbox.two .usb").addClass("on");
          }, 4200);
          setTimeout(function() {
            $(".feature-box .usbox.three .usb").addClass("on");
          }, 6200);
          setTimeout(function() {
            $(".feature-box .usbox.four .usb").addClass("on");
          }, 8200);
          break;
        default:
          return;
      }
    });
    $(window).on('scroll', function() {
      if ($(window).scrollTop() > $(".payment").offset().top && $(".feature-list dl").eq(0).hasClass("on")) {
        oneFlag = false;
        $(".feature-box").eq(0).addClass("on").siblings().removeClass("on");
        $(".feature-box h3,.feature .cylinder").removeClass("on").addClass("on");
        $(".feature-box").eq(0).find(".notes").addClass('on');
      }
    });
  });
</script>
</body>
</html>