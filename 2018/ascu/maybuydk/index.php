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
	$buyNum = ceil(microtime_float()*1000/20000) - 76268325;
	$buyNum = number_format($buyNum);
	$packsNum = ceil(microtime_float()*2000/20000);
	$packsNum = 160-($packsNum%160);
	if ($_GET['action'] == 'getSales'){
	  echo json_encode(array('packsNum'=>$packsNum,'buyNum'=>$buyNum));
	  exit;
	}

$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf','garegion'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="da">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Spar op til 84% på Advanced SystemCare Ultimate!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script>
  function getPacks() {
    $.ajax({
      type: "GET",
      url: "index.php",
      data: "action=getSales&r=" + Math.random(),
      success: function(res) {
        var sales=JSON.parse(res);
        $('.packsNum').html(sales.packsNum);
        $('.buyNum').html(sales.buyNum);
        setTimeout('getPacks()', 10000);
      }
    });
  }
  setTimeout('getPacks()', 10000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="banner">
  <div class="wrapper clearfix">
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <h1>SPECIAL TILBUD</h1>
    <h2>Spar op til 84% og få gratis gaver. Skynd dig!</h2>
    <div class="panel clearfix">
      <div class="left"><img src="<?php echo getStaticUrl('images/ascu-box.png')?>" alt=""/></div>
      <div class="right">
        <!-- time -->
        <ul class="countdown">
        	<li> <span>06</span> Timer</li>
        	<li class="two"><span>06</span> Minutter</li>
        	<li class="two"><span>06</span> Sekunder</li>
        	<li class="last"><span>06</span></li>
        </ul>
        <h2 class="family">Advanced SystemCare Ultimate 12</h2>
        <span>1 år, 3 pc'er</span>
        <p>
          <span onclick="goTaget($('.gift-box'))"><img src="<?php echo $pResUrl; ?>images/gift.png" alt="">Gratis</span> gavepakke - værdi <b>kr. 1.158</b>
        </p>
        <dl>
          <dt>
            <strong class="family">kr. 219</strong> <del>kr. 1.377</del>
          </dt>
          <dd>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-ascu123pcsdpf219&ref=dk_au12pfsdpurchase1810<?php echo $refStr;?>&refs=dk_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase201805-dk')">
              Aktiver nu
            </a>
          </dd>
          <dd>
           <img src="<?php echo $pResUrl; ?>images/people.png" alt="">
            Aktiveret af <span class="buyNum"><?php echo $buyNum; ?></span> brugere
          </dd>
        </dl>
      </div>
      <div class="clear"></div>
      <p class="alle">Alle ASCU-brugere er proaktivt beskyttet imod WannaCry ransomware-angreb</p>
    </div>
  </div>
</div>
<div class="visa">
	<div class="wrapper">
    <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
	</div>
</div>
<div class="ascu-message wrapper clearfix">
  <h2>Få flere fordele med den nye Advanced SystemCare Ultimate 12! <span> <img src="<?php echo $pResUrl; ?>images/iobit.png" alt="">Kun <i class="packsNum"><?php echo $packsNum; ?></i> "deals" tilbage</span></h2>
  <img class="box" src="<?php echo getStaticUrl('images/ascu-message.png')?>" alt=""/>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/intro_icons01.png" alt=""></dt>
    <dd>
      <strong>Avanceret optimering </strong>
      <p>Skanner og reparerer alle slags pc-problemer for at gøre din computer betydelig hurtigere</p>
    </dd>
  </dl>
  <dl class="right">
    <dt><img src="<?php echo $pResUrl; ?>images/intro_icons03.png" alt=""></dt>
    <dd>
      <strong>Op til 300% hurtigere</strong>
      <p>Øger hastigheden på dit internet med helt op til 300%.</p>
    </dd>
  </dl>
  <div class="clear"></div>
  <dl>
    <dt><img src="<?php echo $pResUrl; ?>images/intro_icons02.png" alt=""></dt>
    <dd>
      <strong>Den bedste all-around-beskyttelse</strong>
      <p>Beskytter din pc imod WannaCry ransomware og andre online-trusler i realtid</p>
    </dd>
  </dl>
  <dl class="right">
    <dt><img src="<?php echo $pResUrl; ?>images/intro_icons04.png" alt=""></dt>
    <dd>
      <strong>Professionel service</strong>
      <p>Gratis 24/7 teknisk support ved behov</p>
    </dd>
  </dl>
  <div class="clear"></div>
  <p><a href="javascript:void(0);" onclick="goTaget($('.comparison'))">Sammenlign ASCU med andre programmer</a></p>
</div>
<div class="gift-box ">
  <h2>Gratis gaver kun for brugerne af Advanced SystemCare Ultimate 12</h2>
	<div class="wrapper">
		<div class="box">
      <img src="<?php echo getStaticUrl('images/sd-gift.png')?>" alt=""/>
			<dl>
				<dt>
					<h3>Smart Defrag 6 PRO <strong>kr. 0</strong></h3>
				</dt>
				<dd>Defragmenterer dine harddiske og forbedrer din pc's ydeene</dd>
			</dl>
		</div>
		<div class="box pf">
			<img src="<?php echo $pResUrl; ?>images/pf-gift.png" alt="">
			<dl>
				<dt>
					<h3>Protected Folder <strong>kr. 0</strong></h3>
				</dt>
				<dd>Beskytter personlige filer mod tyveri</dd>
			</dl>
		</div>
	</div>
</div>

<div class="awrad wrapper">
	<h2>Verdensomspændende priser</h2>
	<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
</div>
<div class="review wrapper">
  <div class="content ">
    <dl class="active first">
      <dt><h3>Media Review</h3></dt>
      <dd>
        <h4>"Advanced SystemCare Ultimate is a powerful anti-virus and system optimization tool."</h4>
      </dd>
      <dd>
        "Advanced SystemCare Ultimate er et kraftfuldt anti-virus- og systemoptimeringsværktøj. Udover at beskytte din pc mod malware, virus og lignende trusler, kan det også øge din pc's ydeevne ved at anvende forskellige registreringsdatabase- og genvejsreparationer, fjerne skrammelfiler, skanne lokale diske for systemsårbarheder m.v." 
      </dd>
    </dl>
    <dl>
      <dt><h3>Brugeranmeldelser</h3></dt>
      <dd>"Jeg har førhen haft problemer og har altid bøvlet med min computer. Så jeg fik min første kopi af Advanced SystemCare. Nu er det ikke længere nødvendigt at bruge tid på bøvl. Nu hvor jeg har antivirus, der er inkluderet i produktet, har jeg ikke længere brug for andre programmer. Avanceret System Care Ultimate er den nye guldmine. Den store vinder! Min computer er nu altid opdateret og kører som er drøm. I modsætning til andre produkter har der ikke været en konstant bunke konflikter."  </dd>
    </dl>
    <dl>
      <dt><h3>Brugeranmeldelser</h3></dt>
      <dd>"Med den tidligere version af advanced systemcare ultimativ havde jeg næsten ingen problemer overhovedet, system, malware osv. Og nu da det er opdateret, vil flere af de funktioner som er med, få min laptop til at køre 5x hurtigere end før. Jeg kan også godt lide det nye udseende. Så næste gang jeg reparerer andres computer, vil jeg anbefale advanced systemcare ultimativ som deres antivirus/system-optimeringsprogram."  </dd>
    </dl>
    <dl>
      <dt><h3>Brugeranmeldelser</h3></dt>
      <dd>"Jeg har brugt forskellige versioner af Advanced SystemCare i flere år. Da jeg kiggede på funktionerne i Advanced SystemCare Ultimate, vidste jeg, at jeg skulle have det. Det har ikke skuffet mig. Et af de enkleste, men alligevel effektive programmer, jeg har fundet til at holde mine tre computere sunde." </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li class="current">
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/addictivetips.png" alt="Addictivetips">
      </div>
      <p>Addictivetips</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/rod-garnett.png" alt="Rod Garnett"></div>
      <p>Rod Garnett</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/dareen-lim.png" alt="Dareen Lim"></div>
      <p>Dareen Lim</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/russell-peck.png" alt="Russell Peck"></div>
      <p>Russell Peck</p>
    </li>
  </ul>
</div>
<div class="comparison wrapper">
	<h2>Hvorfor vælge Advanced SystemCare Ultimate 12?</h2>
	<h3><span>Bedre beskyttelse</span> og <span>ingen nedsat pc-ydelse</span>. Se sammenligningerne nedenunder</h3>
	<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="text"></th>
				<th class="ascu"><div>Advanced SystemCare <br> Ultimate</div></th>
				<th class="avc"><div>AVG <br> Anti-virus</div></th>
				<th class="nor"><div>Norton Security <br> Deluxe</div></th>
				<th class="ava"><div>Avast! Pro <br> Antivirus</div></th>
				<th class="mic"><div>Microsoft <br> Security Essentials</div></th>
				<th class="mic mca"><div>McAfee® AntiVirus</div></th>
			</tr>
		</thead>
		<tbody>
			<tr>
				<td class="text">Opdagelsesrate</td>
				<td class="ascu">Meget høj </td>
				<td class="avc">Normal</td>
				<td class="nor">Høj </td>
				<td class="ava">Normal </td>
				<td class="mic">Høj</td>
				<td class="mic">Høj</td>
			</tr>
			<tr>
				<td class="text">Forsinker pc'en</td>
				<td class="ascu">Nej  </td>
				<td class="avc">Ja</td>
				<td class="nor">Ja </td>
				<td class="ava">Ja </td>
				<td class="mic">Ja</td>
				<td class="mic">Ja</td>
			</tr>
			<tr>
				<td class="text">Top pc-rensning og optimering</td>
				<td class="ascu"><img src="<?php echo $pResUrl; ?>images/green.png" alt="">  </td>
				<td class="avc"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
				<td class="nor"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
				<td class="ava"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
				<td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
				<td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
			</tr>
			<tr>
				<td class="text">Over 20 ekstraværktøjer for bedre pc-ydelse</td>
				<td class="ascu"><img src="<?php echo $pResUrl; ?>images/green.png" alt="">  </td>
				<td class="avc"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
				<td class="nor"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
				<td class="ava"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""> </td>
				<td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
				<td class="mic"> <img src="<?php echo $pResUrl; ?>images/red.png" alt=""></td>
			</tr>
		</tbody>
	</table>
	<dl>
		<dt>Uovertruffen registreringshastighed og maksimal beskyttelse</dt>
		<dd>
      Et enkelt klik for at rydde skjulte og stædige vira, trojans, orme, spyware, adware og forskelligt malware. Advanced SystemCare Ultimate giver også en permanent, automatisk og proaktiv beskyttelse mod alle former for internet-sikkerhedstrusler med hurtige opdateringer af virusdatabasen.  
    </dd>
	</dl>
	<dl>
		<dt>Nyd bedre sikkerhed uden systembelastning</dt>
		<dd>Dit system kører med højeste hastighed uden at det går ud over ydeevnen, på grund af vores førende internet-sikkerhedsteknologi.</dd>
	</dl>
	<dl>
		<dt>Surf sikkert, søg, download og del med tillid</dt>
		<dd>Proaktiv viruskontrolteknologi overvåger processorens handlinger i realtid, scanner filer, der deles via e-mail og blokerer for mulige trusler. Den uovertrufne registreringshastighed garanterer dig et sikkert miljø, mens du bruger din pc.</dd>
	</dl>
  <dl>
    <dt>Få højindstillet ydeevne og nyd den nye pc-følelse</dt>
    <dd>Den allerede dokumenterede kraftfulde pc-tune-up-kapacitet frigør den fulde effekt af din pc. Med realtidsoptimering og ActiveBoost-funktionen formår systemressourcerne intelligent at sikre, at du har en superhurtig pc.</dd>
  </dl>
</div>
<div class="footer-buy wrapper">
  <h2>Bedste pris</h2>
  <p>Spar mere og få gratis gaver. Skynd dig!</p>
  <div class="panel clearfix">
    <div class="left"><img src="<?php echo getStaticUrl('images/footer-ascu.png')?>" alt=""/></div>
    <div class="right">
      <dl>
        <dt>
          <strong class="family">kr. 219</strong> <del>kr. 1.377</del>
        </dt>
        <dd>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=dk-ascu123pcsdpf219&ref=dk_au12pfsdpurchase1810<?php echo $refStr;?>&refs=dk_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase201805-dk')">
            Aktiver nu
          </a>
        </dd>
        <dd>
           <img src="<?php echo $pResUrl; ?>images/people.png" alt="">
           Aktiveret af <span class="buyNum"><?php echo $buyNum; ?></span> brugere
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- footer start -->
<div class="footer">
  <div class="payment wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""/></dt>
      <dd><strong>Tilfredshedsgaranti</strong></dd>
      <dd>60-dages pengene-tilbage-garanti</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><strong>Betalingssikkerhed</strong></dd>
      <dd>Din betaling er 100% sikker</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/shop-box.png" alt=""></dt>
      <dd><strong>Hurtig aktivering</strong></dd>
      <dd>Du vil modtage en aktiveringskode <br>hurtigt efter betalingen</dd>
    </dl>
    <dl class="servicion">
      <dt><img src="<?php echo $pResUrl; ?>images/servicio.png" alt=""></dt>
      <dd><strong>Kundeservice</strong></dd>
      <dd>Gratis 24/7 teknisk support ved behov</dd>
    </dl>
  </div>
  <dl class="annotation wrapper">
    <dt>Note:</dt>
    <dd>* Tilbud som dette kan fra tid til anden ændres uden varsel efter vores skøn.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 -<?php echo date('Y')?>. All Rights Reserved</p>
</div>

<div class='popout'><p>ASCU v12 godtager ASCU v11's licensnøgle som <strong> gyldig for ASCU v12.</strong></p></div>
<script>
	//userreview
	$(".users li").mouseover(function(event) {
		var num = $(this).index();
		$(".users li").eq(num).addClass('current').siblings().removeClass('current');
		$(".review .content > dl").eq(num).addClass('active').siblings().removeClass('active');
	});
	function goTaget(target) {
		var Theigth = target.offset().top - 10;
		$("html, body").animate({scrollTop: Theigth}, 'slow');
	}
  $(window).on('scroll', function () {
    if ($(window).scrollTop() > 200 ) {
      $('.ascu-message dl').addClass('on');
    }
    else {
      $('.ascu-message dl').removeClass('on');
    }
  });
	//count down
	function cycleCountdown(){
		var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
		var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 0.5);
		d = MApp(2.2).packages.zeroize(datetime[0], 2);
		h = MApp(2.2).packages.zeroize(datetime[1], 2);
		i = MApp(2.2).packages.zeroize(datetime[2], 2);
		s = MApp(2.2).packages.zeroize(datetime[3], 2);
		mi = MApp(2.2).packages.zeroize(datetime[4], 2);
		$(".countdown span").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
		setTimeout('cycleCountdown()', 1);
	}
	cycleCountdown();

  function showPop(){
    $('.popout').addClass('on');
  }
    $(function(){
      var ver=MApp(2.2).url.getParameters('ver');
      var patt=new RegExp('^12\.0\.(.*)');
      if(patt.test(ver)){
        showPop();
      }
    })
</script>
</body>
</html>
