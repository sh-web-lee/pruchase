<?php
//	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
		$pResUrl = './';
		$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';
if(empty($_GET['ref'])){
    $ref1='pt_imf4pcpurchase1601';
    $ref2='pt_imf43pcpfpurchase1601';
}else{
    $ref1=$ref2=$_GET['ref'];
}

	function microtime_float(){
		list($usec, $sec) = explode(' ', microtime());
		return ((float)$usec + (float)$sec);
	}
		$buyNum = ceil(microtime_float()*1000/20000)-69157026;

	$packsNum = ceil(microtime_float()*2000/20000);
	$packsNum = 360-($packsNum%360);
	if ($_GET['action'] == 'getPacks'){
		echo $packsNum;
		exit;
	}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta content="IE=edge" http-equiv="X-UA-Compatible">
	<title>85% de Desconto! Ative IMF PRO para Proteção do PC e Experiência Online! - IObit 2016</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
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
			<a href="http://www.iobit.com" target="_blank" class="logo"></a>
			<h1>Promoção Relâmpago Pouco Tempo, Poucos Pacotes, Muitos Descontos! Não perca tempo! </h1>
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
					<dt>1 PC / 1 Ano</dt>
					<dd><strong><span>R$</span>52,99</strong></dd>
					<dd><b>-70%</b><del>R$176,65</del></dd>
					<dd>Economize R$ 123,66</dd>
					<dd><a href="http://www.iobit.com/buy.php?product=pt-imf41pcupgrade&ref=<?php echo $ref1;?>&refs=pt_purchase_imf&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'affptimf2016newyear')" class="buybtn">Ative Agora</a></dd>
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
					<dt>3PCs / 1 Ano</dt>
					<dd><strong><span>R$</span>74,99</strong></dd>
					<dd><b>-85%</b><del>R$487,63</del></dd>
					<dd>Economize R$ 412,64</dd>
					<dd><a href="http://www.iobit.com/buy.php?product=pt-imf43pcpf&ref=<?php echo $ref2;?>&refs=pt_purchase_imf&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'affptimf2016newyear')" class="buybtn">Ative Agora</a></dd>
				</dl>
				<p><span><img src="<?php echo $pResUrl; ?>images/people.jpg" alt=""> </span> <strong><?php echo $buyNum; ?></strong> pessoas já ativaram</p>
			</div>
		</div>
	</div>

	<div class="wrapper">
		<h2 class="title">Com apenas <strong>R$ 0,07</strong> por dia/ PC, tenha a melhor proteção e limpeza para o seu PC! <span><strong class="packs"><?php echo $packsNum; ?></strong> Pacotes Restantes Hoje!</span></h2>
		<img src="<?php echo $pResUrl; ?>images/imf-box.jpg" alt="" class="imf-box">
		<dl class="box-message">
			<dt>IObit Malware Fighter 4 PRO</dt>
			<dd>O Mais Eficiente para Remoção dos mais difíceis Malwares</dd>
			<dd>100% de Segurança de Privacidade com a Proteção em Tempo Real *</dd>
			<dd>Bloqueia Hijacking na Página Inicial e Websites Maliciosos</dd>
			<dd>Verificação Automática ou Agendada sem Interrupções</dd>
			<dd><a href="javascript:void(0)" onclick="goTaget($('#compare'))">Saiba mais sobre a versão PRO >></a></dd>
		</dl>
		<div class="clear"></div>
		<div class="gift-message">
			<img src="<?php echo $pResUrl; ?>images/gift-box.jpg" alt="">
			<h3><span>Brinde VIP</span> apenas para usuários do IObit Malware Fighter PRO 4 - 3PCs / 1 Ano</h3>
			<dl>
				<dt>Protected Folder <span>GRÁTIS</span><strong>R$0</strong> <del>R$67,95</del></dt>
				<dd>● Proteja seus arquivos importantes e pessoais.</dd>
				<dd>● Sem preocupação com o roubo de dados.</dd>
			</dl>
		</div>
		<ul class="payment">
			<li>Formas de Pagamento <img src="<?php echo $pResUrl; ?>images/payments.jpg"></li>
			<li>Garantia de Devolução do Dinheiro  <img src="<?php echo $pResUrl; ?>images/guarantee.jpg"></li>
			<li>Pagamento Seguro 
				<img src="<?php echo $pResUrl; ?>images/secureo.jpg"></li>
			</li>
		</ul>
		<dl class="premi">
			<dt> Prêmios </dt>
			<dd><img src="<?php echo $pResUrl; ?>images/product.jpg"></dd>
		</dl>
	</div>
	<!-- review -->
	<div class="review">
    <div class="wrapper">
      <div class="media_rev">
        <h3>Opinião da Mídia</h3>
        <dl>
          <dt>
            <img src="<?php echo $pResUrl; ?>images/betanews.jpg" alt="">
          </dt>
          <dd>
            "IObit Malware Fighter PRO é um completo pacote de segurança. Afasta spyware, Trojan e todos os outros tipos de ameaças. Há também a Guarda de Inicialização que impede processos maliciosos de iniciar com o Windows, Guarda de Navegador que impede outros softwares de realizarem alterações em seu navegador de web, Guarda de Arquivo que impede arquivos desconhecidos ao serem abertos de causarem danos, Guarda de USB, Guarda de Processos e mais."<span> - betanews.com</span>
          </dd>
        </dl>
      </div>
      <div class="user_rev" id="user-review">
        <div class="content">
          <h3>Opinião de Usuário</h3>
          <dl class="show">
            <dd>
              <h4>
                “Não tivemos mais problemas desde que começamos a usar os seus produtos”
              </h4>
            </dd>
            <dd>
              “Costumávamos a ter uma dúzia de programas diferentes para manter as nossas máquinas em funcionamento e manter os invasores fora. Isso nos tomava várias horas toda a semana para manter a segurança e performance. Agora, com IObit Malware Fighter Pro e Advanced System Care PRO, tudo está no lugar, e precisamos somente de alguns minutos durante a semana para realizar o mesmo trabalho com muita mais confiança. Não tivemos mais problemas desde que começamos a usar os seus produtos.”
            </dd>
          </dl>
          <dl class="hidden">
            <dd>
              <h4>
                "Eu também tinha outros programas instalados para este fim, mas IMF sempre encontra os problemas primeiro e os bloqueia."
              </h4>
            </dd>
            <dd>
              "Alguns anos atrás, alguém chamou minha atenção para IObit Malware Fighter. Primeiramente fui cético. Mas após instalá-lo, o software se tornou o meu programa favorito anti-malware. É muito fácil de usar. Ao longo dos anos ele já detectou e removeu várias ameaças. Juntamente com os outros programas de IObit, como por exemplo ASC, eu tenho uma boa proteção de PC. Agora eu recomendo estes programas para todos os meus amigos e familiares ".
            </dd>
          </dl>
        </div>
        <ul class="users">
          <li class="current">
            <img src="<?php echo $pResUrl; ?>images/bob_bassett.jpg" alt="">
            Bob Bassett
          </li>
          <li class="">
            <img src="<?php echo $pResUrl; ?>images/peter_stoffers.jpg" alt="">
            Peter Stoffers
          </li>
        </ul>
      </div>
    </div>
  </div>
	<!-- end review -->
	<dl class="annotation wrapper">
		<dt>Observe:</dt>
		<dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
		<dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
		<dd>3*.Todos os brindes se referem a um 1 ano de assinatura/ 1 PC.</dd>
	</dl>

