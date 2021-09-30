<?php
//	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
		$pResUrl = './';
		$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
		$buyNum = ceil(microtime_float()*1000/20000)-69157026;
		$buyNum = number_format($buyNum);

	$packsNum = ceil(microtime_float()*2000/20000);
	$packsNum = 360-($packsNum%360);
	if ($_GET['action'] == 'getPacks'){
		echo $packsNum;
		exit;
	}
$refStr='';
if(in_array($_GET['ref'],array('aractivatemain','aractivatesg','aractivatenow','aractivatesee','bdprotectnow',
		'bdactivatemain','bdactivatescan','bdactivatesg','trayscanbd','rootkitdb','traybd','cameraguard','trayanti-tracking',
		'trayusbguard','traycameraguard','traytrial','purchasear','purchasebd','imf2arguardc','ffbdt','ffart',
		'ffaut','ffcgt','ffupt','atn','fixall','asf','auf','atf','ugf','mbr','trayusbguard','sgup','autip','newgift',
		'bdda','arda','box','notibc','box13thbc','xgiftbox','xactivate'))){
	$refStr.='-'.$_GET['ref'];
}
if(in_array($_GET['pop'],array('x_imf'))){
	$refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>73% RABATT! Aktivera IMF PRO för att skydda din PC och online-upplevelse!</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700' rel='stylesheet' type='text/css'>
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
	<script type="text/javascript">
		function decreasingPacks(){
			$.ajax({
				type: "GET",
				url: "index.php",
				data: "action=getPacks&r="+Math.random(),
				success: function(packs){
					$('.packs').html(packs);
					setTimeout('decreasingPacks()', 10000);
				}
			});
		}
		setTimeout('decreasingPacks()', 10000);
	</script>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<div id="header">
		<div class="wrapper">
			<a href="https://www.iobit.com" target="_blank" class="logo"></a>
			<h1>Flash Försäljning Passa på nu, bara några få paket kvar. Aktivera nu!</h1>
			<ul class="date" id="counttime">
				<li>00</li>
				<li>00</li>
				<li>00</li>
				<li>000</li>
			</ul>
			<div class="clear"></div>
			<div class="imf one-pc">
				<dl class="product">
					<dt><img src="<?php echo $pResUrl; ?>images/imf.png" alt=""></dt>
					<dd>
						<h2>IObit Malware Fighter PRO</h2>
					</dd>
				</dl>
				<dl class="message">
					<dt>1 PC / 1 År</dt>
					<dd><strong>249 kr</strong></dd>
					<dd><b>-50%</b><del>499 kr</del></dd>
					<dd> Spara 250 kr</dd>
					<dd><a href="https://www.iobit.com/buy.php?product=sv-imf61pc249&ref=sv_imf61pcpurchase1801<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-sv')" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>Aktivera Nu</a></dd>
				</dl>
			</div>
			<div class="imf three-pcs">
				<dl class="product">
					<dt><img src="<?php echo $pResUrl; ?>images/imf-gift.png" alt=""></dt>
					<dd>
						<h2>IObit Malware Fighter PRO</h2>
					</dd>
					<dd><span><a href="javascript:void(0)" onclick="goTaget($('.gift-message'))"><img src="<?php echo $pResUrl; ?>images/gift.png" alt=""></a></span>Protected Folder</dd>
				</dl>
				<dl class="message">
					<dt>3 PC / 1 År</dt>
					<dd><strong>329 kr</strong></dd>
					<dd><b>-73%</b><del>1 198 kr</del></dd>
					<dd>Spara 869 kr</dd>
					<dd><a href="https://www.iobit.com/buy.php?product=sv-imf63pcpf329&ref=sv_imf63pcpfpurchase1801<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-sv')" class="buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>Aktivera Nu</a></dd>
				</dl>
				<p><span><img src="<?php echo $pResUrl; ?>images/people.jpg" alt=""> </span> <?php echo $buyNum; ?> människor har aktiverat</p>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<h2 class="title">För mindre än <strong>0.3 kr</strong> per dag/PC kan du njuta av det bästa <br> dubbla skyddet för din PC!</h2>
		<dl class="box-message">
			<dt><img src="<?php echo $pResUrl; ?>images/imf-box.jpg" alt=""></dt>
			<dd><span></span>Djup Borttagning av Skadlig Programvara med ny Motor från Bitdefender</dd>
			<dd><span class="icons2"></span>Upptäcker och Tar Bort mer än 200 Miljoner Dolda Hot</dd>
			<dd><span class="icons3"></span> <p>Stoppa utpressningsprogram som försöker bryta sig in i din dator. Även Petya/GoldenEye ransomware kan blockeras och tas bort.</p></dd>
			<dd><span class="icons4"></span> <p>SafeBoxskyddardinamarkerademapparfrånickeauktoriseradtillgång&amp;senaste hot</p></dd>
			<dd><a href="javascript:void(0)" onclick="goTaget($('#compare'))">Läs mer om PRO-versionen>></a></dd>
		</dl>
		<div class="clear"></div>
		<div class="gift-message">
			<img src="<?php echo $pResUrl; ?>images/gift-box.jpg" alt="">
			<h3><span>VIP GÅVA</span> endast för användare av IObit Malware Fighter PRO - 3 PC/ 1 År</h3>
			<dl>
				<dt>Protected Folder <span>GRATIS</span><strong>0 kr</strong> <del>499 kr</del></dt>
				<dd><span></span> Lås och lås upp dina viktiga filer, bilder, videor och mycket mer med ett lösenord.</dd>
				<dd><span></span> Inga Bekymmer för Datastöld eller Sekretessläckor!</dd>
			</dl>
		</div>
		<ul class="payment">
			<li>Godkända Betalningsalternativ  <img src="<?php echo $pResUrl; ?>images/payments.jpg"></li>
			<li>Pengarna Tillbaka Garanti <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></li>
			<li class="last">Support  
				<p><img src="<?php echo $pResUrl; ?>images/email.jpg">Teknisk support, 24/7 </p>
				<p><img src="<?php echo $pResUrl; ?>images/phone.jpg">Live Chatttjänst</p>
			</li>
		</ul>
		<dl class="premi">
			<dt> Utmärkelser för produkten</dt>
			<dd><img src="<?php echo $pResUrl; ?>images/product.jpg"></dd>
		</dl>
	</div>
	<!-- review -->
	<div class="review">
		<div class="wrapper">
			<div class="media_rev">
				<h3>I media</h3>
				<dl>
					<dt><img src="<?php echo $pResUrl; ?>images/betanews.png" alt=""></dt>
					<dd><h4>"IObit Malware Fighter PRO är ett komplett säkerhetspaket."</h4></dd>
					<dd>"IObit Malware Fighter PRO är ett komplett säkerhetspaket. Det rensar bort spionprogram, trojaner och allehanda otrevligheter. Det finns också ett Uppstartsskydd som säkerställer att inga skadliga processer startas med Windows. Webbläsarskyddet garanterar att ingen programvara gör ändringar i din webbläsare och Filgranskaren garanterar att varje okänd fil du öppnar inte kan orsaka någon skada. Inkluderat är också vaktenheter för USB och processor med mera."<span>-Betanews.com</span></dd>
				</dl>
			</div>
			<div class="user_rev" id="user_rev">

				<div class="content">
					<h3>Användares omdömen</h3>
					<dl  class="active">
						<dd>
							<h4>"Vi har inte haft några problem sedan vi började använda era produkter."</h4>
						</dd>
						<dd>"Vi brukade använda upp till ett dussin olika program för att hålla våra maskiner i trim och hålla skurkarna borta. Det tog timmar varje vecka för att upprätthålla säkerhet och prestanda. Nu, med IObit Malware Fighter PRO och Advanced System Care PRO, är allt på ett ställe och det tar oss bara några minuter varje vecka för att göra samma jobb, men med mer förtroende. Vi har inte haft ett enda problem sedan vi började använda era produkter."</dd>
					</dl>
					<dl>
						<dd>
							<h4>"Jag har haft andra program för detta ändamål installerade men IMF finner alltid problemen först och blockerar dem."</h4>
						</dd>
						<dd>"För några år sedan drogs min uppmärksamhet till IObit Malware Fighter. Först var jag skeptisk. Men efter att ha installerat det blev det snabbt min favorit bland anti-malware program. Det är mycket lätt att använda. Genom åren har det upptäckt många hot och avlägsnat dem. I samarbete med andra program från IObit, som till exempel ASC, har jag nu ett ypperligt skydd för min dator. Jag rekommenderar alla dessa program till mina vänner och familj."</dd>
					</dl>

				</div>
				<ul class="users" id="users">
					<li class="current"><img src="<?php echo $pResUrl; ?>images/peter-stoffers.jpg" alt="">Peter Stoffers</li>
					<li><img src="<?php echo $pResUrl; ?>images/bob-bassett.jpg" alt="">Bob Bassett</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end review -->

	<!-- comparison_table -->
	<div class="comparison_table wrapper" id="compare">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
			<thead>
			<tr>
				<th colspan="2">Se vad PRO-versionen kan göra för dig:</th>
				<th class="space"></th>
				<th class="itemc gray"><span>IObit Malware Fighter </span> Free</th>
				<th class="space"></th>
				<th class="itema orange">
					<span>IMF PRO (1 PC / 1 År)</span>
					<strong>249 kr</strong> <del>499 kr</del>
				</th>
				<th class="space"></th>
				<th class="itemb red">
					<span>IMF PRO (3 PC / 1 År)</span>
					<strong>329 kr </strong> <del>1 198 kr</del>
				</th>
			</tr>
			</thead>
			<tbody>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
				<td class="virtue">Grundläggande skydd mot sabotageprogram <sup>Förbättrad</sup></td>
				<td class="space"></td>
				<td class="itemc gray"><img src="<?php echo $pResUrl; ?>images/graymark.png"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
				<td class="virtue">Upp till 130% snabbare sökning för att snabbt hitta aktiva hot <sup>Förbättrad</sup></td>
				<td class="space"></td>
				<td class="itemc gray"><img src="<?php echo $pResUrl; ?>images/graymark.png"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
				<td class="virtue">Genomsök nedladdade filer och ta bort annonser för förbättrad säkerhet  <sup class="green"> Ny</sup></td>
				<td class="space"></td>
				<td class="itemc gray"><img src="<?php echo $pResUrl; ?>images/graymark.png"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
				<td class="virtue">Fullständigt skydd mot sabotageprogram med IObits <br> Anti-malwaremotor <sup> Förbättrad</sup></td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
				<td class="virtue">Avancerat skydd mot hot med Bitdefender Anti-virusmotor <sup> Förbättrad</sup></td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
				<td class="virtue">Skydda din PC och dina pengar från utpressningsprogram  <sup class="green">Ny</sup></td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
				<td class="virtue">Skydda din kamera från obehörig åtkomst <sup class="green">Ny</sup></td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
				<td class="virtue">Komplett skydd i realtid för ultimat säkerhet  <sup>Förbättrad</sup></td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
				<td class="virtue">Hindra virus som sprids genom USB-minnen</td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
				<td class="virtue">Hitta skadliga processer i RAM-minnet	</td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
				<td class="virtue">Rensa automatiskt bort surfspår med Anti-spårning för <br>webbläsare  <sup>Förbättrad</sup></td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
				<td class="virtue">Hitta hot genom att analysera skadlig aktivitet	</td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
				<td class="virtue">Jobbar smart i bakgrunden utan att störa	</td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
				<td class="virtue">Uppdaterar automatiskt till den senaste versionen	</td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			<tr>
				<td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
				<td class="virtue">Gratis teknisk support dygnet runt	</td>
				<td class="space"></td>
				<td class="itemc"></td>
				<td class="space"></td>
				<td class="itema"><img src="<?php echo $pResUrl; ?>images/orangemark.png"></td>
				<td class="space"></td>
				<td class="itemb"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
			</tr>
			</tbody>
			<tfoot>
			<tr>
				<th colspan="2"></th>
				<th class="space"></th>
				<th class="itemc">
					<span>IObit Malware Fighter Free</span>
				</th>
				<th class="space"></th>
				<th class="itema">
					249 kr <del>499 kr</del>
					<br>1 PC / 1 År
					<a href="https://www.iobit.com/buy.php?product=sv-imf61pc249&ref=sv_imf61pcpurchase1801<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-sv')" class="tbbuybtn orange"> <span><img src="<?php echo $pResUrl; ?>images/shop.png" alt="" width="17"></span>Aktivera Nu</a>
				</th>
				<th class="space"></th>
				<th class="itemb">
					329 kr  <del>1 198 kr</del> <br>
					3 PC / 1 År
					<a href="https://www.iobit.com/buy.php?product=sv-imf63pcpf329&ref=sv_imf63pcpfpurchase1801<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-sv')" class="tbbuybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt="" width="17"></span> Aktivera Nu</a>
				</th>
			</tr>
			</tfoot>
		</table>
	</div>
	<!-- end comparison_table -->
	<dl class="annotation wrapper">
		<dt>Notera:</dt>
		<dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
	</dl>

<!--end container-->

<p class="footer">Copyright ©2005 - <?php echo date(Y)?> IObit. Alla Rättigheter Förbehållna</p>

<!--floatlayer-->
<div class="floatlayer" id="floatlayer">
	<div class="wrapper">
	<dl class="left">
		<dt> <h2>Flash Försäljning av IMF PRO, rabatt upp till <strong>73%</strong></h2></dt>
		<dd><span class="packs"><?php echo $packsNum; ?></span> paket kvar idag!</dd>
	</dl>
		<dl class="right">
			<dt><a href="https://www.iobit.com/buy.php?product=sv-imf63pcpf329&ref=sv_imf63pcpfpurchase1801<?php echo $refStr;?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase1801-sv')" class="flbuybtn buybtn"><span><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""></span>Aktivera Nu</a></dt>
			<dd data-url="https://www.iobit.com/buy.php?product=sv-imf61pc249&ref=sv_imf61pcpurchase1801<?php echo $refStr;?>&refs=sv_purchase_imf"><span></span><font>1 PC</font><strong>249 kr </strong><del>499 kr</del></dd>
			<dd class="currt" data-url="https://www.iobit.com/buy.php?product=sv-imf63pcpf329&ref=sv_imf63pcpfpurchase1801<?php echo $refStr;?>&refs=sv_purchase_imf"><span></span><font>3 PC </font><strong>329 kr</strong><del>1 198 kr</del></dd>
		</dl>
	</div>
</div>
<!--end floatlayer-->
<script>
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(".users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".user_rev .content > dl").eq(num).addClass('active').siblings().removeClass('active');
	});		
	$(window).on('scroll', function () {
		var scrollHeight = $("#header .buybtn").offset().top;
		if ($(window).scrollTop() > scrollHeight) {
				$('#floatlayer').addClass('on');
		} else {
				$('#floatlayer').removeClass('on');
		}
	});

	 $(".floatlayer .right dd").click(function(){
		 $(this).addClass("currt").siblings().removeClass('currt');
		 $(".flbuybtn").attr('href', $(this).attr('data-url'));
		});		
	function cycleCountdown(){
		var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
		var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
		d = MApp(2.2).packages.zeroize(datetime[0], 2);
		h = MApp(2.2).packages.zeroize(datetime[1], 2);
		i = MApp(2.2).packages.zeroize(datetime[2], 2);
		s = MApp(2.2).packages.zeroize(datetime[3], 2);
		mi = MApp(2.2).packages.zeroize(datetime[4], 3);
		document.getElementById('counttime').innerHTML = '<li>' + h + '</li><li>' + i + '</li><li>' + s + '</li><li>' + mi + '</li>';
		setTimeout('cycleCountdown()', 1);
	}
	cycleCountdown();

		function goTaget(target) {
			var Theigth = target.offset().top - 140;
			$("html, body").animate({
				scrollTop: Theigth
			}, 'slow');
		}
</script>
</body>
</html>
