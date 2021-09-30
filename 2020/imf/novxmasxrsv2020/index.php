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
  <title>Spara upp till 87% på IObit Malware Fighter PRO och få ett gåvopaket – IObit</title>
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
    <a class="logo" href="https://www.iobit.com/sv/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Exklusiv Jul Rea</h1>
    <!-- subtitle -->
    <p>
      Upp till -<b> 87</b>% på IObit Malware Fighter och få en gratis
    </p>
    <!-- panel -->
    <div class="panel clearfix">

      <!-- imf-55 -->
      <div class="message small fl">
        <div class="message-box">
			<div class="message-box-sale"><p>-54%</p></div>
			<img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
		</div>
        <p>1 År / 3 PC</p>
        <dl>
        
          <dd class="two">
            <p class="price"><b>319</b> <del>699kr</del></p>
          </dd>
          <dd>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf83pc319&ref=sv_imf83pc319purchase2011xr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpurchase2011xr-sv')"> <i class="all-icons"></i> KÖP NU </a>
          </dd>
        </dl>
      </div>

      <!-- imf-87 -->
      <div class="message large fr">
          <div class="cont">
          <div class="countd countdown">
          <div class="countdcnt">
            <strong>00</strong><span>h :</span>
            <strong>00</strong><span>m :</span>
            <strong>30</strong><span>s</span>
          </div>
        </div>
        <div class="message-box">
          <div class="message-box-sale message-box-eaux"><p>-87%</p></div>
          <img class="box" src="<?php echo getStaticUrl('images/xmas-imfbox.png')?>" alt="IObit Malware Fighter PRO">
          <div class="xmas-giveaway"></div>
          <div class="message-tips"><i class="all-icons"></i><p>Cadeaux exclusifs incluent Protected Folder, Smart Defrag et IObit Software Updater.</p></div>
        </div>
        <p class="m"> 1 År / 3 PC + <del class="messagecad">GÅVOR PRO</del></p>
        <!-- dl -->
        <dl>
          
          <dd class="two">
            <p class="price"><b>279</b> <del class=""><em>2 196</em>kr</del></p>
          </dd>
          <dd>
            <a class="buybtn large"
               href="https://www.iobit.com/buy.php?product=sv-imf83pcpfsdisu279&ref=sv_imf83pcpfsdisu279purchase2011xr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpfsdisupurchase2011xr-sv');"> <i class="all-icons"></i> KÖP NU </a>
            <!-- <p class="note"><i class="all-icons"></i><b class="viewNum">4,006,553</b> personnes l'ont acheté!</p> -->
          </dd>
        </dl>
          </div>
      </div>
    </div>
	</div>
  </div>
  <!-- end banner -->
<div class="xmas-annou"><i class="all-icons"></i>Uppmärksamhet! Endast 24 timmar. Skynda dig!</div>
<div class="xmas-payment"></div>


<!-- feature -->
<div class="feature">
  <div class="wrapper clearfix">
    <!-- h2 -->
    <h2>Det enda säkerhetsskyddet du någonsin behöver</h2>
    <!-- left-message -->
    <div class="left-message fl">
      <h3><strong>3 motorer</strong> fungerar <br> perfekt tillsammans</h3>
      <img class="arrow" src="<?php echo getStaticUrl('images/arrow.png')?>" alt="">
      <dl class="clearfix" data-index="01" data-color="blue">
        <dd class="fl">
          <h4>Bitdefender motor</h4>
          <p>
            Världsledande motor mot virus och skadlig kod
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="02" data-color="blue">
        <dd class="fl">
          <h4>IObit Anti-malware motor</h4>
          <p>
            Koordinerade åtgärder för Bitdefender motor och IObit motor
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
      </dl>
      <dl class="clearfix" data-index="03" data-color="blue">
        <dd class="fl">
          <h4>IObit Anti-ransomware motor</h4>
          <p>Blockera attacker från ransomware</p>
        </dd>
        <dt class="fr paddingtop15"><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- right-message -->
    <div class="right-message fr">
      <dl data-index="04" data-color="green">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
        <dd>
          <h4>Realtidsskydd</h4>
          <p>Ingen chans för skadlig programvara</p>
        </dd>
      </dl>
      <dl data-index="05" data-color="green">
        <dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
        <dd>
          <h4>Skydd för känslig information</h4>
          <p>
            Ingen obehörig åtkomst kommer att vara möjlig
          </p>
        </dd>
      </dl>
    </div>
    <!-- detail-show -->
    <div class="detail-show clearfix">
      <div id="show01" class="showes fl on blue">
        <h5>Bitdefender motor</h5>
        <hr>
        <p>En mångsidig och omfattande databas som uppdateras dagligen gör att du kan identifiera utvecklande risker.</p>
      </div>
      <div id="show02" class="showes fl blue">
        <h5>IObit Anti-malware motor </h5>
        <hr>
        <p>Över 209 miljoner hot, t.ex. virus, skadlig programvara, spyware, kryptokapning, kan enkelt tas bort.</p>
      </div>
      <div id="show03" class="showes fl blue">
        <h5>IObit Anti-ransomware Motor</h5>
        <hr>
        <p>Oroa dig aldrig för hackare som skriver in din dator och krypterar dina viktiga filer och personuppgifter.</p>
      </div>
      <div id="show04" class="showes fl green">
        <h5>Realtidsskydd</h5>
        <hr>
        <p>Radera automatiskt farliga kakor och spår när du stänger webbläsare och förhindrar hackare att hitta vad du läser, se och köper på nätet.</p>
      </div>
      <div id="show05" class="showes fl green">
        <h5>Skydd för känsliga uppgifter</h5>
        <hr>
        <p>Förstärk det flerskiktsskyddet för dem filer som du bryr dig mest om med kombinationen av det skyddet för känslig data och den säkerheten.</p>
      </div>
    </div>
  </div>
