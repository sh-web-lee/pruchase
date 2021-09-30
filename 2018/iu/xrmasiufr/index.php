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
  $cName='friu'.$date;
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

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_iu'))){
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
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <!-- title -->
      <h1>Offre Spéciale de Noël</h1>
      <p class="best">Profitez des cadeaux exclusifs uniquement pour Noël – une fois par an seulement !</p>
      <!-- palen -->
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
          <div class="hint">
            <dl class="pop-bg">
              <dt>Smart Defrag 6 PRO  <span><b>0€</b> <del>29,99€</del></span></dt>
              <dd>
                Une défragmentation rapide & profonde pour optimiser le disque dur & les performances du PC
              </dd>
              <dt>Protected Folder <span><b>0€</b> <del>39,99€</del></span></dt>
              <dd>Un outil de protection efficace des fichiers qui garantit la sécurité des dossiers, des données et de la vie privée !</dd>
            </dl>
          </div>
        </div>
        <div class="right fr">
          <h2>IObit Uninstaller 8 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos ! 
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Vite! <b>05</b>M: <b>00</b>S: <b class="last">000</b>Ms</p>
            </div>
            <p><strong>14<big>,99€</big></strong> <del> 99,97€</del></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-iu8pfsd1499&ref=fr_iu8pfsd1499purchase1811a<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xmasra-fr')">
              VITE, J’EN PROFITE
            </a>
            <p class="year">1 an d’abonnement / 3 PC</p>
          </div>
        </div>
      </div>
    </div>

    <!-- snow -->
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
      <h2>Un PC plus propre et plus sûr sans programmes tenaces ou plug-ins malveillants</h2>
      <p class="over">
        Plus de 25 000 000 utilisateurs choisissent IObit Uninstaller PRO comme outil de désinstallation afin de garantir une navigation en ligne plus sûre et un ordinateur plus propre
      </p>
      <img class="screen" src="<?php echo getStaticUrl('images/iu-screen.png')?>" alt="IObit Uninstaller 8 PRO"/>
      <div class="clearfix">
        <div class="fl">
          <!-- Rengöring av Bundleware -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
            <dd>
              <h3>Nettoyage de Bundleware</h3>
              <p>
                Débarrassez-vous des bundlesware ennuyeux qui se sont installés de manière imperceptible afin de libérer de l'espace
              </p>
              <p><b>*Fonction exclusive à la version PRO</b></p>
            </dd>
          </dl>
          <!-- Borttagning av Felaktiga Plugins  -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
            <dd>
              <h3>Suppression de plug-ins malveillants</h3>
              <p>
                Supprime les plug-ins malveillants ou publicitaires afin d’assurer une navigation en ligne sécurisée 
              </p>
              <p><b>*Fonction exclusive à la version PRO</b></p>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <!-- Inga Envisa Program -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
            <dd>
              <h3>Fin des programmes tenaces</h3>
              <p>
                Déinstalle les programmes tenaces qui ne peuvent pas être supprimés par d'autres désinstallateurs
              </p>
              <p><b>*Fonction exclusive à la version PRO</b></p>
            </dd>
          </dl>
          <!-- Rengör Rester Automatiskt -->
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
            <dd>
              <h3>Nettoyage automatique des restes</h3>
              <p>
                Détecte et nettoie automatiquement les restes des programmes désinstallés, y compris ceux supprimés par d'autres désinstallateurs. 
              </p>
              <p><b>*Fonction exclusive à la version PRO</b></p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Obtenez Pro pour un PC plus propre et une navigation plus sécurisée</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 8 PRO"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos !
          </p>
        </div>
        <p><strong>14<big>,99€</big></strong> <del>99,97€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-iu8pfsd1499&ref=fr_iu8pfsd1499purchase1811b<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xmasrb-fr')">
          VITE, J’EN PROFITE
        </a>
        <p class="year">1 an d’abonnement / 3 PC</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- comparison start -->
  <div class="comparison" id="compare">
    <div class="wrapper">
      <h2>Profitez des avantages de Pro, si vous l’activez maintenant</h2>
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="itema">IObit Uninstaller <br> Free</th>
          <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
          <th class="itemc"><span>IObit Uninstaller <br> <b>Pro</b></span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="itema"><i class="all-icons free">√</i></td>
          <td class="itemb">Désinstalle les programmes indésirables et les plug-ins</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Désinstalle les Bundleware</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Supprime les programmes tenaces</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Supprime les plug-ins malveillants ou publicitaires</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Nettoie automatiquement les restes</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Met à jour les programmes en un clic </td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema"><i class="all-icons close">×</i></td>
          <td class="itemb">Mise à jour automatique vers la dernière version</td>
          <td class="itemc"><i class="all-icons pro">√</i></td>
        </tr>
        <tr>
          <td class="itema last"></td>
          <td class="itemb"></td>
          <td class="itemc last"></td>
        </tr>
        </tbody>
      </table>
    </div>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h3>NE VOUS EN MANQUEZ PAS !</h3>
      <h2>Bénéficiez d'une réduction exclusive de 85% pour rendre votre PC plus propre, plus rapide et plus sécurisée.</h2>
      <div class="price">
        <p><strong>14<big>,99€</big></strong> <del>99,97€</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-iu8pfsd1499&ref=fr_iu8pfsd1499purchase1811c<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xmasrc-fr')">
          VITE, J’EN PROFITE
        </a>
        <p id="footdown" class="countdown">Vite! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms</p>
      </div>
    </div>
  </div>
  <!-- footbuy end -->

  <!-- review -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/fernando.png" alt="Fernando Lourenço Gomes"></dt>
          <dd>
            <h2>Avis d’utilisateur</h2>
            <h4>《IObit Uninstaller, un outil pratique et efficace destiné à désinstaller des programmes, des barres d’outils et plug-ins. 》
            </h4>
            <p>《Il est très utile pour moi parce que cet outil parfait me permet de désinstaller les programmes et applications indésirables, et de nettoyer les restes dans le registre Windows ainsi que l’ensemble des fichiers et dossiers associés au programmes. Bravo jamais je n’ai pu avoir aussis efficace, je le recommande vivement! 》
            </p>
            <cite>Fernando Lourenço Gomes</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/pc-magazine.png" alt="PC.MAGAZINE"></dt>
          <dd>
            <h2>Avis des médias</h2>
            <h4>《Si vous avez besoin d’un programme vous permettant de désinstaller complètement et proprement des applications, séléctionnez IObit Uninstaller. 》
            </h4>
            <p>
              《Cet utilitaire, compatible parfaitement avec Win 10, est mesure de désinstaller des applications en toute simplicité, y compris des fichiers restants dans le registre Windows lors que vous supprimez des logiciels en utilisant le désinsatalleur intégré sous Windows, ainsi que les barres d’outils et plug-ins du navigateur agaçants. En un mot, si vous utilisez un PC sous Windows, je vous recommande IObit Uninstaller. 》
            </p>
            <cite>PC.MAGAZINE</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo $pResUrl;?>images/makeuseof.png" alt="MakeUseOf"></dt>
          <dd>
            <h2>Avis des médias</h2>
            <h4>
              《Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot d’applicationssur PC. 》
            </h4>
            <p>
              《IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Il proposera aux utilisateurs une fonctionnalité "Analyse Approfondie" pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. 》
            </p>
            <cite>MakeUseOf</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end review -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Approuvé par ces médias célèbres du monde</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Essayez pendant 60 jours, sans risque.</h4>
            <p>Garantie satisfait ou remboursé pendant 60 jours après la date d’achat.</p>
          </dd>
        </dl>
        <dl class="fr clearfix">
        
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
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rechten voorbehouden</p>
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
  var imgSrc = "<?php echo getStaticUrl('images/iu-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=fr-iu8pfsd1399&ref=fr_iu8pfsd1399purchase1811pop<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu&tw=-8";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', 'iupurchase1811xmasrd-fr')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>