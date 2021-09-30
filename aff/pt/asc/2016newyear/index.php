<?php
	error_reporting(E_ERROR);
	define("IObit","IObit");
	if (@!$include){
		$pResUrl = './';
		$pRootUrl = '../../../../';
	}
    if(empty($_GET['ref'])){
        $ref1='pt_asc9purchase1512';
        $ref2='pt_asc9iusdpurchase1512';
    }else{
        $ref1=$ref2=$_GET['ref'];
    }
	include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Super Promoção de Ano Novo do Advanced SystemCare, desconto de até 80%</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>
<!-- header -->
<div class="header">
  <div class="wrapper">
    <a href="http://www.iobit.com" target="_blank">IObit</a>
    <div class="time">
      <ul class="date clearfix" id="counttime">
        <li>00</li>
        <li>00</li>
        <li>00</li>
        <li class="last">000<sup>*</sup></li>
      </ul>
      <ul class="date jour clearfix">
        <li>H</li>
        <li>MIN</li>
        <li>S</li>
        <li class="last">MS</li>
      </ul>
      <p>Oferta quase acabando!</p>
    </div>
    <h1>Super Oferta de Ano Novo do ASC9</h1>
    <h2>Comece 2016 com um PC Rodando como um NOVO!</h2>
    <img src="<?php echo $pResUrl; ?>images/banner-asc9.jpg" alt="ASC9 PRO">
    <div class="container">
      <dl class="left off-small">
        <dt>Pacote Básico</dt>
        <dd class="first"><strong>-50%</strong><del>R$135.98</del></dd>
        <dd class="price">R$<b>67.99</b></dd>
        <dd><a class="buybtn" href="http://www.iobit.com/buy.php?product=pt-asc91pc6799&ref=<?php echo $ref1;?>&refs=pt_purchase_asca&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affptasc2016newyear');"><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""> Compre Agora</a></dd>
        <dd class="last">
          <p><img src="<?php echo $pResUrl; ?>images/check.png" alt="">1 PC / 12 Meses</p>
          <p><img src="<?php echo $pResUrl; ?>images/check.png" alt="">30 Dias de Garantia</p>
          <p><img src="<?php echo $pResUrl; ?>images/close.png" alt=""><del>Smart Defrag PRO</del></p>
          <p><img src="<?php echo $pResUrl; ?>images/close.png" alt=""><del>IObit Uninstaller PRO</del></p>
          <p class="end">Apenas <b>R$ 5.60</b>/ PC/ Mês</p>
        </dd>
      </dl>
      <dl class="left off-big">
        <dt>Melhor Oferta</dt>
        <dd class="first"><strong>-80%</strong><del>R$384.95</del></dd>
        <dd class="price">R$<b>76.99</b></dd>
        <dd><a class="buybtn" href="http://www.iobit.com/buy.php?product=pt-asc93pciusd7699&ref=<?php echo $ref2;?>&refs=pt_purchase_asc&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affptasc2016newyear');"><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""> Compre Agora</a></dd>
        <dd class="last">
          <p><img src="<?php echo $pResUrl; ?>images/check-big.png" alt=""><strong>3 PCs</strong> / 12 Meses</p>
          <p><img src="<?php echo $pResUrl; ?>images/check-big.png" alt="">60 Dias de Garantia</p>
          <p><img src="<?php echo $pResUrl; ?>images/check-big.png" alt=""><img src="<?php echo $pResUrl; ?>images/ico-gift.png" alt=""><span>Smart Defrag PRO</span></p>
          <p><img src="<?php echo $pResUrl; ?>images/check-big.png" alt=""><img src="<?php echo $pResUrl; ?>images/ico-gift.png" alt=""><span>IObit Uninstaller PRO</span></p>
          <p class="end">Apenas <b>R$ 2,13</b>/ PC/ Mês</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- header end -->
