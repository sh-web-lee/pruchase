<?php
	error_reporting(0);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../';
	}
	include $pRootUrl . 'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
	$date=$_GET['d'];
	$cName='itascjanpa'.$date;
	$cookie=$_COOKIE[$cName];
	if($cookie){
		$packsNum=$_COOKIE[$cName];
		if($packsNum>5){
			$packsNum--;
			setcookie($cName,$packsNum);
			if(rand(1,100)%2==0){
				$packsNum++;
			}
		}else{
			$packsNum=5;
		}
	}else{
		$packsNum=41;
		setcookie($cName,$packsNum);
	}
	echo $packsNum;
	exit();
}

function get_line($file, $line)
{
	$fp = fopen($file, 'r');
	$i = 0;
	while (!feof($fp)) {
		$i++;
		$c = fgets($fp);
		if ($i == $line) {
			return $c;
			break;
		}
	}
}

$buyNum = ceil(microtimeFloat() * 1000 / 20000) -76400174;
$buyNum = number_format($buyNum);

$name=explode(' ',trim(get_line('data/it_name_natale.txt',rand(1,454))));
$firstName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[0]);
$lastName=preg_replace("/(.*)(.{3})/",'${1}'.str_repeat('*',3),$name[1]);
//$saleType=(rand(1,6)%6==0)?1:3;
$saleType=3;
$viewNum=rand(60,88);
//if($_GET['type']==2){
//	$saleType=1;
//}
if($_GET['action']=='getPack'){
	echo json_encode(array('firstName'=>$firstName,'lastName'=>$lastName,'saleType'=>$saleType,'buyNum'=>$buyNum,'viewNum'=>$viewNum));
	exit();
}

