<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(60,88);

if(!empty($_GET['action'])&&($_GET['action']=='getViewNum')){
  echo $viewNum;
  exit();
}

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='eniupre_p'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>0){
      $packsNum--;
    }
  }else{
    $packsNum=48;
  }
  setcookie($cName,$packsNum);
  echo $packsNum;
  exit();
}

$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['to'])?'':('-'.$_GET['to']));
  ?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Pré-commandez IObit Uninstaller PRO à 0€ !</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Lato:400,700' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <h1>La prévente mondiale en direct</h1>
      <h2>Dépêchez-vous, <span class="soldNum">450</span> sur 500 vendues !</h2>
     <div class="message clearfix">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="img-box">
        <div class="right-message">
          <h3>IObit Uninstaller 8 PRO</h3>
          <h4>Maintenant à : <strong>0€</strong><del>29,99€</del></h4>
          <div class="progress-bar">
            <div class="left-number">
              <span class="viewNum"><?php echo $viewNum?></span> clients en ligne, plus que, <strong class="gift">32</strong> dispo!
            </div>
            <div class="date">
              <span>Stock : 0 prévue à</span> <strong>05</strong>M: <strong>05</strong>S: <strong>05</strong>Ms
            </div>
            <div class="bar">
              <span></span>
            </div>
          </div> 
          <a href="https://www.iobit.com/buy.php?product=fr-iu8preorder30day&ref=fr_iu8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderrc-fr');" class="buybtn"><span>VITE, J’EN PROFITE</span></a>
          <p>1 an d’abonnement / 3 PC</p>
        </div>
     </div>
      <ul class="distance">
        <li>Obtenez 50% de réduction <br>sur le prix d’origine 30 <br>jours après la commande</li>
        <li class="center">  Si satisfait   <span>Pré-commandez <br>aujourd'hui à 0€</span> Si insatisfait</li>
        <li>Annulez dans les 30 <br>jours sans payer de frais</li>
      </ul>
    </div>
  </div>
  <!-- end banner -->
  <!-- benfits -->
  <div class="feature wrapper clearfix">
    <h2>Pourquoi IObit Uninstaller 8 PRO?</h2>
    <p class="number">1</p>
    <h3>Nouvelles fonctionnalités et améliorations à essayer absolument</h3>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
      <dd><span>Supprimer les Bundleware</span></dd>
      <dd>Détectez les logiciels publicitaires, <br>les barres d'outils et les <br>programmes tiers non désirés qui s'installent avec des logiciels <br>gratuits à des fins publicitaires ou voler vos données confidentielles.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
      <dd><span>Désinstaller des programmes tenaces</span></dd>
      <dd>Désinstallez complètement les programmes indésirables ou les programmes tenaces que vous ne pouvez pas désinstaller par Windows ou d'autres programmes.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
      <dd><span>Logiciel de mise à jour</span></dd>
      <dd>En un clic, mettez à niveau vos logiciels importants sur votre PC sans aucune intervention de l'utilisateur.</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
      <dd><span>Identifier les plugins <br>malveillants</span></dd>
      <dd>Supprimez les plug-ins malveillants ou publicitaires du navigateur pour garantir une expérience de <br>navigation sécurisée et propre.</dd>
    </dl>
  </div>
  <!-- end feature -->
  <!-- comparision start -->
  <div class="comparision">
    <div class="wrapper">
      <p class="number">2</p>
      <h3 class="title">Plus d'avantages de la version PRO</h3>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <td>
              <p>
                IObit Uninstaller 8 Free<br>
                <span>Votre version actuelle</span>
              </p>
            </td>
            <td></td>
            <td>
              VS
            </td>
            <td></td>
            <td>
              IObit Uninstaller 8 PRO
            </td>
          </tr>
        </thead>
        <tbody>
        <!-- 1 -->
        <tr>
          <td>
            <span class="correct"></span>
          </td>
          <td></td>
          <td>
            Désinstalle les programmes indésirables et les applications Windows
          </td>
          <td></td>
          <td>
            <span class="correct"></span>
          </td>
        </tr>
        <!-- 2 -->
        <tr>
          <td>
            <span class="error"></span>
          </td>
          <td></td>
          <td>
            Désinstalle les programmes tenaces qui refusent de se désinstaller
          </td>
          <td></td>
          <td>
            <span class="correct"></span>
          </td>
        </tr>
        <!-- 3 -->
        <tr>
          <td>
            <span class="error"></span>
          </td>
          <td></td>
          <td>
            Désinstalle les programmes tiers indésirables aux côtés de freeware
          </td>
          <td></td>
          <td>
            <span class="correct"></span>
          </td>
        </tr>
        <!-- 4 -->
        <tr>
          <td>
            <span class="error"></span>
          </td>
          <td></td>
          <td>
            Identifie et supprime les plug-ins et barres d'outils malveillants
          </td>
          <td></td>
          <td>
            <span class="correct"></span>
          </td>
        </tr>
        <!-- 5 -->
        <tr>
          <td>
            <span class="error"></span>
          </td>
          <td></td>
          <td>
            Nettoie automatiquement tous les restes qui pourraient ralentir PC
          </td>
          <td></td>
          <td>
            <span class="correct"></span>
          </td>
        </tr>
        <!-- 6 -->
        <tr>
          <td>
            <span class="error"></span>
          </td>
          <td></td>
          <td>
            Supprime les résidus que les autres utilitaires ne suppriment pas
          </td>
          <td></td>
          <td>
            <span class="correct"></span>
          </td>
        </tr>
        <!-- 7 -->
        <tr>
          <td>
            <span class="error"></span>
          </td>
          <td></td>
          <td>
            Met à jour les logiciels essentiels en un clic 
          </td>
          <td></td>
          <td>
            <span class="correct"></span>
          </td>
        </tr>
        <!-- 8 -->
        <tr>
          <td>
            <span class="error"></span>
          </td>
          <td></td>
          <td>
            Mise à jour automatique lorsqu'une nouvelle version est disponible
          </td>
          <td></td>
          <td>
            <span class="correct"></span>
          </td>
        </tr>
        <!-- 9 -->
        <tr>
          <td>
            <span class="error"></span>
          </td>
          <td></td>
          <td>
            Assistance technique Premium 24/7
          </td>
          <td></td>
          <td>
            <span class="correct"></span>
          </td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparision end -->

  <div class="between-buy wrapper">
    <p class="number">3</p>
    <h2>Payez <strong>0€</strong> pour profiter de tous les avantages PRO aujourd'hui</h2>
    <a href="https://www.iobit.com/buy.php?product=fr-iu8preorder30day&ref=fr_iu8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderrc-fr');" class="buybtn"><span>VITE, J’EN PROFITE</span></a>
    <p><span class="viewNum"><?php echo $viewNum?></span> clients en ligne, plus que <strong class="gift">35</strong> dispo!</p>
  </div>

  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav"> 
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
        <div class="content dg-wrapper">  
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt=""></dt>
            <dd>
              <h2>Avis des médias</h2>
              <p>« IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot. Il proposera aux utilisateurs une fonctionnalité Analyse Approfondie pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. » </p>
              <cite>MakeUseOf</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt=""></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>« IObit Uninstaller PRO est l’un des cinq programmes IObit de maintenance que j’ai installé sur mon PC. IObit Uninstaller est destiné à nettoyer les restes de bits et bytes cachées sur PC occupant l’espace de disque. Si j’ai utilisé la fonction désinstallation standard pour désinstaller les programmes indésirables, une annonce popup apparue plus tard montrant que 35 fichiers doivent être nettoyés. Il me suffit de cliquer OK. Recommande vivement et j’ai acheté une licence pour 3 PCs. Le service client est attentif et efficace. »</p>
              <cite>Joseph Yu</cite>
            </dd>
          </dl>             
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt=""></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>« IObit Uninstaller est probablement l'un des meilleurs logiciels pour supprimer des programmes inutiles. Contrairement au désinstalleur de Windows, ce programme supprime tous les restes du programme qui peuvent ralentir les performances de votre PC. J'ai utilisé ce programme depuis plusieurs années et il garde toujours mon ordinateur propre et rapide. J'avais recommandé ce programme à certains de mes amis et je le recommande encore aujourd'hui. »</p>
              <cite>Sergey Erlich</cite>
            </dd>
          </dl>                 
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt=""></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>« IObit Uninstaller est l'un des meilleurs programmes avec son utilisation. Simple à utiliser, nettoyer rapidement et profondément. A partir de la version 5 il a ajouté plus de fonctionnalités, non seulement la compatibilité avec Windows 10, le nettoyage rapide des plug-ins est aussi confortable. Il m’est pratique de rechercher des programmes en double et non utilisés. Merci d’avoir pris soin de mon ordinateur et ceux de ma famille. »</p>
              <cite>Áda Görtler</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt=""></dt>
            <dd>
              <h2>Avis des utilisateurs</h2>
              <p>« IObit Uninstaller s’améliore avec chaque mise à jour. Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. »</p>
              <cite>Lovro Žužić</cite>
            </dd>
          </dl>
        </div>               
    </div>
  </div>
  <div class="award">
  <div class="wrapper">
    <h2>Recommandé par ces médias</h2>
    <img src="<?php echo getStaticUrl('images/award.png')?>" alt="">
  </div>
