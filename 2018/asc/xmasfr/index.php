<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='frascjanpa'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>3){
      $packsNum--;
      setcookie($cName,$packsNum);
      if(rand(1,100)%2==0){
        $packsNum++;
      }
    }else{
      $packsNum=3;
      setcookie($cName,$packsNum);
    }
  }else{
    $packsNum=69;
    setcookie($cName,$packsNum);
  }
  echo $packsNum;
  exit();
}

if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
        'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
        'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
        'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
        'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
        'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','ascofficialfree','ascofficialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb')
)){
  $refstr='-'.$_GET['st'];
}else{
  $refstr='';
}

if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refstr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Jusqu'?? -85% sur Advanced SystemCare PRO ??? Vente Flash de No??l - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,800" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
    <?php echo $gJavascript ['public'];?>
    <?php echo $gJavascript ['head']?>
</head>

<body>

	<!-- banner start -->
	<div class="banner">
    <div class="wrapper">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com/" target="_blank">IObit</a>
      <!-- title -->
      <h1 class="title">Vente flash special No??l</h1>
      <h3>Pour No??l, offrez ?? votre PC une nouvelle sant?? !</h3>
      <!-- offer65 -->
      <div class="offer65 clearfix">
        <!-- box -->
        <img class="box fl" src="<?php echo getStaticUrl('images/banner-offer65-box.png')?>" alt="">
        <!-- off -->
        <img class="off fl" src="<?php echo getStaticUrl('images/banner-offer65-off.png')?>" alt="">
        <!-- message -->
        <div class="message fl">
          <!-- countdown -->
          <p class="countdown">
            <strong>00</strong>J :
            <strong>00</strong>H :
            <strong>00</strong>M :
            <strong class="small">000</strong>S*
          </p>
          <!-- price -->
          <p class="price">
            <strong>17.99 ???</strong> Au lieu de <del>49.99 ???</del><br>
            <small> 1 an d???abonnement / 3 PC</small>
          </p>
          <!-- buybtn -->
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-asc123pc1799&ref=fr_asc123pcpurchase1811b<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1811a-fr');">VITE, J'EN PROFITE</a>
        </div>
      </div>
      <!-- offer85 -->
      <div class="offer85 clearfix">
        <!-- box -->
        <div class="box fl">
          <img src="<?php echo getStaticUrl('images/banner-offer85-box.png')?>" alt="">
          <img class="asc-icon" src="<?php echo $pResUrl;?>images/asc-icon.png" alt="">
        </div>

        <!-- off -->
        <img class="off fl" src="<?php echo getStaticUrl('images/banner-offer85-off.png')?>" alt="">
        <!-- message -->
        <div class="message fl">
          <!-- progress-bar -->
          <div class="progress-bar">
            <h3>Offre limit??e ?? 500 unit??s! Plus que <strong class="packsNum"><?php echo $packsNum ?></strong> disponibles</h3>
            <div class="bar">
              <span></span>
            </div>
          </div>
          <!-- price -->
          <p class="price">
            <strong>19.99 ???</strong> Au lieu de <del>139.96 ???</del><br>
            <small> 1 an d???abonnement / 3 PC</small>
          </p>
          <!-- buybtn -->
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-asc123pcsdpfamc1999&ref=fr_asc123pcpfsdamcpurchase1811<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1811b-fr');">VITE, J'EN PROFITE</a>
        </div>
        <!-- pop -->
        <div class="pop">
          <dl>
            <dt>Smart Defrag 6 PRO</dt>
            <dd>
              Une d??fragmentation rapide & profonde pour optimiser le disque<br>
              dur & les performances du PC
            </dd>
          </dl>
          <dl>
            <dt>Protected Folder</dt>
            <dd>
              Un outil de protection efficace des fichiers qui garantit la s??curit??<br>
              des dossiers, des donn??es et de la vie priv??e !
            </dd>
          </dl>
          <dl>
            <dt>AMC Security PRO</dt>
            <dd>
              Application tout-en-un pour nettoyer et optimiser votre <br>
              appareil Android
            </dd>
          </dl>
        </div>
      </div>
    </div>
	</div>
	<!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <!-- title -->
      <h3 class="title">Pourquoi choisir Advanced SystemCare 12 PRO</h3>
      <p class="subtitle">Des fonctions plus pouss??es que la version gratuite</p>
      <!-- showcase -->
      <div class="showcase">
        <div class="imglist">
          <ul>
            <li class="shot3"><img src="<?php echo getStaticUrl('images/screenshot01.png')?>" alt=""/></li>
            <li class="shot2"><img src="<?php echo getStaticUrl('images/screenshot02.png')?>" alt=""/></li>
            <li class="shot1"><img src="<?php echo getStaticUrl('images/screenshot03.png')?>" alt=""/></li>
          </ul>
        </div>
        <a href="javascript: prevFun();" class="prev control">&lt;</a>
        <a href="javascript: nextFun();" class="next control">&gt;</a>
      </div>
      <!-- description -->
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
        <dd>
          <h3>Registre plus propre</h3>
          <p>
            Nettoyez en profondeur les registres inutiles<br>
            ou invalides pour lib??rer de l'espace disque<br>
            et am??liorer les performances du PC.
          </p>
        </dd>
      </dl>
      <dl class="fl middle">
        <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
        <dd>
          <h3>
            Une navigation sur Internet<br>
            jusqu'?? 300% plus rapide
          </h3>
          <p>
            Optimiser les param??tres du navigateur pour<br>
            acc??l??rer la connexion Internet.
          </p>
        </dd>
      </dl>
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
        <dd>
          <h3>Navigation en ligne plus s??re</h3>
          <p>
            Efface automatiquement les traces priv??es<br>
            lorsque vous quittez le navigateur pour<br>
            ??vitertout suivi malveillant.
          </p>
        </dd>
      </dl>
      <div class="clear"></div>
    </div>
  </div>
  <!-- feature end -->

  <!-- gifubox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>Profitez des cadeaux exclusifs uniquement pour No??l !</h2>
      <div class="clearfix">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
          <dd>
            <h3>Smart Defrag 6 PRO</h3>
            <del>29.99???</del>
            <p>Maximisez les performances <br>du disque dur et de votre PC.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></dt>
          <dd>
            <h3>Protected Folder</h3>
            <del>39.99???</del>
            <p>Prot??gez vos fichiers et vos donn??es importants contre le vol, la perte et les fuites.</p>
          </dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="Smart Defrag 6 PRO"/></dt>
          <dd>
            <h3>AMC Security PRO</h3>
            <del>19.99???</del>
            <p>Application tout-en-un pour nettoyer et optimiser votre appareil Android</p>
          </dd>
        </dl>
      </div>
      <div class="price">
        <h3>Vite, les cadeaux exclusifs sont disponibles ?? quantit?? limit??e??!</h3>
        <p>Plus que <b class="packsNum">120</b> disponibles aujourd???hui??!</p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-asc123pcsdpfamc1999&ref=fr_asc123pcpfsdamcpurchase1811<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1811b-fr');">
          VITE, J'EN PROFITE
        </a>
      </div>
    </div>
  </div>
  <!-- gifubox end -->

	<!-- review start -->
	<div class="reviews wrapper">
    <!-- title -->
		<h2>Les experts l???ont approuv??, les utilisateurs l???adorent!</h2>
		<p>ASC - Le choix de plus de <span>250 millions</span> d'utilisateurs dans le monde</p>
    <!-- map -->
		<div class="map">
			<span class="recover recover01 big"></span>
			<span class="recover recover02 middle"></span>
			<span class="recover recover03 smail"></span>
			<span class="recover recover04 big"></span>
			<span class="recover recover05 middle"></span>
			<span class="recover recover06 smail"></span>
			<span class="recover recover07 big"></span>
			<span class="recover recover08 middle"></span>
			<span class="recover recover09 smail"></span>
			<span class="recover recover10 smail"></span>
			<span class="recover recover11 smail"></span>
			<span class="recover recover12 smail"></span>
			<span class="recover recover13 middle"></span>
			<span class="recover recover14 middle"></span>
			<span class="recover recover15 smail"></span>
			<span class="recover recover16 smail"></span>
			<span class="recover recover17 big"></span>
			<span class="recover recover18 smail"></span>
			<span class="recover recover19 smail"></span>
			<span class="recover recover20 big"></span>
			<span class="recover recover21 middle"></span>
      <!-- tradotto-da-tedesco -->
			<dl class="tradotto-da-tedesco">
				<dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
				<dd>C'est le meilleur programme qui nettoie et acc??l??re mon PC<br> correctement et en toute s??curit??.</dd>
			</dl>
      <!-- html-it -->
			<dl class="html-it">
				<dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
				<dd>
          Advanced SystemCare Pro int??gre des outils indispensables pour surveiller la sant?? <br>
          de votre syst??me en v??rifiant l'??tat des disques durs, en bouchant les failles de<br>
          s??curit?? et pour prot??ger votre vie priv??e en effa??ant les fichiers sensibles ainsi<br>
          qu'une fonction Turbo Boost pour nettoyer votre PC en profondeur.
        </dd>
			</dl>
      <!-- baixaki -->
			<dl class="baixaki">
				<dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
				<dd>Advanced SystemCare a une efficacit?? exceptionnelle. Il est capable de d??tecter et de r??soudre des<br> probl??mes qui sont vraiment complexes, difficiles ?? imaginer.</dd>
			</dl>
      <!-- charles-r-widick -->
			<dl class="charles-r-widick">
				<dd>Mon choix est sans aucun doute<br> Advanced SystemCare Pro.</dd>
				<dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
			</dl>
      <!-- cnet -->
			<dl class="cnet">
				<dd>Advanced SystemCare vise ?? rem??dier ?? tout<br> probl??me affectant votre ordinateur!</dd>
				<dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
			</dl>
		</div>
	</div>
	<!-- review end -->

	<!-- compare start -->
	<div class="compare wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
      <!-- thead -->
		  <thead>
			  <tr>
				  <th class="text" colspan="2">La comparaison des produits:</th>
				  <th class="spac"></th>
				  <th class="itemb">
					  <div class="box">
              Advanced SystemCare  <br> <strong>Free</strong>
					  </div>
				  </th>
				  <th class="spac"></th>
				  <th class="itema">
					  <div class="box">
              Advanced SystemCare  <br> <strong>PRO</strong>
					  </div>
				  </th>
			  </tr>
		  </thead>
		<tbody>
    <!-- 01 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
				<td class="virtue">
          <strong>Nettoyage, r??paration</strong> et <strong>optimisation</strong> du syst??me de base
        </td>
				<td class="spac"></td>
				<td class="itemb gray">
          <i class="star grey"></i>
        </td>
				<td class="spac"></td>
				<td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 02 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
				<td class="virtue">
          <strong>R??parer</strong> les failles de s??curit?? pour emp??cher le piratage en un clic <sup class="green">nouveau</sup>
				</td>
				<td class="spac"></td>
        <td class="itemb gray">
          <i class="star grey"></i>
        </td>
        <td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 03 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
				<td class="virtue">
          Mettez vos donn??es personnelles ?? l'abris des programmes frauduleux <sup class="green">nouveau</sup>
        </td>
				<td class="spac"></td>
        <td class="itemb"></td>
        <td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 04 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
				<td class="virtue">
          Personne ne peut voler votre empreinte digitale num??rique pour suivre vos comportements en ligne <sup class="green">nouveau</sup>
        </td>
				<td class="spac"></td>
        <td class="itemb"></td>
        <td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 05 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
				<td class="virtue">
          Optimisation de <strong>la vitesse Internet jusqu'?? 300%</strong> avec Internet Booster <sup class="red">am??lior??</sup>
        </td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 06 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
				<td class="virtue">
          Le d??marrage jusqu'?? 200% <strong>plus rapide</strong> de votre PC <sup class="red">am??lior??</sup>
        </td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 07 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
				<td class="virtue">
          <strong>Nettoyage</strong> des registres empil??s pour un syst??me stable <sup class="red">am??lior??</sup>
        </td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 08 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
				<td class="virtue">
          Nouveau moteur d'optimisation du disque pour <strong>maximiser</strong> les performances PC <sup class="green">nouveau</sup>
				</td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 09 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
				<td class="virtue">
          <strong>Protection</strong> en temps r??el contre les menaces de s??curit??
        </td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 10 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
				<td class="virtue">
          <strong>D??ctection</strong> compl??te contre les infections les plus approfondies
        </td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 11 -->
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
				<td class="virtue lineheight20">
          <strong>Suppression Automatique des publicit??s & prot??ge</strong> vos infos personnelles <br>une navigation plus s??re
        </td>
				<td class="spac"></td>
				<td class="itemb"></td>
				<td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
			</tr>
    <!-- 12 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
        <td class="virtue">
          <strong>Nettoyage</strong> Auto de la RAM pour un syst??me plus fluide
        </td>
        <td class="spac"></td>
        <td class="itemb"></td>
        <td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
      </tr>
    <!-- 13 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
        <td class="virtue">
          <strong>Mise ?? jour automatique</strong> vers la derni??re version
        </td>
        <td class="spac"></td>
        <td class="itemb"></td>
        <td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
      </tr>
    <!-- 14 -->
      <tr>
        <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
        <td class="virtue">
          Soutien technique <strong>gratuit de 24/7</strong> ?? la demande
        </td>
        <td class="spac"></td>
        <td class="itemb"></td>
        <td class="spac"></td>
        <td class="itema">
          <i class="star red"></i>
        </td>
      </tr>
		</tbody>
	</table>
	</div>
	<!-- compare end -->

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <!-- asc-box -->
      <div class="asc-box fl">
        <div class="asc-box-content clearfix">
          <img class="fl" src="<?php echo $pResUrl;?>images/banner-offer85-box.png" alt="">
          <img class="fr" src="<?php echo $pResUrl;?>images/banner-offer65-box.png" alt="">
          <img class="asc-icon" src="<?php echo $pResUrl;?>images/asc-icon.png" alt="">
        </div>
      </div>
      <!-- asc-select -->
      <div class="asc-select fl">
        <!-- offer65 -->
        <div class="selecter offer65" data-original="49.99???" data-discount="17.99???" data-href="https://www.iobit.com/buy.php?product=fr-asc123pc1799&ref=fr_asc123pcpurchase1811b<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1811a-fr');">
          <img src="<?php echo getStaticUrl('images/bottombuy-offer65-off.png')?>" alt=""/>
          <p>ASC PRO 12 <span>1 an / 3 PC</span></p>
        </div>
        <!-- offer85 -->
        <div class="selecter offer85 active" data-original="119.97???" data-discount="19.99???" data-href="https://www.iobit.com/buy.php?product=fr-asc123pcsdpfamc1999&ref=fr_asc123pcpfsdamcpurchase1811<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc" data-ga="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1811b-fr');">
          <img src="<?php echo getStaticUrl('images/bottombuy-offer85-off.png')?>" alt=""/>
          <p>ASC PRO 12 <span>1 an / 3 PC</span> + 3 outils Pro</p>
        </div>
      </div>
      <!-- asc-message -->
      <div class="asc-message fr">
        <strong>19.99 ???</strong>
        <p>Au lieu de <del>139.96 ???</del></p>
        <!-- buybtn -->
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=fr-asc123pcsdpfamc1999&ref=fr_asc123pcpfsdamcpurchase1811<?php echo $refstr;?>&aff=<?php echo $_GET['aff']?>&refs=fr_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1811b-fr');">VITE, J'EN PROFITE</a>
      </div>
      <!-- pop -->
      <div class="pop">
        <dl>
          <dt>Smart Defrag 6 PRO</dt>
          <dd>
            Une d??fragmentation rapide & profonde pour optimiser le disque<br>
            dur & les performances du PC
          </dd>
        </dl>
        <dl>
          <dt>Protected Folder</dt>
          <dd>
            Un outil de protection efficace des fichiers qui garantit la s??curit??<br>
            des dossiers, des donn??es et de la vie priv??e !
          </dd>
        </dl>
        <dl>
          <dt>AMC Security PRO</dt>
          <dd>
            Application tout-en-un pour nettoyer et optimiser votre <br>
            appareil Android
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- service start -->
  <div class="service wrapper clearfix">
    <!-- Satisfait ou Rembours?? -->
    <dl class="astisfait fl">
      <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
      <dd>
        <h3>Satisfait ou Rembours??</h3>
        <p>
          Garantie satisfait ou <br>rembours?? pendant 60 <br>jours apr??s la date d???achat.
        </p>
      </dd>
    </dl>
    <!-- Paiement 100% S??curis?? -->
    <dl class="paiement fl">
      <dt><img src="<?php echo $pResUrl;?>images/godaddy-secure.png" alt=""></dt>
      <dd>
        <h3>Paiement 100% S??curis??</h3>
        <P>
          IObit vous propose sept <br>modes de paiement s??curis?? <br>pour r??gler vos achats.
        </P>
      </dd>
    </dl>
    <!-- Modes de paiement accept??s -->
    <dl class="modes fl">
      <dt><img src="<?php echo $pResUrl;?>images/modes.png" alt=""></dt>
      <dd>
        <h3>Modes de paiement accept??s</h3>
        <p>
          Nous vous proposons 7 <br>modes de paiement
        </p>
      </dd>
    </dl>
    <!-- Service Client ?? votre ??coute -->
    <dl class="service-client fr">
      <dt><img src="<?php echo $pResUrl;?>images/service-client.png" alt=""></dt>
      <dd>
        <h3>Service Client ?? votre ??coute</h3>
        <p>
          Notre Support Technique <br>gratuit est ?? votre disposition <br>24 heures sur 24, 7<br>
          jours sur 7.
        </p>
      </dd>
    </dl>
  </div>
  <!-- service end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <p class="notes">
      Note:<br>
      *. Les donn??es peuvent varier en fonction du syst??me ou de l'ordinateur.<br>
      *.Ces programmes de promotion sont modifiables sans pr??avis, ?? tout moment et ?? notre seule discr??tion.
    </p>
    <p class="copyright">Copyright ?? 2005 - 2018 IObit. Tous droits r??serv??s</p>
  </div>
  <!-- footer end -->
  
  <script src="<?php echo getStaticUrl('script/TweenMax.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>