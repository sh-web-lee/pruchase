<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdboffice_p' . $date;
  $c_name_t='frdboffice_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));


if(in_array($_GET['st'],array('dbxmasr','officialfree','officialpro'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
	$refStr.='-'.$_GET['pop'];
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
  <title>Jusqu'à -85% sur Driver Booster PRO et profitez dès maintenant ce prix baissé - Soldes d'hiver !</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1 class="title">Soldes d’hiver VENTE FLASH</h1>
      <h3 class="subtitle">Jusqu’à -85% ! Ne ratez pas l’occasion de profiter du <b>PRIX LE PLUS BAS</b> de Driver Booster !</h3>
      <div class="clearfix">
        <div class="offer small">
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
            <span class="discount"><b>-65%</b></span>
          </div>
          <div class="price">
            <p class="line"><strong>24</strong><span><b>€99</b> <del>74,85€</del></span></p>
            <a class="buybtn small"
               href="https://www.iobit.com/buy.php?product=fr-db73pc2499&ref=fr_db71y3pc2499purchase2001<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2020a-fr');">
              <i class="all-icons"></i>
              J’en profite !   
            </a>
          </div>
        </div>
        <div class="offer big">
          <div class="countdown">
            <i class="all-icons"></i> <b>00</b>J : <b>00</b>H : <b>09</b>M : <b>30</b>Sec : <b>00</b>Ms
          </div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
            <span class="discount"><b>-85%</b></span>
          </div>
          <div class="price">
            <p class="line"><strong>23</strong><span><b>€99</b> <del>174,82€</del></span></p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2399&ref=fr_db7iusdpf2399purchase2001<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2020b-fr');">
              <i class="all-icons"></i>
              J’en profite !   
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
  </div>
  <!-- payment end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>Pourquoi choisir <span>Driver Booster PRO</span> ?</h2>
      <h3 class="intitle">
        Mettez à jour automatiquement les pilotes, les composants de jeu obsolètes et 
        réparez les problèmes matériels <em class="one"></em><em class="two"></em>
      </h3>
      <div class="intro-wrap">
        <span class="one"><img src="<?php echo getStaticUrl('images/intro01.png')?>" alt=""/></span>
        <span class="two"><img src="<?php echo getStaticUrl('images/intro02.png')?>" alt=""/></span>
        <span class="three"><img src="<?php echo getStaticUrl('images/intro03.png')?>" alt=""/></span>
        <span class="four"><img src="<?php echo getStaticUrl('images/intro04.png')?>" alt=""/></span>
        <dl class="one">
          <dt><b>Analyse automatique</b></dt>
          <dd>
            Analysez et identifiez automatiquement plus de 3,5 millions de pilotes et composants de jeu obsolètes et défectueux en un clic
          </dd>
        </dl>
        <dl class="two">
          <dt><b>Téléchargement ultra-rapide des paquets de mise à jour</b></dt>
          <dd>
            Téléchargez rapidement les pilotes et les installez automatiquement lorsque l’ordinateur est moins occupé
          </dd>
        </dl>
        <dl class="three">
          <dt><b>Mise à jour 100% sécurisée</b></dt>
          <dd>
            Sauvegardez automatiquement tous les pilotes précédents avant ses installations et les restaurez en cas de besoin
          </dd>
        </dl>
        <dl class="four">
          <dt><b>Augmentation des performances de jeu</b></dt>
          <dd>
            Mise à jour prioritaire pour les composants et les pilotes de jeu peu courants & les plus récents
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2 class="intitle">
        Davantage de fonctionnalités dont vous pouvez profiter de <em class="one"></em><em class="two"></em>
      </h2>
      <dl class="first">
        <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
        <dd>Détectez et corrigez les erreurs matérielles de vos périphériques</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
        <dd>Corrigez les problèmes<br> dus à des pilotes : BOSD, connexion internet,<br>absence de son</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
        <dd>Mettez à jour vers la dernière version</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature04.png')?>" alt=""/></dt>
        <dd>Excellent support 24 heures/24, 7 jours/7</dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Si vous avez manqué le Noël, ne ratez pas nos SOLDES D’HIVER !</h2>
      <div class="clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/></dt>
          <dd>Désinstallez complètement les programmes et nettoyez automatiquement les résidus</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></dt>
          <dd>Maximisez les performances et la durée de votre disque en défragmentant les registres et les fichiers du système</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
          <dd>Un outil de protection puissant des fichiers qui garantit la sécurité de vos dossiers et vos données</dd>
        </dl>
      </div>
      <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2399&ref=fr_db7iusdpf2399purchase2001<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2020b-fr');">
        <i class="all-icons"></i>
        J’en profite !   
      </a>
    </div>
  </div>
  <!-- giftbox end -->

  <div class="reviewcompare">
    <!-- review start -->
    <div class="review wrapper clearfix">
      <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
      <div class="media"><img src="<?php echo getStaticUrl('images/media.png')?>" alt=""/></div>
      <div class="usereview">
        <ul class="users clearfix">
          <li class="first current">
            <div class="imgbox">
              <img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""/>
            </div>
          </li>
          <li>
            <div class="imgbox">
              <img src="<?php echo getStaticUrl('images/christian-cappelle.png')?>" alt="Myo Thuya"/>
            </div>
          </li>
          <li>
            <div class="imgbox">
              <img src="<?php echo getStaticUrl('images/jean-pierre.png')?>" alt="Adam Backlund"/>
            </div>
          </li>
          <li>
            <div class="imgbox">
              <img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Wayne Bowler"/>
            </div>
          </li>
        </ul>
        <div class="userbox">
          <dl class="active">
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
            <th class="itema">Driver Booster FREE</th>
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

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <h2>Facilitez la mise à jour des pilotes avec Driver Booster PRO !</h2>
      <div class="imgbox fl">
        <img class="gift-box on" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <img class="box" src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <ul class="price fl">
        <li class="one on">
          <a href="https://www.iobit.com/buy.php?product=fr-db7iusdpf2399&ref=fr_db7iusdpf2399purchase2020btm<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2020btma-fr');">
            <em><strong>85<small>%</small> d’économie</strong></em>
            <p>
              <strong>23</strong>
              <span><b>€99</b> <del>174,82€</del></span>
            </p>
            <i class="arrow arrowmove"></i>
          </a>
        </li>
        <li>
          <a href="https://www.iobit.com/buy.php?product=fr-db73pc2499&ref=fr_db71y3pc2499purchase2020btm<?php echo $refStr;?>&aff=&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2020btmb-fr')">
            <em><strong>65<small>%</small> d’économie</strong></em>
            <p>
              <strong>24</strong>
              <span><b>€99</b> <del>74,85€</del></span>
            </p>
            <i class="arrow"></i> 
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- bottombuy end -->

<!-- bottom start -->
<div class="footer">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Satisfait ou Remboursé</h4>
          <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""></dt>
        <dd>
          <h4>Paiement 100% Sécurisé</h4>
          <p>IObit vous propose huit modes de paiement sécurisé pour régler vos achats.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""></dt>
        <dd>
          <h4>Obtenir la licence</h4>
          <p>Vous recevrez le code de licence dans les minutes après l’achat.</p>
        </dd>
      </dl>
    </div>
    <!-- service end -->

    <dl class="note">
      <dt>Note:  </dt>
      <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
    </dl>
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
  </div>
</div>
<!-- bottom end -->

  <script>
    refStr='<?php echo $refStr;?>';
    var _href="https://www.iobit.com/buy.php?product=fr-db73pc2499&ref=fr_db71y3pc2499purchasesoldout<?php echo $refStr;?>&aff=&refs=fr_purchase_db";
    var _hrefbundle="https://www.iobit.com/buy.php?product=fr-db7iusdpf2699&ref=fr_db7iusdpf2699purchase2001soldout<?php echo $refStr;?>&aff=&refs=fr_purchase_db";
    var _bottomhref="https://www.iobit.com/buy.php?product=fr-db73pc2499&ref=fr_db71y3pc2499purchase2020soldoutbtm<?php echo $refStr;?>&aff=&refs=fr_purchase_db";
    var _bottomhrefbundle="https://www.iobit.com/buy.php?product=fr-db7iusdpf2699&ref=fr_db7iusdpf2699purchase2020soldoutbtm<?php echo $refStr;?>&aff=&refs=fr_purchase_db";
    var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasesoldouta-fr');";
    var _gabundle = "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasesoldoutb-fr');";
    var _bottomga = "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchaseoutb-fr');";
    var _bottomgabundle = "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchaseouta-fr');";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>