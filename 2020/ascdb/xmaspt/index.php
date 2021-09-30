<?php  
  error_reporting(0);
  define("IObit","IObit");
  if (@!$include){
    $pResUrl = './'; 
    $pRootUrl = '../../../'; 
  }
  include $pRootUrl.'include/common.inc.php';

$viewNum=rand(98,165);
if($_GET['action']=='getViewNum'){
  echo $viewNum;
  exit();
}
if ($_GET['action'] == 'getPacks') {
  $date = $_GET['d'];
  $c_name = 'ascdbxmaspt_p' . $date;
  $c_name_t='ascdbxmaspt_t' . $date;
  $isInit=$_GET['isInit'];
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=(intval($_GET['packsNum'])>0)?intval($_GET['packsNum']):49;
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      if($isInit==1){
        $packsNum = intval($_COOKIE[$c_name]);
      }else {
        $packsNum = $_COOKIE[$c_name] - 1;
      }
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);
$refStr.=empty($_GET['ref'])?'':('-'.$_GET['ref']);
$refStr.=empty($_GET['to'])?'':('-'.$_GET['to']);
$refStr.=empty($_GET['insur'])?'':('-'.$_GET['insur']);
$refStr.=empty($_GET['ver'])?'':('-'.$_GET['ver']);
$refStr.=empty($_GET['pop'])?'':('-'.$_GET['pop']);
$refStr.=empty($_GET['r'])?'':('-'.$_GET['r']);
if(in_array($_GET['type'],array('pro','giveawayexp'))){
    $refStr.='-'.$_GET['type'];
}
$refStr.='-i'.$_GET['instd'].'-u'.$_GET['usr'].'-l'.$_GET['litype'].'-e'.$_GET['expd'];
$isNewUser=false;
if(preg_match('/^13\./',$_GET['ver'])){
  $isNewUser=true;
}

