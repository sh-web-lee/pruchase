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
  $c_name = 'ptascexd_p' . $date;
  $c_name_t='ptascexd_t' . $date;
  if ($_COOKIE[$c_name]===null) {
    $totalNum=$packsNum=rand(49,55);
    setcookie($c_name, $packsNum, time() + 3600 * 24 *2);
    setcookie($c_name_t,$totalNum, time() + 3600 * 24 *2);
  } else {
    if (intval($_COOKIE[$c_name]) <= 0) {
      $packsNum = 0;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    } else {
      $packsNum = $_COOKIE[$c_name] - 1;
      setcookie($c_name, $packsNum, time() + 3600 * 24 * 2);
    }
  }
  echo json_encode(array('packsNum'=>$packsNum));
  exit();
}

$refStr=empty($_GET['st'])?'':('-'.$_GET['st']);

function paramDeal($num,$decimals,$separate=',',$decimal='.'){
  return empty($num)?'':number_format($num,$decimals,$decimal,$separate);
}

$params=json_decode(base64_decode($_GET['data']));
$fileSizeShow=paramDeal($params->junk/(1024*1024*1024),2,'.','.');
$fileSizeUnit='GB';
if($fileSizeShow<=1){
  $fileSizeShow=paramDeal($params->junk/(1024*1024),2,'.','.');
  $fileSizeUnit='MB';
}
$paramJunk=empty($fileSizeShow)?'':($fileSizeShow.' '.$fileSizeUnit);
$paramPri=paramDeal($params->privacy,0,'.','.');
$paramPro=paramDeal($params->program,0,'.','.');
?>
<!DOCTYPE html>
<html lang="pt">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<title>Tenha 65% de Desconto no novo Advanced SystemCare 13 PRO - IObit</title>
<meta name="Copyright" content="IObit">
<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
<link rel="icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link rel="shortcut icon" href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" mce_href="<?php echo $pRootUrl; ?>tpl/img/favicon.ico" type="image/x-icon">
<link href="https://fonts.googleapis.com/css?family=Montserrat:500,600,700,800&display=swap" rel="stylesheet">
<link href="<?php echo getStaticUrl('style/style.css')?>" rel="stylesheet">
<?php echo $gJavascript['public'];?>
<?php echo $gJavascript['head']; ?>
</head>

<body>

<!-- banner start -->
<!-- banner start -->
<div class="banner">
  <div class="wrapper">
    <a class="logo" href="https://www.iobit.com/pt/index.php" target="_blank">IObit</a>
    <span class="delta delta01"></span>
    <span class="delta delta02"></span>
    <img src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 13 PRO" class="asc-box"/>
    <div class="right-message">
      <h2><span>Advanced SystemCare 13 PRO</span> <i></i></h2>
      <h3>Mais Barato que Comprar um Computador Novo</h3>
      <dl>
        <dt class="price">
          <strong>R$ <b>66,99</b></strong> <a href="https://www.iobit.com/buy.php?product= pt-asc13preorder6699&ref=pt_asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-pt');" class="buybtn"><span>Comprar Agora</span></a>
        </dt>
        <dd class="number">
          <span><span class="viewNum"><?php echo $viewNum;?></span> VENDO.</span> CORRE, APENAS
          <div class="countdown">
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick"><span>0</span></div>
            <div class="scroll-tick last"><span>0</span></div>
          </div>
          RESTANTES 
        </dd>
      </dl>
    </div>
    <span class="arrow"></span>
  </div>
</div>
<!-- banner end -->

<!-- intro start -->
<div class="intro">
  <div class="wrapper">
    <h2>O que o AdvancedSystemCare PRO Fez pra Você?</h2>
    <div class="clearfix">
      <div class="left fl">
        <img src="<?php echo getStaticUrl('images/screen01.png')?>" alt=""/>
        <img class="besom" src="<?php echo getStaticUrl('images/besom.png')?>" alt=""/>
        <div class="scan">EXAMINAR</div>
      </div>
      <ul class="right fr">
        <li>
          <i class="all-icons">●</i>
          <span>Limpou <b>XX</b> Espaço em Disco </span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Limpou <b>XX</b> Rastros de Privacidade</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Acelerou a Inicialização do PC <b>200%</b> mais Rápido </span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Acelerou a Navegação Online <b>300%</b> mais Rápido</span>
        </li>
        <li>
          <i class="all-icons">●</i>
          <span>Bloqueou <b>XX vezes</b> Acesso Não-autorizado a  Privacidade</span>
        </li>
      </ul>
    </div>
  </div>