<!-- main end -->
<div class="main">
  <div class="wrapper">
    <!-- intro -->
    <div class="intro clearfix">
      <h2>ASC9 PRO ajudará você e sua família a ter Um PC Mais Rápido, Mais Limpo e Mais Seguro</h2>
      <img src="<?php echo $pResUrl; ?>images/asc9-screen.jpg">
      <ul>
        <li class="first">
          <img src="<?php echo $pResUrl; ?>images/ico-pc.png" alt=""><br>
          <strong>PC + Rápido</strong><br>
          2x a Velocidade
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/ico-internet.png" alt=""><br>
          <strong>Internet + Rápida</strong><br>
          Em até 300%
        </li>
        <li class="third">
          <img src="<?php echo $pResUrl; ?>images/ico-tudo.png" alt=""><br>
          <strong>Tudo-Em-Um</strong><br>
          Todos os Problemas do seu PC<br>
          Resolvidos Com Apenas Um-Clique
        </li>
        <li class="last">
          <img src="<?php echo $pResUrl; ?>images/ico-24.png" alt=""><br>
          <strong>Monitoramento Em Tempo Real</strong><br>
          Um PC Saudável<br>
          24 Horas
        </li>
      </ul>
    </div>
    <!-- intro end-->
    <!-- gift-description -->
    <div class="gift-description clearfix">
      <h2>E tem mais! A IObit está oferecendo <strong>2 SUPER BRINDES</strong> para Aqueles que Atualizarem para o ASC9 PRO! </h2>
      <dl class="left">
        <dt><img src="<?php echo $pResUrl; ?>images/gift-sd.jpg" alt=""></dt>
        <dd class="first"><strong>R$0  </strong><del>R$134 </del><span>1Ano / 1PC</span></dd>
        <dd><h3>Smart Defrag PRO 5</h3></dd>
        <dd>Desempenho Superior do Seu PC com a Otimização do Disco Rígido
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo $pResUrl; ?>images/gift-iu.jpg" alt=""></dt>
        <dd class="first"><strong>R$0  </strong><del>R$95</del><span> 1Ano / 1PC</span></dd>
        <dd><h3>IObit Uninstaller PRO 5</h3></dd>
        <dd>A Melhor Ferramenta De Desinstalação<br>
          Para seu PC
        </dd>
      </dl>
    </div>
    <!-- gift-description end -->
    <!-- banner-center -->
    <div class="banner-center">
      <span class="asc9"><img src="<?php echo $pResUrl; ?>images/asc9-center.jpg" alt=""></span>
      <span class="gift"><img src="<?php echo $pResUrl; ?>images/gift-center.jpg" alt=""></span>
