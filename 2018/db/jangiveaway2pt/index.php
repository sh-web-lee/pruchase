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
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<title> Pague R$0 para continuar com Driver Booster Pro após o Giveaway - IObit  </title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700|Play" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<div class="info">
				<h2>Driver Booster 5 PRO</h2>
				<p>Desfrute do seu privilégio exclusivo e mantenha Driver Booster Pro grátis por mais 15 dias!</p>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>H : 
					<strong>34</strong>M : 
					<strong>25</strong>S : 
					<small>345</small>ms
				</div>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=pt-db5preorder15d&ref=pt_2018giveaway&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db" onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-pt');" class="orig-btn">
						<span>Ativar Pro por R$0</span>
					</a>
					<div class="shadow"></div>
				</div>
				<div class="crowd-count"><span class="buy-num"><?php echo $buyNum;?></span> pessoas já ativaram</div>
			</div>
			<div class="steps clearfix">
				<ul>
					<li>Pague R$0 para manter Driver Booster 5 Pro (3PCs) por mais 15 dias</li>
					<li>Após 15 dias, tenha desconto exclusivo de 70% (preço original: 299,90) no Driver Booster 5 PRO (1 Ano / 3 PCs) </li>
					<li>Você não pagará até que o teste de 15 dias expire,  você pode cancelar o pedido a qualquer momento.</li>
				</ul>
			</div>
		</div>
	</div>
	<!-- end banner -->
	<!-- statistics -->
	<div class="statistics">
		<div class="wrapper">
			<h2>Driver Booster instalou <strong class="driver">57</strong> drivers nos últimos  <strong class="countDay">345</strong>dias para você </h2>
			<p>e manteve seu PC estável e com o melhor desempenho.</p>
		</div>
	</div>
	<!-- end statistics -->
	<!-- features -->
	<div class="features">
		<div class="wrapper">
			<h2> Agore continue a desfrutar de todas as melhorias do Driver Booster 5 PRO, <span>nós  garantimos um PC mais estável neste novo ano!</span></h2>
			<div class="disp">
				<dlv class="list feat-01">
					<h3>Você não precisará atualizar drivers um-por-um</h3>
					<p>Tenha um só programa para detectar e atualizar todos os seus dispositivos.</p>
				</dlv>
				<div class="list feat-02">
					<h3>Download e atualização segura de drivers</h3>
					<p>Faz backup automático e cria um ponto de restauração antes de atualizar para garantir a segurança.</p>
				</div>
				<div class="list feat-03">
					<h3>Sem travamentos inesperados do sistema</h3>
					<p>Sempre mantém todos os drivers atualizados para garantir um PC estável.</p>
				</div>
				<div class="list feat-04">
					<h3>Download 200%* mais rápido</h3>
					<p>Economiza tempo com download no tempo ocioso com velocidade 200% mais rápida.</p>
				</div>
				<div class="list feat-05" >
					<h3>Desempenho superior de jogos</h3>
					<p>Disponibiliza componentes de jogos essenciais como Nvidia, Realtek, Intel, AMS, Broadcom, VIA, Microsoft Visual C++ 2017 Redistributable para garantir uma melhor experiência de jogo.</p>
				</div>
			</div>
			<div class="cart-zone">
				<h3>Tenha 15 dias grátis agora para reparar e atualizar seus drivers com facilidade!</h3>
				<div class="btn-zone">
					<a href="https://www.iobit.com/buy.php?product=pt-db5preorder15d&ref=pt_2018giveaway1&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db" onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-pt');" class="orig-btn"><span>Ativar Pro por R$0</span></a>
					<div class="shadow"></div>
				</div>
				<div class="count-down">
					<strong>6</strong>D : 
					<strong>22</strong>H : 
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
			<h2>Recomendado também por</h2>
			<img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
		</div>
	</div>
	<!-- end awards -->
	<!-- reviews -->
	<div class="reviews">
		<div class="wrapper">
			<h2>Driver Booster 5 PRO é recomendado e elogiado pelos usuários e pela mídia especializada</h2>
				<div class="review active">
					<h3>Opinião da Mídia</h3>
					<h4>"A IObit tem muitos utilitários e o Driver Booster Pro, que atualiza seus drivers automaticamente, é um dos melhores."</h4>
					<p>"A função central do Driver Booster PRO é ainda mais atraente graças à inclusão de múltiplas licenças por um preço bem amigável, assim como de uma interface personalizável que mostra informações específicas relacionadas ao hardware."
					</p>
				</div>
				<div class="review">
					<h3>Opinião do Usuário</h3>
					<h4>"Funcionou perfeitamente. Fácil de usar, eficiente e intuitivo. Este programa vai ficar na minha caixa de ferramentas para sempre... Bom trabalho!"</h4>
					<p>"Esse é um dos melhores atualizadores de drivers disponíveis. Microsoft já me confundiu algumas vezes me sugerindo atualizações que não funcionariam com meu computador, mas este programa sabe quais atualizações eu preciso sem causar qualquer conflito. Funcionou perfeitamente. Este programa vai ficar na minha caixa de ferramentas para sempre!"
					</p>
				</div>
				<div class="review">
					<h3>Opinião do Usuário</h3>
					<h4>"Eu recomendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveniência."</h4>
					<p>"Driver Booster é um aplicativo sensacional. Se você é como eu e tem diversos aplicativos e dispositivos e não tem tempo para atualizá-los manualmente, eu recomendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveniência.”
					</p>
				</div>
				<div class="review">
					<h3>Opinião do Usuário</h3>
					<h4>"Meu PC está mais estável, rápido e seguro do que 8 meses atrás."</h4>
					<p>"Com Driver Booster, eu consigo saber facilmente quais drivers estão desatualizados e posso atualizá-los com facilidade. Além disso, me ajuda a reparar erros com de e rede. Eu não acreditava antes de usar, mas depois de testá-lo eu o adorei, pois meu PC está mais estável, rápido e seguro do que 8 meses atrás. Muito obrigado, IObit."</p>
				</div>
				<ul class="users clearfix">
					<li class="active">
						<img src="<?php echo $pResUrl; ?>images/pcmag.png" alt="PC Magazine">
						<span>PC Magazine</span>
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
				<p>Está esperando o quê?</p>
				<h2> Ative a versão PRO agora para ter um PC rodando melhor!</h2>
			</div>
			<div class="btn-zone">
				<a href="https://www.iobit.com/buy.php?product=pt-db5preorder15d&ref=pt_2018giveaway2&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db" onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-pt');" class="orig-btn"><span>Ativar Pro por R$0</span></a>
				<div class="shadow"></div>
			</div>
			<div class="count-down">
				<strong>6</strong>D : 
				<strong>22</strong>H : 
				<strong>34</strong>M : 
				<strong>25</strong>S : 
				<small>345</small>ms
			</div>
			<div class="footer">
				<dl>
					<dt>Observe:</dt>
					<dd>*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
					<dd>*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
				</dl>
				<p>Copyright © 2005 - 2018 IObit. Todos os Direitos Reservados</p>
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