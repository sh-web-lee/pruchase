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
  $cName='frimfpre'.$date;
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
if(in_array($_GET['pop'],array('xr_imf'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Jusqu'à -85% sur IObit Malware Fighter PRO - Offre Spéciale de Noël -IObit</title>
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
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>Offre Spéciale de Noël</h1>
        <p class="best">Profitez des cadeaux exclusifs uniquement pour Noël – une fois par an seulement !</p>
        <div class="palen clearfix">
          <div class="left fl">
            <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
            <div class="hint">
              <dl class="pop-bg">
                <dt>Smart Defrag 6 PRO    <span><b>0€ </b> <del>29,99€</del></span></dt>
                <dd>Une défragmentation rapide & profonde pour optimiser le disque dur & les performances du PC</dd>
                <dt>AMC Security PRO     <span><b>0€ </b> <del>19,99€</del></span></dt>
                <dd>Application tout-en-un pour nettoyer et optimiser votre appareil Android</dd>
              </dl>
            </div>
          </div>
          <div class="right fr">
            <h2>IObit Malware Fighter 6 Pro</h2>
            <div class="price">
              <div class="count">
                <p class="watching">
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients sur la page <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos !  
                </p>
                <div class="progressbar">
                  <span></span>
                </div>
                <p id="bandown" class="countdown">Vite!  <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms Restantes</p>
              </div>
              <p><strong>19<big>,</big></strong><span>99€ <del>129,97€</del></span></p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf63pcsdamc1999&ref=fr-imf63pcsdamcpurchase1999a<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1999xrimfa-fr')">
                 VITE, J’EN PROFITE
              </a>
              <p class="year"> 1 an d’abonnement / 3 PC</p>
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
        <h2>Pour une cyber-sécurité et une protection complète contre le piratage </h2>
        <p class="over">
          Plus de 5 500 000 utilisateurs choisissent IObit Malware Fighter Pro comme moyen de sécurité en ligne pour se protéger des virus, des ransomwares, des logiciels espions, des chevaux de Troie, des logiciels publicitaires, du fishing et autres logiciels malveillants.
        </p>
        <img class="screen" src="<?php echo getStaticUrl('images/imf-screen.png')?>" alt="IObit Malware Fighter PRO"/>
        <div class="clearfix">
          <div class="fl">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
              <dd>
                <h3>Protection complète <b class="sign">Améliorée </b></h3>
                <p>
                 Double protection grâce au moteur antivirus avancé de Bitdefender et au moteur antimalware IObit doté d’une plus grande base de données.
                </p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
              <dd>
                <h3>Protection des disques au démarrage<b>nouveau </b></h3>
                <p>Protège le PC contre les attaques malveillantes, en particulier les attaques de ransomware au cours du processus de démarrage.</p>
              </dd>
            </dl>
          </div>
          <div class="fr">
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
              <dd>
                <h3>Fin des attaques de ransomware <b class="sign">Améliorée</b></h3>
                <p>Le moteur anti-ransomware bloquera de manière proactive tout Ransomware qui tentera de s'introduire dans votre PC, comme Petya ou GoldenEye.</p>
              </dd>
            </dl>
            <dl class="clearfix">
              <dt><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></dt>
              <dd>
                <h3>Protection en temps réel  <b class="sign">Améliorée</b></h3>
                <p>Bloque et supprime automatiquement plus de 200 millions de menaces en temps réel et empêche les suivis de données nuisibles.</p>
              </dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
    <!-- feature end -->
    <!-- centbuy start -->
    <div class="centbuy">
      <h2>Passez Pro pour une protection en ligne complète et plus intelligente </h2>
      <div class="wrapper clearfix">
        <div class="fl">
          <img src="<?php echo getStaticUrl('images/imf-small-box.png')?>" alt="IObit Malware Fighter PRO"/>
        </div>
        <div class="price fr">
          <div class="count">
            <p class="watching">
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> clients online, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> unités dispos! 
            </p>
          </div>
          <p><strong>19<big>,</big></strong> <span>99€<del>129,97€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf63pcsdamc1999&ref=fr-imf63pcsdamcpurchase1999b<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1999xrimfb-fr')">
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
        <h2>Ce que vous obtiendrez avec Pro, si vous activez maintenant :</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema">IObit Malware Fighter <br>Free</th>
              <th class="itemb"><img src="<?php echo getStaticUrl('images/vs.png')?>"></th>
              <th class="itemc"><span>IObit Malware Fighter <b>Pro</b></span></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td class="itema">Basique</td>
              <td class="itemb">Protection contre Malware & Virus </td>
              <td class="itemc">Moteur Bitdefender Anti-virus </td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protection Anti-ransomware</td>
              <td class="itemc">Moteur Anti-ransomware</td>
            </tr>
            <tr>
              <td class="itema">Basique</td>
              <td class="itemb">Protection en temps réel</td>
              <td class="itemc"> Complète</td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protection des disques au démarrage</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protection de votre webcam</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protection des fichiers importants</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Efface automatiquement les traces de navigations internet</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema"><i class="all-icons close">×</i></td>
              <td class="itemb">Protection des disques USB</td>
              <td class="itemc"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">Protection de la RAM </td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
            </tr>
            <tr>
              <td class="itema last"><i class="all-icons close">×</i></td>
              <td class="itemb">Mise à jour automatique vers la dernière version </td>
              <td class="itemc last"><i class="all-icons pro">√</i></td>
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
        <h2>Bénéficiez de 85% de réduction exclusive pour protéger votre PC intégralement.</h2>
        <div class="price">
          <p><strong>19<big>,</big></strong> <span>99 €<del>129,97€</del></span></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf63pcsdamc1999&ref=fr-imf63pcsdamcpurchase1999c<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_imf " onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1999xrimfc-fr')">
            VITE, J’EN PROFITE
          </a>
          <p id="footdown" class="countdown">Vite! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms</p>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

  <!-- media-rev start -->
  <div class="review wrapper">
    <div class="content">
      <dl>
        <dt><h3>Commentaire des Utilisateurs</h3></dt>
        <dd><h4>"Il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis."</h4></dd>
        <dd>"Je suis très satisfait de votre produit IObit Malware Fighter. J'ai eu beaucoup de problèmes d'interférences malveillantes auparavant, je n'ai pas pu regarder un film ou un concert entier que j'aime beaucoup. Grâce à votre produit, maintenant chaque opération est claire, sûre et bien protégée. Il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis."</dd>
      </dl>
      <dl class="active">
        <dt><h3>Avis des Médias</h3></dt>
        <dd><h4>" Il est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots."</h4></dd>
        <dd>" Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est donc compatible avec votre logiciel antivirus standard. IObit Malware Fighter 6 est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots. "</dd>
      </dl>
      <dl>
        <dt><h3>Commentaire des Utilisateurs</h3></dt>
        <dd><h4>" Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide."</h4></dd>
        <dd>"Merci d'avoir fait sortir Malware Fighter V6, c’est une autre mise à jour majeure pour vos utilisateurs. Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide. Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter. "</dd>
      </dl>
    </div>
    <ul class="users clearfix">
      <li>
        <div class="pic">
          <img src="<?php echo $pResUrl; ?>images/gelu-batir.png" alt="Gelu Batir">
        </div>
        <p>Gelu Batir</p>
      </li>
      <li class="active">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/software.png" alt="Software.Informer"></div>
        <p>Software.Informer</p>
      </li>
      <li>
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/david-cassidy.png" alt="David Cassidy"></div>
        <p>David Cassidy</p>
      </li>
    </ul>
   </div>
  <!-- media-rev end -->


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
            <dd>*.Licence gratuite d'AMC Security PRO, la version complète comprend annonces intégrées.</dd>
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
    var imgSrc = "<?php echo getStaticUrl('images/imf-mask-box.png')?>";
    var _href = "https://www.iobit.com/buy.php?product=fr-imf63pcsdamc1899&ref=fr-mf63pcsdamcpurchase1899<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_imf&tw=-8";
    var _ga = "ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1899xrimfpop-fr')  ";
    var viewNum = "<?php echo $viewNum;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>