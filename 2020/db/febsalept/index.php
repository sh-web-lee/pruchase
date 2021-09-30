<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

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
$refStr.=empty($_GET['flag'])?'':('-flag'.$_GET['flag']);
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira Driver Booster 8 Pro com 70% de desconto para 3 PCs e leve dois super brindes. Oferta Limitada da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>
<body>
<!-- banner -->
<div class="banner">
  <!-- top -->
  <div class="top">
    <div class="wrapper clearfix">
      Driver Booster 8 Pro
      <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    </div>
  </div>

  <!-- container -->
  <div class="container">
    <div class="wrapper">
      <!-- countdown -->
      <p class="countdown">
        Promoção de Aniversário: A oferta limitada de 3 PCs + Brinde termina em:
        <span>Horas:</span> <strong>00</strong>
        <span>Min:</span> <strong>00</strong>
        <span>Seg:</span> <strong>00</strong>
        <span>Ms:</span> <strong class="last">00</strong> <span class="last">*</span>
      </p>
      <!-- content -->
      <div class="content clearfix">

        <!-- 1pc -->
        <div class="offer small">
          <!-- box -->
          <img class="box" src="<?php echo getStaticUrl('images/banner-db.png')?>" alt="">
          <!-- price -->
          <p class="price">R$<big>79</big>,99 <del><span>R$ 129,99</span></p>
          <!-- buybtn -->
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-db83pc7999&ref=pt_db83pcpurchase2002<?php echo $refStr;?>&refs=pt_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2002-pt');">
            Comprar Agora
          </a>
          <!-- note -->
          <p class="note">Assinatura de 1 ano / 3 PCs</p>
          <!-- ul -->
          <ul>
            <li>Licença vale para versões futuras</li>
            <li>Economize R$ 50,00</li>
            <li><span>-</span></li>
            <li class="last"><span>-</span></li>
          </ul>
        </div>

        <!-- 3pc -->
        <div class="offer large">
          <!-- off -->
          <span class="off">65% OFF</span>
          <!-- box -->
          <img class="box" src="<?php echo getStaticUrl('images/banner-bundle.png')?>" alt="">
          <!-- price -->
          <p class="price">
            R$<big>82</big>,99 <del><span>R$ 329,97</span></del>
          </p>
          <!-- buybtn -->
          <a class="buybtn large"
             href="https://www.iobit.com/buy.php?product=pt-db83pcisuiu8299&ref=pt_db83pcisuiupurchase2002<?php echo $refStr;?>&refs=pt_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2002-pt');">
            Comprar Agora
          </a>
          <!-- note -->
          <p class="note">Assinatura de 1 ano / 3 PCs + brindes</p>
          <!-- ul -->
          <ul>
            <li>Licença vale para versões futuras</li>
            <li>Economize R$ 246,98</li>
            <li>em 6x de R$ 14,17 s/ juros</li>
            <li><span>Brinde: Atualização de Programas com 1-clique</span></li>
            <li class="last"><span>Brinde II: Desinstalação Completa para um PC Limpo</span></li>
          </ul>
        </div>

      </div>
    </div>
  </div>
</div>
<!-- end banner -->

<!-- feature -->
<div class="feature wrapper clearfix">
  <h2>Entenda como o Driver Booster Pro otimiza o desempenho do seu PC!</h2>
  <div class="left fl"><img src="<?php echo getStaticUrl('images/screen.png')?>" alt=""/></div>
  <div class="right fr">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
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
      <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
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
      <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
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
<!-- end feature -->

<!-- intro -->
<div class="intro">
  <div class="wrapper">
    <h2>
      O pacote de otimização total ainda oferece a versão PRO de mais <br>
      dois programas da IObit!
    </h2>
    <!-- top -->
    <dl class="top clearfix">
      <dd class="fl clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/intro-icon01.png')?>" alt="">
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
      <dt class="fr"><img src="<?php echo getStaticUrl('images/intro-screen01.png')?>" alt=""></dt>
    </dl>
    <!-- bottom -->
    <dl class="bottom clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/intro-screen02.png')?>" alt=""></dt>
      <dd class="fr clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/intro-icon02.png')?>" alt="">
        <div class="fl">
          <h3>Limpeza Total de Sobras de Programas <br> Desinstalados</h3>
          <ul>
            <li class="clearfix">
              <i class="all-icons"></i>
              <span>Banco de Dados atualizado para deletar completamente mais programas maliciosos e teimosos. Limpar pacotes de instalação e programas com problemas de desinstalação.</span>
            </li>
            <li class="clearfix">
              <i class="all-icons"></i>
              <span>Saúde do Software - Nova função que integra ferramentas fragmentadas. Com apenas 1-clique, você pode atualizar mais programas importantes e corrigir todos problemas encontrados.</span>
            </li>
          </ul>
        </div>
      </dd>
    </dl>
  </div>
</div>
<!-- end intro -->

<!-- review start -->
<!-- user -->
<div class="user wrapper clearfix">
  <h2>Driver Booster Pro já atualizou os drivers de mais de <span class="buyNum"><?php echo $buyNum ?></span> de PCs.</h2>
  <h2>Chegou a hora de melhorar o seu PC.</h2>
  <div class="user-list">
    <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""/>
    <h3>Carlos Alexandre Versíssimo</h3>
    <p>
      Quando eu tentava atualizar meus drivers, o meu computador às vezes apresentava problemas e eu tinha que formatá-lo para restaurar suas funções e agora isto não acontece mais. Driver Booster 8 é a melhor ferramenta no mercado!
    </p>
  </div>
  <div class="user-list adam">
    <img src="<?php echo getStaticUrl('images/carlos.png')?>" alt=""/>
    <h3>Adam Backlund</h3>
    <p>
      Se você é como eu e tem diversos apli-cativos e dispositivos e não tem tempo para atualizá-los manualmente, eu reco-mendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveniência.
    </p>
  </div>
