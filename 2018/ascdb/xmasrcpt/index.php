<?php
error_reporting(0);
define("IObit","IObit");
if (@!$include){
  $pResUrl = './';
  $pRootUrl = '../../../';
}
include $pRootUrl.'include/common.inc.php';

if(!empty($_GET['action'])&&($_GET['action']=='getSales')){
  $date=$_GET['d'];
  $cName='frasc'.$date;
  $cookie=$_COOKIE[$cName];
  if($cookie!==null){
    $packsNum=$_COOKIE[$cName];
    if($packsNum>=0){
      $packsNum--;
      setcookie($cName,$packsNum);
    }else{
      $packsNum=0;
    }
  }else{
    $packsNum=50;
    setcookie($cName,$packsNum);
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$viewNum=rand(61,92);
if($_GET['action']=='getViewNum'){
  $packsNow=intval($_GET['p']);
  $viewNum=rand($packsNow+1,$packsNow+20);
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_ascdb','x_dbasc','xr_ascdb'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adquira Advanced SystemCare 12 com Driver Booster 6 Pro com 75% de desconto. Oferta Especial de Natal da IObit.</title>
  <meta name="Copyright" content="IObit">
  <link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Montserrat:500,600,800'>
  <link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
  <?php echo $gJavascript['public'];?>
  <?php echo $gJavascript['head']; ?>
</head>
<body>
<div class="main">
  <!-- banner start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pt/" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
      </a>
      <h1>Presentão de Natal</h1>
      <p class="best">A Maior Promoção do Ano – Sua Chance de Economizar!</p>
      <div class="palen clearfix">
        <div class="left fl">
          <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
        </div>
        <div class="right fr">
          <h2>Driver Booster 6 PRO e Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, &nbsp;&nbsp;<em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Corra! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms restantes</p>
            </div>
            <p><strong><big>R$</big>119<big>,</big></strong> <span> 99 <del>R$ 499,80</del> </span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="https://www.iobit.com/buy.php?product=pt-asc123pcdb11999&ref=pt_ascdb3pcpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_ascdb"
               onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase1811rc-pt')">
              Comprar Agora
            </a>
            <p class="year">1 Ano de Assinatura / 3 PCs</p>
          </div>
        </div>
      </div>
    </div>
    <span class="snow list01"></span>
    <span class="snow snow-clarity  list02"></span>
    <span class="snow snow-smail list03"></span>
    <span class="round  list04"></span>
    <span class="round round-smail list05"></span>
    <span class="round round-clarity list06"></span>
    <span class="round round-large list07"></span>
    <span class="snow snow-clarity  list15"></span>
    <span class="snow snow-smail  list16"></span>
    <span class="snow snow-clarity  list17"></span>
    <span class="snow snow-smail  list18"></span>
    <span class="round round-clarity list23"></span>
    <span class="round round-clarity list24"></span>

    <span class="round round-clarity list08"></span>
    <span class="round round-smail list09"></span>
    <span class="round round-large  list10"></span>
    <span class="round list11"></span>
    <span class="snow snow-clarity list12"></span>
    <span class="snow snow-smail list13"></span>
    <span class="snow list14"></span>
    <span class="snow snow-clarity  list19"></span>
    <span class="snow snow-smail  list20"></span>
    <span class="snow snow-clarity  list21"></span>
    <span class="snow snow-smail  list22"></span>
    <span class="round round-clarity list25"></span>
    <span class="round round-clarity list26"></span>
  </div>
  <!-- banner end -->

  <!-- feature start -->
  <div class="feature">
    <div class="wrapper">
      <h2>Dois Programas, Dupla Garantia: PC mais Rápido, Estável eMelhor Jogo</h2>
      <p class="over">Driver Booster 6 PRO junto com o utilitário mais famoso de otimização – Advanced SystemCare 12 PRO, faz o seu computador rodar mais rápido, estável e melhora a experiência de jogo.</p>
    </div>
  </div>
  <!-- feature end -->

  <!-- together start -->
  <div class="together">
    <div class="wrapper">
      <div class="panel clearfix">
        <div class="asc-box fl clearfix on">
          <div class="box fl">
            <h3>Advanced SystemCare 12 PRO<i></i></h3>
            <dl>
              <dt><strong>Carregamento melhor de jogo</strong></dt>
              <dd>
                com os principais componentes de jogo satualizados.
              </dd>
            </dl>
            <dl>
              <dt><strong>Desempenho melhor do PC</strong></dt>
              <dd>
                através de mais de 3.000.000 de drivers que podem ser atualizados.
              </dd>
            </dl>
            <dl>
              <dt><strong>Melhor experiência de jogo</strong></dt>
              <dd>
                com Drivers Game Ready sempre atualizados.
              </dd>
            </dl>
          </div>
          <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/left-part.png')?>" alt=""/></div>
        </div>
        <div class="db-box fl clearfix on">
          <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/right-part.png')?>" alt=""/></div>
          <div class="box fl">
            <h3><i></i>Driver Booster 6 PRO</h3>
            <dl>
              <dt><strong>Sistema mais estável</strong></dt>
              <dd>sem entradas desnecessários no registro afetando seu PC.</dd>
            </dl>
            <dl>
              <dt><strong>Melhor desempenho para jogos</strong></dt>
              <dd>com a limpeza automática de RAM que para processos desnecessários.</dd>
            </dl>
            <dl>
              <dt><strong>PC com tempo de <br> resposta mais rápido</strong></dt>
              <dd>graças a inicialização e internet mais rápidas</dd>
            </dl>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- together end -->

  <!-- features -->
  <div class="features">
    <div class="wrapper">
      <h2>Além disso você terá estas incríveis funções ao seu dispôr:</h2>
      <ul>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-01.png')?>" alt=""/></span>
          <p>Proteção de Dados Pessoais</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-02.png')?>" alt=""/></span>
          <p>Proteção de Assinatura Digital</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-03.png')?>" alt=""/></span>
          <p>Atualização Automática de  Drivers</p>
        </li>
        <li>
          <span><img src="<?php echo getStaticUrl('images/feature-04.png')?>" alt=""/></span>
          <p>Reparo de Erros de Dispositivo</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- end features -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Não hesite! Adquira estas duas ferramentas poderosas de otimização de PC e Jogo</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo,&nbsp;&nbsp;<em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes!
          </p>
        </div>
        <p><strong><big>R$</big>119<big>,</big></strong> <span> 99 <del>R$ 499,80</del> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-asc123pcdb11999&ref=pt_ascdb3pcpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_ascdb"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase1811rc-pt')">
          Comprar Agora
        </a>
        <p class="year">1 Ano de Assinatura / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->


  <!-- awards start -->
  <div class="awards wrapper">
    <h2>Recomendado também por</h2>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
  <!-- awards end -->

  <!-- review -->
  <div class="review wrapper">
    <div class="review-box">
      <div class="reviews clearfix">
        <h2>Opinião do Usuário</h2>
        <p>"Uma verificação por dia mantém os drivers sempre atualizados. Ao invés de procurar individualmente por atualizações de drivers; Driver Booster mantém todos os drivers do meu PC atualizados com apenas um-clique! Driver Booster melhorou o meu PC para jogos, especialmente com os jogos mais recentes que precisam das últimas atualizações. Os produtos da IObit me mostram a verdadeira capacidade do meu pc. "</p>
      </div>
      <div class="reviews clearfix">
        <h2>Opinião do Usuário</h2>
        <p>"Com Driver Booster, eu consigo saber facilmente quais drivers estão desatualizados e posso atualizá-los com facilidade. Além disso, me ajuda a reparar erros como de rede. Eu não acreditava antes de usar, mas depois de testá-lo eu o adorei, pois meu PC está mais estável, rápido e seguro do que há 8 meses atrás. Muito obrigado, IObit."</p>
      </div>
      <div class="reviews clearfix active">
        <h2>Opinião do Usuário</h2>
        <p>"Eu recomendo esse programa pra todos os meus amigos que reclamam de computador lento."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Opinião do Usuário</h2>
        <p>"São mais de cinco anos deixando o meu computador rodando como se ele tivesse acabado de sair da caixa."</p>
      </div>
      <div class="reviews clearfix">
        <h2>Opinião do Usuário</h2>
        <p>"O meu PC foi ficando lento com o tempo. Eu usei o ASC e fiquei surpreso, parecia o primeiro dia que estava usando meu PC."</p>
      </div>
    </div>

    <ul class="handle clearfix">
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/talal-hafez.png" alt="Talal Hafez"><span></span></div>
        <strong>Talal Hafez</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/Myo-Thuya.png" alt="Myo Thuya"><span></span></div>
        <strong>Myo Thuya</strong>
      </li>
      <li class="active">
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/paul.png" alt="Paul Cummings"><span></span></div>
        <strong>Paul Cummings</strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/savio.png" alt="Sávio da Rocha Lobo"><span></span></div>
        <strong>Sávio da Rocha Lobo </strong>
      </li>
      <li>
        <div class="badge"><img src="<?php echo $pResUrl; ?>images/fritz.png" alt="Fritz Stein"><span></span></div>
        <strong>Fritz Stein</strong>
      </li>
    </ul>
  </div>
  <!-- end review  -->

  <!-- bottomcart -->
  <div class="btmcart">
    <div class="wrapper">
      <div class="leftpart">
        <img src="<?php echo getStaticUrl('images/btmpacks.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo,&nbsp;&nbsp;<em class="packimg">
            <b id="packbox" class="reduceGift packbox">
              <b class="list">
                <strong>0</strong>
                <strong>1</strong>
                <strong>2</strong>
                <strong>3</strong>
                <strong>4</strong>
                <strong>5</strong>
                <strong>6</strong>
                <strong>7</strong>
                <strong>8</strong>
                <strong>9</strong>
              </b>
              <b class="list">
                <strong>0</strong>
                <strong>1</strong>
                <strong>2</strong>
                <strong>3</strong>
                <strong>4</strong>
                <strong>5</strong>
                <strong>6</strong>
                <strong>7</strong>
                <strong>8</strong>
                <strong>9</strong>
              </b>
            </b></em> pacotes restantes!
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Corra! <b>05</b>M:<b>00</b>S:<b class="last">00</b>Ms restantes</p>
      </div>
      <div class="price">
        <p><strong><big>R$</big>119<big>,</big></strong> <span> 99 <del>R$ 499,80</del> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-asc123pcdb11999&ref=pt_ascdb3pcpurchase1811rc<?php echo $refStr;?>&refs=pt_purchase_ascdb"
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase1811rc-pt')">
          Comprar Agora
        </a>
      </div>
    </div>
  </div>
  <!-- end btmcart -->

  <div class="bottom">
    <div class="wrapper">
      <!-- service start -->
      <div class="service clearfix">
        <dl class="fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h4>Tente SEM RISCOS – com nossa Garantia de 60 dias de Reembolso </h4>
            <p>Nós estamos confiantes que ativando a edição PRO você obterá um PC mais limpo, rápido e seguro com um preço acessível! </p>
          </dd>
        </dl>
        <dl class="fr">
          <dd>
            <h4>Aceitamos várias formas de pagamento:</h4>
          </dd>
          <dt><img src="<?php echo getStaticUrl('images/payments.png')?>" alt=""/></dt>
        </dl>
      </div>
      <!-- service end -->

      <!-- footer start -->
      <div class="footer">
        <dl>
          <dt>Observe:</dt>
          <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.</dd>
          <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
        </dl>
        <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
      </div>
      <!-- footer end -->
    </div>
  </div>

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "https://www.iobit.com/buy.php?product=pt-asc123pcdb11499&ref=pt_ascdb3pcpurchase1811rclp<?php echo $refStr;?>&refs=pt_purchase_ascdb";
  var _ga = "ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase1811rclp-pt')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>