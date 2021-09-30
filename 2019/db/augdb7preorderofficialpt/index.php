<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptdbrc_p' . $date;
  $c_name_t='ptdbrc_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(78,98);
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

$viewNum=rand(99,156);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
include $pRootUrl.'include/common.inc.php';

function paramDeal($num){
  return (intval($num)>0)?('<span class="dataNum">'.number_format(intval($num)).'</span>'):'';
}

$paramData=json_decode(base64_decode($_GET['udata']));

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title> Adquira Driver Booster 7 Pro por R$ 69,99 na Pré-Venda Limitada</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>A Pré-Venda do Driver Booster 7 PRO Começa Agora</h1>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right fl">
          <h2>APENAS PARA OS PRIMEIROS <big>1000</big> CLIENTES DO DIA</h2>
          <div class="numbox">
            <h3>
              Apenas 
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              Restantes
            </h3>
            <p><span class="buyNum"><?php echo $viewNum; ?></span> usuários estão vendo agora</p>
          </div>
          <ul class="price clearfix">
            <li class="first"><strong><small>R$ </small>69<small>,99</small></strong></li>
            <li class="last">
              <a class="buybtn"
                 href="https://www.iobit.com/buy.php?product=pt-db7preorder6999&ref=pt-db7preorder6999official<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderofficial-pt');">
                Comprar Agora
              </a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- function-wrap start -->
  <div class="function-wrap">
    <div class="wrapper">
      <h2 class="why">
        Entenda como o novo Driver Booster 7 PRO <br> cuida do seu PC: <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
      </h2>
      <div class="db-message">
        <h2>Processo de Atualização Inteligente para manter mais de <span>3.500.000</span> drivers atualizados</h2>
        <div class="screenshot">
          <img src="<?php echo getStaticUrl('images/screenshot.png')?>" alt="" class="img-box">
          <div class="maglist one">
            <h3>Atualização <big>Automática</big> de Drivers</h3>
            <span class="tag">Apenas PRO</span>
            <p>Verifica automaticamente os drivers em período agendados e atualiza automaticamente os drivers desatualizados no modo ocioso do sistema.</p>
            
          </div>
          <div class="maglist two">
            <h3>Atualização <big>Rápida</big> <br> de Drivers</h3>
            <span class="tag">Apenas PRO</span>
            <p>
              Destrava a velocidade maxima de download de drivers para economizer seu tempo. 
            </p>
          </div>
          <div class="maglist three">
            <h3>Atualização <big>Segura </big> de Drivers </h3>
            <span class="tag">Apenas PRO</span>
            <p>
             Cria um ponto de restauração do sistema e faz backup de drivers anteriores para garantir uma atualização segura e prevenir problemas inesperados.
            </p>
          </div>
        </div>
      </div>
      <div class="db-feature">
        <h2>Mais do que um Atualizador de Drivers</h2>
        <div class="featlist one">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
            <h3>Melhora o Desempenho <br>   de Jogos</h3>
            <span class="tag">Apenas PRO</span>
            <p>
              Mantém drivers game-ready atualizados e recomenda componentes de jogos adequados para melhorar o carregamento e desempenho de jogos.
            </p>
          </div>
        </div>
        <div class="featlist two">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
            <h3>Resolve Problemas de Hardware</h3>
            <span class="tag">Apenas PRO</span>
            <p>
              Detecta e repara erros de dispositivo como o Windows ser incapaz de detectar algum dispositivo, entre outros erros.
            </p>
          </div>
        </div>
        <div class="featlist three">
          <div class="inner">
            <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
            <h3>Atuação Silenciosa </h3>
            <span class="tag red">Novo</span>
            <p>
              Silencia automaticamente todas as notificações do Driver Booster quando um aplicativo de tela-cheia ou um aplicativo previamente especificado estiver rodando.
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- function-wrap end -->

  <!-- review start -->
  <div class="review wrapper">
    <h2>O Que Usuários como Você Dizem</h2>
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>PC Magazine</h2>
            <h4>Análise da Mídia</h4>
            <p>
              A IObit faz muitos utilitários e o Driver Booster PRO, que atualiza automaticamente os drivers do computador, é um dos melhores. A funcionalidade central do Driver Booster PRO é feita ainda mais atraente graças a inclusão de múltiplas licenças por um preço acessível, e a interface personalizável que faz um ótimo trabalho em mostrar as informações específicas relacionadas ao hardware. Os competidores Ashampoo Driver Updater e Slimware Utilities DriverUpdate oferecem funcionalidades competitivas, mas IObit Driver Booster PRO lidera o ramo.
            </p>
            <cite></cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/maurice-lovell.png')?>" alt="Maurice Lovell"></dt>
          <dd>
            <h2>Maurice Lovell</h2>
            <h4>Análise de Usuário</h4>
            <p>
              Eu já uso o Driver Booster Pro por alguns anos para atualizar drivers desatualizados. No passado eu já tentei outros programas como o Driver Magician, mas nunca encontrei nada como o Driver Booster Pro, é leve, funcional e encontrou os últimos drivers para todos os meus dispositivos. No presente, eu o uso no Windows 10 Home. 
            </p>
            <cite>Nova Iorque, EUA</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/jean-pierre-fillion.png')?>" alt="Jean Pierre Fillion"></dt>
          <dd>
            <h2>Jean Pierre Fillion</h2>
            <h4>Análise de Usuário</h4>
            <p>
              Fiquei muito impressionado com o que o Driver Booster é capaz! Eu precisava de um programa para resolver alguns problemas com dispositivos que tinham seus drivers desatualizados e o Driver Booster correspondeu as minhas expectativas. O meu PC já melhorou bastante e estou ansioso para atualizar os dispositivos do PC inteiro.
            </p>
            <cite>Reims, França</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></dt>
          <dd>
            <h2>Carlos Alexandre Veríssimo</h2>
            <h4>Análise de Usuário</h4>
            <p>
              O Driver Booster me ajudou a resolver problemas com meu laptop gamer. As vezes quando eu tentava atualizar os drivers, o computador apresentava problemas e eu tinha que formatar o PC para restaurar as funções, agora com o Driver Booster Pro não acontece mais. Fácil de usar e download rápido de drivers, a melhor ferramenta atualmente no mercado! 
            </p>
            <cite>São Paulo, Brasil</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado Também pela Mídia Especializada</h2>
      <p>
        Reconhecido e elogiado por tradicionais veículos de mídia ao longo dos últimos seis anos, você pode ter certeza que adquiriu o melhor atualizador de drivers
      </p>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

