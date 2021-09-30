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

$cName='frdbfeb_re';
$reduceNum=empty($_COOKIE[$cName])?(ceil(microtime_float()*1000/20000)):$_COOKIE[$cName];
$buyNum = ceil(microtime_float()*1000/20000) - $reduceNum;
if($_GET['action']=='getBuyNum'){
  setcookie($cName, $reduceNum, time() + 3600 * 24 *30 *7);
  echo $buyNum;
  exit();
}

/*$time = time();
if(!isset($_COOKIE['returnuserfr2020'])){
  setcookie('returnuserfr2020', $time, time() + 3600 * 24 *30 *7);
}else{
  if($time-$_COOKIE['returnuserfr2020']>86400){
    header("Location:./return.php".(empty($_SERVER['QUERY_STRING'])?'':('?'.$_SERVER['QUERY_STRING'])));
  }
}
*/

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Jusqu'à 85% d'économie sur Driver Booster PRO et profitez de derniers petits prix - Vente flash du jour !</title>
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
    <h1 class="title">VENTE FLASH - FÊTE DES MÈRES</h1>
    <h2 class="subtitle">
      Célébrons ensemble le 15<sup>ème</sup> anniversaire d'IObit et profitez des meilleures offres jamais vues auparavant !
    </h2>
    <ul class="content clearfix">
      <li id="db-1pc" class="on-left">
        <img class="off" src="<?php echo getStaticUrl('images/banner-offer15.png')?>" alt="">
        <img class="box" src="<?php echo getStaticUrl('images/banner-db-box.png')?>" alt="">
        <p class="price"><strong>24</strong> <span><sup> €99</sup> <del> 29,99€</del></span></p>
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=fr-db71y1pc2499&ref=fr_db71y1pc2499indexpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2006-fr')">
          <span>VITE, J’EN PROFITE</span>
        </a>
      </li>
      <li id="db-pf-sd" class="on-middle">
        <img class="off" src="<?php echo getStaticUrl('images/banner-offer85.png')?>" alt="">
        <img class="box" src="<?php echo getStaticUrl('images/banner-dbpfsd-box.png')?>" alt="">
        <p class="price"><strong>24</strong> <span><sup> €99</sup> <del> 174,82€</del></span></p>
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2499&ref=fr_db7sdpfiu2499indexpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2006-fr')">
          <span>VITE, J’EN PROFITE</span>
        </a>
        <p class="attention hidden"><i></i><strong class="buyNum"><?php echo $buyNum ?></strong> personnes l'ont acheté!</p>
        <p class="countdown">Expiré dans <b>00</b>H : <b>00</b>m : <b>00</b>s : <b class="small">00</b>ms *</p>
        <p class="attention"><i></i><strong>4,325,356</strong> personnes l’ont acheté !</p>
      </li>
      <li id="db-3pc" class="on-right">
        <img class="off" src="<?php echo getStaticUrl('images/banner-offer60.png')?>" alt="">
        <img class="box" src="<?php echo getStaticUrl('images/banner-db-box3pc.png')?>" alt="">
        <p class="price"><strong>26</strong> <span><sup> €99</sup> <del> 74,85€</del></span></p>
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=fr-db73pc2699&ref=fr_db71y3pc2699indexpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2006-fr')">
          <span>VITE, J’EN PROFITE</span>
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
</div>
<!-- payment end -->

<!-- feature start -->
<div class="feature wrapper">
  <h2>Gardez vos pilotes à jour en permanence et<br> bénéficiez d’un PC performant</h2>
  <div class="clearfix">
    <div class="feature-list fl">
      <dl class="on clearfix">
        <dt>1、</dt>
        <dd>
          Une vaste base de données avec plus de 3,5 millions de pilotes <span class="pro-tag"><em>Exclusivité PRO</em></span>
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
                <b class="arrow">Plus de 3 500 000</b>
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

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper">
    <h2>Profitez d’un paquet cadeau à durée limitée !</h2>
    <div class="clearfix">
      <div class="box sd">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
        <dl>
          <dt>
            <h3>Smart Defrag 6 PRO</h3>
            <del>29,99€</del>&nbsp;&nbsp;<strong>0<b>€</b> </strong>
          </dt>
          <dd>
            Maximisez les performances <br>
            du disque dur et de votre PC.
          </dd>
        </dl>
      </div>
      <div class="box pf">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
        <dl>
          <dt>
            <h3>Protected Folder</h3>
            <del>39,99€</del>&nbsp;&nbsp;<strong>0<b>€</b> </strong>
          </dt>
          <dd>
            Protégez vos fichiers et vos données <br>
            importants contre le vol, la perte et les fuites.
          </dd>
        </dl>
      </div>
      <div class="box iu">
        <img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt="">
        <dl>
          <dt>
            <h3>IObit Uninstaller 9 PRO</h3>
            <del>29,99€</del>&nbsp;&nbsp;<strong>0<b>€</b> </strong>
          </dt>
          <dd>
            Désinstallez les bundlewares, programmes <br>
            indésirables et les plug-ins en un clic.
          </dd>
        </dl>
      </div>
    </div>
    <a class="buybtn cart"
       href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2499&ref=fr_db7sdpfiu2499indexpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2006-fr')">
      <span>VITE, J’EN PROFITE</span>
    </a>
  </div>
