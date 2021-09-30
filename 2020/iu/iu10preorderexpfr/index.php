<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum = rand(116, 198);
if ($_GET['action'] == 'getViewNum') {
    echo $viewNum;
    exit();
}

if ($_GET['action'] == 'getPacks') {
    $date = $_GET['d'];
    $c_name = 'friujunexp0716_p' . $date;
    $c_name_t = 'friujunexp0716_t' . $date;
    if ($_COOKIE[$c_name] === null) {
        $totalNum = $packsNum = rand(41, 59);
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        setcookie($c_name_t, $totalNum, time() + 3600 * 24);
    } else {
        if (intval($_COOKIE[$c_name]) <= 0) {
            $packsNum = 0;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        } else {
            $packsNum = $_COOKIE[$c_name] - 1;
            setcookie($c_name, $packsNum, time() + 3600 * 24);
        }
    }
    echo json_encode(array('packsNum' => $packsNum));
    exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
if(!empty($_GET['ver'])){
    $ver = explode('.', $_GET['ver']);
    $refStr .= ('-' . $ver[0] . $ver[1]);
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$data = json_decode(base64_decode($_GET['data']), true);
$data_arr = $data['iu10pre'];
?>
<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Profitez du nouvel IObit Uninstaller PRO pour 0€  </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico"
        mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head']; ?>    
</head>

<body>
<!-- banner start -->
<div class="banner" data-name="animation">
  <div class="wrapper">
    <div class="top">
      <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">
        IObit
      </a>
      <div class="icon">
        <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
        IObit Uninstaller 10
      </div>        
    </div>
    <div class="clearfix">
      <div class="left-img">
        <img src="<?php echo getStaticUrl('images/iu-box.png') ?>" alt="" class="iu-box" data-name="default">
        <img src="<?php echo getStaticUrl('images/banner-icon01.png') ?>" alt="" class="iu-icon01"
             data-name="default">
        <img src="<?php echo getStaticUrl('images/banner-icon02.png') ?>" alt="" class="iu-icon02"
             data-name="default">            
      </div>
      <div class="right fr">
        <h1 data-name="default">La prévente c’est maintenant ! </h1>
        <h2 data-name="default">Renouvelez votre version PRO pour 0€</h2>
        <h3 data-name="default">Limitée chaque jour aux 200 premières personnes, jusqu’au 25 Août. </h3>
        <div class="number" data-name="default">
          <div id="reduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>5</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          offres restantes
          <div class="bar">
            <span></span>
          </div> 
        </div>
        <div class="price" data-name="default">
          <strong>0€ <sup>*</sup></strong>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=fr-iu10preorder&ref=fr_iu10preorderexp<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10predorderexp-fr');">
            Renouveler maintenant !
          </a>                
        </div>              
      </div>          
    </div> 
  </div> 
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper ">
    <h2>IObit Uninstaller PRO vous a déjà beaucoup apporté :</h2>
    <div class="clearfix">
      <dl class="one" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon01.png') ?>" alt=""/></dt>
        <dd>
          Désinstalle <?php echo empty($data_arr['soft']) ? '' : '<b class="total">' . $data_arr['soft'] . '</b>'; ?> programmes, dont les <?php echo (empty($data_arr['bundle']) || empty($data_arr['soft'])) ? '' : '<b class="bundle">' . $data_arr['bundle'] . '</b>'; ?> logiciels en installation groupée et les <?php echo (empty($data_arr['stubborn']) || empty($data_arr['soft'])) ? '' : '<b class="sofeware">' . $data_arr['stubborn'] . '</b>'; ?> récalcitrants.
        </dd>
      </dl>
      <dl class="right three" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon02.png') ?>" alt=""/></dt>
        <dd>
          Désinstalle <?php echo empty($data_arr['plugin']) ? '' : '<b class="plug-total">' . $data_arr['plugin'] . '</b>'; ?> plug-ins et barre d’outils, dont les <?php echo (empty($data_arr['plugin-mp']) || empty($data_arr['plugin'])) ? '' : '<b class="mail">' . $data_arr['plugin-mp'] . '</b>'; ?> plug-ins publicitaires et malveillants.
        </dd>
      </dl>
      <dl class="two" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon03.png') ?>" alt=""/></dt>
        <?php echo (empty($data_arr['file']) || empty($data_arr['reg'])) ? '<dd>Supprime fichiers et entrées de registre. </dd>' : '<dd>Supprime <b class="files">' . $data_arr['file'] . '</b> fichiers et <b class="registries">' . $data_arr['reg'] . '</b> entrées de registre. </dd>'; ?>
      </dl>
      <dl class="right two" data-name="default">
        <dt><img src="<?php echo getStaticUrl('images/intro-icon04.png') ?>" alt=""/></dt>
        <?php if (empty($data_arr['filesize'])) : ?>
          <dd>Vous libère de Go sur votre disque dur/SSD.</dd>
        <?php else :
          $filesize = round($data_arr['filesize'] / (1024 * 1024), 2);
          $size = explode('.', $filesize);?>
          <dd>Vous libère de <b class="disk"><em class="integer"><?php echo $size[0];?></em>.<em class="decimal"><?php echo $size[1];?></em></b> Go sur votre disque dur/SSD.
          </dd>
        <?php endif; ?>
      </dl>
    </div>
  </div>    
</div>
<!-- intro end -->

<!-- feature start -->
<div class="feature" data-name="animation">
  <div class="wrapper">
    <h2>Votre licence PRO a expiré, vous allez devoir <span>dire adieux au :</span></h2>
    <div class="feature-img">
      <img class="img-box" src="<?php echo getStaticUrl('images/feature-img.png') ?>" data-name="default" alt=""/>
      <dl class="one" data-name="default">
        <dt>Puissant désinstalleur</dt>
        <dd>
          Désinstallez en 1-clic les logiciels indésirables, récalcitrants ou les antivirus refusant d’être désinstallés.   
        </dd> 
      </dl>
      <dl class="two" data-name="default">
        <dt>Navigateur rapide et sécurisé</dt>
        <dd>
          Identifiez les plug-ins publicitaires et malveillants afin de naviguer sur internet sans aucun soucis.
        </dd>
      </dl>
      <dl class="three" data-name="default">
        <dt>Mise à jour des logiciels</dt>
        <dd>Mettez à jour en 1 seul clic tous les logiciels importants sans aucune intervention de votre part.</dd>
      </dl>
      <dl class="four" data-name="default">
        <dt>Nettoyage automatique</dt>
        <dd>
          Détecte et nettoie automatiquement les fichiers résiduels et ceux oubliés lors de la désinstallation par d’autres utilitaires.
        </dd>
      </dl>
      <dl class="five" data-name="default">
        <dt>Nettoyage approfondi</dt>
        <dd>
          Surveille et supprime complètement tous les fichiers et les entrées de registre créés lors de l’installation afin de ne laisser aucun résidus dans votre PC.
        </dd>
      </dl>
      <span class="circle one" data-name="default"></span>
      <span class="circle two" data-name="default"></span>
      <span class="circle three" data-name="default"></span>   
    </div>  
  </div>
    
</div>
<!-- feature end -->

<div class="feature-02" data-name="animation">
  <div class="wrapper">
    <h2>Le nouvel IObit Uninstaller 10 est encore bien plus performant :</h2>
    <dl data-name="default" class="one">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon08.png') ?>" alt=""></dt>
      <dd>
        <h3>Désinstallation <b>50% plus rapide</b></h3>
      </dd>
    </dl>
    <dl class="center" data-name="default">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon07.png') ?>" alt=""></dt>
      <dd>
        <h3>Analyse <b>30% de résidus supplémentaires</b></h3>
      </dd>
    </dl>
    <dl data-name="default" class="three">
      <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png') ?>" alt=""></dt>
      <dd>
        <h3><b>Bloque</b> les notifications des sites internet </h3>
      </dd>
    </dl>
  </div>
</div>

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>Un désinstalleur digne de confiance</h2>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
      <dd>
        <h3>>50M</h3>
        <p>De téléchargements</p>
      </dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
      <dd>
        <h3>> 4,5</h3>
        <p>En note utilisateur</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
      <dd>
        <h3>>1000</h3>
        <p>Recommendations des médias</p>
      </dd>
    </dl>
    <div class="review-box">
      <div class="box">
        <h3>Avis des utilisateurs</h3>
        <p>
          «Je recommande vivement ce désinstallateur en tant que programme fiable et sûr qui permet de désinstaller les programmes les plus tenaces! Plus important encore, supprimer le code "caché" que le programmeur avait l'intention de laisser, ce qui obligerait ensuite les publicités à être réinstallées! Tous les produits IObit sont sûrs et faciles à utiliser pour optimiser votre PC. »
        </p>
      </div>
      <div class="box">
        <h3>Avis des utilisateurs</h3>
        <p>
          «J'aime le fait qu'il désinstalle tous les fragments restants. Il dispose également d'un programme de mise à jour du logiciel qui vous rappelle lorsque l'un des programmes doit être mis à jour. La désinstallation des programmes de traitement par lots en fait un outil de choix. En fait, c’est essentiellement ce dont vous avez besoin pour garder votre ordinateur en état de fonctionner. »
        </p>
      </div>
      <div class="box active">
        <h3>Avis des médias</h3>
        <p>
          «Cet utilitaire, compatible parfaitement avec Win 10, est mesure de désinstaller des applications en toute simplicité, y compris des fichiers restants dans le registre Windows lors que vous supprimez des logiciels en utilisant le désinsatalleur intégré sous Windows, ainsi que les barres d’outils et plug-ins du navigateur agaçants. En un mot, si vous utilisez un PC sous Windows, je vous recommande IObit Uninstaller. »
        </p>
      </div>
      <div class="box">
        <h3>Avis des médias</h3>
        <p>
          «IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Il proposera aux utilisateurs une fonctionnalité "Analyse Approfondie" pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. »
        </p>
      </div>
      <div class="box">
        <h3>Avis des utilisateurs</h3>
        <p>
          «Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. »
        </p>
      </div>
      <div class="box">
        <h3>Avis des utilisateurs</h3>
        <p>
          «Il est rapide et très efficace, il est incomparable face au programme de désinstallation de base de Windows. Il nettoie entièrement tous les résidus de programme et évite ainsi tout ralentissement de l'ordinateur. J’utilise IObit Uninstaller depuis quelques mois et je ne peux désormais plus m’en passer. Je le recommande à mes amis et à ma famille. Merci, IObit Uninstaller est fantastique. »
        </p>
      </div>
    </div>
    <ul>
      <li>
        <span><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"></span>
        <p>Jeff A Watts</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"></span>
        <p>Lynette van Niekerk</p>
      </li>
      <li class="active">
        <span><img src="<?php echo getStaticUrl('images/pcgm.png')?>" alt="PC Magazine"></span>
        <p>PC Magazine</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></span>
        <p>MakeUseOf</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"></span>
        <p>Lovro Žužić</p>
      </li>
      <li>
        <span><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"></span>
        <p>Paulo Martins</p>
      </li>
    </ul>
  </div>
</div>
<!-- review end -->

  <!-- service start -->
  <div class="service">
    <div class="wrapper">
      <h2>APPROUVÉ PAR CES MÉDIAS</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- service end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <dl class="annotation">
        <dt>N. B.</dt>
        <dd>
          * A la fin de la période d’essai de 30 jours, votre carte de crédit ou votre compte PayPal sera prélevé automatiquement d’un montant de 14,99€. La réduction de 60% sur le prix original de 39,99€ est une offre exclusivement réservée aux préventes.
        </dd>
        <dd>
          * En cas d’insatisfaction, vous pouvez annuler votre achat dans les 30 jours, sans payer de frais supplémentaire.
        </dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- bottom end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/iu-icon.png') ?>" alt=""/>
      IObit Uninstaller 10
    </div>
    <div class="number fl">
      Plus que
      <div id="fReduce" class="reduceNum">
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>0</b></span></div>
      </div> 
      sur 200 disponibles
    </div>
  </div>
</div>
<!-- floatlayer end -->
<script>refStr = "<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js') ?>"></script>
<script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>
</html>