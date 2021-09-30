<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'frimf8exp_p' . $date;
  $c_name_t='frimf8exp_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['id'])?'':('-'.$_GET['id']);

$isNewUser=false;
$isNewUserV = false;
$isNewRef = false;
if(preg_match('/^7\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
    'imfpro','iufree','iupro','dbfree',
    'dbpro','isu'))){
  $isNewUser=true;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
    'imfpro','iufree','iupro','dbfree',
    'dbpro','isu'))){
    $isNewRef = true;
  }
}
if(preg_match('/^5\./',$_GET['ver']) ||in_array($_GET['ref'],array('ascfree','ascpro','imffree',
    'imfpro','iufree','iupro','dbfree',
    'dbpro','isu'))){
  $isNewUserV = true;
  if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
    'imfpro','iufree','iupro','dbfree',
    'dbpro','isu'))){
    $isNewRef = true;
  }
}

$packsNum=49;
// $transData=json_decode(base64_decode($_GET['num']));
// if(!empty($transData)){
//   if(@intval($transData->seats)){
//     $packsNum=@intval($transData->seats);
//   }
// }

$transData=$_GET['fileto'].$_GET['rsto'].$_GET['camto'].$_GET['traceto'];

$popStr=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$isNewRef = false;
if(in_array($_GET['ref'],array('ascfree','ascpro','imffree',
  'imfpro','iufree','iupro','dbfree',
  'dbpro','isu'))){
  $isNewRef = true;
}
?>
<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Précommandez le nouvel IObit Malware Fighter 8 PRO pour 0€</title>
  <meta name="Copyright" content="IObit">
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Poppins:400,500,600&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <h1 class="title">PRÉVENTES EN DIRECT</h1>
    <div class="clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="IObit Malware Fighter PRO"/>
      </div>
      <div class="msgbox fl">
        <h2>Revenez à la version PRO pour 0€</h2>
        <div class="barbox clearfix">
          <div class="progressbar fl">
            <span class="reducebar">Les 500 premiers clients</span>
            <div class="numbox">
              <span class="totalNum">498</span> vendues, plus que <b class="reduceNum"><em>2</em></b>  disponibles
            </div>
          </div>
          <div class="changebar fl"><span>Les clients suivants</span></div>
        </div>
        <ul class="barprice">
          <li>0€*</li>
          <li class="last">23,99€</li>
        </ul>
        <ul class="price">
          <li class="first">
            <p><strong>0€</strong><sup>*</sup></p>
          </li>
          <li>
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=fr-imf8preorder&ref=fr_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_imf"
               onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorderexp-fr');">
              Renouvelez Maintenant
            </a>
          </li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <div class="arrow-down"></div>
    <h2>Que fait IObit Malware Fighter PRO pour vous ?</h2>
    <div class="clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <span class="line-left line"></span>
      </div>
      <div class="message fr">
        <h3>Protection de votre PC</h3>
        <ul>
          <li>
            Suppression de <?php if(!empty($_GET['fileto'])):?><b class="remove"><?php echo number_format($_GET['fileto'])?></b><?php endif;?> menace(s) de sécurité pour sécuriser vos informations personnelles
          </li>
          <li class="last">
            Blocage de <?php if(!empty($_GET['rsto'])):?><b class="stop"><?php echo number_format($_GET['rsto'])?></b><?php endif;?> ransomware(s) tentant de chiffrer vos fichiers
          </li>
          <li>Blocage de <?php if(!empty($_GET['fileto'])):?><b class="remove"><?php echo number_format($_GET['fileto'])?></b><?php endif;?> menace(s) d’infection(s) cachée(s) sur les clés USB</li>
          <li class="last"><b>Protection en temps réel</b> activée pour arrêter les activités suspectes</li>
        </ul>
      </div>
    </div>
    <div class="clearfix">
      <div class="message message2 fl">
        <h3>Protection de votre vie privée</h3>
        <ul>
          <li>
            Détection de <?php if(!empty($_GET['camto'])):?><b class="detect"><?php echo number_format($_GET['camto'])?></b><?php endif;?> accès à votre webcam non-autorisé
          </li>
          <li>
            Suppression de <?php if(!empty($_GET['traceto'])):?><b class="online"><?php echo number_format($_GET['traceto'])?></b><?php endif;?> trace(s) sur Internet pour éviter les suivis et les espions
          </li>
          <li class="last">Vos fichiers personnels <b>protégés par un mot de passe solide</b></li>
        </ul>
      </div>
      <div class="imgbox imgbox2 fr">
        <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
        <span class="line-right line"></span>
        <span class="shield-box"><em class="shield"></em><em class="shield-shadow"></em></span>
      </div>
    </div>
    <div class="fbottom">
      <h2>Sans la protection complète, <br> vous <b>ne profiterez plus</b> de ces privilèges :</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/>
          <span class="warning"></span>
        </div>
        <div class="message fr">
          <ul>
            <li>Protection du moteur Bitdefender contre les logiciels malveillants et virus</li>
            <li>Protection du moteur anti-ransomware </li>
            <li>Protection de la webcam contre les accès non-autorisés</li>
            <li>Protection contre les menaces de sécurité des clés USB</li>
            <li>Protection de la vie privée avec la suppression automatique des traces en ligne</li>
            <li>Mise à jour automatique de la base de données des malwares</li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- moregives start -->
