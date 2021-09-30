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

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ptascout' . $date;
  if (!isset($_COOKIE[$c_name])) {
    $packsNum = 49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 3) {
      setcookie($c_name, 3, time() + 3600 * 24 * 2);
      $packsNum = 3;
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}
if (in_array($_GET['st'], array('asc_c6', 'asc_c2', 'asc_c3',
        'asc_t2', 'asc_t3', 'asc_t4', 'asc_t5', 'asc_t6', 'asc_t7', 'asc_t8', 'asc_t9', 'asc_t10', 'asc_t11', 'asc_s1',
        'asc_s3', 'asc_s4', 'asc_s5', 'asc_s6', 'asc_s7', 'asc_s8', 'asc_ac2', 'asc_ac3', 'asc_report',
        'asc_promote', 'asc_autocare', 'asc_buypro', 'asc_pro1', 'asc_pro2', 'asc_pro3', 'asc_pro4', 'asc_pro5',
        'asc_pro6', 'asc_protip1', 'asc_protip2', 'asc_protip3', 'asc_protip4', 'asc_protip5', 'asc_protip6',
        'asc_c8','23','asc_s11','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
        'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
        'asc_gift','asc_pro11','asc_pro12','asc_s13','asc_s14','asc_s15','asc_p8','asc_p9','asc_p11','maxcode','garegion',
        'invalidcode','asc_install','asc_p6','asc_p7','ascofficialfree','ascofficialpro',
        'asc_c10','asc_c11','asc_su5','asc_su7','asc_su6','asc_promotea','asc_promoteb','asc_promotec','asc_promoted',
        'asc_ac4','asc_su8','asc_su9','asc_protip7','asc_protip8','asc_wr')
)) {
  $refStr = '-' . $_GET['st'];
} else {
  $refStr = '';
}
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title> Adquira Advanced SystemCare 12 Pro com 75% de desconto e leve dois brindes para a otimização completa do seu PC. Oferta Limitada da IObit. </title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,700'>
  <link href="<?php echo $pResUrl; ?>style/style.css" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>

<body>
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
      <h1 class="title">Ainda restam <b id="num" class="numbox"><div class="list">0</div><div class="list">0</div></b>Pacotes de Otimização Total disponíveis!</h1>
      <div class="panel clearfix">
        <div class="box left">
          <div class="top"><h2>Pacote para 1 PC</h2></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/>
            <del>R$ 99,99</del>
          </div>
          <div class="price">
            <p><strong><big>20%</big> OFF</strong></p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pt-asc121pc7699&ref=pt_asc121pcpurchase1810<?php echo $refStr;?>&refs=pt_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1810-pt')">
             COMPRAR AGORA
            </a>
          </div>
        </div>
        <div class="box center active">
          <div class="top"><h2>Pacote de Otimização Total</h2></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/asc-gift-box.png')?>" alt=""/>
            <del>R$ 339,97</del>
          </div>
          <div class="price">
            <p><strong><big>75%</big> OFF</strong></p>
            <a class="buybtn green"
               href="http://www.iobit.com/buy.php?product=pt-asc123pciusd8499&ref=pt_asc123pciusdpurchase1810<?php echo $refStr;?>&refs=pt_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1810-pt')">
             COMPRAR AGORA
            </a>
            <p class="people"> <i class="all-icons"></i> Mais de  <b class="buyNum">****</b> pessoas já compraram </p>
          </div>
        </div>
        <div class="box right">
          <div class="top"><h2>Pacote para 3PCs</h2></div>
          <div class="imgbox">
            <img src="<?php echo getStaticUrl('images/asc-box-three.png')?>" alt=""/>
            <del>R$ 199,90</del>
          </div>
          <div class="price">
            <p><strong><big>60%</big> OFF</strong></p>
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pt-asc123pc7999&ref=pt_asc123pcpurchase1810<?php echo $refStr;?>&refs=pt_purchase_asc"
               onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1810-pt')">
             COMPRAR AGORA
            </a>
          </div>
        </div>
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
          <span>Limpeza automática de rastros de privacidade e disfarça sua assinatura digital.</span>
        </dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Mantém seus dados pessoais protegidos contra qualquer acesso secreto.</span>
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- donation start -->
  <div class="donation wrapper">
    <h2>Dois brindes extras no Pacote de Otimização Total</h2>
    <div class="clearfix">
      <div class="item">
        <img src="<?php echo getStaticUrl('images/iu-box.png')?>" alt="IObit Uninstaller PRO"/>
        <h3>IObit Uninstaller PRO</h3>
        <ul>
          <li>
            <i class="all-icons">√</i>
            <span>Remove programas teimosos, plugins maliciosos e bundleware!</span></li>
          <li>
            <i class="all-icons">√</i>
            <span>Não deixa nenhum resto de programas desinstalados no seu PC!</span>
          </li>
        </ul>
      </div>
      <div class="item">
        <img src="<?php echo getStaticUrl('images/sd-box.png')?>" alt="Smart Defrag Pro"/>
        <h3>Smart Defrag Pro</h3>
        <ul>
          <li>
            <i class="all-icons">√</i>
            <span>Aumenta a velocidade de acesso aos arquivos no seu disco!</span>
          </li>
          <li>
            <i class="all-icons">√</i>
            <span>Desfragmenta arquivos automaticamente durante o tempo ocioso do sistema!</span>
          </li>
        </ul>
      </div>
    </div>
  </div>
  <!-- donation end -->

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

  <!-- comparison start -->
  <div class="comparison wrapper" id="compare">
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
        <tr class="last">
          <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_14.png"></td>
          <td class="virtue">Suporte Técnico Gratuito 24/7</td>
          <td class="itemb"></td>
          <td class="itema"><span class="mark-icons orange">√</span></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->
  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imgbox eight"></div>
      <ul class="fl">
        <li class="eight active" data-num="1">
          <span>Pacote de Otimização Total</span>
          <strong>-75%</strong>
        </li>
        <li data-num="2">
          <span> Pacote para 3 PCs</span>
          <strong>-60%</strong>
        </li>
        <li data-num="0">
          <span> Pacote para 1 PC</span>
          <strong>-20%</strong>
        </li>
      </ul>
      <div class="price fr">
        <p class="discount">
          <strong>R$<big>84</big>,99</strong> <del>R$ 339,97</del>
        </p>
        <a class="buybtn green"
           href="http://www.iobit.com/buy.php?product=pt-asc123pciusd8499&ref=pt_asc123pciusdpurchase1810<?php echo $refStr;?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1810-pt')">
          COMPRAR AGORA
        </a>
      </div>
    </div>
  </div>
  <!-- footbuy end -->
  <!-- payment start -->
  <div class="payment wrapper clearfix">
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/money-back.png')?>" alt=""/></dt>
      <dd>Garantia de Reembolso</dd>
    </dl>
    <dl class="center">
      <dt><img src="<?php echo getStaticUrl('images/formas.png')?>" alt=""/></dt>
      <dd>Formas de Pagamento</dd>
    </dl>
    <dl>
      <dt><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dt>
      <dd>Pagamento 100% Seguro</dd>
    </dl>
  </div>
  <!-- payment end -->
  <!-- annotation start -->
  <dl class="annotation wrapper">
    <dt>Observe:</dt>
    <dd>
      1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.
    </dd>
    <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
  </dl>
  <!-- annotation end -->


  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
  <!-- footer end -->

<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>