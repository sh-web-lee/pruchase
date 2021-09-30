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

$cName='junesummersalefr20200624';
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
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Jusqu'à -85% sur Nouveau Driver Booster PRO. Achetez-en 1 et obtenez-en 3 GRATUITS !  Dernière Démarque !</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <h1 class="title">Vente Flash Spéciale été</h1>
    <h2 class="subtitle">Le nouveau Driver Booster 8 PRO ! Achetez-en 1 et obtenez-en 3 GRATUITS ! Aujourd’hui Seulement !</h2>
	<div class="countdown">
	  <span>SOLDES</span> <b>00</b>h : <b>00</b>m : <b>00</b>s : <b>00</b>ms
	</div>
    <ul class="content clearfix">
      <li id="db-1pc" class="on-left">
        <img class="box" src="<?php echo getStaticUrl('images/db-one-box.png')?>" alt="">
        <div class="price">
          <p class="name">1 an, 1 PC</p>
          <p><strong><big>29</big>,99€</strong></p>
          <a class="buybtn gray"
             href="https://www.iobit.com/buy.php?product=fr-db81pc2999&ref=fr_db81pc2999indexpurchase2009<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2009-fr');">
            J’EN PROFITE VITE 
          </a>
        </div>
      </li>
      <li id="db-pf-sd" class="on-middle">
        <img class="off" src="<?php echo getStaticUrl('images/offer85.png')?>" alt="">
        <img class="box" src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt="">
        <div class="price">
          <p class="name">1 an, 3 PC</p>
          <p><strong><big>24</big>,99€</strong> <del>174,82€</del></p>
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=fr-db8iusdpf2499&ref=fr_db8sdpfiu2499indexpurchase2009<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2009b-fr');">
            J’EN PROFITE VITE 
          </a>
          <p class="people"><i class="all-icons"></i> <b>4 394 434</b> personnes l’ont déjà acheté</p>
        </div>
        <!-- <div class="mask"><span class="sold-word">TERMINÉ!</span></div> -->
      </li>
      <li id="db-3pc" class="on-right">
        <img class="off" src="<?php echo getStaticUrl('images/offer60.png')?>" alt="">
        <img class="box" src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt="">
        <div class="price">
          <p class="name">1 an, 3 PC</p>
          <p><strong><big>26</big>,99€</strong> <del>74,85€</del></p>
          <a class="buybtn gray"
             href="https://www.iobit.com/buy.php?product=fr-db83pc2699&ref=fr_db83pc2699indexpurchase2009<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2009a-fr');">
            J’EN PROFITE VITE 
          </a>
        </div>
        <div class="mask"><em class="sold-word on">TERMINÉ!</em></div>
      </li>
    </ul>
  </div>
</div>
<!-- banenr end -->

<!-- payment start -->
<div class="payment wrapper">
  <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="">
</div>
<!-- payment end -->

<!-- feature start -->
<div class="feature wrapper">
  <h2>Pas de problème matériel, ni de souci et sans plus attendre, grâce à…</h2>
  <!-- content -->
  <div class="content clearfix">
    <!-- 01 -->
    <dl class="one">
      <dt><span>Une base de données de<br> drivers plus importante</span></dt>
      <dd class="chart">
        <div>
          <span class="data">+1 000 000</span>
          <span class="cube"></span>
        </div>
      </dd>
      <dd>Bénéficiez de 1 000 000 pilotes supplémentaires</dd>
    </dl>
    <!-- 02 -->
    <dl class="two">
      <dt><span>Sauvegarde automatique</span></dt>
      <dd class="chart">
        <div></div>
      </dd>
      <dd>
        Sauvegardez automatiquement les<br> pilotes précédents pour une<br> restauration simplifiée en cas de besoin
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three">
      <dt><span>Mise à jour ultra rapide <img src="<?php echo getStaticUrl('images/feature-tab.png')?>" alt="+100%"></span></dt>
      <dd class="chart">
        <div>
          <span class="pointer"></span>
        </div>
      </dd>
      <dd>Mettez à jour les pilotes obsolètes<br> en moins d’une minute !</dd>
    </dl>
  </div>
</div>
<!-- feature end -->

<!-- intro start -->
<div class="intro wrapper clearfix">
  <!-- left-message -->
  <div class="left-message fl">
    <div class="screenshots">
      <ul>
        <li>
          <img src="<?php echo getStaticUrl('images/screen01.jpg')?>" alt="">
          <span><img src="<?php echo getStaticUrl('images/highlight01.png')?>" alt=""></span>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screen02.jpg')?>" alt="">
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screen03.jpg')?>" alt="">
          <span><img src="<?php echo getStaticUrl('images/highlight03.png')?>" alt=""></span>
        </li>
        <li>
          <img src="<?php echo getStaticUrl('images/screen04.jpg')?>" alt="">
          <span><img src="<?php echo getStaticUrl('images/highlight04.png')?>" alt=""></span>
        </li>
      </ul>
    </div>
  </div>
  <!-- right-message -->
  <div class="right-message fl">
    <span></span>
    <div class="container">
      <!-- 01 -->
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
        <dd><strong>Maintenez automatiquement</strong> tous vos pilotes à jour pour que vous n’ayez plus à vous en inquiéter.</dd>
      </dl>
      <!-- 02 -->
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
        <dd><strong>Mise à jour sécurisée garantie</strong>, car les sauvegardes de pilotes et les créations de points de restauration sont automatiquement effectuées.</dd>
      </dl>
      <!-- 03 -->
      <dl class="last clearfix">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
        <dd><strong>Un jeu fluide</strong> grâce à votre accès à encore plus de composants de jeu pour la meilleure expérience de jeu.</dd>
      </dl>
      <!-- 04 -->
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon04.png')?>" alt=""></dt>
        <dd><strong>PC fonctionnant</strong> parfaitement car la version PRO résout encore plus de problèmes matériels pour vous.</dd>
      </dl>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- gift-box start -->
