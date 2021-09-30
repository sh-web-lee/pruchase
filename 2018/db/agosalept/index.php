<?php
error_reporting(E_ALL);
define("IObit","IObit");
if(@!$include) {
	$pResUrl = './';
	$pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

function microtime_float(){
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

$reTime=30;
$reduceNum=47896325;
$buyNum = number_format(ceil(microtime_float()*1000/(1000*$reTime)) - $reduceNum,0,'','.');
if($_GET['action']=='getBuyNum'){
  echo $buyNum;exit();
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira Driver Booster 6 Pro para 3 PCs com 35% de desconto. Oferta Limitada da IObit.</title>
  <meta name="Copyright" content="IObit">
  <meta name="Description" content="">
  <meta name="Keywords" content="">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="../../tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="../../tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
	<?php echo $gJavascript ['public'];?>
	<?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
    <!-- subtitle -->
    <h2 class="subtitle">Comemorando o aniversário de 5 anos do Driver Booster PRO</h2>
    <!-- title -->
    <h1 class="title">Aproveite <b>35% de Desconto</b> Enquanto Durar a Promoção!</h1>
    <!-- container -->
    <div class="container clearfix">
      <!-- db-box -->
      <img class="dbbox fl" src="<?php echo $pResUrl;?>images/banner-db.png" alt="">
      <!-- details -->
      <div class="details fr">
        <h3>Driver Booster 6 PRO</h3>
        <!-- price -->
        <p class="price">Só por <strong>R$ 79,99</strong> original <del>R$ 129,99</del></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db63pc7999&ref=pt_db63pcpurchase1808&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6pcpurchase1808-pt');">
          Comprar Agora
        </a>
        <!-- attention -->
        <p class="attention">1 Ano de Assinatura / 3 PCs</p>
        <!-- countdown -->
        <p class="countdown">
          <span>Oferta termina em:</span>&nbsp;
          <strong>00</strong>h:&nbsp;
          <strong>00</strong>m:&nbsp;
          <strong>00</strong>s:&nbsp;
          <strong class="ms">000</strong>ms
        </p>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- feature start -->
<div class="feature wrapper clearfix">
  <!-- title -->
  <h3>Novas Funções e Melhorias que Valem a Pena Ser Testadas</h3>
  <!-- Muito Mais Drivers -->
  <dl class="fl clearfix">
    <dt class="fl"><img src="<?php echo $pResUrl;?>images/muito-mais-drivers.png" alt=""></dt>
    <dd class="fl">
      <h3>Muito Mais Drivers</h3>
      <p class="warning">Apenas disponível para Pro</p>
      <p class="describe">
        Conte com um banco de dados de mais de 3.000.000<br>
        de drivers e componentes para encontrar drivers<br>
        mais raros.
      </p>
    </dd>
  </dl>
  <!-- Atualização Automática -->
  <dl class="fr clearfix">
    <dt class="fl"><img src="<?php echo $pResUrl;?>images/atualizacao-automatica.png" alt=""</dt>
    <dd class="fl">
      <h3>Atualização Automática</h3>
      <p class="warning">Apenas disponível para Pro</p>
      <p class="describe">
        Atualiza automaticamente os drivers para um<br>
        melhor funcionamento dos seus dispositivos e<br>
        menos travamentos.
      </p>
    </dd>
  </dl>
  <!-- Backup Automático -->
  <dl class="fl clearfix">
    <dt class="fl"><img src="<?php echo $pResUrl;?>images/backup-automatico.png" alt=""></dt>
    <dd class="fl">
      <h3>Backup Automátic</h3>
      <p class="warning">Apenas disponível para Pro</p>
      <p class="describe">
        Desfrute de backups automáticos na Nuvem ou no<br>
        HD para prevenir qualquer problema inesperado no<br>
        seu sistema.
      </p>
    </dd>
  </dl>
  <!-- Velocidade Máxima -->
  <dl class="fr clearfix">
    <dt class="fl"><img src="<?php echo $pResUrl;?>images/velocidade-maxima.png" alt=""></dt>
    <dd class="fl">
      <h3>Velocidade Máxima</h3>
      <p class="warning">Apenas disponível para Pro</p>
      <p class="describe">
        Obtenha a velocidade máxima de download e<br>
        desfrute de prioridade para baixar os últimos<br>
        drivers.
      </p>
    </dd>
  </dl>
</div>
<!-- feature end -->

<!-- project start -->
<div class="project wrapper clearfix">
  <!-- title -->
  <h3>Sem a Versão PRO, Você Poderá Lidar com:</h3>
  <!-- PC Problemático -->
  <dl class="fl">
    <dt><img src="<?php echo $pResUrl;?>images/pc-problematico.png" alt=""></dt>
    <dd>
      <h3>PC Problemático</h3>
      <p>
        Sem drivers atualizados ou adequados, seu<br>
        computador não rodará bem <span class="underline">e travamentos<br>
          e congelamentos </span>podem se tornar<br>
        constantes.
      </p>
    </dd>
  </dl>
  <!-- Péssimo Desempenho de Jogo -->
  <dl class="fl">
    <dt><img src="<?php echo $pResUrl;?>images/pessimo-desempenho-de-jogo.png" alt=""></dt>
    <dd>
      <h3>Péssimo Desempenho de Jogo</h3>
      <p>
        A falta de componentes podem fazer que seu<br>
        jogo não seja carregado com sucesso. Já drivers<br>
        desatualizados podem <span class="underline">afetar os gráficos</span> e outras<br>
        partes do jogo.
      </p>
    </dd>
  </dl>
  <!-- Hardware Incompatível -->
  <dl class="fl">
    <dt><img src="<?php echo $pResUrl;?>images/hardware-incompativel.png" alt=""></dt>
    <dd>
      <h3>Hardware Incompatível</h3>
      <p>
        Hardware como mouse, keyboard e áudio<br>
        podem não funcionar bem entre si por causa<br>
        de <span class="underline">drivers faltantes ou defeituosos,</span> que afeta<br>
        o desempenho do PC.
      </p>
    </dd>
  </dl>
</div>
<!-- project end -->

<!-- betweenbuy start -->
<div class="betweenbuy">
  <div class="wrapper">
    <!-- title -->
    <h3>Tudo isso com Suporte Técnico 24 horas por Dia ao seu Dispôr</h3>
    <!-- subtitle -->
    <h4>Assine por um ano e ganhe Driver Booster Pro para mais 2 PCs</h4>
    <!-- price -->
    <p class="price white"><strong>R$ 79,99</strong> (ou 6x de 13,33)</p>
    <!-- buybtn -->
    <a class="buybtn white"
       href="https://www.iobit.com/buy.php?product=pt-db63pc7999&ref=pt_db63pcpurchase1808&refs=pt_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6pcpurchase1808-pt');">
      Comprar Agora
    </a>
  </div>
</div>
<!-- betweenbuy end -->

<!-- review start -->
<div class="review wrapper clearfix">
  <!-- title -->
  <h3>
    Driver Booster Pro já atualizou os drivers de mais de <strong class="buyNum"><?php echo $buyNum ?></strong> de PCs.<br>
    Chegou a hora de melhorar o seu PC.
  </h3>
  <!-- Myo Thuya -->
  <dl class="fl">
    <dt><img src="<?php echo $pResUrl;?>images/myo-thuya.png" alt=""></dt>
    <dd>
      <h4>Myo Thuya</h4>
      <p>
        “Eu não acreditava antes de usar, mas<br>
        depois de testá-lo adorei. Meu PC está<br>
        mais estável, rápido e seguro do que há 8<br>
        meses atrás. Muito obrigado."
      </p>
    </dd>
  </dl>
  <!-- Wayne Bowler -->
  <dl class="fr">
    <dt><img src="<?php echo $pResUrl;?>images/wayne-bowler.png" alt=""></dt>
    <dd>
      <h4>Wayne Bowler</h4>
      <p>
        “Funcionou perfeitamente. Fácil de usar,<br>
        eficiente e intuitivo. Este programa vai<br>
        ficar na minha caixa de ferramentas para<br>
        sempre... Bom trabalho!"
      </p>
    </dd>
  </dl>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison wrapper clearfix">
  <!-- Comparação dos produtos: -->
  <ul class="fl cdp">
    <li class="head">
      Comparação dos produtos:
    </li>
    <!-- 01 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-02.png" alt=""></i>
      <span>Verifica e atualiza drivers desatualizados com 1 Clique</span>
    </li>
    <!-- 02 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-03.png" alt=""></i>
      <span class="red">Destrava a velocidade máxima de atualização de drivers</span>
    </li>
    <!-- 03 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-11.png" alt=""></i>
      <span class="red small">Banco de Dados 200% maior para atualizar drivers raros e<br>
        obsoletos</span>
    </li>
    <!-- 04 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-12.png" alt=""></i>
      <span>Reduz o travamento e falhas do sistema para um melhor desempenho</span>
    </li>
    <!-- 05 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-13.png" alt=""></i>
      <span class="green small">Download e instalação automáticos de drivers durante o tempo<br>
      ocioso do sistema</span>
    </li>
    <!-- 06 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-07.png" alt=""></i>
      <span>Backup automático de todos os drivers para restauração segura</span>
    </li>
    <!-- 07 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-14.png" alt=""></i>
      <span class="red small">Prioridade Na Atualização De Componentes De Jogos<br>
      Para Melhor Experiência De Jogo </span>
    </li>
    <!-- 08 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-08.png" alt=""></i>
      <span>Corrige erros de dispositivos para um PC mais estável</span>
    </li>
    <!-- 09 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-09.png" alt=""></i>
      <span>Atualiza automaticamente para a última versão</span>
    </li>
    <!-- 10 -->
    <li>
      <i><img src="<?php echo $pResUrl;?>images/icon-10.png" alt=""></i>
      <span>Suporte técnico gratuito 24/7</span>
    </li>
  </ul>
  <!-- Sua versão ATUAL -->
  <ul class="fl face sva">
    <li class="head">
      <span>
        Sua versão<br>
        ATUAL
      </span>
    </li>
    <li class="right"><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
  </ul>
  <!-- A versão PRO ATIVADA -->
  <ul class="fr face avpa">
    <li class="head">
      <span>
        A versão PRO<br>
        ATIVADA
      </span>
    </li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
    <li><i></i></li>
  </ul>
</div>
<!-- comparison end -->

<!-- bottombuy start -->
<div class="bottombuy wrapper clearfix">
  <!-- title -->
  <h3>Assine por um ano e ganhe Driver Booster Pro para mais 2 PCs extras</h3>
  <!-- countdown -->
  <p class="countdown">
    <span>Oferta termina em:</span>&nbsp;
    <strong>00</strong>h:&nbsp;
    <strong>00</strong>m:&nbsp;
    <strong>00</strong>s:&nbsp;
    <strong class="ms">000</strong>ms
  </p>
  <!-- dbbox -->
  <img class="fl" src="<?php echo $pResUrl;?>images/bottombuy-db.png" alt="">
  <!-- details -->
  <div class="details fl">
    <!-- price -->
    <p class="price white"><strong>R$ 79,99</strong> (ou 6x de R$ 13,33)</p>
    <!-- buybtn -->
    <a class="buybtn white"
       href="hhttps://www.iobit.com/buy.php?product=pt-db63pc7999&ref=pt_db63pcpurchase1808&refs=pt_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6pcpurchase1808-pt');">
      Comprar Agora
    </a>
    <!-- attention -->
    <p class="attention white">Economize <strong>R$ 50,00</strong></p>
  </div>
</div>
<!-- bottombuy end -->

<!-- service start -->
<div class="service wrapper clearfix">
  <!-- Garantia de Reembolso -->
  <dl class="garantia fl">
    <dt><img src="<?php echo $pResUrl;?>images/money-back.png" alt=""></dt>
    <dd>Garantia de Reembolso</dd>
  </dl>
  <!-- Formas de Pagamento -->
  <dl class="formas fl">
    <dt><img src="<?php echo $pResUrl;?>images/formas.png" alt=""></dt>
    <dd>Formas de Pagamento</dd>
  </dl>
  <!-- Pagamento 100% Seguro -->
  <dl class="pagamento fr">
    <dt><img src="<?php echo $pResUrl;?>images/godaddy-secure.png" alt=""></dt>
    <dd>Pagamento 100% Seguro</dd>
  </dl>
</div>
<!-- service end -->

<!-- footer start -->
<div class="footer wrapper">
  <p class="notes">
    Observe:<br>
    1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.
  </p>
  <p class="copyright">Copyright ©2005 - 2018 IObit. Todos os Direitos Reservados</p>
</div>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "agosalept.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 30000);
      }
    });
  }
  setTimeout('getBuyNum()', 30000);
</script>

</body>
</html>