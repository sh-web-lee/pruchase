<?php
    error_reporting(E_ERROR);
    define("IObit","IObit");
    $pRootUrl = '../../';
    include $pRootUrl.'include/common.inc.php';
    $refStr = 'pt_sd-ac-register';
if($_GET['to']=='db_ac_sd'){
    $refStr.='-'.$_GET['to'];
}
if(in_array($_GET['st'],array('ascu_acsd','asc_acsd'))){
    $refStr.='-'.$_GET['st'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Enjoy Ultimate Performance for Your Hard Drive!"/>
<title>85% de desconto no Smart Defrag 7 PRO. Oferta Limitada da IObit.</title>
<link type="text/css" rel="stylesheet" href="<?php echo $pResUrl; ?>style/style.css" />
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<div id="head">
	<div class="wrapper">
    	<a href="https://www.iobit.com" class="homelink">Iobit</a>
    	<dl>
        	<dt></dt>
            <dd><img src="<?php echo $pResUrl; ?>images//star.png" alt=""/></dd>
        </dl>
    </div>
</div>
<div id="main">
	<div class="wrapper">
    	<div class="shadow"></div>
        <div class="intro">
        	<h1>Smart Defrag 7 PRO</h1>
            <h2>—— Performance Superior para o Seu Disco Rígido</h2>
            <div class="boxshot"></div>
            <div class="discount">
            	<h3><span>Oferta Exclusiva</span><br />SOMENTE para Usuários IObit!</h3>
                <div class="disprice">85%<span>de Desconto</span></div>
                <div class="wprice">APENAS <em>R$12,99</em> <del>R$ 99,99</del><span>1 Ano de Assinatura / 1 PC</span></div>
                <div class="btnarea">
                    <a href="https://www.iobit.com/buy.php?product=pt-sd6-ac&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_ac_sd " onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac-pt');" class="checkbtn">Compre Agora >></a>
                    <span>Garantia de 100% de Devolução</span>
                </div>
            </div>
        </div>
        <div class="promise">
        	
            <div class="leftbox">
              <h2><span>Alguns dos Principais Benifícios</span></h2> 
              <ul>
                  <li class="icon01">Novo Mecanismo Disk Defrag para uma Desfragmentação de Disco 100% Mais Segura</li>
                  <li class="icon02">Suporte completo para desfragmentação de Apps do Windows Metro 10/8/8.1</li>
                  <li class="icon03">Performance Máxima do Disco Rígido e Maior Velocidade ao Acesso de Dados</li>
                  <li class="icon04">Garantia de Proteção de Dados e Estabilidade de Disco</li>
              </ul>
             </div>
            <div class="review"><span></span>Uma das maneiras mais simples para garantir que o seu PC funcione de forma mais eficiente é por meio da desfragmentação do seu disco rígido. <br />Com vários níveis de desfragmentação, fácil de usar o agendamento e ofertas extras, Smart Defrag é uma ótima maneira de fazer isso."<br /><div class="awpic"><img src="<?php echo $pResUrl; ?>images//pcworld_logo.jpg" alt=""/><br />
- PCWORLD.com</div></div>            
        </div>
        <div class="clear"></div>
        <div class="checkout">
        	<div class="moneyback">
            	Você está totalmente protegido com a nossa garantia de 100% da devolução do dinheiro e VERÁ significativa melhora na performance do seu PC DENTRO de 60 DIAS, caso contrário iremos oferecer total reembolso. Sem perguntas <a href="https://www.iobit.com/buy.php?product=pt-sd6-ac&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac-pt');">Compre Agora</a>
            </div>
            <div class="btn">
            	<a href="https://www.iobit.com/buy.php?product=pt-sd6-ac&ref=<?php echo $refStr; ?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_ac_sd" onclick="ga('send', 'event', 'sdbuy', 'buy', 'sdac-pt');" class="checkbtn">Compre Agora >></a>
                <span>Garantia de 100% de Devolução</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards"></div>
    </div>
</div>
<div id="footer">
	<div class="wrapper">
© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved 
    </div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>
