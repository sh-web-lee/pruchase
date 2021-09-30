<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_wr')
)){
  $refstr='-'.$_GET['st'];
}else{
  $refstr='';
}

if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refstr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Jusqu'à -85% sur Advanced SystemCare PRO – Offre Spéciale - IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,900i'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
      </a>
      <div class="title">
        <h1>OFFRE SPÉCIALE</h1>
        <p>pour célébrer le 13ème anniversaire d'IObit</p>
      </div>
      <div class="clearfix">
        <div class="offer left">
          <img src="<?php echo getStaticUrl('images/pc-box.png')?>" alt=""/>
          <div class="price">
            <p><strong class="discount">19</strong> <span><b>€99</b> <del class="original">49,99€</del></span></p>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=fr-asc123pc1999&ref=fr_asc123pc1999purchase1903<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1903b-fr')">
              VITE, J’EN PROFITE
            </a>
          </div>
        </div>
        <div class="offer right">
          <ul id="banCountdown" class="countdown">
            <li><strong>24</strong> H:</li>
            <li><strong>34</strong> M:</li>
            <li><strong>25</strong> :</li>
            <li><strong>345</strong> <sup>*</sup></li>
          </ul>
          <img src="<?php echo getStaticUrl('images/pcs-box.png')?>" alt=""/>
          <div class="price">
            <p><strong class="discount">17</strong> <span><b>€99</b> <del class="original">119,97€</del></span></p>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=fr-asc123pcsdpf&ref=fr_asc123pcpfsdpurchase1903<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1903-fr')">
              VITE, J’EN PROFITE
            </a>
          </div>
          <p class="people"><i class="all-icons"></i> <b>7,390,557</b> personnes l’ont acheté</p>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payments start -->
  <div class="payments">
    <div class="wrapper"><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></div>
  </div>
  <!-- payments end -->

  <!-- feature start -->
  <div class="feature clearfix">
    <div class="wrapper">
      <h2>La solution la plus simple et la plus efficace pour rendre votre PC rapide</h2>
      <div class="showcase">
        <div class="inner">
          <ul class="screenshot">
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-00.png')?>" alt="">
            </li>
            <li>              
              <img src="<?php echo getStaticUrl('images/screenshot-01.png')?>" alt="">
            </li>
            <li>              
              <img src="<?php echo getStaticUrl('images/screenshot-02.png')?>" alt="">
            </li>
            <li>              
              <img src="<?php echo getStaticUrl('images/screenshot-03.png')?>" alt="">
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/screenshot-04.png')?>" alt="">
            </li>
          </ul>         
        </div>  
        <ul class="zoom">
          <li class="fun1">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt="">
            </div>
          </li>
          <li class="fun2">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt="">
            </div>
          </li>
          <li class="fun3">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt="">
            </div>
          </li>
          <li class="fun4">
            <div class="container">
              <img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt="">
            </div>
          </li>
          <li></li>
        </ul>     
      </div>
      <div class="detail-list">
        <dl>
          <dt><i class="benfits03"></i></dt>
          <dd>
            <h3>300%* plus rapide</h3>
            <p>Optimisation de la rapidité Internet jusqu'à 300% avec Accélérateur Internet</p>
          </dd>
        </dl>
        <dl class="active two">
          <dt><i class="benfits02"></i></dt>
          <dd>
            <h3>Nettoyage automatique du registre</h3>
            <p>Un registre propre améliore le temps du démarrage et de la fermeture de Windows, il permet également de charger les programmes plus rapidement.</p>
          </dd>
        </dl>
        <dl class="two">
          <dt><i class="benfits04"></i></dt>
          <dd>
            <h3>Supprimer les malwares en temps réel</h3>
            <p>Mettre votre PC à l’abri de malware et des menaces de sécurité diverses pour vous proposer la sécurité informatique.</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits01"></i></dt>
          <dd>
            <h3>Nettoyage d'empreintes digitales numérique</h3>
            <p>Empêchez les trackers de rechercher ce que vous lisez, visualisez et achetez en déguisant votre empreinte numérique</p>
          </dd>
        </dl>
        <dl>
          <dt><i class="benfits05"></i></dt>
          <dd>
            <h3>Garder vos logiciels à jour automatiquement</h3>
            <p>Vous aider à mettre à jour vos programmes importants en un seul clic</p>
          </dd>
        </dl>
        <a class="textlink" href="Javascript:void(0);">En savoir plus sur PRO version>>></a>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- donation start -->
  <div class="donation">
    <h2>Profitez d’un PC plus rapide, plus propre et plus sûr avec ASC PRO et les outils PRO ci-dessous </h2>
    <div class="wrapper clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""/></dt>
        <dd>
          <h3>Protected Folder <small>(1 an / 1 PC)</small></h3>
          <p><strong>0€</strong> <del>39,99€</del></p>
          <ul>
            <li>
              <i class="all-icons">√</i>
              <span>Vous prémunir contre la perte, le vol et la fuite de données.</span>
            </li>
            <li>
              <i class="all-icons">√</i>
              <span>Un mot de passe empêche quiconque de les ouvrir</span>
            </li>
          </ul>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt=""/></dt>
        <dd>
          <h3>Smart Defrag 6 PRO <small>(1 an / 1 PC)</small></h3>
          <p><strong>0€</strong> <del>29,99€</del></p>
          <ul>
            <li>
              <i class="all-icons">√</i>
              <span>La performance maximale du disque </span>
            </li>
            <li>
              <i class="all-icons">√</i>
              <span>Un accès plus rapide aux fichiers</span>
            </li>
          </ul>
        </dd>
      </dl>
    </div>
    <div class="buybox wrapper">
      <h2>Vite, les cadeaux sont disponibles à durée limitée</h2>
      <ul id="giftCountdown" class="countdown">
        <li><strong>24</strong> H:</li>
        <li><strong>34</strong> M:</li>
        <li><strong>25</strong> :</li>
        <li><strong>345</strong> <sup>*</sup></li>
      </ul>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=fr-asc123pcsdpf&ref=fr_asc123pcpfsdpurchase1903<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1903-fr')">
        VITE, J’EN PROFITE
      </a>
    </div>
  </div>
  <!-- donation end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Les experts l’ont approuvé, les utilisateurs l’adorent!</h2>
      <h3>ASC - Le choix de plus de <b>250 millions</b> d'utilisateurs dans le monde</h3>
    </div>
    <div class="map">
      <span class="recover recover01 big"></span>
      <span class="recover recover02 middle"></span>
      <span class="recover recover03 smail"></span>
      <span class="recover recover04 big"></span>
      <span class="recover recover05 middle"></span>
      <span class="recover recover06 smail"></span>
      <span class="recover recover07 big"></span>
      <span class="recover recover08 middle"></span>
      <span class="recover recover09 smail"></span>
      <span class="recover recover10 smail"></span>
      <span class="recover recover11 smail"></span>
      <span class="recover recover12 smail"></span>
      <span class="recover recover13 middle"></span>
      <span class="recover recover14 middle"></span>
      <span class="recover recover15 smail"></span>
      <span class="recover recover16 smail"></span>
      <span class="recover recover17 big"></span>
      <span class="recover recover18 smail"></span>
      <span class="recover recover19 smail"></span>
      <span class="recover recover20 big"></span>
      <span class="recover recover21 middle"></span>
      <span class="recover recover22 smail"></span>
      <dl class="chip">
        <dt><img src="<?php echo getStaticUrl('images/markus-thomas-geldermann.png')?>"></dt>
        <dd>
          C'est le meilleur programme qui nettoie et accélère mon PC <span>correctement et en toute sécurité.</span>
        </dd>
      </dl>
      <dl class="html-it">
        <dt><img src="<?php echo getStaticUrl('images/01net.png')?>"></dt>
        <dd>
          Advanced SystemCare Pro intègre des outils indispensables pour surveiller la santé <span>de votre système en vérifiant l'état des disques durs, en bouchant les failles de</span> sécurité et pour protéger votre vie privée en effaçant les fichiers sensibles ainsi <span>qu'une fonction Turbo Boost pour nettoyer votre PC en profondeur.</span>
        </dd>
      </dl>
      <dl class="br">
        <dt><img src="<?php echo getStaticUrl('images/baixaki.png')?>"></dt>
        <dd>
          Advanced SystemCare a une efficacité exceptionnelle. Il est capable de détecter et de résoudre des <span>problèmes qui sont vraiment complexes, difficiles à imaginer.</span>
        </dd>
      </dl>
      <dl class="bob-bassett">
        <dd>
          Mon choix est sans aucun doute <span>Advanced SystemCare Pro.</span></span>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>"></dt>
      </dl>
      <dl class="peter-stoffers">
        <dd>
          Advanced SystemCare vise à remédier à tout <span>problème affectant votre ordinateur!</span>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>"></dt>
      </dl>
    </div>
  </div>
  <!-- review end -->

  <!-- comparsion start -->
  <div class="comparsion wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
        <th colspan="2" class="text">La comparaison des produits:</th>
        <th class="space"></th>
        <th class="itemb">
          Advanced SystemCare <strong>Free</strong>
        </th>
        <th class="space"></th>
        <th class="itema">
          Advanced SystemCare <strong>PRO</strong>
        </th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_01.png')?>" alt=""/></td>
        <td class="virtue">Nettoyage, réparation et optimisation du système de base </td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">☆</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_02.png')?>" alt=""/></td>
        <td class="virtue"><span>Réparer les failles de sécurité pour empêcher le piratage en un clic</span> <sup class="nou">nouveau </sup></td>
        <td class="space"></td>
        <td class="itemb gray"><i class="all-icons">☆</i></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_03.png')?>" alt=""/></td>
        <td class="virtue"><span>Mettez vos données personnelles à l'abris des programmes frauduleux </span> <sup class="nou">nouveau </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_04.png')?>" alt=""/></td>
        <td class="virtue"><span>Personne ne peut voler votre empreinte digitale numérique pour vous suivre en ligne</span> <sup class="nou">nouveau </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_05.png')?>" alt=""/></td>
        <td class="virtue"><span>Optimisation de la vitesse Internet jusqu'à 300% avec Internet Booster </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_06.png')?>" alt=""/></td>
        <td class="virtue"><span>Le démarrage jusqu'à 200% plus rapide de votre PC </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_07.png')?>" alt=""/></td>
        <td class="virtue"><span>Nettoyage des registres empilés pour un système stable </span> <sup class="ame">amélioré </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_08.png')?>" alt=""/></td>
        <td class="virtue">Nouveau moteur d'optimisation du disque pour maximiser les performances PC <sup class="nou">nouveau </sup></td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_09.png')?>" alt=""/></td>
        <td class="virtue">Protection en temps réel contre les menaces de sécurité</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_10.png')?>" alt=""/></td>
        <td class="virtue">Déctection complète contre les infections les plus approfondies</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_11.png')?>" alt=""/></td>
        <td class="virtue">Supprimer Auto les publicités &amp; la vie privée en ligne pour une navigation plus sûre</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_12.png')?>" alt=""/></td>
        <td class="virtue"><span>Nettoyage Auto de la RAM pour un système plus fluide</span</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_13.png')?>" alt=""/></td>
        <td class="virtue">Mise à jour automatique vers la dernière version</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/cop_asc_i_14.png')?>" alt=""/></td>
        <td class="virtue">Soutien technique gratuit de 24/7 à la demande</td>
        <td class="space"></td>
        <td class="itemb"></td>
        <td class="space"></td>
        <td class="itema"><i class="all-icons red">★</i></td>
      </tr>
      </tbody>
    </table>
  </div>
  <!-- comparsion end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox fl">
        <img class="active" src="<?php echo getStaticUrl('images/pcs-box.png')?>" alt=""/>
        <img class="pc" src="<?php echo getStaticUrl('images/pc-box.png')?>" alt=""/>
      </div>
      <ul class="fl">
        <li class="active" data-num="1">
          <i class="all-icons"></i>
          <b>1 an / 3 PCs + Cadeaux offerts</b>
          <strong>-85%</strong>
        </li>
        <li class="pc" data-num="0">
          <i class="all-icons"></i>
          <b>1 an / 3 PCs</b>
          <strong>-60%</strong>
        </li>
      </ul>
      <div class="price fr">
        <p><strong class="discount">17</strong> <span><b>€99</b> <del class="original">119,97€</del></span></p>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=fr-asc123pcsdpf&ref=fr_asc123pcpfsdpurchase1903<?php echo $refstr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1903-fr')">
          VITE, J’EN PROFITE
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- bottom start -->
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
        <dd>
          <h3>Satisfait ou Remboursé</h3>
          <p>Garantie satisfait ou remboursé <br>pendant 60 jours après la date d’achat.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
        <dd>
          <h3>Paiement 100% Sécurisé</h3>
          <p>IObit vous propose huit modes de <br>paiement sécurisé pour régler vos achats.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt=""/></dt>
        <dd>
          <h3>Obtenir la licence</h3>
          <p>Vous recevrez le code de licence dans les <br>minutes après l’achat.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dt>
        <dd>
          <h3>Service Client à votre écoute</h3>
          <p>Notre Support Technique gratuit est à <br>votre disposition 24 heures sur 24, 7 <br>jours sur 7.</p>
        </dd>
      </dl>
    </div>

    <dl class="annotation">
      <dt>Note:</dt>
      <dd>* Les données peuvent varier en fonction de différents systèmes ou ordinateurs.</dd>
      <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
    </dl>

    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
  </div>
  <!-- bottom end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>