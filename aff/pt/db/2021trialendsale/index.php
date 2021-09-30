<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
if (empty($_GET['ref'])) $_GET['ref'] = 'ptaff_db8_2021trialendsale';
if(empty(json_decode(base64_decode($_GET['tdata'])))){
	$_GET['tdata']='eyJMZnRUb2RDb3VudCI6MCwiTGZ0RHJ2Q291bnQiOjAsIkxmdENtcENvdW50IjowLCJMZnRUcmxEYXkiOjF9';
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Economize 45% no Driver Booster PRO e leve suporte para 3 PCs - IObit  </title>
	<meta name="Copyright" content="IObit">
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
	<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
	<?php echo $gJavascript['public']; ?>
	<?php echo $gJavascript['head']; ?>
</head>

<body>
	<!-- banner start -->
	<div class="banner">
		<div class="wrapper">
			<a class="logo" href="https://www.iobit.com" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<div class="title">
				<p>O seu período de avaliação terminará em <b class="days">3</b> <span class="dayStr">dias</span>.</p>
				<h1>Sua Última Chance de Adquirir o Melhor Preço </h1>
			</div>
			<div class="offer clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
				</div>
				<div class="right fr">
					<h2>Não perca o melhor preço!</h2>
					<div class="curvebox">
						<img src="<?php echo getStaticUrl('images/price-curve.png')?>" alt=""/>
						<span class="one">
							Antes de <i class="date0">11</i> de  <em class="month">Abril</em> 
						</span>
						<span class="two">
							De <i class="date0">11</i> a <i class="date1">21</i> de <em class="month">Abril</em>
						</span>
						<span class="three">
							De <i class="date2">22</i> a  <i class="date3">24</i> de <em class="month">Abril</em>
						</span>
						<span class="four">
							Após  <i class="date4">24</i> de <em class="month">Apr</em>
						</span>
					</div>
					<ul class="price clearfix">
						<li><p>Hoje <b>R$ 69,99</b></p> Desconto: 45% OFF </li>
						<li class="last">
							<a class="buybtn" 
							   href="https://www.iobit.com/buy.php?product=ptaff-db83pc6999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
							   onclick="ga('send', 'event', 'dbbuy', 'buy', 'ptaffdb82021trialendsale')">
								<i class="all-icons"></i> COMPRAR AGORA
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- banner end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<h2>Por que Driver Booster PRO?</h2>
			<p class="words">Atualize <b></b> drivers e componentes de jogos desatualizados para melhorar a estabilidade do PC e a experiência de jogo.</p>
			<div class="content">
				<dl class="one">
					<dt><i class="all-icons">1</i></dt>
					<dd>
						<h3>Estabilidade de Sistema</h3>
						<p>Atualiza drivers necessários para reduzir travamentos e lentidão do sistema.</p>
					</dd>
				</dl>
				<dl class="two">
					<dt><i class="all-icons">2</i></dt>
					<dd>
						<h3>Carregamento Rápido de Jogo</h3>
						<p>Atualiza componentes de jogos apropriados para garantir um carregamento mais rápido.</p>
					</dd>
				</dl>
				<dl class="three">
					<dt><i class="all-icons">3</i></dt>
					<dd>
						<h3>Funcionamento Correto de Dispositivos</h3>
						<p>Corrige erros de funcionamento em dispositivos e periféricos. </p>
					</dd>
				</dl>
				<dl class="four">
					<dt><i class="all-icons">4</i></dt>
					<dd>
						<h3>Experiência Superior em Jogos</h3>
						<p>Atualiza drivers relacionados ao jogo para proporcionar um melhor rendimento durante jogos.</p>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- comparison start -->
	<div class="comparison wrapper">
	  <h2> Qual é a diferença entre a versão atual e PRO?</h2>
	  <table>
	    <thead>
	      <tr>
	        <th colspan="2"></th>
	        <th class="itema">
	          <div class="free">Sua versão atual</div>
	        </th>
	        <th class="space"></th>
	        <th class="itemc">
	          <div class="pro">Driver Booster PRO</div>
	        </th>
	      </tr>
	    </thead>
	    <tbody>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon01.png')?>" alt=""></td>
	        <td class="virtue">Auto atualização de drivers enquanto o sistema está ocioso</td>
	        <td class="itema"><i class="all-icons">√</i></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon05.png')?>" alt=""></td>
	        <td class="virtue">1-clique para atualizar drivers</td>
	        <td class="itema"><p class="exTxt first">Expira após 3 dias</p></td>
	        <td class="space"></td>
	        <td class="itemc"><b class="limite">Ilimitado</b></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon06.png')?>" alt=""></td>
	        <td class="virtue">Velocidade de atualização até 100% maior</td>
	        <td class="itema"><p class="exTxt">Expira após 3 dias</p></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon02.png')?>" alt=""></td>
	        <td class="virtue">Corrige erros de dispositivo para um PC mais seguro</td>
	        <td class="itema"><p class="exTxt">Expira após 3 dias</p></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	      <tr>
	        <td class="icons"><img src="<?php echo getStaticUrl('images/com-icon03.png')?>" alt=""></td>
	        <td class="virtue">Download e backup automático</td>
	        <td class="itema"><p class="exTxt">Expira após 3 dias</p></td>
	        <td class="space"></td>
	        <td class="itemc"><i class="all-icons red">√</i></td>
	      </tr>
	    </tbody>
	    <tfoot>
	      <tr>
	      	<th colspan="2"></th>
	      	<th class="itema"></th>
	      	<th class="space"></th>
	      	<th class="itemc">
	      	  <p><b>R$ 69,99 </b> <del>R$129,99</del></p>
	      	  <a class="buybtn shadow" 
	      	     href="https://www.iobit.com/buy.php?product=ptaff-db83pc6999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
							 onclick="ga('send', 'event', 'dbbuy', 'buy', 'ptaffdb82021trialendsale')">
	      	  	<i class="all-icons"></i> Comprar Agora
	      	  </a>
	      	  <p id="tabcount" class="countdown">1 Ano de Assinatura/3 PCs</p>
	      	</th>
	      </tr>
	    </tfoot>
	  </table>
	</div>
	<!-- comparison end -->

	<!-- review start -->
	<div class="user clearfix">
	  <div class="wrapper">
	    <h2>
	     O que os nossos usuários estão dizendo
	    </h2>
	    <ul class="user-list">
	      <li class="fl">
	        <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya" />
	        <h4>Myo Thuya</h4>
	        <p>
	          "Com Driver Booster, eu consigo saber facilmente quais drivers estão desatualizados e posso atualizá-los com facilidade. Além disso, me ajuda a reparar erros como de rede. Eu não acreditava antes de usar, mas depois de testá-lo eu o adorei, pois meu PC está mais estável, rápido e seguro do que há 8 meses atrás. Muito obrigado, IObit."
	        </p>
	      </li>
	      <li class="fl">
	        <img src="<?php echo getStaticUrl('images/talal-hafez.png')?>" alt="Talal Hafez" />
	        <h4>Talal Hafez</h4>
	        <p>
	          "Uma verificação por dia mantém os drivers sempre atualizados. Ao invés de procurar individualmente por atualizações de drivers; Driver Booster mantém todos os drivers do meu PC atualizados com apenas um-clique! Driver Booster melhorou o meu PC para jogos, especialmente com os jogos mais recentes que precisam das últimas atualizações. Os produtos da IObit me mostram a verdadeira capacidade do meu pc. "
	        </p>
	      </li>
	    </ul>
	  </div>
	</div>
	<!-- review end -->

	<!--awards-->
	<div class="wrapper awards clearfix">
	  <h2>Recomendado também por:</h2>
	  <img src="<?php echo $pResUrl; ?>images/awards.png" alt=""/>
	</div>
	<div class="bottom clearfix">
		<!--service-->
		<ul class="wrapper service clearfix">
		  <li>
		    <h5>Garantia de Reembolso</h5>
		    <img src="<?php echo $pResUrl; ?>images/moneyback.png" alt="" />
		  </li>
		  <li>
		    <h5> Atendimento 24 Horas</h5>
		    <img src="<?php echo $pResUrl; ?>images/service.png" alt="" />
		  </li>
		  <li>
		    <h5>Pagamento 100% Seguro</h5>
		    <img src="<?php echo $pResUrl; ?>images/secured.png" alt="" />
		  </li>
		</ul>

		<!--footer-->
		<div class="wrapper footer clearfix">
		  <dl class="note ">
		    <dt>Observe:</dt>
		    <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
		    <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
		  </dl>
		  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
		</div>
	</div>

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	    <div class="left fl"><img src="<?php echo getStaticUrl('images/db-bundle-box.png')?>" alt=""/></div>
	    <h2 class="fl"><span class="off">45%</span> OFF</h2>
	    <div class="price fr">
	    	<h3>Mantenha Todos os Seus Drivers Atualizados!</h3>
	    	<a class="buybtn shadow" 
	    	   href="https://www.iobit.com/buy.php?product=ptaff-db83pc6999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff'];?>"
					 onclick="ga('send', 'event', 'dbbuy', 'buy', 'ptaffdb82021trialendsale')">
	    		<i class="all-icons"></i> Comprar Agora
	    	</a>
	    	<p id="floatcount" class="countdown">1 Ano de Assinatura/3 PCs</p>
	    </div>
	  </div>
	</div>
	<!-- floatlayer end -->
	<script>
		var transDataJson='<?php echo base64_decode($_GET['tdata']);?>';
		transData = JSON.parse(transDataJson);
	</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>