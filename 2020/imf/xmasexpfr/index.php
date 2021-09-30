<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'à -91% sur IObit Malware Fighter PRO - Vente Flash de Noël - IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700,900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
  <script type="text/javascript">
  		var queryStr =<?php echo empty($_SERVER['QUERY_STRING'])?'""':('"?'.$_SERVER['QUERY_STRING']).'"';?>;
		var paramTo=MApp(2.2).url.getParameters('to');
  </script>
</head>
<body>
  <!-- banner -->
  <div class="banner">
	 <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/fr/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>VENTE FLASH DE NOËL</h1>
    <!-- subtitle -->
    <p>
      Jusqu'à -<b>91</b>% ! Achetez-en 1 et obtenez-en 3 GRATUITS ! Ne vous en manquez pas !
    </p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <div class="message-box">
			<div class="message-box-sale"><p>-50%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
		</div>
        <p> 1 an, 1 PC</p>
        <dl>
          <dd class="clearfix">
            Réduction : <span class="fr">21,96€</span>
          </dd>
          <dd class="two">
            <p class="price"><b>19</b> <del>39,95€</del></p>
          </dd>
          <dd> 
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf81pc1999&ref=fr_imf81pc1999purchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchaseexp2012a-fr');"> <i class="all-icons"></i> VITE, J’EN PROFITE </a>
          </dd>
        </dl>
      </div>

      <!-- imf-85 -->
      <div class="cm fr">
      <div class="message large ">
        <div class="countd countdown">
          <div class="countdcnt">
            <strong>00</strong><span>h :</span>
            <strong>00</strong><span>m :</span>
            <strong>30</strong><span>s</span>
          </div>
        </div>
        <div class="message-box">
          <div class="message-box-sale message-box-eaux"><p>-91%</p></div>
          <img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
          <div class="xmas-giveaway"></div>
          <div class="message-tips"><i class="all-icons"></i><p>Cadeaux exclusifs incluent Protected Folder, Smart Defrag et IObit Software Updater.</p></div>
        </div>
            <p> 1 an / 3 PC + <del class="messagecad">CADEAUX PRO</del></p>
            <!-- dl -->
            <dl>
              <dd class="clearfix">
                Réduction : <span class="fr largeolsa"><em>181,97</em>€</span>
              </dd>
              <dd class="two">
                <p class="price"><b>17</b> <del class="largeold"><em>199,96</em>€</del></p>
              </dd>
              <dd>
                <a class="buybtn large"
                  href="https://www.iobit.com/buy.php?product=fr-imf83pcpfsdisu1799&ref=fr_imf83pcpfsdisu1799purchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchaseexp2012b-fr');"> <i class="all-icons"></i> VITE, J’EN PROFITE </a>
                <!-- <p class="note"><i class="all-icons"></i><b class="viewNum">4,006,553</b> personnes l'ont acheté!</p> -->
              </dd>
            </dl>
          </div>
      </div>
    </div>
	</div>
  </div>
  <!-- end banner -->
<div class="xmas-annou"><i class="all-icons"></i>Attention ! Les cadeaux expireront dans 24 heures. Dépêchez-vous !</div>
<div class="xmas-payment"></div>
<div class="wrapper xmas-pour">
  <!-- feature -->
  <div class="feature">
    <h2>Pourquoi choisir IObit Malware Fighter PRO ?</h2>
    <p>Seul PRO défend pleinement votre PC contre 209 millions de menaces</p>
  </div>
  <!-- end feature -->

  <!-- intro -->
  <div class="intro">
    <!-- 01 -->
    <dl class="one clearfix">
      <dd>
		<img src="<?php echo getStaticUrl('images/xmas-icon1.png')?>" alt="">  
        <h3>Moteur Bitdefender</h3>
        <p>Empêche plus de 209 millions de menaces d'infecter et d'endommager votre ordinateur.</p>
      </dd>
    </dl>
    <!-- 02 -->
    <dl class="two clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon2.png')?>" alt="">
        <h3>Protection des données sensibles</h3>
        <p>Utilise des mots de passe pour protéger vos données sensibles afin que personne ne puisse y accéder sans votre permission.</p>
      </dd>
    </dl>
    <!-- 03 -->
    <dl class="three clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon3.png')?>" alt="">
        <h3>Moteur anti-ransomware</h3>
        <p>Bloque les ransomwares qui tentent d'entrer dans votre ordinateur ou de crypter vos fichiers importants.</p>
      </dd>
    </dl>
    <!-- 04 -->
    <dl class="four clearfix">
      <dd>
        <img src="<?php echo getStaticUrl('images/xmas-icon4.png')?>" alt="">
        <h3>Navigation Internet plus sûre</h3>
        <p>Supprime automatiquement les cookies et les traces dangereux lorsque vous fermez votre navigateur, empêchant les pirates de rechercher ce que vous lisez, visualisez ou achetez en ligne.</p>
        </p>
      </dd>
    </dl>
  </div>
  <!-- end intro -->
