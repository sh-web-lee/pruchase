<?php
error_reporting(0);
define('IObit', 'IObit');
if (@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl . 'include/common.inc.php';
function microtime_float() {
  list($usec, $sec) = explode(' ', microtime());
  return ((float)$usec + (float)$sec);
}

$reduceNum=47683478;
$buyNum = ceil(microtime_float() * 1000 / 30000)-$reduceNum;
$buyNum = number_format($buyNum);

if(in_array($_GET['st'],array('dbxmasr'))){
  $refStr='-'.$_GET['st'];
}else{
  $refStr='';
}
if(!empty($_GET['to'])){
  $refStr.='-'.$_GET['to'];
}
if(preg_match_all('/([0-9]*)\./',$_GET['ver'],$matches)){
  $ver=$matches[1][0].$matches[1][1];
  $refStr.='-'.$ver;
}
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['user'])?'':('-'.$_GET['user']);
$refStr.=empty($_GET['insday'])?'':('-'.$_GET['insday']);
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-t'.$_GET['type'].'-e'.$_GET['expd'];
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira Driver Booster 7 Pro com 35% de desconto e suporte a 2 PCs extras. Oferta Limitada da Iobit.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
  <!-- Google Analytics Content Experiment code -->
  <script>function utmx_section(){}function utmx(){}(function(){var
      k='17473586-696',d=document,l=d.location,c=d.cookie;
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
<script type="text/javascript">
  function strFormat(str){
    return str.replace(/,/g,'.');
  }
function getBuyNum(){
  $.ajax({
    type: "GET",
    url: "<?php echo $pRootUrl;?>callback.php",
    data: "action=getBuyNum&reduceNum=<?php echo $reduceNum;?>r="+Math.random()+"&reTime=30",
    success: function(packs){
      $('.people-num').html(packs);
        $('.buy-num-bot').html(strFormat(packs));
      setTimeout('getBuyNum()', 30000);
    }
  });
}
setTimeout('getBuyNum()', 30000);
</script>
</head>

<body>
<!--banner-->
<div class="banner">
  <div class="wrapper">
    <a href="https://www.iobit.com/pt/index.php" target="_blank" class="logo">IObit</a>
    <h1>PROMOÇÃO COMEMORATIVA!</h1>
    <h2>Em Agradecimento aos mais de 3.500.000 de Usuários do Driver Booster Pro!</h2>
    <div class="panel clearfix">
      <img class="sign" src="<?php echo getStaticUrl('images/sign.png')?>" alt="" />
      <div class="left fl">
        <img class="box-imf" src="<?php echo getStaticUrl('images/boxsort-imf.png')?>" alt="" />
        <span>Oferta termina em</span>
        <ul class="countdown">
          <li><strong>12</strong></li>
          <li><strong>39</strong></li>
          <li><strong>05</strong></li>
          <li class="last"><strong>60</strong></li>
        </ul>
      </div>
      <div class="right fr">
        <h2>Driver Booster 7 Pro - 1 ano / 3 PCs</h2>
        <p class="decri">Desempenho máximo com os drivers mais recentes.</p>
        <span class="line"></span>
        <p class="de-price">De <del>R$ 129,99</del></p>
        <p class="main-price">6x de <b>R$ 13,33</b></p>
        <p class="small-price">ou <b>R$ 79,99</b> a vista</p>
        <span class="line"></span>
        <a class="buy-btn" 
           href="https://www.iobit.com/buy.php?product=pt-db73pc7999&ref=pt_db73pcpfpurchase1707<?php echo $refStr;?>&refs=pt_purchase_db" 
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1707-pt');">
          COMPRAR AGORA
        </a>
        <p class="people-box"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""/>Mais de <b class="people-num"><?php echo $buyNum;?></b> pessoas já compraram</p>
        <div class="payments">
          <h4>Formas de Pagamento</h4>
          <img src="<?php echo $pResUrl; ?>images/paymens.png" alt=""/>
        </div>
      </div>
    </div>
  </div>
</div>

<!--hightlight-->
<div class="imf-message wrapper">
  <h2>Otimize o desempenho do seu PC com a atualização dos seus drivers!</h2>
  <div class="clearfix box">
    <div class="left fl">
      <dl class="top">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" /></dt>
        <dd>
          <h3>Banco de Dados Maior</h3>
          <p>Conte com um banco de dados com mais de 3.500.000 de drivers e componentes para encontrar drivers mais obsoletos e raros.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt="" /></dt>
        <dd>
          <h3>Atualização mais Veloz</h3>
          <p>Obtenha a velocidade máxima de download  e baixe drivers no tempo ocioso do PC para economizar tempo.</p>
        </dd>
      </dl>
    </div>
    <div class="right fr">
      <dl class="top">
        <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" /></dt>
        <dd>
          <h3>Experiência Superior de Jogo</h3>
          <p>Melhora a experiência de jogo através do suporte dos mais diversos componentes de jogos.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" /></dt>
        <dd>
          <h3>Backup Automático</h3>
          <p>Desfrute de backups automáticos na Nuvem ou no HD para prevenir qualquer problema inesperado.</p>
        </dd>
      </dl>
    </div>
  </div>
  <a href="javascript: void(0);">
    Clique aqui e compare função por função a versão Free a versão Pro >
  </a>
</div>

<!--user-->
<div class="user clearfix">
  <div class="wrapper">
    <h2>
      Driver Booster Pro já atualizou os drivers de mais de <strong class="buy-num buy-num-bot"><?php echo $buyNum;?></strong>  de PCs. <span>Chegou a hora de melhorar o seu PC.</span>
    </h2>
    <ul class="user-list">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya" />
        <h4>Myo Thuya</h4>
        <p>
          "Com Driver Booster, eu consigo saber facilmente quais drivers estão desatualizados e posso atualizá-los com facilidade. Além disso, me ajuda a reparar erros como de rede. Eu não acreditava antes de usar, mas depois de testá-lo eu o adorei, pois meu PC está mais estável, rápido e seguro do que há 8 meses atrás. Muito obrigado, IObit."
        </p>
      </li>
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/talal-hafez.png')?>" alt="Talal Hafez" />
        <h4>Talal Hafez</h4>
        <p>
          "Uma verificação por dia mantém os drivers sempre atualizados. Ao invés de procurar individualmente por atualizações de drivers; Driver Booster mantém todos os drivers do meu PC atualizados com apenas um-clique! Driver Booster melhorou o meu PC para jogos, especialmente com os jogos mais recentes que precisam das últimas atualizações. Os produtos da IObit me mostram a verdadeira capacidade do meu pc. "
        </p>
      </li>
    </ul>
  </div>
</div>

<!--awards-->
<div class="wrapper awards clearfix">
  <h2>Recomendado também por:</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.png" alt=""/>
</div>

<!--table-->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
      <tr>
        <th class="text" colspan="2">Veja o que a versão PRO pode fazer por você:</th>
        <th class="itemb">Driver Booster Grátis</th>
        <th class="itema">
          Driver Booster PRO
          <span>R$79.99 <del>R$129,99</del></span>
        </th>
      </tr>    
    </thead>
    <tbody>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon1.png')?>" alt="" /></td>
        <td class="virtue">Automaticamente Verifica e Identifica Drivers Desatualizados e em Falta</td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>  
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon2.png')?>" alt="" /></td>
        <td class="virtue">Download e Atualização de Drivers Desatualizados com Apenas Um-clique</td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon3.png')?>" alt="" /></td>
        <td class="virtue">Pacote de Drivers Reduzido com Novo Algoritmo de Compressão de Drivers</td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon4.png')?>" alt="" /></td>
        <td class="virtue">Atualização mais Segura Apenas com Drivers Certificados WHQL</td>
        <td class="itemb"><i>√</i></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon5.png')?>" alt="" /></td>
        <td class="virtue">Velocidade Ilimitada na Atualização de Drivers</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon6.png')?>" alt="" /></td>
        <td class="virtue">Maior Banco de Dados para Atualizar Drivers Antigos e Mais Raros</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon7.png')?>" alt="" /></td>
        <td class="virtue">Reduz o Travamento e Falhas do Sistema para um Melhor Desempenho</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon8.png')?>" alt="" /></td>
        <td class="virtue">Download Automático Melhorado para Acelerar Download</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon12.png')?>" alt="" /></td>
        <td class="virtue">Prioridade para Atualizar os Últimos Drivers Game Ready</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon9.png')?>" alt="" /></td>
        <td class="virtue">Backup Automático de Todos os Drivers para Restauração Segura  </td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt="" /></td>
        <td class="virtue">Download e Instalação Automáticos de Drivers Durante o Tempo Ocioso do Sistema</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon11.png')?>" alt="" /></td>
        <td class="virtue">Prioridade na Atualização de Componentes de Jogos para Melhor Experiência de Jogo</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
      <tr>
        <td class="icons"><img src="<?php echo getStaticUrl('images/icon13.png')?>" alt="" /></td>
        <td class="virtue">Suporte Técnico Gratuito 24/7</td>
        <td class="itemb"></td>
        <td class="itema"><i class="yellow">√</i></td>
      </tr>
    </tbody>
    <tfoot>
      <tr>
        <th class="text" colspan="2"></th>
        <th class="itemb">Driver Booster Grátis <span>Sua versão atual</span></th>
        <th class="itema">
          Driver Booster PRO
          <span>R$79.99 <del>R$129,99</del></span>
          <a class="buy-btn" 
             href="https://www.iobit.com/buy.php?product=pt-db73pc7999&ref=pt_db73pcpfpurchase1707<?php echo $refStr;?>&refs=pt_purchase_db" 
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1707-pt');">
            Comprar Agora
          </a>
        </th>
      </tr>    
    </tfoot>
  </table>
</div>

<!-- bottom-buy -->
<div class="bottom-buy wrapper clearfix">
  <h2>Com apenas <strong>R$ 0,22</strong> por dia, você mantém seus drivers sempre atualizados.</h2>
  <h3>Assine por um ano e leve Driver Booster Pro para 2 PCs extras.</h3>
  <div class="box-contain">
    <img src="<?php echo getStaticUrl('images/boxsort-imf-small.png')?>" alt="" />
    <div class="bottom-btn">
      <p class="bottom-price">6x de <b>R$ 13,33</b>(ou R$ 79,99 a vista)</p>
      <a class="buy-btn" 
         href="https://www.iobit.com/buy.php?product=pt-db73pc7999&ref=pt_db73pcpfpurchase1707<?php echo $refStr;?>&refs=pt_purchase_db" 
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1707-pt');">
        COMPRAR AGORA
      </a>
      <span class="btn-prce">Economize <b>R$ 50,00</b></span>
    </div>
  </div>
</div>

<!--service-->
<ul class="wrapper service clearfix">
  <li>
    <h5>Garantia de Reembolso</h5>
    <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt="" />
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

<!--footer-->
<div class="wrapper footer clearfix">
  <dl class="note">
    <dt>Observe:</dt>
    <dd>1*. Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempo em tempo conforme nossos critérios.</dd>
  </dl>
  <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
</div>


<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>