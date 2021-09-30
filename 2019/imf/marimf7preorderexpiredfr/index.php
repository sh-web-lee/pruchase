<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='frimfprea'.$date;
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
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['expday'])?'':('-'.$_GET['expday']));
$transData=$_GET['fileto'].$_GET['rsto'].$_GET['traceto'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>Précommandez le nouvel IObit Malware Fighter PRO pour seulement 0€.</title>
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
      <h1>Rejoignez notre prévente et reprenez vos Privilèges </h1>
      <p class="fast">Quantités limitées à 2 000. Permier arrivé, permier servi !</p>
      <div class="clearfix">
        <div class="left-img"><span></span></div>
        <div class="right-message">
          <h2>IObit Malware Fighter 7 PRO</h2>
          <div class="progress">
            <p>Plus que <strong class="packnum">*</strong> disponibles, <strong class="buyNum">*</strong> vendues !</p>
            <div class="bar">
              <span class="box"><span><span class="disappear"></span></span></span>
            </div>
          </div>
          <p class="price">
            Maintenant à: <strong><b>0</b>€</strong> <del>79,99€</del>
          </p>
          <!-- buybtn -->
           <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf7preoder30days&ref=fr_imf7preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
              onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired-fr');">
                <span>J’EN PROFITE VITE</span>
           </a>
        </div>
      </div>
      <div class="step">
        <span>SI satisfait, profitez de 75% de réduction sur le prix d’origine 30 <br> jours après la commande</span>
        <strong>Pré-commandez <br> aujourd’hui pour 0€</strong>
        <span>Si insatisfait, annulez dans les 30 jours sans payer de frais</span>
      </div>
    </div>
    
  </div>
  <!-- end banner -->
  <div class="main-bg">
    <!-- feature -->
    <div class="feature wrapper clearfix">
      <h2>Rappelez-vous comment IObit Malware Fighter <br> PRO protéger votre ordinateur ?</h2>
      <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt="" class="img-box">
      <div class="message">
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Eliminer</dt>
          <?php if(!empty($_GET['fileto'])):?>
            <dd><strong><?php echo number_format($_GET['fileto'])?></strong></dd>
          <?php endif;?>
          <dd>menaces de sécurité pour protéger votre PC et vos informations personnelles.</dd>
        </dl>
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Bloquer</dt>
          <?php if(!empty($_GET['rsto'])):?>
            <dd><strong><?php echo number_format($_GET['rsto'])?></strong></dd>
          <?php endif;?>
          <dd>ransomware de chiffrer vos fichiers.</dd>
        </dl>
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Effacer</dt>
          <?php if(!empty($_GET['traceto'])):?>
            <dd><span><?php echo number_format($_GET['traceto'])?></span></dd>
          <?php endif;?>
          <dd> traces en ligne pour éviter la fuite de la vie privée</dd>
        </dl>
        <dl <?php echo empty($transData)?'class="emp"':'';?>>
          <dt>Activer</dt>
          <dd>protection <span>en temps réel </span> pour arrêter les activités suspectes.</dd>
        </dl>
       </div>
    </div>
    <!-- benfits -->
    <div class="compar-tab wrapper clearfix">
      <h2>Sans la protection complète, votre ordinateur  <br> est vulnérable !</h2>
      <div class="message">
        <h3>Ce que vous avez  <strong>PERDU</strong></h3>
        <p>Le moteur Anti-virus de Bitdefender </p>
        <p>Le moteur Anti-ransomware</p>
        <p>Safebox (Coffre-fort)</p>
        <p>Protection de Webcam</p>
        <p>Protection des Clés USB</p>
        <p>Navigateur Anti-Pistage</p>
        <p>Mise à jour automatique</p>
      </div>
      <div class="message right">
        <h3>Ce que vous rencontriez</h3>
        <p>Infections par des virus sur votre PC et perte de données</p>
        <p>Modification et cryptage de vos données sensibles</p>
        <p>Autre accès à vos fichiers personnels</p>
        <p>Accès secret à votre webcam</p>
        <p>Attaques de virus caché sur clés USB</p>
        <p>Fuite de la confidentialité en ligne causée par pirates</p>
        <p>Les dernières menaces de sécurité ne peuvent pas être trouvées</p>
      </div>
    </div>
    <!-- end benfits -->
    <div class="more-than wrapper">
      <h2>Découvrez plus des avantages en passant à <br> IOBIT MALWARE FIGHTER 7 PRO</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
        <dd><strong>60% plus grande</strong></dd>
        <dd>Base de données anti-malware</dd>
      </dl>
      <dl class="center">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
        <dd><strong>Mot de passe protégé </strong></dd>
        <dd>Données personnelles</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
        <dd><strong>300% plus rapide </strong></dd>
        <dd>Analyse des menaces</dd>
      </dl>
    </div>
  </div>
  <div class="review wrapper">
    <h2>Les experts l’ont approuvé, les utilisateurs l’adorent !</h2>
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
      <dt>Note: </dt>
      <dd> *À la fin de la période d'essai, votre carte de crédit ou votre compte PayPal sera automatiquement facturé de 21,99€. Ce rabais de 75% par rapport au prix original de 79,99€ </dd>
      <dd> est un bonus réservé uniquement aux précommandes!</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>



  <div class="float-right">
    <img src="<?php echo getStaticUrl('images/people.png')?>"> <span class="viewNum"><?php echo $viewNum;?></span> clients sur cette page maintenant !
  </div>
  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"><img src="<?php echo getStaticUrl('images/fl-imf-box.png')?>" alt=" IObit Malware Fighter 7 PRO"></div>
      <div class="progress">
        <p>Plus que <strong class="packnum">*</strong> dispos, <strong class="buyNum">*</strong> déjà vendues !</p>
        <div class="bar">
          <span class="box"><span><span class="disappear"></span></span></span>
        </div>
      </div>
      <!-- buybtn -->
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf7preoder30days&ref=fr_imf7preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired-fr');">
        <span>J’EN PROFITE VITE - 0€</span>
      </a>
    </div>
  </div>
  <div class="pop-over ">
    <h2>OOPS! Vous avez rate nptre prevente mondiale</h2>
    <h3>Ne manquez plus cette <strong>réduction EXCLUSIVE de <b>75%</b></strong></h3>
    <img src="<?php echo getStaticUrl('images/pop-img-box.png')?>" alt=" IObit Malware Fighter 7 PRO" class="img-box">
    <div class="message">
       <p><strong><b>19</b>,99€</strong> <del>79,99€</del></p>
       <a class="buybtn"
         href="https://www.iobit.com/buy.php?product=fr-imf7preoder1y3pc1999&ref=fr_imf7preorderexpired1999<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderexpired1999-fr');">
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