</div>
<!-- payments -->
<div class="serive wrapper">
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/money-back-guarantee.png')?>" alt=""></dt>
    <dd><strong>Satisfait ou Remboursé</strong></dd>
    <dd>Garantie satisfait ou remboursé <br>pendant 60 jours après la <br>date d’achat.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""></dt>
    <dd><strong>Paiement 100% Sécurisé</strong></dd>
    <dd>IObit vous propose huit modes de <br>paiement sécurisés pour <br>régler vos achats.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/license.png')?>" alt=""></dt>
    <dd><strong>Obtenir la licence</strong></dd>
    <dd>Vous recevrez le code de licence <br>dans les minutes après l’achat.</dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/serive.png')?>" alt=""></dt>
    <dd><strong>Service Client à votre écoute</strong></dd>
    <dd>Notre Support Technique gratuit est à <br>votre disposition 24 heures sur 24, 7 <br>jours sur 7.</dd>
  </dl>
</div>
<!-- end payments -->
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>*À la fin de la période d'essai gratuite de 30 jours, votre carte de crédit ou votre compte PayPal sera automatiquement facturé de 14,99€.</dt>
    <dd>Ce rabais de 50% par rapport au prix original de 29,99€ est un bonus réservé uniquement aux précommandes!</dd>
  </dl>

  <!-- footer -->
  <div class="footer">    
    <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> 2018 IObit. Tous droits réservés</p>
  </div>

  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <img src="<?php echo getStaticUrl('images/fl-iu-box.png')?>" alt="" class="img-box">
       <div class="progress-bar">
        <div class="left-number">
          <span class="viewNum"><?php echo $viewNum?></span> clients en ligne, plus que <strong class="gift">32</strong> dispo! 
        </div>
        <div class="date">
          <span>Stock : 0 prévue à</span> <strong>05</strong>M: <strong>05</strong>S: <strong>05</strong>Ms
        </div>
        <div class="bar">
          <span></span>
        </div>
      </div> 
      <a href="https://www.iobit.com/buy.php?product=fr-iu8preorder30day&ref=fr_iu8preorderrc<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu" onclick="ga('send', 'event', 'iubuy', 'buy', 'iu8predorderrc-fr');" class="buybtn"><span>0€ VITE, J’EN PROFITE</span></a>
    </div>
  </div>
  <div class="pop-over">
    <h2>OOPS</h2>
    <h3>Les précommandes sont clôturées pour <br>aujourd'hui.</h3>
    <a href="https://purchase.iobit.com/fr/iu/index.php">Vérifiez une autre offre>></a>
  </div>
  <div class="pop-bg"></div>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>