<?php
error_reporting(0);
define("IObit","IObit");
if(@!$include) {
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';
function microtime_float(){
	list($usec, $sec) = explode(' ', microtime());
	return ((float)$usec + (float)$sec);
}

if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'xmasindexptdb' . $date;
  $c_name_t='xmasindexptdb' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(199,228);
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
$reduceNum=152665031;
//4677780
$buyNum = number_format(ceil(microtime_float()*1000/(1000*$reTime)) - $reduceNum,0,'','.');
if($_GET['action']=='getBuyNum'){
  echo $buyNum;exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
if(in_array($_GET['pop'],array('x_db','xi_db','xb_db'))){
  $refStr.='-'.$_GET['pop'];
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
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira Driver Booster 7 Pro com 75% de desconto e leve um super brinde para manter seus programas tamb??m atualizados. Oferta Especial de Ano Novo da IObit. </title>
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
      <h2 class="fl">Driver Booster 7 Pro</h2>
      <a class="logo fr" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    </div>
  </div>
  <!-- navbar end -->

  <!-- header start -->
  <div class="header">
    <div class="wrapper">
      <span class="txt"><b>S?? Durante o Ano Novo:</b> 300 Pacotes Especiais de Ano Novo. Pacotes Restantes:</span>
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
        <img src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
        <h5>Pacote Padr??o</h5>
        <p>1 Ano / 1 PC</p>
        <div class="discount">
          <b>40% OFF</b>
          <p>De: <del>129,99</del> Por: <span>74,99</span></p>
        </div>
        <div class="price">
          <p>ou 6x de <strong>R$ 12,50</strong></p>
          <p>Sem juros no cart??o</p>
          <a class="buybtn gray"
             href="https://www.iobit.com/buy.php?product=pt-db71pc7499&ref=pt_db71pcpurchase1911<?php echo $refStr;?>&refs=pt_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7purchase1911-pt');">
            <span>COMPRAR AGORA</span>
            <i class="all-icons"></i>
          </a>
        </div>
      </div>
      <div class="offer red">
        <img src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <h5>Pacote Especial de Ano Novo</h5>
        <p>1 ANO / 3 PCs + Brinde</p>
        <div class="discount">
          <b>75% OFF</b>
          <p>De: <del>399,89</del> Por: <span>79,99</span></p>
        </div>
        <div class="price">
          <p>ou 6x de <strong>R$ 12,50</strong></p>
          <p>Sem juros no cart??o</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-db73pcisu7999&ref=pt_db73pcisupurchase1911<?php echo $refStr;?>&refs=pt_purchase_db"
             onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7purchase1911-pt');">
            <span>COMPRAR AGORA</span>
            <i class="all-icons"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature wrapper clearfix">
    <h2>Entenda como o Driver Booster Pro otimiza o desempenho do seu PC!</h2>
    <div class="left fl"><img src="<?php echo getStaticUrl('images/screen.png')?>" alt=""/></div>
    <div class="right fr">
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></dt>
        <dd>
          <h3>Desempenho M??ximo de seus Dispositivos</h3>
          <p>
            <i></i>
            <span>
              Banco de Drivers expandido para 3.500.000 drivers garante que voc?? encontrar?? drivers obsoletos e raros.
            </span>
          </p>
          <p>
            <i></i>
            <span>
              Download autom??tico ou agendado de drivers garante que seus dispositivos estar??o sempre atualizados.
            </span>
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></dt>
        <dd>
          <h3>Seguran??a e Conveni??ncia Total</h3>
          <p>
            <i></i>
            <span>
              A vers??o PRO faz backup autom??tico antes de todas a atualiza????espara evitar qualquer problema.
            </span>
          </p>
          <p class="one">
            <i></i>
            <span>Velocidade de download ilimitada para todos os drivers.</span>
          </p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></dt>
        <dd>
          <h3>Experi??ncia Superior em Jogos </h3>
          <p>
            <i></i>
            <span>Drivers Game Ready garantem o melhor desempenho de sua placa de v??deo e perif??ricos.</span>
          </p>
          <p>
            <i></i>
            <span>Os ??ltimos componentes de jogo evitam problemas na hora de inicializar jogos.</span>
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- giftbox start -->
  <div class="giftbox">
    <div class="wrapper clearfix">
      <h2>Leve um Super Brinde para Manter Todos os Seus Programas Atualizados Automaticamente</h2>
      <img class="fl" src="<?php echo getStaticUrl('images/gift-box.png')?>" alt=""/>
      <ul class="fr">
        <li>Atualiza automaticamente seus programas de acordo com as suas prefer??ncias.</li>
        <li>Atualiza silenciosamente no plano de fundo para n??o interferir seu trabalho.</li>
      </ul>
    </div>
  </div>
  <!-- giftbox end -->

  <!-- review start -->
  <div class="user wrapper clearfix">
    <h2>Driver Booster Pro j?? atualizou os drivers de mais de <span class="buyNum"><?php echo $buyNum ?></span> de PCs.</h2>
    <h2>Chegou a hora de melhorar o seu PC.</h2>
    <div class="user-list">
      <img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt=""/>
      <h3>Carlos Alexandre Vers??ssimo</h3>
      <p>
        Quando eu tentava atualizar meus drivers, o meu computador ??s vezes apresentava problemas e eu tinha que format??-lo para restaurar suas fun????es e agora isto n??o acontece mais. Driver Booster 7 ?? a melhor ferramenta no mercado!
      </p>
    </div>
    <div class="user-list adam">
      <img src="<?php echo getStaticUrl('images/carlos.png')?>" alt=""/>
      <h3>Adam Backlund</h3>
      <p>
        Se voc?? ?? como eu e tem diversos apli-cativos e dispositivos e n??o tem tempo para atualiz??-los manualmente, eu reco-mendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveni??ncia.
      </p>
    </div>
  </div>
  <div class="media wrapper clearfix">
    <h2>Veja o que a m??dia especializada tem a dizer</h2>
    <dl class="clearfix">
      <dt><img src="<?php echo getStaticUrl('images/pcmag-editchoice.png')?>" alt=""/></dt>
      <dd>
        A IObit tem muitos utilit??rios e o Driver Booster Pro, que atualiza seus drivers automaticamente, ?? um dos melhores. A fun????o central do Driver Booster PRO ?? ainda mais atraente gra??as ?? inclus??o de m??ltiplas licen??as por um pre??o bem amig??vel, assim como de uma interface personaliz??vel que mostra informa????es espec??ficas relacionadas ao hardware. Os competidores Ashampoo Driver Updater and Slimware Utilities Driver Update fazem um bom trabalho, mas IObit Driver Booster Pro ?? o melhor da sua categoria.
      </dd>
    </dl>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recomendado tamb??m por</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- comparison start -->
  <div class="comparison wrapper">
    <table>
      <thead>
        <tr>
          <th colspan="2" class="text">Compara????o dos Produtos:</th>
          <th class="space"></th>
          <th class="itema">
            <div class="pro">
              <h3>A vers??o PRO<br> <small>ATIVADA</small></h3>
              <em class="all-icons smile"></em>
            </div>
          </th>
          <th class="space"></th>
          <th class="itemb">
            <div class="free">
              <h3>Sua vers??o<br> <small>ATUAL</small></h3>
              <em class="all-icons"></em>
            </div>
          </th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon01.png')?>" alt=""/></td>
          <td class="virtue">Download e Atualiza????o de Drivers Desatualizados com Apenas Um-clique</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon02.png')?>" alt=""/></td>
          <td class="virtue">Velocidade Ilimitada na Atualiza????o de Drivers</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon03.png')?>" alt=""/></td>
          <td class="virtue vtop">Maior Banco de Dados para Atualizar Drivers Antigos e Mais Raros</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon04.png')?>" alt=""/></td>
          <td class="virtue">Reduz o Travamento e Falhas do Sistema para um Melhor Desempenho</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon05.png')?>" alt=""/></td>
          <td class="vtop">Download e Instala????o Autom??ticos de Drivers Durante o Tempo Ocioso do Sistema</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon06.png')?>" alt=""/></td>
          <td class="virtue">Backup Autom??tico de Todos os Drivers para Restaura????o Segura</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon07.png')?>" alt=""/></td>
          <td class="virtue">Prioridade para Atualizar os ??ltimos Drivers Game Ready</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon08.png')?>" alt=""/></td>
          <td class="virtue">Download e Atualiza????o de Drivers Desatualizados com Apenas Um-clique</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon09.png')?>" alt=""/></td>
          <td class="virtue">Atualiza????o Autom??tica para a ??ltima Vers??o</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
        <tr>
          <td class="icons"><img src="<?php echo getStaticUrl('images/icon10.png')?>" alt=""/></td>
          <td class="virtue">Suporte T??cnico Gratuito 24/7</td>
          <td class="space"></td>
          <td class="itema"><i class="all-icons red">???</i></td>
          <td class="space"></td>
          <td class="itemb"><i class="all-icons gray">???</i></td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- footbuy start -->
  <div class="footbuy">
    <div class="wrapper clearfix">
      <div class="imfbox fl">
        <img class="pcs on" src="<?php echo getStaticUrl('images/db-gift-box.png')?>" alt=""/>
        <img class="pc" src="<?php echo getStaticUrl('images/db-box.png')?>" alt=""/>
      </div>
      <ul class="fl">
        <li class="active" data-num="1"><i></i><span>Pacote para 3 Pcs</span> <strong>75% OFF</strong></li>
        <li data-num="0"><i></i><span>Pacote para 1 PC</span> <strong>40% OFF</strong></li>
      </ul>
      <div class="price fr">
        <p><strong><small>R$</small> <span>79,99</span></strong> <del>R$ <span>399,89</span></del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-db73pcisu7999&ref=pt_db73pcisupurchase1911<?php echo $refStr;?>&refs=pt_purchase_db"
           onclick="ga('send', 'event', 'dbbuy', 'buy', 'db7purchase1911-pt');">
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
    <dd>
      *.Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempos em tempos conforme nossos crit??rios.
    </dd>
  </dl>
  <p class="copyright wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Todos os direitos reservados.</p>
  <!-- footer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "ptnatalprom.php",
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