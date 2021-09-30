<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");

    $code=array("D55EE-6FFF9-693FD-B5F84","5CA69-1B597-E512D-6D884","E80E1-359FB-2A0D9-E9784","A2428-162EE-C52DA-50584","CC476-78CE6-8C6F3-E6284");
    if ($_GET['action'] == 'getCode'){
        $i=rand(0,4);
        echo $code[$i];
        exit;
    }
    function microtime_float(){
        list($usec, $sec) = explode(' ', microtime());
        return ((float)$usec + (float)$sec);
    }
    $codeNum = ceil(microtime_float()*2000/20000);
    $packsNum = ceil(microtime_float()*2000/12000);
    $codeNum = 360-($codeNum%360);
    $packsNum = 560-($packsNum%560);
    if ($_GET['action'] == 'getCodes'){
        echo $codeNum;
        exit;
    }
    if ($_GET['action'] == 'getPacks'){
        echo $packsNum;
        exit;
    }
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>La Plus Grande Offre Exclusive Pour Le Lancement d’Advanced SystemCare 9</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700italic' rel='stylesheet' type='text/css'>
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
    <script type="text/javascript">
        function decreasingCodes(){
            $.ajax({
                type: "GET",
                url: "index.php",
                data: "action=getCodes&r="+Math.random(),
                success: function(codes){
                    $('#codes').html(codes);
                    setTimeout('decreasingCodes()', 10000);
                }
            });
        }
        function decreasingPacks(){
            $.ajax({
                type: "GET",
                url: "index.php",
                data: "action=getPacks&r="+Math.random(),
                success: function(packs){
                    $('#packs').html(packs);
                    setTimeout('decreasingPacks()', 6000);
                }
            });
        }
        setTimeout('decreasingCodes()', 10000);
        setTimeout('decreasingPacks()', 6000);
    </script>
