<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getSales') {
  $date = $_GET['d'];
  $c_name = 'ptdbjun_p' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 36;
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
    }
  }
  setcookie($c_name, $packsNum, time() + 3600 * 24 *30);
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}
include $pRootUrl . 'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <title>Adquira Driver Booster 5 Pro para 3 PCs com 70% de desconto e leve Smart Defrag Pro grátis. Oferta Limitada da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,700" rel="stylesheet">
  <link rel="stylesheet" href="<?php echo getStaticUrl('style/style.css')?>"/>
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo"  href="https://www.iobit.com" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit" />
    </a>
    <div class="title">
      <p>UMA OFERTA ESPECIAL PARA VOCÊ</p>
      <h1>FESTEJANDO O 9 ANIVERSÁRIO</h1>
    </div>
    <div class="panel clearfix">
      <div class="box">
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="" />
        <div class="price">
          <p><strong><span class="current">99</span><small class="current-sm">,99</small></strong></p>
          <a class="buybtn banbtn"
             href="https://www.iobit.com/buy.php?product=pt-db51pc9999&ref=pt_db51pcsdpurchase1806&refs=pt_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db5pcpurchase1806-pt');">
            Comprar Agora
          </a>
        </div>
      </div>
      <div class="box red">
        <div class="gift clearfix">
          <span>Restam:</span>
          <ul id="countdown" class="countdown">
            <li><strong>00</strong> hor </li>
            <li><strong>09</strong> min </li>
            <li><strong>49</strong> seg </li>
            <li><strong>618</strong> ms* </li>
          </ul>
        </div>
        <div class="ds-box">
          <img src="<?php echo getStaticUrl('images/ds-box.png')?>" alt="" />
        </div>
        <div class="price">
          <p><strong><span class="current">79</span><small class="current-sm">,99</small></strong> <span><b>Só R$6,67 por mês</b><del class="original">269,98</del></span></p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-db53pcsd7999&ref=pt_db53pcsdpurchase1806&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db5pcpurchase1806-pt');">
            Aproveitar Agora!
          </a>
        </div>
      </div>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- payment start -->
<div class="payment">
  <div class="wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt="" /></div>
</div>
<!-- payment end -->

<!-- imf-message start -->
<div class="imf-message wrapper">
  <h2>Entenda porque Driver Booster é a escolha nº 1 de técnicos de informática e de usuários como você.</h2>
  <div class="clearfix box">
    <div class="left fl">
      <dl class="top">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" /></dt>
        <dd>
          <h3>Banco de Dados Maior</h3>
          <p>Conte com um banco de dados com mais de 1.000.000 de drivers e componentes para encontrar drivers mais obsoletos e raros.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt="" /></dt>
        <dd>
          <h3>Atualização mais Veloz</h3>
          <p>Obtenha a velocidade máxima de download  e baixe drivers no tempo ocioso do PC para economizar tempo.</p>
        </dd>
      </dl>
    </div>
    <div class="right fr">
      <dl class="top">
        <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" /></dt>
        <dd>
          <h3>Sistema mais Estável</h3>
          <p>Reduz o índice de travamentos e problemas em seu PC com os últimos drivers para cada dispositivo.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" /></dt>
        <dd>
          <h3>Backup Automático</h3>
          <p>Desfrute de backups automáticos na Nuvem ou no HD para prevenir qualquer problema inesperado.</p>
        </dd>
      </dl>
    </div>
  </div>
  <a href="javascript: void(0);" onclick="">
    Clique aqui e compare função por função a versão Free a versão Pro >
  </a>
</div>

<!-- imf-message end -->

<!-- donation start -->
<div class="donation">
  <div class="wrapper">
    <h2>Brinde Grátis apenas para a oferta de 3 PCs / 1 Ano </h2>
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt="" /></dt>
      <dd class="fl">
        <del>99,99</del> <strong>Grátis</strong>
        <p>Desfragmenta automaticamente seu PC e acelera a velocidade de acesso a arquivos!</p>
        <a class="blast" href="https://www.iobit.com/buy.php?product=pt-db53pcsd7999&ref=pt_db53pcsdpurchase1806&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db5pcpurchase1806-pt');">
          <b>Obtenha um brinde grátis</b> <i class="all-icons"></i>
          <span class="blast-box"></span>
          <span class="blast-box right"></span>
        </a>
      </dd>
    </dl>
  </div>
</div>
<!-- donation end -->

