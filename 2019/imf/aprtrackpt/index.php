<?php
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
  }
include $pRootUrl . 'include/common.inc.php';
$viewNum=rand(115,156);
if (!empty($_GET['action'])&&$_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name='ptimftra'.$date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 97;
    setcookie($c_name, $packsNum, time() + 3600 * 24);
  } else {
    if ($_GET['t'] == 1) {
      $packsNum = $_COOKIE[$c_name];
    }
    else {
      if (intval($_COOKIE[$c_name]) <= 0) {
        setcookie($c_name, 0, time() + 3600 * 24);
        $packsNum = 0;
      } else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24);
        if (rand(1, 100) % 2 == 0) {
          $packsNum++;
        }
      }
    }
  }
  echo $packsNum;
  exit;
}
$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="IE=Edge,chrome=1">
  <title>55% de Desconto no IObit Malware Fighter PRO </title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href='https://fonts.googleapis.com/css?family=Montserrat:500,600' rel='stylesheet' type='text/css'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner -->
  <div class="banner">
    <div class="wrapper">
      <a href="https://www.iobit.com" target="_blank" class="logo" target="_blank">IObit</a>
      <p class="fast <?php echo (intval($_GET['cookie'])>0)?'':'hide';?>">Encontrados <?php echo (intval($_GET['cookie'])>0)?intval($_GET['cookie']):'';?> agora</p>
      <h1>Tenha Cookies Maliciosos Limpos Automaticamente no seu PC!  </h1>
      <div class="box three-pcs">
        <div class="img-box"></div>
        <p>Agora:  <strong>R$ 69,99</strong> <del>R$ 159,99</del></p>
        <a href="https://www.iobit.com/buy.php?product=pt-imf73pc6999&ref=pt_imf73pctracking2019<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imftrackbuy', 'buy', 'imfpurchase1904track-pt'); " class="buybtn"><span>Ativar Agora</span></a>
        <div class="number">
          Corra, apenas
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
           restantes   
        </div>
      </div>
      <div class="box one-pc">
        <div class="img-box"></div>
        <p>Agora: <strong>R$  63,99 </strong> <del>R$ 79,99</del></p>
        <a href="https://www.iobit.com/buy.php?product=pt-imf71pc6399&ref=pt_imf71pctracking2019<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_imf  " onclick="ga('send', 'event', 'imftrack1pcbuy', 'buy', 'imfpurchase1904track1pc-pt');" class="buybtn border"><span>Ativar Agora</span></a>
      </div>
    </div>
  </div>
  <!-- end banner -->
  <!-- feature -->
  <div class="feature feature01 wrapper clearfix">
    <h2>ENTENDA PORQUE VOC?? DEVE LIMPAR OS COOKIES DE RASTREAMENTO  <br> ARMAZENADOS NO NAVEGADOR</h2>
    <div class="img-box"><img src="<?php echo getStaticUrl('images/feature-box.jpg')?>"></div>
    <dl class="list01">
      <dt>An??ncios Te Seguem</dt>
      <dd>Anunciantes em sites que voc?? visitou <br> podem rastrear seus movimentos e <br> mostrar an??ncios onde voc?? visitar.</dd>
    </dl>
    <dl class="list02">
      <dt>Vazamento Online de Privacidade</dt>
      <dd>Hackers podem obter acesso a suas <br> informa????es pessoais como senhas de <br> suas contas. </dd>
    </dl>
  </div>
  <!-- feature -->
  <div class="feature feature02 ">
    <div class="wrapper">
      <h2>ENTENDA COMO O ANTI-RASTREAMENTO AJUDA A MANTER SUAS  <br> INFORMA????ES PESSOAIS SEGURAS E RESTAURAR UMA NAVEGA????O LIMPA </h2>
      <div class="img-box"><img src="<?php echo getStaticUrl('images/feature-box02.jpg')?>"></div>
      <dl class="list01">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>"> Limpeza Autom??tica de Cookies</dt>
        <dd>Ao ativar o anti-rastreamento, cookies de <br> rastreamento s??o deletados <br> automaticamente. </dd>
      </dl>
      <dl class="list02">
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>"> Protege Dados Pessoais </dt>
        <dd>Anunciantes n??o podem rastrear suas <br> atividades online e suas atividades <br> onlines permanecer??o seguras. </dd>
      </dl>
    </div>
  </div>
  <!-- benfits -->
  <div class="feature03">
    <h2>MAIS BENEF??CIOS QUE VOC?? PODE OBTER COM O  <br> IOBIT MALWARE FIGHTER 7 PRO</h2>
    <div class="message">
      <div class="wrapper">
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/list03.png')?>"></dt>
          <dd><strong>??ltimo Motor Bitdefender</strong></dd>
          <dd>Mais de 203,000,000+ amea??as de <br> seguran??a podem ser detectadas <br> rapidamente e evitadas.</dd>
          <dd><span>*APENAS PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list04.png')?>"></dt>
          <dd><strong>Impede Ataques de Ransomware</strong></dd>
          <dd>Para qualquer a????o suspeita <br> tentando criptografar seus <br> arquivos.</dd>
          <dd><span>*APENAS PRO</span></dd>
        </dl>
         <dl>
          <dt><img src="<?php echo getStaticUrl('images/list05.png')?>"></dt>
          <dd><strong>Protege Arquivos com Senha</strong></dd>
          <dd>Hackers n??o poder??o <br>acessar seus dados pessoais <br> com senha.</dd>
          <dd><span>*APENAS PRO</span></dd>
        </dl>
         <dl class="last">
          <dt><img src="<?php echo getStaticUrl('images/list06.png')?>"></dt>
          <dd><strong>Sem Infec????es pelo Drive USB</strong></dd>
          <dd>V??rus escondidos no drive USB <br> n??o infectar??o o seu <br> computador.</dd>
          <dd><span>*APENAS PRO</span></dd>
        </dl>
      </div>
    </div>
  </div>
  <!-- end benfits -->
  <!-- review -->
