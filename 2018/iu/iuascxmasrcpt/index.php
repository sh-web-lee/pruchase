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

$viewNum=rand(60,88);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}

$refStr='';
if(in_array($_GET['pop'],array('x_iuasc','xr_iuasc'))){
  $refStr.='-'.$_GET['pop'];
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Adquira Advanced SystemCare 12 Pro e IObit Uninstaller Pro com 75% de desconto. Oferta Especial de Natal da IObit.</title>
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
          <h2>IObit Uninstaller 8 PRO & Advanced SystemCare 12 PRO</h2>
          <div class="price">
            <div class="count">
              <p class="watching">
                <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes
              </p>
              <div class="progressbar">
                <span></span>
              </div>
              <p id="bandown" class="countdown">Corra! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms restantes</p>
            </div>
            <p><strong><small>R$</small>64</strong> <span><del>R$ 299,89</del><b>,99</b> </span></p>
            <!-- buybtn -->
            <a class="buybtn"
               href="http://www.iobit.com/buy.php?product=pt-iuasc123pc6499&ref=pt_asciu3pcpurchase1812rc<?php echo $refStr;?>&refs=pt_purchase_asc"
               onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1811rc-pt') ">
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
      <h2>Dois Programas, Dupla Garantia: PC mais Limpo, Rápido e Seguro</h2>
      <p class="over">
        IObit Uninstaller 8 PRO junto com o utilitário líder mundial– Advanced SystemCare 12 PRO, faz o seu computador antigo rodar como novo e remover qualquer rastro de programas teimosos.
      </p>
      <!-- computer -->
      <img class="computer" src="<?php echo $pResUrl;?>images/computer.png" alt="">
      <span class="circle circle-out"></span>
      <span class="circle circle-mid"></span>
      <span class="circle circle-int"></span>
      <!-- PC mais Limpo -->
      <dl class="schonere clearfix">
        <dd class="fl">
          <h3>PC mais Limpo</h3>
          <p>
            Limpa profundamente arquivos lixos e entradas de registros inúteis para liberar espaço
            <span>*Exclusivo do Advanced SystemCare PRO</span>
            Remove programas teimosos ou em bundle para liberar espaço
            <span>*Exclusivo do IObit Uninstaller PRO</span>
          </p>
        </dd>
        <dt class="fr"><img src="<?php echo $pResUrl;?>images/feature-icon01.png" alt=""></dt>
      </dl>
      <!-- Navegação mais Rápida -->
      <dl class="sneller clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/feature-icon02.png" alt=""></dt>
        <dd class="fl">
          <h3>Navegação mais Rápida</h3>
          <p>
            Otimiza configurações do navegador para acelerar a Internet em 300%
            <span>*Exclusivo do Advanced SystemCare PRO</span>
            Remove plugins de anúncios que deixam a navegação lenta
            <span>*Exclusivo do IObit Uninstaller PRO</span>
          </p>
        </dd>
      </dl>
      <!-- Veiligere PC -->
      <dl class="veiligere">
        <dt><img src="<?php echo $pResUrl;?>images/feature-icon03.png" alt=""></dt>
        <dd>
          <h3>PC mais  Seguro</h3>
          <p>
            Mantém os dados pessoais e traços online seguros contra programas não-confiáveis e malware.
            <span>*Exclusivo do Advanced SystemCare PRO</span>
            Se livra de bundleware maliciosos e plug-ins
            <span>*Exclusivo do IObit Uninstaller PRO</span>
          </p>
        </dd>
      </dl>
    </div>
  </div>
  <!-- feature end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <div class="arrow"><i></i></div>
      <h2>Além disso você terá estas incríveis funções ao seu dispôr:</h2>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-01.png" alt=""></dt>
        <dd>
          Inicialização 200% mais Rápida
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-02.png" alt=""></dt>
        <dd>
          Proteção de Assinatura Digital
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-03.png" alt=""></dt>
        <dd>
          Limpeza Automática de RAM
        </dd>
      </dl>
      <dl>
        <dt><img src="<?php echo $pResUrl;?>images/feature-04.png" alt=""></dt>
        <dd>
          1-clique para Atualizar todos os Programas
        </dd>
      </dl>
    </div>
  </div>
  <!-- intro end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <h2>Não hesite! Adquira estas Duas Ferramentas Poderosas de Otimização Agora</h2>
    <div class="wrapper clearfix">
      <div class="fl">
        <img src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="price fr">
        <div class="count">
          <p class="watching">
            <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes
          </p>
        </div>
        <p><strong><small>R$</small>64</strong> <span><del>R$ 299,89</del><b>,99</b> </span></p>
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pt-iuasc123pc6499&ref=pt_asciu3pcpurchase1812rc<?php echo $refStr;?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1811rc-pt')">
          Comprar Agora
        </a>
        <p class="year">1 Ano de Assinatura / 3 PCs</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- award start -->
  <div class="award wrapper">
    <h2>Recomendado também por</h2>
    <img src="<?php echo $pResUrl;?>images/awards.png" alt="">
  </div>
  <!-- award end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <div class="content ">
        <!-- 01 -->
        <dl class="active">
          <dt>
            <h3>Opinião do Usuário</h3>
          </dt>
          <dd>
            “Além de remover programas, IObit Uninstaller conta com Verificação Profunda para encontrar as sobras deixadas e removê-las completamente do computador. Como alguém que gosta de sempre cuidar do meu computador, desde que eu instalei IObit Uninstaller, eu só uso esse pro-grama para desinstalar aplicativos. Recomendo fortemente o uso do IObit Uninstaller.”
          </dd>
        </dl>
        <!-- 02 -->
        <dl>
          <dt>
            <h3>Opinião do Usuário</h3></dt>
          <dd>
           ”IObit Uninstaller é uma ótima ferramenta para desinstalar programas, barras de ferramentas e plugins. Tem sido muito útil para mim pois não apenas desinstala programas e aplicativos, mas também como as entradas no registro relacionadas a eles. Tem uma interface intuitiva e bela e não precisa entender de informática para usá-lo. Recomendo! ”
          </dd>
        </dl>
        <!-- 03 -->
        <dl>
          <dt>
            <h3>Opinião da Mídia</h3></dt>
          <dd>
           Em nossos testes, notamos que o Advanced SystemCare tem uma eficiência excepcional. Ele consegue encontrar problemas para resolver no seu computador que realmente são difíceis de imaginar.
          </dd>
        </dl>
        <!-- 04 -->
        <dl>
          <dt>
            <h3>Opinião do Usuário</h3></dt>
          <dd>
            "Eu recomendo esse programa pra todos os meus amigos que reclamam de computador lento."
          </dd>
        </dl>
        <!-- 05 -->
        <dl>
          <dt>
            <h3>Opinião do Usuário</h3></dt>
          <dd>
            "São mais de cinco anos deixando o meu computador rodando como se ele tivesse acabado de sair da caixa."
          </dd>
        </dl>
        <!-- 06 -->
        <dl>
          <dt>
            <h3>Opinião do Usuário</h3></dt>
          <dd>
            "O meu PC foi ficando lento com o tempo. Eu usei o ASC e fiquei surpreso, parecia o primeiro dia que estava usando meu PC."
          </dd>
        </dl>
      </div>
      <ul class="users clearfix lato">
        <!-- hank-ewert -->
        <li class="current">
            <div class="pic"><img src="<?php echo $pResUrl; ?>images/ronan-levi.png" alt="Ronan Levi"></div>
            <p>Ronan Levi</p>
          </a>
        </li>
        <!-- 02 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/fernando-lourenco-gomes.png" alt="Fernando Lourenço Gomes"></div>
          <p>Fernando Lourenço Gomes</p>
        </li>
        <!-- 03 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/baixaki.png" alt="Baixaki"></div>
          <p>Baixaki</p>
        </li>
        <!-- 04 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/paul.png" alt="Paul Cummings">
          </div>
          <p>Paul Cummings</p>
        </li>
        <!-- 05 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/savio.png" alt="Sávio da Rocha Lobo"></div>
          <p>Sávio da Rocha Lobo</p>
        </li>
        <!-- 06 -->
        <li>
          <div class="pic"><img src="<?php echo $pResUrl; ?>images/fritz.png" alt="Fritz Stein">
          </div>
          <p>Fritz Stein</p>
        </li>
      </ul>
    </div>
  </div>
  <!-- review end -->

  <!-- bottombuy start -->
  <div class="bottombuy">
    <div class="wrapper clearfix">
      <div class="box fl">
        <img src="<?php echo getStaticUrl('images/asc-bottom-box.png')?>" alt="Advanced SystemCare 12 Pro"/>
      </div>
      <div class="count fl">
        <p class="watching">
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo, <em class="packimg"><b id="packbox" class="reduceGift packbox"><b class="list"><strong>*</strong></b><b class="list"><strong>*</strong></b></b></em> pacotes restantes
        </p>
        <div class="progressbar">
          <span></span>
        </div>
        <p id="bandown" class="countdown">Corra! <b>05</b>M:<b>00</b>S:<b class="last">000</b>Ms restantes</p>
      </div>
      <div class="price fr">
        <p><strong><small>R$</small>64</strong> <span><del>R$ 299,89</del><b>,99</b> </span></p>
        <!-- buybtn -->
        <a class="buybtn"
           href="http://www.iobit.com/buy.php?product=pt-iuasc123pc6499&ref=pt_asciu3pcpurchase1812rc<?php echo $refStr;?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1811rc-pt')">
          Comprar Agora
        </a>
      </div>
    </div>
  </div>
  <!-- bottombuy end -->

  <!-- footer start -->
  <div class="footer wrapper">
    <div class="service clearfix">
      <dl class="fl moneyback clearfix">
        <dt class="fl"><img src="<?php echo $pResUrl;?>images/moneyback.png" alt=""></dt>
        <dd class="fl">
          <h3>
            Tente SEM RISCOS – <br>com nossa Garantia de 60 dias de Reembolso
          </h3>
          <p>
            Nós estamos confiantes que ativando a edição PRO você obterá <br> um PC mais limpo, rápido e seguro com um preço acessível!
          </p>
        </dd>
      </dl>
      <dl class="fl payments">
        <dd><h3>Nós aceitamos</h3></dd>
        <dt><img src="<?php echo $pResUrl;?>images/payments.png" alt=""></dt>
      </dl>
    </div>
    <p class="notes">
      Observe:<br>
      1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.<br>
      2*.Informações podem variar com base em diferentes sistemas ou computadores.
    </p>
    <p class="copyright">Copyright © 2005 - 2018 IObit. Todos os Direitos Reservados</p>
  </div>
  <!-- footer end -->

  <!-- backtotop start -->
  <div id="backtotop" class="backtotop">top</div>
  <!-- backtotop end -->

</div>
<script>
  var refStr = '<?php echo $refStr;?>';
  var imgSrc = "<?php echo getStaticUrl('images/asc-mask-box.png')?>";
  var _href = "http://www.iobit.com/buy.php?product=pt-iuasc123pc5999&ref=pt_asciu3pcpurchase1812rclp<?php echo $refStr;?>&refs=pt_purchase_asc";
  var _ga = "ga('send', 'event', 'iubuy', 'buy', 'iuascpurchase1811rclp-pt')";
  var viewNum = "<?php echo $viewNum;?>";
</script>
<script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
<script src="<?php echo getStaticUrl('script/script.js')?>"></script>

</body>
</html>