</div>
  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper gifts-cont">
      <img class="soldout" src="<?php echo getStaticUrl('images/soldout-give-bg.png')?>" alt="">
      <div class="cont">
      <h2>Trois outils pratiques comme cadeaux gratuits pour un temps limité !</h2>
		<p>Le temps est limité, ne le manquez pas !</p>
		<div class="gifts-giveway gifts-giveway1">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>IObit Software Updater 3 PRO <b>0€</b> <del>29,99€</del> <span>(1 an / 1 PC)</span></h4>
				<ul>
					<li>Fournir les logiciels les plus populaires incluant aussi leurs dernières mises à jour et le tout en un seul clic.</li>
					<li>Simplifier vos tâches de mise à jour en détectant automatiquement l’état du logiciel et en installant automatiquement les derniers logiciels.</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway2">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Smart Defrag 6 PRO <b>0€</b> <del>29,99€</del> <span>(1 an / 1 PC)</span></h4>
				<ul>
					<li>Défragmenter les fichiers volumineux pour accélérer la vitesse de lecture / écriture du disque et améliorer la durabilité du disque.</li>
					<li>Surveiller l'état du disque en temps réel : la température, l’utilisation, le rapport d'analyse en auto-surveillance du disque, etc.</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway3">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Protected Folder <b>0€</b> <del>39,99€</del> <span>(1 an / 1 PC)</span></h4>
				<ul>
					<li>Protèger plus efficacement vos données, dossiers et fichiers importants avec un mot de passe.</li>
					<li>Même si le PC est attaqué de manière malveillante par desvirus, des logiciels espions et des ransomwares, le moteur de
Protected Folder peut garder le verrouillage des fichiers.</li>
				</ul>
			</div>
		</div>
      </div>
	  </div>
  </div>
  <!-- end gifts -->
<div class="gifts-store">
	<div class="gifts-store-arrow"></div>
	<a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-imf83pcpfsdisu1799&ref=fr_imf83pcpfsdisu1799purchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchaseexp2012b-fr');"> <i class="all-icons"></i>Profitez-en maintenant</a>
	</dd>
