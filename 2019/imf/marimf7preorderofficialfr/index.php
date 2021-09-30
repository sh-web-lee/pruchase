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
  $c_name='frimfpreb'.$date;
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
      <h1>Notre prévente mondiale en direct  </h1>
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
           <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf7preoder30days&ref=fr_imf7preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
              onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderofficial-fr');">
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
 <!-- feature -->
  <div class="feature">
    <div class="wrapper">
      <h2>Ce que vous gagnerez en passant à IOBIT MALWARE FIGHTER 7 PRO ?  </h2>
      <h3><i>1</i> Mettez votre PC à l'abri des menaces grâce à une protection multicouche </h3>
      <div class="details">
        <img src="<?php echo getStaticUrl('images/feature-imgbox.png')?>" alt=""/>
        <div class="list one">
          <h4>Protection du moteur Bitdefender</h4>
          <p>Détecte et supprime plus de 200 millions de nouveaux virus et menaces en ligne telles que Adware, les chevaux de Troie et les logiciels espions.</p>
          <span>*exclusive PRO</span>
        </div>
        <div class="list two">
          <h4>Blocage des virus sur clés USB</h4>
          <p>Vérifie et bloque les virus cachés sur les clés USB qui pourraient mettre en danger l'intégrité de l'information stockée dans l'ordinateur.   </p>
          <span>*exclusive PRO</span>
        </div>
        <div class="list three">
          <h4>Mise à jour automatique de la Base de données</h4>
          <p>Vous fournit par avance une défense proactive afin d’éviter que vous ne soyez victime de menaces, même pour les dernières menaces. </p>
          <span>*exclusive PRO</span>
        </div>
      </div>
    </div>
  </div>
  <div class="feature feature2">
    <div class="wrapper">
      <h3 class="num-two"><i>2</i>  Prenez le contrôle de votre confidentialité et sécurité</h3>
      <div class="details">
        <img src="<?php echo getStaticUrl('images/feature-imgbox-two.png')?>" alt=""/>
        <div class="list four">
          <h4>Aucune chance pour Ransomware</h4>
          <p>Les pirates informatiques ne peuvent plus pénétrer dans votre ordinateur et chiffrer vos fichiers personnels.</p>
          <span>*exclusive PRO</span>
        </div>
        <div class="list five">
          <h4>Données sûres personnelles</h4>
          <p>Verrouille vos fichiers et photos privés avec un mot de passe sécurisé. Personne ne peut obtenir vos données sensibles sans votre mot de passe.</p>
          <span>*exclusive PRO</span>
        </div>
      </div>
      <h3 class="num-three"><i>3</i> Bénéficiez d'une confidentialité complète et d'une liberté totale sur Internet</h3>
      <div class="details-two clearfix">
        <dl class="list six">
          <dt><h4>Navigation propre et sûre en ligne</h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""/></dd>
          <dd><p>Arrêtez les sites Web malveillants, bloquez le minage de cryptomonnaie et supprimez les annonces popup agaçantes.</p></dd>
        </dl>
        <dl class="list">
          <dt><h4>Téléchargements sécurisés </h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""/></dd>
          <dd><p>Détectez automatiquement les fichiers téléchargés et les pièces jointes.</p></dd>
        </dl>
        <dl class="list seven">
          <dt><h4>Balayage automatique des traces</h4></dt>
          <dd><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""/></dd>
          <dd><p>Effacez automatiquement les cookies et traces en ligne lors que vous fermez le navigateur Web pour plus de confidentialité. </p></dd>
          <dd><span>*exclusive PRO</span></dd>
        </dl>
      </div>
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
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf7preoder30days&ref=fr_imf7preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderofficial-fr');">
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
         href="https://www.iobit.com/buy.php?product=fr-imf7preoder1y3pc1999&ref=fr_imf7preorderofficial1999<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf"
         onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf7predorderofficial1999-fr');">
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