<!--      <img class="asc9" src="<?php echo $pResUrl; ?>images/asc9-center.jpg" alt="">
      <img class="gift" src="<?php echo $pResUrl; ?>images/gift-center.jpg" alt="">-->
      <dl class="right">
        <dt><span>R$<b>76.99 </b></span><del>R$384.95</del></dt>
        <dd><a class="buybtn"  href="http://www.iobit.com/buy.php?product=pt-asc93pciusd7699&ref=<?php echo $ref2;?>&refs=pt_purchase_asc&aff=<?php echo $_GET['aff']; ?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'affptasc2016newyear');"><img src="<?php echo $pResUrl; ?>images/shop.png" alt=""> Compre Agora</a></dd>
        <dd class="last">Brindes Disponíveis Enquanto Durarem<br>
          no Estoque.
        </dd>
      </dl>
    </div>
    <!-- banner-center end -->
    <div class="clearfix payments">
      <dl>
        <dt>Formas de Pagamento</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/payments-01.jpg"></dd>
      </dl>
      <dl class="dias">
        <dt>Garantia de Devolução do Dinheiro</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/dias.jpg"></dd>
      </dl>
      <dl class="verified">
        <dt>Pagamento Seguro</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/verified.png"></dd>
      </dl>
    </div>
    <dl class="awards">
      <dt>Prêmios</dt>
      <dd><img src="<?php echo $pResUrl; ?>images/awards.jpg"></dd>
    </dl>
  </div>
  <!-- review -->
  <div class="review">
    <div class="wrapper">
      <div class="media_rev">
        <h3>Opinião da Mídia</h3>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/cnet.jpg" alt=""></dt>
          <dd>"Não há nada pior que um computador travado que impede você de trabalhar ou jogar. Advanced Systemcare irá reparar todos os problemas independente de quais sejam, não somente limpando os arquivos inúteis, malware, e entrada de registros inválidos, mas também irá dar um boost ao seu computador para otimizar sua experiência de PC. "<span>- Cnet</span></dd>
        </dl>
      </div>
      <div class="user_rev" id="user_rev">
        <div class="content">
          <h3>Opinião do Usuário</h3>
          <dl class="show">
            <dd><h4>"Fico muito feliz por ter feito o upgrade, pois me deixou muito mais tranquila e o programa faz todo o trabalho."</h4></dd>
            <dd> "O Advanced SystemCare Pro mantém meu computador bem limpo. Não só isso, seu Serviço de Atendimento ao Cliente também é excelente. Eles foram muitos atenciosos até que eu fosse capaz de resolver o meu problema de enviar um presente deste serviço do ASC para outra pessoa. Isso é prova de uma boa Empresa." - Jane McClain</dd>
          </dl>
          <dl class="hidden">
            <dd><h4>"Eliminou os spywares e malwares que meu antivírus deixou escapar."</h4></dd>
            <dd>"Nós costumávamos usar até uma dúzia de programas diferentes para manter as nossas máquinas em funcionamento e manter as ameaças de fora. A cada semana, levávamos horas para manter a segurança e o desempenho do PC. Agora, com o Advanced SystemCare Pro, tudo que precisamos está em um lugar só e nos leva poucos minutos a cada dois dias para fazer o mesmo trabalho com muito mais segurança " - Bob Bassett</dd>
          </dl>
          <dl class="hidden">
            <dd><h4>“O programa cuida de tudo em segundo plano”</h4></dd>
            <dd>Advanced System Care Pro provou ser uma confiável ferramenta, melhorando automaticamente a performance e segurança com uma simples interface e um ótimo suporte. Eu recomendo para toda a minha família e amigos..” – Almir Romboli Tavares</dd>
          </dl>
          <dl class="hidden">
            <dd><h4>Meu sistema nunca funcionou tão bem.</h4></dd>
            <dd>“Na minha opinião, ASC PRO de IObit é o melhor aplicativo de manutenção disponível para os usuários do Windows, fornecendo execelente valor e funções em ambas versões shareware e freeware. IObit fornece suporte técnico especializado que é competente, experiente e ágil, agregando valor significativo para seus produtos e serviços aos seus clientes” – Gordon Griswold.</dd>
          </dl>
        </div>
        <ul class="users">
          <li class="current"><img src="<?php echo $pResUrl; ?>images/jane_mcclain.jpg" alt="">Jane McClain</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/bob.jpg" alt="">Bob Bassett</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/almir.jpg" alt="">Almir Romboli Tavares</li>
          <li class=""><img src="<?php echo $pResUrl; ?>images/gordon.jpg" alt="">Gordon Griswold</li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->
  <div class="clear"></div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Observe:</dt>
    <dd>1*Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
  </dl>
  <!-- annotation end -->
</div>
<!-- main end -->
<!-- footer -->
<div class="wrapper">
  <div class="footer">
    Copyright © 2005 - 2016 IObit. Todos os Direitos Reservados
  </div>
</div>
<!-- footer end-->
<script type="text/javascript">
  $(function () {
    $("#user_rev li").mouseover(function(event) {
      var num = $(this).index();
      $("#user_rev li").each(function(index, el) {
        $(this).removeClass('current');
      });
      $(this).addClass('current');
      $("#user_rev dl").each(function(index, el) {
        $(this).removeClass('show').addClass('hidden')
      });
      $("#user_rev dl").eq(num).removeClass('hidden').addClass('show');
    });

    cycleCountdown();
  });

  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 17:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3);
    $("#counttime").html('<li>' + h + '</li><li >' + i + '</li><li>' + s + '</li><li class="last">' + mi + '<sup>*</sup></li>');
    setTimeout('cycleCountdown()', 1);
  }
</script>
</body>
</html>