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
	<title>Adquira o novo IObit Uninstaller PRO por R$0</title>
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
					IObit Uninstaller 10
				</div>
			</div>
			<div class="clearfix">
				<div class="left-img">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="iu-box" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon01.png')?>" alt="" class="iu-icon01" data-name="default">
					<img src="<?php echo getStaticUrl('images/banner-icon02.png')?>" alt="" class="iu-icon02" data-name="default">
				</div>
				<div class="right fr">
					<h1 data-name="default">Bem-vindo a Nossa Pr??-venda</h1>
					<h2 data-name="default">R$0 para obter o melhor desinstalador do mercado</h2>
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
						<strong>R$0 <sup>*</sup></strong>
						<a class="buybtn"
						   href="https://www.iobit.com/buy.php?product=pt-iu10preorder&ref=pt-iu10preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_iu"
						   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu10preorderofficial-pt');">
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
			<h2>Desinstala Completamente o que Voc?? Quiser</h2>
			<dl class="first" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt=""></dt>
				<dd>
					<h3>Plugins</h3>
					<p>Remove Plugins In??teis,<br> de An??ncios e Maliciosos</p>
				</dd>
			</dl>
			<dl class="two" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt=""></dt>
				<dd>
					<h3>Programas</h3>
					<p>Desinstala Programas In??teis,<br> Teimosos e em Bundle sem<br> deixar Rastros.</p>
				</dd>
			</dl>
			<dl class="three" data-name="default">
				<dt><img src="<?php echo getStaticUrl('images/intro-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>Apps do Windows</h3>
					<p>Desinstala Apps Padr??es do<br> Windows que Voc?? Nunca Usa</p>
				</dd>
			</dl>
			<img src="<?php echo getStaticUrl('images/intro-img.png')?>" alt="" class="img-box" data-name="default">
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature" data-name="animation">
		<div class="wrapper">
			<h2>Desinstala com Efici??ncia e Seguran??a</h2>
			 <div class="img-box" data-name="default">
			 	<div class="list01">
			 		<span class="button">Desinstalar</span>
			 		<span class="hand"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt="">
			 	</div>
			 	<div class="list02">
			 		<span class="circle"></span>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-01.png')?>" alt="" class="top">
			 		<p class="name">Programa antiv??rus</p>
			 		<p class="mb"><span>00</span>.<span class="span">00</span>MB</p>
			 		<img src="<?php echo getStaticUrl('images/feature-list02-02.png')?>" alt="">
			 		<p class="last">Desinstalando programa antiv??rus</p>
			 	</div>
			 	<div class="list03">
			 		<img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt="">
			 		<div class="bar">
			 			<span></span>
			 		</div>
			 	</div>
			 	<div class="list04">
			 		<img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt="">
			 		<p>Voc?? desinstalou <strong>0</strong> programa com sucesso com os detalhes abaixo:</p>
			 		<ul>
			 			<li>Entradas de registro deletadas: <strong>0</strong></li>
			 			<li class="right">Arquivos deletados: <span><strong>0</strong>,<strong>0</strong></span>MB</li>
			 			<li>Tarefas agendadas deletadas: <strong>0</strong></li>
			 			<li class="right">Servi??os do sistema deletados: <strong>0</strong></li>
			 			<li>Itens logados deletados: <strong class="last">0</strong></li>
			 		</ul>
			 	</div>
			</div>
			<div class="message">
			 	<dl data-name="default" class="one">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon01.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Grava Altera????es</h3>
			 			<p>Grava mudan??as feitas no sistema por programas instalados para garantir uma desinstala????o completa.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="two">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon02.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Desinstala????o Poderosa</h3>
			 			<p>1-clique para desinstalar m??ltiplos programas indesejados de uma s?? vez, incluindo programas antiv??rus que se recusam a serem removidos.</p>
			 		</dd>
			 	</dl>
			 	<dl data-name="default" class="three">
			 		<dt><img src="<?php echo getStaticUrl('images/feature-icon03.png')?>" alt=""></dt>
			 		<dd>
			 			<h3>Limpa Sobras de Programas</h3>
			 			<p>Limpa sobras de programas desinstalados automaticamente, at?? aqueles deixados por desinstala????es feitas por outros desinstaladores.</p>
			 		</dd>
			 	</dl>
			 </div>
		</div>
	</div>
	<!-- feature end -->
	<div class="feature-02" data-name="animation">
		<div class="wrapper">
			<h2>Outras Fun????es que Voc?? Pode Desfrutar</h2>
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
		 			<h3>Bloqueia Notifica????es</h3>
		 			<p>N??o seja interrompido por notifica????es de diferentes sites quando navegar online.</p>
		 		</dd>
			</dl>
			<dl data-name="default" class="three">
				<dt><img src="<?php echo getStaticUrl('images/feature-icon06.png')?>" alt=""></dt>
		 		<dd>
		 			<h3>Atualiza Automaticamente</h3>
		 			<p>Atualiza automaticamente para a ??ltima vers??o do IObit Uninstaller Pro.</p>
		 		</dd>
			</dl>
		</div>
	</div>
	<!-- review start -->
	<div class="review">
		<div class="wrapper">
			<h2>Voc?? Pode Confiar</h2>
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
					<p>Avalia????o dos Usu??rios</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/review-icon03.png')?>" alt=""></dt>
				<dd>
					<h3>1000+</h3>
					<p>Recomenda????es da M??dia</p>
				</dd>
			</dl>
			<div class="review-box">
				<div class="box">
					<h3>Opini??o do Usu??rio</h3>
					<p>
						"IObit Uninstaller PRO ?? apenas um dos cinco produtos de "manuten????o" da IObit que eu investi para meu PC. O programa ?? ??timo para achar as sobras de bits e bytes escondidos no seu PC, tomando espa??o do disco e afetando o registro. Se eu usasse o desinstalador padr??o do programa que eu queria desinstalar, funcionava, mas ent??o o Uninstaller Pro aparecia e mostrava 35 arquivos que precisavam ser limpos. Tudo que eu preciso ?? clicar em "OK". Recomendo e inclusive adquiri uma licen??a para 3 PCs. O servi??o de atendimento ao cliente ?? atencioso e eficiente."
					</p>
				</div>
				<div class="box">
					<h3>Opini??o do Usu??rio</h3>
					<p>
						"IObit Uninstaller ?? provavelmente o melhor aplicativo para removar programas desnecess??rios do seu computador. Diferentemente do desinstalador padr??o do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e r??pido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
					</p>
				</div>
				<div class="box active">
					<h3>Opini??o da M??dia</h3>
					<p>
						"Essa ferramenta informativa e de f??cil uso limpa, configura e otimiza seu PC e usu??rios podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstala????o e permite que usu??rios desinstalem em lote. Oferece aos usu??rios a op????o de fazer uma "Verifica????o Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstala????o. O desempenho por si s?? j?? faz essa ferramenta valiosa de se ter." -MakeUseOf
					</p>
				</div>
				<div class="box">
					<h3>Opini??o do Usu??rio</h3>
					<p>
						"IObit Uninstaller ?? um dos melhores programas para se ter no seu computador, pois ?? f??cil de operar e limpa profundamente com rapidez. A limpeza de plug-ins tamb??m ?? extremamente ??til. Obrigado por cuidar do computador meu e da minha fam??lia."
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
					<span><img src="<?php echo getStaticUrl('images/ada-gortler.png')?>" alt="??da G??rtler"></span>
					<p>??da G??rtler</p>
				</li>
			</ul>
		</div>
	</div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>Pr??mios</h2>
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
					*.No fim do per??odo de teste de 30 dias, o seu cart??o de cr??dito ou conta do Paypal ser?? cobrado R$55,99 automaticamente. Este desconto de 44% no pre??o original de R$ 99,99 ?? um b??nus apenas para pr??-venda!
				</dd>
				<dd>
					*.Se voc?? n??o est?? satisfeito, voc?? pode cancelar o pedido que voc?? fez dentro de 30 dias sem qualquer custo.
				</dd>
			</dl>
			<p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-icon.png')?>" alt=""/>
				IObit Uninstaller 10
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