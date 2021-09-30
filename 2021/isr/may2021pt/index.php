<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
if (!empty($_GET['AFF'])) $_GET['aff'] = $_GET['AFF'];

if (!empty($_GET['action']) && $_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'may2021pt' . $date;
	if (empty($_COOKIE[$c_name])) {
		$packsNum = rand(50, 100);
		setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 3) {
			$packsNum = 3;
		} else {
			$packsNum = $_COOKIE[$c_name];
			$packsNum -- ;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(['packsNum' => $packsNum]);
	exit();
}
$refStr = empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
$refStr .= empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['insur']) ? '' : '-'.$_GET['insur'];
if(!empty($_GET['ver'])){
	$ver = explode('.',$_GET['ver']);
	$refStr .= '-'.$ver[0].$ver[1];
}
$refStr .= empty($_GET['instd']) ? '' : '-'.$_GET['instd'];
$refStr .= empty($_GET['finstd']) ? '' : '-'.$_GET['finstd'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="robots" content="nofollow">
  <meta name="robots" content="noindex">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira iFun Screen Recorder com até 60% de desconto. Oferta Especial de Lançamento da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Spartan:wght@400;500;600;700;800&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/swiper.min.css')?>">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
	<div class="banner-wrap">
		<div class="banner">
			<a class="logo" href="https://www.iobit.com/pt/index.php"></a>
			<div class="banner-title">
				<img src="<?php echo getStaticUrl('images/title.png')?>"/>
				<p>iFun Screen Recorder PRO: Gravação de Tela Profissional para Não Profissionais</p>
			</div>
			<div class="banner-cont">
				<div class="box"></div>
				<div class="heart label70"></div>
				<div class="banner-option">
					<p class="banner-count">Só <span class="active countNum">50<i></i></span>pacotes restantes</p>
					<ul>
						<li class="custom-radio">
							<span class="like"></span>
							<label>1 PC / Mês<i>-15%</i></label>
							<div class="sel-list">
								<p>Licença de 1 PC por 1 Mês</p>
								<p>Remove a Marca d'Água e Adiciona Sua Própria Marca d’Água</p>
								<p>Grava em Alta Definição com Qualidade Blu-Ray</p>
								<p>Recomendado para Vídeo Aulas, Youtubers e Gamers.</p>
							</div>
						</li>
						<li class="custom-radio active">
							<label>1 PC / 1 Ano<i>-60%</i></label>
							<div class="sel-list">
								<p>Licença de 1 PC por 1 Ano</p>
								<p>Remove a Marca d'Água e Adiciona Sua Própria Marca d’Água</p>
								<p>Grava em Alta Definição com Qualidade Blu-Ray</p>
								<p>Recomendado para Vídeo Aulas, Youtubers e Gamers.</p>
							</div>
						</li>
					</ul>
					<dl class="price">
						<dd>
							<div class="now">
								<span></span>
								<h3>$4<i>99</i></h3>
							</div>
							<div class="old">
								<span>$</span>
								<h3>5<i>99</i></h3>
							</div>
							<div class="getItNow">
								<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1mespcpurchase2103-pt')" href="https://www.iobit.com/buy.php?product=pt-isr11m1pc2299&ref=pt_isr11m1pc2299purchase2105<?= $refStr; ?>&refs=pt_purchase_isr">Comprar Agora</a>
							</div>
						</dd>
						<dd style="display: block;">
							<div class="now">
								<span></span>
								<h3>$15<i>99</i></h3>
							</div>
							<div class="old">
								<span>$</span>
								<h3>42<i>99</i></h3>
							</div>
							<div class="getItNow">
								<a class="button"onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2105-pt')" href="https://www.iobit.com/buy.php?product=pt-isr11pc8999&ref=pt_isr11pc8999purchase2105<?= $refStr; ?>&refs=pt_purchase_isr">Comprar Agora</a>
							</div>
						</dd>
					</dl>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen2">
		<div class="content" style="overflow: hidden;">
			<h3 class="screen-title" style="text-align: left; color: #484b53; margin-bottom: 80px; "><span style="font-size: 24px; ">iFun Screen Recorder PRO </span><br />
O seu video do jeito que você imaginou</h3>
			<div class="screen2-cont" >
				<div class="cont-media fl">
					<img src="<?php echo getStaticUrl('images/addMark.gif')?>" />
				</div>
				<div class="cont-text cont1 fr">
					<h3><i class="seal"></i>Marca d’Água Personalizada</h3>
					<span>Apenas para a versão PRO</span>
					<p>Remova a marca d’água padrão e adicione sua própria marca d’água personalizada com o iFun Screen Recorder PRO (durma tranquilo sabendo que ninguém vai conseguir piratear ou ganhar dinheiro com o seu conteúdo.)</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fr">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/timeout.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont2 fl">
					<h3><i class="date"></i>Gravação Agendada</h3>
					<span>Apenas para a versão PRO</span>
					<p>Permite que você crie tarefas agendadas definindo o tempo específico para ativar e parar a gravação da tela e da webcam.</p>
					<p>Você pode criar várias tarefas de gravação automática. Nesse caso, são gravadas palestras, aulas e transmissões ao vivo, sem a necessidade de ficar na frente do computador.</p>
				</div>
			</div>
			<div class="screen2-cont">
				<div class="cont-media fl">
					<div class="cont-media fl">
						<img src="<?php echo getStaticUrl('images/audio.gif')?>" width="480" height="280" />
					</div>
				</div>
				<div class="cont-text cont3 fr">
					<h3><i class="audio"></i>Separa o Áudio do Vídeo</h3>
					<span>Apenas para a versão PRO</span>
					<p>iFun Screen Recorder PRO ajuda você nos casos em que você está interessado apenas na música de um vídeo no YouTube ou deseja simplesmente gravar o áudio do seu PC.</p>
					<p>Suporta extrair áudio de vídeos após a gravação. Você pode separar o áudio dos vídeos e salvá-lo individualmente.</p>
				</div>
			</div>
			<div class="screen2-cont" style="margin-bottom: 20px;">
				<div class="cont-media fr">
					<video src="<?php echo getStaticUrl('images/video.mp4')?>" preload="" autobuffer="" muted="" loop="" autoplay="autoplay"></video>
					<!-- <video id="video1" src="https://player.vimeo.com/external/306458155.hd.mp4?s=02743381d301082afe5b11ace4b44a6867e2a7d3&amp;profile_id=174" poster="https://filmora.wondershare.com/filmora-2018/images/page/pro-feat/vimeo-746207623_640.jpg" preload="" autobuffer="" muted="" loop=""></video> -->
				</div>
				<div class="cont-text cont4 fl">
					<h3><i class="rec"></i>Gravação de Alta Definição Sem Atrasos *</h3>
					<span>Apenas para a versão PRO</span>
					<p>A técnica de aceleração de GPU avançada permite gravar jogos sem afetar o FPS e ter vídeos mais nítidos com alta definição de até 4K.</p>
					<p>Para os jogadores, o iFun Screen Recoder é o melhor gravador para fazer partidas ou guias de jogos e compartilhá-los no Youtube.</p>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper screen3">
		<div class="content">
			<h3 class="screen-title">A comparação entre a versão FREE e PRO</h3>
			<div class="versionTable">
				<div class="versionDesc">
					<ul><li><i class="descIcon time"></i>Tempo de Gravação Ilimitado</li></ul>
					<ul><li><i class="descIcon cut"></i>Edição Personalizada Após Gravação</li></ul>
					<ul><li><i class="descIcon remove"></i>Remove a Marca d’Água Padrão</li></ul>
					<ul><li><i class="descIcon seal"></i>Adiciona Marca d’Água Personalizada</li></ul>
					<ul><li><i class="descIcon date"></i>Criar tarefas de gravação agendadas</li></ul>
					<ul><li><i class="descIcon audio"></i>Extraia áudio e salve individualmente</li></ul>
					<ul><li><i class="descIcon game"></i>Gravação de jogo mais fluída com otimização de até <span>30%</span> no FPS*<i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon done"></i>Gravação com maior qualidade e sem lag com aceleração de hardware de até <span>50%</span><i class="tableIcon up"></i></li></ul>
					<ul><li><i class="descIcon hd"></i>Alta Qualidade de Vídeo*<i class="tableIcon up"></i> <p style="font-size: 12px;">(Qualidade de imagem até <span>30%</span> maior)</p></li></ul>
					<ul><li><i class="descIcon update"></i>Atualização Automática</li></ul>
					<ul><li><i class="descIcon spt24"></i>Suporte Técnico Grátis 24/7</li></ul>
				</div>
				<div class="versionFree">
					<div class="topTitle">Versão FREE</div>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-yes"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
					<ul> <li><i class="tableIcon gray-no"></i></li> </ul>
				</div>
				<div class="versionPro">
					<div class="topTitle">Versão PRO</div>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<ul><li><i class="tableIcon red-yes"></i></li></ul>
					<div class="buyPro">
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option3" value="1">
							<label for="option3">1 Mês</label>
						</div>
						<div class="tableOptions">
							<input type="radio" name="tableOps" id="option4" value="2" checked="">
							<label for="option4">1 ano</label>
						</div>
						<div class="optionsLink">
							<a class="button" id="planA" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1mespcpurchase2103-pt')" href="https://www.iobit.com/buy.php?product=pt-isr11m1pc2299&ref=pt_isr11m1pc2299purchase2105<?= $refStr; ?>&refs=pt_purchase_isr">Comprar Agora-$4.99</a>
							<a class="button" id="planB" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2105-pt')" href="https://www.iobit.com/buy.php?product=pt-isr11pc8999&ref=pt_isr11pc8999purchase2105<?= $refStr; ?>&refs=pt_purchase_isr" style="display: block;">Comprar Agora-$15.99</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="wrapper screen4" >
		<div class="content">
			<h3 class="screen-title">Recomendado pela Mídia Especializada</h3>
			<div class="media">
				<p>Reconhecida e premiada pelos melhores veículos de tecnologia do mundo da informática, a IObit é a escolha certa para quem só aceita o melhor.</p>
				<img src="<?php echo getStaticUrl('images/media.png')?>" />
			</div>
			<h3 class="screen-title" style="margin-top: 160px;">Depoimento de usuários</h3>
			<div class="review-wrap">
				<!-- Swiper -->
				<div class="user-head">
					<div class="swiper-container">
					    <div class="swiper-wrapper">
					        <div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
							</div>
							<div class="swiper-slide">
								<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
							</div>
					    </div>
					</div>
					<div class="swiper-button-next"></div>
					<div class="swiper-button-prev"></div>
				</div>
				<div class="user-avator">
					<ul>
						<li>
							Ótimo, até agora tudo bem. iFun Screen Recorder é realmente uma ferramenta completa e fácil de usar. Não sabia como gravar tela no Windows, mas se torna fácil com esse software. Com o ISR, posso fazer capturas de tela durante a gravação em alta definição e adicionar legendas para o vídeo após a gravação. Então eu carrego no meu Instagram e chamo atenção massiva. Este poderoso gravador de tela ajudou a impulsionar meu negócio. A propósito, é totalmente grátis.
							<p>—Elsie Weston</p>
							<img src="<?php echo getStaticUrl('images/user/user1.png')?>" />
						</li>
						<li>
							Eu encontrei este gravador de tela grátis e me tornei um fã dele por suas funções de edição simples. Porque eu gosto de gravar o processo de operação para ajudar as pessoas a resolverem problemas do computador, e este programa de gravação me permite gravar com áudio para que eu possa enviar o vídeo editado diretamente para o YouTube após a gravação. Ele combina gravação e edição, o que é muito conveniente para youtubers como eu que desejam compartilhar vídeos tutoriais!
							<p>—Enrico Valencia</p>
							<img src="<?php echo getStaticUrl('images/user/user2.png')?>" />
						</li>
						<li>
							Como secretária, preciso usar software de gravação de tela muito. Para mim, foi difícil encontrar um gravador de tela grátis ideal, mas o iFun Screen Recorder é uma ferramenta perfeita para a gravação de videoconferência e me ajuda muito! Eu poderia gravar a tela em alta definição com ele e converter o vídeo em diferentes formatos. Eu recomendo altamente o iFun Screen Recorder!
							<p>—Marielle Irvine</p>
							<img src="<?php echo getStaticUrl('images/user/user3.png')?>" />
						</li>
						<li>
							Olá! Seu fantástico gravador de tela grátis me surpreende. Posso registrar todos esses momentos preciosos e maravilhosos com o iFun Screen Recorder, especialmente para vídeos ao vivo. Os vídeos que gravo com o iFun Screen Recorder são de qualidade extremamente alta. Posso salvá-los e compartilhá-los com meus amigos. No início, não tinha certeza sobre o programa, mas os resultados são incríveis. É brilhante!
							<p>—Robbins Hilton</p>
							<img src="<?php echo getStaticUrl('images/user/user4.png')?>" />
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper screen5">
		<div class="content" >
			<h3 class="screen-title">Por que IObit</h3>
			<p style="font-size: 22px; text-align: center; margin-top: 10px;">Os Números Nunca Mentem</p>
			<div class="circle-wrap">
				<div class="circle">
					<h3>500M</h3>
					Downloads
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>1.5M</h3>
					Visitas <br/>de Página
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>200K</h3>
					Usuários Ativos Diariamente
				</div>
				<div class="plus"></div>
				<div class="circle">
					<h3>220</h3>
					Países
				</div>
				<div class="plus equal"></div>
				<div class="circle" style="padding-top: 30px;">
					<h3 style="color: #373737;">IObit</h3>
					<p style="color: #cd3540; font-size: 16px; margin-top: -10px; margin-bottom: 3px;">17</p>
					Anos de Experiência
				</div>
			</div>
		</div>
	</div>
	<div class="wrapper" style="background-color: #F2F2F2; border-top: #cecece 1px solid;">
		<div class="content backMoney">
			<p ><img src="<?php echo getStaticUrl('images/foot-icon1.png')?>">Formas de Pagamento</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon2.png')?>">Pagamento Seguro</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon3.png')?>">Garantia de Reembolso</p>
			<p ><img src="<?php echo getStaticUrl('images/foot-icon4.png')?>">Entrega Imediata</p>
		</div>
	</div>
	<div class="footer">
		<div class="footer-note">
			<p>
				Observe:<br />
				1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.<br />
				2*.Informações podem variar com base em diferentes sistemas ou computadores.<br />
				3*.A oferta de 1 ano possui garantia de reembolso de 60 dias. Porém, a oferta de 1 mês naturalmente tem uma garantia de reembolso de 30 dias devido ao tempo da assinatura.
			</p>
			<p style="text-align: center; font-size: 14px; margin-top: 30px; font-weight: 500;">Copyright © 2005 - 2021 IObit. Todos os Direitos Reservados</p>
		</div>
	</div>
	<div class="float-footer">
		<div class="content planA" style="display: block;">
			<div class="box"></div>
			<div class="heart label45"></div>
			<div class="font-layer">
				<ul>
					<li class="">1 mês / 1 PC <span>-15%</span></li>
					<li class="active">1 ano / 1 PC <span>-60%</span></li>
				</ul>
			</div>
			<div class="footer-btn">
				<dl class="price">
					<dd>
						<div class="now">
							<span></span>
							<h3>$4<i>99</i></h3>
						</div>
						<div class="old">
							<span>$</span>
							<h3>5<i>99</i></h3>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr1mespcpurchase2103-pt')" href="https://www.iobit.com/buy.php?product=pt-isr11m1pc2299&ref=pt_isr11m1pc2299purchase2105<?= $refStr; ?>&refs=pt_purchase_isr">Comprar Agora</a>
					</dd>
					<dd style="display: block;">
						<div class="now">
							<span></span>
							<h3>$15<i>99</i></h3>
						</div>
						<div class="old">
							<span>$</span>
							<h3>42<i>99</i></h3>
						</div>
						<a class="button" onclick="ga('send', 'event', 'isrbuy', 'buy', 'isr11pcpurchase2105-pt')" href="https://www.iobit.com/buy.php?product=pt-isr11pc8999&ref=pt_isr11pc8999purchase2105<?= $refStr; ?>&refs=pt_purchase_isr">Comprar Agora</a>
					</dd>
				</dl>
				<p>Só resta <span class="countNum">50</span> pacotes!</p>
			</div>
		</div>
	</div>

<script>refStr = "<?= $refStr; ?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script src="<?php echo getStaticUrl('script/swiper.min.js')?>"></script>

 <script>
	   var swiper = new Swiper('.swiper-container', {
	        pagination: '.swiper-pagination',
	        slidesPerView: 3,
	        paginationClickable: true,
	        spaceBetween: 150,
			loop : true,
			nextButton: '.swiper-button-next',
			prevButton: '.swiper-button-prev',
			onSlideChangeEnd: function(swiper){
				$('.user-avator ul li').hide()
				$('.user-avator ul li').eq(swiper.realIndex).show()
			}
	    });
  </script>
</body>
</html>