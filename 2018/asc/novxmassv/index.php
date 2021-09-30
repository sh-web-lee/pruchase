<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
	$date=$_GET['d'];
	$cName='svascjanpa'.$date;
	$cookie=$_COOKIE[$cName];
	if($cookie){
		$packsNum=$_COOKIE[$cName];
		if($packsNum>5){
			$packsNum--;
			setcookie($cName,$packsNum);
			if(rand(1,100)%2==0){
				$packsNum++;
			}
		}else{
			$packsNum=5;
		}
	}else{
		$packsNum=41;
		setcookie($cName,$packsNum);
	}
	echo $packsNum;
	exit();
}

function get_line($file, $line)
{
	$fp = fopen($file, 'r');
	$i = 0;
	while (!feof($fp)) {
		$i++;
		$c = fgets($fp);
		if ($i == $line) {
			return $c;
			break;
		}
	}
}

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -76400174;
$buyNum = number_format($buyNum);
$buyNum ='3 365 695';

$name=explode(' ',trim(get_line('data/sv_name_novxmas.txt',rand(1,425))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
$viewNum=rand(60,88);
//if($_GET['type']==2){
//	$saleType=1;
//}
if($_GET['action']=='getPack'){
	echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'buyNum'=>$buyNum,'viewNum'=>$viewNum));
	exit();
}

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
				'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
				'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
				'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
				'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
				'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
				'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
				'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
				'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro',
				'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb')
)) {
	$refStr = '-' . $_GET['st'];
} else {
	$refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
	$refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
	$refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
	$refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="Copyright" content="IObit">
	<title>Spara upp till 85% på Advanced SystemCare och du får extra skydd helt - IObit  </title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<div class="banner">
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<h1>Stort Jul Erbjudande</h1>
			<h2>Exklusiva gåvor ENDAST under denna jul! Aktivera nu!</h2>

 			<div class="defalut-exceed"></div>
 			<div class="sold-box">
 				<h3>Erbjudandet slutar om <strong>55</strong> h <strong>55</strong> m <strong>55</strong> sec<strong>55</strong>ms *</h3>
 				<div class="img-box">
 					<span class="three-img"></span>
 					<span class="one-img"></span>
 				</div>
 				<dl>
 					<dt><strong>85%</strong> RABATT</dt>
 					<dd><a href="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249x&ref=sv_asc123pcsdpfpurchase1811<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1811-sv')" class="button button-btm-lag"> <span></span>KÖP NU</a></dd>
 					<dd>Mer än <span class="buyNum">3 365 695</span> personer har redan köpt den </dd>
 				</dl>
 			</div>
 			<div class="one-pc-box">
 				<div class="img-box">
 					<span class="one-img"></span>
 					<span class="three-img"></span>
 				</div>
 				<dl>
 					<dt><strong>58% </strong> RABATT</dt>
 					<dd><a href="https://www.iobit.com/buy.php?product=sv-asc123pc249&ref=sv_asc123pc249purchase1811<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1811-sv')" class="button">KÖP NU</a></dd>
 				</dl>
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
	<div class="payments wrapper">
		<img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
	</div>
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>Aktivera Advanced SystemCare PRO för att få en snabbare, <br>renare och säkrare dator!</h2>
			<div class="showcase">
				<div class="inner">
					<ul class="screenshot">
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
						</li>
					</ul>
				</div>
				<ul class="zoom">
					<li></li>
					<li class="fun3">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
						</div>
					</li>
					<li class="fun2">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
						</div>
					</li>
					<li class="fun4">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
						</div>
					</li>
					<li class="fun5">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
						</div>
					</li>
				</ul>
				<ul class="list-icon">
					<li class="active"></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="detail-list">
				<dl>
					<dt><i class="benfits04"></i></dt>
					<dd>
						<h3>100% BESKYDD</h3>
						<p>Det skyddar dina personuppgifter och privatliv från hemliga intrång, stoppar alla försök från skadlig programvara samtidigt som din integritet förblir dubbelt * så säker som i gratisversionen</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits02"></i></dt>
					<dd>
						<h3>200% * SNABBARE</h3>
						<p>Rensar alla onödiga filer och optimerar CPU och RAM för att påskynda uppstarten, ökar systemets hastighet och gör en långsam dator upp till 200% snabbare</p>
					</dd>
				</dl>
				<dl class="three">
					<dt><i class="benfits03"></i></dt>
					<dd>
						<h3>300% * SNABBARE</h3>
						<p>Accelerera nedladdning, surfning, spelande och YouTube-visning med upp till 300%</p>
					</dd>
				</dl>
				<dl class="three">
					<dt><i class="benfits01"></i></dt>
					<dd>
						<h3>STÖRRE LEDIGT UTRYMME</h3>
						<p>Deep rensar bort skräpfiler, ogiltiga länkar, systemloggfiler samt ofullständiga nedladdningsfiler med avancerad optimering</p>
					</dd>
				</dl>
				<a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Läs mer om PRO-versionen>></a>
			</div>
		</div>
	</div>
	<!-- end benfits -->
	<!-- gifts -->
	<div class="gifts">
		<div class="wrapper">
			<h2>Exklusiva gåvor ENDAST under denna jul</h2>
			<div class="gift-list clearfix">
				<dl class="exceed">
					<dt>
						<span></span>
						<strong>IObit Uninstaller 8 PRO</strong>
					</dt>
					<dd><del>399kr</del> <b><span>0</span>kr</b></dd>
				  <dd><p>Det bästa valet för effektiv avinstallation av <br>envisa program och plug-ins!</p></dd>
				</dl>
				<dl class="pf">
					<dt>
						<span></span>
						<strong>Protected Folder </strong>
					</dt>
					<dd><del>499kr</del> <b><span>0</span>kr</b></dd>
				  <dd><p>Skydda dina filer från skadliga attacker <br>1 lösenord för alla filer <br>Skydda ditt privatliv från intrång</p></dd>
				</dl>
				<dl class="sd">
					<dt>
						<span></span>
						<strong>Smart Defrag 6 PRO</strong>
					</dt>
					<dd><del>459kr</del> <b><span>0</span>kr</b></dd>
				  <dd><p>Högre defragmenteringshastighet <br>Auto-defragmentera valda filer <br>Snabbare uppstart av datorn</p></dd>
				</dl>


			</div>
			<a href="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249x&ref=sv_asc123pcsdpfpurchase1811<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1811-sv')" class="button btn-mid-lag"> <span></span>HÄMTA PRESENTEN NU!</a>

		</div>
	</div>
	<!-- end gifts -->
	<!-- review -->
	<div class="reviews ">
		<div class="wrapper">
			<h2>Internationella utmärkelser och recensioner</h2>
			<p>Gör våra kunder nöjda var de än befinner sig</p>
			<ul class="message clearfix">
				<li>
					<strong>200+</strong>
					<p>Populär i mer än <b>200</b> länder <br>globalt</p>
				</li>
				<li>
					<strong>1,000+</strong>
					<p>Mer än <b>1,000</b> medier har gillat <br>och kommenterat</p>
				</li>
				<li>
					<strong>250,000,000+</strong>
					<p>Utvald och rekommenderad av över <br><b>250</b> miljoner användare över hela <br>världen</p>
				</li>
				<li>
					<strong>80%+</strong>
					<p>Mer än <b>80%</b> av Advanced SystemCare <br>användare har aktiverat PRO-versionen</p>
				</li>
			</ul>
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
				<span class="recover recover22 smail"></span>
				<span class="recover recover23 smail"></span>
				<span class="recover recover24 smail"></span>
				<span class="recover recover25 smail"></span>
				<span class="recover recover26 smail"></span>
				<dl class="tradotto-da-tedesco">
					<dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
					<dd>
						<strong>Markus Thomas</strong>
						<p>Det är det bästa programmet för att rengöra och accelerera <br>min dator på ett korrekt och säkert sätt. Det gör gamla datorer <br>snabba och kraftfulla!</p>
						<span></span>
					</dd>
				</dl>
				<dl class="html-it">
					<dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
					<dd>
						<strong>HTML.it</strong>
						<p>Advanced SystemCare Pro är ett kraftfullt program，med vilket operativsystem <br>optimeras och har bästa prestanda. Dessutom är det enkelt att använda, av vilket <br>nästan alla funktioner körs automatiskt.</p>
						<span></span>
					</dd>
					</dl>
				<dl class="baixaki">
					<dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
					<dd>
						<strong>Baixaki</strong>
						<p>Advanced SystemCare har utmärkt prestanda och kan upptäcka och lösa problem <br>som är väldigt komplexa och även svårt att föreställa sig ...</p>
						<span></span>
					</dd>
				</dl>
				<dl class="charles-r-widick">
					<dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
					<dd>
						<strong>Charles R. Widick</strong>
						<p>Vem behöver en tekniker när du har kraften i Advanced SystemCare <br>PRO-systemet som jobbar dygnet runt? Det här är den bästa <br>produkten en hemanvändare kan köpa.</p>
						<span></span>
					</dd>
				</dl>
				<dl class="cnet">

					<dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
					<dd>
						<strong>Cnet</strong>
						<p>Advanced Systemcares syfte är att råda bot på <br>allt som plågar din dator, inte bara städa upp <br>skräpfiler, malware och ogiltiga registerposter <br>utan också ge din dator ett rejält uppsving <br>för en optimal datorupplevelse</p>
						<span></span>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- end review -->
	<!-- compare -->
	<div class="compare wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="itemb">
					<div class="box">
						Din version <br> NUVARANDE
						<span></span>
					</div>
				</th>
				<th class="text">Se vad PRO-utgåvan kan göra för dig:</th>

				<th class="itema">
					<div class="box">
						PRO-version <br>UPPGRADERAD
						<span></span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="itemb"><i class="all-icons">√</i></td>
				<td class="virtue">System-rensning, -reparation och -optimering</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">√</i></td>
				<td class="virtue">Upp till 300%* internethastighet med Internet Booster</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Upp till 200%* snabbare PC-uppstart med startoptimering</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Djupgående registreringsrensning och defragmentering för att minimera krascher</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Ny diskoptimeringsmotor för högre systemhastighet</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Realtidsskydd mot säkerhetshot</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Fullständig lokalisering och identifiering av de djupaste virusen</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Automatisk blockering av reklam och spårning för säkrare surfning</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Automatisk rensning av RAM-minne för smidigare systemkörning</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Automatisk uppdatering till den senaste versionen</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Gratis teknisk support 24/7 på begäran</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb radius"></td>
				<td class="virtue radius"></td>
				<td class="itema radius"> <span class="shadow"></span></td>
			</tr>
		</tbody>
	</table>
	</div>
	<!-- end compare -->
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>Till julen, ge din gamla dator den BÄSTA GÅVAN!</h2>

				<div class="showcase">
					<span class="img"></span>
				</div>
				<div class="selection">
					<ul>
						<li class="three-pc active" ><i></i> <span>3PC / 1 År + SD+PF </span> <strong>-85%</strong><em>RABATT</em></li>
						<li class="one-pc"><i></i> <span>3PC / 1 År </span> <strong>-58%</strong><em>RABATT</em></li>
					</ul>
				</div>

				<dl class="btnarea">
					<dt> <strong><b>249</b>KR</strong> <del>1 557KR</del> SPARA <span>1 308kr</span></dt>
					<dd>
						<a href="https://www.iobit.com/buy.php?product=sv-asc123pcsdpf249x&ref=sv_asc123pcsdpfpurchase1811<?php echo $refStr;?>&refs=sv_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCsdpf1811-sv')" class="button button-top-lag yellow"> <span></span>KÖP NU</a>
					</dd>
				</dl>
		</div>
	</div>
	<!-- end bottomcart -->
	<!-- payments  -->
	<div class="service  clearfix">
		<div class="wrapper">
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
				<dd><strong>Pengarna- tillbaka-garanti </strong>Om du inte är nöjd med produkten inom 60 dagar,ger vi dig pengarna tillbaka.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/verified.png" alt=""></dt>
				<dd><strong>Säker betalning </strong>IObit stöder flera säkra betalningsal-<br>ternativ.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
				<dd><strong>Få Licens </strong>Du kommer få licensen inom några <br>minuter efter betalning..</dd>
			</dl>
			<dl class="last">
				<dt><img src="<?php echo $pResUrl; ?>images/servizio.png" alt=""></dt>
				<dd><strong>Tillförlitliga Tjänster </strong>Gratis 24/7 Teknisk Support vid <br>Behov Live Chattjänst</dd>
			</dl>
		</div>
	</div>
	<!-- end payments -->
	<!-- footer -->
	<div class="footer">
		<dl class="annotation wrapper">
			<dt>Notera:</dt>
			<dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
			<dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
		</dl>
		<div class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</div>
	</div>
	<!-- end footer -->
	<!-- float -->
	<div class="float">
		<a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
		<dl>
			<dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
			<dd>har redan aktiverat <span id="saleType">3</span> PC / 1 år</dd>
			<dd class="last"><span class="viewNum"><?php echo $viewNum;?></span> användare tittar</dd>
		</dl>
	</div>
	<script type="text/javascript">
		refStr="<?php echo $refStr;?>";
	</script>
	<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
	<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>