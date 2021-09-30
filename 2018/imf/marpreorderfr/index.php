<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frimfmarpre' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 55;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24 * 2);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Profiter de 30 jours d'essai gratuit d'IObit Malware Fighter 6 PRO - IObit</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='http://fonts.googleapis.com/css?family=Raleway:500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="http://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <div class="clearfix">
        <div class="right fr">
          <h1>IObit Malware Fighter 6 PRO</h1>
          <p>Précommandez-le aujourd’hui pour une cybersécurité complète</p>
          <div class="price">
            <div class="gift">
             Il n’en reste plus que
              <div class="countdown packsNum">
                <div class="list"><div class="scroll-tick">5</div></div>
                <div class="list right"><div class="scroll-tick">6</div></div>
              </div> 
            </div>
            <p class="people"><b class="buyNum">731,717</b> personnes l’ont pré-commandé</p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf6preorder30day&ref=fr_imf6preorder1<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy1', 'buy', 'imfpurchase-preorder-fr');">
              J’EN PROFITE VITE
            </a>
          </div>
        </div>
      </div>
      <ul class="point clearfix">
        <li>Profitez d’IObit Malware Fighter 6 PRO (3 PCs) à <b>0€</b>  ( prix original 79,99€ ) pour 30 jours.</li>
        <li class="center">
         Votre compte ne sera pas débité durant la période d'essai de 30 jours, vous pourrez l’annuler à tout moment.
        </li>
        <li class="last">
          Après 30 jours, bénéficiez d'une réduction de <b>70</b>% sur l'abonnement de 1 an pour <b>3 PCs</b> (seulement  21,99€ ).
        </li>
      </ul>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature wrapper">
    <h2>IObit Malware Fighter 6 PRO, la cybersécurité fiable dont vous avez besoin !</h2>
    <div class="clearfix">
      <div class="content fl">
        <p>Au fil des années, nous nous consacrons à apporter des améliorations significatives à une protection puissante contre les logiciels malveillants, les ransomwares, les logiciels publicitaires, les logiciels espions, la pêche et d’autres menaces de sécurité cachées. Maintenant le nouvel IObit Malware Fighter 6 est assez puissant pour protéger votre fichier personnel et mettre votre ordinateur à l’abri du piratage.</p>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt="" /></dt>
          <dd>
            <h4>Protection de Dossier <i class="all-icons new">Nouveau</i></h4>
            <p>
              SafeBox protège vos dossiers importants spécifiques contre tout accès non autorisé et les dernières menaces.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt="" /></dt>
          <dd>
            <h4>Protection du disque au Démarrage <i class="all-icons new">Nouveau</i></h4>
            <p>
              MBR Guard nouvellement inséré se prémunit contre les attaques malveillantes, en particulier les attaques ransomware comme WannaCry durant le processus du démarrage.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt="" /></dt>
          <dd>
            <h4>Moteur Anti-Ransomware <i class="all-icons">Amélioré</i></h4>
            <p>
             Le moteur anti-ransomware amélioré bloque proactivement tout Ransomware qui tente de pénétrer dans votre PC et le supprime précisément.
            </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/feature04.png')?>" alt="" /></dt>
          <dd>
            <h4>Anti-Virus & Anti-Malware <i class="all-icons">Amélioré</i></h4>
            <p>
              Double protection grâce au moteur anti-virus avancé de Bitdefender & au moteur anti-malware d’IObit avec la base de données améliorée.
            </p>
          </dd>
        </dl>
      </div>
      <div class="computer fr"><img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" /></div>
    </div>
    <h3>En savoir plus sur cet outil de sécurité plus intelligent et efficace.</h3>
    <div class="price">
      <a class="buybtn big" href="https://www.iobit.com/buy.php?product=fr-imf6preorder30day&ref=fr_imf6preorder2<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy2', 'buy', 'imfpurchase-preorder-fr');">
       <b><big>0</big>€</b> J’EN PROFITE VITE 
      </a>
      <div class="gift">
        Seulment 
        <div class="countdown packsNum">
          <div class="list"><div class="scroll-tick">5</div></div>
          <div class="list"><div class="scroll-tick">6</div></div>
        </div> 
        disponibles
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <h2>Découvrez plus d’améliorations majeures dans la nouvelle version PRO</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="title"></th>
            <th class="space"></th>
            <th class="itema"><span>IObit Malware Fighter 5 PRO</span></th>
            <th class="space"></th>
            <th class="itemb"><span>IObit Malware Fighter 6 PRO</span></th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="title">Mise à jour Automatique</td>
            <td class="space"></td>
            <td class="itema">Privilège de mettre à jour automatiquement la base de <br> données et les programmes.</td>
            <td class="space"></td>
            <td class="itemb">Détecter et mettre à jour votre base de données et <br> programme <b>plus précisément</b></td>
          </tr>
          <tr>
            <td class="title">USB Guard</td>
            <td class="space"></td>
            <td class="itema">Analyser et prévenir les infections virales portées par le <br> disque USB.</td>
            <td class="space"></td>
            <td class="itemb">Analyser <b>130%* plus rapidement</b> afin de cibler rapidement les menaces</td>
          </tr>
          <tr>
            <td class="title">Anti-tracking</td>
            <td class="space"></td>
            <td class="itema">Effacer automatiquement les cookies de suivi malveillants à <br> la fermeture du navigateur.</td>
            <td class="space"></td>
            <td class="itemb"><b>Plus de 15 000</b> échantillons de menaces ajoutés</td>
          </tr>
          <tr>
            <td class="title">Camera Guard</td>
            <td class="space"></td>
            <td class="itema">Protéger votre webcam contre les accès non autorisés.</td>
            <td class="space"></td>
            <td class="itemb">Analyser jusqu’à <b>115%* plus rapidement</b> & bloquer les accès non autorisés <b>plus effecacement</b></td>
          </tr>
        </tbody>
      </table>
      <div class="price">
        <h3>Ne vous en manquez pas !</h3>
        <p>Profitez d’IObit Malware Fighter 6 PRO à 0€ pour protéger votre PC et la vie privée complètement .</p>
        <a class="buybtn big" href="https://www.iobit.com/buy.php?product=fr-imf6preorder30day&ref=fr_imf6preorder3<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy3', 'buy', 'imfpurchase-preorder-fr');">
          <b><big>0</big>€</b> J’EN PROFITE VITE
        </a>
        <div class="gift">
          Seulment  
          <div class="countdown packsNum">
            <div class="list"><div class="scroll-tick">5</div></div>
            <div class="list"><div class="scroll-tick">6</div></div>
          </div> 
          disponibles
        </div>
      </div>
    </div>
  </div>
  <!-- comparison end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>Avis des utilisateurs et des médias sur cette version</h2>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"/></dt>
        <dd>
          <h3>Gelu Batir</h3>
          <p>Je suis très satisfait de votre produit IObit Malware Fighter. J'ai eu beaucoup de problèmes d'interférences malveillantes auparavant, je n'ai pas pu regarder un film ou un concert entier que j'aime beaucoup. Grâce à votre produit, maintenant chaque opération est claire, sûre et bien protégée. il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis. </p>
        </dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"/></dt>
        <dd>
          <h3>Software.Informer</h3>
          <p>Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est donc compatible avec votre logiciel antivirus standard. IObit Malware Fighter 6 est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"/></dt>
        <dd>
          <h3>David Cassidy</h3>
          <p>Merci d'avoir fait sortir Malware Fighter V6, c’est une autre mise à jour majeure pour vos utilisateurs. Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide. Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter. </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Prix et Distinctions</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="" />
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
          <dd>
            <h3>Satisfait ou Remboursé</h3>
            <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
          </dd>
        </dl>
        <dl class="center">
          <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
          <dd>
            <h3>Paiement 100% Sécurisé</h3>
            <p>IObit vous propose huit modes de paiement sécurisé pour régler vos achats.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/cart.png')?>" alt="" /></dt>
          <dd>
            <h3>Obtenir la licence</h3>
            <p>Vous recevrez le code de licence dans les minutes après l’achat.</p>
          </dd>
        </dl>
      </div>
      <dl class="annotation">
        <dt>Note :</dt>
        <dd>* .Les données peuvent varier en fonction de différents systèmes ou ordinateurs.</dd>
      </dl>
      <p>© 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/imfbox.png')?>" alt="">
      <div class="content fl">
        <h2>Profitez <b>gratuitement </b> d'IObit Malware Fighter 6 !</h2>
        <p>Empêchez les attaques de ransomware, malware, adware, etc.</p>
      </div>
      <div class="price fl">
        <a class="buybtn small" href="https://www.iobit.com/buy.php?product=fr-imf6preorder30day&ref=fr_imf6preorder4<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy4', 'buy', 'imfpurchase-preorder-fr');">
          <b><big>0</big>€</b> J’EN PROFITE VITE
        </a>
        <p>1 An / <b>3 PCs</b> Original : 79,99€</p>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>