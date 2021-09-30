<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
?>
<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Offre exclusive pour les clients d'IObit : 68 % de réduction sur iFun Screen Recorder.</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Offre exclusive pour les utilisateurs d'IObit. Enregistrez votre l'écran facilement et sans filigrane par défaut.">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="Offre exclusive pour les clients d'IObit : 68 % de réduction sur iFun Screen Recorder.">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://recorder.iobit.com/fr/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>Enregistrez toutes les activités sur votre écran sans filigrane ni limitations</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot-asc.png')?>" alt="" />
        <div class="discount fl">
          <h2><b>68%</b> <span>de réduction</span></h2>
          <p>Offre exclusive pour les clients d'IObit</p>
        </div>
      </div>
      <div class="price">
        <p>Seulement: <strong>€15,99 </strong><del>€49,99</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=fr-isr11y1pc1599&ref=fr_isr11y1pc1599-ac<?= $refStr; ?>&refs=fr_purchase_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-fr')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Vite, J’en Profite</span>
              </div>
        </a>
        <span>1 An / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <h2 class="feature-h2">Pourquoi avez-vous besoin d'iFun Screen Recorder PRO ?</h2>
  <div class="feature wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>ENREGISTREZ N’IMPORTE QUELLE ZONE DE VOTRE ÉCRAN</h3>
          <p>Sélectionnez toute fenêtre ou personnalisez une région et l’enregistrez comme vous le souhaitez.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>CAPTUREZ VOTRE WEBCAM ET MICROPHONE</h3>
          <p>Enregistrez simultanément votre écran, votre webcam et votre microphone, ce qui est idéal pour les tutoriels, les jeux vidéo et les cours en ligne.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>ÉLIMINEZ LES FILIGRANES</h3>
          <p>Avec iFun Screen Recorder PRO, aucun filigrane obligatoire s'affichera sur votre vidéo. Et vous pouvez y <strong style="color: #b80000; font-weight: 500;"> ajouter votre propre filigrane </strong> si vous le souhaitez !</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>PAS DE LIMITE DE TEMPS</h3>
          <p>Les enregistreurs d'écran gratuits ne filment en général que quelques minutes, mais iFun Screen Recorder PRO vous permet d’enregistrer aussi longtemps que vous le souhaitez.. Vous pouvez enregistrer des films entiers, des conférences et des jeux de plusieurs heures.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""></dt>
        <dd>
          <h3>OBTENEZ DES VIDÉOS DE PREMIÈRE QUALITÉ</h3>
          <p>Avec l'accélération du GPU, une qualité optimale est garantie. Grâce à une haute définition de 4k et un taux de fps à 60, vos vidéos seront superbes & sans aucun décalage.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""></dt>
        <dd>
          <h3>ÉDITEZ VOTRE VIDÉO</h3>
          <p>Après l'enregistrement, montez immédiatement votre vidéo sans avoir besoin d'un autre logiciel. Créez directement votre vidéo parfaite !</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Prix et distinctions obtenus</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>Ce que disent les utilisateurs</span></h2></dt>
          <dd>
            <p>
              "Jusqu’à présent, c’est le Top. iFun Screen Recorder est vraiment un outil complet et facile d’utilisation. Je ne savais pas du tout comment enregistrer mon écran sur Windows, mais avec ce logiciel c’est complétement naturel. Avec ISR, je peux faire des impressions d’écran en plein enregistrement en HD, mais aussi ajouter du contenu sur mes vidéos. Je les mets ensuite sur mon Instagram et je m’attire ainsi plein d’abonnés. Cet enregistreur d’écran puissant m’a aidé à faire avancer mon business et cela gratuitement."
            </p>
           <cite>Elsie Weston</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Ce que disent les utilisateurs</span></h2></dt>
          <dd>
            <p>
              "Je suis tombé par hasard sur cet enregistreur d’écran et ses fonctions d’éditions de vidéo m’ont rendu accro. Parce que j’aime enregistrer les process opérationnels afin d’aider les gens à résoudre les problèmes informatiques, ce logiciel d’enregistrement me permet de tout enregistrer avec le son et pour ensuite uploader directement la vidéo éditée sur Youtube. Il combine enregistrement et édition, ce qui est vraiment pratique pour les YouTubers comme moi qui adore partager des tutoriels vidéo."
            </p>
            <cite>Enrico Valencia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Ce que disent les utilisateurs</span></h2></dt>
          <dd>
            <p>
              "En tant que secretaire, j’utilise énormément les logiciels d’enregistrement d’écran. Cela m’a pris beaucoup de temps et de nombreux essais afin de trouver le logiciel idéal. iFun Screen Recorder a été comme une évidence pour moi, il est l’outil parfait pour enregistrer les vidéo-conférences. Je peux enregistrer mon écran en HD et le convertir sous différents formats. Je recommande grandement iFun Screen Recorder."
            </p>
            <cite>Marielle Irvine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>Ce que disent les utilisateurs</span></h2></dt>
          <dd>
            <p>
              "Je peux enregistrer tous ces moments précieux et merveilleux avec iFun Screen Recorder, notamment pour certaines vidéos en direct. Les vidéos que j'enregistre avec ISR sont de très haute qualité. Je peux les sauvegarder et les partager avec mes amis. Je n'étais pas sûr de ses services mais les résultats que j'ai obtenus sont bien plus étonnants. C'est génial !"
            </p>
            <cite>Robbins Hilton</cite>
          </dd>
        </dl>
      </div>
      <ul class="switchHead">
		<li class="active" ><img src="<?php echo getStaticUrl('images/user1.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user2.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user3.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user4.png')?>"></li>
      </ul>
    </div>
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Créez des vidéos de première qualité sans filigrane ni limitations</h2>
      <div class="price">
        <p>Seulement: <strong>€15,99 </strong><del>€49,99</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=fr-isr11y1pc1599&ref=fr_isr11y1pc1599-ac<?= $refStr; ?>&refs=fr_purchase_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-fr')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Vite, J’en Profite</span>
              </div>
        </a>
        <span>1 An / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  
  <!-- container end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <!-- <p class="annotation" >*Opmerking:.Data kan variëren afhankelijk van verschillende computer systemen.</p> -->
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer" style="margin-top: 0;">©2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>OFFRE EXCLUSIVE</h2>
        <p><strong>68% de réduction</strong> pour enregistrer votre écran sans limitations</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>Seulement: <strong>€15,99 </strong><del>€49,99</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=fr-isr11y1pc1599&ref=fr_isr11y1pc1599-ac<?= $refStr; ?>&refs=fr_purchase_isr"
               onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-fr')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Vite, J’en Profite</span>
              </div>
            </a>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>