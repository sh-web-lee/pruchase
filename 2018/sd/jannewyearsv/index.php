<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$packsNum=empty($_COOKIE['pc'])?120:$_COOKIE['pc'];
if ($_GET['action'] == 'getPacks') {
    $randNum=rand(1,100);
    if($randNum%4==0){
        $packsNum-=2;
    }else
        $packsNum--;
    if($packsNum<=0){
        $packsNum=120;
    }
    setcookie('pc',$packsNum,time()+3600*720);
	echo $packsNum;
	exit ;
}
if(in_array($_GET['ref'],array('sdfeatures_luckshow','sdddact_luckshow','sdfeatures_luckhide','sdddact_luckhide',
    'sdddact','sdgoact','sdbtdact','sdacact','sdadact','sddrfact','sddcfact','sdaad','sdaadsd',
    'sdfeatures_noaction','sdddact_noaction','actreport'))){
	$refStr='-'.$_GET['ref'];
}else{
	$refStr='';
}
?>
<!DOCTYPE html>
<html lang="sv">
	<head>
		<meta charset="UTF-8">
		<meta content="IE=edge" http-equiv="X-UA-Compatible">
		<title>Spara upp till 60% på SD PRO, snabba upp din PC och optimera hårddiskens prestanda!</title>
		<meta name="Copyright" content="IObit">
		<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
		<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,600' rel='stylesheet' type='text/css'>
		<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
		<?php echo $gJavascript['public']; ?>
		<?php echo $gJavascript['head']; ?>
		<script type="text/javascript">
		function decreasingPacks() {
		$.ajax({
			type: "GET",
				url: "index.php",
				data: "action=getPacks&r=" + Math.random(),
				success: function(packs) {
					$('.packs').html(packs);
					setTimeout('decreasingPacks()', 75000);
				}
			});
		}
		setTimeout('decreasingPacks()', 75000);
		</script>
	</head>
	<body>
	<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

		<!-- header -->
		<div class="header">
			<div class="wrapper">
				<a href="https://www.iobit.com/sv/index.php" class="logo" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="" />
        </a>
				<h1>60% Smart Defrag 6 Nylansering, Specialerbjudande</h1>
				<ul id="counttime1" class="countdown">
					<li><strong>00</strong> tim : </li>
					<li><strong>00</strong> min : </li>
					<li><strong>00</strong> sek : </li>
					<li class="last"><strong>000</strong> <sup>*</sup></li>
				</ul>
        <div class="content">
          <div class="left">
            <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="" />
          </div>
          <div class="arrow"></div>
          <div class="right">
            <dl class="message">
              <dt><strong>Smart Defrag 6 PRO <span>(1 Års Prenumation / 1 PC)</span></strong> <b>299 kr</b> <del>798 kr</del></dt>
              <dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>SD 6 PRO Stöd till 2 Extra Enheter</strong> <span><img src="<?php echo $pResUrl; ?>images/free.png" alt=""> <del>199 kr</del></span></dd>
              <dd><strong><a href="javascript:void(0);" onclick="goTaget($('.between-buy'))" class="gift"></a>AMC Security PRO</strong> <span><img src="<?php echo $pResUrl; ?>images/free.png" alt=""> <del>199 kr</del></span></dd>
            </dl>
            <dl class="buy">
              <dt><strong>8 kr</strong>/månad/PC</dt>
              <dd><a href="https://www.iobit.com/buy.php?product=sv-sd6amc299&ref=sv_sd63pcamcpurchase1801<?php echo $refStr;?>&refs=sv_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1801-sv');" class="buybtn">Aktivera Nu</a></dd>
              <dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Endast <strong class="packs"><?php echo $packsNum; ?></strong> paket kvar idag!</dd>
            </dl>
          </div>
        </div>
			</div>
		</div>
		<!-- header end -->

    <div class="wrapper accepted">
      <img src="<?php echo getStaticUrl('images/accepted.png')?>" alt="" />
    </div>

		
		<div class="wrapper clnet">
			<h2>Utmärkelser</h2>
			<img src="<?php echo $pResUrl; ?>images/clnet.png" alt="">
		</div>
		<div class="wrapper sd-content clearfix">
			<h2>Maximera Hårddiskprestanda och Snabba Upp Din PC med SD 6 PRO</h2>
			<div class="sdbox">
     <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons001.png" alt=""></dt>
      <dd><strong>Ny Ultrasnabb Motor</strong> <span>Defragmentera filer mer effektivt och djupt på mindre tid</span></dd>
     </dl>
     <dl class="right">
      <dt><img src="<?php echo $pResUrl; ?>images/icons002.png" alt=""></dt>
      <dd><strong>Upp till 200% Snabbare *</strong> <span>Accelererar hastighet för filåtkomst och för uppstart av spel med stor fildefragmenterare</span></dd>
     </dl>
     <div class="clear"></div>
     <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/icons003.png" alt=""></dt>
      <dd><strong>Automatisk Smart Defragmentering</strong> <span>Intelligent och automatisk defragmentering av utvalda filer och diskar utan avbrott</span></dd>
     </dl>
     <dl class="right">
      <dt><img src="<?php echo $pResUrl; ?>images/icons004.png" alt=""></dt>
      <dd><strong>Snabbare Uppstart</strong> <span>Njut av en snabbare uppstart av din PC och snabbare systemdrift med Boot Time Defrag</span></dd>
     </dl>
     <div class="clear"></div>
     <img src="<?php echo getStaticUrl('images/sd-content.png')?>" alt="" class="img-sd-content">
     <p><a href="javascript:void(0);">Läs mer om PRO-versionen>></a></p>   
      </div>
		</div>
		<div class="wrapper between-buy clearfix">
			<div class="left">
				<dl class="sd">
					<dt><img src="<?php echo getStaticUrl('images/big-sd.png')?>" alt=""></dt>
					<dd><strong>299 kr </strong> <del>798 kr</del></dd>
				</dl>
				<dl class="free">
					<dt><img src="<?php echo getStaticUrl('images/two-sd.png')?>" alt=""></dt>
					<dd>Stöd till 2 Extra enheter</dd>
					<dd><span class="see-more">Läs Mer</span></dd>
				</dl>
				<dl class="free amc">
					<dt><img src="<?php echo $pResUrl; ?>images/amc-free.png" alt=""></dt>
					<dd>Android-enheter mot virus</dd>
					<dd><span class="see-more">Läs Mer</span></dd>
				</dl>
			</div>
			<div class="pop-content hidden">
				<span class="close"></span>
				<dl>
					<dt>Stöd till 2 Extra Enheter</dt>
					<dd>Smart Defrag PRO licensen har stöd för ytterligare 2 enheter så att du kan dela den med familj och vänner!</dd>
					<dt>AMC Security PRO* <span>flera enheter</span></dt>
					<dd class="check">Gör din mobil upp till 200% snabbare</dd>
					<dd class="check">Realtidsskydd mot mobila hot</dd>
					<dd class="check">Skyddar helt din privata data</dd>
					<dd class="check">En pionjär inom mobila betalningar och utan oro för bedrägeri </dd>
				</dl>
			</div>
			<dl class="right buy">
				<dt><strong>8 kr</strong>/månad/PC</dt>
				<dd><a href="https://www.iobit.com/buy.php?product=sv-sd6amc299&ref=sv_sd63pcamcpurchase1801<?php echo $refStr;?>&refs=sv_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1801-sv');" class="buybtn">Aktivera Nu</a></dd>
				<dd><img src="<?php echo $pResUrl; ?>images/count.png" alt=""> Endast <strong class="packs"><?php echo $packsNum; ?></strong> paket kvar idag!</dd>
			</dl>
		</div>
		<div class="review">
		  <div class="wrapper">
		    <div class="media_rev">
		      <h3>I media</h3>
		      <dl>
		        <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg" alt=""></dt>
		        <dd><strong>"IObit Smart Defrag är den bästa defragmenteraren vi testat hittills."</strong></dd>
		        <dd>"IObit Smart Defrag optimerar din pc för att dra full nytta av SSD-minnets prestanda medan den defragmenterar dina hårddiskar. SSD-trimmarverktyget justerar automatiskt systemet på ett sätt som normalt kräver erfarenhet för en användare att kunna tillämpa. Uppdateringarna i Smart Defrag inkluderar en ny defragmenteringsmotor, specialiserad Speldefragmentering och många fler språkval."<span>- Cnet</span></dd>
		      </dl>
		    </div>
		    <div class="user_rev" id="user_rev">
		      <div class="content">
		        <h3>Användares omdömen</h3>
		        <dl class="active">
		          <dd><h4>"Smart Defrag är en stor tillgång till mitt system, det gör allt jag behöver och vill att det ska göra."</h4></dd>
		          <dd>"Jag kan inte vara mer nöjd med Smart Defrag. Det fungerar klockrent varenda gång. Allt jag behöver göra är att köra programmet och allt är rent. Jag är 100% nöjd, inte bara med programmet, men även med det snabba svar jag fick när jag behövde råd om hur man ska hantera de problem som jag har haft. Det uppskattar jag väldigt mycket."</dd>
		        </dl>
		        <dl>
		          <dd><h4>"Med Smart Defrag får man en mer robust och korrekt diagnos än med Windows 10 Optimering."</h4></dd>
		          <dd>"Jag använder Smart Defrag på flera datorer och från början med medlemmarna i min datorklubb kunde vi se de ständiga förbättringarna. Det var perfekt för dem, förutom det engelska språket. Så jag investerade i den franska översättningen. Från och med nu rekommenderar franska IT-tidningar Smart Defrag, bland annat med Windows 10 Optimiser. För en mer robust och korrekt diagnos med alternativ för att påskynda systemstart."</dd>
		        </dl>
		        <dl>
		          <dd><h4>"Det är lätt att använda, ett måste-ha-verktyg för din hårddisk eller SSD."</h4></dd>
		          <dd>"Jag kör en kombination av RAID 0 SSD och RAID 0-hårddiskar och använder Smart Defrag Pro för att analysera, defragmentera och hålla mina enheter i topptrim. Som med alla IObits programvaror är det lätt att installera, använda och mycket pålitligt. Bara installera och glöm bort det. Smart Defrag drar väldigt lite minne så det kommer inte att sakta ner ditt system. Rekommenderas definitivit!"</dd>
		        </dl>
            <dl>
              <dd><h4>"Med min "Smart Defrag Pro" inställd på auto defrag och kör en "defragmentera och optimera" en gång i veckan, får den mitt system att flyta jämnt och bra."</h4></dd>
              <dd>"Jag har använt produkter från IObit en bra många år nu. Eftersom jag kör en äldre maskin med 6 enheter, inklusive två externa, tycker jag att IObits "Smart Defrag Pro" har tjänat mig mycket väl. Med en äldre maskin,, tenderar mitt datorsystem att bli splittrat helt enkelt. Med min "Smart Defrag Pro" inställd på auto defrag och kör en "defragmentera och optimera" en gång i veckan, får den mitt system att flyta jämnt och bra. IObit uppgraderar ständigt och strävar efter att göra produkten ännu bättre med tiden. Jag är mycket nöjd med denna produkt."</dd>
            </dl>
		      </div>
		      <ul class="users">
		        <li class="active"><img src="<?php echo $pResUrl; ?>images/jim-parten.jpg" alt="">Jim Parten</li>
		        <li class=""><img src="<?php echo $pResUrl; ?>images/roland-LALIS.jpg" alt="">Roland LALIS</li>
		        <li class=""><img src="<?php echo $pResUrl; ?>images/edward-lee-ah-yen.jpg" alt="">Edward Lee Ah </li>
            <li class=""><img src="<?php echo $pResUrl; ?>images/william-howes.jpg" alt="">William Howes</li>
		      </ul>
		    </div>
		  </div>
		</div>
		<div class="comparison_table wrapper" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
        <tr>
          <th class="text" colspan="2">Se vad PRO edition kan göra för dig:</th>
          <th class="spec"></th>
          <th class="itemb">Smart Defrag <span>FREE</span></th>
          <th class="spec"></th>
          <th class="itema">Smart Defrag <span>PRO</span></th>
        </tr>
        </thead>
        <tbody>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-01.png"></td>
          <td class="virtue">Grundläggande Defragmentering och Optimering av Hårddisken</td>
          <td class="spec"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-02.png"></td>
          <td class="virtue">Upp till 200% Snabbare Filåtkomst</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-03.png"></td>
          <td class="virtue">Boot Time Defragmentering för Snabbare Uppstart</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-04.png"></td>
          <td class="virtue">Defragmenterar Fragmenterade Filer Automatiskt och Intelligent</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-05.png"></td>
          <td class="virtue">Anpassar Defragmenteringsläge och Diskar/Filer för Defragmentering</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-06.png"></td>
          <td class="virtue">DMA är Tillämpad för Bättre, Snabbare och Mer Stabil Dataöverföring</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-07.png"></td>
          <td class="virtue">Inga Avbrott under Arbete eller Spelande med Tyst Läge</td>
          <td class="spec"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-08.png"></td>
          <td class="virtue">Utmärkt Spelupplevelse med Speloptimering</td>
          <td class="spec"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-09.png"></td>
          <td class="virtue">Schemalagt Stöd för Defragmentering under Inaktivitet</td>
          <td class="spec"></td>
          <td class="itemb"><img src="<?php echo $pResUrl; ?>images/bluemark.png"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-10.png"></td>
          <td class="virtue">Uppdaterar Automatiskt till den Senaste Versionen</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/cop-icon-11.png"></td>
          <td class="virtue">Gratis Teknisk Support, Dygnet Runt!</td>
          <td class="spec"></td>
          <td class="itemb"></td>
          <td class="spec"></td>
          <td class="itema"><img src="<?php echo $pResUrl; ?>images/redmark.png"></td>
        </tr>
        </tbody>
      </table>
  </div>
  <div class="bottom">
      <div class="fy-banner wrapper">
        <img src="<?php echo getStaticUrl('images/bottom-sd-content.png')?>" alt="">
        <dl>
          <dd>
            <span><img src="<?php echo $pResUrl; ?>images/spped.png" alt="">Snabba upp din PC med smart defragmentering</span>
            <span><img src="<?php echo $pResUrl; ?>images/imporve.png" alt="">Förbättra din dators prestanda med optimerad hårddisk</span>
          </dd>
          <dt>
            <a href="https://www.iobit.com/buy.php?product=sv-sd6amc299&ref=sv_sd63pcamcpurchase1801<?php echo $refStr;?>&refs=sv_purchase_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdpurchase1801-sv');" class="buybtn">Aktivera Nu</a>
          </dt>
        </dl>
      </div>
      <dl class="annotation wrapper">
        <dt>Observera:</dt>
        <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
        <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
        <dd>* .License för AMC Security Full Version med in-app-annonser.</dd>
      </dl>
        <!-- footer -->
        <div class="footer">
          <p>Copyright ©2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehålls</p>
        </div>
        <!-- footer end -->
  </div>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</body>
</html>