<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';

}
include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frdbxmas2020_p' . $date;
  $c_name_t='frdbxmas2020_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(37,50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(98,165);


// $time = time();
// if(isset($_COOKIE['toreturn'])&&$time-$_COOKIE['toreturn']>86400){
//     header("Location:return.php");
//     exit;
// }else{
//   if(!isset($_COOKIE['toreturn'])) setcookie('toreturn',$time,$time+2592000);
// }
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
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
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -85% sur Driver Booster PRO. Achetez-en 1 et obtenez-en 3 GRATUITS !    </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
      <div class="title">
        <h2>Vente Flash - Spécial Noël</h2>
        <h1>Achetez-en 1 et obtenez-en 3 GRATUITS ! Quantité limitée !</h1>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <div class="price">
            <p><strong>22,99€</strong></p>
            <p class="last">1 AN / 1 PC</p>
            <p><b>1,92€</b> / mois / PC</p>
            
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-db81pc2299&ref=fr_db81pc2299indexpurchase2012<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2012-fr')  ">
               Vite, J‘en Profite
            </a>
          </div>
        </div>
        <div class="offer bigbox">
          <div class="superbox">
            <h3>Cadeaux de Noël</h3>
            <p>
            Seulement <span class="reduce reduce1">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> disponibles</p>
          </div>
          <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="">
          <b class="discount">-83<small>%</small></b>
          <div class="price">
            <p><strong>24,99€</strong> <del>174,82€</del></p>
           
            <p class="last"> 1 AN / <span>3 PC</span> + Cadeaux</p>
            <p><b>0,69€</b> / mois / PC </p>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-db8iuisupf2499&ref=fr_db8isupfiu2499indexpurchase2012<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2012b-fr')   ">
               Vite, J‘en Profite
            </a>
          </div>
        </div>
        <div class="offer right">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="">
          <b class="discount">-63<small>%</small></b>
          <div class="price">
            <p><strong>24,99€</strong> <del>74,85€</del></p>
            <p class="last">1 AN / 3 PC</p>
            <p><b>0,69€</b> / mois / PC </p>
            
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-db83pc2499&ref=fr_db83pc2499indexpurchase2012<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2009a-fr')  ">
               Vite, J‘en Profite
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
<div class="payment-bg">
  <div class="pay-miliony">
    <!-- payment start -->
    <div class="payment wrapper clearfix">
      <dl>
        
        <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
        <dt>Paiement acceptés</dt>
      </dl>
      <dl>
        
        <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
        <dt>Garantie de remboursement</dt>
      </dl>
      <dl class="last">
        
        <dd><img src="<?php echo getStaticUrl('images/gooddy.png')?>" alt=""/></dd>
        <dt>Paiement 100% Sécurisé</dt>
      </dl>
    </div>
    <!-- payment end -->
  </div>
