<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Vente flash du jour - jusqu'à -85% sur IObit Malware Fighter PRO</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:400,700,700i">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      VENTE FLASH DU JOUR
      <span> Offre limitée, n’attendez pas la dernière minute !</span>
    </h1>
    <!-- product-message -->
    <ul class="message">
      <!-- 3pc -->
      <li class="prev">
        <!-- countdown -->
        <p class="countdown countdown2 prev hide">
          <span>Plus que</span>
          <strong>00</strong> H
          <strong>00</strong> M
          <strong>00</strong> S
          <strong>00</strong> Ms*
        </p>
        <!-- box -->
        <div class="box">IObit Malware Fighter PRO</div>
        <!-- price -->
        <p class="price"><strong>21</strong> <sup>€99</sup> <del>79,99€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-imf73pc2199&ref=fr_imf73pcpurchase1906<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1906b-fr')  ">
          VITE, J’EN PROFITE
        </a>
      </li>
      <!-- 3pc+gifts -->
      <li class="last">
        <!-- countdown -->
        <p class="countdown countdown1">
          <span>Plus que</span>
          <strong>00</strong> H
          <strong>00</strong> M
          <strong>00</strong> S
          <strong>00</strong> Ms*
        </p>
        <!-- box -->
        <div class="box">IObit Malware Fighter PRO + Protected Folder + Smart Defrag 6 PRO + AMC Security PRO</div>
        <!-- price -->
        <p class="price small"><strong>21</strong> <sup>€99</sup> <del>169,96€</del></p>
        <!-- buybtn -->
        <a class="buybtn yellow"
           href="https://www.iobit.com/buy.php?product=fr-imf7amcpfsd2199&ref=fr_imf7amcpfsdpurchase1908<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1906a-fr')">
          VITE, J’EN PROFITE
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <img src="<?php echo $pResUrl; ?>images/payment.jpg" alt="">
</div>
<!-- payment end -->
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
    <h2>Profitez d’un paquet cadeau à durée limitée, dépêchez-vous !</h2>
    <div class="clearfix">
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="" />
          <p>1 An / 1 PC</p>
            <del>29,99€</del>
        </dt>
        <dd>La performance maximale du disque <br> Un accès plus rapide aux fichiers</dd>
      </dl>
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="" />
          <p>1 An / 1 PC</p>
           <del>39,99€</del>
        </dt>
        <dd>Vous prémunir contre la perte, le <br>  vol et la fuite de données.</dd>
      </dl>
      <dl>
        <dt>
          <img src="<?php echo getStaticUrl('images/amc-gift.png')?>" alt="" />
          <p>1 An / 1 Appareil</p>
          <del>19,99€</del>
        </dt>
        <dd>Accélérer votre appareil jusqu’à <br> 200% plus rapide</dd>
      </dl>
    </div>
    <a class="buybtn yellow" 
       href="https://www.iobit.com/buy.php?product=fr-imf7amcpfsd2199&ref=fr_imf7amcpfsdpurchase1908<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
       onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1906a-fr')">
      VITE, J'EN PROFITE
    </a>
    <p class="countdown countdown1 bottom">
       <strong>08</strong> H :
      <strong>08</strong> M :
      <strong>55</strong> S :
      <strong>89</strong> MS*
    </p>
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
          <td class="itemb"><i>√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
          <td class="virtue">Scanner les fichiers téléchargés et supprimer les publicités agaçantes <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"><i>√</i></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
          <td class="virtue">Bloquer les ransomwares tentant de chiffrer vos fichiers importants <sup class="red">Nouveau </sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
          <td class="virtue">Personne ne peut accéder à vos données sensibles sans votre mot de passe <sup class="red">Nouveau </sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
          <td class="virtue">Capacité complète d'anti-malware grâce au moteur Dual-Core <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
          <td class="virtue">Détecter 203 000 000+ menaces grâce aux moteurs de Bitdefender & d’IObit <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
          <td class="virtue">Protection du disque au Démarrage contre les attaques malveillantes avec MBR Guard  <sup class="red">Nouveau </sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
          <td class="virtue">Protéger votre webcam contre les accès non autorisés  <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
          <td class="virtue">Protection Complète En Temps Réel pour La Meilleure Sécurité de PC <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
          <td class="virtue">Prévenir l’Infection par Virus Porté par USB Disk </td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
          <td class="virtue">Détecter le Processus Malveillant qui Fonctionne En RAM</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
          <td class="virtue">Nettoyage Auto de la Vie Privée avec le Navigateur d’Anti-Pistage <sup>Amélioré</sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
          <td class="virtue">Fonctionner Intelligemment En Arrière-plan sans Interruption </td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
          <td class="virtue">Mettre à Jour Automatiquement vers La Dernière Version</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
          <td class="virtue">Soutien Technique gratuit de 24/7 à la demande</td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="red">√</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

<!-- bottombuy start -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <div class="box fl">
      <ul class="clearfix fl">
        <li class="active"></li>
        <li class="second"></li>
      </ul>
    </div>
    <div class="middle fl">
      <ul class="select">
        <li class="active"
            data-url="https://www.iobit.com/buy.php?product=fr-imf7amcpfsd2199&ref=fr_imf7amcpfsdpurchase1908<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1906a-fr')"
            data-del="169,96€" data-price="21">
          <i></i>
          1 AN / 3 PC + 3Outils PRO 
          <span>-80%</span>
        </li>
        <li class="second"
            data-url="https://www.iobit.com/buy.php?product=fr-imf73pc2199&ref=fr_imf73pcpurchase1906<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
            data-ga="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1906b-fr')  "
            data-del="79,99€" data-price="21">
          <i></i>
          1 AN / 3 PC
          <span>-70%</span>
        </li>
      </ul>
    </div>
    <div class="fr another">
      <p class="price"><strong>21</strong> <sup>€99</sup> <del>169,96€</del></p>
      <a class="buybtn yellow"
         href="hhttps://www.iobit.com/buy.php?product=fr-imf7amcpfsd2199&ref=fr_imf7amcpfsdpurchase1908<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1906a-fr')">
        VITE, J’EN PROFITE
      </a>
    </div>
  </div>
</div>
<!-- boittombuy enb -->

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

<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>