</div>
<!-- intro end -->

<!-- enjoy start -->
<div class="enjoy">
  <div class="wrapper clearfix">
    <span class="arrow"></span>
    <div class="left fl">
      <h3>Agora com sua Licença Expirada,</h3>
      <h2>Você <b>Não</b> Terá Mais:</h2>
      <ul>
        <li>
          <i class="all-icons">√</i>
          <span>Limpeza profunda de arquivos de registro para corrigir problemas de sistema</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Limpeza automática de RAM para manter seu PC rodando com velocidade</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Aceleração da inicialização do PC e da conexão de Internet</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Proteção de dados pessoais para evitar vazamento de privacidade</span>
        </li>
        <li>
          <i class="all-icons">√</i>
          <span>Proteção em tempo real para bloquear infecção por malware</span>
        </li>
      </ul>
    </div>
    <div class="right fr">
      <img src="<?php echo getStaticUrl('images/screen02.png')?>" alt=""/>
      <img class="forbid" src="<?php echo getStaticUrl('images/forbid.png')?>" alt="">
    </div>
  </div>
</div>
<!-- enjoy end -->

<!-- feature start -->
<div class="feature">
  <div class="wrapper">
    <h2>Com as Seguintes Funções,<br> O Novo Advanced SystemCare 13 PRO Melhora o Desempenho do seu PC</h2>
    <div class="clearfix">
      <dl class="blue">
        <dt><img src="<?php echo getStaticUrl('images/f-icons01.png')?>" alt=""/></dt>
        <dd>
          <h3>4GB<small>*</small></h3>
          <p>Detecta e limpa <b>mais de 4GB*</b> de arquivos lixos.</p>
        </dd>
      </dl>
      <dl class="purple">
        <dt><img src="<?php echo getStaticUrl('images/f-icons02.png')?>" alt=""/></dt>
        <dd>
          <h3>200</h3>
          <p>Limpa rastros pessoais de mais de <b>200</b> programas e <b>15</b> navegadores para todas as contas de usuários</p>
        </dd>
      </dl>
      <dl class="green">
        <dt><img src="<?php echo getStaticUrl('images/f-icons03.png')?>" alt=""/></dt>
        <dd>
          <h3>e-mail</h3>
          <p>Protege seu <b>e-mail</b> de várias ameaças</p>
        </dd>
      </dl>
      <dl class="orange">
        <dt><img src="<?php echo getStaticUrl('images/f-icons04.png')?>" alt=""/></dt>
        <dd>
          <h3>60%</h3>
          <p><b>60%</b> mais programas podem ser atualizados com 1-clique</p>
        </dd>
      </dl>
    </div>
  </div>
</div>
<!-- feature end -->

