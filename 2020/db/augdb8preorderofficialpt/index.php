<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
    $pResUrl = './';
    $pRootUrl = '../../../';
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptdbofficial_p' . $date;
  $c_name_t='ptdbofficial_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(64,98);
    setcookie($c_name, $packsNum, time() + 3600 * 24);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24);
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
$refStr .= empty($_GET['ref']) ? '' : ('-'.$_GET['ref']);
$refStr .= empty($_GET['st']) ? '' : ('-'.$_GET['st']);
$refStr .= empty($_GET['more']) ? '' : ('-'.$_GET['more']);

$ver_arr = explode('.',$_GET['ver']);
$refStr .= empty($_GET['ver']) ? '' : '-'.$ver_arr[0].$ver_arr[1];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <title>Obtenha o Driver Booster 8 PRO com 65% de desconto na pré-venda - IObit</title>
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@500;600;700&family=Play:wght@700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <div class="header">
        <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">
          IObit
        </a>
        <p><img src="<?php echo getStaticUrl('images/db-icon.png')?>"/> Driver Booster 8 PRO</p>
      </div>
      <div class="offer clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt="Driver Booster PRO"/>
        </div>
        <div class="right">
          <p>A Pré-Venda Começou</p>
          <h2>O Melhor Atualizador de Drivers do Mundo</h2>
          <h4>Tenha um PC mais eficiente e uma melhor experiência de jogo</h4>
          <div class="price">
            <span class="one">Preço da <br>Pré-venda<br></span>
            <span class="two"><strong>R$ 69,99</strong> <del>R$ 199,99</del></span>
            <a class="buybtn" 
               href="https://www.iobit.com/buy.php?product=pt-db8preorder6999&ref=pt-db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db"
               onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-pt');">
              Adquirir Agora
           </a>
          </div>
          <div class="numbox">
            <h3>
              <span id="topNum" class="giftNum">
                <b class="nwrap"><b class="numlist"></b></b>
                <b class="nwrap"><b class="numlist"></b></b>
              </span>
              Restantes Agora
            </h3>
            <div class="bar">
               <div class="barbox"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->
  <div class="feature">
    <div class="message01 wrapper">
      <div class="title">
        <h2>Mais de 4,500,000 Drivers</h2>
        <h4>O Driver Booster PRO tem o maior banco de drivers existente</h4>
      </div>
      <div class="line"></div>
      <ul class="img-box">
        <li class="one active">
          <img src="<?php echo getStaticUrl('images/feature-01-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-01-02.png')?>" alt="" class="icon02">
        </li>
        <li class="two ">
          <img src="<?php echo getStaticUrl('images/feature-04-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-04-02.png')?>" alt="" class="icon02">
        </li>
        <li class="three ">
          <img src="<?php echo getStaticUrl('images/feature-03-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-03-02.png')?>" alt="" class="icon02">
        </li>
         <li class="four">
          <img src="<?php echo getStaticUrl('images/feature-02-01.png')?>" alt="" class="icon01">
          <img src="<?php echo getStaticUrl('images/feature-02-02.png')?>" alt="" class="icon02">
        </li>
      </ul>
      <div class="message-box">
        <dl class="active">
          <dt><i></i>Atualização Automática de Drivers <span>WHQL</span></dt>
          <dd>Encontra automaticamente os drivers corretos e atualiza com drivers certificados WHQL.</dd>
        </dl>
        <dl>
          <dt><i></i>Drivers Estáveis e Recentes <span class="market">único no mercado</span></dt>
          <dd>
            Disponibiliza drivers estáveis para quem prioriza confiabilidade do dispositivo e drivers mais recentes para quem prioriza suporte às últimas funções.
          </dd>
        </dl>
        <dl class="three">
          <dt><i></i>Corrige Problemas de Hardware</dt>
          <dd>
            Disponibiliza solução de 1-clique para corrigir problemas<br> como qualidade baixa de vídeo, som ruim, conexão falha da internet, e dispositivos externos que não estejam funcionando corretamente.
          </dd>
        </dl>
        <dl>
          <dt><i></i>Atualização Offline de Drivers</dt>
          <dd>
            Instala drivers de rede sem precisar deconexão com a<br> internet. Baixa o driver correto de rede num PC para que possa ser transferido para outro.
          </dd>
        </dl>
      </div>
    </div>
    <div class="message02 wrapper" data-name='animation'>
      <div class="title">
        <h2>Drivers e Componentes Game Ready para Jogos</h2>
        <h4>Otimização para 90% dos Jogos de PC</h4>
      </div>
      <div class="line"></div>
      <dl class="message-box">
        <dt class="one" data-name='default'>Experiência mais Estável do Jogo</dt>
        <dd class="one" data-name='default'>
          Disponibiliza os últimos drivers e componentes de jogo Game Ready para reduzir lentidão no computador, travamentos e as novas funções de jogos.
        </dd>
        <dt class="two" data-name='default'>Aceleração de Jogo</dt>
        <dd class="two" data-name='default'>
          Finaliza serviços desnecessários para melhorar sua velocidade do PC para uma melhor experiência do jogo.
        </dd>
      </dl>
      <div class="img-box">
        <img src="<?php echo getStaticUrl('images/computer.png')?>" alt="" class="computer three" data-name='default'>
        <span class="light four" data-name='default'></span>
        <span class="smail-light"></span>
        <img src="<?php echo getStaticUrl('images/feature-icon.png')?>" alt="" class="icon five" data-name='default'>
      </div>
    </div>
    <div class="feature-list" data-name='animation'>
      <div class="line"></div>
      <div class="both"></div>
      <div class="wrapper">
        <h2>Outras Funções que Você Pode Desfrutar</h2>
        <dl class="one" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons01.png')?>" alt="" ></dt>
          <dd>
            <h3>Atualização Segura</h3>
            <p>Faz backup automático de drivers e cria um ponto de restauração do sistema.</p>
          </dd>
        </dl>
        <dl class="center two" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons02.png')?>" alt="" ></dt>
          <dd>
            <h3>Modo Silencioso</h3>
            <p>Silencia automaticamente todas as notificações para evitar pertubarções.</p>
          </dd>
        </dl>
        <dl class="three" data-name='default'>
          <dt><img src="<?php echo getStaticUrl('images/feature-icons03.png')?>" alt="" ></dt>
          <dd>
            <h3>Deletar Automaticamente</h3>
            <p>Deleta automaticamente os pacotes de drivers instalados.</p>
          </dd>
        </dl>
      </div>
    </div>
  </div>
  <div class="bottom-bg" data-name='animation'>
    <div class="review wrapper">
      <h2>O Melhor Atualizador de Drivers do Mundo</h2>
      <ul class="message">
        <li data-name='default'>
          <strong>40M+ </strong>
          Downloads
        </li>
        <li class="center" data-name='default'>
          <strong>4.9/5.0 </strong>
          Avaliação dos Usuários
        </li>
        <li data-name='default'>
          <strong>1000+ </strong>
          Recomendações da Mídia
        </li>
      </ul>
      <div class="review-box">
        <span class="prev"></span>
        <span class="next"></span>
        <div class="light"></div>
        <div class="review-message">
          <div class="roll">
            <dl>
              <dt>Opinião da Mídia</dt>
              <dd>
                "A IObit tem muitos utilitários e o Driver Booster Pro, que atualiza seus drivers automaticamente, é um dos melhores. A função central do Driver Booster PRO é ainda mais atraente graças à inclusão de múltiplas licenças por um preço bem amigável, assim como de uma interface personalizável que mostra informações específicas relacionadas ao hardware. Os competidores Ashampoo Driver Updater and Slimware Utilities Driver Update fazem um bom trabalho, mas IObit Driver Booster Pro é o melhor da sua categoria."
              </dd>
            </dl>
            <dl>
              <dt>Opinião do Usuário</dt>
              <dd>
                "Driver Booster é um aplicativo sensacional. Se você é como eu e tem diversos aplicativos e dispositivos e não tem tempo para atualizá-los manualmente, eu recomendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveniência.”
              </dd>
            </dl>
            <dl>
              <dt>Opinião do Usuário</dt>
              <dd>
                Driver Booster é verdadeiramente o melhor atualizador de drivers no mercado. Possui uma interface amigável, é simples de usar e faz seu trabalho melhor do que qualquer atualizador de drivers que já usei. Esse programa é merecedor de nota máxima. Recomendo fortemente.
              </dd>
            </dl>
            <dl>
              <dt>Opinião do Usuário</dt>
              <dd>
                "Com Driver Booster, eu consigo saber facilmente quais drivers estão desatualizados e posso atualizá-los com facilidade. Além disso, me ajuda a reparar erros com de e rede. Eu não acreditava antes de usar, mas depois de testá-lo eu o adorei, pois meu PC está mais estável, rápido e seguro do que 8 meses atrás. Muito obrigado, IObit."
              </dd>
            </dl>
            <dl>
              <dt>Opinião do Usuário</dt>
              <dd>
                O Driver Booster me ajudou a resolver problemas no meu laptop gamer. Quando eu tentava atualizar meus drivers, o meu computador às vezes apresentava problemas e eu tinha que formatá-lo para restaurar suas funções e agora isto não acontece mais com Driver Booster 7. É a melhor ferramenta no mercado!
              </dd>
            </dl>
          </div>
        </div>
        <ul>
          <li>
            <div><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya"></div>
            <p>Myo Thuya</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/carlos-alexandre.png')?>" alt="Carlos Alexandre Veríssimo"></div>
            <p>Carlos Alexandre Veríssimo</p>
          </li>
          <li class="active">
            <div><img src="<?php echo getStaticUrl('images/pc.png')?>" alt="PC Magazine"></div>
            <p>PC Magazine</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam Backlund"></div>
            <p>Adam Backlund</p>
          </li>
           <li>
            <div><img src="<?php echo getStaticUrl('images/hishaam-salasa.png')?>" alt="Hishaam Salasa"></div>
            <p>Hishaam Salasa</p>
          </li>
        </ul>
      </div>
    </div>
    <!-- awards start -->
    <div class="awards wrapper">
      <h2>Prêmios da Empresa</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
    <!-- awards end -->
  </div>

