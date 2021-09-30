<?php
//一下为必须开头代码片段
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

$refStr = empty($_GET['st']) ? '' : ('-' . $_GET['st']);
$refStr .= empty($_GET['ref']) ? '' : ('-' . $_GET['ref']);
$refStr .= empty($_GET['to']) ? '' : ('-' . $_GET['to']);
$refStr .= empty($_GET['insur']) ? '' : ('-' . $_GET['insur']);
$refStr .= empty($_GET['pop']) ? '' : ('-' . $_GET['pop']);
$refStr .= empty($_GET['r']) ? '' : ('-' . $_GET['r']);
if (in_array($_GET['type'], array('pro', 'giveawayexp'))) {
    $refStr .= '-' . $_GET['type'];
}
$refStr .= '-i' . $_GET['instd'] . '-u' . $_GET['usr'] . '-l' . $_GET['litype'] . '-e' . $_GET['expd'];
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
    $ver=$matches[1][0].$matches[1][1];
    $refStr.='-'.$ver;
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira Advanced SystemCare 14 Pro com 65% de desconto para 3 PCs e leve um super brinde. Oferta Limitada da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:600,700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>

</head>
<body>
<!-- banner -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>Mais Barato que Comprar um Novo Computador</h1>
    <!-- panel -->
    <div class="panel clearfix">
      <!-- 1pc -->
      <ul>
        <!-- box -->
        <li class="box">
          <img src="<?php echo $pResUrl;?>images/asc-1pc.png" alt="Advanced System Care PRO">
          <p>1 ANO / 1 PC</p>
        </li>
        <!-- off -->
        <li class="off">
          <h2>40% OFF</h2>
          <p>(De: <del>129,99</del> Por: 74,99)</p>
        </li>
        <!-- price -->
        <li class="price">
          <p>ou 6x de <strong>R$ 12,49</strong></p>
          <p>Sem juros no cartão</p>
          <!-- 1pc buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-asc141pc7499&ref=pt_asc14purchase1pc1908<?php echo $refStr;?>&refs=pt_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1908-pt');">
            COMPRAR AGORA
          </a>
        </li>
      </ul>
      <!-- 3pcs -->
      <ul class="asc3pcs">
        <!-- box -->
        <li class="box">
          <img src="<?php echo $pResUrl;?>images/asc-3pc.png" alt="Advanced System Care PRO + Smart Defrag PRO">
          <p>1 ANO / 3 PCs + Brinde</p>
        </li>
        <!-- off -->
        <li class="off">
          <h2>65% OFF</h2>
          <p>(De: <del>229,98</del> Por: 79,99)</p>
        </li>
        <!-- price -->
        <li class="price">
          <p>ou 6x de <strong>R$ 13,33</strong></p>
          <p>Sem juros no cartão</p>
          <!-- 3pcs buybtn -->
          <a class="buybtn red"
             href="https://www.iobit.com/buy.php?product=pt-asc143pcsd7999&ref=pt_asc14purchase3pcsd1908<?php echo $refStr;?>&refs=pt_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1908-pt');">
            COMPRAR AGORA
          </a>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature wrapper clearfix">
  <!-- feature-title -->
  <h2>Conheça 3 vantagens em atualizar para PRO</h2>
  <!-- feature-machine -->
  <div class="machine">
    <img src="<?php echo $pResUrl;?>images/feature-mac01.png" alt="">
    <img src="<?php echo $pResUrl;?>images/feature-mac02.png" alt="">
  </div>
  <!-- feature-list -->
  <ul>
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
        <dd>
          <h3>Seu PC Rodando como Novo</h3>
          <p>Assista vídeos, jogue e trabalhe com múltiplos programas ao mesmo tempo.</p>
          <p>Utiliza inteligência artifical para otimizar completamente o desempenho do seu computador lento.</p>
        </dd>
      </dl>
    </li>
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd>
          <h3>Internet até 300% Mais Veloz*</h3>
          <p>Acesse o seu conteúdo favorito com mais velocidade.</p>
          <p>Gaste menos tempo carregando páginas e vídeos.</p>
        </dd>
      </dl>
    </li>
    <li>
      <dl class="clearfix">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>Você Vai Navegar Sem Medo</h3>
          <p>Limpeza automática de rastros de privacidade.</p>
          <p>Protege o roubo de seus dados por spywares, adwares e malwares.</p>
        </dd>
      </dl>
    </li>
  </ul>