<div class="container user clearfix">
  <div class="wrapper">
    <h2>IObit Malware Fighter Pro j?? protegeu mais de <span class="buy-num buy-num-bot">4.197.688 </span> de PCs.<br>  Chegou a hora de proteger o seu.</h2>
    <ul class="user-list">
      <li>
        <img src="<?php echo getStaticUrl('images/gelu-batir.png')?>" alt=""/>
        <h4>Gelu Batir</h4>
        <p>Eu estou muito satisfeito com o produto de voc??s, o IObit Malware Fighter. Toda opera????o ?? clara, segura e ??til para proteger meu laptop. A verifica????o do programa tamb??m n??o afeta o desempenho da minha m??quina e por isso recomendei este produto para dois amigos meus.</p>
      </li>
      <li class="right">
        <img src="<?php echo getStaticUrl('images/david-cassidy.png')?>" alt=""/>
        <h4>David Cassidy</h4>
        <p>Aqueles que est??o procurando por um bom antiv??rus e anti-malware a um pre??o acess??vel n??o precisam ir al??m do IObit Malware Fighter. Eu recomendo que eles esque??am do resto e escolha o melhor, que ?? o IObit Malware Fighter.</p>
      </li>
    </ul>
  </div>
</div>
<div class="wrapper awards clearfix">
    <h2>Recomendado tamb??m por</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
</div>

<!-- service start -->
 <ul class="wrapper service clearfix">
    <li>
        <h5>Garantia de Reembolso</h5>
        <img src="<?php echo $pResUrl; ?>images/money-back-guarantee.png" alt="" />
    </li>
    <li>
        <h5> Atendimento 24 Horas</h5>
        <img src="<?php echo $pResUrl; ?>images/service.png" alt="" />
    </li>
    <li>
        <h5>Pagamento 100% Seguro</h5>
        <img src="<?php echo $pResUrl; ?>images/secured.png" alt="" />
    </li>
</ul>
  <!-- service end -->
  <!-- annotation -->
  <dl class="annotation wrapper">
    <dt>Observe: </dt>
    <dd>1*. Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempo em tempo conforme nossos crit??rios.</dd>
  </dl>

  <!-- footer -->
  <div class="footer">    
    <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
  </div>

  <!-- float -->
  <div class="float clearfix">
    <div class="wrapper">
      <div class="left-img"></div>
      <div class="message">
        <h2><strong>55% OFF</strong> para Obter Prote????o Total para <br> os Computadores da Fam??lia </h2>
        <div class="number">
          Corra, apenas   
          <div class="countdown">
            <div class="scroll-tick" ><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
          </div>
          restantes  
        </div>
      </div>
      <!-- buybtn -->
     <dl>
       <dt>Agora: <strong>R$ 69,99</strong> <del>R$ 159,99</del></dt>
       <dd><a href="https://www.iobit.com/buy.php?product=pt-imf73pc6999&ref=pt_imf73pctracking2019<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_imf" onclick="ga('send', 'event', 'imftrackbuy', 'buy', 'imfpurchase1904track-pt'); " class="buybtn"><span>Ativar Agora</span></a></dd>
     </dl>
    </div>
  </div>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>