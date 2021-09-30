<?php 
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../../';
}
if (empty($_GET['ref'])) $_GET['ref'] = 'ptaff_iu8_2018acregister'; 
include $pRootUrl . 'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta content="IE=edge" http-equiv="X-UA-Compatible">
<title>70% de desconto em IObit Uninstaller</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Oferta Exclusiva Apenas para Usuários VIP da IObit e Membros Convidados. Desinstale Completamente Programas e Plugins Teimosos!">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div class="head">
	<div class="wrapper">
		<a href="http://www.iobit.com" target="_blank" class="logo">IObit</a>
		<dl>
			<dt><img src="<?php echo $pResUrl; ?>images/makeuseof.png" alt=""/></dt>
			<dd>
				Essa ferramenta informativa e fácil de usar limpa, configura e otimiza seu PC.  
			</dd>
		</dl>
	</div>
</div>
<div id="main" class="wrapper">
	<div class="intro">
		<h1>IObit Uninstaller 8 PRO</h1>
		<h2>——Poderoso para Remover Aplicativos, Bundleware e Plug-ins Teimosos com 1-clique</h2>
		<img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="" class="boxshot">
		<div class="discount">
			<h3><span>Oferta Exclusiva </span>apenas para usuários leais da IObit!</h3>
			<dl>
				<dt>70% DE DESCONTO</dt>
				<dd class="price">apenas <em>R$32,24</em> <del> R$107,47   </del> <span>1 Ano / 1 PC</span></dd>
				<dd>
					<a class="checkbtn" href="https://www.iobit.com/buy.php?product=ptaff-iu81pc999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" onclick="ga('send', 'event', 'iubuy', 'buy', 'ptaffiu82018acregister')">
						Compre Agora >>
					</a>
				</dd>
				<dd>Garantia de Reembolso 100% de 60 dias </dd>			
			</dl>
		</div>
	</div>
	<div class="promise">				
		<div class="leftbox">
			<h2>Alguns Benefícios em Destaque</h2> 
			<ul>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-remove.png" alt=""></span>Mais Poderoso para Remover Programas Teimosos</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-adremoving.png" alt=""></span>Navegação mais Segura e Rápida através da Remoção de Plugins e Toolbars Maliciosos</li>
				<li><span><img src="<?php echo $pResUrl; ?>images/icon-uninstall.png" alt=""></span>Desinstalação Completa com Remoção Automática de Sobras e Entradas no Registro</li>
				<li><span><img src="<?php echo getStaticUrl('images/icon-unload.png')?>" alt="" /></span>Monitora a instalação para detectar e desinstalar bundleware e plugins em bundle.</li>
			</ul>
		</div>
		<div class="review">
			<span></span>
			Se você precisa de um app que desinstale completamente aplicativos com facilidade, escolha IObit Uninstaller. Este utilitário, agora compatível com Windows 10, torna fácil a remoção de apps, incluindo sobras que são deixadas para trás quando um programa é removido do PC, além de barras de ferramentas e plugins irritantes no navegador. Resumindo, se você usa um PC Windows, você deve baixar IObit Uninstaller.” 
			<img src="<?php echo $pResUrl; ?>images/pcmag-editor's-choice.jpg" alt=""/>
		</div>            
	</div>
	<div class="clear"></div>
	<div class="checkout">
		<div class="moneyback">
				Você está totalmente protegido pela nossa garantia de reembolso 100% e você VAI ver uma melhora significativa no desempenho do seu PC DENTRO DE 60 DIAS ou devolveremos todo seu dinheiro. Sem perguntas. <a href="https://www.iobit.com/buy.php?product=ptaff-iu81pc999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" onclick="ga('send', 'event', 'iubuy', 'buy', 'ptaffiu82018acregister')"> Compre agora</a>
			</div>
			<div class="btn">
				<a href="https://www.iobit.com/buy.php?product=ptaff-iu81pc999&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" title="CHECKOUT" onclick="ga('send', 'event', 'iubuy', 'buy', 'ptaffiu82018acregister')" class="checkbtn">
					Compre Agora >>
				</a>
				<span>Garantia de Reembolso 100%</span>
			</div>
	</div>
	<div class="clear"></div>
	<div class="awards"></div>
</div>
</div>
<div id="footer">
	<a href="http://www.iobit.com" target="_blank"><img src="<?php echo $pResUrl; ?>images/smail-logo.png" alt=""></a>© 2005 - <?php echo date(Y)?> IObit. Todos os Direitos Reservados
</div>
</body>
</html>
