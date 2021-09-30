<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  
  $buyNum = ceil(microtime_float()*1000/20000) - 69041325;
  $buyNum = number_format($buyNum);

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
$name=explode(' ',trim(get_line('data/maysale.txt',rand(1,40))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
$viewNum=rand(60,88);

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'deascxmax' . $date;
  if (!isset($_COOKIE[$c_name])) {
    if($_GET['view']==1){
      $packsNum=29;
    }else {
      $packsNum = 57;
    }
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum,'firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'viewNum'=>$viewNum));
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
<html lang="de">
<head>
	<meta charset="UTF-8">
	<title>Sparen Sie bis zu 80% auf Advanced SystemCare& erhalten Sie ein Geschenkpaket kostenlos!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script type="text/javascript">
	  refStr='<?php echo $refStr;?>';
	  tw = MApp(2.2).datetime.getTimeZone();
	</script>
</head>
<body>
	<div class="banner">
	 	<div class="wrapper">
	 		<a class="logo" href="https://www.iobit.com/" target="_blank">
	 			<img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
	 		</a>
			<h1>Weihnachtssale - täglich stehen nur 200 Pakete zur Verfügung</h1>
			<h2>Bis zu <b>80%</b> auf ASC PRO sparen und zwei nützliche Produkte gratis erhalten! </h2>

 			<div class="box one-pc-box four">
 				<div class="img-box">
 					<img src="<?php echo getStaticUrl('images/asc-left-box.png')?>" alt="Advanced SystemCare PRO"/>
 					<b>-40%</b>
 				</div>
 				<div class="price">
 					<p><strong><big class="discount">22</big>,99€</strong> <span>UVP <del class="original">39,99€</del></span></p>
 					<a class="buybtn small" href="https://www.iobit.com/buy.php?product=de-asc121pc2299&ref=de_asc121pc2299purchase1812<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1PC1812-de')">
 						JETZT KAUFEN
 					</a>
 				</div>
 			</div>
 			<div class="box sold-box">
 				<div class="gift-box">
 					Heute nur <span id="packbox" class="reduceGift packbox"><b class="list"><strong>5</strong></b><b class="list"><strong>5</strong></b></span> Deals übrig
 				</div>
 				<div class="img-box">
 					<img src="<?php echo getStaticUrl('images/asc-center-box.png')?>" alt="Advanced SystemCare PRO"/>
 					<b>-80%</b>
 					<span class='dissolve'></span>
 				</div>
 				<div class="price">
 					<p><strong><big class="discount">24</big>,99€</strong> <span>UVP <del class="original">129,93€</del></span></p>
 					<a class="buybtn yellow" href="https://www.iobit.com/buy.php?product=de-asc12sdpf2499&ref=de_asc123pcbundle1812<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCpfsd1812-de')">
 						<span class="all-icons"></span>
 						JETZT KAUFEN
 					</a>
 					<p class="people">Von <span><b class="pack"></b><b class="pop-font"></b></span> Personen gekauft</p>
 				</div>
 			</div>
 			<div class="box one-pc-box five">
 				<div class="img-box">
 					<img src="<?php echo getStaticUrl('images/asc-right-box.png')?>" alt="Advanced SystemCare PRO"/>
 					<b>-55%</b>
 				</div>
 				<div class="price">
 					<p><strong><big class="discount">24</big>,99€</strong> <span>UVP <del class="original">59,99€</del></span></p>
 					<a class="buybtn small" href="https://www.iobit.com/buy.php?product=de-asc123pc2499&ref=de_asc123pc2499purchase1812<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PC1812-de')">
 						JETZT KAUFEN
 					</a>
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
	<div class="payments wrapper">
		<img src="<?php echo getStaticUrl('images/payments.png')?>" alt="">
	</div>
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>Die fortschrittlichste Lösung um ihren PC maximal zu optimieren!</h2>
			<div class="showcase">
				<div class="inner">
					<ul class="screenshot">
						<li>
							<img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt=""/>
						</li>
						<li>
							<img src="<?php echo getStaticUrl('images/screenshot-01.jpg')?>" alt="">
						</li>
						<li class="active">
							<img src="<?php echo getStaticUrl('images/screenshot-02.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo getStaticUrl('images/screenshot-03.jpg')?>" alt="">
						</li>
						<li>
							<img src="<?php echo getStaticUrl('images/screenshot-04.jpg')?>" alt="">
						</li>
					</ul>
				</div>
				<ul class="zoom">
					<li></li>
					<li class="fun1">
						<div class="container">
							<img src="<?php echo getStaticUrl('images/screenshot-01-zoom.png')?>" alt="">
						</div>
					</li>
					<li class="fun2">
						<div class="container">
							<img src="<?php echo getStaticUrl('images/screenshot-02-zoom.png')?>" alt="">
						</div>
					</li>
					<li class="fun3">
						<div class="container">
							<img src="<?php echo getStaticUrl('images/screenshot-03-zoom.png')?>" alt="">
						</div>
					</li>
					<li class="fun4">
						<div class="container">
							<img src="<?php echo getStaticUrl('images/screenshot-04-zoom.png')?>" alt="">
						</div>
					</li>
				</ul>
				<ul class="list-icon">
					<li></li>
					<li></li>
					<li class="active"></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="detail-list">
				<dl>
					<dt><i class="benfits04"></i></dt>
					<dd>
						<h3>100% Schutz</h3>
						<p>
							Schützt Ihre Privatsphäre und Ihre Daten vor geheimem Zugriff, verhindert jeden Versuch böswilliger Eindringlinge und bietet gleichzeitig doppelt so viel Privatsphäre wie die kostenlose Version
						</p>
					</dd>
				</dl>
				<dl class="two active">
					<dt><i class="benfits02"></i></dt>
					<dd>
						<h3>200% * leistungsfähiger</h3>
						<p>
							Reinigt alle unnötigen Dateien und optimiert die CPU-Leistung und den Arbeitsspeicher, um das Booten zu beschleunigen, erhöht die Geschwindigkeit des Systems, um den langsamen PC um bis zu 200% zu beschleunigen
						</p>
					</dd>
				</dl>
				<dl class="three">
					<dt><i class="benfits03"></i></dt>
					<dd>
						<h3>300% * schneller</h3>
						<p>
							Die Geschwindigkeit von Downloads, Spielen, Internet-Browsing und Videoplattformen wie YouTube steigt um bis zu 300%
						</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits01"></i></dt>
					<dd>
						<h3>Mehr freier Speicherplatz</h3>
						<p>
							Reinigt tiefliegende Junk-Dateien, ungültige Links, Systemprotokolldateien und unvollständige Download-Dateien mit erweiterter Optimierung
						</p>
					</dd>
				</dl>
				<a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Für weitere Informationen klicken Sie hier >></a>
			</div>
		</div>
	</div>
	<!-- end benfits -->
	<!-- gifts -->
	<div class="gifts">
		<div class="wrapper">
			<h2>Das spezielle Geschenkpaket nur im Weihnachtssale</h2>
			<div class="gift-list clearfix">
				<dl class="pf">
					<dt>
						<div><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="Protected Folder"/></div>
						<strong>Protected Folder </strong>
					</dt>
					<dd><b>€<span>0</span></b> <del>€39,95</del></dd>
				  <dd><p>Bietet Passwortschutz für Ordner und Dateien für Windowsnutzer.</p></dd>
				</dl>
				<dl class="sd">
					<dt>
						<div><img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag 6 PRO"/></div>
						<strong>Smart Defrag 6 PRO</strong>
					</dt>
					<dd><b>€<span>0</span></b> <del>€29,99</del></dd>
				  <dd><p>Defragmentiert die Festplatten und <br>verbessert Ihre PC-Leistung.</p></dd>
				</dl>
			</div>
			<a class="buybtn yellow" href="https://www.iobit.com/buy.php?product=de-asc12sdpf2499&ref=de_asc123pcbundle1812<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCpfsd1812-de')">
				<span class="all-icons"></span> Ihre Geschenke abholen
			</a>

		</div>
	</div>
	<!-- end gifts -->
	<!-- review -->
	<div class="reviews">
		<div class="wrapper">
			<h2>Weltweite Media-Auszeichungen und Kundenbewertungen</h2>
			<p>Wir bestreben jeden Kunden zufriedenzustellen, egal wo Sie gerade sind.</p>
			<ul class="message clearfix">
				<li>
					<strong>200+</strong>
					<p>Beliebt in mehr als <b>200</b> Ländern <br>und Gebieten auf der Welt</p>
				</li>
				<li>
					<strong>1.000+</strong>
					<p>In mehr als <b>1.000</b> Medien geschätzt <br>und erwähnt</p>
				</li>
				<li>
					<strong>2.500.000+</strong>
					<p>Von über <b>250 Millionen</b> Benutzern <br>weltweit gewählt und empfohlen</p>
				</li>
				<li>
					<strong>80%+</strong>
					<p>Mehr als <b>80%</b> der Benutzer von Advanced <br>SystemCare haben die PRO-Edition aktiviert</p>
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
						<p>Das Programm säubert & beschleunigt den PC sehr zuverlässig <br>und sicher. Selbst PC´s älterer Generationen werden um ein <br>Vielfaches beschleunigt und zugleich perfekt optimiert.</p>
						<span></span>
					</dd>
				</dl>
				<dl class="html-it">
					<dt><img src="<?php echo $pResUrl; ?>images/chip.png"></dt>
					<dd>
						<strong>Chip</strong>
						<p>Advanced SystemCare Pro beschleunigt <br>Ihren PC und schafft neuen Speicherplatz <br>auf der Festplatte.</p>
						<span></span>
					</dd>
					</dl>
				<dl class="baixaki">
					<dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
					<dd>
						<strong>Baixaki</strong>
						<p>Advanced SystemCare hat eine außergewöhnliche <br>Leistung, ist in der Lage, Probleme zu erkennen und zu <br>lösen, die wirklich komplex und schwer vorstellbar sind.</p>
						<span></span>
					</dd>
				</dl>
				<dl class="charles-r-widick">
					<dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
					<dd>
						<strong>Charles R. Widick</strong>
						<p>Meine Wahl ist immer noch Advanced SystemCare Pro!</p>
						<span></span>
					</dd>
				</dl>
				<dl class="cnet">

					<dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
					<dd>
						<strong>Cnet</strong>
						<p>Advanced SystemCare kann alle <br>Probleme beheben, die Ihren <br>Computer betreffen!</p>
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
						Ihre Version <br>AKUELLE
						<span></span>
					</div>
				</th>
				<th class="text">Funktionsvergleich:</th>

				<th class="itema">
					<div class="box">
						Ihre Version PRO <br>Upgrade
						<span></span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="itemb"><i class="all-icons">√</i></td>
				<td class="virtue">Grundlegende System-Reinigung, Reparatur und Optimierung</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">√</i></td>
				<td class="virtue">
					Bis zu 300% Schnelleres Internet mit dem Internet Booster 
					<span class="all-icons ra">Verbesser</span>
				</td>

				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Stabileres System mit Tiefenreinigung der Windows-Registrierung
					<span class="all-icons">empfehlenswert für Ihren alten PC</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
						Schnelleres System dank Festplattenoptimierung 
						<span class="all-icons">empfehlenswert für Ihren alten PC</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					VVerringert den digitalen Fingerabrduck, um die Privatsphäre beim Online Surfen <em>zu schützen
					<span class="all-icons nuo">neu</span></em>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Hält Ihre persönlichen Daten von nicht vertrauenswürdigen Programmen fern <span class="all-icons nuo">Neu</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Umfassender Schutz zum Erkennen und Entfernen von den tiefsten Infektionen <span class="all-icons ra">Verbesser</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Erkennt und blockiert proaktiv Sicherheitslücken in Echtzeit <span class="all-icons ra">Verbesser</span></td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
					Auto-RAM-Bereinigung, um unbenutzte Programme und Prozesse zu beenden 
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">Kostenloser technischer Support 24/7 </td>
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
		<h2>Gönnen Sie ihrem alten PC zu Weihnachten die perfekten Geschenke!</h2>
		<div class="wrapper">
			<div class="clearfix">
				<div class="showcase">
					<img class="left" src="<?php echo getStaticUrl('images/asc-left-box.png')?>" alt="Advanced System PRO"/>
					<img class="center active" src="<?php echo getStaticUrl('images/asc-center-box.png')?>" alt="Advanced System PRO"/>
					<img class="right" src="<?php echo getStaticUrl('images/asc-right-box.png')?>" alt="Advanced System PRO"/>
				</div>
				<ul class="selection">
					<li><b>1 Jahr / 1 PC</b> <strong>-40%</strong></li>
					<li class="center active"><b>1 Jahr / 3 PC +sd+pf </b> <strong>-80%</strong></li>
					<li><b>1 Jahr / 3 PC</b> <strong>-55%</strong></li>
				</ul>

				<div class="price">
					<p><strong><big class="discount">24</big>,99€</strong> <span><del class="original">129,93€</del></span></p>
					<a class="buybtn yellow orange" href="https://www.iobit.com/buy.php?product=de-asc12sdpf2499&ref=de_asc123pcbundle1812<?php echo $refStr;?>&refs=de_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase3PCpfsd1812-de')">
						<span class="all-icons"></span>
						JETZT KAUFEN
					</a>
				</div>
			</div>
		</div>
	</div>
	<!-- end bottomcart -->
	<!-- payments  -->  
	<div class="service  clearfix">
		<div class="wrapper">
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""></dt>
				<dd><strong>Zufriedenheitsgarantie</strong> 60-Tage-Geld-zurück-Garantie</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/verified.png')?>" alt=""></dt>
				<dd><strong>Zahlungssicherheit</strong> Ihre Zahlung ist 100% sicher</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/veloce.png')?>" alt=""></dt>
				<dd><strong>Schnelle Aktivierung</strong> Kurz nach dem Kauf erhalten Sie <br>einen Aktivierungscode.</dd>
			</dl>
			<dl class="last">
				<dt><img src="<?php echo getStaticUrl('images/servizio.png')?>" alt=""></dt>
				<dd><strong>Kundendienst</strong> Kostenloser technischer Support 24/7</dd>
			</dl>
		</div>
	</div>
	<!-- end payments -->
	<!-- footer -->
	<div class="footer">
		<dl class="annotation wrapper">
			<dt>Notiz:</dt>
			<dd>
				*. Solche Promotionsprogramme können von IObit nach eigenem Ermessen zu jeder Zeit und ohne vorherige Ankündigung geändert werden.
			</dd>
			<dd>
			 *. Daten können sich system- oder computerabhängig ändern.
			</dd>
		</dl>
		<div class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Alle Rechte vorbehalten</div>
	</div>
	<!-- end footer -->
	<!-- float -->
	<div class="float" id="floatlayer">
		<a href="javascript:void(0);" onclick="hideFloat();" class="close">X</a>
		<dl>
			<dt><span id="first"><?php echo $firstName;?></span> <span id="last"><?php echo $lastName;?></span></dt>
			<dd>hat <span id="saleType">3</span> PCs/ 1 Jahr aktiviert</dd>
			<dd class="last"><span class="viewNum"><?php echo $viewNum;?></span> Beobachter auf der Seite</dd>
		</dl>
	</div>

	<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
	<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>