</div>
<!-- end feature -->

  <!-- gifts -->
  <div class="gifts">
    <div class="wrapper gifts-cont">
		<h2>Spara upp till 87% rabatt på Advanced SystemCare pro och få en gratis paket</h2>
		<p>Le temps est limité, ne le manquez pas !</p>
		<div class="gifts-giveway gifts-giveway1">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>IObit Software Updater 3 PRO <b>0kr</b> <del>599kr</del> <span>(1 År / 1 PC)</span></h4>
				<ul>
        <li>IObit Software Updater ger dig det enklaste sättet att uppdatera din programvara och installera de grundläggande programmen. Den ser till att du njuter av alla nya funktioner och skyddas från oöverkomliga sårbarheter också.</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway2">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Smart Defrag 6 PRO <b>0kr</b> <del>459kr</del> <span>(1 År / 1 PC)</span></h4>
				<ul>
        <li>Defragmentera snabbt och grundligt för att optimera hårddiskens och datorns prestanda optimering.</li>
				</ul>
			</div>
		</div>
		<div class="gifts-giveway gifts-giveway3">
			<div class="gifts-box"></div>
			<div class="gifts-text">
				<h4>Protected Folder <b>0kr</b> <del>499kr</del> <span>(1 År / 1 PC)</span></h4>
				<ul>
        <li>Effektivt filskyddsverktyg som garanterar säkerheten för dina viktiga mappar, data och din integritet.</li>
				</ul>
			</div>
		</div>
	</div>
  </div>
  <!-- end gifts -->
<div class="gifts-store">
	<div class="gifts-store-arrow"></div>
	<a class="buybtn" href="https://www.iobit.com/buy.php?product=sv-imf83pcpfsdisu279&ref=sv_imf83pcpfsdisu279purchase2011xr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=sv_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpfsdisupurchase2011xr-sv');"> <i class="all-icons"></i>KÖP NU</a>
	</dd>
</div>
  
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th colspan="2">Se vad PRO-versionen kan göra för dig:</th>
        <th class="itemb"><div>IObit Malware Fighter 8<br> FREE</div></th>
        <th class="space"></th>
        <th class="itema"><div>IObit Malware Fighter 8 PRO <span>(1 År / 3 PC )+Gåva</span></div></th>
      </tr>    
    </thead>
    <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_01.png')?>" alt=""></td>
        <td class="virtue">Grundläggande skydd mot sabotageprogram <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_04.png')?>" alt=""></td>
        <td class="virtue">Fullständigt skydd mot sabotageprogram med IObits Anti-malwaremotor <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_05.png')?>" alt=""></td>
        <td class="virtue">Avancerat skydd mot hot med Bitdefender Anti-virusmotor <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_06.png')?>" alt=""></td>
        <td class="virtue">Skydda din PC och dina pengar från utpressningsprogram <sup class="green">Ny</sup></td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_07.png')?>" alt=""></td>
        <td class="virtue"> Skydda din kamera från obehörig åtkomst <sup class="green">Ny</sup></td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_08.png')?>" alt=""></td>
        <td class="virtue">Komplett skydd i realtid för ultimat säkerhet <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_09.png')?>" alt=""></td>
        <td class="virtue">Hindra virus som sprids genom USB-minnen</td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_10.png')?>" alt=""></td>
        <td class="virtue">Hitta skadliga processer i RAM-minnet</td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_11.png')?>" alt=""></td>
        <td class="virtue">Rensa automatiskt bort surfspår med Anti-spårning för webbläsare  <sup>Förbättrad</sup></td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_12.png')?>" alt=""></td>
        <td class="virtue">Hitta hot genom att analysera skadlig aktivitet</td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_13.png')?>" alt=""></td>
        <td class="virtue">Jobbar smart i bakgrunden utan att störa</td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_14.png')?>" alt=""></td>
        <td class="virtue">Uppdaterar automatiskt till den senaste versionen</td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon_15.png')?>" alt=""></td>
        <td class="virtue">Gratis teknisk support dygnet runt</td>
        <td class="itemb"><img src="<?php echo getStaticUrl('images/free-close.png')?>"></td>
        <td class="space"></td>
        <td class="itema"><img src="<?php echo getStaticUrl('images/pro-star.png')?>"></td>
      </tr>
    </tbody>
  </table>
</div>

  <!-- review -->
  <div class="review">
    <h2>IObit Malware Fighter PRO har redan skyddat fler än 5 381 820
