<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='frimfprec'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 48;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit;
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>0€ pour précommander IObit Malware Fighter 7 PRO et bénéficier d'une protection optimale !</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <h1>PRÉVENTE MONDIALE EN DIRECT  </h1>
      <p class="fast">Vite ! Quantitées limitées à 500, déjà <span class="buyNum">445</span> vendues !</p>
      <div class="clearfix">
        <div class="right-message">
          <h2>IObit Malware Fighter 7 PRO</h2>
          <div class="progress">
            <p>
              <span><strong class="viewNum"><?php echo $viewNum;?></strong> clients en ligne, plus que <strong class="packnum">16</strong> dispos ! </span>
              <span class="date">Rupture de stock prévu:  <strong>04</strong><b>M :</b> <strong>04</strong><b>S :</b><strong class="mi">04</strong><b>ms</b></span>
            </p>
            <div class="bar">
              <span class="box"><span class="disappear"></span></span>
            </div>
          </div>
          <p class="price">
             <strong><b>0</b>€</strong> <del>79,99€</del>
          </p>
          <!-- buybtn -->
           <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf7preoder30days&ref=fr_imf7preorder30daylocalpage<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
              onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderofficial-fr');">
                <span>J’EN PROFITE VITE</span>
           </a>
           <p class="last">1 an d’abonnement / 3 PC</p>
        </div>
      </div>
      <div class="step">
        <span>Profitez de 75% de réduction sur le prix <br> d’origine 30 jours après la commande.</span>
        <strong><span>SI SATISFAIT</span>Précommandez-le maintenant pout 0€ <span class="right">SI INSATISFAIT</span></strong>
        <span>Annulez-le dans les 30 jours sans <br> payer de frais.</span>
      </div>
    </div>
    
  </div>
  <div class="product">
    <div class="wrapper">
      <h2>Pourquoi précommander IObit Malware Fighter 7 PRO ?</h2>
      <h3>Augmentez le niveau de sécurité de votre PC avec la protection multicouche</h3>
      <h4>Les moteurs de Bitdefender leader mondial <i>Nouveau</i></h4>
      <p><img src="<?php echo getStaticUrl('images/currt.png')?>" alt="">Equipé des derniers moteurs Anti-virus & Anti-malware de Bitdefender, plus de 300 millions de nouvelles menaces en ligne, <br> telles que adwares, virus, logiciels malveillants, logiciels espions, etc. peuvent être facilement éliminées.</p>
      <img src="<?php echo getStaticUrl('images/authoritative.png')?>" alt="" class="img-box">
    </div>
  </div>
  <div class="product2 wrapper">
    <div class="content">
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
        <dd>
          <strong>Renseignement sur les Cybermenaces <span>Nouveau</span></strong>
          <p>Obtenir rapidement des informations liées aux menaces actuelles ou <br> potentielles afin de vous fournir par avance une défense proactive.</p>
        </dd>
      </dl>
      <dl class="list02">
        <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
        <dd>
          <strong>Détection imbattable des menaces <br> <span>Nouveau</span></strong>
          <p>Profiter d’une vitesse d’analyse jusqu’à 300% et d’un <br> taux d’élimination des menaces plus élevé grâce à la <br> nouvelle génération de moteur Anti-malware.</p>
        </dd>
      </dl>
      <dl class="list03">
        <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
        <dd>
          <strong>Aucune chance pour Ransomware  <br> <span>Amélioré </span></strong>
          <p>Bloquer proactivement tous accès non autorisé <br> à vos fichiers importants et empêcher la <br> modification et le cryptage de vos données <br> personnels.</p>
        </dd>
      </dl>
    </div>
  </div>
  <div class="between-buy">
    <div class="wrapper">
      <h2>Profitez de la protection de Bitdefender pour une cybersécurité de niveau supérieur !</h2>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf7preoder30days&ref=fr_imf7preorder30daylocalpage<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderlocal-fr');">
            <span>J'EN PROFITE VITE - 0€</span>
       </a>
       <p> Vite, plus que <strong class="packsNum">15</strong> disponibles !</p>
    </div>
  </div>
 <!-- feature -->
  <div class="feature">
    <div class="wrapper">
      <h2>Profitez de la protection de la vie privée ultime </h2>
      <div class="left-message">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
          <dd>
            <strong>Fichiers protégés par mot de passe</strong> <span>Exclusive PRO</span>
            <p>Verrouiller vos données sensibles et photos privées avec un mot de passe sécurisé et les protège de tout accès non autorisé. </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
          <dd>
            <strong>Navigateur Anti-Pistage</strong> <span>Exclusive PRO</span>
            <p>Effacer automatiquement les cookies et traces dangereuses <br> lors que vous fermez le navigateur Web. </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
          <dd>
            <strong>Protection de Webcam</strong> <span>Exclusive PRO</span>
            <p>Toute tentative d'accès à votre webcam ne peut se faire <br> qu'avec votre accord afin d'éviter tous les regards indiscrets. </p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
          <dd>
            <strong>Blocages des virus sur USB </strong> <span>Exclusive PRO</span>
            <p>Vérifier et bloquer les viurs cachés sur les clés USB qui pourraient mettre en danger l’intégrité de l’information stockée dans l’ordinateur. </p>
          </dd>
        </dl>
      </div>
      <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt="" class="imgbox">
    </div>
  </div>
  <div class="between-buy between2">
    <div class="wrapper">
      <h2><span>0€</span>pour passer à IObit Malware Fighter 7 PRO et bénéficier d'une confidentialité en ligne optimale !</h2>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf7preoder30days&ref=fr_imf7preorder30daylocalpage<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderlocal-fr');">
         <span>J’EN PROFITE VITE</span>
       </a>
       <p> Vite, plus que <strong class="packsNum">15</strong> disponibles !</p>
    </div>
  </div>
  <div class="compar-tab wrapper">
    <h2>Aperçu des différences entre la version Free et version PRO</h2>
    <table border="0" cellspacing="0" cellpadding= "0" width="100%">
      <thead>
        <tr>
          <th class="itema"></th>
          <th class="space"></th>
          <th class="itemb"><span>Votre version actuelle</span></th>
          <th class="itemc">IObit Malware Fighter 7 PRO</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">Base de données Anti-malware</td>
          <td class="space"></td>
          <td class="itemb">3 millions</td>
          <td class="itemc">Plus de 300 millions</td>
        </tr>
        <tr>
          <td class="itema">Moteur Anti-virus et Anti-malware de Bitdefender</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="itemc"><i></i></td>
        </tr>
        <tr>
          <td class="itema">Moteur Anti-ransomware</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="itemc"><i></i></td>
        </tr>
        <tr>
          <td class="itema">Protection en temps réel</td>
          <td class="space"></td>
          <td class="itemb">Basique</td>
          <td class="itemc">Complète</td>
        </tr>
        <tr>
          <td class="itema">Blocage des virus sur Clés USB</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="itemc"><i></i></td>
        </tr>
         <tr>
          <td class="itema">Protection par mot de passe</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="itemc"><i></i></td>
        </tr>
        <tr>
          <td class="itema">Arrêter les suivi en ligne malveillants</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="itemc"><i></i></td>
        </tr>
        <tr>
          <td class="itema">Protection de Webcam</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="itemc"><i></i></td>
        </tr>
        <tr class="last">
          <td class="itema">Mise à jour automatique de la base de données</td>
          <td class="space"></td>
          <td class="itemb">-</td>
          <td class="itemc"><i></i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software.Informer"></dt>
            <dd>
              <h2>Avis des médias</h2>
              <p>" Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est donc compatible avec votre logiciel antivirus standard. IObit Malware Fighter est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots."</p>
              <cite>Software.Informer</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>" Nous avons utilisé de nombreux de programmes différents pour assurer le bon fonctionnement de nos ordinateurs et éviter les menaces. Il faut quelques heures pour maintenir la sécurité et les performances chaque semaine. Avec IObit Malware Fighter Pro et Advanced System Care Pro, tout est bien rangé. Après avoir utilisé vos produits, il n’y a plus de problèmes. "</p>
              <cite>Bob Bassett</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Peter Stoffers"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>"Il y a quelques années une personne de mon entourage m’a parlé d’IObit Malware fighter. Au départ j’étais sceptique. Mais après l’avoir installé c’est devenu mon logiciel anti malware préféré. Il est très facile d’utilisation. Au cours des années il a détecté plusieurs menaces et les a éliminé . En association avec d’autres programmes IObit comme ASC j’ai une très bonne protection pour mon PC. Je recommande ces programmes à tous mes amis ainsi qu’à ma famille."</p>
              <cite>Peter Stoffers</cite>
            </dd>
          </dl>
           <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>"Je suis très satisfait de votre produit IObit Malware Fighter. J'ai eu beaucoup de problèmes d'interférences malveillantes auparavant, je n'ai pas pu regarder un film ou un concert entier que j'aime beaucoup. Grâce à votre produit, maintenant chaque opération est claire, sûre et bien protégée. Il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis. "</p>
              <cite>Gelu Batir</cite>
            </dd>
          </dl> 
           <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/dave-cassidy.png')?>" alt="David Cassidy"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>"Merci d'avoir fait sortir Malware Fighter, c’est une autre mise à jour majeure pour vos utilisateurs. Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide. Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter."</p>
              <cite>David Cassidy</cite>
            </dd>
          </dl>                
        </div>               
    </div>
  </div>
  <div class="bottom">
      <div class="award wrapper ">
        <h2>Approuvé par ces médias célèbres du monde</h2>
        <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
    </div>
    <!-- service start -->
    <div class="service wrapper clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Essayez pendant 60 jours, sans risque.</h4>
          <p>
           Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Nous acceptons</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->
    <!-- annotation -->
    <dl class="annotation wrapper">
      <dt>Note</dt>
      <dd>* À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement facturé de 21,99€.  </dd>
      <dd> Ce rabais de 75% par rapport au prix original de 79,99€ est un bonus réservé uniquement aux précommandes !</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>

  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-imf-box.png')?>" alt=" IObit Malware Fighter 7 PRO"></div>
      <div class="progress">
        <p>
          <span><strong class="viewNum"><?php echo $viewNum;?></strong> clients en ligne, plus que <strong class="packsNum">16</strong> dispos ! </span>
          <span class="date">Rupture de stock prévu:  <strong>04</strong><b>M :</b> <strong>04</strong><b>S :</b><strong class="mi">04</strong><b>ms</b></span>
        </p>
        <div class="bar">
          <span class="box"><span class="disappear"></span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf7preoder30days&ref=fr_imf7preorder30daylocalpage<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderlocal-fr');">
        <span>J’EN PROFITE VITE</span>
      </a>
    </div>
  </div>
  <div class="pop-over ">
    <h2>OOPS! Vous avez rate nptre prevente mondiale</h2>
    <h3>Ne manquez plus cette Réduction Exclusive de 75% !</h3>
    <img src="<?php echo getStaticUrl('images/pop-img-box.png')?>" alt=" IObit Malware Fighter 7 PRO" class="img-box">
    <div class="message">
       <p><strong>19</strong> <span><span>€99</span><del>79,99€</del></span></p>
       <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fr-imf7preoder1y3pc1999&ref=fr_imf7preorder1y3pc1999local<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorder1999local-fr');">
         <span>VITE , J’EN PROFITE</span>
      </a>
      <p class="last">1 an d’abonnement / 3 PC</p>
    </div>
   
  </div>
  <div class="pop-bg "></div>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>