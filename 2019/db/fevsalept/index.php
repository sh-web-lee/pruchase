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
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira Driver Booster 6 Pro com 35% de desconto e suporte a 2PCs extras. Oferta Limitada da IObit.</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Lato:400,700,900" rel="stylesheet">
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
        $('.buy-num').html(strFormat(packs));
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
    <a class="logo" href="https://www.iobit.com" target="_blank">
      <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
    </a>
    <h1>Aproveite <b>35%</b> de Desconto no 7º Aniversário do Driver Booster!</h1>
    <div class="panel clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/db-box.jpg')?>" alt="Driver Booster PRO"/>
        <p class="people">
          <i class="all-icons"></i> Mais de <b class="buyNmu buy-num"><?php echo $buyNum;?></b> clientes já adquiriram.
        </p>
      </div>
      <div class="right fr">
        <h2>Driver Booster 6 Pro – 1 Ano / 3 PCs</h2>
        <p>Desempenho máximo com os drivers mais recentes.</p>
        <div class="price">
          <p class="black">De <del>R$ 129,99</del></p>
          <strong><small>Por:</small>  R$ 79,99</strong>
          <p>
            <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-db63pc7999&ref=pt_db63pcpfpurchase1902&refs=pt_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1902-pt');">
              Comprar Agora
            </a>
          </p>
          <p class="econo">Economize <b>R$ 50,00</b> apenas enquanto durar a promoção</p>
          <div class="countdown">
            Oferta termina em: <strong class="one">09</strong><b> : </b><strong>12</strong><b> : </b><strong>22</strong>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<!-- intro -->
<div class="intro wrapper">
  <h2>
    Entenda porque Driver Booster Pro se tornou a ferramenta de atualização de drivers mais confiável do mundo.
  </h2>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/intro-01.png')?>" alt=""/></dt>
    <dd>
      <h3>Mais Drivers e Componentes de Jogo</h3>
      <p>
        O banco de dados 20% maior que a versão FREE garante que você encontrará, entre os mais de 3.000.000 drivers da versão PRO (incluindo os mais recentes e drvers que já não podem ser baixados no site do fabricante), o driver correto para seu dispositivo.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/intro-02.png')?>" alt=""/></dt>
    <dd>
      <h3>Mais Segurança</h3>
      <p>
        Para evitar problemas inesperados na atualização de drivers, Driver Booster Pro oferece backup automático, na nuvem ou no disco, permitindo assim que você reverta qualquer atualização de driver sempre que desejar.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/intro-03.png')?>" alt=""/></dt>
    <dd>
      <h3>Mais Economia de Tempo</h3>
      <p>
        Além de desfrutar de downloads até duas vezes mais rápido, Driver Booster Pro também economiza seu tempo baixando os drivers durante o modo ocioso do sistema para garantir que você terá sua atualização pronta quando você precisar.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/intro-04.png')?>" alt=""/></dt>
    <dd>
      <h3>Mais Conveniência</h3>
      <p>
        Driver Booster Pro permite a atualização automática de drivers cuidadosamente dividida em categorias;  isso significa que você pode escolher quais tipos de dispositivos você deseja manter sempre atualizados. O programa age de acordo com as suas preferências.
      </p>
    </dd>
  </dl>
  <dl>
    <dt><img src="<?php echo getStaticUrl('images/intro-05.png')?>" alt=""/></dt>
    <dd>
      <h3>Mais Suporte</h3>
      <p>
        Ao ativar Driver Booster Pro, você terá suporte 24 horas pronto para solucionar quaisquer dúvidas ou problemas que você possa ter; você contará também com a adição frequente de novos drivers ao banco de dados, além de novas versões do programa ao seu dispor.
      </p>
    </dd>
  </dl>
  <p>
    <a class="more" href="script: void(0);">
      Clique aqui e compare função por função a versão Free a versão Pro >
    </a>
  </p>
</div>

<!-- screen -->
<div class="screen wrapper">
  <h2>Otimize o Desempenho do seu PC com a atualização dos drivers do seu computador!</h2>
  <div class="clearfix">
    <div class="left fl">
      <div class="imgbox">
        <div class="box">
          <img src="<?php echo getStaticUrl('images/screen-01.png')?>" alt=""/>
          <img src="<?php echo getStaticUrl('images/screen-02.png')?>" alt=""/>
          <img src="<?php echo getStaticUrl('images/screen-03.png')?>" alt=""/>
        </div>
      </div>
      <ul><li class="on"></li><li></li><li></li></ul>
    </div>
    <div class="right fr">
      <dl>
        <dt><i class="all-icons">√</i></dt>
        <dd>
          <h3>Estabilidade de Sistema</h3>
          <p>
            Reduz travamentos e lentidão do sistema causados por conflito e mal-funcionamento de dispositivos.
          </p>
        </dd>
      </dl>
      <dl>
        <dt><i class="all-icons">√</i></dt>
        <dd>
          <h3>Experiência Superior em Jogos</h3>
          <p>Melhora a experiência de jogo através do suporte dos mais diversos componentes de jogos.</p>
        </dd>
      </dl>
      <dl>
        <dt><i class="all-icons">√</i></dt>
        <dd>
          <h3>Melhor Funcionamento de Dispositivos e Periféricos</h3>
          <p>
            Dispositivos como placas de vídeos, de aúdio, impressoras, entre outros, funcionarão no topo de sua capacidade.
          </p>
        </dd>
      </dl>
    </div>
  </div>
</div>

<!--user-->
<div class="user clearfix">
  <div class="wrapper">
    <h2>
      Driver Booster Pro já atualizou os drivers de mais de <strong class="buy-num buy-num"><?php echo $buyNum;?></strong> de PCs. Chegou a hora de melhorar o seu PC.
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
          <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-db63pc7999&ref=pt_db63pcpfpurchase1902&refs=pt_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1902-pt');">
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
    <img src="<?php echo getStaticUrl('images/db-box-small.png')?>" alt="Driver Booster PRO"/>
    <div class="bottom-btn">
      <p class="bottom-price">6x de <b>R$ 13,33</b>(ou R$ 79,99 a vista)</p>
      <a class="buybtn" href="https://www.iobit.com/buy.php?product=pt-db63pc7999&ref=pt_db63pcpfpurchase1902&refs=pt_purchase_db" onclick="ga('send', 'event', 'dbbuy', 'buy', 'dbpurchase1902-pt');">
        Comprar Agora
      </a>
      <p><span class="btn-prce">Economize <b>R$ 50,00</b></span></p>
    </div>
  </div>
</div>

<!--service-->
<div class="wrapper service clearfix">
  <dl>
    <dt>Garantia de Reembolso</dt>
    <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dd>
  </dl>
  <dl>
    <dt>Garantia de Reembolso</dt>
    <dd><img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/></dd>
  </dl>
  <dl>
    <dt>Garantia de Reembolso</dt>
    <dd><img src="<?php echo getStaticUrl('images/godaddy-secure.png')?>" alt=""/></dd>
  </dl>
</div>

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