datorer, det är dags att skydda din.</h2>
    <div class="content">
      <div class="details">
        <div class="active">
          <p>"IObit Malware Fighter PRO är ett komplett säkerhetspaket. Det rensar bort spionprogram, trojaner och allehanda otrevligheter. Det finns också ett Uppstartsskydd som säkerställer att inga skadliga processer startas med Windows. Webbläsarskyddet garanterar att ingen programvara gör ändringar i din webbläsare och Filgranskaren garanterar att varje okänd fil du öppnar inte kan orsaka någon skada. Inkluderat är också vaktenheter för USB och processor med mera."</p>
		  <h5>Vad folk säger om oss</h5>
        </div>
        <div>
          <p>"Vi brukade använda upp till ett dussin olika program för att hålla våra maskiner i trim och hålla skurkarna borta. Det tog timmar varje vecka för att upprätthålla säkerhet och prestanda. Nu, med IObit Malware Fighter PRO och Advanced System Care PRO, är allt på ett ställe och det tar oss bara några minuter varje vecka för att göra samma jobb, men med mer förtroende. Vi har inte haft ett enda problem sedan vi började använda era produkter." </p>
		  <h5>Bob Bassett</h5>
        </div>
        <div>
          <p>"För några år sedan drogs min uppmärksamhet till IObit Malware Fighter. Först var jag skeptisk. Men efter att ha installerat det blev det snabbt min favorit bland anti-malware program. Det är mycket lätt att använda. Genom åren har det upptäckt många hot och avlägsnat dem. I samarbete med andra program från IObit, som till exempel ASC, har jag nu ett ypperligt skydd för min dator. Jag rekommenderar alla dessa program till mina vänner och familj."     </p>
		  <h5>Peter Stoffers</h5>
        </div>
        <!-- <div>
          <h4>Avis des utilisateurs</h4>
		  <h5>Gelu Batir</h5>
        </div>
		<div>
		  <h4>Avis des utilisateurs</h4>
		  <h5>David Cassidy</h5>
		</div> -->
      </div>
	  <ul>
		  <a class="next nextbtn" href="javascript: nextFun();"></a>
		  <li class="one"><p><img src="<?php echo getStaticUrl('images/bn.png')?>" alt="Software Informer"></p></li>
		  <li class="two"><img src="<?php echo getStaticUrl('images/bob-bassett.png')?>" alt="Bob Bassett"></li>
	    <li class="three"><img src="<?php echo getStaticUrl('images/peter-stoffers.png')?>" alt="Gelu Batir"></li>
	    <!-- <li class="four"><img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="Gelu Batir"></li>
	    
	    <li class="five"><img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="David Cassidy"></li>
	  	 -->
	  </ul>
	  
      <!-- <a class="next" href="javascript: nextFun();"></a>
      <a class="prev" href="javascript: prevFun();"></a> -->
    </div>
  </div>
  <!-- end review -->
  
<!-- awards -->
<div class="probleme award">
  <div class="wrapper clearfix">
    <h2>Internationella utmärkelser och recensioner</h2>
    <p>Gör våra kunder nöjda var de än befinner sig</p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt="">
  </div>
</div>
<!-- end awards -->

  <!-- bottom-buy -->
  <div class="bottom-buy clearfix">
    <!-- title -->
    <!-- <h2 class="on">PREMIER ARRIVE, PREMIER SERVI !</h2> -->
    <!-- box -->
	<div class="wrapper bottom-buy-center">
    <div class="box fl">
	  <div class="bottom-buyimg bottom-buy1"></div>
	  <div class="bottom-buyimg bottom-buy2 on"></div>
	  <div class="bottom-buyimg bottom-buy3"></div>
    </div>
    <!-- ul -->
    <!-- <ul class="fl">
      <li class="top">1 År / 1 PC</li>
      <li class="active mid">1 År / 3 PC + <small>Cadeaux exclusifs</small></li>
      <li class="bot">1 År / 3 PC</li>
    </ul> -->
    <!-- dl -->
    <dl class="fr">
      <dd>
        <p class="price"><b>279</b> <del>2 196kr</del></p>
      </dd>
      <dd>
        <a class="buybtn small" href="https://www.iobit.com/buy.php?product=sv-imf83pcpfsdisu279&ref=sv_imf83pcpfsdisu279purchase2011xr<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=sv_purchase_imf" onclick="GA：ga('send', 'event', 'imfbuy', 'buy', 'imf3pcpfsdisupurchase2011xr-sv')">
          <i class="all-icons"></i> KÖP NU
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
        <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
        <dd>
          <h3>Accepterade Betalningssätt</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h3>Pengarna- tillbaka-garanti</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/godaddy.png" alt=""></dt>
        <dd>
          <h3>Säker betalning</h3>
        </dd>
      </dl>
    </div>
  </div>
  <!-- end service -->

  <!-- footer -->
  <div class="footer">
    <div class="content">
      <dl>
        <dt>Notera:</dt>
        <dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
        <dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit.  Alla Rättigheter Förbehållna</p>
    </div>
  </div>
  <!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>