<div class="gift-box">
  <h2>Découvrez les cadeaux exclusifs, rien que pour vous !</h2>
  <div class="wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></dt>
      <dd>
        <strong>0€</strong> <del>29,99€</del>
        <p>Maximisez les performances et la durée de votre disque en défragmentant les registres et les fichiers du système.</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
      <dd>
        <strong>0€</strong> <del>39,99€</del>
        <p>Un outil de protection puissant des fichiers qui garantit la sécurité de vos dossiers et vos données.</p>
      </dd>
    </dl>
    <dl class="last">
      <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=""/></dt>
      <dd>
        <strong>0€</strong> <del>29,99€</del>
        <p>Désinstallez complètement les programmes indésirables et mettez à jour les logiciels en un clic.</p>
      </dd>
    </dl>
    <!-- <div class="mask on"><span class="sold-word on">TERMINÉ!</span></div> -->
  </div>
</div>
<!-- gift-box end -->

<!-- bottomcart start -->
<div id="centbuy" class="bottomcart">
  <div class="wrapper">
    <h2>Premier arrivé, premier servi !</h2>
    <div class="showcase">
      <img class="on" src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt=""/>
      <img src="<?php echo getStaticUrl('images/db-one-box.png')?>" alt=""/>
      <img class="three" src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
    </div>
    <ul class="changelist">
      <li class="bundle on" data-num="1">
        <span>1 An / 3 PC + Cadeaux Offerts</span>
        <strong>-85%</strong>
        <!-- <em class="sold-word on">TERMINÉ!</em> -->
      </li>
      
      <li data-num="0">
        <i></i> <span>1 An / 1 PC  </span>
        <strong></strong>
      </li>
      <li class="three sold" data-num="2">
        <i></i> <span> 1 An / 3 PC </span>
        <strong>-60%</strong>
        <em class="sold-word on">TERMINÉ!</em>
      </li>
    </ul>
    <div class="price fr">
      <p><strong><big>24</big>,99€</strong> <del>174,82€</del></p>
      <a class="buybtn red"
         href="https://www.iobit.com/buy.php?product=fr-db8iusdpf2499&ref=fr_db8sdpfiu2499indexpurchase2009<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2009b-fr');">
        J’EN PROFITE VITE 
      </a>
    </div>
  </div>
</div>
<!-- bottomcart end -->

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
          <th class="text" colspan="2"></th>
          <th class="itema">
            <div>Driver Booster PRO <i class="all-icons"></i></div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            Votre édition actuelle <i class="all-icons"></i>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Vérifiez l’état des pilotes en un seul clic</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Téléchargez et installez automatiquement et rapidement les pilotes</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Téléchargez et installez les pilotes pendant vos périodes d’inactivités</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Sauvegardez automatiquement vos pilotes précédents pour restauration simplifiée en cas de besoin</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Mettez à jour plus de pilotes peu courants ou introuvables</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Mise à jour prioritaire pour les pilotes Game Ready et les composants les plus récents</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Corrigez en un clic les erreurs de périphérique pour de meilleures performances </td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Mise à jour automatique vers la dernière version</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Assistance technique gratuite 24h / 24 et 7 jours sur 7</td>
          <td class="itema"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th class="text" colspan="2"></th>
          <th class="itema"></th>
          <th class="space"></th>
          <th class="itemb"></th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->
</div>

<!-- bottomcart start -->
<div id="bottombuy" class="bottomcart">
  <div class="wrapper">
    <h2>Premier arrivé, premier servi !</h2>
    <div class="showcase">
      <img class="on" src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt=""/>
      <img src="<?php echo getStaticUrl('images/db-one-box.png')?>" alt=""/>
      <img class="three" src="<?php echo getStaticUrl('images/db-three-box.png')?>" alt=""/>
    </div>
    <ul class="changelist">
      <li class="bundle on" data-num="1">
        <span>1 An / 3 PC + Cadeaux Offerts</span>
        <strong>-85%</strong>
      </li>
      
      <li data-num="0">
        <i></i> <span>1 An / 1 PC  </span>
        <strong></strong>
      </li>
      <li class="three sold" data-num="2">
        <i></i> <span> 1 An / 3 PC </span>
        <strong>-60%</strong>
        <em class="sold-word on">TERMINÉ!</em>
      </li>
    </ul>
    <div class="price fr">
      <p><strong><big>24</big>,99€</strong> <del>174,82€</del></p>
      <a class="buybtn red"
         href="https://www.iobit.com/buy.php?product=fr-db8iusdpf2499&ref=fr_db8sdpfiu2499indexpurchase2009<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2009b-fr');">
        J’EN PROFITE VITE 
      </a>
    </div>
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
      url: "2020summer.php",
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