<!-- review start -->
<div class="review-wrap">
  <div class="wrapper">
    <div class="review">
      <div id="dg-container" class="dg-container">
        <div class="nav">
          <span class="dg-prev"></span>
          <span class="dg-next"></span>
        </div>
        <div class="content dg-wrapper">
          <dl class="reviews active">
            <dt><h2><span>Opinião da Mídia</span></h2></dt>
            <dd>
              <p class="on">"Não há nada pior que um computador travado que impede você de trabalhar ou jogar. Advanced Systemcare irá reparar todos os problemas independente de quais sejam, não somente limpando os arquivos inúteis, malware, e entrada de registros inválidos, mas também irá dar um boost ao seu computador para otimizar sua experiência de PC."</p>
             <cite>Cnet</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Opinião do Usuário</span></h2></dt>
            <dd> 
              <p>Eu tentei vários programas que prometiam manter meu computador rodando sem problemas, até que eu instalei o Advanced SystemCare anos atrás na versão FREE. Logo eu parei de sofrer com lentidão e outros problemas, então eu adquiri a versão PRO e nunca mais olhei para trás. Advanced SystemCare PRO é o único que eu recomendo baseado nas minhas experiências. Eu também uso o IObit Uninstaller, Smart Defrag e Driver Booster para fazer as coisas ainda melhor.</p>
              <cite>Richard Beavers</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Opinião do Usuário</span></h2></dt>
            <dd>
              <p>Advanced SystemCare é um programa ótimo. Eu uso este programa por muitos anos e funciona perfeitamente. Eles estão sempre melhorando seus produtos e só melhorou com o tempo. Eu uso muito de seus produtos e todos eles me são úteis.</p>
              <cite>Patsy Clark</cite>
            </dd>
          </dl>
          <dl class="reviews">
            <dt><h2><span>Opinião do Usuário</span></h2></dt>
            <dd>
              <p>Eu ainda não encontrei um programa melhor que o Advanced SystemCare para manutenção e segurança do PC. Desde que eu comprei o Advanced SystemCare PRO eu não tive mais problemas com vírus, phishing, telas pretas ou outros problemas. É o melhor dinheiro que já gastei em qualquer coisa relacionada com computadores. Obrigado Advanced SystemCare por fazer minha experiência no PC muito mais agradável.</p>
              <cite>Danny R. Sheets</cite>
            </dd>
          </dl>

        </div>
        <ul>
          <li class="first" data-num="3"><img src="<?php echo getStaticUrl('images/richard-preston.png')?>" alt="Richard Preston"></li>
          <li class="active" data-num="0"><img src="<?php echo getStaticUrl('images/cnet.png')?>" alt="Cnet"></li>
          <li class="two" data-num="1"><img src="<?php echo getStaticUrl('images/richard-beavers.png')?>" alt="Richard Beavers"></li>
          <li class="three" data-num="2"><img src="<?php echo getStaticUrl('images/patsy-clark.png')?>" alt="Patsy Clark"></li>
        </ul>
      </div>
    </div>
  </div>
</div>
<!-- review end -->

<!-- awards start -->
<div class="awards">
  <div class="wrapper">
    <h2>Prêmios Mundiais</h2>
    <p>
      Reconhecido pelos grandes veículos de mídia especializados
    </p>
    <img src="<?php echo getStaticUrl('images/awards.png')?>" alt=""/>
  </div>
</div>
<!-- awards end -->

  
  <!-- footer start -->
  <div class="footer">
    <dl class="wrapper">
      <dd>
       Note:
      </dd>
      <dd>*.Nós testamos o Advanced SystemCare 13 PRO nos nossos laborátios internos. </dd>
    </dl>
    <p>Copyright © 2005 - <?php echo date('Y')?> IObit. Todos os Direitos Reservados</p>
  </div>
  <!-- footer end -->

<!-- floatlayer start -->
<div id="floatlayer" class="floatlayer">
  <div class="wrapper clearfix">
    <img class="fl" src="<?php echo getStaticUrl('images/asc-box.png')?>" alt="Advanced SystemCare 12 PRO" width="121"/>
    <div class="number">
      <span><span class="viewNum"><?php echo $viewNum;?></span> VENDO.</span> CORRE, APENAS
      <div class="countdown">
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick"><span>0</span></div>
        <div class="scroll-tick last"><span>0</span></div>
      </div>
      RESTANTES 
    </div>
    <div class="price">
      <strong>R$ <b>66,99</b></strong> <a href="https://www.iobit.com/buy.php?product= pt-asc13preorder6699&ref=pt_asc13preorderexpired<?php echo $refStr;?>&aff=<?php echo $_GET['aff']; ?>&refs=pt_purchase_asc" onclick="ga('send', 'event', 'ascbuy', 'buy', 'asc13predorderexpired-pt');" class="buybtn"><span>Comprar Agora</span></a>
    </div>
  </div>
</div>
<!-- floatlayer end -->
  <script>
    $(".intro .wrapper .right b").eq(0).html("<?php echo $paramJunk?>").end().eq(1).html("<?php echo $paramPri?>").end().
      eq(4).html("<?php echo $paramPro;?>");
  </script>
  <script>refStr="<?php echo $refStr;?>";</script>
  <script src="<?php echo $pRootUrl;?>tpl/js/modernizr.min.js"></script>
  <script src="<?php echo getStaticUrl('script/jquery.animateNumber.min.js')?>"></script>
  <script src="<?php echo getStaticUrl('script/script.js')?>"></script>
</body>
</html>