if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
				'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
				'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
				'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
				'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
				'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
				'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
				'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
				'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro',
				'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb')
)) {
	$refStr = '-' . $_GET['st'];
} else {
	$refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
	$refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
	$refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
	$refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
	<title>Adquira Advanced SystemCare 12 Pro com 75% de desconto e leve dois super brindes para o seu computador. Oferta Especial de Natal da IObit.</title>
	<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
	<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500" rel="stylesheet">
	<?php echo $gJavascript['public'];?>
	<?php echo $gJavascript['head']; ?>
</head>
<body>
	<div class="banner">
	 	<div class="wrapper">
	 		<a href="https://www.iobit.com/" target="_blank" class="logo">IObit</a>
			<h1>Super Promoção de Natal</h1>
			<h2>Oferta limitada, Apenas uma Vez no Ano!</h2>

 			<div class="defalut-exceed"></div>
 			<div class="sold-box">
 				<h3>Restando: <strong>55</strong> hor <strong>55</strong> min <strong>55</strong> sec <strong class="last">55</strong> ms *</h3>
 				<div class="img-box">
 					<span class="three-img"></span>
 					<span class="one-img"></span>
 				</div>
 				<dl>
 					<dt><strong>75%</strong> DE DESCONTO</dt>
 					<dd>
            <!-- 75% buybtn  -->
            <a href="http://www.iobit.com/buy.php?product=pt-asc123pciusd7699&ref=pt_asc123pciusdpurchase1811<?php echo $refStr;?>&refs=pt_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1811-pt')"
               class="button button-btm-lag">
              <span></span>Aproveitar
            </a>
          </dd>
 					<dd>Mais de <span class="buyNum"><?php echo $buyNum?></span> pessoas já compraram</dd>
 				</dl>
 			</div>
 			<div class="one-pc-box">
 				<div class="img-box">
 					<span class="one-img"></span>
 					<span class="three-img"></span>
 				</div>
 				<dl>
 					<dt><strong>60%</strong> DE DESCONTO</dt>
 					<dd>
            <!-- 60% buybtn -->
            <a href="http://www.iobit.com/buy.php?product=pt-asc123pc7699&ref=pt_asc123pcpurchase1811<?php echo $refStr;?>&refs=pt_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1811-pt')"
               class="button">
              COMPRAR AGORA!
            </a>
          </dd>
 				</dl>
 			</div>
	 	</div>
	 	  <span class="snow list01"></span>
		  <span class="snow snow-clarity  list02"></span>
		  <span class="snow snow-smail list03"></span>
		  <span class="round  list04"></span>
		  <span class="round round-smail list05"></span>
		  <span class="round round-clarity list06"></span>
		  <span class="round round-large list07"></span>
		  <span class="snow snow-clarity  list15"></span>
		  <span class="snow snow-smail  list16"></span>
		  <span class="snow snow-clarity  list17"></span>
		  <span class="snow snow-smail  list18"></span>
		  <span class="round round-clarity list23"></span>
		  <span class="round round-clarity list24"></span>

		  <span class="round round-clarity list08"></span>
		  <span class="round round-smail list09"></span>
		  <span class="round round-large  list10"></span>
		  <span class="round list11"></span>
		  <span class="snow snow-clarity list12"></span>
		  <span class="snow snow-smail list13"></span>
		  <span class="snow list14"></span>
		  <span class="snow snow-clarity  list19"></span>
		  <span class="snow snow-smail  list20"></span>
		  <span class="snow snow-clarity  list21"></span>
		  <span class="snow snow-smail  list22"></span>
		  <span class="round round-clarity list25"></span>
		  <span class="round round-clarity list26"></span>
	</div>
<!--	<div class="payments wrapper">-->
<!--		<img src="--><?php //echo $pResUrl; ?><!--images/payments.png" alt="">-->
<!--	</div>-->
	<!-- benfits -->
	<div class="benfits">
		<div class="wrapper">
			<h2>A solução tudo-em-um mais avançada para <br> otimizar o seu PC ao máximo!</h2>
			<div class="showcase">
				<div class="inner">
					<ul class="screenshot">
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-00.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-04.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-02.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-03.jpg" alt="">
						</li>
						<li>
							<img src="<?php echo $pResUrl; ?>images/screenshot-01.jpg" alt="">
						</li>
					</ul>
				</div>
				<ul class="zoom">
					<li></li>
					<li class="fun3">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-02-zoom.png" alt="">
						</div>
					</li>
					<li class="fun2">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-03-zoom.png" alt="">
						</div>
					</li>
					<li class="fun4">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-04-zoom.png" alt="">
						</div>
					</li>
					<li class="fun5">
						<div class="container">
							<img src="<?php echo $pResUrl; ?>images/screenshot-05-zoom.png" alt="">
						</div>
					</li>
				</ul>
				<ul class="list-icon">
					<li class="active"></li>
					<li></li>
					<li></li>
					<li></li>
					<li></li>
				</ul>
			</div>
			<div class="detail-list">
				<dl>
					<dt><i class="benfits04"></i></dt>
					<dd>
						<h3>O Dobro de Segurança </h3>
						<p>Protege sua privacidade e seus dados de acesso secreto e previne que qualquer intrusos invadam sua privacidade com até duas vezes mais segurança que a versão FREE</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits02"></i></dt>
					<dd>
						<h3>Mais Velocidade</h3>
						<p>Limpa todos os arquivos desnecessários e otimiza a RAM e o Windows para acelerar a inicialização e desempenho do PC em até 200%*.</p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits03"></i></dt>
					<dd>
						<h3>Internet mais Rápida</h3>
						<p>Aumenta a velocidade de downloads, navegação, jogos online e sites de vídeos como o Youtube. </p>
					</dd>
				</dl>
				<dl>
					<dt><i class="benfits01"></i></dt>
					<dd>
						<h3>Mais Espaço em Disco</h3>
						<p>Limpa profundamente arquivos lixos, links inválidos, arquivos de log do sistema e arquivos incompletos de download com a otimização avançada.</p>
					</dd>
				</dl>
				<a href="Javascript:void(0);" onclick="goTarget($('.compare'))" class="textlink">Clique aqui para mais informações ></a>
			</div>
		</div>
	</div>
	<!-- end benfits -->
	<!-- gifts -->
	<div class="gifts">
		<div class="wrapper">
			<h2>Brindes Grátis apenas na oferta especial de Natal 2018</h2>
			<div class="gift-list clearfix">
				<dl class="exceed">
					<dt>
						<span></span>
						<strong>Protected Folder</strong>
					</dt>
					<dd>R$ 99,99 <b>R$<span>0</span></b></dd>
				  <dd><p>O programa certo para manter a privacide de <br> seus arquivos e pastas e protegê-los de <br> ataques maliciosos.</p></dd>
				</dl>
				<dl class="iu">
					<dt>
						<span></span>
						<strong>IObit Uninstaller 8 PRO</strong>
					</dt>
					<dd>R$ 99,99 <b>R$<span>0</span></b></dd>
				  <dd><p>Mantém o seu PC limpo através da <br> desinstalação de programas teimosos, <br> sobras de programas e da remoção de <br> plugins maliciosos </p></dd>
				</dl>
				<dl class="sd">
					<dt>
						<span></span>
						<strong>Smart Defrag 6 PRO</strong>
					</dt>
					<dd>R$ 99,99 <b>R$<span>0</span></b></dd>
				  <dd><p>Desfragmenta automaticamente seu PC e <br> acelera a velocidade de acesso a arquivos!</p></dd>
				</dl>
			</div>
      <!-- 75% buybtn -->
			<a href="http://www.iobit.com/buy.php?product=pt-asc123pciusd7699&ref=pt_asc123pciusdpurchase1811<?php echo $refStr;?>&refs=pt_purchase_asc"
         onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1811-pt')"
         class="button btn-mid-lag">
        <span></span>Comprar Agora
      </a>

		</div>
	</div>
	<!-- end gifts -->
	<!-- review -->
	<div class="reviews ">
		<div class="wrapper">
			<h2>Prêmios e Avaliações</h2>
			<p>Satisfazendo nossos clientes onde eles estiverem.</p>
			<ul class="message clearfix">
				<li>
					<strong>200+</strong>
					<p>Popular em mais de <b>200</b> países <br> no mundo </p>
				</li>
				<li>
					<strong>1.000+</strong>
					<p>Mais de <b>1.000</b> canais de mídia <br> comentaram e elogiaram </p>
				</li>
				<li>
					<strong>250.000.000+</strong>
					<p>Escolhido e recomendado por <br> mais de <b>250 milhões</b> de usuários </p>
				</li>
				<li>
					<strong>80%+</strong>
					<p>Mais de <b>80%</b> dos usuários do Advanced <br> SystemCare ativaram a versão PRO </p>
				</li>
			</ul>
			<div class="map">
				<span class="recover recover01 big"></span>
				<span class="recover recover02 middle"></span>
				<span class="recover recover03 smail"></span>
				<span class="recover recover04 big"></span>
				<span class="recover recover05 middle"></span>
				<span class="recover recover06 smail"></span>
				<span class="recover recover07 big"></span>
				<span class="recover recover08 middle"></span>
				<span class="recover recover09 smail"></span>
				<span class="recover recover10 smail"></span>
				<span class="recover recover11 smail"></span>
				<span class="recover recover12 smail"></span>
				<span class="recover recover13 middle"></span>
				<span class="recover recover14 middle"></span>
				<span class="recover recover15 smail"></span>
				<span class="recover recover16 smail"></span>
				<span class="recover recover17 big"></span>
				<span class="recover recover18 smail"></span>
				<span class="recover recover19 smail"></span>
				<span class="recover recover20 big"></span>
				<span class="recover recover22 smail"></span>
				<span class="recover recover23 smail"></span>
				<span class="recover recover24 smail"></span>
				<span class="recover recover25 smail"></span>
				<span class="recover recover26 smail"></span>
				<dl class="tradotto-da-tedesco">
					<dt><img src="<?php echo $pResUrl; ?>images/tradotto-da-tedesco.png"></dt>
					<dd>
						<strong>Markus Thomas</strong>
						<p>É o melhor programa para limpar e acelerar meu PC de modo <br> eficiente e seguro. Faz computadores antigos mais velozes e <br> mais poderosos!</p>
						<span></span>
					</dd>
				</dl>
				<dl class="html-it">
					<dt><img src="<?php echo $pResUrl; ?>images/html-it.png"></dt>
					<dd>
						<strong>HTML.it</strong>
						<p>Advanced SystemCare Pro é um programa <br> poderoso que otimiza ao máximo o <br> desempenho do sistema operacional. Ele <br> gerencia automaticamente quase todas as <br> funções, muito simples de usar!</p>
						<span></span>
					</dd>
					</dl>
				<dl class="baixaki">
					<dt><img src="<?php echo $pResUrl; ?>images/baixaki.png"></dt>
					<dd>
						<strong>Baixaki</strong>
						<p>Em nossos testes, notamos que o Advanced SystemCare <br> tem uma eficiência excepcional.Ele consegue encontrar <br> problemas para resolver no seu computador que <br> realmente são difíceis de imaginar.</p>
						<span></span>
					</dd>
				</dl>
				<dl class="charles-r-widick">
					<dt><img src="<?php echo $pResUrl; ?>images/charles-r-widick.png"></dt>
					<dd>
						<strong>Charles R. Widick</strong>
						<p>A minha escolha ainda é o Advanced SystemCare Pro!</p>
						<span></span>
					</dd>
				</dl>
				<dl class="cnet">

					<dt><img src="<?php echo $pResUrl; ?>images/cnet.png"></dt>
					<dd>
						<strong>Cnet</strong>
						<p>Advanced SystemCare remedia <br> qualquer problema que esteja <br> aflingindo seu computador!</p>
						<span></span>
					</dd>
				</dl>
			</div>
		</div>
	</div>
	<!-- end review -->
	<!-- compare -->
	<div class="compare wrapper">
		<table border="0" cellspacing="0" cellpadding="0" width="100%">
		<thead>
			<tr>
				<th class="itemb">
					<div class="box">
            Sua edição <br>
            ATUAL
						<span></span>
					</div>
				</th>
				<th class="text">Comparação das funcionalidades:</th>

				<th class="itema">
					<div class="box">
            A Versão PRO <br>
            ATUALIZADA
						<span></span>
					</div>
				</th>
			</tr>
		</thead>
		<tbody>
    <!-- 01 -->
			<tr>
				<td class="itemb"><i class="all-icons">√</i></td>
				<td class="virtue">Sistema básico de limpeza, reparo e otimização</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
    <!-- 02 -->
			<tr>
				<td class="itemb"><i class="all-icons close">√</i></td>
				<td class="virtue">
          Internet 300% mais rápida com Aceleração de Internet
					<span class="all-icons">Aggiornato</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
    <!-- 03 -->
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
          Inicialização 200% mais rápida com Otimização da Inicialização
					<span class="all-icons">Aggiornato</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
    <!-- 04 -->
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
          Sistema mais estável com Limpeza Profunda do Registro do Windows
						<span class="all-icons ra">Raccomandat</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
    <!-- 05 -->
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
          Sistema mais rápido com Motor de Oimizaçao do Disco Rígido
					<span class="all-icons ra">Raccomandat</span>
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
    <!-- 06 -->
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
          Garante a privacidade online com Escudo de Privacidade e Proteção da Assinatura Digital
          <span class="all-icons nuo">Nuovo</span>
        </td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
    <!-- 07 -->
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
          Detecta e Bloqueia ameaças de segurança com Proteção em Tempo-Real
          <span class="all-icons">Aggiornato</span>
        </td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
    <!-- 08 -->
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
          Navegação online mais segura com remoção automática de rastros de privacidade
          <span class="all-icons">Aggiornato</span>
        </td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
    <!-- 09 -->
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
          Conveniência máxima com Atualização Automática e Limpeza Automática de RAM
				</td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
    <!-- 10 -->
			<tr>
				<td class="itemb"><i class="all-icons close">X</i></td>
				<td class="virtue">
          Atendimento Técnico Gratuito 24 horas por dia
        </td>
				<td class="itema"><i class="all-icons red">√</i></td>
			</tr>
			<tr>
				<td class="itemb radius"></td>
				<td class="virtue radius"></td>
				<td class="itema radius"> <span class="shadow"></span></td>
			</tr>
		</tbody>
	</table>
	</div>
	<!-- end compare -->
	<!-- bottomcart -->
	<div class="bottomcart">
		<div class="wrapper">
			<h2>A Natale, fai il MIGLIOR REGALO al tuo vecchio PC!</h2>

				<div class="showcase">
					<span class="img"></span>
				</div>
				<div class="selection">
					<ul>
						<li class="three-pc active" ><i></i> <span>3PCs / 1 Ano + SD + PF</span> <strong>-75%</strong></li>
						<li class="one-pc"><i></i> <span>3PCs / 1 Ano</span> <strong>-60%</strong></li>
					</ul>
				</div>

				<dl class="btnarea">
					<dt> <strong> R$ <b>76</b>,99</strong> <del>R$ 399,88</del></dt>
					<dd>
            <!-- 75% buybtn -->
						<a href="http://www.iobit.com/buy.php?product=pt-asc123pciusd7699&ref=pt_asc123pciusdpurchase1811<?php echo $refStr;?>&refs=pt_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1811-pt')"
               class="button button-top-lag">
              <span></span>Aproveitar
            </a>
					</dd>
				</dl>
		</div>
	</div>
	<!-- end bottomcart -->
	<!-- payments  -->
	<div class="service  clearfix">
		<div class="wrapper">
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/money-back.png" alt=""></dt>
        <dd><strong>Garantia de Reembolso</strong></dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dt>
				<dd><strong>Formas de Pagamento</strong></dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
				<dd><strong>Pagamento 100% Seguro</strong></dd>
			</dl>
			<dl class="last">
				<dt><img src="<?php echo $pResUrl; ?>images/veloce.png" alt=""></dt>
				<dd><strong>Ativação Imediata</strong></dd>
			</dl>
		</div>
	</div>
	<!-- end payments -->
	<!-- footer -->
	<div class="footer">
		<dl class="annotation wrapper">
			<dt>Observe:</dt>
			<dd>
        1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.
			</dd>
			<dd>
        2*.Informações podem variar com base em diferentes sistemas ou computadores.
			</dd>
		</dl>
		<div class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit.Todos os Direitos Reservados</div>
	</div>
	<!-- end footer -->
	<script type="text/javascript">
		var refStr='<?php echo $refStr;?>';
	</script>
	<script src="<?php echo $pResUrl; ?>script/script.js"></script>
	<script src="<?php echo $pResUrl; ?>script/jquery.animateNumber.min.js"></script>
</body>
</html>