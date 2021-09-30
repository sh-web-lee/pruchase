<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itascjanpa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>5){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=5;
    }
  }else{
    $packsNum=128;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -72267174;
$buyNum = number_format($buyNum);

if($_GET['action']=='getBuyNum'){
  echo json_encode(array('buyNum'=>$buyNum));
  exit();
}

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Économisez 85% sur Driver Booster PRO et obtenez les cadeaux exclusifs - Vente Flash 24H</title>
  <meta name="Copyright" content="IObit">
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
    <h1>Vente Flash 24h</h1>
    <!-- content -->
    <div class="content clearfix">

      <!-- db+3gifts -->
      <dl class="fl bundle3">
        <dt>
          <span class="box">Driver Booster PRO+Smart Defrag PRO+Protected Folder+IObit Uninstaller PRO</span>
          <p>1 an, 3 PC</p>
        </dt>
        <dd>
          <p class="price"><strong><big>26</big>,99€</strong> <del>174,82€</del></p>
          <!-- db+3gifts buybtn -->
          <a class="buybtn"
             href=""
             onclick="">
            <i class="all-icons"></i>
            <span>J’EN PROFITE VITE</span>
          </a>
        </dd>
        <div class="mask"><span>TERMINÉ!</span></div>
      </dl>

      <!-- db+2gifts -->
      <dl class="fl large bundle">
        <dt>
          <span class="box">Driver Booster PRO+Protected Folder+IObit Uninstaller PRO</span>
          <p>1 an, 3 PC</p>
        </dt>
        <dd>
          <p class="price"><strong><big>24</big>,99€</strong> <del>144,83€</del></p>
          <!-- db+2gifts buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-db73pcpfiu2499&ref=fr_db7pfiu2499purchase1910<?php echO $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1910-fr');">
            <i class="all-icons"></i>
            <span>J’EN PROFITE VITE</span>
          </a>
        </dd>
      </dl>

      <!-- db -->
      <dl class="fr db">
        <dt>
          <span class="box">Driver Booster PRO</span>
          <p>1 an, 3 PC</p>
        </dt>
        <dd>
          <p class="price"><strong><big>24</big>,99€</strong> <del>74,85€</del></p>
          <!-- db buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-db73pc2499&ref=fr_db71year3pc2499purchase1910<?php echO $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1910b-fr');">
            <i class="all-icons"></i>
            <span>J’EN PROFITE VITE</span>
          </a>
        </dd>
      </dl>

      <!-- countdown -->
      <p class="countdown" id="countdown">
        <i class="all-icons"></i>
        Plus que
        <strong>00</strong>H :
        <strong>00</strong>m :
        <strong>00</strong>s :
        <strong class="last">000</strong>ms
      </p>

      <!-- person -->
      <p class="person"><i class="all-icons"></i>&nbsp;&nbsp;&nbsp;<strong class="buyNum"><?php echo $buyNum;?></strong> personnes l’ont déjà acheté</p>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- payment -->
<div class="payment">
  <div class="wrapper">
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
  </div>
</div>
<!-- end payment -->

<!-- benefits start -->
<div class="benefits wrapper clearfix">
  <h2>Profitez des performances optimales <br> sur PC et les jeux en ligne avec Driver Booster PRO</h2>
  <div class="showcase">
    <div class="inner">
      <ul class="screenshot clearfix">
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt=""/>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt=""/>
        </li>
      </ul>
    </div>
    <ul class="zoom">
      <li class="fun1 active">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun2">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun3">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt=""/>
        </div>
      </li>
      <li class="fun4">
        <div class="container">
          <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt=""/>
        </div>
      </li>
    </ul>
  </div>
  <div class="detail-list">
    <dl class="active first">
      <dt><i class="benefits01"></i></dt>
      <dd>
        <h3>Met à jour plus de 3 500 000 pilotes</h3>
        <p>
          Solution “one-stop” pour mettre à jour automatiquement<br>
          plus de 3 500 000 pilotes obsolètes et incompatibles.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benefits02"></i></dt>
      <dd>
        <h3>Mise à jour 100% sécurisée</h3>
        <p>
          Sauvegarder automatiquement tous les pilotes et créer un point<br>
          de restauration du système.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benefits03"></i></dt>
      <dd>
        <h3>Performance de jeu maximale</h3>
        <p>
          Augmentez les performances de jeu avec les derniers<br>
          pilotes Game Ready et améliorez l’expérience de jeu avec<br>
          les composants mis à jour et appropriés.
        </p>
      </dd>
    </dl>
    <dl>
      <dt><i class="benefits04"></i></dt>
      <dd>
        <h3>Téléchargement de pilotes plus rapide</h3>
        <p>
          Télécharger et installer automatiquement les<br>
          pilotes & les composants du jeu pendant le temps d’inactivité.
        </p>
      </dd>
    </dl>
  </div>
  <div class="clearfix"></div>
  <a class="intro fr" href="javascript: void(0)">En savoir plus sur la version PRO >></a>
</div>
<!-- benefits end -->

<!-- gifts -->
<div class="gifts">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>Notre cadeau exclusif uniquement pour vous</h2>
    <!-- iu -->
    <dl class="iu">
      <dt><span class="box">IObit Uninstaller PRO</span></dt>
      <dd>
        <p class="price"><strong>0€</strong> <del>29,99€</del></p>
        <p class="describe">
          Désinstallez complètement les programmes, <br>
          nettoyez automatiquement les résidus et <br>
          mettez à jour facilement les logiciels obsolètes. <br>
        </p>
      </dd>
    </dl>
    <!-- pf -->
    <dl class="pf">
      <dt><span class="box">Protected Folder</span></dt>
      <dd>
        <p class="price"><strong>0€</strong> <del>39,99€</del></p>
        <p class="describe">
          Un outil de protection puissant des fichiers <br>
          qui garantit la sécurité des dossiers, des <br>
          données et de la vie privée.
        </p>
      </dd>
    </dl>
    <!-- sd -->
    <dl class="sold sd">
      <dt><span class="box">Smart Defrag PRO</span></dt>
      <dd>
        <p class="price"><strong>0€</strong> <del>29,99€</del></p>
        <p class="describe">
          Maximisez les performances et la durée <br>
          de votre disque en défragmentant les <br>
          registres et les fichiers du système.
        </p>
      </dd>
    </dl>
    <!-- clear -->
    <div class="clearfix"></div>
    <!-- db+2gifts buybtn -->
    <a class="buybtn black"
       href="https://www.iobit.com/buy.php?product=fr-db73pcpfiu2499&ref=fr_db7pfiu2499purchase1910<?php echO $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1910-fr');">
      <i class="all-icons"></i>
      <span>VITE, J’EN PROFITE</span>
    </a>
  </div>
</div>
<!-- end gifts -->

<!-- review -->
<div class="review wrapper">
  <h2>
    Nous faisons de notre mieux pour satisfaire <br>
    nos clients où que vous soyez !
  </h2>
  <div class="container">
    <h3>Qu'en pensent-ils ?</h3>
    <ul>
      <li class="one"><img src="<?php echo getStaticUrl('images/jean-pierre.png')?>" alt="Jean-Pierre FILLION"></li>
      <li class="two"><img src="<?php echo getStaticUrl('images/pcmag.png')?>" alt="PC Magazine"></li>
      <li class="three"><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></li>
      <li class="four"><img src="<?php echo getStaticUrl('images/christian-cappelle.png')?>" alt="Christian Cappelle"></li>
    </ul>
    <div class="details">
      <div>
        <h4>Jean-Pierre FILLION <img src="<?php echo getStaticUrl('images/flag-fr.png')?>" alt=""></h4>
        <p>« J'ai été fortement impressionné de voir tout ce que peut faire Driver Booster PRO ! J'en avais tellement besoin pour résoudre une partie de mes logiciels dont les drivers étaient périmés et bons à mettre à jour. Je ne regrette pas de m'être penché sur Driver Booster. »</p>
      </div>
      <div class="active">
        <h4>PC Magazine</h4>
        <p>« Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un. »</p>
      </div>
      <div>
        <h4>Hishaam Salasa <img src="<?php echo getStaticUrl('images/flag-us.png')?>" alt=""></h4>
        <p>« Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède une interface utilisateur conviviale et facile à utiliser. 5 ETOILES bien mérités !!! »</p>
      </div>
      <div>
        <h4>Christian Cappelle <img src="<?php echo getStaticUrl('images/flag-be.png')?>" alt=""></h4>
        <p>« Driver Booster PRO m'a permis de rafraîchir et optimise mes ordinateurs qui fonctionnent beaucoup mieux malgré leur âge avancé . Avec les mises à jour régulières il demeurent plus efficaces et plus fluides! »</p>
      </div>
    </div>
    <a class="next" href="javascript: nextFun();"></a>
    <a class="prev" href="javascript: prevFun();"></a>
  </div>
</div>
<!-- end review -->

<!-- award -->
<div class="award">
  <div class="wrapper">
    <h2>Récompenses et certifications</h2>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
  </div>
</div>
<!-- end award -->

<!-- comparison -->
<div class="comparison wrapper">
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
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
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
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Priorité pour mettre à jour plus de pilotes obsolètes & rares  <sup>Amélioré  </sup> </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Réduire les crashs Système pour une meilleure performance    <sup class="nou">Nouveau</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Télécharger & Installer Auto les pilotes pendant le temps d’inactivité   <sup class="nou"> Nouveau</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Sauvegarde automtique de tous les pilotes pour une restauration sûre </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- ADD NEW -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Priorité pour obtenir les pilotes Game Ready <sup class="nou"> Nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- AMEND OLD -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Priorité pour installer les composants de jeu mis à jour et appropriés <sup> Amélioré</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Détecter et réparer efficacement les erreurs de périphériques <sup class="nou"> Nouveau </sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue"> Mettre à jour Automatiquement vers la Dernière Version</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- cutbuy -->
<div id="footbuy" class="cutbuy footbuy">
  <div class="wrapper clearfix">
    <!-- title -->
    <h2>PERMIER ARRIVE, PERMIER SERVI !</h2>
    <!-- db-box -->
    <div class="box fl"><img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO 6"></div>
    <!-- selector -->
    <ul class="selector fl">

      <!-- db+2gifts -->
      <li class="gifts2 active clearfix" data-num="1">
        1 An / 3 PC + PF + IU
        <strong>-80%</strong>
      </li>

      <!-- db -->
      <li class="db clearfix" data-num="2">
        1 An / 3 PC
        <strong>-65%</strong>
      </li>

      <!-- db+3gifts -->
      <li class="gifts3 clearfix sold" data-num="0">
        1 An / 3 PC+ PF + SD + IU
        <strong>-85%</strong>
        <div class="mask"><span>TERMINÉ!</span></div>
      </li>

    </ul>
    <!-- message -->
    <dl class="fr">
      <dt>
        <p class="price"><strong><big>24</big>,99€</strong> <del>144,83€</del></p>
      </dt>
      <dd>
        <!-- db+2gifts buybtn -->
        <a class="buybtn black"
           href="https://www.iobit.com/buy.php?product=fr-db73pcpfiu2499&ref=fr_db7pfiu2499purchase1910<?php echO $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1910-fr');">
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
    <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
    <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>