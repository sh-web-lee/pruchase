<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
$refStrA = 'db-ac-new';
$refStrB = 'db-ac-newb';
$refStrC = 'db-ac-newc';
if(in_array($_GET['st'],array('ascu_acdb','asc_acdb'))){
  $refStrA.='-'.$_GET['st'];
  $refStrB.='-'.$_GET['st'];
  $refStrC.='-'.$_GET['st'];
}
include $pRootUrl.'include/common.inc.php';
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>85% de Desconto no Driver Booster PRO - IObit</title>
  <meta name="Copyright" content="IObit">
  <meta name="description" content="Oferta Exclusiva para Usuários PRO da IObit. Tenha seus Drivers e Componentes de Jogos Atualizados!">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
      <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
    </a>
    <div class="title">
      <h1>Driver Booster 8 PRO</h1>
      <p>O melhor atualizador de drivers para atualizar drivers do PC com facilidade, segurança e rapidez.</p>
    </div>
    <div class="offer clearfix">
      <img class="fl" src="<?php echo getStaticUrl('images/boxshot.png')?>" alt="Driver Booster 7 PRO">
      <div class="discount fl">
        <h2>85% OFF</h2>
        <p>Exclusive para Usuários PRO da IObit</p>
      </div>
    </div>
    <div class="pricebox">
      <dl class="price">
        <dt>APENAS: <strong>R$ 32,99 </strong><del>R$ 239,90</del></dt>
        <dd>
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=pt-db8-ac&ref=pt_db-ac-register&aff=<?php echo $_GET['aff']?>&refs=pt_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbac-newa');">
            <div class="inner">
              <i class="all-icons"></i>
              <span>Ativar Agora</span>
            </div>
          </a>
        </dd>
        <dd>1 Ano / 1 PC</dd>
      </dl>
    </div>
  </div>
</div>
<!-- banner end -->

<!-- container start -->
<!-- feature start -->
<div class="feature wrapper">
  <h2>O que o Driver Booster PRO pode fazer por você?</h2>
  <div class="clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_01.png" alt=""></dt>
      <dd>
        <h3>Maior Banco de Dados de Drivers</h3>
        <p>Detecta e atualiza mais de 4.500.000 drivers com 1-clique para aumentar o desempenho e estabilidade de seu computador.</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_02.png" alt=""></dt>
      <dd>
        <h3>Download Rápido e Automático</h3>
        <p>Aproveite maior velocidade e downloads automáticos durante o tempo ocioso do sistema.</p>
      </dd>
    </dl>
  </div>
  <div class="clearfix">
    <dl>
      <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_03.png" alt=""></dt>
      <dd>
        <h3>Melhor Experiência Melhor de Jogo</h3>
        <p>Melhora desempenho de jogos com últimos drivers Game Ready e os necessários componentes de jogos</p>
      </dd>
    </dl>
    <dl class="right">
      <dt><img src="<?php echo $pResUrl; ?>images/feature_icons_04.png" alt=""></dt>
      <dd>
        <h3>Atualização Segura de Drivers</h3>
        <p>Faz backup automático de drivers anteriores antes da atualização.</p>
      </dd>
    </dl>
  </div>
</div>
<!-- feature end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Reconhecido pela Mídia Especializada</h2>
    <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
  </div>
</div>
<!-- awards end -->

