<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

$reduceNum=758560000;
$reduceTime=2;
$buyNum = ceil(microtimeFloat()*1000/(1000*$reduceTime)) - $reduceNum;
$buyNum = number_format($buyNum);

$driverCount=intval($_GET['uc']);
$installDays=intval($_GET['iday']);
$expireTimestamp=intval(base64_decode($_GET['ext']));
$expireDate=date('Y-m-d H:i:s',$expireTimestamp);
?>
<!DOCTYPE html>
<html lang="sv">
<head>
	<meta charset="UTF-8">
	<title>Betala 0 SEK för att behålla Driver Booster PRO för Giveaway-användare - IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Play" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="http://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<div class="info">
				<h2>Driver Booster 5 PRO</h2>
				<p>Njut av ditt exklusiva privilegium för att hålla PRO för ytterligare 15 dagar gratis!</p>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>T : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=sv-db5preorder15d&ref=2018giveawaysv&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-sv');" class="orig-btn">
						<span>Få PRO gratis - 0 SEK</span>
					</a>
					<div class="shadow"></div>
				</div>
				<div class="crowd-count"><span class="buy-num"><?php echo $buyNum;?></span> personer har fått programmet</div>
			</div>
			<div class="steps clearfix">
				<ul>
					<li>Betala  0 SEK för att fortsätta hålla <span>Driver Booster 5 PRO (3 PCs) i 15 dagar</span> längre</li>
					<li>Efter 15 dagar, få 56% rabatt (Normalt pris <span>899.00 SEK) för Driver Booster 5 PRO</span> (1 Year/3 PCs)</li>
					<li>Du debiteras inte, förrän försöksperioden <span>löper ut och du kan, när som helst, avbryta</span> ordern.</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<!-- statistics -->
	<div class="statistics">
		<div class="wrapper">
			<h2>Driver Booster har installerat <strong class="driver">57</strong> drivrutiner de sista <strong class="countDay">345</strong> dagarna,</h2>
			<p>och har hållit din dator stabil och i toppskick.</p>
		</div>
	</div>
	<!-- end statistics -->
	<!-- features -->
	<div class="features">
		<div class="wrapper">
			<h2>Fortsätt och njut av alla förbättringar i Driver Booster 5 PRO. <span>Vi försäkrar, att du kommer att ha en mycket mer stabil dator i år!</span></h2>
			<div class="disp clearfix">
				<div class="content">
					<h3>Varför välja Driver Booster 5?</h3>
					<ul>
						<li class="one"><i class="icons"></i> Stöder över 1.000.000 drivrutiner och enheter!</li>
						<li class="two"><i class="icons"></i> Expanderad spelkomponentdatabas!</li>
						<li class="three"><i class="icons"></i> Identifierar och reparerar saknade och felaktiga drivrutiner!</li>
						<li class="four"><i class="icons"></i> Alla drivrutiner från Driver Booster 5 har passerat WHQL-tester!</li>
					</ul>
				</div>
				<div class="screen">
					<img src="<?php echo getStaticUrl('images/screen.png')?>" alt="" />
				</div>
			</div>
			<div class="cart-zone">
				<h3>Få 15 dagar gratis nu, för att enkelt åtgärda och uppdatera dina drivrutiner!</h3>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=sv-db5preorder15d&ref=2018giveaway1sv&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-sv');" class="orig-btn"><span>Få PRO gratis - 0 SEK</span></a>
					<div class="shadow red"></div>
				</div>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>T : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
			</div>
		</div>
	</div>
	<!-- end features -->
	<!-- awards -->
	<div class="awards">
		<div class="wrapper">
			<h2>Rekommenderas och belönade av dessa medier</h2>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
		</div>
	</div>
	<!-- end awards -->
	<!-- reviews -->
	<div class="reviews">
		<div class="wrapper">
			<h2>Driver Booster 5 PRO har belönats och berömts av både välkända <span>media och användare.</span></h2>
				<div class="review active">
					<h3>I media</h3>
					<h4>"Driver Booster, från IObit, lovar en enklare lösning för att hämta och uppdatera drivrutiner med den mest avancerade tekniken."</h4>
					<p>
						"Driver Booster, från IObit, lovar en enklare lösning för att hämta och uppdatera drivrutiner med den mest avancerade tekniken genom att fungera <span>som en allt-i-ett kommandocentral. Alla dina drivrutiner är listade i applikationens gränssnitt, vilket gör det till en enkel process att hämta och</span> uppdatera drivrutiner. Att ladda ned och installera drivrutiner med denna programvara är en enkel match och ofta tar det bara några minuter (eller <span>mindre)."</span>
					</p>
				</div>
				<div class="review">
					<h3>Användares omdömen</h3>
					<h4>"Min dator är snabbare, säkrare och känns nyare nu än under de senaste 8 månaderna."</h4>
					<p>
						"Med Driver Booster, kan jag lätt veta vilka drivrutiner som är inaktuella och kan enkelt uppdatera dem. Dessutom hjälper det mig att fixa <span>ljudfel, nätverksfel, enhetsfel osv... Jag trodde inte det innan jag använde programmet, men efter att ha testat älskar jag verkligen det.. Min</span> dator är snabbare, säkrare och känns nyare nu än under de senaste 8 månaderna... Så tack IObit."
					</p>
				</div>
				<div class="review">
					<h3>Användares omdömen</h3>
					<h4>"Jag rekommenderar Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt."</h4>
					<p>
						"Driver booster är en fantastisk applikation. När det gäller någon som har en hel del applikationer och enheter och som inte har tid att <span>manuellt uppdatera dem, rekommenderar jag starkt Driver Booster, det hjälper mig att uppdatera drivrutiner snabbt och enkelt."</span>
					</p>
				</div>
				<div class="review">
					<h3>Användares omdömen</h3>
					<h4>"Det fungerade perfekt. Lätt att använda, informativt och intuitivt. Det här kommer att stanna i min verktygslåda för alltid... Bra jobbat!"</h4>
					<p>
						"Detta är ett av de bästa uppdateringsprogrammen. Microsoft har till och med vilselett mig genom att föreslå uppdateringar som inte skulle <span>fungera med min maskin. Detta program visste vilka uppdateringar jag behövde utan några konflikter. Det fungerade perfekt. Lätt att</span> använda, informativt och intuitivt. Det här kommer att stanna i min verktygslåda för alltid... Bra jobbat!"
					</p>
				</div>
				<ul class="users clearfix">
					<li class="active">
						<img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt="MakeUseOf">
						<span>MakeUseOf</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya">
						<span>Myo Thuya</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund">
						<span>Adam Backlund</span>
					</li>
					<li>
						<img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler">
						<span>Wayne Bowler</span>
					</li>
				</ul>	
		</div>
	</div>
	<!-- end reviews -->
	<!-- bottom -->
	<div class="bottom">
		<div class="wrapper">
			<div class="solgan">
				<p>Så, varför tveka?</p>
				<h2>Skaffa PRO nu för att få en att få en smidigare dator och <span>en uppsnabbad spelupplevelse!</span></h2>
			</div>
			<div class="btn-zone">
				<a href="https://www.iobit.com/buy.php?product=sv-db5preorder15d&ref=2018giveaway2sv&aff=<?php echo $_GET['aff']; ?>&refs=sv_purchase_db" onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-sv');" class="orig-btn"><span>Få PRO gratis - 0 SEK</span></a>
				<div class="shadow"></div>
			</div>
			<div class="count-down">
				<strong>6</strong>D : 
				<strong>22</strong>T : 
				<strong>34</strong>M : 
				<strong>25</strong>S : 
				<small>345</small>ms
			</div>
			<div class="footer">
				<dl>
					<dt>Notera:</dt>
					<dd>*.Uppgifter kan variera beroende på olika system eller datorer.</dd>
					<dd>*.Reklamkampanjer kan emellanåt ändras utan förvarning, efter vårt eget godtycke.</dd>
				</dl>
				<p>Copyright © 2005 - <?php echo date('Y')?> IObit. Alla Rättigheter Förbehållna</p>
			</div>
		</div>
	</div>
	<!-- end bottom -->
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
	<script>
		function getBuyNum(){
			$.ajax({
				type: "GET",
				url: "<?php echo $pRootUrl;?>callback.php",
				data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reduceTime;?>&r="+Math.random(),
				success: function(packs){
					$('.buy-num').html(packs);
				}
			});
			setTimeout('getBuyNum()', 3000);
		}
		setTimeout('getBuyNum()', 3000);

		$(".reviews .users li").click(function(event) {
			$(this).addClass("active").siblings().removeClass("active");
			$(".reviews .review").eq($(this).index()).addClass("active").siblings().removeClass("active");
		});
		$(document).ready(function() {
			cycleCountdown();
			$('.countDay').animateNumber({
						number: <?php echo $installDays;?>
					},
					5000,
					'linear'
			);
			$('.driver').animateNumber({
						number: <?php echo $driverCount;?>
					},
					3000,
					'linear'
			);
		});

		function cycleCountdown(){
			var datetime = timeCountDown(<?php echo $expireTimestamp;?>);
			if(datetime==false){
				window.location.href='index.php';
			}else {
				d = MApp(2.2).packages.zeroize(datetime[0], 2);
				h = MApp(2.2).packages.zeroize(datetime[1], 2);
				i = MApp(2.2).packages.zeroize(datetime[2], 2);
				s = MApp(2.2).packages.zeroize(datetime[3], 2);
				mi = MApp(2.2).packages.zeroize(datetime[4], 3);
				$('.count-down').each(function () {
					$(this).find('strong').eq(0).html(d).end().eq(1).html(h).end().eq(2).html(i).end().eq(3).html(s);
				});
				$('.count-down small').html(mi);
				setTimeout('cycleCountdown()', 1);
			}
		}

		function timeCountDown(startTimestamp) {
			var dateObj = new Date();
			var time = dateObj.getTime().toString().substring(0, 10);
			var remainingTime = startTimestamp - time;
			if (remainingTime > 0) {
				var d = Math.floor(remainingTime / (24 * 60 * 60));
				var h = Math.floor(remainingTime / (60 * 60) % 24);
				var i = Math.floor(remainingTime / 60 % 60);
				var s = Math.floor(remainingTime % 60);
				var mi = 999 - dateObj.getMilliseconds();
				if (mi < 10) {
					mi = '00' + mi;
				} else if (mi < 100) {
					mi = '0' + mi;
				}
				return [d, h, i, s, mi];
			} else {
				return false;
			}
		}
		function clickCount(){
			$.ajax({
				type: "GET",
				url: "dbgive.php",
				data: "action=clickCount&r="+Math.random()
			});
		}
	</script>
</body>
</html>