</div>
<!-- media -->
<div class="media">
  <div class="wrapper clearfix">
    <h2>Veja o que a mídia especializada tem a dizer</h2>
    <dl class="clearfix">
      <dt><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt=""/></dt>
      <dd>
        A IObit tem muitos utilitários e o Driver Booster Pro, que atualiza seus drivers automaticamente, é um dos melhores. A função central do Driver Booster PRO é ainda mais atraente graças à inclusão de múltiplas licenças por um preço bem amigável, assim como de uma interface personalizável que mostra informações específicas relacionadas ao hardware. Os competidores Ashampoo Driver Updater and Slimware Utilities Driver Update fazem um bom trabalho, mas IObit Driver Booster Pro é o melhor da sua categoria.
      </dd>
    </dl>
    <!-- awards start -->
    <div class="awards">
      <h3>Recomendado também por</h3>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>
</div>
<!-- review end -->

<!-- comparison start -->
<div class="comparison wrapper">
  <table>
    <thead>
    <tr>
      <th colspan="2" class="text">Comparação dos Produtos:</th>
      <th class="space"></th>
      <th class="itema">
        <div class="pro">
          <h3>A versão PRO<br> <small>ATIVADA</small></h3>
          <em class="all-icons smile"></em>
        </div>
      </th>
      <th class="space"></th>
      <th class="itemb">
        <div class="free">
          <h3>Sua versão<br> <small>ATUAL</small></h3>
          <em class="all-icons"></em>
        </div>
      </th>
    </tr>
    </thead>
    <tbody>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""/>
      </td>
      <td class="virtue">Download e Atualização de Drivers Desatualizados com Apenas Um-clique</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons">√</i></td>
    </tr>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/>
      </td>
      <td class="virtue">Velocidade Ilimitada na Atualização de Drivers</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons gray">√</i></td>
    </tr>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/>
      </td>
      <td class="virtue vtop">Maior Banco de Dados para Atualizar Drivers Antigos e Mais Raros</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons gray">√</i></td>
    </tr>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/>
      </td>
      <td class="virtue">Reduz o Travamento e Falhas do Sistema para um Melhor Desempenho</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons gray">√</i></td>
    </tr>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""/>
      </td>
      <td class="vtop">Download e Instalação Automáticos de Drivers Durante o Tempo Ocioso do Sistema</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons gray">√</i></td>
    </tr>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""/>
      </td>
      <td class="virtue">Backup Automático de Todos os Drivers para Restauração Segura</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons gray">√</i></td>
    </tr>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon07.png')?>" alt=""/>
      </td>
      <td class="virtue">Prioridade para Atualizar os Últimos Drivers Game Ready</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons gray">√</i></td>
    </tr>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/>
      </td>
      <td class="virtue">Download e Atualização de Drivers Desatualizados com Apenas Um-clique</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons gray">√</i></td>
    </tr>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""/>
      </td>
      <td class="virtue">Atualização Automática para a Última Versão</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons gray">√</i></td>
    </tr>
    <tr>
      <td class="icons">
        <img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""/>
      </td>
      <td class="virtue">Suporte Técnico Gratuito 24/7</td>
      <td class="space"></td>
      <td class="itema"><i class="all-icons red">√</i></td>
      <td class="space"></td>
      <td class="itemb"><i class="all-icons gray">√</i></td>
    </tr>
    </tbody>
  </table>
</div>
<!-- comparison end -->

<!-- footbuy start -->
<div class="footbuy">
  <div class="wrapper clearfix">
    <div class="imfbox fl">
      <img class="pcs on" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
      <img class="pc" src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
    </div>
    <ul class="fl">
      <li class="active" data-num="1"><i></i><span>Pacote para 3 PCs + Brindes</span> <strong>70% OFF</strong></li>
      <li data-num="0"><i></i><span>Pacote para 3 PCs</span> <strong>35% OFF</strong></li>
    </ul>
    <div class="price fr">
      <p><strong><small>R$</small> <span>82</span><small>,99</small></strong> <del><span>R$ 329,97</span></del></p>
      <a class="buybtn large"
         href="https://www.iobit.com/buy.php?product=pt-db83pcisuiu8299&ref=pt_db83pcisuiupurchase2002<?php echo $refStr;?>&refs=pt_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase2002-pt');">
        Comprar Agora
      </a>
    </div>
  </div>
</div>
<!-- footbuy end -->

<!-- footer start -->
<div class="service wrapper clearfix">
  <dl>
    <dt>Garantia de Reembolso</dt>
    <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
  </dl>
  <dl>
    <dt>Atendimento 24 horas</dt>
    <dd><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dd>
  </dl>
  <dl>
    <dt>Site Seguro</dt>
    <dd><img src="<?php echo getStaticUrl('images/google.png')?>" alt=""></dd>
  </dl>
</div>

<dl class="notes wrapper">
  <dt>Observe:</dt>
  <dd>
    *.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.
  </dd>
</dl>

<p class="copyright wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Todos os direitos reservados.</p>
<!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
<script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "ptnatalprom.php",
      data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>&reTime=<?php echo $reTime;?>&r="+Math.random(),
      success: function(packs){
        $('.buyNum').html(packs);
        setTimeout('getBuyNum()', 10000);
      }
    });
  }
  setTimeout('getBuyNum()', 10000);
</script>

</body>
</html>