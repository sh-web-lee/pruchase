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
if(in_array($_GET['to'],array('purchase-3','purchase-4','purchase-6',
  'purchase-10','purchase-14','purchase-15','purchase-16',
  'purchase-21','purchase-22','gaexpired','multipcexpired','bannerbuy',
  'feature','activateweb','activateweb-5','db_freetip','expired','purchase-23',
  'purchase-28','purchase-29','purchase-30','purchase-31','purchase-32','purchase-33','bigbuy','bigbuynew','purchase-34',
  'garegion','dbofficialfree','dbofficialpro','purchase-35','purchase-36','crpro_1','crpro_2','reggaexpired','regovermax'))){
  $refStr='-'.$_GET['to'];
}else{
  $refStr='';
}
if(in_array($_GET['st'],array('dbxmasr','db_xmas'))){
  $refStr.='-'.$_GET['st'];
}
if(in_array($_GET['pop'],array('x_db'))){
  $refStr.='-'.$_GET['pop'];
}
if($_GET['to']=='purchase-6'){
  $ver=$_GET['ver'];
  if(preg_match('/^([0-9])\.([0-9])\.[0-9]\.[0-9]{3}/',$ver,$matches)){
    $verStr=$matches[1].$matches[2];
    $refStr.='-'.$verStr;
  }
}
if(in_array($_GET['ref'],array('db6_new'))){
  $refStr.='-'.$_GET['ref'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title>Driver Booster 6 Pro com 35% de Desconto. Oferta Limitada da IObit</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link href="https://fonts.googleapis.com/css?family=Lato:400,400i,700" rel="stylesheet">
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
  <script type="text/javascript">
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
    <a href="https://www.iobit.com" target="_blank" class="logo">IObit</a>
    <h1>PROMO????O COMEMORATIVA!</h1>
    <h2>Em Agradecimento aos mais de 3.500.000 de Usu??rios do Driver Booster Pro!</h2>
    <div class="panel clearfix">
      <img class="sign" src="<?php echo getStaticUrl('images/sign.png')?>" alt="" />
      <div class="left fl">
        <img class="box-imf" src="<?php echo getStaticUrl('images/boxsort-imf.png')?>" alt="" />
        <span>Oferta termina em</span>
        <ul class="countdown">
          <li><strong>00</strong></li>
          <li><strong>00</strong></li>
          <li><strong>00</strong></li>
          <li class="last"><strong>00</strong></li>
        </ul>
      </div>
      <div class="right fr">
        <h2>Driver Booster 6 Pro - 1 ano / 3 PCs</h2>
        <p class="decri">Desempenho m??ximo com os drivers mais recentes.</p>
        <span class="line"></span>
        <p class="de-price">De <del>R$ 129,99</del></p>
        <p class="main-price">6x de <b>R$ 13,33</b></p>
        <p class="small-price">ou <b>R$ 79,99</b> a vista</p>
        <span class="line"></span>
        <a class="buy-btn"
           href="https://www.iobit.com/buy.php?product=pt-db63pc7999&ref=pt_db63pcpfpurchase1905&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1905-pt')">
          COMPRAR AGORA
        </a>
        <p class="people-box"><img src="<?php echo $pResUrl; ?>images/people.png" alt=""/>Mais de <b class="people-num"><?php echo $buyNum;?></b> pessoas j?? compraram</p>
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
  <h2>Otimize o desempenho do seu PC com a atualiza????o dos seus drivers!</h2>
  <div class="clearfix box">
    <div class="left fl">
      <dl class="top">
        <dt><img src="<?php echo getStaticUrl('images/list01.png')?>" alt="" /></dt>
        <dd>
          <h3>Banco de Dados Maior</h3>
          <p>Conte com um banco de dados com mais de 3.000.000 de drivers e componentes para encontrar drivers mais obsoletos e raros.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list02.png')?>" alt="" /></dt>
        <dd>
          <h3>Atualiza????o mais Veloz</h3>
          <p>Obtenha a velocidade m??xima de download  e baixe drivers no tempo ocioso do PC para economizar tempo.</p>
        </dd>
      </dl>
    </div>
    <div class="right fr">
      <dl class="top">
        <dt><img src="<?php echo getStaticUrl('images/list03.png')?>" alt="" /></dt>
        <dd>
          <h3>Experi??ncia Superior de Jogo</h3>
          <p>Melhora a experi??ncia de jogo atrav??s do suporte dos mais diversos componentes de jogos.</p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/list04.png')?>" alt="" /></dt>
        <dd>
          <h3>Backup Autom??tico</h3>
          <p>Desfrute de backups autom??ticos na Nuvem ou no HD para prevenir qualquer problema inesperado.</p>
        </dd>
      </dl>
    </div>
  </div>
  <a href="javascript: void(0);" onclick="">
    Clique aqui e compare fun????o por fun????o a vers??o Free a vers??o Pro >
  </a>
</div>

<!--user-->
<div class="user clearfix">
  <div class="wrapper">
    <h2>
      Driver Booster Pro j?? atualizou os drivers de mais de <strong class="buy-num buy-num-bot"><?php echo $buyNum;?></strong>  de PCs. <span>Chegou a hora de melhorar o seu PC.</span>
    </h2>
    <ul class="user-list">
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo Thuya" />
        <h4>Myo Thuya</h4>
        <p>
          "Com Driver Booster, eu consigo saber facilmente quais drivers est??o desatualizados e posso atualiz??-los com facilidade. Al??m disso, me ajuda a reparar erros como de rede. Eu n??o acreditava antes de usar, mas depois de test??-lo eu o adorei, pois meu PC est?? mais est??vel, r??pido e seguro do que h?? 8 meses atr??s. Muito obrigado, IObit."
        </p>
      </li>
      <li class="fl">
        <img src="<?php echo getStaticUrl('images/talal-hafez.png')?>" alt="Talal Hafez" />
        <h4>Talal Hafez</h4>
        <p>
          "Uma verifica????o por dia mant??m os drivers sempre atualizados. Ao inv??s de procurar individualmente por atualiza????es de drivers; Driver Booster mant??m todos os drivers do meu PC atualizados com apenas um-clique! Driver Booster melhorou o meu PC para jogos, especialmente com os jogos mais recentes que precisam das ??ltimas atualiza????es. Os produtos da IObit me mostram a verdadeira capacidade do meu pc. "
        </p>
      </li>
    </ul>
  </div>
</div>

<!--awards-->
<div class="wrapper awards clearfix">
  <h2>Recomendado tamb??m por:</h2>
  <img src="<?php echo $pResUrl; ?>images/awards.png" alt=""/>
</div>

<!--table-->
<div id="compare" class="comparison wrapper">
  <table border="0" cellspacing="0" cellpadding="0" width="100%">
    <thead>
    <tr>
      <th class="text" colspan="2">Veja o que a vers??o PRO pode fazer por voc??:</th>
      <th class="itemb">Driver Booster Gr??tis</th>
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
      <td class="itemb"><i>???</i></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon2.png')?>" alt="" /></td>
      <td class="virtue">Download e Atualiza????o de Drivers Desatualizados com Apenas Um-clique</td>
      <td class="itemb"><i>???</i></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon3.png')?>" alt="" /></td>
      <td class="virtue">Pacote de Drivers Reduzido com Novo Algoritmo de Compress??o de Drivers</td>
      <td class="itemb"><i>???</i></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon4.png')?>" alt="" /></td>
      <td class="virtue">Atualiza????o mais Segura Apenas com Drivers Certificados WHQL</td>
      <td class="itemb"><i>???</i></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon5.png')?>" alt="" /></td>
      <td class="virtue">Velocidade Ilimitada na Atualiza????o de Drivers</td>
      <td class="itemb"></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon6.png')?>" alt="" /></td>
      <td class="virtue">Maior Banco de Dados para Atualizar Drivers Antigos e Mais Raros</td>
      <td class="itemb"></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon7.png')?>" alt="" /></td>
      <td class="virtue">Reduz o Travamento e Falhas do Sistema para um Melhor Desempenho</td>
      <td class="itemb"></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon8.png')?>" alt="" /></td>
      <td class="virtue">Download Autom??tico Melhorado para Acelerar Download</td>
      <td class="itemb"></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon12.png')?>" alt="" /></td>
      <td class="virtue">Prioridade para Atualizar os ??ltimos Drivers Game Ready</td>
      <td class="itemb"></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon9.png')?>" alt="" /></td>
      <td class="virtue">Backup Autom??tico de Todos os Drivers para Restaura????o Segura  </td>
      <td class="itemb"></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt="" /></td>
      <td class="virtue">Download e Instala????o Autom??ticos de Drivers Durante o Tempo Ocioso do Sistema</td>
      <td class="itemb"></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon11.png')?>" alt="" /></td>
      <td class="virtue">Prioridade na Atualiza????o de Componentes de Jogos para Melhor Experi??ncia de Jogo</td>
      <td class="itemb"></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    <tr>
      <td class="icons"><img src="<?php echo getStaticUrl('images/icon13.png')?>" alt="" /></td>
      <td class="virtue">Suporte T??cnico Gratuito 24/7</td>
      <td class="itemb"></td>
      <td class="itema"><i class="yellow">???</i></td>
    </tr>
    </tbody>
    <tfoot>
    <tr>
      <th class="text" colspan="2"></th>
      <th class="itemb">Driver Booster Gr??tis <span>Sua vers??o atual</span></th>
      <th class="itema">
        Driver Booster PRO
        <span>R$79.99 <del>R$129,99</del></span>
        <a class="buy-btn"
           href="https://www.iobit.com/buy.php?product=pt-db63pc7999&ref=pt_db63pcpfpurchase1905&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1905-pt')">
          Comprar Agora
        </a>
      </th>
    </tr>
    </tfoot>
  </table>
</div>

<!-- bottom-buy -->
<div class="bottom-buy wrapper clearfix">
  <h2>Com apenas <strong>R$ 0,22</strong> por dia, voc?? mant??m seus drivers sempre atualizados.</h2>
  <h3>Assine por um ano e leve Driver Booster Pro para 2 PCs extras.</h3>
  <div class="box-contain">
    <img src="<?php echo getStaticUrl('images/boxsort-imf-small.png')?>" alt="" />
    <div class="bottom-btn">
      <p class="bottom-price">6x de <b>R$ 13,33</b>(ou R$ 79,99 a vista)</p>
      <a class="buy-btn"
         href="https://www.iobit.com/buy.php?product=pt-db63pc7999&ref=pt_db63pcpfpurchase1905&refs=pt_purchase_db"
         onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1905-pt')">
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

<!--footer-->
<div class="wrapper footer clearfix">
  <dl class="note">
    <dt>Observe:</dt>
    <dd>1*. Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempo em tempo conforme nossos crit??rios.</dd>
  </dl>
  <p class="copyright">Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
</div>

<!-- pop -->
<div class="pop">
  <div class="pop-coupon">
    <h2>VOC?? OBTEVE UM CUPOM LIMITADO!</h2>
    <img class="off" src="<?php echo $pResUrl;?>images/coupon-off.png" alt="">
    <h3>V??lido apenas para clientes de primeira viagem!</h3>
    <!-- buybtn -->
    <a class="buy-btn"
       href="https://www.iobit.com/buy.php?product=pt-db63pc7999coupon&ref=pt_db63pcpfpurchase1905cp&refs=pt_purchase_db "
       onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1905cp-pt')">
      Aproveitar Agora
    </a>
    <p class="countdown"><i></i> Dispon??vel s?? para <strong>20</strong> usu??rios por dia</p>
    <!-- minimizar -->
    <a class="button minimzar" href="javascript: smallPopShow();">Minimizar</a>
  </div>
</div>
<div class="pop-small">
  <img class="off" src="<?php echo $pResUrl;?>images/couponsmall-off.png" alt="">
  <!-- buybtn -->
  <a class="buy-btn"
     href="https://www.iobit.com/buy.php?product=pt-db63pc7999coupon&ref=pt_db63pcpfpurchase1905cp&refs=pt_purchase_db"
     onclick="ga('send', 'event', 'dbbuy', 'buy', 'db6purchase1905cp-pt')">
    Aproveitar Agora
  </a>
  <!-- aumentar -->
  <a class="button aumentar" href="javascript: popShow();">Aumentar</a>
</div>
<!-- end pop -->


<script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>