</div>
  

  <!-- feature start -->
  <div class="feature ">
    <div class="wrapper">
      <h2>Uniquement dans Driver Booster PRO</h2>
      <div class="img-box">

      </div>
      <div class="message">
        <dl class="active">
          <dt><i></i></dt>
          <dd>
            <strong>Automatiquement</strong>
            <p>Maintenez automatiquement tous vos pilotes à jour pour que vous n’ayez plus à vous en inquiéter.</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><i></i></dt>
          <dd>
            <strong>Jeu fluide</strong>
            <p>Grâce à votre accès à encore plus de composants de jeu pour la meilleure expérience de jeu.</p>
          </dd>
        </dl>
        <dl class="three">
          <dt><i></i></dt>
          <dd>
            <strong>Sécurité garantie</strong>
            <p>Les sauvegardes de pilotes et les créations de points de restauration sont automatiquement effectuées.</p>
          </dd>
        </dl>
        <dl class="four">
          <dt><i></i></dt>
          <dd>
            <strong>Parfait</strong>
            <p>PC fonctionnant parfaitement car la version PRO résout encore plus de problèmes matériels pour vous.</p>
          </dd>
        </dl>
      </div>
    </div>
    
    
  </div>
  <!-- feature end -->
  <div class="stepbox">
    <div class="wrapper">
      <h2>Pas de problème matériel, ni de souci et sans plus attendre, grâce à</h2>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/step-01.png')?>" alt="">
        <strong>
        Base de données de plus de 4 500 000
        </strong>
        <p>
        Détectez et mettez à jour les pilotes rares, incompatibles et obsolètes et profitez d'un ordinateur puissant et rapide.
        </p>
      </div>
      <div class="box big">
        <img src="<?php echo getStaticUrl('images/step-02.png')?>" alt="">
        <strong>
        Mise à jour hors ligne
        </strong>
        <p>
        L‘outil « Mise à jour des pilotes hors ligne » aide à mettre à jour et installez les pilotes réseaux sans connexion Internet. 
        </p>
      </div>
      <div class="box">
        <img src="<?php echo getStaticUrl('images/step-03.png')?>" alt="">
        <strong>
        Meilleures performances de jeu
        </strong>
        <p>
        Mettez à jour les pilotes Game Ready et les derniers composants de jeu nécessaires pour des jeux plus rapides et plus fluides.
        </p>
      </div>
    </div>
  </div>

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Profitez d’un PC plus rapide, plus propre et plus sûr</h2>
      <div class="clearfix">
        <div class="gift-list">
          <img src="<?php echo getStaticUrl('images/iu-gift.png')?>" alt=""/>
          <p><strong>0€</strong> <del>29,99€</del></p>
          <ul>
            <li>Désinstallez complètement les programmes indésirables et mettez à jour les logiciels en un clic.</li>
          </ul>
        </div>
        <div class="gift-list">
          <img src="<?php echo getStaticUrl('images/isu-gift.png')?>" alt=""/>
          <p><strong>0€</strong> <del>29,99€</del></p>
          <ul>
            <li>Mettez instantanément à jour vos logiciels pour améliorer les performances et la stabilité de votre PC</li>
          </ul>
        </div>
        <div class="gift-list">
          <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt=""/>
          <p><strong>0€</strong> <del>39,99€</del></p>
          <ul >
            <li>Un outil de protection puissant des fichiers qui garantit la sécurité de vos dossiers et vos données.</li>
          </ul>
        </div>
      </div>
      <a href="https://www.iobit.com/buy.php?product=fr-db8iuisupf2499&ref=fr_db8isupfiu2499indexpurchase2012<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2012b-fr')   " class="buybtn">Vite, J‘en Profite</a>
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
  <!-- footerbuy start -->
  <div class="footerbuy">
    <div class="wrapper">
      <h2>N'hésitez pas et mettez à jour votre ordinateur MAINTENANT</h2>
      <h3>Dépêchez-vous,
        <span class="reduce reduce2">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> offres restantes
        </h3>
      <div class="clearfix">
        <div class="imgbox fl">
          <img class="on" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt="" />
          <img class="db" src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
          <span class="discount on">-83<small>%</small></span>
        </div>
        <ul class="changelist fl">
          <li class="one on" data-num="1"><b>1 AN / 3 PC+ Cadeaux</b></li>
          <li class="two" data-num="2"><b>1 AN / 3 PC</b></li>
          <li class="three" data-num="0"><b>1 AN / 1 PC</b></li>
        </ul>
        <div class="price fr">
          <p><strong>24,99€</strong> <del>174,82€</del></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-db8iuisupf2499&ref=fr_db8isupfiu2499indexpurchase2012<?= $refStr; ?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2012b-fr')   ">
               Vite, J‘en Profite
          </a>
        </div>
      </div>
     
    </div>
  </div>
  <div class="footer">
    <div class="wrapper">
      <dl class="note">
          <dt>Note:</dt>
          <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
          <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
        </dl>
        <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- footerbuy end -->

  <script>var aff="<?php echo $_GET['aff']?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>