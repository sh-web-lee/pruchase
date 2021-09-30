<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl.'include/common.inc.php';
if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'enimfar' . $date;
	if (!isset($_COOKIE[$c_name])) {
		$packsNum = 55;
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			setcookie($c_name, 3, time() + 3600 * 24 * 2);
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Economize 75% para Proteção Online Completa - IObit Malware Fighter 6 Oferta Especial de Lançamento | IObit</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<!-- banner -->
	<div class="banner">
		<div class="wrapper">
			<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<h1>IObit Malware Fighter 6 - Novo Lançamento Especial</h1>
			<h2>Proteção Online Completa para Você e sua Família </h2>
			<div class="left-img">
				<img src="<?php echo getStaticUrl('images/imf-box.png')?>" alt="">
			</div>
			<div class="right-message">
				<div class="box">
					<dl class="message">
						<dt>
							<h3>Apenas 
								<div class="countdown">
				          <div class="scroll-tick" ><span>0</span></div>
				          <div class="scroll-tick" ><span>0</span></div>
				        </div>
	      				Pacotes de Segurança Restantes!
	      			</h3>
							<span>Proteção para um Ano Inteiro para 3 PCs</span> <del>R$ 159,90</del>
						</dt>
						<dd>
							<span><i></i> Protected Folder</span> <del>R$ 99,99</del> <em>GRÁTIS</em>
						</dd>
						<dd>
							<span><i></i> AMC Security PRO </span> <del>R$ 63,99</del> <em>GRÁTIS</em>
						</dd>
					</dl>
					<dl class="price">
						<dt>
							 <b>Apenas</b> <strong>R$69,99</strong> <del>R$323,88</del>
						</dt>
						<dd><a href="https://www.iobit.com/buy.php?product=pt-imf63pcpfamc6999&ref=pt_imfcg&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard-pt');" class="buybtn"><i></i> Ativar Agora</a></dd>
					</dl>
				</div>
				<img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" class="payment">
			</div>
		</div>
	</div> 
	<!--end banner-->
	<!--cruces-->
	<div class="cruces">
		<div class="wrapper clearfix">
			<h2>Coisas que Você Deve Saber</h2>
			<ul>
				<li>
					<h3>Segurança da WebCam</h3>
					<p>A câmera de seu computador não é tão segura quanto parece. Muitos programas podem tomar controle de uma câmera conectada a internet em minutos. Webcams sem proteção estão expostas a serem hackeadas.</p>
				</li>
				<li>
					<h3>Você pode estar sob vigilância</h3>
					<p>Ao ter sua webcam hackeada, tudo que você faz na frente da sua webcam será visto por estranhos. Sua vida pode ser compartilhada online e sua privacidade exposta na internet. </p>
				</li>
				<li class="last">
					<h3>Como se prevenir</h3>
					<p>Escolha um programa confiável que possa proteger sua webcam.</p>
				</li>
			</ul>
		</div>
	</div>
	<!--end cruces-->
	<!--db message-->
	<div class="db-message wrapper">
		<h2>A Proteção Superpoderosa que a sua Webcam Precisa</h2>
		<p>A Guarda de Câmera no IObit Malware Fighter 6 PRO irá informá-lo imediatamente assim que qualquer programa não autorizado tente <br>acessar sua câmera secretamente e espiá-lo.</p>
		<div class="message-box">
			<dl class="list01">
				<dt>Bloqueia Acesso Não Autorizado</dt>
				<dd>Se qualquer programa não autorizado tentar acessar sua webcam, a Guarda de Câmera irá detectar e mantê-lo informado para prevenir vazamento da sua privacidade.</dd>
			</dl>
			<dl class="list02">
				<dt>Proteção Total</dt>
				<dd>Para garantir sua proteção total, a Guarda de Câmera irá confirmar toda vez que um programa tentar acessar sua webcam, a não ser que você clique “lembrar” para um programa que você confia.</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
		</div>
		<dl class="price">
			<dt>
				 <b>Apenas</b> <strong>R$69,99</strong> <del>R$323,88</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=pt-imf63pcpfamc6999&ref=pt_imfcg&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard-pt');" class="buybtn"><i></i> Ativar Agora</a></dd>
			<dd class="last"><i></i> Garantia de 100% de Reembolso de 60 Dias</dd>
		</dl>
	</div>
	<!--end db message-->
	<!--feature-->
	<div class="feature">
		<div class="wrapper">
			<h2>Outras Proteções que Você Obtém Apenas com PRO</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons01.png')?>" alt=""></dt>
				<dd><h3>Motor Bitdefender</h3></dd>
				<dd>Oferece detecção total de vírus com o avançado motor antivírus da Bitdefender.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons02.png')?>" alt=""></dt>
				<dd><h3>Cofre</h3></dd>
				<dd>Protege suas pastas importantes contra acesso não-autorizado e as ameaças mais recentes.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons03.png')?>" alt=""></dt>
				<dd><h3>Motor anti-ransomware</h3></dd>
				<dd>Protege seus arquivos e impede de forma inteligente a ativa que qualquer Ransomware tente tomar controle do seu PC.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/icons04.png')?>" alt=""></dt>
				<dd><h3>Auto Atualização</h3></dd>
				<dd>Atualiza automaticamente para a última versão.</dd>
			</dl>
		</div>
	</div>
	<!--end feature-->
	<!--gift-message-->
	<div class="gift-message">
		<div class="wrapper">
			<h2>75% de Desconto ao Ativar IObit Malware Fighter PRO Hoje,</h2>
			<h3>E Tenha Também 2 Ferramentas Extras de Proteção (no valor de R$163,98) GRÁTIS</h3>
			<dl>
				<dt>
					<img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>Protected Folder</strong> <del> R$ 99,99</del> (1 ano / 1 PC)
				</dd>
				<dd class="last">Protege seus Arquivos Importantes contra <br>Vazamento de Privacidade.</dd>
			</dl>
			<dl class="right">
				<dt>
					<img src="<?php echo getStaticUrl('images/amc-box.png')?>" alt="">
				</dt>
				<dd>
					<strong>AMC Security PRO</strong> <del>R$ 63,99</del> (1 ano / 1 dispositivo)
				</dd>
				<dd class="last">Mantém seu Android Rápido, Seguro e Livre de Vírus!</dd>
			</dl>
		</div>
	</div>
	<!--end gift-message-->
	<div class="between-buy">
		<dl class="price wrapper">
			<dt>
				 <b>Apenas </b> <strong>R$69,99</strong> <del>R$323,88</del>
			</dt>
			<dd><a href="https://www.iobit.com/buy.php?product=pt-imf63pcpfamc6999&ref=pt_imfcg&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imfbuy', 'buy', 'imfpurchase-cameraguard-pt');" class="buybtn"><i></i> Ativar Agora</a></dd>
			<dd class="last"><i></i> Garantia de 100% de Reembolso de 60 Dias</dd>
		</dl>
	</div>
	<div class="review wrapper clearfix">
		<h2>Veja o que outros usuários e a mídia dizem sobre esta nova versão</h2>
		<dl class="gelu-batir">
			<dt>
				<img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt="">
			</dt>
			<dd>
				<strong>Gelu Batir</strong>
			</dd>
			<dd>Aqueles que estão procurando por um bom antivírus e anti-malware a um preço acessível não precisam ir além do IObit Malware Fighter. Eu recomendo que eles esqueçam do resto e escolha o melhor, que é o IObit Malware Fighter.</dd>
		</dl>
		<dl class="software">
			<dt>
				<img src="<?php echo getStaticUrl('images/software.png')?>" alt="">
			</dt>
			<dd>
				<strong>Software.Informer</strong>
			</dd>
			<dd>O programa usa dois motores, o motor anti-malware da IObit e o antivírus da Bitdefender e parece eficiente contra malware que não podem ser detectados por outras ferramentas semelhantes, de maneira que pode rodar junto com outro programa antivírus padrão.</dd>
		</dl>
		<dl class="david-cassidy">
			<dt>
				<img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt="">
			</dt>
			<dd>
				<strong>David Cassidy</strong>
			</dd>
			<dd>Eu estou muito satisfeito com o produto de vocês, o IObit Malware Fighter. Toda operação é clara, segura e útil para proteger meu laptop. A verificação do programa também não afeta o desempenho da minha máquina e por isso recomendei este produto para dois amigos meus.</dd>
		</dl>
	</div>
	<!--footer-->
	<div class="footer">
		<div class="award wrapper">
			<h2>Prêmios Mundiais</h2>
			<p>Com a confiança e prêmios dos melhores veículos de mídia nos últimos 10 anos, você pode ter a certeza que obterá a melhor proteção para o seu PC</p>
			<ul class="clearfix">
				<li class="first">
					<a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pc-sm.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://download.cnet.com/IObit-Malware-Fighter/3000-8022_4-10967594.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.majorgeeks.com/files/details/iobit_smartdefrag.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/major-geeks.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="https://www.pcworld.com/article/2304854/iobit-advanced-system-care-7-review-comprehensive-utility-set-high-profile-interface.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/pcworld.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.chip.de/downloads/IObit-Uninstaller_43121217.html?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/chip.png')?>" alt="">
					</a>
				</li>
				<li>
					<a href="http://www.softpedia.com/get/System/System-Miscellaneous/IObit-Driver-Booster.shtml?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt="">
					</a>
				</li>
				<li class="last">
					<a href="http://driver-booster.updatestar.com/?ref=dbindex" target="_blank">
						<img src="<?php echo getStaticUrl('images/updatestar.png')?>" alt="">
					</a>
				</li>
			</ul>
		</div>
		<dl class="note wrapper">
			<dt>Observe:</dt>
			<dd>1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.</dd>
		</dl>
		<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
		<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
	</div>
</body>
</html>