<!-- review start -->
<div class="user wrapper">
  <h2>Driver Booster Pro já atualizou os drivers de mais de <span>3.264.892</span> de PCs. <br> Chegou a hora de melhorar o seu PC.</h2>
  <div class="panel clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="" /></dt>
      <dd>
        <h3>Myo Thuya</h3>
        <p>“Eu não acreditava antes de usar, mas depois de testá-lo adorei. Meu PC está mais estável, rápido e seguro do que há 8 meses atrás. Muito obrigado."</p>
        <i class="all-icons">★★★★★</i>
      </dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/talal-hafez.png')?>" alt="" /></dt>
      <dd>
        <h3>Talal Hafez</h3>
        <p>Ao invés de procurar <span>individualmente por atualizações de</span> drivers, Driver Booster mantém <span>todos os drivers do meu PC</span> atualizados com apenas um-clique!</p>
        <i class="all-icons">★★★★★</i>
      </dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt="" /></dt>
      <dd>
        <h3>Wayne Bowler</h3>
        <p>“Funcionou perfeitamente. Fácil de usar, eficiente e intuitivo. Este programa vai ficar na minha caixa de ferramentas para sempre... Bom trabalho!"</p>
        <i class="all-icons">★★★★★</i>
      </dd>
    </dl>
  </div>
</div>

<!-- review end -->

<!-- comparison start -->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2" class="text">Comparação dos produtos:</th>
      <th class="space"></th>
      <th class="itema">
        <div class="box">
          <p>Sua versão </p>  ATUAL
          <img src="<?php echo getStaticUrl('images/cry.png')?>" alt="" />
        </div>
      </th>
      <th class="space"></th>
      <th class="itemb">
        <div class="box">
          <p>A versão PRO</p> ATIVADA
          <img src="<?php echo getStaticUrl('images/smile.png')?>" alt="" />
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Verifica e atualiza drivers desatualizados com 1 Clique</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Destrava a velocidade máxima de atualização de drivers<em>Melhorado</em></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue top">
        <span>Banco de Dados 200% maior para atualizar drivers raros e obsoletos</span>
        <em>Melhorado</em></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Reduz o travamento e falhas do sistema para um melhor desempenho</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">
        <span>Download e instalação automáticos de drivers durante o tempo ocioso do sistema </span>
        <em class="nuo">Novo</em>
      </td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Backup automático de todos os drivers para restauração segura</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue"><span>Prioridade Na Atualização De Componentes De Jogos Para Melhor Experiência De Jogo </span> <em>Melhorado</em></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/cop-icon-09.png"></td>
      <td class="virtue">Corrige erros de dispositivos para um PC mais estável </td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Atualiza automaticamente para a última versão</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Suporte técnico gratuito 24/7</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons line">√</i></td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper">
    <h2>Mantenha seus drivers sempre atualizados com apenas <b>R$ 6,67</b> por mês!</h2>
    <div class="offer">
      <div class="imgbox">
        <img class="pcs active" src="<?php echo getStaticUrl('images/ds-box.png')?>" alt="" />
        <img class="pc" src="<?php echo getStaticUrl('images/db-box-sm.png')?>" alt="" />
      </div>
      <ul class="fl">
        <li class="active pcs" data-num="1">3PCs/1 Ano<strong>-70%</strong></li>
        <li class="pc" data-num="0">1 PC/ 1 Ano</li>
      </ul>
      <div class="price fr">
        <div class="price-box">
          <strong><span class="current">79</span><small class="current-sm">,99</small></strong> <del class="original">269,98</del>
          <div class="discount-box">Economize <span class="discount">189,99</span></div>
        </div>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db53pcsd7999&ref=pt_db53pcsdpurchase1806&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db5pcpurchase1806-pt');">
          Aproveitar Agora!
        </a>
      </div>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <div class="service clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" /></dt>
        <dd>
          <h3>Garantia de Reembolso</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt="" /></dt>
        <dd>
          <h3>Pagamento 100% Seguro</h3>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/car.png')?>" alt="" /></dt>
        <dd>
          <h3>Atendimento 24 Horas</h3>
        </dd>
      </dl>
    </div>

    <dl class="annotation">
      <dt>Observe:</dt>
      <dd>1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.</dd>
    </dl>
    <p class="copyright">Copyright ©2005 - <?php echo date('Y')?> IObit.  Todos os Direitos Reservados</p>
  </div>
</div>
<!-- bottom end -->
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>