</head>
<body>
	<div class="header">
		<div class="wrapper">
			<a href="http://www.iobit.com/fr/index.php" target="_blank" class="logo" title="Go to IObit Home Page">IObit</a>
			 <h1>La Plus Grande Offre Exclusive Pour Le Lancement de <strong>Advanced SystemCare 9</strong></h1>
			 <h2>Pour  fêter le lancement d’Advanced SystemCare 9, IObit vous prépare 3 surprises EXCLUSIVES à durée limitée <br>Vous serez les premiers à utiliser Gratuitement ce programme excellent!</h2>
			 <dl>
			 	<dt><strong>Du 17 Novembre au 17 Décembre 2015</strong></dt>
				 <dd>
				 	<a href="javascript:void(0);" onclick="goTaget($('#region1'));" class="button deepblue" title="Téléchargement Gratuit"><span><em></em>Téléchargement Gratuit</span></a>
				 	<a href="javascript:void(0);" onclick="goTaget($('#region2'));" class="button blue" title="Concours"><span><em></em>Concours</span></a>
				 	<a href="javascript:void(0);" onclick="goTaget($('#region3'));" class="button green" title="Offre Exclusive"><span><em></em>Offre Exclusive</span></a>
				 </dd>
			 </dl>
		</div>
	</div>
	<div class="main">
		<div class="wrapper">
			<div class="region blue set1" id="region1">
				<div class="continer">
					<div class="headline">
						<big>1</big>
						<h2>Advanced SystemCare 9</h2>
						<p>Maintenant vous pourrez donner un coup de jeune de votre PC en Un-Clic</p>
						<a href="http://update.iobit.com/dl/asc9/advanced-systemcare-setup-v9.exe" class="button green" title="Télécharger Gratuitement" onclick="ga('send', 'event', 'ascdl', 'download', 'affpage-fr');"><span><em></em>Télécharger Gratuitement</span></a>
					</div>
					<div class="intro">
						<img src="<?php echo $pResUrl; ?>images/screenshot-asc.jpg" alt="">
						<!-- <h3>Nouveatés</h3> -->
						<ul>
							<li>Double la vitesse de votre PC! </li>
							<li>Booste la vitesse d’Internet jusqu’à 300% plus rapide!</li>
							<li>Nettoie et répare tous les problèmes de votre PC en 1 clic!</li>
							<li>Surveille l'état de votre PC en temps reel!</li>
                            <p><a href="http://www.iobit.com/fr/advancedsystemcarefree.php" target="_blank"> En savoir plus sur ASC 9></a></p>
						</ul>
					</div>
				</div>
			</div>
			<div class="region gray" id="region2">
				<div class="continer">
					<div class="headline">
						<big>2</big>
						<h2>Gagnez un code de licence en un-clic</h2>
						<p>Seulement <strong id="codes"><?php echo $codeNum;?></strong> licences sont encore disponibles! </p>
					</div>
					<div class="info">
						<div class="intro">
							<p>Partagez cette page avec vos amis sur Facebook,</p><p>et vous pourrez obtenir automatiquement un</p><p>code de licence, et vous serez les premiers à</p> <p>utiliser ce tout nouveau Advanced SystemCare 9 PRO! </p>
							<p class="end">N’hésitez pas à nous suivre, et nous allons poster plus de promotions via Facebook.</p>
						</div>
						<div class="fbshare">
							<dl>
								<dt><span>1</span><p>Cliquez sur le bouton de Partager Facebook :</p></dt>
								<dd><a href="javascript:fbshare();"class="button blue" title="Partager Facebook"><span><em></em>Facebook </span></a></dd>
								<dt><span>2</span><p>Le code de licence d’Advanced SystemCare 9 PRO s’affichera automatiquement ci-dessous: </p></dt>
								<dd>
									<div class="codebox">xxxxx-xxxxx-xxxxx-xxxxx</div>
								</dd>
								<dd>* Note : le code de licence est pour 1 PC / 1 mois</dd>
							</dl>
						</div>
					</div>
				</div>				
			</div>
			<div class="region blue set2"  id="region3">
				<div class="continer">
					<div class="headline">
						<big>3</big>
						<h2>Seulement <strong>0 €</strong> pour profiter de la version PRO</h2>
						<p>Seulement <strong id="packs"><?php echo $packsNum;?></strong> paquets sont encore disponibles</p>
					</div>
					<div class="info">
						<div class="intro">
							<img src="<?php echo $pResUrl; ?>images/boxshot-asc.png" alt="">
							<span>30 Jours d’essai Gratuit</span>
							<em>+</em>
							<span>1 an / 3 PCs</span>
						</div>
						<dl class="cartbox">
							<dt><strong>0€</strong><del>99,99€</del></dt>
							<dd><a href="http://www.iobit.com/buy.php?product=fr-asc93pc1y&ref=fr_asc1y3pc11purchase&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1511-fr')" class="button red" title="VITE JE FONCE"><span>VITE JE FONCE</span></a></dd>
						</dl>
						<div class="clear"></div>
						<p class="discript">Condition de promotion: À la fin de la période d'essai gratuit de 30 jours, votre carte de crédit ou compte PayPal seront facturés <span>17,99 €</span> automatiquement (vous pourrez l’annuler pendant la période d’essai). Cette grande réduction de <span>82%</span> est une offre exclusive pour les clients qui visitent cette page!</p>
					</div>
				</div>				
			</div>
			<div class="brand clearfix">
				<a href="https://www.youtube.com/watch?v=BVZWORhYTUE" target="_blank"><img src="<?php echo $pResUrl; ?>images/imageyourpc.jpg"></a>
				<a href="http://freewares-tutos.blogspot.fr/" target="_blank" title="Freewares & Tutos"><img src="<?php echo $pResUrl; ?>images/freewares-tutos.jpg" alt="Freewares & Tutos"></a>
				<a href="http://nalaweb.com/" target="_blank" title="Nalaweb"><img src="<?php echo $pResUrl; ?>images/nalaweb.jpg" alt="Nalaweb"></a>
				<a href="http://www.clubic.com/telecharger-fiche403234-advanced-systemcare-free.html" target="_blank" ><img src="<?php echo $pResUrl; ?>images/clubic.jpg"></a>
			</div>			
		</div>
	</div>
	<div class="footer">
		<div class="wrapper">
			<p>Copyright © 2005 - 2015 IObit. Tous droits réservés</p>
		</div>
	</div>
	<script>
        $(function (d, s, id) {
            var js, fjs = d.getElementsByTagName(s)[0];
            if (d.getElementById(id)) return;
            js = d.createElement(s);
            js.id = id;
            js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=515273005297691";
            fjs.parentNode.insertBefore(js, fjs);
        }(document, 'script', 'facebook-jssdk'));
        function fbshare(){
            FB.ui({
                method: 'feed',
                link: 'http://purchase.iobit.com/fr/aff/asc9mediaspecialoffer.php',
                picture: 'http://purchase.iobit.com/aff/fr/novasc9mediaspecialoffer/images/banner2.png',
                name: 'L’Offre Exclusive Pour Le Lancement d’Advanced SystemCare 9',
                caption: '',
                description: 'Téléchargez gratuitement le tout nouveau ASC 9, et gagnez un code de licence en un clic!'
            }, function (r) {
                if(typeof r !=='undefined'){
                    if(r.post_id!=''){
                        $.ajax({
                            type: "GET",
                            url: "index.php",
                            data: "action=getCode",
                            success: function(code){
                                $(".main .region.gray .continer .info .fbshare dl dd .codebox").addClass("active");
                                $(".main .region.gray .continer .info .fbshare dl dd .codebox").html(code);
                            }
                        });
                    }
                }
            });
        }
		function goTaget(target) {
			var Theigth = target.offset().top - 50;
			$("html, body").animate({scrollTop: Theigth}, 'slow');
		}
	</script>
</body>
</html>