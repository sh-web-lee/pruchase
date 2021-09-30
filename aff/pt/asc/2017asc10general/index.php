<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';
  if(!empty($_GET['AFF'])) $_GET['aff']=$_GET['AFF'];
if (empty($_GET['ref'])) {
  $refStr = 'ptaff_asc14_2017general';
  $refDownloadStr='ptasc12g';
}else{
  $refStr=$refDownloadStr=$_GET['ref'];
}
$affStr=empty($_GET['AFF'])?$_GET['aff']:$_GET['AFF'];
if($_GET['ref']=='cb1712en'){
  $buyHref="https://www.cleverbridge.com/289/?scope=checkout&cart=184422&pricerule=enaff2999&coupon=CB50OFF&ref=".$refStr."&AFFILIATE=".$affStr;
}elseif($_GET['ref']=='fs1702en'){
  $buyHref="https://www.macboost.net/xhtml/iobit.html?product=advanced-systemcare-10-pro-1-year-subscription-3-pcs&coupon=ASC50OFF";
}elseif($_GET['ref']=='rw1702en'){
  $buyHref="https://safecart.com/iobit/ascpro/1year3pcs?coupon_code=66PQ";
}elseif($_GET['ref']=='fs269814'){
  $buyHref="https://macbooster.7eer.net/c/269814/378283/4385";
}elseif($_GET['ref']=='fs391813'){
  $buyHref="https://macbooster.7eer.net/c/391813/378283/4385";
}else{
  $buyHref="https://www.iobit.com/buy.php?product=ptaff-asc143pc5774a&ref=".$refStr."&aff=".$affStr;
}

if(preg_match('/fspi([0-9]*)/',$_GET['ref'],$matches)){
  $buyHref='https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499';
  $pregNum=$matches[1];
  if(!empty($pregNum)){
    $buyHref='https://macbooster.7eer.net/c/'.$pregNum.'/556566/4385';
  }
}

