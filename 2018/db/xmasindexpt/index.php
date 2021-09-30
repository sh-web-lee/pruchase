<?php //	初始化
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

function microtime_float(){
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}
$reduceNum=47683478;
$buyNum = ceil(microtime_float() * 1000 / 30000)-$reduceNum;
$buyNum = number_format($buyNum);

$viewNum=rand(96,125);
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
  $date=$_GET['d'];
  $cName='frdboct'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>2){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=2;
    }
  }else{
    $packsNum=148;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum,'viewNum'=>$viewNum));
  exit();
}

if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
  'purchase-10','purchase-14','purchase-15','purchase-16',
  'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
  'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
  'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
  'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['st'],array('dbxmasr','db_xmas'))){
  $refStr.='-'.$_GET['st'];
}
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
if($_GET['to']=='purchase-6'){
  $ver=$_GET['ver'];
  if(preg_match('/^([0-9])\.([0-9])\.[0-9]\.[0-9]{3}/',$ver,$matches)){
    $verStr=$matches[1].$matches[2];
    $refStr.='-'.$verStr;
  }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" >
  <title>Adquira Driver Booster 6 Pro com 75% de desconto e leve um super brinde para cuidar dos discos do seu PC. Oferta Especial de Natal da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
    <?php echo $gJavascript['public']; ?>
    <?php echo $gJavascript['head']; ?>
</head>
<body>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <!-- logo -->
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <!-- title -->
    <h1>
      Venda Relâmpago Exclusiva de Natal
      A oferta mais baixa de 2018, pacotes limitados!
    </h1>
    <!-- content -->
    <div class="content clearfix">
      <!-- ribbon -->
      <i class="ribbon"></i>
      <!-- left-message -->
      <div class="left-message fl">
        <div>
          <img src="<?php echo $pResUrl;?>images/banner-db.png" alt="">
          <img class="db-reduce" src="<?php echo $pResUrl;?>images/banner-db-reduce.png" alt="">
          <img class="banner-off85" src="<?php echo $pResUrl;?>images/banner-off75.png" alt="">
        </div>
        <!-- surplus -->
        <p class="surplus"> Apenas <b class="one">0</b><b class="two">0</b><b class="three">0</b>  Pacotes Restantes</p>
      </div>
      <!-- right-message -->
      <div class="right-message fr">
        <!-- title -->
        <h3>
          Driver Booster 6 Pro - 1 ano / 3 PCs
          <span>+ Smart Defrag 6 Pro (Grátis!)</span>
        </h3>
        <hr>
        <!-- price -->
        <p class="price-del">De <del>R$ 399,89</del></p>
        <p class="price">
          6x de <strong><b>R$ 13,33</b></strong>
          <span>ou R$ <b>79,99</b> a vista</span>
        </p>
        <hr>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db63pcsd7999&ref=pt_db63pcsdpurchase1811<?php echo $refStr;?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811-pt')">
          COMPRAR AGORA
        </a>
        <!-- people-box -->
        <p class="people-box"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""/>Mais de <b class="people-num buyNum"><?php echo $buyNum;?></b> pessoas já compraram</p>
        <!-- payments -->
        <dl class="payments">
          <dd>Formas de Pagamento</dd>
          <dt><img src="<?php echo $pResUrl; ?>images/payments.png" alt=""></dt>
        </dl>
      </div>
    </div>
  </div>
</div>
<!-- banenr end -->

<!--hightlight start-->
<div class="imf-message wrapper">
  <h2>Otimize o desempenho do seu PC com a atualização dos seus drivers!</h2>
  <div class="clearfix box">
    <div class="left fl">
      <dl class="top">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" /></dt>
        <dd>
          <h3>Banco de Dados Maior</h3>
          <p>Conte com um banco de dados com mais de 3.000.000 de drivers e componentes para encontrar drivers mais obsoletos e raros.</p>
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
          <h3>Melhor Experiência de Jogo</h3>
          <p>Melhora a experiência de jogo através do suporte dos mais diversos componentes de jogos.</p>
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
  <a class="intro" href="javascript: void(0);" onclick="">
    Clique aqui e compare função por função a versão Free a versão Pro >
  </a>
</div>
<!-- hightlight end -->

<!-- gift-box start -->
<div class="gift-box">
  <div class="wrapper clearfix">
    <!-- gift-box title -->
    <h2>Brindes Grátis exclusivo apenas na venda exclusiva de Natal 2018</h2>
    <!-- SD -->
    <dl class="sd-box clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl;?>images/sd-box.png" alt=""></dt>
      <dd class="fl">
        <p>Une desfragmentação mais rápida à otimização do disco para uma<br>
          desfragmentação mais rápida de disco.</p>
        <p>Desfragmentação no boot para uma inicialização mais rápida do sistema</p>
        <h5><del>R$ 99,99</del> <span><b>R$ 0</b></span></h5>
      </dd>
    </dl>
    <!-- words -->
    <h4>  Corra, o brinde grátis está disponível em quantidade limitada!</h4>
    <p class="surplus"> Apenas <b class="packsNum"><?php echo $packsNum;?></b>  disponíveis hoje!</p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=pt-db63pcsd7999&ref=pt_db63pcsdpurchase1811<?php echo $refStr;?>&refs=pt_purchase_db"
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811-pt')">
      COMPRAR AGORA
    </a>
  </div>
</div>
<!-- gift-box end -->

<!-- user start -->
<div class="user clearfix">
  <div class="wrapper">
    <h2>
      Driver Booster Pro já atualizou os drivers de mais de <strong class="buy-num buy-num-bot"><?php echo $buyNum;?></strong>  de PCs. <span>Chegou a hora de melhorar o seu PC.</span>
    </h2>
    <ul class="user-list">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya" />
        <h4>Myo Thuya</h4>
        <p>
          "Com Driver Booster, eu consigo saber facilmente quais drivers estão desatualizados e posso atualizá-los com facilidade. Além disso, me ajuda a reparar erros como de rede. Eu não acreditava antes de usar, mas depois de testá-lo eu o adorei, pois meu PC está mais estável, rápido e seguro do que há 8 meses atrás. Muito obrigado, IObit."
        </p>
      </li>
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/talal-hafez.png')?>" alt="Talal Hafez" />
        <h4>Talal Hafez</h4>
        <p>
          "Uma verificação por dia mantém os drivers sempre atualizados. Ao invés de procurar individualmente por atualizações de drivers; Driver Booster mantém todos os drivers do meu PC atualizados com apenas um-clique! Driver Booster melhorou o meu PC para jogos, especialmente com os jogos mais recentes que precisam das últimas atualizações. Os produtos da IObit me mostram a verdadeira capacidade do meu pc. "
        </p>
      </li>
    </ul>
  </div>
</div>
<!-- user end -->

<!-- comparison-table start -->
<div class="comparison-table" id="compare">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th colspan="2">Conheça as vantagens do Driver Booster PRO</th>
      <th class="space"></th>
      <th class="itemb">Driver Booster FREE</th>
      <th class="space"></th>
      <th class="itema">Driver Booster PRO</th>
    </tr>
    </thead>
    <tbody>
    <!-- 01 -->
    <tr>
      <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
      <td class="virtue">Verifica e Identifica Automaticamente Drivers Desatualizados e em Falta</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 02 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
      <td class="virtue">Download e Atualização de Drivers Desatualizados com Apenas 1-Clique</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-star.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 03 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
      <td class="virtue">Velocidade Ilimitada na Atualização de Drivers</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 04 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
      <td class="virtue">Maior Banco de Dados para Atualizar Drivers Antigos e Mais Raros <sup>Melhorado</sup> </td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 05 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
      <td class="virtue">Reduz o Travamento e Falhas do Sistema para um Melhor Desempenho <sup class="nou">Novo</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 06 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
      <td class="virtue">Download e Instalação Automáticos de Drivers Durante o Tempo <br>
        Ocioso do Sistema <sup class="nou">Novo</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 07 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
      <td class="virtue">Backup Automático de Todos os Drivers para Restauração Segura</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 08 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
      <td class="virtue">Prioridade para Atualizar os Ùltimos Drivers Game Ready <sup class="nou">Novo</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 09 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
      <td class="virtue">Prioridade na Atualização de Componentes de Jogos para Melhor <br>
        Experiência de Jogo <sup>Melhorado</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 10 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
      <td class="virtue">Detecta e repara com eficácia erros em periféricos <sup class="nou">Novo</sup></td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 11 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
      <td class="virtue">Atualização Automática para Última Versão</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    <!-- 12 -->
    <tr>
      <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
      <td class="virtue">Suporte Técnico Gratuito 24/7</td>
      <td class="space"></td>
      <td class="itemb"><img src="<?php echo $pResUrl; ?>images/free-close.png"></td>
      <td class="space"></td>
      <td class="itema"><img src="<?php echo $pResUrl; ?>images/pro-star.png"></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison-table end -->

<!-- bottomcart start -->
<div class="bottomcart">
  <div class="wrapper">
    <div class="left-message">
      <img src="<?php echo $pResUrl;?>images/bottom-db.png" alt="">
      <img class="db-reduce" src="<?php echo $pResUrl;?>images/bottom-db-reduce.png" alt="">
    </div>
    <dl class="price-content">
      <dt>
        <h3>Só no Natal! Quantidade Limitada！</h3>
        <!-- price -->
        <p class="price">
          <strong>R$ 79,99</strong> <del>R$ 399,89</del>
        </p>
      </dt>
      <dd>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db63pcsd7999&ref=pt_db63pcsdpurchase1811<?php echo $refStr;?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1811-pt')">
          COMPRAR AGORA
        </a>
        <!-- attention -->
        <p class="attention"><i></i>Atenção, apenas <span class="packsNum"><?php echo $packsNum?></span> disponíveis</p>
      </dd>
    </dl>
  </div>
</div>
<!-- bottomcart end -->

<!--  footer start-->
<div class="footer">
  <!-- service -->
  <div class="service wrapper clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/moneyback.png" alt=""></dt>
      <dd><h3>Garantia de Reembolso</h3></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/formas.png" alt=""></dt>
      <dd><h3>Formas de Pagamento</h3></dd>
    </dl>
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dt>
      <dd><h3>Pagamento 100% Seguro</h3></dd>
    </dl>
  </div>
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Observe:</dt>
    <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
    <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
  </dl>
  <!-- copyright -->
  <p class="copyright">Copyright © 2005 - 2018 IObit. Todos os Direitos Reservados</p>
</div>
<!-- footer end -->

<script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
<script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
<!--<script src="--><?php //echo getStaticUrl('script/modernizr.min.js')?><!--"></script>-->
<!--<script src="--><?php //echo getStaticUrl('script/review-3d-carousel.min.js')?><!--"></script>-->
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>