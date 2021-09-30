<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  include $pRootUrl.'callback.php';
$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
    'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
    'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
    'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
    'box','notibc','box13thbc','xgiftbox','xactivate'))){
  $refStr.='-'.$_GET['ref'];
}
if(in_array($_GET['pop'],array('x_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Jusqu'à -87% sur IObit Malware Fighter Pro - Vente Flash de Nouvel An - IObit   </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
      <h1>Vente Flash Spéciale Nouvel An</h1>
      <h2>Premier Arrivé, Premier Servi !</h2>

      <div class="one-pc-box box" data-num="0">
        <div class="img-box">
          <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
        </div>
        <dl>
          <dt><strong>17</strong><span>,99€ </span> <del>39,95€</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=fr-imf61pc1799&ref=fr_imf61pcpurchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811b-fr')" class="button">VITE, J'EN PROFITE</a></dd>
        </dl>
      </div>
      <div class="sold-box box" data-num="1">
        <h3> <strong>55</strong> H <strong>55</strong> M  <strong>55</strong> S <strong>55</strong> MS *</h3>
        <div class="img-box">
          <img src="<?php echo getStaticUrl('images/three-gift-box.png')?>" alt="">
        </div>
        <dl>
          <dt><strong>21</strong><span>,99€</span> <del>169,96€</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=fr-imf6amcpfsd2199&ref=fr_imf6amcpfsdpurchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811a-fr')" class="button button-btm-lag"> <span></span>VITE, J'EN PROFITE</a></dd>
          <dd> <span class="buyNum"><?php echo $buyNum?></span>  personnes l’ont acheté!</dd>
        </dl>
      </div>
      <div class="one-pc-box box right" data-num="2">
        <div class="img-box">
          <img src="<?php echo getStaticUrl('images/imf-three-box.png')?>" alt="">
        </div>
        <dl>
          <dt><strong>21</strong><span>,99€</span> <del>79,99€</del></dt>
          <dd><a href="https://www.iobit.com/buy.php?product=fr-imf63pc2199&ref=fr_imf63pcpurchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811c-fr')" class="button">VITE, J'EN PROFITE</a></dd>
        </dl>
      </div>
    </div>
      <span class="snow list01"></span>
      <span class="snow snow-clarity  list02"></span>
      <span class="snow snow-smail list03"></span>
      <span class="round  list04"></span>
      <span class="round round-smail list05"></span>
      <span class="round round-clarity list06"></span>
      <span class="round round-large list07"></span>
      <span class="snow snow-clarity  list15"></span>
      <span class="snow snow-smail  list16"></span>
      <span class="snow snow-clarity  list17"></span>
      <span class="snow snow-smail  list18"></span>
      <span class="round round-clarity list23"></span>
      <span class="round round-clarity list24"></span>

      <span class="round round-clarity list08"></span>
      <span class="round round-smail list09"></span>
      <span class="round round-large  list10"></span>
      <span class="round list11"></span>
      <span class="snow snow-clarity list12"></span>
      <span class="snow snow-smail list13"></span>
      <span class="snow list14"></span>
      <span class="snow snow-clarity  list19"></span>
      <span class="snow snow-smail  list20"></span>
      <span class="snow snow-clarity  list21"></span>
      <span class="snow snow-smail  list22"></span>
      <span class="round round-clarity list25"></span>
      <span class="round round-clarity list26"></span>
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
    <h2 class="intro-h2">Dites NON à Ransomware !</h2>
    <p class="intro-p">Bloquer et supprimer efficacement Malware et Ransomware</p>
  </div>
  <div class="intro wrapper">
    <ul class="cont">
      <li class="one active">
        <h5><i class="i-icons"></i>Anti-virus et Anti-Malware</h5>
        <p>Profitez de la double protection fournie par le moteur Anti-virus et le moteur Anti-Malware de Bitdefender.</p>
      </li>
      <li class="two">
        <h5><i class="i-icons"></i>Protection de Dossiers</h5>
        <p>Coffre-fort protège les dossiers spécifiques importants contre les accès non autorisés & les dernières menaces.</p>
      </li>
      <li class="three">
        <h5><i class="i-icons"></i>Protection contre Ransomware</h5>
        <p>Détecter automatiquement toute action suspecte pour éviter proactivement les attaques de Ransomware tel que WannaCry, <span>Petya / GoldenEye etc.</span></p>
      </li>
      <li class="four">
        <h5><i class="i-icons"></i>Protection en temps réel</h5>
        <p>Bloquer & supprimer automatiquement plus de 200 millions de menaces en temps réel et effacer les données de suivi malveillants.</p>
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
      <p>Se termine dans <strong>00</strong> H :<strong>00</strong> M :<strong>00</strong> S <strong>00</strong> MS</p>
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
          <p>1 An / Plusieurs Appareils</p>
          <strong>0€</strong>  <del>19,99€</del>
        </dt>
        <dd>Accélérer votre appareil jusqu’à <br> 200% plus rapide</dd>
      </dl>

      <h3>IMF PRO <strong>(21,99€)</strong> + cadeaux gratuits <strong>(0€)</strong></h3>
      <a href="https://www.iobit.com/buy.php?product=fr-imf6amcpfsd2199&ref=fr_imf6amcpfsdpurchase1811b<?php echo $refStr;?>&aff=<?php echo $aff;?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801a-fr')" class="button"> <span></span> VITE, J’EN PROFITE</a>
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
        <dd>" Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est donc compatible avec votre logiciel antivirus standard. IObit Malware Fighter 6 est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots. "</dd>
      </dl>
      <dl>
        <dt><h3>Commentaire des Utilisateurs</h3></dt>
        <dd><h4>" Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide."</h4></dd>
        <dd>"Merci d'avoir fait sortir Malware Fighter V6, c’est une autre mise à jour majeure pour vos utilisateurs. Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide. Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter. "</dd>
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
          <td class="virtue">Jusqu’à 130% plus rapide pour cibler plus rapidement les menaces actives  <sup>Amélioré</sup></td>
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
          <td class="virtue">Le nouveau Moteur Anti-Rançongiciels empêche les accès non autorisés d’accéder les fichiers importants <sup class="red">Nouveau </sup></td>
          <td class="space"></td>
          <td class="itemb"></td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">√</i></td>
        </tr>
        <tr>
          <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
          <td class="virtue">Protège les dossiers spécifiques importants contre les accès non autorisés grâce au coffre-for <sup class="red">Nouveau </sup></td>
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
          <td class="virtue">Moteur Anti-virus de Bitdefender lutte contre les menaces en ligne <sup>Amélioré</sup></td>
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
  <div class="bottomcart">
    <div class="wrapper">
      <h2>Offrez votre PC une protection complète comme cadeau de Noël </h2>
        <div class="showcase">
          <span class="img"></span>
        </div>
        <div class="selection">
          <ul>
            <li class="one-box"><i></i> <span>1 An / 1 PC</span> <strong>-50%</strong></li>
            <li class="three-pc active" ><i></i> <span>1 An / 3 PCs + Cadeaux offerts</span> <strong>-87%</strong></li>
            <li class="one-pc"><i></i> <span>1 An / 3 PCs</span> <strong>-70%</strong></li>
          </ul>
        </div>

        <dl class="btnarea">
          <dt> <strong><b>21</b><span>,98€</span> </strong> <del>169,96€</del> </dt>
          <dd>
            <a href="https://www.iobit.com/buy.php?product=fr-imf6amcpfsd2199&ref=fr_imf6amcpfsdpurchase1811<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1811a-fr')" class="button button-top-lag"> <span></span>VITE, J'EN PROFITE</a>
          </dd>
        </dl>
    </div>
  </div>
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
  <!-- conationer end -->
<script type="text/javascript">refStr='<?php echo $refStr;?>'</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>