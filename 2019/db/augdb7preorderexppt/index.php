<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptdbexp_p' . $date;
  $c_name_t='ptdbexp_t' . $date;
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
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Adquira Driver Booster 7 Pro por R$ 69,99 na Pré-Venda Limitada</title>
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
              <a class="buybtn big"
                 href="https://www.iobit.com/buy.php?product=pt-db7preorder6999&ref=pt-db7preorderexp6999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db"
                 onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-pt');">
                Comprar Agora
              </a>
            </li>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- foryou start -->
  <div class="foryou">
    <div class="wrapper">
      <h2>Entenda como o novo Driver Booster 7 PRO cuida do seu PC:</h2>
      <div class="screen">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <span class="rocket"></span>
        <div class="forlist left">
          <h3>Melhora o Desempenho do <b>PC</b></h3>
          <p><i class="circle">.</i> Atualiza <b>x</b> drivers do PC para te deixar livre de problemas no sistema;</p>
          <p><i class="circle">.</i> Corrige <b>x</b> erros de dispositivos para corrigir problemas de hardware;</p>
        </div>
        <div class="forlist right">
          <h3>Melhora Desempenho de <b>Jogo</b></h3>
          <p>
            <i class="circle">.</i>
            <span>
              Atualiza <b>x</b> componentes de jogos para garantir que jogos inicializem com sucesso;
            </span>
          </p>
          <p>
            <i class="circle">.</i>
            <span>Atualiza <b>x</b> drivers game-ready com prioridade para corrigir bugs e que você possa desfrutar de novas funcionalidades;</span>
          </p>
        </div>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- foryou end -->

  <!-- hashow start -->
  <div class="hashow">
    <div class="wrapper">
      <h2>Seu Driver Booster PRO Expirou</h2>
      <div class="screen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
          <span class="point">!</span>
        </div>
        <ul class="right fr">
          <li><i class="all-icons arrow"></i> <span>Banco de dados diminui para <b>2.500.000</b></span></li>
          <li><i class="all-icons"></i> <span><b>Fim</b> do aumento da velocidade de download</span></li>
          <li><i class="all-icons"></i> <span><b>Fim</b> da atualização automática de drivers</span></li>
          <li><i class="all-icons"></i> <span><b>Fim</b> do backup automático de drivers</span></li>
          <li><i class="all-icons"></i> <span><b>Fim</b> do reparo de erros de dispositivo</span></li>
          <li><i class="all-icons"></i> <span><b>Fim</b> da atualização de componente de jogos</span></li>
          <li><i class="all-icons"></i> <span><b>Sem</b> prioridade para atualizar drivers game-ready</span></li>
        </ul>
      </div>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i>
    </div>
  </div>
  <!-- hashow end -->

  <!-- db-feature start -->
  <div class="db-feature">
    <div class="wrapper">
      <h2>Driver Booster 7 PRO Ainda Faz Mais pelo seu PC</h2>
      <div class="clearfix">
        <div class="featlist one">
          <img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt=""/>
          <h3>3.500.000+</h3>
          <p>Drivers suportados</p>
        </div>
        <div class="featlist two">
          <img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt=""/>
          <h3>20% mais</h3>
          <p>componentes suportados</p>
        </div>
        <div class="featlist three">
          <img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt=""/>
          <h3>20% mais veloz</h3>
          <p>na verificação de drivers</p>
        </div>
        <div class="featlist four">
          <img src="<?php echo getStaticUrl('images/feature-icons04.png')?>" alt=""/>
          <h3>Sem Notificações</h3>
          <p>do Driver Booster ao rodar aplicativos em tela-cheia</p>
        </div>
      </div>
      <h3 class="subtitle">Tenha a Versão PRO Novamente e Desfrute das Funções PRO</h3>
      <ul class="price">
        <li class="last">
          <a class="buybtn big"
             href="https://www.iobit.com/buy.php?product=pt-db7preorder6999&ref=pt-db7preorderexp6999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-pt');">
            Comprar Agora - <big>R$ 69,99</big>
          </a>
        </li>
      </ul>
      <span class="arrow-wrap"><i class="top"></i><i class="bot"></i></span>
    </div>
  </div>
  <!-- db-feature end -->

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
           href="https://www.iobit.com/buy.php?product=pt-db7preorder6999&ref=pt-db7preorderexp6999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7preorderexp-pt');">
          Comprar Agora
        </a>
      </li>
    </ul>
  </div>
</div>
<!-- float end -->

  <script>
    refStr='<?php echo $refStr;?>';
    $('.foryou .screen p b').eq(0).html('<?php echo paramDeal($paramData->UpdDrv);?>').end()
        .eq(1).html('<?php echo paramDeal($paramData->FixedErr);?>').end()
        .eq(2).html('<?php echo paramDeal($paramData->UpdCmp);?>').end()
        .eq(3).html('<?php echo paramDeal($paramData->UpdRdy);?>');
  </script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo $pRootUrl;?>tpl/js/review-3d-carousel.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>