<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

$viewNum=rand(116,198);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'ptiujune_p' . $date;
	$c_name_t='ptiujune_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(41,59);
		setcookie($c_name, $packsNum, time() + 3600 * 24);
		setcookie($c_name_t,$totalNum, time() + 3600 * 24);
	} else {
		if (intval($_COOKIE[$c_name]) <= 0) {
			$packsNum = 0;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['user'])?'':('-u'.$_GET['user']);
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Adquira o novo IObit Uninstaller PRO ao preço mais baixo</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css2?family=Lexend+Deca&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner" data-name="animation">
		<div class="wrapper">
			<div class="top">
				<a class="logo" href="https://www.iobit.com/de/index.php" target="_blank">
				  IObit
				</a>
				<div class="icon">
					<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
					IObit Uninstaller 11
				</div>
			</div>
			<div class="clearfix">
				<div class="left-img">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
				</div>
				<div class="right fr">
					<h1 data-name="default">Bem-vindo a Nossa Pré-venda</h1>
					<h2 data-name="default">Desconto Exclusivo para obter o melhor desinstalador</h2>
					<div class="number" data-name="default">
						<div id="reduce" class="reduceNum">
							<div class="listbox"><span class="list"><b>5</b></span></div>
							<div class="listbox"><span class="list"><b>0</b></span></div>
						</div>
						pacotes restantes
						<div class="bar">
							<span></span>
						</div>
					</div>
					<div class="price" data-name="default">
						<strong>R$ 52,99 <sup>*</sup></strong>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=pt-iu11preorder5299&ref=pt-iu11preorder<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu11preorder-pt');">
						  Adquirir Agora
						</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro" data-name="animation">
		<div class="wrapper ">
			<h2>Desinstala Completamente o que Você Quiser</h2>
			<dl class="first" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>Plugins</h3>
					<p>Remove Plugins Inúteis,<br> de Anúncios e Maliciosos</p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>Programas</h3>
					<p>Desinstala Programas Inúteis,<br> Teimosos e em Bundle sem<br> deixar Rastros.</p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>Apps do Windows</h3>
					<p>Desinstala Apps Padrões do<br> Windows que Você Nunca Usa</p>
				</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/intro-img.png')?>" alt="" class="img-box" data-name="default">
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature" data-name="animation">
		<div class="wrapper">
			<h2>Desinstala com Eficiência e Segurança</h2>
			 <div class="img-box" data-name="default">
			 	<div class="list01">
			 		<span class="button">Desinstalar</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Programa antivírus</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Desinstalando programa antivírus</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>Você desinstalou <strong>0</strong> programa com sucesso com os detalhes abaixo:</p>
			 		<ul>
			 			<li>Entradas de registro deletadas: <strong>0</strong></li>
			 			<li class="right">Arquivos deletados: <span><strong>0</strong>,<strong>0</strong></span>MB</li>
			 			<li>Tarefas agendadas deletadas: <strong>0</strong></li>
			 			<li class="right">Serviços do sistema deletados: <strong>0</strong></li>
			 			<li>Itens logados deletados: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			</div>
			<div class="message">
			 	<dl data-name="default" class="one">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Grava Alterações</h3>
			 			<p>Grava mudanças feitas no sistema por programas instalados para garantir uma desinstalação completa.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="two">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Desinstalação Poderosa</h3>
			 			<p>1-clique para desinstalar múltiplos programas indesejados de uma só vez, incluindo programas antivírus que se recusam a serem removidos.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="three">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Limpa Sobras de Programas</h3>
			 			<p>Limpa sobras de programas desinstalados automaticamente, até aqueles deixados por desinstalações feitas por outros desinstaladores.</p>
			 		</dd>
			 	</dl>
			 </div>
		</div>
	</div>
	<!-- feature end -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<h2>Outras Funções que Você Pode Desfrutar</h2>
			<dl data-name="default" class="one">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon04.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Atualizar Programas</h3>
		 			<p>Atualiza todos os programas desatualizados com 1-clique. </p>
		 		</dd>
			</dl>
			<dl class="center" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon05.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Bloqueia Notificações</h3>
		 			<p>Não seja interrompido por notificações de diferentes sites quando navegar online.</p>
		 		</dd>
			</dl>
			<dl data-name="default" class="three">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Atualiza Automaticamente</h3>
		 			<p>Atualiza automaticamente para a última versão do IObit Uninstaller Pro.</p>
		 		</dd>
			</dl>
		</div>
	</div>
	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Você Pode Confiar</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>50M+</h3>
					<p>Downloads</p>
				</dd>
			</dl>
			<dl class="center">
				<dt><img src="<?php echo getStaticUrl('images/review-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>4.8/5.0</h3>
					<p>Avaliação dos Usuários</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>Recomendações da Mídia</p>
				</dd>
			</dl>
			<div class="review-box">
				<div class="box">
					<h3>Opinião do Usuário</h3>
					<p>
						"IObit Uninstaller PRO é apenas um dos cinco produtos de "manutenção" da IObit que eu investi para meu PC. O programa é ótimo para achar as sobras de bits e bytes escondidos no seu PC, tomando espaço do disco e afetando o registro. Se eu usasse o desinstalador padrão do programa que eu queria desinstalar, funcionava, mas então o Uninstaller Pro aparecia e mostrava 35 arquivos que precisavam ser limpos. Tudo que eu preciso é clicar em "OK". Recomendo e inclusive adquiri uma licença para 3 PCs. O serviço de atendimento ao cliente é atencioso e eficiente."
					</p>
				</div>
				<div class="box">
					<h3>Opinião do Usuário</h3>
					<p>
						"IObit Uninstaller é provavelmente o melhor aplicativo para removar programas desnecessários do seu computador. Diferentemente do desinstalador padrão do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e rápido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
					</p>
				</div>
				<div class="box active">
					<h3>Opinião da Mídia</h3>
					<p>
						"Essa ferramenta informativa e de fácil uso limpa, configura e otimiza seu PC e usuários podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstalação e permite que usuários desinstalem em lote. Oferece aos usuários a opção de fazer uma "Verificação Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstalação. O desempenho por si só já faz essa ferramenta valiosa de se ter." -MakeUseOf
					</p>
				</div>
				<div class="box">
					<h3>Opinião do Usuário</h3>
					<p>
						"IObit Uninstaller é um dos melhores programas para se ter no seu computador, pois é fácil de operar e limpa profundamente com rapidez. A limpeza de plug-ins também é extremamente útil. Obrigado por cuidar do computador meu e da minha família."
					</p>
				</div>
			</div>
			<ul>
				<li>
					<span><img src="<?php echo getStaticUrl('images/joseph-yu.png')?>" alt="Joseph Yu"></span>
					<p>Joseph Yu</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"></span>
					<p>Sergey Erlich</p>
				</li>
				<li class="active">
					<span><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"></span>
					<p>MakeUseOf</p>
				</li>
				<li>
					<span><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="Áda Görtler"></span>
					<p>Áda Görtler</p>
				</li>
			</ul>
		</div>
	</div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>Prêmios</h2>
			<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt>Nota:</dt>
				<dd>
					*.Você pode obter a versão Pro com o preço mais baixo, este desconto de 48% no preço original de R$ 99,99 é um bônus apenas para pré-venda! <!-- E no fim do período de 30 dias, o seu cartão de crédito ou conta do Paypal será cobrado R$59,99 automaticamente.  -->
				</dd>
				<dd>
					*.Se você não está satisfeito, você pode cancelar o pedido que você fez dentro de 30 dias sem qualquer custo.
				</dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
				IObit Uninstaller 11
	  	</div>
  		<div class="number fl">
  			<div id="fReduce" class="reduceNum">
  				<div class="listbox"><span class="list"><b>5</b></span></div>
  				<div class="listbox"><span class="list"><b>0</b></span></div>
  			</div>
  			restantes agora
  		</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>