</div>
  <!-- comparison -->
  <div class="comparison">
    <!-- title -->
    <div class="title">
      <h2>Retrouvez les fonctions PRO pour un PC complètement protégé</h2>
      <img src="<?php echo getStaticUrl('images/b-border.png')?>" alt="">
    </div>
    <!-- table -->
    <div class="cont">
      <dl>
        <dd class="one"><span>Attention !</span> Vous risquez …</dd>
        <dd class="two"><span>Profitez</span> plutôt de … <img src="<?php echo getStaticUrl('images/sd-icon.png')?>" alt=""></dd>
      </dl>
      <table>
        <tbody>
          <tr>
            <td><span>Une infection de virus</span> attaquant votre PC à cause d’une base de données incomplète</td>
            <td><span>Base de données de 209,000,000 virus provenant de Bitdefender </span>pour garder un PC protégé</td>
          </tr>
          <tr>
            <td><span>De variants de virus infectent</span> votre PC car ils ne sont pas reconnus comme des menaces</td>
            <td>Heuristique avancé utilisant les connaissances des virus pour <span>détecter les nouvelles variantes</span></td>
          </tr>
          <tr>
            <td>Des Ransomwares prenant le contrôle de votre PC et <span>bloquant tous vos fichiers et dossiers</span></td>
            <td>Moteur Anti-ransomware puissant <span>bloquant les attaques de ransomwares </span>pour protéger vos fichiers</td>
          </tr>
          <tr>
            <td><span>Vos fichiers les plus importants peuvent être volés</span> ou exploités par des inconnus</td>
            <td>Déposez vos fichiers les plus importants dans le <span>Coffre-fort </span>afin de les protéger des hackers ou des autres utilisateurs de votre PC</td>
          </tr>
          <tr>
            <td>Les hackers et des compagnies surveillent vos faits et gestes sur les sites internet et <span>vos comportementsd’achats</span></td>
            <td>Avec l’anti-tracking vous <span>supprimez vos traces </span>et vous vous assurez que votre vie privée ne soit exploitée</td>
          </tr>

          <tr>
            <td>Votre PC est infecté par <span>un périphérique USB</span></td>
            <td>USB Disk Guard <span>vérifie les périphériques USB et les bloques </span>s'ils contiennent des fichiers malveillants</td>
          </tr>
          <tr>
            <td>Les hackers ont <span>accès à votre webcam </span>et vous observe dans votre maison</td>
            <td>Camera Guard s’assure que <span>personne n’a accès à votre webcam </span>sans votre consentement</td>
          </tr>
        </tbody>
      </table>
    </div>
  </div>

  <div class="h-list">
    <div class="title">
      <h2>IObit Malware Fighter 8 PRO fait bien plus que la version précédente !</h2>
      <img src="<?php echo getStaticUrl('images/b-border.png')?>" alt="">
    </div>
    <div class="sw">
      <img class='bg' src="<?php echo getStaticUrl('images/list-bg.png')?>" alt="">
      <div class="cont">
          <ul>
            <li>
              <img src="<?php echo getStaticUrl('images/icon1.png')?>" alt="">
              <h4>Base de données élargie</h4>
              <p>Une base de données élargie de 100% afin de détecter toutes les menaces existantes</p>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/icon2.png')?>" alt="">
              <h4>Intelligent</h4>
              <p>Avec l'Heuristique avancée vous êtes protégé des nouvelles versions de virus</p>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/icon3.png')?>" alt="">
              <h4>Rapide</h4>
              <p>Analyse votre PC 50% plus rapidement afin de vous faire gagner du temps</p>
            </li>
            <li>
              <img src="<?php echo getStaticUrl('images/icon4.png')?>" alt="">
              <h4>Emails sécurisés</h4>
              <p>Maintenant IObit Malware Fighter protège aussi vos emails contre les spam, le phishing et les contenus malveillants</p>
            </li>

          </ul>
        </div>
    </div>
  </div>
  <!-- end comparison -->

  <!-- review -->
  <div class="review">
    <h2>Écoutez ce que disent les utilisateurs qui utilisent IObit Malware Pro</h2>
    <div class="content">
      <div class="details">
        <div class="active">
          <h4>Avis des médias</h4>
          <p>« Le programme est équipé de deux moteurs Antivirus, l’un vient de IObit, l’autre vient de Bitdefender. Il semble être efficace contre les logiciels malveillants qui ne peuvent pas être détectés par d’autres concurrents, il est donc compatible avec votre logiciel antivirus standard. IObit Malware Fighter est en mesure de détecter une grande quantité de logiciels espions, ransomware, adware, chevaux de troie, vers, keyloggers et robots. »</p>
		  <h5>Software Informer</h5>
        </div>
        <div>
          <h4>Avis des utilisateurs</h4>
          <p>« Nous avons utilisé de nombreux de programmes différents pour assurer le bon fonctionnement de nos ordinateurs et éviter les menaces. Il faut quelques heures pour maintenir la sécurité et les performances chaque semaine. Avec IObit Malware Fighter Pro et Advanced System Care Pro, tout est bien rangé. Après avoir utilisé vos produits, il n’y a plus de problèmes. »</p>
		  <h5>Bob Bassett</h5>
        </div>
        <div>
          <h4>Avis des utilisateurs</h4>
          <p>« Il y a quelques années une personne de mon entourage m’a parlé d’IObit Malware fighter. Au départ j’étais sceptique. Mais après l’avoir installé c’est devenu mon logiciel anti malware préféré. Il est très facile d’utilisation. Au cours des années il a détecté plusieurs menaces et les a éliminé . En association avec d’autres programmes IObit comme ASC j’ai une très bonne protection pour mon PC. Je recommande ces programmes à tous mes amis ainsi qu’à ma famille. »</p>
		  <h5>Peter Stoffers</h5>
        </div>
        <div>
          <h4>Avis des utilisateurs</h4>
          <p>« Je suis très satisfait de votre produit IObit Malware Fighter. J'ai eu beaucoup de problèmes d'interférences malveillantes auparavant, je n'ai pas pu regarder un film ou un concert entier que j'aime beaucoup. Grâce à votre produit, maintenant chaque opération est claire, sûre et bien protégée. Il scanne mon ordinateur portable sans affecter sa performance. Je l'ai déjà recommandé à deux de mes amis. »</p>
		  <h5>Gelu Batir</h5>
        </div>
		<div>
		  <h4>Avis des utilisateurs</h4>
		  <p>« Merci d'avoir fait sortir Malware Fighter, c’est une autre mise à jour majeure pour vos utilisateurs. Il est facile à utiliser et la vitesse du scan est beaucoup plus rapide. Les gens qui veulent vraiment un bon programme anti-malware et ant-virus qui est aussi à un prix raisonnable ne doivent pas chercher plus loin qu’IObit Malware Fighter. Je recommanderais qu'ils oublient le reste et choisissent le meilleur qui est IObit Malware Fighter. »</p>
		  <h5>David Cassidy</h5>
		</div>
      </div>
	  <ul>
		  <a class="next nextbtn" href="javascript: nextFun();"></a>
		  <li class="one"><img src="<?php echo getStaticUrl('images/software-informer.png')?>" alt="Software Informer"></li>
		  <li class="two"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
	    <li class="three"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Gelu Batir"></li>
	    <li class="four"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
	    
	    <li class="five"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
	  	
	  </ul>
	  
      <!-- <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a> -->
    </div>
  </div>
  <!-- end review -->
  
  <div class="award">
	  <div class="wrapper">
		  <h2>Aussi recommandé par</h2>
		  <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="Gelu Batir">
	  </div>
  </div>
  
  

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <h2 class="on">PREMIER ARRIVE, PREMIER SERVI !</h2>
    <!-- box -->
	<div class="wrapper bottom-buy-center">
    <div class="box fl">
	  <div class="bottom-buyimg bottom-buy1"></div>
	  <div class="bottom-buyimg bottom-buy2 on"></div>
	  <div class="bottom-buyimg bottom-buy3"></div>
    </div>
    <!-- ul -->
    <ul class="fl">
      <li class="top">1 An / 1 PC</li>
      <li class="active mid">1 An / 3 PC + <small>Cadeaux exclusifs</small></li>
    </ul>
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>17</b> <del>199,96€</del></p>
      </dd>
      <dd>
        <a class="buybtn small" href="https://www.iobit.com/buy.php?product=fr-imf83pcpfsdisu1799&ref=fr_imf83pcpfsdisu1799purchase2012<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchaseexp2012b-fr');">
          <i class="all-icons"></i> VITE, J’EN PROFITE
        </a>
      </dd>
    </dl>
	</div>
  </div>
  <!-- end bottom-buy -->

  <!-- service -->
  <div class="service">
    <div class="content clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Garantie de remboursement</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Paiement 100% Sécurisé</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/service-client.png" alt=""></dt>
        <dd>
          <h3>Service à la clientèle 24h/24</h3>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Note:</dt>
        <dd>* Ces programmes de promotion sont modifiables sans préavis, à tout moment et à notre seule discrétion.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</p>
    </div>
  </div>
  <!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>