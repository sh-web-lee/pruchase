<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Jusqu'à -87% sur IObit Malware Fighter PRO et obtenez les cadeaux exclusifs - Vente Flash !</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700,900'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/fr/index.php" target="_blank" class="logo">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h1>SOLDES D'ÉTÉ</h1>
        <h3>Premier Arrivé, Premier Servi !</h3>
      </div>
      <div class="clearfix">
        <div class="box small">
          <div class="imgbox one"><b>-50%</b></div>
          <div class="price">
            <p><strong><big class="discount">19</big>,99€</strong> <del class="original">39,95€</del></p>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=fr-imf71pc1799&ref=fr_imf71pcpurchase1901<?php echo $refStr;?>&aff=&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1901b-fr')">
              VITE, J'EN PROFITE
            </a>
          </div>
        </div>
        <div class="box big">
          <h2 id="bandown" class="countdown"><b>10</b> H : <b>59</b> M : <b>46</b> S <b>81</b> MS *</h2>
          <div class="imgbox gift"><b>-87%</b></div>
          <div class="price">
            <p><strong><big class="discount">21</big>,99€</strong> <del class="original">169,96€</del></p>
            <a class="buybtn orange" 
               href="https://www.iobit.com/buy.php?product=fr-imf7amcpfsd2199&ref=fr_imf7amcpfsdpurchase1901<?php echo $refStr;?>&aff=&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1901a-fr')">
              <i class="all-icons"></i>
              VITE, J'EN PROFITE
            </a>
          </div>
        </div>
        <div class="box small right">
          <div class="imgbox three"><b>-70%</b></div>
          <div class="price">
            <p><strong><big class="discount">21</big>,99€</strong> <del class="original">79,99€</del></p>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=fr-imf73pc2199&ref=fr_imf73pcpurchase1901<?php echo $refStr;?>&aff=&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1901c-fr')">
              VITE, J'EN PROFITE
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner  end -->

  <!-- payment start -->
  <div class="payment">
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" />
  </div>
  <!-- payment end -->

  <!-- conationer start -->
  <!-- intro start -->
  <div class="wrapper">
    <h2 class="intro-h2">Profitez de la sécurité de niveau supérieur de votre PC !</h2>
    <p class="intro-p">Bloque et élimine efficacement Malware et Ransomware</p>
  </div>
  <div class="intro wrapper">
    <ul class="cont">
      <li class="one active">
        <h5><i class="i-icons"></i>Moteur Bitdefender leader mondial</h5>
        <p>Plus de 200 millions de menaces telles que virus, logiciels malveillants, sypwares, cryptojacking, peuvent être facilement éliminées.</p>
      </li>
      <li class="two">
        <h5><i class="i-icons"></i>Données personnelles plus sécurisées</h5>
        <p>Protège vos données sensibles avec un mot de passe et personne ne peut y accéder sans votre permission.</p>
      </li>
      <li class="three">
        <h5><i class="i-icons"></i>Aucune chance pour Ransomware</h5>
        <p>Bloque proactivement les ransomwares qui tentent de pénétrer dans votre ordinateur ou chiffrer vos fichiers importants.</p>
      </li>
      <li class="four">
        <h5><i class="i-icons"></i>Une sécurité de niveau supérieur</h5>
        <p>Profitez de la protection multicouche en équipant de trois moteurs et de multiples outils de sécurité.</p>
      </li>
    </ul>
    <div class="imgcont">
      <div class="img-change">
        <img class="active" src="<?php echo getStaticUrl('images/img-list01.png')?>" alt="" />
        <img src="<?php echo getStaticUrl('images/img-list02.png')?>" alt="" />
        <img src="<?php echo getStaticUrl('images/img-list03.png')?>" alt="" />
        <img src="<?php echo getStaticUrl('images/img-list04.png')?>" alt="" />
      </div>
      <ul class="img-glass">
        <li class="active"><img src="<?php echo getStaticUrl('images/list-icon01.png')?>" alt="" /></li>
        <li class="two"><img src="<?php echo getStaticUrl('images/list-icon02.png')?>" alt="" /></li>
        <li class="three"><img src="<?php echo getStaticUrl('images/list-icon03.png')?>" alt="" /></li>
        <li class="four"><img src="<?php echo getStaticUrl('images/list-icon04.png')?>" alt="" /></li>
      </ul>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation ">
    <div class="wrapper">
      <h2>UN PAQUET CADEAU EXCLUSIF À DURÉE LIMITÉE À NE PAS RATER !</h2>
      <p id="giftdown" class="countdown">
        Se termine dans <b>00</b> H : <b>09</b> M : <b>59</b> S <b>000</b> MS
      </p>
      <div class="clearfix">
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="" />
            <p>1 An / 1 PC</p>
            <strong>0€</strong>  <del>29,99€</del>
          </dt>
          <dd>La performance maximale du disque <br> Un accès plus rapide aux fichiers</dd>
        </dl>
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="" />
            <p>1 An / 1 PC</p>
            <strong>0€</strong>  <del>39,99€</del>
          </dt>
          <dd>Vous prémunir contre la perte, le <br>  vol et la fuite de données.</dd>
        </dl>
        <dl>
          <dt>
            <img src="<?php echo getStaticUrl('images/amc-gift.png')?>" alt="" />
            <p>1 An / 1 Appareil</p>
            <strong>0€</strong>  <del>19,99€</del>
          </dt>
          <dd>Accélérer votre appareil jusqu’à <br> 200% plus rapide</dd>
        </dl>
      </div>
      <h3>IMF PRO <strong>(21,99€)</strong> + cadeaux gratuits <strong>(0€)</strong></h3>
      <a class="buybtn orange" 
         href="https://www.iobit.com/buy.php?product=fr-imf7amcpfsd2199&ref=fr_imf7amcpfsdpurchase1901<?php echo $refStr;?>&aff=&refs=fr_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1901a-fr')">
        <i class="all-icons"></i>
        VITE, J'EN PROFITE
      </a>
    </div>
  </div>
  <!-- donation end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Approuvé par ces médias célèbres du monde</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
  </div>
  <!-- awards end -->

  <!-- media-rev start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt><h3>Commentaire des Utilisateurs</h3></dt>
        <dd><h4>"Il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis."</h4></dd>
        <dd>"Je suis très satisfait de votre produit IObit Malware Fighter. J'ai eu beaucoup de problèmes d'interférences malveillantes auparavant, je n'ai pas pu regarder un film ou un concert entier que j'aime beaucoup. Grâce à votre produit, maintenant chaque opération est claire, sûre et bien protégée. Il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis."</dd>
      </dl>
      <dl class="active">
        <dt><h3>Avis des Médias</h3></dt>
        <dd><h4>" Il est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots."</h4></dd>
        <dd>" Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est donc compatible avec votre logiciel antivirus standard. IObit Malware Fighter est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots. "</dd>
      </dl>
      <dl>
        <dt><h3>Commentaire des Utilisateurs</h3></dt>
        <dd><h4>" Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide."</h4></dd>
        <dd>"Merci d'avoir fait sortir Malware Fighter, c’est une autre mise à jour majeure pour vos utilisateurs. Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide. Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter. "</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic">
          <img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir">
        </div>
        <p>Gelu Batir</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/software.png" alt="Software.Informer"></div>
        <p>Software.Informer</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy"></div>
        <p>David Cassidy</p>
      </li>
    </ul>
   </div>
  <!-- media-rev end -->

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
        <tr>
          <th class="text" colspan="2">La comparaison des produits:</th>
          <th class="space"></th>
          <th class="itemb"><span>IObit Malware Fighter </span>Free</th>
          <th class="space"></th>
          <th class="itema"><span>IObit Malware Fighter </span>PRO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
          <td class="virtue">Détecter rapidement les menaces cachant sur votre ordinateur. <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
          <td class="virtue">Scanner les fichiers téléchargés et supprimer les publicités agaçantes <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
          <td class="virtue">Bloquer les ransomwares tentant de chiffrer vos fichiers importants <sup class="red">Nouveau </sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
          <td class="virtue">Personne ne peut accéder à vos données sensibles sans votre mot de passe <sup class="red">Nouveau </sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
          <td class="virtue">Capacité complète d'anti-malware grâce au moteur Dual-Core <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <<td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
          <td class="virtue">Détecter 203 000 000+ menaces grâce aux moteurs de Bitdefender & d’IObit <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
          <td class="virtue">Protection du disque au Démarrage contre les attaques malveillantes avec MBR Guard  <sup class="red">Nouveau </sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
          <td class="virtue">Protéger votre webcam contre les accès non autorisés  <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
          <td class="virtue">Protection Complète En Temps Réel pour La Meilleure Sécurité de PC <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
          <td class="virtue">Prévenir l’Infection par Virus Porté par USB Disk </td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
          <td class="virtue">Détecter le Processus Malveillant qui Fonctionne En RAM</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
          <td class="virtue">Nettoyage Auto de la Vie Privée avec le Navigateur d’Anti-Pistage <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
          <td class="virtue">Fonctionner Intelligemment En Arrière-plan sans Interruption </td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
          <td class="virtue">Mettre à Jour Automatiquement vers La Dernière Version</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
          <td class="virtue">Soutien Technique gratuit de 24/7 à la demande</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="left fl"><div class="imgbox gift"></div></div>
      <ul class="fl">
        <li>
          <i class="all-icons"></i>
          <span>1 An / 1 PC</span>
          <em>-50%</em>
        </li>
        <li class="active">
          <i class="all-icons"></i>
          <span>1 An / 3 PC + Cadeaux offerts</span>
          <em>-87%</em>
        </li>
        <li class="three">
          <i class="all-icons"></i>
          <span>1 An / 3 PC</span>
          <em>-70%</em>
        </li>
      </ul>
      <div class="price fr">
        <p><strong><big class="discount">21</big>,99€</strong> <del class="original">169,96€</del></p>
        <a class="buybtn orange yellow" 
           href="https://www.iobit.com/buy.php?product=fr-imf7amcpfsd2199&ref=fr_imf7amcpfsdpurchase1901<?php echo $refStr;?>&aff=&refs=fr_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1901a-fr')">
          <i class="all-icons"></i>
          VITE, J'EN PROFITE
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="one">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd><h3>Satisfait ou Remboursé</h3></dd>
          <dd>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</dd>
        </dl>
        <dl class="two">
          <dt><img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt="" /></dt>
          <dd><h3>Paiement 100% Sécurisé</h3></dd>
          <dd>IObit vous propose huit modes de paiement sécurisé pour régler vos achats.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/opswat.png')?>" alt="" /></dt>
          <dd><h3>Certification d'expert</h3></dd>
          <dd>Testé et certifié par les experts d'OPSWAT.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/online.png')?>" alt="" /></dt>
          <dd><h3>Service Client à votre écoute</h3></dd>
          <dd>Notre Support Technique gratuit est à votre disposition 24 heures sur 24, 7 jours sur 7.</dd>
        </dl>
      </div>
      <!-- service end -->

      <!-- annotation start -->
      <dl class="annotation">
        <dt>Notification</dt>
        <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
        <dd>*.Licence gratuite d'AMC Security PRO, la version complète comprend annonces intégrées.</dd>
      </dl>
      <!-- annotation end -->

      <!-- footer start -->
      <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->
  
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>