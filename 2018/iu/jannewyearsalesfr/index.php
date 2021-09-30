<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='itaugiu'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>19){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=19;
    }
  }else{
    $packsNum=137;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
  include $pRootUrl.'include/common.inc.php';
  $reduceNum=94689561;
  $reTime=15;
  $buyNum = number_format(ceil(microtimeFloat()*1000/(1000*$reTime)) - $reduceNum);
$refStr='';
if(in_array($_GET['pop'],array('x_iu'))){
  $refStr='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Économiser jusqu'à -84% sur IObit Uninstaller PRO et obtenez vos cadeaux exclusifs pour le Nouvel An 2018 !</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Lato:400,700,700i'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function getBuyNum(){
      $.ajax({
        type: "GET",
        url: "<?php echo $pRootUrl;?>callback.php",
        data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
        success: function(packs){
          $('.buyNum').html(packs);
          setTimeout('getBuyNum()', 15000);
        }
      });
    }
    setTimeout('getBuyNum()', 15000);
  </script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>SOLDES D'HIVER</h1>
        <p>Jusqu’à <b>-84%</b> sur IObit Uninstaller 7 et obtenez  vos cadeaux exclusifs pour Noël</p>
      </div>
      <!-- time -->
      <ul id="countdown" class="countdown">
        <li class="first">Se termine dans <strong>00</strong> heures:  </li>
        <li><strong>00</strong> minutes: </li>
        <li><strong>00</strong> secondes</li>
      </ul>
      <div class="panel clearfix">
        <div class="fl left">
          <img class="iubox" src="<?php echo getStaticUrl('images/iubox.png')?>" alt="" />
          <div class="seven"></div>
        </div>
        <div class="offer fl">
          <h2>IObit Uninstaller 7 PRO</h2>
          <span class="name">1 An / 3 PCs</span>
          <p class="gift"><i class="all-icons"></i> Les cadeaux exclusifs valent <b>69,98€</b></p>
          <strong>15,<small>99€</small></strong> <del>99,97€</del>
          <a class="buybtn" 
             href="http://www.iobit.com/buy.php?product=fr-iu73pcsdpf1599&ref=fr_iu7pcsdpf1599purchase1801<?php echo $refStr;?>&aff=&refs=fr_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1801-fr')">
            <div class="solid-layer"></div>
            <div class="border-layer"></div>
            <div class="text-layer">VITE, J’EN PROFITE</div>
          </a>
          <p class="people"><i class="all-icons"></i> <span class="buyNum"><?php echo $buyNum;?></span> personnes l’ont acheté !</p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- patment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt="" /></div>
  <!-- patment end -->

  <!-- intro start -->
  <div class="intro wrapper">
    <h2>Profitez d'une désinstallation puissante pour une navigation plus rapide et plus sécurisée !</h2>
    <p>1 an d’abonnement pour 3 PC</p>
    <div class="introimg">
      <div class="imglist">
        <ul>
          <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot02.png')?>" alt=""></li>
          <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot03.png')?>" alt=""></li>
          <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot01.png')?>" alt=""></li>
        </ul>
      </div>
      <a href="javascript:;" class="prev btn"><</a>
      <a href="javascript:;" class="next btn">></a>
    </div>
    <div class="feature clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_01.png')?>" alt=""></dt>
        <dd>
          <h3><b>NOUVEAU !</b> Détecter et désinstaller les bundlewares</h3>
          <p>Détecter et désinstaller les bundlewares comme les logiciels publicitaires, les plug-ins de navigateur et d'autres logiciels tiers qui peuvent faire partie du processus d'installation.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_02.png')?>" alt=""></dt>
        <dd>
          <h3><b>AMELIORE !</b> Navigation sans publicité</h3>
          <p>Désinstaller puissamment les plug-ins malveillants et publicitaires pour assurer une expérience de navigation sécurisée et propre.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_03.png')?>" alt=""></dt>
        <dd>
          <h3><b>AMELIORE !</b> Nettoyage automatique</h3>
          <p>Détecter et nettoyer automatiquement les restes de programmes désinstallés, y compris ceux supprimés par d'autres désinstallateurs.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_04.png')?>" alt=""></dt>
        <dd>
          <h3><b>NOUVEAU !</b> Mise à jour de logiciel </h3>
          <p>En un clic, mettre à niveau votre logiciel important sur votre PC sans intervention de l'utilisateur.</p>
        </dd>
      </dl>
    </div>
    <a href="javascript: void(0);" class="comparebtn">En savoir plus sur version PRO>></a>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation">
    <div class="wrapper">
      <h2>Les cadeaux exclusifs seulement pour les utilisateurs VIP</h2>
      <div class="cont clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/gift-pf.png')?>" alt="" /></dt>
          <dd>
            <h3>Protected Folder <strong>0€ </strong> <del>39,99€</del></h3>
            <ul>
              <li><i class="all-icons"></i>Il fait office de coffer-fort pour vos fichiers et dossiers </li>
              <li><i class="all-icons"></i>Un mot de passe empêche quiconque de les ouvrir</li>
            </ul>
          </dd>
        </dl>
        <dl class="sd">
          <dt><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="" /></dt>
          <dd>
            <h3>Smart Defrag PRO <strong>0€ </strong> <del>29,99€</del></h3>
            <ul>
              <li><i class="all-icons"></i>Accélère la vitesse d'accès aux fichiers</li>
              <li><i class="all-icons"></i>Maximise les performances de votre disque dur</li>
            </ul>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recommandé par ces médias </h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">  
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/fernando.png')?>" alt="Fernando Lourenço Gomes"></dt>
          <dd>
            <h2>Avis d’utilisateur</h2>
            <cite>Fernando Lourenço Gomes</cite>
            <h4>
            "IObit Uninstaller, un outil pratique et efficace destiné à désinstaller des programmes, des barres d’outils et plug-ins."
            </h4>
            <p>
              "Il est très utile pour moi parce que cet outil parfait me permet de désinstaller les programmes et applications indésirables, et de nettoyer les restes dans le registre Windows ainsi que l’ensemble des fichiers et dossiers associés au programmes. Bravo jamais je n’ai pu avoir aussis efficace, je le recommande vivement!"
            </p>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc-magazine.png')?>" alt="PC.MAGAZINE"></dt>
          <dd>
            <h2>Avis des médias</h2>
            <cite>PC.MAGAZINE</cite>
            <h4>
            "Si vous avez besoin d’un programme vous permettant de désinstaller complètement et proprement des applications, séléctionnez IObit Uninstaller. "
            </h4>
            <p>
              "Cet utilitaire, compatible parfaitement avec Win 10, est mesure de désinstaller des applications en toute simplicité, y compris des fichiers restants dans le registre Windows lors que vous supprimez des logiciels en utilisant le désinsatalleur intégré sous Windows, ainsi que les barres d’outils et plug-ins du navigateur agaçants. En un mot, si vous utilisez un PC sous Windows, je vous recommande IObit Uninstaller."
            </p>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
          <dd>
            <h2>Avis des médias</h2>
            <cite>MakeUseOf</cite>
            <h4>
              "Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot d’applicationssur PC."
            </h4>
            <p>
              "IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Il proposera aux utilisateurs une fonctionnalité "Analyse Approfondie" pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance."
            </p>
          </dd>
        </dl>
      </div>               
    </div>
  </div>
  <!-- review end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">Savoir ce que PRO édition peut faire pour vous?</th>
          <th class="itemb">IObit Uninstaller 7 FREE</th>
          <th class="itema">IObit Uninstaller 7 PRO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt="" /></td>
          <td class="virtue">Désinstaller complètement et rapidement les programmes indésirables <span>AMÉLIORÉ</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_02.png')?>" alt="" /></td>
          <td class="virtue">Supprimer plug-ins &amp; extensions sur Edge, Chrome, IE, Firefox, etc <span class="nuo">NOUVEAU</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_03.png')?>" alt="" /></td>
          <td class="virtue">Enlever facilement les mises à jour problématiques de Windows <span class="red">AMÉLIORÉ</span></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt="" /></td>
          <td class="virtue">Détecter et désinstaller les bundlewares et les plug-ins regroupés <span class="nuo">NOUVEAU</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt="" /></td>
          <td class="virtue">Mettre à jour tous les programmes importants en un seul clic <span class="nuo">NOUVEAU</span></td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt="" /></td>
          <td class="virtue">Désinstaller plug-ins malveillants pour un navigateur plus sécurisé <span class="nuo">NOUVEAU</span> </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt="" /></td>
          <td class="virtue">Expérience en ligne plus rapide et plus sûre en activant Déinstallation Adware<span class="nuo blue">NOUVEAU</span> </td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt="" /></td>
          <td class="virtue">Nettoyer automatiquement les restes que d’autres utilitaires ont échoué à supprimer</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt="" /></td>
          <td class="virtue">Mise à jour Auto vers la Dernière Version</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt="" /></td>
          <td class="virtue">Soutien Technique Gratuit de 24/7 à la Demande</td>
          <td class="itemb"><i class="all-icons circle">√</i></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
      <tfoot>
        <tr>
          <th colspan="2"></th>
          <th class="itemb">IObit Uninstaller 7 FREE<p> Votre édition actuelle  </p></th>
          <th class="itema">
            IObit Uninstaller 7 PRO
            <p><strong>15,99€ </strong> <del>99,97€</del></p>
            <a class="buybtn" 
               href="http://www.iobit.com/buy.php?product=fr-iu73pcsdpf1599&ref=fr_iu7pcsdpf1599purchase1801<?php echo $refStr;?>&aff=&refs=fr_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1801-fr')">
              <div class="solid-layer"></div>
              <div class="border-layer"></div>
              <div class="text-layer">VITE, J’EN PROFITE</div>
            </a>
          </th>
        </tr>
      </tfoot>
    </table>
  </div>
  <!-- comparison end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h4>Satisfait ou Remboursé</h4></dd>
          <dd>Garantie satisfait ou remboursé <span>pendant 60 jours après la date d’achat.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd><h4>Paiement 100% Sécurisé</h4></dd>
          <dd>IObit vous propose huit modes de paiement sécurisé pour régler vos achats.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
          <dd><h4>Obtenir la licence</h4></dd>
          <dd>Vous recevrez le code de licence dans <span>les minutes après l’achat.</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/24hours.png')?>" alt="" /></dt>
          <dd><h4>Service Client à votre écoute</h4></dd>
          <dd>Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.</dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Notification</dt>
        <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
      <!-- footer end -->
    </div>
  </div>

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix"> 
      <div class="left fl">
        <h2>SOLDES D'HIVER !</h2>
        <h3>Seulement <b>0,02€</b> par jour, ne vous en manquez pas !</h3>
      </div>
      <div class="offer fr">
        <strong>15,<small>99€</small></strong> <del>99,97€</del>
        <a class="buybtn" 
           href="http://www.iobit.com/buy.php?product=fr-iu73pcsdpf1599&ref=fr_iu7pcsdpf1599purchase1801<?php echo $refStr;?>&aff=&refs=fr_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1801-fr')">
          <div class="solid-layer"></div>
          <div class="border-layer"></div>
          <div class="text-layer">VITE, J’EN PROFITE</div>
        </a>
      </div>
    </div>
    <div class="close"></div>
    <div class="snow"></div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>