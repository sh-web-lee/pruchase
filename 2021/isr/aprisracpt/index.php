<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../../';
}
include $pRootUrl . 'include/common.inc.php';

$refStr = empty($_GET['ref']) ? '' : '-'.$_GET['ref'];
$refStr .= empty($_GET['st']) ? '' : '-'.$_GET['st'];
$refStr .= empty($_GET['to']) ? '' : '-'.$_GET['to'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira iFun Screen Recorder PRO com 78% de desconto. Oferta Limitada da IObit.</title>
<meta name="Copyright" content="IObit">
<meta name="description" content="Oferta exclusiva para clientes IObit: 78% de desconto no iFun Screen Recorder">
<meta property="og:url" content="https://purchase.iobit.com/asc-ac-register/index.php">
<meta property="og:type" content="website">
<meta property="og:title" content="Adquira iFun Screen Recorder PRO com 78% de desconto. Oferta Limitada da IObit.">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:400,500,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://recorder.iobit.com/pt/" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="title">
        <h1>iFun Screen Recorder PRO</h1>
        <p>Grave tudo na tela do seu PC sem marca d’água ou limitações</p>
      </div>
      <div class="offer clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/boxshot-asc.png')?>" alt="" />
        <div class="discount fl">
          <h2><b>78%</b> <span>DESCONTO</span></h2>
          <p>Exclusivo para Usuários Especiais da IObit</p>
        </div>
      </div>
      <div class="price">
        <p>APENAS: <strong>$9.99 </strong><del>$42.99</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=pt-isr11pc7999&ref=pt_isr-ac-register<?= $refStr; ?>&refs=pt_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-pt')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Ativar Agora</span>
              </div>
        </a>
        <span>1 Ano / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- feature start -->
  <h2 class="feature-h2">Por que o iFun Screen Recorder PRO?</h2>
  <div class="feature wrapper">
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_01.png')?>" alt=""></dt>
        <dd>
          <h3>GRAVA QUALQUER PARTE DE SUA TELA</h3>
          <p>Com o iFun Screen Recorder PRO você pode gravar não só a tela inteira, como também qualquer janela ou região de sua tela de acordo com as suas preferências.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_02.png')?>" alt=""></dt>
        <dd>
          <h3>CAPTURA SUA WEBCAM E MICROFONE</h3>
          <p>Grave sua tela, webcam e microfone simultaneamente para criar videoaulas, tutoriais, gameplay e vídeos de react para a sua audiência.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_03.png')?>" alt=""></dt>
        <dd>
          <h3>REMOVE A MARCA D’ÁGUA</h3>
          <p>Com a versão PRO não haverá marca d’água obrigatória em seus vídeos. Ainda melhor, você poderá adicionar sua marca d’água personalizada se você quiser!</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_04.png')?>" alt=""></dt>
        <dd>
          <h3>GRAVE QUANTO VOCÊ QUISER</h3>
          <p>Gravadores de tela gratis só gravam alguns minutos, mas com o iFun Screen Recorder PRO você pode gravar quanto você quiser. Grave filmes, conferências e horas de gameplay.</p>
        </dd>
      </dl>
    </div>
    <div class="clearfix">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_05.png')?>" alt=""></dt>
        <dd>
          <h3>MELHOR QUALIDADE DE VÍDEOS</h3>
          <p>A versão PRO se utiliza de algoritmos de codificação de imagem e aceleração de GPU avançados para uma melhor qualidade de vídeo. Ou seja, você vai gravar vídeos com a qualidade de disco blu-ray.</p>
        </dd>
      </dl>
      <dl class="right">
        <dt><img src="<?php echo getStaticUrl('images/feature_icons_06.png')?>" alt=""></dt>
        <dd>
          <h3>EDITE SEU VÍDEO</h3>
          <p>Você contará com ferramentas para edição de video simples sem precisar de outros programas. Crie seu video perfeito com iFun Screen Recorder Pro!</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Prêmios</h2>
      <img src="<?php echo $pResUrl; ?>images/awards.png" alt="">
    </div>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div id="dg-container" class="dg-container">
      <div class="nav">
        <span class="dg-prev"></span>
        <span class="dg-next"></span>
      </div>
      <div class="content dg-wrapper">
        <dl class="reviews active">
          <dt><h2><span>O Que Outras Pessoas Dizem</span></h2></dt>
          <dd>
            <p>
              "Ótimo, até agora tudo bem. iFun Screen Recorder é realmente uma ferramenta completa e fácil de usar. Não sabia como gravar tela no Windows, mas se torna fácil com esse software. Com o iFun Screen Recorder, posso fazer capturas de tela durante a gravação em alta definição e adicionar legendas para o vídeo após a gravação. Então eu carrego no meu Instagram e chamo atenção massiva. Este poderoso gravador de tela ajudou a impulsionar meu negócio. A propósito, é totalmente grátis."
            </p>
           <cite>Elsie Weston</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>O Que Outras Pessoas Dizem</span></h2></dt>
          <dd> 
            <p>
              "Eu encontrei este gravador de tela grátis e me tornei um fã dele por suas funções de edição simples. Porque eu gosto de gravar o processo de operação para ajudar as pessoas a resolverem problemas do computador, e este programa de gravação me permite gravar com áudio para que eu possa enviar o vídeo editado diretamente para o YouTube após a gravação. Ele combina gravação e edição, o que é muito conveniente para youtubers como eu que desejam compartilhar vídeos tutoriais!"
            </p>
            <cite>Enrico Valencia</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>O Que Outras Pessoas Dizem</span></h2></dt>
          <dd>
            <p>
              "Como secretária, preciso usar software de gravação de tela muito. Para mim, foi difícil encontrar um gravador de tela grátis ideal, mas o iFun Screen Recorder é uma ferramenta perfeita para a gravação de videoconferência e me ajuda muito! Eu poderia gravar a tela em alta definição com ele e converter o vídeo em diferentes formatos. Eu recomendo altamente o iFun Screen Recorder!"
            </p>
            <cite>Marielle Irvine</cite>
          </dd>
        </dl>
        <dl class="reviews">
          <dt><h2><span>O Que Outras Pessoas Dizem</span></h2></dt>
          <dd>
            <p>
              "Olá! Seu fantástico gravador de tela grátis me surpreende. Posso registrar todos esses momentos preciosos e maravilhosos com o iFun Screen Recorder, especialmente para vídeos ao vivo. Os vídeos que gravo com o iFun Screen Recorder são de qualidade extremamente alta. Posso salvá-los e compartilhá-los com meus amigos. No início, não tinha certeza sobre o programa, mas os resultados são incríveis. É brilhante!"
            </p>
            <cite>Robbins Hilton</cite>
          </dd>
        </dl>
      </div>
      <ul class="switchHead">
		<li class="active" ><img src="<?php echo getStaticUrl('images/user1.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user2.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user3.png')?>"></li>
        <li class="" ><img src="<?php echo getStaticUrl('images/user4.png')?>"></li>
      </ul>
    </div>
  </div>

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper">
      <h2>Cria Vídeos de Alta Qualidade sem Marca d’Água ou Limitações</h2>
      <div class="price">
        <p>Apenas: <strong>$9.99 </strong><del>$42.99</del></p>
        <a class="buybtn bigbtn"
           href="https://www.iobit.com/buy.php?product=pt-isr11pc7999&ref=pt_isr-ac-register<?= $refStr; ?>&refs=pt_ac_isr"
           onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-pt')">
              <div class="inner">
                <i class="all-icons"></i>
                <span>Ativar Agora</span>
              </div>
        </a>
        <span>1 Ano / 1 PC</span>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  
  <!-- container end -->

  <!-- bottom start -->
  <div class="bottom">
    <div class="wrapper">
      <!-- annotation start -->
      <!-- <p class="annotation" >*Opmerking:.Data kan variëren afhankelijk van verschillende computer systemen.</p> -->
      <!-- annotation end -->
      
      <!-- footer start -->
      <div class="footer" style="margin-top: 0;">©2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
      <!-- footer end -->
    </div>
  </div>
  <!-- bottom end -->

  <!-- floatlayer start -->
  <div class="floatlayer" id="floatlayer">
    <div class="wrapper clearfix">
      <div class="left">
        <h2>OFERTA EXCLUSIVA</h2>
        <p><strong>78% de Desconto</strong> para gravar sua tela sem limitações</p>
      </div>
      <div class="pricebox">
        <dl class="price fr">
          <dt>APENAS: <strong>$9.99 </strong><del>$42.99</del></dt>
          <dd>
            <a class="buybtn smallbtn"
               href="https://www.iobit.com/buy.php?product=pt-isr11pc7999&ref=pt_isr-ac-register<?= $refStr; ?>&refs=pt_ac_isr"
               onclick="ga('send', 'event', 'isrbuy', 'buy', 'israc-pt')">
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

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>