<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
	$date = $_GET['d'];
	$c_name = 'ptisuofficial_p' . $date;
	$c_name_t='ptisuofficial_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(68,78);
		setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
		setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
	} else {
		if (intval($_COOKIE[$c_name]) <= 0) {
			$packsNum = 0;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		} else {
			$packsNum = $_COOKIE[$c_name] - 1;
			setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
		}
	}
	echo json_encode(array('packsNum'=>$packsNum));
	exit();
}

$viewNum=rand(115,125);
if($_GET['action']=='getViewNum'){
	echo $viewNum;
	exit();
}

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Adquira IObit Software Updater 3 PRO com 75% de desconto na pré-venda</title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:600,700,800&display=swap" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank"></a>
			<div class="left-img"><img src="<?php echo getStaticUrl('images/pf-box.png')?>" alt=""></div>
			<div class="right-message">
				<h1>Bem-vindo para participar na nossa  <strong>PrÉ-VENDA </strong></h1>
					<div class="number">
						<h2>75% OFF</h2>
						 <img src="<?php echo getStaticUrl('images/hurry.png')?>" alt=""> Apenas  
						<div id="topNum" class="giftNum">
              <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>
		          <span class="nwrap">
		          	<strong>
		          		<b>1</b>
		          	</strong>
		          </span>

            </div>
            pacotes restantes. <div class="last"><strong class="viewNum"><?php echo $viewNum;?></strong> usuários estão visualizando</div>
					</div>
					<p class="price">
						 <strong>R$ <b>51</b>,99</strong> <del>R$ 199,98</del>
						<a href="https://www.iobit.com/buy.php?product=pt-isu33pcpf5199&ref=pt-isu3preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_isu" onclick="gga('send', 'event', 'isubuy', 'buy', 'isu3preorder-pt'); " class="buybtn">Comprar Agora</a>
					</p>
				</div>
		</div>
	</div>
	<!-- banner end -->


	<!-- intro start -->
	<div class="intro">
		<div class="wrapper clearfix">
			<h2>O AtuaIizador de Programas mais leve e completo para Windows</h2>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt=""></dt>
				<dd>
					<strong>Largo Banco de Programas</strong>
					<p>Suporta atualização ilimitada de centenas de <br> programas incluindo os comumente usados.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt=""></dt>
				<dd>
					<strong>Atualização Dentro do Programa</strong>
					<p>Atualiza facilmente programas desatualizados <br> dentro do próprio IObit Software Updater.   </p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt=""></dt>
				<dd>
					<strong>Auto Atualização</strong>
					<p>Baixa e instala automaticamente atualizações <br> para programas num tempo agendado.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt=""></dt>
				<dd>
					<strong>Fique Seguro</strong>
					<p>Atualiza programas para reparar vulnerabilidades de <br> segurança que podem ser usadas por hackers. </p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list05.png')?>" alt=""></dt>
				<dd>
					<strong>Atualização Limpa</strong>
					<p>Sem bundleware, barras de ferramentas ou instaladores <br> nas atualizações feitas pelo programa.</p>
				</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo getStaticUrl('images/list06.png')?>" alt=""></dt>
				<dd>
					<strong>Programas Recomendados</strong>
					<p>A maioria dos programas populares podem ser rapidamente baixados sem precisar visitar a página oficial.</p>
				</dd>
			</dl>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Perfeita Experiência de Usuário</h2>
			<ul class="message-list">
				<li class="list01 active"><i></i> <span> Deleta Instaladores Automaticamente</span></li>
				<li class="list02"><i></i> <span>Cria Automaticamente Pontos de Restauração do Sistema</span></li>
				<li class="list03"><i></i> <span>Opção de Ignorar Atualizações para Programas Específicos</span></li>
				<li class="list04"><i></i> <span>Lista de auto-atualização personalizável</span></li>
				<li class="list05"><i></i> Sem anúncios patrocinados </li>
			</ul>
			<div class="img-list">
				<div class="img-box">
					<ul class="box">
						<li data-num="0"><img src="<?php echo getStaticUrl('images/feature-list01.png')?>" alt=""/></li>
						<li data-num="1"><img src="<?php echo getStaticUrl('images/feature-list02.png')?>" alt=""/></li>
						<li data-num="2"><img src="<?php echo getStaticUrl('images/feature-list03.png')?>" alt=""/></li>
						<li data-num="3"><img src="<?php echo getStaticUrl('images/feature-list04.png')?>" alt=""/></li>
						<li data-num="4"><img src="<?php echo getStaticUrl('images/feature-list05.png')?>" alt=""/></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<div class="review ">
		<div class="wrapper">
		<h2>Comentários:  </h2>
		<div class="review-box">
			<a href="javascript::" class="prev"></a>
			<div class="content">
				<div class="roll">
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/softpedia.png')?>" alt=""/></dt>
							<dd>
								Opinião da Mídia
								<strong>softpedia</strong>
							</dd>
						</dl>
						<p>IObit Software Updater foi feito para simplificar a tarefa de manter todos seus aplicativos atualizados em seu computador. O programa verifica por novas versões e as instala automaticamente. Além disso, te ajuda a baixar e instalar programas populares em diversas categorias.</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Opinião do Usuário
								<strong>Nico Bremmer</strong>
							</dd>
						</dl>
						<p>“É um excelente programa para atualização de programas, fácil de usar e simples. O uso do programa é intuitivo, ele funciona bem e é rápido. A interface é bela e moderna e é bom que possamos ver a versão antiga e a nova do programa que queremos atualizar. É também muito bom que o programa te dá dicas de novos programas.”</p>
					</div>
					<div class="message">
						<dl>
							<dt><img src="<?php echo getStaticUrl('images/user.png')?>" alt=""/></dt>
							<dd>
								Opinião do Usuário
								<strong>Joshua Irving</strong>
							</dd>
						</dl>
						<p>"Eu adoro as atualizações automáticas, são rápidas e eficientes, e também criam um ponto de restauração antes da instalação apenas para o caso de algo dar errado. Eu também adoro o fato que o programa baixa as atualizações diretamente dos sites oficiais ao invés de eu ter que procurar o site de cada programa para baixar uma atualização."</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
	<!-- bottom start -->
	<div class="awards">
		<h2> Prêmios a Nível Mundial</h2>
		<p>Recomendado também pela mídia especializada</p>
		<img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
	</div>
	<div class="bottom">
		<div class="wrapper">
			<p class="annotation">
				Observe: <br> 1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.
			</p>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer nomal">
		<div class="wrapper clearfix">
			<img src="<?php echo getStaticUrl('images/fl-isu-box.png')?>" class="img-box" alt=""/>
			<div class="left-img"><img src="<?php echo getStaticUrl('images/pf-box.png')?>" width="96" alt=""></div>
			<div class="number">
				 <img src="<?php echo getStaticUrl('images/hurry.png')?>" alt=""> Apenas  
				<div id="topNum" class="giftNum">
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>
          <span class="nwrap">
          	<strong>
          		<b>1</b>
          	</strong>
          </span>

        </div>
        pacotes restantes. <div class="last"><strong class="viewNum"><?php echo $viewNum;?></strong> usuários estão visualizando</div>
			</div>
			<p class="price">
				 <strong>R$ <b>51</b>,99</strong> <del>R$ 199,98</del>
				<a href="https://www.iobit.com/buy.php?product=pt-isu33pcpf5199&ref=pt-isu3preorderofficial<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_isu" onclick="gga('send', 'event', 'isubuy', 'buy', 'isu3preorder-pt'); " class="buybtn">Comprar Agora</a>
			</p>
		</div>
	</div>
	<!-- floatlayer end -->
	<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>