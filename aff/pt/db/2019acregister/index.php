<?php
    error_reporting(0);
    define("IObit","IObit");
    if (@!$include){
      $pResUrl = './'; 
      $pRootUrl = '../../../../'; 
    }
    include $pRootUrl.'include/common.inc.php';
    if (empty($_GET['ref'])) $_GET['ref'] = 'ptaff_db6_2019acregister'; 
?>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="description" content="Exclusive Offer for IObit Valued User and Invited Members Only. Update Outdated Drivers Safely and Rapidly!"/>
<title>85% de DESCONTO em Driver Booster</title>
<link type="text/css" rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>" />
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<?php echo $gJavascript['public']; ?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<div id="head">
    <div class="wrapper">
        <a href="https://www.iobit.com" class="homelink">Iobit</a>
        <dl>
            <dt></dt>
            <dd>Driver Booster, from IObit, promises an easier solution to download and update driver with its most advanced technology. <br />-- MakeUseOf</dd>
        </dl>
    </div>
</div>
<div id="main">
    <div class="wrapper">
        <div class="shadow"></div>
        <div class="intro">
            <h1>Driver Booster 6 PRO </h1>
            <h2>—— Atualiza Drivers Desatualizados de forma Rápida e Segura</h2>
            <div class="boxshot"><img src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="" /></div>
            <div class="discount">
                <h3><span>Oferta Exclusiva</span><br />SOMENTE para Usuários IObit</h3>
                <div class="disprice">85%<span> de DESCONTO</span></div>
                <div class="wprice">APENAS <em> R$52,49</em> <del>R$349,93</del> <br> <span>1 Ano de Assinatura / 3 PCs</span></div>
                <div class="btnarea">
                    <a href="https://www.iobit.com/buy.php?product=ptaff-db61pc5249&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'ptaffdb62019acregister');" class="checkbtn">Compre Agora >></a>
                    <span>  Garantia de 100% de Devolução</span>
                </div>
            </div>
        </div>
        <div class="promise">
            
            <div class="leftbox">
              <h2><span>Alguns dos Principais Benifícios</span></h2> 
              <ul>
                  <li class="icon01">Suporta mais de 3.000.000 Drivers e Dispositivos</li>
                  <li class="icon02">Tenha Prioridade para Atualizar Drivers Defeituosos, Antigos ou Faltantes</li>
                  <li class="icon03">Melhora sua Experiência de Jogo através do Suporte de Vários Componentes de Jogos</li>
                  <li class="icon04">Faz o Backup de Drivers para Restauração Segura </li>
              </ul>
             </div>
            <div class="review"><span></span>" Driver Booster, de IObit, promote uma simples e fácil solução para baixar e atualizar drivers com a mais avançada tecnologia, agindo como um centro de comando all-in-one. Todos os seus drivers são listados na interface do app, tornando o processo muito simples para baixar e atualizar os drivers. Baixando e instalando drivers com este software é fácil e muitas vezes leva apenas alguns minutos (ou menos)."<br /><div class="awpic"><img src="<?php echo getStaticUrl('images/makeuseof_icon.jpg')?>" alt=""/></div></div>            
        </div>
        <div class="clear"></div>
        <div class="checkout">
            <div class="moneyback">
            Você está totalmente protegido com a nossa garantia de 100% da devolução do dinheiro e VERÁ significativa melhora na performance do seu PC DENTRO de 60 DIAS, caso contrário iremos oferecer total reembolso. Sem perguntas. <a href="https://www.iobit.com/buy.php?product=ptaff-db61pc5249&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'ptaffdb62019acregister');">Compre Agora </a>
            </div>
            <div class="btn">
                <a href="https://www.iobit.com/buy.php?product=ptaff-db61pc5249&ref=<?php echo $_GET['ref']; ?>&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'dbbuy', 'buy', 'ptaffdb62019acregister');" title="CHECKOUT" class="checkbtn">Compre Agora  >></a>
                <span> Garantia de 100% de Devolução</span>
            </div>
        </div>
        <div class="clear"></div>
        <div class="awards"></div>
    </div>
</div>
<div id="footer">
    <div class="wrapper">© 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</div>
</div>
<?php echo $gJavascript['foot']; ?>
</body>
</html>