</div>
<!-- end feature -->

<!-- gift -->
<div class="gift">
  <div class="wrapper">
    <!-- gift-title -->
    <h2>Na Compra de 3 PCs, Leve um Brinde para um Desempenho Superior de seu HD ou SSD</h2>
    <!-- gift-isu -->
    <img src="<?php echo $pResUrl;?>images/gift-isu.png" alt="IObit Software Updater PRO">
    <!-- gift-list -->
    <dl>
      <dd>Desfragmenta automaticamente seu PC e acelera a velocidade de acesso aos arquivos.</dd>
      <dd>Desfragmenta no boot do sistema incluindo arquivos de registro e especificados por você.</dd>
    </dl>
  </div>
</div>
<!-- end gift -->

<!-- review -->
<div class="review wrapper clearfix">
  <!-- review-title -->
  <h2>Advanced SystemCare Pro já acelerou mais de 5.600.114 de PCs.</h2>
  <!-- Brasil -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/brasil.png" alt="Brasil"></dt>
    <dd>
      <h4>Sávio da Rocha Lobo</h4>
      <p>
        Tenho usado o Advanced SystemCare por um bom tempo e já são mais de 5 anos deixando o meu computador rodando como se ele tivesse acabado de sair da caixa e o programa só tem ficado melhor a cada versão.
      </p>
      <hr>
      <cite>Brasil</cite>
    </dd>
  </dl>
  <!-- Estados Unidos -->
  <dl>
    <dt><img src="<?php echo $pResUrl;?>images/estados-unidos.png" alt="Estados Unidos"></dt>
    <dd>
      <h4>Stephen H.Littleton</h4>
      <p>
        Advanced SystemCare deu vida nova ao meu PC! Logo de cara, eu percebi uma diferença notável. A inicialização estava mais rápida, os problemas que estavam causando travamentos e lentidão desapareceram!
      </p>
      <hr>
      <cite>Estados Unidos</cite>
    </dd>
  </dl>
  <!-- media -->
  <div class="media clearfix">
    <h2>Veja o que a mídia especializada tem a dizer</h2>
    <img src="<?php echo $pResUrl;?>images/baixaki.png" alt="Baixaki">
    <P>
      Em nossos testes, notamos que o Advanced SystemCare tem uma eficiência excepcional. <br>
      Ele consegue encontrar problemas para resolver no seu computador que realmente são difíceis de imaginar.
    </P>
  </div>
  <!-- award -->
  <div class="award">
    <h2>Recomendado também por</h2>
    <img src="<?php echo $pResUrl;?>images/award.png" alt="">
  </div>
</div>
<!-- end review -->

