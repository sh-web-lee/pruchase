<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  //创建浮点计算，取 购买人数 及 剩余礼品数，根据情况选择使用
  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  
  // 已购买人数
  // 需要精确到某个值时，先输出 ceil(microtime_float()*1000/20000) 再 由此结果计算需要减去的量
  $buyNum = ceil(microtime_float()*1000/20000) - 69041325;
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title> Adquira Advanced SystemCare 11 Pro com 40% de desconto. Oferta Limitada da IObit. </title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans:400,600'>
<link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- header start -->
  <div class="header">
    <div class="wrapper clearfix">
      <a class="logo fl" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo $pResUrl; ?>images/logo.png" alt="IObit">
      </a>
      <div class="site fr">
        <span>SITE SEGURO:</span>
        <img src="<?php echo $pResUrl; ?>images/header_site.png">
      </div>
    </div>
  </div>
  <!-- header end -->

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <h1>Mais Barato que Comprar um Computador Novo 40% OFF</h1>
      <div class="content">
         <img src="<?php echo $pResUrl; ?>images/asc-box.png" class="img-box">
         <div class="right-message">
           <p>Suporte para 3 PCs por 1 ano</p>
           <p>Manutenção automatizada do PC</p>
           <p>Assistência técnica 24 horas por dia</p>
           <dl>
             <dt><strong>R$ 76,99</strong> à vista</dt>
             <dd><a href="https://www.iobit.com/buy.php?product=pt-asc113pc7699&ref=pt_asc11purchase1807&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc11purchase1807-pt')" class="buybtn"><i></i> <span>ATIVE AGORA!</span></a></dd>
             <dd><img src="<?php echo $pResUrl; ?>images/people.png" alt=""> Mais de <strong><?php echo $buyNum;?></strong> pessoas já compraram</dd>
           </dl>
         </div>
      </div>
      <div class="date">
        A oferta termina em:   <span>  <strong>09</strong> hr : <strong>09</strong> min : <strong>09</strong> sec : <strong>09</strong> ms</span>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <!-- intro start -->
  <div class="intro wrapper clearfix">
    <h2 class="line">Conheça <strong>3 vantagens</strong> em atualizar para PRO </h2>
    <img class="fl" src="<?php echo getStaticUrl('images/intro_asc.png')?>" alt="" />
    <div class="fr">
      <dl>
        <dt>1、</dt>
        <dd class="first"><h3>Seu PC Rodando como Novo</h3></dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Assista vídeos, jogue e trabalhe com múltiplos programas ao mesmo tempo.</span>
        </dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Dê adeus aos travamentos constantes e computador lento.</span>
        </dd>
      </dl>
      <dl>
        <dt class="two">2、</dt>
        <dd class="first"><h3>Internet até 300% Mais Veloz* </h3></dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Acesse o seu conteúdo favorito com mais velocidade.</span>
        </dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Gaste menos tempo carregando páginas e vídeos.</span>
        </dd>
      </dl>
      <dl>
        <dt class="three">3、</dt>
        <dd class="first"><h3>Você Vai Navegar Sem Medo</h3></dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Limpeza automática de rastros de privacidade.</span>
        </dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Protege o roubo de seus dados por spywares, adwares e malwares.</span>
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- center-buy start -->
  <div class="center-buy">
    <div class="wrapper">
      <h2>Com <strong>R$ 0,21</strong> por dia, você terá seu PC rodando ao máximo de sua capacidade.</h2>
      <p>Assine por um ano e leve Advanced SystemCare Pro para 2 PCs extras.</p>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-asc113pc7699&ref=pt_asc11purchase1807&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc11purchase1807-pt')">
        <i></i><span>ATIVE AGORA!</span>
      </a>
      <div class="vista">6x de <strong>R$ 12,83</strong> <span>(ou R$ 76,99 a vista)</span></div>
      <p class="last">Economize <b>R$ 53,00</b> </p>
    </div>
  </div>
  <!-- center-buy end -->

  <!-- media-rev start -->
  <div class="media-rev wrapper">
    <h2 class="line">Veja o que a mídia especializada tem a dizer</h2>
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo $pResUrl; ?>images/media_rev.png"></dt>
      <dd>
        <span>Em nossos testes, notamos que o Advanced SystemCare tem uma eficiência excepcional.</span>
        Ele consegue encontrar problemas para resolver no seu computador que realmente são difíceis de imaginar.
      </dd>
    </dl>
    <h4>Recomendado também por</h4>
    <img src="<?php echo $pResUrl; ?>images/media_icons.png">
  </div>
  <!-- media-rev end -->

  <!-- user-rev start -->
  <div class="user-rev">
    <div class="wrapper clearfix">
      <h2 class="line">Veja o que pessoas como você tem a dizer</h2>
      <dl class="first">
        <dt><img src="<?php echo $pResUrl; ?>images/paul.png" alt="Paul Cummings"></dt>
        <dd><h5>Paul Cummings</h5></dd>
        <dd><img src="<?php echo $pResUrl; ?>images/flag_us.png"></dd>
        <dd>"Eu recomendo esse programa </dd>
        <dd>pra todos os meus amigos que </dd>
        <dd>reclamam de computador lento."</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/savio.png" alt="Sávio da Rocha Lobo"></dt>
        <dd><h5>Sávio da Rocha Lobo </h5></dd>
        <dd><img src="<?php echo $pResUrl; ?>images/flag_brazil.png"></dd>
        <dd>"São mais de cinco anos deixando </dd>
        <dd>o meu computador rodando </dd>
        <dd>como se ele tivesse acabado de</dd>
        <dd> sair da caixa."</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/fritz.png" alt="Fritz Stein"></dt>
        <dd><h5>Fritz Stein</h5></dd>
        <dd><img src="<?php echo $pResUrl; ?>images/flag_germany.png"></dd>
        <dd>"O meu PC foi ficando lento com o </dd>
        <dd>tempo. Eu usei o ASC e fiquei</dd>
        <dd>surpreso, parecia o primeiro dia</dd>
        <dd>que estava usando meu PC."</dd>
      </dl>
    </div>
  </div>
  <!-- user-rev end -->

  <div class="wrapper">
  
    <!-- comparison start -->
    <div class="comparison" id="compare">
      <table border="0" cellspacing="0" cellpadding="0" width="100%">
        <thead>
          <tr>
            <th class="text" colspan="2">Nós confiamos no nosso produto. Nós apostamos na sua satisfação</th>
            <th class="itemb">
              <span>Advanced SystemCare</span>
              <span>FREE</span>
            </th>
            <th class="itema">
              <span>Advanced SystemCare</span>
              <span>PRO</span>
              <p>Licença de 1 Ano / 3 PCs</p>
              <del>R$ 129,99</del>
              <strong>R$ 76,99 </strong>
            </th>
          </tr>
        </thead>
        <tbody>
          <tr>
            <td class="icons" width="45"><img src="<?php echo $pResUrl; ?>images/icon_01.png"></td>
            <td class="virtue">Limpeza, Reparo e Otimização Básica de Sistema</td>
            <td class="itemb"><span class="mark-icons blue">√</span></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_02.png"></td>
            <td class="virtue">Proteção Básica contra Ameaças de Segurança</td>
            <td class="itemb"><span class="mark-icons blue">√</span></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_03.png"></td>
            <td class="virtue">Novas Fantásticas Capas e Temas</td>
            <td class="itemb"><span class="mark-icons blue">√</span></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_04.png"></td>
            <td class="virtue">Tuneup de Sistema Final para um Desempenho Superior</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_05.png"></td>
            <td class="virtue">Internet 300% Mais Rápida com Internet Booster</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_06.png"></td>
            <td class="virtue">Otimização em Tempo Real com Otimização Ativa</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_07.png"></td>
            <td class="virtue">Limpeza Profunda dos Registros do Windows</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_08.png"></td>
            <td class="virtue">Desempenho Máximo do Disco Rígido</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_09.png"></td>
            <td class="virtue">Detecção Completa contra Ameaças de Segurança</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_10.png"></td>
            <td class="virtue">Experiência Online Segura com Proteção de Navegação </td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_11.png"></td>
            <td class="virtue">Auto Limpeza para Segurança de Privacidade Sempre que Você Logar</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_12.png"></td>
            <td class="virtue">Atualização Automática para a Última Versão</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_13.png"></td>
            <td class="virtue">Funciona em Segundo Plano – Instale e Esqueça</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
          <tr>
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
            <td class="virtue">Suporte Técnico Gratuito 24/7</td>
            <td class="itemb"></td>
            <td class="itema"><span class="mark-icons orange">√</span></td>
          </tr>
        </tbody>
        <tfoot>
          <tr>
            <th colspan="2"></th>
            <th class="itemb">
              <span>GRÁTIS</span>
              <p>Sua atual versão</p>
            </th>
            <th class="itema">
              <del>R$129,99</del>
              <strong>R$ 76,99 </strong>
              <p>Licença de 1 Ano / 3 PCs</p>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-asc113pc7699&ref=pt_asc11purchase1807&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc11purchase1807-pt')">
                Compre Agora
              </a>
            </th>
          </tr>
        </tfoot>
      </table>
    </div>
    <!-- comparison end -->
    <div class="payment">
      <dl>
        <dt>Garantia de Reembolso</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/moneyback.png"></dd>
      </dl>
      <dl class="center">
        <dt> Formas de Pagamento</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/visa.png"></dd>
      </dl>
      <dl>
        <dt>Pagamento 100% Seguro</dt>
        <dd><img src="<?php echo $pResUrl; ?>images/serives.png"></dd>
      </dl>
    </div>
    <!-- annotation start -->
    <dl class="annotation">
      <dt>Observe:</dt>
      <dd>
        1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.
      </dd>
      <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
    </dl>
    <!-- annotation end -->
  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
  <!-- footer end -->

<script> 

  //count down
  function cycleCountdown(){
    var startTimestamp = MApp(2.2).datetime.getTimestamp('2013-11-27 22:17:00');
    var datetime = MApp(2.2).datetime.getCycleCountdown(startTimestamp, 4);
    d = MApp(2.2).packages.zeroize(datetime[0], 2);
    h = MApp(2.2).packages.zeroize(datetime[1], 2);
    i = MApp(2.2).packages.zeroize(datetime[2], 2);
    s = MApp(2.2).packages.zeroize(datetime[3], 2);
    mi = MApp(2.2).packages.zeroize(datetime[4], 3).substr(0,2);
    $(".date strong").eq(0).html(h).end().eq(1).html(i).end().eq(2).html(s).end().eq(3).html(mi);
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();
</script>
</body>
</html>