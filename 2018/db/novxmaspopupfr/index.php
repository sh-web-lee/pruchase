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
  $cName='frdbpre'.$date;
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
if(in_array($_GET['pop'],array('x_db','xr_db'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Profitez d'un rabais exclusif, le plus élevé jamais partiqué par IObit - Offre Spéciale de Noël</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>
<body>
  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Offre Spéciale de Noël</h1>
        <p class="best">Profitez des cadeaux exclusifs uniquement pour Noël – une fois par an seulement !</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
            <div class="ghost"></div>
          </div>
          <div class="right fr">
            <h2>Driver Booster 6 PRO</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients online, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos !  
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Vite!  <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
              </div>
              <p><strong>19<big>,</big></strong><span>99€ <del>174,82€</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-db6iusdpf1999&ref=fr_db6rightcorner1999purchase1811a<?php echo $refStr;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasexrdba1811-fr')">
                 VITE, J’EN PROFITE
              </a>
              <p class="year"> 1 an d’abonnement / 3 PC</p>
              <em class="moneyback"></em>
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
        <h2>Mettez à jour les pilotes obsolètes, manquants et défectueux en un clic!</h2>
        <p class="over">
          Plus de 150 millions d’utilisateurs dans le monde ont confiance à Driver Booster PRO pour faciliter la mise à jour des pilotes sur leur ordinateur et améliorer les peformances de jeu.
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt="Driver Booster PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Mettez à jour plus de 3 000 000 pilotes</h3>
                <p>
                  Détecte et met automatiquement à jour plus de 3 000 000 pilotes afin d’éviter le plantage et d’améliorer la stabilité du système.
                </p>
                <p><b>Base de données 20% plus grande.</b></p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Expérience de jeu plus fluide jamiais</h3>
                <p>
                  Détecte automatiquement les composants de jeu et les pilotes liés au jeu afin de vous apporter des performances de jeu maximales. La vitesse de certains jeux a été augmentée de 39%.
                </p>
                <p><b>*Fonction exclusive à la version PRO</b></p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Mise à jour des pilotes plus rapide</h3>
                <p>
                  Pré-télécharge vos pilotes pour gagner du temps et éviter les ralentissements ou blocages de l’ordinateur pendant la mise à jour.
                </p>
                <p><b>*Fonction exclusive à la version PRO</b></p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Résout les problèmes de son et réseau</h3>
                <p>
                  Corrige les erreurs de périphériques afin de diminuer les conflits avec votre imprimante, écran, Internet, souris et vos périphériques externes.
                </p>
                <p><b>*Fonction exclusive à la version PRO</b></p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->

    <!-- donation start -->
    <div class="donation wrapper clearfix">
      <h2>Les cadeaux exclusifs uniquement pour Noël 2018 !</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
        <dd>
          <h3>Smart Defrag 6 PRO</h3>
          <del>29,99€</del> <strong>0<small>€</small></strong> 
          <p>Maximisez les performances du disque dur et de votre PC. </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
        <dd>
          <h3>Protected Folder </h3>
          <del>39,99€</del> <strong>0<small>€</small></strong> 
          <p>Protégez vos fichiers et vos données importants contre le vol, la perte et les fuites.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller 8 PRO"/></dt>
        <dd>
          <h3>IObit Uninstaller 8 PRO</h3>
          <del>29,99€</del> <strong>0<small>€</small></strong> 
          <p>Désinstallez les bundlewares, programmes indésirables et les plug-ins en un clic.</p>
        </dd>
      </dl>
    </div>
    <!-- donation end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Facilitez la mise à jour des pilotes et profitez des performances de jeu maximales</h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients online, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos! 
            </p>
          </div>
          <p><strong>19<big>,</big></strong> <span>99€<del>174,82€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-db6iusdpf1999&ref=fr_db6rightcorner1999purchase1811b<?php echo $refStr;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasexrdbb1811-fr')">
            VITE, J’EN PROFITE
          </a>
          <p class="year">1 an d’abonnement / 3 PC</p>
          <em class="moneyback"></em>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>Ce que vous gagnerez en passant à la version PRO:</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">Driver Booster  <br>Free</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>Driver Booster  <b>Pro</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">2 500 000+</td>
              <td class="itemb">Base de données des pilotes</td>
              <td class="itemc">3 000 000+</td>
            </tr>
            <tr>
              <td class="itema">limité</td>
              <td class="itemb">La vitesse du téléchargement des pilotes</td>
              <td class="itemc">illimité</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Mise à jour automatique des pilotes obsolètes</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Sauvegarde automatique des pilotes</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Correction des erreurs de périphériques</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Priorité pour mettre à jour les composants de jeu</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Priorité pour mettre à jour les pilotes Game Ready</td>
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
        <h3>Ne vous en manquez pas !</h3>
        <h2>Bénéficiez de 88% de réduction exclusive pour garder vos pilotes à jour en un clic.</h2>
        <div class="price">
          <p><strong>19<big>,</big></strong> <span>99€<del>174,82€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-db6iusdpf1999&ref=fr_db6rightcorner1999purchase1811c<?php echo $refStr;?>&refs=fr_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasexrdbc1811-fr')">
            VITE, J’EN PROFITE
          </a>
          <p id="footdown" class="countdown">Vite! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc-mag.png')?>" alt="PC Magazine"></dt>
          <dd>
            <h2>Avis des médias</h2>
            <p>
              « IObit développe de nombeux utilitaires, et Driver Booster PRO, qui met automatiquement à jour vos pilotes, est l’un de ses meilleurs utilitaires. Driver Booster PRO, simple et efficace, offre de multiples fonctionnalités et des clés de licence pour un bon prix. L’interface utilisateur personnalisée affiche des informations matérielles spécifiques. Bien que les concurrents Ashampoo Driver Updater et SlimWare Utilities DriverUpdate offrent également des fonctionnalités intéressantes, IObit Driver Booster PRO reste absolument numéro un. »
            </p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>
              « Avec Driver Booster, je peux facilement trouver les pilotes obsolètes et les mettre à jour avec simplicité. En outre, il m’aide à corriger l’erreur sonore, l’erreur réseau, l’erreur de périphérique etc. Je n’y croyais pas avant de l’utiliser, mais après l’avoir essayé je l’ai aimé parce que mon PC est plus rapide et plus stable que je ne le pensais... Merci à IObit. »
            </p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>
              « Driver Booster est une application sensationnelle. Si vous êtes comme moi et que vous avez de nombreuses applications et périphériques ou pilotes et que vous n’avez pas le temps de les mettre à jour manuellement, je recommande vivement Driver Booster, il vous aide rapidement et facilement à mettre à jour les pilotes. »
            </p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
          <dd>
            <h2>Avis des utilisateurs</h2>
            <p>
              « Ceci est l'un des meilleurs programmes de mise à jour du pilote. Microsoft m'a même suggéré des mises à jour qui n’étaient pas compatible pas avec ma machine. Ce programme savait quelles mises à jour je devais installer sans problème. Il fonctionne parfaitement. Facile à utiliser, informatif et intuitif. Driver Booster restera dans ma boîte à outils pour toujours ... Bon boulot ! » 
            </p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->


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
              <p>Garantie satisfait ou remboursé pendant 60 jours après la <br> date d’achat.</p>
            </dd>
          </dl>
          <dl class="fr">
            <dd>
              <h4>Nous acceptons </h4>
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
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
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
    var imgSrc = "<?php echo getStaticUrl('images/db-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=fr-db6iusdpf1899&ref=fr_db6rightcornerpopup1899purchase1811<?php echo $refStr;?>&refs=fr_purchase_db&tw=-8";
    var _ga = "ga('send', 'event', 'dbbuy', 'buy', 'dbpurchasexrdbd1811-fr')";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>