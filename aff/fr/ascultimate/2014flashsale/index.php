<?php
//  初始化
  error_reporting(0);
  define('IObit', 'IObit');
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../../';
  }
  include $pRootUrl.'include/common.inc.php';
  
  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  $buyNum = ceil(microtime_float()*1000/20000)-68799080;
  
//  禁止ADN缓存
  header('Expires: Mon, 26 Jul 1997 05:00:00 GMT');
  header('Cache-Control: no-cache, must-revalidate');
  header('Pragma: no-cache');

//  主要内容
	//if (empty($_GET['ref'])) $_GET['ref'] = 'ascu7';
	//$ref = strtolower($_GET['ref']);
	//$title = $discountListArr['title'][$ref] ? $discountListArr['title'][$ref][$cd] ? $discountListArr['title'][$ref][$cd] : $discountListArr['title'][$ref]['default'] : $discountListArr['title']['default'];
	//$_GET['ref'] = 'fr_ascu7purchase';
  $packsNum = ceil(microtime_float()*2000/20000);
	$packsNum = 360-($packsNum%360);
	if ($_GET['action'] == 'getPacks'){
		echo $packsNum;
		exit;
	}
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Achetez ASC Ultimate pour 3 PCs avec grand escompte, et obtenez les cadeaux gratuits ! </title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>css/style.css"/>
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script type="text/javascript">
function decreasingPacks(){
	$.ajax({
		type: "GET",
		url: "index.php",
		data: "action=getPacks&r="+Math.random(),
		success: function(packs){
			$('#packs').html(packs+' Packs');
			setTimeout('decreasingPacks()', 10000);
		}
	});
}
setTimeout('decreasingPacks()', 10000);
</script>
</head>

