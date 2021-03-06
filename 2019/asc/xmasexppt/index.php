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
  $c_name = 'xmasexppt2019' . $date;
  $c_name_t='xmasexppt2019' . $date;
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
if(in_array($_GET['pop'],array('xr_asce'))){
  $refStr.='-'.$_GET['pop'];
}
?>

<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
  <title>Adquira Advanced SystemCare 13 Pro com 80% de desconto e leve dois super brindes para o seu computador. Oferta Especial de Natal da IObit.</title>
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
      <span class="txt"><b>S?? Durante o Natal:</b> 200 Pacotes Especiais de Natal. Pacotes Restantes:</span>
      <div id="hlip" class="flipNum">
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
             href="https://www.iobit.com/buy.php?product=pt-asc131pc7499&ref=pt_asc13purchase1pc1911exp<?php echo $refStr;?>&refs=pt_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911exp-pt')">
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
          <p>Sem juros no cart??o</p>
          <a class="buybtn"
             href="https://www.iobit.com/buy.php?product=pt-asc133pcsdiu6699&ref=pt_asc13purchase3pcsdiu1911exp<?php echo $refStr;?>&refs=pt_purchase_asc"
             onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911exp-pt')">
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
    <h2>Conhe??a 3 vantagens em atualizar para PRO</h2>
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
            <p>Assista v??deos, jogue e trabalhe com m??ltiplos programas ao mesmo tempo.</p>
            <p>D?? adeus aos travamentos constantes e computador lento.</p>
          </dd>
        </dl>
      </li>
      <li>
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
          <dd>
            <h3>Internet at?? 300% Mais Veloz*</h3>
            <p>Acesse o seu conte??do favorito com mais velocidade.</p>
            <p>Gaste menos tempo carregando p??ginas e v??deos.</p>
          </dd>
        </dl>
      </li>
      <li>
        <dl class="clearfix">
          <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
          <dd>
            <h3>Voc?? Vai Navegar Sem Medo</h3>
            <p>Limpeza autom??tica de rastros de privacidade.</p>
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
            <li>Mant??m o seu PC limpo atrav??s da desinstala????o de programas teimosos, sobras de programas e da remo????o de plugins maliciosos.</li>
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

  <!-- comparison start -->
  <div class="comparison wrapper">
    <h2>N??o deixe que arquivos<br> lixos acumulados fa??am seu PC lento!</h2>
    <table>
      <thead>
        <tr>
          <th class="itema"><big>Problemas</big> que voc?? encontrar??:</th>
          <th class="itemb"><big>Solu????es</big> que voc?? ter?? de volta:</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="itema">
            Sistema inst??vel pode apresentar <span>travamentos</span> ??s vezes 
          </td>
          <td class="itemb">
            Limpeza profunda de arquivos de registro para <span>corrigir problemas de sistema</span> 
          </td>
        </tr>
        <tr>
          <td class="itema">
            Otimiza????o manual <span>n??o pode garantir</span> a velocidade proporcionada pela otimiza????o em tempo-real
          </td>
          <td class="itemb">
            Limpeza autom??tica de RAM para manter <span>seu PC rodando perfeitamente</span> 
          </td>
        </tr>
        <tr>
          <td class="itema">
            Otimiza????o limitada do desempenho de disco
          </td>
          <td class="itemb">
            Motor de otimiza????o do disco <span>acelera o desempenho do disco</span> ao m??ximo 
          </td>
        </tr>
        <tr>
          <td class="itema">
            Conex??o da Internet <span>lenta e inst??vel</span> 
          </td>
          <td class="itemb">
            Conex??o da Internet ?? at?? <span>300%* mais r??pida</span>
          </td>
        </tr>
        <tr>
          <td class="itema">
            Otimiza????o <span>leve</span> da velocidade de inicializa????o
          </td>
          <td class="itemb">
            Inicializa????o at?? <span>200%* mais r??pida</span> 
          </td>
        </tr>
        <tr>
          <td class="itema">
            Prote????o <span>b??sica</span> pode n??o garantir a seguran??a de sua privacidade 
          </td>
          <td class="itemb">
            Prote????o pessoal de dados <span>protege totalmente seu PC</span> 
          </td>
        </tr>
        <tr>
          <td class="itema">
            <span>Spyware mais recente</span> pode invadir seu PC e atacar seus sistema
          </td>
          <td class="itemb">
            Prote????o em tempo-real para <span>bloquear infec????es de spyware</span>
          </td>
        </tr>
      </tbody>
    </table>
  </div>
  <!-- comparison end -->

  <!-- offermore start -->
  <div class="intro clearfix">
    <div class="wrapper">
      <h2>O ??ltimo Advanced SystemCare 13<br> pode fazer muito mais do que voc?? pensa!</h2>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>Mais Limpo</h3>
          <p>
            Detecta e limpa <b>4GB*</b> mais arquivos lixos
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>Completo</h3>
          <p>
            Varre rastros de privacidade de mais de <b>200</b> programas e <b>15</b> navegadores de todas as contas de usu??rio
          </p>
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo getStaticUrl('images/intro-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>Mais Seguro</h3>
          <p><b>Protege o e-mail</b> de v??rios amea??as por e-mail</p>
        </dd>
      </dl>
      <dl class="last">
        <dt><img src="<?php echo getStaticUrl('images/intro-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>Maior</h3>
          <p>Banco de dados maior suporta a atualiza????o de <b>60%</b> mais programas</p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- offermore end -->

  <!-- review -->
  <div class="review wrapper clearfix">
    <!-- review-title -->
    <h2>Advanced SystemCare Pro j?? acelerou mais de <span class="buyNum"><?php echo $buyNum ?></span> de PCs.</h2>
    <!-- Brasil -->
    <dl>
      <dt><img src="<?php echo $pResUrl;?>images/brasil.png" alt="Brasil"></dt>
      <dd>
        <h4>S??vio da Rocha Lobo</h4>
        <p>
          Tenho usado o Advanced SystemCare por um bom tempo e j?? s??o mais de 5 anos deixando o meu computador rodando como se ele tivesse acabado de sair da caixa e o programa s?? tem ficado melhor a cada vers??o.
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
          Advanced SystemCare deu vida nova ao meu PC! Logo de cara, eu percebi uma diferen??a not??vel. A inicializa????o estava mais r??pida, os problemas que estavam causando travamentos e lentid??o desapareceram!
        </p>
        <hr>
        <cite>Estados Unidos</cite>
      </dd>
    </dl>
    <!-- media -->
    <div class="media clearfix">
      <h2>Veja o que a m??dia especializada tem a dizer</h2>
      <img src="<?php echo $pResUrl;?>images/baixaki.png" alt="Baixaki">
      <P>
        Em nossos testes, notamos que o Advanced SystemCare tem uma efici??ncia excepcional. <br>
        Ele consegue encontrar problemas para resolver no seu computador que realmente s??o dif??ceis de imaginar.
      </P>
    </div>
    <!-- award -->
    <div class="award">
      <h2>Recomendado tamb??m por</h2>
      <img src="<?php echo $pResUrl;?>images/award.png" alt="">
    </div>
  </div>
  <!-- end review -->

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
    <dd>1*.Os programas promocionais est??o sujeitos a altera????o sem aviso pr??vio, de tempos em tempos conforme nossos crit??rios.</dd>
    <dd>2*.Informa????es podem variar com base em diferentes sistemas ou computadores.</dd>
  </dl>
  <p class="copyright wrapper">Copyright 2005 - <?php echo date('Y')?> IObit. Todos os direitos reservados.</p>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-3pc.png')?>" alt=""/></div>
      <div class="center fl">
        <h2>Oferta Exclusiva para o Natal 2019!</h2>
        <div class="numbox">
          <p>
            Corra, apenas
            <div id="flip" class="flipNum">
              <div class="listbox"><span class="list"><b>5</b></span></div>
              <div class="listbox"><span class="list"><b>5</b></span></div>
              <div class="listbox"><span class="list"><b>4</b></span></div>
            </div> restantes 
          </p>
        </div>
      </div>
      <div class="price fr">
        <p><strong>R$ 66,99</strong> <del>R$399,98</del></p>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-asc133pcsdiu6699&ref=pt_asc13purchase3pcsdiu1911exp<?php echo $refStr;?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'ascpurchase1911exp-pt')">
          Renovar agora!
        </a>
      </div>
    </div>
  </div>
  <!-- floatlayer end -->

  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
  function getBuyNum(){
    $.ajax({
      type: "GET",
      url: "xrasce.php",
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