<?php
error_reporting(0);
define("IObit", "IObit");
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'pldbxmas2020_p' . $date;
  $c_name_t = 'pldbxmas2020_t' . $date;
  if ($_COOKIE[$c_name] === null) {
    $totalNum = $packsNum = rand(37, 50);
    setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    setcookie($c_name_t, $totalNum, time() + 3600 * 24 * 2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 5) {
      $packsNum = 5;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if ((rand(1, 100) % 2) == 0) {
        $packsNum = $_COOKIE[$c_name];
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum' => $packsNum));
  exit();
}

$viewNum = rand(98, 165);


// $time = time();
// if(isset($_COOKIE['toreturn'])&&$time-$_COOKIE['toreturn']>86400){
//     header("Location:return.php");
//     exit;
// }else{
//   if(!isset($_COOKIE['toreturn'])) setcookie('toreturn',$time,$time+2592000);
// }
if (preg_match_all('/([0-9]*)\./', $_GET['ver'], $matches)) {
    $ver = $matches[1][0] . $matches[1][1];
    $refStr .= '-' . $ver;
}
$refStr.=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pl">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira Driver Booster 8 Pro com 80% de desconto e leve um super brinde para manter seus programas também atualizados. Oferta Especial de Natal da IObit. </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css') ?>" rel="stylesheet">
  <?php echo $gJavascript['public']; ?>
  <?php echo $gJavascript['head'] ?>
</head>

<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pl/index.php" target="_blank">IObit</a>
      <div class="title">
        <h2>ADQUIRA O DRIVER BOOSTER 8 PRO COM 80% OFF E LEVE UM BRINDE DE NATAL</h2>
        <h1>SÓ DURANTE O NATAL</h1>
      </div>
      <div class="clearfix">
        <div class="offer left" style="margin-left: 230px;">
          <img src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="">
          <div class="price">
            <p><strong>R$ 59,99</strong></p>
            <p><b>6x de </b> R$ 10,00</p>
            <p class="last">1 PC / 1 Ano</p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-db81pc5999&ref=pt_db81pcpurchase2011rc<?= $refStr; ?>&refs=pt_purchase_db  " onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2011rc-pt');">
              COMPRAR AGORA
            </a>
          </div>
        </div>
        <div class="offer bigbox">
          <div class="superbox">
            <h3>PACOTE DE NATAL</h3>
            <p>
              Restam apenas <span class="reduce reduce1">
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
                <b class="giftNum"><em></em></b>
              </span> pacotes</p>
          </div>
          <img src="<?php echo getStaticUrl('images/db-gift-box2.png') ?>" alt="">
          <b class="discount">-83<small>%</small></b>
          <div class="price">
            <p><strong>R$ 69,99 </strong> <del>R$ 399,89</del></p>
            <p><b>6x de</b> R$ 11,67</p>
            <p class="last"><span>3 PCs </span> / 1 Ano</p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-db83pcisu6999&ref=pt_db83pcisupurchase2011rc<?= $refStr; ?>&refs=pt_purchase_db " onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2011rc-pt');">
              COMPRAR AGORA
            </a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="payment-bg">
    <div class="pay-miliony">
      <!-- payment start -->
      <div class="payment wrapper clearfix">
        <dl>

          <dd><img src="<?php echo getStaticUrl('images/payment.png') ?>" alt="" /></dd>
          <dt>Formas de Pagamento</dt>
        </dl>
        <dl>

          <dd><img src="<?php echo getStaticUrl('images/moneyback.png') ?>" alt="" /></dd>
          <dt>Garantia de Reembolso</dt>
        </dl>
        <dl class="last">

          <dd><img src="<?php echo getStaticUrl('images/gooddy.png') ?>" alt="" /></dd>
          <dt>Pagamento Seguro</dt>
        </dl>
      </div>
      <!-- payment end -->
    </div>
  </div>


  <!-- feature start -->
  <div class="feature wrapper clearfix">
    <h2>Entenda como o Driver Booster Pro otimiza o desempenho do seu PC!</h2>
    <div class="left fl"><img src="<?php echo getStaticUrl('images/screen.png') ?>" alt="" /></div>
    <div class="right fr">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-01.png') ?>" alt="" /></dt>
        <dd>
          <h3>Desempenho Máximo de seus Dispositivos</h3>
          <p>
            <i></i>
            <span>
              Banco de Drivers expandido para 4.500.000 drivers garante que você encontrará drivers obsoletos e raros.
            </span>
          </p>
          <p>
            <i></i>
            <span>
              Download automático ou agendado de drivers garante que seus dispositivos estarão sempre atualizados.
            </span>
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-02.png') ?>" alt="" /></dt>
        <dd>
          <h3>Segurança e Conveniência Total</h3>
          <p>
            <i></i>
            <span>
              A versão PRO faz backup automático antes de todas a atualizações para evitar qualquer problema.
            </span>
          </p>
          <p class="one">
            <i></i>
            <span>Velocidade de download ilimitada para todos os drivers.</span>
          </p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/feature-03.png') ?>" alt="" /></dt>
        <dd>
          <h3>Experiência Superior em Jogos </h3>
          <p>
            <i></i>
            <span>Drivers Game Ready garantem o melhor desempenho de sua placa de vídeo e periféricos.</span>
          </p>
          <p>
            <i></i>
            <span>Os últimos componentes de jogo evitam problemas na hora de inicializar jogos.</span>
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper">
      <h2>
        O Pacote de Natal oferece a versão PRO do melhor atualizador<br> de programas para Windows!
      </h2>
      <!-- top -->
      <dl class="top clearfix">
        <dd class="fl clearfix">
          <img class="fl" src="<?php echo getStaticUrl('images/intro-icon01.png') ?>" alt="">
          <div class="fl">
            <h3>Atualização Automática e Conveniente <br> de Programas</h3>
            <ul>
              <li class="clearfix">
                <i class="all-icons"></i>
                <span>Com a versão Pro, você contará com atualizações automáticas
                  agendadas, além de atualização silenciosa que roda no fundo sem
                  interferir no seu trabalho.</span>
              </li>
              <li class="clearfix">
                <i class="all-icons"></i>
                <span>Cria pontos de restauração automáticos a cada atualização para
                  impedir que seu PC seja afetado por uma atualização que
                  comprometa o funcionamento do Windows.</span>
              </li>
            </ul>
          </div>
        </dd>
        <dt class="fr"><img src="<?php echo getStaticUrl('images/intro-screen01.png') ?>" alt=""></dt>
      </dl>
      <!-- bottom -->
      <!-- <dl class="bottom clearfix">
        <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-screen02.png') ?>" alt=""></dt>
        <dd class="fr clearfix">
          <img class="fl" src="<?php echo getStaticUrl('images/intro-icon02.png') ?>" alt="">
          <div class="fl">
            <h3>Limpeza Total de Sobras de Programas <br> Desinstalados</h3>
            <ul>
              <li class="clearfix">
                <i class="all-icons"></i>
                <span>Com a versão Pro, você contará com atualizações automáticas
                  agendadas, além de atualização silenciosa que roda no fundo sem
                  interferir no seu trabalho.</span>
              </li>
              <li class="clearfix">
                <i class="all-icons"></i>
                <span>Cria pontos de restauração automáticos a cada atualização para
                  impedir que seu PC seja afetado por uma atualização que
                  comprometa o funcionamento do Windows.</span>
              </li>
            </ul>
          </div>
        </dd>
      </dl> -->
    </div>
  </div>
  <!-- giftbox end -->

  <!-- review start -->
  <div class="user wrapper clearfix">
    <h2>Driver Booster Pro já atualizou os drivers de mais de <span class="buyNum"><?php echo $buyNum ?></span> de PCs.</h2>
    <h2>Chegou a hora de melhorar o seu PC.</h2>
    <div class="user-list">
      <img src="<?php echo getStaticUrl('images/adam-backlund.png') ?>" alt="" />
      <h3>Carlos Alexandre Versíssimo</h3>
      <p>
        Quando eu tentava atualizar meus drivers, o meu computador às vezes apresentava problemas e eu tinha que formatá-lo para restaurar suas funções e agora isto não acontece mais. Driver Booster 8 é a melhor ferramenta no mercado!
      </p>
    </div>
    <div class="user-list adam">
      <img src="<?php echo getStaticUrl('images/carlos.png') ?>" alt="" />
      <h3>Adam Backlund</h3>
      <p>
        Se você é como eu e tem diversos apli-cativos e dispositivos e não tem tempo para atualizá-los manualmente, eu reco-mendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveniência.
      </p>
    </div>
  </div>
  <div class="media">
    <div class="wrapper clearfix">
      <h2>Veja o que a mídia especializada tem a dizer</h2>
      <dl class="clearfix">
        <dt><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png') ?>" alt="" /></dt>
        <dd>
          A IObit tem muitos utilitários e o Driver Booster Pro, que atualiza seus drivers automaticamente, é um dos melhores. A função central do Driver Booster PRO é ainda mais atraente graças à inclusão de múltiplas licenças por um preço bem amigável, assim como de uma interface personalizável que mostra informações específicas relacionadas ao hardware. Os competidores Ashampoo Driver Updater and Slimware Utilities Driver Update fazem um bom trabalho, mas IObit Driver Booster Pro é o melhor da sua categoria.
        </dd>
      </dl>
      <!-- awards start -->
      <div class="awards">
        <h3>Recomendado também por</h3>
        <img src="<?php echo getStaticUrl('images/awards.png') ?>" alt="" />
      </div>
      <!-- awards end -->
    </div>
  </div>
  <!-- review end -->
  <div class="bottom-bg">
    <!-- comparison start -->
    <div class="comparison wrapper">
      <!-- <h2>Ciesz się funkcjami dostępnymi tylko w PRO</h2> -->
      <table>
        <thead>
          <tr>
            <th colspan="2" class="text"> Comparação dos Produtos:</th>
            <th class="space"></th>
            <th class="itema">
              <div class="pro">
                <h3>A versão PRO<br>ATIVADA</h3>
              </div>
            </th>
            <th class="space"></th>
            <th class="itemb">
              <div class="free">
                <h3>Sua versão
                  <br>ATUAL</h3>
              </div>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon01.png') ?>" alt="" /></td>
            <td class="virtue">Download e Atualização de Drivers Desatualizados com Apenas Um-clique</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png') ?>" alt="" /></td>
            <td class="virtue">Velocidade Ilimitada na Atualização de Drivers </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png') ?>" alt="" /></td>
            <td class="virtue vtop">
              <span style="display: inline-block; padding-left: 6px;">Maior Banco de Dados para Atualizar Drivers Antigos e Mais Raros</span>
            </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon04.png') ?>" alt="" /></td>
            <td class="virtue">
              Reduz o Travamento e Falhas do Sistema para um Melhor Desempenho
            </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon05.png') ?>" alt="" /></td>
            <td class="vtop">
              Download e Instalação Automáticos de Drivers Durante o Tempo Ocioso do Sistema
            </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon06.png') ?>" alt="" /></td>
            <td class="virtue"> Backup Automático de Todos os Drivers para Restauração Segura</b></td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon07.png') ?>" alt="" /></td>
            <td class="virtue"> Prioridade para Atualizar os Últimos Drivers Game Ready</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png') ?>" alt="" /></td>
            <td class="virtue">Download e Atualização de Drivers Desatualizados com Apenas Um-clique</td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon09.png') ?>" alt="" /></td>
            <td class="virtue">Atualização Automática para a Última Versão </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png') ?>" alt="" /></td>
            <td class="virtue">Suporte Técnico Gratuito 24/7 </td>
            <td class="space"></td>
            <td class="itema"><i class="all-icons red">√</i></td>
            <td class="space"></td>
            <td class="itemb"><i class="all-icons gray">√</i></td>
          </tr>
        </tbody>
      </table>
    </div>
    <!-- <div class="intro">
      <div class="wrapper clearfix">
        <h2>Het Nieuwe Driver Booster 7 PRO <br> kan nog veel meer dan u dacht! </h2>
        <dl class="on">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png') ?>" alt=""></dt>
          <dd>
            <h3>Meer dan 3.500.000</h3>
            <p>
              beschikbaar voor uw pc
            </p>
          </dd>
        </dl>
        <dl class="on">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png') ?>" alt=""></dt>
          <dd>
            <h3>20% meer</h3>
            <p>
              gamecomponenten ondersteund
            </p>
          </dd>
        </dl>
        <dl class="on">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png') ?>" alt=""></dt>
          <dd>
            <h3>20% sneller</h3>
            <p>
              scannen voor de juiste drivers
            </p>
          </dd>
        </dl>
        <dl class="last on">
          <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png') ?>" alt=""></dt>
          <dd>
            <h3>Blokkeer notificaties</h3>
            <p>
              van Driver Booster als u volledig scherm gebruikt
            </p>
          </dd>
        </dl>
      </div>
    </div> -->
    <!-- comparison end -->
  </div>
  <!-- footerbuy start -->
  <div class="footerbuy">
    <div class="wrapper">
      <h2>Aproveite o Natal para Pegar o Driver Booster PRO com Brinde pelo Menor Preço do Ano</h2>
      <h3>Apenas
        <span class="reduce reduce2">
          <b class="giftNum"><em></em></b>
          <b class="giftNum"><em></em></b>
          <b class="giftNum"><em></em></b>
        </span> pacotes restantes
      </h3>
      <div class="clearfix">
        <div class="imgbox fl">
          <img class="on" src="<?php echo getStaticUrl('images/db-gift-box2.png') ?>" alt="" />
          <img class="db" src="<?php echo getStaticUrl('images/db-box.png') ?>" alt="" />
          <span class="discount on">-83<small>%</small></span>
        </div>
        <ul class="changelist fl">
          <li class="one on" data-num="1"><b>3 PCs / 1 Ano + Super Brinde</b></li>
          <li class="two" data-num="0"><b>1 PC / 1 Ano</b></li>
          <!-- <li class="three" data-num="0"><b>Driver Booster 1 rok / 1 PC</b></li> -->
        </ul>
        <div class="price fr">
          <p><strong>R$ 69,99 </strong> <del>R$ 399,89</del></p>
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-db83pcisu6999&ref=pt_db83pcisupurchase2011rc<?= $refStr; ?>&refs=pt_purchase_db   " onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2011rc-pt')" id="hrd">
            COMPRAR AGORA
          </a>
        </div>
      </div>
    </div>
  </div>
  <div class="footer">
    <div class="wrapper">
      <dl class="note">
        <dt>Observe:</dt>
        <dd>*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
        <dd>*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
      </dl>
      <p class="copyright">Copyright 2005 - <?php echo date('Y') ?> IObit. Todos os Direitos Reservados</p>
    </div>
  </div>
  <!-- footerbuy end -->

  <script>
    var refStr = "<?php echo $refStr; ?>";
  </script>
  <script src="<?php echo getStaticUrl('script/script.js') ?>"></script>
</body>

</html>