<!-- review start -->
<div class="review wrapper">
  <div class="content">
    <dl class="active">
      <dt>
        <h3>Opinião da Mídia</h3>
      </dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        "A IObit tem muitos utilitários e o Driver Booster Pro, que atualiza seus drivers automaticamente, é um dos melhores. A função central do Driver Booster PRO é ainda mais atraente graças à inclusão de múltiplas licenças por um preço bem amigável, assim como de uma interface personalizável que mostra informações específicas relacionadas ao hardware. Os competidores Ashampoo Driver Updater and Slimware Utilities Driver Update fazem um bom trabalho, mas IObit Driver Booster Pro é o melhor da sua categoria."
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>Opinião do Usuário</h3>
      </dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        "Com Driver Booster, eu consigo saber facilmente quais drivers estão desatualizados e posso atualizá-los com facilidade. Além disso, me ajuda a reparar erros com de e rede. Eu não acreditava antes de usar, mas depois de testá-lo eu o adorei, pois meu PC está mais estável, rápido e seguro do que 8 meses atrás. Muito obrigado, IObit."
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>Opinião do Usuário</h3>
      </dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        "Driver Booster é um aplicativo sensacional. Se você é como eu e tem diversos aplicativos e dispositivos e não tem tempo para atualizá-los manualmente, eu recomendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveniência.”
      </dd>
    </dl>
    <dl>
      <dt>
        <h3>Opinião do Usuário</h3>
      </dt>
      <dd>
        <h4></h4>
      </dd>
      <dd>
        "Esse é o melhor atualizador de drivers disponíveis. Microsoft já me confundiu algumas vezes me sugerindo atualizações que não funcionaram com meu computador, mas este programa sabe quais atualizações eu preciso sem causar qualquer conflito. Funcionou perfeitamente. Fácil de usar, eficiente e intuitivo. Este programa vai ficar na minha caixa de ferramentas para sempre... Bom trabalho!"
      </dd>
    </dl>
  </div>
  <ul class="users clearfix">
    <li class="active">
      <a href="https://www.pcmag.com/review/351094/iobit-driver-booster-pro" target="_blank">
        <div class="pic"><img src="<?php echo $pResUrl; ?>images/pc.png" alt="PC Magazine"></div>
        <p>PC Magazine</p>
      </a>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/myo-thuya.png" alt="Myo Thuya"></div>
      <p>Myo Thuya</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/adam-backlund.png" alt="Adam Backlund"></div>
      <p>Adam Backlund</p>
    </li>
    <li>
      <div class="pic"><img src="<?php echo $pResUrl; ?>images/wayne-bowler.png" alt="Wayne Bowler"></div>
      <p>Wayne Bowler</p>
    </li>
  </ul>
</div>
<!-- review end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper">
    <h2>Garante um Melhor Desempenho do PC e Melhor Experiência de Jogo</h2>
    <div class="pricebox">
      <dl class="price">
        <dt>APENAS: <strong>R$ 32,99 </strong><del>R$ 239,90</del></dt>
        <dd>
          <a class="buybtn bigbtn" href="https://www.iobit.com/buy.php?product=pt-db8-ac&ref=pt_db-ac-register&aff=<?php echo $_GET['aff']?>&refs=pt_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbac-newa');">
            <div class="inner">
              <i class="all-icons"></i>
              <span>Ativar Agora</span>
            </div>
          </a>
        </dd>
        <dd>1 Ano / 1 PC</dd>
      </dl>
    </div>
  </div>
</div>
<!-- footbuy end -->
<!-- container end -->

<!-- footer start -->
<div class="footer">© 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
<!-- footer end -->

<!-- floatlayer start -->
<div class="floatlayer" id="floatlayer">
  <div class="wrapper clearfix">
    <div class="left">
      <h2>OFERTA EXCLUSIVA</h2>
      <p><strong>85% DE DESCONTO</strong> para um PC Estável e com Boa Experiência de Jogo</p>
    </div>
    <div class="pricebox">
      <dl class="price fr">
        <dt><strong>R$ 32,99 </strong><del>R$ 239,90</del></dt>
        <dd>
          <a class="buybtn smallbtn" href="https://www.iobit.com/buy.php?product=pt-db8-ac&ref=pt_db-ac-register&aff=<?php echo $_GET['aff']?>&refs=pt_ac_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbac-newb');">
            <div class="inner">
              <i class="all-icons"></i>
              <span>Ativar Agora</span>
            </div>
          </a>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- floatlayer end -->

<script src="<?php echo $pResUrl; ?>script/script.js"></script>
</body>
</html>