<!-- footer start -->
<div class="footer">
  <div class="wrapper">
    <dl>
      <dt>Observe:</dt>
      <dd>
        *.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.
      </dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. All Rights Reserved</p>
  </div>
</div>
<!-- footer end -->

<!-- float start -->
<div class="floatlayer clearfix">
  <div class="wrapper clearfix">
    <div class="left fl">
      <img src="<?php echo getStaticUrl('images/fl-db-box.png')?>" alt="Driver Booster PRO"/>
    </div>
    <div class="numbox fl">
      <h3>
        <span id="botNum" class="giftNum">
          <b class="nwrap"><b class="numlist"></b></b>
          <b class="nwrap"><b class="numlist"></b></b>
        </span>
        de 1000 pacotes restantes agora
      </h3>
    </div>
    <div class="price fr">
      <span class="two"><strong>R$ 69,99</strong> <del>R$ 199,99</del></span>
      <span></span>
      <a class="buybtn" 
         href="https://www.iobit.com/buy.php?product=pt-db8preorder6999&ref=pt-db8preorderofficial<?php echo $refStr; ?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db8preorderofficial-pt');">
        Adquirir Agora
      </a>
    </div>
  </div>
</div>
<!-- float end -->

  <script>refStr='<?php echo $refStr;?>';</script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>