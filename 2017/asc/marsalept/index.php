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
$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_asc','xr_sdpasc','xr_dbpasc'))){
  $refStr.='-'.$_GET['pop'];
}
if(in_array($_GET['type'],array('pro','giveawayexp'))){
  $refStr.='-'.$_GET['type'];
}
if(in_array($_GET['to'],array('event1','ascrenew'))){
  $refStr.='-'.$_GET['to'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Advanced SystemCare 14 Pro com 40% de Desconto. Oferta Limitada da IObit</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
  <!-- Google Analytics Content Experiment code -->
  <script>function utmx_section(){}function utmx(){}(function(){var
      k='17473586-699',d=document,l=d.location,c=d.cookie;
      if(l.search.indexOf('utm_expid='+k)>0)return;
      function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
      indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
        length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
        '<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
        '://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
        '&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
        valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
        '" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
  </script><script>utmx('url','A/B');</script>
  <!-- End of Google Analytics Content Experiment code -->
  
  <?php echo $gJavascript['head']; ?>
<script>
  function decreasingPacks() {
    $.ajax({
      type: "GET",
      url: "marsalept.php",
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
      <h1 class="line">
        <img src="<?php echo getStaticUrl('images/banner_title.png')?>" alt="Manutenção automática do PC para você que trabalha em casa">
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
          <h3>Advanced SystemCare 14 - 1 ano / 3 PCs</h3>
          <p class="original">De <del>R$ 129,99</del></p>
          <p class="price">6x de <strong class="offer-price">R$ 12,83</strong></p>
          <p>ou R$ <b class="seven">76,99</b> a vista</p>
          <dl>
            <dt>
              <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-asc143pc7699&ref=pt_asc14purchase1703<?php echo $refStr;?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1703-pt');">
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
          <span>Utiliza inteligência artifical para otimizar completamente o desempenho do seu computador lento.</span>
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
      <?php if($_GET['st']!='asc_wr'):?>
      <dl class="original">
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
      <?php else:?>
      <dl class="winrar">
        <dt class="three four">3、</dt>
        <dd class="first"><h3>Mais Segurança e Conveniência<img src="<?php echo getStaticUrl('images/tag-pt.png')?>" alt=""/></h3></dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Com apenas 1-clique, você atualizará programas importantes assim que a nova versão oficial esteja pronta.</span>
        </dd>
        <dd>
          <i class="all-icons">.</i>
          <span>Incluindo <b>WinRAR, que uma falha de segurança recentemente descoberta pode botar seu computador em perigo</b>.</span>
        </dd>
      </dl>
      <?php endif;?>
    </div>
  </div>
  <!-- intro end -->

  <!-- center-buy start -->
  <div class="center-buy gradient">
    <div class="wrapper">
      <h2>Tudo isso com suporte técnico 24 horas por dia ao seu dispôr</h2>
      <p>Assine por um ano e ganhe ASC Pro para mais 2 PCs</p>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-asc143pc7699&ref=pt_asc14purchase1703<?php echo $refStr;?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1703-pt');">
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
            <td class="icons"><img src="<?php echo $pResUrl; ?>images/icon_15.png"></td>
            <td class="virtue">Modo de AI verifica inteligentemente seu PC para limpeza e otimização definitivas</td>
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
              <a class="tbuybtn" href="https://www.iobit.com/buy.php?product=pt-asc143pc7699&ref=pt_asc14purchase1703<?php echo $refStr;?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc3pcpurchase1703-pt');">
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
</script>
</body>
</html>