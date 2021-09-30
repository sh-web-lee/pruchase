<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(126,158);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='friumon'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=rand(78,98);
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}
$transData=json_decode(base64_decode($_GET['data']));
$fileSize=$transData->cleanuninstall->extra;
$fileSizeShow=number_format($fileSize/(1024*1024),0);
if(($fileSize/(1024*1024))>=10){
  $fileSizeStr=$fileSizeShow.' MB';
}else{
  $fileSizeStr='';
}

$refStr='';
if(in_array($_GET['st'],array('iu_xmas','iuxmasr','iu_ascxmas','iu_dbxmas','iu_imfxmas'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if($_GET['pop']=='x_iu'){
  $refStr.='-'.$_GET['pop'];
}
if(preg_match('/^([0-9]*)\.([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1].'-'.$matches[2];
  $refStr.='-'.$ver;
}
if(in_array($_GET['st'],array('iu_wr'))){
  $refStr.='-'.$_GET['st'];
}
if(!empty($_GET['user'])){
  $refStr.='-'.$_GET['user'];
}
if(!empty($_GET['insday'])){
  $refStr.='-'.$_GET['insday'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Économisez jusqu'à 60% sur IObit Uninstaller PRO et obtenez les cadeaux exclusifs, quantités ultra limitées !</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Cabin:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
      <p class="choice">Nous enregistrerons automatiquement les modifications du système apportées par les installations </p>
      <div class="clearfix">
        <div class="left-img">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO">
        </div>
        <div class="right-message">
          <h2>Passez à IObit Uninstaller 11 PRO</h2>
          <h3>Désinstaller vos logiciels sans laisser de traces</h3>
          <p class="price"><strong><b>14</b>,99€</strong> <del>39,99€</del></p>
          <p class="pc">1 an d'abonnement / 3 PC</p>
         <div class="number-message">
          <div class="number">
            <div class="countdown">
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
            </div>
            <p>Vite, que <span class="gift">52</span> offres restantes!</p>
          </div>
          <div class="buy-content">
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=fr-iu113pc1499&ref=fr_iu11single1499monitorb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iumonitorbpurchase-fr');" >
              <i></i> <span>J’en profite vite</span>
            </a>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end-->

  <!-- feature --> 
  <div class="feature">
    <div class="wrapper">
      <div class="title-small">
        <h2>Pourquoi passez à IObit Uninstaller 11 PRO?</h2>
        <span>PROPRE</span>
      </div>
      <div class="feature-box clearfix">
        <div class="feature-list left fl">
          <h3>Facile d’utilisation</h3>
          <p>
            1-clic pour supprimer les programmes, y compris les programmes tenaces qui ne peuvent pas être désinstallés par des moyens conventionnels.
          </p>
          <img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/>
        </div>
        <div class="feature-list right fr">
          <h3>Plus aucun résidus</h3>
          <p>
           Supprimez automatiquement tous les fichiers et registres des logiciels dont vous n'avez plus besoin.
          </p>
          <img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/>
        </div>
        <img class="screen" src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <b class="uninstall">uninstall</b>
      </div>
      <span class="arrow-down"></span>
    </div>
  </div>
  <!-- feature end -->

  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2>Plus de bénéfices que vous obtiendrez de <br> IObit Uninstaller PRO</h2>
      <div class="benfits-box">
        <img class="screen" src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
        <dl class="list01">
          <dt>Suppression des installations parasites (Bundleware)</dt>
          <dd>
          Analyse et suppression complètes des programmes présentant des problèmes de désinstallation et qui ne peuvent pas être désinstallés par des moyens conventionnels.  
          </dd>
          <dd><strong>*VERSION PRO SEULEMENT</strong></dd>
        </dl>
        <dl class="list02">
          
          <dt>Mise à jour des logiciels</dt>
          <dd>Mettez à jour en 1 clic tous vos logiciels importants sans passer par le navigateur internet.</dd>
          <dd><strong>*VERSION PRO SEULEMENT</strong></dd>
        </dl>
        <dl class="list03 green">
          <dt>Nettoyage en profondeur</dt>
          <dd>Nettoyez automatiquement les résidus laissés des programmes désinstallés qui ne sont pas supprimés avec IObit Uninstaller.</dd>
          <dd><strong>*VERSION PRO SEULEMENT</strong></dd>
        </dl>
        <dl class="list04 green">
          <dt>Navigateur rapide et sûr</dt>
          <dd>Identifiez les plug-ins malveillants et publicitaires pour garantir une expérience de navigation sécurisée.</dd>
          <dd><strong>*VERSION PRO SEULEMENT</strong></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- benfits end -->


  <div class="review wrapper">
    <h2>Que disent les autres ?</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></dt>
            <dd>
              <h2>Avis des médias</h2>
              <p>
                « IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot. Il proposera aux utilisateurs une fonctionnalité Analyse Approfondie pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. »
              </p>
              <cite>MakeUseOf</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                J'utilise les programmes IObit depuis plusieurs années avec une grande satisfaction! Pour cette raison, je reste fidèle aux produits IObit. Dans le passé, j’ai entretenu et réparé des ordinateurs portables et des téléphones portables (android) et les ai toujours laissés, avec les produits IObit installés. J’ai toujours dit à mes clients que cela corrigera et accélérera automatiquement leur ordinateur portable / ordinateur / mobile! :) Je recommande vivement le programme de désinstallation (et la dernière version bêta) en tant que programme fiable et sûr qui permet de désinstaller les programmes les plus tenaces! Plus important encore, supprimer le code "caché" que le programmeur avait l'intention de laisser, ce qui obligerait ensuite les publicités à être réinstallées! Tous les produits IObit sont sûrs et faciles à utiliser pour optimiser votre PC.
              </p>
              <cite>Jeff A Watts</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                Je trouve le programme de désinstallation IObit excellent, car il répond à vos attentes. J'aime le fait qu'il désinstalle tous les fragments restants. Il dispose également d'un programme de mise à jour du logiciel qui vous rappelle lorsque l'un des programmes doit être mis à jour. La désinstallation des programmes de traitement par lots en fait un outil de choix. En fait, c’est essentiellement ce dont vous avez besoin pour garder votre ordinateur en état de fonctionner.
              </p>
              <cite>Lynette van Niekerk</cite>
            </dd>
          </dl>                 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                IObit Uninstaller est le meilleur logiciel pour supprimer des programmes sur ordinateur, il est rapide et très efficace, il est incomparable face au programme de désinstallation de base de Windows. Il nettoie entièrement tous les résidus de programme et évite ainsi tout ralentissement de l'ordinateur. J’utilise IObit Uninstaller depuis quelques mois et je ne peux désormais plus m’en passer. Je le recommande à mes amis et à ma famille. Merci, IObit Uninstaller est fantastique.
              </p>
              <cite>Paulo Martins</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>
                « IObit Uninstaller s’améliore avec chaque mise à jour. Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. »
              </p>
              <cite>Lovro Žužić</cite>
            </dd>
          </dl>
        </div>               
    </div>
  </div>
  
  <div class="bottom">
      <div class="award wrapper ">
        <h2>APPROUVÉ PAR LES MÉDIAS CÉLÈBRES DU MONDE</h2>
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
      <dd>
        *.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.
      </dd>
      <dd>*. Les données peuvent varier en fonction du système ou de l'ordinateur.</dd>
    </dl>

    <!-- footer -->
    <div class="footer">    
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>


  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img">
        <img src="<?php echo getStaticUrl('images/fl-iu-box.png')?>" alt=" IObit Uninstalller PRO">
      </div>
      <div class="number">
        <div class="countdown">
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
          <div class="scroll-tick"><span>0</span></div>
        </div>
        <p><span class="viewNum"><?php echo $viewNum;?></span> personnes en ligne, plus que <span class="gift">50</span> disponibles</p>
      </div>
      <p class="price"> <del>39,99€</del> <strong><b>14</b>,99€</strong></p>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=fr-iu113pc1499&ref=fr_iu11single1499monitorb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iumonitorbpurchase-fr');">
        <i></i> <span>J’en profite vite</span>
      </a>
    </div>
  </div>
  <div class="pop-over ">
    <h2>Surprise! Des cadeaux offerts pour notre visiteur chanceux</h2>
    <h3>Activez IObit Uninstaller Pro aujourd’hui pour obtenir des cadeaux (d’une valeur de 69,98€)</h3>
    <p>Offre limitée ! <strong><span class="count-time">60</span>s</strong> Restantes</p>
    <img src="<?php echo getStaticUrl('images/pop-iu-box.png')?>" alt=" IObit Uninstalller PRO" class="imgbox">
    <a class="buybtn buybtn-pop" 
       href="https://www.iobit.com/buy.php?product=fr-iu113pcsdpf1499&ref=fr_iu11bundle1499monitorb<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu"
       onclick="ga('send', 'event', 'iubundlebuy', 'buy', 'iumonitorbpurchase-fr');">
      Obtenir mes cadeaux
    </a>
  </div>
  <div class="pop-bg "><span class="close">X</span></div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>