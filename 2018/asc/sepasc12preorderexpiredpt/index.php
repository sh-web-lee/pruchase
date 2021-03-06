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

$params=json_decode(base64_decode($_GET['data']));
$reg=empty($params->reg)?1113:$params->reg;
$junk=round((empty($params->junk)?9762:(($params->junk)/1024)),2);
$startUp=empty($params->startup)?19:$params->startup;
$internet=empty($params->internet)?21:$params->internet;
$privacy=empty($params->privacy)?2014:$params->privacy;
$ad=empty($params->ad)?0:$params->ad;

$refStr=empty($_GET['ref'])?'':('-'.$_GET['ref']);
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Aproveite 70% de desconto para ter o novo Advanced SystemCare 12 PRO</title>
<meta name="Copyright" content="IObit">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="stylesheet" href='https://fonts.googleapis.com/css?family=Lato:400,600,700'>
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
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
        <h1>Bem-vindo de Volta e Aproveite da nossa Pr??-Venda</h1>
        <h3>Corra! 500 unidades dispon??veis apenas, <span class="soldNum">453</span> j?? foram vendidas.</h3>
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
                 href="https://www.iobit.com/buy.php?product=pt-asc125999&ref=pt_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc"
                 onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-pt');"
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

    <!-- intro-part01 start -->
    <div class="intro intro-part01">
      <div class="wrapper">
        <h3>Vamos Recapitular: </h3>
        <h2>Como Esteve o seu Computador com Advanced SystemCare 11 PRO?</h2>
        <div class="event">
          <!-- bight -->
          <div class="bight"></div>
          <!-- optimized for faster PC -->
          <dl class="optimized clearfix">
            <dd class="fr">
              <p>
                <strong class="startupNum"><?php echo $startUp;?></strong> itens de inicializa????o e<br>
                <strong class="browserNum"><?php echo $internet;?></strong> configura????es de navega????o <br>
                otimizadas para um PC mais r??pido.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon01.png" alt=""></dt>
          </dl>
          <!-- during online surfing  -->
          <dl class="online clearfix">
            <dd>
              <p>
                <strong class="personalNum"><?php echo $privacy;?></strong> rastros de privacidade e  <br>
                <strong class="popupNum"><?php echo $ad;?></strong> an??ncios de pop-up  removidos <br>durante navega????o online.
              </P>
              <span></span>
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon02.png" alt=""></dt>
          </dl>
          <!-- to free up disk  -->
          <dl class="disk">
            <dd>
              <p>
                <strong class="bytesNum"><?php echo $junk;?></strong> MB de Arquivos Lixos<br>
                <strong class="regNum"><?php echo $reg;?></strong> entrados de registro deletados <br>para liberar espa??o em disco.
              </P>
              <span></span>
            </dd>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon03.png" alt=""></dt>
          </dl>
          <!-- Better PC Performance -->
          <p class="better">Melhor Desempenho do PC </p>
        </div>
      </div>
    </div>
    <!-- intro-part01 end -->

    <!-- intro-part02 start -->
    <div class="intro intro-part02">
      <div class="wrapper clearfix">
        <h3>A Partir de Agora:</h3>
        <h2>1 Explore Fun????es Dispon??veis no Novo Advanced SystemCare 12</h2>
        <img class="intro-pc fl" src="<?php echo $pResUrl;?>images/intro-pc.jpg" alt="">
        <div class="right-message fr">
          <!-- Privacy Shield -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon04.png" alt=""></dt>
            <dd>
              <h4>Escudo de Privacidade <span>exclusivo</span></h4>
              <p>Dados privados permanecem protegidos contra programas suspeitos.</p>
            </dd>
          </dl>
          <!-- Digital Fingerprint Protection -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon05.png" alt=""></dt>
            <dd>
              <h4>Prote????o de Assinatura Digital <span>exclusivo</span></h4>
              <p>Nenhum hacker poder?? rastrear e obter suas informa????es pessoais.</p>
            </dd>
          </dl>
          <!-- Unfinished Downloads File Cleaning -->
          <dl>
            <dt><img src="<?php echo $pResUrl;?>images/intro-icon06.png" alt=""></dt>
            <dd>
              <h4><b>Limpeza de Arquivos de Download <br>N??o Terminados</b>  <span>exclusivo</span></h4>
              <p>Se livra de downloads n??o terminados com rapidez para <br>liberar espa??o em disco.</p>
            </dd>
          </dl>
        </div>
      </div>
    </div>
    <!-- intro-part02 end -->

    <!-- intro-part03 start -->
    <div class="intro intro-part03">
      <div class="wrapper clearfix">
        <h2>2 Aproveite de Melhorias Importantes Sobre o Advanced SystemCare 11 PRO</h2>
        <!-- Cleaner -->
        <dl class="cleaner fl">
          <dt>
            <h4>Mais Limpo</h4>
            <img src="<?php echo $pResUrl;?>images/intro-cleaner.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/intro-more30.png')?>" alt=""/>
            <p>Espa??o Livre em Disco</p>
          </dd>
        </dl>
        <!-- Faster -->
        <dl class="faster fl">
          <dt>
            <h4>Mais R??pido</h4>
            <img src="<?php echo $pResUrl;?>images/intro-faster.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/intro-faster20.png')?>" alt=""/>
            <p>R??pido</p>
          </dd>
        </dl>
        <!-- Safer -->
        <dl class="safer fl">
          <dt>
            <h4>Mais Seguro</h4>
            <img src="<?php echo $pResUrl;?>images/intro-safer.png" alt="">
          </dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/intro-more40.png')?>" alt=""/>
            <p>Remo????o de An??ncios</p>
          </dd>
        </dl>
      </div>
    </div>
    <!-- intro-part03 end -->

    <!-- centbuy start -->
    <div class="centbuy">
      <div class="wrapper">
        <h2>Apenas<b><small>R$</small> 59<small>,99</small></b>para voltar para PRO e Aproveitar Todas as Novas Fun????es!</h2>
        <a class="buybtn" 
           href="https://www.iobit.com/buy.php?product=pt-asc125999&ref=pt_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-pt');"
           data-text="Adquirir Agora ">
          <span>Adquirir Agora </span>
        </a>
        <h5>1 Ano de Assinatura / 3 PCs</h5>
      </div>
    </div>
    <!-- centbuy end -->

    <!-- intro-part04 start -->
    <div class="intro-part04">
      <div class="wrapper">
        <h3>Sem a Vers??o PRO Agora, <br>Voc?? Pode Sofrer os Seguintes Problemas</h3>
        <div class="intro-top clearfix">
          <!-- slow computer -->
          <dl class="fl clearfix">
            <dd class="fl">
              <strong>Computador lento</strong>  demora muito <br>para responder e carregar p??ginas <br>da web
            </dd>
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon08.png" alt=""></dt>
          </dl>
          <!-- system freezes or crashes -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon10.png" alt=""></dt>
            <dd class="fl">
              Ocasionalmente encontra <br><strong>travamentos ou lentid??o</strong> s??bita <br>do sistema
            </dd>
          </dl>
        </div>
        <div class="intro-bottom clearfix">
          <!-- cluttering up -->
          <dl class="fl clearfix">
            <dd class="fl">
              Arquivos in??teis e desnecess??rios <br><strong>lotando</strong> o seu disco r??gido 
            </dd>
            <dt class="fr"><img src="<?php echo $pResUrl;?>images/intro-icon09.png" alt=""></dt>
          </dl>
          <!-- annoying ads -->
          <dl class="fr clearfix">
            <dt class="fl"><img src="<?php echo $pResUrl;?>images/intro-icon11.png" alt=""></dt>
            <dd class="fl">
              <strong>An??ncios irritantes</strong> aparecem <br>quando voc?? est?? navegando <br>na internet
            </dd>
          </dl>
        </div>
        <h2>?? Hora de Voltar ao Advanced SystemCare 12 PRO por <b>R$ 59,99</b></h2>
        <a class="buybtn"
           href="https://www.iobit.com/buy.php?product=pt-asc125999&ref=pt_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-pt');"
           data-text="Adquirir Agora">
          <span>Adquirir Agora</span>
        </a>
        <p class="price">1 Ano de Assinatura / 3 Pcs</p>
      </div>
    </div>
    <!-- intro-part04 end -->

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
              <h2>Opini??o da M??dia</h2>
              <p>
                "N??o h?? nada pior que um computador travado que impede voc?? de trabalhar ou jogar. Advanced Systemcare ir?? reparar todos os problemas independente de quais sejam, n??o somente limpando os arquivos in??teis, malware, e entrada de registros inv??lidos, mas tamb??m ir?? dar um boost ao seu computador para otimizar sua experi??ncia de PC."
              </p>
              <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/bruce-ramsay.png')?>" alt="Bruce Ramsay"></dt>
            <dd>
              <h2>Opini??o do Usu??rio</h2>
              <p>"Eu, como muitos outros, comecei com a Vers??o Gr??tis e eventualmente comprei a Vers??o PRO. Ele tem operado, por anos, para manter o meu computador limpo e livre de "bugs" e at?? agora ainda n??o me deixou na m??o vez alguma. Eu, recentemente, contactei a equipe do Advanced System Care e recebi a resposta dentro de um ou dois dias com tudo que eu precisava saber. Na minha opini??o, o Suporte ao Cliente ?? essencial na minha decis??o de continuar usando o produto e o ASC ganha de qualquer outro produto quando se trata de Suporte ao Cliente e Produto."</p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/hank-ewert.png')?>" alt="Hank Ewert"></dt>
            <dd>
              <h2>Opini??o do Usu??rio</h2>
              <p>"Como a maioria das pessoas, eu n??o sou um expert em computadores. Eu perdi a conta de quantos programas eu tentei em anos e nenhum chegou perto do Advanced SystemCare Pro. Desde que eu tenho este programa eu n??o precisei chamar um t??cnico para reparar meu computador sequer uma vez. Definitivamente ultrapassou as minhas expectativas, sempre atualizado e o visual ?? bem legal tamb??m. Obrigado a voc??s por fazerem minha vida t??o mais f??cil."</p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/loretta-harnarine.png')?>" alt="Loretta Harnarine"></dt>
            <dd>
              <h2>Opini??o do Usu??rio</h2>
              <p>"Esse programa ?? o melhor que j?? usei. Meu computador est?? rodando muito mais r??pido e muito melhor em geral desde que adquiri Advanced SystemCare Pro. O programa limpou arquivos desnecess??rios e duplicados, pastas vazias e eu o usei para destruir arquivos. Tamb??m limpou e desfragmentou o registro e todos os arquivos no meu PC. Eu recomendo que voc?? compre este programa. N??o ?? caro e o que far?? pelo seu computador ?? totalmente incr??vel. Voc?? vai amar, eu prometo."</p>
              <cite>Loretta Harnarine</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><img src="<?php echo getStaticUrl('images/charles-r-widick.png')?>" alt="Charles R. Widick"></dt>
            <dd>
              <h2>Opini??o do Usu??rio</h2>
              <p>"Na opini??o de um t??cnico de reparo de computadores, eu acho que a maioria dos problemas s??o resolvidos escaneando o PC com o ASC Free. Quando termino com o reparo eu geralmente sugiro que o cliente compre o pacote PRO. Quem precisa de um t??cnico quando voc?? tem o poder do Advanced System Care Pro trabalhando no seu sistema 24hx7dias? Este ?? o melhor produto que um usu??rio pode comprar. Obrigado por facilitar o meu trabalho!"</p>
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
        <h2>Recomendado tamb??m por</h2>
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
          <p>Copyright ?? 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
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
           href="https://www.iobit.com/buy.php?product=pt-asc125999&ref=pt_asc12preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc"
           onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-pt');"
           data-text="Adquirir Agora">
          <span>Adquirir Agora</span>
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
    var _ga = "ga('send', 'event', 'ascbuy', 'buy', 'asc12predorderexpired-pt');";
    var _url = "https://www.iobit.com/buy.php?product=pt-asc12preorder6999&ref=pt_asc12preorderexpired6999<?php echo $refStr;?>&aff=<?php echo $_GET['aff'];?>&refs=pt_purchase_asc";
  </script>

</body>
</html>