$packsNum=49;
$transData=json_decode(base64_decode($_GET['num']));
if(!empty($transData)){
  if(@intval($transData->seats)){
    $packsNum=@intval($transData->seats);
  }
}
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Adquira Advanced SystemCare 14 Pro com Driver Booster 8 Pro com 75% de desconto. Oferta Especial de Natal da IObit.  </title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,900i&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>
  <!-- bann er start -->
  <div class="banner">
    <div class="wrapper">
      <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
      <h1 class="title">Natal Grande Venda Sua última chance para economizar!</h1>
      <div class="clearfix">
        <div class="imgbox fl ribbon">
          <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
          <div class="discount">75% OFF</div>
        </div>
        <div class="msgbox fl">
          <div class="change-title"><h2>75% OFF para as PRIMEIRAS 999 Compras</h2></div>
          <div class="numbox">
            <div id="flip" class="flipNum">
            
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>
              </div>
              <div class="numwrap">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div>          
              </div>
              <div class="numwrap last">
                <div class="listbox">
                  <span class="list">
                    <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
                  </span>
                </div> 
              </div>
            </div>
            <span> Pacotes Restantes</span>
          </div>
          <ul class="price">
            <li class="first">
              <p><strong class="change-price">R$<big>119,99</big></strong> <del>R$ 499.80</del></p>
              <p>1 ano de assinatura / 3 Pcs</p>
            </li>
            <li>
              <a class="buybtn exbtn"
                 href="https://www.iobit.com/buy.php?product=pt-asc14db3pc11999&ref=pt_ascdb3pcpurchase2011rc<?php echo $refStr?>&refs=pt_purchase_ascdb" 
                 onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase2011-pt')">
                 Ativar Agora
              </a>
            </li>
          </ul>
        </div>
      </div>
    </div>
    <div class="try">
    Tente SEM RISCOS – Ative agora para manter seu PC em excelente estado com uma Garantia de Reembolso de 60 dias
    </div>
  </div>
  <!-- banner end -->

  <!-- intro start -->
  <div class="intro">
    <div class="wrapper">
      <h2>O que está incluindo no pacote de natal?</h2>
      <div class="computer">
        <img class="screen asc" src="<?php echo getStaticUrl('images/asc-screen.png')?>" alt=""/>
        <img class="screen db" src="<?php echo getStaticUrl('images/db-screen.png')?>" alt=""/>
        <dl class="asc">
          <dt>
            <h3>
              <span>Advanced SystemCare 14 PRO</span>
              <img src="<?php echo getStaticUrl('images/asc-icon.png')?>" alt=""/>
            </h3>
          </dt>
          <dd>Otimizador tudo-em-um para limpar seu PC automaticamente e deixá-lo até 200% mais rápido.</dd>
        </dl>
        <dl class="db">
          <dt>
            <h3>
              <img src="<?php echo getStaticUrl('images/db-icon.png')?>" alt=""/>
              <span>Driver Booster 8 PRO</span>
            </h3>
          </dt>
          <dd>Atualizador de Drivers de fácil uso para atualizar drivers com velocidade maxima de download e automaticamente </dd>
        </dl>
        <span class="line line03"></span>
      </div>
    </div>
  </div>
  <!-- intro end -->

  <!-- feature start -->
  <div class="feature">
    <h2>Por que vale a pena?</h2>
    <div class="asc wrapper clearfix">
      <div class="imgbox fl">
        <img src="<?php echo getStaticUrl('images/asc-big-screen.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
      </div>
      <div class="msgbox fr">
      <dl>
          <dt><b>Mais Inteligente</b> <span>PRO apenas</span></dt>
          <dd>
          Reduz travamentos e mensagens de erros completamente como novo modo AI
          </dd>
        </dl>
        <dl>
          <dt><b>PC 200%* Mais Rápido</b> <span>PRO apenas</span></dt>
          <dd>
          Limpa e otimiza automaticamente o sistema para deixar seu PC mais rápido.
          </dd>
        </dl>
        <dl>
          <dt><b>Internet 300%* Mais Rápida</b> <span>PRO apenas</span></dt>
          <dd>
          Download, navegação, jogos online e vídeos do Youtube carregam mais rápidos.
          </dd>
        </dl>
        <dl>
          <dt><b>Proteção de Privacidade</b> <span>PRO apenas</span></dt>
          <dd>
          Bloqueia acesso não autorizado aos seus contatos, e-mails e outros dados privados.
          </dd>
        </dl>
        <dl>
          <dt><b>Navegação Segura</b> <span>PRO apenas</span></dt>
          <dd>
          Previne que rastreiem o que você lê, visualiza e compra.
          </dd>
        </dl>
        
      </div>
    </div>
    <div class="line-center">

    </div>
    <div class="db wrapper clearfix">
      <div class="msgbox fl">
        <dl>
          <dt><b>Banco de Dados de Mais de 4,500,000 de Drivers</b> <span>PRO apenas</span></dt>
          <dd>Verifica automaticamente e atualiza mais de 4.500.000 de Drivers.</dd>
        </dl>
        <dl>
          <dt><b>Velocidade Ilimitada</b> <span>PRO apenas</span></dt>
          <dd>Destrava o limite de velocidade para um download até 100%* mais rápido.</dd>
        </dl>
        <dl>
          <dt><b>Melhor Experiência em Jogos</b> <span>PRO apenas</span></dt>
          <dd>Recomenda componentes de jogos para acelerar seus jogos. </dd>
        </dl>
        <dl>
          <dt><b>Download e Atualização Seguras de Drivers</b> <span>PRO apenas</span></dt>
          <dd>Faz backup e cria um ponto de restauração do sistema antes de atualizar</dd>
        </dl>
        <dl>
          <dt><b>Atualização Offline de Drivers</b> <span>PRO apenas</span></dt>
          <dd>Atualiza e instala drivers de rede offline </dd>
        </dl>
      </div>
      <div class="imgbox fr">
        <img src="<?php echo getStaticUrl('images/db-big-screen.png')?>" alt=""/>
        <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt=""/>
      </div>
    </div>
  </div>
  <!-- feature end -->

  <!-- centbuy start -->
  <div class="centbuy">
    <div class="wrapper">
      <h2>Qual é a melhor hora para comprar?</h2>
      <div class="clearfix">
        <div class="imgbox fl">
          <img src="<?php echo getStaticUrl('images/center-box.png')?>" alt=""/>
          <!-- <span class="original"><em>€49,99</em></span>
          <span class="original last"><em>€74,85</em></span> -->
        </div>
        <div class="chart fl">
          <div class="clist one">
            <h3 class="cost"><span>50%</span> OFF</h3>
            <span class="month">Antes</span>
          </div>
          <div class="clist two">
            <h3 class="cost"><span>75%</span> OFF</h3>
            <span class="month">Hoje</span>
          </div>
          <div class="clist three">
            <h3 class="cost"><span>60%</span> OFF</h3>
            <span class="month">Ano Novo</span>
          </div>
        </div>
      </div>
      <div class="price">
        <p><strong class="change-price"> R$ <big>119,99</big></strong> <del>R$ 499.80</del></p>
        <a class="buybtn exbtn"
           href="https://www.iobit.com/buy.php?product=pt-asc14db3pc11999&ref=pt_ascdb3pcpurchase2011rc<?php echo $refStr?>&refs=pt_purchase_ascdb" 
           onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase2011-pt')">
             Ativar Agora
        </a>
        <p> 1 ano de assinatura/ 3 Pcs</p>
      </div>
    </div>
  </div>
  <!-- centbuy end -->

  <!-- review start -->
  <div class="review">
    <div class="wrapper">
      <h2>Avaliação de Usuários como Você</h2>
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
        <dl class="reviews active">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd>
              <p  class="on">
              Driver Booster é verdadeiramente o melhor atualizador de drivers no mercado. Possui uma interface amigável, é simples de usar e faz seu trabalho melhor do que qualquer atualizador de drivers que já usei. Esse programa é merecedor de nota máxima. Recomendo fortemente.
              </p>
              <cite>Hishaam Salasa</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd>
              <p>
              "Eu, como muitos outros, comecei com a Versão Grátis e eventualmente comprei a Versão PRO. Ele tem operado, por anos, para manter o meu computador limpo e livre de "bugs" e até agora ainda não me deixou na mão vez alguma. Eu, recentemente, contactei a equipe do Advanced System Care e recebi a resposta dentro de um ou dois dias com tudo que eu precisava saber. Na minha opinião, o Suporte ao Cliente é essencial na minha decisão de continuar usando o produto e o ASC ganha de qualquer outro produto quando se trata de Suporte ao Cliente e Produto."
              </p>
              <cite>Bruce Ramsay</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd>
              <p>
              "Como a maioria das pessoas, eu não sou um expert em computadores. Eu perdi a conta de quantos programas eu tentei em anos e nenhum chegou perto do Advanced SystemCare Pro. Desde que eu tenho este programa eu não precisei chamar um técnico para reparar meu computador sequer uma vez. Definitivamente ultrapassou as minhas expectativas, sempre atualizado e o visual é bem legal também. Obrigado a vocês por fazerem minha vida tão mais fácil."
              </p>
              <cite>Hank Ewert</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd>
              <p>
              "Na opinião de um técnico de reparo de computadores, eu acho que a maioria dos problemas são resolvidos escaneando o PC com o ASC Free. Quando termino com o reparo eu geralmente sugiro que o cliente compre o pacote PRO. Quem precisa de um técnico quando você tem o poder do Advanced System Care Pro trabalhando no seu sistema 24hx7dias? Este é o melhor produto que um usuário pode comprar. Obrigado por facilitar o meu trabalho!"
              </p>
              <cite>Charles R. Widick</cite>
            </dd>
          </dl>

          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd> 
              <p>
              "Com Driver Booster, eu consigo saber facilmente quais drivers estão desatualizados e posso atualizá-los com facilidade. Além disso, me ajuda a reparar erros com de e rede. Eu não acreditava antes de usar, mas depois de testá-lo eu o adorei, pois meu PC está mais estável, rápido e seguro do que 8 meses atrás. Muito obrigado, IObit."
              </p>
              <cite>Myo Thuya</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h3><span>Opinião do Usuário</span></h3></dt>
            <dd>
              <p>
              "Driver Booster é um aplicativo sensacional. Se você é como eu e tem diversos aplicativos e dispositivos e não tem tempo para atualizá-los manualmente, eu recomendo fortemente o Driver Booster, ele te ajuda a atualizar drivers com velocidade e conveniência.”
              </p>
              <cite>Adam Backlund</cite>
            </dd>
          </dl>
         
        </div>
        <ul>
          <li class="first" data-num="4"><img src="<?php echo getStaticUrl('images/myo-thuya.png')?>" alt="Myo-Thuya"></li>
          <li class="two" data-num="5"><img src="<?php echo getStaticUrl('images/adam-backlund.png')?>" alt="Adam-Backlund"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/hishaam_salasa.png')?>" alt="Hishaam Salasa"></li>
          <li class="three" data-num="1"><img src="<?php echo getStaticUrl('images/Bruce-Ramsay.png')?>" alt="Bruce Ramsay"></li>

          <li class="four" data-num="2"><img src="<?php echo getStaticUrl('images/Hank-Ewert.png')?>" alt="Hank Ewert"></li>
          <li class="five last" data-num="3"><img src="<?php echo getStaticUrl('images/Charles-R-Widick.png')?>" alt="Lyle Stelmaschuk"></li>
        </ul>
      </div>
    </div>
  </div>
  <!-- review end -->

  <!-- awards start -->
  <div class="awards">
    <div class="wrapper">
      <h2>Recomendado pela Mídia Especializada</h2>
      <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
    </div>
  </div>
  <!-- awards end -->

  <!-- footer start -->
  <div class="footer">
    <div class="wrapper">
      <div class="service">
        <dl class="left fl">
          <dt><img src="<?php echo getStaticUrl('images/moneyback.png')?>" alt=""/></dt>
          <dd>
            <h3>Tente SEM RISCOS –</h3>
            <p>
             com nossa garantia de reembolso de 60 dias nós estamos confiantes que a versão PRO vai melhorar o desempenho do seu PC!
            </p>
          </dd>
        </dl>
        <dl class="right fr">
          <dt><h3>Nós aceitamos</h3></dt>
          <dd>
            <img src="<?php echo getStaticUrl('images/payment.png')?>" alt=""/>
          </dd>
        </dl>
      </div>
      <dl>
        <dt>Observe:</dt>
        <dd>1*.Os programas promocionais estão sujeitos a alteração sem aviso prévio, de tempos em tempos conforme nossos critérios.*.</dd>
        <dd>2*.Informações podem variar com base em diferentes sistemas ou computadores.</dd>
      </dl>
      <p class="copyright">Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
    </div>
  </div>
  <!-- footer end -->

  <!-- floatlayer start -->
  <div id="floatlayer" class="floatlayer">
    <div class="wrapper clearfix">
      <div class="imgbox ribbon fl">
        <img src="<?php echo getStaticUrl('images/asc-db-box.png')?>" alt=""/>
        <div class="discount">80% Rabatt</div>
      </div>
      <div class="numbox fl">
        <div id="fliptwo" class="flipNum">
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>
          </div>
          <div class="numwrap">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div>          
          </div>
          <div class="numwrap last">
            <div class="listbox">
              <span class="list">
                <b>0</b><b>1</b><b>2</b><b>3</b><b>4</b><b>5</b><b>6</b><b>7</b><b>8</b><b>9</b>
              </span>
            </div> 
          </div>
        </div>
        <p class="change"><b class="viewNum"><?php echo $viewNum;?></b> visitantes agora, <b class="packsNum">50</b> pacotes restantes.</p>
      </div>
      <ul class="price fl">
        <li class="first">
          <p><strong class="change-price">R$<big>119,99</big></strong> <del>R＄499.80</del></p>
          <p>1 ano de assinatura / 3 pcs</p>
        </li>
        <li>
          <a class="buybtn exbtn"
             href="https://www.iobit.com/buy.php?product=pt-asc14db3pc11999&ref=pt_ascdb3pcpurchase2011rc<?php echo $refStr?>&refs=pt_purchase_ascdb" 
             onclick="ga('send', 'event', 'ascdbbuy', 'buy', 'ascdbpurchase2011-pt')">
             Ativar Agora
          </a>
        </li>
      </ul>
    </div>
  </div>
  <!-- floatlayer end -->

  <script>
    packsNum=<?php echo $packsNum;?>;
    refStr="<?php echo $refStr;?>";
  </script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>