<body>
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<div class="header">
    	<div class="warpper clearfix">
        <a href="http://www.iobit.com/fr" class="logo" target="_blank"></a>
        <div class="title"></div>
        <dl class="time">
            <dt>Offre d’Une Durée Limitée <sub>①</sub></dt>
            <dd id="counttime"><span>00</span><span>00</span><span>00</span><span>00</span><em>000</em></dd>
        </dl>
      </div>
  </div>
  <div class="middle">
  	<div class="warpper clearfix">
		<div class="lace">
        <div class="introduce">
          <h3>Économisez <span>70%</span> sur ASC Ultimate et Obtenez GRATUITEMENT les Super Cadeaux!</h3>
          <p>Achetez ASC Ultimate pour 3 PCs aujourd’hui, obtenez gratuitement un paquet-cadeau que votre PC va adorer! <span><em id="packs"><?php echo $packsNum; ?> Paquets</em> Cadeaux laissés Aujourd’hui!</span></p>
          <div class="foucs"><img src="<?php echo $pResUrl; ?>img/salepack.jpg"></div>
        </div>
        <div class="control">
          <ul>
            <li class="name">Protection Ultimate pour PC</li>
            <li class="price">Aujourd’hui <span>29.99€</span></li>
            <li class="original">Prix d’Origine: <span>109.99€</span></li>
            <li class="link"><a href="http://www.iobit.com/buy.php?product=fr-ascupf-aff&ref=fr_ascu7purchase&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_ascu_aff" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014flashsale-fr-aff');" title="Achetez Advanced SystemCare Ultimate et obtenez Protected Folder GRATUITEMENT.">Acheter</a></li>
            <li class="people"><span><?php echo $buyNum; ?></span> personnes l’ont acheté</li>
            <li class="subscription">1 an d’abonnement / <span>3 PCs</span></li>
          </ul>
        </div>
    </div>
          
          <h3 class="corssname">Protection Ultime et Performance Ultime Pour Votre PC !</h3>
          <div class="whatdo clearfix">
          	<div class="left">
              	<div class="boxshot"></div>
                  <dl>
                      <dt>Advanced SystemCare Ultimate 7:</dt>
                      <dd>La protection toujours en service, automatique et tout-en-un contre toutes sortes de viruses, de ralentissement, de gel et de plantage du système. C’est la meilleure solution pour la sécurité et les performances de votre PC.</dd>
                      <dd><img src="<?php echo $pResUrl; ?>img/product_awards.png"></dd>
                      <dd class="edition"><a href="#compare">En savoir plus sur PRO version>></a></dd>
                      <dd class="sale"></dd>
                  </dl>
              </div>
              <div class="right">
              	<dl class="clearfix">
                  	<dt><img src="<?php echo $pResUrl; ?>img/add2pcs.jpg"></dt>
                      <dd class="name">Licence pour 2 PCs supplémentaires</dd>
                      <dd>La Licence de l’ Advanced SystemCare Ultimate supporte encore 2 PCs supplémentaires que vous pouvez partager avec votre famille et vos amis.</dd>
                      <dd class="free"></dd>
                  </dl>
                  <dl class="end clearfix">
                  	<dt><img src="<?php echo $pResUrl; ?>img/boxshot_pf.jpg"></dt>
                      <dd class="name">Protected Folder </dd>
                      <dd>Sans souci avec la sécurité des données!</dd>
                      <dd class="free"></dd>
                  </dl>
              </div>
          </div>
          <div class="cross clearfix">
          	  <div class="left">
                  <dl class="discribe">
                    <dd>Achetez Advanced SystemCare Ultimate, Obtenez la sécurité pour 2 autres PCs et Protected Folder Gratuitement! Offre d'une durée limitée!</dd>
                    <dt>Achetez Maintenant et Économisez 70%!</dt>
                  </dl>
              </div>
              <dl class="link">
              	<dt><span><?php echo $buyNum; ?></span>  personnes ont l’acheté</dt>
				<dd><a id="buyUrl2" href="http://www.iobit.com/buy.php?product=fr-ascupf-aff&ref=fr_ascu7purchase&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_ascu_aff" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014flashsale-fr-aff');" title="Achetez Advanced SystemCare Ultimate et obtenez Protected Folder GRATUITEMENT.">Acheter</a></dd>
              </dl>
              <dl class="right">
              	<dt>Maintenant <span>29.99€</span></dt>
                  <dd>Pour une valeur de <span>109.99€</span></dd>
              </dl>
          </div>
          <dl class="awards">
          	<dt>Distinctions pour produit</dt>
              <dd><img src="<?php echo $pResUrl; ?>img/awards.jpg"></dd>
          </dl>
          <div class="usersaying" id="compare">
              <h2>Commentaires des clients</h2>
              <div class="boxa" style="margin-top:0;">
                  <h3>"Advanced System Care Ultimate est vraiment très utile. "</h3>
                  <dl class="user">
                    <dt><img src="<?php echo $pResUrl; ?>img/rod_garnett.jpg" alt=""/></dt>
                    <dd>Rod Garnett</dd>
                    <dd>2012</dd>
                  </dl>
                  <dl class="quit">
                    <dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
                    <dd>J’avait un problème de toujours désordonner mon ordianteur auparavant. Puis, j’ai eu la première copie de l’Advanced Systemcare. Je ne perds plus mon temps. Parce que la fonction d’antivirus est incluse dans ce produit, il n’a pas besoin d’installer un autre logiciel. Advanced System Care Ultimate est très utile. Maintenant, mon ordinateur est toujours à jour et fonctionne aussi rapide comme le cerf ! Les autres produits ne le peuvent pas ; il n’y a pas de conflits incessants non plus."</dd>
                    <dd style="text-align:right;margin-top:10px;">- Commentaire traduit de l’anglais</dd>
                  </dl>
                </div>
                <div class="boxb" style="margin-top:0;">
                  <h3>"Je recommande l’advanced systemcare ultimate comme un antivirus/optimiseur de système"</h3>
                  <dl class="user">
                    <dt><img src="<?php echo $pResUrl; ?>img/dareen_lim.jpg" alt=""/></dt>
                    <dd>Dareen Lim</dd>
                    <dd>2013</dd>
                  </dl>
                  <dl class="quit">
                    <dt><img alt="quote" src="<?php echo $pResUrl; ?>img/quote.png"></dt>
                    <dd>Sur la version passée de l’ advanced systemcare ultimate, j’ai pas de problèmes presque sur tout, système, malware, etc. Et maintenant, il a été à jour, plus de fonctionnalités rendent mon ordinateur fonctionne à 5x plus rapide qu’auparavant. J’aime sa nouvelle apparance aussi. Alors, je vais le recommander comme un antivirus/optimiseur de système quand je répare l’ordinateurs des autres."</dd>
                    <dd style="text-align:right;margin-top:10px;">- Commentaire traduit de l’anglais</dd>
                  </dl>
              </div>
              <div class="clear"></div>
          </div>
          <div class="comparison_table">
            <h4>Pourquoi choisissez-vous l’Advanced SystemCare Ultimate 7 ?</h4>
            <div id="hidetab">
              <dl class="comtable">
                <dt><span>Meilleure Protection</span>, et <span>Pas de ralentissement des performances</span>. Lire la comparaison suivante</dt>
                <dd><img src="<?php echo $pResUrl; ?>img/comparetable.jpg"  /></dd>
              </dl>
              <dl class="comlist">
                <dt>Taux de Détection Inégalée et Protection Maximale</dt>
                <dd>Nettoyer Virus, chevaux de Troie, vers, publiciel et toutes sortes de maliciels en un seul clic. Advanced SystemCare Ultimate 7 est aussi vous offer la protection toujours en service, automatique et proactive contre toutes les ménaces de sécurité Internet avec la mise à jour rapide de base de données de virus.</dd>
                <dt>Profiter de La Sécurité sans Ralentir Le Système</dt>
                <dd>Grâce à notre technique de sécurité Internet avancé, votre système fonctionne à la vitesse maximale sans aucun ralentissement de performances.</dd>
                <dt>Naviguer, Rechercher, Télécharger et Partager En Toute Sécurité</dt>
                <dd>Technologie proactive de contrôle de virus surveille le comportement de processus en temps réel, détecte les fichiers partagés avec l’email et bloque les menaces possibles. Taux de détection inégalé vous assure un environnement plus sécurisé quand vous utilisez l’ordinateur.</dd>
                <dt>Obtenir Les Performances Bien Améliorées et Profiter de La Nouvelle Expérience du PC</dt>
                <dd>les capacités d’optimisation de PC qui ont été prouvé efficace exploitent toute la puissance de votre PC. Avec l’optimisation en temps réel et la fonctionnalité de l’ActiveBoost, les ressources du système sont organisés intelligemment pour vous assurer le PC à grande-vitesse.</dd>
              </dl>
            </div>
         </div>
         <div class="floatlayer" id="floatlayer">
			      <dl class="left">
            	<dt>Économisez <span>70%</span>, profitez de la meilleure protection et des performances ultimes!</dt>
              <dd><span><?php echo $buyNum; ?></span> personnes l’ont acheté</dd>
            </dl>
            <div class="price">29.99€</div>
            <dl class="right">
            	<dt><a href="http://www.iobit.com/buy.php?product=fr-ascupf-aff&ref=fr_ascu7purchase&aff=<?php echo $_GET['aff']; ?>&refs=fr_purchase_ascu_aff" onclick="ga('send', 'event', 'ascubuy', 'buy', '2014flashsale-fr-aff');" title="Achetez Advanced SystemCare Ultimate et obtenez Protected Folder GRATUITEMENT.">Acheter</a></dt>
                <dd id="counttime1"><span>00</span>d: <span>00</span>h: <span>00</span>m: <span>00</span>s <em>000</em></dd>
            </dl>
         </div>
         <dl class="annotation">
            <dt>N.B.</dt>
            <dd>①.Ces programmes de promotion sont modifiable sans préavis, à tout moment et à notre seule discrétion.</dd>
          </dl>
      </div>
      <div class="copy">Copyright &copy; 2005 - <?php echo date('Y')?> IObit. Tous droits réservés</div>
  </div>
    <script type="text/javascript">
    $(function () {
        $(window).on('scroll',function(){
        if ($(window).scrollTop() > 390) {
          $('#floatlayer').addClass('on');
        }else{
          $('#floatlayer').removeClass('on');
        }
      });  
    });
    </script>
    <script type="text/javascript">
		function cycleCountdown(){
			var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
			var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
			d = MApp(2.2).packages.zeroize(datetime[0], 2);
			h = MApp(2.2).packages.zeroize(datetime[1], 2);
			i = MApp(2.2).packages.zeroize(datetime[2], 2);
			s = MApp(2.2).packages.zeroize(datetime[3], 2);
			mi = MApp(2.2).packages.zeroize(datetime[4], 3);
			document.getElementById('counttime').innerHTML = '<span>'+h+'</span><span>'+i+'</span><span>'+s+'</span><em>'+mi+'</em>';
			document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h: <span>'+i+'</span>m: <span>'+s+'</span>s <em>'+mi+'</em><sub>①</sub>';
			setTimeout('cycleCountdown()', 1);
		}
		cycleCountdown();
	</script>
<?php echo $gJavascript['foot']; ?>
</body>
</html>