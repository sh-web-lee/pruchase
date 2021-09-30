<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'friulaun_p' . $date;
  $c_name_t='friulaun_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);

$paramPct=$_GET['pct'];
$tagShow=true;
if(!empty($paramPct)){
  $refStr.='-'.$paramPct;
  if($paramPct==2){
    $tagShow=false;
  }
}

$transData=json_decode(base64_decode($_GET['data']));
?>
<!DOCTYPE html>
<html lang="fr">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Économisez 85% sur le nouvel IObit Uninstaller PRO et bénéficiez des cadeaux de remerciement - IObit </title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
      <!-- logo -->
			<a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
      <!-- title -->
			<h1> New Offres limitées pour la nouvelle version</h1>
			<div class="clearfix">
        <!-- left-message: iu-box -->
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
          <img src="<?php echo getStaticUrl('images/ghost.png')?>" class="ghost"/>
          <span class="disappear"></span>
				</div>
        <!-- right-message -->
				<div class="right fr">
          <div class="message">
            <h2>Passez au nouvel IObit Uninstaller 11 PRO</h2>
            <div class="number">
              <span>Et profitez des cadeaux gratuits, plus que</span>
              <div id="reduce" class="reduceNum">
                <div class="listbox"><span class="list"><b>0</b></span></div>
                <div class="listbox"><span class="list"><b>0</b></span></div>
              </div>
              <span>disponibles  </span>
            </div>
            <p><img src="<?php echo getStaticUrl('images/people.png')?>"> <strong class="viewNum"><?php echo $viewNum;?></strong> clients sont sur cette page</p>
          </div>
          <dl class="price">
            <dt><strong><b>12</b>,99€</strong> <del>109,97€</del></dt>
            <dd><a href="https://www.iobit.com/buy.php?product=fr-iu113pcsdpf1299&ref=fr_iu11sdpf1299newlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu"
                   onclick="ga('send', 'event', 'iubuy', 'buy', 'iuolduserpurchase-fr');" 
                   class="buybtn">J’EN PROFITE VITE</a></dd>
          </dl>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->
  <div class="intro">
    <div class="wrapper">
      <h2>Plus d’avantages vous bénéficierez du nouvel IObit Uninstaller 11 PRO <span></span></h2>
      <div class="message clearfix">
        <h3>1. En plus des programmes indésirables, ces éléments délicats peuvent être désinstallés</h3>
        <img src="<?php echo getStaticUrl('images/intro-message.png')?>" class="img-box" alt="" / >
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons01.png')?>"></dt>
          <dd>
            <strong>Les programmes persistants  </strong> qui ne peuvent pas être supprimés par une désinstallation standard.
            <?php if($tagShow):?><span>Amélioré de 152%</span><?php endif;?>
          </dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo getStaticUrl('images/icons02.png')?>"></dt>
          <dd>
            <strong>Les Bundlewares </strong>qui occupent votre espace disque à votre insu.
          </dd>
        </dl>
        <div class="clear"></div>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons03.png')?>"></dt>
          <dd>
            <strong>Les extensions de navigateur malveillantes   </strong> qui tentent de dérober vos données personnelles et de menacer la sécurité des ordinateurs.
            <?php if($tagShow):?><span>Amélioré de 56%</span><?php endif;?>
          </dd>
        </dl>
        <dl class="right last">
          <dt><img src="<?php echo getStaticUrl('images/icons04.png')?>"></dt>
          <dd>
            <strong>Les plug-ins publicitaires </strong>qui comportent des annonces popup vous dérangent lorsque vous surfez sur Internet.
            <?php if($tagShow):?><span>Amélioré de 50%</span><?php endif;?>
          </dd>
        </dl>
      </div>
      <div class="message2 clearfix">
        <h3>2. Outre les fichiers résiduels,  <br> d'autres données inutiles peuvent être effacées  </h3>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons05.png')?>" alt=""></dt>
          <dd><strong>Détecte automatiquement  </strong></dd>
          <dd>les résidus existants sur votre PC avant d’utiliser IObit Uninstaller 11 PRO et les supprime en un seul clic.</dd>
          <dd><span>Unique sur le marché</span></dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/icons06.png')?>" alt=""></dt>
          <dd><strong>Nettoie automatiquement  </strong></dd>
          <dd>les données inutiles des programmes désinstallés à travers le désinstalleur de Windows ou désinstallés par d’autres utilitaires. </dd>
        </dl>
        <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/icons07.png')?>" alt=""></dt>
          <dd><strong>Annule automatiquement les modifications du système </strong>causées par l’installation d’un programme après sa désinstallation.</dd>
          <dd><span>Unique sur le marché</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="intro2">
    <div class="wrapper">
      <h3>3. Plus d’avantages à ne pas manquer</h3>
      <img src="<?php echo getStaticUrl('images/intro2-message.png')?>" class="img-box"> 
      <ul>
        <li>Met à jour tous les programmes obsolètes en un clic</li>
        <li>Élimination des programmes présentant des problèmes de désinstallation & modifications qu'ils ont apportées au système. <?php if($tagShow):?><span>Amélioré de 30%</span><?php endif;?> </li>
        <li>Désinstalle les applications Windows indésirables par lot</li>
        <li>Mise à jour automatique dès qu’une nouvelle version est disponible</li>
        <li>Assistance téléphonique 7j/7 et 24h/24</li>
      </ul>
    </div>
  </div>
  <div class="gift-message">
    <div class="wrapper clearfix">
      <h2>Nous préparons également deux utilitaires puissants comme cadeaux de remerciement </h2>
      <div class="gift clearfix">
        <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt="">
        <dl>
          <dt>
            <strong>0€</strong> <del>39,99€</del> <br>
            <span>1 An / 1 Appareil</span>
          </dt>
          <dd>Défragmenter automatiquement <br> les fichiers et disques <br> sélectionnés en temps réel.</dd>
        </dl>
      </div>
      <div class="gift clearfix">
        <img src="<?php echo getStaticUrl('images/pf-gift.png')?>" alt="">
        <dl>
          <dt>
            <strong>0€</strong> <del>39,99€</del> <br>
            <span>1 An / 1 PC </span>
          </dt>
          <dd>Vous prémunit contre la <br> perte, le vol et la fuite de <br> données !</dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Que disent les autres ?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>Avis des médias</h3>
              <p>
                « IObit Uninstaller, un désinstalleur léger, est doté d’une interface conviviale. Les utilisateurs, en fait, peuvent le télécharger en un clin d'œil. Cet outil de désinstallation peut être classé comme le meilleur programme de désinstallation qui permet aux utilisateurs de réaliser la désinstallation par lot. Il proposera aux utilisateurs une fonctionnalité Analyse Approfondie pour nettoyer les restes en profondeur. En général, ce désinstalleur réalise sa promesse: désinstallation complète. Et Il se recommande par sa performance. »
              </p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/jeff-a-watts.png')?>" alt="Jeff A Watts"/></dt>
            <dd>
              <h3>Avis des utilisateurs</h3>
              <p>
                J'utilise les programmes IObit depuis plusieurs années avec une grande satisfaction! Pour cette raison, je reste fidèle aux produits IObit. Dans le passé, j’ai entretenu et réparé des ordinateurs portables et des téléphones portables (android) et les ai toujours laissés, avec les produits IObit installés. J’ai toujours dit à mes clients que cela corrigera et accélérera automatiquement leur ordinateur portable / ordinateur / mobile! :) Je recommande vivement le programme de désinstallation (et la dernière version bêta) en tant que programme fiable et sûr qui permet de désinstaller les programmes les plus tenaces! Plus important encore, supprimer le code "caché" que le programmeur avait l'intention de laisser, ce qui obligerait ensuite les publicités à être réinstallées! Tous les produits IObit sont sûrs et faciles à utiliser pour optimiser votre PC.
              </p>
              <h4>Jeff A Watts</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>Avis des utilisateurs</h3>
              <p>
                Je trouve le programme de désinstallation IObit excellent, car il répond à vos attentes. J'aime le fait qu'il désinstalle tous les fragments restants. Il dispose également d'un programme de mise à jour du logiciel qui vous rappelle lorsque l'un des programmes doit être mis à jour. La désinstallation des programmes de traitement par lots en fait un outil de choix. En fait, c’est essentiellement ce dont vous avez besoin pour garder votre ordinateur en état de fonctionner.
              </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>Avis des utilisateurs</h3>
              <p>
                IObit Uninstaller est le meilleur logiciel pour supprimer des programmes sur ordinateur, il est rapide et très efficace, il est incomparable face au programme de désinstallation de base de Windows. Il nettoie entièrement tous les résidus de programme et évite ainsi tout ralentissement de l'ordinateur. J’utilise IObit Uninstaller depuis quelques mois et je ne peux désormais plus m’en passer. Je le recommande à mes amis et à ma famille. Merci, IObit Uninstaller est fantastique.
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
            <dd>
              <h3>Avis des utilisateurs</h3>
              <p>
                « IObit Uninstaller s’améliore avec chaque mise à jour. Je l’ai utilisé depuis 3 ans. Téléchargement rapide et son interface conviviale et claire. J’ai souvent utilisé les fonctionnalités Désinstaller en lot, Analyse Minutieuse , Broyeur de fichiers et la fonctionnalité Récemment installés qui peut m’aider à trouver facilement les programmes récemment installé qui ne fonctionnent pas correctement ou que je n’aime pas. Il est également facile de contrôler vos éléments de démarrage pour booster considérablement la vitesse du démarrage. »
              </p>
              <h4>Lovro Žužić</h4>
            </dd>
          </dl>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next">></span>
    </div>
  </div>
  <!-- review end -->


  <!-- service start -->
	<div class="awards">
		<div class="wrapper">
			<h2>APPROUVÉ PAR LES MÉDIAS CÉLÈBRES DU MONDE</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
      <div class="service clearfix">
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
			<dl class="annotation">
				<dt>Note:</dt>
				<dd>
					*.Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.
				</dd>
        <dd>*.Licence gratuite d'AMC Security PRO, la version complète comprend annonces intégrées.</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl"> 
        <img src="<?php echo getStaticUrl('images/fl-ghost.png')?>" class="ghost"/>
        <span class="disappear"></span>
        </div>
      <div class="message">
        <div class="number">
          <span>Plus que </span>
          <div id="fReduce" class="reduceNum">
            <div class="listbox"><span class="list"><b>0</b></span></div>
            <div class="listbox"><span class="list"><b>0</b></span></div>
          </div>
          <span> cadeaux de remerciement dispos !  </span>
        </div>
        <p><strong class="viewNum"><?php echo $viewNum;?></strong> clients sont sur cette page</p>
      </div>
      <div class="price">
        <a href="https://www.iobit.com/buy.php?product=fr-iu113pcsdpf1299&ref=fr_iu11sdpf1299newlaunch<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=fr_purchase_iu"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuolduserpurchase-fr');" class="buybtn">Profite de mes cadeaux gratuits </a>
      </div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>