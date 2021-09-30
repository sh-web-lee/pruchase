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
if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
    echo $buyNum;
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
        'invalidcode','asc_install','asc_p6','asc_p7')
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
  <title>Advanced SystemCare 12 Pro com 40% de Desconto. Oferta Limitada da IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script>
    function decreasingPacks() {
      $.ajax({
        type: "GET",
        url: "msale.php",
        data: "action=getPacks&r=" + Math.random(),
        success: function(packs) {
          $('#packs').html(packs);
          setTimeout('decreasingPacks()', 10000);
        }
      });
    }
    setTimeout('decreasingPacks()', 10000);
  </script>
</head>

<body>
  <div class="main">
    <!-- header start -->
    <div class="header">
      <div class="wrapper clearfix">
        <a class="logo fl" href="https://www.iobit.com/pt/index.php" target="_blank">
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
        <h1 class="line">
          <img src="<?php echo $pResUrl; ?>images/banner_title.png" alt="Mais Barato que Comprar um Computador Novo">
        </h1>
        <div class="panel clearfix">
          <dl class="fl picture">
            <dt><img src="<?php echo getStaticUrl('images/banner_asc.png')?>" alt="Advanced SystemCare PRO" /></dt>
            <dd> Oferta termina em</dd>
            <dd class="off">
              <strong>40%</strong>
              OFF
            </dd>
            <dd class="versao"></dd>
          </dl>
          <div class="fr text gradient">
            <h3>Advanced SystemCare 12 - 1 ano / 3 PCs</h3>
            <p class="original">De <del>R$ 129,99</del></p>
            <p class="price">6x de <strong class="offer-price">R$ 12,83</strong></p>
            <p class="else">ou R$ <b class="seven">76,99</b> a vista</p>
            <dl>
              <dt>
                <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-asc123pc7699&ref=pt_asc12purchase1903&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1903-pt');">
                  <i class="all-icons">car</i>
                  <span>ATIVE AGORA!</span>
                </a>
              </dt>
              <dd>
                <p class="people">
                  <i class="all-icons">people</i>Mais de <b id="packs"><?php echo $buyNum; ?></b> pessoas já compraram
                </p>
              </dd>
              <dd class="pay-icons">
                <p>Formas de Pagamento</p>
                <img src="<?php echo $pResUrl; ?>images/banner_pay.png">
              </dd>
            </dl>
          </div>
        </div>
        <!-- time -->
        <ul id="countdown" class="countdown">
          <li>00</li>
          <li>00</li>
          <li>00</li>
          <li>000</li>
        </ul>
      </div>
    </div>
    <!-- banner end -->

    <!-- intro start -->
    <div class="intro wrapper clearfix">
      <h2>Por que Advanced SystemCare Pro?</h2>
      <dl class="first clearfix">
        <dt class="fl">
          <div class="inner" data-num="1"><img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/></div>
        </dt>
        <dd class="fr">
          <h3>Seu PC Rodando como Novo</h3>
          <p>
            A versão PRO é capaz de liberar RAM automaticamente melhorando o desempenho do PC pelo gerenciamento inteligente dos recursos de sistema, detectando e desativando processos inativos em tempo real. 
            Isso significa mais velocidade para executar programas, rodar múltiplos aplicativos ao mesmo tempo e menos lentidão e travamentos.
          </p>
        </dd>
      </dl>
      <dl class="two clearfix">
        <dt class="fr">
          <div class="inner" data-num="2"><img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/></div>
        </dt>
        <dd class="fl">
          <h3>Manutenção do Windows</h3>
          <p>
            Advanced SystemCare Pro também corrige diversos problemas do Windows com a função “Reparar Windows” na Caixa de Ferramentas do Advanced SystemCare Pro.  Além de verificar os problemas com 1-clique, ele também repara diversos problemas específico do Windows no sistema, área de trabalho, segurança, entre outros.
          </p>
        </dd>
      </dl>
      <dl class="first clearfix">
        <dt class="fl">
          <div class="inner" data-num="3"><img src="<?php echo getStaticUrl('images/screen03.png')?>" alt=""/></div>
        </dt>
        <dd class="fr">
          <h3>O Melhor Ajuste para o PC e Internet</h3>
          <p>
            Advanced SystemCare Pro otimiza seu PC não apenas através da limpeza de arquivos inúteis, mas ele oferece também o melhor ajuste para o seu PC de acordo com o seu perfil de uso.
            Mais do que isso, a versão Pro otimiza a conexão de Internet  e para turbinar a sua velocidade de navegação. 
          </p>
        </dd>
      </dl>
      <dl class="two last clearfix">
        <dt class="fr">
          <div class="inner" data-num="4"><img src="<?php echo getStaticUrl('images/screen04.png')?>" alt=""/></div>
        </dt>
        <dd class="fl">
          <h3>Prevenção de Problemas</h3>
          <p>
            A Detecção Profunda contida no Advanced SystemCare Pro detecta e remove diversos tipos de ameaças para proteger seu PC como adwares, trojans, keyloggers, bots, worms e hijackers e outras ameaças que possam danificar ou afetar o desempenho do seu PC. 
          </p>
        </dd>
      </dl>
    </div>
    <!-- intro end -->

    <!-- center-buy start -->
    <div class="center-buy gradient">
      <div class="wrapper">
        <h2>Tudo isso com suporte técnico 24 horas por dia ao seu dispôr</h2>
        <p>Assine Advanced SystemCare Pro por 1 ano e leve IObit Uninstaller Pro grátis</p>
        <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-asc123pc7699&ref=pt_asc12purchase1903&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1903-pt');">
          <i class="all-icons">car</i>
          <span>ATIVE AGORA!</span>
        </a>
        <div class="vista">6x de <strong class="offer-price">R$ 12,83</strong><span>(ou R$ 76,99 a vista)</span></div>
        <p>Economize <b>R$ 53,00</b> </p>
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
                <a class="tbuybtn" href="https://www.iobit.com/buy.php?product=pt-asc123pc7699&ref=pt_asc12purchase1903&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12purchase1903-pt');">
                  Compre Agora
                </a>
              </th>
            </tr>
          </tfoot>
        </table>
      </div>
      <!-- comparison end -->

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

    <!-- footer start -->
    <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
    <!-- footer end -->

    <!-- <div class="mask"></div>
    <div class="maskimg"><img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/></div> -->
  </div>

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
    document.getElementById('countdown').innerHTML = '<li>'+h+'<span>Horas</span></li><li>'+ i+'<span>Min</span></li><li>'+ s+'<span>Seg</span></li><li class="last">'+ mi+'<span>Ms</span></li>'+'<sup>*</sup>';
    setTimeout('cycleCountdown()', 1);
  }
  cycleCountdown();

  $(".intro dt").click(function(){
    var num = $(this).find(".inner").attr("data-num");
    var srcImg = "<?php echo getStaticUrl('images/screen0"+ num +".png')?>";
    $(".main").append('<div class="mask"></div><div class="maskimg"><img src="'+ srcImg +'" alt=""/><i class="all-icons close">x</i></div>');
    $(".close").click(function(){
      $(".mask,.maskimg").remove();
    });
  });
</script>
</body>
</html>