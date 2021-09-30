<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='frasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(89,108);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_dbasc','x_ascdb','xr_ascdb'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profitez d'un rabais exclusif, le plus élevé jamais partiqué par IObit - Offre Spéciale de Noël</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>Offre Spéciale de Noël</h1>
      <p class="best">Le prix le plus bas jamais proposé – une fois par an seulement !</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>Driver Booster 6 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos!
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Vite! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
            </div>
            <p><strong>29<big>,</big></strong> <span><del>124,84€</del>99€ </span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-asc123pcdb3pc&ref=fr_ascdb2999purchase1811a<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
               onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018a-fr')">
              VITE, J’EN PROFITE
            </a>
            <p class="year">1 an d’abonnement / 3 PC</p>
          </div>
        </div>
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
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Double Garantie d’IObit: PC plus fluide & Meilleure expérience de jeu </h2>
      <p class="over">Driver Booster 6 PRO fonctionne avec Advanced SystemCare 12 PRO, l’outil de nettoyage et d’optimisation leader sur le marché mondial, garantit des performances optimales sur PC et les jeux en ligne.</p>
    </div>
  </div>
  <!-- feature end -->

  <!-- together start -->
  <div class="together">
    <div class="wrapper">
      <div class="panel clearfix">
        <div class="asc-box fl clearfix on">
          <div class="box fl">
            <h3>Advanced SystemCare 12 PRO<i></i></h3>
            <dl>
              <dt></dt>
              <dd>Nettoie les registres inutiles qui s’accumulent sur votre disque pour <strong>un PC plus propre et un système plus stable.</strong></dd>
            </dl>
            <dl>
              <dt></dt>
              <dd><strong>Performance de jeu plus fluide</strong> grâce à des processus inutiles automatiquement désactivés et à la libération de RAM.</dd>
            </dl>
            <dl>
              <dt></dt>
              <dd><strong>Un PC plus rapide</strong> avec une connexion Internet 300% plus rapide et un démarrage 200% plus rapide.</dd>
            </dl>
          </div>
          <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
        </div>
        <div class="db-box fl clearfix on">
          <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
          <div class="box fl">
            <h3><i></i>Driver Booster 6 PRO</h3>
            <dl>
              <dt></dt>
              <dd><strong>Chargement plus rapide du jeu</strong> grâce à des composants de jeu nécessaires et mis à jour.</dd>
            </dl>
            <dl>
              <dt></dt>
              <dd>Corrige et met automatiquement à jour plus de 3 000 000 pilotes pour <strong>maximiser les performances du PC.</strong></dd>
            </dl>
            <dl>
              <dt></dt>
              <dd><strong>Une meilleure expérience de jeu</strong> avec les pilotes Game Ready et les composants de jeu mis à jour et appropriés.</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- together end -->

  <!-- features -->
  <div class="features">
    <div class="wrapper">
      <h2>En plus de ces fonctionnalités ci-dessus, vous profiterez de :</h2>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></span>
          <p>Protection des confidentialités</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></span>
          <p>Protection à empreinte numérique</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></span>
          <p>Mise à jour automatique des pilotes</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></span>
          <p>Correction d’erreur des périphériques</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- end features -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Ces deux outils très efficaces pour votre PC et jeu ! Ne vous en manquez pas ! </h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos!
          </p>
        </div>
        <p><strong>29<big>,</big></strong> <span><del>124,84€</del>99€ </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-asc123pcdb3pc&ref=fr_ascdb2999purchase1811b<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018b-fr')">
          VITE, J’EN PROFITE
        </a>
        <p class="year">1 an d’abonnement / 3 PC</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->


  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Approuvé par ces médias célèbres du monde</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div class="review-box">
      <div class="reviews clearfix">
        <h2>Avis des utilisateurs</h2>
        <p>« Ceci est l'un des meilleurs programmes de mise à jour du pilote. Microsoft m'a même suggéré des mises à jour qui n’étaient pas compatible pas avec ma machine. Ce programme savait quelles mises à jour je devais installer sans problème. Il fonctionne parfaitement. Facile à utiliser, informatif et intuitif. Driver Booster restera dans ma boîte à outils pour toujours ... Bon boulot ! » </p>
      </div>
      <div class="reviews clearfix">
        <h2>Avis des utilisateurs</h2>
        <p>« Avec Driver Booster, je peux facilement trouver les pilotes obsolètes et les mettre à jour avec simplicité. En outre, il m’aide à corriger l’erreur sonore, l’erreur réseau, l’erreur de périphérique etc. Je n’y croyais pas avant de l’utiliser, mais après l’avoir essayé je l’ai aimé parce que mon PC est plus rapide et plus stable que je ne le pensais... Merci à IObit. »</p>
      </div>
      <div class="reviews clearfix active">
        <h2>Avis des médias</h2>
        <p>« IObit développe de nombeux utilitaires, et Driver Booster PRO, qui met automatiquement à jour vos pilotes, est l’un de ses meilleurs utilitaires. Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. L’interface utilisateur personnalisée affiche des informations matérielles spécifiques. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un. »</p>
      </div>
      <div class="reviews clearfix">
        <h2>Avis des médias</h2>
        <p>« Il n'y a rien de pire qu'un ordinateur qui tombe en panne trop souvent. Cela entrave votre capacité à travailler ou à jouer à des jeux. Advanced SystemCare répare tous les problèmes indépendants en nettoyant les fichiers indésirables, les logiciels malveillants et les entrées de registre invalides. Il offre également la possiblité de donner un coup de pouce à votre ordinateur pour optimiser l'expérience PC. »</p>
      </div>
      <div class="reviews clearfix">
        <h2>Avis des utilisateurs</h2>
        <p>« Ce programme est le meilleur que j’ai jamais essayé. Mon ordinateur est beaucoup plus performant depuis que j’ai téléchargé ASC. Il a nettoyé les fichiers indésirables, les fichiers en double et les dossiers vides. Je l’ai aussi utilisé pour déchiqueter des fichiers. Je vous recommande d’acheter ce programme, pas cher et très efficace pour maximiser les performances de votre PC. Vous allez l’adorer, je vous le promets. »</p>
      </div>
      <div class="reviews clearfix">
        <h2>Avis des utilisateurs</h2>
        <p>« J’aime beaucoup les fonctionnalités de base dans la version gratuite et finalement j’ai acheté la version complète. Il gardait mon ordinateur propre et loin de tout « bug » depuis plusieurs années et il ne m’a jamais laissé tombé jusqu’à présent. J’ai contacté récemment l’équipe d’Advanced SystemCare, et ils m’ont répondu en un jour ou deux avec tout ce que je voulais savoir. D’après moi, le support service est un énorme facteur décisif concernant la fidélisation de ce produit, et ASC est le gagnant à la fois en produit et en support. »</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Wayne-Bowler.png" alt="Wayne Bowler"><span></span></div>
        <strong>Wayne Bowler</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Myo-Thuya.png" alt="Myo Thuya"><span></span></div>
        <strong>Myo Thuya</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/PCMAG-editchoice.png" alt="PC Magazine"><span></span></div>
        <strong>PC Magazine</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/cnet.png" alt="Cnet"><span></span></div>
        <strong>Cnet</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Loretta-Harnarine.png" alt="Loretta Harnarine"><span></span></div>
        <strong>Loretta Harnarine</strong>
      </li>
      <li class="last">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Bruce-Ramsay.png" alt="Bruce Ramsay"><span></span></div>
        <strong>Bruce Ramsay</strong>
      </li>
    </ul>
  </div>
  <!-- end review  -->

  <!-- bottomcart -->
  <div class="btmcart">
    <div class="wrapper">
      <div class="leftpart">
        <img src="<?php echo getStaticUrl('images/btmpacks.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  clients online, <em class="packimg">
            <b id="packbox" class="reduceGift packbox">
              <b class="list">
                <strong>0</strong>
              </b>
              <b class="list">
                <strong>0</strong>
              </b>
            </b></em> unités dispos!
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Vite! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms</p>
      </div>
      <div class="price">
        <p><strong>29<big>,</big></strong> <span><del>124,84€</del>99€ </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-asc123pcdb3pc&ref=fr_ascdb2999purchase1811c<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018c-fr')">
          VITE, J’EN PROFITE
        </a>
      </div>
    </div>
  </div>
  <!-- end btmcart -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Essayez pendant 60 jours, sans risque.</h4>
            <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat</p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Nous acceptons</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Note:</dt>
          <dd>*. Les données peuvent varier en fonction du système ou de l'ordinateur.</dd>
          <dd>*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit.  Tous droits réservés</p>
      </div>
      <!-- footer end -->
    </div>
  </div>

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=fr-asc123pcdb3pc2899&ref=fr_ascdb2899purchasepop1811c<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc";
  var _ga = "ga('send', 'event', 'ascdbbuy', 'buy', 'ascpurchase-ascdb2018popup-fr')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>