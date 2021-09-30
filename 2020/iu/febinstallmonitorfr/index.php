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
function changeCont($to, $transData){
    switch ($to){
        case 'cleanuninstall':
            $fileSize=$transData->cleanuninstall->extra;
            $fileSizeShow=number_format($fileSize/(1024*1024),0);
            if(($fileSize/(1024*1024))>=10){
                $fileSizeStr=$fileSizeShow.' MB';
            }else{
                $fileSizeStr='';
            }
            $dataNum = $transData->cleanuninstall->reg
                +$transData->cleanuninstall->file
                +$transData->cleanuninstall->task
                +$transData->cleanuninstall->service
                +$transData->cleanuninstall->dll;
            return 'Nettoyez les '. $dataNum .' fichiers d\'enregistrement et libérez '. $fileSizeStr .' plus d\'espace';
            break;
        case 'prom_d':
            $dataNum = $transData->promote3->reg
                +$transData->promote3->file
                +$transData->promote3->task
                +$transData->promote3->service
                +$transData->promote3->dll;
            return 'Nettoyez '. $dataNum .' autres résidus avec le mode Clean Uninstall';
            break;
    }
}
$to = empty($_GET['to']) ? '' : $_GET['to'];
$data = empty($_GET['data']) ? '' : $_GET['data'];
$tData=json_decode(base64_decode($data));

if ($to == 'cleanuninstall' || $to == 'prom_d') {
    $transData = changeCont($to, $tData);
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
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <ul>
          <li class="first">
              <?php if (in_array($to, array('cleanuninstall', 'prom_d'))): ?>
                  CLEAN UNINSTALL
              <?php else: ?>
                  Moniteur d’installation
              <?php endif; ?>
          </li>

          <li class="last">
              <?php if (!in_array($to, array('cleanuninstall', 'prom_d'))): ?>
                  Surveille et consigne les changements des fichiers systèmes lors de l’installation de programmes
              <?php else: echo $transData; endif; ?>
          </li>
      </ul>
      <div class="left-img"><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstalller PRO"></div>
      <div class="right-message">
        <h1>IObit Uninstaller 11 PRO</h1>
        <h2>Rétablit les changements de votre système après la désinstallation de logiciels</h2>
        <p class="price"><strong><b>14</b>,99€</strong> <del>39,99€</del></p>
        <p class="pc"><span></span> 1 an d'abonnement / 3 PC</p>
        <div class="number-message">
          <div class="number">
            <div class="countdown">
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
              <div class="scroll-tick"><span>0</span></div>
            </div>
            <p>Vite ! Seulement <span class="gift">52</span> produits<br> restant à ce prix !</p>
          </div>
          <div class="buy-content">
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=fr-iu111y3pc1499&ref=fr_iu11single1499installmonitor<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iumonitorpurchase-fr');" >
              <i></i> <span>J’en profite vite</span>
            </a>
          </div>
        </div>
      </div>
    </div>
    
  </div>
  <!-- end banner -->

  <!-- problem -->
  <div class="problem">
    <div class="wrapper">
      <h2>Qu’est-ce que le Moniteur <span>d’installation</span> ?</h2>
      <div class="message-box">
        <div class="list01">
          <h3>Moniteur d’installation</h3>
          <p>Surveille et consigne tous les changements de votre système lors de l’installation de logiciels.</p>
        </div>
        <div class="list02">
          <h3>Journal de données</h3>
          <p>Enregistre dans un journal les modifications de vos fichiers et du registre durant l’installation de logiciels.</p>
        </div>
        <img class="screen" src="<?php echo getStaticUrl('images/screen-01.png')?>" alt=""/>
      </div>
    </div>
  </div>

  <!-- end problem -->
  <div class="feature">
    <div class="wrapper clearfix">
      <div class="left-message">
        <h2>Pourquoi activer le <span>moniteur d’installation</span> ?</h2>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
          <dd>
            <h3>Surveillez</h3>
            <p>
              Durant l’installation d’un programme monitoré, toutes les modifications de votre système sont consignées et consultable dans un journal de données.
            </p>
          </dd>
        </dl>
        <dl class="clearfix">
          <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
          <dd>
            <h3>Désinstallez</h3>
            <p>Rétablissez le registre et les fichiers systèmes affectés lors de la désinstallation d’un programme précédemment monitoré.</p>
          </dd>
        </dl>
      </div>
      <img class="img-box" src="<?php echo getStaticUrl('images/screen-02.png')?>" alt=""/>
    </div>
  </div>

  <!-- benfits -->
  <div class="benfits">
    <div class="wrapper">
      <h2>Quels sont les autres avantages<br> de IObit Uninstaller PRO ?</h2>
      <h2 class="uninstall _hide">What Other Benefits Can I Get from<br>IObit Uninstaller PRO?</h2>
      <div class="box">
        <dl class="list01">
          <dt>Suppression des programmes persistants </dt>
          <dd>Analyse et suppression complètes des programmes présentant des problèmes de désinstallation et qui ne peuvent pas être désinstallés par des moyens conventionnels.</dd>
          <dd><strong>*Version PRO seulement</strong></dd>
        </dl>
        <dl class="list02 right">
          <dt>Nettoyage complet</dt>
          <dd>Nettoie automatiquement les résidus laissés lorsque la désinstallation n’a pas été réalisée par IObit Uninstaller.</dd>
          <dd><strong>*Version PRO seulement</strong></dd>
        </dl>
        <dl class="list03">
          <dt>Mise à jour des logiciels</dt>
          <dd>Mettez vos logiciels<br> importants à jour en un<br> seul clic sans ouvrir de<br> navigateur Web.</dd>
          <dd><strong>*Version PRO seulement</strong></dd>
        </dl>
        <dl class="list04 right">
          <dt>Un navigateur internet rapide et sécurisé</dt>
          <dd>Le navigateur identifie les plugins publicitaires et malveillants pour vous assurer une navigation sécurisée.</dd>
          <dd><strong>*Version PRO seulement</strong></dd>
        </dl>
        <dl class="list05 right botright">
          <dt>Suppression des bundlewares</dt>
          <dd>Supprime les programmes indésirables s’installant avec les logiciels voulus. Vous protégeant ainsi de la pub et des vols de données.</dd>
          <dd><strong>*Version PRO seulement</strong></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->


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
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt=" IObit Uninstalller PRO">
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
         href="https://www.iobit.com/buy.php?product=fr-iu111y3pc1499&ref=fr_iu11single1499installmonitor<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu"
         onclick="ga('send', 'event', 'iubuy', 'buy', 'iumonitorpurchase-fr');" >
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
       href="https://www.iobit.com/buy.php?product=fr-iu113pcsdpf1499&ref=fr_iu11bundle1499installmonitor<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu" 
       onclick="ga('send', 'event', 'iubuy', 'buy', 'iumonitorpurchase-fr');">
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