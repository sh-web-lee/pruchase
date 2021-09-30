<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

  function microtime_float(){
    list($usec, $sec) = explode(' ', microtime());
    return ((float)$usec + (float)$sec);
  }
  $reTime=30;
  $reduceNum=43600000;
  $buyNum = number_format(ceil(microtime_float()*1000/(1000*$reTime)) - $reduceNum,0,'','.');
  if(!empty($_GET['action'])&&($_GET['action']=='getPacks')){
    echo $buyNum;
    exit();
  }
  if(in_array($_GET['st'],array('asc_c1new','asc_c1new1','asc_c6','asc_c2','asc_c3','asc_feature','asc_c7',
          'asc_t2','asc_t3','asc_t4','asc_t5','asc_t6','asc_t7','asc_t8','asc_t9','asc_t10','asc_t11','asc_s1',
          'asc_s2','asc_s3','asc_s4','asc_s5','asc_s6','asc_s7','asc_s8','asc_ac2','asc_ac3','asc_report',
          'asc_promote','asc_autocare','asc_buypro','asc_pro1','asc_pro2','asc_pro3','asc_pro4','asc_pro5',
          'asc_pro6','asc_freetip','asc_protip1','asc_protip2','asc_protip3','asc_protip4','asc_protip5','asc_protip6',
          'asc_c8','23','asc_s11','asc_s12','asc_qs3','asc_qs4','asc_qs5','asc_qs6','asc_qs7','asc_qs8',
          'asc_qs9','asc_qs10','asc_qs11','asc_pm1','asc_pm2','asc_pm3','asc_c9','asc_pro7','asc_pro8','asc_pro9','asc_pro10',
          'asc_gift','asc_pro11','asc_pro12')
  )){
    $refstr='-'.$_GET['st'];
  }else{
    $refstr='';
  }
  if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
    $refstr.='-'.$_GET['pop'];
  }
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Super Venda da Copa! Adquira Advanced SystemCare Pro com 60% de desconto e leve um super brinde grátis. Oferta limitada da IObit.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
<script>
  function decreasingPacks() {
    $.ajax({
      type: "GET",
      url: "worldcuppt.php",
      data: "action=getPacks&r=" + Math.random(),
      success: function(packs) {
        $('#packs').html(packs);
        setTimeout('decreasingPacks()', 30000);
      }
    });
  }
  setTimeout('decreasingPacks()', 30000);
</script>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="banner">
    <div class="wrapper clearfix">
      <a class="logo fl" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <div class="title">
        <h4>Promoção Relâmpago!</h4>
        <h1>60% de DESCONTO SÓ DURANTE A COPA</h1>
      </div> 
      <h2>Aproveite esta oportunidade única a cada quatro anos para obter o melhor programa de manutenção para PC.</h2>
      <img class="imgbox" src="<?php echo getStaticUrl('images/img-box.png')?>" alt=""/>
      <div class="price fr">
        <p><strong><small>R$</small>76<small>,99</small></strong> <del>R$ 229.99</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-asc113pciu7699&ref=pt_asc11purchase1806&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806-pt');">
           <i class="all-icons"></i>
          <span>COMPRAR AGORA</span>
        </a>
        <p class="people">Mais de <b id="packs"><?php echo $buyNum;?></b> pessoas já compraram</p>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- payment start -->
  <div class="payment wrapper"><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></div>
  <!-- payment end -->

  <!-- container start -->
  <!-- intro start -->
  <div class="intro wrapper clearfix">
    <h2 class="line">Conheça <strong>3 vantagens</strong> em atualizar para PRO </h2>
    <img class="fl" src="<?php echo getStaticUrl('images/intro_asc.png')?>" alt="" />
    <div class="fl">
      <dl>
        <dt>1、</dt>
        <dd class="first"><h3>Seu PC Rodando como Novo</h3></dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Assista vídeos, jogue e trabalhe com múltiplos programas <br>ao mesmo tempo.</span>
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
  <div class="center-buy gradient">
    <div class="wrapper">
      <h2>Tudo isso com suporte técnico 24 horas por dia ao seu dispôr</h2>
      <p>Assine Advanced SystemCare Pro para 3 PCs e leve IObit Uninstaller Pro grátis</p>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-asc113pciu7699&ref=pt_asc11purchase1806<?php echo $refstr;?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806-pt');">
        <i class="all-icons">car</i>
        <span>ATIVE AGORA!</span>
      </a>
      <div class="vista">6x de <strong class="offer-price">R$ 12,83</strong><span>(ou R$ 76,99 a vista)</span></div>
      <p>Economize <b>R$ 153,00</b> </p>
    </div>
  </div>
  <!-- center-buy end -->

  <!-- media-rev start -->
  <div class="media-rev wrapper">
    <h2>Veja o que a mídia especializada tem a dizer</h2>
    <dl class="clearfix">
      <dt class="fl"><img src="<?php echo getStaticUrl('images/media_rev.png')?>" alt=""/></dt>
      <dd class="fr">
        <span>Em nossos testes, notamos que o Advanced SystemCare tem uma eficiência excepcional.</span>
        Ele consegue encontrar problemas para resolver no seu computador que realmente são difíceis de imaginar.
      </dd>
    </dl>
    <h4>Recomendado também por</h4>
    <img src="<?php echo getStaticUrl('images/media_icons.png')?>" alt=""/>
  </div>
  <!-- media-rev end -->

  <!-- user-rev start -->
  <div class="user-rev">
    <div class="wrapper clearfix">
      <h2>Veja o que pessoas como você tem a dizer</h2>
      <dl class="first">
        <dt><img src="<?php echo $pResUrl; ?>images/paul.png" alt="Paul Cummings"></dt>
        <dd><h5>Paul Cummings</h5></dd>
        <dd><img src="<?php echo $pResUrl; ?>images/flag_us.png"></dd>
        <dd>"Eu recomendo esse programa pra <br>todos os meus amigos que<br> reclamam de computador lento."</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/savio.png" alt="Sávio da Rocha Lobo"></dt>
        <dd><h5>Sávio da Rocha Lobo </h5></dd>
        <dd><img src="<?php echo $pResUrl; ?>images/flag_brazil.png"></dd>
        <dd>"São mais de cinco anos deixando o <br>meu computador rodando como se<br> ele tivesse acabado de sair da caixa."</dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl; ?>images/fritz.png" alt="Fritz Stein"></dt>
        <dd><h5>Fritz Stein</h5></dd>
        <dd><img src="<?php echo $pResUrl; ?>images/flag_germany.png"></dd>
        <dd>"O meu PC foi ficando lento com o <br>tempo. Eu usei o ASC e fiquei <br>surpreso, parecia o primeiro dia que <br>estava usando meu PC."</dd>
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
              <del>R$ 229,99</del>
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
              <del>R$229,99</del>
              <strong>R$ 76,99 </strong>
              <p>Licença de 1 Ano / 3 PCs</p>
              <a class="tbuybtn" href="https://www.iobit.com/buy.php?product=pt-asc113pciu7699&ref=pt_asc11purchase1806<?php echo $refstr;?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1806-pt');">
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
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</div>
  <!-- footer end -->
</body>
</html>