if(!empty($_GET['ref'])){

    if(preg_match_all('/ir([0-9]*)/', $_GET['ref'], $arr)) {

        $buyHref = "https://iobit.onfastspring.com/advanced-systemcare-pro-1-year-subscription-3-pcs-1499";

        if ($arr[1][0] != null) {

            $buyHref = "http://macbooster.7eer.net/c/" . $arr[1][0] . "/556566/4385";
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tenha um PC rápido e sem problemas com o ASC PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
<script type="text/javascript" src="<?php echo $pRootUrl; ?>tpl/js/stats.js"></script>

  <!-- banner start -->
  <div class="header">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com" target="_blank">
        <img src="<?php echo getStaticUrl('images/logo.png')?>" alt="IObit">
      </a>
      <p>O Melhor Utilitário de Otimização para PC do Mundo</p>
      <h1>Advanced SystemCare PRO</h1>
      <h4>Torna seu PC mais Limpo, Rápido e Estável com 1-Clique</h4>
      <div class="btnbox">
        <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'ptasc12g')">
          <p>Baixe para uma verificação grátis</p>
          Para Win10/8/7/Vista/XP
        </a>
        <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc142017general')">
         Compre Agora e Economiza <strong>50%</strong> 
        </a>
      </div>
    </div>
  </div>
  <!-- banner end -->

  <!-- container start -->
  <div class="container">

    <!-- mediareview start -->
    <dl class="mediareview wrapper clearfix">
      <dt>
        <img src="<?php echo $pResUrl; ?>images/media_icon.png" alt="">
        <p>A Escolha de mais de 250 Milhões de Usuários</p>
      </dt>
      <dd>
        <h3>Advanced SystemCare é um ótimo utilitário de PC “tudo-em-um” que faz a varredura, reparação e otimiza diversos problemas do seu sistema.</h3>
        <p>
          "Advanced SystemCare é um ótimo utilitário de PC “tudo-em-um” que faz a varredura, reparação e otimiza diversos problemas do seu sistema. Ele tem o objetivo de remediar o que quer que aflija o seu computador, não só através da limpeza de arquivos inúteis, malware e entradas inválidas do registro, como também impulsionando a velocidade do seu computador para otimizar sua experiência no PC." – Cnet
        </p>
      </dd>
    </dl>
    <!-- mediareview end -->

    <!-- intro start -->
    <div class="intro">
      <div class="wrapper clearfix">
        <h2>O Utilitário de PC Essencial para Todo Usuário de PC</h2>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro1.png')?>" alt=""></dt>
          <dd><h3>PC mais Rápido</h3></dd>
          <dd>Identifica e remove programas de desempenho causando lentidão no PC</dd>
        </dl>
        <dl class="more">
          <dt><img src="<?php echo getStaticUrl('images/intro2.png')?>" alt=""></dt>
          <dd><h3>Sistema mais Estável</h3></dd>
          <dd>Corrige erros do Windows para restaurar estabilidade do sistema e reduzir travamentos do PC</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo getStaticUrl('images/intro3.png')?>" alt=""></dt>
          <dd><h3>Navegação mais Segura</h3></dd>
          <dd>Limpa automaticamente dados de navegação e esconde sua assinatura digital para impedir rastreamento malicioso</dd>
        </dl>
      </div>
    </div>
    <!-- intro end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Você Só Precisa de 1-clique para um PC Limpo, Rápido e Estável</h2>
        <div class="btnbox">
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc142017general')">
            Compre Agora e Economiza <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- describe start -->
    <div class="wrapper">
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe1.png')?>" alt=""></div>
        <div class="fl txtbox">
          <h2>Limpa Profundamente e Otimiza seu PC</h2>
          <p>
            Advanced SystemCare PRO limpa profundamente seus arquivos lixos, entradas inválidas de registro, programas indesejados e teimosos, plugins e barras de ferramenta de anúncios, além de otimizar a inicialização, RAM, Internet e disco para deixar o seu PC limpo e rápido novamente.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe2.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Corrige Todos os Tipos de Problemas de PC</h2>
          <p>
            Advanced SystemCare PRO identifica e corrige todos os tipos de problemas de Windows incluindo erros de registro e disco, problemas de segurança no Windows, drivers desatualizados e problemas de sistema para restaurar a estabilidade de sistema e prevenir travamento do PC.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe3.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Monitora Recursos de Sistema em Tempo-Real</h2>
          <p>
            Advanced SystemCare PRO te ajuda a gerenciar o uso de sua RAM, CPU e Disco com 1-clique através da detecção automática e desabilitação de processos inativos e programas para liberar memória e melhorar o desempenho do PC.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe4.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2>Protege Ativamente sua Privacidade Online</h2>
          <p>
            Integrado com o novo Escudo de Privacidade e Proteção de Assinatura Digital, Advanced SystemCare PRO detecta e bloqueia acesso secreto aos seus dados pessoais e esconde sua assinatura digital para limpar seus rastros online e proteger melhor seu PC e sua privacidade online. Ele também previne modificações maliciosas na sua página inicial, em seu mecanismo de busca e configurações DNS.
          </p>
        </div>
      </div>
      <div class="describe clearfix">
        <div class="imgbox fr"><img src="<?php echo getStaticUrl('images/describe5.png')?>" alt=""></div>
        <div class="txtbox fl">
          <h2>Remove Anúncios e Bloqueia Websites Maliciosos</h2>
          <p>
            Advanced SystemCare PRO remove anúncios irritantes no Internet Explorer, Chrome e Firefox, e bloqueia websites maliciosos e não-seguros para garantir uma melhor experiência de navegação.
          </p>
        </div>
      </div>
      <div class="describe last clearfix">
        <div class="imgbox fl"><img src="<?php echo getStaticUrl('images/describe6.png')?>" alt=""></div>
        <div class="txtbox fr">
          <h2> Captura Intrusos Automaticamente <span>(Requer Câmera)</span></h2>
          <p>
            Advanced SystemCare PRO ajuda a capturar intrusos acessando seu PC sem permissão ou tentando roubar suas informações pessoais e arquivos importantes. Depois de reconhecer seu próprio rosto, o programa capturará a imagem de intrusos silenciosamente no fundo.
          </p>
        </div>
      </div>
    </div>
    <!-- describe end -->

    <!-- tool start -->
    <div class="tool">
      <div class="wrapper clearfix">
        <h2>Mais Ferramentas Incríveis</h2>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon1.png" alt=""></dt>
          <dd><h4>Gerenciador de Inicializações</h4></dd>
          <dd>Gerencia itens de inicialização para acelerar a inicialização do PC.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon2.png" alt=""></dt>
          <dd><h4>RAM Inteligente</h4></dd>
          <dd>Libera memória para melhorar o desempenho de seu PC.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon3.png" alt=""></dt>
          <dd><h4>Aceleração de Internet</h4></dd>
          <dd>Otimiza navegadores para acelerar a conexão da Internet.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon4.png" alt=""></dt>
          <dd><h4>Reparar Windows</h4></dd>
          <dd>Identifica e corrige problemas de Windows.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon5.png" alt=""></dt>
          <dd><h4>Localizar Arquivos Grandes</h4></dd>
          <dd>Encontra e remove arquivos grandes para mais espaço.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon6.png" alt=""></dt>
          <dd><h4>Destruir Arquivos</h4></dd>
          <dd>Remove arquivos indesejados permanentemente.</dd>
        </dl>
        <dl>
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon7.png" alt=""></dt>
          <dd><h4>Limpar Registro</h4></dd>
          <dd>Limpa o registro e repara problemas.</dd>
        </dl>
        <dl class="right">
          <dt><img src="<?php echo $pResUrl; ?>images/tool_icon8.png" alt=""></dt>
          <dd><h4>Limpar Disco</h4></dd>
          <dd>Limpa todos os tipos de arquivos lixos para liberar espaço em disco.</dd>
        </dl>
      </div>
    </div>
    <!-- tool end -->
  
    <!-- usereview start -->
    <div id="user" class="usereview wrapper clearfix">
      <h2>Opinião do Usuário</h2>
      <dl class="active">
        <dt><h4>"Não só o produto é ótimo, como o atendimento ao cliente é igualmente ótimo"</h4></dt>
        <dd>
          "Advanced SystemCare tem funcionado para manter meu computador limpo e livre de bugs por anos. Eu entrei em contato com o atendimento ao cliente recentemente e eles responderam dentro de um dia com tudo que eu precisava saber. Para mim, a qualidade do atendimento é um fator importantíssimo na minha decisão de escolher um produto e Advanced SystemCare vence tanto no produto como no atendimento."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Meu computador está rodando muito mais rápido e muito melhor em geral desde que adquiri Advanced SystemCare Pro."</h4></dt>
        <dd>
          "Esse programa é o melhor que já usei. Meu computador está rodando muito mais rápido e muito melhor em geral desde que adquiri Advanced SystemCare Pro. O programa limpou arquivos desnecessários e duplicados, pastas vazias e eu o usei para destruir arquivos. Também limpou e desfragmentou o registro e todos os arquivos no meu PC. Eu recomendo que você compre este programa. Não é caro e o que fará pelo seu computador é totalmente incrível. Você vai amar, eu prometo."
        </dd>
      </dl>
      <dl>
        <dt><h4>"Este é o melhor produto que um usuário pode comprar."</h4></dt>
        <dd>
          "Na opinião de um técnico de reparo de computadores, eu acho que a maioria dos problemas são resolvidos verificando o PC com o Advanced SystemCare Free. Quando termino com o reparo eu geralmente sugiro que o cliente compre o pacote PRO. Quem precisa de um técnico quando você tem o poder do Advanced System Care Pro trabalhando no seu sistema 24hx7dias? Este é o melhor produto que um usuário pode comprar. Obrigado por facilitar o meu trabalho!"
        </dd>
      </dl>
      <dl>
        <dt><h4>"Meu sistema nunca rodou melhor."</h4></dt>
        <dd>
          "Na minha opinião, o Advanced SystemCare PRO é o melhor aplicativo de manutenção disponível para o usuário do Windows com suas muitas funções essenciais. Além disso, a IObit disponibiliza excelente atendimento técnico que é competente e profissional adicionando ainda mais valor aos seus produtos e serviços."
        </dd>
      </dl>
      <ul class="username">
        <li class="current">
          <img src="<?php echo $pResUrl; ?>images/bruce-ramsay.png" alt="Bruce Ramsay">
          <p>Bruce Ramsay</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/Loretta-Harnarine.png" alt="Loretta Harnarine">
          <p>Loretta Harnarine</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/charles-r-widick.png" alt="Charles R. Widick">
          <p>Charles R. Widick</p>
        </li>
        <li>
          <img src="<?php echo $pResUrl; ?>images/gordon-griswold.png" alt="Gordon Griswold">
          <p>Gordon Griswold</p>
        </li>
      </ul>
    </div>
    <!-- usereview end -->

    <!-- footbuy start -->
    <div class="footbuy">
      <div class="wrapper clearfix">
        <h2>Advanced SystemCare PRO</h2>
        <p>Escolhido por mais de 250 milhões de usuários no mundo</p>
        <div class="btnbox">
          <a class="btn down" href="https://ld.iobit.com/freedownload/affascfreedownload/download.php?product=asc&ref=<?php echo $refDownloadStr;?>&aff=<?php echo $affStr;?>" onclick="ga('send', 'event', 'ascdl', 'download', 'ptasc12g')">
            <p>Baixe para uma verificação grátis</p>
            Para Win10/8/7/Vista/XP
          </a>
          <a class="btn buy" href="<?php echo $buyHref;?>" onclick="ga('send', 'event', 'ascbuy', 'buy', 'ptaffasc142017general')">
            Compre Agora e Economiza <strong>50%</strong> 
          </a>
        </div>
      </div>
    </div>
    <!-- footbuy end -->

    <!-- service start -->
    <div class="service">
      <div class="wrapper clearfix">
        <dl>
          <dt>100% Limpo</dt>
          <dd><img src="<?php echo $pResUrl; ?>images/godaddy.png" alt=""></dd>
        </dl>
        <dl class="back">
          <dt>Garantia de Reembolso de 60 dias</dt>
          <dd><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""></dd>
        </dl>
        <dl class="last">
          <dt>Suporte 24 horas por dia</dt>
          <dd>
            <img src="<?php echo $pResUrl; ?>images/call.png" alt="">
            <span>Assistência Técnica 24 horas por Dia ao seu Dispor</span>
          </dd>
        </dl>
      </div>
    </div>
    <!-- service end -->

  </div>
  <!-- container end -->

  <!-- footer start -->
  <div class="footer">Copyright © 2005 - <?php echo date('Y')?> IObit. Alle rettigheder forbeholdes.</div>
  <!-- footer end -->

  <!-- backtop start -->
  <div id="backtop" class="backtop" onclick="goTarget($('.header'))"></div>
  <!-- backtop end -->

<script>    
  //userreview 
  $(".username li").mouseover(function(event) {
    var num = $(this).index();
    $(".username li").eq(num).addClass('current').siblings().removeClass('current');
    $("#user dl").eq(num).addClass('active').siblings().removeClass('active');
  });

  //floatlayer
  $(window).on('scroll', function () {
    var scrollHeight = $(".header:last").offset().top;
    if ($(window).scrollTop() > scrollHeight) {
      $('#backtop').addClass('on');
    }else {
      $('#backtop').removeClass('on');
    }
  });

  function goTarget(target,yoffset) {
    if(!yoffset) yoffset = 0;
    var Theigth = target.offset().top - yoffset;
    $("html, body").animate({scrollTop: Theigth}, 'slow');
  }
</script>
</body>
</html>