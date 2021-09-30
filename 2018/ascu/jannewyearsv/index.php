<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
}

$buyNum = ceil(microtime_float() * 1000 / 20000) -69997174;

$packsNum = ceil(microtime_float()*2000/20000);
  $packsNum = 360-($packsNum%360);
  if ($_GET['action'] == 'getPacks'){
    echo $packsNum;
    exit;
  }
$refStr='';
if(in_array($_GET['st'],array('pm_t3','ob_2','pm_t4','pm_t5','pm_p1','pm_p2','pm_r1','pm_p3','pm_r2','reg','news',
    'pm_t1','ob_1','pm_t2','no_patch_db','patch_installed_db','no_patch_imf','patch_installed_imf'))){
  $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="sv">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>70% rabatt och gratis gåvor för Advanced SystemCare Ultimate - IObit</title>
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
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
			$('#packs').html(packs);
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
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/asc.png')?>" alt="" /></dt>
      <dd>
        <a href="https://www.iobit.com/" target="_blank" class="logo">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="" />
        </a>
        <h2>Advanced SystemCare Ultimate <?php echo date('Y')?></h2>
      </dd>
    </dl>
    <div class="time" id="counttime">
    	<span>02</span>
      <span>02</span>
      <span>02</span>
      <span style="font-size: 14px;">025</span>
    </div>
  </div>
</div>
<div id="banner">
	<div class="wrapper">
    <img src="<?php echo getStaticUrl('images/box.png')?>" alt="" />
    <div class="right">
    	<h1>Specialerbjudande</h1>
      <p class="first">Köp Advanced SystemCare Ultimate för endast <strong>349 kr</strong> och få<br>Protected Folder som gåva. Helt Gratis!</p>
      <ul>
     	 	<li>
          <img class="imgage" src="<?php echo getStaticUrl('images/ascu.png')?>" alt="" />
          <span class="lin list01">
            <h2>Advanced SystemCare Ultimate </h2>
            Ger det bästa skyddet för din PC 
          </span>
          <span class="list02">Endast <b>0.32 kr</b> <i>pc / dag</i></span>
          <span class="lin list03">
            <strong>349 kr</strong>
            <del>1 298 kr</del>
            3PC / 1 år
          </span>
        </li>
     	 	<li>
          <img src="<?php echo $pResUrl; ?>images/pf.png" class="imgage">
          <span class="lin list01 list04">
            <h2>Protected Folder</h2>
            <img src="<?php echo $pResUrl; ?>images/target.jpg" onclick="goTaget($('.content'))">
          </span>
          <span class="list02 list05"><b>Gratis</b></span>
          <span class="lin list03">
            <strong>0 kr</strong>
            <del>499 kr</del>
          </span>
        </li>        
        <li class="last">Aktivera nu och spara 949 kr!</li>
      </ul>
      <p class="money-box"><strong class=" money">349 kr</strong> <del>1 298 kr</del></p>
      <p><a  href="https://www.iobit.com/buy.php?product=sv-ascu113pcpf349&ref=sv_ascu113pcpfpurchase1801<?php echo $refStr;?>&refs=sv_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1801-sv')" class="btn">Aktivera NU</a><img src="<?php echo getStaticUrl('images/days.png')?>" alt="" /></p>
      <div class="clear"></div>
      <p class="pay"><img src="<?php echo $pResUrl; ?>images/paypal.png"></p>
    </div>
  </div>
</div>
<div class="wrapper">
	<div id="content">
  	<h2>Ger det bästa skyddet och optimering för din PC till ett överkomligt pris!</h2>
    <h3><strong id="packs"><?php echo $packsNum; ?></strong> Paket Återstår Idag!</h3>
    <div class="content">
    	<img src="<?php echo $pResUrl; ?>images/content.png">
      <dl>
      	<dt>Detta är vad du får när du aktiverar ASCU PRO:</dt>
        <dd>Skyddar mot virus, spionprogram, hackare, nätfiske, botnät och andra typer av skadlig kod</dd>
        <dd>Skyddar din integritet i realtid medan du surfar på Internet</dd>
        <dd>Snabbar upp, rengör och reparerar alla typer av problem i din PC med bara ett klick</dd>
        <dd>Resurssnålt, lätt att använda och kompatibel med andra säkerhetsprogram.</dd>
        <p><a href="javascript: void(0);" onclick="goTaget($('.comparison'),150)">Lär dig mer om PRO-versionen>></a></p>
      </dl>
      <div class="clear"></div>
      <div class="pf">
      	<h2>Huvudegenskaper i Protected Folder</h2>
        <img src="<?php echo $pResUrl; ?>images/pf_big.jpg">
        <p class="pfirst">
          Blockerar och Deblockerar alla typer av filer eller mappar med bara ett lösenord
        </p>
        <p>Håller din information och viktiga filer säkra från att bli stulna</p>
      </div>
    </div>
  </div>
  <div class="payment clearfix">
     <img src="<?php echo $pResUrl; ?>images/payments.jpg" alt="">
  </div>  
	<dl class="awards">
      <dt>Utmärkelser</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/awards.png"></dd>
    </dl> 
</div>
<div class="media_rev">
	<div class="wrapper">
    <h3>I media</h3>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/addictivetips.png" alt="addictivetips.com"></dt>
      <dd><h4>"Advanced SystemCare Ultimate är ett kraftfullt anti-virus och verktyg för systemoptimering."</h4></dd>
      <dd>"Advanced SystemCare Ultimate är ett kraftfullt anti-virus och verktyg för systemoptimering. Förutom att skydda datorn mot skadlig kod, virus och liknande hot kan det också öka datorns prestanda med hjälp av olika register och snabbfixar, ta bort skräpfiler, skanna lokala diskvolymer för sårbarheter i systemet etc."
      <span>-Addictivetips</span>
      </dd>
    </dl>
  </div>
</div>
  <div class="user_rev" id="user_rev">
  <div class="wrapper">
				<div class="content">
          <h3>Användares omdömen</h3>
		      <dl class="show">
		        <dd><h4>"Jag kommer rekommendera Advanced Systemcare Ultimate som deras antivirus och Systemoptimerare."</h4></dd>
		        <dd>"Med den förra versionen av Advanced Systemcare Ultimate hade jag inga som helst problem med mitt system som malwares med mera. Nu uppdaterad med fler funktioner arbetar min dator 5x snabbare än tidigare. Jag gillar även det nya utseendet. Nästa gång när jag uppdaterar andras datorer kommer jag rekommendera Advanced Systemcare Ultimate som deras antivirus och Systemoptimerare."</dd>
		      </dl>
		      <dl class="hidden">
		        <dd><h4>"Advanced Systemcare Ultimate är det nya moderskeppet. Den stora vinnaren!"</h4></dd>
		        <dd>"Jag har tidigare alltid behövt jävlas med min dator när problem uppstått. Sedan fick jag min första kopia av Advanced Systemcare. Det finns ingen anledning att stöka runt längre. Nu när jag har ett antivirusprogram som ingår i produkten existerar inte längre mitt behov av sekundär programvara. Advanced Systemcare Ultimate är det nyblivna moderskeppet. Den stora vinnaren! Min dator är numera alltid aktuell och snabb som en galopperande häst. Gentemot andra produkter har det inte varit en ständig ström av konflikter."</dd>
		      </dl>
          <dl class="hidden">
            <dd><h4>"När jag tittade på funktionerna i Advanced SystemCare Ultimate visste jag att jag var tvungen att ha det. Det har inte gjort mig besviken."</h4></dd>
            <dd>"Jag har använt olika versioner av Advanced SystemCare under flera år. När jag tittade på funktionerna i Advanced SystemCare Ultimate visste jag att jag var tvungen att ha det. Det har inte gjort mig besviken. Ett av de enklaste men mest effektiva program som jag har funnit för att hålla alla tre av mina datorer friska."</dd>
          </dl>
	    	</div>
	      <ul class="users">
		      <li class="current"><img src="<?php echo $pResUrl; ?>images/dareen-lim.jpg" alt="">Dareen Lim</li>
		      <li><img src="<?php echo $pResUrl; ?>images/rod-garnett.jpg" alt="">Rod Garnett</li>
          <li><img src="<?php echo $pResUrl; ?>images/russell-peck.jpg" alt="">Russell Peck</li>
	      </ul>
			</div>
      </div>
  </div>

  <!--comparison-->
  <div class="wrapper-bg">
    <div class="wrapper clearfix">
      <div class="comparison">
        <h4>Varför Välja Advanced SystemCare Ultimate 11?</h4>
        <h5>Meilleure protection, et plus aucun retard de performance. Voir la comparaison ci-dessous</h5>
        <div class="ctable">
          <table border="0" cellspacing="0" cellpadding="0" width="100%">
            <thead>
            <tr>
              <th class="text"></th>
              <th class="blue">
                <p><span>Advanced SystemCare</span> Ultimate</p>
              </th>
              <th>AVG<span>Anti-virus</span></th>
              <th>Norton Security<span>Deluxe</span></th>
              <th>Avast! Pro<span>Antivirus</span></th>
              <th>Microsoft<span>Security Essentials</span></th>
              <th>McAfee® AntiVirus</th>
            </tr>
            </thead>
            <tbody>
            <tr>
              <td class="title first">Träffsäkerhet</td>
              <td class="gray">Väldigt hög</td>
              <td>Normal</td>
              <td>Hög</td>
              <td>Normal</td>
              <td>Hög</td>
              <td>Hög</td>
            </tr>
            <tr>
              <td class="title">Prestandafördröjning</td>
              <td class="gray">Nej</td>
              <td>Ja</td>
              <td>Ja</td>
              <td>Ja</td>
              <td>Ja</td>
              <td>Ja</td>
            </tr>
            <tr>
              <td class="title">Bästa PC-rengöring och optimering</td>
              <td class="gray"><i class="tb-icons red">√</i></td>
              <td><i class="tb-icons">×</i></td>
              <td><i class="tb-icons">×</i></td>
              <td><i class="tb-icons">×</i></td>
              <td><i class="tb-icons">×</i></td>
              <td><i class="tb-icons">×</i></td>
            </tr>
            <tr>
              <td class="title">Över 20 extra verktyg för datorprestanda</td>
              <td class="gray"><i class="tb-icons red">√</i></td>
              <td><i class="tb-icons">×</i></td>
              <td><i class="tb-icons">×</i></td>
              <td><i class="tb-icons">×</i></td>
              <td><i class="tb-icons">×</i></td>
              <td><i class="tb-icons">×</i></td>
            </tr>
            </tbody>
          </table>
        </div>
        <dl class="comlist">
          <dt>
            <i class="all-icons">√</i>
            Oöverträffad Detekteringsgrad och Maximalt Skydd
          </dt>
          <dd>
            Ett klick för att rengöra envisa virus, trojaner, maskar, spionprogram, adware och olika skadliga program. Advanced SystemCare Ultimate ger också ett ständigt, 
            automatiskt, och proaktivt skydd mot alla typer av säkerhetshot på Internet, med snabb uppdatering av virusdatabasen.
          </dd>
        </dl>
        <dl class="comlist">
          <dt>
            <i class="all-icons">√</i>
            Njut av Övertygande Säkerhet utan Avmattat System
          </dt>
          <dd>
            Ditt system körs i topphastighet utan prestandafördröjning, tack vare vår branschledande Internetsäkerhet
          </dd>
        </dl>
        <dl class="comlist">
          <dt>
            <i class="all-icons">√</i>
            Säker Surf, Ladda Ner och Dela med Förtroende
          </dt>
          <dd>
            Proaktiv teknik för viruskontroll övervakar processernas beteende i realtid, genomsöker filer som delas med e-post och blockerar eventuella hot. Oöverträffad träffsäkerhet försäkrar dig en säkrare miljö när du använder din PC.
          </dd>
        </dl>
        <dl class="comlist">
          <dt>
            <i class="all-icons">√</i>
            Få Vältrimmad Prestanda och Njut av en Ny PC-Känsla
          </dt>
          <dd>
            Den redan bevisat kraftfulla finjusteringsförmågan släpper loss den fulla kraften i din PC. Med realtidsoptimering och en ActiveBoost-funktion kan systemresurserna intelligent försäkra dig om en supersnabb PC.
          </dd>
        </dl>
      </div>
    </div>
  </div>

	<dl class="annotation wrapper">
    <dt>Notera:</dt>
    <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
  </dl>  
	<p class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
</div>
</div>
<div class="floatlayer" id="floatlayer">
		<div class="wrapper">
      <dl class="left">
          <dt>Spara <span>70%</span>, Njut av Ultimat Skydd och Ultimat Prestanda!</dt>
          <dd><em class="buy-num"><?php echo $buyNum;?></em>  människor har aktiverat</dd>
          <dd id="counttime1"><span></span><span></span></dd>
        </dl>
        <dl class="checkarea">
          <dt> Endast <span> 349 kr</span> <del>1 298 kr</del></dt>
          <dd><a class="btn " href="https://www.iobit.com/buy.php?product=sv-ascu113pcpf349&ref=sv_ascu113pcpfpurchase1801<?php echo $refStr;?>&refs=sv_purchase_ascu" onclick="ga('send', 'event', 'ascubuy', 'buy', 'ascupurchase1801-sv')">Aktivera Nu</a></dd>
        </dl>
    </div>
  </div>
  <div class='popout'><p>ASCU v12 kommer att känna ASCU v11s licensnyckel som är <strong>laglig för ASCU v12</strong>.</p></div>
  <script>
		$("#user_rev .users li").mouseover(function(event) {
    var num = $(this).index();
    $("#user_rev .users li").each(function(index, el) {
      $(this).removeClass('current');
    });
    $(this).addClass('current');
    $("#user_rev dl").each(function(index, el) {
      $(this).removeClass('show').addClass('hidden')
    });
    $("#user_rev dl").eq(num).removeClass('hidden').addClass('show');
    //
  });
    function strFormat(str){
      return str.replace(/,/g, ',');
    }
    $(function () {
        $(window).on('scroll', function () {
            var scrollHeight = $("#banner").outerHeight();
            if ($(window).scrollTop() > scrollHeight) {
                $('#floatlayer').addClass('on');
            } else {
                $('#floatlayer').removeClass('on');
            }
        });
        $('.buy-num').html(strFormat($('.buy-num').html()));
    });
		function goTaget(target) {
			var Theigth = target.offset().top;
			$("html, body").animate({scrollTop: Theigth}, 'slow');
		}
		function cycleCountdown(){
		var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
		var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
		d = MApp(2.2).packages.zeroize(datetime[0], 2);
		h = MApp(2.2).packages.zeroize(datetime[1], 2);
		i = MApp(2.2).packages.zeroize(datetime[2], 2);
		s = MApp(2.2).packages.zeroize(datetime[3], 2);
		mi = MApp(2.2).packages.zeroize(datetime[4], 3);
		document.getElementById('counttime').innerHTML = '<span>'+h+'</span><span>'+i+'</span><span>'+s+'</span><span style="font-size: 14px;">'+mi+'</span>';
		document.getElementById('counttime1').innerHTML = '<span>'+h+'</span>h<span> : '+i+'</span>m<span> : '+s+'</span>s<sup> *</sup>';
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
