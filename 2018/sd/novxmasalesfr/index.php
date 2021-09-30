<?php
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

$packsNum=empty($_COOKIE['pc'])?120:$_COOKIE['pc'];
if ($_GET['action'] == 'getPacks') {
  $randNum=rand(1,100);
  if($randNum%4==0){
    $packsNum-=2;
  }else
    $packsNum--;
  if($packsNum<=0){
    $packsNum=120;
  }
  setcookie('pc',$packsNum,time()+3600*720);
  echo $packsNum;
  exit ;
}
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
  $refStr='-'.$_GET['ref'];
}else{
  $refStr='';
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Jusqu'à -70% sur Smart Defrag PRO et maximisez les performances de votre disque dur !</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,600,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
    function decreasingPacks() {
    $.ajax({
      type: "GET",
        url: "index.php",
        data: "action=getPacks&r=" + Math.random(),
        success: function(packs) {
          $('.packsNum').html(packs);
          setTimeout('decreasingPacks()', 75000);
        }
      });
    }
    setTimeout('decreasingPacks()', 75000);
  </script>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com" class="logo" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>Vente Flash pour le Nouvel An 2019</h1>
      <h4>Jusqu'à <span>-70%</span> sur Smart Defrag PRO et profitez des cadeaux exclusifs pour votre famille !</h4>
      <div class="countdown"><strong>15</strong>H : <strong>23</strong>M : <strong>56</strong>S : <strong class="last">123</strong> *</div>
      <div class="offer clearfix">
        <div class="left fl"><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag PRO"/></div>
        <div class="right fr">
          <div class="top clearfix">
            <div class="fl">
              <h2>Smart Defrag 6 PRO </h2>
              <span>(1 An / 1 PC)</span>
            </div>
            <div class="fr"><strong>19,99€</strong> <del>29,99€</del></div>
          </div>
          <ul>
            <li>
              <i class="all-icons"></i><b>SD 6 PRO 2 PCs Supplémentaires</b> <span><em>Gratuit</em> <del>19,99€</del></span>
            </li>
            <li>
              <i class="all-icons"></i><b>AMC Security PRO</b> <span><em>Gratuit</em> <del>19,99€</del></span>
            </li>
          </ul>
          <div class="price">
            <p><strong>19,99€</strong> <del>69,97€</del></p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-sd6amc&ref=fr_sd6amcpurchase1811<?php echo $refStr;?>&refs=fr_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1811-fr')">
              <i class="all-icons"></i>
              J’EN PROFITE
            </a>
            <p class="packs"><i class="all-icons"></i> Il n’en reste plus que <span class="packsNum"><?php echo $packsNum; ?></span> paquets</p>
          </div>
        </div>
      </div>
      <div class="payments">
        <img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature bg">
    <div class="wrapper">
      <h2>Maximise la performance de disque dur & Accélère votre PC avec SD 6 PRO</h2>
      <div class="screen">
        <img src="<?php echo getStaticUrl('images/screen.png')?>" alt="Smart Defrag 6 PRO"/>
      </div>
      <div class="clearfix">
        <div class="left fl">
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Nouveau Moteur Ultra Rapide</h3>
              <p>Défragmente les fichiers plus efficacement et complètement en moins de temps</p>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Défragmentation Auto</h3>
              <p>
                Défragmente automatiquement et intelligemment les fichiers et disques durs séléctionnés sans aucune interruption
              </p>
            </dd>
          </dl>
        </div>
        <div class="right fr">
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Jusqu’à 200% Plus Rapide *</h3>
              <p>
                Accélère la vitesse d’accès aux fichiers & de lancement du jeu avec Défragmenter Fichiers Volumineux
              </p>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Démarrage de PC Plus Rapide</h3>
              <p>Démarrage de PC et fonctionnement du système plus rapide avec Défragmenter au Démarrage</p>
              <a class="more" href="javascript: void(0);">En savoir plus sur l’édition PRO></a>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- donation start -->
  <div class="donation bg">
    <h2>Les cadeaux exclusifs sont disponibles à quantité limitée !</h2>
    <div class="wrapper">
      <div class="clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/sd-gift-box.png')?>" alt="Smart Defrag PRO"/></dt>
          <dd>
            <h3>Smart Defrag PRO</h3>
            <span><strong>0€</strong> <del>19,99€</del> 1 An /2 PC</span>
            <p>Apporter les performances maximales <br>à votre disque dur !</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="AMC Security PRO"/></dt>
          <dd>
            <h3>AMC Security PRO*</h3>
            <span><strong>0€</strong> <del>19,99€</del> 1 An / Plusieurs appareils</span>
            <p>200% accélérer et protéger complètement votre <br>Android contre toute menace !</p>
          </dd>
        </dl>
      </div>
      <div class="price">
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-sd6amc&ref=fr_sd6amcpurchase1811<?php echo $refStr;?>&refs=fr_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1811-fr')">
          <i class="all-icons"></i>
          VITE, J’EN PROFITE
        </a>
        <p class="packs">Quantité limitée, plus que <span class="packsNum"><?php echo $packsNum; ?></span> disponibles!</p>
      </div>
    </div>
  </div>
  <!-- donation end -->

  <div class="wrapper">
    <!-- awards start -->
    <div class="awards">
      <h2>Approuvé par ces médias célèbres du monde</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->

    <!-- review start -->
    <div class="review">
      <div class="media">
        <h3>Avis des Médias</h3>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/clubic.png')?>" alt=""/></dt>
          <dd><strong>"Simple d'utilisation et plus complet que l'outil proposé par Windows."</strong></dd>
          <dd>
            "Simple d'utilisation et plus complet que l'outil proposé par Windows, Smart Defrag est un bon logiciel qui est capable de défragmenter vos disques mais aussi de les optimiser. La planification ainsi que l'analyse avancée sont des atouts de taille. Un outil à recommander!"
            <span>- clubic.com</span>
          </dd>
        </dl>
      </div>
      <div class="user" id="user">
        <div class="content">
          <h3>Commentaire des Utilisateurs</h3>
          <dl class="show">
            <dd><h4>"Smart Defrag, un défragmenteur de disque parfait."</h4></dd>
            <dd>"Smart Defrag est un logiciel parfait destiné à défragmenter les disques qui peut travailler en arrière-plan pendant une période d’inactivité. C’est qu’il ne risque pas de vous déranger pendant le processus de défragmentation. Les disques sont défragmentés en permanence permettant de proposer un accès rapide et moins d’usure. Smart Defrag, c’est le meilleur défragmenteur de disque qu’un utilisateur débutant peut acheter et je vais le recommander à ma famille et mes amis!"</dd>
          </dl>
          <dl>
            <dd><h4>"Facile à utiliser, il est pratique pour votre disque dur ou SSD."</h4></dd>
            <dd>"Je fais fonctionner RAID 0 SSDs et RAID 0 HDDs, et j’utilise Smart Defrag Pro afin d’analyser, défragmenter mes disques et de les rendre fonctionner parfaitement. Il est fiable, facile à installer et à utiliser comme tous les logiciels d’IObit. Il suffit de le configurer et le laisser. Smart Defrag a une petite empreinte de mémoire afin de ne pas ralentir votre système. Fortement recommande!"</dd>
          </dl>
          <dl>
            <dd><h4>"Mon bureau et mon ordinateur portable marchent plus rapidement et libèrent plus d’espaces depuis mon utilisation de ce logiciel excellent."</h4></dd>
            <dd>"J’utilise Smart Defrag depuis aussi longtemps. Mon bureau et mon ordinateur portable marchent plus rapidement et libèrent plus d’espaces depuis mon utilisation de ce logiciel excellent. Vous disposez d’un outil complet pour vous proposer un PC rapide et sécurisé si vous avez également installé l’Advanced SystemCare Ultimate. Vous pourrez garder votre système en bon état même si vous n’êtes pas expert dans ce domaine!"</dd>
          </dl>
        </div>
        <ul class="users">
          <li class="active"><img src="<?php echo $pResUrl; ?>images/amnon.jpg" alt="">Amnon<br>2014</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">Edward Lee Ah Yen<br>2014</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/hans.jpg" alt="">Hans<br>2014</li>
        </ul>
      </div>
    </div>
    <!-- review end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Découvrez plus d’avantages de Smart Defrag PRO</th>
            <td class="space"></td>
            <th class="itema">Smart Defrag <b>FREE</b></th>
            <td class="space"></td>
            <th class="itemb">Smart Defrag <b>PRO</b></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><i class="tab-icons one">1</i></td>
            <td class="virtue">Défragmentation et Optimisation de Base de disque dur </td>
            <td class="space"></td>
            <td class="itema gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons two">2</i></td>
            <td class="virtue">La vitesse d’accès aux fichiers jusqu’à 200% plus rapide</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons fork">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons three">3</i></td>
            <td class="virtue">Démarrage de PC plus rapide grâce au Défragmenter au Démarrage</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons fork">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons four">4</i></td>
            <td class="virtue">Défragmenter Automatiquement et Intelligemment les fichiers fragmentés </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons fork">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons five">5</i></td>
            <td class="virtue">Personnaliser le mode & disques durs/fichiers que vous voulez défragmenter</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons fork">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons six">6</i></td>
            <td class="virtue">DMA appliqué pour Transfert de données plus rapide et stable</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons fork">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons seven">7</i></td>
            <td class="virtue">Aucune interruption au travail ou au jeu avec Mode Silencieux</td>
            <td class="space"></td>
            <td class="itema gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons eight">8</i></td>
            <td class="virtue">Maximise l’expérience du jeu avec Défragmenteur de Jeux</td>
            <td class="space"></td>
            <td class="itema gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons nine">9</i></td>
            <td class="virtue">Prend en charge la tâche programmée durant une période d’inactivité</td>
            <td class="space"></td>
            <td class="itema gray"><i class="all-icons">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons ten">10</i></td>
            <td class="virtue">Mise à jour automatique vers la dernière version</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons fork">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
          <tr>
            <td class="icons"><i class="tab-icons eleven">11</i></td>
            <td class="virtue">Soutien technique gratuit de 24/7 à la demande</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons fork">×</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons red">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- comparison end -->
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/sd-box-bot.png')?>" alt="Smart Defrag 6 PRO"/>
      </div>
      <div class="price fr">
        <h2>Le prix le plus bas jamais proposé par IObit, dépêchez-vous !</h2>
        <p><strong>19,99€</strong> <del>69,97€</del></p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-sd6amc&ref=fr_sd6amcpurchase1811<?php echo $refStr;?>&refs=fr_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1811-fr')">
          <i class="all-icons"></i>
          VITE, J’EN PROFITE
        </a>
        <p class="people"><span class="buyNum">3,006,553</span> personnes l'ont acheté!</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h3>Satisfait ou Remboursé</h3>
          <p>Garantie satisfait ou remboursé pendant <br>60 jours après la date d’achat.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
        <dd>
          <h3>Paiement 100% Sécurisé</h3>
          <p>IObit vous propose huit modes de paiement <br>sécurisés pour régler vos achats.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
        <dd>
          <h3>Obtenir la licence</h3>
          <p>Vous recevrez le code de licence dans les <br>minutes après l’achat.</p>
        </dd>
      </dl>
    </div>
    <!-- service end -->

    <!-- note start -->
    <dl class="note">
      <dt>Notification:</dt>
      <dd>
        *.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion
      </dd>
      <dd>*.Les données peuvent varier en fonction de différents systèmes ou ordinateurs</dd>
      <dd>*.Licence gratuite d'AMC Security PRO, la version complète comprend des annonces intégrées.</dd>
    </dl>
    <!-- note end -->

    <!-- copyright start -->
    <div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
    <!-- copyright end -->
  </div>

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>