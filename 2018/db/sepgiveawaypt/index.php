<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
$driversCount=empty($_GET['uc'])?0:intval($_GET['uc']);
$updateAuto=($_GET['adu']==1)?1:0;

$refStr=empty($_GET['to'])?'':('-'.$_GET['to']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<title>70% de Desconto Exclusivo para Adquirir Driver Booster 8 PRO – IObit</title>
<meta name="Copyright" content="IObit">
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
    <div class="wrapper clearfix">
      <!-- logo -->
      <a class="logo" href="https://www.iobit.com" target="_blank">IObit</a>
      <!-- title -->
      <h1>Adquira Driver Booster 8 PRO</h1>
      <!-- subtitle -->
      <h2>O atualizador de drivers nº1 para PC – Velocidade e segurança na atualização de drivers</h2>
      <!-- db-box -->
      <img class="db-box fl" src="<?php echo $pResUrl;?>images/db-box.png" alt="">
      <!-- db-message -->
      <div class="db-message fr">
        <!-- db-off -->
        <h3>70% de Desconto</h3>
        <!-- db-line -->
        <p class="db-des">Exclusivo para Usuários de Sorteio</p>
        <!-- price -->
        <p class="price">
          Apenas:  <span>R$ <b>39</b>,99</span>  <del>R$ 129,99</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db83pc3999&ref=pt_2018sepgiveaway<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuya', 'buy', 'dbpurchase-give-pt');">
          Adquirir Agora
        </a>
        <!-- attention -->
        <p class="attention">Assinatura anual para 3 PCs <strong>pelo preço de 1</strong></p>
        <!-- money-back -->
      </div>
    </div>
  </div>
  <!-- banner end -->
  <!-- feature-part1 start -->
  <div class="feature-part1">
    <div class="wrapper">
      <!-- arrow -->
      <img class="arrow" src="<?php echo $pResUrl;?>images/feature-arrow.png" alt="">
      <!-- title -->
      <h2 class="fr">
        <span class="top">Neste tempo instalado no seu PC, </span>
        <span class="bottom">Driver Booster Pro já
        </span>
      </h2>
      <!-- details -->
      <ul class="details fr">
        <!-- updated -->
        <li class="updated">
          <?php if($driversCount!=0):?>
          <strong>Atualizou</strong>
          <span class="numbers clearfix">
              <i class="num1">0123456789</i>
              <i class="num2">0123456789</i>
              <i class="num3">0123456789</i>
            </span>
          drivers e componentes de jogos para <br>
          garantir um <b>desempenho estável do PC e experiência fluida </b>
          <?php else:?>
            Garantiu o desempenho estável do seu PC e ótima experiência de jogo
          <?php endif;?>
        </li>
        <!-- saved -->
        <li class="saved">
          <?php if($updateAuto==1):?>
          <strong>Economizou</strong> pelo menos
          <span class="letters clearfix">
              <i class="let1">abcdefghijklmnopqrstuvwxyz</i>
              <i class="let2">abcdefghijklmnopqrstuvwxyz</i>
              <i class="let3">abcdefghijklmnopqrstuvwxyz</i>
              <i class="let4">bcdefghijklmanopqrstuvwxyz</i>
              <i class="let5">abcdefghijklmnopqrstuvwxyz</i>
              <i class="let6">abcdefghijklmnopqrstuvwxyz</i>
            </span>
          <b>do seu tempo</b> atualizando  drivers com a Atualização Automática;
          <?php endif;?>
        </li>
        <!-- reduced -->
        <li class="reduced">
          <b class="red">Garantiu a segurança </b> do seu sistema durante a atualização <br> de drivers com backup automático de drivers e tecnologia de <br> recuperação.
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part1 end -->
  <!-- feature-part2 start -->
  <div class="feature-part2">
    <div class="wrapper">
      <!-- content -->
      <p>
        Nos últimos 6 anos, Driver Booster Pro atualizou <strong>12.700.000</strong> de drivers para mais de <strong>1.500.000</strong><br>
        usuários aumentando a estabilidade de seus sistemas e o desempenho máximo dos seus dispositivos <br>
        com os drivers mais recentes.
      </p>
    </div>
  </div>
  <!-- feature-part2 end -->
  <!-- feature-part3 start -->
  <div class="feature-part3 wrapper">
    <!-- title -->
    <h2>Se você não contar com a nova versão PRO, você pode encontrar</h2>
    <!-- content for progress -->
    <div class="content clearfix">
      <!-- Worse PC Performance -->
      <dl class="performance fl">
        <dt>Pior Desempenho do PC</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>15% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Unstable & Stuck Gaming Experience -->
      <dl class="experience fl">
        <dt>Experiência de Jogo Instável e Travando</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>35% </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
      <!-- Time-consuming Driver Update -->
      <dl class="update fr">
        <dt>Atualização de Drivers Demorada</dt>
        <dd>
          <div class="progressbar">
            <span class="bar">
              <i>2X mais lento </i>
            </span>
          </div>
          <img class="icon" src="<?php echo $pResUrl;?>images/feature-icon.png" alt="">
        </dd>
      </dl>
    </div>
    <div class="clear"></div>
    <!-- notes -->
    <p>*Nós testamos o Driver Booster 8 PRO no nosso laboratório de testes interno. Resultados podem variar.</p>
  </div>
  <!-- feature-part3 end -->
  <hr>
  <!-- feature-part4 start -->
  <div class="feature-part4">
    <div class="wrapper clearfix">
      <!-- title -->
      <h2>
       Por isso nós recomendamos fortemente que você Adquira Driver Booster 8 Pro<br>
        para manter todos os drivers atualizados
      </h2>
      <!-- left-message -->
      <ul class="left-message fl">
        <li class="padding-right25">
          Banco de dados de <strong>4,500,000+ <br> drivers </strong> para manter todos os seus <br>
          dispositivos atualizados
        </li>
        <li class="padding-right55">
          <strong>Auto atualiza </strong> drivers sem <br>
          qualquer pertubação enquanto <br> você trabalha
        </li>
        <li class="padding-right5">
          <strong>1-clique para reparar</strong> todos os erros de <br> dispositivos no seu computador
        </li>
      </ul>
      <!-- right-message -->
      <ul class="right-message fr">
        <li class="padding-left45">
          <strong>Componentes necessários </strong> <br>  disponíveis para iniciar o seu jogo
        </li>
        <li class="padding-left5">
          Prioridade para atualizar <strong>Drivers Game <br>  Ready</strong> para ter melhor experiência de <br> jogo
        </li>
        <li class="padding-left10">
         1-clique para parar  <strong>processos <br> desnecessários</strong> para melhor jogo
        </li>
      </ul>
    </div>
  </div>
  <!-- feature-part4 end -->
  <!-- between-buy start -->
  <div class="between-buy wrapper">
    <!-- title -->
    <h2>Garanta Melhor Desempenho do PC e Experiência de Jogo Agora</h2>
    <!-- price -->
    <p class="price">
      Apenas:  <span>R$ <b>39</b>,99</span>  <del>R$ 129,99</del>
    </p>
    <!-- buybtn -->
    <a class="buybtn"
       href="https://www.iobit.com/buy.php?product=pt-db83pc3999&ref=pt_2018sepgiveaway1<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_db"
       onclick="ga('send', 'event', 'dbbuyb', 'buy', 'dbpurchase-give-pt');">
      Adquirir Agora
    </a>
    <!-- attention -->
    <p class="attention">Assinatura anual para 3 PCs <strong>pelo preço de 1</strong></p>
    <!-- money-back -->
  </div>
  <!-- between-buy end -->
  <!-- comparison start -->
  <div class="comparison">
    <div class="wrapper">
      <!-- title -->
      <h2>Veja o Que Você vai Perder se Continuar sem a Versão PRO:</h2>
      <!-- table -->
      <table cellspacing="0" cellpadding="0" valign="middle" align="cnter">
        <thead>
        <tr>
          <th class="w320"></th>
          <th class="w530"></th>
          <th class="w350"></th>
          <th class="w50"></th>
        </tr>
        </thead>
        <tbody>
        <!-- 01 -->
        <tr>
          <td class="w320 grey">3.500.000+</td>
          <td class="w530">Banco de Dados Drivers</td>
          <td class="w350 red">4.500.000+</td>
          <td class="w50"></td>
        </tr>
        <!-- 02 -->
        <tr>
          <td class="w320 grey">Sem Aceleração</td>
          <td class="w530">Velocidade de Download de Drivers</td>
          <td class="w350 red">200% mais Rápido</td>
          <td class="w50"></td>
        </tr>
        <!-- 03 -->
        <tr>
          <td class="w320 grey">Sem Prioridade</td>
          <td class="w530">Drivers Game Ready</td>
          <td class="w350 red">Prioridade</td>
          <td class="w50"></td>
        </tr>
        <!-- 04 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Componentes de Jogos</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 05 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Atualização Automática de Drivers</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        <!-- 06 -->
        <tr>
          <td class="w320 no"><i></i></td>
          <td class="w530">Backup de Drivers</td>
          <td class="w350 yes"><i></i></td>
          <td class="w50"></td>
        </tr>
        </tbody>
        <tfoot>
        <tr>
          <td class="w320"></td>
          <td class="w530"></td>
          <td class="w350"></td>
          <td class="w50"></td>
        </tr>
        </tfoot>
      </table>
    </div>
  </div>
  <!-- comparison end -->
  <!-- review start -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/pc.png')?>" alt=""></dt>
          <dd>
            <h2>Opinião da Mídia</h2>
            <p>"A IObit tem muitos utilitários e o Driver Booster Pro, que atualiza seus drivers automaticamente, é um dos melhores. A função central do Driver Booster PRO é ainda mais atraente graças à inclusão de múltiplas licenças por um preço bem amigável, assim como de uma interface personalizável que mostra informações específicas relacionadas ao hardware. Os competidores Ashampoo Driver Updater and Slimware Utilities Driver Update fazem um bom trabalho, mas IObit Driver Booster Pro é o melhor da sua categoria."</p>
            <cite>PC Magazine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt=""></dt>
          <dd>
            <h2>Opinião do Usuário</h2>
            <p>"Com Driver Booster, eu consigo saber facilmente quais drivers estão desatualizados e posso atualizá-los com facilidade. Além disso, me ajuda a reparar erros com de e rede. Eu não acreditava antes de usar, mas depois de testá-lo eu o adorei, pois meu PC está mais estável, rápido e seguro do que 8 meses atrás. Muito obrigado, IObit."</p>
            <cite>Myo Thuya</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""></dt>
          <dd>
            <h2>Opinião do Usuário</h2>
            <p>"Driver Booster é um aplicativo sensacional. Se você é como eu e tem diversos aplicativos e dispositivos e não tem tempo para atualizá-los manualmente, eu recomendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveniência.”</p>
            <cite>Adam Backlund</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><img src="<?php echo getStaticUrl('images/wayne-bowler.png')?>" alt=""></dt>
          <dd>
            <h2>Opinião do Usuário</h2>
            <p>"Esse é o melhor atualizador de drivers disponíveis. Microsoft já me confundiu algumas vezes me sugerindo atualizações que não funcionaram com meu computador, mas este programa sabe quais atualizações eu preciso sem causar qualquer conflito. Funcionou perfeitamente. Fácil de usar, eficiente e intuitivo. Este programa vai ficar na minha caixa de ferramentas para sempre... Bom trabalho!"</p>
            <cite>Wayne Bowler</cite>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- review end -->
  <!-- awards start -->
  <div class="awards wrapper">
    <!-- title -->
    <h2>Prêmios no Mundo</h2>
    <img src="<?php echo $pResUrl;?>images/awards-icon.png" alt="">
  </div>
  <!-- award end -->
  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="footer-servizio clearfix">
        <dl class="money_back fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/money-back.png" alt="">
          </dd>
          <dt>
            <h3>Garantia de Reembolso</h3>
            <p>Se você não estiver satisfeito nos <br> primeiros 60 dias, nós devolveremos <br> seu dinheiro.</p>
          </dt>
        </dl>
        <dl class="veloce fl">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/veloce.png" alt="">
          </dd>
          <dt>
            <h3>Pagamento Seguro</h3>
            <p>IObit suporta diversos tipos seguros <br> de pagamento.</p>
          </dt>
        </dl>
        <dl class="verified fr">
          <dd>
            <img src="<?php echo $pResUrl; ?>images/verified.png" alt="">
          </dd>
          <dt>
            <h3>Entrega Imediata</h3>
            <p>Você receberá sua licença minutos <br> após a sua compra.</p>
          </dt>
        </dl>
      </div>
      <p class="note">
        Observe:<br>
        1*. Os dados podem variar de acordo com os diferentes sistemas e computadores.
      </p>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
    </div>
  </div>
  <!-- footer end -->
  <!-- float start -->
  <div class="float">
    <div class="wrapper clearfix">
      <dl class="fl">
        <dt>Oferta Exclusiva</dt>
        <dd><strong><b>70%</b> de DESCONTO</strong> para Manter seu PC Estável e Rápido Com Drivers Atualizados</dd>
      </dl> 
      <div class="float-message fr">
        <!-- price -->
        <p class="price">
           <span>R$ <b>39</b>,99</span>  <del>R$129,99</del>
        </p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db83pc3999&ref=pt_2018sepgiveaway2<?php echo $refStr;?>&aff=<?php echo $_GET['aff']?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuyc', 'buy', 'dbpurchase-give-pt');">
          Adquirir Agora
        </a>
      </div>
    </div>
  </div>
  <!-- float end -->
  <script>
    driversCount=<?php echo $driversCount?>;
    autoUpdate=<?php echo $updateAuto?>;
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
  </script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    $(document).ready(function() {
      $('#dg-container').gallery();
    });
  </script>
  </body>
  </html>