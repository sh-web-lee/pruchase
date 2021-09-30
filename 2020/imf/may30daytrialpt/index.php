<?php
error_reporting(0); 
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float()
{
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$refstr=empty($_GET['ref'])?'':('-'.$_GET['ref']);

$buyNum = ceil(microtime_float() * 1000 / 20000) -68807174;
$buyNum = number_format($buyNum);

if ($_GET['action'] == 'getPacks'){
	echo $buyNum;
	exit;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tente PRO por 30 dias grátis!</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Open+Sans:600,700" rel="stylesheet">
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
		<script type="text/javascript">
				function decreasingPacks(){
						$.ajax({
								type: "GET",
								url: "./30daytrial.php",
								async:true,
								data: "action=getPacks&r="+Math.random(),
								success: function(packs){
										$('#buyNum').html(packs);
										setTimeout('decreasingPacks()', 20000);
								}
						});
				}
				setTimeout('decreasingPacks()', 20000);
		</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
	<!-- header start -->
	<div class="banner">
		<div class="wrapper">
		 <a href="https://www.iobit.com/pt/index.php" class="logo" target="_blank">IObit</a>
		 <div class="title">
			<h1>IObit Malware Fighter 8 PRO</h1>
			<h2>Tenha 30 dias de Proteção Total do IObit Malware Fighter 8 PRO <span>grátis</span></h2>
		 </div>
		 <div class="content">
			 <div class="left">
				 <img src="<?php echo $pResUrl; ?>images/imf-box.png" alt="">
				 <p><img src="<?php echo $pResUrl; ?>images/people.png" alt=""><strong id="buyNum"><?php echo $buyNum; ?></strong> pessoas já adquiriram PRO de graça</p>
			 </div>
			 <div class="right">
				 <p class="now clearfix"><span class="text">Agora</span> <span class="price">R$ 0</span></p>
				 <dl>
					 <dt>Aproveite a Chance de Utilizar GRÁTIS a Versão PRO</dt>
					 <dd>Pague R$0 para testar a versão PRO por 30 dias</dd>
					 <dd>Você pode cancelar a qualquer momento durante o período de 30 dias</dd>

				 </dl>
				 <p class="leaving">Você perderá esta chance se sair desta página!</p>
				 <a href="https://www.iobit.com/buy.php?product=pt-imf8preorder&ref=pt_imf3pc30daytrial<?php echo $refstr;?>&refs=pt_purchase_imf" 
				    onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pc30daytrial2005-pt');" class="buybtn">Adquirir PRO GRÁTIS Agora</a>
			 </div>
		 </div>
		</div>
	</div>
	<!-- header end -->
	<div class="trial">
		<dl class="wrapper">
			<dt>Termos da promoção de avaliação de 30 dias</dt>
			<dd>No final do período de avaliação de 30 dias, seu cartão de crédito ou conta do Paypal será cobrado automaticamente em R$ 69,99. Este desconto de 55% no preço original de R$ 159,90 é um bônus apenas para pré-venda!</dd>
		</dl>
	</div>

	<!-- container start -->
	<div class="main wrapper">
		<div class="enjoy clearfix">
			<h2>Continue a Desfrutar de Proteção Total pelos Próximos 30 Dias</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons01.jpg" alt=""></dt>
				<dd><strong>Proteção Dupla dos motores Bitdefender e IObit </strong> Combina o poderoso motor anti-malware da IObit com o motor antivírus líder mundial da Bitdefender para entregar uma solução de segurança anti-malware e antivírus mais completa para você.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons02.jpg" alt=""></dt>
				<dd><strong>Detecta, Bloqueia e Remove mais de 200.000.000 de Ameaças  </strong> Detecta, bloqueia e remove mais de 200 milhões de ameaças ocultas como spyware, ransomware, adware, trojans, keyloggers, bots, worms, e hijackers mais profunda e eficientemente.</dd>
			</dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/icons03.jpg" alt=""></dt>
        <dd><strong>Guarda de Webcam e Anti-Rastreamento </strong> Informa imediatamente se qualquer programa tentar usar sua webcam secretamente para invadir sua privacidade, além de limpar automaticamente traços de informações pessoais que você digita online, como em contas de banco, e-mail ou redes sociais.</dd>
      </dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons04.jpg" alt=""></dt>
				<dd><strong> Bloqueia Ransomware e Protege seus Arquivos  </strong> Impede ativamente qualquer ransomware de tomar controle do seu PC, incluindo o ransomware Petya/GoldenEye.</dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons05.jpg" alt=""></dt>
				<dd><strong>Dados pessoais protegidos com senha </strong> Seus dados pessoais permanecerão protegidos contra acesso não-autorizado através de senha. Ninguém poderá acessá-los sem permissão. </dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/icons06.jpg" alt=""></dt>
				<dd><strong>Previne Processos Maliciosos e Vírus em USB </strong> Efetivamente para processos maliciosos rodando no sistema e protege seu PC contra vírus em discos USB.</dd>
			</dl>
		</div>
		<dl class="opt-out">
			<dt><span>Agora</span> <span class="price">R$ 0</span></dt>
			<dd><a href="https://www.iobit.com/buy.php?product=pt-imf8preorder&ref=pt_imf3pc30daytrial<?php echo $refstr;?>&refs=pt_purchase_imf" 
				     onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pc30daytrial2005-pt');" class="buybtn">Adquirir PRO GRÁTIS Agora</a></dd>
			<dd><span>Você pode cancelar a qualquer momento durante o período de 30 dias</span><span>Desfrute de 55% de desconto depois que o período de avaliação terminar</span></dd>
		</dl>
		<div class="media clearfix">
			<h2>Opinião da Mídia e Usuários</h2>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/software.jpg" alt=""></dt>
				<dd><strong>Software.Informer</strong> <p>Pode detectar uma enorme variedade de spyware, ransomware, adware, Trojans, worms, keyloggers e bots.</p></dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/gelu-batir.jpg" alt=""></dt>
				<dd><strong>Gelu Batir</strong> <p>Verifica meu laptop sem afetar seu desempenho e eu o recomendei para dois dos meus amigos.</p></dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/clnet.jpg" alt=""></dt>
				<dd><strong>Cnet</strong> <p>Este aplicativo informativo e fácil de usar limpa, configura e protege seu PC.</p></dd>
			</dl>
			<dl>
				<dt><img src="<?php echo $pResUrl; ?>images/david-cassidy.jpg" alt=""></dt>
				<dd><strong>David Cassidy </strong> <p>É muito mais rápido na verificação e simples de usar.</p></dd>
			</dl>
		</div>
	<div class="comparison wrapper">
    <table border="0" cellspacing="0" cellpadding="0" width="100%">
      <thead>
      <tr>
          <th class="text" colspan="2">Veja o que a versão PRO traz para você</th>
          <th class="itemb">IObit Malware Fighter<br>
              FREE</th>
          <th class="itemc">IObit Malware Fighter
              PRO
              <span>1 Ano / 3 PCs</span>
          </th>
      </tr>
      </thead>
      <tbody>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon1.png"></td>
            <td class="virtue">Função Básica Anti-Malware <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg"> <img src="<?php echo $pResUrl; ?>images/check1.png"></td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon2.png"></td>
            <td class="virtue">Verificação até 130% mais Rápida para Lidar Rapidamente com Ameaças <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/check1.png"></td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon3.png"></td>
            <td class="virtue">Novo Motor Anti-ransomware para Bloquear que seus Arquivos sejam Criptografados ou 
seu Sistema feito de Refém <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg"><img src="<?php echo $pResUrl; ?>images/check1.png"></td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon4.png"></td>
            <td class="virtue">Utiliza Senha para Proteger Arquivos Importantes contra Acesso Não-Autorizado com o Cofre <sup><img src="<?php echo $pResUrl; ?>images/sup-green.png" alt=""></sup>
            </td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon5.png"></td>
            <td class="virtue">Verifica Arquivos de Download e Remove Anúncios para Melhor Proteção <sup><img src="<?php echo $pResUrl; ?>images/sup-green.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon6.png"></td>
            <td class="virtue">Capacidade Anti- Malware completa com Motor "Dual-Core" Único  <sup> <img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon7.png"></td>
            <td class="virtue">Proteção Avançada contra Ameaças com o Mecanismo de AntiVirus Bitdefender <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon8.png"></td>
            <td class="virtue">Proteção na Inicialização do Disco para Proteger contra Ataques Maliciosos 
com a Guarda do MBR</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon9.png"></td>
            <td class="virtue">Protege sua Webcam contra Acesso Não-Autorizado</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon10.png"></td>
            <td class="virtue">Proteção Completa em Tempo Real para Segurança Total do PC <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon11.png"></td>
            <td class="virtue">Evita Infecção de Vírus por meio do Disco USB</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon12.png"></td>
            <td class="virtue">Detecta Processos Maliciosos na Mémoria RAM</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon13.png"></td>
            <td class="virtue">Limpeza Automática de Dados Privados com Anti-Rastreamento do Browser <sup><img src="<?php echo $pResUrl; ?>images/sup-red.png" alt=""></sup></td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon14.png"></td>
            <td class="virtue">Detecta Ameaças por Meio da Análise de Ações Maliciosas</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon15.png"></td>
            <td class="virtue">Funciona de forma Inteligente em Segundo Plano Sem Interrupções</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon16.png"></td>
            <td class="virtue">Atualiza Automaticamente para a Última Versão</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
        <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon17.png"></td>
            <td class="virtue">Suporte Técnico Gratuito 24/7</td>
            <td class="itemb itembg">-</td>
            <td class="itema"> <img src="<?php echo $pResUrl; ?>images/check3.png"></td>
        </tr>
      </tbody>
    </table>
	</div>
	</div>

	<!-- container end -->
	<div class="bottom-buy">
		<div class="wrapper">
			<img src="<?php echo $pResUrl; ?>images/imf-bottom-box.png" alt="">
			<ul>
				<li>Pague R$ 0 para utilizar a versão PRO por 30 dias</li>
				<li>Você pode cancelar a qualquer momento durante  <br> o período de 30 dias</li>
			</ul>
			<a href="https://www.iobit.com/buy.php?product=pt-imf8preorder&ref=pt_imf3pc30daytrial<?php echo $refstr;?>&refs=pt_purchase_imf" 
				 onclick="ga('send', 'event', 'imfbuy', 'buy', 'imf3pc30daytrial2005-pt');" class="buybtn">Adquira PRO GRÁTIS agora</a>
		</div>
	</div>
	<div class="product">
		<h2>Prêmios do Produto</h2>
		<img src="<?php echo $pResUrl; ?>images/awrad.jpg" alt="">
		<!-- footer start -->
		<div class="footer wrapper">Copyright © 2005 - <?php echo date(Y)?> IObit. Todos os Direitos Reservados</div>
		<!-- footer end -->
	</div>
</body>
</html>