</div>
<!-- gift-box end -->

<div class="reviewcompare">
  <!-- review start -->
  <div class="review wrapper clearfix">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
    <div class="media"><img src="<?php echo getStaticUrl('images/media.png')?>" alt=""/></div>
    <div class="usereview">
      <ul class="users clearfix">
        <li class="first current">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"/>
          </div>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/christian-cappelle.png')?>" alt="Christian Cappelle"/>
          </div>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/jean-pierre.png')?>" alt="Jean-Pierre FILLION"/>
          </div>
        </li>
        <li>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"/>
          </div>
        </li>
      </ul>
      <div class="userbox">
        <dl class="one active">
          <dd>
            <p>
              Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de 
              licence pour un bon prix. Bien que les concurrents Ashampoo Driver Updater et 
              SlimWare Utilities DriverUpdate offrent également des fonctionnalités 
              intéressantes, IObit Driver Booster PRO reste absolument numéro un.
            </p>
            <b>— PC Magazine</b>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              Driver Booster PRO m'a permis de rafraîchir et optimise mes ordinateurs qui 
              fonctionnent beaucoup mieux malgré leur âge avancé . Avec les mises à 
              jour régulières il demeurent plus efficaces et plus fluides!
            </p>
            <b>— Christian Cappelle</b>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              J'ai été fortement impressionné de voir tout ce que peut faire Driver Booster PRO ! 
              J'en avais tellement besoin pour résoudre une partie de mes logiciels dont les drivers 
              étaient périmés et bons à mettre à jour. Je ne regrette pas de m'être penché sur 
              Driver Booster. 
            </p>
            <b>— Jean-Pierre FILLION</b>
          </dd>
        </dl>
        <dl>
          <dd>
            <p>
              Le meilleur logiciel de mise à jour de pilotes sur le marché absolument qui possède 
              une interface utilisateur conviviale et facile à utiliser. 5 ETOILES bien mérités !!!
            </p>
            <b>— Hishaam Salasa</b>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <h2>Aperçu des différences entre votre édition actuelle et la version PRO</h2>
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th colspan="2"></th>
          <th class="space"></th>
          <th class="itema">Driver Booster PRO</th>
          <th class="space2"></th>
          <th class="itemb">Votre édition actuelle</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Vérifiez l’état des pilotes en un seul clic</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Téléchargez et installez automatiquement et rapidement les pilotes</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Téléchargez et installez les pilotes pendant vos périodes d’inactivités</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Sauvegardez automatiquement vos pilotes précédents pour restauration simplifiée en cas de besoin</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Mettez à jour plus de pilotes peu courants ou introuvables</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Mise à jour prioritaire pour les pilotes Game Ready et les composants les plus récents</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Corrigez en un clic les erreurs de périphérique pour de meilleures performances </td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Mise à jour automatique vers la dernière version</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Assistance technique gratuite 24h / 24 et 7 jours sur 7</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space2"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
</div>

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <h2>Premier arrivé, premier servi !</h2>
    <div class="showcase">
      <span class="img three-box"></span>
    </div>
    <ul>
      <li class="active" data-num="1">
        <span>1 An / 3 PC+Paquet Cadeau</span>
        <strong>-85%</strong>
      </li>
      <li class="one-pc" data-num="0">
        <i></i> <span>1 An / 1 PC  </span>
        <strong>-15%</strong>
      </li>
      <li class="three-pc" data-num="2">
        <i></i> <span> 1 An / 3 PC </span>
        <strong>-60%</strong>
      </li>
    </ul>
    <dl class="price-content">
      <dt>
        <p class="price"><strong>24</strong> <span><sup> €99</sup> <del> 174,82€</del></span></p>
      </dt>
      <dd>
        <a class="buybtn cart"
           href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2499&ref=fr_db7sdpfiu2499indexpurchase2006<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2006-fr')">
          <span>VITE, J’EN PROFITE</span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

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
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
    <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
  </dl>
  <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "feature.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 20000);
      }
    });
  }
  setTimeout('getBuyNum()', 15000);
</script>
</body>
</html>