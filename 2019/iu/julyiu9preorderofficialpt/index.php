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
	$c_name = 'eniujune_p' . $date;
	$c_name_t='eniujune_t' . $date;
	if ($_COOKIE[$c_name]===null) {
		$totalNum=$packsNum=rand(49,58);
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

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
if(!empty($_GET['to'])){
	$refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
	<meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Tenha 60% de desconto no novo IObit Uninstaller PRO</title>
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
			<a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
			  <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
			</a>
			<h1>A Pré-Venda Global Começa Agora</h1>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h2>IObit Uninstaller 9 PRO</h2>
					<p>Desinstalação completa sem deixar rastros</p>
					<ul class="price clearfix">
						<li class="first">
							<p><strong>R$<big>52</big>,99</strong> <del>R$144,00</del></p>
							<div id="reduce" class="reduceNum">
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
								<div class="listbox"><span class="list"><b>5</b></span></div>
								<div class="listbox"><span class="list"><b>0</b></span></div>
							</div>
							<p class="change"><b class="giftNum">50</b> pacotes restantes</p>
						</li>
						<li>
							<a class="buybtn"
							   href="https://www.iobit.com/buy.php?product=pt-iu93pc5299&ref=pt_iu9preorder5299official<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
							   onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9preorderofficial-pt');">
                Aproveitar Agora
							</a>
						</li>
					</ul>
				</div>
			</div>
			<div class="payment"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- banner end -->

	<!-- intro start -->
	<div class="intro">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>O que IObit Uninstaller 9 PRO Pode Fazer por Você?</h2>
			<div class="one clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-01.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<h3><b>Desinstalação Rápida</b></h3>
					<dl>
						<dt><h4>Programas Teimosos e em Bundle <span><em>único no mercado</em></span></h4></dt>
						<dd>
              Remove forçosamente programas teimosos, indesejados ou instalados em bundle que não pode ser desinstalados por meios convencionais.
						</dd>
					</dl>
					<dl>
						<dt><h4>Extensões Maliciosas de Navegador <span><em>único no mercado</em></span></h4></dt>
						<dd>
              Ajuda a remover quaisquer barras de ferramentas indesejadas,  add-ons e extensões, te informando quais são seguras e quais não.
            </dd>
					</dl>
					<dl>
						<dt><h4>Apps do Windows</h4></dt>
						<dd>Te ajuda a se livrar dos apps nativos do Windows 10 que você não quer utilizar.</dd>
					</dl>
				</div>
			</div>
			<div class="two clearfix">
				<div class="right fl">
					<h3><b>Limpeza Profunda</b></h3>
					<dl class="safe">
						<dt><h4>Dados Inúteis de Programas</h4></dt>
						<dd>
              Deleta todos os arquivos, pastas e registros inúteis após desinstalar programas.
						</dd>
					</dl>
					<dl>
						<dt><h4>Sobras Deixadas no PC <span><em>único no mercado</em></span></h4></dt>
						<dd>
              1-clique para verificar e remover arquivos sobras de programas já desinstalados sem o IObit Uninstaller.
						</dd>
					</dl>
					<dl>
						<dt><h4>Mudanças de Sistema Feitas por Instalador</h4></dt>
						<dd>
              Identifica quaisquer mudanças feitas por um instalador e remove todas as modificações feitas como se o programa jamais tivesse sido instalado.
						</dd>
					</dl>
				</div>
				<div class="left fr">
					<img src="<?php echo getStaticUrl('images/iu-screen-02.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
			</div>
		</div>
	</div>
	<!-- intro end -->

	<!-- feature start -->
	<div class="feature">
		<div class="wrapper">
			<div class="iumouse"><div class="mouse"></div></div>
			<h2>Quais são os benefícios do IObit Uninstaller 9 PRO?</h2>
			<div class="clearfix">
				<div class="left fl">
					<img src="<?php echo getStaticUrl('images/iu-screen-03.png')?>" alt="IObit Uninstaller PRO"/>
				</div>
				<div class="right fr">
					<ul class="feature-list">
						<li><i class="all-icons">√</i> Remove múltiplos programas e apps de uma só vez</li>
						<li><i class="all-icons">√</i> Identifica e remove bundleware</li>
						<li><i class="all-icons">√</i> Detecta mudanças no sistema feitas por instaladores <sup class="green">NOVO</sup></li>
						<li><i class="all-icons">√</i> Deleta programas teimosos <sup>MELHORADO</sup></li>
						<li><i class="all-icons">√</i> Identifica extensões maliciosas e de anúncios <sup>MELHORADO</sup></li>
						<li><i class="all-icons">√</i> Deleta automaticamente sobras de programas <sup>MELHORADO</sup></li>
						<li><i class="all-icons">√</i> Verifica por sobras de programas já desinstalados <sup class="green">NOVO</sup></li>
						<li><i class="all-icons">√</i> Cria um ponto de restauração automática antes de desinstalar</li>
						<li><i class="all-icons">√</i> Atualiza todos os programas desatualizados com 1-clique</li>
						<li><i class="all-icons">√</i> Atualiza automaticamente para novas versões sempre que disponível</li>
						<li><i class="all-icons">√</i> Suporte técnico 24 horas</li>
					</ul>
					<ul class="price clearfix">
						<li class="first">
							<p><strong>R$<big>52</big>,99</strong> <del>R$144,00</del></p>
							<p class="change">Corra, apenas <b class="giftNum">50</b> pacotes restantes</p>
						</li>
						<li>
							<a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=pt-iu93pc5299&ref=pt_iu9preorder5299official<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
                 onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9preorderofficial-pt');">
                Aproveitar Agora
              </a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!-- feature end -->

	<!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>O Que Outros Dizem?</h2>
      <div class="box">
        <div class="relist clearfix">
          <dl class="on clearfix">
            <dt><img src="<?php echo getStaticUrl('images/makeuseof.png')?>" alt="MakeUseOf"/></dt>
            <dd>
              <h3>Opinião da Mídia</h3>
              <p>
                "Essa ferramenta informativa e de fácil uso limpa, configura e otimiza seu PC e usuários podem baixar virtualmente num piscar de olhos. Essa ferramenta pode ser categorizada como a melhor ferramenta de desinstalação e permite que usuários desinstalem em lote. Oferece aos usuários a opção de fazer uma "Verificação Profunda" para ir mais fundo e procurar por restos deixados pelo processo de desinstalação. O desempenho por si só já faz essa ferramenta valiosa de se ter."
              </p>
              <h4>MakeUseOf</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lynett-van-niekerk.png')?>" alt="Lynette van Niekerk"/></dt>
            <dd>
              <h3>Opinião do Usuário</h3>
              <p>
                "Eu acho IObit Uninstaller excelente para usar e é tudo que eu desejaria. Eu amo o fato que ele desinstala sobras de programas. Também possui um atualizador de programas que lembra você de quando os programas precisa atualização, e desinstala múltiplos programas ao mesmo tempo o que o faz o melhor desinstalador do mercado. É o programa correto para quem quer manter seu computador em ordem."
              </p>
              <h4>Lynette van Niekerk</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/sergey-erlich.png')?>" alt="Sergey Erlich"/></dt>
            <dd>
              <h3>Opinião do Usuário</h3>
              <p>
                "IObit Uninstaller é provavelmente o melhor aplicativo para removar programas desnecessários do seu computador. Diferentemente do desinstalador padrão do Windows, IObit Uninstaller remove as sobras do programa desinstalado, que poderiam deixar seu PC lento. Eu estive usando esse programa por alguns anos e sempre me ajuda a manter meu computador limpo e rápido. Eu recomendei este programa para alguns dos meus amigos no passado e recomendaria de novo."
              </p>
              <h4>Sergey Erlich</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/paulo-martins.png')?>" alt="Paulo Martins"/></dt>
            <dd>
              <h3>Opinião do Usuário</h3>
              <p>
                "IObit Uninstaller é o melhor programa para remover programas do computador, ele é rápido, efetivo e muito superior ao desinstalador básico de Windows. O programa limpa seriamente todos os restos do programa para que não haja atrasos no computador. Eu estive usando por alguns meses e eu não sei como viver sem ele, portanto eu recomendo para meus amigos e família. IObit Uninstaller é fantástico!"
              </p>
              <h4>Paulo Martins</h4>
            </dd>
          </dl>
          <dl class="clearfix">
            <dt><img src="<?php echo getStaticUrl('images/lovro-zuzic.png')?>" alt="Lovro Žužić"/></dt>
            <dd>
              <h3>Opinião do Usuário</h3>
              <p>
                "IObit Uninstaller fica melhor a cada atualização. Eu o tenho usado por 3 anos, o programa carrega rápido e possui uma interface simples. Algumas das funções que uso regularmente são Desinstalação em Lote, Verificação Profunda, Destruidor de Arquivos e a função adicionanda recentemente que me permite ter acesso rápido a programas que eu instalei recentemente ou que não funcionam devidamente. É fácil controlar seus itens de inicialização o que faz seu PC inicializar em menos tempo."
              </p>
              <h4>Lovro Žužić</h4>
            </dd>
          </dl>
        </div>
      </div>
      <span class="prev"><</span>
      <span class="next">></span>
    </div>
  </div>
	<!-- review end -->

  <!-- service start -->
	<div class="service">
		<div class="wrapper">
			<h2>World-wide Awards</h2>
			<div class="imgbox"><img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/></div>
		</div>
	</div>
	<!-- service end -->

	<!-- bottom start -->
	<div class="bottom">
		<div class="wrapper">
			<dl class="annotation">
				<dt></dt>
				<dd></dd>
			</dl>
			<p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
		</div>
	</div>
	<!-- bottom end -->

	<!-- floatlayer start -->
	<div id="floatlayer" class="floatlayer">
	  <div class="wrapper clearfix">
	  	<div class="imgbox fl">
	  		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
	  	</div>
	  	<div class="price fr clearfix">
	  		<div class="one fl">
	  			<div id="fReduce" class="reduceNum">
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  				<div class="listbox"><span class="list"><b>5</b></span></div>
	  				<div class="listbox"><span class="list"><b>0</b></span></div>
	  			</div>
	  			<p class="change"><span class="viewNum"><?php echo $viewNum;?></span> visitantes agora, só <b class="giftNum">50</b> pacotes restantes!</p>
	  		</div>
	  		<div class="two fl"><strong>R$<big>52</big>,99</strong> <del>R$144,00</del></div>
	  		<div class="three fl">
	  			<a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-iu93pc5299&ref=pt_iu9preorder5299official<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=purchase_iu"
             onclick="ga('send', 'event', 'iubuy', 'buy', 'iu9preorderofficial-pt');">
            Aproveitar Agora
	  			</a>
	  		</div>
	  	</div>
	  </div>
	</div>
	<!-- floatlayer end -->
<script>refStr="<?php echo $refStr;?>";</script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>