<!-- comparison -->
<div class="comparison wrapper">
  <table>
    <thead>
      <tr>
        <th colspan="2" class="text">Compare as funções da versão Free e Pro</th>
        <th class="space"></th>
        <th class="itema">Advanced SystemCare <br> PRO</th>
        <th class="space"></th>
        <th class="itemb">Advanced SystemCare <br> FREE</th>
      </tr>
    </thead>
    <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""></td>
        <td class="text">Limpeza, Reparo e Otimização Básica de Sistema</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="gray"></i></td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""></td>
        <td class="text">Proteção Básica contra Ameaças de Segurança</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="gray"></i></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""></td>
        <td class="text">Sistema Mais Rápido com Limpeza Automática de RAM</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon15.png" alt=""></td>
        <td class="text">Modo de AI verifica inteligentemente seu PC para limpeza e otimização definitivas</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""></td>
        <td class="text">Ajuste Definitivo do Sistema para um Desempenho Superior</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""></td>
        <td class="text">Internet 300% Mais Rápida com Internet Booster</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""></td>
        <td class="text">Inicialização até Duas Vezes Mais Rápida com o Gerenciador de Inicializações</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""></td>
        <td class="text">Limpeza Profunda dos Registros do Windows</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon08.png" alt=""></td>
        <td class="text">Desempenho Máximo do Disco Rígido</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon09.png" alt=""></td>
        <td class="text">Otimização Agendada ou em Tempo Real com Manutenção Automática</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 10 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon10.png" alt=""></td>
        <td class="text">Detecção Completa contra Ameaças de Segurança</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 11 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon11.png" alt=""></td>
        <td class="text">Experiência Online Segura com Proteção de Navegação</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 12 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon12.png" alt=""></td>
        <td class="text">Limpeza Automática de  Rastros com Anti-rastreamento do Navegador</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 13 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon13.png" alt=""></td>
        <td class="text">Atualização Automática para a Última Versão</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 14 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon14.png" alt=""></td>
        <td class="text">Suporte Técnico Gratuito 24/7</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
    </tbody>
  </table>
</div>
<!-- end comparison -->

<!-- bottombuy -->
<div class="bottombuy">
  <div class="wrapper clearfix">
    <!-- bottombuy-asc -->
    <div class="box">
      <img src="<?php echo $pResUrl;?>images/bottombuy-asc.png" alt="Advanced SystemCare PRO">
    </div>
    <ul>
      <!-- 3pcs -->
      <li class="active"
          data-url="https://www.iobit.com/buy.php?product=pt-asc143pcsd7999&ref=pt_asc14purchase3pcsd1908<?php echo $refStr;?>&refs=pt_purchase_asc"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'asc123pcpurchase1908-pt');"
          data-price="79"
          data-original="229,98">
        Pacote para 3 PCs
        <strong>65% OFF</strong>
      </li>
      <!-- 1pc -->
      <li class=""
          data-url="https://www.iobit.com/buy.php?product=pt-asc141pc7499&ref=pt_asc14purchase1pc1908<?php echo $refStr;?>&refs=pt_purchase_asc"
          data-ga="ga('send', 'event', 'ascbuy', 'buy', 'asc123pcpurchase1908-pt');"
          data-price="74"
          data-original="129,99">
        Pacote para 1 PC
        <strong>40% OFF</strong>
      </li>
    </ul>
    <dl>
      <dd>
        <p class="price">R$ <strong>79</strong>,99 <del> 229,98</del></p>
      </dd>
      <dd>
        <!-- 3pcs buybtn -->
        <a class="buybtn red"
           href="https://www.iobit.com/buy.php?product=pt-asc143pcsd7999&ref=pt_asc14purchase3pcsd1908<?php echo $refStr;?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc123pcpurchase1908-pt');">
          COMPRAR AGORA
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- end bottombuy -->

<!-- service -->
<div class="service wrapper clearfix">
  <dl>
    <dd>Garantia de Reembolso</dd>
    <dt><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
  </dl>
  <dl>
    <dd>Atendimento 24 horas</dd>
    <dt><img src="<?php echo $pResUrl;?>images/service.png" alt=""></dt>
  </dl>
  <dl>
    <dd>Site Seguro</dd>
    <dt><img src="<?php echo $pResUrl;?>images/google.png" alt=""></dt>
  </dl>
</div>
<!-- end service -->

<!-- footer -->
<div class="footer wrapper">
  <dl>
    <dd>Observe:</dd>
    <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
    <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
  </dl>
  <p class="copyright">Copyright 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
</div>
<!-- end footer -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>