<!-- bottom start -->
<div class="bottom">
  <div class="wrapper">
    <!-- service start -->
    <div class="service clearfix">
      <dl class="fl">
        <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dt>
        <dd>
          <h4>Tente GRÁTIS com a nossa Garantia de Reembolso de 60 dias</h4>
          <p>
            Nós confiamos que ativando a versão PRO irá desinstalar<br> rapidamente programas desnecessários por um preço acessível!
          </p>
        </dd>
      </dl>
      <dl class="fr">
        <dd>
          <h4>Nós aceitamos</h4>
        </dd>
        <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""></dt>
      </dl>
    </div>
    <!-- service end -->

    <!-- footer start -->
    <div class="footer">
      <dl>
        <dt>Observe:</dt>
        <dd>
          1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios. 
        </dd>
      </dl>
      <p>Copyright © 2005 – <?php echo date('Y')?> IObit. All Rights Reserved</p>
    </div>
    <!-- footer end -->
  </div>
</div>
<!-- bottom end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/db-small-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        Corra, apenas
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        restantes
      </h3>
      <p><span class="buyNum"><?php echo $viewNum; ?></span> usuários estão vendo agora</p>
    </div>
    <ul class="price fr">
      <li class="first"><strong><small>R$ </small>69<small>,99</small></strong></li>
      <li class="last">
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db7preorder6999&ref=pt-db7preorder6999official<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderofficial-pt');">
          Comprar Agora
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>