<div class="moregives">
  <h2>Renouvelez et découvrez les nouveautés de la nouvelle version :</h2>
  <div class="wrapper">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature01.png')?>" alt=""/></dt>
      <dd>
        <big>+100% </big>
        <p>de malwares pris en charge</p>
      </dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/feature02.png')?>" alt=""/></dt>
      <dd>
        <big>+50%*</big>
        <p>plus rapide</p>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature03.png')?>" alt=""/></dt>
      <dd>
        <big>Protection des e-mails</big>
        <p>détection des liens malveillants</p>
      </dd>
    </dl>
  </div>
</div>
<!-- moregives end -->

<!-- review start -->
<div class="review">
  <div class="wrapper">
    <h2>Ce que l'on dit de nous :</h2>
    <div class="review-box">
      <div class="reviews">
        <div class="inner">
          <dl>
            <dt>Filipe</dt>
            <dd>
              " IObit Malware Fighter est le meilleur logiciel de suppression de logiciels malveillants que j’utilise pour mon travail. Je travaille dans l’informatique et IMF est le meilleur outil de protection. Attention, malware ! Vous n’aurez aucune chance. IMF est un logiciel intuitif avec des fonctionnalités avancées et une interface utilisateur très agréable. Un outil moderne pour un usage quotidien. "
            </dd>
          </dl>
          <dl>
            <dt>Software Informer</dt>
            <dd>
              " Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots. "
            </dd>
          </dl>
          <dl>
            <dt>Adam Cullen</dt>
            <dd>
              " IObit Malware Fighter est génial car il analyse les fichiers et les clés USB et protège contre les menaces en ligne et hors ligne. La gamme de produit IObit m'offre toujours des services irréprochables et même quand j'utilise seulement les versions gratuites. Je recommanderais IObit et leurs produits à tous ceux qui souhaitent utiliser des logiciels simples d'utilisation, qui assurent une protection intégrale ainsi qu'un PC performant. "
            </dd>
          </dl>
        </div>
      </div>
      <div class="handle">
        <span class="one"><img src="<?php echo getStaticUrl('images/filipe.png')?>" alt="Filipe"/></span>
        <span class="two on"><img src="<?php echo getStaticUrl('images/software.informer.png')?>" alt=""/></span>
        <span class="three"><img src="<?php echo getStaticUrl('images/adam-cullen.png')?>" alt="Adam Cullen"></span>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Approuvé par les médias de renommés mondiale </h2>
    <div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
  </div>
</div>
<!-- awards end -->

<!-- footer start -->
<div class="footer">
  <dl class="wrapper">
    <dt>Nota : </dt>
    <dd>
      * A la fin de la période d’essai de 30 jours, votre carte de crédit ou votre compte PayPal sera prélevé automatiquement d’un montant de 23,99€. Ces 70% de réduction sur le prix original de 79,99€ <br> &nbsp;&nbsp; est une offre exclusivement réservée aux préventes.
    </dd>
    <dd>
      * En cas d’insatisfaction, vous pouvez annuler votre achat dans les 30 jours, sans payer de frais supplémentaire.
    </dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Tous droits réservés</p>
</div>
<!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <div class="imgbox fl">
      <img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt=""/>
    </div>
    <div class="barbox fl">
      <h2>Commandez-le maintenant pour 0€</h2>
      <div class="numbox">
        Réservé aux 500 premiers clients, plus que <b class="reduceNum"><em>2</em><em class="packsNum">2</em></b> dispos !
      </div>
    </div>
    <ul class="price fl">
      <li class="first">
        <p><strong>0€</strong><sup>*</sup></p>
      </li>
      <li>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=fr-imf8preorder&ref=fr_imf8preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_imf"
           onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf8preorderexp-fr');">
          Renouvelez Maintenant
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- floatlayer end -->

<script>
  packsNum=<?php echo $packsNum;?>;
  refStr="<?php echo $refStr;?><?php echo $popStr;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>