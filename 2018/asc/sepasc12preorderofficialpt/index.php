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
  $cName='ascprepa'.$date;
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
$refStr=(empty($_GET['ref'])?'':('-'.$_GET['ref'])).(empty($_GET['st'])?'':('-'.$_GET['st']));
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
<title>Pague R$ 59,99 para adquirir o novo Advanced SystemCare PRO na pré-venda</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,700'>
<link href="<?php echo getStaticUrl('style/style.min.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

  <div class="main">
    <!-- banner start -->
    <div class="banner">
      <div class="wrapper">
        <a class="logo" href="https://www.iobit.com" target="_blank">
          <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit"/>
        </a>
        <h1>A Pré-Venda Global Começa Agora</h1>
        <h3>Corra! 500 unidades disponíveis apenas, <span class="soldNum">453</span> já foram vendidas.</h3>
        <div class="palen clearfix">
          <div class="left fl"><img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt=""/></div>
          <div class="right fr">
            <h2>Advanced SystemCare 12 PRO</h2>
            <div class="price">
              <p>
                Agora: <del>R$ 199,90</del>
                <img src="<?php echo getStaticUrl('images/price.png')?>" alt=""/>
              </p>
              <ul>
                <li>
                  <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo,  <b class="reduceGift"><span class="packsNum">**</span></b> pacotes restantes!
                </li>
                <li id="bandown" class="countdown">Finaliza aproximadamente em: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
              </ul>
              <div class="progressbar">
                <span></span>
              </div>
              <a class="buybtn" 
                 href="https://www.iobit.com/buy.php?product=pt-asc125999&ref=pt_asc12preorder5999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialpt');"
                 data-text="Adquirir Agora">
                <span>Adquirir Agora</span>
              </a>
              <h5>1 Ano de Assinatura / 3 PCs</h5>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- banner end -->

    <!-- intro start -->
    <div class="intro wrapper">
      <h2>Por que Adquirir Advanced SystemCare 12 na Pré-Venda?</h2>
      <div class="top clearfix">
        <div class="fl">
          <h3>Utilize estas funções antes de outros</h3>
          <img src="<?php echo getStaticUrl('images/computer_01.png')?>" alt="Advanced SystemCare 12 PRO"/>
        </div>
        <div class="fr">
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_01.png')?>" alt="Advanced SystemCare 12 PRO"/></dt>
            <dd>
              <h4>Escudo de Privacidade</h4>
              <h5>Bloqueia acesso secreto aos seus arquivos e fotos</h5>
              <p>
                Informa a você quando alguém tenta acessar secretamente seus arquivos privados e fotos e te notifica permitindo que você bloqueie o acesso.
              </p>
              <span>Função exclusiva pro</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_02.png')?>" alt=""/></dt>
            <dd>
              <h4>Limpeza de Assinatura Digital </h4>
              <h5>Ninguém saberá o que você faz online</h5>
              <p>
                Disfarça automaticamente sua assinatura digital  para previnir que empresas de rastreamento espiem o que você visita, lê e compra. 
              </p>
              <span>Função exclusiva pro</span>
            </dd>
          </dl>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_03.png')?>" alt=""/></dt>
            <dd>
              <h4>Anti-Mineração de Cryptomoedas</h4>
              <h5>Evita super-aquecimento, lentidão e desligamento súbito do PC</h5>
              <p>
                Impede websites maliciosos de usar seu computador para minerar criptomoedas secretamente resultando em travamentos, super-aquecimento e desligamento súbito.
              </p>
            </dd>
          </dl>
        </div>
      </div>
      <div class="bot clearfix">
        <div class="fl">
          <h3>Aproveite dessas melhorias o mais rápido possível</h3>
          <dl>
            <dt><img src="<?php echo getStaticUrl('images/intro_04.png')?>" alt=""/></dt>
            <dd>
              <h4>Limpeza e Otimização</h4>
              <h5>Acelera computadores lento em até 200%</h5>
              <p>
                Limpa todos os arquivos inúteis e otimiza CPU e RAM para uma inicialização e desempenho 2 vezes mais rápida.
              </p>
              <span>Função exclusiva pro</span>
            </dd>
          </dl>
          <dl class="last">
            <dt><img src="<?php echo getStaticUrl('images/intro_05.png')?>" alt=""/></dt>
            <dd>
              <h4>Aceleração da Internet</h4>
              <h5>Acelera a conexão internet em até 300%</h5>
              <p>
                Otimiza as configurações do navegador para download, navegação, jogo online e vídeos do Youtube 3 vezes mais rápidos.
              </p>
              <span>Função exclusiva pro</span>
            </dd>
          </dl>
        </div>
        <div class="fr">
          <img src="<?php echo getStaticUrl('images/computer_02.png')?>" alt=""/>
        </div>
      </div>
    </div>
    <!-- intro end -->

    <!-- comparison start -->
    <div class="comparison" id="compare">
      <div class="wrapper">
        <h2>A Solução Perfeita para Problemas Frustrantes do seu PC</h2>
        <table border="0" cellspacing="0" cellpadding="0" width="100%">
          <thead>
            <tr>
              <th class="itema"><span class="cry">Problema</span></th>
              <th class="itemb"></th>
              <th class="itemc"><span class="smile">Solução</span></th>
            </tr>
          </thead>
          <tbody>
            <tr class="first">
              <td class="itema">
                <p>Recebe a mensagem que você tem espaço insuficiente em disco</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_01.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Verificação e remoção automática de arquivos lixos para liberar espaço em disco</p>
                <b><i class="all-icons">■</i> Função exclusiva pro</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>O sistema demora pra inicializar e roda com lentidão</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_02.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Libera memória automaticamente para acelerar seu PC em até 200% quando seu PC ficar lento</p>
                <b><i class="all-icons">■</i> Função exclusiva pro</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Download, navegação, jogos online e vídeos do Youtube lentos</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_03.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Otimiza as configurações do navegador para acelerar a conexão da internet em até 300%</p>
                <b><i class="all-icons">■</i> Função exclusiva pro</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Travamento e congelamento súbitos do sistema </p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_04.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Limpa e repara entradas do registro para melhorar a estabilidade e segurança do sistema</p>
                <b><i class="all-icons">■</i> Função exclusiva pro</b>
              </td>
            </tr>
            <tr><td class="space"></td></tr>
            <tr>
              <td class="itema">
                <p>Propagandas de coisas que você viu online continuam te seguindo</p>
              </td>
              <td class="itemb"><img src="<?php echo getStaticUrl('images/icons_05.png')?>" alt=""/></td>
              <td class="itemc">
                <p>Bloqueia automaticamante anúncios e varre seus rastros online para prevenir que você seja rastreado por hackers.</p>
                <b><i class="all-icons">■</i> Função exclusiva pro</b>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <!-- comparison end -->

    <!-- ad-points start -->
    <div class="ad-points wrapper">
      <h2>O Que Nós Fazemos Por Nossos Usuários</h2>
      <ul class="clearfix">
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_01.png')?>" alt=""/></div>
          <p class="light">Resolvemos</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num01.png')?>" alt=""/></div>
          <p>Problemas de PC no dia</p>
        </li>
        <li>
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_02.png')?>" alt=""/></div>
          <p class="light">Economiza</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num02.png')?>" alt=""/></div>
          <p>horas por mês</p>
        </li>
        <li class="last">
          <div class="imgbox"><img src="<?php echo getStaticUrl('images/ad_03.png')?>" alt=""/></div>
          <p class="light">Economiza</p>
          <div class="imgbox num"><img src="<?php echo getStaticUrl('images/ad_num03.png')?>" alt=""/></div>
          <p>Bilhões por ano</p>
        </li>
      </ul>
    </div>
    <!-- ad-points end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Adquira por <b>R$ 59,99</b> na Pré-Venda para Ter um PC mais Rápido, Limpo e Seguro</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=pt-asc125999&ref=pt_asc12preorder5999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialpt');"
           data-text="Comprar Agora - R$ 59,99">
          <span>Comprar Agora - R$ 59,99</span>
        </a>
        <p>
          <span class="surplusGift viewNum"><?php echo $viewNum;?></span>  vendo,  <b class="reduceGift"><span class="packsNum">**</span></b> pacotes restantes!
        </p>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- review start -->
    <div class="review wrapper">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></dt>
            <dd>
              <h2>Opinião da Mídia</h2>
              <p>
                "Não há nada pior que um computador travado que impede você de trabalhar ou jogar. Advanced Systemcare irá reparar todos os problemas independente de quais sejam, não somente limpando os arquivos inúteis, malware, e entrada de registros inválidos, mas também irá dar um boost ao seu computador para otimizar sua experiência de PC."
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Eu, como muitos outros, comecei com a Versão Grátis e eventualmente comprei a Versão PRO. Ele tem operado, por anos, para manter o meu computador limpo e livre de "bugs" e até agora ainda não me deixou na mão vez alguma. Eu, recentemente, contactei a equipe do Advanced System Care e recebi a resposta dentro de um ou dois dias com tudo que eu precisava saber. Na minha opinião, o Suporte ao Cliente é essencial na minha decisão de continuar usando o produto e o ASC ganha de qualquer outro produto quando se trata de Suporte ao Cliente e Produto."</p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Como a maioria das pessoas, eu não sou um expert em computadores. Eu perdi a conta de quantos programas eu tentei em anos e nenhum chegou perto do Advanced SystemCare Pro. Desde que eu tenho este programa eu não precisei chamar um técnico para reparar meu computador sequer uma vez. Definitivamente ultrapassou as minhas expectativas, sempre atualizado e o visual é bem legal também. Obrigado a vocês por fazerem minha vida tão mais fácil."</p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Esse programa é o melhor que já usei. Meu computador está rodando muito mais rápido e muito melhor em geral desde que adquiri Advanced SystemCare Pro. O programa limpou arquivos desnecessários e duplicados, pastas vazias e eu o usei para destruir arquivos. Também limpou e desfragmentou o registro e todos os arquivos no meu PC. Eu recomendo que você compre este programa. Não é caro e o que fará pelo seu computador é totalmente incrível. Você vai amar, eu prometo."</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Opinião do Usuário</h2>
              <p>"Na opinião de um técnico de reparo de computadores, eu acho que a maioria dos problemas são resolvidos escaneando o PC com o ASC Free. Quando termino com o reparo eu geralmente sugiro que o cliente compre o pacote PRO. Quem precisa de um técnico quando você tem o poder do Advanced System Care Pro trabalhando no seu sistema 24hx7dias? Este é o melhor produto que um usuário pode comprar. Obrigado por facilitar o meu trabalho!"</p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- review end -->

    <!-- awards start -->
    <div class="awards">
      <div class="wrapper">
        <h2>Recomendado também por</h2>
        <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
      </div>
    </div>
    <!-- awards end -->

    <div class="bottom">
      <div class="wrapper">
        <!-- service start -->
        <div class="service clearfix">
          <dl>
            <dt><h4>Garantia de Reembolso</h4></dt>
            <dd>
              <img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/>
            </dd>
          </dl>
          <dl>
            <dt><h4> Formas de Pagamento</h4></dt>
            <dd><img src="<?php echo getStaticUrl('images/service.png')?>" alt=""/></dd>
          </dl>
          <dl>
            <dt><h4>Pagamento 100% Seguro</h4></dt>
            <dd>
              <img src="<?php echo getStaticUrl('images/godaddy.png')?>" alt=""/>
            </dd>
          </dl>
        </div>
        <!-- service end -->

        <!-- footer start -->
        <div class="footer">
          <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
        </div>
        <!-- footer end -->
      </div>
    </div>

    <!-- floatlayer start -->
    <div id="floatlayer" class="floatlayer">
      <div class="wrapper clearfix">
        <img class="fl" src="<?php echo getStaticUrl('images/asc-small-box.png')?>" alt=""/>
        <div class="price fl">
          <ul>
            <li>
              <span class="surplusGift viewNum"><?php echo $viewNum;?></span> vendo , <b class="reduceGift"><span class="packsNum">**</span></b> pacotes restantes!
            </li>
            <li id="floatdown" class="countdown">Finaliza aproximadamente em: <b>05</b>M: <b>00</b>S: <b>00</b>Ms</li>
          </ul>
          <div class="progressbar">
            <span></span>
          </div>
        </div>
        <a class="buybtn fr" 
           href="https://www.iobit.com/buy.php?product=pt-asc125999&ref=pt_asc12preorder5999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialpt');"
           data-text="Comprar Agora - R$ 59,99">
          <span>Comprar Agora - R$ 59,99</span>
        </a>
      </div>
    </div>
    <!-- floatlayer end -->

  </div>

  <script src="<?php echo $pRootUrl;?>tpl/js/TweenMax.min.js"></script>
  <script src="<?php echo getStaticUrl('script/modernizr.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/review-3d-carousel.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
  <script>
    var imgUrl = "<?php echo getStaticUrl('images/asc-off-box.png')?>";
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderofficialpt');";
    var _url = "https://www.iobit.com/buy.php?product=pt-asc12preorder6999&ref=pt_asc12preorderofficial6999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc";
  </script>

</body>
</html>