<!--end container-->

<p class="footer">Copyright © 2005 - 2016 IObit. Todos os Direitos Reservados</p>

<!--floatlayer-->
<div class="floatlayer" id="floatlayer">
	<div class="wrapper">
	<dl class="left">
		<dt> <h2>Promoção Relâmpago do IMF 4 PRO, Desconto de até <strong>85%</strong></h2></dt>
		<dd><span class="packs"><?php echo $packsNum; ?></span> Pacotes Restantes Hoje!</dd>
	</dl>
		<dl class="right">
			<dt><a href="http://www.iobit.com/buy.php?product=pt-imf43pcpf&ref=<?php echo $ref2;?>&refs=pt_purchase_imf&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'imfbuy', 'buy', 'affptimf2016newyear')" class="flbuybtn buybtn">Ative Agora</a></dt>
			<dd data-url="http://www.iobit.com/buy.php?product=pt-imf41pcupgrade&ref=<?php echo $ref1;?>&refs=pt_purchase_imf&aff=<?php echo $_GET['aff']; ?>"><span></span><font>1 PC</font><strong>R$52,99</strong></dd>
			<dd class="currt" data-url="http://www.iobit.com/buy.php?product=pt-imf43pcpf&ref=<?php echo $ref2;?>&refs=pt_purchase_imf&aff=<?php echo $_GET['aff']; ?>"><span></span><font>3 PC + PF</font><strong>R$74,99</strong></dd>
		</dl>
	</div>
</div>
<!--end floatlayer-->

<script>
$("#user-review .users li").mouseover(function(event) {
	var num = $(this).index();
	$("#user-review .users li").each(function(index, el) {
		$(this).removeClass('current');
	});
	$(this).addClass('current');
	$("#user-review dl").each(function(index, el) {
		$(this).removeClass('show').addClass('hidden')
	});
	$("#user-review dl").eq(num).removeClass('hidden').addClass('show');
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
