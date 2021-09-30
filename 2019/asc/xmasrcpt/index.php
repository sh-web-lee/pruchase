<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
//ini_set('display_errors', 1);
//error_reporting(E_ALL );
function microtime_float(){
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'xmasrcpt2019' . $date;
  $c_name_t='xmasrcpt2019' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(155,189);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      $packsNum = 3;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if((rand(1,100)%2)==0){
          $packsNum=$_COOKIE[$c_name];
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
        setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
      }
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$reTime=10;
$reduceNum=151832715;
//5600114
//73.116.236
$buyNum = number_format(ceil(microtime_float()*1000/(1000*$reTime)) - $reduceNum,0,'','.');
if($_GET['action']=='getBuyNum'){
  echo $buyNum;exit();
}

$refStr='';
if(in_array($_GET['pop'],array('xr_asc'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira Advanced SystemCare 13 Pro com 80% de desconto e leve dois super brindes para o seu computador. Oferta Especial de Natal da IObit. </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700&display=swap" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript ['public'];?>
  <?php echo $gJavascript ['head']?>
</head>

<body>
  <!-- navbar start -->
  <div class="navbar">
    <div class="wrapper">
      <h2 class="fl">Advanced SystemCare 13 Pro</h2>
      <a class="logo fr" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    </div>
  </div>
  <!-- navbar end -->

  <!-- header start -->
  <div class="header">
    <div class="wrapper">
      <span class="txt"><b>Só Durante o Natal:</b> 200 Pacotes Especiais de Natal. Pacotes Restantes:</span>
      <div id="flip" class="flipNum">
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>5</b></span></div>
        <div class="listbox"><span class="list"><b>4</b></span></div>
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <div class="offer">
        <img src="<?php echo getStaticUrl('images/asc-1pc.png')?>" alt=""/>
        <h5>Pacote Padrão</h5>
        <p>1 Ano / 1 PC</p>
        <div class="discount">
          <b>40% OFF</b>
          <p>De: <del>129,99</del> Por: <span>74,99</span></p>
        </div>
        <div class="price">
          <p>ou 6x de <strong>R$ 12,50</strong></p>
          <p>Sem juros no cartão</p>
          <a class="buybtn gray" href="https://www.iobit.com/buy.php?product=pt-asc131pc7499&ref=pt_asc13purchase1pc1911rc<?php echo $refStr;?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911rc-pt')">
            <span>COMPRAR AGORA</span>
            <i class="all-icons"></i>
          </a>
        </div>
      </div>
      <div class="offer red">
        <img src="<?php echo getStaticUrl('images/asc-3pc.png')?>" alt=""/>
        <h5>Pacote Especial de Natal</h5>
        <p>1 ANO / 3 PCs + Dois Brindes</p>
        <div class="discount">
          <b>80% OFF</b>
          <p>De: <del>399,98</del> Por: <span>66,99</span></p>
        </div>
        <div class="price">
          <p>ou 6x de <strong>R$ 11,16</strong></p>
          <p>Sem juros no cartão</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-asc133pcsdiu6699&ref=pt_asc13purchase3pcsdiu1911rc<?php echo $refStr;?>&refs=pt_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911rc-pt')">
            <span>COMPRAR AGORA</span>
            <i class="all-icons"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature -->
  <div class="feature wrapper clearfix">
    <!-- feature-title -->
    <h2>Conheça 3 vantagens em atualizar para PRO</h2>
    <!-- feature-machine -->
    <div class="machine">
      <img src="<?php echo $pResUrl;?>images/feature-mac01.png" alt="">
      <img src="<?php echo $pResUrl;?>images/feature-mac02.png" alt="">
    </div>
    <!-- feature-list -->
    <ul>
      <li>
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
          <dd>
            <h3>Seu PC Rodando como Novo</h3>
            <p>Assista vídeos, jogue e trabalhe com múltiplos programas ao mesmo tempo.</p>
            <p>Dê adeus aos travamentos constantes e computador lento.</p>
          </dd>
        </dl>
      </li>
      <li>
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
          <dd>
            <h3>Internet até 300% Mais Veloz*</h3>
            <p>Acesse o seu conteúdo favorito com mais velocidade.</p>
            <p>Gaste menos tempo carregando páginas e vídeos.</p>
          </dd>
        </dl>
      </li>
      <li>
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
          <dd>
            <h3>Você Vai Navegar Sem Medo</h3>
            <p>Limpeza automática de rastros de privacidade.</p>
            <p>Protege o roubo de seus dados por spywares, adwares e malwares.</p>
          </dd>
        </dl>
      </li>
    </ul>
  </div>
  <!-- end feature -->

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper clearfix">
      <h2>Leve Dois Super Brindes para Manter seu PC e seu Disco Completamente Otimizados</h2>

      <dl class="fl clearfix">
        <dt class="fl"> <img src="<?php echo getStaticUrl('images/gift-iu.png')?>" alt=""/></dt>
        <dd class="fl">
          <ul class="fr">
            <li>Mantém o seu PC limpo através da desinstalação de programas teimosos, sobras de programas e da remoção de plugins maliciosos.</li>
          </ul>
        </dd>
      </dl>

      <dl class="fl clearfix">
        <dt class="fl"> <img src="<?php echo getStaticUrl('images/gift-sd.png')?>" alt=""/></dt>
        <dd class="fl">
          <ul class="fr">
            <li>Desfragmenta automaticamente seu PC e acelera a velocidade de acesso aos arquivos para otimizar o seu disco.</li>
          </ul>
        </dd>
      </dl>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- review -->
  <div class="review wrapper clearfix">
    <!-- review-title -->
    <h2>Advanced SystemCare Pro já acelerou mais de <span class="buyNum"><?php echo $buyNum ?></span> de PCs.</h2>
    <!-- Brasil -->
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/brasil.png" alt="Brasil"></dt>
      <dd>
        <h4>Sávio da Rocha Lobo</h4>
        <p>
          Tenho usado o Advanced SystemCare por um bom tempo e já são mais de 5 anos deixando o meu computador rodando como se ele tivesse acabado de sair da caixa e o programa só tem ficado melhor a cada versão.
        </p>
        <hr>
        <cite>Brasil</cite>
      </dd>
    </dl>
    <!-- Estados Unidos -->
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/estados-unidos.png" alt="Estados Unidos"></dt>
      <dd>
        <h4>Stephen H.Littleton</h4>
        <p>
          Advanced SystemCare deu vida nova ao meu PC! Logo de cara, eu percebi uma diferença notável. A inicialização estava mais rápida, os problemas que estavam causando travamentos e lentidão desapareceram!
        </p>
        <hr>
        <cite>Estados Unidos</cite>
      </dd>
    </dl>
    <!-- media -->
    <div class="media clearfix">
      <h2>Veja o que a mídia especializada tem a dizer</h2>
      <img src="<?php echo $pResUrl;?>images/baixaki.png" alt="Baixaki">
      <P>
        Em nossos testes, notamos que o Advanced SystemCare tem uma eficiência excepcional. <br>
        Ele consegue encontrar problemas para resolver no seu computador que realmente são difíceis de imaginar.
      </P>
    </div>
    <!-- award -->
    <div class="award">
      <h2>Recomendado também por</h2>
      <img src="<?php echo $pResUrl;?>images/award.png" alt="">
    </div>
  </div>
  <!-- end review -->

  <!-- comparison -->
  <div class="comparison wrapper">
    <table>
      <thead>
      <tr>
        <th colspan="2" class="text">Compare as funções da versão Free e Pro</th>
        <th class="space"></th>
        <th class="itema">Advanced SystemCare <br> PRO</th>
        <th class="space"></th>
        <th class="itemb">Advanced SystemCare <br> FREE</th>
      </tr>
      </thead>
      <tbody>
      <!-- 01 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon01.png" alt=""></td>
        <td class="text">Limpeza, Reparo e Otimização Básica de Sistema</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="gray"></i></td>
      </tr>
      <!-- 02 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon02.png" alt=""></td>
        <td class="text">Proteção Básica contra Ameaças de Segurança</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i class="gray"></i></td>
      </tr>
      <!-- 03 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon03.png" alt=""></td>
        <td class="text">Sistema Mais Rápido com Limpeza Automática de RAM</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 04 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon04.png" alt=""></td>
        <td class="text">Ajuste Definitivo do Sistema para um Desempenho Superior</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 05 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon05.png" alt=""></td>
        <td class="text">Internet 300% Mais Rápida com Internet Booster</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 06 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon06.png" alt=""></td>
        <td class="text">Inicialização até Duas Vezes Mais Rápida com o Gerenciador de Inicializações</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 07 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon07.png" alt=""></td>
        <td class="text">Limpeza Profunda dos Registros do Windows</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 08 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon08.png" alt=""></td>
        <td class="text">Desempenho Máximo do Disco Rígido</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 09 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon09.png" alt=""></td>
        <td class="text">Otimização Agendada ou em Tempo Real com Manutenção Automática</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 10 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon10.png" alt=""></td>
        <td class="text">Detecção Completa contra Ameaças de Segurança</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 11 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon11.png" alt=""></td>
        <td class="text">Experiência Online Segura com Proteção de Navegação</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 12 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon12.png" alt=""></td>
        <td class="text">Limpeza Automática de  Rastros com Anti-rastreamento do Navegador</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 13 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon13.png" alt=""></td>
        <td class="text">Atualização Automática para a Última Versão</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      <!-- 14 -->
      <tr>
        <td class="icon"><img src="<?php echo $pResUrl;?>images/icon14.png" alt=""></td>
        <td class="text">Suporte Técnico Gratuito 24/7</td>
        <td class="space"></td>
        <td class="itema"><i></i></td>
        <td class="space"></td>
        <td class="itemb"><i></i></td>
      </tr>
      </tbody>
    </table>
  </div>
  <!-- end comparison -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imfbox fl">
        <img class="pcs on" src="<?php echo getStaticUrl('images/asc-3pc.png')?>" alt=""/>
        <img class="pc" src="<?php echo getStaticUrl('images/asc-1pc.png')?>" alt=""/>
      </div>
      <ul class="fl">
        <li class="active" data-num="1"><i></i><span>Pacote para 3 Pcs</span> <strong>80% OFF</strong></li>
        <li data-num="0"><i></i><span>Pacote para 1 PC</span> <strong>40% OFF</strong></li>
      </ul>
      <div class="price fr">
        <p><strong><small>R$</small> <span>66,99</span></strong> <del>R$ <span>399,98</span></del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-asc133pcsdiu6699&ref=pt_asc13purchase3pcsdiu1911rc<?php echo $refStr;?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911rc-pt')">
          <span>COMPRAR AGORA</span>
          <i class="all-icons"></i>
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
      <dt>Formas de Pagamento</dt>
      <dd><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""></dd>
    </dl>
    <dl>
      <dt>Site Seguro</dt>
      <dd><img src="<?php echo getStaticUrl('images/google.png')?>" alt=""></dd>
    </dl>
  </div>
  <dl class="note wrapper">
    <dt>Observe:</dt>
    <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
    <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
  </dl>
  <p class="copyright wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Todos os direitos reservados.</p>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "xasc.php",
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